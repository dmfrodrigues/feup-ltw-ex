<?php
session_start();

if(!isset($_SESSION['username'])){
    header('Location: index.php');
    die();
}

include_once('database/connection.php');
include_once('database/news.php');
deleteArticle($_GET['id']);
header('Location: ./index.php?id='.$_POST['id']);
die();
?>
