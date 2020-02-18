<?php
	extract($_POST);
	if($room=="BS02" && $type=="class")
		echo "Room Really Good but Unavailable :(";
	else
		echo "Room Available :)";
?>