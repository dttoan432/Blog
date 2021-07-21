<?php
require_once('models/admin/User.php');
require_once('Controller.php');

class UserController extends Controller{
	public $model;

	public function __construct(){
		$this->model = new User();
		parent:: __construct();
	}

	public function list(){
		$users = $this->model->all();
		$this->view('views/admin/user/list', [
			'users' => $users
		]);
	}

	public function findKeyWord(){
		$keyWord = $_POST['keyword'];
		$users = $this->model->findKeyWord($keyWord);
		$this->view('views/admin/user/list', [
			'users' => $users
		]);
	}

	public function detail(){
		$id = $_GET['id'];
		$user = $this->model->find($id);
		$this->view('views/admin/user/detail', [
			'user' => $user
		]);
	}

	public function create(){
		$this->view('views/admin/user/add');
	}

	public function store(){
		$data = $_POST;
		$target_dir = "public/admin/img/avatar/";
        $target_file = $target_dir . basename($_FILES["avatar"]["name"]);
        if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
            $avatar = array('avatar' => $_FILES["avatar"]["name"]);
        }
		$data = array_merge($data, $avatar);
		$users = $this->model->create($data);
		$this->redirect('index.php?admin=admin&mod=user&act=list');
	}

	public function edit(){
		$id = $_GET['id'];
		$user = $this->model->find($id);
		$this->view('views/admin/user/update', [
			'user' => $user
		]);
	}

	public function update(){
		$data = $_POST;
		$id = $_GET['id'];
		$target_dir = "public/admin/img/avatar/";
        $target_file = $target_dir . basename($_FILES["avatar"]["name"]);
        if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
            $avatar = array('avatar' => $_FILES["avatar"]["name"]);
			$data = array_merge($data, $avatar);
        }
        
		$users = $this->model->update($data, $id);
		$this->redirect('index.php?admin=admin&mod=user&act=list');
	}

	public function destroy(){
		$id = $_GET['id'];
		$users = $this->model->destroy($id);
		$this->redirect('index.php?admin=admin&mod=user&act=list');
	}
}
?>