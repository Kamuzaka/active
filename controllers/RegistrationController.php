<?php
class RegistrationController extends Controller
{
	public function index() {
		$data = [];
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$user = new User($_POST);
			if (empty($data['errors'])) {
				$user->create();
				$this->render('main',['success' => 'Теперь ты активист нашего факультета']);
			}
		}
		$this->render('registration', $data);
	}
}