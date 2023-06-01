<?php

namespace controller\contact;

class Quizz
{
    public static function renderMainView():void
    {
        renderView("contact/quizz.view.php", NULL, "quizz");
    }

    public static function quizz(): void
    {

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Récupérer les champs envoyés en POST et les stocker dans des variables


// Récupérer la réponse à la question des carrés
            $reponseCarres = $_POST["carres"];

// Récupérer la réponse à la question des lignes horizontales
            $reponseHorizontaux = $_POST["horizontaux"];

// Vérifier les réponses du quiz
            $quiz = 0; // Score initial du quiz, 0 par défaut

            if ($reponseCarres === "Tout le monde" && $reponseHorizontaux === "Vous fournir des protections auditives sur-mesure") {
                $quiz = 1; // Les deux réponses sont correctes

                header("Location: /user");
            } else {
                header("Location: index.php?error=Essaie encore");
            }

// Exécution de la requête SQL
        }
    }

}