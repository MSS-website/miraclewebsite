<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>IoT solution anatomy | Miracle</title>
      <link href="../../css/bootstrap.min.css" rel="stylesheet">
      <?php include '../../config/Locations.php'; ?>
      <link href="../../css/font-awesome.min.css" rel="stylesheet">
      <link href="../../css/main.css" rel="stylesheet">
      <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="../../css/default.css" />
      <link rel="stylesheet" type="text/css" href="../../css/component.css" />
      <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
      <link href="/css/themes.css" rel="stylesheet">
      <link rel="shortcut icon" href="../../images/favicon.ico">
       <link rel="stylesheet" type="text/css" href="../../css/side-bar.css">
       
        
      
      <style>
           .tinted-image {
         background: 
         /* top, transparent red */
         linear-gradient(
         rgba(0, 0, 0, 0.55), 
         rgba(0, 0, 0, 0.55)
         ),
         /* your image */
         url("<?= AMAZON_URL ?>/images/iot/iot-header.png");
         -webkit-background-size: cover;
         -moz-background-size: cover;
         -o-background-size: cover;
         background-size: cover;
         }
        .nav-tabs {
     border: 0px solid #ddd;
     }       
.nav-tabs > li > a {
display: table-cell;
vertical-align: middle;
font-size: 15px;
line-height: 1.16666667;
border-radius:0;
border-style: solid;
border-color: #ddd;
border:1px solid #eeeeee;
width:97%;
padding:18px 67px 18px;
}
.nav-tabs > li.active > a{
background-color:#00aae7 !important;
   color:#ffffff !important;
}
.nav-tabs > li.active > a:hover {

}

/* Tab Content */
.tab-pane {
   padding-left: 1px;
}
.light-blue-color-box{
    height:auto;
    width:auto;
    background-color:#00aae7;
    color:#ffffff;
    padding: 9px 15px 1px 25px;
    }
 .medium-blue-color-box{
      height:auto;
    width:auto;
    background-color:#2368a0;
    color:#ffffff;
    padding: 9px 15px 1px 25px;
     }
     .dark-blue-color-box{
      height:auto;
    width:auto;
    background-color:#0d416b;
    color:#ffffff;
    padding: 9px 15px 1px 25px;
     }
     .red-color{
             height:auto;
    width:auto;
    background-color:#ef4048;
    color:#ffffff;
    padding: 9px 15px 1px 25px;
     }
         
        .light-grey{
             height:auto;
    width:auto;
    background-color:#b7b2b3;
    color:#ffffff;
    padding: 9px 15px 1px 25px;
            
            }
            .dark-grey{
                height:auto;
    width:auto;
    background-color:#8c8c8c;
    color:#ffffff;
    padding: 9px 15px 1px 25px;
                
                }
                .black-color{
   height:auto;
    width:auto;
    background-color:#232527;
    color:#ffffff;
    padding: 9px 15px 1px 25px;
                    
                    }
 
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
    .light{
      color:#fff;
    }
    .text-light{
      color:#fff !important;
    }
    
    .greyback{
    background-color:#eeeeee;
    color:#000;
    padding:10px;
}
.light-blue{
  color:#00aae7;
}
  
  .link-text:hover{
    color:#00aae7;
  }
    
   .modal .modal-header {
     padding:10px 10px 10px 15px !important;
   }
   
   .modal-title{
     text-transform:none !important;
   }
   
.tabs-left, .tabs-right {
  border-bottom: none;
  padding-top: 2px;
}
.tabs-left {
  border-right: 1px solid #ddd;
}
.tabs-right {
  border-left: 1px solid #ddd;
}
.tabs-left>li, .tabs-right>li {
  float: none;
  margin-bottom: 2px;
}
.tabs-left>li {
  margin-right: -1px;
}
.tabs-right>li {
  margin-left: -1px;
  
}

.tabs-left>li.active>a,
.tabs-left>li.active>a:hover,
.tabs-left>li.active>a:focus {
  border-bottom-color: #ddd;
  border-right-color: transparent;
}

.tabs-right>li.active>a,
.tabs-right>li.active>a:hover,
.tabs-right>li.active>a:focus {
  border-bottom: 1px solid #ddd;
  border-left-color: transparent;
}
.tabs-left>li>a {
  border-radius: 4px 0 0 4px;
  margin-right: 0;
  display:block;
}
.tabs-right>li>a {
  border-radius: 0 4px 4px 0;
  margin-right: 0;
}
.nav-tabs {
    border-bottom: 0px solid #ddd !important;
    border-radius:0px;
}

    .text-left h1{color:#fff !important;}
    .pull-right li,.pull-right li a{color:#FFF !important;}
    
    .i-plain{
        text-shadow:none !important;
        font-size:28px !important;
    }
    ul.tab {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
    width:97%
}

/* Float the list items side by side */
ul.tab li {
    float: left;
   
}

/* Style the links inside the list items */
ul.tab li a  {
    display: inline-block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    transition: 0.3s;
    font-size: 17px;
    
}

/* Change background color of links on hover */
ul.tab li a:hover {
    background-color: #ddd;
    border-bottom: 3px solid #00aae7 !important;
}

/* Create an active/current tablink class */
ul.tab li a:focus, .active {
    
   
   
}


/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
   
    border-top: none;
}

#exTab1 .tab-content {
  color : white;
  padding : 5px 15px;
}

#exTab2 h3 {
  color : white;
  background-color: #428bca;
  padding : 5px 15px;
}

/* remove border radius for the tab */

#exTab1 .nav-pills:focus,.active{
  border-radius: 0;
}

#exTab1 .nav-pills:focus,.active:after{
 z-index: -1;
	position: absolute;
    top: 98.1%;
    left: 70%;
    margin-left: -25%;
    content: '';
    width: 0;
    height: 0;
   
    
}
.nav{
    margin-top:20px;
}
.nav-pills > li.active > a, .nav-pills > li.active > a:hover, .nav-pills > li.active > a:focus {
    color: #232527 !important;
    background-color: #eeeeee !important;
    border-bottom: 2px solid #00aae7;
}
.nav-pills:focus,li.active:after{
 border-top: solid 7px #00aae7;
 border-left: solid 7px transparent;
    border-right: solid 7px transparent;
    
}
.nav-pills> li> a {
    border-radius: 0px!important;
}
.tabd{
              height:auto;
              width:auto;
              margin-left: -27px;
              color:#ffffff;
              background-color:#0d416b;
              padding: 9px 9px 9px 9px;
          }
          
          .tabdh{
              height:60px;
              width:auto;
              margin-left: -10px;
              color:#ffffff;
              background-color:#0d416b;
              padding: 9px 9px 9px 9px;
          }
          .tabd1{
              height:auto;
              width:auto;
              margin-left: -27px;
              color:#ffffff;
              background-color:#00aae7;
              padding: 9px 9px 9px 9px;
          }
          .text-pad{
              padding: 9px 0px 0px 5px;
              background-color:#eeeeee;
             
              }
              .text-padm{
              padding: 9px 0px 0px 5px;
              background-color:#eeeeee;
              width: 99%;
             
              }
.response{
    border-radius:50%;
    }

.bgdblue{
    background-color:#0d416b;
    color:#ffffff;
}
.bgdblue:hover{
    background-color:#00aae7;
    color:#ffffff;
}
.btn-primary:hover{
    background-color:#0d416b !important;
}
 #check {
                           background-image:url('<?= AMAZON_URL ?>/images/iot/bottling.png'); 
                           background-size: 260px 140px;
                           opacity:0.6;
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
                     <h1 class="heavy micro">Our IoT Solution Anatomy</h1>
                  </div>
                  <div class="col-sm-6 text-right">
                     <ul class="breadcrumb pull-right">
                         <li><a href="../../">Home</a></li>
                        <li><a href="../">Technologies</a></li>
                        <li><a href="../iot">IoT</a></li>
                        <li class="active">Solution Anatomy</li>
                     </ul>
                  </div>
               </div>
            </div>
            <br>
         
      </section>
      <section id="services" class="container">
         <br>
         <div class="row">
         <div class="col-sm-9">
            <div class="row">
               <div class="col-sm-12">
                  <p class="methodText">Connecting things is the new business driver that can help differentiate your organization. So, what does it mean to build a Enterprise-Grade IoT Solution? Multiple data sources, heterogenous data formats, numerous protocols, and complex systems make building an IoT solution not so easy. Through the following solution anatomy you can understand what it takes to create the next big IoT idea. </p>
                 
                  <p class="methodText">From the device to the gateway, all the way to the end user experience – each component plays its own unique part in the solution. It is important to understand the various messaging protocols such as AMQP, MQTT and STOMP, along with the numerous nuances of a fully blown IoT platform such as Device Management, Security and Integration. </p>
              <img src="<?= AMAZON_URL ?>/images/iot/iot-44.png" alt="QA" class="img-responsive">
               </div>
            </div>
      <section class="tile">
                                <!-- tile body -->
                                <div class="tile-body">
                                    <ul  class="nav nav-pills" id="exTab1" >
                                			<li class="active" id="ex"><a href="#1a" data-toggle="tab">Security</a>
                                			</li>
                                			<li><a href="#2a" data-toggle="tab">Messaging</a>
                                			</li>
                                			<li><a href="#3a" data-toggle="tab">Analytics</a>
                                			</li>
                                  		<li><a href="#4a" data-toggle="tab">Integration</a>
                                			</li>
                                	</ul>
                                   <br>
	                    <div class="tab-content clearfix">
	                    
			 	       <div class="tab-pane active" id="1a" style="margin-left:19px;">
			 	        <div class="row">
			 	       <div class="container">
			 	       <div class="col-sm-12">
			 	          <ul>
			 	        <li>From your data to the devices, security is a crucial part of an IoT Solution. Authentication of your devices helps to provide proper identity for all the data and will also ensure that rogue attacks cannot take place within your gateway. It is important to ensure that the data that is flowing through your devices, gateway and data stores is secured and encrypted both at rest and in transit. </li>
			 	        <li>Security for IoT can be considered through the following key areas, </li>
			 	        <div class="container">
			 	       <div class="col-sm-12">
			 	        <ul type="square">
			 	        <li>Device Identification and Authentication </li>
			 	        <li>Application Authorization for Data Access</li>
			 	        <li>Data Encryption and Protection</li>
			 	        <li>User Identity Management </li>
			 	        </ul></div></div>
			 	        
			 	        </ul>
			 	       </div>
			 	       </div>
			 	     
			 	         
                          </div>
                           	</div>
				          <div class="tab-pane" id="2a" style="margin-left:29px;">
                          <div class="row">
                          <div class="container">
			 	       <div class="col-sm-12"> <ul>
                          <li>Data transfer, transformation and persistence are key for any IoT solution, hence defining proper messaging parameters will be critical for the success of an real-time application. Your platform must support, if needed, the application of rules to be performed on an event. </li>
                          <li>Important messaging options that should be considered during the build of an IoT solution are, </li>
                           <div class="container">
			 	       <div class="col-sm-12"> <ul type="square">
                          <li>Device-to-Device Messaging Protocol</li>
                          <li>Device-to-Gateway Messaging Protocol</li>
                          <li>Stream Messaging and Event Processing </li>
                          <li>Message Routing and Transformation </li>
                          </ul>
                          </div></div>
                         
                          </ul></div></div>
                            
                          </div>
                            </div>
                            <div class="tab-pane" id="3a" style="margin-left:27px;">
                              <div class="row">
                               <div class="container">
			 	       <div class="col-sm-12"> <ul>
                               <li>Data without analytics, your IoT Solution will be blind. As data streams through your system you will start to see value only when action is taken in real-time on this data. </li>
                               <li>Some of the key points to be considered when modeling your insights platform for IoT data are, </li>
                              <div class="container">
			 	       <div class="col-sm-12">   <ul type="square">
                               <li>Data Modeling and Persistence </li>
                                <li>Stream Analytics and Event Generation </li>
                                 <li>Real-time Visualization and Dashboards</li>
                               </ul>
                               </div></div>
                               
                               </ul></div></div>
                               
                              </div>
                          	</div>
                              <div class="tab-pane" id="4a" style="margin-left:26px;">
                             <div class="row">
                            <div class="container">
			 	       <div class="col-sm-12"> <ul>
                            <li>Allowing your developers to easily integrate and build applications through your IoT platform will ensure widespread adoption. Giving developers the right access to data can always be tricky and this is where an API Gateway will assist in providing fine-grained access controls, usage analytics and security for your IoT solution. </li>
                            
                            </ul></div></div>
                            
                              </div>
                           </div>
                            <p class="methodText"> <br>
              For more information regarding Miracle’s view of an<strong> Enterprise IoT Solution Anatomy,</strong> please reach out to<strong><a href="mailto:iot@miraclesoft.com" class="linkText"> iot@miraclesoft.com</a></strong>
            </p>
                    			</div>
                                 </div>
                          <!-- /tile body -->
                         </section>
                 
         
         </div>
         <div class="col-sm-3 sidebar pull-right">
           <div class="mini-submenu">
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
            </div>
            <div class="list-group">
              
               <a href="../iot" class="list-group-item-1">
                  <div>
                     <center><strong><font size="3%!important" color="#ffffff"  onMouseOut="this.style.color='#ffffff'" onMouseOver="this.style.color='#b7b2b3'">&nbsp; Internet of Things
                        </font></strong>
                     </center>
                  </div>
               </a>
               <a href="service-offerings" class="list-group-item">
                  <div >
                     <center><strong><font size="3%!important" color="#000">&nbsp;Our Service Offerings
                        </font></strong>
                     </center>
                  </div>
               </a>
               <a href="#" class="list-group-item">
                  <div>
                     <center>
                     <strong><font size="3%!important" color="#00aae7">&nbsp;IoT Solution Anatomy
                     </font></strong>
                     <center>
                  </div>
               </a>
               <a href="services-explained" class="list-group-item">
                  <div>
                     <center>
                     <strong><font size="3%!important" color="#000">&nbsp;Services Explained
                     </font></strong>
                     <center>
                  </div>
               </a>
                <a href="bring-iot-home" class="list-group-item">
                  <div>
                     <center><strong><font size="3%!important" color="#000">&nbsp;Bring IoT Home
                        </font></strong>
                     </center>
                  </div>
               </a>
               <a href="thought-leadership" class="list-group-item">
                  <div>
                     <center>
                     <strong><font size="3%!important" color="#000">&nbsp;Thought Leadership
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
                        <center>
                           <a href="http://www.miraclesoft.com/webinars/connecting-obd-2-sensor-watson-iot-platform" target="_blank">
                              <h3 class="heavy"></h3>
                              <p><font size="3px"color="#ffffff"><style="opacity:0!important;"><strong>Connecting an OBD II Sensor to the Watson IoT Platform</strong></style></font></p>
                           </a>
                        </center>
                     </div>
                  </div>
                  <div class="widget-content  text-dark register-hover">
                     <a class="linkText1" href="http://www.miraclesoft.com/webinars/connecting-obd-2-sensor-watson-iot-platform" target="_blank">
                        <center><strong><font color="#ffffff"  onMouseOut="this.style.color='#ffffff'" onMouseOver="this.style.color='#b7b2b3'">Check Now</font></strong></center>
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
                   <a href="mailto:iot@miraclesoft.com" > <div class="widget-content widget-hover themed-background text-light-op" style="margin-top: 10px;">
                    <center><strong><font color="#ffffff">Contact Us</font></strong></center>
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
         
         <script src="js/query.js"></script>
         <script src="js/bootstrap.js"></script>
         
         
         <script src="js/jquery-2.2.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        
        <script src="js/plugins.js"></script>
        
        <script src="js/app.js"></script>
         
         <br>
         
      </section>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
      <!--/#about-us-->
      <?php include '../../footer.php';?>
   </body>
</html>
