<?php
	header("Content-type:image/jpeg");
	extract($_GET);
	if($room == "B102" || $room == "112")
		$img = imagecreate(1,1);
	else
		$img = imagecreate(2,1);
	
	imagejpeg($img);
?>