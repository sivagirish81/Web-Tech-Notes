<?php
header("Content-type:video/MOV");
$file = fopen("LK.MOV","rb");
$f = fread($file,filesize("LK.MOV"));
echo $f;
fclose($file);
?>