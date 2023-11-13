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
    label.error {
        color: red; /* Định dạng màu chữ của thông báo lỗi thành màu đỏ */
    }
    form{
        width: 400px;
    }
</style>

    <div class="container">
        <div class="alert alert-light shadow text-center" role="alert">
            <h4>Thêm hàng hóa mới</h4>
        </div>
        <form id="product-form" class="row g-3 mx-auto" action="index.php?act=product-add" method="post" enctype="multipart/form-data">
            <div class="col-md-12">
                <label for="category_id" class="form-label">Thuộc danh mục</label>
                <select class="form-select" id="category_id" name="category_id" required>
                    <option value="">Chọn danh mục</option>
                    <?php
                    $listCategory = loai_select_all();
                    foreach ($listCategory as $row) {
                        extract($row);
                        echo '<option value="' . $id . '">' . $name . '</option>';
                    }
                    ?>
                </select>
                
            </div>

            <div class="col-md-12">
                <label for="name" class="form-label">Tên sản phẩm</label>
                <input type="text" class="form-control" id="name" name="name" required>
                
            </div>

            <div class="col-md-12">
                <label for="price" class="form-label">Giá</label>
                <input type="text" class="form-control" id="price" name="price" required>
                
            </div>

            <div class="col-md-12">
                <label for="img" class="form-label">Hình ảnh</label>
                <input type="file" class="form-control" id="img" name="img" >
                
            </div>

            <div class="col-md-12">
                <label for="description" class="form-label">Mô tả</label>
                <textarea class="form-control" id="description" name="description" rows="2" ></textarea>
                
            </div>

            <div class="col-12">
                <input class="btn btn-primary" type="submit" value="Thêm mới" name="add">
                <input class="btn btn-primary" type="reset" value="Nhập lại">
                <a href="index.php?act=product-list"><input class="btn btn-primary" type="button" value="Danh sách"></a>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/additional-methods.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#product-form").validate({
                rules: {
                    category_id: "required",
                    name: "required",
                    price: {
                        required: true,
                        number: true
                    },
                },
                messages: {
                    category_id: "Vui lòng chọn danh mục",
                    name: "Vui lòng nhập tên sản phẩm",
                    price: {
                        required: "Vui lòng nhập giá sản phẩm",
                        number: "Giá sản phẩm phải là số"
                    },
                },
                // Xử lý khi biểu mẫu được gửi đi
                submitHandler: function (form) {
                    form.submit();
                }
            });
        });
    </script>
</body>
</html>
