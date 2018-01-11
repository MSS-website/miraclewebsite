<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="description">
        <meta content="" name="author">
        <?php
      //  require '../config/DbController.php';
        require '../config/general.php';
      //  $conn = new DbController();
         require '../config/ConnectionProvider.php';

        $rDocTitle = '';
        $rDocType = '';
        $rDocLongDesc = '';
        $resultMessage = '';
        $checkFlag = 0;
        try {
//
//            $conn->connectToDatabase();
//            $conn->selectDatabase();
            // $reventId = isset($_GET["eventId"]) ? $_GET["eventId"] : '-1';
            $selectQuery = "SELECT DocTitle,DocType,DocLongDesc FROM tblWebDownloadsLines WHERE Id=23";
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

            header('Location: ../back-end-error.php?resultMessage=' . $resultMessage);
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

                $sql = "INSERT INTO tblResourceDepotDetails (ObjectId,RefId,FName,LName,Organization,Designation,Email,WorkPhone)   " .
                        " VALUES(2,23,:rfirstname,:rlastName,:rorganization," .
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
                if (!$stmt->execute()) {
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
                //mysql_close();
                header('Location: ../back-end-error.php?resultMessage=' . $resultMessage);
            }
        }
        ?>
        <title>
            WBI to BPM Migration | Miracle
        </title>
       <?php include '../config/Locations.php';?>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/font-awesome.min.css" rel="stylesheet">
        <link href="../css/main.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link href="../css/default.css" rel="stylesheet" type="text/css">
        <link href="../css/component.css" rel="stylesheet" type="text/css">
        <script src="../js/ajaxUtil.js"></script>
        <script src="js/modernizr.custom.js"></script><!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
        <link href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css" rel="stylesheet">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?= AMAZON_URL ?>/images/favicon.ico" rel="shortcut icon">
        <script type="text/javascript" src="../js/Validation.js"></script>
        <style>
            .modal-dialog
            {
                overflow:hidden !important;

            }

        </style>
    </head><!--/head-->
<?php include '../header.php';?>
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
        <section class="container" id="about-us">
            <input type="hidden" name="isAuthorized" id="isAuthorized" value="<?= $checkFlag ?>"/>
            <input type="hidden" name="libId" id="libId" value="23"/>
            <input type="hidden" name="objectId" id="objectId" value="2"/>
            <br>
          
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-6 text-left">
                    <h1>
                        <strong>     WBI to BPM Migration </strong> <br>for Global Windows Retailer 
                    </h1>
                </div>
                <div class="col-sm-4 text-right">
                    <ul class="breadcrumb pull-right">
                        <li>
                            <a href="../">Home</a>
                        </li>
                        <li>
                            <a href="success.php">Success Stories</a>
                        </li>
                        <li class="active">WBI-to-BPM 
                        </li>
                    </ul>
                </div>
                <div class="col-sm-1"></div> 
            </div>
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-10">
                    <hr>
                    <h5 class="heavy noMargin">Customer Background
                    </h5>
                    <div class="row">
                        <div class="col-sm-3">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>
                    <p class="methodText">
                        Our customer is the largest manufacturer of windows and doors in North America and one of the top manufacturers in the world. They have a huge brand value in the window and patio industry, with numerous brands, services and products sold exclusively to retailers. Privately owned and founded in 1902, they are located in North America, South America, Europe, Asia and the Middle East with over 9000 employees.
                    </p> 
                    <h5 class="heavy noMargin">Technology Used</h5>
                    <div class="row">
                        <div class="col-sm-3">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>
                    <p class="methodText">
                        The following technologies were used in the BPM Migration process for the customer,
                    <ol>

                        <li>WebSphere Interchange Server v4.3</li>
                        <li>IBM WebSphere Process Server v8.5.5</li>
                        <li>IBM Integration Designer v8.5.5</li>
                        <li>Struts2</li>
                        <li>Infor ION (BAAN ERP)</li>
                        <li>IBM DB2 9.x</li>
                        <li>Oracle 11g</li>
                        <li>AIX (Production Environment)</li>
                        <li>Windows (Development Environment)</li>

                    </ol>
                    </p>
                </div>     
                <div class="col-sm-1"></div>
            </div>
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-10">
                    <h5 class="heavy noMargin">The Business Challenge</h5>     
                    <div class="row">
                        <div class="col-sm-3">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>
                    <p class="methodText">
                        Our customer receives an average of 150,000 faxes from their retail partner annually for special orders. These orders are then keyed into a Quoting Tool manually, which leads to order entry errors, misinterpretation and instability of the faxing infrastructure. When their exclusive retail partner changed their Quoting Tool, our customer also had to integrate with the new tool and receive orders in the form of EDI documents.
                    </p>
                    <p class="methodText">
                        The customer wanted to use BPM, IBM WebSphere Process Server in order to receive order details from their B2B system, and then orchestrate/transform/route them to the Quoting System for creating a quote. With BAAN 5.0 as their ERP, our team helped the customer migrate their ICS interfaces for applications specific to Manufacturing, with a new design in BPM v7.5.
                    </p>
                    <p class="methodText">
                        <strong> Some of the key challenges that they were facing with their existing system were,</strong> 
                    <ul>
                        <li>Performance issues with the existing legacy technology</li>
                        <li>Lack of scalability and flexibility for today’s Business Models</li>
                        <li>Dying skill sets and lack of support for the platform</li>
                        <li>Lack of skilled resources on the Legacy Technology for production support and enhancements</li>
                    </ul>

                    </p> 

                </div>
                <div class="col-sm-1"></div>
            </div>
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-10">
                    <h5 class="heavy noMargin">
                        The Solution
                    </h5>
                    <div class="row">
                        <div class="col-sm-3">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>
                    <p class="methodText">
                        Once the challenges were understood, our experts went deep into the customer's architecture to look at possible ways of modernizing the application and ensuring that they had a reliable system in place for all the future needs. Our team consisted of both offshore and onsite resources in a <strong> Hybrid Model</strong>, while following are our very own <strong> Rapid Integration Development Methodology.</strong>
                    </p>
                    <p class="methodText">The new environment that resulted after the modernization and re-engineering was built on IBM BPM 7.5 and which was later migrated to IBM BPM 8.5.5 to support new features.
                    </p>
                    <p class="methodText">The new BPM environment solution supported the following key features and enabled interaction with the various business systems and applications to achieve the business requirements.
                    <ul>
                        <li>Migrated 50+ ICS Interfaces to BPM BPEL Processes and mediation flows</li>
                        <li>Developed 10+ new BPEL Processes as part of business requirements</li>
                        <li>Custom Logging Framework</li>
                        <li>Exception Handling Framework</li>
                        <li>Custom BPM Scheduler to trigger BPEL processes in certain period</li>
                        <li>BPM Admin Portal to manage applications deployment</li>
                        <li>Configured BPM Servers in clustered environment with Golden Topology</li>
                    </ul>

                    </p>
                    <p class="methodText"> <strong>Some of the benefits that the customers achieved through our innovative services and efforts were,</strong></p>
                    <ul>

                        <li>Provided Functional and technical specification documents for future reference and training</li>
                        <li> Developed BPEL flows and mediation modules using BPM best practices, Data Access Pattern, Data Synchronization Pattern</li>
                        <li>Usage of Shared Libraries and Shared Adapters</li>
                        <li>Enabled Store-and-Forward feature wherever needed</li>
                        <li>Custom Logging Framework supported information logging at different logger levels and individual files associated with BPEL Process</li>
                        <li>Custom request and response logging of web service calls</li>
                        <li> <strong>Exception Handling Framework:</strong>BPEL Flow and Web Application </li>
                        <ol>
                            <li>Emailing exception notifications to the corresponding group to work on it</li>
                            <li>Custom web application allows user to update email id’s and email groups dynamically</li>
                            <li>User can dynamically update exception handling flow functionality to create failed events or terminate the flow when exception occurred</li>
                            <li>Pie charts to display exception per integration within the given time period. This screen helped production support team to understand which transaction was failing more</li>
                            <li>Exception history screen to check exception details within the given time period</li>

                        </ol>
                        </li>
                    </ul>

                    <p class="methodText"> <strong>BPM Admin Portal: </strong>Customized Web Application with Jython Scripts and property files</p>
                    <ol>

                        <li>List Resources</li>
                        <li>Install / Un-Install EAR Applications</li>
                        <li>Start / Stop Applications</li>
                        <li>Exporting J2C Activation Specifications and Connection Factories</li>
                        <li>Creating or Updating Resources</li>
                        <ul>

                            <li>Activation Specifications</li>
                            <li>Connection Factory</li>
                            <li>Authentication Alias</li>
                            <li>DataSource</li>
                            <li>SIB Queues</li>
                            <li>Web Service Endpoints</li>
                        </ul>

                    </ol>
                    <br>
                    <!--              <a href="#"><button class="btn btn-primary btn-md" type="button">Download Case Study</button></a>-->


                    <!--   <a class="btn btn-primary btn-md" href="../resource/get-resource.php?refId=23&objectId=2">Download Case Study</a>  -->
                    <a class="btn btn-primary" href='../download/DownloadDocs.php?refId=23&objectId=2'>Download Case Study</a><br>


                    <br><br><br>
                </div>
                <div class="col-sm-1"></div>
            </div>
        </section><!--/#about-us-->
        <!-- new models start-->

        <div class="modal fade" id="myModal1" tabindex="-1" data-backdrop= "static" data-keyboard= "false">
            <div class="modal-dialog">
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
            <div class="modal-dialog">
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

                                        <div class="col-sm-6"><button type="button" class="btn btn-primary col-sm-12" class="md-close" data-toggle="modal" data-target="#myModal1" data-dismiss="modal"><i class="fa fa-arrow-left" ></i> &nbsp; Back to Description</button></div>
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
                                                <input class="form-control" id="loginId" name="loginId" placeholder="loginId*" required="required" type="text" onkeydown="return enableLoginWhenEnter(event);">
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <input class="form-control" id="password" name="password" placeholder="password*" required="required" type="password" onkeydown="return enableLoginWhenEnter(event);">
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

                                        <div class="col-sm-6"><button type="button" class="btn btn-primary col-sm-12" class="md-close" data-toggle="modal" data-target="#myModal1" data-dismiss="modal"><i class="fa fa-arrow-left" ></i> &nbsp; Back to Description</button></div>
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
<?php include '../footer.php'; ?>
    </body>
</html>