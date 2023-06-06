<?php
use model\Connection;

function addTopic($topic, $question) {
    $db = $GLOBALS['connection']->getDb();
    $user = $_SESSION['logged_user'];
    $query = $db->prepare("INSERT INTO forum (topic_forum, author_forum, question_forum) VALUES (:topic, :author, :question)");
    $query->execute([
        "topic"=>$topic,
        "author"=>$user['id_user'],
        "question"=>$question
    ]);
}
function fetchAllTopics() {
    $db = $GLOBALS['connection']->getDb();
    $query = $db->prepare("SELECT * FROM forum");
    $query->execute();
    $results = $query->fetchAll();
    return $results;
}

function fetchTopicId($id) {
    $db = $GLOBALS['connection']->getDb();
    $query = $db->prepare("SELECT * FROM forum WHERE id_forum = $id");
    $query->execute();
    $results = $query->fetchAll();
    return $results[0];
}

function postMessage($id, $content) {
    date_default_timezone_set('Europe/Paris');
    $db = $GLOBALS['connection']->getDb();
    $query = $db->prepare("INSERT INTO message (author_message, content_message, time_message, pinned_message, forum_message) VALUES (:author, :content, :time, :pinned, :forum)");
    $query->execute([
        "author"=>$_SESSION['logged_user']['id_user'],
        "content"=>$content,
        "time"=>date('G,i,s'),
        "pinned"=>null,
        "forum"=>$id
    ]);
}

function fetchAllMessages() {
    $db = $GLOBALS['connection']->getDb();
    $query = $db->prepare("SELECT * from message");
    $query->execute();
}

function fetchMessagesForum($id) {
    $db = $GLOBALS['connection']->getDb();
    $query = $db->prepare("SELECT * from message WHERE forum_message = $id ORDER BY id_message DESC");
    $query->execute();
    $results = $query->fetchAll();
    return $results;
}

function timeToString($message) {
    $time = $message['time_message'];
    $exptime = explode(",", $time);
    $string = "$exptime[0]:$exptime[1]";
    return $string;
}
?>