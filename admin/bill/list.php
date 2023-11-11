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
      <h4>Danh sách đơn hàng</h4>
    </div>
    <div class="row justify-content-center ">
      <div class="col-10">
        <table class="table table-bordered border-primary  text-center table-hover ">
          <thead>
            <tr>
              <th scope="col">Mã đơn hàng</th> <!-- Thêm cột checkbox -->
              <th scope="col">Khách hàng</th>
              <th scope="col">Số lượng</th>
              <th scope="col">Giá trị đơn hàng</th>
              <th scope="col">Tình trạng</th>
              <th>Action </th>
            </tr>
          </thead>
          <tbody>
            <?php
            

            foreach ($listBill as $bill) {
              extract($bill);
              $count=  loadone_cart_count($bill['id']);
              $billStatus = getstastus($bill['bill_status']);
              $customer = 
              'Tên người dùng: ' . $bill['bill_name'] . '<br>' .
              'Địa chỉ giao hàng: ' . $bill['bill_address'] . '<br>' .
              'Số điện thoại: ' . $bill['bill_phone'];
  

              $editAc = 'index.php?act=bill-edit&id=' . $bill['id'];
              $deleteAc = 'index.php?act=bill-delete&id=' . $bill['id'];
              echo ' 
    <tr>  
   
      <td>MH' . $bill['id'] . '</td>
      <td>' .$customer . '</td>
      <td>' .$count. '</td>
      <td>' .$bill['bill_total'] . '</td>
      <td>' . $billStatus. '</td>
     <td> 
     <a  href="' . $editAc . '"><i class="fa-regular fa-pen-to-square"></i></a>
     <a onclick="return alert(\'Bạn không thể xóa do trong ràng buộc khóa ngoại của bảng cart!!!\');"  href="' . $deleteAc . '"><i class="fa-solid fa-trash-can text-danger"></i></a>
     
    
    
    </tr>
    ';
            }

            ?>

          </tbody>
          <!-- Thêm mã HTML cho các nút -->
          <input id="delete-selected" class="btn btn-danger btn-sm" type="button" value="Xóa các mục đã chọn">
          <input id="select-all" class="btn btn-warning btn-sm" type="button" value="Chọn tất cả">
          <input id="deselect-all" class="btn btn-secondary btn-sm" type="button" value="Bỏ chọn tất cả">
         
          
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