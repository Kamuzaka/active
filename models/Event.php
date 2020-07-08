<?php

class Event extends Model
{
	public $fields;

	public function createEvent() {

		try {
			$stmt = $this->db->prepare("INSERT INTO events SET header = ?, description = ?, points = ?, event_date = ?");
			$stmt->execute([
				$this->fields['header'],
				$this->fields['description'],
				$this->fields['points'],
				$this->fields['event_date'],
			]);
		} catch (PDOException $ex) {
			Helper::debug($ex->getMessage());
		}
	}
}