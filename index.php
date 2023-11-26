<?php
include "./DAO/pdo.php";
include "./DAO/article.php";
include "./DAO/loai.php";
include "./DAO/binh-luan.php";

$list_loai = loai_select_all();
      $listArticle = article_select_all_home();
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
        $detail = article_select_by_id($id);
         $view= article_count_view($id);
         $comment=count_comment($id);
        extract($detail);
        $sameKind = article_select_by_loai($id, $category_id);
        include "view/single-blog.php";
      }else{
        include "./includes/home.php";
      }
    
      break;
    case 'category':
      if (isset($_GET['id']) && ($_GET['id'])) {
        $category_id = $_GET['id'];
        $listArticle = article_select_all($category_id);
        $nameCate = article_name_select_by_id($category_id);
      } else {
        $category_id = 0;
      }




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

    case 'rankings':
      include "view/rankings.php";
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
<script src="https://kit.fontawesome.com/55a9fa42b8.js" crossorigin="anonymous"></script>
