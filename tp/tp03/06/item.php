<?php
session_start();

include_once('database/connection.php');
include_once('database/news.php');
$article = getArticle($_GET['id']);

include_once('database/comments.php');
$comments = getComments($_GET['id']);

include_once('templates/common/header.php');
include_once('templates/news/view_news.php');
include_once('templates/common/footer.php');
?>
