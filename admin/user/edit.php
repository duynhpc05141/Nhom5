<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <?php

    session_start();
    
    if (is_array($customer)) {
        extract($customer);
    }
    ?>
    <div class="container">
        <div class="alert alert-light shadow text-center" role="alert">
            <h4>Cập nhật thông tin khách hàng</h4>
        </div>
        <div class="row justify-content-center">
            <div class="col-10">
                <form action="index.php?act=customer-update" class="row g-3" method="post" enctype="multipart/form-data">
                    <div class="col-md-4">
                        <label for="validationCustom02" class="form-label">Tên khách hàng</label>
                        <input type="text" class="form-control" id="validationCustom02" required name="user" value="<?=$user?>">
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom02" class="form-label">Mật khẩu</label>
                        <input type="password" class="form-control" id="validationCustom02" required name="password" value="<?= isset($password) && $password != "" ? $password : "" ?>">
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom02" class="form-label">Email</label>
                        <input type="email" class="form-control" id="validationCustom02" name="email" value="<?= isset($email) ? $email : "" ?>">
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom02" class="form-label">Địa chỉ</label>
                        <input type="text" class="form-control" id="validationCustom02" name="address" value="<?= isset($address) ? $address : "" ?>">
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom02" class="form-label">Số điện thoại</label>
                        <input type="text" class="form-control" id="validationCustom02" name="phone" value="<?= isset($phone) ? $phone : "" ?>">
                    </div>
                    <div class="col-md-4">
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
                        <input type="hidden" name="id" value="<?= $id ?>">
                        <input class="btn btn-primary" type="submit" value="Cập nhật" name="ac-update">
                        <input class="btn btn-primary" type="reset" value="Nhập lại">
                        <a href="index.php?act=customer-list"><input class="btn btn-primary" type="button" value="Danh sách"></a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
