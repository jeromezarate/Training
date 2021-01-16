<?php
    $sampleArray = array(135, 2.4, 2.67, 1.23, 332, 2, 1.02);
    function getMinAndMax($array) {
        $minValue = $array[0];
        $maxValue = $array[0];
        foreach ($array as $key => $value) {
            if ($minValue > $value) {
                $minValue = $value;
            }
            else if ($maxValue < $value) {
                $maxValue = $value;
            }
        }
        $returnedArray = array("min" => $minValue, "max" => $maxValue);
        return $returnedArray;
    }
    $output = getMinAndMax($sampleArray);
    var_dump($output);
?>