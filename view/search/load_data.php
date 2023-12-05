<?php
 include "../../DAO/pdo.php";
 include "../../DAO/article.php";
 include "../../DAO/loai.php";

if (isset($_POST['keyword']) && ($_POST['keyword'] != "")) {
    $keyword = $_POST['keyword'];
    $search_results = article_select($keyword);

    foreach ($search_results as $result) {
            extract($result);
            $anh = '../img/' . $img;
            $image_paths_array = explode(',', $img);
            $bold_keyword = '<strong style="color: #fc3f00;">' . $keyword . '</strong>';
            $bold_content = str_ireplace($keyword, $bold_keyword, $article_name);
            $categoryInfo = loai_select_by_id($category_id);
            $anh = '../img/' . $img;
            $image_paths_array = explode(',', $img);
            $image_html_locations = []; 

            foreach ($image_paths_array as $image_path) {
                $full_image_path = './img/' . trim($image_path);

                if (file_exists($full_image_path)) {
                    $image_html_locations[] = '<img class="card-img" src="' . $full_image_path . '" alt="Hình ảnh bài viết" width=150px>';
                } else {
                    $image_html_locations[] = 'Chưa có ảnh được chọn';
                }
            }
            $detail = "index.php?act=detail&id=" . $article_id;
            $category = "index.php?act=category&id=" . $category_id;
            echo '
        <a href="' . $detail . '">
        <div class="row p-2 shadow">
        <div class="col-md-3 p-2">
        ' . $image_html_locations[0] . '
        </div>
        <div class="col-md-9 mt-sm-20 p-2">
            <p>' . $bold_content . '</p>
        </div>
    </div>
    </a>
        ';
        
    }
} else {
    
}
?>
