
    <?php
    session_start();
    include "../../DAO/pdo.php";
    include "../../DAO/binh-luan.php";
    include "../../DAO/article.php";

if (isset($_POST['comment_content']) && isset($_SESSION['user_name'])) {
    $comment_content = $_POST['comment_content'];
    $user_id = $_SESSION['user_name']['user_id'];
    $article_id = $_POST['article_id'];
 comment_insert($user_id, $article_id, $comment_content);

    echo "Bình luận đã được gửi thành công!";
    exit;
}else{
    echo "Thất b";
}


?>

