<?php
class User extends Model
{
	public $fields;

	public function all() {
		$stmt = $this->db->prepare("SELECT * FROM members");
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	public function get() {

		$this->table = 'members';

		if (isset($this->fields['id'])) {
			$stmt = $this->db->prepare("SELECT * FROM " . $this->table . " WHERE id_members = ?");
			$stmt->execute([$this->fields['id']]);
		} elseif (isset($this->fields['login']) && isset($this->fields['password'])) {
			$stmt = $this->db->prepare("SELECT * FROM " . $this->table . " WHERE login = ? AND password = ?");
			$stmt->execute([$this->fields['login'], $this->fields['password']]);
		}

		return $stmt->fetch();
	}

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
