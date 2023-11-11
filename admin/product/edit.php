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
  .product{
    width: 500px;
  
  }
</style>
  <div class="container">
    <?php
    if (is_array($product)) {
      extract($product);
    }
    $anh = 'img/' . $img;

    if (file_exists($anh)) {
      $hinh = '<img src=" ' . $anh . '" alt="Hình ảnh sản phẩm" height="50px">';
    } else {
      $hinh = '0';
    };
    ?>
    <div class="alert alert-light shadow text-center " role="alert">
      <h4>Cập nhật hàng hóa</h4>
    </div>
    <div class="row justify-content-center">
      <div class="col-12">
        <form action="index.php?act=product-update" class="row g-3 product mx-auto shadow p-5" method="post" enctype="multipart/form-data">
          <div class="col-md-12">
            <label for="validationCustom02" class="form-label">Tên loại</label>
            <select name="category_id" id="" class="form-select " style="height: 40px;">
              <option value="" selected>All</option>
              <?php
              $listCategory = loai_select_all();
              foreach ($listCategory as $row) {
                $selected = ($category_id == $row['id']) ? 'selected' : '';
              ?>
                <option value="<?= $row['id'] ?? '' ?>" <?= $selected ?>><?= $row['name'] ?? '' ?></option>
              <?php
              }
              ?>


            </select>
            <div class="valid-feedback">
              Hợp lệ
            </div>
          </div>
          <div class="col-md-12">
            <label for="validationCustom02" class="form-label">Tên sản phẩm</label>
            <input type="text" class="form-control" id="validationCustom02" required name="name" value="<?= $name  ?>">
            <div class="valid-feedback">
              Hợp lệ
            </div>
          </div>
          <div class="col-md-12">
            <label for="validationCustom02" class="form-label">Giá</label>
            <input type="text" class="form-control" id="validationCustom02" required name="price" value="<? if (isset($price) && ($price != "")) echo $price ?>">
            <div class="valid-feedback">
              Hợp lệ
            </div>
          </div>

          <div class="col-md-12">
            <label for="validationCustom02" class="form-label">Hình ảnh</label>
            <?= $hinh ?>
            <input type="file" class="form-control" id="validationCustom02" name="img">
            <div class="valid-feedback">
              Hợp lệ
            </div>
          </div>
          <div class="col-md-12">
            <label for="validationCustom02" class="form-label">Mô tả</label>
            <textarea name="description" id="" cols="30" rows="10"><? if (isset($description) && ($description != "")) echo $description ?></textarea>
            <div class="valid-feedback">
              Hợp lệ
            </div>
          </div>
          <div class="col-12">
            <input type="hidden" name="id" value="<?= $id ?>">
            <input class="btn btn-primary" type="submit" value="Cập nhật" name="update"></input>
            <input class="btn btn-primary" type="reset" value="Nhập lại"></input>
            <a href="index.php?act=product-list"> <input class="btn btn-primary" type="button" value="Danh sách"></input></a>
          </div>
        </form>
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>