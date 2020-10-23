<!DOCTYPE html>
<html lang="en-US">
  <head>
    <title>Super Legit News</title>    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/layout.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/comments.css" rel="stylesheet">
    <link href="css/forms.css" rel="stylesheet">
  </head>
  <body>
    <?php
    include_once('database/connection.php');
    include_once('database/news.php');
    $article = getArticle($_GET['id']);
    
    include_once('database/comments.php');
    $comments = getComments($_GET['id']);

    include_once('templates/common/header.php');
    include_once('templates/news/view_news.php');
    include_once('templates/common/footer.php');
    ?>
  </body>
</html>
