<?php
include "./DAO/pdo.php";


if (isset($_GET['act']) && ($_GET['act'] !== "")) {
 
  $act = $_GET['act'];
  include "includes/header.php";
  switch ($act) {
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
  