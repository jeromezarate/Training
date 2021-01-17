<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Wall</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <section>
<?php   if(! empty($_SESSION["error"])) {
            foreach ($_SESSION["error"] as $error) {                            ?>
                <p class="error"><?= $error ?></p>
<?php       }
            unset($_SESSION["error"]);
        }
        if (! empty($_SESSION["success"])) {                                    ?>
            <p class="success"><?= $_SESSION["success"] ?></p>
<?php   }
        unset($_SESSION["success"]);                                             ?>

            <h1>Registration</h1>
            <form action="process.php" method="post">
                <input type="hidden" name="action" value="register">
                <label for="first_name">
                    <span>First Name:</span>
                    <input type="text" name="first_name">
                </label>
                <label for="last_name">
                    <span>Last Name:</span>
                    <input type="text" name="last_name">
                </label>
                <label for="email">
                    <span>Email:</span>
                    <input type="text" name="email">
                </label>
                <label for="password">
                    <span>Password:</span>
                    <input type="password" name="password">
                </label>
                <label for="confirm_password">
                    <span>Confirm Password:</span>
                    <input type="password" name="confirm_password">
                </label>
                <input type="submit" value="Register">
            </form>
        </section>
        <section>
        <h1>Login</h1>
            <form action="process.php" method="post">
                <input type="hidden" name="action" value="login">
                <label for="email">
                    <span>Email:</span>
                    <input type="text" name="email" value="jerome.jayzee.zarate@gmail.com">
                </label>
                <label for="password">
                    <span>Password:</span>
                    <input type="password" name="password" value="1234567">
                </label>
                <input type="submit" value="Login">
            </form>
        </section>
    </div>
</body>
</html>