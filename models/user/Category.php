<?php
require_once('Model.php');

class Category extends Model{
	public $table = 'categories';

	public function parentCate(){
		$sql = "SELECT * FROM " . $this->table . " WHERE NOT parent_id is NULL";
		$result = $this->connection->query($sql);
		$cateParent = array();
		while ($row = $result->fetch_assoc()) {
			$cateParent[] = $row;
		}
		return $cateParent;
	}

	public function parentCateNull(){
		$sql = "SELECT * FROM " . $this->table . " WHERE parent_id is NULL";
		$result = $this->connection->query($sql);
		$cateParentNull = array();
		while ($row = $result->fetch_assoc()) {
			$cateParentNull[] = $row;
		}
		return $cateParentNull;
	}
}

 ?>