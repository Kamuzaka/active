<?php
class CreateController extends Controller
{
	public function index() {
		$data = [];
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$event = new Event($_POST);
			if (empty($data['errors'])) {
				$event->createEvent();
				$this->redirect('main');
			}
		}
		
		$this->render('create', $data);
	}
}
