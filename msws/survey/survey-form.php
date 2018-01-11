<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="description">
        <meta content="" name="author">
        <title>
            Survey Form | Miracle
        </title>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/font-awesome.min.css" rel="stylesheet">
        <link href="../css/main.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link href="../css/default.css" rel="stylesheet" type="text/css">
        <link href="../css/component.css" rel="stylesheet" type="text/css">
        <script src="../js/modernizr.custom.js"></script>
        <script src="../js/fileinput.js"></script>

        <!-- <link href="../css/slider/bootstrap.css" rel="stylesheet" type="text/css"> -->

        <script src="../js/custom.js" type="text/javascript"></script>

        <!-- <link href="../css/slider/bootstrap-slider.css" rel="stylesheet" type="text/css"> -->
           <!--<script src="../js/slider/bootstrap-slider.js" type="text/javascript"></script>
       <script src="../js/slider/modernizr.js" type="text/javascript"></script>
        -->


        <script src="../js/Validation.js" type="text/javascript"></script><!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
        <link href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css" rel="stylesheet">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
        <link href="/resources/demos/style.css" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="../images/favicon.ico" rel="shortcut icon">
        <script src="../js/ajaxUtil.js?version=2.0"></script>
        <link href='http://fonts.googleapis.com/css?family=Quantico' rel='stylesheet' type='text/css'></link>

        <link rel="script">

        <script type="text/javascript">
             
            function setRangeValue(rangeObj,val){
    

                document.getElementById(val).value = rangeObj.value;
    
            }
            function setDefaultFormVales() {
                var fullName = document.getElementById("frmFullName").value;
                var emailId = document.getElementById("frmEmailId").value;
                var phone = document.getElementById("frmPhone").value;
                var empNo = '';   
                if(document.getElementById("frmSurveyType").value=='I'){
                    empNo = document.getElementById("frmEmpNo").value;   
                    fullName = document.getElementById("tempFrmFullName").value;
                    emailId = document.getElementById("tempFrmEmailId").value;
                    phone = document.getElementById("tempFrmPhone").value;
                    empNo = document.getElementById("tempFrmEmpNo").value;  
                }
                document.getElementById("myForm").reset();
    
                document.getElementById("frmFullName").value = fullName;
                document.getElementById("frmEmailId").value = emailId;
                document.getElementById("frmPhone").value = phone;
                if(document.getElementById("frmSurveyType").value=='I')
                    document.getElementById("frmEmpNo").value=empNo;
                if($('#frmIsAnonymous').val()){
                    if($('#anonymously').val()=='1')
                        $( "#no" ).click();
                }
                // doPreSubmit();
                //document.getElementById(val).value = 50;
            }

        </script>

        <?php
        //  require '../config/DbController.php';
        require '../config/ConnectionProvider.php';
        include '../config/Locations.php';
        require '../classes/FileUploadUtility.php';

        //  $conn = new DbController();

        $resultMessage = '';
        $rsurveyId = isset($_GET["surveyId"]) ? $_GET["surveyId"] : '-1';
        $rflag = isset($_GET["flag"]) ? $_GET["flag"] : 'Live';
        $surveyTitle = '';
        $surveyDescription = '';
        $surveyExpiryDate = '';
        $surveyType = '';
        $surveyStatus = '';
        $surveyCreatedBy = '';
        $surveyCreatedDate = '';
        $dispcreatedDate = '';
        $optionContent = '';
        $surveyIsAnonymous = '';
        $placeHolder = '';
        $memberRegistered = '';
        $maximumSubmissions = '';
        $isAllowDuplicates = 1;
        //  $anonymousFlag = false;
        try {
            //  $conn->connectToDatabase();
            //  $conn->selectDatabase();
            // if($rflag=='Live') {
            // $selectQuery = "SELECT Id,Title,Description,ExpiryDate,SurveyType,CurrStatus,CreatedBy,CreatedDate,ModifiedBy,ModifiedDate FROM tblSurvey WHERE Id = $rsurveyId AND CurrStatus='Published'";
            //} else {   
            //   $selectQuery = "SELECT Id,Title,Description,ExpiryDate,SurveyType,CurrStatus,CreatedBy,CreatedDate,ModifiedBy,ModifiedDate,IsAnonymous,MaximumSubmissions,AllowDuplicates FROM tblSurvey  WHERE Id = $rsurveyId";
            $selectQuery = "SELECT Id,Title,Description,ExpiryDate,SurveyType,CurrStatus,CreatedBy,CreatedDate,ModifiedBy,ModifiedDate,IsAnonymous,MaximumSubmissions,AllowDuplicates FROM tblSurvey  WHERE Id = :rsurveyId AND CurrStatus != 'InActive'";
            // }
            //rsurveyId
            $stmt = $conn->prepare($selectQuery);
            $stmt->bindParam(':rsurveyId', $rsurveyId);
            $stmt->execute();

            //$selectresponce = mysql_query($selectQuery);
            // if (mysql_num_rows($selectresponce) > 0) {
            //  $row = mysql_fetch_row($selectresponce);
            if ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
                $surveyTitle = $row[1];
                $surveyDescription = $row[2];
                $surveyExpiryDate = strtotime($row[3]);
                $surveyType = $row[4];
                $surveyStatus = $row[5];

                //   if($surveyStatus=='Published')
                //  $rflag=='Live';
                $surveyCreatedBy = $row[6];
                $surveyCreatedDate = strtotime($row[7]);
                $surveyIsAnonymous = $row[10];
                $maximumSubmissions = $row[11];
                $isAllowDuplicates = $row[12];
                // echo "isanno----->".$surveyIsAnonymous;
                $dispcreatedDate = date('F d , Y', $surveyCreatedDate);

                if (strtotime(date("Y-m-d")) > $surveyExpiryDate) {
                    //?surveyId=23&errCode=-2
                    // header('Location: ../index.php?surveyId=-2');
                    header('Location: ../index.php?surveyId=' . $rsurveyId . '&errCode=-2');
                } else if ($surveyStatus == 'Active' && $rflag == 'Live') {
                    // header('Location: ../index.php?surveyId=-3');
                    header('Location: ../index.php?surveyId=' . $rsurveyId . '&errCode=-3');
                }
                $memberRegistered = getAllowedCountDiff($rsurveyId);
            } else {

                header('Location: ../index.php?surveyId=-1');
            }
        } catch (Exception $exc) {
            $exc->getMessage();
            $resultMessage = '<font color=red size=2px>' . $exc . '</font>';
        }

        function getOptions($questionId, $rsurveyId) {
            //$conn = new DbController();
            require '../config/ConnectionProvider.php';
            $count = 0;
            $optionData = '';
            //  echo 'eventId-->'.$webEventId;
            try {
                // $conn->connectToDatabase();
                // $conn->selectDatabase();
                // $Query = 'SELECT COUNT(Id) AS total FROM tblSurveyFormDetails WHERE s_id ='.$rsurveyId.' AND sf_id=' . $questionId;
                // $Query = "SELECT sfd_id,sfd_sequence,s_fieldlabel FROM tblSurveyFormDetails WHERE s_id =$rsurveyId AND sf_id=$questionId ORDER BY sfd_sequence ASC";
                $Query = "SELECT sfd_id,sfd_sequence,s_fieldlabel FROM tblSurveyFormDetails WHERE s_id =:rsurveyId AND sf_id=:questionId ORDER BY sfd_sequence ASC";
                // $result = mysql_query($Query) or die(mysql_error());
                $stmt = $conn->prepare($Query);
                $stmt->bindParam(':rsurveyId', $rsurveyId);
                $stmt->bindParam(':questionId', $questionId);

                $stmt->execute();
                $sno = 0;
                // while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
                $stmt->setFetchMode(PDO::FETCH_ASSOC);
                // while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
                while ($row = $stmt->fetch()) {
                    $sno++;
                    $optionData = $optionData . $row["s_fieldlabel"] . '@#$';
                }
                if ($sno > 0) {
                    $optionData = rtrim($optionData, "@#$");
                }
            } catch (Exception $exc) {

                $exc->getMessage();
                $resultMessage = '<font color=red size=2px>' . $exc . '</font>';
                header('Location: ../back-end-error.php?resultMessage=' . $resultMessage);
                // $conn->closeConnection(); // closing the connection
            }
            return $optionData;
        }

        function getAllowedCountDiff($rsurveyId) {
            // $conn = new DbController();
            require '../config/ConnectionProvider.php';
            $regEmails = '';
            try {
                //  $conn->connectToDatabase();
                //  $conn->selectDatabase();
                // $Query = "SELECT TIMESTAMPDIFF(DAY,CURRENT_TIMESTAMP,event_startdate) AS difference FROM tblEventLines WHERE event_id=" . $webEventId;
                //  $Query = "SELECT (SELECT MaximumSubmissions FROM tblSurvey WHERE Id=$rsurveyId) - (SELECT COUNT(s_id) FROM tblSurveyInfo WHERE s_id=$rsurveyId) AS diff";
                // $Query = "SELECT emailId FROM tblSurveyInfo WHERE s_id=$rsurveyId";
                $Query = "SELECT emailId FROM tblSurveyInfo WHERE s_id=:rsurveyId";
                $stmt = $conn->prepare($Query);
                $stmt->bindParam(':rsurveyId', $rsurveyId);


                $stmt->execute();
                // $result = mysql_query($Query);
                $stmt->setFetchMode(PDO::FETCH_ASSOC);
                //   while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
                while ($row = $stmt->fetch()) {
                    $regEmails = $regEmails . $row["emailId"] . ',';
                    // mysql_close();
                }
            } catch (Exception $exc) {

                $exc->getMessage();
                $resultMessage = '<font color=red size=2px>' . $exc . '</font>';
                header('Location: ../back-end-error.php?resultMessage=' . $resultMessage);
                // $conn->closeConnection(); // closing the connection
            }
            $regEmailsString = substr($regEmails, 0, -1);
            //   echo '$regEmails-->' . $regEmailsString;
            return $regEmailsString;
        }

        $questionnaireArray = array();
        $quesionIdArray = array();
        try {
            //$conn->connectToDatabase();
            // $conn->selectDatabase();
//   $selectQuery = "SELECT event_id,event_title,event_tagline,event_redirect,event_redirection_type,event_startdate,evetnt_enddate,event_time_from,event_time_to,location,event_type FROM tblEventLines WHERE STATUS = 'Active' AND evetnt_enddate >= CURDATE() ORDER BY event_startdate ASC";
            //   $selectQuery = "SELECT Id,Query,OptionType,Sequence,RequiredFlag,PlaceHolder,AllowDocuments,AllowPictures FROM tblSurveyForm WHERE SurveyId =" . $rsurveyId . "  AND CurrStatus = 'Active' ORDER BY Sequence ASC";
            $selectQuery = "SELECT Id,Query,OptionType,Sequence,RequiredFlag,PlaceHolder,AllowDocuments,AllowPictures FROM tblSurveyForm WHERE SurveyId =:rsurveyId   AND CurrStatus = 'Active' ORDER BY Sequence ASC";
            // echo '$selectQuery-->' . $selectQuery;
            //$result = mysql_query($selectQuery);
            $sno = 0;
//session_start();
            $stmt = $conn->prepare($selectQuery);
            $stmt->bindParam(':rsurveyId', $rsurveyId);


            $stmt->execute();
            // $result = mysql_query($Query);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            //   while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
            while ($row = $stmt->fetch()) {
                //   while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
                $queryId = $row["Id"];
                $query = $row["Query"];
                $optionType = $row["OptionType"];
                $sequence = $row["Sequence"];
                $requiredFlag = $row["RequiredFlag"];
                $placeHolder = $row["PlaceHolder"];
                $AllowDocuments = $row["AllowDocuments"];
                $AllowPictures = $row["AllowPictures"];


//                if($optionType == 'ANONYMOUS'){
//                    $anonymousFlag = true;
//                }
                //$questionnaireArray($queryId,$query,$optionType);
                $questionnaireArray[$sno][0] = $queryId;
                $questionnaireArray[$sno][1] = $query;
                $questionnaireArray[$sno][2] = $optionType;
                $questionnaireArray[$sno][3] = $requiredFlag;
                $questionnaireArray[$sno][4] = $placeHolder;
                $questionnaireArray[$sno][5] = $AllowDocuments;
                $questionnaireArray[$sno][6] = $AllowPictures;
                // echo "placehoder123==". $questionnaireArray[$sno][4];
                if ($sno === 0)
                    $quesionIdArray = $queryId . "#^$" . $optionType;
                else
                    $quesionIdArray = $quesionIdArray . "*@!" . $queryId . "#^$" . $optionType;

                $sno++;
            }

            //$_SESSION["questionnaireArray"] = $questionnaireArray;
        } catch (Exception $exc) {
            $exc->getMessage();
            $resultMessage = '<font color=red size=2px>' . $exc . '</font>';
//$conn->closeConnection(); // closing the connection
            //  mysql_close();
        }


        try {
            if (isset($_POST['btnSubmit'])) {
                $tempSurveyId = isset($_POST["frmSurveyId"]) ? $_POST["frmSurveyId"] : '-1';
                $tempFullName = isset($_POST["frmFullName"]) ? $_POST["frmFullName"] : '-1';
                $tempEmailId = isset($_POST["frmEmailId"]) ? $_POST["frmEmailId"] : '-1';
                $tempPhone = isset($_POST["frmPhone"]) ? $_POST["frmPhone"] : '-1';
                $tempEmpNo = isset($_POST["frmEmpNo"]) ? $_POST["frmEmpNo"] : '-1';
                $tempInfoId = isset($_POST["frmInfoId"]) ? $_POST["frmInfoId"] : '-1';
              
                //$tempFrmFlag = isset($_POST["frmFlag"]) ? $_POST["frmFlag"] : '-1';
                if ($surveyStatus == 'Published')
                    $tempFrmFlag = "Live";
                else
                    $tempFrmFlag = "stage";
//                if($tempEmpNo=='N/A'){
//                    $tempEmpNo="";
//                }else{
//                    $tempEmpNo=$tempEmpNo;
//                }
//                 echo '$tempSurveyId-->'.$tempSurveyId;
                //              echo '$tempFullName-->'.$tempFullName;
                //            echo '$tempEmailId-->'.$tempEmailId;
                //           echo '$tempPhone-->'.$tempPhone;
                //INSERT INTO tblSurveyInfo (s_id,emailId,userName,phone) VALUES(?,?,?,?)
                // if($tempInfoId=='0')
                // {
                //   $conn->connectToDatabase();
                //   $conn->selectDatabase();
                if ($tempInfoId == '0') {
                    //$sql = "INSERT INTO tblSurveyInfo (s_id,emailId,userName,phone,EmpNo,Flag) VALUES($tempSurveyId,'$tempEmailId','$tempFullName','$tempPhone','$tempEmpNo','$tempFrmFlag')";
                    $sql = "INSERT INTO tblSurveyInfo (s_id,emailId,userName,phone,EmpNo,Flag) VALUES(:tempSurveyId,:tempEmailId,:tempFullName,:tempPhone,:tempEmpNo,:tempFrmFlag)";
                } else {
                    //$sql = "DELETE FROM tblSurveyInfoDetails WHERE sinfo_id=".$tempInfoId;
                    $sql = "DELETE FROM tblSurveyInfoDetails WHERE sinfo_id=:tempInfoId";
                    // $sqlUpdate = "UPDATE tblSurveyInfo SET SubmittedDate=NOW() where sinfo_id=".$tempInfoId;
                    $sqlUpdate = "UPDATE tblSurveyInfo SET SubmittedDate=NOW() where sinfo_id=:tempInfoId";
                    $stmt = $conn->prepare($sqlUpdate);
                    $stmt->bindParam(':tempInfoId', $tempInfoId);
                    $stmt->execute();
                }
                //  mysql_query($sqlUpdate);
                $stmt = $conn->prepare($sql);
                if ($tempInfoId == '0') {
                    $stmt->bindParam(':tempSurveyId', $tempSurveyId);
                    $stmt->bindParam(':tempEmailId', $tempEmailId);
                    $stmt->bindParam(':tempFullName', $tempFullName);
                    $stmt->bindParam(':tempPhone', $tempPhone);
                    $stmt->bindParam(':tempEmpNo', $tempEmpNo);
                    $stmt->bindParam(':tempFrmFlag', $tempFrmFlag);
                } else {
                    $stmt->bindParam(':tempInfoId', $tempInfoId);
                }
                // echo '$sql-->'.$sql;
                //if (mysql_query($sql)) {
                if ($stmt->execute()) {
                    if ($tempInfoId == '0')
                    // $surveyInfoId = mysql_insert_id();
                        $surveyInfoId = $conn->lastInsertId();
                    else
                        $surveyInfoId = $tempInfoId;
                    $insertQuery = "INSERT INTO tblSurveyInfoDetails (sinfo_id,sfd_id,sfd_option) VALUES(:surveyInfoId,:tempQuestionId,:answer)";
                    $stmt = $conn->prepare($insertQuery);
                    for ($z = 0; $z < sizeof($questionnaireArray); $z++) {
                        $tempQuestionId = $questionnaireArray[$z][0];
                        $tempQuestionName = $questionnaireArray[$z][1];
                        $tempQuestionName = str_replace(' ', '_', $tempQuestionName);
                        $tempQuestionValue = isset($_POST["questionId" . $tempQuestionId]) ? $_POST["questionId" . $tempQuestionId] : '-1';
                        $tempQuestionType = $questionnaireArray[$z][2];
                        //== 'Checkbox'
                        if ($tempQuestionType == 'Checkbox') {
                            //$number = count($_POST["questionId" . $tempQuestionId]);
                            if ($tempQuestionValue == -1)
                                $number = 0;
                            else
                                $number = count($tempQuestionValue);
                            //  echo 'checked-->'.$number;
                            if ($number > 0) {
                                foreach ($_POST["questionId" . $tempQuestionId] as $checkvalue) {
                                    // $insertQuery = "INSERT INTO tblSurveyInfoDetails (sinfo_id,sfd_id,sfd_option) VALUES($surveyInfoId,$tempQuestionId,'$checkvalue')";
                                    // mysql_query($insertQuery);
                                    $stmt->bindParam(':surveyInfoId', $surveyInfoId);
                                    $stmt->bindParam(':tempQuestionId', $tempQuestionId);
                                    $stmt->bindParam(':answer', $checkvalue);
                                    $stmt->execute();
                                }
                            }
                        } else if ($tempQuestionType == 'Attachment') {
                            $tempIsAttachmentReplaced = isset($_POST["isAttachmentReplaced" . $tempQuestionId]) ? $_POST["isAttachmentReplaced" . $tempQuestionId] : '-1';
                            $fileref = $_FILES['fileToUpload' . $tempQuestionId];

                            $fileUpload = new FileUploadUtility();
                            $filname = '';
                            $rootPath = '';

                            if ($tempIsAttachmentReplaced == '1' && $_FILES["fileToUpload" . $tempQuestionId]["name"] != "") {
                                $per_Path = SURVEY_FORM_ATTACHMENT_LOCATION . date('Y') . '/' . date('m') . '/' . date("d") . '/' . $tempQuestionName . '/';
                                if (file_exists($per_Path)) {
                                    
                                } else {
                                    if (!mkdir($per_Path, 0777, true)) {
                                        die('Failed to create folders...');
                                    }
                                }

                                $filname = $fileref['name'];
                                $ext = pathinfo($filname, PATHINFO_EXTENSION);

                                $tempFullName = str_replace(' ', '_', $tempFullName);
                                $rootPath = $per_Path . $tempFullName . '.' . $ext;
                                // echo 'extension-->'.$ext;
                                $resultMessage = $fileUpload->fileMoveWithRename($fileref, $rootPath);
                                //  $insertQuery = "INSERT INTO tblSurveyInfoDetails (sinfo_id,sfd_id,sfd_option) VALUES($surveyInfoId,$tempQuestionId,'$rootPath')";
                                // mysql_query($insertQuery);

                                $stmt->bindParam(':surveyInfoId', $surveyInfoId);
                                $stmt->bindParam(':tempQuestionId', $tempQuestionId);
                                $stmt->bindParam(':answer', $rootPath);
                                $stmt->execute();
                            } else {
                                $rootPath = isset($_POST["attachmentPath" . $tempQuestionId]) ? $_POST["attachmentPath" . $tempQuestionId] : '';
                                if ($rootPath != "") {
                                    //   $insertQuery = "INSERT INTO tblSurveyInfoDetails (sinfo_id,sfd_id,sfd_option) VALUES($surveyInfoId,$tempQuestionId,'$rootPath')";
                                    // mysql_query($insertQuery);

                                    $stmt->bindParam(':surveyInfoId', $surveyInfoId);
                                    $stmt->bindParam(':tempQuestionId', $tempQuestionId);
                                    $stmt->bindParam(':answer', $rootPath);
                                    $stmt->execute();
                                }
                            }
                        } else {
                            if ($tempQuestionType == 'ANONYMOUS') {
                                //anonymously
                                $frmAnonymously = isset($_POST["anonymously"]) ? $_POST["anonymously"] : '0';
                                if ($frmAnonymously == '1') {
                                    $tempQuestionValue = 'Yes';
                                } else {
                                    $tempQuestionValue = 'No';
                                }
                            }
                            // $insertQuery = "INSERT INTO tblSurveyInfoDetails (sinfo_id,sfd_id,sfd_option) VALUES($surveyInfoId,$tempQuestionId,'$tempQuestionValue')";
                            // mysql_query($insertQuery);
                            $stmt->bindParam(':surveyInfoId', $surveyInfoId);
                            $stmt->bindParam(':tempQuestionId', $tempQuestionId);
                            $stmt->bindParam(':answer', $tempQuestionValue);
                            $stmt->execute();
                        }
                    }
                    header('Location: ../index.php?surveyId=' . $tempSurveyId);
                }
                //} // For new info if close
            }
        } catch (Exception $exc) {
        	//echo 'exe--'.$exc;
            $exc->getMessage();
            $resultMessage = '<font color=red size=2px>' . $exc . '</font>';
            //  $conn->closeConnection(); // closing the connection
            // mysql_close();
        }
        ?>


        <style>
            .overlay{
                background-color:rgba(0,0,0,0.5) !important;
            }
            .modal-dialog
            {
                overflow:hidden !important;

            }
            ul.breadcrumb > li > a, ul.breadcrumb > li .divider {
                color: #fff;
            }
            ul.breadcrumb > li.active {
                color: #fff;
            }
            ul.breadcrumb > li > a:hover {
                color: #fff;
            }
            body{
                overflow-x:hidden;
            }
            body > section {
                padding-top: 0px !important;}

            .tinted-image {
                background: 
                    /* top, transparent red */
                    linear-gradient(
                    rgba(0, 0, 0, 0.55), 
                    rgba(0, 0, 0, 0.55)
                    ),
                    /* your image */
                    url("../img/key.jpg");
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }
            .modal-dialog
            {
                overflow:hidden !important;

            }


            .section_bg{
                background: 
                    /* top, transparent red */
                    linear-gradient(
                    rgba(0, 0, 0, 0.55), 
                    rgba(0, 0, 0, 0.55)
                    ),
                    /* your image */
                    url("<?= AMAZON_URL ?>/images/banners/survey.png");
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
               /* background-position:0px 71px;*/
            }



        </style>


    </head><!--/head-->
    <?php include '../header.php'; ?>
    <script type="text/javascript">
        $('#myModal').modal({backdrop: 'static'}) 
        $(window).load(function(){
            
            var regEmailsString = document.getElementById("regEmails").value;
            var maxCount = document.getElementById("maxCount").value;
            var emails=regEmailsString.split(",");
            // alert(emails)
            // alert("emails.length-->"+emails.length)
            // alert("maxCount-->"+maxCount)
            if(maxCount<=emails.length&&emails!=''){
                $('#myModalForSurveyCount').modal('show');
            }else{
                $('#myModal1').modal('show');
            }
            
        });
        function doSubmit() {
            //alert("dgd---------------------->");
            var loginId=document.getElementById("loginId").value;
            var password=document.getElementById("password").value;
            // alert("dgd---------------------->");
            if(loginId.trim().length!=0 && password.trim().length!=0 ){
                checkSurveyLogin(loginId,password);
               
               
                //document.getElementById("frmEmailId").value
            }else if(loginId.trim().length==0 && password.trim().length==0){
                //document.getElementById("resultMessage").innerHTML="<font color='red'>Please enter details.</font>";
                displayErrorMessage("Please enter details.");
                //  alert("dgddddddaaaaaaaaa---------------------->");
            }else if(loginId.trim().length==0 && password.trim().length!=0){
                //document.getElementById("resultMessage").innerHTML="<font color='red'>Please enter details.</font>";
                displayErrorMessage("Please enter loginid.");
                //  alert("dgddddddaaaaaaaaa---------------------->");
            }else if(loginId.trim().length!=0 && password.trim().length==0){
                displayErrorMessage("Please enter password.");
            }
        }
        function doPreSubmit() {
            var fullName = document.getElementById("fullName").value;
            //  alert("fullName"+ document.getElementById("fullName").value)
            var emailId = document.getElementById("emailId").value;
            //  alert("emailId"+document.getElementById("emailId").value)
            var phone = document.getElementById("phone").value;
            //  alert("phone"+document.getElementById("phone").value)
            
            //  alert("submit---------------------->");
            if(fullName.trim().length!=0 && emailId.trim().length!=0 && phone.trim().length!=0){
                document.getElementById("frmFullName").value = fullName;
                document.getElementById("frmEmailId").value = emailId;
                document.getElementById("frmPhone").value = phone;
                
                
                //                alert('empNo-->'+empNo);
                //               document.getElementById("frmEmpNo").value = empNo;
                //                document.getElementsByName("frmEmpNo").value=empNo;
                //              document.getElementById("frmEmpNo").value = empNo;
                if(document.getElementById("isAllowDuplicates").value=='0'){
    
                    if( document.getElementById("regEmails").value.indexOf(emailId)>=0){
                        displayErrorMessage("Attention!! The Username or Email is already been registered");
                    }else {
                        $('#myModal1').modal('hide');
                    }
                }else {
                    $('#myModal1').modal('hide');
                }

            
               
                //  alert("submitafter---------------------->");
            }else {
                //document.getElementById("resultMessage").innerHTML="<font color='red'>Please fill all required details.</font>";
                displayErrorMessage("Please fill all required details.");
            }
            
        }
        function doPreviewSubmit() {
            // alert("do submit")
            $('#myModal2').modal('show');
      
        }
        
        function enableLoginEnter(e) {
            var keynum;
            var keychar;
            var numcheck;
    
            if(window.event) {
                keynum = e.keyCode;
            }
            else if(e.which) // Netscape/Firefox/Opera
            {
                keynum = e.which;
            }
            try{
                if(keynum==13){
                    doSubmit();
                    return false;
                }
            }catch(e){
                alert("Error"+e);
            }
        }
    </script>

    <body>

        <input type="hidden" name="quesionIdArray" id="quesionIdArray" value="<?= $quesionIdArray ?>"/>
        <input type="hidden" name="regEmails" id="regEmails" value="<?= $memberRegistered ?>"/>
        <input type="hidden" name="maxCount" id="maxCount" value="<?= $maximumSubmissions ?>"/>
        <input type="hidden" name="isAllowDuplicates" id="isAllowDuplicates" value="<?= $isAllowDuplicates ?>"/>
        <input type="hidden" name="surveyStatus" id="surveyStatus" value="<?= $surveyStatus ?>"/>

        <!-- Modal Start -->

        <!-- Survey Count modal start -->
        <div class="modal fade" id="myModalForSurveyCount"  role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true" data-backdrop="static">
            <div class="modal-dialog" style=" position: static;">
                <div class="modal-content">
                    <div class="modal-header">
                        <!-- <button type="button" class="close" data-dismiss="modal">×</button>-->
                        <h3 class="modal-title" id="memberModalLabel"><strong><?php echo $surveyTitle ?></strong> </h3>
                        <hr>
                    </div>
                    <div class="modal-body">
                        <p class="methodText"> <strong><?php echo $surveyTitle ?>:</strong> Sorry! The Registrations are closed.</p>

                    </div>
                    <div class="modal-footer">
                        <div class="row noMargin">
                            <div class="col-sm-4"></div>
                            <div class="col-sm-4"></div>
                            <!-- <div class="col-sm-4"> <button class="btn btn-primary btn-md" type="button" data-dismiss="modal">Continue</button></div>-->
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Survey Count modal end -->

        <div class="modal fade" id="myModal1"  role="dialog" data-backdrop="static" data-keyboard="false"   aria-labelledby="myModalLabel">
            <div class="modal-dialog" style=" position: static;" role="document">
<!--             <div class="modal-dialog" role="document"> -->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="display: none" id="loginModalClosId"><span aria-hidden="true">&times;</span></button>

                        <h3 class="modal-title" id="myModalLabel"><strong>
                                <?php if ($surveyType == 'E') { ?>
                                    Survey form Sign Up
                                <?php } else { ?>
                                    Employee Login
                                <?php } ?>
                            </strong></h3>
                        <hr class="noMargin">
                    </div>
                    <div class="modal-body noMargin">

                        <?php if ($surveyType == 'E') { ?>
                            <p class="methodText">Thank you for showing interest for filling <strong><?php echo $surveyTitle; ?></strong> Survey Form. Please enter your personal information for us to validate you before filling the form.</p>
                        <?php } else { ?>
                            <p class="methodText">Thank you for accessing <strong><?php echo $surveyTitle; ?></strong> Survey Form, As this is an internal survey for <strong>Miracle Employees</strong> only, and we will need to validate your credentials before allowing access for this.</p>
                        <?php } ?>
        <!-- <p class="methodText">Thank you for showing interest in our survey. This is an internal survey for <strong> Miracle Employees </strong> only, and we will need to validate your credentials before allowing access for this.</p> -->
                        <?php if ($surveyType == 'E') { ?>
                            <div class="row">
                                <div class="col-sm-5">


                                    <div class="form-group">
                                        <input type="text " tabindex="1" class="form-control" required="required" placeholder="Full Name" id="fullName" name="fullName" style="width: 206px">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" tabindex="2" class="form-control" required="required" placeholder="Email" id="emailId" name="emailId" style="width: 206px" onchange="return checkEmailForExternalSurvey(this);">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" tabindex="3" class="form-control" required="required" placeholder="Phone" id="phone" name="phone" style="width: 206px" onchange="return formatPhoneForExternalSurvey(this);" onblur="return validatenumber(this)">
                                    </div>
                                </div>
                            </div>
                        <?php } else if ($surveyType == 'I') { ?>

                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <input type="text " tabindex="4" class="form-control" required="required" placeholder="Username" id="loginId" name="loginId" onkeydown="return enableLoginEnter(event);">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" tabindex="5" class="form-control" required="required" placeholder="Password" id="password" name="password" style="width: 206px" onkeydown="return enableLoginEnter(event);">
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                        <?php if ($surveyType == 'E') { ?>
                            <div class="row">
                                <div class="col-sm-12"> 
                                    <div class="alert alert-danger" style="display:none" id="errorMsgDiv">
                                        <button type="button" class="close" onclick="closeErrorMsg();" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <strong><span id="resultMessage">Invalid details!!</span></strong> 
                                    </div>                        
                                </div>
                            </div>
                            <div class="row" style="margin-top:-10px;">
                                <hr> 
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="row">
                                        <span id="resultMessage"></span></div>
                                    <input type="button" value="Submit" tabindex="6" class="btn btn-primary col-sm-12" name="btnSubmit1" id="btnSubmit1" onclick="doPreSubmit();" style="margin-left:0px;">
                                </div>
                            </div>
                        <?php } else if ($surveyType == 'I') { ?>
                            <div class="row">
                                <div class="col-sm-12"> 
                                    <div class="alert alert-danger" style="display:none" id="errorMsgDiv">
                                        <button type="button" class="close" onclick="closeErrorMsg();" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <strong><span id="resultMessage">Invalid details!!</span></strong> 
                                    </div>                        
                                </div>
                            </div>
                            <div class="row" style="margin-top:-10px;">
                                <hr> 
                            </div>

                            <div class="row" >
                                <div class="col-sm-4" >

        <!--  <div class="row"><span id="loading" style="display: none"><font color="red" size="3px">Loading please wait...</font></span></div> -->
                  <!-- <input type="button" value="Login" tabindex="3" class="btn btn-primary col-sm-12" name="btnSubmitFotInternal" id="btnSubmitFotInternal" style="margin-left:0px;" /> -->

                                         <!--   <input type="button" value="Login" tabindex="7" class="btn btn-primary col-sm-12" name="btnSubmit1" id="btnSubmit1" onclick="doSubmit();" style="margin-left:0px;" /> -->
                                    <button type="button" class="btn btn-primary col-md-12" data-loading-text="<i class='fa fa-spinner fa-spin '></i> loading..." style="margin-left:5px;" name="btnSubmit1" id="btnSubmit1" onclick="doSubmit();" tabindex="3">Login</button>									

                                </div>
                            </div>

                        <?php } ?>






                    </div>
                </div>
            </div>
        </div> <!-- /.modal-dialog -->

        <!-- Modal End -->
        <!-- Modal Start -->
        <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
             <div class="modal-dialog" style=" position: static;">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title " id="memberModalLabel"><strong>Survey Form Preview</strong> </h3><hr class="noMargin">
                    </div>
                    <div class="modal-body">
                        <p class="methodText">You cannot submit this Survey Form. This is only for preview purpose.</p>

                        <div class="modal-footer">
                            <div class="row">
                                <div class="col-sm-4"> </div>
                                <div class="col-sm-4"></div>      
                                <div class="col-sm-4">
                                    <button type="submit" tabindex="3" class="btn btn-primary col-sm-12" data-dismiss="modal" name="btnSubmit4" id="btnSubmit4">
                                        Okay
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal End -->


        <section>
            <div class="overlay section_bg">
                <div class=" container">
                    
                    <div class="row">    
                        <div class="col-sm-7 text-left">  
                            <br><br>
                            <h1 class="micro "><font color="#fff"><strong><?php echo $surveyTitle; ?></span></strong></font></h1>

                        </div>
                        <div class="col-sm-5 text-right">
                            <br><br>
                            <ul class="breadcrumb pull-right">
                                <li><a href="../../">Home</a></li>
                                <!-- Breadcrumb div starts here --> 
                                <li class="active">Survey Form</li>
                                <!-- Breadcrumb div Ends here --> 
                            </ul>
                        </div>
                    </div><br>
                </div>
            </div>

        </section>
        <section class="container">
            <br>
            <!--            <br>
                        <br>
            
                        <div class="row">
                            <div class="col-sm-7 text-left">
                                <h1 class="heavy"> Survey Form Title Goes Here 
                                     Miracle City Employee Bus Interest Form 
            <?php echo $surveyTitle; ?>
                                </h1>
                            </div>
                            <div class="col-sm-5 text-right">
                                <ul class="breadcrumb pull-right">
                                    <li>
                                        <a href="../">Home</a>
                                    </li>
                                    <li class="active">Survey Form
                                    </li>
                                </ul>
                            </div>
                        </div>-->
            <!--            <hr class="noMarginTop">-->


            <div class="row">
                <div class="col-sm-5">
                    <p class="greyText heavy">
                        <!-- Created on July 21st, 2015 -->
                        Created on <?php echo $dispcreatedDate; ?>

                    </p><!-- Created on <Creation-Date>-->
                    <div class="row noMarginTop noMarginBottom">
                        <div class="col-sm-5 noMarginBottom"><hr class="noMargin"></div>
                        <div class="col-sm-7"></div>
                    </div>
                    <!-- Custom Text entered by form creator -->
                 <!--   <p class="methodText">We are looking to find out if anybody is interested in boarding daily up-and-down buses to-and-from Miracle City. Anybody who is interested in this bus service, please fill in the adjacent form so that we can make a decision based on the data. </p>
                    <p class="methodText">We are looking to find out if anybody is interested in boarding daily up-and-down buses to-and-from Miracle City. Anybody who is interested in this bus service, please fill in the adjacent form so that we can make a decision based on the data. </p>
                    -->
                    <p class="methodText">
                        <?php echo $surveyDescription; ?>

                    </p>
                    <!-- Disclaimer text common for all Surveys -->
                    <p class="greyText methodText">All form data entered within the above survey form is stored in an internal secure Miracle Data Store and any distribution of this data externally will be considered illegal. If you would like to contact support regarding the survey form please contact us at hubble@miraclesoft.com (or) marketing@miraclesoft.com</p>
                    <p class="greyText"><i>
                            <!-- Created by clokam -->
                            Created by <?php echo $surveyCreatedBy; ?>

                        </i></p><!-- Created by <Creator Hubble ID> -->
                </div>


                <div class="col-sm-7">
                    <!-- Alert msg -->
                    <div class="row" id="attachmentErrorMsgDiv" style="display:none">
                        <div class="col-sm-12"> 
                            <div class="alert alert-danger"  >
                                <button type="button" class="close" onclick="closeAttachmentErrorMsg();" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <strong><span id="attachmentMessage"></span></strong> 
                            </div>                        
                        </div>
                    </div>
                    <!-- Alert msg -->
                    <form action="<?php $_PHP_SELF ?>" enctype="multipart/form-data" id="myForm" method="post" name="myForm">
                        <input type="hidden" id="frmSurveyId" name="frmSurveyId" value="<?= $rsurveyId ?>"/>
                        <input type="hidden" id="frmFlag" name="frmFlag" value="<?= $rflag ?>"/>
                        <input type="hidden" id="frmSurveyType" name="frmSurveyType" value="<?= $surveyType ?>"/>
                        <input type="hidden" id="frmIsAnonymous" name="frmIsAnonymous" value="<?= $surveyIsAnonymous ?>"/>
                        <input type="hidden" id="frmInfoId" name="frmInfoId" value="0"/>

<!-- <input type="hidden" id="frmFullName" name="frmFullName" />
<input type="hidden" id="frmEmailId" name="frmEmailId" />
<input type="hidden" id="frmPhone" name="frmPhone" /> -->

                        <?php if ($surveyIsAnonymous == '1') { ?>
                            <div class="row" >
                                <div class="col-sm-7"><strong>Do you want to post anonymously? </strong>    </div>
                                <div class="btn-group btn-toggle col-sm-5"> 
                                    <!-- <button class="btn btn-xs btn-default">YES</button>
                                     <button class="btn btn-xs btn-primary active">NO</button> -->
                                    <button class="btn btn-xs btn-default" onclick="return getValue('Yes')" id="yes" type="button">YES</button>
                                    <button class="btn btn-xs btn-primary active" onclick="return getValue('No')" id="no" type="button">NO</button>

                                    <input type="hidden" name="anonymously" id="anonymously" value="0"/>
                                </div></div><br>

                        <?php } ?>
                        <input type="hidden" name="tempFrmFullName" id="tempFrmFullName" />
                        <input type="hidden" name="tempFrmEmailId" id="tempFrmEmailId" />
                        <input type="hidden" name="tempFrmPhone" id="tempFrmPhone" />
                        <input type="hidden" name="tempFrmEmpNo" id="tempFrmEmpNo" />
                        <div class="row" id="rowId">
                            <div class="col-sm-6">
                                <p class="greyText heavy" id="fullName">Full name</p>
                                <div class="form-group">
                                    <input class="form-control" id="frmFullName" name="frmFullName" onchange="fieldLengthValidator(this);" placeholder="Full Name" required tabindex="8" type="text" readonly="true"/>
                                </div>
                            </div>

                            <!--                            <div class="col-sm-6">
                                                            <p class="greyText heavy">Eno</p>
                                                            <div class="form-group">
                                                                <input class="form-control" id="empNo" name="empNo" onchange="fieldLengthValidator(this);" placeholder="Emp No" required tabindex="8" type="text" readonly="true"/>
                                                            </div>
                                                        </div>-->


                            <div class="col-sm-6">
                                <p class="greyText heavy" id="email">Email</p>
                                <div class="form-group">
                                    <input class="form-control" id="frmEmailId" name="frmEmailId" onchange="fieldLengthValidator(this);" placeholder="Email " required tabindex="9" type="text" readonly="true"/>
                                </div>
                            </div>
                        </div>
                        <?php if ($surveyType == 'E') { ?>
                            <div class="row noMarginTop">
                                <div class="col-sm-6">
                                    <p class="greyText heavy">Phone</p>
                                    <div class="form-group">
                                        <input class="form-control" id="frmPhone" name="frmPhone" onchange="fieldLengthValidator(this);" placeholder="Phone" required tabindex="10" type="text" readonly="true"/> 
                                    </div>
                                </div>
                            <?php } else { ?>
                                <div class="row noMarginTop" id="noMarginId">
                                    <div class="col-sm-6">
                                        <p class="greyText heavy" id="phone">Phone</p>
                                        <div class="form-group">
                                            <input class="form-control" id="frmPhone" name="frmPhone" onchange="fieldLengthValidator(this);" placeholder="Phone" required tabindex="10" type="text" readonly="true"/> 
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="greyText heavy" id="employeeId">Employee Id</p>
                                        <div class="form-group">
                                            <input class="form-control" id="frmEmpNo" name="frmEmpNo" onchange="fieldLengthValidator(this);" placeholder="EmpNo" required tabindex="11" type="text" readonly="true"/> 
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            <!-- <div class="col-sm-6">
                            </div>
                        </div> -->
                            <!--  <div class="row noMarginTop">
                                 <div class="col-sm-6">
                                     <p class="greyText heavy">Please enter your full name</p>
                                     <div class="form-group">
                                         <input type="checkbox" name="Sex" value="Male" unchecked>&nbsp;&nbsp;Male  &nbsp;&nbsp; &nbsp;&nbsp;<input type="checkbox" name="Sex" value="Female" >&nbsp;&nbsp;Female &nbsp;&nbsp;<input type="checkbox" name="Sex" value="Other" >&nbsp;&nbsp;Other
                                     </div>
                                 </div>
                                 <div class="col-sm-6">
                                     <p class="greyText heavy">Please enter your full name</p>
                                     <div class="form-group">
                                         <input  type="radio" name="Sex" value="Male" unchecked>&nbsp;&nbsp;Male  &nbsp;&nbsp; &nbsp;&nbsp;<input type="radio" name="Sex" value="Female" >&nbsp;&nbsp;Female &nbsp;&nbsp;<input type="radio" name="Sex" value="Other" >&nbsp;&nbsp;Other
                                     </div>
                                 </div>
                             </div>
                             <div class="row noMarginTop">
                                 <div class="col-sm-12">
                                     <p class="greyText heavy">Please enter your full name</p>
                                     <div class="form-group">
                                         <input type="checkbox" name="Sex" value="Male" unchecked>&nbsp;&nbsp;Male  &nbsp;&nbsp; &nbsp;&nbsp;<input type="checkbox" name="Sex" value="Female" >&nbsp;&nbsp;Female &nbsp;&nbsp;<input type="checkbox" name="Sex" value="Other" >&nbsp;&nbsp;Other
                                         &nbsp;&nbsp;&nbsp;&nbsp;<input  type="checkbox" name="Sex" value="Male" unchecked>&nbsp;&nbsp;Male  &nbsp;&nbsp; &nbsp;&nbsp;<input type="checkbox" name="Sex" value="Female" >&nbsp;&nbsp;Female &nbsp;&nbsp;<input type="checkbox" name="Sex" value="Other" >&nbsp;&nbsp;Other                            
                                     </div>
                                 </div>
                             </div>
                             <div class="row noMarginTop">
                                 <div class="col-sm-12">
                                     <p class="greyText heavy">Please enter your full name</p>
                                     <div class="form-group">
                                         <input type="radio" name="Sex" value="Male" unchecked>&nbsp;&nbsp;Male  &nbsp;&nbsp; &nbsp;&nbsp;<input type="radio" name="Sex" value="Female" >&nbsp;&nbsp;Female &nbsp;&nbsp;<input type="radio" name="Sex" value="Other" unchecked >&nbsp;&nbsp;Other
                                         &nbsp;&nbsp;&nbsp;&nbsp;<input  type="radio" name="Sex" value="Male" unchecked>&nbsp;&nbsp;Male  &nbsp;&nbsp; &nbsp;&nbsp;<input type="radio" name="Sex" value="Female" >&nbsp;&nbsp;Female &nbsp;&nbsp;<input type="radio" name="Sex" value="Other" >&nbsp;&nbsp;Other                            
                                     </div>
                                 </div>
                             </div>
     
                             <div class="row noMarginTop">
                                 <div class="col-sm-12">
                                     <p class="greyText heavy">Please enter your full name</p>
                                     <div class="form-group">
                                         <textarea rows="4"  class="form-control"  placeholdercsholder="Input Text">
                                         </textarea>    
                                     </div>
                                 </div>
                             </div>
     
                             <div class="row noMarginTop">
     
                                 <div class="col-sm-12">
                                     <link href='http://fonts.googleapis.com/css?family=Quantico' rel='stylesheet' type='text/css'>
                                     <div class="container">
                                         <div class="slider">
                                             <input type = "range" min="0" max="100" style="width:630px;" onchange="rangevalue.value=value"/>
                                             <output id="rangevalue">50</output>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-sm-6"></div>
                             </div>
                            -->

                            <?php
//------------------------------------
//------------------------------------
                            try {
                                $isSpaceAvailable = true;
                                if ($surveyType == 'E') {
                                    $isSpaceAvailable = true;
                                } else {
                                    $isSpaceAvailable = false;
                                }
                                $tabIndex = 11;
                                for ($x = 0; $x < sizeof($questionnaireArray); $x++) {
                                    // echo 'Id-->' . $questionnaireArray[$x][0] . '--Query-->' . $questionnaireArray[$x][1] . '--OptionType-->' . $questionnaireArray[$x][2] . '<br>';
//echo "Type-->".$questionnaireArray[$x][2];
                                    if ($questionnaireArray[$x][2] == 'Textbox') {
                                        if ($isSpaceAvailable) {
                                            ?>
                                            <div class="col-sm-6">
                                                <p class="greyText heavy"><?php echo $questionnaireArray[$x][1]; ?></p>
                                                <div class="form-group">
                                                    <?php if ($questionnaireArray[$x][3] == 1) { ?>
                                                        <input type="text" required class="form-control" id="questionId<?= $questionnaireArray[$x][0] ?>" name="questionId<?= $questionnaireArray[$x][0] ?>"  placeholder="<?php
                                    if ($questionnaireArray[$x][4] != "") {
                                        echo $questionnaireArray[$x][4];
                                    } else {
                                        echo $questionnaireArray[$x][1];
                                    }
                                                        ?>" tabindex="<?= $tabIndex ?>"/>
                                                    <?php } else { ?>
                                                        <input type="text" class="form-control" id="questionId<?= $questionnaireArray[$x][0] ?>" name="questionId<?= $questionnaireArray[$x][0] ?>"  placeholder="<?php
                                    if ($questionnaireArray[$x][4] != "") {
                                        echo $questionnaireArray[$x][4];
                                    } else {
                                        echo $questionnaireArray[$x][1];
                                    }
                                    ?>" tabindex="<?= $tabIndex ?>"/>
                <?php } ?>
                                                </div>
                                            </div>
                                            <!-- row close start-->
                                        </div>
                                        <!-- row close end -->
                <?php
                $isSpaceAvailable = false;
            } else {
                ?>



                                        <div class="row">
                                            <div class="col-sm-6">
                                                <p class="greyText heavy"><?php echo $questionnaireArray[$x][1]; ?></p>
                                                <div class="form-group">
                                                    <?php if ($questionnaireArray[$x][3] == 1) { ?>
                                                        <input type="text" required class="form-control" id="questionId<?= $questionnaireArray[$x][0] ?>" name="questionId<?= $questionnaireArray[$x][0] ?>"  placeholder="<?php
                                           if ($questionnaireArray[$x][4] != "") {
                                               echo $questionnaireArray[$x][4];
                                           } else {
                                               echo $questionnaireArray[$x][1];
                                           }
                                                        ?>" tabindex="<?= $tabIndex ?>"/>

                                                           <?php } else { ?>
                                                        <input type="text" class="form-control" id="questionId<?= $questionnaireArray[$x][0] ?>" name="questionId<?= $questionnaireArray[$x][0] ?>"  placeholder="<?php
                                           if ($questionnaireArray[$x][4] != "") {
                                               echo $questionnaireArray[$x][4];
                                           } else {
                                               echo $questionnaireArray[$x][1];
                                           }
                                           ?>" tabindex="<?= $tabIndex ?>"/>
                                            <?php } ?>
                                                </div>
                                            </div>





                <?php
                $isSpaceAvailable = true;
            }
        } else if ($questionnaireArray[$x][2] == 'TextArea') {
            if ($isSpaceAvailable) {
                ?> 
                                            <!-- row second selement start-->                        
                                            <div class="col-sm-6"></div> 
                                            <!-- row second selement end-->          
                                            <!-- row close start-->
                                        </div>
                                        <!-- row close end -->
                                                    <?php
                                                    $isSpaceAvailable = false;
                                                }
                                                ?>
                                    <div class="row noMarginTop">
                                        <div class="col-sm-12">
                                            <p class="greyText heavy"><?php echo $questionnaireArray[$x][1]; ?></p>
                                            <div class="form-group">
                                                <?php if ($questionnaireArray[$x][3] == 1) { ?>
                                                    <textarea rows="4" name="questionId<?= $questionnaireArray[$x][0] ?>" id="questionId<?= $questionnaireArray[$x][0] ?>" class="form-control"  placeholder="<?php
                                    if ($questionnaireArray[$x][4] != "") {
                                        echo $questionnaireArray[$x][4];
                                    } else {
                                        echo $questionnaireArray[$x][1];
                                    }
                                    ?>" required tabindex="<?= $tabIndex ?>"></textarea>  
                                    <?php } else { ?>
                                                    <textarea rows="4" name="questionId<?= $questionnaireArray[$x][0] ?>" id="questionId<?= $questionnaireArray[$x][0] ?>" class="form-control"  placeholder="<?php
                        if ($questionnaireArray[$x][4] != "") {
                            echo $questionnaireArray[$x][4];
                        } else {
                            echo $questionnaireArray[$x][1];
                        }
                                        ?>" tabindex="<?= $tabIndex ?>"></textarea>  
                                    <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    //getOptionCount
                                } else if ($questionnaireArray[$x][2] == 'Checkbox') {

                                    $optionContent = getOptions($questionnaireArray[$x][0], $rsurveyId);

                                    $myOptionArray = explode('@#$', $optionContent);



                                    if ($isSpaceAvailable) {

                                        //  if (sizeof($myOptionArray) > 3) {
                                        ?>


                                        <?php if (sizeof($myOptionArray) > 3) { ?>
                                            <!-- row second selement start-->                        
                                            <div class="col-sm-6"></div> 
                                            <!-- row second selement end-->          
                                            <!-- row close start-->
                                    </div>
                                    <!-- row close end -->
                                    <div class="row noMarginTop">
                                        <div class="col-sm-12">
                                                    <?php
                                                    $isSpaceAvailable = false;
                                                } else {
                                                    ?>
                                            <div class="col-sm-6">
                                            <?php } ?>

                                            <p class="greyText heavy"><?php echo $questionnaireArray[$x][1] ?></p>
                                            <div class="form-group">
                                    <?php
                                    for ($y = 0; $y < sizeof($myOptionArray); $y++) {
                                        ?>
                                                    <input type="checkbox" name="questionId<?= $questionnaireArray[$x][0] ?>[]" value="<?= $myOptionArray[$y] ?>" tabindex="<?= $tabIndex ?>"/>&nbsp;&nbsp;<?php echo $myOptionArray[$y]; ?>  &nbsp;&nbsp; &nbsp;&nbsp;
                                <?php
                                $tabIndex++;
                            }
                            ?>
                                            </div>
                                <?php if (sizeof($myOptionArray) > 3) { ?>
                                            </div>
                                        </div>
                                        <?php } else { ?>
                                    </div>
                                </div><!-- row close -->
                                                <?php
                                                $isSpaceAvailable = false;
                                            }
                                        } else {
                                            ?>
                            <div class="row noMarginTop">
                                            <?php if (sizeof($myOptionArray) > 3) { ?>
                                    <div class="col-sm-12">
                                            <?php } else { ?>
                                        <div class="col-sm-6">
                                        <?php } ?>
                                        <p class="greyText heavy"><?php echo $questionnaireArray[$x][1] ?></p>
                                        <div class="form-group">
                                <?php
                                for ($y = 0; $y < sizeof($myOptionArray); $y++) {
                                    ?>
                                                <input type="checkbox" name="questionId<?= $questionnaireArray[$x][0] ?>[]" value="<?= $myOptionArray[$y] ?>" tabindex="<?= $tabIndex ?>"/>&nbsp;&nbsp;<?php echo $myOptionArray[$y]; ?>  &nbsp;&nbsp; &nbsp;&nbsp;
                                <?php
                                $tabIndex++;
                            }
                            ?>
                                        </div>
                            <?php if (sizeof($myOptionArray) > 3) { ?>
                                        </div>
                                    </div>
                            <?php } else {
                                ?></div><?php
                    $isSpaceAvailable = true;
                }
                ?>


                <?php
            }
        } else if ($questionnaireArray[$x][2] == 'RadioButton') {
            $optionContent = getOptions($questionnaireArray[$x][0], $rsurveyId);
            $myOptionArray = explode('@#$', $optionContent);

            if ($isSpaceAvailable) {
                //  if($isSpaceAvailable==true && sizeof($myOptionArray)<=3) {
                ?>

                                <?php if (sizeof($myOptionArray) > 3) { ?>
                                <!-- row second selement start-->                        
                                <div class="col-sm-6"></div> 
                                <!-- row second selement end-->          
                                <!-- row close start-->
                            </div>
                            <!-- row close end -->
                            <div class="row noMarginTop">
                                <div class="col-sm-12">
                                            <?php
                                            $isSpaceAvailable = false;
                                        } else {
                                            ?>
                                    <div class="col-sm-6">
                                        <?php } ?>
                                    <p class="greyText heavy"><?php echo $questionnaireArray[$x][1] ?></p>
                                    <div class="form-group">
                                        <?php
                                        for ($y = 0; $y < sizeof($myOptionArray); $y++) {

                                            if ($questionnaireArray[$x][3] == 1) {
                                                ?>
                                                <input type="radio" name="questionId<?= $questionnaireArray[$x][0] ?>" value="<?= $myOptionArray[$y] ?>" required tabindex="<?= $tabIndex ?>"/>&nbsp;&nbsp;<?php echo $myOptionArray[$y]; ?>  &nbsp;&nbsp; &nbsp;&nbsp;
                                    <?php
                                } else {
                                    ?>
                                                <input type="radio" name="questionId<?= $questionnaireArray[$x][0] ?>" value="<?= $myOptionArray[$y] ?>" tabindex="<?= $tabIndex ?>"/>&nbsp;&nbsp;<?php echo $myOptionArray[$y]; ?>  &nbsp;&nbsp; &nbsp;&nbsp;
                            <?php
                        }$tabIndex++;
                    }
                    ?>
                                    </div>

                <?php if (sizeof($myOptionArray) > 3) { ?>
                                    </div>
                                </div>
                            <?php
                            $isSpaceAvailable = false;
                        } else {
                            ?>
                            </div>     </div>          <!-- row close -->
                    <?php
                    $isSpaceAvailable = false;
                }
            } else {
                ?>                    


                    <div class="row noMarginTop">
                                    <?php if (sizeof($myOptionArray) > 3) { ?>
                            <div class="col-sm-12">
                                    <?php } else { ?>
                                <div class="col-sm-6">
                                    <?php } ?>
                                <p class="greyText heavy"><?php echo $questionnaireArray[$x][1] ?></p>
                                <div class="form-group">
                                    <?php
                                    for ($y = 0; $y < sizeof($myOptionArray); $y++) {

                                        if ($questionnaireArray[$x][3] == 1) {
                                            ?>
                                            <input type="radio" name="questionId<?= $questionnaireArray[$x][0] ?>" value="<?= $myOptionArray[$y] ?>" required tabindex="<?= $tabIndex ?>"/>&nbsp;&nbsp;<?php echo $myOptionArray[$y]; ?>  &nbsp;&nbsp; &nbsp;&nbsp;
                                <?php
                            } else {
                                ?>
                                            <input type="radio" name="questionId<?= $questionnaireArray[$x][0] ?>" value="<?= $myOptionArray[$y] ?>" tabindex="<?= $tabIndex ?>"/>&nbsp;&nbsp;<?php echo $myOptionArray[$y]; ?>  &nbsp;&nbsp; &nbsp;&nbsp;
                                <?php
                            }
                            $tabIndex++;
                        }
                        ?>
                                </div>
                    <?php if (sizeof($myOptionArray) > 3) { ?>
                                </div>
                            </div>
                    <?php
                    $isSpaceAvailable = false;
                } else {
                    $isSpaceAvailable = true;
                    ?></div><?php
                }
                ?>
                <?php
            }
            //}
        } else if ($questionnaireArray[$x][2] == 'Slider') {
            if ($isSpaceAvailable) {
                ?>
                    <div class="col-sm-6">
                        <p class="greyText heavy"><?php echo $questionnaireArray[$x][1] ?></p>

                        <div class="container">
                            <div class="slider">
                                <b>0</b><input type = "range" min="0" max="100" onchange="setRangeValue(this,'rangevalue<?= $questionnaireArray[$x][0] ?>');" name="questionId<?= $questionnaireArray[$x][0] ?>" id="questionId<?= $questionnaireArray[$x][0] ?>" tabindex="<?= $tabIndex ?>"/><b>100</b>
                                <center> <output id="rangevalue<?= $questionnaireArray[$x][0] ?>">50</output></center>
                            </div>
                        </div>
                    </div>
                </div><!-- row close -->
                <?php
                $isSpaceAvailable = false;
            } else {
                ?>
                <div class="row noMarginTop">

                    <div class="col-sm-6">
                        <p class="greyText heavy"><?php echo $questionnaireArray[$x][1] ?></p>

                        <div class="container">
                            <div class="slider">
                                <b>0</b> <input type = "range" min="0" max="100" onchange="setRangeValue(this,'rangevalue<?= $questionnaireArray[$x][0] ?>');" name="questionId<?= $questionnaireArray[$x][0] ?>" id="questionId<?= $questionnaireArray[$x][0] ?>" tabindex="<?= $tabIndex ?>"/><b>100</b>
                                <center> <output id="rangevalue<?= $questionnaireArray[$x][0] ?>" name="rangevalue<?= $questionnaireArray[$x][0] ?>">50</output></center>
                            </div>
                        </div>
                    </div>

                                    <?php
                                    $isSpaceAvailable = true;
                                }
                            } else if ($questionnaireArray[$x][2] == 'Attachment') {


                                if ($isSpaceAvailable) {
                                    ?><div class="col-sm-6">
                        <input type="hidden" name="attachmentPath<?= $questionnaireArray[$x][0] ?>" id="attachmentPath<?= $questionnaireArray[$x][0] ?>"/>
                        <input type="hidden" name="isAttachmentReplaced<?= $questionnaireArray[$x][0] ?>" id="isAttachmentReplaced<?= $questionnaireArray[$x][0] ?>" value="0"/>
                        <p class="greyText heavy"><?php echo $questionnaireArray[$x][1] ?><span id="attachmentDownload<?= $questionnaireArray[$x][0] ?>"></span></p>
                        <div class="input-group">
                            <span class="input-group-btn">
                                <span class="btn btn-danger btn-file">
                                   <?php if ($questionnaireArray[$x][3] == 1) { ?>
                                        <span id="attachmentLabel<?= $questionnaireArray[$x][0] ?>">Attachment</span><input class="form-control" tabindex="<?= $tabIndex ?>" onchange="putSurveyFileName('<?= $questionnaireArray[$x][0] ?>','<?= $questionnaireArray[$x][5] ?>','<?= $questionnaireArray[$x][6] ?>')" multiple="" name="fileToUpload<?= $questionnaireArray[$x][0] ?>" id="fileToUpload<?= $questionnaireArray[$x][0] ?>"  type="file" required>
                            <?php } else { ?>
                                        <span id="attachmentLabel<?= $questionnaireArray[$x][0] ?>">Attachment</span><input class="form-control" tabindex="<?= $tabIndex ?>" onchange="putSurveyFileName('<?= $questionnaireArray[$x][0] ?>','<?= $questionnaireArray[$x][5] ?>','<?= $questionnaireArray[$x][6] ?>')" multiple="" name="fileToUpload<?= $questionnaireArray[$x][0] ?>" id="fileToUpload<?= $questionnaireArray[$x][0] ?>"  type="file">
                            <?php } ?>
                                </span>
                            </span>
                <?php if ($questionnaireArray[$x][3] == 1) { ?>
                                <input class="form-control col-sm-4" id="fileDestination<?= $questionnaireArray[$x][0] ?>" name="fileDestination<?= $questionnaireArray[$x][0] ?>"  placeholder="<?php
                    if ($questionnaireArray[$x][4] != "") {
                        echo $questionnaireArray[$x][4];
                    } else {
                        echo $questionnaireArray[$x][1];
                    }
                    ?>" readonly="" type="text" required/>
                <?php } else { ?>
                                <input class="form-control col-sm-4" id="fileDestination<?= $questionnaireArray[$x][0] ?>" name="fileDestination<?= $questionnaireArray[$x][0] ?>"  placeholder="<?php
                    if ($questionnaireArray[$x][4] != "") {
                        echo $questionnaireArray[$x][4];
                    } else {
                        echo $questionnaireArray[$x][1];
                    }
                    ?>" readonly="" type="text" />
                        <?php } ?>
                        </div>

                    </div>

                </div><!-- row close 111-->



                                    <?php
                                    $isSpaceAvailable = false;
                                } else {
                                    ?>
                <div class="row noMarginTop">

                    <div class="col-sm-6">
                        <input type="hidden" name="attachmentPath<?= $questionnaireArray[$x][0] ?>" id="attachmentPath<?= $questionnaireArray[$x][0] ?>"/>
                        <input type="hidden" name="isAttachmentReplaced<?= $questionnaireArray[$x][0] ?>" id="isAttachmentReplaced<?= $questionnaireArray[$x][0] ?>" value="0"/>
                                   <?php $isSpaceAvailable = true;
                                   ?>
                        <p class="greyText heavy"><?php echo $questionnaireArray[$x][1] ?><span id="attachmentDownload<?= $questionnaireArray[$x][0] ?>"></span></p>
                        <div class="input-group">
                            <span class="input-group-btn">
                                <span class="btn btn-danger btn-file">
                                   <?php if ($questionnaireArray[$x][3] == 1) { ?>
                                        <span id="attachmentLabel<?= $questionnaireArray[$x][0] ?>">Attachment</span><input class="form-control" tabindex="<?= $tabIndex ?>" onchange="putSurveyFileName('<?= $questionnaireArray[$x][0] ?>','<?= $questionnaireArray[$x][5] ?>','<?= $questionnaireArray[$x][6] ?>')" multiple="" name="fileToUpload<?= $questionnaireArray[$x][0] ?>" id="fileToUpload<?= $questionnaireArray[$x][0] ?>"  type="file" required>
                <?php } else { ?>
                                        <span id="attachmentLabel<?= $questionnaireArray[$x][0] ?>">Attachment</span><input class="form-control" tabindex="<?= $tabIndex ?>" onchange="putSurveyFileName('<?= $questionnaireArray[$x][0] ?>','<?= $questionnaireArray[$x][5] ?>','<?= $questionnaireArray[$x][6] ?>')" multiple="" name="fileToUpload<?= $questionnaireArray[$x][0] ?>" id="fileToUpload<?= $questionnaireArray[$x][0] ?>"  type="file">
                <?php } ?>
                                </span>
                            </span>
                    <?php if ($questionnaireArray[$x][3] == 1) { ?>
                                <input class="form-control col-sm-4" id="fileDestination<?= $questionnaireArray[$x][0] ?>" name="fileDestination<?= $questionnaireArray[$x][0] ?>"  placeholder="<?php
                    if ($questionnaireArray[$x][4] != "") {
                        echo $questionnaireArray[$x][4];
                    } else {
                        echo $questionnaireArray[$x][1];
                    }
                    ?>" readonly="" type="text" required/>
                        <?php } else { ?>
                                <input class="form-control col-sm-4" id="fileDestination<?= $questionnaireArray[$x][0] ?>" name="fileDestination<?= $questionnaireArray[$x][0] ?>"  placeholder="<?php
                    if ($questionnaireArray[$x][4] != "") {
                        echo $questionnaireArray[$x][4];
                    } else {
                        echo $questionnaireArray[$x][1];
                    }
                            ?>" readonly="" type="text" />
                                <?php } ?>
                        </div>

                    </div>

                <?php
            }
        } else if ($questionnaireArray[$x][2] == 'DropDown') {
            $optionContent = getOptions($questionnaireArray[$x][0], $rsurveyId);
            $myOptionArray = explode(',', $optionContent);
            if ($isSpaceAvailable) {
                ?>
                    <div class="col-sm-6">
                        <p class="greyText heavy"><?php echo $questionnaireArray[$x][1] ?></p>
                <?php if ($questionnaireArray[$x][3] == 1) { ?>
                            <select required class="form-control" name="questionId<?= $questionnaireArray[$x][0] ?>" id="questionId<?= $questionnaireArray[$x][0] ?>">
                <?php } else { ?>
                                <select class="form-control" name="questionId<?= $questionnaireArray[$x][0] ?>" id="questionId<?= $questionnaireArray[$x][0] ?>">
                <?php } ?>
                                <option value=""  selected>Select option</option>
                        <?php
                        for ($y = 0; $y < sizeof($myOptionArray); $y++) {
                            ?>
                                    <option  value="<?= $myOptionArray[$y] ?>"><?php echo $myOptionArray[$y]; ?></option>
                                <?php } ?>
                            </select>

                    </div>

                    <!-- row close start-->
                </div>
                <!-- row close end -->
                <?php
                $isSpaceAvailable = false;
            } else {
                ?>



                <div class="row">
                    <div class="col-sm-6">
                        <p class="greyText heavy"><?php echo $questionnaireArray[$x][1] ?></p>
                    <?php if ($questionnaireArray[$x][3] == 1) { ?>
                            <select required class="form-control" name="questionId<?= $questionnaireArray[$x][0] ?>" id="questionId<?= $questionnaireArray[$x][0] ?>">
                    <?php } else { ?>
                                <select class="form-control" name="questionId<?= $questionnaireArray[$x][0] ?>" id="questionId<?= $questionnaireArray[$x][0] ?>">
                <?php } ?>
                                <option value="" selected>Select option</option>
                <?php
                for ($y = 0; $y < sizeof($myOptionArray); $y++) {
                    ?>
                                    <option  value="<?= $myOptionArray[$y] ?>" ><?php echo $myOptionArray[$y]; ?></option>
                <?php } ?>
                            </select>

                    </div>

                <?php
                $isSpaceAvailable = true;
            }
        }

        $tabIndex++;
    }

    if ($isSpaceAvailable) {
        ?>
            <!--   <div class="col-sm-6"></div> -->
            <div class="col-sm-6"> </div>
        </div><!-- row close 22-->


    <?php }
    ?>
            <!--  <input value="1" data-value="1" style="display: none;" id="ex2" data-slider-id="ex2Slider" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="50" type="text"> -->


    <div class="row">

        <div class="col-sm-6">
            <div class="form-group">
                <button type="button" tabindex="<?= $tabIndex ?>" class="btn btn-danger btn-file col-sm-12" name="btnSubmit3" id="btnSubmit3" onclick="setDefaultFormVales();">Reset</button>
            </div>
        </div> 
        <div class="col-sm-6">
            <div class="form-group">


    <?php if ($surveyStatus == 'Published') { ?>
                    <button type="submit" tabindex="<?= $tabIndex ?>" class="btn btn-success btn-file col-sm-12" name="btnSubmit" id="btnSubmit">Submit</button>

    <?php } else { ?>
                    <input type="button" value="Submit" tabindex="<?= $tabIndex ?>" class="btn btn-success btn-file col-sm-12" name="btnSubmit2" id="btnSubmit2" onclick="doPreviewSubmit();">
    <?php } ?>

            </div>
        </div> 
    </div>
    <?php
} catch (Exception $exc) {
    $exc->getMessage();
    $resultMessage = '<font color=red size=2px>' . $exc . '</font>';
//$conn->closeConnection(); // closing the connection
    // mysql_close();
}
?>

<div class="row">
    <div class="col-sm-12">
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog" style=" position: static;">
                <div class="modal-content">
                    <div class="modal-body">
                        <strong>
                            <div id="showAlertText">
                            </div>
                        </strong>
                    </div>
                    <div class="modal-footer">

                        <div class="row">
                            <div class="col-sm-4"> </div>
                            <div class="col-sm-4"></div>      
                            <div class="col-sm-4">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">
                                    Close
                                </button>
                            </div>
                        </div>



                    </div><!-- Modal Footer -->
                </div><!-- Modal Content -->
            </div><!-- Modal Dialog -->
        </div><!-- Modal Container-->

    </div>
</div>




</form>

</div>
<br>
</section><?php include '../footer.php'; ?>


<!--   <script src="../js/slider/bootstrap-slider.js" type="text/javascript"></script>
<script src="../js/slider/modernizr.js" type="text/javascript"></script>
-->


<script>
    $('.btn-toggle').click(function() {
        $(this).find('.btn').toggleClass('active');  
                        
        if ($(this).find('.btn-primary').size()>0) {
            $(this).find('.btn').toggleClass('btn-primary');
        }
        if ($(this).find('.btn-danger').size()>0) {
            $(this).find('.btn').toggleClass('btn-danger');
        }
        /*if ($(this).find('.btn-success').size()>0) {
                               $(this).find('.btn').toggleClass('btn-success');
                       }
                       if ($(this).find('.btn-info').size()>0) {
                               $(this).find('.btn').toggleClass('btn-info');
                       }*/
                        
        $(this).find('.btn').toggleClass('btn-default');
                           
    });
                    
    /* $('form').submit(function(){
                       alert($(this["options"]).val());
                       return false;
                   }); */
    
    
    
    function getValue(content){
        var isDisabled = true;
        if(content=='Yes'){
            // alert('in yes');
            document.getElementById("fullName").style.display = 'none';
            document.getElementById("frmFullName").style.display = 'none';
            document.getElementById("email").style.display = 'none';
            document.getElementById("frmEmailId").style.display = 'none';
            document.getElementById("phone").style.display = 'none';
            document.getElementById("frmPhone").style.display = 'none';
            document.getElementById("employeeId").style.display = 'none';
            document.getElementById("frmEmpNo").style.display = 'none';
            document.getElementById("rowId").style.display = 'none';
            document.getElementById("noMarginId").style.display = 'none';
            var yesStyle = $('#yes').attr('class');
            if(yesStyle.indexOf("active")>-1){
                isDisabled = false;
            }else {
                isDisabled = true;
            }
        }
        else if(content=='No'){
            document.getElementById("fullName").style.display = 'block';
            document.getElementById("frmFullName").style.display = 'block';
            document.getElementById("email").style.display = 'block';
            document.getElementById("frmEmailId").style.display = 'block';
            document.getElementById("phone").style.display = 'block';
            document.getElementById("frmPhone").style.display = 'block';
            document.getElementById("employeeId").style.display = 'block';
            document.getElementById("frmEmpNo").style.display = 'block';
            document.getElementById("rowId").style.display = 'block';
            document.getElementById("noMarginId").style.display = 'block';
            var noStyle = $('#no').attr('class');
            if(noStyle.indexOf("active")>-1){
                isDisabled = true;
            }else {
                isDisabled = false;
            }
        }
        if(isDisabled){
            $('#frmFullName').val("");
            $('#frmEmailId').val("");
            $('#frmPhone').val("");
            $('#frmEmpNo').val("");
            // $('#firstname').attr('readonly', true);
            //$('#lastname').attr('readonly', true);
            $('#anonymously').val("1");
        }else {
            $('#frmFullName').val($('#tempFrmFullName').val());
            $('#frmEmailId').val($('#tempFrmEmailId').val());
            $('#frmPhone').val($('#tempFrmPhone').val());
            $('#frmEmpNo').val($('#tempFrmEmpNo').val());
            
            $('#anonymously').val("0");
            // $('#firstname').attr('readonly', false);
            // $('#lastname').attr('readonly', false);
        }
    }
</script>



<!--Custom Code ends-->

</body>
</html>
