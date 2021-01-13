<?php
// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: index.php");
    exit;
}

// Include config file
require_once "connection.php";

// Define variables and initialize with empty values
$email = $password = "";
$email_err = $password_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Check if username is empty
    if (empty(trim($_POST["email"]))) {
        $email_err = "Please enter email.";
    } else {
        $email = trim($_POST["email"]);
    }

    // Check if password is empty
    if (empty(trim($_POST["password"]))) {
        $password_err = "Vul een wachtwoord in.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Validate credentials
    if (empty($email_err) && empty($password_err)) {
        // Prepare a select statement
        // Data die je meeneemt van gebruiker
        $sql = "SELECT customer_mail_address, password user_name FROM Customer WHERE customer_mail_address = :email";


        if ($stmt = $dbh->prepare($sql)) {
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":email", $param_email, PDO::PARAM_STR);
            // $stmt->bindParam(":email", $_POST['email'], PDO::PARAM_STR);
            // Set parameters
            $param_email = trim($_POST["email"]);

            // Attempt to execute the prepared statement
            if ($stmt->execute()) {
                // Check if email exists, if yes then verify password
                $row = $stmt->fetchAll();
                if (count($row) == 1) {

                    $email = $row[0]["customer_mail_address"];
                    if ($password = $row[0]["password"]) {
                        // if(password_verify($password, $hashed_password)){
                        // Password is correct, so start a new session
                        session_start();

                        // Store data in session variables
                        $_SESSION["loggedin"] = true;
                        $_SESSION["email"] = $email;
                        $_SESSION["user_name"] = $user_name;
                        


                        // Redirect user to welcome page
                        header("location: index.php");
                    } else {
                        // Display an error message if password is not valid
                        $password_err = "Geen geldig wachtwoord.";
                    }
                } else {
                    // Display an error message if email doesn't exist
                    $email_err = "Geen account gevonden met dat emailaddres.";
                    // }
                }
            } else {
                echo "Oeps! Er ging iets mis. Probeer het later opnieuw.";
            }

            // Close statement
            unset($stmt);
        }
    }

    // Close connection
    unset($dbh);
}
?>
