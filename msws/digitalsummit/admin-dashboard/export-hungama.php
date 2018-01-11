<?php
require '../../config/ConnectionProvider.php';

$filename='admin-hungama.xls';

header('Content-type: application/octet-stream');

header('Content-type: application/ms-excel');
header('Content-Disposition: attachment; filename='.$filename);




try {
	$queryString = "SELECT FirstName,LastName,Email,MobileNumber,AltMobileNumber,CollegeName,OtherCollegeName,
    Branch,YEAR,CompetitionName,CompetitionType,LeaderName,LeaderEmail,LeaderPhoneNumber,TeamSize,
	TeamMemberNames,AuditionLink,Comments,Street,Country,State,District,PostalCode,
    DATE(CreatedDate) AS CreatedDate,
	ModifiedBy,DATE(ModifiedDate) AS ModifiedDate,CallComments,CalledBy,CalledDate,LikelyToCome,AttendingAs,TypeOfStaying  FROM tblDs17CulturalRegistrations
	ORDER BY Id";
	
	$stmt = $conn->prepare($queryString);
	$stmt->execute();
	$stmt->setFetchMode(PDO::FETCH_ASSOC);
	
	$total = "<html>
<head></head><body><table border='1' style='width:100%'>
    <tr style='width:800px;height:100px; valign='center''>
    	        <th valign='center'>   SNO </th>
		        <th valign='center'>   FirstName    </th>
		        <th valign='center'>   LastName   </th>
			    <th valign='center'>   Email    </th>
                <th valign='center'>   MobileNumber        </th>
                <th valign='center'>   AltMobileNumber </th>
			    <th valign='center'>   CollegeName    </th>
			    <th valign='center'>   OtherCollegeName    </th>
                <th valign='center'>   Branch    </th>
                <th valign='center'>   YEAR    </th>  
                <th valign='center'>   CompetitionName    </th>

                <th valign='center'>   CompetitionType    </th>
				<th valign='center'>   LeaderName    </th>
			    <th valign='center'>   LeaderEmail    </th>
               <th valign='center'>   LeaderPhoneNumber    </th>
               <th valign='center'>   TeamSize    </th>
               <th valign='center'>   TeamMemberNames    </th>
			   <th valign='center'>   AuditionLink    </th>
			   <th valign='center'>   Comments    </th>
               <th valign='center'>   Street    </th>
               <th valign='center'>   Country    </th>
			
               <th valign='center'>    State    </th>
               <th valign='center'>    District    </th>
               <th valign='center'>    PostalCode    </th>
               <th valign='center'>    CreatedDate    </th>
			
               <th valign='center'>    ModifiedBy    </th>
               <th valign='center'>    ModifiedDate    </th>
 <th valign='center'>    CallComments    </th>
 <th valign='center'>    CalledBy    </th>
 <th valign='center'>    CalledDate    </th>
 <th valign='center'>    LikelyToCome    </th>
 <th valign='center'>    AttendingAs    </th>
 <th valign='center'>    TypeOfStaying    </th>

			
	</tr>";
	
	
	$count=0;
	while ($row = $stmt->fetch()) {
		//  echo '$Id'.$Id;
		$count++;
		
		
		
		$FirstName = $row["FirstName"];
		$LastName = $row["LastName"];
		$Email= $row["Email"];
		$MobileNumber = $row["MobileNumber"];
		$AltMobileNumber= $row["AltMobileNumber"];
		$CollegeName= $row["CollegeName"];
		$OtherCollegeName= $row["OtherCollegeName"];
		$Branch= $row["Branch"];
		$YEAR= $row["YEAR"];
		$CompetitionName= $row["CompetitionName"];
		$CompetitionType= $row["CompetitionType"];
		$LeaderName= $row["LeaderName"];
		$LeaderEmail= $row["LeaderEmail"];
		$LeaderPhoneNumber= $row["LeaderPhoneNumber"];
		$TeamSize= $row["TeamSize"];
		$TeamMemberNames= $row["TeamMemberNames"];
		$AuditionLink= $row["AuditionLink"];
		$Comments= $row["Comments"];
		$Street= $row["Street"];
		$Country= $row["Country"];
		$State= $row["State"];
		$District= $row["District"];
		$PostalCode= $row["PostalCode"];
		$CreatedDate= $row["CreatedDate"];
		$ModifiedBy= $row["ModifiedBy"];
		$ModifiedDate= $row["ModifiedDate"];
		$CallComments= $row["CallComments"];
		$CalledBy= $row["CalledBy"];
		$CalledDate= $row["CalledDate"];
		$LikelyToCome= $row["LikelyToCome"];
		$AttendingAs= $row["AttendingAs"];
		$TypeOfStaying= $row["TypeOfStaying"];
		
		
		$total = $total . '
		<tr valign="center">
                        <td valign="center">' . $count . '</td>
			            <td valign="center">' . $FirstName . '</td>
			            <td valign="center">' . $LastName . '</td>
					    <td valign="center">' . $Email. '</td>
                        <td valign="center">' . $MobileNumber. '</td>
                        <td valign="center">' . $AltMobileNumber. '</td>
                        <td valign="center">' . $CollegeName. '</td>
					    <td valign="center">' . $OtherCollegeName. '</td>
                        <td valign="center">' .$Branch. '</td>
                        <td valign="center">' .$YEAR. '</td>
                        <td valign="center">' . $CompetitionName. '</td>
			            <td valign="center">' . $CompetitionType. '</td>
					    <td valign="center">' .$LeaderName.'</td>
                        <td valign="center">' .$LeaderEmail.'</td>
                        <td valign="center">' . $LeaderPhoneNumber. '</td>
					    <td valign="center">' . $TeamSize. '</td>
                        <td valign="center">' .$TeamMemberNames. '</td>
                        <td valign="center">' .$AuditionLink.'</td>
                        <td valign="center">' .$Comments.'</td>      		
		                <td valign="center">' . $Street. '</td>
                        <td valign="center">' . $Country. '</td>
                        <td valign="center">' . $State. '</td>
		                <td valign="center">' . $District. '</td>
                        <td valign="center">' . $PostalCode. '</td>
		                <td valign="center">' . $CreatedDate. '</td>
		                <td valign="center">' . $ModifiedBy. '</td>
                        <td valign="center">' . $ModifiedDate. '</td>
<td valign="center">' . $CallComments. '</td>
<td valign="center">' . $CalledBy. '</td>
<td valign="center">' . $CalledDate. '</td>
<td valign="center">' . $LikelyToCome. '</td>
<td valign="center">' . $AttendingAs. '</td>
<td valign="center">' . $TypeOfStaying. '</td>
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