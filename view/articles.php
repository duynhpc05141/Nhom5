<!-- Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="assets/img/logo/logo.png" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Preloader Start-->



<!--================Blog Area =================-->
<section class="blog_area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">
                    <?php foreach ($listArticle as $row) { ?>
                    <?php
                        extract($row);
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
                        $dateString = $created_at;

                        $timestamp = strtotime($dateString);


                        $day = date('d', $timestamp);
                        $month = date('F', $timestamp);
                        $detail="index.php?act=detail&id=".$article_id;
                        echo '
                  <article class="blog_item">
                  <a href="'.$detail.'">
                            <div class="blog_item_img">
                            ' . $image_html_locations[0] . '
                                <a href="#" class="blog_item_date">
                                    <h3>' . $day . '</h3>
                                    <p>' . $month . '</p>
                                </a>
                            </div>

                            <div class="blog_details">
                             
                                    <h2>' . $article_name . '</h2>
                                
                                <p>

                                </p>
                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
                                    <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                                </ul>
                            </div>
                            </a>
                        </article>
                  ';
                    } ?>




                    <nav class="blog-pagination justify-content-center d-flex">
                        <ul class="pagination">
                            <li class="page-item">
                                <a href="#" class="page-link" aria-label="Previous">
                                    <i class="ti-angle-left"></i>
                                </a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">1</a>
                            </li>
                            <li class="page-item active">
                                <a href="#" class="page-link">2</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link" aria-label="Next">
                                    <i class="ti-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-4">
                <?php include "includes/aside.php"; ?>
            </div>
        </div>
    </div>
</section>
<!--================Blog Area =================-->