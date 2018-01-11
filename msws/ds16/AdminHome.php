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
        <title>Digital Valley Summit</title>


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3./includes/cssfont-awesome.min.css">
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="./includes/css/selectivity-full.css">


        <?php include './context.php'; ?>

        <?php
       

 session_start();
        if (isset($_SESSION['ses_Email']) && $_SESSION['ses_Email'] != "") {
           
        } else {
            header('Location: AdminLogin.php');
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

           
                .tm-panel-link {
                border: 1px solid #e5e5e5;
                padding: 30px 30px 60px;
            }
            .tm-panel-link::after {
                background: #0ba1d8 none repeat scroll 0 0;
                bottom: -1px;
                content: "";
                display: none;
                height: 5px;
                left: -1px;
                position: absolute;
                right: -1px;
            }
            .tm-panel-link:hover::after {
                display: block;
            }
            .tm-panel-link:hover h4 {
                color: #0ba1d8;
            }

            .tm-panel-link h4 {
                margin-top: 25px;

            }
            .tm-grid-margin-large .uk-grid-margin {
                margin-top: 50px;
            }



            .tm-icon {
                background: #0ba1d8 none repeat scroll 0 0;
                border-radius: 5px;
                color: #fff;
                line-height: 80px;
                margin: -60px auto 0;
                position: relative;
                width: 80px;
            }
            .tm-icon::after {
                -moz-border-bottom-colors: none;
                -moz-border-left-colors: none;
                -moz-border-right-colors: none;
                -moz-border-top-colors: none;
                border-color: #0ba1d8 transparent -moz-use-text-color;
                border-image: none;
                border-style: solid solid none;
                border-width: 10px 10px medium;
                bottom: -10px;
                content: "";
                display: block;
                height: 0;
                left: 50%;
                margin-left: -10px;
                position: absolute;
                width: 0;
            }
            .tm-panel-link {
                backface-visibility: hidden;
            }
            .tm-panel-link:hover .tm-icon {
                transform: translateY(5px);
                transition: all 0.1s ease-out 0s;
            }

            .uk-panel {
                display: block;
                position: relative;
                margin-bottom: 80px;
            }
            .uk-panel, .uk-panel:hover {
                text-decoration: none;
            }
            .uk-panel::after, .uk-panel::before {
                content: "";
                display: table;
            }
.parallax{
                background-image:url('./images/banner/jobfairs.jpg');
                background-attachment:fixed;
                background-size:cover;
                background-position:center;
            }
        </style>
        <script type="text/javascript" src="includes/js/ConfScripts.js"></script>
    </head>
<?php include './header.php'; ?>
    <body class="home" onload="getStates()">

       <!-- <div class="jumbotron jumbotron-sm">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-lg-12">


                        <div class="location_map col-sm-6">
                            <h2 style="color: peachpuff;" class=""> Digital Summit 2016<br><small style="color:#fff">Admin Home</small></h2>
                        </div>


                        <div class="location_map col-sm-6">  <i class="fa fa-pencil-square-o fa-5x pull-right" aria-hidden="true" ></i></div>

                    </div>
                </div>
            </div>
        </div> -->
        <section class="parallax">
            <div class="overlay">
                <div class="container">

                    <div class="row" style="margin-top:40px; margin-bottom:45px;">

                        <div class="col-sm-6 text-left">

                            <h1 style="color:#fff"><strong>Admin Home</strong></h1>
                        </div>
                        <div class="col-sm-6 text-right">
                            <ul class="breadcrumb pull-right">
                                <li><a href="./"><font color="#fff">Home</font></a></li>

                                <li class="active"><font color="#fff"><strong>Admin Home</strong></font></li>
                            </ul>
                        </div>

                    </div>

                </div></div>
        </section>
        <div class="container">
            <div class="container">
                <div class="gap" style="line-height: 50px; height: 50px;"></div>




                 <div class="row">
                    <div class="col-md-12">
                        <div class="">

                        <div class="row session-heading">
                    <div class="col-sm-12 text-center" style=""><p>Admin Home</p></div>
                </div>


                            <!--                                <div class="col-sm-4">
                           
                                                                <a href="RegistrationData.php">     <input type="button" class="btn btn-primary m-t-10" id="btnSubmit" name="btnSubmit" value="RegistartionDetails"></a>
                           
                           
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <a href="ConfContactUsData.php">  <input type="button" class="btn btn-primary m-t-10" id="btnSubmit" name="btnSubmit" value="ContactUsDetails"> </a>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <a href="JobApplicationData.php">    <input type="button" class="btn btn-primary m-t-10" id="btnSubmit" name="btnSubmit" value="JobApplicationDetails"> </a>
                                                            </div>-->
                            <div class="text-center">

                             <!--   <h3 class="" style="margin-bottom: 80px;"><strong>Get involved.</strong> This will be a great opportunity.</h3> --><br></br><br>

                                <div class="col-sm-12">
                                    <?php if($_SESSION['ses_Email']=='vkandregula@miraclesoft.com'){?>
                                    <div class="col-sm-4">
                                        <a class="uk-panel tm-panel-link" href="RegistrationData.php" style="min-height: 150.4px;">
                                            <div class="tm-icon"><i class="fa fa-2x fa-pencil-square-o" aria-hidden="true"></i></div>
                                            <h4>DS16 Registrations</h4>
                                          <!--  <p class="text-justify">Registration is now open.

                                                The Early Bird Registration ends on December 5..</p> -->
                                        </a>
                                    </div>

                                    <div class="col-sm-4">
                                        <a class="uk-panel tm-panel-link" href="ConfContactUsData.php" style="min-height: 150.4px;">
                                            <div class="tm-icon"><i class="fa fa-2x fa-envelope-o" aria-hidden="true"></i></div>
                                            <h4>ContactUsDetails</h4>
                                        <!--    <p class="text-justify" style="">If you have a question please contact us at  thedigitalsummit@miracle.org</p> -->
                                        </a>
                                    </div>
                                  
                                    <div class="col-sm-4">
                                        <a class="uk-panel tm-panel-link" href="JobApplicationData.php" style="min-height: 150.4px;">
                                            <div class="tm-icon"><i class="fa fa-2x  fa-wpforms" aria-hidden="true"></i></div>
                                            <h4>JobApplicationDetails</h4>
                                           <!-- <p class="text-justify">Attend the event to learn more about the technology & job opportunities .</p> -->
                                        </a>
                                    </div>
                                     <div class="col-sm-4 col-sm-offset-2">
                                        <a class="uk-panel tm-panel-link" href="CulturalData.php" style="min-height: 150.4px;">
                                            <div class="tm-icon"><i class="fa fa-2x  fa-wpforms" aria-hidden="true"></i></div>
                                            <h4>Cultural Registration Details</h4>
                                         <!--   <p class="text-justify">All work and no play makes jack a dull boy:) As we take a week full of exciting new technology, we will also like to provide a chance for our AP talent to showcase their cultural skills as well.</p> -->
                                        </a>
                                    </div>
                                      <div class="col-sm-4">
                                        <a class="uk-panel tm-panel-link" href="MeanhackRegistrationData.php" style="min-height: 150.4px;">
                                            <div class="tm-icon"><i class="fa fa-2x  fa-wpforms" aria-hidden="true"></i></div>
                                            <h4>MeanHack Registration Details</h4>
                                       <!--     <p class="text-justify">MEANHack ’16 will be held at Miracle Heights, Rushikonda which is Miracle’s APAC HQ. Situated on a beautiful hill, with a beautiful view of the Bay of Bengal, you will be treated with a free-style and innovation-encouraging environment. You can choose your area in the location to work, make sure to choose the best for your team!</p> -->
                                        </a>
                                    </div>
 <?php } else {?>
                                    <div class="col-sm-4">
                                        <a class="uk-panel tm-panel-link" href="JobApplicationData.php" style="min-height: 150.4px;">
                                            <div class="tm-icon"><i class="fa fa-2x  fa-wpforms" aria-hidden="true"></i></div>
                                            <h4>JobApplicationDetails</h4>
                                           <!-- <p class="text-justify">Attend the event to learn more about the technology & job opportunities .</p> -->
                                        </a>
                                    </div>
                                    
                                     
                                    <?php }?>
                                </div>

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