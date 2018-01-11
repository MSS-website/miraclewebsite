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
    <title>Speaker-session - IC'17 | Miracle</title>
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
         url("<?= AMAZON_URL ?>/images/interconnect17/speakersession.png");
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
              width:94.5%;
              }
.response{
    border-radius:50%;}

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


 </style>
   <section id="interconnect" >
    
       
        <div class="tinted-image">
        <div class="container">
        <div class="row"> <br><br><br>
          <div class="col-sm-8 text-left">
            <h1 class="heavy">Our Speaker Sessions @ Interconnect '17</h1>
          
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
              
              <p class="methodText">What better way to learn how it's done than to hear straight from the experts who have done it before. Come and attend any one of our sessions at Interconnect '17 and listen to our Technical Experts, Customers and Labs Experts speak about best practices, implementation architectures and more. </p>
               <p class="methodText">Our sessions will be fun, will have live demos and will be something that you don't want to regret missing! Make sure that you add our sessions to your agenda by heading to the mobile app (or) the <a href="#">sessions tool</a> and search for <strong>"Miracle".</strong><br>
 </p> 
               
                            <section class="tile">
                                <!-- tile body -->
                                <div class="tile-body">
                                    
                                
<ul  class="nav nav-pills" id="exTab1" >
				<li class="active" id="ex"><a href="#1a" data-toggle="tab">Monday</a>
			</li>
			<li><a href="#2a" data-toggle="tab">Tuesday</a>
			</li>
			<li><a href="#3a" data-toggle="tab">Wednesday</a>
			</li>
  		<li><a href="#4a" data-toggle="tab">Thursday</a>
			</li>
		</ul>
<br>
	<div class="tab-content clearfix">
			 	<div class="tab-pane active" id="1a" style="margin-left:29px;">
           <div class="row">
              <div class="col-sm-12">
                 <div class="col-sm-1 tabd">
                   <strong><center>7113A<center></strong>
                 </div>
                <div class="col-sm-11 text-pad"  style="color:rgba(0, 0, 0, 0.60);" >
                   <p class="methodText"><strong>&nbsp;&nbsp;Growing and Managing Your Microservice Ecosystem with IBM Bluemix and Docker</strong></p>
                 </div>
              </div>
          </div>
           
<p class="methodText" style="margin:10px 0px 10px -30px;"><em>&nbsp;Monday(March 20th, 2017) - 1:00 PM PST at Islander E  </em></p>
   <div class="row">
   <div class="col-sm-9">
   <p class="methodText" style="margin: 1px -5px 10px -24px;">Agility, flexibility and reusability! The world of SOA introduced us to a whole new way to compose applications, but the world has changed! Microservices architecture is now an established style of applications, with exponential growth in terms of adoption across verticals. This architectural style of decomposing applications into network-based services improves speed of delivery and scalability. So how do you succeed with a growing ecosystem of microservices? A design-based approach from the outset can help you scale up smoothly and establish a sustainable implementation. In this session, you will hear about the core design patterns around microservices, and how you can implement them with technologies like IBM Bluemix, Docker and more.</p>
   <br>
   <a href="https://myibm.ibm.com/events/interconnect/all-sessions/session/7113A" target="_blank"><button style="margin:10px 0px 10px -23px;" type="button" class="btn  btn-md noMarginTop bgdblue">Add session to agenda</button></a>
   
   </div>
   <div class="col-sm-3">
  <center> <img src="<?= AMAZON_URL ?>/images/interconnect17/kunal22.jpg" class="img-responsive response" height="80" width="80"></img>
                  <h5 class="heavy">Kunal Mittal</h5>
                  <p style="margin-top:-5px;">Practice Manager - Integration </p>
                  
               </center>
   </div>
   </div>
 
				</div>
				<div class="tab-pane" id="2a" style="margin-left:29px;">
           
   
      <div class="row">
              <div class="col-sm-12">
                 <div class="col-sm-1 tabd1">
                   <strong><center>7111A<center></strong>
                 </div>
                <div class="col-sm-11 text-pad"  style="color:rgba(0, 0, 0, 0.60);" >
                   <p class="methodText"><strong>&nbsp;&nbsp;Discovering the Fun World of Serverless with IBM Bluemix and OpenWhisk</strong></p>
                 </div>
              </div>
          </div>
           
<p class="methodText" style="margin:10px 0px 10px -30px;"><em>&nbsp;Tuesday(March 21st, 2017) - 1:30PM PST at Engagement Theater #1</em></p>
   <div class="row">
   <div class="col-sm-9">
   <p class="methodText" style="margin: 1px -5px 10px -24px;">The "orange-laced" developers of your enterprise need simplicity, they need speed and most of all they must have results. The friction that exists in the process of getting an application to the consumer exhausts the developers, and honestly takes the fun out of it. So what can you do about that? What if you were able to provide your developers with the option to deploy microservices that work when needed, scale as needed and don't need any manual provisioning. Welcome to the world of serverless! In this session, we'll have some fun, see a really cool demo of creating a ten-minute microservice in OpenWhisk, and also share a "Serverless 101" discussion that includes the best use cases for serverless.</p>
   <a href="https://myibm.ibm.com/events/interconnect/all-sessions/session/7111A" target="_blank"><button style="margin:10px 0px 10px -23px;" type="button" class="btn btn-primary bghover btn-md noMarginTop">Add session to agenda</button></a>
   </div>
   <div class="col-sm-3">
  <center> <img src="<?= AMAZON_URL ?>/images/interconnect17/clokam.png" height="80" width="80"></img>
                  <h5 class="heavy">Chanakya Lokam,</h5>
                  <p style="margin-top:-5px;">Director Marketing | Innovation </p>
                  
               </center>
   </div>
    
   </div>
   
   <div class="row">
              <div class="col-sm-12">
                 <div class="col-sm-1 tabd">
                   <strong><center>5979A<center></strong>
                 </div>
                <div class="col-sm-11 text-pad"  style="color:rgba(0, 0, 0, 0.60);" >
                   <p class="methodText"><strong>&nbsp;&nbsp;How IBM Middleware can Help You Make the Jump from the Datacenter to the Cloud</strong></p>
                 </div>
              </div>
          </div>
           
<p class="methodText" style="margin:10px 0px 10px -30px;"><em>&nbsp;Tuesday(March 21st, 2017) - 4:45 PM PST at South Pacific B </em></p>
   <div class="row">
   <div class="col-sm-9">
   <p class="methodText" style="margin: 1px -5px 10px -24px;">Moving to the cloud can seem like a daunting task. But it doesn't have to be. IBM can help you lift-and-shift your workloads with minimal to zero business disruption. Listen to technical experts discuss their experiences deploying IBM Middleware, and what it takes to achieve stability. We'll dive into your migration options and what you can do with your current infrastructure after you're deployed in the cloud.</p>
  <a href="https://myibm.ibm.com/events/interconnect/all-sessions/session/5979A" target="_blank"><button style="margin:10px 0px 10px -23px;" type="button" class="btn bgdblue btn-md noMarginTop">Add session to agenda</button></a>
   </div>
   <div class="col-sm-3">
  <center> <img src="<?= AMAZON_URL ?>/images/interconnect17/kunal22.jpg" class="img-responsive response" height="80" width="80"></img>
                  <h5 class="heavy">Kunal Mittal</h5>
                  <p style="margin-top:-5px;">Practice Manager - Integration  </p>
                  
               </center>
   </div>
   
   </div>
   
   
</div>
        <div class="tab-pane" id="3a" style="margin-left:27px;">
          <div class="row">
              <div class="col-sm-12">
                 <div class="col-sm-1 tabd">
                   <strong><center>4330A<center></strong>
                 </div>
                <div class="col-sm-11 text-pad"  style="color:rgba(0, 0, 0, 0.60);" >
                   <p class="methodText"><strong>&nbsp;&nbsp;Establishing a Future-Proof Digital Integration Platform for a Global Electronics Manufacturer</strong></p>
                 </div>
              </div>
          </div>
          <p class="methodText" style="margin:10px 0px 10px -27px;"><em>&nbsp;Wednesday(March 22nd, 2017) - 10:15AM PST at Lagoon I </em></p>
        
<div class="row">
<div class="col-sm-9">
<p class="methodText" style="margin: 1px -5px 10px -24px;">This customer designs and manufactures connectivity and sensor solutions. Serving customers in over 150 countries and with over a million transactions per day, they have one of the largest SOA implementations. Regulatory mandates, a growing business and an array of new data sources, formats and platforms in a hybrid ecosystem meant that it was time they consolidated their enterprise service bus (ESB) implementation. This talk discusses their challenges, their business needs and why they chose IBM Integration Bus to implement their digital integration strategy. Discover their challenges with partner integrations, the efficiencies of the new platform, optimization of new integration deployments, and how they are enabled for the future.</p>
  <a target="_blank" href="https://myibm.ibm.com/events/interconnect/all-sessions/session/4330A"><button style="margin:10px 0px 10px -23px;" type="button" class="btn bgdblue btn-md noMarginTop">Add session to agenda</button></a>
</div>
<div class="col-sm-3">
<center><img src="<?= AMAZON_URL ?>/images/interconnect17/maruthi22.jpg" class="img-responsive response "height="80" width="80"></img>
                  <h5 class="heavy">Maruti Kampli    </h5>
                  <p style="margin-top:-5px;">Practice Manager - Integration</p>
                  </center>
</div>
 
</div>
 <div class="row">
              <div class="col-sm-12">
                 <div class="col-sm-1 tabd1">
                   <strong><center>4426A<center></strong>
                 </div>
                <div class="col-sm-11 text-pad"  style="color:rgba(0, 0, 0, 0.60);" >
                   <p class="methodText"><strong>&nbsp;&nbsp;Building DTE Energy's Mobile-Enabled Offline Web App with Node.js, Cloudant and Bluemix</strong></p>
                 </div>
              </div>
          </div>
          <p class="methodText" style="margin:10px 0px 10px -27px;"><em>&nbsp;Wednesday(March 22nd, 2017) - 10:15 AM PST at Islander F </em></p>
        
<div class="row">
<div class="col-sm-9">
<p class="methodText" style="margin: 1px -5px 10px -24px;">DTE Energy provides gas and electricity services to over three million customers in Michigan, and they had a unique use case for Bluemix. The team at DTE needed something quick, easy-to-use and scalableÃ¢â‚¬â€�they wanted to remove the fuss from their application development needs, and Bluemix was perfect for them. Join us as we talk about our journey with IBM Bluemix to create an intuitive, agile mobile web app on Bluemix. The session will talk about our experiences and lessons learned, the application architecture, why we chose Bluemix, Cloudant and Node.js for our needs, and how Pair Programming enabled us to deliver rapidly for the business need. Learn how we went from paper management to digital in weeks with Bluemix.</p>
<a href="https://myibm.ibm.com/events/interconnect/all-sessions/session/4426A" target="_blank"><button style="margin:10px 0px 10px -23px;" type="button" class="btn btn-primary btn-md noMarginTop">Add session to agenda</button></a>  
</div>
<div class="col-sm-3">
<center><img src="<?= AMAZON_URL ?>/images/interconnect17/CarlLentz_Circular.png" height="80" width="80"></img>
                  <h5 class="heavy">Carl Lentz</h5>
                  <p style="margin-top:-5px;">DTE Energy </p>
                  </center> 
</div>

</div>

  <div class="row">
              <div class="col-sm-12">
                 <div class="col-sm-1 tabd">
                   <strong><center>5555A<center></strong>
                 </div>
                <div class="col-sm-11 text-pad"  style="color:rgba(0, 0, 0, 0.60);" >
                   <p><strong>Moving a WebSphere Workload to Cloud in Under&nbsp;Ten&nbsp;Minutes-A Live,Buzzer-Beater&nbsp;Demonstration!</strong></p>
                 </div>
              </div>
          </div>
          <p class="methodText" style="margin:10px 0px 10px -27px;"><em>&nbsp;Wednesday(March 22nd, 2017) - 01:00 PM PST at Islander F </em></p>
 
<div class="row">
<div class="col-sm-9">
<p class="methodText" style="margin: 1px -5px 10px -24px;">As enterprises adapt to the digital ecosystem, it is becoming crucial for them to adopt scalable and reliable enablers such as the cloud to keep them competitive and capable. Are you looking for a way to migrate your Java workloads to the cloud? Join us in this entertaining countdown as our Application Platform experts try to beat the buzzer. Can they take you to the cloud in under ten minutes? Attend, find out and learn more about the advantages of running your workloads on IBM Bluemix with WebSphere, the various offering models, the migration tools available and the service ecosystem that can help you differentiate your applicationsÃ¢â‚¬â€�all while experiencing a time-bound demo of moving a workload to the cloud.<p>
<a href="https://myibm.ibm.com/events/interconnect/all-sessions/session/5555A" target="_blank"><button style="margin:10px 0px 10px -23px;" type="button" class="btn bgdblue btn-md noMarginTop">Add session to agenda</button></a>
</div>
<div class="col-sm-3">
 <center><img src="<?= AMAZON_URL ?>/images/interconnect17/bharathi22.jpg" class="img-responsive response" height="80" width="80"></img>
                  <h5 class="heavy">Bharathi Ramachandran</h5>
                  <p style="margin-top:-5px;">VP - Product Engineering </p>
                  </center>
                  
</div>

</div>

 <div class="row">
              <div class="col-sm-12">
                 <div class="col-sm-1 tabd1">
                   <strong><center>4494A<center></strong>
                 </div>
                <div class="col-sm-11 text-pad"  style="color:rgba(0, 0, 0, 0.60);" >
                   <p class="methodText"><strong>&nbsp;&nbsp; 	Creating a Federated Enterprise Service Bus Layer with IBM Integration Bus for Belk</strong></p>
                 </div>
              </div>
          </div>
          <p class="methodText" style="margin:10px 0px 10px -27px;"><em>&nbsp;Wednesday(March 22nd, 2017) - 3:15 PM PST at Lagoon I</em></p>
 
<div class="row">
<div class="col-sm-9">
<p class="methodText" style="margin: 1px -5px 10px -24px;">Enterprise integration can be challenging given the number of products, teams and technology frameworks involved. For retailers, complex architectures can become extremely hard to manage as demand and transactional flow increase rapidly. Join us as we discuss the Belk department store chain's Smart Architecture, which harmonizes service bus and data layer platforms using federation principles to integrate retail management systems, payment processing, and product and store management with discrete retail systems using IBM Integration Bus, IBM DataPower and IBM WebSphere MQ File Transfer Edition. Learn more about how they scaled their system reliably while handling regulatory compliance as well.</p>
 <a href="https://myibm.ibm.com/events/interconnect/all-sessions/session/4494A" target="_blank"><button style="margin:10px 0px 10px -23px;" type="button" class="btn btn-primary btn-md noMarginTop">Add session to agenda</button></a>  
</div>
<div class="col-sm-3">
 <center><img src="<?= AMAZON_URL ?>/images/interconnect17/naresh.png" class="img-responsive response" height="80" width="80"></img>
                  <h5 class="heavy">Naresh Krishnaraaj</h5>
                  <p style="margin-top:-5px;">Solutions Architect at Belk</p>
                  </center>
</div>

</div>

<div class="row">
              <div class="col-sm-12">
                 <div class="col-sm-1 tabd">
                   <strong><center>4479A<center></strong>
                 </div>
                <div class="col-sm-11 text-pad"  style="color:rgba(0, 0, 0, 0.60);" >
                   <p class="methodText"><strong>&nbsp;&nbsp;How Metrie Consolidated Multiple Legacy EDI Platforms to Support a Digital Future</strong></p>
                 </div>
              </div>
          </div>
          <p class="methodText" style="margin:10px 0px 10px -27px;"><em>&nbsp;Wednesday(March 22nd, 2017) - 4:15 PM PST at Oceanside F</em></p>
 
<div class="row">
<div class="col-sm-9">
<p class="methodText" style="margin: 1px -5px 10px -24px;">Metrie is a family-owned building materials supply business with seven manufacturing plants, 26 distribution centers and over 50,000 transactions per month. Running our B2B/EDI operations on multiple legacy systems was taking a toll on our business. Not only was it challenging to maintain, but friction for change was very high. We needed something that was modern, consolidated and digital-ready. Tracking a migration from a legacy platform can be stressful! Join us to learn how we consolidated our EDI platforms with IBM's Sterling Integrator, what business value we derived from the consolidation, and how the platform is driving us forward in this digital era. We'll also showcase how we were able to cut related costs by 40%.</p>
 <a href="https://myibm.ibm.com/events/interconnect/all-sessions/session/4479A" target="_blank"><button style="margin:10px 0px 10px -23px;" type="button" class="btn bgdblue btn-md noMarginTop">Add session to agenda</button></a>
</div>
<div class="col-sm-3">
 <center><img src="<?= AMAZON_URL ?>/images/interconnect17/jeff.png" height="80" width="80"></img>
                  <h5 class="heavy">Jeff Banks</h5>
                  <p style="margin-top:-5px;">Metrie </p>
                  </center>
                  
</div>

</div>

				</div>
          <div class="tab-pane" id="4a" style="margin-left:26px;">
         
         <div class="row">
              <div class="col-sm-12">
                 <div class="col-sm-1 tabd1">
                   <strong><center>5645A <center></strong>
                 </div>
                <div class="col-sm-11 text-pad"  style="color:rgba(0, 0, 0, 0.60);" >
                   <p class="methodText"><strong>&nbsp;&nbsp;Dissecting the anatomy of an IoT Solution with a light bulb, a chat bot, and a really cool demo </strong></p>
                 </div>
              </div>
          </div>
          <p class="methodText" style="margin:10px 0px 10px -27px;"><em>&nbsp;Thursday(March 23rd, 2017) - 8:30 AM PST at Tradewinds A</em></p>
         
<div class="row">
<div class="col-sm-9">
<p class="methodText" style="margin: 1px -5px 10px -24px;">...WiFi, 4G, GSM, Zigbee, Modbus, MQTT, CanBus, and a couple more! With the possibilities of IoT being limitless, there are a few critical pieces that make up an end-to-end IoT solution. What if you had a light bulb that learns, or a bot that instructs? From retail to healthcare, you can improve the world one device at a time. Join us as we dissect the anatomy of any IoT solution with the help of a light bulb, the Watson IoT Platform and a really cool demo! From sensor networks to MQTT messaging, rules engines to NoSQL databases, machine learning to smart watches, come and explore with us what it takes to build a robust and enterprise-grade IoT solution that can differentiate your business while changing the way we live.</p>
<a href="https://myibm.ibm.com/events/interconnect/all-sessions/session/5645A" target="_blank"><button style="margin:10px 0px 10px -23px;" type="button" class="btn btn-primary btn-md noMarginTop">Add session to agenda</button></a> 
</div>
<div class="col-sm-3">
 <center> 
                  <img src="<?= AMAZON_URL ?>/images/interconnect17/clokam.png" height="80" width="80"></img>
                  <h5 class="heavy">Chanakya Lokam</h5>
                  <p style="margin-top:-5px;">Director Marketing | Innovation </p>
                  
                    </center>
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
                  color: #ffffff !important;
                  background-color: #00aae7!important;
                  border-color: #00aae7!important;
                  border-radius:0px !important;
                  }
                  .btn{
                     border-radius:0px !important; 
                  }
               </style>
               <a href="../interconnect17/" class="list-group-item-1" style="text-decoration: none;">
                  <div>
                    <p class="methodText"> <center><strong><font size="3%!important" color="#fff"  onMouseOut="this.style.color='#fff'" onMouseOver="this.style.color='#b7b2b3'">&nbsp; Miracle @ Interconnect '17
                        </font></strong>
                     </center></p>
                  </div>
               </a>
                <a href="experience-future-tech.php" class="list-group-item" id="speaker">
                  <div>
                     <center><strong><font size="3%!important" color="#000">&nbsp; Experience Future Tech
                        </font></strong>
                     </center>
                  </div>
               </a>
               <a href="#" class="list-group-item" id="speaker">
                  <div>
                     <center><strong><font size="3%!important" color="#00aae7">&nbsp; Our Speaker Sessions
                        </font></strong>
                     </center>
                  </div>
               </a>
               <a href="meet-team-miracle.php" class="list-group-item" id="attendies">
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
                     <center style="padding-top:9px;"><strong><font style="color:#ffffff;">Case study</font></strong></center>
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
         url("<?= AMAZON_URL ?>/images/interconnect17/health.png");
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
                           <a href="http://www.miraclesoft.com/why/sstory5.php">
                              <h3 class="heavy"></h3>
                              <p style="padding-top:23px;"><font size="3px"color="#fff"><strong><br>Smart SOA Implementation for Fortune 500 Healthcare Client1 </strong></font></p>
                           </a>
                        </center>
                     </div>
                  </div>
                  
                  
                  <div class="widget-content  text-dark register-hover">
                     <a class="linkText1" href="http://www.miraclesoft.com/why/sstory5.php" target="_blank">
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