<?php
	extract($_POST);
	
	//If the client has sent files to be uploaded, we have 
	// it in a super global called $_FILES which is an array
	
	//count($_FILES) gives the number of files sent for upload
	$ret = move_uploaded_file($_FILES['mycv1']['tmp_name'], ".\\" . $_FILES['mycv1']['name']);
	
	echo "$ret...success!!!";

?>