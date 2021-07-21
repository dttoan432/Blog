<?php 
require_once('Controller.php');
require_once('models/admin/Post.php');
require_once('models/admin/Category.php');
require_once('models/admin/User.php');

class PostController extends Controller
{	
	public $model;
	
	public function __construct()
	{
		$this->model = new Post();
		parent:: __construct();
	}

	public function list(){
		$posts = $this->model->all();
		$this->view('views/admin/post/list',[
			'posts' => $posts
		]);
	}

	public function findKeyWord(){
		$keyWord = $_POST['keyword'];
		$posts = $this->model->findKeyWord($keyWord);
		$this->view('views/admin/post/list', [
			'posts' => $posts
		]);
	}

	public function create(){
		$categories_obj = new Category();
		$categories = $categories_obj->all();
		$this->view('views/admin/post/add', [
			'categories' => $categories
		]);
	}

	public function store(){
		$data = $_POST;
		$target_dir = "public/admin/img/thumbnail/";
        $target_file = $target_dir . basename($_FILES["thumbnail"]["name"]);
        if (move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file)) {
            $thumbnail = array('thumbnail' => $_FILES["thumbnail"]["name"]);
        }
        $data = array_merge($data, $thumbnail);
        $slug = $this->autoSlug($data['title']);
        $arrSlug = array('slug' => $slug);
        $data = array_merge($data, $arrSlug);
		$post = $this->model->create($data);
		$this->redirect('index.php?admin=admin&mod=post&act=list');
	}

	public function detail(){
		$id = $_GET['id'];
		$post = $this->model->detail($id);
		$this->view('views/admin/post/detail', [
			'post' => $post
		]);
	}

	public function destroy(){
		$id = $_GET['id'];
		$this->model->destroy($id);
		$this->redirect('index.php?admin=admin&mod=post&act=list');
	}

	public function edit(){
		$id = $_GET['id'];
		$post = $this->model->find($id);
		$category = new Category();
		$categories = $category->all();
		$user = new User();
		$users = $user->all();
		$this->view('views/admin/post/update', [
			'post' => $post,
			'categories' => $categories,
			'users' => $users
		]);
	}

	public function update(){
		$data = $_POST;
		$id = $_GET['id'];
		$target_dir = "public/admin/img/thumbnail/";
        $target_file = $target_dir . basename($_FILES["thumbnail"]["name"]);
        if (move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file)) {
            $thumbnail = array('thumbnail' => $_FILES["thumbnail"]["name"]);
            $data = array_merge($data, $thumbnail);
        }
        
        $post = $this->model->update($data, $id);
		$this->redirect('index.php?admin=admin&mod=post&act=list');
	}
}
 ?>