<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HTML Table</title>
        <style>
            table {
                border-collapse: collapse;
                text-align: center;
            }
            td {
                border: 1px solid black;
            }
            tr:nth-of-type(5n) {
                background-color: black;
                color: white;
            }
        </style>
    </head>
    <body>
<?php
    $users = array( 
        array('first_name' => 'Michael', 'last_name' => 'Choi'),
        array('first_name' => 'John', 'last_name' => 'Supsupin'),
        array('first_name' => 'Mark', 'last_name' => 'Guillen'),
        array('first_name' => 'KB', 'last_name' => 'Tonel'),
        array('first_name' => 'Michael', 'last_name' => 'Choi'),
        array('first_name' => 'John', 'last_name' => 'Supsupin'),
        array('first_name' => 'Mark', 'last_name' => 'Guillen'),
        array('first_name' => 'KB', 'last_name' => 'Tonel'),
        array('first_name' => 'Michael', 'last_name' => 'Choi'),
        array('first_name' => 'John', 'last_name' => 'Supsupin'),
        array('first_name' => 'Mark', 'last_name' => 'Guillen'),
        array('first_name' => 'KB', 'last_name' => 'Tonel'),
        array('first_name' => 'Mark', 'last_name' => 'Guillen'),
        array('first_name' => 'KB', 'last_name' => 'Tonel') 
    );
?>
        <table>
            <thead>
                <tr>
                    <td>User #</td>
                    <td>First Name</td>
                    <td>Last Name</td>
                    <td>Full Name</td>
                    <td>Full Name in upper case</td>
                    <td>Length of full name (without spaces)</td>
                </tr>
            </thead>
            <tbody>
<?php   for ($i = 0; $i < count($users); $i++) { ?>
                <tr>
                    <td><?= $i+1 ?></td>
                    <td><?= $users[$i]["first_name"] ?></td>
                    <td><?= $users[$i]["last_name"] ?></td>
                    <td><?= implode(" ", $users[$i]) ?></td>
                    <td><?= strtoupper(implode(" ", $users[$i-1])) ?></td>
                    <td><?= strlen(implode("", $users[$i])) ?></td>
                </tr>
<?php } ?>
            </tbody>
        </table>
    </body>
</html>