<?php
    $numberArray = array(
                        rand(0, 10000), rand(0, 10000), rand(0, 10000), rand(0, 10000), rand(0, 10000),
                        rand(0, 10000), rand(0, 10000), rand(0, 10000), rand(0, 10000), rand(0, 10000),
                        rand(0, 10000), rand(0, 10000), rand(0, 10000), rand(0, 10000), rand(0, 10000),
                        rand(0, 10000), rand(0, 10000), rand(0, 10000), rand(0, 10000), rand(0, 10000),
                        rand(0, 10000), rand(0, 10000), rand(0, 10000), rand(0, 10000), rand(0, 10000),
                        rand(0, 10000), rand(0, 10000), rand(0, 10000), rand(0, 10000), rand(0, 10000),
                        rand(0, 10000), rand(0, 10000), rand(0, 10000), rand(0, 10000), rand(0, 10000),
                        rand(0, 10000), rand(0, 10000), rand(0, 10000), rand(0, 10000), rand(0, 10000),
                        rand(0, 10000), rand(0, 10000), rand(0, 10000), rand(0, 10000), rand(0, 10000),
                        rand(0, 10000), rand(0, 10000), rand(0, 10000), rand(0, 10000), rand(0, 10000),
                        rand(0, 10000), rand(0, 10000), rand(0, 10000), rand(0, 10000), rand(0, 10000),
                        rand(0, 10000), rand(0, 10000), rand(0, 10000), rand(0, 10000), rand(0, 10000),
                        rand(0, 10000), rand(0, 10000), rand(0, 10000), rand(0, 10000), rand(0, 10000),
                        rand(0, 10000), rand(0, 10000), rand(0, 10000), rand(0, 10000), rand(0, 10000),
                        rand(0, 10000), rand(0, 10000), rand(0, 10000), rand(0, 10000), rand(0, 10000),
                        rand(0, 10000), rand(0, 10000), rand(0, 10000), rand(0, 10000), rand(0, 10000),
                        rand(0, 10000), rand(0, 10000), rand(0, 10000), rand(0, 10000), rand(0, 10000),
                        rand(0, 10000), rand(0, 10000), rand(0, 10000), rand(0, 10000), rand(0, 10000),
                        rand(0, 10000), rand(0, 10000), rand(0, 10000), rand(0, 10000), rand(0, 10000),
                        rand(0, 10000), rand(0, 10000), rand(0, 10000), rand(0, 10000), rand(0, 10000)
                        );
    $arrayLength = count($numberArray);
    $startTime = microtime();
    do {
        $arrayLength--;
        for ($i = 0; $i < $arrayLength; $i++) {
            if ($numberArray[$i] > $numberArray[$i+1]) {
                $temp = $numberArray[$i+1];
                $numberArray[$i+1] = $numberArray[$i];
                $numberArray[$i] = $temp;
            }
        }
    } while ($arrayLength > 0);
    $endTime = microtime();
    $operatingTime = $endTime - $startTime;
    echo $operatingTime . "<br>";
    var_dump($numberArray);
?>