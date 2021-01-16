<?php
    $numberArray = array(3, 6, 1, 0, 9, 4, 7, 2, 5, 8);
    for ($i = 0; $i < count($numberArray); $i++) {
        $temp = $numberArray[$i];
        $j = $i - 1;
        while ($j >= 0 && $numberArray[$j] > $temp) {
            $numberArray[$j+1] = $numberArray[$j];
            $j--;
        }
        $numberArray[$j + 1] = $temp;
    }
    var_dump($numberArray);

    
?>
