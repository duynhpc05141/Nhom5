
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/55a9fa42b8.js" crossorigin="anonymous"></script>
  

<?php
    include "../../DAO/pdo.php";
    include "../../DAO/binh-luan.php";
    include "../../DAO/article.php";
    $article_id = $_REQUEST['article_id'];
    $listComment = comment_select_all_1($article_id);

    foreach ($listComment as $item) {
        extract($item);
    ?>
        <div class="comments-area">
            <div class="comment-list ">
                <div class="single-comment justify-content-between d-flex">
                    <div class="user justify-content-between d-flex">
                        <div class="thumb">
                            <img src="../img/<?= $item['avatar'] ?>" alt="">
                        </div>
                        <div class="desc">
                          
                            <div class="d-flex align-items-center">
                                  <h5><?= $item['user_name'] ?></h5>
                                    <h5><a href="#"></a></h5>
                                    <p class="date"><?= $created_at ?></p>
                                </div>
                            <p class="comment"><?= $comment_content ?></p>
                            <div class="d-flex justify-content-between">
                                
                                <div class="reply-btn">
                                    <a class="btn-reply" style="cursor: pointer;"><i class="fa-solid fa-reply"></i>Trả lời</a>
                                </div>
                               
                                <div class="reply-form" style="display: none;">
                                    <form class="form-reply" data-comment-id="<?= $comment_id ?>" method="post">
                                        <textarea class="form-control w-100" name="comment_content" cols="30" rows="3" placeholder="@<?=$item['user_name']?>"></textarea>
                                        <input type="hidden" name="article_id" value="<?= $article_id ?>">
                                        <input type="hidden" name="parent-comment-id" value="<?= $comment_id ?>">
                                        <input type="submit" class="btn-submit-reply btn-sm mt-1" value="Gửi" name="send" style="background-color: #fc3f00;color: white; border: 1px solid white; ">
                                    </form>
                                </div>
                                 <div class="single-comment" id="comment_id">
                                    <p class="delete-comment" data-comment-id="<?= $comment_id ?>" name="comment_id" style="cursor: pointer;"><i class="fa-solid fa-trash"></i></p>
                                </div>
                            </div>
                            <?php
                            $replies = getRepliesForComment($comment_id);
                            foreach ($replies as $reply) {
                                extract($reply);
                              
                            ?>
                            <div class="single-comment justify-content-between d-flex ">
                                <div class="thumb">
                                    <img src="../img/<?= $reply_user_avatar ?>" alt="">
                                </div>
                                <div class="desc">
                                    <h6><?=$reply_user_name?></h6>
                                    <p class="comment"><?= $comment_content ?></p>
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <h5><a href="#"></a></h5>
                                            <p class="date"><?= $created_at ?></p>
                                        </div>
                                        <div class="reply-btn">
                                            <span class="btn-reply" style="cursor: pointer;"><i class="fa-solid fa-reply"></i>Trả lời</span>
                                        </div>
                                        <div class="reply-form" style="display: none;">
                                            <form class="form-reply" data-comment-id="<?= $comment_id ?>" method="post">
                                                <textarea class="form-control w-100" name="comment_content" cols="30" rows="3" placeholder="@<?=$item['user_name']?>"></textarea>
                                                <input type="hidden" name="article_id" value="<?= $article_id ?>">
                                                <input type="hidden" name="parent-comment-id" value="<?= $comment_id ?>">
                                                <input type="submit" class="btn-submit-reply  btn-sm mt-1" value="Gửi" name="send" style="background-color: #fc3f00;">
                                            </form>
                                        </div>
                                        <div class="single-comment" id="comment_id">
                                            <p class="delete-comment" data-comment-id="<?= $comment_id ?>" name="comment_id" style="cursor: pointer;"><i class="fa-solid fa-trash"></i></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
            <!-- ... -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
            <script>
                $(document).ready(function() {
    $(document).off('click', '.btn-reply').on('click', '.btn-reply', function() {
        console.log("Button reply clicked");
        var parentComment = $(this).closest('.single-comment');
        var formReply = parentComment.find('.reply-form');
        formReply.toggle();
    })});

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
         

