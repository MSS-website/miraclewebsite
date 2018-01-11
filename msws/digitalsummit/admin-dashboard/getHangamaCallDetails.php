<?php
require '../../config/ConnectionProvider.php';

class CitizenHackClass{
	public $RowCount = "0";
}
try {
	$myObj = new CitizenHackClass();
	
	$tempHangamaId= isset ( $_GET ["hangamaId"] ) ? $_GET ["hangamaId"] : '';
	$selectQuery = "SELECT Id,FirstName,LastName,Email,MobileNumber,AltMobileNumber,CollegeName,
					OtherCollegeName,Branch,YEAR,CompetitionName,CompetitionType,LeaderName,LeaderEmail,
					LeaderPhoneNumber,TeamSize,TeamMemberNames,AuditionLink,Comments,Street,Country,State,District,
					PostalCode,Gender,CallComments,LikelyToCome,AttendingAs,TypeOfStaying FROM tblDs17CulturalRegistrations
					 WHERE Id=:tempHangamaId";
	$stmt = $conn->prepare ( $selectQuery );
	$stmt->bindParam ( ':tempHangamaId', $tempHangamaId);
	$stmt->execute ();
	$num_rows = $stmt->rowCount ();
	$myObj->RowCount = $num_rows;
	$stmt->setFetchMode ( PDO::FETCH_ASSOC );
	
	if ($row = $stmt->fetch ()) {
		
		$myObj->Id = $row ["Id"];
		$myObj->FirstName = $row ["FirstName"];
		$myObj->LastName = $row ["LastName"];
		$myObj->Email = $row ["Email"];
		$myObj->MobileNumber = $row ["MobileNumber"];
		$myObj->AltMobileNumber = $row ["AltMobileNumber"];
		$myObj->CollegeName= $row ["CollegeName"];
		$myObj->OtherCollegeName= $row ["OtherCollegeName"];
		$myObj->Branch= $row ["Branch"];
		$myObj->YEAR= $row ["YEAR"];
		$myObj->CompetitionName= $row ["CompetitionName"];
		$myObj->CompetitionType= $row ["CompetitionType"];
		$myObj->LeaderName= $row ["LeaderName"];
		$myObj->LeaderEmail= $row ["LeaderEmail"];
		$myObj->LeaderPhoneNumber= $row ["LeaderPhoneNumber"];
		$myObj->TeamSize= $row ["TeamSize"];
		$myObj->TeamMemberNames= $row ["TeamMemberNames"];
		$myObj->AuditionLink= $row ["AuditionLink"];
		$myObj->AboutHim= $row ["Comments"];
		$myObj->Street= $row ["Street"];
		$myObj->Country= $row ["Country"];
		$myObj->State= $row ["State"];
		$myObj->District= $row ["District"];
		$myObj->PostalCode= $row ["PostalCode"];
		$myObj->Gender= $row["Gender"];
		$myObj->LikelyToCome= $row["LikelyToCome"];
		$myObj->CallComments= $row["CallComments"];
		$myObj->AttendingAs= $row["AttendingAs"];
		$myObj->TypeOfStaying= $row["TypeOfStaying"];
		
	}
	$myObj = json_encode ( $myObj );
	
	echo $myObj;
} catch ( Exception $exc ) {
	
	$exc->getMessage ();
	
	$myObj->Message = $exc;
	
	$myObj = json_encode ( $myObj );
	echo $myObj;
}

?>