<!-- 
/* ******************************************************************************
*
* Project : The Digital Valley Summit V1
*
* Date    : October10,2016
*
* Author  : Corporate Applicaiton Support Team<hubble@miraclesoft.com>
*
* File    : Index.php
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

<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />

        <meta name="description" content="">
        <meta name="author"      content="Shankar">
        <meta content="miraclesoft, education,  industry,  IT,industries, " name="keywords"/>
        <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="" type="image/x-icon">
        <title>Digital Valley Summit</title>


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3./includes/cssfont-awesome.min.css">
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="./includes/css/selectivity-full.css">


        <?php include './context.php'; ?>

        <?php
        require '../config/ConnectionProvider.php';




        $isSubmitted = false;
        $resultMessage = '';
        $consultantId = 0;

        if (isset($_POST['btnSubmit'])) {
            $isSubmitted = true;


            try {

                $tempFirstName = isset($_POST["fname"]) ? $_POST["fname"] : '';
                $tempLastName = isset($_POST["lname"]) ? $_POST["lname"] : '';
                $tempEmail = isset($_POST["email"]) ? $_POST["email"] : '';
                $tempMobileNumber = isset($_POST["mobileNo"]) ? $_POST["mobileNo"] : '';
                $tempTitle = isset($_POST["title"]) ? $_POST["title"] : '';
                $tempState = isset($_POST["state"]) ? $_POST["state"] : '';
                $tempCity = isset($_POST["city"]) ? $_POST["city"] : '';
                $tempAttendeeType = isset($_POST["attendeeType"]) ? $_POST["attendeeType"] : '';
                $tempAreasOfInterest = isset($_POST["areasOfInterestHidden"]) ? $_POST["areasOfInterestHidden"] : '';
                $tempComments = isset($_POST["comments"]) ? $_POST["comments"] : '';
                $tempCountry = isset($_POST["country"]) ? $_POST["country"] : '';
                $tempCollegeName = isset($_POST["collegeName"]) ? $_POST["collegeName"] : '';
                

                $selectQuery = "SELECT * FROM tblConfRegistration WHERE Email=:tempEmail OR MobileNumber=:tempMobileNumber";
                $stmt = $conn->prepare($selectQuery);
                $stmt->bindParam(':tempEmail', $tempEmail);
                $stmt->bindParam(':tempMobileNumber', $tempMobileNumber);
                $stmt->execute();
                if ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
                    $resultMessage = "Already we have received your details .One of our Digital Summit representative will contact you shortly.";
                } else {
                    $sql = "INSERT INTO tblConfRegistration (FirstName,LastName,Email,MobileNumber,Title,AttendeeType,City,State,AreasOfInterest,Comments,Country,CollegeName) 
            VALUES(:tempFirstName,:tempLastName,:tempEmail,:tempMobileNumber,:tempTitle,:tempAttendeeType,:tempCity,:tempState,:tempAreasOfInterest,:tempComments,:tempCountry,:tempCollegeName)";
                    $stmt = $conn->prepare($sql);


                    $stmt->bindParam(':tempFirstName', $tempFirstName);
                    $stmt->bindParam(':tempLastName', $tempLastName);
                    $stmt->bindParam(':tempEmail', $tempEmail);
                    $stmt->bindParam(':tempMobileNumber', $tempMobileNumber);
                    $stmt->bindParam(':tempTitle', $tempTitle);
                    $stmt->bindParam(':tempAttendeeType', $tempAttendeeType);
                    $stmt->bindParam(':tempCity', $tempCity);
                    $stmt->bindParam(':tempState', $tempState);
                    $stmt->bindParam(':tempAreasOfInterest', $tempAreasOfInterest);
                    $stmt->bindParam(':tempComments', $tempComments);
                    $stmt->bindParam(':tempCountry', $tempCountry);
                    $stmt->bindParam(':tempCollegeName', $tempCollegeName);






                    if (!$stmt->execute()) {
                        $resultMessage = "Opps!Something went wrong.Please try later!";
                    } else {
                        $consultantId = $conn->lastInsertId();
                        $resultMessage = "Thank you for registering with us for The Digital Summit, 2016.<br>Please do reach out to the following help desk number for any assistance. – 0891-6696644<br>We will be waiting to meet you @ the event";

                        $eflag = CONF_EMAILFLAG;
                        if ($eflag == 1) {
                            require 'classes/ConfMailManager.php';
                            $mailmanager = new ConfMailManager();
                            //sendConfRegistraintsDetails($fname,$lname,$email,$mobileNumber,$title,$attendeeType,$city,$state,$areasOfIntrest,$comments)
                            //$mailmanager->sendConfRegistraintsDetails($tempFirstName, $tempLastName,$tempEmail,$tempMobileNumber,$tempTitle,$tempAttendeeType,$tempCity,$tempState,$tempAreasOfInterest,$tempComments); 
                            $mailmanager->sendConfRegistraintsDetails($tempFirstName, $tempLastName, $tempEmail, $tempMobileNumber, $tempTitle, $tempAttendeeType, $tempCity, $tempState, $tempAreasOfInterest, $tempComments, $tempCountry,$tempCollegeName);
                            $mailmanager->sendConfRegistraintsAcknowledgement($tempFirstName, $tempLastName, $tempEmail);
                        }
                    }
                }
            } catch (Exception $exc) {

                $exc->getMessage();
                $resultMessage = $exc;

                //header('Location: ../back-end-error.php?resultMessage=' . $resultMessage);
            }
            //header("Location:registration.php");
        }
        ?>

        <style>
            .home >  .jumbotron {
                background-color: #2bb2dc;
                color: inherit;
                margin-bottom: 0;
                padding-bottom: 10px;
                padding-top: 10px;
            }
            .jumbotron-sm { padding-top: 24px;
                            padding-bottom: 24px; }
            .jumbotron small {
                color: yellow !important;
                font-size: xx-large;
            }
            .h1 small {
                font-size: 24px;

            }




            body{padding-top:20px}

            .pricing-table .plan {
                margin-left:0px;
                border-radius: 5px;

                background-color: #f3f3f3;
                -moz-box-shadow: 0 0 6px 2px #b0b2ab;
                -webkit-box-shadow: 0 0 6px 2px #b0b2ab;
                box-shadow: 0 0 6px 2px #b0b2ab;
                margin:47px;
            }

            /* .plan:hover {
              background-color: #fff;
              -moz-box-shadow: 0 0 12px 3px #b0b2ab;
              -webkit-box-shadow: 0 0 12px 3px #b0b2ab;
              box-shadow: 0 0 12px 3px #b0b2ab;
            }
            */


            .m-t-10 {
                margin-top: 10px;
            }

            .panel-primary > .panel-heading {
                background-color: #5fbae9;
                border-color: #5fbae9;
                color: #fff;
            }

            .location_map .h1 {
                font-size: 43px !important;
            }
            .parallax{
                background-image:url('./images/banner/jobfairs.jpg');
                background-attachment:fixed;
                background-size:cover;
                background-position:center;
            }

            h3{
                color:#0d416b  ;
            }
            .btn {
                padding: 8px 35px !important;
            }

            .heavy {
                font-weight: bold !important;
            }
            h3 {

                margin-top: 20px;
                margin-bottom: 10px;
                line-height: 1.1;
                font-size: 23px !important;
                color: #3498db !important;
                padding-bottom: 0!important;

            }

        </style>
        <script type="text/javascript" src="includes/js/ConfScripts.js"></script>
    </head>
    <?php include './header.php'; ?>
    <body class="home" onload="getStates()">

        <section class="parallax">
            <div class="overlay">
                <div class="container">
                    <br>
                    <br>
                    <div class="row">

                        <div class="col-sm-6 text-left">

                            <h1 style="color:#fff"><strong>Registration</strong></h1>
                        </div>
                        <div class="col-sm-6 text-right">
                            <ul class="breadcrumb pull-right">
                                <li><a href="./"><font color="#fff">Home</font></a></li>

                                <li class="active"><font color="#fff"><strong>Registration</strong></font></li>
                            </ul>
                        </div>

                    </div>
                    <br><br><br>
                </div></div>
        </section>
        <div class="container">
            <div class="container">
                <div class="gap" style="line-height: 50px; height: 50px;"></div>


                <div class="row">
                    <div class="col-sm-12">
                        <?php
                        if ($isSubmitted) {

                            if ($consultantId > 0) {
                                ?>  

                                <div class="alert alert-success" id="success">

                                    <a href="javascript:closeSuccessDiv(success)" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong>Success!</strong> 

                                    Thank you for registering with us for The Digital Summit, 2016.<br>Please do reach out to the following help desk number for any assistance. – 0891-6696644<br>We will be waiting to meet you @ the event
                                    <!-- Thank you for showing interest on AP Digital Summit 2016. -->
                                </div>
                            <?php } else { ?>

                                <div class="alert alert-danger" id="danger">
                                    <a href="javascript:closeSuccessDiv(danger)" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong>Exception!</strong> <?php echo $resultMessage ?>
                                </div> 

                                <?php
                            }
                        }
                        ?>        

                    </div>
                </div>


                <div class="row">
                    <div class="col-md-12">
                        <div class=" ">

                            <div class=" ">
                                <div class="row">
                                    <div class="col-sm-12"> 
                                        <h3 class="heavy">Personal details</h3>
                                        <div class="alert alert-danger" style="display:none" id="errorMsgDiv">
                                            <button type="button" class="close" onclick="closeErrorMsg()" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <strong><span id="resultMessage">Invalid details!!</span></strong> 
                                        </div>                        
                                    </div>
                                </div>
                                <form role="form" method="post" action="" accept-charset="UTF-8" class="reg_form">
                                    <div class="row">
                                        <div class="col-sm-4">

                                            <input type="text" id="fname" class="form-control" name="fname" placeholder="First Name" required="true" onchange="fieldLengthValidator(this);">
                                        </div>
                                        <div class="col-sm-4">

                                            <input type="text" id="lname" class="form-control" name="lname" placeholder="Last Name" required="true" onchange="fieldLengthValidator(this);">
                                        </div>
                                        <div class="col-sm-4">

                                            <input type="text" id="email" class="form-control" name="email" placeholder="Email Address" required="true" onchange="return checkEmail(this);fieldLengthValidator(this);">
                                        </div>

                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-4">

                                            <input type="text" id="mobileNo" class="form-control" name="mobileNo" placeholder="Mobile Number" required="true" onchange="return formatPhone(this);">
                                        </div>
                                        <div class="col-sm-4">

                                            <input type="text" id="title" class="form-control" name="title" placeholder="Title" required="true" onchange="fieldLengthValidator(this);">
                                        </div>

                                        <div class="col-sm-4">

                                            <select id="attendeeType" class="form-control" name="attendeeType" required="true">
                                                <option value="">Select Attendee type</option>
                                                <option value="Customer">Customer</option>
                                                <option value="Native Of AP">Native Of AP</option>
                                                <option value="Independent">Independent</option>
                                                <option value="Research">Research</option>
                                                <option value="Press">Press </option>
                                                <option value="Student">Student </option>


                                            </select>
                                        </div>
                                        </div>
                                    <script type="text/javascript">
                                $(document).ready(function(){
    $("#attendeeType").change(function(){
        if($("#attendeeType").val()=='Student'){
            $("#collegeDiv").show();
            $("#collegeName").attr("required", true);
        }else {
            $("#collegeDiv").hide();
            $("#collegeName").val("");
            $("#collegeName").removeAttr("required");
            
        }
    });
    
     
});    
                                </script>
                                        <div class="row" style="display: none" id="collegeDiv"><br>
                                            <div class="col-sm-12"> <input type="text" id="collegeName" class="form-control" name="collegeName" placeholder="College Name" onchange="fieldLengthValidator(this);"></div>
                                            
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-sm-4">

                                                <select id="country" class="form-control" name="country" required="true" onchange="getStates()">

                                                    <option value="USA">USA</option>
                                                    <option value="India">India</option>
                                                </select>

                                            </div>
                                            <div class="col-sm-4">
                                                
                                                <select id="states" class="form-control" name="state" required="true">

                                                </select>
                                            </div>
                                            <div class="col-sm-4">

                                                <input type="text" id="city" class="form-control" name="city" placeholder="City" required="true" onchange="fieldLengthValidator(this);">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-sm-12">
<!--                                                <label for="areasOfInterest" class="m-t-10" style="">Areas Of interest</label>-->
                                                <h3 class="heavy">Areas Of interest</h3>
                                                <div id="areasOfInterest" class="selectivity-input example-input" name="areasOfInterest" required="required">


                                                </div>
                                                <input type="hidden" id="areasOfInterestHidden" name="areasOfInterestHidden"/>
        <!--                                        <select id="states1" class="form-control" name="state">
                                                    <option value="alabama">IOT</option>
                                                    <option value="alaska">Cloud</option>
                                                    <option value="arizona">Analytics</option>
                                                    <option value="arkansas">Mobile</option>
                                                    <option value="california">Security </option>
        
        
                                                </select>-->
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-sm-12" style="margin-top:15px">

                                                <textarea placeholder="Comments" rows="3" class="form-control" id="comments" name="comments" onchange="fieldLengthValidator(this);"></textarea>
                                            </div>
                                        </div>
                                        <br>

                                        <!--                                    <div class="col-sm-12">
                                                                                <div class="row">
                                                                                    <div class="col-sm-offset-5 col-sm-2 text-center">
                                                                                        <div  class="btn-group">
                                                                                            <input type="submit" class="btn btn-primary m-t-10" id="btnSubmit" name="btnSubmit" value="Submit"> 
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>-->
                                    <!--    <div class="row">
                                            <div class="col-sm-12">
                                                

                                                            <button name="btnSubmit" id="btnSubmit" class="btn btn-info col-sm-4" type="submit">Submit </button>
                                                        
                                            </div>
                                        </div> -->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div style="clear:both;" class="clearfix"></div>

        <!-- /Header -->

        <!-- Intro -->

        <div class="clearfix"></div>




        <div class="clearfix"></div>
        <!--mainwrapper start-->




        <!-- Social links. @TODO: replace by link/instructions in template -->
        <section id="social">
            <div class="container">
                <div class="wrapper clearfix">
                    <!-- AddThis Button BEGIN -->
                    <div class="addthis_toolbox addthis_default_style">
                        <a class="addthis_button_facebook_like" ></a>
                        <a class="addthis_button_tweet"></a>
                        <a class="addthis_button_linkedin_counter"></a>
                        <a class="addthis_button_google_plusone" ></a>
                    </div>
                    <!-- AddThis Button END -->
                </div>
            </div>
        </section>
        <!-- /social links -->
        <div class="uparrow" id="uparrow"><i class="fa fa-3x fa-angle-up" aria-hidden="true"></i></div>



        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>



        <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.4/waypoints.min.js"></script>



        <script src="includes/js/headroom.min.js"></script>
        <script src="includes/js/jQuery.headroom.min.js"></script>
        <script src="includes/js/template.js"></script>
        <script type="text/javascript" src="includes/js/wow.js"></script>


        <script>new WOW().init();</script>
        <!--animate_end-->

        <script type="text/javascript" src="includes/js/clients.js"></script>



        <script>
            $(document).ready(function () {
                $('#areasOfInterest').selectivity({
                    items: ['IOT', 'Cloud', 'Analytics', 'Mobile', 'Security'],
                    multiple: true,
                    placeholder: 'Type your area of interest'
                });
            
                $('#areasOfInterest').change(function(e){
                    var myString = $('#areasOfInterest').selectivity('value');
                    //  alert(myString.length);
                    if(myString.length>4){
                        $('#areasOfInterest').selectivity('remove', myString[myString.length-1]);
                        alert("Selecting more than 4 not allowed");
                    }else {
                        // alert(myString.length-1);
                        document.getElementById("areasOfInterestHidden").value=myString;
                    }
                });
                
                

                $("#countdown").countdown({
                    date: "22 december 2016 12:00:00",
                    format: "on"
                },
                function () {
                    // callback function
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
        <?php include './footer.php'; ?>
    </body>
</html>
