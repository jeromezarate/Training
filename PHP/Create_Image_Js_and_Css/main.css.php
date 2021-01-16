<?php
    header('Content-type: text/css');
    $h1Color = rand(0, 255) . "," . rand(0, 255) . "," . rand(0, 255);
    $pColor = rand(0, 255) . "," . rand(0, 255) . "," . rand(0, 255);
?>

h1 {
    color: <?= "rgb({$h1Color})" ?> ;
}
p {
    color: <?= "rgb({$pColor})" ?>;
}