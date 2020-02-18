<?php
	extract($_GET);
	$res=array();
	$file=fopen("food.txt","r");
	while(!feof($file)){
		$line=trim(fgets($file));
		$npos = strncasecmp($line,$term,strlen($term));
		$pos = strripos($line,$term);
		if($npos == 0 || $pos != FALSE){
			$res[]=$line;	
		}
	}
	echo json_encode($res);	
?>