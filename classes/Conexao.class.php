<?php

class Connection {

    private $user = "root";
    private $password = "";
    private $path = "127.0.0.1";
    private $data = "employee";
    private $connect;

    public function __construct() {

		try {
			$this->connect = new PDO("mysql:dbname={$this->data};host={$this->path}", "root", "");
		} catch(PDOException $e) {
			echo "FAILURE: ".$e->getMessage();
		}

	}

  public function getConnect() {
      return $this->connect;
  }
}
?>
