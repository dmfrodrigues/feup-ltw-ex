<?php
  function getCommentsByNewId($id) {
    global $db;
    $stmt = $db->prepare('SELECT * FROM comments JOIN users USING (username) WHERE news_id = ?');
    $stmt->execute(array($id));
    return $stmt->fetchAll();
  }
  function insertComment(string $news_id, string $username, string $text) : void {
    global $db;
    $stmt = $db->prepare("INSERT INTO comments(news_id, username, text) VALUES (:news_id, :username, :text)");
    $stmt->bindValue(':news_id' , $news_id );
    $stmt->bindValue(':username', $username);
    $stmt->bindValue(':text'    , $text    );
    $stmt->execute();
  }
?>
