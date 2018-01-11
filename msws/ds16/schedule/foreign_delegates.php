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
        <title>Digital Valley Summit</title>
<!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->


        <?php include '../context.php'; ?>


    </head>
    <?php include '../header.php'; ?>
    <style>

        .current_tab3 >  a{
            color:#53bce8 !important;
        }

        .bs-calltoaction{
            position: relative;
            width:auto;
            padding: 15px 25px;
            border: 1px solid black;
            margin-top: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
        }

        .bs-calltoaction > .row{
            display:table;
            width: calc(100% + 30px);
        }

        .bs-calltoaction > .row > [class^="col-"],
        .bs-calltoaction > .row > [class*=" col-"]{
            float:none;
            display:table-cell;
            vertical-align:middle;
        }

        .cta-contents{
            padding: 10px 23px;
            height: 137px;
        }

        .cta-title{
            margin: 0 auto 15px;
            padding: 0;
        }

        .cta-desc{
            padding: 0;
        }

        .cta-desc p:last-child{
            margin-bottom: 0;
        }

        .cta-button{
            padding-top: 10px;
            padding-bottom: 10px;
        }

        @media (max-width: 991px){
            .bs-calltoaction > .row{
                display:block;
                width: auto;
            }

            .bs-calltoaction > .row > [class^="col-"],
            .bs-calltoaction > .row > [class*=" col-"]{
                float:none;
                display:block;
                vertical-align:middle;
                position: relative;
            }

            .cta-contents{
                text-align: center;
            }
        }



        .bs-calltoaction.bs-calltoaction-default{
            color: #333;
            background-color: #fff;
            border-color: #ccc;
        }

        .bs-calltoaction.bs-calltoaction-primary{
            color: #286090;
            /*color: #fff;*/
            background-color: rgba(51, 122, 183, 0.25);
            /*background-color: #337ab7;*/
            border-color: #2e6da4;
        }

        .bs-calltoaction.bs-calltoaction-info{
            color: #31b0d5;
            /*color: #fff;*/
            background-color: rgba(91, 192, 222, 0.25);
            /*background-color: #5bc0de;*/
            border-color: #46b8da;
        }

        .bs-calltoaction.bs-calltoaction-success{
            /*color: #fff;*/
            color: #449d44;
            /*background-color: #5cb85c;*/
            background-color: rgba(92, 184, 92, 0.25);
            border-color: #4cae4c;
        }

        .bs-calltoaction.bs-calltoaction-warning{
            /*color: #fff;*/
            color: #d58512;
            /*background-color: #f0ad4e;*/
            background-color: rgba(240, 173, 78, 0.25);
            border-color: #eea236;
        }

        .bs-calltoaction.bs-calltoaction-danger{
            color: #c9302c;
            /*color: #fff;*/
            background-color: rgba(217, 83, 79, 0.25);
            /*background-color: #d9534f;*/
            border-color: #d43f3a;
        }


        /*
                    .cta-contents:after {
                        content: '';
                        position: absolute;
                        left: 100%;
                        top: 50%;
                        margin-top: -13px;
                        border-left: 0;
                        border-bottom: 13px solid transparent;
                        border-top: 13px solid transparent;
                        border-left: 10px solid #5A55A3;
                    }
        
        */


        .call :before {
            content: " ";
            display: block;
            width: 0;
            height: 0;
            border-top: 50px solid transparent;
            border-bottom: 50px solid transparent;
            border-left: 30px solid white;
            position: absolute;
            top: 50%;
            margin-top: -50px;
            margin-left: 1px;
            left: 100%;
            z-index: 1;
        }

        .step_2 :after {
            content: " ";
            display: block;
            width: 0;
            height: 0;
            border-top: 50px solid transparent;
            border-bottom: 50px solid transparent;
            border-left: 30px solid #3386C2;
            position: absolute;
            top: 50%;
            margin-top: -50px;
            left: 100%;
            z-index: 2;
        }


        .step_1 :after {
            content: " ";
            display: block;
            width: 0;
            height: 0;
            border-top: 50px solid transparent;
            border-bottom: 50px solid transparent;
            border-left: 30px solid #ccc;
            position: absolute;
            top: 50%;
            margin-top: -50px;
            left: 100%;
            z-index: 2;
        }



        .step_1{
            background: #ccc;
        }

        .step_3 :after {
            content: " ";
            display: block;
            width: 0;
            height: 0;
            border-top: 50px solid transparent;
            border-bottom: 50px solid transparent;
            border-left: 30px solid #39B3D7;
            position: absolute;
            top: 50%;
            margin-top: -50px;
            left: 100%;
            z-index: 2;
        }

        .step_3{
            border: 1px solid #39B3D7;background:#39B3D7;color:#fff;

        }


        .step_4 :after {
            content: " ";
            display: block;
            width: 0;
            height: 0;
            border-top: 50px solid transparent;
            border-bottom: 50px solid transparent;
            border-left: 30px solid #47A447;
            position: absolute;
            top: 50%;
            margin-top: -50px;
            left: 100%;
            z-index: 2;
        }

        .step_4{
            border: 1px solid #47A447;background:#47A447;color:#fff;

        }

        .step_5 :after {
            content: " ";
            display: block;
            width: 0;
            height: 0;
            border-top: 50px solid transparent;
            border-bottom: 50px solid transparent;
            border-left: 30px solid #ED9C28;
            position: absolute;
            top: 50%;
            margin-top: -50px;
            left: 100%;
            z-index: 2;
        }

        .step_5{
            border: 1px solid #ED9C28;background:#ED9C28;color:#fff;

        }

        .step_6 :after {
            content: " ";
            display: block;
            width: 0;
            height: 0;
            border-top: 50px solid transparent;
            border-bottom: 50px solid transparent;
            border-left: 30px solid #D2322D;
            position: absolute;
            top: 50%;
            margin-top: -50px;
            left: 100%;
            z-index: 2;
        }

        .step_6{
            border: 1px solid #D2322D;background:#D2322D;color:#fff;

        }

        .cta-title{
            text-align: center;
        }

        .cta-desc{
            white-space: nowrap;
            width: 179px;
        }

        .box {
            border-radius: 3px;
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
            display: block;
            margin: 0 14px;
            padding: 10px;

        }

        .box_layout{
            margin-left:5%;
        }




        /*
* See it in action here: http://jsfiddle.net/seydoggy/6s92p51a/
        */
        .panel-table {
            display:table;
        }
        .panel-table > .panel-heading {
            display: table-header-group;
            background: transparent;
        }
        .panel-table > .panel-body {
            display: table-row-group;
        }
        .panel-table > .panel-body:before,
        .panel-table > .panel-body:after {
            content:none;
        }
        .panel-table > .panel-footer {
            display: table-footer-group;
            background: transparent;
        }
        .panel-table > div > .tr {
            display: table-row;
        }
        .panel-table > div:last-child > .tr:last-child > .td {
            border-bottom: none;
        }
        .panel-table .td {
            display: table-cell;
            padding: 15px;
            border: 1px solid #ddd;
            border-top: none;
            border-left: none;
        }
        .panel-table .td:last-child {
            border-right: none;
        }
        .panel-table > .panel-heading > .tr > .td,
        .panel-table > .panel-footer > .tr > .td {
            background-color: #f5f5f5;
        }
        .panel-table > .panel-heading > .tr > .td:first-child {
            border-radius: 4px 0 0 0;
        }
        .panel-table > .panel-heading > .tr > .td:last-child {
            border-radius: 0 4px 0 0;
        }
        .panel-table > .panel-footer > .tr > .td:first-child {
            border-radius: 0 0 0 4px;
        }
        .panel-table > .panel-footer > .tr > .td:last-child {
            border-radius: 0 0 4px 0;
        }

        .fa-rotate-45 {
            -webkit-transform: rotate(90deg);
            -moz-transform: rotate(90deg);
            -ms-transform:rotate(90deg);
            -o-transform: rotate(90deg);
            transform: rotate(90deg);


        }

        .fa-plane{
            color:#39B3D7;
        }


        .jumbotron {

            color: #FFF;
            border-radius: 0px;
        }
        .jumbotron-sm { padding-top: 10px;
                        padding-bottom: 10px; }
        .jumbotron small {
            color: #FFF !important;
        }
        .h1 small {
            font-size: 24px !important;
        }

        .parallax{
            background-image:url('../images/banner/us-customers.png');
            background-attachment:fixed;
            background-size:cover;
            background-position:center;
        }
    </style>
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

                            <h1 style="color:#fff"><strong>Foreign Delegates</strong></h1>
                        </div>
                        <div class="col-sm-6 text-right">
                            <ul class="breadcrumb pull-right">
                                <li><a href="../"><font color="#fff">Home</font></a></li>

                                <li class="active"><font color="#fff"><strong>Foreign Delegates</strong></font></li>
                            </ul>
                        </div>

                    </div>

                </div></div>
        </section>

        <div class="container">
            <div class="col-sm-12">
                <div class="bs-calltoaction bs-calltoaction-success">
                    <div class="row">
                        <div class="col-md-2 cta-contents step_4" style="">
                            <h4 class="cta-title">   <i class="fa fa-2x fa-check-circle" aria-hidden="true"></i></h4>
                            <div class="cta-desc">
                                <p><b>Step 1:</b>Register</p>

                            </div>
                        </div>
                        <div class="col-md-10 cta-button">
                            <!--                            <a href="#" class="btn btn-lg btn-block btn-success">Go for It!</a>-->

                            <div  class="box_layout">
                                <div>

                                    <a href="#">     Click Here To Register  for Digital Summit 2016 </a>
                                    <h4 style="color: #000">  (OR)</h4>
                                </div>

                                <div>

                                    Inform One of Miracle Software Sales Reps about your interest and they will do your registration.
                                    <h4 style="color: #000">  (OR)</h4>
                                </div>  
                                <div>

                                    Send an email to  <a class="linkText" href="mailto:corporate@miraclesoft.com ">corporate@miraclesoft.com</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div> 



                <div class="bs-calltoaction bs-calltoaction-primary">
                    <div class="row">
                        <div class="col-md-2 cta-contents step_2" style="border: 1px solid #3386C2;background:#3386C2;color:#fff">
                            <h4 class="cta-title">  <i class="fa fa-2x fa-cc-visa" aria-hidden="true"></i></h4>
                            <div class="cta-desc">
                                <p><b>Step 2:</b> Visa to India</p>

                            </div>
                        </div>
                        <div class="col-md-10 cta-button">
                            <div  class="box_layout">

                                If you already have a valid Visa to visit India, please skip to step 2.<br>
                                If you do not have a valid Visa to visit India:<br>
                                You will need a passport that is valid for at least 6 months<br>
                                Apply for a 10-year Tourist eVisa using the following link:<br>
                                <a href="https://indianvisaonline.gov.in/visa/info1.jsp">https://indianvisaonline.gov.in/visa/info1.jsp</a><br>



                               	For more information about the Visa, go to<b>:</b><br> <a href="http://www.indianvisaonline.gov.in">http://www.indianvisaonline.gov.in</a>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="bs-calltoaction bs-calltoaction-info">
                    <div class="row">
                        <div class="col-md-2 cta-contents step step_3" style="">
                            <h4 class="cta-title">  <i class="fa  fa-2x fa-taxi" aria-hidden="true"></i></h4>
                            <div class="cta-desc">
                                <p><b>Step 3:</b> Book your Travel</p>

                            </div>
                        </div>
                        <div class="col-md-10 cta-button">
                            <!--                            <a href="#" class="btn btn-lg btn-block btn-info">Go for It!</a>-->
                            <div  class="box_layout">
                                Book you flight to either Bombay or Delhi, starting on Saturday, December 10th and you will arrive in India on the night of the 11th. On Monday, December 12th, we have people traveling to Visakhapatnam (airport code: VTZ). Several airlines are available for this: Jet Airways, Indigo, Spicejet, etc.<br>

                                <button type="button" class="btn btn-info btn-sm pull-right" data-toggle="modal" data-target="#myModal">Sample Itinerary</button>

                            </div>
                        </div>
                    </div>
                </div> 

                <div class="modal fade in" id="myModal" role="dialog" aria-hidden="false">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">×</button>
                                <h4 class="modal-title">Sample Itinerary</h4>
                            </div>
                            <div class="modal-body">
                                <div class=" "><div class="row"><div class="col-xs-12" style="overflow-x:auto;margin:0 2%;width:92%;">

                                            <!--
                                                The idea is to use mostly Bootstrap markup,
                                                peppered with a few "tr" and "td" classes,
                                                
                                            -->
                                            <div class="panel panel-default panel-table col-sm-12" style="padding:0">
                                                <div class="panel-heading">
                                                    <div class="tr">
                                                        <div class="td">Route </div>
                                                        <div class="td"><i class="fa fa-plane fa-1x" aria-hidden="true"></i>&nbsp;&nbsp;Start</div>
                                                        <div class="td"><i class="fa fa-plane  fa-1x fa-rotate-90" aria-hidden="true"></i>&nbsp;&nbsp;Reach By</div>
                                                    </div>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="tr">
                                                        <div class="td">DTW to AMS</div>
                                                        <div class="td">Dec,10th, 20:55PM</div>
                                                        <div class="td">Dec,11th,8:00AM</div>
                                                    </div>
                                                    <div class="tr">
                                                        <div class="td">AMS to BOM</div>
                                                        <div class="td">Dec,11th, 10:00AM</div>
                                                        <div class="td">Dec,11th,11:45PM</div>
                                                    </div><div class="tr">
                                                        <div class="td">BOM to VTZ</div>
                                                        <div class="td">Dec,12th, 10:00AM</div>
                                                        <div class="td">Dec,12th,13:00PM</div>
                                                    </div>

                                                    <div class="tr">
                                                        <div class="td">VTZ to BOM</div>
                                                        <div class="td">Dec,14th,18:45PM</div>
                                                        <div class="td">Dec,14th,21:00PM</div>
                                                    </div>
                                                    <div class="tr">
                                                        <div class="td">BOM to AMS</div>
                                                        <div class="td">Dec,15th,01:45AM	</div>
                                                        <div class="td">Dec,15th,07:00AM</div>
                                                    </div>
                                                    <div class="tr">
                                                        <div class="td">AMS to DTW</div>
                                                        <div class="td">Dec,15th,10:00AM	</div>
                                                        <div class="td">Dec,15th,13:30PM</div>
                                                    </div>

                                                </div>

                                            </div>

                                        </div></div></div>

                            </div>

                        </div>

                    </div>
                </div>


                <div class="bs-calltoaction bs-calltoaction-default">
                    <div class="row">
                        <div class="col-md-2 cta-contents step_1" style="border: 1px solid #ccc;">

                            <h4 class="cta-title">  <i class="fa  fa-2x fa-map-signs" aria-hidden="true"></i></h4>
                            <div class="cta-desc">
                                <p><b>Step 4:</b> Inform our Sales</p>

                            </div>
                        </div>
                        <div class="col-md-10 cta-button">
                            <div  class="box_layout">
                                <!--                            <a href="#" class="btn btn-lg btn-block btn-default">Go for It!</a>-->
                                Please inform one of our sales representatives about your travel plans for assistance with hotel accommodations and reservations in Bombay / Delhi and also for assistance with your travel from Bombay / Delhi to Visakhapatnam.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bs-calltoaction bs-calltoaction-warning">
                    <div class="row">
                        <div class="col-md-2 cta-contents step_5" style="">
                            <h4 class="cta-title"> <i class="fa  fa-2x fa-bed" aria-hidden="true"></i></h4>
                            <div class="cta-desc">
                                <p><b>Step 5:</b> Hotel Reservations</p>

                            </div>
                        </div>
                        <div class="col-md-10 cta-button">
                            <!--                            <a href="#" class="btn btn-lg btn-block btn-warning">Go for It!</a>-->
                            <div  class="box_layout">
                                <b>  The Official Hotels are as follows:</b><br>
                                <a href="http://www.novotel.com/gb/hotel-7535-novotel-visakhapatnam-varun-beach/index.shtml" target='_blank'> Novotel – 5 Star Hotel</a> - &thinsp;<i class="fa fa-phone-square" aria-hidden="true"></i><a>011–91-94409121212</a> &thinsp;<i class="fa fa-globe" aria-hidden="true"></i>:<a href="http://www.novotel.com/gb/hotel-7535-novotel-visakhapatnam-varun-beach/index.shtml" target='_blank'>Novotel</a><br>
                                <a href="http://www.starwoodhotels.com/fourpoints/property/overview/index.html?propertyID=3580" target='_blank'> Four Points by Sheraton – 5 Star Hotel</a> - &thinsp;<i class="fa fa-phone-square" aria-hidden="true"></i><a>011–91-9440803912</a> &thinsp;<i class="fa fa-globe" aria-hidden="true"></i>:<a href="http://www.starwoodhotels.com/fourpoints/property/overview/index.html?propertyID=3580">Four Points by Sheraton</a>


                            </div>
                        </div>
                    </div>
                </div> 

                <div class="bs-calltoaction bs-calltoaction-danger">
                    <div class="row">
                        <div class="col-md-2 cta-contents step_6" style="">
                            <h4 class="cta-title"> <i class="fa  fa-2x fa-user-md" aria-hidden="true"></i></h4>
                            <div class="cta-desc">
                                <p><b>Step 6:</b> Immunizations</p>

                            </div>
                        </div>
                        <div class="col-md-10 cta-button">
                            <!--                            <a href="#" class="btn btn-lg btn-block btn-danger">Go for It!</a>-->
                            <div  class="box_layout">
                                Go to your doctor and get your vaccinations as early as possible.&nbsp;<i class="fa fa-globe" aria-hidden="true"></i>:<a href="http://www.webmd.com/vaccines/vaccines-for-travel-to-india#1" target='_blank'>More info</a>
                            </div>
                        </div>
                    </div>
                </div> 

            </div>
        </div>


        <div class="uparrow" id="uparrow" style="z-index:999"><i class="fa fa-3x fa-angle-up" aria-hidden="true"></i></div>



        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>



        <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.4/waypoints.min.js"></script>





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
