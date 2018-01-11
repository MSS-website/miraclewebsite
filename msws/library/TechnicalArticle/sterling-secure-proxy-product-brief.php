<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta content="" name="description">
<meta content="" name="author">
        <?php
								// require '../config/DbController.php';
								require '../../config/general.php';
								// $conn = new DbController();
								require '../../config/ConnectionProvider.php';
								
								$rDocTitle = '';
								$rDocType = '';
								$rDocLongDesc = '';
								$resultMessage = '';
								$checkFlag = 0;
								try {
									
									// $conn->connectToDatabase();
									// $conn->selectDatabase();
									// $reventId = isset($_GET["eventId"]) ? $_GET["eventId"] : '-1';
									$selectQuery = "SELECT DocTitle,DocType,DocLongDesc FROM tblWebDownloadsLines WHERE Id=14";
									$stmt = $conn->prepare ( $selectQuery );
									$stmt->execute ();
									$rows = $stmt->rowCount ();
									// if (mysql_num_rows($result) > 0) {
									if ($rows > 0) {
										if ($row = $stmt->fetch ( PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT )) {
											// $row = mysql_fetch_row($result);
											$rDocTitle = $row [0];
											$rDocType = $row [1];
											$rDocLongDesc = $row [2];
										}
									}
								} catch ( Exception $exc ) {
									
									$exc->getMessage ();
									$resultMessage = '<font color=red size=2px>' . $exc . '</font>';
									
									header ( 'Location: ../../back-end-error.php?resultMessage=' . $resultMessage );
									// $conn->closeConnection(); // closing the connection
								}
								// -------------------
								if (isset ( $_POST ['btnSubmit'] )) {
									
									try {
										
										// $conn->connectToDatabase();
										if (! get_magic_quotes_gpc ()) {
											// $rrefId = addslashes ($_POST['refId']);
											// $robjectId = addslashes ($_POST['objectId']);
											$rfirstname = addslashes ( $_POST ['firstname'] );
											$remail = addslashes ( $_POST ['email'] );
											$rorganization = addslashes ( $_POST ['organization'] );
											$rlastName = addslashes ( $_POST ['lastname'] );
											$rphone = addslashes ( $_POST ['workPhone'] );
											$rdesignation = addslashes ( $_POST ['designation'] );
										} else {
											// $rrefId = $_POST['refId'];
											// $robjectId = $_POST['objectId'];
											$rfirstname = $_POST ['firstname'];
											$remail = $_POST ['email'];
											$rorganization = $_POST ['organization'];
											$rlastName = $_POST ['lastname'];
											$rphone = $_POST ['workPhone'];
											$rdesignation = $_POST ['designation'];
										}
										
										// $conn->selectDatabase();
										$sql = "INSERT INTO tblResourceDepotDetails (ObjectId,RefId,FName,LName,Organization,Designation,Email,WorkPhone)   " . " VALUES(3,14,:rfirstname,:rlastName,:rorganization," . ":rdesignation,:remail,:rphone)";
										
										$stmt = $conn->prepare ( $sql );
										$stmt->bindParam ( ':rfirstname', $rfirstname );
										$stmt->bindParam ( ':rlastName', $rlastName );
										$stmt->bindParam ( ':rorganization', $rorganization );
										$stmt->bindParam ( ':rdesignation', $rdesignation );
										$stmt->bindParam ( ':remail', $remail );
										$stmt->bindParam ( ':rphone', $rphone );
										// echo "query-->".$sql;
										
										// if (!mysql_query($sql)) {
										if (! $stmt->execute ()) {
											$resultMessage = "<font color=red size=2px>Data insertion failed..Please try again later\n</font>";
											// $conn->closeConnection(); // closing the connection
											// mysql_close();
											// header('Location: ../back-end-error.php?resultMessage='.$resultMessage);
										} else {
											// $checkFlag = mysql_insert_id();
											$checkFlag = $conn->lastInsertId ();
											// echo "lastinsertedid-->".$last_id;
											// $eflag=EMAILFLAG;
											
											// mysql_close();
											// $resultMessage = 'Thank you for your patience in filling in the details.Please check your mail for download link.';
											// header('Location: ../Status.php?resultMessage='.$resultMessage);
											// header('Location: ../library/index.php?refId='.$frmRefId);
										}
										
										// }
									} catch ( Exception $exc ) {
										
										$exc->getMessage ();
										$resultMessage = '<font color=red size=2px>' . $exc . '</font>';
										
										// $conn->closeConnection(); // closing the connection
										mysql_close ();
										header ( 'Location: ../../back-end-error.php?resultMessage=' . $resultMessage );
									}
								}
								?>
        <title>SSP Product | Miracle</title>
         <?php include '../../config/Locations.php';?>
        <link href="../../css/bootstrap.min.css" rel="stylesheet">
<link href="../../css/font-awesome.min.css" rel="stylesheet">
<link href="../../css/main.css" rel="stylesheet">
<link
	href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css"
	rel="stylesheet">
<link href="../../css/default.css" rel="stylesheet" type="text/css">
<link href="../../css/component.css" rel="stylesheet" type="text/css">
<script src="../../js/ajaxUtil.js"></script>
<script src="js/modernizr.custom.js"></script>
<!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
<link href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css"
	rel="stylesheet">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<link
	href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css"
	rel="stylesheet">
<link href="<?= AMAZON_URL ?>/images/favicon.ico" rel="shortcut icon">
<script type="text/javascript" src="../../js/Validation.js"></script>
<style>
.modal-dialog {
	overflow: hidden !important;
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
</head>
<!--/head-->
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
							<strong>Edge Security for Multi-Enterprise Data Exchanges using IBM Sterling Secure Proxy</strong>
						</h1>

					</div>
					<div class="col-sm-5 text-right">
						<br> <br>
						<ul class="breadcrumb pull-right">
							<li><a href="../../">Home</a></li>
							<li><a href="../../library">Library</a></li>
							<li class="active">SSP Product Brief</li>
						</ul>
					</div>
				</div>
				<br>
			</div>
		</div>


	</section>


	<section class="container">
		<input type="hidden" name="isAuthorized" id="isAuthorized"
			value="<?= $checkFlag ?>" /> <input type="hidden" name="libId"
			id="libId" value="14" /> <input type="hidden" name="objectId"
			id="objectId" value="3" /> <br>


		<div class="row">
<br>
			<div class="col-sm-12">
				<h5 class="heavy noMargin">Edge Security!!</h5>
				<div class="row">
					<div class="col-sm-3">
						<hr>
					</div>
					<!-- This is the divider line between the heading and the content -->
				</div>
				<p class="methodText">As global business become more and more
					interconnected, traditional organization boundaries are being
					redefined and the exchange of data across these boundaries is
					increasing rapidly. With such openness being created, a malicious
					"denial-of-service" (or) "man-in-the-middle" attack could cause
					terrible damage to your organization and in turn erode the trust of
					your partner network. We've found in our experience that internal
					networks and legacy systems are more than often vulnerable due to
					insufficient file transfer security measures.</p>
			</div>

		</div>
		<div class="row">

			<div class="col-sm-12">
				<h5 class="heavy noMargin">IBM Sterling Secure Proxy</h5>
				<div class="row">
					<div class="col-sm-3">
						<hr>
					</div>
					<!-- This is the divider line between the heading and the content -->
				</div>

				<p class="methodText">IBM Sterling Secure Proxy is an
					application-based proxy that protects your internal network from
					malicious attacks that may negatively impact your business
					processes, both internally and externally with your trading
					partners. With IBM SSP, partner connections are intercepted at the
					edge and once authenticated are transparently redirected to trusted
					connections within your enterprise.</p>
				<p class="methodText">Nowadays security experts are turning to Proxy
					Server based approaches to ensure that internal systems can
					authenticate requests, terminate sessions and encrypt data and
					systems. This is exactly what IBM Sterling Secure Proxy provides
					for your global enterprise.</p>
			</div>

		</div>
		<div class="row">

			<div class="col-sm-12">
				<center>
					<img width="100%"
						src="<?= AMAZON_URL ?>/images/library/ssp-architecture.png"
						alt="SSP-Architecture" title="SSP Architecture">
				</center>

			</div>
		</div>
		<div class="row">

			<div class="col-sm-12">
				<h5 class="heavy noMargin">Why Choose IBM SSP?</h5>
				<div class="row">
					<div class="col-sm-3">
						<hr>
					</div>
					<!-- This is the divider line between the heading and the content -->
				</div>

				<p class="methodText">IBM Sterling Secure Proxy offers a unique
					solution to your data exchange security problems, which is both
					simple and powerful. With SSP you can enable the Internet with
					perimeter security for securely transferring data instead of using
					dedicated lines.</p>
				<p class="methodText">
					<strong>The IBM Sterling Secure Proxy Solution offers,</strong>
				</p>

			</div>
		</div>
		<div class="row">

			<div class="col-sm-6">
				<div class="col-sm-12">
					<div class="col-sm-12">
						<ul class="methodText">
							<li>Access Authentication for restricting unauthorized access</li>
							<li>Supports Single-On for integration into your enterprise
								architecture</li>
							<li>Provides enhanced Edge Security with a Defense-In-Depth
								strategy</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="col-sm-12">
					<div class="col-sm-12">
						<ul class="methodText">
							<li>Rapid Trading Partner On-Boarding with Self-Service
								Management</li>
							<li>High Scalability in clustered models</li>
							<li>Secure Internet-based data exchange with your trading
								partners</li>
						</ul>
					</div>
				</div>
			</div>

		</div>

		<div class="row">

			<div class="col-sm-6">
				<h6 class="heavy noMargin">Firewall Navigation Best Practices</h6>
				<div class="row">
					<div class="col-sm-3">
						<hr>
					</div>
					<!-- This is the divider line between the heading and the content -->
				</div>
				<div class="col-sm-12">
					<div class="col-sm-12">
						<ul class="methodText">
							<li>Prevents inbound holes in the firewall</li>
							<li>Restricts storage of files, data and credentials in the DMZ
								to prevent rich targets</li>
							<li>Enforces external and internal security policies</li>
							<li>Establishes sessions from more-trusted to less-trusted zones</li><br><br>
						</ul>
					</div>
				</div>
				<h6 class="heavy noMargin">Application Proxy</h6>
				<div class="row">
					<div class="col-sm-3">
						<hr>
					</div>
					<!-- This is the divider line between the heading and the content -->
				</div>

				<div class="col-sm-12">
					<div class="col-sm-12">
						<ul class="methodText">
							<li>Resides in demilitarized zone for providing Edge Security</li>
							<li>Supports IBM Sterling Connect:Direct, IBM Sterling Connect
								Express, IBM Sterling B2B Integrator and IBM Sterling File
								Gateway</li>
							<li>Compatibility with multiple DMZs (or) Layered architecture</li>
							<li>Supports FTP, FTPS, HTTP, SSH/SFTP, PeSIT and Sterling
								Connect:Direct Protocols</li>
							<li>Ability to use FIPS 140-2 compliant data encryption module</li><br>
						</ul>
					</div>
				</div>
				<h6 class="heavy noMargin">Clustering and Scalability</h6>
				<div class="row">
					<div class="col-sm-3">
						<hr>
					</div>
					<!-- This is the divider line between the heading and the content -->
				</div>
				<div class="col-sm-12">
					<div class="col-sm-12">
						<ul class="methodText">
							<li>Central Configuration Manager for managing and scaling
								multiple engines running in the DMZ</li>
							<li>High Availability and Load Balancing with clustering provides
								operational continuity</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<h6 class="heavy noMargin">Perimeter Security</h6>
				<div class="row">
					<div class="col-sm-3">
						<hr>
					</div>
					<!-- This is the divider line between the heading and the content -->
				</div>
				<div class="col-sm-12">
					<div class="col-sm-12">
						<ul class="methodText">
							<li>Prevents direct communications between external and internal
								sessions by establishing secure sessions breaks in the DMZ using
								SSL (or) TSL</li>
							<li>Enables configurable error handling for violations through
								protocol inspection</li>
							<li>Provides protection against DoS attacks with sessions limits
								and data encryption</li><br>
						</ul>
					</div>
				</div>
				<h6 class="heavy noMargin">Authentication Services</h6>
				<div class="row">
					<div class="col-sm-3">
						<hr>
					</div>
					<!-- This is the divider line between the heading and the content -->
				</div>
				<div class="col-sm-12">
					<div class="col-sm-12">
						<ul class="methodText">
							<li>Customizable portal enables trading partners to self-service
								password management</li>
							<li>Easy integration with existing security infrastructure
								including Active Directory and Tivoli Databases</li>
							<li>Supports Single-Sign On which enables integration with
								existing enterprise architecture</li>
							<li>Multi-factor authentication provides strict control and
								authentication before being passed on to trusted zone</li>
							<li>Ability to authenticate based on User Credentials, IP
								Address, Digital Certificates, SSH Keys and RSA SecureID</li>
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
					</div>
					<!-- This is the divider line between the heading and the content -->
				</div>
				<p class="methodText" style="font-style: italic">
					Eswar Toleti<br> Practice Manager - MFT and B2B Integration<br>
					Miracle Software Systems, Inc.
				</p>
				<div class="row">
					<div class="col-sm-3">
						<hr>
					</div>
					<!-- This is the divider line between the heading and the content -->
				</div>

				<!--    <a class="btn btn-primary btn-md" href="../resource/get-resource.php?refId=14&objectId=3">Download Product Brief</a> -->
				<a class="btn btn-primary btn-md"
					href='../../download/DownloadDocs.php?refId=14&objectId=3'>Download
					Technical Article</a><br> <br>
				<hr>

			</div>

		</div>


	</section>
	<!-- new models start-->

	<div class="modal fade" id="myModal1" tabindex="-1"
		data-backdrop="static" data-keyboard="false">
		<div class="modal-dialog" style="margin-left: -280px;">
			<div class="modal-content">
				<button type="button" class="close" data-dismiss="modal">
					<i class="icon-xs-o-md"></i>
				</button>
				<div class="modal-header">


					<h3 class="modal-title" id="memberModalLabel">
						<strong> <!--Enhanced EDI Transaction Visibility with Miracle's Supply Chain Visibility Portal -->
                                <?php echo $rDocTitle; ?>
                            </strong>
					</h3>
					<hr>
				</div>
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

						<div class="col-sm-6">
							<a href="../library/index.php"><button type="button"
									class="btn btn-primary col-sm-12 ">Go to Library</button></a>
						</div>
						<div class="col-sm-6">
							<button type="button" class="btn btn-primary col-sm-12"
								class="md-close" data-toggle="modal" data-target="#myModal2"
								data-dismiss="modal">Access</button>
						</div>

					</div>


				</div>
			</div>
		</div>
	</div>


	<!--MODAL CODE PREV-->

	<!-- [ Modal #2 ] -->
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog"
		aria-labelledby="myModalLabel" aria-hidden="false"
		data-keyboard="false" data-backdrop="static">
		<div class="modal-dialog" style="margin-left: -280px;">
			<div class="modal-content">
				<button type="button" class="close" data-dismiss="modal">
					<i class="icon-xs-o-md"></i>
				</button>
				<div class="modal-header">
					<ul class="nav nav-tabs modal-title">

						<li class="active"><a data-toggle="tab" href="#sign-in-for-access"><h6>
									<strong>Sign Up </strong>
								</h6></a></li>
						<li><a data-toggle="tab" href="#emplyolee-sign-in"><h6>
									<strong>Employee Sign In</strong>
								</h6></a></li>
					</ul>
				</div>
				<div class="modal-body noMargin">
					<div class="tab-content">
						<div class="tab-pane active " id="sign-in-for-access">

							<br>

							<form method="post" action="<?php $_PHP_SELF ?>" id="myForm">
								<div class="row">
									<!--copy 1 from contact first row starts-->
									<div class="col-sm-6">
										<div class="form-group">
											<input class="form-control col-sm-12" id="firstname"
												name="firstname" placeholder="First Name*"
												required="required" type="text"
												onchange="fieldLengthValidator(this);">
										</div>

									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<input class="form-control col-sm-12" name="lastname"
												id="lastname" placeholder="Last Name*" required="required"
												type="text" onchange="fieldLengthValidator(this);">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<input class="form-control" placeholder="Organization*"
												name="organization" id="organization" required="required"
												type="text" onchange="fieldLengthValidator(this);">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<input class="form-control" placeholder="Designation*"
												name="designation" id="designation" required="required"
												type="text" onchange="fieldLengthValidator(this);">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<input class="form-control" placeholder="Email*" name="email"
												id="email" required="required" type="text"
												onchange="return checkResourceEmail(this);">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<input class="form-control" placeholder="Work Phone*"
												name="workPhone" id="workPhone" required="required"
												type="text" onchange="return formatPhone(this);"
												onblur="return validatenumber(this)"
												onkeypress="return isNumberKey(event)">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<div class="alert alert-danger" style="display: none"
											id="errorMsgDivEX">
											<button type="button" class="close"
												onclick="closeErrorMsgEx()" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
											<strong><span id="resultMessageEX">Invalid details!!</span></strong>
										</div>
									</div>
								</div>
								<!--copy 1 from contact first row ends-->
								<div class="row">
									<div class="col-sm-12">
										<div class="form-group">
											<button class="btn btn-primary col-sm-12" id="btnSubmit"
												name="btnSubmit" tabindex="12" type="submit">Submit</button>
										</div>
									</div>
								</div>

							</form>
							<div class="modal-footer noMargin">
								<p class="methodText greyText">The given information will not be
									used or be distributed to any sources and will be used only for
									User Authentication. Miracle has copyrights and is authorized
									to use and circulate all the resources which are being provided
									to you.</p>
								<br>



								<div class="row">

									<div class="col-sm-6">
										<button type="button" class="btn btn-primary col-sm-12"
											class="md-close" data-toggle="modal" data-target="#myModal1"
											data-dismiss="modal" style="margin-left: -9px;">
											<i class="fa fa-arrow-left"></i> &nbsp; Back to Description
										</button>
									</div>
									<div class="col-sm-6">
										<a href="../library/index.php"><button
												class="btn btn-primary col-sm-12">
												&nbsp; Back To Library <span> <i class="fa fa-arrow-right"></i>
												</span>
											</button></a>
									</div>
								</div>
							</div>
						</div>
						<!--first tab ends-->

						<div class="tab-pane " id="emplyolee-sign-in">
							<br>
							<form id="employeeLoginForm" method="post" action="#">
								<p class="methodText">You must be a Miraclite to gain access to
									this. Please validate yourself using your Miracle credentials
									for further access.</p>
								<br>
								<div class="row ">
									<div class="col-sm-6">
										<div class="form-group">
											<input class="form-control" id="loginId" name="loginId"
												placeholder="LoginId*" required="required" type="text"
												onkeydown="return enableLoginWhenEnter(event);">
										</div>
										<br>
										<div class="form-group">
											<input class="form-control" id="password" name="password"
												placeholder="Password*" required="required" type="password"
												onkeydown="return enableLoginWhenEnter(event);">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<div class="alert alert-danger" style="display: none"
											id="errorMsgDiv">
											<button type="button" class="close" onclick="closeErrorMsg()"
												aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
											<strong><span id="resultMessage">Invalid details!!</span></strong>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<!--<button class="btn btn-primary col-sm-12" >Log In</button>-->
											<!--   <span id="resultMessage"></span>
                                                <div class="row"><span id="loading" style="display: none"><font color="red" size="3px">Loading please wait...</font></span></div>-->
											<!-- <button class="btn btn-primary col-sm-12" >Log In</button> -->
											<!--<button type="button" class="btn btn-primary col-sm-12" name="btnLoginSubmit" id="btnLoginSubmit" onclick="doSubmit();">
                                                    Log In 
                                                </button> -->

											<button type="button" class="btn btn-primary col-md-12"
												data-loading-text="<i  class='fa fa-spinner fa-spin '>
												</i> loading..." style="margin-left:5px;"
												name="btnLoginSubmit" id="btnLoginSubmit"
												onclick="doSubmit();" tabindex="3">Login
											</button>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6 noMargin">
										<p class="methodText">
											Forgot password!<a href="../forgot-password.php"
												class="linkText"><strong> Click here.</strong></a>
										</p>
									</div>
									<div class="col-sm-6"></div>
								</div>
							</form>
							<div class="modal-footer">

								<div class="row">

									<div class="col-sm-6">
										<button type="button" class="btn btn-primary col-sm-12"
											class="md-close" data-toggle="modal" data-target="#myModal1"
											data-dismiss="modal" style="margin-left: -9px;">
											<i class="fa fa-arrow-left"></i> &nbsp; Back to Description
										</button>
									</div>
									<div class="col-sm-6">
										<a href="../library/index.php"><button
												class="btn btn-primary col-sm-12">
												&nbsp; Back To Library <span> <i class="fa fa-arrow-right"></i>
												</span>
											</button></a>
									</div>

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