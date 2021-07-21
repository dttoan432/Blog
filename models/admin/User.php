<?php
require_once('Model.php'); 

class User extends Model
{
	var $table = 'users';

	public function findKeyWord($keyWord){
		$sql = "SELECT * FROM " . $this->table . " WHERE name LIKE '%" . $keyWord . "%' OR email LIKE '%" . $keyWord . "%'";
		$result = $this->connection->query($sql);
		$this->table = array();
		while ($row = $result->fetch_assoc()) {
			$this->table[] = $row;
		}

		return $this->table;
	}
}
?>