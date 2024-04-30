<?php
// Check if GD extension is enabled
if (!extension_loaded('gd')) {
    die('GD extension is not enabled.');
}

function resize_image($file, $new, $w, $h, $imageFileType)
{
    list($width, $height) = getimagesize($file);

    switch ($imageFileType) {
        case 'jpg':
        case 'jpeg':
            $src = imagecreatefromjpeg($file);
            break;

        case 'png':
            $src = imagecreatefrompng($file);
            break;

        case 'gif':
            $src = imagecreatefromgif($file);
            break;

        default:
            die('Unsupported image format.');
    }

    $dst = imagecreatetruecolor($w, $h);

    imagecopyresampled($dst, $src, 0, 0, 0, 0, $w, $h, $width, $height);

    switch ($imageFileType) {
        case 'jpg':
        case 'jpeg':
            $image_created = imagejpeg($dst, $new, 80);
            break;

        case 'png':
            $image_created = imagepng($dst, $new, 80);
            break;

        case 'gif':
            $image_created = imagegif($dst, $new, 80);
            break;
    }

    imagedestroy($src);
    imagedestroy($dst);

    return $image_created;
}
?>
