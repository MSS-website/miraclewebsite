<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<head>

<!-- Meta-Information -->
<title>Digital Summit | Student</title>

<!-- Vendor: Bootstrap Stylesheets http://getbootstrap.com -->
<link rel="stylesheet" href="css/bootstrap.min.css">
   <?php
			include '../../config/Locations.php';
			include '../config/DS17Config.php';
			?>
 <link rel="shortcut icon"
	href="<?= AMAZON_URL ?>/ds17/student/images/favicon.ico"
	type="image/x-icon">
<!-- Our Website CSS Styles -->
<link rel="stylesheet" href="css/icons.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel='stylesheet prefetch'
	href=' https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
	
	
	 <?php
		$labelText = 'Browse';
		session_start ();
		if (isset ( $_SESSION ['ses_DS17_USER_EMAIL'] ) && $_SESSION ['ses_DS17_USER_EMAIL'] != "") {
		} else {
			header ( 'Location: login.php' );
		}
		$result = isset ( $_GET ["result"] ) ? $_GET ["result"] : '';
		function random_string($length) {
			$key = '';
			$keys = array_merge ( range ( 0, 9 ), range ( 'a', 'z' ) );
			
			for($i = 0; $i < $length; $i ++) {
				$key .= $keys [array_rand ( $keys )];
			}
			
			return $key;
		}
		include '../../config/MailConfig.php';
		require '../../config/ConnectionProvider.php';
		
		$currentUserEmail = $_SESSION ['ses_DS17_USER_EMAIL'];
		
		$Query = "SELECT Id,ApplyingFor,Graduation,GraduationPer,PostGraduation,PostGraduationPer,Experience,Salary,SkillSet,PositionDesc,RandomKey,AttachmentLocation FROM tblDs17JobRegistrations WHERE Email=:tempEmail";
		$stmt = $conn->prepare ( $Query );
		$stmt->bindParam ( ':tempEmail', $currentUserEmail );
		$stmt->execute ();
		$jobFairId = 0;
		
		$applyingFor = "";
		$graduation = "";
		$graduationPer = "";
		$postGraduation = "";
		$postGraduationPer = "";
		
		$experience = "";
		$salary = "";
		$skillSet = "";
		$positionDesc = "";
		$attachmentLocation = "";
		$randomKey = "";
		
		if ($row = $stmt->fetch ( PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT )) {
			$jobFairId = $row [0];
			$applyingFor = $row [1];
			$graduation = $row [2];
			$graduationPer = $row [3];
			$postGraduation = $row [4];
			$postGraduationPer = $row [5];
			
			$experience = $row [6];
			$salary = $row [7];
			$skillSet = $row [8];
			$positionDesc = $row [9];
			$randomKey = $row [10];
			$attachmentLocation = $row [11];
			
			$IsFileExisted = false;
			
			if ($attachmentLocation != '')
				if (file_exists ( $attachmentLocation )) {
					$IsFileExisted = true;
					$labelText = 'Replace Resume';
				}
		}
		
		if (isset ( $_POST ['btnJobFairUpdate'] )) {
			try {
				$frmApplyingFor = isset ( $_POST ["applyingFor"] ) ? $_POST ["applyingFor"] : '';
				$frmGraduation = isset ( $_POST ["graduation"] ) ? $_POST ["graduation"] : '';
				$frmGraduationPer = isset ( $_POST ["graduationPer"] ) ? $_POST ["graduationPer"] : '';
				$frmPostGraduation = isset ( $_POST ["postGraduation"] ) ? $_POST ["postGraduation"] : '';
				$frmPostGraduationPer = isset ( $_POST ["postGraduationPer"] ) ? $_POST ["postGraduationPer"] : '';
				$frmExperience = isset ( $_POST ["experience"] ) ? $_POST ["experience"] : '';
				$frmSalary = isset ( $_POST ["salary"] ) ? $_POST ["salary"] : '';
				$frmSkillSet = isset ( $_POST ["skillSet"] ) ? $_POST ["skillSet"] : '';
				$frmDescription = isset ( $_POST ["description"] ) ? $_POST ["description"] : '';
				$frmLocDestination = isset ( $_POST ["locDestination"] ) ? $_POST ["locDestination"] : '';
				$DS17_JOB_APPLICANT_RESUMES = '/usr/local/WebsiteFiles/DS17/JobFair/';
				$randomKey = random_string ( 8 );
				if (strlen ( $frmLocDestination ) > 0) {
					$latestresume = $_FILES ['fileToUpload'];
					
					$latest_resume_Path = $DS17_JOB_APPLICANT_RESUMES . date ( 'Y' ) . '/' . date ( 'F' ) . '/' . date ( "d" ) . '/' . $randomKey . '/';
					
					if (file_exists ( $latest_resume_Path )) {
					} else {
						if (! mkdir ( $latest_resume_Path, 0777, true )) {
							die ( 'Failed to create folders...' );
						}
					}
					$latest_resume_rootPath = $latest_resume_Path . $latestresume ['name'];
					$latest_resume_filname = $latestresume ['name'];
					require '../classes/FileUploadUtilityDS17.php';
					$fileUpload = new FileUploadUtilityDS17 ();
					$resultMessage = $fileUpload->fileMove ( $latestresume, $latest_resume_Path, $randomKey );
				}
				
				$sql = "UPDATE tblDs17JobRegistrations SET ApplyingFor=:tempApplyingFor,Graduation=:tempGraduation,GraduationPer=:tempGraduationPer,
PostGraduation=:tempPostGraduation,PostGraduationPer=:tempPostGraduationPer,Experience=:tempExperience,
Salary=:tempSalary,SkillSet=:tempSkillSet,PositionDesc=:tempPositionDesc,AttachmentLocation=:tempAttachmentLocation WHERE Email=:tempEmail AND Id=:tempId";
				
				$stmt = $conn->prepare ( $sql );
				
				$stmt->bindParam ( ':tempApplyingFor', $frmApplyingFor );
				$stmt->bindParam ( ':tempGraduation', $frmGraduation );
				$stmt->bindParam ( ':tempGraduationPer', $frmGraduationPer );
				$stmt->bindParam ( ':tempPostGraduation', $frmPostGraduation );
				$stmt->bindParam ( ':tempPostGraduationPer', $frmPostGraduationPer );
				$stmt->bindParam ( ':tempExperience', $frmExperience );
				$stmt->bindParam ( ':tempSalary', $frmSalary );
				$stmt->bindParam ( ':tempSkillSet', $frmSkillSet );
				$stmt->bindParam ( ':tempPositionDesc', $frmDescription );
				if(strlen ( $frmLocDestination ) > 0){
					$stmt->bindParam ( ':tempAttachmentLocation', $latest_resume_rootPath);
				}else{
					$stmt->bindParam ( ':tempAttachmentLocation', $attachmentLocation);
				}
				
				$stmt->bindParam ( ':tempEmail', $currentUserEmail );
				$stmt->bindParam ( ':tempId', $jobFairId );
				
				if ($stmt->execute ()) {
					
					$result = "success";
				} else {
					
					$result = "fail";
				}
				// echo 'self--'.$_SERVER['PHP_SELF'];
				header ( 'Location: ' . $_SERVER ['PHP_SELF'] . '?result=' . $result );
			} catch ( Exception $exc ) {
				echo $exc->getMessage ();
				$result = "fail";
			}
		}
		
		if (isset ( $_POST ['btnJobFairAdd'] )) {
			try {
				$frmApplyingFor = isset ( $_POST ["applyingFor"] ) ? $_POST ["applyingFor"] : '';
				$frmGraduation = isset ( $_POST ["graduation"] ) ? $_POST ["graduation"] : '';
				$frmGraduationPer = isset ( $_POST ["graduationPer"] ) ? $_POST ["graduationPer"] : '';
				$frmPostGraduation = isset ( $_POST ["postGraduation"] ) ? $_POST ["postGraduation"] : '';
				$frmPostGraduationPer = isset ( $_POST ["postGraduationPer"] ) ? $_POST ["postGraduationPer"] : '';
				$frmExperience = isset ( $_POST ["experience"] ) ? $_POST ["experience"] : '';
				$frmSalary = isset ( $_POST ["salary"] ) ? $_POST ["salary"] : '';
				$frmSkillSet = isset ( $_POST ["skillSet"] ) ? $_POST ["skillSet"] : '';
				$frmDescription = isset ( $_POST ["description"] ) ? $_POST ["description"] : '';
				$userEmail = $_SESSION ["ses_DS17_USER_EMAIL"];
				$currentUserFirstName = $_SESSION ["ses_DS17_USER_FIRST_NAME"];
				$currentUserLastName = $_SESSION ["ses_DS17_USER_LAST_NAME"];
				$currentUserMobileNumber = $_SESSION ["ses_DS17_USER_MOBILE"];
				$currentUserAltMobileNumber = $_SESSION ["ses_DS17_USER_ALT_MOBILE"];
				$currentUserStreet = $_SESSION ["ses_DS17_USER_STREET"];
				$currentUserCountry = $_SESSION ["ses_DS17_USER_COUNTRY"];
				$currentUserState = $_SESSION ["ses_DS17_USER_STATE"];
				$currentUserDistrict = $_SESSION ["ses_DS17_USER_DISTRICT"];
				$currentUserPostalCode = $_SESSION ["ses_DS17_USER_POSTALCODE"];
				$currentUserGender = $_SESSION ["ses_DS17_USER_GENDER"];
				$currentUserDesignation = $_SESSION ["ses_DS17_USER_DESIGNATION"];
				$currentAttendeeType = $_SESSION ["ses_DS17_USER_ATTENDEE_TYPE"];
				$currentUserCollegeName = $_SESSION ["ses_DS17_USER_COLLEGENAME"];
				$currentUserOtherCollegeName = $_SESSION ["ses_DS17_USER_OTHERCOLLEGENAME"];
				
				$sql = "INSERT INTO tblDs17JobRegistrations
	(
	FirstName,
	LastName,
	Email,
	PhoneNumber,
	AltPhoneNumber,
	Gender,
	Designation,
	AttendeeType,
	ApplyingFor,
	Graduation,
	GraduationPer,
	PostGraduation,
	PostGraduationPer,
	Experience,
	Salary,
	SkillSet,
	PositionDesc,
	Street,
	Country,
	State,
	District,
	PostalCode,
	AttachmentLocation,
	RandomKey,
	CollegeName,
	OtherCollegeName
	)
	VALUES
	(
	:tempFirstName,
	:tempLastName,
	:tempEmail,
	:tempMobileNumber,
	:tempAltMobileNumber,
	:tempGender,
	:tempDesignation,
	:tempAttendeeType,
	:tempApplyingFor,
	:tempGraduation,
	:tempGraduationPer,
	:tempPostGraduation,
	:tempPostGraduationPer,
	:tempExperience,
	:tempSalary,
	:tempSkillSet,
	:tempPositionDesc,
	:tempStreet,
	:tempCountry,
	:tempState,
	:tempDistrict,
	:tempPostalCode,
	:tempAttachmentLocation,
	:tempRandomKey,
	:tempCollegeName,
	:tempOtherCollegeName
	)";
				$DS17_JOB_APPLICANT_RESUMES = '/usr/local/WebsiteFiles/DS17/JobFair/';
				$latestresume = $_FILES ['fileToUpload'];
				$randomKey = random_string ( 8 );
				$latest_resume_Path = $DS17_JOB_APPLICANT_RESUMES . date ( 'Y' ) . '/' . date ( 'F' ) . '/' . date ( "d" ) . '/' . $randomKey . '/';
				
				if (file_exists ( $latest_resume_Path )) {
				} else {
					if (! mkdir ( $latest_resume_Path, 0777, true )) {
						die ( 'Failed to create folders...' );
					}
				}
				$latest_resume_rootPath = $latest_resume_Path . $latestresume ['name'];
				$latest_resume_filname = $latestresume ['name'];
				
				require '../classes/FileUploadUtilityDS17.php';
				$fileUpload = new FileUploadUtilityDS17 ();
				
				$resultMessage = $fileUpload->fileMove ( $latestresume, $latest_resume_Path, $randomKey );
				
				$stmt = $conn->prepare ( $sql );
				
				$stmt->bindParam ( ':tempFirstName', $currentUserFirstName );
				$stmt->bindParam ( ':tempLastName', $currentUserLastName );
				$stmt->bindParam ( ':tempEmail', $userEmail );
				$stmt->bindParam ( ':tempMobileNumber', $currentUserMobileNumber );
				$stmt->bindParam ( ':tempAltMobileNumber', $currentUserAltMobileNumber );
				$stmt->bindParam ( ':tempGender', $currentUserGender );
				$stmt->bindParam ( ':tempDesignation', $currentUserDesignation );
				$stmt->bindParam ( ':tempAttendeeType', $currentAttendeeType );
				$stmt->bindParam ( ':tempApplyingFor', $frmApplyingFor );
				$stmt->bindParam ( ':tempGraduation', $frmGraduation );
				$stmt->bindParam ( ':tempGraduationPer', $frmGraduationPer );
				$stmt->bindParam ( ':tempPostGraduation', $frmPostGraduation );
				$stmt->bindParam ( ':tempPostGraduationPer', $frmPostGraduationPer );
				$stmt->bindParam ( ':tempExperience', $frmExperience );
				$stmt->bindParam ( ':tempSalary', $frmSalary );
				$stmt->bindParam ( ':tempSkillSet', $frmSkillSet );
				$stmt->bindParam ( ':tempPositionDesc', $frmDescription );
				$stmt->bindParam ( ':tempStreet', $currentUserStreet );
				$stmt->bindParam ( ':tempCountry', $currentUserCountry );
				$stmt->bindParam ( ':tempState', $currentUserState );
				$stmt->bindParam ( ':tempDistrict', $currentUserDistrict );
				$stmt->bindParam ( ':tempPostalCode', $currentUserPostalCode );
				$stmt->bindParam ( ':tempAttachmentLocation', $latest_resume_rootPath );
				$stmt->bindParam ( ':tempRandomKey', $randomKey );
				$stmt->bindParam ( ':tempCollegeName', $currentUserCollegeName );
				$stmt->bindParam ( ':tempOtherCollegeName', $currentUserOtherCollegeName );
				
				if ($stmt->execute ()) {
					$result = "success";
					require '../classes/DS17MailManager.php';
					$mailmanager = new DS17MailManager ();
					$candidateName=$currentUserFirstName.' '.$currentUserLastName;
					$actualPassword="";
					$countUserRecords=1;
					$mailmanager->sendDs17FobFairAcknowledge($candidateName,$userEmail,$actualPassword,$countUserRecords);
				} else {
					$result = "fail";
				}
				header ( 'Location: ' . $_SERVER ['PHP_SELF'] . '?result=' . $result );
			} catch ( Exception $exc ) {
				$exc->getMessage ();
				$result = "fail";
			}
		}
		
		?>
<style>
.session-heading {
	border-bottom: 4px solid #D53058;
	margin: 0% 0;
}

.session-heading p {
	color: #467f1a;
	font-size: 30px !important;
}

.side-menus nav>ul>li.menu-item-has-children>ul {
	padding: 22px 0 !important;
}

.bg-overlay {
	background:
		url('<?= AMAZON_URL ?>/ds17/student/images/techtalks-bg-new.png');
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center center;
	color: #fff;
	width: 100%;
	padding-top: 50px;
}

.btn-file {
	position: relative !important;
	overflow: hidden !important;
	top: -10px;
	height: 52px;
}

.btn-file input[type=file] {
	position: absolute !important;
	top: 0 !important;
	right: 0 !important;
	min-width: 100% !important;
	min-height: 100% !important;
	font-size: 100px !important;
	text-align: right !important;
	filter: alpha(opacity = 0) !important;
	opacity: 0 !important;
	outline: none !important;
	background: #fff !important;
	cursor: inherit !important;
	display: block !important
}

#msform .action-button-previous {
	width: 100px;
	background: #0d4165;
}

#msform .action-button-previous {
	width: 100px;
	font-weight: bold;
	color: white;
	border: 0 none;
	border-radius: 25px;
	cursor: pointer;
	padding: 10px 5px;
	margin: 10px 5px;
}

#msform .action-button-previous:hover, #msform .action-button-previous:focus
	{
	box-shadow: 0 0 0 2px white, 0 0 0 3px #C5C5F1;
}

#msform .action-button {
	width: 100px;
	background: #d43058;
}

#msform .action-button {
	width: 100px;
	background: #d43058;
	font-weight: bold;
	color: white;
	border: 0 none;
	border-radius: 25px;
	cursor: pointer;
	padding: 10px 5px;
	margin: 10px 5px;
}

#msform .action-button:hover, #msform .action-button:focus {
	box-shadow: 0 0 0 2px white, 0 0 0 3px #ee0979;
}

.side-menu-sec {
	top: 0px !important;
}
</style>
</head>
<body>
	<!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

	<!-- Our Website Content Goes Here -->
<?php include 'student-header.php'; ?>

<div class="main-content">
		<div class="panel-content">
			<div class="main-title-sec">
				<div class="row">
					<div class="col-md-6 column">
						<div class="heading-profile">
							<h2>
								<strong>Job Fair</strong>
							</h2>
							<span></span>
						</div>

					</div>

				</div>
			</div>
			<!-- Heading Sec -->
			<ul class="breadcrumbs">
				<li>December 13th-15th, 2017 Digital Valley(Vizag)</li>

			</ul>
			<!-- Panel Content -->
			<input type="hidden" name="readApplyingFor" id="readApplyingFor"
				value="<?= $applyingFor ?>" /> <input type="hidden"
				name="readGraduation" id="readGraduation" value="<?= $graduation?>" />
			<input type="hidden" name="readPostGraduation"
				id="readPostGraduation" value="<?= $postGraduation?>" /> <input
				type="hidden" name="readExperience" id="readExperience"
				value="<?= $experience?>" />
			<div class="row">
				<div class="col-sm-8">
					<form class="" id="msform" style="margin-bottom: 20px" action=""
						method="post" enctype="multipart/form-data">

						<input type="hidden" id="jobFairId" name="jobFairId"
							value="<?= $jobFairId?>" />
						<fieldset id='academicDetailsFieldSet'>

							<h2 class="fs-title"
								style="position: relative; color: #222222; font-size: 35px; font-weight: 700; z-index: 10; padding-bottom: 15px; margin-bottom: 25px; text-transform: capitalize;">Applicant
								Details</h2>
                     <?php
																					
																					if ($result == 'success') {
																						echo '<div class="alert alert-success alert-dismissable" id="successMessageDiv">
        		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        		<strong>Thank you for submiting Job Fair registartion details.</strong>
                  </div></span>';
																					} else if ($result == 'fail') {
																						echo '<div class="alert alert-danger alert-dismissable" id="failMessageDiv">
        		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        		<strong>Oops! Something went wrong please try again!</strong>
                  </div>';
																					}
																					?>
													 <div class="col-sm-12">
								<div class="alert alert-danger" id='alertMessageDiv'
									style="display: none;">
									<button type="button" class="close"
										onclick="closeAlertMessage()" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									<span id="alertMessageSpan"></span>
								</div>
							</div>
							<div class="col-sm-12" style="padding: 0">
								<select class="form-control" name="applyingFor" id="applyingFor"
									required="required">
									<option value="">Select Position</option>
									<option value="Freshers(Software Trainee)">Freshers(Software
										Trainee)</option>
									<option value="Freshers(Marketing)">Freshers(Marketing)</option>
									<option value="Freshers(HR)">Freshers(HR)</option>
									<option value="Freshers(Accounting)">Freshers(Accounting)</option>
									<option value="Software Engineers">Software Engineers</option>
									<option value=".NET Developers">.NET Developers</option>
									<option value="PHP Developers">PHP Developers</option>
									<option value="Creative Designer(PhotoShop)">Creative
										Designer(PhotoShop)</option>
									<option value="Network Engineers">Network Engineers</option>
									<option value="System Administrators">System Administrators</option>
									<option value="Database Administrators">Database Administrators</option>
									<option value="QA Trainee">QA Trainee</option>
                                <option value="SAP SD/LO Trainee">SAP SD/LO Trainee</option>
                                <option value="SAP MM/WM Trainee">SAP MM/WM Trainee</option>
                                <option value="SAP PP/PM Trainee">SAP PP/PM Trainee</option>
                                <option value="SAP FICO Trainee">SAP FICO Trainee</option>
                                <option value="SAP BI Trainee">SAP BI Trainee</option>
                                <option value="SAP BO Trainee">SAP BO Trainee</option>
                                <option value="SAP Basis Trainee">SAP Basis Trainee</option>
                                <option value="SAP Security Trainee">SAP Security Trainee</option>
                                <option value="SAP PI Trainee">SAP PI Trainee</option>
                                <option value="BusinessDevelopmentExecutive(BDE)">BusinessDevelopmentExecutive(BDE)</option>
                                <option value="US-IT Staffing">US-IT Staffing</option>
                                <option value="US-IT Recruitment">US-IT Recruitment</option>
                                <option value="Content Analyst">Content Analyst</option>
                                <option value="Social Media Analyst">Social Media Analyst</option>
                                <option value="Technical Content Writer">Technical Content Writer</option>
                                <option value="Sr.Talend Developer">Sr.Talend Developer</option>
                                <option value="Sr.EDI Business Analyst">Sr.EDI Business Analyst</option>
                                <option value="Sr. Oracle Developer">Sr. Oracle Developer</option>
                                <option value="Lead designer - BI Analytics">Lead designer - BI Analytics</option>
                                <option value="QA Analyst">QA Analyst</option>
                                <option value="SAP ABAP Consultant">SAP ABAP Consultant</option>
                                <option value="SAP MM/WM Consultant">SAP MM/WM Consultant</option>
                                <option value="SAP PP/APO Consultant">SAP PP/APO Consultant</option>
                                <option value="SAP PI/PO Consultant">SAP PI/PO Consultant</option>
                                <option value="SAP HCM/US Payroll Consultant">SAP HCM/US Payroll Consultant</option>
								</select> <br>
							</div>
							<div class="row">
								<div class="col-sm-6" style="margin-left: 0">
									<select class="form-control" id="graduation" name="graduation"
										required="required">
										<option value="" selected="selected">Graduation</option>
										<option value="B.E/B.Tech">B.E/B.Tech</option>
										<option value="B.Sc">B.Sc</option>
										<option value="B.Com">B.Com</option>
										<option value="BA">BA</option>
										<option value="BBM">BBM</option>
									</select> <br>
								</div>
								<div class="col-sm-6" style="margin-right: 0">
									<input type="text" id="graduationPer" class="form-control"
										name="graduationPer" placeholder="Graduation Percentage"
										required="true" value="<?= $graduationPer?>" onchange="jobFairDashboardFieldLengthValidator(this);"> <br>
								</div>
							</div>
							
							<div class="row">
								<div class="col-sm-6" style="margin-left: 0">
									<select class="form-control" id="postGraduation"
										name="postGraduation">
										<option value="" selected="selected">Post Graduation</option>
										<option value="M.E/M.Tech">M.E/M.Tech</option>
										<option value="M.C.A">M.C.A</option>
										<option value="M.Sc">M.Sc</option>
										<option value="MBA">MBA</option>
										<option value="MHRM">MHRM</option>
										<option value="PGDBM">PGDBM</option>
									</select>
								</div>
								<div class="col-sm-6" style="margin-right: 0">
									<input type="text" id="postGraduationPer" class="form-control"
										name="postGraduationPer"
										placeholder="Post Graduation Percentage"
										value="<?= $postGraduationPer ?>" onchange="jobFairDashboardFieldLengthValidator(this);"> <br>
								</div>
							</div>
						
							<div class="row">
								<div class="col-sm-6" style="margin-left: 0">
									<select class="form-control" id="experience" name="experience"
										required="required">
										<option value="" selected="selected">Years of Experience</option>
										<option value="0-2 Years">0-2 Years</option>
										<option value="3 Years">3 Years</option>
										<option value="4 Years">4 Years</option>
										<option value="5 Years">5 Years</option>
										<option value="6 Years">6 Years</option>
										<option value="7 Years">7 Years</option>
										<option value="8 Years">8 Years</option>
										<option value="9 Years">9 Years</option>
										<option value="10 Years">10 Years</option>
										<option value="10+ Years">10+ Years</option>

									</select> <br>
								</div>
								<div class="col-sm-6" style="margin-right: 0">
									<input type="text" id="salary" class="form-control"
										name="salary" placeholder="Last drawn monthly salary"
										 value="<?= $salary?>" onchange="jobFairDashboardFieldLengthValidator(this);"> <br>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-5" style="margin-left: 0">
									<div class="input-group">
										<span class="input-group-btn"><span
											class="btn btn-danger btn-file"
											style="padding: 7px 25px !important; height: 34px; margin-top: 10px;">
                       <?php echo $labelText?>
                        <input id="fileToUpload" multiple=""
												name="fileToUpload" onchange="putFileName()" tabindex="6"
												type="file">
										</span></span> <input class="form-control" id="locDestination"
											name="locDestination" placeholder="Upload Resume"
											readonly="true" required="required" type="text">
									</div>

									<br>
								</div>
								<div class="col-sm-1" style="margin-left: 0;margin-top: 9px;">
								      <?php if($IsFileExisted){ ?>
                                             <a
									href='download-resume-attachment.php?id=<?=$jobFairId?>&randomKey=<?=$randomKey?>'>
									<i class="fa fa-download" aria-hidden="true"></i>
								</a>
                                             <?php } ?>
								</div>
                  <div class="col-sm-6" style="margin-right: 0">
									<input type="text" id="skillSet" class="form-control"
										name="skillSet"
										placeholder="Skill Set: Example:J2Se,J2EE,HTML,Jquery,AngularJs,NodeJs"
										required="true" onchange="jobFairDashboardFieldLengthValidator(this);"
										value="<?= $skillSet?>"> <br>
								</div>
							</div>
							<div class="col-sm-12" style="padding: 0">
								<textarea
									placeholder="Describe about position you are looking for"
									class="form-control" id="description" name="description"
									rows="3" onchange="jobFairDashboardFieldLengthValidator(this);"><?= $positionDesc?></textarea>
								<br>
							</div>
							
							<div class="col-sm-12" style="padding: 0">
                        
                      <?php if($jobFairId>0){?>
                       <center>
									<button type="submit" class="action-button pull-right"
										name="btnJobFairUpdate" id="btnJobFairUpdate"
										onclick="return loadJobFairDashBoardUpdateButton();"
										data-loading-text="<i   class='fa fa-spinner fa-spin'>
										</i>Loading..">Update
									</button>
								</center>
                       
                       <?php } else {?>
                       <center>
									<button type="submit" class="action-button pull-right"
										name="btnJobFairAdd" id="btnJobFairAdd"
										onclick="return loadJobFairDashBoardSubmitButton();"
										data-loading-text="<i   class='fa fa-spinner fa-spin'>
										</i>Loading..">Submit
									</button>
								</center>
                       <?php }?>
                     </div>

						</fieldset>
					</form>
				</div>
				<div class="col-sm-4">
					<div class="cultural-bg" style="margin-top: 25px;">
						<div class="container bg-overlay">
							<div class="row text-center">
								<h2 style="color: #ffffff;">Spread the word!</h2>
								<center>
									<h5
										style="color: #ffffff; padding: 20px 20px; line-height: 1.6 !important;">Share
										Digital Summit 2017 with the world on Facebook - help spread
										the digital fever!</h5>
								</center>
								<a href="https://www.facebook.com/DigitalSummitVizag/"
									class="theme-btn btn-style-one center"
									style="padding: 5px 10px !important; margin: 23px 0 40px 129px; text-transform: none;">Share
									Now</a>
							</div>
						</div>

					</div>
				</div>
			</div>

		</div>




	</div>
	<!-- Vendor: Javascripts -->
	<script src="js/jquery-2.1.3.js"></script>
	<script src="js/bootstrap.min.js"></script>

	<script
		src="https://maps.google.com/maps/api/js?key=AIzaSyDrlCWSCEGTYat1yFIybvtjXe6v24wXY04"
		async="" type="text/javascript">
</script>

	<!-- Our Website Javascripts -->
	<script src="js/app.js"></script>
	<script src="js/common.js"></script>
	<script src="js/widgets.js"></script>
	<script
			src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
		<script
			src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
		<script
			src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
	<script>
   $( document ).ready(function() {
	  
	   
	   $("#applyingFor").val($("#readApplyingFor").val());
	   $("#graduation").val($("#readGraduation").val());
	   $("#postGraduation").val($("#readPostGraduation").val());
	   $("#experience").val($("#readExperience").val());


		  
	   
	});</script>
	<script src="js/jobfair-dashboard-validations.js?ver=2.0"></script>

</body>
</html>