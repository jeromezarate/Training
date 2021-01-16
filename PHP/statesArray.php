<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>States Array</title>
    </head>
    <body>
        <!-- using for loop -->
        <select name="states" id="#">
            <option value="inital">State</option>
            <?php
                $states = array("CA", "WA", "VA", "UT", "AZ");
                for ($i = 0; $i < count($states); $i++) {
                    echo "<option value='{$states[$i]}'>{$states[$i]}</option>";
                }
            ?>
        </select>
        <!-- using foreach -->
        <select name="states" id="#">
            <option value="inital">State</option>
            <?php
                $states = array("CA", "WA", "VA", "UT", "AZ");
                foreach ($states as $key => $value) {
                    echo "<option value='{$value}'>{$value}</option>";
                }
            ?>
        </select>
        <!-- added new states -->
        <select name="states" id="#">
            <option value="inital">State</option>
            <?php
                $states = array("CA", "WA", "VA", "UT", "AZ", "NJ", "NY", "DE");
                foreach ($states as $key => $value) {
                    echo "<option value='{$value}'>{$value}</option>";
                }
            ?>
        </select>
    </body>
</html>