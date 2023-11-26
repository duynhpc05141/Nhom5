
     <?php extract($detail);
      $anh = '../img/' . $img;
      $image_paths_array = explode(',', $img);

      $categoryInfo = loai_select_by_id($category_id);
      $anh = '../img/' . $img;
      $image_paths_array = explode(',', $img);
      $image_html_locations = []; // Khởi tạo mảng chứa thẻ hình ảnh hoặc thông báo

      foreach ($image_paths_array as $image_path) {
         $full_image_path = './img/' . trim($image_path);

         if (file_exists($full_image_path)) {
            $image_html_locations[] = '<img class="card-img" src="' . $full_image_path . '" alt="Hình ảnh bài viết" style="max-height: 400px;">';
         } else {
            $image_html_locations[] = 'Chưa có ảnh được chọn';
         }
      }
      ?>
     <!--================Blog Area =================-->
     <section class="blog_area single-post-area section-padding">
        <div class="container">
           <div class="row">
              <div class="col-lg-8 posts-list">
                 <div class="single-post">
                    <div class="feature-img">
                       <img class="img-fluid" src="/assets/img/blog/single_blog_1.png" alt="">
                    </div>
                    <div class="blog_details">
                       <h2>
                          <?= $article_name ?>
                       </h2>
                       <ul class="blog-info-link mt-3 mb-4">
                          <li><a href="#"><i class="fa-regular fa-eye"></i><?= $view ?> lượt xem</a></li>
                          <li><a href="#"><i class="fa fa-comments"></i> <?= $comment ?> bình luận</a></li>
                       </ul>

                       <?= $image_html_locations[0] ?>

                       <p class="excert">
                          <?= $article_content ?>
                       </p>
                       <p>

                       </p>
                       <div class="quote-wrapper">
                          <div class="quotes">

                          </div>
                       </div>

                    </div>
                 </div>
                 <div class="navigation-top">
                    <div class="d-sm-flex justify-content-between text-center">
                       <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span> Lily and 4
                          people like this</p>
                       <div class="col-sm-4 text-center my-2 my-sm-0">
                          <!-- <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p> -->
                       </div>
                       <ul class="social-icons">
                          <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                          <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                          <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                          <li><a href="#"><i class="fab fa-behance"></i></a></li>
                       </ul>
                    </div>

                 </div>
                 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
                 <div id="comment-form"></div>
                 <div id="comment-list"></div>
                 <script>
                    $(document).ready(function() {
                       $("#comment-form").load("./view/comment/comment_form.php", {
                          article_id: <?= $article_id ?>
                        
                       });
                       $("#comment-list").load("./view/comment/load_comment.php", {
                          article_id: <?= $article_id ?>
                       });
                    });
                    
            
                 </script>
                 <!-- <button id="load-more-comments">Xem thêm bình luận</button> -->
                 <div class="">
                    <h5>Bài viết cùng danh mục</h5>
                    <?php
                     foreach ($sameKind as $items) {
                        extract($items);
                        $anh = '../img/' . $img;
                        $image_paths_array = explode(',', $img);

                        $categoryInfo = loai_select_by_id($category_id);
                        $anh = '../img/' . $img;
                        $image_paths_array = explode(',', $img);
                        $image_html_locations = []; // Khởi tạo mảng chứa thẻ hình ảnh hoặc thông báo

                        foreach ($image_paths_array as $image_path) {
                           $full_image_path = './img/' . trim($image_path);

                           if (file_exists($full_image_path)) {
                              $image_html_locations[] = '<img class="" src="' . $full_image_path . '" alt="Hình ảnh bài viết" width="150px" >';
                           } else {
                              $image_html_locations[] = 'Chưa có ảnh được chọn';
                           }
                        }
                        $detail = "index.php?act=detail&id=" . $article_id;
                        echo '

                        <ul class="list-group mb-3 mt-2">
                        <a href="' . $detail . '">
                        <li class="list-group-item d-flex align-center">
                        ' . $image_html_locations[0] . '
                        <h5 class="m-lg-2">' . $article_name . '</h5>
                        </li>
                        </a>
                        </ul>
                        ';
                     }
                     ?>
                 </div>
              </div>
              <div class="col-lg-4">
                 <?php include "includes/aside.php"; ?>
              </div>
           </div>
        </div>
     </section>
     <!--================ Blog Area end =================-->
     <scipt src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></scipt>