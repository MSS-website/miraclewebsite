<?php
require '../config/ConnectionProvider.php';



try {
    $associativeArray = array();
    
     $tempConferenceId = isset($_GET["conferenceId"]) ? $_GET["conferenceId"] : '';
     $tempEmpLoginId = isset($_GET["empLoginId"]) ? $_GET["empLoginId"] : '';
     
       $selectQuery = "SELECT Id,ConferenceId,CollegueLoginId,CollegueName,CollegueEmail,Comments FROM tblNominateCollegue WHERE ConferenceId=:tempConferenceId AND NominatedBy=:tempSesionLoginId";
       $stmt = $conn->prepare($selectQuery);
       $stmt->bindParam(':tempConferenceId', $tempConferenceId);
                    $stmt->bindParam(':tempSesionLoginId', $tempEmpLoginId);
                      $stmt->execute();
                      $num_rows = $stmt->rowCount();
                     // $myObj->RowCount = $num_rows;
                       $stmt->setFetchMode(PDO::FETCH_ASSOC);
                      
                       
       while ($row = $stmt->fetch()) {
         
           $associativeArray[]=array("Id" => $row["Id"], "ConferenceId" => $row["ConferenceId"], "CollegueLoginId" => $row["CollegueLoginId"], "CollegueName" => $row["CollegueName"], "CollegueEmail" => $row["CollegueEmail"], "Comments" => $row["Comments"]);
           
       }
     $associativeArray = json_encode($associativeArray);
     
     echo $associativeArray;
}catch (Exception $exc) {

    $exc->getMessage();
   
  
   
}


?>