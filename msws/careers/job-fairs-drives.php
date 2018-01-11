
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Job Fairs & Drives | Miracle</title>
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
         url("<?= AMAZON_URL ?>/images/banners/jobfairs.png");
         -webkit-background-size: cover;
         -moz-background-size: cover;
         -o-background-size: cover;
         background-size: cover;
        /* background-position:0px 71px;*/
            }

            
            
        </style>
</head><!--/head-->
<?php include '../header.php';?>
<body></body>

<section>
    
        <div class="overlay section_bg" style="padding-top: 10px;">
            <div class=" container">
                
                <div class="row">    
                    <div class="col-sm-7 text-left">  
                        <br><br>
                        <h1 class="micro "><font color="#fff"><strong>Job Fairs & Drives</strong></font></h1>

                    </div>
                    <div class="col-sm-5 text-right">
                        <br><br>
                       <ul class="breadcrumb pull-right">
                        <li><a href="../">Home</a></li>
                        <li><a href=""../careers">Careers</a></li>
                        <!-- Breadcrumb div starts here --> 
                        <li class="active">Job Fairs and Drives</li>
                        <!-- Breadcrumb div Ends here --> 
                    </ul>
                    </div>
                </div><br>
            </div>
        </div>

    </section>
<br>
<!--<section id="career" class="container">      
        <br>
        <br>
        <br>
        <br>
        <div class="row">
         
          <div class="col-sm-6 text-left">
            <div class="pageTitle">
              <strong>Job Fairs & Drives</strong>
            </div>
          </div>
          <div class="col-sm-6 text-right">
            <ul class="breadcrumb pull-right">
                <li><a href="../">Home</a></li>
                <li><a href="../careers">Careers</a></li>
               <li class="active">Job Fairs and Drives</li>
                
            </ul>
          </div>
     
        </div>
</section>-->
<section id="career" class="container">
    <div class="row">
  <div class="jumbotron">
   <p class="methodText">With huge goals set for 2016, Miracle Software Systems, Inc. is hiring rapidly. Our teams are always on the lookout for talented individuals and aspiring minds. With 2016 well underway and the momentum building up Miracle is hiring at the rate of 75 individuals per month at its Indian Development Centers. Positions are open for Sales, Recruitment, Development, Marketing and Operations positions. If you would like to test your potential, come and visit us at any of the upcoming job fairs (or) campus drives. <strong>Miracle is sure to come to a location near you in the upcoming months. </strong></p>
   <p class="methodText">Miracle also conducts walk-ins for freshers at our Administrative HQ in Viskahpatnam. You can find more details <strong><a class="linkText" href="walkins.php">here</a></strong>

</p>
 <p class="methodText">Looking for an IT opportunity? Send us your resume to <a class="linkText" href="mailto:vspjobs@miraclesoft.com"><strong><u>vspjobs@miraclesoft.com</u></strong></a> and let us know your areas of interest.
        </p> 
        
</div>
<table class="table table-hover table-striped">
            <thead>
              <tr>
                <th> #</th>
                <th> Type</th>
                <th> Location</th>
                <th> Date</th>
                <th>Contact</th>
                <th>Job Description</th>
              </tr>
            </thead>
            <tbody>
                  <?php
        include '../config/general.php';
        //require '../config/DbController.php';
         require '../config/ConnectionProvider.php';
         
         
        
        
        //$conn = new DbController();
        
        try {
           
             $sno = 1;
              $selectQuery = "SELECT Id,JobPoolType,Location,DriveDate,Time,ContactPhone,JobDesc FROM tblJobFairs ORDER BY DriveDate DESC";
             $stmt = $conn->prepare($selectQuery);
             $stmt->execute();
                 $stmt->setFetchMode(PDO::FETCH_ASSOC);
          
                     while ($row = $stmt->fetch()) {
                 $jobId = $row["Id"];
                  $yrdata= strtotime($row["DriveDate"]);
                 ?>
                 <tr>
                <td> <?php echo $sno;?></td>
                <td><?php echo $row["JobPoolType"];?></td>
                <td><a class="linkText" href="job-event-description.php?id=<?php echo $jobId;?>"><strong><?php echo $row["Location"];?></strong></a></td>
                <td><?php echo date('M d , Y', $yrdata);?></td>
                
                
                <td> <?php echo $row["ContactPhone"];?></td>
                <td><?php echo $row["JobDesc"];?></td>
              </tr>
                 
                 <?php
                 $sno = $sno+1;
             }
             //$conn->closeConnection();
            // mysqli_close($conn);
             //mysql_close();
             
                 }catch(Exception $exc){
       
      $exc->getMessage();
         $resultMessage= '<font color=red size=2px>'.$exc.'</font>';
          header('Location: ../back-end-error.php?resultMessage='.$resultMessage); 
                // $conn->closeConnection(); // closing the connection
                   
}
   
   
   ?>
             <!-- <tr>
                <td> 1</td>
                <td>Pool Drive</td>
                <td><a class="linkText" href="#"><strong>Kakinada Collectorate</strong></a></td>
                <td>February 12th, 2015</td>
                <td> 0891-6623555</td>
                <td>BDE/US IT Rec</td>
              </tr>
               <tr>
                <td> 2 </td>
                <td>Campus Drive</td>
                <td><a class="linkText" href="#"><strong>Miracle Educational Society,VZM</strong></a></td>
                <td>February 12th, 2015</td>
                <td>0891-6623555</td>
                <td>Development</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Pool Drive</td>
                <td><a class="linkText" href="#"><strong> KIET – Kakinada</strong></a></td>
                <td>February 13th, 2015</td>
                <td>0891-6623555</td>
                <td>BDE/US IT Rec</td>
              </tr> -->
             </tbody>
          </table>
       
    <br>
    <br>
    </div>
    </section>
        <?php include '../footer.php';?>
 
</body>
</html>
