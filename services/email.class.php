<?php 

class email{
	public function sendVerification($email){

		$code = security::randomCode(6);


		$to      = $email;
		$subject = 'the subject';
		$message = 'Your confirmation code is: '. "\r\n\r\n " . $code;
		$headers = 'From: webmaster@bookfy.com' . "\r\n" .
		    'Reply-To: webmaster@bookfy.com' . "\r\n" .
		    'X-Mailer: PHP/' . phpversion();

		$DbResponse = db::saveValidationCode($code);

		if($DbResponse){
			mail($to, $subject, $message, $headers);
		}


	}
}

 ?>