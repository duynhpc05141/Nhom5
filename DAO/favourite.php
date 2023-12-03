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
function favourite_select_user($user_id){
    $sql = "SELECT f.fav_id, f.user_id, f.created_at, f.article_id, a.article_name, a.img
    FROM favourite f
    JOIN article a ON f.article_id = a.article_id
    WHERE f.user_id = ".$user_id;
    return pdo_query($sql);
}

?>