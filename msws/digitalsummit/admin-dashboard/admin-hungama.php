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
    
    
    
    $collegeName="";
    $performanceType="";
    $searchQuery="";
    if (isset($_POST['btnSearchSubmit'])) {
    	// echo 'hii';
    	try {
    		// $conn->connectToDatabase();
    		$collegeName= isset($_POST["collegeName"]) ? $_POST["collegeName"] : '';
    		$performanceType= isset($_POST["performanceType"]) ? $_POST["performanceType"] : '';
    		
    		$searchQuery= 'SELECT tblDs17CulturalRegistrations.id,tblDs17CulturalRegistrations.FirstName,tblDs17CulturalRegistrations.LastName,tblDs17CulturalRegistrations.Email,tblDs17CulturalRegistrations.MobileNumber,tblDs17CulturalRegistrations.AltMobileNumber,tblDs17CulturalRegistrations.CollegeName,
tblDs17CulturalRegistrations.OtherCollegeName,tblDs17CulturalRegistrations.Branch,tblDs17CulturalRegistrations.YEAR,CompetitionName,CompetitionType,LeaderName,
LeaderEmail,LeaderPhoneNumber,TeamSize,TeamMemberNames,AuditionLink,tblDs17CulturalRegistrations.Comments,
tblDs17CulturalRegistrations.Street,tblDs17CulturalRegistrations.Country,tblDs17CulturalRegistrations.State,
tblDs17CulturalRegistrations.District,tblDs17CulturalRegistrations.PostalCode,
DATE(tblDs17CulturalRegistrations.CreatedDate) AS CreatedDate,tblDs17TechTalksRegistrations.Email AS TechTalkEmail, tblDs17MeanhackRegistrations.Email AS CitizenHackEmail, tblDs17JobRegistrations.Email AS JobFairEmail
FROM tblDs17CulturalRegistrations 
LEFT JOIN tblDs17TechTalksRegistrations ON tblDs17CulturalRegistrations.Email = tblDs17TechTalksRegistrations.Email 
LEFT JOIN tblDs17MeanhackRegistrations ON tblDs17CulturalRegistrations.Email = tblDs17MeanhackRegistrations.Email 
LEFT JOIN tblDs17JobRegistrations ON tblDs17CulturalRegistrations.Email = tblDs17JobRegistrations.Email
 WHERE 1=1 ';
    		
    		if ($collegeName!= '') {
    			$searchQuery= $searchQuery. ' AND tblDs17CulturalRegistrations.CollegeName =:tempCollegeName';
    			//$searchQuery= $searchQuery. ' AND CollegeName='.$collegeName;
    		}
    		
    		if ($performanceType!= '') {
    			$searchQuery= $searchQuery. ' AND tblDs17CulturalRegistrations.CompetitionName=:tempCompetitionName';
    			//$searchQuery= $searchQuery. ' AND CompetitionName='.$competitionName;
    		}
    		
    		
    		$searchQuery= $searchQuery. ' ORDER BY tblDs17CulturalRegistrations.Id';
    		
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
<!--tabl modal-->
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        
     <div class="modal-body">
      
      <ul class="nav nav-tabs" role="tablist">
  <li  class="active">
    <a href="#profile" role="tab" data-toggle="tab"><strong>Personal Details</strong></a>
  </li>
  <li>
    <a href="#buzz" role="tab" data-toggle="tab"><strong>Comments</strong></a>
    
  </li>
  <button type="button" class="close" data-dismiss="modal">&times;</button>
</ul>
<div class="tab-content">
  <div role="tabpanel" class="tab-pane fade in active" id="profile">   <form class="auto-container" action="" method="post" id="msform" style="margin-bottom:20px">
                <div id="load" style="color: red; display: none;">Processing Please Wait...</div>
               <!-- fieldsets -->
               <fieldset id="basicDetailsFieldSet">
                  
                
                   
                <div class="col-sm-6" style="padding-left:0"> 
                     <input type="text" class="form-control" name="firstName" id="firstName" placeholder="First Name" readonly="readonly"><br>
                </div>
                <div class="col-sm-6" style="padding-right:0"> 
                     <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Last Name" readonly="readonly"><br>
                </div>
                  
                 <div class="col-sm-6" style="padding-left:0"> 
                     <input type="text" class="form-control" name="mobileNumber" id="mobileNumber" placeholder="Mobile Number" readonly="readonly"><br>
                 </div>
                 <div class="col-sm-6" style="padding-right:0"> 
                     <input type="text" class="form-control" name="altMobileNumber" id="altMobileNumber" placeholder="Alternate Mobile Number" readonly="readonly"><br>
               
                 </div>
                 <div class="col-sm-6" style="padding-left:0"> 
                  
                
                     <input type="text" class="form-control" name="email" id="email" placeholder="Email Address" readonly="readonly">
                
             </div>
                  
              <div class="col-sm-6" style="padding-right:0"> 
 <input type="text" class="form-control" name="collegeName" id="collegeName" placeholder="Your College" readonly="readonly"><br>
                
                  </div>
                    <div class="col-sm-12" style="padding-left:0;display: none;" id="otherCollegeDiv"> 
                  
                
                     <input type="text" class="form-control" name="otherCollegeName" id="otherCollegeName" placeholder="Other College Name"  readonly="readonly">
                <br>
             </div>
              <div class="col-sm-6" style="padding-left:0"> 
                   <input type="text" class="form-control" placeholder="Branch" id="branch" name="branch" readonly="readonly"><br>
                     
              </div>
              <div class="col-sm-6" style="padding-right:0">
                        <input type="text" class="form-control" name="year" id="year" placeholder="Year" readonly="readonly">
                        <br>
                     </div>
                      <div class="col-sm-6" style="padding-left:0"> 
                   <input type="text" class="form-control" placeholder="Gender" id="gender" name="gender" readonly="readonly"><br>
                     
              </div>
             <div class="col-sm-12" style="text-align:left;padding-left:0">
                        <h3 class="heavy">What is your Hungamma?</h3>
                     </div>
                       <div class="col-sm-6" style="padding-left:0"> 
                   <input type="text" class="form-control" placeholder="Select Performance" id="hungammaPerformance" name="hungammaPerformance" readonly="readonly"><br>
                     
              </div> 
               <div class="col-sm-6" style="padding-right:0"> 
                   <input type="text" class="form-control" placeholder="Select Type" id="performanceType" name="performanceType" readonly="readonly"><br>
                     
              </div> 
              <div id="teamDetailsDiv">
              <div class="col-sm-6" style="padding-left:0"> 
                   <input type="text" class="form-control" placeholder="Leader Name" id="leaderName" name="leaderName" readonly="readonly"><br>
                     
              </div> 
               <div class="col-sm-6" style="padding-right:0"> 
                   <input type="text" class="form-control" placeholder="Leader Email" id="leaderEmail" name="leaderEmail" readonly="readonly"><br>
                     
              </div> 
              <div class="col-sm-6" style="padding-left:0"> 
                   <input type="text" class="form-control" placeholder="Leader PhoneNumber" id="leaderPhoneNumber" name="leaderPhoneNumber" readonly="readonly"><br>
                     
              </div> 
               <div class="col-sm-6" style="padding-right:0"> 
                   <input type="text" class="form-control" placeholder="Team Size" id="teamSize" name="teamSize" readonly="readonly"><br>
                     
              </div> 
               <div class="col-sm-12" style="padding:0"> 
                   <input type="text" class="form-control" placeholder="TeamMember Names" id="teamMemberNames" name="teamMemberNames" readonly="readonly"><br>
                     
              </div> 
              </div>
                 <div class="col-sm-12" style="padding:0"> 
                   <input type="text" class="form-control" placeholder="Audition link" id="auditionLink" name="auditionLink" readonly="readonly"><br>
                     
              </div> 
               
                    
                  <div class="col-sm-6" style="padding-left:0">  <input type="text" name="street" id="street" class="form-control" placeholder="Street" readonly="readonly"><br></div>
                     <div class="col-sm-6" style="padding-right:0">
                     <input type="text" class="form-control" name="state" id="state" placeholder="your state" readonly="readonly"><br>
                    
                  </div>
                  <div class="col-sm-6" style="padding-left:0">
                    <input type="text" class="form-control" name="district" id="district" placeholder="District" readonly="readonly"><br>
                    
                  </div>
                  <div class="col-sm-6" style="padding-right:0">  <input type="text" class="form-control" id="postalCode" name="postalCode" placeholder="Postal Code" readonly="readonly"></div>
                 <div class="col-sm-12" style="padding:0">
                        <textarea placeholder="Comments " rows="3" class="form-control" id="aboutHim" name="aboutHim" readonly="readonly"></textarea>
                     </div>
               </fieldset>
            </form></div>
  <div role="tabpanel" class="tab-pane fade" id="buzz">  
  <b>Name : </b><span id="nameSpan"></span><br><br>
         <p>
         Registered to :  <button type="button" class="btn btn-success" id="techtalksButton">Techtalks</button> &nbsp;&nbsp;
          <button type="button" class="btn btn-info" id="citizenhackButton">Citizen Hack</button>&nbsp;&nbsp;
          <button type="button" class="btn btn-warning" id="hungamaButton">Hungama</button> &nbsp;&nbsp;
          <button type="button" class="btn btn-danger" id="jobFairButton" >Jobfairs</button>
        <div class="row"  style="margin-top:20px;">
          <form id="likelytocomeForm">
          <div id="loadComments" style="color: red; display: none;">Processing Please Wait...</div>
             <span id="resultMessageForupdate"></span>
          <input type="hidden" id="hangamaId" name="hangamaId" value="0">
             <div class="col-sm-4" style="margin-top: -1px;margin-bottom: -15px;">
                 <h5><b>Likely to come</b> </h5> &nbsp; &nbsp; </div>
   <div class="col-sm-8" style="margin-top: 5px;margin-left: -63px;">
      <label class="radio-inline">
      <input type="radio" name="likelytoComeOption" value="Yes"> Yes
    </label>
    <label class="radio-inline">
      <input type="radio" name="likelytoComeOption" value="No"> No
    </label>
     <label class="radio-inline">
      <input type="radio" name="likelytoComeOption" value="May Be"> May Be
    </label>
      <label class="radio-inline">
      <input type="radio" name="likelytoComeOption" value="Not Reachable"> Not Reachable
    </label>
   </div> </form> </div>
   <div id="isAttending">
   <div class="row">
      <div class="col-sm-12">
                     <form>
                          <label><h5> <b>Attending As</b> &nbsp;&nbsp;</h5></label>
                      <label class="radio-inline" style="margin-top: -3px;margin-left: 19px;">
      <input type="radio" name="attendingAsOption"  value="Individual"> Individual
    </label>
    <label class="radio-inline" style="margin-top: -3px;">
      <input type="radio" name="attendingAsOption" value="Group"> Group &nbsp; &nbsp;&nbsp; &nbsp;
    </label></form></div></div>
       <div class="row">
           <div class="col-sm-12">
          
    </div>
                 </div>
   <div class="row" style="margin-top: 20px;margin-bottom: 22px;">
        <div class="col-sm-4">
          <select id="typeOfStaying" class="form-control" name="typeOfStaying" required="true">
                                                <option value=""> Type of Staying </option>
                                                 <option value="Hostel">Hostel</option>
                                                  <option value="Relatives">Relatives</option>
                                                    <option value="Travel Back">Travel Back</option>
                                            </select>  
       </div>
   </div>
   </div>
          
 
 
  <div class="auto-container">
  <div class="row" style="margin-top: -10px;padding:0;">
      <div class="col-sm-12">
       <h5><b>Add Comments</b></h5>
      <textarea  class="form-control" cols="10" rows="5" id="callComments" name="callComments" onchange="fieldLengthValidator(this);"></textarea>
     </div>
     </div>
     </div>
     <br>
  
  <div class="row" style="margin-left:435px;">
<button type="button" id="btnHangamaCallSubmit" class="btn btn-primary btn-sm" style="padding: 5px 24px !important; font-size:15px!important;"  onclick="updateHangamaCallData();">Save</button>
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
                        <h2> Hungama </h2>
                     
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
               
               <select name="collegeName" id="searchCollegeName" class="form-control">
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
                
                     <select id="searchPerformanceType" class="form-control" name="performanceType">
                           <option value="" selected="selected">Select Performance</option>
                           <option value="Singing">Singing</option>
                           
                           <option value="Dancing">Dancing</option>
                           
                           <option value="Instrumental">Instrumental</option>
                           <option value="Mimicry">Mimicry</option>
                        </select> 
                     
                </div> 
                 <div class="col-sm-3">
                      <button type="submit" id="btnSearchSubmit" name="btnSearchSubmit" class="btn btn-primary col-sm-12">Search</button>
                 </div> 
                   <div class="col-sm-3">
                   
                     <button type="button" onclick="exportHungama();" class="btn btn-success col-sm-12"> <i class="fa fa-download"></i>&nbsp;&nbsp;&nbsp;Export</button>
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
                                             <th ><span>Mobile number</span></th>
                                             <th ><span>College Name</span></th>
                                             <th ><span>Competition Name</span></th>
                                             <th ><span>Registered Date</span></th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                        
                                        <?php 
                                        $pageNo=1;
                                        $sno = 0;
                                        $pageSize=10;
                                        try {
                                        	
                                        	
                                        	if($searchQuery==""){
                                        	$selectQuery = "SELECT tblDs17CulturalRegistrations.id,tblDs17CulturalRegistrations.FirstName,tblDs17CulturalRegistrations.LastName,tblDs17CulturalRegistrations.Email,tblDs17CulturalRegistrations.MobileNumber,tblDs17CulturalRegistrations.AltMobileNumber,tblDs17CulturalRegistrations.CollegeName,
tblDs17CulturalRegistrations.OtherCollegeName,tblDs17CulturalRegistrations.Branch,tblDs17CulturalRegistrations.YEAR,CompetitionName,CompetitionType,LeaderName,
LeaderEmail,LeaderPhoneNumber,TeamSize,TeamMemberNames,AuditionLink,tblDs17CulturalRegistrations.Comments,
tblDs17CulturalRegistrations.Street,tblDs17CulturalRegistrations.Country,tblDs17CulturalRegistrations.State,
tblDs17CulturalRegistrations.District,tblDs17CulturalRegistrations.PostalCode,
DATE(tblDs17CulturalRegistrations.CreatedDate) AS CreatedDate,tblDs17TechTalksRegistrations.Email AS TechTalkEmail, tblDs17MeanhackRegistrations.Email AS CitizenHackEmail, tblDs17JobRegistrations.Email AS JobFairEmail
FROM tblDs17CulturalRegistrations 
LEFT JOIN tblDs17TechTalksRegistrations ON tblDs17CulturalRegistrations.Email = tblDs17TechTalksRegistrations.Email 
LEFT JOIN tblDs17MeanhackRegistrations ON tblDs17CulturalRegistrations.Email = tblDs17MeanhackRegistrations.Email 
LEFT JOIN tblDs17JobRegistrations ON tblDs17CulturalRegistrations.Email = tblDs17JobRegistrations.Email
ORDER BY tblDs17CulturalRegistrations.id";
                                        	}else {
                                        		$selectQuery = $searchQuery;
                                        	}
                                        
                                        	$stmt = $conn->prepare($selectQuery);
                                        	if($collegeName!=""&&$searchQuery!=""){
                                        		$stmt->bindParam(':tempCollegeName', $collegeName);
                                        	}
                                        	if($performanceType!=""&&$searchQuery!=""){
                                        		$stmt->bindParam(':tempCompetitionName', $performanceType);
                                        	}
                                        	
                                        	$stmt->execute();
                                        	$stmt->setFetchMode(PDO::FETCH_ASSOC);
                                        	
                                        	
                                        	$tempCount=0;
                                        	while ($row = $stmt->fetch()) {
                                        		$sno = $sno + 1;
                                        		$tempCount = $tempCount + 1;
                                        		$Id=$row["id"];
                                        		
                                        		$FirstName=$row["FirstName"];
                                        		$LastName=$row["LastName"];
                                        		$Email=$row["Email"];
                                        		$MobileNumber=$row["MobileNumber"];
                                        		$AltMobileNumber=$row["AltMobileNumber"];
                                        		
                                        		$CollegeName=$row["CollegeName"];
                                        		$OtherCollegeName=$row["OtherCollegeName"];
                                        		$Branch=$row["Branch"];
                                        		$YEAR=$row["YEAR"];
                                        		$CompetitionName=$row["CompetitionName"];
                                        		$CompetitionType=$row["CompetitionType"];
                                        		
                                        		$LeaderName=$row["LeaderName"];
                                        		$LeaderEmail=$row["LeaderEmail"];
                                        		$LeaderPhoneNumber=$row["LeaderPhoneNumber"];
                                        		$TeamSize=$row["TeamSize"];
                                        		$TeamMemberNames=$row["TeamMemberNames"];
                                        		$AuditionLink=$row["AuditionLink"];
                                        		$Comments=$row["Comments"];
                                        		
                                        		$Street=$row["Street"];
                                        		$Country=$row["Country"];
                                        		$State=$row["State"];
                                        		$District=$row["District"];
                                        		$PostalCode=$row["PostalCode"];
                                        		$CreatedDate=$row["CreatedDate"];
                                        		
                                        		$TechTalkEmail=$row["TechTalkEmail"];
                                        		$CitizenHackEmail=$row["CitizenHackEmail"];
                                        		$JobFairEmail=  $row["JobFairEmail"];
                                        		
                                        		if($tempCount>$pageSize){
                                        			$pageNo++;
                                        			$tempCount=1;
                                        		}
                                        		
                                        		?>
                                        		
                                        		 <tr id="tr<?=$sno?>">
                                        		 
                                             <td class="center"><?php echo $sno; ?></td>
                                             <td   onclick="showRegistraintsHangamaModal('<?= $TechTalkEmail?>','<?= $CitizenHackEmail?>','<?= $Email?>','<?= $JobFairEmail?>',<?= $Id?>);"><?php echo $FirstName.' '.$LastName; ?></td>
                                             <td   onclick="showRegistraintsHangamaModal('<?= $TechTalkEmail?>','<?= $CitizenHackEmail?>','<?= $Email?>','<?= $JobFairEmail?>',<?= $Id?>);"><?php echo $Email; ?></td>
                                             <td><?php echo $MobileNumber; ?></td>
                                             <td><?php echo $CollegeName; ?></td>
                                             <td><?php echo $CompetitionName; ?></td>
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
                                        
                                        
                                        
                                        
                                        <!-- 
                                          <tr>
                                             <td class="center">1</td>
                                             <td  data-toggle="modal" data-target="#editModal">Chanakya Lokam</td>
                                             <td  data-toggle="modal" data-target="#editModal">clokam@gmail.com</td>
                                             <td>1231231231</td>
                                             <td>10-08-2017</td>
                                          </tr>
                                          <tr>
                                             <td class="center">2</td>
                                             <td  data-toggle="modal" data-target="#editModal">Siva Kusampudi</td>
                                             <td  data-toggle="modal" data-target="#editModal">clokam@gmail.com</td>
                                             <td>1231231231</td>
                                             <td>10-08-2017</td>
                                          </tr>
                                          <tr>
                                             <td class="center">3</td>
                                             <td>Deepika Rangoori</td>
                                             <td>clokam@gmail.com</td>
                                             <td>1231231231</td>
                                             <td>10-08-2017</td>
                                          </tr>
                                          <tr>
                                             <td class="center">4</td>
                                             <td>Srinivas Patnala</td>
                                             <td>clokam@gmail.com</td>
                                             <td>1231231231</td>
                                             <td>10-08-2017</td>
                                          </tr>
                                          <tr>
                                             <td class="center">5</td>
                                             <td>Shoba Lekkala</td>
                                             <td>clokam@gmail.com</td>
                                             <td>1231231231</td>
                                             <td>10-08-2017</td>
                                          </tr>
                                          <tr>
                                             <td class="center">6</td>
                                             <td>Chanakya Lokam</td>
                                             <td>clokam@gmail.com</td>
                                             <td>1231231231</td>
                                             <td>10-08-2017</td>
                                          </tr> -->
                                        </tbody>
                                   </table>
                              </div> 
                         </div>
                    </div> 
                    </div>
                
           </div>
             <input type="hidden" id="frmCollegeName" name="frmCollegeName" value="<?=$collegeName;?>"/>
             <input type="hidden" id="frmPerformanceType" name="frmPerformanceType" value="<?=$performanceType;?>"/>
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


<script src="js/hangamaCallDetailsData.js?ver=1.4"></script>
<script type="text/javascript">
$(document).ready(function () {
    $('#reg_tab').DataTable();
$("#searchCollegeName").val($("#frmCollegeName").val());
$("#searchPerformanceType").val($("#frmPerformanceType").val());
    

});

function exportHungama() {
	window.location="export-hungama.php";
}
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

</script>

</body>
</html>
