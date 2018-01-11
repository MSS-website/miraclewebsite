<?php 
$reventId = '37'; 
$data = file_get_contents('http://www.miraclesoft.com/events/internal-webinar-after.php?eventId='.$reventId); 
 echo $data; 
 ?>