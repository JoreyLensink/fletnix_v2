<?php
// Include config bestand
require_once "connection.php";

// Definieren en initialiseren met lege waardes
$user_name = $email = $password = $confirm_password = $firstname = $lastname = $payment_method = $payment_card_number = $contract_type = $subscription_start =  $gender = $country_name = $birth_date = "";
$user_name_err = $emaile_err = $password_err = $confirm_password_err = $firstname_err = $lastname_err = $payment_method_err = $payment_card_number_err =  $contract_type_err = $subscription_start_err = $gender_err = $country_name_err = "";

// Na het verzenden van het Post Form data verwerken
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Valideer de gebruikersnaam
    if (empty(trim($_POST["user_name"]))) {
        $user_name_err = "Please enter a user_name.";
    } else {
        // Maak a select perpare statement
        $sql = "SELECT fletnix_user.userID FROM fletnix_user LEFT JOIN Customer ON fletnix_user.user_name = Customer.user_name WHERE user_name = :user_name";
        
        if ($stmt = $dbh->prepare($sql)) {
            // Combineer de varibelen met de prepared statement parameters
            $stmt->bindParam(":user_name", $param_user_name, PDO::PARAM_STR);

            // Zet de parameters
            $param_user_name = trim($_POST["user_name"]);


            // Probeer de prepared statement uit te voeren
            if ($stmt->execute()) {
                if ($stmt->rowCount() == 1) {
                    $user_name_err = "This username is already taken.";
                } else {
                    $user_name = trim($_POST["user_name"]);
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Sluit statement
            unset($stmt);
        }
    }

    // Valideer het wachtwoord
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter a password.";
    } elseif (strlen(trim($_POST["password"])) < 6) {
        $password_err = "Password must have atleast 6 characters.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Valideer bevestegings wachtwoord
    if (empty(trim($_POST["confirm_password"]))) {
        $confirm_password_err = "Please confirm password.";
    } else {
        $confirm_password = trim($_POST["confirm_password"]);
        if (empty($password_err) && ($password !== $confirm_password)) {
            $confirm_password_err = "Password did not match.";
        }
    }

    // Controleer de ingevulde waarders op errors voor het invullen in de  database
    if (empty($user_name_err) && empty($password_err) && empty($confirm_password_err)) {

        // Prepare de insert statement
        $sql = "INSERT INTO Customer(user_name, customer_mail_address, password, firstname, lastname, payment_method, payment_card_number, contract_type, subscription_start, gender, country_name) VALUES (:username, :email, :password, :firstname, :lastname, :payment_method, :payment_card_number, :contract_type, :subscription_start, :gender, :country_name)";

        if ($stmt = $dbh->prepare($sql)) {
            // Combineer de  variabelen naar de  prepared statement als parameters
        
            $stmt->bindParam(":user_name", $_POST['user_name'], PDO::PARAM_STR);
            $stmt->bindParam(":email", $_POST['email'], PDO::PARAM_STR);
            $stmt->bindParam(":password", $_POST['password'], PDO::PARAM_STR);
            $stmt->bindParam(":firstname", $_POST['firstname'], PDO::PARAM_STR);
            $stmt->bindParam(":lastname", $_POST['lastname'], PDO::PARAM_STR);
            $stmt->bindParam(":payment_method", $_POST['payment_method'], PDO::PARAM_STR);
            $stmt->bindParam(":payment_card_number", $_POST['payment_card_number'], PDO::PARAM_STR);
            $stmt->bindParam(":contract_type", $_POST['contract_type'], PDO::PARAM_STR);
            $stmt->bindParam(":subscription_start", $_POST['subscription_start'], PDO::PARAM_STR);
            $stmt->bindParam(":gender", $_POST['gender'], PDO::PARAM_STR);
            $stmt->bindParam(":country_name", $_POST['country_name'], PDO::PARAM_STR);

            // Probeer de prepared statement uit te voeren
            if ($stmt->execute()) {
                // Stuur door naar de login pagina
                header("location: login_view.php");
            } else {
                echo "Something went wrong. Please try again later.";
            }

            // Sluit het statement
            unset($stmt);
        }
    }

    // Sluit de connectie
    unset($dbh);
}

// landen ophalen
$country_list = $dbh->prepare("SELECT country_name FROM Country");
$country_list->execute();
$row = $country_list->fetchAll();

?>