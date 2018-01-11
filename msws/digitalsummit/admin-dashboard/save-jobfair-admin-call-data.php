<?php
$isSuccess = '';
$resultMessage = "";

require '../../config/ConnectionProvider.php';
try {
	
	session_start ();
	$callDetails= isset($_GET["callDetails"]) ? $_GET["callDetails"] : '';
	$myArray = json_decode($callDetails, true);
	
	$likelyToCome=$myArray["likelyToCome"];
	$addComments=$myArray["addComments"];
	$jobfairId=$myArray["jobfairId"];
	
	
	
	
	
	$currUserId=$_SESSION ['SES_DS17_ADMIN_LOGINID'] ;
	$resultMessage = 'Fail';
	$sql = "UPDATE tblDs17JobRegistrations SET LikelyToCome=:tempLikelyToCome,AddComments=:tempAddComments,CalledBy=:tempModifiedBy,
				CalledDate=NOW()
				 WHERE id=:tempJobFairRegistrationId";
	
	$stmt = $conn->prepare ( $sql );
	$stmt->bindParam ( ':tempLikelyToCome', $likelyToCome);
	$stmt->bindParam ( ':tempAddComments', $addComments);
	$stmt->bindParam ( ':tempModifiedBy', $currUserId);
	
	$stmt->bindParam ( ':tempJobFairRegistrationId', $jobfairId);
	
	
	
	$stmt->execute ();
	
	$resultMessage = 'Success';
	
} catch ( Exception $exc ) {
	$exc->getMessage ();
	$resultMessage = $exc ;
}
echo $resultMessage;

?>
