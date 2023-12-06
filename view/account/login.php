<?php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API

$google_client = new Google_Client();
//Set the OAuth 2.0 Client ID
$google_client->setClientId('717651947456-krmq3lijnreb97s2lcgotn9la6hdh119.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://duan1.com/index.php?act=login');

//
$google_client->addScope('email');
$google_client->addScope('profile');
$google_client->setHttpClient(
    new \GuzzleHttp\Client([
        'verify' => false, // Tắt xác minh chứng chỉ SSL (lưu ý: không an toàn)
    ])
);


if (isset($_GET['code'])) {
    try {
        // Lấy thông tin truy cập từ mã xác thực
        $token = $google_client->fetchAccessTokenWithAuthCode($_GET['code']);

        // Kiểm tra xem có lỗi không
        if (!isset($token['error'])) {
            // Đặt thông tin truy cập vào đối tượng Google_Client
            $google_client->setAccessToken($token['access_token']);

            // Lấy dịch vụ Oauth2 từ đối tượng Google_Client
            $google_service = new Google_Service_Oauth2($google_client);

            // Lấy thông tin người dùng
            $data = $google_service->userinfo->get();
            $name = $data['name'];
            $email = $data['email'];
            $avatar = $data['picture'];
            $target_dir = "../../img/";
            $imgContent = file_get_contents($avatar);
            $img = $target_dir.$avatar;
            file_put_contents($img, $imgContent);
            $user = new user();
            $info_user = $user->get_user_google($email);
            var_dump($data);
            if ($info_user) {
                $_SESSION['user_gg'] = $info_user;
                header('location: http://duan1.com/');
                
            }else
            {
                $user->insert_google($name,$email,$avatar,null,null,0);
                $info_user = $user->get_user_google($email);
                $_SESSION['user_gg'] = $info_user;
                header('location: http://duan1.com/');
            }
        }
    }  catch (Exception $e) {
        echo 'Caught exception: ', $e->getMessage(), "\n";
    }
}

?>

<?php 
    // Display Google login button
    $google_login_btn = '<a href="' . $google_client->createAuthUrl() . '"><img class="col-md-12" src="//www.tutsmake.com/wp-content/uploads/2019/12/google-login-image.png" /></a>';

?>
<!DOCTYPE html>
<html>

<head>
    <title> Login Form</title>
    <link rel="stylesheet" href="css/style.css?php echo time(); ?>">
    <script src="https://kit.fontawesome.com/55a9fa42b8.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

</head>

<body>
    <style>
        a{
            text-decoration: none !important;
        }
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
<a href="index.php?act=forgot-pass" class="text-secondary col-12 mb-10">Quên mật khẩu?</a> 
            <div class="col-12">
                <input type="submit" value="Đăng nhập" name="login" class="col-12 mb-10 genric-btn danger">
                <a href="index.php?act=register" class="col-12 mb-10 genric-btn danger-border">Tạo tài khoản</a>
                
                <div class="panel panel-default">
                    <?php 
                    echo $google_login_btn;
                    ?>
                </div>
                
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