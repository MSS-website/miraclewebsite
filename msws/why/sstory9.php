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
            $selectQuery = "SELECT DocTitle,DocType,DocLongDesc FROM tblWebDownloadsLines WHERE Id=21";
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

             //   $conn->selectDatabase();
                $sql = "INSERT INTO tblResourceDepotDetails (ObjectId,RefId,FName,LName,Organization,Designation,Email,WorkPhone)   " .
                        " VALUES(2,21,:rfirstname,:rlastName,:rorganization," .
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
                //mysql_close();
                header('Location: ../back-end-error.php?resultMessage=' . $resultMessage);
            }
        }
        ?>
        <title>
            Energy and Utilities Case Study | Miracle
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
            <input type="hidden" name="libId" id="libId" value="21"/>
            <input type="hidden" name="objectId" id="objectId" value="2"/>
            <br>
           
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-6 text-left">
                    <h1>
                        <strong>Modernization of .NET Web Portal</strong></br> for National Energy Services Provider
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
                        <li class="active">Energy and Utilities Case Study
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
                    <p class="methodText">Our customer is one of the largest providers of Energy Solutions in the United States of America. They provide engineering, construction and maintenance services for the distribution and transmission power lines and substations, (or) EPC, turnkey and renewable energy products. They are well known for their quick and most qualified provider for storm response power line construction services.
                    </p>
                    <h5 class="heavy noMargin">Environment</h5>
                    <div class="row">
                        <div class="col-sm-3">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>
                    <p class="methodText">
                        The environment used in this implementation was,
                    </p>
                    <ol>
                        <li>.NET Framework 4.0</li>
                        <li>ASP .NET</li>
                        <li>HTML 5</li>
                        <li>JQuery</li>
                        <li>C# and WCF</li>
                        <li>SQL Server 2008</li>
                        <li>Telerik Controls</li>
                    </ol>
                    <p class="methodText">*Visual Studio 2010 were used for application development</p>
                    <h5 class="heavy noMargin">The Business Challenge
                    </h5>
                    <div class="row">
                        <div class="col-sm-3">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>
                    <p class="methodText">Their existing Application Portal for monitoring their process was built on .NET Framework using Windows Forms and C#. The application also uses third-party software, â€œSync Fusionâ€�, for building some custom controls while the Database Layer was built on SQL Server 2008.
                    </p>
                    <p class="methodText">The existing system, which helped them monitor their personnel and assets in a storm situation, was based on Legacy Technology and needed to be re-architecture to leverage the latest web technologies while taking system performance and scalability into consideration. They also needed the application to be able to handle multiple form factors including Mobile and Tablet devices.
                    </p>
                    <p class="methodText">
                        <strong>Some of the key challenges that they were facing with their existing system were,</strong>
                    </p>
                    <ul>
                        <li>Potential for improving the user interface</li>
                        <li>Maintaining the existing windows application in multiple locations</li>
                        <li>Maintaining the technicians across the multiple Strom restore points. Moving from one location to another location on the fly</li>
                        <li>Handling third party software is a bit expensive at times</li>
                        <li>Performance issues with the existing legacy technology, with lack of scalability</li>
                        <li>Lack of Mobile/IPad compatibility with GeoLocation API</li>
                        <li>Lack of SSRS Reporting/Dashboards</li>
                    </ul>
                    <h5 class="heavy noMargin">The Solution</h5>
                    <div class="row">
                        <div class="col-sm-3">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div> 
                    <p class="methodText">Once the challenges were understood, our experts went deep into the customer architecture to look at possible ways of modernizing the application and ensuring that they had a reliable system in place.</p>
                    <p class="methodText">The new application that resulted after the modernization and reengineering was built on .NET 4.0, replacing the legacy Windows Forms based application and in-turn made accessible for Mobile devices including iPads and Android Tablets.</p>
                    <p class="methodText"><strong>The application provided a crew-based storm entry and validation system for,</strong></p>
                    <ul>
                        <li>Dashboards</li>
                        <li>Employee Storm Assignment entries</li>
                        <li>Employee Hotel Accommodations (CLS)</li>
                        <li>Fleet Mechanics Entry information</li>
                        <li>Safety Supervision Entry information</li>
                        <li>Reports</li>
                    </ul>
                    <p class="methodText"><strong>Some of the other features of the new application were,</strong></p>
                    <ul>
                        <li>Allow the user to transfer the unassigned or task completed Crew to other Strom or Staging Areas</li>
                        <li>Allow the user to manage Crew mobilization of crews deployed in various Staging areas</li>
                        <li>Manage the data archive and view the archived data view</li>
                        <li>The primary change that is required for the new application is the redesign of the database model to a more rational database that avoids data redundancy</li>
                        <li>Allow the Admin user to reset the database to default parameters and providing option for archiving the current storm</li>
                        <li>Application / Business Layer / Web Services Development</li>
                        <li>Can be rewritten in latest technologies with service oriented approach for enabling application access from mobile devices (iPad). Web Services will be used to enable modular design of the application for enabling access from different devices / browsers</li>
                        <li>Reporting</li>
                    </ul>


                </div>     
                <div class="col-sm-1"></div>
            </div>
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-10">
                    <!--<button type="submit" tabindex="12" class="btn btn-primary" name="btnSubmit" id="btnSubmit">
                     Download Case Study
                    </button>-->


                    <!--  <a class="btn btn-primary btn-md" href="../resource/get-resource.php?refId=21&objectId=2">Download Case Study</a> -->
                    <a class="btn btn-primary" href='../download/DownloadDocs.php?refId=21&objectId=2'>Download Case Study</a><br>


                </div>
                <div class="col-sm-1"></div>
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
    <br><!--/#about-us-->
<?php include '../footer.php'; ?>
</body>
</html>
