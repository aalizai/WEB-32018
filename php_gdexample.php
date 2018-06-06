<?php
header("content-type:image/png");
$image=imagecreate(200,200);
imagecolorallocate($image, 200, 100, 0);
$txc=imagecolorallocate($image, 0, 0, 0);
imagestring($image, 12, 20, 20, "this is GD tutrial", $txc);
imageline($image, 20, 40, 180, 180, $txc);
imageellipse($image,100, 100, 50, 100, $txc);
imagefilledarc($image, 150, 150, 50, 50, 0, 90, $txc, IMG_ARC_PIE);
imagepng($image);
imagedestroy($image);

?>