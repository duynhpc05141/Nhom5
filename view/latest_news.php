

  

    <main>
  <!-- Start Youtube -->
  <div class="youtube-area video-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="video-items-active">
                    <?php 
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
    $detail="index.php?act=detail&id=".$article_id;
    $category="index.php?act=category&id=".$category_id;
    echo '
   
     <div class="single-recent mb-100">
                                <div class="what-img">
                                '.$image_html_locations[0].'
                                </div>
                                <div class="what-cap">
                                  <span class="color1">'.$category_name.'</span>
                                    <h4><a href="'.$detail.'">'.$article_name.'</a></h4>
                                </div>
                            </div>
                           
    ';
}

?>
                        <div class="video-items text-center">
                            <img src="./view/assets/img/blog/i1.avif" alt="" width="100%" height="400px">
                        </div>
                        <div class="video-items text-center">
                        <img src="./view/assets/img/blog/i1.avif" alt="" width="100%" height="400px">
                        </div>
                        <div class="video-items text-center">
                        <img src="./view/assets/img/blog/i1.avif" alt="" width="100%" height="400px">

                        </div>
                        <div class="video-items text-center">
                        <img src="./view/assets/img/blog/i1.avif" alt="" width="100%" height="400px">

                        </div>
                        <div class="video-items text-center">
                        <img src="./view/assets/img/blog/i1.avif" alt="" width="100%" height="400px">
                        </div>
                    </div>
                </div>
            </div>
            <div class="video-info">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="video-caption">
                            <div class="top-caption">
                                <span class="color1">NHẠC HOT</span>
                            </div>
                            <div class="bottom-caption">
                                <h2>NHẠC HOT TRONG NĂM 2023</h2>
                                <p>Sau khi tăng 3% hồi tháng 5, mỗi kWh điện sẽ tăng tiếp 4,5%, áp dụng từ hôm nay.

                                    Chiều 9/11, Tập đoàn Điện lực Việt Nam (EVN) thông báo giá bán lẻ điện bình quân (giá điện) tăng từ 1.920,37</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testmonial-nav text-center">
                            <div class="single-video">
                            <img src="./view/assets/img/blog/i1.avif" alt="" width="100%" height="150px">
                                <div class="video-intro">
                                    <h4>Martinez đưa Inter vào vòng knock-out Champions League</h4>
                                </div>
                            </div>
                            <div class="single-video">
                                <iframe src="https://www.youtube.com/embed/rIz00N40bag" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <div class="video-intro">
                                    <h4>Martinez đưa Inter vào vòng knock-out Champions League</h4>
                                </div>
                            </div>
                            <div class="single-video">
                                <iframe src="https://www.youtube.com/embed/CONfhrASy44" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <div class="video-intro">
                                    <h4>Martinez đưa Inter vào vòng knock-out Champions League</h4>
                                </div>
                            </div>
                            <div class="single-video">
                                <iframe src="https://www.youtube.com/embed/lq6fL2ROWf8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <div class="video-intro">
                                    <h4>Martinez đưa Inter vào vòng knock-out Champions League</h4>
                                </div>
                            </div>
                            <div class="single-video">
                                <iframe src="https://www.youtube.com/embed/0VxlQlacWV4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <div class="video-intro">
                                    <h4>Martinez đưa Inter vào vòng knock-out Champions League</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
         <!-- End Start youtube -->
       
        <!-- About US End -->
    </main>
    
   