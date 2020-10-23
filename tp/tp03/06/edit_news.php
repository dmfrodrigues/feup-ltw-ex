<?php
include_once('database/connection.php');
include_once('database/news.php');
$article = getArticle($_GET['id']);

include_once('templates/common/header.php');
include_once('templates/news/edit_news.php');
include_once('templates/common/footer.php');
?>
