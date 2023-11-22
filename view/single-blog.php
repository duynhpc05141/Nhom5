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
                     <img class="img-fluid" src="assets/img/blog/single_blog_1.png" alt="">
                  </div>
                  <div class="blog_details">
                     <h2>
                        <?=$article_name?>
                     </h2>
                     <ul class="blog-info-link mt-3 mb-4">
                        <li><a href="#"><i class="fa-regular fa-eye"></i><?=$view?> lượt xem</a></li>
                        <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                     </ul>
                     
                     <?=$image_html_locations[0]?>
                 
                     <p class="excert">
                     <?=$article_content?>
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
               <div class="">
  <?php
foreach($sameKind as $items){
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
        $detail="index.php?act=detail&id=".$article_id;
   echo '

   <ul class="list-group mb-3 mt-2">
   <a href="'.$detail.'">
   <li class="list-group-item d-flex align-center">
    '.$image_html_locations[0].'
    <h5 class="m-lg-2">'.$article_name.'</h5>
   </li>
   </a>
   </ul>
   ';
}
?>
   </div>
              

                  
               
               <div class="comments-area">
                  <h4>05 Comments</h4>
                  <div class="comment-list">
                     <div class="single-comment justify-content-between d-flex">
                        <div class="user justify-content-between d-flex">
                           <div class="thumb">
                              <img src="./view/assets/img/comment/comment_1.png" alt="">
                           </div>
                           <div class="desc">
                              <p class="comment">
                                 Multiply sea night grass fourth day sea lesser rule open subdue female fill which them
                                 Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
                              </p>
                              <div class="d-flex justify-content-between">
                                 <div class="d-flex align-items-center">
                                    <h5>
                                       <a href="#">Emilly Blunt</a>
                                    </h5>
                                    <p class="date">December 4, 2017 at 3:12 pm </p>
                                 </div>
                                 <div class="reply-btn">
                                    <a href="#" class="btn-reply text-uppercase">reply</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="comment-list">
                     <div class="single-comment justify-content-between d-flex">
                        <div class="user justify-content-between d-flex">
                           <div class="thumb">
                              <img src="./view/assets/img/comment/comment_2.png" alt="">
                           </div>
                           <div class="desc">
                              <p class="comment">
                                 Multiply sea night grass fourth day sea lesser rule open subdue female fill which them
                                 Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
                              </p>
                              <div class="d-flex justify-content-between">
                                 <div class="d-flex align-items-center">
                                    <h5>
                                       <a href="#">Emilly Blunt</a>
                                    </h5>
                                    <p class="date">December 4, 2017 at 3:12 pm </p>
                                 </div>
                                 <div class="reply-btn">
                                    <a href="#" class="btn-reply text-uppercase">reply</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="comment-list">
                     <div class="single-comment justify-content-between d-flex">
                        <div class="user justify-content-between d-flex">
                           <div class="thumb">
                              <img src="./view/assets/img/comment/comment_3.png" alt="">
                           </div>
                           <div class="desc">
                              <p class="comment">
                                 Multiply sea night grass fourth day sea lesser rule open subdue female fill which them
                                 Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
                              </p>
                              <div class="d-flex justify-content-between">
                                 <div class="d-flex align-items-center">
                                    <h5>
                                       <a href="#">Emilly Blunt</a>
                                    </h5>
                                    <p class="date">December 4, 2017 at 3:12 pm </p>
                                 </div>
                                 <div class="reply-btn">
                                    <a href="#" class="btn-reply text-uppercase">reply</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="comment-form">
                  <h4>Leave a Reply</h4>
                  <form class="form-contact comment_form" action="#" id="commentForm">
                     <div class="row">
                        <div class="col-12">
                           <div class="form-group">
                              <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
                                 placeholder="Write Comment"></textarea>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <input class="form-control" name="name" id="name" type="text" placeholder="Name">
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                           </div>
                        </div>
                        <div class="col-12">
                           <div class="form-group">
                              <input class="form-control" name="website" id="website" type="text" placeholder="Website">
                           </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <button type="submit" class="button button-contactForm btn_1 boxed-btn">Send Message</button>
                     </div>
                  </form>
               </div>
            </div>
            <div class="col-lg-4">
            <?php include "includes/aside.php"; ?>
            </div>
         </div>
      </div>
   </section>
   <!--================ Blog Area end =================-->

  