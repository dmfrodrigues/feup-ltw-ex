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

function insertArticle(string $title, string $tags, string $introduction, string $fulltext){
    global $db;
    $stmt = $db->prepare('INSERT INTO news(title, published, tags, username, introduction, fulltext) VALUES
    (:title, :published, :tags, :username, :introduction, :fulltext)');
    $stmt->bindParam(':title'       , $title               , PDO::PARAM_STR);
    $stmt->bindParam(':published'   , time()               , PDO::PARAM_INT);
    $stmt->bindParam(':tags'        , $tags                , PDO::PARAM_STR);
    $stmt->bindParam(':username'    , $_SESSION['username'], PDO::PARAM_STR);
    $stmt->bindParam(':introduction', $introduction        , PDO::PARAM_STR);
    $stmt->bindParam(':fulltext'    , $fulltext            , PDO::PARAM_STR);
    $stmt->execute();
    return $db->lastInsertId();
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

function deleteArticle(int $id){
    global $db;
    $stmt = $db->prepare('DELETE FROM news WHERE id=:id');
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
}
?>
