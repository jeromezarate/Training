<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CSV</title>
    </head>
    <body>
<?php
    ini_set("auto_detect_line_endings", true);
    $file = fopen("us-500.csv" , "r");
    if (($csvData = fgetcsv($file)) != FALSE) {
        $result = 1;
        while (($csvData = fgetcsv($file)) != FALSE) { ?>
        <h1>Result <?= $result ?></h1>
        <ul>
<?php       for ($j = 0; $j < count($csvData); $j++) { ?>
            <li><?= $csvData[$j] ?></li>
<?php       } ?>
        </ul>
<?php       $result++;
        }?>
<?php
    } ?>
    </body>
</html>