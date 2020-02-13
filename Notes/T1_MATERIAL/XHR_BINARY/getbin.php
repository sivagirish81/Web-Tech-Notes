<?php
	//Sending binary data to client. Open the file in binary mode.
	$file = fopen("sample.mp4","rb");
	
	$data = fread($file, filesize("sample.mp4"));
	
	echo $data;


?>