<?php
require_once 'pdo.php';

function customer_insert($user,$filename, $password, $email){
    $sql = "INSERT INTO customer(user,img, password, email) VALUES (?, ?, ?,?)";
    pdo_execute($sql, $user,$filename, $password, $email);
}
function customer_insert_admin($user,$password,$email,$address,$phone,$role_id){
    $sql = "INSERT INTO customer(user, password, email, address, phone, role_id) VALUES ( ?, ?,?,?,?,?)";
    pdo_execute($sql, $user,$password,$email,$address,$phone,$role_id);
}
function customer_forgot($user_email, $new_password){
    $sql = "UPDATE customer SET password = ? WHERE email = ?";
    pdo_execute($sql, $new_password, $user_email);
}



function customer_update($id, $user,$password, $email, $address, $phone, $role_id) {
    
        $sql = "UPDATE customer SET user='".$user."', password='".$password."', email='".$email."', address='".$address."', phone='".$phone."', role_id='".$role_id."' WHERE id=".$id;
        pdo_execute($sql,$id, $user, $password, $email, $address, $phone, $role_id);
    
}
function customer_update_user($id, $user, $filename, $password, $email, $address, $phone) {
    $sql = "UPDATE customer SET user='".$user."', img='".$filename."', password='".$password."', email='".$email."', address='".$address."', phone='".$phone."' WHERE id=".$id;
    pdo_execute($sql, $id, $user, $filename, $password, $email, $address, $phone);
}



function customer_delete($id){
    $sql = "DELETE FROM customer  WHERE id=?";
    if(is_array($id)){
        foreach ($id as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $id);
    }
}

function customer_select_all(){
    $sql = "SELECT * FROM customer";
    return pdo_query($sql);
}

function customer_select_by_id($user,$password){
    $sql = "SELECT * FROM customer WHERE user='".$user."' AND password='".$password."'";
    return pdo_query_one($sql,$user,$password );
}
function customer_select_by_id_admin($id){
    $sql = "SELECT * FROM customer WHERE id= ".$id;
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


    