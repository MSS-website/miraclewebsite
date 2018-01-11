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
        <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />
        <meta name="viewport"    content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author"      content="Shankar">
        <meta content="miraclesoft, education,  industry,  IT,industries, " name="keywords"/>
        <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="" type="image/x-icon">
        <title>Digital Valley Summit</title>



        <?php include '../context.php'; ?>

        <style>

            .current_tab10{
                color:#53bce8 ;
            }
            .session-break  b{

                margin-left:16px;
            }

            .description{
                padding: 2% 0;
            }

            .session-details i{
                font-size:12px;color:#00A79B;margin:1%
            }


            .session-details font{
                font-size: 15px;
                color:#00A79B;

            }
            .jumbotron {

                color: #FFF;
                border-radius: 0px;
            }

            .current_tab8{
                color:#53bce8  !important;
            }

            .current_tab8:hover{
                color:#53bce8  !important;
            }

            .current_tab10{
                color:#53bce8  !important;
            }
            
             .parallax{
                background-image:url('../images/banner/jobfair-header.png');
                background-attachment:fixed;
                background-size:cover;
                background-position:center;
            }
        </style>

        <script>
            $(document).ready(function () {
                $(".current_tab1 >  a").css("color", "#333");

                $(".current_tab8").css("color", "#53bce8");
                $("#schedule_tab").addClass(".current_tab8");

            });
        </script>
    </head>
    <?php include '../header.php'; ?>
    <body class="home">




        <div style="clear:both;" class="clearfix"></div>

        <!-- /Header -->

        <!-- Intro -->

        <div clas="row">
            <!-- TIMER -->

            <!-- end timer-area --> 

        </div>

        <!-- /Intro-->

        <section class="parallax">
            <div class="overlay">
                <div class="container">

                    <div class="row" style="margin-top:40px; margin-bottom:45px;">

                        <div class="col-sm-6 text-left">

                            <h1 style="color:#fff"><strong>Job Fair</strong></h1>
                        </div>
                        <div class="col-sm-6 text-right">
                            <ul class="breadcrumb pull-right">
                                <li><a href="../"><font color="#fff">Home</font></a></li>

                                <li class="active"><font color="#fff"><strong>Job Fair</strong></font></li>
                            </ul>
                        </div>

                    </div>

                </div></div>
        </section>

        <div class="">


            <div class="container">
                <div class="row" style="max-width:1000px;margin:0 9%">
                    <div class="row session-heading">
                        <div class="col-sm-12 text-center" style=""><p>Available Positions</p></div>
                    </div>

                    <!--                    <div class="col-sm-12 session-details ">
                                            <div class="col-sm-6">
                                                <i class="fa fa-1x fa-user" aria-hidden="true"></i> HR Managers<br> 
                                                <i class="fa fa-1x fa-user" aria-hidden="true"></i> Facilities Managers <br>
                                                <i class="fa fa-1x fa-user" aria-hidden="true"></i> Freshers (Software) <br>
                                                <i class="fa fa-1x fa-user" aria-hidden="true"></i>Freshers(Marketing)<br>
                                                <i class="fa fa-1x fa-user" aria-hidden="true"></i>Freshers(HR)<br>
                                                <i class="fa fa-1x fa-user" aria-hidden="true"></i>Freshers(Accounting)<br>
                                                <i class="fa fa-1x fa-user" aria-hidden="true"></i> Software Engineers<br> 
                                                <i class="fa fa-1x fa-user" aria-hidden="true"></i>.NET Developers<br>
                                            </div>
                                            <div class="col-sm-6">
                    
                                                <i class="fa fa-1x fa-user" aria-hidden="true"></i>PHP Developers<br>
                    
                                                <i class="fa fa-1x fa-user" aria-hidden="true"></i>Creative Designer (PhotoShop ) <br>
                                                <i class="fa fa-1x fa-user" aria-hidden="true"></i> Network Engineers<br>
                                                <i class="fa fa-1x fa-user" aria-hidden="true"></i>System Administrators<br>
                                                <i class="fa fa-1x fa-user" aria-hidden="true"></i>Database Administrators.
                                            </div>
                                        </div>-->
                    <!--                    <div class="col-sm-12">
                                            <div class="row session-date"><div class="col-xs-12"><h3>Monday, Dec 12</h3></div></div>
                    
                                        </div>-->


                    <div class="row">

                        <div class="col-sm-12">
                            <div class="subSectionTitle"><strong></strong></div>
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Eligibility</th>
                                        <th>Requirements</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td><span id="id">1</span></td>
                                        <td><strong><span id="jobTitle">Software Fresher </span></strong></td>
                                        <td><span id="qualification"><ul>
                                                    <li>2015/2016/2017 Pass outs.</li>
                                                    <li> B.Tech (CSE/IT/ECE), MCA - 65% marks. No backlogs</li>
                                                    

                                                </ul></span></td>
                                        <td><span id="requirements"><ul>
                                                    <li>
                                                        Work on various Technologies.
                                                    </li>
                                                    <li>
                                                        Prepares solutions by determining and designing system specifications, standards, and programming.
                                                    </li>
                                                    <li>
                                                        Explore on different domains (i.e. Banking, Retail, Healthcare etc.)
                                                    </li>

                                                    <li>
                                                        Provides reliable solutions to a variety of problems using problem solving approaches.
                                                    </li>
                                                    <li>Knowledge in Core Java is must.</li>
                                                    <li>Certification in Java is added advantage.</li>
                                                </ul> </span></td>
                                    </tr>

                                 <!--   <tr>
                                        <td><span id="id">2</span></td>
                                        <td><strong><span id="jobTitle">PMO Executives</span></strong></td>
                                        <td><span id="qualification">Any Degree/MBA 2014/2015/2016 passouts.</span></td>
                                        <td><span id="requirements"> <ul><li>Work in US time zone. </li>
                                                    <li>Excellent English Communication Skills.</li>
                                                    <li>Versatile with using the MS Office Tools.</li>
                                                    <li>Fresher/experienced are eligible to apply.</li>
                                                </ul></span></td>
                                    </tr> -->

                                 <!--   <tr>
                                        <td><span id="id">3</span></td>
                                        <td><strong><span id="jobTitle">US-IT Sales</span></strong></td>
                                        <td><span id="qualification">Any Degree/MBA - 2014/15/16 passouts are eligible</span></td>
                                        <td><span id="requirements">
                                                <ul>
                                                    <li>Work with the various Fortune 1000 Companies in USA</li>
                                                    <li>Coordinate with the US Team on Various Software Sales / Services Opportunities</li>
                                                    <li>Resell IBM / Oracle / Microsoft Software & Services</li>
                                                    <li>Software focused on IBM B2B / IBM BPM / IBM SOA / SAP / Oracle Products.</li>
                                                    <li>Should be interested in learning about USA Business Processes/ terminology</li>
                                                    <li>Location: MCity/MHeights</li>
                                                </ul>

                                            </span></td>
                                    </tr> -->

                                    <tr>
                                        <td><span id="id">2</span></td>
                                        <td><strong><span id="jobTitle">US-IT Recruitment</span></strong></td>
                                        <td><span id="qualification">
                                                <ul>
                                                    <li>Any Degree/MBA (2014/2015/2016) pass outs.</li>
                                                    <li>Excellent English Communication Skills.</li>
                                                    <li>Basic knowledge in Recruitment process is added advantage.</li>
                                                   
                                                </ul>

                                            </span></td>
                                        <td><span id="requirements"><ul>
                                                    <li> Understand the Client’s Requirements.</li>
                                                    <li>Performing recruitment life cycles including people sourcing, screening, and coordinating technical interviews, negotiation and follow up etc.</li>
                                                    <li>Ready to work in US/UK time zones(night shifts).</li>
                                                    <li> Responsible for recruiting IT and professionals throughout US market.</li>
                                                    <li>Should be interested in learning about USA Business Processes / terminology.</li>
                                                    
                                                    
                                                </ul> 


                                            </span></td>
                                    </tr>

                                <!--    <tr>
                                        <td><span id="id">5</span></td>
                                        <td><strong><span id="jobTitle">PMO Executive </span></strong></td>
                                        <td><span id="qualification">Any Degree/MBA - 2014/15/16 passouts are eligible</span></td>
                                        <td><span id="requirements"><ul><li>Excellent communication skills </li>
                                                    <li>knowledge of MS Office Tools </li>
                                                    <li>flexibility with US shifts.</li>
                                                </ul> </span></td>
                                    </tr> -->

                                    <tr>
                                        <td><span id="id">3</span></td>
                                        <td><strong><span id="jobTitle">Soft Skills Trainer </span></strong></td>
                                        <td><span id="qualification">Any Degree/PG with 0 - 2 yrs of experience in teaching/training</span></td>
                                        <td><span id="requirements"><ul>
                                                    <li>       Communicative english, excellent comm. skills, and ability to carry out soft skills training for new hires are a must.</li>

                                                </ul> </span></td>
                                    </tr>



                                    <tr>
                                        <td><span id="id">4</span></td>
                                        <td><strong><span id="jobTitle">Business Development Executive </span></strong></td>
                                        <td><span id="qualification"><ul>
                                                    <li>Any Degree/MBA (2014/2015/2016) pass outs.</li>
                                                    <li>Excellent English Communication Skills.</li>
                                                    <li>Versatile with using the MS Office Tools.</li>
                                                    <li>Ready to work in US/UK time zones.</li>
                                                    <li>Should be interested in learning about USA Business Processes / terminology.</li>
                                                   
                                                </ul></span></td>
                                        <td><span id="requirements"><ul><li>Work with the various Fortune 1000 Companies in USA</li>
                                                    <li>Coordinate with the US Team on Various Software Sales / Services Opportunities
                                                    </li>
                                                    <li>Resell IBM / Oracle / Microsoft Software & Services</li>
                                                    <li>Software focused on IBM B2B / IBM BPM / IBM SOA / SAP / Oracle Products</li>
                                                    
                                                   
                                                </ul></span></td>
                                    </tr>



<!--                                    <tr>
                                        <td><span id="id">13</span></td>
                                        <td><strong><span id="jobTitle">EDI Business Analyst </span></strong></td>
                                        <td><span id="qualification">6+ Years of experience, being good at communicating across functional areas at different levels</span></td>
                                        <td><span id="requirements">Sound knowledge on OpenText BizTalk mapper and process orchestration are a must. </span></td>
                                    </tr>-->

<!--  <tr>
<td><span id="id">1</span></td>
<td><strong><span id="jobTitle">Software Trainee</span></strong></td>
<td><span id="qualification">B.Tech with above 70%<br>MCA with above 75%</span></td>
<td><span id="requirements">Good knowledge in Java<br>Good Communication Skills<br>Analytical and Resoning Skills required</span></td>
</tr>
<tr>
<td><span id="id">2</span></td>
<td><strong><span id="jobTitle">Software Trainee</span></strong></td>
<td><span id="qualification">B.Tech with above 70%<br>MCA with above 75%</span></td>
<td><span id="requirements">Good knowledge in Java<br>Good Communication Skills<br>Analytical and Resoning Skills required</span></td>
</tr>
<tr>
<td><span id="id">3</span></td>
<td><strong><span id="jobTitle">Software Trainee</span></strong></td>
<td><span id="qualification">B.Tech with above 70%<br>MCA with above 75%</span></td>
<td><span id="requirements">Good knowledge in Java<br>Good Communication Skills<br>Analytical and Resoning Skills required</span></td>
</tr> -->
                                </tbody>
                            </table>
                        </div>
                        
                        
                        
                        
                        <!-- Senior Positions Start -->
                         <div class="row session-heading">
                        <div class="col-sm-12 text-center" style=""><p>Senior Positions</p></div>
                    </div>
                        
                          <div class="row">

                        <div class="col-sm-12">
                            <div class="subSectionTitle"><strong></strong></div>
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Position</th>
                                        <th>Location</th>
                                        <th>Duration</th>
                                        <th>Job&nbsp;Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     <tr>
                                        <td>1</td>
                                        <td><strong>Sr. SAP PP Consultant</strong></td>
                                        <td>Miracle Heights</td>
                                        <td>Permanent position</td>
                                        
                                        <td><ul>
                                                <li> Should have minimum 7+ Years of IT Experience.</li>
                                                    <li>Should have extensive knowledge in SAP PP.</li>
                                                    <li> Should have good communication skills.</li>
                                                </ul>
                                        </td>
                                    </tr>
                                    
                                    
                                    
                                    <tr>
                                        <td>2</td>
                                        <td><strong>Sr. SAP SD Consultant</strong></td>
                                        <td>Miracle Heights</td>
                                        <td>Permanent position</td>
                                        
                                        <td><ul>
                                                <li> Should have minimum 7+ Years of IT Experience.</li>
                                                    <li>Should have extensive knowledge in SAP SD.</li>
                                                    <li> Should have good communication skills.</li>
                                                </ul>
                                        </td>
                                    </tr>
                                    
                                     <tr>
                                        <td>3</td>
                                        <td><strong>Sr. SAP MM/WM Consultant</strong></td>
                                        <td>Miracle Heights</td>
                                        <td>Permanent position</td>
                                        
                                        <td><ul>
                                                <li> Should have minimum 7+ Years of IT Experience.</li>
                                                    <li>Should have extensive knowledge in SAP MM/WM.</li>
                                                    <li> Should have good communication skills.</li>
                                                </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td><strong>Sr. SAP Security/GRC Consultant</strong></td>
                                        <td>Miracle Heights</td>
                                        <td>Permanent position</td>
                                        
                                        <td><ul>
                                                <li> Should have minimum 7+ Years of IT Experience.</li>
                                                    <li>Should have extensive knowledge in SAP Security/GRC.</li>
                                                    <li> Should have good communication skills.</li>
                                                </ul>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>5</td>
                                        <td><strong>Java Engineer</strong></td>
                                        <td>Miracle Heights</td>
                                        <td>Permanent position</td>
                                        
                                        <td><ul>
                                                <li> Need 8-10 (6-8 years) years of experience in Java / Spring (Boots and Cloud) / Apache / Camel / Tomcat / Memory Optimization Experience / integration with Oracle DB</li>
                                                    <li>Must have experience in ORM/Hibernate Framework / Angular JS/ node.JS and Server Side Scripting.</li>
                                                    <li>Good communication skills.</li>
                                                    <li>Excellent Organization Skills.</li>
                                                    <li>Excellent leadership skills.</li>
                                                    <li>Excellent analytical skills.</li>
                                                </ul>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>5</td>
                                        <td><strong>Java Integration Developers</strong></td>
                                        <td>Miracle Heights</td>
                                        <td>Permanent position</td>
                                        
                                        <td><ul>
                                                <li> Web Development Exp / HTML 5 / CSS3 Integration Exp in Java to integrate with Crafter Content Management / Oracle DB / Latest Java  Libraries.</li>
                                                   
                                                </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td><strong>QA Testers</strong></td>
                                        <td>Miracle Heights</td>
                                        <td>Permanent position</td>
                                        
                                        <td><ul>
                                                <li> Test web native testing Non UI / Selenium Testing Tool.</li>
                                                <li>Testing Automation Engineer who is familiar with Selenium Testing Tools and knows how to validation / messaging / understands and can create and test web native testing Non UI / SOAP UI etc.</li>
                                                <li>Testing QA Engineer who is good in Web Based Testing / knows how to create / deploy test cases / test data both manual and automation using Selenium Testing Tool.</li>
                                                
                                                   
                                                </ul>
                                        </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <td>7</td>
                                        <td><strong>APIGEE Developer</strong></td>
                                        <td>Miracle Heights</td>
                                        <td>Permanent position</td>
                                        
                                        <td><ul>
                                                <li>Very good understanding of RESTful API design and architecture.</li>
                                                <li>Experience in using an API gateway and good atApigee Edge (Apigee , Mulesoft, WSO2, etc.) to manage API requests in an SOA or microservice architecture.</li>
                                                <li>Experience securing, optimizing, monitoring and testing enterprise APIs.</li>
                                                <li>Need resource to Set up Configure Apigee / Lay Out Architecture and then engage offshore component to work with onsite resource for development, testing and deployment activities.</li>
                                                
                                                
                                                   
                                                </ul>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>8</td>
                                        <td><strong>QA Lead</strong></td>
                                        <td>Miracle Heights</td>
                                        <td>Permanent position</td>
                                        
                                        <td><ul>
                                                <li>7 years of IT experience in which at least 4 to 5 years in to Automation Testing using Selenium, QTP/UFT with Java.</li>
                                                <li>Handled team of at least 15 - 20 Members and exposure to Agile methodology & Devops.</li>
                                                <li>Understanding of deriving test activities and artefacts from software requirements.</li>
                                                <li>Excellent exposure on Testing concepts, SDLC, STLC and Quality Assurance methodologies.</li>
                                                <li>Hands-on in designing and developing strategic Test plans, Test Cases, and Test Reports for manual test and automation test.</li>
                                                <li>Collaborate with other teams to Understand requirements and Identify opportunities to improve maintainability of automation platform.</li>
                                                <li>Measure, control and report on the test progress, the product quality status and the test results, adapting the test plan and compensating as needed to amend to evolving conditions.</li>
                                                <li>Should have hands on Java, Selenium RC, Selenium IDE, Selenium Grid or Selenium Web driver.</li>
                                                <li>Designing and Develop the Automation framework using open source Automation framework.</li>   
                                                <li>Develop page object, key driven, data driven and hybrid automation Frameworks.</li>    
                                                <li>Should be hands for the preparation of automation scripts using open source tools</li>
                                                <li>Creating scripts, executing and closely coordinating with project stake holders.</li>
                                                <li>Must be aware of execution tools like TestNG, NUnit, Junit.</li>
                                                <li>Develop and maintain automation suite throughout the project life cycle</li>    
                                                <li>Knowledge about different open source tools like Appium, Angular JS, Protractor, etc. will be added advantage.</li>
                                                <li>At least 1 year experience in Web services Testing and hands on tools like SOAPUI, GH Tester.</li>
                                                <li>Good experience in Defect Reporting and Defect tracking process using Quality Centre (QC/ALM), JIRA.</li>
                                                <li>Strong experience in Jira Jenkins Continuous Integration.</li>
                                                <li>Extensive experience in functional testing, unit testing, integration testing, regression testing, GUI testing, back-end testing, browser compatibility testing.</li>
                                                <li>Performance Testing with JMeter, Load runner experience is an added advantage.</li>
                                                <li>Excellent communication & presentation skills.</li>
                                                </ul>
                                        </td>
                                    </tr>
                                    
                                     </tbody>
                            </table>
                                    </div>
                              </div>
                        
                        
                        
                        <!-- Senior Positions End -->
                    </div>
                  <!--  <div class="row session-heading">
                        <div class="col-sm-12 text-center" style=""><p>Schedule</p></div>
                    </div>

                    <div class="row session session-break session-details">
                        <div class="col-md-6">
                            <div class="  location">   <font><i class="fa fa-1x fa-map-marker" aria-hidden="true"></i></font>AU convocation hall</div>  
                            <b>Friday: 16th Dec, 2016</b> <br>
                            <b>9:30AM to 4:30PM</b> 

                        </div>
                        <div class="col-md-6">
                            <div class="">
                                <div class=" ">
                                    <font>        <i class="fa fa-circle" aria-hidden="true"> </i></font>Eminent industry speakers on how to face the interview<br>
                                    <font>     <i class="fa fa-circle" aria-hidden="true"></i></font>How to prepare for the interview<br>
                                    <font>  <i class="fa fa-circle" aria-hidden="true"></i></font>Job opportunities

                                </div></div>
                        </div>
                    </div>

                    <div class="row session session-break session-details">
                        <div class="col-md-6">
                            <div class="location">  <i class="fa fa-1x fa-map-marker" aria-hidden="true"></i>AU convocation hall</div>
                            <b>Saturday: 17th Dec, 2016</b> <br> 
                            <b>9:30AM to 4:30PM</b> 

                        </div>
                        <div class="col-md-6"> <div class=" ">
                                    <font>        <i class="fa fa-circle" aria-hidden="true"> </i></font>Job Fair<br>
                                    <font class="pull-left" style="margin:1%">     <i class="fa fa-circle" aria-hidden="true"></i></font><div style="width: 600px; margin: 1%;">There will be between 20 and 50 IT Companies onsite to do<br> candidate screening and selection.</div><br>


                                </div></div>

                    </div> 
                    <div class="gap" style="line-height: 10px; height: 10px;"></div>-->



                    <div class="uparrow" id="uparrow"><i class="fa fa-3x fa-angle-up" aria-hidden="true"></i></div>


                   <!-- <div class="row">
                        <div class="col-sm-offset-5 col-sm-2 text-center">
                            <div class="btn-group">
                                <p class="text-center">   <a href="../applicant.php" target="_blank"><input type="button" value="Submit Your Application" name="btnSubmit" id="btnSubmit" style="text-transform: none; padding: 10px;text-align: center" class="btn btn-primary m-t-10"/></a>

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sx-12 text-center" style="color:red;">*<font style="font-size:12px;color:red;">Please submit an Online Application before coming to the Job Fair .</font></div> -->
                </div> 


            </div>
        </div>


        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.4/waypoints.min.js"></script>


        <script>
            $(document).ready(function () {
                $('.location_map > h2').addClass('animated fadeInUp');
                $('.location_map  img').addClass('animated bounceIn');
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

            function urlCalling() {
                window.open("http://www.google.com", "_blank");
            }


        </script>
        <?php include '../footer.php'; ?>
    </body>
</html>

