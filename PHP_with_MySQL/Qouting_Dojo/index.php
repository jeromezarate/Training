<?php session_start(); ?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Quoting Dojo</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <style>
            <?= include("style.css"); ?>
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Welcome to Quoting Dojo</h1>
            <section>
<?php           if(isset($_SESSION["error"])) {
                    foreach ($_SESSION["error"] as $error) {                                ?>
                        <p><?= $error ?></p>
<?php               }
                }
                unset($_SESSION["error"]);                                                  ?>
            </section>
            <form action="process.php" method="post">
                <label for="name">
                    <span>Your Name:</span>
                    <input type="text" name="name">
                </label>
                <label for="post">
                    <span>Your qoute:</span>
                    <textarea name="post"></textarea>
                </label>
                <input type="submit" value="Add my qoute!">
                <input type="submit" value="Skip to qoutes!" name="skip">
            </form>
        </div>
    </body>
</html>