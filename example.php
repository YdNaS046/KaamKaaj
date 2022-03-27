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
	<body>

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

					<h2><div style="text-align: center; padding: 20px; font-family: cursive;" > <b>WELCOME, </b>
					
						<?php echo $_SESSION['username']; ?>
					!</h2>
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

					
					echo "<tr>";
						echo "<td>";
							
						echo "<td>";
						echo "<td>
						<a href ='edit.php?id=$row[ID]&fn=$row[Fname]&ln=$row[Lname]&un=$row[Uname]&pw=$row[Password]&rpw=$row[Repassword]&jb=$row[Job]&pn=$row[Pnumber]&cn=$row[Citizenship]&en=$row[Email]&lon=$row[Location]'
						";
							echo "<b><i> Update </i></b>";
						echo "<td>";
						
						

						
					echo "</tr>";






					echo "</table>";
					echo "</br>"
				?>

			</div>
		</div>
		<header id="header">
    <div class="nav-holder">
      <div class="container1">
    <div id="nav">
      <ul>
       <li> <a href="logout.php">LOG OUT </a></li>
     </ul>
   </div>
 </div>
      </div>
    </header>

		<div class = "footer-bottom">
      &copy; kaam-kaaj.com 
    </div>

	</body>

	</html>