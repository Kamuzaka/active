<?php
class AuthController extends Controller
{
	public function index() {
		setcookie('auth', FALSE, time()+3600, '/', $_SERVER['HTTP_HOST']);
		setcookie('admin', FALSE, time()+3600, '/', $_SERVER['HTTP_HOST']);
		setcookie('user', FALSE, time()+3600, '/', $_SERVER['HTTP_HOST']);
		$this->render('auth', []);
	}

	public function login() {
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			if ($_POST['login'] == 'admin' && $_POST['password'] == 'admin') {
				setcookie('auth', TRUE, time()+3600, '/', $_SERVER['HTTP_HOST']);
				setcookie('admin', TRUE, time()+3600, '/', $_SERVER['HTTP_HOST']);
				$this->redirect('main');
			} elseif ($user = (new User($_POST))->get()) {
				setcookie('user', $user['id_members'], time()+3600, '/', $_SERVER['HTTP_HOST']);
				setcookie('auth', TRUE, time()+3600, '/', $_SERVER['HTTP_HOST']);
				$this->redirect('main');
			}
		}
		$this->render('auth', ['error' => true]);
	}
}