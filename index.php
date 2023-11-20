<?php
include "./DAO/pdo.php";
include "./DAO/article.php";
include "./DAO/loai.php";


if (isset($_GET['act']) && ($_GET['act'] !== "")) {
 
  $act = $_GET['act'];
  include "includes/header.php";
  switch ($act) {
    case 'home':
      $list_loai = loai_select_all();
     
      $listArticle = article_select_all_home();
      include "./includes/home.php";

      break;
    case 'detail':
      if (isset($_GET['id']) && ($_GET['id'])) {
        $id = $_GET['id'];
        $detail =article_select_by_id($id);
       include "view/single-blog.php";
        // $sameKind = product_select_by_loai($id, $category_id);
        
      }
      
      break;
    case 'category':
      $list_loai = loai_select_all();
      include "view/categori.php";
      break;
    case 'about':
      include "view/about.php";
      break;
    case 'articles':
      $list_loai = loai_select_all();
      $listArticle = article_select_all_home();
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
  