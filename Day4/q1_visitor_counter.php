
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
$sql = "UPDATE click SET visits = visits+1 WHERE id = 1"; // updates visits in table
$update = mysqli_query($conn,$sql);
$sql = "SELECT visits FROM click WHERE id = 1"; // fetchtes results from table
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){
	while ($row = mysqli_fetch_array($result)) {
			$visits = $row['visits'];
		}
}
else{
	echo 'No Results';
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div align="center">
		<h2>
			Page Visits : 
			<?php 
				echo $visits;
			 ?>
		</h2>
	</div>
</body>
</html>