<?php
include "../../DAO/pdo.php";
include "../../DAO/binh-luan.php";
include "../../DAO/article.php";

if (isset($_POST['comment_content']) && ($_POST['parent_comment_id'])) {
    $comment_content = $_POST['comment_content'];
    $user_id = 2; 
    
    $article_id = $_POST['article_id'];
    $parent_comment_id = $_POST['parent_comment_id'];
    reply_comment($user_id,$article_id, $comment_content, $parent_comment_id);

    echo "Phản hồi đã được gửi thành công!";
    exit;
} else {
    echo "Đã xảy ra lỗi khi gửi phản hồi. Vui lòng thử lại sau.";
}

echo "Đã xảy ra lỗi khi gửi phản hồi. Vui lòng thử lại sau.";
?>
