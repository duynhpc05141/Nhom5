<!DOCTYPE html>
<html>

<head>
    <title> Login Form</title>
    <link rel="stylesheet" href="css/style.css?php echo time(); ?>">
    <script src="https://kit.fontawesome.com/55a9fa42b8.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <style>
        #login-form {
            width: 400px;
        }

        label.error {
            color: red;
        }
        .text-capitalize:hover{
            color: #614BC3;
        }
        .alert-error {
        color: #721c24;
        background-color: #f8d7da;
        border-color: #f5c6cb;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid transparent;
        border-radius: 4px;
        }
    </style>

    <?php
    



    ?>

    <div class="container d-flex justify-content-center align-items-center">
        <form class="row g-3 mx-auto shadow p-5 mt-5 mb-3" action="index.php?act=login" method="post" id="login-form">
            <h2 class="text-center">Đăng nhập</h2>
            <div class="col-md-12">
                <label for="user" class="form-label">Tên đăng nhập</label>
                <input type="text" spellcheck="true" class="form-control " id="user" placeholder="Tên đăng nhập" required name="user_name">

            </div>
            <div class="col-md-12">
                <label for="password" class="form-label">Mật khẩu</label>
                <input type="password" class="form-control" id="password" placeholder="Mật khẩu" required name="user_password">

            </div>

            <div class="col-12">
                <input type="submit" value="Đăng nhập" name="login" class="btn btn-primary col-12 mb-10">
                <a href="index.php?act=register" class="btn btn-dark col-12 mb-10">Tạo tài khoản</a>
                <a href="index.php?act=forgot" class="btn text-capitalize col-12 mb-10">Quên mật khẩu?</a>
            </div>
        </form>
    </div>
    <?php
    if (isset($alert) && ($alert != "")) {
        echo $alert;
    }
    ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#login-form").validate({
                rules: {
                    user_name: "required",
                    user_password: "required",
                },
                messages: {
                    user_name: "Vui lòng nhập tên đăng nhập",
                    user_password: "Vui lòng nhập mật khẩu",
                },
                submitHandler: function(form) {

                    form.submit();
                }
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>