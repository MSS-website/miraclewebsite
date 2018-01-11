<?php 
require '../config/ConnectionProvider.php';

$filename='JobApplication.xls';

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
            $Graduation ='';
            $PostGraduation='';
            $GraduationPercentage='';
            $YearsofExperience='';
            $LastDrawnMonthlySalary='';
            $PostGraduationPercentage='';
            $total = '';
            try {
                // $conn->connectToDatabase();
                $queryString = "SELECT Id,FirstName,LastName,MiddleName,Email,MobileNumber,FileName,ResumePath,SkillSet,Comments,CreatedDate,RandomKey,ApplyingFor,Graduation,PostGraduation,GraduationPercentage,YearsofExperience,LastDrawnMonthlySalary,PostGraduationPercentage FROM tblConfApplicant";
                $stmt = $conn->prepare($queryString);
                $stmt->execute();
                $stmt->setFetchMode(PDO::FETCH_ASSOC);

                $total = "<html>
<head></head><body><table border='1' style='width:100%'>
    <tr style='width:800px;height:100px; valign='center''>
    	        <th valign='center'>    SNO </th>
		<th valign='center'>    FirstName    </th>
		<th valign='center'>   LastName   </th>
                <th valign='center'>   MiddleName   </th>
                <th valign='center'>     Email        </th>
                <th valign='center'>  MobileNumber   </th>
                <th valign='center'>  FileName </th>
             
                <th valign='center'>    SkillSet    </th> 
                <th valign='center'>    Comments    </th> 
                
                <th valign='center'>    CreatedDate    </th> 
                <th valign='center'>    ApplyingFor    </th>
                
                <th valign='center'>    Graduation    </th>
              
               <th valign='center'>    PostGraduation    </th>
                <th valign='center'>    GraduationPercentage    </th>
                <th valign='center'>    YearsofExperience    </th>
                <th valign='center'>    LastDrawnMonthlySalary    </th>
                <th valign='center'>    PostGraduationPercentage    </th>
                
               
	</tr>";
                
          
$count=0;
                while ($row = $stmt->fetch()) {
                    //  echo '$Id'.$Id;
                    $count++;
                    $Id = $row["Id"];
                    $FirstName = $row["FirstName"];
                    $LastName = $row["LastName"];
                    $MiddleName = $row["MiddleName"];
                    $Email = $row["Email"];
                    $MobileNumber = $row["MobileNumber"];
                    $FileNamer = $row["FileName"];
                    $ResumePath = $row["ResumePath"];
                    $SkillSet = $row["SkillSet"];
                    $Comments = $row["Comments"];
                    $CreatedDate = $row["CreatedDate"];
                    $RandomKey = $row["RandomKey"];
                    $ApplyingFor = $row["ApplyingFor"];
                    $Graduation = $row["Graduation"];
                    $PostGraduation = $row["PostGraduation"];
                    $GraduationPercentage = $row["GraduationPercentage"];
                    $YearsofExperience = $row["YearsofExperience"];
                    $LastDrawnMonthlySalary = $row["LastDrawnMonthlySalary"];
                    $PostGraduationPercentage = $row["PostGraduationPercentage"];
 
                    $total = $total . '
		<tr valign="center">
                        <td valign="center">' . $Id . '</td>
			<td valign="center">' . $FirstName . '</td>
			<td valign="center">' . $LastName . '</td>
                            <td valign="center">' . $MiddleName . '</td>
                            <td valign="center">' . $Email . '</td>
                            <td valign="center">' . $MobileNumber . '</td>
                            <td valign="center">' . $FileNamer . '</td>
                            
                            <td valign="center">' . $SkillSet . '</td>
                            <td valign="center">' . $Comments . '</td>
                            <td valign="center">' . $CreatedDate . '</td>
                         
                            <td valign="center">' . $ApplyingFor . '</td>
                            <td valign="center">' . $Graduation . '</td>
                            <td valign="center">' . $PostGraduation . '</td>
                            <td valign="center">' . $GraduationPercentage . '</td>
                            <td valign="center">' . $YearsofExperience . '</td>
                            <td valign="center">' . $LastDrawnMonthlySalary . '</td>
                            <td valign="center">' . $PostGraduationPercentage . '</td></tr>';
                                
                         

                    
                    
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