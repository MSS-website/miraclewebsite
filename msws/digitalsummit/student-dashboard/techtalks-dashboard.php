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
    <?php include '../../config/Locations.php';
 include '../config/DS17Config.php';
 ?>
 <link rel="shortcut icon" href="<?= AMAZON_URL ?>/ds17/student/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">

<link rel='stylesheet prefetch'
	href=' https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    <!-- Our Website CSS Styles -->
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
  <?php 
    session_start();
    if (isset($_SESSION['ses_DS17_USER_EMAIL']) && $_SESSION['ses_DS17_USER_EMAIL'] != "") {
    	
    } else {
    	header('Location: login.php');
    }
    $result=isset($_GET["result"]) ? $_GET["result"] : '';
    require '../../config/ConnectionProvider.php';
    
    $TechTalkId=0;
    $PrimaryIntrest="";
    $SecondaryIntrest="";
    $Comments="";
    $isExisted=0;
    $tempDesignation="";
    $tempAttendeeType="";
    
    $currentUserEmail=$_SESSION['ses_DS17_USER_EMAIL'];
    $Query ="SELECT Id,PrimaryIntrest,SecondaryIntrest,Comments,Designation,AttendeeType FROM tblDs17TechTalksRegistrations WHERE Email=:tempEmail";
    $stmt = $conn->prepare($Query);
    $stmt->bindParam(':tempEmail', $currentUserEmail);
    $stmt->execute();
    $isExisted= $stmt->rowCount();
    
    
    if ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
    	$TechTalkId = $row[0];
    	$PrimaryIntrest= $row[1];
    	$SecondaryIntrest= $row[2];
    	$Comments= $row[3];
    	$tempDesignation=$row[4];
    	$tempAttendeeType=$row[5];
    }
    
    
    if(isset($_POST['btnTechTalkUpdate'])){
    	try {
    		$tempPrimaryIntrest= isset($_POST["primaryIntrest"]) ? $_POST["primaryIntrest"] : '';
    		$tempSecondaryIntrest= isset($_POST["secondaryIntrest"]) ? $_POST["secondaryIntrest"] : '';
    		$tempComments= isset($_POST["comments"]) ? $_POST["comments"] : '';
    		$tempTechTalkId= isset($_POST["techTalkId"]) ? $_POST["techTalkId"] : 0;
    		$tempTechTalkId= isset($_POST["techTalkId"]) ? $_POST["techTalkId"] : 0;
    		$tempDesignation= isset($_POST["designation"]) ? $_POST["designation"] : "";
    		$tempAttendeeType= isset($_POST["attendeeType"]) ? $_POST["attendeeType"] : "";
    		
    		
    		$tempUserEmail=$_SESSION['ses_DS17_USER_EMAIL'];
    		
    		$sql="UPDATE tblDs17TechTalksRegistrations SET PrimaryIntrest=:tempPrimaryIntrest, SecondaryIntrest=:tempSecondaryIntrest,Comments=:tempComments,Designation=:tempDesignation,AttendeeType=:tempAttendeeType,ModifiedBy=:tempModifiedBy,ModifiedDate=NOW() WHERE Email=:tempEmail AND Id=:tempId";
    		
    		$stmt = $conn->prepare($sql);
    		$stmt->bindParam(':tempPrimaryIntrest', $tempPrimaryIntrest);
    		$stmt->bindParam(':tempSecondaryIntrest', $tempSecondaryIntrest);
    		$stmt->bindParam(':tempComments', $tempComments);
    		$stmt->bindParam(':tempModifiedBy', $currentUserEmail);
    		$stmt->bindParam(':tempDesignation', $tempDesignation);
    		$stmt->bindParam(':tempAttendeeType', $tempAttendeeType);
    		
    		
    		$stmt->bindParam(':tempEmail', $tempUserEmail);
    		$stmt->bindParam(':tempId', $tempTechTalkId);
    		
    		if ($stmt->execute()) {
    			
    			$result="success";
    			
    			
    		}else {
    			
    			$result="fail";
    		}
    		//echo 'self--'.$_SERVER['PHP_SELF'];
    		header('Location: '.$_SERVER['PHP_SELF'].'?result='.$result);
    		
    		
    		
    	}catch(Exception $exc){
    		echo $exc->getMessage();
    		$result="fail";
    		
    	}
    
    }
    
    
    if(isset($_POST['btnTechTalkAdd'])){
    	try {
    		$tempPrimaryIntrest= isset($_POST["primaryIntrest"]) ? $_POST["primaryIntrest"] : '';
    		$tempSecondaryIntrest= isset($_POST["secondaryIntrest"]) ? $_POST["secondaryIntrest"] : '';
    		$tempComments= isset($_POST["comments"]) ? $_POST["comments"] : '';
    		$tempTechTalkId= isset($_POST["techTalkId"]) ? $_POST["techTalkId"] : 0;
    		$tempTechTalkId= isset($_POST["techTalkId"]) ? $_POST["techTalkId"] : 0;
    		$tempDesignation= isset($_POST["designation"]) ? $_POST["designation"] : "";
    		$tempAttendeeType= isset($_POST["attendeeType"]) ? $_POST["attendeeType"] : "";
    		
    		$userEmail=$_SESSION["ses_DS17_USER_EMAIL"] ;
    		$currentUserFirstName=$_SESSION["ses_DS17_USER_FIRST_NAME"] ;
    		$currentUserLastName=$_SESSION["ses_DS17_USER_LAST_NAME"] ;
    		$currentUserMobileNumber=$_SESSION["ses_DS17_USER_MOBILE"] ;
    		
    		$currentUserAltMobileNumber=$_SESSION["ses_DS17_USER_ALT_MOBILE"];
    		$currentUserStreet=$_SESSION["ses_DS17_USER_STREET"];
    		$currentUserState=$_SESSION["ses_DS17_USER_STATE"] ;
    		$currentUserDistrict=$_SESSION["ses_DS17_USER_DISTRICT"] ;
    		$currentUserPostalCode=$_SESSION["ses_DS17_USER_POSTALCODE"] ;
    		$currentUserGender=$_SESSION["ses_DS17_USER_GENDER"] ;
    		
    		
    		$sql ="INSERT INTO tblDs17TechTalksRegistrations
	(
	FirstName,
	LastName,
	MobileNumber,
	AltMobileNumber,
	Email,
	Designation,
	AttendeeType,
	PrimaryIntrest,
	SecondaryIntrest,
	Comments,
	Street,
	Country,
	State,
	District,
	PostalCode,
	Gender
    				
	)
	VALUES
	(
	:tempFirstName,
	:tempLastName,
	:tempMobileNumber,
	:tempAltMobileNumber,
	:tempEmail,
	:tempDesignation,
	:tempAttendeeType,
	:tempPrimaryIntrest,
	:tempSecondaryIntrest,
	:tempComments,
	:tempStreet,
	:tempCountry,
	:tempState,
	:tempDistrict,
	:tempPostalCode,
:tempGender
    				
	)
";
    		$tempCountry="India";
    		$stmt = $conn->prepare($sql);
    		$stmt->bindParam(':tempFirstName', $currentUserFirstName);
    		$stmt->bindParam(':tempLastName', $currentUserLastName);
    		$stmt->bindParam(':tempMobileNumber', $currentUserMobileNumber);
    		$stmt->bindParam(':tempAltMobileNumber', $currentUserAltMobileNumber);
    		$stmt->bindParam(':tempEmail', $userEmail);
    		$stmt->bindParam(':tempDesignation', $tempDesignation);
    		$stmt->bindParam(':tempAttendeeType', $tempAttendeeType);
    		$stmt->bindParam(':tempPrimaryIntrest', $tempPrimaryIntrest);
    		$stmt->bindParam(':tempSecondaryIntrest', $tempSecondaryIntrest);
    		$stmt->bindParam(':tempComments', $tempComments);
    		$stmt->bindParam(':tempStreet', $currentUserStreet);
    		$stmt->bindParam(':tempCountry', $tempCountry);
    		$stmt->bindParam(':tempState', $currentUserState);
    		$stmt->bindParam(':tempDistrict', $currentUserDistrict);
    		$stmt->bindParam(':tempPostalCode', $currentUserPostalCode);
    		$stmt->bindParam(':tempGender', $currentUserGender);
    		
    		
    		
    		if ($stmt->execute()) {
    			
    			$result="success";
    			
    			
    		}else {
    			
    			$result="fail";
    		}
    		//echo 'self--'.$_SERVER['PHP_SELF'];
    		header('Location: '.$_SERVER['PHP_SELF'].'?result='.$result);
    		
    		
    		
    	}catch(Exception $exc){
    		echo $exc->getMessage();
    		$result="fail";
    		
    	}
    	
    }
    ?>
 <style>
 .student-bg{
    background-color:#0d4165;
    padding:22px 11px;
    margin-top:0px;
    color:#ffffff !important;
}

.innerbox-active{
    border:4px #ef4048 solid;
}   

#progressbar {
      margin-bottom:-10px !important;
   }

#progressbar li:before {
   content: counter(step);
   counter-increment: step;
   width: 50px;
   height: 50px;
   line-height: 48px !important;
   display: block;
   font-size: 25px;
   color: #ffffff ;
   background: #232527 ;
   border-radius: 25px;
   margin: 0 auto 10px auto;
}

        .side-menus nav > ul > li.menu-item-has-children > ul {
   
    padding: 22px 0 !important;
        }


.form-control{
    border-radius:3px!important;
    height:34px!important;
}
 #msform fieldset {
     margin:0px !important;
     width:100% !important;
 }
  .bg-overlay {
    background: url('<?= AMAZON_URL ?>/ds17/student/images/techtalks-bg-new.png');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    color: #fff;
   width:100%;
    padding-top: 5px;
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
.btn-file{position:relative!important;
overflow:hidden!important;
    top: -10px;
    height: 45px
}
.btn-file input[type=file]{position:absolute!important;top:0!important;right:0!important;min-width:100%!important;min-height:100%!important;font-size:100px!important;text-align:right!important;filter:alpha(opacity=0)!important;opacity:0!important;outline:none!important;background:#fff!important;cursor:inherit!important;display:block!important}

.auto-container {
    position: static;
    max-width: 872px;
    padding: 0px 15px;
    margin: 0 auto;
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
                    <div class="col-md-6 column">
                         <div class="heading-profile">
                              <h2><strong>Tech Talks</strong></h2>
                              <span></span>
                         </div>
                    </div>
                  
               </div>
          </div><!-- Heading Sec -->
          <ul class="breadcrumbs">
               
               <li>Miracle Heights, Digital Valley - December 16th/17th, 2017</li>
          </ul>
        <!-- Panel Content -->
        <form action="" method="post">
        <input type="hidden" id="techTalkId" name="techTalkId" value="<?= $TechTalkId?>"/>
        
<div class="row">
<div class="col-sm-8">
    <br>
              <fieldset id='academicDetailsFieldSet'>
                  <h2 class="fs-title" style="    position: relative;
                     color: #222222;
                     font-size: 20px;
                     font-weight: 500;
                     z-index: 10;
                     margin-top:-4px;
                     text-transform: capitalize;">Areas of Interest</h2>
                      <?php if($result=='success') {
                        echo '<div class="alert alert-success alert-dismissable">
        		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        		<strong>Thank you for submitting tech talks registration details.</strong>
                  </div>';	
                        }else if($result=='fail'){
                        	echo '<div class="alert alert-danger alert-dismissable">
        		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        		<strong>Oops! Something went wrong please try again!</strong>
                  </div>';
                        
                        }
                        ?>
                         <br>
                          <div class="alert alert-danger" id='alertMessageDiv' style="display: none;">
    <button type="button" class="close" onclick="closeAlertMessage()" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <span id="alertMessageSpan"></span>
  </div>
  
  <br> <div class="col-sm-6" style="padding-left:0">
                     <input type="text" class="form-control"  name="designation" id="designation" required="required" placeholder="Designation" value="<?= $tempDesignation; ?>" onchange="techTalksDashboardFieldLengthValidator(this);"/>
                  </div>
                  <div class="col-sm-6" style="padding-right:0">
                     <select class="form-control"  name="attendeeType" id="attendeeType" required="required">
                     
                     <?php if($tempAttendeeType==="") {?>
                        <option value="" selected="selected">Attendee type</option>
                         <?php }else { ?>
                         <option value="" >Attendee type</option>
                         <?php } ?>
                         
                         <?php if($tempAttendeeType==="Student") {?>
                        <option value="Student" selected="selected">Student</option>
                         <?php }else { ?>
                         <option value="Student" >Student</option>
                         <?php } ?>
                         
                          <?php if($tempAttendeeType==="IT Professional") {?>
                        <option value="IT Professional" selected="selected">IT Professional</option>
                         <?php }else { ?>
                         <option value="IT Professional" >IT Professional</option>
                         <?php } ?>
                         
                          <?php if($tempAttendeeType==="Government Official") {?>
                        <option value="Government Official" selected="selected">Government Official</option>
                         <?php }else { ?>
                         <option value="Government Official" >Government Official</option>
                         <?php } ?>
                         
                          <?php if($tempAttendeeType==="NRI Delegate") {?>
                        <option value="NRI Delegate" selected="selected">NRI Delegate</option>
                         <?php }else { ?>
                         <option value="NRI Delegate" >NRI Delegate</option>
                         <?php } ?>
                         
                         <?php if($tempAttendeeType==="Other") {?>
                        <option value="Other" selected="selected">Other</option>
                         <?php }else { ?>
                         <option value="Other" >Other</option>
                         <?php } ?>
                         
                       
                     </select>
                     <br>
                  </div>
  
  
  <br>
                         
                    <div class="col-sm-6" style="padding-left:0">
                     <select class="form-control"  name="primaryIntrest" id="primaryIntrest" required="required" onchange="checkDashboardIntrestes(this);">
                     <?php if($PrimaryIntrest==="") {?>
                     <option value="" selected="selected">Primary interest</option>
                     <?php }else { ?>
                     <option value="">Primary interest</option>
                     <?php } ?>
                     
                      <?php if($PrimaryIntrest==="Cloud Applications") {?>
                     <option value="Cloud Applications" selected="selected">Cloud Applications</option>
                     <?php }else { ?>
                     <option value="Cloud Applications">Cloud Applications</option>
                     <?php } ?>
                     
                      <?php if($PrimaryIntrest==="Internet of Things") {?>
                     <option value="Internet of Things" selected="selected">Internet of Things</option>
                     <?php }else { ?>
                     <option value="Internet of Things">Internet of Things</option>
                     <?php } ?>
                     
                      <?php if($PrimaryIntrest==="Enterprise Security") {?>
                     <option value="Enterprise Security" selected="selected">Enterprise Security</option>
                     <?php }else { ?>
                     <option value="Enterprise Security">Enterprise Security</option>
                     <?php } ?>
                     
                      <?php if($PrimaryIntrest==="DevOps and Agility") {?>
                     <option value="DevOps and Agility" selected="selected">DevOps and Agility</option>
                     <?php }else { ?>
                     <option value="DevOps and Agility">DevOps and Agility</option>
                     <?php } ?>
                     
                     <?php if($PrimaryIntrest==="Cognitive Computing") {?>
                     <option value="Cognitive Computing" selected="selected">Cognitive Computing</option>
                     <?php }else { ?>
                     <option value="Cognitive Computing">Cognitive Computing</option>
                     <?php } ?>
                     
                     <?php if($PrimaryIntrest==="Blockchain Networks") {?>
                     <option value="Blockchain Networks" selected="selected">Blockchain Networks</option>
                     <?php }else { ?>
                     <option value="Blockchain Networks">Blockchain Networks</option>
                     <?php } ?>
                     </select>
                     <br>
                  </div>
                  <div class="col-sm-6" style="padding-right:0">
                     <select class="form-control"  name="secondaryIntrest" id="secondaryIntrest" required="required" onchange="checkDashboardIntrestes(this);">
                           <?php if($SecondaryIntrest==="") {?>
                     <option value="" selected="selected">Secondary interest</option>
                     <?php }else { ?>
                     <option value="">Secondary interest</option>
                     <?php } ?>
                     
                      <?php if($SecondaryIntrest==="Cloud Applications") {?>
                     <option value="Cloud Applications" selected="selected">Cloud Applications</option>
                     <?php }else { ?>
                     <option value="Cloud Applications">Cloud Applications</option>
                     <?php } ?>
                     
                      <?php if($SecondaryIntrest==="Internet of Things") {?>
                     <option value="Internet of Things" selected="selected">Internet of Things</option>
                     <?php }else { ?>
                     <option value="Internet of Things">Internet of Things</option>
                     <?php } ?>
                     
                      <?php if($SecondaryIntrest==="Enterprise Security") {?>
                     <option value="Enterprise Security" selected="selected">Enterprise Security</option>
                     <?php }else { ?>
                     <option value="Enterprise Security">Enterprise Security</option>
                     <?php } ?>
                     
                      <?php if($SecondaryIntrest==="DevOps and Agility") {?>
                     <option value="DevOps and Agility" selected="selected">DevOps and Agility</option>
                     <?php }else { ?>
                     <option value="DevOps and Agility">DevOps and Agility</option>
                     <?php } ?>
                     
                     <?php if($SecondaryIntrest==="Cognitive Computing") {?>
                     <option value="Cognitive Computing" selected="selected">Cognitive Computing</option>
                     <?php }else { ?>
                     <option value="Cognitive Computing">Cognitive Computing</option>
                     <?php } ?>
                     
                     <?php if($SecondaryIntrest==="Blockchain Networks") {?>
                     <option value="Blockchain Networks" selected="selected">Blockchain Networks</option>
                     <?php }else { ?>
                     <option value="Blockchain Networks">Blockchain Networks</option>
                     <?php } ?>
                     </select>
                      <br>
                  </div>
                  <div class="col-sm-12" style="padding:0px;">
                     <textarea id="comments" name="comments" style="width:100%;padding:10px 0px 0px 0px; border-radius:3px;" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;Comments" rows="4" onchange="techTalksDashboardFieldLengthValidator(this);" required="required"><?= $Comments?></textarea>
                    
                     <?php 
                     
                     
                     if($isExisted == 0){ ?>
                      <button onclick="loadDashBoardSubmit();" class="theme-btn btn-style-one center" style="padding:5px 26px !important; margin:23px 0 40px 63px; text-transform: none;float:right; " type="submit" id="btnTechTalkSubmit" name="btnTechTalkAdd"  data-loading-text="<i class='fa fa-spinner fa-spin'></i>Loading..">Submit</button>
                    
                    <?php }else {?>
                    <button onclick="loadDashBoardSubmit();" class="theme-btn btn-style-one center" style="padding:5px 26px !important; margin:23px 0 40px 63px; text-transform: none;float:right; " type="submit" id="btnTechTalkSubmit" name="btnTechTalkUpdate"  data-loading-text="<i class='fa fa-spinner fa-spin'></i>Loading..">Update</button>
                     <?php }?>
                  </div>
               </fieldset>
        </div>
        <div class="col-sm-4">
        <div class="cultural-bg" style="margin-top:25px;">
        <div class="container bg-overlay">
	<div class="row text-center">
	 <h2 style="color:#ffffff;">Spread the word! </h2>
	  <center><h5 style="color:#ffffff; padding:20px 20px; line-height: 1.6 !important; ">Share Digital Summit 2017 with the world on Facebook - help spread the digital fever!</h5></center>
    <a href="https://www.facebook.com/DigitalSummitVizag/" target="_blank" class="theme-btn btn-style-one center" style="padding:5px 10px !important; margin:23px 0 40px 129px; text-transform: none; ">Share Now</a>
	</div>
</div>
       
        </div>
    </div>
</div>
       </form>
        </div>
        </div>




<!-- Vendor: Javascripts -->
<script src="js/jquery-2.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="https://maps.google.com/maps/api/js?key=AIzaSyDrlCWSCEGTYat1yFIybvtjXe6v24wXY04" 
        async="" 
        type="text/javascript">
</script>

<!-- Our Website Javascripts -->
<script src="js/app.js"></script>
<script src="js/common.js"></script>
<script src="js/widgets.js"></script>
<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/owl.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/wow.js"></script>
<script src="js/appear.js"></script>
<script src="js/script.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>

<script src="js/techtalks-dashboard-validations.js"></script>

</body>
</html>