<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Qouting Dojo</title>
        <link rel="stylesheet" href="style.css">
        <style>
            <?= include("style.css") ?>
        </style>
    </head>
    <body>
        <div class="main_container">
            <h1>Here are the awesome qoutes!</h1>
<?php       foreach ($_SESSION["users"] as $user) {
                $date = date_format(date_create($user['created_at']), "h:i a F j Y");   ?>
                <div>
                    <p><?= "'{$user['post']}'" ?></p>
                    <p><?= "-{$user['name']} at {$date}" ?></p>
                </div>
<?php       }                                                       ?>
        </div>
    </body>
</html>