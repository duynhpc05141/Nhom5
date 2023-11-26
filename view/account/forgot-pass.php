<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <style>
        #login-form {
            width: 400px;
            height: 300px;
            border-radius: 15px;
        }
    </style>

    <div class="container d-flex justify-content-center align-items-center bg-light shadow p-4 mt-5 mb-4">
        <form id="login-form" class="row g-3" action="index.php?act=send" method="post">
            <h2 class="text-center">Quên mật khẩu ?</h2>

            <div class="col-md-12">
                <label for="validationDefault02"  class="form-label">Email</label>
                <input type="email" class="form-control" id="validationDefault02" placeholder="Nhập email" required name="email">
            </div>

            <div class="col-12">
                <input type="submit" value="Gửi" name="forgot" class="btn btn-primary">
                <a href="index.php?act=login" class="btn btn-dark">Đăng nhập</a>
                
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>



