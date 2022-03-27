<?php
session_start();
if(!isset($_SESSION['username'])){
  header('location:login.php');
}




$con = mysqli_connect("localhost","root","","kaamkaaj");
            if($con->connect_error){
              die("Connection failed: " . $con->connect_error);
                }




$ID= $_GET['id'];
$fn = $_GET['fn'];
$ln = $_GET['ln'];
$un = $_GET['un'];
$pw = $_GET['pw'];
$rpw = $_GET['rpw'];
$jb = $_GET['jb'];
$pn = $_GET['pn'];
$cn = $_GET['cn'];
$en = $_GET['en'];
$lon = $_GET['lon'];
?>

<!DOCTYPE html>
	<head> <title>Form Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<html lang = "en" dir = "ltr">




      
    

	</head>
	<body>
    <center>
     <h2 style="padding: 25px;"> Edit Your Form </h2>
     <h4> You can only edit your password, phone number, email and location. <h4>



    </center>
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
    <form action="" method="get">
        

      </form>
   


		<form method = "post" name="myform">
      

			<fieldset>
        <div class="form-control">

  <label class="id">ID</label><br>
  <input type="text" id="ID" name="ID" value="<?php echo "$ID" ?>" readonly><br>
  
</div>
        <div class="form-control">

  <label class="fname">First name</label><br>
  <input type="text" id="Fname" name="Fname" value="<?php echo "$fn" ?>" readonly ><br>
  
</div>

  <div class="form-control">
  <label class="lname">Last name</label><br>
  <input type="text" id="Lname" name="Lname" value="<?php echo "$ln" ?>" readonly ><br>
  
</div>


  <div class="form-control">
  <label class="uname">User name</label><br>
  <input type="text" id="Uname" name="Uname" value="<?php echo "$un" ?>" readonly><br>
  
</div>

  <!--for password-->
  <div class="form-control">
  <label class="pwd">Password</label><br>
  <input type="password" id="Password1" name="Password1" value="<?php echo "$pw" ?>" ><br>
  
</div>

<div class="form-control">
  <label class="pwd1">Re-type Password</label><br>
  <input type="password" id="Repassword1" name="Repassword1" value="<?php echo "$rpw" ?>" ><br>
  
</div>
  <!--for job type-->

  <div class="form-control">

  <label class="job"> Job </label><br>
    <input type="text" id="job" name="job" value="<?php echo "$jb" ?>" readonly> <br>

  <div class="form-control" style="height: 63.2px;">

    <!--for phone number-->

    <label class="phn"> Phone Number </label><br>
    <input type="text" id="Pnumber1" name="Pnumber1" value="<?php echo "$pn" ?>" > <br>
  </div>

  <div class="form-control">

    <!--for citizenship-->
    <label class="citizenship"> Citizenship No. </label><br>
    <input type="text" id="Citizenship1" name="Citizenship1" value="<?php echo "$cn" ?>" readonly> <br>
    
  </div>

  <div class="form-control">

    <!--for email address-->
    <label class="email"> Email </label><br>
    <input type="text" id="Email1" name="Email1" value="<?php echo "$en" ?>"  > <br>
    

</div>

<div class="form-control">
    <!--for location-->
    <label class="location"> Location </label><br>
    <input type="text" id="Location1" name="Location1" value="<?php echo "$lon" ?>" > <br>
    

    

    </div>

    
    <!--for submit and reset-->
    <div class="action">
    <input type="submit" value="UPDATE" name="update1">
   
  </div>
	</fieldset>

	</form>

  <div class = "footer-bottom">
      &copy; kaam-kaaj.com 
    </div>
	</body>

</html>


<?php



           $con = mysqli_connect("localhost","root","","kaamkaaj");
            if($con->connect_error){
              die("Connection failed: " . $con->connect_error);
                }

                if(isset($_POST['update1']))
                {
                  $ID= $_POST['ID'];


           

             $query = "UPDATE form SET Password='".$_POST['Password1']."',Repassword='".$_POST['Repassword1']."',Pnumber='".$_POST['Pnumber1']."',Email='".$_POST['Email1']."',Location='".$_POST['Location1']."' WHERE ID='".$_POST['ID']."'";
            $query_run = mysqli_query($con,$query);
            
            if($query_run)
            {
            echo '<script type="text/javascript">alert("Updated");window.location=\'example.php\';</script>';
          
          }

          else
          {
            echo '<script type="text/javascript">alert("Not updated");window.location=\'example.php\';</script>';

          }

        }
?>  

