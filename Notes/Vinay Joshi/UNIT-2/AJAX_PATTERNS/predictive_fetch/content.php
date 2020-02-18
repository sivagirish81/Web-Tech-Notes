<?php
extract($_GET);
$fname = "file".$count.".txt";

/*$file = fopen($fname,"r");

$size = filesize($fname);
$retstr = fread($file, $size);*/

$retstr=file_get_contents($fname);

echo $retstr;

?>