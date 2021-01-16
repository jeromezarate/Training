<?php
    session_start();
    // var_dump($_POST);
    $email = $_POST["email"];
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    $birthday = $_POST["birthday"];
    
    if (empty($email)) {
        $_SESSION["error"]["email"] = "Please enter your a valid email.";
    }
    if (empty($first_name)) {
        $_SESSION["error"]["first_name"] = "Please enter your first name. ";
    }
    else {
        $name_array = str_split($first_name);
        for ($i = 0; $i < count($name_array); $i++) {
            if (is_numeric($name_array[$i])) {
                $_SESSION["error"]["first_name"] = "Please enter a valid first name. ";
            }
        }
    }
    if (empty($last_name)) {
        $_SESSION["error"]["last_name"] = "Please enter your last name. ";
    }
    else {
        $name_array = str_split($last_name);
        for ($i = 0; $i < count($name_array); $i++) {
            if (is_numeric($name_array[$i])) {
                $_SESSION["error"]["last_name"] = "Please enter a valid last name. ";
            }
        }
    }
    if (empty($password)) {
        $_SESSION["error"]["password"] = "Please enter your password. ";
    }
    else if (strlen($password) < 6) {
        $_SESSION["error"]["password"] = "Please make sure that your password is more than 6 characters.";
    }

    if (empty($confirm_password)) {
        $_SESSION["error"]["confirm_password"] = "Please confirm password. ";
    }
    else if ($password != $confirm_password) {
        $_SESSION["error"]["confirm_password"] = "The confirmation password you entered was different from password. ";
    }

    if (!empty($birthday)) {
        $birthday_array = explode("/", $birthday);
        if (!checkdate($birthday_array[0], $birthday_array[1], $birthday_array[2])) {
            $_SESSION["error"]["birthday"] = "Please follow the format in entering birthday.";
        }
    }
    header("Location: index.php")
?>