<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light"><a href="index.php?act=home" class="list-group-item list-group-item-action ">Admin</a></div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="index.php?act=home">Trang chủ</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="index.php?act=category_list">Danh mục</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="index.php?act=article-list">Bài viết</a>

                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="index.php?act=user_list">Người dùng</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="index.php?act=comment_list">Bình luận</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="index.php?act=favourite">Yêu thích</a>


                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="index.php?act=static">Thống kê bài viết</a>

                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                        <i id="sidebarToggle" class="fa-solid fa-backward text-secondary"></i>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <div class="dropdown">
                                    <?php
                                    if (isset($_SESSION['admin']) ) {
                                        extract($_SESSION['admin']);
                                        $img = './img/' . $avatar;
                                        if (file_exists($img)) {
                                            $hinh = '<img src=" ' . $img . '" alt="Hình ảnh đại diện" height="40px" style="border-radius:10px;">';
                                        } else {
                                            $hinh = '';
                                        };
                                    ?>
                                        <div data-bs-toggle="dropdown">
                                            <?= $hinh ?>
                                            <li class="fw-bold" style="cursor: pointer;"><?= $user_name ?></li>
                                        </div>
                                        <ul class="dropdown-menu" style="margin-left: -110px; margin-top: 9px;">


                                            <li>
                                                <a class="dropdown-item" href="index.php?act=logout">Đăng xuất</a>
                                            </li>
                                        </ul>

                                    <?php } ?>
                                </div>


                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- Page content-->
                <div class="container-fluid ">