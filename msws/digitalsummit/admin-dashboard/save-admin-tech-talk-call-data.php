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
		$optAttdAs=$myArray["optAttdAs"];
		$laptopOpt=$myArray["laptopOpt"];
		$graduationBranch=$myArray["graduationBranch1"];
		$graduationYear=$myArray["graduationYear1"];  
		$typeOfStaying=$myArray["typeOfStaying"];
		$collegeName=$myArray["collegeName1"];
		$otherCollegeName=$myArray["otherCollegeName1"];
		
		
		$hostelOpt=$myArray["hostelOpt"];
		$gender=$myArray["gender"];
		
		$techTalkId=$myArray["techTalkId"];
		$currUserId=$_SESSION ['SES_DS17_ADMIN_LOGINID'] ;
	
		$resultMessage = 'Fail';
		$sql = "UPDATE tblDs17TechTalksRegistrations SET LikelyToCome=:tempOptradio,CallComments=:tempCallComments,CalledBy=:tempCalledBy,CalledDate=NOW(),AttendingAs=:tempAttendingAs,CarryingLaptop=:tempCarryingLaptop,Branch=:tempBranch,GraduationYear=:tempGraduationYear,TypeOfStaying=:tempTypeOfStaying,CollegeName=:tempCollegeName,OtherCollegeName=:tempOtherCollegeName,Gender=:tempGender WHERE Id=:tempTechTalksRegistrationId";
		
		$stmt = $conn->prepare ( $sql );
		$stmt->bindParam ( ':tempOptradio', $radios);
		$stmt->bindParam ( ':tempCallComments', $callComments);
		
		$stmt->bindParam ( ':tempAttendingAs', $optAttdAs);  
		$stmt->bindParam ( ':tempCarryingLaptop', $laptopOpt);
		$stmt->bindParam ( ':tempBranch', $graduationBranch);
		$stmt->bindParam ( ':tempGraduationYear', $graduationYear);
		$stmt->bindParam ( ':tempTypeOfStaying', $typeOfStaying);
		
		
		$stmt->bindParam ( ':tempCollegeName', $collegeName);
		$stmt->bindParam ( ':tempOtherCollegeName', $otherCollegeName);
		
		
		$stmt->bindParam ( ':tempCalledBy', $currUserId);
		$stmt->bindParam ( ':tempGender', $gender);
		$stmt->bindParam ( ':tempTechTalksRegistrationId', $techTalkId);
		

		
		$stmt->execute ();
		
		$resultMessage = 'Success';
	
	} catch ( Exception $exc ) {
		$exc->getMessage ();
		$resultMessage = $exc ;
	}
echo $resultMessage;

?>
