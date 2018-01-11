<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="DevOps Web Portal for managing the lifecycle of IBM Integration Bus artifacts. Through this dashboard actions like build, deploy and testing of their work">
      <meta name="author" content="">
      <title>Devops | Miracle</title>
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
       .glyphicon{
          color:rgba(255,255,255,0.7);
          font-size:40px;
       }
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
         label {
         font-weight: 600;
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
         
         .themed-background {background-color: #00aae7 ;}
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
        .text-light{
    color: #ffffff !important; }
    .widget-heading {
    margin: 10px 0 !important;
}

      </style>
   </head>
   <!--/head-->
   <?php include '../../header.php';?>
   <body>
      <section id="services" >
         <div class="emerald tinted-image">
            <div class="container ">
               <div style="margin-bottom:-13px;" class="row">
                  <br><br>
                  <div class="col-sm-6 text-left" style="margin-top:16px;"> 
                     <h1 class="heavy micro">DevOps and Automation Offerings</h1>
                     <br>
                  </div>
                 
                  <div class="col-sm-6 text-right" style="margin-top:24px;">
                     <ul class="breadcrumb pull-right">
                        <li><a href="../../">Home</a></li>
                        <li><a href="../">Technologies</a></li>
                        <li class="active">DevOps and Automation</li>
                     </ul>
                  </div>
               </div>
            </div>
              <br>
            </div>
       
      </section>
      <section id="services" class="container">
         <div class="row">
         <div class="col-sm-9">
            <div class="row">
               <div class="col-sm-12">
                  <br>
                  <p class="methodText">With consumer demand increasing every day, being able to move rapidly and flexibly has changed from being an advantage to becoming mission critical. Today's enterprise needs to be able to make changes rapidly, delivery with the highest quality and give digital consumers what they want, when they want it. For
all this to happen, it is absolutely critical for an organization to adopt DevOps principles.</p>
               </div>
              
                   <div class="col-sm-12">
                          <div class="col-sm-4">
                           <center><img src="<?= AMAZON_URL ?>/images/devops/continuous.png" alt="continuous" class="img-responsive">
                           <h3 class="heavy"><strong>Continuous</strong></h3>
                            <p>Deliver new features rapidly to your consumers</p></center>
                       </div>
                       <div class="col-sm-4">
                           <center><img src="<?= AMAZON_URL ?>/images/devops/dollarnote.png" alt="reduce" class="img-responsive">
                           <h3 class="heavy"><strong>Reduce</strong></h3>
                           <p>Bring down costs by improving collaboration</p></center>
                       </div>
                       <div class="col-sm-4">
                           <center><img src="<?= AMAZON_URL ?>/images/devops/quality2.png" alt="Quality" class="img-responsive">
                           <h3 class="heavy"><strong>Quality</strong></h3>
                            <p>Improve your delivery quality through automation</p></center>
                       </div>
                </div>
            </div>
        
             
          <p class="methodText">Through automating processes, increasing communication and improving visibility an organization can achieve reduced costs, higher quality and happier consumers. At Miracle, we have helped customers deliver applications, services and data for over 20 years and understand the need for agility. Our teams can help you realize the value of a true DevOps culture and implement a scalable framework that can be implemented across your teams.</p>
           
          <div class="row col-sm-12">
            <p class="methodText">
               For more information regarding <strong>Miracle's DevOps and Automation Offerings</strong> please reach out to <strong><a href="mailto:devops@miraclesoft.com" class="linkText">devops@miraclesoft.com</a></strong>
            </p>
            
         </div>
          <div class="row">
               <div class="col-sm-12">
                  <h1 class="heavy">Our Success Stories</h1>
               </div>
            </div>
            <div class="row">
               <div class="effect col-sm-4">
                  <div class="card">
  <a class="linkText1" target="_blank"  href="http://www.miraclesoft.com/why/sstory3.php"><img height="130px" src="<?= AMAZON_URL ?>/images/b2b/healthleader.jpg" alt="Avatar" style="width:100%">
  <div class="container" style="background-color:#eee;">
    
    <p><center><strong>Migration from <br>TPEC to WTX for Global<br> Healthcare Leader</strong></center></p> 
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
     <p><center><strong>Enhanced Visibility <br>and Control for <br>Global Food Distributor </strong></center></p> 
  </div>
  </a>
</div>
                 </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="heavy">Questions to be asked</h1>
                </div>
            </div>
           <div class="row">
              <div class="col-sm-4">
                  <div class="widget box">
                           <div class="widget-content" id="check1" >
                        <center>
                           
                              <h2 class="widget-heading text-light"><strong>Demand </strong></h2>
                              <p><font color="#ffffff"><style="opacity:0!important;">Is your business demanding more <strong>rapid</strong> and <strong>frequent</strong> product releases that requires an agile and continuous methodology? </style></font></p>
                         
                        </center>
                     </div>
                  </div>
              </div>
                <div class="col-sm-4">
                  <div class="widget box">
                           <div class="widget-content" id="check2" >
                        <center>
                           
                              <h2 class="widget-heading text-light"><strong><font color="#ffffff">Environments</font> </strong></h2>
                              <p><font color="#ffffff"><style="opacity:0!important;">Do you regularly have <strong>environment shift</strong> which causes 'It works in Development' problems for your products? </style></font></p>
                        </center>
                     </div>
                  </div>
              </div>
               <div class="col-sm-4">
                  <div class="widget box">
                           <div class="widget-content" id="check3" >
                        <center>
                         
                              <h2 class="widget-heading text-light"><strong><font color="#ffffff">Quality</font></strong></h2>
                              <p><font color="#ffffff"><style="opacity:0!important;">Are you loosing time because of last-minute bugs due to the QA Teams being brought in very late in the application life cycle?</style></font></p>
                         
                        </center>
                     </div>
                  </div>
              </div>
           </div>
           <div class="row">
              <div class="col-sm-4">
                  <div class="widget box">
                           <div class="widget-content" id="check4" >
                        <center>
                          
                              <h2 class="widget-heading text-light"><strong><font color="#232527">Testing</font> </strong></h2>
                              <p><font color="#232527"><style="opacity:0!important;">Are manual testing processes leading to roadblocks and delivery scalability in your application pipelines? </style></font></p>
                          
                        </center>
                     </div>
                  </div>
              </div>
                <div class="col-sm-4">
                  <div class="widget box">
                           <div class="widget-content" id="check5">
                        <center>
                         
                              <h2 class="widget-heading text-light"><strong><font color="#ffffff">Infrastructure</font></strong></h2>
                              <p><font color="#ffffff"><style="opacity:0!important;">Has provisioning and replicating infrastructure become a roadblock for development agility?</style></font> </p>
                          
                        </center>
                     </div>
                  </div>
              </div>
               
               
             
               <div class="col-sm-4">
                  <div class="widget box">
                           <div class="widget-content" id="check6" >
                        <center>
                          
                              <h2 class="widget-heading text-light"><strong><font color="#ffffff">Integration</font></strong></h2>
                              <p><font color="#ffffff"><style="opacity:0!important;">  Is there a lack of integration between the tools in your application pipelines which causes delays? </style></font></p>
                         
                        </center>
                     </div>
                  </div>
              </div>
           </div>
           <div class="row">
              <div class="col-sm-4">
                  <div class="widget box">
                           <div class="widget-content" id="check7" >
                        <center>
                           
                              <h2 class="widget-heading text-light"><strong><font color="#ffffff">Developers</font></strong></h2>
                              <p><font color="#ffffff"><style="opacity:0!important;"> Are you developers struggling to innovate at speed?</style></font></p>
                          
                        </center>
                     </div>
                  </div>
              </div>
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
               <a href="#" class="list-group-item-1">
                  <div>
                     <center><strong><font size="3%!important" color="#fff"  onMouseOut="this.style.color='#fff'" onMouseOver="this.style.color='#b7b2b3'">&nbsp; DevOps and Automation
                        </font></strong>
                     </center>
                  </div>
               </a>
               <a href="service-offerings.php" class="list-group-item">
                  <div >
                     <center><strong><font size="3%!important" color="#000">&nbsp;Our Service Offerings
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
                           background-size: cover;
                           opacity:0.9;
                           background-repeat:no-repeat;
                           
                           }
                           #check1 {
                           background-repeat:no-repeat;
                           /* top, transparent red */
         background: 
         /* top, transparent red */
         linear-gradient(
         rgba(0, 0, 0, 0.55), 
         rgba(0, 0, 0, 0.55)
         ),
         /* your image */
         url("<?= AMAZON_URL ?>/images/devops/one.jpeg");
         -webkit-background-size: cover;
         -moz-background-size: cover;
         -o-background-size: cover;
         background-size: cover;
         background-position:center;
                           }
                           
                            #check2 {
                          
                            background-repeat:no-repeat;
                           /* top, transparent red */
         background: 
         /* top, transparent red */
         linear-gradient(
         rgba(13, 65, 107, 0.70), 
         rgba(13, 65, 107, 0.70)
         ),
         /* your image */
         url("<?= AMAZON_URL ?>/images/devops/environment.jpeg");
         -webkit-background-size: cover;
         -moz-background-size: cover;
         -o-background-size: cover;
         background-size: cover;
         background-position:center;
                           }
                           
                            #check3 
                           {
                          
                            background-repeat:no-repeat;
                           /* top, transparent red */
         background: 
         /* top, transparent red */
         linear-gradient(
        rgba(0, 0, 0, 0.55), 
         rgba(0, 0, 0, 0.55)
         ),
         /* your image */
         url("<?= AMAZON_URL ?>/images/devops/quality.jpg");
         -webkit-background-size: cover;
         -moz-background-size: cover;
         -o-background-size: cover;
         background-size: cover;
         background-position:center;
                           }
                           
                            #check4 
                          {
                          
                            background-repeat:no-repeat;
                           /* top, transparent red */
         background: 
         /* top, transparent red */
         linear-gradient(
         rgba(255, 255, 255, 0.90), 
         rgba(255, 255, 255, 0.90)
         ),
         /* your image */
         url("<?= AMAZON_URL ?>/images/devops/hands-people-woman-working.jpg");
         -webkit-background-size: cover;
         -moz-background-size: cover;
         -o-background-size: cover;
         background-size: cover;
         background-position:center;
                           }
                            #check5 
                           {
                          
                            background-repeat:no-repeat;
                           /* top, transparent red */
         background: 
         /* top, transparent red */
         linear-gradient(
         rgba(0, 170, 231, 0.80), 
         rgba(0, 170, 231, 0.80)
         ),
         /* your image */
         url("<?= AMAZON_URL ?>/images/devops/infrastructure.jpg");
         -webkit-background-size: cover;
         -moz-background-size: cover;
         -o-background-size: cover;
         background-size: cover;
         background-position:center;
                           }
                            #check6 
                           {
                          
                            background-repeat:no-repeat;
                           /* top, transparent red */
         background: 
         /* top, transparent red */
         linear-gradient(
          rgba(239, 69, 72, 0.85), 
         rgba(239, 69, 72, 0.85)
         ),
         /* your image */
         url("<?= AMAZON_URL ?>/images/devops/integration.jpeg");
         -webkit-background-size: cover;
         -moz-background-size: cover;
         -o-background-size: cover;
         background-size: cover;
         background-position:center;
                           }
                            #check7 
                            {
                          
                            background-repeat:no-repeat;
                           /* top, transparent red */
         background: 
         /* top, transparent red */
         linear-gradient(
        rgba(13, 65, 107, 0.65), 
         rgba(13, 65, 107, 0.65)
         ),
         /* your image */
         url("<?= AMAZON_URL ?>/images/devops/developer.jpeg");
         -webkit-background-size: cover;
         -moz-background-size: cover;
         -o-background-size: cover;
         background-size: cover;
         background-position:center;
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
                         <div class="widget-content themed-background text-light-op">
                     <center><strong><font color="#ffffff">Case Study</font></strong></center>
                  </div>
                         <div class="widget box">
                           <div class="widget-content" id="check" >
                        <center>
                           <a href="#">
                              <h3 class="heavy"></h3>
                              <p><font size="3px"color="#fff"><style="opacity:0!important;"><strong>Reduced spin-up time for agile MFT Changes using IBM Sterling Graphic Process Manager  </strong></style></font></p>
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
                    <div class="widget" style="margin-top:9px;">
                   <a href="mailto:devops@miraclesoft.com" > <div class="widget-content widget-hover themed-background text-light-op">
                            <center><strong><font color="#fff">
                                Contact Us</font></strong></center>
                        </div></a>
           </div>
          </span>
            </div>
            <div class="col-sm-3">
               <br>
            </div>
         </div>
         </div>
         
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