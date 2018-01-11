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
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
        <?php include './context.php'; ?>

        <?php
        require '../config/ConnectionProvider.php';

        session_start();
        if (isset($_SESSION['ses_Email']) && $_SESSION['ses_Email'] != "") {
            
        } else {
            header('Location: AdminLogin.php');
        }







        if (isset($_POST['btnGenerateJobAppDataExcel'])) {
            //echo 'hii123';

            header('Location: ExportJobApplicationData.php');





            //  header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
            //     header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
            //    header('Pragma: no-cache');
            //   header('Cache-Control: must-revalidate, post-check=0,pre-check=0');
            //   header("Content-Transfer-Encoding: UTF-8");
            //  header('Content-Type: application/vnd.ms-excel');
            //  header('Content-Disposition: attachment; filename=' . 'jobApplicationsData' . '.xls');
            // echo $total;
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

            .tabl_head{
                overflow: auto;
            }


            .tabl_head i{
                color:#fff;
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

      <!--  <div class="jumbotron jumbotron-sm">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-lg-12">


                        <div class="location_map col-sm-6">
                            <h2 style="color: peachpuff;" class=""> Digital Summit 2016<br><small style="color:#fff">JobApplication Data</small></h2>
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

                            <h1 style="color:#fff"><strong>JobApplication Data</strong></h1>
                        </div>
                        <div class="col-sm-6 text-right">
                            <ul class="breadcrumb pull-right">
                                <li><a href="AdminHome.php"><font color="#fff">Admin Home</font></a></li>

                                <li class="active"><font color="#fff"><strong>JobApplication Data</strong></font></li>
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
                        <div class="panel panel-primary">
                            <div class="panel-heading tabl_head">
                                <div class="col-sm-11">    JobApplication Data</div>

                                <div class="col-sm-1 pull-right">     <a href="AdminHome.php"><i class="fa fa-2x fa-arrow-circle-left"></i></a>  </div>    
                            </div>
                            <div class="panel-body">

                                <!--    <form role="form" method="post" action="" accept-charset="UTF-8">
    
                                        <div class="col-sm-4">
                                            <label for="fname">First Name</label>
                                            <input type="text" id="fname" class="form-control" name="fname" placeholder="Example: John" required="true" onchange="fieldLengthValidator(this);">
                                        </div>
                                        <div class="col-sm-4">
                                            <label for="lname">Last Name</label>
                                            <input type="text" id="lname" class="form-control" name="lname" placeholder="Example: Smith" required="true" onchange="fieldLengthValidator(this);">
                                        </div>
                                        <div class="col-sm-4">
                                            <label for="email" >Email Address</label>
                                            <input type="text" id="email" class="form-control" name="email" placeholder="Example: john.smith@gmail.com" required="true" onchange="return checkEmail(this);fieldLengthValidator(this);">
                                        </div>
                                     
    
                                        <div class="col-sm-12">
                                            <div class="row">
                                                <div class="col-sm-offset-10 col-sm-2 text-right">
                                                    <div  class="btn-group">
                                                        <input type="submit" class="btn btn-primary m-t-10" id="btnSubmit" name="btnSubmit" value="Search"> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form> -->
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table class="table table-hover table-striped" id="jobApp_tab">
                                            <thead>
                                                <tr>
                                                    <th>SNO</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>MobileNumber</th>
                                                    <th>ApplyingFor</th>
                                                    <th>CreatedDate</th>
                                                    <th>Resume</th> 
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php
                                                try {
                                                    $selectQuery = "SELECT Id,FirstName,LastName,MiddleName,Email,MobileNumber,FileName,ResumePath,SkillSet,Comments,CreatedDate,RandomKey,ApplyingFor FROM tblConfApplicant";

                                                    $stmt = $conn->prepare($selectQuery);
                                                    $stmt->execute();
                                                    $stmt->setFetchMode(PDO::FETCH_ASSOC);
                                                    $i = 0;
                                                    // while ($row = mysql_fetch_array($result1, MYSQL_ASSOC)) {


                                                    while ($row = $stmt->fetch()) {
                                                        $i++;
                                                        ?><tr>
                                                            <td><?php echo $i; ?></td>
                                                            <td><?php echo $row["FirstName"] . ' ' . $row["MiddleName"] . '.' . $row["LastName"]; ?></td>
                                                            <td><?php echo $row["Email"]; ?></td>
                                                            <td><?php echo $row["MobileNumber"]; ?></td>
                                                            <td><?php echo $row["ApplyingFor"]; ?></td>
                                                            <td><?php echo $row["CreatedDate"]; ?></td>
                                                            <td>
                                                                <?php if( file_exists($row["ResumePath"])){?>
                                                                    <a href="classes/ResumeDownload.php?fileId=<?= $row["Id"] ?>&randomKey=<?= $row["RandomKey"] ?>">Download</a>
                                                                    <?php 
                                                                }else {
                                                                    echo "-";
                                                                }
                                                                    ?>
                                                                
                                                                
                                                            
                                                            </td>

                                                        </tr><?php
                                            }
                                        } catch (Exception $exc) {

                                            $exc->getMessage();
                                            // $resultMessage= '<font color=red size=2px>'.$exc.'</font>';
                                            //header('Location: ../back-end-error.php?resultMessage='.$resultMessage); 
                                            // $conn->closeConnection(); // closing the connection
                                        }
                                                ?>


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- Table end -->



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


        <form method="post" action="<?php $_PHP_SELF ?>" id="myForm" enctype="multipart/form-data" >
            <div class="col-sm-12" >
                <div class="col-sm-2 pull-right" >
                    <!-- <input type="button" value="Login" tabindex="3" class="btn btn-primary col-sm-12" name="btnSubmit1" id="btnSubmit1" onclick="doSubmit();"/> -->
                    <button type="submit" tabindex="13" class="btn btn-primary" name="btnGenerateJobAppDataExcel" id="btnGenerateJobAppDataExcel">Generate</button>
                </div>
            </div>
        </form>

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

        <script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>

        <script src="includes/js/headroom.min.js"></script>
        <script src="includes/js/jQuery.headroom.min.js"></script>
        <script src="includes/js/template.js"></script>
        <script type="text/javascript" src="includes/js/wow.js"></script>


        <script>new WOW().init();</script>
        <!--animate_end-->

        <script type="text/javascript" src="includes/js/clients.js"></script>



        <script>
            $(document).ready(function () {
                
               
                    $('#jobApp_tab').DataTable();
                    
                

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
