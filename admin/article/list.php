<style>
  .btn {
    margin: 0.5rem 0.5rem;
  }
</style>


  <div class="container ">
    <div class="alert alert-light shadow text-center " role="alert">
      <h4>Danh sách bài viết</h4>
    </div>
    <div class="row justify-content-center ">
      <div class="col-10">

        <form action="index.php?act=article-list" class="d-flex justify-center w-50" role="search" method="post">
          <input class="form-control me-2 btn-sm" name="keyword" type="text" placeholder="Enter category id" style="height: 40px;">



          <select name="category_id" id="" class="form-select " style="height: 40px;">
            <option value="" selected>All</option>
            <?php
           $list_loai = loai_select_all();
            foreach ($list_loai as $category) {

              extract($category);
              echo '
              <option value="' . $category_id . '">' . $category_name . '</option> 
              ';
            }
            ?>

          </select>

          <input type="submit" name="go" class="btn btn-outline-success " value="G" style="margin-top: 2px;">
        </form>
        <table class="table table-bordered border-primary  text-center table-hover ">
          <thead>
            <tr>

              <th scope="col">ID</th>
              <th scope="col">Danh mục</th>
              <th scope="col">Tên bài viết</th>
              <th scope="col">Nội dung</th>
              <th scope="col">Hình ảnh </th>
              <th>Action </th>
            </tr>
          </thead>
          <tbody>
            <?php

            foreach ($listArticle as $row) {
              extract($row);
              $editArt = 'index.php?act=article-edit&id=' . $row['article_id'];
              $deleteArt = 'index.php?act=article-delete&id=' . $row['article_id'];
              $anh = 'img/' . $img;

              if (file_exists($anh)) {
                $hinh = '<img src=" ' . $anh . '" alt="Hình ảnh bài viết" height="50px">';
              } else {
                $hinh = 'Chưa có ảnh được chọn';
              };
              $categoryInfo = loai_select_by_id($category_id);
              echo ' 
    <tr>  
   
      <td>' . $article_id . '</td>
      <td>' . $categoryInfo['category_name'] . '</td>
      <td>' . $article_name . '</td>
      <td>' . $article_content . '</td>
      <td>' . $hinh . '</td>
     
     <td> 
     <a  href="' . $editArt . '"><i class="fa-regular fa-pen-to-square"></i></a>
     <a onclick="return confirm(\'Bạn có muốn xóa?\');" href="' . $deleteArt . '"><i class="fa-solid fa-trash-can text-danger"></i></a>
     
    
     </td>
    </tr>
    ';
            }

            ?>

          </tbody>
          <a href="index.php?act=article-add"><input class="btn btn-primary btn-sm" type="button" value="Nhập thêm"></a>
        </table>

      </div>
    </div>
  </div>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>