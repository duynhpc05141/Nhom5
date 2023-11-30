<?php
include "../../DAO/pdo.php";
include "../../DAO/binh-luan.php";
include "../../DAO/article.php";
if (isset($_POST['comment_id']) && $_POST['comment_id'] > 0) {
    $comment_id = $_POST['comment_id'];
    comment_delete($comment_id);
}
?>