<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Survey Form</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            .container {
                border: 1px solid black;
                margin: 100px auto;
                padding: 20px;
                width: 500px;

            }
            label {
                display: block;
            }
            span, input {
                display: inline-block;
                vertical-align: middle;
            }
            span + textarea {
                display: block;
            }
            span {
                width: 180px;
            }
            input[type="text"], select {
                width: 273px;
            }
            textarea {
                width: 458px;
            }
            input[type="submit"] {
                display: block;
                margin-left: auto;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <form action="result.php" method="post">
                <label for="name">
                    <span>Name:</span>
                    <input type="text" name="name">
                </label>
                <label for="location">
                    <span>Dojo Location:</span>
                    <select name="location">
                        <option value="Mountain View">Mountain View</option>
                        <option value="Seattle, WA">Seattle, WA</option>
                        <option value="Manila, PH">Manila, PH</option>
                    </select>
                </label>
                <label for="language">
                    <span>Favorite Language:</span>
                    <select name="language">
                        <option value="Python">Python</option>
                        <option value="C++">C++</option>
                        <option value="Java">Java</option>
                    </select>
                </label>
                <label for="comment">
                    <span>Comments (optional:)</span>
                    <textarea name="comment"></textarea>
                </label>
                <input type="submit" value="Submit">
            </form>
        </div>
    </body>
</html>