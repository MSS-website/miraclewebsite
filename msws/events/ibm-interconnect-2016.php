<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Interconnect 2016 | Miracle</title>
     <?php include '../config/Locations.php';?>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/prettyPhoto.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/default.css" />
	<link rel="stylesheet" type="text/css" href="../css/component.css" />
	<script src="../js/menuLoad.js"></script>
	<script src="../js/modernizr.custom.js"></script>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->   
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="../images/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<?php include '../header.php';?>
<body>
  
  <style>
    .hd
    {
      font-size: 40px !important;
      color: #FFF ; 
    }
    .hd1
    {
      font-size: 40px ;
       color: #FFF ; 
       margin-top:35px ;
       margin-bottom:20px;
    }
    b,strong
    {
      font-weight:600 !important;
      
    }
    </style>
      
<div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
        <div class="greyText">Miracle's core strength is its Technical Excellence which helps us to give our customers the highest possible business value</div>
         <!-- Modal -->

        </div>
        <div class="col-sm-1"></div>
      
      </div>
      <section class="wet-asphalt-new noMarginBottom">
        <br>
        <br>
        <br>
            <h4 class="hd" align="center"><strong>Meet us at Booth #402 at the Solution EXPO in Mandalay Bay</strong></h4>

            <br>
  </section>
  <section id="career" class="container">
    
        <div class="row">
          
          <div class="col-sm-8 text-left">
            <h1 class="heavy">Interconnect is Back!!</h1>
            <h6 class="">February 21stâ€�25th,2016</h5>
              <p></p>
            </div>
         
          <div class="col-sm-4 text-right">
            <ul class="breadcrumb pull-right">
                <li><a href="../">Home</a></li>
                <li><a href="../events/recent.php">Events</a></li>
                <li class="active">Interconnect 2016</li>
            </ul>
          </div>
          <div class="col-sm-1"></div>
        </div>
       
          <div class="row">
          <div class="col-sm-12">
          <p class="methodText"><strong>Transformation, Agility and Digital Economies. </strong>The world is moving towards a new era of technology and it is time for you to become the â€œLeader of the Digital Marketâ€�. The industry largest Cloud and Mobile conference,
          <strong><a href="http://www.ibm.com/cloud-computing/us/en/interconnect/" target="_blank"> IBM Interconnect 2016</a></strong> is back and we are all set to amaze you with great content, exceptional industry insight and an array of stories and leaders to listen to. 
          </p>
          
          <p class="methodText"><strong>Miracle</strong> and its expert team will be at the conference again as a Diamond Sponsor and an even greater friend of yours. We would love to talk, host and entertain you as we look forward to a great week in Las Vegas. </p>
          <p class="methodText">We had over 18,000 attendees last year, and are looking forward to having an even larger and curious crowd this year as well. </p>
          <br>
         
          </div>
          </div>
            <div class="row">
          
          <div class="col-sm-12">
            <h5 class="heavy noMargin">Academy Labs</h5>
            <br>
         
          <table class="table table-hover table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Session Title</th>
                  <th>Location </th>
                  <th>Date and Time</th>
                  <th></th>
                 
                </tr>
              </thead>
              <tbody>
             <!--   <tr>
                  <td>7334A</td>
                  <td>Totally Hands-On with IBM Bluemix Integration Services</td>
                  <td>Room 121</td>
                 
                  <td>Tue, 23-Feb  8:30 AM to 10:30 AM</td>
                   <td><a class="btn btn-success" href="#">Download</a></td>
                </tr>
                <tr>
                  <td>7335A</td>
                  <td>Dev Workshop: IoT APIs 101 with StrongLoop and IBM Bluemix</td>
                  <td>Room 118</td>
                  
                  <td>Wed, 24-Feb  12:00 PM to 2:00 PM</td>
                  <td><a class="btn btn-success" href="#">Download</a></td>
                </tr> -->
                
                <?php
        include '../config/Locations.php';
        include '../config/general.php';
        require '../config/DbController.php';
        
        
        $conn = new DbController();
        
        try {
             $conn->connectToDatabase();
             $conn->selectDatabase();
             $selectQuery = "SELECT Id,Download_Id,Event_VisibleId,Title,Speakers,Location,EventDate,DateViewFormat,DownloadFlag,DocType,DocTitle,DocName,DocLocation,Author,TrackName,DocLongDesc  FROM tblWebDownloadsLines WHERE Download_Id=6";
             $result = mysql_query($selectQuery);
             $sno = 1;
             
             while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
                 //printf("ID: %s  Name: %s", $row["id"], $row["name"]);
                 
                 ?>
                
                 <tr>
                  <td><?php echo $row["Event_VisibleId"];?></td>
                  <td><?php echo $row["Title"];?> </td>
                  <td><?php echo $row["Location"];?></td>
                  <td><?php echo $row["DateViewFormat"];?></td>
                 <!-- <td><a class="btn btn-success" href="../pdf/6542_CIAI.pdf">Download</a></td> -->
                  
                   <td>
                       <?php if($row["DownloadFlag"]==1) { ?>
                     <!--  <a class="btn btn-success" href="../resource/get-resource.php?refId=<?php echo $row["Id"] ?>&objectId=<?php echo $row["Download_Id"] ?>">Download</a>-->
                       <a class="btn btn-success" href='../download/DownloadDocs.php?refId=<?=$row["Id"]?>&objectId=6'> Download</a>
                   <?php } else echo '-'?>
                   
                   </td>
                </tr>
                 <?php
                 $sno = $sno+1;
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
   
   
   ?>
               
                
              </tbody>
            </table>
          </div>
      </div>
  </section>
  <br>
  <section class="wet-asphalt-old noMarginBottom">
             
            <a href="ic16-precon-ws.php"><h4   class="hd" align="center"><strong>InterConnect Pre-Conference Workshop on February 21st | Register Now
</strong></h4></a>

            <br>
  </section>
  <br>
  <section id="career" class="container">
          
          <div class="row">
          
          <div class="col-sm-12">
            <h5 class="heavy noMargin">Our Sessions</h5>
            <br>
          <p class="methodText">Our teams presented some great topics at Interconnect 2015 to educate you on the latest happenings in the world of IT, and we also brought along our customers to discuss their success with the world. Download the presentations and contact us if you would like more information.</p>
          <table class="table table-hover table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Session Title</th>
                  <th>Session Speaker</th>
                  <th>Location</th>
                  <th>Date and Time</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
              <!--  <tr>
                  <td>1815</td>
                  <td>Reinventing Your Enterprise Business Strategy with an API-Centric Approach</td>
                  <td>Hanuman Veluri and Kunal Mittal</td>
                  <td>Mandalay Ballroom D</td>
                  <td>February 22nd, 2016 from 3:00 PM to 4:00 PM</td>
                  <td><a class="btn btn-success" href="">Download</a></td>
                </tr>
                <tr>
                  <td>2831</td>
                  <td>Everyday Infrastructure Challenges for your Enterprise that vanish with IBM SoftLayer</td>
                  <td>Sravan Akipelly and Santosh Soni</td>
                  <td>Mandalay Ballroom D</td>
                  <td>February 24th, 2016 from 10:00 AM to 11:00 AM</td>
                   <td><a class="btn btn-success" href="">Download</a></td>
                </tr>
                <tr>
                  <td>5775</td>
                  <td>Do I Really Need a Cloud Integration Solution for Digital Transformation? Find Out!</td>
                  <td>Nagendra Anubhukta and Bharathi Ramachandran</td>
                  <td>EXPO Theatre - Solution EXPO</td>
                  <td>February 23rd, 2016 from 3:00 PM to 3:20 PM</td>
                   <td><a class="btn btn-success" href="">Download</a></td>
                </tr>
                <tr>
                  <td>5781</td>
                  <td>Enable Your IBM Integration Bus Deployments for Two-Speed IT with Continuous Delivery </td>
                  <td>Kunal Mittal and Jyotsna Duvvuri</td>
                  <td>EXPO Theatre - Solution EXPO</td>
                  <td>February 23rd, 2016 from 5:30 PM to 5:50 PM</td>
                   <td><a class="btn btn-success" href="">Download</a></td>
                </tr> -->
                 <?php
        
        $conn1 = new DbController();
        
        try {
             $conn1->connectToDatabase();
             $conn1->selectDatabase();
             $selectQuery = "SELECT Id,Download_Id,Event_VisibleId,Title,Speakers,Location,EventDate,DateViewFormat,DownloadFlag,DocType,DocTitle,DocName,DocLocation,Author,TrackName,DocLongDesc  FROM tblWebDownloadsLines WHERE Download_Id=5";
             $result = mysql_query($selectQuery);
             $sno = 1;
             
             while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
                 //printf("ID: %s  Name: %s", $row["id"], $row["name"]);
                 
                 ?>
                
                 <tr>
                  <td><?php echo $row["Event_VisibleId"];?></td>
                  <td><?php echo $row["Title"];?> </td>
                  <td><?php echo $row["Speakers"];?> </td>
                  <td><?php echo $row["Location"];?></td>
                  <td><?php echo $row["DateViewFormat"];?></td>
                 <!-- <td><a class="btn btn-success" href="../pdf/6542_CIAI.pdf">Download</a></td> -->
                  
                   <td>
                       <?php if($row["DownloadFlag"]==1) { ?>
                     <!--  <a class="btn btn-success" href="../resource/get-resource.php?refId=<?php echo $row["Id"] ?>&objectId=<?php echo $row["Download_Id"] ?>">Download</a>-->
                       <a class="btn btn-success" href='../download/DownloadDocs.php?refId=<?=$row["Id"]?>&objectId=5'> Download</a>
                   <?php } else echo '-'?>
                   
                   </td>
                </tr>
                 <?php
                 $sno = $sno+1;
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
   
   
   ?>
              </tbody>
            </table>
          </div>
      </div>
          <div class="row">
          <div class="col-sm-12">
          <h5 class="methodText"><strong>24,000 Attendees with over 2000 Sessions</strong></h5>
          <p class="methodText">IBM Interconnect produces one of the most diverse conferences in the industries, with a huge number of opportunities to network, learn and educate. Last year we had the Sharkâ€™s come over, released the new MQ Appliance and had loads of fun with Bluemix and IoT. Come and visit us this year and have the time of your life in the only Fun-Tech event of the industry. </p>
          <br>
          <a href="../events/interconnect-2015.php"><button class="btn btn-primary" > Check out what we did last year!!</button></a>
          </div>
          <br>
          </div>
  
  
  </div>
  </div>
  
  
  
  
  </section>
  <!-- /Career -->

  <?php include '../footer.php';?>
   
</body>
</html>