<?php



$name = stripcslashes($_POST['nom']);
$name = stripcslashes($_POST['prénon']);
$email = stripcslashes($_POST['email']);
$subject = stripcslashes($_POST['objet']);
$message = stripcslashes($_POST['message']);



$mailto = votremail@votreemail.com'; 
$subject = $subject; 

$error_message = 'Une erreur est survenue'; 
$success_message = 'Message envoyé'; 




$message = "Name: $name\r\nEmail: $email\r\nMessage: $message";

$headers = "From: $name <$email>" . "\r\n" . "Reply-To: $email" . "\r\n" . "X-Mailer: PHP/" . phpversion();

function validateEmail($email) {
   if(preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email))
	  return true;
   else
	  return false;
}

if((strlen($name) < 1 ) || (strlen($email) < 1 ) || (strlen($message) < 1 ) || validateEmail($email) == FALSE ) {

	echo($error_message);

} else {

	if( mail($mailto, $subject, $message, $headers) ) {
		
		echo($success_message);

	} else {

		echo($error_message);

	}

}

// On a ici le strict minimum, mais c’est plutôt simple rapide et efficace.