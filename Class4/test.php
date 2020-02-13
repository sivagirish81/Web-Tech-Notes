<?php
    header("Content-type:video/MOV");
    $file = fopen("LK.mp4","rb");
    $f = fread($file,filesize("LK.mp4"));
    echo $f;
    fclose ($file);
?>
