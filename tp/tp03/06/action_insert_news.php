<?php
session_start();

if(!isset($_SESSION['username'])){
    header('Location: index.php');
    die();
}

include_once('database/connection.php');
include_once('database/news.php');
$id = insertArticle(
    $_POST['title'],
    $_POST['tags'],
    $_POST['introduction'],
    $_POST['fulltext']
);
header('Location: ./item.php?id='.$id);
die();
?>
