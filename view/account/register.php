<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        #registration-form {
            width: 400px;
        }
        label.error {
            color: red;
        }
    </style>
    <div class="container d-flex justify-content-center align-items-center">
        
        <form id="registration-form" class="row g-3 mx-auto p-5 shadow mt-3 mb-3" action="index.php?act=register" method="post" enctype="multipart/form-data">
            <h2 class="text-center">Đăng kí</h2>
           
 <?php
if (isset($alert) && $alert != "") {
    echo $alert;
}
?>
            <div class="col-md-12">
                <label for="name" class="form-label">Họ Và Tên*</label>
                <input type="text" class="form-control" id="name" placeholder="Nhập tên đăng nhập" name="user" >
                <span id="name-error" class="text-danger"></span>
            </div>
            <div class="col-md-12">
                <label for="email" class="form-label">Email*</label>
                <input type="email" class="form-control" id="email" placeholder="Nhập email" name="email"  >
                <span id="email-error" class="text-danger"></span>
            </div>
            <div class="col-md-12">
                <label for="validationDefault02" class="form-label">Mật khẩu*</label>
                <input type="password" class="form-control" id="password" placeholder="Nhập mật khẩu" name="password" >
                <span id="password-error" class="text-danger"></span>
                <span id="password-strength" class="text-success"></span>
            </div>
            <div class="col-md-12">
    <label for="confirm-password" class="form-label">Xác nhận mật khẩu*</label>
    <input type="password" class="form-control" id="confirm-password" placeholder="Nhập lại mật khẩu" name="confirm-password">
    <span id="confirm-password-error" class="text-danger"></span>
</div>

            <div class="col-md-12">
                <label for="phone" class="form-label">Số điện thoại</label>
                <input type="phone" class="form-control" id="phone" placeholder="Nhập số điện thoại" name="phone" >
            </div>
            <div class="col-md-12">
                <label for="avatar" class="form-label">Hình ảnh</label>
                <input type="file" class="form-control" id="avatar" name="avatar">
            </div>
            
            <div class="col-12">
                <input type="submit" value="Đăng kí" name="register" class="genric-btn danger col-12 mb-10">
                <a href="index.php?act=login" class="genric-btn danger-border col-12 mb-10">Đăng nhập</a>
            </div>
        </form>

    </div>
    <?php
    ob_end_flush();
    ?>
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
$(document).ready(function() {
    $('#registration-form').on('submit', function(e) {
        var nameValue = $('#name').val();
        var emailValue = $('#email').val();
        var passwordValue = $('#password').val();
        var confirmPasswordValue = $('#confirm-password').val();

        if (nameValue.trim() === "") {
            e.preventDefault();
            $('#name-error').text('Họ tên không được trống');
        } else {
            $('#name-error').text('');
        }

        var emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
        if (!emailRegex.test(emailValue) || emailValue.trim() === "") {
            e.preventDefault();
            $('#email-error').text('Email không hợp lệ');
        } else {
            $('#email-error').text('');
        }

        if (passwordValue.trim() === "" || passwordValue.length <= 5) {
            e.preventDefault();
            $('#password-error').text('Mật khẩu không được trống và phải lớn hơn 5 kí tự');
            $('#password-strength').text('');
        } else {
            $('#password-error').text('');

            var passwordStrength = calculatePasswordStrength(passwordValue);
            var strengthMessage = '';
            if (passwordStrength >= 11) {
                strengthMessage = 'Mạnh';
                $('#password-error').css('color', 'green');
            } else if (passwordStrength >= 9) {
                strengthMessage = 'Trung bình';
                $('#password-error').css('color', 'orange');
            } else if (passwordStrength >= 7) {
                strengthMessage = 'Yếu';
                $('#password-error').css('color', 'red');
            }
            $('#password-strength').text('Độ mạnh mật khẩu: ' + strengthMessage);
        }

        if (confirmPasswordValue.trim() === "" || confirmPasswordValue !== passwordValue) {
            e.preventDefault();
            $('#confirm-password-error').text('Xác nhận mật khẩu không khớp hoặc trống');
        } else {
            $('#confirm-password-error').text('');
        }
    });

    function calculatePasswordStrength(password) {
        var strength = 0;
        if (password.length >= 8) {
                    strength += 10;
                }
                if (/[!@#$%^&*()_+{}\[\]:;<>,.?~\\-]/.test(password)) {
                    strength += 10;
                }
                if (/[A-Z]/.test(password)) {
                    strength += 10;
                }
                if (/[a-z]/.test(password)) {
                    strength += 10;
                }
                if (/[0-9]/.test(password)) {
                    strength += 10;
                }
        return strength;
    }
});


    </script>
</body>
</html>
    
