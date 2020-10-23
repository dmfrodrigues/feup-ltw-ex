<?php
session_start();

if(!isset($_SESSION['username'])){
    header('Location: index.php');
    die();
}

include_once('database/connection.php');
include_once('database/news.php');
$ret = updateArticle(
    $_POST['id'],
    $_POST['title'],
    $_POST['introduction'],
    $_POST['fulltext']
);
if (!$ret) {
    header("HTTP/1.0 500 Internal Server Error");
} else {
    header('Location: ./item.php?id='.$_POST['id']);
    die();
}
?>
