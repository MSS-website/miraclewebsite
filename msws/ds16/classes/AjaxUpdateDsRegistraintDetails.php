
<?php

 require '../../config/ConnectionProvider.php';
$resultMessage = '';
  $checkFlag=0;
try{
    $rregId = '';
    $rfname = '';
    $rlname = '';
    $remail = '';
    $rmobileNo = '';
    $risChecked = '0';
    $rctype='Attendee';
    //xmlhttp.open("GET","classes/AjaxUpdateDsRegistraintDetails.php?regId="+regId+"&fname="+escape(fname)+"&lname="+escape(lname)+"&email="+escape(email)+"&mobileNo="+escape(mobileNo)+"&isChecked="+escape(isChecked),true);
    if(! get_magic_quotes_gpc() ){
       
         $rregId = addslashes ($_GET['regId']);
         $rfname = addslashes ($_GET['fname']);
         $rlname = addslashes ($_GET['lname']);
         $remail = addslashes ($_GET['email']);
         $rmobileNo = addslashes ($_GET['mobileNo']);
         $risChecked = addslashes ($_GET['isChecked']);
          $rctype = addslashes ($_GET['ctype']);
       
    }else {
       
        $rregId = $_GET['regId'];
        $rfname = $_GET['fname'];
        $rlname = $_GET['lname'];
        $remail = $_GET['email'];
        $rmobileNo = $_GET['mobileNo'];
        $risChecked = $_GET['isChecked'];
        $rctype = $_GET['ctype'];
        
    }

     $sql = "UPDATE tblConfRegistration SET FirstName=:rfname, LastName=:rlname,Email=:remail,MobileNumber=:rmobileNo,IsAttended=:risChecked,CandidateType=:rctype WHERE Id=:rregId   ";
        
        
   
                    $stmt = $conn->prepare($sql);
                    $stmt->bindParam(':rfname', $rfname);
                    $stmt->bindParam(':rlname', $rlname);
                    $stmt->bindParam(':remail', $remail);
                    $stmt->bindParam(':rmobileNo', $rmobileNo);
                    $stmt->bindParam(':risChecked', $risChecked);
                    $stmt->bindParam(':rctype', $rctype);
                    $stmt->bindParam(':rregId', $rregId);
                    
                    if(!$stmt->execute()) {
             
             echo '0';
            }else{
                
                echo '1';
                 
            }
}catch(Exception $exc){
      $exc->getMessage();
         $resultMessage= '<font color=red size=2px>'.$exc.'</font>';
         
}

?>
 
