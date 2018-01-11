<?php

require '../config/ConnectionProvider.php';

$filename = 'Cultural-Registration.xls';

header('Content-type: application/octet-stream');

header('Content-type: application/ms-excel');
header('Content-Disposition: attachment; filename=' . $filename);



$Id = '';
$CompetitionType = '';
$CollegeName = '';
$LeaderName = '';
$LeaderEmail = '';
$LeaderPhoneNo = '';
$TeamSize = '';
$TeamMemberNames = '';
$Comments = '';
$AuditionLink = '';
$CreatedDate = '';

$total = '';
try {
    // $conn->connectToDatabase();
    $queryString = "SELECT CompetitionType,CollegeName,LeaderName,LeaderEmail,LeaderPhoneNo,TeamSize,TeamMemberNames,Comments,CreatedDate,AuditionLink FROM tblConfCulturalRegistration";
    $stmt = $conn->prepare($queryString);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    $total = "<html>
<head></head><body><table border='1' style='width:100%'>
    <tr style='width:800px;height:100px; valign='center''>
    	        <th valign='center'>    SNO </th>
		<th valign='center'>    CompetitionType    </th>
		<th valign='center'>   CollegeName   </th>
                
                <th valign='center'>     LeaderName        </th>
                <th valign='center'>  LeaderEmail   </th>
                <th valign='center'>  LeaderPhoneNo </th>
             
                <th valign='center'>    TeamSize    </th> 
                <th valign='center'>    TeamMemberNames    </th> 
                
                <th valign='center'>    Comments    </th> 
                 <th valign='center'>    CreatedDate    </th> 
                <th valign='center'>    AuditionLink    </th> 
               
	</tr>";


    $count = 0;
    while ($row = $stmt->fetch()) {
        //  echo '$Id'.$Id;
        $count++;

        $CompetitionType = $row["CompetitionType"];
        $CollegeName = $row["CollegeName"];
        $LeaderName = $row["LeaderName"];
        $LeaderEmail = $row["LeaderEmail"];
        $LeaderPhoneNo = $row["LeaderPhoneNo"];
        $TeamSize = $row["TeamSize"];
        $TeamMemberNames = $row["TeamMemberNames"];
        $Comments = $row["Comments"];
        $CreatedDate = $row["CreatedDate"];
        $AuditionLink = $row["AuditionLink"];
        $total = $total . '
		<tr valign="center">
                        <td valign="center">' . $count . '</td>
			<td valign="center">' . $CompetitionType . '</td>
			<td valign="center">' . $CollegeName . '</td>
                            <td valign="center">' . $LeaderName . '</td>
                            <td valign="center">' . $LeaderEmail . '</td>
                            <td valign="center">' . $LeaderPhoneNo . '</td>
                            <td valign="center">' . $TeamSize . '</td>
                            <td valign="center">' . $TeamMemberNames . '</td>
                                    <td valign="center">' . $Comments . '</td>
                            <td valign="center">' . $CreatedDate . '</td>
        <td valign="center">' . $AuditionLink . '</td></tr>';




        // $total = $total . $count.'\\t'.$FirstName.'\\t'.$LastName.'\\t'.$MiddleName.'\\t'.$Email.'\\t'.$MobileNumber.'\\t'.$FileNamer.'\\t'.$SkillSet.'\\t'.$Comments.'\\t'.$CreatedDate.'\\t'.$ApplyingFor.'\\n';
    }
    //$len=7000;
    $total.= '</table>';




    $contents1 = '<html><head><meta http-equiv=\'Content-Type\' content=\'text/html; charset=utf-8\' /></head><body>';
    header('Content-type: application/octet-stream'); //header('Content-type: application/ms-excel');
    header('Content-Disposition: attachment; filename=' . $filename);
    header('Pragma: no-cache');
    header('Expires: 0');
    $contents1 .= $total;
    $contents1 .= '</body></html>';
    echo $contents1;
} catch (Exception $exc) {

    $exc->getMessage();
}
?>
