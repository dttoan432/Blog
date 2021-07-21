	<?php 
require_once('Controller.php');
require_once('models/admin/User.php');

class LoginController extends Controller{
	
	public function loginForm(){
		if (!empty($_SESSION['user'])) {
			return $this->redirect('index.php?admin=admin&mod=&act=home');
		}
		return $this->view('views/auth/login');
	}

	public function login(){
		$data = $_POST;
		
		$userModel = new User();
		$users = $userModel->all();

		foreach ($users as $user) {
			if ($user['email'] == $data['email'] && $user['password'] == md5($data['password'])) {
				$_SESSION['user'] = $user;

				return $this->redirect('index.php?admin=admin&mod=&act=home');
			}
		}

		return $this->back();
	}
}

 ?>