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