<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Digital Summit | Citizen Hack</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
 <?php include '../config/Locations.php';
 include 'config/DS17Config.php';
 ?>
<!--Add Theme Color File To Change Template Color Scheme / Color Scheme Files are Located in root/css/color-themes/ folder-->
<!--<link href="css/color-themes/orange-theme.css" rel="stylesheet">-->

<!--Favicon-->
<link rel="shortcut icon" href="<?= AMAZON_URL ?>/ds17/images/favicon.ico" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="MEANHack ‘17, a unique 24 hour Hack-a-thon, where about 30 teamsare going to compete against each other to become a Star. The event focuses around Cloud and MEAN Stack technologies, where students discovere and designe a unique working prototype among the 3 ideas that Miracle announces. ">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
<style>
.sticky-header .main-menu .navigation > li > a{
    padding:19px 15px !important;
}
.image-box {
    position: relative;
    float: left;
    width: 33.333%;
    padding: 0px 3px;
    margin-bottom: 7px;
    height: 60px;
}
           

   
.widget {
    background-color: #ffffff;
    margin-bottom: 10px;
    position: relative;
    border-radius: 2px;
}
.widget-image:first-child {
    border-top-right-radius: 2px;
    border-top-left-radius: 2px;
}
.widget-image {
    overflow: hidden;
    position: relative;
    height: 500px;
}
.widget-image> img {
    min-width: 830px;
}
img {
    vertical-align: middle;
}
.widget-image-content-red {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    padding: -1px 25px;
    background: rgba(231,76,60, .80);
}
.widget-image-content-blue {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    padding: -1px 25px;
    background: rgba(0,167,155, .85);
}

.widget-image-content-purple {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    padding: -1px 25px;
    background: rgba(155,89,182, .80);
}
.text-light-op, .text-light-op:hover, a.text-light-op, a.text-light-op:hover, a.text-light-op:focus {
    color: rgba(255, 255, 255, .8);
}
.text-light-op {
    padding: 6px !important;
    line-height:1.5em important;
   
}
.text-light, .text-light:hover, a.text-light, a.text-light:hover, a.text-light:focus {
    color: #ffffff;
}
.widget-heading {
    margin: 10px 0;
}

h4{
    color:#00aae7;
    font-size:22px !important;
}
ul{
    margin-left:18px;
}
.nomargintop{
    margin-top:-15px !important;
}
    .sub-text
    { position: relative;
    line-height: 28px;
    text-align: left;
    text-align: justify;
    font-size: 16px;
    }

.inner h2:before {
    width: 0px;
}
.sec-title.centered .text {
     max-width:100%;
  
    color: #666666;
}
      
      .view {
  margin: 10px;
  float: left;
  
  overflow: hidden;
  position: relative;
  text-align: center;
  
  cursor: default;

}

.view .mask,
.view .content {
 
  position: absolute;
  overflow: hidden;
  top: 0;
  left: 0
}

.view img {
  display: block;
  position: relative
}

.view h2 {
  text-transform: uppercase;
  color: #fff;
  text-align: center;
  position: relative;
  font-size: 17px;
  font-family: Raleway, serif;
  padding: 10px;
  /*background: rgba(0, 0, 0, 0.8);*/
  margin: 20px 0 0 0
}

.view p {
  font-family: Merriweather, serif;
 
  font-size: 14px;
  position: relative;
  color: #fff;
  padding: 0px 20px 0px;
  text-align: center
}

.view a.info {
  display: inline-block;
  text-decoration: none;
  padding: 7px 14px;
  background: #000;
  color: #fff;
  font-family: Raleway, serif;
  text-transform: uppercase;
  box-shadow: 0 0 1px #000
}

.view a.info:hover {
  box-shadow: 0 0 5px #000
}


/*1*/



.view-first .mask {
  opacity: 0;
  background-color: #232527;
  transition: all 0.4s ease-in-out;
  width:100%;
  height:auto;
  padding-top: 30px;
    padding-bottom: 30px;
}

.view-first h2 {
  transform: translateY(-100px);
  opacity: 0;
  font-family: Raleway, serif;
  transition: all 0.2s ease-in-out;
}

.view-first p {
  transform: translateY(100px);
  opacity: 0;
  transition: all 0.2s linear;
}

.view-first a.info {
  opacity: 0;
  transition: all 0.2s ease-in-out;
}


/* */

.view-first:hover img {
  transform: scale(1.1);
}

.view-first:hover .mask {
  opacity: 1;
}

.view-first:hover h2,
.view-first:hover p,
.view-first:hover a.info {
  opacity: 1;
  transform: translateY(0px);
}

.view-first:hover p {
  transition-delay: 0.1s;
}

.view-first:hover a.info {
  transition-delay: 0.2s;
}

.student-bg{
       background-color: #0d4165;
    padding: 22px 11px;
    margin-top: 0px;
    color: #ffffff !important;
    text-align: center;
}      
  .student{
    width:80% !important;
}    
   .news-style-one .inner-box .lower-box {
   background: #eee!important;
   }
  .grid {
	position: relative;

	margin: 0 auto;
	padding: 1em 0 4em;
	max-width: 100%;
	list-style: none;
	text-align: center;
}

/* Common style */
.grid figure {
	position: relative;
	float: left;
	overflow: hidden;
	margin: 10px 1%;
	min-width: 280px;
	max-width: 290px;
	max-height: 300px;
	width: 48%;
	height: auto;
	background: #3085a3;
	text-align: center;
	cursor: pointer;
}

.grid figure img {
	position: relative;
	display: block;
	min-height: 100%;
	max-width: 100%;
	opacity: 1;
}

.grid figure figcaption {
	padding: 4em;
	color: #fff;
	text-transform: uppercase;
	font-size: 1.25em;
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
}

.grid figure figcaption::before,
.grid figure figcaption::after {
	pointer-events: none;
}

.grid figure figcaption,
.grid figure figcaption > a {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
}

/* Anchor will cover the whole item by default */
/* For some effects it will show as a button */
.grid figure figcaption > a {
	z-index: 1000;
	text-indent: 200%;
	white-space: nowrap;
	font-size: 0;
	opacity: 0;
}

.grid figure h2 {
	word-spacing: -0.15em;
	font-weight: 300;
}

.grid figure h2 span {
	font-weight: 800;
}

.grid figure h2,
.grid figure p {
	margin: 0;
}

.grid figure p {
	letter-spacing: 1px;
	font-size: 68.5%;
}

/* Individual effects */

/*---------------*/
/***** Julia *****/
/*---------------*/

figure.effect-julia {
	background: #2f3238;
}

figure.effect-julia img {
	max-width: none;
	height: 300px;
	-webkit-transition: opacity 1s, -webkit-transform 1s;
	transition: opacity 1s, transform 1s;
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
}

figure.effect-julia figcaption {
	text-align: center;
}

figure.effect-julia h2 {
	position: relative;
	padding: 0.5em 0;
}

figure.effect-julia p {
	display: inline-block;
	margin: 0 0 0.25em;
	padding: 0.4em 1em;
	background: #232527;
	color: #ffffff;
	text-transform: none;
	font-weight: 500;
	font-size: 75%;
	-webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
	transition: opacity 0.35s, transform 0.35s;
	-webkit-transform: translate3d(-360px,0,0);
	transform: translate3d(-360px,0,0);
}

figure.effect-julia1 p:first-child {
	-webkit-transition-delay: 0.15s;
	transition-delay: 0.15s;
}

figure.effect-julia p:nth-of-type(2) {
	-webkit-transition-delay: 0.1s;
	transition-delay: 0.1s;
}

figure.effect-julia p:nth-of-type(3) {
	-webkit-transition-delay: 0.05s;
	transition-delay: 0.05s;
}

figure.effect-julia p:first-child {
	-webkit-transition-delay: 0s;
	transition-delay: 0s;
}

figure.effect-julia p:nth-of-type(2) {
	-webkit-transition-delay: 0.05s;
	transition-delay: 0.05s;
}

figure.effect-julia p:nth-of-type(3) {
	-webkit-transition-delay: 0.1s;
	transition-delay: 0.1s;
}

figure.effect-julia1 img {
	opacity: 0.2;
	-webkit-transform: scale3d(1.1,1.1,1);
	transform: scale3d(1.1,1.1,1);
}

figure.effect-julia1 p {
	opacity: 1;
	-webkit-transform: translate3d(0,0,0);
	transform: translate3d(0,0,0);
}

.items{
    margin-top:45px;
}
  .panel-group .panel {
        border-radius: 0;
        box-shadow: none;
        border-color: #EEEEEE;
        border:0px solid #ffffff !important;
    }

    .panel-default > .panel-heading {
        padding: 0;
        border-radius: 0;
        color: #212121;
        background-color: #FAFAFA;
        border-color: #EEEEEE;
    }

    .panel-title {
        font-size: 17px !important;
        text-align:left !important;
    }

    .panel-title > a {
        display: block;
        padding: 5px;
        text-decoration: none;
    }

    .more-less {
        float: right;
        color: #212121;
    }

    .panel-default > .panel-heading + .panel-collapse > .panel-body {
        border-top-color: #EEEEEE;
    }

/* ----- v CAN BE DELETED v ----- */


.demo {
   
    padding-bottom: 0px;
}
section#timeline {
  width: 100%;
  margin: 20px auto;
  position: relative;
}
section#timeline:before {
  content: '';
  display: block;
  position: absolute;
  left: 50%;
  top: 0;
  margin: 0 0 0 -1px;
  width: 2px;
  height: 97%;
  background: #232527;
}
section#timeline article {
  width: 100%;
  margin: 0 0 20px 0;
  position: relative;
}
section#timeline article:after {
  content: '';
  display: block;
  clear: both;
}
section#timeline article div.inner {
  width: 40%;
  float: left;
  margin: 5px 0 0 0;
  border-radius: 6px;
  
}
h5{
   
    line-height:1.5em !important;
}

section#timeline article div.inner span.date {
    padding-top:16px;
  display: block;
  width: 50px;
height: 50px;
padding: -2px 0;
position: absolute;
top: 0;
left: 50%;
margin: 0 0 0 -25px;
  border-radius: 100%;
  font-size: 12px;
  font-weight: 900;
 
  background: #25303B;
  color: #fff;
 
  box-shadow: 0 0 0 7px #25303B;
}
section#timeline article div.inner span.date span {
  display: block;
  text-align: center;
}
section#timeline article div.inner span.date span.day {
  font-size: 10px;
}
section#timeline article div.inner span.date span.month {
  font-size: 12px;
}
section#timeline article div.inner span.date span.year {
  font-size: 10px;
}
section#timeline article div.inner h2 {
  padding: 15px;
  margin: 0;
  color: #fff;
  font-size: 15px;
  line-height:1.5em;
  letter-spacing: 0.5px;
  border-radius: 6px 6px 0 0;
  position: relative;
}
section#timeline article div.inner h2:after {
     content: '';
  position: absolute;
  top: 20px;
  right: -5px;
  	width: 10px; 
	  height: 10px;
  transform: rotate(-42deg);
  left: 96%;
}
section#timeline article div.inner p {
  padding: 15px;
  margin: 0;
  font-size: 14px;
  background: #fff;
  color: #656565;
  border-radius: 0 0 6px 6px;
}
section#timeline article:nth-child(1) div.inner h2:after {
    background: #e74c3c;
  
}

.sec-title.centered h2:after{
	margin-left: 2px;
}
section#timeline article:nth-child(2n+2) div.inner {
  float: right;
}
section#timeline article:nth-child(2n+2) div.inner h2:after {
  left: -5px;
}
section#timeline article:nth-child(1) div.inner h2 {
  background: #e74c3c;
}
section#timeline article:nth-child(1) div.inner h2:after {
  background: #e74c3c;
}
section#timeline article:nth-child(2) div.inner h2 {
  background: #2ecc71;
}
section#timeline article:nth-child(2) div.inner h2:after {
  background: #2ecc71;
}
section#timeline article:nth-child(3) div.inner h2 {
  background: #e67e22;
}
section#timeline article:nth-child(3) div.inner h2:after {
  background: #e67e22;
}
section#timeline article:nth-child(4) div.inner h2 {
  background: #1abc9c;
}
section#timeline article:nth-child(4) div.inner h2:after {
  background: #1abc9c;
}
section#timeline article:nth-child(5) div.inner h2 {
  background: #9b59b6;
}
section#timeline article:nth-child(5) div.inner h2:after {
  background: #9b59b6;
}
section#timeline article:nth-child(6) div.inner h2 {
  background: #e74c3c;
}
section#timeline article:nth-child(6) div.inner h2:after {
  background: #e74c3c;
}
section#timeline article:nth-child(7) div.inner h2 {
  background: #2ecc71;
}
section#timeline article:nth-child(7) div.inner h2:after {
  background: #2ecc71;
}
section#timeline article:nth-child(8) div.inner h2 {
  background: #e67e22;
}
section#timeline article:nth-child(8) div.inner h2:after {
  background: #e67e22;
}
section#timeline article:nth-child(9) div.inner h2 {
  background: #1abc9c;
}
section#timeline article:nth-child(9) div.inner h2:after {
  background: #1abc9c;
}
section#timeline article:nth-child(10) div.inner h2 {
  background: #9b59b6;
}
section#timeline article:nth-child(10) div.inner h2:after {
  background: #9b59b6;
}
section#timeline article:nth-child(11) div.inner h2 {
  background: #e74c3c;
}
section#timeline article:nth-child(11) div.inner h2:after {
  background: #e74c3c;
}
section#timeline article:nth-child(12) div.inner h2 {
  background: #2ecc71;
}
section#timeline article:nth-child(12) div.inner h2:after {
  background: #2ecc71;
}
section#timeline article:nth-child(13) div.inner h2 {
  background: #e67e22;
}
section#timeline article:nth-child(13) div.inner h2:after {
  background: #e67e22;
}
   
   .sec-time{
       
       display:none;
       }
       .rotate{
    -moz-transition: all 0s linear;
    -webkit-transition: all 0s linear;
    transition: all 0s linear;
}

.rotate.down{
    -moz-transform:rotate(90deg);
    -webkit-transform:rotate(90deg);
    transform:rotate(90deg);
}
.form-control{
    border-radius:0px!important;
    height:52px!important;
}
#msform input, #msform textarea {
  margin-bottom:20px!important;
    
}
#msform fieldset {
margin:0px 3px;
width:auto;
box-shadow:none;
padding:0;

    
}
#msform .action-button:hover, #msform .action-button:focus {
    box-shadow: 0 0 0 2px white, 0 0 0 3px #d43058;
}
#msform .action-button {
    width: 100px;
    background: #d43058;
}
#msform .action-button {
    width: 205px;
    background: #d43058;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 25px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px;
}
.sec-title {
    position: relative;
    margin-bottom: 20px !important;
}
.event-rules{
  list-style:square !important;
}
.main-footer .gallery-widget .image-box {
    margin-bottom: -7px;
}
/*dropdown*/
.main-menu .navigation > li.dropdown > a:after {
    font-family: 'FontAwesome';
    content: "\f107";
    position: absolute;
    right: 0px;
    top: 50%;
    margin-top: -15px;
    width: 10px;
    height: 30px;
    display: block;
    line-height: 30px;
    font-size: 14px;
    font-weight: normal;
}

    .modal-header .close {
        margin-top: -23px !important;
    }
    .modal-header {
        border-bottom: none !important;
        background-color:#ffffff;
       
    }
    .modal-footer {
        border-top: none !important;
    }
    .modal-dialog{
    
    left:0% !important;
    width:90% !important;
}
    
   
        </style>
</head>

<body>

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
     <!-- Main Header -->
    <?php include 'DS17Header.php'; ?>
    <!--End Main Header -->
    <!--Page Title-->
  
    <section class="page-title" style="background-image:url(<?= AMAZON_URL ?>/ds17/images/header-images/meanhack.jpeg);margin-top:-114px!important;background-position:0% 38%;padding-bottom:15px;">
    	<div class="auto-container">
        	<div class="inner-box">
                <h1>Citizen Hack</h1>
                <ul class="bread-crumb">
                	<li><a href="events">Events</a></li>
                    <li>Citizen Hack</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->
    <!--Team Section-->
    
    
    <!-- <section class="page-title" style="background-image:url(images/mean1.jpg);background-position:0% 38%;padding: 35px 0px 35px;height:270px;">-->
    <!--	<div class="auto-container">-->
    <!--    	<div class="inner-box" style="padding-top: 60px;">-->
    <!--            <h1>36 Teams | 24 Hours | 6 Use Cases | 3 Winners</h1>-->
                
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    
    
    

  	<div class="auto-container">
        	<!--Sec Title-->
            <div class="sec-title centered">
                <br>
            	<h2>Introduction</h2>
                
                <div class="text">From conversational bots to RFID based bus tracking systems, 2016 saw 36 teams battle it out and create brilliant technology ideas. We are back this year at Digital Summit 2017 with Citizen Hack! This year you can choose from a wide array of use case areas such as agriculture and healthcare, and then choose a technology area to build your idea.
          <strong>Over 24 hours, teams will battle to prove their worth - if you are ready for the challenge register for Citizen Hack today!</strong></div>
            <form class="auto-container" id="msform" style="margin-bottom:20px">
              <fieldset id="addressDetailsFieldSet" style="margin-top:30px;">
<button style="cursor:pointer;"class="theme-btn btn-style-one" type="button" style="transition: all 0.3s ease 0s; min-height: 0px; min-width: 0px; line-height: 24px; border-width: 2px; margin: 0px; padding: 10px 40px; letter-spacing: 0px; font-size: 14px;" data-toggle="modal" data-target="#citizenhack-Modal">Check out the final selected teams!</button>
              </fieldset>
            </form>
          
              </div>
              
</div>
           
<!---Modal starts Here--->

<div class="modal fade" id="citizenhack-Modal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header greyback1">
          <h4 class="modal-title" style="color:#000000;"> <strong>The Final 25 Teams!</strong></h4>
        </div>
        <div class="modal-body ">
          <div class="row">
           
            <div class="col-sm-12">
               <p class="text">
                    We had an enormous response for <strong> Citizen Hack registrations</strong> but were unfortunately only able to select 25 teams to participate in the final event. All the selected teams will be participating to try and win the top 3 cash prizes available. For all the teams that didn't get selected, we will be conducting a lot more events in the future and hope to see you there.  
                </p><br> 
            </div>
        </div>
        
        <br>
        <div class="row" style="overflow-y:scroll; height:300px;margin-top: -24px;">
          
            <div class="col-sm-6">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            
                            <th>
                                Team Member Names
                            </th>
                            <th>
                                College Name
                            </th>
                            <th>
                                Track Assigned
                            </th>
                            <th>
                                City Name
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                         <tr>
                            <td>1</td>
                            
                            <td>Rama chandra, Yagneswara,Tarun, Shyam</td>
                            <td>Miracle Educational Society</td>
                            <td>Conversational Bot</td>
                            <td>Vizianagaram</td>
                        </tr>
                        <tr>
                            <td>3</td>
                             <td>Santha kumar, Shaik Laljan, Yashwanth, Siva </td>
                            <td>Sri Aditya Engineering College</td>
                            <td>Mobile Appliation</td>
                            <td>East Godavari</td>
                            
                            
                        </tr>
                        <tr>
                            <td>5</td>
                            
                            <td>Balu, Manoj, Satheesh</td>
                            <td>RVRJC College Of Engineering</td>
                            <td>Conversational Bot</td>
                            <td>Krishna</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Varshini, Haneef, Harish, Sandhya </td>
                            <td>NSRIT </td>
                            <td>Conversational Bot</td>
                            <td>Visakhapatnam</td>
                            
                        </tr>
                        <tr>
                            <td>9</td>
                           <td>Pavan, Taraka Ramudu, Vasavi, Sai Lakshmi</td>
                            <td>Aditya Engineering College</td>
                            <td>Connected Solution</td>
                            <td>East Godavari</td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>Srikanth, Chaitanya, Mohith  </td>
                            <td>Sri Vasavi Engg College</td>
                            <td>Conversational Bot</td>
                            <td>Guntur</td>
                            
                        </tr>
                        <tr>
                            <td>13</td>
                            
                            <td>Lohitha, Madhu babu </td>
                            <td>Madanapalle Institute of Technology and Science</td>
                            <td>Mobile Applications</td>
                            <td>Chittoor</td>
                        </tr>
                        <tr>
                            <td>15</td>
                             
                            <td>Sreeram, Sreekrishna, Pavani </td>
                            <td>Raghu Engineering College</td>
                            <td>Mobile Applications</td>
                            <td>Visakhapatnam</td>
                           
                        </tr>
                        <tr>
                            <td>17</td>
                            
                            <td>Devi Sravani, Amruthavalli, Kavya, HarikaSushma </td>
                            <td>RVRJC College Of Engineering</td>
                            <td>Mobile Applications</td>
                            <td>Guntur</td>
                        </tr>
                       
                        <tr>
                            <td>19</td>
                            
                            <td> Manikanta, Sandesh, Pavan</td>
                            <td>Sri Vasavi Engg College</td>
                            <td>Mobile Application</td>
                            <td>West Godavari</td>
                        </tr>
                         <tr>
                            <td>21</td>
                            
                            <td>SiveswaraRao, Krishna Vamsy, Omsai</td>
                            <td>BVC Institute Of Technology</td>
                            <td>Mobile Application</td>
                            <td>Anantapur</td>
                        </tr>
                        <tr>
                            <td>23</td>
                             
                            <td>Santha kumar,Shiva kumar, Laljan, Sahajananda`</td>
                            <td>VITS College Of Engineering</td>
                            <td>Conversational Bot</td>
                            <td>Visakhapatnam</td>
                            
                        </tr>
                        <tr>
                            <td>25</td>
                            <td>Sowmya, Shaik , Rumia, Yamuna</td>
                            <td> NRI, Agiripalli</td>
                            <td>Mobile Application</td>
                            <td>Krishna</td>
                        </tr>
                       
                        
                    </tbody>
                </table> 
                
                 
            </div>
            <div class="col-sm-6">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            
                            <th>
                                Team Member Names
                            </th>
                            <th>
                                College Name
                            </th>
                            <th>
                                Track Assigned
                            </th>
                            <th>
                                City Name
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2</td>
                            
                            <td>Goutham, Eswar, Viswanadh, Vinay, Bharat </td>
                            <td>Andhra University</td>
                            <td>Mobile Applications</td>
                            <td>Visakhapatnam</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            
                            <td>Bharat, Ramya, Priyanka, Sandeep</td>
                            <td>Miracle Educational Society</td>
                            <td>Connected Solution</td>
                            <td>Anantapur</td>
                            
                        </tr>
                        <tr>
                            <td>6</td>
                            
                            <td>Priya, Dhansekhar, Praveen, Ravi kishore </td>
                            <td>Miracle Educational Society</td>
                            <td>Machine Learning</td>
                            <td>Vizag</td>
                            
                           
                        </tr>
                        <tr>
                            <td>8</td>
                            
                            <td>Naga, Supriya, Navya</td>
                            <td>KKR & KSR Institute of Technology & Sciences</td>
                            <td>Mobile Applications</td>
                            <td>Guntur</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Pavani, Pushpa, Anjali, Sonu  </td>
                            <td>KKR & KSR Institute of Technology & Sciences </td>
                           <td>Mobile Application</td>
                            <td>Guntur</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            
                            <td>Abilash, Sumanth, Sampath, Sainath </td>
                            <td>KIET Group of Institutions</td>
                            <td>Conversational Bot</td>
                            <td>East Godavari</td>
                            
                           
                        </tr>
                        <tr>
                            <td>14</td>
                            
                            <td>Sekhar, Arunraj, Tarun, Jathin </td>
                            <td>Maharaj Vijayaram Gajapathi Raj College of Engineering</td>
                            <td>Mobile Applications</td>
                            <td>Vizianagaram</td>
                        </tr>
                        
                        <tr>
                            <td>16</td>
                            <td>Navya, Sai, Anusha </td>
                            <td>KKR & KSR Institute of Technology & Sciences</td>
                            <td>Mobile Applications</td>
                            <td>Guntur</td>
                            
                            
                            
                        </tr>
                        <tr>
                            <td>18</td>
                            <td>Lavanya, Lakshmi, Aishwarya </td>
                            <td>NRI, Agiripalli</td>
                            <td>Connected Solution</td>
                            <td>Krishna</td>
                            
                        </tr>
                         <tr>
                            <td>20</td>
                            
                             <td>Prudhvi, Prathyusha, Ajay </td>
                            <td>NRI, Agiripalli</td>
                            <td>Mobile Application</td>
                            <td>Krishna</td>
                        </tr>
                        <tr>
                            <td>22</td>
                            <td>Snehitha, Lavanya, Madhurima, Vidya, Lahari </td>
                            <td>Sri Sivani College Of Engineering </td>
                            <td>Mobile Applications</td>
                            <td>Srikakulam</td>
                           
                        </tr>
                        
                        <tr>
                            <td>24</td>
                            <td>Mahesh, Shivaji, Prasanna, Rajasekhar, Siddharth </td>
                            <td>Velagapudi Ramakrishna Siddhartha Engineering College</td>
                            <td>Mobile Applications</td>
                            <td>Krishna</td>
                        </tr>
                       
                        
                    </tbody>
                </table> 
                
                 
            </div>
           
            
            </div>
        
        </div>
        <div class="modal-footer nomargintop">
          <button type="button" class="theme-btn btn-style-one" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


       

           <!---Modal Ends Here--->

  <section class="page-title" style="background-image:url(<?= AMAZON_URL ?>/ds17/images/mean1.jpg);background-position:0% 38%;padding: 35px 0px 35px;height:270px;">
    	<div class="auto-container">
        	<div class="inner-box" style="padding-top: 60px;">
                <h1>25 Teams | 24 Hours | 6 Use Cases | 3 Winners</h1>
                
            </div>
        </div>
    </section>


<div  class="auto-container">
              <section id="use"  class="team-section" style="margin-bottom: 300px;">
    	<div class="auto-container">
        	 <div class="sec-title centered">
                        	<h2>Innovative Technologies</h2>
                        	 
             <div class="text" style="font-size:16px";>At Citizen Hack we love ideas, so we will let you pick the technologies - click on the below tiles to understand the technology scope of what you can build with at the event
            </div>
            </div> 
            
        <div class="grid">
            <div class="col-sm-3">
					<figure class="effect-julia" id="clickeffect1" style="background: rgba(255,255,255,0.2);">
					<img src="<?= AMAZON_URL ?>/ds17/images/Conversational-Bot.svg" alt="img13" width="100%" height="auto">
						<figcaption>
							
							<div class="items">
							    <p><strong>Google DialogFlow</strong></p><br>
							    	<p><strong>IBM Watson</strong></p><br>
								<p><strong>Microsoft Bot Framework</strong></p>
							</div>
							<!--<a href="#">View more</a>-->
						</figcaption>			
					</figure>
			</div>		
		<script>
		$("document").ready(function(){
		    $("#clickeffect1").click(function(){
		        $(this).addClass("effect-julia1");
		        $("#clickeffect2").removeClass("effect-julia1");
		        $("#clickeffect3").removeClass("effect-julia1");
		        $("#clickeffect4").removeClass("effect-julia1");
		    })
		})
		</script>
		<div class="col-sm-3">
					<figure class="effect-julia" id="clickeffect2">
					   <img src="<?= AMAZON_URL ?>/ds17/images/Connected-Solution.svg" alt="img14"  width="100%" height="auto">
						<figcaption>
						
							<div class="items">
								<p style="background-color:#ffffff;color:#232527;"><strong>AWS IoT Platform</strong></p> <br>
									<p style="background-color:#ffffff;color:#232527;"><strong>Watson IoT</strong></p> <br>
								<p style="background-color:#ffffff;color:#232527;"><strong>Azure IoT Platform</strong></p>
							</div>
							<!--<a href="#">View more</a>-->
						</figcaption>			
					</figure>
		<script>
		$("document").ready(function(){
		    $("#clickeffect2").click(function(){
		        $(this).addClass("effect-julia1");
		        $("#clickeffect1").removeClass("effect-julia1");
		        $("#clickeffect3").removeClass("effect-julia1");
		        $("#clickeffect4").removeClass("effect-julia1");
		    })
		})
		</script>
		</div>
			
				    <div class="col-sm-3">
					<figure class="effect-julia" id="clickeffect3" style="background: rgba(255,255,255,0.2);">
				   <img src="<?= AMAZON_URL ?>/ds17/images/Mobile-Applications.svg" alt="img13" width="100%" height="auto">
						<figcaption>
							
							<div class="items">
								<p><strong>Xamarin</strong></p><br>
								 <p><strong>Ionic</strong></p><br>
								<p><strong>Native Android</strong></p>
							</div>
							<!--<a href="#">View more</a>-->
						</figcaption>			
					</figure>
				   </div>	
		<script>
		$("document").ready(function(){
		    $("#clickeffect3").click(function(){
		        $(this).addClass("effect-julia1");
		        $("#clickeffect1").removeClass("effect-julia1");
		        $("#clickeffect2").removeClass("effect-julia1");
		        $("#clickeffect4").removeClass("effect-julia1");
		    })
		})
		</script>
		<div class="col-sm-3">
					<figure class="effect-julia" id="clickeffect4"> 
				 <img src="<?= AMAZON_URL ?>/ds17/images/Machine-Learning.svg" alt="img14"  width="100%" height="auto">
						<figcaption>
							
							<div class="items">
								<p style="background-color:#ffffff;color:#232527;"><strong>R Language</strong></p> <br>
								<p style="background-color:#ffffff;color:#232527;"><strong>Python</strong></p><br>
								<p style="background-color:#ffffff;color:#232527;"><strong>TensorFlow</strong></p> 
							</div>
							<!--<a href="#">View more</a>-->
						</figcaption>			
					</figure>
					</div>
	   <script>
		$("document").ready(function(){
		    $("#clickeffect4").click(function(){
		        $(this).addClass("effect-julia1");
		        $("#clickeffect1").removeClass("effect-julia1");
		        $("#clickeffect2").removeClass("effect-julia1");
		        $("#clickeffect3").removeClass("effect-julia1");
		    })
		})
		</script>			
				</div></div>
			
				</section>
         <div class="auto-container">
				 <div class="sec-title centered" style="margin-top:-45px!important;">
            	<h2>Foundation Technologies</h2>
              </div> 
              
              <div class="text" style="font-size:16px;text-align:center;">
                Choose the cloud and compute options that you want to build your ideas upon at Citizen Hack
              </div>
           
            </div>
            
             <div class="auto-container">
				<div class="row" style="margin-left:4px;margin-right:-21px;">
				<div class="col-sm-12" style="color:#fff;padding: 25px 20px;">
				<div class="row">
				   
				  
				  <div class="col-sm-4">
				  <center> <a href="https://azure.microsoft.com/en-in/"><img src="<?= AMAZON_URL ?>/ds17/images/azure.png" class="img-responsive" target="_blank"></a></center>
				  </div>
			    <div class="col-sm-4">
			    <center> <a href="https://aws.amazon.com/"><img src="<?= AMAZON_URL ?>/ds17/images/amzs.png" class="img-responsive" target="_blank"></a></center></div>
				 
				   <div class="col-sm-4">
				 <center><a href="https://cloud.google.com/"> <img src="<?= AMAZON_URL ?>/ds17/images/google.png" class="img-responsive" target="_blank"></a></center>
				 
				   </div>
				  </div><br>
				  <div class="row">
				 
				  
				  <div class="col-sm-6">
				  <center><a href="https://firebase.google.com/"> <img src="<?= AMAZON_URL ?>/ds17/images/fire.png" class="img-responsive" target="_blank"></a></center>
				  </div>
			    <div class="col-sm-6">
			    <center> <a href="https://www.heroku.com/"><img src="<?= AMAZON_URL ?>/ds17/images/herok.png" class="img-responsive"  target="_blank"></a></div>
				  </div>
				  </div>
				</div>
				</div>
			
				</div>
			
        
<br>
  
    	<div class="demo rotate1">
     <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
         <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwo">
                <h4 class="panel-title">
                    <a class="collapsed" style="padding:0px !important" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" >
                        
                         <section class="subscribe-section sec-con">
    	<div class="auto-container">
        	<div class="row clearfix">
            	<!--Column-->
            	<div class="column col-md-7 col-md-12 col-xs-12">
        			<h2>Check out the rules and format of  <span>Citizen Hack</span></h2>
            		<div class="text">Learn more about the venue, date, selection process, judging criteria and others!
 </div>
                </div>
                <!--Column-->
                <div class="column col-md-5 col-md-12 col-xs-12">
                	
                    <!--Subscribe form-->
                    <div class="subscribe-form">
                        <form>
                            <div class="form-group">
                            
                  <button type="submit" class="theme-btn" style="width:215px !important;height:60px !important;font-sixe:16px !important;left:170px;border-radius:0px !important">Learn More &nbsp; <span style="margin-top:15px;"><i class="fa fa-angle-double-right rotate" style="font-size:17px;"></i></span></button>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
                    </a>
                </h4>
                </div>
            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="panel-body">
                <div class="auto-container">
                   <div class="row clearfix">
          
          	<div class="column col-md-6 col-md-12 col-xs-12">
          	
          		<div class="inner">
                    
                        
                            <h3 style="font-weight:800;color:#232527;">Venue, Date and Environment</h3>
                        
                        <div class="bold-text" style="font-style:italic;margin-top:5px;margin-bottom:5px;"> Digital Valley, Visakhapatnam - <span>Andhra Pradesh</span></div>
                           <br><p class="sub-text"><b>Citizen Hack '17</b> will be held at <a href="http://www.miraclesoft.com/locations/miracle-heights.php" target="_blank"><strong><font color="#d43058">Miracle Heights, Rushikonda</font></strong></a> - Miracle's Hilltop APAC Headquarters. The hackathon will provide an unique experience of fun and learning for everybody attending. The competitiveness of the event along with a harassment free environment, mentored by experts and technologists will provide the perfect platform for participants to make their mark. </p>
                 <p class="sub-text">
                    The event will start at <b>8 AM IST on <strong>December 16th, 2017.</strong></b> and will end at 10 AM IST on <strong>December 17th, 2017</strong> with the announcement of the top 3 winners!
                </p>
                    </div>
                    	<div class="inner">
                    
                        
                            <h3 style="font-weight:800;color:#232527;"> Event Rules and Details</h3>
                        
                        <p class="sub-text">
                  
                    <ul class="sub-text">
                      <li class="event-rules">Each team must consist of a minimum of 2 members and maximum of 4 members  - All students must be either 3rd year MCA (or) 3rd/4th year B.Tech students</li>
                      <li class="event-rules">All team members must bring their own individual laptops - WIFI, power and seating will be provided by Miracle</li>
                      <li class="event-rules">Final 25 teams will be selected by Miracle - not all teams that are registered will be selected</li>
                      <li class="event-rules">Any detection of plagiarism, misconduct (or) unlawful behavior will result in disqualification of the team from the event</li>
                      <li class="event-rules">All the teams must participate in the full event</li>
                    </ul>
                   
                </p>
                    </div>
                    	<div class="inner">
                    
                        
                            <h3 style="font-weight:800;color:#232527;">Scoring and Judging</h3>
                        
                         <p class="sub-text">
                    The scoring process will include the review of the final demonstration and presentation along with the overall performance and attitude of the team throughout the event. The following elements will be used to judge the performance and points, 
                   
                    <ul class="sub-text">
                     <li class="event-rules">Originality of the idea</li>
                     <li class="event-rules">Feasibility of the solution </li>
                     <li class="event-rules">Code Quality and UI/UX of Application</li>
                     <li class="event-rules">Percentage of completion towards solution</li>
                     <li class="event-rules">Time, Task and Team Management</li>
                     <li class="event-rules">Overall behavior and attitude of team </li>
                     <li class="event-rules">Demo and Presentation Quality</li>
                    </ul>
                    
                </p>
                    </div>
                    	<div class="inner">
                    
                        
                            <h3 style="font-weight:800;color:#232527;"> Selection Process Timeline</h3>
                        
                       
                        <p class="sub-text">
                    <ul class="sub-text">
                    <li class="event-rules">Citizen Hack Registrations Open on <strong>November 16th, 2017 (Thursday)</strong></li>
                    <li class="event-rules">Registrations for Citizen Hack close on <strong><font color="#d43058">December 5th, 2017 (Tuesday)</font></strong></li>
                    <li class="event-rules">Final 25 teams announced on <strong>December 8th, 2017 (Friday)</strong></li>
                    <!-- <li class="event-rules">Webinar for Team Questions/Information conducted on <strong>December 8th, 2017(Friday)</strong></li> -->
                    <li class="event-rules"><strong>Teams compete</strong> on <strong>December 16th, 2017 (Saturday)!</strong></li>
                    </ul>
                    
                </p>
                    </div>
              
             
            </div>
           	<div class="column col-md-6 col-md-12 col-xs-12">
                <h4 style="#222222"><strong>Event Schedule</strong></h4><br>
                <section id="timeline">
  <article>
    <div class="inner">
      <span class="date">
       
        <span class="month">8 AM</span>
        
      </span>
      <h2 ><strong>Student Team Reporting and  Kit Pickup</strong> </h2>
    
    </div>
  </article>
  <article>
    <div class="inner">
      <span class="date">
        <span class="month">9 AM</span>
        
      </span>
      <h2 style="background-color:#"><strong>Opening Keynote and Task Assignment</strong></h2>
     
    </div>
  </article>
  <article>
    <div class="inner">
      <span class="date">
         <span class="month">10 AM</span>
      </span>
      <h2> <strong>Idea Discussion</strong></h2>
      
    </div>
  </article>
 <article>
    <div class="inner">
      <span class="date">
         <span class="month">11 AM</span>
      </span>
      <h2><strong>Coding Starts</strong></h2>
      
    </div>
  </article>
  <article>
    <div class="inner">
      <span class="date">
         <span class="month">1 PM </span>
      </span>
      <h2><strong> Working Lunch</strong></h2>
      
    </div>
  </article>
   <article>
    <div class="inner">
      <span class="date">
         <span class="month">4 PM</span>
      </span>
      <h2> <strong>ReviewRound #1</strong></h2>
      
    </div>
  </article>
  <article>
    <div class="inner">
      <span class="date">
         <span class="month">8 PM</span>
      </span>
      <h2> <strong>ReviewRound #2</strong></h2>
      
    </div>
  </article>
   <article>
    <div class="inner">
      <span class="date">
         <span class="month"> 9 PM  </span>
      </span>
      <h2> <strong>Working Dinner</strong></h2>
      
    </div>
  </article>
  <article>
    <div class="inner">
      <span class="date">
         <span class="month">12 AM</span>
      </span>
      <h2><strong> Review Round #3</strong> </h2>
      
    </div>
  </article>
  <article>
    <div class="inner">
      <span class="date">
         <span class="month">2 AM </span>
      </span>
      <h2><strong> Review Round #4</strong></h2>
      
    </div>
  </article>
    <article>
    <div class="inner">
      <span class="date">
         <span class="month">6 AM </span>
      </span>
      <h2> <strong>Final Review</strong></h2>
      
    </div>
  </article>
    <article>
    <div class="inner">
      <span class="date">
         <span class="month">7 AM </span>
      </span>
      <h2> <strong>Demo Rounds</strong></h2>
      
    </div>
  </article>
    <article>
    <div class="inner">
      <span class="date">
         <span class="month">10 AM </span>
      </span>
      <h2> <strong>Winner Announcements</strong></h2>
      
    </div>
  </article>
</section>
            </div>
           
            
            </div>
            </div>
                </div>
            </div>
        </div>

        </div>
        
        </div>
  <section class="about-section" style="padding-top:5px">
  <div class="auto-container">
            <div class="sec-title centered" >
            	<h2>Use Case Topics</h2>
                </div>
                <div class="text" style="font-size: 16px;">
                  <center>Choose from one of our 6 Areas of Interest and build an application around one of the 4 Technology Areas which are Conversational Bots, Connected Solutions, Mobile Applications and Machine Learning</center></p>
               </div>
      <br><br>
               <div class="row clearfix">
                
            	<!--Services Style One-->
            	<div class="services-style-one col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    <div class="icon-box">
                         <center><i class="fa fa fa-university" aria-hidden="true"></i></center>
                        </div>
                        <h3><a>Government</a></h3>
                        <div class="text">Take the governance of our state to a new level by using technology to effect everyday lives</div>
                    </div>
                </div>
                
                <!--Services Style One-->
            	<div class="services-style-one col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    <div class="icon-box">
                           <center><i class="fa fa-truck" aria-hidden="true"></i></center>
                        </div>
                        <h3><a >Transport</a></h3>
                        <div class="text">
    How can you build smart, connected solutions to enhance the transport of people and goods in the state
</div>
                    </div>
                </div>
                
                <!--Services Style One-->
            	<div class="services-style-one col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    		<div class="icon-box">
                         <center><i class="fa fa-shopping-cart" aria-hidden="true"></i></center>
                        </div>
                        <h3><a>Commerce</a></h3>
                        <div class="text">
    In a cash addicted economy, what technology would you use to improve a common man's experience
</div>
                    </div>
                </div>
                
            </div>
            <div class="row clearfix">
                
            	<!--Services Style One-->
            	<div class="services-style-one col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    <div class="icon-box">
                            <center><i class="fa fa-graduation-cap" aria-hidden="true"></i></center>
                        </div>
                        <h3><a> Education</a></h3>
                        <div class="text">Known for our engineering prowess - help ideate new technology solutions that can help improve education</div>
                    </div>
                </div>
                
                <!--Services Style One-->
            	<div class="services-style-one col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    <div class="icon-box">
                           <center><i class="fa fa-leaf" aria-hidden="true"></i></center>
                        </div>
                        <h3><a>Agriculture</a></h3>
                        <div class="text">
    From analytics based farming to smart sensors for visibility - the possibilities within Agriculture are endless
</div>
                    </div>
                </div>
                
                <!--Services Style One-->
            	<div class="services-style-one col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    <div class="icon-box">
                           <center><i class="fa fa-heartbeat" aria-hidden="true"></i></center>
                        </div>
                        <h3><a>Health</a></h3>
                        <div class="text">Booking Appointments to Tracking Patient Care - do you have an idea that can revolutionize healthcare in the state</div>
                    </div>
                </div>
                
            </div>
            </div></section>
          
        
        
    
        
    
    <!--End Team Section-->

    <section class="subscribe-section">
    	<div class="auto-container">
        	<div class="row clearfix">
            	<!--Column-->
            	<div class="column col-md-7 col-md-12 col-xs-12">
        			<h2>Register your team for <span>Citizen Hack</span> today!</h2>
            		<div class="text">Participate in a 24-hour hackathon, build your skills, interact with experts and live the thrill of an opportunity to win the top prize</div>
                </div>
                <!--Column-->
                <div class="column col-md-5 col-md-12 col-xs-12">
                	
                    <!--Subscribe form-->
                    <div class="subscribe-form">
                        <form >
                            <div class="form-group">
                            
                  <button type="button" disabled="disabled" class="theme-btn" style="width:215px !important;height:60px !important;font-sixe:16px !important;left:170px;border-radius:0px !important" >Registrations are closed!</button>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    
    
    <!--End About Section-->
    
    <!--Main Footer-->
     <?php include 'ds17Footer.php'; ?>
    <!--End Main Footer-->
   
    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="icon fa fa-long-arrow-up"></span></div>

 

<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/owl.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/wow.js"></script>
<script src="js/appear.js"></script>
<script src="js/script.js"></script>

<script>

$(".rotate1").click(function(){
 $(".rotate").toggleClass("down")  ; 
})

</script>


</body>
</html>