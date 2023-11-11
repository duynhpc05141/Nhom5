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
      <h4>Danh sách bình luận</h4>
    </div>
    <div class="row justify-content-center">
      
      <div class="col-10">
        <table class="table table-bordered border-primary  text-center table-hover ">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Tên đăng nhập</th>
              <th>ID sản phẩm</th>
              <th>Nội dung </th>
              <th>Thời gian </th>
              <th>Action </th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($listComment as $cm) {
              extract($cm);
              $editCm = 'index.php?act=editcm&id=' . $cm['id'];
              $deleteCm = 'index.php?act=deletecm&id=' . $cm['id'];
              echo ' 
    <tr>  
      <td>' . $id . '</td>
      <td>' . $user . '</td>
      <td>' . $product_id . '</td>
      <td>' . $content . '</td>
      <td>' . $date . '</td>
     <td> 
     
     <a onclick="return confirm(\'Bạn có muốn xóa?\');" href="' . $deleteCm . '" ><i class="fa-solid fa-trash-can text-danger"></i></a>


     </td>
    </tr>
    ';
            }
            ?>

          </tbody>
          <input class="btn btn-danger btn-sm " type="button" value="Xóa các mục đã chọn">
          <input class="btn btn-warning btn-sm " type="button" value="Chọn tất cả">
          <input class="btn btn-secondary btn-sm " type="button" value="Bỏ chọn tất cả">
          
        </table>

      </div>
    </div>
  </div>
</body>

</html>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>