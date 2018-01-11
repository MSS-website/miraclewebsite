<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Upcoming Events | MSS</title>
    <?php include '../config/Locations.php';?>
  
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/prettyPhoto.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/default.css" />
	<link rel="stylesheet" type="text/css" href="../css/component.css" />
	<script src="js/modernizr.custom.js"></script>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->   
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?= AMAZON_URL ?>/images/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= AMAZON_URL ?>/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= AMAZON_URL ?>/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= AMAZON_URL ?>/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?= AMAZON_URL ?>/images/ico/apple-touch-icon-57-precomposed.png">
    
    <?php
    
        include '../config/general.php';
      //  require '../config/DbController.php';
        require '../config/ConnectionProvider.php';
         $reventId = isset($_GET["eventId"]) ? $_GET["eventId"] : '';
         $risAttend= isset($_GET["isAttend"]) ? $_GET["isAttend"] : -1;
         
          $title = '';
            $mynewtitle1 = '';
            $evenDate = '';
            $eventFromDate = '';
            $eventToDate = '';
            $eventToTime = '';
            $eventFromTime = '';
            $timezone = '';
            $rtime = '';
            $rmidadyfrom = '';
            $rmidadyto = '';
         if($reventId!='') {
            
             try {
              //   $conn = new DbController();
//$conn->connectToDatabase();
//$conn->selectDatabase();
         //$selectQuery = "SELECT event_title,event_startdate,evetnt_enddate,event_time_from,event_time_to,timezone,midday_from,midday_to FROM tblEventLines WHERE event_id= ".$reventId;
                  $selectQuery = "SELECT event_title,event_startdate,evetnt_enddate,event_time_from,event_time_to,timezone,midday_from,midday_to,FileName FROM tblEventLines WHERE event_id= :reventId";
          // echo $selectQuery;
            
                  
                  $stmt = $conn->prepare($selectQuery);
              $stmt->bindParam(':reventId', $reventId);
             //$result = mysql_query($selectQuery);
              $stmt->execute();
                
                 $stmt->setFetchMode(PDO::FETCH_ASSOC);
               //  while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
                 while ($row = $stmt->fetch()) {
                    $eventFromDate = $row["event_startdate"];
                    $eventToDate = $row["evetnt_enddate"];
                    $eventToTime = strtotime($row["event_time_to"]);
                    $eventFromTime = strtotime($row["event_time_from"]);
                      
                    $rmiddayfrom = $row["midday_from"];
                    $rmiddayto = $row["midday_to"];
                    $timezone = $row["timezone"];
                  //  $rtime=  date('h:i  ', $eventFromTime).$rmiddayfrom.' to '.date('h:i  ', $eventToTime).$rmiddayto;
                      $rtime=  date('h:i  ', $eventFromTime).$rmiddayfrom.' to '.date('h:i  ', $eventToTime).$rmiddayto;
                    $title =strip_tags($row["event_title"]);
                // $mynewtitle =explode( ':', $title );
                 $mynewtitle1 = $title;
                 $startdata= strtotime($row["event_startdate"]);
                  $enddata= strtotime($row["evetnt_enddate"]);
                  
                  $dateString = date('F d , Y', $startdata);
                  
                     $startDay =  date('d', $startdata);
                     $startMonth =  date('F', $startdata);
                     $startYear =  date('Y', $startdata);
                     
                     $endDay =  date('d', $enddata);
                      $endMonth =  date('F', $enddata);
                       $endYear =  date('Y', $enddata);
                  $evenDate = '';
                  if($startDay!=$endDay)
                      $evenDate = $startMonth.' '.$startDay.'-'.$endDay.', '.$startYear;
                  else
                      $evenDate = $dateString;
                 }
                
        }
        catch(Exception $exc){
       
      $exc->getMessage();

        }    
        }
    ?>
    
    
     <script type="text/javascript">
    function goToUrl(url,webinarType){
        if(webinarType=='C')
    	window.open(url,'_blank');
        else
        window.location = url;
    }

    </script>
</head><!--/head-->
<?php include '../header.php';?>
 <script type="text/javascript">
    $(window).load(function(){
        if(document.getElementById("qmeetEventId").value!=''){
            $('#myModal1').modal('show');
        }
        
    });
    
   
</script>
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
         url("<?= AMAZON_URL ?>/images/banners/upcoming-event.png");
         -webkit-background-size: cover;
         -moz-background-size: cover;
         -o-background-size: cover;
         background-size: cover;
         
            }

            
            
        </style>
<body>
<section>
        <div class="overlay section_bg">
            <div class=" container">
               
                <div class="row">    
                    <div class="col-sm-7 text-left">  
                        <br><br>
                        <h1 class="micro "><font color="#fff"><strong>Upcoming Events</strong></font></h1>

                    </div>
                    <div class="col-sm-5 text-right">
                        <br><br>
                        <ul class="breadcrumb pull-right">
                <li><a href="../">Home</a></li>
                <li><a href="#">Events</a></li>
                <li class="active">Upcoming</li>
            </ul>
                    </div>
                </div><br>
            </div>
        </div>

    </section>
   <input type ="hidden" name="qmeetEventId" id="qmeetEventId" value="<?= $reventId?>"/> 
    
     <div class="modal" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style=" position: static;">
      <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title" id="memberModalLabel"><strong>Registration Successful</strong> </h4>
      </div>
        
        <div class="modal-body"> 
      <!--   <p class="methodText">Thank you for registering for our webinar <strong>IBM Partner University Enablement
for Sales Professionals </strong>on <strong>June 17th, 2015</strong> at <strong>2:00 PM to 3:00 PM EST</strong>. You will be receiving a confirmation email soon.  </p> -->
           
           <?php if($risAttend==1) {?>
           
            <p class="methodText">Thank you for registering for our  <strong><?php echo $mynewtitle1; ?></strong> on <strong><?php echo $evenDate; ?></strong> at <strong><?php echo $rtime;?> <?php echo $timezone;?></strong>. You will be receiving a confirmation email soon.  </p>
       <?php } else { ?>
       <p class="methodText">Thanks for providing us the information. We will be very happy if you could make your presence along with your family members for the upcoming Quarterly meet. Wish you a Great Day!</p>
       <?php } ?>
       
       
       
        </div>
        <div class="modal-footer">
         <button type="button" class="btn-primary btn-lg btn-successbtn btn-default" data-dismiss="modal">Continue</button>
        </div><br>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>
 <section id="portfolio" class="container">
        <br>
       <br>
<!--         <div class="row"> -->
<!--           <div class="col-sm-7 text-left"> -->
<!--             <div class="pageTitle"> -->
<!--               <strong>Upcoming Events</strong> -->
<!--               <p></p> -->
<!--             </div> -->
<!--           </div> -->
<!--           <div class="col-sm-5 text-right"> -->
<!--             <ul class="breadcrumb pull-right"> -->
<!--                 <li><a href="../">Home</a></li> -->
<!--                 <li><a href="#">Events</a></li> -->
<!--                 <li class="active">Upcoming</li> -->
<!--             </ul> -->
<!--           </div> -->
<!--         </div> -->
       <div class="row">
           <div class="col-sm-12">
               <table class="table table-hover table-striped">
                      <thead>
                          <tr>
                              <th>#</th>
                              <th>Event Name</th>
                              <th>Event Date</th>
                              <th>Location</th>
                               <th>Register</th>
                          </tr>
                      </thead>
                      <tbody>
                          <?php
 
        
        function getSpeakers($webinarId)
         {
            //$conn = new DbController();
            $speakers = '';
            require '../config/ConnectionProvider.php';
            try {
                // $conn->connectToDatabase();
           //  $conn->selectDatabase();
             //$selectQuery = "SELECT SpeakerId FROM tblEventSpeakers WHERE event_id = ".$webinarId." AND primary_speaker=1 AND STATUS='Active'";
               $selectQuery = "SELECT SpeakerId FROM tblEventSpeakers WHERE event_id = :webinarId AND primary_speaker=1 AND STATUS='Active'";
            // echo 'spekares-->'.$selectQuery;
              $stmt = $conn->prepare($selectQuery);
              $stmt->bindParam(':webinarId', $webinarId);
               $stmt->execute();
                $countSpeakers = $stmt->rowCount();
            // $countSpeakers = 0;
                // while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
                 //    $countSpeakers++;
                                  
               //  }
                
        }catch(Exception $exc){
       
      $exc->getMessage();
         $resultMessage= '<font color=red size=2px>'.$exc.'</font>';
          header('Location: ../back-end-error.php?resultMessage='.$resultMessage); 
                // $conn->closeConnection(); // closing the connection
                   
}


    return $countSpeakers;
}
        //$conn = new DbController();
        
        try {
          //   $conn->connectToDatabase();
           //  $conn->selectDatabase();
          //   $selectQuery = "SELECT event_id,event_title,event_tagline,event_redirect,event_redirection_type,event_startdate,evetnt_enddate,event_time_from,event_time_to,location,event_type FROM tblEventLines WHERE STATUS = 'Active' AND evetnt_enddate >= CURDATE() ORDER BY event_startdate ASC";
            // $selectQuery = "SELECT event_id,event_title,event_tagline,event_redirect,event_redirection_type,event_startdate,evetnt_enddate,event_time_from,event_time_to,location,event_type,WebinarType FROM tblEventLines WHERE STATUS = 'Active' AND event_startdate >= CURDATE()  ORDER BY event_startdate ASC";
              $selectQuery = "SELECT event_id,event_title,event_tagline,event_redirect,event_redirection_type,event_startdate,evetnt_enddate,event_time_from,event_time_to,location,event_type,WebinarType,FileName FROM tblEventLines WHERE STATUS = 'Active'  ORDER BY event_startdate ASC";
           //  $result = mysql_query($selectQuery);
                $stmt = $conn->prepare($selectQuery);
             $sno = 1;
             
          //   while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
          $stmt->execute();
                
                 $stmt->setFetchMode(PDO::FETCH_ASSOC);
                   // while ($row = mysql_fetch_array($result1, MYSQL_ASSOC)) {
                    while ($row = $stmt->fetch()) {
                 //printf("ID: %s  Name: %s", $row["id"], $row["name"]);
                $url  = '';
                $googleDate = '';
                  $startdata= strtotime($row["event_startdate"]);
                  $enddata= strtotime($row["evetnt_enddate"]);
                  
                  $dateString = date('F d , Y', $startdata);
                  
                     $startDay =  date('d', $startdata);
                     $startMonth =  date('F', $startdata);
                     $startYear =  date('Y', $startdata);
                     
                     $endDay =  date('d', $enddata);
                      $endMonth =  date('F', $enddata);
                       $endYear =  date('Y', $enddata);
                  $evenDate = '';
                  if($startDay!=$endDay)
                      $evenDate = $startMonth.' '.$startDay.'-'.$endDay.', '.$startYear;
                  else
                      $evenDate = $dateString;
                  
                  $googleDate = date('Y-m-d', $startdata);
                  
                
$count = 0;
if($row["WebinarType"]=='I'||$row["WebinarType"]=='E'){
    $count = getSpeakers($row["event_id"]);
}
                  if($row["WebinarType"]=='Q' || $row["WebinarType"]=='IEE' || $row["WebinarType"]=='C' || $count>0){
                 ?>
                          
                         <!--  <tr> -->
                          <tr itemscope itemtype="http://schema.org/Event">
                              <td>
                              <?php echo $sno;?>
                              </td>
                              
                              <?php 
                              //WebinarType
                              //if(($row["event_redirection_type"]==0) && ($row["event_type"]=='Q'))
                              if($row["WebinarType"]=='Q')
                                   
                                  { 
                                  $url = "qmeet-rsvp.php?eventId=".$row["event_id"];
                                  ?>
                              <td><a itemprop="url" href="<?=$url?>" class="linkText">
                                      <strong itemprop="name">
                               <?php  if(strtotime(date("Y-m-d")) == $startdata){?>
                                          <font color="red">
                                           <?php echo $row["event_title"];?>
                                          </font>
                             <?php } else { echo $row["event_title"]; }?>
                                      
                                      </strong>
                                  
                                 
                                  </a>
                              </td>
                             <?php } 
                             
                              
                            // else if(($row["event_redirection_type"]==0) && ($row["event_type"]=='W'))
                              else if(($row["WebinarType"]=='I') || ($row["WebinarType"]=='E'))
                                 {
                                 
                                    if(($row["WebinarType"]=='I')){
                                     // $url = "internal-webinar-before.php?eventId=".$row["event_id"];
                                         $url = "../webinars/".$row["FileName"];
                                  }else {
                                     // $url = "webinar-before.php?eventId=".$row["event_id"];
                                       $url = "../webinars/".$row["FileName"];
                                  }
                               
                                  ?>
                              <td>
                                  
                                 
                                      
                                     <a itemprop="url" href="<?=$url?>" class="linkText"> <strong itemprop="name">
                                <?php  if(strtotime(date("Y-m-d")) == $startdata){?>
                                          <font color="red">
                                           <?php echo $row["event_title"];?>
                                          </font>
                             <?php } else { echo $row["event_title"]; }?>
                                      
                                      </strong></a>
                                  
                                  
                              
                              
                              </td>


                                 <?php }else  if($row["WebinarType"]=='C'){ 
                                     
                                     
                                     if($row["event_redirect"]!='#'){
                                      $url = $row["event_redirect"];
                                     if(strtotime(date("Y-m-d")) == $startdata){?>
                              
                                  <td ><a itemprop="url" href="<?=$url?>" target="_blank" class="linkText">
                                     
                                          <strong itemprop="name"><font color='red'><?php echo $row["event_title"];?></font></strong>
                                      </a> 
                                  </td>
                              <?php }else{?>
                                 <td>
                                    
                                     <a itemprop="url" href="<?=$url?>" target="_blank" class="linkText">
                                    
                                       <strong itemprop="name"><?php echo $row["event_title"];?></strong>
                                      </a> 
                                 </td>
                                <?php }
                                
                                
                                }
                                else { 
                                      if(strtotime(date("Y-m-d")) == $startdata){?>
                              
                                  <td>
                                  
                                          <strong itemprop="name"><font color='red'><?php echo $row["event_title"];?></font></strong>
                                 
                                  </td>
                              <?php }else{?>
                                 <td>
                                 
                                         <strong itemprop="name"><?php echo $row["event_title"];?></strong>
                                  
                                 </td>
                                
                                <?php }
                                
                                }                                
                                }
                                
                                else{
                                 if(strtotime(date("Y-m-d")) == $startdata){?>
                              
                                  <td >
                                  
                                        <a itemprop="url" href="#" class="linkText">
                                          <strong itemprop="name"><font color='red'><?php echo $row["event_title"];?></font></strong>
                                    </a>
                                  </td>
                              <?php }else{?>
                                 <td>
                                      <a itemprop="url" href="#" class="linkText">
                                         <strong itemprop="name"><?php echo $row["event_title"];?></strong>
                                  </a> 
                                 </td>
                                
                                 
                                 
                                 
                                 <?php } }?>
                              <td itemprop="startDate" content="<?= $googleDate ?>"> <!--April 11th, 2015 -->
                                  
                                  
                                  <?php  
                                  
                                  
                                  if(strtotime(date("Y-m-d")) == $startdata){?>
                                  <font color="red">
                              <?php echo $evenDate;?>
                                  </font>
                               <?php }else { echo $evenDate;} ?>  
                              </td>
                             
                              <td itemprop="location"><!-- Miracle City, IND -->
                                   <span itemprop="location" itemscope itemtype="http://schema.org/Place">
                                  <?php  if(strtotime(date("Y-m-d")) == $startdata){?>
                                  <font color="red">
                              <?php echo $row["location"]; ?>
                                  </font>
                                  <?php }else { echo $row["location"];} ?>  
                              </td>
                              <td>
                                 
                                  
                                  <a href="<?=$url?>" >
                                  <?php if($url===''){ ?>
                                  <button class="btn btn-primary btn-sm btn-success disabled" type="button">Register</button>
                             <?php     } else {
                             
                             	?>
                                  </a><button class="btn btn-primary btn-sm btn-success" onclick="goToUrl('<?=$url?>','<?= $row["WebinarType"]?>')" type="button">Register</button>
                                      <?php } ?>
                                  </a>
                              </td>
                              
                          </tr>
                           
                          
                            <?php
                            $sno = $sno+1;
                  }
                 
             }
             //$conn->closeConnection();
            // mysqli_close($conn);
        //     mysql_close();
             
                 }catch(Exception $exc){
       
      $exc->getMessage();
         $resultMessage= '<font color=red size=2px>'.$exc.'</font>';
          header('Location: ../back-end-error.php?resultMessage='.$resultMessage); 
                // $conn->closeConnection(); // closing the connection
                   
}
   
   
   ?>
                         <!--  <tr>
                              <td>1</td>
                              <td><a href="#" class="linkText"><strong>Miracle Q#1</strong></a></td>
                              <td>April 11th, 2015</td>
                              <td>Miracle City, IND</td>
                          </tr>
                          <tr>
                              <td>2</td>
                              <td><a href="https://payments.nacha.org/" class="linkText"><strong>Payments Conference</strong></a></td>
                              <td>April 19th, 2015</td>
                              <td>New Orleans, LA</td>
                          </tr>
                          <tr>
                              <td>3</td>
                              <td><a href="http://events.sap.com/sapphirenow/en/home" class="linkText"><strong>SAP Sapphire + ASUG</strong></a></td>
                              <td>May 5th, 2015</td>
                              <td>OCCC, Orlando, FL</td>
                          </tr>
                          <tr>
                              <td>4</td>
                              <td><a  href="http://www-01.ibm.com/software/events/amplify/" target="_blank" class="linkText"><strong>IBM Amplify</strong></a></td>
                              <td>May 11-13 th, 2015</td>
                              <td>San Diego, CA</td>
                          </tr>
                          <tr>
                              <td>5</td>
                              <td><a href="https://www.oracle.com/openworld/index.html" class="linkText"><strong>Oracle Open World</strong></a></td>
                              <td>October 25th, 2015</td>
                              <td>San Francisco</td>
                          </tr> -->
                      </tbody>
                  </table>
           </div>
       </div>
       <br>
    </section>
    
  <?php include '../footer.php';?>
   
</body>
</html>
