<?php

require '../config/ConnectionProvider.php';

$filename = 'Meanhack-RegistrationData.xls';

header('Content-type: application/octet-stream');

header('Content-type: application/ms-excel');
header('Content-Disposition: attachment; filename=' . $filename);



$Id = '';
$FirstName = '';
$LastName = '';
$EmailId = '';
$MobileNumber = '';
$CollegeName = '';
$City = '';
$Branch = '';
$GraduationYear = '';
$State = '';
$AlteMobileNo = '';
$CandidateInfo = '';
$TeamCandidateName = '';
$TeamCandidateBranch = '';
$TeamGraduationYear = '';
$TeamEmailId = '';
$TeamCandidateInfo = '';
$TeamInfo = '';
$TeamCandidateName2 = '';
$TeamCandidateBranch2 = '';
$TeamGraduationYear2 = '';
$TeamEmailId2 = '';
$TeamCandidateName3 = '';
$TeamCandidateBranch3 = '';
$TeamGraduationYear3 = '';
$TeamEmailId3 = '';
$CreatedDate = '';

$PrimaryTrack = '';
$SecondaryTrack = '';
$TertiaryTrack = '';


$total = '';
try {
    // $conn->connectToDatabase();
    $queryString = "SELECT FirstName,LastName,EmailId,MobileNumber,CollegeName,City,Branch,GraduationYear,CreatedDate,State,AlteMobileNo,CandidateInfo,TeamCandidateName,TeamCandidateBranch,TeamGraduationYear,TeamEmailId,TeamCandidateInfo,TeamInfo,TeamCandidateName2,TeamCandidateBranch2,TeamGraduationYear2,TeamEmailId2,TeamCandidateName3,TeamCandidateBranch3,TeamGraduationYear3,TeamEmailId3,PrimaryTrack,SecondaryTrack,TertiaryTrack FROM tblConfHackathonRegistration";
    $stmt = $conn->prepare($queryString);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    $total = "<html>
<head></head><body><table border='1' style='width:100%'>
    <tr style='width:800px;height:100px; valign='center''>
    	        <th valign='center'>    SNO </th>
		<th valign='center'>    FirstName    </th>
		<th valign='center'>   LastName   </th>
                <th valign='center'>     EmailId        </th>
                <th valign='center'>  MobileNumber   </th>
                <th valign='center'>  CollegeName </th>
                <th valign='center'>    City    </th> 
                <th valign='center'>    Branch    </th> 
                <th valign='center'>    GraduationYear    </th> 
                <th valign='center'>    State    </th> 
                <th valign='center'>    AlteMobileNo    </th> 
                <th valign='center'>    CandidateInfo    </th> 
                <th valign='center'>    TeamCandidateName    </th> 
                <th valign='center'>    TeamCandidateBranch    </th> 
                <th valign='center'>    TeamGraduationYear    </th> 
                <th valign='center'>    TeamEmailId    </th> 
                <th valign='center'>    Technical Expertise </th> 
                <th valign='center'>    Why are you the best?</th> 
                <th valign='center'>    TeamCandidateName2    </th> 
                <th valign='center'>    TeamCandidateBranch2    </th> 
                <th valign='center'>    TeamGraduationYear2    </th> 
                <th valign='center'>    TeamEmailId2    </th> 
                <th valign='center'>    TeamCandidateName3    </th> 
                <th valign='center'>    TeamCandidateBranch3    </th> 
                <th valign='center'>    TeamGraduationYear3    </th> 
                <th valign='center'>    TeamEmailId3    </th> 
                <th valign='center'>    PrimaryTrack    </th> 
                <th valign='center'>    SecondaryTrack    </th> 
                <th valign='center'>    TertiaryTrack    </th> 
                 <th valign='center'>    CreatedDate    </th> 
	</tr>";
    $count = 0;
    while ($row = $stmt->fetch()) {
        //  echo '$Id'.$Id;
        $count++;
        $FirstName = $row["FirstName"];
        $LastName = $row["LastName"];
        $EmailId = $row["EmailId"];
        $MobileNumber = $row["MobileNumber"];
        $CollegeName = $row["CollegeName"];
        $City = $row["City"];
        $Branch = $row["Branch"];
        $GraduationYear = $row["GraduationYear"];
        $State = $row["State"];
        $AlteMobileNo = $row["AlteMobileNo"];
        $CandidateInfo = $row["CandidateInfo"];
        $TeamCandidateName = $row["TeamCandidateName"];
        $TeamCandidateBranch = $row["TeamCandidateBranch"];
        $TeamGraduationYear = $row["TeamGraduationYear"];
        $TeamEmailId = $row["TeamEmailId"];
        $TeamCandidateInfo = $row["TeamCandidateInfo"];
        $TeamInfo = $row["TeamInfo"];
        $TeamCandidateName2 = $row["TeamCandidateName2"];
        $TeamCandidateBranch2 = $row["TeamCandidateBranch2"];
        $TeamGraduationYear2 = $row["TeamGraduationYear2"];
        $TeamEmailId2 = $row["TeamEmailId2"];
        $TeamCandidateName3 = $row["TeamCandidateName3"];
        $TeamCandidateBranch3 = $row["TeamCandidateBranch3"];
        $TeamGraduationYear3 = $row["TeamGraduationYear3"];
        $TeamEmailId3 = $row["TeamEmailId3"];
        $PrimaryTrack = $row["PrimaryTrack"];
        $SecondaryTrack = $row["SecondaryTrack"];
        $TertiaryTrack = $row["TertiaryTrack"];
        $CreatedDate = $row["CreatedDate"];

        if ($PrimaryTrack == 'IOT') {
            $PrimaryTrack = 'Internet of Things';
        } else if ($PrimaryTrack == 'CCB') {
            $PrimaryTrack = 'Cognitive Chat Bots';
        } else if ($PrimaryTrack == 'EM') {
            $PrimaryTrack = 'Enterprise Mobility';
        }
        if ($SecondaryTrack == 'IOT') {
            $SecondaryTrack = 'Internet of Things';
        } else if ($SecondaryTrack == 'CCB') {
            $SecondaryTrack = 'Cognitive Chat Bots';
        } else if ($SecondaryTrack == 'EM') {
            $SecondaryTrack = 'Enterprise Mobility';
        }
        if ($TertiaryTrack == 'IOT') {
            $TertiaryTrack = 'Internet of Things';
        } else if ($TertiaryTrack == 'CCB') {
            $TertiaryTrack = 'Cognitive Chat Bots';
        } else if ($TertiaryTrack == 'EM') {
            $TertiaryTrack = 'Enterprise Mobility';
        }
        $total = $total . '
		<tr valign="center">
                        <td valign="center">' . $count . '</td>
			<td valign="center">' . $FirstName . '</td>
			<td valign="center">' . $LastName . '</td>
                            <td valign="center">' . $EmailId . '</td>
                            <td valign="center">' . $MobileNumber . '</td>
                            <td valign="center">' . $CollegeName . '</td>
                            <td valign="center">' . $City . '</td>
                            <td valign="center">' . $Branch . '</td>
                            <td valign="center">' . $GraduationYear . '</td>
                                    <td valign="center">' . $State . '</td>
                                    <td valign="center">' . $AlteMobileNo . '</td>
                                    <td valign="center">' . $CandidateInfo . '</td>
                                    <td valign="center">' . $TeamCandidateName . '</td>
                                    <td valign="center">' . $TeamCandidateBranch . '</td>
                                    <td valign="center">' . $TeamGraduationYear . '</td>
                                    <td valign="center">' . $TeamEmailId . '</td>
                                    <td valign="center">' . $TeamCandidateInfo . '</td>
                                    <td valign="center">' . $TeamInfo . '</td>
                                    <td valign="center">' . $TeamCandidateName2 . '</td>
                                    <td valign="center">' . $TeamCandidateBranch2 . '</td>
                                    <td valign="center">' . $TeamGraduationYear2 . '</td>
                                    <td valign="center">' . $TeamEmailId2 . '</td>
                                    <td valign="center">' . $TeamCandidateName3 . '</td>
                                    <td valign="center">' . $TeamCandidateBranch3 . '</td>
                                    <td valign="center">' . $TeamGraduationYear3 . '</td>
                                    <td valign="center">' . $TeamEmailId3 . '</td>
                                    <td valign="center">' . $PrimaryTrack . '</td>
                                    <td valign="center">' . $SecondaryTrack . '</td>
                                    <td valign="center">' . $TertiaryTrack . '</td>
                                    <td valign="center">' . $CreatedDate . '</td>
        </tr>';




        // $total = $total . $count.'\\t'.$FirstName.'\\t'.$LastName.'\\t'.$MiddleName.'\\t'.$Email.'\\t'.$MobileNumber.'\\t'.$FileNamer.'\\t'.$SkillSet.'\\t'.$Comments.'\\t'.$CreatedDate.'\\t'.$ApplyingFor.'\\n';
    }
    //$len=7000;
    $total.= '</table>';




    $contents2 = '<html><head><meta http-equiv=\'Content-Type\' content=\'text/html; charset=utf-8\' /></head><body>';
    header('Content-type: application/octet-stream'); //header('Content-type: application/ms-excel');
    header('Content-Disposition: attachment; filename=' . $filename);
    header('Pragma: no-cache');
    header('Expires: 0');
    $contents2 .= $total;
    $contents2 .= '</body></html>';
    echo $contents2;
} catch (Exception $exc) {

    $exc->getMessage();
}
?>
