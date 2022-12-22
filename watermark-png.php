<?php
$stamp = imagecreatefrompng('./watermark.png');
$im = imagecreatefrompng('./image.png');

$marge_right = 10;
$marge_bottom = 10;
$sx = imagesx($stamp);
$sy = imagesy($stamp);

imagecopy($im, $stamp, imagesx($im) - $sx - $marge_right, imagesy($im) - $sy - $marge_bottom, 0, 0, imagesx($stamp), imagesy($stamp));

//Сохраняем альфу
imagesavealpha($im, true);
header('Content-type: image/png');
imagepng($im);
imagedestroy($im);
?>