<?php
require_once 'pdo.php';

function article_get_image_paths_by_id($id)
{
    try {
        $sql = "SELECT img FROM article WHERE article_id = :id";

        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result && isset($result['img'])) {
            return $result['img']; // Trả về chuỗi đường dẫn ảnh
        }

        return ''; // Trả về chuỗi rỗng nếu không tìm thấy hình ảnh
    } catch (PDOException $e) {
        // Xử lý lỗi kết nối hoặc truy vấn
        echo "Connection failed: " . $e->getMessage();
        return ''; // Trả về chuỗi rỗng trong trường hợp lỗi
    }
}



function article_insert_from_editor($name, $content, $filename, $category_id)
{
    $sql = "INSERT INTO article(article_name, article_content, img, category_id) VALUES (?,?,?,?)";
    pdo_execute($sql, $name, $content, $filename, $category_id);
}



function article_update($id, $name, $content, $filename, $category_id)
{
    if ($filename !== "") {
        $sql = "UPDATE article SET article_name=?, article_content=?, img=?, category_id=?, updated_at=NOW() WHERE article_id=?";
        pdo_execute($sql, $name, $content, $filename, $category_id, $id);
    } else {
        $sql = "UPDATE article SET article_name=?, article_content=?, category_id=?, updated_at=NOW() WHERE article_id=?";
        pdo_execute($sql, $name, $content, $category_id, $id);
    }
}


function article_delete($id)
{
    $sql = "DELETE FROM article WHERE  article_id=?";
    if (is_array($id)) {
        foreach ($id as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $id);
    }
}

function article_select_all( $category_id)
{
    $sql = "SELECT * FROM article WHERE 1";

  

    if ($category_id > 0) {
        $sql .= " AND category_id =  '" . $category_id . "'";
    }

    $sql .= " ORDER BY category_id DESC";
    $listArticle = pdo_query($sql);
    return $listArticle;
}
function article_select_all_home()
{
    $sql = "SELECT * FROM article WHERE 1 ORDER BY id desc limit 0,9";
    $listProduct = pdo_query($sql);
    return $listProduct;
}

function article_select_by_id($id)
{
    $sql = "SELECT * FROM article WHERE article_id=?";
    return pdo_query_one($sql, $id);
}
function article_name_select_by_id($category_id)
{
    if ($category_id > 0) {
        $sql = "SELECT * FROM category WHERE category_id=" . $category_id;
        $category = pdo_query_one($sql);
        extract($category);
        return $name;
    } else {
        return "";
    }
}

function article_exist($id)
{
    $sql = "SELECT count(*) FROM article WHERE id=?";
    return pdo_query_value($sql, $id) > 0;
}

function article_tang_so_luot_xem($id)
{
    $sql = "UPDATE article SET so_luot_xem = so_luot_xem + 1 WHERE id=?";
    pdo_execute($sql, $id);
}

function product_select_top10()
{
    $sql = "SELECT * FROM product WHERE view > 0 ORDER BY view DESC LIMIT 0, 10";
    return pdo_query($sql);
}

function product_select_dac_biet()
{
    $sql = "SELECT * FROM product WHERE dac_biet=1";
    return pdo_query($sql);
}

function product_select_by_loai($id, $category_id)
{
    $sql = "SELECT * FROM product WHERE category_id=" . $category_id . " AND  id <>" . $id;
    $listProduct = pdo_query($sql);
    return $listProduct;
}

function product_select_keyword($keyword)
{
    $sql = "SELECT * FROM product hh "
        . " JOIN loai lo ON lo.ma_loai=hh.ma_loai "
        . " WHERE ten_hh LIKE ? OR ten_loai LIKE ?";
    return pdo_query($sql, '%' . $keyword . '%', '%' . $keyword . '%');
}
