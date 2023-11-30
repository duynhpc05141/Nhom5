<!DOCTYPE html>
<html>

<head>
    <title> Login Form</title>
    <link rel="stylesheet" href="css/style.css?php echo time(); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <style>
       #login-form{
        width: 400px;
       } 

       label.error {
        color: red;
        }
    </style>
    <div class="container d-flex justify-content-center align-items-center">
        <?php
        if(isset($_SESSION['user_name']) && is_array($_SESSION['user_name'])){
        extract($_SESSION['user_name']);
        $img = './img/' . $avatar;
        if (file_exists($img)) {
            $hinh = '<img src=" ' . $img . '" alt="Hình ảnh đại diện" height="200px" style="border-radius:10px;">';
            } else {
            $hinh = '0';
            };
        }
        ?>
        <form id="update-form" class="row g-3 mx-auto p-5 shadow mt-3 mb-3" action="index.php?act=user_edit" method="post" enctype="multipart/form-data">
            <h2 class="text-center">Thông tin người dùng</h2>
            <div class="col-md-12">
                <label for="name" class="form-label">Họ Tên</label>
                <input type="text" class="form-control " id="name" placeholder="Nhập tên đăng nhập"  name="user" value="<?=$user_name?>">
                
            </div>
            <div class="col-md-12">
            <label for="avatar" class="form-label">Ảnh đại diện</label>
            <?= $hinh ?>
            
          </div>
            <div class="col-md-12">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Nhập email"  name="email" value="<?=$email?>">
                
            </div>
            <div class="col-md-12">
                <label for="phone" class="form-label">Số điện thoại</label>
                <input type="number" class="form-control" id="phone" placeholder="Nhập số điện thoại"  name="phone" value="<?=$user_phone?>">
            </div>

            <div class="col-12">
            <a href="index.php?act=user_edit"> <input class="btn btn-primary" type="button" style="width: 100%;"
                value="Cập nhật thông Tin"></input></a>
            </div>
        </form>
    </div>
    <?php
    ob_end_flush();
    ?>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    

            
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>