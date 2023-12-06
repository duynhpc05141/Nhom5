<?php
require_once 'pdo.php';

function stactic_all()
{
    $sql = "SELECT category.category_name AS namecategory, category.category_id AS idcategory, COUNT(article.article_id) AS countarticle ";
    $sql .= "FROM article JOIN category ON category.category_id = article.category_id ";
    $sql .= "GROUP BY category.category_id ORDER BY category.category_id DESC";
    $listStatic = pdo_query($sql);
    return $listStatic;
}

function stactic_favourite_articles()
{
    $sql = "SELECT a.article_id, a.article_name, c.category_name, 
    COUNT(f.fav_id) AS favorite_count, 
    GROUP_CONCAT(DISTINCT u.user_name) AS user_names
    FROM article a
    LEFT JOIN favourite f ON a.article_id = f.article_id
    LEFT JOIN category c ON a.category_id = c.category_id
    LEFT JOIN user u ON f.user_id = u.user_id
    GROUP BY a.article_id
    ORDER BY favorite_count DESC;";

    $listFavourite = pdo_query($sql);
    return $listFavourite;
}
function stactic_favourite_recommended($user_id)
{
    $sql = "SELECT a.article_id, a.article_name, a.category_id, c.category_name,
    COUNT(f.fav_id) AS favorite_count
FROM article a
LEFT JOIN favourite f ON a.article_id = f.article_id
LEFT JOIN user u ON f.user_id = u.user_id
LEFT JOIN category c ON a.category_id = c.category_id
WHERE u.user_id = " . $user_id . "
GROUP BY a.article_id
ORDER BY favorite_count DESC
LIMIT 2";

$most_favored_category = pdo_query($sql);

$category_id = $most_favored_category[0]['category_id'];
$category_name = $most_favored_category[0]['category_name'];

$sql_recommendation = "SELECT a.article_id, a.article_name, a.category_id, a.img, c.category_name,
    COUNT(f.fav_id) AS favorite_count
FROM article a
LEFT JOIN favourite f ON a.article_id = f.article_id
LEFT JOIN category c ON a.category_id = c.category_id
WHERE a.category_id = " . $category_id . "
GROUP BY a.article_id
ORDER BY favorite_count DESC
LIMIT 10";

$recommended_articles = pdo_query($sql_recommendation);
return $recommended_articles;
}
