<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Digital Summit | Home</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/revolution-slider.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">



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
  <meta name="description" content="Digital Summit ’17, a week long extravaganza of technology, fun and opportunities, all wrapped together in Visakhapatnam – coming this December! ">
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
.news-style-one .inner-box .lower-box .read-more:hover {
    color: #d43058;
}
ul.clearfix > li.head >a:hover{
    color:#d43058 !important;
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
</style>
<!---->
<style>
    
#testimonial4{
  overflow: hidden;
  min-height: 375px;
  position: relative;
  background:none;
  color:#ababab;
}
#testimonial4 .carousel-inner{
  width: 75%;
  margin: auto;
}
#testimonial4 .carousel-inner:hover{
  cursor: pointer;
}
#testimonial4 .carousel-inner:active{
 cursor: pointer;
}
#testimonial4 .carousel-inner .item{
  overflow: hidden;
}

.testimonial4_indicators .carousel-indicators{
  left: 0;
  margin: 0;
  width: 100%;
  font-size: 0;
  height: 20px;
  bottom: 15px;
  padding: 0 5px;
  cursor: pointer;
  overflow-x: auto;
  overflow-y: hidden;
  position: absolute;
  text-align: center;
  white-space: nowrap;
}
.testimonial4_indicators .carousel-indicators li{
  padding: 0;
  width: 10px;
  height: 10px;
  border: none;
  text-indent: 0;
  margin: 2px 3px;
  cursor: pointer;
  display: inline-block;
  background: #ffffff;
  -webkit-border-radius: 100%;
  border-radius: 100%;
}
.testimonial4_indicators .carousel-indicators .active{
  padding: 0;
  width: 10px;
  height: 10px;
  border: none;
  margin: 2px 3px;
  background-color: #000;
  -webkit-border-radius: 100%;
  border-radius: 100%;
}
.testimonial4_indicators .carousel-indicators::-webkit-scrollbar{
  height: 3px;
}
.testimonial4_indicators .carousel-indicators::-webkit-scrollbar-thumb{
  background: #eeeeee;
  -webkit-border-radius: 0;
  border-radius: 0;
}

.testimonial4_control_button .carousel-control{
  top: 175px;
  opacity: 1;
  width: 40px;
  bottom: auto;
  height: 40px;
  font-size: 10px;
  cursor: pointer;
  font-weight: 700;
  overflow: hidden;
  line-height: 38px;
  text-shadow: none;
  text-align: center;
  position: absolute;
  background: transparent;
  border: 2px solid #ffffff;
  text-transform: uppercase;
  -webkit-border-radius: 100%;
  border-radius: 100%;
  -webkit-box-shadow: none;
  box-shadow: none;
  -webkit-transition: all 0.6s cubic-bezier(0.3,1,0,1);
  transition: all 0.6s cubic-bezier(0.3,1,0,1);
}
.testimonial4_control_button .carousel-control.left{
  left: 7%;
  right: auto;
}
.testimonial4_control_button .carousel-control.right{
  right: 7%;
  left: auto;
}
.testimonial4_control_button .carousel-control.left:hover,
.testimonial4_control_button .carousel-control.right:hover{
  color: #000;
  background: #fff;
  border: 2px solid #fff;
}

.testimonial4_header{
  top: 0;
  left: 0;
  bottom: 0;
  width: 550px;
  display: block;
  margin: 30px auto;
  text-align: center;
  position: relative;
}
.testimonial4_header h4{
  color: #ffffff;
  font-size: 30px;
  font-weight: 600;
  position: relative;
  letter-spacing: 1px;
  text-transform: uppercase;
}

.testimonial4_slide{
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  width: 70%;
  margin: auto;
  padding: 20px;
  position: relative;
  text-align: center;
}
.testimonial4_slide img {
  top: 0;
  left: 0;
  right: 0;
  width: 100px;
  height: 100px;
  margin: auto;
  display: block;
  color: #f2f2f2;
  font-size: 18px;
  line-height: 46px;
  text-align: center;
  position: relative;
  border: 2px solid #fff;
}

.testimonial4_slide p {
  color: #ffffff;
  font-size: 16px;
  margin: 40px 0 20px 0;
}

.testimonial4_slide h4 {
  color: #ffffff;
  font-size: 24px;
  font-weight: bold;
}


@media only screen and (max-width: 480px){
  .testimonial4_control_button .carousel-control{
    display: none;
  }
  .testimonial4_header{
    width: 95%;
  }
  .testimonial4_header h4{
    font-size: 20px;
  }
  .testimonial4_slide{
    width: 98%;
    padding: 5px;
  }
}

@media (min-width: 481px) and (max-width: 767px){
  .testimonial4_control_button .carousel-control.left{
    left: 2%;
  }
  .testimonial4_control_button .carousel-control.right{
    right: 2%;
  }
  .testimonial4_header{
    width: 95%;
  }
  .testimonial4_slide{
    width: 98%;
    padding: 5px;
  }
}

@media (min-width: 768px) and (max-width: 991px){
  .testimonial4_control_button .carousel-control.left{
    left: 5%;
  }
  .testimonial4_control_button .carousel-control.right{
    right: 5%;
  }
}

@-webkit-keyframes psBoxShadowEffect_2{
  0% {
    opacity: 0.3;
  }
  40% {
    opacity: 0.5;
	-webkit-box-shadow: 0 0 0 2px rgba(255,255,255,0.1), 0 0 10px 10px #ffffff, 0 0 0 10px rgba(255,255,255,0.5);
  }
  100% {
    -webkit-box-shadow: 0 0 0 2px rgba(255,255,255,0.1), 0 0 5px 5px #ffffff, 0 0 0 5px rgba(255,255,255,0.5);
    -webkit-transform: scale(1.5);
    opacity: 0;
  }
}
@keyframes psBoxShadowEffect_2{
  0% {
    opacity: 0.3;
  }
  40% {
    opacity: 0.5;
	box-shadow: 0 0 0 2px rgba(255,255,255,0.1), 0 0 10px 10px #ffffff, 0 0 0 10px rgba(255,255,255,0.5);
  }
  100% {
    box-shadow: 0 0 0 2px rgba(255,255,255,0.1), 0 0 5px 5px #ffffff, 0 0 0 5px rgba(255,255,255,0.5);
    transform: scale(1.5);
    opacity: 0;
  }
}
.carousel-indicators li{
    background-color:#ababab !important;
}
.carousel-indicators .active {
    background-color:#fff !important;
}
.carousel-control{
    border: 2px solid #ababab !important;
}
@media screen and (min-width: 320px) and (max-width: 564px) {
   .theme-btn {
      left: 0px !important;
    }
}
@media screen and (min-width: 320px) and (max-width: 564px) {
   .logo-box {
      left: 0px !important;
    }
}

.sec-title{
    margin-bottom:25px!important;
}
a{ color: #ababab ; } 
a:hover { color:#ef4048 ;}
</style>
</head>

<body>

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
   <!-- Main Header -->
    <header class="main-header">
    	<!-- Header Top-->
    	<div class="header-top">
        	<div class="auto-container">
            	<div class="clearfix">
                    
                    <!--Top Left-->
                    <div class="top-left top-links">
                    	<ul class="clearfix">
                        	<li class="head"><a href="#" class=""><span class="icon fa fa-phone"></span>+91-891-662-3556</a></li>
                            <li><a href="mailto:apcloud@miraclesoft.com"><span class="icon fa fa-envelope-o"></span>apcloud@miraclesoft.com</a></li>
                        </ul>
                    </div>
                    
                    <!--Top Right-->
                    <div class="top-right">
                    	<div class="social-icon">
                            <a href="https://www.facebook.com/DigitalSummitVizag/" class="soco-facebook"><span class="fa fa-facebook"></span></a>
                            <a href="https://www.youtube.com/c/DigitalSummitVizag"  class="soco-youtube"><span class="fa fa-youtube"></span></a>
                            <a href="https://www.flickr.com/people/digitalsummit/" class="soco-flickr"><span class="fa fa-flickr"  ></span></a>
                             <a href="https://www.linkedin.com/company/digital-summit-vizag/" class="soco-linkedin" target=_blank><span class="fa fa-linkedin"></span></a>
							<a href="https://twitter.com/dsvizag" class="soco-twitter" target=_blank><span class="fa fa-twitter" ></span></a>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
        <!-- Header Top One End -->
        
        <!-- Header Lower -->
        <div class="header-lower">
            <div class="main-box">
                <div class="auto-container">
                    <div class="outer-container clearfix">
                        <!--Logo Box-->
                        <div class="logo-box">
                            <div class="logo"><a href="index.php"><img src="<?= AMAZON_URL ?>/ds17/images/logo-home.png" alt=""></a></div>
                        </div>
                        
                        <!--Nav Outer-->
                        <div class="nav-outer clearfix">
                            <!-- Main Menu -->
                            <nav class="main-menu">
                                <div class="navbar-header">
                                    <!-- Toggle Button -->    	
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    </button>
                                </div>
                                
                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix" style="margin-top: 12px;">
                                        <li class="current"><a href="#">Home</a></li>
                                        <li><a href="about-us.php">About</a></li>
                                         <li class="dropdown"><a href="#" onclick="redirectEventsPage();">Events</a>
                                            <ul>
                                                <li><a href="tech-talks.php">Tech Talks</a></li>
                                                <li><a href="citizen-hack.php">Citizen Hack</a></li>
                                                <li><a href="<?= DS17_ROOT_URL ?>/hungama.php">Hungama</a></li>
                                                <li><a href="<?= DS17_ROOT_URL ?>/job-fair.php">Job Fair</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="speakers.php">Speakers</a></li>
                                        <li><a href="partners.php">Partners</a></li>
                                        <li><a href="gallery.php">Gallery</a></li>
                                        <li><a href="venue.php">Venue</a></li>
                                        <li><a href="contact.php">Contact Us</a></li>
                                        
                                      
                                        
                                     </ul>
                                     
                                     
                            
                                </div>
                            </nav><!-- Main Menu End-->
                            
                            <!--Button Outer-->
                            <div class="btn-outer">
                            	
                                <div class="dropdown">
                                    <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                        <li class="panel-outer">
                                            <div class="form-container">
                                                <form method="post" action="blog.html">
                                                    <div class="form-group">
                                                        <input type="search" name="field-name" value="" placeholder="Search Here" required="">
                                                        <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            
                            
                            	
                            </div>
                             <div class="btn-outer">

                               <a href="https://play.google.com/store/apps/details?id=com.mss.ds.android" target="_blank" class="theme-btn buy-ticket-btn col-sm-12"><span><i class="fa fa-mobile" style="font-size: 24px;margin-top: -4px;vertical-align:middle;"></i></span>&nbsp; &nbsp;&nbsp;Mobile App</a>

                           </div
                           
                            
                        </div><!--Nav Outer End-->
                        
                        
                        
                        
                    </div>    
                </div>
            </div>
        </div>
        
        <!--Sticky Header-->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="index.html" class="img-responsive"><img src="<?= AMAZON_URL ?>/ds17/images/ds-logo.png" alt="" title=""></a>
                </div>
                
                <!--Right Col-->
                <div class="right-col pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->    	
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                        </div>
                        
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                        <li class="current"><a href="#">Home</a></li>
                                        <li><a href="about-us.php">About</a></li>
                                         <li class="dropdown"><a href="#" onclick="redirectEventsPage();">Events</a>
                                            <ul>
                                                <li><a href="tech-talks.php">Tech Talks</a></li>
                                                <li><a href="citizen-hack.php">Citizen Hack</a></li>
                                                <li><a href="<?= DS17_ROOT_URL ?>/hungama.php">Hungama</a></li>
                                                <li><a href="<?= DS17_ROOT_URL ?>/job-fair.php">Job Fair</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="speakers.php">Speakers</a></li>
                                        <li><a href="partners.php">Partners</a></li>
                                        <li><a href="gallery.php">Gallery</a></li>
                                        <li><a href="venue.php">Venue</a></li>
                                        <li><a href="contact.php">Contact Us</a></li>
                                        
                                         <li style="margin-left: 23px;">  
                                  <div class="btn-outer" style="margin-top: 11px;">
                            	<a href="https://play.google.com/store/apps/details?id=com.mss.ds.android" target="_blank" class="theme-btn btn-style-one col-sm-12" style="padding: 10px 17px;"><span><i class="fa fa-mobile" style="font-size: 24px;margin-top: -4px;vertical-align:middle;"></i></span>&nbsp; &nbsp;&nbsp;Mobile App</a>
                            </div></li>
                                     </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>
                
            </div>
        </div>
        <!--End Sticky Header-->
    
    </header>
    <!--End Main Header -->
    
    <!--Main Slider-->
    <section class="main-slider" data-start-height="600" data-slide-overlay="yes">
    	
        <div class="tp-banner-container">
            <div class="tp-banner">
                <ul>
                	
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="<?= AMAZON_URL ?>/ds17/images/header-images/home2.jpg"  data-saveperformance="off"  data-title="Awesome Title Here">
                    <img src="<?= AMAZON_URL ?>/ds17/images/header-images/vizag.png"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                    
                    <div class="tp-caption sft sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="-90"
                    data-speed="1500"
                    data-start="0"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><div class="sub-title">12th - 16th DECEMBER, 2018 @ VIZAG, INDIA</div></div>
                    
                    <div class="tp-caption sft sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="-20"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><h2>Digital Summit '18</h2></div>
                    
                  
                   
                   <!-- gggggggg -->
                   <div class="tp-caption sft sfb tp-resizeme"
                    data-x="center" data-hoffset="15"
                    data-y="center" data-voffset="70"
                    data-speed="1500"
                    data-start="1000"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><div class="sub-title alternate" style="margin-top:-18px;">AP's largest event focused on Digital Technologies</div></div>
                    
                   
                   <!-- gggggggg -->
                    
                    
                   <div class="tp-caption sfb sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="180"
                    data-speed="1500"
                    data-start="1500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn">
                  <div style="margin-top:-70px!important;"><a href="about-us.php" class="theme-btn btn-style-one" >About</a> &ensp; <a> <button class="theme-btn btn-style-one" type="button" disabled>Explore Now</button></a></div></div>
                    
                   
                    </li>
                    
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="<?= AMAZON_URL ?>/ds17/images/main-slider/2.jpg"  data-saveperformance="off"  data-title="Awesome Title Here">
                    <img src="<?= AMAZON_URL ?>/ds17/images/header-images/digital-valley-header.png"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                  
                    
                    <div class="tp-caption sft sfb tp-resizeme"
                    data-x="center" data-hoffset="15"
                    data-y="center" data-voffset="-70"
                    data-speed="1500"
                    data-start="0"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><div class="sub-title alternate" style="line-height: 22px !important;"><center style="font-size:30px;">Vizag - Digital Valley</center><br>The Destination for  Digital Transformation</h2></div></div>
                    
                    
                      <div class="tp-caption sft sfb tp-resizeme" style="margin-top:50px !important;"
                    data-x="center" data-hoffset="15"
                    data-y="center" data-voffset="30"
                    data-speed="1500"
                    data-start="400"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn">
                    <div class="row clearfix">
                        
            	<!--Services Style One-->
            	<div class="services-style-one col-md-4 col-sm-6 col-xs-12">
            	    
                	<div class="inner-box">
                    	<div class="icon-box">
                         <center><img class="img-responsive" height="50px!important" width="69px!important" src="<?= AMAZON_URL ?>/ds17/images/iot-01.svg" alt=""></center>
                        </div>
                       
                    </div>
                </div>
                
                <!--Services Style One-->
            	<div class="services-style-one col-md-4 col-sm-6 col-xs-12">
            	    
                	<div class="inner-box">
                    	<div class="icon-box">
                           <center><img class="img-responsive" height="50px!important" width="69px!important" src="<?= AMAZON_URL ?>/ds17/images/cloud-01.svg" alt=""></center>
                        </div>
                        
                    </div>
                </div>
                
                <!--Services Style One-->
            	<div class="services-style-one col-md-4 col-sm-6 col-xs-12">
            	    
                	<div class="inner-box">
                    	<div class="icon-box">
                         <center><img class="img-responsive" height="50px!important" width="69px!important" src="<?= AMAZON_URL ?>/ds17/images/devops-01.svg" alt=""></center>
                        </div>
                      
                    </div>
                </div>
                
                
            </div></div>
                    
                    <div class="tp-caption sft sfb tp-resizeme" style="margin-top:25px !important;"
                    data-x="center" data-hoffset="15"
                    data-y="center" data-voffset="80"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><h2><br>Visit Vizag for DS '17</span></h2></div>
                    
                    <!--<div class="tp-caption sft sfb tp-resizeme"-->
                    <!--data-x="center" data-hoffset="15"-->
                    <!--data-y="center" data-voffset="140"-->
                    <!--data-speed="1500"-->
                    <!--data-start="1000"-->
                    <!--data-easing="easeOutExpo"-->
                    <!--data-splitin="none"-->
                    <!--data-splitout="none"-->
                    <!--data-elementdelay="0.01"-->
                    <!--data-endelementdelay="0.3"-->
                    <!--data-endspeed="1200"-->
                    <!--data-endeasing="Power4.easeIn"><div class="text">Visit Vizag and Digital Summit ‘17</div></div>-->
                    
                    <!--<div class="tp-caption sfb sfb tp-resizeme"-->
                    <!--data-x="center" data-hoffset="15"-->
                    <!--data-y="center" data-voffset="200"-->
                    <!--data-speed="1500"-->
                    <!--data-start="1500"-->
                    <!--data-easing="easeOutExpo"-->
                    <!--data-splitin="none"-->
                    <!--data-splitout="none"-->
                    <!--data-elementdelay="0.01"-->
                    <!--data-endelementdelay="0.3"-->
                    <!--data-endspeed="1200"-->
                    <!--data-endeasing="Power4.easeIn"><a href="register.html" class="theme-btn btn-style-one">Register Now</a></div>-->
                    
                    </li>
                    
                    
                    
                    
                    
                    <!--  <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="<?= AMAZON_URL ?>/ds17/images/main-slider/2.jpg"  data-saveperformance="off"  data-title="Awesome Title Here">-->
                    <!--<img src="images/header-images/apcloud-header.png"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> -->
                    
                    <!--<div class="tp-caption sft sfb tp-resizeme"-->
                    <!--data-x="left" data-hoffset="15"-->
                    <!--data-y="center" data-voffset="-30"-->
                    <!--data-speed="1500"-->
                    <!--data-start="0"-->
                    <!--data-easing="easeOutExpo"-->
                    <!--data-splitin="none"-->
                    <!--data-splitout="none"-->
                    <!--data-elementdelay="0.01"-->
                    <!--data-endelementdelay="0.3"-->
                    <!--data-endspeed="1200"-->
                    <!--data-endeasing="Power4.easeIn"><div class="sub-title alternate">The Destination for  Digital Transformation</h2></div></div>-->
                    
                    <!--<div class="tp-caption sft sfb tp-resizeme"-->
                    <!--data-x="left" data-hoffset="15"-->
                    <!--data-y="center" data-voffset="30"-->
                    <!--data-speed="1500"-->
                    <!--data-start="500"-->
                    <!--data-easing="easeOutExpo"-->
                    <!--data-splitin="none"-->
                    <!--data-splitout="none"-->
                    <!--data-elementdelay="0.01"-->
                    <!--data-endelementdelay="0.3"-->
                    <!--data-endspeed="1200"-->
                    <!--data-endeasing="Power4.easeIn"><h2>AP Cloud </h2></div>-->
                    
                    <!--<div class="tp-caption sft sfb tp-resizeme"-->
                    <!--data-x="left" data-hoffset="15"-->
                    <!--data-y="center" data-voffset="90"-->
                    <!--data-speed="1500"-->
                    <!--data-start="1000"-->
                    <!--data-easing="easeOutExpo"-->
                    <!--data-splitin="none"-->
                    <!--data-splitout="none"-->
                    <!--data-elementdelay="0.01"-->
                    <!--data-endelementdelay="0.3"-->
                    <!--data-endspeed="1200"-->
                    <!--data-endeasing="Power4.easeIn"><div class="text">Vizag, India</div></div>-->
                    
                    <!--<div class="tp-caption sfb sfb tp-resizeme"-->
                    <!--data-x="left" data-hoffset="15"-->
                    <!--data-y="center" data-voffset="150"-->
                    <!--data-speed="1500"-->
                    <!--data-start="1500"-->
                    <!--data-easing="easeOutExpo"-->
                    <!--data-splitin="none"-->
                    <!--data-splitout="none"-->
                    <!--data-elementdelay="0.01"-->
                    <!--data-endelementdelay="0.3"-->
                    <!--data-endspeed="1200"-->
                    <!--data-endeasing="Power4.easeIn"><a href="http://www.apcloud.in/ac/" target="_blank" class="theme-btn btn-style-one">Read More</a></div>-->
                    
                    
                    <!--<div class="tp-caption sft sfb tp-resizeme"-->
                    <!--data-x="right" data-hoffset="15"-->
                    <!--data-y="center" data-voffset="-70"-->
                    <!--data-speed="1500"-->
                    <!--data-start="0"-->
                    <!--data-easing="easeOutExpo"-->
                    <!--data-splitin="none"-->
                    <!--data-splitout="none"-->
                    <!--data-elementdelay="0.01"-->
                    <!--data-endelementdelay="0.3"-->
                    <!--data-endspeed="1200"-->
                    <!--data-endeasing="Power4.easeIn"><div class="sub-title alternate">-->
                    <!--    <iframe width="130%" height="300px" src="https://www.youtube.com/embed/lyQgGy07aZw" frameborder="0" allowfullscreen style="margin-right:60px;margin-top:130px;"></iframe>-->
                    <!--    </div></div>-->
                    
                    
                    <!--</li>-->
                    
                </ul>
            </div>
        </div>
    </section>
    <!--End Main Slider-->
    
    <!--About Section-->
    <section class="about-section">
    	<div class="auto-container">
        	<!--Sec Title-->
            <div class="sec-title centered">
            	<h2>Technology Areas</h2>
               
                <!--<div class="text">To Explore Business Event get ready with more than 10000 people.</div>-->
            </div>
            
            <div class="row clearfix">
            	<!--Services Style One-->
            	<div class="services-style-one col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="icon-box">
                         <center><i class="fa fa-cloud" aria-hidden="true"></i></center>
                        </div>
                        <h3><a >  Cloud Applications</a></h3>
                        <div class="text">Build and Scale your applications in minutes instead of months</div>
                    </div>
                </div>
                
                <!--Services Style One-->
            	<div class="services-style-one col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="icon-box">
                           <center><i class="fa fa-microchip" aria-hidden="true"></i></center>
                        </div>
                        <h3><a > Internet of Things</a></h3>
                        <div class="text">Create networks of things to deliver smarter customer experiences</div>
                    </div>
                </div>
                
                <!--Services Style One-->
            	<div class="services-style-one col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="icon-box">
                         <center><i class="fa fa-lock" aria-hidden="true"></i></center>
                        </div>
                        <h3><a>Enterprise Security</a></h3>
                        <div class="text"> Prepare your systems, applications and data to defend themselves</div>
                    </div>
                </div>
                
            </div>
            
             <div class="row clearfix">
            	<!--Services Style One-->
            	<div class="services-style-one col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="icon-box">
                            <center><i class="fa fa-wrench" aria-hidden="true"></i></center>
                        </div>
                        <h3><a >  DevOps and Agility</a></h3>
                        <div class="text">Rapidly deliver new apps and features to your users with an agile approach</div>
                    </div>
                </div>
                
                <!--Services Style One-->
            	<div class="services-style-one col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="icon-box">
                           <center><i class="fa fa-puzzle-piece" aria-hidden="true"></i></center>
                        </div>
                        <h3><a >Cognitive Computing</a></h3>
                        <div class="text">Make your solutions smarter with bots, machine learning and AI</div>
                    </div>
                </div>
                
                <!--Services Style One-->
            	<div class="services-style-one col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="icon-box">
                           <center><i class="fa fa-btc" aria-hidden="true"></i></center>
                        </div>
                        <h3><a>Blockchain Networks</a></h3>
                        <div class="text">Build new age solutions with a distributed ledger based approach </div>
                    </div>
                </div>
                
            </div>
            
        </div>
    </section>
    <!--End About Section-->
     <!--Testimonial Section-->
    <section class="testimonial-section" style="background-image:url(<?= AMAZON_URL ?>/ds17/images/background/1.jpg);">
        <div class="auto-container">
            <!--Sec Title-->
            <div class="sec-title sec-title1 light centered">
                <h2>Testimonials</h2>
               
            </div>
            
            <!--Product Thumbs Carousel-->
              <div class="client-thumb-outer">
                <div class="client-thumbs-carousel owl-carousel owl-theme">
                
                    <div class="thumb-item">
                        <figure class="thumb-box"><img src="<?= AMAZON_URL ?>/ds17/images/jared1.png" alt=""></figure>
                    </div>
                    <div class="thumb-item">
                        <figure class="thumb-box"><img src="<?= AMAZON_URL ?>/ds17/images/Archit.png" alt=""></figure>
                  </div>
                    <div class="thumb-item">
                        <figure class="thumb-box"><img src="<?= AMAZON_URL ?>/ds17/images/cheifminister1.png" alt=""></figure>
                    </div>
                      <div class="thumb-item">
                        <figure class="thumb-box"><img src="<?= AMAZON_URL ?>/ds17/images/mounika.png" alt=""></figure>
                    </div>
                     <div class="thumb-item">
                        <figure class="thumb-box"><img src="<?= AMAZON_URL ?>/ds17/images/speakers/plokam.jpg" alt=""></figure>
                    </div>
                    <div class="thumb-item">
                        <figure class="thumb-box"><img src="<?= AMAZON_URL ?>/ds17/images/Nareemani.png" alt=""></figure>
                    </div>
                        <div class="thumb-item">
                        <figure class="thumb-box"><img src="<?= AMAZON_URL ?>/ds17/images/speakers/palle-raghunadhreddy.png" alt=""></figure>
                    </div>
                     <div class="thumb-item">
                        <figure class="thumb-box"><img src="<?= AMAZON_URL ?>/ds17/images/sowmya.png" alt=""></figure>
                  </div>
                       <div class="thumb-item">
                        <figure class="thumb-box"><img src="<?= AMAZON_URL ?>/ds17/images/Srikanth.jpg" alt=""></figure>
                    </div>
                    <div class="thumb-item">
                        <figure class="thumb-box"><img src="<?= AMAZON_URL ?>/ds17/images/usha.png" alt=""></figure>
                    </div>
                      
                </div>
            </div>
            
            <!--Client Testimonial Carousel-->
            <div class="client-testimonial-carousel owl-carousel owl-theme">
             
                <!--Testimonial Block One-->
                 <div class="testimonial-block-one">
                    <div class="inner-box">
                        <h3>Jared Perry</h3>
                       <div class="designation">Senior Research Associate for Miracle Innovation Labs</div>
                   <div class="designation">Miracle Software Systems, Inc</div>
                    <div class="text">Students enabled through AP Cloud and Digital Summit are outperforming others in the latest technologies</div>
                    </div>
                </div>
                
                
                
                <!--Testimonial Block One-->
               <div class="testimonial-block-one">
                    <div class="inner-box">
                        <h3>Archit Gupta</h3>
                        <div class="designation">Cognitive research Associate</div>
                         <div class="designation"> Miracle Software Systems, Inc.</div>
              <div class="text">Best part is creating Chatbots using Microsoft Bot Framework and I am looking forward to learn more
                    </div>
              </div>
                </div>
                
                <!--Testimonial Block One-->
                <div class="testimonial-block-one">
                    <div class="inner-box">
                        <h3>Chandra Babu Naidu</h3>
                       <div class="designation">Chief Minister</div>
                        <div class="designation">Govt. of Andhra Pradesh</div>
                    <div class="text">Digital Transformation creates career opportunities, while improving the life of people in Andhra Pradesh
              </div>                    </div>
                </div>
                 <div class="testimonial-block-one">
                    <div class="inner-box">
                        <h3>Mounika Chirukuri</h3>
                        <div class="designation">Lead Researcher - Cognitive and Data</div>
                         <div class="designation">Miracle Software Systems, Inc.</div>
                
                <div class="text">DS is an amazing platform for students to showcase their talent and I am glad to be a part of such event
</div>
                  </div>
                </div>
                <!--Testimonial Block One-->
                 <div class="testimonial-block-one">
                    <div class="inner-box">
                        <h3>Prasad Lokam</h3>
                        <div class="designation">CEO</div>
                         <div class="designation"> Miracle Software Systems, Inc.</div>
                <div class="text">The main aim behind DS '16 is to transform the state digitally and provide 100,000 career opportunities</div>
                  </div>
                </div>
                 <div class="testimonial-block-one">
                    <div class="inner-box">
                        <h3>Nareemani Nirjogi</h3>
                        <div class="designation">Student</div>
                         <div class="designation">Miracle Educational Society</div>
                
                <div class="text">This event lets you hear the success stories and allows to acquire knowledge over future technologies
</div>
                  </div>
                </div>
                 <div class="testimonial-block-one">
                    <div class="inner-box">
                        <h3>Palle Raghunatha Reddy</h3>
                        <div class="designation">Former Minister for IT and Communications</div>
                         <div class="designation">Govt. of Andhra Pradesh</div>
                        
                <div class="text">AP Cloud is a great initiative that will provide job opportunities for the students of Andhra Pradesh.

</div>
                  </div>
                </div>
                 <div class="testimonial-block-one">
                    <div class="inner-box">
                        <h3>Sowmya Suravarapu</h3>
                       <div class="designation">Watson Research Associate</div>
                     <div class="designation">Miracle Software Systems, Inc.</div>
                        <div class="text">Digital Summit has amazing sessions and labs from which I have learnt building apps with Watson
                        </div>
                    </div>
                </div>
                
                 <div class="testimonial-block-one">
                    <div class="inner-box">
                        <h3>Srikanth Doddi</h3>
                        <div class="designation">Student</div>
                         <div class="designation">Sri Vasavi Engineering college</div>
                
                <div class="text">Knowledge has a beginning but no end, and thanks to DS'16 for sharing the knowledge to everyone.

</div>
                  </div>
                </div>
                 <div class="testimonial-block-one">
                    <div class="inner-box">
                        <h3>Usha Kiranmai Gangula</h3>
                        <div class="designation">Morpheus Research Associate</div>
                         <div class="designation">Miracle Software Systems, Inc.</div>
                
                <div class="text">Being an AP Cloud coach, I got an opportunity to share knowledge over technologies among students
</div>
                  </div>
                </div>
                <!--Testimonial Block One-->
  <!----  <div id="testimonial4" class="carousel slide testimonial4_indicators testimonial4_control_button thumb_scroll_x swipe_x" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">
        <!--<div class="testimonial4_header">-->
        <!-- <h4>what our clients are saying</h4>-->
        <!--</div>-->
     <!----  <ol class="carousel-indicators">
            <li data-target="#testimonial4" data-slide-to="0" class="active"></li>
            <li data-target="#testimonial4" data-slide-to="1"></li>
            <li data-target="#testimonial4" data-slide-to="2"></li>
            <li data-target="#testimonial4" data-slide-to="3"></li>
            <li data-target="#testimonial4" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <div class="testimonial4_slide">
                    <figure class="thumb-box"><img src="/images/jared1.png" alt="" class="img-circle img-responsive" /></figure>
                    <br>
                    <h3 style="color:#fff !important;font-size: 16px;font-weight: 600;">Jared Perry</h3>
                        <div class="designation" style="color:#ababab !important;font-size: 12px;">Senior Research Associate <br> Miracle Innovation Labs</div>
                        <br>
                        <div class="text" style="color:#ababab !important">The Hackaton program covers all the future technologies like Bluemix, IoT, Cognitive and Mobile applications. This is creating a great impact and passion in the young students to be part of a NextGen Technology.</div>
                </div>
            </div>
            <div class="item">
                <div class="testimonial4_slide">
                    <figure class="thumb-box"><img src="/images/lokesh.jpg" alt="" class="img-circle img-responsive" /></figure>
                    <br>
                    <h3 style="color:#fff !important;font-size: 16px;font-weight: 600;">Nara Lokesh</h3>
                        <div class="designation" style="color:#ababab !important;font-size: 12px;">Minister for IT  Panchayathi raj and Rural development <br> Andhra Pradesh</div>
                        <br>
                        <div class="text" style="color:#ababab !important">Technology is all about making people's life easy and it has been putting it's step forth to transform the state digitally in many ways. And in the coming days this will be greatly helpful in increasing the number of career opportunities for the students and professionals.</div>
                </div>
            </div>
            <div class="item">
                <div class="testimonial4_slide">
                    <figure class="thumb-box"><img src="/images/phani.jpg" alt="" class="img-circle img-responsive" /></figure>
                    <br>
                    <h3 style="color:#fff !important;font-size: 16px;font-weight: 600;">Phani Saran</h3>
                        <div class="designation" style="color:#ababab !important;font-size: 12px;">Student <br> NRI Institute of Technology</div>
                        <br>
                        <div class="text" style="color:#ababab !important">MeanHack, the firstever event where the battle on coding with innovative future technologies runs continously for about 24hrs</div>
                </div>
            </div>
            <div class="item">
                <div class="testimonial4_slide">
                    <figure class="thumb-box"><img src="/images/cheifminister1.png" alt="" class="img-circle img-responsive" /></figure>
                    <br>
                    <h3 style="color:#fff !important;font-size: 16px;font-weight: 600;">Chandra Babu Naidu</h3>
                        <div class="designation" style="color:#ababab !important;font-size: 12px;">Cheif Minister <br> Andhra Pradesh</div>
                        <br>
                        <div class="text" style="color:#ababab !important">Digital transformation and innovation is navigating the next generation revolutions by taking Visakhapatnam as a medium in Andhra Pradesh. It is also going to be one of the best IT hubs of India and will stand out to be the finest city.</div>
                </div>
            </div>
            <div class="item">
                <div class="testimonial4_slide">
                    <figure class="thumb-box"><img src="/images/speakers/plokam.jpg" alt="" class="img-circle img-responsive" /></figure>
                    <br>
                    <h3 style="color:#fff !important;font-size: 16px;font-weight: 600;">Prasad Lokam</h3>
                        <div class="designation" style="color:#ababab !important;font-size: 12px;">CEO  <br> Miracle Software Systems, Inc.</div>
                        <br>
                        <div class="text" style="color:#ababab !important">The main aim of Digital Summit is to transform the state digitally. This initiative will be helpful for the students and IT professionals to learn latest technologies, showcase their skills and gain career opportunities.</div>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#testimonial4" role="button" data-slide="prev">
            <span class="fa fa-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#testimonial4" role="button" data-slide="next">
            <span class="fa fa-chevron-right"></span>
        </a>
    </div>   ---->
                
            </div>
            
        </div>
    </section>
    <!--End Testimonial Section-->
    <!--About Section Two-->
    <section class="about-section-two">
    	<div class="auto-container">
        	<div class="row clearfix">
            	<!--Content Column-->
                <div class="content-column col-md-6 col-sm-12 col-xs-12">
                	<div class="inner">
                    	<div class="about-title">
                        	<div class="sub-title"></div>
                            <h2>AP Cloud Program</h2>
                        </div>
                        <div class="bold-text"></div>
                        <div class="text">The mission of AP Cloud is to create 100,000(1 lakh) Digital Transformation Professionals in Andhra Pradesh. Andhra Pradesh, The Sunrise State of India, is destined to become the world's preferred destination for companies looking for Digital Transformation Skills. The world is transforming digitally everyday at alarming pace, and this is driving organizations to digitize their business processes and models. Organizations that fail to continuously transform will become companies of the past and cease to exist.</div>
                        <a href="http://www.apcloud.in" target="_blank" class="theme-btn btn-style-one">learn more</a>
                    </div>
                </div>
                <!--Video Column-->
                <div class="video-column col-md-6 col-sm-12 col-xs-12">
                	<div class="video-box">
                       <!-- <figure class="image">
                            <img src="images/resource/video-img.jpg" alt="">
                        </figure>
                        <a href="https://www.youtube.com/watch?v=lyQgGy07aZw" class="lightbox-image overlay-box"><span class="flaticon-arrow"></span></a>-->
                 
                    <iframe width="100%" height="300px" src="https://www.youtube.com/embed/lyQgGy07aZw" frameborder="0" allowfullscreen style="margin-top:40px;"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End About Section Two-->
    <!--Subscribe section-->
   
    <!--<section class="subscribe-section">
    	<div class="auto-container">
        	<div class="row clearfix">
            	<div class="column col-md-7 col-md-12 col-xs-12">
        			<h2>Want to join the event ? <span>Subscribe today!</span></h2>
            		<div class="text">Subscribe to our newsletter to get news about our events and more!</div>
                </div>
                <div class="column col-md-5 col-md-12 col-xs-12">
                	
                    <div class="subscribe-form">
                        <form method="post" action="contact.html">
                            <div class="form-group">
                                <input type="email" name="email" value="" placeholder="Email" required>
                                <button type="submit" class="theme-btn">Subscribe</button>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </section> -->
       <section class="subscribe-section">
    	<div class="auto-container">
        	<div class="row clearfix">
            	<!--Column-->
            	<div class="column col-md-7 col-md-12 col-xs-12">
        			<h2>Want to be at Digital Summit '17 ? <br><span>REGISTER NOW!</span></h2>
            		<div class="text">Expert Speakers, Hackathons, Celebrations and more - this December :)</div>
                </div>
                <!--Column-->
                <div class="column col-md-5 col-md-12 col-xs-12">
                	
                    <!--Subscribe form-->
                    <div class="subscribe-form">
                        <form method="post" action="jobfair-registration.php">
                            <div class="form-group">
                            
                 <a href=""><button class="theme-btn btn-style-one" type="button" style="width:268px !important;height:60px !important;font-sixe:16px !important;left:170px;border-radius:0px !important" disabled >Registrations Closed</button></a>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    
    <!--End Subscribe section-->
    
   <!--Speaker Section-->
     <section class="speaker-section">
    	<div class="auto-container">
        	<!--Sec Title-->
            <div class="sec-title centered">
            	<h2>2017 Speakers</h2>
                
                <div class="text">Check out our 2017 speakers <br><strong>Digital Summit</strong></div>
            </div>
            <div class="four-item-carousel owl-carousel owl-theme">
                <!--Team Member Two-->
                   <div class="team-member-two">
                	<div class="inner-box">
                    	<div class="image">
                    	     <div class="speaker-image img-circle">
                                      <img class="image img-responsive" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/Satyendra.jpg"  alt="satyendra" />
                                     </div>
                            <div class="social-box">
                            	<ul class="social-icon-three">
                                	<h5 style="color:white!important;"> President, AIOUG</h5>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-info">
                        	<h3>Satyendra Kumar Pasalapudi</h3>
                            <div class="designation">AIOUG</div>
                        </div>
                    </div>
                </div>
                      <div class="team-member-two">
                	<div class="inner-box">
                    	<div class="image">
                    		 <div class="speaker-image img-circle">
                                      <img class="image img-responsive" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/PINGALI.jpg"  alt="pingali"  />
                                     </div>
                            <div class="social-box">
                            	<ul class="social-icon-three">
                                	<h5 style="color:white!important;">Vice - President</h5>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-info">
                        	<h3> Dr Gopal Pingali</h3>
                            <div class="designation">IBM </div>
                        </div>
                    </div>
                </div>
                       <div class="team-member-two">
                	<div class="inner-box">
                    	<div class="image">
                    	     <div class="speaker-image img-circle">
                                      <img class="image img-responsive" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/plokam.png" alt="prasad" />
                                     </div>
                   
                            <div class="social-box">
                            	<ul class="social-icon-three">
                                	<h5 style="color:white!important;"> CEO AND President</h5>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-info">
                        	<h3>Prasad Lokam</h3>
                            <div class="designation"> Miracle Software Systems,Inc.</div>
                        </div>
                    </div>
                </div>
                     <div class="team-member-two">
                	<div class="inner-box">
                    	<div class="image">
                    	    <div class="speaker-image img-circle" >
                                      <img class="image img-responsive" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/MP-Dubey.png" alt="Dubbey" />
                                     </div>
                  
                            <div class="social-box">
                            	<ul class="social-icon-three">
                                	<h5 style="color:white!important;">Joint Director</h5>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-info">
                        	<h3>MP Dubey</h3>
                            <div class="designation"> STPI</div>
                        </div>
                    </div>
                </div>
                     <div class="team-member-two">
                	<div class="inner-box">
                    	<div class="image">
                    	     <div class="speaker-image img-circle">
                                      <img class="image img-responsive" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/Dheeraj.jpg" alt="dheeraj" />
                                     </div>
                            <div class="social-box">
                            	<ul class="social-icon-three">
                                	<h5 style="color:white!important;">Co - Founder Startup Gurukul</h5>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-info">
                        	<h3>Dheeraj Kota</h3>
                            <div class="designation">Startup Gurukul</div>
                        </div>
                    </div>
                </div>
                        <div class="team-member-two">
                	<div class="inner-box">
                    	<div class="image">
                    		 <div class="speaker-image img-circle">
                                      <img class="image img-responsive" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/Pothu-venkata-dinesh.jpg"  alt="Pothu-venkata-dinesh"  />
                                     </div>
                            <div class="social-box">
                            	<ul class="social-icon-three">
                                	<h5 style="color:white!important;">Founder, CEO & Educator</h5>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-info">
                        	<h3>Pothu Venkata Dinesh</h3>
                            <div class="designation">Prakriya Academy </div>
                        </div>
                    </div>
                </div>
                   <div class="team-member-two">
                	<div class="inner-box">
                    	<div class="image">
                    		 <div class="speaker-image img-circle">
                                      <img class="image img-responsive" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/ujwal.jpg"  alt="ujwal"  />
                                     </div>
                            <div class="social-box">
                            	<ul class="social-icon-three">
                                	<h5 style="color:white!important;">President, InterviewBuddy</h5>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-info">
                        	<h3>Ujwal Surampalli</h3>
                            <div class="designation">InterviewBuddy </div>
                        </div>
                    </div>
                </div>
                     <div class="team-member-two">
                	<div class="inner-box">
                    	<div class="image">
                    	     <div class="speaker-image img-circle">
                                      <img class="image img-responsive"src="<?= AMAZON_URL ?>/ds17/images/speakerimages/Sunder-Muthevi.jpg" alt="sunder-muthevi" />
                                     </div>
                            <div class="social-box">
                            	<ul class="social-icon-three">
                                	<h5 style="color:white!important;"> Chief Technology Officer</h5>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-info">
                        	<h3>Sunder Muthevi</h3>
                            <div class="designation">Pi DATACENTERS</div>
                        </div>
                    </div>
                </div>
                
                  <div class="team-member-two">
                	<div class="inner-box">
                    	<div class="image">
                    	     <div class="speaker-image img-circle">
                                      <img class="image img-responsive"src="<?= AMAZON_URL ?>/ds17/images/speakerimages/Ravi.jpg" alt="ravi" />
                                     </div>
                            <div class="social-box">
                            	<ul class="social-icon-three">
                                	<h5 style="color:white!important;"> Director & Vice President</h5>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-info">
                        	<h3>Ravi Eswarapu</h3>
                            <div class="designation">ITAAP</div>
                        </div>
                    </div>
                </div>
                    <div class="team-member-two">
                	<div class="inner-box">
                    	<div class="image">
                    	     <div class="speaker-image img-circle">
                                      <img class="image img-responsive"src="<?= AMAZON_URL ?>/ds17/images/speakerimages/Uma_Maheswara_Rao.jpg" alt="uma maheswara rao" />
                                     </div>
                            <div class="social-box">
                            	<ul class="social-icon-three">
                                	<h5 style="color:white!important;"> Registrar</h5>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-info">
                        	<h3>V. Uma Maheswara Rao</h3>
                            <div class="designation">Andhra University</div>
                        </div>
                    </div>
                </div>
                 <div class="team-member-two">
                   <div class="inner-box">
                       <div class="image">
                            <div class="speaker-image img-circle">
                                     <img class="image img-responsive"src="<?= AMAZON_URL ?>/ds17/images/speakerimages/Subhasha.jpg"  alt="subhasha" />
                                    </div>
                           <div class="social-box">
                               <ul class="social-icon-three">
                                   <h5 style="color:white!important;"> Integration Architect</h5>
                               </ul>
                           </div>
                       </div>
                       <div class="lower-info">
                           <h3>Subhasha Ranjan</h3>
                           <div class="designation">NVIDIA Corporation
</div>
                       </div>
                   </div>
               </div>
                  <div class="team-member-two">
                	<div class="inner-box">
                    	<div class="image">
                    	     <div class="speaker-image img-circle">
                                      <img class="image img-responsive"src="<?= AMAZON_URL ?>/ds17/images/speakerimages/avadani.png" alt="avadani" />
                                     </div>
                            <div class="social-box">
                            	<ul class="social-icon-three">
                                	<h5 style="color:white!important;">Principal & Professor</h5>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-info">
                        	<h3>Dr. P.S.Avadhani </h3>
                            <div class="designation">Andhra University College of Engineering</div>
                        </div>
                    </div>
                </div>
                 <div class="team-member-two">
                	<div class="inner-box">
                    	<div class="image">
                    	     <div class="speaker-image img-circle">
                                      <img class="image img-responsive"src="<?= AMAZON_URL ?>/ds17/images/speakerimages/Krishna-Babu.jpg" alt="krishna" />
                                     </div>
                            <div class="social-box">
                            	<ul class="social-icon-three">
                                	<h5 style="color:white!important;">IAS - Chairman</h5>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-info">
                        	<h3>M.T.Krishna Babu </h3>
                            <div class="designation">Visakhapatnam Port Trust (VPT)</div>
                        </div>
                    </div>
                </div>
                  <div class="team-member-two">
                	<div class="inner-box">
                    	<div class="image">
                    	     <div class="speaker-image img-circle">
                                      <img class="image img-responsive"src="<?= AMAZON_URL ?>/ds17/images/speakerimages/G-Nageswara.jpg" alt="nageswara rao" />
                                     </div>
                            <div class="social-box">
                            	<ul class="social-icon-three">
                                	<h5 style="color:white!important;">Vice Chancellor</h5>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-info">
                        	<h3>G.Nageswara Rao </h3>
                            <div class="designation">Andhra University</div>
                        </div>
                    </div>
                </div>
                 <div class="team-member-two">
                	<div class="inner-box">
                    	<div class="image">
                    	     <div class="speaker-image img-circle">
                                      <img class="image img-responsive"src="<?= AMAZON_URL ?>/ds17/images/speakerimages/Ganta-Srinivas.jpg" alt="ganta srinivas" />
                                     </div>
                            <div class="social-box">
                            	<ul class="social-icon-three">
                                	<h5 style="color:white!important;">Honorable Minister</h5>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-info">
                        	<h3>Ganta Srinivasa Rao </h3>
                            <div class="designation">Human Resource Development</div>
                        </div>
                    </div>
                </div>
                 <div class="team-member-two">
                	<div class="inner-box">
                    	<div class="image">
                    	     <div class="speaker-image img-circle">
                                      <img class="image img-responsive"src="<?= AMAZON_URL ?>/ds17/images/speakerimages/Pravin-Kumar-ias.jpg" alt="ganta srinivas" />
                                     </div>
                            <div class="social-box">
                            	<ul class="social-icon-three">
                                	<h5 style="color:white!important;">IAS - District Collector</h5>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-info">
                        	<h3>Pravin Kumar</h3>
                            <div class="designation">Visakhapatnam</div>
                        </div>
                    </div>
                </div>
                <div class="team-member-two">
                	<div class="inner-box">
                    	<div class="image">
                    	     <div class="speaker-image img-circle">
                                      <img class="image img-responsive"src="<?= AMAZON_URL ?>/ds17/images/speakerimages/userimage3.jpg" alt="subba rao" />
                                     </div>
                            <div class="social-box">
                            	<ul class="social-icon-three">
                                	<h5 style="color:white!important;">Executive Director</h5>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-info">
                        	<h3>Subba Rao</h3>
                            <div class="designation">APIIC</div>
                        </div>
                    </div>
                </div>
                 <div class="team-member-two">
                	<div class="inner-box">
                    	<div class="image">
                    	     <div class="speaker-image img-circle">
                                      <img class="image img-responsive"src="<?= AMAZON_URL ?>/ds17/images/speakerimages/TirumalaraoChalla.jpg" alt="tirumala rao" />
                                     </div>
                            <div class="social-box">
                            	<ul class="social-icon-three">
                                	<h5 style="color:white!important;">Cheif Executive Officer</h5>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-info">
                        	<h3>Tirumala Rao</h3>
                            <div class="designation">APEITA</div>
                        </div>
                    </div>
                </div>
                <div class="team-member-two">
                	<div class="inner-box">
                    	<div class="image">
                    	     <div class="speaker-image img-circle">
                                      <img class="image img-responsive"src="<?= AMAZON_URL ?>/ds17/images/speakerimages/Abhi.jpg" alt="abhi" />
                                     </div>
                            <div class="social-box">
                            	<ul class="social-icon-three">
                                	<h5 style="color:white!important;">Program Director</h5>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-info">
                        	<h3>Abhi Deshmukh</h3>
                            <div class="designation">Watson Talent, IBM</div>
                        </div>
                    </div>
                </div>
                
               
                        <div class="team-member-two">
                	<div class="inner-box">
                    	<div class="image">
                    	     <div class="speaker-image img-circle">
                                      <img class="image img-responsive"src="<?= AMAZON_URL ?>/ds17/images/speakerimages/yuktesh.jpg" alt="yuktesh" />
                                     </div>
                            <div class="social-box">
                            	<ul class="social-icon-three">
                                	<h5 style="color:white!important;"> Developer Advocate</h5>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-info">
                        	<h3>Yuktesh Chintamadaka</h3>
                            <div class="designation">IBM</div>
                        </div>
                    </div>
                </div>
                <div class="team-member-two">
                   <div class="inner-box">
                       <div class="image">
                            <div class="speaker-image img-circle">
                                     <img class="image img-responsive"src="<?= AMAZON_URL ?>/ds17/images/speakerimages/sudheer.jpg" alt="sudheer" />
                                    </div>
                           <div class="social-box">
                               <ul class="social-icon-three">
                                   <h5 style="color:white!important;"> VP - Product Management</h5>
                               </ul>
                           </div>
                       </div>
                       <div class="lower-info">
                           <h3>Sudheer Polavarapu </h3>
                           <div class="designation">Fluentgrid </div>
                       </div>
                   </div>
               </div>
                    <div class="team-member-two">
                	<div class="inner-box">
                    	<div class="image">
                    	     <div class="speaker-image img-circle">
                                      <img class="image img-responsive" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/Raj_Chilakapati.png"  alt="rajanikanth" />
                                     </div>
                            <div class="social-box">
                            	<ul class="social-icon-three">
                                	<h5 style="color:white!important;"> Sr. Solution Architect</h5>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-info">
                        	<h3>Rajanikanth Chilakapati</h3>
                            <div class="designation">Amazon Web Services</div>
                        </div>
                    </div>
                </div>
                <div class="team-member-two">
                	<div class="inner-box">
                    	<div class="image">
                    	     <div class="speaker-image img-circle">
                                      <img class="image img-responsive" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/Krishnachytanya.png"  alt="Krishnachytanya" />
                                     </div>
                            <div class="social-box">
                            	<ul class="social-icon-three">
                                	<h5 style="color:white!important;">Technical Program Manager</h5>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-info">
                        	<h3>Krishnachytanya Ayyagari</h3>
                            <div class="designation">Google</div>
                        </div>
                    </div>
                </div>
                <!--Travel Block-->
                 <div class="team-member-two">
                	<div class="inner-box">
                    	<div class="image">
                    	     <div class="speaker-image img-circle" >
                                      <img class="image img-responsive" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/Mayur-Tendulkar.jpg"  alt="mayur" />
                                     </div>
                            <div class="social-box">
                            	<ul class="social-icon-three">
                                	<h5 style="color:white!important;"> Program Manager</h5>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-info">
                        	<h3>Mayur Tendulkar</h3>
                            <div class="designation">Microsoft</div>
                        </div>
                    </div>
                </div>
                 <div class="team-member-two">
                	<div class="inner-box">
                    	<div class="image">
                    		 <div class="speaker-image img-circle">
                                      <img class="image img-responsive" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/sudarshan.jpg"  alt="sudarshan"  />
                                     </div>
                            <div class="social-box">
                            	<ul class="social-icon-three">
                                	<h5 style="color:white!important;">Developer Advocate - IBM</h5>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-info">
                        	<h3>Sudharshan Govindan</h3>
                            <div class="designation">IBM </div>
                        </div>
                    </div>
                </div>
                 <div class="team-member-two">
                	<div class="inner-box">
                    	<div class="image">
                    	     <div class="speaker-image img-circle">
                                      <img class="image img-responsive" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/Kunal-Chowdhury.jpg"  alt="kunal" />
                                     </div>
                            <div class="social-box">
                            	<ul class="social-icon-three">
                                	<h5 style="color:white!important;">Microsoft MVP</h5>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-info">
                        	<h3> Kunal Chowdhury</h3>
                            <div class="designation">Microsoft MVP</div>
                        </div>
                    </div>
                </div>
                     <div class="team-member-two">
                	<div class="inner-box">
                    	<div class="image">
                    	     <div class="speaker-image img-circle">
                                      <img class="image img-responsive"src="<?= AMAZON_URL ?>/ds17/images/speakerimages/Venkata-Nagesh.jpg" alt="nagesh" />
                                     </div>
                            <div class="social-box">
                            	<ul class="social-icon-three">
                                	<h5 style="color:white!important;"> Principal Architect </h5>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-info">
                        	<h3>Venkata Nagesh</h3>
                            <div class="designation">Pi DATACENTERS</div>
                        </div>
                    </div>
                </div>
                     <div class="team-member-two">
                	<div class="inner-box">
                    	<div class="image">
                    	     <div class="speaker-image img-circle" >
                                      <img class="image img-responsive" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/chanakya.png" alt="chankaya" />
                                     </div>
                  
                            <div class="social-box">
                            	<ul class="social-icon-three">
                                	<h5 style="color:white!important;"> Director - Innovation Labs</h5>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-info">
                        	<h3>Chanakya Lokam</h3>
                            <div class="designation">Miracle Software Systems,Inc.</div>
                        </div>
                    </div>
                </div>
                      
                        <div class="team-member-two">
                	<div class="inner-box">
                    	<div class="image">
                    	     <div class="speaker-image img-circle">
                                      <img class="image img-responsive"src="<?= AMAZON_URL ?>/ds17/images/speakerimages/surya.jpg"  alt="surya" />
                                     </div>
                            <div class="social-box">
                            	<ul class="social-icon-three">
                                	<h5 style="color:white!important;">Student</h5>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-info">
                        	<h3>Surya Viswanath Perala</h3>
                            <div class="designation">Vignan Engineering College</div>
                        </div>
                    </div>
                </div>
                <div class="team-member-two">
                	<div class="inner-box">
                    	<div class="image">
                    	     <div class="speaker-image img-circle" >
                                      <img class="image img-responsive" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/Srikanth.jpg"   alt="srikanth" />
                                     </div>
                            <div class="social-box">
                            	<ul class="social-icon-three">
                                	<h5 style="color:white!important;">CS Student </h5>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-info">
                        	<h3>Srikanth Doddi</h3>
                            <div class="designation">Sri Vasavi Engineering College</div>
                        </div>
                    </div>
                
                       </div>
                 <div class="team-member-two">
                	<div class="inner-box">
                    	<div class="image">
                    		 <div class="speaker-image img-circle">
                                      <img class="image img-responsive"src="<?= AMAZON_URL ?>/ds17/images/speakers/aditya.png"  alt="aditya" />
                                     </div>
                            <div class="social-box">
                            	<ul class="social-icon-three">
                                	<h5 style="color:white!important;">Manager of Innovation</h5>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-info">
                        	<h3>  Aditya Chinni</h3>
                            <div class="designation">Miracle Software Systems,Inc. </div>
                        </div>
                    </div>
                </div>
                 <div class="team-member-two">
                	<div class="inner-box">
                    	<div class="image">
                    	 <div class="speaker-image img-circle" >
                                      <img class="image img-responsive"  src="<?= AMAZON_URL ?>/ds17/images/speakerimages/mc.png" alt="mounika" />
                                     </div>
                    	
                            <div class="social-box">
                            	<ul class="social-icon-three">
                                	<h5 style="color:white!important;">Lead Researcher - Cognitive and Data</h5>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-info">
                        	<h3>Mounika Chirukuri</h3>
                            <div class="designation">Miracle's Innovation Labs</div>
                        </div>
                    </div>
               </div>
           <div class="team-member-two">
                	<div class="inner-box">
                    	<div class="image">
                    	    <div class="speaker-image img-circle" >
                                      <img class="image img-responsive" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/korakuti.jpg" alt="mounika-korakuti" />
                                     </div>
                  
                            <div class="social-box">
                            	<ul class="social-icon-three">
                                	<h5 style="color:white!important;"> Lead Researcher - Cloud and DevOps</h5>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-info">
                        	<h3>Mounika Korrakuti</h3>
                            <div class="designation">Miracle's Innovation Labs</div>
                        </div>
                    </div>
                </div>
               
                 <div class="team-member-two">
                	<div class="inner-box">
                    	<div class="image">
                    	    <div class="speaker-image img-circle" >
                                      <img class="image img-responsive" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/ud2.png" alt="udaya" />
                                     </div>
                      
                            <div class="social-box">
                            	<ul class="social-icon-three">
                                	<h5 style="color:white!important;">Lead Researcher - Cognitive</h5>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-info">
                        	<h3> Udaya Nandipati</h3>
                            <div class="designation">Miracle's Innovation Labs</div>
                        </div>
                    </div>
                </div>
               
          <div class="team-member-two">
                	<div class="inner-box">
                    	<div class="image">
                    	    <div class="speaker-image img-circle">
                                      <img class="image img-responsive" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/Ajay.png" alt="ajay" />
                                     </div>
                    
                            <div class="social-box">
                            	<ul class="social-icon-three">
                                	<h5 style="color:white!important;"> Lead Researcher - Mobility</h5>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-info">
                        	<h3>Ajay Alubelli</h3>
                            <div class="designation">Miracle's Innovation Labs</div>
                        </div>
                    </div>
                </div>
                  <div class="team-member-two">
                	<div class="inner-box">
                    	<div class="image">
                    	     <div class="speaker-image img-circle" >
                                      <img class="image img-responsive" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/Archit-Gupta.png"  alt="archit" />
                                     </div>
                            <div class="social-box">
                            	<ul class="social-icon-three">
                                	<h5 style="color:white!important;">Sr. Researcher - Cognitive</h5>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-info">
                        	<h3> Archit Gupta</h3>
                            <div class="designation">Miracle's Innovation Labs</div>
                        </div>
                    </div>
                </div>

                    <div class="team-member-two">
                	<div class="inner-box">
                    	<div class="image">
                    	 <div class="speaker-image img-circle" >
                                      <img class="image img-responsive" src="<?= AMAZON_URL ?>/ds17/images/speakerimages/usha.png" alt="usha" />
                                     </div>
                    	
                            <div class="social-box">
                            	<ul class="social-icon-three">
                                	<h5 style="color:white!important;">Sr. Researcher - Cloud</h5>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-info">
                        	<h3> Usha Kiranmai Ganugula</h3>
                            <div class="designation">Miracle's Innovation Labs</div>
                        </div>
                    </div>
                </div>
               
              <!--    <div class="team-member-two">
                	<div class="inner-box">
                    	<div class="image">
                    	     <div class="speaker-image img-circle">
                                      <img class="image img-responsive"src="/images/speakerimages/pavani.jpg"  alt="pavani" />
                                     </div>
                            <div class="social-box">
                            	<ul class="social-icon-three">
                                	<h5 style="color:white!important;"> Sr. Researcher - MEAN</h5>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-info">
                        	<h3>Pavani Gedela</h3>
                            <div class="designation">Miracle's Innovation Labs</div>
                        </div>
                    </div>
                </div>-->
            </div>
                
                
            </div>
        </div>
    </section>
    </section>
    <!--End Speaker Section-->
    
    <!--Schedule Section-->
    <section class="schedule-section" style="background-image:url(<?= AMAZON_URL ?>/ds17/images/background/3.jpg);">
    	<div class="auto-container">
        	<!--Sec Title-->
            <div class="sec-title sec-title1 light centered" >
            	<h2 >About DS '17</h2>
              
               
            </div>
        <div class="row clearfix">
            	
                <!--News Style One-->
                <div class="news-style-one col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box" style="background-color:#e4e4e4;">
                    	<div class="image">
                        	<img src="<?= AMAZON_URL ?>/ds17/images/index-gallery.png" alt="" />
                        </div>
                        <div class="lower-box" style="text-align:center;">
                        	<h3><font color="black">Gallery</font></h3>
                            <div class="text"><font color="black">We learnt, played and partied last year - check it out</font></div>                          
                            <a href="gallery.php"  class="theme-btn btn-style-one" style="padding:5px 20px">Explore</a>
                        </div>
                    </div>
                </div>
                
                <!--News Style One-->
                 <div class="news-style-one col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box" style="background-color:#e4e4e4;">
                    	<div class="image">
                        	<img src="<?= AMAZON_URL ?>/ds17/images/AP-cloud.png" alt="" />
                        </div>
                        <div class="lower-box" style="text-align:center;">
                        	<h3><font color="black">AP Cloud</font></h3>
                            
                            <div class="text"><font color="black">100,000 Digital Professionals are on their way for  2020</font></div>                          
                            <a href="http://www.apcloud.in/ac/" class="theme-btn btn-style-one" style="padding:5px 20px"> Learn More</a>
                        </div>
                    </div>
                </div>
                <!--News Style One-->
                <div class="news-style-one col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box" style="background-color:#e4e4e4;">
                    	<div class="image">
                        <img src="<?= AMAZON_URL ?>/ds17/images/about-vizag.png" alt="" />
                        </div>
                        <div class="lower-box"  style="text-align:center;">
                        	<h3><font color="black">Venue</font></h3>
                            <div class="text"><font color="black">The City of Destiny, Visakhapatnam, is waiting for you</font></div>                          
                            <a href="venue.php" class="theme-btn btn-style-one" style="padding:5px 20px">Visit Us</a>
                        </div>
                    </div>
                </div>
                
                <!--News Style One-->
               
                
            </div>
        </div>
    </section>
    <!--End Schedule Section-->
    
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
                     
                     <div class="column col-md-4 col-sm-6 col-xs-12">
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
                    
                    <div class="column col-md-6 col-sm-6 col-xs-12" style="margin-left: -78px;">
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
            </div> </div>
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
     
    
    <!--Main Footer-->
   <?php include 'ds17Footer.php'; ?>
    <!--End Main Footer-->
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="icon fa fa-long-arrow-up"></span></div>

 

<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/revolution.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/appear.js"></script>
<script src="js/jquery.countdown.js?ver=1.0"></script>
<script src="js/script.js"></script>



<script>
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.10&appId=245343465504693";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</script>
<style>
   
</style>
</body>
</html>

