<?php
	header("Content-Type:video/mkv");
	header("Access-Control-Allow-Origin:*");
	$file = fopen("SV.mp4", "rb");
	$f = fread($file, filesize("SV.mp4"));
	echo $f;
	fclose($file);
?>
