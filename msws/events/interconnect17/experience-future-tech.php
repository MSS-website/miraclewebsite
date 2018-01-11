<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
  <?php include '../../config/Locations.php';?>
    <!-- meta tags start for Facebook -->
						
						<meta property="og:url"                content="http://www.miraclesoft.com/events/interconnect17/" />
						<meta property="og:type"               content="article" />
						<meta property="og:title"              content="Platinium sponsors again" />
						<meta property="og:description"        content="How much does culture influence creative thinking?" />
						<meta property="og:image"              content="<?= AMAZON_URL ?>/images/interconnect-2017-paralx.png" />
	
	<!-- meta tags end for facebook   -->
						
    <title>Experience-Tech - IC'17 | Miracle</title>
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/font-awesome.min.css" rel="stylesheet">
    <link href="../../css/animate.css" rel="stylesheet">
    <link href="../../css/main.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../css/default.css" />
	<link rel="stylesheet" type="text/css" href="../../css/component.css" />
	<link href="../../css/interconnect-2017.css" rel="stylesheet">
	<link rel="shortcut icon" href="../../images/favicon.ico">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

</head><!--/head-->
<?php include '../../header.php';?>
<body>
  <style>
  a:hover
  {
    text-decoration:none;
   }
    b,strong
    {
      font-weight:600 !important;
    }
      .tinted-image {
         background: 
         /* top, transparent red */
         linear-gradient(
         rgba(0, 0, 0, 0.55), 
         rgba(0, 0, 0, 0.55)
         ),
         /* your image */
         url("<?= AMAZON_URL ?>/images/interconnect17/experience-future.png");
         -webkit-background-size: cover;
         -moz-background-size: cover;
         -o-background-size: cover;
         background-size: cover;
        
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
.nav{
    margin-top:20px;
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
.bgblue{
    background-color:#00aae7;
}
.bgdblue{
    background-color:#0d416b;
}
.bgred{
    background-color:#ef4048;
}
.tabd{
              height:auto;
              margin-left: -25px;
              color:#ffffff;
             margin-top:5px;
              padding: 9px 9px 9px 9px;
          }
          .tabdh{
              height:60px;
              margin-left: -10px;
              color:#ffffff;
              background-color:#0d416b;
              padding: 9px 9px 9px 9px;
               margin-top:5px;
          }
          .tabd1{
              height:auto;
              margin-top:5px;
              margin-left: -27px;
              color:#ffffff;
             
              padding: 9px 9px 9px 9px;
          }
          .text-pad{
              padding: 9px 0px 0px 5px;
              background-color:#eeeeee;
               margin-top:5px;
                   width: 86.3%;
              }
               .text-pad1{
              padding: 9px 0px 0px 5px;
              background-color:#eeeeee;
              width:86.3%;
              margin-top:5px;
              }
.response{
    border-radius:50%;}
 </style>
  <section id="interconnect" >
    
       
        <div class="tinted-image">
        <div class="container">
        <div class="row"> <br><br><br>
          <div class="col-sm-8 text-left">
            <h1 class="heavy">Experience Future Tech @ Interconnect ‘17</h1>
          
          </div>
          <div class="col-sm-4 text-right">
            <ul class="breadcrumb pull-right">
                <li><a href="../../">Home</a></li>
                <li><a href="../../events">Events</a></li>
                <li class="active">Interconnect 2017</li>
            </ul>
                  </div>
               </div>
               <br>
            </div>
            </div>
         
      </section>

  
        <br>
 
        
        
        <div class="container">
        <div class="row">
          <div class="col-sm-9">
              
              <p class="methodText">Through <strong><font color="#ef4048">Miracle’s Experience Future Tech</font></strong> showcase we will be demoing live uses cases and technology to help you understand what it takes to take an idea into production. From Cloud to Cognitive, we have you covered - come by <strong><font color="#00aae7">Booth #729</font></strong> in the Solution EXPO at Interconnect ’17 this March. Speak with our Innovation Labs team members and enjoy some thrilling conversation.</p>
               
                            <!-- tile -->
                            <section class="tile">

                                <!-- tile body -->
                                <div class="tile-body">
                                    
                                
<ul  class="nav nav-pills" id="exTab1" >
				<li class="active" id="ex"><a href="#cloud-and-devops" data-toggle="tab">Cloud and DevOps</a>
			</li>
			<li><a href="#hybrid-integration" data-toggle="tab">Hybrid Integration</a>
			</li>
			<li><a href="#cognitive-iot" data-toggle="tab">Cognitive and IoT</a>
			</li>
		</ul>
<br>
	<div class="tab-content clearfix">
			 	<div class="tab-pane active" id="cloud-and-devops" style="margin-left:29px;">
			 	  <div class="col-sm-12" style="margin-left:-40px; width: 106%;" ><p class="methodText">As digital transformation continues to become the most critical piece for all CIOs, Cloud and DevOps continue to be the enablers for this transformation. They provide you with the speed and quality that is required to stay competitive in this new era of consumer demand.</p></div>
			 	<div class="row">
            <div class="col-sm-12">
                 <div class="col-sm-2 tabd bgdblue">
                   <strong><center>Cloud<center></strong>
                 </div>
                <div class="col-sm-10 text-pad1"  style="color:rgba(0, 0, 0, 0.60);" >
                   <p class="methodText"><strong>&nbsp;&nbsp;The 15 Minute WAS Cluster Challenge</strong></p>
                 </div>
              </div>
          </div>
           
<!--<p class="methodText" style="margin:10px 0px 10px -30px;"><em>&nbsp;Monday(March 20th, 2017) - 1:00 PM PST at Islander E  </em></p> -->
   <div class="row">
   <div class="col-sm-12">
   <p class="methodText" style="margin: 15px 0px 15px -23px;">What if you could spin up multiple WAS Nodes, configure a cluster and rapidly deploy your application all on the cloud. With IBM Bluemix you can, and it takes minutes to get your environment up and running. Explore various deployment options from buildpacks to containers and check out the possible migration routes that are correct for you.</p>
   </div>
   </div>
   <!--- session 2--->
   	 	<div class="row">
             <div class="col-sm-12">
                 <div class="col-sm-2 tabd bgblue">
                   <strong><center>DevOps<center></strong>
                 </div>
                <div class="col-md-10 text-pad1"  style="color:rgba(0, 0, 0, 0.60); " >
                   <p class="methodText"><strong>&nbsp;&nbsp;Continuously Deliver your Java Applications</strong></p>
                 </div>
             </div>
          </div>
           

   <div class="row">
   <div class="col-sm-12">
   <p class="methodText" style="margin: 15px 0px 15px -23px;">While cloud provides you with scalability, you need to enable your developers to be able to rapidly deploy to see the full benefits. With DevOps Toolchains and Delivery Pipelines, IBM Bluemix allows your developers to rapidly build, test, deploy and promote your applications. In this live demo you will be able to see how you can enable a delivery pipeline which automates code analysis, unit tests, build and deploy, integration tests and blue-green deployments.</p>
   </div>
   </div>
    <!--- session 3--->
    <div class="row">
            <div class="col-sm-12">
                 <div class="col-sm-2 tabd bgred">
                   <strong><center>Serverless<center></strong>
                 </div>
                <div class="col-sm-10 text-pad1"  style="color:rgba(0, 0, 0, 0.60); ">
                   <p class="methodText"><strong>&nbsp;&nbsp;Image Processing Pipeline with OpenWhisk</strong></p>
                 </div>
             </div>
          </div>

   <div class="row">
   <div class="col-sm-12">
   <p class="methodText" style="margin: 15px 0px 15px -23px;">From virtualization to the cloud, from VMs to containers – we have also been looking for ways to improve our applications. But what if you could forget about servers for a while, and only focus on building? That is what serverless provides to your developers – rapid deployment of your services with no headaches about infrastructure. So what kind of loads to your run on OpenWhisk? Check out what we’ve built on OpenWhick and understand how it can fit your needs.</p>
   </div>
   </div>
   </div>
   
<div class="tab-pane" id="hybrid-integration" style="margin-left:29px;">
           <div class="row">
               <div class="col-sm-12" style="margin-left:-27px; width: 103%;"><p class="methodText">With cloud being adopted by enterprises rapidly, the need for a Hybrid Integration strategy has never been greater. Most CIOs see integration as a challenge to adopting the cloud. So how do you leap that barrier to ensure that you can grow your boundaries and serve your customers.</p></div>
              <div class="col-sm-12">
                 <div class="col-sm-2 tabd1 bgdblue">
                   <strong><center>Integration<center></strong>
                 </div>
                <div class="col-sm-10 text-pad"  style="color:rgba(0, 0, 0, 0.60);" >
                   <p class="methodText"><strong>&nbsp;&nbsp;Exploring IBM’s Application Integration Suite</strong></p>
                 </div>
              </div>
          </div>
           
  <div class="row">
   <div class="col-sm-12">
   <p class="methodText" style="margin: 15px 0px 15px -25px;">For an evolving Hybrid Environment you need a product set that can help you rapidly integrate services to provide an unified experience. So how does it all work, how do we get there and what needs to be done? Come by our booth for a live demo of IBM’s Application Integration Suite to check out how it fits with your cloud strategy.</p>
   </div>
   </div>
   <!--session2-->
      <div class="row">
              <div class="col-sm-12">
                 <div class="col-sm-2 tabd1 bgblue">
                   <strong><center>Microservices<center></strong>
                 </div>
                <div class="col-sm-10 text-pad"  style="color:rgba(0, 0, 0, 0.60);" >
                   <p class="methodText"><strong>&nbsp;&nbsp;Building Microservices with Node and Mongo DB</strong></p>
                 </div>
              </div>
          </div>

   <div class="row">
   <div class="col-sm-12">
   <p class="methodText" style="margin: 15px 0px 15px -25px;">Microservices are now an established style of architecture. This architectural style of decomposing applications into network-based services has been credited with increasing software delivery speed and improving scalability and resiliency. However, to succeed with a microservice architecture in the long run, you'll need to deal with the increasing complexity of your microservice-based software system as it grows. Taking a design-based approach from the outset will help you scale up more smoothly and establish a sustainable implementation. Come and check out our demo and learn more about microservices.</p>
   </div>
   
   </div>
			<!--session3-->
      <div class="row">
              <div class="col-sm-12">
                 <div class="col-sm-2 tabd1 bgred">
                   <strong><center>Monitoring<center></strong>
                 </div>
                <div class="col-sm-10 text-pad"  style="color:rgba(0, 0, 0, 0.60);" >
                   <p class="methodText"><strong>&nbsp;&nbsp;Monitoring your Integration Engine is Fun!</strong></p>
                 </div>
              </div>
          </div>
           

   <div class="row">
   <div class="col-sm-12">
   <p class="methodText" style="margin: 15px 0px 15px -25px;">Visibility into your Integration Engine is key to your team’s success. With Miracle’s Enterprise Monitoring Framework you will gain enhanced visibility into your transactions, quicker access to business information, enhanced event search options and a real-time dashboard. MEMF can be hosted anywhere that you would like and supports IBM’s entire integration stack. Come by our booth and see how MEMF can help you gain the visibility that your Integration Platform deserves.</p>
   </div>
   
   </div>
   </div>
   
        <div class="tab-pane" id="cognitive-iot" style="margin-left:27px;">
          <div class="row">
              <div class="col-sm-12" style="margin-left:-27px; width: 103%;" ><p class="methodText">While Enterprise continue to adopt mobility, cloud and devops – how do you really differentiate yourselves? With Cognitive and IoT, enterprises have two powerful weapons that can take their offerings to the next level. Whether it is a conversational agent (or) a connected store, the possibilities are endless.</p></div>
              <div class="col-sm-12">
                 <div class="col-sm-2 tabd1 bgdblue">
                   <strong><center>Chat Bots<center></strong>
                 </div>
                <div class="col-sm-10 text-pad"  style="color:rgba(0, 0, 0, 0.60);" >
                   <p class="methodText"><strong>&nbsp;&nbsp;Welcome ThingChat - Miracle’s IoT Bot</strong></p>
                 </div>
              </div>
          </div>
        
        
<div class="row">
<div class="col-sm-12">
<p class="methodText" style="margin: 15px 0px 15px -25px;">With the advent of IoT, the possibilities of connected things and applications has increased. We are increasingly seeing homes that are connected, stores that are connected and lives that are connected. So what if we combined this connected world with a chat bot. Come over and meet ThingChat, Miracle’s chat bot that can control remote things via MQTT.</p>
</div>

</div>

 <div class="row">
              <div class="col-sm-12">
                 <div class="col-sm-2 tabd1 bgblue">
                   <strong><center>Cognitive<center></strong>
                 </div>
                <div class="col-sm-10 text-pad"  style="color:rgba(0, 0, 0, 0.60);" >
                   <p class="methodText"><strong>&nbsp;&nbsp;Miracle’s Watson Dashboard for Cognitive Services </strong></p>
                 </div>
              </div>
          </div>
         
<div class="row">
<div class="col-sm-12">
<p class="methodText" style="margin: 15px 0px 15px -25px;">We all know how powerful an engine like Watson can be, from its analytical capabilities to visual recognition. So how do you harness such a power and integrate it with your applications. Come and check out how we have integrated Watson services including personality insights, visual recognition and more. This will give you a great view of how you can start the cognitization of your applications.</p>
</div>
</div>
  <div class="row">
              <div class="col-sm-12">
                 <div class="col-sm-2 tabd1 bgred">
                   <strong><center>Connected<br><center></strong>
                 </div>
                <div class="col-sm-10 text-pad"  style="color:rgba(0, 0, 0, 0.60);" >
                   <p class="methodText"><strong>&nbsp;&nbsp;Water is Precious – Miracle’s Tank-o-Meter</strong></p>
                 </div>
              </div>
          </div>
          
<div class="row">
<div class="col-sm-12">
<p class="methodText" style="margin: 15px 0px 15px -25px;">When we were having problems with loosing water through our water tanks in a 400 acre campus, we first looked towards technology as the savior. A few months later we have a fully working model that is helping us save hundreds of gallons of water everyday while also collecting data and insights that we never had before. Come around to our booth and check out Tank-o-Meter, our very own pet water project.<p>
</div>

</div>


				</div>
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
               <style type="text/css">
                  .list-group-item-1 {
                  position: relative;
                  display: block;
                  padding: 1px 15px;
                  margin-bottom: -1px;
                  background-color: #000;
                  }
                  .btn-primary {
                  color: #fff!important;
                  background-color: #00aae7!important;
                  border-color: #00aae7!important;
                  }
               </style>
               <a href="../interconnect17/" class="list-group-item-1" style="text-decoration: none;">
                  <div>
                    <p class="methodText"> <center><strong><font size="3%!important" color="#fff"  onMouseOut="this.style.color='#fff'" onMouseOver="this.style.color='#b7b2b3'">&nbsp; Miracle @ Interconnect '17
                        </font></strong>
                     </center></p>
                  </div>
               </a>
                <a href="#" class="list-group-item" id="speaker">
                  <div>
                     <center><strong><font size="3%!important" color="#00aae7">&nbsp; Experience Future Tech
                        </font></strong>
                     </center>
                  </div>
               </a>
               <a href="speaker-session" class="list-group-item" id="speaker">
                  <div>
                     <center><strong><font size="3%!important" color="#000">&nbsp; Our Speaker Sessions
                        </font></strong>
                     </center>
                  </div>
               </a>
               <a href="meet-team-miracle" class="list-group-item" id="attendies">
                  <div >
                     <center>
                     <strong><font size="3%!important" color="#000">&nbsp;Meet Team Miracle
                     </font></strong>
                     <center>
                  </div>
               </a>
               <a href="https://www.ibm.com/cloud-computing/us/en/interconnect/curriculum/" target="_blank" class="list-group-item" id="crriculum">
                  <div >
                     <center>
                     <strong><font size="3%!important" color="#000;">&nbsp;Curriculum Tracks
                     </font></strong>
                     <center>
                  </div>
               </a>
               
               <br>
               <div >
                  <div class="widget-content themed-background text-light-op" style="background-color:#00aae7;height:42px;">
                     <center style="padding-top:9px;"><strong><font style="color:#ffffff;">Case Study</font></strong></center>
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
                           #check{
                           background: 
         /* top, transparent red */
         linear-gradient(
         rgba(0, 0, 0, 0.65), 
         rgba(0, 0, 0, 0.65)
         ),
         /* your image */
         url("<?= AMAZON_URL ?>/images/interconnect17/drug.png");
         -webkit-background-size: cover;
         -moz-background-size: cover;
         -o-background-size: cover;
         background-size: cover;
          height:120px;
                           opacity:0.9;
                           margin-top:-20px;
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
                          .contact{
                            background-color:#00aae7;
                            height:47px;
                          }
                          .contact:hover{
                            background-color:#0d416b;
                          }
                          
                           label
                           {
                           font-size:15px !important;
                           }
                        .text-dark{
                          background-color:#232527;
                          height:50px;
                        }
                        .grey-tile{
                            height:110px;
                            width:250px;
                            background-color:#0d416b;
                            margin-top:-20px;
                            position:relative;
                            transition: 1.5s;
                             
                            -moz-transition: 1.5s;
                            -webkit-transition:1.5s;
                            -o-transition: 1.5s;
                            
                        }
                        .grey-tile:hover{
                            background-color:#0d416b;
                            position:relative;
                            transition: 1.5s;
                             margin-top:-100px;
                            -moz-transition: 1.5s;
                            -webkit-transition:1.5s;
                            -o-transition: 1.5s;
                        }
                        
                        .fb-icon{
                            height:50px;
                            width:80px;
                            font-size:25px;
                            text-align:center;
                            padding:13px;
                            color:#fff;
                            background-color:#3b5998;
                            
                        }
                        .fb-icon:hover{
                            color:#b7b2b3;
                        }
                        .tw-icon{
                            height:50px;
                            width:80px;
                            font-size:25px;
                            text-align:center;
                            padding:13px;
                            color:#fff;
                            background-color:#29bdc1;
                            
                        }
                        .tw-icon:hover{
                            color:#b7b2b3;
                        }
                         .li-icon{
                            height:50px;
                            width:80px;
                            font-size:25px;
                            text-align:center;
                            padding:13px;
                            color:#fff;
                            background-color:#28a3d2;
                            
                        }
                        .li-icon:hover{
                            color:#b7b2b3;
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
                        <center>
                           <a href="http://www.miraclesoft.com/library/CaseStudy/edge-integration-and-digital-platform-for-pharmacy-retailer.php">
                              <h3 class="heavy"></h3>
                              <p  style="padding-top:23px;"><font size="3px"color="#ffffff"><strong>EDGE Integration and Digital Platform for Major Pharmacy and Retailer</strong></font></p>
                           </a>
                        </center>
                     </div>
                  </div>
                  
                  
                  <div class="widget-content  text-dark register-hover">
                     <a class="linkText1" href="http://www.miraclesoft.com/library/CaseStudy/edge-integration-and-digital-platform-for-pharmacy-retailer.php" target="_blank">
                        <center  style="padding-top:10px;"><strong><font style="color:#ffffff;" onMouseOut="this.style.color='#fff'" onMouseOver="this.style.color='#b7b2b3'">Read Today</font></strong></center>
                     </a>
                  </div>
                  </a>
               </div>
               <div style="padding-left: 10px">
                 <ul class="footer-nav footer-nav-links list-inline">
                     <li><a href="https://www.facebook.com/miracle45625" target="_blank" class="social-facebook" data-toggle="tooltip" title="" ><i class="fa fa-fw fa-facebook"></i></a></li>
                     <li><a href="https://twitter.com/Team_MSS" target="_blank" class="social-twitter" data-toggle="tooltip" title="" ><i class="fa fa-fw fa-twitter"></i></a></li>
                     <li><a href="https://plus.google.com/105262074634409319991/" target="_blank" class="social-google-plus" data-toggle="tooltip" title="" ><i class="fa fa-fw fa-google-plus"></i></a></li>
                     <li><a href="https://www.linkedin.com/company/miracle-software-systems-inc" target="_blank" class="social-linkedin" data-toggle="tooltip" title="" ><i class="fa fa-linkedin"></i></a></li>
                     <li><a href="https://www.flickr.com/photos/team_miracle" target="_blank" class="social-flickr" data-toggle="tooltip" title="" ><i class="fa fa-flickr"></i></a></li>
                     <span><a href="https://www.youtube.com/c/Team_MSS" target="_blank" class="social-youtube" data-toggle="tooltip" title="" ><i class="fa fa-youtube-play"></i></a><span>
                  </ul>
               </div>
              <span data-toggle="collapse">
                     <div class="widget contact" style="margin-top: 10px">
                   <a href="mailto:info@miraclesoft.com" target="_blank"> <div class="widget-content widget-hover themed-background text-light-op">
                            <center style="padding-top:10px;"><strong><font style="color:#ffffff;">
                                Contact Us</font></strong></center>
                        </div>
                        </a>
           </div>
          </span>
            </div>
            <div class="col-sm-3">
              
            </div>
         </div>
        </div>
        </div>

</body>


  <?php include '../../footer.php';?>




</html>