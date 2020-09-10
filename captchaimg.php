<?php
session_start();
require "functions.php";
$image = imagecreatetruecolor(100, 50);

$white = imagecolorallocate($image, 255, 255, 255);
$green = imagecolorallocate($image, 0, 255, 0);
$black = imagecolorallocate($image, 0,0,0);

$text = randomString(rand(7,9));
$_SESSION['text'] = $text;
imagefill($image,0,0,$white);
imagettftext($image, 16, 0, 5,35, $black, 'OLD.ttf', $text);

header('mime_content_type(image/png)');
imagepng($image);
imagedestroy($image); 
?>