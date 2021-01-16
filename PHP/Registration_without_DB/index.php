<?php
    session_start();
    // var_dump($_SESSION);
    // $_SESSION = array();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registration without DB</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            .container {
                border: 1px solid black;
                margin: 100px auto;
                padding: 20px;
                width: 500px;
            }
            label {
                display: block;
                margin-top: 5px;
            }
            span, input {
                display: inline-block;
                vertical-align: middle;
            }
            span + textarea {
                display: block;
            }
            span {
                width: 180px;
            }
            input {
                width: 273px;
            }
            textarea {
                width: 458px;
            }
            input[type="submit"] {
                width: 80px;
                display: block;
                margin-left: auto;
            }
            p {
                font-size: 13px;
                display: inline;
                color: red;
            }
            h1 {
                text-align: center;
            }
            .highlight {
                border: 1px solid red;
            }
    </style>
    </head>
    <body>
        <form action="process.php" method="post" class=container>
<!-- no error message -->

<!-- an error meesage -->
<?php       if (isset($_SESSION["error"])) {
                foreach ($_SESSION["error"] as $error) {                                    ?>
                    <p><?= $error ?></p>
<?php           }
            }                                                                               ?>                                                       
            <label for="email">
                <span>Email: *</span>
                <input type="email" name="email"
<?php           if (isset($_SESSION["error"]["email"])) {                                   ?>
                    <?= "class=highlight"                                                   ?>
<?php           } ?>>
            </label>
            <label for="first_name">
                <span>First Name: *</span>
                <input type="text" name="first_name"
<?php           if (isset($_SESSION["error"]["first_name"])) {                              ?>
                    <?= "class=highlight"                                                   ?>
<?php           } ?>>
            </label>
            <label for="last_name">
                <span>Last Name: *</span>
                <input type="text" name="last_name"
<?php           if (isset($_SESSION["error"]["last_name"])) {                               ?>
                    <?= "class=highlight"                                                   ?>
<?php           } ?>>
            </label>
            <label for="password">
                <span>Password: *</span>
                <input type="password" name="password"
<?php           if (isset($_SESSION["error"]["password"])) {                                ?>
                    <?= "class=highlight"                                                   ?>
<?php           } ?>>
            </label>
            <label for="confirm_password">
                <span>Confirm Password: *</span>
                <input type="password" name="confirm_password"
<?php           if (isset($_SESSION["error"]["confirm_password"])) {                        ?>
                    <?= "class=highlight"                                                   ?>
<?php           } ?>>
            </label>
            <label for="birthday">
                <span>Birthday:</span>
                <input type="text" name="birthday" placeholder="month/date/year"
<?php           if (isset($_SESSION["error"]["birthday"])) {                                ?>
                    <?= "class=highlight"                                                   ?>
<?php           } ?>>
            </label>
            <input type="submit" value="Submit">
        </form>
<?php   unset($_SESSION["error"]);                                                          ?>
    </body>

</html>