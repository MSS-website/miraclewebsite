<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Portfolio - Project	Management	Solutions | Miracle</title>
      <link href="../../css/bootstrap.min.css" rel="stylesheet">
      <link href="../../css/font-awesome.min.css" rel="stylesheet">
      <link href="../../css/main.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="../../css/default.css" />
      <link rel="stylesheet" type="text/css" href="../../css/component.css" />
      <link href="/css/themes.css" rel="stylesheet">
      <link rel="shortcut icon" href="../../images/favicon.ico">
      <?php include '../../config/Locations.php';?>
      <style>
      
        .tinted-image {
         background: 
         /* top, transparent red */
         linear-gradient(
         rgba(0, 0, 0, 0.55), 
         rgba(0, 0, 0, 0.55)
         ),
         /* your image */
         url("<?= AMAZON_URL ?>/images/pmo/header-image.png");
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
      </style>
   </head>
   <!--/head-->
   <?php include '../../header.php';?>
   <body>
      <section id="services" >
       
         <div class="emerald tinted-image">
            <div class="container ">
                <br>
               <div class="row">
                  <br><br>
                  <div class="col-sm-7 text-left">
                     <h1 class="heavy micro">Portfolio	and	Project	Management	Solutions</h1>
                  </div>
                  <div class="col-sm-5 text-right">
                    
                     <ul class="breadcrumb pull-right">
                        <li><a href="../../">Home</a></li>
                        <li><a href="../">Services</a></li>
                        <li class="active">Project	Management	Solutions</li>
                     </ul>
                  </div>
               </div>
                <br>
               </div>
               
            </div>
      </section>
      <section id="services" class="container">
         <div class="row">
         <div class="col-sm-9">
            <div class="row">
               <div class="col-sm-12">
                  <br>
                  <p class="methodText">At	 Miracle	 our	 goal	 is	 to	 deliver	 outstanding	 value	 to	 our	 customer,	 which	 is	 no easy	task.	In	order	to	do	that,	our	implementations	must	be	successful,	and	that requires	the	flawless	management	of	resources	and	time. <strong>So how do	we	achieve	that?</strong> By partnering with the best the industry has to offer in the Project and Portfolio Management space, while also providing our customer with industry proven,	battle tested resources! </p>
                  
                  </p>
               </div>
               
            </div>
            <div class="row">
               <div class="col-sm-4"><center><img src="<?= AMAZON_URL ?>/images/pmo/FindingResources.png" alt="" class="img-responsive" ></center></div>
               <div class="col-sm-4"><center><img src="<?= AMAZON_URL ?>/images/pmo/partner-guidance.png" alt="" class="img-responsive" ></center></div>
               <div class="col-sm-4"><center><img src="<?= AMAZON_URL ?>/images/pmo/software-solutions.png" alt="" class="img-responsive"></center></div>
            </div>
            <div class="row">
               <div class="col-sm-4"><center><h6 class="heavy">Resources</h6></center></div>
               <div class="col-sm-4"><center><h6 class="heavy">Guidance</h6></center></div>
               <div class="col-sm-4"><center><h6 class="heavy">Software Solutions</h6></center></div>
            </div>
           <div class="row">
               <div class="col-sm-12">
                  <p class="methodText">
               For more information regarding <strong>Miracle's	 Portfolio	 and	 Project	 Management	Solutions</strong>, please reach out to <strong><a href="mailto:pmo@miraclesoft.com" class="linkText">pmo@miraclesoft.com.</a></strong>
            </p> 
                  <h1 class="heavy">Our	Partners</h1>
                  <p class="methodText">Through	our	partnerships	we	can	offer	to	you	the	PPM	solution	that	meets	your specific	 requirements.	 We	 work	 closely	 with	 product	 teams	 from	 all	 of	 our partners	 to	 ensure	 that	 we	 can	 offer	 the	 latest	 insights	 into	 roadmaps,	 strategy and	most	importantly	-	feature	additions.</p>
               </div>
            </div>
			 <div class="row">
                        
                        <div class="col-sm-3">
                            <a href="https://www.changepoint.com/" target="_blank">
                    <img class="img-responsive" src="<?= AMAZON_URL ?>/images/alliances/changepoint_pmo.png" alt="change point" title="change point">
                    </a>
                        </div>
                        <div class="col-sm-2">
                        </div>
                       <!--  <div class="col-sm-3">

                           <a href="https://www.workfront.com/" target="_blank"><img src="<?= AMAZON_URL ?>/images/alliances/workfront.png" class="img-responsive" alt="workfront" title="Workfront partner"></a>
                        </div> -->
                        <div class="col-sm-7">
                        </div>

                    </div>
         <div class="row">
               <div class="col-sm-12">
                  <h1 class="heavy">Our	Case Studies	</h1>
               </div>
           
               <div class="effect col-sm-4">
                  <div class="card">
  <a class="linkText1" target="_blank"  href="http://www.miraclesoft.com/library/CaseStudy/agile-waterfall-project-manager-requirement-fulfillment.php"><img src="<?= AMAZON_URL ?>/images/pmo/coke.png" alt="QA-CaseStudy" class="img-responsive">
  <div class="container" style="background-color:#eee;">
    
    <p><center><strong>Agile/Waterfall Project Manager Requirement Fulfillment</strong></center></p> 
  </div>
  </a>
</div>
               </div> 
                <div class="effect col-sm-4">
                    <div class="card">
  <a class="linkText1" target="_blank"  href="http://www.miraclesoft.com/library/CaseStudy/scrum-master-requirement-fulfillment.php"><img  src="<?= AMAZON_URL ?>/images/pmo/atlanticus-financial.png" alt="Avatar" class="img-responsive">
  <div class="container" style="background-color:#eee;">
    
     <p><center><strong>Scrum Master Requirement Fulfillment for Financial Customer</strong></center></p> 
  </div>
  </a>
</div>
                </div>
                <div class="effect col-sm-4">
                    <div class="card">
  <a class="linkText1" target="_blank"  href="http://www.miraclesoft.com/library/CaseStudy/business-analyst-requirement-fulfillment-large-automobile-manufacturer.php"><img  src="<?= AMAZON_URL ?>/images/pmo/Business-Analyst-Requirement.jpeg" alt="Avatar" class="img-responsive">
  <div class="container" style="background-color:#eee;">
    
     <p><center><strong>Business Analyst Requirement Fulfilment for a large Automobile Manufacturer</strong></center></p> 
  </div>
  </a>

                </div>
                </div>
            </div>
           
          <div class="row">
               <div class="col-sm-12">
                  <h1 class="heavy">Methodologies	</h1>
                  <p class="methodText"><strong>Processes,	processes,	processes.	Who	needs	them!</strong>	Well,	actually	we	all	do	in	the world	 of	 IT,	 especially	 when	 it	 comes	 to	 projects.	 Need	 some	 guidance	 on	updating	 or	 even	 implementing	 a	 methodology	 for	 project	 management?	 We’re definitely	 here	 to	 help.	 And	 even	 though	 we’ve	 shared	 some	 of	 our	 more common	methodologies,	perhaps	a	hybrid	or	gateway	solution	fits	your	company best.	Whatever	works	for	you,	works	for	us!	</p>
               </div>
               <div class="col-sm-12">
                  <h3 class="heavy">Our Project Management Methodology	</h1>
                  <p class="methodText">Our	approach	for	project	management	is	based	on	the	Global	ASAP	methodology while	 incorporating	 our	 own	 process	 transformation,	 deployment	 lessons	 learnt	and	industry	needs.</p>
                  <img src="<?= AMAZON_URL ?>/images/pmo/project-management.png" alt="Project Management Methodology" class="img-responsive">
                  
               </div>
               </div>
                <!-widjet->
               <div class="row">
                  <div class="col-sm-12">
                <h4 class="heavy"><font color="#2368a0">Key Activites by Phase</font></h4>
                </div>
                 <div class="col-sm-4">
                   <div style="background-color:#00aae7 !important;" class="widget-content themed-background text-light-op">
                     <strong><font color="#fff">Project Preparation </font></strong>
                  </div>
                  <div class="widget box">
                     <div class="widget-content" style="border: 1px solid #eee; background-color:#eee;padding:3px;" >
                         <div class="container">
                       <div class="col-sm-12">
                        <ul>
                         <li>Define Project Charter,organization and resource plans</li>
                         <li>Develop implementation strategy and rollout</li>
                         <li>Define communication and change leadership plan</li>
                         <li>Identify hardware and technical requirements</li>
                         
                         </ul>
                       </div>
                       </div>
                         
                     </div>
                  </div>
               </div>
               <div class="col-sm-4">
                   <div style="background-color:#0d416b !important;" class="widget-content themed-background text-light-op" >
                     <strong><font color="#fff">Business Blueprint</font></strong>
                  </div>
                  <div class="widget box">
                     <div class="widget-content" style="border: 1px solid #eee; background-color:#eee;padding:3px;" >
                       <div class="container">
                       <div class="col-sm-12">
                         <ul>
                         <li>Define functional and technical requirements</li>
                         <li>Determine systems layout and disposition</li>
                         <li>Define application organizational hierarchy</li>
                         <li>Finalize implementation strategy and rollout</li>
                         <li>Identify end user training plan</li>

                         </ul>
                       </div>
                       </div>
                      
                     </div>
                  </div>
               </div>
               <div class="col-sm-4">
                   <div style="background-color:#00aae7 !important;" class="widget-content themed-background text-light-op" >
                     <strong><font color="#fff">Realization	</font></strong>
                  </div>
                  <div class="widget box">
                     <div class="widget-content" style="border: 1px solid #eee; background-color:#eee;padding:3px;" >
                      <div class="container">
                       <div class="col-sm-12">
                        <ul>
                         <li>Conduct and unit test application configuration</li>
                         <li>Develop and test conversation and interface programs</li>
                         <li>Develop end-user training materials</li>
                         <li>Establish testing and training environment</li>
                        <br>
                         </ul>
                       </div>
                       </div>
                       
                     </div>
                  </div>
               </div>
               </div>
               <div class="row">
                   <div class="col-sm-4">
                   <div style="background-color:#0d416b !important;" class="widget-content themed-background text-light-op" >
                     <strong><font color="#fff">Final Preparation </font></strong>
                  </div>
                  <div class="widget box">
                     <div class="widget-content" style="border: 1px solid #eee; background-color:#eee;padding:3px;" >
                       <div class="container">
                       <div class="col-sm-12">
                        <ul>
                         <li>Conduct string and integration testing</li>
                         <li>Setup conference room and pilot</li>
                         <li>Prepare for system cutover and rollout</li>
                         <li>prepare end-user training environment</li>
                         
                         </ul>
                       </div>
                       </div> 
                       
                     </div>
                  </div>
               </div>
               <div class="col-sm-4">
                   <div style="background-color:#00aae7 !important;" class="widget-content themed-background text-light-op" >
                     <strong><font color="#fff">Go Live and Support</font></strong>
                  </div>
                  <div class="widget box">
                     <div class="widget-content" style="border: 1px solid #eee; background-color:#eee;padding:3px;" >
                       <div class="container">
                       <div class="col-sm-12">
                       <ul>
                         <li>System rollout and go-live</li>
                         <li>Provide production support</li>
                         <li>Conform live environment</li>
                         <li>Project review</li>
                       </div>
                       </div>
                        
                         <br><br><br><br>
                         </ul>
                     </div>
                  </div>
               </div>
                   </div>
                   <div class="row">
               <div class="col-sm-12">
                  <h3 class="heavy">Our	Agile/SCRUM	Methodology	</h1>
                  <p class="methodText">The	 need	 for	 speed	 is	 critical	 in	 today’s	 demanding	 world,	 but	 a	 lack	 of	 strong principles	and	tracking	can	derail	your	progress.	This	approach	follows	traditional	Agile	 and	 SCRUM	 methodologies	 and	 used	 for	 both	 our	 customers	 and	 our internal	Corporate	Application	Support.</p>
                     <img src="<?= AMAZON_URL ?>/images/pmo/scrum-methodology.png" alt="Project Management Methodology" class="img-responsive">
               </div>
            </div>
            <!-- widjet -->
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
                     <center><strong><font size="3%!important" color="#ffffff"  onMouseOut="this.style.color='#ffffff'" onMouseOver="this.style.color='#b7b2b3'">&nbsp; Project	Management	Solutions		

                        </font></strong>
                     </center>
                  </div>
               </a>
               <a href="partner-guidance.php" class="list-group-item">
                  <div >
                     <center><strong><font size="3%!important" color="#000000">&nbsp;Partner	Guidance

                        </font></strong>
                     </center>
                  </div>
               </a>
               <a href="find-resource.php" class="list-group-item">
                  <div>
                     <center><strong><font size="3%!important" color="#000000">&nbsp; Finding	Resources


                        </font></strong>
                     </center>
                  </div>
               </a>
               
                <a href="software-solutions.php" class="list-group-item">
                  <div>
                     <center>
                     <strong><font size="3%!important" color="#000">&nbsp; Software	Solutions

                     </font></strong>
                     <center>
                  </div>
               </a>
               
               <br>
               <div >
                 <div class="widget-content themed-background text-light-op">
                     <center><strong><font color="#ffffff">Case Study</font></strong></center>
                  </div>
                  <div class="widget box" >
                     <div class="widget-content" id="check" style="opacity:0.6">
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
                            background: 
         /* top, transparent red */
         linear-gradient(
         rgba(0, 0, 0, 0.25), 
         rgba(0, 0, 0, 0.25)
         ),
         /* your image */
         url('<?= AMAZON_URL ?>/images/pmo/atlanticus-financial.png');
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
                           <a href="http://www.miraclesoft.com/library/CaseStudy/scrum-master-requirement-fulfillment.php">
                              <h3 class="heavy"></h3>
                              <p><font size="3px"color="#fff"><style="opacity:0!important;"><strong>Scrum Master Requirement Fulfillment for Financial Customer</strong></style></font></p>
                           </a>
                        </center>
                     </div>
                  </div>
                  <div class="widget-content  text-dark register-hover">
                     <a class="linkText1" href="http://www.miraclesoft.com/library/CaseStudy/scrum-master-requirement-fulfillment.php" target="_blank">
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
                   <a href="mailto:pmo@miraclesoft.com" > <div class="widget-content widget-hover themed-background text-light-op" style="margin-top: 10px";>
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
         
         
         
         <br>
         
      </section>
      <!--/#about-us-->
      <?php include '../../footer.php';?>
   </body>
</html>
