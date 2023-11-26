<?php
session_start();


$captcha = generateRandomString(6);


$_SESSION['captcha'] = $captcha;

$width = 130;
$height = 40;
$image = imagecreate($width, $height);
$bgColor = imagecolorallocate($image, 255, 255, 255);
$textColor = imagecolorallocate($image, 0, 0, 0);

for ($i = 0; $i < 5; $i++) {
    imageline($image, 0, rand(0, $height), $width, rand(0, $height), $textColor);
}
imagestring($image, 5, 20, 12, $captcha, $textColor);


header('Content-type: image/png');


imagepng($image);
imagedestroy($image);


function generateRandomString($length = 6)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}
