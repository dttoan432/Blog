<?php
require_once('models/admin/Category.php');
require_once('Controller.php');

class CategoryController extends Controller{
	public $model;

	public function __construct(){
		$this->model = new Category();
		parent:: __construct();
	}

	public function list(){
		$categories = $this->model->all();
		$this->view('views/admin/category/list', [
			'categories' => $categories
		]);
	}

	public function findKeyWord(){
		$keyWord = $_POST['keyword'];
		$categories = $this->model->findKeyWord($keyWord);
		$this->view('views/admin/category/list', [
			'categories' => $categories
		]);
	}

	public function detail(){
		$id = $_GET['id'];
		$categories = $this->model->find($id);
		$this->view('views/admin/category/detail', [
			'categories' => $categories,
		]);
	}

	public function create(){
		$categories = $this->model->allParent();
		$this->view('views/admin/category/add', [
			'categories' => $categories
		]);
	}

	public function store(){
		$data = $_POST;
		$slug = $this->autoSlug($data['name']);
        $arrSlug = array('slug' => $slug);
        $data = array_merge($data, $arrSlug);
		$categories = $this->model->create($data);
		$this->redirect('index.php?admin=admin&mod=category&act=list');
	}

	public function destroy(){
		$id = $_GET['id'];
		$categories = $this->model->destroy($id);
		$this->redirect('index.php?admin=admin&mod=category&act=list');
	}

	public function edit(){
		$id = $_GET['id'];
		$categories = $this->model->allParent();
		$category = $this->model->find($id);
		require_once('views/admin/category/update.php');
	}

	public function update(){
		$data = $_POST;
		$id = $_GET['id'];
		$categories = $this->model->update($data, $id);
		$this->redirect('index.php?admin=admin&mod=category&act=list');
	}
}
?>