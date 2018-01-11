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
    
    
    $Query = "SELECT Id,TechnologyArea,UseCaseArea,TeamMember1Name,TeamMember1Branch,TeamMember1Year,TeamContact1Number,
TeamMember1Email,TeamMember2Name,TeamMember2Branch,TeamMember2Year,TeamContact2Number,TeamMember2Email,TeamMember3Name,
TeamMember3Branch,TeamMember3Year,TeamContact3Number,TeamMember3Email,TeamMember4Name,TeamMember4Branch,TeamMember4Year,
TeamContact4Number,TeamMember4Email,TechnicalExpertise,ReasonForBest,CollegeName,OtherCollegeName,Branch,Year,AboutHim FROM tblDs17MeanhackRegistrations WHERE Email=:tempEmail";
    $stmt = $conn->prepare($Query);
    $stmt->bindParam(':tempEmail', $currentUserEmail);
    $stmt->execute();
    
    $CitizenHackId=0;
    $TechnologyArea="";
    $UseCaseArea="";
    
    $TeamMember1Name="";
    $TeamMember1Branch="";
    $TeamMember1Year="";
    $TeamContact1Number="";
    $TeamMember1Email="";
    
    $TeamMember2Name="";
    $TeamMember2Branch="";
    $TeamMember2Year="";
    $TeamContact2Number="";
    $TeamMember2Email="";
    
    $TeamMember3Name="";
    $TeamMember3Branch="";
    $TeamMember3Year="";
    $TeamContact3Number="";
    $TeamMember3Email="";
    
    $TeamMember4Name="";
    $TeamMember4Branch="";
    $TeamMember4Year="";
    $TeamContact4Number="";
    $TeamMember4Email="";
    
    $TechnicalExpertise="";
    $ReasonForBest="";
    
    $collegeName="";
    $otherCollegeName="";
    $graduationBranch="";
    $graduationYear="";
    $aboutHim="";
    
    
    
    if ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
    	$CitizenHackId = $row[0];
    	$TechnologyArea= $row[1];
    	$UseCaseArea= $row[2];
    	
    	$TeamMember1Name= $row[3];
    	$TeamMember1Branch= $row[4];
    	$TeamMember1Year= $row[5];
    	$TeamContact1Number= $row[6];
    	$TeamMember1Email= $row[7];
    	
    	$TeamMember2Name= $row[8];
    	$TeamMember2Branch= $row[9];
    	$TeamMember2Year= $row[10];
    	$TeamContact2Number= $row[11];
    	$TeamMember2Email= $row[12];
    	
    	$TeamMember3Name= $row[13];
    	$TeamMember3Branch= $row[14];
    	$TeamMember3Year= $row[15];
    	$TeamContact3Number= $row[16];
    	$TeamMember3Email= $row[17];
    	
    	$TeamMember4Name= $row[18];
    	$TeamMember4Branch= $row[19];
    	$TeamMember4Year= $row[20];
    	$TeamContact4Number= $row[21];
    	$TeamMember4Email= $row[22];
    	
    	$TechnicalExpertise= $row[23];
    	$ReasonForBest= $row[24];
    	
    	$collegeName= $row[25];
    	$otherCollegeName= $row[26];
    	$graduationBranch= $row[27];
    	$graduationYear= $row[28];
    	$aboutHim= $row[29];
    	
    	
    	
    	
    }
    
    
    if(isset($_POST['btnCitizenHackUpdate'])){
    	try {
    		$frmTechnologyArea= isset($_POST["frmTechnologyArea"]) ? $_POST["frmTechnologyArea"] : '';
    		$frmUseCaseArea= isset($_POST["frmUseCaseArea"]) ? $_POST["frmUseCaseArea"] : '';
    		
    		$teamCandidateName1= isset($_POST["teamCandidateName1"]) ? $_POST["teamCandidateName1"] : '';
    		$teamCandidateEmailId1= isset($_POST["teamCandidateEmailId1"]) ? $_POST["teamCandidateEmailId1"] : '';
    		$teamCandidateBranch1= isset($_POST["teamCandidateBranch1"]) ? $_POST["teamCandidateBranch1"] : '';
    		$teamCandidateYear1= isset($_POST["teamCandidateYear1"]) ? $_POST["teamCandidateYear1"] : '';
    		$teamContactNumber1= isset($_POST["teamContactNumber1"]) ? $_POST["teamContactNumber1"] : '';
    		
    		$teamCandidateName2= isset($_POST["teamCandidateName2"]) ? $_POST["teamCandidateName2"] : '';
    		$teamCandidateEmailId2= isset($_POST["teamCandidateEmailId2"]) ? $_POST["teamCandidateEmailId2"] : '';
    		$teamCandidateBranch2= isset($_POST["teamCandidateBranch2"]) ? $_POST["teamCandidateBranch2"] : '';
    		$teamCandidateYear2= isset($_POST["teamCandidateYear2"]) ? $_POST["teamCandidateYear2"] : '';
    		$teamContactNumber2= isset($_POST["teamContactNumber2"]) ? $_POST["teamContactNumber2"] : '';
    		
    		$teamCandidateName3= isset($_POST["teamCandidateName3"]) ? $_POST["teamCandidateName3"] : '';
    		$teamCandidateEmailId3= isset($_POST["teamCandidateEmailId3"]) ? $_POST["teamCandidateEmailId3"] : '';
    		$teamCandidateBranch3= isset($_POST["teamCandidateBranch3"]) ? $_POST["teamCandidateBranch3"] : '';
    		$teamCandidateYear3= isset($_POST["teamCandidateYear3"]) ? $_POST["teamCandidateYear3"] : '';
    		$teamContactNumber3= isset($_POST["teamContactNumber3"]) ? $_POST["teamContactNumber3"] : '';
    		
    		$teamCandidateName4= isset($_POST["teamCandidateName4"]) ? $_POST["teamCandidateName4"] : '';
    		$teamCandidateEmailId4= isset($_POST["teamCandidateEmailId4"]) ? $_POST["teamCandidateEmailId4"] : '';
    		$teamCandidateBranch4= isset($_POST["teamCandidateBranch4"]) ? $_POST["teamCandidateBranch4"] : '';
    		$teamCandidateYear4= isset($_POST["teamCandidateYear4"]) ? $_POST["teamCandidateYear4"] : '';
    		$teamContactNumber4= isset($_POST["teamContactNumber4"]) ? $_POST["teamContactNumber4"] : '';
    		
    		$technicalExpertise= isset($_POST["technicalExpertise"]) ? $_POST["technicalExpertise"] : '';
    		$whyAreYouTheBest= isset($_POST["whyAreYouTheBest"]) ? $_POST["whyAreYouTheBest"] : '';
    		
    		$tempCollegeName= isset($_POST["collegeName"]) ? $_POST["collegeName"] : '';
    		$tempOtherCollegeName= isset($_POST["otherCollegeName"]) ? $_POST["otherCollegeName"] : '';
    		$tempGraduationBranch= isset($_POST["graduationBranch"]) ? $_POST["graduationBranch"] : '';
    		$tempGraduationYear= isset($_POST["graduationYear"]) ? $_POST["graduationYear"] : '';
    		$tempAboutHim= isset($_POST["aboutHim"]) ? $_POST["aboutHim"] : '';
    		
    		
    		$tempUserEmail=$_SESSION['ses_DS17_USER_EMAIL'];
    		$tempCitizenHackId= isset($_POST["citizenHackId"]) ? $_POST["citizenHackId"] : 0;
    		
    		
    		$sql ="UPDATE tblDs17MeanhackRegistrations
	SET
	TechnologyArea = :tempTechnologyArea ,
	UseCaseArea = :tempUseCaseArea ,
	TeamMember1Name = :tempTeamMember1Name ,
	TeamMember1Branch = :tempTeamMember1Branch ,
	TeamMember1Year = :tempTeamMember1Year ,
	TeamContact1Number = :tempTeamContact1Number ,
	TeamMember1Email = :tempTeamMember1Email ,
	TeamMember2Name = :tempTeamMember2Name ,
	TeamMember2Branch = :tempTeamMember2Branch ,
	TeamMember2Year = :tempTeamMember2Year ,
	TeamContact2Number = :tempTeamContact2Number ,
	TeamMember2Email = :tempTeamMember2Email ,
	TeamMember3Name = :tempTeamMember3Name ,
	TeamMember3Branch = :tempTeamMember3Branch ,
	TeamMember3Year = :tempTeamMember3Year ,
	TeamContact3Number = :tempTeamContact3Number ,
	TeamMember3Email = :tempTeamMember3Email ,
	TeamMember4Name = :tempTeamMember4Name ,
	TeamMember4Branch = :tempTeamMember4Branch ,
	TeamMember4Year = :tempTeamMember4Year ,
	TeamContact4Number = :tempTeamContact4Number ,
	TeamMember4Email = :tempTeamMember4Email ,
	TechnicalExpertise = :tempTechnicalExpertise ,
	ReasonForBest = :tempReasonForBest ,
ModifiedBy=:teampModifiedBy,
ModifiedDate=NOW(),
CollegeName=:tempCollegeName,
OtherCollegeName=:tempOtherCollegeName,
Branch=:tempBranch,
Year=:tempYear,
AboutHim=:tempAboutHim


	WHERE
	Email = :tempEmail AND Id= :tempId";
    		$stmt = $conn->prepare($sql);
    		
    		$stmt->bindParam(':tempTechnologyArea', $frmTechnologyArea);
    		$stmt->bindParam(':tempUseCaseArea', $frmUseCaseArea);
    		
    		$stmt->bindParam(':tempTeamMember1Name', $teamCandidateName1);
    		$stmt->bindParam(':tempTeamMember1Branch', $teamCandidateBranch1);
    		$stmt->bindParam(':tempTeamMember1Year', $teamCandidateYear1);
    		$stmt->bindParam(':tempTeamContact1Number', $teamContactNumber1);
    		$stmt->bindParam(':tempTeamMember1Email', $teamCandidateEmailId1);
    		
    		$stmt->bindParam(':tempTeamMember2Name', $teamCandidateName2);
    		$stmt->bindParam(':tempTeamMember2Branch', $teamCandidateBranch2);
    		$stmt->bindParam(':tempTeamMember2Year', $teamCandidateYear2);
    		$stmt->bindParam(':tempTeamContact2Number', $teamContactNumber2);
    		$stmt->bindParam(':tempTeamMember2Email', $teamCandidateEmailId2);
    		
    		$stmt->bindParam(':tempTeamMember3Name', $teamCandidateName3);
    		$stmt->bindParam(':tempTeamMember3Branch', $teamCandidateBranch3);
    		$stmt->bindParam(':tempTeamMember3Year', $teamCandidateYear3);
    		$stmt->bindParam(':tempTeamContact3Number', $teamContactNumber3);
    		$stmt->bindParam(':tempTeamMember3Email', $teamCandidateEmailId3);
    		
    		$stmt->bindParam(':tempTeamMember4Name', $teamCandidateName4);
    		$stmt->bindParam(':tempTeamMember4Branch', $teamCandidateBranch4);
    		$stmt->bindParam(':tempTeamMember4Year', $teamCandidateYear4);
    		$stmt->bindParam(':tempTeamContact4Number', $teamContactNumber4);
    		$stmt->bindParam(':tempTeamMember4Email', $teamCandidateEmailId4);
    		
    		$stmt->bindParam(':tempTechnicalExpertise', $technicalExpertise);
    		$stmt->bindParam(':tempReasonForBest', $whyAreYouTheBest);
    		$stmt->bindParam(':teampModifiedBy', $currentUserEmail);
    		
    		$stmt->bindParam(':tempCollegeName', $tempCollegeName);
    		$stmt->bindParam(':tempOtherCollegeName', $tempOtherCollegeName);
    		$stmt->bindParam(':tempBranch', $tempGraduationBranch);
    		$stmt->bindParam(':tempYear', $tempGraduationYear);
    		$stmt->bindParam(':tempAboutHim', $tempAboutHim);
    		
    		
    		$stmt->bindParam(':tempEmail', $tempUserEmail);
    		$stmt->bindParam(':tempId', $tempCitizenHackId);
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
    
    if(isset($_POST['btnCitizenHackAdd'])){
    	try {
    		$frmTechnologyArea= isset($_POST["frmTechnologyArea"]) ? $_POST["frmTechnologyArea"] : '';
    		$frmUseCaseArea= isset($_POST["frmUseCaseArea"]) ? $_POST["frmUseCaseArea"] : '';
    		
    		$teamCandidateName1= isset($_POST["teamCandidateName1"]) ? $_POST["teamCandidateName1"] : '';
    		$teamCandidateEmailId1= isset($_POST["teamCandidateEmailId1"]) ? $_POST["teamCandidateEmailId1"] : '';
    		$teamCandidateBranch1= isset($_POST["teamCandidateBranch1"]) ? $_POST["teamCandidateBranch1"] : '';
    		$teamCandidateYear1= isset($_POST["teamCandidateYear1"]) ? $_POST["teamCandidateYear1"] : '';
    		$teamContactNumber1= isset($_POST["teamContactNumber1"]) ? $_POST["teamContactNumber1"] : '';
    		
    		$teamCandidateName2= isset($_POST["teamCandidateName2"]) ? $_POST["teamCandidateName2"] : '';
    		$teamCandidateEmailId2= isset($_POST["teamCandidateEmailId2"]) ? $_POST["teamCandidateEmailId2"] : '';
    		$teamCandidateBranch2= isset($_POST["teamCandidateBranch2"]) ? $_POST["teamCandidateBranch2"] : '';
    		$teamCandidateYear2= isset($_POST["teamCandidateYear2"]) ? $_POST["teamCandidateYear2"] : '';
    		$teamContactNumber2= isset($_POST["teamContactNumber2"]) ? $_POST["teamContactNumber2"] : '';
    		
    		$teamCandidateName3= isset($_POST["teamCandidateName3"]) ? $_POST["teamCandidateName3"] : '';
    		$teamCandidateEmailId3= isset($_POST["teamCandidateEmailId3"]) ? $_POST["teamCandidateEmailId3"] : '';
    		$teamCandidateBranch3= isset($_POST["teamCandidateBranch3"]) ? $_POST["teamCandidateBranch3"] : '';
    		$teamCandidateYear3= isset($_POST["teamCandidateYear3"]) ? $_POST["teamCandidateYear3"] : '';
    		$teamContactNumber3= isset($_POST["teamContactNumber3"]) ? $_POST["teamContactNumber3"] : '';
    		
    		$teamCandidateName4= isset($_POST["teamCandidateName4"]) ? $_POST["teamCandidateName4"] : '';
    		$teamCandidateEmailId4= isset($_POST["teamCandidateEmailId4"]) ? $_POST["teamCandidateEmailId4"] : '';
    		$teamCandidateBranch4= isset($_POST["teamCandidateBranch4"]) ? $_POST["teamCandidateBranch4"] : '';
    		$teamCandidateYear4= isset($_POST["teamCandidateYear4"]) ? $_POST["teamCandidateYear4"] : '';
    		$teamContactNumber4= isset($_POST["teamContactNumber4"]) ? $_POST["teamContactNumber4"] : '';
    		
    		$technicalExpertise= isset($_POST["technicalExpertise"]) ? $_POST["technicalExpertise"] : '';
    		$whyAreYouTheBest= isset($_POST["whyAreYouTheBest"]) ? $_POST["whyAreYouTheBest"] : '';
    		
    		$tempCollegeName= isset($_POST["collegeName"]) ? $_POST["collegeName"] : '';
    		$tempOtherCollegeName= isset($_POST["otherCollegeName"]) ? $_POST["otherCollegeName"] : '';
    		$tempGraduationBranch= isset($_POST["graduationBranch"]) ? $_POST["graduationBranch"] : '';
    		$tempGraduationYear= isset($_POST["graduationYear"]) ? $_POST["graduationYear"] : '';
    		$tempAboutHim= isset($_POST["aboutHim"]) ? $_POST["aboutHim"] : '';
    		
    		
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
    		
    		
    		$sql = "INSERT INTO tblDs17MeanhackRegistrations
	(
	FirstName,
	LastName,
	MobileNumber,
	AltMobileNumber,
	Email,
	CollegeName,
	OtherCollegeName,
	Branch,
	Year,
	AboutHim,
	TechnologyArea,
	UseCaseArea,
	TeamMember1Name,
	TeamMember1Branch,
	TeamMember1Year,
	TeamContact1Number,
	TeamMember1Email,
	TeamMember2Name,
	TeamMember2Branch,
	TeamMember2Year,
	TeamContact2Number,
	TeamMember2Email,
	TeamMember3Name,
	TeamMember3Branch,
	TeamMember3Year,
	TeamContact3Number,
	TeamMember3Email,
	TeamMember4Name,
	TeamMember4Branch,
	TeamMember4Year,
	TeamContact4Number,
	TeamMember4Email,
	TechnicalExpertise,
	ReasonForBest,
	Street,
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
	:tempCollegeName,
	:tempOtherCollegeName,
	:tempBranch,
	:tempYear,
	:tempAboutHim,
	:tempTechnologyArea,
	:tempUseCaseArea,
	:tempTeamMember1Name,
	:tempTeamMember1Branch,
	:tempTeamMember1Year,
	:tempTeamContact1Number,
	:tempTeamMember1Email,
	:tempTeamMember2Name,
	:tempTeamMember2Branch,
	:tempTeamMember2Year,
	:tempTeamContact2Number,
	:tempTeamMember2Email,
	:tempTeamMember3Name,
	:tempTeamMember3Branch,
	:tempTeamMember3Year,
	:tempTeamContact3Number,
	:tempTeamMember3Email,
	:tempTeamMember4Name,
	:tempTeamMember4Branch,
	:tempTeamMember4Year,
	:tempTeamContact4Number,
	:tempTeamMember4Email,
	:tempTechnicalExpertise,
	:tempReasonForBest,
	:tempStreet,
	:tempState,
	:tempDistrict,
	:tempPostalCode,
:tempGender
    				
	)";
    		
    		$stmt = $conn->prepare($sql);
    		
    		
    		
    		
    		$stmt->bindParam(':tempFirstName', $currentUserFirstName);
    		$stmt->bindParam(':tempLastName', $currentUserLastName);
    		$stmt->bindParam(':tempMobileNumber', $currentUserMobileNumber);
    		$stmt->bindParam(':tempAltMobileNumber', $currentUserAltMobileNumber);
    		$stmt->bindParam(':tempEmail', $userEmail);
    		$stmt->bindParam(':tempCollegeName', $tempCollegeName);
    		$stmt->bindParam(':tempOtherCollegeName', $tempOtherCollegeName);
    		$stmt->bindParam(':tempBranch', $tempGraduationBranch);
    		$stmt->bindParam(':tempYear', $tempGraduationYear);
    		$stmt->bindParam(':tempAboutHim', $tempAboutHim);
    		$stmt->bindParam(':tempTechnologyArea', $frmTechnologyArea);
    		$stmt->bindParam(':tempUseCaseArea', $frmUseCaseArea);
    		
    		$stmt->bindParam(':tempTeamMember1Name', $teamCandidateName1);
    		$stmt->bindParam(':tempTeamMember1Branch', $teamCandidateBranch1);
    		$stmt->bindParam(':tempTeamMember1Year', $teamCandidateYear1);
    		$stmt->bindParam(':tempTeamContact1Number', $teamContactNumber1);
    		$stmt->bindParam(':tempTeamMember1Email', $teamCandidateEmailId1);
    		
    		$stmt->bindParam(':tempTeamMember2Name', $teamCandidateName2);
    		$stmt->bindParam(':tempTeamMember2Branch', $teamCandidateBranch2);
    		$stmt->bindParam(':tempTeamMember2Year', $teamCandidateYear2);
    		$stmt->bindParam(':tempTeamContact2Number', $teamContactNumber2);
    		$stmt->bindParam(':tempTeamMember2Email', $teamCandidateEmailId2);
    		
    		$stmt->bindParam(':tempTeamMember3Name', $teamCandidateName3);
    		$stmt->bindParam(':tempTeamMember3Branch', $teamCandidateBranch3);
    		$stmt->bindParam(':tempTeamMember3Year', $teamCandidateYear3);
    		$stmt->bindParam(':tempTeamContact3Number', $teamContactNumber3);
    		$stmt->bindParam(':tempTeamMember3Email', $teamCandidateEmailId3);
    		
    		$stmt->bindParam(':tempTeamMember4Name', $teamCandidateName4);
    		$stmt->bindParam(':tempTeamMember4Branch', $teamCandidateBranch4);
    		$stmt->bindParam(':tempTeamMember4Year', $teamCandidateYear4);
    		$stmt->bindParam(':tempTeamContact4Number', $teamContactNumber4);
    		$stmt->bindParam(':tempTeamMember4Email', $teamCandidateEmailId4);
    		
    		
    		$stmt->bindParam(':tempTechnicalExpertise', $technicalExpertise);
    		$stmt->bindParam(':tempReasonForBest', $whyAreYouTheBest);
    		$stmt->bindParam(':tempStreet', $currentUserStreet);
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
                              <h2><strong>Citizen Hack</strong></h2>
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
    <br>
    
    <input type="hidden" name="team2Name" id="team2Name" value="<?= $TeamMember2Name ?>"/>
    <input type="hidden" name="team3Name" id="team3Name" value="<?= $TeamMember3Name ?>"/>
    <input type="hidden" name="team4Name" id="team4Name" value="<?= $TeamMember4Name ?>"/>
    
    <input type="hidden" name="readCollegeName" id="readCollegeName" value="<?= $collegeName?>"/>
    <input type="hidden" name="readOtherCollegeName" id="readOtherCollegeName" value="<?= $otherCollegeName?>"/>
    <input type="hidden" name="readGraduationBranch" id="readGraduationBranch" value="<?= $graduationBranch?>"/>
    <input type="hidden" name="readGraduationYear" id="readGraduationYear" value="<?= $graduationYear?>"/>
    
    
    
    
      <form class="" id="msform" style="margin-bottom:20px" action="" method="post">
      
      <input type="hidden" id="citizenHackId" name="citizenHackId" value="<?= $CitizenHackId ?>"/>
      
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
        		<strong>Thank you for submiting citizenhack registartion details.</strong>
                  </div>';	
                        }else if($result=='fail'){
                        	echo '<div class="alert alert-danger alert-dismissable">
        		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        		<strong>Oops! Something went wrong please try again!</strong>
                  </div>';
                        
                        }
                        ?>
                         <div  style="padding-right:0">
                        <select name="collegeName"  id="collegeName" class="form-control" onchange="collegeType(this);">
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
                     <input id="otherCollegeName" class="form-control" style="display: none;" type="text" name="otherCollegeName" placeholder="Please Specify your College" onchange="citizenFieldLengthValidator(this);"  /></div>
                    <br>
                           <div class="col-sm-6" style="padding-left:0"> 
                        <select class="form-control" id="graduationBranch" name="graduationBranch" >
                           <option value="" selected="selected">Branch</option>
                           <option value="CSE">CSE</option>
                           <option value="IT">IT</option>
                           <option value="ECE">ECE</option>
                           <option value="EEE">EEE</option>
                           <option value="Civil">Civil</option>
                           <option value="Mechanical">Mechanical</option>
                           <option value="MBA">MBA</option> 
                           <option value="MCA">MCA</option>
                        </select>
                     </div>
                     <div class="col-sm-6" style="padding-right:0">
                        <select class="form-control" id="graduationYear" name="graduationYear" >
                           <option value="" selected="selected">Year</option>
                           <option value="1st">1st</option>
                           <option value="2nd">2nd</option>
                           <option value="3rd">3rd</option>
                           <option value="4th">4th</option>
                        </select>
                        <br>
                     </div>
                     
                     
                       
                   <br><br>
                         <div class="row">
                   <div class="col-sm-12" style="    padding-left: 15px; padding-right: 0px;">
                        <textarea name="aboutHim" class="form-control"  id="aboutHim" placeholder="Tell us a bit about yourself" rows="3" onchange="citizenFieldLengthValidator(this);"><?= $aboutHim ?></textarea>
                     </div>
                   </div>
                        
                          <h2 class="fs-title" style="    position: relative;
                        color: #222222;
                        font-size: 35px;
                        font-weight: 700;
                        z-index: 10;
                        padding-bottom: 15px;
                        margin-bottom: 25px;
                        text-transform: capitalize;">Your Team</h2>
                     <h5 style="text-align:left;padding-bottom:10px!important;">Pick your area of interest in terms of technology and use case and let us know what your idea is
</h5>
                     <div class="col-sm-6" style="padding-left:0">
                        <select class="form-control" id="frmTechnologyArea" name="frmTechnologyArea" required="required">
                        <?php if($TechnologyArea=="") {?>
                           <option value="" selected="selected">Technology Area</option>
                           <?php } else { ?>
                           <option value="" >Technology Area</option>
                           <?php } ?>
                           
                           <?php if($TechnologyArea=="Conversational Bot") {?>
                           <option value="Conversational Bot" selected="selected">Conversational Bot</option>
                           <?php } else { ?>
                           <option value="Conversational Bot">Conversational Bot</option>
                            <?php } ?>
                            <?php if($TechnologyArea=="Connected Solution") {?>
                           <option value="Connected Solution" selected="selected">Connected Solution</option>
                           <?php } else { ?>
                           <option value="Connected Solution">Connected Solution</option>
                            <?php } ?>
                            <?php if($TechnologyArea=="Mobile Applications") {?>
                           <option value="Mobile Applications" selected="selected">Mobile Applications</option>
                           <?php } else { ?>
                           <option value="Mobile Applications">Mobile Applications</option>
                            <?php } ?>
                            <?php if($TechnologyArea=="Machine Learning") {?>
                           <option value="Machine Learning" selected="selected">Machine Learning</option>
                           <?php } else { ?>
                           <option value="Machine Learning">Machine Learning</option>
                            <?php } ?>
                            
                          
                        </select>
                     </div>
                     <div class="col-sm-6" style="padding-right:0">
                        <select class="form-control" id="frmUseCaseArea" name="frmUseCaseArea" required="required">
                        <?php if($UseCaseArea===""){?>
                           <option value="" selected="selected">Use Case Area</option>
                           <?php } else { ?>
                           <option value="">Use Case Area</option>
                           <?php } ?>
                           
                           <?php if($UseCaseArea==="Agriculture"){?>
                           <option value="Agriculture" selected="selected">Agriculture</option>
                           <?php } else { ?>
                           <option value="Agriculture">Agriculture</option>
                           <?php } ?>
                           
                            <?php if($UseCaseArea==="Commerce"){?>
                           <option value="Commerce" selected="selected">Commerce</option>
                           <?php } else { ?>
                           <option value="Commerce">Commerce</option>
                           <?php } ?>
                           
                            <?php if($UseCaseArea==="Education"){?>
                           <option value="Education" selected="selected">Education</option>
                           <?php } else { ?>
                           <option value="Education">Education</option>
                           <?php } ?>
                           
                            <?php if($UseCaseArea==="Government"){?>
                           <option value="Government" selected="selected">Government</option>
                           <?php } else { ?>
                           <option value="Government">Government</option>
                           <?php } ?>
                           
                            <?php if($UseCaseArea==="Transport"){?>
                           <option value="Transport" selected="selected">Transport</option>
                           <?php } else { ?>
                           <option value="Transport">Transport</option>
                           <?php } ?>
                           
                           <?php if($UseCaseArea==="Healthcare"){?>
                           <option value="Healthcare" selected="selected">Healthcare</option>
                           <?php } else { ?>
                           <option value="Healthcare">Healthcare</option>
                           <?php } ?>
                        </select>
                        <br>
                     </div>
                     <div class="col-sm-12" style="padding:0">
                        <h5 style="text-align:left;padding-bottom:10px!important">You will need to select a team of 3 (or) 4 people including yourselves - Please add the remaining team members name in the below form</h5>
                     </div>
                     <div class="col-sm-12">
                     <div class="row">
                     <div class="col-sm-6" style="padding-left:0">
                        <input type="text" id="teamCandidateName1" class="form-control" name="teamCandidateName1" placeholder="Name" required="true" value="<?= $TeamMember1Name?>" onchange="citizenFieldLengthValidator(this);">
                     </div>
                      <div class="col-sm-6" style="padding-right:0">
                        <input type="text" id="teamCandidateEmailId1" class="form-control" name="teamCandidateEmailId1" required="true" value="<?= $TeamMember1Email?>" placeholder="Email Address" onchange="return checkEmail(this);">
                     </div>
                     </div><br>
                    <div class="row">
                     <div class="col-sm-6" style="padding-left:0">
                     <select class="form-control" id="teamCandidateBranch1" name="teamCandidateBranch1" required="required">
                    <?php if($TeamMember1Branch==""){ ?>
                           <option value="" selected="selected">Branch</option>
                           <?php } else {?>
                           <option value="">Branch</option>
                           <?php }?>
                           
                            <?php if($TeamMember1Branch=="CSE"){ ?>
                           <option value="CSE" selected="selected">CSE</option>
                           <?php } else {?>
                           <option value="CSE">CSE</option>
                           <?php }?>
                           
                            <?php if($TeamMember1Branch=="ECE"){ ?>
                           <option value="ECE" selected="selected">ECE</option>
                           <?php } else {?>
                           <option value="ECE">ECE</option>
                           <?php }?>
                           
                            <?php if($TeamMember1Branch=="EEE"){ ?>
                           <option value="EEE" selected="selected">EEE</option>
                           <?php } else {?>
                           <option value="EEE">EEE</option>
                           <?php }?>
                           
                            <?php if($TeamMember1Branch=="Civil"){ ?>
                           <option value="Civil" selected="selected">Civil</option>
                           <?php } else {?>
                           <option value="Civil">Civil</option>
                           <?php }?>
                           
                            <?php if($TeamMember1Branch=="Mechanical"){ ?>
                           <option value="Mechanical" selected="selected">Mechanical</option>
                           <?php } else {?>
                           <option value="Mechanical">Mechanical</option>
                           <?php }?>
                           
                            <?php if($TeamMember1Branch=="MBA"){ ?>
                           <option value="MBA" selected="selected">MBA</option>
                           <?php } else {?>
                           <option value="MBA">MBA</option>
                           <?php }?>
                           
                           <?php if($TeamMember1Branch=="MCA"){ ?>
                           <option value="MCA" selected="selected">MCA</option>
                           <?php } else {?>
                           <option value="MCA">MCA</option>
                           <?php }?>
                           
                        </select>
                        
                     </div>
                     <div class="col-sm-6" style="padding-right:0">
                        <select class="form-control" id="teamCandidateYear1" name="teamCandidateYear1" required="true">
                            <?php if($TeamMember1Year===""){?>
                           <option value="" selected="selected">Year</option>
                           <?php }else{ ?>
                           <option value="" >Year</option>
                           <?php }?>
                           
                            <?php if($TeamMember1Year==="1st"){?>
                           <option value="1st" selected="selected">1st</option>
                           <?php }else{ ?>
                           <option value="1st" >1st</option>
                           <?php }?>
                           
                            <?php if($TeamMember1Year==="2nd"){?>
                           <option value="2nd" selected="selected">2nd</option>
                           <?php }else{ ?>
                           <option value="2nd" >2nd</option>
                           <?php }?>
                           
                            <?php if($TeamMember1Year==="3rd"){?>
                           <option value="3rd" selected="selected">3rd</option>
                           <?php }else{ ?>
                           <option value="3rd" >3rd</option>
                           <?php }?>
                           
                            <?php if($TeamMember1Year==="4th"){?>
                           <option value="4th" selected="selected">4th</option>
                           <?php }else{ ?>
                           <option value="4th" >4th</option>
                           <?php }?>
                           
                        </select>
                     </div>
                     </div><br>
                     <div class="row">
                     
                      <div class="col-sm-6" style="padding-left:0">
                        <input type="text" id="teamContactNumber1" name="teamContactNumber1" class="form-control" required="true" value="<?= $TeamContact1Number?>" placeholder="Contact Number" onchange="return formatPhone(this);" onblur="return validatenumber(this)"	onkeypress="return isNumberKey(event)" >
                     </div>
                     <div class="col-sm-6"></div>
                    </div>
                    </div>
                
                 <div class="col-sm-12" style="display: none;" id="team2Div">
                     <div class="row"><br>
                     <div class="col-sm-6" style="padding-left:0">
                        <input type="text" id="teamCandidateName2" class="form-control" name="teamCandidateName2" placeholder="Name"  value="<?= $TeamMember2Name?>" onchange="citizenFieldLengthValidator(this);">
                     </div>
                      <div class="col-sm-6" style="padding-right:0">
                        <input type="text" id="teamCandidateEmailId2" class="form-control" name="teamCandidateEmailId2" value="<?= $TeamMember2Email?>" placeholder="Email Address" onchange="return checkEmail(this);">
                     </div>
                     </div><br>
                    <div class="row">
                     <div class="col-sm-6" style="padding-left:0">
                        <select class="form-control" id="teamCandidateBranch2" name="teamCandidateBranch2" >
                    <?php if($TeamMember2Branch==""){ ?>
                           <option value="" selected="selected">Branch</option>
                           <?php } else {?>
                           <option value="">Branch</option>
                           <?php }?>
                           
                            <?php if($TeamMember2Branch=="CSE"){ ?>
                           <option value="CSE" selected="selected">CSE</option>
                           <?php } else {?>
                           <option value="CSE">CSE</option>
                           <?php }?>
                           
                            <?php if($TeamMember2Branch=="ECE"){ ?>
                           <option value="ECE" selected="selected">ECE</option>
                           <?php } else {?>
                           <option value="ECE">ECE</option>
                           <?php }?>
                           
                            <?php if($TeamMember2Branch=="EEE"){ ?>
                           <option value="EEE" selected="selected">EEE</option>
                           <?php } else {?>
                           <option value="EEE">EEE</option>
                           <?php }?>
                           
                            <?php if($TeamMember2Branch=="Civil"){ ?>
                           <option value="Civil" selected="selected">Civil</option>
                           <?php } else {?>
                           <option value="Civil">Civil</option>
                           <?php }?>
                           
                            <?php if($TeamMember2Branch=="Mechanical"){ ?>
                           <option value="Mechanical" selected="selected">Mechanical</option>
                           <?php } else {?>
                           <option value="Mechanical">Mechanical</option>
                           <?php }?>
                           
                            <?php if($TeamMember2Branch=="MBA"){ ?>
                           <option value="MBA" selected="selected">MBA</option>
                           <?php } else {?>
                           <option value="MBA">MBA</option>
                           <?php }?>
                           
                           <?php if($TeamMember2Branch=="MCA"){ ?>
                           <option value="MCA" selected="selected">MCA</option>
                           <?php } else {?>
                           <option value="MCA">MCA</option>
                           <?php }?>
                           
                        </select>
                        
                     </div>
                     <div class="col-sm-6" style="padding-right:0">
                        <select class="form-control" id="teamCandidateYear2" name="teamCandidateYear2"  >
                           <?php if($TeamMember2Year===""){?>
                           <option value="" selected="selected">Year</option>
                           <?php }else{ ?>
                           <option value="" >Year</option>
                           <?php }?>
                           
                            <?php if($TeamMember2Year==="1st"){?>
                           <option value="1st" selected="selected">1st</option>
                           <?php }else{ ?>
                           <option value="1st" >1st</option>
                           <?php }?>
                           
                            <?php if($TeamMember2Year==="2nd"){?>
                           <option value="2nd" selected="selected">2nd</option>
                           <?php }else{ ?>
                           <option value="2nd" >2nd</option>
                           <?php }?>
                           
                            <?php if($TeamMember2Year==="3rd"){?>
                           <option value="3rd" selected="selected">3rd</option>
                           <?php }else{ ?>
                           <option value="3rd" >3rd</option>
                           <?php }?>
                           
                            <?php if($TeamMember2Year==="4th"){?>
                           <option value="4th" selected="selected">4th</option>
                           <?php }else{ ?>
                           <option value="4th" >4th</option>
                           <?php }?>
                        </select>
                     </div>
                     </div><br>
                     <div class="row">
                     
                      <div class="col-sm-6" style="padding-left:0">
                        <input type="text" id="teamContactNumber2" name="teamContactNumber2" class="form-control"  value="<?= $TeamContact2Number?>" placeholder="Contact Number" onchange="return formatPhone(this);" onblur="return validatenumber(this)"	onkeypress="return isNumberKey(event)" >
                     </div>
                     <div class="col-sm-6"></div>
                    </div>
                    </div>
                	
                
                
                
                
                
                 <div class="col-sm-12" style="display: none;" id="team3Div">
                     <div class="row"><br>
                     <div class="col-sm-6" style="padding-left:0">
                        <input type="text" id="teamCandidateName3" class="form-control" name="teamCandidateName3" placeholder="Name"  value="<?= $TeamMember3Name?>" onchange="citizenFieldLengthValidator(this);">
                     </div>
                      <div class="col-sm-6" style="padding-right:0">
                        <input type="text" id="teamCandidateEmailId3" class="form-control" name="teamCandidateEmailId3" value="<?= $TeamMember3Email?>" placeholder="Email Address" onchange="return checkEmail(this);">
                     </div>
                     </div><br>
                    <div class="row">
                     <div class="col-sm-6" style="padding-left:0">
                        <select class="form-control" id="teamCandidateBranch3" name="teamCandidateBranch3" >
                    <?php if($TeamMember3Branch==""){ ?>
                           <option value="" selected="selected">Branch</option>
                           <?php } else {?>
                           <option value="">Branch</option>
                           <?php }?>
                           
                            <?php if($TeamMember3Branch=="CSE"){ ?>
                           <option value="CSE" selected="selected">CSE</option>
                           <?php } else {?>
                           <option value="CSE">CSE</option>
                           <?php }?>
                           
                            <?php if($TeamMember3Branch=="ECE"){ ?>
                           <option value="ECE" selected="selected">ECE</option>
                           <?php } else {?>
                           <option value="ECE">ECE</option>
                           <?php }?>
                           
                            <?php if($TeamMember3Branch=="EEE"){ ?>
                           <option value="EEE" selected="selected">EEE</option>
                           <?php } else {?>
                           <option value="EEE">EEE</option>
                           <?php }?>
                           
                            <?php if($TeamMember3Branch=="Civil"){ ?>
                           <option value="Civil" selected="selected">Civil</option>
                           <?php } else {?>
                           <option value="Civil">Civil</option>
                           <?php }?>
                           
                            <?php if($TeamMember3Branch=="Mechanical"){ ?>
                           <option value="Mechanical" selected="selected">Mechanical</option>
                           <?php } else {?>
                           <option value="Mechanical">Mechanical</option>
                           <?php }?>
                           
                            <?php if($TeamMember3Branch=="MBA"){ ?>
                           <option value="MBA" selected="selected">MBA</option>
                           <?php } else {?>
                           <option value="MBA">MBA</option>
                           <?php }?>
                           
                           <?php if($TeamMember3Branch=="MCA"){ ?>
                           <option value="MCA" selected="selected">MCA</option>
                           <?php } else {?>
                           <option value="MCA">MCA</option>
                           <?php }?>
                           
                        </select>
                     </div>
                     <div class="col-sm-6" style="padding-right:0">
                        <select class="form-control" id="teamCandidateYear3" name="teamCandidateYear3" >
                           <?php if($TeamMember3Year===""){?>
                           <option value="" selected="selected">Year</option>
                           <?php }else{ ?>
                           <option value="" >Year</option>
                           <?php }?>
                           
                            <?php if($TeamMember3Year==="1st"){?>
                           <option value="1st" selected="selected">1st</option>
                           <?php }else{ ?>
                           <option value="1st" >1st</option>
                           <?php }?>
                           
                            <?php if($TeamMember3Year==="2nd"){?>
                           <option value="2nd" selected="selected">2nd</option>
                           <?php }else{ ?>
                           <option value="2nd" >2nd</option>
                           <?php }?>
                           
                            <?php if($TeamMember3Year==="3rd"){?>
                           <option value="3rd" selected="selected">3rd</option>
                           <?php }else{ ?>
                           <option value="3rd" >3rd</option>
                           <?php }?>
                           
                            <?php if($TeamMember3Year==="4th"){?>
                           <option value="4th" selected="selected">4th</option>
                           <?php }else{ ?>
                           <option value="4th" >4th</option>
                           <?php }?>
                        </select>
                     </div>
                     </div><br>
                     <div class="row">
                     
                      <div class="col-sm-6" style="padding-left:0">
                        <input type="text" id="teamContactNumber3" name="teamContactNumber3" class="form-control" value="<?= $TeamContact3Number?>" placeholder="Contact Number" onchange="return formatPhone(this);" onblur="return validatenumber(this)"	onkeypress="return isNumberKey(event)" >
                     </div>
                     <div class="col-sm-6"></div>
                    </div>
                    </div>
                	
                
                
               
                 <div class="col-sm-12" style="display: none;" id="team4Div">
                     <div class="row"><br>
                     <div class="col-sm-6" style="padding-left:0">
                        <input type="text" id="teamCandidateName4" class="form-control" name="teamCandidateName4" placeholder="Name"  value="<?= $TeamMember4Name?>" onchange="citizenFieldLengthValidator(this);">
                     </div>
                      <div class="col-sm-6" style="padding-right:0">
                        <input type="text" id="teamCandidateEmailId4" class="form-control" name="teamCandidateEmailId4"  value="<?= $TeamMember4Email?>" placeholder="Email Address" onchange="return checkEmail(this);">
                     </div>
                     </div><br>
                    <div class="row">
                     <div class="col-sm-6" style="padding-left:0">
                      <select class="form-control" id="teamCandidateBranch4" name="teamCandidateBranch4" >
                    <?php if($TeamMember4Branch==""){ ?>
                           <option value="" selected="selected">Branch</option>
                           <?php } else {?>
                           <option value="">Branch</option>
                           <?php }?>
                           
                            <?php if($TeamMember4Branch=="CSE"){ ?>
                           <option value="CSE" selected="selected">CSE</option>
                           <?php } else {?>
                           <option value="CSE">CSE</option>
                           <?php }?>
                           
                            <?php if($TeamMember4Branch=="ECE"){ ?>
                           <option value="ECE" selected="selected">ECE</option>
                           <?php } else {?>
                           <option value="ECE">ECE</option>
                           <?php }?>
                           
                            <?php if($TeamMember4Branch=="EEE"){ ?>
                           <option value="EEE" selected="selected">EEE</option>
                           <?php } else {?>
                           <option value="EEE">EEE</option>
                           <?php }?>
                           
                            <?php if($TeamMember4Branch=="Civil"){ ?>
                           <option value="Civil" selected="selected">Civil</option>
                           <?php } else {?>
                           <option value="Civil">Civil</option>
                           <?php }?>
                           
                            <?php if($TeamMember4Branch=="Mechanical"){ ?>
                           <option value="Mechanical" selected="selected">Mechanical</option>
                           <?php } else {?>
                           <option value="Mechanical">Mechanical</option>
                           <?php }?>
                           
                            <?php if($TeamMember4Branch=="MBA"){ ?>
                           <option value="MBA" selected="selected">MBA</option>
                           <?php } else {?>
                           <option value="MBA">MBA</option>
                           <?php }?>
                           
                           <?php if($TeamMember4Branch=="MCA"){ ?>
                           <option value="MCA" selected="selected">MCA</option>
                           <?php } else {?>
                           <option value="MCA">MCA</option>
                           <?php }?>
                           
                        </select>
                     </div>
                     <div class="col-sm-6" style="padding-right:0">
                        <select class="form-control" id="teamCandidateYear4" name="teamCandidateYear4" >
                           <?php if($TeamMember4Year===""){?>
                           <option value="" selected="selected">Year</option>
                           <?php }else{ ?>
                           <option value="" >Year</option>
                           <?php }?>
                           
                            <?php if($TeamMember4Year==="1st"){?>
                           <option value="1st" selected="selected">1st</option>
                           <?php }else{ ?>
                           <option value="1st" >1st</option>
                           <?php }?>
                           
                            <?php if($TeamMember4Year==="2nd"){?>
                           <option value="2nd" selected="selected">2nd</option>
                           <?php }else{ ?>
                           <option value="2nd" >2nd</option>
                           <?php }?>
                           
                            <?php if($TeamMember4Year==="3rd"){?>
                           <option value="3rd" selected="selected">3rd</option>
                           <?php }else{ ?>
                           <option value="3rd" >3rd</option>
                           <?php }?>
                           
                            <?php if($TeamMember4Year==="4th"){?>
                           <option value="4th" selected="selected">4th</option>
                           <?php }else{ ?>
                           <option value="4th" >4th</option>
                           <?php }?>
                        </select>
                     </div>
                     </div><br>
                     <div class="row">
                     
                      <div class="col-sm-6" style="padding-left:0">
                        <input type="text" id="teamContactNumber4" name="teamContactNumber4" class="form-control"  value="<?= $TeamContact4Number?>" placeholder="Contact Number" onchange="return formatPhone(this);" onblur="return validatenumber(this)"	onkeypress="return isNumberKey(event)" >
                     </div>
                     <div class="col-sm-6"></div>
                    </div>
                    </div>
                	
                
                
                
                
                
            
                     <div class="col-sm-12" style="padding:0;text-align:left;margin-top:18px;">
                        <button type="button" style="background-color:#0d4165;border-color:#0d4165" class="btn btn-info" id="addButton" onclick="addTeamRow();">
                        <span class="glyphicon glyphicon-plus"></span> 
                        </button>
                        <button type="button" class="btn btn-info" id="removeButton" style="display: none;" onclick="removeTeamRow();">
                        <span class="glyphicon glyphicon-minus"></span> 
                        </button>
                     </div>
                     <div class="row">
                     <div class="col-sm-6" style="text-align:left;">
                        <h3 class="heavy">Technical Expertise</h3>
                     </div>
                     <div class="col-sm-6"  style="text-align:left">
                        <h3 class="heavy">What is your technology idea?</h3>
                     </div>
                     </div>
                     <div class="col-sm-6" style="padding-left:0">
                        <textarea required="required" id="technicalExpertise" name="technicalExpertise" onchange="citizenFieldLengthValidator(this);" placeholder="Why do you think your team can win MEANHack? Explain in detail, this will be used to determine your selection to participate." rows="3" style="padding: 5px;margin: 0px 174.656px 0px 0px; width:323px;height:129px;" ><?= $TechnicalExpertise?></textarea>
                     </div>
                    
  
                     <div class="col-sm-6"  style="padding-right:0">
                        <textarea required="required" id="whyAreYouTheBest" name="whyAreYouTheBest" onchange="citizenFieldLengthValidator(this);" placeholder="Explain to us what your idea is and what you would like to built at the Hackathon  " rows="3" style="padding: 5px;margin: 0px 174.656px 0px 0px; width:323px;height:129px;"><?= $ReasonForBest?></textarea>
                      
                     
                       
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
<script src="js/meanhack-dashboard-validations"></script>

 <script>
   $( document ).ready(function() {
	   $("#collegeName").val($("#readCollegeName").val());
		if($("#readCollegeName").val()=='Other'){
			$("#otherCollegeName").show();
		}
			
	   
	   $("#graduationBranch").val($("#readGraduationBranch").val());
	   $("#graduationYear").val($("#readGraduationYear").val());
	   $("#otherCollegeName").val($("#readOtherCollegeName").val());
	   
	});</script>
	
	
</body>
</html>