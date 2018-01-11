<?php
function random_string($length) {
	$key = '';
	$keys = array_merge(range(0, 9), range('a', 'z'));
	
	for ($i = 0; $i < $length; $i++) {
		$key .= $keys[array_rand($keys)];
	}
	
	return $key;
}

$isSuccess = '';

  $resultMessage = "";
if(isset($_POST['btnSubmit'])){
//require '../config/DbController.php';
//$conn = new DbController();
     require '../config/ConnectionProvider.php';
try{
    //$conn->connectToDatabase();
    
	$tempCaptcha_code= isset($_POST["frmCaptcha_code"]) ? $_POST["frmCaptcha_code"] : '';
	
	$sessionCaptcha = $_SESSION['captcha_code'];
	echo 'frm--'.$tempCaptcha_code.'-->';
	
	echo 'ses--'.$sessionCaptcha;
	
	/*//if(strcmp($sessionCaptcha, trim($tempCaptcha_code)) != 0){
	if($tempCaptcha_code != $sessionCaptcha){
		$resultMessage='<div class="alert alert-danger alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">x</a>
The captcha code does not match!
</div>';// Captcha verification is incorrect.		
	}else{// Captcha verification is Correct. Final Code Execute here!		
		//$resultMessage="The Validation code has been matched.";
		
		*/
		
		
	if(trim($tempCaptcha_code) == trim($sessionCaptcha)){
		
if(! get_magic_quotes_gpc() )
{
	$rfirstname = addslashes ($_POST['firstname']);
    $rlastname = addslashes ($_POST['lastname']);
    $rorganization = addslashes ($_POST['organization']);
    $rdesignation = addslashes ($_POST['designation']);
    $remail = addslashes ($_POST['email']);
    $rphone = addslashes ($_POST['phone']);
    $remployeeName = addslashes ($_POST['employeeName']);
    $remployeeId = addslashes ($_POST['employeeId']);
    $rlocation = addslashes ($_POST['location']);
    //$remployeePeriod = addslashes ($_POST['employeePeriod']);
    $rempDesignation = addslashes ($_POST['empDesignation']);
    $rdepartment = addslashes ($_POST['department']);
    //$rreasonsToLeave = addslashes ($_POST['reasonsToLeave']);
    $rstartDate = addslashes ($_POST['startDate']);
    $rendDate = addslashes ($_POST['endDate']);
    $raddExperience=addslashes ($_POST['addExperience']);
    $rnewCompanyName= addslashes ($_POST['endCustomerName']);
    $rremuneration= addslashes ($_POST['remuneration']);
    $rreasonForLeaving=addslashes ($_POST['reasonForLeaving']);
}
else
{
    $rfirstname = $_POST['firstname'];
    $rlastname = $_POST['lastname'];
    $rorganization = $_POST['organization'];
    $rdesignation = $_POST['designation'];
    $remail = $_POST['email'];
    $rphone = $_POST['phone'];
    $remployeeName = $_POST['employeeName'];
    $remployeeId = $_POST['employeeId'];
    $rlocation = $_POST['location'];
   // $remployeePeriod = $_POST['employeePeriod'];
    $rempDesignation = $_POST['empDesignation'];
    $rdepartment = $_POST['department'];
    $rstartDate = $_POST['startDate'];
    $rendDate = $_POST['endDate'];
    $raddExperience= $_POST['addExperience'];
    $rnewCompanyName= $_POST['endCustomerName'];
    
    $rremuneration= addslashes ($_POST['remuneration']);
    $rreasonForLeaving=addslashes ($_POST['reasonForLeaving']);
   // $rreasonsToLeave = $_POST['reasonsToLeave'];
}
//$originalstdate = $rstartDate;
$rstartDate = date("y-m-d", strtotime($rstartDate));
$rendDate = date("y-m-d", strtotime($rendDate));
$rflag = 1;






/*$sql = "insert into tblEmpVerfication(FirstName,LastName,Organization,Designation,EmailId,Phone,EmployeeName,EmployeeId,EmploymentLocation,EmployeeDesignation,Department,EmploymentStarted,EmploymentEnded,Experience,NewCompanyName,Remuneration,ReasonForLeaving,ExperienceLetterFileName,LatestResumeFileName,ExperienceLetterPath,LatestResumePath,RandomKey,LOCFileName,LOCPath".
        ") values(:rfirstname,:rlastname,:rorganization,:rdesignation,:remail,:rphone,:remployeeName,".
        ":remployeeId,:rlocation,:rempDesignation,:rdepartment,CAST( :rstartDate AS DATE),CAST(:rendDate AS DATE),:raddExperience,:rnewCompanyName,:rremuneration,:rreasonForLeaving,:expLetterFilname,:latestResumeFilname,:expLetterRootPath,:latestResumeRootPath,:randomKey,:letterOfAgreementFileName,:letterOfAgreementPath)";
*/
$sql = "insert into tblEmpVerfication(FirstName,LastName,Organization,Designation,EmailId,Phone,EmployeeName,EmployeeId,EmploymentLocation,EmployeeDesignation,Department,EmploymentStarted,EmploymentEnded,Experience,NewCompanyName,Remuneration,ReasonForLeaving,ExperienceLetterFileName,LatestResumeFileName,ExperienceLetterPath,LatestResumePath,RandomKey,LOCFileName,LOCPath,LatestPaySlipFileName,LatestPaySlipPath".
		") values(:rfirstname,:rlastname,:rorganization,:rdesignation,:remail,:rphone,:remployeeName,".
		":remployeeId,:rlocation,:rempDesignation,:rdepartment,CAST( :rstartDate AS DATE),CAST(:rendDate AS DATE),:raddExperience,:rnewCompanyName,:rremuneration,:rreasonForLeaving,:expLetterFilname,:latestResumeFilname,:expLetterRootPath,:latestResumeRootPath,:randomKey,:letterOfAgreementFileName,:letterOfAgreementPath,:latestPaySlipFileName,:latestPaySlipPath)";

	//--- File upload code satrts
	
	$expletter = $_FILES['experienceLetter'];
	$latestresume = $_FILES['latestResume'];
	$letterOfAgreement = $_FILES['letterOfAgreement'];
	$latestPayslip= $_FILES['latestPayslip'];
	
	
	$exp_Letter_Path = VERIFY_EMPLOYEE_EXPERIENCE_LETTERS. date('Y') . '/' . date('F') . '/' . date("d") . '/';
	if (file_exists($exp_Letter_Path)) {
		//  echo "The file $per_Path exists";
	} else {
		if (!mkdir($exp_Letter_Path, 0777, true)) {
			die('Failed to create folders...');
		}
	}
	$exp_letter_rootPath = $exp_Letter_Path. $expletter['name'];
	$exp_letter_filname = $expletter['name'];
	$randomKey = random_string(8);
	
	$latest_resume_Path = VERIFY_EMPLOYEE_LATEST_RESUMES. date('Y') . '/' . date('F') . '/' . date("d") . '/';
	if (file_exists($latest_resume_Path)) {
		//  echo "The file $per_Path exists";
	} else {
		if (!mkdir($latest_resume_Path, 0777, true)) {
			die('Failed to create folders...');
		}
	}
	$latest_resume_rootPath = $latest_resume_Path. $latestresume['name'];
	$latest_resume_filname = $latestresume['name'];
	
	
	
	$letterOfAgreement_Path = VERIFY_EMPLOYEE_LOC. date('Y') . '/' . date('F') . '/' . date("d") . '/';
	if (file_exists($letterOfAgreement_Path)) {
		//  echo "The file $per_Path exists";
	} else {
		if (!mkdir($letterOfAgreement_Path, 0777, true)) {
			die('Failed to create folders...');
		}
	}
	$letterOfAgreement_rootPath = $letterOfAgreement_Path. $letterOfAgreement['name'];
	$letterOfAgreement_filname = $letterOfAgreement['name'];
	
	// Payslip
	
	$latest_PaySlip_Path = VERIFY_EMPLOYEE_PAYSLIP. date('Y') . '/' . date('F') . '/' . date("d") . '/';
	if (file_exists($latest_PaySlip_Path)) {
		//  echo "The file $per_Path exists";
	} else {
		if (!mkdir($latest_PaySlip_Path, 0777, true)) {
			die('Failed to create folders...');
		}
	}
	$latest_PaySlip_RootPath= $latest_PaySlip_Path. $latestPayslip['name'];
	$latest_PaySlip_FileName= $latestPayslip['name'];
	
	
	
	require '../classes/FileUploadUtility.php';
	$fileUpload = new FileUploadUtility();
	
	$resultMessage = $fileUpload->fileMove($expletter, $exp_Letter_Path);
	
	$resultMessage = $fileUpload->fileMove($latestresume, $latest_resume_Path);
	
	$resultMessage = $fileUpload->fileMove($letterOfAgreement, $letterOfAgreement_Path);
	
	$resultMessage = $fileUpload->fileMove($latestPayslip, $latest_PaySlip_Path);
	//--- File upload code ends
	
	
	
    $stmt = $conn->prepare($sql);
     $stmt->bindParam(':rfirstname', $rfirstname);
      $stmt->bindParam(':rlastname', $rlastname);
       $stmt->bindParam(':rorganization', $rorganization);
        $stmt->bindParam(':rdesignation', $rdesignation);
         $stmt->bindParam(':remail', $remail);
          $stmt->bindParam(':rphone', $rphone);
           $stmt->bindParam(':remployeeName', $remployeeName);
            $stmt->bindParam(':remployeeId', $remployeeId);
            $stmt->bindParam(':rlocation', $rlocation);
            $stmt->bindParam(':rempDesignation', $rempDesignation);
            $stmt->bindParam(':rdepartment', $rdepartment);
            $stmt->bindParam(':rstartDate', $rstartDate);
            $stmt->bindParam(':rendDate', $rendDate);
            //New fileds
            $stmt->bindParam(':raddExperience', $raddExperience);
            $stmt->bindParam(':rnewCompanyName', $rnewCompanyName);
            
            $stmt->bindParam(':rremuneration', $rremuneration);
            $stmt->bindParam(':rreasonForLeaving', $rreasonForLeaving);
            
            $stmt->bindParam(':expLetterFilname', $exp_letter_filname);
            $stmt->bindParam(':latestResumeFilname', $latest_resume_filname);
            $stmt->bindParam(':expLetterRootPath', $exp_letter_rootPath);
            $stmt->bindParam(':latestResumeRootPath', $latest_resume_rootPath);
            $stmt->bindParam(':randomKey', $randomKey);
            
            $stmt->bindParam(':letterOfAgreementFileName', $letterOfAgreement_filname);
            $stmt->bindParam(':letterOfAgreementPath', $letterOfAgreement_rootPath);
            
            $stmt->bindParam(':latestPaySlipFileName', $latest_PaySlip_FileName);    //for payslip file name
            $stmt->bindParam(':latestPaySlipPath', $latest_PaySlip_RootPath);       //for pay slip path
            
            $resultMessage='<div class="alert alert-danger alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">x</a>
Oops! something went wrong.Please try again!
</div>';
            
            
            
            
            $stmt->execute();
            $lastInsertId = $conn->lastInsertId();
             require '../classes/MailManager.php';
                $mailmanager = new MailManager();
                $mailmanager->sendEmployeeVerificationDetails($rfirstname,$rlastname,$rorganization,$rdesignation,$remail,$rphone,$remployeeName,$remployeeId,$rlocation,$rempDesignation,$rdepartment,$raddExperience,$rnewCompanyName,$rremuneration,$rreasonForLeaving,$randomKey,$lastInsertId);
              
                if($rlocation=='United States')
                	$mailmanager->sendEmployeeVerificationAcknowldge($rfirstname, $remail,$remployeeName);   
                else
                	$mailmanager->sendEmployeeVerificationIndiaAcknowldge($rfirstname,$remail,$remployeeName,$randomKey);   
            // echo'<script> window.location="../thank-you.php"; </script> ';
            
              $resultMessage = '<div class="alert alert-success alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">x</a>
Thank you so much for filling the employee verification Form with Miracle Software Systems.
</div>';
            //  $isSuccess='true';
             // header('location:'.$_SERVER['PHP_SELF'].'?isSuccess=true');
//}   
              
           
        }    else {
        	$resultMessage='<div class="alert alert-danger alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">x</a>
The captcha code does not match!
</div>';// Captcha verification is incorrect.
        }
        

}
  catch(Exception $exc){
      $exc->getMessage();
        // $resultMessage= $exc->getMessage();
          $resultMessage="<font color=red size=2px>".$exc.'</font>';
    }

}

?>
