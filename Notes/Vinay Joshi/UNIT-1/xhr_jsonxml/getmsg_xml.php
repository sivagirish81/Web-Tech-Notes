<?php 
	header("Content-type:text/xml");

	/*
	echo "<students><student><srn>001</srn><name>STUD1</name></student><student><srn>002</srn><name>STUD2</name></student></students>";
	*/
	echo file_get_contents("my.xml");
?>