<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Need of APIs | Miracle</title>
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
         .widget:hover,.widget:focus{}
         .widget-content:hover,.widget-content:focus {
         
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
         
         .light-blue{
            background-color:#00aae7 !important;
            color:#ffffff !important;
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
                     <h1 class="heavy micro">Do you need APIs?</h1>
                  </div>
                  <div class="col-sm-6 text-right">
                     <ul class="breadcrumb pull-right">
                        <li><a href="../../">Home</a></li>
                        <li><a href="../../technologies/">Technologies</a></li>
                      
                        <li class="active">Need Of APIs</li>
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
                  <p class="methodText">Not every service needs to be exposed as an API, and not every API needs to have a public managed proxy.<strong> So when do you need APIs, and what is the difference between SOA?</strong></p>
                  
               </div>
            </div>
            
            
            <div class="row">
             <div class="col-sm-12">
                <h1 class="heavy noMarginTop">
                 <strong> Questions to be asked</strong>
               </h1>
               </div>
               <div class="row">
                  <div class="col-sm-12">
               <div class="col-sm-4">
                    <div class="widget-content themed-background text-light-op" style="background-color:#0d416b;">
                    <strong><font color="#ffffff">Questions </font></strong>
                  </div>
                  <div class="widget box">
                     <div class="widget-content" style="border: 1px solid #eee;background-color:#eee; padding:3px;height: 328px;" >
                            <div class="container">
                       <div class="col-sm-12">
                        <ul>
                                 <li>What	API	<strong>authoring	capabilities</strong>	will	you	need?	</li>
                                 <li><strong>Where</strong>	do	I	want	my	API	Runtime	to	exist?	<font color="#00aae7"><strong>Cloud	(or)	On-Premise?</strong>	</font></li>
                                 <li>How	much	<strong>security</strong>	and	<strong>run-time	capabilities</strong>	will	you	need?	</li>
                                 <li>What	<strong>data	formats</strong>	do	your	payloads	need	to	support?</li>
                                 <li><strong>Who</strong>	 will	 be	 you	 API	 consumers	 and	 what	 sort	 of	 experience	 do	 they	require?</li>
                                 <li>What	existing	business	services	do	you	have	that	you	want	to	expose?	</li>
                              </ul>
                       </div>
                       </div>
                             
                        </div>
                  </div>
               </div>
               <div class="col-sm-4">
                   <div class="widget-content themed-background text-light-op">
                     <strong><font color="#ffffff"> More	Questions </font></strong>
                  </div>
                  <div class="widget box">
                     <div class="widget-content" style="border: 1px solid #eee; background-color:#eee;padding:3px;" >
                          <div class="container">
                       <div class="col-sm-12">
                        <ul>
                                 <li>How	easy	is	it	to <strong>push	APIs</strong> from	Test	to	Dev	to	Prod?</li>
                                 <li><strong>How	 much	 control</strong> do	 you	 have	 over	 the	 environment	 and	 deployment	architecture?	</li>
                                 <li>Does	the	product	have	built-in	capabilities	for <strong>invoicing,	monetization</strong>	and	<strong>payment	processing?	</strong></li>
                                 <li>How	 strong	 and	 flexible	 are	 the	 product's <strong>API	 Policy	 Creation</strong> and <strong>Enforcement</strong> capabilities?	</li>
                                 <li>How	<strong>secure</strong>	is	the	API	Gateway	and	Runtime?	</li>
                                 <li>What	is	the	level	of	logging	and	analysis	available?	</li>
                                  </ul>
                       </div>
                       </div>
                         
                     </div>
                  </div>
               </div>
               <div class="col-sm-4">
                   <div class="widget-content themed-background text-light-op" style="background-color:#2368a0">
                     <strong><font color="#ffffff">	..and	some	more! </font></strong>
                  </div>
                  <div class="widget box">
                     <div class="widget-content" style="border: 1px solid #eee; background-color:#eee;padding:3px;" >
                       <div class="container">
                       <div class="col-sm-12">
                         <ul>
                                 <li>What	<strong> heterogeneous	 integrations</strong>	 are	 possible	 such	 as	 LDAP,	 Service Repositories	and	Gateway	integrations?</li>
                                 <li>What	 sort	 of	 product	 maintenance	 and	 roadmaps	 are	 available	 from	 the	vendor?</li>
                                 <li>How	 large	 is	 the	 <strong>development</strong>	 and	 <strong>support</strong>	 community	 around	 the product?	</li>
                                 <li>How	 deep	 is	 the	 <strong>training,	 knowledge	 pool</strong>	 and	 <strong>talent	 pool</strong>	 around	 the	vendor’s	product	offering?	</li>
                                <li>What	level	of	<strong>insight</strong>	and	<strong>analytics</strong>	are	given	for	APIs?	</li>
                            </ul>
                       </div>
                       </div>
                        
                     </div>
                  </div>
               </div>
               </div>
               </div>
              </div>
            <div class="row">
             <div class="col-sm-12">
                <h1 class="heavy">
                
                  <strong>Private (or) Public APIs?</strong>
               </h1>
                 <table class="table table-hover">
               <thead class="light-blue">
                  <tr>
                     
                     <th>Requirements</th>
                     <th>Private API</th>
                     <th>Public API</th>
                   
                  </tr>
               </thead>
               <tr>
                  <td><strong>Creation Criteria</strong></td>
                  <td>Based on the Custom business logic, and intigration requirements during application development process</td>
                  <td>Turned and designed per the needs of the external partners and third party developers</td>
                 
               </tr>
               <tr>
                  <td><strong>Purpose of API Consumption</strong></td>
                  <td>Increase internal app development productivity,integrate applications within and across line of Business (LOB) resulting in streaming business operations</td>
                  <td>Increase partner business opportunities, and create new business models,and in some cases, direct consumer integration  </td>
               </tr>
                <tr>
                  <td><strong>API Discovery</strong></td>
                  <td>Can be published on the same developer platform used by other internal applications willing to consume the APIs</td>
                  <td>Should be published on a developer portal which as proper access rights to external developers and partners</td>
               </tr>
                <tr>
                  <td><strong>API Subscription</strong></td>
                  <td>Stringent subscription plan might not be required</td>
                  <td>Diverse subscription plans are required for API consumer to subscribe to and then consume based on SLAs,Payment Plans etc. </td>
               </tr>
                <tr>
                  <td><strong>API Policing</strong></td>
                  <td>Metered,rate limited, coarse grained security control API is based on Enterprise line of business needs and access rigths</td>
                  <td>Need Grained Api control around the security,access, rate limits,SLAs,and access limits based on partner usage models and subscription PLANs</td>
               </tr>
               <tr>
                  <td><strong>API Access</strong></td>
                  <td>May or May not needed special tokens or keys to access the  Aapi's.Depend on the  sensitive nature of data being exposed</td>
                  <td>Need API keys abd security tokens  to access the API'S</td>
               </tr>
               <tr>
                  <td><strong>API invocations</strong></td>
                  <td>Usually high number of transactions /sec</td>
                  <td>Dependent on buissiness requirements for access to external stakeholders and can implement throttling mechanisams as needed</td>
               </tr>
            </table>
               </div>
            </div>
            <div class="row">
             <div class="col-sm-12">
                <h1 class="heavy">
                
                  <strong>Microservices, SOA and APIs</strong>
               </h1>
               <p class="methodText"><strong>The future is microservices!</strong> Microservices are an architectural style to develop applications as a collection of small services that are running their own process, focusing on a narrow goal and communicating with lightweight protocols such as HTTP. <strong>When APIs, Microservices and SOA all come together, the future will be truly here.</strong></p>
              <img src="<?= AMAZON_URL ?>/images/technologies/api/microservices-soa-api.png" alt="table" class="img-responsive">
               </div>
            </div>
            <div class="row">
             <div class="col-sm-12">
                <h1 class="heavy">
                
                  <strong>Comparing	SOA and APIs	</strong>
               </h1>
               <p class="methodText">So back	to	the	fundamental	questions,	why	do	we	need	APIs	when	we	have	SOA?	
While	 APIs	 are	 similar	 to	 SOA,	 they	 are	 the	 next	 good	 thing	 to	 happen	 for	
application	integration.	</p>
              <table class="table table-hover">
                 <thead class="light-blue">
                 <tr><th><center>SOA</center></th>
                    <th><center>Microservices</center></th></tr>
                 </thead>
                 <tbody>
                   <tr>
                      <td>An architectural ion computer software design in which application components provides services to other components via communication protocal,typically over a network</td>
                      <td>A software architectural style in which complex applications are composed  of small,independent process communicating using a language-agnostics API'S</td>
                   </tr>
                   <tr>
                      <td>A service in SOA may have many responsibilities</td>
                      <td>A services microservices should be fine-grained and should only have a single responsibility</td>
                   </tr>
                   <tr>
                      <td>SOA is using heavy-weight technologies and protocols(like Sop etc)</td>
                      <td>Microservices are the leaner,meaner,and more agile approach(REST and AMQP)</td>
                   </tr>
                   <tr>
                      <td>SOA is more platform based and done more on premise</td>
                      <td>Microservices came into light with the evolution of Saas and PaaS approach,more respected with Hybrid/Cloud Integration</td>
                   </tr>
                   <tr>
                      <td>SOA is always an enterprise architectural level</td>
                      <td>Micro service is an application centric architecture,often reffered to asdecentralized services/API model</td>
                   </tr>
                   <tr>
                      <td>In SOA the product or platform is defined at the enterprise Level</td>
                      <td>Microservices,you has the  freedom  to choose your own technology like(Node.js,Java+MongoDB,etc)</td>
                   </tr>
                 </tbody>
                 </table>
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
               <a href="apim-offerings.php" class="list-group-item">
                  <div >
                     <center><strong><font size="3%!important" color="#000">&nbsp;Our API M Offerings
                        </font></strong>
                     </center>
                  </div>
               </a>
               <a href="#" class="list-group-item">
                  <div>
                     <center><strong><font size="3%!important" color="#00aae7">&nbsp; Do you need APIs?
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
                              <p><font size="3px"color="#ffffff"><strong>Exploring Microservices, SOA and APIs - Friends (or) Foes? </strong></font></p>
                           </a>
                        </center>
                     </div>
                  </div>
                  <div class="widget-content  text-dark register-hover">
                     <a class="linkText1" href="http://www.miraclesoft.com/events/webinar-after.php?eventId=154" target="_blank">
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
               For	 more	 information	 regarding	 our <strong>API	 Management	 and	 Edge	 Integration</strong> please reach out to <strong><a href="mailto:api@miraclesoft.com" class="linkText">api@miraclesoft.com.</a></strong>
            </p></div>
            
         </div>

       <!--  <link rel="stylesheet" href="../../css/box.css"> -->
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
       <!--  <script src="js/query.js"></script>
         <script src="js/bootstrap.js"></script> -->
         <br>
         
      </section>
      <!--/#about-us-->
      <?php include '../../footer.php';?>
   </body>
</html>