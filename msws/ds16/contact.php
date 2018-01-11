<!-- 
/* ******************************************************************************
*
* Project : The Digital Valley Summit V1
*
* Date    : October10,2016
*
* Author  : Corporate Applicaiton Support Team<hubble@miraclesoft.com>
*
* File    : contact.php
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
        <title>Digital Summit 2016</title>


  <!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->

        <?php
        include 'context.php';
        require '../config/ConnectionProvider.php';

        session_start();
        $resultMessage = '';
        $consultantId = 0;
        $isSubmitted = false;
        if (isset($_POST['btnSubmit'])) {
            $isSubmitted = true;
            try {
                if(empty($_SESSION['captcha_code'] ) || strcasecmp($_SESSION['captcha_code'], $_POST['captcha_code']) != 0){  
		$resultMessage="The Validation code does not match!";// Captcha verification is incorrect.		
	}else{// Captcha verification is Correct. Final Code Execute here!		
		//$resultMessage="The Validation code has been matched.";		
	 
                
                $tempPersonName = isset($_POST["personName"]) ? $_POST["personName"] : '';
                $tempEmail = isset($_POST["email"]) ? $_POST["email"] : '';
                $tempMobileNumber = isset($_POST["mobileNumber"]) ? $_POST["mobileNumber"] : '';
                $tempDescription = isset($_POST["description"]) ? $_POST["description"] : '';
                
               /*  $selectQuery = "SELECT * FROM tblConfContactUs WHERE Email=:tempEmail OR MobileNumber=:tempMobileNumber";
                $stmt = $conn->prepare($selectQuery);
                $stmt->bindParam(':tempEmail', $tempEmail);
                $stmt->bindParam(':tempMobileNumber', $tempMobileNumber);
                $stmt->execute();
                if ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
                    $resultMessage = "Already we have received your details .One of our Digital Summit representative will contact you shortly.";
                }
                else {*/
                
                $sql = "INSERT INTO tblConfContactUs (PersonName,Email,MobileNumber,Description) VALUES(:tempPersonName,:tempEmail,:tempMobileNumber,:tempDescription)";
        $stmt = $conn->prepare($sql);
                $stmt->bindParam(':tempPersonName', $tempPersonName);
                $stmt->bindParam(':tempEmail', $tempEmail);
                $stmt->bindParam(':tempMobileNumber', $tempMobileNumber);
                $stmt->bindParam(':tempDescription', $tempDescription);
                if (!$stmt->execute()) {
                    $resultMessage = "Opps!Something went wrong.Please try later!";
                } else {
                    $consultantId = $conn->lastInsertId();
                    $resultMessage = "Thank you for showing intrest on Digital Valley Summit . One of our representative will contact to you soon .";
                    $eflag = CONF_EMAILFLAG;
                    if ($eflag == 1) {
                        require 'classes/ConfMailManager.php';
                        $mailmanager = new ConfMailManager();
                        //sendConfRegistraintsDetails($fname,$lname,$email,$mobileNumber,$title,$attendeeType,$city,$state,$areasOfIntrest,$comments)
                        $mailmanager->sendConfContactFormDetails($tempPersonName, $tempEmail, $tempMobileNumber, $tempDescription);
                       $mailmanager->sendConfContactFormAcknowledgement($tempPersonName, $tempEmail);
                    }
                }
               // }
            }
            } catch (Exception $exc) {

                $exc->getMessage();
                $resultMessage = $exc;

                //header('Location: ../back-end-error.php?resultMessage=' . $resultMessage);
            }
        }

        //    echo $resultMessage;
        ?>

        <style>
            
              .current_tab5 >  a{
                color:#53bce8 !important;
            }
            .jumbotron {
                background: #00A79B !important;
                color: #FFF;
                border-radius: 0px;
            }
            .jumbotron-sm { padding-top: 24px;
                            padding-bottom: 24px; }
            .jumbotron small {
                color: #FFF;
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
                margin:4%;
            }

            /* .plan:hover {
              background-color: #fff;
              -moz-box-shadow: 0 0 12px 3px #b0b2ab;
              -webkit-box-shadow: 0 0 12px 3px #b0b2ab;
              box-shadow: 0 0 12px 3px #b0b2ab;
            }
            */
            .plan {
                padding: 20px;
                margin-left:0px;
                color: #000;
                background-color: #5e5f59;
                -moz-border-radius: 5px 5px 0 0;
                -webkit-border-radius: 5px 5px 0 0;
                border-radius: 5px 5px 0 0;
            }

            .plan-name-bronze {
                background-color:#2BB2DC;
                border-radius: 2px;
                color: #fff;
                padding: 4px;
            }

            .plan-name-silver {
                padding: 20px;
                color: #fff;
                background-color: #C0C0C0;
                -moz-border-radius: 5px 5px 0 0;
                -webkit-border-radius: 5px 5px 0 0;
                border-radius: 5px 5px 0 0;
            }



            .pricing-table-bronze  {
                padding: 20px;
                color: #fff;
                background-color: #f89406;
                -moz-border-radius: 5px 5px 0 0;
                -webkit-border-radius: 5px 5px 0 0;
                border-radius: 5px 5px 0 0;
            }

            .pricing-table .plan .plan-name span {
                font-size: 20px;
            }

            .pricing-table .plan ul {
                list-style: none;
                margin: 0;
                -moz-border-radius: 0 0 5px 5px;
                -webkit-border-radius: 0 0 5px 5px;
                border-radius: 0 0 5px 5px;
            }

            .pricing-table .plan ul li.plan-feature {
                padding: 15px 10px;
                border-top: 1px solid #c5c8c0;
                margin-right: 35px;
            }

            .pricing-three-column {
                margin: 0 auto;

            }

            .pricing-variable-height .plan {
                float: none;
                margin-left: 2%;
                vertical-align: bottom;
                display: inline-block;
                zoom:1;
                display:inline;
            }

            .plan-mouseover .plan-name {
                background-color: #4e9a06 !important;
            }

            .btn-plan-select {
                padding: 8px 25px;
                font-size: 18px;
            }


            .pricing-three-column legend{
                padding: 15px;
                text-align: center;
            }

            .pricing-three-column address{

                text-align: center;
            }

            .adress_block{
                position: relative;
                right: 13px;
                text-align: left;
            }

            .update-nag{
                background-color: transparent;
                display: inline-block;
                font-size: 14px;

                margin: 11px 0;
                text-align: left;
            }

            .update-nag > .update-split{

                width: 33px;
                float: left;

                height: 100%;
                text-align: center;
            }

            .update-nag > .update-split > i{
                color:#00A79B;
            }

            .update-nag > .update-text{
                line-height: 19px;

                padding-left: 45px;
                padding-right: 20px;
            }

            
            .parallax{
                background-image:url('./images/banner/contact-us.png');
                background-attachment:fixed;
                background-size:cover;
                background-position:center;
            }
        </style>
        <script type='text/javascript'>
function refreshCaptcha(){
	var img = document.images['captchaimg'];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}

</script>
        <script type="text/javascript" src="includes/js/ConfScripts.js"></script>
    </head>
<?php include './header.php'; ?>
    <body class="home">
        
        <div class="">
            <div class="">
                <section class="parallax">
            <div class="overlay">
                <div class="container">

                    <div class="row" style="margin-top:40px; margin-bottom:45px;">

                        <div class="col-sm-6 text-left">

                            <h1 style="color:#fff"><strong>Contact Us</strong></h1>
                        </div>
                        <div class="col-sm-6 text-right">
                            <ul class="breadcrumb pull-right">
                                <li><a href="./"><font color="#fff">Home</font></a></li>

                                <li class="active"><font color="#fff"><strong>Contact Us</strong></font></li>
                            </ul>
                        </div>

                    </div>

                </div></div>
        </section>

                <!-- Message start-->

                <div class="row">
                    <div class="col-sm-12">
    <?php
    if ($isSubmitted) {

        if ($consultantId > 0) {
            ?>  

                                <div class="alert alert-success">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong>Success!</strong> Thank you for showing interest on Digital Valley Summit . One of our representative will contact to you soon .
                                </div>
    <?php } else { ?>

                                <div class="alert alert-danger">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong>Exception!</strong> <?php echo $resultMessage;?>
                                </div> 

    <?php }
} ?>        

                    </div>
                </div>

                <!-- Message End -->

            </div>
        </div>

        <div class="container">
            <div class="row">
                <div>

                </div>
                <div class="container" style="max-width:1320px">
                    <div class="pricing-table pricing-three-column row">
                        <div class="">





                            <div class="plan col-sm-5 col-lg-5">
                                <div class="plan-name-bronze">
                                    <img src="./images/banner/miracle.PNG" alt="Third slide" style="width:550px">
                                </div>
                                <form>
                                    <legend><i class="fa fa-university" aria-hidden="true"></i>&nbsp; US Headquarters </legend>
                                    <address>
<!--                                        <strong>Miracle Software Systems, Inc.</strong><br>-->
                                        <div class="adress_block">
                                            <div class="update-nag  col-sm-12">
                                                <div class="update-split"><i class="fa fa-home" aria-hidden="true"></i></div>
                                                <div class="update-text">  45625, Grand River Avenue  <br>  Novi, MI - 48374, USA <br></div>
                                            </div>
                                            <div class="update-nag  col-sm-12">
                                                <div class="update-split"> <i class="fa fa-phone" aria-hidden="true"></i></div>
                                                <div class="update-text">   1-248-350-1515<br></div>
                                            </div>
                                            <!--                                            <div class="col-sm-1">
                                                                                            <abbr title="Phone">
                                                                                                <i class="fa fa-phone" aria-hidden="true"></i></abbr>
                                            
                                                                                        </div>-->
                                            <div class="update-nag  col-sm-12">
                                                <div class="update-split">  <i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                                                <div class="update-text">  <a class="linkText" href="mailto:info@miraclesoft.com ">info@miraclesoft.com</a><br></div>
                                            </div>


                                        </div>
                                    </address>

                                </form>
                            </div>
                            <div class="plan col-sm-5 col-lg-5">
                                <div class="plan-name-bronze">
                                    <img src="./images/banner/IMG_20150815_174201.jpg" alt="Third slide" style="width:550px">
                                </div>
                                <form>
                                    <legend><i class="fa fa-university" aria-hidden="true"></i>&nbsp; APAC Headquarters </legend>
                                    <address>
<!--                                        <strong>Miracle Heights.</strong><br>-->
                                        <div class="adress_block">

                                            <div class="update-nag  col-sm-12">
                                                <div class="update-split"><i class="fa fa-home" aria-hidden="true"></i></div>
                                                <div class="update-text">    Hill No. 1, IT SEZ, Chinna Rushi Konda <br> Visakhapatnam, AP - 530045, India <br></div>
                                            </div>
                                            <div class="update-nag  col-sm-12">
                                                <div class="update-split">  <i class="fa fa-phone" aria-hidden="true"></i></div>
                                                <div class="update-text">  +91-891-6623556<br></div>
                                            </div>

                                            <div class="update-nag  col-sm-12">
                                                <div class="update-split">  <i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                                                <div class="update-text">  <a class="linkText" href="mailto:apcloud@miraclesoft.com">apcloud@miraclesoft.com</a><br></div>
                                            </div>





                                        </div> 
                                    </address>
                                    
                                </form>
                            </div>
                            <div class="col-md-12 timer-area" id="box">

                                <h2 class="text-center thin" style="margin: 26px;">Inquiries</h2>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-12"> 
                                        <div class="alert alert-danger" style="display:none" id="errorMsgDiv">
                                            <button type="button" class="close" onclick="closeErrorMsg()" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <strong><span id="resultMessage">Invalid details!!</span></strong> 
                                        </div>                        
                                    </div>
                                </div>

                                <form class="form-horizontal" action="<?php $_PHP_SELF ?>" method="post" id="contact_form" >
                                    <fieldset>
                                        <!-- Form Name -->


                                        <!-- Text input-->

                                        <div class="form-group">

                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                    <input name="personName" id="personName" placeholder="Name" class="form-control" type="text" required="required" onchange="fieldLengthValidator(this);">
                                                </div>
                                            </div>
                                        </div>



                                        <!-- Text input-->
                                        <div class="form-group">

                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                                    <input name="email" id="email" placeholder="E-Mail Address" class="form-control" type="text" required="required" onchange="return checkEmail(this);fieldLengthValidator(this);">
                                                </div>
                                            </div>
                                        </div>


                                        <!-- Text input-->

                                        <div class="form-group">

                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-mobile" aria-hidden="true" style="font-size: 20px;"></i></span>
                                                    <input name="mobileNumber" id="mobileNumber" placeholder="Mobile No" class="form-control" type="text" onchange="return formatPhone(this);" required="required" onchange="fieldLengthValidator(this);">
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Text input-->

                                        <div class="form-group">

                                            <div class="col-md-12 inputGroupContainer">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                                                    <textarea class="form-control" name="description" id="description" placeholder="What are you looking for?" required="required" onchange="fieldLengthValidator(this);"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- capacha start -->
                                        
                                        
                                            <div class="form-group">

                                            <div class="col-sm-6">
                                                <div class="input-group">
                                         <span class="input-group-addon"><i class="fa fa-user-secret" aria-hidden="true"></i></span>       
                                        <input id="captcha_code" name="captcha_code" type="text" required="true" class="form-control" placeholder="Enter the code right here">
                                        </div></div>
                                                <div class="col-sm-6" style="text-align: left">
                                                    <img src="captcha.php?rand=<?php echo rand();?>" id='captchaimg' height="30px;" width="100px;">&nbsp;&nbsp;&nbsp;&nbsp;<a href='javascript: refreshCaptcha();'><i class="fa fa-refresh fa-1x" aria-hidden="true" title="Can't read the image? click here to refresh"></i></a>
                                                       <!-- <img src="./images/refresh.jpg" id='captchaimg' height="30px;" width="30px;" title="Can't read the image? click here to refresh"> -->
                                                    
                                                    
                                        
                                            </div>
                                                
                                        </div>
                                        <!-- capacha end -->
                                        <div class="form-group">

<!--                                            <div class="col-md-12">
                                                                                                <button type="submit" class="btn btn-warning pull-right" name="btnSubmit">Submit</button>
                                                <input type="submit" class="btn btn-warning pull-right" value="submit" name="btnSubmit">
                                            </div>-->

                                         <!--   <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="col-sm-offset-5 col-sm-2 text-center">
                                                        <div  class="btn-group">
                                                            <input type="submit" class="btn btn-warning pull-right" value="submit" name="btnSubmit">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->


                                        </div>

                                    </fieldset>
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

        <!--animate_end-->

        <script type="text/javascript" src="includes/js/clients.js"></script>



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
<?php include './footer.php'; ?>
    </body>
</html>
