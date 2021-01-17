<?php
    session_start();
    require_once("connect.php");
    $action = $_POST["action"];
    if(isset($action) && $action == "register") {
        registration($_POST);
    }
    else if (isset($action) && $action == "login"){
        login($_POST);
    }
    else {
        session_destroy();
        header("Location: index.php");
    }
    /* ---------- REGISTRATION ---------- */
    function checkName($name) {
        if (empty($name)) {
            $_SESSION["error"]["empty"] = "Make sure you fill up all the fields.";
        }
        else {
            $name_array = str_split($name);
            for ($i = 0; $i < count($name_array); $i++) {
                if (is_numeric($name_array[$i])) {
                    $_SESSION["error"]["name"] = "Name should not contain numbers or special character.";
                }
            }
        }
    }

    function registration($data) {
        checkName($data["first_name"]);
        checkName($data["last_name"]);
        $checkEmail = filter_var($data["email"], FILTER_VALIDATE_EMAIL);
        if (empty($data["email"]) || ! $checkEmail) {
            $_SESSION["error"]["empty"] = "Please enter a valid email!";
        }
        else {
            $email = escape_this_string($data['email']);
            $query = "  SELECT *
                        FROM users
                        WHERE users.email = '{$email}';";
            $user = fetch_all($query);
            if (!empty($user)) {
                $_SESSION["error"]["email"] = "Email already exists!";
            }
        }
        if (empty($data["password"])) {
            $_SESSION["error"]["password"] = "Make sure you fill up all the fields.";
        }
        else if (strlen($data["password"]) < 6) {
            $_SESSION["error"]["password"] = "Make sure that your password is more than 6 characters.";
        }
        else if ($data["password"] != $data["confirm_password"]) {
            $_SESSION["error"]["confirm_password"] = "Password mismatch";
        }
        // adding to database
        if (!empty( $_SESSION["error"])) {
            header("Location: index.php");
        }
        else {
            $first_name = escape_this_string($data["first_name"]);
            $last_name = escape_this_string($data["last_name"]);
            $email = escape_this_string($data["email"]);
            $password = escape_this_string($data["password"]);
            $salt = bin2hex(openssl_random_pseudo_bytes(22));
            $encrypted_password = md5($password . '' . $salt);
            $query = "  INSERT INTO users (first_name, last_name, email, password, created_at, updated_at, salt)
                        VALUES ('{$first_name}', '{$last_name}', '{$email}', '{$encrypted_password}', NOW(), NOW(), '{$salt}');";
            run_mysql_query($query);
            $_SESSION["message"] = "User successfully created!";
            header("Location: index.php");
        } 
    }

    function login($data) {
        $email = escape_this_string($data['email']);
        $password = escape_this_string($data['password']);
        $query = "  SELECT *
                    FROM users
                    WHERE users.email = '{$email}';";
        $user = fetch_all($query);
        if (!empty($user)) {
            $encrypted_password = md5($password . '' . $user[0]['salt']);
            if($user[0]['password'] == $encrypted_password) {
                $_SESSION["users"]["name"] = "{$user[0]['first_name']} {$user[0]['last_name']}";
                header("Location: main.php");
            }
            else {
                $_SESSION["error"]["login"]= "Users can't find";
                header("Location: index.php");
            }
        }
        else {
            $_SESSION["error"]["login"]= "Users can't find";
            header("Location: index.php");
        }
    }
?>