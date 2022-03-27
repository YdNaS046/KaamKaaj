<?php
 $to = 'ruksha.murphy@gmail.com';
 $subject = 'Test mail';
 $message = "Success!";
 $headers = "From: eventyojana7668@gmail.com";
 $mail_sent =  mail($to, $subject, $message, $headers);

 	if($mail_sent==true)
 	{
 		echo "Mail Sent";
 	}

 	else
 	{
 		echo "Mail Failed";
 	}

?>