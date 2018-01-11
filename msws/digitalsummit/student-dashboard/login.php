
<!DOCTYPE html>

    <head>
          <title>Digital Summit | Login </title>
    
    
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
        <?php include '../../config/Locations.php';
 include '../config/DS17Config.php';
 ?>
 <link rel="shortcut icon" href="<?= AMAZON_URL ?>/ds17/student/images/favicon.ico" type="image/x-icon">
 
 
  <?php 
       require '../../config/ConnectionProvider.php';
       require '../classes/PasswordUtility.php';
       
      
    
       $resultMessage="";
       session_start();
       if (isset($_SESSION['ses_DS17_USER_EMAIL']) && $_SESSION['ses_DS17_USER_EMAIL'] != "") {
       	header('Location: profile.php');
       } 
       
       if(isset($_POST['btnLoginSubmit'])){
       	try {
       		$userEmail= isset($_POST["userEmail"]) ? $_POST["userEmail"] : '';
       		$password= isset($_POST["password"]) ? $_POST["password"] : '';
       		
       		$Query = "SELECT Id,Email,PASSWORD,FirstName,LastName,MobileNumber,AltMobileNumber,Street,State,District,PostalCode,Country,Designation,AttendeeType,Gender,CollegeName,OtherCollegeName FROM tblDs17Users WHERE Email=:tempUseremail";
       		
       		$stmt = $conn->prepare($Query);
       		$stmt->bindParam(':tempUseremail', trim($userEmail));
       		$stmt->execute();
       		
       		if ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
       			
       			$encPassword = $row[2];
       			$currentUserFirstName = $row[3];
       			$currentUserLastName = $row[4];
       			$currentUserMobileNumber = $row[5];
       			
       			$currentUserAltMobileNumber = $row[6];
       			$currentUserStreet = $row[7];
       			$currentUserState = $row[8];
       			$currentUserDistrict = $row[9];
       			$currentUserPostalCode = $row[10];
       			$currentUserCountry = $row[11];
       			$currentUserDesignation = $row[12];
       			$currentAttendeeType = $row[13];
       			$currentUserGender = $row[14];
       			$currentUserCollegeName = $row[15];
       			$currentUserOtherCollegeName = $row[16];
       			
       			
       			
       			$passwordutility = new PasswordUtility();
       			
       			$dec_pass =$passwordutility->decrypt($encPassword);
       			$dec_pass = trim($dec_pass);
       			
       			
       			if($dec_pass === $password){
       				
       				$_SESSION["ses_DS17_USER_EMAIL"] = $userEmail;
       				$_SESSION["ses_DS17_USER_FIRST_NAME"] = $currentUserFirstName;
       				$_SESSION["ses_DS17_USER_LAST_NAME"] = $currentUserLastName;
       				$_SESSION["ses_DS17_USER_MOBILE"] = $currentUserMobileNumber;
       				$_SESSION["ses_DS17_USER_PASSWORD"] = $password;
       				$_SESSION["ses_DS17_USER_ALT_MOBILE"] = $currentUserAltMobileNumber;
       				$_SESSION["ses_DS17_USER_STREET"] = $currentUserStreet;
       				$_SESSION["ses_DS17_USER_STATE"] = $currentUserState;
       				$_SESSION["ses_DS17_USER_DISTRICT"] = $currentUserDistrict;
       				$_SESSION["ses_DS17_USER_POSTALCODE"] = $currentUserPostalCode;
       				$_SESSION["ses_DS17_USER_COUNTRY"] = $currentUserCountry;
       				$_SESSION["ses_DS17_USER_ATTENDEE_TYPE"] = $currentAttendeeType;
       				$_SESSION["ses_DS17_USER_DESIGNATION"] = $currentUserDesignation;
       				$_SESSION["ses_DS17_USER_GENDER"] = $currentUserGender;
       				$_SESSION["ses_DS17_USER_COLLEGENAME"] = $currentUserCollegeName;
       				$_SESSION["ses_DS17_USER_OTHERCOLLEGENAME"] = $currentUserOtherCollegeName;
       				
       				header("Location: profile.php");
       			}else {
       				$resultMessage  ="Invalid credentiales!";
       			}
       			
       			
       			
       			
       		}else {
       			$resultMessage  ="Emaild not existed!";
       		}
       		
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
    
    background: #000 url('<?= AMAZON_URL ?>/ds17/student/images/login-screen.png') no-repeat center center fixed;
    
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
                   <img src="<?= AMAZON_URL ?>/ds17/student/images/DSWhite-01.svg"  class="img-responsive" style="height:180px;width:180px">
               </img></center>
                    <div class="row">
                       
                         <div class="col-md-12">
                            <div class="contact-sec">
                                   <div class="row">
                                   <div class="col-sm-4">
                                   </div>
                                       <center> <div class="col-md-4" style="background: #ffffff none repeat scroll 0 0;padding:60px !important;">   
                                             <div class="widget-title">
                                                  <h3>Student Login</h3>
                                             
                                             </div><!-- Widget title -->
                                             <div class="account-form">
                                                  <form method="POST" action="">
                                                       <div class="row">
                                                            <div class="feild col-md-12">
                                                                 <input type="text" id="userEmail" name="userEmail" placeholder="User Email" required="required"/>
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
                                                              <a href="forgot-password.php" class="ford"> Forgot Password</a>
                                                            </div>
                                                       </div>
                                                  </form>
                                             </div>
                                            
                                        </div></center>
                                        <div class="col-sm-4">
                                        </div>
                                   <script src="js/jquery-2.1.3.js"></script>
<script src="js/bootstrap.min.js"></script >


<script type="text/javascript">
function loadLoginBtn(){
	var userEmail = $("#userEmail").val().trim();
	var password = $("#password").val().trim();
	if(userEmail.length>0&&password.length>0){


		
		$("#btnLoginSubmit").button('loading');
		return true;
	}else {
		return false;
	}
		
}


</script>

                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
      
        
    </body>
</html>