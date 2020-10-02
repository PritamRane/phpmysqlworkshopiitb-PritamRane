<?php 

	if(isset($_POST['submit'])){
		$text = $_POST['text'];
		$length = strlen($text);
		$rev = strrev($text);
		$arr = str_split($text);
		$lwr = strtolower($text);
		$upr = strtoupper($text);
		$sub =  "declaredsubstring";
		$subtr = strtr($text, $text, $sub);

	}

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<br><br><br>
	<div align="center">
		String Functions <br><br>
 		<form method="POST">
 			<input type="text" name="text" placeholder="Enter Random Text"><br><br>
 			<input type="submit" name="submit" value="GET DATA">
 		</form><br><br>
 		<?php 

 			if(isset($_POST['submit'])){
 				echo "String : ".$text."<br><br>";
 				echo "Length : ".$length."<br><br>";
 				echo "Reverse : ".$rev."<br><br>";
 				echo "Break into array : ";
 				print_r($arr);
 				echo "<br><br>";
 				echo "String UPPER : ".$upr."<br><br>";
 				echo "String lower : ".$lwr."<br><br>";
 				echo "String Sub-st-ring : ".$subtr."<br><br>";
 			}

 		 ?>
 	</div>
 </body>
 </html>