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
?>