<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>ADMIN</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="public/admin/css/style.css">
  <link rel="stylesheet" href="public/admin/css/components.css">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="public/admin/img/avatar/<?= $_SESSION['user']['avatar'] ?>" class="rounded-circle mr-1" height="30">
            <div class="d-sm-none d-lg-inline-block"><?= $_SESSION['user']['name'] ?></div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="features-profile.html" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <a href="index.php?admin=auth&mod=logout&act=logout" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar" style="opacity: 1;">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.php?admin=admin&mod=&act=home">Tiến Toàn</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.php?admin=admin&mod=&act=home">TT</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header active">Trang chủ</li>
              <li class="nav-item">
                <a href="index.php?admin=admin&mod=&act=home" class="nav-link"><i class="fas fa-fire"></i><span>Bảng điều khiển</span></a>
              </li>
             
              <li class="menu-header">Danh mục</li>
              <?php if ($_SESSION['user']['permission'] == 1) {
                echo '<li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Quản lý người dùng</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="index.php?admin=admin&mod=user&act=create">Tạo mới</a></li>
                  <li><a class="nav-link beep beep-sidebar" href="index.php?admin=admin&mod=user&act=list">Danh sách</a></li>
                </ul>
              </li>';
              } ?>
              
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Quản lý danh mục</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="index.php?admin=admin&mod=category&act=create">Tạo mới</a></li>
                  <li><a class="nav-link beep beep-sidebar" href="index.php?admin=admin&mod=category&act=list">Danh sách</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i> <span>Quản lý bài viết</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="index.php?admin=admin&mod=post&act=create">Tạo mới</a></li>
                  <li><a class="nav-link" href="index.php?admin=admin&mod=post&act=list">Danh sách</a></li>
                </ul>
              </li>
              <li class="menu-header active">Tác giả</li>
              <li class="nav-item">
                <a href="index.php?admin=admin&mod=author&act=profile" class="nav-link"><i class="fas fa-fire"></i><span>Thông tin</span></a>
              </li>
            </ul>
        </aside>
      </div>