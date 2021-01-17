<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main_container">
        <h1><?= "Hello, {$_SESSION['users']['name']}!" ?></h1>
        <a href="process.php">LOG OFF</a>
    </div>
</body>
</html>