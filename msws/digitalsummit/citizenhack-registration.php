<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Digital Summit | MeanHack Registration</title>
      <!-- Stylesheets -->
      <link href="css/bootstrap.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
      <link href="css/responsive.css" rel="stylesheet">
      <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
      <link rel="stylesheet" href="css/multistep-style.css">
      <meta http-equiv="refresh" content="0; url=citizen-hack.php" />
       <?php include '../config/Locations.php';
 include 'config/DS17Config.php';
 ?>
      <!--Add Theme Color File To Change Template Color Scheme / Color Scheme Files are Located in root/css/color-themes/ folder-->
      <!--<link href="css/color-themes/orange-theme.css" rel="stylesheet">-->
      <!--Favicon-->
      <link rel="shortcut icon" href="<?= AMAZON_URL ?>/ds17/images/favicon.ico" type="image/x-icon">
      
      <!-- Responsive -->
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
      <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
      <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
      <style>
/*dropdown*/
.main-menu .navigation > li.dropdown > a:after {
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
                                      #u_0_0,._1b90 ._1dro, ._1drm ._1ds4 ._1b90 ._2lqg, _1dro _2ph- clearfix{background-color:black !important;}

                                      ._1drm ._1ds4 ._1b90 ._2ph-,._2ph-, ._10b4{background-color:black !important;}

                                      ._1drm ._1ds4 ._1b90 ._1drm {background-color:black!important;}

                                      ._2lqg{background-color:black !important;}

                                      ._1drm ._1ds4 ._1b90 ._2hkj{ background-color: black !important;}

                                      .fb-page, .fb-page:before, .fb-page:after {border: 1px solid #000;}

                                      .fb-page:before, .fb-page:after {content: "";position: absolute;bottom: -3px;left: 2px;

                                      right: 2px;height: 1px;border-top: none}

                                      .fb-page:after {left: 4px;right: 4px;bottom: -5px;box-shadow: 0 0 2px #ccc}

                                      a{ color: #ababab

; }

                                      a:hover { color:#ef4048

;}

                                     

                                     

                                     

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









@-webkit-keyframes dash {

0% {

  stroke-dashoffset: 1000;

}

100% {

  stroke-dashoffset: 0;

}

}



@keyframes dash {

0% {

  stroke-dashoffset: 1000;

}

100% {

  stroke-dashoffset: 0;

}

}



@-webkit-keyframes spin {

 0% {

   -webkit-transform: rotate(0deg);

 }

 100% {

   -webkit-transform: rotate(360deg);

 }

}



@keyframes spin {

 0% {

   -webkit-transform: rotate(0deg);

 }

 100% {

   -webkit-transform: rotate(360deg);

 }

}



@-webkit-keyframes text {

 0% {

   opacity: 0; }

 100% {

   opacity: 1;

 }



 

 @keyframes text {

 0% {

   opacity: 0; }

 100% {

   opacity: 1;

 }

}



                                     

                                   </style>
      <style>
         #msform .action-button {
         width: 100px;
         background: #d43058;
         }
         .lower-box{
         background-color:#e4e4e4;
         }
         #msform .action-button-previous {
         width: 100px;
         background: #0d4165;
         }
         .sticky-header .main-menu .navigation > li > a{
         padding:19px 15px !important;
         }
         .student{
         width:80% !important;
         }
         .student-bg{
         background-color:#232527;
         padding:22px 11px;
         margin-top:0px;
         color:#ffffff !important;
         }
         .innerbox-active{
         border:4px #949493 solid;
         }   
         #progressbar{
         margin-bottom:-10px !important;
         }
         #progressbar li:before {
         content: counter(step);
         counter-increment: step;
         width: 50px;
         height: 50px;
         line-height: 48px !important;
         display: block;
         font-size: 25px;
         color: #ffffff ;
         background: #232527 ;
         border-radius: 25px;
         margin: 0 auto 10px auto;
         }
         .news-style-one .inner-box .lower-box {
         position: relative;
         padding: 25px 28px 25px !important;
         }
         .form-control{
         border-radius:0px!important;
         height:52px!important;
         }
         #msform input, #msform textarea {
         margin-bottom:20px!important;
         }
         #msform fieldset {
         margin:0px 3px;
         width:auto;
         box-shadow:none;
         padding:0;
         }
         .btn-file
         {
         position:relative!important;
         overflow:hidden!important;
         top: -10px;
         height: 52px;
         }
         .btn-file input[type=file]{position:absolute!important;top:0!important;right:0!important;min-width:100%!important;min-height:100%!important;font-size:100px!important;text-align:right!important;filter:alpha(opacity=0)!important;opacity:0!important;outline:none!important;background:#fff!important;cursor:inherit!important;display:block!important}
         .form-control[disabled], .form-control[readonly], fieldset[disabled] .form-control {
         background-color: #ffffff!important;
         }
         .sec-title {
         margin-bottom: -42px !important;
         }
      </style>
      <?php 
   $result='';
   session_start();
   include '../config/MailConfig.php';
   require '../config/ConnectionProvider.php';
   
   function random_string($length) {
   	$key = '';
   	$keys = array_merge(range(0, 9), range('a', 'z'));
   	
   	for ($i = 0; $i < $length; $i++) {
   		$key .= $keys[array_rand($keys)];
   	}
   	
   	return $key;
   }
   
   $isSuccess=false;
   if(isset($_POST['btnCitizenSubmit'])){
   	if(empty($_SESSION['captcha_code'] ) || strcasecmp($_SESSION['captcha_code'], $_POST['captcha_code']) != 0){
   		
   		$result='<div class="alert alert-danger">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong> Sorry </strong> The validation code does not match!.
		</div>';
   		
   	}else{
   		
   	
   	try {
   	$firstName= isset($_POST["firstName"]) ? $_POST["firstName"] : '';
   	$lastName= isset($_POST["lastName"]) ? $_POST["lastName"] : '';
   	$mobileNumber= isset($_POST["mobileNumber"]) ? $_POST["mobileNumber"] : '';
   	$altMobileNumber= isset($_POST["altMobileNumber"]) ? $_POST["altMobileNumber"] : '';
   	$email= isset($_POST["email"]) ? $_POST["email"] : '';
   	$collegeName= isset($_POST["collegeName"]) ? $_POST["collegeName"] : '';
   	$otherCollegeName= isset($_POST["otherCollegeName"]) ? $_POST["otherCollegeName"] : '';
   	$graduationBranch= isset($_POST["graduationBranch"]) ? $_POST["graduationBranch"] : '';
   	$graduationYear= isset($_POST["graduationYear"]) ? $_POST["graduationYear"] : '';
   	$aboutHim= isset($_POST["aboutHim"]) ? $_POST["aboutHim"] : '';
   	$technologyArea= isset($_POST["technologyArea"]) ? $_POST["technologyArea"] : '';
   	$useCaseArea= isset($_POST["useCaseArea"]) ? $_POST["useCaseArea"] : '';
   	
   	$teamCandidateName1= isset($_POST["teamCandidateName1"]) ? $_POST["teamCandidateName1"] : '';
   	$teamCandidateBranch1= isset($_POST["teamCandidateBranch1"]) ? $_POST["teamCandidateBranch1"] : '';
   	$teamCandidateYear1= isset($_POST["teamCandidateYear1"]) ? $_POST["teamCandidateYear1"] : '';
   	$teamContactNumber1= isset($_POST["teamContactNumber1"]) ? $_POST["teamContactNumber1"] : '';
   	$teamCandidateEmailId1= isset($_POST["teamCandidateEmailId1"]) ? $_POST["teamCandidateEmailId1"] : '';
   	
   	$teamCandidateName2= isset($_POST["teamCandidateName2"]) ? $_POST["teamCandidateName2"] : '';
   	$teamCandidateBranch2= isset($_POST["teamCandidateBranch2"]) ? $_POST["teamCandidateBranch2"] : '';
   	$teamCandidateYear2= isset($_POST["teamCandidateYear2"]) ? $_POST["teamCandidateYear2"] : '';
   	$teamContactNumber2= isset($_POST["teamContactNumber2"]) ? $_POST["teamContactNumber2"] : '';
   	$teamCandidateEmailId2= isset($_POST["teamCandidateEmailId2"]) ? $_POST["teamCandidateEmailId2"] : '';
   	
   	$teamCandidateName3= isset($_POST["teamCandidateName3"]) ? $_POST["teamCandidateName3"] : '';
   	$teamCandidateBranch3= isset($_POST["teamCandidateBranch3"]) ? $_POST["teamCandidateBranch3"] : '';
   	$teamCandidateYear3= isset($_POST["teamCandidateYear3"]) ? $_POST["teamCandidateYear3"] : '';
   	$teamContactNumber3= isset($_POST["teamContactNumber3"]) ? $_POST["teamContactNumber3"] : '';
   	$teamCandidateEmailId3= isset($_POST["teamCandidateEmailId3"]) ? $_POST["teamCandidateEmailId3"] : '';
   	
   	$teamCandidateName4= isset($_POST["teamCandidateName4"]) ? $_POST["teamCandidateName4"] : '';
   	$teamCandidateBranch4= isset($_POST["teamCandidateBranch4"]) ? $_POST["teamCandidateBranch4"] : '';
   	$teamCandidateYear4= isset($_POST["teamCandidateYear4"]) ? $_POST["teamCandidateYear4"] : '';
   	$teamContactNumber4= isset($_POST["teamContactNumber4"]) ? $_POST["teamContactNumber4"] : '';
   	$teamCandidateEmailId4= isset($_POST["teamCandidateEmailId4"]) ? $_POST["teamCandidateEmailId4"] : '';
   	
   	$teamHiddenCount= isset($_POST["teamHiddenCount"]) ? $_POST["teamHiddenCount"] : '';
   	$technicalExpertise= isset($_POST["technicalExpertise"]) ? $_POST["technicalExpertise"] : '';
   	$whyAreYouTheBest= isset($_POST["whyAreYouTheBest"]) ? $_POST["whyAreYouTheBest"] : '';
   	
   	$street= isset($_POST["street"]) ? $_POST["street"] : '';
   	$state= isset($_POST["state"]) ? $_POST["state"] : '';
   	$district= isset($_POST["district"]) ? $_POST["district"] : '';
   	$postalCode= isset($_POST["postalCode"]) ? $_POST["postalCode"] : '';
   	
   	$gender= isset($_POST["gender"]) ? $_POST["gender"] : '';
   	
   	
   	
   	$countCitizenRecords=0;
   	$Query = "SELECT Id FROM tblDs17MeanhackRegistrations WHERE Email=:tempUseremail";
   	$stmt = $conn->prepare($Query);
   	$stmt->bindParam(':tempUseremail', $email);
   	$stmt->execute();
   	$countCitizenRecords= $stmt->rowCount();
   	
   	$countUserRecords=0;
   
   
   	
   	if($countCitizenRecords==0){
   		
   		$Query = "SELECT Id,Email FROM tblDs17Users WHERE Email=:tempUseremail";
   		$stmt = $conn->prepare($Query);
   		$stmt->bindParam(':tempUseremail', $email);
   		$stmt->execute();
   		$countUserRecords= $stmt->rowCount();
   	
   	
   	
   	
   	
   	$sql = "INSERT INTO tblDs17MeanhackRegistrations 
	( 
	FirstName, 
	LastName, 
	MobileNumber, 
	AltMobileNumber, 
	Email, 
	CollegeName, 
	OtherCollegeName, 
	Branch, 
	Year, 
	AboutHim, 
	TechnologyArea, 
	UseCaseArea, 
	TeamMember1Name, 
	TeamMember1Branch, 
	TeamMember1Year, 
	TeamContact1Number, 
	TeamMember1Email, 
	TeamMember2Name, 
	TeamMember2Branch, 
	TeamMember2Year, 
	TeamContact2Number, 
	TeamMember2Email, 
	TeamMember3Name, 
	TeamMember3Branch, 
	TeamMember3Year, 
	TeamContact3Number, 
	TeamMember3Email, 
	TeamMember4Name, 
	TeamMember4Branch, 
	TeamMember4Year, 
	TeamContact4Number, 
	TeamMember4Email, 
	TechnicalExpertise, 
	ReasonForBest, 
	Street, 
	State, 
	District, 
	PostalCode,
Gender 
	
	)
	VALUES
	(
	:tempFirstName, 
	:tempLastName, 
	:tempMobileNumber, 
	:tempAltMobileNumber, 
	:tempEmail, 
	:tempCollegeName, 
	:tempOtherCollegeName, 
	:tempBranch, 
	:tempYear, 
	:tempAboutHim, 
	:tempTechnologyArea, 
	:tempUseCaseArea, 
	:tempTeamMember1Name, 
	:tempTeamMember1Branch, 
	:tempTeamMember1Year, 
	:tempTeamContact1Number, 
	:tempTeamMember1Email, 
	:tempTeamMember2Name, 
	:tempTeamMember2Branch, 
	:tempTeamMember2Year, 
	:tempTeamContact2Number, 
	:tempTeamMember2Email, 
	:tempTeamMember3Name, 
	:tempTeamMember3Branch, 
	:tempTeamMember3Year, 
	:tempTeamContact3Number, 
	:tempTeamMember3Email, 
	:tempTeamMember4Name, 
	:tempTeamMember4Branch, 
	:tempTeamMember4Year, 
	:tempTeamContact4Number, 
	:tempTeamMember4Email, 
	:tempTechnicalExpertise, 
	:tempReasonForBest, 
	:tempStreet, 
	:tempState, 
	:tempDistrict, 
	:tempPostalCode, 
	:tempGender
	)";
   	
   	$stmt = $conn->prepare($sql);
   	
   	$stmt->bindParam(':tempFirstName', $firstName);
   	$stmt->bindParam(':tempLastName', $lastName);
   	$stmt->bindParam(':tempMobileNumber', $mobileNumber);
   	$stmt->bindParam(':tempAltMobileNumber', $altMobileNumber);
   	$stmt->bindParam(':tempEmail', $email);
   	$stmt->bindParam(':tempCollegeName', $collegeName);
   	$stmt->bindParam(':tempOtherCollegeName', $otherCollegeName);
   	$stmt->bindParam(':tempBranch', $graduationBranch);
   	$stmt->bindParam(':tempYear', $graduationYear);
   	$stmt->bindParam(':tempAboutHim', $aboutHim);
   	$stmt->bindParam(':tempTechnologyArea', $technologyArea);
   	$stmt->bindParam(':tempUseCaseArea', $useCaseArea);
   	
   	$stmt->bindParam(':tempTeamMember1Name', $teamCandidateName1);
   	$stmt->bindParam(':tempTeamMember1Branch', $teamCandidateBranch1);
   	$stmt->bindParam(':tempTeamMember1Year', $teamCandidateYear1);
   	$stmt->bindParam(':tempTeamContact1Number', $teamContactNumber1);
   	$stmt->bindParam(':tempTeamMember1Email', $teamCandidateEmailId1);
   	
   	$stmt->bindParam(':tempTeamMember2Name', $teamCandidateName2);
   	$stmt->bindParam(':tempTeamMember2Branch', $teamCandidateBranch2);
   	$stmt->bindParam(':tempTeamMember2Year', $teamCandidateYear2);
   	$stmt->bindParam(':tempTeamContact2Number', $teamContactNumber2);
   	$stmt->bindParam(':tempTeamMember2Email', $teamCandidateEmailId2);
   	
   	$stmt->bindParam(':tempTeamMember3Name', $teamCandidateName3);
   	$stmt->bindParam(':tempTeamMember3Branch', $teamCandidateBranch3);
   	$stmt->bindParam(':tempTeamMember3Year', $teamCandidateYear3);
   	$stmt->bindParam(':tempTeamContact3Number', $teamContactNumber3);
   	$stmt->bindParam(':tempTeamMember3Email', $teamCandidateEmailId3);
   	
   	$stmt->bindParam(':tempTeamMember4Name', $teamCandidateName4);
   	$stmt->bindParam(':tempTeamMember4Branch', $teamCandidateBranch4);
   	$stmt->bindParam(':tempTeamMember4Year', $teamCandidateYear4);
   	$stmt->bindParam(':tempTeamContact4Number', $teamContactNumber4);
   	$stmt->bindParam(':tempTeamMember4Email', $teamCandidateEmailId4);
   	
   	
   	$stmt->bindParam(':tempTechnicalExpertise', $technicalExpertise);
   	$stmt->bindParam(':tempReasonForBest', $whyAreYouTheBest);
   	$stmt->bindParam(':tempStreet', $street);
   	$stmt->bindParam(':tempState', $state);
   	$stmt->bindParam(':tempDistrict', $district);
   	$stmt->bindParam(':tempPostalCode', $postalCode);
   	$stmt->bindParam(':tempGender', $gender);
   	
   	if ($stmt->execute()) {
   		$result='<div class="alert alert-success alert-dismissable">
        		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        		<strong>Thank you</strong> submitting citizenhack registartion form.
                  </div>';
   		$isSuccess=true;
   		$actualPassword="";
   		if($countUserRecords==0){
   		require 'classes/PasswordUtility.php';
   		$passwordutility = new PasswordUtility();
   		$actualPassword=random_string(8);
   		$enc_pass =$passwordutility->encrypt($actualPassword);
   		$userSql ="INSERT INTO tblDs17Users(Email,Password,FirstName,LastName,MobileNumber,
AltMobileNumber,Street,State,District,PostalCode,CollegeName,OtherCollegeName,Gender) 
VALUES(:tempEmail,:tempPassword,:tempFirstName,:tempLastName,:tempMobileNumber,:tempAltMobileNumber,:tempStreet,:tempState,:tempDistrict,:tempPostalCode,:tempCollegeName,:tempOtherCollegeName,:tempGender)";
   		
   		$stmt = $conn->prepare($userSql);
   		$stmt->bindParam(':tempEmail', $email);
   		$stmt->bindParam(':tempPassword', $enc_pass);
   		$stmt->bindParam(':tempFirstName', $firstName);
   		$stmt->bindParam(':tempLastName', $lastName);
   		$stmt->bindParam(':tempMobileNumber', $mobileNumber);
   		$stmt->bindParam(':tempAltMobileNumber', $altMobileNumber);
   		$stmt->bindParam(':tempStreet', $street);
   		$stmt->bindParam(':tempState', $state);
   		$stmt->bindParam(':tempDistrict', $district);
   		$stmt->bindParam(':tempPostalCode', $postalCode);
   		$stmt->bindParam(':tempCollegeName', $collegeName);
   		$stmt->bindParam(':tempOtherCollegeName', $otherCollegeName);
   		$stmt->bindParam(':tempGender', $gender);
   		$stmt->execute();
   		}
   		
   		require 'classes/DS17MailManager.php';
   		$mailmanager = new DS17MailManager();
   		
   		//$mailmanager->sendDs17CitizenHackDetails($partnerName,$organizationName,$designation,$email,$phoneNumber,$reasonTobePartner);
   		$citizenName=$firstName.' '.$lastName;
   		
   		$mailmanager->sendDs17CitizenHackAcknowledge($citizenName,$email,$actualPassword,$countUserRecords);
   		
   		
   		
   		
   	}
   	else {
   		$result='<div class="alert alert-danger alert-dismissable">
        		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        		<strong> Oops! </strong> Please try again.
                  </div>';
   	}
   	}else {
   		$result='<div class="alert alert-danger alert-dismissable">
        		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        		<strong> Oops! Your details are existed in our system.</strong> 
                  </div>';
   	}
   	}catch(Exception $exc){
   		
   		$exc->getMessage();
   		$result='<div class="alert alert-danger alert-dismissable">
        		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        		<strong>Oops! </strong> '.$exc.'
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
  
   
   
   
   <body  style="font-family: 'Poppins', sans-serif;">
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
                  <h1>Citizen Hack</h1>
                  <ul class="bread-crumb">
                     <li><a href="events">Events</a></li>
                     <li>Citizen Hack</li>
                  </ul>
               </div>
            </div>
         </section>
         <!--End Page Title-->
         <?php if($isSuccess){?>
		<section id="thankYou">

  <div class="row">

     <div class="col-sm-1"></div>

      <div class="col-sm-10">

        <div class="checkmark">

           <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"

              viewBox="0 0 161.2 161.2" enable-background="new 0 0 161.2 161.2" xml:space="preserve">

              <circle class="path" fill="none" stroke="green" stroke-width="4" stroke-miterlimit="10" cx="80.6" cy="80.6" r="62.1"/>

              <polyline class="path" fill="none" stroke="green" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" points="113,52.8

                 74.1,108.4 48.2,86.4 "/>

              <circle class="spin" fill="none" stroke="green" stroke-width="6" stroke-miterlimit="10" stroke-dasharray="12.2175,12.2175" cx="80.6" cy="80.6" r="73.9"/>

           </svg>

        </div>

           <center>

              <p2>

             Thank you for registering in Citizen hack,

              <p2>

              <br>

              <p3>You will shortly receive a email with confirmation.</p3>

           </center>

        <br><br>

     </div>

     <div class="col-sm-1"></div>

  </div>

</section>
		<?php } else{?>
         <div class="row">
            <div class="col-sm-12">
               <!-- <form class="auto-container" method="POST" action="" style="margin-bottom:20px" id="msform" onsubmit="checkAddressDetails('S')"> -->
               <form class="auto-container" method="POST" action="" style="margin-bottom:20px" id="msform" >
                  <!-- progressbar -->
                  <!--<ul id="progressbar">-->
                  <!--    <li id='basicDetailsLi' class="active">Personal Details</li>-->
                  <!--    <li id='acadamicDetailsLi'>Social Profiles</li>-->
                  <!--    <li id='addressDetailsLi' >Account Setup</li>-->
                  <!--</ul>-->
                  <!-- fieldsets -->
                  <fieldset id='basicDetailsFieldSet' >
                     <h3 style="text-align:&#x2190;">Step 1 of 3</h3>
                     <h2 class="fs-title" style="    position: relative;
                        color: #222222;
                        font-size: 35px;
                        font-weight: 700;
                        z-index: 10;
                        padding-bottom: 15px;
                        margin-bottom: 25px;
                        text-transform: capitalize;">Tell us about yourself!</h2>
                        
                        <strong><?php echo $result; ?> </strong>  
                        
                     <div class="col-sm-6" style="padding-left:0">
                        <input type="text" name="firstName" id="firstName" placeholder="First Name" onchange="citizenFieldLengthValidator(this);"/>
                     </div>
                     <div class="col-sm-6" style="padding-right:0"> 
                        <input type="text" name="lastName" id="lastName" placeholder="Last Name" onchange="citizenFieldLengthValidator(this);"/>
                     </div>
                     
                     <div class="error" align="justify"><span id="firstNameErr" style="color:#ee0979;padding:10px 0px;"></span> </div>
                     <div class="error" style="margin-left:6cm"><span id="lastNameErr" style="color:#ee0979;padding:10px 0px;margin-left:-30px;"></span> </div>
                     
                     
                     <div class="col-sm-6" style="padding-left:0">
                        <input type="text" name="mobileNumber" id="mobileNumber" placeholder="Mobile Number" onchange="return formatPhone(this);" onblur="return validatenumber(this)"	onkeypress="return isNumberKey(event)"  />
                     </div>
                     <div class="col-sm-6" style="padding-right:0">
                        <input type="text" name="altMobileNumber" id="altMobileNumber" placeholder="Alternate Mobile Number" onchange="return formatPhone(this);" onblur="return validatenumber(this)"	onkeypress="return isNumberKey(event)"  />
                     </div>
                     
                     <div class="error" align="justify"><span id="mobileNumberErr" style="color:#ee0979;padding: 0px 0px 30px 0px"></span> </div>
                     <div class="error" style="margin-left:6cm"><span id="altMobileNumberErr" style="color:#ee0979;padding: 0px 0px 30px 0px;margin-left:80px;"></span> </div>
                     
                     <div class="col-sm-6" style="padding-left:0">
                        <input type="text" name="email" id="email" placeholder="Email Address" onchange="return checkEmail(this);"/>
                     </div>
                      <div class="col-sm-6" style="padding-right:0" >
                        <label style="margin-left: -270px;">Select Gender</label>
        <label class="radio-inline"  style="margin: 26px;">
      <input type="radio" name="gender" value="Male" style="margin-left: -43px;"> Male
    </label>
    <label class="radio-inline">
      <input type="radio" name="gender" value="Female" style="margin-left: -49px;"> Female
    </label>
   </div>
   <div class="error" align="justify"><span id="emailErr" style="color:#ee0979;padding: 0px 0px 30px 0px"></span> </div>
    <div class="error" style="margin-left:6cm"><span id="genderErr" style="color:#ee0979;padding:0px 0px 30px 0px;margin-left:4px;"></span> </div>
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
                     <input id="otherCollegeName" style="display: none;" type="text" name="otherCollegeName" placeholder="Please Specify your College" onchange="citizenFieldLengthValidator(this);"  /></div>
                     
                     <div class="error" align="justify"><span id="otherCollegeNameErr" style="color:#ee0979;padding: 0px 0px 30px 0px"></span> </div>
                     
                     
                     <div class="col-sm-6" style="padding-left:0">
                        <select class="form-control" id="graduationBranch" name="graduationBranch" >
                           <option value="" selected="selected">Branch</option>
                           <option value="CSE">CSE</option>
                           <option value="ECE">ECE</option>
                           <option value="EEE">EEE</option>
                           <option value="Civil">Civil</option>
                           <option value="Mechanical">Mechanical</option>
                           <option value="MBA">MBA</option> 
                           <option value="MCA">MCA</option>
                        </select>
                     </div>
                     <div class="col-sm-6" style="padding-right:0">
                        <select class="form-control" id="graduationYear" name="graduationYear" >
                           <option value="" selected="selected">Year</option>
                           <option value="1st">1st</option>
                           <option value="2nd">2nd</option>
                           <option value="3rd">3rd</option>
                           <option value="4th">4th</option>
                        </select>
                        <br>
                     </div>
                      
                      <div class="error" align="justify"><span id="graduationBranchErr" style="color:#ee0979;padding: 0px 0px 30px 0px"></span> </div>
                     <div class="error" style="margin-left:6cm"><span id="graduationYearErr" style="color:#ee0979;padding: 0px 0px 30px 0px;margin-left:-70px;"></span> </div>
                      
                      
                     <div class="col-sm-12" style="padding:0">
                        <textarea name="aboutHim" id="aboutHim" placeholder="Tell us a bit about yourself" rows="3" onchange="citizenFieldLengthValidator(this);"  ></textarea>
                     </div>
                 
                  <div class="error" align="justify"><span id="aboutHimErr" style="color:#ee0979;padding: 0px 0px 30px 0px"></span> </div>
                  
                   <div class="col-sm-12"><input type="button" name="next" class="next action-button" value="Next" onclick='checkBasicDetails();'/></div>
                   
                  </fieldset>
                  <fieldset id='academicDetailsFieldSet'>
                     <h3 style="text-align:&#x2190;">Step 2 of 3</h3>
                     <h2 class="fs-title" style="    position: relative;
                        color: #222222;
                        font-size: 35px;
                        font-weight: 700;
                        z-index: 10;
                        padding-bottom: 15px;
                        margin-bottom: 25px;
                        text-transform: capitalize;">Introduce your team</h2>
                     <h5 style='text-align:left'>Pick your area of interest in terms of technology and use case and let us know what your idea is</h5>
                     <div class="col-sm-6" style="padding-left:0">
                        <select class="form-control" name="technologyArea" id="technologyArea" >
                            <option value="">Technology Area</option>
                           <option value="Conversational Bot">Conversational Bot</option>
                           <option value="Connected Solution">Connected Solution</option>
                           <option value="Mobile Applications">Mobile Applications</option>
                           <option value="Machine Learning">Machine Learning</option>
                        </select>
                     </div>
                     <div class="col-sm-6" style="padding-right:0">
                        <select class="form-control" id="useCaseArea" name="useCaseArea" >
                           <option value="" >Use Case Area</option>
                          <option value="Agriculture">Agriculture</option>
                           <option value="Commerce">Commerce</option>
                          <option value="Education">Education</option>
                           <option value="Government">Government</option>
                           <option value="Transport">Transport</option>
                           <option value="Healthcare">Healthcare</option>
                        </select>
                        <br>
                     </div>
                     
                     <div class="error" align="justify"><span id="technologyAreaErr" style="color:#ee0979;padding: 0px 0px 30px 0px"></span> </div>
                     <div class="error" style="margin-left:6cm"><span id="useCaseAreaErr" style="color:#ee0979;padding: 0px 0px 30px 0px;margin-left:-1px;"></span> </div>
                     
                     
                     <div class="col-sm-12" style="padding:0">
                        <h5 style="text-align:left">You will need to select a team of 3 (or) 4 people including yourselves - Please add the remaining team members name in the below form</h5>
                     </div>
                     <!--  Teammeber1 start -->
                     <div >
                     <div class="col-sm-3" style="padding-left:0">
                        <input type="text" id="teamCandidateName1" class="form-control" name="teamCandidateName1" placeholder="Name1"  onchange="citizenFieldLengthValidator(this);">
                     </div>
                     <div class="col-sm-2">
                     <select class="form-control" id="teamCandidateBranch1" name="teamCandidateBranch1" >
                           <option value="" selected="selected">Branch</option>
                            <option value="CSE">CSE</option>
                            <option value="IT">IT</option>
                           <option value="ECE">ECE</option>
                           <option value="EEE">EEE</option>
                           <option value="Civil">Civil</option>
                           <option value="Mechanical">Mechanical</option>
                           <option value="MBA">MBA</option> 
                           <option value="MCA">MCA</option>
                        </select>
                      
                     </div>
                     <div class="col-sm-2">
                        <select class="form-control" id="teamCandidateYear1" name="teamCandidateYear1" >
                           <option value="" selected="selected">Year</option>
                           <option value="1st">1st</option>
                           <option value="2nd">2nd</option>
                           <option value="3rd">3rd</option>
                           <option value="4th">4th</option>
                        </select>
                     </div>
                      <div class="col-sm-2" style="padding-right:0">
                        <input type="text" id="teamContactNumber1" name="teamContactNumber1" class="form-control"  placeholder="Contact Number" onchange="return formatPhone(this);" onblur="return validatenumber(this)"	onkeypress="return isNumberKey(event)"  >
                     </div>
                    
                     <div class="col-sm-3" style="padding-right:0">
                        <input type="text" id="teamCandidateEmailId1" class="form-control" name="teamCandidateEmailId1" onchange="return checkEmail(this);"  placeholder="Email ID"  >
                     </div>
                     
                   </div>
                      <div class="error" align="justify"><span id="teamCandidateName1Err" style="color:#ee0979;padding: 0px 0px 30px 0px"></span> </div>
                     <div class="error" style="margin-left:2cm"><span id="teamCandidateBranch1Err" style="color:#ee0979;padding: 0px 0px 30px 0px;margin-left:-480px;"></span> </div>
                     <div class="error" style="margin-left:5cm"><span id="teamCandidateYear1Err" style="color:#ee0979;padding: 0px 0px 30px 0px;margin-left: -220px;"></span> </div>
                     <div class="error" style="margin-left:7cm"><span id="teamContactNumber1Err" style="color:#ee0979;padding: 0px 0px 30px 0px;margin-left: 180px;"></span> </div>
                     <div class="error" style="margin-left:9cm"><span id="teamCandidateEmailId1Err" style="color:#ee0979;padding: 0px 0px 30px 0px;margin-left: 410px;"></span> </div>
                     
                     <!--  Teammeber1 end -->
                     
                     <!--  Teammeber2 start -->
                     <div id="teamDiv2" style="display: none;">
                     <div class="col-sm-3" style="padding-left:0">
                        <input type="text" id="teamCandidateName2" class="form-control" name="teamCandidateName2" placeholder="Name2" onchange="citizenFieldLengthValidator(this);" >
                     </div>
                     <div class="col-sm-2">
                    
                    <select class="form-control" id="teamCandidateBranch2" name="teamCandidateBranch2" >
                           <option value="" selected="selected">Branch</option>
                           <option value="CSE">CSE</option>
                           <option value="ECE">ECE</option>
                           <option value="EEE">EEE</option>
                           <option value="Civil">Civil</option>
                           <option value="Mechanical">Mechanical</option>
                           <option value="MBA">MBA</option> 
                           <option value="MCA">MCA</option>
                        </select>
                   
                   
                     </div>
                     <div class="col-sm-2">
                        <select class="form-control" id="teamCandidateYear2" name="teamCandidateYear2" >
                           <option value="" selected="selected">Year</option>
                           <option value="1st">1st</option>
                           <option value="2nd">2nd</option>
                           <option value="3rd">3rd</option>
                           <option value="4th">4th</option>
                        </select>
                     </div>
                      <div class="col-sm-2" style="padding-right:0">
                        <input type="text" id="teamContactNumber2" name="teamContactNumber2" class="form-control"  placeholder="Contact Number" onchange="return formatPhone(this);" onblur="return validatenumber(this)"	onkeypress="return isNumberKey(event)"  >
                     </div>
                    
                     <div class="col-sm-3" style="padding-right:0">
                        <input type="text" id="teamCandidateEmailId2" class="form-control" name="teamCandidateEmailId2" onchange="return checkEmail(this);"  placeholder="Email ID" >
                     </div>
                     
                   </div>
                     <div class="error" align="justify"><span id="teamCandidateName2Err" style="color:#ee0979;padding: 0px 0px 30px 0px"></span> </div>
                     <div class="error"  style="margin-left:2cm"><span id="teamCandidateBranch2Err" style="color:#ee0979;padding: 0px 0px 30px 0px;margin-left:-480px;"></span> </div>
                     <div class="error" style="margin-left:5cm"><span id="teamCandidateYear2Err" style="color:#ee0979;padding: 0px 0px 30px 0px;margin-left:-220px;"></span> </div>
                     <div class="error" style="margin-left:7cm"><span id="teamContactNumber2Err" style="color:#ee0979;padding: 0px 0px 30px 0px;margin-left: 180px;"></span> </div>
                     <div class="error" style="margin-left:9cm"><span id="teamCandidateEmailId2Err" style="color:#ee0979;padding: 0px 0px 30px 0px;margin-left: 410px;"></span> </div>
                     
                     <!--  Teammeber2 end -->
                     
                      <!--  Teammeber3 start -->
                     <div id="teamDiv3" style="display: none;">
                     <div class="col-sm-3" style="padding-left:0">
                        <input type="text" id="teamCandidateName3" class="form-control" name="teamCandidateName3" placeholder="Name3" onchange="citizenFieldLengthValidator(this);"  >
                     </div>
                     <div class="col-sm-2">
                     
                     <select class="form-control" id="teamCandidateBranch3" name="teamCandidateBranch3" >
                           <option value="" selected="selected">Branch</option>
                            <option value="CSE">CSE</option>
                           <option value="ECE">ECE</option>
                           <option value="EEE">EEE</option>
                           <option value="Civil">Civil</option>
                           <option value="Mechanical">Mechanical</option>
                           <option value="MBA">MBA</option> 
                           <option value="MCA">MCA</option>
                        </select>
                     </div>
                     <div class="col-sm-2">
                        <select class="form-control" id="teamCandidateYear3" name="teamCandidateYear3" >
                           <option value="" selected="selected">Year</option>
                           <option value="1st">1st</option>
                           <option value="2nd">2nd</option>
                           <option value="3rd">3rd</option>
                           <option value="4th">4th</option>
                        </select>
                     </div>
                      <div class="col-sm-2" style="padding-right:0">
                        <input type="text" id="teamContactNumber3" name="teamContactNumber3" class="form-control"  placeholder="Contact Number" onchange="return formatPhone(this);" onblur="return validatenumber(this)"	onkeypress="return isNumberKey(event)"  >
                     </div>
                    
                     <div class="col-sm-3" style="padding-right:0">
                        <input type="text" id="teamCandidateEmailId3" class="form-control" name="teamCandidateEmailId3" onchange="return checkEmail(this);"  placeholder="Email ID" >
                     </div>
                     
                   </div>
                      <div class="error" align="justify"><span id="teamCandidateName3Err" style="color:#ee0979;padding: 0px 0px 30px 0px"></span> </div>
                     <div class="error" style="margin-left:2cm"><span id="teamCandidateBranch3Err" style="color:#ee0979;padding: 0px 0px 30px 0px;margin-left:-480px;"></span> </div>
                     <div class="error" style="margin-left:5cm"><span id="teamCandidateYear3Err" style="color:#ee0979;padding: 0px 0px 30px 0px;margin-left:-220px;"></span> </div>
                     <div class="error" style="margin-left:7cm"><span id="teamContactNumber3Err" style="color:#ee0979;padding: 0px 0px 30px 0px;margin-left: 180px;"></span> </div>
                     <div class="error" style="margin-left:9cm"><span id="teamCandidateEmailId3Err" style="color:#ee0979;padding: 0px 0px 30px 0px;margin-left:410px;"></span> </div>
                     <!--  Teammeber3 end -->
                     
                      <!--  Teammeber4 start -->
                     <div id="teamDiv4" style="display: none;">
                     <div class="col-sm-3" style="padding-left:0">
                        <input type="text" id="teamCandidateName4" class="form-control" name="teamCandidateName4" placeholder="Name4" onchange="citizenFieldLengthValidator(this);"  >
                     </div>
                     <div class="col-sm-2">
                        <select class="form-control" id="teamCandidateBranch4" name="teamCandidateBranch4" >
                           <option value="" selected="selected">Branch</option>
                          <option value="CSE">CSE</option>
                           <option value="ECE">ECE</option>
                           <option value="EEE">EEE</option>
                           <option value="Civil">Civil</option>
                           <option value="Mechanical">Mechanical</option>
                           <option value="MBA">MBA</option> 
                           <option value="MCA">MCA</option>
                        </select>
                     </div>
                     <div class="col-sm-2">
                        <select class="form-control" id="teamCandidateYear4" name="teamCandidateYear4" >
                           <option value="" selected="selected">Year</option>
                           <option value="1st">1st</option>
                           <option value="2nd">2nd</option>
                           <option value="3rd">3rd</option>
                           <option value="4th">4th</option>
                        </select>
                     </div>
                      <div class="col-sm-2" style="padding-right:0">
                        <input type="text" id="teamContactNumber4" name="teamContactNumber4" class="form-control"  placeholder="Contact Number" onchange="return formatPhone(this);" onblur="return validatenumber(this)"	onkeypress="return isNumberKey(event)"  >
                     </div>
                    
                     <div class="col-sm-3" style="padding-right:0">
                        <input type="text" id="teamCandidateEmailId4" class="form-control" name="teamCandidateEmailId4" onchange="return checkEmail(this);"  placeholder="Email ID" >
                     
                     <input type="hidden" id="country" name="country" value="India">
                     
                     </div>
                     
                   </div>
                      <div class="error" align="justify"><span id="teamCandidateName4Err" style="color:#ee0979;padding: 0px 0px 30px 0px"></span> </div>
                     <div class="error" style="margin-left:2cm"><span id="teamCandidateBranch4Err" style="color:#ee0979;padding: 0px 0px 30px 0px;margin-left:-480px"></span> </div>
                     <div class="error" style="margin-left:5cm"><span id="teamCandidateYear4Err" style="color:#ee0979;padding: 0px 0px 30px 0px;margin-left:-220px;"></span> </div>
                     <div class="error" style="margin-left:7cm"><span id="teamContactNumber4Err" style="color:#ee0979;padding: 0px 0px 30px 0px;margin-left:180px;"></span> </div>
                     <div class="error" style="margin-left:9cm"><span id="teamCandidateEmailId4Err" style="color:#ee0979;padding: 0px 0px 30px 0px;margin-left:410px;"></span> </div>
                     <!--  Teammeber4 end -->
                     <input type='hidden' id='teamHiddenCount' name="teamHiddenCount" value="1"/>
                     
                     <div class="col-sm-12" style="padding:0;text-align:left">
                        <button type="button" style="background-color:#0d4165;border-color:#0d4165" class="btn btn-info" id="plusButton" onclick='addTeamDiv();'>
                        <span class="glyphicon glyphicon-plus"></span> 
                        </button>
                        <button type="button" style="display: none;" class="btn btn-info" id="minusButton" onclick='removeTeamDiv();'>
                        <span class="glyphicon glyphicon-minus"></span> 
                        </button>
                     </div>
                     
                     
                     
                     <div class="col-sm-6" style="text-align:left;padding-left:0">
                        <h3 class="heavy">Technical Expertise</h3>
                     </div>
                     <div class="col-sm-6"  style="text-align:left">
                        <h3 class="heavy">What is your technology idea?</h3>
                     </div>
                     <div class="col-sm-6" style="padding-left:0">
                        <textarea id="technicalExpertise" name="technicalExpertise" placeholder="What is your teams technical expertise? Explain how you rate yourself and what technologies you have worked with in the past." rows="3" onchange="citizenFieldLengthValidator(this);" ></textarea>
                     </div>
                     <div class="col-sm-6"  style="padding-right:0">
                        <textarea id="whyAreYouTheBest" name="whyAreYouTheBest" placeholder="Why do you think your team can win MEANHack? Explain in detail, this will be used to determine your selection to participate. " rows="3" onchange="citizenFieldLengthValidator(this);" ></textarea>
                     </div>
                     <div class="error" align="justify"><span id="technicalExpertiseErr" style="color:#ee0979;padding: 0px 0px 30px 0px"></span> </div>
                      <div class="error" style="margin-left:6cm"><span id="whyAreYouTheBestErr" style="color:#ee0979;padding: 0px 0px 30px 0px;margin-left:80px;"></span> </div>
                      
                     <!-- <input type="button" name="previous" class="previous action-button-previous" value="Previous" onclick='showbasicDetailsFieldSet();'/>  -->
                     <input type="button" name="previous" class="previous action-button-previous" value="Previous" onclick='checkTeamdetails("P");'/> 
                     
                     <!--  <input type="button" name="next" class="next action-button" value="Next" onclick='showAddressDetailsFieldSet();'/> --> 
                      <input type="button" name="next" class="next action-button" value="Next" onclick='checkTeamdetails("N");'/> 
                  </fieldset>
                  <fieldset id='addressDetailsFieldSet'>
                     <h3 style="text-align:&#x2190;">Step 3 of 3</h3>
                     <h2 class="fs-title" style="    position: relative;
                        color: #222222;
                        font-size: 35px;
                        font-weight: 700;
                        z-index: 10;
                        padding-bottom: 15px;
                        margin-bottom: 25px;
                        text-transform: capitalize;">Where are you from?</h2>
                     <div class="col-sm-12" style='padding:0'>  <input type="text" id="street" name="street" placeholder="Street" onchange="citizenFieldLengthValidator(this);"/><br></div>
                      <div class="error" align="justify"><span id="streetErr" style="color:#ee0979;padding: 0px 0px 30px 0px"></span> </div>
                      
                     <div class="col-sm-12"  style='padding:0'>
                     <input type="hidden" name="country" id="country" value="India"/>
                      <select headerKey="" headerValue="All"  name="state" id="state" class="form-control" onchange="populateDistricts();"></select>
                        <br>
                     </div>
                      <div class="error" align="justify"><span id="stateErr" style="color:#ee0979;padding: 0px 0px 30px 0px"></span> </div>
                      
                     <div class="col-sm-12" style='padding:0'>
                     <select headerKey="" headerValue="All"   name="district" id="district" class="form-control">
                     <option value="">Select District</option>
                     </select>
                        <br>
                     </div>
                     
                      <div class="error" align="justify"><span id="districtErr" style="color:#ee0979;padding: 0px 0px 30px 0px"></span> </div>
                     
                     
                     <div class="col-sm-5" style='padding:0'>  <input type="text" id="postalCode" name="postalCode" placeholder="Postal Code"  onchange="citizenFieldLengthValidator(this);"/></div>
                   <div class="col-sm-5">
                                        <input id="captcha_code" name="captcha_code" type="text" required="true" class="form-control"  placeholder="Enter the code" tabindex="18">
                                       </div>
                                        <div class="col-sm-2">
                                         <img src="../classes/captcha.php?rand=<?php echo rand(); ?>" id='captchaimg' width="100px;" height="30px;" >
                                         
                                        <a href='javascript: refreshCaptcha();'><i class="fa fa-refresh fa-1x" aria-hidden="true" title="Can't read the image? click here to refresh" style="margin-top: 5px;"></i></a>
 										</div>
 										
                                   
                     <br><br>
                     <div class="row"></div>
                     <div class="row">
                     <div class="error" align="justify"><span id="postalCodeErr" style="color:#ee0979;padding: 0px 0px 30px 0px"></span> </div>
                     					<div class="error" style="margin-left:6cm"><span id="captcha_codeErr" style="color:#ee0979;padding: 0px 0px 30px 0px;margin-left:-230px;"></span> </div>
                     		</div>			
                     <div class="col-sm-12">  
                   <!--   <input type="button" name="previous" class="previous action-button-previous" value="Previous" onclick='showAcadamicDetailsFieldSet();'/> -->
                     <input type="button" id="addressPreviousButton" name="previous" class="previous action-button-previous" value="Previous" onclick='checkAddressDetails("P");'/>
                     
                     
                   <button type="submit" class="action-button" onclick="return checkAddressDetails('S');" id="btnCitizenSubmit" name="btnCitizenSubmit" data-loading-text="<i class='fa fa-spinner fa-spin'></i>Loading..">Submit</button> 
                   </div>
                   
                  
<br>
                  </fieldset>
                   <div class="alert alert-danger" id='alertMessageDiv' style="display: none;">
    
    <button type="button" class="close" onclick="closeAlertMessage()" aria-label="Close"><span aria-hidden="true">&times;</span></button>
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
                        <h5 class="student-bg" style="font-size:20px;"><strong> Tech Talks</strong></h5>
                          
                           <center>
                              <div class="image" style="margin-top:-10px;">
                                 <a href="#"> <img  src="<?= AMAZON_URL ?>/ds17/images/header-images/techtalk.jpg" height="50px" width="50px" alt="student" /></a>
                              </div>
                           </center>
                           <div class="lower-box">
                              <div class="text">Hear from speakers and interact with experts about the latest happenings in the technology world</div>
                              <a href="tech-talks.php" class="theme-btn btn-style-one">Read More</a>
                           </div>
                        </div>
                     </div>
                     <div class="news-style-one col-md-4">
                        <div class="inner-box">
                        <h5 class="student-bg" style="font-size:20px;"><strong> Job Fairs</strong></h5>
                         
                           <center>
                              <div class="image" style="margin-top:-10px;">
                                 <a href="#"> <img  src="<?= AMAZON_URL ?>/ds17/images/header-images/jobs.jpg" height="50px" width="50px" alt="student" /></a>
                              </div>
                           </center>
                           <div class="lower-box">
                              <div class="text">Get into the career path of your choice and get guidance on markets at the job fair during the week</div>
                              <a href="#" class="theme-btn btn-style-one">Coming Soon</a>
                           </div>
                        </div>
                     </div>
                     <div class="news-style-one col-md-4">
                        <div class="inner-box">
                        <h5 class="student-bg" style="font-size:20px;"><strong> Hungama</strong></h5>
                           
                           <center>
                              <div class="image" style="margin-top:-10px;">
                                 <img  src="<?= AMAZON_URL ?>/ds17/images/header-images/culturals.jpg" height="50px" width="50px" alt="student" />
                              </div>
                           </center>
                           <div class="lower-box">
                              <div class="text">All work and no play makes Jack a dull boy :) Come and show off your dance moves across the week</div>
                              <a href="hungama.php" class="theme-btn btn-style-one">Read More</a>
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
        <script  src="js/multistep-index.js"></script> 
      <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
    
      
   <script src="js/citizenhack-registration-validations.js?ver=1.0"></script> 
   <script src="js/populatedDistrictbyStates.js?ver=1.0"></script> 
         <!--Main Footer-->
     <?php include 'ds17Footer.php'; ?>
    <!--End Main Footer-->
      </div>
      <!--End pagewrapper-->
      <!--Scroll to top-->
      <div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="icon fa fa-long-arrow-up"></span></div>
    
   <script>
   $( document ).ready(function() {
	   populateStates();
	   populateDistricts();
	});</script>
 
    </body>
    
  
 
</html>