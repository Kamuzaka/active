<?php
class Info_eventsController extends Controller
{
	public function index() {
		if ($this->isAdmin()) {
			$this->render('info_events', []);
		} else {
			$this->redirect('auth');
		}
	}
}