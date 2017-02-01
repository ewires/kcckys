<?php

/*
 * simple config, db create and wrapper for add 
 * edit update and delete quiz result
 * may need it later!
 * KCC quiz app v1
 */

class db {

	private $config = array(
	    "dbdriver" => "mysql",
	    "dbuser" => "kccapp",
	    "dbpass" => "kccapp123",
	    "dbname" => "kccapp"
	);

	function db() {
		$dbhost = $this->config['dbhost'];
		$dbuser = $this->config['dbuser'];
		$dbpass = $this->config['dbpass'];
		$dbname = $this->config['dbname'];

		$options = array(
		    PDO::ATTR_PERSISTENT => true,
		    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		);

		try {
			$conn = "mysql:host={$dbhost};dbname={$dbname}";
			$this->db = new PDO($conn, $dbuser, $dbpass, $options);
		} catch (PDOException $e) {
			echo $e->getMessage();
			exit(1);
		}
	}

	function createQuiz() {

		// create table
		$sql = "CREATE TABLE IF NOT EXISTS KCCquiz (
			id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
			fbname VARCHAR(512),
			score VARCHAR(128) NOT NULL,
			timeonsite VARCHAR(128),
			actions VARCHAR(256),
			remoteip VARCHAR(128),
			langdetect VARCHAR(128),
			quiz_date TIMESTAMP
		)";

		return $this->run($sql, $bind);
	}

	function run($sql, $bind = array()) {
		$sql = trim($sql);

		try {

			$result = $this->db->prepare($sql);
			$result->execute($bind);
			return $result;
		} catch (PDOException $e) {
			echo $e->getMessage();
			exit(1);
		}
	}

	function create($table, $data) {
		$fields = $this->filter($table, $data);

		$sql = "INSERT INTO " . $table . " (" . implode($fields, ", ") . ") VALUES (:" . implode($fields, ", :") . ");";

		$bind = array();
		foreach ($fields as $field)
			$bind[":$field"] = $data[$field];

		$result = $this->run($sql, $bind);
		return $this->db->lastInsertId();
	}

	function read($table, $where = "", $bind = array(), $fields = "*") {
		$sql = "SELECT " . $fields . " FROM " . $table;
		if (!empty($where))
			$sql .= " WHERE " . $where;
		$sql .= ";";

		$result = $this->run($sql, $bind);
		$result->setFetchMode(PDO::FETCH_ASSOC);

		$rows = array();
		while ($row = $result->fetch()) {
			$rows[] = $row;
		}

		return $rows;
	}

	function update($table, $data, $where, $bind = array()) {
		$fields = $this->filter($table, $data);
		$fieldSize = sizeof($fields);

		$sql = "UPDATE " . $table . " SET ";
		for ($f = 0; $f < $fieldSize; ++$f) {
			if ($f > 0)
				$sql .= ", ";
			$sql .= $fields[$f] . " = :update_" . $fields[$f];
		}
		$sql .= " WHERE " . $where . ";";

		foreach ($fields as $field)
			$bind[":update_$field"] = $data[$field];

		$result = $this->run($sql, $bind);
		return $result->rowCount();
	}

	function delete($table, $where, $bind = "") {
		$sql = "DELETE FROM " . $table . " WHERE " . $where . ";";
		$result = $this->run($sql, $bind);
		return $result->rowCount();
	}

	private function filter($table, $data) {

		$sql = "DESCRIBE " . $table . ";";
		$key = "Field";

		if (false !== ($list = $this->run($sql))) {
			$fields = array();
			foreach ($list as $record)
				$fields[] = $record[$key];
			return array_values(array_intersect($fields, array_keys($data)));
		}

		return array();
	}

}
