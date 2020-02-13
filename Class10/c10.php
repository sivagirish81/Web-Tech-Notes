<?php
    extract($_GET);
    $data = fopen("Notes.txt","r");
    $res = array();
    while (true)
    {
        clearstatcache();
        $last_mod = filemtime("Notes.txt");
        if ($last_mod > $timestamp)
        {
            $r = fread($data,filesize("Notes.txt"));
            $res["r"] = $r;
            $res["r"] = $last_mod;
            echo json_decode($res);
            break;
        }
        else
        {
            sleep(1);
            continue;
        }
    }
?>