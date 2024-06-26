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
    <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport' />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

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
    <link rel="stylesheet" href="./view/assets/css/header.css">
</head>

<body>


    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header ">
                <div class="header-top black-bg d-none d-md-block">
                    <div class="container">
                        <div class="col-md-12 ">
                            <div class="row d-flex justify-content-around align-items-center">
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
                            <div class="col-xl-8 col-lg-10 col-md-12 header-flex">
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
                                        </ul>
                                    </nav>
                                </div>
                                
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-4">
                         
                                    <div class="boxSearch">
                                        <form action="index.php?act=seach" method="post">
                                            <input type="text" placeholder="Tìm kiếm" name="kyw" id="nearch">
                                            <button id="btnsearch" type="submit" name="search" ><i class="fa-solid fa-magnifying-glass text-black"></i></button>

                                        </form>

                                    </div>
                                    <div>

                                    </div>

                                
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-4">
                                
                                <div class="header-right-btn f-right d-none d-lg-block">
                                    
                                    <div class="dropdown">
                                        <?php

                                        if (isset($_SESSION['user_gg'])) {
                                            extract($_SESSION['user_gg']);

                                            $hinh = '<img src=" ' . $avatar . '" alt="Hình ảnh đại diện" height="40px" style="border-radius:20px;">';
                                        ?>
                                            <div data-bs-toggle="dropdown">
                                                <?= $hinh ?>
                                                <?= $user_name ?>
                                            </div>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="index.php?act=logout">Đăng xuất</a>
                                                </li>
                                            </ul>
                                        <?php } else if (isset($_SESSION['user_name'])) {
                                            extract($_SESSION['user_name']);
                                            $img = './img/' . $avatar;
                                            if (file_exists($img)) {
                                                $hinh = '<img src=" ' . $img . '" alt="Hình ảnh đại diện" height="40px" width="40px" style="border-radius:20px;">';
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
                                                        <a class="dropdown-item" href="index.php?act=infor-user">Thông tin</a>
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
                                                <?php } ?>
                                                <li>
                                                    <a class="dropdown-item" href="index.php?act=logout">Đăng xuất</a>
                                                </li>
                                            </ul>
                                        <?php


                                        } else { ?>
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
                                                <li>
                                                    <a class="dropdown-item" href="index.php?act=forgot-pass">Quên mật khẩu</a>
                                                </li>
                                            </ul>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="header-right-btn f-right d-none d-lg-block">
                                 
                                    <div>

                                    </div>

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
    