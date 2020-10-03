<?php 
	if(isset($_POST['submit'])){

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "data1";
		$conn = mysqli_connect($servername,$username,$password,$dbname);
		if(!$conn){
			die("Connection Failed : ".mysqli_connect_error());
		}
		$username = $_POST['username'];
		$password = $_POST['password'];
		$passenc = md5($password);
		$sql = "INSERT INTO login (username,password) VALUES ('$username','$passenc')";
		$result = mysqli_query($conn,$sql);

	}

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <style>
		@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

        * {
            margin: 0;
            padding: 20px;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        .inputstyle{
        	position: relative;
			width: 300px;
			height: auto;
			padding: 10px;
			background: #f5f5f5;
			color: #333;
			border: none;
			box-shadow: 0px 11px 10px -7px rgba(0, 0, 0, 0.72);
			margin: 10px 0;
			font-size: 14px;
			letter-spacing: 1px;
			font-weight: 300;
			border-radius: 12px 12px 12px 12px;
        }
        .inputstyle:active,
        .inputstyle:focus{
        	outline: 0;
        }
        #submit{
        		position: relative;
				box-sizing: content-box;
				width: auto;
				background: #ff0;
				color: #333;
				border: none;
				box-shadow: 0px 11px 10px -7px rgba(0, 0, 0, 0.72);
				margin: 10px 0;
				font-size: 14px;
				letter-spacing: 1px;
				font-weight: bolder;
				border-radius: 12px 12px 12px 12px;
				padding: 10px 25px;
				text-align: center;
				text-transform: uppercase;
				transition: 0.5s;
        	}
        #submit:hover,
        #submit:focus{
			background: #000000;
			color: rgb(255, 255, 255);
			transition: 0.5s;
			outline: 0px;
        }
</style>
 <body>
 	<div align="center">
 		<form method="POST" action="q1_md5.php">
 			<input contenteditable class="inputstyle" type="text" name="username" placeholder="Username" required><br><br>
 			<input class="inputstyle" type="password" name="password" placeholder="Password" required><br><br>
 			<input id="submit" type="submit" name="submit" value="login"><br><br><br>
 		</form><br><br><br>
 		<?php 
 			if(isset($_POST['submit'])){
	 			if($result){
	 				echo "Record was created successfully<br><br>";
	 			}
	 			else{
	 				echo "No record was created ";
	 			}

	 			echo "Encrypted password is ".$passenc;
			}

 		 ?><br><br>
 	</div>
 </body>
 </html>