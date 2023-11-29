<!-- Preloader Start -->
<!-- <div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="assets/img/logo/logo.png" alt="">
            </div>
        </div>
    </div>
</div> -->
<!-- Preloader Start-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
   $(document).ready(function() {
    $(document).on('click', '.pagination a', function(e) {
        e.preventDefault();
        var page_url = $(this).attr('href');
        var page_number = $(this).attr('href').split('page=')[1]; 

        $.ajax({
            url: page_url,
            type: 'GET',
            success: function(response) {
                $('#articleContainer').html($(response).find('#articleContainer').html());
                window.history.pushState(null, null, page_url); 
                <?php $page = "' + page_number + '"; ?> 
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });
});


</script>
<?php

$count_query = "SELECT COUNT(*) as total FROM article";
$total_articles = pdo_query($count_query);
$row_count = $total_articles[0]['total'];

$per_page = 3;

$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;


$listArticle = article_select_all_page($page, $per_page);

function article_select_all_page($page = 1, $per_page = 3)
{
    $offset = ($page - 1) * $per_page;

    $sql = "SELECT article.*, category.category_name 
    FROM article 
    JOIN category ON article.category_id = category.category_id LIMIT $offset, $per_page";

    $listArticle = pdo_query($sql);
    return $listArticle;
}


?>


<!--================Blog Area =================-->

<section class="blog_area section-padding">
    
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">
                    <div id="articleContainer">
                        <?php foreach ($listArticle as $row) { ?>
                        <?php
                            extract($row);
                            $anh = '../img/' . $img;
                            $image_paths_array = explode(',', $img);

                            $categoryInfo = loai_select_by_id($category_id);
                            $anh = '../img/' . $img;
                            $image_paths_array = explode(',', $img);
                            $image_html_locations = [];

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
                            $detail = "index.php?act=detail&id=" . $article_id;
                            echo '
                  <article class="blog_item">
                  <a href="' . $detail . '">
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
                        } ?> </div>

                    <?php


                    $total_pages = ceil($row_count / $per_page);


                    echo '<nav class="blog-pagination justify-content-center d-flex">';
                    echo '<ul class="pagination">';

                    if ($page > 1) {
                        echo '<li class="page-item"><a href="index.php?act=articles&page=' . ($page - 1) . '" class="page-link" aria-label="Previous"><i class="ti-angle-left"></i></a></li>';
                    }


                    for ($i = 1; $i <= $total_pages; $i++) {
                        echo '<li class="page-item ' . ($page == $i ? 'active' : '') . '"><a href="index.php?act=articles&page=' . $i . '" class="page-link">' . $i . '</a></li>';
                    }


                    if ($page < $total_pages) {
                        echo '<li class="page-item"><a href="index.php?act=articles&page=' . ($page + 1) . '" class="page-link" aria-label="Next"><i class="ti-angle-right"></i></a></li>';
                    }

                    echo '</ul>';
                    echo '</nav>';
                    ?>

                </div>
            </div>
            <div class="col-lg-4">
                <?php include "includes/aside.php"; ?>
            </div>
        </div>
    </div>
</section>
<!--================Blog Area =================-->
