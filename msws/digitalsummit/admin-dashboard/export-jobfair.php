<?php
require '../../config/ConnectionProvider.php';

$filename='admin-jobfair.xls';

header('Content-type: application/octet-stream');

header('Content-type: application/ms-excel');
header('Content-Disposition: attachment; filename='.$filename);




try {
	$queryString = "SELECT Id,FirstName,LastName,Email,PhoneNumber,AltPhoneNumber,Gender,Designation,
AttendeeType,ApplyingFor,Graduation,
GraduationPer,PostGraduation,PostGraduationPer,Experience,Salary,SkillSet,PositionDesc,Street,
Country,State,
District,PostalCode,DATE(CreatedDate) AS CreatedDate,AttachmentLocation,RandomKey,CollegeName,
OtherCollegeName,LikelyToCome,AddComments,CalledBy,DATE(CalledDate) AS CalledDate
 FROM tblDs17JobRegistrations ORDER BY id
";
	
	$stmt = $conn->prepare($queryString);
	$stmt->execute();
	$stmt->setFetchMode(PDO::FETCH_ASSOC);
	
	$total = "<html>
<head></head><body><table border='1' style='width:100%'>
    <tr style='width:800px;height:100px; valign='center''>
    	        <th valign='center'>   SNO </th>
		        <th valign='center'>   ContactName    </th>
		        <th valign='center'>   Email   </th>
			    <th valign='center'>   PhoneNumber    </th>
                <th valign='center'>   AltPhoneNumber        </th>
                <th valign='center'>   Gender </th>
			    <th valign='center'>   Designation    </th>
		        <th valign='center'>   AttendeeType    </th>
<th valign='center'>   CollegeName    </th>
				<th valign='center'>   OtherCollegeName    </th>
                <th valign='center'>   ApplyingFor    </th>
			
				<th valign='center'>   Graduation    </th>

		        <th valign='center'>   GraduationPer   </th>
			    <th valign='center'>   PostGraduation    </th>
                <th valign='center'>   PostGraduationPer        </th>
                <th valign='center'>   Experience </th>
			    <th valign='center'>   Salary    </th>
		        <th valign='center'>   SkillSet    </th>
                <th valign='center'>   PositionDesc    </th>
				<th valign='center'>   Street    </th>
			
                <th valign='center'>   Country    </th>
		        <th valign='center'>   State   </th>
			    <th valign='center'>   District    </th>
                <th valign='center'>PostalCode</th>
<th valign='center'>Registered Date</th>
               	<th valign='center'>Likely to come</th>
			  <th valign='center'>Call comments</th>

<th valign='center'>CalledBy</th>
<th valign='center'>CalledDate</th>
				
                
			
			
			
	</tr>";
	
	
	$count=0;
	while ($row = $stmt->fetch()) {
		//  echo '$Id'.$Id;
		$count++;
		
		
		
		
		$FirstName= $row["FirstName"];
		$LastName= $row["LastName"];
		$Email= $row["Email"];
		$PhoneNumber= $row["PhoneNumber"];
		$AltPhoneNumber= $row["AltPhoneNumber"];
		$Gender= $row["Gender"];
		$Designation= $row["Designation"];
		
		$AttendeeType= $row["AttendeeType"];
		$ApplyingFor= $row["ApplyingFor"];
		$Graduation= $row["Graduation"];
		
		
		$GraduationPer= $row["GraduationPer"];
		$PostGraduation= $row["PostGraduation"];
		$PostGraduationPer= $row["PostGraduationPer"];
		$Experience= $row["Experience"];
		
		
		
		$Salary= $row["Salary"];
		$SkillSet= $row["SkillSet"];
		$PositionDesc= $row["PositionDesc"];
		$Street= $row["Street"];
		$Country= $row["Country"];
		$State= $row["State"];
		$District= $row["District"];
		
		$PostalCode= $row["PostalCode"];
		$CreatedDate= $row["CreatedDate"];
		$AttachmentLocation= $row["AttachmentLocation"];
		
		$RandomKey= $row["RandomKey"];
		$CollegeName= $row["CollegeName"];
		$OtherCollegeName= $row["OtherCollegeName"];
		
		$LikelyToCome= $row["LikelyToCome"];
		$AddComments= $row["AddComments"];
		
		$CalledBy= $row["CalledBy"];
		$CalledDate= $row["CalledDate"];
		
		
		
		
		$total = $total . '
		<tr valign="center">
				
				
				
					    <td valign="center">' . $count . '</td>
                        <td valign="center">' . $FirstName." ".$LastName.'</td>
			            
			            <td valign="center">' . $Email. '</td>
					    <td valign="center">' . $PhoneNumber. '</td>
                        <td valign="center">' . $AltPhoneNumber. '</td>
                        <td valign="center">' . $Gender. '</td>
                        <td valign="center">' . $Designation. '</td>
                        <td valign="center">' . $AttendeeType. '</td>
 						<td valign="center">' . $CollegeName. '</td>
                        <td valign="center">' . $OtherCollegeName. '</td>
			            <td valign="center">' . $ApplyingFor. '</td>
                        <td valign="center">' . $Graduation. '</td>
			            <td valign="center">' . $GraduationPer. '</td>
					    <td valign="center">' . $PostGraduation. '</td>
                        <td valign="center">' . $PostGraduationPer. '</td>
                        <td valign="center">' . $Experience. '</td>
                        <td valign="center">' .  $Salary. '</td>
			            <td valign="center">' . $SkillSet. '</td>
  			            <td valign="center">' . $PositionDesc. '</td>
					    <td valign="center">' . $Street. '</td>
                        <td valign="center">' . $Country. '</td>
                        <td valign="center">' . $State. '</td>
                        <td valign="center">' . $District. '</td>
                        <td valign="center">' . $PostalCode. '</td>
							<td valign="center">' . $CreatedDate. '</td>
<td valign="center">' . $LikelyToCome. '</td>
<td valign="center">' . $AddComments. '</td>
<td valign="center">' . $CalledBy. '</td>
<td valign="center">' . $CalledDate. '</td>
  			            

 
                        		
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

