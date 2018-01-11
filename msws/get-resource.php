<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="description">
        <meta content="" name="author">
        <title>
            Resource Depot | Miracle
        </title>
      <?php include 'config/Locations.php';?>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link href="css/default.css" rel="stylesheet" type="text/css">
        <link href="css/component.css" rel="stylesheet" type="text/css">
        <script src="js/modernizr.custom.js"></script>
        <script src="js/fileinput.js"></script>
        <script src="js/custom.js"></script>
        <script src="js/Validation.js" type="text/javascript"></script><!--[if lt IE 9]>

<script src="js/html5shiv.js"></script>

<script src="js/respond.min.js"></script>
<![endif]-->
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?= AMAZON_URL ?>/images/favicon.ico" rel="shortcut icon">
    </head>
<?php
   
        include 'config/general.php';
        require 'config/DbController.php';
        
        
        $conn = new DbController();
        $resultMessage = '';
        $frmRefId = '';
         $frmObjectId = '';
         $docTitle = '';
         $docAuthor = '';
         $docTrack = '';
          $docLongDescription = '';
          $docType = '';
        try {
            if(! get_magic_quotes_gpc() ){
         $frmRefId = addslashes ($_GET['refId']);
         $frmObjectId = addslashes ($_GET['objectId']);
         //jobPosition
         $fileName = '';
         $filePath = '';
         
    }else {
        $frmRefId = $_GET['refId'];
        $frmObjectId = $_GET['objectId'];
    }
            
             $conn->connectToDatabase();
             $conn->selectDatabase();
             $selectQuery = "SELECT Id,Download_Id,Event_VisibleId,Title,Speakers,Location,EventDate,DateViewFormat,DownloadFlag,DocType,DocTitle,DocName,DocLocation,Author,TrackName,DocLongDesc  FROM tblWebDownloadsLines WHERE Id=".$frmRefId;
             $result = mysql_query($selectQuery) or die(mysql_error());;
             //$sno = 1;
              if(mysql_num_rows($result)>0){
                  $row = mysql_fetch_row($result); 
                
                 $docTitle = $row[10];
                 $docAuthor = $row[13];
         $docTrack = $row[14];
               $docLongDescription =  $row[15];
               $docType = $row[9];
               $fileName = $row[11];
         $filePath = $row[12];
             }
             //$conn->closeConnection();
            // mysqli_close($conn);
             mysql_close();
             
                 }catch(Exception $exc){
       
      $exc->getMessage();
         $resultMessage= '<font color=red size=2px>'.$exc.'</font>';
         
          header('Location: back-end-error.php?resultMessage='.$resultMessage); 
                // $conn->closeConnection(); // closing the connection
                   
}
   
   

//------------------------------------------------------

if(isset($_POST['btnSubmit'])){
            // echo 'hii';
try{
    $conn->connectToDatabase();
    
    if(! get_magic_quotes_gpc() ){
        $rrefId = addslashes ($_POST['refId']);
         $robjectId = addslashes ($_POST['objectId']);
         $rfirstName = addslashes ($_POST['firstName']);
         $rlastName = addslashes ($_POST['lastName']);
         $rorganization = addslashes ($_POST['organization']);
         $rdesignation = addslashes ($_POST['designation']);
         $remail = addslashes ($_POST['email']);
         $rphone = addslashes ($_POST['phone']);
       
    }else {
        $rrefId = $_POST['refId'];
        $robjectId = $_POST['objectId'];
        $rfirstName = $_POST['firstName'];
        $rlastName = $_POST['lastName'];
        $rorganization = $_POST['organization'];
        $rdesignation = $_POST['designation'];
        $remail = $_POST['email'];
        $rphone = $_POST['phone'];
       
    }
    
    
    
    $conn->selectDatabase();
    $sql = "INSERT INTO tblResourceDepotDetails (ObjectId,RefId,FName,LName,Organization,Designation,Email,WorkPhone)   ".
        " VALUES($robjectId,$rrefId,'$rfirstName','$rlastName','$rorganization',".
        "'$rdesignation','$remail','$rphone')";
    
  //  echo $sql;
  /*  $selectQuery = "select * from tblEventAttendies where email_id='$remail' AND phone_no='".$rphone."'";
    //echo $selectQuery;
$selectresponce = mysql_query($selectQuery);
if(mysql_num_rows($selectresponce)>0){
    
            $resultMessage = '<font color=red size=2px>You are already registered ..</font>';
            mysql_close();
            header('Location: /back-end-error.php?resultMessage='.$resultMessage); 
           // $conn->closeConnection(); // closing the connection
}else{*/
   
     if(!mysql_query($sql)){
             $resultMessage= "<font color=red size=2px>Data insertion failed..Please try again later\n</font>";
           // $conn->closeConnection(); // closing the connection
             mysql_close();
            header('Location: back-end-error.php?resultMessage='.$resultMessage); 
            }
            
            else{
              $eflag=EMAILFLAG;
                 if($eflag==1){
                 require 'classes/MailManager.php';
               $mailmanager = new MailManager();
               $mailmanager->sendDocDetails($rrefId,$robjectId ,$rfirstName ,$rlastName,$rorganization ,$rdesignation ,$remail ,$rphone ,$docTitle,$docAuthor,$docTrack,strip_tags($docLongDescription),$docType,$fileName,$filePath);
                 }
                 
           
                 mysql_close();
             $resultMessage = 'Thank you for your patience in filling in the details.Please check your mail for download link.';
             header('Location: Status.php?resultMessage='.$resultMessage); 
            }
                
//}
    
}catch(Exception $exc){
       
      $exc->getMessage();
         $resultMessage= '<font color=red size=2px>'.$exc.'</font>';
          
               //  $conn->closeConnection(); // closing the connection
         mysql_close();
                 header('Location: back-end-error.php?resultMessage='.$resultMessage); 
                   
}
               
         }
        
        
   ?>




<?php include 'header.php';?>
    <body>
        <section class="container">
            <br>
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-5 text-left">
                    <h1 class="heavy">
                        Resource Depot
                    </h1>
                </div>
                <div class="col-sm-5 text-right">
                    <ul class="breadcrumb pull-right">
                        <li>
                            <a href="../">Home</a>
                        </li>
                        <li class="active">Resource Depot
                        </li>
                    </ul>
                </div>
                <div class="col-sm-1"></div>
            </div>
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-10"><hr class="noMargin"></div>
                <div class="col-sm-1"></div>
            </div>
            <!--contact form copy starts-->
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-6">
                <!--   <h2 class="heavy noMarginTop">Enhanced MFT Visibility and Control with IBM Sterling Control Center</h2> -->
                   <h2 class="heavy noMarginTop"><?php echo $docTitle; ?></h2>
                   <div class="row noMarginTop">
                        <div class="col-sm-5 noMarginTop">
                            <hr class="noMarginTop noMarginBottom">
                        </div><!-- This is the divider line between the heading and the content -->
                    </div>
                    <p class="greyText heavy">Product Brief</p><!-- Resource Type -->
                    <?php echo $docLongDescription; ?>
                 <!--   <p class="methodText">It is critical for an enterprise to ensure that proper visibility and control are excersized over their Managed File Transfer activities. Through this product brief you will be able to understand the various features of IBM's Sterling Control Center and how it can help you to govern your Managed File Transfer activities. </p>
                    <p class="methodText">It is critical for an enterprise to ensure that proper visibility and control are excersized over their Managed File Transfer activities. Through this product brief you will be able to understand the various features of IBM's Sterling Control Center and how it can help you to govern your Managed File Transfer activities. </p> -->
                </div>
                <div class="col-sm-4">
                    <!--third part starts-->
                 <!--   <form> -->
                         <form method="post" action="<?php $_PHP_SELF ?>" id="myForm" >
                             <input type="hidden"  id="refId" name="refId" value="<?php echo $frmRefId;?>" ></input>
                             <input type="hidden"  id="objectId" name="objectId" value="<?php echo $frmObjectId;?>" ></input>
                             
                        <div class="row">
                            <!--copy 1 from contact first row starts-->
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" placeholder="First Name*" required="required" type="text" id="firstName" name="firstName" tabindex="1" onchange="fieldLengthValidator(this);">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Last Name*" required="required" type="text" name="lastName" id="lastName" tabindex="2" onchange="fieldLengthValidator(this);">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Organization*" required="required" type="text" name="organization" id="organization" tabindex="5" onchange="fieldLengthValidator(this);">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Designation*" required="required" type="text" name="designation" id="designation" tabindex="6" onchange="fieldLengthValidator(this);">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Email*" required="required" type="text" id="email" name="email" onchange="return checkEmail(this);fieldLengthValidator(this);">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Work Phone*" required="required" type="text" id="phone" name="phone" onchange="return formatPhone(this);" onblur="return validatenumber(this)">
                                </div>
                            </div>
                        </div><!--copy 1 from contact first row ends-->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"><!-- Modal for showing alerts -->
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-body">
                                        <strong><div id="showAlertText"></div></strong>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                      </div>
                                    </div>
                                  </div>
                                </div><!-- Modal ends here -->
                        <button class="btn btn-primary" id="btnSubmit" name="btnSubmit" tabindex="12" type="submit">Submit</button>
                    </form>
                    <hr>
                    <p class="methodText greyText">
                        The given information will not be used or be distributed to any sources and will be used only for User Authentication. Miracle has copyrights and is authorized to use and circulate all the resources which are being provided to you.
                    </p>
                </div>
                <div class="col-sm-1"></div>
            </div>
            <br>
        </section><!--/#error-->
        <?php include 'footer.php';?>
    </body>
</html>
