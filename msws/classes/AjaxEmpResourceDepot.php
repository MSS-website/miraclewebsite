
<?php

 require '../config/ConnectionProvider.php';
$resultMessage = '';
  $checkFlag=0;
try{
    $rfirstname = '';
    $remail = '';
    $rorganization = '';
    $rlastName = '';
    $rphone = '';
    $rdesignation = '';
    $robjectId = 0;
    $rRefId = 0;
    if(! get_magic_quotes_gpc() ){
       
         $rfirstname = addslashes ($_GET['firstName']);
         $remail = addslashes ($_GET['email']);
         $rorganization = addslashes ($_GET['organization']);
         $rlastName = addslashes ($_GET['lastName']);
         $rphone = addslashes ($_GET['phone']);
         $rdesignation = addslashes ($_GET['title']);
         $rRefId = addslashes ($_GET['libId']);
         $robjectId = addslashes ($_GET['objectId']);
    }else {
       
        $rfirstname = $_GET['firstName'];
        $remail = $_GET['email'];
        $rorganization = $_GET['organization'];
        $rlastName = $_GET['lastName'];
        $rphone = $_GET['phone'];
        $rdesignation = $_GET['title'];
        $rRefId = $_GET['libId'];
        $robjectId = $_GET['objectId'];
    }

     $sql = "INSERT INTO tblResourceDepotDetails (ObjectId,RefId,FName,LName,Organization,Designation,Email,WorkPhone,AccessType)   ".
        " VALUES(:robjectId,:rRefId,:rfirstname,:rlastName,:rorganization,".
        ":rdesignation,:remail,:rphone,'I')";
   
                    $stmt = $conn->prepare($sql);
                    $stmt->bindParam(':robjectId', $robjectId);
                    $stmt->bindParam(':rRefId', $rRefId);
                    $stmt->bindParam(':rfirstname', $rfirstname);
                    $stmt->bindParam(':rlastName', $rlastName);
                    $stmt->bindParam(':rorganization', $rorganization);
                    $stmt->bindParam(':rdesignation', $rdesignation);
                    $stmt->bindParam(':remail', $remail);
                    $stmt->bindParam(':rphone', $rphone);
                    if(!$stmt->execute()) {
             $resultMessage= "<font color=red size=2px>Data insertion failed..Please try again later\n</font>";
             echo $resultMessage;
            }else{
                $checkFlag = $conn->lastInsertId();
                echo $checkFlag;
                 
            }
}catch(Exception $exc){
      $exc->getMessage();
         $resultMessage= '<font color=red size=2px>'.$exc.'</font>';
         
}

?>
 
