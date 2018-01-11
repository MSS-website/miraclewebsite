<?php
require '../../config/ConnectionProvider.php';




class JobFairClass{
	public $RowCount = "0";
}
try {
	$myObj = new JobFairClass();
	
	$tempJobFairId= isset ( $_GET ["jobfairId"] ) ? $_GET ["jobfairId"] : '';
	
	$selectQuery = "SELECT id,FirstName,LastName,Email,PhoneNumber,AltPhoneNumber,Gender,Designation,AttendeeType,ApplyingFor,Graduation,
GraduationPer,PostGraduation,PostGraduationPer,Experience,Salary,SkillSet,PositionDesc,Street,Country,State,
District,PostalCode,CreatedDate,AttachmentLocation,RandomKey,CollegeName,OtherCollegeName,Comments,LikelyToCome,AddComments FROM tblDs17JobRegistrations 
					 WHERE Id=:tempJobFairId";
	$stmt = $conn->prepare ( $selectQuery );
	$stmt->bindParam ( ':tempJobFairId', $tempJobFairId);
	$stmt->execute ();
	$num_rows = $stmt->rowCount ();
	$myObj->RowCount = $num_rows;
	$stmt->setFetchMode ( PDO::FETCH_ASSOC );
	
	if ($row = $stmt->fetch ()) {
	
		
		//echo $row ["AttachmentLocation"];
		
		//echo 'Testfile exist'.file_exists($row ["AttachmentLocation"]);
		
		$myObj->Id = $row ["id"];
		$myObj->FirstName = $row ["FirstName"];
		$myObj->LastName = $row ["LastName"];
		$myObj->Email = $row ["Email"];
		$myObj->PhoneNumber= $row ["PhoneNumber"];
		$myObj->AltPhoneNumber= $row ["AltPhoneNumber"];
		$myObj->Gender= $row ["Gender"];
		$myObj->Designation= $row ["Designation"];
		$myObj->AttendeeType= $row ["AttendeeType"];
		$myObj->ApplyingFor= $row ["ApplyingFor"];
		$myObj->Graduation= $row ["Graduation"];
		$myObj->GraduationPer= $row ["GraduationPer"];
		$myObj->PostGraduation= $row ["PostGraduation"];
		$myObj->PostGraduationPer= $row ["PostGraduationPer"];
		$myObj->Experience= $row ["Experience"];
		$myObj->Salary= $row ["Salary"];
		$myObj->SkillSet= $row ["SkillSet"];
		$myObj->PositionDesc= $row ["PositionDesc"];
		
		$myObj->Street= $row ["Street"];
		$myObj->Country= $row ["Country"];
		$myObj->State= $row ["State"];
		$myObj->District= $row ["District"];
		$myObj->PostalCode= $row ["PostalCode"];
		$myObj->CreatedDate= $row ["CreatedDate"];
		
		$myObj->AttachmentLocation= $row ["AttachmentLocation"];
		$myObj->RandomKey= $row ["RandomKey"];
		$myObj->CollegeName= $row ["CollegeName"];
		$myObj->OtherCollegeName= $row ["OtherCollegeName"];
		
		$myObj->Comments= $row ["Comments"];  
		$myObj->LikelyToCome= $row ["LikelyToCome"];
		$myObj->AddComments= $row ["AddComments"];
		//$myObj->isfileexist= file_exists($row ["AttachmentLocation"]);
		
		if($row ["AttachmentLocation"]!='')
		if(file_exists($row ["AttachmentLocation"])){
			$myObj->IsFileExisted= true;
		}else {
			$myObj->IsFileExisted= false;
		}
		
		
		
		
		
		
		
	}
	$myObj = json_encode ( $myObj );
	
	echo $myObj;
} catch ( Exception $exc ) {
	
	$exc->getMessage ();
	
	
	
	$myObj = json_encode ( $myObj );
	echo $myObj;
}

?>