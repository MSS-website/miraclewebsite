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
									$selectQuery = "SELECT DocTitle,DocType,DocLongDesc FROM tblWebDownloadsLines WHERE Id=19";
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
										$sql = "INSERT INTO tblResourceDepotDetails (ObjectId,RefId,FName,LName,Organization,Designation,Email,WorkPhone)   " . " VALUES(3,19,:rfirstname,:rlastName,:rorganization," . ":rdesignation,:remail,:rphone)";
										
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
        <title>IIB Best Practices | Miracle</title>
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
						<h1 class="micro" style="color: #ffffff;"><strong>Best Practices for 
					IBM Integration Bus Deployments</strong></h1>

					</div>
					<div class="col-sm-5 text-right">
						<br> <br>
						<ul class="breadcrumb pull-right">
							<li><a href="../../">Home</a></li>
							<li><a href="../../library">Library</a></li>
							<li class="active">IIB Best Practices</li>
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
			id="libId" value="19" /> <input type="hidden" name="objectId"
			id="objectId" value="3" /> <br>

		
		<div class="row">
<br>
			<div class="col-sm-12">
				<h5 class="heavy noMargin">Introduction</h5>
				<div class="row">
					<div class="col-sm-3">
						<hr>
					</div>
					<!-- This is the divider line between the heading and the content -->
				</div>
				<p class="methodText">
					This document presents some findings and recommendations concerning
					the use of <strong>IBM Integration Bus</strong>. These findings
					were developed from previous experiences of various integration
					projects. It covers the aspects of IIB development encompassing
					Message Set guidelines, Message Flow guidelines and Deployment
					guidelines.
				</p>
				<h5 class="heavy noMargin">Best Practices</h5>
				<div class="row">
					<div class="col-sm-3">
						<hr>
					</div>
					<!-- This is the divider line between the heading and the content -->
				</div>
				<h6 class="heavy noMargin">Understand the Interface Business
					Requirement</h6>
				<div class="row">
					<div class="col-sm-3">
						<hr>
					</div>
					<!-- This is the divider line between the heading and the content -->
				</div>
				<p class="methodText">
				
				
				<div class="col-sm-12">
					<div class="col-sm-12">
						<ul class="methodText">
							<li>The first key to successful Technical Design and Interface
								Development is a firm knowledge of the intended business logic
								and structure</li>
							<li>The source to the Business Requirement is to acquire a firm
								and defined Functional Specification. To some degree, the
								Functional Specification may undergo a few minor amendments
								while the task of Technical Specification is underway. However,
								it is expected that the Functional Specification has defined all
								the messages, components and processes that are required for the
								interface before the commencement of Technical Design</li>
							<li>There may be (and usually is) multiple components to each
								interface, and in IIB terms, that boils down to Adapters and
								Message Flows</li>
							<li>The Functional Specification is used to define where the
								Business Requirements are met in terms of various components. It
								is required to consider the various options available and create
								a design that is based on workable functionality of IIB, and to
								hopefully end up with a reasonable level of maintainability and
								performance as well</li>
						</ul>
						</p>
					</div>
				</div>
			</div>

		</div>
		<div class="row">

			<div class="col-sm-6">
				<h6 class="heavy noMargin">Common Control Handling</h6>
				<div class="row">
					<div class="col-sm-3">
						<hr>
					</div>
					<!-- This is the divider line between the heading and the content -->
				</div>
				<div class="col-sm-12">
					<div class="col-sm-12">
						<ul class="methodText">
							<li>The flow of each message through a IIB interface should be
								'Control Handled' for audit and logging purpose. For this
								reason, there is a requirement to have a 'Control Mechanism'
								in each and every message flow.</li>
							<li>It is recommended to have a 'Common Control Handling'
								routine/component that can be re-used extensively by all
								interfaces of the project.</li><br>
						</ul>
					</div>
				</div>
				<h6 class="heavy noMargin">Common Characteristics of Interfaces</h6>
				<div class="row">
					<div class="col-sm-3">
						<hr>
					</div>
					<!-- This is the divider line between the heading and the content -->
				</div>
				<div class="col-sm-12">
					<div class="col-sm-12">
						<ul class="methodText">
							<li>Each IIB Interface designed for the project should have
								certain characteristics, which are assumed to be common across
								all implemented interfaces</li>
							<li>These common characteristics generally refer to some common
								routines and flows or sub-flows, which are recommended to be
								used globally across all interfaces in that project</li>
						</ul>
					</div>
				</div>


			</div>
			<div class="col-sm-6">
				<h6 class="heavy noMargin">Common Error/Exception Handling</h6>
				<div class="row">
					<div class="col-sm-3">
						<hr>
					</div>
					<!-- This is the divider line between the heading and the content -->
				</div>
				<div class="col-sm-12">
					<div class="col-sm-12">
						<ul class="methodText">
							<li>Each IIB interface shall have a mechanism to handle
								errors/exceptions. These errors/exceptions refer to both Systems
								generated ones as well as User Generated ones.</li>
							<li>It is recommended to have a common Error Handling
								Procedure/Module to handle all errors/exceptions that arise
								during execution of an interface.</li>
							<li>This Procedure/Module shall be extensively re-used by all
								interfaces of the project.</li><br>
						</ul>
					</div>
				</div>
				<h6 class="heavy noMargin">Interface design Layout</h6>
				<div class="row">
					<div class="col-sm-3">
						<hr>
					</div>
					<!-- This is the divider line between the heading and the content -->
				</div>
				<div class="col-sm-12">
					<div class="col-sm-12">
						<ul class="methodText">
							<li>The IIB interfaces to be implemented should have certain
								common characteristics so that reuse of components is optimized</li>
							<li>The design of the message flows should adhere to one or more
								of the pattern templates laid out for the project</li>
						</ul>
					</div>
				</div>
			</div>


		</div>

		</div>
		<div class="row">

			<div class="col-sm-12">
				<h6 class="heavy noMargin">Common Routines and Sub-Flows</h6>
				<div class="row">
					<div class="col-sm-3">
						<hr>
					</div>
					<!-- This is the divider line between the heading and the content -->
				</div>
				<p class="methodText">Many message flows require to perform certain
					functions like re-formatting a date, getting current date, getting
					a unique identifier, etc which can be laid down as common routines
					for re-use by the interfaces. Also there may be certain processes
					like adding an RFH2 header to a message, etc which can also be laid
					down as common sub-flows for re-use by interfaces.</p>
				<p class="methodText">It is recommended to have a set of common
					routines and sub-flows for the project that can be extensively
					re-used by the interfaces. The contents of this set cannot be
					defined exhaustively at any point of time. This set shall
					continually be gaining members from time to time in order to meet
					requirements.</p>
			</div>

		</div>

		<div class="row">

			<div class="col-sm-6">
				<h6 class="heavy noMargin">Location of Integration Logic</h6>
				<div class="row">
					<div class="col-sm-3">
						<hr>
					</div>
					<!-- This is the divider line between the heading and the content -->
				</div>

				<div class="col-sm-12">
					<div class="col-sm-12">
						<ul class="methodText">
							<li>An interface is comprised of Adapters and Message Flows</li>
							<li>The integration logic is therefore contained wholly within
								the adapters and message flows</li>
							<li>The interface designer has the option of building any
								required integration logic in the adapters or message flows</li>
							<li>It is recommended that as much business logic as possible
								will be performed in message flows rather than in the adapters.
								In essence logic is only to be located in adapters if that is
								the only option for the interface.</li>
							<li>In other words, adapters will me made as simple as possible.
								The core of the business logic should be kept in WMB.</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-sm-6">
				<div class="col-sm-12">
					<div class="col-sm-12">
						
							<br />
							<br />
							<strong> The benefits of this approach are:</strong>
						
							<div class="col-sm-12" >
							<div class="col-sm-12">
							<ul class="methodText"><br/>
							<li>The interface solutions are pattern based, with the patterns
								represented by WMB message flows. Being pattern based, enhances
								reusability.</li>
							<li>Scaling and resilience is simplified with fewer complex
								components to consider.</li>
							<li>Maintenance requirements are easier to define and execute, by
								largely avoiding the need to change one component to accommodate
								the change in another requirement.</li>
						</ul>
						</div>
						</div>
					</div>
				</div>
			</div>


		</div>

		<div class="row">

			<div class="col-sm-12">
				<h6 class="heavy noMargin">Understand the Input and Output Messages
				</h6>
				<div class="row">
					<div class="col-sm-3">
						<hr>
					</div>
					<!-- This is the divider line between the heading and the content -->
				</div>
				<p class="methodText">It should be possible to examine the
					Functional Specification and determine what the input is, and what
					the output would be. From this standpoint, the WMB message flow can
					be regarded as the instrument to convert the input message into
					output message(s).</p>
			</div>

		</div>
		<div class="row">

			<div class="col-sm-6">
				<h6 class="heavy noMargin">Determine how many Message Flows are
					needed</h6>
				<div class="row">
					<div class="col-sm-3">
						<hr>
					</div>
					<!-- This is the divider line between the heading and the content -->
				</div>
				<div class="col-sm-12">
					<div class="col-sm-12">
						<ul class="methodText">
							<li>First, at an application system level, it must be determined
								how many flows will be required for an interface. Out of this
								determination, it will be possible to determine how many types
								of messages a flow must handle.</li>
							<li>Sometimes there is just one input message format and one
								output message format. Other times there are multiple messages
								for a given flow and there must be logic within the flow to sort
								them out.</li><br>
						</ul>
					</div>
				</div>
				<br>
				<h6 class="heavy noMargin">Message Routing within a flow</h6>
				<div class="row">
					<div class="col-sm-3">
						<hr>
					</div>
					<!-- This is the divider line between the heading and the content -->
				</div>
				<div class="col-sm-12">
					<div class="col-sm-12">
						<ul class="methodText">
							<li>Routing within the flow should be minimized where possible.
								When routing is required, then the rule about minimizing the
								number of nodes still applies.</li>
							<li>For a number of reasons, some message flows process more than
								one message type. In this case it is important to understand the
								distribution of these different message types and their
								importance so that the most critical or most frequent messages
								go through the cheapest path; i.e. the one with fewest and
								simplest nodes.</li>
							<li>When more than one message is processed in a flow, or when
								there is a requirement for dynamic logic inside a flow based on
								message content, there are at least two ways to direct the
								processing logic inside the flow.</li>
							<li>One way is through the use of RouteToLabel node. This node
								makes use of the Destination List array of the Local Environment
								Tree of a message flow. When the message arrives, the
								Destination List is populated according to the business
								requirement, and the RouteToLabel and Label nodes are used to
								direct subsequent processing.</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-sm-6">
				<h6 class="heavy noMargin">Complete the processing with as few nodes
					as possible</h6>
				<div class="row">
					<div class="col-sm-3">
						<hr>
					</div>
					<!-- This is the divider line between the heading and the content -->
				</div>
				<div class="col-sm-12">
					<div class="col-sm-12">
						<ul class="methodText">
							<li>The most fundamental recommendation to consider when writing
								a message flow is to be as concise as possible. There is a
								performance cost associated with passing through each of the
								built-in nodes of IIB, so it is best to write message flows in
								as few nodes as possible.</li>
							<li>In other words, there should be as few as possible nodes
								between the input and output formats for a given business
								requirement.</li><br>
						</ul>
					</div>
				</div>
				<h6 class="heavy noMargin">Sub-Flows</h6>
				<div class="row">
					<div class="col-sm-3">
						<hr>
					</div>
					<!-- This is the divider line between the heading and the content -->
				</div>
				<div class="col-sm-12">
					<div class="col-sm-12">
						<ul class="methodText">
							<li>Message Flows can be divided into SubFlows. Essentially, a
								Subflow is a sequence of nodes that begins with an Input node
								and ends in an Output node. The object of using SubFlows is that
								functions can be logically segregated in a way that increases
								maintainability and offers opportunity for reuse.</li><br>
						</ul>
					</div>
				</div>
				<h6 class="heavy noMargin">Transactionality and Persistence</h6>
				<div class="row">
					<div class="col-sm-3">
						<hr>
					</div>
					<!-- This is the divider line between the heading and the content -->
				</div>
				<div class="col-sm-12">
					<div class="col-sm-12">
						<ul class="methodText">
							<li>As a rule, all messages should be handled as a Transaction.</li>
							<li>In the Input, Output and Compute nodes, the Transactionality
								should always be set to ‘Automatic’. This practice allows
								the WebSphere MQ message attributes to control the
								Transactionality of the flow; i.e. if a message is read from a
								queue with an attribute of ‘Persistent’, IIB will supply the
								appropriate logging to guarantee the Transactionality of the
								message.</li>
							<li>It must be considered that overhead is incurred by making a
								message transactional. This is caused by the need to save all
								the data necessary to enable a roll back should a failure
								condition occur in a message flow.</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="row">

			<div class="col-sm-12">
				<h6 class="heavy noMargin">Use of CARDINALITY</h6>
				<div class="row">
					<div class="col-sm-3">
						<hr>
					</div>
					<!-- This is the divider line between the heading and the content -->
				</div>
				<p class="methodText">The use of the CARDINALITY function should be
					restricted to minimum as it requires the parser to process a large
					portion of the message and thereby hindering performance. This
					built-in function should not be used inside a loop unless it is
					inevitable.</p>
				<h6 class="heavy noMargin">ESQL REFERENCE Variable</h6>
				<div class="row">
					<div class="col-sm-3">
						<hr>
					</div>
					<!-- This is the divider line between the heading and the content -->
				</div>
				<div class="col-sm-12">
					<div class="col-sm-12">
						<ul class="methodText">
							<li>Reference variables can be used in ESQL to store a part or an
								entire message tree location and can be thought of as being
								similar to a C/C++ pointer to a message element. The use of
								REFERENCE variable is recommended in ESQL for two reasons:</li>
							<li>They reduce coding considerably, especially, when large
								message tree with deep hierarchy has been defined.</li>
							<li>They make ESQL more efficient when used appropriately.</li>
							<li>Reference variables can be used to store locations in any
								type of message tree (InputRoot, OutputRoot, Local Environment,
								Environment, etc).</li>

						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="row">

			<div class="col-sm-6">
				<h6 class="heavy noMargin">Backout Processing Considerations</h6>
				<div class="row">
					<div class="col-sm-3">
						<hr>
					</div>
					<!-- This is the divider line between the heading and the content -->
				</div>
				<div class="col-sm-12">
					<div class="col-sm-12">
						<ul class="methodText">
							<li>When an exception is thrown within a message flow and is not
								caught by inclusion of a TryCatch Node, The Input Node for the
								message flow catches it. If the catch terminal of the MQInput
								Node is connected, the message is propagated to this terminal
								and is processed according to the message flow logic.</li>
							<li>If the Catch terminal of the MQInput Node is not connected,
								the transaction is rolled back. If the message was read under a
								syncpoint the original remains in the queue but WebSphere MQ
								increments the MQMD Backoutcount.</li>
							<li>The MQInput Node then reads the message once again.</li>
							<li>The MQMD Backoutcount is examined before the message is
								processed again. If it is not zero then it implies that the
								message received by the message flow is a backed out message and
								the broker then performs backout processing.</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="col-sm-12">
					<div class="col-sm-12">
						<ul class="methodText">
							<br>
							<br>
							<li>If the MQMD backoutcount is less than the Backout Requeue
								Threshold attribute specified in the queue definition, the
								message is propagated through the output terminal of the MQInput
								Node for normal processing once again.</li>
							<li>If the MQMD backoutcount is not less than the Backout Requeue
								Threshold attribute specified in the queue definition, the
								message is propagated through the Failure terminal of the
								MQInput Node.</li>
							<li>If the Failure terminal is wired then it follows that path
								but, if it is not wired the Backout Requeue Name attribute is
								looked for and if a queue name found in this attribute, the
								message is put into that queue.</li>
							<li>If no name is specified in the Backout Requeue Name
								attribute, the message is written to the default Dead Letter
								Queue defined for the queue manager.</li>
							<li>If the message could not be written to the Dead Letter Queue
								then it remains in the Input Queue.</li>
						</ul>
					</div>
				</div>
			</div>

		</div>
		<div class="row">

			<div class="col-sm-12">
				<h6 class="heavy noMargin">IIB Message Flow Standard Unit Test
					Conditions</h6>
				<div class="row">
					<div class="col-sm-3">
						<hr>
					</div>
					<!-- This is the divider line between the heading and the content -->
				</div>

				<div class="col-sm-12">
					<div class="col-sm-12">
						<ul class="methodText">
							<li>The following are the standard Unit Test Conditions that
								should be considered by a developer while performing Unit Test
								on an interface:</li>
							<li>When a valid Test Data is passed through the message flow one
								or more output message (s) are created on the output queue (s).</li>
							<li>When an invalid Test Data is passed through the message flow
								the message is propagated to the error handling queue for error
								processing.</li>
							<li>All fields of the output message are of correct length and
								have been correctly formatted according to the requirements.</li>
							<li>Where the message has repeating fields or structure, the
								interface works correctly for both single and multiple instances
								of the field or structure.</li>
							<li>Where the message has an optional field or structure, the
								interface works correctly for both with and without the field or
								structure in the message.</li>
						</ul>
					</div>
				</div>

				<h5 class="heavy noMargin">Important Structures</h5>
				<div class="row">
					<div class="col-sm-3">
						<hr>
					</div>
					<!-- This is the divider line between the heading and the content -->
				</div>
				<h6 class="heavy noMargin">MQMD – Message Descriptor</h6>
				<div class="row">
					<div class="col-sm-3">
						<hr>
					</div>
					<!-- This is the divider line between the heading and the content -->
				</div>
				<p class="methodText">The MQMD structure contains the control
					information that accompanies the application data when a message
					travels from one queue to another.</p>
			</div>

		</div>
		<div class="row">

			<div class="col-sm-6">
				<table class="table table-hover table-striped">
					<thead>
						<tr>
							<th>Field</th>
							<th>Description</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>StrucId</td>
							<td>Structure Identifier</td>
						</tr>
						<tr>
							<td>Version</td>
							<td>Structure Version Number</td>
						</tr>
						<tr>
							<td>Report</td>
							<td>Option for report messages</td>
						</tr>
						<tr>
							<td>MsgType</td>
							<td>Message Type</td>
						</tr>
						<tr>
							<td>Expiry</td>
							<td>Message Lifetime</td>
						</tr>
						<tr>
							<td>Feedback</td>
							<td>Feedback or Reason Code</td>
						</tr>
						<tr>
							<td>Encoding</td>
							<td>Numeric Encoding of message Data</td>
						</tr>
						<tr>
							<td>CodedCharSetId</td>
							<td>Character set identifier of message data</td>
						</tr>
						<tr>
							<td>MsgId</td>
							<td>Message Identifier</td>
						</tr>
						<tr>
							<td>User Identifier</td>
							<td>User Identifier</td>
						</tr>
						<tr>
							<td>AccountingToken</td>
							<td>Accounting Token</td>
						</tr>
						<tr>
							<td>ApplIdentityData</td>
							<td>Application data relating to identity</td>
						</tr>
						<tr>
							<td>PutApplType</td>
							<td>Type of application that put the message</td>
						</tr>
						<tr>
							<td>PutApplName</td>
							<td>Name of application that put the message</td>
						</tr>
						<tr>
							<td>PutDate</td>
							<td>Date when message was put</td>
						</tr>
					</tbody>
				</table>
			</div>

			<div class="col-sm-6">
				<table class="table table-hover table-striped">
					<thead>
						<tr>
							<th>Field</th>
							<th>Description</th>
						</tr>
					</thead>

					<tr>
						<td>Format</td>
						<td>Format name of message data</td>
					</tr>
					<tr>
						<td>Priority</td>
						<td>Priority of message data</td>
					</tr>
					<tr>
						<td>Persistence</td>
						<td>Message Persistence</td>
					</tr>
					<tr>
						<td>MsgSeqNumber</td>
						<td>Sequence number of logical message within group</td>
					</tr>
					<tr>
						<td>CorrelId</td>
						<td>Correlation Identifier</td>
					</tr>
					<tr>
						<td>BackoutCount</td>
						<td>BackoutCounter</td>
					</tr>
					<tr>
						<td>ReplyToQ</td>
						<td>Name of Reply Queue</td>
					</tr>
					<tr>
						<td>ReplyToQMgr</td>
						<td>Name of Reply Queue Manager</td>
					</tr>
					<tr>
						<td>PutTime</td>
						<td>Time when message was put</td>
					</tr>
					<tr>
						<td>ApplOriginData</td>
						<td>Application Data relating to origin</td>
					</tr>
					<tr>
						<td>GroupId</td>
						<td>Group Identifier</td>
					</tr>

					<tr>
						<td>Offset</td>
						<td>Offset of data in physical message from the start of logical
							message</td>
					</tr>
					<tr>
						<td>MsgFlags</td>
						<td>Message Flags</td>
					</tr>
					<tr>
						<td>Original Length</td>
						<td>Length of original message</td>
					</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="row">

			<div class="col-sm-6">
				<h6 class="heavy noMargin">MQRFH2 – Rules and Formatting Header</h6>
				<div class="row">
					<div class="col-sm-3">
						<hr>
					</div>
					<!-- This is the divider line between the heading and the content -->
				</div>
				<p class="methodText">
					The MQRFH2 structure defines the layout of the rules and formatting
					header. This header can be used to send string data that has been
					encoded using an XML-like syntax. <br> It allows Unicode string to
					be transported without translations, and it can carry numeric
					data-types.
				</p>
				The following table summarizes the fields in the structure:
				<table class="table table-hover table-striped">
					<thead>
						<tr>
							<th>Field</th>
							<th>Description</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>StrucId</td>
							<td>Structure Identifier</td>
						</tr>
						<tr>
							<td>Version</td>
							<td>Structure Version Number</td>
						</tr>
						<tr>
							<td>StrucLength</td>
							<td>The total length of MQRFH2</td>
						</tr>
						<tr>
							<td>Encoding</td>
							<td>Numeric encoding of data</td>
						</tr>
						<tr>
							<td>CodedCharSetId</td>
							<td>Character set identifier of data</td>
						</tr>
						<tr>
							<td>Format</td>
							<td>Format Name of data</td>
						</tr>
						<tr>
							<td>Flags</td>
							<td>Flags</td>
						</tr>
						<tr>
							<td>NameValueCCSID</td>
							<td>Character set identifier of Name Value data</td>
						</tr>
						<tr>
							<td>NameValueLength</td>
							<td>Length of Name Value data</td>
						</tr>
						<tr>
							<td>NameValueData</td>
							<td>Name/Value data</td>
						</tr>

					</tbody>
				</table>
			</div>

			<div class="col-sm-6">
				<h6 class="heavy noMargin">Properties – Message Flow</h6>
				<div class="row">
					<div class="col-sm-3">
						<hr>
					</div>
				</div>

				<p class="methodText">The Properties tree is the first element of
					the message tree and holds information about the characteristics of
					the message.</p>
				<table class="table table-hover table-striped">
					<thead>
						<tr>
							<th>Field</th>
							<th>Description</th>
						</tr>
					</thead>
					<tbody>

						<tr>
							<td>MessageSet</td>
							<td>The Message Set Identifier</td>
						</tr>
						<tr>
							<td>MessageType</td>
							<td>The Message Name</td>
						</tr>
						<tr>
							<td>MessageFormat</td>
							<td>The Physical format of the message</td>
						</tr>
						<tr>
							<td>Encoding</td>
							<td>Numeric encoding of data</td>
						</tr>
						<tr>
							<td>CodedCharSetId</td>
							<td>Character set identifier of data</td>
						</tr>
						<tr>
							<td>Transactional</td>
							<td>Boolean flag to indicate Transactionality</td>
						</tr>
						<tr>
							<td>Persistence</td>
							<td>Boolean flag to indicate Persistency</td>
						</tr>
						<tr>
							<td>CreationTime</td>
							<td>The put time of the message</td>
						</tr>
						<tr>
							<td>ExpirationTime</td>
							<td>The expiration time of the message</td>
						</tr>
						<tr>
							<td>Priority</td>
							<td>The priority of the message</td>
						</tr>
						<tr>
							<td>ReplyIdentifier</td>
							<td>The reply identifier</td>
						</tr>
						<tr>
							<td>ReplyProtocol</td>
							<td>The reply protocol</td>
						</tr>

					</tbody>
				</table>
			</div>

		</div>
		<div class="row">

			<div class="col-sm-12">
				<h6 class="heavy noMargin">Debug Tracing</h6>
				<div class="row">
					<div class="col-sm-3">
						<hr>
					</div>
				</div>
				<p class="methodText">In the event of an error in a message flow, a
					debug level trace should be set up for the flow. This is done with
					the help of a set of commands to generate the debug trace file for
					diagnostics.</p>
				<div class="col-sm-12">
					<div class="col-sm-12">
						<ul class="methodText">
							<li>Open a command prompt window.</li>
							<li>Execute the command mqsichangetrace <Broker Name> -u -e <Execution
									Group Name> -l debug -f <Message Flow Name> -r</li>
							<li>Execute the message flow with the message that you want to
								trace.</li>
							<li>Execute the command mqsireadlog <Broker Name> -u -e <Execution
									Group Name> -l debug -f <Message Flow Name> -o <Temporary File
									Name></li>
							<li>Execute the command mqsiformatlog –i <Temporary File Name>
								-o <Trace File Name></li>
							<li>Open the generated Trace files in a text editor and perform
								diagnosis.</li>
						</ul>
					</div>
				</div>
			</div>

		</div>
		<div class="row">

			<div class="col-sm-12">

				<p class="methodText" style="font-style: italic">
					<strong> Bhaskar Gara <br> General Manager Integration <br>
					</strong> Miracle Software Systems, Inc. <br> April 6th, 2015
				</p>
				<div class="row">
					<div class="col-sm-3">
						<hr>
					</div>
					<!-- This is the divider line between the heading and the content -->
				</div>

				<!--     <a class="btn btn-primary btn-md" href="../resource/get-resource.php?refId=19&objectId=3">Download Product Brief</a> -->
				<a class="btn btn-primary btn-md"
					href='../../download/DownloadDocs.php?refId=19&objectId=3'>Download Technical Article</a><br> <br>
				<hr>


			</div>

		</div>
	</section>
	<!--/#about-us-->
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
									<div class="col-sm-10">
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
											<i class="fa fa-arrow-left"></i>Back to Description
										</button>
									</div>
									<div class="col-sm-6">
										<a href="../library/index.php"><button
												class="btn btn-primary col-sm-12">
												Back To Library <span> <i class="fa fa-arrow-right"></i>
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
											<!--  <span id="resultMessage"></span>
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
											data-dismiss="modal" style="margin-left: -12px;">
											<i class="fa fa-arrow-left" ></i>Back to Description
										</button>
									</div>
									<div class="col-sm-6">
										<a href="../library/index.php"><button
												class="btn btn-primary col-sm-12">
												Back To Library <span> <i class="fa fa-arrow-right"></i>
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