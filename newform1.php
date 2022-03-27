<?php require_once('Connections/eventyojana.php'); ?>
<?php include 'header.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<br/><br/><br/>
<form action="db.php" method = "post" >
  <center><h3>Event योजना </h3></center><br/>
  First name : <input type = "text" placeholder = "Firstname" id = "Fname" name="Fname">
  Last name : <input type = "text" placeholder = "Lastname" id = "Lname" name="Lname" >
  Contact Number : <input type = "text" placeholder = "Contact Number" id = "Contact" name="Contact">
  Address : <input type = "text" placeholder = "Address" id = "Address" name="Address">
  Email : <input type = "email" placeholder = "Email" id = "Email" name="Email">

  Event you're hosting : <br><br/>
  <input type="radio" id="Wedding" name="Event" value="Wedding">
  <label for="Wedding">Wedding</label><br>

  <input type="radio" id="Birthday" name="Event" value="Birthday">
  <label for="Birthday">Birthday</label><br>

  <input type="radio" id="BabyShower" name="Event" value="BabyShower">
  <label for="BabyShower">BabyShower</label><br>

  <input type="radio" id="Barthabandha" name="Event" value="Barthabandha">
  <label for="Barthabandha">Barthabandha</label><br>

  <input type="radio" id="Gufa" name="Event" value="Gufa">
  <label for="Gufa">Gufa</label><br>

  <input type="radio" id="Pasni" name="Event" value="Pasni">
  <label for="Pasni">Rice Feeding(Pasni)</label><br> 

  <input type="radio" id="Seminar" name="Event" value="Seminar">
  <label for="Seminar">Seminar</label><br>

   <input type="radio" id="Bparty" name="Event" value="Bparty">
  <label for="Bparty">Bachelorette Party</label><br><br>

  Date of the event : <input type = "text" placeholder="Date of the event" id = "Date" name = "Date">

  Address for the event : <input type = "text" placeholder = "Address for the event" id = "Eaddress" name="Eaddress">
  Budget for the event : <input type = "number" placeholder = "Budget for the event" id = "Budget" name="Budget">
  Choose your services : <label for="serv1"></label><br/><br/> 

      <input type="checkbox" id="Services" name="Services[]" value="cattering">
      <label for="services"> Cattering</label><br>

      <input type="checkbox" id="Services" name="Services[]" value="music">
      <label for="services"> Music</label><br>

      <input type="checkbox" id="Services" name="Services[]" value="photographer">
      <label for="services"> Photographer</label><br>

      <input type="checkbox" id="Services" name="Services[]" value="props">
      <label for="services"> Props</label><br>

      <input type="checkbox" id="Services" name="Services[]" value="Venue Decoration">
      <label for="services"> Venue Decoration</label><br>

      <input type="checkbox" id="Services" name="Services[]" value="Extra Event Organization">
      <label for="services"> Extra Event Organization</label><br><br><br>



      <input type="submit" value="Submit">


</form>

<br/><br/><br/><br/><br/><br/><br/><br/><br/>



<div class = "footer">
    <div class = "footer-content">
      <div class = "footer1">
        <h1> Who are we?</h1>
        <p> "BIGYAPAN" was founded with the aim of spreading <br/> the importance of digital marketing in today's mordanizing <br/> business world. We aim to bring all your ideas to life. </p>
      </div>

      <div class = "footer2">
        <h1> Get to know us more </h1>
        Contact number : ********** <br/>
        Office location : Banesowr <br/>
        Follow us on social media : <br/>
          
      </div>
    </div>
    <div class = "footer-bottom">
      &copy; bigyapan.com | Designed by stranger
    </div>
  </div> 
  
</body>
</html>