<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>API Offerings | Miracle</title>
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
         url("<?= AMAZON_URL ?>/images/technologies/api/code.png");
         -webkit-background-size: cover;
         -moz-background-size: cover;
         -o-background-size: cover;
         background-size: cover;
         }
         label {
         font-weight: 600;
         }
         a{text-decoration:none !important;}
         .contact{border: solid 3px #00aae7 !important;border-radius: 3px !important;
         color: #00aae7 !important;display: inline-block;font-size: 17px;letter-spacing: 1px;
         margin-bottom: 5px;moz-border-radius: 3px;padding: 11px 59px;transition: all 0.5s ease;
         webkit-border-radius: 3px;background:#ffffff;font-weight:bolder;}
         .contact:hover{color:#00aae7;background: #232527;}
         .h4{color:#ffffff !important; }
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
         color: #ffffff !important;
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
         background-color: #ffffff;
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
         .card {overflow:hidden;padding: 1.15rem !important;height:100% !important;}
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
         webkit-border-radius: 3px;background:#ffffff;font-weight:bolder;}
         .contact:hover{color:#00aae7;background: #232527;}
         .h4{color:#ffffff !important; }
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
         .breadcrumb li,.breadcrumb li a{color:#ffffff !important;}
         .text-dark, .text-dark:hover, a.text-dark, a.text-dark:hover, a.text-dark:focus {
         background-color: #232527;
         color:#ffffff;
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
               <div class="row">
                  <br><br><br>
                  <div class="col-sm-6 text-left">
                     <h1 class="heavy micro">Our API M	Offerings</h1>
                  </div>
                  <div class="col-sm-6 text-right">
                     <ul class="breadcrumb pull-right">
                        <li><a href="../../">Home</a></li>
                        <li><a href="../../technologies/">Technologies</a></li>
                        <li class="active">API Offerings</li>
                     </ul>
                  </div>
               </div>
            </div>
            <br>
         
      </section>
      <section id="services" class="container">
         <div class="row">
         <div class="col-sm-9">
            <div class="row">
               <div class="col-sm-12">
                  <br>
                  <p class="methodText">From	 product	 evaluation	 to	 training,	 from	 implementation	 to	 innovation	 –	
Miracle	 is	 your	 trusted	 partner	 for	 digital	 transformation	 through	 the	 API	
Economy.</p>

               </div>
            </div>
           <div class="row">
             <div class="col-sm-12">
                
             <h1 style="color:#0d416b" class="heavy noMarginTop">Miracle’s Offerings </h1>
             </div>
                      
               <div class="col-sm-3">
                    <div class="widget-content themed-background text-light-op" style="background-color:#00aae7;padding:10px 10px;">
                    <strong><font color="#ffffff"> <center>Service Discovery</center></font></strong>
                  </div>
                  <div class="widget box">
                     <div class="widget-content" style="padding:7px !important;background-color:#eee;border: 1px solid #eee; padding:3px;" >
                             <center> <p> Our teams can help you analyse your exisitng Service Architecture to see which Services can be exposed as APIs to unlock hidden business value</p>
                        </center></div>
                  </div>
               </div>
               <div class="col-sm-3">
                    <div class="widget-content" style="background-color:#2368a0;padding:10px 10px;">
                    <strong><font color="#ffffff"> <center>Install & Configure</center></font></strong>
                  </div>
                  <div class="widget box">
                     <div class="widget-content" style="padding:7px !important;background-color:#eee;border: 1px solid #eee; padding:3px;" >
                        
                            <center> <p> We can help your team analyze your existing architecture to put in place a API centric model + help with the Install-configure-maintain cycle</p>
                        </center></div>
                  </div>
               </div>
               <div class="col-sm-3">
                    <div class="widget-content " style="background-color:#0d416b;padding:10px 10px;">
                    <strong><font color="#ffffff"><center>API M Integration</center></font></strong>
                  </div>
                  <div class="widget box">
                     <div class="widget-content" style="padding:7px !important;background-color:#eee;border: 1px solid #eee; padding:3px;" >
                              <center><p>With our experience with enterprise architectures we can help you connect all the dots with your API M strategy to ensure highest business value.</p>
                       </center> </div>
                  </div>
               </div>
               <div class="col-sm-3">
                    <div class="widget-content" style="background-color:#232527;padding:9px 9px;">
                    <strong><font color="#ffffff"><center>Policy Development</center></font></strong>
                  </div>
                  <div class="widget box">
                     <div class="widget-content" style="padding:7px !important;background-color:#eee;border: 1px solid #eee; padding:3px;" >
                             <center> <p>Creating API proxies (or) building assemblies for transformation we can help with creation, deployment and maintenence of your Enterprise APIs</p>
                        </center></div>
                  </div>
               </div>
               
               </div>
           
            
            <div class="row">
           
             <div class="col-sm-6">
                <h1 class="heavy">
                
                  <strong>Custom	Training</strong>
               </h1>
               <p>Over	 the	years	Miracle	has	proven	with	various	customers	 to	be	able	 to	 reduce	
the	 learning	 curve	 for	 enterprise	 technology	by	 conducting	 F2F	workshops	with	
professional	 instructors.	 The	 workshops	 include	 hands-on	 development	 which	
enables	your	team	members	to	be	ready	for	future	challenges.</p>
<p class="methodText">
                     <strong>Benefits	of	the	training	include,</strong> 
                     <div class="container">
                       <div class="col-sm-12">
                        <ul class="methodText">
                     <li>Availability	of	well-structured	hands-on	documentation	</li>
                     <li>Rapid	enablement	and	learning	on	your	in-house	</li>
                     <li>Identification	of	needs	and	changes	in	the	technology</li>
                     <li>Being	able	to	identify	business	use	cases	through	understanding</li>
                     
                  </ul>
                       </div>
                       </div>
                 
                  </p>

               </div>
               
                <div class="col-sm-6">
                <h1 class="heavy">
                
                  <strong>Proof	of	Technology</strong>
               </h1>
               <p>Are	 you	 wondering	 if	 the	 technology	 can	 support	 your	 use	 case	 and	 fir	 your	
existing	enterprise	architecture?	Through	our	PoT	and	PoC	offerings,	delivered	by	
our	 Center	 of	 Excellence	 and	 Research	 Labs,	 we	 will	 give	 you	 a	 chance	 to	
collaboratively	work	with	our	experts	to	provide	ROI,	 feasibility	and	value	of	the	
solution	and	technology.</p>
<p class="methodText">
                     <strong>Benefits	of	the	PoT	Offering	include,</strong> 
                     <div class="container">
                       <div class="col-sm-12">
                       <ul class="methodText">
                     <li>A	collaborative	approach	to	the	PoT	enables	you	to	learn	on	the	go</li>
                     <li>Through	the	offering	you	can	understand	if	the	technology	is	right	for	you	</li>
                     <li>Your	team	learns	through	what	is	built	and	can	understand	more	use	cases	</li>
                   
                  </ul>
                       </div>
                       </div>
                  
                  </p>

               </div>
            </div>
            <div class="row">
               
               
               <div class="col-sm-9">
                  <h1 class="heavy">
                
                  <strong>Offering	Engagement	Cycle</strong>
                  
               </h1>
                <img src="<?= AMAZON_URL ?>/images/technologies/api/offering-enagegment-cycle.png"  class="img-responsive"/>
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
                  color: #ffffff !important;
                  background-color: #00aae7!important;
                  border-color: #00aae7!important;
                  }
               </style>
               <a href="index.php" class="list-group-item-1">
                  <div>
                     <center><strong><font size="3%!important" color="#ffffff"  onMouseOut="this.style.color='#fff'" onMouseOver="this.style.color='#b7b2b3'">&nbsp; API Management
                        </font></strong>
                     </center>
                  </div>
               </a>
               <a href="#" class="list-group-item">
                  <div >
                     <center><strong><font size="3%!important" color="#00aae7">&nbsp;Our API M Offerings
                        </font></strong>
                     </center>
                  </div>
               </a>
               <a href="need-apis.php" class="list-group-item">
                  <div>
                     <center><strong><font size="3%!important" color="#000">&nbsp; Do you need APIs?
                        </font></strong>
                     </center>
                  </div>
               </a>
               
               <a href="why-miracle.php" class="list-group-item">
                  <div >
                     <center>
                     <strong><font size="3%!important" color="#000">&nbsp; Why Miracle
                     </font></strong>
                     <center>
                  </div>
               </a>
               
               <br>
               <div >
                   <div class="widget-content themed-background text-light-op">
                     <center><strong><font color="#ffffff">Webinar On-Demand</font></strong></center>
                  </div>
                  <div class="widget box">
                     <div class="widget-content" id="check" >
                        <style>
                           #check {
                           background-image:url('<?= AMAZON_URL ?>/images/technologies/api/bigdataimage.png'); 
                           background-size: 260px 140px;
                           opacity:0.7;
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
                           .linkText1:hover,.linkText1{color:#232527;}
                        </style>
                        <center>
                           <a href="#">
                              <h3 class="heavy"></h3>
                              <p><font size="3px"color="#ffffff"><strong>Building API M Center of Excellence and Best Practices </strong></font></p>
                           </a>
                        </center>
                     </div>
                  </div>
                  <div class="widget-content  text-dark register-hover">
                     <a class="linkText1" href="http://www.miraclesoft.com/events/webinar-after.php?eventId=176" target="_blank">
                        <center><strong><font color="#ffffff" onMouseOut="this.style.color='#fff'" onMouseOver="this.style.color='#b7b2b3'">Watch Replay</font></strong></center>
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
                   <a href="mailto:api@miraclesoft.com" > <div class="widget-content widget-hover themed-background text-light-op" style="margin-top: 10px";>
                            <center><strong><font color="#ffffff">
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
         <div class="row">
            
                <div class="col-sm-12">
             
            <p class="methodText">
              For	 more	 information	 regarding	 our	 <strong>API	 Management	 and	 Edge	 Integration</strong> portfolio	please	reach	out	to <a href="mailto:api@miraclesoft.com" class="linkText"><strong>api@miraclesoft.com.</a></strong>
            </p></div>
            
         </div>

         <link rel="stylesheet" href="../../css/box.css">
         <script>
            $('#menu-button').click(function(e){
            e.stopPropagation();
            $('#hide-menu').toggleClass('show-menu');
            });
            $('#hide-menu').click(function(e){
            e.stopPropagation();
            });
            $('body,html').click(function(e){
              $('#hide-menu').removeClass('show-menu');
            });
         </script>
         <script src="js/query.js"></script>
         <script src="js/bootstrap.js"></script>
         <br>
         
      </section>
      <!--/#about-us-->
      <?php include '../../footer.php';?>
   </body>
</html>