<!DOCTYPE html>
<html>
<head>
    <title>Résultats du Quiz</title>
</head>
<body>
<h1>Résultats du Quiz</h1>
<?php
// Vérification des réponses
$score = 0;

// Vérification de la question 1
if (isset($_POST['q1']) && $_POST['q1'] == 'a') {
    $score++;
}

// Vérification de la question 2
if (isset($_POST['q2']) && $_POST['q2'] == 'b') {
    $score++;
}

// Vérification de la question 3
if (isset($_POST['q3']) && $_POST['q3'] == 'a') {
    $score++;
}

// Vérification de la question 4
if (isset($_POST['q4']) && $_POST['q4'] == 'a') {
    $score++;
}

// Vérification de la question 5
if (isset($_POST['q5']) && $_POST['q5'] == 'a') {
    $score++;
}

// Affichage du score
echo "<p>Votre score est de $score/5.</p>";
?>
</body>
</html>
