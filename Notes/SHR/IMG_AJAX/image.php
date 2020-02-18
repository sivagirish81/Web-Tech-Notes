<?php
	header("Content-type:image/jpeg");
	
	$img = imagecreate(100,100);
	
	imagecolorallocate($img, 200,100,230);
	
	//Send the image to the browser
	imagejpeg($img);
	
?>