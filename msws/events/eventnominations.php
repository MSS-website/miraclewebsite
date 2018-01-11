<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="Home | Miracle" name="Title">
        <meta content="Miracle Software Systems, Inc. is a 20 year firm headquartered in Novi ,MI ,USA. Miracle has been a leader in the IT space as Systems Integrator in ERP/B2B/BPM." name="Description">
        <meta itemscope itemtype="http://schema.org/Organization">
        <meta itemprop="Miracle Software Systems, Inc, is a Global Systems Integrator specializing in ERP/ BPM (EAI/SOA) / B2B / Digital Experience Technologies, headquartered in Novi, MI – USA. Miracle has a global presence on four continents with multiple Global Development Centers spanning across the USA, Canada and India.Miracle has been and continues to be a leader in the niche space of Business Integration and SOA services over the past 20 Years with Premier Partnerships with software giants such as SAP, IBM, Oracle and Microsoft, Other partnerships also includes Amazon, Redhat, apigee, Rally, HP  and Axway.">
        <meta content="INDEX,FOLLOW" name="Robots">
        <title>
            Event Nominations | Miracle
        </title>
        <?php include '../config/Locations.php'; ?>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/font-awesome.min.css" rel="stylesheet">
        <link href="../css/main.css" rel="stylesheet">
        <!--    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
            <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"> -->
       <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../css/default.css"/>
        <link rel="stylesheet" type="text/css" href="../css/component.css"/>
        <script src="../js/modernizr.custom.js"></script>
        <link href="../images/favicon.ico" rel="shortcut icon">
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
        <script type="text/javascript" src="../js/NominationValidations.js?version=1.1"></script>



        <!-- Date pickers links start -->
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> 

        <link rel="stylesheet" type="text/css" media="all" href="../css/calander/daterangepicker-bs3.css" />

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>  
          <!-- <script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script> -->
        <script type="text/javascript" src="../js/calander/moment.js"></script>
        <script type="text/javascript" src="../js/calander/daterangepicker.js?ver=1.3"></script>

        <!-- date pickers links end -->

        <?php
        include '../config/general.php';
        require '../config/ConnectionProvider.php';
        require '../classes/MailManager.php';
        $suggestedId = '0';
        $resultMessage = "";
        $isValidUser = 'NO';
        $nominationYourSelfSubmittedId = '0';
        $nominationYourSelfresultMessage = "";

        $nominationCollegueSubmittedId = '0';
        $nominationCollegueResultMessage = "";


        $currentConferenceId = '0';
        $currentConferenceCountry = '';


        $urlConferenceId = isset($_GET["conferenceId"]) ? $_GET["conferenceId"] : '0';
        $urlConferenceCountry = isset($_GET["conferenceCountry"]) ? $_GET["conferenceCountry"] : '';
        $urlConferenceIdStatus = "Opened";
        if ($urlConferenceId != '0')
            $urlConferenceIdStatus = getConferenceStatus($urlConferenceId);


        session_start();
        $rempID = isset($_SESSION["ses_EmpLoginId"]) ? $_SESSION["ses_EmpLoginId"] : '';
        $errorMessage = "";
        $employeeName = isset($_SESSION["ses_EmployeeName"]) ? $_SESSION["ses_EmployeeName"] : '';





        if (isset($_POST['btnLoginSubmit'])) {
            try {
                $frmLoginId = isset($_POST["loginId"]) ? $_POST["loginId"] : '';
                $frmPassword = isset($_POST["password"]) ? $_POST["password"] : '';
                $data = array("LoginId" => "$frmLoginId", "Password" => "$frmPassword", "Authorization" => base64_encode(SERVICE_AUTHORIZATION));
                $data_string = json_encode($data);
                $curl = curl_init(SERVICE_URL . "websiteServices/getEmployeeInformation");
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($curl, CURLOPT_HTTPHEADER, array(
                    'Content-Type: application/json',
                    'Content-Length: ' . strlen($data_string))
                );
                curl_setopt($curl, CURLOPT_TIMEOUT, 500);
                curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 500);
                $curl_response = curl_exec($curl);
                if (1 !== $curl_response) {

                    $myArray = json_decode($curl_response, true);
                    if ($myArray['IsAuthenticate']) {

                        if ($myArray['ResultString'] == 'Valid') {
                            $isValidUser = 'YES';
                            $_SESSION["ses_EmpLoginId"] = $frmLoginId;
                            $_SESSION["ses_EmployeeName"] = $myArray['FName'] . ' ' . $myArray['MName'] . ' ' . $myArray['LName'];
                            $_SESSION["ses_WorkPhoneNo"] = $myArray['WorkPhoneNo'];
                            $_SESSION["ses_TitleTypeId"] = $myArray['TitleTypeId'];
                            $_SESSION["ses_Location"] = $myArray['Location'];
                            $_SESSION["ses_ReportsTo"] = $myArray['ReportsTo'];
                            $_SESSION["ses_Email"] = $myArray['Email1'];
                            $_SESSION["ses_Country"] = $myArray['Country'];

                            $rempID = $_SESSION["ses_EmpLoginId"];
                            $employeeName = $_SESSION["ses_EmployeeName"];
                        } else {

                            if ($myArray['ResultString'] == 'InValidCredentiales') {
                                $errorMessage = INVALID_CREDENTIALES_MESSAGE;
                            }
                            // $resultMessage = "<font color=red size=2px>" . INVALID_CREDENTIALES_MESSAGE . " </font>";
                            else
                                $errorMessage = INACTIVE_MESSAGE;
                            // $resultMessage = "<font color=red size=2px>" . INACTIVE_MESSAGE . " </font>";
                        }
                    }else {
                        $errorMessage = UNAUTHORIZED_ACCESS_MESSAGE;
                        //$resultMessage = "<font color=red size=2px>" . UNAUTHORIZED_ACCESS_MESSAGE . "</font>";
                    }
                }
                curl_close($curl);
            } catch (Exception $exc) {


                $exc->getMessage();
                $resultMessage = '<font color=red size=2px>' . $exc . '</font>';
                header('Location: ../back-end-error.php?resultMessage=' . $resultMessage);
            }
        }


        if (isset($_POST['btnSuggestionEventSubmit'])) {
            try {

                $frmEventName = isset($_POST["suggestedEventName"]) ? $_POST["suggestedEventName"] : '';
                $frmStartDate = isset($_POST["calId1"]) ? $_POST["calId1"] : null;
                $frmEndDate = isset($_POST["calId2"]) ? $_POST["calId2"] : null;
                $frmCity = isset($_POST["suggestedEventCity"]) ? $_POST["suggestedEventCity"] : '';
                $frmState = isset($_POST["suggestedEventState"]) ? $_POST["suggestedEventState"] : '';
                $frmCountry = isset($_POST["suggestedEventCountry"]) ? $_POST["suggestedEventCountry"] : '';
                $frmEventLink = isset($_POST["suggestedEventLink"]) ? $_POST["suggestedEventLink"] : '';
                $frmDescription = isset($_POST["suggestedEventDescription"]) ? $_POST["suggestedEventDescription"] : '';
                $frmCreatedBy = $rempID;




                $sql = "INSERT INTO tblEventSuggestions (EventName,StartDate,EndDate,City,State,Country,EventLink,Description,CreatedBy)   " .
                        " VALUES(:frmEventName,:frmStartDate,:frmEndDate,:frmCity,:frmState,:frmCountry,:frmEventLink,:frmDescription,:frmCreatedBy)";

                $stmt = $conn->prepare($sql);

                $stmt->bindParam(':frmEventName', $frmEventName);
                $stmt->bindParam(':frmStartDate', $frmStartDate);
                $stmt->bindParam(':frmEndDate', $frmEndDate);
                $stmt->bindParam(':frmCity', $frmCity);
                $stmt->bindParam(':frmState', $frmState);
                $stmt->bindParam(':frmCountry', $frmCountry);
                $stmt->bindParam(':frmEventLink', $frmEventLink);
                $stmt->bindParam(':frmDescription', $frmDescription);
                $stmt->bindParam(':frmCreatedBy', $frmCreatedBy);
                if ($stmt->execute()) {
                    $suggestedId = $conn->lastInsertId();
                    $resultMessage = "Your suggestion submitted successfully.";

                    $mailmanager = new MailManager();
                    $mailmanager->sendEventSuggestionDetails($employeeName, $frmEventName, $frmCity . ',' . $frmState . ',' . $frmCountry, $frmStartDate, $frmEndDate, $frmEventLink, $_SESSION["ses_Email"], $_SESSION["ses_WorkPhoneNo"]);
                } else {
                    $resultMessage = "Oops!something went wrong, please try again!";
                }
            } catch (Exception $exc) {
                $exc->getMessage();
                $resultMessage = '<font color=red size=2px>' . $exc . '</font>';
                header('Location: ../back-end-error.php?resultMessage=' . $resultMessage);
            }
        }

        /* Event Search functionality
         * Date : 03/13/2017
         * Author : Santosh Kola
         */
        $searchQuery = "";
        $frmSearchCalId1 = null;
        $frmSearchCalId2 = null;
        $frmTitleKeyWords = "";
        $frmEventType = "U";
        if (isset($_POST['btnSearchSubmit'])) {
            try {
                $urlConferenceId = '0';
                $frmEventType = isset($_POST["eventType"]) ? $_POST["eventType"] : 'U';
                $frmSearchCalId1 = isset($_POST["searchCalId1"]) ? $_POST["searchCalId1"] : null;
                $frmSearchCalId2 = isset($_POST["searchCalId2"]) ? $_POST["searchCalId2"] : null;
                $frmTitleKeyWords = isset($_POST["titleKeyWords"]) ? $_POST["titleKeyWords"] : '';

                $searchQuery = "SELECT event_id,Page_Title,event_startdate,evetnt_enddate,IsNominated,NominationEndDate,ImagePath,STATUS,Country FROM tblEventLines WHERE WebinarType='C' AND IsNominated=1 ";

                if ($frmEventType == 'U') {
                    $searchQuery = $searchQuery . ' AND STATUS=\'Active\' ';
                } else {
                    $searchQuery = $searchQuery . ' AND STATUS=\'Completed\' ';
                }
                if ($frmSearchCalId1 != null) {
                    //$queryString = $queryString.' AND DATE_FORMAT(event_startdate, \'%m/%d/%Y\') >= DATE_FORMAT(\''.$rstartDate.'\', \'%m/%d/%Y\')';
                    //$queryString = $queryString . ' AND event_startdate>=\'' . $rstartDate . '\'';
                    $searchQuery = $searchQuery . ' AND event_startdate>=:rstartDate';
                }
                if ($frmSearchCalId2 != null) {
                    // $queryString = $queryString.' AND DATE_FORMAT(evetnt_enddate, \'%m/%d/%Y\') <= DATE_FORMAT(\''.$rendDate.'\', \'%m/%d/%Y\')';
                    $searchQuery = $searchQuery . ' AND evetnt_enddate<=:rendDate';
                }
                if ($frmTitleKeyWords != '') {
                    $searchQuery = $searchQuery . ' AND Page_Title LIKE :titleKeyWords';
                }


                $searchQuery = $searchQuery . ' ORDER BY event_startdate';
            } catch (Exception $exc) {
                $exc->getMessage();
                $resultMessage = '<font color=red size=2px>' . $exc . '</font>';
                header('Location: ../back-end-error.php?resultMessage=' . $resultMessage);
            }
        }



        
        if (isset($_POST['btnNominateSubmit'])) {
         

            try {
                $frmNominateYourSelfConferenceId = isset($_POST["nominateYourSelfConferenceId"]) ? $_POST["nominateYourSelfConferenceId"] : '';
                $frmEmployeeName = isset($_POST["employeeName"]) ? $_POST["employeeName"] : '';
                $frmEmployeeDesignation = isset($_POST["employeeDesignation"]) ? $_POST["employeeDesignation"] : '';
                $frmEmployeeWorkPhone = isset($_POST["employeeWorkPhone"]) ? $_POST["employeeWorkPhone"] : '';
                $frmWorkLocation = isset($_POST["workLocation"]) ? $_POST["workLocation"] : '';
                $frmReportingManager = isset($_POST["reportingManager"]) ? $_POST["reportingManager"] : '';
                $frmNearestAirport = isset($_POST["nearestAirport"]) ? $_POST["nearestAirport"] : '';
                $frmPassportAvailability = isset($_POST["passportAvailability"]) ? $_POST["passportAvailability"] : '0';
                $frmGoalsOfAttending = isset($_POST["goalsOfAttending"]) ? $_POST["goalsOfAttending"] : '';
                $frmnominationYourId = isset($_POST["nominationYourId"]) ? $_POST["nominationYourId"] : '0';
                $frmConferenceCountry = isset($_POST["conferenceCountry"]) ? $_POST["conferenceCountry"] : '';

                $frmSubmittedBy = $_SESSION["ses_EmpLoginId"];


                $currentConferenceId = $frmNominateYourSelfConferenceId;
                $currentConferenceCountry=$frmConferenceCountry;
                //echo 'cse-->'.$frmPassportAvailability;

                if ($frmConferenceCountry != $_SESSION["ses_Country"]) {
                    if ($frmPassportAvailability != '0')
                        $frmPassportAvailability = '1';
                }else {
                    $frmPassportAvailability = '-1'; //Not Required Passport (Same country)
                }

                if ($frmnominationYourId == '0') {
                    $sql = "INSERT INTO tblEventNominations (ConferenceId,EmployeeName,Designation,WorkPhone,WorkLocation,ReportsTo,NearestAirport,PassportAvailability,GoalsOfAttending,CreatedBy)   " .
                            " VALUES(:frmConferenceId,:frmEmployeeName,:frmDesignation,:frmWorkPhone,:frmWorkLocation,:frmReportsTo,:frmNearestAirport,:frmPassportAvailability,:frmGoalsOfAttending,:frmCreatedBy)";

                    $stmt = $conn->prepare($sql);

                    $stmt->bindParam(':frmConferenceId', $frmNominateYourSelfConferenceId);
                    $stmt->bindParam(':frmEmployeeName', $frmEmployeeName);
                    $stmt->bindParam(':frmDesignation', $frmEmployeeDesignation);

                    $stmt->bindParam(':frmWorkPhone', $frmEmployeeWorkPhone);
                    $stmt->bindParam(':frmWorkLocation', $frmWorkLocation);

                    $stmt->bindParam(':frmReportsTo', $frmReportingManager);
                    $stmt->bindParam(':frmNearestAirport', $frmNearestAirport);

                    $stmt->bindParam(':frmPassportAvailability', $frmPassportAvailability);
                    $stmt->bindParam(':frmGoalsOfAttending', $frmGoalsOfAttending);
                    $stmt->bindParam(':frmCreatedBy', $frmSubmittedBy);

                    if ($stmt->execute()) {
                        $nominationYourSelfSubmittedId = $conn->lastInsertId();
                        $nominationYourSelfresultMessage = "Your nomination submitted successfully.";
                        $conferenceDetailsJson = getConferenceDetailsById($frmNominateYourSelfConferenceId);
                        $myConfDetailsJson = json_decode($conferenceDetailsJson, true);
                        $mailmanager = new MailManager();
                        $mailmanager->sendNewNominationSubmitted($myConfDetailsJson['Page_Title'], $myConfDetailsJson['location'], $myConfDetailsJson['event_startdate'], $myConfDetailsJson['evetnt_enddate'], $frmEmployeeName, $frmEmployeeWorkPhone, $_SESSION["ses_Email"]);
                        $mailmanager->sendYourNominationSubmitted($frmEmployeeName, $myConfDetailsJson['Page_Title'], $myConfDetailsJson['location'], $myConfDetailsJson['event_startdate'], $myConfDetailsJson['evetnt_enddate'], $myConfDetailsJson['event_redirect'], $_SESSION["ses_Email"]);

                        $collegueNomJsonArr = getCountOfCollegueNominations($frmNominateYourSelfConferenceId, $frmSubmittedBy);
                        $json_array = json_decode($collegueNomJsonArr, true);
                        $elementCount = count($json_array);
                        if ($elementCount > 0) {
                            foreach ($json_array as $json) {
                                //sendXXXSubmittedNominee($eventName,$location,$startDate,$endDate,$collegueEmail,$nominatoreName,$collegueName,$nominatedByEmail,$redirectionUrl)
                                $mailmanager->sendXXXSubmittedNominee($myConfDetailsJson['Page_Title'], $myConfDetailsJson['location'], $myConfDetailsJson['event_startdate'], $myConfDetailsJson['evetnt_enddate'], $_SESSION["ses_Email"], $json['NominatorName'], $_SESSION["ses_EmployeeName"], $json['NominatorEmail'], $myConfDetailsJson['event_redirect']);
                            }
                        }
                    } else {
                        $nominationYourSelfresultMessage = "Oops!something went wrong, please try again!";
                    }
                } else {
                    $sql = "UPDATE tblEventNominations SET EmployeeName=:frmEmployeeName,Designation=:frmDesignation,WorkPhone=:frmWorkPhone,WorkLocation=:frmWorkLocation,ReportsTo=:frmReportsTo,NearestAirport=:frmNearestAirport,PassportAvailability=:frmPassportAvailability,GoalsOfAttending=:frmGoalsOfAttending,ModifiedBy=:frmModifiedBy,ModifiedDate=NOW() WHERE Id=:frmNominationId";


                    $stmt = $conn->prepare($sql);


                    $stmt->bindParam(':frmEmployeeName', $frmEmployeeName);
                    $stmt->bindParam(':frmDesignation', $frmEmployeeDesignation);

                    $stmt->bindParam(':frmWorkPhone', $frmEmployeeWorkPhone);
                    $stmt->bindParam(':frmWorkLocation', $frmWorkLocation);

                    $stmt->bindParam(':frmReportsTo', $frmReportingManager);
                    $stmt->bindParam(':frmNearestAirport', $frmNearestAirport);

                    $stmt->bindParam(':frmPassportAvailability', $frmPassportAvailability);
                    $stmt->bindParam(':frmGoalsOfAttending', $frmGoalsOfAttending);
                    $stmt->bindParam(':frmModifiedBy', $frmSubmittedBy);
                    $stmt->bindParam(':frmNominationId', $frmnominationYourId);

                    if ($stmt->execute()) {
                        $nominationYourSelfSubmittedId = $frmnominationYourId;
                        $nominationYourSelfresultMessage = "Your nomination updated successfully.";
                        $conferenceDetailsJson = getConferenceDetailsById($frmNominateYourSelfConferenceId);
                        $myConfDetailsJson = json_decode($conferenceDetailsJson, true);
                        $mailmanager = new MailManager();
                        $mailmanager->sendNominationUpdated($myConfDetailsJson['Page_Title'], $myConfDetailsJson['location'], $myConfDetailsJson['event_startdate'], $myConfDetailsJson['evetnt_enddate'], $frmEmployeeName, $frmEmployeeWorkPhone, $_SESSION["ses_Email"]);
                        $mailmanager->sendYourNominationUpdated($frmEmployeeName, $myConfDetailsJson['Page_Title'], $myConfDetailsJson['location'], $myConfDetailsJson['event_startdate'], $myConfDetailsJson['evetnt_enddate'], $myConfDetailsJson['event_redirect'], $_SESSION["ses_Email"]);
                    } else {
                        $nominationYourSelfresultMessage = "Oops!something went wrong, please try again!";
                    }
                }
            } catch (Exception $exc) {
                $exc->getMessage();
                $resultMessage = '<font color=red size=2px>' . $exc . '</font>';
                header('Location: ../back-end-error.php?resultMessage=' . $resultMessage);
            }
           
        }

        function getConferenceDetailsById($conferenceId) {
            // $conn = new DbController();
            $speakers = '';
            $myJSON = null;
            $mainJSON = null;
            require '../config/ConnectionProvider.php';
            try {
                //  $conn->connectToDatabase();
                //  $conn->selectDatabase();
                //  $selectQuery = "SELECT event_speaker FROM tblEventSpeakers WHERE event_id = " . $webinarId . " AND primary_speaker=1 AND STATUS='Active'";
                //   $selectQuery = "SELECT SpeakerName FROM vwSpeakerList WHERE EventId=" . $webinarId . " AND ObjectType = 'EV' AND PrimaryFlag=1 AND STATUS='Active'";
                $selectQuery = "SELECT event_id,Page_Title,event_startdate,evetnt_enddate,location,event_redirect,Country FROM tblEventLines WHERE event_id=:confId";
                //$result = mysql_query($selectQuery);
                $stmt = $conn->prepare($selectQuery);
                $stmt->bindParam(':confId', $conferenceId);
                $stmt->execute();
                $num_rows = $stmt->rowCount();
                $stmt->setFetchMode(PDO::FETCH_ASSOC);
                // $num_rows = mysql_num_rows($result);
                $countSpeakers = 0;
                //   while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
                while ($row = $stmt->fetch()) {

                    $myObj->Page_Title = $row["Page_Title"];
                    $myObj->event_startdate = $row["event_startdate"];
                    $myObj->evetnt_enddate = $row["evetnt_enddate"];
                    $myObj->location = $row["location"];
                    $myObj->event_redirect = $row["event_redirect"];
                    $myObj->Country = $row["Country"];
                    $myJSON = json_encode($myObj);
                }
            } catch (Exception $exc) {

                $exc->getMessage();
                $resultMessage = '<font color=red size=2px>' . $exc . '</font>';
                header('Location: ../back-end-error.php?resultMessage=' . $resultMessage);
                // $conn->closeConnection(); // closing the connection
            }
            return $myJSON;
        }

        function getConferenceStatus($conferenceId) {
            $conferenceStatus = 'Opened';
            require '../config/ConnectionProvider.php';
            try {
                //  $conn->connectToDatabase();
                //  $conn->selectDatabase();
                //  $selectQuery = "SELECT event_speaker FROM tblEventSpeakers WHERE event_id = " . $webinarId . " AND primary_speaker=1 AND STATUS='Active'";
                //   $selectQuery = "SELECT SpeakerName FROM vwSpeakerList WHERE EventId=" . $webinarId . " AND ObjectType = 'EV' AND PrimaryFlag=1 AND STATUS='Active'";
                $selectQuery = "SELECT NominationEndDate FROM tblEventLines WHERE event_id=:confId";
                //$result = mysql_query($selectQuery);
                $stmt = $conn->prepare($selectQuery);
                $stmt->bindParam(':confId', $conferenceId);
                $stmt->execute();
                $num_rows = $stmt->rowCount();
                $stmt->setFetchMode(PDO::FETCH_ASSOC);
                // $num_rows = mysql_num_rows($result);
                $countSpeakers = 0;
                //   while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
                while ($row = $stmt->fetch()) {

                    if (strtotime($row["NominationEndDate"]) < time()) {
                        $conferenceStatus = "Closed";
                    }
                }
            } catch (Exception $exc) {

                $exc->getMessage();
                $resultMessage = '<font color=red size=2px>' . $exc . '</font>';
                header('Location: ../back-end-error.php?resultMessage=' . $resultMessage);
                // $conn->closeConnection(); // closing the connection
            }
            return $conferenceStatus;
        }

        /* Nominate Collegue
         * Date : 03/23/2017
         * Author : Santosh Kola
         */



        if (isset($_POST['btnNominateCollegueSubmit'])) {
            try {

                $frmNominateCollegueConferenceId = isset($_POST["nominateCollegueConferenceId"]) ? $_POST["nominateCollegueConferenceId"] : '';
                $frmNominateCollegueConferenceCountry = isset($_POST["nominateCollegueConferenceCountry"]) ? $_POST["nominateCollegueConferenceCountry"] : '';
                
                $frmCollegueName = isset($_POST["collegueName"]) ? $_POST["collegueName"] : '';
                $frmCollegueLoginId = isset($_POST["coolegueLoginId"]) ? $_POST["coolegueLoginId"] : '';
                $frmCollegueEmail = isset($_POST["coolegueEmail"]) ? $_POST["coolegueEmail"] : '';
                $frmNominateCollegueDescription = isset($_POST["nominateCollegueDescription"]) ? $_POST["nominateCollegueDescription"] : '';
                $frmSubmittedBy = $_SESSION["ses_EmpLoginId"];
                $frmNominatorEmail = $_SESSION["ses_Email"];
                $frmNominatorName = $_SESSION["ses_EmployeeName"];

                $frmActivityFlag = isset($_POST["activityFlag"]) ? $_POST["activityFlag"] : '';
                $frmCollegueId = isset($_POST["coolegueId"]) ? $_POST["coolegueId"] : '';


                $currentConferenceId = $frmNominateCollegueConferenceId;
                $currentConferenceCountry=$frmNominateCollegueConferenceCountry;
                if ($frmActivityFlag == 'Add') {

                    $sql = "INSERT INTO tblNominateCollegue (ConferenceId,CollegueLoginId,CollegueName,CollegueEmail,Comments,NominatedBy,NominatorEmail,NominatorName)   " .
                            " VALUES(:frmConferenceId,:frmCollegueLoginId,:frmCollegueName,:frmCollegueEmail,:frmComments,:frmNominatedBy,:frmNominatorEmail,:frmNominatorName)";

                    $stmt = $conn->prepare($sql);

                    $stmt->bindParam(':frmConferenceId', $frmNominateCollegueConferenceId);
                    $stmt->bindParam(':frmCollegueLoginId', $frmCollegueLoginId);
                    $stmt->bindParam(':frmCollegueName', $frmCollegueName);
                    $stmt->bindParam(':frmCollegueEmail', $frmCollegueEmail);
                    $stmt->bindParam(':frmComments', $frmNominateCollegueDescription);
                    $stmt->bindParam(':frmNominatedBy', $frmSubmittedBy);
                    $stmt->bindParam(':frmNominatorEmail', $frmNominatorEmail);
                    $stmt->bindParam(':frmNominatorName', $frmNominatorName);

                    if ($stmt->execute()) {
                        $nominationCollegueSubmittedId = $conn->lastInsertId();
                        $nominationCollegueResultMessage = "Nominated your colleague successfully.";

                        $collegueNomJsonArr = getCountOfCollegueNominations($frmNominateCollegueConferenceId, $frmCollegueLoginId);
                        $json_array = json_decode($collegueNomJsonArr, true);
                        $elementCount = count($json_array);


                        if ($elementCount == 1) {
                            $conferenceDetailsJson = getConferenceDetailsById($frmNominateCollegueConferenceId);
                            $myConfDetailsJson = json_decode($conferenceDetailsJson, true);
                            //$mailmanager->sendNominationUpdated($myConfDetailsJson['Page_Title'], $myConfDetailsJson['location'], $myConfDetailsJson['event_startdate'], $myConfDetailsJson['evetnt_enddate'], $frmEmployeeName, $frmEmployeeWorkPhone, $_SESSION["ses_Email"]);
                            $mailmanager = new MailManager();
                            //sendYouHaveBeenNominated($eventName,$location,$startDate,$endDate,$collegueEmail,$nominatoreName,$collegueName)

                            if (isNominationSubmitted($frmNominateCollegueConferenceId, $frmCollegueLoginId) == 0)
                                $mailmanager->sendYouHaveBeenNominated($myConfDetailsJson['Page_Title'], $myConfDetailsJson['location'], $myConfDetailsJson['event_startdate'], $myConfDetailsJson['evetnt_enddate'], $frmCollegueEmail, $_SESSION["ses_EmployeeName"], $frmCollegueName, $frmNominateCollegueConferenceId,$myConfDetailsJson['Country']);
                            else
                                $mailmanager->sendYouHaveBeenNominatedByNominee($myConfDetailsJson['Page_Title'], $myConfDetailsJson['location'], $myConfDetailsJson['event_startdate'], $myConfDetailsJson['evetnt_enddate'], $frmCollegueEmail, $_SESSION["ses_EmployeeName"], $frmCollegueName, $myConfDetailsJson['event_redirect']);
                        }
                    } else {
                        $nominationCollegueResultMessage = "Oops!something went wrong, please try again!";
                    }
                } else {
                    $sql = "UPDATE tblNominateCollegue SET Comments=:frmNomineeDescription,ModifiedBy=:frmModifiedBy,ModifiedDate=NOW() WHERE Id=:frmNomineeCollegueId";

                    $stmt = $conn->prepare($sql);

                    $frmModifiedBy = $_SESSION["ses_EmpLoginId"];
                    $stmt->bindParam(':frmNomineeDescription', $frmNominateCollegueDescription);
                    $stmt->bindParam(':frmModifiedBy', $frmModifiedBy);

                    $stmt->bindParam(':frmNomineeCollegueId', $frmCollegueId);


                    if ($stmt->execute()) {
                        $nominationCollegueSubmittedId = $frmCollegueId;
                        // $nominationYourSelfSubmittedId = nominateCollegueConferenceId;
                        $nominationCollegueResultMessage = "Your collegue nomination comments updated successfully.";
                    } else {
                        $nominationCollegueResultMessage = "Oops!something went wrong, please try again!";
                    }
                }
            } catch (Exception $exc) {
                $exc->getMessage();
                $nominationCollegueResultMessage = $exc;
                header('Location: ../back-end-error.php?resultMessage=' . $nominationCollegueResultMessage);
            }
        }

        function getCountOfCollegueNominations($conferenceId, $collegueId) {
            $speakers = '';
            $num_rows = 0;
            $myJSON = null;
            require '../config/ConnectionProvider.php';
            try {
                $selectQuery = "SELECT Id,NominatorEmail,NominatorName FROM tblNominateCollegue WHERE ConferenceId=:frmConfId AND CollegueLoginId=:frmCollegueLoginId";
                $stmt = $conn->prepare($selectQuery);
                $stmt->bindParam(':frmConfId', $conferenceId);
                $stmt->bindParam(':frmCollegueLoginId', $collegueId);
                $stmt->execute();
                $num_rows = $stmt->rowCount();
                $stmt->setFetchMode(PDO::FETCH_ASSOC);
                $nomarray = array();
                $i = 0;
                while ($row = $stmt->fetch()) {

                    $nomarray[] = $row;
                }
                $myJSON = json_encode($nomarray);
            } catch (Exception $exc) {

                $exc->getMessage();
                $resultMessage = $exc;
            }
            return $myJSON;
        }

        function isNominationSubmitted($conferenceId, $collegueId) {

            $isSubmitted = 0;
            require '../config/ConnectionProvider.php';
            try {

                $selectQuery = "SELECT Id FROM tblEventNominations WHERE ConferenceId=:frmConfId AND CreatedBy=:frmLoginId";

                $stmt = $conn->prepare($selectQuery);
                $stmt->bindParam(':frmConfId', $conferenceId);
                $stmt->bindParam(':frmLoginId', $collegueId);
                $stmt->execute();
                $num_rows = $stmt->rowCount();
                $isSubmitted = $num_rows;
            } catch (Exception $exc) {
                $exc->getMessage();
                $resultMessage = '<font color=red size=2px>' . $exc . '</font>';
                header('Location: ../back-end-error.php?resultMessage=' . $resultMessage);
            }
            return $isSubmitted;
        }
        
        
        ?>







        <style>
            .parallax{
                background-image:url('<?= AMAZON_URL ?>/images/nominations/event-nomination-header.jpeg');
                background-size:cover;
                background-repeat:no-repeat;
                background-position:center;
            }
            .overlay{
                background-color:rgba(0,0,0,0.3);
            }

            /* Rounded sliders */
            .slider.round {
                border-radius: 34px;
            }

            .slider.round:before {
                border-radius: 50%;
            }
            .modal-dialog {
                width:500px;
            }
            .black{
                color:#000000 !important;
            }
            .red{
                color:#ef4048;
            }
            .blue{
                color:#00aae7;
            }
        </style>
        <style>
            .tooltip {
                position: relative;
                display: inline-block;


                opacity: 1;
                font-family: sans-serif;
                font-size: 16px;
                z-index: unset;
            }

            .tooltip .tooltiptext {
                visibility: hidden;
                width: 500px;
                background-color: #555;

                margin-left: -100px;

                color: #fff;
                text-align: center;
                border-radius: 6px;
                padding: 0px 0;
                position: absolute;
                z-index: 1;
                top: 125%;
                /*                left: 50%;*/
                /*                margin-right: 20px;*/
                opacity: 0;
                transition: opacity 1s;
                border: 2px #fff ; 
            }

            .tooltip .tooltiptext::after {
                content: "";
                position: absolute;
                bottom: 100%;
                left: 50%;
                margin-top: -5px;
                border-width: 5px;
                border-style: solid;
                border-color: #555 transparent transparent transparent;
                transform: rotate(180deg);
            }

            .tooltip:hover .tooltiptext {
                visibility: visible;
                background: #3498db !important;
                opacity: 1.0;
                left: -150px;
            }

            #home,#menu1{
                height: 450px;
                overflow-y: auto;
                overflow-x: hidden;
            }


        </style>


    </head><!--/head-->
<?php include '../header.php'; ?>
    <body ng-app="myApp" ng-controller="myCtrl">

    <input type="hidden" name="suggestedEventId"  id="suggestedEventId" value="<?= $suggestedId ?>"/>
    <input type="hidden" name="sessionLoginId"  id="sessionLoginId" value="<?= $rempID ?>"/>
    <input type="hidden" name="nominationUrSelfSubmittedId"  id="nominationUrSelfSubmittedId" value="<?= $nominationYourSelfSubmittedId ?>"/>
    <input type="hidden" name="nominationCollegueSubmittedId"  id="nominationCollegueSubmittedId" value="<?= $nominationCollegueSubmittedId ?>"/>

    <input type="hidden" name="ses_EmployeeName"  id="ses_EmployeeName" value="<?= $_SESSION["ses_EmployeeName"] ?>"/>
    <input type="hidden" name="ses_WorkPhoneNo"  id="ses_WorkPhoneNo" value="<?= $_SESSION["ses_WorkPhoneNo"] ?>"/>
    <input type="hidden" name="ses_TitleTypeId"  id="ses_TitleTypeId" value="<?= $_SESSION["ses_TitleTypeId"] ?>"/>
    <input type="hidden" name="ses_Location"  id="ses_Location" value="<?= $_SESSION["ses_Location"] ?>"/>
    <input type="hidden" name="ses_ReportsTo"  id="ses_ReportsTo" value="<?= $_SESSION["ses_ReportsTo"] ?>"/>
    <input type="hidden" name="ses_Country"  id="ses_Country" value="<?= $_SESSION["ses_Country"] ?>"/>
    <input type="hidden" name="currentConferenceId"  id="currentConferenceId" value="<?= $currentConferenceId ?>"/>
    <input type="hidden" name="currentConferenceCountry"  id="currentConferenceCountry" value="<?= $currentConferenceCountry ?>"/>
    
    <input type="hidden" name="urlConferenceId"  id="urlConferenceId" value="<?= $urlConferenceId ?>"/>
    <input type="hidden" name="urlConferenceIdStatus"  id="urlConferenceIdStatus" value="<?= $urlConferenceIdStatus ?>"/>
    <input type="hidden" name="urlConferenceCountry"  id="urlConferenceCountry" value="<?= $urlConferenceCountry ?>"/>





    <script type="text/javascript">
        //    alert("hii");
            
            
            
    $(window).load(function(){
               
            
  
     
        if($("#sessionLoginId").val()==''){
            $('#loginModalButton').click(); 
        }else {
                
            if(parseInt($("#urlConferenceId").val())>0 && $("#urlConferenceIdStatus").val()=='Opened'){
                showNominateModal($("#urlConferenceId").val(),$('#urlConferenceCountry').val(),'0');
            }else if(($("#urlConferenceId").val())>0 && $("#urlConferenceIdStatus").val()=='Closed'){
                // alert("Haiiii")
                
                 $("#myModalNominationExpired").modal('show');
                //$("#myModalpastDiv").click(); 
                
                    
            }
        }
                
    
    
        // $('#Modal').modal('show');
        // $("#Modal").fadeIn('slow');
        if(parseInt($("#suggestedEventId").val())>0 ){
            $("#suggestEventButton").click(); 
        }
               
     
     
        if(parseInt($("#nominationUrSelfSubmittedId").val())>0){
            showNominateModal($("#currentConferenceId").val(),$('#currentConferenceCountry').val(),'0');
        }else if( parseInt($("#nominationCollegueSubmittedId").val())>0){
             showNominateModal($("#currentConferenceId").val(),$('#currentConferenceCountry').val(),'0');
                $("#nominateCollegueTab").click() ;
        }
      
      
     
        //------Search event calender componet Code start
        var st = document.getElementById("searchCalId1").value
        var end1 =document.getElementById("searchCalId2").value
        // alert("st-->"+st);
        // alert("end1-->"+end1);
        if(st.length>0&&end1.length>0) {
            var monthNames = [
                "January", "February", "March",
                "April", "May", "June", "July",
                "August", "September", "October",
                "November", "December"
            ];
            var s = new Date(st);
            // var date = new Date();
            var day = s.getDate();
            var monthIndex = s.getMonth();
            var year = s.getFullYear();
            var startdate = monthNames[monthIndex]+" "+day+", "+year
            var e = new Date(end1);
            // var date = new Date();
            day = e.getDate();
            monthIndex = e.getMonth();
            year = e.getFullYear();
            var eeedate = monthNames[monthIndex]+" "+day+", "+year

            //console.log(day, monthNames[monthIndex], year);
            $('#reportrangesearch span').html(startdate + ' - ' + eeedate);
          
        }
                
        //------Search event calender componet Code end
                
                
               
                
                
        // console.log(st, end1,'Custom');
        
        
        
        
        
        var cb = function(start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
                    
                    
            /*  $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                //   alert("Callback has fired: [" + start.format('MMMM D, YYYY') + " to " + end.format('MMMM D, YYYY') + ", label = " + label + "]");
                document.getElementById("calId1").value=start.format('YYYY-MM-DD');
                document.getElementById("calId2").value=end.format('YYYY-MM-DD');
             */     
                    
            // Search event daterange picker start
            $('#reportrangesearch span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            document.getElementById("searchCalId1").value=start.format('YYYY-MM-DD');
            document.getElementById("searchCalId2").value=end.format('YYYY-MM-DD');
            // Search event daterange picker end                  
            //Callback has fired: [June 19, 2015 to July 10, 2015, label = Custom]
        };



        var suggestDatePicker = function(start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
                    
                    
           // $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            
          //  document.getElementById("calId1").value=start.format('YYYY-MM-DD');
          //  document.getElementById("calId2").value=end.format('YYYY-MM-DD');
                    
                    
            // Search event daterange picker start
            /* $('#reportrangesearch span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                document.getElementById("searchCalId1").value=start.format('YYYY-MM-DD');
                document.getElementById("searchCalId2").value=end.format('YYYY-MM-DD');*/
            // Search event daterange picker end                  
            //Callback has fired: [June 19, 2015 to July 10, 2015, label = Custom]
        };




        var optionSet1 = {
            startDate: moment().subtract(29, 'days'),
            endDate: moment(),
            minDate: '01/01/2012',
            maxDate: '12/31/2020',
            //dateLimit: { days: 120 },
            showDropdowns: true,
            showWeekNumbers: true,
            timePicker: false,
            timePickerIncrement: 1,
            timePicker12Hour: true,
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            },
            opens: 'left',
            buttonClasses: ['btn btn-default'],
            applyClass: 'btn-sm btn-primary',
            cancelClass: 'btn-sm',
            format: 'MM/DD/YYYY',
            separator: ' to ',
            locale: {
                applyLabel: 'Submit',
                cancelLabel: 'Clear',
                fromLabel: 'From',
                toLabel: 'To',
                customRangeLabel: 'Custom',
                daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr','Sa'],
                monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                firstDay: 1
            }
        };

        var optionSet2 = {
            startDate: moment().subtract(7, 'days'),
            endDate: moment(),
                 
            opens: 'left',
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            }
        };

        //   $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));

        $('#reportrange').daterangepicker(optionSet1, suggestDatePicker);

        //alert("123234");
        $('#reportrange').on('show.daterangepicker', function() { console.log("show event fired"); });
        $('#reportrange').on('hide.daterangepicker', function() { console.log("hide event fired"); });
        $('#reportrange').on('apply.daterangepicker', function(ev, picker) { 
            console.log("apply event fired, start/end dates are " 
                + picker.startDate.format('MMMM D, YYYY') 
                + " to " 
                + picker.endDate.format('MMMM D, YYYY')
        ); 
           
            $('#reportrange span').html(picker.startDate.format('MMMM D, YYYY') + ' - ' + picker.endDate.format('MMMM D, YYYY'));
            //   alert("Callback has fired: [" + start.format('MMMM D, YYYY') + " to " + end.format('MMMM D, YYYY') + ", label = " + label + "]");
            document.getElementById("calId1").value=picker.startDate.format('YYYY-MM-DD');
            document.getElementById("calId2").value=picker.endDate.format('YYYY-MM-DD');
        });
                  
        $('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
            console.log("cancel event fired"); 
            
        
            $('#reportrange span').html("");
            //   alert("Callback has fired: [" + start.format('MMMM D, YYYY') + " to " + end.format('MMMM D, YYYY') + ", label = " + label + "]");
            document.getElementById("calId1").value="";
            document.getElementById("calId2").value="";
                    
                    
            // Search event daterange picker start
            //   $('#reportrangesearch span').html("");
            //   document.getElementById("searchCalId1").value="";
            //  document.getElementById("searchCalId2").value="";

        });
                
                
                
        // Search event daterange picker start
        $('#reportrangesearch').daterangepicker(optionSet1, cb);

        $('#reportrangesearch').on('show.daterangepicker', function() { console.log("show event fired"); });
        $('#reportrangesearch').on('hide.daterangepicker', function() { console.log("hide event fired"); });
        $('#reportrangesearch').on('apply.daterangepicker', function(ev, picker) { 
            console.log("apply event fired, start/end dates are " 
                + picker.startDate.format('MMMM D, YYYY') 
                + " to " 
                + picker.endDate.format('MMMM D, YYYY')
        ); 

            $('#reportrangesearch span').html(picker.startDate.format('MMMM D, YYYY') + ' - ' + picker.endDate.format('MMMM D, YYYY'));
            document.getElementById("searchCalId1").value=picker.startDate.format('YYYY-MM-DD');
            document.getElementById("searchCalId2").value=picker.endDate.format('YYYY-MM-DD');
            
        });
                  
        $('#reportrangesearch').on('cancel.daterangepicker', function(ev, picker) { 
                    
            //  $('#reportrange span').html("");
            //   alert("Callback has fired: [" + start.format('MMMM D, YYYY') + " to " + end.format('MMMM D, YYYY') + ", label = " + label + "]");
            // document.getElementById("calId1").value="";
            // document.getElementById("calId2").value="";
                    
                    
            // Search event daterange picker start
            $('#reportrangesearch span').html("");
            document.getElementById("searchCalId1").value="";
            document.getElementById("searchCalId2").value="";
                    
                    
            // alert("Cancel");
            console.log("cancel event fired"); });
                
        // Search event daterange picker start
                
                

    });
       
    </script>






    
    <div class="row parallax">
        <div class="overlay">
            <section class="container">
                <div class="row">
                    <div class="col-sm-6 text-left"> <br><br>
                        <h1 class="heavy micro" style="color:#ffffff;">Event Nominations</h1>
                    </div>
                    <div class="col-sm-6 text-right" ><br><br>
                        <ul class="breadcrumb pull-right" >
                            <li><a href=".."><font color="#ffffff"> Home</font></a></li>
                            <li class="active"><font color="#ffffff">Event Nominations</font></li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <br>
    <section class="container">
        <div class="row">
            <div class="col-sm-12">
                <p class="methodText">
                    <strong>Welcome to Miracle’s Event Nomination Portal!</strong> As you know Miracle attends many networking and marketing events across the year, and we want to ensure that we get the right people to the right events. Through this portal you can suggest new events, nomination yourself and colleagues to attend events and keep yourselves up to date regarding upcoming events that we are attending.
                </p>
            </div>
        </div>

        <!-- Login modal start -->
        <div class="row">

            <div class="col-sm-12">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myLoginModal" style="display: none" id="loginModalButton">Login</button>

                <div class="modal fade" id="myLoginModal" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                    <div class="modal-dialog" style="margin-left:-280px;">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="loginModalClosId" style="display: none"><span aria-hidden="true">&times;</span>
                                </button>
                                <h3 class="modal-title" id="memberModalLabel"><strong>Employee LogIn</strong> </h3>
                                <hr class="noMarginBottom">
                            </div>
                            <form method="post" action="" id="eventSuggestForm" onsubmit="loadbutton();">
                                <div class="modal-body">
                                    <p class="methodText" style="margin-top: -10px;">You must be a Miraclite to gain access to this. Please validate yourself using your Miracle credentials for further access. </p>
                                    <div class="row">
                                        <div class=" col-sm-6">
                                            <input tabindex="9" class="form-control" required="required" placeholder="LoginId" id="loginId" name="loginId"  type="text" onkeydown="return enableLoginEnter(event);"/>
                                            <br>
                                            <input tabindex="10" class="form-control" required="required" placeholder="Password" name="password" id="password"  type="password" onkeydown="return enableLoginEnter(event);"/>

                                        </div>
                                        <div class="col-sm-6"></div>
                                    </div>


<?php if ($errorMessage != '') { ?>
                                        <div class="row">
                                            <div class="col-sm-12">


                                                <div class="alert alert-danger alert-dismissable fade in">
                                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                    <strong><?php echo $errorMessage; ?></strong>

                                                </div>


                                            </div>
                                        </div>
<?php } ?>



                                    <hr  class="">

                                    <div class=" row ">

                                        <div class="col-sm-4"> <!--<button class="btn btn-primary col-sm-12 noMarginBottom" type="button" data-dismiss="modal">Log In</button>-->

                                            <button type="submit" tabindex="7" class="btn btn-primary col-sm-12" name="btnLoginSubmit" id="btnLoginSubmit" data-loading-text="<i class='fa fa-spinner fa-spin '></i> loading...">Login</button></div>
                                        <div class="col-sm-4"></div>
                                        <div class="col-sm-4"></div>


                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Login Modal end -->


        <br>
        <div class="row">
            <div class="col-sm-8">
<?php if ($rempID != '') { ?>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal" id="suggestEventButton">Suggest an Event</button>
<?php } else { ?>
                    <button type="button" class="btn btn-primary disabled" id="suggestEventButton">Suggest an Event</button>
<?php } ?>
                <!-- <div class="modal fade" id="Modal" role="dialog">  -->
                <div class="modal" id="Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static" >

                    <div class="modal-dialog" style="margin-left:-280px;">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" style="margin-top:-8px;" data-dismiss="modal">&times;</button>
                                <div class="col-sm-12">
                                    <div class="col-sm-12">
                                        <h3 class="heavy" style="margin-left:-30px;">Suggest an event!</h4>        
                                    </div>

                                </div>

                            </div>
                            <hr>
                            <div class="modal-body">

                                <form method="post" action="" id="eventSuggestForm" onsubmit="hideSuggestEventButton();">
                                    <div class="form-group">
                <?php if ($suggestedId != '0' && $resultMessage != '') { ?>
                                            <div class="row">
                                                <div class="col-sm-12">
    <?php if ($suggestedId > 0) { ?>
                                                        <div class="alert alert-success alert-dismissable fade in">
                                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                            <strong><?php echo $resultMessage; ?></strong>

                                                        </div>
    <?php } else { ?>

                                                        <div class="alert alert-danger alert-dismissable fade in">
                                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                            <strong><?php echo $resultMessage; ?></strong>

                                                        </div>

    <?php } ?>
                                                </div>
                                            </div>
<?php } ?>

                                        <div class="row" style="display: none" id="suggestEventValidationRow">
                                            <div class="col-sm-12">
                                                <div class="alert alert-danger alert-dismissable fade in">
                                                    <a href="#" class="close" aria-label="close" onclick="closeErrorMsg();">&times;</a>
                                                    <strong><span id="errorMessage"></span></strong>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <p class="methodText">Please fill in the following details regarding the event that you would like for Miracle to attend (or) conduct, we will analyze and see the possibility.</p>    
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6">

                                                <input type="text" placeholder="Event Name" class="form-control" id="suggestedEventName" name="suggestedEventName" onchange="fieldLengthValidator(this);" required>
                                            </div>
                                            <div class="col-sm-6">
                                                <!--Date search-->
                                                <div id="reportrange" class="form-control">
                                                    <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                                    <span></span> <b class="caret"></b>
                                                </div>
                                                <input type="hidden" id="calId1" name="calId1" required/>
                                                <input type="hidden" id="calId2" name="calId2" required/>
                                                <!--Date search-->
                                                  <!--    <input type="text" style="margin-top:15px" class="form-control" name="suggestedEventDateRange" id="suggestedEventDateRange" value="01/01/2015 - 01/31/2015" /> -->
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6">

                                                <input type="text" placeholder="City" class="form-control" id="suggestedEventCity" name="suggestedEventCity" onchange="fieldLengthValidator(this);" required>
                                            </div>

                                            <div class="col-sm-6">

                                                <input type="text" placeholder="State" class="form-control" id="suggestedEventState" name="suggestedEventState" onchange="fieldLengthValidator(this);" required>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6">

                                                <input type="text" placeholder="Country" class="form-control" id="suggestedEventCountry" name="suggestedEventCountry" onchange="fieldLengthValidator(this);" required>
                                            </div>

                                            <div class="col-sm-6">

                                                <input type="text" placeholder="Event Link" class="form-control" id="suggestedEventLink" name="suggestedEventLink" onchange="isUrl(this)" required>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">

                                                    <textarea class="form-control" placeholder="Why do you think it will be advantageous for Miracle to attend this event?" rows="5" id="suggestedEventDescription" name="suggestedEventDescription" onchange="fieldLengthValidator(this);" required></textarea>
                                                    <br>

                                                    <button data-loading-text="<i class='fa fa-spinner fa-spin '></i>Processing please wait......" class="btn btn-primary" id="btnSuggestionEventSubmit" name="btnSuggestionEventSubmit" tabindex="12" type="submit" onclick="return checkDateSelection();">Submit Suggestion</button><br>

                                                     
                                                </div>
                                            </div>

                                        </div>

                                    </div>    
                                </form>

                            </div>
                            <div class="modal-footer">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!---modal on suggest event button--->

            <!---modal on suggest event button--->
            <div class="col-sm-4"></div>
        </div>
        <div class="row">
            <div class="col-sm-2">
                <hr>
            </div>
        </div>


        <form method="post" action="" id="eventSearchForm" name="eventSearchForm">
            <div class="row">
                <div class="col-sm-4">

                    <select class="form-control" name="eventType" id="eventType">
<?php if ($frmEventType == 'U') { ?>
                            <option value="U" selected>Upcoming Events</option>
<?php } else { ?>
                            <option value="U">Upcoming Events</option>
<?php } ?>

<?php if ($frmEventType == 'P') { ?>
                            <option value="P" selected>Past Events</option>
<?php } else { ?>
                            <option value="P">Past Events</option>
<?php } ?>
                    </select>

                </div>
                <div class="col-sm-4">
                    <!--Date search-->
                    <div id="reportrangesearch" class="form-control">
                        <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                        <span></span> <b class="caret"></b>
                    </div>
                    <input type="hidden" id="searchCalId1" name="searchCalId1" value="<?= $frmSearchCalId1 ?>"/>
                    <input type="hidden" id="searchCalId2" name="searchCalId2" value="<?= $frmSearchCalId2 ?>"/>
                    <!--Date search-->
                </div>

                <div class="col-sm-4">
                    <div class="form-group">

                        <div class="input-group">

                            <input class="form-control" placeholder="Enter Event Title" type="text" name="titleKeyWords" id="titleKeyWords" value="<?= $frmTitleKeyWords ?>"><span class="input-group-btn"><span class="btn btn-primary btn-file" style="line-height:20px;"><input type="siv" onclick="doSearchSubmit();" name="btnSearchSubmit" id="btnSearchSubmit"> Search</span></span> 

                        </div>

                    </div>

                </div>
            </div>

        </form>
        <button type="button"  data-toggle="modal" data-target="#myModalNomination" style="display: none" id="nominateModalButton"></button>
<?php
try {

    $selectQuery = "SELECT event_id,Page_Title,event_startdate,evetnt_enddate,IsNominated,NominationEndDate,ImagePath,Country,STATUS FROM tblEventLines WHERE STATUS='Active' AND WebinarType='C' AND IsNominated=1 ORDER BY event_startdate";
    if ($searchQuery != "") {
        $selectQuery = $searchQuery;
    }
    $stmt = $conn->prepare($selectQuery);
    if ($frmSearchCalId1 != null) {
        $stmt->bindParam(':rstartDate', $frmSearchCalId1);
    }if ($frmSearchCalId2 != null) {
        $stmt->bindParam(':rendDate', $frmSearchCalId2);
    }if ($frmTitleKeyWords != "") {
        $tempTitleKeyWords = '%' . $frmTitleKeyWords . '%';
        $stmt->bindParam(':titleKeyWords', $tempTitleKeyWords);
    }




    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $isDivClose = false;
    $isInitial = true;
    $countItems = 1;
    $sno = 0;


    while ($row = $stmt->fetch()) {
        $conferenceId = $row["event_id"];
        $tempPage_Title = $row["Page_Title"];
        $tempevent_startdate = strtotime($row["event_startdate"]);
        $tempevetnt_enddate = strtotime($row["evetnt_enddate"]);
        $tempImagePath = $row["ImagePath"];
        $tempCountry = $row["Country"];

        $startDay = date('d', $tempevent_startdate);
        $startMonth = date('F', $tempevent_startdate);
        $startYear = date('Y', $tempevent_startdate);

        $endDay = date('d', $tempevetnt_enddate);
        $dateSTring = $startMonth . ' ' . $startDay . '-' . $endDay . ',' . $startYear;
        if ($startDay == $endDay)
            $dateSTring = $startMonth . ' ' . $startDay . ',' . $startYear;


        $sno++;

        if ($isDivClose || $isInitial) {

            $isDivClose = false;
            ?>
                    <div class="row">
                    <?php
                }
                $isInitial = false;
                ?>
                    <div class="effect col-sm-4">
                        <div class="card">
                <?php if (strtotime($row["NominationEndDate"]) > time()) { ?>
                                <a class="linkText1" href="#" onclick="showNominateModal('<?= $conferenceId ?>','<?= $tempCountry ?>','1');">
                <?php } else { ?>

                    <?php if ($row["STATUS"] == 'Active') { ?>
                                        <a class="linkText1" href="#" data-toggle="modal" data-target="#myModalNominationExpired">
                    <?php } else { ?>
                                            <a class="linkText1" href="#" data-toggle="modal" data-target="#myModalpast">



                    <?php }
                } ?>
                                        <img class="img-responsive" src="../images/<?= $tempImagePath ?>" alt="Avatar">
                                        <div class="container" style="background-color:#eee;">

                                            <h5 class="black"><strong><?php echo $tempPage_Title ?></strong> </h5
                                            <br><p class="methodText">
                    <?php echo $dateSTring ?>

                                            </p> 

                    <?php if (strtotime($row["NominationEndDate"]) > time()) { ?>
                                                <div class="row">
                                                    <div class="col-sm-1">
                                                        <i class="fa fa-envelope-open-o blue" aria-hidden="true"></i></div>
                                                    <div class="col-sm-11"> <p class="methodText">Nominations Open</p></span>
                                                    </div>
                                                </div>
                                <?php } else { ?>
                                                <div class="row">
                                                    <div class="col-sm-1">
                                                        <i class="fa fa-envelope red" aria-hidden="true"></i> </div>
                                                    <div class="col-sm-11"> <p class="methodText">Nominations Closed</p></span>
                                                    </div>
                                                </div>
                                        <?php } ?>
                                        </div>
                                    </a>
                                    </div>
                                    </div>
                                                <?php
                                                if ($countItems == 3) {
                                                    $isDivClose = true;
                                                    $countItems = 0;
                                                    ?> 
                                        </div>
            <?php
        }
        $countItems++;
    }

    If (!$isDivClose) {
        ?></div><?php
                                }
                            } catch (Exception $exc) {

                                $exc->getMessage();
                                $resultMessage = '<font color=red size=2px>' . $exc . '</font>';
                                header('Location: ../back-end-error.php?resultMessage=' . $resultMessage);
                                // $conn->closeConnection(); // closing the connection
                            }
                            if ($sno == 0) {
                                ?>
                                <div class="row"><div class="effect col-sm-4"> No events found! </div>

                                <?php
                            }
                            ?>






                                <!--
                                
                                <div class="row">
                        
                                    <div class="effect col-sm-4">
                                        <div class="card">
                                            <a class="linkText1" target="_blank" href="#"><img class="img-responsive" src="../images/nominations/IBM2.png" alt="Avatar">
                                                <div class="container" style="background-color:#eee;">
                        
                                                    <h5 class="black"><strong>IBM Interconnect 2017</strong> </h5
                                                    <br><p class="methodText">March 19th-23rd, 2017</p> 
                                                    <div class="row">
                                                        <div class="col-sm-1">
                                                            <i class="fa fa-envelope-open blue" aria-hidden="true"></i></div>
                                                        <div class="col-sm-11"> <p class="methodText">Nominations are Opened</p></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div> 
                                    <div class="effect col-sm-4">
                                        <div class="card">
                                            <a class="linkText1" target="_blank" href="#" data-toggle="modal" data-target="#myModalup1"><img  class="img-responsive" src="../images/nominations/Informatic.png" alt="Avatar" >
                                                <div class="container" style="background-color:#eee;">
                        
                                                    <h5 class="black"> <strong>Informatica Partner Kickoff 2017</strong></h5>
                                                    <p class="methodText">January 15-17, 2017</p>
                                                    <div class="row">
                                                        <div class="col-sm-1">
                                                            <i class="fa fa-envelope-open blue" aria-hidden="true"></i></div>
                                                        <div class="col-sm-11"> <p class="methodText">Nominations are Opened</p></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                        
                                        </div>
                                    </div>
                                    
                                        <div class="effect col-sm-4">
                                        <div class="card">
                                            <a class="linkText1" target="_blank" href="#" data-toggle="modal" data-target="#myModalpast">
                                                <img src="../images/nominations/Ds.png" alt="Avatar" class="img-responsive">
                                                <div class="container" style="background-color:#eee;">
                        
                                                    <h5 class="black"> <strong>Digital Summit</strong> </h5>
                                                    <p class="methodText">December 12-17, 2016</p>
                                                    <div class="row">
                                                        <div class="col-sm-1">
                                                            <i class="fa fa-envelope red" aria-hidden="true"></i> </div>
                                                        <div class="col-sm-11"> <p class="methodText">Nominations are Closed</p></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    
                                    </div>
                                
                                -->





                                <!--  <a class="linkText1" href="#" data-toggle="modal" data-target="#myModalpast" id="myModalpastDiv" style="display: none"></a>
                                  <a class="linkText1" href="#" data-toggle="modal" data-target="#myModalNominationExpired" id="myModalNominationExpiredDiv" style="display: none"></a>
                                -->
                                <!-- modal past--->
                                <div id="myModalpast" class="modal fade" role="dialog" data-backdrop="static">
                                    <div class="modal-dialog" style="margin-left:-280px;">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h3 class="modal-title heavy">Event Completed</h3>
                                            </div>
                                            <div class="modal-body">
                                                <p class="methodText">This event has already been completed, for more information about the event (or) its next edition please reach out to the events team at <a href="mailto:partnerships@miraclesoft.com">partnerships@miraclesoft.com</a>.</p>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <!-- modal past--->
                                <!-- modal Nomination expired--->
                                <div id="myModalNominationExpired" class="modal fade" role="dialog" data-backdrop="static">
                                    <div class="modal-dialog" style="margin-left:-280px;">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h3 class="modal-title heavy">Nominations Closed!</h3>
                                            </div>
                                            <div class="modal-body">
                                                <p class="methodText">We’re sorry, the nominations for this event are already closed. For more information please feel free to reach out to events team at <a href="mailto:partnerships@miraclesoft.com">partnerships@miraclesoft.com</a>.</p>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <!-- modal Nomination expired--->


                                <!-- modal past--->
                                <div class="row">
                                    <!--- modal up1--->
                                    <div id="myModalNomination" class="modal fade" role="dialog" data-backdrop="static">
                                        <div class="modal-dialog modal-lg" style="margin-left:-480px;">
                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" style="margin-top:-8px;" data-dismiss="modal">&times;</button>
                                                    <h3 class="modal-title heavy">Event Nominations</h3>
                                                </div>
                                                <div class="modal-body">
                                                    <ul class="nav nav-tabs">
                                                        <li class="active"><a data-toggle="tab" href="#home" id="nominateYourselfTab">Nominate yourself</a></li>
                                                        <li><a data-toggle="tab" href="#menu1" id="nominateCollegueTab">Nominate a colleague</a></li>
                                                        <!--   <li><a data-toggle="tab" href="#menu2" id="collegueCommentsTab"> Collegue Nominations</a></li> -->
                                                    </ul><br>
                                                    <div class="row">

                                                        <div class="col-sm-12" >
                                                            <div class="tab-content">
                                                                <div id="home" class="tab-pane fade in active" >


                                                                    <form method="post" action="" id="frmNominateYourSelf" name="frmNominateYourSelf" onsubmit="hideNominateUrselfButton();">
                                                                        <input type="hidden" name="nominateYourSelfConferenceId" id="nominateYourSelfConferenceId"/>
                                                                        <input type="hidden" name="nominationYourId" id="nominationYourId"/>
                                                                        <input type="hidden" name="conferenceCountry" id="conferenceCountry"/>
                                                                        <div class="row" id="loadingNominateUrSelf" style="display: none">
                                                                            <div class="col-sm-12" style="text-align: center"><font color='red' size='3px;' style='text-align:center'><b>loading please wait..</b></font></div>
                                                                        </div>

                                                                        <div class="row" style="display: none" id="nominateYSValidationRow">
                                                                            <div class="col-sm-12">
                                                                                <div class="alert alert-danger alert-dismissable fade in">
                                                                                    <a href="#" class="close" aria-label="close" onclick="closeNYSErrorMsg();">&times;</a>
                                                                                    <strong><span id="errorMessageForNYS"></span></strong>

                                                                                </div>
                                                                            </div>
                                                                        </div>







                                                                        <div class="form-group">
<?php if ($nominationYourSelfSubmittedId != '0' && $nominationYourSelfresultMessage != '') { ?>
                                                                                <div class="row">
                                                                                    <div class="col-sm-12">
    <?php if ($nominationYourSelfSubmittedId > 0) { ?>
                                                                                            <div class="alert alert-success alert-dismissable fade in">
                                                                                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                                                                <strong><?php echo $nominationYourSelfresultMessage; ?></strong>

                                                                                            </div>
    <?php } else { ?>

                                                                                            <div class="alert alert-danger alert-dismissable fade in">
                                                                                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                                                                <strong><?php echo $nominationYourSelfresultMessage; ?></strong>

                                                                                            </div>

    <?php } ?>
                                                                                    </div>
                                                                                </div>
<?php } ?>



                                                                            <div class="col-sm-12">
                                                                                <span id="statusInfo"></span>

                                                                                <div class="col-sm-12" style="display: none" id="nominateDivContent"><p class="methodText">Wanting to join us for the event? Then, please nominate yourselves for coming along with us.</p></div>
                                                                                <div class="col-sm-12">
                                                                                    <span id="nominatednames"> </span>
                                                                                </div>
                                                                                <div class="col-sm-6">
                                                                                    <input type="text" name="employeeName" id="employeeName" style="margin-top:15px" placeholder="Name" class="form-control" value="<?= $_SESSION["ses_EmployeeName"] ?>" readonly required>
                                                                                </div>

                                                                                <div class="col-sm-6">
                                                                                    <input type="text" name="employeeDesignation" id="employeeDesignation" style="margin-top:15px" placeholder="Designation" class="form-control" value="<?= $_SESSION["ses_TitleTypeId"] ?>" onchange="fieldLengthValidatorForNYS(this);" required>
                                                                                </div>
                                                                                <div class="col-sm-6">
                                                                                    <input type="text" name="employeeWorkPhone" id="employeeWorkPhone" style="margin-top:15px" placeholder="Phone" class="form-control" value="<?= $_SESSION["ses_WorkPhoneNo"] ?>" onchange="return formatPhone(this);" onblur="return validatenumber(this)" onkeypress="return isNumberKey(event)" required>
                                                                                </div>
                                                                                <div class="col-sm-6">
                                                                                    <input type="text" name="workLocation" id="workLocation" style="margin-top:15px" placeholder="Work Location" class="form-control" value="<?= $_SESSION["ses_Location"] ?>" readonly required>
                                                                                </div>
                                                                                <div class="col-sm-6">
                                                                                    <input type="text" name="reportingManager" id="reportingManager" style="margin-top:15px" placeholder="Reporting Manager" class="form-control"  value="<?= $_SESSION["ses_ReportsTo"] ?>" readonly required>
                                                                                </div>
                                                                                <div class="col-sm-6">
                                                                                    <input type="text" name="nearestAirport" id="nearestAirport" style="margin-top:15px" placeholder="Nearest Airport" class="form-control" onchange="fieldLengthValidatorForNYS(this);" required>
                                                                                </div>

                                                                            </div>
                                                                            <div class="col-sm-12" style="display: none;" id="passportAvailDiv">
                                                                                <div class="col-sm-11"><br>
                                                                                    <div class="checkbox">

                                                                                        <input type="checkbox" value="passport" name="passportAvailability[]" id="passportAvailability"/> <label>Passport Availibility</label>
                                                                                    </div>
                                                                                </div>
                                                                            </div><br>
                                                                            <div class="col-sm-12">
                                                                                <div class="col-sm-11">
                                                                                    <label for="male"> Why do you want to attend the event?</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-12">
                                                                                <div class="col-sm-12">
                                                                                    <textarea id="goalsOfAttending" name="goalsOfAttending" style="margin-top:15px" class="form-control" placeholder=" Explain your goals and intent on attending the event to help us better understand" rows="5" onchange="fieldLengthValidatorForNYS(this);" required></textarea>
                                                                                    <button data-loading-text="<i class='fa fa-spinner fa-spin '></i> Processing please wait..."  style="margin-top:15px;" class="form-control btn btn-primary disabled" placeholder="Submit Nomination" type="submit" name="btnNominateSubmit" id="btnNominateSubmit" ><span id="nominationBtnLabel">Submit Nomination</span> </button>
                                                                                   
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </form>
                                                                </div>


                                                                <div id="menu1" class="tab-pane fade" >
                                                                    <form method="post" action="" id="frmNominateCollegue" name="frmNominateCollegue" onsubmit="hideNominateCollegueButton();">
                                                                        <input type="hidden" name="nominateCollegueConferenceId" id="nominateCollegueConferenceId"/>
                                                                         <input type="hidden" name="nominateCollegueConferenceCountry" id="nominateCollegueConferenceCountry"/>
                                                                        <input type="hidden" name="activityFlag" id="activityFlag" value="Add"/>
                                                                        <div class="form-group">

<?php if ($nominationCollegueSubmittedId != '0' && $nominationCollegueResultMessage != '') { ?>
                                                                                <div class="row">
                                                                                    <div class="col-sm-12">
    <?php if ($nominationCollegueSubmittedId > 0) { ?>
                                                                                            <div class="alert alert-success alert-dismissable fade in">
                                                                                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                                                                <strong><?php echo $nominationCollegueResultMessage; ?></strong>

                                                                                            </div>
    <?php } else { ?>

                                                                                            <div class="alert alert-danger alert-dismissable fade in">
                                                                                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                                                                <strong><?php echo $nominationCollegueResultMessage; ?></strong>

                                                                                            </div>

    <?php } ?>
                                                                                    </div>
                                                                                </div>
<?php } ?>

                                                                            <style>
                                                                                .suggestionList:hover {
                                                                                    background-color: #3498db;
                                                                                }
                                                                                .suggestionList1{

                                                                                    position: absolute;
                                                                                    z-index: 3;
                                                                                    background-color: white;}
                                                                                </style>

                                                                                <div class="row"  style="display: none;" id="nomineeCollegueValidationRow">
                                                                                <div class="col-sm-12">
                                                                                    <div class="alert alert-danger alert-dismissable fade in">
                                                                                        <a href="#" class="close" aria-label="close" onclick="closeNominateCollegueErrorMsg();">&times;</a>
                                                                                        <strong><span id="errorMessageNominateCollegue"></span></strong>

                                                                                    </div>
                                                                                </div>
                                                                            </div>


                                                                            <div class="col-sm-12">
                                                                                <div class="col-sm-12"><p class="methodText">Have a colleague who deserves to be at this event? Then, provide us the following details to nominate your colleague so that we can analyze and see the possibility.</p></div>
                                                                                <div class="col-sm-12">
                                                                                    <input type="hidden" name="coolegueLoginId" id="coolegueLoginId" required/>
                                                                                    <input type="hidden" name="coolegueEmail" id="coolegueEmail" required/>
                                                                                    <input type="hidden" name="coolegueId" id="coolegueId"/>

                                                                                    <input type="text" style="margin-top:15px" placeholder="Employee Name"  class="form-control" id="collegueName" ng-model="collegueName.searchKey" name="collegueName" ng-keyup="getEmployeesList()" required>
                                                                                    <!-- <input type="text" class="searchInput" placeholder="Search by name or email" ng-model="employeeName.searchKey" ng-keyup="getEmployeesList()"> -->

                                                                                    <div class="suggestionList1">
                                                                                        <div ng-repeat="employee in employees" ng-model="employee" ng-click="selectEmploye(employee)">
                                                                                            <a href="" class="suggestionList">{{employee.EmployeeName}} </a>
                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                                <div class="col-sm-12">
                                                                                    <textarea style="margin-top:15px" class="form-control" placeholder="Please let us know why you would like to nominate your colleague --Explain your goals and intent on attending the event to help us better understand" rows="5" id="nominateCollegueDescription" name="nominateCollegueDescription" required onchange="fieldLengthValidatorForNAC(this);"></textarea>
                                                                                    <!-- <input type="submit" style="margin-top:15px;" class="btn btn-primary col-md-12" style="margin-left:5px;" name="btnNominateCollegueSubmit" id="btnNominateCollegueSubmit" tabindex="3" onclick="return myFun();" value="Submit Nomination"/> -->
                                                                                    <button data-loading-text="<i class='fa fa-spinner fa-spin '></i>Processing please wait..." type="submit" style="margin-top:15px;" class="btn btn-primary col-md-12" style="margin-left:5px;" name="btnNominateCollegueSubmit" id="btnNominateCollegueSubmit" tabindex="3" onclick="return addCollegueNomination();"><span id="collegueNominationButtonSpan">Submit Nomination</span></button>	
                                                                                   
                                                                                </div>
                                                                                <!-- <div class="col-sm-12"><br>
                                                                                     <p class="methodText">All the Names of the Employees which you have been nominated for this event are here, including your comments and also you can update your details if you need.</p>
                                                                               </div>
                                                                                 <div class="col-sm-12"> -->
                                                                                <span id="collegueNominationsCommentsTable"></span>
                                                                                <!-- </div> -->

                                                                            </div>
                                                                        </div>     
                                                                    </form>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!--- modal up1--->


                                    <div id="myModalpast" class="modal fade" role="dialog" data-backdrop="static">
                                        <div class="modal-dialog" style="margin-left:-280px;">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h3 class="modal-title heavy">Event Completed</h3>
                                                </div>
                                                <div class="modal-body">
                                                    <p class="methodText">The event is already competed, nominations have been closed, thank you.</p>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                    <!-- modal past--->
                                </div>
                                <br>

                                <!--modal comments-->
                                <div class="modal fade" id="myModal" role="dialog">
                                    <div class="modal-dialog" style="margin-left:-280px;">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Comments</h4>
                                            </div>
                                            <div class="modal-body">
                                                <p>Here are the comments</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>

                            </section>



<?php include '../footer.php'; ?>
                            </body>
                            </html>