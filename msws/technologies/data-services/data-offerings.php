<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="Miracle data offerings can help you move from idea to pilot to solution rapidly to ensure that your data makes a difference and solve complex business problems">
      <title>Data Offerings| Miracle</title>
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
                         background-color:#232527;
          height:80px;
       
                            } 
                            
                           #check2{
                       background-color:#ef4048;
          height:80px;
          
                            }
                            
                              #check3{
                       background-color:#0d416b;
          height:80px;
                            }
                            
                            #check4{
                          background-color:#00aae7;
          height:80px;
                            }
.ibm{
   padding-left: 33px;
padding-top: 0;
padding-bottom: 38px
}



    .greyht{
        padding-bottom:50px !important;
    }
    .greyht3{
        padding-bottom:185px !important;
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
                     <h1 class="heavy micro">Miracle’s Data Offerings</h1>
                  </div>
               
                  <div class="col-sm-6 text-right">
                     <ul class="breadcrumb pull-right">
                        <li><a href="../">Home</a></li>
                        <li><a href="../../technologies/">Technologies</a></li>
                        <li> <a href="../../technologies/data-services/">Data Practice</a></li>
                        <li class="active">Data Offerings</li>
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
               <div class="col-sm-12">  <br>
                 
                  <p class="methodText">Through our industry experts and technology gurus, Miracle can help you move from idea to pilot the solution rapidly to ensure that your data makes a difference. In today’s fast paced world, it is important for organizations to take action when data is fresh and hot, and a scalable and reliable solution is the starting point for that.</p>
                  <p class="methodText"><strong>Miracle’s Data Services Practice </strong>provides several services ranging from,</p>
                  <div class="row">
                      <div class="col-sm-6">
                      <div class="container">
                      <div class="col-sm-12">
                      <ul class="methodText">
                      <li>Big Data and BI Implementation & Support</li>
                      <li>Big Data and BI Products/Tech Evaluation</li>
                      <li>Architecture and Consulting Services</li>
                      <li>Predictive Analytics - Deep/Machine Learning</li>
                      </ul>
                      </div>
                      </div>
                          
                      </div>
                      <div class="col-sm-6">
                      <ul class="methodText">
                      <li>COE Establishment, PoC/PoT Services</li>
                      <li> Digital Analytics Roadmap and Strategic Planning</li>
                      <li>Enable Artificial Intelligence on Neural Nets</li>
                      <li>Technology Upgrade/Migration Services</li>
                  </ul>
                      </div>
                     
                  </div>
               </div>
        <div class="col-sm-12">
            <p class="methodText">
               For more information regarding <strong>Miracle’s	 Big	 Data,	 BI	 and	 Analytics	 Offerings	</strong> reach out to <strong><a href="mailto:data@miraclesoft.com" class="linkText">data@miraclesoft.com</a></strong>
            </p>
            
         </div>
         </div>
           <div class="row">
                  <div class="col-sm-12">
                      <h1 class="heavy">Miracle's Data and Analytics Overview</h1>
                   </div>
          </div> 
             <div class="row" >
                 <div class="col-sm-6">
                  <div class="card" id="check4" >
                     <h3 class="heavy" style="margin:10px;padding-left:13px;"><font color="#ffffff">Big Data</font></h3>
                 
                  <div class="container" style="background-color:#eee;padding:2px;">
                    <center>
                    <div class="container">
                    <div class="col-sm-12">
                     <ul style="text-align:left;" class="methodText">
             <br>
                              <li>Apache Hadoop</li>
                                 <li>IBM BigInsights</li>
                                 <li>Cloudera</li>
                                 <li>Horton Works</li>
                                 <li>Data Lake</li>
                                 <li>Google Cloud Platform</li>
                                 <li>Microsoft Azure</li>
                                 <li>Amazon Web Services</li>
                                  
            </ul>
                    </div>
                    </div>
                        <br>
                       </center> 
                  </div>
                  </a>
                  </div>
               </div>
               
                 <div class="col-sm-6">
                  <div class="card" id="check1">
                      <h3 class="heavy" style="margin:10px;padding-left:13px;"><font color="#ffffff" >Business Intelligence</font></h3>
                  
                  <div class="container" style="background-color:#eee;padding:2px;">
                    <center>
                     <div class="container">
                    <div class="col-sm-12">
                          <ul style="text-align:left;padding-bottom:22px;" class="methodText">
                              <br>
                                   <li>Cognos</li>
                                 <li>MicroStrategy</li>
                                 <li>Business Objects</li>
                                 <li>OBIEE</li>
                                 <li>Tableau</li>
                                 <li>Microsoft Power BI</li>
                                 <li>QlikView / QlikSense</li>
                                 <li>Oracle Apex</li>
                               
            </ul></div></div>
                    </center><p></p> 
                  </div>
                  </a>
                  </div>
               </div>
       
        </div>
<div class="row" >
        <div class="col-sm-6">
                  <div class="card" id="check2" >
                      <h3 class="heavy" style="margin:10px;padding-left:13px;"><font color="#ffffff" >Data Warehousing</font></h3>
                      <div class="overlay"></div>
                
                  <div class="container" style="background-color:#eee;padding:2px;">
                    <center>
                     <div class="container">
                    <div class="col-sm-12">
                         <ul style="text-align:left;" class="methodText">
           <br>
                                 <li>Teradata</li>
                                 <li>Sybase</li>
                                 <li>Oracle</li>
                                 <li> SQL Server</li>
                                 <li>ETL Development - Informatica, DataStage, SSIS, Flume, Sqoop, and MapReduce Mongo DB/Maria DB</li>
                                  <li>Cassandra</li>
                                 <li>DB2</li>
                                 <li>Mongo DB / Maria DB</li>
                                 <li>Database Administration</li>
                                 <li>Managed Services</li>
                                <br>
            </ul></div></div>
                        </center> 
                  </div>
                  </a>
                  </div>
               </div>
               
                 <div class="col-sm-6">
                  <div class="card" id="check3">
                      <h3 class="heavy"style="margin:10px;padding-left:13px;"><font color="#ffffff" >Advanced Analytics</font></h3>
                 
                  <div class="container" style="background-color:#eee; height:330px;padding:2px;">
                    <center>
                     <div class="container">
                    <div class="col-sm-12">
                           <ul style="text-align:left;padding-bottom:30px;" class="methodText">
              <br>
                                   <li>Statistical Analysis</li> 
                                  <li>Quantitative Analysis</li>
                                  <li> Data Mining</li>
                                  <li> Predictive Modeling</li>
                                 <li>H2O</li>
                                 <li>Apache Spark</li>
                                 <li>Alteryx / RapidMiner</li>
            </ul></div></div>
                    </center><p></p> 
                  </div>
                  </a>
                  </div>
                  
               </div>
       
        </div>
     
      <div class="row">
               <div class="col-sm-12">
                  <h1 class="heavy">Data and Analytics Technology</h1>
               </div>
                 <div class="col-sm-4">
                    <div class="widget-content text-light-op" style="background-color:#00aae7;">
                    <center><strong><font color="#ffffff">Database Management <br>Expertise</font></strong></center>
                  </div>
                  <div class="widget box">
                     <div class="widget-content ibm" style="border: 1px solid #eee;background-color:#eee; padding-bottom:30px;padding-top:20px;">
                              <ul class="methodText">
                                <li>IBM DB2</li>
                                <li>Oracle</li>
                                <li>Teradata</li>
                                <li>Netezza</li>
                                <li>IBM dashDB</li>
                                <li>MySQL</li>
                                <li>MS SQLServer</li>
                                <li>Cloudant (NoSQL)</li>
                                <li>Mongodb</li>
                                <li>Cassandra</li>
                                <li>Sybase</li>
                             </ul> 
                        </div>
                  </div>
               </div>
              <div class="col-sm-4">
                   <div class="widget-content  text-light-op" style="background-color:#0d416b">
                      
                     <center><strong><font color="#ffffff">Business Intelligence and <br>Analytics</font></strong></center>
                  </div>
                  <div class="widget box">
                     <div class="widget-content ibm" style="border: 1px solid #eee; background-color:#eee;padding-bottom:95px;padding-top:20px;">
                          <ul class="methodText">
                                <li>IBM Cognos</li>
                                <li>IBM Watson Analytics</li>
                                <li>SAP Business Objects</li>
                                <li>MicroStrategy</li>
                                <li>Tableau</li>
                                <li>Qlik (QilkView/QlikSense)</li>
                                <li>Microsoft Power BI</li>
                                
                         </ul>
                     </div>
                  </div>
               </div>
                <div class="col-sm-4">
                    <div class="widget-content text-light-op" style="background-color:#2368a0;">
                    <center><strong><font color="#ffffff">Big Data and Hadoop <br> Ecosystem</font></strong></center>
                  </div>
                  <div class="widget box">
                     <div class="widget-content ibm" style="border: 1px solid #eee;background-color:#eee; padding-bottom:160px;padding-top:20px;">
                              <ul class="methodText">
                                <li>Cloudera</li>
                                <li>HortonWorks</li>
                                <li>Map R</li>
                                <li>IBM Big Insights</li>
                                <li>Apache Spark</li> 
                                 
                             </ul>
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
               <a href="index" class="list-group-item-1">
                  <div>
                     <center><strong><font size="3%!important" color="#ffffff"  onMouseOut="this.style.color='#fff'" onMouseOver="this.style.color='#b7b2b3'">&nbsp; Big	Data,	BI	and	Analytics
                        </font></strong>
                     </center>
                  </div>
               </a>
               <a href="#" class="list-group-item">
                  <div>
                     <center><strong><font size="3%!important" color="#00aae7">&nbsp;Our	Data	Offerings	
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
                           <a href="http://www.miraclesoft.com/webinars/reduce-DBA-costs-miracles-managed-services">
                              <h3 class="heavy"></h3>
                              <p><font size="3px"color="#ffffff"><style="opacity:0!important;"><strong>Reduce Your DBA Costs with Miracle's Managed Services </strong></style></font></p>
                           </a>
                        </center>
                     </div>
                  </div>
                  <div class="widget-content  text-dark register-hover">
                     <a class="linkText1" href="http://www.miraclesoft.com/webinars/reduce-DBA-costs-miracles-managed-services" target="_blank">
                        <center><strong><font color="#ffffff"  onMouseOut="this.style.color='#fff'" onMouseOver="this.style.color='#b7b2b3'">Check Now</font></strong></center>
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
           
         
         <link rel="stylesheet" href="../../css/box.css">
         
       
         
      </section>
      <!--/#about-us-->
      <?php include '../../footer.php';?>
   </body>
</html>