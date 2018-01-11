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
            header("Location:AdminHome.php");
        } 
            
        $resultMessage='';
        if (isset($_POST['btnSubmit'])) {
            $tempEmail = isset($_POST["email"]) ? $_POST["email"] : '';
            $tempPassword = isset($_POST["password"]) ? $_POST["password"] : '';
            if($tempEmail=='vkandregula@miraclesoft.com'&&$tempPassword=='5ummit@2k16' || $tempEmail=='rthamada@miraclesoft.com'&&$tempPassword=='jobs@2k16'){
                 
               $_SESSION["ses_Email"] = $tempEmail;
                header("Location:AdminHome.php");
            }else {
                $resultMessage='Invalid Credentiales!';
            }
            
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
                            <h2 style="color: peachpuff;" class=""> Digital Summit 2016<br><small style="color:#fff">Admin Login</small></h2>
                        </div>


                        <div class="location_map col-sm-6">  <i class="fa fa-pencil-square-o fa-5x pull-right" aria-hidden="true" ></i></div>

                    </div>
                </div>
            </div>
        </div>  -->
       <section class="parallax">
            <div class="overlay">
                <div class="container">

                    <div class="row" style="margin-top:40px; margin-bottom:45px;">

                        <div class="col-sm-6 text-left">

                            <h1 style="color:#fff"><strong>Admin Login</strong></h1>
                        </div>
                        <div class="col-sm-6 text-right">
                            <ul class="breadcrumb pull-right">
                                <li><a href="./"><font color="#fff">Home</font></a></li>

                                <li class="active"><font color="#fff"><strong>Login</strong></font></li>
                            </ul>
                        </div>

                    </div>

                </div></div>
        </section>
        
        <div class="container">
            <div class="container">
                <div class="gap" style="line-height: 50px; height: 50px;"></div>




                <div class="row" >
                    <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">Admin Login</div>
                            <div class="panel-body">
                                <?php if($resultMessage!=''){?>
                                <div class="row">
                                    <div class="col-sm-4"></div>
                    <div class="col-sm-4">
					<div class="alert alert-danger" id="danger">
                                    <a href="javascript:closeSuccessDiv(danger)" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong>Exception!</strong> <?php echo $resultMessage ?>
                                </div> 
					</div>
                                    <div class="col-sm-4"></div>
					</div>
                                <?php } ?>
                             <form role="form" method="post" action="" accept-charset="UTF-8">
                                 <div class="row">
                                     <div class="col-sm-4"></div>
                                    <div class="col-sm-4">
                                        <label for="fname">Email</label>
                                        <input type="text" id="email" class="form-control" name="email"  required="true" >
                                    </div>
                                     <div class="col-sm-4"></div>
                                     </div>
                                 <div class="row">
                                     <div class="col-sm-4"></div>
                                    <div class="col-sm-4">
                                        <label for="lname">Password</label>
                                        <input type="password" id="password" class="form-control" name="password"  required="true" >
                                        <br>
  <button type="submit" id="btnSubmit" name="btnSubmit" value="Submit" class="btn col-sm-4 btn-info pull-right">Login</button>
                                    </div>
                                     <div class="col-sm-4"></div>
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
