<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Miracle is a Thought Leader in the space of Big Data, Advanced Analytics, BI/DWH, Database Management, and Cognitive Science. Through our digital library we provide the world with use cases, solution architectures, and more to help enable you to take the next step.">
        <meta name="author" content="">
        <title>More Resources | Miracle</title>
        <?php include '../../config/Locations.php'; ?>
        <link href="../../css/bootstrap.min.css" rel="stylesheet">
        <link href="../../css/font-awesome.min.css" rel="stylesheet">
        <link href="../../css/main.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../../css/default.css" />
        <link rel="stylesheet" type="text/css" href="../../css/component.css" />
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
        <script src="../../js/MoreResourceScripts.js"></script>
        <link href="/css/themes.css" rel="stylesheet">
        <link rel="shortcut icon" href="../../images/favicon.ico">
      

        <style>
            .tinted-image {
                background: 
                    /* top, transparent red */
                    linear-gradient(
                    rgba(0, 0, 0, 0.55), 
                    rgba(0, 0, 0, 0.55)
                    ),
                    /* your image */
                    url("<?= AMAZON_URL ?>/images/dataservices/bg.png");
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }
            label {
                font-weight: 600;
            }
            a{text-decoration:none !important;}
            .contact{border: solid 3px #00aae7 !important;border-radius: 3px !important;
                     color: #00aae7 !important;display: inline-block;font-size: 17px;letter-spacing: 1px;
                     margin-bottom: 5px;moz-border-radius: 3px;padding: 11px 59px;transition: all 0.5s ease;
                     webkit-border-radius: 3px;background:#fff;font-weight:bolder;}
            .contact:hover{color:#00aae7;background: #232527;}
            .h4{color:#fff !important; }
            /* Widgets */
            .widget {background-color: #ffffff;margin-bottom: 10px;position: relative;border-radius: 2px;}
            .widget > .widget-content:first-child,.widget > .widget-image:first-child {
                border-top-right-radius: 2px;border-top-left-radius: 2px;}
            .widget > .widget-content:last-child {border-bottom-right-radius: 2px;border-bottom-left-radius: 2px;}
            .widget,.widget-content {display: block;-webkit-transition: all .1s ease-out;
                                     transition: all .1s ease-out;}

            .widget:active,.widget-content:active {text-decoration: none;-webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, .02);
                                                   box-shadow: 0 1px 3px rgba(0, 0, 0, .02);-webkit-transform: translateY(0);transform: translateY(0);}
            .widget-image {height: 310px;overflow: hidden;position: relative;}
            .widget-image > img {min-width: 787px;}
            .widget-image.widget-image-bottom img {position: absolute;left: 0;bottom: 0;}
            .widget-image.widget-image-sm {height: 270px;}
            .widget-image.widget-image-xs {height: 175px;}
            .widget-image > i {position: absolute;right: 30px;bottom: 30px;color: #ffffff;
                               font-size: 70px;opacity: .5;}
            .widget-image-content {position: absolute;top: 0;left: 0;right: 0;bottom: 0;padding: 15px 25px;
                                   background: rgba(0, 0, 0, .65);}
            .widget-content {padding: 1px;}
            .widget-content.widget-content-mini {padding-top: 7px;padding-bottom: 7px;}
            .widget-content.widget-content-full {padding: 0;}
            .widget-content.widget-content-full-top-bottom {padding-top: 0;padding-bottom: 0;}
            .widget-content .pull-left {margin-right: 20px;}
            .widget-content .pull-right {margin-left: 20px;}
            a.widget-content {display: block;}a.widget-content {display: block;}
            .widget-heading {margin: 10px 0;}
            .widget-icon {display: inline-block;width: 64px;height: 64px;line-height: 60px;
                          margin: 5px;font-size: 20px;text-align: center;border-radius: 50%;
                          background: rgba(0, 0, 0, .05);}
            .widget-icon.pull-left {margin: 5px 5px 5px 0;}.widget-icon.pull-right {margin: 5px 0 5px 5px;}
            .widget-icon .gi,.widget-icon .hi,.widget-icon .si,.widget-icon .fi {margin-top: -3px;}
            /* Full Background Image */
            img.full-bg {min-height: 100%;min-width: 1280px;width: 100%;height: auto;
                         position: fixed;top: 0;left: 0;}
            img.full-bg.full-bg-bottom {top: auto;bottom: 0;}
            @media screen and (max-width: 1280px) {img.full-bg {left: 50%;margin-left: -640px;}}
            /* Content which contains floats */
            .content-float .pull-left {margin: 0 20px 20px 0;}
            .content-float .pull-right {margin: 0 0 20px 20px;}
            .content-float-hor .pull-left {margin-right: 20px;}
            .content-float-hor .pull-right {margin-left: 20px;}
            .themed-background {background-color: #00aae7 !important;}
            .themed-color-dark {color: #454e59 !important;}
            .themed-background-dark {
                background-color: #454e59 !important;
            }
            .breadcrumb {0px !important;}
            .text-dark, .text-dark:hover, a.text-dark, a.text-dark:hover, a.text-dark:focus {
                background-color: #232527;
                color: #fff !important;
            }
            .emerald{
                background-color:#0d416b !important;}
            }
            .list-group-item {
                position: relative;
                display: block;
                padding-top: 10px!important;
                padding-right: 5px!important;
                padding-bottom: 10px!important;
                padding-left: 5px!important;
                margin-bottom: -1px;
                background-color: #fff;
                border: 1px solid #ddd;
            }
            .micro{
                margin-top:3px !important;
            }
            .footer-nav-links a:hover,
            .footer-nav-links a:focus {
                color: #ffffff;
                background-color: #0d416b;
                -webkit-box-shadow: 0 2px 3px rgba(0, 0, 0, .46);
                box-shadow: 0 2px 3px rgba(0, 0, 0, .46);
            }
            .footer-nav-links a.social-twitter:hover,
            .footer-nav-links a.social-twitter:focus {
                background-color: #55acee!important;
            }
            .footer-nav-links a.social-facebook:hover,
            .footer-nav-links a.social-facebook:focus {
                background-color: #3b5998!important;
            }
            .footer-nav-links a.social-google-plus:hover,
            .footer-nav-links a.social-google-plus:focus {
                background-color: #dd4b39!important;
            }
            .footer-nav-links a.social-dribbble:hover,
            .footer-nav-links a.social-dribbble:focus {
                background-color: #ea4c89!important;
            }
            .footer-nav-links a.social-youtube:hover,
            .footer-nav-links a.social-youtube:focus {
                background-color: #b31217!important;
            }
            .footer-nav-links a.social-flickr:hover,
            .footer-nav-links a.social-flickr:focus {
                background-color: #ed1983!important;
            }
            .footer-nav-links a.social-linkedin:hover,
            .footer-nav-links a.social-linkedin:focus {
                background-color: #0077b5!important;
            }
        </style>
        <style type="text/css">
            .display-1 {font-size: 3rem !important;}
            .card {overflow:hidden;height:100% !important;}
            .card-block .rotate {z-index: 8;float: right;height: 100% !important;}
            .card-block .rotate i{color: rgba(20, 20, 20, 0.15);position:absolute;left:0;
                                  left: auto;right: -10px;bottom: 0;
                                  display: block;-webkit-transform: rotate(-44deg);
                                  -moz-transform: rotate(-44deg);-o-transform: rotate(-44deg);
                                  -ms-transform: rotate(-44deg);transform: rotate(-44deg);
            }
        </style>
        <style>
            a{text-decoration:none !important;}
            .contact{border: solid 3px #00aae7 !important;border-radius: 3px !important;
                     color: #00aae7 !important;display: inline-block;font-size: 17px;letter-spacing: 1px;
                     margin-bottom: 5px;moz-border-radius: 3px;padding: 11px 59px;transition: all 0.5s ease;
                     webkit-border-radius: 3px;background:#fff;font-weight:bolder;}
            .contact:hover{color:#00aae7;background: #232527;}
            .h4{color:#fff !important; }
            /* Widgets */
            .widget {background-color: #ffffff;margin-bottom: 10px;position: relative;border-radius: 2px;}
            box-shadow: 0 1px 3px rgba(0, 0, 0, .02);-webkit-transform: translateY(0);transform: translateY(0);}
            .widget-image {height: 310px;overflow: hidden;position: relative;}
            .widget-image > img {min-width: 787px;}
            .widget-image.widget-image-bottom img {position: absolute;left: 0;bottom: 0;}
            .widget-image.widget-image-sm {height: 270px;}
            .widget-image.widget-image-xs {height: 175px;}
            .widget-image > i {position: absolute;right: 30px;bottom: 30px;color: #ffffff;
                               font-size: 70px;opacity: .5;}
            .widget-image-content {position: absolute;top: 0;left: 0;right: 0;bottom: 0;padding: 15px 25px;
                                   background: rgba(0, 0, 0, .65);}
            .widget-content {padding: 15px;}
            .widget-content > a: {padding: 15px;}
            .widget-content.widget-content-mini {padding-top: 7px;padding-bottom: 7px;}
            .widget-content.widget-content-full {padding: 0;}
            .widget-content.widget-content-full-top-bottom {padding-top: 0;padding-bottom: 0;}
            .widget-content .pull-left {margin-right: 20px;}
            .widget-content .pull-right {margin-left: 20px;}
            .widget-heading {margin: 10px 0;}
            .widget-icon {display: inline-block;width: 64px;height: 64px;line-height: 60px;
                          margin: 5px;font-size: 28px;text-align: center;border-radius: 50%;
                          background: rgba(0, 0, 0, .05);}
            .widget-icon.pull-left {margin: 5px 5px 5px 0;}.widget-icon.pull-right {margin: 5px 0 5px 5px;}
            .widget-icon .gi,.widget-icon .hi,.widget-icon .si,.widget-icon .fi {margin-top: -3px;}
            /* Full Background Image */
            img.full-bg {min-height: 100%;min-width: 1280px;width: 100%;height: auto;
                         position: fixed;top: 0;left: 0;}
            img.full-bg.full-bg-bottom {top: auto;bottom: 0;}
            @media screen and (max-width: 1280px) {img.full-bg {left: 50%;margin-left: -640px;}}
            /* Content which contains floats */
            .content-float .pull-left {margin: 0 20px 20px 0;}
            .content-float .pull-right {margin: 0 0 20px 20px;}
            .content-float-hor .pull-left {margin-right: 20px;}
            .content-float-hor .pull-right {margin-left: 20px;}
            .themed-background {background-color: #00aae7 ;}
            .themed-background-info {
                background-color: #5cafde !important;
            }
            .themed-color-dark {color: #454e59 !important;}
            .themed-background-dark {
                background-color: #454e59 !important;
            }
            .breadcrumb {margin:0px !important;}
            .breadcrumb li,.breadcrumb li a{color:#FFF !important;}
            .text-dark, .text-dark:hover, a.text-dark, a.text-dark:hover, a.text-dark:focus {
                background-color: #232527;
                color:#fff;
            }
            .card {border:0px !important;} 
            .emerald{background-color:#0d416b !important;width:100%;}
            .list-inline {
                margin-left: 0px!important;
                list-style: none;
            }
            .effect:hover{
                top:-5px;
            }
            .hoverform{
                margin-top:-390px;
                display:none;

            }
            /*  .hover1:hover .hoverform{
                  display:block;
              }*/
            .slide{
                overflow:hidden !important;
            }
        </style>
        <?php
        include '../../config/general.php';

        // require '../config/DbController.php';
        require '../../config/ConnectionProvider.php';

        $resultMessage = '';
        $errorMessage = '';
        $isValidUser = 'NO';
        $validationType = '';
        $objId = 2;
        $refId = 139; //http://www.miraclesoft.com/events/webinar-after.php?eventId=147
        if (isset($_POST['btnLoginSubmit'])) {
            try {
                $validationType = 'Login';

                if (!get_magic_quotes_gpc()) {
                    $rloginId = addslashes($_POST['loginId']);
                    $rpassword = addslashes($_POST['password']);
                } else {
                    $rloginId = $_POST['loginId'];
                    $rpassword = $_POST['password'];
                }

                $data = array("LoginId" => "$rloginId", "Password" => "$rpassword", "Authorization" => base64_encode(SERVICE_AUTHORIZATION));
                $data_string = json_encode($data);
                $curl = curl_init(SERVICE_URL . "websiteServices/getEmployeeInformation");
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($curl, CURLOPT_HTTPHEADER, array(
                    'Content-Type: application/json',
                    'Content-Length: ' . strlen($data_string))
                );
                curl_setopt($curl, CURLOPT_TIMEOUT, 500);
                curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 500);
                $curl_response = curl_exec($curl);
                //  echo 'curl_response----'.$curl_response;
                if (1 !== $curl_response) {

                    $myArray = json_decode($curl_response, true);
                    if ($myArray['IsAuthenticate']) {

                        if ($myArray['ResultString'] == 'Valid') {
                            // session_start();
                            //$_SESSION["ses_EmpLoginId"] = $rloginId;
                            //$_SESSION["ses_EmpPassword"] = $rpassword;
                            $tempFirstname = $myArray['FName'];
                            $tempLastname = $myArray['LName'];
                            $tempOrganization = $myArray['OrgId'];
                            $tempDesignation = $myArray['TitleTypeId'];
                            $tempEmail = $myArray['Email1'];
                            $tempWorkPhone = $myArray['WorkPhoneNo'];
                            $sql = "INSERT INTO tblResourceDepotDetails (ObjectId,RefId,FName,LName,Organization,Designation,Email,WorkPhone,AccessType)   " .
                                    " VALUES(:rObjectId,:rRefId,:rfirstname,:rlastName,:rorganization," .
                                    ":rdesignation,:remail,:rphone,'I')";

                            $stmt = $conn->prepare($sql);

                            $stmt->bindParam(':rObjectId', $objId);
                            $stmt->bindParam(':rRefId', $refId);
                            $stmt->bindParam(':rfirstname', $tempFirstname);
                            $stmt->bindParam(':rlastName', $tempLastname);
                            $stmt->bindParam(':rorganization', $tempOrganization);
                            $stmt->bindParam(':rdesignation', $tempDesignation);
                            $stmt->bindParam(':remail', $tempEmail);
                            $stmt->bindParam(':rphone', $tempWorkPhone);
                            if ($stmt->execute()) {
                                $userId = $conn->lastInsertId();

                                $isValidUser = 'YES';
                            } else {
                                $signupErrMessage = "Please try again.</font>";
                            }







                            // $isValidUser='YES';
                            //header('Location: standards_download_page.php');
                        } else {

                            if ($myArray['ResultString'] == 'InValidCredentiales') {
                                $errorMessage = INVALID_CREDENTIALES_MESSAGE;
                            }
                            // $resultMessage = "<font color=red size=2px>" . INVALID_CREDENTIALES_MESSAGE . " </font>";
                            else
                                $errorMessage = INACTIVE_MESSAGE;
                            // $resultMessage = "<font color=red size=2px>" . INACTIVE_MESSAGE . " </font>";
                        }
                    }else {
                        $errorMessage = UNAUTHORIZED_ACCESS_MESSAGE;
                        //$resultMessage = "<font color=red size=2px>" . UNAUTHORIZED_ACCESS_MESSAGE . "</font>";
                    }
                }
                curl_close($curl);
            } catch (Exception $exc) {


                $exc->getMessage();
                $resultMessage = '<font color=red size=2px>' . $exc . '</font>';
                header('Location: ../back-end-error.php?resultMessage=' . $resultMessage);
            }
        }
        $signupErrMessage = '';
        $userId = 0;

        if (isset($_POST['btnSignUpSubmit'])) {
            $validationType = 'SignUp';

            try {
                $tempFirstname = isset($_POST["firstname"]) ? $_POST["firstname"] : '';
                $tempLastname = isset($_POST["lastname"]) ? $_POST["lastname"] : '';
                $tempOrganization = isset($_POST["organization"]) ? $_POST["organization"] : '';
                $tempDesignation = isset($_POST["designation"]) ? $_POST["designation"] : '';
                $tempEmail = isset($_POST["email"]) ? $_POST["email"] : '';
                $tempWorkPhone = isset($_POST["workPhone"]) ? $_POST["workPhone"] : '';
                $sql = "INSERT INTO tblResourceDepotDetails (ObjectId,RefId,FName,LName,Organization,Designation,Email,WorkPhone)   " .
                        " VALUES(:rObjectId,:rRefId,:rfirstname,:rlastName,:rorganization," .
                        ":rdesignation,:remail,:rphone)";

                $stmt = $conn->prepare($sql);

                $stmt->bindParam(':rObjectId', $objId);
                $stmt->bindParam(':rRefId', $refId);
                $stmt->bindParam(':rfirstname', $tempFirstname);
                $stmt->bindParam(':rlastName', $tempLastname);
                $stmt->bindParam(':rorganization', $tempOrganization);
                $stmt->bindParam(':rdesignation', $tempDesignation);
                $stmt->bindParam(':remail', $tempEmail);
                $stmt->bindParam(':rphone', $tempWorkPhone);
                if ($stmt->execute()) {
                    $userId = $conn->lastInsertId();

                    $isValidUser = 'YES';
                } else {
                    $signupErrMessage = "Please try again.</font>";
                }
            } catch (Exception $exc) {


                $exc->getMessage();
                $signupErrMessage = $exc;
                // header('Location: ../back-end-error.php?resultMessage=' . $resultMessage);
            }
        }
        ?>
        <style>
            .effect:hover{
                top:-5px;
            }
            .hoverform{
                margin-top:-390px;
                display:none;

            }
            /*.hover1:hover .hoverform{
               display:block;
            }*/
            .slide{
                overflow:hidden !important;
            }
            .linkText1:hover{
                color:#232527 !important;
            }
        </style>

        <?php if ($isValidUser == 'NO') { ?>
            <style>
                .hover1:hover .hoverform{
                    display:block;
                }
            </style>


        <?php }
        ?>


    </head>
    <!--/head-->
    <?php include '../../header.php'; ?>
    <body>
        <section id="services" >
            <br>
            <br>
            <br>
            <div class="emerald tinted-image">
                <div class="container ">
                    <div class="row">
                        <br><br><br>
                        <div class="col-sm-6 text-left">
                            <h1 class="heavy micro">Our Big Data and Analytics Resources</h1>
                        </div>
                        <div class="col-sm-6 text-right">
                            <ul class="breadcrumb pull-right">
                                <li><a href="../">Home</a></li>
                                <li><a href="../technologies/">Technologies</a></li>
                                <li class="active">Big Data and Analytics Resources</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <br>
            </div>
        </section>
        <section id="services" class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-sm-12">
                            <br>
                            <p class="methodText">Miracle is a Thought Leader in the space of Big Data, Advanced Analytics, BI/DWH, Database Management, and Cognitive Science. Through our digital library we provide the world with use cases, solution architectures, and more to help enable you to take the next step.</p>
                        </div>
                        <br>
                        <div class="col-sm-12 hover1" > 
                       <!-- <iframe class="" src="https://player.vimeo.com/video/179458255" width="100%" height="380" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>-->
                            <iframe src="https://player.vimeo.com/video/200216281" width="100%" height="380" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                            <!---onhover form--->
                            <div class="row hoverform" >

                                <div class="col-sm-12" style="background-color:rgba(255,255,255,1);">
                                    <ul class="nav nav-tabs">

                                        <li class="active">
                                            <a data-toggle="tab" href="#sign-in-for-access"><h6 class="bluefont"><strong>Sign Up </strong></h6></a>
                                        </li>
                                        <li class="">
                                            <a data-toggle="tab" href="#emplyolee-sign-in" id="loginToggle"><h6><strong>Employee Sign In</strong></h6></a>
                                        </li>
                                    </ul>

                                    <div class="tab-content">
                                        <div class="tab-pane active" id="sign-in-for-access">
                                            <br>

                                            <form method="post" action="" id="myForm">
                                                <div class="row">
                                                    <!--copy 1 from contact first row starts-->
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input class="form-control col-sm-12" id="firstname" name="firstname" placeholder="First Name*" required="required" type="text" onchange="fieldLengthValidator(this);">
                                                        </div>

                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input class="form-control col-sm-12" name="lastname" id="lastname" placeholder="Last Name*" required="required" type="text" onchange="fieldLengthValidator(this);">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input class="form-control" placeholder="Organization*" name="organization" id="organization" required="required" type="text" onchange="fieldLengthValidator(this);">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input class="form-control" placeholder="Designation*" name="designation" id="designation" required="required" type="text" onchange="fieldLengthValidator(this);">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input class="form-control" placeholder="Email*" name="email" id="email" required="required" type="text" onchange="return checkResourceEmail(this);">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input class="form-control" placeholder="Work Phone*" name="workPhone" id="workPhone" required="required" type="text" onchange="return formatPhone(this);" onblur="return validatenumber(this)" onkeypress="return isNumberKey(event)">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12"> 
                                                        <div class="alert alert-danger" style="display:none" id="errorMsgDivEX">
                                                            <button type="button" class="close" onclick="closeErrorMsg()" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                            <strong><span id="resultMessageEX">Invalid details!!</span></strong> 
                                                        </div>                        
                                                    </div>
                                                </div>
                                                <?php if ($signupErrMessage != '') { ?>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="alert alert-danger alert-dismissable fade in">
                                                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                                <?php echo $signupErrMessage ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                                <!--copy 1 from contact first row ends-->
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <button class="btn btn-primary col-sm-12" id="btnSignUpSubmit" name="btnSignUpSubmit" tabindex="12" type="submit"> Submit </button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </form>

                                            <p class="methodText greyText" >
                                                The given information will not be used or distributed to any sources and will be only used for User Authentication. Miracle has copyrights and is authorized to use and circulate all the resources which are being provided to you.
                                            </p> <br>


                                        </div>  <!--first tab ends-->

                                        <div class="tab-pane" id="emplyolee-sign-in">
                                            <br>
                                            <form id="employeeLoginForm" method="post" action="#">
                                                <p class="methodText greyText" >
                                                    You must be a Miraclite to gain access to this. Please validate yourself using your Miracle credentials for further access.
                                                </p> <br>
                                                <div class="row ">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input class="form-control" id="loginId" name="loginId" placeholder="loginId*" required="required" type="text" onkeydown="return enableLoginWhenEnter(event);">
                                                        </div>
                                                        <br>
                                                        <div class="form-group">
                                                            <input class="form-control" id="password" name="password" placeholder="password*" required="required" type="password" onkeydown="return enableLoginWhenEnter(event);">
                                                        </div>
                                                    </div> 
                                                </div>
                                                <?php if ($errorMessage != '') { ?>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="alert alert-danger alert-dismissable fade in">
                                                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                                <?php echo $errorMessage ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">

                                                            <button type="submit" class="btn btn-primary col-sm-12" data-loading-text="<i class='fa fa-spinner fa-spin '></i> loading..." style="margin-left:1px;" name="btnLoginSubmit" id="btnLoginSubmit"  tabindex="3">Login</button>									

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6 noMargin">
                                                        <p class="methodText">Forgot password!<a href="../../forgot-password.php" class="linkText"><strong> Click here.</strong></a></p> 
                                                    </div>
                                                    <div class="col-sm-6"></div>
                                                </div> 
                                            </form> 

                                            <br>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <h1 class="heavy">More Resources</h1>
                            <p class="methodText">Learn more about how Miracle’s teams have helped organizations improve their test processes through innovative techniques. </p>
                            <a class="btn btn-danger" href="#scroller" data-slide="prev"><i class="icon-angle-left"></i></a>
                            <a class="btn btn-danger" href="#scroller" data-slide="next"><i class="icon-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div id="scroller" class="carousel slide" >
                                <div class="carousel-inner" >
                                    <div class="item active" >
                                        <div class="row">
                                            <div class="col-sm-4"><!--webinar--->
                                                <div class="portfolio-item">

                                                    <div class="card ">
                                                        <div class="embed-responsive embed-responsive-16by9">
                                                            <!--<a class="linkText1" target="_blank"  href="http://www.miraclesoft.com/events/webinar-after.php?eventId=194"><img src="images/cognos.png" alt="data" class="img-responsive"></a>-->
                                                           <!-- <iframe src="https://player.vimeo.com/video/196321652" width="100%" height="auto" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> -->
                                                            <a target="_blank"  href="http://www.miraclesoft.com/webinars/simple-ways-integrating-ecommerce-platform-salesforce">
                                                                <img src="<?= AMAZON_URL ?>/images/dataservices/eCommerce-Platform.png" class="img-responsive" alt="eCommerce Platform">
                                                            </a>
                                                        </div>
                                                        <a class="linkText1" target="_blank"  href="http://www.miraclesoft.com/webinars/simple-ways-integrating-ecommerce-platform-salesforce">
                                                            <div class="container" style="background-color:#eee; margin-top:-5px;">

                                                                <p><center><strong>Simple ways of Integrating your eCommerce Platform with Salesforce </strong></center></p>
                                                            </div>
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>      

                                            <div class="col-sm-4"><!--webinar--->
                                                <div class="portfolio-item">

                                                    <div class="card">
                                                        <div class="embed-responsive embed-responsive-16by9">
                                                        <!--<a class="linkText1" target="_blank"  href="http://www.miraclesoft.com/events/webinar-after.php?eventId=213"><img src="images/enterprise.png" alt="NeoLoad" class="img-responsive"></a>-->
         <a target="_blank" href="http://www.miraclesoft.com/events/webinars/sentiment-analytics-on-social-data-dash-db-and-watson-analytics">                                           <!-- <iframe src="https://player.vimeo.com/video/176598772" width="100%" height="auto" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>-->
                                                                <img src="<?= AMAZON_URL ?>/images/dataservices/sentiment-analytics.png" class="img-responsive" alt="Sentiment Analytics">
                                                            </a>
                                                        </div>
                                                        <a class="linkText1" target="_blank"  href="http://www.miraclesoft.com/webinars/sentiment-analytics-on-social-data-dash-db-and-watson-analytics">
                                                            <div class="container" style="background-color:#eee; margin-top:-5px;">

                                                                <p><center><strong>Sentiment Analytics on Social Data using Dash DB and Watson Analytics</strong></center></p> 
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="col-sm-4"><!--webinar--->
                                                <div class="portfolio-item">

                                                    <div class="card">
                                                        <div class="embed-responsive embed-responsive-16by9">
                                                     <!--  <a class="linkText1" target="_blank"  href="http://www.miraclesoft.com/events/webinar-after.php?eventId=127"><img src="images/spark.png" alt="NeoLoad" class="img-responsive"></a> -->
                                                     <!--<iframe src="https://player.vimeo.com/video/172396134" width="100%" height="auto" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>-->
                                                            <a target="_blank"  href="http://www.miraclesoft.com/webinars/building-microservices-mulesoft-anypoint-platform">
                                                                <img src="<?= AMAZON_URL ?>/images/dataservices/building-microservices.png" class="img-responsive" alt="Building Microservices">
                                                            </a>
                                                        </div>
                                                        <a class="linkText1" target="_blank"  href="http://www.miraclesoft.com/webinars/building-microservices-mulesoft-anypoint-platform">
                                                            <div class="container" style="background-color:#eee; margin-top:-5px;">

                                                                <p><center><strong>Building Microservices with the Mulesoft Anypoint <br>Platform </strong></center></p> 
                                                            </div>
                                                        </a>

                                                    </div>

                                                </div>
                                            </div> 
                                        </div><!--/.row-->
                                    </div><!--/.item-->


                                    <div class="item">
                                        <div class="row">
                                            <div class="col-sm-4"><!--webinar--->
                                                <div class="portfolio-item">

                                                    <div class="card">
                                                        <div class="embed-responsive embed-responsive-16by9">
                                                       <!-- <a class="linkText1" target="_blank"  href="http://www.miraclesoft.com/events/webinar-after.php?eventId=123"><img src="images/infosphere.png" alt="InfoSpehere" class="img-responsive"></a>-->
                                                   <!--  <iframe src="https://player.vimeo.com/video/171746746" width="100%" height="auto" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>--->
                                                            <a target="_blank"  href="http://www.miraclesoft.com/webinars/any-app-any-database-any-cloud-managing-multi-cloud-morpheus">
                                                                <img src="<?= AMAZON_URL ?>/images/dataservices/multi-cloud.png" class="img-responsive" alt="Multi-Cloud">
                                                            </a>
                                                        </div>
                                                        <a class="linkText1" target="_blank"  href="http://www.miraclesoft.com/webinars/any-app-any-database-any-cloud-managing-multi-cloud-morpheus">
                                                            <div class="container" style="background-color:#eee; margin-top:-5px;">

                                                                <p><center><strong>Any App, Any Database, Any Cloud! - Managing Multi-Cloud with Morpheus <br></strong></center></p> 
                                                            </div>
                                                        </a>

                                                    </div>

                                                </div>
                                            </div> 
                                            <div class="col-sm-4"><!--webinar--->
                                                <div class="portfolio-item">

                                                    <div class="card">
                                                        <div class="embed-responsive embed-responsive-16by9"> 
                                                        <!-- <a class="linkText1" target="_blank"  href="http://www.miraclesoft.com/events/webinar-after.php?eventId=118"><img src="images/sap-hana.png" alt="SAP HANA" class="img-responsive"></a>-->
                                                      <!--<iframe src="https://player.vimeo.com/video/168188924" width="100%" height="auto" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>--->
                                                            <a target="_blank"  href="http://www.miraclesoft.com/webinars/building-cognitive-enterprise-watson-developer-cloud">
                                                                <img src="<?= AMAZON_URL ?>/images/dataservices/watson-developer.png" class="img-responsive" alt="Watson Developer">
                                                            </a>
                                                        </div>
                                                        <a class="linkText1" target="_blank"  href="http://www.miraclesoft.com/webinars/building-cognitive-enterprise-watson-developer-cloud">
                                                            <div class="container" style="background-color:#eee; margin-top:-5px;">

                                                                <p><center><strong>Building the Cognitive Enterprise with Watson Developer Cloud </strong></center></p> 
                                                            </div>
                                                        </a>
                                                    </div>


                                                </div>
                                            </div>
                                            <div class="col-sm-4"><!--webinar--->
                                                <div class="portfolio-item">

                                                    <div class="card">
                                                        <div class="embed-responsive embed-responsive-16by9">
                                                        <!--<a class="linkText1" target="_blank"  href="http://www.miraclesoft.com/events/webinar-after.php?eventId=116"><img src="images/discovery-solution.png" alt="Discovery Solution" class="img-responsive"></a>-->
                                                    <!-- <iframe src="https://player.vimeo.com/video/165608037" width="100%" height="auto" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>--->
                                                            <a target="_blank"  href="http://www.miraclesoft.com/webinars/improving-feasibility-continuous-integration-testing">
                                                                <img src="<?= AMAZON_URL ?>/images/dataservices/integration-and-testing.png" class="img-responsive" alt="Integration-and-Testing">
                                                            </a>
                                                        </div>
                                                        <a class="linkText1" target="_blank"  href="http://www.miraclesoft.com/webinars/improving-feasibility-continuous-integration-testing">
                                                            <div class="container" style="background-color:#eee; margin-top:-5px;">

                                                                <p><center><strong>Improving Feasibility with Continuous Integration and Testing</strong></center></p> 
                                                            </div>
                                                        </a>

                                                    </div>

                                                </div>
                                            </div> 
                                        </div>
                                    </div>

                                    <!--/.item-->
                                    <!-- <div class="item">
                                        <div class="row">
                                             <div class="col-sm-4"><!--webinar--->
                                    <!--  <div class="portfolio-item">
                                          
                                               <div class="card">
                                               <div class="embed-responsive embed-responsive-16by9">  
                                               <!---<a class="linkText1" target="_blank"  href="http://www.miraclesoft.com/events/webinar-after.php?eventId=46"><img src="images/leverage.png" alt="Soasta" class="img-responsive"></a>--->
                                            <!---  <iframe src="https://player.vimeo.com/video/141668036" width="100%" height="auto" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                                  </div> 
                                             <a class="linkText1" target="_blank"  href="http://www.miraclesoft.com/events/webinar-after.php?eventId=46">
                                                <div class="container" style="background-color:#eee; margin-top:-5px;">
                              
                                                      <p><center><strong>Experience the power of Enterprise Connectivity with Bluemix  </strong></center></p>
                                                </div>
                                             </a>
                                         </div>
                                         </div>
                                          
                                     
                                  </div> 
                                  </div>
                              </div> --->
                                </div>
                            </div>
                        </div>
                        <!--/.row-->
                    </div>


                </div>
                <div class="col-sm-3 sidebar pull-right">
                    <br>
                    <div class="mini-submenu">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </div>
                    <div class="list-group">
                        <style type="text/css">
                            .list-group-item-1 {
                                position: relative;
                                display: block;
                                padding: 10px 15px;
                                margin-bottom: -1px;
                                background-color: #000;
                            }
                            .btn-primary {
                                color: #fff!important;
                                background-color: #00aae7!important;
                                border-color: #00aae7!important;
                            }
                        </style>
                        <a href="index" class="list-group-item-1">
                            <div>
                                <center><strong><font size="3%!important" color="#fff"  onMouseOut="this.style.color='#fff'" onMouseOver="this.style.color='#b7b2b3'">&nbsp; Big	Data,	BI	and	Analytics
                                        </font></strong>
                                </center>
                            </div>
                        </a>
                        <a href="data-offerings" class="list-group-item">
                            <div>
                                <center><strong><font size="3%!important" color="#000">&nbsp;Our	Data	Offerings	
                                        </font></strong>
                                </center>
                            </div>
                        </a>
                        <a href="engaging-with-miracle" class="list-group-item">
                            <div>
                                <center><strong><font size="3%!important" color="#000">&nbsp; Engaging	with	Miracle	
                                        </font></strong>
                                </center>
                            </div>
                        </a>

                        <a href="industry-use-cases" class="list-group-item">
                            <div>
                                <center>
                                    <strong><font size="3%!important" color="#000">&nbsp; Industry	Use	Cases		
                                        </font></strong>
                                    <center>
                                        </div>
                                        </a>

                                        <a href="more-resources" class="list-group-item">
                                            <div>
                                                <center>
                                                    <strong><font size="3%!important" color="#00aae7">&nbsp;More Resources		
                                                        </font></strong>
                                                    <center>
                                                        </div>
                                                        </a>
                                                        <br>
                                                        <div >
                                                            <div class="widget-content themed-background text-light-op">
                                                                <center><strong><font color="#ffffff">Thought Leadership</font></strong></center>
                                                            </div>
                                                            <div class="widget box">
                                                                <div class="widget-content" id="check" >
                                                                    <style>
                                                                        .card {
                                                                            box-shadow: 0 0 0 0 rgba(0,0,0,0.2);
                                                                            transition: 0.3s;


                                                                            border:2px solid #232527;
                                                                        }



                                                                        img {
                                                                            border-radius: 0 0 0 0;
                                                                        }

                                                                        .container {
                                                                            padding: 2px 16px;
                                                                        }
                                                                        #check {
                                                                            background-image:url('<?= AMAZON_URL ?>/images/dataservices/bottling.png'); 
                                                                            background-size: 260px 140px;
                                                                            opacity:0.6;
                                                                        }
                                                                        .site-footer {
                                                                            padding-top: 11px !important;
                                                                            padding-bottom: 40px !important;
                                                                        }
                                                                        .widget {
                                                                            margin-bottom: 0px!important;
                                                                        }
                                                                        .footer-nav-links a {
                                                                            display: block !important;
                                                                            padding: 0 7px !important;
                                                                            width: 30px !important;
                                                                            height: 40px !important;
                                                                            line-height: 40px !important;
                                                                            text-align: center !important;
                                                                            border-radius: 3px !important;
                                                                            background-color: rgba(0, 0, 0, .5) !important;
                                                                        }
                                                                        .footer-nav a {
                                                                            color: #ffffff !important;
                                                                            opacity: 1 !important;
                                                                        }
                                                                        .footer-nav-links a {
                                                                            display: block !important;
                                                                            padding: 0 7px !important;
                                                                            min-width: 30px !important;
                                                                            height: 30px !important;
                                                                            line-height: 30px !important;
                                                                            text-align: center !important;
                                                                            border-radius: 3px !important;
                                                                            background-color: rgba(0, 0, 0, .5) !important;
                                                                        }
                                                                        .footer-nav a {
                                                                            color: #ffffff !important;
                                                                        }
                                                                        .list-inline> li {
                                                                            display: inline-block;
                                                                            padding-top: 10px !important;
                                                                            padding-right: 10.2px !important;
                                                                            padding-left: 0em!important;
                                                                        }
                                                                        .list-inline> span {
                                                                            display: inline-block;
                                                                            padding-top: 10px !important;
                                                                            padding-right: 0px !important;
                                                                            padding-left: 0.2em!important;
                                                                        }
                                                                        .widget-hover:hover
                                                                        {
                                                                            background-color:#0d416b !important;
                                                                        }
                                                                        .register-hover:hover
                                                                        {
                                                                            background-color:#232527;
                                                                        }
                                                                        label
                                                                        {
                                                                            font-size:15px !important;
                                                                        }
                                                                        .linkText1:hover{
                                                                            color:#00aae7 !important;
                                                                        }

                                                                        .linkText1{color:#232527 !important;}
                                                                    </style>
                                                                    <center>
                                                                        <a href="http://www.miraclesoft.com/library/CaseStudy/nextgen-integration-platform-electronics-retailer">
                                                                            <h3 class="heavy"></h3>
                                                                            <p><font size="3px"color="#fff"><style="opacity:0!important;"><strong>Establishing NextGen Integration Platform for Electronics Retailer</strong></style></font></p>
                                                                            </a>
                                                                        </center>
                                                                    </div>
                                                                </div>
                                                                <div class="widget-content  text-dark register-hover">
                                                                    <a class="linkText1" href="http://www.miraclesoft.com/library/CaseStudy/nextgen-integration-platform-electronics-retailer" target="_blank">
                                                                        <center><strong><font color="#fff"  onMouseOut="this.style.color='#fff'" onMouseOver="this.style.color='#b7b2b3'">Read Today</font></strong></center>
                                                                    </a>
                                                                </div>
                                                                </a>
                                                            </div>
                                                            <div>
                                                                <ul class="footer-nav footer-nav-links list-inline">
                                                                    <li><a href="https://www.facebook.com/miracle45625" target="_blank" class="social-facebook" data-toggle="tooltip" title="" data-original-title="Like our Facebook page"><i class="fa fa-fw fa-facebook"></i></a></li>
                                                                    <li><a href="https://twitter.com/Team_MSS" target="_blank" class="social-twitter" data-toggle="tooltip" title="" data-original-title="Follow us on Twitter"><i class="fa fa-fw fa-twitter"></i></a></li>
                                                                    <li><a href="https://plus.google.com/105262074634409319991/" target="_blank" class="social-google-plus" data-toggle="tooltip" title="" data-original-title="Like our Google+ page"><i class="fa fa-fw fa-google-plus"></i></a></li>
                                                                    <li><a href="https://www.linkedin.com/company/miracle-software-systems-inc" target="_blank" class="social-linkedin" data-toggle="tooltip" title="" data-original-title="Follow us on LinkedIn"><i class="fa fa-linkedin"></i></a></li>
                                                                    <li><a href="https://www.flickr.com/photos/team_miracle" target="_blank" class="social-flickr" data-toggle="tooltip" title="" data-original-title="Follow us on LinkedIn"><i class="fa fa-flickr"></i></a></li>
                                                                    <span><a href="https://www.youtube.com/c/Team_MSS" target="_blank" class="social-youtube" data-toggle="tooltip" title="" data-original-title="Watch our videos on YouTube"><i class="fa fa-youtube-play"></i></a><span>
                                                                            </ul>
                                                                            </div>
                                                                            <span data-toggle="collapse">
                                                                                <div class="widget">
                                                                                    <a href="mailto:data@miraclesoft.com" > <div class="widget-content widget-hover themed-background text-light-op">
                                                                                            <center><strong><font color="#fff">
                                                                                                    Contact Us</font></strong></center>
                                                                                        </div></a>
                                                                                </div>
                                                                            </span>
                                                                            </div>
                                                                            <div class="col-sm-3">
                                                                                <br>
                                                                            </div>
                                                                            </div>
                                                                            </div>


                                                                            <div class="row">

                                                                                <div class="col-sm-12">

                                                                                    <p class="methodText">
                                                                                        For more information regarding <strong>Miracle’s Big Data and Analytics Offerings</strong> reach out to <strong><a href="mailto:data@miraclesoft.com" class="linkText">data@miraclesoft.com</a></strong>
                                                                                    </p></div>

                                                                            </div>

                                                                            <link rel="stylesheet" href="../../css/box.css">
                                                                            <script>
                                                                                $('#menu-button').click(function(e){
                                                                                    e.stopPropagation();
                                                                                    $('#hide-menu').toggleClass('show-menu');
                                                                                });
                                                                                $('#hide-menu').click(function(e){
                                                                                    e.stopPropagation();
                                                                                });
                                                                                $('body,html').click(function(e){
                                                                                    $('#hide-menu').removeClass('show-menu');
                                                                                });
                                                                            </script>

                                                                            <br>
                                                                            <?php
                                                                            if ($validationType == 'Login' && $isValidUser == 'NO') {
                                                                                ?>
                                                                                <script>
                                                                                    $("#loginToggle").click() ;
                                                                                    $(".hoverform").show();
                                                                                </script>
                                                                                <?php
                                                                            }
                                                                            if ($validationType == 'SignUp' && $isValidUser == 'NO') {
                                                                                // $signupErrMessage
                                                                                ?>
                                                                                <script>
                                                                                    // $("#loginToggle").click() ;
                                                                                    $(".hoverform").show();
                                                                                </script>
                                                                                <?php
                                                                            }
                                                                            ?>
                                                                            </section>
                                                                            <!--/#about-us-->
                                                                            <?php include '../../footer.php'; ?>
                                                                            </body>
                                                                            </html>