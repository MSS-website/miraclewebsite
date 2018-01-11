<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="description">
        <meta content="" name="author">
        <?php
        //require '../config/DbController.php';
        require '../../config/general.php';
      //  $conn = new DbController();
         require '../../config/ConnectionProvider.php';

        $rDocTitle = '';
        $rDocType = '';
        $rDocLongDesc = '';
        $resultMessage = '';
        $checkFlag = 0;
        try {

//            $conn->connectToDatabase();
//            $conn->selectDatabase();
            // $reventId = isset($_GET["eventId"]) ? $_GET["eventId"] : '-1';
            $selectQuery = "SELECT DocTitle,DocType,DocLongDesc FROM tblWebDownloadsLines WHERE Id=13";
           $stmt = $conn->prepare($selectQuery);
            $stmt->execute();
            $rows = $stmt->rowCount();
            //  if (mysql_num_rows($result) > 0) {
            if ($rows > 0) {
                if ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
                    //  $row = mysql_fetch_row($result);
                    $rDocTitle = $row[0];
                    $rDocType = $row[1];
                    $rDocLongDesc = $row[2];
                }
            }
			
        } catch (Exception $exc) {

            $exc->getMessage();
            $resultMessage = '<font color=red size=2px>' . $exc . '</font>';

            header('Location: ../../back-end-error.php?resultMessage=' . $resultMessage);
            // $conn->closeConnection(); // closing the connection
        }
//-------------------
        if (isset($_POST['btnSubmit'])) {

            try {

               // $conn->connectToDatabase();
                if (!get_magic_quotes_gpc()) {
                    // $rrefId = addslashes ($_POST['refId']);
                    // $robjectId = addslashes ($_POST['objectId']);
                    $rfirstname = addslashes($_POST['firstname']);
                    $remail = addslashes($_POST['email']);
                    $rorganization = addslashes($_POST['organization']);
                    $rlastName = addslashes($_POST['lastname']);
                    $rphone = addslashes($_POST['workPhone']);
                    $rdesignation = addslashes($_POST['designation']);
                } else {
                    //$rrefId = $_POST['refId'];
                    // $robjectId = $_POST['objectId'];
                    $rfirstname = $_POST['firstname'];
                    $remail = $_POST['email'];
                    $rorganization = $_POST['organization'];
                    $rlastName = $_POST['lastname'];
                    $rphone = $_POST['workPhone'];
                    $rdesignation = $_POST['designation'];
                }

               $sql = "INSERT INTO tblResourceDepotDetails (ObjectId,RefId,FName,LName,Organization,Designation,Email,WorkPhone)   " .
                        " VALUES(3,13,:rfirstname,:rlastName,:rorganization," .
                        ":rdesignation,:remail,:rphone)";
                  
                   $stmt = $conn->prepare($sql);
                    $stmt->bindParam(':rfirstname', $rfirstname);
                    $stmt->bindParam(':rlastName', $rlastName);
                    $stmt->bindParam(':rorganization', $rorganization);
                    $stmt->bindParam(':rdesignation', $rdesignation);
                    $stmt->bindParam(':remail', $remail);
                    $stmt->bindParam(':rphone', $rphone);
                //echo "query-->".$sql;

             //   if (!mysql_query($sql)) {
                    if(!$stmt->execute()) {
                    $resultMessage = "<font color=red size=2px>Data insertion failed..Please try again later\n</font>";
                    // $conn->closeConnection(); // closing the connection
                    // mysql_close();
                    // header('Location: ../back-end-error.php?resultMessage='.$resultMessage); 
                } else {
                   // $checkFlag = mysql_insert_id();
                   $checkFlag = $conn->lastInsertId();
                    // echo "lastinsertedid-->".$last_id;
                    // $eflag=EMAILFLAG;



                  //  mysql_close();
                    // $resultMessage = 'Thank you for your patience in filling in the details.Please check your mail for download link.';
                    // header('Location: ../Status.php?resultMessage='.$resultMessage); 
                    //  header('Location: ../library/index.php?refId='.$frmRefId); 
                }			

//}
            } catch (Exception $exc) {

                $exc->getMessage();
                $resultMessage = '<font color=red size=2px>' . $exc . '</font>';

                //  $conn->closeConnection(); // closing the connection
                mysql_close();
                header('Location: ../../back-end-error.php?resultMessage=' . $resultMessage);
            }
        }
        ?>
        <title>
            SCC Product Brief | Miracle
        </title>
         <?php include '../../config/Locations.php';?>
        <link href="../../css/bootstrap.min.css" rel="stylesheet">
        <link href="../../css/font-awesome.min.css" rel="stylesheet">
        <link href="../../css/main.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link href="../../css/default.css" rel="stylesheet" type="text/css">
        <link href="../../css/component.css" rel="stylesheet" type="text/css">
        <script src="../../js/ajaxUtil.js"></script>
        <script src="js/modernizr.custom.js"></script><!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
        <link href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css" rel="stylesheet">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?= AMAZON_URL ?>/images/favicon.ico" rel="shortcut icon">
        <script type="text/javascript" src="../../js/Validation.js"></script>
        <style>
            .modal-dialog
            {
                overflow:hidden !important;

            }

        </style>
         <style>
.overlay {
	background-color: rgba(0, 0, 0, 0.5) !important;
}

.modal-dialog {
	overflow: hidden !important;
}

ul.breadcrumb>li>a, ul.breadcrumb>li .divider {
	color: #fff;
}

ul.breadcrumb>li.active {
	color: #fff;
}

ul.breadcrumb>li>a:hover {
	color: #fff;
}

body {
	overflow-x: hidden;
}

body>section {
	padding-top: 0px !important;
}

.tinted-image {
	background: /* top, transparent red */ linear-gradient( rgba( 0, 0, 0,
		0.55), rgba( 0, 0, 0, 0.55)), /* your image */
                    url("../img/key.jpg");
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
}

.modal-dialog {
	overflow: hidden !important;
}

.section_bg {
	background: /* top, transparent red */ linear-gradient( rgba( 0, 0, 0,
		0.55), rgba( 0, 0, 0, 0.55)), /* your image */   

		
		
		url('<?= AMAZON_URL ?>/images/banners/NewIndustries/retail-logistics-1.png');
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
	/* background-position:0px 71px;*/
}
</style>
    </head><!--/head-->
<?php include '../../header.php'; ?>
    <body>
        <script type="text/javascript">
            $(window).load(function(){
                if(document.getElementById("isAuthorized").value==0){
                    $('#myModal1').modal('show');
                }else{
                    $('#myModal1').modal('hide');
                }
                /*$('.container').addClass('blur'); */
            });
            function doSubmit() {
                // alert("dgd");
                var loginId=document.getElementById("loginId").value;
                var password=document.getElementById("password").value;
                //  alert(loginId+""+password);
              
                
                if(loginId.trim().length!=0 && password.trim().length!=0 ){
                    checkEmployeeLogin(loginId,password);
                }else if(loginId.trim().length==0 && password.trim().length==0){
                    //document.getElementById("resultMessage").innerHTML="<font color='red'>Please enter details.</font>";
                    displayErrorMessage("Please enter details.");
                    //  alert("dgddddddaaaaaaaaa---------------------->");
                }else if(loginId.trim().length==0 && password.trim().length!=0){
                    //document.getElementById("resultMessage").innerHTML="<font color='red'>Please enter details.</font>";
                    displayErrorMessage("Please enter loginid.");
                    //  alert("dgddddddaaaaaaaaa---------------------->");
                }else if(loginId.trim().length!=0 && password.trim().length==0){
                    displayErrorMessage("Please enter password.");
                }
            }
       
        </script>
        <section>
		<div class="overlay section_bg">
			<div class=" container">



				<div class="row">
					<div class="col-sm-7 text-left">
						<br>
						<h1 class="micro" style="color: #ffffff;">
						  <strong>Enhanced MFT Visibility and Control with IBM Sterling Control Center</strong> </h1>

					</div>
					<div class="col-sm-5 text-right">
						<br> <br>
					 <li>
                            <a href="../../">Home</a>
                        </li>
                        <li>
                            <a href="../../library">Library</a>
                        </li>
                        <li class="active">SCC Product Brief
                        </li>
						</ul>
					</div>
				</div>
				<br>
			</div>
		</div>


	</section>
        <section class="container" id="about-us">
            <input type="hidden" name="isAuthorized" id="isAuthorized" value="<?= $checkFlag ?>"/>
            <input type="hidden" name="libId" id="libId" value="13"/>
            <input type="hidden" name="objectId" id="objectId" value="3"/>
            <br>
           
          
            <div class="row">
                
                <div class="col-sm-12">
                   <br>
                    <h5 class="heavy noMargin">The Challenge of Monitoring</h5>
                    <div class="row">
                        <div class="col-sm-3">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>
                    <p class="methodText">
                        In today's complex marketplace, an enterprise's key business processes are being driven by the flow of file-based information. As important as it is for these files to be transferred reliably and securely, it is also crucial for enterprise to better govern their file transfer solutions. Higher levels of compliance, risk mitigation policies, better governance and tougher security are all required for enhanced business value.
                    </p>
                </div>
                
            </div>
            <div class="row">
                
                <div class="col-sm-6">
                    <h5 class="heavy noMargin">IBM Sterling Control Center</h5>
                    <div class="row">
                        <div class="col-sm-6">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>
                    <p class="methodText">
                        IBM Sterling Control Center helps your organization to track your critical events across your B2B and MFT software for enhanced B2B governance. SCC helps you to implement business policies, and in turn alert your personnel when a policy is violated. This rule-based monitoring helps you to ensure that your SLA’s are not affected and also help you quickly identify issues through customizable reports and dashboards.
                    </p>
                    <p class="methodText">
                        With IBM Sterling Control Center, your teams will gain complete control and visibility into the transfer of sensitive corporate data across networks. Governing your MFT approach through SCC offers many benefits such as,
                    </p>
                    <div class="col-sm-12">
                    <div class="col-sm-12">
                    <ul class="methodText">
                        <li>Single Source Monitoring with Sterling Control Center Console
                        </li>
                        <li>Customized dashboards for different levels of monitoring
                        </li>
                        <li>GUI for displaying properties of managed servers, licensing and version information
                        </li>
                        <li>Complete control over user roles, security, Connect:Direct Instances and server views
                        </li>
                        <li>Policy-Violation alerts to ensure compliance to defined SLAs
                        </li>
                    </ul>
                    </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <br>
                    <br>
                    <img class="img-responsive" src="<?= AMAZON_URL ?>/images/library/scc-archictecture.png" alt="SCC-Architecture" title="SCC Architecture">
                </div>
                
            </div>
            <div class="row">
                
                <div class="col-sm-6">
                    <h6 class="heavy noMargin">Management, Automation and Visibility</h6>
                    <div class="row">
                        <div class="col-sm-6">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>
                     <div class="col-sm-12">
                    <div class="col-sm-12">
                    <ul class="methodText">
                        <li>Manage inventory of your Managed Servers including operating system and high level usage information
                        </li>
                        <li>Manage your file transfer activities with a wide-range of MFT solutions including Non-IBM products as well
                        </li>
                        <li>Automate/Integrate into your Enterprise Architecture using the Control Center RESTful APIs
                        </li><br><br>
                    </ul>
                    </div>
                    </div>
                    <h6 class="heavy noMargin">Audit and Compliance Functions</h6>
                    <div class="row">
                        <div class="col-sm-6">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>
                     <div class="col-sm-12">
                    <div class="col-sm-12">
                    <ul class="methodText">
                        <li>Consolidates and normalizes file transfer and process data into a single SQL DB
                        </li>
                        <li>License Key Management and Node Discovery
                        </li>
                        <li>Manage Connect:Direct configurations and provide Change Control
                        </li>
                        <li>Asses security and configuration compliance
                        </li>
                        <li>Control user access to specific data with Data Visibility Groups
                        </li>
                        <li>Embedded IBM Cognos Reporting for Activity Analysis, Proof of Transactions and Error Analysis
                        </li>
                    </ul>
                    </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <h6 class="heavy noMargin">Monitoring Service</h6>
                    <div class="row">
                        <div class="col-sm-6">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>
                    <div class="col-sm-12">
                    <div class="col-sm-12">
                    <ul class="methodText">
                        <li>Alerts and Notifications for incomplete (or) failed processes
                        </li>
                        <li>Events can be published to a queue for use by other systems such as IBM Business Monitor
                        </li>
                        <li>Ability to run automated commands in response to events
                        </li>
                        <li>Monitors environment status for components in your MFT/B2B infrastructure
                        </li>
                        <li>Monitors all business processes for file and document movement
                        </li><br>
                    </ul>
                    </div>
                    </div>
                    <h6 class="heavy noMargin">Business Rules</h6>
                    <div class="row">
                        <div class="col-sm-6">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>
                     <div class="col-sm-12">
                    <div class="col-sm-12">
                    <ul class="methodText">
                        <li>Define business rules to trigger actions based on events in your infrastructure
                        </li>
                        <li>Define and manage match criteria and trigger appropriate actions
                        </li>
                        <li>Create rules based on File Transfers and Processes and enable simplified options and defaulted data
                        </li>
                    </ul>
                    </div>
                    </div>
                </div>
                
            </div>
            <div class="row">
                
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-3">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>
                    <p class="methodText" style="font-style: italic">
                        Eswar Toleti<br>
                        Practice Manager - MFT and B2B Integration<br>
                        Miracle Software Systems, Inc.
                    </p>
                    <div class="row">
                        <div class="col-sm-3">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>

                    <!--     <a class="btn btn-primary btn-md" href="../resource/get-resource.php?refId=13&objectId=3">Download Product Brief</a> -->
                    <a class="btn btn-primary btn-md" href='../../download/DownloadDocs.php?refId=13&objectId=3'>Download
					Technical Article</a><br>


                    <br>
                    <hr>
                   
                </div>
                
            </div>
        </section><!--/#about-us-->
        <!-- new models start-->

        <div class="modal fade" id="myModal1" tabindex="-1" data-backdrop= "static" data-keyboard= "false">
            <div class="modal-dialog" style="margin-left: -280px;">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal"><i class="icon-xs-o-md"></i></button>
                    <div class="modal-header">


                        <h3 class="modal-title" id="memberModalLabel">
                            <strong>
                                <!--Enhanced EDI Transaction Visibility with Miracle's Supply Chain Visibility Portal -->
<?php echo $rDocTitle; ?>
                            </strong>
                        </h3>
                        <hr></div>
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="input-group">
                           <!--  <p class="methodText greyText">
                                  Increased visibility into your Supply Chain is a critical strategy for any enterprise aiming at increasing efficiency and optimizing costs. The importance of visibility into your transactional flows only increases when you have global supply chain networks with increasing trading partner numbers. Miracle's Supply Chain Visibility Portal provides complete visibility into your Order-to-Cash and Procure-to-Pay cycles. Through the various roles and modules available in the portal, you can use meaningful and enriched transactional data to track and trace the exchange of your EDI documents. 
                                   </p>
                                  <p class="methodText greyText">
                                   As our B2Bi and MFT experts give able guidance on how our Supply Chain Visibility Portal can help Global Enterprises gain critical visibility and control of their EDI Transactions. A live demo, architectural discussions followed by some great success stories make this a session that you do not want to miss. 
                                  </p> -->
<?php echo $rDocLongDesc; ?>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <hr>
                        <div class="row noMargin">

                            <div class="col-sm-6"> <a href="../library/index.php"><button type="button" class="btn btn-primary col-sm-12 "   >Go to Library</button></a></div>
                            <div class="col-sm-6">
                                <button type="button" class="btn btn-primary col-sm-12" class="md-close" data-toggle="modal" data-target="#myModal2" data-dismiss="modal">Access</button></div>

                        </div>


                    </div>
                </div>
            </div>
        </div>


        <!--MODAL CODE PREV-->

        <!-- [ Modal #2 ] -->
        <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false" data-keyboard="false" data-backdrop="static">
            <div class="modal-dialog" style="margin-left: -280px;">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal"><i class="icon-xs-o-md"></i></button>
                    <div class="modal-header">
                        <ul class="nav nav-tabs modal-title">

                            <li class="active">
                                <a data-toggle="tab" href="#sign-in-for-access"><h6><strong>Sign Up </strong></h6></a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#emplyolee-sign-in"><h6><strong>Employee Sign In</strong></h6></a>
                            </li>
                        </ul>
                    </div>
                    <div class="modal-body noMargin">
                        <div class="tab-content">
                            <div class="tab-pane active " id="sign-in-for-access">

                                <br>

                                <form method="post" action="<?php $_PHP_SELF ?>" id="myForm" >
                                    <div class="row">
                                        <!--copy 1 from contact first row starts-->
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input class="form-control col-sm-12" id="firstname" name="firstname" placeholder="First Name*" required="required" type="text" onchange="fieldLengthValidator(this);">
                                            </div>

                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input class="form-control col-sm-12" name="lastname" id="lastname" placeholder="Last Name*" required="required" type="text" onchange="fieldLengthValidator(this);">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Organization*" name="organization" id="organization" required="required" type="text" onchange="fieldLengthValidator(this);">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Designation*" name="designation" id="designation" required="required" type="text" onchange="fieldLengthValidator(this);">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Email*" name="email" id="email" required="required" type="text" onchange="return checkResourceEmail(this);">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Work Phone*" name="workPhone" id="workPhone" required="required" type="text" onchange="return formatPhone(this);" onblur="return validatenumber(this)" onkeypress="return isNumberKey(event)">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12"> 
                                            <div class="alert alert-danger" style="display:none" id="errorMsgDivEX">
                                                <button type="button" class="close" onclick="closeErrorMsgEx()" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <strong><span id="resultMessageEX">Invalid details!!</span></strong> 
                                            </div>                        
                                        </div>
                                    </div>
                                    <!--copy 1 from contact first row ends-->
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <button class="btn btn-primary col-sm-12" id="btnSubmit" name="btnSubmit" tabindex="12" type="submit"> Submit </button>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                                <div class="modal-footer noMargin" >
                                    <p class="methodText greyText">
                                        The given information will not be used or be distributed to any sources and will be used only for User Authentication. Miracle has copyrights and is authorized to use and circulate all the resources which are being provided to you.
                                    </p> <br>



                                    <div class="row">

                                        <div class="col-sm-6"><button type="button" class="btn btn-primary col-sm-12" class="md-close" data-toggle="modal" data-target="#myModal1" data-dismiss="modal" style="margin-left:-9px;"><i class="fa fa-arrow-left" ></i> &nbsp; Back to Description</button></div>
                                        <div class="col-sm-6"><a href="../library/index.php"><button class="btn btn-primary col-sm-12"> &nbsp; Back To Library <span> <i class="fa fa-arrow-right" ></i> </span></button></a></div>
                                    </div>
                                </div>
                            </div>  <!--first tab ends-->

                            <div class="tab-pane " id="emplyolee-sign-in">
                                <br>
                                <form id="employeeLoginForm" method="post" action="#">
                                    <p class="methodText">
                                        You must be a Miraclite to gain access to this. Please validate yourself using your Miracle credentials for further access.
                                    </p> <br>
                                    <div class="row ">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input class="form-control" id="loginId" name="loginId" placeholder="LoginId*" required="required" type="text" onkeydown="return enableLoginWhenEnter(event);">
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <input class="form-control" id="password" name="password" placeholder="Password*" required="required" type="password" onkeydown="return enableLoginWhenEnter(event);">
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12"> 
                                            <div class="alert alert-danger" style="display:none" id="errorMsgDiv">
                                                <button type="button" class="close" onclick="closeErrorMsg()" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <strong><span id="resultMessage">Invalid details!!</span></strong> 
                                            </div>                        
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <!--<button class="btn btn-primary col-sm-12" >Log In</button>-->
                                               <!-- <span id="resultMessage"></span>
                                                <div class="row"><span id="loading" style="display: none"><font color="red" size="3px">Loading please wait...</font></span></div>-->
                                                <!-- <button class="btn btn-primary col-sm-12" >Log In</button> -->
                                                <!-- <button type="button" class="btn btn-primary col-sm-12" name="btnLoginSubmit" id="btnLoginSubmit" onclick="doSubmit();">
                                                     Log In 
                                                 </button> -->
                                                <button type="button" class="btn btn-primary col-md-12" data-loading-text="<i class='fa fa-spinner fa-spin '></i> loading..." style="margin-left:5px;" name="btnLoginSubmit" id="btnLoginSubmit" onclick="doSubmit();" tabindex="3">Login</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 noMargin">
                                            <p class="methodText">Forgot password!<a href="../forgot-password.php" class="linkText"><strong> Click here.</strong></a></p> 
                                        </div>
                                        <div class="col-sm-6"></div>
                                    </div> 
                                </form> 
                                <div class="modal-footer">

                                    <div class="row">

                                        <div class="col-sm-6"><button type="button" class="btn btn-primary col-sm-12" class="md-close" data-toggle="modal" data-target="#myModal1" data-dismiss="modal" style="margin-left:-9px;"><i class="fa fa-arrow-left" ></i> &nbsp; Back to Description</button></div>
                                        <div class="col-sm-6"><a href="../library/index.php"><button class="btn btn-primary col-sm-12"> &nbsp; Back To Library  <span> <i class="fa fa-arrow-right" ></i> </span></button></a></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- new models end--> 
<?php include '../../footer.php'; ?>
    </body>
</html>