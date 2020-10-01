<?php 
	if (!empty($_GET[1])) {
		
		$a = $_GET['1'];

		$b = $_GET['2'];
			
		$c = $_GET['3'];
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1 align="center">program to check whether the
	triangle is isosceles, equilateral, scalene or right angled triangle.</h1>
	<h2 align="center">Enter Sides</h2>
	<div align="center">
		<form action="q6_1_special_variables_html.php">
			<input type="number" name="1" min="0">
			<input type="number" name="2" min="0">
			<input type="number" name="3" min="0"><br><br>
			<input type="submit" name="submit" value
			="Check"><br><br>
			<h1 colour="red">
				<?php 
					if (!empty($_GET[1])){
							if ($a && $b && $c) {
							if($a == $b && $b == $c){	
								echo "Equilateral Triangle";
							}
							elseif ($a == $b || $b == $c || $a == $c) {
									echo "Isosceles Triangle";
							}

							elseif ((($a**2 + $b**2) == $c**2) || (($b**2 + $c**2) == $a**2) || (($a**2 + $c**2) == $b**2)) {
								echo "Right Angled And Scalene Triangle";
							}
							else{
								echo "Scalene Triangle";
							}
						}	
					}
					

				 ?>
			</h1>
		</form>
	</div>
</body>
</html>

