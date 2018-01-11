<?php

//include '../config/general.php';
//require '../config/DbController.php';
require '../config/ConnectionProvider.php';
$resultMessage = '';
$checkFlag = 0;
try {
    $rfirstname = '';
    $rdesignation = '';
    $remail = '';
    $rworkphone = '';
    $rmobile = '';
    $rlocation = '';
    $rpartnerLogo = '';
    $ractionType = '';
    $rid = 0;
    $ractivity = '';
    //$conn = new DbController();
    // $conn->connectToDatabase();
    if (!get_magic_quotes_gpc()) {

        $rfirstname = addslashes($_GET['firstName']);
        $rdesignation = addslashes($_GET['designation']);
        $rworkphone = addslashes($_GET['workPhone']);
        $rmobile = addslashes($_GET['mobile']);
        $rlocation = addslashes($_GET['location']);
        $remail = addslashes($_GET['email']);
        $rpartnerLogo = addslashes($_GET['partnerLogo']);
        $rid = addslashes($_GET['id']);
        $ractionType = addslashes($_GET['actionType']);
    } else {

        $rfirstname = $_GET['firstName'];
        $rdesignation = $_GET['designation'];
        $rworkphone = $_GET['workPhone'];
        $rmobile = $_GET['mobile'];
        $rlocation = $_GET['location'];
        $remail = $_GET['email'];
        $rpartnerLogo = $_GET['partnerLogo'];
        $rid = $_GET['id'];
        $ractionType = $_GET['actionType'];
    }

    //   $conn->selectDatabase();
    $sql = '';
    if ($ractionType === 'add') {
        /*    $sql = "INSERT INTO tblEmpSignature (EmployeeName,Designation,Email,WorkPhone,Mobile,Location)   ".
          " VALUES('$rfirstname','$rdesignation','$remail','$rworkphone','$rmobile','$rlocation')";
         */
        if ($rid == '0') {
            $sql = "INSERT INTO tblEmpSignature (EmployeeName,Designation,Email,WorkPhone,Mobile,Location,PartnerLogo)   " .
                    " VALUES(:rfirstname,:rdesignation,:remail,:rworkphone,:rmobile,:rlocation,:rpartnerLogo)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':rfirstname', $rfirstname);
            $stmt->bindParam(':rdesignation', $rdesignation);
            $stmt->bindParam(':remail', $remail);
            $stmt->bindParam(':rworkphone', $rworkphone);
            $stmt->bindParam(':rmobile', $rmobile);
            $stmt->bindParam(':rlocation', $rlocation);
            $stmt->bindParam(':rpartnerLogo', $rpartnerLogo);
        } else {
            $ractivity='Generated';
            $sql = "UPDATE tblEmpSignature set EmployeeName=:rfirstname,Designation=:rdesignation,Email=:remail,WorkPhone=:rworkphone,Mobile=:rmobile,Location=:rlocation,PartnerLogo=:rpartnerLogo,Activity=:ractivity where Id=:rrid";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':rfirstname', $rfirstname);
            $stmt->bindParam(':rdesignation', $rdesignation);
            $stmt->bindParam(':remail', $remail);
            $stmt->bindParam(':rworkphone', $rworkphone);
            $stmt->bindParam(':rmobile', $rmobile);
            $stmt->bindParam(':rlocation', $rlocation);
            $stmt->bindParam(':rpartnerLogo', $rpartnerLogo);
          //  $stmt->bindParam(':ractivity', $ractivity);
            $stmt->bindParam(':ractivity', $ractivity);
            $stmt->bindParam(':rrid', $rid);
        }
    } else {
        //$sql = "UPDATE tblEmpSignature SET Activity='Copied' WHERE Id="+$rid;
        //$sql = "UPDATE tblEmpSignature SET Activity='Copied' WHERE Id=".$rid;
        $sql = "UPDATE tblEmpSignature SET Activity='Copied' WHERE Id=:rid";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':rid', $rid);
    }


    // echo "query-->".$sql;
    //$retval = mysql_query( $sql, $conn );
    // if(!mysql_query($sql)){
    if (!$stmt->execute()) {
        //if(! $retval ){
        $resultMessage = "<font color=red size=2px>Data insertion failed..Please try again later\n</font>";
        // $conn->closeConnection(); // closing the connection
        // mysql_close();
        // header('Location: ../back-end-error.php?resultMessage='.$resultMessage); 
        echo $resultMessage;
    } else {
        if ($ractionType === 'add') {
            //   $checkFlag =  mysql_insert_id();
             if ($rid == '0') {
            $checkFlag = $conn->lastInsertId();
            }else{
                $checkFlag = $rid;
            }
            echo $checkFlag;
        } else {
             echo $rid;
        }
        // mysql_close();
    }
} catch (Exception $exc) {

    $exc->getMessage();
    $resultMessage = '<font color=red size=2px>' . $exc . '</font>';
    echo $resultMessage;
    //  $conn->closeConnection(); // closing the connection
    //    mysql_close();
    //       header('Location: ../back-end-error.php?resultMessage='.$resultMessage); 
}
?>
 

