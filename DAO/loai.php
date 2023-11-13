<?php
require_once 'pdo.php';

/**
 * Thêm loại mới
 * @param String $ten_loai là tên loại
 * @throws PDOException lỗi thêm mới
 */
function loai_insert($name){
    $sql = "INSERT INTO category(category_name) VALUES(?)";
    pdo_execute($sql, $name);
}
/**
 * Cập nhật tên loại
 * @param int $ma_loai là mã loại cần cập nhật
 * @param String $name là tên loại mới
 * @throws PDOException lỗi cập nhật
 */
    function loai_update($id, $name){
    $sql = "UPDATE category SET category_name=? WHERE category_id=?";
    pdo_execute($sql, $name, $id);
}
/**
 * Xóa một hoặc nhiều loại
 * @param mix $ma_loai là mã loại hoặc mảng mã loại
 * @throws PDOException lỗi xóa
 */
function loai_delete($id){
    $sql = "DELETE FROM category WHERE category_id=?";
    if(is_array($id)){
        foreach ($id as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $id);
    }
}
/**
 * Truy vấn tất cả các loại
 * @return array mảng loại truy vấn được
 * @throws PDOException lỗi truy vấn
 */
function loai_select_all(){
    $sql = "SELECT * FROM category";
    $list_loai = pdo_query($sql);
    return $list_loai;
}
/**
 * Truy vấn một loại theo mã
 * @param int $ma_loai là mã loại cần truy vấn
 * @return array mảng chứa thông tin của một loại
 * @throws PDOException lỗi truy vấn
 */
function loai_select_by_id($id){
    $sql = "SELECT * FROM category WHERE category_id=".$id;
    $edit = pdo_query_one($sql);
    return $edit;
}
/**
 * Kiểm tra sự tồn tại của một loại
 * @param int $ma_loai là mã loại cần kiểm tra
 * @return boolean có tồn tại hay không
 * @throws PDOException lỗi truy vấn
 */
function loai_exist($id){
    $sql = "SELECT count(*) FROM category WHERE id=?";
    return pdo_query_value($sql, $id) > 0;
}

