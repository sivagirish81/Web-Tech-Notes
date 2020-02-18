<?php
	header("Content-type:video/mp4");
	
	$file=fopen("sample.mp4","rb");
	$size=filesize("sample.mp4");
	
	$vid = fread($file,$size);//if video is large, hardcode the size to smaller value, partial video will be shown
	echo $vid;
?>
