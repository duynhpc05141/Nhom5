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
#bill{
  width: 500px;
  height: 600px;
}
  </style>
    <?php
if(is_array($bill)){
    extract($bill);
}
$customer = 
              'Tên người dùng: ' . $bill['bill_name'] . '</br>' .
              'Địa chỉ giao hàng: ' . $bill['bill_address'] . '</br>' .
              'Số điện thoại: ' . $bill['bill_phone'];
              $count=  loadone_cart_count($bill['id']);
              $billStatus = getstastus($bill['bill_status']);
    ?>
  <div class="container">
 
    
  <form action="index.php?act=update-bill" class="row justify-content-center mx-auto"  method="post" id="bill">
  
  
  <div class="col-md-12">
    <label for="validationCustom02" class="form-label">Mã đơn hàng</label>
    <input type="text" class="form-control" id="validationCustom02" disabled name="id" value="<?=$bill['id'] ?>">
    <div class="valid-feedback">
     Hợp lệ
    </div>
  </div>
  <div class="col-md-12">
    <label for="validationCustom02" class="form-label">Khách hàng</label>
    <p><?=$customer?></p>
   
    <div class="valid-feedback">
     Hợp lệ
    </div>
  </div>
  <div class="col-md-12">
    <label for="validationCustom02" class="form-label">Số lượng</label>
    <input type="text" class="form-control" id="validationCustom02" disabled  name="quantity" value="<? if(isset($count)&& ($count!="")) echo $count ?>">
    <div class="valid-feedback">
     Hợp lệ
    </div>
  </div>
  <div class="col-md-12">
    <label for="validationCustom02" class="form-label">Giá trị đơn hàng</label>
    <input type="text" class="form-control" id="validationCustom02" disabled  name="bill_total" value="<? if(isset($bill['bill_total'])&& ($bill['bill_total']!="")) echo $bill['bill_total'] ?>">
    <div class="valid-feedback">
     Hợp lệ
    </div>
  </div>
  <div class="col-md-12">
    <label for="validationCustom02" class="form-label">Tình trạng</label>
    <select class="form-select" id="validationCustom02" required name="bill_status">
        <option value="0" <?php if (isset($billStatus) && $billStatus == 0) echo 'selected'; ?>>Đơn hàng mới</option>
        <option value="1" <?php if (isset($billStatus) && $billStatus == 1) echo 'selected'; ?>>Đang xử lí</option>
        <option value="2" <?php if (isset($billStatus) && $billStatus == 2) echo 'selected'; ?>>Đang giao hàng</option>
        <option value="3" <?php if (isset($billStatus) && $billStatus == 3) echo 'selected'; ?>>Đã giao hàng</option>
    </select>
    <div class="valid-feedback">
        Hợp lệ
    </div>
</div>

  <div class="col-md-12">
    <input type="hidden" name="id" value="<?=$bill['id'] ?>">
    <input class="btn btn-primary" type="submit" value="Cập nhật" name="update-bill"></input>
    <input class="btn btn-primary" type="reset" value="Nhập lại"></input>
   <a href="index.php?act=bill"> <input class="btn btn-primary" type="button" value="Danh sách"></input></a>
  </div>
  </form>
  </div>
  </div>
  </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>