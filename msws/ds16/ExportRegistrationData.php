<?php 
require '../config/ConnectionProvider.php';

$filename='Registration.xls';

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
                $queryString = "SELECT Id,FirstName,LastName,Email,MobileNumber,Title,AttendeeType,City,State,AreasOfInterest,Comments,CreatedDate,Country,CollegeName FROM tblConfRegistration";
                $stmt = $conn->prepare($queryString);
                $stmt->execute();
                $stmt->setFetchMode(PDO::FETCH_ASSOC);

                $total = "<html>
<head></head><body><table border='1' style='width:100%'>
    <tr style='width:800px;height:100px; valign='center''>
    	        <th valign='center'>    SNO </th>
		<th valign='center'>    FirstName    </th>
		<th valign='center'>   LastName   </th>
                
                <th valign='center'>     Email        </th>
                <th valign='center'>  MobileNumber   </th>
                <th valign='center'>  Title </th>
             
                <th valign='center'>    AttendeeType    </th> 
                <th valign='center'>    City    </th> 
                
                <th valign='center'>    State    </th> 
                 <th valign='center'>    Country    </th> 
                <th valign='center'>    AreasOfInterest    </th> 
               <th valign='center'>    Comments    </th> 
               <th valign='center'>    CreatedDate    </th> 
               <th valign='center'>    CollegeName    </th> 
	</tr>";
                
          
$count=0;
                while ($row = $stmt->fetch()) {
                    //  echo '$Id'.$Id;
                    $count++;
                    
                    $FirstName = $row["FirstName"];
                    $LastName = $row["LastName"];
                    
                    $Email = $row["Email"];
                    $MobileNumber = $row["MobileNumber"];
                    $Title = $row["Title"];
                    $AttendeeType = $row["AttendeeType"];
                    $City = $row["City"];
                    $State = $row["State"];
                    $AreasOfInterest = $row["AreasOfInterest"];
                    $Comments = $row["Comments"];
                    $CreatedDate = $row["CreatedDate"];
                    $Country = $row["Country"];
                    $CollegeName = $row["CollegeName"];


                    $total = $total . '
		<tr valign="center">
                        <td valign="center">' . $count . '</td>
			<td valign="center">' . $FirstName . '</td>
			<td valign="center">' . $LastName . '</td>
                            
                            <td valign="center">' . $Email . '</td>
                            <td valign="center">' . $MobileNumber . '</td>
                            <td valign="center">' . $Title . '</td>
                            
                            <td valign="center">' . $AttendeeType . '</td>
                            <td valign="center">' . $City . '</td>
                            <td valign="center">' . $State . '</td>
                          <td valign="center">' . $Country . '</td>
                               <td valign="center">' . $AreasOfInterest . '</td>
                                    <td valign="center">' . $Comments . '</td>
                                         <td valign="center">' . $CreatedDate . '</td>
                            <td valign="center">' . $CollegeName . '</td></tr>';
                                
                            
                    
                    
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