<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>India Jobs | Miracle</title>
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
    <link rel="shortcut icon" href="../images/favicon.ico">
   
</head><!--/head-->
<?php include '../header.php';?>
<body>
    <section id="career" class="container">
      <br>
        <br>
        <br>
        <br>
        <div class="row">
          <div class="col-sm-7 text-left">
            <div class="pageTitle">
              <strong>Indian Opportunities</strong>
            </div>
          </div>
          <div class="col-sm-5 text-right">
            <ul class="breadcrumb pull-right">
                <li><a href="../">Home</a></li>
                <li><a href="../careers">Careers</a></li>
                <li class="active">Indian Jobs</li>
            </ul>
          </div>
        </div>
    </section>
    
    <!-- Job Slide Here -->
         <section id="main-slider" class="no-margin">
            <br>
            <br>
            <div class="carousel-inner">
                
                                  
                
                                     <?php
   include '../config/Locations.php';
        include '../config/general.php';
       // require '../config/DbController.php';
        
        
     //   $conn = new DbController();
        
        try {
             $conn->connectToDatabase();
             $conn->selectDatabase();
             $selectQuery = "SELECT JobId,JobTitle,JobTagline,JobDescription,JobPosition,JobQualification,JobTechnical,JobSoftSkills,JobShifts,JobCountry,Location,JobLogo FROM tblJobDescriptions WHERE JobCountry = 'INDIA' AND JobStatus = 'Active'";
             $result = mysql_query($selectQuery);
             $sno = 1;
             $initial = 0;
             $isClosed = false;
             
             while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
                 //printf("ID: %s  Name: %s", $row["id"], $row["name"]);
                 $jobId = $row["JobId"];
                  if($sno==1){
                      $isClosed = false;
                      if($initial==0){
                      ?>
                        <!-- 3 jobs row start -->
                        
                        
                        
                        <div class="item active">
                            <?php }else {?>
                            <div class="item">
                            <?php  
                            }
                            ?>
                    <div class="container">
                        <div class="row center"><!-- Job Row Starts -->
                      <?php
                  }
                 ?>
                           
                            <!-- Job Item Start div -->
                           <div class="col-sm-4"><!-- Job Item -->
                                <center>
                                     <img src="../images/jobs/jobs1.png" class="img-responsive" alt="Responsive image"> 
                                 <!--   <img src="<?php/* echo $row["JobLogo"];*/?>" class="img-responsive" alt="Responsive image"> -->
                                </center>
                                <div class="row">
                                <div class="col-sm-12">
                                  <center>
                                    <div class="jobTitle">
                                      <!--  <strong>Jr. HR Executive</strong> -->
                                          <strong><?php echo $row["JobTitle"];?></strong>
                                    
                                    </div>
                                       <!-- <p>Miracle City, Vizianagaram - AP</p> -->
                                       <p><?php echo $row["JobTagline"];?></p> 
                                       <!-- <p><strong>MBA 2013-14 passout with above 70%</strong> -->
                                        <p><strong><?php echo urldecode($row["JobDescription"]);?></strong></br>
                                            <?php echo urldecode($row["JobSoftSkills"]);?>
                                   <!--     <br/>Excellent Communication Skills 
                                        <br/>People Management Skills 
                                        <br/>Flexible for Night Shifts
                                        <br/>Ability to Solve Employee Grievances
                                        <br/>Ability to interface with employees  -->
                                        
                                        </p>
                                   <!--  <form action="job-application.php?jobId=JD1013" method="post">  -->
                                      
                                     <form action="job-application.php?jobId=<?=$jobId;?>" method="post"> 
                                        <!-- Elements for Job Description -->
                                        <input type="hidden" name="position" value="Sr. IIB Developer">
                                   
                                        <button class="btn btn-primary">Apply Job</button>
                                    </form>
                                  </center>
                                </div>
                              </div>
                            </div><!-- Job Item Ends -->
                            <!-- Job Item End div --> 
                             <?php
                 $sno = $sno+1;
                 $initial = 1;
                 if($sno == 4){
                     $isClosed = true;
                     $sno = 1;
                     ?>  </div><!-- Job Row Ends -->
                    </div>
                        </div>
                    <!-- 3 jobs row end --><?php
                 }
             }
             
             if(!$isClosed){?></div><!-- Job Row Ends -->
                    </div>
                        </div><?php }
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
                            
                            
                          
            </div>
        
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="icon-angle-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="icon-angle-right"></i>
        </a>
        <br>
        <br>
    </section><!--/#main-slider-->
    
    <?php include '../footer.php';?>
   
</body>
</html>