<?php

// Set the content-type
header('Content-Type: image/png');

// Create the image
$img = imagecreatetruecolor(400, 400);
$blue = imagecolorallocate($img, 255, 255, 255);

$text = uniqid();

imagestring($img, 5, 150, 180, $text, $blue);
imagesetthickness($img, 10);

imagepng($img);
imagedestroy($img);