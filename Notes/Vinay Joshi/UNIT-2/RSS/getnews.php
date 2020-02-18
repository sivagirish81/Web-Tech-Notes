<?php
	header("Content-type:text/xml");
	
	$retstr = file_get_contents("https://rss.feedspot.com/u/be8415ec2e7c953149642bd5ef5313be/rss/rsscombiner");
	//https://www.globalhungerindex.org/issues-in-focus/atom.xml
	//http://127.0.0.1/rss/feeds.xml");
	
	echo $retstr;
	

?>