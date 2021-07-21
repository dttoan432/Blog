<?php 
require_once('Connection.php');

class Model{
	var $connection;
	var $table;

	public function __construct(){
		$connection_obj = new Connection();
		$this->connection = $connection_obj->conn;
	}

	public function all(){
		$sql = "SELECT * FROM " . $this->table;
		$result = $this->connection->query($sql);
		$this->table = array();
		while ($row = $result->fetch_assoc()) {
			$this->table[] = $row;
		}

		return $this->table;
	}

	public function find($id){
		$sql = "SELECT * FROM " . $this->table . " WHERE id=$id";
		$result = $this->connection->query($sql);
		$this->table = $result->fetch_assoc();
		return $this->table ;
	}

	public function create($data){
		$table = '';
		$val = '';
		foreach ($data as $key => $value) {
			$table .= $key . ',';
			switch ($key) {
				case 'password':
					$val .= "md5('" . $value . "'),";
					break;
				
				case 'parent_id':
					$val .= $value . ",";
					break;

				default:
					$val .= "'" . $value . "',";
					break;
			}
		}
		$table = trim($table, ',');
		$val = trim($val, ',');
		$sql = "INSERT INTO " . $this->table . "($table) VALUES($val)";
		$result = $this->connection->query($sql);
		if ($result) {
			setcookie('nof', 'Thêm thành công', time() + 2);
		} else{
			setcookie('nof', 'Thêm thất bại', time() + 2);
		}
		return $result;		
	}

	public function update($data, $id){
		$core = '';
		foreach ($data as $key => $value) {
			switch ($key) {
				case 'password':
					$core .= $key . "=md5('" . $value . "'),";
					break;
				
				case 'parent_id':
					$core .= $key . "=" . $value . ",";
					break;

				default:
					$core .= $key . "='" . $value . "',";
					break;
			}
		}
		$core = trim($core, ',');
		$sql = "UPDATE " . $this->table . " SET $core WHERE id=$id";
		$result = $this->connection->query($sql);

		if ($result) {
			setcookie('nof', 'Sửa thành công', time() + 2);
		} else{
			setcookie('nof', 'Sửa thất bại', time() + 2);
		}
		return $result;		
	}

	public function destroy($id){
		$sql = "DELETE FROM " . $this->table . " WHERE id=$id";
		$result = $this->connection->query($sql);
		if ($result) {
			setcookie('nof', 'Xóa thành công', time() + 2);
		} else{
			setcookie('nof', 'Xóa thất bại', time() + 2);
		}
		return $result;
	}
}
?>