<?php
session_start();

$con = mysqli_connect("localhost","root","","kaamkaaj");

$name = $_POST['user'];
$pass = $_POST['password'];

$sql=" select * from form where name='name' && password ='$pass'";
$result=mysqli_query($con,$sql);
$num= mysqli_num_rows($result);

if($num==1){
	header('location:home.php');
}
else{
	header('location:login.php');
}
}
?>