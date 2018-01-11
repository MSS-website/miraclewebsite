<?php
$isSuccess = '';
$resultMessage = "";

	require '../../config/ConnectionProvider.php';
	try {
		
		session_start ();
		$callDetails= isset($_GET["callDetails"]) ? $_GET["callDetails"] : '';
		$myArray = json_decode($callDetails, true);
		$callComments=$myArray["callComments"];
		$radios=$myArray["radios"];
		$attendeeradios=$myArray["attendeeradios"];
		$laprRadios=$myArray["laprRadios"];
		$stayingType=$myArray["stayingType"];
		$meanHackId=$myArray["meanHackId"];
		
		$gender=$myArray["gender"];
	
		
		
		
		$currUserId=$_SESSION ['SES_DS17_ADMIN_LOGINID'] ;
		$resultMessage = 'Fail';
		$sql = "UPDATE tblDs17MeanhackRegistrations SET LikelyToCome=:tempOptradio,CallComments=:tempCallComments,CalledBy=:tempCalledBy,
				CalledDate=NOW(),AttendingAs=:tempAttendingAs,CarryingLaptop=:tempCarryingLaptop,TypeOfStaying=:tempTypeOfStaying,Gender=:tempGender 
				 WHERE Id=:tempMeanHackRegistrationId";
		
		$stmt = $conn->prepare ( $sql );
		$stmt->bindParam ( ':tempOptradio', $radios);
		$stmt->bindParam ( ':tempCallComments', $callComments);
		$stmt->bindParam ( ':tempCalledBy', $currUserId);
		$stmt->bindParam ( ':tempAttendingAs', $attendeeradios);
		$stmt->bindParam ( ':tempCarryingLaptop', $laprRadios);
		$stmt->bindParam ( ':tempTypeOfStaying', $stayingType);
		$stmt->bindParam ( ':tempGender', $gender);
		$stmt->bindParam ( ':tempMeanHackRegistrationId', $meanHackId);
		
		
		
		$stmt->execute ();
		
		$resultMessage = 'Success';
	
	} catch ( Exception $exc ) {
		$exc->getMessage ();
		$resultMessage = $exc ;
	}
echo $resultMessage;

?>
