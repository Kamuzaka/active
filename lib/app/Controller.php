<?php
class Controller
{
	protected function render($view, $data) {
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
}