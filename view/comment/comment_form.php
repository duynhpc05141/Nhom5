<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <title>Document</title>
</head>
<body>
    <?php
  ob_start();
include "../../DAO/pdo.php";
include "../../DAO/binh-luan.php";
include "../../DAO/article.php";
$article_id=$_REQUEST['article_id'];
$listComment= comment_select_all_1($article_id);
foreach($listComment as $item){
    extract($item);
   

?>
<!-- <div class="comments-area">
    <h4>Bình luận</h4>
    <div class="comment-list">
        <div class="single-comment justify-content-between d-flex">
            <div class="user justify-content-between d-flex">
                <div class="thumb">
                <img src="../img/<?=$item['avatar']?>" alt="">  
                </div>
                <div class="desc">
                    <p class="comment">
                       <?=$comment_content?>
                    </p>
                    <div class="d-flex justify-content-between">
                        <div class="d-flex align-items-center">
                            <h5>
                                <a href="#"></a>
                            </h5>
                            <p class="date"><?=$created_at?></p>
                        </div>
                        <div class="reply-btn">
                            <a href="#" class="btn-reply text-uppercase">reply</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div> -->
<?} ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<div class="comment-form">
    <h4>Bình luận</h4>
    <form class="form-contact comment_form" action="<?= $_SERVER['PHP_SELF']; ?>" id="commentForm" method="post">
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <textarea class="form-control w-100" name="comment_content" id="comment_content" cols="30" rows="9" placeholder="Nhập nội dung"></textarea>
                </div>
            </div>
          
        </div>
        <div class="form-group">
       
            <input type="hidden" id="article_id" name="article_id" value="<?php echo $article_id ?>" >
            <input type="submit" name="submit" id="submit" class="button button-contactForm btn_1 boxed-btn" value="GỬI" />

        </div>
    </form>
</div>


<script>

$('#commentForm').submit(function(e) {
    e.preventDefault(); 
  var  comment_content=$('#comment_content').val();
 var article_id=$('#article_id').val();

    $.ajax({
        url: './view/comment/add_comment.php',
        method: 'POST',
        data: {comment_content:comment_content, article_id:article_id},
        dataType: "text",
        success: function(response) {
            loadComments();
        },
        error: function(xhr, status, error) {
            console.error(xhr.responseText);
            console.error('Lỗi từ server:', error); 
            alert('Đã xảy ra lỗi khi gửi bình luận. Vui lòng thử lại sau.');
        }
    });
});




function loadComments() {
    $.ajax({
         url: './view/comment/load_comment.php',
       method: 'POST',
       
        data: {
            article_id: <?=$article_id?>
        },
        success: function(response) {
            $("#comment-list").html(response);
        },
        error: function(xhr, status, error) {
            console.error(xhr.responseText);
            alert('Đã xảy ra lỗi khi tải danh sách bình luận.');
        }
    });
}

</script>


<?php
ob_end_flush();
?>
</body>
</html>
