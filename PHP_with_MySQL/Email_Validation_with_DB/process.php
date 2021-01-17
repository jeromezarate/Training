<?php
    session_start();
    require_once("connect.php");
    $checkEmail = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
    if (empty($_POST["email"]) || ! $checkEmail) {
        $_SESSION["error"] = "Please enter a valid email!";
        header("Location: index.php");
    }
    else if ($checkEmail) {
        $query = "  INSERT INTO emails (email, created_at)
                    VALUES('{$_POST['email']}', NOW());";
        $insertEmail = run_mysql_query($query);
        $query = "  SELECT *
                    FROM emails
                    ORDER BY id DESC;";
        $emails = fetch_all($query);
        $_SESSION["emails"] = $emails;
        header("Location: success.php");
    }
?>