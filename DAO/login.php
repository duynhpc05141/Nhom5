<?php 

function check_user($user)
{
    $sql = "select * from user where user_name='" . $user . "' ";
    $check_user = pdo_query_one($sql);
    return $check_user;
}



function check_admin($user)
{
    $sql = "select * from user where user_name='" . $user . "'and role_id=1 ";
    $check_admin = pdo_query_one($sql);
    return $check_admin;
}

function fetch_hashed_password_from_database($user) {
    
    // Kết nối đến cơ sở dữ liệu 
    $conn = new mysqli("localhost", "root", "mysql", "fastnews");

    // Kiểm tra kết nối
    if ($conn->connect_error) {
        die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
    }

    // Sử dụng câu lệnh chuẩn bị để tránh SQL injection
    $stmt = $conn->prepare("SELECT user_password FROM user WHERE user_name = ?");
    $stmt->bind_param("s", $user);
    $stmt->execute();
    $stmt->bind_result($hashedPassword);

    // Lấy mật khẩu đã băm
    if ($stmt->fetch()) {
        $stmt->close();
        $conn->close();
        return $hashedPassword;
    } else {
        $stmt->close();
        $conn->close();
        return null; // Trả về null nếu không tìm thấy tên người dùng
    }
}

class user
{  

    function google_checkmail($email)
{
    $sql = "select * from user where email='" . $email . "' ";
    $result = pdo_query_one($sql);
    return $result;
}
function get_user_google($email)
{
    $sql = "select * from user where email='" . $email . "' ";
    $result = pdo_query_one($sql);
    return $result;
}

function insert_google($name,$email,$avatar,$user_phone,$user_password,$role_id)
{
    $hashed_password = password_hash($user_password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO user(user_name, email,avatar,user_phone, user_password,role_id) VALUES ( ?, ?,?,?,?,?)";
    $result = pdo_execute($sql, $name, $email, $avatar, $user_phone,$hashed_password,$role_id);
    return $result;
}
}

?>