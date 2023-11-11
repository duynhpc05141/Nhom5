<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <nav class="navbar navbar-expand-lg bg-dark  ">
        <div class="container-fluid">
        <a  class="navbar-brand fs-3 fw-bold" href="index.php" style="color: #c92127;">Admin</a >
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
              <li class="nav-item ">
                <a class="nav-link active text-white" aria-current="page" href="index.php?act=home">Trang chủ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="index.php?act=category_list">Danh mục</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="index.php?act=product-list">Bài viết</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="index.php?act=customer-list">Khách hàng</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="index.php?act=comment">Bình luận</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="index.php?act=bill">Yêu thích</a>
              </li>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="index.php?act=static">Thống kê</a>
              </li>
            </ul>
            
        <?php
        session_start();
        if (isset($_SESSION['user'])) {
          extract($_SESSION['user']);
        
     
        ?>
          <div class="dropdown">
            <a class="btn btn-light dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            
              <a href="" type="button" class="btn text-light " style="background-color: #614BC3;"><?=$user?></a>
            </a>

            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="index.php?act=forgot">Quên mật khẩu</a></li>
              <li><a class="dropdown-item" href="index.php?act=accountUpdate">Cập nhật tài khoản</a></li>
           

              <li><a class="dropdown-item" href="index.php?act=exit">Đăng xuất</a></li>
            </ul>
          </div>
        <?php
        } else {
        ?>
          <a href="" type="button" class="btn text-light " style="background-color: #614BC3;">Đăng nhập</a>
        <?php
        }
        ?>
          </div>
        </div>
      </nav>

      
  
  </div>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>