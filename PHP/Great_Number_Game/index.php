<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Great Number Game</title>
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            .container {
                text-align: center;
                margin: 50px auto;
                line-height: 50px;
            }
            p {
                font-size: 25px;
            }
            input[type="text"] {
                width: 80px;
                height: 20px;
            }
            input {
                display: block;
                margin: 5px auto;
                padding: 5px;
            }
            .error {
                color: red;
            }
            .won, .lost {
                width: 300px;
                height: 300px;
                margin: 0 auto;
            }
            .lost {
                background-color: red;
                color: white;
                font-size: 30px;
            }
            .won {
                background-color: green;
            }
            .lost p {
                margin: auto 0;
            }

        </style>
    </head>
    <body>
        <div class="container">
            <h1>Welcome to the Great Number Game!</h1>
            <p>I am thinking a number between 1 and 100</p>
            <p>Take a guess!</p>
<?php       if (isset($_SESSION["error"])) {                                    ?>
                <p class="error"><?= $_SESSION["error"] ?></p>
<?php       }
            unset($_SESSION["error"]);
            if (isset($_SESSION["guess_error"])) {                              ?>
                <p class="lost"><?= $_SESSION["guess_error"] ?></p>
<?php       }
            unset($_SESSION["guess_error"]);
            if (isset($_SESSION["success"])) {                                  ?>
                <div class="won">
                    <p><?= $_SESSION["success"] ?></p>
                    <form action="check.php" method="post">
                        <input type="hidden" name="action" value="play_again">
                        <input type="submit" value="Play again">
                    </form>
                </div>
<?php       }
            else {                                                              ?>
            <form action="check.php" method="post">
                <input type="text" name="guess">
                <input type="submit" value="Submit">
            </form>
<?php       }                                                                   ?>
        </div>
    </body>
</html>