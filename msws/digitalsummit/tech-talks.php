<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Digital Summit | Tech Talks</title>
<!-- Stylesheets -->
<link href="css/style.1.css" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/revolution-slider.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<link rel="stylesheet" href="css/font-awesome.css" type="text/css" />
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
<meta name="description" content=" Any questions regarding Digital Summit �17, Visakhapatnam (or) AP Cloud? Reach out to us by filling the form below ">
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

#footerReadMore:hover {
    color: #ef4048 !important;
}

#footerReadMore {
    color: #ababab !important;
}
#footerEmail:hover {
    color: #ef4048 !important;
}

#footerEmail {
    color: #ababab !important;
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


.travel-block .inner-box {
    margin:25px 90px;
}
.schedule-carousel-outer .days-outer .days-carousel {
    max-width: 90px!important;
}
.sec-title {
    margin-bottom:-20px;
}

.box{
        background-color: #0d416b;
        margin-left:70px;
}
.box h2:before {
    width: 0px!important;
}
.travel-block .inner-box .image img {
     height: auto; 
}
.sec-title h2:after {
    position: absolute;
    content: '';
    left: 0px;
    bottom: 0px;
    width: 45px;
    height: 1px;
    background-color: #0d416b;
}
.sec-title h2:before {
    position: absolute;
    content: '';
    left: 15px;
    bottom: 5px;
    width: 45px;
    height: 1px;
    background-color: #0d416b
}
.services-style-one .inner-box .text {
    font-size: 16px;
}
.services-style-one .inner-box .icon-box {
    font-size: 45px;
    line-height:62px;
}
.services-style-one .inner-box h3 {
    font-size: 24px;
}
.student-bg{
       background-color: #0d4165;
    padding: 11px 11px;
    margin-top: 0px;
    color: #ffffff !important;
    text-align: center;
}  

.lower-box1{
    background: #eee;
margin-top: -11px;
padding: 21px 32px;
}
.sec-title.centered .text {
    max-width: 100%;
    text-align: center;
    color: #666666;
}
.sec-title h2 {
    position: relative;
    color: #222222;
    font-size: 40px;
    font-weight: 700;
    z-index: 10;
    padding-bottom: 15px;
    margin-bottom: 35px !important;
    text-transform: capitalize;
    font-family: 'Poppins', sans-serif;
}

.schedule-carousel-outer .days-outer .days-carousel {
    max-width: 90px!important;
}

.box {
    background-color: #8c8c8c;
    margin-left: 70px;
}
.sec-title h2:after {
    position: absolute;
    content: '';
    left: 0px;
    bottom: 0px;
    width: 45px;
    height: 1px;
    background-color: #8c8c8c;
}
.sec-title h2:before {
    position: absolute;
    content: '';
    left: 15px;
    bottom: 5px;
    width: 45px;
    height: 1px;
    background-color: #8c8c8c;
}
.modal-header .close {
    margin-top: -23px !important;
}
.modal-header {
    border-bottom: none !important;
    background-color:#ffffff;
   
}
.modal-footer {
    border-top: none !important;
}


.speaker-name{
   
       font-size: 13px;
       font-weight: bold;
    color: #ababab;
}
.speaker-designation{
   
       font-size: 13px;
    color: #ababab;
}
.sec-title h3{
    top:-32px;
}

.sticky-header .main-menu .navigation > li > a {
    padding: 19px 15px !important;
    color: #333333 !important;
}
body {
    font-family: 'Open Sans', sans-serif !important;
    }
</style>
</head>

<body>

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
     <!-- Main Header -->
  <?php include 'DS17Header.php'; ?>
    <!--End Main Header -->
    
    <!--Page Title-->
  <section class="page-title"  style="background-image:url(<?= AMAZON_URL ?>/ds17/images/header-images/techtalk.jpg);margin-top:-114px!important;background-position:0% 27%;padding-bottom:15px;">
    	<div class="auto-container">
        	<div class="inner-box">
              <h1 style="font-family: 'Poppins', sans-serif;">Tech Talks</h1>
                <ul class="bread-crumb">
                	<li><a href="index.php">Home</a></li>
                    <li>Tech Talks</li>
                </ul>
            </div>
        </div>
    </section>
     <section class="about-section-two">
    	<div class="auto-container">
        	<div class="row clearfix">
            	<!--Content Column-->
                <div class="content-column col-md-12 col-sm-12 col-xs-12">
                	<div class="inner">
                	     <div class="sec-title centered">
            	<h2>December 13th-15th, 2017 - Digital Valley (Vizag)</h2>
            </div>
                 
                    
                       
                    </div>
                </div>
                <!--Video Column-->
               <!--<div class="text">From Blockchain to DevOps, Artificial Intelligence to Cloud Applications � come to the city of destiny to explore the future of technology. Digital Summit 2017 gives you a chance to see the future of the world up close, while also providing you the best exposure to how you can be a part of this revolution. </div>-->
            </div>
        </div>
    </section>
     <section class="about-section" style="padding: 0px 0px 0px !important;">
    	<div class="auto-container">
       <div class="sec-title centered">
          <div class="text">From Blockchain to DevOps, Artificial Intelligence to Cloud Applications - come to the city of destiny to explore the future of technology. Digital Summit 2017 gives you a chance to see the future of the world up-close,
 while also providing you the best exposure about how you can be a part of this revolution. Explore career opportunities, interact with expert speakers, check our cool demos and work on hands-on labs - all at Tech Talks @ Digital Summit 2017! <strong><br>Register right away and make your way to Vizag - the future is changing and we want you to be a part of it.</strong></div>
       
        </div>
           </div>
          </section>
           <!-- <section class="travel-section" style="padding: 0px 0px 22px;">
    	<div class="auto-container">
    
            <div class="sec-title centered">
            	<h2>Host Venues</h2>
            </div>
            
            <div class="row clearfix">

                <div class="travel-block col-md-6 col-sm-4 col-xs-12">
                	<div class="inner-box">
                    	<div class="image">
                        <img src="/images/port-stadium.jpg" alt="heights" />
                        </div>
                                            
                         <div class="lower-box">
                         <h3><a>Port Stadium</a></h3>
                        <div class="text">Akkayyapalem Rd, Kailasapuram,</div>
                            <a href="https://www.google.co.in/maps/place/Port+Trust+Diamond+Jubilee+Stadium/@17.7426705,83.2996889,17z/data=!3m1!4b1!4m5!3m4!1s0x3a39432d2282cce5:0x749716029f96296c!8m2!3d17.7426705!4d83.3018776" target="_blank" class="theme-btn btn-style-one">Directions</a>
                        </div>
                    </div>
                </div>
                 <div class="travel-block col-md-6 col-sm-4 col-xs-12">
                	<div class="inner-box">
                    	<div class="image">
                        <img src="images/partners/valley1.png" alt="valley" />
                        </div>
                                            
                         <div class="lower-box">
                        <h3><a>Miracle Valley</a></h3>
                        <div class="text">Hill No. 2, Rushikonda, Visakhapatnam</div>
                            <a href="https://www.google.co.in/maps/place/Miracle+Valley,+AZ+85615,+USA/@31.377701,-110.1734842,14z/data=!3m1!4b1!4m5!3m4!1s0x86d0d212b444c9db:0x9579ebb731db6a11!8m2!3d31.3777027!4d-110.1559746" target="_blank" class="theme-btn btn-style-one">Directions</a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>-->
    <!--End Page Title-->
    <br><br>
       
     <section class="subscribe-section">
    	<div class="auto-container">
        	<div class="row clearfix">
            	<!--Column-->
            	<div class="column col-md-7 col-md-12 col-xs-12">
            	<a href="techtalks-registration.php"><h2>Want to be at Digital Summit '17 ?</h2> <h2 style="color: #d43058 ;margin-top: 0px;">Register for Tech Talks Today!</h2></a>
            		<div class="text">Expert Speakers, Hackathons, Celebrations and more - this December :)</div>
                </div>
                <!--Column-->
                <div class="column col-md-5 col-md-12 col-xs-12">
                	
                    <!--Subscribe form-->
                    <div class="subscribe-form">
                        <form method="post" action="techtalks-registration.php">
                            <div class="form-group">
                            
                  <a href=""><button class="theme-btn btn-style-one" type="button" style="width:240px !important;height:60px !important;font-sixe:16px !important;left:170px;border-radius:0px !important" >Registrations Closed</button></a>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
     
       <section class="about-section">
    	<div class="auto-container">
        	<!--Sec Title-->
            <div class="sec-title centered">
            	<h2>Technology Areas</h2>
               
            </div>
            
            <div class="row clearfix">
            	<!--Services Style One-->
            	<div class="services-style-one col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="icon-box">
                        	<i class="fa fa-cloud" aria-hidden="true"></i>
                        </div>
                        <h3><a >Cloud Applications</a></h3>
                        <div class="text"> Build and Scale your applications in minutes instead of months</div>
                    </div>
                </div>
                
                <!--Services Style One-->
            	<div class="services-style-one col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="icon-box">
                        <i class="fa fa-microchip" aria-hidden="true"></i>
                        </div>
                        <h3><a>Internet of Things</a></h3>
                        <div class="text">Create networks of things to deliver smarter customer experiences</div>
                    </div>
                </div>
                
                <!--Services Style One-->
            	<div class="services-style-one col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="icon-box">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        </div>
                        <h3><a >Enterprise Security</a></h3>
                        <div class="text">Prepare your systems, applications and data to defend themselves</div>
                    </div>
                </div>
                
            </div>
             <div class="row clearfix">
            	<!--Services Style One-->
            	<div class="services-style-one col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="icon-box">
                        <i class="fa fa-wrench" aria-hidden="true"></i>
                        </div>
                        <h3><a >DevOps and Agility</a></h3>
                        <div class="text">Rapidly deliver new apps and features to your users with an agile approach</div>
                    </div>
                </div>
                
                <!--Services Style One-->
            	<div class="services-style-one col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="icon-box">
                        <i class="fa fa-puzzle-piece" aria-hidden="true"></i>
                        </div>
                        <h3><a>Cognitive Computing</a></h3>
                        <div class="text">Make your solutions smarter with bots, machine learning and AI</div>
                    </div>
                </div>
                
                <!--Services Style One-->
            	<div class="services-style-one col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="icon-box">
                        <i class="fa fa-btc" aria-hidden="true"></i>
                        </div>
                        <h3><a >Blockchain Networks</a></h3>
                        <div class="text">Build new age solutions with a distributed ledger based approach</div>
                    </div>
                </div>
                
            </div>
             <div class="sec-title centered">
                <a href="">
                    <button style="cursor:pointer;"class="theme-btn btn-style-one" type="button" style="transition: all 0.3s ease 0s; min-height: 0px; min-width: 0px; line-height: 24px; border-width: 2px; margin: 0px; padding: 10px 40px; letter-spacing: 0px; font-size: 14px;">Registrations Closed</button>
                </a>
             </div>
             </div>
    </section>
          <br>  
            
            
<section class="schedule-section" style="background-image:url(<?= AMAZON_URL ?>/ds17/images/background/3.jpg);">
    	<div class="auto-container">
        	<!--Sec Title-->
            <div class="sec-title light centered">
            	<h2>Event Schedule</h2>
                <h3>Event</h3>
                <div class="text">Being hosted in Visakhapatnam, the inaugural will be held on Dec 13th. The event was held at multiple venues in Vizag and is packed with over 3000 attendees across technical talks, executive meetings, job fairs, hackathons, celebrations and many more.</div>
            </div>
            <br><br>
            <div class="schedule-carousel-outer">
            	<!--Days Outer-->
              <div class="days-outer">
                	<ul class="days-carousel owl-theme owl-carousel">
                         <li class="day"><div class="btn-inner"><div class="icon"><span><h6>DEC 13TH</h6></span></div>WED</div></li>
                        <li class="day"><div class="btn-inner"><div class="icon"><span><h6>DEC 14TH</h6></span></div>THU</div></li>
                        <li class="day"><div class="btn-inner"><div class="icon"><span><h6>DEC 15TH</h6></span></div>FRI</div></li>
                        
                        
                    </ul>
                </div>
                  <div class="days-outer1">
                	<ul class="days-carousel owl-theme owl-carousel">
                           <li class="day"><div class="btn-inner"><div class="icon"><span><h6>DEC 13TH</h6></span></div>WED</div></li>
                        <li class="day"><div class="btn-inner"><div class="icon"><span><h6>DEC 14TH</h6></span></div>THU</div></li>
                        <li class="day"><div class="btn-inner"><div class="icon"><span><h6>DEC 15TH</h6></span></div>FRI</div></li>
                        
                        
                    </ul>
                </div>
                
                <!--Speakers Carousel-->
                  <div class="speakers-carousel owl-theme owl-carousel">
                  
                    <!--Newly added start-->
                    
                    
                      <!--Speakers sessions DEC 13-->
                    <div class="slide-item">
                    	<div class="inner">
                        	<div class="speakers clearfix">
                        	    <div class="speaker">
                                	<div class="image img-circle" >
                                	<img class="img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/badge.jpg" alt=""></div>
                                    <div class="lower">
                                    	<div class="time"><br>08:00am - 10:00am | Port Stadium</div>
                                        <div class="speaker-title"> Badge Pickup</div>
                                      <div class="text-content">Welcome to the largest IT Summit in AP, pick up your badge and enter the world of digital transformation</div>
                                    </div>
                                </div>
                        	       <div class="speaker">
                                	<div class="image img-circle" data-toggle="modal" data-target="" ><img class="img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/Inaguration.jpg" alt=""></div>
                                    <div class="lower">
                                    	<div class="time">10:00am - 10:30am | Port Stadium</div>
                                        <div class="speaker-title"> Digital Summit '17 Launch</div>
                                      <div class="text-content">Digital Summit 2017 is a week long extravaganza being conducted from December 13th - 17th, 2017 in the city of destiny, Visakhapatnam. Through technical talks, hackathons and job fairs - this event helps the students to get a great exposure towards technology and career opportunities.</div>
                                    </div>
                                </div>
                                
                                <div class="speaker">
                                	<div class="image img-circle" data-toggle="modal" data-target="" >
                                	    <img class="img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/speeches.jpg" alt=""></div>
                                    <div class="lower">
                                    	<div class="time">10:30am - 12:00pm |  Port Stadium</div>
                                       <!-- <div><font class="speaker-name">Ajay Alubelli |</font><font class="speaker-designation">   Lead Researcher - Mobility</font></div>-->
                                        <div class="speaker-title"> Hear from our Guests</div>
                                     <div class="text-content">Let's dive into the world of future technologies through this summit. Our speakers will make you understand the future of technology with some interesting keynote sessions. Also get to interact with the speakers and explore more about trending technologies.
                                     </div>
                                    </div>
                                     
                                       <div class="row">
                                            <div class="col-sm-4">
                                             <div class="image img-circle" data-toggle="modal"  style="left:77px !important">
                                	   <center> <img class="img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/Ganta-Srinivas.jpg" alt="avadhani"></center>
                                	    <br>
                                	    </div>
                                	    <br><br><br><br><br><br><br><br>
                                	    <div><font class="speaker-name" style="margin-left:56px;">Ganta Srinivasa Rao </font><br><font class="speaker-designation" style="margin-left: 27px;">Human Resource Development</font></div>
                                    
                                    </div>
                                         <div class="col-sm-4">
                                             <div class="image img-circle" data-toggle="modal"  style="left:65px !important">
                                <img class="img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/Krishna-Babu.jpg" alt="krishnaP">
                                	    <br>
                                	    </div>
                                	    <br><br><br><br><br><br><br><br>
                                	    <div><font class="speaker-name" style="margin-left:50px;">M.T.Krishna Babu </font><br><font class="speaker-designation" style="margin-left:19px !important;">Visakhapatnam Port Trust(VPT)</font></div>
                                    
                                    </div>
                                    
                                    
                                    
                                     <div class="col-sm-4">
                                             <div class="image img-circle"  data-toggle="modal"  style="left:59px !important">
                                	   <center> <img class="img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/Uma_Maheswara_Rao.jpg" alt="subhasha"></center>
                                	    <br>
                                	    </div>
                                	    <br><br><br><br><br><br><br><br>
                                	    <div><font class="speaker-name" style="margin-left:22px;">V.Uma Maheswara Rao  </font><br><font class="speaker-designation"  style="margin-left:41px;">Andhra University</font></div>
                                    
                                    </div>
                                    
                                     </div>
                                     
                                      <div class="row">
                                            <div class="col-sm-4">
                                             <div class="image img-circle" data-toggle="modal" data-target="#exampleModal" style="left:77px !important">
                                	   <center> <img class="img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/plokam.png" alt="plokam"></center>
                                	    <br>
                                	    </div>
                                	    <br><br><br><br><br><br><br><br>
                                	    <div><font class="speaker-name" style="margin-left:81px;">Prasad Lokam </font><br><font class="speaker-designation" style="margin-left: 36px;">Miracle Software Systems,Inc.</font></div>
                                    
                                    </div>
                                  
                                       <div class="col-sm-4">
                                             <div class="image img-circle" data-toggle="modal"  style="left:63px !important">
                                <img class="img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/Pravin-Kumar-ias.jpg" alt="">
                                	    <br>
                                	    </div>
                                	    <br><br><br><br><br><br><br><br>
                                	    <div><font class="speaker-name" style="margin-left:60px;">Pravin Kumar </font><br><font class="speaker-designation" style="margin-left: 58px;">District Collector</font></div>
                                    
                                    </div>
                                       <div class="col-sm-4">
                                             <div class="image img-circle" data-toggle="modal" data-target="#exampleModal26"  style="left:59px !important">
                                	   <center> <img class="img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/avadani.png" alt="avadhani"></center>
                                	    <br>
                                	    </div>
                                	    <br><br><br><br><br><br><br><br>
                                	    <div><font class="speaker-name" style="margin-left:50px;">Dr.P S Avadhani </font><br><font class="speaker-designation" style="margin-left: 50px !important;">Andhra University</font></div>
                                    
                                    </div>
                                     
                                    
                                    </div>
                                      <div class="row">
                                      <div class="col-sm-4">
                                             <div class="image img-circle" data-toggle="modal" style="left:65px !important">
                                                <img class="img-circle " src="<?= AMAZON_URL ?>/ds17/images/speakerimages/userimage.png" alt="subbarao">
                                	    <br>
                                	    </div>
                                	    <br><br><br><br><br><br><br><br>
                                	    <div><font class="speaker-name" style="margin-left:77px;">Subba Rao</font><br><font class="speaker-designation" style="margin-left: 94px;">APIIC</font></div>
                                    
                                    </div>
                                       <div class="col-sm-4">
                                             <div class="image img-circle" data-toggle="modal" style="left:59px !important">
                                <img class="img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/TirumalaraoChalla.jpg" alt="">
                                	    <br>
                                	    </div>
                                	    <br><br><br><br><br><br><br><br>
                                	    <div><font class="speaker-name" style="margin-left:36px;">Tirumala Rao Chamalla </font><br><font class="speaker-designation" style="margin-left: 90px;">APEITA</font></div>
                                    
                                    </div>
                                    
                                        <div class="col-sm-4">
                                             <div class="image img-circle" data-toggle="modal"  style="left:65px !important">
                                                <img class="img-circle " src="<?= AMAZON_URL ?>/ds17/images/speakerimages/Nageswara.jpg" alt="nageswara">
                                	    <br>
                                	    </div>
                                	    <br><br><br><br><br><br><br><br>
                                	    <div><font class="speaker-name" style="margin-left:50px;"> G.Nageswara Rao </font><br><font class="speaker-designation" style="margin-left: 50px;">Andhra University</font></div>
                                    
                                    </div>
                                    
                                    </div>
                                     
                                </div>
                                
                                
                                
                           <div class="speaker">
                                	<div class="image img-circle" >
                                	    <img class="img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/lunch.png" alt=""></div>
                                    <div class="lower">
                                    	<div class="time"><br>12:00pm - 02:00pm | Port Stadium</div>
                                        <div class="speaker-title">Lunch Break</div>
                                      <div class="text-content">Grab a bite and take a nap, digest all the information because the day ain't over yet! </div>
                                    </div>
                                </div>
                                 <div class="speaker">
                                	<div class="image img-circle" data-toggle="modal" data-target="#exampleModal6" ><img class="img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/chanakya.png" alt="chanakya"></div>
                                    <div class="lower">
                                    	<div class="time">02:00pm - 02:15pm | Port Stadium</div>
                                        <div><font class="speaker-name">Chanakya Lokam | </font><font class="speaker-designation">Director - Miracle Innovation Labs</font></div>
                                         <div class="speaker-title">Welcome to Digital Summit 2017</div>
                                     <div class="text-content">Lets kick this off! Technology has become a key driver for business, and the focus of Digital Summit is to enable the talent pool of Andhra Pradesh so that you are better prepared for your careers. Together we can make Vizag as the Digital Valley! </div>
                                    </div>
                                </div>
                                  <div class="speaker">
                                	<div class="image img-circle" data-toggle="modal" data-target="#exampleModal18" ><img class="img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/PINGALI.jpg" alt="pingali"></div>
                                    <div class="lower">
                                    	<div class="time">02:15pm - 02:45pm | Port Stadium</div>
                                        <div><font class="speaker-name">Dr. Gopal Pingali | </font><font class="speaker-designation">Distinguished Engineer and VP - GTS Labs (IBM)</font></div>
                                         <div class="speaker-title">Your Future : How Cognitive and Cloud are transforming our Lives</div>
                                     <div class="text-content"> With advancements in neural networks and computing power in the cloud, the onus is now on developers like you to build solutions that are intelligent, connected and personalized. Listen to Dr. Gopal Pingali as he talks more about how these technologies are transforming the future that we live in.  </div>
                                    </div>
                                </div>
                                  <div class="speaker">
                                	<div class="image img-circle" data-toggle="modal" data-target="#exampleModal19" ><img class="img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/Pothu-venkata-dinesh.jpg" alt="dinesh"></div>
                                    <div class="lower">
                                    	<div class="time">02:45pm - 03:00pm | Port Stadium</div>
                                        <div><font class="speaker-name">Pothu Venkata Dinesh | </font><font class="speaker-designation">Founder, CEO, & Educator (Prakriya Academy)</font></div>
                                         <div class="speaker-title">Prakriya Academy - The journey of a first time entrepreneur</div>
                                     <div class="text-content"> So, you want to be an entrepreneur - but what does the start up journey hold for you? Entreprenuership is at an all time high in India and the startup ecosystem continues to grow at a inspiring pace. In this session, you will get a glimpse of mistakes and obstacles faced by a youngster who wanted to fulfill his dream by starting a company. Hear more about the story behind Prakriya Academy. </div>
                                    </div>
                                </div>
                                  <div class="speaker">
                                	<div class="image img-circle" data-toggle="modal" data-target="#exampleModal" ><img class="img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/plokam.png" alt="prasad"></div>
                                    <div class="lower">
                                    	<div class="time">03:00pm - 03:15pm | Port Stadium</div>
                                        <div><font class="speaker-name">Prasad Lokam | </font><font class="speaker-designation">CEO and President (Miracle Software Systems)</font></div>
                                         <div class="speaker-title">Miracle, AP Cloud, and Vizag - The Digital Valley </div>
                                     <div class="text-content">The visionary behind Miracle, AP Cloud and Digital Summit - hear more from Prasad himself as he speaks about his dream for Vizag, what Miracle is doing to grow the valley and what their plans are for 2018 and beyond. </div>
                                    </div>
                                </div>
                                <div class="speaker">
                                	<div class="image img-circle" data-toggle="modal" data-target="#exampleModal24" ><img class="img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/Sunder-Muthevi.jpg" alt="prasad"></div>
                                    <div class="lower">
                                    	<div class="time">03:15pm - 03:30pm | Port Stadium</div>
                                        <div><font class="speaker-name">Sunder Muthevi | </font><font class="speaker-designation">Chief Technology Officer (Pi DATACENTERS)  </font></div>
                                         <div class="speaker-title">Artificial Intelligence in a Software Defined DataCenter - Future Trends</div>
                                     <div class="text-content">Pi DataCenters runs Asia's Largest Uptime Institute TIER IV Certified Data Center right here in Amravati, Andhra Pradesh. Come and hear the brains behind their enterprise cloud platform, Sunder Muthevi, as he speaks about the role of Artificial Intelligence in a Software Defined Datacenter and what the future data center trend are. </div>
                                    </div>
                                </div>
                                
                                 <div class="speaker">
                                	<div class="image img-circle" data-toggle="modal" data-target="#exampleModal25" ><img class="img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/Ravi.jpg" alt="ravi"></div>
                                    <div class="lower">
                                    	<div class="time">03:30pm - 04:00pm | Port Stadium</div>
                                        <div><font class="speaker-name">Ravi Eswarapu | </font><font class="speaker-designation">President (ITAAP) - Moderator </font></div>
                                         <div class="speaker-title">Panel - Effect of Digital Transformation on Vizag and Students</div>
                                     <div class="text-content">
Digital Transformation is changing the way enterprises work, industries operate and people live their lives. So what does this all mean for a budding entrepreneur, a student (or) just common man. Join us as our panelists discuss the nuances of digital technologies and how they are disrupting every sphere of life.  </div>
                                    </div>
                                      <div class="row">
                                         <div class="col-sm-3">
                                             <div class="image img-circle" data-toggle="modal" data-target="#exampleModal" style="left:39px !important">
                                <img class="img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/plokam.png" alt="">
                                	    <br>
                                	    </div>
                                	    <br><br><br><br><br><br><br><br>
                                	    <div><font class="speaker-name" style="margin-left:35px;">Prasad Lokam </font><br><font class="speaker-designation" style="margin-left: 5px;">Miracle Software Systems</font></div>
                                    
                                    </div>
                                    
                                      <div class="col-sm-3">
                                             <div class="image img-circle" data-toggle="modal" data-target="#exampleModal26" style="left:51px !important">
                                	   <center> <img class="img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/avadani.png" alt="avadhani"></center>
                                	    <br>
                                	    </div>
                                	    <br><br><br><br><br><br><br><br>
                                	    <div><font class="speaker-name" style="margin-left:50px;">Dr. P S Avadhani </font><br><font class="speaker-designation" style="margin-left: 50px;">Andhra University</font></div>
                                    
                                    </div>
                                    
                                
                                    <div class="col-sm-3">
                                             <div class="image img-circle"  data-toggle="modal" data-target="#exampleModal27" style="left:51px !important">
                                	   <center> <img class="img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/Abhi.jpg" alt="subhasha"></center>
                                	    <br>
                                	    </div>
                                	    <br><br><br><br><br><br><br><br>
                                	    <div><font class="speaker-name" style="margin-left:45px;">Abhi Deshmukh </font><br><font class="speaker-designation"  style="margin-left:41px;">Watson Talent, IBM</font></div>
                                    
                                    </div>
                                    
                                    <div class="col-sm-3">
                                            <div class="image img-circle"  data-toggle="modal" data-target="#exampleModal28" style="left:51px !important">
                                      <center> <img class="img-circle" style="cursor:pointer" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/Subhasha.jpg" alt="subhasha"></center>
                                       <br>
                                       </div>
                                       <br><br><br><br><br><br><br><br>
                                       <div><font class="speaker-name" style="margin-left:45px;">Subhasha Ranjan </font><br><font class="speaker-designation"  style="margin-left:41px;">NVIDIA Corporation</font></div>
                                   
                                   </div>
                                    
                                    
                                    
                                    <br><br><br><br><br><br><br><br>
                                     </div>
                                </div>
                               
                                   <div class="speaker">
                                	<div class="image img-circle" data-toggle="modal" data-target="#exampleModal6" ><img class="img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/chanakya.png" alt="chanakya"></div>
                                    <div class="lower">
                                    	<div class="time">04:00pm - 04:15pm | Port Stadium</div>
                                        <div><font class="speaker-name">Chanakya Lokam | </font><font class="speaker-designation">Director - Miracle Innovation Labs</font></div>
                                         <div class="speaker-title">The Bot Universe - What, How and Why</div>
                                     <div class="text-content">Chat Bots are the new UI and IoT seems to be popping up everywhere! Listen to Chanakya as he shows off some pretty cool demos while also discussing more about how you can start your journey towards building smart, connected Solutions.  </div>
                                    </div>
                                </div>
                                 <div class="speaker">
                                	<div class="image img-circle" data-toggle="modal" data-target="#exampleModal20" ><img class="img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/ujwal.jpg" alt="ujwal"></div>
                                    <div class="lower">
                                    	<div class="time">04:15pm - 04:35pm | Port Stadium</div>
                                        <div><font class="speaker-name">Ujwal Surampalli | </font><font class="speaker-designation">President (InterviewBuddy)</font></div>
                                         <div class="speaker-title">Should I startup or take up a job - 2017's greatest dilemma</div>
                                     <div class="text-content">The biggest question a soon to be graduate student faces now is - Shall I startup or take up a job or pursue graduate studies. This session is aimed at disseminating some of the first-hand experiences of having tasted all the three fields - starting up, pursuing higher studies & working at India's biggest automotive plant (Ashok Leyland) and giving a sense of direction/purpose to a student. The session would briefly touch up on the present startup scenario in AP and especially Vizag. </div>
                                    </div>
                                </div>
                                  <div class="speaker">
                                	<div class="image img-circle" data-toggle="modal" data-target="#exampleModal21" ><img class="img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/Satyendra.jpg" alt="satyendra"></div>
                                    <div class="lower">
                                    	<div class="time">04:35pm - 05:05pm | Port Stadium</div>
                                        <div><font class="speaker-name">Satyendra Kumar Pasalapudi | </font><font class="speaker-designation">President (AIOUG)</font></div>
                                         <div class="speaker-title">Exploring Student Career Paths with Cloud as the new normal</div>
                                     <div class="text-content">The cloud is the new normal. The cloud industry continues to grow at an amazing pace and organizations of all sizes continue to migrate to the cloud to take advantage of its economics. Cloud has redefined the way we code and do business. It has also eased the adoption of new technologies such as cognitive, IoT and big data and is helping organizations deliver faster. This session will talk about the various career paths and how you can become a cloud professional with the right skills. 
  </div>
                                    </div>
                                </div>
                                 <div class="speaker">
                                	<div class="image img-circle" data-toggle="modal" data-target="#exampleModal22" ><img class="img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/Dheeraj.jpg" alt="dheeraj"></div>
                                    <div class="lower">
                                    	<div class="time">05:05pm - 05:25pm | Port Stadium</div>
                                        <div><font class="speaker-name">Dheeraj Kota | </font><font class="speaker-designation">Co- Founder (Startup Gurukul)</font></div>
                                         <div class="speaker-title">Defining the future, as a Student - The Startup Way</div>
                                     <div class="text-content"> Facebook, Google,Dropbox and many more startups started during college. It's not just a coincidence. There is a reason, students are full of energy. Most tech products need investment only in form of sweat and Brain, not much financial investment. Let's talk about building a startup as a student. Right from how to get ideas, until how to launch and also talk about the case we fail and how this failed experience can also be super valuable in your career during Placement, MBA, MS and Civils Prep.</div>
                                    </div>
                                </div>
                                <!-- <div class="speaker">
                                	<div class="image img-circle" data-toggle="modal" data-target="" >
                                	    <img class="img-circle" src="images/speakerimages/key-notes.jpg" alt=""></div>
                                    <div class="lower">
                                    	<div class="time">02:00am - 06:00pm |  Miracle Valley</div>
                                           <div><font class="speaker-name">Mayur Tendulkar | </font><font class="speaker-designation">Program Manager (Microsoft)</font></div>
                                        <div class="speaker-title"> Keynotes</div>
                                     <div class="text-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur mattis metus enim, vitae gravida purus mollis et. Vivamus in neque mauris.</div>
                                    </div>
                                </div>-->
                                 <div class="speaker">
                                	<div class="image img-circle" data-toggle="modal" data-target="#" >
                                	    <img class="img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/hungama.png" alt=""></div>
                                    <div class="lower">
                                    	<div class="time"><br>05:30pm - 07:30pm | Port Stadium</div>
                                        <div class="speaker-title">Hungama</div>
                                      <div class="text-content">After all that learning, lets see what you've got on the dance floor - come along and celebrate the night with us at Hungama! </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                     <!--Newly added end-->
                   
                    
                    <!--Speakers sessions DEC 14-->
                    <div class="slide-item">
                    	<div class="inner">
                        	<div class="speakers clearfix">
                        	    <div class="speaker">
                                	<div class="image img-circle" ><img class="img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/register.png" alt=""></div>
                                    <div class="lower">
                                    	<div class="time"><br>09:00am - 10:00am | Miracle Valley</div>
                                        <div class="speaker-title"> Registrations</div>
                                      <div class="text-content">Welcome to the largest IT Summit in AP, pick up your badge and enter the world of digital transformation</div>
                                    </div>
                                </div>
                                <div class="speaker">
                                   <div class="image img-circle" data-toggle="modal" data-target="#exampleModal22" ><img class="img-circle" style="cursor:pointer" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/Dheeraj.jpg" alt="srikanth"></div>
                                   <div class="lower">
                                       <div class="time">10:00am - 05:00pm | Level #1, Miracle Valley</div>
                                       <div><font class="speaker-name">Dheeraj Kota | </font><font class="speaker-designation">Co - Founder Startup Gurukul</font></div>
                                       <div class="speaker-title"> Hands On - From Zero To Cloud with React and Firebase</div>
                                     <div class="text-content">Come and learn the Gurukul way! Go from Zero to Cloud using the hottest library from Facebook, React and Firebase as the database from Google. Get your hands dirty on what Silicon Valley is using. Go from basics of HTML, CSS and JavaScript to React, building responsive components using Firebase as database and publish what you built on cloud. To make the tinkering with these advanced tech concepts effective, this will be following a Web Gurukul's Assisted Learning Methodology to mentor you individually while you experiment.</div>
                                   </div>
                               </div>
                        	      <div class="speaker">
                            <div class="speaker-image img-circle" data-toggle="modal" data-target="#exampleModal9">
                                        <img id="blurs" class="image img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/aditya.png" title="" alt="aditya" >
                                     </div>
                                    <div class="lower">
                                    	<div class="time">10:00am - 11:00am | Hall #1, Miracle Valley</div>
                                        <div > <font class="speaker-name"> Aditya Chinni | </font> <font class="speaker-designation">Manager - Innovation Labs </font> </div>
                                        <div class="speaker-title">Introduction to IoT and Industry 4.0 Use Cases</div>
                                     <div class="text-content">So what exactly is the Internet of Things and how does it relate to Industry 4.0? In this session, you will learn more about how industrial IoT is transforming manufacturing along with a live demo of Machinery Management built on IBM Watson IoT. You will also understand what it takes to build an IoT Solution and what components are required.</div>
                                    </div>
                                </div>
                                <div class="speaker">
                                	<div class="image img-circle" data-toggle="modal" data-target="#exampleModal5" ><img class="img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/Ajay.png" alt=""></div>
                                    <div class="lower">
                                    	<div class="time">10:00am - 11:00am | Hall #2, Miracle Valley</div>
                                        <div><font class="speaker-name">Ajay Alubelli |</font><font class="speaker-designation">   Lead Researcher - Mobility</font></div>
                                        <div class="speaker-title">Code Once Run Everywhere - Hybrid Apps with Ionic</div>
                                     <div class="text-content"> In this session, we will be introducing you to the Ionic framework, a hybrid  mobile application platform, and how hybrid mobile applications are different from native mobile application development. Learn more about tools like Ionic Framework and Cordova that can help you rapidly build and deploy to multiple platforms.  </div>
                                    </div>
                                </div>
                             
                                 <div class="speaker">
                                	<div class="image img-circle" data-toggle="modal" data-target="#" ><img class="img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/mil-cognitive.jpg" alt=""></div>
                                    <div class="lower">
                                    	<div class="time">10:00am - 10:00pm | Level #1, Miracle Valley</div>
                                    	<div><font class="speaker-name">Skype, Microsoft Bot Framework, LUIS, Bot Builder Node JS SDK |</font><font class="speaker-designation">   Laptop Required</font></div>
                                    	
                                        <div class="speaker-title">Building a Skype Bot with Microsoft Bot Framework</div>
                                     <div class="text-content"> Everybody is talking about chat bots nowadays! In this hands on lab you will be introduced to Microsoft's Bot Framework and will be taken through a guided lab to build a Skype based chat bot with the help of the Bot Builder Node JS SDK and also Microsoft LUIS. </div>
                                    </div>
                                </div>
                                  <div class="speaker">
                                	<div class="image img-circle" data-toggle="modal" data-target="#" ><img class="img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/mil-IoT.jpg" alt=""></div>
                                    <div class="lower">
                                    	<div class="time">10:00am - 10:00pm | Level #1, Miracle Valley</div>
                                    	<div><font class="speaker-name">Node Red, IBM Watson IoT, IBM Bluemix |</font><font class="speaker-designation">   Laptop Required</font></div>
                                        <div class="speaker-title">Connecting IoT Devices to Watson IoT with Node Red</div>
                                     <div class="text-content"> IoT is taking over the world, and the future looks smart and connected. In this hands-on lab you will go through the process of understand the anatomy of an IoT solution by connecting a simulator to the Watson IoT Platform and will then build a Node Red based dashboard as well.   </div>
                                    </div>
                                </div>
                            <div class="speaker">
                                	<div class="image img-circle" >
                                	    <img class="img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/snacks.png" alt=""></div>
                                    <div class="lower">
                                    	<div class="time"><br>11:00am - 11:30am | Miracle Valley</div>
                                        <div class="speaker-title">Snacks Break</div>
                                      <div class="text-content">Grab a bite and take a nap, digest all the information because the day ain't over yet! </div>
                                    </div>
                                </div>
                                 <div class="speaker">
                                	<div class="image img-circle" data-toggle="modal" data-target="#exampleModal15" ><img class="img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/Mayur-Tendulkar.jpg" alt=""></div>
                                    <div class="lower">
                                    	<div class="time">11:30am - 12:30pm | Hall #1, Miracle Valley</div>
                                        <div><font class="speaker-name">Mayur Tendulkar | </font><font class="speaker-designation">Program Manager (Microsoft)</font></div>
                                        <div class="speaker-title">Native iOS and Android Development in C#</div>
                                     <div class="text-content"> Xamarin enables C# developers to become native iOS, Android, and Windows mobile app developers overnight. In this session, you will learn how to leverage your existing .NET and C# skills to create iOS and Android mobile apps in Visual Studio with Xamarin. This session will also give you the tools to determine how much existing C# code can go mobile to iOS and Android, using existing .NET code, plus help you learn to create the architecture necessary to support maximum code sharing and reuse.  </div>
                                    </div>
                                </div>
                                  <div class="speaker">
                                	<div class="image img-circle" data-toggle="modal" data-target="#exampleModal10"  >
                                <img class="img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/sudarshan.jpg" alt=""></div>
                                    <div class="lower">
                                    	<div class="time">11:30am - 12:30pm | Hall #2, Miracle Valley</div>
                                        <div> <font class="speaker-name">Sudharshan Govindan | </font> <font class="speaker-designation"> Developer Advocate (IBM)</font></div>
                                         <div class="speaker-title">Deep Dive into IBM Cloud PaaS (Node JS and Java)</div>
                                    <div class="text-content">IBM Cloud Foundry includes Runtimes for Java, Node.js, PHP, Python, Ruby, Swift and Go; plus, Cloud Foundry community build packs are also available. Combined with DevOps services, the application runtimes enable a Delivery pipeline that automates much of the iterative development process. In this session you will learn more about how you can continuously deliver applications by developing on IBM Cloud's Cloud Foundry Runtimes and extend you apps with services as well. </div>
                                    </div>
                                </div>
                                 <div class="speaker">
                                	<div class="image img-circle" >
                                	    <img class="img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/lunch.png" alt=""></div>
                                    <div class="lower">
                                    	<div class="time"><br>12:30pm - 01:30pm | Miracle Valley</div>
                                        <div class="speaker-title">Lunch Break</div>
                                      <div class="text-content">Grab a bite and take a nap, digest all the information because the day ain't over yet! </div>
                                    </div>
                                </div>
                                <div class="speaker">
                                	<div class="image img-circle" data-toggle="modal" data-target="#exampleModal2" ><img class="img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/ayyagari.png" alt=""></div>
                                    <div class="lower">
                                    	<div class="time">01:30pm - 02:30pm | Hall #1, Miracle Valley</div>
                                        <div><font class="speaker-name">Krishnachytanya Ayyagari | </font><font class="speaker-designation">Technical Program Manager (Google) </font></div>
                                       <div class="speaker-title">TensorFlow 101 - Open Source Machine Learning</div>
                                      <div class="text-content">What if you could forecast sales demand (or) predict machine failure? In this session you will learn more about how to get started on TensorFlow, which is a framework for developers to build computational graphs, usually used for machine learning. </div>
                                    </div>
                                </div>
                                 <div class="speaker">
                                	<div class="image img-circle" data-toggle="modal" data-target="#exampleModal13" ><img class="img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/Raj_Chilakapati.png" alt=""></div>
                                    <div class="lower">
                                    	<div class="time">01:30pm - 02:30pm | Hall #2, Miracle Valley</div>
                                        <div><font class="speaker-name">Rajanikanth Chilakapati | </font> <font class="speaker-designation"> Sr. Solution Architect (Amazon Web Services)</font></div>
                                        <div class="speaker-title">Welcome to AWS - Cloud Computing and beyond!</div>
                                    <div class="text-content">See how AWS has not only defined and pioneered what we call today as cloud computing but get a first hand look at the AWS platform and various disruptive services that can help build innovative products and applications faster. Through this session learn how cloud computing can help enable innovative ideas. </div>
                                    </div>
                                </div>
                                 <div class="speaker">
                                	<div class="image img-circle" data-toggle="modal" data-target="#" ><img class="img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/mil-mobile.jpg" alt=""></div>
                                    <div class="lower">
                                    	<div class="time">10:00am - 10:00pm | Level #1, Miracle Valley</div>
                                        <div><font class="speaker-name">Ionic Framework, Angular JS |</font><font class="speaker-designation">   Laptop Required</font></div>
                                        <div class="speaker-title">Your First Hybrid Mobile App with Ionic Framework</div>
                                    <div class="text-content">Have you ever built a mobile app? If not, then this is the perfect hands on lab for you to be able to learn the art of Hybrid Mobile App Development. In this guided lab you will be able to understand how to build and view a mobile app with the Ionic Framework. </div>
                                    </div>
                                </div>
                                 <div class="speaker">
                                	<div class="image img-circle" data-toggle="modal" data-target="#" ><img class="img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/mil-cloud.jpg" alt=""></div>
                                    <div class="lower">
                                    	<div class="time">10:00am - 10:00pm | Level #1, Miracle Valley</div>
                                    	<div><font class="speaker-name">Node JS, IBM Bluemix, Cloud Foundry CLI |</font><font class="speaker-designation">   Laptop Required</font></div>
                                        <div class="speaker-title">Building a Cloud Application on IBM Bluemix(PaaS)</div>
                                    <div class="text-content">The cloud allows you to quickly build, deploy and scale your applications. In this hands-on labs session you will go through a guided lab in which you will build your own Node JS based web page and deploy it on to IBM BluemiPaaS) through the Cloud Foundry CLI. </div>
                                    </div>
                                </div>

                                 <div class="speaker">
                                	<div class="image img-circle" >
                                	    <img class="img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/break.png" alt=""></div>
                                    <div class="lower">
                                    	<div class="time"><br>02:30pm - 02:45pm | Miracle Valley</div>
                                        <div class="speaker-title"> Break Time</div>
                                      <div class="text-content">Stretch your legs, interact with the experts and check some of the cool demos - don't forget to refresh your mind!</div>
                                    </div>
                                </div>
                                 <div class="speaker">
                                	<div class="image img-circle" data-toggle="modal" data-target="#exampleModal15" ><img class="img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/Mayur-Tendulkar.jpg" alt=""></div>
                                    <div class="lower">
                                    	<div class="time">02:45pm - 03:45pm |  Hall #1, Miracle Valley</div>
                                        <div><font class="speaker-name">Mayur Tendulkar | </font><font class="speaker-designation">Program Manager (Microsoft)</font></div>
                                        <div class="speaker-title">Building Mobile Apps - There is a service for that!</div>
                                     <div class="text-content"> Unless it is a static app, every mobile app needs services. For example, mobile apps require services to authenticate user, store and retrieve data, send notifications or report crashes. Microsoft Azure provides services for you which can be used to add features and intelligence. Join us to understand various Microsoft Azure services which can be used in mobile apps.  </div>
                                    </div>
                                </div>
                                   <div class="speaker">
                                	<div class="image img-circle" data-toggle="modal" data-target="#exampleModal17" ><img class="img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/yuktesh.jpg" alt=""></div>
                                    <div class="lower">
                                    	<div class="time">02:45pm - 03:45pm |  Hall #2, Miracle Valley</div>
                                        <div><font class="speaker-name">Yuktesh Chintamadaka | </font><font class="speaker-designation">Developer Advocate (IBM)</font></div>
                                        <div class="speaker-title">Decoding Internet of Things using Watson IoT platform</div>
                                     <div class="text-content"> How do you build smart, connected solutions centered around IoT? In this session you will get an introduction to IoT and discuss few use cases. Also introduce Node-red platform, a wiring tool helps in developing IoT applications rapidly. Explore Node-red platform using basic input output nodes and take them through Watson IoT platform nodes and perform basic demos.  </div>
                                    </div>
                                </div>
                                <div class="speaker">
                                	<div class="image img-circle" data-toggle="modal" data-target="#" ><img class="img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/mil-cognitive.jpg" alt=""></div>
                                    <div class="lower">
                                    	<div class="time">10:00am - 10:00pm | Level #1, Miracle Valley</div>
                                    	<div><font class="speaker-name">Facebook Messenger, Google Dialogflow, Node JS, Firebase |</font><font class="speaker-designation">   Laptop Required</font></div>
                                        <div class="speaker-title">Building a Facebook Messenger Bot with Dialogflow </div>
                                    <div class="text-content">Bots are the new UI, the conversational UI. In this hands on lab you will be introduced to bot building basics and will be taken through a guided lab to build a Facebook Messenger Bot with Google's Dialogflow and Firebase. </div>
                                    </div>
                                </div>
                                
                                <div class="speaker">
                                	<div class="image img-circle" data-toggle="modal" data-target="#" ><img class="img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/mil-mobile.jpg" alt=""></div>
                                    <div class="lower">
                                    	<div class="time">10:00am - 10:00pm | Level #1, Miracle Valley</div>
                                    	<div><font class="speaker-name">Firebase Authentication, Ionic Framework, Angular JS |</font><font class="speaker-designation">   Laptop Required</font></div>
                                        <div class="speaker-title">Adding Firebase Authentication to an Ionic 2 Mobile App </div>
                                    <div class="text-content">One of the most common things needed for mobile apps is sign in and registration. In this hands-on lab you will be guided to build a sample mobile application that provides both authentication and registration with Firebase as the backend.  </div>
                                    </div>
                                </div>
                          
                                 <div class="speaker">
                                	<div class="image img-circle" >
                                	    <img class="img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/break.png" alt=""></div>
                                    <div class="lower">
                                    	<div class="time"><br>03:45pm - 04:00pm | Miracle Valley</div>
                                        <div class="speaker-title"> Break Time</div>
                                      <div class="text-content">Stretch your legs, interact with the experts and check some of the cool demos - don't forget to refresh your mind! </div>
                                    </div>
                                </div>
                                
                                <div class="speaker">
                                    <div class="image img-circle" data-toggle="modal" data-target="#exampleModal23" ><img class="img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/Venkata-Nagesh.jpg" alt="Venkata-Nagesh"></div>
                                    <div class="lower">
                                        <div class="time">04:00pm - 05:00pm | Hall #1, Miracle Valley</div>
                                        <div><font class="speaker-name">Venkata Nagesh | </font><font class="speaker-designation">Principal Architect  (Pi DATACENTERS)</font></div>
                                         <div class="speaker-title">Building and Orchestrating Containerized Applications on the Cloud</div>
                                     <div class="text-content">The goal of infrastructure is to run your applications, and as it advances it is looking to make the life of developers easier. In this session you will learn more about containers, what orchestration means and how it helps in running next generation digital workloads such as mobile, analytics and more. You will hear and see more about Harbour1 and how you can integrate it with your DevOps life cycles. </div>
                                    </div>
                                </div>
                                
                                	<div class="speaker">
                                	<div class="image img-circle" data-toggle="modal" data-target="#exampleModal4" ><img class="img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/korakuti.jpg" alt=""> </div>
                                    <div class="lower">
                                    	<div class="time">04:00pm - 05:00pm | Hall #2, Miracle Valley</div>
                                        <div><font class="speaker-name">Mounika Korrakuti | </font><font class="speaker-designation">   Lead Researcher - Cloud and DevOps</font></div>
                                         <div class="speaker-title">Exploring a Developer's Journey Through DevOps</div>
                                         <div class="text-content">Why do developers care about operations? In this session learn more about DevOps and what the role of developers is. Understand enterprise terms such as Build, Test and Deploy along with CICD. Learn how building a deployment pipeline with Jenkins, Git and Maven can help make your java deployments faster and easier.</div>
                                    </div>
                                </div>
                                 <div class="speaker">
                                	<div class="image img-circle" data-toggle="modal" data-target="#exampleModal-plokam" >
                                	    <img class="img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/hungama.png" alt=""></div>
                                    <div class="lower">
                                    	<div class="time"><br>05:30pm - 07:30pm | Miracle Valley</div>
                                        <div class="speaker-title">Hungama</div>
                                      <div class="text-content">After all that learning, lets see what you've got on the dance floor - come along and celebrate the night with us at Hungama! </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                <!--Speakers sessions DEC 15-->
                <div class="slide-item">
                    	<div class="inner">
                        	<div class="speakers clearfix">
                        	    
                        	     <div class="speaker">
                                	<div class="image img-circle" ><img class="img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/register.png" alt=""></div>
                                    <div class="lower">
                                    	<div class="time"><br>09:00am - 10:00am | Miracle Valley</div>
                                        <div class="speaker-title"> Registrations</div>
                                      <div class="text-content">Welcome to the largest IT Summit in AP, pick up your badge and enter the world of digital transformation</div>
                                    </div>
                                </div>
                                <div class="speaker">
                                   <div class="image img-circle" data-toggle="modal" data-target="#exampleModal22" ><img class="img-circle" style="cursor:pointer" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/Dheeraj.jpg" alt="srikanth"></div>
                                   <div class="lower">
                                       <div class="time">10:00am - 05:00pm | Level #1, Miracle Valley</div>
                                       <div><font class="speaker-name">Dheeraj Kota | </font><font class="speaker-designation">Co - Founder Startup Gurukul</font></div>
                                       <div class="speaker-title"> Hands On - From Zero To Cloud with React and Firebase</div>
                                     <div class="text-content">Come and learn the Gurukul way! Go from Zero to Cloud using the hottest library from Facebook, React and Firebase as the database from Google. Get your hands dirty on what Silicon Valley is using. Go from basics of HTML, CSS and JavaScript to React, building responsive components using Firebase as database and publish what you built on cloud. To make the tinkering with these advanced tech concepts effective, this will be following a Web Gurukul's Assisted Learning Methodology to mentor you individually while you experiment.</div>
                                   </div>
                               </div>
                        	    <div class="speaker">
                                	<div class="image img-circle" data-toggle="modal" data-target="#exampleModal12" ><img class="img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/Srikanth-studnt.jpg" alt="srikanth"></div>
                                    <div class="lower">
                                    	<div class="time">10:00am - 11:00am | Hall #1, Miracle Valley</div>
                                        <div><font class="speaker-name">Srikanth Doddi | </font><font class="speaker-designation">CS Student (Sri Vasavi Engineering College)</font></div>
                                        <div class="speaker-title"> What are chat bots and how do you build them ?</div>
                                      <div class="text-content">What are chat bots? How do we build them? Come and join us as we give you an insight into cognitive services and natural language processing for chat bots. You will learn more about the challenges faced by students when building bots and interesting solutions to overcome those. Also catch a live demo of building bots on the cloud!</div>
                                    </div>
                                </div>
                                  <div class="speaker">
                                	<div class="image img-circle" data-toggle="modal" data-target="#exampleModal10" ><img class="img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/sudarshan.jpg" alt=""></div>
                                    <div class="lower">
                                    	<div class="time">10:00am - 11:00am | Hall #2, Miracle Valley</div>
                                        <div><font class="speaker-name">Sudharshan Govindan | </font><font class="speaker-designation"> Developer Advocate (IBM)</font></div>
                                        <div class="speaker-title">Chat Bots with Watson Conversation and Voice Gateway</div>
                                     <div class="text-content">This session will cover the new IBM Voice Gateway product which introduces a next generation IVR system that is conversational and built on IBM Watson cognitive services. It can also transcribe calls in real time to enable agent assist type applications. IBM Voice Gateway uses capabilities like the Watson Conversation service, Speech To Text and Text To Speech and is built on cloud native principles.</div>
                                    </div>
                                </div>
                        	    <div class="speaker">
                                	<div class="image img-circle" data-toggle="modal" data-target="#" ><img class="img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/mil-mobile.jpg" alt=""></div>
                                    <div class="lower">
                                    	<div class="time">10:00am - 10:00pm | Level #1, Miracle Valley</div>
                                    	<div><font class="speaker-name">Firebase Authentication, Ionic Framework, Angular JS |</font><font class="speaker-designation">   Laptop Required</font></div>
                                        <div class="speaker-title"> Adding Firebase Authentication to an Ionic 2 Mobile App </div>
                                    <div class="text-content">One of the most common things needed for mobile apps is sign in and registration. In this hands-on lab you will be guided to build a sample mobile application that provides both authentication and registration with Firebase as the backend. </div>
                                    </div>
                                </div>
                                
                                <div class="speaker">
                                	<div class="image img-circle" data-toggle="modal" data-target="#" ><img class="img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/mil-cognitive.jpg" alt=""></div>
                                    <div class="lower">
                                    	<div class="time">10:00am - 10:00pm | Level #1, Miracle Valley</div>
                                    	<div><font class="speaker-name">Facebook Messenger, Google Dialogflow, Node JS, Firebase |</font><font class="speaker-designation">   Laptop Required</font></div>
                                        <div class="speaker-title">  Building a Facebook Messenger Bot with Dialogflow  </div>
                                    <div class="text-content">Bots are the new UI, the conversational UI. In this hands on lab you will be introduced to bot building basics and will be taken through a guided lab to build a Facebook Messenger Bot with Google's Dialogflow and Firebase.  </div>
                                    </div>
                                </div>
                        	    
                                 <div class="speaker">
                                	<div class="image img-circle" >
                                	    <img class="img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/snacks.png" alt=""></div>
                                    <div class="lower">
                                    	<div class="time"><br>11:00am - 11:30am | Miracle Valley</div>
                                        <div class="speaker-title">Snacks Break</div>
                                      <div class="text-content">Grab a bite and take a nap, digest all the information because the day ain't over yet! </div>
                                    </div>
                                </div>
                                  <div class="speaker">
                                	<div class="image img-circle" data-toggle="modal" data-target="#exampleModal2" ><img class="img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/ayyagari.png" alt=""></div>
                                    <div class="lower">
                                    	<div class="time">11:30am - 12:30pm | Hall #1, Miracle Valley</div>
                                        <div><font class="speaker-name">Krishnachytanya Ayyagari | </font><font class="speaker-designation">Technical Program Manager (Google) </font></div>
                                       <div class="speaker-title">Google Cloud Platform - Services overview and ML APIs</div>
                                      <div class="text-content">In this session, you will learn about various services in Google Cloud Platform and understand in depth about Machine Learning APIs that are part of Google Cloud. These APIs can be used by developers to convert their unstructured data to semi or structured data, that can be used in turn for their scenarios. </div>
                                    </div>
                                </div>
                                
                                <div class="speaker">
                                	<div class="image img-circle" data-toggle="modal" data-target="#exampleModal13" ><img class="img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/Raj_Chilakapati.png" alt=""></div>
                                    <div class="lower">
                                    	<div class="time">11:30am - 12:30pm | Hall #2, Miracle Valley</div>
                                        <div><font class="speaker-name">Rajanikanth Chilakapati |</font> <font class="speaker-designation"> Sr. Solution Architect (Amazon Web Services)</font></div>
                                        <div class="speaker-title">Serverless - No server is easier to manage than No Server!</div>
                                    <div class="text-content">Understand what is serverless, the evolution and how serverless architecture allows you to build and run applications and services without needing to provision, manage, and scale infrastructure. In this track, you will learn how to build function-rich serverless architectures using the AWS Serverless Stack (API Gateway, Lambda, Greengrass, Step Functions, SQS, DynamoDB). The range of applications demoed will include real-time data processing systems, mobile back-ends and web applications. </div>
                                    </div>
                                </div>
                                
                              
                                  <div class="speaker">
                                	<div class="image img-circle" >
                                	    <img class="img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/lunch.png" alt=""></div>
                                    <div class="lower">
                                    	<div class="time"><br>12:30pm - 01:30pm | Miracle Valley</div>
                                        <div class="speaker-title">Lunch Break</div>
                                      <div class="text-content">Grab a bite and take a nap, digest all the information because the day ain't over yet! </div>
                                    </div>
                                </div>
                                  <div class="speaker">
                                	<div class="image img-circle" data-toggle="modal" data-target="#exampleModal3"  >
                                <img class="img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/Mounika.png" alt=""></div>
                                    <div class="lower">
                                    	<div class="time">01:30pm - 02:30pm | Hall #1, Miracle Valley</div>
                                        <div> <font class="speaker-name">Mounika Chirukuri | </font> <font class="speaker-designation"> Lead Researcher - Cognitive and Data  </font></div>
                                         <div class="speaker-title">Big Data 101 - Understanding Technologies and Usecases </div>
                                    <div class="text-content">With the boom of social media and mobile users are generating more and more data than ever. This gives us a chance to analyse and personalize through data driven decisions. Learn more about technologies in the big data ecosystem, while learning about use cases as well.</div>
                                    </div>
                                </div>
                                 <div class="speaker">
                                	<div class="image img-circle" data-toggle="modal" data-target="#exampleModal16" ><img class="img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/surya.jpg" alt=""></div>
                                    <div class="lower">
                                    	<div class="time">01:30pm - 02:30pm |  Hall #2, Miracle Valley</div>
                                        <div><font class="speaker-name">Surya Viswanath Perala | </font><font class="speaker-designation"> Student (Vignan Engineering College) </font></div>
                                        <div class="speaker-title">ML 101 - Applying Machine Learning in our daily life</div>
                                     <div class="text-content"> What is Machine Learning and how can you implement it in your day to day life? In this session, we will be explaining how you can use R for Data Processing and some basics around python along with a live demo combining all of them to make an enterprise class application.  </div>
                                    </div>
                                </div>
                                 <div class="speaker">
                                	<div class="image img-circle" data-toggle="modal" data-target="#" ><img class="img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/mil-mobile.jpg" alt=""></div>
                                    <div class="lower">
                                    	<div class="time">10:00am - 10:00pm | Level #1, Miracle Valley</div>
                                    	<div><font class="speaker-name">Ionic Framework, Angular JS |</font><font class="speaker-designation">   Laptop Required</font></div>
                                        <div class="speaker-title">  Your First Hybrid Mobile App with Ionic Framework  </div>
                                    <div class="text-content">Have you ever built a mobile app? If not, then this is the perfect hands on lab for you to be able to learn the art of Hybrid Mobile App Development. In this guided lab you will be able to understand how to build and view a mobile app with the Ionic Framework.  </div>
                                    </div>
                                </div>
                                
                                <div class="speaker">
                                	<div class="image img-circle" data-toggle="modal" data-target="#" ><img class="img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/mil-cloud.jpg" alt=""></div>
                                    <div class="lower">
                                    	<div class="time">10:00am - 10:00pm | Level #1, Miracle Valley</div>
                                    	<div><font class="speaker-name">Node JS, IBM Bluemix, Cloud Foundry CLI |</font><font class="speaker-designation">   Laptop Required</font></div>
                                        <div class="speaker-title">  Building a Cloud Application on IBM Bluemix(PaaS)  </div>
                                    <div class="text-content">The cloud allows you to quickly build, deploy and scale your applications. In this hands-on labs session you will go through a guided lab in which you will build your own Node JS based web page and deploy it on to IBM Bluemix (PaaS) through the Cloud Foundry CLI.  </div>
                                    </div>
                                </div>
                         
                                 <div class="speaker">
                                	<div class="image img-circle" >
                                	    <img class="img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/break.png" alt=""></div>
                                    <div class="lower">
                                    	<div class="time"><br>02:30pm - 02:45pm | Miracle Valley</div>
                                        <div class="speaker-title"> Break Time</div>
                                      <div class="text-content">Stretch your legs, interact with the experts and check some of the cool demos - don't forget to refresh your mind!</div>
                                    </div>
                                </div>
                                   <div class="speaker">
                                	<div class="image img-circle" data-toggle="modal" data-target="#exampleModal11" ><img class="img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/Archit-1.png" alt=""></div>
                                    <div class="lower">
                                    	<div class="time">02:45pm - 03:45pm  | Hall #1, Miracle Valley</div>
                                        <div><font class="speaker-name">Archit Gupta | </font><font class="speaker-designation"> Sr. Researcher - Cognitive</font></div>
                                        <div class="speaker-title">Building a Chat Bot with Microsoft Bot Framework</div>
                                     <div class="text-content">In today's  world, Bots are becoming new and effective entities for delivering new age digital experiences. Microsoft's Bot Framework provides developers with a easy SDK and platform to build and connect bots to various channels like Skype and Messenger. Learn how you can build your first bot on Microsoft's Bot Framework at Digital Summit!</div>
                                    </div>
                                </div>
                            	<div class="speaker">
                            	     <div class="speaker-image img-circle" data-toggle="modal" data-target="#exampleModal14">
                                        <img id="blurs" class="image img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/Kunal-Chowdhury.jpg" title="" alt="kunal" >
                                     </div>
                                    <div class="lower">
                                    	<div class="time">02:45pm - 03:45pm  | Hall #2, Miracle Valley</div>
                                        <div> <font class="speaker-name"> Kunal Chowdhury | </font> <font class="speaker-designation">Microsoft MVP </font>  </div>
                                        <div class="speaker-title"> Building cloud enabled application using Azure</div>
                                         <div class="text-content">In this session, you will learn about Azure and will be taken through building a web application and hosting it on an Azure server. The session will also cover Azure VMs and Azure database in a nutshell, giving you the base to jump start cloud app development.</div>
                                    </div>
                                </div>
                                <div class="speaker">
                                	<div class="image img-circle" data-toggle="modal" data-target="#" ><img class="img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/mil-cognitive.jpg" alt=""></div>
                                    <div class="lower">
                                    	<div class="time">10:00am - 10:00pm | Level #1, Miracle Valley</div>
                                    	<div><font class="speaker-name">Skype, Microsoft Bot Framework, LUIS, Bot Builder Node JS SDK |</font><font class="speaker-designation">   Laptop Required</font></div>
                                        <div class="speaker-title">  Build a Skype Bot with Microsoft Bot Framework  </div>
                                    <div class="text-content">Everybody is talking about chat bots nowadays! In this hands on lab you will be introduced to Microsoft�s Bot Framework and will be taken through a guided lab to build a Skype based chat bot with the help of the Bot Builder Node JS SDK and also Microsoft LUIS.  </div>
                                    </div>
                                </div>
                                
                                <div class="speaker">
                                	<div class="image img-circle" data-toggle="modal" data-target="#" ><img class="img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/mil-IoT.jpg" alt=""></div>
                                    <div class="lower">
                                    	<div class="time">10:00am - 10:00pm | Level #1, Miracle Valley</div>
                                    	<div><font class="speaker-name">Node Red, IBM Watson IoT, IBM Bluemix |</font><font class="speaker-designation">   Laptop Required</font></div>
                                        <div class="speaker-title"> Connecting IoT Devices to Watson IoT with Node Red  </div>
                                    <div class="text-content">IoT is taking over the world, and the future looks smart and connected. In this hands-on lab you will go through the process of understand the anatomy of an IoT solution by connecting a simulator to the Watson IoT Platform and will then build a Node Red based dashboard as well.   </div>
                                    </div>
                                </div>
                                
                           <div class="speaker">
                                	<div class="image img-circle" >
                                	    <img class="img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/break.png" alt=""></div>
                                    <div class="lower">
                                    	<div class="time"><br>03:45pm - 04:00pm | Miracle Valley</div>
                                        <div class="speaker-title"> Break Time</div>
                                      <div class="text-content">Stretch your legs, interact with the experts and check some of the cool demos - don't forget to refresh your mind! </div>
                                    </div>
                                </div>
                           	<div class="speaker">
                                	<div class="image img-circle" data-toggle="modal" data-target="#exampleModal1" ><img class="img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/sudheer.jpg" alt=""></div>
                                    <div class="lower">
                                    	<div class="time">04:00pm - 05:00pm | Hall #1, Miracle Valley</div>
                                        <div><font class="speaker-name">Sudheer Polavarapu | </font><font class="speaker-designation">   VP – Product Management</font></div>
                                         <div class="speaker-title">Blockchain 101 – Navigating the Blockchain Hype</div>
                                      <div class="text-content">This session will provide you with a better understanding of Blockchain, its current state, the real threats and opportunities that this disruptive technology poses to various industries, especially in energy and utilities, and how organisations can navigate through the hype and find real opportunities.</div>
                                    </div>
                                </div>
                                <div class="speaker">
                                	<div class="image img-circle" data-toggle="modal" data-target="#exampleModal7" ><img class="img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/ud2.png" alt=""></div>
                                    <div class="lower">
                                    	<div class="time">04:00pm - 05:00pm | Hall #2, Miracle Valley</div>
                                        <div>  <font class="speaker-name">Udaya Nandipati | </font><font class="speaker-designation">    Lead Researcher - Cognitive</font></div>
                                        <div class="speaker-title">Building a Chat Bot with IBM Watson Conversation</div>
                                       <div class="text-content">Want to create your own virtual assistant? Learn more about what it takes to build chat bots and what some possible use cases might be. In this session, we will let you know how you can build your own chat bot with the Watson Conversation Service on IBM Bluemix in a matter of minutes.</div>
                                    </div>
                                </div>
                                </div>
                        	      <div class="speaker">
                                	<div class="image img-circle" data-toggle="modal" data-target="#exampleModal-plokam" >
                                	    <img class="img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/hungama.png" alt=""></div>
                                    <div class="lower">
                                    	<div class="time"><br>05:30pm - 07:30pm | Miracle Valley</div>
                                        <div class="speaker-title">Hungama</div>
                                      <div class="text-content">After all that learning, lets see what you've got on the dance floor - come along and celebrate the night with us at Hungama! </div>
                                    </div>
                                </div>
                            
                            </div>
                        </div>
        
                
                
            </div>
            
        </div>
    </section>
   
    <!--End Schedule Section-->
    <!--model-->
 <div class="modal fade" id="exampleModal" tabindex="-1" style="background-color: rgba(0,0,0,0.8) !important;padding-top:180px!important;" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content" style="background-color:rgba(0,0,0,0.2) !important; border: 1px solid #fff; -webkit-box-shadow:none !important;
box-shadow:none !important;">
      <div class="modal-header">
        <h4 class="modal-title" style="color:#000000;" id="exampleModalLabel"><strong>Prasad Lokam</strong></h4>
        <button id="clearblur" type="button" style="color:#000000;" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
            <div class="row">
                <div class="col-sm-8">
                     <p style="color:#ffffff;text-align:justify;" class="methodText">CEO, President, Founder and Visionary - Prasad knows the ins and outs of technology and the industry as well. Being the founder of a succesful 24 year old global IT firm, he still remains equally passionate towards next generation technology. Hailing from Visakhapatnam, his dream is to enable the students of Andhra Pradesh and give back to the state by creating massive technology employement. </p>
                </div>
                <div class="col-sm-4">
                    <center>
                   <img class="image img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/plokam.png" style="width: 100px;height: 100px;" title="" alt="prasad lokam" >
                <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff;" contenteditable="false"><br>CEO and President</h6>
                    <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff;" contenteditable="false"> <strong> Miracle Software Systems,Inc.</strong></h6>
                </center>
                 <div class="modal-footer nomargintop">
         
        </div>
                </div>
            </div>
         
        </div>
       
      </div>
     
    </div>
  </div>
    <!--usha-->
  
    <!--ayyagiri-->
    <div class="modal fade" id="exampleModal2" tabindex="-1" style="background-color: rgba(0,0,0,0.8) !important;padding-top:180px!important;" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content" style="background-color:rgba(0,0,0,0.2) !important; border: 1px solid #fff; -webkit-box-shadow:none !important;
box-shadow:none !important;">
      <div class="modal-header">
        <h4 class="modal-title" style="color:#000000;" id="exampleModalLabel"><strong>Krishnachytanya Ayyagari</strong></h4>
        <button id="clearblur" type="button" style="color:#000000;" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
            <div class="row">
                <div class="col-sm-8">
                     <p style="color:#ffffff;text-align:justify;" class="methodText">KC is a technical program manager at Google and takes care of the startup ecosystem in India. Having previously worked at Microsoft, IBM, Thomson Reuters - he has over 10 years of industry experience and is on a mission to help startups become successful on GCP. A graduate from BITS Pilani and a trained architect, he has been active in the space of cloud computing for over 8 years.</p>
                </div>
                <div class="col-sm-4">
                    <center>
                   <img class="image img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/ayyagari.png" style="width: 100px;height: 100px;" title="" alt="Krishnachytanya" >
                <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff;" contenteditable="false"><br>Technical Program Manager </h6>
                    <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff;" contenteditable="false"><strong>Google </strong></h6>
                </center>
                 <div class="modal-footer nomargintop">
         
        </div>
                </div>
            </div>
         
        </div>
       
      </div>
     
    </div>
  </div>
  
  <!--chirukuri-->
  <div class="modal fade" id="exampleModal3" tabindex="-1" style="background-color: rgba(0,0,0,0.8) !important;padding-top:180px!important;" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content" style="background-color:rgba(0,0,0,0.2) !important; border: 1px solid #fff; -webkit-box-shadow:none !important;
box-shadow:none !important;">
      <div class="modal-header">
        <h4 class="modal-title" style="color:#000000;" id="exampleModalLabel"><strong>Mounika Chirukuri</strong></h4>
        <button id="clearblur" type="button" style="color:#000000;" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
            <div class="row">
                <div class="col-sm-8">
                     <p style="color:#ffffff;text-align:justify;" class="methodText">When it comes to data, bots and analytics, Mounika is the one that you want to talk to. Leading the Data, Cognitive and Analytics wing within Miracle's Innovation Labs - her team works on implementing predictive models, voice based chat bots and analytic dashboards. She loves writing articles and enabling tech newbies on digital technologies.</p>
                </div>
                <div class="col-sm-4">
                    <center>
                   <img class="image img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/Mounika.png" style="width: 100px;height: 100px;" title="" alt="Mounika Chirukuri" >
                <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff;" contenteditable="false"><br>Lead Researcher - Cognitive and Data</h6>
                    <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff;" contenteditable="false"><strong>Miracle's Innovation Labs</strong></h6>
                </center>
                 <div class="modal-footer nomargintop">
         
        </div>
                </div>
            </div>
         
        </div>
       
      </div>
     
    </div>
  </div>
  <!--korakuti-->
  <div class="modal fade" id="exampleModal4" tabindex="-1" style="background-color: rgba(0,0,0,0.8) !important;padding-top:180px!important;" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content" style="background-color:rgba(0,0,0,0.2) !important; border: 1px solid #fff; -webkit-box-shadow:none !important;
box-shadow:none !important;">
      <div class="modal-header">
        <h4 class="modal-title" style="color:#000000;" id="exampleModalLabel"><strong>Mounika Korrakuti</strong></h4>
        <button id="clearblur" type="button" style="color:#000000;" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
            <div class="row">
                <div class="col-sm-8">
                     <p style="color:#ffffff;text-align:justify;" class="methodText">Need help pushing an app to the cloud? Even better - want to automate the deployment? Mounika heads up the Cloud and DevOps unit within Miracle's Innovation Labs and has exposure to all the major clouds including GCP, AWS, Bluemix and Azure. She is a VMWare Certified Professional who is passionate about learning new technologies and taking up new challenges !</p>
                </div>
                <div class="col-sm-4">
                    <center>
                   <img class="image img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/korakuti.jpg" style="width: 100px;height: 100px;" title="" alt="Mounika Korrakuti" >
                <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff;" contenteditable="false"><br>Lead Researcher - Cloud and DevOps</h6>
                    <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff;" contenteditable="false"><strong>Miracle's Innovation Labs</strong></h6>
                </center>
                 <div class="modal-footer nomargintop">
         
        </div>
                </div>
            </div>
         
        </div>
       
      </div>
     
    </div>
  </div>
  <!--ajay-->
  <div class="modal fade" id="exampleModal5" tabindex="-1" style="background-color: rgba(0,0,0,0.8) !important;padding-top:180px!important;" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content" style="background-color:rgba(0,0,0,0.2) !important; border: 1px solid #fff; -webkit-box-shadow:none !important;
box-shadow:none !important;">
      <div class="modal-header">
        <h4 class="modal-title" style="color:#000000;" id="exampleModalLabel"><strong>Ajay Alubelli</strong></h4>
        <button id="clearblur" type="button" style="color:#000000;" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
            <div class="row">
                <div class="col-sm-8">
                     <p style="color:#ffffff;text-align:justify;" class="methodText">An IOS Apps expert, Ajay leads the next generation application development at Miracle's Innovation Labs which involves creating amazing applications with MEAN, Ionic, Firebase, Swift, Android and more. He is very passionate about creating well-crafted code, teaching others and writing code as a hobby. If you have a question around mobile apps, catch Ajay during the event.</p>
                </div>
                <div class="col-sm-4">
                    <center>
                   <img class="image img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/Ajay.png" style="width: 100px;height: 100px;" title="" alt="Ajay" >
                <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff;" contenteditable="false"><br>Lead Researcher - Mobility</h6>
                    <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff;" contenteditable="false"><strong>Miracle's Innovation Labs</strong></h6>
                </center>
                 <div class="modal-footer nomargintop">
         
        </div>
                </div>
            </div>
         
        </div>
       
      </div>
     
    </div>
  </div>
  
  <!--clokam-->
  <div class="modal fade" id="exampleModal6" tabindex="-1" style="background-color: rgba(0,0,0,0.8) !important;padding-top:180px!important;" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content" style="background-color:rgba(0,0,0,0.2) !important; border: 1px solid #fff; -webkit-box-shadow:none !important;
box-shadow:none !important;">
      <div class="modal-header">
        <h4 class="modal-title" style="color:#000000;" id="exampleModalLabel"><strong>Chanakya Lokam </strong></h4>
        <button id="clearblur" type="button" style="color:#000000;" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
            <div class="row">
                <div class="col-sm-8">
                     <p style="color:#ffffff;text-align:justify;" class="methodText">Bot Developer, Tech Enthusiast, Speaker and Innovator - Chanakya and his team of digital rebels build cool things every day, from Help Desk Bots to Smart Water Meters! A speaker at multiple global conferences and the head for innovation at Miracle, he helps drive the team's thoughts and ideas around technologies like Cognitive, IoT, Cloud, DevOps and more! Catch up with him at the event to speak more about bots on Google Home (or) chit chat about the latest technologies. </p>
                </div>
                <div class="col-sm-4">
                    <center>
                   <img class="image img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/chanakya.png" style="width: 100px;height: 100px;" title="" alt="Chanakya" >
                <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff;" contenteditable="false"><br>Director - Innovation Labs</h6>
                    <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff;" contenteditable="false"><strong>Miracle Software Systems, Inc.</strong></h6>
                </center>
                 <div class="modal-footer nomargintop">
         
        </div>
                </div>
            </div>
         
        </div>
       
      </div>
     
    </div>
  </div>
  <!--udaya-->
  <div class="modal fade" id="exampleModal7" tabindex="-1" style="background-color: rgba(0,0,0,0.8) !important;padding-top:180px!important;" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content" style="background-color:rgba(0,0,0,0.2) !important; border: 1px solid #fff; -webkit-box-shadow:none !important;
box-shadow:none !important;">
      <div class="modal-header">
        <h4 class="modal-title" style="color:#000000;" id="exampleModalLabel"><strong>Udaya Nandipati </strong></h4>
        <button id="clearblur" type="button" style="color:#000000;" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
            <div class="row">
                <div class="col-sm-8">
                     <p style="color:#ffffff;text-align:justify;" class="methodText">An expert in cognitive solutions, Udaya and her team have been building smart applications that can analyze writing, provide personality insights and detect positive sentiment. She loves building chat bots and has a strong team focussed on major bot frameworks like Microsoft Bot Framework, IBM Watson, Google Dialogflow and others. She has taught hundreds of students over the past few years and was a mentor during MEANHack '16.</p>
                </div>
                <div class="col-sm-4">
                    <center>
                   <img class="image img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/ud2.png" style="width: 100px;height: 100px;" title="" alt="Udaya" >
                <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff;" contenteditable="false"><br>Lead Researcher - Cognitive </h6>
                    <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff;" contenteditable="false"><strong>Miracle's Innovation Labs</strong></h6>
                </center>
                 <div class="modal-footer nomargintop">
         
        </div>
                </div>
            </div>
         
        </div>
       
      </div>
     
    </div>
  </div>
   <!--aditya-->
     <div class="modal fade" id="exampleModal9" tabindex="-1" style="background-color: rgba(0,0,0,0.8) !important;padding-top:180px!important;" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content" style="background-color:rgba(0,0,0,0.2) !important; border: 1px solid #fff; -webkit-box-shadow:none !important;
box-shadow:none !important;">
      <div class="modal-header">
        <h4 class="modal-title" style="color:#000000;" id="exampleModalLabel"><strong>Aditya Chinni </strong></h4>
        <button id="clearblur" type="button" style="color:#000000;" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
            <div class="row">
                <div class="col-sm-8">
                     <p style="color:#ffffff;text-align:justify;" class="methodText">An IoT enthusiast and tech geek, Aditya manages all activities that happen within Miracle's Innovation Labs. Based out of Vizag, Andhra Pradesh he loves working on new age solutions within the space of Connected Solutions and has been involved in various implementations such as Smart Tank Monitoring and Beacon based asset management.</p>
                </div>
                <div class="col-sm-4">
                    <center>
                   <img class="image img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakers/aditya.png" style="width: 100px;height: 100px;" title="" alt="aditya" >
                <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff;" contenteditable="false"><br>Manager - Innovation Labs</h6>
                    <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff;" contenteditable="false"><strong>Miracle Software Systems, Inc. </strong></h6>
                </center>
                 <div class="modal-footer nomargintop">
         
        </div>
                </div>
            </div>
         
        </div>
       
      </div>
     
    </div>
  </div>
    <!--dinesh -->
       <div class="modal fade" id="exampleModal19" tabindex="-1" style="background-color: rgba(0,0,0,0.8) !important;padding-top:180px!important;" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content" style="background-color:rgba(0,0,0,0.2) !important; border: 1px solid #fff; -webkit-box-shadow:none !important;
box-shadow:none !important;">
      <div class="modal-header">
        <h4 class="modal-title" style="color:#000000;" id="exampleModalLabel"><strong>Pothu Venkata Dinesh </strong></h4>
        <button id="clearblur" type="button" style="color:#000000;" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
            <div class="row">
                <div class="col-sm-8">
                     <p style="color:#ffffff;text-align:justify;" class="methodText">Dinesh is a social entrepreneur working towards a vision of healthy learning environments. He pursued his Masters in Computer Systems Engineering from London and worked as Corporate IT Trainer for 5 years. Interact with him and learn more about his journey around building Prakriya Academy! </p>
                </div>
                <div class="col-sm-4">
                    <center>
                   <img class="image img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/Pothu-venkata-dinesh.jpg" style="width: 100px;height: 100px;" title="" alt="sudarshan" >
                <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff;" contenteditable="false"><br>Founder, CEO & Educator </h6>
                    <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff;" contenteditable="false"><strong> Prakriya Academy </strong></h6>
                </center>
                 <div class="modal-footer nomargintop">
         
        </div>
                </div>
            </div>
         
        </div>
       
      </div>
     
    </div>
  </div>
 <!--ujwal-->
      <div class="modal fade" id="exampleModal20" tabindex="-1" style="background-color: rgba(0,0,0,0.8) !important;padding-top:180px!important;" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content" style="background-color:rgba(0,0,0,0.2) !important; border: 1px solid #fff; -webkit-box-shadow:none !important;
box-shadow:none !important;">
      <div class="modal-header">
        <h4 class="modal-title" style="color:#000000;" id="exampleModalLabel"><strong>Ujwal Surampalli </strong></h4>
        <button id="clearblur" type="button" style="color:#000000;" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
            <div class="row">
                <div class="col-sm-8">
                     <p style="color:#ffffff;text-align:justify;" class="methodText">Chief @InterviewBuddy, Graduate Student @HSRW, Germany, Outstanding Student of the Batch @AU, Bronze Awardee @IIA, Interned @Ashok Leyland @Reliance. Ujwal is the founder of InterviewBuddy. He takes care of business development & marketing activities. Though Ujwal comes from a Mechanical engineering background, his prior experience in blogging, designing, coding - writing small snippets & scripts for his blogs as a hobby has proved helpful in developing the now patent-pending InterviewBuddy platform from scratch. He took a sabbatical from his master's degree program in Germany to start InterviewBuddy. Apart from the serious stuff, Ujwal is a die-cast car collector, DIY enthusiast and is an expert in creating 3D realistic papercraft models. 
  </p>
                </div>
                <div class="col-sm-4" style="margin-top: 36px;">
                    <center>
                   <img class="image img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/ujwal.jpg" style="width: 100px;height: 100px;" title="" alt="sudarshan" >
                <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff;" contenteditable="false"><br>President </h6>
                    <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff;" contenteditable="false"><strong> InterviewBuddy </strong></h6>
                </center>
                 <div class="modal-footer nomargintop">
         
        </div>
                </div>
            </div>
         
        </div>
       
      </div>
     
    </div>
  </div>
 <!-- satyendra modal-->
      <div class="modal fade" id="exampleModal21" tabindex="-1" style="background-color: rgba(0,0,0,0.8) !important;padding-top:180px!important;" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content" style="background-color:rgba(0,0,0,0.2) !important; border: 1px solid #ffffff; -webkit-box-shadow:none !important;
box-shadow:none !important;">
      <div class="modal-header">
        <h4 class="modal-title" style="color:#000000;" id="exampleModalLabel18"><strong>Satyendra Kumar Pasalapudi</strong></h4>
        <button id="clearblur" type="button" style="color:#000000;" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
            <div class="row">
                <div class="col-sm-8">
                     <p style="color:#ffffff;text-align:justify;" class="methodText">An Oracle ACE Director and MBA graduate with 18+ years of diversified international experience in the IT industry that spans across multiple continents. He is an accomplished infrastructure and database professional, author and speaker with the right blend of business and technology skills. He has helped bootstrap various strategic business units in Cloud, Big Data and more during his career. He is also the Co-Founder and President of the All India Oracle Users Group(AIOUG) and is a frequent speaker at many Oracle events including Oracle Open World.</p>
                </div>
                <div class="col-sm-4" style="margin-top:30px">
                    <center>
                   <img class="image img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/Satyendra.jpg"  alt="satyendra" style="width: 100px;height: 100px;" title="">
                <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff;" contenteditable="false"><br>President</h6>
                    <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff;" contenteditable="false"> <strong>AIOUG </strong></h6>
                </center>
                 <div class="modal-footer nomargintop">
              </div>
           </div>
         </div>
       </div>
     </div>
    </div>
  </div>
  <!-- Dheeraj modal-->
    <!-- sunder -->
    <div class="modal fade" id="exampleModal24" tabindex="-1" style="background-color: rgba(0,0,0,0.8) !important;padding-top:180px!important;" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content" style="background-color:rgba(0,0,0,0.2) !important; border: 1px solid #ffffff; -webkit-box-shadow:none !important;
box-shadow:none !important;">
      <div class="modal-header">
        <h4 class="modal-title" style="color:#000000;" id="exampleModalLabel18"><strong>Sunder Muthevi</strong></h4>
        <button id="clearblur" type="button" style="color:#000000;" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
            <div class="row">
                <div class="col-sm-8">
                     <p style="color:#ffffff;text-align:justify;" class="methodText">Working with companies like IBM, HP and EMC - Sunder has over 24 years of experience across industries in Product Strategy Management around IT Infrastructure, Datacenter Technologies, Cloud and Automation. As the CTO of Pi Data Centers, he is the master mind behind Harbour1, the enterprise cloud platform of Pi Data Centers. Pi runs Asia's Largest Uptime Institute TIER IV Certified Data Center right here in Andhra Pradesh. Sunder is a MS graduate in Information Science, from Penn State University, Pennsylvania, USA and holds a BE from RVCE Bangalore, India.</p>
              
                </div>
                <div class="col-sm-4" style="margin-top:25px;">
                    <center>
                   <img class="image img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/Sunder-Muthevi.jpg" alt="sunder" style="width: 100px;height: 100px;" title="">
                <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff;" contenteditable="false"><br>Chief Technology Officer  </h6>
                    <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff;" contenteditable="false"> <strong>Pi DATACENTERS</strong></h6>
                </center>
                 <div class="modal-footer nomargintop">
              </div>
           </div>
         </div>
       </div>
     </div>
    </div>
  </div>
    <!-- sunder -->
    <!-- ravi -->
    <div class="modal fade" id="exampleModal25" tabindex="-1" style="background-color: rgba(0,0,0,0.8) !important;padding-top:180px!important;" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content" style="background-color:rgba(0,0,0,0.2) !important; border: 1px solid #ffffff; -webkit-box-shadow:none !important;
box-shadow:none !important;">
      <div class="modal-header">
        <h4 class="modal-title" style="color:#000000;" id="exampleModalLabel18"><strong>Ravi Eswarapu</strong></h4>
        <button id="clearblur" type="button" style="color:#000000;" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
            <div class="row">
                <div class="col-sm-8">
                     <p style="color:#ffffff;text-align:justify;" class="methodText">With over 20 years of consulting and operational experience in set up of Global Delivery Centers, Design and Implementation of Tier II Strategy and Low Costs Delivery Models, Ravi is a true pioneer in the IT space. He has executed several full life cycle implementations of IT enabled Business Process Re-engineering projects. He is a Vice President at Pena4 Tech Solutions and the President of ITAAP. </p>
              
                </div>
                <div class="col-sm-4">
                    <center>
                   <img class="image img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/Ravi.jpg" alt="ravi" style="width: 100px;height: 100px;" title="">
                <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff;" contenteditable="false"><br>President</h6>
                    <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff;" contenteditable="false"> <strong>ITAAP</strong></h6>
                </center>
                 <div class="modal-footer nomargintop">
              </div>
           </div>
         </div>
       </div>
     </div>
    </div>
  </div>
    <!-- ravi -->
    <!-- avadhani -->
    <div class="modal fade" id="exampleModal26" tabindex="-1" style="background-color: rgba(0,0,0,0.8) !important;padding-top:180px!important;" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content" style="background-color:rgba(0,0,0,0.2) !important; border: 1px solid #ffffff; -webkit-box-shadow:none !important;
box-shadow:none !important;">
      <div class="modal-header">
        <h4 class="modal-title" style="color:#000000;" id="exampleModalLabel18"><strong>Dr. P S Avadhani</strong></h4>
        <button id="clearblur" type="button" style="color:#000000;" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
            <div class="row">
                <div class="col-sm-8">
                     <p style="color:#ffffff;text-align:justify;" class="methodText">Professor, Principal, Chairman, Faculty of Engg. A.U College of Engg, Andhra University - Dr. Avadhani has been a pillar of the Computer Science scene in Visakhapatnam. M.Tech and Ph.D from IIT Kanpur, he has received multiple prestigious awards such as Best Teacher, Best Researcher and Best Academician including the Charter Patron Award in 2010 from CSI. </p>
              
                </div>
                <div class="col-sm-4">
                    <center>
                   <img class="image img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/avadani.png" alt="p s avadhani" style="width: 100px;height: 100px;" title="">
                <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff;" contenteditable="false"><br>Principal  </h6>
                    <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff;" contenteditable="false"> <strong>Andhra University</strong></h6>
                </center>
                 <div class="modal-footer nomargintop">
              </div>
           </div>
         </div>
       </div>
     </div>
    </div>
  </div>
    <!-- avadhani -->
    <!--Subhasha Ranjan-->
  <div class="modal fade" id="exampleModal28" tabindex="-1" style="background-color: rgba(0,0,0,0.8) !important;padding-top:180px!important;" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
 <div class="modal-dialog modal-md" role="document">
   <div class="modal-content" style="background-color:rgba(0,0,0,0.2) !important; border: 1px solid #ffffff ; -webkit-box-shadow:none !important;
box-shadow:none !important;">
     <div class="modal-header">
       <h4 class="modal-title" style="color:#000000 ;" id="exampleModalLabel18"><strong>Subhasha Ranjan</strong></h4>
       <button id="clearblur" type="button" style="color:#000000 ;" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
     </div>
     <div class="modal-body ">
           <div class="row">
               <div class="col-sm-8">
                    <p style="color:#ffffff ;text-align:justify;" class="methodText">A B2B/Integration Architect at NVIDIA Corporation, Subasha is part of a team that maintains one the largest SAP implementations. He has previously worked on multiple projects in the space of integration and is also the co-founder of ToyMahal and A.K.Designs. He loves exploring things and resolving challenges. In his view, chasing ideas is important to stay in front of this hi-tech world.</p>
             
               </div>
               <div class="col-sm-4">
                   <center>
                  <img class="image img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/Subhasha.jpg" alt="Subhasha Ranjan" style="width: 100px;height: 100px;" title="">
               <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff ;" contenteditable="false"><br>Integration Architect  </h6>
                   <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff ;" contenteditable="false"> <strong>NVIDIA Corporation</strong></h6>
               </center>
                <div class="modal-footer nomargintop">
             </div>
          </div>
        </div>
      </div>
    </div>
   </div>
 </div>
  <!-- subhash -->
  
  <!--Abhi Deshmukh-->
  <div class="modal fade" id="exampleModal27" tabindex="-1" style="background-color: rgba(0,0,0,0.8) !important;padding-top:180px!important;" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
 <div class="modal-dialog modal-md" role="document">
   <div class="modal-content" style="background-color:rgba(0,0,0,0.2) !important; border: 1px solid #ffffff ; -webkit-box-shadow:none !important;
box-shadow:none !important;">
     <div class="modal-header">
       <h4 class="modal-title" style="color:#000000 ;" id="exampleModalLabel18"><strong>Abhi Deshmukh</strong></h4>
       <button id="clearblur" type="button" style="color:#000000 ;" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
     </div>
     <div class="modal-body ">
           <div class="row">
               <div class="col-sm-8">
                    <p style="color:#ffffff ;text-align:justify;" class="methodText">Abhi has the professional experience of managing a Business (topline and bottomline), is a Sales Leader, Engineering Manager, Evangelist, Development Manager and a Coach. He is currently working on AI, Cognitive and teaching Watson how to recruit great people while nurturing and delivering high performance teams for IBM.</p>
             
               </div>
               <div class="col-sm-4">
                   <center>
                  <img class="image img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/Abhi.jpg" alt="Abhi Deshmukh" style="width: 100px;height: 100px;" title="">
               <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff ;" contenteditable="false"><br>Program Director  </h6>
                   <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff ;" contenteditable="false"> <strong>Watson Talent, IBM</strong></h6>
               </center>
                <div class="modal-footer nomargintop">
             </div>
          </div>
        </div>
      </div>
    </div>
   </div>
 </div>
  
  
  
  
  
   <!--gopal -->
    <div class="modal fade" id="exampleModal18" tabindex="-1" style="background-color: rgba(0,0,0,0.8) !important;padding-top:180px!important;" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content" style="background-color:rgba(0,0,0,0.2) !important; border: 1px solid #ffffff; -webkit-box-shadow:none !important;
box-shadow:none !important;">
      <div class="modal-header">
        <h4 class="modal-title" style="color:#000000;" id="exampleModalLabel"><strong>Dr. Gopal Pingali</strong></h4>
        <button id="clearblur" type="button" style="color:#000000;" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
            <div class="row">
                <div class="col-sm-8">
                     <p style="color:#ffffff;text-align:justify;" class="methodText">An IBM Distinguished Engineer and Vice President of the Global Technology Services Labs(GTS Labs) at IBM, Dr. Gopal Pingali is a technology leader. In his worldwide leadership role he is responsible for driving cognitive and hybrid cloud solutions for clients around the world. His teams help organizations achieve IT as a Service through development of automation, analytics and cognitive. He also established the IBM Cloud Center of Excellence in 2009. </p>
                </div>
                <div class="col-sm-4" style="margin-top:14px">
                    <center>
                   <img class="image img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/PINGALI.jpg" style="width: 100px;height: 100px;" title="" alt="surya viswanth" >
                <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff;line-height: 18px;" contenteditable="false"><br>Distinguished Engineer and VP - GTS Labs</h6>
                    <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff;" contenteditable="false"> <strong>IBM </strong></h6>
                </center>
                 <div class="modal-footer nomargintop">
              </div>
           </div>
         </div>
       </div>
     </div>
    </div>
  </div>
     <!--end gopal modal-->
     <!-- Dheeraj modal-->
     <div class="modal fade" id="exampleModal22" tabindex="-1" style="background-color: rgba(0,0,0,0.8) !important;padding-top:180px!important;" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content" style="background-color:rgba(0,0,0,0.2) !important; border: 1px solid #ffffff; -webkit-box-shadow:none !important;
box-shadow:none !important;">
      <div class="modal-header">
        <h4 class="modal-title" style="color:#000000;" id="exampleModalLabel18"><strong>Dheeraj Kota</strong></h4>
        <button id="clearblur" type="button" style="color:#000000;" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
            <div class="row">
                <div class="col-sm-8">
                     <p style="color:#ffffff;text-align:justify;" class="methodText">Worked in Silicon Valley for Cisco Systems. The drive and energy in Silicon Valley to churn out innovation made him realize there is more we can do in India than the US. Moved back in 2014 and have been building products on Deep Learning, Blockchain, IOT & React. 
Small tidbit: Speaker Resume is on WikiLeaks and he himself is not sure how.</p>
                </div>
                <div class="col-sm-4" >
                    <center>
                   <img class="image img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/Dheeraj.jpg" alt="dheeraj" style="width: 100px;height: 100px;" title="">
                <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff;" contenteditable="false"><br>Co - Founder</h6>
                    <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff;" contenteditable="false"> <strong>Startup Gurukul</strong></h6>
                </center>
                 <div class="modal-footer nomargintop">
              </div>
           </div>
         </div>
       </div>
     </div>
    </div>
  </div>
  <!-- dheeraj -->
       <!--archit-->
    <div class="modal fade" id="exampleModal11" tabindex="-1" style="background-color: rgba(0,0,0,0.8) !important;padding-top:180px!important;" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content" style="background-color:rgba(0,0,0,0.2) !important; border: 1px solid #fff; -webkit-box-shadow:none !important;
box-shadow:none !important;">
      <div class="modal-header">
        <h4 class="modal-title" style="color:#000000 ;" id="exampleModalLabel"><strong>Archit Gupta </strong></h4>
        <button id="clearblur" type="button" style="color:#000000 ;" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
            <div class="row">
                <div class="col-sm-8">
                     <p style="color:#ffffff ;text-align:justify;" class="methodText">Bot Developer, quick Learner - Archit Gupta is a Senior Cognitive Researcher at Miracle's Innovation Labs. He has extensive experience working on various Natural Language Processing(NLP) engines like Microsoft LUIS, IBM Watson and Kore.ai for creating chat bots in various verticals. His passion towards chat bots led him to design various unique solutions in developing different bots for Miracle.</p>
                </div>
                <div class="col-sm-4">
                    <center>
                   <img class="image img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/Archit-1.png" style="width: 100px;height: 100px;" title="" alt="archit" >
                <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff ;" contenteditable="false"><br>Sr. Researcher - Cognitive </h6>
                    <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff ;" contenteditable="false"> <strong>Miracle's Innovation Labs </strong></h6>
                </center>
                 <div class="modal-footer nomargintop">
        
        </div>
                </div>
            </div>
        
        </div>
      
      </div>
    
    </div>
  </div>
       <!--srikanth-->
       <div class="modal fade" id="exampleModal12" tabindex="-1" style="background-color: rgba(0,0,0,0.8) !important;padding-top:180px!important;" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content" style="background-color:rgba(0,0,0,0.2) !important; border: 1px solid #fff; -webkit-box-shadow:none !important;
box-shadow:none !important;">
      <div class="modal-header">
        <h4 class="modal-title" style="color:#000000;" id="exampleModalLabel"><strong>Srikanth Doddi </strong></h4>
        <button id="clearblur" type="button" style="color:#000000;" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
            <div class="row">
                <div class="col-sm-8">
                     <p style="color:#ffffff;text-align:justify;" class="methodText">Founder of the technical club at Sri Vasavi Engineering College, Srikanth is a technology lover who is passionate on spreading and teaching anything that surrounds cognitive computing. Also a member of the IQAC(Internal Quality Assurance Cell) at his college, he is an able student and bot developer who loves diving into new technology.  </p>
                </div>
                <div class="col-sm-4">
                    <center>
                   <img class="image img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/Srikanth-studnt.jpg" style="width: 100px;height: 100px;" title="" alt="srikanth" >
                <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff;" contenteditable="false"><br>CS Student </h6>
                    <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff;" contenteditable="false"><strong> Sri Vasavi Engineering College </strong></h6>
                </center>
                 <div class="modal-footer nomargintop">
         
        </div>
                </div>
            </div>
         
        </div>
       
      </div>
     
    </div>
  </div>
     <!--rajanikanth-->
     <div class="modal fade" id="exampleModal13" tabindex="-1" style="background-color: rgba(0,0,0,0.8) !important;padding-top:180px!important;" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content" style="background-color:rgba(0,0,0,0.2) !important; border: 1px solid #fff; -webkit-box-shadow:none !important;
box-shadow:none !important;">
      <div class="modal-header">
        <h4 class="modal-title" style="color:#000000 ;" id="exampleModalLabel"><strong>Rajanikanth Chilakapati </strong></h4>
        <button id="clearblur" type="button" style="color:#000000 ;" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
            <div class="row">
                <div class="col-sm-8">
                     <p style="color:#ffffff ;text-align:justify;" class="methodText">Currently a Senior AWS Solutions Architect for Amazon Internet Services, Raj comes with over 17 years of experience across industries such as Banking and Finance and Healthcare, while remaining a developer at heart! Having worked at firms like Baxter, Perot Systems, CA Technologies and others - he strongly believes that technology is a means but not an end, and that technology can enable us to build and achieve our end goals. </p>
                </div>
                <div class="col-sm-4">
                    <center>
                   <img class="image img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/Raj_Chilakapati.png" style="width: 100px;height: 100px;" title="" alt="rajainikanth" >
                <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff ;" contenteditable="false"><br>Sr. Solution Architect</h6>
                    <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff ;" contenteditable="false"><strong> Amazon Web Services </strong></h6>
                </center>
                 <div class="modal-footer nomargintop">
        
        </div>
                </div>
            </div>
        
        </div>
      
      </div>
    
    </div>
  </div>
  <div class="modal fade" id="exampleModal1" tabindex="-1" style="background-color: rgba(0,0,0,0.8) !important;padding-top:180px!important;" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >

  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content" style="background-color:rgba(0,0,0,0.2) !important; border: 1px solid #fff; -webkit-box-shadow:none !important;
box-shadow:none !important;">
      <div class="modal-header">
        <h4 class="modal-title" style="color:#000000;" id="exampleModal1"><strong>Sudheer Polavarapu</strong></h4>
        <button id="clearblur" type="button" style="color:#000000;" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
            <div class="row">
                <div class="col-sm-8">
                     <p style="color:#ffffff;text-align:justify;" class="methodText">Sudheer is a product leader and seasoned technologist with comprehensive experience in enabling innovation through technology and deriving value through productization and new service offerings. He has over 16 years of industry experience in building enterprise and internet software and services, high-performance applications and enterprise scale cloud services (SaaS), with special focus on energy and utilities and smart cities. At Fluentgrid, he helps to build world-class products and solutions that customers love and value.</p>
                </div>
                <div class="col-sm-4">
                    <center>
                   <img class="image img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/sudheer.jpg" style="width: 100px;height: 100px;" title="" alt="usha" >
                <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff;" contenteditable="false"><br>VP – Product Management</h6>
                    <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff;" contenteditable="false"> <strong>Fluentgrid </strong></h6>
                </center>
                 <div class="modal-footer nomargintop">
         
        </div>
                </div>
            </div>
         
        </div>
       
      </div>
     
    </div>
  </div>
     <!--kunal-->
    <div class="modal fade" id="exampleModal14" tabindex="-1" style="background-color: rgba(0,0,0,0.8) !important;padding-top:180px!important;" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >

  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content" style="background-color:rgba(0,0,0,0.2) !important; border: 1px solid #fff; -webkit-box-shadow:none !important;
box-shadow:none !important;">
      <div class="modal-header">
        <h4 class="modal-title" style="color:#000000;" id="exampleModalLabel"><strong>Kunal Chowdhury </strong></h4>
        <button id="clearblur" type="button" style="color:#000000;" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
            <div class="row">
                <div class="col-sm-8">
                     <p style="color:#ffffff;text-align:justify;" class="methodText">A renowned public speaker, active blogger(by passion) and a software engineer by proffession - Kunal has been a Microsoft MVP for over 7 years, covering topics from Microsoft Silverlight to Windows App Development. As a technical buff, Kunal has in-depth knowledge of OOPs, C#, XAML, .NET, WPF, UWP, Visual Studio, Windows 10 and Microsoft Azure. He is also proficient in the entire SDLC and Scrum methodology. He has written many articles, tips and tricks on his technical blog for developers and consumers.</p>
                </div>
                <div class="col-sm-4">
                    <center>
                   <img class="image img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/Kunal-Chowdhury.jpg" style="width: 100px;height: 100px;" title="" alt="kunal" >
                <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff;font-size:14px;" contenteditable="false"><br><strong>Microsoft MVP</strong></h6>
                    
                </center>
                 <div class="modal-footer nomargintop">
         
        </div>
                </div>
            </div>
         
        </div>
       
      </div>
     
    </div>
  </div>
    <!--mayur-->
    <div class="modal fade" id="exampleModal15" tabindex="-1" style="background-color: rgba(0,0,0,0.8) !important;padding-top:180px!important;" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content" style="background-color:rgba(0,0,0,0.2) !important; border: 1px solid #fff; -webkit-box-shadow:none !important;
box-shadow:none !important;">
      <div class="modal-header">
        <h4 class="modal-title" style="color:#000000;" id="exampleModalLabel"><strong>Mayur Tendulkar</strong></h4>
        <button id="clearblur" type="button" style="color:#000000;" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
            <div class="row">
                <div class="col-sm-8">
                     <p style="color:#ffffff;text-align:justify;" class="methodText">Based out of Pune, Mayur is a Program Manager within the Xamarin Team at Microsoft. Before joining Microsoft, since 2013, he was awarded as Microsoft Most Valuable Professional on Windows Development and worked as a Developer Evangelist with Xamarin. He has been writing mobile applications since the days of Windows Mobile 5.0 and loves to talk about everything mobile. You can find him talking at conferences, user groups and on various social channels.</p>
                </div>
                <div class="col-sm-4">
                    <center>
                   <img class="image img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/Mayur-Tendulkar.jpg" style="width: 100px;height: 100px;" title="" alt="mayur" >
                <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff;" contenteditable="false"><br>Program Manager</h6>
                    <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff;" contenteditable="false"> <strong>Microsoft </strong></h6>
                </center>
                 <div class="modal-footer nomargintop">
         
        </div>
                </div>
            </div>
         
        </div>
       
      </div>
     
    </div>
  </div>

<!--model-->

<!--Surya Vishwanth Perala -->
 <div class="modal fade" id="exampleModal16" tabindex="-1" style="background-color: rgba(0,0,0,0.8) !important;padding-top:180px!important;" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content" style="background-color:rgba(0,0,0,0.2) !important; border: 1px solid #fff; -webkit-box-shadow:none !important;
box-shadow:none !important;">
      <div class="modal-header">
        <h4 class="modal-title" style="color:#000000 ;" id="exampleModalLabel"><strong>Surya Viswanath Perala</strong></h4>
        <button id="clearblur" type="button" style="color:#000000 ;" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
            <div class="row">
                <div class="col-sm-8">
                     <p style="color:#ffffff ;text-align:justify;" class="methodText">An engineering student with lot of passion towards technology is how we can address Surya Vishwanath, he stands unique for his problem solving skills and also loves taking up new challenges and competing with the growing technology needs in our day to day life. Catch him at the event to share your views with him on Machine Learning.</p>
                </div>
                <div class="col-sm-4">
                    <center>
                   <img class="image img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/surya.jpg" style="width: 100px;height: 100px;" title="" alt="surya viswanath" >
                <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff ;" contenteditable="false"><br>Student</h6>
                    <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff ;" contenteditable="false"> <strong>Vignan Engineering College </strong></h6>
                </center>
                 <div class="modal-footer nomargintop">
        </div>
                </div>
            </div>
        
        </div>
      
      </div>
    
    </div>
  </div>
   <!--Sudharshan-->
      <div class="modal fade" id="exampleModal10" tabindex="-1" style="background-color: rgba(0,0,0,0.8) !important;padding-top:180px!important;" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content" style="background-color:rgba(0,0,0,0.2) !important; border: 1px solid #fff; -webkit-box-shadow:none !important;
box-shadow:none !important;">
      <div class="modal-header">
        <h4 class="modal-title" style="color:#000000;" id="exampleModalLabel"><strong>Sudharshan Govindan </strong></h4>
        <button id="clearblur" type="button" style="color:#000000;" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
            <div class="row">
                <div class="col-sm-8">
                     <p style="color:#ffffff;text-align:justify;" class="methodText">Sudharshan has over 16 years of experience in IT with expertise in Business Analysis, Software Design and Development, Testing, Quality Assurance, Deployment, Release and Production Support of J2EE based enterprise wide applications. His current focus is in specializing Cloud platform, DevOps, Microservices, Containers, Docker, Kubernetes, Serverless, Watson APIs, Java, API Connect, JavaScript and IBM Cloud. He represents IBM in various forums as Speaker / Panelist / Mentor. He attends various Hackathons, Developer meetups, Tech Events in advocating Developers / Startups to adopt IBM Cloud and Watson services.  </p>
                </div>
                <div class="col-sm-4" style="margin-top: 36px;">
                    <center>
                   <img class="image img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/sudarshan.jpg" style="width: 100px;height: 100px;" title="" alt="sudarshan" >
                <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff;" contenteditable="false"><br>Developer Advocate </h6>
                    <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff;" contenteditable="false"><strong> IBM </strong></h6>
                </center>
                 <div class="modal-footer nomargintop">
         
        </div>
                </div>
            </div>
         
        </div>
       
      </div>
     
    </div>
  </div>
  

   <div class="modal fade" id="exampleModal17" tabindex="-1" style="background-color: rgba(0,0,0,0.8) !important;padding-top:180px!important;" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >

 <div class="modal-dialog modal-md" role="document">

   <div class="modal-content" style="background-color:rgba(0,0,0,0.2) !important; border: 1px solid #ffffff

; -webkit-box-shadow:none !important;

box-shadow:none !important;">

     <div class="modal-header">

       <h4 class="modal-title" style="color:#000000

;" id="exampleModalLabel"><strong>Yuktesh Chintamadaka</strong></h4>

       <button id="clearblur" type="button" style="color:#000000

;" class="close" data-dismiss="modal" aria-label="Close">

         <span aria-hidden="true">&times;</span>

       </button>

     </div>

     <div class="modal-body ">

           <div class="row">

               <div class="col-sm-8">

                    <p style="color:#ffffff

;text-align:justify;" class="methodText">Yuktesh Chintamadaka has been with IBM for the last 7 years, and is currently responsible for IBM's Developer Eco System Team in the capacity of a Developer Advocate. He has conducted many IBM led meetups, and has been an active participant as speaker in various 3rd party engagements. He actively works with the start up community on influencing the adoption of IBM technologies around Cloud and Cognitive. Prior to this engagement, he has worked full time with the academic initiative to help various universities to embrace IBM Bluemix in their respective curriculum.</p>

               </div>

               <div class="col-sm-4" style="margin-top:30px">

                   <center>

                  <img class="image img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/yuktesh.jpg" style="width: 100px;height: 100px;" title="" alt="surya viswanath" >

               <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff

;" contenteditable="false"><br>Developer Advocate</h6>

                   <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff

;" contenteditable="false"> <strong>IBM </strong></h6>

               </center>

                <div class="modal-footer nomargintop">

             </div>

          </div>

        </div>

      </div>

    </div>

   </div>

 </div>

    <!--end yukethesh modal-->

<!-- Nagesh modal-->
     <div class="modal fade" id="exampleModal23" tabindex="-1" style="background-color: rgba(0,0,0,0.8) !important;padding-top:180px!important;" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content" style="background-color:rgba(0,0,0,0.2) !important; border: 1px solid #ffffff ; -webkit-box-shadow:none !important;
box-shadow:none !important;">
      <div class="modal-header">
        <h4 class="modal-title" style="color:#000000 ;" id="exampleModalLabel18"><strong>Venkata Nagesh
</strong></h4>
        <button id="clearblur" type="button" style="color:#000000 ;" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
            <div class="row">
                <div class="col-sm-8">
                     <p style="color:#ffffff ;text-align:justify;" class="methodText">With vast experience across all layers of Infrastructure, Compute, Network, Storage, Virtualization, Cloud and Container technologies - Nagesh is a Principal Architect with Pi Data Centers. He is also the only winner of the Docker Birthday Global app challenge from India.</p>
                </div>
                <div class="col-sm-4" >
                    <center>
                   <img class="image img-circle" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/Venkata-Nagesh.jpg" alt="Nagesh" style="width: 100px;height: 100px;" title="">
                <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff ;" contenteditable="false"><br>Principal Architect </h6>
                    <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff ;" contenteditable="false"> <strong>Pi DATACENTERS</strong></h6>
                </center>
                 <div class="modal-footer nomargintop">
              </div>
           </div>
         </div>
       </div>
     </div>
    </div>
  </div>
<!--End model-->





    <!--Main Footer-->
    <!--End Main Footer-->

    
</div>
</section>
	<!--Schedule Section-->
 
    <br>
    <section class="about-section">
    	<div class="auto-container">
        	<!--Sec Title-->
            <div class="sec-title centered">
            	<h2>DS '17 Focus Areas</h2>
                <h3>Events</h3>
                <div class="text">Enable yourselves with technology entrepreneurship and more <br><br></div>
            </div>
            
            <div class="row clearfix">
            	<!--Services Style One-->
            	<div class="services-style-one col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="icon-box">
                        	<span class="icon flaticon-bar-chart"></span>
                        </div>
                        <h3><a >Digital Transformation</a></h3>
                        <div class="text">    Enable yourselves across the latest cutting-edge technologies in IT</div>
                    </div>
                </div>
                
                <!--Services Style One-->
            	<div class="services-style-one col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="icon-box">
                        	<span class="icon flaticon-geography"></span>
                        </div>
                        <h3><a>Entrepreneurship</a></h3>
                        <div class="text">       Learn more about building technology startups from the experts directly </div>
                    </div>
                </div>
                
                <!--Services Style One-->
            	<div class="services-style-one col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="icon-box">
                        	<span class="icon flaticon-diamond"></span>
                        </div>
                        <h3><a >Opportunities</a></h3>
                        <div class="text">       Enter a camp ground full of career opportunities and networking chances</div>
                    </div>
                </div>
                
            </div>
            </div>
    </section>
      
 
    <!--End Schedule Section-->
    
    
    


      <section class="subscribe-section">
    	<div class="auto-container">
        	<div class="row clearfix">
            	<!--Column-->
            	<div class="column col-md-7 col-md-12 col-xs-12">
        		<a href=""><h2>Want to be at Digital Summit '17 ?</h2> <h2 style="color: #d43058 ;margin-top: 0px;">REGISTRATIONS CLOSED!</h2></a>
            		<div class="text">Expert Speakers, Hackathons, Celebrations and more - this December :)</div>
                </div>
                <!--Column-->
                <div class="column col-md-5 col-md-12 col-xs-12">
                	
                    <!--Subscribe form-->
                    <div class="subscribe-form">
                        <form method="post" action="techtalks-registration.php">
                            <div class="form-group">
                            
                  <a href=""><button class="theme-btn btn-style-one" type="button" style="width:240px !important;height:60px !important;font-sixe:16px !important;left:170px;border-radius:0px !important" >Registrations Closed</button>
                  </a>
                            </div>
                        </form>
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
<script src="js/jquery-ui.js"></script>
<script src="js/wow.js"></script>
<script src="js/appear.js"></script>
<script src="js/script1.js"></script>

</body>
</html>