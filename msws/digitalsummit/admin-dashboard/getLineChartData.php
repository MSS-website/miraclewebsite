<?php

require '../../config/ConnectionProvider.php';


$Date = "2017-11-16";
$json_response = array();  
for ($x = 0; $x <= 30; $x++) {
	
	$currDate = date('Y-m-d', strtotime($Date. ' + '.$x.' days'));


$Query = "SELECT Email,DATE(CreatedDate) AS RegisteredDate FROM tblDs17Users WHERE DATE(CreatedDate)=:tempCurrDate";
$stmt = $conn->prepare($Query);
$stmt->bindParam(':tempCurrDate', $currDate);
$stmt->execute();
$stmt->setFetchMode(PDO::FETCH_ASSOC);


$row_array["Date"] = $currDate;
//$row_array["Date"] = $x + 1;

$totalUnique = 0;
$totalEvents = 0;

while ($row = $stmt->fetch()) {
	$Email=$row["Email"];
	$RegisteredDate=$row["RegisteredDate"];
	
	
	$countTechTalk=0;
	$countCitizenHack=0;
	$countHungama=0;
	$countJobFair=0;
	$tempQuery = "SELECT tblDs17TechTalksRegistrations.Email AS TechTalkEmail,tblDs17MeanhackRegistrations.Email AS CitizenHackEmail,
tblDs17CulturalRegistrations.Email AS HungamaEmail, tblDs17JobRegistrations.Email AS JobFairEmail
FROM tblDs17Users
LEFT JOIN tblDs17TechTalksRegistrations ON tblDs17Users.Email = tblDs17TechTalksRegistrations.Email
LEFT JOIN tblDs17MeanhackRegistrations ON tblDs17Users.Email = tblDs17MeanhackRegistrations.Email
LEFT JOIN tblDs17CulturalRegistrations ON tblDs17Users.Email = tblDs17CulturalRegistrations.Email
LEFT JOIN tblDs17JobRegistrations ON tblDs17Users.Email = tblDs17JobRegistrations.Email  

WHERE tblDs17Users.Email=:tempEmail";
	$stmtTemp = $conn->prepare($tempQuery);
	$stmtTemp->bindParam(':tempEmail', $Email);
	$stmtTemp->execute();
	
	while ($rowTemp= $stmtTemp->fetch()) {
		
		$TechTalkEmail =  $rowTemp["TechTalkEmail"];
		$CitizenHackEmail=  $rowTemp["CitizenHackEmail"];
		$HungamaEmail=  $rowTemp["HungamaEmail"];
		$JobFairEmail=  $rowTemp["JobFairEmail"];
		
		
		
		
		if($TechTalkEmail != ''){
			$countTechTalk= 1;
		}
			if($CitizenHackEmail != ''){
				$countCitizenHack= 1;
			}
				if($HungamaEmail != ''){
					$countHungama= 1;
				}if($JobFairEmail!= ''){
					$countJobFair= 1;
				}
		
	}
	
	
	
	
	
	
	$sum = $countTechTalk + $countCitizenHack + $countHungama+ $countJobFair;
	
	
	
	

	if($sum>1) {
		$totalEvents = $totalEvents+1;
	} 
	
	if($sum==1) {
		$totalUnique = $totalUnique + 1;
	}
	
	
}

$row_array["Unique"] = $totalUnique;
$row_array["Events"] = $totalEvents;
array_push($json_response,$row_array);  


}


echo json_encode($json_response);


?>