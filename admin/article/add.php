<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<body>
    <style>
        label.error {
            color: red;
        }
    </style>

    <div class="container">
        <div class="alert alert-light shadow text-center" role="alert">
            <h4>Thêm bài viết</h4>
        </div>
        <form id="product-form" class="row g-3 mx-auto mb-3" action="index.php?act=article-add" method="post" enctype="multipart/form-data">
            <div class="col-md-12">
                <label for="category_id" class="form-label">Thuộc danh mục</label>
                <select class="form-select" id="category_id" name="category_id" required>
                    <option value="">Chọn danh mục</option>
                    <?php

                    $list_loai = loai_select_all();
                    foreach ($list_loai as $row) {
                        extract($row);
                        echo '<option value="' . $category_id . '" name="category_id">' . $category_name . '</option>';
                    }
                    ?>
                </select>
            </div>

            <div class="col-md-12">
                <label for="article_name" class="form-label">Tiêu đề</label>
                <textarea type="text" class="form-control" id="article_name" name="article_name" required></textarea>
            </div>

            <div class="col-md-12">
                <label for="content" class="form-label">Nội dung</label>
                <textarea name="editor1"></textarea>
            </div>

            <div class="col-md-12">
                <label for="img" class="form-label">Hình ảnh</label>
                <input type="file" class="form-control" id="img" name="img">
            </div>

            <div class="col-12">
                <input class="btn btn-primary" type="submit" value="Thêm mới" name="add">
                <input class="btn btn-primary" type="reset" value="Nhập lại">
                <a href="index.php?act=article-list"><input class="btn btn-primary" type="button" value="Danh sách"></a>
            </div>
        </form>
    </div>

    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        CKEDITOR.replace('editor1', {
            // Cấu hình CKEditor
        });
    </script>

</body>

</html>