<?php 
	$retarr = array(array("srn"=>"001", "name"=>"STUD1"), array("srn"=>"002", "name"=>"STUD2"));
	
	$retobj = json_encode($retarr);
	//var_dump($retobj);
	echo $retobj;
?>