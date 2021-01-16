<?php
    session_start();
    $number = 55;
    if (isset($_POST["action"])) {
        unset($_SESSION["success"]);
        header("Location: index.php");
    }
    else if (empty($_POST["guess"])) {
        $_SESSION["error"] = "You did not put any guess!";
        header("Location: index.php");
    }
    else if ($_POST["guess"] > $number) {
        $_SESSION["guess_error"] = "Too high!";
        header("Location: index.php");
    }
    else if ($_POST["guess"] < $number) {
        $_SESSION["guess_error"] = "Too low!";
        header("Location: index.php");
    }
    else if ($_POST["guess"] == $number) {
        $_SESSION["success"] = "{$number} is the number!";
        header("Location: index.php");
        $count++;
    }
?>