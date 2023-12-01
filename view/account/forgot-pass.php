<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <title>Forgot Form</title>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="./view/assets/img/icon/l.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="../view/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../view/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../view/assets/css/ticker-style.css">
    <link rel="stylesheet" href="../view/assets/css/flaticon.css">
    <link rel="stylesheet" href="../view/assets/css/slicknav.css">
    <link rel="stylesheet" href="../view/assets/css/animate.min.css">
    <link rel="stylesheet" href="../view/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="../view/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../view/assets/css/themify-icons.css">
    <link rel="stylesheet" href="../view/assets/css/slick.css">
    <link rel="stylesheet" href="../view/assets/css/nice-select.css">
    <link rel="stylesheet" href="../view/assets/css/style.css">
</head>
<body>
    <style>
        label.error {
        color: red; /* Định dạng màu chữ của thông báo lỗi thành màu đỏ */
        }
        #forgot-form {
            width: 400px;
            height: 300px;
            border-radius: 15px;
        }
    </style>

    <div class="container d-flex justify-content-center align-items-center bg-light shadow p-4 mt-5 mb-4">
        <form id="forgot-form" class="row g-3" action="index.php?act=send" method="post">
            <h2 class="text-center">Quên mật khẩu ?</h2>

            <div class="col-md-12">
                <label for="email"  class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Nhập Email" required>
                <span id="email-error" class="text-danger"></span>
            </div>
            <div class="col-md-12">
                <input  type="submit" value="Gửi" name="forgot" class="btn btn-primary col-12">
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/additional-methods.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#forgot-form').validate({
                rules: {
                    email: {
                        required: true,
                        email: true // Kiểm tra định dạng email
                    }
                },
                messages: {
                    email: {
                        required: "Email không được để trống!",
                        email: "Email không hợp lệ! "
                    }
                },
                submitHandler: function (form) {
                    form.submit();
                }
            });
        });
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>



