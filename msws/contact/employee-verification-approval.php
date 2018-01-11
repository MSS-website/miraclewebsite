<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <META NAME="Title" CONTENT="Home | Miracle">
        <META NAME="Description" CONTENT="Miracle Software Systems, Inc. is a 20 year firm headquartered in Novi ,MI ,USA. Miracle has been a leader in the IT space as Systems Integrator in ERP/B2B/BPM.">
        <META NAME="Robots" CONTENT="INDEX,FOLLOW">
        <title>Employee Verification | Miracle</title>
        <?php 
        
        include '../config/Locations.php';
        
        include '../config/general.php';
        require '../config/ConnectionProvider.php';
        require '../classes/MailManager.php';
        ?>
        
         <link href="../css/bootstrap.min.css" rel="stylesheet">


        <link href="../css/animate.css" rel="stylesheet">
        <link href="../css/main.css" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="../css/default.css" />
        <link rel="stylesheet" type="text/css" href="../css/component.css" />
        <script src="../js/modernizr.custom.js"></script>
<!--          <script src="../js/Validation.js"></script> -->
         <script src="../js/EmployeeVerificationApproval.js"></script>
         
        <!--[if lt IE 6]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
        <link href="../css/font-awesome.min.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="shortcut icon" href="<?= AMAZON_URL ?>/images/favicon.ico">
	<script src="../js/custom.js"></script>
      
         <script type="text/javascript">
            var datefield=document.createElement("input")
            datefield.setAttribute("type", "date")
            if (datefield.type!="date"){ //if browser doesn't support input type="date", load files for jQuery UI Date Picker
                document.write('<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />\n')
                document.write('<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"><\/script>\n')
                document.write('<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"><\/script>\n')
            }
        </script>
          <script>
             if (datefield.type!="date"){ //if browser doesn't support input type="date", initialize date picker widget:
                 jQuery(function($){ //on document.ready
                 	 $('#ver_dateofRelieving').datepicker({dateFormat : 'mm/dd/yy'});
                      $('#ver_lastHikeDate').datepicker({dateFormat : 'mm/dd/yy'});
                      $('#ver_dateofJoining').datepicker({dateFormat : 'mm/dd/yy'});


                      
                 });
             }
             
         </script>
        <style type="text/css">
            .ui-datepicker-calendar tr, .ui-datepicker-calendar td,
            .ui-datepicker-calendar td a, .ui-datepicker-calendar th{font-size:inherit;}
            div.ui-datepicker{font-size:12px;width:inherit;height:inherit;}
            .ui-datepicker-title span{font-size:12px;}
        </style>
        
       
   

        
       
        
        <?php 
        
        //EMP_VERIFICATION_LOGIN_ACCESS
        function checkAuthorization($loginId,$accessLoginIds) {
        	$isAuthorized=false;
        	$myArray = explode(',', $accessLoginIds);
        	
        	for ($i = 0; $i < count($myArray); ++$i) {
        		if($myArray[$i]==$loginId)
        			$isAuthorized = true;
        	}
        	return $isAuthorized;
        	
        }
        
       
        $reqVerificationId = isset($_GET["refId"]) ? $_GET["refId"] : '-1';
        $reqRandomKey=isset($_GET["randomKey"]) ? $_GET["randomKey"] : '';
        $isSuccess=isset($_GET["isSuccess"]) ? $_GET["isSuccess"] : '';
        $operationType=isset($_GET["optType"]) ? $_GET["optType"] : '';
        
        
        
        if($reqVerificationId=='-1'|| $reqRandomKey==''){
        	header('Location: ../index.php?verificationId=-1');
        }
      
        $verificationStatus='';
        $verifiedBy='';
        $verifiedDate='';
        $approvedBy='';
        $approvedDate='';
        $currentUserName='';
        $currentUserEmail='';
        $currentUserWorkphone='';
        
        
        
        $firstName ='';
        $lastName ='';
        $emailId ='';
        $organization ='';
        $designation ='';
        $phone ='';
        $employeeName ='';
        $employeeDesignation ='';
        $department ='';
        $employeeId ='';
        $employmentStarted ='';
        $employmentEnded ='';
        $employmentLocation ='';
        $experience ='';
        $newCompanyName ='';
        
        $remuneration='';
        $reasonForLeaving='';
        
        $act_CandidateName='';
        $act_EmployeeID ='';
        $act_ComapanyName ='';
        $act_CompanyLocation ='';
        $act_CompanyTelNum ='';
        $act_DateofJoining ='';
        $act_DateofRelieving ='';
        $act_Department ='';
        $act_LastDesignation ='';
        $act_Remuneration ='';
        $act_LastHikeDate ='';
        $act_LastHikePercentage ='';
        $act_ReasonforLeaving ='';
        $act_EligibleforRehire ='';
        $act_NatureofSeparation ='';
        $act_AdditionalHRComments ='';
        $act_SkillSet ='';
        $act_RejectedReason = "";
        $submitedDate=''; 
        
        
        $resultMessage = "";
        $isValidUser = 'NO';
        session_start();
        $rempID = isset($_SESSION["ses_EmpVerificationLoginId"]) ? $_SESSION["ses_EmpVerificationLoginId"] : '';
        $currentUserName= isset($_SESSION["ses_VerificationEmployeeName"]) ? $_SESSION["ses_VerificationEmployeeName"] : '';
        $currentUserEmail= isset($_SESSION["ses_VerificationEmployeeEmail"]) ? $_SESSION["ses_VerificationEmployeeEmail"] : '';
        $currentUserWorkphone= isset($_SESSION["ses_VerificationEmployeeWorkphone"]) ? $_SESSION["ses_VerificationEmployeeWorkphone"] : '';
        
        $errorMessage = "";
       // $employeeName = isset($_SESSION["ses_EmployeeName"]) ? $_SESSION["ses_EmployeeName"] : '';
        if($rempID!=''&& !checkAuthorization($rempID,EMP_VERIFICATION_LOGIN_ACCESS)){
        	// session_unset();
        	//session_destroy();
        	$rempID='';
        	$currentUserName= '';
        	$currentUserEmail= '';
        	$currentUserWorkphone='';
        }
        
        $isVerifyAccess=false;
        $isApproveAccess=false;
        if (isset($_POST['btnLoginSubmit'])) {
        	try {
        		$frmLoginId = isset($_POST["loginId"]) ? $_POST["loginId"] : '';
        		$frmPassword = isset($_POST["password"]) ? $_POST["password"] : '';
        		
        		
        		if(checkAuthorization($frmLoginId,EMP_VERIFICATION_LOGIN_ACCESS)){
        			
        			
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
        						$_SESSION["ses_EmpVerificationLoginId"] = $frmLoginId;
        						$_SESSION["ses_VerificationEmployeeName"] = $myArray['FName'].' '.$myArray['MName'].' '.$myArray['LName'];
        						$_SESSION["ses_VerificationEmployeeEmail"] = $myArray['Email1'];
        						$_SESSION["ses_VerificationEmployeeWorkphone"] = $myArray['WorkPhoneNo'];
        						
        						
        						$rempID = $_SESSION["ses_EmpVerificationLoginId"];
        						$currentUserName= $_SESSION["ses_VerificationEmployeeName"];
        						$currentUserEmail= $_SESSION["ses_VerificationEmployeeEmail"];
        						$currentUserWorkphone= $_SESSION["ses_VerificationEmployeeWorkphone"];
        						
        						
        						
        						//$employeeName = $_SESSION["ses_EmployeeName"];
        						
        					} else {
        						
        						if ($myArray['ResultString'] == 'InValidCredentiales') {
        							$errorMessage = INVALID_CREDENTIALES_MESSAGE;
        						}
        						// $resultMessage = "<font color=red size=2px>" . INVALID_CREDENTIALES_MESSAGE . " </font>";
        						else
        							$errorMessage = INACTIVE_MESSAGE;
        							// $resultMessage = "<font color=red size=2px>" . INACTIVE_MESSAGE . " </font>";
        					}
        				}
        				else {
        					$errorMessage = UNAUTHORIZED_ACCESS_MESSAGE;
        					//$resultMessage = "<font color=red size=2px>" . UNAUTHORIZED_ACCESS_MESSAGE . "</font>";
        				}
        				
        			}
        			
        			
        			
        			curl_close($curl);
        			
        		}else {
        			$errorMessage = UNAUTHORIZED_ACCESS_MESSAGE;
        		}
        		
        		
        	} catch (Exception $exc) {
        		
        		
        		$exc->getMessage();
        		$resultMessage = '<font color=red size=2px>' . $exc . '</font>';
        		header('Location: ../back-end-error.php?resultMessage=' . $resultMessage);
        	}
        }
        
        
        
        if($rempID!=''&& checkAuthorization($rempID,EMP_VERIFICATION_LOGIN_ACCESS)){
        	try{
        		//$conn->connectToDatabase();
        		
        		//$conn->selectDatabase();
        		//$selectQuery = "SELECT AttachedName,AttachedLocation FROM tblEmpReferal WHERE Id =$rrefId AND RandomKey= '$rrandomKey'";
        		$selectQuery = "SELECT FirstName,LastName,EmailId,Organization,Designation,Phone,EmployeeName,EmployeeDesignation,Department,EmployeeID,DATE_FORMAT(EmploymentStarted, '%m/%d/%Y'),DATE_FORMAT(EmploymentEnded, '%m/%d/%Y'),EmploymentLocation,Experience,NewCompanyName,Remuneration,ReasonForLeaving,
Act_CandidateName,
Act_EmployeeID,
Act_ComapanyName,
Act_CompanyLocation,
Act_CompanyTelNum,
Act_DateofJoining,
Act_DateofRelieving,

Act_Department,
Act_LastDesignation,
Act_Remuneration,
Act_LastHikeDate,

Act_LastHikePercentage,
Act_ReasonforLeaving,
Act_EligibleforRehire,
Act_NatureofSeparation,
Act_AdditionalHRComments,
Act_SkillSet,VerificationStatus,RejectedReason,DATE_FORMAT(CreatedDate, '%m/%d/%Y'),RejectedBy,RejectedDate FROM tblEmpVerfication WHERE ID =:rrefId AND RandomKey= :rrandomKey";
        		
        		$stmt = $conn->prepare($selectQuery);
        		$stmt->bindParam(':rrefId', $reqVerificationId);
        		$stmt->bindParam(':rrandomKey', $reqRandomKey);
        		$stmt->execute();
        		
        		//  if(mysql_num_rows($selectresponce)>0){
        		//   $row = mysql_fetch_row($selectresponce);
        		if ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
        			
        			
        			//$file_name = $row[0];
        			//$rootPath = $row[1];
        			//ggggggg
        			
        			$firstName = $row[0];
        			$lastName = $row[1];
        			$emailId = $row[2];
        			$organization = $row[3];
        			$designation = $row[4];
        			$phone = $row[5];
        			$employeeName = $row[6];
        			$employeeDesignation = $row[7];
        			$department = $row[8];
        			$employeeId = $row[9];
        			$employmentStarted = $row[10];
        			$employmentEnded = $row[11];
        		    $employmentLocation = $row[12];
        			$experience = $row[13];
        			$newCompanyName = $row[14];
        			
        			$remuneration=$row[15];
        			$reasonForLeaving=$row[16];
        			
        			$act_CandidateName=$row[17];
        			$act_EmployeeID = $row[18];
        			$act_ComapanyName = $row[19];
        			$act_CompanyLocation = $row[20];
        			$act_CompanyTelNum = $row[21];
        			
        			if($row[22]!=null)
        			$act_DateofJoining = $row[22];
        			//$act_DateofJoining =date("m/d/Y", strtotime($row[20]));
        			if($row[23]!=null)
        			$act_DateofRelieving = $row[23];
        			//$act_DateofRelieving=date("m/d/Y", strtotime($row[21]));
        			$act_Department = $row[24];
        			$act_LastDesignation = $row[25];
        			$act_Remuneration = $row[26];
        			if($row[25]!=null)
        			$act_LastHikeDate = $row[27];
        			//if($row[25]!=null)
        			//$act_LastHikeDate= date("m/d/Y", strtotime($row[25]));
        			//$act_LastHikeDate= $row[25];
        			$act_LastHikePercentage = $row[28];
        			$act_ReasonforLeaving = $row[29];
        			$act_EligibleforRehire = $row[30];
        			$act_NatureofSeparation = $row[31];
        			$act_AdditionalHRComments = $row[32];
        			$act_SkillSet = $row[33];
        			$verificationStatus=$row[34];
        			$act_RejectedReason=$row[35];
        			$submitedDate=$row[36];
        		}else {
        			header('Location: ../index.php');
        		}
        		
        	}catch(Exception $exc){
        		$exc->getMessage();
        		$resultMessage= '<font color=red size=2px>'.$exc.'</font>';
        		header('Location: ../back-end-error.php?resultMessage='.$resultMessage);
        	}
        	
        }
        
        
        ?>
<?php 
                                    
                                    //ggggggggggggggggggggg
                                    if(isset($_POST['btnSubmit'])||  isset($_POST['btnApprove'])){
                                    	//echo "you are in btnSubmit  or btnApprove";
                                    	
                                    	
                                    	try{
                                    		
                                    		
                                    		$candidateName= isset($_POST["ver_candidateName"]) ? $_POST["ver_candidateName"] : '';
                                    		$actEmployeeId= isset($_POST["ver_employeeId"]) ? $_POST["ver_employeeId"] : '';
                                    		$companyName= isset($_POST["ver_companyName"]) ? $_POST["ver_companyName"] : '';
                                    		$companyLocation= isset($_POST["ver_companyLocation"]) ? $_POST["ver_companyLocation"] : '';
                                    		$companyTelNo= isset($_POST["ver_companyTelNo"]) ? $_POST["ver_companyTelNo"] : '';
                                    		$dateofJoining= isset($_POST["ver_dateofJoining"]) ? $_POST["ver_dateofJoining"] : '';
                                    		$dateofRelieving= isset($_POST["ver_dateofRelieving"]) ? $_POST["ver_dateofRelieving"] : '';
                                    		$actdepartment= isset($_POST["ver_department"]) ? $_POST["ver_department"] : '';
                                    		$lastDesignation= isset($_POST["ver_lastDesignation"]) ? $_POST["ver_lastDesignation"] : '';
                                    		$remuneration= isset($_POST["ver_remuneration"]) ? $_POST["ver_remuneration"] : '';
                                    		$lastHikeDate= isset($_POST["ver_lastHikeDate"]) ? $_POST["ver_lastHikeDate"] : '';
                                    		$lastHikePercentage= isset($_POST["ver_lastHikePercentage"]) ? $_POST["ver_lastHikePercentage"] : '';
                                    		$reasonforLeaving= isset($_POST["ver_reasonforLeaving"]) ? $_POST["ver_reasonforLeaving"] : '';
                                    		$eligibleforRehire= isset($_POST["ver_eligibleforRehire"]) ? $_POST["ver_eligibleforRehire"] : '';
                                    		$natureofSeparation= isset($_POST["ver_natureofSeparation"]) ? $_POST["ver_natureofSeparation"] : '';
                                    		$additionalHRComments= isset($_POST["ver_additionalHRComments"]) ? $_POST["ver_additionalHRComments"] : '';
                                    		$skillSet= isset($_POST["ver_skillSet"]) ? $_POST["ver_skillSet"] : '';
                                    		$verifiedBy= isset($_POST["verifiedBy"]) ? $_POST["verifiedBy"] : '';
                                    		
                                    		$employerEmail= isset($_POST["employerEmail"]) ? $_POST["employerEmail"] : '';
                                    		$employerName= isset($_POST["employerName"]) ? $_POST["employerName"] : '';
                                    		
                                    		$currentUserName= isset($_POST["currentUserName"]) ? $_POST["currentUserName"] : '';
                                    		$currentUserEmail= isset($_POST["currentUserEmail"]) ? $_POST["currentUserEmail"] : '';
                                    		$currentUserWorkphone= isset($_POST["currentUserWorkphone"]) ? $_POST["currentUserWorkphone"] : '';
                                    		
                                    		
                                    		
                                    		
                                    		
                                    		
                                    		
                                    		
                                    		$dateofJoining= date("Y-m-d", strtotime($dateofJoining));
                                    		$dateofRelieving= date("Y-m-d", strtotime($dateofRelieving));
                                    		$lastHikeDate= date("Y-m-d", strtotime($lastHikeDate));
                                    		
                                    		
                                    		
                                    		//$sql = "UPDATE tblEmpVerfication SET Act_CandidateName=:frmAct_CandidateName,Act_EmployeeID=:frmAct_EmployeeID,Act_ComapanyName=:frmAct_ComapanyName,Act_CompanyLocation=:frmAct_CompanyLocation,Act_CompanyTelNum=:frmAct_CompanyTelNum,Act_DateofJoining=:frmAct_DateofJoining,Act_DateofRelieving=:frmAct_DateofRelieving,Act_Department=:frmAct_Department,Act_LastDesignation=:frmAct_LastDesignation,Act_Remuneration=:frmAct_Remuneration,Act_LastHikeDate=:frmAct_LastHikeDate,Act_LastHikePercentage=:frmAct_LastHikePercentage,Act_ReasonforLeaving=:frmAct_ReasonforLeaving,Act_EligibleforRehire=:frmAct_EligibleforRehire,Act_NatureofSeparation=:frmAct_NatureofSeparation,Act_AdditionalHRComments=:frmAct_AdditionalHRComments,Act_SkillSet=:frmAct_SkillSet WHERE ID =:frmrrefId AND RandomKey= :frmrrandomKey";
                                    		if( isset($_POST['btnSubmit'])){
                                    			$sql = "UPDATE tblEmpVerfication SET Act_CandidateName=:frmAct_CandidateName,Act_EmployeeID=:frmAct_EmployeeID,Act_ComapanyName=:frmAct_ComapanyName,Act_CompanyLocation=:frmAct_CompanyLocation,Act_CompanyTelNum=:frmAct_CompanyTelNum,Act_DateofJoining=:frmAct_DateofJoining,Act_DateofRelieving=:frmAct_DateofRelieving,Act_Department=:frmAct_Department,Act_LastDesignation=:frmAct_LastDesignation,Act_Remuneration=:frmAct_Remuneration,Act_LastHikeDate=:frmAct_LastHikeDate,Act_LastHikePercentage=:frmAct_LastHikePercentage,Act_ReasonforLeaving=:frmAct_ReasonforLeaving,Act_EligibleforRehire=:frmAct_EligibleforRehire,Act_NatureofSeparation=:frmAct_NatureofSeparation,Act_AdditionalHRComments=:frmAct_AdditionalHRComments,Act_SkillSet=:frmAct_SkillSet,VerificationStatus='Verified',VerifiedBy=:frmSubmittedBy,VerifiedDate=NOW() WHERE ID =:frmrrefId AND RandomKey= :frmrrandomKey";
                                    		}else {
                                    			$sql = "UPDATE tblEmpVerfication SET Act_CandidateName=:frmAct_CandidateName,Act_EmployeeID=:frmAct_EmployeeID,Act_ComapanyName=:frmAct_ComapanyName,Act_CompanyLocation=:frmAct_CompanyLocation,Act_CompanyTelNum=:frmAct_CompanyTelNum,Act_DateofJoining=:frmAct_DateofJoining,Act_DateofRelieving=:frmAct_DateofRelieving,Act_Department=:frmAct_Department,Act_LastDesignation=:frmAct_LastDesignation,Act_Remuneration=:frmAct_Remuneration,Act_LastHikeDate=:frmAct_LastHikeDate,Act_LastHikePercentage=:frmAct_LastHikePercentage,Act_ReasonforLeaving=:frmAct_ReasonforLeaving,Act_EligibleforRehire=:frmAct_EligibleforRehire,Act_NatureofSeparation=:frmAct_NatureofSeparation,Act_AdditionalHRComments=:frmAct_AdditionalHRComments,Act_SkillSet=:frmAct_SkillSet,VerificationStatus='Approved',ApprovedBy=:frmSubmittedBy,ApprovedDate=NOW() WHERE ID =:frmrrefId AND RandomKey= :frmrrandomKey";
                                    		}
                                    		//$sql = "UPDATE tblEmpVerfication SET Act_CandidateName=:frmAct_CandidateName,Act_EmployeeID=:frmAct_EmployeeID,Act_ComapanyName=:frmAct_ComapanyName,Act_CompanyLocation=:frmAct_CompanyLocation,Act_CompanyTelNum=:frmAct_CompanyTelNum,Act_DateofJoining=:frmAct_DateofJoining,Act_DateofRelieving=:frmAct_DateofRelieving,Act_Department=:frmAct_Department,Act_LastDesignation=:frmAct_LastDesignation,Act_Remuneration=:frmAct_Remuneration,Act_LastHikeDate=:frmAct_LastHikeDate,Act_LastHikePercentage=:frmAct_LastHikePercentage,Act_ReasonforLeaving=:frmAct_ReasonforLeaving,Act_EligibleforRehire=:frmAct_EligibleforRehire,Act_NatureofSeparation=:frmAct_NatureofSeparation,Act_AdditionalHRComments=:frmAct_AdditionalHRComments,Act_SkillSet=:frmAct_SkillSet,VerificationStatus=:frmVerificationStatus,VerifiedBy=:frmVerifiedBy,VerifiedDate=:frmVerifiedDate,ApprovedBy=:frmApprovedBy,ApprovedDate=:frmApprovedDate WHERE ID =:frmrrefId AND RandomKey= :frmrrandomKey";
                                    		
                                    		
                                    		$stmt = $conn->prepare($sql);
                                    		
                                    		
                                    		$stmt->bindParam(':frmAct_CandidateName', $candidateName);
                                    		$stmt->bindParam(':frmAct_EmployeeID', $actEmployeeId);
                                    		$stmt->bindParam(':frmAct_ComapanyName', $companyName);
                                    		$stmt->bindParam(':frmAct_CompanyLocation', $companyLocation);
                                    		$stmt->bindParam(':frmAct_CompanyTelNum', $companyTelNo);
                                    		$stmt->bindParam(':frmAct_DateofJoining', $dateofJoining);
                                    		$stmt->bindParam(':frmAct_DateofRelieving', $dateofRelieving);
                                    		$stmt->bindParam(':frmAct_Department', $actdepartment);
                                    		$stmt->bindParam(':frmAct_LastDesignation', $lastDesignation);
                                    		$stmt->bindParam(':frmAct_Remuneration', $remuneration);
                                    		$stmt->bindParam(':frmAct_LastHikeDate', $lastHikeDate);
                                    		$stmt->bindParam(':frmAct_LastHikePercentage', $lastHikePercentage);
                                    		$stmt->bindParam(':frmAct_ReasonforLeaving', $reasonforLeaving);
                                    		$stmt->bindParam(':frmAct_EligibleforRehire', $eligibleforRehire);
                                    		$stmt->bindParam(':frmAct_NatureofSeparation', $natureofSeparation);
                                    		$stmt->bindParam(':frmAct_AdditionalHRComments', $additionalHRComments);
                                    		$stmt->bindParam(':frmAct_SkillSet', $skillSet);
                                    		
 	//VerificationStatus=:frmVerificationStatus,VerifiedBy=:frmVerifiedBy,VerifiedDate=:frmVerifiedDate,ApprovedBy=:frmApprovedBy,ApprovedDate=:frmApprovedDate
                                    		/* $verificationStatus='';
                                    		$verifiedBy='';
                                    		$verifiedDate='';
                                    		$approvedBy='';
                                    		$approvedDate=''; */
                                    		
                                    		
                                    	//$stmt->bindParam(':frmVerificationStatus', $verificationStatus);
                                    		$stmt->bindParam(':frmSubmittedBy', $verifiedBy);
                                    		//$stmt->bindParam(':frmVerifiedDate', $verifiedDate);
                                    		////$stmt->bindParam(':frmApprovedBy', $approvedBy);
                                    		//$stmt->bindParam(':frmApprovedDate', $approvedDate);
                                    		
                                    		
                                    		
                                    		$stmt->bindParam(':frmrrefId', $reqVerificationId);
                                    		$stmt->bindParam(':frmrrandomKey', $reqRandomKey);
                                    		
                                    		
                                    		//echo $verificationStatus;
                                    		//echo $approvedDate;
                                    		//echo $verifiedBy;
                                    		if($stmt->execute()){
                                    			$dateofJoining= date("F jS, Y", strtotime($dateofJoining));
                                    			$dateofRelieving= date("F jS, Y", strtotime($dateofRelieving));
                                    			$lastHikeDate= date("F jS, Y", strtotime($lastHikeDate));
                                    		$mailmanager = new MailManager();
                                    		//$mailmanager->submitForApproval($rrefId,$rrandomKey);
                                    		if( isset($_POST['btnSubmit'])){
                                    			
                                    			//$isSuccess = true;
                                    			//$mailmanager->submitForApproval($candidateName,$lastName,$organization,$designation,$emailId,$phone,$employeeName,$employeeId,$employmentLocation,$employeeDesignation,$department,$experience,$newCompanyName,$rrefId,$rrandomKey);
                                    			//$mailmanager->submitForApproval($candidateName,$rrefId,$rrandomKey);
                                    			$mailmanager->employeeVerificationInputsApproval($currentUserName,$currentUserEmail,$currentUserWorkphone,$candidateName,$dateofRelieving,$remuneration,$reasonforLeaving,$additionalHRComments,$actEmployeeId,$actdepartment,$lastHikeDate,$eligibleforRehire,$skillSet,$dateofJoining,$lastDesignation,$lastHikePercentage,$natureofSeparation,$companyName,$companyLocation,$companyTelNo,$reqVerificationId,$reqRandomKey);
                                    		//echo'<script> window.location="../thank-you.php"; </script> ';
                                    		
                                    			
                                    		//	echo'<script> window.location="employee-verification-approval.php?refId='.$reqVerificationId.'&randomKey='.$reqRandomKey.'&isSuccess=true"; </script> ';
                                    			header('location:'.$_SERVER['PHP_SELF'].'?refId='.$reqVerificationId.'&randomKey='.$reqRandomKey.'&isSuccess=true&optType=Submitted'); 
                                    			//header('Location: employee-verification-approval.php?refId='.$reqVerificationId.'&randomKey='.$reqRandomKey.'&isSuccess=true');
                                    		}
                                    		else{
                                    			
                                    			//$mailmanager->submitVerificationDeatils($firstName,$lastName,$organization,$designation,$emailId,$phone,$employeeName,$employeeId,$employmentLocation,$employeeDesignation,$department,$experience,$newCompanyName,$rrefId,$rrandomKey);
                                    			$mailmanager->sendApprovedEmployeeVerificationDeatils($currentUserName,$currentUserEmail,$currentUserWorkphone,$employerEmail,$employerName,$candidateName,$dateofRelieving,$remuneration,$reasonforLeaving,$additionalHRComments,$actEmployeeId,$actdepartment,$lastHikeDate,$eligibleforRehire,$skillSet,$dateofJoining,$lastDesignation,$lastHikePercentage,$natureofSeparation,$companyName,$companyLocation,$companyTelNo,$reqRandomKey);
                                    			
                                    			//echo'<script> window.location="../thank-you.php"; </script> ';
                                    		//	header('Location: employee-verification-approval.php?refId='.$reqVerificationId.'&randomKey='.$reqRandomKey.'&isSuccess=true');
                                    			//echo'<script> window.location="employee-verification-approval.php?refId='.$reqVerificationId.'&randomKey='.$reqRandomKey.'&isSuccess=true"; </script> ';
                                    			header('location:'.$_SERVER['PHP_SELF'].'?refId='.$reqVerificationId.'&randomKey='.$reqRandomKey.'&isSuccess=true&optType=Approved');
                                    			                                    		}
                                    		}
                                    	}
                                    	
                                    	catch(Exception $exc){
                                    		$exc->getMessage();
                                    		// $resultMessage= $exc->getMessage();
                                    		$resultMessage="<font color=red size=2px>".$exc.'</font>';
                                    	}
                                    	
                                    }
                                    
                                    
             /*Reject reason update start*/                   
                                    if(isset($_POST['btnRejectSubmit'])){
                                    	
                                    	try{
                                    		//echo 'san-->1';
                                    		$rejectReason= isset($_POST["rejectReason"]) ? $_POST["rejectReason"] : '';
                                    		$verifiedBy= isset($_POST["verifiedBy"]) ? $_POST["verifiedBy"] : '';
                                    		$employerEmail= isset($_POST["employerEmail"]) ? $_POST["employerEmail"] : '';
                                    		$employerName= isset($_POST["employerName"]) ? $_POST["employerName"] : '';
                                    		$currentUserName= isset($_POST["currentUserName"]) ? $_POST["currentUserName"] : '';
                                    		$currentUserEmail= isset($_POST["currentUserEmail"]) ? $_POST["currentUserEmail"] : '';
                                    		$currentUserWorkphone= isset($_POST["currentUserWorkphone"]) ? $_POST["currentUserWorkphone"] : '';
                                    		//echo 'san-->2';
                                    		$candidateName  =isset($_POST["candidateName"]) ? $_POST["candidateName"] : '';
                                    		$sql = "UPDATE tblEmpVerfication SET VerificationStatus='Rejected',RejectedReason=:frmRejectedReason,RejectedBy=:frmRejectedBy,RejectedDate=NOW() WHERE ID =:frmrrefId AND RandomKey= :frmrrandomKey";
                                    		$stmt = $conn->prepare($sql);
                                    		$stmt->bindParam(':frmRejectedReason', $rejectReason);
                                    		
                                    		$stmt->bindParam(':frmRejectedBy', $verifiedBy);
                                    	    $stmt->bindParam(':frmrrefId', $reqVerificationId);
                                    		$stmt->bindParam(':frmrrandomKey', $reqRandomKey);
                                    	//	echo 'san-->3';
                                    		if($stmt->execute()){
                                    			//echo 'san-->4';
                                    			$mailmanager = new MailManager();
                                    			$mailmanager->sendRejectedEmployeeVerificationDeatils($currentUserName,$currentUserEmail,$currentUserWorkphone,$employerEmail,$employerName,$candidateName,$reqRandomKey,$rejectReason);
                                    				header('location:'.$_SERVER['PHP_SELF'].'?refId='.$reqVerificationId.'&randomKey='.$reqRandomKey.'&isSuccess=true&optType=Rejected');
                                    		//	echo 'san-->5';
                                    		}
                                    	}catch(Exception $exc){
                                    		$exc->getMessage();
                                    		//echo 'exe11-->'.$exc;
                                    		// $resultMessage= $exc->getMessage();
                                    		$resultMessage="<font color=red size=2px>".$exc.'</font>';
                                    	}
                                    	
                                    }
                                    
			/* Reject reason update end */
                                    
                                    
                                    
                                    
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
                    url("<?= AMAZON_URL ?>/images/banners/employeeverification.png");
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
              
            }



        </style>
        
      
    </head><!--/head-->




    
    <?php include '../header.php'; ?>
    <body> 
    
    
    <input type="hidden" name="sessionLoginId"  id="sessionLoginId" value="<?= $rempID ?>"/>
    
   
  
<section>
        <div class="overlay section_bg">
            <div class=" container">
                <div class="row">    
                    <div class="col-sm-7 text-left">  
                        <br><br>
                        <h1 class="micro "><font color="#fff"><strong>Employee Verification</strong></font></h1>

                    </div>
                    <div class="col-sm-5 text-right">
                        <br><br>
                       <ul class="breadcrumb pull-right">
                        <li><a href="../">Home</a></li>
                        <li><a href="../contact">Contact</a></li>
                        <!-- Breadcrumb div starts here --> 
                        <li class="active">Employee Verification</li>
                        <!-- Breadcrumb div Ends here --> 
                    </ul>
                    </div>
                </div><br>
            </div>
        </div>

    </section>
       

         <section class="container">
            <br>
             
          
            <!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->
            
            
            <!-- start login modal -->
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
                                            <input tabindex="1" class="form-control" required="required" placeholder="LoginId" id="loginId" name="loginId"  type="text" onkeydown="return enableLoginEnter(event);"/>
                                            <br>
                                            <input tabindex="2" class="form-control" required="required" placeholder="Password" name="password" id="password"  type="password" onkeydown="return enableLoginEnter(event);"/>

                                        </div>
                                        <div class="col-sm-6"></div>
                                    </div>


     <?php if ($errorMessage != '') { ?>
                                        <div class="row">
                                            <div class="col-sm-12">


                                                <div class="alert alert-danger alert-dismissable fade in">
                                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                    <strong><?= $errorMessage; ?></strong>

                                                </div>


                                            </div>
                                        </div>
<?php } ?>



                                    <hr  class="">

                                    <div class=" row ">

                                        <div class="col-sm-4"> <!--<button class="btn btn-primary col-sm-12 noMarginBottom" type="button" data-dismiss="modal">Log In</button>-->

                                            <button type="submit" tabindex="3" class="btn btn-primary col-sm-12" name="btnLoginSubmit" id="btnLoginSubmit" data-loading-text="<i class='fa fa-spinner fa-spin '></i> loading...">Login</button></div>
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
            <!-- end login modal -->
 

            
            <div class="row">
                
                <div class="col-sm-12">
                    <div class="jumbotron">
                        <div class="row">
                            <div class="col-sm-12">
                                <p>
                                   
                                </p>
                                <div class="whyTitle"><strong>Verfication Agency/Employer Details</strong></div>
                                <p class="methodText">Please enter your details for future reference and contact purposes</p>
                            </div>
                        </div>
                        <!--  <form id="myForm" onsubmit="return validateForm();" action="../thank-you.php"> -->
                        <div id="response">

          

                        </div>
                      
                           
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="fName">First Name</label>
                                        
                                        <input type="text" tabindex="4" class="form-control" required="required" placeholder="First Name" id="firstname" name="firstname" value="<?= $firstName; ?>"  onchange="fieldLengthValidator(this);"  readonly="true">
                                    </div>
                                    <div class="form-group">
                                        <label for="organization">Organization/Verfication Agency Name</label>
                                        <input type="text" tabindex="7" class="form-control" required="required" placeholder="Organization/Verfication Agency Name" id="organization" name="organization"  value="<?= $organization; ?>" onchange="fieldLengthValidator(this);" readonly="true">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="lName">Last Name</label>
                                        <input type="text" tabindex="5" class="form-control" required="required" placeholder="Last Name" id="lastname" name="lastname"  value="<?= $lastName; ?>" onchange="fieldLengthValidator(this);"  readonly="true">
                                    </div>
                                    <div class="form-group">
                                        <label for="designation">Designation</label>
                                        <input type="text" tabindex="8" class="form-control" required="required" placeholder="Designation" name="designation" id="designation" value="<?= $designation; ?>"  onchange="fieldLengthValidator(this);" readonly="true">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="email">Email ID</label>
                                        <input type="text" tabindex="6" class="form-control" required="required" placeholder="Email" id="email" name="email" value="<?= $emailId; ?>"  onchange="return checkEmail(this);fieldLengthValidator(this);" readonly="true">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Phone</label>    
                                        <input type="text" tabindex="9" class="form-control" required="required" onkeypress="return isNumberKey(event)" placeholder="Work Phone" id="phone" name="phone"  value="<?= $phone; ?>" onchange="return formatPhone(this);" onblur="return validatenumber(this)" readonly="true">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="whyTitle"><strong>Employee Details Submitted by Background Verification Agency/Employer </strong></div>
                                    <p class="methodText">Please enter your details of the employee whom you would like to verify</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="eName">Employee Name</label>
                                        <input type="text" tabindex="10" class="form-control" required="required" placeholder="Employee Name" id="employeeName" name="employeeName"   value="<?= $employeeName; ?>" onchange="fieldLengthValidator(this);"  readonly="true">
                                    </div>
                                    <div class="form-group">
                                        <label for="eId">Employee ID</label>
                                        <input type="text" tabindex="13" class="form-control" required="required" onkeypress="return isNumberKey(event)" placeholder="Employee ID" id="employeeId" name="employeeId"   value="<?= $employeeId; ?>" onkeypress="NumericValidation(this);" readonly="true">
                                    </div>
                                    
                                     <div class="form-group">
                                        <label for="location">Employment Location</label>
                                        <input type="text" tabindex="16" class="form-control" required="required" onkeypress="return isNumberKey(event)" placeholder="Employee ID" id="location" name="location"   value="<?= $employmentLocation; ?>" onkeypress="NumericValidation(this);"  readonly="true">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="remuneretion">Remuneretion(CTC)</label>
                                        <input type="text" tabindex="19" class="form-control" required="required"  placeholder="Remuneretion(CTC)" id="remuneretion" name="remuneretion"  value="<?= $remuneration; ?>" onchange="fieldLengthValidator(this);"  readonly="true">
                                    </div>
                                     <br>
                                    
                                    
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="designation">Designation</label>
                                        <input type="text" tabindex="11" class="form-control" required="required" placeholder="Designation" name="empDesignation" id="empDesignation"  value="<?= $employeeDesignation; ?>" onchange="fieldLengthValidator(this);" readonly="true">
                                    </div>
                                    <div class="form-group">
                                        <label for="sDate">Employment Started</label>
                                        <input type="text" tabindex="14" class="form-control" required="required" placeholder="Start Date" id="startDate" name="startDate"   value="<?= $employmentStarted; ?>" readonly="true">
                                    </div>
                                   
                                     <div class="form-group">
                                        <label for="addExperience">Add Experience</label>
                                        <input type="text" tabindex="17" class="form-control" required="required" placeholder="Add Experience" id="addExperience" name="addExperience"   value="<?= $experience; ?>" onchange="fieldLengthValidator(this);" readonly="true">
                                    </div>
                                  
                                   
                                   <div class="form-group">
                                        <label for="reasonforLeaving">Reason for Leaving</label>
                                        
                                   <textarea tabindex="20" rows="2" cols="30" name="reasonforLeaving" id = "reasonforLeaving"  placeholder="Reason for Leaving" class = "form-control" readonly="true">  <?= $reasonForLeaving;?></textarea>
                                    </div>
                                    
                                    
                                     
                                    
                                    
                                    
                                </div>
                                <div class="col-sm-4">
                                   <div class="form-group">
                                        <label for="eDepartment">Department</label>
                                        <input type="text" tabindex="12" class="form-control" required="required" placeholder="Department" name="department" id="department"   value="<?= $department; ?>" onchange="fieldLengthValidator(this);" readonly="true">
                                    </div>
                                    <div class="form-group">
                                        <label for="eDate">Employment Ended</label>
                                        <input type="text" tabindex="15" class="form-control" required="required" placeholder="End Date" id="endDate" name="endDate" value="<?= $employmentEnded; ?>" readonly="true">
                                    </div>
                                     <div class="form-group">
                                        <label for="endCustomerName">New Company Name</label>
                                        <input type="text" tabindex="18" class="form-control" required="required" placeholder="New Company Name" id="endCustomerName" name="endCustomerName"  value="<?= $newCompanyName; ?>" onchange="fieldLengthValidator(this);" readonly="true">
                                    </div>
                                   
                                  <br>
                                    <br>
                                    <div class="form-group">
                                        <label for="submitedDate">Submited Date: </label> <?= $submitedDate; ?>
                                         
                                    </div>
                                    
                                </div>
                            </div>
                            
                            <!-- Download buttons div start -->
                            <div class='row'>
                            
                            <div class="col-sm-3">
                            <div class="input-group">
                                        <div class="input-group-btn">
                                            <div class="btn btn-danger btn-file">

				<a href='../download/EmpVerificationDownload.php?refId=<?= $reqVerificationId; ?>&randomKey=<?= $reqRandomKey; ?>&typeOfFile=ExpLetter' target='_blank' style='color:#ffffff;'><font face='trebuchet ms'><b>Download Experience Letter</b></a>

                                            </div>
                                        </div>
                                      
                                    </div>
                            </div>
                            
                              <div class="col-sm-3">
                            <div class="input-group">
                                        <div class="input-group-btn">
                                            <div class="btn btn-danger btn-file">

				<a href='../download/EmpVerificationDownload.php?refId=<?= $reqVerificationId; ?>&randomKey=<?= $reqRandomKey; ?>&typeOfFile=Resume' target='_blank' class='link2' style='color:#ffffff;'><font face='trebuchet ms'><b>Download Latest Resume</b></a>

                                            </div>
                                        </div>
                                      
                                    </div>
                            </div>
                            
                              <div class="col-sm-3">
                            <div class="input-group">
                                        <div class="input-group-btn">
                                            <div class="btn btn-danger btn-file">

				<a href='../download/EmpVerificationDownload.php?refId=<?= $reqVerificationId; ?>&randomKey=<?= $reqRandomKey; ?>&typeOfFile=Loa' target='_blank' class='link2' style='color:#ffffff;'><font face='trebuchet ms'><b>Download&nbsp;Letter&nbsp;of&nbsp;Authorization</b></a>

                                            </div>
                                        </div>
                                      
                                    </div>
                            </div>
                            <div class="col-sm-3">
                            
                            
                            <div class="input-group">
                                        <div class="input-group-btn">
                                            <div class="btn btn-danger btn-file">

				<a href='../download/EmpVerificationDownload.php?refId=<?= $reqVerificationId; ?>&randomKey=<?= $reqRandomKey; ?>&typeOfFile=PaySlip' target='_blank' class='link2' style='color:#ffffff;'><font face='trebuchet ms'><b>Download&nbsp;Latest&nbsp;PaySlip</b></a>

                                            </div>
                                        </div>
                                      
                                    </div>
                            </div>
                            </div>
                            <!-- Download buttons div end -->
                            
                            <!-- new filed starts from here -->
                              <form id="myForm" action="" method="post" enctype="multipart/form-data">
                        
                          <input type="hidden" name="verifiedBy"  id="verifiedBy" value="<?= $rempID ?>"/>
                          <input type="hidden" name="currentUserName"  id="currentUserName" value="<?= $currentUserName ?>"/>
                          <input type="hidden" name="currentUserEmail"  id="currentUserEmail" value="<?= $currentUserEmail ?>"/>
                          <input type="hidden" name="currentUserWorkphone"  id="currentUserWorkphone" value="<?= $currentUserWorkphone ?>"/>
                          
                          <input type="hidden" name="employerEmail"  id="employerEmail" value="<?= $emailId ?>"/>
                          <input type="hidden" name="employerName"  id="employerName" value="<?= $firstName.' '.$lastName ?>"/>
                           
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="whyTitle"><strong>Verification inputs submitted by MSS India operation team</strong></div>
                                    <p class="methodText">Please enter your details of the employee whom you would like to verify</p>
                                </div>
                            </div>
                             <div class="row">
                             
                             <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="ver_candidateName">Candidate's Name</label>
                                        <input type="text" tabindex="21" class="form-control" required="required" placeholder="Candidate's Name" id="ver_candidateName" name="ver_candidateName" value="<?= $act_CandidateName; ?>" onchange="fieldLengthValidator(this);" >
                                    </div>
                                    <div class="form-group">
                                        <label for="ver_companyLocation">Company Location</label>
                                        <input type="text" tabindex="24" class="form-control" value="Visakhapatnam"  name="ver_companyLocation" id="ver_companyLocation"  value="<?= $act_CompanyLocation; ?>"  onchange="fieldLengthValidator(this);" Readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="ver_dateofRelieving">Date of Relieving(mm/dd/yyyy) </label>
                                        <input type="date" tabindex="27" class="form-control" required="required" placeholder="Date of Relieving "  id="ver_dateofRelieving" name="ver_dateofRelieving" value="<?= $act_DateofRelieving; ?>" onchange="dateOfRelieving();">
                                         </div>
                                         <div class="form-group">
                                        <label for="ver_remuneration">Remuneration</label>
                                        
                                         <textarea tabindex="30" rows="2" cols="31" required="required" name="ver_remuneration" id = "ver_remuneration" placeholder="Remuneration" class = "form-control"  onchange="fieldLengthValidator(this);"><?= $act_Remuneration; ?></textarea>
                                        
                                    </div>
                                     <div class="form-group">
                                        <label for="ver_reasonforLeaving">Reason for Leaving</label>
                                        
                                        <textarea tabindex="33" rows="2" required="required" cols="31" name="ver_reasonforLeaving" id = "ver_reasonforLeaving" placeholder="Reason for Leaving" class = "form-control"  ><?= $act_ReasonforLeaving; ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="ver_additionalHRComments">Additional HR Comments</label>
                                         <textarea tabindex="36"  rows="2" cols="30" name="ver_additionalHRComments" id = "ver_additionalHRComments" placeholder="Additional HR Comments" class = "form-control"  ><?= $act_AdditionalHRComments;?></textarea>
                                        
                                    </div>
                                    
                                        
                                </div>
                                <div class="col-sm-4">
                                    
                                    <div class="form-group">
                                        <label for="ver_employeeId">Employee ID</label>
                                        <input type="text" tabindex="22" class="form-control" required="required" placeholder="Employee ID" id="ver_employeeId" name="ver_employeeId"  value="<?= $act_EmployeeID; ?>" onchange="fieldLengthValidator(this);">
                                    </div>
                                     <div class="form-group">
                                        <label for="ver_companyTelNo">Company Tel. No. </label>
                                        <input type="text" tabindex="25" class="form-control" id="ver_companyTelNo" name="ver_companyTelNo"  value="<?= $act_CompanyTelNum; ?>" onkeypress="return isNumberKey(event)"  onblur="return validatenumber(this)" >
                                    </div>
                                    
                                      <label for="eDepartment">Department</label>
                                     <div class="form-group">
                                    <select class="form-control" id="ver_department" name="ver_department" tabindex="28">
                                       <!--  <option>Delivery</option>
                                        <option>Operations</option>
                                        <option>Recruitment</option>
                                        <option>Sales</option>
                                        <option>Marketing</option>
                                        <option>PMO</option> -->
                                        
                                        <option value="Delivery" <?php if($act_Department=="Delivery") echo "selected"; ?>>Delivery</option>
                                        <option value="Operations" <?php if($act_Department=="Operations") echo "selected"; ?>>Operations</option>
                                        <option value="Recruitment" <?php if($act_Department=="Recruitment") echo "selected"; ?>>Recruitment</option>
                                        <option value="Sales" <?php if($act_Department=="Sales") echo "selected"; ?>>Sales</option>
                                        <option value="Marketing" <?php if($act_Department=="Marketing") echo "selected"; ?>>Marketing</option>
                                        <option value="PMO" <?php if($act_Department=="PMO") echo "selected"; ?>>PMO</option>
                                    </select>
                                     </div>
                                    <div class="form-group">
                                        <label for="ver_lastHikeDate">Last Hike Date(mm/dd/yyyy)</label>
                                       <input  type="date"  tabindex="31" class="form-control" required="required" placeholder="Last Hike Date" id="ver_lastHikeDate" value="<?php echo date($act_LastHikeDate); ?>" name="ver_lastHikeDate" onchange="lastHikeDate();"/>
                                                                          
                                    </div><br>
                                    <div class="form-group">
                                        <label for="ver_eligibleforRehire">Eligible for Rehire</label>
                                       <textarea  rows="2" tabindex="34" cols="30" required="required" name="ver_eligibleforRehire"  id = "ver_eligibleforRehire" placeholder="Eligible for Rehire" class = "form-control"  ><?= $act_EligibleforRehire;?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="ver_skillSet">Skill Set</label>
                                        <textarea  tabindex="37"  rows="2" required="required" cols="30" name="ver_skillSet"  id = "ver_skillSet" placeholder="Skill Set" class = "form-control"  ><?= $act_SkillSet;?></textarea>
                                    </div>
                                     
                                </div>
                                <div class="col-sm-4">
                                <div class="form-group">
                                        <label for="ver_companyName">Company Name</label>
                                      
                                        
                                         <select class="form-control" id="ver_companyName" name="ver_companyName" tabindex="28">
                                      
                                        
                                        <option value="Miracle Software Systems (I) Pvt. Ltd" <?php if($act_ComapanyName=="Miracle Software Systems (I) Pvt. Ltd") echo "selected"; ?>>Miracle Software Systems (I) Pvt. Ltd</option>
                                        <option value="Chikiniki Enterprises(India), Pvt. Ltd" <?php if($act_ComapanyName=="Chikiniki Enterprises(India), Pvt. Ltd") echo "selected"; ?>>Chikiniki Enterprises(India), Pvt. Ltd</option>
                                        <option value="IT Lokam Services(India), Pvt. Ltd" <?php if($act_ComapanyName=="IT Lokam Services(India), Pvt. Ltd") echo "selected"; ?>>IT Lokam Services(India), Pvt. Ltd</option>
                                        
                                 </select>
                                    </div>
                                   
                                    <div class="form-group">
                                        <label for="ver_dateofJoining">Date of Joining(mm/dd/yyyy)</label>    
                                        <input type="date" tabindex="26" class="form-control" required="required" placeholder="Date of Joining" id="ver_dateofJoining" name="ver_dateofJoining" value="<?= $act_DateofJoining; ?>" onchange="dateOfJoining();"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="ver_lastDesignation">Last Designation</label>
                                        <input type="text" tabindex="29" class="form-control" required="required" placeholder="Last Designation" id="ver_lastDesignation" name="ver_lastDesignation"  value="<?= $act_LastDesignation; ?>" onchange="fieldLengthValidator(this);" >
                                    </div>
                                    <div class="form-group">
                                        <label for="ver_lastHikePercentage">Last Hike Percentage</label>
                                       
                                    <input type="text" tabindex="32" class="form-control" required="required" placeholder="Last Hike Percentage" id="ver_lastHikePercentage" name="ver_lastHikePercentage"  value="<?= $act_LastHikePercentage; ?>" onchange="fieldLengthValidator(this);" >
                                   
                                    </div><br>
                                    <div class="form-group">
                                        <label for="ver_natureofSeparation">Nature of Separation (HR Comments)</label>
                                        <textarea  tabindex="35"  rows="2" cols="30" name="ver_natureofSeparation"  id = "ver_natureofSeparation" placeholder="Nature of Separation(HR Comments)" class = "form-control"  ><?= $act_NatureofSeparation;?></textarea>
                                        </div>
                                        <?php if($verificationStatus=='Rejected') { ?>
                                         <div class="form-group">
                                        <label for="ver_natureofSeparation">Rejected Reason</label>
                                        <textarea    rows="2" cols="30" name="ver_rejectedReason"  id = "ver_rejectedReason" placeholder="Rejected Reason" class = "form-control"  ><?= $act_RejectedReason;?></textarea>
                                        </div>
                                    <?php } ?>
                                </div>
                                
         
                             </div>
                             <?php 
                             if(!checkAuthorization($rempID,EMP_VERIFICATION_APROVAL_ACCESS) ){
                             if ($verificationStatus=='Submited'&& checkAuthorization($rempID,EMP_VERIFICATION_LOGIN_ACCESS)) { ?>
                             
                              <div class="row">
                             <div class="col-sm-4"></div>
                             <div class="col-sm-4"><br>
                             <button type="button" tabindex="38" class="btn btn-danger col-sm-12" name="btnReject" id="btnReject" onclick='showRejectModal();'>Reject</button>
                            </div>
                             <div class="col-sm-4"><br>
                             <button type="submit" tabindex="39" class="btn btn-primary col-sm-12" name="btnSubmit" id="btnSubmit">Submit For Approval</button>
                             </div>
                             
                            
                            </div>
                            
                             <?php } 
                             }
                             ?>
                           <?php if ($verificationStatus=='Verified') { ?>
                            <div class="row">
                             <div class="col-sm-8"></div>
                             <div class="col-sm-4">*To be Approved
                            
                            </div></div>
                            <?php } 
                             
                            
                            ?>
                            
                             <?php if (($verificationStatus=='Verified' || $verificationStatus=='Submited')&& checkAuthorization($rempID,EMP_VERIFICATION_APROVAL_ACCESS) ) { ?>
                             <div class="row">
                             <?php if($verificationStatus=='Submited') { ?>
                             <div class="col-sm-4"></div>
                             <div class="col-sm-4"><br>
                            <button type="button" tabindex="38" class="btn btn-danger col-sm-12" name="btnReject" id="btnReject" onclick='showRejectModal();'>Reject</button>
                            </div>
                            <?php } else { ?>
                             <div class="col-sm-8"></div>
                             <?php } ?>
                             <div class="col-sm-4"><br>
                             <button type="submit" tabindex="39" class="btn btn-primary col-sm-12" name="btnApprove" id="btnApprove">Approve</button>
                            </div></div>
                               <?php } else if($verificationStatus=='Approved'){?>
                                 <div class="row">
                             <div class="col-sm-8"></div>
                             <div class="col-sm-4">
                             *Approved
                            </div></div>
                               
                            <?php } else if($verificationStatus=='Rejected'){?>
                             <div class="row">
                             <div class="col-sm-8"></div>
                             <div class="col-sm-4">
                             *Rejected
                            </div></div>
                            <?php } ?>
                             <div class="row">
                                <div class="col-sm-12">
                                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" style="position: static;">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <strong><div id="showAlertText"></div></strong>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                            
                          
                            
                            
                         
                        </form>
                    </div>
                </div>
               
            </div>
            
              <script type="text/javascript">
								function showRejectModal() {
									//$("#myModalRject").show();
									$('#myModalRject').modal('show');
								}
                            </script>
                            
                            <!-- Reject description start -->
                            <div class="row">
                            <form method="post" action="" id="rejectForm" onsubmit="loadRejectbutton();">
                            
                             <input type="hidden" name="verifiedBy" value="<?= $rempID ?>"/>
                          <input type="hidden" name="currentUserName"  value="<?= $currentUserName ?>"/>
                          <input type="hidden" name="currentUserEmail"  value="<?= $currentUserEmail ?>"/>
                          <input type="hidden" name="currentUserWorkphone" value="<?= $currentUserWorkphone ?>"/>
                          
                          <input type="hidden" name="employerEmail" value="<?= $emailId ?>"/>
                          <input type="hidden" name="employerName" value="<?= $firstName.' '.$lastName ?>"/>
                          
                          <input type="hidden" id="candidateName" name="candidateName" value="<?= $employeeName; ?>" />
                            
                                <div class="col-sm-12">
                                    <div class="modal fade" id="myModalRject" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                                        <div class="modal-dialog" style="position: static;">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <h3 class="modal-title " id="memberModalLabel"><strong>Reject Reason</strong> </h3><hr class="noMargin">
                                                    
                                                    <br>
                                                    <div class="row" style="display: none" id="rejectReasonErrorMessageDiv">
                                            <div class="col-sm-12">
                                                <div class="alert alert-danger alert-dismissable fade in">
                                                    <a href="#" class="close" aria-label="close" onclick="closeRejectErrorMsg();">&times;</a>
                                                    <strong><span id="rejectErrorMessage"></span></strong>

                                                </div>
                                            </div>
                                        </div>     
                                                    
                                                    <div class='row'>
                                                    <div class='col-sm-12'>
                                                    <textarea rows="4" id='rejectReason' required="required" class = "form-control" placeholder="Type reason for rejecting !!"  name='rejectReason' cols="68"  tabindex="40" onchange='rejectReasonLengthvalidator(this);'></textarea>
                                                    </div>
                                                    </div>
                                                    
                                                </div>
                                                <div class="modal-footer">
                                                 <div class='row'>
                                                  <div class='col-sm-4'></div>
                                                    <div class='col-sm-4'>
                                                     <button type="submit" tabindex="41" class="btn btn-primary col-sm-12" name="btnRejectSubmit" id="btnRejectSubmit" data-loading-text="<i class='fa fa-spinner fa-spin '></i> loading...">Reject</button>
                                                     </div>
                                                     <div class='col-sm-4'>
                                                      <button type="button" tabindex="42" class="btn btn-danger col-sm-12" data-dismiss="modal">Close</button>
                                                    </div>
                                                    
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                                 </form>
                            </div>
                            <!-- Reject description end -->
            <br>
            
            <!-- Thank you modal start -->
            <div class="modal fade" id="myModal2" role="dialog" style="display: none">
         <div class="modal-dialog" style=" position: static;">
        <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
<h3 class="modal-title " id="memberModalLabel"><strong>Thank You</strong> </h3><hr class="noMargin">        </div>
        <div class="modal-body">
<p class="methodText">
<?php 
if($operationType=='Submitted')
echo 'Verification details has been submitted successfully.';
else if($operationType=='Rejected')
	echo 'Verification details has been rejected successfully.';
else 
	echo 'Verification details has been approved successfully.';

?>


</p>
        </div>
       <div class="col-sm-4">
          <button type="submit"  class="btn btn-primary col-sm-12" data-dismiss="modal" name="btnSubmit3" id="btnSubmit3">
                                            Okay
   </button>
  </div>
        <div class="modal-footer">

        </div>
      </div>
    </div>
  </div>
            <!-- Thank you modal end -->
            
            
            
        </section>
<input type='hidden' id='isSuccess' name='isSuccess' value='<?= $isSuccess ?>'/>



<script> 
  $(window).load(function(){
             if(document.getElementById("sessionLoginId").value==''){
                 $('#myLoginModal').modal('show');
             }else{
                 $('#myLoginModal').modal('hide');
             }

             //alert($('#isSuccess').val());
if($('#isSuccess').val()=='true'){
	$('#myModal2').modal('show');
}else {
	$('#myModal2').modal('hide');
}

             
             // Firefox not supporting to set defualt date in mm/dd/yyyy
             if (datefield.type!="date"){ //if browser doesn't support input type="date", initialize date picker widget:
            	 if($('#ver_dateofRelieving').val()!=''){
					 var ver_dateofRelieving = new Date($('#ver_dateofRelieving').val());
                      $('#ver_dateofRelieving').val( ver_dateofRelieving.getMonth()+1+"/"+ver_dateofRelieving.getDate()+"/"+ver_dateofRelieving.getFullYear());
				}
				if($('#ver_lastHikeDate').val()!=''){
                  var ver_lastHikeDate = new Date($('#ver_lastHikeDate').val());
                  $('#ver_lastHikeDate').val( ver_lastHikeDate.getMonth()+1+"/"+ver_lastHikeDate.getDate()+"/"+ver_lastHikeDate.getFullYear());
				}
				if($('#ver_dateofJoining').val()!=''){
                  var ver_dateofJoining = new Date($('#ver_dateofJoining').val());
                  $('#ver_dateofJoining').val( ver_dateofJoining.getMonth()+1+"/"+ver_dateofJoining.getDate()+"/"+ver_dateofJoining.getFullYear());
				}
             }  



             
     });

  function loadbutton() {
	    if($("#loginId").val().trim().length>0&&$("#password").val().trim().length>0)
	    $("#btnLoginSubmit").button('loading');
	} 


  function loadRejectbutton() {
	    if($("#rejectReason").val().trim().length>0)
	    $("#btnRejectSubmit").button('loading');
	}
            
</script>

        <?php include '../footer.php'; ?>

    </body>
</html>