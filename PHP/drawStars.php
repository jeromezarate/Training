<?php
    $sampleArray = array(4, "Tom", 1, "Michael", 5, 7, "Jimmy Smith");
    function drawStars($array) {
        foreach ($array as $key => $value) {
            if (is_numeric($value)) {
                for ($i = $value; $i > 0; $i--) {
                    echo "*";
                }
            }
            else {
                for ($i = strlen($value); $i > 0; $i--) {
                    echo strtolower($value[0]);
                }
            }
            echo "<br>";
        }
    }
    drawStars($sampleArray);
?>