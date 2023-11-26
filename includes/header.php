<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Fast News</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="./view/assets/img/icon/l.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- CSS here -->
    <link rel="stylesheet" href="./view/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./view/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./view/assets/css/ticker-style.css">
    <link rel="stylesheet" href="./view/assets/css/flaticon.css">
    <link rel="stylesheet" href="./view/assets/css/slicknav.css">
    <link rel="stylesheet" href="./view/assets/css/animate.min.css">
    <link rel="stylesheet" href="./view/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="./view/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="./view/assets/css/themify-icons.css">
    <link rel="stylesheet" href="./view/assets/css/slick.css">
    <link rel="stylesheet" href="./view/assets/css/nice-select.css">
    <link rel="stylesheet" href="./view/assets/css/style.css">
</head>

<body>

    <!-- Preloader Start -->
     <!-- <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>  -->
    <!-- Preloader Start -->

    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header ">
                <div class="header-top black-bg d-none d-md-block">
                    <div class="container">
                        <div class="col-md-12 ">
                            <div class="row d-flex justify-content-around align-items-center">
                                <div class="header-info-left">
                                    <ul>
                                        
                                        <li><img src="./view/assets/img/icon/header_icon1.png" alt="">34ºc, Sunny </li>
                                        <li id="Date"><img src="./view/assets/img/icon/header_icon1.png" alt="">

                                            <script>
                                                const date = new Date();
                                                let day = date.getDate();
                                                let month = date.getMonth() + 1;
                                                let year = date.getFullYear();
                                                let hours = date.getHours();
                                                let minutes = date.getMinutes();
                                                let seconds = date.getSeconds();

                                                // Đảm bảo rằng giờ, phút và giây đều có hai chữ số
                                                hours = (hours < 10) ? `0${hours}` : hours;
                                                minutes = (minutes < 10) ? `0${minutes}` : minutes;
                                                seconds = (seconds < 10) ? `0${seconds}` : seconds;

                                                let currentTime = `${day}-${month}-${year} ${hours}:${minutes}:${seconds}`;
                                                document.getElementById('Date').innerHTML = currentTime;
                                            </script>
                                        </li>
                                    </ul>
                                </div>
                                <div class="header-info-right">
                                    <ul class="header-social">
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li> <a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-mid d-none d-md-block">
                    <div class="container">
                        <div class="row d-flex align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-3 col-lg-3 col-md-3">
                                <div class="logo">
                                    <a href="index.php?act=home">
                                        <p class="text-primary fs-2 fw-bolder fst-italic">Fast News</p>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-9 col-md-9">
                                <div class="header-banner f-right ">
                                    <img src="./view/assets/img/hero/header_card.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom header-sticky">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-10 col-lg-10 col-md-12 header-flex">
                                <!-- sticky -->
                                <div class="sticky-logo">
                                    <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                                </div>
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-md-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="index.php?act=home">Trang chủ</a></li>
                                            <li><a href="index.php?act=about">Giới thiệu</a></li>
                                            <li><a href="index.php?act=articles">Tin mới nhất</a></li>
                                            <li><a href="index.php?act=contact">Liên hệ</a></li>
                                            <li><a href="#">Pages</a>
                                                <ul class="submenu">
                                                    <li><a href="elements.html">Element</a></li>
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li><a href="single-blog.html">Blog Details</a></li>
                                                    <li><a href="details.html">Categori Details</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-4">
                                <div class="header-right-btn f-right d-none d-lg-block">
                                    <div class="dropdown">
                                        <?php 
                                        if (isset($_SESSION['user_name'])) {
                                            extract($_SESSION['user_name']);
                                            $img = './img/' . $avatar;
                                            if (file_exists($img)) {
                                                $hinh = '<img src=" ' . $img . '" alt="Hình ảnh đại diện" height="40px" style="border-radius:10px;">';
                                              } else {
                                                $hinh = '0';
                                              };
                                        ?>
                                            <div data-bs-toggle="dropdown">
                                                <?= $hinh ?>
                                                <?= $user_name ?>
                                            </div>
                                            <ul class="dropdown-menu">
                                                <?php
                                                if ($role_id == 0) {
                                                ?>
                                                <li>
                                                    <a class="dropdown-item" href="#">Thông tin</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="index.php?act=user_edit">Cập nhật thông tin</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="index.php?act=forgot-pass">Quên mật khẩu</a>
                                                </li>
                                                <?php } ?>
                                                <?php   
                                                if ($role_id == 1) {
                                                ?>
                                                <li>
                                                    <a class="dropdown-item" href="index.php?act=forgot-pass">Quản trị</a>
                                                </li>
                                                <?php }?>    
                                                <li>
                                                    <a class="dropdown-item" href="index.php?act=logout">Đăng xuất</a>
                                                </li>
                                            </ul>
                                            <?php 
                                        }else {?>
                                        <div data-bs-toggle="dropdown">
                                            <i class="fas fa-user"></i>
                                        </div>
                                        
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="index.php?act=login">Đăng nhập</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="index.php?act=register">Đăng Ký</a>
                                            </li>
                                        </ul>
                                       <?php }?>
                                    </div>
                                    
                                </div>
                                <div class="header-right-btn f-right d-none d-lg-block">
                                    <i class="fas fa-search special-tag"></i>
                                    <div class="search-box">
                                        <form action="#">
                                            <input type="text" placeholder="Search">

                                        </form>
                                    </div>
                                </div>
                                
                            </div>
                            
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-md-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>