<?php
        
       // include '../config/DbController.php';
 require '../../config/ConnectionProvider.php';
        //$conn = new DbController();
       $rregId=0;
        try {
            if(! get_magic_quotes_gpc() ){
  
         $rregId = addslashes ($_GET['hackRegId']);
        //jobPosition
    }else {
        $rregId = $_GET['hackRegId'];
   }
           
$meanHackData = '{"ResultString": "Invalid"}';
$result = json_decode($meanHackData, true);
                   // $conn->connectToDatabase();
                    //$conn->selectDatabase();
                    //$selectQuery = "SELECT BodyContent,BreadComLabel,DocTitle,Id,Download_Id,BodyContent2,CreatedDate,DownloadFlag,GatedContent,DocType FROM tblWebDownloadsLines WHERE Id=".$rlibId;
                    $selectQuery = "SELECT Id,FirstName,LastName,EmailId,MobileNumber,CollegeName,TeamCandidateName,TeamCandidateName2,TeamCandidateName3,AssignedTrack,IsAttendedMain,IsAttendedTm1,IsAttendedTm2,IsAttendedTm3,IsSelected FROM tblConfHackathonRegistration WHERE Id=:rregId";
                 //   echo $selectQuery;
                   // $result = mysql_query($selectQuery) or die(mysql_error());
//                    /rlibId
                    //$sno = 1;
                     $stmt = $conn->prepare($selectQuery);
                      $stmt->bindParam(':rregId', $rregId);
              $stmt->execute();
               $rows = $stmt->rowCount();
               
                   // if (mysql_num_rows($result) > 0) {
               if ($rows > 0) {
                        //$row = mysql_fetch_row($result);
                        if ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
                        //printf("ID: %s  Name: %s", $row["id"], $row["name"]);
                        //printf("ID: %s  Name: %s", $row["id"], $row["name"]);
                       // $reventDescription = $row[0];
                        // $sno = $sno+1;
                     $result["ResultString"]="Valid";
                     $result["Id"]=$row[0];
                     $result["FirstName"]=$row[1];
                     $result["LastName"]=$row[2];
                     $result["EmailId"]=$row[3];
                     $result["MobileNumber"]=$row[4];
                     $result["CollegeName"]=$row[5];
                     $result["TeamCandidateName"]=$row[6];
                     $result["TeamCandidateName2"]=$row[7];
                     $result["TeamCandidateName3"]=$row[8];
                     $result["AssignedTrack"]=$row[9];
                     //IsAttendedMain,IsAttendedTm1,IsAttendedTm2,IsAttendedTm3
                     $result["IsAttendedMain"]=$row[10];
                     $result["IsAttendedTm1"]=$row[11];
                     $result["IsAttendedTm2"]=$row[12];
                     $result["IsAttendedTm3"]=$row[13];
                     $result["IsSelected"]=$row[14];
                     
                     
                        
                        echo json_encode($result);

                    }
               }
                } catch (Exception $exc) {

                    $exc->getMessage();
                    $resultMessage = '<font color=red size=2px>' . $exc . '</font>';

                   // header('Location: ../back-end-error.php?resultMessage=' . $resultMessage);
                    // $conn->closeConnection(); // closing the connection
                  //  mysql_close();
                }

         ?>
		 
		 