<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Microsoft Technologies | Miracle</title>
     <?php include '../../../config/Locations.php';?>
    <link href="../../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../css/font-awesome.min.css" rel="stylesheet">

    <link href="../../../css/main.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../../css/default.css" />
	<link rel="stylesheet" type="text/css" href="../../../css/component.css" />
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
	<link href="./css/themes.css" rel="stylesheet">
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
    url("<?= AMAZON_URL ?>/images/partnerships/microsoft/key.jpg");
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
text-decoration:none; color:#ffffff;
background-color: ##0d416b !important;
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
    background-color: #0d416b;
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
</head><!--/head-->
<?php include '../../../header.php';?>
<body>
 <section id="services" >
      
        <div class="emerald tinted-image">
        <div class="container ">
             <div class="row">
                  <br><br><br>
             <div class="col-sm-6 text-left">  
            <h1 class="heavy micro">Microsoft BI, Big Data and Analytics Services</h1>
          
          </div>
          <div class="col-sm-6 text-right">
            <ul class="breadcrumb pull-right">
                <li><a href="../../../">Home</a></li>
                <li><a href="../../../technologies/">Technologies</a></li>
                <li><a href="../">Microsoft</a></li>
                <li class="active">Analytics</li>
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
         
        <br>
        
        <p class="methodText"><strong>Miracle</strong> has been delivering innovative Business Intelligence, Reporting & Analytics solutions to our customers to derive more value out of their data. Our experienced global team provides services to assist customers with their journey to an increasingly mature and robust business intelligence & analytics environment.</p>
	    <br>
	    <div class="row" style="margin:-25px !important;"><br>
	    <div class="col-sm-3"> 
	        <center><img src="<?= AMAZON_URL ?>/images/partnerships/microsoft/3.png" class="img-responsive" alt=""></center>
	         
	    </div>
	    <div class="col-sm-3">
	        <center><img src="<?= AMAZON_URL ?>/images/partnerships/microsoft/4.png" class="img-responsive" alt=""></center>
	       
	    </div>
	    <div class="col-sm-3">
	        <center><img src="<?= AMAZON_URL ?>/images/partnerships/microsoft/2.png" class="img-responsive" alt=""></center>
	        
	    </div>
	    <div class="col-sm-3">
	        <center><img src="<?= AMAZON_URL ?>/images/partnerships/microsoft/artboard1.png" class="img-responsive" alt=""></center>
	        
	    </div>
        </div>
        <div class="row" style="margin:-25px !important;">
            <div class="col-sm-3"><center><h4 class="heavy">Business Analytics</h4></center></div>
             <div class="col-sm-3"><center><h4 class="heavy">Data platform</h4></center></div>
              <div class="col-sm-3"><center><h4 class="heavy">Big Data</h4></center></div>
               <div class="col-sm-3"><center><h4 class="heavy">Data Management</h4></center></div>
        </div>
       
        <div class="row">
        <h1 class="heavy">Core Data Services</h1>
        <div class="container">
                       <div class="col-sm-12">
                        <ul class="methodText">
            <li>Data Services, Business Intelligence & Analytics Assessment and Roadmap</li>
            <li>Industry/Domain specific KPIs, Dashboards, Scorecards and Analytics</li>
            <li>Descriptive and Diagnostic Analytics to provide the right metrics to drive business initiatives and make correct decisions</li>
            <li>Integrated Analytics solutions, providing real-time Predictive and Prescriptive Analytics for your business workloads</li>
            
        </ul>
                       </div>
                       </div>
       
       
       </div> 
       <div class="row">
   
       
        <img src="<?= AMAZON_URL ?>/images/partnerships/microsoft/analytics-mircrosoftBI.png" alt="microst infrastructure" class="img-responsive">
        
    
   
   </div>
   <div class="row">
       <h1 class="heavy"> Microsoft BI, Big Data and Analytics Services </h1>
        
         <div class="col-sm-6" style="margin-left:-15px !important;">
        
        <p class="methodText">
             <div class="container">
                       <div class="col-sm-12">
                        <ul class="methodText">
                <li><Strong>Consulting in BigData, Business Intelligence & Data Management</Strong>
                <div class="container">
                       <div class="col-sm-12">
                <ul class="methodText">
                    <li>Business Intelligence Strategic Roadmaps and Solution Portfolio Definition</li>
                    <li>Data Governance Framework Implementations</li>
                    <li>Master Data Management Strategy and Implementation Programs</li>
                    <li>BigData Platform Solutions – Appliance and SaaS</li>
                </ul>
                </div>
                </div>
                </li>
                
            </ul>
                       </div>
                       </div>
           
        </p>
    <div class="container">
                       <div class="col-sm-12">
                        <ul class="methodText">
        <li><Strong>Self Service BI & SQL Server BI Stack (SSIS, SSRS and SSAS)</Strong>
        <div class="container">
                       <div class="col-sm-12">
                <ul class="methodText">
                    <li>Self Service BI methodology, implementation strategy, & training</li>
                    <li>Expertise in Power Pivot, Power View, Excel Services & PivotTables, and Report Builder</li>
                  
                </ul>
                </div>
                </div>
                </li>
                   <li><strong>Full Life Cycle Implementations (SQL Server SMP and MPP)</strong>
                   <div class="container">
                       <div class="col-sm-12">
                <ul class="methodText">
                    <li>ETL, Data Warehouse, Cubes, Reports, Dashboards, Security</li>
                    <li>Distribution via SharePoint BI Tools</li>
                   
                </ul>
                </div>
                </div>
                </li>
                
                </ul>
                       </div>
                       </div>
       
    </div>
   <div class="col-sm-6">
       <p class="methodText">
       <div class="container">
                       <div class="col-sm-12">
                       <ul class="methodText"><li><strong>Data Quality, Governance, & Master Data Management</strong>
                       <div class="container">
                       <div class="col-sm-12">
                <ul class="methodText">
                    <li>Data Governance Definitions & Framework Implementation</li>
                    <li>Master Data Management and Application Master Data Integration</li>
                    <li>Data Cleansing and Matching Routines</li>
                </ul>
                </div></div></li>
                
                <li><strong>Business Intelligence Architecture Assessments </strong>
                <div class="container">
                       <div class="col-sm-12">
                <ul class="methodText">
                    <li>Solution Architecture</li>
                    <li>Project, ETL, and Analysis Services Health Checks</li>
                   
                </ul></div></div></li>
                <li><strong>BigData Solutions</strong>
                <div class="container">
                       <div class="col-sm-12">
                <ul class="methodText">
                    <li>Solution Architecture – Structured and Poly-Structured Data</li>
                    <li>Appliance-based BigData Platform - Microsoft Analytics Platform (APS)</li>
                    <li>SaaS-based Intelligent Analytics Platform - Cortana</li>
                </ul></div></div></li></ul>
                       </div>
                       </div>
          
       </p>
   </div>

    </div>
    <div class="row">
       
        <p class="methodText">For more information regarding our <strong>Microsoft Business Intelligence and Analytics Services,</strong> reach out to us at <a href="mailto:microsoft@miraclesoft.com" class="linkText"><strong>microsoft@miraclesoft.com.</strong></a></p>
   
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
               <a href="../" class="list-group-item-1">
                 <div>
                     <center><strong><font size="3%!important" color="#fff"  onMouseOut="this.style.color='#fff'" onMouseOver="this.style.color='#b7b2b3'">&nbsp; Microsoft@Miracle
                        </font></strong>
                     </center>
                  </div>
               </a>
               <a href="../cloud/" class="list-group-item">
                  <div >
                     <center><strong><font size="3%!important" color="#000">&nbsp; Hybrid Cloud and IoT
                        </font></strong>
                     </center>
                  </div>
               </a>
               <a href="../mobile/" class="list-group-item">
                  <div>
                     <center><strong><font size="3%!important" color="#000">&nbsp; Enterprise Mobility
                        </font></strong>
                     </center>
                  </div>
               </a>
               <a href="../portal/" class="list-group-item">
                  <div >
                     <center>
                     <strong><font size="3%!important" color="#000">&nbsp; Portal and Collaboration
                     </font></strong>
                     <center>
                  </div>
               </a>
               <a href="../apps/" class="list-group-item">
                  <div >
                     <center>
                     <strong><font size="3%!important" color="#000">&nbsp; Application Development
                     </font></strong>
                     <center>
                  </div>
               </a>
               <a href="#" class="list-group-item">
                  <div >
                     <center>
                     <strong><font size="3%!important" color="#00aae7">&nbsp; BI, Big Data and Analytics
                     </font></strong>
                     <center>
                  </div>
               </a>
               <br>
               <div >
                  <div class="widget-content themed-background text-light-op">
                     <center><strong><font color="#fff">Case Study</font></strong></center>
                  </div>
                  <div class="widget box">
                     <div class="widget-content" id="check" >
                        <style>
                           #check {
                           background-image:url('<?= AMAZON_URL ?>/images/partnerships/microsoft/bigdataimage.png'); 
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
                              <p><font size="3px"color="#fff"><strong>Automated Supplier/Marketplace Integration and Retail Web Portal</strong></font></p>
                           </a>
                        </center>
                     </div>
                  </div>
                  <div class="widget-content  text-dark register-hover">
                     <a class="linkText1" href="http://www.miraclesoft.com/why/sstory8.php" target="_blank">
                        <center><strong><font color="#fff" onMouseOut="this.style.color='#fff'" onMouseOver="this.style.color='#b7b2b3'">Read Today</font></strong></center>
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
              <span data-toggle="collapse" >
                    <div class="widget">
                   <a href="mailto:microsoft@miraclesoft.com" > <div class="widget-content widget-hover themed-background text-light-op" style="margin-top: 10px";>
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

    
<div class="row">
    
	
			
			</div>
<style>
    .menu-button
    {
        
        color:#ffffff;
        display:inline-block;
        cursor:pointer;
    }
    label
    {
        color:#ffffff;
    }
.hide-menu
{
    background-color:rgba(71,163,218,1);
    position: fixed;
    bottom:0px;
    right:0;
    z-index: 1;
    width: 300px;
   height:100%;
    padding:18px;
    -webkit-transform: translate3d(300px,0,0);
    -moz-transform: translate3d(300px,0,0);
    -o-transform: translate3d(300px,0,0);
    -ms-transform: translate3d(300px,0,0);
    transform: translate3d(300px,0,0);      
    -webkit-transition: all 0.3s linear;
    -moz-transition: all 0.3s linear;
    -ms-transition: all 0.3s linear;
    -o-transition: all 0.3s linear;
    transition: all 0.3s linear;
}
.show-menu      
{
    -webkit-transform: translate3d(0,0,0);
    -moz-transform: translate3d(0,0,0);
    -o-transform: translate3d(0,0,0);
    -ms-transform: translate3d(0,0,0);
    transform: translate3d(0,0,0);
 }  
 h6 {
    
    color: #ffffff !important;
    font-weight:bold !important;
 }
 
 .menu-button {
    border: 0px!important solid #ffffff !important;
 }
</style>
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
    </section><!--/#about-us-->
<?php include '../../../footer.php';?>
</body>
</html>


