<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AjaxSurveyReviewInfo
 *
 * @author miracle
 */
//include '../config/DbController.php';
require '../config/ConnectionProvider.php';
include '../config/Locations.php';
require '../classes/FileUploadUtility.php';
//$conn = new DbController();
$surveyId = 0;
$email = '';
$quesionIdArray = '';
try {
    if (!get_magic_quotes_gpc()) {
        $surveyId = addslashes($_GET['surveyId']);
        $email = addslashes($_GET['email']);
        $quesionIdArray = addslashes($_GET['quesionIdArray']);
    } else {
        $surveyId = $_GET['surveyId'];
        $email = $_GET['email'];
        $quesionIdArray = $_GET['quesionIdArray'];
    }

  //  $conn->connectToDatabase();
  //  $conn->selectDatabase();

   // $selectQuery = "SELECT sinfo_id,s_id,emailId,userName,phone,AttachmentName,AttachmentPath,CreatedDate,EmpNo FROM tblSurveyInfo WHERE s_id =" . $surveyId . "  AND emailId ='" . $email . "'";
     $selectQuery = "SELECT sinfo_id,s_id,emailId,userName,phone,AttachmentName,AttachmentPath,CreatedDate,EmpNo FROM tblSurveyInfo WHERE s_id =:surveyId   AND emailId =:email";
 //   $result = mysql_query($selectQuery) or die(mysql_error());
$stmt = $conn->prepare($selectQuery);
                    $stmt->bindParam(':surveyId', $surveyId);
                    $stmt->bindParam(':email', $email);
                      $stmt->execute();
               // $stmt->setFetchMode(PDO::FETCH_ASSOC);
    //$sno = 1;
    //$outp = "[";
    $outp = '';
   // if (mysql_num_rows($result) > 0) {
    //    $row = mysql_fetch_row($result);
    if ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {

        $outp = $row[0] . '*id*';
        // $outp .= '{"InfoId":"'  . $infoId. '",';
        // $outp .= '"data":"'  . getSurveyData($infoId,$quesionIdArray). '"}';
        $outp = $outp . getSurveyData($row[0], $quesionIdArray);

        //getSurveyData
    } else {
        $outp = 'notexists';
    }

    // $outp .="]";


    echo $outp;
} catch (Exception $exc) {

    $exc->getMessage();
    $resultMessage = '<font color=red size=2px>' . $exc . '</font>';
}

function getSurveyData($rsurveyInfoId, $quesionIdInfo) {
    //$conn = new DbController();
    $regEmails = '';
 require '../config/ConnectionProvider.php';
    try {
       // $conn->connectToDatabase();
      //  $conn->selectDatabase();
        // $Query = "SELECT TIMESTAMPDIFF(DAY,CURRENT_TIMESTAMP,event_startdate) AS difference FROM tblEventLines WHERE event_id=" . $webEventId;
        //  $Query = "SELECT (SELECT MaximumSubmissions FROM tblSurvey WHERE Id=$rsurveyId) - (SELECT COUNT(s_id) FROM tblSurveyInfo WHERE s_id=$rsurveyId) AS diff";


        $questions = explode("*@!", $quesionIdInfo);
        $userSurveydata = '';
          $Query = "SELECT tblSurveyInfoDetails.Id as Id,sinfo_id,sfd_id,sfd_option,OptionType FROM tblSurveyInfoDetails  LEFT OUTER JOIN tblSurveyForm ON (tblSurveyInfoDetails.sfd_id=tblSurveyForm.Id) WHERE sinfo_id =:rsurveyInfoId AND sfd_id=:qid";
           $stmt = $conn->prepare($Query);
        foreach ($questions as &$value) {
            $qestInfo = explode("#^$", $value);
            $qid = $qestInfo[0];
            $optionType = $qestInfo[1];
            //$Query = "SELECT Id,sinfo_id,sfd_id,sfd_option FROM tblSurveyInfoDetails WHERE sinfo_id =".$rsurveyInfoId." AND sfd_id=".$qid;
            //$Query = "SELECT tblSurveyInfoDetails.Id as Id,sinfo_id,sfd_id,sfd_option,OptionType FROM tblSurveyInfoDetails  LEFT OUTER JOIN tblSurveyForm ON (tblSurveyInfoDetails.sfd_id=tblSurveyForm.Id) WHERE sinfo_id =" . $rsurveyInfoId . " AND sfd_id=" . $qid;
           // $result = mysql_query($Query) or die(mysql_error());
             $stmt->bindParam(':rsurveyInfoId', $rsurveyInfoId);
             $stmt->bindParam(':qid', $qid);
              $stmt->execute();
            $userSurveydata.= $qid . "#^$" . $optionType . "#^$";
            if ($optionType == 'Checkbox') {
                // $result = mysql_query($Query);
                $checkData = '';
                $stmt->setFetchMode(PDO::FETCH_ASSOC);
               // while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
                 while ($row = $stmt->fetch()) {
                    $checkData.=$row["sfd_option"] . ",";
                }
                if ($checkData != '') {
                    $checkData = substr($checkData, 0, -1);
                }
                $userSurveydata.=$checkData;
            } else if ($optionType == 'Attachment') {

                //if (mysql_num_rows($result) > 0) {
                  //  $row = mysql_fetch_row($result);
                if ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
                    if (file_exists($row[3])) {
                        $userSurveydata.=$row[3] . "*name*" . basename($row[3]). "*name*" .$row[0];
                        // $userSurveydata.=$row[3];
                    } else {
                        $userSurveydata.="notexist";
                    }
                } else {
                    $userSurveydata.="notexist";
                }
            } else {

               // if (mysql_num_rows($result) > 0) {
                 //   $row = mysql_fetch_row($result);
                if ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
                    $userSurveydata.=$row[3];
                }
            }

            $userSurveydata.='*@!';
        }
    } catch (Exception $exc) {

        $exc->getMessage();
        echo $exc;
        // $conn->closeConnection(); // closing the connection
    }

    //   echo '$regEmails-->' . $regEmailsString;
    return $userSurveydata;
}

?>
