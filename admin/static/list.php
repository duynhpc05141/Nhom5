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
            <h4>Thống kê</h4>
        </div>
        <div class="row justify-content-center ">
            <div class="col-10">

                <table class="table table-bordered border-primary  text-center table-hover ">
                    <thead>
                        <tr>
                            <th scope="col">Chọn</th> <!-- Thêm cột checkbox -->
                            <th scope="col">ID danh mục</th>
                            <th scope="col">Tên danh mục</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Giá cao nhất </th>
                            <th scope="col">Giá thấp nhất </th>
                            <th scope="col">Giá trung bình</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        foreach ($listStatic as $static) {
                            extract($static);

                            echo ' 
    <tr>  
    <td><input type="checkbox" class="select-checkbox"></td> <!-- Thêm checkbox -->
      <td>' . $idcategory . '</td>
      <td>' . $namecategory . '</td>
      <td>' . $countproduct . '</td>
      <td>' . $maxprice . '</td>
      <td>' . $minprice . '</td>
      <td>' . $avgprice . '</td>
    </tr>
    ';
                        }

                        ?>

                    </tbody>


                    <a href="index.php?act=chart"><input class="btn btn-primary btn-sm" type="button" value="Xem biểu đồ"></a>
                </table>

            </div>
        </div>
    </div>
</body>

</html>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>