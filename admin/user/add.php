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

    <div class="container">
        <div class="alert alert-light shadow text-center" role="alert">
            <h4>Thêm khách hàng</h4>
        </div>
        <form id="customer-form" class="row g-3 mx-auto shadow p-3" action="index.php?act=user_add" method="post" enctype="multipart/form-data">

            <div class="col-md-12">
                <label for="user_name" class="form-label">Tên khách hàng</label>
                <input type="text" class="form-control" id="user" name="user_name" required>
                
            </div>

            <div class="col-md-12">
                <label for="user_password" class="form-label">Mật khẩu</label>
                <input type="text" class="form-control" id="password" name="user_password" required>
                
            </div>

            <div class="col-md-12">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" >
                
            </div>

            <div class="col-md-12">
                <label for="avatar" class="form-label">Ảnh đại diện</label>
                <input type="file" class="form-control" id="avatar" name="avatar" >
            </div>
            <div class="col-md-12">
                <label for="user_phone" class="form-label">Số điện thoại</label>
                <input type="number" class="form-control" id="phone" name="user_phone" required>
                
            </div>
            <div class="col-md-12">
                <label>Vai trò:</label>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="role_id" value="0"  required>
                    <label class="form-check-label" for="role">User</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="role_id" value="1" required>
                    <label class="form-check-label" for="role">Admin</label>
                </div>
            </div>
            
            <div class="col-12">
                <input class="btn btn-primary" type="submit" value="Thêm mới" name="addCus">
                <input class="btn btn-primary" type="reset" value="Nhập lại">
                <a href="index.php?act=user_list"><input class="btn btn-primary" type="button" value="Danh sách"></a>
            </div>
        </form>
    </div>
    <?php
    if (isset($alert) && ($alert != "")) {
        echo $alert;
    }
    ?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/additional-methods.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#customer-form").validate({
                rules: {
                    user_name: "required",
                    email: "required",
                    user_password: "required",
                    role_id: "required",
                    user_phone: "required",
                  
                },
                messages: {
                    email: "Vui lòng nhập email",
                    user_name: "Vui lòng nhập tên khách hàng",
                    user_password:"Vui lòng nhập mật khẩu",
                    role_id: "Vui lòng nhập vai trò",
                    user_phone: "Vui lòng nhập SĐT"
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
