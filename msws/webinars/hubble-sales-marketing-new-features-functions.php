<?php 
$reventId = '78'; 
$data = file_get_contents('http://www.miraclesoft.com/events/internal-webinar-after.php?eventId='.$reventId); 
 echo $data; 
 ?>