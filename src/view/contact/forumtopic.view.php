<?php 
use controller\contact\ForumTopic;
$id = $GLOBALS['dispatcher']->getPage(); 
$forum = fetchTopicId($id);
?>
<div class="head">
<h1><?php echo($forum['topic_forum']) ?></h1>
</div>
<div class="discussion">
    <?php
    $messages = fetchMessagesForum($id);
    foreach($messages as $message) { ?>
        <p><?php echo($message['content_message'])?></p><br>
        <p><?php echo(timeToString($message)) ?></p><br>
    <?php } ?>
</div>
<div class="input">
    <form action="" method="post">
        <input type="text" name="message">
        <input type="submit" class="button" value="submit">
    </form>
</div>