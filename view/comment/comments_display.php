<link rel="stylesheet" href="./view/comment/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<style>
    .delete-comment{
        outline: none;
        background: transparent;
        border: none;
    }
</style>
<?php
session_start();
include "../../DAO/pdo.php";
include "../../DAO/binh-luan.php";
include "../../DAO/article.php";
$article_id = $_REQUEST['article_id'];
$listComment = comment_select_all_1($article_id);

foreach ($listComment as $item) {
    extract($item);
    $currentUser = null;
    if (isset($_SESSION['user_name'])) {
        $currentUser = $_SESSION['user_name']['user_id'];
    }


    $isCurrentUser = ($currentUser == $user_id);
?>
    <!-- Main Container -->
    <div id="comments-container" class="comments-container" data-article-id="<?= $article_id ?>">

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
                                <?php if ($isCurrentUser) { ?>
                                    <button class="delete-comment" data-comment-id="<?= $comment_id ?>" name="comment_id" style="cursor: pointer;"><i class="fa-solid fa-trash"></i></button>
                                <?php } ?>
                            </div>

                        </div>
                        <div class="comment-content">
                            <?= $comment_content ?>
                        </div>

                        <?php if (!$isCurrentUser) { ?>
                            <div class="reply-btn">
                                <a class="btn-reply" data-comment-id="<?= $item['comment_id'] ?>" style="cursor: pointer;font-size: 0.8rem; margin-left: 3.9rem; ">Trả lời</a>
                            </div>

                            <div class="reply-form" style="display: none;">
                                <form class="form-reply" data-comment-id="<?= $item['comment_id'] ?>" method="post">
                                    <textarea class="form-control w-100" name="comment_content" id="comment_content" cols="30" rows="3" placeholder="@<?= $item['user_name'] ?>"></textarea>
                                    <input type="hidden" name="article_id" value="<?= $article_id ?>">
                                    <input type="hidden" name="parent-comment-id" value="<?= $item['comment_id'] ?>">
                                    <input type="submit" class="btn-submit-reply btn-sm mt-1" value="Gửi" name="send" style="background-color: #fc3f00;color: white; border: 1px solid white; ">
                                </form>
                            </div>
                        <?php } ?>
                    </div>

                </div>
                <!-- Comment list -->
                <ul class="comments-list reply-list">
                    <?php
                    $replies = getRepliesForComment($comment_id);
                    foreach ($replies as $reply) {
                        extract($reply);
                        $currentUser = null;
                        if (isset($_SESSION['user_name'])) {
                            $currentUser = $_SESSION['user_name']['user_id'];
                        }
                        $isCurrentUser = ($currentUser == $user_id);
                    ?>
                        <li>
                            <!-- Avatar -->
                            <div class="comment-avatar"><img src="../img/<?= $reply_user_avatar ?>" alt=""></div>
                            <!-- Comment Container -->
                            <div class="comment-box">
                                <div class="comment-head">
                                    <h6 class="comment-name"><a href="https://gosnippets.com/"><?= $reply_user_name ?></a></h6>
                                    <span><?= $created_at ?></span>

                                    <div class="single-comment" id="comment_id">
                                        <?php if ($isCurrentUser) { ?>
                                            <button class="delete-comment" data-comment-id="<?= $comment_id ?>" name="comment_id" style="cursor: pointer;"><i class="fa-solid fa-trash"></i></button>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="comment-content">
                                    <?= $comment_content ?>
                                </div>
                                <?php if (!$isCurrentUser) { ?>
                                    <div class="reply-btn">
                                        <a class="btn-reply-2" data-comment-id="<?=$comment_id ?>" style="cursor: pointer;font-size: 0.8rem; margin-left: 3.9rem; ">Trả lời</a>
                                    </div>

                                    <div class="reply-form" style="display: none;">
                                        <form class="form-reply" data-comment-id="<?= $comment_id ?>" method="post">
                                            <textarea class="form-control w-100" name="comment_content" cols="30" rows="3" placeholder="@<?= $item['user_name'] ?>"></textarea>
                                            <input type="hidden" name="article_id" value="<?= $article_id ?>">
                                            <input type="hidden" name="parent-comment-id" value="<?= $comment_id ?>">
                                            <input type="submit" class="btn-submit-reply btn-sm mt-1" value="Gửi" name="send" style="background-color: #fc3f00;color: white; border: 1px solid white; ">
                                        </form>
                                    </div>
                                <?php } ?>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
            </li>
        </ul>
    </div>
<?php } ?>
<script src="./view/comment/ajax.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<script src="https://kit.fontawesome.com/55a9fa42b8.js" crossorigin="anonymous"></script>