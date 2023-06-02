<section class="home">
    <div class="title-text">FAQ</div>
    <div class="content-body">

        <form method="POST" action="" align="center">
            <input type="text" name="pseudo">
            <br><br>
            <textarea name="message"></textarea>
            <br>
            <input type="submit" name="valider">
        </form>
        <section id="messages"></section>
        <script>
            setInterval('load_messages ()', 500);
            function load_message(){
                $('#messages').load('loadMessages.php')
            }
        </script>

    </div>

</section><!-- Contenu principal -->