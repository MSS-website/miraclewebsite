<?php 
session_start(); 
$ses_VideoId = isset($_SESSION["ses_Curr_VideoId"]) ? $_SESSION["ses_Curr_VideoId"] : ''; 
$ses_Err_Msg = isset($_SESSION["ses_Curr_Err_Msg"]) ? $_SESSION["ses_Curr_Err_Msg"] : ''; 
$ses_Access_Type = isset($_SESSION["ses_Curr_AccessType"]) ? $_SESSION["ses_Curr_AccessType"] : ''; 
session_destroy(); 
$data = file_get_contents('http://www.miraclesoft.com/library/video/video-play.php?videoId=295&sesAccessType='.$ses_Access_Type.'&sesVideoId='.$ses_VideoId.'&sesErrMsg='.urlencode($ses_Err_Msg)); 
 echo $data; 
?>