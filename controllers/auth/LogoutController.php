<?php 
require_once('Controller.php');

class LogoutController extends Controller{
	public function __construct(){

	}

	public function logout(){
		unset($_SESSION['user']);
		return $this->redirect('index.php?admin=auth&mod=login&act=loginForm');
	}
}

 ?>