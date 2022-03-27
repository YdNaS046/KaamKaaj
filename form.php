<?php include "nav-bar.php" ?>
<!DOCTYPE html>  
<html>  
<head>
<link rel="stylesheet" type="text/css" href="style.css">  
<style>  
.error {color: #FF0001;}  
</style>  
</head>  
<body>    
  
<?php  
// define variables to empty values  
$nameErr = $lnameErr = $emailErr = $mobilenoErr = $ctznErr = $unameErr = $locationErr = $passwordErr = $repasswordErr = "";  
$name = $lname = $uname =  $email = $mobileno = $location = $password = $repassword = $ctzn =  "";  
  
//Input fields validation  
 if ($_SERVER["REQUEST_METHOD"] == "POST") {  
      
//String Validation  
    if (empty($_POST["Fname"])) {  
         $nameErr = "First Name is required";  
    } else {  
        $name = input_data($_POST["Fname"]);  
            // check if name only contains letters and whitespace  
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) {  
                $nameErr = "Only alphabets and white space are allowed";  
            }  
    } 

    if (empty($_POST["Lname"])) {  
         $lnameErr = "Last Name is required";  
    } else {  
        $lname = input_data($_POST["Lname"]);  
            // check if name only contains letters and whitespace  
            if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {  
                $lnameErr = "Only alphabets and white space are allowed";  
            }  
    } 


    if (empty($_POST["Uname"])) {  
         $unameErr = "User Name is required";  
    } else {  
        $uname = input_data($_POST["Uname"]);  
            // check if name only contains letters and whitespace  
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) {  
                $unameErr = "Only alphabets and white space are allowed";  
            }  
    }
      
    //Email Validation   
    if (empty($_POST["Email"])) {  
            $emailErr = "Email is required";  
    } else {  
            $email = input_data($_POST["Email"]);  
            // check that the e-mail address is well-formed  
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
                $emailErr = "Invalid email format";  
            }  
     }  
    
    //Number Validation  
    if (empty($_POST["Pnumber"])) {  
            $mobilenoErr = "Mobile no is required";  
    } else {  
            $mobileno = input_data($_POST["Pnumber"]);  
            // check if mobile no is well-formed  
            if (!preg_match ("/^[0-9]*$/", $mobileno) ) {  
            $mobilenoErr = "Only numeric value is allowed.";  
            }  
        //check mobile no length should not be less and greator than 10  
        if (strlen ($mobileno) != 10) {  
            $mobilenoErr = "Mobile no must contain 10 digits.";  
            }  
    }  

    //Password Validation
    if (empty($_POST["Password"])) {  
         $passwordErr = "Password is required";  
    } else {  
        $password = input_data($_POST["Password"]);  
            // check if name only contains letters and whitespace  
            if (!preg_match("/^[a-zA-Z ]*$/",$password)) {  
                $passwordErr = "Only alphabets and white space are allowed";  
            }  
    }

    if (empty($_POST["Repassword"])) {  
         $repasswordErr = "Password is required";  
    } else {  
        $repassword = input_data($_POST["Repassword"]);  
            // check if name only contains letters and whitespace  
            if (!preg_match("/^[a-zA-Z ]*$/",$repassword)) {  
                $repasswordErr = "Only alphabets and white space are allowed";  
            }  
    }

    if (empty($_POST["Citizenship"])) {  
         $ctznErr = "Password is required";  
    } else {  
        $ctzn = input_data($_POST["Citizenship"]);  
            // check if name only contains letters and whitespace  
            if (!preg_match ("/^[0-9]*$/", $ctzn) ) {  
                $ctznErr = "Only numeric values are allowed";  
            }  
    }

    if (empty($_POST["Location"])) {  
         $locationErr = "Location is required";  
    } else {  
        $location = input_data($_POST["Location"]);  
            // check if name only contains letters and whitespace  
            if (!preg_match ("/^[a-zA-Z ]*$/", $location) ) {  
                $locationErr = "Only alphabets and white space are allowed";  
            }  
    }


      
      
      
     
}  
function input_data($data) {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
}  
?>  
<center>
<h2>Registration Form</h2>  
<span class = "error">* required field </span>  
<br><br>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >    
    First Name:   
    <input type="text" name="Fname">  
    <span class="error">* <?php echo $nameErr; ?> </span>  
    <br><br>
    Last Name:   
    <input type="text" name="Lname">  
    <span class="error">* <?php echo $lnameErr; ?> </span>  
    <br><br>
    User Name:   
    <input type="text" name="Uname">  
    <span class="error">* <?php echo $unameErr; ?> </span>  
    <br><br> 
    Password:   
    <input type="password" name="Password">  
    <span class="error">* <?php echo $passwordErr; ?> </span>  
    <br><br>
    Re-password:   
    <input type="password" name="Repassword">  
    <span class="error">* <?php echo $repasswordErr; ?> </span>  
    <br><br> 
    Job Type:   
    <select id="Job" name="Job"  >
      <option value="Plumber">Plumber</option>
      <option value="Painter">Painter</option>
      <option value="Gardener">Gardener</option>
      <option value="Mechanic">Mechanic</option>
      <option value="Electrician">Electrician</option>
      <option value="Helper">Helper</option>
    </select> <br><br>
    Mobile No:   
    <input type="text" name="Pnumber">  
    <span class="error">* <?php echo $mobilenoErr; ?> </span>  
    <br><br>
    E-mail:   
    <input type="text" name="Email">  
    <span class="error">* <?php echo $emailErr; ?> </span>  
    <br><br>   
    Citizenship No:   
    <input type="text" name="Citizenship">  
    <span class="error">* <?php echo $ctznErr; ?> </span>  
    <br><br>
    Location:   
    <input type="text" name="Location">  
    <span class="error">* <?php echo $locationErr; ?> </span>  
    <br><br>  
                               
    <input type="submit" name="submit" value="Submit">   
    <br><br>                             
</form> 
</center> 
  
<?php  
    if(isset($_POST['submit'])) {  
    if($nameErr == "" && $emailErr == "" && $mobilenoErr == "" && $lnameErr == "" && $passwordErr == "" && $ctznErr == ""&& $locationErr == "" && $repasswordErr == "") {  
    $to = $_POST['Email'];
    $subject = 'Registration Successful!';
    $message = "Welcome to the KaamKaaj family.I hope you are doing well. Thank you for choosing us. We assure you right people will contact you for your service. Thank you!";
    $headers = "From: kaamkaaj2021@gmail.com";
    $mail_sent =  mail($to, $subject, $message, $headers);

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

            echo '<script type="text/javascript">alert("Registration Completed Succesfully and mail is sent to your email address.");window.location=\'home.php\';</script>';

    

          
    } else {  
        echo "<h2> <b>You didn't filled up the form correctly.</b> </h2>";  
    }  
    }  
?>  
  
</body>  
</html>  