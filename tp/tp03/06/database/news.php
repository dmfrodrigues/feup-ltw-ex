<?php
function getAllNews(){
    global $db;
    $stmt = $db->prepare('SELECT news.*, users.*, COUNT(comments.id) AS comments
    FROM news JOIN
        users USING (username) LEFT JOIN
        comments ON comments.news_id = news.id
    GROUP BY news.id, users.username
    ORDER BY published DESC');
    $stmt->execute();
    $articles = $stmt->fetchAll();
    return $articles;
}

function getArticle(int $id){
    global $db;
    $stmt = $db->prepare('SELECT * FROM news JOIN users USING (username) WHERE id = :id');
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $article = $stmt->fetch();
    return $article;
}

function updateArticle(int $id, string $title, string $introduction, string $fulltext){
    global $db;
    $stmt = $db->prepare('UPDATE news SET
    title=:title, introduction=:introduction, fulltext=:fulltext
    WHERE id=:id');
    $stmt->bindParam(':title'       , $title       , PDO::PARAM_STR);
    $stmt->bindParam(':introduction', $introduction, PDO::PARAM_STR);
    $stmt->bindParam(':fulltext'    , $fulltext    , PDO::PARAM_STR);
    $stmt->bindParam(':id'          , $id          , PDO::PARAM_INT);
    return $stmt->execute();
}
?>
