<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/55a9fa42b8.js" crossorigin="anonymous"></script>
  <title>Document</title>
</head>
<style>
  .btn {
    margin: 0.5rem 0.5rem;
  }
  .limited-text {
    max-width: 15ch;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
  }
</style>

<body>
  <div class="container ">
    <div class="alert alert-light shadow text-center " role="alert">
      <h4>Danh sách khách hàng</h4>
    </div>
    <div class="row justify-content-center ">
      <div class="col-10">
      <?php
                if (isset($alert) && ($alert != "")) {
                    echo $alert;
                }
                ?>
        <table class="table table-bordered   text-center table-hover ">
          <thead>
            <tr>
              <th scope="col">STT</th>
              <th scope="col">Tên khách hàng</th>
              <th scope="col">Ảnh đại diện</th>
              <th scope="col">Email</th>
              <th scope="col">Số điện thoại</th>
              <th scope="col">Vai trò</th>
              <th scope="col">Thao tác</th>
            </tr>
          </thead>
          <tbody>
            <?php
            function getRole($role_id)
            {
              return $role_id == 1 ? "Admin" : "User";
            }

            foreach ($listUser as $row) {
              extract($row);
              $editAc = 'index.php?act=user_edit&user_id=' . $user_id;
              $deleteAc = 'index.php?act=user_delete&user_id=' . $user_id;
              $img = '../img/' . $avatar;
              $hashed_password = password_hash($user_password, PASSWORD_DEFAULT);

              if (file_exists($img)) {
                $hinh = '<img src=" ' . $img . '" alt="Hình ảnh đại diện" height="50px" style="border-radius:10px;">';
              } else {
                $hinh = '0';
              };
              echo ' 
              <tr>  
                <td>' . $user_id . '</td>
                <td>' . $user_name . '</td>
                <td>' . $hinh . '</td>
                <td>' . $email . '</td>
                <td>' . $user_phone . '</td>
                <td>' . getRole($role_id) . '</td>
                <td>
                  <a  href="' . $editAc . '"><i class="fa-regular fa-pen-to-square"></i></a>
                  <a onclick="return confirm(\'Bạn có muốn xóa?\');"  href="' . $deleteAc . '"><i class="fa-solid fa-trash-can text-danger"></i></a>
                </td>
              </tr>
              ';
              }

            ?>

          </tbody>
          <a href="index.php?act=user_add"><input class="btn btn-primary btn-sm" type="button" value="Nhập thêm"></a>
        </table>
        

      </div>
    </div>
  </div>
</body>

</html>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>