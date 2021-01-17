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
        <div class="container">
<?php   if (isset($_SESSION["emails"])) {                                                       ?>
            <p>The email address you entered <?= $_SESSION["emails"][0]["email"] ?> is a VALID email address! Thank you!</p>
            <h4>Email Address Entered</h4>
            <div>
<?php       foreach ($_SESSION["emails"] as $emails) {
                $date = date_format(date_create($emails['created_at']), "m/d/y h:iA")           ?>
                <p><?= $emails['email']?></p>
                <p><?= $date ?></p>
<?php       }                                                                                   ?>
            </div>
<?php   }                                                                                       ?>
        </div>
    </body>
</html>