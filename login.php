<?php include "nav-bar.php" ?>
<!DOCTYPE html>
<html>
<head> 
<link rel="stylesheet" type="text/css" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <html lang = "en" dir = "ltr">
</head>

    <body>
            
    <div class="login">  
    <h2>Login Page</h2><br>  
    <form id="login" method="post" action="validation.php">    
        <label><b>User Name     
        </b>    
        </label>    
        <input type="text" name="Uname" id="Uname" placeholder="Username" required>    
        <br><br>    
        <label><b>Password     
        </b>    
        </label>    
        <input type="Password" name="Pass" id="Pass" placeholder="Password" required>    
        <br><br>    
        <input type="submit" name="log" id="log" value="Log In">       
        <br><br>    
            
    </form>     
</div>
<div class = "footer-bottom">
      &copy; kaam-kaaj.com 
    </div>


    </body>


    </html>