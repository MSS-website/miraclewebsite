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
        <title>Digital Summit</title>

       
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
                font-size:23px;
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
            .h2-text{
                color:#00aae7;
                font-weight:bold;
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
               
                <li class="active"><font color="#fff">Culturals</font></li>
            </ul>
          </div>
         
        </div>
        
            </div></div>
        </section>
        <div class="gap" style="line-height: 50px; height: 30px;"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                <p class="methodText">
                    <strong>All work and no play makes jack a dull boy:)</strong> As we took a week full of exciting new technologies, we also provided a chance for our AP talent to showcase their cultural skills. From Mimicry to Dance, Singing to Magic – we encouraged every talent in our state for few hours of relaxation through <strong>Hungama@Digital Summit ’16 at AU Convocation Hall, Visakhapatnam</strong>.

                </p>
                <!--
                <br>
                               <a href="<?= url ?>/schedule/cultural-registration.php"><button type="button" class="btn  col-sm-12 btn-info">Register and Audition Today!</button></a> -->
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-12">
                     <p class="methodText">
                   The initial rounds of the competition took place from <strong>December 13th, 14th and 15th</strong> and the final round was held with <strong>Celebration Night!</strong> extravaganza on <strong>December 17th, 2016</strong>. The top 3 outstanding  performers were awarded in the competition.

               </p>
                </div>
            </div>
<br>
            <div class="row">
                <div class="col-sm-12">
                <center>
                <div class="col-sm-4">
                
                    <img src="../images/culturals/sing.png" width="150" height="150" class="img-responsive" alt="Singing" title="Singing">
                   <br> 
                    <h4 style="color:#0d416b"><strong>Singing</strong></h4>
                   
                </div>
                </center>
                <center>
                <div class="col-sm-4">
                    <img src="../images/culturals/dance2.png" width="150" height="150" class="img-responsive" alt="Solo Performance" title="Solo Performance">
                  <br>  
                  <h4 style="color:#0d416b"><strong>Solo Performance</strong></h4>
                 
                </div>
                </center>
                <center>
                <div class="col-sm-4">
                    <img src="../images/culturals/dance.png" width="150" height="150" class="img-responsive" alt="Group Dance" title="Group Dance">
                   <br> 
                   <h4 style="color:#0d416b"><strong>Group Dance </strong></h4> 
                </div>
                </center>
            </div>
            </div>
            <br>
            <!--- row2 --->
            <div class="div">
                <div class="col-sm-12">
                    <center>
                    <div class="col-sm-4">
                         <img src="../images/culturals/dance1.png" width="150" height="150" class="img-responsive" alt="Dance" title="Dance">
                   <br> 
                   <h4 style="color:#0d416b"><strong> Dance </strong></h4> 
                    </div>
                    <div class="col-sm-4">
                         <img src="../images/culturals/mimicry.png" width="150" height="150" class="img-responsive" alt="Mimicry" title="Mimicry">
                   <br> 
                   <h4 style="color:#0d416b"><strong>Mimicry </strong></h4> 
                    </div>
                    <div class="col-sm-4">
                         <img src="../images/culturals/instrument.png" width="150" height="150" class="img-responsive" alt="Instrumental" title="Instrumental">
                   <br> 
                   <h4 style="color:#0d416b"><strong>Instrumental</strong></h4>
                    </div>
                    </center>
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
