<?php 
require_once('Controller.php');
require_once('models/admin/Author.php');

class AuthorController extends Controller
{	
	public $model;
	
	public function __construct()
	{
		$this->model = new Author();
		parent:: __construct();
	}

	public function profile(){
		$author = $this->model->all();
		$this->view('views/admin/author/profile',[
			'author' => $author
		]);
	}

	public function update(){
		$data = $_POST;
		$id = $_GET['id'];
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// die();
		$author = $this->model->update($data, $id);
		$this->redirect('index.php?admin=admin&mod=author&act=profile');
	}
}
 ?>