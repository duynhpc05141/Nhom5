<?php
require_once 'pdo.php';

function stactic_all(){
    $sql = "SELECT category.name AS namecategory, category.id AS idcategory, COUNT(product.id) AS countproduct, MIN(product.price) AS minprice, MAX(product.price) AS maxprice, AVG(product.price) AS avgprice ";
    $sql .= "FROM product LEFT JOIN category ON category.id = product.category_id ";
    $sql .= "GROUP BY category.id ORDER BY category.id DESC";
    $listStatic = pdo_query($sql);
    return $listStatic;
}

