<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Miracle Me | Internal Mobile App for Miraclities</title>

<meta name="description" content="Miracle Me | Internal Mobile App for Miraclities">


<!-- SOCIAL MEDIA META -->
<meta property="og:description" content="Miracle Me | Internal Mobile App for Miraclities">
 <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<!-- FAVICON FILES -->
<link href="ico/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon" sizes="144x144">
<link href="ico/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon" sizes="114x114">
<link href="ico/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon" sizes="72x72">
<link href="ico/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon">
<link href="ico/miraclemefav.ico" rel="shortcut icon">

<!-- CSS FILES -->
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/animate.min.css" rel="stylesheet">
<link href="css/jquery.fancybox.css" rel="stylesheet">
<link href="css/owl.carousel.min.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/base.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
   <style>
  .log{
    background-color:#ef4048 !important;
   
color: #ffffff !important;

}
.user{
    background-color:rgba(35,37,39,0) !important;
    color:#ffffff !important;
}
.mod{
    background-color:rgba(35,37,39,0.9) !important;
}
.mf{
    border-top:0px;
}

.modal-footer {
    padding: 14px 26px!important;
    margin-top: 13px!important;
}
body{
    font-family: Lato,sans-serif!important;}
   
.modal-header {
    border-bottom: none;
}





@media screen and (max-width: 970px) and (min-width: 280px) {

.header .hero-content a{
  padding:0px 9px;
  font-size:14px;
}
}
@media screen and (min-width: 320px) and (max-width: 520px) {
   .pot{
       margin-right: 70px !important;
    }
    .pot1{
      
     float: right !important;
    }
     .pot2{
      
     margin-left: 9px !important;
    }
    .pot3{
      
   font-size: 22px !important;
    }
}
    </style>
    
      <?php
    include '../config/general.php';
   $requestEmpId='0';
    $isFeedbackSubmitted=false;
    
    $resultMessage = '';
    if (isset($_POST['btnFeedBackSubmit'])) {
        try {
        	$currentEmpId = isset($_POST["currentEmpId"]) ? $_POST["currentEmpId"] : '0';
        	$requestEmpId = $currentEmpId;
        	$feedbackMessage= isset($_POST["feedbackMessage"]) ? $_POST["feedbackMessage"] : '';
        	$data = array("EmpId" => "$currentEmpId", "Message" => "$feedbackMessage", "Authorization" => base64_encode(SERVICE_AUTHORIZATION));
            $data_string = json_encode($data);
            $curl = curl_init(SERVICE_URL . "generalServices/addEmployeeFeedBack");
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
                	
                    if ($myArray['Result'] == 'Success') {
                    	$isFeedbackSubmitted = true;
                    	$resultMessage = "Feedback sent successfully.";
                    } else {
                    	$resultMessage = "Oops! something went wrong.Please try again!";
                    }
                }else {
                    $resultMessage = "Unauthorized access!";
                }
            }
            curl_close($curl);
        } catch (Exception $exc) {
            $exc->getMessage();
            $resultMessage =  $exc ;
           
        }
    }
    ?>
    
    
</head>
<body data-spy="scroll" data-target=".navbar-fixed-top">

<input type='hidden' id='requestEmpId' name='requestEmpId' value="<?= $requestEmpId?>">
<input type='hidden' id='isFeedbackSubmitted' name='isFeedbackSubmitted' value="<?= $isFeedbackSubmitted?>">
<input type='hidden' id='isFeedResultMessage' name='isFeedResultMessage' value="<?= $resultMessage?>">

   <div class="modal fade mod" id="myModal" tabindex="-1" role="dialog" data-backdrop= static data-keyboard= false scroll="no-scroll" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content" style="background-color:transparent; border: 1px solid rgba(0,0,0,.0); -webkit-box-shadow:none !important;
box-shadow:none !important;">
      <div class="modal-header">
       
        <center><h3 class="modal-title" id="myModalLabel" style="color:#ffffff !important"><strong>Employee Login</strong></h3></center>
      </div>
      <div class="modal-body">
          <div class="row">
             <div class="col-sm-1">
                 
             </div> 
             <div class="col-sm-10">
              <center><p class="" style="color:#ffffff"> You must be a Miraclite to gain access to this page. Please validate yourself using your Miracle credentials for further access.</p></center> 
             </div>
             <div class="col-sm-1">
                 
             </div>
          </div>
       
      <br> <div class="row">
            <div class="col-sm-3"></div> 
                        <div class="col-sm-6">
                            <form>
                           <div class="form-group">
                                  <input type="text " tabindex="1" class="form-control user" required="required" placeholder="Username" id="loginId" name="loginId" onkeydown="return enableLoginEnter(event);">
                           </div>
                          <div class="form-group">
               <input type="password" class="form-control user"  tabindex="2" id="password1" name="password1" required="required" placeholder="Password" onkeydown="return enableLoginEnter(event);">
  </div>
                          </form>
                          <a href="../forgot-password" style="color:#ffffff" target="_blank">Forgot Password?</a>
                        </div>
                          <div class="col-sm-3"></div> 
                     </div>
                     
                       <div class="row"> <div class="col-sm-3"></div> 
                                          <div class="col-sm-6"> 
                                              <div class="alert alert-danger" style="display:none" id="errorMsgDiv">
                                                  <button type="button" class="close" onclick="closeErrorMessage('errorMsgDiv','resultMessage')" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong><span id="resultMessage">Invalid details!!</span></strong> 
                        </div>                        
                                          </div>
           <div class="col-sm-3"></div> 
                                    </div>
                                    
                          <div class="modal-footer mf">     
                        <div class="row">
                              <div class="col-sm-3"> 
                            
                        </div>
                       <div class="">
                          <button style="margin-top: -20px;" type="button" tabindex="3" class="btn log col-xs-6"  name="btnLoginSubmit" id="btnLoginSubmit" onclick="doMiracleMeLoginSubmit();" data-loading-text="<i class='fa fa-spinner fa-spin '></i> loading...">
                              Login 
                                </button>
                               
                        </div>
                         <div class="col-sm-3"> 
                            
                        </div>
                           
                         
                     </div>
              </div>
    </div>
  </div>
</div>
     </div>
<div class="preloader"></div>
<!-- end preloader -->
<header class="header" id="intro">
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle toggle-menu menu-left push-body" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand" href="#"><img src="images/miracle-logo-light.png" class="logo-light" alt="Image"> <img src="images/miracle-logo-light.png" alt="Image" class="logo-dark"></a> </div>
      <div class="collapse navbar-collapse cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="bs-example-navbar-collapse-1"> <a href="#download" class="purchase page-scroll">Download</a>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#intro" class="page-scroll">INTRO</a></li>
          <li><a href="#features" class="page-scroll">FEATURES</a></li>
          <li><a href="#forro" class="page-scroll">MIRACLE ME</a></li>
          <li><a href="#gallery" class="page-scroll">GALLERY</a></li>
          <li><a href="#funfacts" class="page-scroll">FUN FACTS</a></li>
          <li><a href="#contact" class="page-scroll">CONTACT</a></li>
        </ul>
      </div>
      <!-- end navbar-collapse --> 
    </div>
    <!-- end container --> 
  </nav>
  <!-- end navbar-default-->
  <div class="hero-content">
    <div class="sides">
       <div class="">
    <div class="slogan">
      <ul>
        <li><span>MiracleME</span></li>
        <li><span class="sides"><img src="images/miracle-me-large.png" alt="Image" style="height:auto !important; width:100%;"></span></li>
      
      </ul>
      </div>
    <!-- end slogan --> 
  </div>
  <!-- end text-rotater --> 
        <h5>Miracle Me, the internal mobile app for Miraclities now available on <span>Android and iOS</span></h5>
        <a href="#download">DOWNLOAD NOW</a>
    </div>
    <!-- end sides --> 
    <div class="sides"><img src="images/banner-theme.png" alt="Image" class="mockup-one"></div>
    <!-- end sides -->
  </div>
  <!-- end hero-content -->
  <div class="wave-bg"></div>
  <!-- end wave-bg --> 
</header>
<!-- end header -->
<section class="icon-features" id="features">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 wow flipInX">
        <h3 class="title" style="margin-top:30px !important;">FEATURES</h3>
        <h6 class="sub-title">We have handpicked the most used features in Hubble and packaged them into a mobile app.</h6>
      </div>
      <!-- end col-12 -->
      <div class="col-md-3 col-sm-3 col-xs-12 wow fadeInLeft"> <img src="images/icon11.png" alt="Image">
        <h4>EMPLOYEE SEARCH</h4>
        <p>Now search all your colleagues based on Name or Email</p>
      </div>
      <!-- end col-4 -->
      <div class="col-md-3 col-sm-3 col-xs-12 wow fadeInUp"> <img src="images/icon22.png" alt="Image">
        <h4>GROUP NOTIFICATIONS</h4>
        <p>Get notified with timely updates about Miracle</p>
      </div>
      <!-- end col-4 -->
      <div class="col-md-3 col-sm-3 col-xs-12 wow fadeInRight"> <img src="images/icon33.png" alt="Image">
        <h4>HUBBLE SIGNIN</h4>
        <p> Just sign in with your existing credentials</p>
      </div>
      <!-- end col-4 -->
      <div class="col-md-3 col-sm-3 col-xs-12  wow fadeInUp"> <img src="images/icon44.png" alt="Image">
        <h4>FACILITY ISSUE</h4>
        <p>Let us know your issue and the team will handle it</p>
      </div>
      <!-- end col-4 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>

<section class="about-forro" id="forro">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 text-center wow flipInX">
        <h3 class="title">MIRACLE ME</h3>
        <h6 class="sub-title">The app that you have been waiting for a while now!</h6>
      </div>
      <!-- end col-12 -->
      <div class="col-md-5 col-sm-12 col-xs-12 wow fadeInLeft">
        <h4>Power of Hubble in your hands</h4>
        <p><strong>Miracle Me</strong> is a new mobile app that will help using features of Hubble on the go, developed by our very CAS and Innovation Labs Teams. The app is currently on the first version and is available on both iOS and Android with the following features,</p>
        <ul>
          <li><i class="fa fa-chevron-right" aria-hidden="true"></i> EMPLOYEE SEARCH</li>
          <li><i class="fa fa-chevron-right" aria-hidden="true"></i> GROUP NOTIFICATIONS</li>
          <li><i class="fa fa-chevron-right" aria-hidden="true"></i> HUBBLE SIGNIN</li>
          <li><i class="fa fa-chevron-right" aria-hidden="true"></i> FACILITY ISSUE</li>
        </ul>
        </div>
      <!-- end col-6 -->
      <div class="col-md-7 col-sm-12 col-xs-12 wow fadeInRight"> <img src="images/miracleme4phones.png" alt="Image"> </div>
      <!-- end col-6 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end about-forro -->
<section class="download-bar" id="download">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 wow flipInX">
        <h3>DOWNLOAD</h3>
        
        <a href="https://itunes.apple.com/in/app/miracleme/id1290334445" target="_blank"> <img src="images/icon-appstore.svg" alt="Image"> <span>Available on</span>
        <h5>APP STORE</h5>
        </a> <a href="https://play.google.com/store/apps/details?id=com.miracleme.android&hl=en" target="_blank"> <img src="images/icon-googleplay.svg" alt="Image"> <span>Available on</span>
        <h5>GOOGLE PLAY</h5>
        </a> </div>
      <!-- end col-12 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end download-bar -->
<section class="gallery" id="gallery">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 text-center wow flipInX">
        <h3 class="title">GALLERY</h3>
        <h6 class="sub-title">Check out our screenshots in the app</h6>
      </div>
      <!-- end col-12 -->
      <div class="col-xs-12 wow fadeInUp">
        <div class="owl-carousel">
          <div><a href="#" class="fancybox"><img src="images/miracleme-screen1.jpg" alt="Image"></a></div>
          <div><a href="#" class="fancybox"><img src="images/miracleme-screen2.jpg" alt="Image"></a></div>
          <div><a href="#" class="fancybox"><img src="images/miracleme-screen3.jpg" alt="Image"></a></div>
          <div><a href="#" class="fancybox"><img src="images/miracleme-screen5.jpg" alt="Image"></a></div>
          <div><a href="#" class="fancybox"><img src="images/miracleme-screen6.jpg" alt="Image"></a></div>
          
        </div>
        <!-- end owl-carousel --> 
      </div>
      <!-- end col-12 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container-fluid --> 
</section>
<!-- end gallery -->
<!----
<section class="developers">
<img src="images/hero1.jpg" alt="Image" class="hero">
<div class="container">
<div class="row">
  <div class="col-xs-12">
    <h3 class="title">DEVELOPERS</h3>
	</div>
    <!-- end col-12 
    <div class="col-md-3 col-sm-6 col-xs-12 wow flipInX">
      <figure> <img src="images/team1.jpg" alt="image">
        <figcaption>
          <h5>Jason Statham</h5>
          <small>Mobile UI-UX Designer</small>
          <ul>
            <li> <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
            <li> <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
            <li> <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
          </ul>
        </figcaption>
      </figure>
    </div>
    <!-- end col-3 
    <div class="col-md-3 col-sm-6 col-xs-12 wow flipInX">
      <figure> <img src="images/team2.jpg" alt="image">
        <figcaption>
          <h5>Jessica Graham</h5>
          <small>Mobile App Developer</small>
          <ul>
            <li> <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
            <li> <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
            <li> <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
          </ul>
        </figcaption>
      </figure>
    </div>
    <!-- end col-3
    <div class="col-md-3 col-sm-6 col-xs-12 wow flipInX">
      <figure> <img src="images/team3.jpg" alt="image">
        <figcaption>
          <h5>Jackie Bauer</h5>
          <small>Database Manager</small>
          <ul>
            <li> <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
            <li> <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
            <li> <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
          </ul>
        </figcaption>
      </figure>
    </div>
    <!-- end col-3 
    <div class="col-md-3 col-sm-6 col-xs-12 wow flipInX">
      <figure> <img src="images/team4.jpg" alt="image">
        <figcaption>
          <h5>Yasmin Pierson</h5>
          <small>Digital Marketter</small>
          <ul>
            <li> <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
            <li> <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
            <li> <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
          </ul>
        </figcaption>
      </figure>
    </div>
    <!-- end col-3  
  </div>
  <!-- end row  
</div>
<!-- end container 
</section>
<!-- end developers
--->
<!-- end clients -->
<section class="fun-facts" id="funfacts">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 text-center wow flipInX">
        <h3 class="title" style="color:#ffffff;">FUN FACTS</h3>
      </div>
      <!-- end col-12 -->
      <div class="col-md-2 col-md-offset-3 col-sm-4 wow fadeInLeft"> <img src="images/icon8.png" alt="Image">
        <h4 style="color:#ffffff;">Total Resumes</h4>
        <small> </small> <span class="number">268</span><span class="symbol">K</span> </div>
      <!-- end col-2 -->
      <div class="col-md-2 col-sm-4 wow fadeInUp"> <img src="images/icon9.png" alt="Image">
        <h4 style="color:#ffffff;">Total Users</h4>
        <small></small> <span class="number">2</span><span class="symbol">K</span> </div>
      <!-- end col-2 -->
      <div class="col-md-2 col-sm-4 wow fadeInRight"> <img src="images/icon10.png" alt="Image">
        <h4 style="color:#ffffff;">Total Leaves Applied</h4>
        <small></small> <span class="number">27</span><span class="symbol">K</span> </div>
      <!-- end col-2 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end fun-facts -->


<section class="contact" id="contact">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 text-center wow flipInX">
        <h3 class="title">CONTACT</h3>
      </div>
      <!-- end col-12 -->
      <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft" >
       <center class="pull-right pot" style="margin-right:100px;"><div class="contact-box"> <i class="fa fa-phone" aria-hidden="true" style="margin-left: -102px;"></i>
          <div class="content">
            <h5 style="margin-left: 35px;">PHONE</h5>
            <span>P: (248)-233-7062</span></div>
          <!-- end content -->
        </div></center>
          <div class="vl" style=" border-right: 6px solid #0d416b ; height: 80px;"></div>
        <!-- end contact-box -->
      </div>
      <!-- end col-4 -->
    

      <!-- end col-4 -->
      <div class="col-md-6 col-sm-6 col-xs-12 wow" >
        <div class="contact-box"><i class="fa fa-envelope-open-o pot2" aria-hidden="true" style="margin-left: 50px;"></i>
          <div class="content pot1">
            <h5>E-MAIL</h5>
            <span><a href="mailto:hubble@miraclesoft.com">hubble@miraclesoft.com</a></span></div>
          <!-- end content --> </div>
        <!-- end contact-box -->
      </div>
      <!-- end col-4 -->
   
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end contact -->
<footer class="footer">
<a href="#contact" id="feedbackFooterRef" style="display: none;">Temp</a>
  <div class="container">
    <div class="row">
      <div class="col-xs-12 wow fadeInUp">
        <form class="newsletter" id="feedbackForm" name="feedbackForm" method="post" action="#" >
          <h4 class="pot3">Compliments/Feedback</h4>
          
          
           <div class="alert alert-success" id="successFeedBackDiv"  style="display: none;" >
    <button type="button" class="close" aria-label="Close" onclick="closeErrorMessage('successFeedBackDiv','successFeedBackMessage')" span aria-hidden="true">&times;</span></button>
    <span id="successFeedBackMessage"></span>
     
  </div>

  
  <div class="alert alert-danger" id="exceptionFeedbackDiv" style="display: none;" >
        <button type="button" class="close" aria-label="Close" onclick="closeErrorMessage('exceptionFeedbackDiv','exceptionFeedbackMessage')" span aria-hidden="true">&times;</span></button>
    <strong><span id='exceptionFeedbackMessage'></span></strong> 
  </div>
  
 
   <div id="errorMessageFeedbackDiv" style="display: none;">
       <div class="alert alert-danger">
        <button type="button" class="close" onclick="closeErrorMessage('errorMessageFeedbackDiv','feedbackErrorMessage')" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong><span id="feedbackErrorMessage"></span></strong> 
  </div>
      </div>
      
  <div id="feedbackInputFieldsDiv">
  
  <input type="hidden" id="currentEmpId" name="currentEmpId" placeholder="Your message" value="0">
          <input type="text" required="required" placeholder="Your message" id="feedbackMessage" name="feedbackMessage" onchange="return miracleMeFieldLengthValidator(this);">
            
           <button type="submit" id="btnFeedBackSubmit" name="btnFeedBackSubmit" onclick="return loadFeedbackButton();" data-loading-text="<i class='fa fa-spinner fa-spin '></i> loading...">Send Now</button>
           </div>
          </form>
       
      </div>
      <!-- end col-12 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container -->
  <div class="sub-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12 text-left"><span> &copy;&nbsp;<?php echo date("Y"); ?> <a href="http://www.miraclesoft.com/">Miracle Software Systems, Inc.</a></span></div>
        <!-- end col-4 -->
        <div class="col-md-4 col-sm-4 col-xs-12 text-center">
          
        </div>
        <!-- end col-4 -->
        <div class="col-md-4 col-sm-4 col-xs-12 text-right">
          <ul class="social-media">
            <li> <a href="https://www.facebook.com/miracle45625"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
              <li> <a href="https://plus.google.com/+Team_MSS/"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
            <li> <a href="https://twitter.com/Team_MSS"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
              <li> <a href="https://www.linkedin.com/company/miracle-software-systems-inc"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
            <li> <a href="https://www.youtube.com/c/Team_MSS"><i class="fa fa-youtube" aria-hidden="true"></i></a> </li>
              
          </ul>
          
        </div>
        <!-- end col-4 --> 
      </div>
      <!-- end row --> 
    </div>
    <!-- end container --> 
  </div>
</footer>
<!-- end footer --> 

<!-- JS FILES --> 
<script src="js/jquery.min.js"></script>
 <script type="text/javascript">

	$(window).load(function(){
		$("body").addClass("page-loaded");	
		if($("#requestEmpId").val()=="0"){
		    
			$('#myModal').modal('show');
		}else {
			$("#currentEmpId").val($("#requestEmpId").val());
			
		}


		if($("#isFeedbackSubmitted").val()&&$("#isFeedResultMessage").val().trim().length>0){
			
			
			location.href = "#contact";
			$("#feedbackInputFieldsDiv").hide();
			//window.scrollTo(0,document.body.scrollHeight);
			displayErrorMessage("<strong>Thank you!</strong> for submitting your feedback. Our contact person will reach you soon !","successFeedBackDiv","successFeedBackMessage");
			}else if($("#isFeedResultMessage").val().trim().length>0){
				//$("#feedbackFooterRef").click();
				location.href = "#contact";
				//window.scrollTo(0,document.body.scrollHeight);
				displayErrorMessage($("#isFeedResultMessage").val(),"exceptionFeedbackDiv","exceptionFeedbackMessage");
				
				}
	});
</script>  

</script>  
<script src="js/bootstrap.min.js"></script>
<script src="../js/AppConstants.js"></script> 
<script src="js/miraclemeValidations.js"></script>  

<script src="js/jPushMenu.js"></script> 
<script src="js/owl.carousel.min.js"></script> 
<script src="js/jquery.easing.min.js"></script> 
<script src="js/wow.min.js"></script> 
<script src="js/jquery.fancybox.js"></script> <script src="js/scripts.js"></script> 
<!-- <script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript" ></script> 
<script src="js/google-maps.js" type="text/javascript"></script> -->
</body>
</html>