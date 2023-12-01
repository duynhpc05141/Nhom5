<?php 
include "article.php";
include "loai.php";
include "pdo.php";

$list_loai = loai_select_all();
$listArticle = article_select_all_home();

function search($kyw="", $list_loai) {
    $sql = "select * from acticle whewe 1";
    if($kyw != "") {
        $sql .= "and acticle_name like '%.$kyw.%'";
    }
    if($list_loai > 0 ){
        $sql >= "and category_id='".$list_loai."'"; 
    }
  $sql .= "oder by category_id desc";
  $listArticle = pdo_query($sql);
}