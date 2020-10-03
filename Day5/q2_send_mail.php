<?php 

	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$feedback = $_POST['feedback'];
		$subjectForUser = "Thanks for connecting with us!";
		$feedbackForUser = "Thank You ".$name.". Your opinion matters. We'll surely look into it !!";
		$headerForUser = 'admin@freakiedoom.com';
		mail($email, $subjectForUser, $feedbackForUser, $headerForUser);
		$mailForAdmin = "Name : ".$name."\n Email : ".$email."\n Feedback : ".$feedback;
		mail('raneprira18it@student.mes.ac.in', 'Feedback from '.$name, $mailForAdmin);
	}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        .inputstyle{
        	position: relative;
			width: 50%;
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
				padding: 10px 15px;
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
</head>
<body>
	<div align="center">
		<form action="q2_send_mail.php" method="POST">
			<input class="inputstyle" type="text" name="name" placeholder="Username" required min='1' max='30'><br><br>
			<input class="inputstyle" type="email" name="email" placeholder="Email" required><br><br>
			<textarea class="inputstyle" name="feedback" required maxlength="300" rows="4" cols="50" placeholder="Your Useful feedback"></textarea><br><br>
			<input id="submit" type="submit" name="submit" value="send feedback">
		</form> <br><br>
		<?php 
			if (isset($_POST['submit'])){
				echo "<h2>Feedback Submitted</h2>";		
				 $page = $_SERVER['PHP_SELF'];
				 $sec = "5";
				 header("Refresh: $sec; url=$page");
			}
		 ?>
	</div>
</body>
</html>