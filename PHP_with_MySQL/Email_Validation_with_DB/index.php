<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Email Validation with DB</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <form action="process.php" method="post">
<?php       if (isset($_SESSION["error"])) {        ?>
                <p><?= $_SESSION["error"] ?></p>
<?php           }
            unset($_SESSION["error"]);              ?>
            <label for="email">
                <span>Email:</span>
                <input type="text" name="email">
            </label>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>