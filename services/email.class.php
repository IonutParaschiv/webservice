<?php 

class email{
	public function sendVerification(){
		$to      = 'ionut@htd.ro';
		$subject = 'the subject';
		$message = 'Your confirmation code is: ';
		$headers = 'From: webmaster@bookfy.com' . "\r\n" .
		    'Reply-To: webmaster@bookfy.com' . "\r\n" .
		    'X-Mailer: PHP/' . phpversion();

		mail($to, $subject, $message, $headers);
	}
}

 ?>