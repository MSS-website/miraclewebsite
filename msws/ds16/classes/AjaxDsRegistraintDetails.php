<?php
        
       // include '../config/DbController.php';
 require '../../config/ConnectionProvider.php';
        //$conn = new DbController();
       $rregId=0;
        try {
            if(! get_magic_quotes_gpc() ){
  
         $rregId = addslashes ($_GET['regId']);
        //jobPosition
    }else {
        $rregId = $_GET['regId'];
   }
           

                   // $conn->connectToDatabase();
                    //$conn->selectDatabase();
                    //$selectQuery = "SELECT BodyContent,BreadComLabel,DocTitle,Id,Download_Id,BodyContent2,CreatedDate,DownloadFlag,GatedContent,DocType FROM tblWebDownloadsLines WHERE Id=".$rlibId;
                    $selectQuery = "SELECT Id,FirstName,LastName,Email,MobileNumber,IsAttended,CandidateType FROM tblConfRegistration WHERE Id=:rregId";
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
                     
                        
                        echo $row[0].'$#@'.$row[1].'$#@'.$row[2].'$#@'.$row[3].'$#@'.$row[4].'$#@'.$row[5].'$#@'.$row[6];
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
		 
		 