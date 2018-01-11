<?php
require '../config/ConnectionProvider.php';




class NominationClass{
    public $RowCount = "0";
      public $Message  = "Success";
      public $ConferenceId = "0";
      public $EmployeeName = "";
      public $Designation = "";
      public $WorkPhone = "";
      public $WorkLocation = "";
      public $NearestAirport = "";
      public $PassportAvailability = "0";
      public $GoalsOfAttending = "";
      public $CreatedBy = "";
      public $CreatedDate = "";
      public $ModifiedBy = "";
      public $ModifiedDate = "";
      public $ReportsTo = "";
      public  $NomineeStatus = "";
      
}


try {
    
    $myObj=new NominationClass();
     $tempConferenceId = isset($_GET["conferenceId"]) ? $_GET["conferenceId"] : '';
     $tempEmpLoginId = isset($_GET["empLoginId"]) ? $_GET["empLoginId"] : '';
     
       $selectQuery = "SELECT Id,ConferenceId,EmployeeName,Designation,WorkPhone,WorkLocation,ReportsTo,NearestAirport,PassportAvailability,GoalsOfAttending,CreatedBy,CreatedDate,ModifiedBy,ModifiedDate,NomineeStatus  FROM tblEventNominations WHERE ConferenceId=:tempConferenceId AND CreatedBy=:tempSesionLoginId";
       $stmt = $conn->prepare($selectQuery);
       $stmt->bindParam(':tempConferenceId', $tempConferenceId);
                    $stmt->bindParam(':tempSesionLoginId', $tempEmpLoginId);
                      $stmt->execute();
                      $num_rows = $stmt->rowCount();
                      $myObj->RowCount = $num_rows;
                       $stmt->setFetchMode(PDO::FETCH_ASSOC);
                      
                       
       if ($row = $stmt->fetch()) {
           $myObj->Id = $row["Id"];
           $myObj->ConferenceId = $row["ConferenceId"];
           $myObj->EmployeeName = $row["EmployeeName"];
           $myObj->Designation = $row["Designation"];
           $myObj->WorkPhone = $row["WorkPhone"];
           $myObj->WorkLocation = $row["WorkLocation"];
           $myObj->ReportsTo = $row["ReportsTo"];
           $myObj->NearestAirport = $row["NearestAirport"];
           $myObj->PassportAvailability = $row["PassportAvailability"];
           $myObj->GoalsOfAttending = $row["GoalsOfAttending"];
           $myObj->CreatedBy = $row["CreatedBy"];
           $myObj->CreatedDate = $row["CreatedDate"];
           $myObj->ModifiedBy = $row["ModifiedBy"];
           $myObj->ModifiedDate = $row["ModifiedDate"];
           $myObj->NomineeStatus = $row["NomineeStatus"];

       }
     $myObj = json_encode($myObj);
     
     echo $myObj;
}catch (Exception $exc) {

    $exc->getMessage();
   
    $myObj->Message = $exc;
    
     $myObj = json_encode($myObj);
    echo $myObj;
   
}


?>