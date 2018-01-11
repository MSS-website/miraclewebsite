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
    <title>Digital Summit'17 | Jobfair </title>
     <?php include '../../config/Locations.php';
 include '../config/DS17Config.php';
 ?>
     <link rel="shortcut icon" href="<?= AMAZON_URL ?>/ds17/admin/images/favicon.ico" type="image/x-icon">
    <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">

   <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Our Website CSS Styles -->
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
    
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
     <?php 
    session_start();
    if (isset($_SESSION['SES_DS17_ADMIN_LOGINID']) && $_SESSION['SES_DS17_ADMIN_LOGINID'] != "") {
    	
    } else {
    	header('Location: admin-login.php');
    }
    
    
    
    $applyingFor="";
    $attendeeType="";
    $searchQuery="";
    if (isset($_POST['btnSearchSubmit'])) {
    	// echo 'hii';
    	try {
    		// $conn->connectToDatabase();
    		$applyingFor= isset($_POST["applyingFor"]) ? $_POST["applyingFor"] : '';
    		$attendeeType= isset($_POST["attendeeType"]) ? $_POST["attendeeType"] : '';
    		
    		$searchQuery= 'SELECT tblDs17JobRegistrations.Id,
tblDs17JobRegistrations.FirstName,tblDs17JobRegistrations.LastName,tblDs17JobRegistrations.Email,
tblDs17JobRegistrations.PhoneNumber,tblDs17JobRegistrations.AltPhoneNumber,tblDs17JobRegistrations.Gender,
tblDs17JobRegistrations.Designation,tblDs17JobRegistrations.AttendeeType,tblDs17JobRegistrations.ApplyingFor,
tblDs17JobRegistrations.Graduation,
tblDs17JobRegistrations.GraduationPer,tblDs17JobRegistrations.PostGraduation,
tblDs17JobRegistrations.PostGraduationPer,tblDs17JobRegistrations.Experience,tblDs17JobRegistrations.Salary,
tblDs17JobRegistrations.SkillSet,tblDs17JobRegistrations.PositionDesc,tblDs17JobRegistrations.Street,
tblDs17JobRegistrations.Country,tblDs17JobRegistrations.State,
tblDs17JobRegistrations.District,tblDs17JobRegistrations.PostalCode,DATE(tblDs17JobRegistrations.CreatedDate) AS CreatedDate,
tblDs17JobRegistrations.AttachmentLocation,tblDs17JobRegistrations.RandomKey,
tblDs17JobRegistrations.CollegeName,tblDs17JobRegistrations.OtherCollegeName,
tblDs17TechTalksRegistrations.Email AS TechTalkEmail, 
tblDs17MeanhackRegistrations.Email AS CitizenHackEmail,
tblDs17CulturalRegistrations.Email AS HungamaEmail
FROM tblDs17JobRegistrations
LEFT JOIN tblDs17TechTalksRegistrations ON tblDs17JobRegistrations.Email = tblDs17TechTalksRegistrations.Email 
LEFT JOIN tblDs17MeanhackRegistrations ON tblDs17JobRegistrations.Email = tblDs17MeanhackRegistrations.Email
LEFT JOIN tblDs17CulturalRegistrations ON tblDs17JobRegistrations.Email = tblDs17CulturalRegistrations.Email
  WHERE 1=1';
    		
    		//echo "query-->".$searchQuery.'<br>';
    		//echo "PartnerName-->".$partnerName.'<br>';
    		//echo "organizationName-->".$organizationName.'<br>';
    		if ($applyingFor!= '') {
    			//$searchQuery= $searchQuery. ' AND PartnerName=:tempPartnerName';
    			$searchQuery= $searchQuery. ' AND tblDs17JobRegistrations.ApplyingFor = :tempApplyingFor';
    			
    		}
    		
    		if ($attendeeType!= '') {
    			//$searchQuery= $searchQuery. ' AND OrganizationName=:tempOrganizationName';
    			$searchQuery= $searchQuery. ' AND tblDs17JobRegistrations.AttendeeType = :tempAttendeeType';
    			
    		}
    		
    		
    		$searchQuery= $searchQuery. ' ORDER BY tblDs17JobRegistrations.Id';
    		
    		//echo 'haii---'.$searchQuery;
    		
    	} catch (Exception $exc) {
    		
    		$exc->getMessage();
    		$resultMessage = '<font color=red size=2px>' . $exc . '</font>';
    		//  $conn->closeConnection(); // closing the connection
    		//    mysql_close();
    	}
    }
    
    
    
    
    
    
    ?>
    
<style>
.panel-heading {
    padding: 27px 15px !important;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
}
.pagenum{
 float:right;
 padding-top: 28px;
}
.breadcrumbs {
    background: #f5f5f5 none repeat scroll 0 0;
    float: left;
    list-style: outside none none;
    margin: 23px 0 0;
    padding: 3px 8px !important;
    width: 100%;
}
#header-scroll {
    top: 96px !important;
}
.main-content {
      padding: 7px 60px 30px 250px;}
</style>


    
    
</head>
<body>
<!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Our Website Content Goes Here -->
<?php include 'admin-header.php'; ?>


<!--tabl modal start-->
<!--table modal-->
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
      
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      <ul class="nav nav-tabs" role="tablist">
  <li  class="active">
    <a href="#profile" role="tab" data-toggle="tab"><strong>Personal Details</strong></a>
  </li>
  <li>
    <a href="#buzz" role="tab" data-toggle="tab"><strong>Comments</strong></a>
  </li>

</ul>
<div class="tab-content">
  <div role="tabpanel" class="tab-pane fade in active" id="profile">   
  <form class="auto-container" action="" method="post" id="msform" style="margin-bottom:20px">
         <div id="load" style="color: red; display: none;">Processing Please Wait...</div>      
               <!-- fieldsets -->
               <fieldset id="basicDetailsFieldSet">
                  
                
                   
                <div class="col-sm-6" style="padding-left:0"> 
                     <input readonly="readonly" type="text" class="form-control" name="firstName" id="firstName" placeholder="First Name" onchange="techTalksFieldLengthValidator(this);"><br>
                </div>
                <div class="col-sm-6" style="padding-right:0"> 
                     <input readonly="readonly" type="text" class="form-control" name="lastName" id="lastName" placeholder="Last Name" onchange="techTalksFieldLengthValidator(this);"><br>
                </div>
                  
                 <div class="col-sm-6" style="padding-left:0"> 
                     <input readonly="readonly" type="text" class="form-control" name="mobileNumber" id="mobileNumber" placeholder="Mobile Number" onchange="return formatPhone(this);" onblur="return validatenumber(this)" onkeypress="return isNumberKey(event)"><br>
                 </div>
                 <div class="col-sm-6" style="padding-right:0"> 
                     <input readonly="readonly" type="text" class="form-control" name="altMobileNumber" id="altMobileNumber" placeholder="Alternate Mobile Number" onchange="return formatPhone(this);" onblur="return validatenumber(this)" onkeypress="return isNumberKey(event)"><br>
               
                 </div>
                 <div class="col-sm-6" style="padding-left:0"> 
                     <input readonly="readonly" type="text" class="form-control" name="email" id="email" placeholder="Email Address" onchange=" return checkEmail(this);"><br>
                
             </div>
             
              <div class="col-sm-6" style="padding-right:0"> 
                     <input readonly="readonly" type="text" class="form-control" name="gender" id="gender" placeholder="Gender" ><br>
                
             </div>
                  
              <div class="col-sm-6" style="padding-left:0"> 
                     <input readonly="readonly" type="text" class="form-control" name="designation" id="designation" placeholder="Designation" onchange="techTalksFieldLengthValidator(this);"><br>
                
                  </div>
                  
                   <div class="col-sm-6" style="padding-right:0"> 
                     <input readonly="readonly" type="text" class="form-control" name="attendeeType" id="attendeeType" placeholder="Attendee Type" ><br>
                
                  </div>
                  
                   <div class="col-sm-12" style="padding:0;display: none;" id="collegeNameDiv"> 
                    <input readonly="readonly" type="text" class="form-control" name="collegeName" id="collegeName" placeholder="College Name" onchange="techTalksFieldLengthValidator(this);"><br>
                    
              </div>
                <div class="col-sm-12" style="padding:0;display: none;" id="otherCollegeNameDiv"> 
                    <input readonly="readonly" type="text" class="form-control" name="otherCollegeName" id="otherCollegeName" placeholder="Other College Name" onchange="techTalksFieldLengthValidator(this);"><br>
                    
              </div>
                  
              <div class="col-sm-12" style="padding:0"> 
                    <input readonly="readonly" type="text" class="form-control" name="position" id="position" placeholder="Position" onchange="techTalksFieldLengthValidator(this);"><br>
                    
              </div>
                 <div class="col-sm-6" style="padding-left:0">
                      <input readonly="readonly" type="text" class="form-control" name="graduation" id="graduation" placeholder="Graduation" onchange="techTalksFieldLengthValidator(this);"><br>
                     
                  </div>
                   <div class="col-sm-6" style="padding-right:0">
                     <input readonly="readonly" type="text" class="form-control" name="graduationPercentage" id="graduationPercentage" placeholder="Graduation Percentage" onchange="techTalksFieldLengthValidator(this);"><br>
                    
                  </div>
                  
                  
                   <div class="col-sm-6" style="padding-left:0;">
                     <input readonly="readonly" type="text" class="form-control" name="postGraduation" id="postGraduation" placeholder="Post Graduation" onchange="techTalksFieldLengthValidator(this);"><br>
                  </div>
               
                  <div class="col-sm-6"  style='padding-right:0'>
                      <input readonly="readonly" type="text" class="form-control" name="postGraduationPercentage" id="postGraduationPercentage" placeholder="Post Graduation Percentage" onchange="techTalksFieldLengthValidator(this);"><br>
                    
                  </div>
                  <div class="col-sm-6" style='padding-left:0'>
                   
                    <input readonly="readonly" type="text" class="form-control" name="yearsOfExperience" id="yearsOfExperience" placeholder="Years of experience" onchange="techTalksFieldLengthValidator(this);"><br>
                   
                  </div>
                   <div class="col-sm-6" style='padding-right:0'>  
                  <input readonly="readonly" type="text" class="form-control" name="lastDrawnMonthlySalary" id="lastDrawnMonthlySalary" placeholder="Last Drawn Monthly Salary"/> <br>
                  </div>
                  
               
                
                     <!--
                  <div class="col-sm-6" style='padding-right:0'>  
                  <span id="resume"></span>
                  </div>
                  -->
                   <div class="col-sm-6" style='padding-left:0'>  
                  <input readonly="readonly" type="text" class="form-control" name="skillSetModal" id="skillSetModal" placeholder="Skill Set"/> <br>
                  </div>
                  
                  
                 
                  <div class="col-sm-6" style='padding-right:0'>  
                  <input readonly="readonly" type="text" class="form-control" name="street" id="street" placeholder="Street"/> <br>
                  </div>
                  <div class="col-sm-6" style='padding-left:0'>  
                  <input readonly="readonly" type="text" class="form-control" name="state" id="state" placeholder="State"/> <br>
                  </div>
                  
                    <div class="col-sm-6" style='padding-right:0'>  
                  <input readonly="readonly" type="text" class="form-control" name="district" id="district" placeholder="District"/> <br>
                  </div>
                  <div class="col-sm-6" style='padding-left:0'>  
                  <input readonly="readonly" type="text" class="form-control" name="postalCode" id="postalCode" placeholder="Postal Code"/> <br>
                  </div>
                   <div class="col-sm-6" style='padding-right:0'>  
                  <span id='resumeLinkSpan'></span>
                  </div>
                  
                 
 				 <div class="col-sm-12" style="padding:0">
                     <textarea readonly="readonly" class="form-control" cols="10" rows="5" name="comments" id="comments" placeholder="Comments" ></textarea><br>
                  </div>
 					<!--  Collge Dropdown Start -->
 				
 					
 					 <!--  Collge Dropdown end -->
 					 
 				
                     
                  
                     
 					 
               
               </fieldset>
              
        
               <div class="alert alert-danger" id="alertMessageDiv" style="display: none;">
    
    <button type="button" class="close" onclick="closeAlertMessage()" aria-label="Close"><span aria-hidden="true">×</span></button>
    <span id="alertMessageSpan"></span>
    
    
  </div>
            </form></div>
 <div role="tabpanel" class="tab-pane fade" id="buzz">  
   <div id="loadComments" style="color: red; display: none;">Processing Please Wait...<br></div>
 <b>Name:&nbsp;</b><span id="nameSpan"></span>
         <p>Registered&nbsp;To&nbsp;:&nbsp;
          <button type="button" class="btn btn-success" id="techtalksButton">Techtalks</button> &nbsp;&nbsp;
          <button type="button" class="btn btn-info" id="citizenhackButton">Citizen Hack</button>&nbsp;&nbsp;
          <button type="button" class="btn btn-warning" id="hungamaButton">Hungama</button> &nbsp;&nbsp;
          <button type="button" class="btn btn-danger" id="jobFairButton">Jobfairs</button>
        <div class="row"  style="margin-top:20px;">
          <form>
         
            <span id="resultMessageForupdate"></span>
            <input type="hidden" id="jobfairId" name="jobfairId" value="0">
             <div class="col-sm-4" style="margin-top: -1px;margin-bottom: -15px;">
                 <h5><b>Likely to come</b> </h5> &nbsp; &nbsp; </div>
   <div class="col-sm-8" style="margin-top: 5px;margin-left: -63px;">
        <label class="radio-inline">
      <input type="radio" name="likelyToCome" value="Yes"> Yes
    </label>
    <label class="radio-inline">
      <input type="radio" name="likelyToCome" value="No"> No
    </label>
     <label class="radio-inline">
      <input type="radio" name="likelyToCome" value="May Be"> May Be
    </label>
      <label class="radio-inline">
      <input type="radio" name="likelyToCome" value="Not Reachable"> Not Reachable
    </label>
   </div> </form> </div>
   
       
 
 
  <div class="auto-container">
  <div class="row" style="margin-top: -10px;padding:0;">
      <div class="col-sm-12">
       <h5><b>Add Comments</b></h5>
      <textarea  class="form-control" cols="10" rows="5" name="addComments" id="addComments" onchange="fieldLengthValidator(this);"></textarea>
     </div>
     </div>
     </div>
     <br>
  
  <div class="row" style="margin-left:435px;">
<button type="button" id="btnJonFairCallSubmit" class="btn btn-primary btn-sm" style="padding: 5px 26px!important; font-size:15px!important;" onclick="updateJobFairCallData();">Save</button>
  </div>
       </p></div>
  
</div>
    
      </div>
      <div class="modal-footer">
      </div>
    </div>
    </div>
</div>

<!--tabl modal end-->


 


<div class="main-content">
    <div class="panel-content" style="margin-top:75px!important;">
        <div class="main-title-sec">
            <div class="row">
                <div class="col-md-3 column">
                    <div class="heading-profile">
                        <h2> Jobfair </h2>
                     
                    </div>
                </div>
            </div>
        </div><!-- Heading Sec -->
        <ul class="breadcrumbs">
           
            <li>December 13th-15th, 2017 Digital Valley(Vizag)</li>
        </ul>
        
         <!-- Registrants Count Start -->
        <?php include 'count-registraints.php'; ?>
        <!-- Registrants Count end -->
           
              
    </div><!-- Panel Content -->
<form method="post" action="" id="myForm" name="myForm">
<div class="row">
               <div class="col-sm-3">
               
               <select class="form-control" name="applyingFor" id="applyingFor"
								>
								<option value="">Select Position</option>
								<option value="Freshers(Software Trainee)">Freshers(Software
									Trainee)</option>
								<option value="Freshers(Marketing)">Freshers(Marketing)</option>
								<option value="Freshers(HR)">Freshers(HR)</option>
								<option value="Freshers(Accounting)">Freshers(Accounting)</option>
								<option value="Software Engineers">Software Engineers</option>
								<option value=".NET Developers">.NET Developers</option>
								<option value="PHP Developers">PHP Developers</option>
								<option value="Creative Designer(PhotoShop)">Creative
									Designer(PhotoShop)</option>
								<option value="Network Engineers">Network Engineers</option>
								<option value="System Administrators">System Administrators</option>
								<option value="Database Administrators">Database Administrators</option>
								<option value="QA Trainee">QA Trainee</option>
                                <option value="SAP SD/LO Trainee">SAP SD/LO Trainee</option>
                                <option value="SAP MM/WM Trainee">SAP MM/WM Trainee</option>
                                <option value="SAP PP/PM Trainee">SAP PP/PM Trainee</option>
                                <option value="SAP FICO Trainee">SAP FICO Trainee</option>
                                <option value="SAP BI Trainee">SAP BI Trainee</option>
                                <option value="SAP BO Trainee">SAP BO Trainee</option>
                                <option value="SAP Basis Trainee">SAP Basis Trainee</option>
                                <option value="SAP Security Trainee">SAP Security Trainee</option>
                                <option value="SAP PI Trainee">SAP PI Trainee</option>
                                <option value="BusinessDevelopmentExecutive(BDE)">BusinessDevelopmentExecutive(BDE)</option>
                                <option value="US-IT Staffing">US-IT Staffing</option>
                                <option value="US-IT Recruitment">US-IT Recruitment</option>
                                <option value="Content Analyst">Content Analyst</option>
                                <option value="Social Media Analyst">Social Media Analyst</option>
                                <option value="Technical Content Writer">Technical Content Writer</option>
                                <option value="Sr.Talend Developer">Sr.Talend Developer</option>
                                <option value="Sr.EDI Business Analyst">Sr.EDI Business Analyst</option>
                                <option value="Sr. Oracle Developer">Sr. Oracle Developer</option>
                                <option value="Lead designer - BI Analytics">Lead designer - BI Analytics</option>
                                <option value="QA Analyst">QA Analyst</option>
                                <option value="SAP ABAP Consultant">SAP ABAP Consultant</option>
                                <option value="SAP MM/WM Consultant">SAP MM/WM Consultant</option>
                                <option value="SAP PP/APO Consultant">SAP PP/APO Consultant</option>
                                <option value="SAP PI/PO Consultant">SAP PI/PO Consultant</option>
                                <option value="SAP HCM/US Payroll Consultant">SAP HCM/US Payroll Consultant</option>
							</select> 
                 
                   
                     
               </div> 
                <div class="col-sm-3">
                
                 <select class="form-control" name="attendeeType" id="attendeeType">
								<option value="" selected="selected">Attendee type</option>
								<option value="Student">Student</option>
								<option value="IT Professional">IT Professional</option>
								<option value="Government Official">Government Official</option>
								<option value="NRI Delegate">NRI Delegate</option>
								<option value="Other">Other</option>
							</select>  
                     
                </div>
                
                 <div class="col-sm-3">
                      <button type="submit" id="btnSearchSubmit" name="btnSearchSubmit" class="btn btn-primary col-sm-12">Search</button>
                 </div> 
                   <div class="col-sm-3">
                   
                     <button type="button" onclick="exportJobfair();" class="btn btn-success col-sm-12"> <i class="fa fa-download"></i>&nbsp;&nbsp;&nbsp;Export</button>
                 </div>
            </div>
</form>

<div class="row">
                    <div class="col-md-12">
                        
                         
                         <div class="widget white" >
                              <div id="wrapper2">  
                              <div class="gap" style="line-height: 20px; height: 20px;"></div>                                         
                                   <table class="table table-hover table-striped" id="reg_tab">
                                        <thead>
                                          <tr>
                                             <th ><span>S:No</span></th>
                                             <th ><span>Name</span></th>
                                             <th ><span>E-mail</span></th>
                                             <th ><span>Mobile&nbsp;Number</span></th>
                                             <th ><span>Applied&nbsp;For</span></th>
                                             <th ><span>Attachment</span></th>
                                             
                                             <th ><span>Registered&nbsp;Date</span></th>
                                            
                                          </tr>
                                        </thead>
                                        <tbody>
                                        
                                        <?php 
                                        $pageNo=1;
                                        $sno = 0;
                                        $pageSize=10;
                                        try {
                                        	
                                        	$selectQuery="";
                                        	if($searchQuery==""){
                                        	$selectQuery = "SELECT tblDs17JobRegistrations.Id,
tblDs17JobRegistrations.FirstName,tblDs17JobRegistrations.LastName,tblDs17JobRegistrations.Email,
tblDs17JobRegistrations.PhoneNumber,tblDs17JobRegistrations.AltPhoneNumber,tblDs17JobRegistrations.Gender,
tblDs17JobRegistrations.Designation,tblDs17JobRegistrations.AttendeeType,tblDs17JobRegistrations.ApplyingFor,
tblDs17JobRegistrations.Graduation,
tblDs17JobRegistrations.GraduationPer,tblDs17JobRegistrations.PostGraduation,
tblDs17JobRegistrations.PostGraduationPer,tblDs17JobRegistrations.Experience,tblDs17JobRegistrations.Salary,
tblDs17JobRegistrations.SkillSet,tblDs17JobRegistrations.PositionDesc,tblDs17JobRegistrations.Street,
tblDs17JobRegistrations.Country,tblDs17JobRegistrations.State,
tblDs17JobRegistrations.District,tblDs17JobRegistrations.PostalCode,DATE(tblDs17JobRegistrations.CreatedDate) AS CreatedDate,
tblDs17JobRegistrations.AttachmentLocation,tblDs17JobRegistrations.RandomKey,
tblDs17JobRegistrations.CollegeName,tblDs17JobRegistrations.OtherCollegeName,
tblDs17TechTalksRegistrations.Email AS TechTalkEmail, 
tblDs17MeanhackRegistrations.Email AS CitizenHackEmail,
tblDs17CulturalRegistrations.Email AS HungamaEmail
FROM tblDs17JobRegistrations
LEFT JOIN tblDs17TechTalksRegistrations ON tblDs17JobRegistrations.Email = tblDs17TechTalksRegistrations.Email 
LEFT JOIN tblDs17MeanhackRegistrations ON tblDs17JobRegistrations.Email = tblDs17MeanhackRegistrations.Email
LEFT JOIN tblDs17CulturalRegistrations ON tblDs17JobRegistrations.Email = tblDs17CulturalRegistrations.Email
 ORDER BY tblDs17JobRegistrations.Id";
                                        	}else {
                                        		$selectQuery = $searchQuery;
                                        	}
                                        
                                        	$stmt = $conn->prepare($selectQuery);
                                        	if($applyingFor!=""&&$searchQuery!=""){
                                        		$stmt->bindParam(':tempApplyingFor', $applyingFor);
                                        	}
                                        	if($attendeeType!=""&&$searchQuery!=""){
                                        		$stmt->bindParam(':tempAttendeeType', $attendeeType);
                                        	}
                                        	
                                        	$stmt->execute();
                                        	$stmt->setFetchMode(PDO::FETCH_ASSOC);
                                        	
                                        	
                                        	$tempCount=0;
                                        	while ($row = $stmt->fetch()) {
                                        		$sno = $sno + 1;
                                        		$tempCount = $tempCount + 1;
                                        		$Id=$row["Id"];
                                        		
                                        		$FirstName=$row["FirstName"];
                                        		$LastName=$row["LastName"];
                                        		$Email=$row["Email"];
                                        		$PhoneNumber=$row["PhoneNumber"];
                                        		$AltPhoneNumber=$row["AltPhoneNumber"];
                                        		
                                        		$Gender=$row["Gender"];
                                        		$Designation=$row["Designation"];
                                        		$AttendeeType=$row["AttendeeType"];
                                        		$ApplyingFor=$row["ApplyingFor"];
                                        		$Graduation=$row["Graduation"];
                                        		
                                        		$GraduationPer=$row["GraduationPer"];
                                        		$PostGraduation=$row["PostGraduation"];
                                        		$PostGraduationPer=$row["PostGraduationPer"];
                                        		$Experience=$row["Experience"];
                                        		$Salary=$row["Salary"];
                                        		
                                        		$SkillSet=$row["SkillSet"];
                                        		$PositionDesc=$row["PositionDesc"];
                                        		$Street=$row["Street"];
                                        		$Country=$row["Country"];
                                        		$State=$row["State"];
                                        		$District=$row["District"];
                                        		$PostalCode=$row["PostalCode"];
                                        		$CreatedDate=$row["CreatedDate"];  
                                        		
                                        		
                                        		$AttachmentLocation=$row["AttachmentLocation"];
                                        		$RandomKey=$row["RandomKey"];
                                        		
                                        		$CollegeName=$row["CollegeName"];
                                        		$OtherCollegeName=$row["OtherCollegeName"];
                                        		
                                        		$TechTalkEmail=$row["TechTalkEmail"];
                                        		$CitizenHackEmail=$row["CitizenHackEmail"];
                                        		$HungamaEmail=$row["HungamaEmail"];
                                        		
                                        		
                                        		if($tempCount>$pageSize){
                                        			$pageNo++;
                                        			$tempCount=1;
                                        		}
                                        		
                                        		$IsFileExisted = false;
                                        		if($AttachmentLocation!='')
                                        			if(file_exists($AttachmentLocation)){
                                        				$IsFileExisted = true;
                                        		}
                                        		
                                        		
                                        		?>
                                        		
                                        		 <tr id="tr<?=$sno?>">
                                        		 
                                             <td class="center"><?php echo $sno; ?></td>
                                             <td   onclick="showRegistraintsJobFairModal('<?= $TechTalkEmail?>','<?= $CitizenHackEmail?>','<?= $HungamaEmail?>','<?= $Email?>',<?= $Id?>);"><?php echo $FirstName.' '.$LastName; ?></td>
                                             <td   onclick="showRegistraintsJobFairModal('<?= $TechTalkEmail?>','<?= $CitizenHackEmail?>','<?= $HungamaEmail?>','<?= $Email?>',<?= $Id?>);"><?php echo $Email; ?></td>
                                             <td><?php echo $PhoneNumber; ?></td>
                                             <td><?php echo $ApplyingFor; ?></td>
                                             <?php if($IsFileExisted){ ?>
                                             <td><a href='download-job-fair-attachment.php?id=<?=$Id?>.&randomKey=<?=$RandomKey?>'>Download</a></td>
                                             <?php } else { ?>
                                             <td>-</td>
                                             <?php } ?>
                                             
                                             <td><?php echo $CreatedDate; ?></td>
                                          </tr>
                                        		
                                        		
                                        		
                                        		
                                        		<?php 
                                        		
                                        	}
                                        	
                                        }catch(Exception $exc){
                                        	
                                        	$exc->getMessage();
                                        	$resultMessage= $exc;
                                        	//header('Location: ../back-end-error.php?resultMessage='.$resultMessage);
                                        	// $conn->closeConnection(); // closing the connection
                                        	
                                        }
                                        
                                        
                                        ?>
                                        
                                        
                                        
                                        
                                       
                                        </tbody>
                                   </table>
                              </div> 
                         </div>
                    </div> 
                    </div>
                
           </div>
             <input type="hidden" id="frmApplyingFor" name="frmApplyingFor" value="<?=$applyingFor;?>"/>
             <input type="hidden" id="frmAttendeeType" name="frmAttendeeType" value="<?=$attendeeType;?>"/>
<!-- Vendor: Javascripts -->
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>




<script src="https://maps.google.com/maps/api/js?key=AIzaSyDrlCWSCEGTYat1yFIybvtjXe6v24wXY04" 
        async="" 
        type="text/javascript">
</script>

<!-- Our Website Javascripts -->
<script src="js/app.js"></script>
<script src="js/common.js"></script>


<script src="js/jobfairCallDetailsData.js?ver=2.5"></script>
<script type="text/javascript">
$(document).ready(function () {
    $('#reg_tab').DataTable();
$("#applyingFor").val($("#frmApplyingFor").val());
$("#attendeeType").val($("#frmAttendeeType").val());
    

});

function exportJobfair() {
	window.location="export-jobfair.php";
}
/*
$('#likelytocomeForm input[type=radio]').change(function() {       
    var seleted=this.value;
	if(seleted.trim()=='May Be' || seleted.trim()=='Yes'){
		$("#isAttending").show();
		
	}else{
		$("#isAttending").hide();

		var attendeeradios = document.getElementsByName('attendingAsOption');
		for (var i = 0, length = attendeeradios.length; i < length; i++)
		{
			attendeeradios[i].checked=false;
		}
		$('#typeOfStaying').val("");
		
	}
        
});
*/
</script>

</body>
</html>
