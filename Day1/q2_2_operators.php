<?php 

	$a = 2;
	$b = 4;

	if($a > $b){
		echo nl2br("The greater number between $a and $b is ". ($a));
	}
	elseif ($b > $a) {
		echo nl2br("The greater number between $a and $b is ". ($b));
	}
	else{
		echo "The numbers are equal";
	}

 ?>