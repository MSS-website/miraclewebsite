<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="As we are growing we need our team members to help us out to bring the best to our team. Refer a friend today and help grow the Miracle Family. ">
        <meta name="author" content="">
        <title>Suggestion form | Miracle</title>
        <?php include '../config/Locations.php'; ?>

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
                    url("<?= AMAZON_URL ?>/images/banners/SuggestionBox.png");
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
            /*  $serviceUrl = SERVICE_URL . '/webLoginCheck/';
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
              header('Location: suggestion-form.php');
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
                        header('Location: suggestion-form.php');
                    } else {

                        if ($myArray['ResultString'] == 'InValidCredentiales')
                            $resultMessage = "<font size=2px>" . INVALID_CREDENTIALES_MESSAGE . " </font>";
                        else
                            $resultMessage = "<font size=2px>" . INACTIVE_MESSAGE . " </font>";
                    }
                }else {
                    $resultMessage = "<font  size=2px>" . UNAUTHORIZED_ACCESS_MESSAGE . "</font>";
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
                        <div class="col-sm-7 text-left">  
                            <br><br>
                            <h1 class="micro "><font color="#fff"><strong>Suggestion Box</strong></font></h1>

                        </div>
                        <div class="col-sm-5 text-right">
                            <br><br>
                            <ul class="breadcrumb pull-right">
                                <li><a href="../">Home</a></li>
                                <li><a href="../contact">Company</a></li>
                                <li class="active">Suggestion form</li>
                                <!-- Breadcrumb div Ends here --> 
                            </ul>
                        </div>
                    </div><br>
                </div>
            </div>

        </section>
        <section id="career" class="container">      
            <br>
            <!--            <br>
                        <br>
                        <br>
                        <div class="row">
                            <div class="col-sm-1"></div>
                            <div class="col-sm-5 text-left">
                                <h1 class="heavy">
                                    Suggestion Box
                                </h1>
                            </div>
                            <div class="col-sm-5 text-right">
                                <ul class="breadcrumb pull-right">
                                    <li><a href="../">Home</a></li>
                                    <li><a href="../contact">Company</a></li>
                                    <li class="active">Suggestion form</li>
                                </ul>
                            </div>
                            <div class="col-sm-1"></div>
                        </div>-->
            <div class="row">
                <div class="col-sm-7">

                    <p class="methodText">

                        <strong>Have a suggestion (or) idea to share?</strong>
                        Now we have the best way for you to reach out to us and help us out as we shape the future of this organization. With our new <strong> Suggestion Box </strong> module, internal employees can login and suggest changes (or) propose ideas to the management layer to help improve processes and models. We will always value the opinion and intellect of our employees and your contribution to this organization can never be measured
                    </p>
                    <p class="methodText">Feel free to post with you name, (or) post anonymously to the team as we look forward to improving the team as we gain momentum. We would like to let you know that we will not store your login information along with your suggestion, but we will track down suggestions if there is any un-appropriate language used throughout the text.</p>

                </div>
                <div class="col-sm-5">
                    <div class="jumbotron">
                        <!-- <form id="referralForm"> -->
                        <form id="referralForm" method="post" action="#" onsubmit="loadbutton();">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h5 class="heavy">Employee Login</h5>
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
                                        <?php }?>
                                   
                                    <button type="submit" tabindex="3" class="btn btn-primary" name="btnSubmit" id="btnSubmit" style="padding: 6px 50px;" data-loading-text="<i class='fa fa-spinner fa-spin '></i> loading...">
                                        Login 
                                    </button>
                                    <hr>
                                    <p>Forgot password!<a href="../forgot-password.php" class="linkText"><strong>Click here.</strong></a></p>
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

