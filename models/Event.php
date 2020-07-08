<?php

class Event extends Model
{
	public $fields;

	public function all() {
		$stmt = $this->db->prepare("SELECT * FROM events");
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

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