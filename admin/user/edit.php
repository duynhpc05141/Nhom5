<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
<style>
    label.error {
        color: red; /* Định dạng màu chữ của thông báo lỗi thành màu đỏ */
    }
    #customer-form {
            width: 400px;
            height: 700px;
            border-radius: 15px;
        }
</style>
    <?php

    session_start();
    
    if (is_array($customer)) {
        extract($customer);
        $img = '../img/' . $avatar;
    }
    if (file_exists($img)) {
        $hinh = '<img src=" ' . $img . '" alt="Hình ảnh đại diện" height="50px" style="border-radius:10px;">';
      } else {
        $hinh = '0';
      };
    ?>
    <div class="container">
        <div class="alert alert-light shadow text-center" role="alert">
            <h4>Cập nhật thông tin khách hàng</h4>
        </div>
        <div class="row justify-content-center">
            <div class="col-10">
                <form action="index.php?act=user_update" id="customer-form" class="row g-3 mx-auto shadow p-3" method="post" enctype="multipart/form-data">
                    <div class="col-md-12">
                        <label for="validationCustom02" class="form-label">Tên khách hàng</label>
                        <input type="text" class="form-control" id="user" required name="user" value="<?=$user_name?>">
                    </div>
                    <div class="col-md-12">
                        <label for="validationCustom02" class="form-label">Mật khẩu</label>
                        <input type="password" class="form-control" id="password" required name="password" value="<?= isset($user_password) && $user_password != "" ? $user_password : "" ?>">
                    </div>
                    <div class="col-md-12">
                        <label for="validationCustom02" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?= isset($email) ? $email : "" ?>">
                    </div>
                    <div class="col-md-12">
                        <label for="validationCustom02" class="form-label">Avatar:</label> <br>
                        <?= $hinh ?>
                        <input type="file" class="form-control" id="validationCustom02" name="avatar" value="<?= isset($img) ? $img : "" ?>">
                    </div>
                    <div class="col-md-12">
                        <label for="validationCustom02" class="form-label">Số điện thoại</label>
                        <input type="number" class="form-control" id="phone" name="phone" value="<?= isset($user_phone) ? $user_phone : "" ?>">
                    </div>
                    <div class="col-md-12">
                        <label for="role">Vai trò:</label>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="role_id" value="0" required <?php if (isset($role_id) && $role_id == '0') { echo 'checked'; } ?>>
                            <label class="form-check-label" for="role">User</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="role_id" value="1" required <?php if (isset($role_id) && $role_id == '1') { echo 'checked'; } ?>>
                            <label class="form-check-label" for="role">Admin</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <input type="hidden" name="id" value="<?= $user_id ?>">
                        <input class="btn btn-primary" type="submit" value="Cập nhật" name="ac-update">
                        <input class="btn btn-primary" type="reset" value="Nhập lại">
                        <a href="index.php?act=user_list"><input class="btn btn-primary" type="button" value="Danh sách"></a>
                    </div>
                </form>
                <?php
                if (isset($alert) && ($alert != "")) {
                    echo $alert;
                }
                ?>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/additional-methods.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#customer-form").validate({
                rules: {
                    user: "required",
                    email: "required",
                    password: "required",
                    role_id: "required",
                    phone: "required",
                  
                },
                messages: {
                    email: "Vui lòng nhập email",
                    user: "Vui lòng nhập tên khách hàng",
                    password:"Vui lòng nhập mật khẩu",
                    role_id: "Vui lòng nhập vai trò",
                    phone: "Vui lòng nhập SĐT"
                },
                // Xử lý khi biểu mẫu được gửi đi
                submitHandler: function (form) {
                    form.submit();
                }
            });
        });
    </script>
</body>

</html>
