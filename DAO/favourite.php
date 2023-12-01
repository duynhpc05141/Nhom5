<?php
require_once 'pdo.php';
function favourite_insert($user_id,$article_id){
    $sql = "INSERT INTO favourite(user_id,article_id) VALUES (?, ?)";
    pdo_execute($sql, $user_id,$article_id);
}
function favourite_delete($user_id,$article_id){
    $sql = "DELETE FROM favourite WHERE user_id='".$user_id."' AND  article_id='".$article_id."'";
    pdo_execute($sql, $user_id,$article_id);
}
function favourite_select($user_id,$article_id){
    $sql = "SELECT * FROM favourite WHERE user_id='".$user_id."' AND  article_id='".$article_id."'";
   return pdo_query_one($sql, $user_id,$article_id);
}
function favourite_count($article_id){
    $sql = "SELECT COUNT(fav_id) AS total_favorites FROM favourite WHERE article_id='".$article_id."'";
    $result = pdo_query($sql);
    $like = $result[0]['total_favorites'];
    return $like;
}


?>