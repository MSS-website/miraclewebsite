<!-- 
/* ******************************************************************************
*
* Project : The Digital Valley Summit V1
*
* Date    : October10,2016
*
* Author  : Corporate Applicaiton Support Team<hubble@miraclesoft.com>
*
* File    : Agenda.php
*
* Copyright 2016 Miracle Software Systems, Inc. All rights reserved.
* MIRACLE SOFTWARE PROPRIETARY/CONFIDENTIAL. Use is subject to license terms.
*
* *****************************************************************************
*/
-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport"    content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author"      content="Shankar">
        <meta content="miraclesoft, education,  industry,  IT,industries, " name="keywords"/>
        <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="" type="image/x-icon">
        <title>Innovation Summit | Digital Summit</title>



        <?php include '../context.php'; ?>

        <style>
       
           
            
             .current_tab_techtalks >  a{
                color:#53bce8 !important;
            }
            .current_tab_Innovation {
                color:#53bce8 !important;
            }
            
            
            
            
            
            
            
            .session-break  b{

                margin-left:16px;
            }

            .description{
                padding: 2% 0;
            }


            .jumbotron {
                background: #00A79B !important;
                color: #FFF;
                border-radius: 0px;
            }


            .box {
                border-radius: 3px;
                box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
                padding: 10px 25px;
                text-align: right;
                display: block;
                margin-top: 60px;
            }
            .box-icon {
                background-color: #57a544;
                border-radius: 50%;
                display: table;
                height: 100px;
                margin: 0 auto;
                width: 100px;
                margin-top: -61px;
            }
            .box-icon span {
                color: #fff;
                display: table-cell;
                text-align: center;
                vertical-align: middle;
            }
            .info h4 {
                font-size: 26px;
                letter-spacing: 2px;
                text-transform: uppercase;
            }
            .info > p {
                color: #717171;
                font-size: 16px;
                padding-top: 10px;
                text-align: justify;
            }
            .info > a {
                background-color: #03a9f4;
                border-radius: 2px;
                box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
                color: #fff;
                transition: all 0.5s ease 0s;
            }
            .info > a:hover {
                background-color: #0288d1;
                box-shadow: 0 2px 3px 0 rgba(0, 0, 0, 0.16), 0 2px 5px 0 rgba(0, 0, 0, 0.12);
                color: #fff;
                transition: all 0.5s ease 0s;
            }

            .wpb_alert p:last-child, #content .wpb_alert p:last-child, .wpb_text_column p:last-child, .wpb_text_column *:last-child, #content .wpb_text_column p:last-child, #content .wpb_text_column *:last-child, .wpb_toggle_content p:last-child {
                margin-bottom: 0;
            }

            .alignleft {
                float: left;
                margin: 5px 30px 10px 0;
            }

            img.alignleft {
                border-radius: 50%;
                height: 90px;
                width: 90px;
                border: 3px solid #00a79b;
            }

            h4 {
                color: #000;
                font-size: 15px;
                padding: 10px 0 0;
            }

            h5 {
                color: inherit;
                font-size: 14px;
            }


            .active-read-more-btn::before {
                content: ">";
                font-size: 16px;
                line-height: 0.9;
                background: #189ac6 none repeat scroll 0 0;
                border-radius: 50%;
                color: #fff;

                display: inline-block;
                font-size: 14px;
                height: 14px;
                line-height: 1;
                margin: 0 5px 0 0;
                text-align: center;
                width: 14px;
            }

            .time_strip{
                background: #e7e7e7 none repeat scroll 0 0;
                border-radius: 4px;
                color: #000;
                font-size: 15px;
                padding: 12px;
                text-align: center;

            } 



            .align-center {
                text-align: center;
            }
            .hash-list {
                display: block;
                padding: 0;
                margin: 0 auto;
            }

            @media (min-width: 768px){
                .hash-list.cols-3 > li:nth-last-child(-n+3) {
                    border-bottom: none;
                }
            }
            @media (min-width: 768px){
                .hash-list.cols-3 > li {
                    width: 33.3333%;
                }
            }
            .hash-list > li {
                display: block;
                float: left;
                /*                border-right: 1px solid rgba(0, 0, 0, 0.2);
                                border-bottom: 1px solid rgba(0, 0, 0, 0.2);*/
            }
            .pad-30, .pad-30-all > * {
                padding: 30px;
            }
            .mgb-20{
                width: 100px;
                height: 100px;
                border-radius:50%;
                border: 3px solid #00aae7;
            }
            .mgb-20, .mgb-20-all > * {
                margin-bottom: 20px;
            }
            .wpx-100, .wpx-100-after:after {
                width: 100px;
            }
            .img-round, .img-rel-round {
                border-radius: 50%;
            }
            .padb-30, .padb-30-all > * {
                padding-bottom: 30px;
            }
            .mgb-40, .mgb-40-all > * {
                margin-bottom: 40px;
            }
            .align-center {
                text-align: center;
            }
            [class*="line-b"] {
                position: relative;
                padding-bottom: 20px;
                border-color: #E6AF2A;
            }
            .fg-text-d, .fg-hov-text-d:hover, .fg-active-text-d.active {
                color: #222;
            }
            .font-cond-b {font-weight: 700 !important;}
            
            .parallax{
    background-image:url('../images/schedule/desk.png');
    background-attachment:fixed;
    background-size:cover;
    background-position:center;
   

}

      .methodText{
    text-align: justify !important;
}
   .blue-text{
       color:#00aae7 !important;
   }
   .greyback1{
    background-color:#eee;
    padding:10px 15px;
    color:#000;
}
    
    .nomargintop{
    margin-top:-15px !important;
}
    
    
        </style>
    </head>
    <?php include '../header.php'; ?>
    <body class="home">

<section class="parallax">
            <div class="overlay">
            <div class="container">
                
            <div class="row"  style="margin-top:40px; margin-bottom:45px;">
         
          <div class="col-sm-6 text-left">
             
            <h1 style="color:#fff"><strong> Innovation Summit</strong></h1>
          </div>
          <div class="col-sm-6 text-right">
            <ul class="breadcrumb pull-right">
                <li><a href="../"><font color="#fff">Home</font></a></li>
               
                <li class="active"><font color="#fff"> Innovation Summit</font></li>
            </ul>
          </div>
         
        </div>
         
            </div></div>
        </section>


       
        <div class="container">
            <div class="row" >
                
           
                <div class="col-sm-12">
                   <p class="methodText">
             <br>  It was <strong>Day #1</strong>at Digital Summit, and innovation bubbled in Visakhapatnam! Young digital professionals had join us for the opening keynote to see how technology was changing the world. <strong>Innovation Summit @ Digital Summit 2016</strong> had offered many professionals and executives as speakers around <strong>Cloud, Cognitive, DevOps, IoT </strong>and more from <strong>Microsoft, Oracle, IBM, </strong>and<strong> Miracle.</strong> Everyone had gained knowledge with Microsoft’s BizSpark Program, Oracle’s Cloud Journey and how to push first MEAN Applications to IBM Bluemix. 
</p>
           
            </div>
            </div>
    <!--    <div class="row">
            <div class="col-sm-12">
            
               <center><a href="../registration.php" ><button type="button" class="btn btn-info col-sm-12">Register for the Summit today!</button></a></center>
            </div>
            
            </div>
            -->
               
            
            <div class="row">
                <br><div class="col-sm-4">
                    
                <center>    <img src="../images/schedule/date_DS.png" height="100px" width="100px"></img>
                <h4 class="blue-text"><strong>December 13th, 2016</strong></h4>
                
                
                </center>
                </div>
                <div class="col-sm-4">
                    <center>    <img src="../images/schedule/place_DS.png" height="100px" width="100px"></img>
               <h4 class="blue-text"><strong>AU Convocation Hall</strong></h4>
               
               </center>
                </div>
                <div class="col-sm-4">
                    <center>    <img src="../images/schedule/time_DS.png" height="100px" width="100px"></img>
               <h4 class="blue-text"><strong>10 AM to 7:30 PM IST</strong></h4>
            
               </center>
               </div>
            </div>
            
            
            
                      <div class="row session-heading">
            <div class="col-sm-12">
                </div>
</div>
                <div class="row">
                    <div class="col-sm-3">
                     <h5 class="time_strip"><strong> 10:30AM&ndash;11:30AM </strong></h5>   
                    </div>
                  
                  <div class="col-sm-9">
                      <div class="session-details col-sm-12" style="border:0">
                        <br>  <h4><strong>Welcome to Digital Summit 2016!</strong></h4>
                      
                 </div>
                 </div>
                 </div>
                 
            
                 <div class="row session-heading-g">
            <div class="col-sm-12">
                </div>
</div>
                <div class="row">
                    <div class="col-sm-3">
                     <h5 class="time_strip"><strong> 11:30AM&ndash;12:00PM </strong></h5>   
                    </div>
                  
                  <div class="col-sm-6">
                      <div class="session-details col-sm-12" style="border:0">
                        <br>  <h4><strong>Introduction to Microsoft Azure: An open, flexible & intelligent cloud</strong></h4>
                     <br> <p class="methodText">Any developer, any platform : Microsoft’s commitment to openness and collaboration is ingrained in our day-to-day approach to doing business alongside industry partners around the world, including open source communities. The Microsoft cloud supports a wide range of industry leading operating systems, languages, tools, and frameworks. It puts the best of Windows and Linux ecosystems at your fingertips, to help build great applications and services that work with many devices. For a developer, there are so many things that the MS Cloud offers. Most of the tools are free for student developers.</p>
                      <p class="methodText">She explained about various technology offerings for developers & students, which helped a lot to understand the value that Microsoft offers for a budding developer.
</p></div>
                 </div>
                 
                 
                     
                  <div class="col-sm-3">
                   <center>
                       
                       
                     <img data-toggle="modal" data-target="#myModal7" src="<?= url ?>/images/schedule/usha-Rathnavel.png" class="wpx-100   mgb-20" title="" alt="" data-edit="false" data-editor="field" data-field="src[Image Path]; title[Image Title]; alt[Image Alternate Text]">
                    </center>
                    <center>
                    <h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false"><strong>Usha Rathnavel</strong></h5>
                    <h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">Audience Evangelism Manager</h5>
                    <h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">   Microsoft</h5>
                   </center>
                   
                  </div></div>
                  <!-- Modal--->
                    <!-- Modal--->
                 <div class="modal fade in" id="myModal8" role="dialog" aria-hidden="false" >
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header greyback1">
          <h4 class="modal-title"><strong>Usha Rathnavel </strong></h4>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-sm-8">
                     <p class="methodText"> </p>
                </div>
                <div class="col-sm-4">
                   <center> <img src="../images/schedule/usha-Rathnavel.png" class="wpx-100   mgb-20" title="" alt="" data-edit="false" data-editor="field" data-field="src[Image Path]; title[Image Title]; alt[Image Alternate Text]">
                <h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">Audience Evangelism Manager</h5>
                    <h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">Microsoft </h5>
                       </center></div>
            </div>
         
        </div>
        <div class="modal-footer nomargintop">
          <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
                
                  
                  <!--Modal End-->
                
                     
                      <div class="row session-heading-g">
            <div class="col-sm-12">
                </div>
</div>
                <div class="row">
                    <div class="col-sm-3">
                     <h5 class="time_strip"><strong> 12:00AM&ndash;1:00PM </strong></h5>   
                    </div>
                  
                  <div class="col-sm-6">
                      <div class="session-details col-sm-12" style="border:0">
                        <br>  <h4><strong>Go Hybrid with Logic Apps on Microsoft Azure</strong></h4>
                       <p class="methodText">
                       <br> Hybrid Integrations with Azure Logic Apps. Logic apps can play a significant role in automating business processes that span across both cloud-based and on-premise systems. He shared immense amount of information about leveraging Logic Apps in a hybrid scenario, where the business process was needed to integrate systems in cloud and on-premise. 
                  </p>
                 </div>
                 </div>
                 
                     
                  <div class="col-sm-3">
                   <center>
                     <img data-toggle="modal" data-target="#myModal4" src="<?= url ?>/images/schedule/Prabhajhot-singh.png" class="wpx-100   mgb-20" title="" alt="" data-edit="false" data-editor="field" data-field="src[Image Path]; title[Image Title]; alt[Image Alternate Text]">
                    </center>
                    <center>
                    <h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false"><strong>Prabhjot Singh Bakshi</strong></h5>
                    <h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">Regional Director and Azure MVP</h5>
                    <h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">    Microsoft</h5>
                   </center>
                   
                  </div>
                  
                  <!-- Modal--->
                 <div class="modal fade in" id="myModal4" role="dialog" aria-hidden="false" >
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header greyback1">
          <h4 class="modal-title"><strong> Prabhjot Singh Bakshi </strong></h4>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-sm-8">
                     <p class="methodText">Prabhjot Singh Bakshi has been extensively working with the country's top Accelerators &amp; Incubators. He closely works with CEOs of start-ups in creating awareness &amp; educating them on their Azure Journey starting from enrolling for Bizspark program. He has been instrumental in driving the Azure adoption in the start-up ecosystem. As a Microsoft certified Trainer Alumni with strong community connect, he has built a strong working relationship with Microsoft. For his work and contribution towards Community he has been awarded and recognized as Microsoft Most Valuable Professional on Azure. </p>
                </div>
                <div class="col-sm-4">
                   <center> <img src="../images/schedule/Prabhajhot-singh.png" class="wpx-100   mgb-20" title="" alt="" data-edit="false" data-editor="field" data-field="src[Image Path]; title[Image Title]; alt[Image Alternate Text]">
                <h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">Regional Director and Azure MVP</h5>
                    <h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">Microsoft </h5>
                       </center></div>
            </div>
         
        </div>
        <div class="modal-footer nomargintop">
          <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
                  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header greyback1">
          <h4 class="modal-title"><strong>Pawan Kumar Yaddanapudi</strong></h4>
        </div>
        <div class="modal-body ">
            <div class="row">
                <div class="col-sm-8">
                     <p class="methodText">Over 8 years of IT experience, Pawan Kumar Yaddanapudi is a core expertise in Infrastructure management with Oracle DBA and Data Analytics at Sowra Info Solutions Pvt Ltd . He is a technical head for Database and Application Practices and handles leading application and Infrastructure teams aiming to apply optimal solutions across multiple business domains. He is also an active and passionate blogger at OrSkl and Wide Analytix, aiming to share unwritten facts of Oracle Database and contributing to Data Science and Big Data community.  </p>
                </div>
                <div class="col-sm-4">
                    <center>
                    <img src="<?= url ?>/images/schedule/Pawan_Yaddanapudi.jpg" class="wpx-100   mgb-20" title="" alt="" data-edit="false" data-editor="field" data-field="src[Image Path]; title[Image Title]; alt[Image Alternate Text]">
                <h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">Technical Head – Database and Application Practices</h5>
                    <h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">    Sowra Info Solutions Pvt Ltd</h5>
                </center>
                </div>
            </div>
         
        </div>
        <div class="modal-footer nomargintop">
          <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
                  
                  <!--Modal End-->
                  
                     </div>
                     
                      <div class="row session-heading-g">
            <div class="col-sm-12">
                </div>
</div>
                <div class="row">
                    <div class="col-sm-3">
                     <h5 class="time_strip"><strong> 1:00PM&ndash;2:00PM </strong></h5>   
                    </div>
                  
                  <div class="col-sm-9">
                      <div class="session-details col-sm-12" style="border:0">
                        <br>  <h4><strong>Lunch Break  </strong></h4>
                      
                 </div>
                 </div>
                 </div>
                 
                 
                 <!-- Row Start - Microsoft Session -->
                      <div class="row session-heading-g">
            <div class="col-sm-12">
                </div>
</div>
                <div class="row">
                    <div class="col-sm-3">
                     <h5 class="time_strip"><strong> 2:00PM&ndash;3:00PM </strong></h5>   
                    </div>
                  
                  <div class="col-sm-6">
                      <div class="session-details col-sm-12" style="border:0">
                        <br>  <h4><strong>Microsoft VSTS – Support for Continuous Integration Continuous Deployment(CICD)</strong></h4>
                      <br><div class="methodText">
                      Agile teams are expected to provide a potentially releasable software increment to the working product at the end of each iteration. This can only be achieved if the different parts of code developed by each team member are integrated with each other and deployed on the environment where they can be tested. This cycle of coding – integration – deployment – testing should happen frequently, even multiple times in a day. Microsoft VSTS provides automation of these activities so that code is continuously integrated and then automatically deployed for testing. In this session Subodh discussed and demonstrated various features of Microsoft VSTS that support the Continuous Integration – Continuous Deployment of software on Azure resources.
                  </div>
                 </div>
                 </div>
                
                <div class="col-sm-3 ">
                   <center>
                     <img data-toggle="modal" data-target="#myModal11" src="../images/schedule/sohoni.jpg" class="wpx-100   mgb-20" title="" alt="" data-edit="false" data-editor="field" data-field="src[Image Path]; title[Image Title]; alt[Image Alternate Text]">
                   
                    <h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false"><strong> Subodh Sohoni</strong></h5>
                    <h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false"> Microsoft Most Valuable Professional(MVP)</h5>
                    <h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">  VS ALM and Microsoft Certified Trainer</h5>
                   
                    </center>
                  </div>
                   </div>
                  
                  <!-- Modal--->
                  
                  <div class="modal fade" id="myModal11" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header greyback1">
          <h4 class="modal-title"><strong> Subodh Sohoni </strong></h4>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-sm-8">
                     <p class="methodText">Subodh is Microsoft Most Valuable Professional (MVP) – VS ALM since 2009, is Microsoft Certified Trainer (MCT) for the last 12 years and has conducted more than 300 corporate trainings and consulting assignments on Microsoft technologies, ALM and MSF across globe.</p>
                      <p class="methodText">Subodh is consultant and trainer on Visual Studio (Application Lifecycle Management) and Team Foundation Server. He is also Professional Scrum Master and Professional Scrum Developer. He guides the teams for implementation of Scrum and Agile Development Practices.</p>
                </div>
                <div class="col-sm-4">
                   <center> <img src="../images/schedule/sohoni.jpg" class="wpx-100   mgb-20" title="" alt="" data-edit="false" data-editor="field" data-field="src[Image Path]; title[Image Title]; alt[Image Alternate Text]">
                <h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false"><strong> Subodh Sohoni</strong></h5>
                    <h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false"> Microsoft Most Valuable Professional(MVP)</h5>
                    <h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">  VS ALM and Microsoft Certified Trainer</h5>
                       </center></div>
            </div>
         
        </div>
        <div class="modal-footer nomargintop">
          <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
                  
                 <!-- Row End - Microsoft Session --> 
                 
                 
                 
                     
                     
                      
                   
                      <div class="row session-heading-g">
            <div class="col-sm-12">
                </div>
</div>
                <div class="row">
                    <div class="col-sm-3">
                     <h5 class="time_strip"><strong> 3:00PM&ndash;4:00PM </strong></h5>   
                    </div>
                  
                  <div class="col-sm-6">
                    <div class="session-details col-sm-12" style="border:0">
                        <br>  <h4><strong>Dive through Oracle’s cloud S.P.I.D services</strong></h4>
                       <br> <p class="methodText">We are in a generational shift towards CLOUD, this change is significant and got large impact on the way you procure, utilize computation and storage resources. Cloud changes the mindset and focus of infrastructure maintenance, software deployments and application developments. Cloud technologies are fundamentally aiding the world towards effective time investment on products and solutions than on deployments and maintenance. Entire industries are being transformed, new kinds of experiences and realities that were previously unimaginable are now practically possible, the complexities between consumers and producers are dissolving. Hours and days of efforts are drastically cut down to minutes. He shared his valuable inputs on how Oracle Cloud Services is delivering solutions to the business to simplify the IT infrastructure maintenance to help customers optimize the organizational costs. And explained about the offerings of Oracle in the cloud space to the enterprises with appropriate use cases.  He gave an evident picture on how easy it is to use Oracle’s cloud to manage the infrastructure resources. </p>
                      
                 </div>  
                 </div>
                  <div class="col-sm-3">
                   <center>
                     <img data-toggle="modal" data-target="#myModal" src="<?= url ?>/images/schedule/Pawan_Yaddanapudi.jpg" class="wpx-100   mgb-20" title="" alt="" data-edit="false" data-editor="field" data-field="src[Image Path]; title[Image Title]; alt[Image Alternate Text]">
                    </center>
                    <center>
                    <h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false"><strong>Pawan Kumar Yaddanapudi</strong></h5>
                    <h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">Technical Head – Database and Application Practices</h5>
                    <h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">Sowra Info Solutions Pvt Ltd</h5>
                   </center>
                   
                  </div>
                 </div>
                
                  
                  <!-- Modal--->
                  
                  <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header greyback1">
          <h4 class="modal-title"><strong>  Aditya Chinni </strong></h4>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-sm-8">
                     <p class="methodText">Aditya Chinni is a Lead for Miracle Innovation Labs, and has expertise in different Technologies like Bluemix Cloud Platform, IoT, Cognitive Computing and DevOps. His expertise on Bluemix has achieved an IBM Bluemix Explorer Badge. With all the leading Technologies he and his team are working on all the Enterprise Level Use-cases with different Industry Verticals. We at Miracle Innovation Labs do research, focus, build and deliver different types of Proof Of Concepts for different types of Customers across different Verticals. </p>
                </div>
                <div class="col-sm-4">
                   <center> <img src="<?= url ?>/images/schedule/Aditya.png" class="wpx-100   mgb-20" title="" alt="" data-edit="false" data-editor="field" data-field="src[Image Path]; title[Image Title]; alt[Image Alternate Text]">
                <h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">Lead – Miracle Innovation Labs</h5>
                    <h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false"> Miracle Software Systems, Inc.
</h5>
                       </center></div>
            </div>
         
        </div>
        <div class="modal-footer nomargintop">
          <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
                  
                  <!--Modal End-->
               <div class="row session-heading-g">
            <div class="col-sm-12">
                </div>
</div>
                <div class="row">
                    <div class="col-sm-3">
                     <h5 class="time_strip"><strong> 4:00PM&ndash;4:15PM </strong></h5>   
                    </div>
                  
                  <div class="col-sm-9">
                      <div class="session-details col-sm-12" style="border:0">
                        <br> <h4><strong>Stretch your legs Break</strong></h4>
                      
                 </div>
                 </div>
                 </div>
               
                  
                  <div class="row session-heading-g">
            <div class="col-sm-12">
                </div>
</div>
                <div class="row">
                    <div class="col-sm-3">
                     <h5 class="time_strip"><strong> 4:15PM&ndash;5:15PM </strong></h5>   
                    </div>
                  
                  <div class="col-sm-6">
      
                      <div class="session-details col-sm-12" style="border:0">
                        <br>  <h4><strong>Pushing your first MEAN Stack Application to IBM Bluemix</strong></h4>
                     <br>  
   <div class="methodText">
                        While Java and .NET continue to dominate Enterprise Applications, there is a new hero in town – MEAN! Today’s developers want simplicity – but expect scale, security and speed as well. MEAN provides these and gives developers the chance to finally program with one language from end-to-end, yes I mean from the browser to the DB. This session covered more about MEAN Stack and IBM Bluemix which included a live demo of how you can push your first MEAN App to IBM Bluemix.
                  </div>              </div>
                 </div>
                
                    
                    
                    <div class="col-sm-3">
                        <center>
                    <img data-toggle="modal" data-target="#myModal3" src="<?= url ?>/images/schedule/Aditya.png" class="wpx-100   mgb-20" title="" alt="" data-edit="false" data-editor="field" data-field="src[Image Path]; title[Image Title]; alt[Image Alternate Text]">
                    <h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false"><strong>       Aditya Chinni</strong></h5>
                    <h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">Lead – Miracle Innovation Labs</h5>
                    <h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">    Miracle Software Systems, Inc. </h5>
                   
                    </center>
                     
                 </div>
                 </div>
                
                  
                     
                     
                 <!-- Row Start - Microsoft Session -->
                <div class="row session-heading-g">
            <div class="col-sm-12">
                </div>
</div>
                <div class="row">
                    <div class="col-sm-3">
                     <h5 class="time_strip"><strong> 5:15PM&ndash;5:30PM </strong></h5>   
                    </div>
                  
                  <div class="col-sm-9">
                      <div class="session-details col-sm-12" style="border:0">
                        <br> <h4><strong>Keynote – A Digital Day Indeed!</strong></h4>
                      
                 </div>
                 </div>
                 </div>
             <div class="row session-heading-g">
            <div class="col-sm-12">
                </div>
</div>    
         <div class="row">
                    <div class="col-sm-3">
                     <h5 class="time_strip"><strong> 5:30PM&ndash;7:30PM </strong></h5>   
                    </div>
                  
                  <div class="col-sm-9">
                      <div class="session-details col-sm-12" style="border:0">
                        <br> <a href="http://www.miraclesoft.com/digitalsummit/schedule/culturals.php"><h4><strong>Hungama@Digital Summit ’16 Day #1</strong></h4></a> 
                      
                 </div>
                 </div>
                 </div>                                  <br>
                                
                            </div>
                </div>
     
              
                
       

        <div class="uparrow" id="uparrow"><i class="fa fa-3x fa-angle-up" aria-hidden="true"></i></div>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



        <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.4/waypoints.min.js"></script>






        <script>
            $(document).ready(function () {
                $(function () {
                    $('.item').matchHeight();
                });

                // fade in and fade out
                $(function () {
                    $(window).scroll(function () {
                        if ($(this).scrollTop() > 50) {
                            $('#uparrow').fadeIn();
                        } else {
                            $('#uparrow').fadeOut();
                        }
                    });

                    // scroll body to 0px on click
                    $('#uparrow').click(function () {
                        $('body,html').animate({
                            scrollTop: 0
                        }, 800);
                        return false;
                    });
                });

            });
        </script>
        <?php include '../footer.php'; ?>
    </body>
</html>
