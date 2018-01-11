<!DOCTYPE html>
<html>
<head>
<!-- <meta charset="utf-8"> -->
<meta http-equiv="Content-Type" content="text/html;  charset=utf-8">
<title>Digital Summit | Partners</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
  <?php include '../config/Locations.php';?>
<!-- <link href="css/font-awesome.css" rel="stylesheet">
<link href="css/flaticon.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" />
 -->


<!--Add Theme Color File To Change Template Color Scheme / Color Scheme Files are Located in root/css/color-themes/ folder-->
<!--<link href="css/color-themes/orange-theme.css" rel="stylesheet">-->

<!--Favicon-->
<link rel="shortcut icon" href="<?= AMAZON_URL ?>/ds17/images/favicon.ico" type="image/x-icon">


 <script type="text/javascript" src="js/DsValidation.js?version=1.1"></script>

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
<meta name="description" content="We have different Technology and Collaboration partners which are part of Digital Summit as Ds'17 is a product of collaboration and team work ">
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



<!-- my code for partners -->

 <?php 
 session_start();
 $result='';
 include 'config/DS17Config.php';
 include '../config/MailConfig.php';
 require '../config/ConnectionProvider.php';
        if(isset($_POST['btnPartnerSubmit'])){
        	
        	//echo  "hello...";
        	if(empty($_SESSION['captcha_code'] ) || strcasecmp($_SESSION['captcha_code'], $_POST['captcha_code']) != 0){
        		
        		$result='<div class="alert alert-danger">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong> Sorry </strong> The validation code does not match!.
		</div>';
        		
        	}else{
        		
        	
        	try {
        	
        		$partnerName= isset($_POST["partnerName"]) ? $_POST["partnerName"] : '';
        		$organizationName= isset($_POST["organizationName"]) ? $_POST["organizationName"] : '';
        		$designation= isset($_POST["designation"]) ? $_POST["designation"] : '';
        		$email= isset($_POST["email"]) ? $_POST["email"] : '';
        		$phoneNumber= isset($_POST["phoneNumber"]) ? $_POST["phoneNumber"] : '';
        		$reasonTobePartner= isset($_POST["reasonTobePartner"]) ? $_POST["reasonTobePartner"] : '';
        	
        	
        	$sql = "insert into tblDs17Partners(PartnerName,OrganizationName,Designation,Email,PhoneNumber,ReasonTobePartner)
   values(:rpartnerName,:rorganizationName,:rdesignation,:remail,:rphoneNumber,:rreasonTobePartner)";
        	
        	$stmt = $conn->prepare($sql);
        	$stmt->bindParam(':rpartnerName', $partnerName);
        	$stmt->bindParam(':rorganizationName', $organizationName);
        	$stmt->bindParam(':rdesignation', $designation);
        	$stmt->bindParam(':remail', $email);
        	$stmt->bindParam(':rphoneNumber', $phoneNumber);
        	$stmt->bindParam(':rreasonTobePartner', $reasonTobePartner);
        	
        	
        	if ($stmt->execute()) {
        		//$result='<div class="alert alert-success" >Thank You! for Joining with us.</div>';
        		
        		$result='<div class="alert alert-success alert-dismissable">
        		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        		<strong>Thank you</strong> For Joining with us.
                  </div>';
        		
        		require 'classes/DS17MailManager.php';
        		$mailmanager = new DS17MailManager();
        		
        		$mailmanager->sendDsPartnerDetails($partnerName,$organizationName,$designation,$email,$phoneNumber,$reasonTobePartner);
        		$mailmanager->sendPartnerShipAcknowledge($partnerName,$email);
        	} else {
        		$result='<div class="alert alert-success alert-dismissable">
        		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        		<strong> Sorry </strong> Please try again.
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
    <section class="page-title" style="background-image:url(<?= AMAZON_URL ?>/ds17/images/header-images/partner-header.jpeg);margin-top:-114px!important;background-position:0% 13%; padding-bottom:15px;">
    	<div class="auto-container">
        	<div class="inner-box">
                <h1>Our Partners</h1>
                <ul class="bread-crumb">
                	<li><a href="index.php">Home</a></li>
                    <li>Partners</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->
    
    <br>
    
     <!--  for result message start -->
                 <div class="row">
                 <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <strong><?php echo $result; ?> </strong>   
                    </div>
                    <div class="col-sm-2"></div>
               </div>
    <!--  for result message end -->
    
    <!--Sponsors Section-->
     <section class="sponsors-section">
        <div class="auto-container">
            <!--Sec Title-->
            
                  <div class="sec-title centered">
                <h2>DS '17 Ecosystem</h2>
                <h3>Partners</h3>
                <div class="text">Everybody plays a part in success - and we have a huge team behind the success of Digital Summit</div>
                </div>
                  <div class="sponsors-box">
                  <div class="sec-title centered">
                <h2>sponsored By </h2>
                </div>
                <div class="row clearfix">
                 <div class="column col-md-12 col-sm-4 col-xs-12">
                        <div class="image">
                        <img src="<?= AMAZON_URL ?>/ds17/images/partners/miracle-logo-Black.svg" alt="" style="height:120px;"/>
                        </div>
                    </div>
                  
            </div> </div><br>
                  <div class="sponsors-box">
                  <div class="sec-title centered">
                <h2>strategic Partners</h2>
                </div>
               <div class="row clearfix">
                 
                     <div class="column col-md-12 col-sm-4 col-xs-12">
                        <div class="image">
                        <img src="<?= AMAZON_URL ?>/ds17/images/partners/Nasscom-new.svg" alt="Nasscom"  style="width: 35%;"/>
                        </div>
                    </div>
                    
                    
                    
                   
                  
            </div>  </div>
                <div class="sponsors-box">
                  <div class="sec-title centered">
                <h2>Technology Partners</h2>
                </div>
                 <div class="row clearfix">
                 
                       <div class="column col-md-4 col-sm-6 col-xs-12" ">
                        <div class="image">
                       <img src="<?= AMAZON_URL ?>/ds17/images/partners/ibm-1.png" alt="" />
                        </div>
                    </div>
                  
                     <div class="column col-md-4 col-sm-6 col-xs-12">
                        <div class="image">
                        <img src="<?= AMAZON_URL ?>/ds17/images/partners/google.png" alt="" />
                        </div>
                    </div>
                 <div class="column col-md-4 col-sm-6 col-xs-12">
                        <div class="image">
                        <img src="<?= AMAZON_URL ?>/ds17/images/partners/iblogo.png" alt="" />
                        </div>
                    </div>
                </div>
                     <div class="row clearfix">
                  <div class="column col-md-6 col-sm-6 col-xs-12">
                        <div class="image">
                          <img src="<?= AMAZON_URL ?>/ds17/images/partners/lab.png" alt="" />
                        </div>
                    </div>
                    
                     <div class="column col-md-6 col-sm-6 col-xs-12" style="margin-left: -78px;>
                        <div class="image">
                          <img src="<?= AMAZON_URL ?>/ds17/images/partners/AWS.png" alt="" />
                        </div>
                    </div>
                    </div>
                       </div>
                <br>
                 
                </div>
               
            <div class="auto-container">
                  <div class="sponsors-box">
                  <div class="sec-title centered">
                <h2>collaboration Partners</h2>
                </div>
                <div class="row clearfix">
                      <div class="column col-md-4 col-sm-6 col-xs-12">
                        <div class="image">
                        <center><img src="<?= AMAZON_URL ?>/ds17/images/partners/Govt-AP.jpg" alt="" class="img-responsive" style="height:120px;"/></center>
                        </div>
                    </div>
                    
                     <div class="column col-md-4 col-sm-6 col-xs-12">
                        <div class="image">
                        <center><img src="<?= AMAZON_URL ?>/ds17/images/partners/STP2.png" alt="" class="img-responsive"/></center>
                        </div>
                    </div>
                    <div class="column col-md-4 col-sm-6 col-xs-12">
                        <div class="image">
                        <img src="<?= AMAZON_URL ?>/ds17/images/partners/APEITA.png" alt="" style="height:140px;"/>
                        </div>
                    
                    </div>
            </div>
             </div>
             </div>
                 <br>
                  <div class="auto-container">
                <div class="row clearfix">
                      <div class="column col-md-6 col-sm-6 col-xs-12">
                        <div class="image" style="margin-top: 26px;margin-left: 105px;">
                        <center><img src="<?= AMAZON_URL ?>/ds17/images/partners/ittap-2.png" alt="ittap" class="img-responsive"/></center>
                        </div>
                    </div>
                    <div class="column col-md-4 col-sm-6 col-xs-12">
                        <div class="image" style="margin-left: 60px;">
                        <img src="<?= AMAZON_URL ?>/ds17/images/partners/fluent-grid.png" alt="grid"/>
                        </div>
                    </div>
                    
                 
            </div>
                </div>
                
       
    </section>
    <!--Sponsors Section-->
    
    <!--FullWidth Section One-->
    <section class="fullwidth-section">
    	<div class="section-outer clearfix">
        	
            <!--Form Column-->
        	<div class="form-column">
            	<div class="inner">
					<h2>Become a Partner</h2>
                    <div class="text">Join us in the Event</div>
                    
                    <!--Signup Form-->
                    <div class="signup-form">
                   
                                        
                                        <div class="row">
                                    <div class="col-sm-12"> 
                                        <div class="alert alert-danger" style="display:none" id="errorMsgDiv">
                                            <button type="button" class="close" onclick="closeErrorMsg()" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <strong><span id="errorMessage"></span></strong> 
                                        </div>                        
                                    </div>
                                </div>
                        <form method="post" action="" name='partnerForm'  onsubmit="loadPartnerSubmitbutton();">
                                    
                            <div class="form-group">
                                <input type="text" name="partnerName" id="partnerName" value=""  placeholder="Your Name" onchange="fieldLengthValidator(this);" required>
                            </div>
                            
                            <div class="form-group">
                            	<input type="text" name="organizationName" id="organizationName"  value="" placeholder="Organization Name" onchange="fieldLengthValidator(this);" required>
                            </div>
                            
                             <div class="form-group">
                            	<input type="text" name="designation" id="designation" value="" onchange="fieldLengthValidator(this);"  placeholder="Designation" required>
                            </div>
                            
                            <div class="form-group">
                            	<input type="text" name="email" id="email" value="" onchange="return checkEmail(this);" placeholder="Email address" required>
                            </div>
                            
                            <div class="form-group">
                                <input type="text" name="phoneNumber" id="phoneNumber" value=""  onchange="return formatPhone(this);" onblur="return validatenumber(this)" onkeypress="return isNumberKey(event)" placeholder="Phone Number" required>
                            </div>
                              
                          <div class="form-group">

                           <textarea name="reasonTobePartner"  id="reasonTobePartner"  rows="5" cols="51"  value="" style="resize : none !important;padding-top: 10px;padding-left: 23px;border-radius:4px;" placeholder="Why do you want to be a partner ?"  onchange="fieldLengthValidator(this);" required></textarea>

                       </div>
                             <div class="row">
 										<div class="col-sm-6">
                                        <input id="captcha_code" name="captcha_code" type="text" required="true" class="form-control"  placeholder="Enter the code" tabindex="18">
                                       </div>
                                        <div class="col-sm-4">
                                         <img src="../classes/captcha.php?rand=<?php echo rand(); ?>" id='captchaimg' width="100px;" height="30px;" >
                                         </div>
                                        <div class="col-sm-2">
                                        <a href='javascript: refreshCaptcha();'><i class="fa fa-refresh fa-1x" aria-hidden="true" title="Can't read the image? click here to refresh" style="margin-top: 5px;"></i></a>
 										</div>
                                    </div>
                            <br>
                            <div class="form-group">
                                <!-- <button type="submit" name="btnSubmit" id="btnSubmit" class="theme-btn btn-style-one">Submit</button> -->
                           <button type="submit" name="btnPartnerSubmit" id="btnPartnerSubmit" class="theme-btn btn-style-one" data-loading-text="<i class='fa fa-spinner fa-spin '></i> loading...">Submit</button>
                            </div>
                            
                        </form>
                    </div>
                    
                </div>
            </div>
            
        	<!--Image Column-->
        	<div class="image-column img-responsive" style="background-image:url(<?= AMAZON_URL ?>/ds17/images/partner.jpeg); background-position:center;">
            	<div class="hidden-image">
                	<img src="<?= AMAZON_URL ?>/ds17/images/partners/shake-hands.jpeg" alt="" />
                </div>
            </div>
		</div>
    </section>
    <!--End FullWidth Section One-->
    
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
<script src="js/script.js"></script>

<script>
function submitButton{
	   // if($("#rejectReason").val().trim().length>0)
	    $("#btnSubmit").button('loading');
	}
	</script>

</body>
</html>