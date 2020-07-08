<?php
class User extends Model
{
	public $fields;

	public function create() {

		// $this->fields['password'] = password_hash($this->fields['password'], PASSWORD_BCRYPT);

		try {
			$stmt = $this->db->prepare("INSERT INTO members SET name1 = ?, name2 = ?, name3 = ?, sex = ?, group_of_member = ?, phone = ?, email = ?, login = ?, password = ?");
			$stmt->execute([
				$this->fields['name1'],
				$this->fields['name2'],
				$this->fields['name3'],
				$this->fields['sex'],
				$this->fields['group_of_member'],
				$this->fields['phone'],
				$this->fields['email'],
				$this->fields['login'],
				$this->fields['password'],
			]);
		} catch (PDOException $ex) {
			Helper::debug($ex->getMessage());
		}
	}
}
