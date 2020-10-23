<?php

include_once('database/connection.php');
include_once('database/news.php');
$article = getArticle($_GET['id']);

include_once('database/comments.php');
$comments = getComments($_GET['id']);

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
      $epoch = (int)$article['published'];
      $dt = new DateTime("@$epoch");
      ?>

      <article>
        <header>
          <h1><a href="item.php?id=<?=$_GET['id']?>"><?=$article["title"]?></a></h1>
        </header>
        <img src="http://lorempixel.com/600/300/business/" alt="">
        <p><?=$article['introduction']?></p>
        <?php
        echo implode(' ', array_map(function($tag){ return '<p>'.$tag.'</p>'; }, explode(PHP_EOL, $article['fulltext'])));
        ?>    
        <section id="comments">
          <h1><?=count($comments)?> Comments</h1>
          <?php
          foreach($comments as $comment) {
            $epoch_comment = (int)$comment['published'];
            $dt_comment = new DateTime("@$epoch_comment");
          ?>
          <article class="comment">
            <span class="user"><?=$comment['username']?></span>
            <span class="date"><?=$dt_comment->format('Y-m-d, H:i')?></span>
            <p><?=$comment['text']?></p>
          </article>
          <?php
          }
          ?>
          <form>
            <h2>Add your voice...</h2>
            <label>Username 
              <input type="text" name="username">
            </label>
            <label>E-mail
              <input type="email" name="email">
            </label>
            <label>Comment
              <textarea name="comment"></textarea>            
            </label>
            <input type="submit" value="Reply">
          </form>
        </section>
        <footer>
        <span class="author"><?=$article['name']?></span>
          <span class="tags">
          <?php
          echo implode(' ', array_map(function($tag){ return '<a href=\'index.php\'>#'.$tag.'</a>'; }, explode(',', $article['tags'])));
          ?>
          </span>
          <span class="date"><?=$dt->format('Y-m-d, H:i')?></span>
          <a class="comments" href="item.php?id=<?=$_GET['id']?>#comments\"><?=$article['comments']?></a>
        </footer>
      </article>
    </section>
    <footer>
      <p>&copy; Fake News, 2017</p>
    </footer>
  </body>
</html>
