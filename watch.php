<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset=utf-8>
    <title>Watch</title>
    <link rel="icon" href="assets/images/logo-browser.png">
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>
<div id="navbar">
    <a class="navbar-logo" href="index.php"><img class="logo-nav" src="assets/images/logo.png" alt="logo fletnix"></a>
    <div class="dropdown">
        <a href="movies_view.php"><div class="dropbtn">Films</div></a>
        <div  class="dropdown-content">
            <a href="movies.php#animation">Animatie</a>
            <a href="movies.php#Comdey">Humor</a>
            <a href="movies.php#Family">Famillie</a>
        </div>
    </div>
    <a class="navbar-link" href="about.php">Over ons</a>
    <a class="navbar-link" href="contact.php">Contact</a>
    <a class="navbar-link" href="subscription.php">Abonnementen</a>
    <a class="navbar-link-right" href="account.php"><img class="login-icon" src="assets/images/icon-login.png"
                                                          alt="icon person"></a>
</div>
<div id="background">
    <main class="main-watch">
        <video id="video" controls>
            <source src="assets/movie-trailer.mp4" type="video/mp4">
        </video>
    </main>
    <div class="movie-infomation">
        <div class="info-left">
            <h3>Samenvatting:</h3>
            <p>Miguel droomt ervan om een succesvol muzikant te worden. Ondanks dat muziek al generaties lang uit zijn
                familie wordt verbannen, is het Miguel’s grootste droom om net zo groot te worden als zijn idool,
                Ernesto de la Cruz. Wanhopig om zijn talent te bewijzen, belandt Miguel op mysterieuze wijze in een
                prachtige en kleurrijke wereld.</p>
        </div>
        <div class="info-right">
            <h3>Informatie:</h3>
            <p>Coco is een stereoscopische digitale animatiefilm uit 2017, geproduceerd door Pixar Animation Studios en
                gedistribueerd door Walt Disney Pictures. De film heeft als thema het Mexicaanse feest Dag van de
                Doden.</p>
            <p><b>Releasedatum:</b> 27 oktober 2017 (Mexico)</p>
            <p><b>Directeuren:</b> Adrian Molina, Lee Unkrich</p>
            <p><b>Duur:</b> 1:49</p>
            <p><b>Cast:</b>Anthony Gonzalez, Benjamin Braat, Gael Garíca Bernal, Lee Unkrich</p>
            <p><b>Muziek gecomponeerd door:</b> Michael Giacchino</p>
            <p><b>Regisseur:</b> John Lasseter, Darla K. Anderson</p>
        </div>
    </div>
<!--    cast, duur, regiseur, -->

</div>
</body>
</html>
