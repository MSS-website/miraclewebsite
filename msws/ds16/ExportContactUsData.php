<?php 
require '../config/ConnectionProvider.php';

$filename='ContactUsData.xls';

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
                $queryString = "SELECT Id,PersonName,Email,MobileNumber,Description,CreatedDate FROM tblConfContactUs";
                $stmt = $conn->prepare($queryString);
                $stmt->execute();
                $stmt->setFetchMode(PDO::FETCH_ASSOC);

                $total = "<html>
<head></head><body><table border='1' style='width:100%'>
    <tr style='width:800px;height:100px; valign='center''>
    	        <th valign='center'>    SNO </th>
		<th valign='center'>    PersonName    </th>
		<th valign='center'>   Email   </th>
                
                <th valign='center'>     MobileNumber        </th>
                <th valign='center'>  Description   </th>
                <th valign='center'>  CreatedDate </th>
             
	</tr>";
                
          
$count=0;
                while ($row = $stmt->fetch()) {
                    //  echo '$Id'.$Id;
                    $count++;
                    
                    $FirstName = $row["PersonName"];
                    
                    
                    $Email = $row["Email"];
                    $MobileNumber = $row["MobileNumber"];
                    $Description = $row["Description"];
                    $CreatedDate = $row["CreatedDate"];
                    


                    $total = $total . '
		<tr valign="center">
                        <td valign="center">' . $count . '</td>
			<td valign="center">' . $FirstName . '</td>
			
                            
                            <td valign="center">' . $Email . '</td>
                            <td valign="center">' . $MobileNumber . '</td>
                            
                          
                                    <td valign="center">' . $Description . '</td>
                                         
                            <td valign="center">' . $CreatedDate . '</td></tr>';
                                
                            
                    
                    
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