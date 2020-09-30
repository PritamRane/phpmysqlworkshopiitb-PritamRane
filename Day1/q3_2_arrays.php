<?php 

	$m1 = [[1,4],[3,9]];
	$m2 = [[4,4],[1,2]];
	for ($i=0; $i < 2; $i++) { 
		for ($j=0; $j < 2; $j++) { 
				$add = $m1[$i][$j] + $m2[$i][$j];
				if($j==1){
					echo nl2br("$add\n ");
				}
				else{
					echo "$add   ";
				}
		}
	}
	

 ?>