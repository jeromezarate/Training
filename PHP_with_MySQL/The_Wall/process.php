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
    else if (isset($action) && $action == "message") {
        if (empty ($_POST["message"])) {
            $_SESSION["error"]["message"] = "Please enter a message to be posted!";
            header("Location: main.php");
        }
        else {
            $query = "  INSERT INTO messages (message, created_at, updated_at, user_id)
                        VALUES ('{$_POST['message']}', NOW(), NOW(), {$_SESSION['user'][0]['id']});";
            run_mysql_query($query);
            $query = "  SELECT
                            messages.id AS  message_id,
                            message,
                            messages.created_at AS message_time_created,
                            concat(first_name, ' ', last_name) AS name
                        FROM messages
                        LEFT JOIN users
                        ON messages.user_id = users.id
                        ORDER BY messages.created_at DESC;";
            $_SESSION["messages"] = fetch_all($query);
            header("Location: main.php");
        }
    }
    else if (isset($action) && $action == "comment") {
        if (empty ($_POST["comment"])) {
            $_SESSION["error"]["comment"] = "error";
            header("Location: main.php");
        }
        else {
            $query = "  INSERT INTO comments (comment, created_at, updated_at, user_id, message_id)
                        VALUES ('{$_POST['comment']}', NOW(), NOW(), {$_SESSION['user'][0]['id']}, {$_POST['message_id']});";
            run_mysql_query($query);
        }
    }
    else {
        session_destroy();
        header("Location: index.php");
    }
    // registration
    function registration($data) {
        $_SESSION["error"] = array();
        // first name error
        if (empty($data["first_name"])) {
            $_SESSION["error"]["first_name"] = "The first name can't be blank";
        }
        else {
            $name_array = str_split($data["first_name"]);
            for ($i = 0; $i < count($name_array); $i++) {
                if (is_numeric($name_array[$i])) {
                    $_SESSION["error"]["first_name"] = "Please enter a valid first name. ";
                }
            }
        }
        // last name error
        if (empty($data["last_name"])) {
            $_SESSION["error"]["last_name"] = "The last name can't be blank";
        }
        else {
            $name_array = str_split($data["last_name"]);
            for ($i = 0; $i < count($name_array); $i++) {
                if (is_numeric($name_array[$i])) {
                    $_SESSION["error"]["last_name"] = "Please enter a valid last name. ";
                }
            }
        }
        // email error
        $checkEmail = filter_var($data["email"], FILTER_VALIDATE_EMAIL);
        if (empty($data["email"]) || ! $checkEmail) {
            $_SESSION["error"]["email"] = "Please enter a valid email!";
        }
        // password error
        if (empty($data["password"])) {
            $_SESSION["error"]["password"] = "Please enter your password. ";
        }
        else if (strlen($data["password"]) < 6) {
            $_SESSION["error"]["password"] = "Please make sure that your password is more than 6 characters.";
        }
        // confirm password error
        if (empty($data["confirm_password"])) {
            $_SESSION["error"]["confirm_password"] = "Please confirm password. ";
        }
        else if ($data["password"] != $data["confirm_password"]) {
            $_SESSION["error"]["confirm_password"] = "The confirmation password you entered was different from password. ";
        }

        // adding to database
        if (! empty( $_SESSION["error"])) {
            header("Location: index.php");
        }
        else {
            $query = "  INSERT INTO users (first_name, last_name, email, password, created_at, updated_at)
                        VALUES ('{$data['first_name']}', '{$data['last_name']}', '{$data['email']}', '{$data['password']}', NOW(), NOW());";
            run_mysql_query($query);
            $_SESSION["success"] = "User successfully created! Please Login to enter.";
            header("Location: index.php");
        } 
    }
    // login
    function login($data) {
        $query = "  SELECT
                        concat(first_name, ' ', last_name) AS name,
                        id
                    FROM users
                    WHERE users.email = '{$data['email']}'
                    AND users.password = '{$data['password']}';"; 
        $_SESSION["user"] = fetch_all($query);
        if (! empty($_SESSION["user"])) {
            $query = "  SELECT
                            messages.id AS  message_id,
                            message,
                            messages.created_at AS message_time_created,
                            concat(first_name, ' ', last_name) AS name
                        FROM messages
                        LEFT JOIN users
                        ON messages.user_id = users.id
                        ORDER BY messages.created_at DESC;";
                $_SESSION["messages"] = fetch_all($query);
            header("Location: main.php");
        }
        else {
            $_SESSION["error"]["login"]= "Users can't find";
            header("Location: index.php");
        }
    }
?>