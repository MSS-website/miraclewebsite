<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="We understand the need for continuous delivery within your organization â€“ and we have helped our customers improve their teams through DevOps.">
      <meta name="author" content="">
      <title>DevOps | Miracle</title>
        <?php include '../../config/Locations.php';?>
        
      <link href="../../css/bootstrap.min.css" rel="stylesheet">
      <link href="../../css/font-awesome.min.css" rel="stylesheet">
      <link href="../../css/main.css" rel="stylesheet">
      <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="../../css/default.css" />
      <link rel="stylesheet" type="text/css" href="../../css/component.css" />
      <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
      <link href="/css/themes.css" rel="stylesheet">
      <link rel="shortcut icon" href="<?= AMAZON_URL ?>/images/favicon.ico">
      
       
        
      
      <style>
          .tinted-image {
         background: 
         /* top, transparent red */
         linear-gradient(
         rgba(0, 0, 0, 0.55), 
         rgba(0, 0, 0, 0.55)
         ),
         /* your image */
         url("<?= AMAZON_URL ?>/images/devops/devops-header.jpg");
         -webkit-background-size: cover;
         -moz-background-size: cover;
         -o-background-size: cover;
         background-size: cover;
          background-position:center;
         }
         
         a{text-decoration:none !important;}
         .contact{border: solid 3px #00aae7 !important;border-radius: 3px !important;
         color: #00aae7 !important;display: inline-block;font-size: 17px;letter-spacing: 1px;
         margin-bottom: 5px;moz-border-radius: 3px;padding: 11px 59px;transition: all 0.5s ease;
         webkit-border-radius: 3px;background:#fff;font-weight:bolder;}
         .contact:hover{color:#00aae7;background: #232527;}
         .h4{color:#fff !important; }
         /* Widgets */
         .widget {background-color: #ffffff;margin-bottom: 10px;position: relative;border-radius: 2px;}
         .widget > .widget-content:first-child,.widget > .widget-image:first-child {
         border-top-right-radius: 2px;border-top-left-radius: 2px;}
         .widget > .widget-content:last-child {border-bottom-right-radius: 2px;border-bottom-left-radius: 2px;}
         .widget,.widget-content {display: block;-webkit-transition: all .1s ease-out;
         transition: all .1s ease-out;}
         
         .widget:active,.widget-content:active {text-decoration: none;-webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, .02);
         box-shadow: 0 1px 3px rgba(0, 0, 0, .02);-webkit-transform: translateY(0);transform: translateY(0);}
         .widget-image {height: 310px;overflow: hidden;position: relative;}
         .widget-image > img {min-width: 787px;}
         .widget-image.widget-image-bottom img {position: absolute;left: 0;bottom: 0;}
         .widget-image.widget-image-sm {height: 270px;}
         .widget-image.widget-image-xs {height: 175px;}
         .widget-image > i {position: absolute;right: 30px;bottom: 30px;color: #ffffff;
         font-size: 70px;opacity: .5;}
         .widget-image-content {position: absolute;top: 0;left: 0;right: 0;bottom: 0;padding: 15px 25px;
         background: rgba(0, 0, 0, .65);}
         .widget-content {padding: 1px;}
         .widget-content.widget-content-mini {padding-top: 7px;padding-bottom: 7px;}
         .widget-content.widget-content-full {padding: 0;}
         .widget-content.widget-content-full-top-bottom {padding-top: 0;padding-bottom: 0;}
         .widget-content .pull-left {margin-right: 20px;}
         .widget-content .pull-right {margin-left: 20px;}
         a.widget-content {display: block;}a.widget-content {display: block;}
         .widget-heading {margin: 10px 0;}
         .widget-icon {display: inline-block;width: 64px;height: 64px;line-height: 60px;
         margin: 5px;font-size: 20px;text-align: center;border-radius: 50%;
         background: rgba(0, 0, 0, .05);}
         .widget-icon.pull-left {margin: 5px 5px 5px 0;}.widget-icon.pull-right {margin: 5px 0 5px 5px;}
         .widget-icon .gi,.widget-icon .hi,.widget-icon .si,.widget-icon .fi {margin-top: -3px;}
         /* Full Background Image */
         img.full-bg {min-height: 100%;min-width: 1280px;width: 100%;height: auto;
         position: fixed;top: 0;left: 0;}
         img.full-bg.full-bg-bottom {top: auto;bottom: 0;}
         @media screen and (max-width: 1280px) {img.full-bg {left: 50%;margin-left: -640px;}}
         /* Content which contains floats */
         .content-float .pull-left {margin: 0 20px 20px 0;}
         .content-float .pull-right {margin: 0 0 20px 20px;}
         .content-float-hor .pull-left {margin-right: 20px;}
         .content-float-hor .pull-right {margin-left: 20px;}
         .themed-background {background-color: #00aae7 !important;}
         .themed-color-dark {color: #454e59 !important;}
         .themed-background-dark {
         background-color: #454e59 !important;
         }
         .breadcrumb {0px !important;}
         .text-dark, .text-dark:hover, a.text-dark, a.text-dark:hover, a.text-dark:focus {
         background-color: #232527;
         color: #fff !important;
         }
         .emerald{
         background-color:#0d416b !important;}
         }
         .list-group-item {
         position: relative;
         display: block;
         padding-top: 10px!important;
         padding-right: 5px!important;
         padding-bottom: 10px!important;
         padding-left: 5px!important;
         margin-bottom: -1px;
         background-color: #fff;
         border: 1px solid #ddd;
         }
        
         .footer-nav-links a:hover,
         .footer-nav-links a:focus {
         color: #ffffff;
         background-color: #0d416b;
         -webkit-box-shadow: 0 2px 3px rgba(0, 0, 0, .46);
         box-shadow: 0 2px 3px rgba(0, 0, 0, .46);
         }
         .footer-nav-links a.social-twitter:hover,
         .footer-nav-links a.social-twitter:focus {
         background-color: #55acee!important;
         }
         .footer-nav-links a.social-facebook:hover,
         .footer-nav-links a.social-facebook:focus {
         background-color: #3b5998!important;
         }
         .footer-nav-links a.social-google-plus:hover,
         .footer-nav-links a.social-google-plus:focus {
         background-color: #dd4b39!important;
         }
         .footer-nav-links a.social-dribbble:hover,
         .footer-nav-links a.social-dribbble:focus {
         background-color: #ea4c89!important;
         }
         .footer-nav-links a.social-youtube:hover,
         .footer-nav-links a.social-youtube:focus {
         background-color: #b31217!important;
         }
         .footer-nav-links a.social-flickr:hover,
         .footer-nav-links a.social-flickr:focus {
         background-color: #ed1983!important;
         }
         .footer-nav-links a.social-linkedin:hover,
         .footer-nav-links a.social-linkedin:focus {
         background-color: #0077b5!important;
         }
         .content-float .pull-right {margin: 0 0 20px 20px;}
         .content-float-hor .pull-left {margin-right: 20px;}
         .content-float-hor .pull-right {margin-left: 20px;}
         .themed-background {background-color: #00aae7 !important;}
         .themed-color-dark {color: #454e59 !important;}
         .themed-background-dark {
         background-color: #454e59 !important;
         }
         .breadcrumb {0px !important;}
         .text-dark, .text-dark:hover, a.text-dark, a.text-dark:hover, a.text-dark:focus {
         background-color: #232527;
         color: #fff !important;
         }
         .emerald{
         background-color:#0d416b !important;}
         }
         .list-group-item {
         position: relative;
         display: block;
         padding-top: 10px!important;
         padding-right: 5px!important;
         padding-bottom: 10px!important;
         padding-left: 5px!important;
         margin-bottom: -1px;
         background-color: #fff;
         border: 1px solid #ddd;
         }
         .micro{
         margin-top:3px !important;
         }
         .footer-nav-links a:hover,
         .footer-nav-links a:focus {
         color: #ffffff;
         background-color: #0d416b;
         -webkit-box-shadow: 0 2px 3px rgba(0, 0, 0, .46);
         box-shadow: 0 2px 3px rgba(0, 0, 0, .46);
         }
         .footer-nav-links a.social-twitter:hover,
         .footer-nav-links a.social-twitter:focus {
         background-color: #55acee!important;
         }
         .footer-nav-links a.social-facebook:hover,
         .footer-nav-links a.social-facebook:focus {
         background-color: #3b5998!important;
         }
         .footer-nav-links a.social-google-plus:hover,
         .footer-nav-links a.social-google-plus:focus {
         background-color: #dd4b39!important;
         }
         .footer-nav-links a.social-dribbble:hover,
         .footer-nav-links a.social-dribbble:focus {
         background-color: #ea4c89!important;
         }
         .footer-nav-links a.social-youtube:hover,
         .footer-nav-links a.social-youtube:focus {
         background-color: #b31217!important;
         }
         .footer-nav-links a.social-flickr:hover,
         .footer-nav-links a.social-flickr:focus {
         background-color: #ed1983!important;
         }
         .footer-nav-links a.social-linkedin:hover,
         .footer-nav-links a.social-linkedin:focus {
         background-color: #0077b5!important;
         }
      </style>
      <style type="text/css">
         .display-1 {font-size: 3rem !important;}
         .card {overflow:hidden;height:100% !important;}
         .card-block .rotate {z-index: 8;float: right;height: 100% !important;}
         .card-block .rotate i{color: rgba(20, 20, 20, 0.15);position:absolute;left:0;
         left: auto;right: -10px;bottom: 0;
         display: block;-webkit-transform: rotate(-44deg);
         -moz-transform: rotate(-44deg);-o-transform: rotate(-44deg);
         -ms-transform: rotate(-44deg);transform: rotate(-44deg);
         }
      </style>
      <style>
         a{text-decoration:none !important;}
         .contact{border: solid 3px #00aae7 !important;border-radius: 3px !important;
         color: #00aae7 !important;display: inline-block;font-size: 17px;letter-spacing: 1px;
         margin-bottom: 5px;moz-border-radius: 3px;padding: 11px 59px;transition: all 0.5s ease;
         webkit-border-radius: 3px;background:#fff;font-weight:bolder;}
         .contact:hover{color:#00aae7;background: #232527;}
         .h4{color:#fff !important; }
         /* Widgets */
         .widget {background-color: #ffffff;margin-bottom: 10px;position: relative;border-radius: 2px;}
         box-shadow: 0 1px 3px rgba(0, 0, 0, .02);-webkit-transform: translateY(0);transform: translateY(0);}
         .widget-image {height: 310px;overflow: hidden;position: relative;}
         .widget-image > img {min-width: 787px;}
         .widget-image.widget-image-bottom img {position: absolute;left: 0;bottom: 0;}
         .widget-image.widget-image-sm {height: 270px;}
         .widget-image.widget-image-xs {height: 175px;}
         .widget-image > i {position: absolute;right: 30px;bottom: 30px;color: #ffffff;
         font-size: 70px;opacity: .5;}
         .widget-image-content {position: absolute;top: 0;left: 0;right: 0;bottom: 0;padding: 15px 25px;
         background: rgba(0, 0, 0, .65);}
         .widget-content {padding: 15px;}
         .widget-content > a: {padding: 15px;}
         .widget-content.widget-content-mini {padding-top: 7px;padding-bottom: 7px;}
         .widget-content.widget-content-full {padding: 0;}
         .widget-content.widget-content-full-top-bottom {padding-top: 0;padding-bottom: 0;}
         .widget-content .pull-left {margin-right: 20px;}
         .widget-content .pull-right {margin-left: 20px;}
         .widget-heading {margin: 10px 0;}
         .widget-icon {display: inline-block;width: 64px;height: 64px;line-height: 60px;
         margin: 5px;font-size: 28px;text-align: center;border-radius: 50%;
         background: rgba(0, 0, 0, .05);}
         .widget-icon.pull-left {margin: 5px 5px 5px 0;}.widget-icon.pull-right {margin: 5px 0 5px 5px;}
         .widget-icon .gi,.widget-icon .hi,.widget-icon .si,.widget-icon .fi {margin-top: -3px;}
         /* Full Background Image */
         img.full-bg {min-height: 100%;min-width: 1280px;width: 100%;height: auto;
         position: fixed;top: 0;left: 0;}
         img.full-bg.full-bg-bottom {top: auto;bottom: 0;}
         @media screen and (max-width: 1280px) {img.full-bg {left: 50%;margin-left: -640px;}}
         /* Content which contains floats */
         .content-float .pull-left {margin: 0 20px 20px 0;}
         .content-float .pull-right {margin: 0 0 20px 20px;}
         .content-float-hor .pull-left {margin-right: 20px;}
         .content-float-hor .pull-right {margin-left: 20px;}
         
         themed-background {
   background-color: #2368a0
!important;
}
         .themed-background-info {
         background-color: #5cafde !important;
         }
         .themed-color-dark {color: #454e59 !important;}
         .themed-background-dark {
         background-color: #454e59 !important;
         }
         .breadcrumb {margin:0px !important;}
         .breadcrumb li,.breadcrumb li a{color:#FFF !important;}
         .text-dark, .text-dark:hover, a.text-dark, a.text-dark:hover, a.text-dark:focus {
         background-color: #232527;
         color:#fff;
         }
         .card {border:0px !important;} 
         .emerald{background-color:#0d416b !important;width:100%;}
         .list-inline {
         margin-left: 0px!important;
         list-style: none;
         }
         .effect:hover{
            top:-5px;
         }
      </style>
      <style>
         .tabb1{
              height:40px;background-color:#2368a0;color:#fff;padding:7px;
          }
          .margiT{
              margin-top: 4px;
          }
                </style>
   </head>
   <!--/head-->
   <?php include '../../header.php';?>
   <body>
      <section id="services" >
       
        
         <div class="emerald tinted-image">
            <div class="container ">
               <div class="row">
                  <br><br><br>
                  <div class="col-sm-6 text-left">
                     <h1 class="heavy micro">Our DevOps Offerings</h1>
                      <br>
                  </div>
                  <div class="col-sm-6 text-right">
                     <ul class="breadcrumb pull-right">
                        <li><a href="../../">Home</a></li>
                        <li><a href="../">Technologies</a></li>
                        <li><a href="../devops/">DevOps</a></li>
                        <li class="active">DevOps Offerings</li>
                        
                     </ul>
                  </div>
               </div>
              
            </div>
            </div>
         
      </section>
       <section id="services" class="container">
         <div class="row">
         <div class="col-sm-9">
        
            <div class="row">
               <div class="col-sm-12">
                  <br>
                  <p class="methodText">We understand the need for continuous delivery within your organization and
we have helped our customers improve their teams through DevOps. Through our
value added services we can help you asses your organization's current state and
suggest best practices and processes that will help you enable yourselves for
tomorrow's speed.</p>
                  
               </div>
             <div class="row">
         <div class="col-sm-12">
             <img src="<?= AMAZON_URL ?>/images/devops/DevOps.png" alt="DevOps" class="img-responsive">
             </div>
             </div>
                <!--<div class="row">
                <div class="col-sm-12">
                    <div class="col-sm-8">
                        <div class="row">
                            <div class="col-sm-6">
                           <center><br> <img src="images/ValueDevOps.png" alt="image" class="img-responsive" height="100" width="100">
                            <h5 class="heavy">â€œValue of DevOpsâ€� Workshop</h5>
                            <p>Advocate the value of automation to business and teams</p></center>
                        </div>
                        <div class="col-sm-6">
                           <center> <br><img src="images/OrganizationAssessment.png" alt="image" class="img-responsive" height="100" width="100">
                             <h5 class="heavy">Organization State and Assessment</h5>
                            <p>Analyze technology and state of your organizationâ€™s delivery</p></center>
                        </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                           <center> <img src="images/Architecture.png" alt="image" class="img-responsive" height="100" width="100"> 
                           <br> <h5 class="heavy">Solution Architecture and Implementation</h5>
                            <p>Implement a DevOps framework that scales across teams</p></center>
                        </div>
                        <div class="col-sm-6">
                          <center>  <img src="images/ProductValidation.png" alt="image" class="img-responsive" height="100" width="100">
                           <br> <h5 class="heavy">Product Evaluation and Training</h5>
                            <p>Bring together the required technology stack to suite your needs</p></center>
                        </div>
                        </div>
                        
                    </div><br><br><br><br>
                    <div class="col-sm-4">
                        <div style="background-color:#00aae7;" class="tabb1 margiT">
                            <center>Application Monitoring</center>
                        </div>
                        <div style="background-color:#00aae7;" class="tabb1 margiT">
                            <center>Release Management</center>
                        </div>
                        <div style="background-color:#00aae7;" class="tabb1 margiT">
                            <center>Infrastructure Automation</center>
                        </div>
                        <div class="tabb1 margiT">
                            <center>Automated Tests</center>
                        </div>
                        <div class="tabb1 margiT">
                            <center>Continuous Integration</center>
                        </div>
                        <div style="background-color:#232527;" class="tabb1 margiT">
                            <center>Code Analysis and Unit Tests</center>
                        </div>
                        <div style="background-color:#232527;" class="tabb1 margiT">
                            <center>Developer Culture</center>
                        </div>
                        <div style="background-color:#232527;" class="tabb1 margiT">
                            <center>Code Versioning</center>
                        </div>
                        <div style="background-color:#232527;" class="tabb1 margiT">
                            <center>Application Development</center>
                        </div>
                        
                    </div>
                </div>
                </div>-->
                
            
            <div class="col-sm-12">
                <h1 class="heavy">Our Engagement Cycle</h1>
                <p class="methodText">Change is always difficult, and changing to a new model that allows you to move
faster will be a tough journey. Our teams can help you navigate through
roadblocks and reach your goal faster.</p>

                </div>
             <div class="row" style="margin-left:15px; margin-right:15px;">
                 <div class="col-sm-12">
                     <div class="row" >
              <div clas="col-sm-12">
                 <div class="col-sm-1 tabd">
                   <center class="marginT"><strong>A</strong></center>
                 </div>
                <div class="col-sm-11 tabd2">
                   <p class="methodText"><strong>Current Organization State</strong> - Assess Your Current application lite-cycle technology stack, and organizational needs</p>
                 </div>
              </div>
          </div>
           <div class="row" style="margin-top:14px;">
              <div clas="col-sm-12">
                 <div class="col-sm-1 tabd">
                   <center class="marginT"><strong>B</strong></center>
                 </div>
                <div class="col-sm-11 tabd2"><p class="methodText"><strong>DevOps Roadmap Discussion</strong> - Establish a strategy and roadmap for the organization to adopt a DevOps culture based on phase #A results</p>
                 </div>
              </div>
          </div>
          
          <div class="row" style="margin-top:14px;">
              <div clas="col-sm-12">
                 <div class="col-sm-1 tabd">
                   <center class="marginT"><strong>C</strong></center>
                 </div>
                <div class="col-sm-11 tabd2"><p class="methodText"><strong>Implement DevOps Pilot</strong> - Establish a framework by integrating the required technology enablers with existing tools and culture</p>
                     
                 </div>
              </div>
          </div>
          <div class="row" style="margin-top:14px;">
              <div clas="col-sm-12">
                 <div class="col-sm-1 tabd">
                  <center class="marginT"><strong>D</strong></center>
                 </div>
                 <div class="col-sm-11 tabd2"><p class="methodText"><strong>Campaign DevOps Culture</strong> - Conduct workshops to gain buy-in and trust from all the involved stakeholders of the organization</p>
                   
                 </div>
              </div>
          </div>
          <div class="row" style="margin-top:14px;">
              <div clas="col-sm-12">
                 <div class="col-sm-1 tabd">
                    <center class="marginT"><strong>E</strong></center>
                 </div>
                 <div class="col-sm-11 tabd2"><p class="methodText"><strong>Solution Implementation</strong> - Implement End-to-End DevOps solution based on the above results and support with Managed Services</p>
                     
                 </div>
              </div>
          </div>
                 </div>
             </div>
          
           
      <style>
          
          .tabd{
              height:75px;background-color:#2368a0;color:#fff;
          }
          .tabd2{
              background-color:#eee;height:75px;padding:15px;
          }.marginT{
              margin-top: 8px;font-size: 40px;
          }
          .lipad{padding-left: 26px;}
      </style>
            
       
                     <div class="col-sm-12">
                         <h1 class="heavy">Our Success Stories</h1>
                         
                     </div>
              </div>
                <div class="row">
               <div class="effect col-sm-4">
                  <div class="card">
  <a class="linkText1" target="_blank"  href="http://www.miraclesoft.com/why/sstory3.php"><img height="130px" src="<?= AMAZON_URL ?>/images/b2b/healthleader.jpg" alt="Avatar" style="width:100%">
  <div class="container" style="background-color:#eee;">
    
    <p><center><strong>Migration from <br>TPEC to WTX for <br>Global Healthcare Leader</strong></center></p> 
  </div>
  </a>
</div>
               </div> 
                <div class="effect col-sm-4">
                    <div class="card">
  <a class="linkText1"  target="_blank" href="http://www.miraclesoft.com/why/sstory6.php"><img height="130px" src="<?= AMAZON_URL ?>/images/b2b/logistics.jpg" alt="Avatar" style="width:100%">
  <div class="container" style="background-color:#eee;">
    
     <p><center><strong>Next Generation ESB/B2B <br>Gateway for Global Logistics<br> Provider</strong></center></p> 
  </div>
  </a>
</div>
                </div>
                 <div class="effect col-sm-4">
                     <div class="card">
 <a class="linkText1" target="_blank" href="http://www.miraclesoft.com/why/sstory7.php"> <img height="130px" src="<?= AMAZON_URL ?>/images/devops/food262-130.png" alt="Avatar" style="width:100%">
  <div class="container" style="background-color:#eee;">
     <p><center><strong>Enhanced Visibility <br>and Control for <br>Global Food Distributor </strong></center> </p>  </div>
  </a>
</div>
                 </div>
            </div>
              <div class="row">
                <div class="col-sm-12">
                    <h1 class="heavy">Tools and Technology</h1>
                   
</div>
       </div>
               <div class="row">
                    <div class="col-sm-4">
                   <div style="background-color:#0d416b !important;" class="widget-content themed-background text-light-op">
                     <strong><font color="#fff">Release Automation</font></strong>
                  </div>
                  <div class="widget box">
                     <div class="col-sm-12 widget-content" style="border: 1px solid #eee; background-color:#eee;padding:3px;" >
                          <ul class="lipad col-sm-12">
                         <li>Electric Cloud</li>
                         <li>CA Release Automation</li>
                         <li>Automic</li>
                         <li>Urban Code Release</li>
                        
                         </ul>
                     </div>
                  </div>
               </div>
                <div class="col-sm-4">
                   <div style="background-color:#00aae7 !important;" class="widget-content themed-background text-light-op">
                     <strong><font color="#fff">Log Management</font></strong>
                  </div>
                  <div class="widget box">
                     <div class="col-sm-12 widget-content" style="border: 1px solid #eee; background-color:#eee;padding:3px;" >
                          <ul class="lipad col-sm-12">
                         <li>Splunk</li>
                         <li>Sumo Logic</li>
                         <li>Logstash</li>
                         <li>Data Dog</li>
                        
                         </ul>
                         
                     </div>
                  </div>
               </div>
               <div class="col-sm-4">
                   <div style="background-color:#2368a0 !important;" class="widget-content themed-background text-light-op">
                     <strong><font color="#fff">Build Management</font></strong>
                  </div>
                  <div class="widget box">
                     <div class="col-sm-12 widget-content" style="border: 1px solid #eee; background-color:#eee;padding:3px;" >
                          <ul class="lipad col-sm-12">
                         <li>Ant</li>
                         <li>Grunt</li>
                         <li>Maven</li>
                         <li>Gradle</li>
                         
                         </ul>
                         
                     </div>
                  </div>
               </div>
                 <div class="col-sm-4">
                   <div style="background-color:#0d416b !important;" class="widget-content themed-background text-light-op">
                     <strong><font color="#fff">Source Code Management</font></strong>
                  </div>
                  <div class="widget box">
                     <div class="col-sm-12 widget-content" style="border: 1px solid #eee; background-color:#eee;padding:3px;" >
                          <ul class="lipad col-sm-12">
                         <li>GitHub</li>
                         <li>BitBucket</li>
                         <li>Subversion</li>
                         
                         </ul>
                     </div>
                  </div>
               </div>
                      
               
               <div class="col-sm-4">
                   <div style="background-color:#00aae7 !important;" class="widget-content themed-background text-light-op">
                     <strong><font color="#fff">Automated Testing </font></strong>
                  </div>
                  <div class="widget box">
                     <div class="col-sm-12 widget-content" style="border: 1px solid #eee; background-color:#eee;padding:3px;" >
                          <ul class="lipad col-sm-12">
                         <li>Sauce Labs</li>
                         <li>Selenium</li>
                         <li>Protractor</li>
                         
                         </ul>
                         
                     </div>
                  </div>
               </div>
               <div class="col-sm-4">
                   <div style="background-color:#2368a0 !important;" class="widget-content themed-background text-light-op">
                     <strong><font color="#fff">Configuration Management </font></strong>
                  </div>
                  <div class="widget box">
                     <div class="col-sm-12 widget-content" style="border: 1px solid #eee; background-color:#eee;padding:3px;" >
                          <ul class="lipad col-sm-12">
                         <li>Chef</li>
                         <li>Puppet</li>
                         <li>Ansible</li>
                         
                         </ul>
                        
                     </div>
                  </div>
               </div>
              <div class="col-sm-4">
                   <div style="background-color:#0d416b !important;" class="widget-content themed-background text-light-op" >
                     <strong><font color="#fff">Continuous Integration</font></strong>
                  </div>
                  <div class="widget box">
                     <div class="col-sm-12 widget-content" style="border: 1px solid #eee; background-color:#eee;padding:3px;" >
                        <ul class="lipad col-sm-12">
                         <li>Jenkins</li>
                         <li>Urban Code Deploy</li>
                         <li>Concourse</li>
                         <li>Bamboo</li>
                         <li>Travis CI</li>
                         
                         </ul>
                         
                     </div>
                  </div>
               </div>
               <div class="col-sm-4">
                   <div style="background-color:#00aae7 !important;" class="widget-content themed-background text-light-op">
                     <strong><font color="#fff">Performance Monitoring</font></strong>
                  </div>
                  <div class="widget box">
                     <div class="col-sm-12 widget-content" style="border: 1px solid #eee; background-color:#eee;padding:3px;" >
                          <ul class="lipad col-sm-12">
                         <li>Nagios</li>
                         <li>New Relic</li>
                         <li>App Dyanmics</li>
                         <li>Dynatrace</li>
                         <li>IBM APM</li>
                         
                         </ul>
                     </div>
                  </div>
               </div>
              
               <div class="col-sm-4">
                   <div style="background-color:#2368a0 !important;" class="widget-content themed-background text-light-op">
                     <strong><font color="#fff">Team Collaboration </font></strong>
                  </div>
                  <div class="widget box">
                     <div class="col-sm-12 widget-content" style="border: 1px solid #eee; background-color:#eee;padding:3px;" >
                          <ul class="lipad col-sm-12">
                         <li>HipChat</li>
                         <li>Trello</li>
                         <li>Slack</li>
                        
                         </ul>
                         <br>
                         <br>
                     </div>
                  </div>
               </div>
               </div>
              <div class="row col-sm-12">
           <br> <p class="methodText">
               For more information about <strong>Miracle's DevOps and Automation Offerings</strong> reach out to <strong><a href="mailto:devops@miraclesoft.com" class="linkText">devops@miraclesoft.com</a></strong>
            </p>
            
         </div>
         </div>
          <div class="col-sm-3 sidebar pull-right">
            <br>
            <div class="mini-submenu">
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
            </div>
            <div class="list-group">
               <style type="text/css">
                  .list-group-item-1 {
                  position: relative;
                  display: block;
                  padding: 10px 15px;
                  margin-bottom: -1px;
                  background-color: #000;
                  }
                  .btn-primary {
                  color: #fff!important;
                  background-color: #00aae7!important;
                  border-color: #00aae7!important;
                  }
               </style>
               <a href="../devops/" class="list-group-item-1">
                  <div>
                     <center><strong><font size="3%!important" color="#fff"  onMouseOut="this.style.color='#fff'" onMouseOver="this.style.color='#b7b2b3'">&nbsp; DevOps and Automation
                        </font></strong>
                     </center>
                  </div>
               </a>
               <a href="#" class="list-group-item">
                  <div >
                     <center><strong><font size="3%!important" color="#00aae7">&nbsp;Our Service Offerings
                        </font></strong>
                     </center>
                  </div>
               </a>
               <a href="mdashfor-iib.php" class="list-group-item">
                  <div>
                     <center><strong><font size="3%!important" color="#000">&nbsp; mDash for IIB
                        </font></strong>
                     </center>
                  </div>
               </a>
               <a href="agile.php" class="list-group-item">
                  <div>
                     <center>
                     <strong><font size="3%!important" color="#000">&nbsp; An Agile Enterprise	
                     </font></strong>
                     <center>
                  </div>
               </a>
               
               <a href="http://www.miraclesoft.com/services/quality-assurance/" class="list-group-item" target="_blank">
                  <div>
                     <center>
                     <strong><font size="3%!important" color="#000">&nbsp; Continuous Testing
                     </font></strong>
                     <center>
                  </div>
               </a>
                  <a href="moreresources.php" class="list-group-item">
                  <div>
                     <center>
                     <strong><font size="3%!important" color="#000">&nbsp;More Resources
                     </font></strong>
                     <center>
                  </div>
               </a>
               <br>
               <div >
                  <div class="widget-content themed-background text-light-op">
                     <center><strong><font color="#ffffff">Case Study</font></strong></center>
                  </div>
                  <div class="widget box">
                     <div class="widget-content" id="check" >
                        <style>
                        .card {
    box-shadow: 0 0 0 0 rgba(0,0,0,0.2);
    transition: 0.3s;
   
   
    border:2px solid #232527;
}



img {
    border-radius: 0 0 0 0;
}

.container {
    padding: 2px 16px;
}
                           #check {
                           background-image:url('<?= AMAZON_URL ?>/images/devops/bottling.png'); 
                           background-size: 260px 140px;
                           opacity:0.6;
                           }
                           .site-footer {
                           padding-top: 11px !important;
                           padding-bottom: 40px !important;
                           }
                           .widget {
                           margin-bottom: 0px!important;
                           }
                           .footer-nav-links a {
                           display: block !important;
                           padding: 0 7px !important;
                           width: 30px !important;
                           height: 40px !important;
                           line-height: 40px !important;
                           text-align: center !important;
                           border-radius: 3px !important;
                           background-color: rgba(0, 0, 0, .5) !important;
                           }
                           .footer-nav a {
                           color: #ffffff !important;
                           opacity: 1 !important;
                           }
                           .footer-nav-links a {
                           display: block !important;
                           padding: 0 7px !important;
                           min-width: 30px !important;
                           height: 30px !important;
                           line-height: 30px !important;
                           text-align: center !important;
                           border-radius: 3px !important;
                           background-color: rgba(0, 0, 0, .5) !important;
                           }
                           .footer-nav a {
                           color: #ffffff !important;
                           }
                           .list-inline> li {
                           display: inline-block;
                           padding-top: 10px !important;
                           padding-right: 10.2px !important;
                           padding-left: 0em!important;
                           }
                           .list-inline> span {
                           display: inline-block;
                           padding-top: 10px !important;
                           padding-right: 0px !important;
                           padding-left: 0.2em!important;
                           }
                           .widget-hover:hover
                           {
                           background-color:#0d416b !important;
                           }
                           .register-hover:hover
                           {
                           background-color:#232527;
                           }
                           label
                           {
                           font-size:15px !important;
                           }
                           .linkText1:hover{
                              color:#00aae7 !important;
                           }
                           
                           .linkText1{color:#232527 !important;}
                        </style>
                        <center>
                           <a href="#">
                              <h3 class="heavy"></h3>
                              <p><font size="3px"color="#fff"><style="opacity:0!important;"><strong>Reduced spin-up time for agile MFT Changes using IBM Sterling Graphic Process Manager </strong></style></font></p>
                           </a>
                        </center>
                     </div>
                  </div>
                  <div class="widget-content  text-dark register-hover">
                     <a class="linkText1" href="http://www.miraclesoft.com/why/gpm-b2b.php" target="_blank">
                        <center><strong><font color="#fff"  onMouseOut="this.style.color='#fff'" onMouseOver="this.style.color='#b7b2b3'">Read Today</font></strong></center>
                     </a>
                  </div>
                  </a>
               </div>
               <div>
                  <ul class="footer-nav footer-nav-links list-inline">
                     <li><a href="https://www.facebook.com/miracle45625" target="_blank" class="social-facebook" data-toggle="tooltip" title="" data-original-title="Like our Facebook page"><i class="fa fa-fw fa-facebook"></i></a></li>
                     <li><a href="https://twitter.com/Team_MSS" target="_blank" class="social-twitter" data-toggle="tooltip" title="" data-original-title="Follow us on Twitter"><i class="fa fa-fw fa-twitter"></i></a></li>
                     <li><a href="https://plus.google.com/105262074634409319991/" target="_blank" class="social-google-plus" data-toggle="tooltip" title="" data-original-title="Like our Google+ page"><i class="fa fa-fw fa-google-plus"></i></a></li>
                     <li><a href="https://www.linkedin.com/company/miracle-software-systems-inc" target="_blank" class="social-linkedin" data-toggle="tooltip" title="" data-original-title="Follow us on LinkedIn"><i class="fa fa-linkedin"></i></a></li>
                     <li><a href="https://www.flickr.com/photos/team_miracle" target="_blank" class="social-flickr" data-toggle="tooltip" title="" data-original-title="Follow us on LinkedIn"><i class="fa fa-flickr"></i></a></li>
                     <span><a href="https://www.youtube.com/c/Team_MSS" target="_blank" class="social-youtube" data-toggle="tooltip" title="" data-original-title="Watch our videos on YouTube"><i class="fa fa-youtube-play"></i></a><span>
                  </ul>
               </div>
              <span data-toggle="collapse">
                    <div class="widget">
                   <a href="mailto: devops@miraclesoft.com" > <div class="widget-content widget-hover themed-background text-light-op" style="margin-top:7px">
                            <center><strong><font color="#fff">
                                Contact Us</font></strong></center>
                        </div></a>
           </div>
          </span>
            </div>
            <div class="col-sm-3">
               <br>
            </div>
         </div></div>
         </div>
           <!-- <div class="row">
                <br>
                <div class="col-sm-1"></div>
                <div class="col-sm-2">
                    <center> <img src="images/cloud.png" class="img-responsive">
                    <h5>Hybrid<br> Cloud</h5></center> 
                </div>
                <div class="col-sm-2">
                    <center> <img src="images/mobile.png" class="img-responsive">
                    <h5>Enterprise Mobility</h5></center> 
                </div>
                <div class="col-sm-2">
                    <center><img src="images/collobiration.png" class="img-responsive">
                     <h5>Portal and Collaboration</h5></center> 
                </div>
                <div class="col-sm-2">
                    <center><img src="images/developement.png" class="img-responsive">
                     <h5>Application Development</h5></center> 
                </div>
                <div class="col-sm-2">
                    <center><img src="images/analytics.png" class="img-responsive">
                   <h5>BI, Big Data and Analytics</h5></center> 
                </div>
                <div class="col-sm-1"></div>
                <br>
            </div>-->
           
         
         <link rel="stylesheet" href="../../css/box.css">
         
         <script src="js/query.js"></script>
         <script src="js/bootstrap.js"></script>
         
         
         <script src="js/jquery-2.2.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        
        <script src="js/plugins.js"></script>
        
        <script src="js/app.js"></script>
         
         <br>
         
      </section>
      <!--/#about-us-->
      <?php include '../../footer.php';?>
   </body>
</html>