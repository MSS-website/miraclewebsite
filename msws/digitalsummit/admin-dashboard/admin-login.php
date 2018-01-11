
<!DOCTYPE html>

    <head>
          <title>Digital Summit | Login </title>
       <?php include '../../config/Locations.php';
 include '../config/DS17Config.php';
 ?>
    <link rel="shortcut icon" href="<?= AMAZON_URL ?>/ds17/admin/images/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
        
        
  <?php 
       
       
       include '../../config/general.php';
      
    
       $resultMessage="";
       session_start();
       if (isset($_SESSION['SES_DS17_ADMIN_LOGINID']) && $_SESSION['SES_DS17_ADMIN_LOGINID'] != "") {
       	header('Location: admin-index.php');
       } 
       
       if(isset($_POST['btnLoginSubmit'])){
       	try {
       		$loginId= isset($_POST["loginId"]) ? $_POST["loginId"] : '';
       		$password= isset($_POST["password"]) ? $_POST["password"] : '';
       		
       		
       		//$data = array("LoginId" => "$loginId", "Password" => "$password", "Authorization" => base64_encode(SERVICE_AUTHORIZATION));
       		$data = array("LoginId" => "$loginId", "Password" => "$password", "Authorization" => base64_encode(SERVICE_AUTHORIZATION));
       		$data_string = json_encode($data);
       		$curl = curl_init(SERVICE_URL . "generalServices/doLoginDS17Employee");
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
       					
       					$_SESSION["SES_DS17_ADMIN_LOGINID"] = $myArray['LoginId'];
       					$_SESSION["SES_DS17_ADMIN_EMAIL"] = $myArray['Email1'];
       					$_SESSION["SES_DS17_ADMIN_FNAME"] = $myArray['FName'];
       					$_SESSION["SES_DS17_ADMIN_LNAME"] = $myArray['LName'];
       					$_SESSION["SES_DS17_ADMIN_MNAME"] = $myArray['MName'];
       					$_SESSION["SES_DS17_IS_ADMIN"] = $myArray['Admin'];
       					$_SESSION["SES_DS17_IS_COORDINATOR"] = $myArray['Coordinator'];
       					header('Location: admin-index.php');
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
       		
       		
       	}catch(Exception $exc){
       		
       		$exc->getMessage();
       		$resultMessage=$exc;
                 
       		
       		
       	}
       	
       }
       ?>
        
        
        <style>

.contact-sec{padding: 0px !important;}
.block {
margin: 0 0 10px;
padding: 20px 15px 1px;
background-color: RGBA(35, 37, 39, 0.78);
border-top-left-radius: 2px;
border-top-right-radius: 2px;
-webkit-box-shadow: 0 2px 0 rgba(218, 224, 232, .5);
box-shadow: 0 2px 0 rgba(218, 224, 232, .5);
}

.block-title {
margin: -20px -5px 20px;
border-bottom: 2px solid #dae0e8;
border-top-left-radius: 2px;
border-top-right-radius: 2px;
color:white;
}
.form-group {
display: block;
margin-top: 0em;
color:white!important;
}
body{
    
    background: #000 url('<?= AMAZON_URL ?>/ds17/admin/images/login-screen.jpg') no-repeat center center fixed;
    
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    margin: 0 auto;
    display: block;
    position: relative;
    height: 100%;
    width: 100%;
    text-align: center;
   
}
button{background: #ff5f5f none repeat scroll 0 0;width:100px;float:left;
    border: medium none;
    color: #ffffff;font-weight:bold;
    font-family: Rubik;
    font-size: 12px;
    margin-top: 20px;
    padding: 14px 30px;
}
button:hover{color:#ffffff !important;}
 .ford{float:right;margin-top:27px;}
        </style>
       
    </head>
     
<body class="" style="height:100%;width:100%;">
    <div class="container">
               <center>
                   <img src="<?= AMAZON_URL ?>/ds17/admin/images/DSWhite-01.svg"  class="img-responsive" style="height:180px;width:180px">
               </img></center>
                    <div class="row">
                       
                         <div class="col-md-12">
                            <div class="contact-sec">
                                   <div class="row">
                                   <div class="col-sm-4">
                                   </div>
                                       <center> <div class="col-md-4" style="background: #ffffff none repeat scroll 0 0;padding:60px !important;">   
                                             <div class="widget-title">
                                                  <h3>Login</h3>
                                             
                                             </div><!-- Widget title -->
                                             <div class="account-form">
                                                  <form method="POST" action="">
                                                       <div class="row">
                                                            <div class="feild col-md-12">
                                                                 <input type="text" id="loginId" name="loginId" placeholder="LoginId" required="required"/>
                                                            </div>
                                                            <div class="feild col-md-12">
                                                                 <input type="password" id="password" name="password" placeholder="Password" required="required"/>
                                                            </div>
                                                            <?php if($resultMessage!=''){?>
                                                            <div class="feild col-md-12">
																  <div class="alert alert-danger alert-dismissable">
																    <a href="#" class="close" data-dismiss="alert" aria-label="close">x</a>
																    <strong><?php echo $resultMessage;?></strong>
																  </div>
                                                            </div>
                                                            <?php } ?>
                                                            <div class="feild col-md-6">
                                                             <button type="submit" name="btnLoginSubmit" id="btnLoginSubmit" class="btn" onclick="loadLoginBtn();" data-loading-text="<i class='fa fa-spinner fa-spin'></i>Loading..">Login</button>
                                                              
                                                            </div>
                                                            <div class="feild col-md-6">
                                                              <a href="../../forgot-password.php" class="ford"> Forgot Password</a>
                                                            </div>
                                                       </div>
                                                  </form>
                                             </div>
                                            
                                        </div></center>
                                        <div class="col-sm-4">
                                        </div>
                                   
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
      <script src="js/jquery-2.1.3.js"></script>
<script src="js/bootstrap.min.js"></script >
        <script type="text/javascript">
function loadLoginBtn(){
	var loginId = $("#loginId").val().trim();
	var password = $("#password").val().trim();
	if(loginId.length>0&&password.length>0){


		
		$("#btnLoginSubmit").button('loading');
		return true;
	}else {
		return false;
	}
		
}


</script>
    </body>
</html>