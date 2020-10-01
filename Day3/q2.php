<?php 
		$servername = "localhost";
		$username = "root";
		$password = "";

		// Create connection
		$conn = mysqli_connect($servername, $username, $password,"result");
		// server , user , pass , dbname

		// Check connection
		if (!$conn) {
		  die("Connection failed: " . mysqli_connect_error());
		}
		echo "Connected Successfully<br>";
		$sql = "UPDATE class1 SET sub5='99' WHERE name = 'Rohan'"; //update marks sub5
		$update = mysqli_query($conn,$sql);
		if(mysqli_query($conn,$sql)){
			echo "Updated<br>";
		}
		$sql = "SELECT * FROM class1 WHERE name = 'Rohan'"; // retrieve info for percent and marks calculation
		$result = mysqli_query($conn,$sql);
		if(mysqli_num_rows($result) > 0){
			while ($row = mysqli_fetch_array($result)) {
				$sub1 = $row['sub1'];	
				$sub2 = $row['sub2'];
				$sub3 = $row['sub3'];
				$sub4 = $row['sub4'];
				$sub5 = $row['sub5'];
				$all = array($sub1,$sub2,$sub3,$sub4,$sub5);
				$sum = array_sum($all);
				$perc = ((array_sum($all)/500)*100);
				$sql = "UPDATE class1 SET totalObtained='$sum', percent='$perc' WHERE name = 'Rohan'"; // update percent and marks
				mysqli_query($conn,$sql);
			}
		}
		

		
	

 ?>