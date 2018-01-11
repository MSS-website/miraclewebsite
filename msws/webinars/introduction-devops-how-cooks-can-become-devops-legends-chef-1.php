<?php 
$reventId = '19'; 
$data = file_get_contents('http://www.miraclesoft.com/events/internal-webinar-after.php?eventId='.$reventId); 
 echo $data; 
 ?>