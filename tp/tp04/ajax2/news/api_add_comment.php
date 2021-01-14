<?php

require_once 'database/connection.php';
require_once 'database/comments.php';

$id         = $_POST['id'];
$comment_id = $_POST['comment_id'];
$username   = $_POST['username'];
$text       = $_POST['text'];

insertComment($id, $username, $text);

$comments = getCommentsByNewId($id);
$comments_to_send = [];
foreach($comments as $key=>$comment){
    if(intval($comment['id']) > intval($comment_id)) $comments_to_send[] = $comment;
}

echo json_encode($comments_to_send);
