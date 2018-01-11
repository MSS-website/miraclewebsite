<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <META NAME="Title" CONTENT="Home | Miracle">
        <META NAME="Description" CONTENT="Miracle Software Systems, Inc. is a 20 year firm headquartered in Novi ,MI ,USA. Miracle has been a leader in the IT space as Systems Integrator in ERP/B2B/BPM.">
        <META NAME="Robots" CONTENT="INDEX,FOLLOW">
        <title>Employee Verification | Miracle</title>
        <?php include '../config/Locations.php'; 
         session_start();
         
        // $isSuccess=isset($_GET["isSuccess"]) ? $_GET["isSuccess"] : '';
        ?>

        <link href="../css/bootstrap.min.css" rel="stylesheet">


        <link href="../css/animate.css" rel="stylesheet">
        <link href="../css/main.css" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="../css/default.css" />
        <link rel="stylesheet" type="text/css" href="../css/component.css" />
        <script src="../js/modernizr.custom.js"></script>
         <script src="../js/Validation.js"></script>
        <!--[if lt IE 6]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
        <link href="../css/font-awesome.min.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="shortcut icon" href="<?= AMAZON_URL ?>/images/favicon.ico">
	<script src="../js/custom.js"></script>
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
        </script>
        <style type="text/css">
            .ui-datepicker-calendar tr, .ui-datepicker-calendar td,
            .ui-datepicker-calendar td a, .ui-datepicker-calendar th{font-size:inherit;}
            div.ui-datepicker{font-size:12px;width:inherit;height:inherit;}
            .ui-datepicker-title span{font-size:12px;}
        </style>
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
                    url("<?= AMAZON_URL ?>/images/banners/employeeverification.png");
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
              
            }



        </style>
    </head><!--/head-->
    <!DOCTYPE html>
    <html>
        <meta name=viewport content="width=device-width, initial-scale=1">
        <!--[if lte IE 8]>
        <div id="warning">
        <META http-equiv="refresh" content="0;URL=http://www.miraclesoft.com/outdated-browser.php">
        </div>-->




        <!--[if lt IE 9]>
    
    <script src="js/html5shiv.js">
    </script>
    
    <script src="js/respond.min.js">
    </script>
    <![endif]-->




    </head>
    <?php include '../header.php'; ?>
    <body>
 
        <script type='text/javascript'>
            function refreshCaptcha(){
                var img = document.images['captchaimg'];
                img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
               
                
            }

        </script>
        
        <input type='hidden' id='isSuccess' name='isSuccess' value='<?= $isSuccess ?>'/>
<section>
        <div class="overlay section_bg">
            <div class=" container">
                <div class="row">    
                    <div class="col-sm-7 text-left">  
                        <br><br>
                        <h1 class="micro "><font color="#fff"><strong>Employee Verification</strong></font></h1>

                    </div>
                    <div class="col-sm-5 text-right">
                        <br><br>
                       <ul class="breadcrumb pull-right">
                        <li><a href="../">Home</a></li>
                        <li><a href="../contact">Contact</a></li>
                        <!-- Breadcrumb div starts here --> 
                        <li class="active">Employee Verification</li>
                        <!-- Breadcrumb div Ends here --> 
                    </ul>
                    </div>
                </div><br>
            </div>
        </div>

    </section>
        <?php
     //   require '../classes/EmployeeDetails.php';
     
        
        
        function random_string($length) {
        	$key = '';
        	$keys = array_merge(range(0, 9), range('a', 'z'));
        	
        	for ($i = 0; $i < $length; $i++) {
        		$key .= $keys[array_rand($keys)];
        	}
        	
        	return $key;
        }
        
        $isSuccess = '';
        
        $resultMessage = "";
        if(isset($_POST['btnSubmit'])){
        	//require '../config/DbController.php';
        	//$conn = new DbController();
        	require '../config/ConnectionProvider.php';
        	try{
        		//$conn->connectToDatabase();
        		
        		$tempCaptcha_code= isset($_POST["frmCaptcha_code"]) ? $_POST["frmCaptcha_code"] : '';
        		
        		$sessionCaptcha = $_SESSION['captcha_code'];
        	//	echo 'frm--'.$tempCaptcha_code.'-->';
        		
        	//	echo 'ses--'.$sessionCaptcha;
        		
        		/*//if(strcmp($sessionCaptcha, trim($tempCaptcha_code)) != 0){
        		 if($tempCaptcha_code != $sessionCaptcha){
        		 $resultMessage='<div class="alert alert-danger alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">x</a>
        		 The captcha code does not match!
        		 </div>';// Captcha verification is incorrect.
        		 }else{// Captcha verification is Correct. Final Code Execute here!
        		 //$resultMessage="The Validation code has been matched.";
        		 
        		 */
        		
        		
        		if(trim($tempCaptcha_code) == trim($sessionCaptcha)){
        			
        			if(! get_magic_quotes_gpc() )
        			{
        				$rfirstname = addslashes ($_POST['firstname']);
        				$rlastname = addslashes ($_POST['lastname']);
        				$rorganization = addslashes ($_POST['organization']);
        				$rdesignation = addslashes ($_POST['designation']);
        				$remail = addslashes ($_POST['email']);
        				$rphone = addslashes ($_POST['phone']);
        				$remployeeName = addslashes ($_POST['employeeName']);
        				$remployeeId = addslashes ($_POST['employeeId']);
        				$rlocation = addslashes ($_POST['location']);
        				//$remployeePeriod = addslashes ($_POST['employeePeriod']);
        				$rempDesignation = addslashes ($_POST['empDesignation']);
        				$rdepartment = addslashes ($_POST['department']);
        				//$rreasonsToLeave = addslashes ($_POST['reasonsToLeave']);
        				$rstartDate = addslashes ($_POST['startDate']);
        				$rendDate = addslashes ($_POST['endDate']);
        				$raddExperience=addslashes ($_POST['addExperience']);
        				$rnewCompanyName= addslashes ($_POST['endCustomerName']);
        				$rremuneration= addslashes ($_POST['remuneration']);
        				$rreasonForLeaving=addslashes ($_POST['reasonForLeaving']);
        			}
        			else
        			{
        				$rfirstname = $_POST['firstname'];
        				$rlastname = $_POST['lastname'];
        				$rorganization = $_POST['organization'];
        				$rdesignation = $_POST['designation'];
        				$remail = $_POST['email'];
        				$rphone = $_POST['phone'];
        				$remployeeName = $_POST['employeeName'];
        				$remployeeId = $_POST['employeeId'];
        				$rlocation = $_POST['location'];
        				// $remployeePeriod = $_POST['employeePeriod'];
        				$rempDesignation = $_POST['empDesignation'];
        				$rdepartment = $_POST['department'];
        				$rstartDate = $_POST['startDate'];
        				$rendDate = $_POST['endDate'];
        				$raddExperience= $_POST['addExperience'];
        				$rnewCompanyName= $_POST['endCustomerName'];
        				
        				$rremuneration= addslashes ($_POST['remuneration']);
        				$rreasonForLeaving=addslashes ($_POST['reasonForLeaving']);
        				// $rreasonsToLeave = $_POST['reasonsToLeave'];
        			}
        			//$originalstdate = $rstartDate;
        			$rstartDate = date("y-m-d", strtotime($rstartDate));
        			$rendDate = date("y-m-d", strtotime($rendDate));
        			$rflag = 1;
        			
        			
        			
        			
        			
        			
        			/*$sql = "insert into tblEmpVerfication(FirstName,LastName,Organization,Designation,EmailId,Phone,EmployeeName,EmployeeId,EmploymentLocation,EmployeeDesignation,Department,EmploymentStarted,EmploymentEnded,Experience,NewCompanyName,Remuneration,ReasonForLeaving,ExperienceLetterFileName,LatestResumeFileName,ExperienceLetterPath,LatestResumePath,RandomKey,LOCFileName,LOCPath".
        			 ") values(:rfirstname,:rlastname,:rorganization,:rdesignation,:remail,:rphone,:remployeeName,".
        			 ":remployeeId,:rlocation,:rempDesignation,:rdepartment,CAST( :rstartDate AS DATE),CAST(:rendDate AS DATE),:raddExperience,:rnewCompanyName,:rremuneration,:rreasonForLeaving,:expLetterFilname,:latestResumeFilname,:expLetterRootPath,:latestResumeRootPath,:randomKey,:letterOfAgreementFileName,:letterOfAgreementPath)";
        			 */
        			$sql = "insert into tblEmpVerfication(FirstName,LastName,Organization,Designation,EmailId,Phone,EmployeeName,EmployeeId,EmploymentLocation,EmployeeDesignation,Department,EmploymentStarted,EmploymentEnded,Experience,NewCompanyName,Remuneration,ReasonForLeaving,ExperienceLetterFileName,LatestResumeFileName,ExperienceLetterPath,LatestResumePath,RandomKey,LOCFileName,LOCPath,LatestPaySlipFileName,LatestPaySlipPath".
          			") values(:rfirstname,:rlastname,:rorganization,:rdesignation,:remail,:rphone,:remployeeName,".
          			":remployeeId,:rlocation,:rempDesignation,:rdepartment,CAST( :rstartDate AS DATE),CAST(:rendDate AS DATE),:raddExperience,:rnewCompanyName,:rremuneration,:rreasonForLeaving,:expLetterFilname,:latestResumeFilname,:expLetterRootPath,:latestResumeRootPath,:randomKey,:letterOfAgreementFileName,:letterOfAgreementPath,:latestPaySlipFileName,:latestPaySlipPath)";
        			
        			//--- File upload code satrts
        			
        			$expletter = $_FILES['experienceLetter'];
        			$latestresume = $_FILES['latestResume'];
        			$letterOfAgreement = $_FILES['letterOfAgreement'];
        			$latestPayslip= $_FILES['latestPayslip'];
        			
        			
        			$exp_Letter_Path = VERIFY_EMPLOYEE_EXPERIENCE_LETTERS. date('Y') . '/' . date('F') . '/' . date("d") . '/';
        			if (file_exists($exp_Letter_Path)) {
        				//  echo "The file $per_Path exists";
        			} else {
        				if (!mkdir($exp_Letter_Path, 0777, true)) {
        					die('Failed to create folders...');
        				}
        			}
        			$exp_letter_rootPath = $exp_Letter_Path. $expletter['name'];
        			$exp_letter_filname = $expletter['name'];
        			$randomKey = random_string(8);
        			
        			$latest_resume_Path = VERIFY_EMPLOYEE_LATEST_RESUMES. date('Y') . '/' . date('F') . '/' . date("d") . '/';
        			if (file_exists($latest_resume_Path)) {
        				//  echo "The file $per_Path exists";
        			} else {
        				if (!mkdir($latest_resume_Path, 0777, true)) {
        					die('Failed to create folders...');
        				}
        			}
        			$latest_resume_rootPath = $latest_resume_Path. $latestresume['name'];
        			$latest_resume_filname = $latestresume['name'];
        			
        			
        			
        			$letterOfAgreement_Path = VERIFY_EMPLOYEE_LOC. date('Y') . '/' . date('F') . '/' . date("d") . '/';
        			if (file_exists($letterOfAgreement_Path)) {
        				//  echo "The file $per_Path exists";
        			} else {
        				if (!mkdir($letterOfAgreement_Path, 0777, true)) {
        					die('Failed to create folders...');
        				}
        			}
        			$letterOfAgreement_rootPath = $letterOfAgreement_Path. $letterOfAgreement['name'];
        			$letterOfAgreement_filname = $letterOfAgreement['name'];
        			
        			// Payslip
        			
        			$latest_PaySlip_Path = VERIFY_EMPLOYEE_PAYSLIP. date('Y') . '/' . date('F') . '/' . date("d") . '/';
        			if (file_exists($latest_PaySlip_Path)) {
        				//  echo "The file $per_Path exists";
        			} else {
        				if (!mkdir($latest_PaySlip_Path, 0777, true)) {
        					die('Failed to create folders...');
        				}
        			}
        			$latest_PaySlip_RootPath= $latest_PaySlip_Path. $latestPayslip['name'];
        			$latest_PaySlip_FileName= $latestPayslip['name'];
        			
        			
        			
        			require '../classes/FileUploadUtility.php';
        			$fileUpload = new FileUploadUtility();
        			
        			$resultMessage = $fileUpload->fileMove($expletter, $exp_Letter_Path);
        			
        			$resultMessage = $fileUpload->fileMove($latestresume, $latest_resume_Path);
        			
        			$resultMessage = $fileUpload->fileMove($letterOfAgreement, $letterOfAgreement_Path);
        			
        			$resultMessage = $fileUpload->fileMove($latestPayslip, $latest_PaySlip_Path);
        			//--- File upload code ends
        			
        			
        			
        			$stmt = $conn->prepare($sql);
        			$stmt->bindParam(':rfirstname', $rfirstname);
        			$stmt->bindParam(':rlastname', $rlastname);
        			$stmt->bindParam(':rorganization', $rorganization);
        			$stmt->bindParam(':rdesignation', $rdesignation);
        			$stmt->bindParam(':remail', $remail);
        			$stmt->bindParam(':rphone', $rphone);
        			$stmt->bindParam(':remployeeName', $remployeeName);
        			$stmt->bindParam(':remployeeId', $remployeeId);
        			$stmt->bindParam(':rlocation', $rlocation);
        			$stmt->bindParam(':rempDesignation', $rempDesignation);
        			$stmt->bindParam(':rdepartment', $rdepartment);
        			$stmt->bindParam(':rstartDate', $rstartDate);
        			$stmt->bindParam(':rendDate', $rendDate);
        			//New fileds
        			$stmt->bindParam(':raddExperience', $raddExperience);
        			$stmt->bindParam(':rnewCompanyName', $rnewCompanyName);
        			
        			$stmt->bindParam(':rremuneration', $rremuneration);
        			$stmt->bindParam(':rreasonForLeaving', $rreasonForLeaving);
        			
        			$stmt->bindParam(':expLetterFilname', $exp_letter_filname);
        			$stmt->bindParam(':latestResumeFilname', $latest_resume_filname);
        			$stmt->bindParam(':expLetterRootPath', $exp_letter_rootPath);
        			$stmt->bindParam(':latestResumeRootPath', $latest_resume_rootPath);
        			$stmt->bindParam(':randomKey', $randomKey);
        			
        			$stmt->bindParam(':letterOfAgreementFileName', $letterOfAgreement_filname);
        			$stmt->bindParam(':letterOfAgreementPath', $letterOfAgreement_rootPath);
        			
        			$stmt->bindParam(':latestPaySlipFileName', $latest_PaySlip_FileName);    //for payslip file name
        			$stmt->bindParam(':latestPaySlipPath', $latest_PaySlip_RootPath);       //for pay slip path
        			
        			$resultMessage='<div class="alert alert-danger alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">x</a>
Oops! something went wrong.Please try again!
</div>';
        			
        			
        			
        			
        			$stmt->execute();
        			$lastInsertId = $conn->lastInsertId();
        			require '../classes/MailManager.php';
        			$mailmanager = new MailManager();
        			$mailmanager->sendEmployeeVerificationDetails($rfirstname,$rlastname,$rorganization,$rdesignation,$remail,$rphone,$remployeeName,$remployeeId,$rlocation,$rempDesignation,$rdepartment,$raddExperience,$rnewCompanyName,$rremuneration,$rreasonForLeaving,$randomKey,$lastInsertId);
        			
        			if($rlocation=='United States')
        				$mailmanager->sendEmployeeVerificationAcknowldge($rfirstname, $remail,$remployeeName);
        				else
        					$mailmanager->sendEmployeeVerificationIndiaAcknowldge($rfirstname,$remail,$remployeeName,$randomKey);
        					// echo'<script> window.location="../thank-you.php"; </script> ';
        					
        					$resultMessage = '<div class="alert alert-success alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">x</a>
Thank you so much for filling the employee verification Form with Miracle Software Systems.
</div>';
        					//  $isSuccess='true';
        					// header('location:'.$_SERVER['PHP_SELF'].'?isSuccess=true');
        					//}
        					
        					
        		}    else {
        			$resultMessage='<div class="alert alert-danger alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">x</a>
The captcha code does not match!
</div>';// Captcha verification is incorrect.
        		}
        		
        		
        	}
        	catch(Exception $exc){
        		$exc->getMessage();
        		// $resultMessage= $exc->getMessage();
        		$resultMessage="<font color=red size=2px>".$exc.'</font>';
        	}
        	
        }
        
        ?>
        
        

        <section class="container">
            <br>
<!--            <br>
            <br>
            <br>
            <br>-->
<!--            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-5 text-left">
                    <div class="pageTitle">
                        <strong>Employee Verification</strong>
                        <p></p>
                    </div>
                </div>
                <div class="col-sm-5 text-right">
                    <ul class="breadcrumb pull-right">
                        <li><a href="../">Home</a></li>
                        <li><a href="../contact">Contact</a></li>
                        <li class="active">Employee Verification</li>
                    </ul>
                </div>
                <div class="col-sm-1"></div>
            </div>-->
            <div class="row">
                
                <div class="col-sm-12">
                    <div class="jumbotron">
                        <div class="row">
                            <div class="col-sm-12">
                            
                           
     <?php echo $resultMessage;?>
 
                            
                               
                                <div class="whyTitle"><strong>Verfication Agency / Employer Details :</strong></div>
                                <p class="methodText">Please enter your details for future reference and contact purposes</p>
                            </div>
                        </div>
                        <!--  <form id="myForm" onsubmit="return validateForm();" action="../thank-you.php"> -->
                        <div id="response">



                        </div>
                        <form id="myForm" action="" method="post" enctype="multipart/form-data" onsubmit="return checkVerifyForm();">
                        
                        
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="fName">First Name</label>
                                        <input type="text" tabindex="1" class="form-control" required="required" placeholder="First Name" id="firstname" name="firstname" onchange="fieldLengthValidator(this);" tabindex="1">
                                    </div>
                                    <div class="form-group">
                                        <label for="organization">Organization/Employer Name</label>
                                        <input type="text" tabindex="4" class="form-control" required="required" placeholder="Organization" id="organization" name="organization" onchange="fieldLengthValidator(this);" tabindex="4">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="lName">Last Name</label>
                                        <input type="text" tabindex="2" class="form-control" required="required" placeholder="Last Name" id="lastname" name="lastname" onchange="fieldLengthValidator(this);" tabindex="2">
                                    </div>
                                    <div class="form-group">
                                        <label for="designation">Designation</label>
                                        <input type="text" tabindex="5" class="form-control" required="required" placeholder="Designation" name="designation" id="designation" onchange="fieldLengthValidator(this);">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="email">Email ID</label>
                                        <input type="text" tabindex="3" class="form-control" required="required" placeholder="Email" id="email" name="email" onchange="return checkEmail(this);fieldLengthValidator(this);" tabindex="3">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Phone</label>    
                                        <input type="text" tabindex="6" class="form-control" required="required" onkeypress="return isNumberKey(event)" placeholder="Work Phone" id="phone" name="phone"  onblur="return validatenumber(this)" tabindex="6">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="whyTitle"><strong>Employee Details </strong></div>
                                    <p class="methodText">Please enter your details of the employee whom you would like to verify</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="eName">Employee Name</label>
                                        <input type="text" tabindex="7" class="form-control" required="required" placeholder="Employee Name" id="employeeName" name="employeeName" onchange="fieldLengthValidator(this);" tabindex="7">
                                    </div>
                                    <div class="form-group">
                                        <label for="eId">Employee ID</label>
                                        <input type="text" tabindex="10" class="form-control" required="required"  placeholder="Employee ID" id="employeeId" name="employeeId"  onchange="fieldLengthValidator(this);" tabindex="10">
                                    </div>
                                    <label for="location">Employment Location</label>
                                     <div class="form-group">
                                    <select class="form-control" id="location" name="location" tabindex="13">
                                        <option>India</option>
                                        <option>United States</option>
                                        <option>Other</option>
                                    </select>
                                     </div>
                                     
                                     <div class="form-group">
                                        <label for="remuneration">Remuneration(CTC)</label>
                                        <input type="text"  class="form-control" required="required"  placeholder="Remuneretion(CTC)" id="remuneration" name="remuneration"  onchange="fieldLengthValidator(this);" tabindex="16">
                                    </div>
                                    <br>
                                     
                                  <!--    <div class="input-group">
                                        <div class="input-group-btn">
                                            <div class="btn btn-danger btn-file">
                                                <input  type="file" name="experienceLetter" id="experienceLetter" onchange="putExpLetterName()" tabindex="18">
                                                    Upload Experience Letter*

                                            </div>
                                        </div>
                                       
                                        <input type="text" class="form-control"  placeholder="File" id="explDestination" name="explDestination" required="required">
                                    </div>
                                    -->
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="designation">Designation</label>
                                        <input type="text" tabindex="8" class="form-control" required="required" placeholder="Designation" name="empDesignation" id="empDesignation" onchange="fieldLengthValidator(this);">
                                    </div>
                                    <div class="form-group">
                                        <label for="sDate">Employment Started (MM/DD/YYYY)</label>
                                        <input type="date" tabindex="11" class="form-control" required="required" placeholder="Start Date" id="startDate" name="startDate">
                                    </div>
                                    <!-- <div class="form-group">
 <label for="sDate"><br></label>
                                        <input id="captcha_code" name="captcha_code" type="text" required="true" class="form-control" placeholder="Enter the code right here">

                                    </div> -->
                                     <div class="form-group">
                                        <label for="addExperience">Add Experience</label>
                                        <input type="text" tabindex="14" class="form-control" required="required" placeholder="Add Experience" id="addExperience" name="addExperience" onchange="fieldLengthValidator(this);">
                                    </div>
                                 
                                   
                                    <div class="form-group">
                                        <label for="reasonForLeaving">Reason for Leaving</label>
                                        
                                        <textarea tabindex="17" rows="3" cols="30" required="required"  name="reasonForLeaving" id ="reasonForLeaving" placeholder="Reason for Leaving" class = "form-control"  onchange="fieldLengthValidator(this);" ></textarea>
                                    </div>
                                    
                                </div>
                                <div class="col-sm-4">
                                     <label for="eDepartment">Department</label>
                                     <div class="form-group">
                                    <select class="form-control" id="department" name="department" tabindex="09">
                                        <option>Delivery</option>
                                        <option>Operations</option>
                                        <option>Recruitment</option>
                                        <option>Sales</option>
                                        <option>Marketing</option>
                                        <option>PMO</option>
                                        
                                    </select>
                                     </div>
                                    <div class="form-group">
                                        <label for="eDate">Employment Ended (MM/DD/YYYY)</label>
                                        <input type="date" tabindex="12" class="form-control" required="required" placeholder="End Date" id="endDate" name="endDate">
                                    </div>
                                     <div class="form-group">
                                        <label for="endCustomerName">End Customer Name</label>
                                        <input type="text" tabindex="15" class="form-control" required="required" placeholder="End Customer Name" id="endCustomerName" name="endCustomerName" onchange="fieldLengthValidator(this);">
                                    </div>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                   <!--  <div class="input-group">
                                        <div class="input-group-btn">
                                            <div class="btn btn-danger btn-file">
                                                <input  type="file" name="letterOfAgreement" id="letterOfAgreement" onchange="putLetterOfAgreement()" tabindex="20">
                                                    Upload LOA*

                                            </div>
                                        </div>
                                      
                                        <input type="text" class="form-control"  placeholder="File" id="locDestination" name="locDestination" required="required">
                                    </div>
                                    -->
                                    
                                  
                                </div>
                            </div>
                            <!-- Upload div start -->
                             <div class="row">
                             
                             
                              <div class="col-sm-4">
                     <div class="input-group">
                                        <div class="input-group-btn">
                                            <div class="btn btn-danger btn-file">
                                                <input  type="file" name="experienceLetter" id="experienceLetter" onchange="putExpLetterName()" >
                                                    Upload Experience Letter*<!-- <input  type="file" required="required"> -->

                                            </div>
                                        </div>
                                       <!-- <input type="text" class="form-control"  placeholder="Upload" > -->
                                        <input type="text" readonly="readonly" class="form-control"  placeholder="File" id="explDestination" name="explDestination" required="required" tabindex="18">
                               </div>   
                             
          </div>
          
                              <div class="col-sm-4">
                                  <div class="input-group"> 
                                        <div class="input-group-btn">
                                            <div class="btn btn-danger btn-file">
                                                <input  type="file" name="latestResume" id="latestResume" onchange="putLatestResumeName()" >
                                                    Upload Latest Resume*<!-- <input  type="file" required="required"> -->

                                            </div>
                                        </div>
                                       <!-- <input type="text" class="form-control"  placeholder="Upload" > -->
                                        <input type="text" readonly="readonly" class="form-control"  placeholder="File" id="resumeDestination" name="resumeDestination" required="required" tabindex="19">
                                    </div>
                                  </div>     
                  
                     <div class="col-sm-4">     
                          <div class="input-group"> 
                                        <div class="input-group-btn">
                                            <div class="btn btn-danger btn-file">
                                                <input  type="file" name="letterOfAgreement" id="letterOfAgreement" onchange="putLetterOfAgreement()" >
                                                    Upload LOA*<!-- <input  type="file" required="required"> -->

                                            </div>
                                        </div>
                                       <!-- <input type="text" class="form-control"  placeholder="Upload" > -->
                                        <input type="text" readonly="readonly" class="form-control"  placeholder="File" id="locDestination" name="locDestination" required="required" tabindex="20">
                                     </div> 
                             
            
                             </div>
                             
                              
                             
                            
                         </div>   
                            <!-- Upload Div end -->
                            
                            <div class="row">
                            <div class="col-sm-4"><br>
                                  <div class="input-group"> 
                                        <div class="input-group-btn">
                                            <div class="btn btn-danger btn-file">
                                                <input  type="file" name="latestPayslip" id="latestPayslip" onchange="putLatestPaySlip()" >
                                                    Upload Last Payslip*<!-- <input  type="file" required="required"> -->

                                            </div>
                                        </div>
                                       <!-- <input type="text" class="form-control"  placeholder="Upload" > -->
                                        <input type="text" class="form-control" readonly="readonly"  placeholder="MSS Last payslip" id="payslipDestination" name="payslipDestination" required="required" tabindex="21" >
                                    </div>
                                  </div> 
                                  
                             <div class="col-sm-4"><br>
                              <div class="row">
 										<div class="col-sm-6">
                                        <input id="captcha_code" name="frmCaptcha_code" type="text" required="true" class="form-control"  placeholder="Enter the code" tabindex="21">
                                       </div>
                                        <div class="col-sm-4">
                                         <img src="../classes/captcha.php?rand=<?php echo rand(); ?>" id='captchaimg' height="30px;" width="100px;">
                                         </div>
                                        <div class="col-sm-2">
                                        <a href='javascript: refreshCaptcha();'><i class="fa fa-refresh fa-1x" aria-hidden="true" title="Can't read the image? click here to refresh"></i></a>
 										</div>
                                    </div>
                             </div>
                             
                             <div class="col-sm-4"><br>
                           
                             <button type="submit" tabindex="22" class="btn btn-primary col-sm-12" name="btnSubmit" id="btnSubmit" onclick="return employeeVerificationDatesValidation();">Submit Verification Enquiry</button>
                            </div></div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                                    </div>
                                   
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
               
            </div>
            
            
            
           
            
            
            <br>
        </section>
 
        <?php include '../footer.php'; ?>

    </body>
</html>