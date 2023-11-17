<?php
require_once 'pdo.php';

function stactic_all(){
   $sql = "SELECT category.category_name AS namecategory, category.category_id AS idcategory, COUNT(article.article_id) AS countarticle ";
    $sql .= "FROM article JOIN category ON category.category_id = article.category_id ";
    $sql .= "GROUP BY category.category_id ORDER BY category.category_id DESC";
    $listStatic = pdo_query($sql);
    return $listStatic;
}


