<?php
require '../../config/ConnectionProvider.php';

$filename='citizen-hack-registration.xls';

header('Content-type: application/octet-stream');

header('Content-type: application/ms-excel');
header('Content-Disposition: attachment; filename='.$filename);




try {
	// $conn->connectToDatabase();
	$queryString = "SELECT FirstName,LastName,MobileNumber,AltMobileNumber,Email,CollegeName,OtherCollegeName,Branch,YEAR,AboutHim,TechnologyArea,UseCaseArea,TeamMember1Name,
TeamMember1Branch,TeamMember1Year,TeamContact1Number,TeamMember1Email,TeamMember2Name,TeamMember2Branch,
TeamMember2Year,TeamContact2Number,TeamMember2Email,TeamMember3Name,TeamMember3Branch,TeamMember3Year,
TeamContact3Number,TeamMember3Email,TeamMember4Name,TeamMember4Branch,TeamMember4Year,TeamContact4Number,
TeamMember4Email,TechnicalExpertise,ReasonForBest,Street,State,District,PostalCode,CreatedDate,ModifiedBy,
ModifiedDate,Gender,LikelyToCome,AttendingAs,CarryingLaptop,TypeOfStaying,CallComments,CalledBy,CalledDate FROM tblDs17MeanhackRegistrations ORDER BY Id";
	$stmt = $conn->prepare($queryString);
	$stmt->execute();
	$stmt->setFetchMode(PDO::FETCH_ASSOC);
	
	$total = "<html>
<head></head><body><table border='1' style='width:100%'>
    <tr style='width:800px;height:100px; valign='center''>
    	        <th valign='center'>    SNO </th>
		<th valign='center'>    FirstName    </th>
		<th valign='center'>   LastName   </th>
			
                <th valign='center'>     MobileNumber        </th>
               
                <th valign='center'>  AltMobileNumber </th>
			
                <th valign='center'>    Email    </th>
                <th valign='center'>    CollegeName    </th>
			
                <th valign='center'>    OtherCollegeName    </th>
                 <th valign='center'>    Branch    </th>
                <th valign='center'>    YEAR    </th>
               <th valign='center'>    AboutHim    </th>
               <th valign='center'>    TechnologyArea    </th>
               <th valign='center'>    UseCaseArea    </th>

<th valign='center'>    TeamMember1Name    </th>
<th valign='center'>    TeamMember1Branch    </th>
<th valign='center'>    TeamMember1Year    </th>
<th valign='center'>    TeamContact1Number    </th>
<th valign='center'>    TeamMember1Email    </th>

<th valign='center'>    TeamMember2Name    </th>
<th valign='center'>    TeamMember2Branch    </th>
<th valign='center'>    TeamMember2Year    </th>
<th valign='center'>    TeamContact2Number    </th>
<th valign='center'>    TeamMember2Email    </th>

<th valign='center'>    TeamMember3Name    </th>
<th valign='center'>    TeamMember3Branch    </th>
<th valign='center'>    TeamMember3Year    </th>
<th valign='center'>    TeamContact3Number    </th>
<th valign='center'>    TeamMember3Email    </th>

<th valign='center'>    TeamMember4Name    </th>
<th valign='center'>    TeamMember4Branch    </th>
<th valign='center'>    TeamMember4Year    </th>
<th valign='center'>    TeamContact4Number    </th>
<th valign='center'>    TeamMember4Email    </th>

<th valign='center'>    TechnicalExpertise    </th>
<th valign='center'>    Technology idea    </th>

<th valign='center'>    Street    </th>
<th valign='center'>    State    </th>
<th valign='center'>    District    </th>
<th valign='center'>    PostalCode    </th>
<th valign='center'>    CreatedDate    </th>

<th valign='center'>    ModifiedBy    </th>
<th valign='center'>    ModifiedDate    </th>

<th valign='center'>    Gender    </th>
<th valign='center'>    LikelyToCome    </th>
<th valign='center'>    AttendingAs    </th>
<th valign='center'>    CarryingLaptop    </th>
<th valign='center'>    TypeOfStaying    </th>
<th valign='center'>    CallComments    </th>
<th valign='center'>    CalledBy    </th>
<th valign='center'>    CalledDate    </th>



	</tr>";
	
	
	$count=0;
	while ($row = $stmt->fetch()) {
		//  echo '$Id'.$Id;
		$count++;
		
		$FirstName = $row["FirstName"];
		$LastName = $row["LastName"];
		$MobileNumber = $row["MobileNumber"];
		$AltMobileNumber= $row["AltMobileNumber"];
		$Email= $row["Email"];
		$CollegeName= $row["CollegeName"];
		$OtherCollegeName= $row["OtherCollegeName"];
		$Branch= $row["Branch"];
		$YEAR= $row["YEAR"];
		$AboutHim= $row["AboutHim"];
		$TechnologyArea= $row["TechnologyArea"];
		$UseCaseArea= $row["UseCaseArea"];
		
		$TeamMember1Name= $row["TeamMember1Name"];
		$TeamMember1Branch= $row["TeamMember1Branch"];
		$TeamMember1Year= $row["TeamMember1Year"];
		$TeamContact1Number= $row["TeamContact1Number"];
		$TeamMember1Email= $row["TeamMember1Email"];
		
		$TeamMember2Name= $row["TeamMember2Name"];
		$TeamMember2Branch= $row["TeamMember2Branch"];
		$TeamMember2Year= $row["TeamMember2Year"];
		$TeamContact2Number= $row["TeamContact2Number"];
		$TeamMember2Email= $row["TeamMember2Email"];
		
		$TeamMember3Name= $row["TeamMember3Name"];
		$TeamMember3Branch= $row["TeamMember3Branch"];
		$TeamMember3Year= $row["TeamMember3Year"];
		$TeamContact3Number= $row["TeamContact3Number"];
		$TeamMember3Email= $row["TeamMember3Email"];
		
		$TeamMember4Name= $row["TeamMember4Name"];
		$TeamMember4Branch= $row["TeamMember4Branch"];
		$TeamMember4Year= $row["TeamMember4Year"];
		$TeamContact4Number= $row["TeamContact4Number"];
		$TeamMember4Email= $row["TeamMember4Email"];
		
		$TechnicalExpertise= $row["TechnicalExpertise"];
		$ReasonForBest= $row["ReasonForBest"];
		
		
		$Street= $row["Street"];
		$State= $row["State"];
		$District= $row["District"];
		$PostalCode= $row["PostalCode"];
		
		$CreatedDate= $row["CreatedDate"];
		$ModifiedBy= $row["ModifiedBy"];
		$ModifiedDate= $row["ModifiedDate"];
		
		$Gender= $row["Gender"];
		$LikelyToCome= $row["LikelyToCome"];
		$AttendingAs= $row["AttendingAs"];
		$CarryingLaptop= $row["CarryingLaptop"];
		$TypeOfStaying= $row["TypeOfStaying"];
		$CallComments= $row["CallComments"];
		$CalledBy= $row["CalledBy"];
		$CalledDate= $row["CalledDate"];
		
		
		$total = $total . '
		<tr valign="center">
                        <td valign="center">' . $count . '</td>
			<td valign="center">' . $FirstName . '</td>
			<td valign="center">' . $LastName . '</td>
					
                            <td valign="center">' . $MobileNumber. '</td>
                            <td valign="center">' . $AltMobileNumber. '</td>
                            <td valign="center">' . $Email. '</td>
                            		
                            <td valign="center">' . $CollegeName. '</td>

		
                            <td valign="center">' . $OtherCollegeName. '</td>
                            <td valign="center">' . $Branch. '</td>
                          <td valign="center">' . $YEAR. '</td>
                               <td valign="center">' . $AboutHim. '</td>

<td valign="center">' . $TechnologyArea. '</td>
<td valign="center">' . $UseCaseArea. '</td>

<td valign="center">' . $TeamMember1Name. '</td>
<td valign="center">' . $TeamMember1Branch. '</td>
<td valign="center">' . $TeamMember1Year. '</td>
<td valign="center">' . $TeamContact1Number. '</td>
<td valign="center">' . $TeamMember1Email. '</td>

<td valign="center">' . $TeamMember2Name. '</td>
<td valign="center">' . $TeamMember2Branch. '</td>
<td valign="center">' . $TeamMember2Year. '</td>
<td valign="center">' . $TeamContact2Number. '</td>
<td valign="center">' . $TeamMember2Email. '</td>

<td valign="center">' . $TeamMember3Name. '</td>
<td valign="center">' . $TeamMember3Branch. '</td>
<td valign="center">' . $TeamMember3Year. '</td>
<td valign="center">' . $TeamContact3Number. '</td>
<td valign="center">' . $TeamMember3Email. '</td>

<td valign="center">' . $TeamMember4Name. '</td>
<td valign="center">' . $TeamMember4Branch. '</td>
<td valign="center">' . $TeamMember4Year. '</td>
<td valign="center">' . $TeamContact4Number. '</td>
<td valign="center">' . $TeamMember4Email. '</td>

<td valign="center">' . $TechnicalExpertise. '</td>
<td valign="center">' . $ReasonForBest. '</td>


                                    <td valign="center">' . $Street. '</td>
                            <td valign="center">' . $State. '</td>
		<td valign="center">' . $District. '</td>
<td valign="center">' . $PostalCode. '</td>
		<td valign="center">' . $CreatedDate. '</td>
		<td valign="center">' . $ModifiedBy. '</td>
<td valign="center">' . $ModifiedDate. '</td>

<td valign="center">' . $Gender. '</td>
<td valign="center">' . $LikelyToCome. '</td>
<td valign="center">' . $AttendingAs. '</td>
<td valign="center">' . $CarryingLaptop. '</td>
<td valign="center">' . $TypeOfStaying. '</td>
<td valign="center">' . $CallComments. '</td>
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