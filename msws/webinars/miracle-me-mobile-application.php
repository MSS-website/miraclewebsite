<?php 
$reventId = '237'; 
require '../config/ConnectionProvider.php'; 
$selectQuery = "SELECT Status FROM tblEventLines WHERE event_id = :reventId AND WebinarType = 'I'"; 
 $stmt = $conn->prepare($selectQuery); 
$stmt->bindParam(':reventId', $reventId); 
 $stmt->execute(); 
 if ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {  
 $eventStatus = $row[0]; 
 if ($eventStatus == 'Published') { 
$data = file_get_contents('http://www.miraclesoft.com/events/internal-webinar-after.php?eventId='.$reventId); 
 echo $data; 
 } else if($eventStatus == 'Completed'){ 
header('Location: ../events/internal-webinar-depot.php?eventId=-2'); 
}else if($eventStatus == 'InActive'){ 
$rpopUpFlag = '1'; 
header('Location: ../events/internal-webinar-depot.php?eventId=-1'); 
} else {
$data = file_get_contents('http://www.miraclesoft.com/events/internal-webinar-before.php?eventId='.$reventId); 
echo $data; 
}
 }else { 
 $rpopUpFlag = '1'; 
 header('Location: ../events/internal-webinar-depot.php?eventId=-1'); 
 } 
 ?>