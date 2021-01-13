<?php
// Sessie initialiseren
session_start();

// Kijken of de gebruiker al ingelogd is, zo ja doorsturen naar de index pagina
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: index.php");
    exit;
}

// Include config bestand
require_once "connection.php";

// Definieren en initialiseren met lege waardes
$email = $password = "";
$email_err = $password_err = "";

// Na het verzenden van het Post Form data verwerken
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Kijken of de gebruikersnaam leeg is
    if (empty(trim($_POST["email"]))) {
        $email_err = "Please enter email.";
    } else {
        $email = trim($_POST["email"]);
    }

    // Kijken of het wachtwoord niet leeg is
    if (empty(trim($_POST["password"]))) {
        $password_err = "Vul een wachtwoord in.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Valideren van waardes
    if (empty($email_err) && empty($password_err)) {
        
        // Prepare select statment
        $sql = "SELECT customer_mail_address, password FROM Customer WHERE customer_mail_address = :email";

        
        if ($stmt = $dbh->prepare($sql)) {
            // Zet variabelen tot een prepared statement als parameter
            $stmt->bindParam(":email", $param_email, PDO::PARAM_STR);
           
            // Parameters zetten
            $param_email = trim($_POST["email"]);

            // Probeen de prepared statement uit te voeren
            if ($stmt->execute()) {
                // Kijken of het ingevulde email voorkomt, zo ja ga door naar wachtwoord
                $row = $stmt->fetchAll();
                if (count($row) == 1) {

                    $email = $row[0]["customer_mail_address"];
                    if ($password = $row[0]["password"]) {
                        // Door pashword_hash werd het wachtwoord 60 karakters, de DB heeft op het PW veld een max van 50.
                        // Dit heb ik opgelost door de laatste 10 karakter (Die niet in de DB komen) eraf te halen van het PW na de Hash.
                        // Dit kan fouten veroorzaken wanneer het wachtwoord met hash wél past, of wanneer  

                        // 
                        // if(password_verify($password, $hashed_password)){
                        // Als het wachtwoord klopt, start een session
                        session_start();

                        // Sla de data op in sesion variabels
                        $_SESSION["loggedin"] = true;
                        $_SESSION["email"] = $email;
                        // $_SESSION["user_name"] = $user_name;
                        


                        // Stuurd de gebruiker naar de index pagina
                        header("location: index.php");
                    } else {
                        // Geef een foutmelding weer wanneer het wachtwoord niet klopt
                        $password_err = "Geen geldig wachtwoord.";
                    }
                } else {
                    // Geef een foutmelding weer wanneer de gebruikersnaam niet klopt
                    $email_err = "Geen account gevonden met dat emailaddres.";
                
                }
            } else {
                echo "Oeps! Er ging iets mis. Probeer het later opnieuw.";
            }

            // Sluit statement
            unset($stmt);
        }
    }

    // Sluit connectie
    unset($dbh);
}