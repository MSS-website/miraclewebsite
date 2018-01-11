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
      //  $conn = new DbController();
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
            $selectQuery = "SELECT DocTitle,DocType,DocLongDesc FROM tblWebDownloadsLines WHERE Id=7";
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

               // $conn->selectDatabase();
               $sql = "INSERT INTO tblResourceDepotDetails (ObjectId,RefId,FName,LName,Organization,Designation,Email,WorkPhone)   " .
                        " VALUES(2,7,:rfirstname,:rlastName,:rorganization," .
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
            SAP Case Study | Miracle
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
   <?php include '../header.php';?> <body>
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
            <input type="hidden" name="libId" id="libId" value="7"/>
            <input type="hidden" name="objectId" id="objectId" value="2"/>
            <br>
            
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-5 text-left">
                    <h1>
                        <strong>SAP Strategic Sourcing </strong><br>for Tier 1 Automotive Supplier
                    </h1>  
                </div>
                <div class="col-sm-5 text-right">
                    <ul class="breadcrumb pull-right">
                        <li>
                            <a href="../">Home</a>
                        </li>
                        <li>
                            <a href="success.php">Success Stories</a>
                        </li>
                        <li class="active">SAP Case Study
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
                    <p class="methodText"> The customer is a leading global supplier of systems and components for the automotive industry. It has a committed excellence in every aspect of their operations, with a focus on quality and lean initiatives, supply chain management and capacity optimization.

                    </p>
                    <h5 class="heavy noMargin">Technology</h5>
                    <div class="row">
                        <div class="col-sm-2">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>
                    <p class="methodText">
                        The following technology was used in this implementation :
                    </p>
                    <ul>
                        <li>SAP ECC
                        </li>
                    </ul>
                    <h5 class="heavy noMargin">Benefits</h5>
                    <div class="row">
                        <div class="col-sm-2">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>
                    <p class="methodText">
                        Customer is experiencing dramatic benefits in terms delivery times and reduced TCO realized within a short period of time by partnering with Miracle Software Systems. And certainly, Customer had made a perfect decision on choosing Miracle Software as their preferred Outsourcing Partner. Customer also sees Miracle playing a key role in their increasingly demanding future by continuing to help the company redefine, reduce costs and realize all its business objectives.
                    </p>
                    <h5 class="heavy noMargin">Business Challenges</h5>
                    <div class="row">
                        <div class="col-sm-2">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>
                    <p class="methodText">
                        The Company was involved in a number of other strategic initiatives in an effort to strengthen ongoing financial and operational performance which it took an initiative to:
                    </p>
                    <p class="methodText">
                    <ul>
                        <li>Reduce SAP Development and Deployment costs with actual budget/expense reductions while retaining current Development and Deployment levels and without accepting more risk

                        </li>
                        <li>Restructure the SAP Development and Deployment organizations to remain as cost-effective as possible

                        </li>
                        <li>Utilize the best SAP Development and Deployment resources available in the market,at the lowest price

                        </li>
                        <li>Transition SAP Development and Deployment Staffing Resource costs to a more variable model than currently in place at the customer site

                        </li>
                    </ul>
                    </p>
                    <h5 class="heavy noMargin">The Solution</h5>
                    <div class="row">
                        <div class="col-sm-2">
                            <hr>
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>
                    <p class="methodText">
                        In December 2011, Miracle Software Systems was selected as their Strategic Sourcing Partner on the Global Scale for the next 3 years.Miracle was positioned very strongly to win this contract by providing highly cost effective and well proven Onshore/Offshore On-Demand Model. The first project that went live in April 2012 was the SAP roll out at 4 plants in Europe spread across various geographical regions. Full range of SAP supply chain functionality in the areas of MM, SD, PP, and WM was realized as part of this roll out with Miracle and Customer teams working out of customer development centers located at Auburn, IN , Hockenheim, Germany and Miracle’s Indian GDC. And the next one that followed suit was the JD Edwards to SAP Financials/FSCM migration project in North America which went Live in August 2012. Miracle Team also participated in the Global SAP rollout of their Brazil Localization project in 4 plants and Canada Roll-Out in 4 plants which went live in January 2015. To achieve its Business Objectives and save costs, Customer adopted Miracle Global Delivery Model, a Complete and robust Delivery and Support Model leveraging Miracle’s Global Network of resources, Technology, Facilities and best in class processes to efficiently, consistently and rapidly address Customer’s unique requirements.
                    </p>
                </div>
                <div class="col-sm-1"></div>
            </div>
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-10">
                    <!--     
                       <button type="submit" tabindex="12" class="btn btn-primary" name="btnSubmit" id="btnSubmit">
                         Download Case Study
                        </button>  -->

                    <!--<a class="btn btn-primary" href="../resource/get-resource.php?refId=7&objectId=2">Download Case Study</a> -->
                    <a class="btn btn-primary" href='../download/DownloadDocs.php?refId=7&objectId=2'>Download Case Study</a>


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
                                                <!--<span id="resultMessage"></span>
                                                <div class="row"><span id="loading" style="display: none"><font color="red" size="3px">Loading please wait...</font></span></div>-->
                                                <!-- <button class="btn btn-primary col-sm-12" >Log In</button> -->
                                                <!--   <button type="button" class="btn btn-primary col-sm-12" name="btnLoginSubmit" id="btnLoginSubmit" onclick="doSubmit();">
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