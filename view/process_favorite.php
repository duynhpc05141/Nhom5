<?php
include "../DAO/pdo.php";
include "../DAO/favourite.php";

if (isset($_POST['user_id']) && isset($_POST['article_id']) && isset($_POST['is_favorited'])) {
    $user_id = $_POST['user_id'];
    $article_id = $_POST['article_id'];
    $is_favorited = $_POST['is_favorited'];

    if ($is_favorited == 'true') {
       
        favourite_delete($user_id, $article_id);
        echo "unfavorited"; 
    } else {
      
        favourite_insert($user_id, $article_id);
        echo "favorited"; 
    }
} else {
    echo "Invalid request";
}
?>



