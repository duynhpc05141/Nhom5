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
</style>

<body>
  <div class="container">
  <div class="alert alert-light shadow text-center " role="alert">
      <h4>Danh sách danh mục</h4>
    </div>
    <div class="row justify-content-center">
      
      <div class="col-10">
        <table class="table table-bordered border-primary  text-center table-hover ">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Tên danh mục</th>
              <th>Action </th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($listCategory as $row) {
              extract($row);
              $edit = 'index.php?act=edit&id=' . $row['id'];
              $delete = 'index.php?act=delete&id=' . $row['id'];
              echo ' 
    <tr>  
      <td>' . $id . '</td>
      <td>' . $name . '</td>
     <td> 
     <a  href="' . $edit . '"><i class="fa-regular fa-pen-to-square"></i></a>
     <a onclick="return confirm(\'Bạn có muốn xóa?\');" href="' . $delete . '" ><i class="fa-solid fa-trash-can text-danger"></i></a>


     </td>
    </tr>
    ';
            }
            ?>

          </tbody>
          <input class="btn btn-danger btn-sm " type="button" value="Xóa các mục đã chọn">
          <input class="btn btn-warning btn-sm " type="button" value="Chọn tất cả">
          <input class="btn btn-secondary btn-sm " type="button" value="Bỏ chọn tất cả">
          <a href="index.php?act=category-add"><input class="btn btn-primary btn-sm" type="button" value="Nhập thêm"></a>
        </table>

      </div>
    </div>
  </div>
</body>

</html>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>