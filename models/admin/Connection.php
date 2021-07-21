<?php 
class Connection{
	var $conn;

	public function __construct(){
		$servername = 'localhost';
		$username = 'root';
		$password = '';
		$dbname = 'project-php27';

		$this->conn = new mysqli($servername, $username, $password, $dbname);
		$this->conn->set_charset('utf8');
		if ($this->conn->connect_error) {
			die("Connection Failed: " . $this->conn->connect_error);
		}
	}
}
?>