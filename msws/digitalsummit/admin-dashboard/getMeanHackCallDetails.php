<?php
require '../../config/ConnectionProvider.php';

class CitizenHackClass{
	public $RowCount = "0";
}
try {
	$myObj = new CitizenHackClass();
	
	$tempMeanHackId = isset ( $_GET ["meanHackId"] ) ? $_GET ["meanHackId"] : '';
	$selectQuery = "SELECT Id,FirstName,LastName,MobileNumber,AltMobileNumber,Email,CollegeName,OtherCollegeName,Branch,YEAR,
TechnologyArea,UseCaseArea,TeamMember1Name,TeamMember1Branch,TeamMember1Year,
TeamMember2Name,TeamMember2Branch,TeamMember2Year,TeamMember3Name,TeamMember3Branch,TeamMember3Year,TeamMember4Name,TeamMember4Branch,TeamMember4Year,
TechnicalExpertise,ReasonForBest,Street,State,District,PostalCode,AboutHim,TeamContact1Number,TeamContact2Number,TeamContact3Number,TeamContact4Number,
TeamMember1Email,TeamMember2Email,TeamMember3Email,TeamMember4Email,LikelyToCome,CallComments,AttendingAs,CarryingLaptop,TypeOfStaying,Gender FROM tblDs17MeanhackRegistrations WHERE Id=:tempMeanHackId";
	$stmt = $conn->prepare ( $selectQuery );
	$stmt->bindParam ( ':tempMeanHackId', $tempMeanHackId );
	$stmt->execute ();
	$num_rows = $stmt->rowCount ();
	$myObj->RowCount = $num_rows;
	$stmt->setFetchMode ( PDO::FETCH_ASSOC );
	
	if ($row = $stmt->fetch ()) {
		
		$myObj->Id = $row ["Id"];
		$myObj->FirstName = $row ["FirstName"];
		$myObj->LastName = $row ["LastName"];
		$myObj->MobileNumber = $row ["MobileNumber"];
		$myObj->AltMobileNumber = $row ["AltMobileNumber"];
		$myObj->Email = $row ["Email"];
		$myObj->CollegeName= $row ["CollegeName"];
		$myObj->OtherCollegeName= $row ["OtherCollegeName"];
		$myObj->Branch= $row ["Branch"];
		$myObj->YEAR= $row ["YEAR"];
		$myObj->TechnologyArea= $row ["TechnologyArea"];
		$myObj->UseCaseArea= $row ["UseCaseArea"];
		$myObj->TeamMember1Name= $row ["TeamMember1Name"];
		$myObj->TeamMember1Branch= $row ["TeamMember1Branch"];
		$myObj->TeamMember1Year= $row ["TeamMember1Year"];
		$myObj->TeamMember2Name= $row ["TeamMember2Name"];
		$myObj->TeamMember2Branch= $row ["TeamMember2Branch"];
		$myObj->TeamMember2Year= $row ["TeamMember2Year"];
		$myObj->TeamMember3Name= $row ["TeamMember3Name"];
		$myObj->TeamMember3Branch= $row ["TeamMember3Branch"];
		$myObj->TeamMember3Year= $row ["TeamMember3Year"];
		$myObj->TeamMember4Name= $row ["TeamMember4Name"];
		$myObj->TeamMember4Branch= $row ["TeamMember4Branch"];
		$myObj->TeamMember4Year= $row ["TeamMember4Year"];
		$myObj->TechnicalExpertise= $row ["TechnicalExpertise"];
		$myObj->ReasonForBest= $row ["ReasonForBest"];
		$myObj->Street= $row ["Street"];
		$myObj->State= $row ["State"];
		$myObj->District= $row ["District"];
		$myObj->PostalCode= $row ["PostalCode"];
		$myObj->AboutHim= $row ["AboutHim"];
		$myObj->TeamContact1Number= $row ["TeamContact1Number"];
		$myObj->TeamContact2Number= $row ["TeamContact2Number"];
		$myObj->TeamContact3Number= $row ["TeamContact3Number"];
		$myObj->TeamContact4Number= $row ["TeamContact4Number"];
		$myObj->TeamMember1Email= $row ["TeamMember1Email"];
		$myObj->TeamMember2Email= $row ["TeamMember2Email"];
		$myObj->TeamMember3Email= $row ["TeamMember3Email"];
		$myObj->TeamMember4Email= $row ["TeamMember4Email"];
		$myObj->LikelyToCome= $row["LikelyToCome"];
		$myObj->CallComments= $row["CallComments"];
		$myObj->AttendingAs= $row["AttendingAs"];
		$myObj->CarryingLaptop= $row["CarryingLaptop"];
		$myObj->TypeOfStaying= $row["TypeOfStaying"];
		$myObj->Gender= $row["Gender"];
		
		
		
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