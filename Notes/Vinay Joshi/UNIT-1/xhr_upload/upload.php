 <?php

	//extract($_POST);
	$fname=$_FILES['f']['name'];
	$fsize=$_FILES['f']['size'];
	$ftemp=$_FILES['f']['tmp_name'];

	if(move_uploaded_file($ftemp,"/files/".$fname))
		echo $fname ." saved successfully";
	else
		echo "failed";


?> 