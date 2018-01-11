<?php

require '../../config/ConnectionProvider.php';
$countTechTalkRecords=0;
$Query = "SELECT COUNT(Id) AS TotalReg,District FROM tblDs17Users GROUP BY District";
$stmt = $conn->prepare($Query);
$stmt->execute();
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$json_response = array();  
while ($row = $stmt->fetch()) {
	
	$TotalReg=$row["TotalReg"];
	$District=$row["District"];
	$row_array["District"] = $District;
	$row_array["TotalReg"] = $TotalReg; 
	
	array_push($json_response,$row_array);  
	
}

echo json_encode($json_response);






?>