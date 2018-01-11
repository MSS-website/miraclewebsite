<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>B2B Integration and Managed File Transfer | Miracle</title>
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
               <div style="margin-bottom:-13px;" class="row">
                  <br><br><br>
                  <div class="col-sm-6 text-left">
                     <h1 class="heavy micro">B2B Integration and Managed File Transfer	</h1>
                  </div>
                  <br>
                  <div class="col-sm-6 text-right">
                     <ul class="breadcrumb pull-right">
                        <li><a href="../../">Home</a></li>
                        <li><a href="../">Technologies</a></li>
                        <li class="active">B2Bi & MFT</li>
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
                  <p class="methodText"><strong>Multi-Enterprise	Collaboration</strong>	is	at	the	heart	of	nearly	every	organization	and	 is	
essential	 for	an	enterprise	 to	become	efficient	and	dynamic.	However,	effective	
collaboration	can	be	a	challenging	 task	 to	achieve	due	 to	dynamic	nature	of	 the	
business	ecosystem.	With	 increasing	customer	demands,	varying	 trading	partner	
capabilities,	 resource	 constraints	 and	 ever-changing	 industry	 standards	 and	
regulations,	many	 businesses	 find	 it	 difficult	 to	 find	 the	 right	 strategy	 for	 their	
large	ecosystem	of	partners,	customers	and	suppliers.	
	</p>
                  <p class="methodText">In	order	 to	succeed,	organizations	must	connect,	 integrate	and	synchronize	 their	
extended	value	chains	so	they	may	become	essential	to	customers,	partners	and	
suppliers.	Quickly	being	able	to	adapt	to	trading	partner	needs,	optimizing	supply	
chains	and	constant	monitoring	 the	performance	of	on-going	EDI	 transactions	 is	
required	 to	create	 the	dream	On-Demand	Enterprise.	For	 the	past	20	years,	<strong>B2B	
Integration	 and	 Managed	 File	 Transfer	 offerings</strong>	 have	 been	 integral	 parts	 of	
Miracle's	 Service	 Portfolio,	 with	 one	 of	 the	 largest	 contingents	 of	 certified	
B2B/EDI	consultants	present	in	our	team.	
	
                  </p>
               </div>
            </div>
        
                <div class="row">
                    <br>
                    <div class="col-sm-12">
                       <div class="col-sm-2">
                           <br>
                        <img src="<?= AMAZON_URL ?>/images/b2b/Riskfree.png" alt="logo" class="img-responsive">
                    </div>
                    <div class="col-sm-10">
                        <h3 class="heavy"> Risk	Free	Transition</h3>
                        
                        <p class="methodText">Through	 numerous	 implementations	 and	 our	 mature	 transition	 management	
methodology,	your	B2Bi/MFT	initiatives	are	in	safe	hands	
	</p>
                    </div>
                    
                    </div>
                  
                    
                </div>
                 <hr>
                <div style="margin-top:5px;" class="row">
                    <div class="col-sm-12">
                       <div class="col-sm-2">
                           <br>
                        <img src="<?= AMAZON_URL ?>/images/b2b/Knowledge.png" alt="logo" class="img-responsive">
                    </div>
                    <div class="col-sm-10">
                        <h3 class="heavy">Knowledge	Management</h3>
                        <p class="methodText">Our	 teams	 provide	 comprehensive	 knowledge	management	 through	 a	 core-flex	
model	along	with	extensive	documentation	during	transition			
	</p>
                    </div>
                    
                    </div>
                   
                    
                </div>
                <hr>
                <div style="margin-top:5px;" class="row">
                    <div class="col-sm-12">
                       <div class="col-sm-2">
                           <br>
                        <img src="<?= AMAZON_URL ?>/images/b2b/Leadership.png" alt="logo" class="img-responsive">
                    </div>
                    <div class="col-sm-10">
                    <h3 class="heavy">Thought	Leadership</h3>
                        <p class="methodText">We	strive	continuously	to	invest	into	our	customers	to	provide	new	innovation	
and	improvement	along	with	reusable	asset	creation			
	</p>
                    </div>
                    
                    </div>
                   
                    
                </div>
        <br>
          
         
            
            
          <p class="methodText">Innovation	 is	at	the	heart	of	our	team’s	strategies,	and	our	<strong>Center	of	Excellence</strong>	
for	 B2B	 lets	 us	 research	 into	 the	 common	 challenges	 and	 issues	 faced	 by	 the	
common	 business.	 This	 analysis	 has	 helped	 us	 over	 the	 years	 to	 quickly	
understand	 the	 needs	 of	 the	 industry	 and	 the	 enterprise	 and	 quickly	 build	 and	
adaptive	strategy	for	optimizing	your	costs	and	increasing	productivity.		</p>
           <p class="methodText">Our	 teams	have	been	able	 to	build	<strong>Accelerators	and	Frameworks</strong>	which	help	 in	
providing	an	insight	into	your	transactional	processes	and	brings	greater	ease	for	
working	 with	 your	 dynamic	 partners.	 Seamless	 consolidation	 of	 your	 B2B/EDI	
systems	and	quick	customization	capabilities,	help	us	to	give	you	the	best	solution	
possible.	
	</p>
          
          <div class="row">
               <div class="col-sm-12">
                  <h1 class="heavy">Our	B2B	case	studies</h1>
               </div>
            </div>
           
            <div class="row">
               
               <div class="effect col-sm-4">
                  <div class="card">
  <a class="linkText1" target="_blank"  href="http://www.miraclesoft.com/why/sstory3.php"><img height="130px" src="<?= AMAZON_URL ?>/images/b2b/healthleader.jpg" alt="Avatar" style="width:100%">
  <div class="container" style="background-color:#eee;">
    
    <p><center><strong>Migration from TPEC to WTX for Global Healthcare Leader</strong></center></p> 
  </div>
  </a>
</div>
               </div> 
                <div class="effect col-sm-4">
                    <div class="card">
  <a class="linkText1"  target="_blank" href="http://www.miraclesoft.com/why/sstory6.php"><img height="130px" src="<?= AMAZON_URL ?>/images/b2b/logistics.jpg" alt="Avatar" style="width:100%">
  <div class="container" style="background-color:#eee;">
    
     <p><center><strong>Next Generation ESB/B2B Gateway for Global Logistics Provider</strong></center></p> 
  </div>
  </a>
</div>
                </div>
                 <div class="effect col-sm-4">
                     <div class="card">
 <a class="linkText1" target="_blank" href="http://www.miraclesoft.com/why/sstory7.php"> <img height="130px" src="<?= AMAZON_URL ?>/images/b2b/food.png" alt="Avatar" style="width:100%">
  <div class="container" style="background-color:#eee;">
    
     <p><center><strong>Enhanced Visibility and Control for Global Food Distributor </strong></center></p> 
  </div>
  </a>
</div>
                 </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                <img style="margin-top:27px;" src="<?= AMAZON_URL ?>/images/b2b/port.png" alt="logistics" class="img-responsive">
            </div>
            <div class="col-sm-8">
                <h1 class="heavy">Miracle’s	Supply	Chain	Visibility	Portal</h1>
                <p class="methodText">Increased	visibility	 into	your	Supply	Chain	 is	a	critical	strategy	 for	any	enterprise	
aiming	at	 increasing	efficiency	and	optimizing	 costs.	The	 importance	of	 visibility	
into	 your	 transactional	 flows	 only	 increases	when	 you	 have	 global	 supply	 chain	
networks	with	increasing	trading	partner	numbers.	</p>
                <p class="methodText"><strong>Miracle’s	 Supply	 Chain	 Visibility	 Portal</strong>	 provides	 complete	 visibility	 into	 your	
Order-to-Cash	and	Procure-to-Pay	cycles.	Through	the	various	roles	and	modules	
available	in	the	portal,	you	can	use	meaningful	and	enriched	transactional	data	to	
track	and	trace	the	exchange	of	your	EDI	documents.	</p>
<a href="mscvp.php" target="_blank"> <button style="background-color:#00aae7 !important;" type="button" class="btn btn-primary btn-md">Read More</button></a>
        </div>
            </div>
            
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="heavy">Our B2Bi/MFT Partners</h1>
                <p class="methodText">At Miracle, we focus extensively on strategic partnership with product vendors, we work closely with Product engineering teams to get proactive assistance on product updates and patches for critical product related bug fixes and support tickets. Our CoE team can provide help with services and support along with software resale with our partners. </p>
            </div>
            </div>
            <br>
            <div style="margin-left:-39px;" class="row">
                  <div class="col-sm-12">
		                   <div class="col-sm-2">
		                      <img src="<?= AMAZON_URL ?>/images/b2b/ibm.png" alt="ibm logo" class="img-responsive">
		                   </div>
		                   <div class="col-sm-2">
		                      <img src="<?= AMAZON_URL ?>/images/b2b/microsoft.png" alt="ibm logo" class="img-responsive">
		                   </div>
		                   <div class="col-sm-2">
		                      <img src="<?= AMAZON_URL ?>/images/b2b/oracle.png" alt="ibm logo" class="img-responsive">
		                   </div>
		                    <div class="col-sm-2">
		                      <img src="<?= AMAZON_URL ?>/images/b2b/axway.png" alt="ibm logo" class="img-responsive">
		                   </div>
		                   <div class="col-sm-2">
		                      <img src="<?= AMAZON_URL ?>/images/b2b/sap.png" alt="ibm logo" class="img-responsive">
		                   </div>
		                   <div class="col-sm-2">
		                      <img src="<?= AMAZON_URL ?>/images/b2b/mulesoft.png" alt="ibm logo" class="img-responsive">
		                   </div>
		                  
		                </div>
            </div>
            <br>
		  <div class="row col-sm-12">
           <br> <p class="methodText">
               For more information regarding <strong>B2B Integration and Managed File Transfer</strong>, please reach out to <strong><a href="mailto:b2b@miraclesoft.com" class="linkText">b2b@miraclesoft.com</a></strong>
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
               <a href="#" class="list-group-item-1">
                  <div>
                     <center><strong><font size="3%!important" color="#fff"  onMouseOut="this.style.color='#fff'" onMouseOver="this.style.color='#b7b2b3'">&nbsp; B2B	Integration	and	MFT
                        </font></strong>
                     </center>
                  </div>
               </a>
               <a href="offerings.php" class="list-group-item">
                  <div >
                     <center><strong><font size="3%!important" color="#000">&nbsp;Our Service Offerings
                        </font></strong>
                     </center>
                  </div>
               </a>
               <a href="integration-on-cloud.php" class="list-group-item">
                  <div>
                     <center><strong><font size="3%!important" color="#000">&nbsp; B2B	Integration	on	Cloud
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
                    <div class="widget">
                   <a href="mailto:b2b@miraclesoft.com" > <div class="widget-content widget-hover themed-background text-light-op" style="margin-top: 10px";>
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