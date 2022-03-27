<?php
session_start();

?>



<!DOCTYPE html>
<html>
<head> 
	<title> Profile </title>
<link rel="stylesheet" type="text/css" href="style.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<html lang = "en" dir = "ltr">
</head>
	<body style="background-color: blue;">
		<div class="container9">
			<form action="" method="post">
				<button style="float: right;" width:70px; name="submit1"> EDIT </button>

			</form>

			<div class="wrapper">
				<?php

					

					$con = mysqli_connect("localhost","root","","kaamkaaj");

					$sql="SELECT * FROM form where Uname='$_SESSION[username]'";

					$q= mysqli_query($con,$sql);

				?>

				<h2 style> My Profile </h2>
				<?php
					$row=mysqli_fetch_assoc($q);

					?>

					<div style="text-align: center;"> <b>WELCOME, </b></div>
					<h4>
						<?php echo $_SESSION['username']; ?>
					</h4>
				</div>
			</div>
	</body>