<?php

require '../config/general.php';
require '../config/ConnectionProvider.php';
try {
    //  echo 'begining';
    session_start();
    $_SESSION["ses_Curr_VideoId"] = '';
    $_SESSION["ses_Curr_Err_Msg"] = '';
    $_SESSION["ses_Curr_AccessType"] = 'E';
    //  $conn->connectToDatabase();
    if (!get_magic_quotes_gpc()) {
        // $rrefId = addslashes ($_POST['refId']);
        // $robjectId = addslashes ($_POST['objectId']);
        $rrefId = addslashes($_POST['refId']);
        $rfirstname = addslashes($_POST['firstname']);
        $remail = addslashes($_POST['email']);
        $rorganization = addslashes($_POST['organization']);
        $rlastName = addslashes($_POST['lastname']);
        $rphone = addslashes($_POST['workPhone']);
        $rdesignation = addslashes($_POST['designation']);
        $rphpFileName = addslashes($_POST['phpFileName']);
    } else {
        //$rrefId = $_POST['refId'];
        // $robjectId = $_POST['objectId'];
        $rrefId = $_POST['refId'];
        $rfirstname = $_POST['firstname'];
        $remail = $_POST['email'];
        $rorganization = $_POST['organization'];
        $rlastName = $_POST['lastname'];
        $rphone = $_POST['workPhone'];
        $rdesignation = $_POST['designation'];
        $rphpFileName = $_POST['phpFileName'];
    }
    //$conn->selectDatabase();
    //--dont change the below line
    $sql = "INSERT INTO tblResourceDepotDetails (ObjectId,RefId,FName,LName,Organization,Designation,Email,WorkPhone)   " .
            " VALUES(4,:rrefId,:rfirstname,:rlastName,:rorganization," .
            ":rdesignation,:remail,:rphone)";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':rrefId', $rrefId);
    $stmt->bindParam(':rfirstname', $rfirstname);
    $stmt->bindParam(':rlastName', $rlastName);
    $stmt->bindParam(':rorganization', $rorganization);
    $stmt->bindParam(':rdesignation', $rdesignation);
    $stmt->bindParam(':remail', $remail);
    $stmt->bindParam(':rphone', $rphone);
    //echo "query-->".$sql;
    //   if (!mysql_query($sql)) {
    if (!$stmt->execute()) {
        $_SESSION["ses_CheckFlag"] = "-1";
        $_SESSION["ses_Curr_Err_Msg"] = 'Data insertion failed..Please try again later.';
        $resultMessage = "<font color=red size=2px>Data insertion failed..Please try again later\n</font>";
    } else {
        $_SESSION["ses_CheckFlag"] = $rrefId;
        $_SESSION["ses_Curr_Err_Msg"] = 'None';
        // $checkFlag = mysql_insert_id();
        $checkFlag = $conn->lastInsertId();
        header('Location: ' . $rphpFileName);
    }

//}
} catch (Exception $exc) {
  //  echo 'phani-' . $exc;
    $exc->getMessage();
    $resultMessage = '<font color=red size=2px>' . $exc . '</font>';

    //  $conn->closeConnection(); // closing the connection
    //mysql_close();
    header('Location: ../back-end-error.php?resultMessage=' . $resultMessage);
}
?>