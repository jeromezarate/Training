<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Result</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <style>
            * {
                margin: 0;
                padding: 0;
                line-height: 20px;
                box-sizing: border-box;
            }
            .container {
                border: 1px solid black;
                margin: 100px auto;
                padding: 20px;
                width: 500px;
                height: 300px;
            }
            
            h1 {
                text-decoration: underline;
                margin-bottom: 20px;
            }
            div div {
                display: inline-block;
                vertical-align: top;
                margin-left: 20px;
            }
            div + div {
                margin-left: 20px;
            }
            input {
                display: block;
                margin-left: auto;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Submitted Information</h1>
            <div>
                <p>Name:</p>
                <p>Dojo Location:</p>
                <p>Favorite Language:</p>
                <p>Comment:</p>
            </div>
            <div>
                <p><?= $_POST["name"] ?></p>
                <p><?= $_POST["location"] ?></p>
                <p><?= $_POST["language"] ?>!!!</p>
                <p><?= $_POST["comment"] ?></p>
            </div>
            <form action="index.php" method="post"><input type="submit" value="Go Back"></form>
        </div>
    </body>
</html>


