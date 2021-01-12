<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Inloggen</title>
    <link rel="icon" href="assets/images/logo-browser.png">
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
<div id="background">
    <!-- Navigatie balk -->
    <div id="navbar">
        <a class="navbar-logo" href="index.php"><img class="logo-nav" src="assets/images/logo.png" alt="logo fletnix"></a>
        <div class="dropdown">
            <a href="movies_view.php"><div class="dropbtn">Films</div></a>
            <div  class="dropdown-content">
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
    <header class="header-account">
        <h2>Account gegevens</h2>
    </header>
    <main class="main-account">
        <label for="fname">Voornaam:</label>
        <input type="text" id="fname" name="fname" value="Voornaam"><br>
        <label for="lname">Achternaam:</label>
        <input type="text" id="lname" name="lname" value="Achternaam"><br><br>
        <label for="email">Huidige E-mail:</label>
        <input type="email" id="email" value="Huidige email"><br>
        <label for="new-email">Nieuwe E-mail:</label>
        <input type="email" id="new-email" value="Nieuwe email"><br><br>
        <label for="password">Huidige wachtwoord:</label>
        <input type="password" id="password"><br>
        <label for="new-password">Nieuwe wachtwoord:</label>
        <input type="password" id="new-password"><br>
        <label for="new-password-repeat">Nieuw wachtwoord herhalen:</label>
        <input type="password" id="new-password-repeat">

        <h4>Gegevens Opslaan</h4>
        <div  id="account-submit">
            <input type="submit" value="Opslaan" >
        </div>
    </main>
</div>
</body>
</html>