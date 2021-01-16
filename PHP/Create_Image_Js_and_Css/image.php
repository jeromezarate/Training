<?php
$my_img = imagecreate( 200, 80 );
$background = imagecolorallocate( $my_img, 0, 0, 255 );
$text_color = imagecolorallocate( $my_img, 255, 255, 0 );
imagestring( $my_img, 4, 30, 25, "Hello", $text_color );

header( "Content-type: image/png" );
imagepng( $my_img );
?>