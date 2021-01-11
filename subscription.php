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
        <a class="navbar-logo" href="index.html"><img class="logo-nav" src="assets/images/logo.png" alt="logo fletnix"></a>
        <div class="dropdown">
            <a href="movies.html">
                <div class="dropbtn">Films</div>
            </a>
            <div class="dropdown-content">
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
    <header class="header-subscription">
        <h1> Abonnement aanvragen</h1>
    </header>
    <main class="main-subscription">
        <h2>1. Selecteer een abonnement</h2>
        <h4> Abonnement 1:</h4>
        <ul>
            <li> Je kan op 1 aparaat tegelijkertijd kijken</li>
            <li> Kosten: €4,99 per maand</li>
        </ul>
        <h4> Abonnement 2:</h4>
        <ul>
            <li> Je kan op 2 aparaten tegelijkertijd kijken</li>
            <li> Je kan op 1 aparaat downloads opslaan</li>
            <li> Je kan in HD films bekijken</li>
            <li> Kosten: €6,99 per maand</li>
        </ul>
        <h4> Abonnement 3:</h4>
        <ul>
            <li> Je kan op 4 aparaten tegelijkertijd kijken</li>
            <li> Je kan op 2 aparaat downloads opslaan</li>
            <li> Je kan in Ultra HD films bekijken</li>
            <li> Kosten: €9,99 per maand</li>
        </ul>
        <label for="subscriptions">Maak een keuze:</label>
        <select name="subscriptions" id="subscriptions">
            <option value="Abonnement-1">Abonnement 1</option>
            <option value="Abonnement-2">Abonnement 2</option>
            <option value="Abonnement-3">Abonnement 3</option>
        </select>
        <br><br>
        <h2>2. Gegevens invoeren</h2>
        <label for="fname">Voornaam:</label>
        <input type="text" id="fname" name="fname"><br><br>
        <label for="lname">Achternaam:</label>
        <input type="text" id="lname" name="lname"><br><br>
        <label for="email">E-mail:</label>
        <input type="email" id="email" value="voorbeeld@voorbeeld.nl"><br><br>
        <label for="country">Land:</label>
        <input type="text" id="country" value="Nederland"><br><br>
        <label for="birthdate">Geboortedatum:</label>
        <input type="date" id="birthdate"><br><br>
        <label for="ibannummer">Rekeningnummer:</label>
        <input type="text" id="ibannummer" value="NL00 BANK 0000 0000 00"><br><br>
        <label for="username">Gebruikersnaam:</label>
        <input type="text" id="username"><br><br>
        <label for="password">Wachtwoord:</label>
        <input type="password" id="password"><br><br>
        <label for="password-repeat">Wachtwoord herhalen:</label>
        <input type="password" id="password-repeat"><br><br>

        <h2>3. Gegevens verzenden</h2>
        <div id="subscription-submit">
            <input type="submit" value="Versturen">
        </div>
    </main>

</div>

</body>
</html>