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
    $check_user = pdo_query_one($sql);
    return $check_user;
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



?>