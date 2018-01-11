<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Digital Summit | JobFair Registration</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<link rel='stylesheet prefetch'
	href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
<link rel="stylesheet" href="css/multistep-style.css">
       <?php
							include '../config/Locations.php';
							include 'config/DS17Config.php';
							?>
      <!--Add Theme Color File To Change Template Color Scheme / Color Scheme Files are Located in root/css/color-themes/ folder-->
<!--<link href="css/color-themes/orange-theme.css" rel="stylesheet">-->
<!--Favicon-->
<link rel="shortcut icon"
	href="<?= AMAZON_URL ?>/ds17/images/favicon.ico" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport"
	content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
<style>
/*dropdown*/
.main-menu .navigation>li.dropdown>a:after {
	font-family: 'FontAwesome';
	content: "\f107";
	position: absolute;
	right: 0px;
	top: 50%;
	margin-top: -15px;
	width: 10px;
	height: 30px;
	display: block;
	line-height: 30px;
	font-size: 14px;
	font-weight: normal;
}

/*dropdown*/
#u_0_0, ._1b90 ._1dro, ._1drm ._1ds4 ._1b90 ._2lqg, _1dro _2ph- clearfix
	{
	background-color: black !important;
}

._1drm ._1ds4 ._1b90 ._2ph-, ._2ph-, ._10b4 {
	background-color: black !important;
}

._1drm ._1ds4 ._1b90 ._1drm {
	background-color: black !important;
}

._2lqg {
	background-color: black !important;
}

._1drm ._1ds4 ._1b90 ._2hkj {
	background-color: black !important;
}

.fb-page, .fb-page:before, .fb-page:after {
	border: 1px solid #000;
}

.fb-page:before, .fb-page:after {
	content: "";
	position: absolute;
	bottom: -3px;
	left: 2px;
	right: 2px;
	height: 1px;
	border-top: none
}

.fb-page:after {
	left: 4px;
	right: 4px;
	bottom: -5px;
	box-shadow: 0 0 2px #ccc
}

a {
	color: #ababab;
}

a:hover {
	color: #ef4048;
}

.checkmark {
	width: 120px;
	margin: 0 auto;
	padding-top: 40px;
}

.path {
	stroke-dasharray: 1000;
	stroke-dashoffset: 0;
	animation: dash 2s ease-in-out;
	-webkit-animation: dash 2s ease-in-out;
}

.spin {
	animation: spin 2s;
	-webkit-animation: spin 2s;
	transform-origin: 50% 50%;
	-webkit-transform-origin: 50% 50%;
}

@
-webkit-keyframes dash { 0% {
	stroke-dashoffset: 1000;
}

100%
{
stroke-dashoffset










:





 





0;
}
}
@
keyframes dash { 0% {
	stroke-dashoffset: 1000;
}

100%
{
stroke-dashoffset










:





 





0;
}
}
@
-webkit-keyframes spin { 0% {
	-webkit-transform: rotate(0deg);
}

100%
{
-webkit-transform










:





 





rotate










(360
deg








);
}
}
@
keyframes spin { 0% {
	-webkit-transform: rotate(0deg);
}

100%
{
-webkit-transform










:





 





rotate










(360
deg








);
}
}
@
-webkit-keyframes text { 0% {
	opacity: 0;
}

100%
{
opacity










:





 





1;
}
@
keyframes text { 0% {
	opacity: 0;
}
100%
{
opacity










:





 





1;
}
}
</style>
<style>
#msform .action-button {
	width: 100px;
	background: #d43058;
}

.lower-box {
	background-color: #e4e4e4;
}

#msform .action-button-previous {
	width: 100px;
	background: #0d4165;
}

.sticky-header .main-menu .navigation>li>a {
	padding: 19px 15px !important;
}

.student {
	width: 80% !important;
}

.student-bg {
	background-color: #232527;
	padding: 22px 11px;
	margin-top: 0px;
	color: #ffffff !important;
}

.innerbox-active {
	border: 4px #949493 solid;
}

#progressbar {
	margin-bottom: -10px !important;
}

#progressbar li:before {
	content: counter(step);
	counter-increment: step;
	width: 50px;
	height: 50px;
	line-height: 48px !important;
	display: block;
	font-size: 25px;
	color: #ffffff;
	background: #232527;
	border-radius: 25px;
	margin: 0 auto 10px auto;
}

.news-style-one .inner-box .lower-box {
	position: relative;
	padding: 25px 28px 25px !important;
}

.form-control {
	border-radius: 0px !important;
	height: 52px !important;
}

#msform input, #msform textarea {
	margin-bottom: 20px !important;
}

#msform fieldset {
	margin: 0px 3px;
	width: auto;
	box-shadow: none;
	padding: 0;
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

.form-control[disabled], .form-control[readonly], fieldset[disabled] .form-control
	{
	background-color: #ffffff !important;
}

.sec-title {
	margin-bottom: -42px !important;
}
</style>
      <?php
						$result = '';
						$isSuccess = "false";
						session_start();
						
						
						function random_string($length) {
							$key = '';
							$keys = array_merge ( range ( 0, 9 ), range ( 'a', 'z' ) );
							
							for($i = 0; $i < $length; $i ++) {
								$key .= $keys [array_rand ( $keys )];
							}
							
							return $key;
						}
						
						include '../config/MailConfig.php';
						require '../config/ConnectionProvider.php';
						
						
						
						if (isset ( $_POST ['btnJobFairSubmit'] )) {
							if (empty ( $_SESSION ['captcha_code'] ) || strcasecmp ( $_SESSION ['captcha_code'], $_POST ['captcha_code'] ) != 0) {
								
								$result = '<div class="alert alert-danger">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong> Sorry </strong> The validation code does not match!.
		</div>';
							} else {
								
								
								try {
									$tempfirstname= isset($_POST["firstName"]) ? $_POST["firstName"] : '';
									$templastname= isset($_POST["lastName"]) ? $_POST["lastName"] : '';
									$tempphonenumber= isset($_POST["mobileNumber"]) ? $_POST["mobileNumber"] : '';
									$tempaltphonenumber= isset($_POST["altMobileNumber"]) ? $_POST["altMobileNumber"] : '';
									$tempemail= isset($_POST["email"]) ? $_POST["email"] : '';
									$tempgender= isset($_POST["gender"]) ? $_POST["gender"] : '';
									$tempdesignation= isset($_POST["designation"]) ? $_POST["designation"] : '';
									$tempattendeeType= isset($_POST["attendeeType"]) ? $_POST["attendeeType"] : '';
									$tempapplyingFor= isset($_POST["applyingFor"]) ? $_POST["applyingFor"] : '';
									$tempgraduation= isset($_POST["graduation"]) ? $_POST["graduation"] : '';
									$tempgraduationPer= isset($_POST["graduationPer"]) ? $_POST["graduationPer"] : '';
									$temppostGraduation= isset($_POST["postGraduation"]) ? $_POST["postGraduation"] : '';
									$temppostGraduationPer= isset($_POST["postGraduationPer"]) ? $_POST["postGraduationPer"] : '';
									$tempexperience= isset($_POST["experience"]) ? $_POST["experience"] : '';
									$tempsalary= isset($_POST["salary"]) ? $_POST["salary"] : '';
									$tempskillSet= isset($_POST["skillSet"]) ? $_POST["skillSet"] : '';
									$temppositionDesc= isset($_POST["description"]) ? $_POST["description"] : '';
									$tempstreet =isset($_POST["street"]) ? $_POST["street"] : '';
									$tempcountry= isset($_POST["country"]) ? $_POST["country"] : '';
									$tempstate= isset($_POST["state"]) ? $_POST["state"] : '';
									$tempdistrict= isset($_POST["district"]) ? $_POST["district"] : '';
									$temppostalCode= isset($_POST["postalCode"]) ? $_POST["postalCode"] : '';
									$tempcollegeName= isset($_POST["collegeName"]) ? $_POST["collegeName"] : '';
									$tempotherCollegeName= isset($_POST["otherCollegeName"]) ? $_POST["otherCollegeName"] : '';
									
									
									
									$countJobFairRecords = 0;
									$Query = "SELECT Id FROM tblDs17JobRegistrations WHERE Email=:tempUseremail";
									$stmt = $conn->prepare ( $Query );
									$stmt->bindParam ( ':tempUseremail', $tempemail);
									$stmt->execute ();
									$countJobFairRecords = $stmt->rowCount ();
									$countUserRecords=0;
									
									if ($countJobFairRecords == 0) {
										$Query = "SELECT Id,Email FROM tblDs17Users WHERE Email=:tempUseremail";
										$stmt = $conn->prepare($Query);
										$stmt->bindParam(':tempUseremail', $tempemail);
										$stmt->execute();
										$countUserRecords= $stmt->rowCount();
										
										
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
										$DS17_JOB_APPLICANT_RESUMES='/usr/local/WebsiteFiles/DS17/JobFair/';
										$latestresume = $_FILES ['fileToUpload'];
										$randomKey = random_string ( 8 );
										$latest_resume_Path = $DS17_JOB_APPLICANT_RESUMES. date ( 'Y' ) . '/' . date ( 'F' ) . '/' . date ( "d" ) . '/'.$randomKey.'/';
										
										if (file_exists ( $latest_resume_Path )) {
										} else {
											if (! mkdir ( $latest_resume_Path, 0777, true )) {
												die ( 'Failed to create folders...' );
											}
										}
										$latest_resume_rootPath = $latest_resume_Path . $latestresume ['name'];
										$latest_resume_filname = $latestresume ['name'];
										
										require './classes/FileUploadUtilityDS17.php';
										$fileUpload = new FileUploadUtilityDS17 ();
										
										$resultMessage = $fileUpload->fileMove ( $latestresume, $latest_resume_Path, $randomKey );
										
										$stmt = $conn->prepare ( $sql );
										
										$stmt->bindParam ( ':tempFirstName', $tempfirstname );
										$stmt->bindParam ( ':tempLastName', $templastname );
										$stmt->bindParam ( ':tempEmail', $tempemail );
										$stmt->bindParam ( ':tempMobileNumber', $tempphonenumber );
										$stmt->bindParam ( ':tempAltMobileNumber', $tempaltphonenumber );
										$stmt->bindParam ( ':tempGender', $tempgender );
										$stmt->bindParam ( ':tempDesignation', $tempdesignation );
										$stmt->bindParam ( ':tempAttendeeType', $tempattendeeType );
										$stmt->bindParam ( ':tempApplyingFor', $tempapplyingFor );
										$stmt->bindParam ( ':tempGraduation', $tempgraduation );
										$stmt->bindParam ( ':tempGraduationPer', $tempgraduationPer );
										$stmt->bindParam ( ':tempPostGraduation', $temppostGraduation );
										$stmt->bindParam ( ':tempPostGraduationPer', $temppostGraduationPer );
										$stmt->bindParam ( ':tempExperience', $tempexperience );
										$stmt->bindParam ( ':tempSalary', $tempsalary );
										$stmt->bindParam ( ':tempSkillSet', $tempskillSet );
										$stmt->bindParam ( ':tempPositionDesc', $temppositionDesc );
										$stmt->bindParam ( ':tempStreet', $tempstreet );
										$stmt->bindParam ( ':tempCountry', $tempcountry );
										$stmt->bindParam ( ':tempState', $tempstate );
										$stmt->bindParam ( ':tempDistrict', $tempdistrict );
										$stmt->bindParam ( ':tempPostalCode', $temppostalCode );
										$stmt->bindParam ( ':tempAttachmentLocation', $latest_resume_rootPath );
										$stmt->bindParam ( ':tempRandomKey', $randomKey );
										$stmt->bindParam ( ':tempCollegeName', $tempcollegeName);
										$stmt->bindParam ( ':tempOtherCollegeName', $tempotherCollegeName);
										
										$resultMessage = 'Oops! something went wrong.Please try again!';
										if ($stmt->execute ()) {
											$lastInsertId = $conn->lastInsertId ();
											
											$isSuccess = 'true';
											$actualPassword="";
											if($countUserRecords==0){
												require 'classes/PasswordUtility.php';
												$passwordutility = new PasswordUtility();
												$actualPassword=random_string(8);
												$enc_pass =$passwordutility->encrypt($actualPassword);
												$userSql ="INSERT INTO tblDs17Users(Email,Password,FirstName,LastName,MobileNumber,
AltMobileNumber,Street,State,District,PostalCode,CollegeName,OtherCollegeName,Gender,AttendeeType,Designation)
VALUES(:tempEmail,:tempPassword,:tempFirstName,:tempLastName,:tempMobileNumber,:tempAltMobileNumber,:tempStreet,:tempState,:tempDistrict,:tempPostalCode,:tempCollegeName,:tempOtherCollegeName,:tempGender,:tempAttendeeType,:tempDesignation)";
												$stmt = $conn->prepare($userSql);
												$stmt->bindParam(':tempEmail', $tempemail);
												$stmt->bindParam(':tempPassword', $enc_pass);
												$stmt->bindParam(':tempFirstName', $tempfirstname);
												$stmt->bindParam(':tempLastName', $templastname);
												$stmt->bindParam(':tempMobileNumber', $tempphonenumber);
												$stmt->bindParam(':tempAltMobileNumber', $tempaltphonenumber);
												$stmt->bindParam(':tempStreet', $tempstreet);
												$stmt->bindParam(':tempState', $tempstate);
												$stmt->bindParam(':tempDistrict', $tempdistrict);
												$stmt->bindParam(':tempPostalCode', $temppostalCode);
												$stmt->bindParam(':tempCollegeName', $tempcollegeName);
												$stmt->bindParam(':tempOtherCollegeName', $tempotherCollegeName);
												$stmt->bindParam(':tempGender', $tempgender);
												$stmt->bindParam(':tempAttendeeType', $tempattendeeType);
												$stmt->bindParam(':tempDesignation', $tempdesignation);
												$stmt->execute();
											}
											$result = '<div class="alert alert-success alert-dismissable">
        		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        		<strong>Thank you</strong> submitting jobfair registartion form.
                  </div>';
											require 'classes/DS17MailManager.php';
											$mailmanager = new DS17MailManager ();
											$candidateName=$tempfirstname.' '.$templastname;
											$mailmanager->sendDs17FobFairAcknowledge($candidateName,$tempemail,$actualPassword,$countUserRecords);
										//	$mailmanager->sendConfApplicantDetails ( $tempfirstname, $templastname, $tempemail, $tempphonenumber, $latest_resume_rootPath, $tempskillSet, $temppositionDesc, $randomKey, $latest_resume_filname, $tempapplyingFor, $tempgraduation, $tempgraduationPer, $temppostGraduation, $temppostGraduationPer, $tempexperience, $tempsalary, $lastInsertId );
											//$mailmanager->sendConfApplicantAcknowledgement ( $tempfirstname, $templastname, $tempemail);
											
											$resultMessage = "Thank you for showing interest to participate in Digital Job fair.";
										} else {
											$result = '<div class="alert alert-danger alert-dismissable">
        		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        		<strong> Oops! </strong> Please try again.
                  </div>';
										}
									} else {
										$isSuccess = 'exists';
										$result = '<div class="alert alert-danger alert-dismissable">
        		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        		<strong> Oops! Your details are existed in our system.</strong> 
                  </div>';
									}
								} catch ( Exception $exc ) {
									
									$exc->getMessage ();
									
									$result = '<div class="alert alert-danger alert-dismissable">
        		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        		<strong>Oops! </strong> ' . $exc . '
                  </div>';
								}
							}
						}
						
						?>
   
   <script type='text/javascript'>
            function refreshCaptcha(){
                var img = document.images['captchaimg'];
                img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
               
                
            }

  </script>
</head>




<body style="font-family: 'Poppins', sans-serif;">
	<div class="page-wrapper">
		<!-- Preloader -->
		<div class="preloader"></div>
		<!-- Main Header -->
    <?php include 'DS17Header.php'; ?>
    <!--End Main Header -->
		<!--End Main Header -->
		<!--Page Title-->
		<section class="page-title" style="background-image:url(<?= AMAZON_URL ?>/ds17/images/header-images/meanhack.jpeg);margin-top:-114px!important;background-position:0% 38%;padding-bottom:15px;">
			<div class="auto-container">
				<div class="inner-box">
					<h1>Job Fair</h1>
					<ul class="bread-crumb">
						<li><a href="events">Events</a></li>
						<li>Job Fair</li>
					</ul>
				</div>
			</div>
		</section>
		<!--End Page Title-->
         <?php
        if ($isSuccess=='true') {
										?>
		<section id="thankYou">

			<div class="row">

				<div class="col-sm-1"></div>

				<div class="col-sm-10">

					<div class="checkmark">

						<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
							xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							viewBox="0 0 161.2 161.2" enable-background="new 0 0 161.2 161.2"
							xml:space="preserve">

              <circle class="path" fill="none" stroke="green"
								stroke-width="4" stroke-miterlimit="10" cx="80.6" cy="80.6"
								r="62.1" />

              <polyline class="path" fill="none" stroke="green"
								stroke-width="6" stroke-linecap="round" stroke-miterlimit="10"
								points="113,52.8

                 74.1,108.4 48.2,86.4 " />

              <circle class="spin" fill="none" stroke="green"
								stroke-width="6" stroke-miterlimit="10"
								stroke-dasharray="12.2175,12.2175" cx="80.6" cy="80.6" r="73.9" />

           </svg>

					</div>

					<center>

						<p2> Thank you for registering in Job fair, <p2> <br>

						<p3>You will shortly receive a email with confirmation.</p3>
					
					</center>

					<br> <br>

				</div>

				<div class="col-sm-1"></div>

			</div>

		</section>
		<?php }else if($isSuccess=='exists'){?>
		<section id="thankYou">

			<div class="row">

				<div class="col-sm-1"></div>

				<div class="col-sm-10">

					<div class="checkmark">

						<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
							xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							viewBox="0 0 161.2 161.2" enable-background="new 0 0 161.2 161.2"
							xml:space="preserve">

              <circle class="path" fill="none" stroke="red"
								stroke-width="4" stroke-miterlimit="10" cx="80.6" cy="80.6"
								r="62.1" />

              <polyline class="path" fill="none" stroke="red"
								stroke-width="6" stroke-linecap="round" stroke-miterlimit="10"
								points="113,52.8

                 74.1,108.4 48.2,86.4 " />

              <circle class="spin" fill="none" stroke="red"
								stroke-width="6" stroke-miterlimit="10"
								stroke-dasharray="12.2175,12.2175" cx="80.6" cy="80.6" r="73.9" />

           </svg>

					</div>

					<center>
						<p2 style="color:red;"> You have already registeted for the Job Fair.<p2> <br>
					
					</center>

					<br> <br>

				</div>

				<div class="col-sm-1"></div>

			</div>

		</section>
			<?php }else{?>
			
	
         <div class="row">
			<div class="col-sm-12">
				<!-- <form class="auto-container" method="POST" action="" style="margin-bottom:20px" id="msform" onsubmit="checkAddressDetails('S')"> -->
				<form class="auto-container" id="msform" action="" 
					enctype="multipart/form-data" style="margin-bottom: 20px"
					method="post">

					<!-- progressbar -->
					<!--<ul id="progressbar">-->
					<!--    <li id='basicDetailsLi' class="active">Personal Details</li>-->
					<!--    <li id='acadamicDetailsLi'>Social Profiles</li>-->
					<!--    <li id='addressDetailsLi' >Account Setup</li>-->
					<!--</ul>-->
					<!-- fieldsets -->
					<fieldset id='basicDetailsFieldSet'>
						<h3 style="text-align: &amp;#x2190;">Step 1 of 3</h3>
						<h2 class="fs-title"
							style="position: relative; color: #222222; font-size: 35px; font-weight: 700; z-index: 10; padding-bottom: 15px; margin-bottom: 25px; text-transform: capitalize;">Tell
							us about yourself!</h2>

						<div class="col-sm-6" style="padding-left: 0">
							<input type="text" name="firstName" id="firstName"
								placeholder="First Name" onchange="jobFairFieldLengthValidator(this);"/>
						</div>
						<div class="col-sm-6" style="padding-right: 0">
							<input type="text" name="lastName" id="lastName"
								placeholder="Last Name" onchange="jobFairFieldLengthValidator(this);"/>
						</div>
						<div class="error" align="justify">
							<span id="firstNameErr"
								style="color: #ee0979; padding: 10px 0px;"></span>
						</div>
						<div class="error" style="margin-left: 6cm">
							<span id="lastNameErr"
								style="color: #ee0979; padding: 10px 0px; margin-left: -30px;"></span>
						</div>
						<div class="col-sm-6" style="padding-left: 0">
							<input type="text" name="mobileNumber" id="mobileNumber"
								placeholder="Mobile Number" onchange="return formatPhone(this);"
								onblur="return validatenumber(this)"
								onkeypress="return isNumberKey(event)" />
						</div>
						<div class="col-sm-6" style="padding-right: 0">
							<input type="text" name="altMobileNumber" id="altMobileNumber"
								placeholder="Alternate Mobile Number"
								onchange="return formatPhone(this);"
								onblur="return validatenumber(this)"
								onkeypress="return isNumberKey(event)" />
						</div>
						<div class="error" align="justify">
							<span id="mobileNumberErr"
								style="color: #ee0979; padding: 0px 0px 30px 0px"></span>
						</div>
						<div class="error" style="margin-left: 6cm">
							<span id="altMobileNumberErr"
								style="color: #ee0979; padding: 0px 0px 30px 0px; margin-left: 80px;"></span>
						</div>
						<div class="col-sm-6" style="padding-left: 0">
							<input type="text" name="email" id="email"
								placeholder="Email Address" onchange="return checkEmail(this);" />
						</div>
						<div class="col-sm-6" style="padding-right: 0">
							<label style="margin-left: -270px;">Select Gender</label> <label
								class="radio-inline" style="margin: 26px;"> <input type="radio"
								name="gender" style="margin-left: -43px;" value="Male"> Male
							</label> <label class="radio-inline"> <input type="radio"
								name="gender" style="margin-left: -49px;" value="Female"> Female
							</label>
						</div>
						<div class="error" align="justify">
							<span id="emailErr"
								style="color: #ee0979; padding: 0px 0px 30px 0px"></span>
						</div>
						<div class="error" style="margin-left: 6cm">
							<span id="genderErr"
								style="color: #ee0979; padding: 0px 0px 30px 0px; margin-left: 4px;"></span>
						</div>
						<div class="col-sm-6" style="padding-left: 0">
							<input type="text" name="designation" id="designation"
								placeholder="Designation" onchange="jobFairFieldLengthValidator(this);"/>
						</div>
						<div class="col-sm-6" style="padding-right: 0">
							<select class="form-control" name="attendeeType" onchange="showCollegeDiv(this);"
								id="attendeeType" onchange="checkAttendeeType(this);">
								<option value="" selected="selected">Attendee type</option>
								<option value="Student">Student</option>
								<option value="IT Professional">IT Professional</option>
								<option value="Government Official">Government Official</option>
								<option value="NRI Delegate">NRI Delegate</option>
								<option value="Other">Other</option>
							</select> <br>
						</div>
						<div class="error" align="justify">
							<span id="designationErr"
								style="color: #ee0979; padding: 0px 0px 30px 0px"></span>
						</div>
						<div class="error" style="margin-left: 6cm">
							<span id="attendeeTypeErr"
								style="color: #ee0979; padding: 0px 0px 30px 0px; margin-left: -70px;"></span>
						</div>
					<div id="collegeDiv">
						<div class="col-sm-12" style="padding:0;padding-bottom: 15px;">
                        <select name="collegeName" id="collegeName" class="form-control" onchange="collegeType(this);">
                          <option value="">Select Your College</option>
                           <option value="Acharya Nagarjuna University">Acharya Nagarjuna University</option>
                           <option value="Aditya College Of Engineering And Technology">Aditya College Of Engineering And Technology</option>
                           <option value="Aditya Engineering College">Aditya Engineering College</option>
                           <option value="Aditya Institute of Technology">Aditya Institute of Technology</option>
                           <option value="Amalapuram Institute Of Management Sciences">Amalapuram Institute Of Management Sciences</option>
                           <option value="Anil Neerukonda Institute Of Technology">Anil Neerukonda Institute Of Technology</option>
                           <option value="Avanthi Institute of Engineering And Technology - Makavarapalem">Avanthi Institute of Engineering And Technology - Makavarapalem</option>
                           <option value="Bullayya College Of Engineering">Bullayya College Of Engineering</option>
                           <option value="BVC College Of Engineering, Rajahmundry">BVC College Of Engineering, Rajahmundry</option>
                           <option value="BVC Engineering College">BVC Engineering College</option>
                           <option value="BVC Institute Of Technology">BVC Institute Of Technology</option>
                           <option value="Coastal Institute Of Technology">Coastal Institute Of Technology</option>
                           <option value="D.M.S.S.V.H College Of Engineering">D.M.S.S.V.H College Of Engineering</option>
                           <option value="Dadi Institute Of Engineering">Dadi Institute Of Engineering</option>
                           <option value="Gitam University">Gitam University</option>
                           <option value="Godavari Institute of Engineering">Godavari Institute of Engineering</option>
                           <option value="Gonna institute of information technology and sciences">Gonna institute of information technology and sciences</option>
                           <option value="Guntur Engineering College">Guntur Engineering College</option>
                           <option value="Indo American Institutions">Indo American Institutions</option>
                           <option value="JNTUK Vizianagaram">JNTUK Vizianagaram</option>
                           <option value="Kakinada institute Of Engineering">Kakinada institute Of Engineering</option>
                           <option value="KIET Group of Institutions">KIET Group of Institutions</option>
                           <option value="KKR &amp; KSR Institute of Technology &amp; Sciences">KKR &amp; KSR Institute of Technology &amp; Sciences</option>
                           <option value="Kuppam Engineering College">Kuppam Engineering College</option>
                           <option value="Lakireddy Bali Reddy College of Engineering">Lakireddy Bali Reddy College of Engineering</option>
                           <option value="Lakireddy Bali Reddy College Of Engineering 2">Lakireddy Bali Reddy College Of Engineering 2</option>
                           <option value="Lendi Institute Of Engineering">Lendi Institute Of Engineering</option>
                           <option value="Madanapalle Institute of Technology and Science">Madanapalle Institute of Technology and Science</option>
                           <option value="Maharaj Vijayaram Gajapathi Raj College of Engineering">Maharaj Vijayaram Gajapathi Raj College of Engineering</option>
                           <option value="Malineni Lakshmaiah Engineering College">Malineni Lakshmaiah Engineering College</option>
                           <option value="Mekapati Rajamohan Reddy Institute of Technology &amp; Science">Mekapati Rajamohan Reddy Institute of Technology &amp; Science</option>
                           <option value="Miracle Educational Society">Miracle Educational Society</option>
                           <option value="Newton's Institute Of Engineering">Newton's Institute Of Engineering</option>
                           <option value="NRI, Agiripalli">NRI, Agiripalli</option>
                           <option value="NRIT">NRIT</option>
                           <option value="PACE Institute Of Technology &amp; Sciences">PACE Institute Of Technology &amp; Sciences</option>
                           <option value="PBR Visvodaya Institute of Technology &amp; Science">PBR Visvodaya Institute of Technology &amp; Science</option>
                           <option value="Potti Sriramulu Chalavadi Mallikarjuna Rao College of Engineering">Potti Sriramulu Chalavadi Mallikarjuna Rao College of Engineering</option>
                           <option value="Prakasam Engineering College">Prakasam Engineering College</option>
                           <option value="Pydah College Of Engineering">Pydah College Of Engineering</option>
                           <option value="Raghu Engineering College">Raghu Engineering College</option>
                           <option value="RVRJC College Of Engineering">RVRJC College Of Engineering</option>
                           <option value="Sanketika Vidya Parishad Engg College">Sanketika Vidya Parishad Engg College</option>
                           <option value="Sasi Institute of Technology &amp; Engineering">Sasi Institute of Technology &amp; Engineering</option>
                           <option value="Siddartha Institute Of Science">Siddartha Institute Of Science</option>
                           <option value="Sir C R Reddy College Of Engineering">Sir C R Reddy College Of Engineering</option>
                           <option value="Sree Vidyanikethan Engineering College">Sree Vidyanikethan Engineering College</option>
                           <option value="Sri Aditya Engineering College">Sri Aditya Engineering College</option>
                           <option value="Sri Sivani College Of Engineering">Sri Sivani College Of Engineering</option>
                           <option value="Sri Vasavi Engg College">Sri Vasavi Engg College</option>
                           <option value="Sri Vasavi Institite Of Engineering and technology">Sri Vasavi Institite Of Engineering and technology</option>
                           <option value="Sri Venkatesa Perumal College Of Engineering">Sri Venkatesa Perumal College Of Engineering</option>
                           <option value="SRINIVASA INSTITUTE OF ENGINEERING AND TECHNOLOGY">SRINIVASA INSTITUTE OF ENGINEERING AND TECHNOLOGY</option>
                           <option value="SRKR Engineering College">SRKR Engineering College</option>
                           <option value="St. Ann's College Of Engineering">St. Ann's College Of Engineering</option>
                           <option value="SV College of Engineering">SV College of Engineering</option>
                           <option value="Tirumala Engineering College">Tirumala Engineering College</option>
                           <option value="Vasireddy Venkatadri Institute of Technology">Vasireddy Venkatadri Institute of Technology</option>
                           <option value="Vignan's Institute Of Engineering for Women">Vignan's Institute Of Engineering for Women</option>
                           <option value="Vikas College Of Engineering">Vikas College Of Engineering</option>
                           <option value="VITS College Of Engineering">VITS College Of Engineering</option>
                           <option value="Vizag Institute Of Technology">Vizag Institute Of Technology</option>
                           <option value="Yogananda Institute of Technology and Science">Yogananda Institute of Technology and Science</option>
                           <option value="Other">Other</option>
                        </select>
                         <br>
                     </div>
                     
                     
                       <div class="error" style="justify"><span id="collegeNameErr" style="color:#ee0979;padding: 0px 0px 30px 0px;" ></span> </div>
                       
                     
                    <div class="col-sm-12" style="padding:0">
                     <input id="otherCollegeName" style="display: none;" type="text" name="otherCollegeName" placeholder="Please Specify your College"  onchange="jobFairFieldLengthValidator(this);" /></div>
                     
                     <div class="error" align="justify"><span id="otherCollegeNameErr" style="color:#ee0979;padding: 0px 0px 30px 0px"></span> </div>
                     
                     </div>


						<input type="button" name="next" class="next action-button www"
							value="Next" onclick='checkBasicDetails();' />
					</fieldset>
					<fieldset id='academicDetailsFieldSet'>
						<h3 style="text-align: &amp;#x2190;">Step 2 of 3</h3>
						<h2 class="fs-title"
							style="position: relative; color: #222222; font-size: 35px; font-weight: 700; z-index: 10; padding-bottom: 15px; margin-bottom: 25px; text-transform: capitalize;">Applicant
							Details</h2>
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
						<div class="error" style="margin-left: 6cm">
							<span id="applyingForErr"
								style="color: #ee0979; padding: 0px 0px 30px 0px; margin-left: -40px"></span>
						</div>
						<div class="col-sm-6" style="padding-left: 0">
							<select class="form-control" id="graduation" name="graduation"
								required="required">
								<option value="" selected="selected">Graduation</option>
								<option value="B.E/B.Tech">B.E/B.Tech</option>
								<option value="B.Sc">B.Sc</option>
								<option value="B.Com">B.Com</option>
								<option value="BA">BA</option>
								<option value="BBM">BBM</option>
								<option value="Other">Other</option>
							</select>
						</div>
						<div class="col-sm-6" style="padding-right: 0">
							<input type="text" id="graduationPer" class="form-control"
								name="graduationPer" placeholder="Graduation Percentage" maxlength="5"
								required="true" ondrop="return false;" onpaste="return false;"/>
								
						</div>
						<div class="error" align="justify">
							<span id="graduationErr"
								style="color: #ee0979; padding: 0px 0px 30px 0px"></span>
						</div>
						<div class="error" style="margin-left: 6cm">
							<span id="graduationPerErr"
								style="color: #ee0979; padding: 0px 0px 30px 0px; margin-left: -70px;"></span>
						</div>

						<div class="col-sm-6" style="padding-left: 0">
							<select class="form-control" id="postGraduation" onchange="setPostGraduationPer(this);" 
								name="postGraduation">
								<option value="" selected="selected">Post Graduation</option>
								<option value="M.E/M.Tech">M.E/M.Tech</option>
								<option value="M.C.A">M.C.A</option>
								<option value="M.Sc">M.Sc</option>
								<option value="MBA">MBA</option>
								<option value="MHRM">MHRM</option>
								<option value="PGDBM">PGDBM</option>
								<option value="Other">Other</option>
							</select>
						</div>
						<div class="col-sm-6" style="padding-right: 0">
							<input type="text" id="postGraduationPer" class="form-control"
								name="postGraduationPer"
								placeholder="Post Graduation Percentage" maxlength="5"
								ondrop="return false;" onpaste="return false;"/>
						</div>
						<div class="error" align="justify">
							<span id="postGraduationErr"
								style="color: #ee0979; padding: 0px 0px 30px 0px"></span>
						</div>
						<div class="error" style="margin-left: 6cm">
							<span id="postGraduationPerErr"
								style="color: #ee0979; padding: 0px 0px 30px 0px; margin-left: -70px;"></span>
						</div>

						<div class="col-sm-6" style="padding-left: 0">
						<select class="form-control" id="experience"
								name="experience">
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
								
							</select>
						</div>
						<div class="col-sm-6" style="padding-right: 0">
							<input type="text" id="salary" class="form-control" name="salary"
								placeholder="Last drawn monthly salary" required="true"/>
						</div>
						<div class="error" align="justify">
							<span id="experienceErr"
								style="color: #ee0979; padding: 0px 0px 30px 0px"></span>
						</div>
						<div class="error" style="margin-left: 6cm">
							<span id="salaryErr"
								style="color: #ee0979; padding: 0px 0px 30px 0px; margin-left: -70px;"></span>
						</div>
						<div class="col-sm-6" style="padding-left: 0">


							<div class="input-group">
								<span class="input-group-btn"> <span
									class="btn btn-danger btn-file"
									style="padding: 15px 25px !important;">Browse <input
										type="file" name="fileToUpload" id="fileToUpload"
										onchange="putFileName()" required="required" tabindex="6">

								</span></span> <input type="text" readonly="readonly"
									class="form-control" placeholder="Upload Resume"
									id="locDestination" name="locDestination" required="required"
									tabindex="20">
							</div>


						</div>
						<div class="col-sm-6" style="padding-right: 0">
							<input type="text" id="skillSet" class="form-control"
								name="skillSet"
								placeholder="Skill Set: Example:J2Se,J2EE,HTML,Jquery,AngularJs,NodeJs"
								required="true" onchange="jobFairFieldLengthValidator(this);">
						</div>
						<div class="error" align="justify">
							<span id="fileToUploadErr"
								style="color: #ee0979; padding: 0px 0px 30px 0px"></span>
						</div>
						<div class="error" style="margin-left: 6cm">
							<span id="skillSetErr"
								style="color: #ee0979; padding: 0px 0px 30px 0px; margin-left: -70px;"></span>
						</div>

						<div class="col-sm-12" style="padding: 0">
							<textarea
								placeholder="Describe about position you are looking for"
								id="description" name="description" rows="3" onchange="jobFairFieldLengthValidator(this);"></textarea>
							<br>
						</div>
						<div class="error" style="margin-left: 6cm">
							<span id="descriptionErr"
								style="color: #ee0979; padding: 0px 0px 30px 0px; margin-left: -40px"></span>
						</div>
						<div class="col-sm-12">
							<input type="button" name="previous"
								class="previous action-button-previous www" value="Previous"
								onclick='showbasicDetailsFieldSet();' /> <input type="button"
								name="next" class="next action-button www" value="Next"
								onclick='checkAcadamicDetails();' />
						</div>
					</fieldset>
					<fieldset id='addressDetailsFieldSet'>
						<h3 style="text-align: &amp;#x2190;">Step 3 of 3</h3>
						<h2 class="fs-title"
							style="position: relative; color: #222222; font-size: 35px; font-weight: 700; z-index: 10; padding-bottom: 15px; margin-bottom: 25px; text-transform: capitalize;">Where
							are you from?</h2>

						<div class="col-sm-12" style='padding: 0'>
							<input type="text" name="street" id="street" placeholder="Street"
								onchange="jobFairFieldLengthValidator(this);" /><br>
						</div>
						<div class="error" align="justify">
							<span id="streetErr"
								style="color: #ee0979; padding: 0px 0px 30px 0px"></span>
						</div>
						<div class="col-sm-12" style="padding: 0;display: none;">
							<select class="form-control" name="country" id="country"
								onchange="populateStates();populateDistricts();checkCountry(this);">

								<option value="India">India</option>
								<option value="USA">USA</option>
							</select><br>
						</div>



						<div class="col-sm-12" style='padding: 0'>
							<select headerKey="" headerValue="All" name="state" id="state"
								class="form-control" onchange="populateDistricts();">
								<option value="">Select State</option>
							</select> <br>
						</div>
						<div class="error" align="justify">
							<span id="stateErr"
								style="color: #ee0979; padding: 0px 0px 30px 0px"></span>
						</div>
						<div class="col-sm-12" style='padding: 0;' id="districtDiv">
							<select headerKey="" headerValue="All" name="district"
								id="district" class="form-control">
								<option value="">Select District</option>

							</select> <br>
						</div>
						<div class="error" align="justify">
							<span id="districtErr"
								style="color: #ee0979; padding: 0px 0px 30px 0px"></span>
						</div>
						<div class="col-sm-5" style='padding: 0'>
							<input type="text" id="postalCode" name="postalCode"
								placeholder="Postal Code"
								onchange="jobFairFieldLengthValidator(this);"/>
						</div>



						<div class="col-sm-5">
							<input id="captcha_code" name="captcha_code" type="text"
								required="true" class="form-control"
								placeholder="Enter the right side code here" tabindex="18">
						</div>
						<div class="col-sm-2">
							<img src="../classes/captcha.php?rand=<?php echo rand(); ?>"
								id='captchaimg' width="100px;" height="30px;"> <a
								href='javascript: refreshCaptcha();'><i
								class="fa fa-refresh fa-1x" aria-hidden="true"
								title="Can't read the image? click here to refresh"
								style="margin-top: 5px;"></i></a>
						</div>


						<br> <br>
						<div class="row"></div>

						<div class="row">

							<div class="error" align="justify">
								<span id="postalCodeErr"
									style="color: #ee0979; padding: 0px 0px 30px 0px; margin-left: 15px;"></span>
							</div>
							<div class="error" style="margin-left: 6cm">
								<span id="captcha_codeErr"
									style="color: #ee0979; padding: 0px 0px 30px 0px; margin-left: -220px;"></span>
							</div>

						</div>
						<div class="col-sm-12">
							<input type="button" id="addressPreviousBtn" name="previous"
								class="previous action-button-previous www" value="Previous"
								onclick='showAcadamicDetailsFieldSet();' />

							<button type="submit" class="submit action-button"
								onclick="return checkAddressDetails();" id="btnJobFairSubmit"
								name="btnJobFairSubmit"
								data-loading-text="<i class='fa fa-spinner fa-spin'>
								</i>loading..">Submit
							</button>
						</div>
					</fieldset>
					<div class="alert alert-danger" id='alertMessageDiv'
						style="display: none;">

						<button type="button" class="close" onclick="closeAlertMessage()"
							aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<span id="alertMessageSpan"></span>


					</div>
				</form>
				<!-- link to designify.me code snippets -->
				<!-- /.link to designify.me code snippets -->


			</div>




		</div>
         <?php }?>
        <!--Team Section-->
		<section class="team-section">
			<div class="auto-container">
				<div class="sec-title centered">
					<div class="row clearfix">
						<div class="news-style-one col-md-4">
							<div class="inner-box">
								<h5 class="student-bg" style="font-size: 20px;">
									<strong> Citizen Hack</strong>
								</h5>
								<center>
									<div class="image" style="margin-top: -10px;">
										 <img src="<?= AMAZON_URL ?>/ds17/images/header-images/meanhack.jpeg"
											alt="student">
									</div>
								</center>
								<div class="lower-box">
									<div class="text">Create tomorrow's solutions today in a 24
										hour hackathon and compete with the best of the state</div>
									<a href="citizen-hack.php" class="theme-btn btn-style-one">Read
										More</a>
								</div>
							</div>
						</div>
						<div class="news-style-one col-md-4">
							<div class="inner-box">
								<h5 class="student-bg" style="font-size: 20px;">
									<strong> Tech Talks</strong>
								</h5>
								<center>
									<div class="image" style="margin-top: -10px;">
										<img
											src="<?= AMAZON_URL ?>/ds17/images/header-images/techtalk.jpg"
											height="50px" width="50px" alt="student">
									</div>
								</center>
								<div class="lower-box">
									<div class="text">Hear from speakers and interact with experts
										about the latest happenings in the technology world</div>
									<a href="tech-talks.php" class="theme-btn btn-style-one">Read
										More</a>
								</div>
							</div>
						</div>
						<div class="news-style-one col-md-4">
							<div class="inner-box">
								<h5 class="student-bg" style="font-size: 20px;">
									<strong>Hungama</strong>
								</h5>
								<center>
									<div class="image" style="margin-top: -10px;">
										<img
											src="<?= AMAZON_URL ?>/ds17/images/header-images/culturals.jpg"
											height="50px" width="50px" alt="student" />
									</div>
								</center>
								<div class="lower-box">
									<div class="text">All work and no play makes Jack a dull boy :)
										Come and show off your dance moves across the week</div>
									<a href="hungama.php" class="theme-btn btn-style-one">Read
										More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.fancybox.pack.js"></script>
		<script src="js/jquery.fancybox-media.js"></script>
		<script src="js/owl.js"></script>
		<script src="js/jquery-ui.js"></script>
		<script src="js/wow.js"></script>
		<script src="js/appear.js"></script>
		<script src="js/script.js"></script>
		<script src="js/multistep-index.js"></script>
		<script
			src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
		<script
			src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
		<script
			src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>


		<script src="js/jobfair-registration-validations.js?ver=1.6"></script>
		<script src="js/populatedDistrictbyStates.js?ver=1.0"></script>
		<!--Main Footer-->
     <?php include 'ds17Footer.php'; ?>
    <!--End Main Footer-->
	</div>
	<!--End pagewrapper-->
	<!--Scroll to top-->
	<div class="scroll-to-top scroll-to-target" data-target=".main-header">
		<span class="icon fa fa-long-arrow-up"></span>
	</div>

	<script>
   $( document ).ready(function() {
	   populateStates();
	   populateDistricts();
	   showCollegeDivOnLoad();
	});</script>

</body>



</html>