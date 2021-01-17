<?php
    session_start();
    require("connect.php");
    $name = $_POST["name"];
    $post = $_POST["post"];

    if (isset($_POST["skip"])) {
        $query = "  SELECT *
                    FROM users";
            $data = fetch_all($query);
            $_SESSION["users"] = $data;
        header("Location: main.php");
    }
    else {
        $_SESSION["error"] = array();
        // name check
        if(empty($name)) {
            $_SESSION["error"]["name"] = "The name must not be empty.";
        }
        else {
            $name_array = str_split($first_name);
            for ($i = 0; $i < count($name_array); $i++) {
                if (is_numeric($name_array[$i])) {
                    $_SESSION["error"]["name"] = "Please enter a valid first name.";
                }
            }
        }
        // post check
        if (empty($post)) {
            $_SESSION["error"]["post"] = "You should write a qoute.";
        }

        if (! empty($_SESSION["error"])) {
            header("Location: index.php");
        }
        else {
            $query = "  INSERT INTO users (user_name, post, created_at)
                        VALUES('$name', '$post', NOW());";
            $insertData = run_mysql_query($query);

            $query = "  SELECT *
                        FROM users";
            $data = fetch_all($query);
            $_SESSION["users"] = $data;
            header("Location: main.php");
        }
    }
?>


