<?php include "controller/register.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registeren</title>
    <link rel="icon" href="assets/images/logo-browser.png">
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>
    <div class="main-content">
        <h2>Registeren</h2>
        <p>Vul onderstaande velden in om een account aan te maken.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <!-- username -->
            <div class="form-group <?php echo (!empty($user_name_err)) ? 'has-error' : ''; ?>">
                <label class="form-label">Gebruikersnaam:</label>
                <input type="text" name="user_name" class="form-control" value="<?php echo $user_name; ?>">
                <span class="help-block"><?php echo $user_name_err; ?></span>
            </div>
            <!-- email -->
            <div class="form-group <?php echo (!empty($emaile_err)) ? 'has-error' : ''; ?>">
                <label class="form-label">Email:</label>
                <input type="text" name="email" class="form-control" value="<?php echo $email; ?>">
                <span class="help-block"><?php echo $emaile_err; ?></span>
            </div>
            <!-- Password -->
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label class="form-label">Wachtwoord:</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <!-- Confirm password -->
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label class="form-label">Bevestig Password:</label>
                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <!-- Firstname -->
            <div class="form-group <?php echo (!empty($firstname_err)) ? 'has-error' : ''; ?>">
                <label class="form-label">Voornaam:</label>
                <input type="text" name="firstname" class="form-control" value="<?php echo $firstname; ?>">
                <span class="help-block"><?php echo $firstname_err; ?></span>
            </div>
            <!-- Lastname -->
            <div class="form-group <?php echo (!empty($lastname_err)) ? 'has-error' : ''; ?>">
                <label class="form-label">Achternaam:</label>
                <input type="text" name="lastname" class="form-control" value="<?php echo $lastname; ?>">
                <span class="help-block"><?php echo $lastname_err; ?></span>
            </div>
            <!-- Payment method -->
            <div class="form-group <?php echo (!empty($payment_method_err)) ? 'has-error' : ''; ?>">
                <label class="form-label">Betaalmethode:</label>
                <input type="text" name="payment_method" class="form-control" value="<?php echo $payment_method; ?>">
                <span class="help-block"><?php echo $payment_method_err; ?></span>
            </div>
            <!-- Payment card nummber -->
            <div class="form-group <?php echo (!empty($payment_card_number_err)) ? 'has-error' : ''; ?>">
                <label class="form-label">Kaartnummer:</label>
                <input type="text" name="payment_card_number" class="form-control" value="<?php echo $payment_card_number; ?>">
                <span class="help-block"><?php echo $payment_card_number_err; ?></span>
            </div>
            <!-- Contract type -->
            <div class="form-group <?php echo (!empty($contract_type_err)) ? 'has-error' : ''; ?>">
                <label class="form-label">Contract type:</label>
                <input type="text" name="contract_type" class="form-control" value="<?php echo $contract_type; ?>">
                <span class="help-block"><?php echo $contract_type_err; ?></span>
            </div>
            <!-- Subscripton start -->
            <div class="form-group <?php echo (!empty($subscription_start_err)) ? 'has-error' : ''; ?>">
                <label class="form-label">Start datum:</label>
                <input type="text" name="subscription_start" class="form-control" value="<?php echo $subscription_start; ?>">
                <span class="help-block"><?php echo $subscription_start_err; ?></span>
            </div>
            <!-- Gender -->
            <div class="form-group <?php echo (!empty($gender_err)) ? 'has-error' : ''; ?>">
                <label class="form-label">Geslacht:</label>
                <input type="radio" name="gender" class="form-control-radio" value="<?php echo $gender; ?>">Male
                <input type="radio" name="gender" class="form-control-radio" value="<?php echo $gender; ?>">Female
                <span class="help-block"><?php echo $gender_err; ?></span>
            </div>
            <!-- Country -->
            <div class="form-group <?php echo (!empty($country_name_err)) ? 'has-error' : ''; ?>">
                <label class="form-label">Land</label>
                <select name="country_name" class="form-control">
                    <?php
                    foreach ($row as $country) {
                        echo "<option value=" . $country['country_name'] . ">" . $country['country_name'] . "</option>";
                    } ?>
                </select>
                <span class="help-block"><?php echo $country_name_err; ?></span>
            </div>


            <!-- Submit button -->
            <div class="form-group">
                <input type="submit" class="register-button" value="Submit">
            </div>
            <p>Heb je al een account? <a href="login_view.php">Login hier in</a>.</p>
        </form>
    </div>
</body>

</html>