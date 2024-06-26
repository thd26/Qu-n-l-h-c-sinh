<?php
if (!defined('TEMPLATE')) {
    die('Bạn không có quyền truy cập trang này!');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Trường THPT Thăng Long</title>
    <meta charset="UTF-8">
    <meta name="description" content="Thăng Long Education">
    <meta name="keywords" content="Thăng Long, education, học sinh, trực tuyến">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link href="img/favicon.jpg" rel="shortcut icon" />

    <!-- Google Fonts -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet"> -->

    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/owl.carousel.css" />
    <link rel="stylesheet" href="css/style.css" />

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header section -->
    <header class="header-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="site-logo">
                        
                        <a href="index.php"><img src="img/logo.jpg" alt=""></a>
                    </div>
                    <div class="nav-switch">
                        <i class="fa fa-bars"></i>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9">
                    <a href="admin/index.php" class="site-btn header-btn">Đăng Nhập</a>
                    <nav class="main-menu">
                        <ul>
                            <li><a href="index.php">Trang Chủ</a></li>
                            <li><a href="#">Giới Thiệu</a></li>
                            <li><a href="#">Tin Tức</a></li>
                            <li><a href="#">Liên Hệ</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header section end -->


    <!-- Hero section -->
    <section class="hero-section set-bg" data-setbg="img/bg1.jpg">
        <div class="container">
            <div class="hero-text text-white">
                <h2>Tra Cứu Điểm Trực Tuyến</h2>
                <p>Vui lòng nhập <strong style="color: orangered">Mã Học Sinh</strong> để hiển thị kết quả!</p>
            </div>
            <?php include_once('modules/search/search_box.php'); ?>
        </div>
    </section>
    <!-- Hero section end -->

    <!--====== Javascripts & Jquery ======-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

</html>