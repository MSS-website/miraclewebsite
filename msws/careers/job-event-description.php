
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Job Event Description | Miracle</title>
     <?php include '../config/Locations.php';?>
      
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
   
    <link href="../css/main.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/default.css" />
	<link rel="stylesheet" type="text/css" href="../css/component.css" />
	<script src="../js/modernizr.custom.js"></script>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?= AMAZON_URL ?>/images/favicon.ico">
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
                    url("<?= AMAZON_URL ?>/images/banners/job-description.png");
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
              
            }



        </style>
</head><!--/head-->
 <?php
       include '../config/general.php';
    //    require '../config/DbController.php';
        require '../config/ConnectionProvider.php';
        
       // $conn = new DbController();
        $resultMessage = '';
        $rType = '';
        $rVenu='';
        $rDate='';
        $rTime='';
        $rjobId = '';
         $rTimeType='';
          $yrdata='';
         $timedata='';
        try {
            if(! get_magic_quotes_gpc() ){
         $rjobId = addslashes ($_GET['id']);
         //jobPosition
    }else {
        $rjobId = $_GET['id'];
    }
            
            /* $conn->connectToDatabase();
             $conn->selectDatabase();
             $selectQuery = "SELECT Id,JobPoolType,Location,DriveDate,Time,ContactPhone,JobDesc,TimeType FROM tblJobFairs WHERE Id=".$rjobId;
             $result = mysql_query($selectQuery) or die(mysql_error());;
             //$sno = 1;
              if(mysql_num_rows($result)>0){
                  $row = mysql_fetch_row($result); 
                 //printf("ID: %s  Name: %s", $row["id"], $row["name"]);
                 $rType = $row[1];
                 $rVenu = $row[2];
                 $rDate = $row[3];
                 $rTime = $row[4];
                $yrdata= strtotime($rDate);
                $rTimeType= $row[7];
                $timedata= strtotime($rTime);
                // $sno = $sno+1;
             }
             //$conn->closeConnection();
            // mysqli_close($conn);
             mysql_close();
             */
      $selectQuery = "SELECT Id,JobPoolType,Location,DriveDate,Time,ContactPhone,JobDesc,TimeType FROM tblJobFairs WHERE Id=:jobId";
             $stmt = $conn->prepare($selectQuery);
                 $stmt->bindParam(':jobId', $rjobId);
             $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
             $rType = $row[1];
                 $rVenu = $row[2];
                 $rDate = $row[3];
                 $rTime = $row[4];
                $yrdata= strtotime($rDate);
                $rTimeType= $row[7];
                $timedata= strtotime($rTime);
        }
                 }catch(Exception $exc){
       
      $exc->getMessage();
         $resultMessage= '<font color=red size=2px>'.$exc.'</font>';
         
          header('Location: ../back-end-error.php?resultMessage='.$resultMessage); 
                // $conn->closeConnection(); // closing the connection
                   
}
   
   
   ?>


<?php include '../header.php';?>
<body>
<section>
    <div class="overlay section_bg">
            <div class=" container">
                <div class="row">    
                    <div class="col-sm-7 text-left">  
                        <br><br>
                        <h1 class="micro "><font color="#fff"><strong>Job Event Description</strong></font></h1>

                    </div>
                    <div class="col-sm-5 text-right">
                        <br><br>
                       <ul class="breadcrumb pull-right">
                       <li><a href="../">Home</a></li>
                <li><a href="../careers">Careers</a></li>
               <li class="active">Job Event Description</li>
                    </ul>
                    </div>
                </div><br>
            </div>
        </div>

    </section>
    
    
<section id="career" class="container">      
        <br>
       <!--  <div class="row">
          <div class="col-sm-1"></div>
          <div class="col-sm-5 text-left">
            <div class="pageTitle">
              <strong>Job Event Description</strong>
            </div>
          </div>
          <div class="col-sm-5 text-right">
            <ul class="breadcrumb pull-right">
                <li><a href="../">Home</a></li>
                <li><a href="../careers">Careers</a></li>
               <li class="active">Job Event Description</li>
            </ul>
          </div>
          <div class="col-sm-1"></div>
        </div> -->
       
        <br/>
        <div class="row">
            
            <div class="col-sm-8">
                
                    <p class="methodText">
                        <span id="title"><strong>Looking for a IT job? Here is your chance!</strong></span><br><br>
                        <span id="eventDescription"><!-- This is going to be static for all the pages irrespective of the event-->
                            With growth the number one goal for Miracle, we are hiring young and energetic asprirants rapidly. Do you have a dream in the IT field? Do you want to be the best? Well Miracle is the place where your dreams will be made through. Meet us at one of the numerous events that we conduct across the country and give yourself a chance to play with the best. 
                        </span>
                    </p>
                
            </div>
            <div class="col-sm-4">
                <table class="table table-hover table-striped">
                    <tbody>
                        <tr>
                            <td><strong>Type :</strong></td>
                           <!-- <td id="type">Campus Drive</td> -->
                            <td id="type"><?php echo $rType;?></td>
                        </tr>
                        <tr>
                            <td><strong>Venue :</strong></td>
                           <!-- <td id="venue">Miracle Educational Society</td> -->
                            <td id="venue"><?php echo $rVenu;?></td>
                        </tr>
                        <tr>
                            <td><strong>Date :</strong></td>
                           <!-- <td id="date">February 12th, 2015</td> -->
                            <!-- <td id="date"><?php //echo $rDate;?></td>  -->
                             <td id="date"><?php echo date('M d , Y', $yrdata);?></td>
                        </tr>
                        <tr>
                            <td><strong>Time :</strong></td>
                           <!-- <td id="time">9:00 AM IST</td> -->
                         <!--   <td id="time"><?php //echo $rTime.' '.$rTimeType;?></td> -->
                            <td id="time"><?php echo date('h:i  A', $timedata).' '.$rTimeType;?></td>
                            
                        </tr>
                    </tbody>
                </table>
            </div>
            
        </div>
        <div class="row">
            
            <div class="col-sm-6">
                <strong>Q#1. </strong><span id="requirementsQuestion"><strong>What should I bring to the interview?</strong><br></span><p class="methodText"><span id="requirementsAnswer">Please bring 2 color passport-size pictures, 2 copies of your updated resume, and also photo-copies of your educational certificates starting from your 10th until now. </span></p><!-- This will be mostly static -->    
            </div>
            
            <div class="col-sm-6">
                <strong>Q#2. </strong><span id="contactQuestion"><strong>Who should we contact for more information?</strong><br></span><p class="methodText"><span id="contactAnswer">Please contact our MILE Team at 0891-6623556 (or) contact our administrative reception at 0891-6696666.For email contact purposes please send all emails to vspjobs@miraclesoft.com.</span></p>    
            </div>
            
        </div>
        <hr>
        <div class="row">
            
            <div class="col-sm-12">
                <div class="subSectionTitle"><strong>Available Jobs</strong></div>
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Qualification</th>
                            <th>Requirements</th>
                        </tr>
                    </thead>
                    <tbody>
                         <?php
  
        
      //  $conn = new DbController();
        
        try {
          /*   $conn->connectToDatabase();
             $conn->selectDatabase();
             $selectQuery = "SELECT JobTitle,Qualification,Requirements FROM tblJobEventDesc WHERE JobFairId=".$rjobId;
             $result = mysql_query($selectQuery) or die(mysql_error());;
             $sno = 1;
             while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {*/
             $sno = 1;
            $selectQuery = "SELECT JobTitle,Qualification,Requirements FROM tblJobEventDesc WHERE JobFairId=:jobFairId";
             $stmt = $conn->prepare($selectQuery);
                 $stmt->bindParam(':jobFairId', $rjobId);
             $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
                 //printf("ID: %s  Name: %s", $row["id"], $row["name"]);
                // $jobId = $row["Id"];
                 ?>
               
                   <tr>
                            <td><span id="id"><?php echo $sno;?></span></td>
                            <td><strong><span id="jobTitle"><?php echo $row[0];?></span></strong></td>
                            <td><span id="qualification"><?php echo $row[1];?></span></td>
                            <td><span id="requirements"><?php echo $row[2];?></span></td>
                        </tr>
                 <?php
                 $sno = $sno+1;
             }
             //$conn->closeConnection();
            // mysqli_close($conn);
           //  mysql_close();
             
                 }catch(Exception $exc){
       
      $exc->getMessage();
         $resultMessage= '<font color=red size=2px>'.$exc.'</font>';
                 $conn->closeConnection(); // closing the connection
                   
}
   
   
   ?>
                        
                      <!--  <tr>
                            <td><span id="id">1</span></td>
                            <td><strong><span id="jobTitle">Software Trainee</span></strong></td>
                            <td><span id="qualification">B.Tech with above 70%<br>MCA with above 75%</span></td>
                            <td><span id="requirements">Good knowledge in Java<br>Good Communication Skills<br>Analytical and Resoning Skills required</span></td>
                        </tr>
                        <tr>
                            <td><span id="id">2</span></td>
                            <td><strong><span id="jobTitle">Software Trainee</span></strong></td>
                            <td><span id="qualification">B.Tech with above 70%<br>MCA with above 75%</span></td>
                            <td><span id="requirements">Good knowledge in Java<br>Good Communication Skills<br>Analytical and Resoning Skills required</span></td>
                        </tr>
                        <tr>
                            <td><span id="id">3</span></td>
                            <td><strong><span id="jobTitle">Software Trainee</span></strong></td>
                            <td><span id="qualification">B.Tech with above 70%<br>MCA with above 75%</span></td>
                            <td><span id="requirements">Good knowledge in Java<br>Good Communication Skills<br>Analytical and Resoning Skills required</span></td>
                        </tr> -->
                    </tbody>
                </table>
            </div>
            
        </div>
    <br>
    <br>
    </section>
        <?php include '../footer.php';?>
 
</body>
</html>