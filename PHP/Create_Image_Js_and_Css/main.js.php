<?php
    header('Content-type: text/javascript; charset=UTF-8');
    $random1 = rand(0, 100);
    $random2 = rand(0, 100); 
    $product =  $random1 * $random2;
?>

$(document).ready(function() {
    <?= "alert('{$random1} x {$random2} = {$product}');"?>
});