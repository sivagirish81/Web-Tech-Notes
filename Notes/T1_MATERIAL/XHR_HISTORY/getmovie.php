<?php

	extract($_GET);
	
	$details = array();
	switch($movie)
	{
		case "Indiana":
			$details["lead"] = "Harrison Ford";
			$details["year"] = "1980";
			$details["director"] = "Stephen Spielberg";
			break;
			
		case "Terminator":
			$details["lead"] = "Schwarzenegger";
			$details["year"] = "1984";
			$details["director"] = "James Cameroon";
			break;
		
		case "Sully":
			$details["lead"] = "Tom Hanks";
			$details["year"] = "2016";
			$details["director"] = "Clint Eastwood";
	}
	
	echo json_encode($details);

?>