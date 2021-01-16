<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Multiplication Table</title>
        <style>
            table {
                border-collapse: collapse;
            }
            tbody tr:first-of-type, tr td:first-of-type {
                font-size: 20px;
                font-weight: bolder;
            }
            tr:nth-of-type(2n) {
                background-color: gray;
            }
            td {
                border: 1px solid black;
                width: 50px;
                height: 20px;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <table>
<?php   for($i=0; $i<=9; $i++) { ?>
            <tr>
<?php
    for ($j=0; $j<=9; $j++) {
        if ($i == 0 && $j == 0) {
?>
                <td><?= "" ?></td>
<?php
    }
    else if ($j == 0) {
?>
                <td><?= $i ?></td>
<?php
    }
    else if ($i != 0 && $i != 0) {
?>
                <td><?= $i * $j ?></td>
<?php
    }
    else {
?>
                <td><?= $j ?></td>
<?php
    }
    }
?>
            </tr>
<?php } ?>   
        </table>
    </body>
</html>