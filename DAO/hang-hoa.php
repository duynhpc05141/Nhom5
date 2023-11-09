<?php
require_once 'pdo.php';

function product_insert($namePro, $price, $filename, $description, $category_id){
    $sql = "INSERT INTO product(name,price,img,description,category_id) VALUES (?,?,?,?,?)";
    pdo_execute($sql, $namePro, $price, $filename, $description, $category_id);
}

function product_update($id,$namePro,$price,$filename,$description,$category_id) {
    if ($filename != "") {
        $sql = "UPDATE product SET name=?, price=?, img=?, description=?, category_id=? WHERE id=?";
        pdo_execute($sql, $namePro, $price, $filename, $description, $category_id, $id);
    } else {
        $sql = "UPDATE product SET name=?, price=?, description=?, category_id=? WHERE id=?";
        pdo_execute($sql, $namePro, $price, $description, $category_id, $id);
    }
}


function product_delete($id){
    $sql = "DELETE FROM product WHERE  id=?";
    if(is_array($id)){
        foreach ($id as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $id);
    }
}

function product_select_all($keyword, $category_id) {
    $sql = "SELECT * FROM product WHERE 1";

    if ($keyword!="") {
        $sql .= " AND name LIKE '%" . $keyword . "%'";
    }

    if ($category_id > 0) {
        $sql .= " AND category_id =  '".$category_id."'";
    }

    $sql .= " ORDER BY id DESC";
$listProduct=pdo_query($sql);
    return $listProduct;
    
}
function product_select_all_home() {
    $sql = "SELECT * FROM product WHERE 1 ORDER BY id desc limit 0,9";
$listProduct=pdo_query($sql);
    return $listProduct;
}

function product_select_by_id($id){
    $sql = "SELECT * FROM product WHERE id=?";
    return pdo_query_one($sql, $id);
}
function product_name_select_by_id($category_id){
    if($category_id>0){
      $sql = "SELECT * FROM category WHERE id=".$category_id;
    $category=pdo_query_one($sql);
    extract($category);
    return $name;
     
    }else{
        return "";
    }
    
}

function product_exist($id){
    $sql = "SELECT count(*) FROM product WHERE id=?";
    return pdo_query_value($sql, $id) > 0;
}

function product_tang_so_luot_xem($id){
    $sql = "UPDATE product SET so_luot_xem = so_luot_xem + 1 WHERE id=?";
    pdo_execute($sql, $id);
}

function product_select_top10(){
    $sql = "SELECT * FROM product WHERE view > 0 ORDER BY view DESC LIMIT 0, 10";
    return pdo_query($sql);
}

function product_select_dac_biet(){
    $sql = "SELECT * FROM product WHERE dac_biet=1";
    return pdo_query($sql);
}

function product_select_by_loai($id,$category_id){
    $sql = "SELECT * FROM product WHERE category_id=".$category_id." AND  id <>".$id;
    $listProduct=pdo_query($sql);
    return $listProduct;
}

function product_select_keyword($keyword){
    $sql = "SELECT * FROM product hh "
            . " JOIN loai lo ON lo.ma_loai=hh.ma_loai "
            . " WHERE ten_hh LIKE ? OR ten_loai LIKE ?";
    return pdo_query($sql, '%'.$keyword.'%', '%'.$keyword.'%');
}

