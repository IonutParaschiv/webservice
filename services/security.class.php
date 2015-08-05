<?php 

class security{
	function randomCode($length){
 		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    	$randomString = '';
          for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
          }
          return $randomString;
	}

	function checkCode($code){

		$valid = db::validateCode($code);

		if($valid){
			return "true";
		}else{
			return "false";
		}
	}
}

	
 ?>