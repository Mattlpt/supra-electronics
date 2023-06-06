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

    <!DOCTYPE html>
    <html>
    <head>
        <title>Quiz</title>
        <style>
            body {
                font-family: Arial, sans-serif;
            }

            h1 {
                color: #333;
            }

            .question {
                margin-bottom: 10px;
            }

            .options label {
                display: block;
                margin-bottom: 5px;
            }

            .submit-btn {
                margin-top: 10px;
            }
        </style>
    </head>
    <body>
    <h1>Quiz</h1>
    <form action="quiz.php" method="post">
        <div class="question">
            <p>Question 1: PHP</p>
            <p>Quelle est la fonction en PHP utilisée pour afficher du texte à l'écran ?</p>
            <div class="options">
                <label><input type="radio" name="q1" value="a"> a) echo</label>
                <label><input type="radio" name="q1" value="b"> b) print</label>
                <label><input type="radio" name="q1" value="c"> c) display</label>
                <label><input type="radio" name="q1" value="d"> d) write</label>
            </div>
        </div>
        <div class="question">
            <p>Question 2: HTML</p>
            <p>Quelle balise HTML est utilisée pour créer un lien hypertexte ?</p>
            <div class="options">
                <label><input type="radio" name="q2" value="a"> a) &lt;link&gt;</label>
                <label><input type="radio" name="q2" value="b"> b) &lt;a&gt;</label>
                <label><input type="radio" name="q2" value="c"> c) &lt;h1&gt;</label>
                <label><input type="radio" name="q2" value="d"> d) &lt;p&gt;</label>
            </div>
        </div>
        <div class="question">
            <p>Question 3: CSS</p>
            <p>Quelle propriété CSS est utilisée pour définir la couleur de fond d'un élément ?</p>
            <div class="options">
                <label><input type="radio" name="q3" value="a"> a) background-color</label>
                <label><input type="radio" name="q3" value="b"> b) color</label>
                <label><input type="radio" name="q3" value="c"> c) text-color</label>
                <label><input type="radio" name="q3" value="d"> d) bg-color</label>
            </div>
        </div>
        <div class="question">
            <p>Question 4: PHP</p>
            <p>Quelle fonction en PHP est utilisée pour vérifier si un fichier existe ?</p>
            <div class="options">
                <label><input type="radio" name="q4" value="a"> a) file_exists()</label>
                <label><input type="radio" name="q4" value="b"> b) file_check()</label>
                <label><input type="radio" name="q4" value="c"> c) is_file()</label>
                <label><input type="radio" name="q4" value="d"> d) check_file()</label>
            </div>
        </div>
        <div class="question">
            <p>Question 5: HTML</p>
            <p>Quelle balise HTML est utilisée pour créer une liste non ordonnée ?</p>
            <div class="options">
                <label><input type="radio" name="q5" value="a"> a) &lt;ul&gt;</label>
                <label><input type="radio" name="q5" value="b"> b) &lt;ol&gt;</label>
                <label><input type="radio" name="q5" value="c"> c) &lt;li&gt;</label>
                <label><input type="radio" name="q5" value="d"> d) &lt;list&gt;</label>
            </div>
        </div>
        <input class="submit-btn" type="submit" value="Soumettre" >
    </form>
    </body>
    </html>

</section>