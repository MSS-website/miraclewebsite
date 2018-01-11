<?php
require '../../config/ConnectionProvider.php';

class TeckTalkClass{
	public $RowCount = "0";
	public $Message  = "Success";
	public $LikelyToCome= "-2";
	public $CallComments= "";
	public $Id= "";
	public $FirstName= "";
	public $LastName= "";
	public $MobileNumber= "";
	public $AltMobileNumber= "";
	public $Email= "";
	public $Designation= "";
	public $AttendeeType= "";
	public $PrimaryIntrest= "";
	public $SecondaryIntrest= "";
	public $Comments= "";
	public $Street= "";
	public $Country= "";
	public $State= "";
	public $District= "";
	public $PostalCode= "";
	 
}


try {
	$myObj=new TeckTalkClass();
	
	$tempTechTalkId = isset($_GET["techTalkId"]) ? $_GET["techTalkId"] : '';
	$selectQuery = "SELECT Id,FirstName,LastName,MobileNumber,AltMobileNumber,Email,Designation,AttendeeType,
CollegeName,OtherCollegeName,PrimaryIntrest,SecondaryIntrest,Comments,Street,Country,State,District,
PostalCode,LikelyToCome,CallComments,AttendingAs,CarryingLaptop,TypeOfStaying,Branch,GraduationYear,Gender  FROM tblDs17TechTalksRegistrations WHERE Id=:tempTechTalkId";
	$stmt = $conn->prepare($selectQuery);
	$stmt->bindParam(':tempTechTalkId', $tempTechTalkId);
	$stmt->execute();
	$num_rows = $stmt->rowCount();
	$myObj->RowCount = $num_rows;
	$stmt->setFetchMode(PDO::FETCH_ASSOC);
	
	if ($row = $stmt->fetch()) {
		
		$myObj->Id= $row["Id"];
		$myObj->FirstName= $row["FirstName"];
		$myObj->LastName= $row["LastName"];
		$myObj->MobileNumber= $row["MobileNumber"];
		$myObj->AltMobileNumber= $row["AltMobileNumber"];
		$myObj->Email= $row["Email"];
		$myObj->Designation= $row["Designation"];
		$myObj->AttendeeType= $row["AttendeeType"];
		
		$myObj->CollegeName= $row["CollegeName"];
		$myObj->OtherCollegeName= $row["OtherCollegeName"];
		
		$myObj->PrimaryIntrest= $row["PrimaryIntrest"];
		$myObj->SecondaryIntrest= $row["SecondaryIntrest"];
		$myObj->Comments= $row["Comments"];
		$myObj->Street= $row["Street"];
		$myObj->Country= $row["Country"]; 
		$myObj->State= $row["State"]; 
		$myObj->District= $row["District"]; 
		$myObj->PostalCode= $row["PostalCode"]; 
		$myObj->LikelyToCome= $row["LikelyToCome"];
		$myObj->CallComments= $row["CallComments"];
		
		$myObj->AttendingAs= $row["AttendingAs"];
		$myObj->CarryingLaptop= $row["CarryingLaptop"];
		$myObj->TypeOfStaying= $row["TypeOfStaying"];
		$myObj->Branch= $row["Branch"];
		$myObj->GraduationYear= $row["GraduationYear"];
		$myObj->Gender= $row["Gender"];
		
		
	}
	$myObj = json_encode($myObj);
	
	echo $myObj;
}catch (Exception $exc) {
	
	$exc->getMessage();
	
	$myObj->Message = $exc;
	
	$myObj = json_encode($myObj);
	echo $myObj;
	
	
	
}


?>