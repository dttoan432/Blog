<?php 
require_once('Model.php');
class Post extends Model
{
	public $table = 'posts';

	public function findKeyWord($keyWord){
		$sql = "SELECT * FROM " . $this->table . " WHERE title LIKE '%" . $keyWord . "%'";
		$result = $this->connection->query($sql);
		$this->table = array();
		while ($row = $result->fetch_assoc()) {
			$this->table[] = $row;
		}

		return $this->table;
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