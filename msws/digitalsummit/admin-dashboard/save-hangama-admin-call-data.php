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
		$stayingType=$myArray["stayingType"];
		$hangamaId=$myArray["hangamaId"];
		
	
		
		
		
		$currUserId=$_SESSION ['SES_DS17_ADMIN_LOGINID'] ;
		$resultMessage = 'Fail';
		$sql = "UPDATE tblDs17CulturalRegistrations SET LikelyToCome=:tempOptradio,CallComments=:tempCallComments,CalledBy=:tempCalledBy,
				CalledDate=NOW(),AttendingAs=:tempAttendingAs,TypeOfStaying=:tempTypeOfStaying
				 WHERE Id=:tempHangamaRegistrationId";
		
		$stmt = $conn->prepare ( $sql );
		$stmt->bindParam ( ':tempOptradio', $radios);
		$stmt->bindParam ( ':tempCallComments', $callComments);
		$stmt->bindParam ( ':tempCalledBy', $currUserId);
		$stmt->bindParam ( ':tempAttendingAs', $attendeeradios);
		$stmt->bindParam ( ':tempTypeOfStaying', $stayingType);
		$stmt->bindParam ( ':tempHangamaRegistrationId', $hangamaId);
		
		
		
		$stmt->execute ();
		
		$resultMessage = 'Success';
	
	} catch ( Exception $exc ) {
		$exc->getMessage ();
		$resultMessage = $exc ;
	}
echo $resultMessage;

?>
