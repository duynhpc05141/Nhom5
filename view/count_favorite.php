<?php
include "../DAO/pdo.php";
include "../DAO/favourite.php";

if (isset($_POST['article_id'])) {
    $articleId = $_POST['article_id'];
   
    $like = favourite_count($articleId);
    echo $like; 
}
?>
