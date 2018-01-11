<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Digital Summit | Contact</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
  <?php include '../config/Locations.php';?>
 <script type="text/javascript" src="js/DsValidation.js?version=1.1"></script>

<!--Add Theme Color File To Change Template Color Scheme / Color Scheme Files are Located in root/css/color-themes/ folder-->
<!--<link href="css/color-themes/orange-theme.css" rel="stylesheet">-->

<!--Favicon-->
<link rel="shortcut icon" href="<?= AMAZON_URL ?>/ds17/images/favicon.ico" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
<meta name="description" content=" Any questions regarding Digital Summit '17, Visakhapatnam (or) AP Cloud? Reach out to us by filling the form below ">
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
.sticky-header .main-menu .navigation > li > a{
    padding:19px 15px !important;
}
.head:hover{
    color:#ef4048;

}
.contact-form-section {
    margin-top: -59px !important;
}
.modal-header
{
    background:#00aae7;
    color:white;
}
.btn-default
{
    background:#232527!important;
    color:white!important;
    border-color:transparent;
}
.btn-default:hover
{
    background:#232527!important;
    color:white!important;
    border-color:transparent;
    
}
.soco-facebook:hover{
  color: #4f7dd4 !important;
}
.soco-twitter:hover{
  color: #00aae7 !important;
}
.soco-google:hover{
  color: #dc422b !important;
}
.soco-linkedin:hover{
  color: #0d416b !important;
}
.soco-youtube:hover{
  color: #c4302b !important;

}
.soco-flickr:hover{
  color: #0063DC !important;

}
a{ color: #ababab ; } 
a:hover { color:#ef4048 ;}
</style>
<?php

//echo "first message";
$result='';
session_start();
include 'config/DS17Config.php';
include '../config/MailConfig.php';
require '../config/ConnectionProvider.php';

if(isset($_POST['btnContactSubmit'])){
	if(empty($_SESSION['captcha_code'] ) || strcasecmp($_SESSION['captcha_code'], $_POST['captcha_code']) != 0){
		
		$result='<div class="alert alert-danger">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong> Sorry </strong> The validation code does not match!.
		</div>';
		
	}else{
	//echo  "hello...";
	try{
	
		$contactName= isset($_POST["contactName"]) ? $_POST["contactName"] : '';
		$email= isset($_POST["email"]) ? $_POST["email"] : '';
		$subject= isset($_POST["subject"]) ? $_POST["subject"] : '';
		$phoneNumber= isset($_POST["phone"]) ? $_POST["phone"] : '';
		$profession= isset($_POST["profession"]) ? $_POST["profession"] : '';
		$organizationName= isset($_POST["institute"]) ? $_POST["institute"] : '';
		$message= isset($_POST["message"]) ? $_POST["message"] : '';
		
	
	$sql = "insert into tblDs17Contacts(ContactName,Email ,Subject,PhoneNumber,Profession,OrganizationName,Message)
   values(:rcontactName,:remail,:rsubject,:rphoneNumber,:rprofession,:rorganizationName,:rmessage)
 ";
	
	$stmt = $conn->prepare($sql);
	$stmt->bindParam(':rcontactName', $contactName);
	$stmt->bindParam(':remail', $email);
	$stmt->bindParam(':rsubject', $subject);
	$stmt->bindParam(':rphoneNumber', $phoneNumber);
	$stmt->bindParam(':rprofession', $profession);
	$stmt->bindParam(':rorganizationName', $organizationName);
	$stmt->bindParam(':rmessage', $message);
	
	
	
	if ($stmt->execute()) {
		$consultantId = $conn->lastInsertId();
		require 'classes/DS17MailManager.php';
		$mailmanager = new DS17MailManager();
		$mailmanager->sendDs17ContactDetails($contactName,$email,$subject,$phoneNumber,$profession,$organizationName,$message);
		$mailmanager->sendDs17ContactAcknowledge($contactName,$email);
		
		$result='<div class="alert alert-success alert-dismissable">
        		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        		<strong>One of our representative will contact to you soon.</strong>
                  </div>';
		
	} else {
		$result='<div class="alert alert-success alert-dismissable">
        		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        		<strong>Oops! </strong> Some thing went wrong .Please try again.
                  </div>';
	}
	}catch(Exception $exc){
		
		$exc->getMessage();
		$result='<div class="alert alert-success alert-dismissable">
        		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        		<strong>Oops! </strong> '.$exc.'
                  </div>';
		//$resultMessage= '<font color=red size=2px>'.$exc.'</font>';
		$conn->closeConnection(); // closing the connection
		//header('Location: ../back-end-error.php?resultMessage='.$resultMessage);
		
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

<body>

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
    <!-- Main Header -->
    <?php include 'DS17Header.php'; ?>
    <!--End Main Header -->
    
    <!--Page Title-->
     <section class="page-title" style="background-image:url(<?= AMAZON_URL ?>/ds17/images/header-images/contact.jpeg);margin-top:-114px!important;background-position:0% 37%;padding-bottom:15px;">
    	<div class="auto-container">
        	<div class="inner-box">
                <h1>Contact</h1>
                <ul class="bread-crumb">
                	<li><a href="index.php">Home</a></li>
                    <li>Contact</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->
            
    <!--Info Section-->
    <section class="info-section" style="">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
                <!--Column-->
                <div class="contact-info col-sm-4" style="text-align:center;">
					<div class="inner">
                        <div class="icon flaticon-location-pin"></div>
                        <div class="text" style="margin-top:15px;">Digital Valley, Visakhapatnam, India</div>
                    </div>
                </div>
                
                <!--Column-->
                <div class="contact-info col-sm-4" style="text-align:center;">
					<div class="inner">
                        <div class="icon flaticon-smartphone-1"></div>
                        <div class="text" style="margin-top:15px;">+91-891-662-3556</div>
                    </div>
                </div>
                
                <!--Column-->
                <div class="contact-info col-sm-4" style="text-align:center;">
                    <div class="inner">
                        <div class="icon flaticon-envelope"></div>
                        <div class="text" style="margin-top:15px;">apcloud@miraclesoft.com</div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!--End Info Section-->
    
    <!--Contact Form Section-->
    <section class="contact-form-section">
    	<div class="auto-container">
        	<!--Contact Title-->
        	<div class="contact-title">
                <h2>Get In Touch</h2>
                <div class="text">Reach out to us for any questions regarding Digital Summit '17, Visakhapatnam (or) AP Cloud</div>
            </div>
            
            <!--  for result message -->
            <div class="form-group">
                  <div >
                        <strong><?php echo $result; ?> </strong>   
                  </div>
             </div>
            
            
            <!--Contact Form-->
            <div class="contact-form">
         <div class="row">
                                    <div class="col-sm-12"> 
                                        <div class="alert alert-danger" style="display:none" id="errorMsgDiv">
                                            <button type="button" class="close" onclick="closeErrorMsg()" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <strong><span id="errorMessage"></span></strong> 
                                        </div>                        
                                    </div>
                                </div>
                                
                                
                <form method="post" action="" id="contact-form" onsubmit="loadContactSubmitbutton();">
                    <div class="row clearfix">
                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="contactName" id="contactName" value="" placeholder="Your Name" onchange="fieldLengthValidator(this);" required>
                        </div>
                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="email" id="email" value="" placeholder="Your Email id" onchange="return checkEmail(this);" required>
                        </div>
                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="subject" id="subject" value="" placeholder="Your Subject" onchange="fieldLengthValidator(this);" required>
                        </div>
                         <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="phone" id="phone" value="" placeholder="Your Phone Number " onchange="return formatPhone(this);" onblur="return validatenumber(this)" onkeypress="return isNumberKey(event)" required>
                        </div>
                         <div class="form-group col-md-6 col-sm-6 col-xs-12">
                           <select name="profession" id="profession" required="required">
                           <option value="" selected="selected">Select Profession</option>
                            <option value="Student"> Student</option>
                            <option value="Academician">Academician</option>
                            <option value="IT Professional">IT Professional</option>
                            <option value="Speaker"> Speaker</option>
                            <option value="Other"> Other</option>
                          </select>  </div>
                         <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="institute" id="institute" value="" placeholder="Your Institution / Organization" onchange="fieldLengthValidator(this);" required>
                        </div>
                        
                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            <textarea name="message" id="message" placeholder="Message"  onchange="fieldLengthValidator(this);" required="required"></textarea>
                        </div>
                           <div class="col-sm-4">
                              <div class="row">
 										<div class="col-sm-6">
                                        <input id="captcha_code" name="captcha_code" type="text" required="true" class="form-control"  placeholder="Enter the code" tabindex="18">
                                       </div>
                                        <div class="col-sm-3">
                                         <img src="../classes/captcha.php?rand=<?php echo rand(); ?>" id='captchaimg' style="margin-top: 10px;" width="100px;" height="30px;">
                                         </div>
                                        <div class="col-sm-3">
                                        <a href='javascript: refreshCaptcha();'><i class="fa fa-refresh fa-1x" aria-hidden="true" title="Can't read the image? click here to refresh" style="margin-top: 11px;"></i></a>
 										</div>
 										 
                                    </div>
                             </div>
                           
                        <div class="form-group col-md-12 col-sm-12 col-xs-12 text-left">
                          <br>
                            <button type="submit" name="btnContactSubmit"  id="btnContactSubmit" class="theme-btn btn-style-one" data-toggle="modal" data-target="#myModal" data-loading-text="<i class='fa fa-spinner fa-spin '></i> loading...">SEND MESSAGE</button>
  
                        
                        </div>
                        
                    </div>
                    
                </form>
            </div>
            <!--End Contact Form-->
            
        </div>
        <br>
        <div class="auto-container">
            <div class="row clearfix">
                <!--Travel Block-->
                <div class="travel-block col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="image">
                        	<img src="<?= AMAZON_URL ?>/ds17/images/contact-gallery.png" alt="" style="border-radius:0px;"/>
                        </div>
                        <div class="lower-box" style="background-color:#232527;border-radius:0px;text-align:left">
                        
                            <h3 style="color:#ffffff;">Gallery</h3>
                            <div class="text" style="color:#ffffff;">We learnt, played and partied last year - check it out</div>
                            <a href="gallery.php" class="theme-btn btn-style-one">View</a>
                        </div>
                    </div>
                </div>
                
                <!--Travel Block-->
                <div class="travel-block col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="image">
                        	<img src="<?= AMAZON_URL ?>/ds17/images/partners/Heights1.png" alt="" style="border-radius:0px;">
                        </div>
                       <div class="lower-box" style="background-color:#232527;border-radius:0px;text-align:left">
                        
                            <h3 style="color:#ffffff;">VENUE</h3>
                            <div class="text" style="color:#ffffff;">100,000 Digital Professionals are on their way for 2020</div>
                            <a href="venue.php" class="theme-btn btn-style-one">Visit</a>
                        </div>
                    </div>
                </div>
                
                <!--Travel Block-->
                <div class="travel-block col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="image">
                        	<img src="<?= AMAZON_URL ?>/ds17/images/register.png" alt="" style="border-radius:0px;">
                        </div>
                             <div class="lower-box" style="background-color:#232527;border-radius:0px;text-align:left">
                        
                            <h3 style="color:#ffffff;">Events</h3>
                            <div class="text" style="color:#ffffff;">AP's largest event focused on Digital Technologies</div>
                            <a href="events"> <button class="theme-btn btn-style-one" type="button" >Read More</button></a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        
    </section>
    
    
    <!--Main Footer-->
     <?php include 'ds17Footer.php'; ?>
    <!--End Main Footer-->
    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="icon fa fa-long-arrow-up"></span></div>

 

<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/appear.js"></script>
<script src="js/validate.js"></script>
<script src="js/script.js"></script>

<!--Google Map APi Key-->
<script src="http://maps.google.com/maps/api/js?key=AIzaSyBKS14AnP3HCIVlUpPKtGp7CbYuMtcXE2o"></script>
<script src="js/map-script.js"></script>
<!--End Google Map APi-->

<script>
function submitButton{
	   // if($("#rejectReason").val().trim().length>0)
	    $("#sendMessage").button('loading');
	}
	</script>

</body>
</html>