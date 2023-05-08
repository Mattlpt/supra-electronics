<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Navigation Bar with Search Box</title>
    <!-- CSS -->
    <link href="/style/menu-display.css" rel="stylesheet">
    <!-- Unicons CSS -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <script src="Style/JS/accueil.js" defer></script>
</head>
<body>
<div class="top-band">
    <h3 class="text">Nouveauté : le site est maintenant disponible en anglais. Essayer !</h3>
</div>
<div class="nav">

    <i class="uil uil-bars navOpenBtn"></i>

    <a href="#" class="logo">Supra Electronics</a>

    <ul class="nav-links">

        <i class="uil uil-times navCloseBtn"></i>

        <li>
            <a href="/index.php?cible=maincontroleur&fonction=accueil">Accueil</a>
        </li>

        <li>
            <a href="#">Bracelet</a>
        </li>

        <li>
            <a href="#">Capteurs</a>
        </li>

        <li>
            <a href="#">Nous contacter</a>
        </li>

    </ul>


    <div class="search-box">
        <i class="uil uil-search search-icon"></i>
        <input type="text" placeholder="Search here..." />
    </div>

    <span class="button">
        <i class="uil uil-search search-icon" id="searchIcon"></i>
        <a class="animated-link-signup" onclick="window.location.href='/index.php?cible=maincontroleur&fonction=register'">
                <span>Inscription</span>
        </a>

        <a class="animated-link-login" onclick="window.location.href = '/index.php?cible=maincontroleur&fonction=login'">
                <span>Connexion</span>
        </a>

      </span>
</div>
<div class="page">
    <p class="intro-title-text">Votre Santé au Travail</p>
    <p class="intro-title-primary">est au Cœur de nos Préoccupations</p>

    <p class="text-presentation">Inserer ici un texte de présentation - Lorem ipsum dolor sit amet. Et error sunt qui quia totam et rerum assumenda At molestiae tenetur. Quo error galisum sit aspernatur esse ab corrupti obcaecati. Et numquam Quis eos doloribus mollitia eum inventore deserunt in internos consectetur est quae alias nam dolores tempora qui soluta voluptatem.

    </p>
</div>




</body>
<script>
</script>
</html>
