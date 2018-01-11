<!-- 
/* ******************************************************************************
*
* Project : The Digital Valley Summit V1
*
* Date    : October10,2016
*
* Author  : Corporate Applicaiton Support Team<hubble@miraclesoft.com>
*
* File    : header.php
*
* Copyright 2016 Miracle Software Systems, Inc. All rights reserved.
* MIRACLE SOFTWARE PROPRIETARY/CONFIDENTIAL. Use is subject to license terms.
*
* *****************************************************************************
*/
-->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport"    content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author"      content="Shankar">
        <meta content="miraclesoft, education,  industry,  IT,industries, " name="keywords"/>
        <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="" type="image/x-icon">
        <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
        <link rel="stylesheet" href="<?= url ?>/includes/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= url ?>/includes/css/font-awesome.min.css"> 


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- Stylesheets -->
        <!--<link rel="stylesheet" href="assets/css/reset.css" />-->
        <link rel="stylesheet" href="<?= url ?>/includes/css/styles.css" />

        <!-- Custom styles for our template -->
        <link rel="stylesheet" href="<?= url ?>/includes/css/bootstrap-theme.css" media="screen" >
        <link rel="stylesheet" href="<?= url ?>/includes/css/main.css">
        <link rel="stylesheet" href="<?= url ?>/includes/css/animate.min.css">

        <link rel="stylesheet" href="<?= url ?>/includes/css/customstyle.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
         <script src="<?= url ?>/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?= url ?>/includes/js/generalScript.js"></script>
        <script type="text/javascript" src="<?= url ?>/includes/js/countdown.js"></script> 
        <link rel="stylesheet" href="<?= url ?>/includes/css/style.css">
        <link rel="stylesheet" href="<?= url ?>/includes/css/mainStyle.css">
        <script   type="text/javascript" src="<?= url ?>/includes/js/selectivity-full.min.js"></script>
        <script type="text/javascript" src="<?= url ?>/includes/js/jquery.matchHeight.js"></script> 
        <style>
            .btn-danger{
/*                font-size:12px !important;*/
                background-color: #D53058  !important;

            }
            .navbar-inverse{
                border-color: #fff !important;
            }
            .current_tab6 :hover{
                background-color: tomato  !important;
                color:#fff !important;
            }

            .current_tab6{

                color:#fff !important;
            }
            .btn-cons :hover{
                border:1px solid #5FBAE9;

            }

            .navbar-nav .dropdown-menu > li > a{
                color:#333;
            }

            .nav ul li > a:hover{
                color:#333 !important;
            }

            .btn-info.active{background-color:#00aae7;border-color:#46b8da}
            
            .btn-info{color:#fff;background-color:#00aae7;border-color:#46b8da}
            
            .btn-info:hover{
                background-color:#0D416D;
            }
           
        </style>
 

        <title></title>
    </head>
    <body>
        <div class="navbar navbar-inverse" >
            <div>
                <div class="navbar-header">
                    <!-- Button for smallest screens -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    <a class="navbar-brand" href="<?= url ?>/index.php"><img src="<?= url ?>/images/apcloud-Logo-v1.png"  height="80" alt="LOGO"></a>
                </div>
                <div class="navbar-collapse collapse col-sm-8 pull-right">
                    <ul class="nav navbar-nav pull-right">
                        <li class="current_tab" id="homeLink"><a href="<?= url ?>/index.php">Home</a></li>
                        <!--                        <li class="dropdown">
                                                    <a href=""  class="dropdown-toggle" data-toggle="dropdown">ABOUT&nbsp;US <b class="caret"></b></a>
                                                    <ul class="dropdown-menu">
                                                        <li class="active"><a href="aboutUs.html">About miracle</a></li>
                        
                        
                                                    </ul>
                                                </li>-->

                        <li class="dropdown current_tab1" >
                            <a class="dropdown-toggle current_tab10" id="schedule_tab">Schedule <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                 <li class="current_tab1"><a href="<?= url ?>/schedule/agenda.php"><strong>Digital Summit</strong></a></li> 

                                <li ><a class="current_tab8" href="<?= url ?>/jobfair/job_fair.php"><strong>Digital Job Fair</strong></a></li>  
                                <li ><a class="current_tab11" href="<?= url ?>/schedule/culturals.php"><strong>Culturals</strong></a></li> 
                               
                                <li class="current_tab12"><a  href="<?= url ?>/meanhack"><strong>MEANHack</strong></a></li> 
                               
                                
                                
                            </ul>
                        </li>
                        
                        <li class="dropdown current_tab_techtalks" >
                            <a class="dropdown-toggle" id="schedule_tab">TechTalk  <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                 <li ><a class="current_tab_Innovation" href="<?= url ?>/TechTalks/InnovationSummit.php"><strong>Innovation Summit</strong></a></li>  
                                  <li ><a class="current_tab_microsoft"  href="<?= url ?>/TechTalks/microsoft-techtalks.php"><strong>Microsoft TechTalks</strong></a></li> 
                                <li><a class="current_tab_ibm" href="<?= url ?>/TechTalks/IBM-innovation-summit.php"><strong>IBM Innovation Summit</strong></a></li>  
                            </ul>
                        </li>
                        
                        
                          <li class="current_tabvenu"><a  href="<?= url ?>/schedule/summit-venues.php">Venues</a></li> 
                        <li class="dropdown current_tab3" >
                            <a href="<?= url ?>/schedule/foreign_delegates.php" >US Customers</a>
                            <!--                                                        <ul class="dropdown-menu">
                                                                                        <li class="active"><a href="#">Foreign Buyer Details</a></li>
                                                                                        <li class="active"><a href="#">Confirmation Form</a></li>
                                                                                         <li class="active"><a href=""></a></li>
                                                                                          <li class="active"><a href=""></a></li>
                                                                                           <li class="active"><a href=""></a></li> 
                                                        
                                                        
                                                                                    </ul>-->
                        </li>

                        <!--  <li><a href="#">EXHIBITOR</a></li> -->

                        <!--   <li class="dropdown">
                               <a href="#"   class="dropdown-toggle" data-toggle="dropdown">Organizing Commitee</a>
                              
                           </li> -->
                        <li class="current_tab4"><a  href="<?= url ?>/schedule/Sponsors.php">Sponsors</a></li>
                        <li class="current_tab5"><a href="<?= url ?>/contact.php">Contact</a></li>
                        <li class="current_tab_gallery"><a href="<?= url ?>/gallery">Gallery</a></li>
                      <!--  <li class="current_tab6"><a href="<?= url ?>/registration.php" class="btn btn-danger">Register</a></li> -->
                       <!-- <li><a href="#"  style="padding:0"><button class="btn btn-info btn-cons register_btn" type="button" >Spot Only</button></a></li> -->
                        <?php
                        session_start();
                        if (isset($_SESSION['ses_Email']) && $_SESSION['ses_Email'] != "") {
                            ?>
                            <li><a href="<?= url ?>/logout.php" style="padding:0"><button class="btn btn-info btn-cons register_btn" type="button" >Logout</button></a></li>
                        <?php } ?>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div> 
    </body>
</html>
