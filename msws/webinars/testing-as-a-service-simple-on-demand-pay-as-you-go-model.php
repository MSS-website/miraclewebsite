<?php 
$reventId = '221'; 
session_start(); 
$ses_CheckFlag = isset($_SESSION["ses_CheckFlag"]) ? $_SESSION["ses_CheckFlag"] : '-1'; 
$ses_Err_Msg = isset($_SESSION["ses_Curr_Err_Msg"]) ? $_SESSION["ses_Curr_Err_Msg"] : ''; 
$rsource = isset($_GET["source"]) ? $_GET["source"] : ''; 
session_destroy();  
require '../config/ConnectionProvider.php'; 
$selectQuery = "SELECT Status,FileName FROM tblEventLines WHERE event_id = :reventId AND WebinarType = 'E'";  
 $stmt = $conn->prepare($selectQuery); 
$stmt->bindParam(':reventId', $reventId); 
 $stmt->execute(); 
 if ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {  
 $eventStatus = $row[0]; 
  $phpFile = $row[1];  
 if ($eventStatus == 'Published') { 
$data = file_get_contents('http://www.miraclesoft.com/events/webinar-after.php?eventId='.$reventId.'&phpFile='.$phpFile.'&ses_CheckFlag='.$ses_CheckFlag.'&ses_Err_Msg='.$ses_Err_Msg); 
 echo $data; 
 } else if($eventStatus == 'Completed'){ 
header('Location: ../events/external-webinar-depot.php?eventId=-2'); 
}else if($eventStatus == 'InActive'){ 
$rpopUpFlag = '1'; 
header('Location: ../events/external-webinar-depot.php?eventId=-1'); 
} else {
$data = file_get_contents('http://www.miraclesoft.com/events/webinar-before.php?eventId='.$reventId.'&source='.$rsource);
echo $data; 
}
 }else { 
 $rpopUpFlag = '1'; 
 header('Location: ../events/external-webinar-depot.php?eventId=-1'); 
 } 
 ?>