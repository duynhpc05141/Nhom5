<?php
require_once 'pdo.php';

function comment_insert($user_id, $article_id, $comment_content)
{
    $sql = "INSERT INTO comment(user_id,article_id,comment_content) VALUES (?,?,?)";
    pdo_execute($sql, $user_id, $article_id, $comment_content);
}
function reply_comment($user_id, $article_id, $comment_content, $parent_comment_id)
{
    $sql = "INSERT INTO comment(user_id, article_id, comment_content, parent_comment_id) VALUES (?,?, ?, ?)";
    pdo_execute($sql, $user_id, $article_id, $comment_content, $parent_comment_id);
}

function getRepliesForComment($comment_id)
{
    $sql = "SELECT c.*, cu.user_name AS reply_user_name, cu.avatar AS reply_user_avatar
            FROM comment c
            INNER JOIN user cu ON cu.user_id = c.user_id
            WHERE c.parent_comment_id = " . $comment_id;
    $replies = pdo_query($sql);
    return $replies;
}

function binh_luan_update($ma_bl, $ma_kh, $ma_hh, $noi_dung, $ngay_bl)
{
    $sql = "UPDATE binh_luan SET ma_kh=?,ma_hh=?,noi_dung=?,ngay_bl=? WHERE ma_bl=?";
    pdo_execute($sql, $ma_kh, $ma_hh, $noi_dung, $ngay_bl, $ma_bl);
}

function comment_delete($comment_id)
{
    $sql = "delete from comment where comment_id=? ";
    if (is_array($comment_id)) {
        foreach ($comment_id as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $comment_id);
    }
}

function comment_select_all_1($article_id)
{
    $sql = "SELECT c.*, cu.user_name, cu.avatar
    FROM comment c
    INNER JOIN user cu ON cu.user_id = c.user_id
    WHERE c.parent_comment_id = 0";

    if ($article_id > 0) {
        $sql .= " AND c.article_id = '" . $article_id . "'";
    }

    $sql .= " ORDER BY c.comment_id DESC";

    $listComment = pdo_query($sql);
    return $listComment;
}


function comment_select_all()
{
    $sql = "
    SELECT ar.article_id as article_id, ar.article_name as article_name, COUNT(*) as so_luong, MIN(bl.created_at) as cu_nhat, MAX(bl.created_at) as moi_nhat
    FROM comment bl
    JOIN article ar ON ar.article_id = bl.article_id
    GROUP BY  ar.article_id, ar.article_name";
    return pdo_query($sql);
}

function count_comment($id)
{
    $sql = "SELECT COUNT(comment_id) as comments FROM comment WHERE article_id = " . $id;
    $result = pdo_query($sql);
    $comment = $result[0]['comments'];
    return $comment;
}
function count_comment_all()
{
    $sql = "SELECT COUNT(comment_id) as comments FROM comment ";
    $result = pdo_query($sql);
    $comment = $result[0]['comments'];
    return $comment;
}

// binh-luan.php
function comment_select_paged($product_id, $offset, $commentsPerPage)
{
    // Kết nối CSDL và thực hiện truy vấn để lấy danh sách bình luận
    include "pdo.php"; // Đảm bảo file pdo.php được bao gồm và có kết nối đến CSDL

    // Thực hiện truy vấn SQL để lấy danh sách bình luận với giới hạn và phân trang
    $query = "SELECT * FROM comment WHERE product_id = :product_id LIMIT :offset, :commentsPerPage";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':product_id', $product_id, PDO::PARAM_INT);
    $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
    $stmt->bindParam(':commentsPerPage', $commentsPerPage, PDO::PARAM_INT);
    $stmt->execute();

    // Trả về danh sách bình luận
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
// select binh luan theo san pham
function comment_select_by_article($article_id)
{
    $sql = "SELECT b.*, h.article_name, kh.user_name from comment b join article h on h.article_id=b.article_id join user kh on kh.user_id=b.user_id where b.article_id='" . $article_id . "' order by created_at DESC ";
    return pdo_query($sql);
}



// function binh_luan_select_by_id($ma_bl){
//     $sql = "SELECT * FROM binh_luan WHERE ma_bl=?";
//     return pdo_query_one($sql, $ma_bl);
// }

// function binh_luan_exist($ma_bl){
//     $sql = "SELECT count(*) FROM binh_luan WHERE ma_bl=?";
//     return pdo_query_value($sql, $ma_bl) > 0;
// }
// //-------------------------------//
// function binh_luan_select_by_hang_hoa($ma_hh){
//     $sql = "SELECT b.*, h.ten_hh FROM binh_luan b JOIN hang_hoa h ON h.ma_hh=b.ma_hh WHERE b.ma_hh=? ORDER BY ngay_bl DESC";
//     return pdo_query($sql, $ma_hh);
// }