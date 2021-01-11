<?php
include 'controller/movies.php';

?>

<!DOCTYPE html>

<html lang="nl">

<head>
    <meta charset=utf-8>
    <title>Films</title>
    <link rel="icon" href="assets/images/logo-browser.png">
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>
   <div id="background">
    <Navigatie balk> 
    <div id="navbar">
        <a class="navbar-logo" href="index.html"><img class="logo-nav" src="assets/images/logo.png" alt="logo fletnix"></a>
        <div class="dropdown">
            <a href="movies.html"><div class="dropbtn">Films</div></a>
            <div  class="dropdown-content">
                <a href="movies.html#animation">Animatie</a>
                <a href="movies.html#adventure">Avontuur</a>
                <a href="movies.html#humour">Humor</a>
            </div>
        </div>
        <a class="navbar-link" href="about.html">Over ons</a>
        <a class="navbar-link" href="contact.html">Contact</a>
        <a class="navbar-link" href="subscription.html">Abonnementen</a>
        <a class="navbar-link-right" href="account.html"><img class="login-icon" src="assets/images/icon-login.png"
                                                              alt="icon person"></a> 
    </div> 

    <div class="main">
        <div class="movie-category">
        <?php
            echo '<h1>' . "GENRE" . '</h1>';
             ?>
            <div class="movie-item">
                <img alt="movie" class="othermovies" src="assets/images/COCO.jpg">
                <h2 class="movie-hover-item">
                <?php
               echo '<span>' . ValueMovie($dbh, 'title') . '</span>' . '<br>';
               echo '<span>' . "$" . ValueMovie($dbh, 'price') . '</span>' ;
                 ?>
                    <br/>
                    <span>Animatie</span>
                    <br/>
                    <a href="watch.html">
                        <span>Film kijken</span>
                    </a>
                </h2>
            </div>
        </div>
    </div>

</div>


</body>
</html>

