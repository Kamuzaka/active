<?php
class Info_eventsController extends Controller
{
	public function index() {
		if ($this->isAdmin()) {
			$model = new Event([]);
			$this->render('info_events', [
				'list' => $model->all()
			]);
		} else {
			$this->redirect('auth');
		}
	}
}