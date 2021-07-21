<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Tien Toan</title>
    <!-- META TAGS -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content>
    <meta name="keywords" content>
    <!-- CSS FILES -->
    <link href="public/user/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="public/user/css/fontawesome.css" rel="stylesheet" type="text/css">
    <link href="public/user/css/slick.css" rel="stylesheet" type="text/css">
    <link href="public/user/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <!-- READING POSITION INDICATOR -->
    <progress value="0" id="eskimo-progress-bar">
        <span class="eskimo-progress-container">
            <span class="eskimo-progress-bar"></span>
        </span>
    </progress>
    <!-- SITE WRAPPER -->
    <div id="eskimo-site-wrapper">
        <!-- MAIN CONTAINER -->
        <main id="eskimo-main-container">
            <div class="container">
                <!-- SIDEBAR -->
                <div id="eskimo-sidebar">
                    <div id="eskimo-sidebar-wrapper" class="d-flex align-items-start flex-column h-100 w-100">
                        <!-- LOGO -->
                        <div id="eskimo-logo-cell" class="w-100">
                            <a class="eskimo-logo-link" href="index.php?admin=user&mod=home&act=home">
                                <img src="public/user/images/logo.png" class="eskimo-logo" alt="eskimo">
                            </a>
                        </div>
                        <!-- MENU CONTAINER -->
                        <div id="eskimo-sidebar-cell" class="w-100">
                            <!-- MOBILE MENU BUTTON -->
                            <div id="eskimo-menu-toggle">MENU</div>
                            <!-- MENU -->
                            <nav id="eskimo-main-menu" class="menu-main-menu-container">
                                <ul class="eskimo-menu-ul">
                                    <li><a href="index.php?admin=user&mod=home&act=home">Trang chủ</a></li>
                                    <li><a href="#">Danh mục</a>
                                        <ul class="sub-menu">
                                            <?php foreach ($categories as $value) { ?>
                                            <li><a href="index.php?admin=user&mod=home&act=postCate&id=<?= $value['id'] ?>"><?= $value['name'] ?></a></li>
                                            <?php } ?>
                                        </ul>
                                    </li>
                                    <li><a href="index.php?admin=user&mod=home&act=allPost">Bài viết</a></li>
                                    <li><a href="index.php?admin=user&mod=home&act=author">Tác giả</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- SOCIAL MEDIA ICONS -->
                        <div id="eskimo-social-cell" class="mt-auto w-100">
                            <div id="eskimo-social-inner">
                                <ul class="eskimo-social-icons">
                                    <li><a href="https://www.facebook.com/"><i class="fa fa-facebook-f"></i></a></li>
                                    <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://www.google.com/"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="https://vimeo.com/"><i class="fa fa-vimeo"></i></a></li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- TOP ICONS -->
                <ul class="eskimo-top-icons">
                    <li id="eskimo-panel-icon">
                        <a href="#eskimo-panel" class="eskimo-panel-open"><i class="fa fa-bars"></i></a>
                    </li>
                    <li id="eskimo-search-icon">
                        <a id="" href="index.php?admin=auth&mod=login&act=loginForm"><i class="fa fa-user-secret"></i></a>
                    </li>
                    <li id="eskimo-search-icon">
                        <a id="eskimo-open-search" href="#"><i class="fa fa-search"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>