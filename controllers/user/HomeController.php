<?php 
require_once('Controller.php');
require_once('models/user/Post.php');
require_once('models/user/Category.php');
require_once('models/user/Author.php');
class HomeController extends Controller
{	
	public $modelPost;
	public $modelCate;
	public $modelAuthor;

	public function __construct()
	{
		$this->modelPost = new Post();
		$this->modelCate = new Category();
		$this->modelAuthor = new Author();
	}

	public function home(){
		$posts = $this->modelPost->slide('view_count',5);
		$slidePosts = $this->modelPost->slide('id',3);
		$slidePosts5 = $this->modelPost->slide('id',5);
		$categories = $this->modelCate->all();
		$cates = $this->modelCate->parentCate();
		$author = $this->modelAuthor->profile();
		// echo "<pre>";
		// print_r($cates);
		// echo "</pre>";
		// die();
		return $this->view('views/user/home', [
			'posts' => $posts,
			'slidePosts' => $slidePosts,
			'slidePosts5' => $slidePosts5,
			'categories' => $categories,
			'cates' => $cates,
			'author' => $author
		]);
	}

	public function allPost(){
		$categories = $this->modelCate->all();
		$posts = $this->modelPost->all();
		$cates = $this->modelCate->parentCate();
		$categories1 = $this->modelCate->parentCateNull();
		return $this->view('views/user/post/postall', [
			'posts' => $posts,
			'categories' => $categories,
			'cates' => $cates
		]);
	}

	public function detail(){
		$id = $_GET['id'];
		$categories = $this->modelCate->all();
		$post = $this->modelPost->find($id);
		$cates = $this->modelCate->parentCate();
		return $this->view('views/user/post/detailPost', [
			'post' => $post,
			'categories' => $categories,
			'cates' => $cates
		]);
	}

	public function postCate(){
		$id = $_GET['id'];
		$cates = $this->modelCate->parentCate();
		$postCate = $this->modelPost->postCate($id);
		$categories = $this->modelCate->all();
		// echo "<pre>";
  //               print_r($postCate);
  //               echo "</pre>";
  //               die();
		return $this->view('views/user/post/postall', [
			'posts' => $postCate,
			'cates' => $cates,
			'categories' => $categories,
		]);
	}

	public function findKeyWord(){
		$keyWord = $_POST['keyWord'];
		$search = $this->modelPost->findPost($keyWord);
		$cates = $this->modelCate->parentCate();
		$categories = $this->modelCate->all();
		// echo "<pre>";
  //               print_r($postCate);
  //               echo "</pre>";
  //               die();
		return $this->view('views/user/post/postall', [
			'posts' => $search,
			'cates' => $cates,
			'categories' => $categories,
		]);
	}

	public function author(){
		$cates = $this->modelCate->parentCate();
		$author = $this->modelAuthor->profile();
		return $this->view('views/user/author/author', [
			'author' => $author,
			'cates' => $cates
		]);
	}
}

 ?>