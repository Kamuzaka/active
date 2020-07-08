<?php
class EventsController extends Controller
{
	public function index() {
		$event = new Event([]);
		$this->render('events', [
			'list' => $event->all()
		]);
	}

}