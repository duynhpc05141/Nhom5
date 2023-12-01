<?php
include "../DAO/pdo.php";
include "../DAO/favourite.php";

if (isset($_POST['article_id'])) {
    $articleId = $_POST['article_id'];
    // Gọi hàm favourite_count để lấy số lượt yêu thích
    $like = favourite_count($articleId);
    echo $like; // Trả về số lượt yêu thích
}
?>
