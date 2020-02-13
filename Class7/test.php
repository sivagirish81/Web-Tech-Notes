<?php
    extract($_POST);
    print_r($_FILES);
    $fname = $_FILES['f']['name'];
    $fsize = $_FILES['f']['size'];
    $ftemp = $_FILES['f']['temp_name'];
    $destpath = realpath(dirname(__FILE__));
    $destpath = "$destpath/$fname";
    if (move_uploaded_file($ftemp,"$destpath"))
    {
        echo "File upload success";
    }
?>