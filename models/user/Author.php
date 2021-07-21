<?php
require_once('Model.php');

class Author extends Model{
	public $table = 'author';

	public function profile(){
		$sql = "SELECT * FROM " . $this->table;
		$result = $this->connection->query($sql);
		$this->table = array();
		while ($row = $result->fetch_assoc()) {
			$this->table[] = $row;
		}

		return $this->table;
	}
}

 ?>