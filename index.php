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
            <a href="movies.php">
                <div class="dropbtn">Films</div>
            </a>
            <div class="dropdown-content">
                <a href="movies.php#animation">Animatie</a>
                <a href="movies.php#adventure">Avontuur</a>
                <a href="movies.php#humour">Humor</a>
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
            <h2>De 5 meest bekeken film van de afgelopen 24 uur!</h2>
        </header>


        <main class="main">
            <div class="movie-header">

            </div>
            <div class="movie-item">
                <img alt="cMovieoco" class="othermovies" src="assets/images/COCO.jpg">
                <h2 class="movie-hover-item">
                    <span>Coco</span>
                    <br/>
                    <span>Animatie / Kinderen</span>
                    <br/>
                    <a href="watch.php" >
                        <span>Film kijken</span>
                    </a>
                </h2>
            </div>
            <div class="movie-item">
                <img alt="Movie" class="othermovies" src="assets/images/tintin.jpg">
                <h2 class="movie-hover-item">
                    <span>The Adventures of Tintin</span>
                    <br/>
                    <span>Avontuur / Animatie</span>
                    <br/>
                    <a href="watch.php" >
                        <span>Film kijken</span>
                    </a>
                </h2>
            </div>
            <div class="movie-item">
                <img alt="Movie" class="othermovies" src="assets/images/sausage-party.jpg">
                <h2 class="movie-hover-item">
                    <span>Sausage Party</span>
                    <br/>
                    <span>Komedie / Animatie</span>
                    <br/>
                    <a href="watch.php" >
                        <span>Film kijken</span>
                    </a>
                </h2>
            </div>
            <div class="movie-item">
                <img alt="Movie" class="othermovies" src="assets/images/paddington2.jpg">
                <h2 class="movie-hover-item">
                    <span>Paddington 2</span>
                    <br/>
                    <span>Kinderen / Komedie</span>
                    <br/>
                    <a href="watch.php" >
                        <span>Film kijken</span>
                    </a>
                </h2>
            </div>
            <div class="movie-item">
                <img alt="Movie" class="othermovies" src="assets/images/storks.jpg">
                <h2 class="movie-hover-item">
                    <span>Stronks</span>
                    <br>
                    <span>Animatie / Kinderen</span>
                    <br>
                    <a href="watch.php" >
                        <span>Film kijken</span>
                    </a>
                </h2>
            </div>

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
