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

function user_insert_user($user, $email, $avatar, $phone,$password ,$role_id){
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO user(user_name, email,avatar,user_phone, user_password,role_id) VALUES ( ?, ?,?,?,?,?)";
    pdo_execute($sql, $user, $email, $avatar, $phone,$hashed_password,$role_id);
}
function customer_forgot($user_email, $new_password){
    $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
    $sql = "UPDATE user SET user_password = ? WHERE email = ?";
    pdo_execute($sql, $hashed_password, $user_email);
}



function user_update_admin($id, $user,  $email, $img, $phone, $role_id) {

    if ($img!="") {
        $sql = "UPDATE user SET user_name='".$user."',  email='".$email."', avatar='".$img."', user_phone='".$phone."', role_id='".$role_id."' WHERE user_id=".$id;
    }else
    {
        $sql = "UPDATE user SET user_name='".$user."',  email='".$email."', user_phone='".$phone."', role_id='".$role_id."' WHERE user_id=".$id;
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
    $sql = "SELECT * FROM user WHERE email='".$user_email."'";
    return pdo_query_one($sql,$user_email);
}

function customer_check_by_user($user){
    $sql = "SELECT * FROM user WHERE user_name='".$user."'";
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

function check_kh($user)
{
    $sql = "SELECT * FROM user WHERE user_name = ?";
   return pdo_query_one($sql,$user);
    
}
    
function is_username_exists($user, $email)
{
    // Kết nối đến cơ sở dữ liệu 
    $conn = new mysqli("localhost", "root", "mysql", "fastnews");

    // Kiểm tra kết nối
    if ($conn->connect_error) {
        die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
    }

    // Sử dụng câu truy vấn SQL với tham số được bảo vệ để tránh SQL injection
    $query = "SELECT * FROM user WHERE user_name = ? OR email = ?";
    $stmt = $conn->prepare($query);

    // Bảo vệ tham số truy vấn
    $stmt->bind_param("ss", $user, $email);

    $stmt->execute();
    $result = $stmt->get_result();

    // Trả về true nếu có ít nhất một dòng dữ liệu trả về (user_name hoặc email đã tồn tại)
    // Trả về false nếu không có dòng dữ liệu nào trả về (user_name và email chưa tồn tại)
    return $result->num_rows > 0;
}
