<?php
	extract($_GET);
	
	//We have the chunk number
	$file = fopen("data.txt", "r");
	
	$pos = $chunk*2000;
	
	//Seek till pos
	fseek($file, $pos);
	
	//Read 2000 chars from "pos".
	$data = fread($file, 2000);
	
	echo $data;
	
	

?>