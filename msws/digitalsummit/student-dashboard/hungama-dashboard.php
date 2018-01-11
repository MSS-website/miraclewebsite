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

    <!-- Our Website CSS Styles -->
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel='stylesheet prefetch'
	href=' https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
   
    <?php 
    session_start();
    if (isset($_SESSION['ses_DS17_USER_EMAIL']) && $_SESSION['ses_DS17_USER_EMAIL'] != "") {
    	
    } else {
    	header('Location: login.php');
    }
    $result=isset($_GET["result"]) ? $_GET["result"] : '';
    require '../../config/ConnectionProvider.php';
    
    $currentUserEmail=$_SESSION['ses_DS17_USER_EMAIL'];
    
    
    $Query = "SELECT Id,CollegeName,OtherCollegeName,
Branch,YEAR,CompetitionName,CompetitionType,LeaderName,LeaderEmail,LeaderPhoneNumber,TeamSize,TeamMemberNames,
AuditionLink,Comments FROM tblDs17CulturalRegistrations WHERE Email=:tempEmail";
    $stmt = $conn->prepare($Query);
    $stmt->bindParam(':tempEmail', $currentUserEmail);
    $stmt->execute();
    $culturalId=0;
    
    $collegeName="";
    $otherCollegeName="";
    $graduationBranch="";
    $graduationYear="";
    $comments="";
    
    $competitionName="";
    $competitionType="";
    $leaderName="";
    $leaderEmail="";
    $leaderPhoneNumber="";
    $teamSize="";
    $teamMemberNames="";
    $auditionLink="";
    
    if ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
    	$culturalId= $row[0];
    	$collegeName= $row[1];
    	$otherCollegeName= $row[2];
    	$graduationBranch= $row[3];
    	$graduationYear= $row[4];
    	
    	$competitionName= $row[5];
    	$competitionType= $row[6];
    	$leaderName= $row[7];
    	$leaderEmail= $row[8];
    	$leaderPhoneNumber= $row[9];
    	$teamSize= $row[10];
    	$teamMemberNames= $row[11];
    	$auditionLink= $row[12];
    	$comments= $row[13];
    	
    }
    
    
    if(isset($_POST['btnCulturalUpdate'])){
    	try {
    		$frmCollegeName= isset($_POST["collegeName"]) ? $_POST["collegeName"] : '';
    		$frmOtherCollegeName= isset($_POST["otherCollegeName"]) ? $_POST["otherCollegeName"] : '';
    		$frmGraduationBranch= isset($_POST["graduationBranch"]) ? $_POST["graduationBranch"] : '';
    		$frmGraduationYear= isset($_POST["graduationYear"]) ? $_POST["graduationYear"] : '';
    		$frmCompetitionName= isset($_POST["competitionName"]) ? $_POST["competitionName"] : '';
    		$frmCompetitionType= isset($_POST["competitionType"]) ? $_POST["competitionType"] : '';
    		$frmLeaderName= isset($_POST["leaderName"]) ? $_POST["leaderName"] : '';
    		$frmLeaderEmail= isset($_POST["leaderEmail"]) ? $_POST["leaderEmail"] : '';
    		$frmLeaderPhoneNumber= isset($_POST["leaderPhoneNumber"]) ? $_POST["leaderPhoneNumber"] : '';
    		$frmTeamSize= isset($_POST["teamSize"]) ? $_POST["teamSize"] : '';
    		$frmTeamMemberNames= isset($_POST["teamMemberNames"]) ? $_POST["teamMemberNames"] : '';
    		$frmAuditionLink= isset($_POST["auditionLink"]) ? $_POST["auditionLink"] : '';
    		$frmComments= isset($_POST["comments"]) ? $_POST["comments"] : '';
    		
    		
    		$tempUserEmail=$_SESSION['ses_DS17_USER_EMAIL'];
    		$tempCulturalId= isset($_POST["culturalId"]) ? $_POST["culturalId"] : 0;
    		
    		
    		$sql ="UPDATE tblDs17CulturalRegistrations
	SET
	CollegeName = :tempCollegeName ,
	OtherCollegeName = :tempOtherCollegeName ,
	Branch = :tempBranch ,
	year = :tempYear ,
	CompetitionName = :tempCompetitionName ,
	CompetitionType = :tempCompetitionType ,
	LeaderName = :tempLeaderName ,
	LeaderEmail = :tempLeaderEmail ,
	LeaderPhoneNumber = :tempLeaderPhoneNumber,
	TeamSize = :tempTeamSize ,
	TeamMemberNames = :tempTeamMemberNames ,
	AuditionLink = :tempAuditionLink ,
	Comments = :tempComments ,
ModifiedBy=:teampModifiedBy,
ModifiedDate=NOW()
	WHERE
	Email = :tempEmail AND Id= :tempId";
    		$stmt = $conn->prepare($sql);
    		
    		$stmt->bindParam(':tempCollegeName', $frmCollegeName);
    		$stmt->bindParam(':tempOtherCollegeName', $frmOtherCollegeName);
    		$stmt->bindParam(':tempBranch', $frmGraduationBranch);
    		$stmt->bindParam(':tempYear', $frmGraduationYear);
    		$stmt->bindParam(':tempCompetitionName', $frmCompetitionName);
    		$stmt->bindParam(':tempCompetitionType', $frmCompetitionType);
    		$stmt->bindParam(':tempLeaderName', $frmLeaderName);
    		$stmt->bindParam(':tempLeaderEmail', $frmLeaderEmail);
    		$stmt->bindParam(':tempLeaderPhoneNumber', $frmLeaderPhoneNumber);
    		$stmt->bindParam(':tempTeamSize', $frmTeamSize);
    		$stmt->bindParam(':tempTeamMemberNames', $frmTeamMemberNames);
    		$stmt->bindParam(':tempAuditionLink', $frmAuditionLink);
    		$stmt->bindParam(':tempComments', $frmComments);
    		$stmt->bindParam(':teampModifiedBy', $tempUserEmail);
    		
    		$stmt->bindParam(':tempEmail', $tempUserEmail);
    		$stmt->bindParam(':tempId', $tempCulturalId);
    		if ($stmt->execute()) {
    			$result="success";
    		}else {
    			$result="fail";
    		}
    		header('Location: '.$_SERVER['PHP_SELF'].'?result='.$result);
    	}catch(Exception $exc){
    		$exc->getMessage();
    		$result="fail";
    		
    	}
    	
    }
    
    //----------
    
    if(isset($_POST['btnCulturalAdd'])){
    	try {
    		$frmCollegeName= isset($_POST["collegeName"]) ? $_POST["collegeName"] : '';
    		$frmOtherCollegeName= isset($_POST["otherCollegeName"]) ? $_POST["otherCollegeName"] : '';
    		$frmGraduationBranch= isset($_POST["graduationBranch"]) ? $_POST["graduationBranch"] : '';
    		$frmGraduationYear= isset($_POST["graduationYear"]) ? $_POST["graduationYear"] : '';
    		$frmCompetitionName= isset($_POST["competitionName"]) ? $_POST["competitionName"] : '';
    		$frmCompetitionType= isset($_POST["competitionType"]) ? $_POST["competitionType"] : '';
    		$frmLeaderName= isset($_POST["leaderName"]) ? $_POST["leaderName"] : '';
    		$frmLeaderEmail= isset($_POST["leaderEmail"]) ? $_POST["leaderEmail"] : '';
    		$frmLeaderPhoneNumber= isset($_POST["leaderPhoneNumber"]) ? $_POST["leaderPhoneNumber"] : '';
    		$frmTeamSize= isset($_POST["teamSize"]) ? $_POST["teamSize"] : '';
    		$frmTeamMemberNames= isset($_POST["teamMemberNames"]) ? $_POST["teamMemberNames"] : '';
    		$frmAuditionLink= isset($_POST["auditionLink"]) ? $_POST["auditionLink"] : '';
    		$frmComments= isset($_POST["comments"]) ? $_POST["comments"] : '';
    		
    		
    		
    		
    		
    		
    		$userEmail=$_SESSION["ses_DS17_USER_EMAIL"] ;
    		$currentUserFirstName=$_SESSION["ses_DS17_USER_FIRST_NAME"] ;
    		$currentUserLastName=$_SESSION["ses_DS17_USER_LAST_NAME"] ;
    		$currentUserMobileNumber=$_SESSION["ses_DS17_USER_MOBILE"] ;
    		
    		$currentUserAltMobileNumber=$_SESSION["ses_DS17_USER_ALT_MOBILE"];
    		$currentUserStreet=$_SESSION["ses_DS17_USER_STREET"];
    		$currentUserCountry=$_SESSION["ses_DS17_USER_COUNTRY"] ;
    		$currentUserState=$_SESSION["ses_DS17_USER_STATE"] ;
    		$currentUserDistrict=$_SESSION["ses_DS17_USER_DISTRICT"] ;
    		$currentUserPostalCode=$_SESSION["ses_DS17_USER_POSTALCODE"] ;
    		$currentUserGender=$_SESSION["ses_DS17_USER_GENDER"] ;
    		
    		
    		$sql ="INSERT INTO tblDs17CulturalRegistrations
	(
	FirstName,
LastName,
Email,
MobileNumber,
AltMobileNumber,
CollegeName,
OtherCollegeName,
Branch,
year,
CompetitionName,
CompetitionType,
LeaderName,
LeaderEmail,
LeaderPhoneNumber,
TeamSize,
TeamMemberNames,
AuditionLink,
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
:tempEmail,
:tempMobileNumber,
:tempAltMobileNumber,
:tempCollegeName,
:tempOtherCollegeName,
:tempBranch,
:tempyear,
:tempCompetitionName,
:tempCompetitionType,
:tempLeaderName,
:tempLeaderEmail,
:tempLeaderPhoneNumber,
:tempTeamSize,
:tempTeamMemberNames,
:tempAuditionLink,
:tempComments,
:tempStreet,
:tempCountry,
:tempState,
:tempDistrict,
:tempPostalCode,
:tempGender
    				
	)
";
    		
    		$stmt = $conn->prepare($sql);
    		
    		
    		
    		$stmt->bindParam(':tempFirstName', $currentUserFirstName);
    		$stmt->bindParam(':tempLastName', $currentUserLastName);
    		$stmt->bindParam(':tempEmail', $userEmail);
    		$stmt->bindParam(':tempMobileNumber', $currentUserMobileNumber);
    		$stmt->bindParam(':tempAltMobileNumber', $currentUserAltMobileNumber);
    		
    		$stmt->bindParam(':tempCollegeName', $frmCollegeName);
    		$stmt->bindParam(':tempOtherCollegeName', $frmOtherCollegeName);
    		$stmt->bindParam(':tempBranch', $frmGraduationBranch);
    		$stmt->bindParam(':tempyear', $frmGraduationYear);
    		
    		
    		$stmt->bindParam(':tempCompetitionName', $frmCompetitionName);
    		$stmt->bindParam(':tempCompetitionType', $frmCompetitionType);
    		$stmt->bindParam(':tempLeaderName', $frmLeaderName);
    		$stmt->bindParam(':tempLeaderEmail', $frmLeaderEmail);
    		$stmt->bindParam(':tempLeaderPhoneNumber', $frmLeaderPhoneNumber);
    		$stmt->bindParam(':tempTeamSize', $frmTeamSize);
    		$stmt->bindParam(':tempTeamMemberNames', $frmTeamMemberNames);
    		$stmt->bindParam(':tempAuditionLink', $frmAuditionLink);
    		$stmt->bindParam(':tempComments', $frmComments);
    		
    		
    		$stmt->bindParam(':tempStreet', $currentUserStreet);
    		$stmt->bindParam(':tempCountry', $currentUserCountry);
    		$stmt->bindParam(':tempState', $currentUserState);
    		$stmt->bindParam(':tempDistrict', $currentUserDistrict);
    		$stmt->bindParam(':tempPostalCode', $currentUserPostalCode);
    		
    		$stmt->bindParam(':tempGender', $currentUserGender);
    		
    		
    		if ($stmt->execute()) {
    			$result="success";
    		}else {
    			$result="fail";
    		}
    		header('Location: '.$_SERVER['PHP_SELF'].'?result='.$result);
    	}catch(Exception $exc){
    		$exc->getMessage();
    		$result="fail";
    		
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
                    <div class="col-md-6 column">
                        
                         <div class="heading-profile">
                              <h2><strong>Hungama</strong></h2>
                              <span></span>
                         </div>
                    </div>
                  
               </div>
          </div><!-- Heading Sec -->
          <ul class="breadcrumbs">
               <li>December 13th-15th, 2017  Digital Valley(Vizag)</li>
              
          </ul>
       <!-- Panel Content -->
       <div class="row">
<div class="col-sm-8">
    <input type="hidden" name="readCollegeName" id="readCollegeName" value="<?= $collegeName?>"/>
    <input type="hidden" name="readOtherCollegeName" id="readOtherCollegeName" value="<?= $otherCollegeName?>"/>
    <input type="hidden" name="readGraduationBranch" id="readGraduationBranch" value="<?= $graduationBranch?>"/>
    <input type="hidden" name="readGraduationYear" id="readGraduationYear" value="<?= $graduationYear?>"/>
    
    <input type="hidden" name="readCompetitionName" id="readCompetitionName" value="<?= $competitionName?>"/>
    <input type="hidden" name="readCompetitionType" id="readCompetitionType" value="<?= $competitionType?>"/>
    <input type="hidden" name="readTeamSize" id="readTeamSize" value="<?= $teamSize?>"/>
    
    
    
    
      <form class="" id="msform" style="margin-bottom:20px" action="" method="post">
      
      <input type="hidden" id="culturalId" name="culturalId" value="<?= $culturalId?>"/>
      
           <fieldset id='academicDetailsFieldSet'>
                   
                     <h2 class="fs-title" style="    position: relative;
                        color: #222222;
                        font-size: 35px;
                        font-weight: 700;
                        z-index: 10;
                        padding-bottom: 15px;
                        margin-bottom: 25px;
                        text-transform: capitalize;">Introduce Yourself</h2>
                        <?php if($result=='success') {
                        echo '<div class="alert alert-success alert-dismissable">
        		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        		<strong>Thank you for submiting hungama details.</strong>
                  </div>';	
                        }else if($result=='fail'){
                        	echo '<div class="alert alert-danger alert-dismissable">
        		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        		<strong>Oops! Something went wrong please try again!</strong>
                  </div>';
                        
                        }
                        ?>
                         <div  style="padding-right:0">
                        <select name="collegeName"  id="collegeName" class="form-control" onchange="collegeType(this);" required="required">
                          <option value="">Select Your College</option>
                           <option value="Acharya Nagarjuna University">Acharya Nagarjuna University</option>
                           <option value="Aditya College Of Engineering And Technology">Aditya College Of Engineering And Technology</option>
                           <option value="Aditya Engineering College">Aditya Engineering College</option>
                           <option value="Aditya Institute of Technology">Aditya Institute of Technology</option>
                           <option value="Amalapuram Institute Of Management Sciences">Amalapuram Institute Of Management Sciences</option>
                           <option value="Anil Neerukonda Institute Of Technology">Anil Neerukonda Institute Of Technology</option>
                           <option value="Avanthi Institute of Engineering And Technology - Makavarapalem">Avanthi Institute of Engineering And Technology - Makavarapalem</option>
                           <option value="Bullayya College Of Engineering">Bullayya College Of Engineering</option>
                           <option value="BVC College Of Engineering, Rajahmundry">BVC College Of Engineering, Rajahmundry</option>
                           <option value="BVC Engineering College">BVC Engineering College</option>
                           <option value="BVC Institute Of Technology">BVC Institute Of Technology</option>
                           <option value="Coastal Institute Of Technology">Coastal Institute Of Technology</option>
                           <option value="D.M.S.S.V.H College Of Engineering">D.M.S.S.V.H College Of Engineering</option>
                           <option value="Dadi Institute Of Engineering">Dadi Institute Of Engineering</option>
                           <option value="Gitam University">Gitam University</option>
                           <option value="Godavari Institute of Engineering">Godavari Institute of Engineering</option>
                           <option value="Gonna institute of information technology and sciences">Gonna institute of information technology and sciences</option>
                           <option value="Guntur Engineering College">Guntur Engineering College</option>
                           <option value="Indo American Institutions">Indo American Institutions</option>
                           <option value="JNTUK Vizianagaram">JNTUK Vizianagaram</option>
                           <option value="Kakinada institute Of Engineering">Kakinada institute Of Engineering</option>
                           <option value="KIET Group of Institutions">KIET Group of Institutions</option>
                           <option value="KKR &amp; KSR Institute of Technology &amp; Sciences">KKR &amp; KSR Institute of Technology &amp; Sciences</option>
                           <option value="Kuppam Engineering College">Kuppam Engineering College</option>
                           <option value="Lakireddy Bali Reddy College of Engineering">Lakireddy Bali Reddy College of Engineering</option>
                           <option value="Lakireddy Bali Reddy College Of Engineering 2">Lakireddy Bali Reddy College Of Engineering 2</option>
                           <option value="Lendi Institute Of Engineering">Lendi Institute Of Engineering</option>
                           <option value="Madanapalle Institute of Technology and Science">Madanapalle Institute of Technology and Science</option>
                           <option value="Maharaj Vijayaram Gajapathi Raj College of Engineering">Maharaj Vijayaram Gajapathi Raj College of Engineering</option>
                           <option value="Malineni Lakshmaiah Engineering College">Malineni Lakshmaiah Engineering College</option>
                           <option value="Mekapati Rajamohan Reddy Institute of Technology &amp; Science">Mekapati Rajamohan Reddy Institute of Technology &amp; Science</option>
                           <option value="Miracle Educational Society">Miracle Educational Society</option>
                           <option value="Newton's Institute Of Engineering">Newton's Institute Of Engineering</option>
                           <option value="NRI, Agiripalli">NRI, Agiripalli</option>
                           <option value="NRIT">NRIT</option>
                           <option value="PACE Institute Of Technology &amp; Sciences">PACE Institute Of Technology &amp; Sciences</option>
                           <option value="PBR Visvodaya Institute of Technology &amp; Science">PBR Visvodaya Institute of Technology &amp; Science</option>
                           <option value="Potti Sriramulu Chalavadi Mallikarjuna Rao College of Engineering">Potti Sriramulu Chalavadi Mallikarjuna Rao College of Engineering</option>
                           <option value="Prakasam Engineering College">Prakasam Engineering College</option>
                           <option value="Pydah College Of Engineering">Pydah College Of Engineering</option>
                           <option value="Raghu Engineering College">Raghu Engineering College</option>
                           <option value="RVRJC College Of Engineering">RVRJC College Of Engineering</option>
                           <option value="Sanketika Vidya Parishad Engg College">Sanketika Vidya Parishad Engg College</option>
                           <option value="Sasi Institute of Technology &amp; Engineering">Sasi Institute of Technology &amp; Engineering</option>
                           <option value="Siddartha Institute Of Science">Siddartha Institute Of Science</option>
                           <option value="Sir C R Reddy College Of Engineering">Sir C R Reddy College Of Engineering</option>
                           <option value="Sree Vidyanikethan Engineering College">Sree Vidyanikethan Engineering College</option>
                           <option value="Sri Aditya Engineering College">Sri Aditya Engineering College</option>
                           <option value="Sri Sivani College Of Engineering">Sri Sivani College Of Engineering</option>
                           <option value="Sri Vasavi Engg College">Sri Vasavi Engg College</option>
                           <option value="Sri Vasavi Institite Of Engineering and technology">Sri Vasavi Institite Of Engineering and technology</option>
                           <option value="Sri Venkatesa Perumal College Of Engineering">Sri Venkatesa Perumal College Of Engineering</option>
                           <option value="SRINIVASA INSTITUTE OF ENGINEERING AND TECHNOLOGY">SRINIVASA INSTITUTE OF ENGINEERING AND TECHNOLOGY</option>
                           <option value="SRKR Engineering College">SRKR Engineering College</option>
                           <option value="St. Ann's College Of Engineering">St. Ann's College Of Engineering</option>
                           <option value="SV College of Engineering">SV College of Engineering</option>
                           <option value="Tirumala Engineering College">Tirumala Engineering College</option>
                           <option value="Vasireddy Venkatadri Institute of Technology">Vasireddy Venkatadri Institute of Technology</option>
                           <option value="Vignan's Institute Of Engineering for Women">Vignan's Institute Of Engineering for Women</option>
                           <option value="Vikas College Of Engineering">Vikas College Of Engineering</option>
                           <option value="VITS College Of Engineering">VITS College Of Engineering</option>
                           <option value="Vizag Institute Of Technology">Vizag Institute Of Technology</option>
                           <option value="Yogananda Institute of Technology and Science">Yogananda Institute of Technology and Science</option>
                           <option value="Other">Other</option>
                        </select>
                         
                        
                            
                     </div>
                     <div  style="padding:0">
                     <input id="otherCollegeName" class="form-control" style="display: none;" type="text" name="otherCollegeName" placeholder="Please Specify your College" onchange="culturalFieldLengthValidator(this);" value="<?= $otherCollegeName?>"/></div>
                    <br>
                    
                           <div class="col-sm-6" style="padding-left:0"> 
                        <select class="form-control" id="graduationBranch" name="graduationBranch" required="required">
                           <option value="" selected="selected">Branch</option>
                           <option value="CSE">CSE</option>
                           <option value="ECE">ECE</option>
                           <option value="EEE">EEE</option>
                           <option value="Civil">Civil</option>
                           <option value="Mechanical">Mechanical</option>
                           <option value="MBA">MBA</option> 
                           <option value="MCA">MCA</option>
                        </select>
                     </div>
                     <div class="col-sm-6" style="padding-right:0">
                        <select class="form-control" id="graduationYear" name="graduationYear" required="required">
                           <option value="" selected="selected">Year</option>
                           <option value="1st">1st</option>
                           <option value="2nd">2nd</option>
                           <option value="3rd">3rd</option>
                           <option value="4th">4th</option>
                        </select>
                        <br>
                     </div>
                     
                   
                       
                   <br><br>
                        
                        
                          <h2 class="fs-title" style="    position: relative;
                        color: #222222;
                        font-size: 35px;
                        font-weight: 700;
                        z-index: 10;
                        padding-bottom: 15px;
                        margin-bottom: 25px;
                        text-transform: capitalize;">What is your Hungama?</h2>
                    
                     <div class="col-sm-6" style="padding-left:0">
                        <select id="competitionName" class="form-control" name="competitionName" required="true">
                           <option value="" selected="selected">Select Performance</option>
                           <option value="Singing">Singing</option>
                           
                           <option value="Dancing">Dancing</option>
                           
                           <option value="Instrumental">Instrumental</option>
                           <option value="Mimicry">Mimicry</option>
                        </select>
                        
                     </div>
                     <div class="col-sm-6" style="padding-right:0">
                       <select id="competitionType" class="form-control" name="competitionType" required="true" onchange="checkCompetitionType(this);">
                           <option value="" selected="selected">Select Type</option>
                           <option value="Solo">Solo</option>
                           <option value="Group">Group</option>
                        </select>
                        <br>
                     </div>
                     
                     
                     
                       <div class="col-sm-6" style="padding-left:0;display: none;" id="leaderNameDiv">
                        <input type="text" name="leaderName" id="leaderName" value="<?=$leaderName?>" placeholder="Leader Name" class="form-control" onchange="culturalFieldLengthValidator(this);"/>
                     </div>
                     <div class="col-sm-6" style="padding-right:0;display: none;" id="leaderEmailDiv">
                        <input type="text" name="leaderEmail" id="leaderEmail" value="<?=$leaderEmail?>" placeholder="Leader Email Address" class="form-control" onchange="return checkEmail(this);"/>
                         <br>
                     </div>
                    
                     <div class="col-sm-6" style="padding-left:0;display: none;" id="leaderPhoneNumberDiv">
                        <input type="text" name="leaderPhoneNumber" id="leaderPhoneNumber" value="<?=$leaderPhoneNumber?>" placeholder="Leader Phone Numer" class="form-control"  onchange="return formatPhone(this);" onblur="return validatenumber(this)"	onkeypress="return isNumberKey(event)"/>
                     </div>
                     <div class="col-sm-6" style="padding-right:0;display: none;" id="teamSizeDivDiv">
                        <!--<input type="text" name="email" placeholder="Team Size" />-->
                        <select id="teamSize" name="teamSize" class="form-control" >
                           <option value="" selected="selected">Team Size</option>
                           <option value="1">1</option>
                           <option value="2">2</option>
                           <option value="3">3</option>
                           <option value="4">4</option>
                           <option value="5">5</option>
                           <option value="6">6</option>
                           <option value="7">7</option>
                           <option value="8">8</option>
                           <option value="9">9</option>
                           <option value="10+">10+</option>
                        </select>
                        <br>
                     </div>
                    
                     <div class="col-sm-12" style="padding:0;display: none;" id="teammemberNamesDiv">
                        <input type="text" name="teamMemberNames" id="teamMemberNames" value="<?=$teamMemberNames?>" placeholder="Team Member Names" class="form-control" onchange="culturalFieldLengthValidator(this);"/>
                         <br>
                     </div>
                     
                     <div class="col-sm-12" style="padding:0">
                        <input class="form-control" type="text" name="auditionLink" id="auditionLink" value="<?=$auditionLink?>" placeholder="Record and upload a sample performance to be selected for Hungama@DS '17 - Provide your audition link" required="required" onchange="isUrl(this);"/>
                         <br>
                     </div>
                     
                     <div class="col-sm-12"  style="padding:0">
                        <textarea id="comments" name="comments" placeholder="Comments(Optional)" rows="3" class="form-control" required="required" onchange="culturalFieldLengthValidator(this);"><?=$comments?></textarea>
                         <br>
                        
                     
                     </div>
                     <div class="col-sm-12">
                   <div class="alert alert-danger" id='alertMessageDiv' style="display: none;">
    <button type="button" class="close" onclick="closeAlertMessage()" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <span id="alertMessageSpan"></span>
  </div>
  </div>
  
                  </fieldset>
                  </form>
                  
                  <input type="hidden" id="teamCount" name="teamCount" value="1"/>
        </div>
        <div class="col-sm-4 cultural-bg" style="margin-top:25px;">
        <div class="container bg-overlay">
	<div class="row text-center">
	<center><h2 style="color:#ffffff;">Spread the word! </h2></center>
	  <center><h3 style="font-size:16px;color:#ffffff;line-height: 1.6 !important;">Share Digital Summit 2017 with the world on Facebook - help spread the digital fever!</h3></center>
      <center> <a href="https://www.facebook.com/DigitalSummitVizag/" target="_blank" class="theme-btn btn-style-one center console" id="load" data-loading-text="<i class='fa fa-circle-o-notch fa-spin '></i> Submitting" style="padding:5px 26px !important; margin:23px 0 40px 111px;; text-transform: none; ">Share Now</a></center> 
	</div>
</div>
       
        </div>
        </div>
    
</div>



<br>

</div>



<!-- Vendor: Javascripts -->
<script src="js/jquery-2.1.3.js"></script>
<script src="js/bootstrap.min.js"></script >

<script src="https://maps.google.com/maps/api/js?key=AIzaSyDrlCWSCEGTYat1yFIybvtjXe6v24wXY04" 
        async="" 
        type="text/javascript">
</script>

<!-- Our Website Javascripts -->
<script src="js/app.js"></script>
<script src="js/common.js"></script>
<script src="js/widgets.js"></script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>

<script src="js/hungama-dashboard-validations.js"></script>
 <script>
   $( document ).ready(function() {
	   $("#collegeName").val($("#readCollegeName").val());
		if($("#readCollegeName").val()=='Other'){
			$("#otherCollegeName").show();
		}
			
	   
	   $("#graduationBranch").val($("#readGraduationBranch").val());
	   $("#graduationYear").val($("#readGraduationYear").val());
	   $("#otherCollegeName").val($("#readOtherCollegeName").val());

	   $("#competitionName").val($("#readCompetitionName").val());
	   $("#competitionType").val($("#readCompetitionType").val());
	   $("#teamSize").val($("#readTeamSize").val());



	   if($("#competitionType").val()=="Group"){
			
			$("#leaderNameDiv").show();
			$("#leaderEmailDiv").show();
			$("#leaderPhoneNumberDiv").show();
			$("#teamSizeDivDiv").show();
			$("#teammemberNamesDiv").show();
		}else {
			
			$("#leaderNameDiv").hide();
			$("#leaderEmailDiv").hide();
			$("#leaderPhoneNumberDiv").hide();
			$("#teamSizeDivDiv").hide();
			$("#teammemberNamesDiv").hide();
			
			
		}

	   
	   
	});</script>
	
	
</body>
</html>