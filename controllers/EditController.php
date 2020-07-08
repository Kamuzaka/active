<?php
class EditController extends Controller
{
	public function index() {
		if ($this->isAdmin()) {
			$model = new User([]);
			$this->render('edit', [
				'list' => $model->all()
			]);
		} else {
			$this->redirect('auth');
		}
	}
}