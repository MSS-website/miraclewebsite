<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Password Change | Miracle</title>
    <?php include 'config/Locations.php';?>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/default.css" />
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<script src="js/menuLoad.js"></script>
	<script src="js/modernizr.custom.js"></script>
           <script type="text/javascript" src="js/Validation.js"></script>
         <script type="text/javascript" src="js/custom.js"></script>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    
<!--[if lte IE 8]>
<div id="warning">
<META http-equiv="refresh" content="0;URL=http://www.miraclesoft.com/outdated-browser.php">
</div>-->

    
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?= AMAZON_URL ?>/images/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= AMAZON_URL ?>/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= AMAZON_URL ?>/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= AMAZON_URL ?>/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?= AMAZON_URL ?>/images/ico/apple-touch-icon-57-precomposed.png">

</head><!--/head-->

<?php
include 'config/general.php';
$resultMessage = '';
if(isset($_POST['btnSubmit'])){
try{
     if(! get_magic_quotes_gpc() ){
            $remail = addslashes ($_POST['email']);
            
       }else {
           $remail = $_POST['email'];
           
       }
//$api =SERVICE_URL;
     //$serviceUrl = 'http://172.17.11.250:8080/HubbleWS/general/webforGotPassword/';
     
      $data = array("EmailId" => "$remail", "Authorization" => base64_encode(SERVICE_AUTHORIZATION));
            $data_string = json_encode($data);
            $curl = curl_init(SERVICE_URL . "generalServices/forgetPassword");
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
                    
                    
                    
    
    
 
            $response=$myArray['Result'];
            
if($myArray['isReset']){
    $resultMessage = '<div class="alert alert-success alert-dismissable fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>'.$response.'</strong>  </div>';
}else {
    $resultMessage = '<div class="alert alert-danger alert-dismissable fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>'.$response.'</strong>  </div>';
}
                   
                }else {
                    $resultMessage = "<font color=red size=2px>" . UNAUTHORIZED_ACCESS_MESSAGE . "</font>";
                }
            }
            curl_close($curl);
        } catch (Exception $exc) {


            $exc->getMessage();
            $resultMessage = '<font color=red size=2px>' . $exc . '</font>';
            header('Location: back-end-error.php?resultMessage=' . $resultMessage);
        }
}


?>


<?php include 'header.php';?>
<body>
  
   <section id="career" class="container">      
        <br>
        <br>
        <br>
        <br>
        <div class="row">
          <div class="col-sm-1"></div>
          <div class="col-sm-5 text-left">
            <div class="pageTitle">
              <strong>Password Change</strong>
            </div>
          </div>
          <div class="col-sm-5 text-right">
            <ul class="breadcrumb pull-right">
                <li><a href="../">Home</a></li>
                <li class="active">Forgot Password</li>
            </ul>
          </div>
          <div class="col-sm-1"></div>
          </div>
         <div class="row">
             <div class="col-sm-1"></div>    
             <div class="col-sm-6">
                <p class="methodText">
                    <strong>Forgot your password! Not a problem at all. </strong><br>
                    <p class="methodText">It is very common for someone to forget their password, and this is the most commonly used link on most Account Based Websites. Don't worry as with a simple click you can get back on track with your work. Let us know your email ID and will send a verification link back to you to change your password. </p>
                </p>
             </div>
             <div class="col-sm-4">
                <div class="jumbotron">
                    <form id="referralForm" method="post" action="#">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="subSectionTitle"><strong>Password Change</strong></div>
                                <div class="form-group">
                                  <!--  <input type="text" tabindex="1" class="form-control" required="required" placeholder="Email ID" id="email" name="email"onchange="fieldLengthValidator(this);"> -->
                                      <input type="text" tabindex="1" class="form-control" required="required" placeholder="Email ID" id="email" name="email" onchange="return checkEmail(this);fieldLengthValidator(this);" onblur="return valueCheck(this);">
                                </div>
                                 <?php echo $resultMessage;?>
                                <button type="submit" tabindex="3" class="btn btn-primary" name="btnSubmit" id="btnSubmit">
                                    Send Verification Link
                                </button>
                                
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
                      <div class="row"><!-- Modal for Forgot Password Starts here -->
                        <div class="col-sm-12">
                          <div class="modal fade" id="pwdModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-body">
                                  <form action="#" id="forgotPwdForm">
                                      <div class="row">
                                          <div class="col-sm-10">
                                             <div class="form-group">
                                                <input type="text" tabindex="1" class="form-control" required="required" placeholder="Email" id="corporateEmail" name="corporateEmail" onchange="fieldLengthValidator(this);">
                                             </div>
                                            <button type="submit" tabindex="2" class="btn btn-primary" name="btnSubmit" id="btnSubmit">
                                                Submit Username 
                                            </button>     
                                          </div>
                                      </div>
                                  </form>
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
                      </div><!-- Forgot Password Modal - Ends Here -->
             </div>
             <div class="col-sm-1"></div>
         </div>
    </section>
<?php include 'footer.php';?>

</body>
</html>

   