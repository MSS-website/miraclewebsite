<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="description" content="">

        <meta name="author" content="">
        <?php session_start(); ?>
        <?php
        include '../config/general.php';


        $resultMessage = '';
        $accessType = 'noAccess';
        $rexeMeetId = '';
        $rExeType = '';
        $resultMessage = '';
        $rExeMonth = '';
        $rExeDate = '';
        $rTimeFrom = '';
        $rTimeTo = '';
        $rtimeZone = '';
        $rTransport = '';
        $rtime = '';
        $evenDate = '';
        $evenTitle = '';
        $revenTitle = '';
        $reventId = '';
        $rmiddayFrom = '';
        $rmiddayTo = '';

        $registartionLink = '';
        $videoLink = '';
        if (isset($_POST['btnSubmit1'])) {
            try {


                if (!get_magic_quotes_gpc()) {
                    $rloginId = addslashes($_POST['loginId']);
                    $rpassword = addslashes($_POST['password']);
                } else {
                    $rloginId = $_POST['loginId'];
                    $rpassword = $_POST['password'];
                }
                /* $serviceUrl = SERVICE_URL . '/attendeeCheck/';
                  $curl = curl_init($serviceUrl);
                  curl_setopt($curl, CURLOPT_POST, true);
                  curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
                  curl_setopt($curl, CURLOPT_POSTFIELDS, "loginId=" . $rloginId . "&password=" . $rpassword);
                  $curl_response = curl_exec($curl);
                  //echo 'response-->'.$curl_response;
                  if (1 !== $curl_response) {

                  $myArray = json_decode($curl_response, true);
                  //echo 'code-->' . $myArray['code'];

                  if ($myArray['code'] == '200') {
                  //session_start();
                  // $_SESSION["ses_EmpLoginId"] = $rloginId;
                  if ($myArray['message'] == 'noAccess') {
                  $resultMessage = "<font color=red size=2px>Authorization Failed!</font>";
                  } else {
                  $_SESSION["ses_EmpLoginId"] = $rloginId;
                  $_SESSION["ses_AccessType"] = $myArray['message'];

                  // echo 'messs-->' . $myArray['message'];
                  $accessType = $_SESSION["ses_AccessType"];
                  }


                  // header('Location: executive-management-meets.php');
                  } else if ($myArray['code'] == '222') {
                  $resultMessage = "<font color=red size=2px>" . $myArray['message'] . "</font>";
                  }
                  //$resultMessage = $myArray['message'];
                  else
                  $resultMessage = "<font color=red size=2px>" . $myArray['message'] . "</font>";
                  } */
                $data = array("LoginId" => "$rloginId", "Password" => "$rpassword", "Authorization" => base64_encode(SERVICE_AUTHORIZATION));
                $data_string = json_encode($data);
                $curl = curl_init(SERVICE_URL . "websiteServices/getEmployeeEmeetsAccessType");
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($curl, CURLOPT_HTTPHEADER, array(
                    'Content-Type: application/json',
                    'Content-Length: ' . strlen($data_string))
                );
                curl_setopt($curl, CURLOPT_TIMEOUT, 500);
                curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 500);
                $curl_response = curl_exec($curl);

                if (1 !== $curl_response) {

                    $myArray = json_decode($curl_response, true);
                    if ($myArray['IsAuthenticate']) {

                        if ($myArray['ResultString'] == 'Valid') {

                            if ($myArray['AccessType'] == 'noAccess') {
                                $resultMessage = "<font color=red size=2px>Access Denied!</font>";
                            } else {
                                $_SESSION["ses_EmpLoginId"] = $rloginId;
                                $_SESSION["ses_AccessType"] = $myArray['AccessType'];

                                //   echo 'messs-->' . $myArray['message'];
                                $accessType = $_SESSION["ses_AccessType"];
                            }
                        } else {

                            if ($myArray['ResultString'] == 'InValidCredentiales')
                                $resultMessage = "<font color=red size=2px>" . INVALID_CREDENTIALES_MESSAGE . " </font>";
                            else
                                $resultMessage = "<font color=red size=2px>" . INACTIVE_MESSAGE . " </font>";
                        }
                    }else {
                        $resultMessage = "<font color=red size=2px>" . UNAUTHORIZED_ACCESS_MESSAGE . "</font>";
                    }
                }
                curl_close($curl);
            } catch (Exception $exc) {


                $exc->getMessage();
                $resultMessage = '<font color=red size=2px>' . $exc . '</font>';
                header('Location: ../back-end-error.php?resultMessage=' . $resultMessage);
            }
        }
        ?>
        <?php
        $rempID = isset($_SESSION["ses_EmpLoginId"]) ? $_SESSION["ses_EmpLoginId"] : '';
        $accessType = isset($_SESSION["ses_AccessType"]) ? $_SESSION["ses_AccessType"] : 'noAccess';
        //  echo 'typeee---'.$accessType;
        if ($accessType != 'noAccess' && $rempID != '') {
            // require '../config/DbController.php';
            require '../config/ConnectionProvider.php';
            $rpopUpFlag = '0';

            //$conn = new DbController();


            try {
                // $conn->connectToDatabase();
                // $conn->selectDatabase();
                $rexeMeetId = isset($_GET["exeMeetId"]) ? $_GET["exeMeetId"] : '-1';
                // $selectQuery = "SELECT TYPE,MONTH,EMeetDate,StartTime,EndTime,MidDayFrom,MidDayTo,TimeZone,EMeetRegistrationLink,VideoLink FROM tblExecutiveMeet WHERE Id=" . $rexeMeetId;
                $selectQuery = "SELECT TYPE,MONTH,EMeetDate,StartTime,EndTime,MidDayFrom,MidDayTo,TimeZone,EMeetRegistrationLink,VideoLink FROM tblExecutiveMeet WHERE Id=:rexeMeetId";
                // $result = mysql_query($selectQuery) or die(mysql_error());
                $stmt = $conn->prepare($selectQuery);
                $stmt->bindParam(':rexeMeetId', $rexeMeetId);
                $stmt->execute();
                if ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
                    //$sno = 1;
                    //  if (mysql_num_rows($result) > 0) {
                    //   $row = mysql_fetch_row($result);
                    //printf("ID: %s  Name: %s", $row["id"], $row["name"]);
                    //printf("ID: %s  Name: %s", $row["id"], $row["name"]);
                    $rExeType = $row[0];
                    $rExeMonth = $row[1];
                    $rExeDate = strtotime($row[2]);
                    $rTimeFrom = strtotime($row[3]);
                    $rTimeTo = strtotime($row[4]);
                    $rmiddayFrom = $row[5];
                    $rmiddayTo = $row[6];
                    $rtimeZone = $row[7];
                    $registartionLink = $row[8];
                    $videoLink = $row[9];
                    // $sno = $sno+1;
                    $startDay = date('d', $rExeDate);
                    $startMonth = date('M', $rExeDate);
                    $startYear = date('Y', $rExeDate);

                    $startDayName = date('l', $rExeDate);
                    $evenDate = '';
                    $rtime = date('h:i  ', $rTimeFrom) . $rmiddayFrom . ' to ' . date('h:i  ', $rTimeTo) . $rmiddayTo;
                    $evenDate = $startMonth . ' ' . $startDay . ',' . $startYear . ' from ' . $rtime . ' ' . $rtimeZone;
                    if ($rExeType == $accessType || $accessType == 'Both') {
                        
                    } else {
                        header('Location: executive-management-meets.php?emeetId=-1');
                    }

                    // $sno = $sno+1;
                } else {
                    header('Location: executive-management-meets.php?emeetId=-2');
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
        }
        ?>
        <title>
            Executive Meets Replay | Miracle
        </title>
        <?php include '../config/Locations.php'; ?>

        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <link href="../css/font-awesome.min.css" rel="stylesheet">

        <link href="../css/main.css" rel="stylesheet">

        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../css/default.css"/>
        <link rel="stylesheet" type="text/css" href="../css/component.css"/>
        <script src="js/modernizr.custom.js">
        </script>
        <script src="js/fileinput.js">
        </script>
        <script src="js/custom.js">
        </script>

        <script type="text/javascript" src="../js/Validation.js">
        </script>
        <!--[if lt IE 9]>
    
    <script src="js/html5shiv.js">
    </script>
    
    <script src="js/respond.min.js">
    </script>
    <![endif]-->

        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

        <link rel="shortcut icon" href="<?= AMAZON_URL ?>/images/favicon.ico">
        <script src="../js/ajaxUtil.js"></script>
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
                    url("<?= AMAZON_URL ?>/images/banners/emeets-reply.png");
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
              
            }



        </style>
    </head>
    <?php include '../header.php'; ?>
    <body>

        <script type="text/javascript">
            $(window).load(function(){
             
                var sesionLoginId = document.getElementById("sesionLoginId").value;
                if(sesionLoginId ==''){
                    $('#myModal').modal('show');
                }
            });
    

            function doSubmit() {
                alert("dgd");
                var loginId=document.getElementById("loginId").value;
                var password=document.getElementById("password").value;
       
                checkLogin(loginId,password);
            }
   
        </script>



        <input type="hidden" name="sesionLoginId" id="sesionLoginId" value="<?= $rempID ?>"/>
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
            <div class="modal-dialog modal-md" style="margin-left: -280px;width:588px;">
                <form method="post" action="<?php $_PHP_SELF ?>" id="myForm" name="myForm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="display: none" id="loginModalClosId"><span aria-hidden="true">&times;</span></button>
                            <h3 class="modal-title" id="myModalLabel"><strong>Employee Login</strong></h3>
                            <hr class="noMarginBottom">
                        </div>
                        <div class="modal-body">
                            <p class="methodText noMarginBottom"> You must be a Miraclite to gain access to this meet. Please validate yourself using your Miracle credentials for further access.</p>
                            <br> <div class="row">
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <input type="text" tabindex="1" class="form-control" required="required" placeholder="Username" id="loginId" name="loginId">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" tabindex="2" class="form-control noMarginBottom" required="required" placeholder="Password" id="password" name="password">
                                    </div>
                                </div>

                            </div>
                            <div class="row noMargin">
                                <?php echo $resultMessage; ?>
                                <span id="resultMessage"></span></div>
                            <div class="row"><span id="loading" style="display: none"><font color="red" size="3px">Loading please wait...</font></span></div>
                            <div class="row" style="margin-top:-10px;">
                                <hr> 
                            </div>
                            <div class="modal-footer">     
                                <div class="row">

                                    <div class="col-sm-4">
                                        <!--<button type="submit" tabindex="3" class="btn btn-primary col-md-12" data-dismiss="modal" name="btnSubmit" id="btnSubmit">
                                            Login 
                                              </button>-->
                                        <input type="submit" value="Login" tabindex="3" class="btn btn-primary col-sm-12" name="btnSubmit1" id="btnSubmit1"  style="margin-left:0px;" />
                                    </div>
                                    <div class="col-sm-4"> 

                                    </div>

                                    <div class="col-sm-4"></div>  
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <section>
            <div class="overlay section_bg">
                <div class=" container">
                    <br>
                    <div class="row">    
                        <div class="col-sm-7 text-left">  
                            <br><br>
                            <h1 class="micro "><font color="#fff"><strong><?php echo $rExeType; ?></strong></font></h1>

                        </div>
                        <div class="col-sm-5 text-right">
                            <br><br>
                            <ul class="breadcrumb pull-right">
                                <li><a href="../">Home</a></li>
                                <li><a href="../events/">Events</a></li>
                                <!-- Breadcrumb div starts here --> 
                                <li class="active">Emeets</li>
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

                <div class="col-sm-6 text-left">
                    <br>
                    <h2 class="noMargin">
                       <strong>Global Sales Meet</strong>  
                        <strong><?php echo $rExeType; ?></strong> 
                        </h1>
                </div>
                <div class="col-sm-6 text-right">
                    <ul class="breadcrumb pull-right">
                        <li>
                            <a href="../">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="../events/">
                                Events
                            </a>
                        </li>
                        <li class="active">
                            Emeets
                        </li>
                    </ul>
                </div>

            </div>
            <hr>-->
          <!--  <p class="greyText heavy"> January 19, 2016 from 09:00 to 10:00 AM EST</p> -->
            <p class="greyText heavy"><?php echo $evenDate; ?></p>
            <!--contact form copy starts-->
        </div>
        <div class="row">

            <br>
            <div class="col-sm-12">
                <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style>
             <!--   <div class='embed-container'><iframe src="https://player.vimeo.com/video/129792670" width="550" height="250" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>-->
                <div class='embed-container'><iframe src="<?= $videoLink; ?>" width="550" height="250" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>

            </div>

        </div>


    </div>  
    <br/>
    <!--contact form copy ends-->

</section><!--/#error-->
<?php include '../footer.php'; ?>   

</body>
</html>