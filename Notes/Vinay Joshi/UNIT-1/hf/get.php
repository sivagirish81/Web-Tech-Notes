<script>
<?php
	extract($_GET);
	if($day=="Monday"){
		$str = "Get over weekend blues/hangover;Go to college;Brood over 5 days remaining for weekend";
	}
	if($day=="Tuesday"){
		$str = "Go to college; start planning for weekend";
	}
	if($day=="Friday"){
		$str="Hurray; Go to college for attendance sake;Party"
	}
	
	echo "parent.update('$str');";
?>
</script>