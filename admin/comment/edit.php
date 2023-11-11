<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <?php
if(is_array($result)){
    extract($result);
}
    ?>
  <div class="container">
 
    
  <form action="index.php?act=update" class="row justify-content-center"  method="post">
  
  
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Tên loại</label>
    <input type="text" class="form-control" id="validationCustom02" required name="name" value="<? if(isset($name)&& ($name!="")) echo $name ?>">
    <div class="valid-feedback">
     Hợp lệ
    </div>
  </div>
  <div class="col-md-4">
    <input type="hidden" name="id" value="<? if(isset($id)&& ($id>0)) echo $id ?>">
    <input class="btn btn-primary" type="submit" value="Cập nhật" name="update"></input>
    <input class="btn btn-primary" type="reset" value="Nhập lại"></input>
   <a href="index.php?act=list"> <input class="btn btn-primary" type="button" value="Danh sách"></input></a>
  </div>
  </form>
  </div>
  </div>
  </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>