<?php
 include '../config/general.php';
      $resultMessage = "";
      
if(isset($_POST['btnSubmit'])){
//require '../config/DbController.php';
//$conn = new DbController();
     require '../config/ConnectionProvider.php';
try{
    //$conn->connectToDatabase();
     if(empty($_SESSION['captcha_code'] ) || strcasecmp($_SESSION['captcha_code'], $_POST['captcha_code']) != 0){  
		$resultMessage="<font color=red size=2px>The Validation code does not match!</font>";// Captcha verification is incorrect.		
	}else{// Captcha verification is Correct. Final Code Execute here!		
		//$resultMessage="The Validation code has been matched.";	
if(! get_magic_quotes_gpc() )
{$rfname = addslashes ($_POST['firstname']);
    $rlname = addslashes ($_POST['lastname']);
    $rorganization = addslashes ($_POST['organization']);
    $rcity = addslashes ($_POST['city']);
    $rdesignation = addslashes ($_POST['designation']);
    $rcountry = addslashes ($_POST['country']);
    $remail = addslashes ($_POST['email']);
    $rphone = addslashes ($_POST['phone']);
    $rdescription = addslashes ($_POST['description']);
     $rzip = addslashes ($_POST['zip']);
     $rstate = addslashes ($_POST['state']);
}
else
{
    $rfname = $_POST['firstname'];
    $rlname = $_POST['lastname'];
    $rorganization = $_POST['organization'];
    $rcity = $_POST['city'];
    $rdesignation = $_POST['designation'];
    $rcountry = $_POST['country'];
    $remail = $_POST['email'];
    $rphone = $_POST['phone'];
    $rzip = $_POST['zip'];
    $rstate = addslashes ($_POST['state']);
     $rdescription = addslashes ($_POST['description']);
}

//$conn->selectDatabase();
/*$sql = "insert into tblContactus(Fname,Lname,Organization,Designation,WorkPhone,City,Country,Description,".
        "Email,Zip,State) values('$rfname','$rlname','$rorganization','$rdesignation','$rphone','$rcity','$rcountry',".
        "'$rdescription','$remail','$rzip','$rstate')";*/

$sql = "insert into tblContactus(Fname,Lname,Organization,Designation,WorkPhone,City,Country,Description,".
        "Email,Zip,State) values(:rfname,:rlname,:rorganization,:rdesignation,:rphone,:rcity,:rcountry,".
        ":rdescription,:remail,:rzip,:rstate)";

//$selectQuery = "select * from tblContactus contactus where contactus.Email='$remail' and contactus.WorkPhone='$rphone'";
//$selectresponce = mysql_query($selectQuery);
//if(mysql_num_rows($selectresponce)>0){
          //  $resultMessage = '<font color=red size=2px>'.$remail.' is already exists in our system.</font>';
          //  $conn->closeConnection(); // closing the connection
//}else{
     $stmt = $conn->prepare($sql);
                 $stmt->bindParam(':rfname', $rfname);
                 $stmt->bindParam(':rlname', $rlname);
                 $stmt->bindParam(':rorganization', $rorganization);
                 $stmt->bindParam(':rdesignation', $rdesignation);
                 $stmt->bindParam(':rphone', $rphone);
                 $stmt->bindParam(':rcity', $rcity);
                 $stmt->bindParam(':rcountry', $rcountry);
                 $stmt->bindParam(':rdescription', $rdescription);
                 $stmt->bindParam(':remail', $remail);
                 $stmt->bindParam(':rzip', $rzip);
                 $stmt->bindParam(':rstate', $rstate);
             $stmt->execute();
              $eflag=EMAILFLAG;
                 if($eflag==1){
                 require '../classes/MailManager.php';
                $mailmanager = new MailManager();
                $mailmanager->sendContactForm($rfname, $rlname, $remail, $rorganization, $rdesignation, $rphone, $rcity, $rcountry, $rdescription,$rzip,$rstate);
                $mailmanager->sendContactAcknowldge($rfname, $remail);
                 }
                $resultMessage= "<font color=green size=2px>We have recived your deatils, Our team will contact you.\n</font>"; 
                
                
      
            
            //$stmt->close();
//$conn->close();
        //}
        }
}
  catch(Exception $exc){
      
   $resultMessage= "<font color=red size=2px>Data insertion failed..Please try again.</font>";
      
                   
    }

}
?>
