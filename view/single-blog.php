<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<style>
   .heart-container {
      --heart-color: rgb(255, 91, 137);
      position: relative;
      width: 20px;
      height: 20px;
      transition: .3s;
   }

   .heart-container .checkbox {
      position: absolute;
      width: 100%;
      height: 100%;
      opacity: 0;
      z-index: 20;
      cursor: pointer;
   }

   .heart-container .svg-container {
      width: 100%;
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
   }

   .heart-container .svg-outline,
   .heart-container .svg-filled {
      fill: var(--heart-color);
      position: absolute;
   }

   .heart-container .svg-filled {
      animation: keyframes-svg-filled 1s;
      display: none;
   }

   .heart-container .svg-celebrate {
      position: absolute;
      animation: keyframes-svg-celebrate .5s;
      animation-fill-mode: forwards;
      display: none;
      stroke: var(--heart-color);
      fill: var(--heart-color);
      stroke-width: 2px;
   }

   .heart-container .checkbox:checked~.svg-container .svg-filled {
      display: block
   }

   .heart-container .checkbox:checked~.svg-container .svg-celebrate {
      display: block
   }

   .favorite-btn {
      outline: none;
      background-color: transparent;
      border: none;
      margin-right: 300px;
   }

   @keyframes keyframes-svg-filled {
      0% {
         transform: scale(0);
      }

      25% {
         transform: scale(1.2);
      }

      50% {
         transform: scale(1);
         filter: brightness(1.5);
      }
   }

   @keyframes keyframes-svg-celebrate {
      0% {
         transform: scale(0);
      }

      50% {
         opacity: 1;
         filter: brightness(1.5);
      }

      100% {
         transform: scale(1.4);
         opacity: 0;
         display: none;
      }
   }
</style>

<body>

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
                  <div class="d-sm-flex justify-content-between text-center align-center">
                     <p id="printButton"><i class="fa-solid fa-print"></i></p>

                     <button class="favorite-btn" data-userid="<?= $_SESSION['user_name']['user_id']; ?>" data-articleid="<?= $article_id; ?>">
                        <div class="heart-container" title="Like">
                           <input type="checkbox" class="checkbox" id="Give-It-An-Id">
                           <div class="svg-container">
                              <svg viewBox="0 0 24 24" class="svg-outline" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Zm-3.585,18.4a2.973,2.973,0,0,1-3.83,0C4.947,16.006,2,11.87,2,8.967a4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,11,8.967a1,1,0,0,0,2,0,4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,22,8.967C22,11.87,19.053,16.006,13.915,20.313Z">
                                 </path>
                              </svg>
                              <svg viewBox="0 0 24 24" class="svg-filled" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Z">
                                 </path>
                              </svg>
                              <svg class="svg-celebrate" width="100" height="100" xmlns="http://www.w3.org/2000/svg">
                                 <polygon points="10,10 20,20"></polygon>
                                 <polygon points="10,50 20,50"></polygon>
                                 <polygon points="20,80 30,70"></polygon>
                                 <polygon points="90,10 80,20"></polygon>
                                 <polygon points="90,50 80,50"></polygon>
                                 <polygon points="80,80 70,70"></polygon>
                              </svg>
                           </div>
                        </div>
                     </button>




                     <!-- <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span> Lily and 4
                          people like this</p> -->
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
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
   <script>
      $(document).ready(function() {
         var articleId = <?= $id ?>;
         var userId = <?= $_SESSION['user_name']['user_id'] ?>;
         $.ajax({
            type: 'POST',
            url: './view/check_favorite.php',
            data: {
               user_id: userId,
               article_id: articleId
            },
            success: function(response) {
               if (response === 'favorited') {
                  $('.favorite-btn').addClass('favorited');
                  $('.favorite-btn .svg-outline').css('display', 'none');
                  $('.favorite-btn .svg-filled').css('display', 'block');
                  $('.favorite-btn .svg-celebrate').css('display', 'none');
               } else {
                  $('.favorite-btn').removeClass('favorited');
                  $('.favorite-btn .svg-outline').css('display', 'block');
                  $('.favorite-btn .svg-filled').css('display', 'none');
                  $('.favorite-btn .svg-celebrate').css('display', 'none');
               }
            },
            error: function(xhr, status, error) {
               console.error(error);
            }
         });
      });
      document.addEventListener("DOMContentLoaded", function() {
         document.getElementById("printButton").addEventListener("click", function() {
            document.getElementById("printButton").style.display = "none";
            window.print();
            document.getElementById("printButton").style.display = "block";
         });
      });

      $(document).ready(function() {
         $('.favorite-btn').click(function() {
            var userId = $(this).data('userid');
            var articleId = $(this).data('articleid');
            var isFavorited = $(this).hasClass('favorited');
            var button = $(this);

            $.ajax({
               type: 'POST',
               url: './view/process_favorite.php',
               data: {
                  user_id: userId,
                  article_id: articleId,
                  is_favorited: isFavorited
               },
               success: function(response) {
                  if (isFavorited) {
                     button.removeClass('favorited');
                     button.find('.svg-outline').css('display', 'block');
                     button.find('.svg-filled').css('display', 'none');
                     button.find('.svg-celebrate').css('display', 'none');
                  } else {
                     button.addClass('favorited');
                     button.find('.svg-outline').css('display', 'none');
                     button.find('.svg-filled').css('display', 'block');
                     button.find('.svg-celebrate').css('display', 'none');
                  }
               },
               error: function(xhr, status, error) {
                  console.error(error);
               }
            });
         })
      });
   </script>
   <!--================ Blog Area end =================-->
</body>

</html>