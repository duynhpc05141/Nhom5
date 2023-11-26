<!DOCTYPE html>
<html>

<head>
    <title> Login Form</title>
    <link rel="stylesheet" href="css/style.css?php echo time(); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
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
            if (!empty($alert)) {
                echo $alert; // Hiển thị thông báo thành công nếu có giá trị
            }
            ?>
            <div class="col-md-12">
                <label for="name" class="form-label">Họ Và Tên</label>
                <input type="text" class="form-control" id="name" placeholder="Nhập tên đăng nhập" name="user" required>
            </div>
            <div class="col-md-12">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Nhập email" name="email" required >
                <span id="email-error" class="text-danger"></span>
            </div>
            <div class="col-md-12">
                <label for="phone" class="form-label">Số điện thoại</label>
                <input type="phone" class="form-control" id="phone" placeholder="Nhập số điện thoại" name="phone" required>
            </div>
            <div class="col-md-12">
                <label for="avatar" class="form-label">Hình ảnh</label>
                <input type="file" class="form-control" id="avatar" name="avatar">
            </div>
            <div class="col-md-12">
                <label for="validationDefault02" class="form-label">Mật khẩu</label>
                <input type="password" class="form-control" id="validationDefault02" placeholder="Nhập mật khẩu" name="password" required>
                <span id="password-error" class="text-danger"></span>
                <span id="password-strength" class="text-success"></span>
            </div>
            <div class="col-12">
                <input type="submit" value="Đăng kí" name="register" class="btn btn-primary col-12 mb-10">
                <a href="index.php?act=login" class="btn btn-dark col-12 mb-10">Đăng nhập</a>
            </div>
        </form>

    </div>
    <?php
    ob_end_flush();
    ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#registration-form").validate({
                rules: {
                    user: "required",
                    password: "required",
                    email: "required",
                    phone: "required",
                },
                messages: {
                    user: "Vui lòng nhập tên đăng nhập",
                    password: "Vui lòng nhập mật khẩu",
                    email: "Vui lòng nhập email",
                    phone: "Vui lòng nhập số điện thoại",
                },
                submitHandler: function(form) {

                    form.submit();
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            // Gắn sự kiện kiểm tra khi người dùng nộp biểu mẫu
            $('#registration-form').on('submit', function(e) {
                var nameValue = $('#name').val();
                var emailValue = $('#email').val();
                var passwordValue = $('#validationDefault02').val();

                if (nameValue.trim() === "") {
                    e.preventDefault(); // Ngăn form nộp đi nếu tên rỗng
                    $('#name-error').text('Họ tên không được trống');
                } else {
                    $('#name-error').text('');
                }

                // Kiểm tra email hợp lệ
                var emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
                if (!emailRegex.test(emailValue) || emailValue.trim() === "") {
                    e.preventDefault(); // Ngăn form nộp đi nếu email không hợp lệ hoặc rỗng
                    $('#email-error').text('Email không hợp lệ');
                } else {
                    $('#email-error').text('');
                }
            });

            $('#validationDefault02').on('input', function() {
                var passwordValue = $(this).val();

                // Kiểm tra mật khẩu đủ dài và đủ mạnh
                if (passwordValue.length <= 5) {
                    $('#password-error').text('Mật khẩu phải lớn hơn 5 kí tự');
                    $('#password-strength').text('');
                } else {
                    $('#password-error').text('');

                    // Kiểm tra sự mạnh của mật khẩu
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

            });

            function calculatePasswordStrength(password) {
                // Tính độ mạnh của mật khẩu dựa trên các tiêu chí như độ dài, ký tự đặc biệt, chữ hoa, chữ thường, số, v.v.
                // Bạn có thể tùy chỉnh logic tính toán độ mạnh mật khẩu ở đây.

                // Dưới đây là một ví dụ đơn giản:
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>