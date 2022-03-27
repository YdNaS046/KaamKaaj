
<?php include "nav-bar.php" ?>
<!DOCTYPE html>
<html>
		<head>
				<title>Display </title>
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
		
	
		
	

	<?php
		$con = mysqli_connect("localhost","root","","kaamkaaj");
						if($con->connect_error){
							die("Connection failed: " . $con->connect_error);
								}
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

		


		
	echo "</table>"

	?>

</table>

	
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
		$sql= "SELECT ID, Fname, Job , Pnumber , Location from form where Job='Plumber'";
		$result= $con-> query($sql);

		if($result-> num_rows >0){
			while ($row=$result-> fetch_assoc()){

				echo "<tr> <td>".$row["ID"]. "</td><td>" . $row["Fname"] . "</td> <td>".$row["Job"] ."</td><td>" . $row["Pnumber"] . "</td> <td>" . $row["Location"] . "</td> </tr>";
			
			}
			echo "</table>";

		}
		else {
			echo "Zero result";
		}

		$con->close();
		?>
	</table>




<div class = "footer-bottom">
      &copy; kaam-kaaj.com | Designed by guuuu
    </div>

</body>
</html>