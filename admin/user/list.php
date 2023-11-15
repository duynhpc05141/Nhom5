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
      <h4>Danh sách khách hàng</h4>
    </div>
    <div class="row justify-content-center ">
      <div class="col-10">
        <table class="table table-bordered   text-center table-hover ">
          <thead>
            <tr>
              <th scope="col">Chọn</th> <!-- Thêm cột checkbox -->
              <th scope="col">ID</th>
              <th scope="col">Tên</th>
              <th scope="col">Ảnh đại diện</th>
              <th scope="col">Mật khẩu</th>
              <th scope="col">Email </th>
              <th scope="col">Địa chỉ </th>
              <th scope="col">Số điện thoại</th>
              <th scope="col">Vai trò</th>
              <th>Action </th>
            </tr>
          </thead>
          <tbody>
            <?php
            function getRole($role_id)
            {
              return $role_id == 1 ? "Admin" : "User";
            }

            foreach ($listCustomer as $row) {
              extract($row);
              $editAc = 'index.php?act=ac-edit&id=' . $row['id'];
              $deleteAc = 'index.php?act=ac-delete&id=' . $row['id'];
              $anh = 'img/' . $img;

              if (file_exists($anh)) {
                $hinh = '<img src=" ' . $anh . '" alt="Hình ảnh đại diện" height="100px">';
              } else {
                $hinh = '0';
              };
              echo ' 
    <tr>  
    <td><input type="checkbox" class="select-checkbox"></td> <!-- Thêm checkbox -->
      <td>' . $id . '</td>
      <td>' . $user . '</td>
      <td>' . $hinh . '</td>
      <td>' . $password . '</td>
      <td>' . $email . '</td>
      <td>' . $address . '</td>
      <td>' . $phone . '</td>

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
          <!-- Thêm mã HTML cho các nút -->
          <input id="delete-selected" class="btn btn-danger btn-sm" type="button" value="Xóa các mục đã chọn">
          <input id="select-all" class="btn btn-warning btn-sm" type="button" value="Chọn tất cả">
          <input id="deselect-all" class="btn btn-secondary btn-sm" type="button" value="Bỏ chọn tất cả">
          <input id="export-csv" class="btn btn-success btn-sm" type="button" value="Xuất CSV">

          <a href="index.php?act=customer-add"><input class="btn btn-primary btn-sm" type="button" value="Nhập thêm"></a>
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

  $("#export-csv").click(function() {
    // Lấy các hàng của bảng
    var rows = $("tbody tr");

    // Tạo một mảng để lưu trữ dữ liệu CSV
    var csvData = [];

    // Thêm tiêu đề cho CSV
    var headers = ["ID", "Tên", "Ảnh đại diện", "Mật khẩu", "Email", "Địa chỉ", "Số điện thoại", "Vai trò"];
    csvData.push(headers);

    // Lặp qua từng hàng trong bảng và lấy dữ liệu từ các cột
    rows.each(function() {
        var row = $(this);
        var rowData = [];

        // Lấy dữ liệu từ từng cột
        row.find("td").each(function() {
            rowData.push($(this).text());
        });

        // Thêm dữ liệu của hàng vào mảng CSV
        csvData.push(rowData);
    });

    // Tạo dữ liệu CSV bằng cách nối mỗi hàng với dấu phẩy
    var csvContent = "data:text/csv;charset=utf-8,";

    csvData.forEach(function(row) {
        var rowStr = row.join(",");
        csvContent += rowStr + "\n";
    });

    // Tạo một đối tượng Blob để chứa dữ liệu CSV
    var blob = new Blob([csvContent], { type: "text/csv;charset=utf-8;" });

    // Tạo URL để tải xuống tệp CSV
    var url = window.URL.createObjectURL(blob);

    // Tạo một thẻ a ẩn để thực hiện tải xuống
    var a = document.createElement("a");
    a.style.display = "none";
    a.href = url;
    a.download = "customer_data.csv";

    // Thêm thẻ a vào trang và kích hoạt tải xuống
    document.body.appendChild(a);
    a.click();

    // Loại bỏ thẻ a sau khi tải xuống hoàn tất
    window.URL.revokeObjectURL(url);
});

</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>