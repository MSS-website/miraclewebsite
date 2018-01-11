<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="description">
        <meta content="" name="author">
        <?php
       // require '../config/DbController.php';
        require '../config/general.php';
       // $conn = new DbController();
         require '../config/ConnectionProvider.php';

        $rDocTitle = '';
        $rDocType = '';
        $rDocLongDesc = '';
        $resultMessage = '';
        $checkFlag = 0;
        try {

//            $conn->connectToDatabase();
//            $conn->selectDatabase();
            // $reventId = isset($_GET["eventId"]) ? $_GET["eventId"] : '-1';
            $selectQuery = "SELECT DocTitle,DocType,DocLongDesc FROM tblWebDownloadsLines WHERE Id=10";
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

             //   $conn->connectToDatabase();
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
                        " VALUES(2,10,:rfirstname,:rlastName,:rorganization," .
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
               // mysql_close();
                header('Location: ../back-end-error.php?resultMessage=' . $resultMessage);
            }
        }
        ?>
        <title>
            B2B Case Study | Miracle
        </title>
       <?php include '../config/Locations.php';?>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/font-awesome.min.css" rel="stylesheet">
        <link href="../css/main.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link href="../css/default.css" rel="stylesheet" type="text/css">
        <link href="../css/component.css" rel="stylesheet" type="text/css"> 
        <script src="../js/ajaxUtil.js"></script>
        <script src="../js/modernizr.custom.js"></script><!--[if lt IE 9]>

<script src="js/html5shiv.js"></script>

<script src="js/respond.min.js"></script>
<![endif]-->
        <link href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css" rel="stylesheet">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
        <script src="../js/ajaxUtil.js"></script>
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?= AMAZON_URL ?>/images/favicon.ico" rel="shortcut icon">
        <script type="text/javascript" src="../js/Validation.js"></script>
        <style>
            .modal-dialog
            {
                overflow:hidden !important;

            }

        </style>

    </head>
  <?php include '../header.php';?>  <body>
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
            <input type="hidden" name="libId" id="libId" value="10"/>
            <input type="hidden" name="objectId" id="objectId" value="2"/>
            <br>
           
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-6 text-left">
                    <h1>
                        <strong>Transformation of B2B Infrastructure </strong> <br> to achieve Customer Service Excellence
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
                        <li class="active">B2B Case Study
                        </li>
                    </ul>
                </div>
                <div class="col-sm-1"></div>
            </div>
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-10">
                    <hr>
                    <h5 class="heavy noMargin">Customer Background</h5> 
                    <div class="row">
                        <div class="col-sm-2">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>
                    <p class="methodText">
                        This company is a socially responsible manufacturer and marketer of leading everyday basic
                        apparel among some of the world's strongest apparel brands. It strives to attract and retain
                        great people with a passion to do their best, guided by high ethical standards which fits one
                        of the world’s apparel leaders.
                    </p>
                    <h5 class="heavy noMargin">Technology</h5>
                    <div class="row">
                        <div class="col-sm-2">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>
                    <p class="methodText">
                        The following technologies were used in this implementation :
                    </p>
                    <ul>
                        <li>Gentron Integration Suite(4.2.4)
                        </li>
                        <li>Sterling Integrator(5.O.4)
                        </li>
                        <li>Message Queuing
                        </li>
                        <li>Message Broker
                        </li>
                    </ul>
                    <h5 class="heavy noMargin">Results</h5> 
                    <div class="row">
                        <div class="col-sm-2">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>
                    <p class="methodText">
                    <ul>
                        <li>One platform to Support and Maintain.
                        </li>
                        <li>Reduced maintenance license fees on software.
                        </li>
                        <li>Standardized business processes which are scalable and reusable.
                        </li>
                        <li>Integrated business processes.
                        </li>
                        <li>Better document level tracking with correlation ids.
                        </li>
                        <li>One face to the customer.
                        </li>
                        <li>Eliminated Legacy disk and storage space.
                        </li>
                    </ul>
                    </p>
                    <h5 class="heavy noMargin">Business Challenges</h5> 
                    <div class="row">
                        <div class="col-sm-2">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>
                    <p class="methodText">
                        The company has a set of challenges to raise their standards which were,
                    </p>
                    <p class="methodText"></p>
                    <ul>
                        <li>Eight EDI systems and processes to maintain and support.
                        </li>
                        <li>Multiple skill sets were required to support different software packages on different platforms.
                        </li>
                        <li>Business logic changes needs to be implemented in multiple systems and tested.
                        </li>
                        <li>Pre/Post complex processing procedures on legacy systems to handle non supported functions in the maps.
                        </li>
                        <li>Searching, debugging and handling day to day operations are very time consuming.
                        </li>
                        <li>Abnormal software renewal fees and hardware cost.
                        </li>
                    </ul>
                    <p>
                    <h5 class="heavy noMargin">How Miracle helped them?</h5>
                    <div class="row">
                        <div class="col-sm-4">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>
                    <p class="methodText">
                        Miracle Software Systems, Inc. delivered a fully integrated B2B Solution that enabled the customer to manage their global trading partner community more efficiently to improve their customer relationship and increase their revenue and profitability by
                    <ul>
                        <li>Rapid Implementation of Framework that helped to achieve faster ROI & effective TCO.
                        </li>
                        <li>Repeatable Framework that drastically simplified on boarding trading partner.
                        </li>
                        <li>Deploying Framework for supply chain visibility and optimization.
                        </li>
                        <li>Providing Custom dashboards and alerts to optimize and manage Business Processes.
                        </li>
                        <li>Delivering Innovative Template based on Development Model.
                        </li>
                        <li>Offering established factory model to migrate from legacy and non performing B2B solution in a record time.
                        </li>
                        <li>Efficient Document Search and Document Re processing.
                        </li>
                        <li>Monitoring of supplier SLA agreements and measures.
                        </li>
                        <li>Facilitate partner performance report by tracking established performance metrics and scorecards.
                        </li>
                        <li>Improve performance against Service Level Agreements to avoid charge back penalties.
                        </li>
                        <li>Gain visibility across partner networks by enabling non-EDI partners to provide electronic status updates.
                        </li>
                        <li>Reduce blind spots in the supply chain by tracking critical steps with custom order flows and expanding the number of events being tracked.
                        </li>
                        <li>Personalized graphical dashboard provides a complete view of order and shipment activity.
                        </li>
                    </ul>
                    </p>
                </div>
                <div class="col-sm-1"></div>
            </div>
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-10">
                    <!--  <button type="submit" tabindex="12" class="btn btn-primary" name="btnSubmit" id="btnSubmit">
                           Download Case Study
                      </button> -->


                    <!--<a class="btn btn-primary" href="../resource/get-resource.php?refId=10&objectId=2">Download Case Study</a> -->
                    <a class="btn btn-primary" href='../download/DownloadDocs.php?refId=10&objectId=2'>Download Case Study</a>


                </div>
                <div class="col-sm-1"></div>
            </div>
        </section> 
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
        <br>
        <br>
<?php include '../footer.php'; ?>
    </body>
</html>