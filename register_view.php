<?php include "controller/register.php"; ?>
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
            <select name="cars" id="cars">
                <option value="volvo">Volvo</option>
            </select>
            <!-- Country -->

                <label>Country</label>
                <input type="text" name="country_name" class="form-control" value="<?php echo $country_name; ?>">
                <span class="help-block"><?php echo $country_name_err; ?></span>
            </div>


            <!-- Submit button -->
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
            <p>Already have an account? <a href="login_view.php">Login here</a>.</p>
        </form>
    </div>
</body>

</html>
