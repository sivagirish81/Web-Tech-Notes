<?php
    header("Content-type:text/xml");
    $retstr = file_get_contents("https://www.nasa.gov/rss/dyn/breaking_news.rss");
    echo $retstr;
?>