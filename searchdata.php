
<?php include "nav-bar.php" ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<html lang = "en" dir = "ltr">
		 </head>
<body>

	<center>
	<div class="container5">
		<form action="searchdata.php" method="POST">
		<input type="text" name="Location" placeholder="Enter your preferred location">
		<input type="submit" name="search" value="SEARCH BY LOCATION">
	</form>
	</div>

	</center>

	<table>
	<tr>
			<th> ID </th>
			<th> Firstname </th>
			<th> Job</th>
			<th> Contact Number</th>
			<th> Location</th>
		</tr>
	
	
		
	

	<?php
		$con = mysqli_connect("localhost","root","","kaamkaaj");
						if($con->connect_error){
							die("Connection failed: " . $con->connect_error);
								}


		$pid=$_GET['id'];
		if($pid=='plumber')
		{
		if(isset($_POST['search']))
		{
			$location=$_POST['Location'];

			$query="SELECT * FROM form where Location='$location' && Job='Plumber'";

			$query_run = mysqli_query($con,$query);

			while($row = mysqli_fetch_array($query_run))

			{
				
				echo "<tr> <td>".$row["ID"]. "</td><td>" . $row["Fname"] . "</td> <td>".$row["Job"] ."</td><td>" . $row["Pnumber"] . "</td> <td>" . $row["Location"] . "</td> </tr>";

			}
		}
	}



		if(isset($_POST['search']))
		{
			$location=$_POST['Location'];

			$query1="SELECT * FROM form where Location='$location' && Job='Helper'";

			$query_run = mysqli_query($con,$query1);

			while($row = mysqli_fetch_array($query_run))

			{
				
				echo "<tr> <td>".$row["ID"]. "</td><td>" . $row["Fname"] . "</td> <td>".$row["Job"] ."</td><td>" . $row["Pnumber"] . "</td> <td>" . $row["Location"] . "</td> </tr>";

			}	

		}
	

		


		
	echo "</table>"

	?>

</table>


</body>
</html>

