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
									$selectQuery = "SELECT DocTitle,DocType,DocLongDesc FROM tblWebDownloadsLines WHERE Id=16";
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
										$sql = "INSERT INTO tblResourceDepotDetails (ObjectId,RefId,FName,LName,Organization,Designation,Email,WorkPhone)   " . " VALUES(3,16,:rfirstname,:rlastName,:rorganization," . ":rdesignation,:remail,:rphone)";
										
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
        <title>FAQ MQ | Miracle</title>
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
<script src="../../js/modernizr.custom.js"></script>
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
	<!-- Tab panes -->
	
	<section>
		<input type="hidden" name="isAuthorized" id="isAuthorized"
			value="<?= $checkFlag ?>" /> <input type="hidden" name="libId"
			id="libId" value="16" /> <input type="hidden" name="objectId"
			id="objectId" value="3" />
		<div class="overlay section_bg">
			<div class=" container">



				<div class="row">
					<div class="col-sm-7 text-left">
						<br>
						<h1 class="micro" style="color: #ffffff;"><strong>10 things that you need to
							know about IBM's new MQ Appliance</strong></h1>

					</div>
					<div class="col-sm-5 text-right">
						<br> <br>
						<ul class="breadcrumb pull-right">
							<li><a href="../../">Home</a></li>
							<li><a href="../../library">Library</a></li>
							<li class="active">FAQ - MQ</li>
						</ul>
					</div>
				</div>
				<br>
			</div>
		</div>


	</section>

	<!--/#title-->
	<section class="container" id="faqs">
		<div class="row">
			<br>
			<div class="col-sm-12">
				<ul class="faq unstyled">
					<li><span class="number">Q1</span>
						<div>
							<h6 class="heavy">What capabilities does the appliance have in
								terms of memory?</h6>
							<p class="methodText">The MQ Appliance has 2 on-board discs,
								which adds up to about 1 TB of usable memory for your messages
								on each disc which is RAID enabled for replication of 1 disc on
								to the RAID copy disc. SSD and Flash based memory is not
								available on the appliance due to the heavy writing load that is
								expected with a messaging appliance. Higher amounts of storage
								for logging data can be provided using fiber channels. The
								appliance also supports only circular logging but does not
								support linear logging.
						
						</div></li>
					<li><span class="number">Q2</span>
						<div>
							<h6 class="heavy">What are the pricing models for the appliance?
							</h6>
							<p class="methodText">The MQ Appliance comes in 2 physical form
								factors, the MQ M2000 A and the MQ M2000 B. Both the appliances
								consist of the same features in terms of deployment, security
								and messaging. The major difference between the low-cost M2000 B
								and the high-cost M2000 A is the number of processor cores,
								which means that the workload capability is reduced for the B
								appliance.</p>
						</div></li>
					<li><span class="number">Q3</span>
						<div>
							<h6 class="heavy">Can applications and agents be run on a MQ
								Appliance?</h6>
							<p class="methodText">No, Applications cannot be run (or)
								deployed on a MQ Appliance. The appliance follows a Hub Pattern,
								which means that any application that wants to connect to the
								appliance must connect as a remote client. It is not possible to
								run agents such as MQ agents, MFT agents and monitoring agents
								as well on the appliance and they must all be used as remote
								clients to ensure messaging, file transfer and monitoring
								capabilities. This ensures that the workload of the appliance is
								all allocated to the messaging aspects.</p>
						</div></li>
					<li><span class="number">Q4</span>
						<div>
							<h6 class="heavy">Can we use an MQ Appliance in collaboration
								with existing MQ deployments?</h6>
							<p class="methodText">The MQ Appliance is not disruptive to
								existing MQ deployments and can be integrated seamlessly with
								your existing MQ networks and clusters. The MQ Appliance runs MQ
								v8 firmware but it has the capability to connect with lower
								version MQ Deployments in your network.</p>
						</div></li>
					<li><span class="number">Q5</span>
						<div>
							<h6 class="heavy">Is it recommended to deploy the appliance in
								the DMZ like a Data Power Appliance?</h6>
							<p class="methodText">No, this is not recommended for your MQ
								Appliance deployment as even though the appliance is based on
								IBM’s proven Data Power Appliance hardware, the MQ software
								built on top is not suited and designed for DMZ deployments.
								Also it is to be noted that the MQ appliance cannot be
								configured to act as a Data Power appliance.</p>
						</div></li>
					<li><span class="number">Q6</span>
						<div>
							<h6 class="heavy">Can we use the MQ Appliance for Managed File
								Transfer activities?</h6>
							<p class="methodText">Yes, the MQ Appliance is still capable of
								handling MFT activities, but a MFT agent cannot be deployed on
								the appliance and files cannot be stored on the appliance. All
								file data (contents) is transferred across the network as MQ
								Messages, and remote MFT agents are deployed at end-points where
								the files are present. This helps to still maintain the managed
								quality of file transfer using the appliance.</p>
						</div></li>
					<li><span class="number">Q7</span>
						<div>
							<h6 class="heavy">Is a shared disk required to provide High
								Availability for messaging with the appliance?</h6>
							<p class="methodText">No, the MQ Appliance comes with High
								Availability out-of-the-box and there is no shared file system
								(or) disk requirement for this. The appliance pair is configured
								for automatic failover for HA Queue Managers and also supports
								manual failover during rolling out upgrades. Replication is
								synchronous over the Ethernet(For 100% Fidelity) and it can be
								routed as well but this is not intended for long distances.</p>
						</div></li>
					<li><span class="number">Q8</span>
						<div>
							<h6 class="heavy">How many Queue Managers can be run on an
								appliance?</h6>
							<p class="methodText">You can run as many queue managers as you
								would like on a MQ Appliance, but it is advised to run only
								single-digit queue managers to make sure that you gain optimum
								performance and the highest performance from your MQ Appliance.
							</p>
						</div></li>
					<li><span class="number">Q9</span>
						<div>
							<h6 class="heavy">Are the Paired Appliances used in a Master-Slave configuraton?</h6>
							<p class="methodText">The appliances need not be used in a
								Master-Slave configuration, and can both be used as Masters
								while providing failover options for their paired appliance.
								Each paired appliance can have its own unique Queue Managers
								running on it with replicated queue managers sitting on the
								other pair. Whenever one of the appliances fails, all the queue
								managers are activated on the paired second appliance.</p>
						</div></li>
					<li><span class="number">Q10</span>
						<div>
							<h6 class="heavy">How are firmware updates made to the appliance?</h6>
							<p class="methodText">All firmware updates are made through IBM
								certified firmware updates, which will be sent as single fix
								pack updates. These fix packs help to ensure a singular approach
								to firmware updates and make the appliance a locked-down
								version, which means agents, files (or) applications cannot be
								loaded onto the appliance. With this approach, it helps to
								ensure that the appliance has a single-always-updated image.</p>
						</div></li>

				</ul>
				<div class="row">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-3">
								<hr>
							</div>
							<!-- This is the divider line between the heading and the content -->
						</div>
						<p class="methodText" style="font-style: italic">
							<strong> Chanakya Lokam <br> Director : Marketing and Innovation<br></strong>
							Miracle Software Systems, Inc. <br> March 25th, 2015
						</p>
						<div class="row">
							<div class="col-sm-3">
								<hr>
							</div>
							<!-- This is the divider line between the heading and the content -->
						</div>

						<!-- <a href="#"><button class="btn btn-primary btn-md" type="button">Download Product Brief</button></a> -->


						<!--     <a class="btn btn-primary btn-md" href="../resource/get-resource.php?refId=16&objectId=3">Download Product Brief</a>  -->
						<a class="btn btn-primary btn-md"
							href='../../download/DownloadDocs.php?refId=16&objectId=3'>Download Technical Article</a><br> <br> <br>
						<hr>


					</div>
				</div>
	
	</section>
	<!--#faqs-->
	<br>
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
											<!--<span id="resultMessage"></span>
                                                            <div class="row"><span id="loading" style="display: none"><font color="red" size="3px">Loading please wait...</font></span></div>-->
											<!-- <button class="btn btn-primary col-sm-12" >Log In</button> -->
											<!--  <button type="button" class="btn btn-primary col-sm-12" name="btnLoginSubmit" id="btnLoginSubmit" onclick="doSubmit();">
                                                                  Log In 
                                                              </button> -->
											<button type="button" class="btn btn-primary col-md-12"
												data-loading-text="<i    class='fa fa-spinner fa-spin '>
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

