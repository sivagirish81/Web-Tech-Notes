<?php
    extract($_GET);
    $data = array("city"=>"$city");
    $datatosend = http_build_query($data);
    $header = array("Content-type:application/x-www-form-urlencoded");
    $req = array("http"=>array("method"=>"GET","header"=>$header,"content"=$datatosend));
    $context = stream_context_create($req);
    // Fire the Web service
    $url = "http://localhost/Web-Tech-Notes/Class13/getweather/"."$city.json";
    $ret = file_get_contents($url,false,$context);

    $wdata = json_decode($ret,true);
    echo json_decode($wdata["data"]);
?>