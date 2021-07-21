<?php 
require_once('models/admin/Connection.php');

class Model{
	public $connection;
	public $table;

	public function __construct(){
		$connection_obj = new Connection();
		$this->connection = $connection_obj->conn;
	}

	public function all(){
		$sql = "SELECT * FROM " . $this->table;
		$result = $this->connection->query($sql);
		$posts = array();
		while ($row = $result->fetch_assoc()) {
			$posts[] = $row;
		}

		return $posts;
	}
}
 ?>