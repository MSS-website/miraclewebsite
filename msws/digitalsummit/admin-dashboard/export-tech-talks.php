<?php
require '../../config/ConnectionProvider.php';

$filename='tech-talks-registration.xls';

header('Content-type: application/octet-stream');

header('Content-type: application/ms-excel');
header('Content-Disposition: attachment; filename='.$filename);



$Id = '';
$FirstName = '';
$LastName = '';
$MiddleName = '';
$Email = '';
$MobileNumber = '';
$FileNamer = '';
$ResumePath = '';
$SkillSet = '';
$Comments = '';
$CreatedDate = '';
$RandomKey = '';
$ApplyingFor = '';
$total = '';
try {
	// $conn->connectToDatabase();
	$queryString = "SELECT Id,FirstName,LastName,MobileNumber,AltMobileNumber,Email,Designation,AttendeeType,PrimaryIntrest,SecondaryIntrest,Comments,Street,Country,State,District,PostalCode,DATE(CreatedDate) AS CreatedDate,CollegeName,OtherCollegeName,LikelyToCome,CallComments,CalledBy,CalledDate,Gender,AttendingAs,CarryingLaptop,TypeOfStaying,Branch,GraduationYear FROM tblDs17TechTalksRegistrations ORDER BY Id";
	$stmt = $conn->prepare($queryString);
	$stmt->execute();
	$stmt->setFetchMode(PDO::FETCH_ASSOC);
	
	$total = "<html>
<head></head><body><table border='1' style='width:100%'>
    <tr style='width:800px;height:100px; valign='center''>
    	        <th valign='center'>    SNO </th>
		<th valign='center'>    FirstName    </th>
		<th valign='center'>   LastName   </th>
			
                
                <th valign='center'>  MobileNumber   </th>
                <th valign='center'>  AltMobileNumber </th>
			
                <th valign='center'>    Email    </th>
                <th valign='center'>    Designation    </th>
			
                <th valign='center'>    AttendeeType    </th>
<th valign='center'>    CollegeName    </th>
<th valign='center'>    OtherCollegeName    </th>

                 <th valign='center'>    PrimaryIntrest    </th>
                <th valign='center'>    SecondaryIntrest    </th>
               <th valign='center'>    Comments    </th>
               <th valign='center'>    Street    </th>
               <th valign='center'>    Country    </th>
<th valign='center'>    State    </th>
<th valign='center'>    District    </th>
<th valign='center'>    PostalCode    </th>
<th valign='center'>    Registered Date    </th>

<th valign='center'>    LikelyToCome    </th>

<th valign='center'>    AttendingAs    </th>
<th valign='center'>    CarryingLaptop    </th>
<th valign='center'>    TypeOfStaying    </th>
<th valign='center'>    Branch    </th>
<th valign='center'>    GraduationYear    </th>


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
		$Designation= $row["Designation"];
		$AttendeeType= $row["AttendeeType"];
		$CollegeName= $row["CollegeName"];
		$OtherCollegeName= $row["OtherCollegeName"];
		$PrimaryIntrest= $row["PrimaryIntrest"];
		$SecondaryIntrest= $row["SecondaryIntrest"];
		//AttendeeType,PrimaryIntrest,SecondaryIntrest,Comments,Street,Country,State,District,PostalCode,DATE(CreatedDate) AS CreatedDate,CollegeName,OtherCollegeName
		$Comments= $row["Comments"];
		$Street= $row["Street"];
		$Country= $row["Country"];
		$State= $row["State"];
		$District= $row["District"];
		$PostalCode= $row["PostalCode"];
		$CreatedDate= $row["CreatedDate"];
	
		$LikelyToCome= $row["LikelyToCome"];
		$CallComments= $row["CallComments"];
		$CalledBy= $row["CalledBy"];
		$CalledDate= $row["CalledDate"];
		if($LikelyToCome==0){
			$likelyOptedvalue='No';
		}else if($LikelyToCome==1){
			$likelyOptedvalue='Yes';
		}else if($LikelyToCome==2){
			$likelyOptedvalue='May Be';
		}else if($LikelyToCome==-1){
			$likelyOptedvalue='Not Reachable';
		}else{
			$likelyOptedvalue='';
		}
		
		$AttendingAs= $row["AttendingAs"];
		$CarryingLaptop= $row["CarryingLaptop"];
		$TypeOfStaying= $row["TypeOfStaying"];
		$Branch= $row["Branch"];
		$GraduationYear= $row["GraduationYear"];
		
		
		
		$total = $total . '
		<tr valign="center">
                        <td valign="center">' . $count . '</td>
			<td valign="center">' . $FirstName . '</td>
			<td valign="center">' . $LastName . '</td>
					
                            <td valign="center">' . $MobileNumber. '</td>
                            <td valign="center">' . $AltMobileNumber. '</td>
                            <td valign="center">' . $Email. '</td>
                            		
                            <td valign="center">' . $Designation. '</td>
                            <td valign="center">' . $AttendeeType. '</td>
<td valign="center">' . $CollegeName. '</td>
<td valign="center">' . $OtherCollegeName. '</td>
                            <td valign="center">' . $PrimaryIntrest. '</td>
                          <td valign="center">' . $SecondaryIntrest. '</td>
                               <td valign="center">' . $Comments. '</td>
                                    <td valign="center">' . $Street. '</td>
                                         <td valign="center">' . $Country. '</td>
                            <td valign="center">' . $State. '</td>
		<td valign="center">' . $District. '</td>
<td valign="center">' . $PostalCode. '</td>
		<td valign="center">' . $CreatedDate. '</td>
		<td valign="center">' . $likelyOptedvalue. '</td>

<td valign="center">' . $AttendingAs. '</td>
<td valign="center">' . $CarryingLaptop. '</td>
<td valign="center">' . $TypeOfStaying. '</td>
<td valign="center">' . $Branch. '</td>
<td valign="center">' . $GraduationYear. '</td>

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