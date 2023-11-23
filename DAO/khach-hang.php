<?php
require_once 'pdo.php';

function customer_insert($user,$filename, $password, $email){
    $sql = "INSERT INTO user(user_name, email,avatar,user_phone, user_password,role_id) VALUES (?, ?, ?,?)";
    pdo_execute($sql, $user,$filename, $password, $email);
}
function user_insert_admin($user, $email, $avatar, $phone,$password ,$role_id){
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO user(user_name, email,avatar,user_phone, user_password,role_id) VALUES ( ?, ?,?,?,?,?)";
    pdo_execute($sql, $user, $email, $avatar, $phone,$hashed_password,$role_id);
}
function customer_forgot($user_email, $new_password){
    $sql = "UPDATE customer SET password = ? WHERE email = ?";
    pdo_execute($sql, $new_password, $user_email);
}



function user_update($id, $user, $password, $email, $img, $phone, $role_id) {
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    if ($img!="") {
        $sql = "UPDATE user SET user_name='".$user."', user_password='".$hashed_password."', email='".$email."', avatar='".$img."', user_phone='".$phone."', role_id='".$role_id."' WHERE user_id=".$id;
    }else
    {
        $sql = "UPDATE user SET user_name='".$user."', user_password='".$hashed_password."', email='".$email."', user_phone='".$phone."', role_id='".$role_id."' WHERE user_id=".$id;
    }
    
    pdo_execute($sql);
    
}
function customer_update_user($id, $user, $filename, $password, $email, $address, $phone) {
    $sql = "UPDATE customer SET user='".$user."', img='".$filename."', password='".$password."', email='".$email."', address='".$address."', phone='".$phone."' WHERE id=".$id;
    pdo_execute($sql, $id, $user, $filename, $password, $email, $address, $phone);
}



function customer_delete($id){
    $sql = "DELETE FROM user  WHERE user_id=?";
    if(is_array($id)){
        foreach ($id as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $id);
    }
}

function user_select_all(){
    $sql = "SELECT * FROM user";
    return pdo_query($sql);
}

function customer_select_by_id($user,$password){
    $sql = "SELECT * FROM customer WHERE user='".$user."' AND password='".$password."'";
    return pdo_query_one($sql,$user,$password );
}
function customer_select_by_id_admin($id){
    $sql = "SELECT * FROM user WHERE user_id= ".$id;
    return pdo_query_one($sql,$id);
}
function customer_check_by_email($user_email){
    $sql = "SELECT * FROM customer WHERE email='".$user_email."'";
    return pdo_query_one($sql,$user_email);
}

function customer_check_by_user($user){
    $sql = "SELECT * FROM customer WHERE user='".$user."'";
    return pdo_query_one($sql,$user);
}

function exist_param($fieldname): bool
{
    return array_key_exists($fieldname, $_REQUEST);
}

//luu file upload vao thu muc
function save_file($fieldname, $target_dir)
{
    $file_upload = $_FILES[$fieldname];
    $file_name = basename($file_upload['name']);
    $target_path = $target_dir . $file_name;
    move_uploaded_file($file_upload['tmp_name'], $target_path);
    return $file_name;
}

function check_kh($ten_kh, $mat_khau)
{
    $sql = "select * from khach_hang where ten_kh='" . $ten_kh . "' and mat_khau='" . $mat_khau . "' ";
    $check_kh = pdo_query_one($sql);
    return $check_kh;
}
    