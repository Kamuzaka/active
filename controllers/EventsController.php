<?php
class EventsController extends Controller
{
	public function index() {
		$this->render('events', []);
	}

	$event = new User(['id' => $_COOKIE['user'], 'teacher' => $_COOKIE['teacher']]);

		$header = 
		$list = $user->isTeacher() ? $user->getAllStudents($user->id) : $user->getAllTeachers($user->id);

		$this->render('events', [
			'member' => $user->get(),
			'header' => $header,
			'text_info' => $text_info,
			'userObject' => $user
		]);
}