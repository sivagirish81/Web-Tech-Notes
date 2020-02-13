<?php
	//Get the movie part that was sent by the client
	extract($_GET); //$moviepart has the data
	
	$file = fopen("movies.txt", "r");
	
	$moviearray = array();
	
	//Read the file contents, one line at a time and see
	// if we have an initial string match. If so, pick up
	// that line and add it to an array. We can send it
	// as a JSON to the client.
	
	while($line = fgets($file))
	{
		$movie = trim($line);
		
		//strncasecmp(needle, haystack, length)
		if(strncasecmp($moviepart, $movie, strlen($moviepart)) == 0)
		{
			$moviearray[] = $movie;
		}
	}
	
	echo json_encode($moviearray);

?>