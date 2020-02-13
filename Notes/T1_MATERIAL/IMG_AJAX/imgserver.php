<?php
	header("Content-type:image/jpeg");
	
	//Read the username
	extract($_GET);
	
	//You don't need to memorise the imagecreation code.
	if($username == "USER1" || $username == "USER2")
	{
		$img = imagecreate(2,1);
		setcookie("stat", "USER1,USER2 are taken");
	}
	else
	{
		$img = imagecreate(1,1);
	}
	
	imagecolorallocate($img, 200,100,230);
	
	//Send the image to the browser
	imagejpeg($img);
	
	//To be programmatically correct and responsible,
	imagedestroy($img);
	
?>