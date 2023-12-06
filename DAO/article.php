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
            return $result['img'];
        }
        
        return ''; 
    } catch (PDOException $e) {
    
        echo "Connection failed: " . $e->getMessage();
        return ''; 
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
    $sql = "SELECT article.*, category.category_name 
    FROM article 
    JOIN category ON article.category_id = category.category_id LIMIT 3";
    $listArticle = pdo_query($sql);
    return $listArticle;
}

function article_select_by_id($id)
{
    $sql = "SELECT * FROM article WHERE article_id=?";
    return pdo_query_one($sql, $id);
}


function article_select($keyword) {
    $sql = "SELECT * FROM article WHERE 1";

    if ($keyword!="") {
        $sql .= " AND article_name LIKE '%" . $keyword . "%'";
    }

   

    $sql .= " ORDER BY article_id DESC";
$listArticle=pdo_query($sql);
    return $listArticle;
    
}
function article_name_select_by_id($category_id)
{
    if ($category_id > 0) {
        $sql = "SELECT * FROM category WHERE category_id=" . $category_id;
        $category = pdo_query_one($sql);
        extract($category);
        return $category_name;
    } else {
        return "";
    }
}

function article_exist()
{
    $sql = "SELECT count(*) FROM article";
    return pdo_query_value($sql);
}

function article_count_view($id)
{
    $sql = "UPDATE article SET view = view + 1 WHERE article_id=?";
    pdo_execute($sql, $id);
}
function article_count_avg_view_all()
{
    $sql = "SELECT AVG(view) AS average_view FROM article";
    return pdo_query_value($sql);
}


function article_select_top10()
{
    $sql = "SELECT a.*, c.category_name 
            FROM article a
            LEFT JOIN category c ON a.category_id = c.category_id
            WHERE a.view > 0 
            ORDER BY a.view DESC 
            LIMIT 0, 5";
    return pdo_query($sql);
}

function latest_article()
{
    $sql = "SELECT a.*, c.category_name 
            FROM article a
            LEFT JOIN category c ON a.category_id = c.category_id
            ORDER BY a.created_at DESC 
            LIMIT 0, 8";
    return pdo_query($sql);
}


function product_select_dac_biet()
{
    $sql = "SELECT * FROM product WHERE dac_biet=1";
    return pdo_query($sql);
}

function  article_select_by_loai($id, $category_id)
{
     $sql = "SELECT * FROM article WHERE category_id=".$category_id." AND  article_id <>".$id;
    $listarticle = pdo_query($sql);
    return $listarticle;
}

function article_select_keyword($keyword)
{
    $sql = "SELECT * FROM article hh "
        . " JOIN loai lo ON lo.ma_loai=hh.ma_loai "
        . " WHERE ten_hh LIKE ? OR ten_loai LIKE ?";
    return pdo_query($sql, '%' . $keyword . '%', '%' . $keyword . '%');
}
