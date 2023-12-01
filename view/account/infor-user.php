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
        hr {
            width: 100%;
        }
        .infor-user-left{
            width: 100%;
            float: left;
    }
    .infor-user-right{
            width: 500px;
            float: left;
    }
    </style>
    <div class="container d-flex justify-content-center align-items-center">
        <?php

        if(isset($_SESSION['user_name']) && is_array($_SESSION['user_name'])){
        extract($_SESSION['user_name']);
        $img = './img/' . $avatar;
        if (file_exists($img)) {
            $hinh = '<img src=" ' . $img . '" alt="Hình ảnh đại diện" height="40px" style="border-radius:40px;">';
            } else {
            $hinh = '0';
            };
        }
        ?>
        <form id="update-form" class="row g-3 mx-auto p-5 shadow mt-3 mb-3" action="index.php?act=user_edit"  enctype="multipart/form-data">
        
        <div>
        <h2 class="text-center">Thông tin người dùng</h2>
            <div class="infor-user-right" >
                <ul class="col-md-12">
                    <li>
                    <label for="avatar" class="form-label">Ảnh đại diện</label>
                     <?= $hinh ?>
                    </li>
                    <hr>
                    <li>
                    <label for="name" class="form-label">Họ Tên</label>
                    <p><?=$user_name?></p>
                    </li>
              <hr>
                <li >
                <label for="email" class="form-label">Email</label>
                <p><?=$email?></p>
            </li>
            <hr>
            <li>
                <label for="phone" class="form-label">Số điện thoại</label>
                <p><?=$user_phone?></p>
            </li>
            </ul>
          </div>
            

            <div class="col-12">
            <a href="index.php?act=user_edit"> <input class="btn btn-primary" type="button" style="width: 100%;"
                value="Thay đổi thông Tin"></input></a>
            </div>
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