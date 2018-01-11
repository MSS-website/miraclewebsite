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
    <title>Digital Summit'17 | Admin </title>
     <?php include '../../config/Locations.php';
 include '../config/DS17Config.php';
 ?>
     <link rel="shortcut icon" href="<?= AMAZON_URL ?>/ds17/admin/images/favicon.ico" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   <link rel="stylesheet" href="css/bootstrap.min.css">
 <link rel='stylesheet prefetch'
	href=' https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    <!-- Our Website CSS Styles -->
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Data table start -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
    <!-- Data table end -->
   
     <?php 
    session_start();
    if (isset($_SESSION['SES_DS17_ADMIN_LOGINID']) && $_SESSION['SES_DS17_ADMIN_LOGINID'] != "") {
    	
    } else {
    	header('Location: admin-login.php');
    }
    
    
    
    $collegeName="";
    $technologyArea="";
    $searchQuery="";
    if (isset($_POST['btnSearchSubmit'])) {
    	// echo 'hii';
    	try {
    		// $conn->connectToDatabase();
    		$collegeName= isset($_POST["collegeName"]) ? $_POST["collegeName"] : '';
    		$technologyArea= isset($_POST["technologyArea"]) ? $_POST["technologyArea"] : '';
    		
    		$searchQuery= 'SELECT tblDs17MeanhackRegistrations.Id,tblDs17MeanhackRegistrations.FirstName,tblDs17MeanhackRegistrations.LastName,tblDs17MeanhackRegistrations.MobileNumber,tblDs17MeanhackRegistrations.AltMobileNumber,tblDs17MeanhackRegistrations.Email,tblDs17MeanhackRegistrations.CollegeName,
tblDs17MeanhackRegistrations.OtherCollegeName,tblDs17MeanhackRegistrations.Branch,tblDs17MeanhackRegistrations.YEAR,tblDs17MeanhackRegistrations.AboutHim,tblDs17MeanhackRegistrations.TechnologyArea,tblDs17MeanhackRegistrations.UseCaseArea,tblDs17MeanhackRegistrations.TeamMember1Name,
tblDs17MeanhackRegistrations.TeamMember1Branch,tblDs17MeanhackRegistrations.TeamMember1Year,tblDs17MeanhackRegistrations.TeamContact1Number,tblDs17MeanhackRegistrations.TeamMember1Email,tblDs17MeanhackRegistrations.TeamMember2Name,
tblDs17MeanhackRegistrations.TeamMember2Branch,TeamMember2Year,TeamContact2Number,TeamMember2Email,TeamMember3Name,
TeamMember3Branch,TeamMember3Year,TeamContact3Number,TeamMember3Email,TeamMember4Name,
TeamMember4Branch,TeamMember4Year,TeamContact4Number,TeamMember4Email,TechnicalExpertise,
ReasonForBest,tblDs17MeanhackRegistrations.Street,tblDs17MeanhackRegistrations.State,tblDs17MeanhackRegistrations.District,
tblDs17MeanhackRegistrations.PostalCode,DATE(tblDs17MeanhackRegistrations.CreatedDate) AS CreatedDate,tblDs17TechTalksRegistrations.Email AS TechTalkEmail,tblDs17CulturalRegistrations.Email AS HungamaEmail, tblDs17JobRegistrations.Email AS JobFairEmail
 FROM tblDs17MeanhackRegistrations 
LEFT JOIN tblDs17TechTalksRegistrations ON tblDs17MeanhackRegistrations.Email = tblDs17TechTalksRegistrations.Email 
LEFT JOIN tblDs17CulturalRegistrations ON tblDs17MeanhackRegistrations.Email = tblDs17CulturalRegistrations.Email
LEFT JOIN tblDs17JobRegistrations ON tblDs17MeanhackRegistrations.Email = tblDs17JobRegistrations.Email 

WHERE 1=1 ';
    		
    		if ($collegeName!= '') {
    			$searchQuery= $searchQuery. ' AND tblDs17MeanhackRegistrations.CollegeName =:tempCollegeName';
    		}
    		
    		if ($technologyArea!= '') {
    			$searchQuery= $searchQuery. ' AND tblDs17MeanhackRegistrations.TechnologyArea =:tempTechnologyArea';
    		}
    		
    		
    		$searchQuery= $searchQuery. ' ORDER BY tblDs17MeanhackRegistrations.Id';
    		
    	} catch (Exception $exc) {
    		
    		$exc->getMessage();
    		$resultMessage = '<font color=red size=2px>' . $exc . '</font>';
    		//  $conn->closeConnection(); // closing the connection
    		//    mysql_close();
    	}
    }
    
    
    ?>
    
<style>.panel-heading {
    padding: 27px 15px !important;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
}
.pagenum{
 float:right;
 padding-top: 28px;
}
#header-scroll {
    top: 96px !important;
}
.breadcrumbs {
    background: #f5f5f5 none repeat scroll 0 0;
    float: left;
    list-style: outside none none;
    margin: 23px 0 0;
    padding: 3px 8px !important;
    width: 100%;
}
.main-content {
        padding: 10px 60px 30px 250px;}
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
  <div role="tabpanel" class="tab-pane fade in active" id="profile">   <form class="auto-container" action="" method="post" id="msform" style="margin-bottom:20px">
                <div id="load" style="color: red; display: none;">Processing Please Wait...</div>
               <!-- fieldsets -->
               <fieldset id="basicDetailsFieldSet">
                  
                
                   
                <div class="col-sm-6" style="padding-left:0"> 
                     <input type="text" class="form-control" name="firstName" id="firstName" placeholder="First Name" onchange="techTalksFieldLengthValidator(this);" readonly="readonly"><br>
                </div>
                <div class="col-sm-6" style="padding-right:0"> 
                     <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Last Name" onchange="techTalksFieldLengthValidator(this);" readonly="readonly"><br>
                </div>
                  
                 <div class="col-sm-6" style="padding-left:0"> 
                     <input type="text" class="form-control" name="mobileNumber" id="mobileNumber" placeholder="Mobile Number" onchange="return formatPhone(this);" onblur="return validatenumber(this)" onkeypress="return isNumberKey(event)" readonly="readonly"><br>
                 </div>
                 <div class="col-sm-6" style="padding-right:0"> 
                     <input type="text" class="form-control" name="altMobileNumber" id="altMobileNumber" placeholder="Alternate Mobile Number" onchange="return formatPhone(this);" onblur="return validatenumber(this)" onkeypress="return isNumberKey(event)" readonly="readonly"><br>
               
                 </div>
                 <div class="col-sm-6" style="padding-left:0"> 
                  
                
                     <input type="text" class="form-control" name="email" id="email" placeholder="Email Address" onchange=" return checkEmail(this);" readonly="readonly">
                
             </div>
                  
              <div class="col-sm-6" style="padding-right:0"> 
 <input type="text" class="form-control" name="collegeName" id="collegeName" placeholder="your college" onchange=" return checkEmail(this);" readonly="readonly"><br>
                
                  </div>
                  
                   <div class="col-sm-12" style="padding-left:0;display: none;" id="otherCollegeDiv"> 
                  
                
                     <input type="text" class="form-control" name="otherCollegeName" id="otherCollegeName" placeholder="Other College Name"  readonly="readonly">
                <br>
             </div>
                  
              <div class="col-sm-6" style="padding-left:0"> 
                   <input type="text" class="form-control" id="branch" name="branch" placeholder="Your Branch" onchange=" return checkEmail(this);" readonly="readonly"><br>
                     
              </div>
              <div class="col-sm-6" style="padding-right:0">
                        <input type="text" class="form-control" name="year" id="year" placeholder="year" onchange=" return checkEmail(this);" readonly="readonly">
                        <br>
                     </div>
                      <div class="col-sm-12" style="padding:0">
                        <textarea placeholder="Comments " rows="3" class="form-control" id="aboutHim" name="aboutHim" readonly="readonly"></textarea>
                     <br></div>
                     
               <div class="col-sm-6" style="padding-left:0">
             <input type="text" class="form-control" name="technologyArea" id="technologyArea" placeholder="Technology Areas" readonly="readonly"><br>
               </div>
                <div class="col-sm-6" style="padding-right:0">
 <input type="text" class="form-control" name="useCaseArea" id="useCaseArea" placeholder="Use Case Area" readonly="readonly"><br>
               </div> 
                 <div id="teamMember1Div">
              	 <div class="col-sm-12" style="text-align:left;padding-left:0;">
                        <h5 class="heavy">Team Member 1</h5>
                     </div>
               	
               <div class="col-sm-6" style="padding-left:0">
               <input type="text" id="teamMember1Name" class="form-control" name="teamMember1Name" placeholder="Name"  readonly="readonly">
              <br>
               </div>
                 <div class="col-sm-6" style="padding-right:0">
                 <input type="text" id="teamMember1Branch" class="form-control" name="teamMember1Branch" placeholder="teamMember1Branch"  readonly="readonly">
                <br> </div>
                 <div class="col-sm-6" style="padding-left:0">
                 <input type="text" class="form-control" name="teamMember1Year" id="teamMember1Year" placeholder="year" readonly="readonly"><br>
                 </div>
                 <div class="col-sm-6" style="padding-right:0">
                 <input type="text" class="form-control" required="true" placeholder="Contact Number" id="teamContact1Number" name="teamContact1Number" readonly="readonly"><br>
                 </div>
                 <div class="col-sm-6" style="padding-left:0">
                 <input type="text" id="teamMember1Email" class="form-control" name="teamMember1Email" required="true" placeholder="Email Address" readonly="readonly">
                </div>
                </div>
                  <div id="teamMember2Div">
                <div class="col-sm-12" style="text-align:left;padding-left:0;">
                        <h5 class="heavy">Team Member 2</h5>
                     </div>
               	
               <div class="col-sm-6" style="padding-left:0">
               <input type="text" id="teamMember2Name" class="form-control" name="teamMember2Name" placeholder="Name"  readonly="readonly">
              <br>
               </div>
                 <div class="col-sm-6" style="padding-right:0">
                 <input type="text" id="teamMember2Branch" class="form-control" name="teamMember2Branch" placeholder="teamMember2Branch"  readonly="readonly">
                <br> </div>
                 <div class="col-sm-6" style="padding-left:0">
                 <input type="text" class="form-control" name="teamMember2Year" id="teamMember2Year" placeholder="year" readonly="readonly"><br>
                 </div>
                 <div class="col-sm-6" style="padding-right:0">
                 <input type="text"  class="form-control" required="true" placeholder="Contact Number" id="teamContact2Number" name="teamContact2Number" readonly="readonly"><br>
                 </div>
                 <div class="col-sm-6" style="padding-left:0">
                 <input type="text" id="teamMember2Email" class="form-control" name="teamMember2Email" required="true" placeholder="Email Address" readonly="readonly">
                </div>
                </div>
                  <div id="teamMember3Div">
                <div class="col-sm-12" style="text-align:left;padding-left:0;">
                        <h5 class="heavy">Team Member 3</h5>
                     </div>
               	
               <div class="col-sm-6" style="padding-left:0">
               <input type="text" id="teamMember3Name" class="form-control" name="teamMember3Name" placeholder="Name"  readonly="readonly">
              <br>
               </div>
                 <div class="col-sm-6" style="padding-right:0">
                 <input type="text" id="teamMember3Branch" class="form-control" name="teamMember3Branch" placeholder="teamMember3Branch"  readonly="readonly">
                <br> </div>
                 <div class="col-sm-6" style="padding-left:0">
                 <input type="text" class="form-control" name="teamMember3Year" id="teamMember3Year" placeholder="year" readonly="readonly"><br>
                 </div>
                 <div class="col-sm-6" style="padding-right:0">
                 <input type="text"  class="form-control" required="true" placeholder="Contact Number" id="teamContact3Number" name="teamContact3Number" readonly="readonly"><br>
                 </div>
                 <div class="col-sm-6" style="padding-left:0">
                 <input type="text" id="teamMember3Email" class="form-control" name="teamMember3Email" required="true" placeholder="Email Address" readonly="readonly">
                </div></div>
              <div id="teamMember4Div">  <div class="col-sm-12" style="text-align:left;padding-left:0;">
                        <h5 class="heavy">Team Member 4</h5>
                     </div>
               	
               <div class="col-sm-6" style="padding-left:0">
               <input type="text" id="teamMember4Name" class="form-control" name="teamMember4Name" placeholder="Name"  readonly="readonly">
              <br>
               </div>
                 <div class="col-sm-6" style="padding-right:0">
                 <input type="text" id="teamMember4Branch" class="form-control" name="teamMember4Branch" placeholder="teamMember4Branch"  readonly="readonly">
                <br> </div>
                 <div class="col-sm-6" style="padding-left:0">
                 <input type="text" class="form-control" name="teamMember4Year" id="teamMember4Year" placeholder="year" readonly="readonly"><br>
                 </div>
                 <div class="col-sm-6" style="padding-right:0">
                 <input type="text"  class="form-control" required="true" placeholder="Contact Number" id="teamContact4Number" name="teamContact4Number" readonly="readonly"><br>
                 </div>
                 <div class="col-sm-6" style="padding-left:0">
                 <input type="text" id="teamMember4Email" class="form-control" name="teamMember4Email" required="true" placeholder="Email Address" readonly="readonly">
                </div>
                </div>
                
                 <div class="col-sm-12" style="text-align:left;padding-left:0">
                        <h3 class="heavy">Technical Expertise</h3>
                     </div>
                     <div class="col-sm-12" style="padding-left:0">
                        <textarea class="form-control" placeholder="Why do you think your team can win MEANHack? Explain in detail, this will be used to determine your selection to participate." rows="3" id="technicalExpertise" name="technicalExpertise" readonly="readonly"></textarea>
                     </div>
                     <div class="col-sm-12" style="text-align:left;padding-left:0;">
                        <h3 class="heavy">Technology idea?</h3>
                     </div>
                     <div class="col-sm-12" style="padding-left:0">
                        <textarea class="form-control" placeholder="Explain to us what your idea is and what you would like to built at the Hackathon  " rows="3" id="reasonForBest" name="reasonForBest" readonly="readonly"></textarea><br>
                     </div>
                     <div class="col-sm-6" style="padding-left:0">  <input type="text" name="street" class="form-control" placeholder="Street" id="street" readonly="readonly"><br></div>
                     <div class="col-sm-6" style="padding-right:0">
                     <input type="text" class="form-control" name="state" id="state" placeholder="your state" readonly="readonly"><br>
                    
                  </div>
                  <div class="col-sm-6" style="padding-left:0">
                    <input type="text" class="form-control" name="district" id="district" placeholder="District" readonly="readonly"><br>
                    
                  </div>
                  <div class="col-sm-6" style="padding-right:0">  <input type="text" class="form-control" name="postalCode" id="postalCode"  placeholder="Postal Code" readonly="readonly"></div>
                 
 				
 					
 					 <!--  Collge Dropdown end -->
 					 
 				
                     
                  
                     
 					 
               
               </fieldset>
              
        
               <div class="alert alert-danger" id="alertMessageDiv" style="display: none;">
    
    <button type="button" class="close" onclick="closeAlertMessage()" aria-label="Close"><span aria-hidden="true">×</span></button>
    
    
    
  </div>
            </form></div>
 <div role="tabpanel" class="tab-pane fade" id="buzz">  
 
  
         <p>
         Name : <b><span id="studentNameSpan"></span></b><br>
       Registered To:&nbsp;
          <button type="button" class="btn btn-success" id="techtalksButton">Techtalks</button> &nbsp;&nbsp;
          <button type="button" class="btn btn-info" id="citizenhackButton">Citizen Hack</button>&nbsp;&nbsp;
          <button type="button" class="btn btn-warning" id="hungamaButton">Hungama</button> &nbsp;&nbsp;
          <button type="button" class="btn btn-danger" id="jobFairButton" >Jobfairs</button>
        <div class="row"  style="margin-top:20px;">
          <form id="likelytocome">
          <div id="loadComments" style="color: red; display: none;">Processing Please Wait...</div>
             <span id="resultMessageForupdate"></span>
          <input type="hidden" id="meanHackId" name="meanHackId" value="0">
             <div class="col-sm-4" style="margin-top: -1px;margin-bottom: -15px;">
                 <h5><b>Likely to come</b> </h5> &nbsp; &nbsp; </div>
   <div class="col-sm-8" style="margin-top: 5px;margin-left: -63px;">
      <label class="radio-inline">
      <input type="radio" name="optradio" value="1"> Yes
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" value="0"> No
    </label>
     <label class="radio-inline">
      <input type="radio" name="optradio" value="2"> May Be
    </label>
      <label class="radio-inline">
      <input type="radio" name="optradio" value="-1"> Not Reachable
    </label>
   </div> </form> </div>
   <div id="isAttending">
  <div class="row">
      <div class="col-sm-12">
                     <form>
                          <label><h5><b> Attending As</b> &nbsp;&nbsp;</h5></label>
                      <label class="radio-inline" style="margin-top: -3px;margin-left: 19px;">
      <input type="radio" name="attendeeradio" value="Individual"> Individual
    </label>
    <label class="radio-inline" style="margin-top: -3px;">
      <input type="radio" name="attendeeradio" value="Group"> Group &nbsp; &nbsp;&nbsp; &nbsp;
    </label></form></div></div>
       <div class="row">
           <div class="col-sm-12">
           <form>
     <label> <h5><b>Carrying Laptop</b> &nbsp; </h5></label>
       <label class="radio-inline" style="margin-top: -3px;margin-left: 2px;">
      <input type="radio" name="lapradio" value="Yes"> Yes
    </label>
      <label class="radio-inline" style="margin-top: -3px;">
      <input type="radio" name="lapradio" value="No"> No
    </label>
    </form> 
    </div>
                 </div>
   <div class="row" style="margin-top: 20px;margin-bottom: 22px;">

      
       <div class="col-sm-6">
          <select id="typeOfStaying" class="form-control" name="typeOfStaying" required="true">
                                                <option value=""> Type of Staying </option>
                                                 <option value="Hostel">Hostel</option>
                                                  <option value="Relatives">Relatives</option>
                                                    <option value="Travel Back">Travel Back</option>
                                            </select>  
       </div><br>
       </div>
       </div>
       <div>
         <div class="col-sm-12"  >
                        <label style="margin-left: -15px;">Select Gender</label>
        <label class="radio-inline"  >
      <input type="radio" name="gender" value="Male" > Male
    </label>
    <label class="radio-inline">
      <input type="radio" name="gender" value="Female" > Female
    </label>
   </div>
    
   </div>
  
 
  <div class="auto-container">
  <div class="row" style="margin-top: -10px;padding:0;">
      <div class="col-sm-12">
       <h5>Add Comments</h5>
      <textarea  class="form-control" cols="10" rows="5" id="callComments" name="callComments" onchange="fieldLengthValidator(this);"></textarea>
     </div>
     </div>
     </div>
     <br>
  
  <div class="row" style="margin-left:404px;">
<button type="button" id="btnMeanHackCallSubmit" class="btn btn-primary btn-sm" style="padding: 5px 34px !important; font-size:15px!important;"  onclick="updateMeanHackCallData();">Save</button>
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


<!--tabl modal end-->


<div class="main-content">
    <div class="panel-content">
        <div class="main-title-sec">
            <div class="row">
                <div class="col-md-3 column">
                    <div class="heading-profile">
                        <h2>Citizen Hack</h2>
                       
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
<form method="post" action="<?php $_PHP_SELF ?>" id="myForm" name="myForm">
 <div class="row">
               <div class="col-sm-3">
                    <select name="collegeName" id="searchCollegeName" class="form-control" onchange="collegeType(this);">
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
                <div class="col-sm-3">
                  <select class="form-control" name="technologyArea" id="searchTechnologyArea" >
                            <option value="">Technology Area</option>
                           <option value="Conversational Bot">Conversational Bot</option>
                           <option value="Connected Solution">Connected Solution</option>
                           <option value="Mobile Applications">Mobile Applications</option>
                           <option value="Machine Learning">Machine Learning</option>
                        </select>
                </div> 
                 <div class="col-sm-3">
                       <button type="submit" id="btnSearchSubmit" name="btnSearchSubmit" class="btn btn-primary col-sm-12">Search</button>
                 </div> 
                   <div class="col-sm-3">
                       <button type="button" onclick="exportcitizenHack();" class="btn btn-success col-sm-12"> <i class="fa fa-download"></i>&nbsp;&nbsp;&nbsp;Export</button>
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
                                            
                                             <th class="header"><span>S:No</span></th>
                                             <th class="header"><span>Name</span></th>
                                             <th class="header"><span>E-mail</span></th>
                                             <th class="header"><span>District</span></th>
                                             <th class="header"><span>Mobile number</span></th>
                                             <th class="header"><span>CollegeName</span></th>
                                             <th class="header"><span>Technology Area</span></th>
                                             <th class="header"><span>Registered&nbsp;Date</span></th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                        
                                         <?php 
                                      
                                        $sno = 0;
                                    
                                        try {
                                        	
                                        	
                                        	if($searchQuery==""){
                                        	$selectQuery = "SELECT tblDs17MeanhackRegistrations.Id,tblDs17MeanhackRegistrations.FirstName,tblDs17MeanhackRegistrations.LastName,tblDs17MeanhackRegistrations.MobileNumber,tblDs17MeanhackRegistrations.AltMobileNumber,tblDs17MeanhackRegistrations.Email,tblDs17MeanhackRegistrations.CollegeName,
tblDs17MeanhackRegistrations.OtherCollegeName,tblDs17MeanhackRegistrations.Branch,tblDs17MeanhackRegistrations.YEAR,tblDs17MeanhackRegistrations.AboutHim,tblDs17MeanhackRegistrations.TechnologyArea,tblDs17MeanhackRegistrations.UseCaseArea,tblDs17MeanhackRegistrations.TeamMember1Name,
tblDs17MeanhackRegistrations.TeamMember1Branch,tblDs17MeanhackRegistrations.TeamMember1Year,tblDs17MeanhackRegistrations.TeamContact1Number,tblDs17MeanhackRegistrations.TeamMember1Email,tblDs17MeanhackRegistrations.TeamMember2Name,
tblDs17MeanhackRegistrations.TeamMember2Branch,TeamMember2Year,TeamContact2Number,TeamMember2Email,TeamMember3Name,
TeamMember3Branch,TeamMember3Year,TeamContact3Number,TeamMember3Email,TeamMember4Name,
TeamMember4Branch,TeamMember4Year,TeamContact4Number,TeamMember4Email,TechnicalExpertise,
ReasonForBest,tblDs17MeanhackRegistrations.Street,tblDs17MeanhackRegistrations.State,tblDs17MeanhackRegistrations.District,
tblDs17MeanhackRegistrations.PostalCode,DATE(tblDs17MeanhackRegistrations.CreatedDate) AS CreatedDate,tblDs17TechTalksRegistrations.Email AS TechTalkEmail,tblDs17CulturalRegistrations.Email AS HungamaEmail, tblDs17JobRegistrations.Email AS JobFairEmail
 FROM tblDs17MeanhackRegistrations 
LEFT JOIN tblDs17TechTalksRegistrations ON tblDs17MeanhackRegistrations.Email = tblDs17TechTalksRegistrations.Email 
LEFT JOIN tblDs17CulturalRegistrations ON tblDs17MeanhackRegistrations.Email = tblDs17CulturalRegistrations.Email
LEFT JOIN tblDs17JobRegistrations ON tblDs17MeanhackRegistrations.Email = tblDs17JobRegistrations.Email 

ORDER BY tblDs17MeanhackRegistrations.Id";
                                        	}else {
                                        		$selectQuery = $searchQuery;
                                        	}
                                        	
                                        	$stmt = $conn->prepare($selectQuery);
                                        	if($collegeName!=""&&$searchQuery!=""){
                                        		$stmt->bindParam(':tempCollegeName', $collegeName);
                                        	}
                                        	if($technologyArea!=""&&$searchQuery!=""){
                                        		$stmt->bindParam(':tempTechnologyArea', $technologyArea);
                                        	}
                                        	
                                        	$stmt->execute();
                                        	$stmt->setFetchMode(PDO::FETCH_ASSOC);
                                        	
                                        	
                                        	$tempCount=0;
                                        	while ($row = $stmt->fetch()) {
                                        		$sno = $sno + 1;
                                        		$tempCount = $tempCount + 1;
                                        		$MeanhackRegistrationId=$row["Id"];
                                        		$FirstName=$row["FirstName"];
                                        		$LastName=$row["LastName"];
                                        		$MobileNumber=$row["MobileNumber"];
                                        		$AltMobileNumber=$row["AltMobileNumber"];
                                        		$Email=$row["Email"];
                                        		$CollegeName=$row["CollegeName"];
                                        		$OtherCollegeName=$row["OtherCollegeName"];
                                        		
                                        		$Branch=$row["Branch"];
                                        		$YEAR=$row["YEAR"];
                                        		$AboutHim=$row["AboutHim"];
                                        		$TechnologyArea=$row["TechnologyArea"];
                                        		$UseCaseArea=$row["UseCaseArea"];
                                        		
                                        		
                                        		
                                        		$Street=$row["Street"];
                                        		
                                        		$State=$row["State"];
                                        		$District=$row["District"];
                                        		$PostalCode=$row["PostalCode"];
                                        		$CreatedDate=$row["CreatedDate"];
                                        		
                                        		$TechTalkEmail=$row["TechTalkEmail"];
                                        		$HungamaEmail=$row["HungamaEmail"];
                                        		$JobFairEmail=  $row["JobFairEmail"];
                                        		
                                        		if($tempCount>$pageSize){
                                        			$pageNo++;
                                        			$tempCount=1;
                                        		}
                                        		
                                        		?>
                                        		
                                        		 <tr id="tr<?=$sno?>">
                                        		 
                                             <td class="center"><?php echo $sno; ?></td>
                                             <td  onclick="showRegistraintsMeanHackModal('<?= $TechTalkEmail?>','<?= $Email?>','<?= $HungamaEmail?>','<?= $JobFairEmail?>',<?= $MeanhackRegistrationId?>);"><?php echo $FirstName.' '.$LastName; ?></td>
                                             <td  onclick="showRegistraintsMeanHackModal('<?= $TechTalkEmail?>','<?= $Email?>','<?= $HungamaEmail?>','<?= $JobFairEmail?>',<?= $MeanhackRegistrationId?>);"><?php echo $Email; ?></td>
                                             <td><?php echo $District; ?></td>
                                             <td><?php echo $MobileNumber; ?></td>
                                             <td><?php echo $CollegeName; ?></td>
                                             <td><?php echo $TechnologyArea; ?></td>
                                             
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
                                        
                                        
                                        <!--   <tr>
                                             <td class="center">1</td>
                                             <td  data-toggle="modal" data-target="#editModal">Chanakya Lokam</td>
                                             <td  data-toggle="modal" data-target="#editModal">clokam@gmail.com</td>
                                             <td>1231231231</td>
                                             <td>GIET</td>
                                             <td>IoT</td>
                                             
                                          </tr>
                                          <tr>
                                             <td class="center">2</td>
                                             <td  data-toggle="modal" data-target="#editModal">Siva Kusampudi</td>
                                             <td  data-toggle="modal" data-target="#editModal">clokam@gmail.com</td>
                                             <td>1231231231</td>
                                             <td>Miracle Education Institution</td>
                                             <td>IoT</td>
                                             
                                          </tr>
                                          <tr>
                                             <td class="center">3</td>
                                             <td>Deepika Rangoori</td>
                                             <td>clokam@gmail.com</td>
                                             <td>1231231231</td>
                                              <td>KIET</td>
                                             <td>Cloud Technology</td>
                                          </tr>
                                          <tr>
                                             <td class="center">4</td>
                                             <td>Srinivas Patnala</td>
                                             <td>clokam@gmail.com</td>
                                             <td>1231231231</td>
                                              <td>Miracle Education Society</td>
                                             <td>IoT</td>
                                          </tr>
                                          <tr>
                                             <td class="center">5</td>
                                             <td>Shoba Lekkala</td>
                                             <td>clokam@gmail.com</td>
                                             <td>1231231231</td>
                                            <td>KIET</td>
                                             <td>Cloud Technology</td>
                                          </tr>
                                          <tr>
                                             <td class="center">6</td>
                                             <td>Chanakya Lokam</td>
                                             <td>clokam@gmail.com</td>
                                             <td>1231231231</td>
                                             <td>KIET</td>
                                             <td>Cloud Technology</td>
                                          </tr> -->
                                        </tbody>
                                   </table>
                              </div> 
                         </div>
                    </div> 
                    </div>
                
           </div>
           
            <input type="hidden" id="frmCollegeName" name="frmCollegeName" value="<?=$collegeName;?>"/>
             <input type="hidden" id="frmTechnologyArea" name="frmTechnologyArea" value="<?=$technologyArea;?>"/>
             
             
               <script type="text/javascript">
$(document).ready(function () {
    $('#reg_tab').DataTable();
//$("#attendeeType").val($("#frmAttendeeType").val());
//$("#primaryIntrest").val($("#frmPrimaryIntrest").val());
    

});

function exportTechTalks() {
	window.location="export-citizen-hack.php";
}

</script>
<!--  Data tables start -->
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>

<!--  Data tables end -->
<script type="text/javascript">
$(document).ready(function () {
    $('#reg_tab').DataTable();
$("#searchCollegeName").val($("#frmCollegeName").val());
$("#searchTechnologyArea").val($("#frmTechnologyArea").val());
    

});

function exportcitizenHack() {
	window.location="export-citizen-hack.php";
}


$('#likelytocome input[type=radio]').change(function() {       
    var seleted=this.value;
    if(seleted==1 || seleted==2){
		$("#isAttending").show();
		
	}else{
		$("#isAttending").hide();

		var attendeeradios = document.getElementsByName('attendeeradio');
		for (var i = 0, length = attendeeradios.length; i < length; i++)
		{
			attendeeradios[i].checked=false;
		}
		var lapradios = document.getElementsByName('lapradio');
		for (var i = 0, length = lapradios.length; i < length; i++)
		{
			lapradios[i].checked=false;
		}

		$('#typeOfStaying').val("");
		
	}
        
});


</script>


<!-- Vendor: Javascripts -->


<script src="https://maps.google.com/maps/api/js?key=AIzaSyDrlCWSCEGTYat1yFIybvtjXe6v24wXY04" 
        async="" 
        type="text/javascript">
</script>

<!-- Our Website Javascripts -->
<script src="js/app.js"></script>
<script src="js/common.js"></script>

<script src="js/meanHackcallDetailsData.js?ver=1.8"></script>
</body>
</html>