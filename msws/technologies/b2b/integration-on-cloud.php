<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Integration on Cloud - B2B | Miracle</title>
      <link href="../../css/bootstrap.min.css" rel="stylesheet">
      <link href="../../css/font-awesome.min.css" rel="stylesheet">
      <link href="../../css/main.css" rel="stylesheet">
      <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="../../css/default.css" />
      <link rel="stylesheet" type="text/css" href="../../css/component.css" />
      <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
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
         url("<?= AMAZON_URL ?>/images/b2b/header.png");
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
                     <h1 class="heavy micro">B2B	Integration	on	Cloud	</h1>
                  </div>
                  <div class="col-sm-6 text-right">
                     <ul class="breadcrumb pull-right">
                        <li><a href="../../">Home</a></li>
                        <li><a href="../">Technologies</a></li>
                        <li><a href="../b2b/">B2Bi & MFT</a></li>
                        <li class="active">Cloud</li>
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
                  <p class="methodText">B2B	 Cloud	 Services	 enable	 you	 to	 connect,	 collaborate,	 build,	 and	 manage	 your	
partner	communities.	Ranging	from	on	demand	to	fully	managed,	these	solutions	
provide	 you	 with	 the	 flexibility	 to	 quickly	 adapt	 as	 business	 needs	 change	 and	
evolve.			
               </div>
               <div class="col-sm-12">
                  <h3 class="heavy">Benefits	of	a	B2B	Cloud	Services	Solution	</h3>
               </div>
               <div class="col-sm-12">
               <div class="container">
                       <div class="col-sm-12">
                        <ul class="methodText">
                     <li>
                        Improve	 and	 streamline	 onboarding	 and	 management	 of	 your	 trading	
partners	
                     </li>
                     <li>
                        Enhance	visibility	and	control	over	business	processes	shared	with	outside	
companies	
                     </li>
                     <li>
                        Increase	the	reliability	and	performance	of	your	B2B	operations	
                     </li>
                     <li>
                        Reduce	the	Total	Cost	of	Ownership	(TCO)	of	your	B2B	operations	
                     </li>
                  </ul>
                       </div>
                       </div>
                 
               </div>
               
               
            </div>
       
          
           
                   <br>
                   
                   <div class="row">
             
                      
               <div class="col-sm-4">
                    <div class="widget-content themed-background text-light-op" style="background-color:#00aae7;padding:10px 10px;">
                    <strong><font color="#fff"><center>Hosted	Cloud	Solution	</center></font></strong>
                  </div>
                  <div class="widget box">
                     <div class="widget-content" style="padding:12px !important;background-color:#eee;border: 1px solid #eee; padding:3px;height: 276px;">
                             <center> <p> Our	Hosted	Cloud	Solution	will	migrate	your	current	IT	infrastructure	to	a	secured	
cloud	 environment.	 Furthermore,	 we	 will	 design	 and	 implement	 ways	 to	 access	
your	information	via	web	portals	and	web	apps	in	your	desktop.	This	solution	will	enhance	your	user's	experience	by	utilizing	your	applications	via	these	apps	from	
any	computer	in	the	world,	including	iPhones,	Droids	and	iPads.	</p>
                        </center></div>
                  </div>
               </div>
               <div class="col-sm-4">
                    <div class="widget-content" style="background-color:#2368a0;padding:10px 10px;">
                    <strong><font color="#fff"> <center>Hybrid	Cloud	Solution</center></font></strong>
                  </div>
                  <div class="widget box">
                     <div class="widget-content" style="padding:12px !important;background-color:#eee;border: 1px solid #eee; padding:3px;">
                        
                            <center> <p>"Hybrid	 Cloud	 Solution"	 for	 clients	 is	 needed	 to	 keep	 some	 services	 locally	 and	
some	 in	 "The	 Cloud".	 Our	 engineers	 will	 design	 a	 solution	 to	 maximize	 the	 use	
and	benefits	of	"Cloud	Technology"	while	maintaining	the	speed	and	efficiency	of	
locally	 stored	 information.	 Miracle	 has	 proven	 experience	 in	 the	 areas	 of	
migrations	and	integrations	between	onsite	systems	and	"Cloud"	based	systems.	</p>
                        </center></div>
                  </div>
               </div>
               <div class="col-sm-4">
                    <div class="widget-content " style="background-color:#0d416b;padding:10px 10px;">
                    <strong><font color="#fff"><center>Private	Cloud	Solution	</center></font></strong>
                  </div>
                  <div class="widget box">
                     <div class="widget-content" style="padding:12px !important;background-color:#eee;border: 1px solid #eee; padding:3px;">
                              <center><p>B2B	 Cloud	 Solutions	 offer	 consulting	 services	 to	 create	 a	 "Private Cloud"	 at	 the	
client's	site.	Those	clients	that	wish	to	keep	their	data	locally	in	their	offices,	but	
who	also	wish	to	take	advantage	of	virtualization	and	maximize	the	usage	of	their	
equipment,	will	be	glad	to	know	we	offer	our	experience	and	deep	knowledge	of	
virtualization	to	build	successful	projects	in	the	minimum	amount	of	time.	</p>
                       </center> </div>
                  </div>
               </div>
              
               
               
         </div>
               
            
                 <div class="row">
                   <div class="col-sm-12">
                      <h1 class="heavy">Miracle's	B2Bi	Cloud	Offerings		</h1>
                      <p class="methodText">
                         Together,	 Miracle's	 B2Bi	 and	 Cloud	 units	 can	 assist	 you	 in	 end-to-end	
implementation,	development	and	support	for	your	Cloud-based	B2B/EDI	engine.	
The	 following	 solutions	 and	 services	 are	 provided	 by	 our	 teams	 in	 collaboration	
with	our	technology	partners,	
                      </p>
                   </div>
                   
                   <div class="col-sm-6">
                   <div class="container">
                       <div class="col-sm-12">
                        <ul class="methodText">
                         <li>
                           <strong> B2B	 Integration	 SaaS	 and	 Cloud	 Services	</strong> -	 We	 provide	 end-to-end,	
comprehensive	 services	 and	 support	 for	 the	 IBM	 Sterling	 B2B	 Integrator	
solution	on	SaaS	(Software-as-a-Service)	model	
                         </li>
                         <li>
                           <strong> IBM	 Sterling	 B2B	 Collaboration	 Network</strong>	 -	 A	 cloud-based	 B2B	 integration	
solution	 that	 provides	 secure	 and	 reliable	 connectivity	 and	 collaboration	
with	customers	and	business	partners	
                         </li>
                         <li>
                           <strong> IBM	Sterling	File	Transfer	Service	</strong>-	A	cloud	service	for	your	file-based	B2B	
interactions	 and	 an	 alternative	 to	 your	 on-premise	 Managed	 File	 Transfer	
solution;	 We	 will	 help	 you	 communicate	 with	 your	 partners	 through	 a	
single,	secure,	reliable	connection	while	minimizing	the	capital	expense	and	
operational	impact	
                         </li>
                         <li>
                             <strong> B2B	Integration	PaaS	and	Cloud	Services	</strong>-	Our	experienced	engineers	will	
provide	 comprehensive	 services	 to	 develop	 or	 customize	 applications	 on	
PaaS	 (Platform-as-a-Service)	 model	 of	 your	 choice	 with	 service	 providers	
(like	 IBM,	 AWS,	 Azure	 and	 more);	 With	 this	 model,	 Miracle	 will	 make	 the	
development,	 testing	 and	 deployment	 of	 applications	 quick,	 simple	 and	
cost-effective	
                           </li>
                      </ul>
                       </div>
                       </div>
                     
                   </div>
                   
                   <div class="col-sm-6">
                   <div class="container">
                       <div class="col-sm-12">
                       <ul class="methodText">
                           
                           <li>
                             <strong> B2B	 Integration	 IaaS	 and	 Cloud	 Services	</strong> -	 With	 our	 Managed	 Services,	
Miracle	 will	 take	 responsibility	 for	 managing	 applications,	 data,	 runtime,	
middleware,	 and	 OSes;	 Many	 IaaS	 (Infrastructure-as-a-Service)	 providers	
now	 offer	 databases,	 messaging	 queues,	 and	 other	 services	 above	 the	
virtualization	as	well	
                           </li>
                           <li>
                              <strong>Axway	 Cloud	 Services</strong>	 -	 A	 comprehensive,	 industry	 leading	 API,	 B2B	 and	
MFT	technology	which	is	powered	by	AWS,	with	a	virtualized	infrastructure,	
integrated	 with	 your	 on-premise	 systems,	 advanced	 community	
management	and	managed	services	
                           </li>
                           <li>
                              <strong>MuleSoft	 Hybrid	 Cloud	 </strong>-	 It	 provides	 both	 a	 fully	 hosted,	 fully	 managed	
cloud	 solution	 and	 Dockerized	 containers	 for	 running	 and	 managing	 Mule	
apps,	 allowing	 to	 encapsulate	 functionality,	 shift	 deployment	 targets	 with	
ease,	 and	 expand	 resources	 elastically	 in	 response	 to	demand;	 Also,	 it	
provides	Anypoint	Platform's	API-led	connectivity	approach	to	B2B	and	EDI	
use	cases	
                           </li>
                        </ul>     
                       </div>
                       </div>
                          
                   </div>
                   
                   
                  </div> 
               
      
          
             <div class="row col-sm-12">
            <p class="methodText">
               For more information regarding <strong>B2B Integration and Managed File Transfer</strong>, please reach out to <strong><a href="mailto:b2b@miraclesoft.com" class="linkText">b2b@miraclesoft.com</a></strong>
            </p>
         </div> 
         <br>
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
               <a href="../b2b/" class="list-group-item-1">
                  <div>
                     <center><strong><font size="3%!important" color="#fff"  onMouseOut="this.style.color='#fff'" onMouseOver="this.style.color='#b7b2b3'">&nbsp; B2B	Integration	and	MFT
                        </font></strong>
                     </center>
                  </div>
               </a>
               <a href="offerings.php" class="list-group-item">
                  <div >
                     <center><strong><font size="3%!important" color="#000">&nbsp;Our	Service	Offerings
                        </font></strong>
                     </center>
                  </div>
               </a>
               <a href="#" class="list-group-item">
                  <div>
                     <center><strong><font size="3%!important" color="#00aae7">&nbsp; B2B	Integration	on	Cloud
                        </font></strong>
                     </center>
                  </div>
               </a>
               
               <a href="patterns-methodologies.php" class="list-group-item">
                  <div>
                     <center>
                     <strong><font size="3%!important" color="#000">&nbsp; Patterns	and	Methodologies	
                     </font></strong>
                     <center>
                  </div>
               </a>
               
               <a href="accelerators-frameworks.php" class="list-group-item">
                  <div>
                     <center>
                     <strong><font size="3%!important" color="#000">&nbsp; Accelerators / Frameworks
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
                           background-image:url('<?= AMAZON_URL ?>/images/technologies/api/bottling.png'); 
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
                           <a href="../../why/gpm-b2b.php" target="_blank">
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
                   <a href="mailto:b2b@miraclesoft.com" > <div class="widget-content widget-hover themed-background text-light-op" style="margin-top: 10px";>
                            <center><strong><font color="#fff">
                                Contact Us</font></strong></center>
                        </div></a>
           </div>
          </span>
           
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