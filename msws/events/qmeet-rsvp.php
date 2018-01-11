<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <?php
        session_start();
        $rempID = isset($_SESSION["ses_EmpLoginId"]) ? $_SESSION["ses_EmpLoginId"] : '';
        ?>
        <?php
        include '../config/Locations.php';
        include '../config/general.php';
        // require '../config/DbController.php';
        require '../config/ConnectionProvider.php';

        //  $conn = new DbController();
        $resultMessage = '';
        $reventDescription = '';
        $rLocation = '';
        $rTimeFrom = '';
        $rTimeTo = '';
        $rtimeZone = '';
        $rTransport = '';
        $rEventStartDate = '';
        $rEventEndDate = '';
        $rtime = '';
        $evenDate = '';
        $evenTitle = '';
        $reventId = '';
        $rmiddayFrom = '';
        $rmiddayTo = '';
        $rVenuLocation = '';
        $venuTime = '';
        $reventId = isset($_GET["eventId"]) ? $_GET["eventId"] : '';
        if ($reventId != '') {
            try {
                /* if (!get_magic_quotes_gpc()) {
                  $reventId = addslashes($_GET['eventId']);
                  //jobPosition
                  } else {
                  $reventId = $_GET['eventId'];
                  } */

                // $conn->connectToDatabase();
                //   $conn->selectDatabase();
                // $selectQuery = "SELECT event_description,location,event_time_from,event_time_to,timezone,transport,event_startdate,evetnt_enddate,event_title,midday_from,midday_to FROM tblEventLines WHERE event_id=" . $reventId;
                $selectQuery = "SELECT event_description,location,event_time_from,event_time_to,timezone,transport,event_startdate,evetnt_enddate,event_title,midday_from,midday_to FROM tblEventLines WHERE event_id=:reventId";
                //  $result = mysql_query($selectQuery) or die(mysql_error());
                //  ;
                //$sno = 1;
                //$stmt = $conn->prepare($selectQuery);
                $stmt = $conn->prepare($selectQuery);
                $stmt->bindParam(':reventId', $reventId);
                $stmt->execute();
                if ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
                    // if (mysql_num_rows($result) > 0) {
                    //  $row = mysql_fetch_row($result);
                    //printf("ID: %s  Name: %s", $row["id"], $row["name"]);
                    $reventDescription = $row[0];
                    $rLocation = $row[1];
                    $rVenuLocation = $rLocation;
                    $rTimeFrom = strtotime($row[2]);
                    $rTimeTo = strtotime($row[3]);
                    $rtimeZone = $row[4];
                    $rTransport = $row[5];
                    $rEventStartDate = strtotime($row[6]);
                    $rEventEndDate = strtotime($row[7]);
                    $evenTitle = $row[8];
                    $rmiddayFrom = $row[9];
                    $rmiddayTo = $row[10];
                    // $sno = $sno+1;
                    $dateString = date('M d , Y', $rEventStartDate);

                    $startDay = date('d', $rEventStartDate);
                    $startMonth = date('M', $rEventStartDate);
                    $startYear = date('Y', $rEventStartDate);

                    $endDay = date('d', $rEventEndDate);
                    $endMonth = date('M', $rEventEndDate);
                    $endYear = date('Y', $rEventEndDate);
                    $evenDate = '';
                    if ($startDay != $endDay)
                        $evenDate = $startMonth . ' ' . $startDay . '-' . $endDay . ' ' . $startYear;
                    else
                        $evenDate = $dateString;



                    // $rtime=  date('h:i  A', $rTimeFrom).' to '.date('h:i  A', $rTimeTo);
                    $rtime = date('h:i  ', $rTimeFrom) . $rmiddayFrom . ' to ' . date('h:i  ', $rTimeTo) . $rmiddayTo;

                    $venuTime = date('h:i  ', $rTimeFrom) . ' ' . $rmiddayFrom . ' ' . $rtimeZone . ' Onwards';
                }
                //$conn->closeConnection();
                // mysqli_close($conn);
                //   mysql_close();
            } catch (Exception $exc) {

                $exc->getMessage();
                $resultMessage = '<font color=red size=2px>' . $exc . '</font>';

                header('Location: ../back-end-error.php?resultMessage=' . $resultMessage);
                // $conn->closeConnection(); // closing the connection
            }
        } else {
            header('Location: index.php');
        }
        ?>

        <title>

            <?php echo $evenTitle; ?> RSVP Form
        </title>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/font-awesome.min.css" rel="stylesheet">
        <link href="../css/main.css" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../css/default.css"/>
        <link rel="stylesheet" type="text/css" href="../css/component.css"/>

        <script src="../js/modernizr.custom.js"></script>
        <script src="../js/ajaxUtil.js?version=2.0"></script>
        <script src="../js/fileinput.js"></script>
        <script src="../js/custom.js">
   
        </script> 
        <script type="text/javascript" src="../js/Validation.js"></script>
        <!-- Date pickers links start -->

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>    
        <link rel="shortcut icon" href="<?= AMAZON_URL ?>/images/favicon.ico">
        <style>.modal input[type="text"], .modal input[type="password"] {
                min-height: 30px;
                width: 190px;
            }
        </style>

        <script type="text/javascript">
            $(window).load(function(){
                var sesionLoginId = document.getElementById("sesionLoginId").value;
                //  var eventId = document.getElementById("eventId").value;
                //alert(sesionLoginId);
                if(sesionLoginId ==''){
                    // alert(document.getElementById("webId").value.length)
                    // if(document.getElementById("webId").value!=''){
                    $('#myModal1').modal('show');
                }else {
                    //  alert("hii");
                    $('#myModal1').modal('hide');
                }
            });
    
   
        </script>
        <script>
            function doSubmit() {
                //  alert("dgd");
                var loginId=document.getElementById("loginId").value;
                var password=document.getElementById("password").value;
                if(loginId.trim().length!=0 && password.trim().length!=0 ){
                	checkQmeetLogin(loginId,password);
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
                // checkLogin(loginId,password);
            }
        </script>

        <?php
//--------------------------------------------------------------------------------------

        //if (isset($_POST['btnSubmit'])) {
        if (isset($_POST['btnSubmit'])||isset($_POST['btnNotSubmit'])) {
            // echo 'hii';
            try {
                //  $conn->connectToDatabase();

                if (!get_magic_quotes_gpc()) {
                    $reventId = addslashes($_POST['eventId']);
                    $rfirstname = addslashes($_POST['fullName']);
                    $remail = addslashes($_POST['email']);
                    $rdepartment = addslashes($_POST['department']);
                    $rphone = addslashes($_POST['phone']);
                    $rlocation = addslashes($_POST['location']);
                    $rfoodPreference = addslashes($_POST['foodPreference']);
                    $rbringAlong = addslashes($_POST['bringAlong']);
                    $rcorporateTransport = addslashes($_POST['corporateTransport']);
                    $rdropPoint = addslashes($_POST['dropPoint']);
                } else {
                    $reventId = $_POST['eventId'];
                    $rfirstname = $_POST['fullName'];
                    $remail = $_POST['email'];
                    $rdepartment = $_POST['department'];
                    $rphone = $_POST['phone'];
                    $rlocation = $_POST['location'];
                    $rfoodPreference = $_POST['foodPreference'];
                    $rbringAlong = $_POST['bringAlong'];
                    $rcorporateTransport = $_POST['corporateTransport'];
                    $rdropPoint = $_POST['dropPoint'];
                }
                $isAttend=1;
                if(isset($_POST['btnNotSubmit']))
                	$isAttend = 0;


                //     $conn->selectDatabase();
                /*   $sql = "INSERT INTO tblEventAttendies (event_id,firstname,email_id,phone_no,department,location,foodpref,alongmember,cor_transport,DropPoint)  " .
                  " VALUES('$reventId','$rfirstname','$remail','$rphone','$rdepartment'," .
                  "'$rlocation','$rfoodPreference','$rbringAlong','$rcorporateTransport','$rdropPoint')";
                 */

                $sql = "INSERT INTO tblEventAttendies (event_id,firstname,email_id,phone_no,department,location,foodpref,alongmember,cor_transport,DropPoint,IsAttend)  " .
                        " VALUES(:reventId,:rfirstname,:remail,:rphone,:rdepartment," .
                        ":rlocation,:rfoodPreference,:rbringAlong,:rcorporateTransport,:rdropPoint,:rIsAttend)";

                //  echo $sql;
                //  $selectQuery = "select * from tblEventAttendies where email_id='$remail' AND phone_no='" . $rphone . "' AND event_id = ".$reventId;
                $selectQuery = "select * from tblEventAttendies where email_id=:remail AND phone_no=:rphone AND event_id = :reventId";
                //echo $selectQuery;
                //  $selectresponce = mysql_query($selectQuery);
                $stmt = $conn->prepare($selectQuery);

                $stmt->bindParam(':remail', $remail);
                $stmt->bindParam(':rphone', $rphone);
                $stmt->bindParam(':reventId', $reventId);
                $stmt->execute();
                $rows = $stmt->rowCount();
                // if (mysql_num_rows($selectresponce) > 0) {
                if ($rows > 0) {
                    $resultMessage = '<font color=red size=2px>You are already registered ..</font>';
                    // mysql_close();
                    header('Location: ../back-end-error.php?resultMessage=' . $resultMessage);
                    // $conn->closeConnection(); // closing the connection
                } else {
                    $stmt = $conn->prepare($sql);

                    $stmt->bindParam(':reventId', $reventId);
                    $stmt->bindParam(':rfirstname', $rfirstname);
                    $stmt->bindParam(':remail', $remail);
                    $stmt->bindParam(':rphone', $rphone);
                    $stmt->bindParam(':rdepartment', $rdepartment);
                    $stmt->bindParam(':rlocation', $rlocation);
                    $stmt->bindParam(':rfoodPreference', $rfoodPreference);
                    $stmt->bindParam(':rbringAlong', $rbringAlong);
                    $stmt->bindParam(':rcorporateTransport', $rcorporateTransport);
                    $stmt->bindParam(':rdropPoint', $rdropPoint);
                    $stmt->bindParam(':rIsAttend', $isAttend);

                    //  if (!mysql_query($sql)) {
                    if (!$stmt->execute()) {
                        $resultMessage = "<font color=red size=2px>Data insertion failed..Please try again later\n</font>";
                        // $conn->closeConnection(); // closing the connection
                        // mysql_close();
                        header('Location: ../back-end-error.php?resultMessage=' . $resultMessage);
                    } else {
                        $eflag = EMAILFLAG;
                        if ($eflag == 1) {
                            require '../classes/MailManager.php';
                            $mailmanager = new MailManager();
                            $mailmanager->sendQuarterMeetRegisteredDetails($rfirstname, $remail, $rphone, $rdepartment, $rVenuLocation, $rfoodPreference, $rbringAlong, $rcorporateTransport, $evenTitle, $evenDate, $venuTime,$isAttend);
                        }


                        // mysql_close();
                        // $resultMessage = 'Thank you for your patience in filling in the details. We will be back with you soon.';
                        //header('Location: ../Status.php?resultMessage=' . $resultMessage);
                        header('Location: index.php?eventId=' . $reventId . '&isAttend=' . $isAttend);
                    }
                }
            } catch (Exception $exc) {

                $exc->getMessage();
                $resultMessage = '<font color=red size=2px>' . $exc . '</font>';

                //  $conn->closeConnection(); // closing the connection
                // mysql_close();
                header('Location: ../back-end-error.php?resultMessage=' . $resultMessage);
            }
        }
        ?>
        <?php
//  include '../config/general.php';
        /*
          $url = 'http://localhost:8084/EmployeeService/es/general/nseerapu/123';

          // prepare the body data. Example is JSON here
          $data = json_encode(array(
          'description' => 'Inspiring Poetry',
          'public' => 'true',
          'files' => array(
          'poem.txt' => array(
          'content' => 'If I had the time, I\'d make a rhyme'
          )
          )
          ));

          // set up the request context
          $options = ["http" => [
          "method" => "POST",
          "header" => ["Authorization: token " . $access_token,
          "Content-Type: application/json"],
          "content" => $data
          ]];
          $context = stream_context_create($options);

          // make the request
          $response = file_get_contents($url, false, $context);
          $resultMessage = '';
         */
        $resultMessage = '';
        $sesLoginId = '';
        ?>
        <style>
            .overlay{
                background-color:rgba(0,0,0,0.5) !important;
            }
            .modal-dialog
            {
                overflow:hidden !important;

            }
            ul.breadcrumb > li > a, ul.breadcrumb > li .divider {
                color: #fff;
            }
            ul.breadcrumb > li.active {
                color: #fff;
            }
            ul.breadcrumb > li > a:hover {
                color: #fff;
            }
            body{
                overflow-x:hidden;
            }
            body > section {
                padding-top: 0px !important;}

            .tinted-image {
                background: 
                    /* top, transparent red */
                    linear-gradient(
                    rgba(0, 0, 0, 0.55), 
                    rgba(0, 0, 0, 0.55)
                    ),
                    /* your image */
                    url("../img/key.jpg");
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }
            .modal-dialog
            {
                overflow:hidden !important;

            }


            .section_bg{
                background: 
                    /* top, transparent red */
                    linear-gradient(
                    rgba(0, 0, 0, 0.55), 
                    rgba(0, 0, 0, 0.55)
                    ),
                    /* your image */
                    url("<?= AMAZON_URL ?>/images/banners/Qmeet.png");
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                background-position:0px 71px;
            }



        </style>
    </head>
    <?php include '../header.php'; ?>
    <body>
        <input type="hidden" name="sesionLoginId" id="sesionLoginId" value="<?= $rempID ?>"/>

        <form id="qMeetForm" name="qMeetForm" method="post" action="#">

            <!-- start -->
            <div class="modal" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
                <div class="modal-dialog" style=" position: static;">
                    <div class="modal-content">
                        <div class="modal-header noMarginBottom ">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="display: none" id="loginModalClosId"><span aria-hidden="true">&times;</span></button>
                            <h3 class="modal-title"><strong>Employee Login</strong> </h3>

                        </div>
                        <hr>
                        <div class="modal-body " style="margin-top:-20px;"> 
                            <p class="methodText noMarginBottom">Thank you for showing interest in our event. This is a internal event for <strong> Miracle Employees </strong>only, and we will need to validate your credentials before allowing access for the <strong> RSVP.</strong>  </p>
                            <br> <div class="row">
                                <div class="col-sm-5">
                                    <div class="form-group" >
                                        <input type="text" tabindex="1" class="form-control" required="required" placeholder="Username" id="loginId" name="loginId" onkeydown="return enableLoginEnter(event);" />
                                    </div>
                                    <div class="form-group">
                                        <input type="password" tabindex="2" class="form-control" required="required" placeholder="Password" id="password" name="password" onkeydown="return enableLoginEnter(event);" />
                                    </div>
                                </div>
                            </div>
                            <!--  <div class="row">
                                <span id="resultMessage"></span></div> 
                                 <div class="row"><span id="loading" style="display: none"><font color="red" size="3px">Loading please wait...</font></span></div> -->
                            <div class="row">
                                <div class="col-sm-12"> 
                                    <div class="alert alert-danger" style="display:none" id="errorMsgDiv">
                                        <button type="button" class="close" onclick="closeErrorMsg()" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <strong><span id="resultMessage">Invalid details!!</span></strong> 
                                    </div>                        
                                </div>
                            </div>
                            <div class="row" style="margin-top:-10px;">
                                <hr> 
                            </div>

                            <div class="row" >
                                <div class="col-sm-4" >
                                    <!-- <input type="button" value="Login" tabindex="3" class="btn btn-primary col-sm-12" name="btnSubmit1" id="btnSubmit1" onclick="doSubmit();"/> -->
                                    <button type="button" class="btn btn-primary col-md-12" data-loading-text="<i class='fa fa-spinner fa-spin '></i> loading..." style="margin-left:5px;" name="btnSubmit1" id="btnSubmit1" onclick="doSubmit();" tabindex="3">Login</button>									
                                </div>
                            </div>



                            <div class="col-sm-6"></div> 
                        </div>


                        <div class="col-sm-8"></div>   
                    </div>


                </div>
            </div>

            <!-- end -->



            <!--
            <div class="modal" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                           <p class='methodText'>Thank you for showing interest in our event. This is a internal event for Miracle Employees only, and we will need to validate your credentials before allowing access for the RSVP.</p>
                            
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="display: none" id="loginModalClosId"><span aria-hidden="true">&times;</span></button>
                            <h3 class="modal-title" id="memberModalLabel"><strong>Employee Login</strong> </h4>
                        </div>

                        <div class="modal-body"> 

                            <div class="row">
                                
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <input type="text" tabindex="1" class="form-control" required="required" placeholder="Username" id="loginId" name="loginId" onchange="fieldLengthValidator(this);">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" tabindex="2" class="form-control" required="required" placeholder="Password" id="password" name="password" onchange="fieldLengthValidator(this);">
                                        <br>
                                         <a href="../forgot-password.php"> Forgot password !! &nbsp;&nbsp;</a>
                                    </div>
                                    <div class="col-sm-9">
                                  
                                   <span id="resultMessage"></span>
                                   
                                   
                               </div> 
                                </div>
                                <div class="col-sm-2"></div> 
                            </div>
                             <div class="row"><span id="loading" style="display: none"><font color="red" size="3px">Loading please wait...</font></span></div>
                            <div class="modal-footer">     
                                <div class="row">

                                   
                                    <div class="col-sm-8"></div>

                                    <div class="col-sm-4">
                                        <input type="button" value="Login" tabindex="3" class="btn btn-primary col-sm-12" name="btnSubmit1" id="btnSubmit1" onclick="doSubmit();"/>
                             
                                    </div>
                                    

                                </div>


                            </div>
                        </div>




                    </div>



                </div>
            </div> -->
        </form>

        <section>
            <div class="overlay section_bg">
                <div class=" container">
                    
                    <div class="row">    
                        <div class="col-sm-7 text-left">  
                            <br><br>
                            <h1 class="micro "><font color="#fff"><strong>Quarterly Meet</strong></font></h1>

                        </div>
                        <div class="col-sm-5 text-right">
                            <br><br>
                            <ul class="breadcrumb pull-right">
                                <li><a href="../../">Home</a></li>
                                <li> <a href="../events">Events</a></li>
                                <!-- Breadcrumb div starts here --> 
                                <li class="active">Quarterly Meet</li>
                                <!-- Breadcrumb div Ends here --> 
                            </ul>
                        </div>
                    </div><br>
                </div>
            </div>

        </section>
        <section  class="container">
            <br>
            <!--            <br>
                        <br>
                        <br>
                        <div class="row">
                            <div class="col-sm-1">
                            </div>
                            <div class="col-sm-5 text-left">
                                <h1 class="heavy">
                                    Quarterly Meet 
                                </h1>
                            </div>
                            <div class="col-sm-5 text-right">
                                <ul class="breadcrumb pull-right">
                                    <li>
                                        <a href="../">
                                            Home
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../events">Events</a>
                                    </li>
                                    <li class="active">
                                        Quarterly Meet
                                    </li>
                                </ul>
                            </div>-->
            <div class="col-sm-1">
            </div>
        </div>
        <br/>
        <!--contact form copy starts-->
        <div class="row">
            <div class="col-sm-7">
           <!--    <p class="methodText"> Time flies by, and we have already reached the end of a great first quarter for 2015. After all the hard work its time for all the miraclites to let their hair down and enjoy a bit. Come join us at Miracle City along with your families as we look to party all night with music, mast and mazza all planned for you.
               </p>
                <!-- Paragraph #1
                <p class="methodText"> We had a great quarter in terms of growth, sustenance, and success. We are surging forward with great speed and this is a time to meet all the new faces that have come into our huge family. We would love to see you at our quarterly gathering without fail and we promise to create a memorable night for you and your families. 
                </p>  -->
                <?php echo $reventDescription; ?>
                <p class="methodText">
                    <strong> Can't wait to see you there!! </strong>
                </p>

                </br>
                <table class="table table-hover table-striped">
                    <tbody>
                        <tr>
                            <td><strong>Location:</strong></td>
                            <td><?php echo $rLocation; ?></td>
                        </tr>
                        <tr>
                            <td><strong>Time:</strong></td>
                            <td> <?php echo $rtime . ' ' . $rtimeZone; ?> </td>
                        </tr>
                        <tr>
                            <td><strong>Date:</strong></td>
                            <td> <?php echo $evenDate; ?></td>
                        </tr>
                        <tr>
                            <td><strong>Transport:</strong></td>
                            <td> <?php echo $rTransport; ?></td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="col-sm-5">
                <!--third part starts-->
                <form method="post" action="<?php $_PHP_SELF ?>" id="myForm" >
                    <input type="hidden" id="eventId" name="eventId" value="<?php echo $reventId; ?>"/> 
                    <div class="row">
                        <!--copy 1 from contact first row starts-->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" readonly="readonly" required="required" placeholder="Full Name*" id="fullName" name="fullName" onchange="fieldLengthValidator(this);">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text"  class="form-control" readonly="readonly" required="required" placeholder="Email Id*" id="email" name="email" onchange="return checkEmail(this);fieldLengthValidator(this);">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" readonly="readonly" required="required" placeholder="Work Phone*" id="phone" name="phone" onchange="return formatPhone(this);" onblur="return validatenumber(this)">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text"  class="form-control" readonly="readonly" required="required" placeholder="Department*" id="department" name="department" onchange="fieldLengthValidator(this);">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                         
                            <p class="greyText heavy">Choose your location*</p>
                        </div>
                        <div class="col-sm-6">
                            <select  class="form-control" id="location" name="location">
                                <option value="Miracle City">Miracle City</option>
                                <option value="Miracle Heights">Miracle Heights</option>
                                <option value="Lawsons Bay Colony">Lawsons Bay Colony</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>
                    </br>
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="greyText heavy">Food preference*</p>
                        </div>
                        <div class="col-sm-6">
                            <select  class="form-control" id="foodPreference" name="foodPreference">
                                <option value="Vegetarian">Vegetarian</option>
                                <option value="Non-Vegetarian">Non-Vegetarian</option>

                            </select>
                        </div>
                    </div>
                    </br>
                    <div class="row">
                        <div class="col-sm-6">
                           <p class="greyText heavy">Corporate Transport*</p>
                        </div>
                        <div class="col-sm-6" >
                            <select class="form-control" required="required" id="corporateTransport" name="corporateTransport" onchange="changeDropPoint(this);">
                                <option value="">--Please Select--</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                    </div>
                    </br>
                    <div class="row">
                        <div class="col-sm-12">
                            <input type="text" class="form-control" placeholder="Bus Drop Point" id="dropPoint" name="dropPoint" onchange="fieldLengthValidator(this);" readonly="true">
                        </div>
                    </div>
                    </br>
                    <div class="row">
                        <div class="col-sm-6">
                           <p class="greyText heavy">Bringing anyone along?*</p>
                        </div>
                        <div class="col-sm-6" >
                            <select class="form-control" id="bringAlong" name="bringAlong">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                    </div>



                    <div class="row">

 <div class="col-sm-8">
 <button type="submit"   tabindex="12" class="btn btn-danger" name="btnNotSubmit" id="btnNotSubmit">
                        Sorry, I won't be able to make it !
                    </button>
 </div>
  <div class="col-sm-4">
  <button type="submit" style="margin-left:25px !important;" tabindex="12" class="btn btn-primary" name="btnSubmit" id="btnSubmit">
                        I'll be there!!
                    </button>
 </div>
 </div>
                    <hr>
                </form>
            </div>
        </div>
    </div>  
    <br/>
    <!--contact form copy ends-->
</section>
<!--/#error-->


<script type="text/javascript">
function enableLoginEnter(e) {
    var keynum;
    var keychar;
    var numcheck;

    if(window.event) {
        keynum = e.keyCode;
    }
    else if(e.which) // Netscape/Firefox/Opera
    {
        keynum = e.which;
    }
    try{
        if(keynum==13){
        	doSubmit();
            return false;
        }
    }catch(e){
        alert("Error"+e);
    }
};
</script>




<?php include '../footer.php'; ?>   
</body>
</html>
