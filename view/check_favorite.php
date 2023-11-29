<?php
include "../DAO/pdo.php";
include "../DAO/favourite.php";
session_start();
if (isset($_SESSION['user_name']['user_id'])) {
    $user_id = $_SESSION['user_name']['user_id'];
    $article_id = $_POST['article_id'];
    $favorite_status = favourite_select($user_id, $article_id);
    if ($favorite_status) {
        echo "favorited";
    } else {
        echo "unfavorited";
    }
} else {
    echo "not_logged_in";
}
