<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="description">
        <meta content="" name="author">
        <?php
     //   require '../config/DbController.php';
        require '../../config/general.php';
       // $conn = new DbController();
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
            $selectQuery = "SELECT DocTitle,DocType,DocLongDesc FROM tblWebDownloadsLines WHERE Id=15";
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

              //  $conn->connectToDatabase();
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

              //  $conn->selectDatabase();
              $sql = "INSERT INTO tblResourceDepotDetails (ObjectId,RefId,FName,LName,Organization,Designation,Email,WorkPhone)   " .
                        " VALUES(3,15,:rfirstname,:rlastName,:rorganization," .
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
            WESB to IIB Migration | Miracle
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
						<h1 class="micro" style="color: #ffffff;"><strong>WESB to IIB Migration  <br>The Future is Here </strong></h1>

					</div>
					<div class="col-sm-5 text-right">
						<br> <br>
						<ul class="breadcrumb pull-right">
							<li>
                            <a href="../../">Home</a>
                        </li>
                        <li>
                            <a href="../../library">Library</a>
                        </li>
                        <li class="active">WESB-to-IIB
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
            <input type="hidden" name="libId" id="libId" value="15"/>
            <input type="hidden" name="objectId" id="objectId" value="3"/>
            <br>
           
           
            <div class="row">
                <div class="col-sm-12">
                  <br>
                    <h5 class="heavy noMargin">WESB + MB = IIB
                    </h5>
                    <div class="row">
                        <div class="col-sm-3">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>
                    <p class="methodText">
                        For any enterprise that wants to become connected yet flexible, an ESB is always a must to ensure that all its parts are talking with each other in a scalable model. Putting connectivity as a major factor for an enterprises excellence, IBM has brought together WebSphere MB and its own Enterprise Service Bus to deliver a universal integration backbone, IBM Integration Bus. Through IBM, IIB is an enterprise that can experience the best-of-both worlds with enhanced functionality.
                    </p> 
                    <h5 class="heavy noMargin">IBM’s Connectivity Road Map</h5>
                    <div class="row">
                        <div class="col-sm-3">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>
                    <p class="methodText">
                        With that being taken into consideration, IBM has announced the end of support for WebSphere ESB by April 2018, which means the time is now ripe to set the tone for migration to a much more powerful, future-oriented and universal solution for your connected enterprise. With IBM Integration Bus, IBM’s endeavor to enable enterprise connectivity through a single integration solution has come true.
                    </p>
                </div>     
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <p class="methodText">   <strong>Is the transition to IIB smooth?</strong></p>

                    <p class="methodText">
                        Absolutely! IBM is even giving customers free transfer options for your WESB licenses, along with the WESB Conversion Tool which ensures that you have a quick, seamless and peaceful migration to IBM Integration Bus.
                    </p>
                    <p class="methodText">   <strong>What are my license transfer options?</strong></p>

                    <p class="methodText">
                        With IBM Integration Bus being allowed in two unique models, you can opt for either one during your conversion process. You can either migrate to the original IIB model with comparable scalability and capability (or) choose the IIB Advanced mode with high availability (Active/Idle Parts) and advanced adapters and features included.
                    </p>
                    <p class="methodText">
                        <strong>   Option 1 </strong> : 1 PVU of WESB = 1 PVU of IIB (Scale Mode)
                    </p> 
                    <p class="methodText">
                        <strong>  Option 2 </strong> :2 PVU's of WESB = 1 PVU of IIB Advanced + 1 PVU of IIB Idle Stand-By
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <h5 class="heavy noMargin">
                        IIB = Lean + Agile
                    </h5>
                    <div class="row">
                        <div class="col-sm-3">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>
                    <p class="methodText">
                        IBM Integration Bus is the suture for enterprise connectivity and provides an universal integration foundation based on Enterprise Service Bus Technology. IIB helps to bring together a multitude of heterogeneous IT applications covering numerous platforms while also being supremely lean and agile. You can download the developer version, install the reduced footprint in minutes and deploy a service within 45 minutes. This converts to less than 30 clicks for your first service.
                    </p>

                    <h5 class="heavy noMargin">
                        Is the functionality comparable?
                    </h5>
                    <div class="row">
                        <div class="col-sm-3">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>
                    <p class="methodText">With IBM Integration Bus you get the future of integration with advanced adapters, improved features and ease of usage. Some of the most prominent functionality advantages being provided through IIB would be,
                    </p>
                  
                    <div class="col-sm-12">
                    <div class="col-sm-12">
                    <ul class="methodText">
                        <li>Patterns to enable reusable components instead of starting from blank screens</li>
                        <li>Included IBM Extreme Scale Technology based on Global Cache </li>
                        <li>Browser-based administration and Workload Management through policies</li>
                        <li>Easy Data Modeling of any message with DFDL</li>
                        <li>Advanced functional nodes which reduces the need for custom java code</li>
                        <li>Better positioning for future technology adoption (Mobile, Cloud, Social and Analytics)</li>
                    </ul>
                    </div>
                    </div>
                   </div>
                   </div>
                 <div class="row">
                 <div class="col-sm-12">
                    <h5 class="heavy noMargin">
                        A Lower Cost Model
                    </h5>
                    <div class="row">
                        <div class="col-sm-3">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>
                    <p class="methodText">
                        Even with the rich functionalities available, IBM Integration Bus provides you with a lower cost connectivity solution. Some of the main features of IIB which ensure this lower cost model are,
					  </p>
					 <div class="col-sm-12">
                    <div class="col-sm-12">
                    <ul class="methodText">
                        <li>No need for separate Integration Developer Toolkit licenses</li>
                        <li>Development and Unit Test Environments are free with IIB</li>
                        <li>High Availability with IIB Idle is priced 20% lower</li>
                        <li>Years of usage (WMB) and a great user community reduce your development difficulties</li>
                        <li>Operational Costs are reduced through a larger install base, proven technology and supreme resources</li>
                        <li>SAP, JDEdwards, Siebel and other business adapters are included along with IBM IIB Advanced</li>                   
                    </ul>
                    </div>
                    </div>
                  </div>
                  </div>
                  <div class="row">
                 <div class="col-sm-12">
                    <h5 class="heavy noMargin">
                        Your Migration Partner
                    </h5>
                    <div class="row">
                        <div class="col-sm-3">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>
                    <p class="methodText">
                        With numerous years of experience in the space of SOA and Connectivity, our teams are enabled to properly guide you through a seamless migration experience as you bring the power of IIB to your enterprise. We can help you in analyzing your existing WESB architecture through workshops and help you to understand the technology of IIB with a relative PoT. Contact us today to kick-start your migration from WESB to IIB.

                    </p>
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
                        <strong>
                            Maruti Kampli    <br>
                            Practice Manager Integration   <br>
                        </strong>
                        Miracle Software Systems, Inc. <br>
                        March 24th, 2015
                    </p>
                    <div class="row">
                        <div class="col-sm-3">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>
                    <!--  <a href="#"><button class="btn btn-primary btn-md" type="button">Download Product Brief</button></a> -->


                    <!--      <a class="btn btn-primary btn-md" href="../resource/get-resource.php?refId=15&objectId=3">Download Product Brief</a> -->
                    <a class="btn btn-primary btn-md" href='../../download/DownloadDocs.php?refId=15&objectId=3'>Download
					Technical Article</a><br>


                    <br>
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
                                              <!--  <span id="resultMessage"></span>
                                                <div class="row"><span id="loading" style="display: none"><font color="red" size="3px">Loading please wait...</font></span></div>-->
                                                <!-- <button class="btn btn-primary col-sm-12" >Log In</button> -->
                                                <!--  <button type="button" class="btn btn-primary col-sm-12" name="btnLoginSubmit" id="btnLoginSubmit" onclick="doSubmit();">
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
