<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>

    <!-- Meta-Information -->
    <title>Digital Summit | Student </title>
   
    <!-- Vendor: Bootstrap Stylesheets http://getbootstrap.com -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Our Website CSS Styles -->
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
     <link rel='stylesheet prefetch'
	href=' https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
 <?php include '../../config/Locations.php';
 include '../config/DS17Config.php';
 include '../../config/MailConfig.php';
 ?>
  <link rel="shortcut icon" href="<?= AMAZON_URL ?>/ds17/student/images/favicon.ico" type="image/x-icon">
  
   <?php 
    session_start();
    if (isset($_SESSION['ses_DS17_USER_EMAIL']) && $_SESSION['ses_DS17_USER_EMAIL'] != "") {
    	
    } else {
    	header('Location: login.php');
    }
    $result=isset($_GET["result"]) ? $_GET["result"] : '';
    $urlPasswordResult=isset($_GET["passwordResult"]) ? $_GET["passwordResult"] : '';
    
    
    $userEmail=$_SESSION["ses_DS17_USER_EMAIL"] ;
   /* $currentUserFirstName=$_SESSION["ses_DS17_USER_FIRST_NAME"] ;
    $currentUserLastName=$_SESSION["ses_DS17_USER_LAST_NAME"] ;
    $currentUserMobileNumber=$_SESSION["ses_DS17_USER_MOBILE"] ;
    $currentUserAltMobileNumber=$_SESSION["ses_DS17_USER_ALT_MOBILE"];
    
    $currentUserStreet=$_SESSION["ses_DS17_USER_STREET"];
    $currentUserCountry=$_SESSION["ses_DS17_USER_COUNTRY"] ;
    $currentUserState=$_SESSION["ses_DS17_USER_STATE"] ;
    $currentUserDistrict=$_SESSION["ses_DS17_USER_DISTRICT"] ;
    $currentUserPostalCode=$_SESSION["ses_DS17_USER_POSTALCODE"] ;
    
    */
    
    $currentUserFirstName="" ;
    $currentUserLastName="" ;
    $currentUserMobileNumber="" ;
    $currentUserAltMobileNumber="";
    
    $currentUserStreet="";
    $currentUserCountry="" ;
    $currentUserState="";
    $currentUserDistrict="" ;
    $currentUserPostalCode="" ;
    
    
    $currentDesignation="" ;
    $currentAttendeeType="" ;
    
    
    require '../../config/ConnectionProvider.php';
    require '../classes/PasswordUtility.php';
    
    $Query = "SELECT Id,Email,PASSWORD,FirstName,LastName,MobileNumber,AltMobileNumber,Street,State,District,PostalCode,Country,Designation,AttendeeType FROM tblDs17Users WHERE Email=:tempUseremail";
    
    $stmt = $conn->prepare($Query);
    $stmt->bindParam(':tempUseremail', trim($userEmail));
    $stmt->execute();
    
    if ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
    	
    	
    	$currentUserFirstName = $row[3];
    	$currentUserLastName = $row[4];
    	$currentUserMobileNumber = $row[5];
    	
    	$currentUserAltMobileNumber = $row[6];
    	$currentUserStreet = $row[7];
    	$currentUserState = $row[8];
    	$currentUserDistrict = $row[9];
    	$currentUserPostalCode = $row[10];
    	$currentUserCountry = $row[11];
    	$currentDesignation= $row[12];
    	$currentAttendeeType= $row[13];
    	
    }
    
    
    if(isset($_POST['btnPersonalSubmit'])){
    	try {
    		
    		
    		$tempFirstName= isset($_POST["firstName"]) ? $_POST["firstName"] : '';
    		$tempLastName= isset($_POST["lastName"]) ? $_POST["lastName"] : '';
    		$tempMobileNumber= isset($_POST["mobileNumber"]) ? $_POST["mobileNumber"] : '';
    		$tempAltMobileNumber= isset($_POST["altMobileNumber"]) ? $_POST["altMobileNumber"] : '';
    		$tempDesignation= isset($_POST["designation"]) ? $_POST["designation"] : 0;
    		$tempAttendeeType= isset($_POST["attendeeType"]) ? $_POST["attendeeType"] : "";
    		
    		
    		
    		$tempUserEmail=$_SESSION['ses_DS17_USER_EMAIL'];
    		
    		$sql="UPDATE tblDs17Users SET FirstName=:tempFirstName,LastName=:tempLastName,MobileNumber=:tempMobileNumber,
AltMobileNumber=:tempAltMobileNumber,AttendeeType=:tempAttendeeType,Designation=:tempDesignation,ModifiedDate=NOW() WHERE Email=:tempEmail";
    		
    		$stmt = $conn->prepare($sql);
    		$stmt->bindParam(':tempFirstName', $tempFirstName);
    		$stmt->bindParam(':tempLastName', $tempLastName);
    		$stmt->bindParam(':tempMobileNumber', $tempMobileNumber);
    		$stmt->bindParam(':tempAltMobileNumber', $tempAltMobileNumber);
    		$stmt->bindParam(':tempAttendeeType', $tempAttendeeType);
    		$stmt->bindParam(':tempDesignation', $tempDesignation);
    		
    		
    		$stmt->bindParam(':tempEmail', $tempUserEmail);
    		
    		
    		if ($stmt->execute()) {
    			
    			
    			$_SESSION["ses_DS17_USER_FIRST_NAME"] = $tempFirstName;
    			$_SESSION["ses_DS17_USER_LAST_NAME"] = $tempLastName;
    			$_SESSION["ses_DS17_USER_MOBILE"] = $tempMobileNumber;
    			$_SESSION["ses_DS17_USER_ALT_MOBILE"] = $tempAltMobileNumber;
    			$_SESSION["ses_DS17_USER_ATTENDEE_TYPE"] = $tempAttendeeType;
    			$_SESSION["ses_DS17_USER_DESIGNATION"] = $tempDesignation;
    			
    			
    			$result="success";
    			
    			
    		}else {
    			
    			$result="fail";
    		}
    		//echo 'self--'.$_SERVER['PHP_SELF'];
    		header('Location: '.$_SERVER['PHP_SELF'].'?result='.$result);
    		
    		
    		
    	}catch(Exception $exc){
    		echo $exc->getMessage();
    		$result="fail";
    		header('Location: '.$_SERVER['PHP_SELF'].'?result='.$result);
    		
    		
    	}
    	
    }
    //btnAddressSubmit
    
    
    if(isset($_POST['btnAddressSubmit'])){
    	try {
    		
    		
    		
    		$tempCountry= isset($_POST["country"]) ? $_POST["country"] : '';
    		$tempStreet= isset($_POST["street"]) ? $_POST["street"] : '';
    		$tempState= isset($_POST["state"]) ? $_POST["state"] : '';
    		$tempDistrict= isset($_POST["district"]) ? $_POST["district"] : '';
    		$tempPostalCode= isset($_POST["postalCode"]) ? $_POST["postalCode"] : '';
    		
    		$tempUserEmail=$_SESSION['ses_DS17_USER_EMAIL'];
    		
    		$sql="UPDATE tblDs17Users SET Country=:tempCountry,Street=:tempStreet,State=:tempState,District=:tempDistrict,PostalCode=:tempPostalCode WHERE Email=:tempEmail";
    		
    		$stmt = $conn->prepare($sql);
    		$stmt->bindParam(':tempCountry', $tempCountry);
    		$stmt->bindParam(':tempStreet', $tempStreet);
    		$stmt->bindParam(':tempState', $tempState);
    		$stmt->bindParam(':tempDistrict', $tempDistrict);
    		$stmt->bindParam(':tempPostalCode', $tempPostalCode);
    		
    		$stmt->bindParam(':tempEmail', $tempUserEmail);
    		
    		
    		if ($stmt->execute()) {
    			
    			$_SESSION["ses_DS17_USER_STREET"] = $tempStreet;
    			$_SESSION["ses_DS17_USER_STATE"] = $tempState;
    			$_SESSION["ses_DS17_USER_DISTRICT"] = $tempDistrict;
    			$_SESSION["ses_DS17_USER_POSTALCODE"] = $tempPostalCode;
    			$_SESSION["ses_DS17_USER_COUNTRY"] = $tempCountry;
    			
    			$result="success";
    			
    			
    		}else {
    			
    			$result="fail";
    		}
    		//echo 'self--'.$_SERVER['PHP_SELF'];
    		header('Location: '.$_SERVER['PHP_SELF'].'?result='.$result);
    		
    		
    		
    	}catch(Exception $exc){
    		echo $exc->getMessage();
    		header('Location: login.php?result='.$result);
    		
    		
    	}
    	
    }
    
    $passwordResultMessage="";
    if(isset($_POST['btnPasswordSubmit'])){
    	try {
    		$existedPassword= isset($_POST["existedPassword"]) ? $_POST["existedPassword"] : '';
    		$newPassword= isset($_POST["newPassword"]) ? $_POST["newPassword"] : '';
    		$retypePassword= isset($_POST["retypePassword"]) ? $_POST["retypePassword"] : '';
    		
    		if(trim($newPassword)===$retypePassword){
    			$userEmail= $_SESSION["ses_DS17_USER_EMAIL"];
    			$userPassword= $_SESSION["ses_DS17_USER_PASSWORD"];
    			
    			
    			if($userPassword===$existedPassword){
    				$passwordutility = new PasswordUtility();
    				$enc_pass =$passwordutility->encrypt(trim($newPassword));
    				
    				$Query = "UPDATE tblDs17Users SET Password=:tempPassword WHERE Email=:tempUseremail";
    				
    				$stmt = $conn->prepare($Query);
    				$stmt->bindParam(':tempPassword', $enc_pass);
    				$stmt->bindParam(':tempUseremail', $userEmail);
    				if($stmt->execute()){
    					$_SESSION["ses_DS17_USER_PASSWORD"] = trim($newPassword);
    					$passwordResultMessage = "success";
    					
    					
    				}else {
    					$passwordResultMessage = "fail";
    					
    				}
    				
    				
    			}else {
    				$passwordResultMessage = "mismatch";
    				
    			}
    			
    		}else {
    			$passwordResultMessage = "wrong";
    			
    		}
    		
    		
    		header('Location: '.$_SERVER['PHP_SELF'].'?passwordResult='.$passwordResultMessage);
    		
    	}catch(Exception $exc){
    		
    		$exc->getMessage();
    		$passwordResultMessage = "fail";
    		//header('Location: login.php?result='.$result);
    		header('Location: '.$_SERVER['PHP_SELF'].'?passwordResult='.$passwordResultMessage);
    	
    	}
    	
    }
    
    ?>
    
 <style>
 body{
     overflow:hidden !important;
     
     }
        .side-menus nav > ul > li.menu-item-has-children > ul {
   
    padding: 22px 0 !important;
        }


 
 .bg-overlay {
   background: url(<?= AMAZON_URL ?>/ds17/student/images/techtalks-bg-new.png);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    color: #fff;
   width:100%;
    padding-top: 50px;
}
.bg-overlay1 {
    background:url('<?= AMAZON_URL ?>/ds17/student/images/meanhack.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    
   width:100%;
    padding-top: 50px;
}
.bg-overlay2 {
    background:url('<?= AMAZON_URL ?>/ds17/student/images/culturals.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    
   width:100%;
    padding-top: 50px;
}
.bg-overlay3 {
    background:url('<?= AMAZON_URL ?>/ds17/student/images/techtalks.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    
   width:100%;
    padding-top: 50px;
}
.auto-container {
    position: static;
    max-width:65%;
    padding: 0px 15px;
    margin: 0 auto;
    width:100%;
}
.contact-form-section .contact-title {
    position: relative;
    margin-bottom: 30px;
}
.contact-form-section .contact-title h2 {
    position: relative;
    color: #333333;
    font-size: 30px;
    font-weight: 700;
    padding-bottom: 12px;
    margin-bottom: 25px;
}
.contact-form-section .contact-title .text {
    position: relative;
    color: #666666;
    font-size: 15px;
}
.contact-form input[type="text"], .contact-form input[type="email"], .contact-form input[type="password"], .contact-form select, .contact-form textarea {
    display: block;
    width: 100%;
    line-height: 26px;
    height: 66px;
    font-size: 16px;
    padding: 10px 20px;
    background: none;
    color: #333333;
    border-radius: 3px;
    border: 1px solid #e5e5e5;
    transition: all 500ms ease;
    -webkit-transition: all 500ms ease;
    -ms-transition: all 500ms ease;
    -o-transition: all 500ms ease;
}
.contact-form-section .contact-title h2:before {
    position: absolute;
    content: '';
    left: 0px;
    bottom: 0px;
    width: 45px;
    height: 1px;
    background-color: #00aae7;
}
.contact-form > form .row > div > input[type="text"], .contact-form > form .row > div > textarea {
    background: #ffffff none repeat scroll 0 0;
    border: medium none;
    float: left;
    font-family: Rubik;
    font-size: 15px;
    height: 68px;
    padding: 18px 23px;
    width: 100%;
    border: 1px solid #e5e5e5;
}
.contact-form input:focus, .contact-form select:focus, .contact-form textarea:focus {
    border-color: #00aae7 !important;
    background: none;
}
#msform .action-button-previous {
    width: 100px;
    background: #0d4165;
}
#msform .action-button-previous {
    width: 100px;
   
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 25px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px;
}
#msform .action-button-previous:hover, #msform .action-button-previous:focus {
    box-shadow: 0 0 0 2px white, 0 0 0 3px #C5C5F1;
}
#msform .action-button {
    width: 100px;
    background: #d43058;
}
#msform .action-button {
    width: 100px;
    background: #d43058;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 25px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px;
}
#msform .action-button:hover, #msform .action-button:focus {
    box-shadow: 0 0 0 2px white, 0 0 0 3px #ee0979;
}
.side-menu-sec
{
   top:0px!important;
}
.panel-content {
    margin-top:0px!important;
}
.main-content{
    margin-top:88px;
}
 </style>
  
</head>
<body>
<!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Our Website Content Goes Here -->
<?php include 'student-header.php'; ?>

<div class="main-content">
    <div class="panel-content">
          <div class="main-title-sec">
               <div class="row">
                    <div class="col-md-3 column">
                         <div class="heading-profile">
                              <h2>Profile</h2>
                            
                         </div>
                    </div>
                  
               </div>
          </div><!-- Heading Sec -->
          <ul class="breadcrumbs">
              
               <li>Miracle Heights, Digital Valley - December 13th-17th, 2017</li>
          </ul>
        <!-- Panel Content -->
<br>

</div>





<div class="col-sm-12">
                   <div class="alert alert-danger" id='alertMessageDiv' style="display: none;">
    <button type="button" class="close" onclick="closeAlertMessage()" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <span id="alertMessageSpan"></span>
  </div>
   <?php if($result=='success') {
                        echo '<div class="alert alert-success alert-dismissable">
        		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        		<strong>Your details updated successfully.</strong>
                  </div>';	
                        }else if($result=='fail'){
                        	echo '<div class="alert alert-danger alert-dismissable">
        		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        		<strong>Oops! Something went wrong please try again!</strong>
                  </div>';
                        
                        }
                        
                        
                        if($urlPasswordResult=='success') {
                        	echo '<div class="alert alert-success alert-dismissable">
        		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        		<strong>Your password has been successfully updated.</strong> .
                  </div>';
                        }else if($urlPasswordResult=='fail'){
                        	echo '<div class="alert alert-danger alert-dismissable">
        		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        		<strong>Oops! something wrong Please try again.</strong> .
                  </div>';
                        	
                        }else if($urlPasswordResult=='mismatch'){
                        	echo '<div class="alert alert-danger alert-dismissable">
        		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        		<strong>Oops, password mismatched with existed password!</strong> .
                  </div>';
                        	
                        }else if($urlPasswordResult=='wrong'){
                        	echo '<div class="alert alert-danger alert-dismissable">
        		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        		<strong>Oops, Retype password should be matched with new password!</strong> .
                  </div>';
                        	
                        }
                        
                        
                        
                        
                        
                        ?>
  </div>
   
                        
  <form action="" method="post">
  <div class="col-sm-12"><h3>Tell us about yourself!</h3></div>  
  
                  <div class="col-sm-3">
                       <div class="form-group">
                          <input type="text" name="firstName" id="firstName" onchange="profileFieldLengthValidator(this);" class="form-control col-sm-12" placeholder="First Name" required="required" value="<?=$currentUserFirstName?>">
                      </div>
                   </div>
                   <div class="col-sm-3">
                       <div class="form-group">
                          <input type="text" name="lastName" id="lastName" onchange="profileFieldLengthValidator(this);" class="form-control col-sm-12" placeholder="Last Name" required="required" value="<?=$currentUserLastName?>">
                      </div>
                   </div>
                   <div class="col-sm-3">
                       <div class="form-group">
                          <input type="text" name="mobileNumber" id="mobileNumber" onchange="return formatPhone(this);" onblur="return validatenumber(this)"	onkeypress="return isNumberKey(event)" class="form-control col-sm-12" placeholder="Mobile Number" required="required" value="<?=$currentUserMobileNumber?>">
                      </div>
                   </div>
                   <div class="col-sm-3">
                       <div class="form-group">
                          <input type="text" name="altMobileNumber" id="altMobileNumber" class="form-control col-sm-12" onchange="return formatPhone(this);" onblur="return validatenumber(this)"	onkeypress="return isNumberKey(event)" placeholder="Alternate Mobile Number" required="required" value="<?=$currentUserAltMobileNumber?>">
                      </div>
                   </div>
                   <div class="col-sm-3">
                       <div class="form-group">
                          <input type="text" name="email" id="email" class="form-control col-sm-12" placeholder="Email Address" required="required" value="<?=$userEmail?>" readonly="readonly">
                      </div>
                   </div>
                   <div class="col-sm-3">
                       <div class="form-group">
                          <input type="text" name="designation" id="designation" class="form-control col-sm-12" placeholder="Designation" required="required" value="<?= $currentDesignation?>">
                      </div>
                   </div>
                   <div class="col-sm-3">
                       <div class="form-group">
                      <select class="form-control"  name="attendeeType" id="attendeeType" required="required" >
                        <option value="" selected="selected">Attendee type</option>
                        <option value="Student">Student</option>
                        <option value="IT Professional">IT Professional</option>
                        <option value="Government Official">Government Official</option>
                        <option value="NRI Delegate">NRI Delegate</option>
                        <option value="Other">Other</option>
                     </select>
                     </div>
                   </div>
                     <div class="col-sm-3">
                    <button type="submit" class="btn btn-primary" id="btnPersonalSubmit" name="btnPersonalSubmit" onclick="checkPersonalDetails();" style="width:100%;" data-loading-text="<i class='fa fa-spinner fa-spin'></i>loading.."><i class="fa fa-pencil"></i>&nbsp;&nbsp;&nbsp;Update</button>
                 </div>  
                 </form>
                 <form action="" method="post">
                   <div class="col-sm-12"><h3>Where are you from?</h3></div>
                   <div class="col-sm-3">
                       <div class="form-group">
                          <input type="text" class="form-control" id="street" name="street" onchange="profileFieldLengthValidator(this);" placeholder="Street" required="required" value="<?=$currentUserStreet?>"/>
                      </div>
                   </div>
                   <div class="col-sm-3">
                      
                        <div class="form-group">
                             <select  class="form-control" required="required" name="country" id="country"  onchange="populateStates();populateDistricts();checkCountry(this);" >
                         <?php if($currentUserCountry=="India"){ ?>
                        <option value="India" selected="selected">India</option>
                        <?php } else { ?>
                        <option value="India">India</option>
                        <?php } ?>
                         <?php if($currentUserCountry=="USA"){ ?>
                        <option value="USA" selected="selected">USA</option>
                        <?php } else { ?>
                         <option value="USA">USA</option>
                        <?php } ?>
                        
                       
                     </select>
                     </div>
                   
                   </div>
                   <div class="col-sm-3">
                        <div class="form-group">
                             <select headerKey="" headerValue="All" required="required" name="state" id="state" class="form-control"  onchange="populateDistricts();">
                        <option value="">Select State</option></select>
                   </div></div>
                   <div class="col-sm-3">  <div class="form-group" id="districtDiv">
                       <select headerKey="" headerValue="All"   name="district" id="district" class="form-control">
                     <option value="">Select District</option>
                     
                     </select>
                   </div></div>
               
               
                 <div class="col-sm-3">
                       <div class="form-group">
                          <input type="text" id="postalCode" name="postalCode" placeholder="Postal Code" class="form-control" required="required" value="<?=$currentUserPostalCode?>"/>
                      </div>
                   </div>
                 <div class="col-sm-3">
                 <button type="submit" class="btn btn-primary" onclick="checkAddressDetails();"  id="btnAddressSubmit" name="btnAddressSubmit" style="width:100%;" data-loading-text="<i class='fa fa-spinner fa-spin'></i>loading.."><i class="fa fa-pencil"></i>&nbsp;&nbsp;&nbsp;Update</button>
                    
                 </div>  
                  </form>
                  <form action="" method="post">
                 <div class="col-sm-12"><h3>Security </h3></div>    
                   <div class="col-sm-3">
                       <div class="form-group">
                          <input type="password" name="existedPassword" id="existedPassword" required="required" placeholder="Current Password" class="form-control"/>
                      </div>
                   </div>
                   <div class="col-sm-3">
                       <div class="form-group">
                          <input type="password" name="newPassword" onchange="profileFieldLengthValidator(this);" id="newPassword"  required="required" placeholder="New Password" class="form-control"/>
                      </div>
                   </div>
                   <div class="col-sm-3">
                       <div class="form-group">
                          <input type="password" name="retypePassword" id="retypePassword" required="required" placeholder="Confirm New Password" class="form-control"/>
                      </div>
                   </div>
                   <div class="col-sm-3">
                    <button type="submit" class="btn btn-primary" onclick="checkPasswordDetails();"  id="btnPasswordSubmit" name="btnPasswordSubmit" style="width:100%;" data-loading-text="<i class='fa fa-spinner fa-spin'></i>loading.."><i class="fa fa-pencil"></i>&nbsp;&nbsp;&nbsp;Update</button>
                  
                 </div>  
              </div>
            </form>
                       
   </div>                     
<!-- Vendor: Javascripts -->
<script src="js/jquery-2.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="https://maps.google.com/maps/api/js?key=AIzaSyDrlCWSCEGTYat1yFIybvtjXe6v24wXY04" 
        async="" 
        type="text/javascript">
</script>

<input type="hidden" id="currentState" name="currentState" value="<?= $currentUserState?>"/>
<input type="hidden" id="currentDistrict" name="currentDistrict" value="<?= $currentUserDistrict?>"/>
<input type="hidden" id="currentAttendeeType" name="currentAttendeeType" value="<?= $currentAttendeeType?>"/>


<!-- Our Website Javascripts -->
<script src="js/app.js"></script>
<script src="js/common.js"></script>
<script src="js/widgets.js"></script>
 <script src="../js/populatedDistrictbyStates.js?ver=1.1"></script> 
 <script src="js/profile-validations.js"></script>
 <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
  <script>
   $( document ).ready(function() {
	   
	   populateStates();
	   
	   $("#state").val($("#currentState").val());
	   populateDistricts();


$("#district").val($("#currentDistrict").val());
$("#attendeeType").val($("#currentAttendeeType").val());


if($("#country").val().trim()=='USA')
$("#districtDiv").hide();

	  
	   
	});</script>
</body>
</html>