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
        <meta name="description" content="">
        <meta name="author"      content="Shankar">
        <meta content="miraclesoft, education,  industry,  IT,industries, " name="keywords"/>
        <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="" type="image/x-icon">
        <title>Digital Valley Summit:: Cultural Registration</title>


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3./includes/cssfont-awesome.min.css">
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="../includes/css/selectivity-full.css">


        <?php include '../context.php'; ?>

        <?php
      //  require '../../config/ConnectionProvider.php';




        $isSubmitted = false;
        $resultMessage = '';
        $consultantId = 0;

        if (isset($_POST['btnSubmit'])) {
            $isSubmitted = true;


            try {

                $tempCompetitionType = isset($_POST["competitionType"]) ? $_POST["competitionType"] : '';
                $tempCollegeName = isset($_POST["collegeName"]) ? $_POST["collegeName"] : '';
                $tempLeaderName = isset($_POST["leaderName"]) ? $_POST["leaderName"] : '';
                $tempLeaderEmail = isset($_POST["leaderEmail"]) ? $_POST["leaderEmail"] : '';
                $tempLeaderPhoneNumber = isset($_POST["leaderPhoneNumber"]) ? $_POST["leaderPhoneNumber"] : '';
                $tempTeamSize = isset($_POST["teamSize"]) ? $_POST["teamSize"] : '';
                $tempTeamMemberNames = isset($_POST["teamMemberNames"]) ? $_POST["teamMemberNames"] : '';
                $tempComments = isset($_POST["comments"]) ? $_POST["comments"] : '';
                $tempAuditionLink = isset($_POST["auditionLink"]) ? $_POST["auditionLink"] : '';
                

                $selectQuery = "SELECT * FROM tblConfCulturalRegistration WHERE LeaderEmail=:tempEmail OR LeaderPhoneNo=:tempMobileNumber";
                $stmt = $conn->prepare($selectQuery);
                $stmt->bindParam(':tempEmail', $tempLeaderEmail);
                $stmt->bindParam(':tempMobileNumber', $tempLeaderPhoneNumber);
                $stmt->execute();
                if ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
                    $resultMessage = "Already we have received your details .One of our Digital Summit Cultural representative will contact you shortly.";
                } else {
                    $sql = "INSERT INTO tblConfCulturalRegistration (CompetitionType,CollegeName,LeaderName,LeaderEmail,LeaderPhoneNo,TeamSize,TeamMemberNames,Comments,AuditionLink) 
            VALUES(:tempCompetitionType,:tempCollegeName,:tempLeaderName,:tempLeaderEmail,:tempLeaderPhoneNo,:tempTeamSize,:tempTeamMemberNames,:tempComments,:tempAuditionLink)";
                    $stmt = $conn->prepare($sql);


                    $stmt->bindParam(':tempCompetitionType', $tempCompetitionType);
                    $stmt->bindParam(':tempCollegeName', $tempCollegeName);
                    $stmt->bindParam(':tempLeaderName', $tempLeaderName);
                    $stmt->bindParam(':tempLeaderEmail', $tempLeaderEmail);
                    $stmt->bindParam(':tempLeaderPhoneNo', $tempLeaderPhoneNumber);
                    $stmt->bindParam(':tempTeamSize', $tempTeamSize);
                    $stmt->bindParam(':tempTeamMemberNames', $tempTeamMemberNames);
                    $stmt->bindParam(':tempComments', $tempComments);
                    $stmt->bindParam(':tempAuditionLink', $tempAuditionLink);
                   

                    if (!$stmt->execute()) {
                        $resultMessage = "Opps!Something went wrong.Please try later!";
                    } else {
                        $consultantId = $conn->lastInsertId();
                        $resultMessage = "Thank you for showing your interest to participate in Digital Summit 2016. One of our Digital Summit cultural representative will contact you shortly. ";

                        $eflag = CONF_EMAILFLAG;
                        if ($eflag == 1) {
                            require '../classes/ConfMailManager.php';
                           $mailmanager = new ConfMailManager();
                            //sendConfRegistraintsDetails($fname,$lname,$email,$mobileNumber,$title,$attendeeType,$city,$state,$areasOfIntrest,$comments)
                           $mailmanager->sendConfCulturalDetails($tempCompetitionType, $tempCollegeName,$tempLeaderName,$tempLeaderEmail,$tempLeaderPhoneNumber,$tempTeamSize,$tempTeamMemberNames,$tempComments,$tempAuditionLink); 
                           // $mailmanager->sendConfRegistraintsDetails($tempFirstName, $tempLastName, $tempEmail, $tempMobileNumber, $tempTitle, $tempAttendeeType, $tempCity, $tempState, $tempAreasOfInterest, $tempComments, $tempCountry);
                            $mailmanager->sendConfCulturalAcknowledgement($tempLeaderName, $tempLeaderEmail);
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
                background-image:url('../images/banner/cultural-regis.png');
                background-attachment:fixed;
                background-size:cover;
                background-position:center;
            }
        </style>
        <script type="text/javascript" src="../includes/js/ConfScripts.js"></script>
    </head>
<?php include '../header.php'; ?>
    <body class="home" onload="getStates()">

        <section class="parallax">
            <div class="overlay">
                <div class="container">

                    <div class="row" style="margin-top:40px; margin-bottom:45px;">

                        <div class="col-sm-6 text-left">

                            <h1 style="color:#fff"><strong>Culturals Registration</strong></h1>
                        </div>
                        <div class="col-sm-6 text-right">
                            <ul class="breadcrumb pull-right">
                                <li><a href="../"><font color="#fff">Home</font></a></li>

                                <li class="active"><font color="#fff"><strong>Culturals</strong></font></li>
                            </ul>
                        </div>

                    </div>

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

                                    Thank you for showing your interest to participate in Digital Summit 2016. One of our Digital Summit Cultural representative will contact you shortly. 
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
                        <div class="panel panel-primary">
                            <div class="panel-heading">Cultural Competition Registration</div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-12"> 
                                        <div class="alert alert-danger" style="display:none" id="errorMsgDiv">
                                            <button type="button" class="close" onclick="closeErrorMsg()" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <strong><span id="resultMessage">Invalid details!!</span></strong> 
                                        </div>                        
                                    </div>
                                </div>
                                <form role="form" method="post" action="" accept-charset="UTF-8">
                                     <div class="col-sm-4">
                                        <label for="country">Competition</label>
                                        <select id="competitionType" class="form-control" name="competitionType" required="true" >
                                            <option value="">Select Competition Type</option>
                                            <option value="Singing">Singing</option>
                                            <option value="Classical Dancing">Classical Dancing</option>
                                            <option value="Folk Dancing">Folk Dancing</option>
                                            <option value="Group Dance">Group Dance</option>
                                            <option value="Solo Dance">Solo Dance</option>
                                            <option value="Instrumental">Instrumental</option>
                                            <option value="Mimicry">Mimicry</option>
                                        </select>

                                    </div>
                                    <div class="col-sm-4">
                                        <label for="fname">Name of College / Company</label>
                                        <input type="text" id="collegeName" class="form-control" name="collegeName" placeholder="Example: Miracle College of Engineering" required="true" onchange="fieldLengthValidator(this);">
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="lname">Leader Name</label>
                                        <input type="text" id="leaderName" class="form-control" name="leaderName" placeholder="Example: Anand Patnaik" required="true" onchange="fieldLengthValidator(this);">
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="email" >Leader Email</label>
                                        <input type="text" id="leaderEmail" class="form-control" name="leaderEmail" placeholder="Example: john.smith@gmail.com" required="true" onchange="return checkEmail(this);fieldLengthValidator(this);">
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="mobileNo" >Leader Phone No:</label>
                                        <input type="text" id="leaderPhoneNumber" class="form-control" name="leaderPhoneNumber" placeholder="Mobile number" required="true" onchange="return formatPhone(this);">
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="title" >Team Size:</label>
                                        <input type="text" id="teamSize" class="form-control" name="teamSize" placeholder="Example:5" required="true" onkeypress="return isNumberKey(event)">
                                    </div>

                                   <div class="col-sm-12">
                                        <label for="title" >Audition link:</label>
                                        <input type="text" id="auditionLink" class="form-control" name="auditionLink" placeholder="Your past audition link which you need to put in Google Drive (or) Youtube" required="false" onchange="isUrl(this);return fieldLengthValidator(this);">
                                    </div>
                                  

                                    <div class="col-sm-12" style="margin-top:15px">
                                        <label for="comments">Team Member Names</label>
                                        <textarea placeholder="Example:Srinivas Patnala,Ravi Teja Challa,Anand Patnaik,Phanidra Kanuri " rows="3" class="form-control" id="teamMemberNames" name="teamMemberNames" onchange="fieldLengthValidator(this);"></textarea>
                                    </div>
                                    <div class="col-sm-12" style="margin-top:15px">
                                        <label for="comments">Comments(Optional)</label>
                                        <textarea placeholder="Comments about competition" rows="3" class="form-control" id="comments" name="comments" onchange="fieldLengthValidator(this);"></textarea>
                                    </div>


                                    <!--                                    <div class="col-sm-12">
                                                                            <div class="row">
                                                                                <div class="col-sm-offset-5 col-sm-2 text-center">
                                                                                    <div  class="btn-group">
                                                                                        <input type="submit" class="btn btn-primary m-t-10" id="btnSubmit" name="btnSubmit" value="Submit"> 
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>-->

                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-offset-5 col-sm-2 text-center">
                                                <div  class="btn-group">
                                                    <input type="submit" class="btn btn-primary m-t-10" id="btnSubmit" name="btnSubmit" value="Submit"> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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



        <script src="../includes/js/headroom.min.js"></script>
        <script src="../includes/js/jQuery.headroom.min.js"></script>
        <script src="../includes/js/template.js"></script>
        <script type="text/javascript" src="../includes/js/wow.js"></script>


        <script>new WOW().init();</script>
        <!--animate_end-->

        <script type="text/javascript" src="../includes/js/clients.js"></script>



        <script>
            $(document).ready(function () {
                
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
