<?php 
require_once('utils/autoloader.php');
/**
 * this class handles most of the user interaction protocols and connections
 */
	class webservice{

		public function sendVerification($email){
			email::sendVerification($email);
		}

	}
	$service = new webservice();
	$service::sendVerification();

 ?>