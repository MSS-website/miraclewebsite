<?php
function random_string($length) {
	$key = '';
	$keys = array_merge ( range ( 0, 9 ), range ( 'a', 'z' ) );
	
	for($i = 0; $i < $length; $i ++) {
		$key .= $keys [array_rand ( $keys )];
	}
	
	return $key;
}

$isSuccess = '';

$resultMessage = "";
if (isset ( $_POST ['btnJobFairSubmit'] )) {
	// require '../config/DbController.php';
	// $conn = new DbController();
	require '../config/ConnectionProvider.php';
	require './config/DS17Config.php';
	try {
		// $conn->connectToDatabase();
		
		if (empty ( $_SESSION ['captcha_code'] ) || strcasecmp ( $_SESSION ['captcha_code'], $_POST ['captcha_code'] ) != 0) {
			$resultMessage = "<font color=red size=2px>The Validation code does not match!</font>"; // Captcha verification is incorrect.
		} else { // Captcha verification is Correct. Final Code Execute here!
		       // $resultMessage="The Validation code has been matched.";
			if (! get_magic_quotes_gpc ()) {
				$rfirstname = addslashes ( $_POST ['firstname'] );
				$rlastname= addslashes ( $_POST ['lastname'] );
				$remail= addslashes ( $_POST ['email'] );
				$rphonenumber= addslashes ( $_POST ['phonenumber'] );
				$raltphonenumber= addslashes ( $_POST ['altphonenumber'] );
				$rapplyingFor= addslashes ( $_POST ['applyingFor'] );
				$rgraduation= addslashes ( $_POST ['graduation'] );
				$rgraduationPer= addslashes ( $_POST ['graduationPer'] );
				$rpostGraduation= addslashes ( $_POST ['postGraduation'] );
				$rpostGraduationPer= addslashes ( $_POST ['postGraduationPer'] );
				$rexperience= addslashes ( $_POST ['experience'] );
				$rsalary= addslashes ( $_POST ['salary'] );
				$rskillSet= addslashes ( $_POST ['skillSet'] );
				$rpositionDesc= addslashes ( $_POST ['positionDesc'] );
				$rstreet= addslashes ( $_POST ['street'] );
				$rstate= addslashes ( $_POST ['state'] );
				$rdistrict= addslashes ( $_POST ['district'] );
				$rpostalCode= addslashes ( $_POST ['postalCode'] );
			} else {
				$rfirstname = $_POST ['firstname'] ;
				$rlastname= $_POST ['lastname'] ;
				$remail= $_POST ['email'] ;
				$rphonenumber= $_POST ['phonenumber'] ;
				$raltphonenumber= $_POST ['altphonenumber'] ;
				$rapplyingFor= $_POST ['applyingFor'] ;
				$rgraduation= $_POST ['graduation'] ;
				$rgraduationPer= $_POST ['graduationPer'] ;
				$rpostGraduation= $_POST ['postGraduation'] ;
				$rpostGraduationPer= $_POST ['postGraduationPer'] ;
				$rexperience= $_POST ['experience'] ;
				$rsalary= $_POST ['salary'] ;
				$rskillSet= $_POST ['skillSet'] ;
				$rpositionDesc= $_POST ['positionDesc'] ;
				$rstreet= $_POST ['street'] ;
				$rstate= $_POST ['state'] ;
				$rdistrict= $_POST ['district'] ;
				$rpostalCode= $_POST ['postalCode'] ;
				// $rreasonsToLeave = $_POST['reasonsToLeave'];
			}
			// $originalstdate = $rstartDate;
			
			$rflag = 1;
			
			/*
			 * $sql = "insert into tblEmpVerfication(FirstName,LastName,Organization,Designation,EmailId,Phone,EmployeeName,EmployeeId,EmploymentLocation,EmployeeDesignation,Department,EmploymentStarted,EmploymentEnded,Experience,NewCompanyName,Remuneration,ReasonForLeaving,ExperienceLetterFileName,LatestResumeFileName,ExperienceLetterPath,LatestResumePath,RandomKey,LOCFileName,LOCPath".
			 * ") values(:rfirstname,:rlastname,:rorganization,:rdesignation,:remail,:rphone,:remployeeName,".
			 * ":remployeeId,:rlocation,:rempDesignation,:rdepartment,CAST( :rstartDate AS DATE),CAST(:rendDate AS DATE),:raddExperience,:rnewCompanyName,:rremuneration,:rreasonForLeaving,:expLetterFilname,:latestResumeFilname,:expLetterRootPath,:latestResumeRootPath,:randomKey,:letterOfAgreementFileName,:letterOfAgreementPath)";
			 */
			$sql = "INSERT INTO tblDs17JobRegistrations (FirstName,LastName,Email,PhoneNumber,AltPhoneNumber,ApplyingFor,Graduation,GraduationPer,PostGraduation,PostGraduationPer,Experience,Salary,SkillSet,PositionDesc,Street,State,District,PostalCode,AttachmentLocation,RandomKey) values(:rfirstname,:rlastname,:remail,:rphoneNumber,:raltphonenumber,:rapplyingFor,:rgraduation,:rgraduationPer,:rpostGraduation,:rpostGraduationPer,:rexperience,:rsalary,:rskillSet,:rpositionDesc,:rstreet,:rstate,:rdistrict,:rpostalCode,:rlatestResumeRootPath,:rrandomKey)";
			
			// --- File upload code satrts
			
			$latestresume= $_FILES ['fileToUpload'];
			$latest_resume_Path = DS17_JOB_APPLICANT_RESUMES. date ( 'Y' ) . '/' . date ( 'F' ) . '/' . date ( "d" ) . '/';
			if (file_exists ( $latest_resume_Path )) {
				// echo "The file $per_Path exists";
			} else {
				if (! mkdir ( $latest_resume_Path, 0777, true )) {
					die ( 'Failed to create folders...' );
				}
			}
			$latest_resume_rootPath = $latest_resume_Path . $latestresume ['name'];
			$latest_resume_filname = $latestresume ['name'];
			$randomKey = random_string(8);
			require './classes/FileUploadUtilityDS17.php';
			$fileUpload = new FileUploadUtilityDS17();
			
			$resultMessage = $fileUpload->fileMove ( $latestresume, $latest_resume_Path,$randomKey);
			$stmt = $conn->prepare($sql);
			$stmt->bindParam(':rfirstname', $rfirstname);
			$stmt->bindParam(':rlastname', $rlastname);
			$stmt->bindParam(':rphoneNumber', $rphonenumber);
			$stmt->bindParam(':raltphonenumber', $raltphonenumber);
			$stmt->bindParam(':remail', $remail);
			$stmt->bindParam(':rapplyingFor', $rapplyingFor);
			$stmt->bindParam(':rgraduation', $rgraduation);
			$stmt->bindParam(':rgraduationPer', $rgraduationPer);
			$stmt->bindParam(':rpostGraduation', $rpostGraduation);
			$stmt->bindParam(':rpostGraduationPer', $rpostGraduationPer);
			$stmt->bindParam(':rexperience', $rexperience);
			$stmt->bindParam(':rsalary', $rsalary);
			$stmt->bindParam(':rskillSet', $rskillSet);
			$stmt->bindParam(':rpositionDesc', $rpositionDesc);
			$stmt->bindParam(':rstreet', $rstreet);
			$stmt->bindParam(':rstate', $rstate);
			$stmt->bindParam(':rdistrict', $rdistrict);
			$stmt->bindParam(':rpostalCode', $rpostalCode);
			$stmt->bindParam ( ':rlatestResumeRootPath', $latest_resume_rootPath );
			$stmt->bindParam ( ':rrandomKey', $randomKey);
			/* $stmt->bindParam ( ':randomKey', $randomKey );
			
			$stmt->bindParam ( ':letterOfAgreementFileName', $letterOfAgreement_filname );
			$stmt->bindParam ( ':letterOfAgreementPath', $letterOfAgreement_rootPath );
			
			$stmt->bindParam ( ':latestPaySlipFileName', $latest_PaySlip_FileName ); // for payslip file name
			$stmt->bindParam ( ':latestPaySlipPath', $latest_PaySlip_RootPath ); // for pay slip path
			 */
			$resultMessage = 'Oops! something went wrong.Please try again!';
			
			$stmt->execute ();
			$lastInsertId = $conn->lastInsertId ();
			require 'classes/DS17MailManager.php';
			$mailmanager = new DS17MailManager();
			$mailmanager->sendConfApplicantDetails($rfirstname, $rlastname, $remail, $rphonenumber, $latest_resume_rootPath, $rskillSet, $rpositionDesc, $randomKey, $latest_resume_filname, $rapplyingFor,$rgraduation,$rgraduationPer,$rpostGraduation,$rpostGraduationPer,$rexperience,$rsalary,$lastInsertId);
			$mailmanager->sendConfApplicantAcknowledgement($rfirstname, $rlastname, $remail);
			
		
			// echo'<script> window.location="../thank-you.php"; </script> ';
			
			$resultMessage = "Thank you for showing interest to participate in Digital Job fair.";
			// $isSuccess='true';
			// header('location:'.$_SERVER['PHP_SELF'].'?isSuccess=true');
			// }
		}
	} catch ( Exception $exc ) {
		$exc->getMessage ();
		// $resultMessage= $exc->getMessage();
		$resultMessage = "<font color=red size=2px>" . $exc . '</font>';
	}
}

?>
