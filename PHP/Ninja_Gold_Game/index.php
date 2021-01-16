<?php
    session_start();
    // var_dump($_SESSION);
    // $_SESSION = array();
    if ($_SESSION == NULL) {
        $_SESSION["gold"] = 0;
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ninja Gold Game</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            .container {
                margin-top: 50px;
                padding: 0;
            }
            h2, h2+div {
                display: inline-block;
                vertical-align: middle;
            }
            h2+div {
                border: 1px solid black;
                width: 200px;
                margin-left: 30px;
                text-align: center;
                font-size: 30px;
            }
            .row {
                margin-left: 0;
                width: 960px;
            }
            form {
                border: 1px solid black;
                margin-top: 20px;
                padding: 10px;
                text-align: center;
            }
            form~form {
                margin-left: 20px;
            }
            form p {
                font-size: 27px;
                height: 90px;
            }
            h4 {
                margin-top: 10px;
            }
            h4+div {
                width: 940px;
                height: 200px;
                border: 1px solid black;
                line-height: 8px;
                overflow: scroll;
            }
            h4+div p {
                margin: 10px 0 0 10px;
            }
            .gain {
                color: green;
            }
            .lost {
                color: red;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h2>Your Gold:</h2>
            <div><?= $_SESSION["gold"] ?></div>
            <div class="row">
                <form action="process.php" method="post" class="col-sm">
                    <h3>Farm</h3>
                    <p>(earns 10 - 20 golds)</p>
                    <input type="hidden" name="location" value="farm">
                    <input type="submit" value="Find Gold!">
                </form>
                <form action="process.php" method="post" class="col-sm">
                    <h3>Cave</h3>
                    <p>(earns 5 - 10 golds)</p>
                    <input type="hidden" name="location" value="cave">
                    <input type="submit" value="Find Gold!">
                </form>  
                <form action="process.php" method="post" class="col-sm">
                    <h3>House</h3>
                    <p>(earns 2 - 5 golds)</p>
                    <input type="hidden" name="location" value="house">
                    <input type="submit" value="Find Gold!">
                </form>  
                <form action="process.php" method="post" class="col-sm">
                    <h3>Casino</h3>
                    <p>(earns/takes 0 - 50 golds)</p>
                    <input type="hidden" name="location" value="casino">
                    <input type="submit" value="Find Gold!">
                </form>
            </div>
            <h4>Activities:</h4>
            <div>
<?php       if (isset($_SESSION["message"])) {
                for ($i = 0; $i < count($_SESSION["message"]); $i++) {
                    if ($_SESSION["message"][$i]["gold"] >= 0) {
                        $color = "gain";
                        $comment = " ";
                    }
                    else {
                        $color = "lost";
                        $comment = ".. Ouch..";
                    } ?>
                <p class="<?=$color?>"><?= "You enter a {$_SESSION['message'][$i]['location']} and earned {$_SESSION['message'][$i]['gold']} golds.{$comment} ({$_SESSION['message'][$i]['date']})" ?></p>
<?php           }
            } ?>
            </div>
        </div>
    </body>
</html>