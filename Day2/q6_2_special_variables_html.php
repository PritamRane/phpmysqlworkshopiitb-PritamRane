<?php 

	$name = $_POST['name'];
	$sub1 = $_POST['1'];	
	$sub2 = $_POST['2'];
	$sub3 = $_POST['3'];
	$sub4 = $_POST['4'];
	$sub5 = $_POST['5'];
	$all = array($sub1,$sub2,$sub3,$sub4,$sub5);

 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div align="center">
		<form method="POST">
			<input type="text" name="name" placeholder="Student's Name" required><br><br>
			Marks Obtained Out of 100 <br><br>
			<input type="number" name="1" placeholder="Subject 1" min="0" max="100"><br><br>
			<input type="number" name="2" placeholder="Subject 2" min="0" max="100"><br><br>
			<input type="number" name="3" placeholder="Subject 3" min="0" max="100"><br><br>
			<input type="number" name="4" placeholder="Subject 4" min="0" max="100"><br><br>
			<input type="number" name="5" placeholder="Subject 5" min="0" max="100"><br><br><br>
			<input type="submit" name="submit" value="Get Data">		
		</form>
	</div>
	<h2 align="left">
			Name of Student :
			<?php 
				if($name){
					echo strtoupper($name);	
				}
				

			 ?>
	</h2>
	<br>
	<h3>
		Marks in Each Subject <br>
			<?php
				if ($sub1) {
					$i = 1;
					foreach($all as $marks) {
					echo nl2br("Subject ".($i)." : ".($marks)." Marks\n\n");
						$i++;
					}
				 } 
				

			 ?>
		  <br>
		 Total Marks Obtained : 
		 <?php 

		 	echo array_sum($all)." Marks";

		  ?><br>
		  Total Marks : 500 Marks <br><br>
		  <span style="border: 3px dotted white; padding: 10px; background: black; color: white">
			  Percentage : 
			  <?php 

			  		echo ((array_sum($all)/500)*100)." %";

			   ?>
		   </span>

	</h3>



	

</body>
</html>