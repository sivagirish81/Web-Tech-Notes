<?php
    if ($_SERVER['REQUEST_METHOD'] == 'GET')
    {
        extract($_GET);
        if (strcmp($city,"bangalore") == 0)
        {
            $weather["temp"] = "24";
            $weather["humidity"] = "60%";
        }
        $response = array("status"=>"200","message"=>"Success","data"=>$weather);
        if (strcmp($format,"json") == 0)
        {
            echo json_encode($response);
        }
    }
?>