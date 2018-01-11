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


        <link rel="stylesheet" href="../../css/font-awesome.min.css" type="text/css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3./includes/cssfont-awesome.min.css">
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="../includes/css/selectivity-full.css">


        <?php include '../context.php'; ?>

        <?php
        ?>

        <style>

            .current_tab11{
                color:#53bce8 !important;
            }

            .current_tab10{
                color:#53bce8 !important;
            }
            div.table-title {
                display: block;
                margin: auto;
                max-width: 600px;
                padding:5px;
                width: 100%;
            }

            .table-title h3 {
                color: #fafafa;

                font-weight: 400;
                font-style:normal;
                font-family: "Roboto", helvetica, arial, sans-serif;
                text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
                text-transform:uppercase;
            }



            .table-fill {
                background: white;
                border-radius:3px;
                border-collapse: collapse;
                height: 320px;
                margin: auto;
                max-width: 100%;
                padding:5px;
                width: 100%;
                box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
                animation: float 5s infinite;
                text-align: center !important;
            }

            th {
                color:#D5DDE5;
                background:#1b1e24;
                border-bottom:4px solid #9ea7af;
                border-right: 1px solid #343a45;
                font-size:18px;
                font-weight: 100;
                padding:24px;

                text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
                vertical-align:middle;
            }

            th:first-child {
                border-top-left-radius:3px;
            }

            th:last-child {
                border-top-right-radius:3px;
                border-right:none;
            }

            tr {
                border-top: 1px solid #C1C3D1;
                border-bottom-: 1px solid #C1C3D1;
                color:#666B85;
                font-size:16px;
                font-weight:normal;
                text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);
            }

            tr:hover td {
                background:#4E5066;
                color:#FFFFFF;
                border-top: 1px solid #22262e;
                border-bottom: 1px solid #22262e;
            }

            tr:first-child {
                border-top:none;
            }

            tr:last-child {
                border-bottom:none;
            }

            tr:nth-child(odd) td {
                background:#EBEBEB;
            }

            tr:nth-child(odd):hover td {
                background:#4E5066;
            }

            tr:last-child td:first-child {
                border-bottom-left-radius:3px;
            }

            tr:last-child td:last-child {
                border-bottom-right-radius:3px;
            }

            td {
                background:#FFFFFF;
                padding:20px;

                vertical-align:middle;
                font-weight:300;
                font-size:18px;
                text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
                border-right: 1px solid #C1C3D1;
            }

            td:last-child {
                border-right: 0px;
            }



            th.text-center {
                text-align: center;
            }

            th.text-right {
                text-align: right;
            }



            td.text-center {
                text-align: center;
            }

            td.text-right {
                text-align: right;
            }

            .description{
                padding:30px;



            }

            .agenda-date { width: 170px; }
            .dayofmonth {
                width: 40px;
                font-size: 36px;
                line-height: 36px;
                float: left;
                text-align: right;
                margin-left: 10px; 
            }

            .agenda .agenda-date .shortdate {
                font-size: 0.75em; 
            }




            .lib-panel {
                margin-bottom: 20Px;
            }
            .lib-panel img {
                width: 100%;
                background-color: transparent;
            }

            .lib-panel .row,
            .lib-panel .col-md-6 {
                padding: 0;
                background-color: #FFFFFF;
            }


            .lib-panel .lib-row {
                padding: 0 20px 0 20px;
            }

            .lib-panel .lib-row.lib-header {
                background-color: #FFFFFF;

                padding: 0px 20px 0 20px;
            }
            h2{
                margin-top:0 !important;
            }
            .lib-panel .lib-row.lib-header .lib-header-seperator {
                height: 2px;
                width: 26px;
                background-color: #d9d9d9;
                margin: 7px 0 7px 0;
            }

            .lib-panel .lib-row.lib-desc {
                position: relative;
                height: 100%;
                display: block;
                font-size: 13px;
            }
            .lib-panel .lib-row.lib-desc a{
                position: absolute;
                width: 100%;
                bottom: 10px;
                left: 20px;
            }

            .row-margin-bottom {
                margin-bottom: 20px;
            }

            .box-shadow {
                -webkit-box-shadow: 0 0 10px 0 rgba(0,0,0,.10);
                box-shadow: 0 0 10px 0 rgba(0,0,0,.10);
            }

            .no-padding {
                padding: 0;
            }


            .lib-img-show{
                width:200px;
                height: 200px;
            }

            .lib-header{
                font-weight: bold;
            }

            .parallax{
                background-image:url('../images/culturals/culturals-paralx.jpg');
                background-attachment:fixed;
                background-size:cover;
                background-position:center;
            }
        </style>
        <script>
//            $(document).ready(function(){
//                $(".current_tab1 >  a").css("color","#333");
//              
//                $(".current_tab8").css("color","#53bce8");
//                $("#schedule_tab").addClass(".current_tab8");
//                 
//            });        
        </script>
        <script type="text/javascript" src="includes/js/ConfScripts.js"></script>
    </head>
    <?php include '../header.php'; ?>
    <body class="home" onload="getStates()">

        <section class="parallax">
            <div class="overlay">
                <div class="container">

                    <div class="row" style="margin-top:40px; margin-bottom:45px;">

                        <div class="col-sm-6 text-left">

                            <h1 style="color:#fff"><strong>Culturals</strong></h1>
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
        <div class="gap" style="line-height: 50px; height: 30px;"></div>
        <div class="container">

            <h3>Digital Summit will showcase some of the finest performances, illustrious artists and a program remarkably wonder.</h3>

            <hr>
            <div class="row row-margin-bottom">
                <div data-category="view" class="col-md-5 lib-item">
                    <div class="lib-panel">
                        <div class="row box-shadow">
                            <a href="<?= url ?>/schedule/cultural-registration.php">
                                <div class="col-md-6">
                                    <img src="../images/cultural01.png" class="lib-img-show">
                                </div>
                                <div class="col-md-6">
                                    <h4 class="lib-row lib-header">
                                        Dance competition
                                        <div class="lib-header-seperator"></div>
                                    </h4>
                                    <div class="lib-row lib-desc">
                                        Can’t wait to rock and roll to the rhythm of the music? Then, switch yourselves to the dancing battlefield where you get a chance to flaunt your talent.
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div data-category="ui" class="col-md-5 no-padding lib-item">
                    <div class="lib-panel">
                        <div class="row box-shadow">
                            <a href="<?= url ?>/schedule/cultural-registration.php">
                                <div class="col-md-6">
                                    <img src="../images/cultural02.png" class="lib-img-show">
                                </div>
                                <div class="col-md-6">
                                    <h4 class="lib-row lib-header">
                                        Singing
                                        <div class="lib-header-seperator"></div>
                                    </h4>
                                    <div class="lib-row lib-desc">
                                        Let’s get the music notes and pair it up with your sweet voice to deliver a melodious song. Do you have the talent in singing? Then, get ready for a music combat.
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row row-margin-bottom">
                <div data-category="view" class="col-md-5 no-padding lib-item">
                    <div class="lib-panel">
                        <div class="row box-shadow">
                            <a href="<?= url ?>/schedule/cultural-registration.php">
                                <div class="col-md-6">
                                    <img src="../images/cultural03.png" class="lib-img-show">
                                </div>
                                <div class="col-md-6">
                                    <h4 class="lib-row lib-header">
                                        Instrumental / Mimicry
                                        <div class="lib-header-seperator"></div>
                                    </h4>
                                    <div class="lib-row lib-desc">
                                        The platform is all set to showcase your talent of mimicry and playing instruments. Do you possess the skill? So, why the wait? Join the field and show your flair.
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div data-category="ui" class="col-md-5 no-padding lib-item">
                    <div class="lib-panel">
                        <div class="row box-shadow">
                            <a href="<?= url ?>/schedule/cultural-registration.php">
                                <div class="col-md-6">
                                    <img src="../images/cultural04.png" class="lib-img-show">
                                </div>
                                <div class="col-md-6">
                                    <h4 class="lib-row lib-header">
                                        Classical dance
                                        <div class="lib-header-seperator"></div>
                                    </h4>
                                    <div class="lib-row lib-desc">
                                        Are you a classical icon? Then, Join this special event to sprinkle pleasantness and gracefulness of the classical dance with some delightful traditional music.
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <h3>The Competitions are as scheduled:</h3>

            <div class="row">
                <div class="col-sm-12">
                    <table class="table-fill">
                        <thead>
                            <tr>
                                <th class="text-center "><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;Date</th>
                                <th class="text-center "><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;Timings</th>
                                <th class="text-center "><i class="fa fa-bookmark-o" aria-hidden="true"></i>&nbsp;Event name</th>
                                <th class="text-center "><i class="fa fa-map" aria-hidden="true"></i>&nbsp;Location</th>
                            </tr>
                        </thead>
                        <tbody class="table-hover">
                            <tr>
                                <td class=" ">December, 13th</td>
                                <td class=" ">5:30PM to 7:30PM</td>
                                <td class=" ">Singing</td>
                                <td class=" ">AU convocation Hall</td>
                            </tr>
                            <tr>
                                <td class=" ">December, 14th</td>
                                <td class=" ">5:30PM to 7:30PM</td>
                                <td class=" ">Classical / Folk Dancing</td>
                                <td class=" ">AU convocation Hall</td>
                            </tr>
                            <tr>
                                <td class=" ">December, 15th</td>
                                <td class=" ">5:30PM to 7:30PM</td>
                                <td class=" ">Group Dance / Solo</td>
                                <td class=" ">AU convocation Hall</td>
                            </tr>
                            <tr>
                                <td class="">December, 16th</td>
                                <td class=" ">5:30PM to 7:30PM</td>
                                <td class=" ">Instrumental / Mimicry</td>
                                <td class=" ">AU convocation Hall</td>
                            </tr>
        <!--                                    <tr>
                                <td class="text-left">December, 17th</td>
                                <td class="text-left">5:30PM to 7:30PM</td>
                                <td class="text-left">₦20000</td>
                            </tr>-->
                        </tbody>
                    </table>
                </div>
            </div>

            <div class=" description">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="alert-info" style="overflow: hidden">
                            <center> <h4 class="methodText">
                                    <br>            There are several Cultural Events / Competitions that are being help between all the Various Colleges and IT &amp; ITES Companies.<br>Folks can enjoy a day of  music and dance performances, find something special at the  stalls.   
                                    <br>
                                    All the Best Artists along with Commercial Artists will be performing on stage and will receive the awards on that day.
                                </h4>
                                <br>
                                <a href="<?= url ?>/schedule/cultural-registration.php" class="btn btn-info btn-cons">  Register Now!</a>

                            </center>
                            <br>

                        </div>    
                    </div>
                </div>
            </div>
        </div>
        <div style="clear:both;" class="clearfix"></div>

        <!-- /Header -->

        <!-- Intro -->


        <!-- Social links. @TODO: replace by link/instructions in template -->

        <!-- /social links -->
        <div class="uparrow" id="uparrow"><i class="fa fa-3x fa-angle-up" aria-hidden="true"></i></div>



        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>



        <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.4/waypoints.min.js"></script>



        <!--animate_end-->




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
