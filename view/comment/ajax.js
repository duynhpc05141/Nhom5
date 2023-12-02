$(document).ready(function() {
   
    $(".form-reply").submit(function(event) {
        let commentContent = $(this).find("textarea[name='comment_content']").val().trim();
        if (commentContent === "") {
            event.preventDefault();
            showToast("Nội dung bình luận không được trống.");
        }
    });

 
   
$(".reply-btn").on('click', '.btn-reply', function() {
    let formReply = $(this).closest('.comment-box').find('.reply-form');
    formReply.toggle();
});


$(".reply-btn").on('click', '.btn-reply-2', function() {
    let formReply = $(this).closest('.comment-box').find('.reply-form');
    formReply.toggle();
});


   
    $("#comments-container").on('submit', '.form-reply', function(e) {
        e.preventDefault();
        let commentForm = $(this);
        let comment_content = commentForm.find('textarea[name="comment_content"]').val();
        let parent_comment_id = commentForm.find('input[name="parent-comment-id"]').val();
        let article_id = commentForm.find('input[name="article_id"]').val();
        sendReply(comment_content, parent_comment_id, article_id, commentForm);
    });

 
    function sendReply(comment_content, parent_comment_id, article_id, commentForm) {
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
                commentForm.find("textarea[name='comment_content']").val(''); // Xóa nội dung textarea
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
                alert('Đã xảy ra lỗi khi gửi phản hồi. Vui lòng thử lại sau.');
            }
        });
    }

    $("#comments-container").on('click', '.delete-comment', function(e) {
        e.preventDefault();
        let commentId = $(this).data('comment-id');
        deleteComment(commentId);
    });
    function deleteComment(commentId) {
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
    }
   
    function loadComments() {
        let articleId = $("#comments-container").data("article-id");
        $.ajax({
            url: './view/comment/comments_display.php',
            method: 'POST',
            data: {
                article_id: articleId
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
    

 
    function showToast(message) {
        Toastify({
            text: message,
            duration: 3000,
            close: true,
            gravity: "top",
            position: "center",
            backgroundColor: "#fc3f00",
        }).showToast();
    }
});
