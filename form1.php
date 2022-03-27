<?php include "nav-bar.php" ?>

<?php
if(isset($_POST['submit']))
{
  $Fname = $_POST['Fname'];
  if(strlen($Fname)<=3)
  {
    echo "Username should not be less than 2 characters";
  }
}

?>



<!DOCTYPE html>
	<head> <title>Form Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<html lang = "en" dir = "ltr">

		<form method = "post" name="myform" onsubmit="return validateform()" action="db.php">
      

			<fieldset>
        <div class="form-control">
        	
            		
<legend>REGISTRATION FORM</legend>
			<!--name-->

  <label class="fname">First name</label><br>
  <input type="text" id="Fname" name="Fname"  ><br>
  
</div>

  <div class="form-control">
  <label class="lname">Last name</label><br>
  <input type="text" id="Lname" name="Lname" ><br>
  
</div>


  <div class="form-control">
  <label class="uname">User name</label><br>
  <input type="text" id="Uname" name="Uname" ><br>
  
</div>

  <!--for password-->
  <div class="form-control">
  <label class="pwd">Password</label><br>
  <input type="password" id="Password" name="Password" ><br>
  
</div>

<div class="form-control">
  <label class="pwd1">Re-type Password</label><br>
  <input type="password" id="Repassword" name="Repassword" ><br>
  
</div>
  <!--for job type-->

  <div class="form-control">

  <label class="jtype">Job type</label><br>
    <select id="Job" name="Job"  >
      <option value="Plumber">Plumber</option>
      <option value="Painter">Painter</option>
      <option value="Gardener">Gardener</option>
	  <option value="Mechanic">Mechanic</option>
      <option value="Electrician">Electrician</option>
      <option value="Helper">Helper</option>
    </select> <br>
    
  </div>

  <div class="form-control" style="height: 63.2px;">

    <!--for phone number-->

    <label class="phn"> Phone Number </label><br>
    <input type="text" id="Pnumber" name="Pnumber" > <br>
  </div>

  <div class="form-control">

    <!--for citizenship-->
    <label class="citizenship"> Citizenship No. </label><br>
    <input type="text" id="Citizenship" name="Citizenship" > <br>
    
  </div>

  <div class="form-control">

    <!--for email address-->
    <label class="email"> Email </label><br>
    <input type="text" id="Email" name="Email"  > <br>
    

</div>

<div class="form-control">
    <!--for location-->
    <label class="location"> Location </label><br>
    <input type="text" id="Location" name="Location"  > <br>
    

    

    </div>

    
    <!--for submit and reset-->
    <div class="action">
    <input type="submit" value="Submit">
    <input type="reset" value="Reset">
  </div>


	</fieldset>

	</form>

  <div class = "footer-bottom">
      &copy; kaam-kaaj.com 
    </div>
	</body>

</html>


