<?php

class mysql extends PDO {

	private $conn;

	public function __construct(){

		$this->conn = new PDO("mysql:host=localhost;dbname=dbphp8", "root", "");

	}

	public function query($rawQuery, $params = array()){

			foreach ($parameters as $key => $value) {

				$stmt->setParam($key, $value);

			}

		}

		private function setParam($statment, $key, $value){

			$statment->bindParam($key, $value);

		}

		public function query($rawQuery, $params = array()){

	$stmt = $this->conn->prepare($RawQuery);

	$this->setParams($stmt, $params);

	$stmt->execute();			

	return $stmt;

	}

	public function select($rawQuery, $params = array()):array
	{

	$stmt = $this->query($rawQuery, $params);

	return $stmt->fetchAll(PDO::FETCH_ASSOC);

	}

}

?>