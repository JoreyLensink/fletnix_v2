<?php include"controller/login.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="icon" href="assets/images/logo-browser.png">
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>
    <div class="main-content">
        <h2>Login</h2>
        <p>Vul hieronder je gegevensin.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                <label class="form-label-login">Email</label>
                <input type="text" name="email" class="form-control" value="<?php echo $email; ?>">
                <span class="help-block"><?php echo $email_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label class="form-label-login">Wachtwoord</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="login-button" value="Login">
            </div>
            <p>Nog geen account? <a href="register_view.php">Registreer je nu!</a>.</p>
        </form>
    </div>
</body>

</html>