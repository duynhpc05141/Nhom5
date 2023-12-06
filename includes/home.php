<main>
    <!-- Trending Area Start -->
    <div class="trending-area fix">
        <div class="container">
            <div class="trending-main">
                <!-- Trending Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="trending-tittle">
                            <strong>Xu hướng</strong>
                            <!-- <p>Rem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                            <div class="trending-animated">
                                <ul id="js-news" class="js-hidden">
                                    <li class="news-item">Chào mừng bạn đến với Fast News</li>
                                    <li class="news-item">Chào mừng bạn đến với Fast News</li>
                                    <li class="news-item">Chào mừng bạn đến với Fast News</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <!-- Trending Top -->
                        <div class="trending-top mb-30">
                            <div class="trend-top-img">
                                <img src="./view/assets/img/trending/trending_top.jpg" alt="">
                                <div class="trend-top-cap">
                                    <span>Appetizers</span>
                                    <h2><a href="details.html">Lễ hội âm nhạc lớp nhất trong năm<br> Contest At Look of the year</a></h2>
                                </div>
                            </div>
                        </div>
                        <!-- Trending Bottom -->
                        <div class="trending-bottom">
                            <div class="row">

                                <?php

                                foreach ($listArticle as $row) {

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
                                    $detail = "index.php?act=detail&id=" . $article_id;
                                    $category = "index.php?act=category&id=" . $category_id;
                                    echo '  <div class="col-lg-4">
                                    <div class="single-bottom mb-35">
                                        <div class="trend-bottom-img mb-30">
                                            ' . $image_html_locations[0] . '
                                        </div>
                                        <div class="trend-bottom-cap">
                                           <a href="' . $category . '"> <span class="color1">' . $category_name . '</span></a>
                                            <h4><a href="' . $detail . '">' . $article_name . '</a></h4>
                                        </div>
                                    </div>
                                </div>';
                                } ?>
                            </div>
                        </div>
                    </div>
                    <!-- Riht content -->
                    <div class="col-lg-4">
                        <div class="trand-right-single d-flex">
                            <div class="trand-right-img">
                                <img src="./view/assets/img/trending/sport.png" alt="" width="120px" height="100px">
                            </div>
                            <div class="trand-right-cap">
                                <span class="color1">Thể thao</span>
                                <h4><a href="index.php?act=rankings">Tin bóng đá mới nhất</a></h4>
                            </div>
                        </div>
                        <div class="trand-right-single d-flex">
                            <div class="trand-right-img">
                                <img src="./view/assets/img/trending/w.jpg" alt="" width="120px" height="100px">
                            </div>
                            <div class="trand-right-cap">
                                <span class="color3">Cẩm nang</span>
                                <h4><a href="../view/weather.php">Thời tiết hôm nay </a></h4>
                            </div>
                        </div>
                        <div class="trand-right-single d-flex">
                            <div class="trand-right-img">
                                <img src="./view/assets/img/trending/f.jpg" alt="" width="120px" height="100px">
                            </div>
                            <div class="trand-right-cap">
                                <span class="color2">Đời sống</span>
                                <h4><a href="../view/food.html">Hôm nay ăn gì?</a></h4>
                            </div>
                        </div>
                        <div class="trand-right-single d-flex">
                            <div class="trand-right-img">
                                <img src="./view/assets/img/trending/right4.jpg" alt="">
                            </div>
                            <div class="trand-right-cap">
                                <span class="color4">Mạo hiểm</span>
                                <h4><a href="index.php?act=detail">10 ôtô bán nhiều nhất quý III</a></h4>
                            </div>
                        </div>
                        <div class="trand-right-single d-flex">
                            <div class="trand-right-img">
                                <img src="./view/assets/img/trending/right5.jpg" alt="">
                            </div>
                            <div class="trand-right-cap">
                                <span class="color1">Thể thao</span>
                                <h4><a href="index.php?act=detail">10 ôtô bán nhiều nhất quý III</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Trending Area End -->
    <!--   Weekly-News start -->
    <div class="weekly-news-area pt-50">
        <div class="container">
            <div class="weekly-wrapper">
                <!-- section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-30">
                            <h3>Được xem nhiều nhất</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="weekly-news-active dot-style d-flex dot-style">
                            <?php foreach ($top10 as $item) {
                                extract($item);
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
                                $detail = "index.php?act=detail&id=" . $article_id;
                                $category = "index.php?act=category&id=" . $category_id;
                                echo '
                                 <div class="weekly-single">
                                <div class="weekly-img">
                                ' . $image_html_locations[0] . '
                                </div>
                                <div class="weekly-caption">
                                <a href="' . $category . '"> <span class="color1">' . $category_name . '</span></a>
                                    <h4><a href="' . $detail . '">' . $article_name . '</a></h4>
                                </div>
                            </div>
                                ';
                            } ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Weekly-News -->
    <!--   Weekly2-News start -->
    <div class="weekly2-news-area  gray-bg p-lg-5">
        <div class="container">
            <div class="weekly2-wrapper">
                <!-- section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-30">
                            <h3>Tin mới nhất</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="weekly2-news-active dot-style d-flex dot-style">
                            <?php foreach ($latest as $new) {
                                extract($new);
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
                                $detail = "index.php?act=detail&id=" . $article_id;
                                $category = "index.php?act=category&id=" . $category_id;
                                echo '
                                <div class="weekly2-single">
                                <div class="weekly2-img">
                                ' . $image_html_locations[0] . '
                                </div>
                                <div class="weekly2-caption">
                                <a href="' . $category . '"> <span class="color1">' . $category_name . '</span></a>
                                    <p>' . $created_at . '</p>
                                    <h4><a href="' . $detail . '">' . $article_name . '</a></h4>
                                </div>
                            </div>
                                ';
                            } ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Weekly-News -->
    
    <!-- End Start youtube -->
    <!--  Recent Articles start -->
    <div class="recent-articles">
        <div class="container">
            <div class="recent-wrapper">
                <!-- section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-30">
                            <h3>Có thể bạn thích</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                   
                     
                         <?php
                         if (isset($_SESSION['user_name'])) {
                            foreach ($listRecommended as $re) {
                                extract($re);
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
                                $detail = "index.php?act=detail&id=" . $article_id;
                                $category = "index.php?act=category&id=" . $category_id;
                                echo '
                                <div class="col-lg-4">
                                <div class="single-recent mb-100">
                                <div class="what-img">
                                ' . $image_html_locations[0] . '
                                </div>
                                <div class="what-cap">
                                  <span class="color1">' . $category_name . '</span>
                                    <h4><a href="' . $detail . '">' . $article_name . '</a></h4>
                                </div>
                            </div>
                           </div>
                                ';
                            }
                        }
                            ?>

                    
                     
                           
                        
                    
                </div>
            </div>
        </div>
    </div>
    <!--Recent Articles End -->
    <!--Start pagination -->

    <!-- End pagination  -->
</main>