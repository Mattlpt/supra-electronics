<section class="home">
    <div class="title-text">Quizz</div>

    <div class="quiz">
        <img src="quiz.png" alt="quiz">
    </div>
    <h1>Tout d'abord</h1>
    <form method="POST" action="quizz">
        Vous travaillez à quel poste ?
        <div class="bradUo">
            <select name="emploi">
                <option value=""> -</option>
                <option value="Employeur"> Employeur</option>
                <option value="Employé"> Employé</option>
            </select>
        </div>

        <div class="quiz">

            <div class="question">
                Au travail, qui est réponsable de votre santé et de votre sécurité ?

                <select name="carres">
                    <option value=""> -</option>
                    <option value="L'employeur"> L'employeur</option>
                    <option value="Vous-même"> Vous-même</option>
                    <option value="Les représentants du personnel"> Les représentants du personnel</option>
                    <option value="Vos collègues"> Vos collègues</option>
                    <option value="Tout le monde"> Tout le monde</option>
                </select>
                <?php if(isset($_GET['error'])) { echo '<p class="try-again">Essaie encore</p>'; } ?>
            </div>

            <div class="question">
                Vous travaillez dans un environnement bruyant.
                Vos reprénsentans du personnel peuvent proposer à l'employeur
                de:

                <div class="bradio">
                    <select name="horizontaux">
                        <option value=""> -</option>
                        <option value="Délocaliser votre bureau sur une ile "> Délocaliser votre bureau sur une ile</option>
                        <option value="Réaménager et faire insonoriser les locaux"> Réaménager et faire insonoriser les locaux</option>
                        <option value="Vous fournir des protections auditives sur-mesure"> Vous fournir des protections auditives sur-mesure</option>
                    </select>
                </div>
                <?php if(isset($_GET['error'])) { echo '<p class="try-again">Essaie encore</p>'; } ?>

            </div>
        </div>

        <input type="submit" value="Vérifier">
        <input type="reset" value="effacer les réponses">


    </form>

</section>

<style>


    .question {
        display: flex;
        justify-content: center;
        flex-direction: column;
        width:200px;
        height: 300px;
        text-align: center;
    }

    .bradio {
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .quiz{
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        align-content: space-around;
    }

    .messerreur{
        display: flex;
        align-items: center;
        justify-content: center;
    }


    form, h1 {
        text-align: center;
    }

    .bravo {
        display: flex;
        align-items: center;
        justify-content: center;
        width : 200px;
        font-size: 50px;
    }

    .erreur{
        color:red;
    }

    .erreur2 {

        color:blue;
    }

    .error-message {
        color: red;
        font-weight: bold;
    }

    .try-again {
        color: blue;
    }

</style>