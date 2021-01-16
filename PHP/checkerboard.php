<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Checkerboard</title>
        <style>
            .container {
                font-size: 0;
            }
            .col{
                display: inline-block;
            }
            .lightColor, .darkColor {
                width: 50px;
                height: 50px;
                border: 1px solid black;
            } 
            .darkColor {
                background-color: black;
            }
            .lightColor {
                background-color: white;
            }  
        </style>
    </head>
    <body>
        <div class="container">
<?php
    $sum = 0;
    for($i=1; $i<=8; $i++) {
?>
            <div class = "col">
<?php
    for ($j=1; $j<=8; $j++) {
    $sum = $i + $j;
    if ($sum%2 == 0) {
?>  
                <div <?= "class='darkColor'"?> ></div>
<?php
    }
    else {
?>
                <div <?= "class='lightColor'"?> ></div>
<?php
    }
    }
?>
            </div>
<?php } ?>
        </div>
    </body>
</html>