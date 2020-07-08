<?php

class Model
{
	protected $fields;
	protected $db;

	public function __construct($data)
	{
		$this->fields = $data;
		$this->db = (new Database())->getConnection();
	}

	public function __get($field) {
		return (isset($this->fields[$field])) ? $this->fields[$field] : NULL;
	}

}