<?php


namespace application\lib;

use PDO;
use PDOException;

class Db
{

	protected $db;

	public function __construct()
	{

		$config = require 'application/config/db.php';

		list($host, $port, $name, $user, $password) = $config;
		$dsn = "pgsql:host=$host;port=$port;dbname=$name;user=$user;password=$password";

		try {
			$conn = new PDO($dsn);
			if ($conn) {
				echo "Connected to the <strong>$db</strong> database successfully!";
				$this->db = $conn;
			}
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}

	public function query($sql, $params = [])
	{
		$stmt = $this->db->prepare($sql);
		if (!empty($params)) {
			foreach ($params as $key => $val) {
				if (is_int($val)) {
					$type = PDO::PARAM_INT;
				} else {
					$type = PDO::PARAM_STR;
				}
				$stmt->bindValue(':' . $key, $val, $type);
			}
		}
		$stmt->execute();
		return $stmt;
	}

	public function row($sql, $params = [])
	{
		$result = $this->query($sql, $params);
		return $result->fetchAll(PDO::FETCH_ASSOC);
	}

	public function column($sql, $params = [])
	{
		$result = $this->query($sql, $params);
		return $result->fetchColumn();
	}

	public function lastInsertId()
	{
		return $this->db->lastInsertId();
	}
}
