<?php
    session_start();
    require_once("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>The Wall</title>
        <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container {
            width: 700px;
            margin: 0 auto;
        }
        form > * {
            display: block;
        }
        textarea {
            width: 100%;
            height: 100px;
            resize: none;
            padding: 10px;
        }
        form input:last-child {
            margin: 10px 0 0 auto;
            padding: 5px;
        }
        nav {
            background-image: linear-gradient(to bottom, lightseagreen, white);
            height: 50px;
            padding: 10px;
        }
        nav > * {
            display: inline-block;
            vertical-align: middle;
        }
        nav + div {
            height: 20px;
        }
        h3 {
            margin-right: 450px;
        }
        a {
            text-decoration: none;
            color: black;
            border: 1px solid black;
            padding: 3px;
            border-radius: 5px;
            background-color: lightgreen;
        }
        section {
            /* background-image: linear-gradient(to bottom, #98FB98, white); */
            margin-top: 20px;
        }
        h4 + p, h6 + p {
            margin-left: 30px;
        }
        section textarea {
            width: 670px;
            height: 50px;
            resize: none;
            padding: 10px;
            margin-left: 30px;
        }
        p + p, h6 {
            margin-top: 20px;
            margin-left: 30px;
        }
        .error {
            border: 1px solid red;
        }
        </style>
    </head>
    <body>
        <div class="container">
           <nav>
               <h3><?= $_SESSION["user"][0]["name"] ?></h3>
               <a href="process.php">LOG OFF</a>
           </nav>
            <h1>Post a message</h1>
            <form action="process.php" method="post">
                <input type="hidden" name="action" value="message">
                <textarea name="message"
<?php       if (! empty($_SESSION["error"]["message"])) {                                                       ?>
                <?= "class='error'" ?>
<?php       }
            unset($_SESSION["error"]["message"]);                                                               ?>               
                ></textarea>
                <input type="submit" value="Post a message">
            </form>
<?php       foreach ($_SESSION["messages"] as $message) {
                $message_time = date_format(date_create($message["message_time_created"]), "F jS Y");           ?>            
            <section> 
                <h4><?= "{$message['name']} - {$message_time}" ?></h4>
                <p><?= $message["message"] ?></p>
<?php            $query = "  SELECT
                                concat(first_name, ' ', last_name) AS name,
                                comments.created_at AS comment_created_time,
                                comment
                            FROM comments
                            LEFT JOIN users
                            ON comments.user_id = users.id
                            WHERE comments.message_id = {$message['message_id']}
                            ORDER BY comments.created_at ASC;";
                 $comments = fetch_all($query);
                 foreach ($comments as $comment) {
                    $comment_time = date_format(date_create($comment["comment_created_time"]), "F jS Y");       ?>
                    <h6><?= "{$comment['name']} - {$comment_time}" ?></h6>
                    <p><?= $comment["comment"] ?></p>    
<?php           }                                                                                               ?>                       
                <p>Post a comment</p>
                <form action="process.php" method="post">
                    <input type="hidden" name="action" value="comment">
                    <input type="hidden" name="message_id" value="<?= $message['message_id'] ?>">
                    <textarea name="comment"
<?php       if (! empty($_SESSION["error"]["comment"])) {                                                   ?>
                     <?= "class='error'" ?>
<?php       }
            unset($_SESSION["error"]["comment"]);                                                           ?>
                    ></textarea>
                    <input type="submit" value="Post a comment">
                </form>
            </section>
<?php       }                                                                                               ?>
        </div>
    </body>
</html>