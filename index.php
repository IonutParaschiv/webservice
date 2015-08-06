<?php 
require_once('utils/autoloader.php');

	if(!empty($_POST)){
		switch ($_POST['method']) {
			case 'sendConfirmationCode':

				$email = $_POST['email'];
				$web = new email();

				$response = $web->sendVerification($email);

				echo $response;

				break;
			case 'checkCode':
				
				$code = $_POST['code'];

				$web = new security();

				$response = $web->checkCode($code);

				echo $response;

				break;
			case 'expireCode':
				$code = $_POST['code'];
				
				$web = new security();
				
				$response = $web->expireCode($code);

				echo $response;

				break;
			
			default:
				# code...
				break;
		}
	}


 ?>