<?php
    header("Content-type : image/jpeg");
    extract($_GET);
    if ($usr == "robert" || $usr == "tom")
    {
        $img = imagecreate(1,1);
    }
    else
    {
        $img = imagecreate(2,1);
    }
    imagecolorallocate($img,200,100,200);
    imagejpeg($img);
    imagedestroy($img);
?>