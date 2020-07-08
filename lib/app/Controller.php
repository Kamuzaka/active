<?php
class Controller
{

	protected function render($view, $data) {
		$data['admin'] = $this->isAdmin();
		$data['user'] = $this->isAuthorized() && !$this->isAdmin() ? (new User(['id' => $_COOKIE['user']]))->get() : NULL;

		if (file_exists(THEMES . $view . '.php')) {
			global $themes;
			include(THEMES . $view . '.php');
			die();
		} else {
			Router::throwError(404, '404 Страница не найдена');
		}
	}

	protected function redirect($url) {
		header('Location: ' . '/' . $url . '/');
	}

	protected function isAuthorized() {
		return (isset($_COOKIE['auth']) && $_COOKIE['auth']);
	}

	protected function isAdmin() {
		return $this->isAuthorized() && isset($_COOKIE['admin']) && $_COOKIE['admin'];
	}
}