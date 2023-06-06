<section class="home">
    <div class="title-text">FAQ</div>
    <div class="content-body">
        <form method="POST" action="">
            <input type="text" name="topic" placeholder="enter topic">
            <br><br>
            <input type="text" name="question" placeholder="enter question">
            <br><br>
            <input type="submit" name="valider" value="submit">
        </form>
    </div>
    <div class="topics">
        <table class="table">
        <tr>
            <th>ID</th>
            <th>Topic</th>
            <th>Author</th>
        </tr>
        <tbody>
            <?php
                $topics = fetchAllTopics();
                foreach($topics as $topic) {
                    $user = fetchUserId($topic['author_forum']); ?>
                    <tr>
                        <td><?php echo($topic['id_forum']) ?></td>
                        <td><a href="/forumtopic/<?php echo($topic['id_forum']) ?>"><?php echo($topic['topic_forum']) ?></a></td>
                        <td><?php echo($user['username_user']) ?></td>
                        <td><input type="button" value="test"></td>
                    </tr>
                <?php }
            ?>
        </tbody>
        </table>
    </div>