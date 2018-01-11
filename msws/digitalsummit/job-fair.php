<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Digital Summit | Job fair</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
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
<style>
 ul, li {
   list-style: inherit;

}

.sticky-header .main-menu .navigation > li > a{
    padding:19px 15px !important;
}
blockquote:before {
  
    content: '\f147' !important;
    left: 0px !important;
    top: 30px !important;
    color: #d43058 !important;
    font-style: normal !important;
    font-size: 26px !important;
    font-family: "Flaticon" !important;
}

   .news-style-one  blockquote {
    position: relative;
    border-top: 1px solid #ececec;
    border-left: 0px solid #eee !important; 
    padding-top: 60px;
    border-left: 0px;
    margin-top: 40px;
    padding-left: 45px;
    color: #222222;
    font-size: 15px;
    font-weight: 500;
    font-style: italic;
    line-height: 1.8em;
}

.student-bg{
         background-color:#232527;
         padding:22px 11px;
         margin-top:0px;
         color:#ffffff !important;
         }

   .news-style-one {
    margin-bottom: -30px;
}  
.soco-facebook:hover{
  color: #3b5998 !important;
}
.soco-twitter:hover{
  color:#00aced !important;
}
.soco-linkedin:hover{
  color: #0077B5 !important;
}
.soco-youtube:hover{
  color: #c4302b !important;

}
.soco-flickr:hover{
  color: #0063dc !important;

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
    .google-maps {
        position: relative;
        padding-bottom: 15%; 
        height: 0;
        overflow: hidden;
        bottom:0px;
    }
    .google-maps iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100% !important;
        height: 200px !important;
    }
    .myImages{
        height: 100px;
        vertical-align:middle;
       }
    .lists{
               padding: 1.42857rem !important;
                margin-bottom:25px !important;
                box-shadow: 0 0 20px #ccc;
                zoom: 1;
                overflow: hidden;
    }
    .anchorss{
            margin-bottom: -17px!important;
             color: #555 !important;
             font-weight: 600;
             transition: all .2s;
             text-decoration: none !important;
             outline: none;
             background-color: transparent;
             font-family: Lato,sans-serif ;
             font-size:13px;
      }
     .anchorss:hover{
        color:#D33257 !important;
      }
    .span1{
            margin-right: 1.07143rem !important;
            color: #777 !important;
            font-size: 13px !important;
            font-weight: 600;
       }
    .span2{
          margin-left: -9px !important;
            color: #777 !important;
            font-size: 13px !important;
    }
       .mybutton{
            border: 1px solid #2368a0;
            font-weight: 600;
            font-size: 14px !important;
            color: #2368a0;
            border-color: #2368a0;
            background-color: transparent;
            line-height: 1.4;
            padding: 0.92857rem 1.85714rem;
            position: relative;
            transition: .2s ease;
            cursor: pointer;
        }
    .mybutton:hover{
        background-color:#2368a0;
        color:white;
          }
          .media {
            margin-top:0px!important;
          }
          ul, li {
    list-style-position: initial !important;
          }
.joblist{
  color:#ffffff;padding-left:15px;text-align:justify;
}    
.sec-title h4 {
    position: relative;
    color: #222222;
  font-size: 23px;
    font-weight: 600;
    z-index: 10;
    padding-bottom: 20px;
    margin-top:15px;
    text-transform: capitalize;
    font-family: 'Poppins', sans-serif;
}
</style>
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


.sticky-header .main-menu .navigation > li > a{
    padding:19px 15px !important;
}
blockquote:before {
  
    content: '\f147' !important;
    left: 0px !important;
    top: 30px !important;
    color: #d43058 !important;
    font-style: normal !important;
    font-size: 26px !important;
    font-family: "Flaticon" !important;
}

   .news-style-one  blockquote {
    position: relative;
    border-top: 1px solid #ececec;
    border-left: 0px solid #eee !important; 
    padding-top: 60px;
    border-left: 0px;
    margin-top: 40px;
    padding-left: 45px;
    color: #222222;
    font-size: 15px;
    font-weight: 500;
    font-style: italic;
    line-height: 1.8em;
}

.student-bg{
         background-color:#232527;
         padding:22px 11px;
         margin-top:0px;
         color:#ffffff !important;
         }

   .news-style-one {
    margin-bottom: -30px;
}  
.soco-facebook:hover{
  color: #3b5998 !important;
}
.soco-twitter:hover{
  color:#00aced !important;
}
.soco-linkedin:hover{
  color: #0077B5 !important;
}
.soco-youtube:hover{
  color: #c4302b !important;

}
.soco-flickr:hover{
  color: #0063dc !important;

}
.google-maps {
        position: relative;
       padding-bottom: 17%;
        height: 0;
        overflow: hidden;
        bottom:0px;
    }
    .google-maps iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100% !important;
        height: 200px !important;
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
    <section class="page-title" style="background-image:url(<?= AMAZON_URL ?>/ds17/images/header-images/jobs.jpg);margin-top:-114px!important;background-position:0% 72%;padding-bottom:15px;">
    	<div class="auto-container">
        	<div class="inner-box">
                <h1>Job Fair</h1>
                <ul class="bread-crumb">
                	<li><a href="event.html">Events</a></li>
                    <li>Job Fair</li>
                </ul>
            </div>
        </div>
    </section>
    
    <!--Sidebar Page Container-->
    <div class="sidebar-page-container">
    	<div class="auto-container" style="margin-bottom: -130px;margin-top: -110px;">
        	<div class="row clearfix">
            	
                <!--Content Side-->
                <div class="content-side col-lg-12">
                	<!--Blog Single-->
                	<div class="blog-single">
						
                        <!--News Style One-->
                        <div class="news-style-one">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="<?= AMAZON_URL ?>/ds17/images/resource/news-4.jpg" alt="" />
                                </div>
                                <div class="lower-box">
                                    
                                    <div class="sec-title centered">
            	<h2>December 16th - 17th, 2017 - Miracle Valley (Vizag)</h2>
                                    
                                    
                                    </div>
                                    
                                    <div class="text">
                                    	<p>For a student - if learning future technologies is the primary goal, then getting a job in a reputed company is the ultimate goal. At Digital Summit's Job Fair you will find numerous career opportunities that will allow you to understand your potential and get settled in your IT journey.</p>
                                        <p>Last year we hosted nearly 5000 candidates and this year we hope to have even more of you join us. From experienced individuals looking to come back to Vizag, to budding young talent looking to start their IT journey - the right jobs are looking forward for you in Vizag! Miracle will be hosting one of the largest job fair of the year right here in Vizag.
                                <div class="btns-box text-center" style="margin-bottom: -36px !important;">
            	<a style="color:#fff !important" href="#" target=''><button class="theme-btn btn-style-one" type="button" disabled="disabled">Registrations  - Closed</button></a>
              
            </div><br><br>
                                 </div>   
                    </div> 
            	
               </div>
               
                                        <!--Two Column-->
                                        <div class="two-column row clearfix">
                                        	<!--Image Column-->
                                        	<div class="lower-box sec-title centered">
                                             	<h2>Why to attend</h2>
                                                </div>
                                        	
                                            <!--Content Column-->
                                            
                                            <div class="content-column col-md-12 col-sm-3 col-xs-12">
                                            
                                            <div class="col-md-3">
                                               <center><img src="<?= AMAZON_URL ?>/ds17/images/job-icons/mnc.svg" style="height: 62px;margin-bottom: 11px;" class="img-responsive" alt="image">
                                                <h5><strong>Many Opportunities - One Location</strong></h5>
                                                <h6>Get access to multiple job opportunities in one location</h6></center>
                                            </div>
                                          
                                            <div class="col-md-3">
                                                <center><img src="<?= AMAZON_URL ?>/ds17/images/job-icons/no-fees.svg" style="height: 62px;margin-bottom: 11px;" class="img-responsive" alt="image">
                                                <h5><strong>No Hassle - No Fees</strong></h5>
                                                <h6>You don't have to pay anything - we just want you hired</h6></center>
                                            </div>
                                           
                                            <div class="col-md-3">
                                               <center> <img src="<?= AMAZON_URL ?>/ds17/images/job-icons/talent.svg" style="height: 62px;margin-bottom: 11px;" class="img-responsive" alt="image">
                                                <h5><strong>Talent Exposure</strong></h5>
                                                <h6>A great chance to showcase your potential to get hired</h6></center>
                                            </div>
                                              
                                               <div class="col-md-3">
                                                <center><img src="<?= AMAZON_URL ?>/ds17/images/job-icons/career.svg" style="height: 62px;margin-bottom: 11px;" class="img-responsive" alt="image">
                                                <h5><strong>Career Path Selection</strong></h5>
                                                <h6>Meet with experts and define your future endeavors</h6></center>
                                            </div>
                                            </div>
                                           
                                           
                                        </div>
                                        <br><br>
              
                    </div>
                    </div></div>
                    </div></div> </div>
                    
                <section class="subscribe-section">
    	<div class="auto-container">
        	<div class="row clearfix">
            	<!--Column-->
            	<div class="column col-md-7 col-md-12 col-xs-12">
        			<h2>DO YOU WANT TO ATTEND ? <span>REGISTER NOW!</span></h2>
            		<div class="text">The right jobs are looking forward for you in Vizag</div>
                </div>
                <!--Column-->
                <div class="column col-md-5 col-md-12 col-xs-12">
                    <!--Subscribe form-->
                    <div class="subscribe-form">
                        <form method="post" action="#">
                            <div class="form-group">
                  <button type="submit" class="theme-btn" style="width:215px !important;height:60px !important;font-sixe:16px !important;left:170px;border-radius:0px !important" disabled>Registrations Closed</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>      
                     
           <!--modal start  -->
           
                   
             
            	<div class="row clearfix">
            	
                <!--Content Side-->
                <div class="content-side col-lg-12">
                	<!--Blog Single-->
                	<div class="blog-single">
						
                        <!--News Style One-->
                        <div class="news-style-one">
                               
                
                <section class="sponsors-section">
   
               <div class="sponsors-box">
             
            </div>
          
            	<br>
            	
            		<div class="container">
            	 <div class="lower-box sec-title centered">
            	<h2>Interview Process</h2>
            	<br>	<br>
            	<div class="row">
            	  <div class="col-sm-12">
            	  <div class="col-sm-3">
            	    <center><img class="img-responsive" src="<?= AMAZON_URL ?>/ds17/images/job-icons/Written-test.svg" alt="written" style="height: 85px;">
            	    <h4>Written Test</h4></center>
            	  </div>
            	  	  <div class="col-sm-3">
            	  	       <center><img class="img-responsive" src="<?= AMAZON_URL ?>/ds17/images/job-icons/Technical-round.svg" alt="techincal" style="height: 85px;">
            	  	        <h4>Technical Round</h4></center>
            	  	  </div>
            	  	  	  <div class="col-sm-3">
            	  	  	       <center><img class="img-responsive" src="<?= AMAZON_URL ?>/ds17/images/job-icons/HR-Round.svg" alt="hr" style="height: 85px;">
            	  	  	     <h4>HR Round</h4></center>
            	  	  	  </div>
            	  	  	   <div class="col-sm-3">
            	  	  	       <center><img class="img-responsive" src="<?= AMAZON_URL ?>/ds17/images/job-icons/final-round.svg" alt="final" style="height: 85px;">
            	  	  	     <h4>Final Round</h4></center>
            	  	  	  </div>
            	</div>
            	</div>
                     </div></div>
            	
            	
            	<div class="container">
            	 <div class="lower-box sec-title centered">
            	<h2>Open Positions</h2>
                     </div></div>
            	   <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <ul class="list-unstyled">
               <a> <li class="col-lg-12 lists media"  data-toggle="modal" data-target="#jobModal1" >
                  <div class="col-lg-3">
                    <img class="myImages" src="<?= AMAZON_URL ?>/ds17/images/job-icons/software-engineer.svg" alt="software">
                  </div>
                  <div class="col-lg-9">
                    <h4 class="anchorss">Software Trainees</h4>
                    <span class="span1">
                  <br>    <i class="icon-location-pin g-pos-rel g-top-1 mr-1"></i> Eligibility |
                    </span>
                    <span class="span2">
                 B.Tech (CSE/IT/ECE), MCA - 65% marks of 2016/2017/2018 Passouts 
                    </span>
                  </div>
                </li> </a>
               <a> <li class="col-lg-12 lists media" data-toggle="modal" data-target="#jobModal2">
                  <div class="col-lg-3">
                    <img class="myImages" src="<?= AMAZON_URL ?>/ds17/images/job-icons/US-IT-recruiter.svg " alt="QA trainee">
                  </div>
                  <div class="col-lg-9">
                    <h4 class="anchorss">QA Trainee </h4>
                    <span class="span1">
                  <br>    <i class="icon-location-pin g-pos-rel g-top-1 mr-1"></i> Eligibility |
                    </span>
                    <span class="span2">
              B.Tech, MCA - 65% marks of 2016/2017 Passouts
                    </span>
                  </div>
                </li> </a>
                 <a> <li class="col-lg-12 lists media" data-toggle="modal" data-target="#jobModal3">
                  <div class="col-lg-3">
                    <img class="myImages" src="<?= AMAZON_URL ?>/ds17/images/job-icons/devops-engineer.svg" alt="network engineer">
                  </div>
                  <div class="col-lg-9">
                     <h4 class="anchorss">Network Engineer</h4>
                    <span class="span1">
                  <br>    <i class="icon-location-pin g-pos-rel g-top-1 mr-1"></i> Eligibility |
                    </span>
                    <span class="span2">
                B.Tech (CSE/IT), MCA - 65% marks of 2016/2017 Passouts
                    </span>
                  </div>
                </li> </a>
                <a> <li class="col-lg-12 lists media" data-toggle="modal" data-target="#jobModal4">
                  <div class="col-lg-3">
                    <img class="myImages" src="<?= AMAZON_URL ?>/ds17/images/job-icons/SAP-PP-PM.svg" alt="SAP SD/LO Trainee">
                  </div>
                  <div class="col-lg-9">
                     <h4 class="anchorss">SAP SD/LO Trainee</h4>
                    <span class="span1">
                  <br>    <i class="icon-location-pin g-pos-rel g-top-1 mr-1"></i> Eligibility |
                    </span>
                    <span class="span2">
             Any B.Tech, MCA,MBA - 65% marks of 2016/2017 Passouts
                    </span>
                  </div>
                </li> </a>
              </ul>
            </div>
            
            <div class="col-lg-4 g-mb-40 ">
              <ul class="list-unstyled mb-0">
                <a> <li class="col-lg-12 lists media" data-toggle="modal" data-target="#jobModal5">
                  <div class="col-lg-3">
                    <img class="myImages" src="<?= AMAZON_URL ?>/ds17/images/job-icons/cloud-engineer.svg" alt=" SAP MM/WM Trainee">
                  </div>
                  <div class="col-lg-9">
                      <h4 class="anchorss"> SAP MM/WM Trainee</h4>
                    <span class="span1">
                  <br>    <i class="icon-location-pin g-pos-rel g-top-1 mr-1"></i> Eligibility |
                    </span>
                    <span class="span2">
              Any B.Tech, MCA,MBA - 65% marks of 2016/2017 Passouts
                    </span>
                  </div>
                </li> </a>
                 <a> <li class="col-lg-12 lists media" data-toggle="modal" data-target="#jobModal6">
                  <div class="col-lg-3">
                    <img class="myImages" src="<?= AMAZON_URL ?>/ds17/images/job-icons/SAP-PP-PM.svg" alt="SAP PP/PM Trainee">
                  </div>
                  <div class="col-lg-9">
                    <h4 class="anchorss">SAP PP/PM Trainee</h4>
                    <span class="span1">
                  <br>    <i class="icon-location-pin g-pos-rel g-top-1 mr-1"></i> Eligibility |
                    </span>
                    <span class="span2">
              Any B.Tech, MCA - 65% marks of 2016/2017 Passouts
                    </span>
                  </div>
                </li> </a>
                <a> <li class="col-lg-12 lists media" data-toggle="modal" data-target="#jobModal7">
                  <div class="col-lg-3">
                    <img class="myImages" src="<?= AMAZON_URL ?>/ds17/images/job-icons/SAP-FICO.svg" alt="SAP FICO Trainee">
                  </div>
                  <div class="col-lg-9">
                    <h4 class="anchorss">SAP FICO Trainee</h4>
                    <span class="span1">
                  <br>    <i class="icon-location-pin g-pos-rel g-top-1 mr-1"></i> Eligibility |
                    </span>
                    <span class="span2">
             Any B.Tech, MCA,MBA - 65% marks of 2016/2017 Passouts
                    </span>
                  </div>
                </li> </a>
                <a> <li class="col-lg-12 lists media" data-toggle="modal" data-target="#jobModal8">
                  <div class="col-lg-3">
                    <img class="myImages" src="<?= AMAZON_URL ?>/ds17/images/job-icons/sap-trainne.svg" alt="SAP BI Trainee">
                  </div>
                  <div class="col-lg-9">
                    <h4 class="anchorss">SAP BI Trainee</h4>
                    <span class="span1">
                  <br>    <i class="icon-location-pin g-pos-rel g-top-1 mr-1"></i> Eligibility |
                    </span>
                    <span class="span2">
             Any B.Tech, MCA - 65% marks of 2016/2017 Passouts
                    </span>
                  </div>
                </li> </a>
              </ul>
            </div>
            <div class="col-lg-4">
              <ul class="list-unstyled mb-0">
                 <a><li class="col-lg-12 lists media" data-toggle="modal" data-target="#jobModal9">
                  <div class="col-lg-3">
                    <img class="myImages" src="<?= AMAZON_URL ?>/ds17/images/job-icons/sap-trainne.svg" alt="SAP BO Trainee">
                  </div>
                  <div class="col-lg-9">
                     <h4 class="anchorss">SAP BO Trainee</h4>
                    <span class="span1">
                  <br>    <i class="icon-location-pin g-pos-rel g-top-1 mr-1"></i> Eligibility |
                    </span>
                    <span class="span2">
               Any B.Tech, MCA - 65% marks of 2016/2017 Passouts
                    </span>
                  </div>
                </li> </a>
                <a> <li class="col-lg-12 lists media" data-toggle="modal" data-target="#jobModal10">
                  <div class="col-lg-3">
                    <img class="myImages" src="<?= AMAZON_URL ?>/ds17/images/job-icons/SAP-functional.svg" alt="SAP Basis Trainee">
                  </div>
                  <div class="col-lg-9">
                   <h4 class="anchorss">SAP Basis Trainee</h4>
                    <span class="span1">
                  <br>    <i class="icon-location-pin g-pos-rel g-top-1 mr-1"></i> Eligibility |
                    </span>
                    <span class="span2">
                 B.Tech (CSE/IT/ECE), MCA - 65% marks of 2016/2017/2018 Passouts
                    </span>
                  </div>
                </li> </a>
              <a>  <li class="col-lg-12 lists media" data-toggle="modal" data-target="#jobModal11">
                  <div class="col-lg-3">
                    <img class="myImages" src="<?= AMAZON_URL ?>/ds17/images/job-icons/SAP-Security.svg" alt="SAP Security Trainee">
                  </div>
                  <div class="col-lg-9">
                     <h4 class="anchorss">SAP Security Trainee</h4>
                    <span class="span1">
                  <br>    <i class="icon-location-pin g-pos-rel g-top-1 mr-1"></i> Eligibility |
                    </span>
                    <span class="span2">
              Any B.Tech, MCA - 65% marks of 2016/2017 Passouts
                    </span>
                  </div>
                </li> </a>
               <a>  <li class="col-lg-12 lists media" data-toggle="modal" data-target="#jobModal12">
                  <div class="col-lg-3">
                    <img class="myImages" src="<?= AMAZON_URL ?>/ds17/images/job-icons/software-engineer.svg" alt="SAP PI Trainee">
                  </div>
                  <div class="col-lg-9">
                    <h4 class="anchorss">SAP PI Trainee</h4>
                    <span class="span1">
                  <br>    <i class="icon-location-pin g-pos-rel g-top-1 mr-1"></i> Eligibility |
                    </span>
                    <span class="span2">
               Any B.Tech, MCA - 65% marks of 2016/2017 Passouts
                    </span>
                  </div>
                </li> </a>
              </ul>
            </div>
               <div class="col-lg-4">
              <ul class="list-unstyled mb-0">
               <a>  <li class="col-lg-12 lists media" data-toggle="modal" data-target="#jobModal13">
                  <div class="col-lg-3">
                    <img class="myImages" src="<?= AMAZON_URL ?>/ds17/images/job-icons/US-IT-sales.svg" alt="BusinessDevelopmentExecutive(BDE)">
                  </div>
                  <div class="col-lg-9">
                    <h4 class="anchorss">Business Development Executive</h4>
                    <span class="span1">
                  <br>    <i class="icon-location-pin g-pos-rel g-top-1 mr-1"></i> Eligibility |
                    </span>
                    <span class="span2">
         Any Degree / MBA/ B.Tech (Interested in BDE side) 2015/2016/2017 pass outs
                    </span>
                  </div>
                </li> </a>
               <a>  <li class="col-lg-12 lists media" data-toggle="modal" data-target="#jobModal14">
                  <div class="col-lg-3">
                    <img class="myImages" src="<?= AMAZON_URL ?>/ds17/images/job-icons/us-it-staffing.svg" alt="US-IT Staffing">
                  </div>
                  <div class="col-lg-9">
                     <h4 class="anchorss">US-IT Staffing</h4>
                    <span class="span1">
                  <br>    <i class="icon-location-pin g-pos-rel g-top-1 mr-1"></i> Eligibility |
                    </span>
                    <span class="span2">
             Any Degree /MBA / B.Tech 2015/2016/2017 pass outs
                    </span>
                  </div>
                </li> </a>
                <a><li class="col-lg-12 lists media" data-toggle="modal" data-target="#jobModal15">
                  <div class="col-lg-3">
                    <img class="myImages" src="<?= AMAZON_URL ?>/ds17/images/job-icons/US-IT-recruiter.svg" alt="US-IT-recruitement">
                  </div>
                  <div class="col-lg-9">
                     <h4 class="anchorss">US-IT Recruitment</h4>
                    <span class="span1">
                  <br>    <i class="icon-location-pin g-pos-rel g-top-1 mr-1"></i> Eligibility |
                    </span>
                    <span class="span2">
           Any Degree/MBA/B.Tech 2015/2016/2017 pass outs
                    </span>
                  </div>
                </li> </a>
                 <a><li class="col-lg-12 lists media" data-toggle="modal" data-target="#jobModal16">
                  <div class="col-lg-3">
                    <img class="myImages" src="<?= AMAZON_URL ?>/ds17/images/job-icons/market-analysts.svg" alt="Market Analyst">
                  </div>
                  <div class="col-lg-9">
                   <h4 class="anchorss">Market Analyst</h4>
                    <span class="span1">
                  <br>    <i class="icon-location-pin g-pos-rel g-top-1 mr-1"></i> Eligibility |
                    </span>
                    <span class="span2">
      Any Degree/MBA/B.Tech 2015/2016/2017 pass outs
                    </span>
                  </div>
                </li> </a>
                 <a> <li class="col-lg-12 lists media"  data-toggle="modal" data-target="#jobModal25">
                  <div class="col-lg-3">
                    <img class="myImages" src="<?= AMAZON_URL ?>/ds17/images/job-icons/US-IT-recruiter.svg" alt="QA Analyst">
                  </div>
                  <div class="col-lg-9">
                     <h4 class="anchorss">QA Analyst</h4>
                    <span class="span1">
                  <br>    <i class="icon-location-pin g-pos-rel g-top-1 mr-1"></i> Eligibility |
                    </span>
                    <span class="span2">
             Should have 4-6 Years of experience as QA Analyst
                    </span>
                  </div>
                </li> </a>
                 <a> <li class="col-lg-12 lists media"  data-toggle="modal" data-target="#jobModal28">
                  <div class="col-lg-3">
                    <img class="myImages" src="<?= AMAZON_URL ?>/ds17/images/job-icons/SAP-PP-PM.svg" alt="SAP PP/APO Consultant">
                  </div>
                  <div class="col-lg-9">
                     <h4 class="anchorss">SAP PP/APO Consultant </h4>
                    <span class="span1">
                  <br>    <i class="icon-location-pin g-pos-rel g-top-1 mr-1"></i> Eligibility |
                    </span>
                    <span class="span2">
           Should have minimum 6-8 years experience in SAP PP/APO
                    </span>
                  </div>
                </li> </a>
                
              </ul>
            </div>
            
                 <div class="col-lg-4">
              <ul class="list-unstyled mb-0">
                <a> <li class="col-lg-12 lists media" data-toggle="modal" data-target="#jobModal17">
                  <div class="col-lg-3">
                    <img class="myImages" src="<?= AMAZON_URL ?>/ds17/images/job-icons/content-analysts.svg" alt="Content Analyst">
                  </div>
                  <div class="col-lg-9">
                     <h4 class="anchorss">Content Analyst</h4>
                    <span class="span1">
                  <br>    <i class="icon-location-pin g-pos-rel g-top-1 mr-1"></i> Eligibility |
                    </span>
                    <span class="span2">
       Any Degree/MBA/B.Tech 2015/2016/2017 pass outs
                    </span>
                  </div>
                </li> </a>
                 <a><li class="col-lg-12 lists media"  data-toggle="modal" data-target="#jobModal18">
                  <div class="col-lg-3">
                    <img class="myImages" src="<?= AMAZON_URL ?>/ds17/images/job-icons/graphic-designer.svg" alt="Graphic Designer">
                  </div>
                  <div class="col-lg-9">
                      <h4 class="anchorss">Graphic Designer</h4>
                    <span class="span1">
                  <br>    <i class="icon-location-pin g-pos-rel g-top-1 mr-1"></i> Eligibility |
                    </span>
                    <span class="span2">
        Any Degree/MBA/B.Tech 2015/2016/2017 pass outs
                    </span>
                  </div>
                </li> </a>
               <a> <li class="col-lg-12 lists media"  data-toggle="modal" data-target="#jobModal19">
                  <div class="col-lg-3">
                    <img class="myImages" src="<?= AMAZON_URL ?>/ds17/images/job-icons/cognitive-developer.svg" alt="Social Media Analyst">
                  </div>
                  <div class="col-lg-9">
                     <h4 class="anchorss">Social Media Analyst</h4>
                    <span class="span1">
                  <br>    <i class="icon-location-pin g-pos-rel g-top-1 mr-1"></i> Eligibility |
                    </span>
                    <span class="span2">
        Any Degree/MBA/B.Tech 2015/2016/2017 pass outs
                    </span>
                  </div>
                </li> </a>
                 <a><li class="col-lg-12 lists media"  data-toggle="modal" data-target="#jobModal20">
                  <div class="col-lg-3">
                    <img class="myImages" src="<?= AMAZON_URL ?>/ds17/images/job-icons/US-IT-sales.svg" alt="Technical Content Writer">
                  </div>
                  <div class="col-lg-9">
                    <h4 class="anchorss">Technical Content Writer</h4>
                    <span class="span1">
                  <br>    <i class="icon-location-pin g-pos-rel g-top-1 mr-1"></i> Eligibility |
                    </span>
                    <span class="span2">
    Any Degree/MBA/B.Tech 2015/2016/2017 pass outs
                    </span>
                  </div>
                </li> </a>
               <a> <li class="col-lg-12 lists media"  data-toggle="modal" data-target="#jobModal26">
                  <div class="col-lg-3">
                    <img class="myImages" src="<?= AMAZON_URL ?>/ds17/images/job-icons/sap-trainne.svg" alt="SAP ABAP Consultant">
                  </div>
                  <div class="col-lg-9">
                     <h4 class="anchorss">SAP ABAP Consultant </h4>
                    <span class="span1">
                  <br>    <i class="icon-location-pin g-pos-rel g-top-1 mr-1"></i> Eligibility |
                    </span>
                    <span class="span2">
            Should have minimum 5 years experience in SAP ABAP
                    </span>
                  </div>
                </li> </a>
                  <a> <li class="col-lg-12 lists media"  data-toggle="modal" data-target="#jobModal29">
                  <div class="col-lg-3">
                    <img class="myImages" src="<?= AMAZON_URL ?>/ds17/images/job-icons/content-analysts.svg" alt="SAP PI/PO Consultant">
                  </div>
                  <div class="col-lg-9">
                     <h4 class="anchorss">SAP PI/PO Consultant</h4>
                    <span class="span1">
                  <br>    <i class="icon-location-pin g-pos-rel g-top-1 mr-1"></i> Eligibility |
                    </span>
                    <span class="span2">
              Should have minimum 6-8 years experience in SAP PI/PO
                    </span>
                  </div>
                </li> </a>
              </ul>
            </div>
             <div class="col-lg-4">
              <ul class="list-unstyled mb-0">
               <a>  <li class="col-lg-12 lists media"  data-toggle="modal" data-target="#jobModal21">
                  <div class="col-lg-3">
                    <img class="myImages" src="<?= AMAZON_URL ?>/ds17/images/job-icons/US-IT-sales.svg" alt="Sr.Talend Developer">
                  </div>
                  <div class="col-lg-9">
                    <h4 class="anchorss">Sr.Talend Developer</h4>
                    <span class="span1">
                  <br>    <i class="icon-location-pin g-pos-rel g-top-1 mr-1"></i> Eligibility |
                    </span>
                    <span class="span2">
     Should have 4-5 Years of experience of Talend ETL Experience
                    </span>
                  </div>
                </li> </a>
                <a> <li class="col-lg-12 lists media"  data-toggle="modal" data-target="#jobModal22">
                  <div class="col-lg-3">
                    <img class="myImages" src="<?= AMAZON_URL ?>/ds17/images/job-icons/SAP-Security.svg" alt="Sr.EDI Business Analyst">
                  </div>
                  <div class="col-lg-9">
                    <h4 class="anchorss">Sr.EDI Business Analyst</h4>
                    <span class="span1">
                  <br>    <i class="icon-location-pin g-pos-rel g-top-1 mr-1"></i> Eligibility |
                    </span>
                    <span class="span2">
    Should have minimum 5+ years of IT Experience
                    </span>
                  </div>
                </li> </a>
               <a> <li class="col-lg-12 lists media"  data-toggle="modal" data-target="#jobModal23">
                  <div class="col-lg-3">
                    <img class="myImages" src="<?= AMAZON_URL ?>/ds17/images/job-icons/software-engineer.svg" alt="Sr. Oracle Developer">
                  </div>
                  <div class="col-lg-9">
                     <h4 class="anchorss">Sr. Oracle Developer</h4>
                    <span class="span1">
                  <br>    <i class="icon-location-pin g-pos-rel g-top-1 mr-1"></i> Eligibility |
                    </span>
                    <span class="span2">
    Should have 4-5 Years of experience on Oracle Forms & PL/SQL & Pro*C
                    </span>
                  </div>
                </li> </a>
                <a> <li class="col-lg-12 lists media"  data-toggle="modal" data-target="#jobModal24">
                  <div class="col-lg-3">
                    <img class="myImages" src="<?= AMAZON_URL ?>/ds17/images/job-icons/Bi-analytics.svg" alt="Lead designer - BI Analytics">
                  </div>
                  <div class="col-lg-9">
                     <h4 class="anchorss">Lead designer - BI Analytics</h4>
                    <span class="span1">
                  <br>    <i class="icon-location-pin g-pos-rel g-top-1 mr-1"></i> Eligibility |
                    </span>
                    <span class="span2">
  Should have 4-5 Years of exp. in at least 2 DB technologies like Oracle, DB2, Teradata etc
                    </span>
                  </div>
                </li> </a>
                  <a> <li class="col-lg-12 lists media"  data-toggle="modal" data-target="#jobModal27">
                  <div class="col-lg-3">
                    <img class="myImages" src="<?= AMAZON_URL ?>/ds17/images/job-icons/SAP-FICO.svg" alt="SAP MM/WM Consultant">
                  </div>
                  <div class="col-lg-9">
                    <h4 class="anchorss">SAP MM/WM Consultant</h4>
                    <span class="span1">
                  <br>    <i class="icon-location-pin g-pos-rel g-top-1 mr-1"></i> Eligibility |
                    </span>
                    <span class="span2">
              Should have minimum 7-8 years experience in SAP MM/WM
                    </span>
                  </div>
                </li> </a>
                  <a> <li class="col-lg-12 lists media"  data-toggle="modal" data-target="#jobModal30">
                  <div class="col-lg-3">
                    <img class="myImages" src="<?= AMAZON_URL ?>/ds17/images/job-icons/hcm-executives.svg" alt="SAP HCM/US Payroll Consultant">
                  </div>
                  <div class="col-lg-9">
                    <h4 class="anchorss">SAP HCM/US Payroll Consultant </h4>
                    <span class="span1">
                  <br>    <i class="icon-location-pin g-pos-rel g-top-1 mr-1"></i> Eligibility |
                    </span>
                    <span class="span2">
            Should have minimum 5-7 years experience in SAP HCM/US Payroll
                    </span>
                  </div>
                </li> </a>
              </ul>
            </div>
            <!--dummy-->
            
            
            
            
          </div>
        <br>
        </div>
        </div>
    </section>
    
    
    
     <!-- Positions modal starts here-->
     
     <!-- MODAL1-->
      <div class="modal fade" id="jobModal1" tabindex="-1" style="background-color: rgba(0,0,0,0.8) !important;padding-top:180px!important;" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content" style="background-color:rgba(0,0,0,0.2) !important; border: 1px solid #ffffff; -webkit-box-shadow:none !important;
box-shadow:none !important;">
      <div class="modal-header">
        <h4 class="modal-title" style="color:#000000;" id="exampleModalLabel18"><strong>Job Description | Software Trainee  </strong></h4>
        <button id="clearblur" type="button" style="color:#000000;" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
            <div class="row">
                <div class="col-sm-8">
                   
                     <ul class="joblist">
                      <li>Problem solving skills</li>
                       <li>Up-to-date knowledge of technologies</li>
                       <li>Good organisational and time management skills</li>
                       <li>For programming, knowledge of one or more programming languages relevant to the role</li>
                       <li>Some may require experience with database management systems</li>
                       <li>An ability to work to deadlines</li>
                       <li>A good eye for detail</li>
                     </ul>
                     
                </div>
                <div class="col-sm-4" style="margin-top:30px">
                    <center>
                   <img class="image img-circle" src="<?= AMAZON_URL ?>/ds17/images/job-icons/software-engineer.svg"  alt="satyendra" style="width: 100px;height: 100px;" title="">
                
                    <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff;" contenteditable="false"> <strong>Software Trainee </strong></h6>
                </center>
                 <div class="modal-footer nomargintop">
              </div>
           </div>
         </div>
       </div>
     </div>
    </div>
  </div>
    
     <!-- MODAL2-->
      <div class="modal fade" id="jobModal2" tabindex="-1" style="background-color: rgba(0,0,0,0.8) !important;padding-top:180px!important;" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content" style="background-color:rgba(0,0,0,0.2) !important; border: 1px solid #ffffff; -webkit-box-shadow:none !important;
box-shadow:none !important;">
      <div class="modal-header">
        <h4 class="modal-title" style="color:#000000;" id="exampleModalLabel18"><strong>Job Description  | QA Trainee </strong></h4>
        <button id="clearblur" type="button" style="color:#000000;" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
            <div class="row">
                <div class="col-sm-8">
                   
                     <ul class="joblist">
                      <li>Determining, negotiating and agreeing on in-house quality procedures, standards and specifications</li>
                       <li>Assessing customer requirements and ensuring that these are met setting customer service standards</li>
                       <li>Specifying quality requirements of raw materials with suppliers</li>
                       <li>Investigating and setting standards for quality and health and safety</li>
                       <li>Ensuring that manufacturing processes comply with standards at both national and international level</li>
                     </ul>
                     
                </div>
                <div class="col-sm-4" style="margin-top:30px">
                    <center>
                   <img class="image img-circle" src="<?= AMAZON_URL ?>/ds17/images/job-icons/US-IT-recruiter.svg "  alt="QA Trainee" style="width: 100px;height: 100px;" title="">
                
                    <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff;" contenteditable="false"> <strong>QA Trainee </strong></h6>
                </center>
                 <div class="modal-footer nomargintop">
              </div>
           </div>
         </div>
       </div>
     </div>
    </div>
  </div>
      
     <!-- MODAL3-->
      <div class="modal fade" id="jobModal3" tabindex="-1" style="background-color: rgba(0,0,0,0.8) !important;padding-top:180px!important;" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content" style="background-color:rgba(0,0,0,0.2) !important; border: 1px solid #ffffff; -webkit-box-shadow:none !important;
box-shadow:none !important;">
      <div class="modal-header">
        <h4 class="modal-title" style="color:#000000;" id="exampleModalLabel18"><strong>Job Description | Network Engineer  </strong></h4>
        <button id="clearblur" type="button" style="color:#000000;" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
            <div class="row">
                <div class="col-sm-8">
                   
                     <ul class="joblist">
                      <li>Good understanding of System OS and Network design principles</li>
                       <li>Basic Knowledge on Virtualization concepts- Vmware/Hyper-v/RHEV</li>
                       <li>Must have Interest to learn new technologies related to Chef, Puppet, Docker, containers, swarm cluster, etc,.</li>
                       <li>Knowledge on Shell scripting, basic Linux/Windows administration</li>
                       <li>A good understanding of any public or private cloud methodologies - Azure, Oracle, GCP, AWS, Bluemix</li>
                     </ul>
                     
                </div>
                <div class="col-sm-4" style="margin-top:30px">
                    <center>
                   <img class="image img-circle" src="<?= AMAZON_URL ?>/ds17/images/job-icons/devops-engineer.svg"  alt="Network Engineer" style="width: 100px;height: 100px;" title="">
                
                    <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff;" contenteditable="false"> <strong>Network Engineer</strong></h6>
                </center>
                 <div class="modal-footer nomargintop">
              </div>
           </div>
         </div>
       </div>
     </div>
    </div>
  </div>
  
   <!-- MODAL4-->
      <div class="modal fade" id="jobModal4" tabindex="-1" style="background-color: rgba(0,0,0,0.8) !important;padding-top:180px!important;" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content" style="background-color:rgba(0,0,0,0.2) !important; border: 1px solid #ffffff; -webkit-box-shadow:none !important;
box-shadow:none !important;">
      <div class="modal-header">
        <h4 class="modal-title" style="color:#000000;" id="exampleModalLabel18"><strong>Job Description | SAP SD/LO Trainee  </strong></h4>
        <button id="clearblur" type="button" style="color:#000000;" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
            <div class="row">
                <div class="col-sm-8">
                   
                     <ul class="joblist">
                      <li>Functional consultant on Implementation Support Project Collecting, understanding, and transmitting the business requirements for the project, and translating these into Business blueprints , system design, functional specifications and system configuration</li>
                       <li>Supporting SAP Environment in L2 L3 support Testing of solution Conducting end user training </li>
                       <li>Take initiative to explore new offerings by SAP</li>
                     </ul>
                     
                </div>
                <div class="col-sm-4" style="margin-top:30px">
                    <center>
                   <img class="image img-circle" src="<?= AMAZON_URL ?>/ds17/images/job-icons/SAP-PP-PM.svg"  alt="SAP SD/LO Trainee" style="width: 100px;height: 100px;" title="">
                
                    <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff;" contenteditable="false"> <strong>SAP SD/LO Trainee </strong></h6>
                </center>
                 <div class="modal-footer nomargintop">
              </div>
           </div>
         </div>
       </div>
     </div>
    </div>
  </div>
  
   <!-- MODAL5-->
      <div class="modal fade" id="jobModal5" tabindex="-1" style="background-color: rgba(0,0,0,0.8) !important;padding-top:180px!important;" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content" style="background-color:rgba(0,0,0,0.2) !important; border: 1px solid #ffffff; -webkit-box-shadow:none !important;
box-shadow:none !important;">
      <div class="modal-header">
        <h4 class="modal-title" style="color:#000000;" id="exampleModalLabel18"><strong>Job Description | SAP MM/WM Trainee  </strong></h4>
        <button id="clearblur" type="button" style="color:#000000;" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
            <div class="row">
                <div class="col-sm-8">
                   
                  <ul class="joblist">
                      <li>The resource will provide consulting and development from a functional perspective in regards with CBM rollout projects</li>
                       <li>Analysis of business requirements</li>
                       <li>Design and implementation of full solutions ( Including testing and UAT Support)</li>
                       <li>Identify integration issues and develop solutions to these issues</li>
                       <li>Work effectively with local experts as well as with the business community</li>
                     </ul>
                     
                </div>
                <div class="col-sm-4" style="margin-top:30px">
                    <center>
                   <img class="image img-circle" src="<?= AMAZON_URL ?>/ds17/images/job-icons/cloud-engineer.svg"  alt="SAP MM/WM Trainee" style="width: 100px;height: 100px;" title="">
                
                    <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff;" contenteditable="false"> <strong>SAP MM/WM Trainee </strong></h6>
                </center>
                 <div class="modal-footer nomargintop">
              </div>
           </div>
         </div>
       </div>
     </div>
    </div>
  </div>
  
   <!-- MODAL6-->
      <div class="modal fade" id="jobModal6" tabindex="-1" style="background-color: rgba(0,0,0,0.8) !important;padding-top:180px!important;" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content" style="background-color:rgba(0,0,0,0.2) !important; border: 1px solid #ffffff; -webkit-box-shadow:none !important;
box-shadow:none !important;">
      <div class="modal-header">
        <h4 class="modal-title" style="color:#000000;" id="exampleModalLabel18"><strong>Job Description | SAP PP/PM Trainee  </strong></h4>
        <button id="clearblur" type="button" style="color:#000000;" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
            <div class="row">
                <div class="col-sm-8">
                   
                  <ul class="joblist">
                      <li>Is responsible for serving as an SAP production planning functional specialist on an implementation of SAP PP/PM and financial planning</li>
                       <li>Responsible for gathering documentation, implementation, testing of their assigned area functionality and coordinating all applicable areas of functional overlap</li>
                       <li>Develops procedures and methods for unit and integration testing prepare string, unit and validation test scripts for all business process areas in scope</li>
                     </ul>
                     
                </div>
                <div class="col-sm-4" style="margin-top:30px">
                    <center>
                   <img class="image img-circle" src="<?= AMAZON_URL ?>/ds17/images/job-icons/SAP-PP-PM.svg"  alt="SAP PP/PM Trainee" style="width: 100px;height: 100px;" title="">
                
                    <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff;" contenteditable="false"> <strong>SAP PP/PM Trainee </strong></h6>
                </center>
                 <div class="modal-footer nomargintop">
              </div>
           </div>
         </div>
       </div>
     </div>
    </div>
  </div>
    
    <!-- MODAL7-->
      <div class="modal fade" id="jobModal7" tabindex="-1" style="background-color: rgba(0,0,0,0.8) !important;padding-top:180px!important;" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content" style="background-color:rgba(0,0,0,0.2) !important; border: 1px solid #ffffff; -webkit-box-shadow:none !important;
box-shadow:none !important;">
      <div class="modal-header">
        <h4 class="modal-title" style="color:#000000;" id="exampleModalLabel18"><strong>Job Description | SAP FICO Trainee  </strong></h4>
        <button id="clearblur" type="button" style="color:#000000;" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
            <div class="row">
                <div class="col-sm-8">
                   
                   <ul class="joblist">
                      <li>Track cost heads and make future plans accordingly</li>
                       <li>Keep a track of costs for specialized events and assign them to appropriate departments</li>
                       <li>Avail activity based costing across processes</li>
                       <li>Build reports on sales and profitability ensured through a product or an internal measurement</li>
                     </ul>
                     
                </div>
                <div class="col-sm-4">
                    <center>
                   <img class="image img-circle" src="<?= AMAZON_URL ?>/ds17/images/job-icons/SAP-FICO.svg"  alt="SAP FICO Trainee" style="width: 100px;height: 100px;" title="">
                
                    <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff;" contenteditable="false"> <strong>SAP FICO Trainee</strong></h6>
                </center>
                 <div class="modal-footer nomargintop">
              </div>
           </div>
         </div>
       </div>
     </div>
    </div>
  </div>
   
    <!-- MODAL8-->
      <div class="modal fade" id="jobModal8" tabindex="-1" style="background-color: rgba(0,0,0,0.8) !important;padding-top:180px!important;" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content" style="background-color:rgba(0,0,0,0.2) !important; border: 1px solid #ffffff; -webkit-box-shadow:none !important;
box-shadow:none !important;">
      <div class="modal-header">
        <h4 class="modal-title" style="color:#000000;" id="exampleModalLabel18"><strong>Job Description | SAP BI Trainee  </strong></h4>
        <button id="clearblur" type="button" style="color:#000000;" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
            <div class="row">
                <div class="col-sm-8">
                   
                     <ul class="joblist">
                      <li>Define and Manage BI deliverables</li>
                       <li>Do the as-is analysis of the data warehouse and create future model solutions</li>
                       <li>Design, Develop, test and implement presented and approved solutions</li>
                     </ul>
                     
                </div>
                <div class="col-sm-4">
                    <center>
                   <img class="image img-circle" src="<?= AMAZON_URL ?>/ds17/images/job-icons/sap-trainne.svg"  alt="SAP BI Trainee" style="width: 100px;height: 100px;" title="">
                
                    <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff;" contenteditable="false"> <strong>SAP BI Trainee </strong></h6>
                </center>
                 <div class="modal-footer nomargintop">
              </div>
           </div>
         </div>
       </div>
     </div>
    </div>
  </div>
  
   <!-- MODAL9-->
      <div class="modal fade" id="jobModal9" tabindex="-1" style="background-color: rgba(0,0,0,0.8) !important;padding-top:180px!important;" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content" style="background-color:rgba(0,0,0,0.2) !important; border: 1px solid #ffffff; -webkit-box-shadow:none !important;
box-shadow:none !important;">
      <div class="modal-header">
        <h4 class="modal-title" style="color:#000000;" id="exampleModalLabel18"><strong>Job Description | SAP BO Trainee  </strong></h4>
        <button id="clearblur" type="button" style="color:#000000;" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
            <div class="row">
                <div class="col-sm-8">
                   
                  <ul class="joblist">
                      <li>Identification and activation of Business Data</li>
                       <li>Extraction of Data from various data sources</li>
                       <li>Handling Data loading issues</li>
                       <li>Transportation of data and analytics from one environment to another</li>
                       <li>Co-ordinate with business analysts while raising requirements from customers</li>
                     </ul>
                     
                </div>
                <div class="col-sm-4" style="margin-top:30px">
                    <center>
                   <img class="image img-circle" src="<?= AMAZON_URL ?>/ds17/images/job-icons/sap-trainne.svg"  alt="SAP BO Trainee" style="width: 100px;height: 100px;" title="">
                
                    <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff;" contenteditable="false"> <strong>SAP BO Trainee </strong></h6>
                </center>
                 <div class="modal-footer nomargintop">
              </div>
           </div>
         </div>
       </div>
     </div>
    </div>
  </div>
  
  <!-- MODAL10-->
      <div class="modal fade" id="jobModal10" tabindex="-1" style="background-color: rgba(0,0,0,0.8) !important;padding-top:180px!important;" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content" style="background-color:rgba(0,0,0,0.2) !important; border: 1px solid #ffffff; -webkit-box-shadow:none !important;
box-shadow:none !important;">
      <div class="modal-header">
        <h4 class="modal-title" style="color:#000000;" id="exampleModalLabel18"><strong>Job Description | SAP Basis Trainee  </strong></h4>
        <button id="clearblur" type="button" style="color:#000000;" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
            <div class="row">
                <div class="col-sm-8">
                   
                    <ul class="joblist">
                      <li>Handling the Administration part of SAP including the installation, configuration and maintenance</li>
                       <li>Installation includes R/3, NW, NW Components, Solman etc</li>
                       <li>Administration includes user admin, client admin, backup etc</li>
                       <li>Configuration includes Printer, RFC, STMS etc</li>
                       <li>Maintenance includes monitoring the servers, background jobs, system performance and avoiding bottlenecks</li>
                     </ul>
                     
                </div>
                <div class="col-sm-4" style="margin-top:30px">
                    <center>
                   <img class="image img-circle" src="<?= AMAZON_URL ?>/ds17/images/job-icons/SAP-functional.svg" alt="SAP Basis Trainee" style="width: 100px;height: 100px;" title="">
                
                    <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff;" contenteditable="false"> <strong>SAP Basis Trainee </strong></h6>
                </center>
                 <div class="modal-footer nomargintop">
              </div>
           </div>
         </div>
       </div>
     </div>
    </div>
  </div>
  
    <!-- MODAL11-->
      <div class="modal fade" id="jobModal11" tabindex="-1" style="background-color: rgba(0,0,0,0.8) !important;padding-top:180px!important;" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content" style="background-color:rgba(0,0,0,0.2) !important; border: 1px solid #ffffff; -webkit-box-shadow:none !important;
box-shadow:none !important;">
      <div class="modal-header">
        <h4 class="modal-title" style="color:#000000;" id="exampleModalLabel18"><strong>Job Description | SAP Security Trainee  </strong></h4>
        <button id="clearblur" type="button" style="color:#000000;" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
            <div class="row">
                <div class="col-sm-8">
                      <ul class="joblist">
                      <li>Solid knowledge of Authorization management in SAP</li>
                       <li>Ability to contribute or independently create authorization concepts, in line with legal requirements, security standards etc</li>
                       <li>SAP implementation & rollout projects</li>
                       <li>SAP support & maintenance projects across multiple functional areas. Usually it starts collecting requirements, their analysis, prepare the designs, system configuration, perform relevant testing and continues to deployment of the designed solution</li>
                     </ul>
                     
                </div>
                <div class="col-sm-4" style="margin-top:30px">
                    <center>
                   <img class="image img-circle" src="<?= AMAZON_URL ?>/ds17/images/job-icons/SAP-Security.svg"  alt="SAP Security Trainee" style="width: 100px;height: 100px;" title="">
                
                    <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff;" contenteditable="false"> <strong>SAP Security Trainee </strong></h6>
                </center>
                 <div class="modal-footer nomargintop">
              </div>
           </div>
         </div>
       </div>
     </div>
    </div>
  </div>
  
    <!-- MODAL12-->
      <div class="modal fade" id="jobModal12" tabindex="-1" style="background-color: rgba(0,0,0,0.8) !important;padding-top:180px!important;" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content" style="background-color:rgba(0,0,0,0.2) !important; border: 1px solid #ffffff; -webkit-box-shadow:none !important;
box-shadow:none !important;">
      <div class="modal-header">
        <h4 class="modal-title" style="color:#000000;" id="exampleModalLabel18"><strong>Job Description | SAP PI Trainee  </strong></h4>
        <button id="clearblur" type="button" style="color:#000000;" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
            <div class="row">
                <div class="col-sm-8">
                     <ul class="joblist">
                      <li>Provide Operational Excellence for EVO in SAP XI/PI 7.0 areas</li>
                       <li>Work with EVO Support Partner, assess operational quality, identify gaps, and manage closure of gaps in SAP XI/PI 7.0 area</li>
                       <li>Ensure effective Error Trend Analysis and Problem Management</li>
                     </ul>
                     
                </div>
                <div class="col-sm-4">
                    <center>
                   <img class="image img-circle" src="<?= AMAZON_URL ?>/ds17/images/job-icons/software-engineer.svg"  alt="SAP PI Trainee" style="width: 100px;height: 100px;" title="">
                
                    <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff;" contenteditable="false"> <strong>SAP PI Trainee </strong></h6>
                </center>
                 <div class="modal-footer nomargintop">
              </div>
           </div>
         </div>
       </div>
     </div>
    </div>
  </div>
  
   <!-- MODAL13-->
      <div class="modal fade" id="jobModal13" tabindex="-1" style="background-color: rgba(0,0,0,0.8) !important;padding-top:180px!important;" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content" style="background-color:rgba(0,0,0,0.2) !important; border: 1px solid #ffffff; -webkit-box-shadow:none !important;
box-shadow:none !important;">
      <div class="modal-header">
        <h4 class="modal-title" style="color:#000000;" id="exampleModalLabel18"><strong>Job Description | Business Development Executive (BDE)  </strong></h4>
        <button id="clearblur" type="button" style="color:#000000;" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
            <div class="row">
                <div class="col-sm-8">
                      <ul class="joblist">
                      <li>Work with the various Fortune 1000 Companies in USA</li>
                       <li>Coordinate with the US Team on Various Software Sales / Services Opportunities</li>
                       <li>Resell IBM / Oracle / Microsoft Software & Services</li>
                       <li>Software focused on IBM B2B / IBM BPM / IBM SOA / SAP / Oracle Products</li>
                     </ul>
                     
                </div>
                <div class="col-sm-4">
                    <center>
                   <img class="image img-circle" src="<?= AMAZON_URL ?>/ds17/images/job-icons/US-IT-sales.svg"  alt="BusinessDevelopmentExecutive(BDE)" style="width: 100px;height: 100px;" title="">
                
                    <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff;" contenteditable="false"> <strong>Business Development Executive(BDE)</strong></h6>
                </center>
                 <div class="modal-footer nomargintop">
              </div>
           </div>
         </div>
       </div>
     </div>
    </div>
  </div>
  
     <!-- MODAL14-->
      <div class="modal fade" id="jobModal14" tabindex="-1" style="background-color: rgba(0,0,0,0.8) !important;padding-top:180px!important;" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content" style="background-color:rgba(0,0,0,0.2) !important; border: 1px solid #ffffff; -webkit-box-shadow:none !important;
box-shadow:none !important;">
      <div class="modal-header">
        <h4 class="modal-title" style="color:#000000;" id="exampleModalLabel18"><strong>Job Description | US-IT Staffing  </strong></h4>
        <button id="clearblur" type="button" style="color:#000000;" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
            <div class="row">
                <div class="col-sm-8">
                     <ul class="joblist">
                      <li>Build competitive intelligence knowledge of local competitors</li>
                       <li>Strong team contributor and collaborator partnering with recruiters </li>
                       <li>Develop new search ideas and search mentoring</li>
                     </ul>
                     
                </div>
                <div class="col-sm-4">
                    <center>
                   <img class="image img-circle" src="<?= AMAZON_URL ?>/ds17/images/job-icons/us-it-staffing.svg"  alt="US-IT Staffing" style="width: 100px;height: 100px;" title="">
                
                    <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff;" contenteditable="false"> <strong>US-IT Staffing </strong></h6>
                </center>
                 <div class="modal-footer nomargintop">
              </div>
           </div>
         </div>
       </div>
     </div>
    </div>
  </div>
  
   <!-- MODAL15-->
      <div class="modal fade" id="jobModal15" tabindex="-1" style="background-color: rgba(0,0,0,0.8) !important;padding-top:180px!important;" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content" style="background-color:rgba(0,0,0,0.2) !important; border: 1px solid #ffffff; -webkit-box-shadow:none !important;
box-shadow:none !important;">
      <div class="modal-header">
        <h4 class="modal-title" style="color:#000000;" id="exampleModalLabel18"><strong>Job Description | US-IT Recruitment  </strong></h4>
        <button id="clearblur" type="button" style="color:#000000;" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
            <div class="row">
                <div class="col-sm-8">
                    <ul class="joblist">
                      <li>Understand the Client's Requirements</li>
                       <li>Performing recruitment life cycles including people sourcing, screening, and coordinating technical interviews, negotiation and follow up etc</li>
                       <li>Responsible for recruiting IT and professionals throughout US market</li>
                       <li>Excellent Written, Verbal Communication Skills, Tech Screening Skills and responsible for detail evaluation of candidates against specific IT requirements</li>
                       <li>Team player, ability to work under extremely challenging environment</li>
                      
                     </ul>
                     
                </div>
                <div class="col-sm-4" style="margin-top:30px;">
                    <center>
                   <img class="image img-circle" src="<?= AMAZON_URL ?>/ds17/images/job-icons/US-IT-recruiter.svg"  alt="US-IT Recruitment" style="width: 100px;height: 100px;" title="">
                
                    <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff;" contenteditable="false"> <strong>US-IT Recruitment </strong></h6>
                </center>
                 <div class="modal-footer nomargintop">
              </div>
           </div>
         </div>
       </div>
     </div>
    </div>
  </div>
  
   <!-- MODAL16-->
      <div class="modal fade" id="jobModal16" tabindex="-1" style="background-color: rgba(0,0,0,0.8) !important;padding-top:180px!important;" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content" style="background-color:rgba(0,0,0,0.2) !important; border: 1px solid #ffffff; -webkit-box-shadow:none !important;
box-shadow:none !important;">
      <div class="modal-header">
        <h4 class="modal-title" style="color:#000000;" id="exampleModalLabel18"><strong>Job Description | Market Analyst  </strong></h4>
        <button id="clearblur" type="button" style="color:#000000;" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
            <div class="row">
                <div class="col-sm-8">
                     <ul class="joblist">
                      <li>Ability to research and document potential leads and accounts</li>
                       <li>Ability to interface with US based customers</li>
                       
                     </ul>
                     
                </div>
                <div class="col-sm-4">
                    <center>
                   <img class="image img-circle" src="<?= AMAZON_URL ?>/ds17/images/job-icons/market-analysts.svg"  alt="Market Analyst" style="width: 100px;height: 100px;" title="">
                
                    <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff;" contenteditable="false"> <strong>Market Analyst </strong></h6>
                </center>
                 <div class="modal-footer nomargintop">
              </div>
           </div>
         </div>
       </div>
     </div>
    </div>
  </div>
  
    <!-- MODAL17-->
      <div class="modal fade" id="jobModal17" tabindex="-1" style="background-color: rgba(0,0,0,0.8) !important;padding-top:180px!important;" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content" style="background-color:rgba(0,0,0,0.2) !important; border: 1px solid #ffffff; -webkit-box-shadow:none !important;
box-shadow:none !important;">
      <div class="modal-header">
        <h4 class="modal-title" style="color:#000000;" id="exampleModalLabel18"><strong>Job Description | Content Analyst  </strong></h4>
        <button id="clearblur" type="button" style="color:#000000;" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
            <div class="row">
                <div class="col-sm-8">
                     <ul class="joblist">
                      <li>Writing skills and knowledge on HTML</li>
                       <li>Soft skills and creative skills</li>
                       
                     </ul>
                     
                </div>
                <div class="col-sm-4">
                    <center>
                   <img class="image img-circle" src="<?= AMAZON_URL ?>/ds17/images/job-icons/content-analysts.svg"  alt="Content Analyst" style="width: 100px;height: 100px;" title="">
                
                    <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff;" contenteditable="false"> <strong>Content Analyst </strong></h6>
                </center>
                 <div class="modal-footer nomargintop">
              </div>
           </div>
         </div>
       </div>
     </div>
    </div>
  </div>
  
   <!-- MODAL18-->
      <div class="modal fade" id="jobModal18" tabindex="-1" style="background-color: rgba(0,0,0,0.8) !important;padding-top:180px!important;" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content" style="background-color:rgba(0,0,0,0.2) !important; border: 1px solid #ffffff; -webkit-box-shadow:none !important;
box-shadow:none !important;">
      <div class="modal-header">
        <h4 class="modal-title" style="color:#000000;" id="exampleModalLabel18"><strong>Job Description | Graphic Designer  </strong></h4>
        <button id="clearblur" type="button" style="color:#000000;" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
            <div class="row">
                <div class="col-sm-8">
                     <ul class="joblist">
                      <li>Good knowledge on Adobe Cloud/Tools</li>
                       <li>Creativity and design ideas required for the position</li>
                     </ul>
                     
                </div>
                <div class="col-sm-4">
                    <center>
                   <img class="image img-circle" src="<?= AMAZON_URL ?>/ds17/images/job-icons/graphic-designer.svg"  alt="Graphic Designer" style="width: 100px;height: 100px;" title="">
                
                    <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff;" contenteditable="false"> <strong>Graphic Designer </strong></h6>
                </center>
                 <div class="modal-footer nomargintop">
              </div>
           </div>
         </div>
       </div>
     </div>
    </div>
  </div>
  
    <!-- MODAL19-->
      <div class="modal fade" id="jobModal19" tabindex="-1" style="background-color: rgba(0,0,0,0.8) !important;padding-top:180px!important;" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content" style="background-color:rgba(0,0,0,0.2) !important; border: 1px solid #ffffff; -webkit-box-shadow:none !important;
box-shadow:none !important;">
      <div class="modal-header">
        <h4 class="modal-title" style="color:#000000;" id="exampleModalLabel18"><strong>Job Description | Social Media Analyst  </strong></h4>
        <button id="clearblur" type="button" style="color:#000000;" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
            <div class="row">
                <div class="col-sm-8">
                     <ul class="joblist">
                      <li>Who spends most time on Social Media and have knowledge on running campaigns</li>
                       <li>Analytics and posts scheduling</li>
                       
                     </ul>
                     
                </div>
                <div class="col-sm-4">
                    <center>
                   <img class="image img-circle" src="<?= AMAZON_URL ?>/ds17/images/job-icons/cognitive-developer.svg"  alt="Social Media Analyst" style="width: 100px;height: 100px;" title="">
                
                    <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff;" contenteditable="false"> <strong>Social Media Analyst </strong></h6>
                </center>
                 <div class="modal-footer nomargintop">
              </div>
           </div>
         </div>
       </div>
     </div>
    </div>
  </div>
  
   <!-- MODAL20-->
      <div class="modal fade" id="jobModal20" tabindex="-1" style="background-color: rgba(0,0,0,0.8) !important;padding-top:180px!important;" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content" style="background-color:rgba(0,0,0,0.2) !important; border: 1px solid #ffffff; -webkit-box-shadow:none !important;
box-shadow:none !important;">
      <div class="modal-header">
        <h4 class="modal-title" style="color:#000000;" id="exampleModalLabel18"><strong>Job Description | Technical Content Writer  </strong></h4>
        <button id="clearblur" type="button" style="color:#000000;" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
            <div class="row">
                <div class="col-sm-8">
                     <ul class="joblist">
                      <li>Proven working experience in technical writing of software documentation </li>
                       <li>Should be able to deliver high quality documentation paying attention to detail</li>
                       
                     </ul>
                     
                </div>
                <div class="col-sm-4">
                    <center>
                   <img class="image img-circle" src="<?= AMAZON_URL ?>/ds17/images/job-icons/US-IT-sales.svg"  alt="Technical Content Writer" style="width: 100px;height: 100px;" title="">
                
                    <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff;" contenteditable="false"> <strong>Technical Content Writer </strong></h6>
                </center>
                 <div class="modal-footer nomargintop">
              </div>
           </div>
         </div>
       </div>
     </div>
    </div>
  </div>
  
    <!-- MODAL21-->
      <div class="modal fade" id="jobModal21" tabindex="-1" style="background-color: rgba(0,0,0,0.8) !important;padding-top:180px!important;" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content" style="background-color:rgba(0,0,0,0.2) !important; border: 1px solid #ffffff; -webkit-box-shadow:none !important;
box-shadow:none !important;">
      <div class="modal-header">
        <h4 class="modal-title" style="color:#000000;" id="exampleModalLabel18"><strong>Job Description | Sr.Talend Developer  </strong></h4>
        <button id="clearblur" type="button" style="color:#000000;" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
            <div class="row">
                <div class="col-sm-8">
                     <ul class="joblist">
                      <li>Develop batch data integration jobs in Talend Enterprise version</li>
                       <li>Expert in Talend enterprise version jobs processing complex xmls</li>
                       <li>Process, clean, archive and monitor all data movement</li>
                       <li>Optimize ETL Jobs</li>
                       <li>Move code from Development to QA and to Production</li>
                       <li>Write Unit Test Cases</li>
                       <li>Conduct Unit Testing and end to end System Testing</li>
                     </ul>
                     
                </div>
                <div class="col-sm-4" style="margin-top:30px">
                    <center>
                   <img class="image img-circle" src="<?= AMAZON_URL ?>/ds17/images/job-icons/US-IT-sales.svg"  alt="Sr.Talend Developer" style="width: 100px;height: 100px;" title="">
                
                    <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff;" contenteditable="false"> <strong>Sr.Talend Developer </strong></h6>
                </center>
                 <div class="modal-footer nomargintop">
              </div>
           </div>
         </div>
       </div>
     </div>
    </div>
  </div>
  
   <!-- MODAL22-->
      <div class="modal fade" id="jobModal22" tabindex="-1" style="background-color: rgba(0,0,0,0.8) !important;padding-top:180px!important;" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content" style="background-color:rgba(0,0,0,0.2) !important; border: 1px solid #ffffff; -webkit-box-shadow:none !important;
box-shadow:none !important;">
      <div class="modal-header">
        <h4 class="modal-title" style="color:#000000;" id="exampleModalLabel18"><strong>Job Description  | Sr.EDI Business Analyst </strong></h4>
        <button id="clearblur" type="button" style="color:#000000;" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
            <div class="row">
                <div class="col-sm-8">
                     <ul class="joblist">
                      <li>Well-versed with EDI tools</li>
                       <li>Well-versed with SFG tools</li>
                       <li>Hands on experience on Business process</li>
                       <li>Well-versed with Gentran tools</li>
                       </ul>
                     
                </div>
                <div class="col-sm-4">
                    <center>
                   <img class="image img-circle" src="<?= AMAZON_URL ?>/ds17/images/job-icons/SAP-Security.svg"  alt="Sr.EDI Business Analyst" style="width: 100px;height: 100px;" title="">
                
                    <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff;" contenteditable="false"> <strong>Sr.EDI Business Analyst </strong></h6>
                </center>
                 <div class="modal-footer nomargintop">
              </div>
           </div>
         </div>
       </div>
     </div>
    </div>
  </div>
  
     <!-- MODAL23-->
      <div class="modal fade" id="jobModal23" tabindex="-1" style="background-color: rgba(0,0,0,0.8) !important;padding-top:180px!important;" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content" style="background-color:rgba(0,0,0,0.2) !important; border: 1px solid #ffffff; -webkit-box-shadow:none !important;
box-shadow:none !important;">
      <div class="modal-header">
        <h4 class="modal-title" style="color:#000000;" id="exampleModalLabel18"><strong>Job Description | Sr. Oracle Developer </strong></h4>
        <button id="clearblur" type="button" style="color:#000000;" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
            <div class="row">
                <div class="col-sm-8">
                     <ul class="joblist">
                      <li>Technical Competency on programming Languages Oracle D2K Reports, Java  </li>
                       <li>Technical Competency on ETL Tool Informatica PowerCenter 9</li>
                       
                     </ul>
                     
                </div>
                <div class="col-sm-4">
                    <center>
                   <img class="image img-circle" src="<?= AMAZON_URL ?>/ds17/images/job-icons/software-engineer.svg"  alt="Sr. Oracle Developer" style="width: 100px;height: 100px;" title="">
                
                    <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff;" contenteditable="false"> <strong>Sr. Oracle Developer </strong></h6>
                </center>
                 <div class="modal-footer nomargintop">
              </div>
           </div>
         </div>
       </div>
     </div>
    </div>
  </div>
  
     <!-- MODAL24-->
      <div class="modal fade" id="jobModal24" tabindex="-1" style="background-color: rgba(0,0,0,0.8) !important;padding-top:180px!important;" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content" style="background-color:rgba(0,0,0,0.2) !important; border: 1px solid #ffffff; -webkit-box-shadow:none !important;
box-shadow:none !important;">
      <div class="modal-header">
        <h4 class="modal-title" style="color:#000000;" id="exampleModalLabel18"><strong>Job Description | Lead designer - BI Analytics  </strong></h4>
        <button id="clearblur" type="button" style="color:#000000;" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
            <div class="row">
                <div class="col-sm-8">
                     <ul class="joblist">
                      <li>Maintain and support data analytics platforms (e.g. reporting tools like Tableau, Power BI, Cognos, Qlik)</li>
                       <li>Background in data warehouse design (e.g. dimensional modeling) and data mining</li>
                       <li>In-depth understanding of database management systems, online analytical processing (OLAP) and ETL (Extract, transform, load) framework</li>
                       <li>For programming, knowledge of one or more programming languages relevant to the role Some may require experience with database management systems</li>
                       <li>An ability to work to deadlines</li>
                       <li>A good eye for detail</li>
                     </ul>
                     
                </div>
                <div class="col-sm-4" style="margin-top:30px">
                    <center>
                   <img class="image img-circle" src="<?= AMAZON_URL ?>/ds17/images/job-icons/Bi-analytics.svg"  alt="Lead designer - BI Analytics" style="width: 100px;height: 100px;" title="">
                
                    <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff;" contenteditable="false"> <strong>Lead designer - BI Analytics </strong></h6>
                </center>
                 <div class="modal-footer nomargintop">
              </div>
           </div>
         </div>
       </div>
     </div>
    </div>
  </div>
  
      <!-- MODAL25-->
      <div class="modal fade" id="jobModal25" tabindex="-1" style="background-color: rgba(0,0,0,0.8) !important;padding-top:180px!important;" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content" style="background-color:rgba(0,0,0,0.2) !important; border: 1px solid #ffffff; -webkit-box-shadow:none !important;
box-shadow:none !important;">
      <div class="modal-header">
        <h4 class="modal-title" style="color:#000000;" id="exampleModalLabel18"><strong>Job Description| QA Analyst  </strong></h4>
        <button id="clearblur" type="button" style="color:#000000;" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
            <div class="row">
                <div class="col-sm-8">
                     <ul class="joblist">
                      <li>Strong automation knowledge any automation tool (Selenium, VSTS- Coded UI, Cucumber, SQL automation etc)</li>
                       <li>Knowledge/Experience in web services, API testing like with SOAP and REST services</li>
                       <li>Experience in any of the scripting languages like Java, VB Scripts python, TestNG</li>
                      
                     </ul>
                     
                </div>
                <div class="col-sm-4" style="margin-top:30px">
                    <center>
                   <img class="image img-circle" src="<?= AMAZON_URL ?>/ds17/images/job-icons/US-IT-recruiter.svg"  alt="QA Analyst" style="width: 100px;height: 100px;" title="">
                
                    <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff;" contenteditable="false"> <strong>QA Analyst</strong></h6>
                </center>
                 <div class="modal-footer nomargintop">
              </div>
           </div>
         </div>
       </div>
     </div>
    </div>
  </div>
  
   <!-- MODAL26-->
      <div class="modal fade" id="jobModal26" tabindex="-1" style="background-color: rgba(0,0,0,0.8) !important;padding-top:180px!important;" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content" style="background-color:rgba(0,0,0,0.2) !important; border: 1px solid #ffffff; -webkit-box-shadow:none !important;
box-shadow:none !important;">
      <div class="modal-header">
        <h4 class="modal-title" style="color:#000000;" id="exampleModalLabel18"><strong>Job Description | SAP ABAP Consultant  </strong></h4>
        <button id="clearblur" type="button" style="color:#000000;" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
            <div class="row">
                <div class="col-sm-8">
                     <ul class="joblist">
                      <li>Expert in understanding business requirements to convert them to efficient technical specifications tailored to the client's needs</li>
                       <li>Efficient in work estimation. Profound experience, knowledge, and exposure in SAP ECC 6.0 , LSMW, SPAU/SPDD, Conversions, Object oriented programming, ALE/EDI/IDOC interfaces, User Exits and BADIs, SAP,,Smart forms/SAP Scripts, BAPI, Reports (Normal list and ALV), BDC, OSS Notes, Module Pool Programming, Enhancements and Configuration</li>
                       
                     </ul>
                     
                </div>
                <div class="col-sm-4" style="margin-top:30px">
                    <center>
                   <img class="image img-circle" src="<?= AMAZON_URL ?>/ds17/images/job-icons/sap-trainne.svg"  alt="SAP ABAP Consultant" style="width: 100px;height: 100px;" title="">
                
                    <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff;" contenteditable="false"> <strong>SAP ABAP Consultant</strong></h6>
                </center>
                 <div class="modal-footer nomargintop">
              </div>
           </div>
         </div>
       </div>
     </div>
    </div>
  </div>
  
   <!-- MODAL27-->
      <div class="modal fade" id="jobModal27" tabindex="-1" style="background-color: rgba(0,0,0,0.8) !important;padding-top:180px!important;" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content" style="background-color:rgba(0,0,0,0.2) !important; border: 1px solid #ffffff; -webkit-box-shadow:none !important;
box-shadow:none !important;">
      <div class="modal-header">
        <h4 class="modal-title" style="color:#000000;" id="exampleModalLabel18"><strong>Job Description | SAP MM/WM Consultant  </strong></h4>
        <button id="clearblur" type="button" style="color:#000000;" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
            <div class="row">
                <div class="col-sm-8">
                     <ul class="joblist">
                      <li>Involved in at least 03 to 04 life cycle implementations in MM/WM which includes design, Analyze, Development and deployment</li>
                       <li>Sound MM/WM business process like Purchasing, Inventory management, material movement, warehouse structure, GI/GR processes </li>
                       <li>Good understanding of Integration of MM/WM with other SAP Modules</li>
                        <li>Ensures that mandatory business requirements with respect to SAP MM/WM are met. Ensures that there are clear communication paths within the project team and the organization and business function</li>
                         <li>Acts as main point of contact between the business and the project team members. Work with users to ensure the project meets business needs. Documentation and analysis of current and future processes/systems</li>
                     </ul>
                     
                </div>
                <div class="col-sm-4" style="margin-top:30px">
                    <center>
                   <img class="image img-circle" src="<?= AMAZON_URL ?>/ds17/images/job-icons/SAP-FICO.svg"  alt="SAP MM/WM Consultant" style="width: 100px;height: 100px;" title="">
                
                    <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff;" contenteditable="false"> <strong>SAP MM/WM Consultant</strong></h6>
                </center>
                 <div class="modal-footer nomargintop">
              </div>
           </div>
         </div>
       </div>
     </div>
    </div>
  </div>
  
   <!-- MODAL28-->
      <div class="modal fade" id="jobModal28" tabindex="-1" style="background-color: rgba(0,0,0,0.8) !important;padding-top:180px!important;" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content" style="background-color:rgba(0,0,0,0.2) !important; border: 1px solid #ffffff; -webkit-box-shadow:none !important;
box-shadow:none !important;">
      <div class="modal-header">
        <h4 class="modal-title" style="color:#000000;" id="exampleModalLabel18"><strong>Job Description | SAP PP/APO Consultant  </strong></h4>
        <button id="clearblur" type="button" style="color:#000000;" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
            <div class="row">
                <div class="col-sm-8">
                     <ul class="joblist">
                      <li>Expert knowledge of supply chain concepts especially around SIOP (sales, inventory and operations planning)</li>
                      <li>Familiarity with system implementation standards and methodologies</li>
                       <li>Exposure to multiple production environments such as Make-to-Order, Make-to-stock, Engineer to order etc is preferred</li>
                       <li>Excellent understanding of integration with Finance and Product Costing</li>
                       <li>Ability to communicate and work well in a cross-functional team environment and also in the offshore/onsite model</li>
                       
                     </ul>
                     
                </div>
                <div class="col-sm-4" style="margin-top:30px">
                    <center>
                   <img class="image img-circle" src="<?= AMAZON_URL ?>/ds17/images/job-icons/SAP-PP-PM.svg"  alt="SAP PP/APO Consultant" style="width: 100px;height: 100px;" title="">
                
                    <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff;" contenteditable="false"> <strong>SAP PP/APO Consultant </strong></h6>
                </center>
                 <div class="modal-footer nomargintop">
              </div>
           </div>
         </div>
       </div>
     </div>
    </div>
  </div>
  
    <!-- MODAL29-->
      <div class="modal fade" id="jobModal29" tabindex="-1" style="background-color: rgba(0,0,0,0.8) !important;padding-top:180px!important;" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content" style="background-color:rgba(0,0,0,0.2) !important; border: 1px solid #ffffff; -webkit-box-shadow:none !important;
box-shadow:none !important;">
      <div class="modal-header">
        <h4 class="modal-title" style="color:#000000;" id="exampleModalLabel18"><strong>Job Description | SAP PI/PO Consultant  </strong></h4>
        <button id="clearblur" type="button" style="color:#000000;" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
            <div class="row">
                <div class="col-sm-8">
                     <ul class="joblist">
                      <li>Expert in designing the complex interfaces involving multiple levels conditioning</li>
                       <li>End to end understanding of Integration. Should be able to collaborate with colleagues from other integration platforms</li>
                       <li>Expertise in SAP PI Integration with SAP ERP, Third Party Applications, Databases, Cloud Systems, APIs Etc</li>
                       <li>Knowledge and application experience of using various Adapters available in PI: RFC, IDOC, File, Proxy, JDBC, SOAP, SFTP, B2B Adapters, Web Services, REST etc.Mappings (Graphical, Java, and XSLT)</li>
                       
                     </ul>
                     
                </div>
                <div class="col-sm-4" style="margin-top:30px">
                    <center>
                   <img class="image img-circle" src="<?= AMAZON_URL ?>/ds17/images/job-icons/content-analysts.svg"  alt="SAP PI/PO Consultant" style="width: 100px;height: 100px;" title="">
                
                    <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff;" contenteditable="false"> <strong>SAP PI/PO Consultant </strong></h6>
                </center>
                 <div class="modal-footer nomargintop">
              </div>
           </div>
         </div>
       </div>
     </div>
    </div>
  </div>
  
   <!-- MODAL30-->
      <div class="modal fade" id="jobModal30" tabindex="-1" style="background-color: rgba(0,0,0,0.8) !important;padding-top:180px!important;" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content" style="background-color:rgba(0,0,0,0.2) !important; border: 1px solid #ffffff; -webkit-box-shadow:none !important;
box-shadow:none !important;">
      <div class="modal-header">
        <h4 class="modal-title" style="color:#000000;" id="exampleModalLabel18"><strong>Job Description | SAP HCM/US Payroll Consultant  </strong></h4>
        <button id="clearblur" type="button" style="color:#000000;" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
            <div class="row">
                <div class="col-sm-8">
                     <ul class="joblist">
                      <li>Responsible for overseeing the following functional areas, technology, major system, (e.g., process simulation, document management, payroll, etc.) and the development/acquisition, maintenance, and/or support of application(s) in that area</li>
                       <li>Influence the assignment of personnel to various activities and provide performance feedback</li>
                       <li>Leads and participates in the preparation of all requirements/specifications, estimates, system designs, and completed systems, and ensures that quality support is provided to customers and clients, often involves performing project setups, analyses, designs, etc., for/with customers. </li>
                       
                     </ul>
                     
                </div>
                <div class="col-sm-4" style="margin-top:30px">
                    <center>
                   <img class="image img-circle" src="<?= AMAZON_URL ?>/ds17/images/job-icons/hcm-executives.svg"  alt="SAP HCM/US Payroll Consultant" style="width: 100px;height: 100px;" title="">
                
                    <h6 class="font-cond mgb-5 fg-text-d fs-130" style="color:#ffffff;" contenteditable="false"> <strong>SAP HCM/US Payroll Consultant </strong></h6>
                </center>
                 <div class="modal-footer nomargintop">
              </div>
           </div>
         </div>
       </div>
     </div>
    </div>
  </div>
           <!--modal end -->
    <section class="team-section">
         <div class="auto-container">
          <div class="sec-title centered">
               <div class="row clearfix">
                  <div class="news-style-one col-md-4">
                     <div class="inner-box">
                        <h5 class="student-bg" style="font-size:20px;"><strong> Citizen Hack</strong></h5>
                        <center>
                           <div class="image" style="margin-top:-10px;">
                               <img src="<?= AMAZON_URL ?>/ds17/images/header-images/meanhack.jpeg" alt="student">
                           </div>
                        </center>
                        <div class="lower-box" style="background-color:#e4e4e4 !important;">
                           <div class="text">Create tomorrow's solutions today in a 24 hour hackathon and compete with the best of the state</div>
                           <a href="citizen-hack.php" class="theme-btn btn-style-one">Read More</a>
                        </div>
                     </div>
                  </div>
                  <div class="news-style-one col-md-4">
                	<div class="inner-box" style="background-color:#e4e4e4;">
                    <center>
                    <h5 class="student-bg" style="font-size:20px;"><strong> Tech Talks</strong></h5>
                    <div class="image" style="margin-top:-10px;">
                         <img src="<?= AMAZON_URL ?>/ds17/images/header-images/techtalk.jpg" alt="TechTalk" width="50px" height="50px">
                        </div></center>
                        <div class="lower-box" style="background-color:#e4e4e4 !important;">
                        
                           
                            <div class="text"><center>Hear from speakers and interact with experts about the latest happenings in the technology world</center></div>                          
                              <center><a href="tech-talks.php"><button class="theme-btn btn-style-one" type="button">Read More</button></a></center>
                        </div>
                    </div>
                </div>
                  <div class="news-style-one col-md-4">
                     <div class="inner-box">
                        <h5 class="student-bg" style="font-size:20px;"><strong>Hungama</strong></h5>
                        <center>
                           <div class="image" style="margin-top:-10px;">
                               <img src="<?= AMAZON_URL ?>/ds17/images/header-images/culturals.jpg" alt="student" width="50px" height="50px">
                           </div>
                        </center>
                        <div class="lower-box" style="background-color:#e4e4e4 !important;">
                           <div class="text" style="padding: 2px;"><center>All work and no play makes Jack a dull boy :) Come and show off your dance moves across the week</center></div>
                           <a href="hungama.php" class="theme-btn btn-style-one">Read More</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
      </div></section>
                                    
                                  
                                          
                               
              
                
            </div>
        </div>
    </div>
    
    <div class="google-maps container">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d949.6716676258542!2d83.38989772918482!3d17.80641699923931!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a395a454dd25a2d%3A0x6df631db763f2668!2sMiracle+Software+Systems!5e0!3m2!1sen!2sin!4v1512486468336" width="1340" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
   </div>
   
     <section class="subscribe-section">
    	<div class="auto-container">
        	<div class="row clearfix">
            	<!--Column-->
            	<div class="column col-md-7 col-md-12 col-xs-12">
        			<h2>DO YOU WANT TO ATTEND ? <span>REGISTER NOW!</span></h2>
            		<div class="text">The right jobs are looking forward for you in Vizag</div>
                </div>
                <!--Column-->
                <div class="column col-md-5 col-md-12 col-xs-12">
                    <!--Subscribe form-->
                    <div class="subscribe-form">
                        <form method="post" action="#">
                            <div class="form-group">
                  <button type="submit" class="theme-btn" style="width:215px !important;height:60px !important;font-sixe:16px !important;left:170px;border-radius:0px !important" disabled>Registrations Closed</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Sidebar Page Container-->
            
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

</body>
</html>