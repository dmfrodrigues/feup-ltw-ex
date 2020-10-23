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
    <section id="news">
      <?php
      foreach($articles as $article) {
        $epoch = (int)$article['published'];
        $dt = new DateTime("@$epoch");
      ?>
      <article>
        <header>
          <h1><a href="item.php?id=<?=$article['id']?>"><?=$article['title']?></a></h1>
        </header>
        <img src="http://lorempixel.com/600/300/business/" alt="">
        <p><?=$article['introduction']?></p>
        <?php
        echo implode(' ', array_map(function($tag){ return '<p>'.$tag.'</p>'; }, explode(PHP_EOL, $article['fulltext'])));
        ?>
        <footer>
          <span class="author"><?=$article['name']?></span>
          <span class="tags">
          <?php
          echo implode(' ', array_map(function($tag){ return '<a href=\'index.php\'>#'.$tag.'</a>'; }, explode(',', $article['tags'])));
          ?>
          </span>
          <span class="date"><?=$dt->format('Y-m-d, H:i')?></span>
          <a class="comments" href="item.php?id=<?=$article['id']?>#comments\"><?=$article['comments']?></a>
        </footer>
      </article>
      <?php
      }
      ?>
    </section>
    <footer>
      <p>&copy; Fake News, 2017</p>
    </footer>
  </body>
</html>
