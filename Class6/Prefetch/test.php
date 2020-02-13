<?php
    extract($_GET);
    $fname = "content".$count.".txt";
    $file = fopen($fname,"r");
    $retstr = fread($file,filesize($fname));
    echo $retstr;
?>