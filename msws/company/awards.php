<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Miracle as a leader, has been achieving multiple awards and certifications over last two decades for its innovative work">
    <meta name="author" content="">
    <title>
      Awards and Certifications that Miracle Achieved 
    </title>
       <?php include '../config/Locations.php';?>
      
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/default.css"/>
    <link rel="stylesheet" type="text/css" href="../css/component.css"/>
    <script src="../js/modernizr.custom.js">
    </script>
    <!--[if lt IE 9]>
<script src="js/html5shiv.js">
</script>
<script src="js/respond.min.js">
</script>
<![endif]-->
  
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="shortcut icon" href="<?= AMAZON_URL ?>/images/favicon.ico">
  
 <script type="text/javascript" src="../js/jquery-1.9.1.min.js"></script>
 <script type="text/javascript">
     var dispRecords = 15;
     $(document).ready(function(){
       
       var count = document.getElementById("count").value;
         
         for(var i=1;i<=15;i++){
             $('tr:nth('+i+')').show();
         }
          });
     /* $(document).ready (function(){
          
          alert("hii");
      var lastrow = document.getElementById("limit").value;
      if(parseInt(lastrow,10)>15){
          var dispRow = parseInt(lastrow,10) - 10;
          document.getElementById("row"+dispRow).scrollIntoView();
      }
   
});​*/
     
     function getMoreRecords(){
         var count = document.getElementById("count").value;
         var visiblePosition = dispRecords-1;
         dispRecords = dispRecords+5;
         
         for(var i=1;i<=dispRecords;i++){
             $('tr:nth('+i+')').show();
         }
          document.getElementById("row"+visiblePosition).scrollIntoView();
          
          if(count<dispRecords){
              document.getElementById("btnSubmit").style.display='none';
              
          }
     }
     
     
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
         url("<?= AMAZON_URL ?>/images/banners/awards.png");
         -webkit-background-size: cover;
         -moz-background-size: cover;
         -o-background-size: cover;
         background-size: cover;
       
            }

            
            
        </style>
  </head>
  <?php include '../header.php';?>
  <body>
    <section>
        <div class="overlay section_bg">
            <div class=" container">
                <div class="row">    
                    <div class="col-sm-7 text-left">  
                        <br><br>
                        <h1 class="micro "><font color="#fff"><strong>Awards and Certifications</strong></font></h1>

                    </div>
                    <div class="col-sm-5 text-right">
                        <br><br>
                       <ul class="breadcrumb pull-right">
                        <li><a href="../">Home</a></li>
                        <li><a href="./">Company</a></li>
                        <!-- Breadcrumb div starts here --> 
                        <li class="active">Awards and Certifications</li>
                        <!-- Breadcrumb div Ends here --> 
                    </ul>
                    </div>
                </div><br>
            </div>
        </div>

    </section>
    <section id="about-us" class="container">
      
      <br>
<!--      <br>
      <br>
      <br>
      <div class="row">
        
        <div class="col-sm-1">
        </div>
        <div class="col-sm-5 text-left">
          
          <h1 class="heavy">
              Awards and Certifications
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
              <a href="about-us.php">
                Company
              </a>
            </li>
            <li class="active">
              Awards and Certifications
            </li>
          </ul>
          
        </div>
        <div class="col-sm-1">
        </div>
      </div>-->
      <div class="row">
       
        <div class="col-sm-12">
          
          <p class="methodText">
            <br/>
            <strong>
              Miracle Software Systems, Inc.
            </strong>
            has established itself as a leader and visionary in the IT space over the last 21 years and has achieved multiple awards and certifications to prove it. Our Teams have been recognized for their groundbreaking work in many fields and the company itself has been appreciated for the stability and growth shown over the last two decades.
          </p>
        </div>
        </div>
      </div>
      <div class="row">
       
        <div class="col-sm-12">
          
          <table class="table table-hover table-striped">
            
            <thead>
              
              <tr>
                
                <th>
                  #
                </th>
                
                <th>
                  Award
                </th>
                
                <th>
                  Year
                </th>
                
                <th>
                  Description
                </th>
                
              </tr>
            </thead>
            
            <tbody>
                
                <!-- dynamic code start -->
                
                <?php
       include '../config/general.php';
       // require '../config/DbController.php';
         require '../config/ConnectionProvider.php';
         
        
        
       // $conn = new DbController();
        
        try {
            // $conn->connectToDatabase();
            // $conn->selectDatabase();
        
               $selectQuery = "SELECT Id,Award,YEAR,Description,CreatedDate,IsRedirectionExists,RedirectionLink FROM tblAwardsAndAcheivements ORDER BY OrderFlag  DESC";
            // $result = mysql_query($selectQuery);
             $sno = 1;
              $stmt = $conn->prepare($selectQuery);
             $stmt->execute();
                 $stmt->setFetchMode(PDO::FETCH_ASSOC);
          
                     while ($row = $stmt->fetch()) {
            // while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
                 //printf("ID: %s  Name: %s", $row["id"], $row["name"]);
                
                 ?>
                <tr id="row<?=$sno?>" style="display: none">
                <td> <?php echo $sno;?></td>
                <td> <strong>
                        <?php if($row["IsRedirectionExists"]==1) {?>
                        <a class="linkText" href="<?php echo $row["RedirectionLink"];?>"  target="_blank">
                            <?php echo $row["Award"];?> 
                        </a>
                <?php } else { echo $row["Award"]; }?>
                     
                    
                    </strong></td>
               
                
                
                <td> <?php echo $row["YEAR"];?></td>
                <td><?php echo $row["Description"];?></td>
              </tr>
                 
                 <?php
                 $sno = $sno+1;
             }
             $sno = $sno-1;
             //$conn->closeConnection();
            // mysqli_close($conn);
           //  mysql_close();
             
                 }catch(Exception $exc){
       
      $exc->getMessage();
         $resultMessage= '<font color=red size=2px>'.$exc.'</font>';
          header('Location: ../back-end-error.php?resultMessage='.$resultMessage); 
                // $conn->closeConnection(); // closing the connection
                   
}
   
   
   ?>
                
                <!-- dynamic code end -->
                
                
                
            <input type="hidden" name="count" id="count" value="<?=$sno?>"/>
              
            </tbody>
            
          </table>
          
        </div>
        
        </div>
          
          <!-- load more start -->
            <div class="row">
          <div class="col-sm-2"></div>
          <div class="col-sm-10">
              
             
                 
        
      
                  
               <!--   <button class="btn btn-default col-sm-10" data-dismiss="modal" type="submit" id="btnSubmit" name="btnSubmit">Load More</button> -->
               <button class="btn btn-default col-sm-10" data-dismiss="modal" type="button" id="btnSubmit" name="btnSubmit" onclick="getMoreRecords();">Load More</button>
             
          
          
            
          </div>
          <div class="col-sm-1"></div>
        </div>
       <!-- load more end -->
      </div>
      <br/>
    </section>
    
    <?php include '../footer.php';?>
 <script type="text/javascript">
 
     /* $(document).ready (function(){
          
          alert("hii");
      var lastrow = document.getElementById("limit").value;
      if(parseInt(lastrow,10)>15){
          var dispRow = parseInt(lastrow,10) - 10;
          document.getElementById("row"+dispRow).scrollIntoView();
      }
   
});​*/
  </script>
  </body>
</html> 
