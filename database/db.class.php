<?php 

class db{
const DATABASE_NAME = "bachelor";

	private function conn(){
        $dbun = "apiRoot";
        $dbpw = "jaxierulestheblock";
        $host = "localhost";
        $db = self::DATABASE_NAME;

        $conn = new PDO('mysql:host='.$host.';dbname='.$db,$dbun,$dbpw);
        // Check connection
        if (!$conn) {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
          exit();
        }
        return $conn;
    }

    public function saveValidationCode($code){
    	$conn = self::conn();
    	$status = 'available';
    	$query = "INSERT INTO " .self::DATABASE_NAME. ".validation  (id, code, status) VALUES (NULL, :code, :status);";

    	$stmt = $conn->prepare($query);

    	$stmt->bindParam(':code', $code);
    	$stmt->bindParam(':status', $status);

    	$result = $stmt->execute();

    	return $result;

    }

    public function validateCode($code){
    	$conn = self::conn();
    	$status = 'available';

    	$query = "SELECT * FROM ".self::DATABASE_NAME. ".validation WHERE code = :code AND status = :status";

    	$stmt = $conn->prepare($query);

    	$stmt->bindParam(":code", $code);
    	$stmt->bindParam(":status", $status);

    	$stmt->execute();

    	if($stmt->rowCount() > 0){
    		
            return true;
        }else{
            return false;
        }
    }

}

 ?>