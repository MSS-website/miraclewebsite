<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="description" content="">

        <meta name="author" content="">



        <?php
       
        include '../config/general.php';
       // require '../config/DbController.php';
        require '../config/ConnectionProvider.php';
        $bannerNumber='1';
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
        $rpopUpFlag = '0';
        $pageTitle = '';
         $primaryTrack = '';
        $secondaryTrack = '';
        $primaryTrackId = '';
        $secondaryTrackId = '';
        $rSeriesId = '';
        $eventStatus = '';
        try {
//            if(! get_magic_quotes_gpc() ){
//         $reventId = addslashes ($_GET['eventId']);
//         //jobPosition
//    }else {
//        $reventId = $_GET['eventId'];
//    }
            $reventId = isset($_GET["eventId"]) ? $_GET["eventId"] : '-1';
            $rsource = isset($_GET["source"]) ? $_GET["source"] : '';
            
            
            
            
            
            
            
            
           // $conn->connectToDatabase();
         //   $conn->selectDatabase();
           // $Query = "SELECT TIMESTAMPDIFF(DAY,CURRENT_TIMESTAMP,event_startdate) AS difference,STATUS FROM tblEventLines WHERE event_id=" . $reventId;
             $Query = "SELECT TIMESTAMPDIFF(DAY,CURRENT_TIMESTAMP,event_startdate) AS difference,STATUS FROM tblEventLines WHERE event_id=:reventId";
             $stmt = $conn->prepare($Query);
              $stmt->bindParam(':reventId', $reventId);
               $stmt->execute();
            $dayDiff = '';
          //  if (mysql_num_rows($responce) > 0) {
            if ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
               // $row = mysql_fetch_row($responce);
                $dayDiff = $row[0];
                $eventStatus = $row[1];
                //  echo "daysdiff-->".$daysdiff;
             //   mysql_close();
            }
            //if ($dayDiff < 0) {
                if ($eventStatus == 'Published') {
                    //$conn->connectToDatabase();
                  //  $conn->selectDatabase();
                    $Query = "SELECT Id,Download_Id FROM tblWebDownloadsLines WHERE WebinarId=:reventId";
                    $stmt = $conn->prepare($Query);
              $stmt->bindParam(':reventId', $reventId);
               $stmt->execute();
                   // if (mysql_num_rows($responce) > 0) {
               if ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
                      //  $row = mysql_fetch_row($responce);
                        $tempReffId = $row[0];
                        $tempObjectId = $row[1];
                        //  echo "daysdiff-->".$daysdiff;
                       // mysql_close();
                    }

                   // header('Location: ../resource/get-resource.php?refId=' . $tempReffId . '&objectId=' . $tempObjectId . '&eventId=' . $reventId);
                     header('Location: webinar-after.php?eventId=' . $reventId);
                 
            } else if ($eventStatus == 'Active'){
                try {

                   // $conn->connectToDatabase();
                  //  $conn->selectDatabase();
                    //$selectQuery = "SELECT event_description,location,event_time_from,event_time_to,timezone,transport,event_startdate,evetnt_enddate,event_title,midday_from,midday_to,event_tagline,OrganizerName,OrganizerEmail,RegistrationLink,event_bold_Title,Page_Title,SeriesId,PrimaryTrackId,SecondaryTrackId FROM tblEventLines WHERE event_id=" . $reventId . " AND WebinarType='E' AND Status='Active'";
                  //  $selectQuery = "SELECT event_description,location,event_time_from,event_time_to,timezone,transport,event_startdate,evetnt_enddate,event_title,midday_from,midday_to,event_tagline,OrganizerName,OrganizerEmail,RegistrationLink,event_bold_Title,Page_Title,SeriesId,PrimaryTrackId,SecondaryTrackId,Status FROM tblEventLines WHERE event_id=" . $reventId . " AND WebinarType='E' ";
                      $selectQuery = "SELECT event_description,location,event_time_from,event_time_to,timezone,transport,event_startdate,evetnt_enddate,event_title,midday_from,midday_to,event_tagline,OrganizerName,OrganizerEmail,RegistrationLink,event_bold_Title,Page_Title,SeriesId,PrimaryTrackId,SecondaryTrackId,Status FROM tblEventLines WHERE event_id=:reventId  AND WebinarType='E' ";
                  //  $result = mysql_query($selectQuery) or die(mysql_error());
                    //reventId
                    //$sno = 1;
                  //  if (mysql_num_rows($result) > 0) {
                    //    $row = mysql_fetch_row($result);
                    $stmt = $conn->prepare($selectQuery);
              $stmt->bindParam(':reventId', $reventId);
               $stmt->execute();
                   // if (mysql_num_rows($responce) > 0) {
               if ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
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
                        $evenTitle = $row[8];
                        $revenTitle = $row[8];
                        $rmiddayFrom = $row[9];
                        $rmiddayTo = $row[10];
                        $eventRegularTitle = $row[11];
                        $organizerName = $row[12];
                        $organizerEmail = $row[13];
                        $registartionLink = $row[14];
                        
                        if($rsource!='')
                        $registartionLink = $registartionLink.'?source='.$rsource;
                        
                        $pageTitle = $row[16];
                        $rSeriesId = $row[17];
                         $primaryTrackId = $row[18];
                        $secondaryTrackId = $row[19];
                        $eventStatus = $row[20];
                        // $sno = $sno+1;
                        $dateString = date('F d , Y', $rEventStartDate);

                        $startDay = date('d', $rEventStartDate);
                        $startMonth = date('F', $rEventStartDate);
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

                        $webinarDate = $startMonth . ' ' . $startDay . ', ' . $startYear . ' from ' . date('h:i  ', $rTimeFrom) . ' to ' . date('h:i  ', $rTimeTo) . ' ' . $rmiddayTo . ' ' . $rtimeZone;
                        
                        
                        
                         $tempConstant = $reventId;
      while($tempConstant > 24)
          $tempConstant  = $tempConstant - 24;


                        // $sno = $sno+1;
                    }else {
                        $rpopUpFlag = '1';
                        header('Location: external-webinar-depot.php?eventId=-1');
                    }
                    //$conn->closeConnection();
                    // mysqli_close($conn);
                } catch (Exception $exc) {

                    $exc->getMessage();
                    $resultMessage = '<font color=red size=2px>' . $exc . '</font>';

                    header('Location: ../back-end-error.php?resultMessage=' . $resultMessage);
                    // $conn->closeConnection(); // closing the connection
                   // mysql_close();
                }

                //-------------------------------------------------------------------------------------
               // $conn = new DbController();
                $displayspekarsList = '';
                try {
                   // $conn->connectToDatabase();
                   // $conn->selectDatabase();
                   // $selectQuery = "SELECT event_speaker,event_designation,Company FROM tblEventSpeakers WHERE STATUS='Active' AND event_id =" . $reventId . " ORDER BY primary_speaker DESC";
                       // $selectQuery = "SELECT SpeakerId,SpeakerName,EventId,ObjectType,PrimaryFlag,Designation,Company,STATUS FROM vwSpeakerList WHERE EventId=". $reventId." AND ObjectType = 'EV' ORDER BY PrimaryFlag DESC";
                     $selectQuery = "SELECT SpeakerId,SpeakerName,EventId,ObjectType,PrimaryFlag,Designation,Company,STATUS FROM vwSpeakerList WHERE EventId=:reventId AND ObjectType = 'EV' ORDER BY PrimaryFlag DESC";
                   $stmt = $conn->prepare($selectQuery);
                 $stmt->bindParam(':reventId', $reventId);
                    $sno = 1;
                   // while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
                    $stmt->execute();
                 $stmt->setFetchMode(PDO::FETCH_ASSOC);
          
                     while ($row = $stmt->fetch()) {
                        //printf("ID: %s  Name: %s", $row["id"], $row["name"]);
                        // $jobId = $row["Id"];
                        // $displayspekarsList = $displayspekarsList.'<p class="methodText"><strong>'.$row["event_speaker"].'</strong>,'.$row["event_designation"]."</p>";
                        $displayspekarsList = $displayspekarsList . '<p class="noMarginBottom"><strong>' . $row["SpeakerName"] . '</strong> <br>' . $row["Designation"] . '</p><p class="greyText noMargin">' . $row["Company"] . '</p>  <div class="row"><div class="col-sm-7"><hr class="noMarginBottom noMarginTop"></div><div class="col-sm-5"></div></div>';


                        $spekarsList = $spekarsList . "<b>" . $row["SpeakerName"] . "," . $row["Designation"] . " - " . $row["Company"] . "</b></br>";
                        ?>
                        <?php
                        $sno = $sno + 1;
                    }


                    //$conn->closeConnection();
                    // mysqli_close($conn);
                  //  mysql_close();
                } catch (Exception $exc) {

                    $exc->getMessage();
                    $resultMessage = '<font color=red size=2px>' . $exc . '</font>';
                   // $conn->closeConnection(); // closing the connection
                }
            }else if ($eventStatus == 'Completed'){
                header('Location: external-webinar-depot.php?eventId=-2');
            }else {
                header('Location: external-webinar-depot.php?eventId=-1');
            }
        } catch (Exception $exc) {

            $exc->getMessage();
            $resultMessage = '<font color=red size=2px>' . $exc . '</font>';
            //  $conn->closeConnection(); // closing the connection
            //mysql_close();
        }
//--------------------------------------------------------------------------------------
        /*
          if(isset($_POST['btnSubmit'])){
          // echo 'hii';
          try{
          $conn->connectToDatabase();

          if(! get_magic_quotes_gpc() ){
          $reventId = addslashes ($_POST['eventId']);
          $rfirstname = addslashes ($_POST['firstName']);
          $remail = addslashes ($_POST['email']);
          $rorganization = addslashes ($_POST['organization']);
          $rlastName = addslashes ($_POST['lastName']);
          $rphone = addslashes ($_POST['phone']);
          $rdesignation = addslashes ($_POST['designation']);
          }else {
          $reventId = $_POST['eventId'];
          $rfirstname = $_POST['firstName'];
          $remail = $_POST['email'];
          $rorganization = $_POST['organization'];
          $rlastName = $_POST['lastName'];
          $rphone = $_POST['phone'];
          $rdesignation = $_POST['designation'];
          }
          $conn->selectDatabase();
          $sql = "INSERT INTO tblEventAttendies (event_id,firstname,lastname,email_id,phone_no,org_name,designation)  ".
          " VALUES('$reventId','$rfirstname','$rlastName','$remail','$rphone','$rorganization',".
          "'$rdesignation')";

          //  echo $sql;
          $selectQuery = "select * from tblEventAttendies where email_id='$remail' AND phone_no='".$rphone."'";
          //echo $selectQuery;
          $selectresponce = mysql_query($selectQuery);
          if(mysql_num_rows($selectresponce)>0){

          $resultMessage = '<font color=red size=2px>You are already registered ..</font>';
          mysql_close();
          header('Location: ../back-end-error.php?resultMessage='.$resultMessage);
          // $conn->closeConnection(); // closing the connection
          }else{

          if(!mysql_query($sql)){
          $resultMessage= "<font color=red size=2px>Data insertion failed..Please try again later\n</font>";
          // $conn->closeConnection(); // closing the connection
          mysql_close();
          header('Location: ../back-end-error.php?resultMessage='.$resultMessage);
          }else{
          $eflag=EMAILFLAG;
          if($eflag==1){
          require '../classes/MailManager.php';
          $mailmanager = new MailManager();
          $vcsPath = WEBINAR_VCS_LOCATION;
          $vcsFileName = 'Sap_Integration.ics';
          $mailmanager->sendWebinarReminder($webinarTitle.' '.$eventRegularTitle,$webinarStartTime,$webinarStartDate,$webinarDate,$webinarTime,strip_tags($webinarDescription),$spekarsList,$remail,$rfirstname,$rlastName,$vcsPath,$vcsFileName);
          $mailmanager->sendWebinarRegisteredDetails($rfirstname,$rlastName,$remail,$rphone,$rorganization,$evenTitle.' '.$eventRegularTitle,$rdesignation,$organizerName,$organizerEmail);

          }


          mysql_close();
          $resultMessage = 'Thank you for your patience in filling in the details. We will be back with you soon.';
          header('Location: ../Status.php?resultMessage='.$resultMessage);
          }

          }

          }catch(Exception $exc){

          $exc->getMessage();
          $resultMessage= '<font color=red size=2px>'.$exc.'</font>';

          //  $conn->closeConnection(); // closing the connection
          mysql_close();
          header('Location: ../back-end-error.php?resultMessage='.$resultMessage);

          }

          } */
        ?>
        <title>
<?php echo strip_tags($webinarTitle); ?>
        </title>
        <?php include '../config/Locations.php';?>
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <link href="../css/font-awesome.min.css" rel="stylesheet">

        <link href="../css/main.css" rel="stylesheet">

        <link href="../css/font-awesome.min.css" rel="stylesheet">

        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="../css/default.css"/>
        <link rel="stylesheet" type="text/css" href="../css/component.css"/>
        <link href="/resources/demos/style.css" rel="stylesheet">
        <script src="../js/modernizr.custom.js"></script>
        <script src="../js/fileinput.js"></script>
        <link href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css" rel="stylesheet">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
        <link href="/resources/demos/style.css" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?= AMAZON_URL ?>/images/favicon.ico" rel="shortcut icon">
        <script src="../js/custom.js" type="text/javascript"></script>

    </script>

    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
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
  <!--  <script>
     /*   $(function() {
       
            if(document.getElementById("popUpFlag").value=='1'){
                $("#myModal").modal();
            }
        });
        function getWebinarType(){
            window.location = '../events/external-webinar-depot.php';
        }*/
    </script> -->
     <!-- <style>
            .modal-footer{
                margin-bottom: 20px;
            }
        </style> -->
    
    
    
    
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
         /*background-position:0px 71px;*/
            }

            
            
        </style>
</head>
<?php include '../header.php'; ?>
<body>
    <input type ="hidden" name="popUpFlag" id="popUpFlag" value="<?= $rpopUpFlag ?>"/> 
    
    <section>
        <div class="overlay section_bg">
            <div class=" container">
               
                <div class="row">    
                    <div class="col-sm-7 text-left">  
                        <br><br>
                        <h1 class="micro "><font color="#fff"><strong>Technical Webinar</strong></font></h1>

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

      
    <div class="row">
        <div class="col-sm-12"><hr class="noMargin"></div>
    </div>
    <!--contact form copy starts-->
</div>
<div class="row">

    <div class="col-sm-7">
    <!--  <p class="methodText">In an ever evolving market-place it is critical for enterprises to become agile and flexible for them to be able to compete with dynamic changes. With this in mind it is essential for an organization to integrate all its disparate pieces together to form a robust yet flexible architecture which is amicable for future change. </p>
      <p class="methodText">Join us on <strong>April 28th, 2015</strong> as we demonstrate to you the ease of integrating your enterprise assets into a SAP System using IBM's WebSphere Adapter for SAP along with their enterprise-grade universal integration foundation, <strong>IBM Integration Bus</strong>. Our experts along with IBM will help you to make the right decision to help suit your business needs and drive great business value for your enterprise.</p>
      <p class="methodText heavy">Sneak peak into the success of one of our customers along with a feature flash of the latest release of IBM IIB, v10. </p>
        -->
<?php if ($rpopUpFlag === '0') { ?>

            <h2 class="heavy noMarginTop"><?php echo $pageTitle; ?> 


            </h2>
            <div class="row noMarginTop">
                <div class="col-sm-5 noMarginTop">
                    <hr class="noMarginTop noMarginBottom">
                </div><!-- This is the divider line between the heading and the content -->
            </div>

            <p class="greyText heavy">

                <!-- August 6th, 2015 from 1:00 to 1:30 PM CST -->
    <?php echo $webinarDate; ?>

            </p>

    <?php echo $reventDescription; ?> 
           
        </div>

        <div class="col-sm-5">
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
            <p class="greyText noMargin">Miracle Software Systems, Inc.</p>
            <hr>
            -->

    <?php echo $displayspekarsList; ?>
            <a href="<?php echo $registartionLink ?>" target="_blank"><button class="btn btn-primary btn-lg" type="button">Register for Webinar</button></a><!-- Link for this needs to be dynamic as well in the href -->
            <hr>
            <p class="greyText">Contact <a class="linkText" href="mailto:<?php echo $organizerEmail ?>"><strong> <?php echo $organizerEmail ?></strong></a> for any queries in regards to the webinar</p>
        </div>

    </div>
<?php } ?>

<div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-10">

    </div>
    <div class="col-sm-1"></div>
</div>

<!-- Suggestion Box Start -->
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
               require '../config/ConnectionProvider.php';
                          //  $conn = new DbController();
                            $dayDiff = '';
                            
                          //  echo 'eventId-->'.$webEventId;
                            try {
                               // $conn->connectToDatabase();
                                //$conn->selectDatabase();
                                $Query = "SELECT TIMESTAMPDIFF(DAY,CURRENT_TIMESTAMP,event_startdate) AS difference FROM tblEventLines WHERE event_id=:webEventId";
           // $responce = mysql_query($Query) or die(mysql_error());
             $stmt = $conn->prepare($Query);
              $stmt->bindParam(':webEventId', $webEventId);
               $stmt->execute();
            $dayDiff = '';
           // if (mysql_num_rows($responce) > 0) {
             //   $row = mysql_fetch_row($responce);
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
                            //$conn = new DbController();
                            $tempReffId = '';
                            require '../config/ConnectionProvider.php';
                            
                          //  echo 'eventId-->'.$webEventId;
                            try {
                               // $conn->connectToDatabase();
                              //  $conn->selectDatabase();
                              //  $Query = "SELECT Id,Download_Id FROM tblWebDownloadsLines WHERE WebinarId=".$webEventId;
                                  $Query = "SELECT Id,Download_Id FROM tblWebDownloadsLines WHERE WebinarId=:webEventId";
                                   $stmt = $conn->prepare($Query);
              $stmt->bindParam(':webEventId', $webEventId);
               $stmt->execute();
           // $responce = mysql_query($Query) or die(mysql_error());
           
            $tempReffId = '';
           // if (mysql_num_rows($responce) > 0) {
              //  $row = mysql_fetch_row($responce);
            if ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
                $tempReffId = $row[0];
              
                //  echo "tempReffId-->".$tempReffId;
               // mysql_close();
            }
                              
                                  
                            } catch (Exception $exc) {

                                $exc->getMessage();
                                $resultMessage = '<font color=red size=2px>' . $exc . '</font>';
                                header('Location: ../back-end-error.php?resultMessage=' . $resultMessage);
                                // $conn->closeConnection(); // closing the connection
                            }
                            return $tempReffId;
                        }
          //  $conn = new DbController();
            
            $displayDivs = '';
            $myEventids =  array();
              try {
            $serialNo=0;
            if ($rSeriesId > 0) {
                //  $conn->connectToDatabase();
          //  $conn->selectDatabase();
              //  $selectQueryy = "SELECT event_id,event_title,event_bold_Title,event_tagline,event_description,event_startdate,STATUS,After_Description,SeriesId,Page_Title FROM tblEventLines WHERE SeriesId=".$rSeriesId." AND STATUS !='InActive' AND event_id !=".$reventId." ORDER BY event_startdate DESC";
                $selectQueryy = "SELECT event_id,event_title,event_bold_Title,event_tagline,event_description,event_startdate,STATUS,After_Description,SeriesId,Page_Title,FileName FROM tblEventLines WHERE SeriesId=:rSeriesId AND STATUS !='InActive' AND event_id !=:reventId ORDER BY event_startdate DESC";
//echo "selectQueryy ".$selectQueryy;
                 $stmt = $conn->prepare($selectQueryy);
              $stmt->bindParam(':rSeriesId', $rSeriesId);
              $stmt->bindParam(':reventId', $reventId);
               $stmt->execute();
                //$num_rows = $stmt->rowCount();
                 $stmt->setFetchMode(PDO::FETCH_ASSOC);
                //$result = mysql_query($selectQueryy) or die(mysql_error());
                $serialNo = 0;
                //while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
                 while ($row = $stmt->fetch()) {
                    $myvalue =strip_tags($row["event_description"]);
                 $tempEventId = $row["event_id"];
                 $startDate = date( 'F d, Y', strtotime($row["event_startdate"]));
                // echo 'hi-->'.$tempEventId;
 
            //echo $myvalue;
//$desc=explode(".",$myvalue); 
$desc=substr($myvalue, 0, 150);

                   // if (getDateDiff($tempEventId) >= 0) {
if ($row["STATUS"] == 'Active') {
 $myEventids[] = $row["event_id"];
                    $serialNo = $serialNo + 1;
                    $displayDivs = $displayDivs . '<div class="col-xs-4 ">' . '<div class="portfolio-item noMarginBottom">' . '<p class="heavy greyText noMargin">Technical Webinar</p>';
                    $displayDivs = $displayDivs . '<p class="heavy noMarginBottom"><a href="../webinars/' .$row["FileName"].'">' . $row["Page_Title"] . '</a>';
                    $displayDivs = $displayDivs . '</p>' . '<div class="row">' . '<div class="col-sm-6 noMarginTop noMarginBottom">' . '<hr> </div></div> <p class="noMargin">' . $desc . '...|'.' <a class="linkText heavy" href="../webinars/' .$row["FileName"].'">' . 'Read More</a>';
                    $displayDivs = $displayDivs . '</p><p class="greyText noMargin">' . $startDate . ' </p></div></div>' . '@#$';
                } else if ($row["STATUS"] == 'Published') {
                     $myEventids[] = $row["event_id"];
                    $reffId=getReffId($tempEventId);
                    $serialNo = $serialNo + 1;
                    $displayDivs = $displayDivs . '<div class="col-xs-4">' . '<div class="portfolio-item">' . '' . '<p class="heavy greyText noMargin">On-Demand Webinar</p>';
                    
                    //$displayDivs = $displayDivs . '<p class="heavy noMarginBottom"><a href="../resource/get-resource.php?refId='.$reffId.'&objectId=4&eventId='.$row["event_id"].'">' . $row["Page_Title"] . '</a>';
                    //$displayDivs = $displayDivs . '</p>' . '<div class="row">' . '<div class="col-sm-6 noMarginTop noMarginBottom">' . '<hr> </div></div> <p class="noMargin">' . $desc . '...|'.' <a class="linkText heavy" href="../resource/get-resource.php?refId='.$reffId.'&objectId=4&eventId='.$row["event_id"].'">' . 'Read More</a>';
                    
                    $displayDivs = $displayDivs . '<p class="heavy noMarginBottom"><a href="../webinars/' .$row["FileName"].'">' . $row["Page_Title"] . '</a>';
                    $displayDivs = $displayDivs . '</p>' . '<div class="row">' . '<div class="col-sm-6 noMarginTop noMarginBottom">' . '<hr> </div></div> <p class="noMargin">' . $desc . '...|'.' <a class="linkText heavy" href="../webinars/' .$row["FileName"].'">' . 'Read More</a>';
                    
                    
                    $displayDivs = $displayDivs . '</p><p class="greyText noMarginTop">' . $startDate . ' </p></div></div>' . '@#$';
                }
                if ($serialNo == 9) {
                    break;
                }
               
            }
            }
            if ($serialNo < 9) {
                $dayDiff='';
                 
              
          //  $conn->connectToDatabase();
          //  $conn->selectDatabase();
          //  $displayspekarsList = '';
            $selectQuery = "SELECT event_id,Page_Title,event_description,event_startdate,STATUS,FileName FROM tblEventLines
WHERE WebinarType ='E' AND STATUS !='InActive' AND event_id !=:reventId";
             if ($primaryTrackId != '' && $secondaryTrackId != '') {
               // $selectQuery = $selectQuery . ' AND (PrimaryTrackId=' . $primaryTrackId . ' OR SecondaryTrackId = ' . $secondaryTrackId . ' OR PrimaryTrackId=' . $secondaryTrackId . ' OR SecondaryTrackId = ' . $primaryTrackId . ')';
                  $selectQuery = $selectQuery . ' AND (PrimaryTrackId=:primaryTrackId1  OR SecondaryTrackId = :secondaryTrackId1  OR PrimaryTrackId=:secondaryTrackId2  OR SecondaryTrackId = :primaryTrackId2 )';
            } else if ($primaryTrackId != '' && $secondaryTrackId == '') {
                $selectQuery = $selectQuery . ' AND (PrimaryTrackId=:primaryTrackId1 OR SecondaryTrackId = :primaryTrackId2 )';
            }
            $selectQuery = $selectQuery.' ORDER BY event_startdate DESC';
             $stmt = $conn->prepare($selectQuery);
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
            
            
           // $result = mysql_query($selectQuery) or die(mysql_error());
         //   $sno = 0;
            //while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
                   while ($row = $stmt->fetch()) {
                $myvalue =strip_tags($row["event_description"]);
                 $startDate = date( 'F d, Y', strtotime($row["event_startdate"]));
 
            //echo $myvalue;
//$desc=explode(".",$myvalue); 
$desc=substr($myvalue, 0, 150);
       
                 $isExist = false;


for($x=0;$x<sizeof($myEventids);$x++){

    if($myEventids[$x]==$row["event_id"]){
      $isExist = true;
      break;
    }
}
if(!$isExist){
                //printf("ID: %s  Name: %s", $row["id"], $row["name"]);
                // $jobId = $row["Id"];
                // $displayspekarsList = $displayspekarsList.'<p class="methodText"><strong>'.$row["event_speaker"].'</strong>,'.$row["event_designation"]."</p>";
                //  $displayspekarsList = $displayspekarsList . '<p class="noMarginBottom"><strong>' . $row["event_speaker"] . '</strong> <BR>' . $row["event_designation"] . '</p><p class="greyText noMargin">' . $row["Company"] . '</p>  <div class="row"><div class="col-sm-7"><hr class="noMarginBottom noMarginTop"></div><div class="col-sm-5"></div></div>';
                //if (getDateDiff($row["event_id"]) >= 0) {
    if ($row["STATUS"] == 'Active') {
                    $myEventids[] = $row["event_id"];
                    $serialNo = $serialNo + 1;
                    $displayDivs = $displayDivs . '<div class="col-xs-4">' . '<div class="portfolio-item">' . '' . '<p class="heavy greyText noMargin">Technical Webinar</p>';
                    $displayDivs = $displayDivs . '<p class="heavy noMarginBottom "><a href="../webinars/' .$row["FileName"].'">' . $row["Page_Title"] . '</a>';
                    $displayDivs = $displayDivs . '</p>' . '<div class="row">' . '<div class="col-sm-6 noMarginBottom noMarginTop">' . '<hr> </div></div> <p class="noMargin">' . $desc . '...|'.' <a class="linkText heavy" href="../webinars/' .$row["FileName"].'">' . 'Read More</a>';
                    $displayDivs = $displayDivs . '</p><p class="greyText noMarginTop">' . $startDate . ' </p></div></div>' . '@#$';
                } else if ($row["STATUS"] == 'Published') {
                    $myEventids[] = $row["event_id"];
                   $reffId=getReffId($row["event_id"]);
                    $serialNo = $serialNo + 1;
                    $displayDivs = $displayDivs . '<div class="col-xs-4">' . '<div class="portfolio-item">' . '' . '<p class="heavy greyText noMargin">On-Demand Webinar</p>';
                    
                    //$displayDivs = $displayDivs . '<p class="heavy noMarginBottom"><a href="../resource/get-resource.php?refId=' . $reffId . '&objectId=4&eventId=' . $row["event_id"] . '">' . $row["Page_Title"] . '</a>';
                  //  $displayDivs = $displayDivs . '</p>' . '<div class="row">' . '<div class="col-sm-6 noMarginTop noMarginBottom">' . '<hr> </div></div> <p class="noMargin">' . $desc . '...|'.' <a class="linkText heavy" href="../resource/get-resource.php?refId=' . $reffId . '&objectId=4&eventId=' . $row["event_id"] . '">' . 'Read More</a>';
                   
                    $displayDivs = $displayDivs . '<p class="heavy noMarginBottom"><a href="../webinars/' .$row["FileName"].'">' . $row["Page_Title"] . '</a>';
                    $displayDivs = $displayDivs . '</p>' . '<div class="row">' . '<div class="col-sm-6 noMarginTop noMarginBottom">' . '<hr> </div></div> <p class="noMargin">' . $desc . '...|'.' <a class="linkText heavy" href="../webinars/' .$row["FileName"].'">' . 'Read More</a>';
                    
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
               // $conn->connectToDatabase();
              //  $conn->selectDatabase();
               
               // $selectQuery = "SELECT Id,Download_Id,Title,DocTitle,CreatedDate,DocLongDesc,SourceLink,WebinarId,DocType FROM tblWebDownloadsLines WHERE Status='Active' AND WebinarId !=".$reventId; 
                 $selectQuery = "SELECT Id,Download_Id,Title,DocTitle,CreatedDate,DocLongDesc,SourceLink,WebinarId,DocType FROM tblWebDownloadsLines WHERE Status='Active' AND WebinarId !=:reventId"; 
                  if ($primaryTrackId != '' && $secondaryTrackId != '') {
               // $selectQuery = $selectQuery . ' AND (PrimaryTrackId=' . $primaryTrackId . ' OR SecondaryTrackId = ' . $secondaryTrackId . ' OR PrimaryTrackId=' . $secondaryTrackId . ' OR SecondaryTrackId = ' . $primaryTrackId . ')';
                       $selectQuery = $selectQuery . ' AND (PrimaryTrackId=:primaryTrackId1 OR SecondaryTrackId = :secondaryTrackId1  OR PrimaryTrackId= :secondaryTrackId2  OR SecondaryTrackId = :primaryTrackId2 )';
            } else if ($primaryTrackId != '' && $secondaryTrackId == '') {
               // $selectQuery = $selectQuery . ' AND (PrimaryTrackId=' . $primaryTrackId . ' OR SecondaryTrackId = ' . $primaryTrackId . ')';
                 $selectQuery = $selectQuery . ' AND (PrimaryTrackId=:primaryTrackId1  OR SecondaryTrackId = :primaryTrackId2 )';
            }
             $selectQuery = $selectQuery ." ORDER BY CreatedDate DESC";
             
             
             
              $stmt = $conn->prepare($selectQuery);
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
               // $result = mysql_query($selectQuery) or die(mysql_error());
                // $sno = 0;
             //   while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
                    //printf("ID: %s  Name: %s", $row["id"], $row["name"]);
                     $SourceLink = $row["SourceLink"];
                      $myvalue =strip_tags($row["DocLongDesc"]);
                 $startDate = date( 'F d, Y', strtotime($row["CreatedDate"]));
 
            //echo $myvalue;
//$desc=explode(".",$myvalue); 
$desc=substr($myvalue, 0, 150);
                    // $displayspekarsList = $displayspekarsList.'<p class="methodText"><strong>'.$row["event_speaker"].'</strong>,'.$row["event_designation"]."</p>";
                    //  $displayspekarsList = $displayspekarsList . '<p class="noMarginBottom"><strong>' . $row["event_speaker"] . '</strong> <BR>' . $row["event_designation"] . '</p><p class="greyText noMargin">' . $row["Company"] . '</p>  <div class="row"><div class="col-sm-7"><hr class="noMarginBottom noMarginTop"></div><div class="col-sm-5"></div></div>';

 $isExist1=false;              
for($x=0;$x<sizeof($myEventids);$x++){

    if($myEventids[$x]==$row["WebinarId"]){
      $isExist1 = true;
      break;
    }
}
if(!$isExist1){
    $downloadArray = $row["Id"];
                    $serialNo = $serialNo + 1;
                    $displayDivs = $displayDivs . '<div class="col-xs-4">' . '<div class="portfolio-item">' . '' . '<p class="heavy greyText noMargin">'.$row["DocType"].'</p>';
                    $displayDivs = $displayDivs . '<p class="heavy nomarginBottom noMarginTop"><a href="..'.$SourceLink.'" > '. $row["DocTitle"] . '</a>';
                    $displayDivs = $displayDivs . '</p>' . '<div class="row">' . '<div class="col-sm-6 noMarginBottom noMarginTop">' . '<hr> </div></div> <p class="noMargin">' . $desc . '...|'.' <a class="linkText heavy" href="..'.$SourceLink.'" >' . 'Read More</a>';
                    $displayDivs = $displayDivs . '</p><p class="greyText noMarginTop">' . $startDate . ' </p></div></div>' . '@#$';
                    
                    
                }
                    
                    if($serialNo==9){
                        break;
                    }
                }
                
            }
            
            
            
            if ($serialNo < 9) {
               // $conn->connectToDatabase();
             //   $conn->selectDatabase();
               
               // $selectQuery = "SELECT Id,Download_Id,Title,DocTitle,CreatedDate,DocLongDesc,SourceLink,WebinarId,DocType FROM tblWebDownloadsLines WHERE Status='Active' AND  WebinarId !=".$reventId." ORDER BY CreatedDate DESC LIMIT 9";
                 $selectQuery = "SELECT Id,Download_Id,Title,DocTitle,CreatedDate,DocLongDesc,SourceLink,WebinarId,DocType FROM tblWebDownloadsLines WHERE Status='Active' AND  WebinarId !=:reventId ORDER BY CreatedDate DESC LIMIT 9";
                //$result = mysql_query($selectQuery) or die(mysql_error());
                // $sno = 0;
                  $stmt = $conn->prepare($selectQuery);
              $stmt->bindParam(':reventId', $reventId);
              $stmt->execute();
              $stmt->setFetchMode(PDO::FETCH_ASSOC);
             //   while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
             while ($row = $stmt->fetch()) {
                    //printf("ID: %s  Name: %s", $row["id"], $row["name"]);
                     $SourceLink = $row["SourceLink"];
                      $myvalue =strip_tags($row["DocLongDesc"]);
                  $startDate = date( 'F d, Y', strtotime($row["CreatedDate"]));
 
            //echo $myvalue;
//$desc=explode(".",$myvalue); 
$desc=substr($myvalue, 0, 150);
                    // $displayspekarsList = $displayspekarsList.'<p class="methodText"><strong>'.$row["event_speaker"].'</strong>,'.$row["event_designation"]."</p>";
                    //  $displayspekarsList = $displayspekarsList . '<p class="noMarginBottom"><strong>' . $row["event_speaker"] . '</strong> <BR>' . $row["event_designation"] . '</p><p class="greyText noMargin">' . $row["Company"] . '</p>  <div class="row"><div class="col-sm-7"><hr class="noMarginBottom noMarginTop"></div><div class="col-sm-5"></div></div>';
$isExist2=false;              
 $isDownloadExist=false; 
for($x=0;$x<sizeof($myEventids);$x++){

    if($myEventids[$x]==$row["WebinarId"]){
      $isExist2 = true;
      break;
    }
}
for($x=0;$x<sizeof($downloadArray);$x++){

    if($downloadArray[$x]==$row["Id"]){
      $isDownloadExist = true;
      break;
    }
}
if(!$isExist2 && !$isDownloadExist){
$downloadArray = $row["Id"];
                    $serialNo = $serialNo + 1;
                    $displayDivs = $displayDivs . '<div class="col-xs-4">' . '<div class="portfolio-item">' . '<p class="heavy greyText noMargin">'.$row["DocType"].'</p>';
                    $displayDivs = $displayDivs . '<p class="heavy noMarginBottom"><a href="..'.$SourceLink.'" > '. $row["DocTitle"] . '</a>';
                    $displayDivs = $displayDivs . '</p>' . '<div class="row">' . '<div class="col-sm-6 noMarginTop noMarginBottom">' . '<hr> </div></div> <p class="noMargin">' . $desc . '...|'.' <a class="linkText heavy" href="..'.$SourceLink.'" >' . 'Read More</a>';
                    $displayDivs = $displayDivs . '</p><p class="greyText noMarginTop">' . $startDate . ' </p></div></div>' . '@#$';
}
                    if($serialNo==9){
                        break;
                    }
                }
                
            }

              $array =  explode ( '@#$' , $displayDivs );
         // echo 'array size-->'.count($array);
          
          if(count($array)>0){
             ?> <div class="row">
                <div id="scroller" class="carousel slide">
                        <div class="carousel-inner">
              
         <?php 
         $temprows = 0;
         $initial = true;
         $isClosed = false;
         for ($x = 0; $x < count($array)-1; $x++) {
              
             if($temprows==0&&$initial){
                 $isClosed = false;
                 ?>
                 <div class="item active">
                                <div class="row">
                 
                 <?php
             }else if($temprows==0){
                 $isClosed = false;
                 ?> <div class="item">
                                <div class="row"><?php
             }
             
          
    echo $array[$x];
     $temprows++;  
     $initial= false;
     if($temprows==3){
         $temprows = 0;
         ?>
                                </div>
                 </div>
         <?php
         $isClosed = true;
     }
    
    
    
    
}
if(!$isClosed){
    ?></div>
                 </div><?php
}


?>

                        </div>
                </div>
             </div>

<?php

} 
          
         
              }catch(Exception $exc){
       
      $exc->getMessage();
         $resultMessage= '<font color=red size=2px>'.$exc.'</font>';
          header('Location: ../back-end-error.php?resultMessage='.$resultMessage); 
                // $conn->closeConnection(); // closing the connection
                   
}
     




                ?>




            
            <!--- Start -->
            
            
            
            
            
            
            <!-- End -->
            
            
                <!--/.row-->
            </div>

<!-- Suggestion Box End -->
</div>  
<br/>
<!--contact form copy ends-->

</section><!--/#error-->
<?php include '../footer.php'; ?>   

</body>
</html>
