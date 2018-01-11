<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="description">
        <meta content="" name="author">
        <title>
            Apply Job | Miracle
        </title>
          <?php include '../config/Locations.php';?>
      
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/font-awesome.min.css" rel="stylesheet"> 
        <link href="../css/main.css" rel="stylesheet">
         
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link href="../css/default.css" rel="stylesheet" type="text/css">
        <link href="../css/component.css" rel="stylesheet" type="text/css">
        <script src="../js/modernizr.custom.js"></script>
        <script src="../js/fileinput.js"></script>
        <script src="../js/custom.js" type="text/javascript"></script>
        <script src="../js/Validation.js" type="text/javascript"></script><!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
         <link href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css" rel="stylesheet">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script> 
        <link href="/resources/demos/style.css" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="/images/favicon.ico" rel="shortcut icon">
        <link rel="script">
   <style>
    .modal-footer{
        margin-bottom: 20px;
    }
</style>
       <!-- modal start-->
       <?php 
        include '../config/general.php';
        //require '../config/DbController.php';
         require '../config/ConnectionProvider.php';
          session_start();
        
         function random_string($length) {
    $key = '';
    $keys = array_merge(range(0, 9), range('a', 'z'));

    for ($i = 0; $i < $length; $i++) {
        $key .= $keys[array_rand($keys)];
    }

    return $key;
}
        
//$conn = new DbController();
       
        $resultMessage = '';
        $rJobPosition = '';
        $rJobQualification='';
        $rJobTechnical='';
        $rJobSoftSkills='';
        $rJobShifts='';
        $rjobCreatedDate = '';
        $consultantId = '';
         $rJobLocation = '';
        //-----
        $randomKey = '';
         if(isset($_POST['btnJobSubmit'])){
            // echo 'hii';
try{
    //$conn->connectToDatabase();
     if(empty($_SESSION['captcha_code'] ) || strcasecmp($_SESSION['captcha_code'], $_POST['captcha_code']) != 0){  
		$resultMessage="The Validation code does not match!";// Captcha verification is incorrect.		
	}else{
    if(! get_magic_quotes_gpc() ){

         $rjobId1 = addslashes ($_POST['jobId']);
         $rfirstname = addslashes ($_POST['firstname']);
         $rphone = addslashes ($_POST['phone']);
        // $rnativePlace = addslashes ($_POST['nativePlace']);
         $rlastname = addslashes ($_POST['lastname']);
         $remail = addslashes ($_POST['email']);
        // $rworkLocation = addslashes ($_POST['workLocation']);
         $rmiddlename = addslashes ($_POST['middlename']);
       //  $rnoticePeriod = addslashes ($_POST['noticePeriod']);
         $rjobPosition = addslashes ($_POST['jobPosition']);
         
        // $rnativeDistrict = addslashes ($_POST['nativeDistrict']);
        // $rnativeState = addslashes ($_POST['nativeState']);
         $rcurentDistrict = addslashes ($_POST['curentDistrict']);
         $rcurrentState = addslashes ($_POST['currentState']);
         //$rnativeZipcode = addslashes ($_POST['nativeZipcode']);
         $rcurrentZipcode = addslashes ($_POST['currentZipcode']);
        // $rcountry = addslashes ($_POST['country']);
         $frmjobLocation = addslashes ($_POST['jobLocation']);
         
          $reducationalQualification = addslashes($_POST['educationalQualification']);
                        $rcurrentOrganization = addslashes($_POST['currentOrganization']);
                        $rexperience = addslashes($_POST['experience']);
         
         
         
    }else {
        $rjobId1 = $_POST['jobId'];
        $rfirstname = $_POST['firstname'];
        $rphone = $_POST['phone'];
       // $rnativePlace = $_POST['nativePlace'];
        $rlastname = $_POST['lastname'];
        $remail = $_POST['email'];
      //  $rworkLocation = $_POST['workLocation'];
        $rmiddlename = $_POST['middlename'];
       // $rnoticePeriod = $_POST['noticePeriod'];
        $rjobPosition = $_POST['jobPosition'];
        
      //  $rnativeDistrict = $_POST['nativeDistrict'];
      //  $rnativeState = $_POST['nativeState'];
        $rcurentDistrict = $_POST['curentDistrict'];
        $rcurrentState = $_POST['currentState'];
       // $rnativeZipcode = $_POST['nativeZipcode'];
        $rcurrentZipcode = $_POST['currentZipcode'];
      //  $rcountry = $_POST['country'];
        $frmjobLocation =  $_POST['jobLocation'];
         $reducationalQualification = $_POST['educationalQualification'];
                        $rcurrentOrganization = $_POST['currentOrganization'];
                        $rexperience = $_POST['experience'];
    }
    
    //$fileref = $_FILES['fileToUpload'];
   // $per_Path = JOB_ATTACHMENT_LOCATION; 
    //$rootPath = $per_Path.$fileref['name'];
        $fileref = $_FILES['fileToUpload'];
   
     $per_Path = JOB_ATTACHMENT_LOCATION.date('Y').'/'.date('m').'/'.date("d").'/'.$rjobId1.'/resumes/'; 
     if (file_exists($per_Path)) {
  
} else {
    if (!mkdir($per_Path, 0777, true)) {
    die('Failed to create folders...');
}
}
    $rootPath = $per_Path.$fileref['name'];
    $filname = $fileref['name'];
   
$randomKey = random_string(8);
// echo 'random-->'.random_string(8);
    //$conn->selectDatabase();
  /*  $sql = "insert into tblJobConsultants(JobId,FirstName,LastName,MiddleName,PhoneNumber,EmailId,ResumePath,ResumeName,NativeDistrict,NativeState,NativeZipcode,CurentDistrict,CurrentState,CurrentZipcode,RandomKey".
        ") values('$rjobId1','$rfirstname','$rlastname','$rmiddlename','$rphone','$remail',".
        "'$rootPath','$filname','$rnativeDistrict','$rnativeState','$rnativeZipcode','$rcurentDistrict','$rcurrentState','$rcurrentZipcode','$randomKey')";
   */
    /* $sql = "insert into tblJobConsultants(JobId,FirstName,LastName,MiddleName,PhoneNumber,EmailId,ResumePath,ResumeName,CurentDistrict,CurrentState,CurrentZipcode,RandomKey,Experience,CurrentOrg,EduQualification,Source".
        ") values('$rjobId1','$rfirstname','$rlastname','$rmiddlename','$rphone','$remail',".
        "'$rootPath','$filname','$rcurentDistrict','$rcurrentState','$rcurrentZipcode','$randomKey','$rexperience','$rcurrentOrganization','$reducationalQualification','Website')";
 
    $selectQuery = "select * from tblJobConsultants where EmailId='$remail' and JobId='$rjobId1'";
    
    */
    
     $sql = "insert into tblJobConsultants(JobId,FirstName,LastName,MiddleName,PhoneNumber,EmailId,ResumePath,ResumeName,CurentDistrict,CurrentState,CurrentZipcode,RandomKey,Experience,CurrentOrg,EduQualification,Source".
        ") values(:rjobId1,:rfirstname,:rlastname,:rmiddlename,:rphone,:remail,".
        ":rootPath,:filname,:rcurentDistrict,:rcurrentState,:rcurrentZipcode,:randomKey,:rexperience,:rcurrentOrganization,:reducationalQualification,'Website')";
    
  //  echo $sql;
    $selectQuery = "select * from tblJobConsultants where EmailId=:remail and JobId=:rjobId1";
    
     $stmt = $conn->prepare($selectQuery);
      
                 $stmt->bindParam(':remail', $remail);
                  $stmt->bindParam(':rjobId1', $rjobId1);
    //echo $selectQuery;
//$selectresponce = mysql_query($selectQuery);
                   $stmt->execute();
                    $rows = $stmt->rowCount();
//if(mysql_num_rows($selectresponce)>0){
                    if ($rows > 0) {
            $resultMessage = 'Already we have received your details .One of our representative will contact you shortly.';
          //  $conn->closeConnection(); // closing the connection
          //  mysql_close();
}else{
    require '../classes/FileUploadUtility.php';
   // echo "kola";
                $fileUpload = new FileUploadUtility();
                //$fileref = $_FILES['fileToUpload'];
                $resultMessage = $fileUpload->fileMove($fileref,$per_Path);
              //  echo "hii123-->"+$resultMessage;
                if($resultMessage == 'Success'){
                    $stmt = $conn->prepare($sql);
                    $stmt->bindParam(':rjobId1', $rjobId1);
                    $stmt->bindParam(':rfirstname', $rfirstname);
                    $stmt->bindParam(':rlastname', $rlastname);
                    $stmt->bindParam(':rmiddlename', $rmiddlename);
                    $stmt->bindParam(':rphone', $rphone);
                    $stmt->bindParam(':remail', $remail);
                    $stmt->bindParam(':rootPath', $rootPath);
                    $stmt->bindParam(':filname', $filname);
                    $stmt->bindParam(':rcurentDistrict', $rcurentDistrict);
                    $stmt->bindParam(':rcurrentState', $rcurrentState);
                    $stmt->bindParam(':rcurrentZipcode', $rcurrentZipcode);
                    $stmt->bindParam(':randomKey', $randomKey);
                    $stmt->bindParam(':rexperience', $rexperience);
                    $stmt->bindParam(':rcurrentOrganization', $rcurrentOrganization);
                    $stmt->bindParam(':reducationalQualification', $reducationalQualification);
                    
                    
                    
   //  if(!mysql_query($sql)){
                     if(!$stmt->execute()) {
             $resultMessage= "Data insertion failed..Please try again later.";
            //$conn->closeConnection(); // closing the connection
             //mysql_close();
            }else{
                //$consultantId =  mysql_insert_id();
                 $consultantId = $conn->lastInsertId();
                $eflag=EMAILFLAG;
                 if($eflag==1){
                 require '../classes/MailManager.php';
               $mailmanager = new MailManager();
               //$mailmanager->sendConsultantDetails($rfirstname, $rlastname,$rmiddlename, $remail, $rphone, $rjobPosition, $rootPath,$rcountry,$filname,$consultantId,$frmjobLocation,$randomKey);
               $mailmanager->sendJobApplicatinAcknowldge($rfirstname, $remail);    
               
                 }
                 
            //$resultMessage= "<font color=green size=2px>We have recived your deatils, Our team will contact you.\n</font>"; 
          //  $conn->closeConnection(); // closing the connection
               //  mysql_close();
            echo'<script> window.location="../thank-you.php"; </script> ';
            }
                }else{
                   // $conn->closeConnection(); // closing the connection
                 //   mysql_close();
                }
}
    }
}catch(Exception $exc){
       
      $exc->getMessage();
         $resultMessage= '<font color=red size=2px>'.$exc.'</font>';
               //  $conn->closeConnection(); // closing the connection
        // mysql_close();
                   
}
               
         }
        
        
        
        //-----
//if(isset($_GET['jobId'])){ 
    $rpopUpFlag = '0';
try{
    
  //  $conn->connectToDatabase();
  //  echo 'after';
     $rjobId = isset($_GET["jobId"]) ? $_GET["jobId"] : '-1';
//     if(! get_magic_quotes_gpc() ){
//         $rjobId = addslashes ($_GET['jobId']);
//         
//         //jobPosition
//    }else {
//        $rjobId = $_GET['jobId'];
//    }
   // $conn->selectDatabase();
   // $selectQuery = "SELECT JobId,JobTitle,JobTagline,JobLogo,JobDescription,JobPosition,JobQualification,JobTechnical,JobSoftSkills,JobShifts,JobCountry,JobStatus,Location FROM tblJobDescriptions WHERE JobId = '$rjobId'";
   // $selectQuery = "SELECT JobId,JobTitle,JobDescription,JobQualification,Location,JobCreatedDate,JobPosition,Department FROM tblJobDescriptions WHERE JobId = '$rjobId'";
      $selectQuery = "SELECT JobId,JobTitle,JobDescription,JobQualification,Location,JobCreatedDate,JobPosition,Department FROM tblJobDescriptions WHERE JobId = :rjobId";
    
    //JobId,JobTitle,JobDescription,JobQualification,Location
   // echo $selectQuery;
   // $selectresponce = mysql_query($selectQuery);
  //  if(mysql_num_rows($selectresponce)>0){
      $stmt = $conn->prepare($selectQuery);
                 $stmt->bindParam(':rjobId', $rjobId);
             $stmt->execute();
        if ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
     //   $row = mysql_fetch_row($selectresponce); 
        $rJobId = $row[0];
        $rJobTitle = $row[1];
     //   $rJobTagline = $row[2];
       // $rJobLogo = $row[3];
        $rJobDescription = $row[2];
       // $rJobPosition = $row[5];
        $rJobQualification = $row[3];
        
             $rJobLocation= $row[4];
              $rjobCreatedDate = $row[5];
              $rJobPosition = $row[6];
              $rdepartment = $row[7];
              
              $jobExp = explode("-",$rJobQualification);
              
              if($jobExp[0]==$jobExp[1])
                  $rJobQualification = $jobExp[0]." Years";
              else {
                  $rJobQualification = $rJobQualification." Years";
              }
              
     
     //   mysql_close();
    }else {
      $rpopUpFlag = '1';
      header('Location: open-positions.php?jobId=-1');
    }
  }catch(Exception $exc){
        $exc->getMessage();
      $resultMessage= '<font color=red size=2px>'.$exc.'</font>';
     //$conn->closeConnection(); // closing the connection
     // mysql_close();
} 
/*}else {
    $resultMessage = '<font color=red size=4px>Currently this position is closed!</font>';
}*/
?>   
        
 <!--    <script >
   $(function() {
       
    if(document.getElementById("popUpFlag").value=='1'){
   $("#myModal").modal();
    }
});

 function getOpenPositions(){
            window.location = '../careers/open-positions.php';
        }
</script> -->
 <style>
            .overlay{
                background-color:rgba(0,0,0,0.5) !important;
            }
            .modal-dialog
            {
                overflow:hidden !important;

            }
            ul.breadcrumb > li > a, ul.breadcrumb > li .divider {
                color: #fff;
            }
            ul.breadcrumb > li.active {
                color: #fff;
            }
            ul.breadcrumb > li > a:hover {
                color: #fff;
            }
            body{
                overflow-x:hidden;
            }
            body > section {
                padding-top: 0px !important;}

            .tinted-image {
                background: 
                    /* top, transparent red */
                    linear-gradient(
                    rgba(0, 0, 0, 0.55), 
                    rgba(0, 0, 0, 0.55)
                    ),
                    /* your image */
                    url("../img/key.jpg");
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }
            .modal-dialog
            {
                overflow:hidden !important;

            }


            .section_bg{
                background: 
                    /* top, transparent red */
                    linear-gradient(
                    rgba(0, 0, 0, 0.55), 
                    rgba(0, 0, 0, 0.55)
                    ),
                    /* your image */
                    url("<?= AMAZON_URL ?>/images/banners/job-application.png");
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
              
            }



        </style>
    </head><!--/head-->
    <?php include '../header.php';?>
    <body>
        
    
   <script type='text/javascript'>
            function refreshCaptcha(){
                var img = document.images['captchaimg'];
                img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
            }

        </script>
        
       
     <input type ="hidden" name="popUpFlag" id="popUpFlag" value="<?= $rpopUpFlag?>"/> 
     <section>
    <div class="overlay section_bg">
            <div class=" container">
                <div class="row">    
                    <div class="col-sm-7 text-left">  
                        <br><br>
                        <h1 class="micro "><font color="#fff"><strong><?php 
                        if($rpopUpFlag === '0'){
                        echo $rJobTitle;
                        }
                        ?></strong></font></h1>

                    </div>
                    <div class="col-sm-5 text-right">
                        <br><br>
                       <ul class="breadcrumb pull-right">
                      <li>
                            <a href="../">Home</a>
                        </li>
                        <li>
                            <a href="../careers">Careers</a>
                        </li>
                        <li>
                            <a href="../careers/open-positions.php">Oppurtunities</a>
                        </li>
                        <li class="active">Job Application
                        </li>
                    </ul>
                    </div>
                </div><br>
            </div>
        </div>

    </section>
  
        <section class="container">
           <br>
           
            
            <div class="row">
                <?php if($rpopUpFlag==='0'){ ?>
                <div class="col-sm-5">
                 
                      <p class="greyText heavy"><?php echo $rdepartment;?> | <?php echo $rJobQualification;?></p>
                   
                   
                   
                   
                   <div class="row noMarginTop noMarginBottom">
                        <div class="col-sm-5 noMarginBottom"><hr class="noMargin"></div>
                        <div class="col-sm-7"></div>
                   </div>
                
                     <p class="methodText"> <?php echo $rJobDescription;?></p>
                
                        <p class="greyText heavy"> <?php echo $rJobLocation;?></p>
                   <p class="greyText"><i>
                        <?php echo date('F d , Y', strtotime($rjobCreatedDate));?>
                       </i></p>
                       
                       
                   <!-- Location Details | Position Type-->
                   <!-- Job Post Date -->
                </div>
                
                <?php } ?>
                <div class="col-sm-7">
				 <?php if($resultMessage!=''){ ?>
                     <div class="row">
                         <div class="col-sm-12">
                     <div class="alert alert-danger alert-dismissable fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <?php echo $resultMessage  ?>
  </div>
       </div>   </div>     
                    <?php }?>
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="heavy">Applicant Details</h3>
                            
                            <p class="methodText">
                              Please enter your contact information
                            </p>
                        </div>
                    </div>
                     <form method="post" action="<?php $_PHP_SELF ?>" id="myForm" enctype="multipart/form-data" >
                           <input type="hidden"  id="jobId" name="jobId" value="<?php echo $rJobId;?>" >
                       
                    <input type="hidden"  id="jobPosition" name="jobPosition" value="<?php echo $rJobPosition;?>">
                    <input type="hidden"  id="jobLocation" name="jobLocation" value="<?php echo $rJobLocation;?>">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <input type="text" tabindex="1" class="form-control" required="required" placeholder="First Name" id="firstname" name="firstname" onchange="fieldLengthValidator(this);">
                            </div>
                            <div class="form-group">
                                <input type="text" tabindex="4" class="form-control" required="required" placeholder="Phone" id="phone" name="phone" onchange="return formatPhone(this);" onblur="return validatenumber(this)">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <input type="text" tabindex="2" class="form-control" required="required" placeholder="Last Name" id="lastname" name="lastname" onchange="fieldLengthValidator(this);">
                            </div>
                            <div class="form-group">
                                <input type="text" tabindex="6" class="form-control" required="required" placeholder="Email ID" id="email" name="email" onchange="return checkEmail(this);fieldLengthValidator(this);">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <input type="text" tabindex="3" class="form-control" required="required" placeholder="Middle Name" id="middlename" name="middlename" onchange="fieldLengthValidator(this);">
                            </div>
                               
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <span class="btn btn-danger btn-file">
                                        Resume<input tabindex="6" type="file" onchange="putFileName()" multiple name="fileToUpload" id="fileToUpload" required="required">
                                    </span>
                                </span>
                                <input type="text" class="form-control" id="fileDestination" name="fileDestination" required="required" placeholder="Upload" readonly>
                            </div>
                                  
                        </div>
                    </div>
                    <!-- Professional Experience start -->
                      <div class="row">
                            <div class="col-sm-12">
                                <h3 class="heavy">Professional Experience</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                     <input type="text"  class="form-control"  required="true" placeholder="Educational Background" id="educationalQualification" name="educationalQualification" onchange="fieldLengthValidator(this);" tabindex="9">
                                    <!-- <input class="form-control" id="educational background" name="educational background" onblur="return validatenumber(this)" onchange="return formatPhone(this);" placeholder="Educational Background" required="required" tabindex="4" type="text"> -->
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <!-- <input class="form-control" id="current organization" name="current organization" onchange="return checkEmail(this);fieldLengthValidator(this);" placeholder="Current Organization" required="required" tabindex="6" type="text"> -->
                                    <input type="text"  class="form-control" required="true" placeholder="Current Organisation" id="currentOrganization" name="currentOrganization" onchange="fieldLengthValidator(this);" tabindex="10">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                   <!-- <input class="form-control" id="experience" name="experience" onchange="fieldLengthValidator(this);" placeholder="Experience" required="required" tabindex="3" type="text"> -->
                                    <input type="text"  class="form-control"  required="true" placeholder="Experience" id="experience" name="experience" onchange="fieldLengthValidator(this);" tabindex="11">
                                </div>
                            </div>
                        </div>
                    <!-- Professional Experience end -->
                    
                    
                    
                <!--    <div class="row">
                        <div class="col-sm-12">
                            <div class="whyTitle"><strong>Native Place</strong></div>
                        </div>
                    </div>
                 <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <input type="text" tabindex="7" class="form-control" placeholder="City" id="nCity" name="nativeDistrict" onchange="fieldLengthValidator(this);">
                            </div>    
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <input type="text" tabindex="8" class="form-control" placeholder="State" id="nativeState" name="nativeState" onchange="fieldLengthValidator(this);">
                            </div>    
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <input type="text" tabindex="9" class="form-control" onkeypress="return isNumberKey(event)" placeholder="Zip Code" id="nativeZipcode" name="nativeZipcode" onchange="fieldLengthValidator(this);">
                            </div>    
                        </div>
                    </div> -->
               
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="whyTitle"><strong>Current Work Location</strong></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <input type="text" tabindex="10" class="form-control" required="required" placeholder="City" id="cCity" name="curentDistrict" onchange="fieldLengthValidator(this);">
                            </div>    
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <input type="text" tabindex="11" class="form-control" required="required" placeholder="State" id="currentState" name="currentState" onchange="fieldLengthValidator(this);">
                            </div>    
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <input type="text" tabindex="12" class="form-control" required="required" onkeypress="return isNumberKey(event)" placeholder="Zip Code" id="currentZipcode" name="currentZipcode" onchange="fieldLengthValidator(this);">
                            </div>    
                        </div>
                    </div>
					
					  <div class="row">

                                <div class="col-sm-6">

                                    <div class="form-group">

                                        <input id="captcha_code" name="captcha_code" type="text" required="true" class="form-control" placeholder="Enter the code right here">

                                    </div>
                                </div>
                                <div class="col-sm-6" style="text-align: left">
                                    <img src="../classes/captcha.php?rand=<?php echo rand(); ?>" id='captchaimg' height="30px;" width="100px;">&nbsp;&nbsp;&nbsp;&nbsp;<a href='javascript: refreshCaptcha();'><i class="fa fa-refresh fa-1x" aria-hidden="true" title="Can't read the image? click here to refresh"></i></a>

                                </div>
                            </div>
					
                    <div class="row">
                        <div class="col-sm-12">
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" style=" position: static;">
                                    <div class="modal-content">
                                      <div class="modal-body">
                                        <strong><div id="showAlertText"></div></strong>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <button type="submit" tabindex="13" class="btn btn-primary" name="btnJobSubmit" id="btnJobSubmit">Submit Application</button>
                        </div>
                    </div>
                </form>
                  <!--  <form action="#" enctype="multipart/form-data" id="myForm" method="post" name="myForm">
                        <input id="jobId" name="jobId" type="hidden" value=""> <input id="country" name="country" type="hidden" value=""> <input id="jobPosition" name="jobPosition" type="hidden" value="">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input class="form-control" id="firstname" name="firstname" onchange="fieldLengthValidator(this);" placeholder="First Name" required="required" tabindex="1" type="text">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="phone" name="phone" onblur="return validatenumber(this)" onchange="return formatPhone(this);" placeholder="Phone" required="required" tabindex="4" type="text">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input class="form-control" id="lastname" name="lastname" onchange="fieldLengthValidator(this);" placeholder="Last Name" required="required" tabindex="2" type="text">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="email" name="email" onchange="return checkEmail(this);fieldLengthValidator(this);" placeholder="Email ID" required="required" tabindex="6" type="text">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input class="form-control" id="middlename" name="middlename" onchange="fieldLengthValidator(this);" placeholder="Middle Name" required="required" tabindex="3" type="text">
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn"><span class="btn btn-danger btn-file">Resume<input id="fileToUpload" multiple name="fileToUpload" onchange="putFileName()" required="required" tabindex="6" type="file"></span></span> <input class="form-control" id="fileDestination" name="fileDestination" placeholder="Upload" readonly required="required" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <h3 class="heavy">Native Place</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input class="form-control" id="nCity" name="nativeDistrict" onchange="fieldLengthValidator(this);" placeholder="City" tabindex="7" type="text">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input class="form-control" id="nativeState" name="nativeState" onchange="fieldLengthValidator(this);" placeholder="State" tabindex="8" type="text">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input class="form-control" id="nativeZipcode" name="nativeZipcode" onchange="fieldLengthValidator(this);" onkeypress="return isNumberKey(event)" placeholder="Zip Code" tabindex="9" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <h3 class="heavy">Current Work Location</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input class="form-control" id="cCity" name="cCity" onchange="fieldLengthValidator(this);" placeholder="City" required="required" tabindex="10" type="text">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input class="form-control" id="currentState" name="currentState" onchange="fieldLengthValidator(this);" placeholder="State" required="required" tabindex="11" type="text">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input class="form-control" id="currentZipcode" name="currentZipcode" onchange="fieldLengthValidator(this);" onkeypress="return isNumberKey(event)" placeholder="Zip Code" required="required" tabindex="12" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="modal fade" id="myModal" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <strong></strong>
                                                
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-danger" data-dismiss="modal" type="button">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div><button class="btn btn-primary" id="btnJobSubmit" name="btnJobSubmit" tabindex="13" type="submit">Submit Application</button>
                            </div>
                        </div>
                    </form>
                   -->
                </div>
            </div><br>
        </section><?php include '../footer.php';?>
    </body>
</html>
