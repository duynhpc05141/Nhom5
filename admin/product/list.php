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
  <div class="container ">
    <div class="alert alert-light shadow text-center " role="alert">
      <h4>Danh sách hàng hóa</h4>
    </div>
    <div class="row justify-content-center ">
      <div class="col-10">

        <form action="index.php?act=product-list" class="d-flex justify-center w-50" role="search" method="post">
          <input class="form-control me-2 btn-sm" name="keyword" type="text" placeholder="Enter category id" style="height: 40px;">



          <select name="category_id" id="" class="form-select " style="height: 40px;">
            <option value="" selected>All</option>
            <?php
            $listCategory = loai_select_all();
            foreach ($listCategory as $category) {

              extract($category);
              echo '
              <option value="' . $id . '">' . $name . '</option> 
              ';
            }
            ?>

          </select>

          <input type="submit" name="go" class="btn btn-outline-success " value="G" style="margin-top: 2px;">
        </form>
        <table class="table table-bordered border-primary  text-center table-hover ">
          <thead>
            <tr>
              <th scope="col">Chọn</th> <!-- Thêm cột checkbox -->
              <th scope="col">ID</th>
              <th scope="col">Danh mục</th>
              <th scope="col">Tên sản phẩm</th>
              <th scope="col">Giá </th>
              <th scope="col">Hình ảnh </th>
              <th scope="col">Mô tả</th>
              <th scope="col"> Lượt xem </th>
              <th>Action </th>
            </tr>
          </thead>
          <tbody>
            <?php

            foreach ($listProduct as $row) {
              extract($row);
              $editPro = 'index.php?act=product-edit&id=' . $row['id'];
              $deletePro = 'index.php?act=product-delete&id=' . $row['id'];
              $anh = 'img/' . $img;

              if (file_exists($anh)) {
                $hinh = '<img src=" ' . $anh . '" alt="Hình ảnh sản phẩm" height="50px">';
              } else {
                $hinh = '0';
              };
              $categoryInfo = loai_select_by_id($category_id);
              echo ' 
    <tr>  
    <td><input type="checkbox" class="select-checkbox"></td> <!-- Thêm checkbox -->
      <td>' . $id . '</td>
      <td>' . $categoryInfo['name'] . '</td>
      <td>' . $name . '</td>
      <td>' . $price . '</td>
      <td>' . $hinh . '</td>
      <td>' . $description . '</td>

      <td>' . $view . '</td>
     <td> 
     <a  href="' . $editPro . '"><i class="fa-regular fa-pen-to-square"></i></a>
     <a onclick="return confirm(\'Bạn có muốn xóa?\');" href="' . $deletePro . '"><i class="fa-solid fa-trash-can text-danger"></i></a>
     
    
     </td>
    </tr>
    ';
            }

            ?>

          </tbody>
          <!-- Thêm mã HTML cho các nút -->
          <input id="delete-selected" class="btn btn-danger btn-sm" type="button" value="Xóa các mục đã chọn">
          <input id="select-all" class="btn btn-warning btn-sm" type="button" value="Chọn tất cả">
          <input id="deselect-all" class="btn btn-secondary btn-sm" type="button" value="Bỏ chọn tất cả">

          <a href="index.php?act=product-add"><input class="btn btn-primary btn-sm" type="button" value="Nhập thêm"></a>
        </table>

      </div>
    </div>
  </div>
</body>

</html>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    // Xóa các mục đã chọn
    $("#delete-selected").click(function() {
      // Lấy danh sách các hàng được chọn
      var selectedRows = $("input[type='checkbox']:checked").closest('tr');

      if (selectedRows.length > 0) {
        if (confirm("Bạn có chắc chắn muốn xóa các mục đã chọn không?")) {
          // Thực hiện xóa mục ở đây, ví dụ:
          selectedRows.remove();
        }
      } else {
        alert("Vui lòng chọn ít nhất một mục để xóa.");
      }
    });

    // Chọn tất cả
    $("#select-all").click(function() {
      $("input[type='checkbox']").prop('checked', true);
    });

    // Bỏ chọn tất cả
    $("#deselect-all").click(function() {
      $("input[type='checkbox']").prop('checked', false);
    });

    // Chọn/Deselect tất cả sử dụng checkbox "Chọn tất cả"
    $("#select-checkbox-all").change(function() {
      var isChecked = $(this).prop('checked');
      $("input[type='checkbox']").prop('checked', isChecked);
    });
  });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>