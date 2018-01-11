<?php
require '../../config/ConnectionProvider.php';

$filename='admin-contacts.xls';

header('Content-type: application/octet-stream');

header('Content-type: application/ms-excel');
header('Content-Disposition: attachment; filename='.$filename);




try {
	$queryString = "SELECT ContactName,Email,Subject,PhoneNumber,Profession,OrganizationName,Message,
DATE(Createddate) AS CreatedDate FROM tblDs17Contacts ORDER BY id";
	
	$stmt = $conn->prepare($queryString);
	$stmt->execute();
	$stmt->setFetchMode(PDO::FETCH_ASSOC);
	
	$total = "<html>
<head></head><body><table border='1' style='width:100%'>
    <tr style='width:800px;height:100px; valign='center''>
    	        <th valign='center'>   SNO </th>
		        <th valign='center'>   ContactName    </th>
		        <th valign='center'>   Email   </th>
			    <th valign='center'>   Subject    </th>
                <th valign='center'>   PhoneNumber        </th>
                <th valign='center'>   Profession </th>
			    <th valign='center'>   OrganizationName    </th>  
		        <th valign='center'>   Message    </th>
                <th valign='center'>   CreatedDate    </th>
			
			
	</tr>";
	
	
	$count=0;
	while ($row = $stmt->fetch()) {
		//  echo '$Id'.$Id;
		$count++;
		
		
		
		$ContactName= $row["ContactName"];
		$Email= $row["Email"];
		$Subject= $row["Subject"];
		$PhoneNumber= $row["PhoneNumber"];
		$Profession= $row["Profession"];
		$OrganizationName= $row["OrganizationName"];  
		$Message= $row["Message"];
		$CreatedDate= $row["CreatedDate"];
		
		
		$total = $total . '
		<tr valign="center">
					    <td valign="center">' . $count . '</td>
                        <td valign="center">' . $ContactName. '</td>
			            <td valign="center">' . $Email. '</td>
			            <td valign="center">' . $Subject. '</td>
					    <td valign="center">' . $PhoneNumber. '</td>
                        <td valign="center">' . $Profession. '</td>
                        <td valign="center">' . $OrganizationName. '</td>
                        <td valign="center">' . $Message. '</td>
					    <td valign="center">' . $CreatedDate. '</td>
		                </tr>';
		
		
		
		// $total = $total . $count.'\\t'.$FirstName.'\\t'.$LastName.'\\t'.$MiddleName.'\\t'.$Email.'\\t'.$MobileNumber.'\\t'.$FileNamer.'\\t'.$SkillSet.'\\t'.$Comments.'\\t'.$CreatedDate.'\\t'.$ApplyingFor.'\\n';
		
	}
	//$len=7000;
	$total.= '</table>';
	
	
	
	
	$contents1 = '<html><head><meta http-equiv=\'Content-Type\' content=\'text/html; charset=utf-8\' /></head><body>';
	header('Content-type: application/octet-stream');//header('Content-type: application/ms-excel');
	header('Content-Disposition: attachment; filename='.$filename);
	header('Pragma: no-cache');
	header('Expires: 0');
	$contents1 .= $total;
	$contents1 .= '</body></html>';
	echo $contents1;
} catch (Exception $exc) {
	
	$exc->getMessage();
}

?>

