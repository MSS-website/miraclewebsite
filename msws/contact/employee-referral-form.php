<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

        <meta name="description" content="">

        <meta name="author" content="">

        <title>
            Employee Referral | Miracle
        </title>
 <?php include '../config/Locations.php';?>
     
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <link href="../css/font-awesome.min.css" rel="stylesheet">

        <link href="../css/main.css" rel="stylesheet">

        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../css/default.css"/>
        <link rel="stylesheet" type="text/css" href="../css/component.css"/>
        <script src="../js/modernizr.custom.js">
        </script>
        <script src="../js/fileinput.js">
        </script>
        <script src="../js/custom.js">
        </script>

        <script type="text/javascript" src="../js/Validation.js">
        </script>
        <!-- cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js --->
        <!--[if lt IE 9]>
        <script src="../js/html5shiv.js"></script>
        <script src="../js/respond.min.js"></script>
        <![endif]-->
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="shortcut icon" href="<?= AMAZON_URL ?>/images/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= AMAZON_URL ?>/images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= AMAZON_URL ?>/images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= AMAZON_URL ?>/images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?= AMAZON_URL ?>/images/ico/apple-touch-icon-57-precomposed.png">

<style>
            .modal-footer{
                margin-bottom: 20px;
            }
        </style>
        <?php
        include '../config/general.php';
       // require '../config/DbController.php';
          require '../config/ConnectionProvider.php';
          
         function random_string($length) {
    $key = '';
    $keys = array_merge(range(0, 9), range('a', 'z'));

    for ($i = 0; $i < $length; $i++) {
        $key .= $keys[array_rand($keys)];
    }

    return $key;
}
     //   $conn = new DbController();

        $resultMessage = '';
        $rcreatedBy = '';
         $randomKey = '';
            $consultantId = '';
        $rattachementLocation = '';
        $Isvalid = false;
        $jobTitle = isset($_POST["jobTitle"]) ? $_POST["jobTitle"] : null;
        $positionType = isset($_POST["positionType"]) ? $_POST["positionType"] : null;

        session_start();
        if (isset($_SESSION['ses_EmpLoginId']) && $_SESSION['ses_EmpLoginId'] != "") {
            $rcreatedBy = $_SESSION['ses_EmpLoginId'];
           // $_SESSION['ses_Validate'] = "true";
           // $Isvalid = true;
            //echo 'hiii123';
            session_unset();
            session_destroy();
        } else {
            header('Location: employee-referrals.php');
        }

// Insertion code start
        //-----
     
            if (isset($_POST['btnReferalSubmit'])) {
                // echo 'hii';
                try {
                  //  $conn->connectToDatabase();
                   // session_unset();
                    //session_destroy();
                    if (!get_magic_quotes_gpc()) {

                        $rfirstname = addslashes($_POST['firstname']);
                        $rlastname = addslashes($_POST['lastname']);
                        $rrelation = addslashes($_POST['relation']);
                        $rphone = addslashes($_POST['phone']);
                        $remail = addslashes($_POST['email']);
                        $rcity = addslashes($_POST['city']);
                        $rstate = addslashes($_POST['state']);
                        $rzip = addslashes($_POST['zip']);
                        $reducationalQualification = addslashes($_POST['educationalQualification']);
                        $rcurrentOrganization = addslashes($_POST['currentOrganization']);
                        $rexperience = addslashes($_POST['experience']);
                        // $rfileDestination = addslashes ($_POST['fileDestination']);
                        // $rfileToUpload = addslashes ($_POST['fileToUpload']);
                        //  $rnoticePeriod = addslashes ($_POST['noticePeriod']);
                        $rjobTitle = addslashes($_POST['jobTitle']);
                        $rpositionType = addslashes($_POST['positionType']);
                        $rstate = addslashes($_POST['state']);
                        // $rnativePlace = addslashes ($_POST['nativePlace']);
                        // $rintrestedLocation = addslashes ($_POST['intrestedLocation']);
                        //$remail = addslashes ($_POST['fileToUpload']);
                        // $rworkLocation = addslashes ($_POST['workLocation']);
                        // $rmiddlename = addslashes ($_POST['fileDestination']);
                        //  $rnoticePeriod = addslashes ($_POST['noticePeriod']);
                        //  $rcurrentOccupation = addslashes ($_POST['currentOccupation']);
                        // $rintrestedDepartment = addslashes ($_POST['intrestedDepartment']);
                        // $reducationalQualification = addslashes ($_POST['educationalQualification']);
                        // $rcurrentLocation = addslashes ($_POST['currentLocation']);
                        $rcreatedBy = addslashes($_POST['createdBy']);
                        $rjobId1 = addslashes ($_POST['jobId']);
                         $rmiddlename = addslashes ($_POST['middlename']);
                        // $rattachementLocation = 
                    } else {
                        $rfirstname = $_POST['firstname'];
                        $rlastname = $_POST['lastname'];
                        $rrelation = $_POST['relation'];
                        $rphone = $_POST['phone'];
                        $remail = $_POST['email'];
                        $rcity = $_POST['city'];
                        $rstate = $_POST['state'];
                        $rzip = $_POST['zip'];
                        $rstate = $_POST['state'];
                        $reducationalQualification = $_POST['educationalQualification'];
                        $rcurrentOrganization = $_POST['currentOrganization'];
                        $rexperience = $_POST['experience'];
                        //$rfileDestination = $_POST['fileDestination'];
                        // $rfileToUpload = $_POST['fileToUpload'];
                        //  $rnoticePeriod = addslashes ($_POST['noticePeriod']);
                        $rjobTitle = $_POST['jobTitle'];
                        $rpositionType = $_POST['positionType'];
                        // $rnativePlace = addslashes ($_POST['nativePlace']);
                        // $rintrestedLocation = addslashes ($_POST['intrestedLocation']);
                        //$remail = addslashes ($_POST['fileToUpload']);
                        // $rworkLocation = addslashes ($_POST['workLocation']);
                        // $rmiddlename = addslashes ($_POST['fileDestination']);
                        //  $rnoticePeriod = addslashes ($_POST['noticePeriod']);
                        //  $rcurrentOccupation = addslashes ($_POST['currentOccupation']);
                        // $rintrestedDepartment = addslashes ($_POST['intrestedDepartment']);
                        // $reducationalQualification = addslashes ($_POST['educationalQualification']);
                        // $rcurrentLocation = addslashes ($_POST['currentLocation']);
                        $rcreatedBy = $_POST['createdBy'];
                        $rjobId1 = $_POST['jobId'];
                         $rmiddlename = $_POST['middlename'];
                    }

                    $fileref = $_FILES['fileToUpload'];
                    // $per_Path = EMPREFERERAL_ATTACHMENT_LOCATION; 
                    $per_Path = EMPREFERERAL_ATTACHMENT_LOCATION . date('Y') . '/' . date('m') . '/' . date("d") . '/resume/';
                    if (file_exists($per_Path)) {
                        //  echo "The file $per_Path exists";
                    } else {
                        if (!mkdir($per_Path, 0777, true)) {
                            die('Failed to create folders...');
                        }
                    }
                    $rootPath = $per_Path . $fileref['name'];
                    $filname = $fileref['name'];
                    $randomKey = random_string(8);
// echo 'random-->'.random_string(8);

                //    $conn->selectDatabase();

                    
                    if($rpositionType=='Experienced'){
                       
    
     $sql = "insert into tblJobConsultants(JobId,FirstName,LastName,MiddleName,PhoneNumber,EmailId,ResumePath,ResumeName,CurentDistrict,CurrentState,CurrentZipcode,RandomKey,Experience,CurrentOrg,EduQualification,ReferedBy,Source".
        ") values(:rjobId1,:rfirstname,:rlastname,:rmiddlename,:rphone,:remail,".
        ":rootPath,:filname,:rcity,:rstate,:rzip,:randomKey,:rexperience,:rcurrentOrganization,:reducationalQualification,:rcreatedBy,'Referred')";
     
    
  //  echo $sql;
    //$selectQuery = "select * from tblJobConsultants where EmailId='$remail' and JobId='$rjobId1'";
     
     $selectQuery = "select * from tblJobConsultants where EmailId=:remail and JobId=:rjobId1";
     
     
     
                    }else {
                   
 $sql = "INSERT INTO tblEmpReferal(FirstName,LastName,MiddleName,EduQualification,Relation,PhoneNumber,EmailId,CurrentOrg,CurrentLocation,Experience,AttachedLocation,AttachedName,CreatedBy,CreatedDate,JobPosition,PositionType,Zip,State,RandomKey) " .
                            " VALUES(:rfirstname,:rlastname,:rmiddlename,:reducationalQualification,:rrelation,:rphone,:remail," .
                            ":rcurrentOrganization,:rcity,:rexperience,:rootPath,:filname,:rcreatedBy,NOW(),:rjobTitle,:rpositionType,:rzip,:rstate,:randomKey)";

                    //  echo $sql;
                   // $selectQuery = "select * from tblEmpReferal where EmailId='$remail' AND CreatedBy='".$rcreatedBy."'";
 
  $selectQuery = "select * from tblEmpReferal where EmailId=:remail AND CreatedBy=:rcreatedBy";
                    }
                    $stmt = $conn->prepare($selectQuery);
                  if($rpositionType=='Experienced'){
                 $stmt->bindParam(':remail', $remail);
                 $stmt->bindParam(':rjobId1', $rjobId1);
                  }else {
                       $stmt->bindParam(':remail', $remail);
                 $stmt->bindParam(':rcreatedBy', $rcreatedBy);
                  }  
                    
                    $stmt->execute();
                    $rows = $stmt->rowCount();
                   // $selectresponce = mysql_query($selectQuery);
                   // if (mysql_num_rows($selectresponce) > 0) {
                     if ($rows > 0) {
                        if($rpositionType == 'Experienced'){
                            $resultMessage = '<font color=red size=2px>' . $remail . ' is already applied for this position.</font>';
                        }else {
                            $resultMessage = '<font color=red size=2px>' . $remail . ' is already refered by you.</font>';
                        }
                        
                        header('Location: ../back-end-error.php?resultMessage=' . $resultMessage);
                      //  $conn->closeConnection(); // closing the connection
                    } else {
                        require '../classes/FileUploadUtility.php';
                        // echo "kola";
                        $fileUpload = new FileUploadUtility();
                        //$fileref = $_FILES['fileToUpload'];
                        $resultMessage = $fileUpload->fileMove($fileref, $per_Path);
                        //  echo "hii123-->"+$resultMessage;
                        if ($resultMessage == 'Success') {
                             $stmt = $conn->prepare($sql);
                            if($rpositionType=='Experienced'){
                                $stmt->bindParam(':rjobId1', $rjobId1);
                                $stmt->bindParam(':rfirstname', $rfirstname);
                                $stmt->bindParam(':rlastname', $rlastname);
                                $stmt->bindParam(':rmiddlename', $rmiddlename);
                                $stmt->bindParam(':rphone', $rphone);
                                $stmt->bindParam(':remail', $remail);
                                $stmt->bindParam(':rootPath', $rootPath);
                                $stmt->bindParam(':filname', $filname);
                                $stmt->bindParam(':rcity', $rcity);
                                $stmt->bindParam(':rstate', $rstate);
                                $stmt->bindParam(':rzip', $rzip);
                                $stmt->bindParam(':randomKey', $randomKey);
                                $stmt->bindParam(':rexperience', $rexperience);
                                $stmt->bindParam(':rcurrentOrganization', $rcurrentOrganization);
                                $stmt->bindParam(':reducationalQualification', $reducationalQualification);
                                $stmt->bindParam(':rcreatedBy', $rcreatedBy);
                               }else {
                                $stmt->bindParam(':rfirstname', $rfirstname);
                                $stmt->bindParam(':rlastname', $rlastname);
                                $stmt->bindParam(':rmiddlename', $rmiddlename);
                                $stmt->bindParam(':reducationalQualification', $reducationalQualification);
                                $stmt->bindParam(':rrelation', $rrelation);
                                $stmt->bindParam(':rphone', $rphone);
                                $stmt->bindParam(':remail', $remail);
                                $stmt->bindParam(':rcurrentOrganization', $rcurrentOrganization);
                                $stmt->bindParam(':rcity', $rcity);
                                $stmt->bindParam(':rexperience', $rexperience);
                                $stmt->bindParam(':rootPath', $rootPath);
                                $stmt->bindParam(':filname', $filname);
                                $stmt->bindParam(':rcreatedBy', $rcreatedBy);
                                $stmt->bindParam(':rjobTitle', $rjobTitle);
                                $stmt->bindParam(':rpositionType', $rpositionType);
                                $stmt->bindParam(':rzip', $rzip);
                                $stmt->bindParam(':rstate', $rstate);
                                $stmt->bindParam(':randomKey', $randomKey);
                               }
                              if(!$stmt->execute()) {
                            
                            //if (!mysql_query($sql)) {
                                $resultMessage = "<font color=red size=2px>Data insertion failed..Please try again later\n</font>";
                              //  $conn->closeConnection(); // closing the connection
                                header('Location: ../back-end-error.php?resultMessage=' . $resultMessage);
                            } else {
                                $consultantId = $conn->lastInsertId();
                                 //$consultantId =  mysql_insert_id();
                                $eflag = EMAILFLAG;
                                if ($eflag == 1) {
                                    require '../classes/MailManager.php';
                                    $mailmanager = new MailManager();
                                   if($rpositionType!='Experienced') {
                                      // echo 'Fresher';
                                    $mailmanager->sendReferalCandidateDetails($rfirstname, $rlastname, $reducationalQualification, $rrelation, $rphone, $remail, $rcurrentOrganization, $rcurrentOccupation, $rcity, $rexperience, $rootPath, $filname, $rcreatedBy, $rjobTitle, $rpositionType,$consultantId,$randomKey);
                                    }
                                   // echo $rcreatedBy.'@miraclesoft.com';
                                    $mailmanager->sendEmployeeReferalAcknowldge($rcreatedBy,$rcreatedBy.'@miraclesoft.com');
                                    //echo $rcreatedBy.'@miraclesoft.com11';
                                }
                                // echo 'Fresher1';
                                $resultMessage = "<font color=green size=2px>We have recived your deatils, Our team will contact you.</font>";
                              
                                header('Location: ../Status.php?resultMessage=' . $resultMessage);
                            }
                        } else {
                            $resultMessage = '<font color=red size=2px>Unable to upload resume.</font>';

                            // $conn->closeConnection(); // closing the connection
                            header('Location: ../back-end-error.php?resultMessage=' . $resultMessage);
                        }
                    }
                } catch (Exception $exc) {

                    $exc->getMessage();
                    $resultMessage = '<font color=red size=2px>' . $exc . '</font>';
                  
                    header('Location: ../back-end-error.php?resultMessage=' . $resultMessage);
                }
            }
        
        ?>

        <script type="text/javascript">

            function getPositions() {
                var val;
                // get list of radio buttons with specified name
                var radios = document.getElementById('frmPostions').elements["postionType"];
    
                // loop through list of radio buttons
                for (var i=0, len=radios.length; i<len; i++) {
                    if ( radios[i].checked ) { // radio checked?
                        val = radios[i].value; // if so, hold its value in val
                        break; // and break out of for loop
                    }
                }
    
                if(val== 'Freshers'){
                    document.getElementById('othersDiv').style.display='none';
                    document.getElementById('otherPosition').value="";
                    //window.location = "../careers/fresher-oppurtunity-referrals.php";
                     document.getElementById('positionType').value ="Freshers";
                    $( ".close" ).click();
                    
                   // $("#positionClose").click();
                    
                    var URL = "../careers/fresher-oppurtunity-referrals.php";
                    window.open(URL,"mywindow","menubar=1,resizable=1,width=850,height=550,scrollbars=yes")
                }
    
                else if(val=="Experienced"){
                    document.getElementById('othersDiv').style.display='none';
                    document.getElementById('otherPosition').value="";
                    document.getElementById('positionType').value ="Experienced";
                    
                     $( ".close" ).click();
                    var URL = "../careers/open-positions-referral.php";
                    window.open(URL,"mywindow","menubar=1,resizable=1,width=850,height=550,scrollbars=yes")
                }
    
                else{
                    // document.getElementById('othersDiv').style.display='block';
                    // document.getElementById('otherPosition').value="";
                    document.getElementById('jobTitle').value = document.getElementById('otherPosition').value
                    document.getElementById('positionType').value ="Others";
      
                    $( ".close" ).click();
                }
     
                // alert(val);
            }

            function checkPositionType() {
                var val;
                // get list of radio buttons with specified name
                var radios = document.getElementById('frmPostions').elements["postionType"];
    
                // loop through list of radio buttons
                for (var i=0, len=radios.length; i<len; i++) {
                    if ( radios[i].checked ) { // radio checked?
                        val = radios[i].value; // if so, hold its value in val
                        break; // and break out of for loop
                    }
                }
    
                if(val== 'Freshers'){
                    document.getElementById('othersDiv').style.display='none';
                    document.getElementById('otherPosition').value="";
                    
                    //  window.location = "../careers/fresher-oppurtunity-referrals.php";
                }
    
                else if(val=="Experienced"){
                    document.getElementById('othersDiv').style.display='none';
                    document.getElementById('otherPosition').value="";
                    
                    
                    //window.location = "../careers/open-positions-referral.php";
                }
    
                else{
                    document.getElementById('positionTypeDiv').style.display='none';
                    document.getElementById('othersDiv').style.display='block';
                    document.getElementById('otherPosition').value="";
                    document.getElementById('positionType').value ="";
                    document.getElementById('jobId').value ="";
                    document.getElementById('jobTitle').value = document.getElementById('otherPosition').value;
      
                }
    
            }
            function setDefault() {
                document.getElementById('positionTypeDiv').style.display='block';
                document.getElementById('othersDiv').style.display='none';
                document.getElementById('otherPosition').value="";
                document.getElementById('positionType').value ="";
                document.getElementById('jobId').value ="";
                
                var radios = document.getElementById('frmPostions').elements["postionType"];
                radios[0].checked = true;
            }
        </script>
        

        <script type="text/javascript">
            var datefield=document.createElement("input")
            datefield.setAttribute("type", "date")
            if (datefield.type!="date"){ //if browser doesn't support input type="date", load files for jQuery UI Date Picker
                document.write('<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />\n')
                document.write('<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"><\/script>\n')
                document.write('<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"><\/script>\n')
            }
        </script>
        <script>
            if (datefield.type!="date"){ //if browser doesn't support input type="date", initialize date picker widget:
                jQuery(function($){ //on document.ready
                    $('#startDate').datepicker();
                    $('#endDate').datepicker();
                })
            }
            
            
           /*  $(document).ready(function(){
                 alert("hii");
                 $('#myModal').modal('show');
             });*/
        </script>
       <!-- <script type="text/javascript">
            $(document).ready(function(){
                $('.open-modal').click(function(){
                    $('#myModal').modal('show');
                });
                $("#myModal").on('hidden.bs.modal', function(){
                    alert("Modal window has been completely closed.");
                });
            });
        </script>  --!>
        <style type="text/css">
            .bs-example{
                margin: 20px;
            }
            .open-modal{
                position: absolute;
                margin: 0 auto;
                top: 20px;
                right: 0;
                left: 0;
            }
        </style>
        <style type="text/css">
            .ui-datepicker-calendar tr, .ui-datepicker-calendar td,
            .ui-datepicker-calendar td a, .ui-datepicker-calendar th{font-size:inherit;}
            div.ui-datepicker{font-size:12px;width:inherit;height:inherit;}
            .ui-datepicker-title span{font-size:12px;}
        </style>
        <!--/head-->

        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

        <link rel="shortcut icon" href="<?= AMAZON_URL ?>/images/favicon.ico">

    </head>
<?php include '../header.php'; ?>

    <body>
       
        <section class="container">
            <br>
            
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-5 text-left">
                    <h1 class="heavy">
                        Employee Referral
                    </h1>

                </div>
                <div class="col-sm-5 text-right">
                    <ul class="breadcrumb pull-right">
                        <li><a href="../">Home</a></li>
                        <li><a href="../contact/">Contact</a></li>
                        <li class="active">Employee Referral</li>
                    </ul>
                </div>
                <div class="col-sm-1"></div>
            </div>
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-10">
                    <div class="jumbotron">
                        <div class="row">
                            <div class="col-sm-12">
                                <h3 class="heavy">Reference Details</h3>
                                <p class="methodText">Please enter the details of the candidate being referred</p>
                            </div>
                        </div>
                        <div id="response">
                        </div>
                        <!-- <form id="myForm" action="" method="post"> -->
                        <form method="post" action="<?php $_PHP_SELF ?>" id="myForm" enctype="multipart/form-data" onsubmit="return checkMandatoryFields();">
                            <input type="hidden" id="createdBy" name="createdBy" value="<?php echo $rcreatedBy; ?>" >
                            <input type="hidden" id="positionType" name="positionType" value="<?php echo $positionType; ?>" >
                            <input type="hidden" id="jobId" name="jobId" />
                           <!-- <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>First Name*</label>
                                      
                                        <input type="text" required="required" class="form-control" id="firstname" name="firstname" placeholder="First Name" onchange="fieldLengthValidator(this);" tabindex="1">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Last Name*</label>
                                      
                                        <input type="text"  class="form-control" required="required"  placeholder="Last Name" id="lastname" name="lastname" onchange="fieldLengthValidator(this);" tabindex="2">
                                    </div>
                                </div>
                            </div> -->
                              <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>First Name*</label>
                                      
                                        <input type="text" required="required" class="form-control" id="firstname" name="firstname" placeholder="First Name" onchange="fieldLengthValidator(this);" tabindex="1">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Last Name*</label>
                                      
                                        <input type="text"  class="form-control" required="required"  placeholder="Last Name" id="lastname" name="lastname" onchange="fieldLengthValidator(this);" tabindex="2">
                                    </div>
                                </div>
                                 <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Middle Name</label>
                                      
                                       <input type="text" tabindex="3" class="form-control" placeholder="Middle Name" id="middlename" name="middlename" onchange="fieldLengthValidator(this);">
                                    </div>
                                </div>
                            </div>




                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label >How are you related?*</label>
                                       <!-- <select class="form-control" required="required"> -->
                                        <select class="form-control" required="required" id="relation" name="relation" tabindex="4">
                                            <option>Family</option>
                                            <option>Friend</option>
                                            <option>Colleague</option>
                                            <option>Other</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label >Phone Number*</label>
                                     <!--   <input type="text"  class="form-control" required="required" placeholder="Phone Number" > -->
                                        <input type="text"  class="form-control" required="required" placeholder="Phone Number" id="phone" name="phone" onchange="return formatPhone(this);" onblur="return validatenumber(this)" tabindex="5"> 
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label >Email ID*</label>
                                      <!--  <input type="text"  class="form-control" required="required" placeholder="Email ID" > -->
                                        <input type="text"  class="form-control" required="required" placeholder="Email ID" id="email" name="email" onchange="return checkEmail(this);fieldLengthValidator(this);" tabindex="6">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label >Current Work Location</label>
                                       <!-- <input type="text"  class="form-control"  placeholder="Current Organization" > -->
                                        <input type="text"  class="form-control" required="true" placeholder="City" id="city" name="city" onchange="fieldLengthValidator(this);" tabindex="7">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label></label>
                                       <!-- <input type="text"  class="form-control"  placeholder="Current Organization" > -->
                                        <input type="text"  class="form-control" required="true" placeholder="State" id="state" name="state" onchange="fieldLengthValidator(this);" tabindex="8">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label ></label>
                                       <!-- <input type="text"  class="form-control"  placeholder="Current Organization" > -->
                                        <input type="text"  class="form-control" required="true"  placeholder="Zip Code" id="zip" name="zip" onchange="fieldLengthValidator(this);" tabindex="9">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label >Educational Background</label>
                                       <!-- <input type="text"  class="form-control"  placeholder="Current Organization" > -->
                                        <input type="text"  class="form-control"  required="true" placeholder="Educational Background" id="educationalQualification" name="educationalQualification" onchange="fieldLengthValidator(this);" tabindex="10">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label >Current Organization</label>
                                       <!-- <input type="text"  class="form-control"  placeholder="Current Organization" > -->
                                        <input type="text"  class="form-control" placeholder="Current Organisation" id="currentOrganization" name="currentOrganization" onchange="fieldLengthValidator(this);" tabindex="11">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label >Experience</label>
                                       <!-- <input type="text"  class="form-control"  placeholder="Current Organization" > -->
                                        <input type="text"  class="form-control"  placeholder="Experience" id="experience" name="experience" onchange="fieldLengthValidator(this);" tabindex="12">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <div class="input-group-btn">
                                            <div class="btn btn-danger btn-file">
                                                <input  type="file" name="fileToUpload" id="fileToUpload" onchange="putFileName()" tabindex="13">
                                                    Resume  Upload*<!-- <input  type="file" required="required"> -->

                                            </div>
                                        </div>
                                       <!-- <input type="text" class="form-control"  placeholder="Upload" > -->
                                        <input type="text" class="form-control"  placeholder="File" id="fileDestination" name="fileDestination" required="required">
                                    </div></div>
                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <span class="input-group-btn">

                                            <a href="#" class="btn btn-primary"
                                               data-toggle="modal"
                                               data-target="#basicModal" onclick="setDefault();">Select Position</a></span>


                                        <!-- /.modal-content -->
                                        <input type="text" class="form-control" readonly="true" id="jobTitle" name="jobTitle" required="required"> 
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">

                                        <button type="submit" tabindex="14" class="btn btn-primary col-sm-12" name="btnReferalSubmit" id="btnReferalSubmit">Submit Reference</button>
                                    </div>
                                </div>


                            </div>

                            <!-- Modal ends here -->


                        </form>
                    </div>
                </div>




                <!--   Modal Start-->

                <div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
                    <div class="modal-dialog" style="position: static;">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" id="positionClose" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" >Which kind of position are you looking for?</h4>
                            </div>
                            <hr>
                            <div class="modal-body">
                                <div class="container">
                                    <form name="frmPostions" id="frmPostions" action=""> 
                                        <div class="row" id="positionTypeDiv">
                                            <!--   <form  target="self" action="" onsubmit="window.open(whichsite(this), '_parent'); return false;">  -->
                                            <label><input type="radio" name="postionType"  checked value="Freshers" onchange="checkPositionType();">Freshers</label>

                                            <label><input type="radio" name="postionType"  value="Experienced" onchange="checkPositionType();">Experienced</label>

                                            <label><input type="radio" name="postionType" value="Others" onchange="checkPositionType();">Others</label>

                                        </div>
                                        <div class="row" id="othersDiv" style="display: none">
                                            <div class="col-sm-15">
                                                <div class="form-group">
                                                    <label >Didn't find the right position for your referral? Let us know what kind of position you are looking for below.</label>
                                                   <!-- <input type="text"  class="form-control"  placeholder="Current Organization" > -->

                                                    <textarea  rows="4" cols="50" type="text"  class="form-control"  placeholder="Looking for" id="otherPosition" name="otherPosition" tabindex="7"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </form> 
                                </div>
                            </div>
                            <div class="modal-footer">
                                <!-- <button type="submit" value="Submit" onclick="loopForm(document.thisForm);" tabindex="14" class="btn btn-primary" name="btnSubmit" id="btnSubmit">Let's Go!!</button> -->
                                <button type="button" tabindex="15" class="btn btn-primary" name="btnSubmit" id="btnSubmit" onclick="getPositions();">Let's Go!!</button>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal End-->
                <!-- alert start-->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"><!-- Modal for showing alerts -->
                                  <div class="modal-dialog" style="position: static;">
                                    <div class="modal-content">
                                      <div class="modal-body">
                                        <strong><div id="showAlertText"></div></strong>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                      </div>
                                    </div>
                                  </div>
                                </div><!-- Modal ends here -->

                <!-- alert end-->

                <div class="col-sm-1"></div>
            </div>
            <br>
        </section>
        <script>
            function loopForm(form) {
                var cbResults = 'Checkboxes: ';
                var radioResults = 'Radio buttons: ';
                for (var i = 0; i < form.elements.length; i++ ) {
                    if (form.elements[i].type == 'checkbox') {
                        if (form.elements[i].checked == true) {
                            cbResults += form.elements[i].value + ' ';
                        }
                    }
                    if (form.elements[i].type == 'radio') {
                        if (form.elements[i].checked == true) {
                            radioResults += form.elements[i].value + ' ';
                        }
                    }
                }
                document.getElementById("radioResults").innerHTML = radioResults;
            }
        </script>

<?php include '../footer.php'; ?>

    </body>
</html>
