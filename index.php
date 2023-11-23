<?php
ob_start();
session_start();
include "./DAO/pdo.php";
include "./DAO/login.php";


if (isset($_GET['act']) && ($_GET['act'] !== "")) {
 
  $act = $_GET['act'];
  include "includes/header.php";
  switch ($act) {
    case 'login':
      if (isset($_POST['login']) && ($_POST['login'])) {
        $user = $_POST['user_name'];
        $password = $_POST['user_password'];
        // Lấy mật khẩu đã băm từ cơ sở dữ liệu dựa trên tên người dùng
        // Ví dụ, sử dụng một câu lệnh chuẩn bị
        $dbHashedPassword = fetch_hashed_password_from_database($user);
        if ($dbHashedPassword && password_verify($password, $dbHashedPassword)) {
            $check_user = check_user($user);
            if (is_array($check_user)) {
                $_SESSION['user_name'] = $check_user;
                ob_end_clean();
                header('Location: index.php');
            } 
        } else {
            $alert = '<div class="alert alert-error" role="alert">
            Tên người dùng hoặc mật khẩu không đúng
            </div>';
        }
    }
      
      include './view/account/login.php';
      break;

    case 'logout':
      session_unset();
      header('Location: index.php');
      break;  

    case 'register':
      include './view/account/register.php';
      break;  
    case 'home':
      include "./includes/home.php";
      break;
    case 'detail':
      include "./view/details.php";
      break;
    case 'category':
      include "view/categori.php";
      break;
    case 'about':
      include "view/about.php";
      break;
    case 'articles':
      include "view/articles.php";
      break;
    case 'contact':
      include "view/contact.php";
      break;

    case 'detail':
      include "./view/details.php";
      break;  
   
    default:

      include "./includes/home.php";
      break;
    
        break;
  }

  include "./includes/footer.php";
} else {
  include "./includes/header.php";
  include "./includes/home.php";
  include "./includes/footer.php";
}
ob_end_flush();
?>
  