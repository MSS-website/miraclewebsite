
<!DOCTYPE html>

    <head>
          <title>Digital Summit | Login </title>
    
    <?php include '../../config/Locations.php';
 include '../config/DS17Config.php';
 include '../../config/MailConfig.php';
 ?>
 <link rel="shortcut icon" href="<?= AMAZON_URL ?>/ds17/student/images/favicon.ico" type="image/x-icon">
 
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
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
button:hover{color:#ffffff !important;}
 .ford{float:right;margin-top:27px;}
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
 
.inputmail{
    border: 1px solid #e0e5e7;
    color: #9b9b9b;
    float: left;
    font-family: Roboto;
    font-size: 12px;
    margin-bottom: 8px;
    padding: 13px 24px;
    width: 100%;
} 
        </style>
       <?php 
       
       require '../../config/ConnectionProvider.php';
       require '../classes/PasswordUtility.php';
       
       function random_string($length) {
       	$key = '';
       	$keys = array_merge(range(0, 9), range('a', 'z'));
       	
       	for ($i = 0; $i < $length; $i++) {
       		$key .= $keys[array_rand($keys)];
       	}
       	
       	return $key;
       }
       
       
       
       $resultMessage="";
       $userName="";
       if(isset($_POST['btnForgetPwdSubmit'])){
       	try {
       		$userEmail= isset($_POST["userEmail"]) ? $_POST["userEmail"] : '';
       		
       		$countUserRecords=0;
       		$Query = "SELECT Id,Email,FirstName,LastName FROM tblDs17Users WHERE Email=:tempUseremail";
       		$stmt = $conn->prepare($Query);
       		$stmt->bindParam(':tempUseremail', $userEmail);
       		$stmt->execute();
       		$countUserRecords= $stmt->rowCount();
       		if ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
       			$userName = $row[2].' '.$row[3];
       		}
       		if($countUserRecords>0){
       		
       		$newPassword = random_string(8);
       	
       				$passwordutility = new PasswordUtility();
       				$enc_pass =$passwordutility->encrypt(trim($newPassword));
       				
       				$Query = "UPDATE tblDs17Users SET Password=:tempPassword WHERE Email=:tempUseremail";
       				
       				$stmt = $conn->prepare($Query);
       				$stmt->bindParam(':tempPassword', $enc_pass);
       				$stmt->bindParam(':tempUseremail', $userEmail);
       				if($stmt->execute()){
       					$resultMessage='<div class="alert alert-success alert-dismissable">
        		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        		<strong>Your password details has been sent to you email.</strong> .
                  </div>';
       					require '../classes/DS17MailManager.php';
       					$mailmanager = new DS17MailManager();
       					$mailmanager->sendDs17ForgetPassword($userName,$userEmail,$newPassword);
       					
       				}else {
       					$resultMessage='<div class="alert alert-danger alert-dismissable">
        		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        		<strong>Oops! something wrong Please try again.</strong> .
                  </div>';
       				}
       				
       		}else {
       			
       		$resultMessage='<div class="alert alert-danger alert-dismissable">
        		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        		<strong>Oops! emailId not existed.</strong> .
                  </div>';
       	}
       		
       		
       		
       		
       		
       	}catch(Exception $exc){
       		
       		$exc->getMessage();
       		$resultMessage='<div class="alert alert-success alert-dismissable">
        		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        		<strong>Oops! </strong> '.$exc.'
                  </div>';
       	}
       }
       
       
       ?>
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
                                                  <form action="" method="post">
                                                       <div class="row">
                                                            <div class="feild col-md-12">
                                                                 <input type="email" class="inputmail" id="userEmail" name="userEmail" placeholder="Enter Email id" required="required"/>
                                                            </div>
                                                            <div class="feild col-md-12">
                                                            <?php echo $resultMessage; ?>
                                                            </div>
                                                            <div class="feild col-md-6">
                                                               <button type="submit" name="btnForgetPwdSubmit" id="btnForgetPwdSubmit" class="btn" onclick="loadRestBtn();" data-loading-text="<i class='fa fa-spinner fa-spin'></i>Loading..">Submit</button>
                                                             
                                                            </div>
                                                            <div class="feild col-md-6">
                                                              <a href="login.php" class="ford"> Back to Login</button></a>
                                                             
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
function loadRestBtn(){
	var userEmail = $("#userEmail").val().trim();
	
	if(userEmail.length>0){


		if(checkEmail(userEmail)){
		$("#btnForgetPwdSubmit").button('loading');
		return true;
		}else {
			return false;
		}
	}else {
		return false;
	}
		
}


function checkEmail(element){
	
if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(element)){return(true);
}
return(false);
}

</script>

        
    </body>
</html>