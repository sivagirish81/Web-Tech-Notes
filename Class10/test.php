<?php
    $data = fopen("Notes.txt","r");
    $old_mod = filemtime("Notes.txt");
    while (true)
    {
        clearstatcache();
        $last_mod = filemtime("Notes.txt");
        if ($last_mod > $old_mod)
        {
            echo "<script>";
            $r = fread($data,filesize("Notes.txt"));
            $retstr = "File Changed at ".date('h i s',$last_mod)." ".$r;
            // $retstr = $r;
            //echo "console.log(".$retstr.");";
            echo "parent.obj.updatediv('".$retstr."');";
            echo "</script>";
            $old_mod = $last_mod;
            break;
        }
        else
        {
            echo "<script type>";
            echo "parent.obj.heartbeat();";
            echo "</script>";
            sleep(2);
        }
    }
?>