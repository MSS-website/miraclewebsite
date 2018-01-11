<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="description" content="">

        <meta name="author" content="">


        <?php
      //  require '../config/DbController.php';
       require '../config/general.php';
           require '../config/ConnectionProvider.php';
        session_start();
        $rempID = isset($_SESSION["ses_EmpLoginId"]) ? $_SESSION["ses_EmpLoginId"] : '';
        //$conn = new DbController();
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
        $revenTitle = '';
        $reventId = '';
        $rmiddayFrom = '';
        $rmiddayTo = '';
        $eventRegularTitle = '';

        $webinarTitle = '';
        $webinarStartTime = '';
        $webinarStartDate = '';
        $webinarDate = '';
        $webinarTime = '';
        $webinarDescription = '';
        $spekarsList = '';

        $organizerName = '';
        $organizerEmail = '';
        $registartionLink = '';
        $videoLink = '';
        $pageTitle = '';
        $reventAfterDescription = '';
        $rSeriesId = '';
        $primaryTrack = '';
        $secondaryTrack = '';
        $primaryTrackId = '';
        $secondaryTrackId = '';
        $checkFlag = 0;
        $refferenceId = '';
        $bannerNumber='1';
        $rses_CheckFlag = '-1';
        try {

            $reventId = isset($_GET["eventId"]) ? $_GET["eventId"] : '';
            //   $robjectId = isset($_GET["objectId"]) ? $_GET["objectId"] : '';
            // $rconsultantId = isset($_GET["consultantId"]) ? $_GET["consultantId"] : '';
            //  $rrefferenceId = isset($_GET["refId"]) ? $_GET["refId"] : '';
 $rphpFile = isset($_GET["phpFile"]) ? $_GET["phpFile"] : '';
			            $rses_CheckFlag = isset($_GET["ses_CheckFlag"]) ? $_GET["ses_CheckFlag"] : '-1';
			            $rses_Curr_Err_Msg = isset($_GET["ses_Err_Msg"]) ? $_GET["ses_Err_Msg"] : '';

            if ($reventId != '') {

                $refferenceId = getReffId($reventId);

                //echo '$refferenceId-->'.$refferenceId;

                if ($refferenceId != '') {
                    try {
                      //  $conn->connectToDatabase();
                      //  $conn->selectDatabase();
                        // $reventId = isset($_GET["eventId"]) ? $_GET["eventId"] : '-1';
                       // $selectQuery = "SELECT event_description,location,event_time_from,event_time_to,timezone,transport,event_startdate,evetnt_enddate,event_title,midday_from,midday_to,event_tagline,OrganizerName,OrganizerEmail,RegistrationLink,event_bold_Title,VideoLink,Page_Title,After_Description,SeriesId,PrimaryTrackId,SecondaryTrackId FROM tblEventLines WHERE event_id=" . $reventId . " AND WebinarType='E' AND Status='Published'";
                         $selectQuery = "SELECT event_description,location,event_time_from,event_time_to,timezone,transport,event_startdate,evetnt_enddate,event_title,midday_from,midday_to,event_tagline,OrganizerName,OrganizerEmail,RegistrationLink,event_bold_Title,VideoLink,Page_Title,After_Description,SeriesId,PrimaryTrackId,SecondaryTrackId FROM tblEventLines WHERE event_id=:reventId  AND WebinarType='E' AND Status='Published'";
                       //reventId
                          $stmt = $conn->prepare($selectQuery);
              $stmt->bindParam(':reventId', $reventId);
               $stmt->execute();
             //  $rows = $stmt->rowCount();
                         //$result = mysql_query($selectQuery) or die(mysql_error());
                        //$sno = 1;
                        //if (mysql_num_rows($result) > 0) {
               //if ($rows > 0) {
                     if ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
                       //     $row = mysql_fetch_row($result);
                            //printf("ID: %s  Name: %s", $row["id"], $row["name"]);
                            //printf("ID: %s  Name: %s", $row["id"], $row["name"]);
                            $reventDescription = $row[0];
                            $rLocation = $row[1];
                            $rTimeFrom = strtotime($row[2]);
                            $rTimeTo = strtotime($row[3]);
                            $rtimeZone = $row[4];
                            $rTransport = $row[5];
                            $rEventStartDate = strtotime($row[6]);
                            $rEventEndDate = strtotime($row[7]);
                            // $evenTitle = $row[8];
                            $evenTitle = $row[15];
                            $revenTitle = $row[15];
                            $rmiddayFrom = $row[9];
                            $rmiddayTo = $row[10];
                            $eventRegularTitle = $row[11];
                            $organizerName = $row[12];
                            $organizerEmail = $row[13];
                            $registartionLink = $row[14];
                            $videoLink = $row[16];
                            $pageTitle = $row[17];
                            $reventAfterDescription = $row[18];
                            $rSeriesId = $row[19];
                            $primaryTrackId = $row[20];
                            $secondaryTrackId = $row[21];
                            $afterDescription = strip_tags($reventAfterDescription);
                            // $sno = $sno+1;
                            $dateString = date('F d , Y', $rEventStartDate);

                            $startDay = date('d', $rEventStartDate);
                            $startMonth = date('M', $rEventStartDate);
                            $startYear = date('Y', $rEventStartDate);

                            $endDay = date('d', $rEventEndDate);
                            $endMonth = date('M', $rEventEndDate);
                            $endYear = date('Y', $rEventEndDate);
                            $startDayName = date('l', $rEventStartDate);
                            $evenDate = '';
                            if ($startDay != $endDay)
                                $evenDate = $startMonth . ' ' . $startDay . '-' . $endDay . ' ' . $startYear . '-' . $startDayName;
                            else
                                $evenDate = $dateString . '-' . $startDayName;
                            $rtime = date('h:i  ', $rTimeFrom) . $rmiddayFrom . ' to ' . date('h:i  ', $rTimeTo) . $rmiddayTo;

                            $webinarTitle = $evenTitle;

                            $webinarStartTime = date('h:i  ', $rTimeFrom) . $rmiddayFrom;
                            $webinarStartDate = $dateString;
                            $webinarDate = $evenDate;
                            $webinarTime = $rtime;
                            $webinarDescription = $reventDescription;
                            
                             $tempConstant = $reventId;
      while($tempConstant > 24)
          $tempConstant  = $tempConstant - 24;
      

                            // $sno = $sno+1;
                        }else {
                            header('Location: external-webinar-depot.php?eventId=-1');
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
                    //-------------------------------------------------------------------------------------
                    //$conn = new DbController();
                    $displayspekarsList = '';
                    try {
                       // $conn->connectToDatabase();
                      //  $conn->selectDatabase();
                        //    $selectQuery = "SELECT event_speaker,event_designation,Company FROM tblEventSpeakers WHERE STATUS='Active' AND event_id =". $reventId." ORDER BY primary_speaker DESC";
                      //  $selectQuery = "SELECT SpeakerId,SpeakerName,EventId,ObjectType,PrimaryFlag,Designation,Company,STATUS FROM vwSpeakerList WHERE EventId=" . $reventId . " AND ObjectType = 'EV' ORDER BY PrimaryFlag DESC";
                          $selectQuery = "SELECT SpeakerId,SpeakerName,EventId,ObjectType,PrimaryFlag,Designation,Company,STATUS FROM vwSpeakerList WHERE EventId=:reventId  AND ObjectType = 'EV' ORDER BY PrimaryFlag DESC";
                           $stmt = $conn->prepare($selectQuery);
                 $stmt->bindParam(':reventId', $reventId);
                          
                        //  $result = mysql_query($selectQuery) or die(mysql_error());
                        
                        $sno = 1;
                          $stmt->execute();
                 $stmt->setFetchMode(PDO::FETCH_ASSOC);
          
                     while ($row = $stmt->fetch()) {
                      //  while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
                            //printf("ID: %s  Name: %s", $row["id"], $row["name"]);
                            // $jobId = $row["Id"];
                            // $displayspekarsList = $displayspekarsList.'<p class="methodText"><strong>'.$row["event_speaker"].'</strong>,'.$row["event_designation"]."</p>";
                            $displayspekarsList = $displayspekarsList . '<p class="noMarginBottom"><strong>' . $row["SpeakerName"] . '</strong><br> ' . $row["Designation"] . '</p><p class="greyText noMargin">' . $row["Company"] . '</p> <hr>';


                            $spekarsList = $spekarsList . "<b>" . $row["SpeakerName"] . "," . $row["Designation"] . " - " . $row["Company"] . "</b></br>";
                            ?>
                            <?php
                            $sno = $sno + 1;
                        }


                        //$conn->closeConnection();
                        // mysqli_close($conn);
                       // mysql_close();
                    } catch (Exception $exc) {

                        $exc->getMessage();
                        $resultMessage = '<font color=red size=2px>' . $exc . '</font>';
                        $conn->closeConnection(); // closing the connection
                    }
                } else {
                    header('Location: external-webinar-depot.php?eventId=-1');
                }
            } else {
                header('Location: external-webinar-depot.php?eventId=-1');
            }
        } catch (Exception $exc) {

            $exc->getMessage();
            $resultMessage = '<font color=red size=2px>' . $exc . '</font>';
            //  $conn->closeConnection(); // closing the connection
        }






//--------------------------------------------------------------------------------------

        if (isset($_POST['btnSubmit'])) {
            // echo 'hii';
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

                //$conn->selectDatabase();
               /* $sql = "INSERT INTO tblResourceDepotDetails (ObjectId,RefId,FName,LName,Organization,Designation,Email,WorkPhone)   " .
                        " VALUES(4,$refferenceId,'$rfirstname','$rlastName','$rorganization'," .
                        "'$rdesignation','$remail','$rphone')";*/
                
                 $sql = "INSERT INTO tblResourceDepotDetails (ObjectId,RefId,FName,LName,Organization,Designation,Email,WorkPhone)   " .
                        " VALUES(4,:refferenceId,:rfirstname,:rlastName,:rorganization," .
                        ":rdesignation,:remail,:rphone)";
                 
                  $stmt = $conn->prepare($sql);
                    $stmt->bindParam(':refferenceId', $refferenceId);
                    $stmt->bindParam(':rfirstname', $rfirstname);
                    $stmt->bindParam(':rlastName', $rlastName);
                    $stmt->bindParam(':rorganization', $rorganization);
                    $stmt->bindParam(':rdesignation', $rdesignation);
                    $stmt->bindParam(':remail', $remail);
                    $stmt->bindParam(':rphone', $rphone);
                 
//    echo "query-->".$sql;

                //if (!mysql_query($sql)) {
                     if(!$stmt->execute()) {
                    $resultMessage = "<font color=red size=2px>Data insertion failed..Please try again later\n</font>";
                    // $conn->closeConnection(); // closing the connection
                    // mysql_close();
                    // header('Location: ../back-end-error.php?resultMessage='.$resultMessage); 
                } else {
                  //  $checkFlag = mysql_insert_id();
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
        <?php echo strip_tags($pageTitle); ?>
        </title>
        <?php include '../config/Locations.php';?>

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
        <link href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css" rel="stylesheet">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
        <script type="text/javascript" src="../js/Validation.js">
        </script>
        <script src="../js/ajaxUtil.js?version=2.1"></script>
        <!--[if lt IE 9]>
    
    <script src="js/html5shiv.js">
    </script>
    
    <script src="js/respond.min.js">
    </script>
    <![endif]-->
        <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style>
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

        <link rel="shortcut icon" href="<?= AMAZON_URL ?>/images/favicon.ico">
        <script src="../js/Validation.js" type="text/javascript"></script>
        <style>
            .modal-dialog
            {
                overflow:hidden !important;

            }

        </style>
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
         url("<?= AMAZON_URL ?>/images/webinarimages/<?=$tempConstant?>.png");
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
                var sessionCheckId=document.getElementById("sessionCheckId").value;
                var sessErrMsg=document.getElementById("sessErrMsg").value;
                if(document.getElementById("isAuthorized").value==0 && sessionCheckId=='-1'){
                    $('#myModal1').modal('show');
                    if(sessionWebId=='-1'){
                        document.getElementById("errorMsgDivEX").style.display='block';
                        document.getElementById("resultMessageEX").innerHTML=ses_Err_Msg;
                    }
                    
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
                //  checkEmployeeLogin(loginId,password);
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
               <?php  if(strlen($pageTitle)>42){ ?>
                   
                    <?php } else { ?>
                    <br>
                    <?php } ?>
                <div class="row">    
                    <div class="col-sm-7 text-left">  
                        <br><br>
                        <h1 class="micro "><font color="#fff"><strong><?php echo $pageTitle; ?></strong></font></h1>

                    </div>
                    <div class="col-sm-5 text-right">
                        <br><br>
                       <ul class="breadcrumb pull-right">
                        <li><a href="../">Home</a></li>
                        <li><a href="external-webinar-depot.php">Webinar Depot</a></li>
                        <!-- Breadcrumb div starts here --> 
                        <li class="active">Technical Webinar</li>
                        <!-- Breadcrumb div Ends here --> 
                    </ul>
                    </div>
                </div><br>
            </div>
        </div>

    </section>
        <section  class="container">
            <input type="hidden" name="isAuthorized" id="isAuthorized" value="<?= $checkFlag ?>"/>
            <input type="hidden" name="libId" id="libId" value="<?= $refferenceId ?>"/>
            <input type="hidden" name="objectId" id="objectId" value="4"/>
            
           
            <div class="row">
                <br>
                <div class="col-sm-12">
                 <!-- <p class="methodText">In an ever evolving market-place it is critical for enterprises to become agile and flexible for them to be able to compete with dynamic changes. With this in mind it is essential for an organization to integrate all its disparate pieces together to form a robust yet flexible architecture which is amicable for future change. </p>
                  <p class="methodText">In this webinar our team demonstrates the ease of integrating your enterprise assets into a SAP System using SAP Integration Nodes along with the enterprise-grade universal integration foundation, <strong>IBM Integration Bus</strong>. Our experts along with IBM help customers to make right decisions to suit their business needs and drive greater business value for their enterprise.</p>
                  <p class="methodText heavy">Also get a sneak peak into the latest features of IBM Integration Bus v10!! </p> -->

<?php echo $reventAfterDescription; ?> 
                    <hr>
                </div>

            </div>
            <!--contact form copy starts-->
        </div>
        <div class="row">

            <div class="col-sm-4">
                <!--third part starts-->
                <h5 class="heavy noMarginTop">Event Speakers</h5>
                <hr>

<!-- <p class="noMarginBottom"><strong>Maruti Kampli</strong>, Practice Manager - Integration</p>
 <p class="greyText noMargin">Miracle Software Systems, Inc.</p>
 <hr>

 <p class="noMarginBottom"><strong>Greg Shevchik</strong>, WebSphere Brand Specialist</p>
 <p class="greyText noMargin">IBM WebSphere</p>
 <hr>
 <p class="noMarginBottom"><strong>Sai Kastury</strong>, Vice President - Business Integration</p>
 <p class="greyText noMargin">Miracle Software Systems, Inc.</p> -->
<?php echo $displayspekarsList; ?>

            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-6">
                <!-- <video width="100%" height="250" autoplay controls src="http://172.17.12.17/msws/media/videos/IIB-Webinar-April28th-2015.mp4">
                   <input type="file" accept="video/*"/>
       Your browser does not support HTML5 video.
     </video>--> <!-- <embed src="http://172.17.12.17/msws/media/videos/IIB-Webinar-April28th-2015.mp4"
            autostart="false" width="100%" height="250" />  -->
                <div class='embed-container'><iframe src="<?= $videoLink; ?>" width="550" height="250" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>

 <!--  <object type="application/x-shockwave-flash" width="409" height="230" data="https://www.flickr.com/apps/video/stewart.swf" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"><param name="flashvars" value="intl_lang=en-US&photo_secret=aa171b8e38&photo_id=17136509600"></param><param name="movie" value="https://www.flickr.com/apps/video/stewart.swf"></param><param name="bgcolor" value="#000000"></param><param name="allowFullScreen" value="true"></param><embed type="application/x-shockwave-flash" src="https://www.flickr.com/apps/video/stewart.swf" bgcolor="#000000" allowfullscreen="true" flashvars="intl_lang=en-US&photo_secret=aa171b8e38&photo_id=17136509600" width="580" height="230"></embed></object> -->

            </div>
            <div class="col-sm-1"></div>
        </div>


        <hr></hr>

        <div class="container">
            <div class="row">

                <h2 class="heavy">Suggestions for You</h3>
                    <p>We have a lot more webinars, articles and case studies for you to check out in our Digital Library and here are some suggestions for you</p>
                    <div class="btn-group">
                        <a class="btn btn-danger" href="#scroller" data-slide="prev"><i class="icon-angle-left"></i></a>
                        <a class="btn btn-danger" href="#scroller" data-slide="next"><i class="icon-angle-right"></i></a>
                    </div>



            </div>
            <br>




<?php

//   require '../config/DbController.php';
function getDateDiff($webEventId) {
   // $conn = new DbController();
    $dayDiff = '';
 require '../config/ConnectionProvider.php';
    //  echo 'eventId-->'.$webEventId;
    try {
       // $conn->connectToDatabase();
        //$conn->selectDatabase();
        $Query = "SELECT TIMESTAMPDIFF(DAY,CURRENT_TIMESTAMP,event_startdate) AS difference FROM tblEventLines WHERE event_id=:webEventId";
      //  $responce = mysql_query($Query) or die(mysql_error());
        $stmt = $conn->prepare($Query);
              $stmt->bindParam(':webEventId', $webEventId);
               $stmt->execute();
        $dayDiff = '';
        //if (mysql_num_rows($responce) > 0) {
          //  $row = mysql_fetch_row($responce);
          if ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
            $dayDiff = $row[0];

            //  echo "daysdiff-->".$daysdiff;
           // mysql_close();
        }
    } catch (Exception $exc) {

        $exc->getMessage();
        $resultMessage = '<font color=red size=2px>' . $exc . '</font>';
        header('Location: ../back-end-error.php?resultMessage=' . $resultMessage);
        // $conn->closeConnection(); // closing the connection
    }
    return $dayDiff;
}

function getReffId($webEventId) {
 //   $conn = new DbController();
    $tempReffId = '';
require '../config/ConnectionProvider.php';
    //  echo 'eventId-->'.$webEventId;
    try {
        //$conn->connectToDatabase();
      //  $conn->selectDatabase();
        $Query = "SELECT Id,Download_Id FROM tblWebDownloadsLines WHERE WebinarId=:webEventId";
        //$responce = mysql_query($Query) or die(mysql_error());
         $stmt = $conn->prepare($Query);
              $stmt->bindParam(':webEventId', $webEventId);
               $stmt->execute();
        $tempReffId = '';
      // if (mysql_num_rows($responce) > 0) {
         //   $row = mysql_fetch_row($responce);
        if ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
            $tempReffId = $row[0];

            //  echo "tempReffId-->".$tempReffId;
          //  mysql_close();
        }
    } catch (Exception $exc) {

        $exc->getMessage();
        $resultMessage = '<font color=red size=2px>' . $exc . '</font>';
        header('Location: ../back-end-error.php?resultMessage=' . $resultMessage);
        // $conn->closeConnection(); // closing the connection
    }
    return $tempReffId;
}

//$conn = new DbController();
//$seriesId = 1;
//$reventId=37;

$displayDivs = '';
$myEventids = array();
try {
    $serialNo = 0;
    if ($rSeriesId > 0) {
      //  $conn->connectToDatabase();
      //  $conn->selectDatabase();
      //  $selectQueryy = "SELECT event_id,event_title,event_bold_Title,event_tagline,event_description,event_startdate,STATUS,After_Description,SeriesId,Page_Title FROM tblEventLines WHERE SeriesId=" . $rSeriesId . " AND STATUS !='InActive' AND event_id !=" . $reventId . " ORDER BY event_startdate DESC";
         $selectQueryy = "SELECT event_id,event_title,event_bold_Title,event_tagline,event_description,event_startdate,STATUS,After_Description,SeriesId,Page_Title,FileName FROM tblEventLines WHERE SeriesId=:rSeriesId  AND STATUS !='InActive' AND event_id !=:reventId  ORDER BY event_startdate DESC";
           $stmt = $conn->prepare($selectQueryy);
              $stmt->bindParam(':rSeriesId', $rSeriesId);
              $stmt->bindParam(':reventId', $reventId);
               $stmt->execute();
//echo "selectQueryy ".$selectQueryy;
    //    $result = mysql_query($selectQueryy) or die(mysql_error());
               $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $serialNo = 0;
       // while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
         while ($row = $stmt->fetch()) {
            $myvalue = strip_tags($row["event_description"]);
            $tempEventId = $row["event_id"];
            $startDate = date('F d, Y', strtotime($row["event_startdate"]));
            // echo 'hi-->'.$tempEventId;
            //echo $myvalue;
//$desc=explode(".",$myvalue); 
            $desc = substr($myvalue, 0, 150);

            // if (getDateDiff($tempEventId) >= 0) {
            if ($row["STATUS"] == 'Active') {
                $myEventids[] = $row["event_id"];
                $serialNo = $serialNo + 1;
                $displayDivs = $displayDivs . '<div class="col-xs-4 ">' . '<div class="portfolio-item noMarginBottom">' . '<p class="heavy greyText noMargin">Technical Webinar</p>';
                $displayDivs = $displayDivs . '<p class="heavy noMarginBottom"><a href="../webinars/' .$row["FileName"].'">' . $row["Page_Title"] . '</a>';
                $displayDivs = $displayDivs . '</p>' . '<div class="row">' . '<div class="col-sm-6 noMarginTop noMarginBottom">' . '<hr> </div></div> <p class="noMargin">' . $desc . '...|' . ' <a class="linkText heavy" href="../webinars/' .$row["FileName"].'">' . 'Read More</a>';
                $displayDivs = $displayDivs . '</p><p class="greyText noMargin">' . $startDate . ' </p></div></div>' . '@#$';
            } else if ($row["STATUS"] == 'Published') {
                $myEventids[] = $row["event_id"];
                $reffId = getReffId($tempEventId);
                $serialNo = $serialNo + 1;
                $displayDivs = $displayDivs . '<div class="col-xs-4">' . '<div class="portfolio-item">' . '' . '<p class="heavy greyText noMargin">On-Demand Webinar</p>';

                $displayDivs = $displayDivs . '<p class="heavy noMarginBottom"><a href="../webinars/' .$row["FileName"].'">' . $row["Page_Title"] . '</a>';
                $displayDivs = $displayDivs . '</p>' . '<div class="row">' . '<div class="col-sm-6 noMarginTop noMarginBottom">' . '<hr> </div></div> <p class="noMargin">' . $desc . '...|' . ' <a class="linkText heavy" href="../webinars/' .$row["FileName"].'">' . 'Read More</a>';

                $displayDivs = $displayDivs . '</p><p class="greyText noMarginTop">' . $startDate . ' </p></div></div>' . '@#$';
            }
            if ($serialNo == 9) {
                break;
            }
        }
    }
    if ($serialNo < 9) {
        $dayDiff = '';


     //   $conn->connectToDatabase();
     //   $conn->selectDatabase();
        //  $displayspekarsList = '';
        $selectQuerye = "SELECT event_id,Page_Title,event_description,event_startdate,STATUS,FileName FROM tblEventLines
WHERE WebinarType ='E'  AND STATUS !='InActive' AND event_id !=:reventId";
        if ($primaryTrackId != '' && $secondaryTrackId != '') {
         //   $selectQuerye = $selectQuerye . ' AND (PrimaryTrackId=' . $primaryTrackId . ' OR SecondaryTrackId = ' . $secondaryTrackId . ' OR PrimaryTrackId=' . $secondaryTrackId . ' OR SecondaryTrackId = ' . $primaryTrackId . ')';
               $selectQuerye = $selectQuerye . ' AND (PrimaryTrackId=:primaryTrackId1  OR SecondaryTrackId = :secondaryTrackId1  OR PrimaryTrackId=:secondaryTrackId2  OR SecondaryTrackId = :primaryTrackId2)';
        } else if ($primaryTrackId != '' && $secondaryTrackId == '') {
           // $selectQuerye = $selectQuerye . ' AND (PrimaryTrackId=' . $primaryTrackId . ' OR SecondaryTrackId = ' . $primaryTrackId . ')';
             $selectQuerye = $selectQuerye . ' AND (PrimaryTrackId=:primaryTrackId1  OR SecondaryTrackId = :primaryTrackId2)';
        }

        $selectQuerye = $selectQuerye . " ORDER BY event_startdate DESC";
         $stmt = $conn->prepare($selectQuerye);
              $stmt->bindParam(':reventId', $reventId);
               if ($primaryTrackId != '' && $secondaryTrackId != '') {
                    $stmt->bindParam(':primaryTrackId1', $primaryTrackId);
              $stmt->bindParam(':secondaryTrackId1', $secondaryTrackId);
              $stmt->bindParam(':secondaryTrackId2', $secondaryTrackId);
              $stmt->bindParam(':primaryTrackId2', $primaryTrackId);
               }else if ($primaryTrackId != '' && $secondaryTrackId == '') {
                   $stmt->bindParam(':primaryTrackId1', $primaryTrackId);
                   $stmt->bindParam(':primaryTrackId2', $primaryTrackId);
               }
             
               $stmt->execute();
            //    $num_rows = $stmt->rowCount();
                 $stmt->setFetchMode(PDO::FETCH_ASSOC);
      //  $result = mysql_query($selectQuerye) or die(mysql_error());
        //   $sno = 0;
      //  while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
                  while ($row = $stmt->fetch()) {
            $myvalue = strip_tags($row["event_description"]);

            $startDate = date('F d, Y', strtotime($row["event_startdate"]));
            //echo $myvalue;
//$desc=explode(".",$myvalue); 
            $desc = substr($myvalue, 0, 150);


            //printf("ID: %s  Name: %s", $row["id"], $row["name"]);
            // $jobId = $row["Id"];
            // $displayspekarsList = $displayspekarsList.'<p class="methodText"><strong>'.$row["event_speaker"].'</strong>,'.$row["event_designation"]."</p>";
            //  $displayspekarsList = $displayspekarsList . '<p class="noMarginBottom"><strong>' . $row["event_speaker"] . '</strong> <BR>' . $row["event_designation"] . '</p><p class="greyText noMargin">' . $row["Company"] . '</p>  <div class="row"><div class="col-sm-7"><hr class="noMarginBottom noMarginTop"></div><div class="col-sm-5"></div></div>';
            $isExist = false;


            for ($x = 0; $x < sizeof($myEventids); $x++) {

                if ($myEventids[$x] == $row["event_id"]) {
                    $isExist = true;
                    break;
                }
            }
            if (!$isExist) {
//if (getDateDiff($row["event_id"]) >= 0) {
                if ($row["STATUS"] == 'Active') {
                    $myEventids[] = $row["event_id"];
                    $serialNo = $serialNo + 1;
                    $displayDivs = $displayDivs . '<div class="col-xs-4">' . '<div class="portfolio-item">' . '' . '<p class="heavy greyText noMargin">Technical Webinar</p>';
                    $displayDivs = $displayDivs . '<p class="heavy noMarginBottom "><a href="../webinars/' .$row["FileName"].'">' . $row["Page_Title"] . '</a>';
                    $displayDivs = $displayDivs . '</p>' . '<div class="row">' . '<div class="col-sm-6 noMarginBottom noMarginTop">' . '<hr> </div></div> <p class="noMargin">' . $desc . '...|' . ' <a class="linkText heavy" href="../webinars/' .$row["FileName"].'">' . 'Read More</a>';
                    $displayDivs = $displayDivs . '</p><p class="greyText noMarginTop">' . $startDate . ' </p></div></div>' . '@#$';
                } else if ($row["STATUS"] == 'Published') {
                    $myEventids[] = $row["event_id"];
                    $reffId = getReffId($row["event_id"]);
                    $serialNo = $serialNo + 1;
                    $displayDivs = $displayDivs . '<div class="col-xs-4">' . '<div class="portfolio-item">' . '' . '<p class="heavy greyText noMargin">On-Demand Webinar</p>';

                    $displayDivs = $displayDivs . '<p class="heavy noMarginBottom"><a href="../webinars/' .$row["FileName"].'">' . $row["Page_Title"] . '</a>';
                    $displayDivs = $displayDivs . '</p>' . '<div class="row">' . '<div class="col-sm-6 noMarginTop noMarginBottom">' . '<hr> </div></div> <p class="noMargin">' . $desc . '...|' . ' <a class="linkText heavy" href="../webinars/' .$row["FileName"].'">' . 'Read More</a>';
                    $displayDivs = $displayDivs . '</p><p class="greyText noMarginTop">' . $startDate . ' </p></div></div>' . '@#$';
                }
            }
            if ($serialNo == 9) {
                break;
            }
            ?>
                        <?php
                    }
                }
                $downloadArray = array();
                if ($serialNo < 9) {
                  //  $conn->connectToDatabase();
                   // $conn->selectDatabase();

                    $selectQuerye = "SELECT Id,Download_Id,Title,DocTitle,CreatedDate,DocLongDesc,SourceLink,WebinarId,DocType FROM tblWebDownloadsLines WHERE Status='Active' AND  WebinarId !=:reventId";
                    if ($primaryTrackId != '' && $secondaryTrackId != '') {
                       // $selectQuerye = $selectQuerye . ' AND (PrimaryTrackId=' . $primaryTrackId . ' OR SecondaryTrackId = ' . $secondaryTrackId . ' OR PrimaryTrackId=' . $secondaryTrackId . ' OR SecondaryTrackId = ' . $primaryTrackId . ')';
                         $selectQuerye = $selectQuerye . ' AND (PrimaryTrackId=:primaryTrackId1  OR SecondaryTrackId = :secondaryTrackId1  OR PrimaryTrackId=:secondaryTrackId2  OR SecondaryTrackId = :primaryTrackId2)';
                    } else if ($primaryTrackId != '' && $secondaryTrackId == '') {
                      //  $selectQuerye = $selectQuerye . ' AND (PrimaryTrackId=' . $primaryTrackId . ' OR SecondaryTrackId = ' . $primaryTrackId . ')';
                          $selectQuerye = $selectQuerye . ' AND (PrimaryTrackId=:primaryTrackId1  OR SecondaryTrackId = :primaryTrackId2 )';
                    }
                    $selectQuerye = $selectQuerye . " ORDER BY CreatedDate DESC";
                     $stmt = $conn->prepare($selectQuerye);
              $stmt->bindParam(':reventId', $reventId);
               if ($primaryTrackId != '' && $secondaryTrackId != '') {
                    $stmt->bindParam(':primaryTrackId1', $primaryTrackId);
              $stmt->bindParam(':secondaryTrackId1', $secondaryTrackId);
              $stmt->bindParam(':secondaryTrackId2', $secondaryTrackId);
              $stmt->bindParam(':primaryTrackId2', $primaryTrackId);
               }else if ($primaryTrackId != '' && $secondaryTrackId == '') {
                   $stmt->bindParam(':primaryTrackId1', $primaryTrackId);
                   $stmt->bindParam(':primaryTrackId2', $primaryTrackId);
               }
               $stmt->execute();
                 $stmt->setFetchMode(PDO::FETCH_ASSOC);
                   while ($row = $stmt->fetch()) {
                        //printf("ID: %s  Name: %s", $row["id"], $row["name"]);
                        $SourceLink = $row["SourceLink"];
                        $myvalue = strip_tags($row["DocLongDesc"]);
                        $startDate = date('F d, Y', strtotime($row["CreatedDate"]));

                        //echo $myvalue;
//$desc=explode(".",$myvalue); 
                        $desc = substr($myvalue, 0, 150);
                        // $displayspekarsList = $displayspekarsList.'<p class="methodText"><strong>'.$row["event_speaker"].'</strong>,'.$row["event_designation"]."</p>";
                        //  $displayspekarsList = $displayspekarsList . '<p class="noMarginBottom"><strong>' . $row["event_speaker"] . '</strong> <BR>' . $row["event_designation"] . '</p><p class="greyText noMargin">' . $row["Company"] . '</p>  <div class="row"><div class="col-sm-7"><hr class="noMarginBottom noMarginTop"></div><div class="col-sm-5"></div></div>';

                        $isExist1 = false;
                        for ($x = 0; $x < sizeof($myEventids); $x++) {

                            if ($myEventids[$x] == $row["WebinarId"]) {
                                $isExist1 = true;
                                break;
                            }
                        }
                        if (!$isExist1) {
                            $downloadArray = $row["Id"];
                            $serialNo = $serialNo + 1;
                            $displayDivs = $displayDivs . '<div class="col-xs-4">' . '<div class="portfolio-item">' . '' . '<p class="heavy greyText noMargin">' . $row["DocType"] . '</p>';
                            $displayDivs = $displayDivs . '<p class="heavy nomarginBottom noMarginTop"><a href="..' . $SourceLink . '" > ' . $row["DocTitle"] . '</a>';
                            $displayDivs = $displayDivs . '</p>' . '<div class="row">' . '<div class="col-sm-6 noMarginBottom noMarginTop">' . '<hr> </div></div> <p class="noMargin">' . $desc . '...|' . ' <a class="linkText heavy" href="..' . $SourceLink . '" >' . 'Read More</a>';
                            $displayDivs = $displayDivs . '</p><p class="greyText noMarginTop">' . $startDate . ' </p></div></div>' . '@#$';
                        }
                        if ($serialNo == 9) {
                            break;
                        }
                    }
                }if ($serialNo < 9) {
                   // $conn->connectToDatabase();
                   // $conn->selectDatabase();

                    //$selectQuery = "SELECT Id,Download_Id,Title,DocTitle,CreatedDate,DocLongDesc,SourceLink,DocType,WebinarId  FROM tblWebDownloadsLines WHERE Status='Active' AND  WebinarId !=" . $reventId . " ORDER BY CreatedDate DESC LIMIT 9";
                    $selectQuery = "SELECT Id,Download_Id,Title,DocTitle,CreatedDate,DocLongDesc,SourceLink,DocType,WebinarId  FROM tblWebDownloadsLines WHERE Status='Active' AND  WebinarId !=:reventId  ORDER BY CreatedDate DESC LIMIT 9";
                   $stmt = $conn->prepare($selectQuery);
              $stmt->bindParam(':reventId', $reventId);
              $stmt->execute();
              $stmt->setFetchMode(PDO::FETCH_ASSOC);
             //   while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
             while ($row = $stmt->fetch()) {
                        //printf("ID: %s  Name: %s", $row["id"], $row["name"]);
                        $SourceLink = $row["SourceLink"];
                        $myvalue = strip_tags($row["DocLongDesc"]);
                        $startDate = date('F d, Y', strtotime($row["CreatedDate"]));

                        //echo $myvalue;
//$desc=explode(".",$myvalue); 
                        $desc = substr($myvalue, 0, 150);
                        // $displayspekarsList = $displayspekarsList.'<p class="methodText"><strong>'.$row["event_speaker"].'</strong>,'.$row["event_designation"]."</p>";
                        //  $displayspekarsList = $displayspekarsList . '<p class="noMarginBottom"><strong>' . $row["event_speaker"] . '</strong> <BR>' . $row["event_designation"] . '</p><p class="greyText noMargin">' . $row["Company"] . '</p>  <div class="row"><div class="col-sm-7"><hr class="noMarginBottom noMarginTop"></div><div class="col-sm-5"></div></div>';

                        $isExist2 = false;
                        $isDownloadExist = false;
                        for ($x = 0; $x < sizeof($myEventids); $x++) {

                            if ($myEventids[$x] == $row["WebinarId"]) {
                                $isExist2 = true;
                                break;
                            }
                        }
                        for ($x = 0; $x < sizeof($downloadArray); $x++) {

                            if ($downloadArray[$x] == $row["Id"]) {
                                $isDownloadExist = true;
                                break;
                            }
                        }
                        if (!$isExist2 && !$isDownloadExist) {
                            $downloadArray = $row["Id"];
                            $serialNo = $serialNo + 1;
                            $displayDivs = $displayDivs . '<div class="col-xs-4">' . '<div class="portfolio-item">' . '<p class="heavy greyText noMargin">' . $row["DocType"] . '</p>';
                            $displayDivs = $displayDivs . '<p class="heavy noMarginBottom"><a href="..' . $SourceLink . '" > ' . $row["DocTitle"] . '</a>';
                            $displayDivs = $displayDivs . '</p>' . '<div class="row">' . '<div class="col-sm-6 noMarginTop noMarginBottom">' . '<hr> </div></div> <p class="noMargin">' . $desc . '...|' . ' <a class="linkText heavy" href="..' . $SourceLink . '" >' . 'Read More</a>';
                            $displayDivs = $displayDivs . '</p><p class="greyText noMarginTop">' . $startDate . ' </p></div></div>' . '@#$';
                        }
                        if ($serialNo == 9) {
                            break;
                        }
                    }
                }

                $array = explode('@#$', $displayDivs);
                // echo 'array size-->'.count($array);

                if (count($array) > 0) {
                    ?> <div class="row">
                        <div id="scroller" class="carousel slide">
                            <div class="carousel-inner">

                    <?php
                    $temprows = 0;
                    $initial = true;
                    $isClosed = false;
                    for ($x = 0; $x < count($array) - 1; $x++) {

                        if ($temprows == 0 && $initial) {
                            $isClosed = false;
                            ?>
                                        <div class="item active">
                                            <div class="row">

                            <?php
                        } else if ($temprows == 0) {
                            $isClosed = false;
                            ?> <div class="item">
                                                    <div class="row"><?php
            }


            echo $array[$x];
            $temprows++;
            $initial = false;
            if ($temprows == 3) {
                $temprows = 0;
                            ?>
                                                    </div>
                                                </div>
                                        <?php
                                        $isClosed = true;
                                    }
                                }
                                if (!$isClosed) {
                                    ?></div>
                                    </div><?php
                                }
                                ?>

                            </div>
                        </div>
                    </div>

                                                <?php
                                            }
                                        } catch (Exception $exc) {

                                            $exc->getMessage();
                                            $resultMessage = '<font color=red size=2px>' . $exc . '</font>';
                                            header('Location: ../back-end-error.php?resultMessage=' . $resultMessage);
                                            // $conn->closeConnection(); // closing the connection
                                        }
                                        ?>





            <!--- Start -->






            <!-- End -->


            <!--/.row-->
        </div>





    </div><!--/.row-->




</div>
<div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-10">

    </div>
    <div class="col-sm-1"></div>
</div>
</div>  
<br/>
<!--contact form copy ends-->

</section><!--/#error-->
<!-- new models start-->

<div class="modal fade" id="myModal1" tabindex="-1" data-backdrop= "static" data-keyboard= "false">
    <div class="modal-dialog" style="margin-left: -280px;">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal"><i class="icon-xs-o-md"></i></button>
            <div class="modal-header">


                <h3 class="modal-title" id="memberModalLabel">
                    <strong>
                        <!--Enhanced EDI Transaction Visibility with Miracle's Supply Chain Visibility Portal -->
<?php echo strip_tags($pageTitle); ?>
                    </strong>
                </h3>
                <hr></div>
            <div class="modal-body">
                <div class="form-group">
                    <div class="row"> <div class="col-sm-12 ">
<?php $afterdesc = substr($reventAfterDescription, 0, 750); ?>
<?php echo $afterdesc; ?>
<?php if(strlen($reventAfterDescription)>750){?>
...
<?php } ?>
                <!--    <p class="methodText">In an ever evolving market-place it is critical for enterprises to become agile and flexible for them to be able to compete with dynamic changes. With this in mind it is essential for an organization to integrate all its disparate pieces together to form a robust yet flexible architecture which is amicable for future change. </p><!-- Paragraph #1 -->
              <!--    <p class="methodText">In this webinar our team demonstrates the ease of integrating your enterprise assets into a SAP System using SAP Integration Nodes along with the enterprise-grade universal integration foundation, <strong>IBM Integration Bus</strong>. Our experts along with IBM help customers to make right decisions to suit their business needs and drive greater business value for their enterprise.</p><!-- Paragraph #2 -->
                 <!-- <p class="methodText heavy">Also get a sneak peak into the latest features of IBM Integration Bus v10!! </p> -->

                        </div> </div>


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
            <div class="modal-body">
                <div class="tab-content">
                    <div class="tab-pane active " id="sign-in-for-access">

                        <br>

                        <form method="post" action="WebinarSignUpDataSubmit.php" id="myForm" >
			                            <input type="hidden" name="refId" id="refId" value="<?= $refferenceId ?>"/>
			                            <input type="hidden" name="phpFileName" id="phpFileName" value="<?= $rphpFile ?>"/>
			                            <input type="hidden" name="sessionCheckId" id="sessionCheckId" value="<?= $rses_CheckFlag ?>"/>
			                            <input type="hidden" name="sessErrMsg" id="sessErrMsg" value="<?= $rses_Curr_Err_Msg ?>"/>
                            <div class="row">
                                <!--copy 1 from contact first row starts-->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control col-sm-12" id="firstname" name="firstname" placeholder="First Name*" required="required" type="text" onchange="fieldLengthValidatorForExternalWebinars(this);">
                                    </div>

                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control col-sm-12" name="lastname" id="lastname" placeholder="Last Name*" required="required" type="text" onchange="fieldLengthValidatorForExternalWebinars(this);">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Organization*" name="organization" id="organization" required="required" type="text" onchange="fieldLengthValidatorForExternalWebinars(this);">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Designation*" name="designation" id="designation" required="required" type="text" onchange="fieldLengthValidatorForExternalWebinars(this);">
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
                                        <input class="form-control" placeholder="Work Phone*" name="workPhone" id="workPhone" required="required" type="text" onchange="return formatPhoneForWebinarAfetr(this);" onblur="return validatenumber(this)" onkeypress="return isNumberKey(event)">
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
                        <div class="modal-footer" >
                            <div class="row">
                                <div class="col-sm-12"><p class="methodText greyText">
                                        The given information will not be used or be distributed to any sources and will be used only for User Authentication. Miracle has copyrights and is authorized to use and circulate all the resources which are being provided to you.
                                    </p> <br></div> </div>




                            <div class="row">

                                <div class="col-sm-6"><button type="button" class="btn btn-primary col-sm-12" class="md-close" data-toggle="modal" data-target="#myModal1" data-dismiss="modal" style="margin-left:-9px"><i class="fa fa-arrow-left" ></i>&nbsp; Back to Description</button></div>
                                <div class="col-sm-6"><a href="../library/index.php"><button class="btn btn-primary col-sm-12">&nbsp; Back To Library <span> <i class="fa fa-arrow-right" ></i> </span></button></a></div>
                            </div>
                        </div>
                    </div>  <!--first tab ends-->

                    <div class="tab-pane " id="emplyolee-sign-in">
                        <br>
                        <form id="employeeLoginForm" method="post" action="#">
                            <input type="hidden" name="sesionLoginId" id="sesionLoginId" value="<?= $rempID ?>"/>
                            <div class="row"> <div class="col-sm-12"><p class="methodText">
                                        You must be a Miraclite to gain access to this. Please validate yourself using your Miracle credentials for further access.
                                    </p> <br></div> </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" id="loginId" name="loginId" placeholder="LoginId*" required="required" type="text" onkeydown="return enableLoginWhenEnter(event);">
                                    </div>
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
                                     <!--   <span id="resultMessage"></span>
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
                                <div class="col-sm-6 ">
                                    <p style="margin-left: 6px;" class="methodText">Forgot password!<a href="../forgot-password.php" class="linkText"><strong> Click here.</strong></a></p> 
                                </div>
                                <div class="col-sm-6"></div>
                            </div> 
                        </form> 
                        <div class="modal-footer">

                            <div class="row">

                                <div class="col-sm-6"><button type="button" class="btn btn-primary col-sm-12" class="md-close" data-toggle="modal" data-target="#myModal1" data-dismiss="modal" style="margin-left:-9px"><i class="fa fa-arrow-left" ></i>&nbsp;Back to Description</button></div>
                                <div class="col-sm-6"><a href="../library/index.php"><button class="btn btn-primary col-sm-12">&nbsp;Back To Library  <span> <i class="fa fa-arrow-right" ></i> </span></button></a></div>

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
