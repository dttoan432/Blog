<?php
session_start();

$mod = '';
$act = '';
$admin = '';
$admin = (isset($_GET['admin']) ? $_GET['admin'] : 'user');
$mod = (isset($_GET['mod']) ? $_GET['mod'] : 'home');
$act = (isset($_GET['act']) ? $_GET['act'] : 'home');

$controller_class_name = ucfirst($mod) . 'Controller';
$path = 'controllers/' . $admin . '/' . $controller_class_name . '.php';
if (!file_exists($path)) {
	echo "<h5 style='text-align: center;'>File $path không tồn tại</h5>";
	exit();
}
// die($path);
require($path);
$controller_obj = new $controller_class_name();
if (!method_exists($controller_obj, $act)) {
	echo "Phương thức không tồn tại";
	exit();
}
$controller_obj->$act();
?>