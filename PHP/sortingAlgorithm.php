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
    function sortingAlgorithm ($arr) {
        $startTime = microtime();
        for ($i=0; $i < count($arr)-1; $i++) {
            $min = $arr[$i];
            $max = $arr[$i];
            $count = 0;
            for ($j=$i+1; $j < count($arr); $j++) {
                if ($min > $arr[$j]) {
                    $min = $arr[$j];
                    $indexStorage = $j;
                    $count++;
                }
                else if ($max < $arr[$j]) {
                    $max = $arr[$j];
                }
                if ($count > 0 && $j == count($arr)-1) {
                    $arr[$indexStorage] = $arr[$i];
                    $arr[$i] = $min;
                }
            }
        }
        $endTime = microtime();
        $operatingTime = $endTime - $startTime;
        echo $operatingTime;
        var_dump($arr);
    }
    sortingAlgorithm($numberArray);
?>