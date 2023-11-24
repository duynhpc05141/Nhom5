<?php
ob_start();
session_start();
include "./DAO/pdo.php";
include "./DAO/login.php";
include "./DAO/khach-hang.php";


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
      $target_dir = "./img/";
      if (isset($_POST['register']) && ($_POST['register'])) {
          $user = $_POST['user'];
          $password = $_POST['password'];
          $email = $_POST['email'];
          $phone = $_POST['phone'];
          $role_id = 0;
          $avatar = save_file('avatar', $target_dir);
          if (!is_username_exists($user)) {
            user_insert_admin($user, $email, $avatar, $phone,$password ,$role_id);
            $alert = '<div class="alert alert-success" role="alert">
              Đăng ký thành công!
            </div>';
        } else {
            $alert = '<div class="alert alert-danger" role="alert">
                Tên người dùng đã tồn tại. Vui lòng chọn tên khác.
              </div>';
        }
      }
      include './view/account/register.php';
      break;  
    case 'user_edit':
      $target_dir = "./img/";
      if (isset($_POST['updateAc']) && ($_POST['updateAc'])) {
          $id = $_POST['id'];
          $user = $_POST['user'];
          $email = $_POST['email'];
          $img = save_file('avatar', $target_dir);
          $phone = $_POST['phone'];
          $role_id =0;
          user_update_admin($id, $user,  $email, $img, $phone, $role_id);
          $check_user = check_user($user);
          $_SESSION['user_name'] = $check_user;
          $alert = '<div class="alert alert-success" role="alert">
              Cập nhật thành công!
            </div>';
      }
      include './view/account/update-account.php';
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
  