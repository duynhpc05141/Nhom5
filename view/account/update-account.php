<!DOCTYPE html>
<html>

<head>
    <title> Login Form</title>
    <link rel="stylesheet" href="css/style.css?php echo time(); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <style>
        #update-form {
            width: 400px;
        }

        label.error {
            color: red;
        }
    </style>
    <div class="container d-flex justify-content-center align-items-center">
        <?php
        if (isset($_SESSION['user_name']) && is_array($_SESSION['user_name'])) {
            extract($_SESSION['user_name']);
            $img = './img/' . $avatar;
            if (file_exists($img)) {
                $hinh = '<img src=" ' . $img . '" alt="Hình ảnh đại diện" height="40px" style="border-radius:10px;">';
            } else {
                $hinh = '0';
            };
        }
        ?>

        <form id="update-form" class="row g-3 mx-auto p-5 shadow mt-3 mb-3" action="index.php?act=user_edit" method="post" enctype="multipart/form-data">
            <h2 class="text-center">Cập nhật tài khoản</h2>
            <?php
            if (!empty($alert)) {
                echo $alert;
            }
            ?>
            <div class="col-md-12">
                <label for="name" class="form-label">Họ Tên</label>
                <input type="text" class="form-control " id="name" placeholder="Nhập tên đăng nhập" name="user" value="<?= $user_name ?>">
                <span id="name-error" class="text-danger"></span>
            </div>
            <div class="col-md-12">
                <label for="avatar" class="form-label">Ảnh đại diện</label>
                <?= $hinh ?>
                <input type="file" class="form-control" name="avatar">
            </div>
            <div class="col-md-12">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Nhập email" name="email" value="<?= $email ?>">
                <span id="email-error" class="text-danger"></span>
            </div>
            <div class="col-md-12 mb-2">
                <label for="phone" class="form-label">Số điện thoại</label>
                <input type="number" class="form-control" id="phone" placeholder="Nhập số điện thoại" name="phone" value="<?= $user_phone ?>">
            </div>

            <div class="col-12">
                <input type="hidden" name="id" value="<?= $user_id ?>">
                <input type="submit" value="Cập nhật" name="updateAc" class="genric-btn danger-border col-12 mb-10">
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
            $("#update-form").validate({
                rules: {
                    user: "required",
                    password: "required",
                    email: "required",

                },
                messages: {
                    user: "Vui lòng nhập tên đăng nhập",
                    password: "Vui lòng nhập mật khẩu",
                    email: "Vui lòng nhập email",

                },
                submitHandler: function(form) {

                    form.submit();
                }
            });


            $('#update-form').on('submit', function(e) {
                var nameValue = $('#name').val();
                var emailValue = $('#email').val();
                var passwordValue = $('#validationDefault02').val();

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
            });

            $('#validationDefault02').on('input', function() {
                var passwordValue = $(this).val();

                if (passwordValue.length <= 5) {
                    $('#password-error').text('Mật khẩu phải lớn hơn 5 kí tự');
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>