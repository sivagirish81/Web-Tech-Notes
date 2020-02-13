<?php
	header("Content-type:video/mkv");
	$file = fopen("SV.mp4", "rb");
	$f = fread($file, filesize("SV.mp4"));
	echo $f;
	fclose($file);
?>
