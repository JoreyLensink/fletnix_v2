<?php
// Include config file
require_once "controller/connection.php";

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
        if (empty($password_err) && ($password != $confirm_password)) {
            $confirm_password_err = "Password did not match.";
        }
    }

    // Check input errors before inserting in database
    if (empty($username_err) && empty($password_err) && empty($confirm_password_err)) {

        // Prepare an insert statement
        $sql = "INSERT INTO Customer(user_name, customer_mail_address, password, firstname, lastname, payment_method, payment_card_number, contract_type, subscription_start, gender, country_name) VALUES (:username, :email, :password, :firstname, :lastname, :payment_method, :payment_card_number, :contract_type, :subscription_start, :gender, :country_name)";

        if ($stmt = $dbh->prepare($sql)) {
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
            $stmt->bindParam(":email", $param_email, PDO::PARAM_STR);
            $stmt->bindParam(":password", $param_password, PDO::PARAM_STR);
            $stmt->bindParam(":firstname", $param_firstname, PDO::PARAM_STR);
            $stmt->bindParam(":lastname", $param_lastname, PDO::PARAM_STR);
            $stmt->bindParam(":payment_method", $param_payment_method, PDO::PARAM_STR);
            $stmt->bindParam(":payment_card_number", $param_payment_card_number, PDO::PARAM_STR);
            $stmt->bindParam(":contract_type", $param_contract_type, PDO::PARAM_STR);
            $stmt->bindParam(":subscription_start", $param_subscription_start, PDO::PARAM_STR);
            $stmt->bindParam(":gender", $param_gender, PDO::PARAM_STR);
            $stmt->bindParam(":country_name", $param_country_name, PDO::PARAM_STR);

            // Set parameters
            $param_username = $username;
            $param_email = $email;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            echo $password;
            echo strlen($param_password);
            // echo $param_password;
            die();
            $param_firstname = $firstname;
            $param_lastname = $lastname;
            $param_payment_method = $payment_method;
            $param_payment_card_number = $payment_card_number;
            $param_contract_type = $contract_type;
            $param_subscription_start = $subscription_start;
            $param_gender = $gender;
            $param_country_name = $country_name;


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
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body {
            font: 14px sans-serif;
        }

        .wrapper {
            width: 350px;
            padding: 20px;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <!-- username -->
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>
            <!-- email -->
            <div class="form-group <?php echo (!empty($emaile_err)) ? 'has-error' : ''; ?>">
                <label>Email</label>
                <input type="text" name="email" class="form-control" value="<?php echo $email; ?>">
                <!-- <span class="help-block"><?php echo $emaile_err; ?></span> -->
            </div>
            <!-- Password -->
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <!-- Confirm password -->
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <!-- Firstname -->
            <div class="form-group <?php echo (!empty($firstname_err)) ? 'has-error' : ''; ?>">
                <label>Firstname</label>
                <input type="text" name="firstname" class="form-control" value="<?php echo $firstname; ?>">
                <span class="help-block"><?php echo $firstname_err; ?></span>
            </div>
            <!-- Lastname -->
            <div class="form-group <?php echo (!empty($lastname_err)) ? 'has-error' : ''; ?>">
                <label>Lastname</label>
                <input type="text" name="lastname" class="form-control" value="<?php echo $lastname; ?>">
                <span class="help-block"><?php echo $lastname_err; ?></span>
            </div>
            <!-- Payment method -->
            <div class="form-group <?php echo (!empty($payment_method_err)) ? 'has-error' : ''; ?>">
                <label>Betaalmethode</label>
                <input type="text" name="payment_method" class="form-control" value="<?php echo $payment_method; ?>">
                <span class="help-block"><?php echo $payment_method_err; ?></span>
            </div>
            <!-- Payment card nummber -->
            <div class="form-group <?php echo (!empty($payment_card_number_err)) ? 'has-error' : ''; ?>">
                <label>Kaartnummer</label>
                <input type="text" name="payment_card_number" class="form-control" value="<?php echo $payment_card_number; ?>">
                <span class="help-block"><?php echo $payment_card_number_err; ?></span>
            </div>
            <!-- Contract type -->
            <div class="form-group <?php echo (!empty($contract_type_err)) ? 'has-error' : ''; ?>">
                <label>Contract type</label>
                <input type="text" name="contract_type" class="form-control" value="<?php echo $contract_type; ?>">
                <span class="help-block"><?php echo $contract_type_err; ?></span>
            </div>
            <!-- Subscripton start -->
            <div class="form-group <?php echo (!empty($subscription_start_err)) ? 'has-error' : ''; ?>">
                <label>Contract type</label>
                <input type="text" name="subscription_start" class="form-control" value="<?php echo $subscription_start; ?>">
                <span class="help-block"><?php echo $subscription_start_err; ?></span>
            </div>
            <!-- Gender -->
            <div class="form-group <?php echo (!empty($gender_err)) ? 'has-error' : ''; ?>">
                <label>Gender</label>
                <input type="text" name="gender" class="form-control" value="<?php echo $gender; ?>">
                <span class="help-block"><?php echo $gender_err; ?></span>
            </div>
            <!-- Country -->
            <div class="form-group <?php echo (!empty($country_name_err)) ? 'has-error' : ''; ?>">
                <label>Gender</label>
                <input type="text" name="country_name" class="form-control" value="<?php echo $country_name; ?>">
                <span class="help-block"><?php echo $country_name_err; ?></span>
            </div>


            <!-- Submit button -->
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
    </div>
</body>

</html>
