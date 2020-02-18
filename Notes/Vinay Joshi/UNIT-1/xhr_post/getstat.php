<?php
	extract($_POST);
	if($room=="BS02" || $room == "B112")
		echo "Room Really Good but Unavailable :(";
	else
		echo "Room Available :)";
?>