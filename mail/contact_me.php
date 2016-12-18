<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
	
// Create the email and send the message
$to = 'jonahandamy@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Song request from $name";
$email_body = "Someone sent you a song request for your wedding!\n\n"."Here are the details:\n\nName: $name\n\nSong title: $email_address\n\nArtist: $phone";
$headers = "From: noreply@jonahandamy.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: jonahandamy@gmail.com";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>