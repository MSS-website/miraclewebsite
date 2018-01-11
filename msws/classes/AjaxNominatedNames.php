<?php
require '../config/ConnectionProvider.php';




try {
    $associativeArray = array();
    
     $tempConferenceId = isset($_GET["conferenceId"]) ? $_GET["conferenceId"] : '';
     $tempEmpLoginId = isset($_GET["empLoginId"]) ? $_GET["empLoginId"] : '';
     
       $selectQuery = "SELECT DISTINCT NominatorName FROM tblNominateCollegue WHERE ConferenceId=:tempConferenceId AND CollegueLoginId=:tempSesionLoginId";
       $stmt = $conn->prepare($selectQuery);
       $stmt->bindParam(':tempConferenceId', $tempConferenceId);
       $stmt->bindParam(':tempSesionLoginId', $tempEmpLoginId);
                      $stmt->execute();
                      $num_rows = $stmt->rowCount();
                      //$myObj->RowCount = $num_rows;
                       $stmt->setFetchMode(PDO::FETCH_ASSOC);
                      
//       $getnames="hello....."; 
//       
//       if($row = $stmt->fetch()) {
//          $myObj->NominatorName = $row["NominatorName"];
//         // $getnames=$getnames.",".$row["NominatorName"];
//           
//           
//       }
//              
                       
                       
                 
//                       $myObj="";      
//                 $initial=0;      
//               for( $initial=0;i<$num_rows;$initial++){
//                 $myObj=  $myObj+$row["NominatorName"];
//               }
//    
                       
   $associativeArray = array();
    while ($row = $stmt->fetch()) {
        $associativeArray[]=array("NominatorName" => $row["NominatorName"]);
      // while ($array = mysql_fetch_row($result)) {             
     //while ($array = $stmt->fetch()) {
   //  $jsonData[] = $array;
}
echo json_encode($associativeArray);        
                       
       
       //$myObj = json_encode($myObj);
       // echo $myObj;
        
}catch (Exception $exc) {

    $exc->getMessage();
   
}


?>
