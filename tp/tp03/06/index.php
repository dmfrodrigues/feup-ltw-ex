<?php

include_once('database/connection.php');
include_once('database/news.php');
$articles = getAllNews();

?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <title>Super Legit News</title>    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <link href="layout.css" rel="stylesheet">
    <link href="responsive.css" rel="stylesheet">
    <link href="comments.css" rel="stylesheet">
    <link href="forms.css" rel="stylesheet">
  </head>
  <body>
    <?php
    include_once('templates/common/header.php');
    ?>
    <?php
    include_once('templates/news/list_news.php');
    ?>
    <?php
    include_once('templates/common/footer.php');
    ?>
  </body>
</html>
