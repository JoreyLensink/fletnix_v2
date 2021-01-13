<?php include 'assets/header.php'; ?>

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
    <div id="account-submit">
        <input type="submit" value="Opslaan">
    </div>
</main>
</div>
</body>

</html>