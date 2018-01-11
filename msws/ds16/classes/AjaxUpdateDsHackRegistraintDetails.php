
<?php

 require '../../config/ConnectionProvider.php';
$resultMessage = '';
  $checkFlag=0;
try{
    $rregId = '';
    $rfname = '';
    $rlname = '';
   
    $risChecked = 0;
    $risChecked1=0;
    $risChecked2=0;
    $risChecked3=0;
    $rassignedTrack='';
    $rteamCandidateName1='';
    $rteamCandidateName2='';
    $rteamCandidateName3='';
   //hackRegId="+regId+"&fname="+escape(fname)+"&lname="+escape(lname)+"&email="+escape(email)+"&mobileNo="+escape(mobileNo)+"&isChecked="+escape(isChecked)+"&isChecked1="+escape(isChecked1)+"&isChecked2="+escape(isChecked2)+"&isChecked3="+escape(isChecked3)+"&assignedTrack="+escape(assignedTrack)
    
    if(! get_magic_quotes_gpc() ){
       
         $rregId = addslashes ($_GET['hackRegId']);
         $rfname = addslashes ($_GET['fname']);
         $rlname = addslashes ($_GET['lname']);
      
         $risChecked = addslashes ($_GET['isChecked']);
         $risChecked1 = addslashes ($_GET['isChecked1']);
         $risChecked2 = addslashes ($_GET['isChecked2']);
         $risChecked3 = addslashes ($_GET['isChecked3']);
          $rassignedTrack = addslashes ($_GET['assignedTrack']);
          $rteamCandidateName1 = addslashes ($_GET['teamCandidateName1']);
          $rteamCandidateName2 = addslashes ($_GET['teamCandidateName2']);
          $rteamCandidateName3 = addslashes ($_GET['teamCandidateName3']);
       
    }else {
       
        $rregId = $_GET['hackRegId'];
        $rfname = $_GET['fname'];
        $rlname = $_GET['lname'];
       
        $risChecked = $_GET['isChecked'];
        $risChecked1 = $_GET['isChecked1'];
        $risChecked2 = $_GET['isChecked2'];
        $risChecked3 = $_GET['isChecked3'];
        $rassignedTrack = $_GET['assignedTrack'];
        
        $rteamCandidateName1 = $_GET['teamCandidateName1'];
        $rteamCandidateName2 = $_GET['teamCandidateName2'];
        $rteamCandidateName3 = $_GET['teamCandidateName3'];
    }

     $sql = "UPDATE tblConfHackathonRegistration SET FirstName=:rfname,LastName=:rlname,AssignedTrack=:rassignedTrack,IsAttendedMain=:risChecked,IsAttendedTm1=:risChecked1,IsAttendedTm2=:risChecked1,IsAttendedTm3=:risChecked3,TeamCandidateName=:rteamCandidateName1,TeamCandidateName2=:rteamCandidateName2,TeamCandidateName3=:rteamCandidateName3 WHERE Id=:rregId";
        
        
   
                    $stmt = $conn->prepare($sql);
                    $stmt->bindParam(':rfname', $rfname);
                    $stmt->bindParam(':rlname', $rlname);
                   
                    $stmt->bindParam(':rassignedTrack', $rassignedTrack);
                    $stmt->bindParam(':risChecked', $risChecked);
                    $stmt->bindParam(':risChecked1', $risChecked1);
                    $stmt->bindParam(':risChecked2', $risChecked2);
                    $stmt->bindParam(':risChecked3', $risChecked3);
                    $stmt->bindParam(':rteamCandidateName1', $rteamCandidateName1);
                    $stmt->bindParam(':rteamCandidateName2', $rteamCandidateName2);
                    $stmt->bindParam(':rteamCandidateName3', $rteamCandidateName3);
                    
                    
                    
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
 
