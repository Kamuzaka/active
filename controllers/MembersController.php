<?php
class MembersController extends Controller
{
	public function index() {

	$user = new User(['id' => $_COOKIE['members']);


		$this->render('members', [
			'member' => $member->get(),
			'list' => $list,
			'text_info' => $text_info,
			'userObject' => $user
		]);
}