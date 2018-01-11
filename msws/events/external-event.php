<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="">
    
    <meta name="author" content="">
    
    <title>
      Webinar | Miracle
    </title>
    
    
                 
      
    	<?php
   include '../config/Locations.php';
        include '../config/general.php';
        require '../config/DbController.php';
        $conn = new DbController();
        $resultMessage = '';
        $reventDescription = '';
        $rLocation='';
        $rTimeFrom='';
        $rTimeTo='';
        $rtimeZone = '';
         $rTransport='';
         $rEventStartDate = '';
         $rEventEndDate = '';
         $rtime = '';
         $evenDate = '';
         $evenTitle = '';
         $reventId = '';
         $rmiddayFrom = '';
         $rmiddayTo = '';
         $eventRegularTitle = '';
         
         $webinarTitle = '';
         $webinarStartTime = '';
         $webinarStartDate = '';
         $webinarDate = '';
         $webinarTime = '';
         $webinarDescription ='';
         $spekarsList = '';
         
         $organizerName = '';
         $organizerEmail = '';
        try {
            if(! get_magic_quotes_gpc() ){
         $reventId = addslashes ($_GET['eventId']);
         //jobPosition
    }else {
        $reventId = $_GET['eventId'];
    }
            
             $conn->connectToDatabase();
             $conn->selectDatabase();
            $selectQuery = "SELECT event_description,location,event_time_from,event_time_to,timezone,transport,event_startdate,evetnt_enddate,event_title,midday_from,midday_to,event_tagline,OrganizerName,OrganizerEmail FROM tblEventLines WHERE event_id=".$reventId;
             $result = mysql_query($selectQuery) or die(mysql_error());;
             //$sno = 1;
              if(mysql_num_rows($result)>0){
                  $row = mysql_fetch_row($result); 
                 //printf("ID: %s  Name: %s", $row["id"], $row["name"]);
                  //printf("ID: %s  Name: %s", $row["id"], $row["name"]);
                 $reventDescription = $row[0];
                 $rLocation = $row[1];
                 $rTimeFrom = strtotime($row[2]);
                 $rTimeTo = strtotime($row[3]);
                $rtimeZone= $row[4];
                $rTransport= $row[5];
                $rEventStartDate= strtotime($row[6]);
                $rEventEndDate= strtotime($row[7]);
                $evenTitle = $row[8];
                $rmiddayFrom = $row[9];
                $rmiddayTo = $row[10];
                $eventRegularTitle = $row[11];
                $organizerName = $row[12];
                $organizerEmail = $row[13];
                // $sno = $sno+1;
                  $dateString = date('M d , Y', $rEventStartDate);
                  
                     $startDay =  date('d', $rEventStartDate);
                     $startMonth =  date('M', $rEventStartDate);
                     $startYear =  date('Y', $rEventStartDate);
                     
                     $endDay =  date('d', $rEventEndDate);
                      $endMonth =  date('M', $rEventEndDate);
                       $endYear =  date('Y', $rEventEndDate);
                       $startDayName = date('l', $rEventStartDate);
                  $evenDate = '';
                  if($startDay!=$endDay)
                      $evenDate = $startMonth.' '.$startDay.'-'.$endDay.' '.$startYear.'-'.$startDayName;
                  else
                      $evenDate = $dateString.'-'.$startDayName;
                $rtime=  date('h:i  ', $rTimeFrom).$rmiddayFrom.' to '.date('h:i  ', $rTimeTo).$rmiddayTo;
               
                $webinarTitle = $evenTitle;
                 
         $webinarStartTime = date('h:i  ', $rTimeFrom).$rmiddayFrom;
         $webinarStartDate = $dateString;
         $webinarDate = $evenDate;
         $webinarTime = $rtime;
         $webinarDescription =$reventDescription;
        
                // $sno = $sno+1;
             }
             //$conn->closeConnection();
            // mysqli_close($conn);
             mysql_close();
             
                 }catch(Exception $exc){
       
      $exc->getMessage();
         $resultMessage= '<font color=red size=2px>'.$exc.'</font>';
         
          header('Location: ../back-end-error.php?resultMessage='.$resultMessage); 
                // $conn->closeConnection(); // closing the connection
                   
}
   //-------------------------------------------------------------------------------------
   $conn = new DbController();
        $displayspekarsList = '';
        try {
             $conn->connectToDatabase();
             $conn->selectDatabase();
             $selectQuery = "SELECT event_speaker,event_designation,Company FROM tblEventSpeakers WHERE event_id =". $reventId." ORDER BY primary_speaker DESC";
             $result = mysql_query($selectQuery) or die(mysql_error());;
             $sno = 1;
             while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
                 //printf("ID: %s  Name: %s", $row["id"], $row["name"]);
                // $jobId = $row["Id"];
                // $displayspekarsList = $displayspekarsList.'<p class="methodText"><strong>'.$row["event_speaker"].'</strong>,'.$row["event_designation"]."</p>";
                  $displayspekarsList = $displayspekarsList.'<p class="noMarginBottom"><strong>'.$row["event_speaker"].'</strong>, '.$row["event_designation"].'</p><p class="greyText noMargin">'.$row["Company"].'</p> <hr>';
               
          
         $spekarsList =$spekarsList. "<b>".$row["event_speaker"].",".$row["event_designation"]." - ".$row["Company"]."</b></br>";
          
          
          ?>
                 <?php
                 $sno = $sno+1;
             }
             
             
             //$conn->closeConnection();
            // mysqli_close($conn);
             mysql_close();
             
                 }catch(Exception $exc){
       
      $exc->getMessage();
         $resultMessage= '<font color=red size=2px>'.$exc.'</font>';
                 $conn->closeConnection(); // closing the connection
                   
}
//--------------------------------------------------------------------------------------

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
                 
            //$resultMessage= "<font color=green size=2px>We have recived your deatils, Our team will contact you.\n</font>"; 
         //   $conn->closeConnection(); // closing the connection
           // echo'<script> window.location="../thank-you.php"; </script> ';
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
               
         }
        
   ?>
    
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
  
  <link rel="shortcut icon" href="../images/favicon.ico">
  
  </head>
  <?php include '../header.php';?>
  <body>
     <section  class="container">

<br>
      <br>
      <br>
      <br>
      <div class="row">
        <div class="col-sm-1">
        </div>
        <div class="col-sm-6 text-left">
          <h2 class="noMargin">
            <strong><?php echo $evenTitle;?></strong> <?php echo $eventRegularTitle;?>
           
          </h2>
        </div>
        <div class="col-sm-4 text-right">
          <ul class="breadcrumb pull-right">
            <li>
              <a href="../">
                Home
              </a>
            </li>
             <li>
              <a href="../upcoming-events.php">
                Events
              </a>
            </li>
            <li class="active">
             Technical Webinar
            </li>
          </ul>
        </div>
        <div class="col-sm-1">
        </div>
      </div>
      <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10"><hr></div>
        <div class="col-sm-1"></div>
      </div>
      <!--contact form copy starts-->
      </div>
        <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-6">
        <!--  <p class="methodText">In an ever evolving market-place it is critical for enterprises to become agile and flexible for them to be able to compete with dynamic changes. With this in mind it is essential for an organization to integrate all its disparate pieces together to form a robust yet flexible architecture which is amicable for future change. </p>
          <p class="methodText">Join us on <strong>April 28th, 2015</strong> as we demonstrate to you the ease of integrating your enterprise assets into a SAP System using IBM's WebSphere Adapter for SAP along with their enterprise-grade universal integration foundation, <strong>IBM Integration Bus</strong>. Our experts along with IBM will help you to make the right decision to help suit your business needs and drive great business value for your enterprise.</p> -->
             <?php echo $reventDescription;?> 
          <table class="table table-hover table-striped">
            <tbody>
              <tr>
                <td><strong>Location</strong></td>
                <td>
                    <!-- Online Webinar -->
                <?php echo $rLocation;?> 
                </td>
              </tr>
              <tr>
                <td><strong>Date</strong></td>
                <td>
                    
                  <!--  March 31, 2015 - Sunday -->
                <?php echo $evenDate;?> 
                </td>
              </tr>
              <tr>
                <td><strong>Time</strong></td>
                <td>
                    <?php echo $rtime.' '.$rtimeZone; ?>
                   <!-- 9:00 AM to 10:00 AM EST -->
                
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        
        <div class="col-sm-4">
          <!--third part starts-->
        <form method="post" action="<?php $_PHP_SELF ?>" id="myForm" >
            <input type="hidden" id="eventId" name="eventId" value="<?php echo $reventId;?>" />
            <div class="row">
            <!--copy 1 from contact first row starts-->
            <div class="col-sm-6">
              <div class="form-group">
                 <!--  <input type="text" class="form-control" required="required" placeholder="First Name*" id="firstname" name="firstname" > -->
                   <input type="text" class="form-control" required="required" placeholder="First Name*" id="firstName" name="firstName" tabindex="1" onchange="fieldLengthValidator(this);"> 
              </div>
              <div class="form-group">
             <!--   <input type="text" class="form-control" required="required" placeholder="Email*" > -->
                  <input type="text" class="form-control" required="required" placeholder="Email*" name="email" id="email" tabindex="3" onchange="return checkEmail(this);fieldLengthValidator(this);">
              </div>
              <div class="form-group">
            <!--    <input type="text" class="form-control" required="required" placeholder="Organization*" > -->
                     <input type="text" class="form-control" required="required" placeholder="Organization*" name="organization" id="organization" tabindex="5" onchange="fieldLengthValidator(this);">
              </div>
              <button type="submit" tabindex="12" class="btn btn-primary" name="btnSubmit" id="btnSubmit">
                Register Me!!
              </button>
            </div>
            <div class="col-sm-6">
               <div class="form-group">
                   <!-- <input type="text"  class="form-control" required="required" placeholder="Last Name*" > -->
                      <input type="text"  class="form-control" required="required" placeholder="Last Name*" name="lastName" id="lastName" tabindex="2" onchange="fieldLengthValidator(this);">
               </div>  
               <div class="form-group">
                 <!--  <input type="text" class="form-control" required="required" placeholder="Phone*" > -->
                     <input type="text" class="form-control" required="required" placeholder="Phone*" name="phone" id="phone" tabindex="4" onchange="return formatPhone(this);" onblur="return validatenumber(this)">
              </div>
              <div class="form-group">
                 <!--  <input type="text" class="form-control" required="required" placeholder="Designation*" > -->
                    <input type="text" class="form-control" required="required" placeholder="Designation*" name="designation" id="designation" tabindex="6" onchange="fieldLengthValidator(this);">
              </div>
            </div>
          </div>
          </form>
          <h5 class="heavy">Event Speakers</h5>
          <hr>
          
           <?php echo $displayspekarsList;?>
         
         <!-- <p class="noMarginBottom"><strong>Maruti Kampli</strong>, Practice Manager - Integration</p>
          <p class="greyText noMargin">Miracle Software Systems, Inc.</p>
          <hr>
          
          <p class="noMarginBottom"><strong>Greg Shevchik</strong>, WebSphere Brand Specialist</p>
          <p class="greyText noMargin">IBM WebSphere</p>
          <hr> -->
        </div>
        <div class="col-sm-1"></div>
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
   <?php include '../footer.php';?>   
  
</body>
</html>