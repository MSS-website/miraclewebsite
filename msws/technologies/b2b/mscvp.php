<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>MSCVP - B2Bi/MFT | Miracle</title>
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
    <!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
        
      
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
         
             .linkText1:hover {
    color: #00aae7 !important;
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
                  <br><br>
                  <div class="col-sm-6 text-left">
                     <h1 class="heavy micro">Miracle's	Supply	Chain	Visibility	Portal</h1>
                  </div>
                  <div class="col-sm-6 text-right">
                     <ul class="breadcrumb pull-right">
                        <li><a href="../">Home</a></li>
                        <li><a href="../technologies/">Technologies</a></li>
                        <li><a href="../b2b/">B2Bi & MFT</a></li>
                        <li class="active">MSCVP</li>
                       
                     </ul>
                  </div>
               </div>
               
               <br>
            </div>
            
         </div>
      </section>
      
      <br>
      <section id="services" class="container">
        
        
        <div class="row">
            
                  
                  
                  <div class="col-sm-6">
                  
                  <p class="methodText">
                      With rapid evolution taking place in the market place, the need for a business to be flexible, adaptive and dynamic is more essential today than ever before. With years of industry and technology understanding under our belts, our teams have worked towards bringing a specialized framework to address tomorrow’s challenges for you.
                  </p>
                  
                  <p class="methodText">
                      Our B2B Framework for IBM Sterling B2B Integrator enables the rapid deployment and on boarding of Trading Partners using pre-defined business processes, code lists, maps, portals and other accelerators. The framework addresses several aspects of initial deployment, ongoing support and maintenance activities to ensure a much more simplified approach with a RBAC (Role Based Access Control) Web Portal along with enhanced visibility.
                  </p>
                  <p class="methodText">
                      Visibility into the B2B/EDI transactions is a major challenge and extending that to be able to correlate to the ERP systems/Logistics Platforms/Providers is an even more daunting task. This challenge is solved by the use of our own <strong>Supply Chain Visibility Portal</strong>.
                  </p>
                  <p class="methodText">
                      The goal of our B2B Framework is to take reusable and proven industry patterns and build them into accelerators to result in accelerated adoption of Sterling B2B Integrator. This allows customers to spend both their investments and resources on the implementation of business requirements rather than focus on the gritty details of day-to-day validating process executions and data formats.
                  </p>
              </div>
              
              <div class="col-sm-6">
                  <img id="im" class="img-responsive" src="<?= AMAZON_URL ?>/images/b2b/scvp.png">
                  
              </div>
              
        </div>
        
        
      </section>
      
     
           
            
      <section  class="container">
             
              
                  <div class="row">
               <div class="col-sm-12">
                   
                  <h1 style="color:#0d416b" class="heavy">Our	Case	Studies</h1>
               </div>
               <div class="effect col-sm-4">
                  <div class="card">
  <a class="linkText1" target="_blank"  href="http://www.miraclesoft.com/why/sstory7.php"><img src="<?= AMAZON_URL ?>/images/b2b/food1.png" alt="Avatar" style="width:100%">
  <div class="container" style="background-color:#eee;">
    
    <p><center><strong>Enhanced Visibility and Control for Global Food Distributor</strong></center></p> 
  </div>
  </a>
</div>
               </div> 
               <div class="effect col-sm-4">
                    <div class="card">
  <a class="linkText1" data-toggle="modal" data-target="#myModal"> <img  src="<?= AMAZON_URL ?>/images/b2b/beverages1.png" alt="Avatar" style="width:100%">
  <div class="container" style="background-color:#eee;">
    
     <p><center><strong>Self-Service B2B Framework for Leading Beverages Customer
</strong></center></p> 
  </div>
  </a>
</div>
 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content" style="overflow-y: scroll; height:500px; ">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title heavy"><strong>Self-Service B2B Framework for Leading Beverages Customer</strong></h3>
        </div>
        <hr>
        <div class="modal-body">
          <p class="methodText">The customer was looking for a self-service solution to allow their business users to view EDI
transactions and track transactional flows with their transportation carriers. Their existing support team
was getting too many daily tickets to get EDI transaction samples (or) to provide proof that a transaction
was sent (or) received with the carrier. Negotiating the pickup and delivery of shipments is very time
sensitive and critical to global supply chain business relationship.</p>
<p class="methodText">They wanted a solution that was not intrusive to their B2B eco-system and provided an easy to use interface for the business users. They chose to use <strong>Miracle’s Supply Chain Visibility Portal</strong> to address the business challenges. MSCVP runs outside of the B2B Platform which addressed their first concern to not impact the production orchestration of the transactional activity. The transactional details are then loaded to an external database and all interfaces are stored to an external file system. An easy to use GUI was wrapped around the MCSVP Database and File System to allow access for the Business Users to view and track their transactional details.</p>
<p class="methodText">The business users can see when a transaction was received and processed. They can view the actual content of the transactional document and share with internal and external contacts as needed. If they wanted to re-issue a transaction, they can do so as long as they have access for that specific carrier and transaction. As transactional history built in MSCVP, they were then able to leverage the analytics of our solution to measure performance of the carriers. They were able to determine which carriers were responsive to their transportation needs and measure the lifecycle of the transactional flow.</p>
       <p class="methodText"><strong>The business users are now able to self-serve their own needs and reduce support tickets and associated cost for doing so.</strong></p>
        </div>
        <!--<div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>-->
      </div>
      
    </div>
  </div>
                </div>
      
  
                <div class="effect col-sm-4">
                    <div class="card">
  <a class="linkText1" data-toggle="modal" data-target="#myModal1"> <img  src="<?= AMAZON_URL ?>/images/b2b/logistics1.png" alt="Avatar" style="width:100%">
  <div class="container" style="background-color:#eee;">
    
     <p><center><strong>B2B/EDI Supply Chain Portal for Global Logistics Provider
</strong></center></p> 
  </div>
  </a>
</div>
 <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog" >
    
      <!-- Modal content-->
      <div class="modal-content" style="overflow-y: scroll; height:500px;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title heavy"><strong>B2B/EDI Supply Chain Portal for Global Logistics Provider</strong></h3>
        </div>
        <hr>
        <div class="modal-body">
          <p class="methodText">Our customer was facing several business challenges like an outdated platform, high integration costs, lack of performance, flexibility and scalability and not being able to monitor and track their EDI transactions. Based on Miracle’s analysis, we proposed a self-service portal(<strong>Miracle’s Supply Chain Visibility Portal</strong>) to allow business users to view and track their transactional details seamlessly. MSCVP runs outside of their B2B platform, which meant that it is unobtrusive to their existing transactional activity.</p>
        <p class="methodText">MSCVP provided great value to business users who can login to the application using role based access to search, track, re-submit and re-transmit EDI transactions. This functionality significantly reduced the involvement of EDI developers and made day to day EDI operations much more efficient.</p>
        <p class="methodText">Using MSCVP customer was able to quickly run ad-hoc reports using built in features with in MSCVP reporting and analytics dashboard. Reporting capabilities allowed their management team to plan appropriate resourcing based on high volume EDI transactions coming through the system to be able to address issues with Trading Partners.</p>
       <p class="methodText">Our customer also leveraged the extended capabilities of MSCVP to provide self-service onboarding of Trading Partners. This module of MSCVP helped our customer to significantly accelerate onboarding of new Trading Partners and manage them with low admin costs.</p>
        </div>
        
      </div>
      
    </div>
  </div>
                </div>
            </div>
                  
          </section>
      
      
      
      
       <section  class="container">
             
              
            <div class="row">
               <div class="col-sm-12">
                   
                    <h1 style="color:#0d416b" class="heavy">Framework	Features</h1>
               </div>
                <div class="col-sm-12">
                   
                    <h3 style="color:#0d416b" class="heavy">Simplify and Streamline Onboarding of Your Trading Partners</h3>
               </div>
               <div class="col-sm-12">
                   <p class="methodText">
                       <strong>Trading Partner On-Boarding</strong>
                   </p>
                 <p class="methodText">
                   New Trading partner on-boarding required extensive involvement of manual process for B2B/EDI/MFT operations. MSCVP provides an easy to use Web based screens to capture demographic information of Partners and provide them intuitive way to automate their on-boarding process. The self service functions are configurable to fit various types of Trading partner needs.</p>
                   <p class="methodText">
                       Our teams have built an accelerator for rapid on-boarding of trading partners from Legacy platforms, excel sheets using predefined business processes, maps, shell scripts/VB scripts for automating this error prone and laborious tasks. It also have built-in capabilities to customize the business processes to be code list/DB driven so that we can reuse the business process and maps based on configurations done in them. There is also a set of data extraction/script for transforming the Mainframe Gentran Partner Data extracts into the Sterling B2B Integrator 5.2.x.
                   </p>
                   <p class="methodText">
                       <strong>The Key Steps for Successful Onboarding of Trading Partners</strong>
                       <div class="container">
                    <div class="col-sm-12">
                       <ul>
                           <li>Identify which partners are best aligned with your B2B initiatives and which can add value to the network.</li>
                           <li>Establish partner profiles and enable partners to update these as changes occur.</li>
                           <li>Conduct a connectivity and technology audit to determine the technical capabilities and needs of your partner, and to better understand their communications infrastructure.</li>
                           <li>Connect, test and integrate business processes with partners. Companies should review policies and profiles, and configure B2B systems to integrate with the workflow of their trading partners. This integration needs to be able to scale to span multiple systems, partners and processes.</li>
                       </ul>
                       </div>
                       </div>
                   </p>
                   <p class="methodText">
                       <strong>XML Email Handler</strong>
                   </p>
                   
                   <p class="methodText">
                       With this module we provide a centralized XML Template based <strong>Email Alert</strong> mechanism for error handling. Through Trading Partner Collaborative Error Management, errors are sent to the specific sender with customized error messages based on Partner Configuration.
                   </p>
                   
                   <p class="methodText">
                       <strong>Archiving Agent for Amazon S3/Glacier</strong>
                   </p>
                   
                   <p class="methodText">
                       The Archiving Agent provides customized business processes for the archival of business documents into the Amazon Cloud. We also provide a set of routines for long-term storage into Glacier, which provides a much more cheaper option for low-frequency access documents. This can drastically reduce CAPEX costs and also lower TCO from a storage cost perspective.
                   </p>
                   
                   <p class="methodText">
                       <strong>Resubmit/Reprocess Transactions</strong>
                   </p>
                   
                   <p class="methodText">
                       Our framework enables you to resubmit failed transactions for processing. This functionality allows transactions, which have failed due to either connection issues (or) data errors, to be re-processed.
                   </p>
                   
                   <p class="methodText">
                       <strong>AURA – Automated Testing Framework for B2B Upgrade Projects</strong>
                   </p>
                   
                   <p class="methodText">
                       The <strong>AURA Test Harness</strong> is a web-based tool that allows you to enter hypothetical scenarios and test a single rule set before putting the rules into production. Testing is limited to a single rule set at a time and also excludes any changes to decisions that occur in post-processing.


                   </p>
                   
                   <p class="methodText">
                       <strong>Prebuilt Maps</strong>
                   </p>
                   
                   <p class="methodText">
                       Our teams have been able to analyze industry patters and build multiple maps for standard transactions connecting to SAP, Oracle, OTM and other back-end applications.
                    <div class="container">
                    <div class="col-sm-12">
                    <ul>
                           <li>
                               Prebuilt Maps from EDI to XML
                               <div class="container">
                    <div class="col-sm-12">
                               <ul>
                                        <li>Inbound: 855/856/810/832
                                        </li>
                                        <li>Outbound: 850/820
                                        </li>
                                    </ul>
                                    </div>
                                    </div>
                           </li>
                           
                           <li>Prebuilt Maps for XML to IDOC and IDOC to XML
                                </li>
                                <li>Prebuilt Maps for CSV to IDOC and IDOC to CSV
                                </li>
                                <li>Prebuilt Maps for Industry Standards into XML
                                </li>
                                <li>Prebuilt Maps for XML into Industry Standards
                                </li>
                                <li style="list-style: none; display: inline">
                                    <ul>
                                        <li>XML Schemas/Sterling Maps 5.2/Test Data Files
                                        </li>
                                        <li>Data Definition Formats
                                        </li>
                                    </ul>
                                </li>
                       </ul>
                    </div>
                    </div>
                     
                    
                       
                   </p>
                   
                   <p class="methodText">
                       <strong>Prebuilt Processes</strong>
                   </p>
                   
                   <p class="methodText">
                       Our framework also consists of pre-built processes for the most common operations such as:
                  <div class="container">
                    <div class="col-sm-12">
                   <ul>
                                <li>Collector Processes
                                </li>
                                <li>Dispatcher Processes
                                </li>
                                <li>Transform and Distribute
                                </li>
                                <li>Pre and Post Process
                                </li>
                                <li>Inbound and Outbound Routing
                                </li>
                            </ul></div></div>
                   </p>
                   
                   <p class="methodText">
                       <strong>Prebuilt Reports and SLA Monitoring/Alerts</strong>
                   </p>
                    
                   <p class="methodText">
                       15 prebuilt reports as per your needs will be customized and packaged as part of the framework. The framework is capable of monitoring servers, handling SLA, alerting based on various conditions and tracking Meta data for reporting purposes.
                   </p>
                    
                   <p class="methodText">
                       <strong>Code List editor</strong>
                   </p>
                    
                   <p class="methodText">
                       The framework is also capable of working with code lists and displaying specific code lists to trading partners using Role Based Security for complete audit ability of changes.
                   </p>
                    
                   <p class="methodText">
                       <strong>Enterprise Profile Management</strong>
                   </p>
                    
                   <p class="methodText">
                       The framework also provides the ability to manage enterprise grade profiles such as,
<div class="container">
                    <div class="col-sm-12">
                        <ul>
                                <li>Trading Partner Hierarchy
                                </li>
                                <li>Trading Partner Profiles
                                </li>
                                <li>Trading Partner Contact Information
                                </li>
                                <li>Trading Partner Escalation Management
                                </li>
                            </ul></div></div>
                   </p>
                    
                   <p class="methodText">
                       <strong>Excel Based EDI Template</strong>
                   </p>
                   
                   <p class="methodText">
                       Our teams have also built Excel templates with embedded VB Scripts to transmit the EDI content using SMTP (Email), to enable the usage of excel by small trading partners. This will enable you to use the same B2B/EDI infrastructure for your entire ecosystem and still trace all your Business Documents using a single web portal. This can be enabled when your EDI, Excel-Based, Web Forms and E-Commerce Based Transactions are all routed through the same gateway.


                   </p>
                   
                   <p class="methodText">
                       <strong>Web-Template Based EDI</strong>
                   </p>
                   
                   <p class="methodText">
                       Through this feature our framework has several pre-built web forms for invoices, purchase orders and other essentials.


                   </p>
                   
                   <p class="methodText">
                       <strong>Auto-Trouble Ticket Creation Process Flow for MITS, JIRA, HP ITSM, CA Ticket System</strong>
                   </p>
                   
                   <p class="methodText">
                       When errors/exceptions happen within the B2B Integrator (or) when the B2B Integrator receive certain events from External Systems, then you will be automatically notified using Email/SMS/Pager Alerts and the framework will also create trouble tickets in the Trouble Ticket System of choice. Some common Ticket Management Systems such as MITS, JIRA, HP ITSM and CA Ticket Systems are already integrated into our framework and ready for use.


                   </p>
                   
                   <p class="methodText">
                       <strong>Enhanced Visibility through Supply Chain Portal</strong>
                   </p>
                   
                   <p class="methodText">
                       Our Web-Based Supply Chain Visibility Portal has abilities to track and trace business documents through their life cycle in processes such as Procure-to-Pay and Order-to-Cash. The portal has the ability to track the status of inbound/outbound EDI documents, B2B transactions, and back-end documents such as SAP IDOC's.


                   </p>
               </div>
                 
		 
      </div>
                 <div class="row col-sm-12">
            <p class="methodText">For more information regarding <strong>B2B Integration and Managed File Transfer</strong>, please reach out to <strong><a href="mailto:b2b@miraclesoft.com" class="linkText">b2b@miraclesoft.com</a></strong>
            </p>
         </div>  
         <br>
          </section>
 
      <!--/#about-us-->
      <?php include '../../footer.php';?>
   </body>
</html>