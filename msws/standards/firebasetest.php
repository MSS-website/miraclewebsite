<link href="images/favicon.ico" rel="shortcut icon">
<?php

//require 'vendor/autoload.php';
/*require __DIR__ . '/vendor/autoload.php';
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

$firebase = (new Firebase/Factory()) ;
$firebaseCred = $firebase->withCredentials(DIR.'/miracleme-3fb8d-firebase-adminsdk-jgq1x-7977461b00.json') -> withDatabaseUri('https://miracleme-3fb8d.firebaseio.com')->create();
$database = $firebaseCred->getDatabase();
$reference = $database->getReference('/students');
$snapshot = $reference->getSnapshot();
$k1 = $snapshot->getValue();
echo $k1.'';
*/




try {
	
	

	 

	 $data = array("LoginId" => "skola2", "Password" => "123", "Authorization" => "Token");
	
	 
	 //$myJSON = json_encode($myObj);
	 //$data1 = "haii";
	 
	 $data_string = json_encode($data);
	// echo $data_string;
	 $curl = curl_init("http://us-central1-perl-775b1.cloudfunctions.net/app/helloworld1");
	 curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
	 curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
	 curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	 curl_setopt($curl, CURLOPT_HTTPHEADER, array(
	 		'Content-Type: application/json',
	 		'Content-Length: ' . strlen($data_string))
	 		);
	 curl_setopt($curl, CURLOPT_TIMEOUT, 5000);
	 curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 5000);
	 $curl_response = curl_exec($curl);
	 $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
	 
	 echo 'status--'.$status;
	  echo 'curl_response---->'.$curl_response.'<----';
	 if (1 !== $curl_response) {
	 	
	 	$myArray = json_decode($curl_response, true);
	 	echo '-->'.$myArray["LoginId"];
	 }
	 curl_close($curl);
	
} catch (Exception $exc) {
	
	
	$exc->getMessage();
	echo $exc;
}

?>