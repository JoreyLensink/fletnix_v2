<?php
include 'controller/movies.php';
?>


<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset=utf-8>
    <title>Fletnix</title>
    <link rel="icon" href="assets/images/logo-browser.png">
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>
<div id="background">
    <!-- Navigatie balk -->
    <div id="navbar">
        <a class="navbar-logo" href="index.php"><img class="logo-nav" src="assets/images/logo.png" alt="logo fletnix"></a>
        <div class="dropdown">
            <a href="movies_view.php">
                <div class="dropbtn">Films</div>
            </a>
            <div class="dropdown-content">
                <a href="movies.php#animation">Animatie</a>
                <a href="movies.php#Comedy">Humor</a>
                <a href="movies.php#Family">Famillie</a>
            </div>
        </div>
        <a class="navbar-link" href="about.php">Over ons</a>
        <a class="navbar-link" href="contact.php">Contact</a>
        <a class="navbar-link" href="subscription.php">Abonnementen</a>
        <a class="navbar-link-right" href="account.php"><img class="login-icon" src="assets/images/icon-login.png"
                                                              alt="icon person"></a>
    </div>
    <div class="main-index">
        <header id="header-index">
            <h1>Welkom op Fletnix</h1>
            <p>Op Fletnix staan de leukste films voor kinderen. Je kunt hier tientallen films. <br> Van Peter Pan tot
                aan COCO.
                Ook leuk om met het hele gezin te bekijken. <br>U kunt onderaan de pagina een account aanmaken.</p>
            <h3>Voor als je gewoon even lekker wilt ontspannen</h3>
            
        </header>


        <main class="main">
            <div class="movie-header">

            <!-- code voor top 5 films famillie  -->
            </div>
            <?php $besteFamillie = ValueMovie($dbh, 'Animation', 5); 
                ?>
                    <?php
                echo '<h2>' . 'De 5 meest bekeken Famillie films van de afgelopen 24 uur!' . '</h2>';

                foreach ($besteFamillie as $movie) {

                    echo "<div class='movie-item'>";
                    echo "<img alt='movie' class='othermovies' src='assets/images/Familie_film.jpg'>";
                    echo "<h2 class='movie-hover-item'>";
                    echo "<span> Animatie </span> . <br>";
                    echo '<span>' . $movie['title'] . '</span>' . '<br>';
                    echo '<span>' . "$" . $movie['price'] . '</span>';
                    echo '<a href="watch.php">' . "<span> Film kijken </span>" . '</a>';
                    echo "</div>";
                }
                    ?>
           

        </main>
        <footer>
            <a class="footer-index" href="subscription.php">
                Klik hier om een account aan te maken
            </a>
        </footer>
    </div>
</div>

</body>
</html>
