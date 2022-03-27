<!DOCTYPE html>  
<html>  
<head>  
<style>  
.error {color: #FF0001;}  
</style>  
</head>  
<body>    
  
<?php  
// define variables to empty values  
$FnameErr = $LnameErr = $EmailErr = $ContactErr = $EaddressErr = $EventErr = $DateErr = $BudgetErr = $ServicesErr = $AttendeesErr = ""; 
$Fname = $Lname = $Email = $Contact = $Eaddress = $Event = $Datee = $Budget = $Services = $Attendees = "";  
  
  
//Input fields validation  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
      
//String Validation  
    if (empty($_POST["Fname"])) {  
         $FnameErr = "First Name is required";  
    } else {  
        $Fname = input_data($_POST["Fname"]);  
            // check if name only contains letters and whitespace  
            if (!preg_match("/^[a-zA-Z ]*$/",$Fname)) {  
                $FnameErr = "Only alphabets and white space are allowed";  
            }  
    }

     if (empty($_POST["Lname"])) {  
         $LnameErr = "Last Name is required";  
    } else {  
        $Lname = input_data($_POST["Lname"]);  
            // check if name only contains letters and whitespace  
            if (!preg_match("/^[a-zA-Z ]*$/",$Lname)) {  
                $LnameErr = "Only alphabets and white space are allowed";  
            }  
    }

    if (empty($_POST["Eaddress"])) {  
         $EaddressErr = "Address is required";  
    } else {  
        $Eaddress = input_data($_POST["Eaddress"]);  
            // check if name only contains letters and whitespace  
            if (!preg_match("/^[a-zA-Z ]*$/",$Eaddress)) {  
                $EaddressErr = "Only alphabets and white space are allowed";  
            }  
    }  
      
    //Email Validation   
    if (empty($_POST["Email"])) {  
            $EmailErr = "Email is required";  
    } else {  
            $Email = input_data($_POST["Email"]);  
            // check that the e-mail address is well-formed  
            if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {  
                $EmailErr = "Invalid email format";  
            }  
     }  
    
    //Number Validation  
    if (empty($_POST["Contact"])) {  
            $ContactErr = "Mobile no is required";  
    } else {  
            $Contact = input_data($_POST["Contact"]);  
            // check if mobile no is well-formed  
            if (!preg_match ("/^[0-9]*$/", $Contact) ) {  
            $ContactErr = "Only numeric value is allowed.";  
            }  
        //check mobile no length should not be less and greator than 10  
        if (strlen ($Contact) != 10) {  
            $ContactErr = "Mobile no must contain 10 digits.";  
            }  
    }  
      
      
      
    //Empty Field Validation  
    if (empty ($_POST["Event"])) {  
            $EventErr = "Anyone Event is required";  
    } else {  
            $Event = input_data($_POST["Event"]);  
    }

     //Empty Field Validation  
    if (empty ($_POST["Date"])) {  
            $DateErr = "Date is required";  
    } else {  
            $Date = input_data($_POST["Date"]);  
    } 

     //Empty Field Validation  
    if (empty ($_POST["Budget"])) {  
            $BudgetErr = "Budget is required";  
    } else {  
            $Budget = input_data($_POST["Budget"]);
            if (!preg_match ("/^[0-9]*$/", $Budget) ) {  
            $BudgetErr = "Only numeric value is allowed.";  
            }  
    }

     //Empty Field Validation  
    if (empty ($_POST["Attendees"])) {  
            $AttendeesErr = "Attendees is required";  
    } else {  
            $Attendees = input_data($_POST["Attendees"]); 
            if (!preg_match ("/^[0-9]*$/", $Attendees) ) {  
            $AttendeesErr = "Only numeric value is allowed.";  
            } 
    }  
  
    //Checkbox Validation  
    if (!isset($_POST["Services"])){  
            $ServicesErr = "Choose any one.";  
    }  
}  
function input_data($data) {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
}  
?>  
  
<h2>Registration Form</h2>  
<span class = "error">* required field </span>  
<br><br>  
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >    
    First Name:   
    <input type="text" name="Fname">  
    <span class="error">* <?php echo $FnameErr; ?> </span>  
    <br><br>
    Last Name:   
    <input type="text" name="Lname">  
    <span class="error">* <?php echo $LnameErr; ?> </span>  
    <br><br>
    Contact Number:   
    <input type="text" name="Contact">  
    <span class="error">* <?php echo $ContactErr; ?> </span>  
    <br><br>  
    E-mail:   
    <input type="text" name="Email">  
    <span class="error">* <?php echo $EmailErr; ?> </span>  
    <br><br>    
    Event You are Hosting:  
    <input type="radio" name="Event" value="Wedding"> Wedding 
    <input type="radio" name="Event" value="Birthday"> Birthday
    <input type="radio" name="Event" value="BabyShower"> BabyShower
    <input type="radio" name="Event" value="Barthabandha"> Barthabandha
    <input type="radio" name="Event" value="Gufa"> Gufa
    <input type="radio" name="Event" value="Pasni"> Rice Feeding(Pasni)
    <input type="radio" name="Event" value="Seminar"> Seminar 
    <input type="radio" name="gender" value="Bachelorette Party"> Bachelorette Party    
    <span class="error">* <?php echo $EventErr; ?> </span>  
    <br><br>
    Date of the event:
    <input type = "date" placeholder="Date of the event" id = "Date" name = "Date">
    <span class="error">* <?php echo $DateErr; ?> </span>  
    <br><br>
    Address of the event:
    <input type = "text" placeholder="Address of the event" id = "Eaddress" name = "Eaddress">
    <span class="error">* <?php echo $EaddressErr; ?> </span>  
    <br><br>
    Budget of the event:
    <input type = "number" placeholder="Budget of the event" id = "Budget" name = "Budget">
    <span class="error">* <?php echo $BudgetErr; ?> </span>  
    <br><br>
    Attendees of the event:
    <input type = "number" placeholder="Attendees of the event" id = "Attendees" name = "Attendees">
    <span class="error">* <?php echo $AttendeesErr; ?> </span>  
    <br><br>

    
    Choose your Service:  
    <input type="checkbox" name="Services[]" value="cattering">Cattering
    <input type="checkbox" name="Services[]" value="music">Music
    <input type="checkbox" name="Services[]" value="photographer">Photographer
    <input type="checkbox" name="Services[]" value="props">Props
    <input type="checkbox" name="Services[]" value="Venue Decoration">Venue Decoration
    <input type="checkbox" name="Services[]" value="Extra Event Organization">Extra Event Organization

    <span class="error">* <?php echo $ServicesErr; ?> </span>  
    <br><br>
                               
    <input type="submit" name="submit" value="Submit">   
    <br><br>                             
</form>  
  
<?php  
    if(isset($_POST['submit'])) {  
    if($FnameErr == "" && $LnameErr == "" && $EmailErr == "" && $ContactErr == "" && $EventErr == "" && $DateErr == "" && $EaddressErr == "" && $BudgetErr == "" && $AttendeesErr == "" ) {  
        echo "<h3 color = #FF0001> <b>You have sucessfully registered.</b> </h3>";  
          
    } else {  
        echo "<h3> <b>You didn't filled up the form correctly...</b> </h3>";  
    }  
    }  
?>  
  
</body>  
</html>

<!-- $FnameErr = $LnameErr = $EmailErr = $ContactErr = $AddressErr = $EventErr = $DoeErr = $AoeErr = $BoeErr = $ServicesErr = $AttErr = ""; 
$FnameErr == "" && $LnameErr == "" && $EmailErr == "" && $ContactErr == "" && $AddressErr == "" && $EventErr == "" && $DoeErr == "" && $AoeErr == "" && $BoeErr == "" && $ServicesErr == "" && $AttErr == ""
-->