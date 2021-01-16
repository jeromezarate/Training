<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coin Throw</title>
    <style>
        h3 {
            text-decoration: underline;
        }

    </style>
</head>
<body>
    <h3>Starting the program</h3>
    <?php
        $head_count = 0;
        $tail_count = 0;
        for ($i=1; $i <= 1000; $i++) {
            $random = rand(0, 1);
            if ($random == 0) {
                $head_count++;
                echo "Attempt #{$i}: Throwing a coin... It's a head! ... Got {$head_count} head(s) so far and {$tail_count} tail(s) so far <br>";
            }
            else {
                $tail_count++;
                echo "Attempt #{$i}: Throwing a coin... It's a tail! ... Got {$head_count} head(s) so far and {$tail_count} tail(s) so far <br>";
            }
        }
    ?>
    <h3>Ending the program - thank you!</h3>
</body>
</html>