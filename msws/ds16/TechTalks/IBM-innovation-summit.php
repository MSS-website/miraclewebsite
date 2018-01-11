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
        <title>Digital Summit</title>



        <?php include '../context.php'; ?>

        <style>
       
            .current_tab_techtalks >  a{
                color:#53bce8 !important;
            }
            
            .current_tab_ibm {
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
    background-image:url('../images/schedule/tech-talk-header.png');
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
             
            <h1 style="color:#fff"><strong>IBM Innovation Summit</strong></h1>
          </div>
          <div class="col-sm-6 text-right">
            <ul class="breadcrumb pull-right">
                <li><a href="../"><font color="#fff">Home</font></a></li>
               
                <li class="active"><font color="#fff">IBM Innovation Summit</font></li>
            </ul>
          </div>
         
        </div>
         
            </div></div>
        </section>


        <div style="clear:both;" class="clearfix"></div>

        <!-- /Header -->

        <!-- Intro -->

        <div clas="row">
            <!-- TIMER -->

            <!-- end timer-area --> 

        </div>

        <!-- /Intro-->




        <!--            <div style="width:100%;overflow:hidden">    
                        <div class="header-bar">
                            <div class="container">
                                <h2 class="text-center"><span class="visuallyhidden"></span></h2>
                            </div>
                        </div></div>-->
        
        <div class="container">
            <div class="row" >
                
           
                <div class="col-sm-12">
                   <p class="methodText">
             <br>   Miracle and IBM brought you a full day of innovation, learning and live demos with multiple reputed speakers. The summit covered various IBM technologies including <strong>IBM Bluemix, Watson and Node JS</strong>. The core part of the summit was focused on how to use a cloud platform like IBM Bluemix to build next-gen applications around Cognitive and the Internet of Things. 
            </p>
           
            </div>
            </div>
      <!--  <div class="row">
            <div class="col-sm-12">
            
               <center><a href="../registration.php" ><button type="button" class="btn btn-info col-sm-12">Register for the Summit today!</button></a></center>
            </div>
            
            </div> -->
            
               
            
            <div class="row">
                <br><div class="col-sm-4">
                    
                <center>    <img src="../images/schedule/date_DS.png" height="100px" width="100px"></img>
                <h4 class="blue-text"><strong>December 15th, 2016</strong></h4>
                
                
                </center>
                </div>
                <div class="col-sm-4">
                    <center>    <img src="../images/schedule/place_DS.png" height="100px" width="100px"></img>
               <h4 class="blue-text"><strong>AU Convocation Hall</strong></h4>
               
               </center>
                </div>
                <div class="col-sm-4">
                    <center>    <img src="../images/schedule/time_DS.png" height="100px" width="100px"></img>
               <h4 class="blue-text"><strong>9 AM to 8 PM IST</strong></h4>
            
               </center>
               </div>
            </div>
            
            
            
                      <div class="row session-heading">
            <div class="col-sm-12">
                </div>
</div>
                <div class="row">
                    <div class="col-sm-3">
                     <h5 class="time_strip"><strong> 9:30AM&ndash;10:30AM </strong></h5>   
                    </div>
                  
                  <div class="col-sm-9">
                      <div class="session-details col-sm-12" style="border:0">
                        <br>  <h4><strong>Keynote – A Changing Digital World!</strong></h4>
                      
                 </div>
                 </div>
                 </div>
                 
            
                 <div class="row session-heading-g">
            <div class="col-sm-12">
                </div>
</div>
                <div class="row">
                    <div class="col-sm-3">
                     <h5 class="time_strip"><strong> 10:30AM&ndash;12:30PM </strong></h5>   
                    </div>
                  
                  <div class="col-sm-9">
                      <div class="session-details col-sm-12" style="border:0">
                        <br>  <h4><strong> From Internet of Things to Internet that Thinks</strong></h4>
                      
                 </div>
                 </div>
                 </div>
                 <div class="row">
                     <div class="col-sm-3"></div>
                     <div class="col-sm-6">
                        <p class="methodText"><strong>Internet of Things (IoT)</strong> refers to an emerging paradigm that seamlessly integrates a large number of smart objects over Internet. These smart objects have the ability to sense the environment, communicate with each other and interpret the data, to make sound judgements, respond to events and irregularities promptly, without any human intervention. It’s not “the future,” it’s now - this year, next year and year after. These set of connected devices are predicted to cross over 30 Billion mark by the year 2020, as per the reports published by top Research & Advisory experts. IoT’s true value lies in the data, the interconnected items share.</p>
                         <p class="methodText">Here is where the industry’s most trusted IoT Platform, that provides industry leading analytics (predictive & cognitive) with unmatched scope & scalability (<a href="https://console.ng.bluemix.net/">Bluemix</a> and <a href="https://www.ibm.com/marketplace/cloud/cloud-object-storage/in/en-in?cm_mmc=Search_Google-_-Cloud_Digital_Inbound-_-IN_IN-_-+softlayer&cm_mmca1=000003EI&cm_mmca2=10001949">Softlayer</a>), the <a href="http://www.ibm.com/internet-of-things/iot-solutions/watson-iot-platform/"><strong>IBM Watson IoT Platform</strong></a>, becomes the need of the hour, as we work towards handling billions of readings from millions of devices and make sense out of them by performing real time analytics, in a highly secured environment. The experts at Digital Summit 2016 discussed on the role played by IBM Watson IoT Platform in creating an end to end IoT Solution and experience couple of hands-on demos,
                         <div class="col-sm-12">
                              <ul>
                              <li>Connect SensorTag to Watson IoT Platform</li>
                              <li>Chatbot that works as your Office Concierge</li>
                              <li>Cognitive Elevator Assistant</li>
                              <li>Real Time Analytics on Elevator Events</li>
                              
                          </ul>
                         </div>
                          
                  </div>
                  <div class="col-sm-3">
                   <center>
                       
                       
                     <img data-toggle="modal" data-target="#myModal" src="<?= url ?>/images/schedule/Prasanna_Alur_Mathada.jpg" class="wpx-100   mgb-20" title="" alt="" data-edit="false" data-editor="field" data-field="src[Image Path]; title[Image Title]; alt[Image Alternate Text]">
                   
                    <h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false"><strong>Prasanna Alur Mathada</strong></h5>
                    <h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">Software Developer</h5>
                    <h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">IBM Watson IoT Platform</h5>
                   
                    </center>
                  </div>
                  <!-- Modal--->
                  
                  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header greyback1">
          <h4 class="modal-title"><strong>Prasanna Alur Mathada</strong></h4>
        </div>
        <div class="modal-body ">
            <div class="row">
                <div class="col-sm-8">
                     <p class="methodText">Prasanna A Mathada is a Software Developer, working with Watson IoT Platform team. Creating Recipes & Client Libraries for easy consumption and adoption of Watson IoT Platform are the main objective, in his current role. 
                    </p>
                    <p class="methodText">With over 10 years in IBM, he has extensively worked in the area of Object Relational Databases, Competitive Technology and Internet of Things Platform. </p>
                    <p class="methodText">Prasanna has presented technical sessions and papers at International level, in USA and Sri Lanka. He has authored numerous technical papers & articles on public forums, is an avid reader and an active blogger, and has his own channel on Youtube, where he evangelizes the technology through videos.</p>
                </div>
                <div class="col-sm-4">
                    <center>
                    <img src="<?= url ?>/images/schedule/Prasanna_Alur_Mathada.jpg" class="wpx-100   mgb-20" title="" alt="" data-edit="false" data-editor="field" data-field="src[Image Path]; title[Image Title]; alt[Image Alternate Text]">
                <h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">Software Developer</h5>
                    <h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">IBM Watson IoT Platform</h5>
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
                     <h5 class="time_strip"><strong> 12:30PM&ndash;1:30PM </strong></h5>   
                    </div>
                  
                  <div class="col-sm-9">
                      <div class="session-details col-sm-12" style="border:0">
                        <br>  <h4><strong>Lunch Break  </strong></h4>
                      
                 </div>
                 </div>
                 </div>
                 
                     
                     
                      <div class="row session-heading-g">
            <div class="col-sm-12">
                </div>
</div>
                <div class="row">
                    <div class="col-sm-3">
                     <h5 class="time_strip"><strong> 1:30AM&ndash;3:30PM </strong></h5>   
                    </div>
                  
                  <div class="col-sm-9">
                      <div class="session-details col-sm-12" style="border:0">
                        <br>  <h4><strong>Building Cognitive Apps with IBM Bluemix and Watson</strong></h4>
                      
                 </div>
                 </div>
                 </div>
                 <div class="row">
                     <div class="col-sm-3"></div>
                     <div class="col-sm-6">
                         <div class="methodText">
                            The days of terminator are not far away, and as we move into a world where cars drive themselves technology is becoming key to changing our lives for the better. In this session we learnt more about <strong>IBM’s Platform</strong> as a Service, <strong>IBM Bluemix</strong> along with a deep-dive into the Watson Cognitive services provided on Bluemix through the <strong>Watson Developer Cloud</strong>. The session gave us some great ideas for app building and also showcased a live demo of how to use cognitive services to build applications for next generation use cases.
               </div>
                  </div>
                  <div class="col-sm-3">
                   <center>
                     <img data-toggle="modal" data-target="#myModal2" src="<?= url ?>/images/schedule/Sriharsha.jpg" class="wpx-100   mgb-20" title="" alt="" data-edit="false" data-editor="field" data-field="src[Image Path]; title[Image Title]; alt[Image Alternate Text]">
                   
                    <h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false"><strong>Sri Harsha Varada</strong></h5>
                    <h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">Sr. Software Engineer</h5>
                    <h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">IBM India</h5>
                   
                    </center>
                  </div>
                  
                  <!-- Modal--->
                  
                  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header greyback1">
          <h4 class="modal-title"><strong>Sri Harsha Varada </strong></h4>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-sm-8">
                     <p class="methodText">Sri Harsha is a senior software engineer from IBM with over 6.5 years of experience around .NET technologies. Tech savvy, and full of out-of-the-box ideas, he always leans towards learning new technologies. He is an innovator by choice and has grabbed a double patent and a plateeau in a very short time. He has also won multiple competitions on innovation and Bluemix app making help at IBM India level. </p>
                </div>
                <div class="col-sm-4">
                   <center> <img src="<?= url ?>/images/schedule/Sriharsha.jpg" class="wpx-100   mgb-20" title="" alt="" data-edit="false" data-editor="field" data-field="src[Image Path]; title[Image Title]; alt[Image Alternate Text]">
                <h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">Sr. Software Engineer</h5>
                    <h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">IBM India</h5>
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
                  
                     </div>
                     
                   
                      <div class="row session-heading-g">
            <div class="col-sm-12">
                </div>
</div>
                <div class="row">
                    <div class="col-sm-3">
                     <h5 class="time_strip"><strong> 3:30PM&ndash;5:30PM </strong></h5>   
                    </div>
                  
                  <div class="col-sm-9">
                      <div class="session-details col-sm-12" style="border:0">
                        <br>  <h4><strong>Understanding IBM’s Bluemix Garage Method – Innovation : Fast</strong></h4>
                      
                 </div>
                 </div>
                 </div>
                 <div class="row">
                     <div class="col-sm-3"></div>
                     <div class="col-sm-6">
                         <div class="methodText">
                        <ul style="margin-left:12px";>
                            <li><strong>THINK –</strong>Scale to user expectations with Design Thinking</li>
                            <li><strong>CODE –</strong>Compose Apps and Innovate fast with pair programming</li>
                            <li><strong>DELIVER –</strong>Accelerate time to market with CD and Automations</li>
                            <li><strong>RUN –</strong>Run on IBM Cloud/Auto Scale and Migrate seamlessly</li>
                            <li><strong>MANAGE –</strong>Improve Operational Excellence and ensure 24/7 availability</li>
                            <li><strong>LEARN –</strong>Seek continuous feedback/Use A/B Testing and HDD</li>
                        </ul>    
                  </div>
                  </div>
                  <div class="col-sm-3">
                   <center>
                     <img data-toggle="modal" data-target="#myModal3" src="<?= url ?>/images/schedule/sivakumar.jpg" class="wpx-100   mgb-20" title="" alt="" data-edit="false" data-editor="field" data-field="src[Image Path]; title[Image Title]; alt[Image Alternate Text]">
                   
                    <h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false"><strong>    Sivakumar AVKD</strong></h5>
                    <h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">Design and Product Mgmt. Leader</h5>
                    <h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">IBM India</h5>
                   
                    </center>
                  </div>
                  
                  
                  <!-- Modal--->
                  
                  <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header greyback1">
          <h4 class="modal-title"><strong>Sivakumar AVKD </strong></h4>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-sm-8">
                     <p class="methodText">
    Siva is an experienced leader in Offering Management, Design Thinking, User Experience Design, Development, Quality Assurance and Devops using Agile methodologies. In his current role as Design and Engagement Leader, Siva conducts Garage workshops for IBM partners and their customers to identify and define Minimum Viable Product and to create user experience wireframes. </p>
                </div>
                <div class="col-sm-4">
                   <center> <img src="<?= url ?>/images/schedule/sivakumar.jpg" class="wpx-100   mgb-20" title="" alt="" data-edit="false" data-editor="field" data-field="src[Image Path]; title[Image Title]; alt[Image Alternate Text]">
                <h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">Design and Product Mgmt. Leader</h5>
                    <h5 class="font-cond mgb-5 fg-text-d fs-130" contenteditable="false">IBM India</h5>
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
                  
                     </div> 
                     
                     
                     
                      <div class="row session-heading-g">
            <div class="col-sm-12">
                </div>
</div>
                <div class="row">
                    <div class="col-sm-3">
                     <h5 class="time_strip"><strong> 5:30PM&ndash;5:50PM </strong></h5>   
                    </div>
                  
                  <div class="col-sm-9">
                      <div class="session-details col-sm-12" style="border:0">
                        <br>  <h4><strong>Keynote – Our Pleasure, AP Cloud!</strong></h4>
                      
                 </div>
                 </div>
                 </div>
                 


                <div class="row session-heading-g">
            <div class="col-sm-12">
                </div>
</div>
                <div class="row">
                    <div class="col-sm-3">
                     <h5 class="time_strip"><strong> 6:00PM&ndash;8:00PM </strong></h5>   
                    </div>
                  
                  <div class="col-sm-9">
                      <div class="session-details col-sm-12" style="border:0">
                        <br> <a href="http://www.miraclesoft.com/digitalsummit/schedule/culturals.php"><h4><strong>Hungama@Digital Summit ’16 Day #3</strong></h4></a> 
                      
                 </div>
                 </div>
                 </div>
                 
             
                     
                     


</div>
</div>

                    
                                <br>
                                
                            </div></div></div>
                </div>

                
                    </div>
                </div>
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
