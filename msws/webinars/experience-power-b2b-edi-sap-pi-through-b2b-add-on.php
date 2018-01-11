<?php 
$reventId = '21'; 
 $rsource = isset($_GET["source"]) ? $_GET["source"] : ''; 
session_start(); 
$ses_CheckFlag = isset($_SESSION["ses_CheckFlag"]) ? $_SESSION["ses_CheckFlag"] : '-1'; 
$ses_Err_Msg = isset($_SESSION["ses_Curr_Err_Msg"]) ? $_SESSION["ses_Curr_Err_Msg"] : ''; 
session_destroy();  
$data = file_get_contents('http://www.miraclesoft.com/events/webinar-after.php?eventId='.$reventId.'&phpFile=experience-power-b2b-edi-sap-pi-through-b2b-add-on&ses_CheckFlag='.$ses_CheckFlag.'&ses_Err_Msg='.$ses_Err_Msg); 
echo $data; 
 ?>