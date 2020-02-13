<?php
    $file = fopen("scores.txt","w");
    $updates=rand(100,350).";".rand(200,120).";".rand(50,600);
    fwrite($file,$updates);
    fclose($file);
    $file=fopen("scores.txt","r");
    $data=fread($file,filesize("scores.txt"));
    echo $data;
    sleep(10);
?>
