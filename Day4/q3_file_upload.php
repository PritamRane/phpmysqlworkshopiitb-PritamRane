<?php 

	if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_type=$_FILES['image']['type'];
      $extension= pathinfo(basename($_FILES['image']['name']),PATHINFO_EXTENSION);
    }

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<style type="text/css">
 		th,tr{
 			padding: 15px;
 		}
 	</style>
 </head>
 <body>
 	<div align="center">
 		     <form action="" method="POST" enctype="multipart/form-data">
 			Select anything to upload : 
 			<input type="file" name="image" /><br><br><br>
         	<input type="submit"/>
 		</form><br>
 		<table border='1'>
 			<tr >
 				<th>Name</th>
 				<th>Extension</th>
 				<th>Type</th>
 				<th>Size in Bytes</th>
			</tr>
			<tr>
				<?php 
					if(isset($_FILES['image'])){
						echo "<th>$file_name</th>
				<th>".".$extension</th>
				<th>$file_type</th>
				<th>$file_size</th>";
					}
				 ?>
			</tr>
 			
 		</table>
 	</div>
 </body>
 </html>