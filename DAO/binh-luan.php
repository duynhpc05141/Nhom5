<?php
require_once 'pdo.php';

function comment_insert($content,$user_id,$product_id,$date){
    $sql = "INSERT INTO comment(content,user_id,product_id,date) VALUES (?,?,?,?)";
    pdo_execute($sql,$content,$user_id,$product_id,$date);
}

function binh_luan_update($ma_bl, $ma_kh, $ma_hh, $noi_dung, $ngay_bl){
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



function comment_select_all()
{
    $sql = "
    SELECT hh.article_id as article_id, hh.article_name as article_name, COUNT(*) as so_luong, MIN(bl.created_at) as cu_nhat, MAX(bl.created_at) as moi_nhat
    FROM comment bl
    JOIN article hh ON hh.article_id = bl.article_id
    GROUP BY  hh.article_id, hh.article_name";
    return pdo_query($sql);
}

// binh-luan.php
function comment_select_paged($product_id, $offset, $commentsPerPage) {
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