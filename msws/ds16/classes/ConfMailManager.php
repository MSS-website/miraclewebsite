<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

include "class.phpmailer.php"; // include the class name
/**
 * Description of MailManager
 *
 * @author miracle
 */
class ConfMailManager {
    //put your code here
    
    /**
     * contact form mail manager
     */
    
    function sendConfRegistraintsDetails($fname,$lname,$email,$mobileNumber,$title,$attendeeType,$city,$state,$areasOfIntrest,$comments,$tempCountry,$tempCollegeName){
       
        $mail	= new PHPMailer; // call the class 
	$mail->IsSMTP(); 
	$mail->Host = SMTP_HOST; //Hostname of the mail server
	$mail->Port = SMTP_PORT; //Port of the SMTP like to be 25, 80, 465 or 587
	$mail->SMTPAuth = true; //Whether to use SMTP authentication
        $mail->SMTPSecure = SMTP_SECURE;
	$mail->Username = SMTP_UNAME; //Username for SMTP authentication any valid email created in your domain
	$mail->Password = SMTP_PWORD; //Password for SMTP authentication
	$mail->AddReplyTo("mssapp@miraclesoft.com", "Digital Summit 2016"); //reply-to address
	$mail->SetFrom("mssapp@miraclesoft.com", "Digital Summit 2016"); //From address of the mail
        //$mail->AddBCC("vkandregula@miraclesoft.com", "Venkat Ram Prasad Kandregula"); 
        // $mail->AddBCC("santu0645@gmail.com", "Santosh Kola"); 
        //AddBCC
	// put your while loop here like below,
	$mail->Subject = "Digital Summit 2016 Registration details($attendeeType)"; //Subject od your mail
	//$mail->AddAddress("skola2@miraclesoft.com", "Santosh Kola"); //To address who will receive this email
       // $mail->AddAddress(CONTACT_US, "info"); //To address who will receive this email
        if($attendeeType=='Customer')
	  $myArray = explode(';', DIGITAL_SUMMIT_REGISTRAINTS_CUSTOMER);
      else 
          $myArray = explode(';', DIGITAL_SUMMIT_REGISTRAINTS_STUDENTS);
      
        for ($i = 0; $i < count($myArray); ++$i) {
             $innerArray = explode(',', $myArray[$i]);
        $mail->AddAddress($innerArray[0], $innerArray[1]);
        }
	//$mail->MsgHTML("<b>Hi, your first SMTP mail has been received. Great Job!.. <br/><br/>by <a href='http://www.asif18.com/7/php/send-mails-using-smtp-in-php-by-gmail-server-or-own-domain-server/'>Asif18</a></b>"); //Put your body of the message you can place html code here
        $mail->MsgHTML("<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<meta http-equiv='X-UA-Compatible' content='IE=edge' />
<style type='text/css'>
body, table, td, 
a{
-webkit-text-size-adjust: 100%; 
-ms-text-size-adjust: 100%;}
table,td{
mso-table-lspace: 0pt; 
mso-table-rspace: 0pt;
}
img{
-ms-interpolation-mode: bicubic;
}
img{
border: 0; 
height: auto; 
line-height: 100%; 
outline: none; 
text-decoration: none;
}
table{
border-collapse: collapse !important;
}
body{
height: 100% !important; 
margin: 0 !important; 
padding: 0 !important; 
width: 100% !important;
}
a[x-apple-data-detectors] {
color: inherit !important;
text-decoration: none !important;
font-size: inherit !important;font-family: inherit !important;
font-weight: inherit !important;
line-height: inherit !important;
}
@media screen and (max-width: 525px) {
 .wrapper {width: 100% !important;max-width: 100% !important;
 }
 .logo img {
 margin: 0 auto !important;
 } 
 .mobile-hide {d
 isplay: none !important;
 } 
 .img-max {
 max-width: 100% !important;
 width: 100% !important; 
 height: auto !important;
 }
 .responsive-table {
 width: 100% !important;
 }
 .padding {
 padding: 10px 5% 15px 5% !important;
 }
 .padding-meta {
 padding: 30px 5% 0px 5% !important;
 text-align: center;
 }
 .padding-copy {
 padding: 10px 5% 10px 5% !important;
 text-align: center;
 }
 .no-padding {
 padding: 0 !important;
 }
 .section-padding {
 padding: 50px 15px 50px 15px !important;
 }
 .mobile-button-container {
 margin: 0 auto;
 width: 100% !important;
 }
 .mobile-button {
 padding: 15px !important;
 border: 0 !important;font-size: 16px !important;
 display: block !important;
 }
 }
</style></head>
<body style='margin: 0 !important; padding: 0 !important;'><table border='0' cellpadding='0' cellspacing='0' width='100%'>
<tr><td bgcolor='#ffffff' align='center'>
<table border='0' cellpadding='0' cellspacing='0' width='100%' style='max-width: 500px;' class='wrapper'>
<tr><td align='center' valign='top' style='padding: 15px 0;' class='logo'>
<a href='http://www.miraclesoft.com/conf' target='_blank'><img alt='Logo' src='http://www.miraclesoft.com/digitalsummit/images/apcloud-Logo-v1.png' width='165' height='auto' style='display: block; font-family: Helvetica, Arial, sans-serif; color: #ffffff; font-size: 16px;' border='0'></a></td></tr></table></td></tr>
<tr><td bgcolor='#ffffff' align='center' style='padding: 5px;'><table border='0' cellpadding='0' cellspacing='0' width='100%' style='max-width: 500px;' class='responsive-table'>
<tr><td><table width='100%' border='0' cellspacing='0' cellpadding='0'><tr><td align='center' style='font-size: 26px; font-family: calibri; color: #2368a0; padding-top: 10px;' class='padding-copy'><b>Digital Summit 2016 Registration Details</b></td></tr></table></td></tr></table></td></tr>
<tr><td bgcolor='#ffffff' align='center' style='padding: 15px;' class='padding'>
<table border='0' cellpadding='0' cellspacing='0' width='100%' style='max-width: 500px;' class='responsive-table'>
<tr><td><table width='100%' border='0' cellspacing='0' cellpadding='0'>
<tr><td align='left' style='padding: 5px 0 5px 0; font-size: 14px; line-height: 25px; font-family: calibri; color: #232527;' class='padding-copy'><b>Team,</b>
<br> Following are the details of Attendee.</td></tr>
<tr><td style='padding: 5px 0 5px 0; font-size: 14px; line-height: 25px; font-family: calibri; color: #232527;' class='padding-copy'><b>Name:</b> $fname.$lname<br/>
							  <b>Email:</b> $email<br/>
							  <b>Mobile Number:</b> $mobileNumber<br/>
							  <b>Title:</b> $title<br/>
							  <b>Attendee type:</b> $attendeeType<br/>
                                                          
                                                          <b>College name:</b> $tempCollegeName<br/>
                
							  <b>City:</b> $city<br/>
                                                          <b>State:</b> $state<br/>
                <b>Country:</b> $tempCountry<br/>
                
                
							  <b>Areas Of interest :</b>$areasOfIntrest<br/>
							  <b>Comments:</b> $comments<br/>
							  
							  </td></tr><tr></td>
<tr><td align='justify' style='padding: 5px 0 5px 0; border-bottom: 1px dashed #2368a0; font-size: 14px; line-height: 25px; font-family: calibri; color: #232527;' class='padding-copy'></td></tr></tr></table></td></tr>
<tr><td><table width='100%' border='0' cellspacing='0' cellpadding='0'><tr><td align='left' style='padding: 5px 0 5px 0; font-size: 14px; line-height: 22px; font-family: calibri; color: #8c8c8c; font-style: normal;' class='padding-copy'>Thanks & Regards,<br/><b>Digital Summit 2016,</b><br/><b> Miracle Software Systems, Inc. </b><br/><b>Email : corporate@miraclesoft.com </b><br/><b>Phone : 248-2331185</b><br/>
							 
							  </font></td></tr></table></td></tr>



</table></td></tr><tr><td bgcolor='#ffffff' align='center' style='padding: 15px 0px;'>
<table width='100%' border='0' cellspacing='0' cellpadding='0' align='center' style='max-width: 500px;' class='responsive-table'><tr><td width='200' align='center' style='text-align: center;'><table width='200' cellpadding='0' cellspacing='0' align='center'><tr><td width='10'><a href='https://www.facebook.com/andhracloud' target='_blank'><img src='http://www.miraclesoft.com/images/newsletters/facebook.png' alt='facebook' width='26' height='auto' data-max-width='40' data-customIcon='true' ></a></td>
<td width='10'><a href='https://plus.google.com/104381127288956493644/posts/p/pub' target='_blank'><img src='http://www.miraclesoft.com/images/newsletters/googleplus.png' alt='facebook' width='26' height='auto' data-max-width='40' data-customIcon='true' ></a></td><td width='10'><a href='https://www.linkedin.com/groups/10313125' target='_blank'><img src='http://www.miraclesoft.com/images/newsletters/linkedin.png' alt='facebook' width='26' height='auto' data-max-width='40' data-customIcon='true' ></a></td><td width='10'><a href='https://www.youtube.com/channel/UC6JwAnSWoF2eMEz6RnDWJhg' target='_blank'><img src='http://www.miraclesoft.com/images/newsletters/youtube.png' alt='facebook' width='26' height='auto' data-max-width='40' data-customIcon='true' ></a></td><td width='10'><a href='https://twitter.com/andhracloud' target='_blank'><img src='http://www.miraclesoft.com/images/newsletters/twitter.png' alt='facebook' width='26' height='auto' data-max-width='40' data-customIcon='true' ></a></td></tr></table></td></tr>
<tr><td height='10'></td></tr><tr><td align='center' style='font-size: 14px; line-height: 20px; font-family: calibri; color:#666666;'>&copy; 2016 Miracle Software Systems<br></td></tr></table></td></tr></table></body></html>

"); //Put your body of the message you can place html code here
        
	//$mail->AddAttachment("images/asif18-logo.png"); //Attach a file here if any or comment this line, 
	$send = $mail->Send(); //Send the mails
	if($send){
		//echo '<center><h3 style="color:#009933;">Mail sent successfully</h3></center>';
                
                return "Mail sent successfully";
	}
	else{
		//echo '<center><h3 style="color:#FF3300;">Mail error: </h3></center>'.$mail->ErrorInfo;
            throw new Exception($mail->ErrorInfo);
	}
}
 
 function sendConfRegistraintsAcknowledgement($fname,$lname,$email){
       
        $mail	= new PHPMailer; // call the class 
	$mail->IsSMTP(); 
	$mail->Host = SMTP_HOST; //Hostname of the mail server
	$mail->Port = SMTP_PORT; //Port of the SMTP like to be 25, 80, 465 or 587
	$mail->SMTPAuth = true; //Whether to use SMTP authentication
        $mail->SMTPSecure = SMTP_SECURE;
	$mail->Username = SMTP_UNAME; //Username for SMTP authentication any valid email created in your domain
	$mail->Password = SMTP_PWORD; //Password for SMTP authentication
	$mail->AddReplyTo("mssapp@miraclesoft.com", "Digital Summit 2016"); //reply-to address
	$mail->SetFrom("mssapp@miraclesoft.com", "Digital Summit 2016"); //From address of the mail
	// put your while loop here like below,
	$mail->Subject = "Digital Summit 2016 Registration Successfull"; //Subject od your mail
       // $mail->AddBCC("vkandregula@miraclesoft.com", "Venkat Ram Prasad Kandregula"); 
	//$mail->AddAddress("skola2@miraclesoft.com", "Santosh Kola"); //To address who will receive this email
       // $mail->AddAddress(CONTACT_US, "info"); //To address who will receive this email
	  //$myArray = explode(';', DIGITAL_SUMMIT_REGISTRAINTS);
      //  for ($i = 0; $i < count($myArray); ++$i) {
          //   $innerArray = explode(',', $myArray[$i]);
        $mail->AddAddress($email, $fname);
       // }
	//$mail->MsgHTML("<b>Hi, your first SMTP mail has been received. Great Job!.. <br/><br/>by <a href='http://www.asif18.com/7/php/send-mails-using-smtp-in-php-by-gmail-server-or-own-domain-server/'>Asif18</a></b>"); //Put your body of the message you can place html code here
        $mail->MsgHTML("<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<meta http-equiv='X-UA-Compatible' content='IE=edge' />
<style type='text/css'>
body, table, td, 
a{
-webkit-text-size-adjust: 100%; 
-ms-text-size-adjust: 100%;}
table,td{
mso-table-lspace: 0pt; 
mso-table-rspace: 0pt;
}
img{
-ms-interpolation-mode: bicubic;
}
img{
border: 0; 
height: auto; 
line-height: 100%; 
outline: none; 
text-decoration: none;
}
table{
border-collapse: collapse !important;
}
body{
height: 100% !important; 
margin: 0 !important; 
padding: 0 !important; 
width: 100% !important;
}
a[x-apple-data-detectors] {
color: inherit !important;
text-decoration: none !important;
font-size: inherit !important;font-family: inherit !important;
font-weight: inherit !important;
line-height: inherit !important;
}
@media screen and (max-width: 525px) {
 .wrapper {width: 100% !important;max-width: 100% !important;
 }
 .logo img {
 margin: 0 auto !important;
 } 
 .mobile-hide {d
 isplay: none !important;
 } 
 .img-max {
 max-width: 100% !important;
 width: 100% !important; 
 height: auto !important;
 }
 .responsive-table {
 width: 100% !important;
 }
 .padding {
 padding: 10px 5% 15px 5% !important;
 }
 .padding-meta {
 padding: 30px 5% 0px 5% !important;
 text-align: center;
 }
 .padding-copy {
 padding: 10px 5% 10px 5% !important;
 text-align: center;
 }
 .no-padding {
 padding: 0 !important;
 }
 .section-padding {
 padding: 50px 15px 50px 15px !important;
 }
 .mobile-button-container {
 margin: 0 auto;
 width: 100% !important;
 }
 .mobile-button {
 padding: 15px !important;
 border: 0 !important;font-size: 16px !important;
 display: block !important;
 }
 }
</style></head>
<body style='margin: 0 !important; padding: 0 !important;'><table border='0' cellpadding='0' cellspacing='0' width='100%'>
<tr><td bgcolor='#ffffff' align='center'>
<table border='0' cellpadding='0' cellspacing='0' width='100%' style='max-width: 500px;' class='wrapper'>
<tr><td align='center' valign='top' style='padding: 15px 0;' class='logo'>
<a href='http://www.miraclesoft.com/conf' target='_blank'><img alt='Logo' src='http://www.miraclesoft.com/digitalsummit/images/apcloud-Logo-v1.png' width='165' height='auto' style='display: block; font-family: Helvetica, Arial, sans-serif; color: #ffffff; font-size: 16px;' border='0'></a></td></tr></table></td></tr>
<tr><td bgcolor='#ffffff' align='center' style='padding: 5px;'><table border='0' cellpadding='0' cellspacing='0' width='100%' style='max-width: 500px;' class='responsive-table'>
<tr><td><table width='100%' border='0' cellspacing='0' cellpadding='0'><tr><td align='center' style='font-size: 26px; font-family: calibri; color: #2368a0; padding-top: 10px;' class='padding-copy'><b>Digital Summit 2016 Registration Successfull</b></td></tr></table></td></tr></table></td></tr>
<tr><td bgcolor='#ffffff' align='center' style='padding: 15px;' class='padding'>
<table border='0' cellpadding='0' cellspacing='0' width='100%' style='max-width: 500px;' class='responsive-table'>
<tr><td><table width='100%' border='0' cellspacing='0' cellpadding='0'>
<tr><td align='left' style='padding: 5px 0 5px 0; font-size: 14px; line-height: 25px; font-family: calibri; color: #232527;' class='padding-copy'><b>Hello $fname.$lname,</b>
<br> Thank you for registering with us for The Digital Summit, 2016.<br>
Please do reach out to the following help desk number for any assistance - 0891-6696644<br>
We will be waiting to meet you @ the event </td></tr>

							  
							  
							  <tr></td>
<tr><td align='justify' style='padding: 5px 0 5px 0; border-bottom: 1px dashed #2368a0; font-size: 14px; line-height: 25px; font-family: calibri; color: #232527;' class='padding-copy'></td></tr></tr></table></td></tr>
<tr><td><table width='100%' border='0' cellspacing='0' cellpadding='0'><tr><td align='left' style='padding: 5px 0 5px 0; font-size: 14px; line-height: 22px; font-family: calibri; color: #8c8c8c; font-style: normal;' class='padding-copy'>Thanks & Regards,<br/><b>Digital Summit 2016,</b><br/><b> Miracle Software Systems, Inc. </b><br/><b>Email : corporate@miraclesoft.com </b><br/><b>Phone : 248-2331185</b><br/>
							 
							  </font></td></tr></table></td></tr>



</table></td></tr><tr><td bgcolor='#ffffff' align='center' style='padding: 15px 0px;'>
<table width='100%' border='0' cellspacing='0' cellpadding='0' align='center' style='max-width: 500px;' class='responsive-table'><tr><td width='200' align='center' style='text-align: center;'><table width='200' cellpadding='0' cellspacing='0' align='center'><tr><td width='10'><a href='https://www.facebook.com/andhracloud' target='_blank'><img src='http://www.miraclesoft.com/images/newsletters/facebook.png' alt='facebook' width='26' height='auto' data-max-width='40' data-customIcon='true' ></a></td>
<td width='10'><a href='https://plus.google.com/104381127288956493644/posts/p/pub' target='_blank'><img src='http://www.miraclesoft.com/images/newsletters/googleplus.png' alt='facebook' width='26' height='auto' data-max-width='40' data-customIcon='true' ></a></td><td width='10'><a href='https://www.linkedin.com/groups/10313125' target='_blank'><img src='http://www.miraclesoft.com/images/newsletters/linkedin.png' alt='facebook' width='26' height='auto' data-max-width='40' data-customIcon='true' ></a></td><td width='10'><a href='https://www.youtube.com/channel/UC6JwAnSWoF2eMEz6RnDWJhg' target='_blank'><img src='http://www.miraclesoft.com/images/newsletters/youtube.png' alt='facebook' width='26' height='auto' data-max-width='40' data-customIcon='true' ></a></td><td width='10'><a href='https://twitter.com/andhracloud' target='_blank'><img src='http://www.miraclesoft.com/images/newsletters/twitter.png' alt='facebook' width='26' height='auto' data-max-width='40' data-customIcon='true' ></a></td></tr></table></td></tr>
<tr><td height='10'></td></tr><tr><td align='center' style='font-size: 14px; line-height: 20px; font-family: calibri; color:#666666;'>&copy; 2016 Miracle Software Systems<br></td></tr></table></td></tr></table></body></html>

"); //Put your body of the message you can place html code here
        
	//$mail->AddAttachment("images/asif18-logo.png"); //Attach a file here if any or comment this line, 
	$send = $mail->Send(); //Send the mails
	if($send){
		//echo '<center><h3 style="color:#009933;">Mail sent successfully</h3></center>';
                
                return "Mail sent successfully";
	}
	else{
		//echo '<center><h3 style="color:#FF3300;">Mail error: </h3></center>'.$mail->ErrorInfo;
            throw new Exception($mail->ErrorInfo);
	}
}





    function sendConfContactFormDetails($name,$email,$mobileNumber,$lookingFor){
       
        $mail	= new PHPMailer; // call the class 
	$mail->IsSMTP(); 
	$mail->Host = SMTP_HOST; //Hostname of the mail server
	$mail->Port = SMTP_PORT; //Port of the SMTP like to be 25, 80, 465 or 587
	$mail->SMTPAuth = true; //Whether to use SMTP authentication
        $mail->SMTPSecure = SMTP_SECURE;
	$mail->Username = SMTP_UNAME; //Username for SMTP authentication any valid email created in your domain
	$mail->Password = SMTP_PWORD; //Password for SMTP authentication
	$mail->AddReplyTo("mssapp@miraclesoft.com", "Digital Summit 2016"); //reply-to address
	$mail->SetFrom("mssapp@miraclesoft.com", "Digital Summit 2016"); //From address of the mail
	// put your while loop here like below,
	$mail->Subject = "Digital Summit 2016"; //Subject od your mail
	//$mail->AddAddress("skola2@miraclesoft.com", "Santosh Kola"); //To address who will receive this email
       // $mail->AddAddress(CONTACT_US, "info"); //To address who will receive this email
	  $myArray = explode(';', DIGITAL_SUMMIT_JOB_APPLICANTS);
        for ($i = 0; $i < count($myArray); ++$i) {
             $innerArray = explode(',', $myArray[$i]);
        $mail->AddAddress($innerArray[0], $innerArray[1]);
        }
       // $mail->AddBCC("vkandregula@miraclesoft.com", "Venkat Ram Prasad Kandregula"); 
	//$mail->MsgHTML("<b>Hi, your first SMTP mail has been received. Great Job!.. <br/><br/>by <a href='http://www.asif18.com/7/php/send-mails-using-smtp-in-php-by-gmail-server-or-own-domain-server/'>Asif18</a></b>"); //Put your body of the message you can place html code here
        $mail->MsgHTML("<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<meta http-equiv='X-UA-Compatible' content='IE=edge' />
<style type='text/css'>
body, table, td, 
a{
-webkit-text-size-adjust: 100%; 
-ms-text-size-adjust: 100%;}
table,td{
mso-table-lspace: 0pt; 
mso-table-rspace: 0pt;
}
img{
-ms-interpolation-mode: bicubic;
}
img{
border: 0; 
height: auto; 
line-height: 100%; 
outline: none; 
text-decoration: none;
}
table{
border-collapse: collapse !important;
}
body{
height: 100% !important; 
margin: 0 !important; 
padding: 0 !important; 
width: 100% !important;
}
a[x-apple-data-detectors] {
color: inherit !important;
text-decoration: none !important;
font-size: inherit !important;font-family: inherit !important;
font-weight: inherit !important;
line-height: inherit !important;
}
@media screen and (max-width: 525px) {
 .wrapper {width: 100% !important;max-width: 100% !important;
 }
 .logo img {
 margin: 0 auto !important;
 } 
 .mobile-hide {d
 isplay: none !important;
 } 
 .img-max {
 max-width: 100% !important;
 width: 100% !important; 
 height: auto !important;
 }
 .responsive-table {
 width: 100% !important;
 }
 .padding {
 padding: 10px 5% 15px 5% !important;
 }
 .padding-meta {
 padding: 30px 5% 0px 5% !important;
 text-align: center;
 }
 .padding-copy {
 padding: 10px 5% 10px 5% !important;
 text-align: center;
 }
 .no-padding {
 padding: 0 !important;
 }
 .section-padding {
 padding: 50px 15px 50px 15px !important;
 }
 .mobile-button-container {
 margin: 0 auto;
 width: 100% !important;
 }
 .mobile-button {
 padding: 15px !important;
 border: 0 !important;font-size: 16px !important;
 display: block !important;
 }
 }
</style></head>
<body style='margin: 0 !important; padding: 0 !important;'><table border='0' cellpadding='0' cellspacing='0' width='100%'>
<tr><td bgcolor='#ffffff' align='center'>
<table border='0' cellpadding='0' cellspacing='0' width='100%' style='max-width: 500px;' class='wrapper'>
<tr><td align='center' valign='top' style='padding: 15px 0;' class='logo'>
<a href='http://www.miraclesoft.com/conf' target='_blank'><img alt='Logo' src='http://www.miraclesoft.com/digitalsummit/images/apcloud-Logo-v1.png' width='165' height='auto' style='display: block; font-family: Helvetica, Arial, sans-serif; color: #ffffff; font-size: 16px;' border='0'></a></td></tr></table></td></tr>
<tr><td bgcolor='#ffffff' align='center' style='padding: 5px;'><table border='0' cellpadding='0' cellspacing='0' width='100%' style='max-width: 500px;' class='responsive-table'>
<tr><td><table width='100%' border='0' cellspacing='0' cellpadding='0'><tr><td align='center' style='font-size: 26px; font-family: calibri; color: #2368a0; padding-top: 10px;' class='padding-copy'><b>You Have Been Contacted !!</b></td></tr></table></td></tr></table></td></tr>
<tr><td bgcolor='#ffffff' align='center' style='padding: 15px;' class='padding'>
<table border='0' cellpadding='0' cellspacing='0' width='100%' style='max-width: 500px;' class='responsive-table'>
<tr><td><table width='100%' border='0' cellspacing='0' cellpadding='0'>
<tr><td align='left' style='padding: 5px 0 5px 0; font-size: 14px; line-height: 25px; font-family: calibri; color: #232527;' class='padding-copy'><b>Hello Team,</b>
<br> We have been contacted through our Digital Summit 2016. Please look into the same using the following details.</td></tr>
<tr><td style='padding: 5px 0 5px 0; font-size: 14px; line-height: 25px; font-family: calibri; color: #232527;' class='padding-copy'><b>Name:</b> $name<br/>
							  <b>Email:</b> $email<br/>
							  <b>Mobile Number:</b> $mobileNumber<br/>
							  
							 
							  <b>Looking For:</b> $lookingFor<br/>
							  
							  </td></tr>
							  
							  
							  <tr></td>
<tr><td align='justify' style='padding: 5px 0 5px 0; border-bottom: 1px dashed #2368a0; font-size: 14px; line-height: 25px; font-family: calibri; color: #232527;' class='padding-copy'></td></tr></tr></table></td></tr>
<tr><td><table width='100%' border='0' cellspacing='0' cellpadding='0'><tr><td align='left' style='padding: 5px 0 5px 0; font-size: 14px; line-height: 22px; font-family: calibri; color: #8c8c8c; font-style: normal;' class='padding-copy'>Thanks & Regards,<br/><b>Digital Summit 2016,</b><br/><b> Miracle Software Systems, Inc. </b><br/><b>Email : corporate@miraclesoft.com </b><br/><b>Phone : 248-2331185</b><br/>
							 
							  </font></td></tr></table></td></tr>


</table></td></tr><tr><td bgcolor='#ffffff' align='center' style='padding: 15px 0px;'>
<table width='100%' border='0' cellspacing='0' cellpadding='0' align='center' style='max-width: 500px;' class='responsive-table'><tr><td width='200' align='center' style='text-align: center;'><table width='200' cellpadding='0' cellspacing='0' align='center'><tr><td width='10'><a href='https://www.facebook.com/andhracloud' target='_blank'><img src='http://www.miraclesoft.com/images/newsletters/facebook.png' alt='facebook' width='26' height='auto' data-max-width='40' data-customIcon='true' ></a></td>
<td width='10'><a href='https://plus.google.com/104381127288956493644/posts/p/pub' target='_blank'><img src='http://www.miraclesoft.com/images/newsletters/googleplus.png' alt='facebook' width='26' height='auto' data-max-width='40' data-customIcon='true' ></a></td><td width='10'><a href='https://www.linkedin.com/groups/10313125' target='_blank'><img src='http://www.miraclesoft.com/images/newsletters/linkedin.png' alt='facebook' width='26' height='auto' data-max-width='40' data-customIcon='true' ></a></td><td width='10'><a href='https://www.youtube.com/channel/UC6JwAnSWoF2eMEz6RnDWJhg' target='_blank'><img src='http://www.miraclesoft.com/images/newsletters/youtube.png' alt='facebook' width='26' height='auto' data-max-width='40' data-customIcon='true' ></a></td><td width='10'><a href='https://twitter.com/andhracloud' target='_blank'><img src='http://www.miraclesoft.com/images/newsletters/twitter.png' alt='facebook' width='26' height='auto' data-max-width='40' data-customIcon='true' ></a></td></tr></table></td></tr>
<tr><td height='10'></td></tr><tr><td align='center' style='font-size: 14px; line-height: 20px; font-family: calibri; color:#666666;'>&copy; 2016 Miracle Software Systems<br></td></tr></table></td></tr></table></body></html>

"); //Put your body of the message you can place html code here
        
	//$mail->AddAttachment("images/asif18-logo.png"); //Attach a file here if any or comment this line, 
	$send = $mail->Send(); //Send the mails
	if($send){
		//echo '<center><h3 style="color:#009933;">Mail sent successfully</h3></center>';
                
                return "Mail sent successfully";
	}
	else{
		//echo '<center><h3 style="color:#FF3300;">Mail error: </h3></center>'.$mail->ErrorInfo;
            throw new Exception($mail->ErrorInfo);
	}
}



    function sendConfContactFormAcknowledgement($name,$email){
       
        $mail	= new PHPMailer; // call the class 
	$mail->IsSMTP(); 
	$mail->Host = SMTP_HOST; //Hostname of the mail server
	$mail->Port = SMTP_PORT; //Port of the SMTP like to be 25, 80, 465 or 587
	$mail->SMTPAuth = true; //Whether to use SMTP authentication
        $mail->SMTPSecure = SMTP_SECURE;
	$mail->Username = SMTP_UNAME; //Username for SMTP authentication any valid email created in your domain
	$mail->Password = SMTP_PWORD; //Password for SMTP authentication
	$mail->AddReplyTo("mssapp@miraclesoft.com", "Digital Summit 2016"); //reply-to address
	$mail->SetFrom("mssapp@miraclesoft.com", "Digital Summit 2016"); //From address of the mail
	// put your while loop here like below,
	$mail->Subject = "Digital Summit 2016"; //Subject od your mail
	//$mail->AddAddress("skola2@miraclesoft.com", "Santosh Kola"); //To address who will receive this email
       // $mail->AddAddress(CONTACT_US, "info"); //To address who will receive this email
	 // $myArray = explode(';', DIGITAL_SUMMIT_CONTACTUS);
     //   for ($i = 0; $i < count($myArray); ++$i) {
          //   $innerArray = explode(',', $myArray[$i]);
        $mail->AddAddress($email, $name);
      //  $mail->AddBCC("vkandregula@miraclesoft.com", "Venkat Ram Prasad Kandregula"); 
       // }
	//$mail->MsgHTML("<b>Hi, your first SMTP mail has been received. Great Job!.. <br/><br/>by <a href='http://www.asif18.com/7/php/send-mails-using-smtp-in-php-by-gmail-server-or-own-domain-server/'>Asif18</a></b>"); //Put your body of the message you can place html code here
        $mail->MsgHTML("<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<meta http-equiv='X-UA-Compatible' content='IE=edge' />
<style type='text/css'>
body, table, td, 
a{
-webkit-text-size-adjust: 100%; 
-ms-text-size-adjust: 100%;}
table,td{
mso-table-lspace: 0pt; 
mso-table-rspace: 0pt;
}
img{
-ms-interpolation-mode: bicubic;
}
img{
border: 0; 
height: auto; 
line-height: 100%; 
outline: none; 
text-decoration: none;
}
table{
border-collapse: collapse !important;
}
body{
height: 100% !important; 
margin: 0 !important; 
padding: 0 !important; 
width: 100% !important;
}
a[x-apple-data-detectors] {
color: inherit !important;
text-decoration: none !important;
font-size: inherit !important;font-family: inherit !important;
font-weight: inherit !important;
line-height: inherit !important;
}
@media screen and (max-width: 525px) {
 .wrapper {width: 100% !important;max-width: 100% !important;
 }
 .logo img {
 margin: 0 auto !important;
 } 
 .mobile-hide {d
 isplay: none !important;
 } 
 .img-max {
 max-width: 100% !important;
 width: 100% !important; 
 height: auto !important;
 }
 .responsive-table {
 width: 100% !important;
 }
 .padding {
 padding: 10px 5% 15px 5% !important;
 }
 .padding-meta {
 padding: 30px 5% 0px 5% !important;
 text-align: center;
 }
 .padding-copy {
 padding: 10px 5% 10px 5% !important;
 text-align: center;
 }
 .no-padding {
 padding: 0 !important;
 }
 .section-padding {
 padding: 50px 15px 50px 15px !important;
 }
 .mobile-button-container {
 margin: 0 auto;
 width: 100% !important;
 }
 .mobile-button {
 padding: 15px !important;
 border: 0 !important;font-size: 16px !important;
 display: block !important;
 }
 }
</style></head>
<body style='margin: 0 !important; padding: 0 !important;'><table border='0' cellpadding='0' cellspacing='0' width='100%'>
<tr><td bgcolor='#ffffff' align='center'>
<table border='0' cellpadding='0' cellspacing='0' width='100%' style='max-width: 500px;' class='wrapper'>
<tr><td align='center' valign='top' style='padding: 15px 0;' class='logo'>
<a href='http://www.miraclesoft.com/conf' target='_blank'><img alt='Logo' src='http://www.miraclesoft.com/digitalsummit/images/apcloud-Logo-v1.png' width='165' height='auto' style='display: block; font-family: Helvetica, Arial, sans-serif; color: #ffffff; font-size: 16px;' border='0'></a></td></tr></table></td></tr>
<tr><td bgcolor='#ffffff' align='center' style='padding: 5px;'><table border='0' cellpadding='0' cellspacing='0' width='100%' style='max-width: 500px;' class='responsive-table'>
<tr><td><table width='100%' border='0' cellspacing='0' cellpadding='0'><tr><td align='center' style='font-size: 26px; font-family: calibri; color: #2368a0; padding-top: 10px;' class='padding-copy'><b>Thank You</b></td></tr></table></td></tr></table></td></tr>
<tr><td bgcolor='#ffffff' align='center' style='padding: 15px;' class='padding'>
<table border='0' cellpadding='0' cellspacing='0' width='100%' style='max-width: 500px;' class='responsive-table'>
<tr><td><table width='100%' border='0' cellspacing='0' cellpadding='0'>
<tr><td align='left' style='padding: 5px 0 5px 0; font-size: 14px; line-height: 25px; font-family: calibri; color: #232527;' class='padding-copy'><b>Hello $name,</b>
<br> Thank You so much for reaching out to us. One of our Team Members will call you back you soon.</td></tr>

							  
							  
							  <tr></td>
<tr><td align='justify' style='padding: 5px 0 5px 0; border-bottom: 1px dashed #2368a0; font-size: 14px; line-height: 25px; font-family: calibri; color: #232527;' class='padding-copy'></td></tr></tr></table></td></tr>
<tr><td><table width='100%' border='0' cellspacing='0' cellpadding='0'><tr><td align='left' style='padding: 5px 0 5px 0; font-size: 14px; line-height: 22px; font-family: calibri; color: #8c8c8c; font-style: normal;' class='padding-copy'>Thanks & Regards,<br/><b>Digital Summit 2016,</b><br/><b> Miracle Software Systems, Inc. </b><br/><b>Email : corporate@miraclesoft.com </b><br/><b>Phone : 248-2331185 </b><br/>
							 
							  </font></td></tr></table></td></tr>



</table></td></tr><tr><td bgcolor='#ffffff' align='center' style='padding: 15px 0px;'>
<table width='100%' border='0' cellspacing='0' cellpadding='0' align='center' style='max-width: 500px;' class='responsive-table'><tr><td width='200' align='center' style='text-align: center;'><table width='200' cellpadding='0' cellspacing='0' align='center'><tr><td width='10'><a href='https://www.facebook.com/andhracloud' target='_blank'><img src='http://www.miraclesoft.com/images/newsletters/facebook.png' alt='facebook' width='26' height='auto' data-max-width='40' data-customIcon='true' ></a></td>
<td width='10'><a href='https://plus.google.com/104381127288956493644/posts/p/pub' target='_blank'><img src='http://www.miraclesoft.com/images/newsletters/googleplus.png' alt='facebook' width='26' height='auto' data-max-width='40' data-customIcon='true' ></a></td><td width='10'><a href='https://www.linkedin.com/groups/10313125' target='_blank'><img src='http://www.miraclesoft.com/images/newsletters/linkedin.png' alt='facebook' width='26' height='auto' data-max-width='40' data-customIcon='true' ></a></td><td width='10'><a href='https://www.youtube.com/channel/UC6JwAnSWoF2eMEz6RnDWJhg' target='_blank'><img src='http://www.miraclesoft.com/images/newsletters/youtube.png' alt='facebook' width='26' height='auto' data-max-width='40' data-customIcon='true' ></a></td><td width='10'><a href='https://twitter.com/andhracloud' target='_blank'><img src='http://www.miraclesoft.com/images/newsletters/twitter.png' alt='facebook' width='26' height='auto' data-max-width='40' data-customIcon='true' ></a></td></tr></table></td></tr>
<tr><td height='10'></td></tr><tr><td align='center' style='font-size: 14px; line-height: 20px; font-family: calibri; color:#666666;'>&copy; 2016 Miracle Software Systems<br></td></tr></table></td></tr></table></body></html>

"); //Put your body of the message you can place html code here
        
	//$mail->AddAttachment("images/asif18-logo.png"); //Attach a file here if any or comment this line, 
	$send = $mail->Send(); //Send the mails
	if($send){
		//echo '<center><h3 style="color:#009933;">Mail sent successfully</h3></center>';
                
                return "Mail sent successfully";
	}
	else{
		//echo '<center><h3 style="color:#FF3300;">Mail error: </h3></center>'.$mail->ErrorInfo;
            throw new Exception($mail->ErrorInfo);
	}
}


function sendConfApplicantDetails($tempFirstName, $tempLastName, $tempMiddleName, $tempEmail, $tempMobileNumber, $rootPath, $tempSkillSet, $tempComments, $randomKey, $filname, $tempApplyingFor, $tempGraduation, $tempGraduationPercentage, $tempPostGraduation, $tempPostGraduationPercentage, $tempYearsofExperience, $tempLastDrawnMonthlySalary,$consultantId) {

        $mail = new PHPMailer; // call the class 
        $mail->IsSMTP();
        $mail->Host = SMTP_HOST; //Hostname of the mail server
        $mail->Port = SMTP_PORT; //Port of the SMTP like to be 25, 80, 465 or 587
        $mail->SMTPAuth = true; //Whether to use SMTP authentication
        $mail->SMTPSecure = SMTP_SECURE;
        $mail->Username = SMTP_UNAME; //Username for SMTP authentication any valid email created in your domain
        $mail->Password = SMTP_PWORD; //Password for SMTP authentication
        $mail->AddReplyTo("mssapp@miraclesoft.com", "Digital Summit 2016"); //reply-to address
        $mail->SetFrom("mssapp@miraclesoft.com", "Digital Summit 2016"); //From address of the mail
        // $mail->AddBCC("vkandregula@miraclesoft.com", "Venkat Ram Prasad Kandregula"); 
        // $mail->AddBCC("santu0645@gmail.com", "Santosh Kola"); 
        //AddBCC
        // put your while loop here like below,
        $mail->Subject = "Digital Summit 2016 Applicant details:".$tempApplyingFor; //Subject od your mail
        //$mail->AddAddress("skola2@miraclesoft.com", "Santosh Kola"); //To address who will receive this email
        // $mail->AddAddress(CONTACT_US, "info"); //To address who will receive this email
        $myArray = explode(';', DIGITAL_SUMMIT_JOB_APPLICANTS);
        for ($i = 0; $i < count($myArray); ++$i) {
            $innerArray = explode(',', $myArray[$i]);
            $mail->AddAddress($innerArray[0], $innerArray[1]);
        }
        //$mail->MsgHTML("<b>Hi, your first SMTP mail has been received. Great Job!.. <br/><br/>by <a href='http://www.asif18.com/7/php/send-mails-using-smtp-in-php-by-gmail-server-or-own-domain-server/'>Asif18</a></b>"); //Put your body of the message you can place html code here
        $mail->MsgHTML("<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<meta http-equiv='X-UA-Compatible' content='IE=edge' />
<style type='text/css'>
body, table, td, 
a{
-webkit-text-size-adjust: 100%; 
-ms-text-size-adjust: 100%;}
table,td{
mso-table-lspace: 0pt; 
mso-table-rspace: 0pt;
}
img{
-ms-interpolation-mode: bicubic;
}
img{
border: 0; 
height: auto; 
line-height: 100%; 
outline: none; 
text-decoration: none;
}
table{
border-collapse: collapse !important;
}
body{
height: 100% !important; 
margin: 0 !important; 
padding: 0 !important; 
width: 100% !important;
}
a[x-apple-data-detectors] {
color: inherit !important;
text-decoration: none !important;
font-size: inherit !important;font-family: inherit !important;
font-weight: inherit !important;
line-height: inherit !important;
}
@media screen and (max-width: 525px) {
 .wrapper {width: 100% !important;max-width: 100% !important;
 }
 .logo img {
 margin: 0 auto !important;
 } 
 .mobile-hide {d
 isplay: none !important;
 } 
 .img-max {
 max-width: 100% !important;
 width: 100% !important; 
 height: auto !important;
 }
 .responsive-table {
 width: 100% !important;
 }
 .padding {
 padding: 10px 5% 15px 5% !important;
 }
 .padding-meta {
 padding: 30px 5% 0px 5% !important;
 text-align: center;
 }
 .padding-copy {
 padding: 10px 5% 10px 5% !important;
 text-align: center;
 }
 .no-padding {
 padding: 0 !important;
 }
 .section-padding {
 padding: 50px 15px 50px 15px !important;
 }
 .mobile-button-container {
 margin: 0 auto;
 width: 100% !important;
 }
 .mobile-button {
 padding: 15px !important;
 border: 0 !important;font-size: 16px !important;
 display: block !important;
 }
 }
</style></head>
<body style='margin: 0 !important; padding: 0 !important;'><table border='0' cellpadding='0' cellspacing='0' width='100%'>
<tr><td bgcolor='#ffffff' align='center'>
<table border='0' cellpadding='0' cellspacing='0' width='100%' style='max-width: 500px;' class='wrapper'>
<tr><td align='center' valign='top' style='padding: 15px 0;' class='logo'>
<a href='http://www.miraclesoft.com/conf' target='_blank'><img alt='Logo' src='http://www.miraclesoft.com/digitalsummit/images/apcloud-Logo-v1.png' width='165' height='auto' style='display: block; font-family: Helvetica, Arial, sans-serif; color: #ffffff; font-size: 16px;' border='0'></a></td></tr></table></td></tr>
<tr><td bgcolor='#ffffff' align='center' style='padding: 5px;'><table border='0' cellpadding='0' cellspacing='0' width='100%' style='max-width: 500px;' class='responsive-table'>
<tr><td><table width='100%' border='0' cellspacing='0' cellpadding='0'><tr><td align='center' style='font-size: 26px; font-family: calibri; color: #2368a0; padding-top: 10px;' class='padding-copy'><b>Digital Summit 2016 Job Application</b></td></tr></table></td></tr></table></td></tr>
<tr><td bgcolor='#ffffff' align='center' style='padding: 15px;' class='padding'>
<table border='0' cellpadding='0' cellspacing='0' width='100%' style='max-width: 500px;' class='responsive-table'>
<tr><td><table width='100%' border='0' cellspacing='0' cellpadding='0'>
<tr><td align='left' style='padding: 5px 0 5px 0; font-size: 14px; line-height: 25px; font-family: calibri; color: #232527;' class='padding-copy'><b>Team,</b>
<br> Following are the details of job applicant.</td></tr>
<tr><td style='padding: 5px 0 5px 0; font-size: 14px; line-height: 25px; font-family: calibri; color: #232527;' class='padding-copy'><b>Name:</b> $tempFirstName.$tempLastName<br/>
							  <b>Email:</b> $tempEmail<br/>
							  <b>Mobile Number:</b> $tempMobileNumber<br/>
							  <b>Skill Set:</b> $tempSkillSet<br/>
							  <b>Attendee type:</b> $attendeeType<br/>
							  <b>Comments:</b> $tempComments<br/>
                                                          <b>File Name:</b> $filname<br/>
                                                          <b>Applying For:</b> $tempApplyingFor<br/>
                                                          <b>Graduation:</b> $tempGraduation<br/>
                                                          <b>Graduation Percentage:</b> $tempGraduationPercentage<br/>
                                                          <b>Post Graduation:</b> $tempPostGraduation<br/>
                                                          <b>Post Graduation Percentage:</b> $tempPostGraduationPercentage<br/>
                                                          <b>Years Of Experience:</b> $tempYearsofExperience<br/>
                                                          <b>Last Drawn Monthly Salary:</b> $tempLastDrawnMonthlySalary<br/>
                                                              <table width='100%' border='0' cellspacing='0' cellpadding='0' align='center'>
                           <tr>
                            <td align='left'>
                              <table>
                                <tr>
                                  <td align='left' bgcolor='#fc3f3f' style='background:#fc3f3f; padding:10px 15px;-webkit-border-radius: 2px; -moz-border-radius: 2px; border-radius: 2px;'>
                                    <div class='contentEditableContainer contentTextEditable'>
                                      <div class='contentEditable' align='left'>
                                        <a href='" . url . "/classes/ResumeDownload.php?fileId=$consultantId&randomKey=$randomKey' class='link2' style='color:#ffffff;text-decoration:none;><font face='trebuchet ms'><b>Download Resume</b></a>
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                              </table>
                            </td>
                          </tr>
						  <tr><td height='18'></td></tr>
						  
                        </table>
							  </td></tr><tr></td>
<tr><td align='justify' style='padding: 5px 0 5px 0; border-bottom: 1px dashed #2368a0; font-size: 14px; line-height: 25px; font-family: calibri; color: #232527;' class='padding-copy'></td></tr></tr></table></td></tr>
<tr><td><table width='100%' border='0' cellspacing='0' cellpadding='0'><tr><td align='left' style='padding: 5px 0 5px 0; font-size: 14px; line-height: 22px; font-family: calibri; color: #8c8c8c; font-style: normal;' class='padding-copy'>Thanks & Regards,<br/><b>Digital Summit 2016,</b><br/><b> Miracle Software Systems, Inc. </b><br/><b>Email : corporate@miraclesoft.com </b><br/><b>Phone : 248-2331185</b><br/>
							 
							  </font></td></tr></table></td></tr>



</table></td></tr><tr><td bgcolor='#ffffff' align='center' style='padding: 15px 0px;'>
<table width='100%' border='0' cellspacing='0' cellpadding='0' align='center' style='max-width: 500px;' class='responsive-table'><tr><td width='200' align='center' style='text-align: center;'><table width='200' cellpadding='0' cellspacing='0' align='center'><tr><td width='10'><a href='https://www.facebook.com/andhracloud' target='_blank'><img src='http://www.miraclesoft.com/images/newsletters/facebook.png' alt='facebook' width='26' height='auto' data-max-width='40' data-customIcon='true' ></a></td>
<td width='10'><a href='https://plus.google.com/104381127288956493644/posts/p/pub' target='_blank'><img src='http://www.miraclesoft.com/images/newsletters/googleplus.png' alt='facebook' width='26' height='auto' data-max-width='40' data-customIcon='true' ></a></td><td width='10'><a href='https://www.linkedin.com/groups/10313125' target='_blank'><img src='http://www.miraclesoft.com/images/newsletters/linkedin.png' alt='facebook' width='26' height='auto' data-max-width='40' data-customIcon='true' ></a></td><td width='10'><a href='https://www.youtube.com/channel/UC6JwAnSWoF2eMEz6RnDWJhg' target='_blank'><img src='http://www.miraclesoft.com/images/newsletters/youtube.png' alt='facebook' width='26' height='auto' data-max-width='40' data-customIcon='true' ></a></td><td width='10'><a href='https://twitter.com/andhracloud' target='_blank'><img src='http://www.miraclesoft.com/images/newsletters/twitter.png' alt='facebook' width='26' height='auto' data-max-width='40' data-customIcon='true' ></a></td></tr></table></td></tr>
<tr><td height='10'></td></tr><tr><td align='center' style='font-size: 14px; line-height: 20px; font-family: calibri; color:#666666;'>&copy; 2016 Miracle Software Systems<br></td></tr></table></td></tr></table></body></html>

"); //Put your body of the message you can place html code here
        //$mail->AddAttachment("images/asif18-logo.png"); //Attach a file here if any or comment this line, 
        $send = $mail->Send(); //Send the mails
        if ($send) {
            //echo '<center><h3 style="color:#009933;">Mail sent successfully</h3></center>';

            return "Mail sent successfully";
        } else {
            //echo '<center><h3 style="color:#FF3300;">Mail error: </h3></center>'.$mail->ErrorInfo;
            throw new Exception($mail->ErrorInfo);
        }
    }

    function sendConfApplicantAcknowledgement($fname, $lname, $email) {

        $mail = new PHPMailer; // call the class 
        $mail->IsSMTP();
        $mail->Host = SMTP_HOST; //Hostname of the mail server
        $mail->Port = SMTP_PORT; //Port of the SMTP like to be 25, 80, 465 or 587
        $mail->SMTPAuth = true; //Whether to use SMTP authentication
        $mail->SMTPSecure = SMTP_SECURE;
        $mail->Username = SMTP_UNAME; //Username for SMTP authentication any valid email created in your domain
        $mail->Password = SMTP_PWORD; //Password for SMTP authentication
        $mail->AddReplyTo("mssapp@miraclesoft.com", "Digital Summit 2016"); //reply-to address
        $mail->SetFrom("mssapp@miraclesoft.com", "Digital Summit 2016"); //From address of the mail
        // put your while loop here like below,
        $mail->Subject = "Digital Summit 2016 Job Applcation Applied Successfully"; //Subject od your mail
       // $mail->AddBCC("vkandregula@miraclesoft.com", "Venkat Ram Prasad Kandregula");
        //$mail->AddAddress("skola2@miraclesoft.com", "Santosh Kola"); //To address who will receive this email
        // $mail->AddAddress(CONTACT_US, "info"); //To address who will receive this email
        //$myArray = explode(';', DIGITAL_SUMMIT_REGISTRAINTS);
        //  for ($i = 0; $i < count($myArray); ++$i) {
        //   $innerArray = explode(',', $myArray[$i]);
        $mail->AddAddress($email, $fname);
        // }
        //$mail->MsgHTML("<b>Hi, your first SMTP mail has been received. Great Job!.. <br/><br/>by <a href='http://www.asif18.com/7/php/send-mails-using-smtp-in-php-by-gmail-server-or-own-domain-server/'>Asif18</a></b>"); //Put your body of the message you can place html code here
        $mail->MsgHTML("<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<meta http-equiv='X-UA-Compatible' content='IE=edge' />
<style type='text/css'>
body, table, td, 
a{
-webkit-text-size-adjust: 100%; 
-ms-text-size-adjust: 100%;}
table,td{
mso-table-lspace: 0pt; 
mso-table-rspace: 0pt;
}
img{
-ms-interpolation-mode: bicubic;
}
img{
border: 0; 
height: auto; 
line-height: 100%; 
outline: none; 
text-decoration: none;
}
table{
border-collapse: collapse !important;
}
body{
height: 100% !important; 
margin: 0 !important; 
padding: 0 !important; 
width: 100% !important;
}
a[x-apple-data-detectors] {
color: inherit !important;
text-decoration: none !important;
font-size: inherit !important;font-family: inherit !important;
font-weight: inherit !important;
line-height: inherit !important;
}
@media screen and (max-width: 525px) {
 .wrapper {width: 100% !important;max-width: 100% !important;
 }
 .logo img {
 margin: 0 auto !important;
 } 
 .mobile-hide {d
 isplay: none !important;
 } 
 .img-max {
 max-width: 100% !important;
 width: 100% !important; 
 height: auto !important;
 }
 .responsive-table {
 width: 100% !important;
 }
 .padding {
 padding: 10px 5% 15px 5% !important;
 }
 .padding-meta {
 padding: 30px 5% 0px 5% !important;
 text-align: center;
 }
 .padding-copy {
 padding: 10px 5% 10px 5% !important;
 text-align: center;
 }
 .no-padding {
 padding: 0 !important;
 }
 .section-padding {
 padding: 50px 15px 50px 15px !important;
 }
 .mobile-button-container {
 margin: 0 auto;
 width: 100% !important;
 }
 .mobile-button {
 padding: 15px !important;
 border: 0 !important;font-size: 16px !important;
 display: block !important;
 }
 }
</style></head>
<body style='margin: 0 !important; padding: 0 !important;'><table border='0' cellpadding='0' cellspacing='0' width='100%'>
<tr><td bgcolor='#ffffff' align='center'>
<table border='0' cellpadding='0' cellspacing='0' width='100%' style='max-width: 500px;' class='wrapper'>
<tr><td align='center' valign='top' style='padding: 15px 0;' class='logo'>
<a href='http://www.miraclesoft.com/conf' target='_blank'><img alt='Logo' src='http://www.miraclesoft.com/digitalsummit/images/apcloud-Logo-v1.png' width='165' height='auto' style='display: block; font-family: Helvetica, Arial, sans-serif; color: #ffffff; font-size: 16px;' border='0'></a></td></tr></table></td></tr>
<tr><td bgcolor='#ffffff' align='center' style='padding: 5px;'><table border='0' cellpadding='0' cellspacing='0' width='100%' style='max-width: 500px;' class='responsive-table'>
<tr><td><table width='100%' border='0' cellspacing='0' cellpadding='0'><tr><td align='center' style='font-size: 26px; font-family: calibri; color: #2368a0; padding-top: 10px;' class='padding-copy'><b>Digital Summit 2016 applied successfully</b></td></tr></table></td></tr></table></td></tr>
<tr><td bgcolor='#ffffff' align='center' style='padding: 15px;' class='padding'>
<table border='0' cellpadding='0' cellspacing='0' width='100%' style='max-width: 500px;' class='responsive-table'>
<tr><td><table width='100%' border='0' cellspacing='0' cellpadding='0'>
<tr><td align='left' style='padding: 5px 0 5px 0; font-size: 14px; line-height: 25px; font-family: calibri; color: #232527;' class='padding-copy'><b>Hello $fname $lname,</b>
<br> Thank you for showing your intrest to participate in Digital Summit 2016. One of our Digital Summit representative will contact you shortly  </td></tr>

							  
							  
							  <tr></td>
<tr><td align='justify' style='padding: 5px 0 5px 0; border-bottom: 1px dashed #2368a0; font-size: 14px; line-height: 25px; font-family: calibri; color: #232527;' class='padding-copy'></td></tr></tr></table></td></tr>
<tr><td><table width='100%' border='0' cellspacing='0' cellpadding='0'><tr><td align='left' style='padding: 5px 0 5px 0; font-size: 14px; line-height: 22px; font-family: calibri; color: #8c8c8c; font-style: normal;' class='padding-copy'>Thanks & Regards,<br/><b>Digital Summit 2016,</b><br/><b> Miracle Software Systems, Inc. </b><br/><b>Email : corporate@miraclesoft.com </b><br/><b>Phone : 248-2331185</b><br/>
							 
							  </font></td></tr></table></td></tr>



</table></td></tr><tr><td bgcolor='#ffffff' align='center' style='padding: 15px 0px;'>
<table width='100%' border='0' cellspacing='0' cellpadding='0' align='center' style='max-width: 500px;' class='responsive-table'><tr><td width='200' align='center' style='text-align: center;'><table width='200' cellpadding='0' cellspacing='0' align='center'><tr><td width='10'><a href='https://www.facebook.com/andhracloud' target='_blank'><img src='http://www.miraclesoft.com/images/newsletters/facebook.png' alt='facebook' width='26' height='auto' data-max-width='40' data-customIcon='true' ></a></td>
<td width='10'><a href='https://plus.google.com/104381127288956493644/posts/p/pub' target='_blank'><img src='http://www.miraclesoft.com/images/newsletters/googleplus.png' alt='facebook' width='26' height='auto' data-max-width='40' data-customIcon='true' ></a></td><td width='10'><a href='https://www.linkedin.com/groups/10313125' target='_blank'><img src='http://www.miraclesoft.com/images/newsletters/linkedin.png' alt='facebook' width='26' height='auto' data-max-width='40' data-customIcon='true' ></a></td><td width='10'><a href='https://www.youtube.com/channel/UC6JwAnSWoF2eMEz6RnDWJhg' target='_blank'><img src='http://www.miraclesoft.com/images/newsletters/youtube.png' alt='facebook' width='26' height='auto' data-max-width='40' data-customIcon='true' ></a></td><td width='10'><a href='https://twitter.com/andhracloud' target='_blank'><img src='http://www.miraclesoft.com/images/newsletters/twitter.png' alt='facebook' width='26' height='auto' data-max-width='40' data-customIcon='true' ></a></td></tr></table></td></tr>
<tr><td height='10'></td></tr><tr><td align='center' style='font-size: 14px; line-height: 20px; font-family: calibri; color:#666666;'>&copy; 2016 Miracle Software Systems<br></td></tr></table></td></tr></table></body></html>

"); //Put your body of the message you can place html code here
        //$mail->AddAttachment("images/asif18-logo.png"); //Attach a file here if any or comment this line, 
        $send = $mail->Send(); //Send the mails
        if ($send) {
            //echo '<center><h3 style="color:#009933;">Mail sent successfully</h3></center>';

            return "Mail sent successfully";
        } else {
            //echo '<center><h3 style="color:#FF3300;">Mail error: </h3></center>'.$mail->ErrorInfo;
            throw new Exception($mail->ErrorInfo);
        }
    }

/*
 * Hackathon emails
 * Date : 11/10/2016
 * 
 */
  function sendConfHackathonDetails($fname, $lname, $email, $mobileNumber, $city, $collegeName, $branch, $graduationYear ,$state,$alteMobileNo,$candidateInfo,$teamCandidateName,$teamCandidateBranch,$teamCandidateYear,$teamCandidateEmailId,$teamCandidateInfo,$teamInfo,$teamCandidateName2,$teamCandidateBranch2,$teamCandidateYear2,$teamCandidateEmailId2,$teamCandidateName3,$teamCandidateBranch3,$teamCandidateYear3,$teamCandidateEmailId3){

        $mail = new PHPMailer; // call the class 
        $mail->IsSMTP();
        $mail->Host = SMTP_HOST; //Hostname of the mail server
        $mail->Port = SMTP_PORT; //Port of the SMTP like to be 25, 80, 465 or 587
        $mail->SMTPAuth = true; //Whether to use SMTP authentication
        $mail->SMTPSecure = SMTP_SECURE;
        $mail->Username = SMTP_UNAME; //Username for SMTP authentication any valid email created in your domain
        $mail->Password = SMTP_PWORD; //Password for SMTP authentication
        $mail->AddReplyTo("mssapp@miraclesoft.com", "Digital Summit 2016"); //reply-to address
        $mail->SetFrom("mssapp@miraclesoft.com", "Digital Summit 2016"); //From address of the mail
      //  $mail->AddBCC("vkandregula@miraclesoft.com", "Venkat Ram Prasad Kandregula");
        // $mail->AddBCC("santu0645@gmail.com", "Santosh Kola"); 
        //AddBCC
        // put your while loop here like below,
        $mail->Subject = "Digital Summit 2016 Hackathon Registration details"; //Subject od your mail
        //$mail->AddAddress("skola2@miraclesoft.com", "Santosh Kola"); //To address who will receive this email
        // $mail->AddAddress(CONTACT_US, "info"); //To address who will receive this email
        $myArray = explode(';', DIGITAL_SUMMIT_HACKATHON);
        for ($i = 0; $i < count($myArray); ++$i) {
            $innerArray = explode(',', $myArray[$i]);
            $mail->AddAddress($innerArray[0], $innerArray[1]);
        }
        //$mail->MsgHTML("<b>Hi, your first SMTP mail has been received. Great Job!.. <br/><br/>by <a href='http://www.asif18.com/7/php/send-mails-using-smtp-in-php-by-gmail-server-or-own-domain-server/'>Asif18</a></b>"); //Put your body of the message you can place html code here
        $mail->MsgHTML("<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<meta http-equiv='X-UA-Compatible' content='IE=edge' />
<style type='text/css'>
body, table, td, 
a{
-webkit-text-size-adjust: 100%; 
-ms-text-size-adjust: 100%;}
table,td{
mso-table-lspace: 0pt; 
mso-table-rspace: 0pt;
}
img{
-ms-interpolation-mode: bicubic;
}
img{
border: 0; 
height: auto; 
line-height: 100%; 
outline: none; 
text-decoration: none;
}
table{
border-collapse: collapse !important;
}
body{
height: 100% !important; 
margin: 0 !important; 
padding: 0 !important; 
width: 100% !important;
}
a[x-apple-data-detectors] {
color: inherit !important;
text-decoration: none !important;
font-size: inherit !important;font-family: inherit !important;
font-weight: inherit !important;
line-height: inherit !important;
}
@media screen and (max-width: 525px) {
 .wrapper {width: 100% !important;max-width: 100% !important;
 }
 .logo img {
 margin: 0 auto !important;
 } 
 .mobile-hide {d
 isplay: none !important;
 } 
 .img-max {
 max-width: 100% !important;
 width: 100% !important; 
 height: auto !important;
 }
 .responsive-table {
 width: 100% !important;
 }
 .padding {
 padding: 10px 5% 15px 5% !important;
 }
 .padding-meta {
 padding: 30px 5% 0px 5% !important;
 text-align: center;
 }
 .padding-copy {
 padding: 10px 5% 10px 5% !important;
 text-align: center;
 }
 .no-padding {
 padding: 0 !important;
 }
 .section-padding {
 padding: 50px 15px 50px 15px !important;
 }
 .mobile-button-container {
 margin: 0 auto;
 width: 100% !important;
 }
 .mobile-button {
 padding: 15px !important;
 border: 0 !important;font-size: 16px !important;
 display: block !important;
 }
 }
</style></head>
<body style='margin: 0 !important; padding: 0 !important;'><table border='0' cellpadding='0' cellspacing='0' width='100%'>
<tr><td bgcolor='#ffffff' align='center'>
<table border='0' cellpadding='0' cellspacing='0' width='100%' style='max-width: 500px;' class='wrapper'>
<tr><td align='center' valign='top' style='padding: 15px 0;' class='logo'>
<a href='http://www.miraclesoft.com/conf' target='_blank'><img alt='Logo' src='http://www.miraclesoft.com/digitalsummit/images/apcloud-Logo-v1.png' width='165' height='auto' style='display: block; font-family: Helvetica, Arial, sans-serif; color: #ffffff; font-size: 16px;' border='0'></a></td></tr></table></td></tr>
<tr><td bgcolor='#ffffff' align='center' style='padding: 5px;'><table border='0' cellpadding='0' cellspacing='0' width='100%' style='max-width: 500px;' class='responsive-table'>
<tr><td><table width='100%' border='0' cellspacing='0' cellpadding='0'><tr><td align='center' style='font-size: 26px; font-family: calibri; color: #2368a0; padding-top: 10px;' class='padding-copy'><b>Digital Summit 2016 Hackathon Registration Details</b></td></tr></table></td></tr></table></td></tr>
<tr><td bgcolor='#ffffff' align='center' style='padding: 15px;' class='padding'>
<table border='0' cellpadding='0' cellspacing='0' width='100%' style='max-width: 500px;' class='responsive-table'>
<tr><td><table width='100%' border='0' cellspacing='0' cellpadding='0'>
<tr><td align='left' style='padding: 5px 0 5px 0; font-size: 14px; line-height: 25px; font-family: calibri; color: #232527;' class='padding-copy'><b>Team,</b>
<br> Following are the details of Attendee.</td></tr>
<tr><td style='padding: 5px 0 5px 0; font-size: 14px; line-height: 25px; font-family: calibri; color: #232527;' class='padding-copy'><b>Name :</b> $fname.$lname<br/>
							  <b>Email :</b> $email<br/>
							  <b>Mobile Number :</b> $mobileNumber<br/>
							  <b>Alternative Mobile Number :</b> $alteMobileNo<br/>
							  <b>College Name :</b> $collegeName<br/>
							  <b>Branch :</b> $branch<br/>
							  <b>Graduation Year :</b> $graduationYear<br/>
							  <b>City :</b> $city<br/>
							  <b>State :</b> $state<br/>
							  <b>Tell us a bit about yourself :</b><br> $candidateInfo<br/>
                                                              <b>Team Info:</b><br/>
                
                                                              <table border='1'>
                                                               <tr><th>CandidateName</th><th>Branch</th><th>Year</th><th>Email</th></tr>
                                                               <tr><td>$teamCandidateName</td><td>$teamCandidateBranch</td><td>$teamCandidateYear</td><td>$teamCandidateEmailId</td></tr>
                                                                <tr><td>$teamCandidateName2</td><td>$teamCandidateBranch2</td><td>$teamCandidateYear2</td><td>$teamCandidateEmailId2</td></tr>
                                                                <tr><td>$teamCandidateName3</td><td>$teamCandidateBranch3</td><td>$teamCandidateYear3</td><td>$teamCandidateEmailId3</td></tr>
                                                                </table>
                                                              
							 
							  <b>What is your teams technical expertise? Explain how you rate yourself and what technologies you have worked with in the past :</b> <br>$teamCandidateInfo<br/>
							  <b>Why do you think your team can win MEANHack? Explain in detail, this will be used to determine your selection to participate :</b> <br>$teamInfo<br/>
							  </td></tr><tr></td>
<tr><td align='justify' style='padding: 5px 0 5px 0; border-bottom: 1px dashed #2368a0; font-size: 14px; line-height: 25px; font-family: calibri; color: #232527;' class='padding-copy'></td></tr></tr></table></td></tr>
<tr><td><table width='100%' border='0' cellspacing='0' cellpadding='0'><tr><td align='left' style='padding: 5px 0 5px 0; font-size: 14px; line-height: 22px; font-family: calibri; color: #8c8c8c; font-style: normal;' class='padding-copy'>Thanks & Regards,<br/><b>Digital Summit 2016,</b><br/><b> Miracle Software Systems, Inc. </b><br/><b>Email : corporate@miraclesoft.com </b><br/><b>Phone : 248-2331185</b><br/>
							 
							  </font></td></tr></table></td></tr>



</table></td></tr><tr><td bgcolor='#ffffff' align='center' style='padding: 15px 0px;'>
<table width='100%' border='0' cellspacing='0' cellpadding='0' align='center' style='max-width: 500px;' class='responsive-table'><tr><td width='200' align='center' style='text-align: center;'><table width='200' cellpadding='0' cellspacing='0' align='center'><tr><td width='10'><a href='https://www.facebook.com/andhracloud' target='_blank'><img src='http://www.miraclesoft.com/images/newsletters/facebook.png' alt='facebook' width='26' height='auto' data-max-width='40' data-customIcon='true' ></a></td>
<td width='10'><a href='https://plus.google.com/104381127288956493644/posts/p/pub' target='_blank'><img src='http://www.miraclesoft.com/images/newsletters/googleplus.png' alt='facebook' width='26' height='auto' data-max-width='40' data-customIcon='true' ></a></td><td width='10'><a href='https://www.linkedin.com/groups/10313125' target='_blank'><img src='http://www.miraclesoft.com/images/newsletters/linkedin.png' alt='facebook' width='26' height='auto' data-max-width='40' data-customIcon='true' ></a></td><td width='10'><a href='https://www.youtube.com/channel/UC6JwAnSWoF2eMEz6RnDWJhg' target='_blank'><img src='http://www.miraclesoft.com/images/newsletters/youtube.png' alt='facebook' width='26' height='auto' data-max-width='40' data-customIcon='true' ></a></td><td width='10'><a href='https://twitter.com/andhracloud' target='_blank'><img src='http://www.miraclesoft.com/images/newsletters/twitter.png' alt='facebook' width='26' height='auto' data-max-width='40' data-customIcon='true' ></a></td></tr></table></td></tr>
<tr><td height='10'></td></tr><tr><td align='center' style='font-size: 14px; line-height: 20px; font-family: calibri; color:#666666;'>&copy; 2016 Miracle Software Systems<br></td></tr></table></td></tr></table></body></html>

"); //Put your body of the message you can place html code here
        //$mail->AddAttachment("images/asif18-logo.png"); //Attach a file here if any or comment this line, 
        $send = $mail->Send(); //Send the mails
        if ($send) {
            //echo '<center><h3 style="color:#009933;">Mail sent successfully</h3></center>';

            return "Mail sent successfully";
        } else {
            //echo '<center><h3 style="color:#FF3300;">Mail error: </h3></center>'.$mail->ErrorInfo;
            throw new Exception($mail->ErrorInfo);
        }
    }

    function sendConfHackathonAcknowledgement($fname, $lname, $email) {

        $mail = new PHPMailer; // call the class 
        $mail->IsSMTP();
        $mail->Host = SMTP_HOST; //Hostname of the mail server
        $mail->Port = SMTP_PORT; //Port of the SMTP like to be 25, 80, 465 or 587
        $mail->SMTPAuth = true; //Whether to use SMTP authentication
        $mail->SMTPSecure = SMTP_SECURE;
        $mail->Username = SMTP_UNAME; //Username for SMTP authentication any valid email created in your domain
        $mail->Password = SMTP_PWORD; //Password for SMTP authentication
        $mail->AddReplyTo("mssapp@miraclesoft.com", "Digital Summit 2016"); //reply-to address
        $mail->SetFrom("mssapp@miraclesoft.com", "Digital Summit 2016"); //From address of the mail
        // put your while loop here like below,
        $mail->Subject = "Digital Summit 2016 Hackathon Registration Successfull"; //Subject od your mail
       // $mail->AddBCC("vkandregula@miraclesoft.com", "Venkat Ram Prasad Kandregula");
        //$mail->AddAddress("skola2@miraclesoft.com", "Santosh Kola"); //To address who will receive this email
        // $mail->AddAddress(CONTACT_US, "info"); //To address who will receive this email
        //$myArray = explode(';', DIGITAL_SUMMIT_REGISTRAINTS);
        //  for ($i = 0; $i < count($myArray); ++$i) {
        //   $innerArray = explode(',', $myArray[$i]);
        $mail->AddAddress($email, $fname);
        // }
        //$mail->MsgHTML("<b>Hi, your first SMTP mail has been received. Great Job!.. <br/><br/>by <a href='http://www.asif18.com/7/php/send-mails-using-smtp-in-php-by-gmail-server-or-own-domain-server/'>Asif18</a></b>"); //Put your body of the message you can place html code here
        $mail->MsgHTML("<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<meta http-equiv='X-UA-Compatible' content='IE=edge' />
<style type='text/css'>
body, table, td, 
a{
-webkit-text-size-adjust: 100%; 
-ms-text-size-adjust: 100%;}
table,td{
mso-table-lspace: 0pt; 
mso-table-rspace: 0pt;
}
img{
-ms-interpolation-mode: bicubic;
}
img{
border: 0; 
height: auto; 
line-height: 100%; 
outline: none; 
text-decoration: none;
}
table{
border-collapse: collapse !important;
}
body{
height: 100% !important; 
margin: 0 !important; 
padding: 0 !important; 
width: 100% !important;
}
a[x-apple-data-detectors] {
color: inherit !important;
text-decoration: none !important;
font-size: inherit !important;font-family: inherit !important;
font-weight: inherit !important;
line-height: inherit !important;
}
@media screen and (max-width: 525px) {
 .wrapper {width: 100% !important;max-width: 100% !important;
 }
 .logo img {
 margin: 0 auto !important;
 } 
 .mobile-hide {d
 isplay: none !important;
 } 
 .img-max {
 max-width: 100% !important;
 width: 100% !important; 
 height: auto !important;
 }
 .responsive-table {
 width: 100% !important;
 }
 .padding {
 padding: 10px 5% 15px 5% !important;
 }
 .padding-meta {
 padding: 30px 5% 0px 5% !important;
 text-align: center;
 }
 .padding-copy {
 padding: 10px 5% 10px 5% !important;
 text-align: center;
 }
 .no-padding {
 padding: 0 !important;
 }
 .section-padding {
 padding: 50px 15px 50px 15px !important;
 }
 .mobile-button-container {
 margin: 0 auto;
 width: 100% !important;
 }
 .mobile-button {
 padding: 15px !important;
 border: 0 !important;font-size: 16px !important;
 display: block !important;
 }
 }
</style></head>
<body style='margin: 0 !important; padding: 0 !important;'><table border='0' cellpadding='0' cellspacing='0' width='100%'>
<tr><td bgcolor='#ffffff' align='center'>
<table border='0' cellpadding='0' cellspacing='0' width='100%' style='max-width: 500px;' class='wrapper'>
<tr><td align='center' valign='top' style='padding: 15px 0;' class='logo'>
<a href='http://www.miraclesoft.com/conf' target='_blank'><img alt='Logo' src='http://www.miraclesoft.com/digitalsummit/images/apcloud-Logo-v1.png' width='165' height='auto' style='display: block; font-family: Helvetica, Arial, sans-serif; color: #ffffff; font-size: 16px;' border='0'></a></td></tr></table></td></tr>
<tr><td bgcolor='#ffffff' align='center' style='padding: 5px;'><table border='0' cellpadding='0' cellspacing='0' width='100%' style='max-width: 500px;' class='responsive-table'>
<tr><td><table width='100%' border='0' cellspacing='0' cellpadding='0'><tr><td align='center' style='font-size: 26px; font-family: calibri; color: #2368a0; padding-top: 10px;' class='padding-copy'><b>Digital Summit 2016 Hackathon Registration Successfull</b></td></tr></table></td></tr></table></td></tr>
<tr><td bgcolor='#ffffff' align='center' style='padding: 15px;' class='padding'>
<table border='0' cellpadding='0' cellspacing='0' width='100%' style='max-width: 500px;' class='responsive-table'>
<tr><td><table width='100%' border='0' cellspacing='0' cellpadding='0'>
<tr><td align='left' style='padding: 5px 0 5px 0; font-size: 14px; line-height: 25px; font-family: calibri; color: #232527;' class='padding-copy'><b>Hello $fname $lname,</b>
<br> Thank you for showing your intrest to participate in Digital Summit 2016. One of our Digital Summit representative will contact you shortly  </td></tr>

							  
							  
							  <tr></td>
<tr><td align='justify' style='padding: 5px 0 5px 0; border-bottom: 1px dashed #2368a0; font-size: 14px; line-height: 25px; font-family: calibri; color: #232527;' class='padding-copy'></td></tr></tr></table></td></tr>
<tr><td><table width='100%' border='0' cellspacing='0' cellpadding='0'><tr><td align='left' style='padding: 5px 0 5px 0; font-size: 14px; line-height: 22px; font-family: calibri; color: #8c8c8c; font-style: normal;' class='padding-copy'>Thanks & Regards,<br/><b>Digital Summit 2016,</b><br/><b> Miracle Software Systems, Inc. </b><br/><b>Email : corporate@miraclesoft.com </b><br/><b>Phone : 248-2331185</b><br/>
							 
							  </font></td></tr></table></td></tr>



</table></td></tr><tr><td bgcolor='#ffffff' align='center' style='padding: 15px 0px;'>
<table width='100%' border='0' cellspacing='0' cellpadding='0' align='center' style='max-width: 500px;' class='responsive-table'><tr><td width='200' align='center' style='text-align: center;'><table width='200' cellpadding='0' cellspacing='0' align='center'><tr><td width='10'><a href='https://www.facebook.com/andhracloud' target='_blank'><img src='http://www.miraclesoft.com/images/newsletters/facebook.png' alt='facebook' width='26' height='auto' data-max-width='40' data-customIcon='true' ></a></td>
<td width='10'><a href='https://plus.google.com/104381127288956493644/posts/p/pub' target='_blank'><img src='http://www.miraclesoft.com/images/newsletters/googleplus.png' alt='facebook' width='26' height='auto' data-max-width='40' data-customIcon='true' ></a></td><td width='10'><a href='https://www.linkedin.com/groups/10313125' target='_blank'><img src='http://www.miraclesoft.com/images/newsletters/linkedin.png' alt='facebook' width='26' height='auto' data-max-width='40' data-customIcon='true' ></a></td><td width='10'><a href='https://www.youtube.com/channel/UC6JwAnSWoF2eMEz6RnDWJhg' target='_blank'><img src='http://www.miraclesoft.com/images/newsletters/youtube.png' alt='facebook' width='26' height='auto' data-max-width='40' data-customIcon='true' ></a></td><td width='10'><a href='https://twitter.com/andhracloud' target='_blank'><img src='http://www.miraclesoft.com/images/newsletters/twitter.png' alt='facebook' width='26' height='auto' data-max-width='40' data-customIcon='true' ></a></td></tr></table></td></tr>
<tr><td height='10'></td></tr><tr><td align='center' style='font-size: 14px; line-height: 20px; font-family: calibri; color:#666666;'>&copy; 2016 Miracle Software Systems<br></td></tr></table></td></tr></table></body></html>

"); //Put your body of the message you can place html code here
        //$mail->AddAttachment("images/asif18-logo.png"); //Attach a file here if any or comment this line, 
        $send = $mail->Send(); //Send the mails
        if ($send) {
            //echo '<center><h3 style="color:#009933;">Mail sent successfully</h3></center>';

            return "Mail sent successfully";
        } else {
            //echo '<center><h3 style="color:#FF3300;">Mail error: </h3></center>'.$mail->ErrorInfo;
            throw new Exception($mail->ErrorInfo);
        }
    }
    
    
    /*Method Cultural details mail to Miracle Internal team
     * Date : 11/11/2016
     * Author : Santosh Kola
     * 
     */
    
    
    function sendConfCulturalDetails($tempCompetitionType, $tempCollegeName,$tempLeaderName,$tempLeaderEmail,$tempLeaderPhoneNumber,$tempTeamSize,$tempTeamMemberNames,$tempComments,$tempAuditionLink){

        $mail = new PHPMailer; // call the class 
        $mail->IsSMTP();
        $mail->Host = SMTP_HOST; //Hostname of the mail server
        $mail->Port = SMTP_PORT; //Port of the SMTP like to be 25, 80, 465 or 587
        $mail->SMTPAuth = true; //Whether to use SMTP authentication
        $mail->SMTPSecure = SMTP_SECURE;
        $mail->Username = SMTP_UNAME; //Username for SMTP authentication any valid email created in your domain
        $mail->Password = SMTP_PWORD; //Password for SMTP authentication
        $mail->AddReplyTo("mssapp@miraclesoft.com", "Digital Summit 2016"); //reply-to address
        $mail->SetFrom("mssapp@miraclesoft.com", "Digital Summit 2016"); //From address of the mail
      //  $mail->AddBCC("vkandregula@miraclesoft.com", "Venkat Ram Prasad Kandregula");
        // $mail->AddBCC("santu0645@gmail.com", "Santosh Kola"); 
        //AddBCC
        // put your while loop here like below,
        $mail->Subject = "Digital Summit 2016 Cultural Registration details"; //Subject od your mail
        //$mail->AddAddress("skola2@miraclesoft.com", "Santosh Kola"); //To address who will receive this email
        // $mail->AddAddress(CONTACT_US, "info"); //To address who will receive this email
        $myArray = explode(';', DIGITAL_SUMMIT_CULTURAL);
        for ($i = 0; $i < count($myArray); ++$i) {
            $innerArray = explode(',', $myArray[$i]);
            $mail->AddAddress($innerArray[0], $innerArray[1]);
        }
        //$mail->MsgHTML("<b>Hi, your first SMTP mail has been received. Great Job!.. <br/><br/>by <a href='http://www.asif18.com/7/php/send-mails-using-smtp-in-php-by-gmail-server-or-own-domain-server/'>Asif18</a></b>"); //Put your body of the message you can place html code here
        $mail->MsgHTML("<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<meta http-equiv='X-UA-Compatible' content='IE=edge' />
<style type='text/css'>
body, table, td, 
a{
-webkit-text-size-adjust: 100%; 
-ms-text-size-adjust: 100%;}
table,td{
mso-table-lspace: 0pt; 
mso-table-rspace: 0pt;
}
img{
-ms-interpolation-mode: bicubic;
}
img{
border: 0; 
height: auto; 
line-height: 100%; 
outline: none; 
text-decoration: none;
}
table{
border-collapse: collapse !important;
}
body{
height: 100% !important; 
margin: 0 !important; 
padding: 0 !important; 
width: 100% !important;
}
a[x-apple-data-detectors] {
color: inherit !important;
text-decoration: none !important;
font-size: inherit !important;font-family: inherit !important;
font-weight: inherit !important;
line-height: inherit !important;
}
@media screen and (max-width: 525px) {
 .wrapper {width: 100% !important;max-width: 100% !important;
 }
 .logo img {
 margin: 0 auto !important;
 } 
 .mobile-hide {d
 isplay: none !important;
 } 
 .img-max {
 max-width: 100% !important;
 width: 100% !important; 
 height: auto !important;
 }
 .responsive-table {
 width: 100% !important;
 }
 .padding {
 padding: 10px 5% 15px 5% !important;
 }
 .padding-meta {
 padding: 30px 5% 0px 5% !important;
 text-align: center;
 }
 .padding-copy {
 padding: 10px 5% 10px 5% !important;
 text-align: center;
 }
 .no-padding {
 padding: 0 !important;
 }
 .section-padding {
 padding: 50px 15px 50px 15px !important;
 }
 .mobile-button-container {
 margin: 0 auto;
 width: 100% !important;
 }
 .mobile-button {
 padding: 15px !important;
 border: 0 !important;font-size: 16px !important;
 display: block !important;
 }
 }
</style></head>
<body style='margin: 0 !important; padding: 0 !important;'><table border='0' cellpadding='0' cellspacing='0' width='100%'>
<tr><td bgcolor='#ffffff' align='center'>
<table border='0' cellpadding='0' cellspacing='0' width='100%' style='max-width: 500px;' class='wrapper'>
<tr><td align='center' valign='top' style='padding: 15px 0;' class='logo'>
<a href='http://www.miraclesoft.com/conf' target='_blank'><img alt='Logo' src='http://www.miraclesoft.com/digitalsummit/images/apcloud-Logo-v1.png' width='165' height='auto' style='display: block; font-family: Helvetica, Arial, sans-serif; color: #ffffff; font-size: 16px;' border='0'></a></td></tr></table></td></tr>
<tr><td bgcolor='#ffffff' align='center' style='padding: 5px;'><table border='0' cellpadding='0' cellspacing='0' width='100%' style='max-width: 500px;' class='responsive-table'>
<tr><td><table width='100%' border='0' cellspacing='0' cellpadding='0'><tr><td align='center' style='font-size: 26px; font-family: calibri; color: #2368a0; padding-top: 10px;' class='padding-copy'><b>Digital Summit 2016 Cultural Competition Registration Details</b></td></tr></table></td></tr></table></td></tr>
<tr><td bgcolor='#ffffff' align='center' style='padding: 15px;' class='padding'>
<table border='0' cellpadding='0' cellspacing='0' width='100%' style='max-width: 500px;' class='responsive-table'>
<tr><td><table width='100%' border='0' cellspacing='0' cellpadding='0'>
<tr><td align='left' style='padding: 5px 0 5px 0; font-size: 14px; line-height: 25px; font-family: calibri; color: #232527;' class='padding-copy'><b>Team,</b>
<br> Following are the details of cultural competition participation.</td></tr>
                
<tr><td style='padding: 5px 0 5px 0; font-size: 14px; line-height: 25px; font-family: calibri; color: #232527;' class='padding-copy'><b>Competition:</b> $tempCompetitionType<br/>
							  <b>Name of College / Company:</b> $tempCollegeName<br/>
							  <b>Leader Name:</b> $tempLeaderName<br/>
							  <b>Leader Email:</b> $tempLeaderEmail<br/>
							  <b>Leader Phone No:</b> $tempLeaderPhoneNumber<br/>
							  <b>Team Size:</b> $tempTeamSize<br/>
                                                          <b>Audition Link(Optional):</b> $tempAuditionLink<br/>
							  <b>Team Member Names:</b> $tempTeamMemberNames<br/>
							  <b>Comments(Optional):</b> $tempComments<br/>
                
                                                            
                
							  </td></tr><tr></td>
<tr><td align='justify' style='padding: 5px 0 5px 0; border-bottom: 1px dashed #2368a0; font-size: 14px; line-height: 25px; font-family: calibri; color: #232527;' class='padding-copy'></td></tr></tr></table></td></tr>
<tr><td><table width='100%' border='0' cellspacing='0' cellpadding='0'><tr><td align='left' style='padding: 5px 0 5px 0; font-size: 14px; line-height: 22px; font-family: calibri; color: #8c8c8c; font-style: normal;' class='padding-copy'>Thanks & Regards,<br/><b>Digital Summit 2016,</b><br/><b> Miracle Software Systems, Inc. </b><br/><b>Email : corporate@miraclesoft.com </b><br/><b>Phone : 248-2331185</b><br/>
							 
							  </font></td></tr></table></td></tr>



</table></td></tr><tr><td bgcolor='#ffffff' align='center' style='padding: 15px 0px;'>
<table width='100%' border='0' cellspacing='0' cellpadding='0' align='center' style='max-width: 500px;' class='responsive-table'><tr><td width='200' align='center' style='text-align: center;'><table width='200' cellpadding='0' cellspacing='0' align='center'><tr><td width='10'><a href='https://www.facebook.com/andhracloud' target='_blank'><img src='http://www.miraclesoft.com/images/newsletters/facebook.png' alt='facebook' width='26' height='auto' data-max-width='40' data-customIcon='true' ></a></td>
<td width='10'><a href='https://plus.google.com/104381127288956493644/posts/p/pub' target='_blank'><img src='http://www.miraclesoft.com/images/newsletters/googleplus.png' alt='facebook' width='26' height='auto' data-max-width='40' data-customIcon='true' ></a></td><td width='10'><a href='https://www.linkedin.com/groups/10313125' target='_blank'><img src='http://www.miraclesoft.com/images/newsletters/linkedin.png' alt='facebook' width='26' height='auto' data-max-width='40' data-customIcon='true' ></a></td><td width='10'><a href='https://www.youtube.com/channel/UC6JwAnSWoF2eMEz6RnDWJhg' target='_blank'><img src='http://www.miraclesoft.com/images/newsletters/youtube.png' alt='facebook' width='26' height='auto' data-max-width='40' data-customIcon='true' ></a></td><td width='10'><a href='https://twitter.com/andhracloud' target='_blank'><img src='http://www.miraclesoft.com/images/newsletters/twitter.png' alt='facebook' width='26' height='auto' data-max-width='40' data-customIcon='true' ></a></td></tr></table></td></tr>
<tr><td height='10'></td></tr><tr><td align='center' style='font-size: 14px; line-height: 20px; font-family: calibri; color:#666666;'>&copy; 2016 Miracle Software Systems<br></td></tr></table></td></tr></table></body></html>

"); //Put your body of the message you can place html code here
        //$mail->AddAttachment("images/asif18-logo.png"); //Attach a file here if any or comment this line, 
        $send = $mail->Send(); //Send the mails
        if ($send) {
            //echo '<center><h3 style="color:#009933;">Mail sent successfully</h3></center>';

            return "Mail sent successfully";
        } else {
            //echo '<center><h3 style="color:#FF3300;">Mail error: </h3></center>'.$mail->ErrorInfo;
            throw new Exception($mail->ErrorInfo);
        }
    }
    
    
    
    function sendConfCulturalAcknowledgement($tempLeaderName, $tempLeaderEmail) {

        $mail = new PHPMailer; // call the class 
        $mail->IsSMTP();
        $mail->Host = SMTP_HOST; //Hostname of the mail server
        $mail->Port = SMTP_PORT; //Port of the SMTP like to be 25, 80, 465 or 587
        $mail->SMTPAuth = true; //Whether to use SMTP authentication
        $mail->SMTPSecure = SMTP_SECURE;
        $mail->Username = SMTP_UNAME; //Username for SMTP authentication any valid email created in your domain
        $mail->Password = SMTP_PWORD; //Password for SMTP authentication
        $mail->AddReplyTo("mssapp@miraclesoft.com", "Digital Summit 2016"); //reply-to address
        $mail->SetFrom("mssapp@miraclesoft.com", "Digital Summit 2016"); //From address of the mail
        // put your while loop here like below,
        $mail->Subject = "Digital Summit 2016 Cultural Registration Successfull"; //Subject od your mail
       // $mail->AddBCC("vkandregula@miraclesoft.com", "Venkat Ram Prasad Kandregula");
        //$mail->AddAddress("skola2@miraclesoft.com", "Santosh Kola"); //To address who will receive this email
        // $mail->AddAddress(CONTACT_US, "info"); //To address who will receive this email
        //$myArray = explode(';', DIGITAL_SUMMIT_REGISTRAINTS);
        //  for ($i = 0; $i < count($myArray); ++$i) {
        //   $innerArray = explode(',', $myArray[$i]);
        $mail->AddAddress($tempLeaderEmail, $tempLeaderName);
        // }
        //$mail->MsgHTML("<b>Hi, your first SMTP mail has been received. Great Job!.. <br/><br/>by <a href='http://www.asif18.com/7/php/send-mails-using-smtp-in-php-by-gmail-server-or-own-domain-server/'>Asif18</a></b>"); //Put your body of the message you can place html code here
        $mail->MsgHTML("<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<meta http-equiv='X-UA-Compatible' content='IE=edge' />
<style type='text/css'>
body, table, td, 
a{
-webkit-text-size-adjust: 100%; 
-ms-text-size-adjust: 100%;}
table,td{
mso-table-lspace: 0pt; 
mso-table-rspace: 0pt;
}
img{
-ms-interpolation-mode: bicubic;
}
img{
border: 0; 
height: auto; 
line-height: 100%; 
outline: none; 
text-decoration: none;
}
table{
border-collapse: collapse !important;
}
body{
height: 100% !important; 
margin: 0 !important; 
padding: 0 !important; 
width: 100% !important;
}
a[x-apple-data-detectors] {
color: inherit !important;
text-decoration: none !important;
font-size: inherit !important;font-family: inherit !important;
font-weight: inherit !important;
line-height: inherit !important;
}
@media screen and (max-width: 525px) {
 .wrapper {width: 100% !important;max-width: 100% !important;
 }
 .logo img {
 margin: 0 auto !important;
 } 
 .mobile-hide {d
 isplay: none !important;
 } 
 .img-max {
 max-width: 100% !important;
 width: 100% !important; 
 height: auto !important;
 }
 .responsive-table {
 width: 100% !important;
 }
 .padding {
 padding: 10px 5% 15px 5% !important;
 }
 .padding-meta {
 padding: 30px 5% 0px 5% !important;
 text-align: center;
 }
 .padding-copy {
 padding: 10px 5% 10px 5% !important;
 text-align: center;
 }
 .no-padding {
 padding: 0 !important;
 }
 .section-padding {
 padding: 50px 15px 50px 15px !important;
 }
 .mobile-button-container {
 margin: 0 auto;
 width: 100% !important;
 }
 .mobile-button {
 padding: 15px !important;
 border: 0 !important;font-size: 16px !important;
 display: block !important;
 }
 }
</style></head>
<body style='margin: 0 !important; padding: 0 !important;'><table border='0' cellpadding='0' cellspacing='0' width='100%'>
<tr><td bgcolor='#ffffff' align='center'>
<table border='0' cellpadding='0' cellspacing='0' width='100%' style='max-width: 500px;' class='wrapper'>
<tr><td align='center' valign='top' style='padding: 15px 0;' class='logo'>
<a href='http://www.miraclesoft.com/conf' target='_blank'><img alt='Logo' src='http://www.miraclesoft.com/digitalsummit/images/apcloud-Logo-v1.png' width='165' height='auto' style='display: block; font-family: Helvetica, Arial, sans-serif; color: #ffffff; font-size: 16px;' border='0'></a></td></tr></table></td></tr>
<tr><td bgcolor='#ffffff' align='center' style='padding: 5px;'><table border='0' cellpadding='0' cellspacing='0' width='100%' style='max-width: 500px;' class='responsive-table'>
<tr><td><table width='100%' border='0' cellspacing='0' cellpadding='0'><tr><td align='center' style='font-size: 26px; font-family: calibri; color: #2368a0; padding-top: 10px;' class='padding-copy'><b>Digital Summit 2016 cultural competition registration successfull</b></td></tr></table></td></tr></table></td></tr>
<tr><td bgcolor='#ffffff' align='center' style='padding: 15px;' class='padding'>
<table border='0' cellpadding='0' cellspacing='0' width='100%' style='max-width: 500px;' class='responsive-table'>
<tr><td><table width='100%' border='0' cellspacing='0' cellpadding='0'>
<tr><td align='left' style='padding: 5px 0 5px 0; font-size: 14px; line-height: 25px; font-family: calibri; color: #232527;' class='padding-copy'><b>Hello $tempLeaderName,</b>
<br> Thank you for showing your interest to participate in Digital Summit 2016 cultural competition. One of our Digital Summit representative will contact you shortly.  </td></tr>

							  
							  
							  <tr></td>
<tr><td align='justify' style='padding: 5px 0 5px 0; border-bottom: 1px dashed #2368a0; font-size: 14px; line-height: 25px; font-family: calibri; color: #232527;' class='padding-copy'></td></tr></tr></table></td></tr>
<tr><td><table width='100%' border='0' cellspacing='0' cellpadding='0'><tr><td align='left' style='padding: 5px 0 5px 0; font-size: 14px; line-height: 22px; font-family: calibri; color: #8c8c8c; font-style: normal;' class='padding-copy'>Thanks & Regards,<br/><b>Digital Summit 2016,</b><br/><b> Miracle Software Systems, Inc. </b><br/><b>Email : corporate@miraclesoft.com </b><br/><b>Phone : 248-2331185</b><br/>
							 
							  </font></td></tr></table></td></tr>



</table></td></tr><tr><td bgcolor='#ffffff' align='center' style='padding: 15px 0px;'>
<table width='100%' border='0' cellspacing='0' cellpadding='0' align='center' style='max-width: 500px;' class='responsive-table'><tr><td width='200' align='center' style='text-align: center;'><table width='200' cellpadding='0' cellspacing='0' align='center'><tr><td width='10'><a href='https://www.facebook.com/andhracloud' target='_blank'><img src='http://www.miraclesoft.com/images/newsletters/facebook.png' alt='facebook' width='26' height='auto' data-max-width='40' data-customIcon='true' ></a></td>
<td width='10'><a href='https://plus.google.com/104381127288956493644/posts/p/pub' target='_blank'><img src='http://www.miraclesoft.com/images/newsletters/googleplus.png' alt='facebook' width='26' height='auto' data-max-width='40' data-customIcon='true' ></a></td><td width='10'><a href='https://www.linkedin.com/groups/10313125' target='_blank'><img src='http://www.miraclesoft.com/images/newsletters/linkedin.png' alt='facebook' width='26' height='auto' data-max-width='40' data-customIcon='true' ></a></td><td width='10'><a href='https://www.youtube.com/channel/UC6JwAnSWoF2eMEz6RnDWJhg' target='_blank'><img src='http://www.miraclesoft.com/images/newsletters/youtube.png' alt='facebook' width='26' height='auto' data-max-width='40' data-customIcon='true' ></a></td><td width='10'><a href='https://twitter.com/andhracloud' target='_blank'><img src='http://www.miraclesoft.com/images/newsletters/twitter.png' alt='facebook' width='26' height='auto' data-max-width='40' data-customIcon='true' ></a></td></tr></table></td></tr>
<tr><td height='10'></td></tr><tr><td align='center' style='font-size: 14px; line-height: 20px; font-family: calibri; color:#666666;'>&copy; 2016 Miracle Software Systems<br></td></tr></table></td></tr></table></body></html>

"); //Put your body of the message you can place html code here
        //$mail->AddAttachment("images/asif18-logo.png"); //Attach a file here if any or comment this line, 
        $send = $mail->Send(); //Send the mails
        if ($send) {
            //echo '<center><h3 style="color:#009933;">Mail sent successfully</h3></center>';

            return "Mail sent successfully";
        } else {
            //echo '<center><h3 style="color:#FF3300;">Mail error: </h3></center>'.$mail->ErrorInfo;
            throw new Exception($mail->ErrorInfo);
        }
    }
}
?>
