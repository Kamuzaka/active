<?php
class MembersController extends Controller
{
	public function index() {
		$user = new User([]);
		$this->render('members', [
			'list' => $user->all()
		]);
	}
}