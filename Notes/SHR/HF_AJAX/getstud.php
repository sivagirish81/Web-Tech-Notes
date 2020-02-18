<?php
	//Extract the parameters sent by the client
	//IN this case, only one - USN
	extract($_GET);
	
	//Echo a "Javascript" code to the client iframe so that
	// it will update the parent window's fields.
	echo "<script type='text/javascript'>";
	
	if($usn == "USN1")
	{
		echo "parent.obj.updateFields('" . "$usn;CSE;9.9" . "');";
	}
	else if($usn == "USN2")
	{
		echo "parent.obj.updateFields('" . "$usn;ECE;9.3" . "');";
	}
	else
	{
		echo "parent.obj.updateFields('" . "UNKNOWN;EEE;9.0" . "');";
	}
	echo "</script>";

?>