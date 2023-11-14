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
  </style>
  <div class="container">
    <?php
    if (is_array($article)) {
      extract($article);
    }
    $anh = 'img/' . $img;

    if (file_exists($anh)) {
      $hinh = '<img src=" ' . $anh . '" alt="Hình ảnh bài viết" height="200px">';
    } else {
      $hinh = 'Chưa có ảnh được chọn';
    };
    ?>
    <div class="alert alert-light shadow text-center " role="alert">
      <h4>Cập nhật bài viết</h4>
    </div>
    <div class="row justify-content-center">
      <div class="col-12">
        <form action="index.php?act=article-update" class="row g-3 product mx-auto shadow p-5" method="post" enctype="multipart/form-data">
          <div class="col-md-12">
            <label for="validationCustom02" class="form-label">Tên loại</label>
            <select name="category_id" id="" class="form-select " style="height: 40px;">
              <option value="" selected>All</option>
              <?php
              $list_loai = loai_select_all();
              foreach ($list_loai as $row) {
                $selected = ($category_id == $row['category_id']) ? 'selected' : '';
              ?>
                <option value="<?= $row['category_id'] ?? '' ?>" <?= $selected ?>><?= $row['category_name'] ?? '' ?></option>
              <?php
              }
              ?>


            </select>
            <div class="valid-feedback">
              Hợp lệ
            </div>
          </div>
          <div class="col-md-12">
            <label for="article_name" class="form-label">Tiêu đề</label>
            <textarea type="text" class="form-control" id="article_name" name="article_name"><?= $article_name ?></textarea>
          </div>

          <div class="col-md-12">
            <label for="content" class="form-label">Nội dung</label>
            <textarea name="editor1"><?= $article_content ?></textarea>
          </div>

          <div class="col-md-12">
            <div class="row">
               <div class="col-md-6">
              <label for="img" class="form-label">Hình ảnh</label>
            <input type="file" class="form-control" id="img" name="img">
            </div>
            <div class="col-md-6">
<div><?=$hinh ?></div>
            </div>
            </div>
           
            
          </div>
          


          <div class="col-12">
            <input type="hidden" name="article_id" value="<?= $article_id ?>">
            <input class="btn btn-primary" type="submit" value="Cập nhật" name="update"></input>
            <input class="btn btn-primary" type="reset" value="Nhập lại"></input>
            <a href="index.php?act=article-list"> <input class="btn btn-primary" type="button" value="Danh sách"></input></a>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script>
    CKEDITOR.replace('editor1', {
      // Cấu hình CKEditor
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>