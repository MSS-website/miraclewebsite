<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="description">
        <meta content="" name="author">
        <title>
            Corporate Standards Library | Miracle
        </title>
        <?php include '../config/Locations.php'; ?>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/font-awesome.min.css" rel="stylesheet">
        <link href="../css/main.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link href="../css/default.css" rel="stylesheet" type="text/css">
        <link href="../css/component.css" rel="stylesheet" type="text/css">
        <script src="../js/modernizr.custom.js"></script><!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?= AMAZON_URL ?>/images/favicon.ico" rel="shortcut icon">
        <style>
            .overlay{
                background-color:rgba(0,0,0,0.5) !important;
            }
            .modal-dialog
            {
                overflow:hidden !important;

            }
            ul.breadcrumb > li > a, ul.breadcrumb > li .divider {
                color: #fff;
            }
            ul.breadcrumb > li.active {
                color: #fff;
            }
            ul.breadcrumb > li > a:hover {
                color: #fff;
            }
            body{
                overflow-x:hidden;
            }
            body > section {
                padding-top: 0px !important;}

            .tinted-image {
                background: 
                    /* top, transparent red */
                    linear-gradient(
                    rgba(0, 0, 0, 0.55), 
                    rgba(0, 0, 0, 0.55)
                    ),
                    /* your image */
                    url("../img/key.jpg");
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }
            .modal-dialog
            {
                overflow:hidden !important;

            }


            .section_bg{
                background: 
                    /* top, transparent red */
                    linear-gradient(
                    rgba(0, 0, 0, 0.55), 
                    rgba(0, 0, 0, 0.55)
                    ),
                    /* your image */
                    url("<?= AMAZON_URL ?>/images/banners/corporateStandards.png");
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
              /*  background-position:0px 71px;*/
            }



        </style>
    </head><!--/head-->
    <?php
    include '../config/general.php';


    $resultMessage = '';
    if (isset($_POST['btnSubmit'])) {
        try {


            if (!get_magic_quotes_gpc()) {
                $rloginId = addslashes($_POST['loginId']);
                $rpassword = addslashes($_POST['password']);
            } else {
                $rloginId = $_POST['loginId'];
                $rpassword = $_POST['password'];
            }
            /*  $serviceUrl = SERVICE_URL . '/webLoginCheck/';
              $curl = curl_init($serviceUrl);
              curl_setopt($curl, CURLOPT_POST, true);
              curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
              curl_setopt($curl, CURLOPT_POSTFIELDS, "loginId=" . $rloginId . "&password=" . $rpassword);
              $curl_response = curl_exec($curl);
              //echo 'response-->'.$curl_response;
              if (1 !== $curl_response) {

              $myArray = json_decode($curl_response, true);
              //echo 'code-->'.$myArray['code'];

              if ($myArray['code'] == '200') {
              session_start();
              $_SESSION["ses_EmpLoginId"] = $rloginId;
              $_SESSION["ses_EmpPassword"] = $rpassword;
              header('Location: standards_download_page.php');
              }
              //$resultMessage = $myArray['message'];
              else
              $resultMessage = "<font color=red size=2px>" . $myArray['message'] . "</font>";
              } */
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
                        session_start();
                        $_SESSION["ses_EmpLoginId"] = $rloginId;
                        $_SESSION["ses_EmpPassword"] = $rpassword;

                        header('Location: standards_download_page.php');
                    } else {

                        if ($myArray['ResultString'] == 'InValidCredentiales')
                            $resultMessage = "<font color=red size=2px>" . INVALID_CREDENTIALES_MESSAGE . " </font>";
                        else
                            $resultMessage = "<font color=red size=2px>" . INACTIVE_MESSAGE . " </font>";
                    }
                }else {
                    $resultMessage = "<font color=red size=2px>" . UNAUTHORIZED_ACCESS_MESSAGE . "</font>";
                }
            }
            curl_close($curl);
        } catch (Exception $exc) {


            $exc->getMessage();
            $resultMessage = '<font color=red size=2px>' . $exc . '</font>';
            header('Location: ../back-end-error.php?resultMessage=' . $resultMessage);
        }
    }
    ?>


    <?php include '../header.php'; ?>
    <body>
        
        <section>
        <div class="overlay section_bg">
            <div class=" container">
                <br>
                <div class="row">    
                    <div class="col-sm-7 text-left" style="margin-bottom:16px;">  
                        <br>
                        <h1 class="micro "><font color="#fff"><strong>Corporate Standards Library</strong></font></h1>

                    </div>
                    <div class="col-sm-5 text-right">
                        <br>
                       <ul class="breadcrumb pull-right">
                        <li><a href="../">Home</a></li>
                        <!-- Breadcrumb div starts here --> 
                        <li class="active">Corporate Standards</li>
                        <!-- Breadcrumb div Ends here --> 
                    </ul>
                    </div>
                </div><br>
            </div>
        </div>

    </section>
        <section class="container">
            <br>
<!--            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-6 text-left">
                    <h1 class="heavy">
                        Corporate Standards Library
                    </h1>
                </div>
                <div class="col-sm-4 text-right">
                    <ul class="breadcrumb pull-right">
                        <li>
                            <a href="../">Home</a>
                        </li>
                        <li class="active">Corporate Standards
                        </li>
                    </ul>
                </div>
                <div class="col-sm-1"></div>
            </div>-->
            <div class="row">
                <div class="col-sm-8">
                    <p class="methodText">
                        Download our corporate branding packet by entering your Miracle credentials in the form. Once you have been validated as a Miraclite you will able to access a web page with the details to acquire the corporate standards packet. The package consists of the following artifacts : 
                    </p>
                    
                 <div class="col-sm-12">
                 <div class="col-sm-12">
                    <ul class="methodText">
                        <li>Miracle Corporate Logos(light/dark) : EPS/PNG/JPEG</li>
                        <li>Miracle Corporate Document Template for MS Word : Dark/Light(.dotx)</li>
                        <li>Miracle Corporate Presentation Template for MS PowerPoint : Light(.potx)</li>
                        <li>Miracle Partnership Logos : (IBM/Oracle/SAP/RedHat)</li>
                        <li>Miracle Corporate Standards and Guidelines Document</li>
                        <li>Flat vector Image Collection</li>
                        <li>Common Slide collection</li>
                    </ul>   
                    </div>
                     </div>
                    <p class="greyText methodText">
                        Please use only Miracle approved corporate templates for showcasing ourselves, and do not use the corporate templates for inapropriate uses. 
                    </p>
                    <p class="greyText"></p>
                </div>
                <div class="col-sm-4">
                    <div class="jumbotron" style="padding:33px;">
                        <!-- <form id="referralForm"> -->
                        <form id="referralForm" method="post" action="#">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h5 class="heavy" style="padding-bottom:10px;">Employee Login</h5>
                                    <div class="form-group">
                                        <input type="text" tabindex="1" class="form-control" required="required" placeholder="Login Id" id="loginId" name="loginId"onchange="fieldLengthValidator(this);">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" tabindex="2" class="form-control" required="required" placeholder="Password" id="password" name="password"onchange="fieldLengthValidator(this);">
                                    </div>
                                    <?php echo $resultMessage; ?>
                                    <button style="margin-top:10px;" type="submit" tabindex="3" class="btn btn-primary" name="btnSubmit" id="btnSubmit">
                                        I'm Ready! Let's Go. 
                                    </button>
                                    <hr>
                                    <p style="font-size:16px!important;">Forgot password!<a href="../forgot-password.php" class="linkText"><strong> Click here.</strong></a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="row"><!-- Alert Modal for Validations - Starts Here -->
                        <div class="col-sm-12">
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <strong>
                                                <div id="showAlertText">
                                                </div>
                                            </strong>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">
                                                Close
                                            </button>
                                        </div><!-- Modal Footer -->
                                    </div><!-- Modal Content -->
                                </div><!-- Modal Dialog -->
                            </div><!-- Modal Container-->
                        </div>
                    </div><!-- Alert Modal ends here -->
                </div>
            </div>
        </section>
        <?php include '../footer.php'; ?>
    </body>
</html>