<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
/*function mergeImage(){
        $src = imagecreatefromjpeg('images/1.png');
        $dst = imagecreatefromjpeg('images/g5.jpg');
        imagecopymerge($dst, $src, 0, 0, 0, 0, 540, 960, 30);
        header('Content-type: image/jpeg');
        imagejpeg($dst);
        imagedestroy($src);
        imagedestroy($dst);
    }
mergeImage();*/

/*function merge($filename_x, $filename_y, $filename_result) {

 // Get dimensions for specified images

 list($width_x, $height_x) = getimagesize($filename_x);
 list($width_y, $height_y) = getimagesize($filename_y);

 // Create new image with desired dimensions

 $image = imagecreatetruecolor($width_x, $height_x);

 // Load images and then copy to destination image

 $image_x = imagecreatefromjpeg($filename_x);
 $image_y = imagecreatefromgif($filename_y);

 imagecopy($image, $image_x, 0, 0, 0, 0, $width_x, $height_x);
                        //  top, left, border,border
 imagecopy($image, $image_y, 100, 3100, 0, 0, $width_y, $height_y);

 // Save the resulting image to disk (as JPEG)

 imagejpeg($image, $filename_result);

 // Clean up

 imagedestroy($image);
 imagedestroy($image_x);
 imagedestroy($image_y);

}

merge('images/g5.jpg', 'images/g5.jpg', 'images/g5.jpg');*/

Header ("Content-type: image/gif");  

$image1Url = "images/g5.jpg"; 
$image2Url = "images/1.png"; 
$image3Url = "images/g5.jpg"; 
$image1 = imageCreateFromPNG($image1Url); 
$image2 = imageCreateFromPNG($image2Url); 
$image3 = imageCreateFromPNG($image3Url); 

$colorTransparent = imagecolorat($image1, 0, 0); 
imageColorTransparent ($image1, $colorTransparent); 

$colorTransparent = imagecolorat($image2, 0, 0); 
imageColorTransparent ($image2, $colorTransparent); 

$colorTransparent = imagecolorat($image3, 0, 0); 
imageColorTransparent ($image3, $colorTransparent); 

imageCopyMerge($image1, $image2, 0, 0, 0, 0, 96, 96, 100); 

imageCopyMerge($image1, $image3, 0, 0, 0, 0, 96, 96, 80); 

ImagePng ($image1); 


ImageDestroy ($image1); 
ImageDestroy ($image2); 
?>
</body>
</html>