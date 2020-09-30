<?php 

	$week = array('1' => "Monday", '2' => "Tuesday",'3' => "Wednesday",'4' => "Thursday",'5' => "Friday",'6' => "Saturday",'7' => "Sunday" );
	foreach ($week as $key => $value) {
		echo nl2br("Day $key is $value\n");
	}
	
 ?>