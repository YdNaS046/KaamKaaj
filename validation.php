<?php
session_start();

$con = mysqli_connect("localhost","root","","kaamkaaj");

$name = $_POST['Uname'];
$pass = $_POST['Pass'];

$sql=" select * from form where Uname='$name' && Password ='$pass'";
$result=mysqli_query($con,$sql);
$num= mysqli_num_rows($result);

if($num==1){
	$_SESSION['username'] = $name;
	header('location:example.php');

	
}
else{
	
	echo '<script type="text/javascript">alert("Incorrect username or password. Please try AGAIN!");window.location=\'login.php\';</script>';
	
}

?>