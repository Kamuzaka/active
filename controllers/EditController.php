<?php
class EditController extends Controller
{
	public function index() {
		if ($this->isAdmin()) {
			$this->render('edit', []);
		} else {
			$this->redirect('auth');
		}
	}
}