<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/55a9fa42b8.js" crossorigin="anonymous"></script>

<style>
    * {
        margin: 0;
        padding: 0;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }

    a {
        color: #03658c;
        text-decoration: none;
    }

    ul {
        list-style-type: none;
    }

    body {
        font-family: 'Roboto', Arial, Helvetica, Sans-serif, Verdana;

    }

    /** ====================
 * Comments List 
 =======================*/
    .comments-container {
        margin: 60px auto 15px;
        width: 768px;
    }

    .comments-container h1 {
        font-size: 36px;
        color: #283035;
        font-weight: 400;
    }

    .comments-container h1 a {
        font-size: 18px;
        font-weight: 700;
    }

    .comments-list {
        margin-top: 30px;
        position: relative;
    }

    /**
 * Comments - details
 -----------------------*/
    .comments-list:before {
        content: '';
        width: 2px;
        height: 100%;
        background: #c7cacb;
        position: absolute;
        left: 32px;
        top: 0;
    }

    .comments-list:after {
        content: '';
        position: absolute;
        background: #c7cacb;
        bottom: 0;
        left: 27px;
        width: 7px;
        height: 7px;
        border: 3px solid #dee1e3;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        border-radius: 50%;
    }

    .reply-list:before,
    .reply-list:after {
        display: none;
    }

    .reply-list li:before {
        content: '';
        width: 60px;
        height: 2px;
        background: #c7cacb;
        position: absolute;
        top: 25px;
        left: -55px;
    }


    .comments-list li {
        margin-bottom: 15px;
        display: block;
        position: relative;
    }

    .comments-list li:after {
        content: '';
        display: block;
        clear: both;
        height: 0;
        width: 0;
    }

    .reply-list {
        padding-left: 88px;
        clear: both;
        margin-top: 15px;
    }

    /**
 * Profile Avatar - ---------------------------*/
    .comments-list .comment-avatar {
        width: 65px;
        height: 65px;
        position: relative;
        z-index: 99;
        float: left;
        border: 3px solid #FFF;
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius: 4px;
        -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
        -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
        overflow: hidden;
    }

    .comments-list .comment-avatar img {
        width: 100%;
        height: 100%;
    }

    .reply-list .comment-avatar {
        width: 50px;
        height: 50px;
    }

    .comment-main-level:after {
        content: '';
        width: 0;
        height: 0;
        display: block;
        clear: both;
    }

    /**
 * -------------- Comment Box ---------------------------*/
    .comments-list .comment-box {
        width: 680px;
        float: right;
        position: relative;
        -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.15);
        -moz-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.15);
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.15);
    }

    .comments-list .comment-box:before,
    .comments-list .comment-box:after {
        content: '';
        height: 0;
        width: 0;
        position: absolute;
        display: block;
        border-width: 10px 12px 10px 0;
        border-style: solid;
        border-color: transparent #FCFCFC;
        top: 8px;
        left: -11px;
    }

    .comments-list .comment-box:before {
        border-width: 11px 13px 11px 0;
        border-color: transparent rgba(0, 0, 0, 0.05);
        left: -12px;
    }

    .reply-list .comment-box {
        width: 610px;
    }

    .comment-box .comment-head {
        background: #FCFCFC;
        padding: 10px 12px;
        border-bottom: 1px solid #ffdede;
        overflow: hidden;
        -webkit-border-radius: 4px 4px 0 0;
        -moz-border-radius: 4px 4px 0 0;
        border-radius: 4px 4px 0 0;
    }

    .comment-box .comment-head i {
        float: right;
        margin-left: 14px;
        position: relative;
        top: 2px;
        color: #A6A6A6;
        cursor: pointer;
        -webkit-transition: color 0.3s ease;
        -o-transition: color 0.3s ease;
        transition: color 0.3s ease;
    }

    .comment-box .comment-head i:hover {
        color: #03658c;
    }

    .comment-box .comment-name {
        color: #283035;
        font-size: 14px;
        font-weight: 700;
        float: left;
        margin-right: 10px;
    }

    .comment-box .comment-name a {
        color: #283035;
    }

    .comment-box .comment-head span {
        float: left;
        color: #999;
        font-size: 13px;
        position: relative;
        top: 1px;
    }

    .comment-box .comment-content {
        background: #FFF;
        padding: 12px;
        font-size: 15px;
        color: #595959;
        -webkit-border-radius: 0 0 4px 4px;
        -moz-border-radius: 0 0 4px 4px;
        border-radius: 0 0 4px 4px;
    }

    .comment-box .comment-name.by-author,
    .comment-box .comment-name.by-author a {
        color: #03658c;
    }

    .comment-box .comment-name.by-author:after {
        content: 'author';
        background: #03658c;
        color: #FFF;
        font-size: 12px;
        padding: 3px 5px;
        font-weight: 700;
        margin-left: 10px;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
    }

    /** =====================
 * Responsive
 ========================*/
    @media only screen and (max-width: 766px) {
        .comments-container {
            width: 480px;
        }

        .comments-list .comment-box {
            width: 390px;
        }

        .reply-list .comment-box {
            width: 320px;
        }
    }
</style>
<?php
include "../../DAO/pdo.php";
include "../../DAO/binh-luan.php";
include "../../DAO/article.php";
$article_id = $_REQUEST['article_id'];
$listComment = comment_select_all_1($article_id);

foreach ($listComment as $item) {
    extract($item);
?>
    <!-- Main Container -->
    <div class="comments-container">
        

        <ul id="comments-list" class="comments-list">
            <li>
                <div class="comment-main-level">
                    <!-- Avatar -->
                    <div class="comment-avatar"> <img src="../img/<?= $item['avatar'] ?>" alt=""></div>
                    <!-- Comments  -->
                    <div class="comment-box">
                        <div class="comment-head">
                            <h6 class="comment-name by-author"><a href="#"><?= $item['user_name'] ?></a></h6>
                            <span><?= $created_at ?></span>
                            
                           
                                 <div class="single-comment" id="comment_id">
                                    
                                    <p class="delete-comment" data-comment-id="<?= $comment_id ?>" name="comment_id" style="cursor: pointer;"><i class="fa-solid fa-trash"></i></p>
                                </div>
                                
                        </div>
                        <div class="comment-content">
                            <?= $comment_content ?>
                        </div>
                         <div class="reply-btn">
                                    <a class="btn-reply" data-comment-id="<?= $item['comment_id'] ?>" style="cursor: pointer;font-size: 0.8rem; margin-left: 3.9rem; ">Trả lời</i></a>
                                </div>
                               
                                <div class="reply-form" style="display: none;">
                                    <form class="form-reply" data-comment-id="<?= $item['comment_id'] ?>" method="post">
                                        <textarea class="form-control w-100" name="comment_content" cols="30" rows="3" placeholder="@<?=$item['user_name']?>"></textarea>
                                        <input type="hidden" name="article_id" value="<?= $article_id ?>">
                                        <input type="hidden" name="parent-comment-id" value="<?= $item['comment_id'] ?>">
                                        <input type="submit" class="btn-submit-reply btn-sm mt-1" value="Gửi" name="send" style="background-color: #fc3f00;color: white; border: 1px solid white; ">
                                    </form>
                                </div>
                    </div>
                    
                </div>
                <!-- Comment list -->
                <ul class="comments-list reply-list">
                <?php
                            $replies = getRepliesForComment($comment_id);
                            foreach ($replies as $reply) {
                                extract($reply);
                              
                            ?>
                    <li>
                        <!-- Avatar -->
                        <div class="comment-avatar"><img src="../img/<?= $reply_user_avatar ?>" alt=""></div>
                        <!-- Comment Container -->
                        <div class="comment-box">
                            <div class="comment-head">
                                <h6 class="comment-name"><a href="https://gosnippets.com/"><?=$reply_user_name?></a></h6>
                                <span><?= $created_at ?></span>
                            
                                 <div class="single-comment" id="comment_id">
                                    <p class="delete-comment" data-comment-id="<?= $comment_id ?>" name="comment_id" style="cursor: pointer;"><i class="fa-solid fa-trash"></i></p>
                                </div>
                            </div>
                            <div class="comment-content">
                            <?= $comment_content ?>
                            </div>
                            <div class="reply-btn">
                                    <a class="btn-reply-2" style="cursor: pointer;font-size: 0.8rem; margin-left: 3.9rem; ">Trả lời</i></a>
                                </div>
                               
                                <div class="reply-form" style="display: none;">
                                    <form class="form-reply" data-comment-id="<?= $comment_id ?>" method="post">
                                        <textarea class="form-control w-100" name="comment_content" cols="30" rows="3" placeholder="@<?=$item['user_name']?>"></textarea>
                                        <input type="hidden" name="article_id" value="<?= $article_id ?>">
                                        <input type="hidden" name="parent-comment-id" value="<?= $comment_id ?>">
                                        <input type="submit" class="btn-submit-reply btn-sm mt-1" value="Gửi" name="send" style="background-color: #fc3f00;color: white; border: 1px solid white; ">
                                    </form>
                                </div>
                        </div>
                    </li>

<?}?>
                </ul>
    </div>
<?php } ?>
<!-- ... -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
   $(document).ready(function() {
    $(document).on('click', '.btn-reply', function() {
        console.log('Cliked');
        var formReply = $(this).closest('.comment-box').find('.reply-form');
        formReply.toggle();
    });


});
   $(document).ready(function() {
    $(document).on('click', '.btn-reply-2', function() {
        var formReply = $(this).closest('.comment-box').find('.reply-form');
        formReply.toggle();
    });


});

    $(document).on('submit', '.form-reply', function(e) {
        e.preventDefault();
        var commentForm = $(this);
        var comment_content = commentForm.find('textarea[name="comment_content"]').val();
        var parent_comment_id = commentForm.find('input[name="parent-comment-id"]').val();
        var article_id = commentForm.find('input[name="article_id"]').val();
        $.ajax({
            type: 'POST',
            url: './view/comment/add_reply.php',
            data: {
                comment_content: comment_content,
                parent_comment_id: parent_comment_id,
                article_id: article_id
            },
            success: function(response) {
                loadComments();
                commentForm.hide();
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
                alert('Đã xảy ra lỗi khi gửi phản hồi. Vui lòng thử lại sau.');
            }
        });
    });


    $(document).on('click', '.delete-comment', function(e) {
        e.preventDefault();
        var commentId = $(this).data('comment-id');
        $.ajax({
            type: 'POST',
            url: './view/comment/delete_comment.php',
            data: {
                comment_id: commentId
            },
            success: function(response) {
                $(`#comment-list-${commentId}`).remove();
                loadComments();
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
                alert('Đã xảy ra lỗi khi xóa bình luận. Vui lòng thử lại sau.');
            }
        });
    });


    function loadComments() {
        $.ajax({
            url: './view/comment/load_comment.php',
            method: 'POST',

            data: {
                article_id: <?= $article_id ?>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>