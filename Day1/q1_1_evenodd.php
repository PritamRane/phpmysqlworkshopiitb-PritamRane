<?php 

	$numbers = array(11,23,72,44);
	foreach ($numbers as $value) {
		if($value % 2 == 0){
			echo nl2br("The number $value is an even number\n");
		}
		else{
			echo nl2br("The number $value is an odd number\n");
		}
	}

 ?>