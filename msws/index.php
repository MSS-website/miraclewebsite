<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="Home | Miracle" name="Title">
        <meta content="Miracle Software Systems, Inc. is a 20 year firm headquartered in Novi ,MI ,USA. Miracle has been a leader in the IT space as Systems Integrator in ERP/B2B/BPM." name="Description">
        <meta itemscope itemtype="http://schema.org/Organization">
        <meta itemprop="Miracle Software Systems, Inc, is a Global Systems Integrator specializing in ERP/ BPM (EAI/SOA) / B2B / Digital Experience Technologies, headquartered in Novi, MI � USA. Miracle has a global presence on four continents with multiple Global Development Centers spanning across the USA, Canada and India.Miracle has been and continues to be a leader in the niche space of Business Integration and SOA services over the past 20 Years with Premier Partnerships with software giants such as SAP, IBM, Oracle and Microsoft, Other partnerships also includes Amazon, Redhat, apigee, Rally, HP  and Axway.">
        <meta content="INDEX,FOLLOW" name="Robots">
        <title>
            Home | Miracle
        </title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link href="css/default.css" rel="stylesheet" type="text/css">
        <link href="css/component.css" rel="stylesheet" type="text/css">
        <script src="js/modernizr.custom.js"></script><!--[if lt IE 6]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="images/favicon.ico" rel="shortcut icon">
        <meta content="width=device-width, initial-scale=1" name="viewport"><!--[if lte IE 8]>
<div id="warning">
<META http-equiv="refresh" content="0;URL=http://www.miraclesoft.com/outdated-browser.php">
</div><--> 

        <?php
        //include 'config/DbController.php';
        require 'config/ConnectionProvider.php';
        include 'config/Locations.php';


        // $conn = new DbController();

        $resultMessage = '';
        $rsurveyFormId = isset($_GET["errCode"]) ? $_GET["errCode"] : 0;
        $rsurveyId = isset($_GET["surveyId"]) ? $_GET["surveyId"] : 0;

        $ratlantaId = isset($_GET["atlantaId"]) ? $_GET["atlantaId"] : '-1';
        $iotId = isset($_GET["iotId"]) ? $_GET["iotId"] : 0;
        // $rflag = isset($_GET["flag"]) ? $_GET["flag"] : 'Live';
        $surveyTitle = '';
        $surveyExpiryDate = '';
        $surveyIsCustomMessage = '';
        $surveyCustomMessage = '';

        try {
            // $conn->connectToDatabase();
            // $conn->selectDatabase();
            if ($rsurveyId > 0) {
                //$selectQuery = "SELECT Title,ExpiryDate,IsCustomMessage,CustomMessage FROM tblSurvey WHERE Id = $rsurveyId";
                $selectQuery = "SELECT Title,ExpiryDate,IsCustomMessage,CustomMessage FROM tblSurvey WHERE Id = :rsurveyId";
                $stmt = $conn->prepare($selectQuery);
                $stmt->bindParam(':rsurveyId', $rsurveyId);
                $stmt->execute();
                $rows = $stmt->rowCount();
                // $selectresponce = mysql_query($selectQuery);
                // if (mysql_num_rows($selectresponce) > 0) {
                if ($rows > 0) {
                    //   $row = mysql_fetch_row($selectresponce);
                    if ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
                        $surveyTitle = $row[0];
                        $surveyExpiryDate = strtotime($row[1]);
                        $dispExpiryDate = date('F d , Y', $surveyExpiryDate);
                        $surveyIsCustomMessage = $row[2];
                        $surveyCustomMessage = $row[3];
                    }
                }
            }
        } catch (Exception $exc) {
            $exc->getMessage();
            $resultMessage = '<font color=red size=2px>' . $exc . '</font>';
        }
        ?>


<style type="text/css">
            .carousel-content{margin-top:50px!important;}
            .carousel {
   
    margin-bottom:7px;
}

.glyphicon{
    
    top:10px !important;
}
    #main-slider .carousel .item{
    box-shadow:rgb(68, 68, 68) 0px 0px 5em inset, rgb(51, 51, 51) 0px 0px 5em inset !important;
}

        </style>


    </head><!--/head-->


    <?php include 'header.php'; ?>
    <body>
        <script type="text/javascript">
            $(window).load(function(){
                var serveyId = document.getElementById("serveyId").value;
                if(parseInt(serveyId,10) != 0){
                    $('#myModal').modal('show');
                }
        
                var atlantaId = document.getElementById("atlantaId").value;
                if(atlantaId!="-1"){
                    $('#myModal1').modal('show');
                }
		 
                var iotId = document.getElementById("iotId").value;
            
                if(parseInt(iotId,10)>0){
                    $('#myModalIot').modal('show');
                }
            });
    
    
        </script>
        <div row="row">
            <input type="hidden" name="atlantaId" id="atlantaId" value="<?= $ratlantaId; ?>"/>

            <input type="hidden" name="iotId" id="iotId" value="<?= $iotId; ?>"/>
            <!-- iot modal start -->
            <div class="modal fade" id="myModalIot"  role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true">
                <div class="modal-dialog" style=" position: static;">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">�</button>
                            <h3 class="modal-title" id="memberModalLabel"><strong>Thank you</strong> </h3>
                            <hr>
                        </div>
                        <div class="modal-body">
                            <p class="methodText">Thank you for nominating your city for our <strong> IoT Camp Event Series.</strong> We are checking everyday for cities that are enthusiastic about technology and we hope yours will be next on our tour :)</p>
                            <hr>
                        </div>
                        <div class="modal-footer">
                            <div class="row noMargin">
                                <div class="col-sm-4"></div>
                                <div class="col-sm-4"></div>
                                <div class="col-sm-4"> <button class="btn btn-primary btn-md" type="button" data-dismiss="modal">Continue</button></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- iot modal end -->

            <!-- atlanta modal start -->
            <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true">
                <div class="modal-dialog" style="position: static;">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">�</button>

                            <h3 class="modal-title " id="memberModalLabel"><strong>Thank You</strong> </h3><hr class="noMargin">
                        </div>

                        <div class="modal-body">
                            <p class="methodText">  Thank you for RSVP'ing for the Opening Ceremony of our new Center for Digital Transformation in Atlanta. We look forward to seeing you at our office on October 16th, 2015 at 11:30AM. </p>

                            <div class="modal-footer">
                                <div class="row">
                                    <div class="col-sm-4"> </div>
                                    <div class="col-sm-4"></div>      
                                    <div class="col-sm-4">
                                        <button type="submit" tabindex="3" class="btn btn-primary col-sm-12" data-dismiss="modal" name="btnSubmit" id="btnSubmit">
                                            Okay
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- atlanta modal end -->



            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <input type="hidden" name="serveyId" id="serveyId" value="<?= $rsurveyId ?>"/>

                <div class="modal-dialog" style=" position: static;">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>

                            <?php if ($rsurveyId == -1) { ?>
                                <h3 class="modal-title" id="memberModalLabel"><strong>Invalid survey</strong> </h3><hr class="noMargin">
                            <?php } else if ($rsurveyFormId == -3) { ?>
                                <h3 class="modal-title " id="memberModalLabel"><strong>Survey Form Is not Published</strong> </h3><hr class="noMargin">
                            <?php } else if ($rsurveyId > 0 && $rsurveyFormId == 0) { ?>
                                <h3 class="modal-title " id="memberModalLabel"><strong>Thank You</strong> </h3><hr class="noMargin">
                            <?php } else if ($rsurveyFormId == -2) { ?>
                                <h3 class="modal-title " id="memberModalLabel"><strong>Survey Form has expired</strong> </h3><hr class="noMargin">
                            <?php } ?>                   </div>

                        <div class="modal-body">
                            <?php if ($rsurveyId == -1) { ?>
                                <p class="methodText">Invalid Survey Id.</p>
                            <?php } else if ($rsurveyFormId == -3) { ?>
                                <p class="methodText">Your Survey form <strong><?php echo $surveyTitle; ?> </strong> is not published.</p>
                            <?php
                            } else if ($rsurveyId > 0 && $rsurveyFormId == 0) {
                                if ($surveyIsCustomMessage == 0) {
                                    ?>

                                    <p class="methodText">Your Survey form <strong><?php echo $surveyTitle; ?> </strong> has been submitted successfully.</p>
                                <?php } else { ?>
                                    <p class="methodText"><?php echo $surveyCustomMessage; ?> </p>
                                <?php } ?>

                         <!-- <p class="methodText">Your Survey form <strong><?php echo $surveyTitle; ?> </strong> has been submitted succesfully.</p> -->
                            <?php } else if ($rsurveyFormId == -2) { ?>
                                <p class="methodText">Your Survey form <strong><?php echo $surveyTitle; ?> </strong> has expired on <strong><?php echo $dispExpiryDate; ?> </strong>.</p>
                            <?php } ?> 
                            <div class="modal-footer">
                                <div class="row">
                                    <div class="col-sm-4"> </div>
                                    <div class="col-sm-4"></div>      
                                    <div class="col-sm-4">
                                        <button type="submit" tabindex="3" class="btn btn-primary col-sm-12" data-dismiss="modal" name="btnSubmit" id="btnSubmit">
                                            Okay
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style type="text/css">
            .carousel-content{margin-top:50px!important;}
        </style>
                <section class="no-margin responsive" id="main-slider">
             <!--carousel slide-->
            <div class="carousel slide " data-ride="carousel" id="carousel">
           <!--carousel start-->
                <div class="carousel-inner" role="listbox">
                                      
                     <div class="item  active img-responsive" style="background-image: url(<?= AMAZON_URL ?>/images/slider/banner2.png);background-repeat:no-repeat;background-size:cover;">
                      <div class="container">
                        <div class="row">
                           
                               <div class="col-sm-1"></div>
                               <div class="col-sm-10" style="margin-top: 10px;">
                                    <div style="margin-top: 35px;" class="carousel-content centered">
                                       <h1 class="heavy animation animated-item-1">Microsoft Tech Summit
                                       </h1>
                                       <h3 class="heavy animation animated-item-2">Washington, DC
                                       </h3>
                                       <p class="heavy animation animated-item-3">Meet us on March 5th - 6th, 2018      
                                       </p>
                                       <a class="btn btn-md animation animated-item-4" target="_blank" href="https://www.microsoft.com/en-us/techsummit/washington-dc">Register Now</a>
                                       <br><br>
                                   </div>
                               </div>
                               <div class="col-sm-1 hidden-xs animation animated-item-4">
                               </div>
                           </div>
                       </div> <!--/.item-->
                   </div>                 
                                      
                        
                        <div class="item img-responsive" style="background-image: url(<?= AMAZON_URL ?>/images/slider/banner1.png); background-repeat:no-repeat;background-size:cover;">
                       <div class="container">
                            <div class="row">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-10" style="margin-top: 5px;">
                                    <div class="carousel-content centered">
                                        <h1 class="heavy animation animated-item-1">The Evolution User Interface UI to User Experience <br>UX
                                        </h1>
                                        <h3 class="heavy animation animated-item-2">Technical Article 
                                        </h3>
                                        <p class="heavy animation animated-item-3 ">
                                        </p>
                                        <a class="btn btn-md animation animated-item-4" target="_blank" href="http://www.miraclesoft.com/library/TechnicalArticle/evolution-user-interface-ui-to-user-experience-ux.php">Check Now</a>
                                        <br><br>
                                    </div>
                                </div>
                                <div class="col-sm-1 hidden-xs animation animated-item-4">
                                </div>
                            </div>
                        </div> 
                    </div>
                  
                     <div class="item  img-responsive" style="background-image: url(<?= AMAZON_URL ?>/images/slider/banner3.png);background-repeat:no-repeat;background-size:cover;">
                       <div class="container">
                            <div class="row">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-10" style="margin-top: 6px;">
                                    <div class="carousel-content centered">
                                        <h1 class="heavy animation animated-item-1"> Exploring Machinery Management using IBM Watson IoT and SAP

                                        </h1>
                                        <h3 class="heavy animation animated-item-2">Laboratory Video
                                        </h3>
                                        <p class="heavy animation animated-item-3 "> 
                                        </p>
                                        <a class="btn btn-md animation animated-item-4" target="_blank" href="http://www.miraclesoft.com/library/video/exploring-machinery-management-using-ibm-watson-iot-sap.php">Watch Now</a>
                                        <br><br>
                                    </div>
                                </div>
                                <div class="col-sm-1 hidden-xs animation animated-item-4">
                                </div>
                            </div>
                        </div> <!--/.item-->
                    </div>
                    
                     <div class="item  img-responsive" style="background-image: url(<?= AMAZON_URL ?>/images/slider/banner4.png);background-repeat:no-repeat;background-size:cover;">
                       <div class="container">
                            <div class="row">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-10" style="margin-top: 5px;">
                                    <div class="carousel-content centered">
                                        <h1 class="heavy animation animated-item-1">Advanced Supply Chain Solution for a Leading Logistics Provider
                                        </h1>
                                        <h3 class="heavy animation animated-item-2">Case Study
                                        </h3>
                                        <p class="heavy animation animated-item-3 ">
                                        </p>
                                        <a class="btn btn-md animation animated-item-4" target="_blank" href="http://www.miraclesoft.com/library/CaseStudy/advanced-supply-chain-solution-leading-logistics-provider.php">Check Out</a>
                                        <br><br>
                                    </div>
                                </div>
                                <div class="col-sm-1 hidden-xs animation animated-item-4">
                                </div>
                            </div>
                        </div> <!--/.item-->
                    </div>
                    
    </div>
    <!--carousel end-->
    
                <a href="#carousel" class="left carousel-control heading" data-slide="prev">
        <span class="glyphicon icon-angle-left "></span>
    </a>
    <a href="#carousel" class="right carousel-control heading1" data-slide="next">
        <span class="glyphicon icon-angle-right"></span>
    </a>
            </div>
            <!--corusel slide-->
        </section>

        <br><!--/#main-slider-->

        <section class="container" id="services">
            <div class="row">
                <br>
                <div class="col-sm-3 center">
                    <center><img src="<?= AMAZON_URL ?>/images/principles/thought-leadership.png" class="img-responsive" alt="Thought Leadership" title="Thought Leadership"></center>
                    <h3 class="heavy">Thought Leadership</h3>
                    <div class="greyText">At Miracle we believe in execution at the speed of thought along with the power of leadership which helps us drive forward</div>
                </div>
                <div class="col-sm-3 center">
                    <center><img src="<?= AMAZON_URL ?>/images/principles/technical-excellence.png" class="img-responsive" alt="Technical Excellence" title="Technical Excellence"></center>
                    <h3 class="heavy">Technical Excellence</h3>
                    <div class="greyText">Miracle's core strength is its Technical Excellence which helps us to give our customers the highest possible business value</div>
                </div>
                <div class="col-sm-3 center">
                    <center><img src="<?= AMAZON_URL ?>/images/principles/industry-expertise.png" class="img-responsive" alt="Industry Expertise" title="Industry Expertise"></center>
                    <h3 class="heavy">Industry Expertise</h3>
                    <div class="greyText">Nobody knows the IT landscape and Industry verticals as we do at Miracle and this helps us to understand your problems much better</div>
                </div>
                <div class="col-sm-3 center">
                    <center><img src="<?= AMAZON_URL ?>/images/principles/global-delivery.png" class="img-responsive" alt="Global Delivery" title="Global Delivery"></center>
                    <h3 class="heavy">Global Delivery</h3>
                    <div class="greyText">Through our multiple Global Development Centers we provide unprecendented, quality and low cost services for our customers</div>
                </div>
            </div>
            <!-- Text Section of Home Page Starts Here!! -->
            <hr>
            <div class="row">
                <div class="col-sm-7">
                    <h3><strong>Power of Connectivity</strong></h3>
                    <p class="methodText">
                        Irrespective of the size of the enterprise, connectivity plays a vital role in defining how connected your enterprise is. Over the past 20 years our teams have helped numerous customers transition their IT architecture to enable an agile and on-demand enterprise. Through messaging and connectivity the enterprise becomes much more flexible to changes in a demanding market place while also ensuring quicker time-to-market and reduced support development costs. Contact us today to learn more about how a SOA-based approach will help you become the connected enterprise (or) how APIs can help open a whole new world of possibilities for your developers. 
                    </p>
                    <a href="../why/"><button type="button" class="btn btn-danger btn-md">Read More</button></a>
                    <hr>
                    <h3><strong>Mulesoft and Miracle</strong></h3>
                    <p class="methodText">Through our strategic partnership with Mulesoft, we enable to offer innovative solutions to our customers while creating continuous transformation. Together, we deliver top-line solutions for the most challenging complications across SOA, SaaS, and APIs in an inventive way.
                    </p>
                    <br> <a href="../partnerships/mulesoft"><button type="button" class="btn btn-danger btn-md">Read More</button></a>
                </div>
                <div class="col-sm-5">
                    </br>
                    <img src="<?= AMAZON_URL ?>/images/career/career.png" class="img-responsive" alt="careers" title="careers">
                    <h5><strong>The Job that you will Love</strong></h5>
                    <p class="methodText">At Miracle we provide a solid foundation for young learners to build their careers and shape their future. Being a tech savvy company, our encouraging and energetic environment helps young talent to blossom and grow. Join us today to make your mark on the IT field with new disruptive innovations. </p>
                    <a href="../careers/"><button type="button" class="btn btn-danger btn-md">Read More</button></a>
                </div>

        </section>
        <br>    
        <!--footer-->
        <script type="application/ld+json">{"@context": "http://schema.org","@type": "Organization","name": "Miracle Software Systems, Inc","description": "Miracle Software Systems, Inc, is a Global Systems Integrator specializing in ERP/ BPM (EAI/SOA) / B2B / Digital Experience Technologies, headquartered in Novi, MI � USA. Miracle has a global presence on four continents with multiple Global Development Centers spanning across the USA, Canada and India.Miracle has been and continues to be a leader in the niche space of Business Integration and SOA services over the past 20 Years with Premier Partnerships with software giants such as SAP, IBM, Oracle and Microsoft, Other partnerships also includes Amazon, Redhat, apigee, Rally, HP  and Axway.","url": "http://www.miraclesoft.com","logo": "http://www.miraclesoft.com/images/logo-black.png","address": {"streetAddress": "45625 Grand River Avenue","addressLocality": "Novi","addressRegion": "MI","postalCode": "48374","addressCountry": "USA"},"faxNumber": "","sameAs" : ["https://www.facebook.com/miracle45625","https://twitter.com/Team_MSS","https://plus.google.com/+Team_MSS/","","https://www.youtube.com/c/Team_MSS","https://www.linkedin.com/company/miracle-software-systems-inc",""]}</script>					
        <?php include 'footer.php'; ?>
    </body>
</html>
