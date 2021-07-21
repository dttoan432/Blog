<?php
require_once('Model.php');

class Post extends Model{
	public $table = 'posts';

	public function slPost(){
		$sql = "SELECT * FROM posts LIMIT $vt,$sl";
		$result = $this->connection->query($sql);
		$posts = array();
		while ($row = $result->fetch_assoc()) {
			$posts[] = $row;
		}

		return $posts;
	}

	public function slide($str, $sl){
		$sql = "SELECT * FROM posts GROUP BY $str DESC LIMIT $sl";
		$result = $this->connection->query($sql);
		$posts = array();
		while ($row = $result->fetch_assoc()) {
			$posts[] = $row;
		}

		return $posts;
	}

	public function find($id){
		$sql = "SELECT * FROM posts WHERE id=$id";
		$result = $this->connection->query($sql);
		$post = $result->fetch_assoc();
		return $post;
	}

	public function postCate($id){
		$sql = "SELECT * FROM posts WHERE category_id=$id";
		$result = $this->connection->query($sql);
		$postCate = array();
		while ($row = $result->fetch_assoc()) {
			$postCate[] = $row;
		}
		// echo "<pre>";
  //               print_r($postCate);
  //               echo "</pre>";
  //               die();
		return $postCate;
	}	

	public function findPost($keyWord){
		$sql = "SELECT * FROM posts WHERE title LIKE '%" . $keyWord . "%'";
		$result = $this->connection->query($sql);
		$postKey = array();
		while ($row = $result->fetch_assoc()) {
			$postKey[] = $row;
		}
		// echo "<pre>";
  //               print_r($postCate);
  //               echo "</pre>";
  //               die();
		return $postKey;
	}
}

 ?>