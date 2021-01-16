<?php
    session_start();
    date_default_timezone_set("Asia/Manila");
    $date = date("M d Y g:s A");
    $activities = array();
    $location = $_POST["location"];
    if (isset($location)) {
        if ($location == "farm") {
            $gold = rand(10, 20);
            $_SESSION["gold"] += $gold;
        }
        else if ($location == "cave") {
            $gold = rand(5, 10);
            $_SESSION["gold"] += $gold;
        }
        else if ($location == "house") {
            $gold = rand(2, 5);
            $_SESSION["gold"] += $gold;
        }
        else if ($location == "casino") {
            $gold = rand(-50, 50);
            $_SESSION["gold"] += $gold;
        }
        if (empty($_SESSION["message"])) {
            $_SESSION["message"] = array();
        }
        $activities["location"] = $location;
        $activities["gold"] = $gold;
        $activities["date"] = $date;
        array_push($_SESSION["message"], $activities);
        var_dump($_SESSION["message"]);
    }
    header("Location: index.php");
?>