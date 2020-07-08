<?php
class CabinetController extends Controller
{
	public function index() {
		if ($this->isAuthorized()) {
			$this->render('cabinet', [
				'user' => (new User(['id' => $_COOKIE['user']]))->get()
			]);
		} else {
			$this->redirect('auth');
		}
	}
}