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
								$desc = '';
								$checkFlag = 0;
								try {
									
									// $conn->connectToDatabase();
									// $conn->selectDatabase();
									// $reventId = isset($_GET["eventId"]) ? $_GET["eventId"] : '-1';
									$selectQuery = "SELECT DocTitle,DocType,DocLongDesc FROM tblWebDownloadsLines WHERE Id=38";
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
										$sql = "INSERT INTO tblResourceDepotDetails (ObjectId,RefId,FName,LName,Organization,Designation,Email,WorkPhone)   " . " VALUES(2,38,:rfirstname,:rlastName,:rorganization," . ":rdesignation,:remail,:rphone)";
										
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
        <title>Next Gen EDI Processing and Archiving with Google, AWS
	and Sterling Integrator | Miracle</title>
         <?php include '../../config/Locations.php';?>
        <link href="../../css/bootstrap.min.css" rel="stylesheet">
<link href="../../css/font-awesome.min.css" rel="stylesheet">
<link href="../../css/main.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css"	rel="stylesheet">
<link href="../../css/default.css" rel="stylesheet" type="text/css">
<link href="../../css/component.css" rel="stylesheet" type="text/css">
<script src="../../js/ajaxUtil.js"></script>
<script src="../../js/modernizr.custom.js"></script>
<!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
<link
	href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css"
	rel="stylesheet">
<link href="<?= AMAZON_URL ?>/images/favicon.ico" rel="shortcut icon">
<link href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css"
	rel="stylesheet">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
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
            //   $('body').css('overflow','hidden');
            // $('body').css('position','fixed');
            function doSubmit() {
                // alert("dgd");
                var loginId=document.getElementById("loginId").value;
                var password=document.getElementById("password").value;
                //  alert(loginId+" -"+password);
              
                
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
						<h1 class="micro" style="color:#ffffff;">
							<strong> Next Gen EDI Processing and Archiving with
							Google, AWS and Sterling Integrator</strong>
						</h1>

					</div>
					<div class="col-sm-5 text-right">
						<br> <br> 
						<ul class="breadcrumb pull-right">
							<li><a href="../../">Home</a></li>
							<li><a href="../../library">Library</a></li>
							<li class="active">EDI Processing and Archiving</li>
						</ul>
					</div>
				</div>
				<br>
			</div>
		</div>


</section>
	<section class="container" id="about-us">
		<input type="hidden" name="isAuthorized" id="isAuthorized"
			value="<?= $checkFlag ?>" /> <input type="hidden" name="libId"
			id="libId" value="38" /> <input type="hidden" name="objectId"
			id="objectId" value="2" /> <br>
		



		<div class="row">
			<div class="col-sm-12">
				<h5 class="heavy noMargin">NextGen EDI Processing and Archiving with
					IBM Sterling Integrator,Google and AWS</h5>
				<div class="row">
					<div class="col-sm-3">
						<hr>
					</div>
					<!-- This is the divider line between the heading and the content -->
				</div>
				<div class="row">
					<div class="col-sm-5">
						<p class="methodText">With Digitalization truly underway,
							Enterprises of the Future are required to reinvent themselves to
							ensure that they stay competent. Business Integration with EDI is
							becoming more important to ever for organization to be able to
							scale their business networks rapidly. Along with this they need
							to be able to execute rapid changes to their EDI operations to
							ensure that they stay up to date with the users demands while
							still maintaining the automation, reliability and security of
							enterprise-class EDI operations.</p>
						<h5 class="heavy noMargin">The Business Challenge</h5>
						<div class="row">
							<div class="col-sm-7">
								<hr>
							</div>
							<!-- This is the divider line between the heading and the content -->
						</div>
						<p class="methodText">To battle the challenges of low reliability,
							security and inflated costs our experts came together to define a
							scenario where enterprises can leverage existing B2Bi
							infrastructure along with Next Generation technologies to enable
							business networks.</p>
					</div>
					<div class="col-sm-7">
						<img class="img-responsive"
							src="<?= AMAZON_URL ?>/images/library/aws-s3.png">
					</div>
				</div>



			</div>


		</div>
		<div class="row">

			<div class="col-sm-12">
				<p class="methodText">
					<strong>Technologies Used</strong>
				</p>
				<div class="row">

					<div class="col-sm-4">
						<div class="col-sm-12">
							<div class="col-sm-12">
								<ol class="methodText">
									<li>Amazon S3</li>
									<li>Amazon Glacier</li>
									<li>Google Drive (Gdrive)</li>
								</ol>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="col-sm-12">
							<div class="col-sm-12">
								<ol start="4" class="methodText">
									<li>Google APIs</li>
									<li>Google Mail (Gmail)</li>
									<li>IBM B2B Sterling Integrator</li>
								</ol>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
		<div class="row">

			<div class="col-sm-12">
				<p class="methodText">
					The technical scenario uses <strong>Sterling Business Processes </strong>and
					<strong>Automated Java Tasks</strong> to pick up EDI files (Random
					Formats) from <strong>Gmail</strong>. The EDI file is them
					immediately archived into <strong>Amazon S3</strong> and is also
					sent to the <strong>Sterling Integrator Translator Java Task</strong>
					for conversion into XML.
				</p>
				<p class="methodText">
					The converted XML file then gets pushed into <strong>Google Drive</strong>
					using Google’s APIs and is picked up by a Sterling Java Task once
					again to load back into the Back-End EDI system. In case of a
					failure in the processing of the EDI file, the archived EDI file is
					pulled back from Amazon S3 by <strong>Sterling Integrator</strong>
					and re-processed.
				</p>
				<p class="methodText">
					The archived EDI files will be moved to <strong>Amazon Glacier</strong>
					after a certain time period, to ensure longer storage of the EDI
					files at much more reduced prices.
				</p>
				<h5 class="heavy noMargin">The Enterprise Advantage</h5>
				<div class="row">
					<div class="col-sm-3">
						<hr>
					</div>
					<!-- This is the divider line between the heading and the content -->
				</div>
				<p class="methodText">Large Enterprises with hundreds of Trading
					Partners struggle to find ways to process their EDI documents in a
					reliable, secure and low cost manner. Through this scenario an
					enterprise can achieve the following advantages,</p>
				<p class="methodText">
				
				
				<div class="col-sm-12">
					<div class="col-sm-12">
						<ol class="methodText">
							<li>Low cost for archival through Cloud based Amazon S3 Storage
							
							<li>Archival Costs can be reduced by archiving files to Amazon
								Glacier automatically after defined time intervals</li>
							<li>Reliable EDI process with automatic (or) web GUI based EDI
								re-processing</li>
							<li>Ability to create Web/Mobile Dashboards for visibility into
								the EDI processing using the Amazon and Google APIs</li>
							<li>Enterprise Class Security provided by Google and Amazon for
								your EDI documents</li>

						</ol>
					</div>
				</div>
				</p>
			</div>

			<div class="col-sm-12">
				<h5 class="heavy noMargin" style="margin-top: 10px;">What is Amazon
					S3?</h5>
				<div class="row">
					<div class="col-sm-3">
						<hr>
					</div>
					<!-- This is the divider line between the heading and the content -->
				</div>
				<p class="methodText">
					<strong>Amazon Simple Storage Service (Amazon S3)</strong>,
					provides developers and IT teams with secure, durable,
					highly-scalable object storage. Amazon S3 is easy to use, with a
					simple web services interface to store and retrieve any amount of
					data from anywhere on the web. With Amazon S3, you pay only for the
					storage you actually use. There is no minimum fee and no setup
					cost.
				</p>
				<p class="methodText">Amazon S3 can be used alone or together with
					other AWS services such as Amazon Elastic Compute Cloud (Amazon
					EC2), Amazon Elastic Block Store (Amazon EBS), and Amazon Glacier,
					as well as third party storage repositories and gateways. Amazon S3
					provides cost-effective object storage for a wide variety of use
					cases including cloud applications, content distribution, backup
					and archiving, disaster recovery, and big data analytics.</p>
				<h5 class="heavy noMargin">Glacier Storage = The Longer The Cheaper
				</h5>
				<div class="row">
					<div class="col-sm-3">
						<hr>
					</div>
					<!-- This is the divider line between the heading and the content -->
				</div>
				<p class="methodText">
					<strong>Amazon Glacier</strong> is a secure, durable, and extremely
					low-cost storage service for data archiving and online backup.
					Customers can reliably store large or small amounts of data for as
					little as $0.01 per gigabyte per month, a significant savings
					compared to on-premises solutions. To keep costs low, Amazon
					Glacier is optimized for infrequently accessed data where a
					retrieval time of several hours is suitable.
				</p>
				<h5 class="heavy noMargin">The Cost Charts</h5>
				<div class="row">
					<div class="col-sm-3">
						<hr>
					</div>
					<!-- This is the divider line between the heading and the content -->
				</div>
				<p class="methodText">With no setup costs involved the costs for
					each of the services used above are insanely cheap for an
					enterprise and as the EDI processing numbers go up and the archival
					duration increases the prices seem even more reduced.</p>
				<h5 class="heavy noMargin">Google APIS</h5>
				<div class="row">
					<div class="col-sm-3">
						<hr>
					</div>
					<!-- This is the divider line between the heading and the content -->
				</div>
				<table class="table table-hover table-striped">
					<thead>
						<tr>
							<th>Service</th>
							<th>Setup Cost</th>
							<th>Free Range</th>
							<th>Premium range</th>
						</tr>
					</thead>
					<tr>
						<td>Google Drive API</td>
						<td>No</td>
						<td>500,000 Requests/Day</td>
						<td>No,Can request for more</td>
					</tr>
					<tr>
						<td>Google Mail API</td>
						<td>No</td>
						<td>1000,000,000</td>
						<td>No,Can request for more</td>
					</tr>
				</table>
				<h5 class="heavy noMargin">Amazon S3 and Glacier Storage</h5>
				<div class="row">
					<div class="col-sm-3">
						<hr>
					</div>
					<!-- This is the divider line between the heading and the content -->
				</div>
				<table class="table table-hover table-striped">
					<thead>
						<tr>
							<th>Storage</th>
							<th>Standard</th>
							<th>Reduced Redundancy</th>
							<th>Glacier</th>
						</tr>
					</thead>
					<tr>
						<td>First 1 TB</td>
						<td>$0.03 per GB</td>
						<td>$0.024 per GB</td>
						<td>$0.01 per GB</td>
					</tr>
					<tr>
						<td>Next 49 TB</td>
						<td>$0.0295 per GB</td>
						<td>$0.0236 per GB</td>
						<td>$0.01 per GB</td>
					</tr>
					<tr>
						<td>Next 450 TB</td>
						<td>$0.029 per GB</td>
						<td>$0.0232 per GB</td>
						<td>$0.01 per GB</td>
					</tr>
					<tr>
						<td>Next 500 TB</td>
						<td>$0.0285 per GB</td>
						<td>$0.0228 per GB</td>
						<td>$0.01 per GB</td>
					</tr>
					<tr>
						<td>Next 4000 TB</td>
						<td>$0.028 per GB</td>
						<td>$0.0224 per GB</td>
						<td>$0.01 per GB</td>
					</tr>
					<tr>
						<td>Next 5000 TB</td>
						<td>$0.0275 per GB</td>
						<td>$0.0220 per GB</td>
						<td>$0.01 per GB</td>
					</tr>
				</table>
				<h5 class="heavy noMargin">Amazon S3 and Glacier Requests</h5>
				<div class="row">
					<div class="col-sm-3">
						<hr>
					</div>
					<!-- This is the divider line between the heading and the content -->
				</div>
				<table class="table table-hover table-striped">
					<thead>
						<tr>
							<th>Requests</th>
							<th>Price</th>

						</tr>
					</thead>
					<tr>
						<td>PUT/COPY/POST/LIST</td>
						<td>$0.005 per 1,000 requests</td>

					</tr>
					<tr>
						<td>Glacier Archive and Restore</td>
						<td>$0.05 per 1,000 requests</td>

					</tr>
					<tr>
						<td>Delete Request</td>
						<td>Free</td>

					</tr>
					<tr>
						<td>GET and all other requests</td>
						<td>$0.004 per 10,000 requests</td>

					</tr>
					<tr>
						<td>Glacier Data Restores</td>
						<td>Free</td>

					</tr>
				</table>
			</div>

		</div>
		<div class="row">

			<div class="col-sm-12"></div>

		</div>

		<div class="row">

			<div class="col-sm-6">
				<div class="row">
					<div class="col-sm-5">
						<hr>
					</div>
					<!-- This is the divider line between the heading and the content -->
				</div>
				<p class="methodText">
					<strong> Srinivasa Aditya Mumani <br> B2Bi/EDI Developer <br>
					</strong> Miracle Software Systems, Inc. <br> July 22nd, 2015
				</p>

				<div class="row">
					<div class="col-sm-5">
						<hr>
					</div>
					<!-- This is the divider line between the heading and the content -->
				</div>


				<!--    <a href="../resource/get-resource.php?refId=82&objectId=2" class="btn btn-primary btn-md">Download Product Brief</a>  -->
				<a class="btn btn-primary btn-md"
					href='../../download/DownloadDocs.php?refId=38&objectId=2'>Download Technical Article</a><br> <br>
			</div>


			<div class="col-sm-6">
				<br>
				<p class="methodText">
					<strong> Venkat Aditya Chinni <br> Cloud and DevOps Associate –
						Miracle Labs <br>
					</strong> Miracle Software Systems, Inc. <br> July 22nd, 2015
				</p>
			</div>

		</div>

		<br>



		</div>
		<div class="col-sm-1"></div>
		</div>
	</section>
	<!--/#about-us-->

	<!-- new models start-->

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
											<!-- <span id="resultMessage"></span>
                                            <div class="row"><span id="loading" style="display: none"><font color="red" size="3px">Loading please wait...</font></span></div>-->
											<!-- <button class="btn btn-primary col-sm-12" >Log In</button> -->
											<!-- <button type="button" class="btn btn-primary col-sm-12" name="btnLoginSubmit" id="btnLoginSubmit" onclick="doSubmit();">
                                                 Log In 
                                             </button> -->
											<button type="button" class="btn btn-primary col-md-12"
												data-loading-text="<i   class='fa fa-spinner fa-spin '>
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
