db.php (backup)


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php

	$firstname = $_POST['Fname'];
	$lastname = $_POST['Lname'];
	$username = $_POST['Uname'];
	$password = $_POST['Password'];
	$repassword = $_POST['Repassword'];
	$jobtype = $_POST['Job'];
	$phone = $_POST['Pnumber'];
	$citizenship = $_POST['Citizenship'];
	$email = $_POST['Email'];
	$location = $_POST['Location'];

						$con = mysqli_connect("localhost","root","","kaamkaaj");
						if($con->connect_error){
							die("Connection failed: " . $con->connect_error);
								}

						$sql = "insert into form(Fname,Lname,Uname,Password,Repassword,Job,Pnumber,Citizenship,Email,Location) values('".$firstname."', '".$lastname."', '".$username."', '".$password."', '".$repassword."', '".$jobtype."', '".$phone."', '".$citizenship."',
						'".$email."', '".$location."')";

						$result = $con->query($sql);
						mysqli_close ($con);

						echo '<script type="text/javascript">alert("Registration Completed Succesfully");window.location=\'home.php\';</script>';

?>	
</body>
</html>		




//example.php

<?php
session_start();
if(!isset($_SESSION['username'])){
	header('location:login.php');
}
?>


<!DOCTYPE html>
<html>
<head> 
	<title> Profile </title>
<link rel="stylesheet" type="text/css" href="style.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<html lang = "en" dir = "ltr">
</head>
	<body style="background-color: pink;">
		<div class="container9">
			<form action="" method="post">
				<button style="float: right; width:70px; "name="submit1"> EDIT </button>
				<a button style="width: 100px; float: left;" href="logout.php">LOG OUT </a>

			</form>

			<div class="wrapper" background-color="red">
				<?php
					if(isset($_POST['submit1']))
					{
						?>
						<script type="text/javascript">
							window.location="edit.php"
						</script>
						
						<?php
					}
					

					$con = mysqli_connect("localhost","root","","kaamkaaj");

					$sql="SELECT * FROM form where Uname='$_SESSION[username]'";

					$q= mysqli_query($con,$sql);

					$row=mysqli_fetch_assoc($q);

					?>

					<h2><div style="text-align: center; padding-bottom: 20px;" > <b>WELCOME, </b>
					
						<?php echo $_SESSION['username']; ?>
					</h2>
				</div>
				<?php
					echo "<b>";
					echo "<table class='table table-bordered'>";

					echo "<tr>";
						echo "<td>";
							echo "<b> First Name: </b>";
						echo "<td>";

						echo "<td>";
							echo $row['Fname'];
						echo "<td>";
					echo "</tr>";

					echo "<tr>";
						echo "<td>";
							echo "<b> Last Name: </b>";
						echo "<td>";
						
						echo "<td>";
							echo $row['Lname'];
						echo "<td>";
					echo "</tr>";


					echo "<tr>";
						echo "<td>";
							echo "<b> User Name: </b>";
						echo "<td>";
						
						echo "<td>";
							echo $row['Uname'];
						echo "<td>";
					echo "</tr>";

					echo "<tr>";
						echo "<td>";
							echo "<b> Password: </b>";
						echo "<td>";
						
						echo "<td>";
							echo $row['Password'];
						echo "<td>";
					echo "</tr>";

					echo "<tr>";
						echo "<td>";
							echo "<b> Job: </b>";
						echo "<td>";
						
						echo "<td>";
							echo $row['Job'];
						echo "<td>";
					echo "</tr>";

					echo "<tr>";
						echo "<td>";
							echo "<b> Phone Number: </b>";
						echo "<td>";
						
						echo "<td>";
							echo $row['Pnumber'];
						echo "<td>";
					echo "</tr>";

					echo "<tr>";
						echo "<td>";
							echo "<b> Citizenship No.: </b>";
						echo "<td>";
						
						echo "<td>";
							echo $row['Citizenship'];
						echo "<td>";
					echo "</tr>";

					echo "<tr>";
						echo "<td>";
							echo "<b> Email: </b>";

						echo "<td>";
						
						echo "<td>";
							echo $row['Email'];
						echo "<td>";
					echo "</tr>";

					echo "<tr>";
						echo "<td>";
							echo "<b> Location: </b>";
						echo "<td>";
						
						echo "<td>";
							echo $row['Location'];
						echo "<td>";
					echo "</tr>";





					echo "</table>";
					echo "</br>"
				?>

			</div>
		</div>
	</body>

	</html>



	/* 

	<?php
session_start();
if(!isset($_SESSION['username'])){
	header('location:login.php');
}
?>


<!DOCTYPE html>
<html>
<head> 
	<title> Profile </title>
<link rel="stylesheet" type="text/css" href="style.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<html lang = "en" dir = "ltr">
</head>
	<body style="background-color: pink;">
		<div class="container9">
			<form action="" method="post">
				

			</form>

			<div class="wrapper" background-color="red">
				<?php
					
					

					$con = mysqli_connect("localhost","root","","kaamkaaj");

					$sql="SELECT * FROM form where Uname='$_SESSION[username]'";

					$q= mysqli_query($con,$sql);

					$row=mysqli_fetch_assoc($q);

					?>

					<h2><div style="text-align: center; padding-bottom: 20px;" > <b>WELCOME, </b>
					
						<?php echo $_SESSION['username']; ?>
					</h2>
				</div>
				<?php
					echo "<b>";
					echo "<table class='table table-bordered'>";

					echo "<tr>";
						echo "<td>";
							echo "<b> ID: </b>";
						echo "<td>";

						echo "<td>";
							echo $row['ID'];
						echo "<td>";
					echo "</tr>";

					echo "<tr>";
						echo "<td>";
							echo "<b> First Name: </b>";
						echo "<td>";

						echo "<td>";
							echo $row['Fname'];
						echo "<td>";
					echo "</tr>";

					echo "<tr>";
						echo "<td>";
							echo "<b> Last Name: </b>";
						echo "<td>";
						
						echo "<td>";
							echo $row['Lname'];
						echo "<td>";
					echo "</tr>";


					echo "<tr>";
						echo "<td>";
							echo "<b> User Name: </b>";
						echo "<td>";
						
						echo "<td>";
							echo $row['Uname'];
						echo "<td>";
					echo "</tr>";

					echo "<tr>";
						echo "<td>";
							echo "<b> Password: </b>";
						echo "<td>";
						
						echo "<td>";
							echo $row['Password'];
						echo "<td>";
					echo "</tr>";

					echo "<tr>";
						echo "<td>";
							echo "<b> Job: </b>";
						echo "<td>";
						
						echo "<td>";
							echo $row['Job'];
						echo "<td>";
					echo "</tr>";

					echo "<tr>";
						echo "<td>";
							echo "<b> Phone Number: </b>";
						echo "<td>";
						
						echo "<td>";
							echo $row['Pnumber'];
						echo "<td>";
					echo "</tr>";

					echo "<tr>";
						echo "<td>";
							echo "<b> Citizenship No.: </b>";
						echo "<td>";
						
						echo "<td>";
							echo $row['Citizenship'];
						echo "<td>";
					echo "</tr>";

					echo "<tr>";
						echo "<td>";
							echo "<b> Email: </b>";

						echo "<td>";
						
						echo "<td>";
							echo $row['Email'];
						echo "<td>";
					echo "</tr>";

					echo "<tr>";
						echo "<td>";
							echo "<b> Location: </b>";
						echo "<td>";
						
						echo "<td>";
							echo $row['Location'];
						echo "<td>";


					echo "</tr>";

					echo "<tr>";
						echo "<td>
						<a href ='edit.php?id=$row[ID]&fn=$row[Fname]&ln=$row[Lname]&un=$row[Uname]&pw=$row[Password]&rpw=$row[Repassword]&jb=$row[Job]&pn=$row[Pnumber]&cn=$row[Citizenship]&en=$row[Email]&lon=$row[Location]'
						";
							echo "<b> Update </b>";
						echo "<td>";
						
						

						
					echo "</tr>";





					echo "</table>";
					echo "</br>"
				?>

			</div>
		</div>
	</body>

	</html>

	**/