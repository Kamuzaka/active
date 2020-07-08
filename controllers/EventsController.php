<?php
class EventsController extends Controller
{
	public function index() {
		$event = new User(['id' => $_COOKIE['user'], 'teacher' => $_COOKIE['teacher']]);

		$this->render('events', []);
	}

}