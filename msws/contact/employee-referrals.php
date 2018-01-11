<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Employee Referral | Miracle</title>
        
 <?php include '../config/Locations.php';?>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/font-awesome.min.css" rel="stylesheet">

        <link href="../css/main.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../css/default.css" />
        <link rel="stylesheet" type="text/css" href="../css/component.css" />
        <script src="../js/modernizr.custom.js"></script>
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="shortcut icon" href="<?= AMAZON_URL ?>/images/favicon.ico">
        <script type="text/javascript">
        function loadbutton() {
            if($("#loginId").val().trim().length>0&&$("#password").val().trim().length>0)
            $("#btnSubmit").button('loading');
        }
        </script>
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
                    url("<?= AMAZON_URL ?>/images/banners/referal.png");
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
               
            }



        </style>
    </head><!--/head-->
    <?php
    include '../config/general.php';
    /*
      $url = 'http://localhost:8084/EmployeeService/es/general/nseerapu/123';

      // prepare the body data. Example is JSON here
      $data = json_encode(array(
      'description' => 'Inspiring Poetry',
      'public' => 'true',
      'files' => array(
      'poem.txt' => array(
      'content' => 'If I had the time, I\'d make a rhyme'
      )
      )
      ));

      // set up the request context
      $options = ["http" => [
      "method" => "POST",
      "header" => ["Authorization: token " . $access_token,
      "Content-Type: application/json"],
      "content" => $data
      ]];
      $context = stream_context_create($options);

      // make the request
      $response = file_get_contents($url, false, $context);
      $resultMessage = '';
     */
    $resultMessage = '';
    if (isset($_POST['btnSubmit'])) {

        /*  $service_url = 'http://localhost:8084/EmployeeService/es/general/nseerapu/123';
          $curl = curl_init($service_url);
          // $curl_post_data = array(
          //    "user_id" => 42,
          ////    "emailaddress" => 'lorna@example.com',
          //    );
          curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
          curl_setopt($curl, CURLOPT_POST, true);
          // curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);
          $curl_response = curl_exec($curl);
          curl_close($curl);

          // $xml = new SimpleXMLElement($curl_response);

         */

        try {


            if (!get_magic_quotes_gpc()) {
                $rloginId = addslashes($_POST['loginId']);
                $rpassword = addslashes($_POST['password']);
            } else {
                $rloginId = $_POST['loginId'];
                $rpassword = $_POST['password'];
            }

            /*
              ini_set('user_agent', "PHP"); // github requires this
              //$api = 'http://localhost:8084/EmployeeService';
              $api =SERVICE_URL;
              $url = $api . '/es/general/' .$rloginId .'/' .$rpassword;
              // make the request
              $response = file_get_contents($url);

             */


//$api =SERVICE_URL;
            //  $serviceUrl = 'http://172.17.11.250:8080/HubbleWS/general/webLoginCheck/';
            /*   $serviceUrl = SERVICE_URL . '/webLoginCheck/';
              $curl = curl_init($serviceUrl);
              curl_setopt($curl, CURLOPT_POST, true);
              curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
              curl_setopt($curl, CURLOPT_POSTFIELDS, "loginId=" . $rloginId . "&password=" . $rpassword);
              // $curl_response = curl_exec($curl);
              //http://www.codeproject.com/Articles/524228/REST-tutorial-Call-a-REST-Webservice-from-Wordpres

              $curl_response = curl_exec($curl);
              //echo 'response-->'.$curl_response;
              if (1 !== $curl_response) {

              $myArray = json_decode($curl_response, true);
              //echo 'code-->'.$myArray['code'];

              if ($myArray['code'] == '200') {
              session_start();
              $_SESSION["ses_EmpLoginId"] = $rloginId;
              header('Location: employee-referral-form.php');
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

            if (1 !== $curl_response) {

                $myArray = json_decode($curl_response, true);
                if ($myArray['IsAuthenticate']) {

                    if ($myArray['ResultString'] == 'Valid') {
                        session_start();
                        $_SESSION["ses_EmpLoginId"] = $rloginId;
                        header('Location: employee-referral-form.php');
                    } else {

                        if ($myArray['ResultString'] == 'InValidCredentiales')
                            $resultMessage = "<font  size=2px>" . INVALID_CREDENTIALES_MESSAGE . " </font>";
                        else
                            $resultMessage = "<font  size=2px>" . INACTIVE_MESSAGE . " </font>";
                    }
                }else {
                    $resultMessage = "<font size=2px>" . UNAUTHORIZED_ACCESS_MESSAGE . "</font>";
                }
            }
            curl_close($curl);






            /*
              // check we got something back before decoding
              if(false !== $response) {
              echo $response;
              $gists = json_decode($response, true);
              //  echo $gists['message'];
              if($gists['message']=='success'){
              //  echo $gists['name'];
              //  echo $gists['email'];
              //  echo $gists['phone'];
              //   echo $response;
              session_start();
              // Set session variables
              //$_SESSION["ses_EmpName"] = $gists['name'];
              //$_SESSION["ses_EmpEmail"] = $gists['email'];
              //$_SESSION["ses_EmpWorkPhone"] = $gists['phone'];
              $_SESSION["ses_EmpLoginId"] = $rloginId;
              //echo "Employee Name is " . $_SESSION["ses_EmpName"] . ".<br>";
              // remove all session variables
              //session_unset();

              // destroy the session
              //session_destroy();
              //echo "Employee Name is " . $_SESSION["ses_EmpName"] . ".<br>";

              //if($gists['email'] )
              if(strripos($gists['email'],"@")>0){
              //header('Location: employee-referrals.php');
              header('Location: employee-referral-form.php');

              }
              }else {
              $resultMessage = '<font color=red size=2px>'.$gists['message'].'</font>';
              }
              } // otherwise something went wrong
             */
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
                <div class="row">    
                    <div class="col-sm-7 text-left" style="margin-bottom: 17px;">  
                        <br><br>
                        <h1 class="micro "><font color="#fff"><strong>Employee Referral</strong></font></h1>

                    </div>
                    <div class="col-sm-5 text-right">
                        <br><br>
                       <ul class="breadcrumb pull-right">
               <li><a href="../">Home</a></li>
                        <li><a href="../contact">Contact</a></li>
                        <li class="active">Employee Referral</li>
                    </ul>
                    </div>
                </div><br>
            </div>
        </div>

    </section>
        <section id="career" class="container">      
            <br>
            <div class="row">
                 
                <div class="col-sm-8">
                    <p class="methodText">
                        <strong>Have a friend, relative (or) colleague. Bring them into the Miracle Family! </strong><br>
                        Goals set high, Miracle is on the lookout for talented individuals who can take the organization to the next level. We would love to take into consideration the references of our dear and loyal employees. If you have a friend, colleague (or) relative that you would like to refer for a position at Miracle, please login with your corporate credentials and fill in the employee referral form. 
                        <br><br>
                        <strong>We have roles open in the US and India for the following, </strong>
                    <div class="row">
                        <div class="col-sm-6">
                        
                        <div class="container">
                        <div class="col-sm-12">
                        <ul class="methodText">
                                <li>Integration Developers/Leads</li>
                                <li>.NET/SharePoint Developers</li>
                                <li>HR/Operations Executives</li>
                                <li>Project Management Executives</li>
                            </ul>
                        </div>
                             </div>
                        </div>
                        <div class="col-sm-6">
                         <div class="container">
                            <ul class="methodText">
                                <li>Software Trainees</li>
                                <li>Delivery Managers</li>
                                <li>Sales Executives</li>
                                <li>IT Recruiters</li>
                            </ul>
                             </div>
                        </div>
                    </div>
                    </p>
                </div>
                <div class="col-sm-4">
                    <div class="jumbotron" style="padding: 33px;">
                        <!-- <form id="referralForm"> -->
                        <form id="referralForm" method="post" action="#" onsubmit="loadbutton();">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="subSectionTitle" style="padding-bottom:10px;"><strong>Employee Login</strong></div>
                                    <div class="form-group">
                                        <input type="text" tabindex="1" class="form-control" required="required" placeholder="Login Id" id="loginId" name="loginId"onchange="fieldLengthValidator(this);">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" tabindex="2" class="form-control" required="required" placeholder="Password" id="password" name="password"onchange="fieldLengthValidator(this);">
                                      
                                    </div>
                                    <?php if ($resultMessage!= '') { ?>
                                        <div class="row">
                                            <div class="col-sm-12">


                                                <div class="alert alert-danger alert-dismissable fade in">
                                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                    <strong><?php echo $resultMessage; ?></strong>

                                                </div>


                                            </div>
                                        </div>
<?php } ?>
                                    

                                    <button style=" margin-top:10px;" type="submit" tabindex="3" class="btn btn-primary" name="btnSubmit" id="btnSubmit" data-loading-text="<i class='fa fa-spinner fa-spin '></i> loading...">
                                        I'm Ready! Let's Go. 
                                    </button>
                                    <br><br>
                                    <p style="font-size:16px!important;">Forgot your password!<a href="../forgot-password.php" class="linkText"><strong>Click here.</strong></a></p>
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

