<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<?php
        
       // include '../config/DbController.php';
require '../config/ConnectionProvider.php';
       // $conn = new DbController();
       $rlibId=0;
        try {
            if(! get_magic_quotes_gpc() ){
  
         $rlibId = addslashes ($_GET['libId']);
        //jobPosition
    }else {
        $rlibId = $_GET['libId'];
   }
           

                  //  $conn->connectToDatabase();
                   // $conn->selectDatabase();
                   // $selectQuery = "SELECT tas.NAME AS NAME,tas.Designation AS Designation,tas.Organization AS Organization,te.event_id AS event_id FROM tblLkAuthorsAndSpeakers tas LEFT JOIN tblEventSpeakers te ON tas.Id = te.SpeakerId WHERE  te.ObjectType = 'LB' AND te.STATUS = 'Active' AND te.event_id=".$rlibId;
                    $selectQuery = "SELECT tas.NAME AS NAME,tas.Designation AS Designation,tas.Organization AS Organization,te.event_id AS event_id FROM tblLkAuthorsAndSpeakers tas LEFT JOIN tblEventSpeakers te ON tas.Id = te.SpeakerId WHERE  te.ObjectType = 'LB' AND te.STATUS = 'Active' AND te.event_id=:rlibId";
                 //   echo $selectQuery;
//                    /rlibId
                    $stmt = $conn->prepare($selectQuery);
                    $stmt->bindParam(':rlibId', $rlibId);
                   // $result = mysql_query($selectQuery) or die(mysql_error());;
                     $stmt->execute();
                $stmt->setFetchMode(PDO::FETCH_ASSOC);
             $sno = 0;
             
             $displayAuthors = '';
             $authorsView = '';
             
            // while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
             while ($row = $stmt->fetch()) {
                        //printf("ID: %s  Name: %s", $row["id"], $row["name"]);
                        //printf("ID: %s  Name: %s", $row["id"], $row["name"]);
                       // $reventDescription = $row[0];
                         $sno = $sno+1;
                 if($sno == 1)
                $displayAuthors= $row["NAME"].'$#@'.$row["Designation"].'$#@'.$row["Organization"];
                 else
                     $displayAuthors=$displayAuthors.'!*!'.$row["NAME"].'$#@'.$row["Designation"].'$#@'.$row["Organization"]; 
                        
             }
             if($sno>=1){
                 $authorsView = " <div class='row'>";
                 $rPublishedDate = getPublishedDate($rlibId);
                 $array = explode('!*!', $displayAuthors);
                  for ($i = 0; $i < count($array); ++$i) {
             $innerArray = explode('$#@', $array[$i]);
             
             $authorsView = $authorsView."<div class='col-sm-4'><p class='methodText'><strong>$innerArray[0] <br></strong><strong>$innerArray[1]</strong><br>$innerArray[2] <br>$rPublishedDate</p></div>";
             
        //$mail->AddAddress($innerArray[0], $innerArray[1]);
        }
               $authorsView = $authorsView."</div>";
                 
             }
             
             
             
                    echo $authorsView;
                } catch (Exception $exc) {

                    $exc->getMessage();
                    $resultMessage = '<font color=red size=2px>' . $exc . '</font>';

                   // header('Location: ../back-end-error.php?resultMessage=' . $resultMessage);
                    // $conn->closeConnection(); // closing the connection
                 //   mysql_close();
                }

                
                
                
                
                
             function getPublishedDate($webId) {
                           // $conn = new DbController();
                 require '../config/ConnectionProvider.php';
                 
                           $dateString = '';
                            
                          //  echo 'eventId-->'.$webEventId;
                            try {
                              //  $conn->connectToDatabase();
                               // $conn->selectDatabase();
                                //$Query = "SELECT CreatedDate FROM tblWebDownloadsLines WHERE Id=".$webId;
                                $Query = "SELECT CreatedDate FROM tblWebDownloadsLines WHERE Id=:webId";
           // $responce = mysql_query($Query) or die(mysql_error());
            $stmt = $conn->prepare($Query);
                      $stmt->bindParam(':webId', $webId);
              $stmt->execute();
            $tempReffId = '';
            $rows = $stmt->rowCount();
               
                   // if (mysql_num_rows($result) > 0) {
               if ($rows > 0) {
             //   $row = mysql_fetch_row($responce);
                   if ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
                $rCreatedDate= strtotime($row[0]);
                        
                           $dateString = date('F d , Y', $rCreatedDate);
                        
              
                //  echo "tempReffId-->".$tempReffId;
              //  mysql_close();
            }
               }         
                                  
                            } catch (Exception $exc) {

                                $exc->getMessage();
                                $resultMessage = '<font color=red size=2px>' . $exc . '</font>';
                                header('Location: ../back-end-error.php?resultMessage=' . $resultMessage);
                                // $conn->closeConnection(); // closing the connection
                            }
                            return $dateString;
                        }    
                
         ?>
		 
		 