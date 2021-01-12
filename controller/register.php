<?php
// Include config file
require_once "connection.php";

// Define variables and initialize with empty values
$username = $email = $password = $confirm_password = $firstname = $lastname = $payment_method = $payment_card_number = $contract_type = $subscription_start =  $gender = $country_name = $birth_date = "";
$username_err = $emaile_err = $password_err = $confirm_password_err = $firstname_err = $lastname_err = $payment_method_err = $payment_card_number_err =  $contract_type_err = $subscription_start_err = $gender_err = $country_name_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate username
    if (empty(trim($_POST["username"]))) {
        $username_err = "Please enter a username.";
    } else {
        // Prepare a select statement
        $sql = "SELECT fletnix_user.userID FROM fletnix_user LEFT JOIN Customer ON fletnix_user.username = Customer.user_name WHERE username = :username";
        // customer_mail_address, lastname, firstname, payment_method, payment_card_number, contract_type, subscription_start, user_name, password, country_name, gender, birth_date


        if ($stmt = $dbh->prepare($sql)) {
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);




            // Set parameters
            $param_username = trim($_POST["username"]);


            // Attempt to execute the prepared statement
            if ($stmt->execute()) {
                if ($stmt->rowCount() == 1) {
                    $username_err = "This username is already taken.";
                } else {
                    $username = trim($_POST["username"]);
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            unset($stmt);
        }
    }

    // Validate password
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter a password.";
    } elseif (strlen(trim($_POST["password"])) < 6) {
        $password_err = "Password must have atleast 6 characters.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Validate confirm password
    if (empty(trim($_POST["confirm_password"]))) {
        $confirm_password_err = "Please confirm password.";
    } else {
        $confirm_password = trim($_POST["confirm_password"]);
        if (empty($password_err) && ($password !== $confirm_password)) {
            $confirm_password_err = "Password did not match.";
        }
    }

    // Check input errors before inserting in database
    if (empty($username_err) && empty($password_err) && empty($confirm_password_err)) {

        // Prepare an insert statement
        $sql = "INSERT INTO Customer(user_name, customer_mail_address, password, firstname, lastname, payment_method, payment_card_number, contract_type, subscription_start, gender, country_name) VALUES (:username, :email, :password, :firstname, :lastname, :payment_method, :payment_card_number, :contract_type, :subscription_start, :gender, :country_name)";

        if ($stmt = $dbh->prepare($sql)) {
            // Bind variables to the prepared statement as parameters
        
            $stmt->bindParam(":username", $_POST['username'], PDO::PARAM_STR);
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

            // Attempt to execute the prepared statement
            if ($stmt->execute()) {
                // Redirect to login page
                header("location: login_view.php");
            } else {
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            unset($stmt);
        }
    }

    // Close connection
    unset($dbh);
}

// landen ophalen



?>