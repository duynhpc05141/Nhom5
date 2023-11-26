
    <?php
    session_start();
    include "../../DAO/pdo.php";
    include "../../DAO/binh-luan.php";
    include "../../DAO/article.php";

if (isset($_POST['comment_content']) ) {
    $comment_content = $_POST['comment_content'];
    $user_id = 1;
    $article_id = $_POST['article_id'];
 comment_insert($user_id, $article_id, $comment_content);

    echo "Bình luận đã được gửi thành công!";
    exit;
}else{
    echo "Đã xảy ra lỗi khi gửi bình luận. Vui lòng thử lại sau.";
}


?>

