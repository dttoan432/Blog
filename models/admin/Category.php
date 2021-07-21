<?php
require_once('Model.php'); 

class Category extends Model
{
	var $table = 'categories';

	public function findKeyWord($keyWord){
		$sql = "SELECT * FROM " . $this->table . " WHERE name LIKE '%" . $keyWord . "%'";
		$result = $this->connection->query($sql);
		$this->table = array();
		while ($row = $result->fetch_assoc()) {
			$this->table[] = $row;
		}
		return $this->table;
	}

	public function allParent(){
		$sql = "SELECT * FROM " . $this->table . " WHERE parent_id is NULL";
		$result = $this->connection->query($sql);
		$parent = array();
		while ($row = $result->fetch_assoc()) {
			$parent[] = $row;
		}

		return $parent;
	}

	public function detail($id){
		$sql = "SELECT p.*, u.name AS 'user', c.name AS 'category' FROM users u JOIN posts p JOIN categories c on c.id = p.category_id AND u.id = p.user_id WHERE p.id= $id";
		$result = $this->connection->query($sql);
		$this->table = array();
		while ($row = $result->fetch_assoc()) {
			$this->table[] = $row;
		}
		
		return $this->table;
	}
}
?>