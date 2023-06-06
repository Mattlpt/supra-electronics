<section>


    <?php
    use controller\contact\ForumTopic;
    $id = $GLOBALS['dispatcher']->getPage();
    $forum = fetchTopicId($id);
    ?>

    <div class="title-text"><?php echo($forum['topic_forum']) ?></div>

    <div class="scrollable-container">
        <div class="discussion">
            <?php
            $messages = fetchMessagesForum($id);
            foreach($messages as $message) { ?>
                <div class="bulle">
                    <p><?php echo($message['content_message'])?></p><br>
                    <div class="heure"><?php echo(timeToString($message)) ?></div><br>

                </div>

            <?php } ?>
        </div>
    </div>


    <div class="input">
        <form action="" method="post">
            <input type="text" class="text" name="message">
            <input type="submit" class="button" value="submit">
        </form>
    </div>



    <div id="bas-page"></div>
</section>

<style>
    body {
        overflow: visible;
        scroll-margin-bottom: 100px;
    }

    .button{
        margin-bottom: 30%;
    }

    .bulle{
        width: 500px;
        height: auto;
        margin-bottom: 20px;
        margin-top: 20px;
        padding: 10px 10px;
        color: var(--text-light-color);
        background: var(--primary-color);
        border-radius: 10px;
    }

    .bulle p{
        font-size: 20px;
        font-weight: 500;
    }

    .bulle .heure{
        font-size: 12px;
        font-weight: lighter;
    }

    .scrollable-container {
        height: 530px; /* Ajustez la hauteur selon vos besoins */
        overflow: auto;
    }

    .title-text{
        font-size: 30px;
        font-weight: 700;
        color: var(--text-color);
        display: flex;
        padding: 12px 60px;
    }

    input{
        height: 30px;
        width: 100%;
        padding: 0 15px;
        margin-top: 1rem;
        font-size: 14px;
        margin-bottom: 1.3rem;
        border: 1px solid #ddd;
        border-radius: 6px;
        outline: none;
        background: var(--body-color);
        color: var(--text-hard-color);
    }

    input:focus {
        box-shadow: 0 1px 0 rgba(0, 0, 0, 0.2);
    }

    .button{
        font-size: 18px;
        font-weight: 400;
        color: var(--white);
        height: 30px;
        border: none;
        background: var(--primary-color);
        border-radius: 6px;
        cursor: pointer;
    }

</style>

<script>







</script>