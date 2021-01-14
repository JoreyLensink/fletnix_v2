<?php session_start(); ?>

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
                    <a href="movies_view.php#animatie">Animatie</a>
                    <a href="movies_view.php#humor">Humor</a>
                    <a href="movies_view.php#familie">Famillie</a>
                </div>
            </div>
            <a class="navbar-link" href="about.php">Over ons</a>
            <a class="navbar-link" href="contact.php">Contact</a>
            <?php
            // Er is een sessie en laat account knop zien
        if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
            // echo "<a class='navbar-link-right' href='account.php'><img class='login-icon' src='assets/images/icon-login.png' alt='icon person'></a>";
            echo "<a class='session-register' href='controller/logout.php'>Uitloggen<a>";
        } else {
            // Er is geen sessie en laat registreen knop zien
            echo "<a class='session-register' href='login_view.php'>Inloggen</a>";
        }

        ?>
        </div>

        