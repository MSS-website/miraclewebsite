<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Our Technologies | Miracle</title>
      <?php include '../../config/Locations.php';?>
      <link href="../../css/bootstrap.min.css" rel="stylesheet">
      <link href="../../css/font-awesome.min.css" rel="stylesheet">
      <link href="../../css/main.css" rel="stylesheet">
      <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="../../css/default.css" />
      <link rel="stylesheet" type="text/css" href="../../css/component.css" />
      <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
      <link href="/css/themes.css" rel="stylesheet">
      <link rel="shortcut icon" href="../../images/favicon.ico">
      <style>
         
         .tinted-image {
         background: 
         /* top, transparent red */
         linear-gradient(
         rgba(0, 0, 0, 0.55), 
         rgba(0, 0, 0, 0.55)
         ),
         /* your image */
         url("<?= AMAZON_URL ?>/images/dataservices/bg.png");
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
         #check{
                           background: 
         /* top, transparent red */
         linear-gradient(
         rgba(0, 0, 0, 0.65), 
         rgba(0,0, 0, 0.65)
         ),
         /* your image */
         
         url("<?= AMAZON_URL ?>/images/dataservices/people.png");
        
        
                            }
                           
                    #check1{
                           background: 
         /* top, transparent red */
         linear-gradient(
         rgba(0, 0, 0, 0.65), 
         rgba(0,0, 0, 0.65)
         ),
         /* your image */
         
         url("<?= AMAZON_URL ?>/images/dataservices/businessint.png");
         -webkit-background-size: cover;
         -moz-background-size: cover;
         -o-background-size: cover;
          background-size:cover;
          background-repeat:no-repeat;
          background-position:center;
          height:120px;
       
                            } 
                            
                           #check2{
                           background: 
         /* top, transparent red */
         linear-gradient(
         rgba(0, 0, 0, 0.65), 
         rgba(0,0, 0, 0.86)
         ),
         /* your image */
         
         url("<?= AMAZON_URL ?>/images/dataservices/datawarehousing.png");
       -webkit-background-size: cover;
         -moz-background-size: cover;
         -o-background-size: cover;
          background-size:cover;
          background-repeat:no-repeat;
          background-position:center;
          height:120px;
          
                            }
                            
                              #check3{
                           background: 
         /* top, transparent red */
         linear-gradient(
         rgba(0, 0, 0, 0.65), 
         rgba(0,0, 0, 0.65)
         ),
         /* your image */
         
         url("<?= AMAZON_URL ?>/images/dataservices/businessanalytics.png");
         -webkit-background-size: cover;
         -moz-background-size: cover;
         -o-background-size: cover;
          background-size:cover;
          background-repeat:no-repeat;
          background-position:center;
          height:120px;
                            }
                            
                            #check4{
                           background: 
         /* top, transparent red */
         linear-gradient(
         rgba(0, 0, 0, 0.65), 
         rgba(0,0, 0, 0.65)
         ),
         /* your image */
         
         url("<?= AMAZON_URL ?>/images/dataservices/bigdata.png");
         
       -webkit-background-size: cover;
         -moz-background-size: cover;
         -o-background-size: cover;
          background-size:cover;
          background-repeat:no-repeat !important;
          background-position:center;
          height:120px;
                            }
@media (min-width: 200px) and (max-width :768px){
.ibm3{
   padding-bottom:20px;
   
}
.micro3{
  padding-left: 0;
padding-bottom: 20px;
}
.vert{
    padding-left:20px;
padding-bottom: 20px;
}
.cont{
    padding-left:20px;
padding-bottom: 20px;
}
.partner{
    padding-left: 0;
padding-bottom: 20px;
}
}
 @media (min-width: 778px) and (max-width :996px){
.bigdata{
 padding-bottom:197px !important;
   
}

   .busint{
      padding-bottom:194px !important;
      }
}
@media (min-width: 994px) and (max-width :995px){
.bigdata{
 padding-bottom: 239px !important;
   
}
.buissness{
   padding-bottom:103px !important;
}
   
   .busint{
    
      }
}
    @media (min-width: 996px) and (max-width :1200px){
       
       .bigdata{
padding-bottom:149px !important;
   
}
.buissness{
 
}
   
   .busint{
    padding-bottom:100px !important;
      }
       
       } 
       @media (min-width:320px) and (max-width :769px){ 
           .sep{
               
               display:none;
             
               }
               .sep1{
                   
                   margin-top:-73px;
                   
                   }
           
           }
           
           
           
           
           @media screen and (min-width: 992px) and (max-width: 1199px) {
      .heavy{
       font-size:18px !important;
       }
      
}
       @media screen and (min-width: 770px) and (max-width: 990px) {
    .bigdata{
        
       padding: 12px 33px 147px 26px !important;
        }
      .busint{
          
         padding: 12px 33px 238px 21px !important;
          
         
         }
}
       @media screen and (min-width: 992px) and (max-width: 1999px) {
    .bigdata{
        
       padding: 12px 33px 147px 26px !important;
        }
      .busint{
          
         padding: 12px 33px 145px 21px !important;
          
         
         }
}
  @media screen and (min-width: 1200px) and (max-width: 1500px) {
   .buissness{
      
       padding: 12px 33px 123px 21px !important;
       }
}
  
     @media screen and (min-width: 768px) and (max-width: 991px) {
    .heavy{
       font-size:15px !important;
       }
      
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
                     <h1 class="heavy micro">Big	Data,	BI	and	Analytics	Offerings</h1>
                  </div>
                  
                  <div class="col-sm-6 text-right">
                     <ul class="breadcrumb pull-right">
                        <li><a href="../">Home</a></li>
                        <li><a href="../../technologies/">Technologies</a></li>
                        <li class="active">Data Practice</li>
                     </ul>
                  </div>
               </div>
              <br>
            </div>
            <br>
            </div>
        
      </section>
      <section id="services" class="container">
         <div class="row">
         <div class="col-sm-9">
            <div class="row">
               <div class="col-sm-12">
                 
                  <h1 class="heavy">Our	Data	Offerings	</h1>
                  <p class="methodText">With	the	emergence	of	Mobile	and	Social,	the	amount	of	data	being	generated	by	
IT	systems	has	soared.	Users	around	the	world	are	generating	heterogeneous	and	
raw	 data	 every	 second.	 A	 user	 at	 a	 grocery	 store	 is	 generating	 preference	 data	
during	his	billing.	A	girl	buying	her	wedding	dress,	is	posting	preference	data	onto	
social	media.	Data	is	everywhere	and	it	is	time	enterprises	leverage	this	data	to	
accelerate	business	growth.	
	</p>
                  <p class="methodText">When	 this	 data	 is	 put	 to	 proper	 use	 it	 helps	 to	 provide	 better	 insight	 into	
customer	behavior	and	gives	you	the	ability	to	take	proactive	decisions.	You	can	
repair	 a	 washing	 machine	 even	 before	 it	 stops	 working	 by	 using	 predictive	
analytics	 and	 hence	 
provide	 a	 richer	 customer	 experience.	 All	 this	 transactional	
data	must	be	stored	somewhere	and	in	turn	must	be	analyzed	and	put	to	proper	
use.	Our	Data	teams	at	Miracle	help	you	to	manage	your	data	effectively	and	in	
turn	gain	insights	into	data	patterns.	
                  </p>
               </div>
            </div>
      
        <div class="row">
            <div class="col-sm-12">
                 <h1 class="heavy">Our Service Offerings		</h1>
                 <p class="methodText">
                     With	 petabytes	 of	 data	 out	 there,	 it	 is	 time	 you	 started	 leveraging	 it	 to	 your	
advantage.	From	thought	leadership	to	end-to-end	solution	delivery,	our	team	can	
help	you	deliver	the	right	solutions	at	the	right	time.		
                 </p>
            </div>
        </div>
        <div class="row">
                  <div class="col-sm-12">
                      <h1 class="heavy">Miracle's Data & Analytics Overview</h1>
                      </div>
              
               </div> 
        <div class="row" >
        <div class="col-sm-4">
                  <div class="card" id="check4">
                     <h3 class="heavy" ><font color="#ffffff">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Big Data</font></h3>
                 
                  <div class="container" style="background-color:#eee;">
                   <center>
                         <ul style="text-align:left; padding: 12px 33px 33px 26px;" class="bigdata methodText">

                                 <li>Apache Hadoop</li>
                                 <li>IBM BigInsights</li>
                                 <li>Cloudera</li>
                                 <li>Horton Works</li>
                                 <li>Data Lake</li>
                                 <li>Google Cloud Platform</li>
                                 <li>Microsoft Azure</li>
                                 <li>Amazon Web Services</li>
                                  
            </ul>
                       </center> <br><br><br>
                  </div>
                 
                  </div>
               </div>
               <div class="col-sm-4">
                  <div class="card" id="check3">
                      <h3 class="heavy"><font color="#ffffff" >&nbsp;&nbsp;&nbsp;&nbsp;Advanced Analytics</font></h3>
                 
                  <div class="container" style="background-color:#eee;">
                   <center>
                           <ul class="buissness methodText" style="text-align:left;  padding: 12px 33px 33px 21px;">
              
                                  <li>Statistical Analysis</li> 
                                  <li>Quantitative Analysis</li>
                                  <li> Data Mining</li>
                                  <li> Predictive Modeling</li>
                                 <li>Data Science experience utilizing R, Python, IBM Watson and Cortana</li>
                                 <li>H2O</li>
                                 <li>Apache Spark</li>
                                 <li>Alteryx / RapidMiner</li>
                                 
            </ul>
            </center>
                  </div>
                  
                  </div>
               </div>
                 <div class="col-sm-4">
                  <div class="card" id="check1">
                      <h3 class="heavy"><font color="#ffffff" >&nbsp;&nbsp;&nbsp;&nbsp;Business Intelligence</font></h3>
                  
                  <div class="container" style="background-color:#eee;">
                   <center>
                          <ul style="text-align:left; padding: 12px 33px 33px 21px;" class="busint methodText">
                             
                                <li>Cognos</li>
                                 <li>MicroStrategy</li>
                                 <li>Business Objects</li>
                                 <li>OBIEE</li>
                                 <li>Tableau</li>
                                 <li>Microsoft Power BI</li>
                                 <li>QlikView / QlikSense</li>
                                 <li>Oracle Apex</li>
                                 <br>
                                 
            </ul><br><br>
                   </center>
                  </div>
                  </a>
                  </div>
               </div>
                   
       
        </div>
<div class="row" >
        <div class="col-sm-12">
                  <div class="card" id="check2" >
                      <h3 class="heavy"><font color="#ffffff" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data Warehousing</font></h3>
                      <div class="overlay"></div>
                
                  <div class="container" style="background-color:#eee;padding-left:0px">
                     <div class="col-sm-5">
                     <div class="container">
                     <div class="col-sm-12">
                     <ul style="text-align:left;" class="methodText">
           <br>
                                 <li>Teradata</li>
                                 <li>Sybase</li>
                                 <li>Oracle</li>
                                 <li> SQL Server</li>
                                 <li>ETL Development - Informatica, DataStage, SSIS,
                                 Flume, Sqoop, MapReduce</li>
                                 
                                
                                    
            </ul>
                     </div>
                     </div>
                         
                     </div>
                     <div class="col-sm-2">
                        <br><br><img src="<?= AMAZON_URL ?>/images/dataservices/separation-vertical.png" class="img-responsive sep">
                     </div>
                     <div class="col-sm-5"><ul class="sep1 methodText"><br>
                            <li>Cassandra</li>
                                 <li>DB2</li>
                                 <li>Mongo DB / Maria DB</li>
                                 <li>Database Administration</li>
                                 <li>Managed Services</li>
                                <br>
                                </ul>
                     </div>
                    <center>
                        
                       </center> 
                  </div>
                  </a>
                  </div>
               </div>
       </div>
          <div class="row">
               <div class="col-sm-12">
                  <h1 class="heavy">Our	Success	Stories	</h1>
               </div>
            </div>
           
            <div class="row">
               
               <div class="effect col-sm-4">
                  <div class="card">
  <a class="linkText1" target="_blank"  href="http://www.miraclesoft.com/library/CaseStudy/migration-tpec-wtx-health-care-client"><img height="130px" src="<?= AMAZON_URL ?>/images/dataservices/healthleader.jpg" alt="Avatar" style="width:100%">
  <div class="container" style="background-color:#eee;">
    
    <p><center><strong>Migration from TPEC to WTX for Global Healthcare<br> Leader <br><br></strong></center></p> 
  </div>
  </a>
</div>
               </div> 
                <div class="effect col-sm-4">
                  <div class="card">
  <a class="linkText1" target="_blank"  href="http://www.miraclesoft.com/library/CaseStudy/next-generation-esb-b2b-gateway-global-logistics-provider"><img height="130px" src="<?= AMAZON_URL ?>/images/dataservices/logistics.jpg" alt="Avatar" style="width:100%">
  <div class="container" style="background-color:#eee;">
    
    <p><center><strong>Next Generation ESB/B2B Gateway for Global Logistics Provider <br><br></strong></center></p> 
  </div>
  </a>
</div>
               </div> 
                
                 <div class="effect col-sm-4">
                     <div class="card">
 <a class="linkText1" target="_blank" href="http://www.miraclesoft.com/library/CaseStudy/enhanced-visibility-control-global-food-distributor"> <img height="130px" src="<?= AMAZON_URL ?>/images/dataservices/food.png" alt="Avatar" style="width:100%">
  <div class="container" style="background-color:#eee;">
    
     <p><center><strong>Enhanced Visibility and Control for Global Food Distributor <br><br></strong></center></p> 
  </div>
  </a>
</div>
                 </div>
            </div>
            
            
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="heavy">Our Partnerships</h1>
                </div>
            </div>
            <br>
            <div style="margin-left:-39px;" class="row">
                  <div class="col-sm-12">
		                   <div class="col-sm-2">
		                      <img src="<?= AMAZON_URL ?>/images/dataservices/ibm.png" alt="IBM logo" class="img-responsive ibm3">
		                   </div>
		                   <div class="col-sm-2">
		                      <img src="<?= AMAZON_URL ?>/images/dataservices/microsoft.png" alt="Microsoft logo" class="img-responsive micro3">
		                   </div>
		                   <div class="col-sm-2">
		                      <img src="<?= AMAZON_URL ?>/images/dataservices/infa_authreseller_vert_black.png" alt="Informatica logo" class="img-responsive vert">
		                   </div>
		                   <div class="col-sm-2">
		                      <img src="<?= AMAZON_URL ?>/images/dataservices/cloudera_connect_logo.png" alt="Cloudera logo" class="img-responsive info1 cont">
		                   </div>
		                    
		                   <div class="col-sm-2">
		                      <img src="<?= AMAZON_URL ?>/images/dataservices/sap-silver-partner.png" alt="SAP logo" class="img-responsive partner">
		                   </div>
		                   <div class="col-sm-2">
		                   </div>
		                  
		                </div>
            </div>
		                           
 <div class="row col-sm-12">
           <br> <p class="methodText">
               For more information regarding <strong>Miracle’s	 Big	 Data,	 BI	 and	 Analytics	 Offerings	</strong> reach out to <strong><a href="mailto:data@miraclesoft.com" class="linkText">data@miraclesoft.com</a></strong>
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
               <a href="" class="list-group-item-1">
                  <div>
                     <center><strong><font size="3%!important" color="#fff"  onMouseOut="this.style.color='#fff'" onMouseOver="this.style.color='#b7b2b3'">&nbsp; Big	Data,	BI	and	Analytics
                        </font></strong>
                     </center>
                  </div>
               </a>
               <a href="data-offerings" class="list-group-item">
                  <div>
                     <center><strong><font size="3%!important" color="#000">&nbsp;Our	Data	Offerings	
                        </font></strong>
                     </center>
                  </div>
               </a>
               <a href="engaging-with-miracle" class="list-group-item">
                  <div>
                     <center><strong><font size="3%!important" color="#000">&nbsp; Engaging	with	Miracle	
                        </font></strong>
                     </center>
                  </div>
               </a>
               
               <a href="industry-use-cases" class="list-group-item">
                  <div>
                     <center>
                     <strong><font size="3%!important" color="#000">&nbsp; Industry	Use	Cases		
                     </font></strong>
                     <center>
                  </div>
               </a>
               <a href="more-resources" class="list-group-item">
                  <div>
                     <center>
                     <strong><font size="3%!important" color="#000">&nbsp;More	Resources		
                     </font></strong>
                     <center>
                  </div>
               </a>
               
               <br>
               <div >
                  <div class="widget-content themed-background text-light-op">
                     <center><strong><font color="#ffffff">On Demand Webinar</font></strong></center>
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
                           background-image:url('<?= AMAZON_URL ?>/images/dataservices/bottling.png'); 
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
                           <a href="http://www.miraclesoft.com/library/CaseStudy/mft-changes-using-ibm-sterling-graphic-process-manager">
                              <h3 class="heavy"></h3>
                              <p><font size="3px"color="#fff"><style="opacity:0!important;"><strong>Reduced spin-up time for agile MFT Changes using IBM Sterling Graphic Process Manager  </strong></style></font></p>
                           </a>
                        </center>
                     </div>
                  </div>
                  <div class="widget-content  text-dark register-hover">
                     <a class="linkText1" href="http://www.miraclesoft.com/library/CaseStudy/mft-changes-using-ibm-sterling-graphic-process-manager" target="_blank">
                        <center><strong><font color="#fff"  onMouseOut="this.style.color='#fff'" onMouseOver="this.style.color='#b7b2b3'">Check Now</font></strong></center>
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
                   <a href="mailto:data@miraclesoft.com" > <div class="widget-content widget-hover themed-background text-light-op" style="margin-top: 10px;">
                            <center><strong><font color="#fff">
                                Contact Us</font></strong></center>
                        </div></a>
           </div>
          </span>
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