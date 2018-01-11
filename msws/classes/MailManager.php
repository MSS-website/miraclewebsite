<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include '../config/MailConfig.php'; // include the library file
include "class.phpmailer.php"; // include the class name
/**
 * Description of MailManager
 *
 * @author miracle
 */
class MailManager {
	//put your code here
	
	/**
	 * contact form mail manager
	 */
	
	function sendContactForm($fname,$lname,$email,$organization,$designation,$phone,$city,$country,$description,$rzip,$rstate){
		
		$mail	= new PHPMailer; // call the class
		$mail->IsSMTP();
		$mail->Host = SMTP_HOST; //Hostname of the mail server
		$mail->Port = SMTP_PORT; //Port of the SMTP like to be 25, 80, 465 or 587
		$mail->SMTPAuth = true; //Whether to use SMTP authentication
		$mail->SMTPSecure = SMTP_SECURE;
		$mail->Username = SMTP_UNAME; //Username for SMTP authentication any valid email created in your domain
		$mail->Password = SMTP_PWORD; //Password for SMTP authentication
		$mail->AddReplyTo($email, $fname); //reply-to address
		$mail->SetFrom("hubbleapp@miraclesoft.com", "Cas Team"); //From address of the mail
		// put your while loop here like below,
		$mail->Subject = "You Have Been Contacted !!"; //Subject od your mail
		//$mail->AddAddress("skola2@miraclesoft.com", "Santosh Kola"); //To address who will receive this email
		// $mail->AddAddress(CONTACT_US, "info"); //To address who will receive this email
		$myArray = explode(';', CONTACT_US);
		for ($i = 0; $i < count($myArray); ++$i) {
			$innerArray = explode(',', $myArray[$i]);
			$mail->AddAddress($innerArray[0], $innerArray[1]);
		}
		//$mail->MsgHTML("<b>Hi, your first SMTP mail has been received. Great Job!.. <br/><br/>by <a href='http://www.asif18.com/7/php/send-mails-using-smtp-in-php-by-gmail-server-or-own-domain-server/'>Asif18</a></b>"); //Put your body of the message you can place html code here
		$mail->MsgHTML("<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
				<html xmlns='http://www.w3.org/1999/xhtml'>
				<head>
				<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
				<title>Contact Form</title>
				<style type='text/css'>
				
				
				body {
				padding-top: 0 !important;
				padding-bottom: 0 !important;
				padding-top: 0 !important;
				padding-bottom: 0 !important;
				margin:0 !important;
				width: 100% !important;
				-webkit-text-size-adjust: 100% !important;
				-ms-text-size-adjust: 100% !important;
				-webkit-font-smoothing: antialiased !important;
	}
				.tableContent img {
				border: 0 !important;
				display: block !important;
				outline: none !important;
	}
				a{
				color:#382F2E;
	}
				
				p, h1,h2,ul,ol,li,div{
				margin:0;
				padding:0;
	}
				
				h1,h2{
				font-weight: normal;
				background:transparent !important;
				border:none !important;
	}
				
				.contentEditable h2.big,.contentEditable h1.big{
				font-size: 26px !important;
	}
				
				.contentEditable h2.bigger,.contentEditable h1.bigger{
				font-size: 37px !important;
	}
				
				td,table{
				vertical-align: top;
	}
				td.middle{
				vertical-align: middle;
	}
				
				a.link1{
				font-size:13px;
				color:#27A1E5;
				line-height: 24px;
				text-decoration:none;
	}
				a{
				text-decoration: none;
	}
				
				.link2{
				color:#fc3f3f;
				border-top:0px solid #fc3f3f;
				border-bottom:0px solid #fc3f3f;
				border-left:10px solid #fc3f3f;
				border-right:10px solid #fc3f3f;
				border-radius:1px;
				-moz-border-radius:5px;
				-webkit-border-radius:5px;
				background:#fc3f3f;
	}
				
				.link3{
				color:#555555;
				border:1px solid #cccccc;
				padding:10px 18px;
				border-radius:3px;
				-moz-border-radius:3px;
				-webkit-border-radius:3px;
				background:#ffffff;
	}
				
				.link4{
				color:#27A1E5;
				line-height: 24px;
	}
				
				h2,h1{
				line-height: 20px;
	}
				p{
				font-size: 14px;
				line-height: 21px;
				color:#AAAAAA;
	}
				
				.contentEditable li{
				
	}
				
				.appart p{
				
	}
				.bgItem{
				background:#ffffff;
	}
				.bgBody{
				background: #000000;
	}
				
				img {
				outline:none;
				text-decoration:none;
				-ms-interpolation-mode: bicubic;
				width: auto;
				max-width: 100%;
				clear: both;
				display: block;
				float: none;
	}
				
				
				
				</style>
				
				
				<script type='colorScheme' class='swatch active'>
				{
				'name':'Default',
				'bgBody':'ffffff',
				'link':'27A1E5',
				'color':'AAAAAA',
				'bgItem':'ffffff',
				'title':'444444'
	}
				</script>
				
				
				</head>
				<body paddingwidth='0' paddingheight='0' bgcolor='#d1d3d4'  style='padding-top: 0; padding-bottom: 0; padding-top: 0; padding-bottom: 0; background-repeat: repeat; width: 100% !important; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased;' offset='0' toppadding='0' leftpadding='0'>
				<table width='100%' border='0' cellspacing='0' cellpadding='0' class='tableContent bgBody' align='center'  style='font-family:Helvetica, sans-serif;'>
				
				
				<tr>
				<td align='center'>
				<table width='600' border='0' cellspacing='0' cellpadding='0' align='center' >
				<tr>
				<td class='bgItem' align='center'>
				<table width='600' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td class='movableContentContainer' align='center'>
				<div class='movableContent'>
				<table width='100%' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr><td style='background:#000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px' height='20'></td></tr>
				<tr>
				<td style='background:#000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px'>
				<table width='650' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td width='130'>
				<div class='contentEditableContainer contentImageEditable'>
				<div class='contentEditable'>
				<a href='http://www.miraclesoft.com/index.php' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/logo.png' alt='Logo' width='70' height='45' data-default='placeholder' data-max-width='200'></a>
				
				</div>
				</div>
				</td>
				
				<td valign='middle' style='vertical-align: middle;'>
				</td>
				
				<td valign='middle' style='vertical-align: middle;' width='150'><br/>
				<table width='300' border='0' cellpadding='0' cellspacing='0' align='right' style='text-align: right; font-size: 13px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='fullCenter'>
				<tr>
				<td height='55' valign='middle' width='100%' style='font-family: Helvetica, Arial, sans-serif; color:#000000;'>
				<span style='font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;'><a href='http://www.miraclesoft.com' target='_blank' style='text-decoration: none; color:#ffffff;'class='underline' >Company</a></span>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style='font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;'><a href='http://www.miraclesoft.com/careers/careers.php' target='_blank' style='text-decoration: none; color:#ffffff;'class='underline' >Careers</a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</td>
				</tr>
				</table>
				</td>
				</tr>
				</table>
				</td>
				</tr>
				</table>
				</div>
				
				
				<div class='movableContent'>
				<table width='580' border='0' cellspacing='0' cellpadding='0' align='center'>
				
				<tr>
				<td style='border: 5px solid #000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px'>
				<div class='movableContent'>
				<table width='650' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td style='background:#305983; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:px'>
				
				<table width='600' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr><td height='18'></td></tr>
				<tr>
				<td>
				<div class='contentEditableContainer contentTextEditable'>
				<div class='contentEditable' style='text-align: left;'>
				<h2 style='font-size: 22px;'><font color='#FFffff' face='trebuchet ms'><b>You Have Been Contacted !!</b></font></h2>
				<br>
				<p style='font-size: 20px;'><font face='calibri'><b></b>
				</p>
				</div>
				</div>
				</td>
				</tr>
				
				</table>
				
				</td>
				</tr>
				
				</table>
				</div>
				<table width='600' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr><td height='10'></td></tr>
				<tr>
				<td>
				<div class='contentEditableContainer contentTextEditable'>
				<div class='contentEditable' style='text-align: center;'>
				
				<br>
				<p style='text-align: justify; font-size: 14px;'><font color='#000000' face='trebuchet ms'><b>Hello Team,</b><br/><br/>
				We have been contacted through our corporate website. Please look into the same using the following details.<br/><br/>
				<b>Name:</b> $fname.$lname<br/>
				<b>Designation:</b> $designation<br/>
				<b>Organization:</b> $organization<br/>
				<b>City:</b> $city<br/>
				<b>State:</b> $rstate<br/>
				<b>Country:</b> $country<br/>
				<b>ZIP Code:</b> $rzip<br/>
				<b>Email:</b> $email<br/>
				<b>Work Phone:</b> $phone<br/>
				<b>Message:</b> <i>$description</i><br/>
				<br/>
				<p style='text-align: justify; font-size: 14px;'><font color='#000000' face='trebuchet ms'><b>Thanks & Regards,</b><br/>
				<b>Corporate Application Support Team,</b><br/>
				Miracle Software Systems, Inc.<br/>
				45625 Grand River Avenue, Novi, MI(USA)<br/>
				<b>Email :</b> marketing@miraclesoft.com<br/>
				<b>Phone :</b> (+1)248-412-0426
				</font></p>
				<tr><td height='10'></td></tr></font></p>
				</div>
				</div>
				</td>
				</tr>
				<tr><td height='15'></td></tr>
				
				</table>
				<table width='600' border='0' cellspacing='0' cellpadding='0' align='center'>
				
				<tr>
				<td>
				<div class='contentEditableContainer contentTextEditable'>
				<div class='contentEditable' style='text-align: center;'>
				<p style='text-align: justify; font-size: 14px;'><font color='#ff000' face='trebuchet ms'><i><b>*Note:</b> Do not reply to this email as this is an automated notification.</i>
				</font></p>
				</div>
				</div>
				</td>
				</tr>
				<tr><td height='25'></td></tr>
				
				</table>
				
				
				
				</td>
				</tr>
				</table>
				</div>
				
				
				<div class='movableContent'>
				<table width='660' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td style='background:#000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px'>
				<table width='655' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr><td colspan='3' height='20'></td></tr>
				<tr>
				<td width='90'></td>
				<td width='660'align='center' style='text-align: center;'>
				<table width='660' cellpadding='0' cellspacing='0' align='center'>
				<tr>
				<td>
				<div class='contentEditableContainer contentTextEditable'>
				<div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
				<p style='text-align: center; font-size: 14px;'><font color='#ffffff' face='trebuchet ms'>© Copyright ".date('Y')." Miracle Software Systems, Inc.<br/>
							  45625 Grand River Avenue<br/> Novi, MI - USA</p>
				
                            </div>
                          </div>
                        </td>
                      </tr>
                    </table>
                  </td>
                  <td width='90'></td>
                </tr>
              </table>
			  <table width='650' border='0' cellspacing='0' cellpadding='0' align='center'>
                <tr><td colspan='3' height='20'></td></tr>
                <tr>
                  <td width='195'></td>
                  <td width='190' align='center' style='text-align: center;'>
                    <table width='190' cellpadding='0' cellspacing='0' align='center'>
                      <tr>
                        <td width='40'>
                          <div class='contentEditableContainer contentFacebookEditable'>
                            <div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
                              <a href='https://www.facebook.com/miracle45625' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/fb.png' alt='facebook' width='32' height='32' data-max-width='40' data-customIcon='true' ></a>
                            </div>
                          </div>
                        </td>
                        <td width='10'></td>
                        <td width='40'>
                          <div class='contentEditableContainer contentTwitterEditable'>
                            <div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
                              <a href='https://twitter.com/team_mss' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/tweet.png' alt='twitter' width='32' height='32' data-max-width='40' data-customIcon='true'></a>
                            </div>
                          </div>
                        </td>
                        <td width='10'></td>
                        <td width='40'>
                          <div class='contentEditableContainer contentImageEditable'>
                            <div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
                              <a href='https://plus.google.com/+Team_MSS/posts' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/googleplus.png' alt='Pinterest' width='32' height='32' data-max-width='40'></a>
                            </div>
                          </div>
                        </td>
                        <td width='10'></td>
                        <td width='40'>
                          <div class='contentEditableContainer contentImageEditable'>
                            <div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
                              <a href='https://www.linkedin.com/company/miracle-software-systems-inc' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/linkedin.png' alt='Social media' width='32' height='32' data-max-width='40'></a>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </table>
                  </td>
                  <td width='195'></td>
                </tr>
                <tr><td colspan='3' height='40'></td></tr>
              </table>
				
                  </td>
                </tr>
              </table>
            </div>
			<div class='movableContent'>
              <table width='100%' border='0' cellspacing='0' cellpadding='0' align='center'>
                <tr><td style='background:#000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px' height='0'></td></tr>
                <tr>
				</table>
				</div>
				
				
          </td>
        </tr>
      </table>
      </td>
      </tr>
      </table>
    </td>
  </tr>
</table>
</body>
  </html>
				
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
	
	
	function sendConsultantDetails($rfirstname, $rlastname,$rmiddlename, $remail, $rphone, $rjobPosition, $rootPath,$rcountry,$filname,$consultantId,$rJobLocation,$randomKey){
		
		$mail	= new PHPMailer; // call the class
		$mail->IsSMTP();
		$mail->Host = SMTP_HOST; //Hostname of the mail server
		$mail->Port = SMTP_PORT; //Port of the SMTP like to be 25, 80, 465 or 587
		$mail->SMTPAuth = true; //Whether to use SMTP authentication
		$mail->SMTPSecure = SMTP_SECURE;
		$mail->Username = SMTP_UNAME; //Username for SMTP authentication any valid email created in your domain
		$mail->Password = SMTP_PWORD; //Password for SMTP authentication
		$mail->AddReplyTo($email, $fname); //reply-to address
		$mail->SetFrom("hubbleapp@miraclesoft.com", "Cas Team"); //From address of the mail
		// put your while loop here like below,
		$mail->Subject = "Consultant details for the position : ".$rjobPosition; //Subject od your mail
		if($rcountry == 'INDIA'){
			$mail->AddAddress(APPLYJOB_INDIA, "India Jobs");
		}else {
			$mail->AddAddress(APPLYJOB_USA, "USA Jobs");
		}
		//$mail->AddAddress("hbethireddy@miraclesoft.com", "Aditya Malla"); //To address who will receive this email
		//$mail->MsgHTML("<b>Hi, your first SMTP mail has been received. Great Job!.. <br/><br/>by <a href='http://www.asif18.com/7/php/send-mails-using-smtp-in-php-by-gmail-server-or-own-domain-server/'>Asif18</a></b>"); //Put your body of the message you can place html code here
		$mail->MsgHTML("<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
				<html xmlns='http://www.w3.org/1999/xhtml'>
				<head>
				<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
				<title>Job Application</title>
				<style type='text/css'>
				
				
				body {
				padding-top: 0 !important;
				padding-bottom: 0 !important;
				padding-top: 0 !important;
				padding-bottom: 0 !important;
				margin:0 !important;
				width: 100% !important;
				-webkit-text-size-adjust: 100% !important;
				-ms-text-size-adjust: 100% !important;
				-webkit-font-smoothing: antialiased !important;
	}
				.tableContent img {
				border: 0 !important;
				display: block !important;
				outline: none !important;
	}
				a{
				color:#382F2E;
	}
				
				p, h1,h2,ul,ol,li,div{
				margin:0;
				padding:0;
	}
				
				h1,h2{
				font-weight: normal;
				background:transparent !important;
				border:none !important;
	}
				
				.contentEditable h2.big,.contentEditable h1.big{
				font-size: 26px !important;
	}
				
				.contentEditable h2.bigger,.contentEditable h1.bigger{
				font-size: 37px !important;
	}
				
				td,table{
				vertical-align: top;
	}
				td.middle{
				vertical-align: middle;
	}
				
				a.link1{
				font-size:13px;
				color:#27A1E5;
				line-height: 24px;
				text-decoration:none;
	}
				a{
				text-decoration: none;
	}
				
				.link2{
				color:#fc3f3f;
				border-top:0px solid #fc3f3f;
				border-bottom:0px solid #fc3f3f;
				border-left:10px solid #fc3f3f;
				border-right:10px solid #fc3f3f;
				border-radius:1px;
				-moz-border-radius:5px;
				-webkit-border-radius:5px;
				background:#fc3f3f;
	}
				
				.link3{
				color:#555555;
				border:1px solid #cccccc;
				padding:10px 18px;
				border-radius:3px;
				-moz-border-radius:3px;
				-webkit-border-radius:3px;
				background:#ffffff;
	}
				
				.link4{
				color:#27A1E5;
				line-height: 24px;
	}
				
				h2,h1{
				line-height: 20px;
	}
				p{
				font-size: 14px;
				line-height: 21px;
				color:#AAAAAA;
	}
				
				.contentEditable li{
				
	}
				
				.appart p{
				
	}
				.bgItem{
				background:#ffffff;
	}
				.bgBody{
				background: #000000;
	}
				
				img {
				outline:none;
				text-decoration:none;
				-ms-interpolation-mode: bicubic;
				width: auto;
				max-width: 100%;
				clear: both;
				display: block;
				float: none;
	}
				
				
				
				</style>
				
				
				<script type='colorScheme' class='swatch active'>
				{
				'name':'Default',
				'bgBody':'ffffff',
				'link':'27A1E5',
				'color':'AAAAAA',
				'bgItem':'ffffff',
				'title':'444444'
	}
				</script>
				
				
				</head>
				<body paddingwidth='0' paddingheight='0' bgcolor='#d1d3d4'  style='padding-top: 0; padding-bottom: 0; padding-top: 0; padding-bottom: 0; background-repeat: repeat; width: 100% !important; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased;' offset='0' toppadding='0' leftpadding='0'>
				<table width='100%' border='0' cellspacing='0' cellpadding='0' class='tableContent bgBody' align='center'  style='font-family:Helvetica, sans-serif;'>
				
				
				<tr>
				<td align='center'>
				<table width='600' border='0' cellspacing='0' cellpadding='0' align='center' >
				<tr>
				<td class='bgItem' align='center'>
				<table width='600' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td class='movableContentContainer' align='center'>
				<div class='movableContent'>
				<table width='100%' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr><td style='background:#000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px' height='30'></td></tr>
				<tr>
				<td style='background:#000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px'>
				<table width='650' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td width='130'>
				<div class='contentEditableContainer contentImageEditable'>
				<div class='contentEditable'>
				<a href='http://www.miraclesoft.com/index.php' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/logo.png' alt='Logo' width='70' height='45' data-default='placeholder' data-max-width='200'></a>
				
				</div>
				</div>
				</td>
				
				<td valign='middle' style='vertical-align: middle;'>
				</td>
				
				<td valign='middle' style='vertical-align: middle;' width='150'><br/>
				<table width='300' border='0' cellpadding='0' cellspacing='0' align='right' style='text-align: right; font-size: 13px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='fullCenter'>
				<tr>
				<td height='55' valign='middle' width='100%' style='font-family: Helvetica, Arial, sans-serif; color:#000000;'>
				<span style='font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;'><a href='http://www.miraclesoft.com' target='_blank' style='text-decoration: none; color:#ffffff;'class='underline' >Company</a></span>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style='font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;'><a href='http://www.miraclesoft.com/careers/careers.php' target='_blank' style='text-decoration: none; color:#ffffff;'class='underline' >Careers</a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</td>
				</tr>
				</table>
				</td>
				</tr>
				</table>
				</td>
				</tr>
				</table>
				</div>
				
				
				<div class='movableContent'>
				<table width='580' border='0' cellspacing='0' cellpadding='0' align='center'>
				
				<tr>
				<td style='border: 5px solid #000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px'>
				<div class='movableContent'>
				<table width='650' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td style='background:#305983; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:px'>
				
				<table width='600' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr><td height='18'></td></tr>
				<tr>
				<td>
				<div class='contentEditableContainer contentTextEditable'>
				<div class='contentEditable' style='text-align: left;'>
				<h2 style='font-size: 22px;'><font color='#FFffff' face='trebuchet ms'><b>New Job Profile</b></font></h2>
				<br>
				
				</div>
				</div>
				</td>
				</tr>
				
				</table>
				
				</td>
				</tr>
				
				</table>
				</div>
				<table width='600' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr><td height='10'></td></tr>
				<tr>
				<td>
				<div class='contentEditableContainer contentTextEditable'>
				<div class='contentEditable' style='text-align: center;'>
				
				<br>
				<p style='text-align: justify; font-size: 14px;'><font color='#000000' face='trebuchet ms'><b>Hello Team,</b>
				<br><br/>
				We have gotten a new job profile through our Corporate Careers Portal. Please check the below resume and take required action. <br/><br/>
				<b>Job Position:</b> $rjobPosition<br/>
				<b>Job Location:</b> $rJobLocation<br/>
				<b>Applicant Name:</b> $rfirstname.$rmiddlename.$rlastname<br/>
				<b>Email ID:</b> $remail<br/>
				<b>Phone:</b> $rphone<br/>
				<br>
				</font></p>
				
				<table width='605' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td align='left'>
				<table>
				<tr>
				<td align='left' bgcolor='#fc3f3f' style='background:#fc3f3f; padding:10px 15px;-webkit-border-radius: 2px; -moz-border-radius: 2px; border-radius: 2px;'>
				<div class='contentEditableContainer contentTextEditable'>
				<div class='contentEditable' align='left'>
				<a href='".DOWNLOAD_URL."/download/ResumeDownload.php?refId=$consultantId&randomKey=$randomKey' class='link2' style='color:#ffffff;'><font face='trebuchet ms'><b>Download Resume</b></a>
				</div>
				</div>
				</td>
				</tr>
				</table>
				</td>
				</tr>
				<tr><td height='18'></td></tr>
				
				</table>
				<p style='text-align: justify; font-size: 14px;'><font color='#000000' face='trebuchet ms'><b>Thanks & Regards,</b><br/>
				<b>Corporate Application Support Team,</b><br/>
				Miracle Software Systems, Inc.<br/>
				45625 Grand River Avenue, Novi, MI(USA)<br/>
				<b>Email :</b> marketing@miraclesoft.com<br/>
				<b>Phone :</b> (+1)248-412-0426
				</font></p><br/>
				<p style='text-align: justify; font-size: 14px;'><font color='#ff0000' face='trebuchet ms'><i><b>*Note:</b> Do not reply to this email as this is an automated notification.</i></font></p>
				<br>
				
				</div>
				</div>
				</td>
				</tr>
				<tr><td height='9'></td></tr>
				
				</table>
				</td>
				</tr>
				</table>
				</div>
				
				
				<div class='movableContent'>
				<table width='660' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td style='background:#000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px'>
				<table width='655' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr><td colspan='3' height='20'></td></tr>
				<tr>
				<td width='90'></td>
				<td width='660'align='center' style='text-align: center;'>
				<table width='660' cellpadding='0' cellspacing='0' align='center'>
				<tr>
				<td>
				<div class='contentEditableContainer contentTextEditable'>
				<div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
				<p style='text-align: center; font-size: 14px;'><font color='#ffffff' face='trebuchet ms'>© Copyright ".date('Y')." Miracle Software Systems, Inc.<br/>
							  45625 Grand River Avenue<br/> Novi, MI - USA</p>
				
                            </div>
                          </div>
                        </td>
                      </tr>
                    </table>
                  </td>
                  <td width='90'></td>
                </tr>
              </table>
			  <table width='650' border='0' cellspacing='0' cellpadding='0' align='center'>
                <tr><td colspan='3' height='20'></td></tr>
                <tr>
                  <td width='195'></td>
                  <td width='190' align='center' style='text-align: center;'>
                    <table width='190' cellpadding='0' cellspacing='0' align='center'>
                      <tr>
                        <td width='40'>
                          <div class='contentEditableContainer contentFacebookEditable'>
                            <div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
                              <a href='https://www.facebook.com/miracle45625' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/fb.png' alt='facebook' width='32' height='32' data-max-width='40' data-customIcon='true' ></a>
                            </div>
                          </div>
                        </td>
                        <td width='10'></td>
                        <td width='40'>
                          <div class='contentEditableContainer contentTwitterEditable'>
                            <div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
                              <a href='https://twitter.com/team_mss' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/tweet.png' alt='twitter' width='32' height='32' data-max-width='40' data-customIcon='true'></a>
                            </div>
                          </div>
                        </td>
                        <td width='10'></td>
                        <td width='40'>
                          <div class='contentEditableContainer contentImageEditable'>
                            <div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
                              <a href='https://plus.google.com/+Team_MSS/posts' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/googleplus.png' alt='Pinterest' width='32' height='32' data-max-width='40'></a>
                            </div>
                          </div>
                        </td>
                        <td width='10'></td>
                        <td width='40'>
                          <div class='contentEditableContainer contentImageEditable'>
                            <div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
                              <a href='https://www.linkedin.com/company/miracle-software-systems-inc' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/linkedin.png' alt='Social media' width='32' height='32' data-max-width='40'></a>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </table>
                  </td>
                  <td width='195'></td>
                </tr>
                <tr><td colspan='3' height='40'></td></tr>
              </table>
				
                  </td>
                </tr>
              </table>
            </div>
			<div class='movableContent'>
              <table width='100%' border='0' cellspacing='0' cellpadding='0' align='center'>
                <tr><td style='background:#000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px' height='0'></td></tr>
                <tr>
				</table>
				</div>
				
				
          </td>
        </tr>
      </table>
      </td>
      </tr>
      </table>
    </td>
  </tr>
</table>
</body>
  </html>
				
"); //Put your body of the message you can place html code here
		
		//$mail->AddAttachment($rootPath); //Attach a file here if any or comment this line,
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
	
	// Mail method for sending employee details
	function sendEmployeeVerificationDetails($rfirstname,$rlastname,$rorganization,$rdesignation,$remail,$rphone,$remployeeName,$remployeeId,$rlocation,$rempDesignation,$rdepartment,$raddExperience,$rnewCompanyName,$rremuneration,$rreasonForLeaving,$randomKey,$lastInsertId){
		
		$mail	= new PHPMailer; // call the class
		$mail->IsSMTP();
		$mail->Host = SMTP_HOST; //Hostname of the mail server
		$mail->Port = SMTP_PORT; //Port of the SMTP like to be 25, 80, 465 or 587
		$mail->SMTPAuth = true; //Whether to use SMTP authentication
		$mail->SMTPSecure = SMTP_SECURE;
		$mail->Username = SMTP_UNAME; //Username for SMTP authentication any valid email created in your domain
		$mail->Password = SMTP_PWORD; //Password for SMTP authentication
		//$mail->AddReplyTo($email, $fname); //reply-to address
		$mail->SetFrom("hubbleapp@miraclesoft.com", "Cas Team"); //From address of the mail
		// put your while loop here like below,
		$mail->Subject = $remployeeName." Profile To Be Verified !!"; //Subject od your mail
		//$mail->AddAddress("skola2@miraclesoft.com", "Santosh Kola"); //To address who will receive this email
		//  echo 'conutry11'.$rlocation;
		//if($rlocation == 'India') {
		if(strcmp($rlocation,"India")==0) {
			// echo "hii-->".EMPLOYEE_VERIFICATION_INDIA;
			//$mail->AddAddress(EMPLOYEE_VERIFICATION_INDIA, "info"); //To address who will receive this email
			
			$myArray = explode(';', EMPLOYEE_VERIFICATION_INDIA_CC);
			for ($i = 0; $i < count($myArray); ++$i) {
				$innerArray = explode(',', $myArray[$i]);
				//$mail->AddCC($innerArray[0], $innerArray[1]);
				$mail->AddAddress($innerArray[0], $innerArray[1]);
			}
			
			
		} else {
			//  echo "hii12-->".EMPLOYEE_VERIFICATION_USA;
			$mail->AddAddress(EMPLOYEE_VERIFICATION_USA, "info"); //To address who will receive this email
		}
		$mail->AddBCC("vkandregula@miraclesoft.com", "Venkat Ram Prasad Kandregula");
		//EMPLOYEE_VERIFICATION
		//$mail->MsgHTML("<b>Hi, your first SMTP mail has been received. Great Job!.. <br/><br/>by <a href='http://www.asif18.com/7/php/send-mails-using-smtp-in-php-by-gmail-server-or-own-domain-server/'>Asif18</a></b>"); //Put your body of the message you can place html code here
		$mail->MsgHTML("<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
				<html xmlns='http://www.w3.org/1999/xhtml'>
				<head>
				<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
				<title>Employee Verification</title>
				<style type='text/css'>
				
				
				body {
				padding-top: 0 !important;
				padding-bottom: 0 !important;
				padding-top: 0 !important;
				padding-bottom: 0 !important;
				margin:0 !important;
				width: 100% !important;
				-webkit-text-size-adjust: 100% !important;
				-ms-text-size-adjust: 100% !important;
				-webkit-font-smoothing: antialiased !important;
	}
				.tableContent img {
				border: 0 !important;
				display: block !important;
				outline: none !important;
	}
				a{
				color:#382F2E;
	}
				
				p, h1,h2,ul,ol,li,div{
				margin:0;
				padding:0;
	}
				
				h1,h2{
				font-weight: normal;
				background:transparent !important;
				border:none !important;
	}
				
				.contentEditable h2.big,.contentEditable h1.big{
				font-size: 26px !important;
	}
				
				.contentEditable h2.bigger,.contentEditable h1.bigger{
				font-size: 37px !important;
	}
				
				td,table{
				vertical-align: top;
	}
				td.middle{
				vertical-align: middle;
	}
				
				a.link1{
				font-size:13px;
				color:#27A1E5;
				line-height: 24px;
				text-decoration:none;
	}
				a{
				text-decoration: none;
	}
				
				.link2{
				color:#fc3f3f;
				border-top:0px solid #fc3f3f;
				border-bottom:0px solid #fc3f3f;
				border-left:10px solid #fc3f3f;
				border-right:10px solid #fc3f3f;
				border-radius:1px;
				-moz-border-radius:5px;
				-webkit-border-radius:5px;
				background:#fc3f3f;
	}
				
				.link3{
				color:#555555;
				border:1px solid #cccccc;
				padding:10px 18px;
				border-radius:3px;
				-moz-border-radius:3px;
				-webkit-border-radius:3px;
				background:#ffffff;
	}
				
				.link4{
				color:#27A1E5;
				line-height: 24px;
	}
				
				h2,h1{
				line-height: 20px;
	}
				p{
				font-size: 14px;
				line-height: 21px;
				color:#AAAAAA;
	}
				
				.contentEditable li{
				
	}
				
				.appart p{
				
	}
				.bgItem{
				background:#ffffff;
	}
				.bgBody{
				background: #000000;
	}
				
				img {
				outline:none;
				text-decoration:none;
				-ms-interpolation-mode: bicubic;
				width: auto;
				max-width: 100%;
				clear: both;
				display: block;
				float: none;
	}
				
				
				
				</style>
				
				
				<script type='colorScheme' class='swatch active'>
				{
				'name':'Default',
				'bgBody':'ffffff',
				'link':'27A1E5',
				'color':'AAAAAA',
				'bgItem':'ffffff',
				'title':'444444'
	}
				</script>
				
				
				</head>
				<body paddingwidth='0' paddingheight='0' bgcolor='#d1d3d4'  style='padding-top: 0; padding-bottom: 0; padding-top: 0; padding-bottom: 0; background-repeat: repeat; width: 100% !important; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased;' offset='0' toppadding='0' leftpadding='0'>
				<table width='100%' border='0' cellspacing='0' cellpadding='0' class='tableContent bgBody' align='center'  style='font-family:Helvetica, sans-serif;'>
				
				
				<tr>
				<td align='center'>
				<table width='600' border='0' cellspacing='0' cellpadding='0' align='center' >
				<tr>
				<td class='bgItem' align='center'>
				<table width='600' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td class='movableContentContainer' align='center'>
				<div class='movableContent'>
				<table width='100%' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr><td style='background:#000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px' height='30'></td></tr>
				<tr>
				<td style='background:#000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px'>
				<table width='650' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td width='130'>
				<div class='contentEditableContainer contentImageEditable'>
				<div class='contentEditable'>
				<a href='http://www.miraclesoft.com/index.php' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/logo.png' alt='Logo' width='70' height='45' data-default='placeholder' data-max-width='200'></a>
				
				</div>
				</div>
				</td>
				
				<td valign='middle' style='vertical-align: middle;'>
				</td>
				
				<td valign='middle' style='vertical-align: middle;' width='150'><br>
				<table width='300' border='0' cellpadding='0' cellspacing='0' align='right' style='text-align: right; font-size: 13px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='fullCenter'>
				<tr>
				<td height='55' valign='middle' width='100%' style='font-family: Helvetica, Arial, sans-serif; color:#000000;'>
				<span style='font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;'><a href='http://www.miraclesoft.com' target='_blank' style='text-decoration: none; color:#ffffff;'class='underline' >Company</a></span>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style='font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;'><a href='http://www.miraclesoft.com/careers/careers.php' target='_blank' style='text-decoration: none; color:#ffffff;'class='underline' >Careers</a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</td>
				</tr>
				</table>
				</td>
				</tr>
				</table>
				</td>
				</tr>
				</table>
				</div>
				
				
				<div class='movableContent'>
				<table width='580' border='0' cellspacing='0' cellpadding='0' align='center'>
				
				<tr>
				<td style='border: 5px solid #000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px'>
				<div class='movableContent'>
				<table width='650' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td style='background:#305983; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:px'>
				
				<table width='600' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr><td height='18'></td></tr>
				<tr>
				<td>
				<div class='contentEditableContainer contentTextEditable'>
				<div class='contentEditable' style='text-align: left;'>
				<h2 style='font-size: 22px;'><font color='#FFffff' face='trebuchet ms'><b>Profile To Be Verified!</b></font></h2>
				<br>
				<p style='font-size: 20px;'><font face='calibri'><b></b>
				</p>
				</div>
				</div>
				</td>
				</tr>
				
				</table>
				
				</td>
				</tr>
				
				</table>
				</div>
				<table width='600' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr><td height='10'></td></tr>
				<tr>
				<td>
				<div class='contentEditableContainer contentTextEditable'>
				<div class='contentEditable' style='text-align: center;'>
				
				<br>
				<p style='text-align: justify; font-size: 14px;'><font color='#000000' face='trebuchet ms'><b>Hello Team</b><br><br>
				A new profile has been sent for employee verification, can you please look on to the following details to contact and verify it.
				<br><br></font></p>
				<p style='text-align: justify; font-size: 14px;'><font color='#000000' face='trebuchet ms'>
				<b> Verfication Agency/Employer Details :</b></font></p><br>
				
				<table width='100%'>
				
				<tr><td align='left'><font color='#000000' face='trebuchet ms' size='2px;'>Name :</font></td><td align='left'><b><font color='#000000' face='trebuchet ms' size='2px;'> 	$rfirstname $rlastname</font></b></td></tr>
				<tr><td align='left'><font color='#000000' face='trebuchet ms' size='2px;'>Verfication Agency/Employer  :</font></td><td align='left'><b><font color='#000000' face='trebuchet ms' size='2px;'>$rorganization</font></b></td></tr>
				<tr><td align='left'><font color='#000000' face='trebuchet ms' size='2px;'>Email :</font></td><td align='left'><b><font color='#000000' face='trebuchet ms' size='2px;'> 	$remail</font></b></td></tr>
				<tr><td align='left'><font color='#000000' face='trebuchet ms' size='2px;'>Work Phone :</font></td><td align='left'><b><font color='#000000' face='trebuchet ms' size='2px;'>$rphone</font></b></td></tr>
				<tr><th colspan='2'> <br>
				<p style='text-align: justify; font-size: 14px;'><font color='#000000' face='trebuchet ms'>  <b> Employee Details Submitted by Background Verification Agency </b></font></p><br>
				</th></tr>
				<tr><td align='left'><font color='#000000' face='trebuchet ms' size='2px;'>Employee Name :</font></td><td align='left'><b><font color='#000000' face='trebuchet ms' size='2px;'> 		$remployeeName  </font></b></td></tr>
				<tr><td align='left'><font color='#000000' face='trebuchet ms' size='2px;'>Employee ID :</font></td><td align='left'><b><font color='#000000' face='trebuchet ms' size='2px;'> 	 	$remployeeId</font></b></td></tr>
				<tr><td align='left'><font color='#000000' face='trebuchet ms' size='2px;'>Location :</font></td><td align='left'><b><font color='#000000' face='trebuchet ms' size='2px;'> 	 	$rlocation  </font></b></td></tr>
				<tr><td align='left'><font color='#000000' face='trebuchet ms' size='2px;'>Designation :</font></td><td align='left'><b><font color='#000000' face='trebuchet ms' size='2px;'> 		$rempDesignation  </font></b></td></tr>
				<tr><td align='left'><font color='#000000' face='trebuchet ms' size='2px;'>Department :</font></td><td align='left'><b><font color='#000000' face='trebuchet ms' size='2px;'>	$rdepartment</font></b></td></tr>
				<tr><td align='left'><font color='#000000' face='trebuchet ms' size='2px;'>Experience :</font></td><td align='left'><b><font color='#000000' face='trebuchet ms' size='2px;'>$raddExperience </font></b></td></tr>
				<tr><td align='left'><font color='#000000' face='trebuchet ms' size='2px;'>Current Organization Name :</font></td><td align='left'><b><font color='#000000' face='trebuchet ms' size='2px;'> $rnewCompanyName </font></b></td></tr>
				<tr><td align='left'><font color='#000000' face='trebuchet ms' size='2px;'>Remuneration(CTC):</font></td><td align='left'><b><font color='#000000' face='trebuchet ms' size='2px;'> $rremuneration</font></b></td></tr>
				<tr><td align='left'><font color='#000000' face='trebuchet ms' size='2px;'>Reason for Leaving :</font></td><td align='left'><b><font color='#000000' face='trebuchet ms' size='2px;'>$rreasonForLeaving</font></b></td></tr>
				
				
				
				</table>
				
				
				
				<br>
				
				
				<table align='center' width='100%'>
				<tr>
				<td style='text-align:center;padding: 13px;border-color: #EF4048;background-color: #EF4048;border-radius: 6px !important;overflow:hidden;font-family:'Open Sans';font-size: 15px;mso-line-height-rule:exactly;line-height:16px;font-weight:700;text-transform:normal;'>
				<span style='color:#fff'><a href='".DOWNLOAD_URL."/download/EmpVerificationDownload.php?refId=$lastInsertId&randomKey=$randomKey&typeOfFile=ExpLetter' target='_blank' style='color:black;'><font face='trebuchet ms'><b>Download<br>Experience Letter</b></a></span>
				</td><td style='text-align:center;padding: 13px;border-color: #EF4048;background-color: #EF4048;border-radius: 6px !important;overflow:hidden;font-family:'Open Sans';font-size: 15px;mso-line-height-rule:exactly;line-height:16px;font-weight:700;text-transform:normal;'>
				<span style='color:#fff'><a href='".DOWNLOAD_URL."/download/EmpVerificationDownload.php?refId=$lastInsertId&randomKey=$randomKey&typeOfFile=Resume' target='_blank' style='color:black;'><font face='trebuchet ms'><b>Download<br>Latest Resume</b></a></span>
				</td>
				<td style='text-align:center;padding: 13px;border-color: #EF4048;background-color: #EF4048;border-radius: 6px !important;overflow:hidden;font-family:'Open Sans';font-size: 15px;mso-line-height-rule:exactly;line-height:16px;font-weight:700;text-transform:normal;'>
				<span style='color:#fff'><a href='".DOWNLOAD_URL."/download/EmpVerificationDownload.php?refId=$lastInsertId&randomKey=$randomKey&typeOfFile=Loa' target='_blank' style='color:black;'><font face='trebuchet ms'><b>Download <br>LOA</b></a></span>
				</td>
				
				
				<td style='text-align:center;padding: 13px;border-color: #EF4048;background-color: #EF4048;border-radius: 6px !important;overflow:hidden;font-family:'Open Sans';font-size: 15px;mso-line-height-rule:exactly;line-height:16px;font-weight:700;text-transform:normal;'>
				<span style='color:#fff'><a href='".DOWNLOAD_URL."/download/EmpVerificationDownload.php?refId=$lastInsertId&randomKey=$randomKey&typeOfFile=PaySlip' target='_blank' style='color:black;'><font face='trebuchet ms'><b>Download <br>Latest PaySlip</b></a></span>
				</td>
				
				</tr>
				<tr align='center'>
				<td></td>
				<td  colspan='2' style='text-align:center;padding: 13px;border-color: rgb(0,165,80);background-color: rgb(0,165,80);border-radius: 6px !important;overflow:hidden;font-family:'Open Sans';font-size: 15px;mso-line-height-rule:exactly;line-height:16px;font-weight:700;text-transform:normal;'>
				<span style='color:#fff'><a href='".DOWNLOAD_URL."/contact/employee-verification-approval.php?refId=$lastInsertId&randomKey=$randomKey' target='_blank' ><b>Verify Details</b></a></span>
				</td>
				
				</tr>
				</table>
				
				
				<p style='text-align: justify; font-size: 14px;'><font color='#000000' face='trebuchet ms'><b>Thanks & Regards,</b><br>
				<b>Corporate Application Support Team,</b><br>
				Miracle Software Systems, Inc.<br>
				45625 Grand River Avenue, Novi, MI(USA)<br>
				<b>Email :</b> hubble@miraclesoft.com<br>
				<b>Phone :</b> (248)-233-1814</font></p><br>
				
				<tr><td height='10'></td></tr>
				</div>
				</div>
				</td>
				</tr>
				<tr><td height='10'></td></tr>
				
				</table>
				
				
				
				
				</td>
				</tr>
				</table>
				</div>
				
				
				<div class='movableContent'>
				<table width='660' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td style='background:#000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px'>
				<table width='655' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr><td colspan='3' height='20'></td></tr>
				<tr>
				<td width='90'></td>
				<td width='660'align='center' style='text-align: center;'>
				<table width='660' cellpadding='0' cellspacing='0' align='center'>
				<tr>
				<td>
				<div class='contentEditableContainer contentTextEditable'>
				<div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
				<p style='text-align: center; font-size: 14px;'><font color='#ffffff' face='trebuchet ms'>� Copyright ".date('Y')." Miracle Software Systems, Inc.<br>
							  45625 Grand River Avenue<br> Novi, MI - USA</p>
				
                            </div>
                          </div>
                        </td>
                      </tr>
                    </table>
                  </td>
                  <td width='90'></td>
                </tr>
              </table>
			  <table width='650' border='0' cellspacing='0' cellpadding='0' align='center'>
                <tr><td colspan='3' height='20'></td></tr>
                <tr>
                  <td width='195'></td>
                  <td width='190' align='center' style='text-align: center;'>
                    <table width='190' cellpadding='0' cellspacing='0' align='center'>
                      <tr>
                        <td width='40'>
                          <div class='contentEditableContainer contentFacebookEditable'>
                            <div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
                              <a href='https://www.facebook.com/miracle45625' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/fb.png' alt='facebook' width='32' height='32' data-max-width='40' data-customIcon='true' ></a>
                            </div>
                          </div>
                        </td>
                        <td width='10'></td>
                        <td width='40'>
                          <div class='contentEditableContainer contentTwitterEditable'>
                            <div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
                              <a href='https://twitter.com/team_mss' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/tweet.png' alt='twitter' width='32' height='32' data-max-width='40' data-customIcon='true'></a>
                            </div>
                          </div>
                        </td>
                        <td width='10'></td>
                        <td width='40'>
                          <div class='contentEditableContainer contentImageEditable'>
                            <div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
                              <a href='https://plus.google.com/+Team_MSS/posts' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/googleplus.png' alt='Pinterest' width='32' height='32' data-max-width='40'></a>
                            </div>
                          </div>
                        </td>
                        <td width='10'></td>
                        <td width='40'>
                          <div class='contentEditableContainer contentImageEditable'>
                            <div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
                              <a href='https://www.linkedin.com/company/miracle-software-systems-inc' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/linkedin.png' alt='Social media' width='32' height='32' data-max-width='40'></a>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </table>
                  </td>
                  <td width='195'></td>
                </tr>
                <tr><td colspan='3' height='40'></td></tr>
              </table>
				
                  </td>
                </tr>
              </table>
            </div>
			<div class='movableContent'>
              <table width='100%' border='0' cellspacing='0' cellpadding='0' align='center'>
                <tr><td style='background:#000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px' height='0'></td></tr>
                <tr>
				</table>
				</div>
				
				
          </td>
        </tr>
      </table>
      </td>
      </tr>
      </table>
    </td>
  </tr>
</table>
</body>
  </html>
				
				
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
	
	
	
	function sendReferalCandidateDetails($rfirstname,$rlastname,$reducationalQualification,$rrelation,$rphone,$remail,$rcurrentOrganization,$rcurrentOccupation,$rcurrentLocation,$rexperience,$rootPath,$filname,$rcreatedBy,$rJobPosition,$rpositionType,$consultantId,$randomKey){
		$currDate = date('Y-m-d');
		$mail	= new PHPMailer; // call the class
		$mail->IsSMTP();
		$mail->Host = SMTP_HOST; //Hostname of the mail server
		$mail->Port = SMTP_PORT; //Port of the SMTP like to be 25, 80, 465 or 587
		$mail->SMTPAuth = true; //Whether to use SMTP authentication
		$mail->SMTPSecure = SMTP_SECURE;
		$mail->Username = SMTP_UNAME; //Username for SMTP authentication any valid email created in your domain
		$mail->Password = SMTP_PWORD; //Password for SMTP authentication
		$mail->AddReplyTo($email, $fname); //reply-to address
		$mail->SetFrom("hubbleapp@miraclesoft.com", "Cas Team"); //From address of the mail
		// put your while loop here like below,
		$mail->Subject = "Employee Referral: ".$rJobPosition; //Subject od your mail
		//        if($rintrestedLocation == 'India'){
		//         //   echo 'toEmail-->'.REFERAL_INDIA;
		//            $mail->AddAddress(REFERAL_INDIA, "India Referal Jobs");
		//        }else {
		//             $mail->AddAddress(REFERAL_USA, "USA Referal Jobs");
		//        }
		// if($rpositionType=='Experienced'){
		// $mail->AddAddress(REFERAL_INDIA, "India Referal Jobs");
			//}else{
			//    $mail->AddAddress(EMPREF_FRESHERS_OTHERS, "Fresher Referal Jobs");
				$myArray = explode(';', EMPREF_FRESHERS_OTHERS);
				for ($i = 0; $i < count($myArray); ++$i) {
					$innerArray = explode(',', $myArray[$i]);
					$mail->AddAddress($innerArray[0], $innerArray[1]);
				}
				// }
				
				//$mail->AddAddress("hbethireddy@miraclesoft.com", "Aditya "); //To address who will receive this email
				//$mail->MsgHTML("<b>Hi, your first SMTP mail has been received. Great Job!.. <br/><br/>by <a href='http://www.asif18.com/7/php/send-mails-using-smtp-in-php-by-gmail-server-or-own-domain-server/'>Asif18</a></b>"); //Put your body of the message you can place html code here
				$mail->MsgHTML("<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
						<html xmlns='http://www.w3.org/1999/xhtml'>
						<head>
						<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
						<title>Employee Referral</title>
						
						<style type='text/css'>
						
						
						body {
						padding-top: 0 !important;
						padding-bottom: 0 !important;
						padding-top: 0 !important;
						padding-bottom: 0 !important;
						margin:0 !important;
						width: 100% !important;
						-webkit-text-size-adjust: 100% !important;
						-ms-text-size-adjust: 100% !important;
						-webkit-font-smoothing: antialiased !important;
	}
						.tableContent img {
						border: 0 !important;
						display: block !important;
						outline: none !important;
	}
						a{
						color:#382F2E;
	}
						
						p, h1,h2,ul,ol,li,div{
						margin:0;
						padding:0;
	}
						
						h1,h2{
						font-weight: normal;
						background:transparent !important;
						border:none !important;
	}
						
						.contentEditable h2.big,.contentEditable h1.big{
						font-size: 26px !important;
	}
						
						.contentEditable h2.bigger,.contentEditable h1.bigger{
						font-size: 37px !important;
	}
						
						td,table{
						vertical-align: top;
	}
						td.middle{
						vertical-align: middle;
	}
						
						a.link1{
						font-size:13px;
						color:#27A1E5;
						line-height: 24px;
						text-decoration:none;
	}
						a{
						text-decoration: none;
	}
						
						.link2{
						color:#fc3f3f;
						border-top:0px solid #fc3f3f;
						border-bottom:0px solid #fc3f3f;
						border-left:10px solid #fc3f3f;
						border-right:10px solid #fc3f3f;
						border-radius:1px;
						-moz-border-radius:5px;
						-webkit-border-radius:5px;
						background:#fc3f3f;
	}
						
						.link3{
						color:#555555;
						border:1px solid #cccccc;
						padding:10px 18px;
						border-radius:3px;
						-moz-border-radius:3px;
						-webkit-border-radius:3px;
						background:#ffffff;
	}
						
						.link4{
						color:#27A1E5;
						line-height: 24px;
	}
						
						h2,h1{
						line-height: 20px;
	}
						p{
						font-size: 14px;
						line-height: 21px;
						color:#AAAAAA;
	}
						
						.contentEditable li{
						
	}
						
						.appart p{
						
	}
						.bgItem{
						background:#ffffff;
	}
						.bgBody{
						background: #000000;
	}
						
						img {
						outline:none;
						text-decoration:none;
						-ms-interpolation-mode: bicubic;
						width: auto;
						max-width: 100%;
						clear: both;
						display: block;
						float: none;
	}
						
						
						
						</style>
						
						
						<script type='colorScheme' class='swatch active'>
						{
						'name':'Default',
						'bgBody':'ffffff',
						'link':'27A1E5',
						'color':'AAAAAA',
						'bgItem':'ffffff',
						'title':'444444'
	}
						</script>
						
						
						</head>
						<body paddingwidth='0' paddingheight='0' bgcolor='#d1d3d4'  style='padding-top: 0; padding-bottom: 0; padding-top: 0; padding-bottom: 0; background-repeat: repeat; width: 100% !important; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased;' offset='0' toppadding='0' leftpadding='0'>
						<table width='100%' border='0' cellspacing='0' cellpadding='0' class='tableContent bgBody' align='center'  style='font-family:Helvetica, sans-serif;'>
						
						
						<tr>
						<td align='center'>
						<table width='600' border='0' cellspacing='0' cellpadding='0' align='center' >
						<tr>
						<td class='bgItem' align='center'>
						<table width='600' border='0' cellspacing='0' cellpadding='0' align='center'>
						<tr>
						<td class='movableContentContainer' align='center'>
						<div class='movableContent'>
						<table width='100%' border='0' cellspacing='0' cellpadding='0' align='center'>
						<tr><td style='background:#000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px' height='30'></td></tr>
						<tr>
						<td style='background:#000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px'>
						<table width='650' border='0' cellspacing='0' cellpadding='0' align='center'>
						<tr>
						<td width='130'>
						<div class='contentEditableContainer contentImageEditable'>
						<div class='contentEditable'>
						<a href='http://www.miraclesoft.com/index.php' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/logo.png' alt='Logo' width='70' height='45' data-default='placeholder' data-max-width='200'></a>
						
						</div>
						</div>
						</td>
						
						<td valign='middle' style='vertical-align: middle;'>
						</td>
						
						<td valign='middle' style='vertical-align: middle;' width='150'><br/>
						<table width='300' border='0' cellpadding='0' cellspacing='0' align='right' style='text-align: right; font-size: 13px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='fullCenter'>
						<tr>
						<td height='55' valign='middle' width='100%' style='font-family: Helvetica, Arial, sans-serif; color:#000000;'>
						<span style='font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;'><a href='http://www.miraclesoft.com' target='_blank' style='text-decoration: none; color:#ffffff;'class='underline' >Company</a></span>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style='font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;'><a href='http://www.miraclesoft.com/careers/careers.php' target='_blank' style='text-decoration: none; color:#ffffff;'class='underline' >Careers</a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						</td>
						</tr>
						</table>
						</td>
						</tr>
						</table>
						</td>
						</tr>
						</table>
						</div>
						
						
						<div class='movableContent'>
						<table width='580' border='0' cellspacing='0' cellpadding='0' align='center'>
						
						<tr>
						<td style='border: 5px solid #000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px'>
						<div class='movableContent'>
						<table width='650' border='0' cellspacing='0' cellpadding='0' align='center'>
						<tr>
						<td style='background:#305983; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:px'>
						
						<table width='600' border='0' cellspacing='0' cellpadding='0' align='center'>
						<tr><td height='18'></td></tr>
						<tr>
						<td>
						<div class='contentEditableContainer contentTextEditable'>
						<div class='contentEditable' style='text-align: left;'>
						<h2 style='font-size: 22px;'><font color='#FFffff' face='trebuchet ms'><b>Employee Referral</b></font></h2>
						<br>
						
						</div>
						</div>
						</td>
						</tr>
						
						</table>
						
						</td>
						</tr>
						
						</table>
						</div>
						<table width='600' border='0' cellspacing='0' cellpadding='0' align='center'>
						<tr><td height='10'></td></tr>
						<tr>
						<td>
						<div class='contentEditableContainer contentTextEditable'>
						<div class='contentEditable' style='text-align: center;'>
						
						<br>
						<p style='text-align: justify; font-size: 14px;'><font color='#000000' face='trebuchet ms'><b>Hello Team,</b>
						<br><br/>
						A new profile has been referred to us by <b>$rcreatedBy</b> on <b>$currDate</b><br/><br/>
						<b>Name:</b>$rfirstname.$rlastname<br/>
						<b>Applied Position:</b>$rJobPosition<br/>
						<b>Position Type:</b>$rpositionType<br/>
						<b>Educational Qualification:</b>$reducationalQualification<br/>
						<b>Phone No.:</b>$rphone<br/>
						<b>Email ID:</b>$remail<br/>
						<b>Current Organization:</b>$rcurrentOrganization<br/>
						<b>Experience:</b>$rexperience<br/>
						<b>Current Location:</b>$rcurrentLocation<br/>
						<br>
						</font></p>
						
						<table width='605' border='0' cellspacing='0' cellpadding='0' align='center'>
						
						<tr>
						<td align='left'>
						<table>
						<tr>
						<td align='left' bgcolor='#fc3f3f' style='background:#fc3f3f; padding:10px 15px;-webkit-border-radius: 2px; -moz-border-radius: 2px; border-radius: 2px;'>
						<div class='contentEditableContainer contentTextEditable'>
						<div class='contentEditable' align='left'>
						<a href='".DOWNLOAD_URL."/download/NewReferalResumeDownload.php?refId=$consultantId&randomKey=$randomKey' target='_blank' class='link2' style='color:#ffffff;'><font face='trebuchet ms'><b>Download Resume</b></a>
						</div>
						</div>
						</td>
						</tr>
						</table>
						</td>
						</tr>
						<tr><td height='18'></td></tr>
						
						</table>
						<p style='text-align: justify; font-size: 14px;'><font color='#000000' face='trebuchet ms'><b>Thanks & Regards,</b><br/>
						<b>Corporate Application Support Team,</b><br/>
						Miracle Software Systems, Inc.<br/>
						45625 Grand River Avenue, Novi, MI(USA)<br/>
						<b>Email :</b> marketing@miraclesoft.com<br/>
						<b>Phone :</b> (+1)248-412-0426
						</font></p><br/>
						<p style='text-align: justify; font-size: 14px;'><font color='#ff0000' face='trebuchet ms'><i><b>*Note:</b> Do not reply to this email as this is an automated notification.</i></font></p>
						<br>
						
						</div>
						</div>
						</td>
						</tr>
						<tr><td height='9'></td></tr>
						
						</table>
						</td>
						</tr>
						</table>
						</div>
						
						
						<div class='movableContent'>
						<table width='660' border='0' cellspacing='0' cellpadding='0' align='center'>
						<tr>
						<td style='background:#000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px'>
						<table width='655' border='0' cellspacing='0' cellpadding='0' align='center'>
						<tr><td colspan='3' height='20'></td></tr>
						<tr>
						<td width='90'></td>
						<td width='660'align='center' style='text-align: center;'>
						<table width='660' cellpadding='0' cellspacing='0' align='center'>
						<tr>
						<td>
						<div class='contentEditableContainer contentTextEditable'>
						<div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
						<p style='text-align: center; font-size: 14px;'><font color='#ffffff' face='trebuchet ms'>© Copyright ".date('Y')." Miracle Software Systems, Inc.<br/>
							  45625 Grand River Avenue<br/> Novi, MI - USA</p>
						
                            </div>
                          </div>
                        </td>
                      </tr>
                    </table>
                  </td>
                  <td width='90'></td>
                </tr>
              </table>
			  <table width='650' border='0' cellspacing='0' cellpadding='0' align='center'>
                <tr><td colspan='3' height='20'></td></tr>
                <tr>
                  <td width='195'></td>
                  <td width='190' align='center' style='text-align: center;'>
                    <table width='190' cellpadding='0' cellspacing='0' align='center'>
                      <tr>
                        <td width='40'>
                          <div class='contentEditableContainer contentFacebookEditable'>
                            <div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
                              <a href='https://www.facebook.com/miracle45625' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/fb.png' alt='facebook' width='32' height='32' data-max-width='40' data-customIcon='true' ></a>
                            </div>
                          </div>
                        </td>
                        <td width='10'></td>
                        <td width='40'>
                          <div class='contentEditableContainer contentTwitterEditable'>
                            <div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
                              <a href='https://twitter.com/team_mss' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/tweet.png' alt='twitter' width='32' height='32' data-max-width='40' data-customIcon='true'></a>
                            </div>
                          </div>
                        </td>
                        <td width='10'></td>
                        <td width='40'>
                          <div class='contentEditableContainer contentImageEditable'>
                            <div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
                              <a href='https://plus.google.com/+Team_MSS/posts' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/googleplus.png' alt='Pinterest' width='32' height='32' data-max-width='40'></a>
                            </div>
                          </div>
                        </td>
                        <td width='10'></td>
                        <td width='40'>
                          <div class='contentEditableContainer contentImageEditable'>
                            <div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
                              <a href='https://www.linkedin.com/company/miracle-software-systems-inc' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/linkedin.png' alt='Social media' width='32' height='32' data-max-width='40'></a>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </table>
                  </td>
                  <td width='195'></td>
                </tr>
                <tr><td colspan='3' height='40'></td></tr>
              </table>
						
                  </td>
                </tr>
              </table>
            </div>
			<div class='movableContent'>
              <table width='100%' border='0' cellspacing='0' cellpadding='0' align='center'>
                <tr><td style='background:#000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px' height='0'></td></tr>
                <tr>
				</table>
				</div>
						
						
          </td>
        </tr>
      </table>
      </td>
      </tr>
      </table>
    </td>
  </tr>
</table>
</body>
  </html>
						
						
"); //Put your body of the message you can place html code here
				
				//$mail->AddAttachment($rootPath); //Attach a file here if any or comment this line,
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
	
	
	
	
	function sendWebinarRegisteredDetails($rfirstname,$rlastName,$remail,$rphone,$rorganization,$evenTitle,$rdesignation,$organizerName,$organizerEmail){
		
		$currDate = date('Y-m-d');
		
		$currTime = date('h:i:s');
		
		
		
		$mail	= new PHPMailer; // call the class
		$mail->IsSMTP();
		$mail->Host = SMTP_HOST; //Hostname of the mail server
		$mail->Port = SMTP_PORT; //Port of the SMTP like to be 25, 80, 465 or 587
		$mail->SMTPAuth = true; //Whether to use SMTP authentication
		$mail->SMTPSecure = SMTP_SECURE;
		$mail->Username = SMTP_UNAME; //Username for SMTP authentication any valid email created in your domain
		$mail->Password = SMTP_PWORD; //Password for SMTP authentication
		$mail->AddReplyTo($email, $fname); //reply-to address
		$mail->SetFrom("hubbleapp@miraclesoft.com", "Cas Team"); //From address of the mail
		// put your while loop here like below,
		$mail->Subject = $evenTitle." registered person Details"; //Subject od your mail
		
		//   echo 'toEmail-->'.REFERAL_INDIA;
		//$mail->AddAddress(WEBINAR_REGISTERED, "Webinar");
		$mail->AddAddress($organizerEmail, "Webinar");
		
		//$mail->AddAddress("hbethireddy@miraclesoft.com", "Aditya Malla"); //To address who will receive this email
		//$mail->MsgHTML("<b>Hi, your first SMTP mail has been received. Great Job!.. <br/><br/>by <a href='http://www.asif18.com/7/php/send-mails-using-smtp-in-php-by-gmail-server-or-own-domain-server/'>Asif18</a></b>"); //Put your body of the message you can place html code here
		$mail->MsgHTML("<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
				<html xmlns='http://www.w3.org/1999/xhtml'>
				<head>
				<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
				<title>Registered Contact</title>
				<style type='text/css'>
				body {
				padding-top: 0 !important;
				padding-bottom: 0 !important;
				padding-top: 0 !important;
				padding-bottom: 0 !important;
				margin:0 !important;
				width: 100% !important;
				-webkit-text-size-adjust: 100% !important;
				-ms-text-size-adjust: 100% !important;
				-webkit-font-smoothing: antialiased !important;
	}
				.tableContent img {
				border: 0 !important;
				display: block !important;
				outline: none !important;
	}
				a{
				color:#382F2E;
	}
				p, h1,h2,ul,ol,li,div{
				margin:0;
				padding:0;
	}
				h1,h2{
				font-weight: normal;
				background:transparent !important;
				border:none !important;
	}
				.contentEditable h2.big,.contentEditable h1.big{
				font-size: 26px !important;
	}
				.contentEditable h2.bigger,.contentEditable h1.bigger{
				font-size: 37px !important;
	}
				td,table{
				vertical-align: top;
	}
				td.middle{
				vertical-align: middle;
	}
				a.link1{
				font-size:13px;
				color:#27A1E5;
				line-height: 24px;
				text-decoration:none;
	}
				a{
				text-decoration: none;
	}
				.link2{
				color:#fc3f3f;
				border-top:0px solid #fc3f3f;
				border-bottom:0px solid #fc3f3f;
				border-left:10px solid #fc3f3f;
				border-right:10px solid #fc3f3f;
				border-radius:1px;
				-moz-border-radius:5px;
				-webkit-border-radius:5px;
				background:#fc3f3f;
	}
				.link3{
				color:#555555;
				border:1px solid #cccccc;
				padding:10px 18px;
				border-radius:3px;
				-moz-border-radius:3px;
				-webkit-border-radius:3px;
				background:#ffffff;
	}
				.link4{
				color:#27A1E5;
				line-height: 24px;
	}
				h2,h1{
				line-height: 20px;
	}
				p{
				font-size: 14px;
				line-height: 21px;
				color:#AAAAAA;
	}
				.contentEditable li{
	}
				.appart p{
	}
				.bgItem{
				background:#ffffff;
	}
				.bgBody{
				background: #000000;
	}
				img {
				outline:none;
				text-decoration:none;
				-ms-interpolation-mode: bicubic;
				width: auto;
				max-width: 100%;
				clear: both;
				display: block;
				float: none;
	}
				</style>
				<script type='colorScheme' class='swatch active'>
				{
				'name':'Default',
				'bgBody':'ffffff',
				'link':'27A1E5',
				'color':'AAAAAA',
				'bgItem':'ffffff',
				'title':'444444'
	}
				</script>
				</head>
				<body paddingwidth='0' paddingheight='0' bgcolor='#d1d3d4' style='padding-top: 0; padding-bottom: 0; padding-top: 0; padding-bottom: 0; background-repeat: repeat; width: 100% !important; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased;' offset='0' toppadding='0' leftpadding='0'>
				<table width='100%' border='0' cellspacing='0' cellpadding='0' class='tableContent bgBody' align='center' style='font-family:Helvetica, sans-serif;'>
				<tr>
				<td align='center'>
				<table width='600' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td class='bgItem' align='center'>
				<table width='600' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td class='movableContentContainer' align='center'>
				<div class='movableContent'>
				<table width='100%' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td style='background:#000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px' height='30'>
				</td>
				</tr>
				<tr>
				<td style='background:#000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px'>
				<table width='650' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td width='130'>
				<div class='contentEditableContainer contentImageEditable'>
				<div class='contentEditable'>
				<a href='http://www.miraclesoft.com/index.php' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/logo.png' alt='Logo' width='70' height='45' data-default='placeholder' data-max-width='200'></a>
				</div>
				</div>
				</td>
				<td valign='middle' style='vertical-align: middle;'>
				</td>
				<td valign='middle' style='vertical-align: middle;' width='150'>
				<br/>
				<table width='300' border='0' cellpadding='0' cellspacing='0' align='right' style='text-align: right; font-size: 13px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='fullCenter'>
				<tr>
				<td height='55' valign='middle' width='100%' style='font-family: Helvetica, Arial, sans-serif; color:#000000;'>
				<span style='font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;'><a href='http://www.miraclesoft.com' target='_blank' style='text-decoration: none; color:#ffffff;' class='underline'>Company</a></span>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style='font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;'><a href='http://www.miraclesoft.com/careers/careers.php' target='_blank' style='text-decoration: none; color:#ffffff;' class='underline'>Careers</a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</td>
				</tr>
				</table>
				</td>
				</tr>
				</table>
				</td>
				</tr>
				</table>
				</div>
				<div class='movableContent'>
				<table width='580' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td style='border: 5px solid #000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px'>
				<div class='movableContent'>
				<table width='650' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td style='background:#305983; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:px'>
				<table width='600' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td height='18'>
				</td>
				</tr>
				<tr>
				<td>
				<div class='contentEditableContainer contentTextEditable'>
				<div class='contentEditable' style='text-align: left;'>
				<h2 style='font-size: 22px;'><font color='#FFffff' face='trebuchet ms'><b>Registered Contact</b></font></h2>
				<br>
				</div>
				</div>
				</td>
				</tr>
				</table>
				</td>
				</tr>
				</table>
				</div>
				<table width='600' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td height='10'>
				</td>
				</tr>
				<tr>
				<td>
				<div class='contentEditableContainer contentTextEditable'>
				<div class='contentEditable' style='text-align: center;'>
				<br>
				<p style='text-align: justify; font-size: 14px;'>
				<font color='#000000' face='trebuchet ms'><b>Hello $organizerName,</b>
				<br>
				<br/>
				Following are the details of the user who registered for the <b>'$evenTitle'</b> Webinar . <br/><br/>
				<b>First Name:</b> $rfirstname<br/>
				<b>Last Name:</b> $rlastName<br/>
				<b>Email ID:</b> $remail<br/>
				<b>Organization:</b> $rorganization<br/>
				<b>Contact No.:</b> $rphone<br/>
				<b>Date:</b> $currDate<br/>
				<b>Time:</b> $currTime<br/>
				<br>
				</font>
				</p>
				<table width='605' border='0' cellspacing='0' cellpadding='0' align='center'>
				</table>
				<p style='text-align: justify; font-size: 14px;'>
				<font color='#ff0000' face='trebuchet ms'><i><b>*Note:</b> Do not reply to this email as this is an automated notification.</i></font>
				</p>
				<br>
				</div>
				</div>
				</td>
				</tr>
				<tr>
				<td height='9'>
				</td>
				</tr>
				</table>
				</td>
				</tr>
				</table>
				</div>
				<div class='movableContent'>
				<table width='660' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td style='background:#000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px'>
				<table width='655' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td colspan='3' height='20'>
				</td>
				</tr>
				<tr>
				<td width='90'>
				</td>
				<td width='660' align='center' style='text-align: center;'>
				<table width='660' cellpadding='0' cellspacing='0' align='center'>
				<tr>
				<td>
				<div class='contentEditableContainer contentTextEditable'>
				<div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
				<p style='text-align: center; font-size: 14px;'>
				<font color='#ffffff' face='trebuchet ms'>© Copyright ".date('Y')." Miracle Software Systems, Inc.<br/>
																45625 Grand River Avenue<br/> Novi, MI - USA
															</p>
														</div>
													</div>
												</td>
											</tr>
											</table>
										</td>
										<td width='90'>
										</td>
									</tr>
									</table>
									<table width='650' border='0' cellspacing='0' cellpadding='0' align='center'>
									<tr>
										<td colspan='3' height='20'>
										</td>
									</tr>
									<tr>
										<td width='195'>
										</td>
										<td width='190' align='center' style='text-align: center;'>
											<table width='190' cellpadding='0' cellspacing='0' align='center'>
											<tr>
												<td width='40'>
													<div class='contentEditableContainer contentFacebookEditable'>
														<div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
															<a href='https://www.facebook.com/miracle45625' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/fb.png' alt='facebook' width='32' height='32' data-max-width='40' data-customicon='true'></a>
														</div>
													</div>
												</td>
												<td width='10'>
												</td>
												<td width='40'>
													<div class='contentEditableContainer contentTwitterEditable'>
														<div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
															<a href='https://twitter.com/team_mss' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/tweet.png' alt='twitter' width='32' height='32' data-max-width='40' data-customicon='true'></a>
														</div>
													</div>
												</td>
												<td width='10'>
												</td>
												<td width='40'>
													<div class='contentEditableContainer contentImageEditable'>
														<div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
															<a href='https://plus.google.com/+Team_MSS/posts' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/googleplus.png' alt='Pinterest' width='32' height='32' data-max-width='40'></a>
														</div>
													</div>
												</td>
												<td width='10'>
												</td>
												<td width='40'>
													<div class='contentEditableContainer contentImageEditable'>
														<div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
															<a href='https://www.linkedin.com/company/miracle-software-systems-inc' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/linkedin.png' alt='Social media' width='32' height='32' data-max-width='40'></a>
														</div>
													</div>
												</td>
											</tr>
											</table>
										</td>
										<td width='195'>
										</td>
									</tr>
									<tr>
										<td colspan='3' height='40'>
										</td>
									</tr>
									</table>
								</td>
							</tr>
							</table>
						</div>
						<div class='movableContent'>
							<table width='100%' border='0' cellspacing='0' cellpadding='0' align='center'>
							<tr>
								<td style='background:#000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px' height='0'>
								</td>
							</tr>
							<tr>
								</table>
							</div>
						</td>
					</tr>
					</table>
				</td>
			</tr>
			</table>
		</td>
	</tr>
	</table>
	</body>
	</html>
				
"); //Put your body of the message you can place html code here
		
		//$mail->AddAttachment($rootPath); //Attach a file here if any or comment this line,
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
	
	
	
	
	
	
	
	function sendWebinarReminder($webinarTitle,$webinarStartTime,$webinarStartDate,$webinarDate,$webinarTime,$webinarDescription,$spekarsList,$remail,$rfirstname,$rlastName,$vcsPath,$vcsFileName){
		
		$mail	= new PHPMailer; // call the class
		$mail->IsSMTP();
		$mail->Host = SMTP_HOST; //Hostname of the mail server
		$mail->Port = SMTP_PORT; //Port of the SMTP like to be 25, 80, 465 or 587
		$mail->SMTPAuth = true; //Whether to use SMTP authentication
		$mail->SMTPSecure = SMTP_SECURE;
		$mail->Username = SMTP_UNAME; //Username for SMTP authentication any valid email created in your domain
		$mail->Password = SMTP_PWORD; //Password for SMTP authentication
		$mail->AddReplyTo($email, $fname); //reply-to address
		$mail->SetFrom("hubbleapp@miraclesoft.com", "Cas Team"); //From address of the mail
		// put your while loop here like below,
		$mail->Subject = " Webinar Reminder"; //Subject od your mail
		
		//   echo 'toEmail-->'.REFERAL_INDIA;
		// $mail->AddAddress(WEBINAR_REGISTERED, "Webinar");
		$mail->AddAddress($remail, "Webinar");
		
		//$mail->AddAddress("hbethireddy@miraclesoft.com", "Aditya Malla"); //To address who will receive this email
		//$mail->MsgHTML("<b>Hi, your first SMTP mail has been received. Great Job!.. <br/><br/>by <a href='http://www.asif18.com/7/php/send-mails-using-smtp-in-php-by-gmail-server-or-own-domain-server/'>Asif18</a></b>"); //Put your body of the message you can place html code here
		$mail->MsgHTML("<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
				<html xmlns='http://www.w3.org/1999/xhtml'>
				<head>
				<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
				<title>Reminder</title>
				<style type='text/css'>
				
				
				body {
				padding-top: 0 !important;
				padding-bottom: 0 !important;
				padding-top: 0 !important;
				padding-bottom: 0 !important;
				margin:0 !important;
				width: 100% !important;
				-webkit-text-size-adjust: 100% !important;
				-ms-text-size-adjust: 100% !important;
				-webkit-font-smoothing: antialiased !important;
	}
				.tableContent img {
				border: 0 !important;
				display: block !important;
				outline: none !important;
	}
				a{
				color:#382F2E;
	}
				
				p, h1,h2,ul,ol,li,div{
				margin:0;
				padding:0;
	}
				
				h1,h2{
				font-weight: normal;
				background:transparent !important;
				border:none !important;
	}
				
				.contentEditable h2.big,.contentEditable h1.big{
				font-size: 26px !important;
	}
				
				.contentEditable h2.bigger,.contentEditable h1.bigger{
				font-size: 37px !important;
	}
				
				td,table{
				vertical-align: top;
	}
				td.middle{
				vertical-align: middle;
	}
				
				a.link1{
				font-size:13px;
				color:#27A1E5;
				line-height: 24px;
				text-decoration:none;
	}
				a{
				text-decoration: none;
	}
				
				.link2{
				color:#fc3f3f;
				border-top:0px solid #fc3f3f;
				border-bottom:0px solid #fc3f3f;
				border-left:10px solid #fc3f3f;
				border-right:10px solid #fc3f3f;
				border-radius:1px;
				-moz-border-radius:5px;
				-webkit-border-radius:5px;
				background:#fc3f3f;
	}
				
				.link3{
				color:#555555;
				border:1px solid #cccccc;
				padding:10px 18px;
				border-radius:3px;
				-moz-border-radius:3px;
				-webkit-border-radius:3px;
				background:#ffffff;
	}
				
				.link4{
				color:#27A1E5;
				line-height: 24px;
	}
				
				h2,h1{
				line-height: 20px;
	}
				p{
				font-size: 14px;
				line-height: 21px;
				color:#AAAAAA;
	}
				
				.contentEditable li{
				
	}
				
				.appart p{
				
	}
				.bgItem{
				background:#ffffff;
	}
				.bgBody{
				background: #000000;
	}
				
				img {
				outline:none;
				text-decoration:none;
				-ms-interpolation-mode: bicubic;
				width: auto;
				max-width: 100%;
				clear: both;
				display: block;
				float: none;
	}
				
				
				
				</style>
				
				
				<script type='colorScheme' class='swatch active'>
				{
				'name':'Default',
				'bgBody':'ffffff',
				'link':'27A1E5',
				'color':'AAAAAA',
				'bgItem':'ffffff',
				'title':'444444'
	}
				</script>
				
				
				</head>
				<body paddingwidth='0' paddingheight='0' bgcolor='#d1d3d4'  style='padding-top: 0; padding-bottom: 0; padding-top: 0; padding-bottom: 0; background-repeat: repeat; width: 100% !important; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased;' offset='0' toppadding='0' leftpadding='0'>
				<table width='100%' border='0' cellspacing='0' cellpadding='0' class='tableContent bgBody' align='center'  style='font-family:Helvetica, sans-serif;'>
				
				
				<tr>
				<td align='center'>
				<table width='600' border='0' cellspacing='0' cellpadding='0' align='center' >
				<tr>
				<td class='bgItem' align='center'>
				<table width='600' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td class='movableContentContainer' align='center'>
				<div class='movableContent'>
				<table width='100%' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr><td style='background:#000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px' height='30'></td></tr>
				<tr>
				<td style='background:#000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px'>
				<table width='650' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td width='130'>
				<div class='contentEditableContainer contentImageEditable'>
				<div class='contentEditable'>
				<a href='http://www.miraclesoft.com/index.php' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/logo.png' alt='Logo' width='70' height='45' data-default='placeholder' data-max-width='200'></a>
				
				</div>
				</div>
				</td>
				
				<td valign='middle' style='vertical-align: middle;'>
				</td>
				
				<td valign='middle' style='vertical-align: middle;' width='150'><br/>
				<table width='300' border='0' cellpadding='0' cellspacing='0' align='right' style='text-align: right; font-size: 13px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='fullCenter'>
				<tr>
				<td height='55' valign='middle' width='100%' style='font-family: Helvetica, Arial, sans-serif; color:#000000;'>
				<span style='font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;'><a href='http://www.miraclesoft.com' target='_blank' style='text-decoration: none; color:#ffffff;'class='underline' >Company</a></span>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style='font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;'><a href='http://www.miraclesoft.com/careers/careers.php' target='_blank' style='text-decoration: none; color:#ffffff;'class='underline' >Careers</a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</td>
				</tr>
				</table>
				</td>
				</tr>
				</table>
				</td>
				</tr>
				</table>
				</div>
				
				
				<div class='movableContent'>
				<table width='580' border='0' cellspacing='0' cellpadding='0' align='center'>
				
				<tr>
				<td style='border: 5px solid #000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px'>
				<div class='movableContent'>
				<table width='650' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td style='background:#305983; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:px'>
				
				<table width='600' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr><td height='18'></td></tr>
				<tr>
				<td>
				<div class='contentEditableContainer contentTextEditable'>
				<div class='contentEditable' style='text-align: left;'>
				<h2 style='font-size: 22px;'><font color='#FFffff' face='trebuchet ms'><b>Webinar Reminder</b></font></h2>
				<br>
				
				</div>
				</div>
				</td>
				</tr>
				
				</table>
				
				</td>
				</tr>
				
				</table>
				</div>
				<table width='600' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr><td height='10'></td></tr>
				<tr>
				<td>
				<div class='contentEditableContainer contentTextEditable'>
				<div class='contentEditable' style='text-align: center;'>
				
				<br>
				<p style='text-align: justify; font-size: 14px;'><font color='#000000' face='trebuchet ms'><b>Hello $rfirstname.$rlastName,</b>
				<br><br/>
				Thank you so much for signing up for our <b>'$webinarTitle'</b> Webinar which will be conducted at <b>$webinarStartTime</b>. on <b>$webinarStartDate</b>. Please find the details of the webinar below and we can't wait to see you at the event.
				<br/><br/>
				<b>Date:</b> $webinarDate<br/>
				<b>Time:</b> $webinarTime<br/>
				<b>Title:</b> $webinarTitle<br/><br/>
				
				
				<b>$webinarDescription</b><br/><br/>
				
				$spekarsList
				<br>
				If you are having trouble with the webinar (or) need any assistance please feel free to contact us at <a href='mailto:webmaster@miraclesoft.com'><b>webinar@miraclesoft.com</b></a>.<br/><br/>
				</font></p>
				
				<table width='605' border='0' cellspacing='0' cellpadding='0' align='center'>
				
				<tr>
				<td align='left'>
				<table>
				<tr>
				<td align='left' bgcolor='#fc3f3f' style='background:#fc3f3f; padding:10px 15px;-webkit-border-radius: 2px; -moz-border-radius: 2px; border-radius: 2px;'>
				<div class='contentEditableContainer contentTextEditable'>
				<div class='contentEditable' align='left'>
				<a href='".DOWNLOAD_URL."/download/DownloadVcs.php?filename=$vcsFileName&rootPath=$vcsPath' target='_blank' class='link2' style='color:#ffffff;'><font face='trebuchet ms'><b>Add To Calendar</b></a>
				</div>
				</div>
				</td>
				</tr>
				</table>
				</td>
				</tr>
				
				<tr><td height='18'></td></tr>
				
				</table>
				<p style='text-align: justify; font-size: 14px;'><font color='#000000' face='trebuchet ms'><b>Thanks & Regards,</b><br/>
				
				Miracle Software Systems, Inc.<br/>
				45625 Grand River Avenue,<br/>
				Novi, MI(USA)<br/>
				
				</font></p><br/>
				<p style='text-align: justify; font-size: 14px;'><font color='#ff0000' face='trebuchet ms'><i><b>*Note:</b> Do not reply to this email as this is an automated notification.</i></font></p>
				<br>
				
				</div>
				</div>
				</td>
				</tr>
				<tr><td height='9'></td></tr>
				
				</table>
				</td>
				</tr>
				</table>
				</div>
				
				
				<div class='movableContent'>
				<table width='660' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td style='background:#000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px'>
				<table width='655' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr><td colspan='3' height='20'></td></tr>
				<tr>
				<td width='90'></td>
				<td width='660'align='center' style='text-align: center;'>
				<table width='660' cellpadding='0' cellspacing='0' align='center'>
				<tr>
				<td>
				<div class='contentEditableContainer contentTextEditable'>
				<div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
				<p style='text-align: center; font-size: 14px;'><font color='#ffffff' face='trebuchet ms'>© Copyright ".date('Y')." Miracle Software Systems, Inc.<br/>
							  45625 Grand River Avenue<br/> Novi, MI - USA</p>
				
                            </div>
                          </div>
                        </td>
                      </tr>
                    </table>
                  </td>
                  <td width='90'></td>
                </tr>
              </table>
			  <table width='650' border='0' cellspacing='0' cellpadding='0' align='center'>
                <tr><td colspan='3' height='20'></td></tr>
                <tr>
                  <td width='195'></td>
                  <td width='190' align='center' style='text-align: center;'>
                    <table width='190' cellpadding='0' cellspacing='0' align='center'>
                      <tr>
                        <td width='40'>
                          <div class='contentEditableContainer contentFacebookEditable'>
                            <div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
                              <a href='https://www.facebook.com/miracle45625' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/fb.png' alt='facebook' width='32' height='32' data-max-width='40' data-customIcon='true' ></a>
                            </div>
                          </div>
                        </td>
                        <td width='10'></td>
                        <td width='40'>
                          <div class='contentEditableContainer contentTwitterEditable'>
                            <div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
                              <a href='https://twitter.com/team_mss' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/tweet.png' alt='twitter' width='32' height='32' data-max-width='40' data-customIcon='true'></a>
                            </div>
                          </div>
                        </td>
                        <td width='10'></td>
                        <td width='40'>
                          <div class='contentEditableContainer contentImageEditable'>
                            <div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
                              <a href='https://plus.google.com/+Team_MSS/posts' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/googleplus.png' alt='Pinterest' width='32' height='32' data-max-width='40'></a>
                            </div>
                          </div>
                        </td>
                        <td width='10'></td>
                        <td width='40'>
                          <div class='contentEditableContainer contentImageEditable'>
                            <div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
                              <a href='https://www.linkedin.com/company/miracle-software-systems-inc' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/linkedin.png' alt='Social media' width='32' height='32' data-max-width='40'></a>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </table>
                  </td>
                  <td width='195'></td>
                </tr>
                <tr><td colspan='3' height='40'></td></tr>
              </table>
				
                  </td>
                </tr>
              </table>
            </div>
			<div class='movableContent'>
              <table width='100%' border='0' cellspacing='0' cellpadding='0' align='center'>
                <tr><td style='background:#000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px' height='0'></td></tr>
                <tr>
				</table>
				</div>
				
				
          </td>
        </tr>
      </table>
      </td>
      </tr>
      </table>
    </td>
  </tr>
</table>
</body>
  </html>
				
				
"); //Put your body of the message you can place html code here
				
				//$mail->AddAttachment($rootPath); //Attach a file here if any or comment this line,
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
	
	
	
	function sendQuarterMeetRegisteredDetails($rfirstname,$remail,$rphone,$rdepartment,$rlocation,$rfoodPreference,$rbringAlong,$rcorporateTransport,$evenTitle,$evenDate,$rtime,$isAttend){
		
		$mail	= new PHPMailer; // call the class
		$mail->IsSMTP();
		$mail->Host = SMTP_HOST; //Hostname of the mail server
		$mail->Port = SMTP_PORT; //Port of the SMTP like to be 25, 80, 465 or 587
		$mail->SMTPAuth = true; //Whether to use SMTP authentication
		$mail->SMTPSecure = SMTP_SECURE;
		$mail->Username = SMTP_UNAME; //Username for SMTP authentication any valid email created in your domain
		$mail->Password = SMTP_PWORD; //Password for SMTP authentication
		$mail->AddReplyTo($email, $fname); //reply-to address
		$mail->SetFrom("hubbleapp@miraclesoft.com", "Marketing Team"); //From address of the mail
		// put your while loop here like below,
		$mail->Subject = "Thank You"; //Subject od your mail
		
		//   echo 'toEmail-->'.REFERAL_INDIA;
		// $mail->AddAddress(QMEET_REGISTERED, "QMeet");
		$mail->AddAddress($remail, $rfirstname);
		
		
		
		//$mail->AddAddress("hbethireddy@miraclesoft.com", "Aditya Malla"); //To address who will receive this email
		//$mail->MsgHTML("<b>Hi, your first SMTP mail has been received. Great Job!.. <br/><br/>by <a href='http://www.asif18.com/7/php/send-mails-using-smtp-in-php-by-gmail-server-or-own-domain-server/'>Asif18</a></b>"); //Put your body of the message you can place html code here
		$bodyContent="";
		//$mail->MsgHTML(
		$bodyContent="<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
		<html xmlns='http://www.w3.org/1999/xhtml'>
		<head>
		<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
		<title>RSVP Form</title>
		<style type='text/css'>
		
		
		body {
		padding-top: 0 !important;
		padding-bottom: 0 !important;
		padding-top: 0 !important;
		padding-bottom: 0 !important;
		margin:0 !important;
		width: 100% !important;
		-webkit-text-size-adjust: 100% !important;
		-ms-text-size-adjust: 100% !important;
		-webkit-font-smoothing: antialiased !important;
	}
	.tableContent img {
	border: 0 !important;
	display: block !important;
	outline: none !important;
	}
	a{
	color:#382F2E;
	}
	
	p, h1,h2,ul,ol,li,div{
	margin:0;
	padding:0;
	}
	
	h1,h2{
	font-weight: normal;
	background:transparent !important;
	border:none !important;
	}
	
	.contentEditable h2.big,.contentEditable h1.big{
	font-size: 26px !important;
	}
	
	.contentEditable h2.bigger,.contentEditable h1.bigger{
	font-size: 37px !important;
	}
	
	td,table{
	vertical-align: top;
	}
	td.middle{
	vertical-align: middle;
	}
	
	a.link1{
	font-size:13px;
	color:#27A1E5;
	line-height: 24px;
	text-decoration:none;
	}
	a{
	text-decoration: none;
	}
	
	.link2{
	color:#fc3f3f;
	border-top:0px solid #fc3f3f;
	border-bottom:0px solid #fc3f3f;
	border-left:10px solid #fc3f3f;
	border-right:10px solid #fc3f3f;
	border-radius:1px;
	-moz-border-radius:5px;
	-webkit-border-radius:5px;
	background:#fc3f3f;
	}
	
	.link3{
	color:#555555;
	border:1px solid #cccccc;
	padding:10px 18px;
	border-radius:3px;
	-moz-border-radius:3px;
	-webkit-border-radius:3px;
	background:#ffffff;
	}
	
	.link4{
	color:#27A1E5;
	line-height: 24px;
	}
	
	h2,h1{
	line-height: 20px;
	}
	p{
	font-size: 14px;
	line-height: 21px;
	color:#AAAAAA;
	}
	
	.contentEditable li{
	
	}
	
	.appart p{
	
	}
	.bgItem{
	background:#ffffff;
	}
	.bgBody{
	background: #000000;
	}
	
	img {
	outline:none;
	text-decoration:none;
	-ms-interpolation-mode: bicubic;
	width: auto;
	max-width: 100%;
	clear: both;
	display: block;
	float: none;
	}
	
	
	
	</style>
	
	
	<script type='colorScheme' class='swatch active'>
	{
	'name':'Default',
	'bgBody':'ffffff',
	'link':'27A1E5',
	'color':'AAAAAA',
	'bgItem':'ffffff',
	'title':'444444'
	}
	</script>
	
	
	</head>
	<body paddingwidth='0' paddingheight='0' bgcolor='#d1d3d4'  style='padding-top: 0; padding-bottom: 0; padding-top: 0; padding-bottom: 0; background-repeat: repeat; width: 100% !important; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased;' offset='0' toppadding='0' leftpadding='0'>
	<table width='100%' border='0' cellspacing='0' cellpadding='0' class='tableContent bgBody' align='center'  style='font-family:Helvetica, sans-serif;'>
	
	
	<tr>
	<td align='center'>
	<table width='600' border='0' cellspacing='0' cellpadding='0' align='center' >
	<tr>
	<td class='bgItem' align='center'>
	<table width='600' border='0' cellspacing='0' cellpadding='0' align='center'>
	<tr>
	<td class='movableContentContainer' align='center'>
	<div class='movableContent'>
	<table width='100%' border='0' cellspacing='0' cellpadding='0' align='center'>
	<tr><td style='background:#000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px' height='30'></td></tr>
	<tr>
	<td style='background:#000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px'>
	<table width='650' border='0' cellspacing='0' cellpadding='0' align='center'>
	<tr>
	<td width='130'>
	<div class='contentEditableContainer contentImageEditable'>
	<div class='contentEditable'>
	<a href='http://www.miraclesoft.com/index.php' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/logo.png' alt='Logo' width='70' height='45' data-default='placeholder' data-max-width='200'></a>
	
	</div>
	</div>
	</td>
	
	<td valign='middle' style='vertical-align: middle;'>
	</td>
	
	<td valign='middle' style='vertical-align: middle;' width='150'></br>
	<table width='300' border='0' cellpadding='0' cellspacing='0' align='right' style='text-align: right; font-size: 13px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='fullCenter'>
	<tr>
	<td height='55' valign='middle' width='100%' style='font-family: Helvetica, Arial, sans-serif; color:#000000;'>
	<span style='font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;'><a href='http://www.miraclesoft.com' target='_blank' style='text-decoration: none; color:#ffffff;'class='underline' >Company</a></span>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style='font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;'><a href='http://www.miraclesoft.com/careers/careers.php' target='_blank' style='text-decoration: none; color:#ffffff;'class='underline' >Careers</a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	</div>
	
	
	<div class='movableContent'>
	<table width='580' border='0' cellspacing='0' cellpadding='0' align='center'>
	
	<tr>
	<td style='border: 5px solid #000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px'>
	<div class='movableContent'>
	<table width='650' border='0' cellspacing='0' cellpadding='0' align='center'>
	<tr>
	<td style='background:#305983; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:px'>
	
	<table width='600' border='0' cellspacing='0' cellpadding='0' align='center'>
	<tr><td height='18'></td></tr>
	<tr>
	<td>
	<div class='contentEditableContainer contentTextEditable'>
	<div class='contentEditable' style='text-align: left;'>
	<h2 style='font-size: 22px;'><font color='#FFffff' face='trebuchet ms'><b>Thank You</b></font></h2>
	<br>
	
	</div>
	</div>
	</td>
	</tr>
	
	</table>
	
	</td>
	</tr>
	
	</table>
	</div>
	<table width='600' border='0' cellspacing='0' cellpadding='0' align='center'>
	<tr><td height='10'></td></tr>
	<tr>
	<td>
	<div class='contentEditableContainer contentTextEditable'>
	<div class='contentEditable' style='text-align: center;'>
	
	<br>
	<p style='text-align: justify; font-size: 14px;'><font color='#000000' face='trebuchet ms'><b>Hello $rfirstname,</b>
	<br></br>";
		
		if($isAttend==1){
			$bodyContent = $bodyContent."Thank you so much for filling the form and we cant wait to see you there at the Party. Following are the details for the event you registered.";
		}else {
			$bodyContent = $bodyContent."Thanks for providing us the information. We will be very happy if you could make your presence along with your family members for the upcoming Quarterly meet.";
		}
		
		
		
		$bodyContent = $bodyContent."<br/></br><b>Event:</b> $evenTitle
		<br/><b>Venue:</b> $rlocation
		<br/><b>Date: </b> $evenDate
		<br/><b>Time: </b> $rtime
		<br/></br>";
		if($isAttend==1){
			$bodyContent = $bodyContent."Are you interested to participate in any of the cultural activities at the event? Click <a href='http://www.miraclesoft.com/survey/survey-form.php?surveyId=96' target='_blank'; style='text-decoration: none; color: #0000ff;'class='underline'><b><u>here</u></b></a> to enroll yourself.";
			$bodyContent = $bodyContent."<br></br>";
		}
		
		$bodyContent = $bodyContent."</font></p>
				
							   <table width='605' border='0' cellspacing='0' cellpadding='0' align='center'>
				
				
				
				
                        </table>
						<p style='text-align: justify; font-size: 14px;'><font color='#000000' face='trebuchet ms'><b>Thanks & Regards,</b><br/>
							  <b>Corporate Application Support Team,</b><br/>
							  Miracle Software Systems, Inc.<br/>
                              45625 Grand River Avenue, Novi, MI(USA)<br/>
                              <b>Email :</b> marketing@miraclesoft.com<br/>
                              <b>Phone :</b> (+1)248-412-0426
							  </font></p><br/>
							  <p style='text-align: justify; font-size: 14px;'><font color='#ff0000' face='trebuchet ms'><i><b>*Note:</b> Do not reply to this email as this is an automated notification.</i></font></p>
							  <br>
				
							  </div>
                          </div>
                        </td>
                      </tr>
                      <tr><td height='9'></td></tr>
				
					 </table>
					 </td>
                </tr>
              </table>
            </div>
				
				
            <div class='movableContent'>
              <table width='660' border='0' cellspacing='0' cellpadding='0' align='center'>
                <tr>
                  <td style='background:#000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px'>
                     <table width='655' border='0' cellspacing='0' cellpadding='0' align='center'>
                <tr><td colspan='3' height='20'></td></tr>
                <tr>
                  <td width='90'></td>
                  <td width='660'align='center' style='text-align: center;'>
                    <table width='660' cellpadding='0' cellspacing='0' align='center'>
                      <tr>
                        <td>
                          <div class='contentEditableContainer contentTextEditable'>
                            <div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
                              <p style='text-align: center; font-size: 14px;'><font color='#ffffff' face='trebuchet ms'>© Copyright ".date('Y')." Miracle Software Systems, Inc.</br>
							  45625 Grand River Avenue</br> Novi, MI - USA</p>
                              		
                            </div>
                          </div>
                        </td>
                      </tr>
                    </table>
                  </td>
                  <td width='90'></td>
                </tr>
              </table>
			  <table width='650' border='0' cellspacing='0' cellpadding='0' align='center'>
                <tr><td colspan='3' height='20'></td></tr>
                <tr>
                  <td width='195'></td>
                  <td width='190' align='center' style='text-align: center;'>
                    <table width='190' cellpadding='0' cellspacing='0' align='center'>
                      <tr>
                        <td width='40'>
                          <div class='contentEditableContainer contentFacebookEditable'>
                            <div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
                              <a href='https://www.facebook.com/miracle45625' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/fb.png' alt='facebook' width='32' height='32' data-max-width='40' data-customIcon='true' ></a>
                            </div>
                          </div>
                        </td>
                        <td width='10'></td>
                        <td width='40'>
                          <div class='contentEditableContainer contentTwitterEditable'>
                            <div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
                              <a href='https://twitter.com/team_mss' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/tweet.png' alt='twitter' width='32' height='32' data-max-width='40' data-customIcon='true'></a>
                            </div>
                          </div>
                        </td>
                        <td width='10'></td>
                        <td width='40'>
                          <div class='contentEditableContainer contentImageEditable'>
                            <div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
                              <a href='https://plus.google.com/+Team_MSS/posts' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/googleplus.png' alt='Pinterest' width='32' height='32' data-max-width='40'></a>
                            </div>
                          </div>
                        </td>
                        <td width='10'></td>
                        <td width='40'>
                          <div class='contentEditableContainer contentImageEditable'>
                            <div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
                              <a href='https://www.linkedin.com/company/miracle-software-systems-inc' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/linkedin.png' alt='Social media' width='32' height='32' data-max-width='40'></a>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </table>
                  </td>
                  <td width='195'></td>
                </tr>
                <tr><td colspan='3' height='40'></td></tr>
              </table>
                              		
                  </td>
                </tr>
              </table>
            </div>
			<div class='movableContent'>
              <table width='100%' border='0' cellspacing='0' cellpadding='0' align='center'>
                <tr><td style='background:#000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px' height='0'></td></tr>
                <tr>
				</table>
				</div>
                              		
                              		
          </td>
        </tr>
      </table>
      </td>
      </tr>
      </table>
    </td>
  </tr>
</table>
</body>
  </html>
                              		
                              		
"; //Put your body of the message you can place html code here
		$mail->MsgHTML($bodyContent);
		//$mail->AddAttachment($rootPath); //Attach a file here if any or comment this line,
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
	
	
	
	
	function sendDocDetails($consultantId,$rrefId,$robjectId ,$rfirstName ,$rlastName,$rorganization ,$rdesignation ,$remail ,$rphone ,$docTitle,$docAuthor,$docTrack,$docLongDescription,$docType,$fileName,$filePath,$rrefferenceId){
		
		$mail	= new PHPMailer; // call the class
		$mail->IsSMTP();
		$mail->Host = SMTP_HOST; //Hostname of the mail server
		$mail->Port = SMTP_PORT; //Port of the SMTP like to be 25, 80, 465 or 587
		$mail->SMTPAuth = true; //Whether to use SMTP authentication
		$mail->SMTPSecure = SMTP_SECURE;
		$mail->Username = SMTP_UNAME; //Username for SMTP authentication any valid email created in your domain
		$mail->Password = SMTP_PWORD; //Password for SMTP authentication
		$mail->AddReplyTo($remail, $rfirstName); //reply-to address
		$mail->SetFrom("hubbleapp@miraclesoft.com", "Cas Team"); //From address of the mail
		// put your while loop here like below,
		$mail->Subject = "Resource Depot"; //Subject od your mail
		
		//   echo 'toEmail-->'.REFERAL_INDIA;
		// $mail->AddAddress(QMEET_REGISTERED, "QMeet");
		$mail->AddAddress($remail, "Resource Depot");
		
		//$mail->AddAddress("hbethireddy@miraclesoft.com", "Aditya Malla"); //To address who will receive this email
		//$mail->MsgHTML("<b>Hi, your first SMTP mail has been received. Great Job!.. <br/><br/>by <a href='http://www.asif18.com/7/php/send-mails-using-smtp-in-php-by-gmail-server-or-own-domain-server/'>Asif18</a></b>"); //Put your body of the message you can place html code here
		$mail->MsgHTML("
				<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
				<html xmlns='http://www.w3.org/1999/xhtml'>
				<head>
				<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
				<title>Download Link</title>
				<style type='text/css'>
				
				
				body {
				padding-top: 0 !important;
				padding-bottom: 0 !important;
				padding-top: 0 !important;
				padding-bottom: 0 !important;
				margin:0 !important;
				width: 100% !important;
				-webkit-text-size-adjust: 100% !important;
				-ms-text-size-adjust: 100% !important;
				-webkit-font-smoothing: antialiased !important;
	}
				.tableContent img {
				border: 0 !important;
				display: block !important;
				outline: none !important;
	}
				a{
				color:#382F2E;
	}
				
				p, h1,h2,ul,ol,li,div{
				margin:0;
				padding:0;
	}
				
				h1,h2{
				font-weight: normal;
				background:transparent !important;
				border:none !important;
	}
				
				.contentEditable h2.big,.contentEditable h1.big{
				font-size: 26px !important;
	}
				
				.contentEditable h2.bigger,.contentEditable h1.bigger{
				font-size: 37px !important;
	}
				
				td,table{
				vertical-align: top;
	}
				td.middle{
				vertical-align: middle;
	}
				
				a.link1{
				font-size:13px;
				color:#27A1E5;
				line-height: 24px;
				text-decoration:none;
	}
				a{
				text-decoration: none;
	}
				
				.link2{
				color:#fc3f3f;
				border-top:0px solid #fc3f3f;
				border-bottom:0px solid #fc3f3f;
				border-left:10px solid #fc3f3f;
				border-right:10px solid #fc3f3f;
				border-radius:1px;
				-moz-border-radius:5px;
				-webkit-border-radius:5px;
				background:#fc3f3f;
	}
				
				.link3{
				color:#555555;
				border:1px solid #cccccc;
				padding:10px 18px;
				border-radius:3px;
				-moz-border-radius:3px;
				-webkit-border-radius:3px;
				background:#ffffff;
	}
				
				.link4{
				color:#27A1E5;
				line-height: 24px;
	}
				
				h2,h1{
				line-height: 20px;
	}
				p{
				font-size: 14px;
				line-height: 21px;
				color:#AAAAAA;
	}
				
				.contentEditable li{
				
	}
				
				.appart p{
				
	}
				.bgItem{
				background: #ffffff;
	}
				.bgBody{
				background: #000000;
	}
				
				img {
				outline:none;
				text-decoration:none;
				-ms-interpolation-mode: bicubic;
				width: auto;
				max-width: 100%;
				clear: both;
				display: block;
				float: none;
	}
				
				
				
				</style>
				
				
				<script type='colorScheme' class='swatch active'>
				{
				'name':'Default',
				'bgBody':'ffffff',
				'link':'27A1E5',
				'color':'AAAAAA',
				'bgItem':'ffffff',
				'title':'444444'
	}
				</script>
				
				
				</head>
				<body paddingwidth='0' paddingheight='0' bgcolor='#d1d3d4'  style='padding-top: 0; padding-bottom: 0; padding-top: 0; padding-bottom: 0; background-repeat: repeat; width: 100% !important; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased;' offset='0' toppadding='0' leftpadding='0'>
				<table width='100%' border='0' cellspacing='0' cellpadding='0' class='tableContent bgBody' align='center'  style='font-family:Helvetica, sans-serif;'>
				
				
				<tr>
				<td align='center'>
				<table width='600' border='0' cellspacing='0' cellpadding='0' align='center' >
				<tr>
				<td class='bgItem' align='center'>
				<table width='600' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td class='movableContentContainer' align='center'>
				<div class='movableContent'>
				<table width='100%' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr><td style='background:#000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px' height='20'></td></tr>
				<tr>
				<td style='background:#000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px'>
				<table width='650' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td width='130'>
				<div class='contentEditableContainer contentImageEditable'>
				<div class='contentEditable'>
				<a href='http://www.miraclesoft.com/index.php' target='_blank'><img src='http://www.miraclesoft.com/newsletters/internal/2015/Employee_Referral_Program_US/images/logo.png' alt='Logo' width='70' height='45' data-default='placeholder' data-max-width='200'></a>
				
				</div>
				</div>
				</td>
				
				<td valign='middle' style='vertical-align: middle;'>
				</td>
				
				<td valign='middle' style='vertical-align: middle;' width='150'></br>
				<table width='300' border='0' cellpadding='0' cellspacing='0' align='right' style='text-align: right; font-size: 13px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='fullCenter'>
				<tr>
				<td height='55' valign='middle' width='100%' style='font-family: Helvetica, Arial, sans-serif; color:#000000;'>
				<span style='font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;'><a href='http://www.miraclesoft.com' target='_blank' style='text-decoration: none; color:#ffffff;'class='underline' >Company</a></span>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style='font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;'><a href='http://www.miraclesoft.com/careers' target='_blank' style='text-decoration: none; color:#ffffff;'class='underline' >Careers</a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</td>
				</tr>
				</table>
				</td>
				</tr>
				</table>
				</td>
				</tr>
				</table>
				</div>
				
				
				
				<div class='movableContent'>
				<table width='580' border='0' cellspacing='0' cellpadding='0' align='center'>
				
				<tr>
				<td style='border: 5px solid #000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px'>
				<div class='movableContent'>
				<table width='650' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td style='background:#1E5279; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:px'>
				
				<table width='600' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr><td height='20'></td></tr>
				<tr>
				<td>
				<div class='contentEditableContainer contentTextEditable'>
				<div class='contentEditable' style='text-align: left;'>
				<h2 style='font-size: 22px;'><font color='#ffffff' face='trebuchet ms'><b>Resource Depot</b></font></h2>
				<br>
				<p style='font-size: 20px;'><font face='calibri'><b></b>
				</p>
				</div>
				</div>
				</td>
				</tr>
				<tr><td height='0'></td></tr>
				</table>
				
				</td>
				</tr>
				
				</table>
				</div>
				<table width='600' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr><td height='10'></td></tr>
				<tr>
				<td>
				<div class='contentEditableContainer contentTextEditable'>
				<div class='contentEditable' style='text-align: center;'>
				
				<br>
				<p style='text-align: justify; font-size: 14px;'><font color='#000000' face='trebuchet ms'><b>Hello $rfirstName ,</b>
				<br></br>
				Thank you for showing interest in downloading our $docType, <b>$docTitle</b> from our library. You can find the details and the link to the resource below. Please also feel free to visit our corporate website to gleam more information on transformative technologies in IT.
				<br></br>
				<b>Resource ID:</b> $robjectId<br/>
				<b>Resource Title:</b> $docTitle<br/>
				<b>Author:</b> $docAuthor<br/>
				<b>Track:</b> $docTrack<br></br>
				<b>$docLongDescription</b>
				
				</font></p>
				
				
				</div>
				</div>
				</td>
				</tr>
				<tr><td height='8'></td></tr>
				
				</table>
				
				<table width='605' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr><td height='5'> </td></tr>
				<tr>
				<td align='left'>
				<table>
				<tr>
				<td align='left' bgcolor='#fc3f3f' style='background:#fc3f3f; padding:10px 15px;-webkit-border-radius: 2px; -moz-border-radius: 2px; border-radius: 2px;'>
				<div class='contentEditableContainer contentTextEditable'>
				<div class='contentEditable' align='left'>
				
				<a href='".DOWNLOAD_URL."/download/DownloadDocs.php?consultantId=$consultantId&refferenceId=$rrefferenceId&refId=$rrefId&objectId=$robjectId' class='link2' style='color:#ffffff;'><font face='trebuchet ms'><b> Access Resource</b></a>
				</div>
				</div>
				</td>
				</tr>
				</table><br/>
				<p style='text-align: justify; font-size: 14px;'><font color='#000000' face='trebuchet ms'><b>Thanks & Regards,</b><br/>
				<b>Corporate Application Support Team,</b><br/>
				Miracle Software Systems, Inc.<br/>
				45625 Grand River Avenue, Novi, MI(USA)<br/>
				<b>Email :</b> marketing@miraclesoft.com<br/>
				<b>Phone :</b> (+1)248-412-0426
				</font></p>
				</td>
				</tr>
				<tr><td height='15'></td></tr>
				
				</table>
				
				<table width='600' border='0' cellspacing='0' cellpadding='0' align='center'>
				
				<tr>
				<td>
				<div class='contentEditableContainer contentTextEditable'>
				<div class='contentEditable' style='text-align: center;'>
				<p style='text-align: justify; font-size: 14px;'><font color='#ff000' face='trebuchet ms'><i><b>*Note:</b> Do not reply to this email as this is an automated notification.</i>
				</font></p>
				</div>
				</div>
				</td>
				</tr>
				<tr><td height='25'></td></tr>
				
				</table>
				
				
				</td>
				</tr>
				</table>
				</div>
				
				
				
				
				<div class='movableContent'>
				<table width='660' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td style='background:#000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px'>
				<table width='655' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr><td colspan='3' height='20'></td></tr>
				<tr>
				<td width='90'></td>
				<td width='660'align='center' style='text-align: center;'>
				<table width='660' cellpadding='0' cellspacing='0' align='center'>
				<tr>
				<td>
				<div class='contentEditableContainer contentTextEditable'>
				<div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
				<p style='text-align: center; font-size: 14px;'><font color='#ffffff' face='trebuchet ms'>© Copyright ".date('Y')." Miracle Software Systems, Inc.</br>
							  45625 Grand River Avenue,</br> Novi, MI - USA</p>
				
                            </div>
                          </div>
                        </td>
                      </tr>
                    </table>
                  </td>
                  <td width='90'></td>
                </tr>
              </table>
			  <table width='650' border='0' cellspacing='0' cellpadding='0' align='center'>
                <tr><td colspan='3' height='15'></td></tr>
                <tr>
                  <td width='195'></td>
                  <td width='190' align='center' style='text-align: center;'>
                    <table width='190' cellpadding='0' cellspacing='0' align='center'>
                      <tr>
                        <td width='40'>
                          <div class='contentEditableContainer contentFacebookEditable'>
                            <div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
                              <a href='https://www.facebook.com/miracle45625' target='_blank'><img src='http://www.miraclesoft.com/newsletters/internal/2015/Employee_Referral_Program_US/images/facebook.png' alt='facebook' width='32' height='32' data-max-width='40' data-customIcon='true' ></a>
                            </div>
                          </div>
                        </td>
                        <td width='10'></td>
                        <td width='40'>
                          <div class='contentEditableContainer contentTwitterEditable'>
                            <div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
                              <a href='https://twitter.com/team_mss' target='_blank'><img src='http://www.miraclesoft.com/newsletters/internal/2015/Employee_Referral_Program_US/images/twitter.png' alt='twitter' width='32' height='32' data-max-width='40' data-customIcon='true'></a>
                            </div>
                          </div>
                        </td>
                        <td width='10'></td>
                        <td width='40'>
                          <div class='contentEditableContainer contentImageEditable'>
                            <div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
                              <a href='https://plus.google.com/+Team_MSS/posts' target='_blank'><img src='http://www.miraclesoft.com/newsletters/internal/2015/Employee_Referral_Program_US/images/red.png' alt='Pinterest' width='32' height='32' data-max-width='40'></a>
                            </div>
                          </div>
                        </td>
                        <td width='10'></td>
                        <td width='40'>
                          <div class='contentEditableContainer contentImageEditable'>
                            <div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
                              <a href='https://www.linkedin.com/company/miracle-software-systems-inc' target='_blank'><img src='http://www.miraclesoft.com/newsletters/internal/2015/Employee_Referral_Program_US/images/blue.png' alt='Social media' width='32' height='32' data-max-width='40'></a>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </table>
                  </td>
                  <td width='195'></td>
                </tr>
                <tr><td colspan='3' height='40'></td></tr>
              </table>
				
                  </td>
                </tr>
              </table>
            </div>
				
				
          </td>
        </tr>
      </table>
      </td>
      </tr>
      </table>
    </td>
  </tr>
</table>
				
				
				
  </body>
  </html>
				
				
"); //Put your body of the message you can place html code here
		
		//$mail->AddAttachment($rootPath); //Attach a file here if any or comment this line,
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
	
	
	/*Method for Acknowledge to Contact Form
	 * Date : 04/09/2015
	 *
	 */
	function sendContactAcknowldge($fname,$email){
		
		$mail	= new PHPMailer; // call the class
		$mail->IsSMTP();
		$mail->Host = SMTP_HOST; //Hostname of the mail server
		$mail->Port = SMTP_PORT; //Port of the SMTP like to be 25, 80, 465 or 587
		$mail->SMTPAuth = true; //Whether to use SMTP authentication
		$mail->SMTPSecure = SMTP_SECURE;
		$mail->Username = SMTP_UNAME; //Username for SMTP authentication any valid email created in your domain
		$mail->Password = SMTP_PWORD; //Password for SMTP authentication
		$mail->AddReplyTo($email, $fname); //reply-to address
		$mail->SetFrom("hubbleapp@miraclesoft.com", "Cas Team"); //From address of the mail
		// put your while loop here like below,
		$mail->Subject = "Thankyou!!"; //Subject od your mail
		//$mail->AddAddress("skola2@miraclesoft.com", "Santosh Kola"); //To address who will receive this email
		$mail->AddAddress($email, $fname); //To address who will receive this email
		//$mail->MsgHTML("<b>Hi, your first SMTP mail has been received. Great Job!.. <br/><br/>by <a href='http://www.asif18.com/7/php/send-mails-using-smtp-in-php-by-gmail-server-or-own-domain-server/'>Asif18</a></b>"); //Put your body of the message you can place html code here
		$mail->MsgHTML("<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
				<html xmlns='http://www.w3.org/1999/xhtml'>
				<head>
				<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
				<title>Contact Form</title>
				<style type='text/css'>
				body {
				padding-top: 0 !important;
				padding-bottom: 0 !important;
				padding-top: 0 !important;
				padding-bottom: 0 !important;
				margin:0 !important;
				width: 100% !important;
				-webkit-text-size-adjust: 100% !important;
				-ms-text-size-adjust: 100% !important;
				-webkit-font-smoothing: antialiased !important;
	}
				.tableContent img {
				border: 0 !important;
				display: block !important;
				outline: none !important;
	}
				a{
				color:#382F2E;
	}
				p, h1,h2,ul,ol,li,div{
				margin:0;
				padding:0;
	}
				h1,h2{
				font-weight: normal;
				background:transparent !important;
				border:none !important;
	}
				.contentEditable h2.big,.contentEditable h1.big{
				font-size: 26px !important;
	}
				.contentEditable h2.bigger,.contentEditable h1.bigger{
				font-size: 37px !important;
	}
				td,table{
				vertical-align: top;
	}
				td.middle{
				vertical-align: middle;
	}
				a.link1{
				font-size:13px;
				color:#27A1E5;
				line-height: 24px;
				text-decoration:none;
	}
				a{
				text-decoration: none;
	}
				.link2{
				color:#fc3f3f;
				border-top:0px solid #fc3f3f;
				border-bottom:0px solid #fc3f3f;
				border-left:10px solid #fc3f3f;
				border-right:10px solid #fc3f3f;
				border-radius:1px;
				-moz-border-radius:5px;
				-webkit-border-radius:5px;
				background:#fc3f3f;
	}
				.link3{
				color:#555555;
				border:1px solid #cccccc;
				padding:10px 18px;
				border-radius:3px;
				-moz-border-radius:3px;
				-webkit-border-radius:3px;
				background:#ffffff;
	}
				.link4{
				color:#27A1E5;
				line-height: 24px;
	}
				h2,h1{
				line-height: 20px;
	}
				p{
				font-size: 14px;
				line-height: 21px;
				color:#AAAAAA;
	}
				.contentEditable li{
	}
				.appart p{
	}
				.bgItem{
				background:#ffffff;
	}
				.bgBody{
				background: #000000;
	}
				img {
				outline:none;
				text-decoration:none;
				-ms-interpolation-mode: bicubic;
				width: auto;
				max-width: 100%;
				clear: both;
				display: block;
				float: none;
	}
				</style>
				<script type='colorScheme' class='swatch active'>
				{
				'name':'Default',
				'bgBody':'ffffff',
				'link':'27A1E5',
				'color':'AAAAAA',
				'bgItem':'ffffff',
				'title':'444444'
	}
				</script>
				</head>
				<body paddingwidth='0' paddingheight='0' bgcolor='#d1d3d4'  style='padding-top: 0; padding-bottom: 0; padding-top: 0; padding-bottom: 0; background-repeat: repeat; width: 100% !important; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased;' offset='0' toppadding='0' leftpadding='0'>
				<table width='100%' border='0' cellspacing='0' cellpadding='0' class='tableContent bgBody' align='center'  style='font-family:Helvetica, sans-serif;'>
				<tr>
				<td align='center'>
				<table width='600' border='0' cellspacing='0' cellpadding='0' align='center' >
				<tr>
				<td class='bgItem' align='center'>
				<table width='600' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td class='movableContentContainer' align='center'>
				<div class='movableContent'>
				<table width='100%' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td style='background:#000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px' height='20'></td>
				</tr>
				<tr>
				<td style='background:#000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px'>
				<table width='650' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td width='130'>
				<div class='contentEditableContainer contentImageEditable'>
				<div class='contentEditable'>
				<a href='http://www.miraclesoft.com/index.php' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/logo.png' alt='Logo' width='70' height='45' data-default='placeholder' data-max-width='200'></a>
				</div>
				</div>
				</td>
				<td valign='middle' style='vertical-align: middle;'>
				</td>
				<td valign='middle' style='vertical-align: middle;' width='150'>
				<br>
				<table width='300' border='0' cellpadding='0' cellspacing='0' align='right' style='text-align: right; font-size: 13px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='fullCenter'>
				<tr>
				<td height='55' valign='middle' width='100%' style='font-family: Helvetica, Arial, sans-serif; color:#000000;'>
				<span style='font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;'><a href='http://www.miraclesoft.com' target='_blank' style='text-decoration: none; color:#ffffff;'class='underline' >Company</a></span>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style='font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;'><a href='http://www.miraclesoft.com/careers/careers.php' target='_blank' style='text-decoration: none; color:#ffffff;'class='underline' >Careers</a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</td>
				</tr>
				</table>
				</td>
				</tr>
				</table>
				</td>
				</tr>
				</table>
				</div>
				<div class='movableContent'>
				<table width='580' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td style='border: 5px solid #000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px'>
				<div class='movableContent'>
				<table width='650' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td style='background:#305983; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:px'>
				<table width='600' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td height='18'></td>
				</tr>
				<tr>
				<td>
				<div class='contentEditableContainer contentTextEditable'>
				<div class='contentEditable' style='text-align: left;'>
				<h2 style='font-size: 22px;'><font color='#FFffff' face='trebuchet ms'><b>Thank You</b></font></h2>
				<br>
				<p style='font-size: 20px;'>
				<font face='calibri'>
				<b></b>
				</p>
				</div>
				</div>
				</td>
				</tr>
				</table>
				</td>
				</tr>
				</table>
				</div>
				<table width='600' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr><td height='10'></td></tr>
				<tr>
				<td>
				<div class='contentEditableContainer contentTextEditable'>
				<div class='contentEditable' style='text-align: center;'>
				<br>
				<p style='text-align: justify; font-size: 14px;'><font color='#000000' face='trebuchet ms'><b>Hello $fname</b><br><br>
				Thank You so much for reaching out to us. One of our Team Members will call you back you soon.
				
				<br><br><b>Thanks & Regards,</b>
				<br/><b>Corporate Application Support Team,</b>
				<br/> Miracle Software Systems, Inc.
				<br/>45625 Grand River Avenue, Novi, MI(USA)
				<br/><b>Email :</b> marketing@miraclesoft.com
				<br/><b>Phone :</b> (+1)248-412-0426
				</font></p>
				<tr><td height='10'></td></tr></font></p>
				</div>
				</div>
				</td>
				</tr>
				<tr><td height='15'></td></tr>
				</table>
				<table width='600' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td>
				<div class='contentEditableContainer contentTextEditable'>
				<div class='contentEditable' style='text-align: center;'>
				<p style='text-align: justify; font-size: 14px;'><font color='#ff000' face='trebuchet ms'><i><b>*Note:</b> Do not reply to this email as this is an automated notification.</i>
				</font>
				</p>
				</div>
				</div>
				</td>
				</tr>
				<tr>
				<td height='25'></td>
				</tr>
				</table>
				</td>
				</tr>
				</table>
				</div>
				<div class='movableContent'>
				<table width='660' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td style='background:#000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px'>
				<table width='655' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td colspan='3' height='20'></td>
				</tr>
				<tr>
				<td width='90'></td>
				<td width='660'align='center' style='text-align: center;'>
				<table width='660' cellpadding='0' cellspacing='0' align='center'>
				<tr>
				<td>
				<div class='contentEditableContainer contentTextEditable'>
				<div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
				<p style='text-align: center; font-size: 14px;'><font color='#ffffff' face='trebuchet ms'>© Copyright ".date('Y')." Miracle Software Systems, Inc.<br/>
                                                45625 Grand River Avenue<br/> Novi, MI - USA
                                              </p>
                                            </div>
                                          </div>
                                        </td>
                                      </tr>
                                    </table>
                                  </td>
                                  <td width='90'></td>
                                </tr>
                              </table>
                              <table width='650' border='0' cellspacing='0' cellpadding='0' align='center'>
                                <tr>
                                  <td colspan='3' height='20'></td>
                                </tr>
                                <tr>
                                  <td width='195'></td>
                                  <td width='190' align='center' style='text-align: center;'>
                                    <table width='190' cellpadding='0' cellspacing='0' align='center'>
                                      <tr>
                                        <td width='40'>
                                          <div class='contentEditableContainer contentFacebookEditable'>
                                            <div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
                                              <a href='https://www.facebook.com/miracle45625' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/fb.png' alt='facebook' width='32' height='32' data-max-width='40' data-customIcon='true' ></a>
                                            </div>
                                          </div>
                                        </td>
                                        <td width='10'></td>
                                        <td width='40'>
                                          <div class='contentEditableContainer contentTwitterEditable'>
                                            <div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
                                              <a href='https://twitter.com/team_mss' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/tweet.png' alt='twitter' width='32' height='32' data-max-width='40' data-customIcon='true'></a>
                                            </div>
                                          </div>
                                        </td>
                                        <td width='10'></td>
                                        <td width='40'>
                                          <div class='contentEditableContainer contentImageEditable'>
                                            <div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
                                              <a href='https://plus.google.com/+Team_MSS/posts' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/googleplus.png' alt='Pinterest' width='32' height='32' data-max-width='40'></a>
                                            </div>
                                          </div>
                                        </td>
                                        <td width='10'></td>
                                        <td width='40'>
                                          <div class='contentEditableContainer contentImageEditable'>
                                            <div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
                                              <a href='https://www.linkedin.com/company/miracle-software-systems-inc' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/linkedin.png' alt='Social media' width='32' height='32' data-max-width='40'></a>
                                            </div>
                                          </div>
                                        </td>
                                      </tr>
                                    </table>
                                  </td>
                                  <td width='195'></td>
                                </tr>
                                <tr>
                                  <td colspan='3' height='40'></td>
                                </tr>
                              </table>
                            </td>
                          </tr>
                        </table>
                      </div>
                      <div class='movableContent'>
                        <table width='100%' border='0' cellspacing='0' cellpadding='0' align='center'>
                          <tr>
                            <td style='background:#000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px' height='0'></td>
                          </tr>
                          <tr>
                        </table>
                      </div>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </body>
</html>
				
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
	/*method for Employee referal candidate acknolodgement
	 * 04/09/2015
	 *
	 */
	function sendEmployeeReferalAcknowldge($fname,$email){
		
		$mail	= new PHPMailer; // call the class
		$mail->IsSMTP();
		$mail->Host = SMTP_HOST; //Hostname of the mail server
		$mail->Port = SMTP_PORT; //Port of the SMTP like to be 25, 80, 465 or 587
		$mail->SMTPAuth = true; //Whether to use SMTP authentication
		$mail->SMTPSecure = SMTP_SECURE;
		$mail->Username = SMTP_UNAME; //Username for SMTP authentication any valid email created in your domain
		$mail->Password = SMTP_PWORD; //Password for SMTP authentication
		$mail->AddReplyTo($email, $fname); //reply-to address
		$mail->SetFrom("hubbleapp@miraclesoft.com", "Cas Team"); //From address of the mail
		// put your while loop here like below,
		$mail->Subject = "Thankyou!!"; //Subject od your mail
		//$mail->AddAddress("skola2@miraclesoft.com", "Santosh Kola"); //To address who will receive this email
		$mail->AddAddress($email, $fname); //To address who will receive this email
		//$mail->MsgHTML("<b>Hi, your first SMTP mail has been received. Great Job!.. <br/><br/>by <a href='http://www.asif18.com/7/php/send-mails-using-smtp-in-php-by-gmail-server-or-own-domain-server/'>Asif18</a></b>"); //Put your body of the message you can place html code here
		$mail->MsgHTML("<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
				<html xmlns='http://www.w3.org/1999/xhtml'>
				<head>
				<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
				<title>Employee Referral</title>
				<style type='text/css'>
				body {
				padding-top: 0 !important;
				padding-bottom: 0 !important;
				padding-top: 0 !important;
				padding-bottom: 0 !important;
				margin:0 !important;
				width: 100% !important;
				-webkit-text-size-adjust: 100% !important;
				-ms-text-size-adjust: 100% !important;
				-webkit-font-smoothing: antialiased !important;
	}
				.tableContent img {
				border: 0 !important;
				display: block !important;
				outline: none !important;
	}
				a{
				color:#382F2E;
	}
				p, h1,h2,ul,ol,li,div{
				margin:0;
				padding:0;
	}
				h1,h2{
				font-weight: normal;
				background:transparent !important;
				border:none !important;
	}
				.contentEditable h2.big,.contentEditable h1.big{
				font-size: 26px !important;
	}
				.contentEditable h2.bigger,.contentEditable h1.bigger{
				font-size: 37px !important;
	}
				td,table{
				vertical-align: top;
	}
				td.middle{
				vertical-align: middle;
	}
				a.link1{
				font-size:13px;
				color:#27A1E5;
				line-height: 24px;
				text-decoration:none;
	}
				a{
				text-decoration: none;
	}
				.link2{
				color:#fc3f3f;
				border-top:0px solid #fc3f3f;
				border-bottom:0px solid #fc3f3f;
				border-left:10px solid #fc3f3f;
				border-right:10px solid #fc3f3f;
				border-radius:1px;
				-moz-border-radius:5px;
				-webkit-border-radius:5px;
				background:#fc3f3f;
	}
				.link3{
				color:#555555;
				border:1px solid #cccccc;
				padding:10px 18px;
				border-radius:3px;
				-moz-border-radius:3px;
				-webkit-border-radius:3px;
				background:#ffffff;
	}
				.link4{
				color:#27A1E5;
				line-height: 24px;
	}
				h2,h1{
				line-height: 20px;
	}
				p{
				font-size: 14px;
				line-height: 21px;
				color:#AAAAAA;
	}
				.contentEditable li{
	}
				.appart p{
	}
				.bgItem{
				background:#ffffff;
	}
				.bgBody{
				background: #000000;
	}
				img {
				outline:none;
				text-decoration:none;
				-ms-interpolation-mode: bicubic;
				width: auto;
				max-width: 100%;
				clear: both;
				display: block;
				float: none;
	}
				</style>
				<script type='colorScheme' class='swatch active'>
				{
				'name':'Default',
				'bgBody':'ffffff',
				'link':'27A1E5',
				'color':'AAAAAA',
				'bgItem':'ffffff',
				'title':'444444'
	}
				</script>
				</head>
				<body paddingwidth='0' paddingheight='0' bgcolor='#d1d3d4'  style='padding-top: 0; padding-bottom: 0; padding-top: 0; padding-bottom: 0; background-repeat: repeat; width: 100% !important; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased;' offset='0' toppadding='0' leftpadding='0'>
				<table width='100%' border='0' cellspacing='0' cellpadding='0' class='tableContent bgBody' align='center'  style='font-family:Helvetica, sans-serif;'>
				<tr>
				<td align='center'>
				<table width='600' border='0' cellspacing='0' cellpadding='0' align='center' >
				<tr>
				<td class='bgItem' align='center'>
				<table width='600' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td class='movableContentContainer' align='center'>
				<div class='movableContent'>
				<table width='100%' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td style='background:#000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px' height='20'></td>
				</tr>
				<tr>
				<td style='background:#000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px'>
				<table width='650' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td width='130'>
				<div class='contentEditableContainer contentImageEditable'>
				<div class='contentEditable'>
				<a href='http://www.miraclesoft.com/index.php' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/logo.png' alt='Logo' width='70' height='45' data-default='placeholder' data-max-width='200'></a>
				</div>
				</div>
				</td>
				<td valign='middle' style='vertical-align: middle;'>
				</td>
				<td valign='middle' style='vertical-align: middle;' width='150'>
				<br>
				<table width='300' border='0' cellpadding='0' cellspacing='0' align='right' style='text-align: right; font-size: 13px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='fullCenter'>
				<tr>
				<td height='55' valign='middle' width='100%' style='font-family: Helvetica, Arial, sans-serif; color:#000000;'>
				<span style='font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;'><a href='http://www.miraclesoft.com' target='_blank' style='text-decoration: none; color:#ffffff;'class='underline' >Company</a></span>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style='font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;'><a href='http://www.miraclesoft.com/careers/careers.php' target='_blank' style='text-decoration: none; color:#ffffff;'class='underline' >Careers</a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</td>
				</tr>
				</table>
				</td>
				</tr>
				</table>
				</td>
				</tr>
				</table>
				</div>
				<div class='movableContent'>
				<table width='580' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td style='border: 5px solid #000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px'>
				<div class='movableContent'>
				<table width='650' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td style='background:#305983; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:px'>
				<table width='600' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td height='18'></td>
				</tr>
				<tr>
				<td>
				<div class='contentEditableContainer contentTextEditable'>
				<div class='contentEditable' style='text-align: left;'>
				<h2 style='font-size: 22px;'><font color='#FFffff' face='trebuchet ms'><b>Thank You</b></font></h2>
				<br>
				<p style='font-size: 20px;'>
				<font face='calibri'>
				<b></b>
				</p>
				</div>
				</div>
				</td>
				</tr>
				</table>
				</td>
				</tr>
				</table>
				</div>
				<table width='600' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr><td height='10'></td></tr>
				<tr>
				<td>
				<div class='contentEditableContainer contentTextEditable'>
				<div class='contentEditable' style='text-align: center;'>
				<br>
				<p style='text-align: justify; font-size: 14px;'><font color='#000000' face='trebuchet ms'><b>Hello $fname,</b><br><br>
				Thank You so much for referring a candidate to work with Miracle Software Systems, Inc. Your referral application is under process and one of our team members will call you back soon.
				
				<br><br><b>Thanks & Regards,</b>
				<br><b>Corporate Application Support Team,</b>
				<br> Miracle Software Systems, Inc.
				<br>45625 Grand River Avenue, Novi, MI(USA)
				<br><b>Email :</b> marketing@miraclesoft.com
				<br><b>Phone :</b> (+1)248-412-0426
				</font></p>
				<tr><td height='10'></td></tr></font></p>
				</div>
				</div>
				</td>
				</tr>
				<tr><td height='15'></td></tr>
				</table>
				<table width='600' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td>
				<div class='contentEditableContainer contentTextEditable'>
				<div class='contentEditable' style='text-align: center;'>
				<p style='text-align: justify; font-size: 14px;'><font color='#ff000' face='trebuchet ms'><i><b>*Note:</b> Do not reply to this email as this is an automated notification.</i>
				</font>
				</p>
				</div>
				</div>
				</td>
				</tr>
				<tr>
				<td height='25'></td>
				</tr>
				</table>
				</td>
				</tr>
				</table>
				</div>
				<div class='movableContent'>
				<table width='660' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td style='background:#000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px'>
				<table width='655' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td colspan='3' height='20'></td>
				</tr>
				<tr>
				<td width='90'></td>
				<td width='660'align='center' style='text-align: center;'>
				<table width='660' cellpadding='0' cellspacing='0' align='center'>
				<tr>
				<td>
				<div class='contentEditableContainer contentTextEditable'>
				<div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
				<p style='text-align: center; font-size: 14px;'><font color='#ffffff' face='trebuchet ms'>© Copyright ".date('Y')." Miracle Software Systems, Inc.<br>
                                                45625 Grand River Avenue<br> Novi, MI - USA
                                              </p>
                                            </div>
                                          </div>
                                        </td>
                                      </tr>
                                    </table>
                                  </td>
                                  <td width='90'></td>
                                </tr>
                              </table>
                              <table width='650' border='0' cellspacing='0' cellpadding='0' align='center'>
                                <tr>
                                  <td colspan='3' height='20'></td>
                                </tr>
                                <tr>
                                  <td width='195'></td>
                                  <td width='190' align='center' style='text-align: center;'>
                                    <table width='190' cellpadding='0' cellspacing='0' align='center'>
                                      <tr>
                                        <td width='40'>
                                          <div class='contentEditableContainer contentFacebookEditable'>
                                            <div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
                                              <a href='https://www.facebook.com/miracle45625' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/fb.png' alt='facebook' width='32' height='32' data-max-width='40' data-customIcon='true' ></a>
                                            </div>
                                          </div>
                                        </td>
                                        <td width='10'></td>
                                        <td width='40'>
                                          <div class='contentEditableContainer contentTwitterEditable'>
                                            <div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
                                              <a href='https://twitter.com/team_mss' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/tweet.png' alt='twitter' width='32' height='32' data-max-width='40' data-customIcon='true'></a>
                                            </div>
                                          </div>
                                        </td>
                                        <td width='10'></td>
                                        <td width='40'>
                                          <div class='contentEditableContainer contentImageEditable'>
                                            <div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
                                              <a href='https://plus.google.com/+Team_MSS/posts' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/googleplus.png' alt='Pinterest' width='32' height='32' data-max-width='40'></a>
                                            </div>
                                          </div>
                                        </td>
                                        <td width='10'></td>
                                        <td width='40'>
                                          <div class='contentEditableContainer contentImageEditable'>
                                            <div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
                                              <a href='https://www.linkedin.com/company/miracle-software-systems-inc' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/linkedin.png' alt='Social media' width='32' height='32' data-max-width='40'></a>
                                            </div>
                                          </div>
                                        </td>
                                      </tr>
                                    </table>
                                  </td>
                                  <td width='195'></td>
                                </tr>
                                <tr>
                                  <td colspan='3' height='40'></td>
                                </tr>
                              </table>
                            </td>
                          </tr>
                        </table>
                      </div>
                      <div class='movableContent'>
                        <table width='100%' border='0' cellspacing='0' cellpadding='0' align='center'>
                          <tr>
                            <td style='background:#000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px' height='0'></td>
                          </tr>
                          <tr>
                        </table>
                      </div>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </body>
</html>
				
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
	/*method for Employee verification Acknowledgement
	 * 04/09/2015
	 */
	function sendEmployeeVerificationAcknowldge($fname,$email,$remployeeName){
		
		$mail	= new PHPMailer; // call the class
		$mail->IsSMTP();
		$mail->Host = SMTP_HOST; //Hostname of the mail server
		$mail->Port = SMTP_PORT; //Port of the SMTP like to be 25, 80, 465 or 587
		$mail->SMTPAuth = true; //Whether to use SMTP authentication
		$mail->SMTPSecure = SMTP_SECURE;
		$mail->Username = SMTP_UNAME; //Username for SMTP authentication any valid email created in your domain
		$mail->Password = SMTP_PWORD; //Password for SMTP authentication
		//$mail->AddReplyTo($email, $fname); //reply-to address
		$mail->SetFrom("hubbleapp@miraclesoft.com", "Miracle Software Systems"); //From address of the mail
		// put your while loop here like below,
		$mail->Subject = "ThankYou!!"; //Subject od your mail
		//$mail->AddAddress("skola2@miraclesoft.com", "Santosh Kola"); //To address who will receive this email
		$mail->AddAddress($email, $fname); //To address who will receive this email
		$mail->AddBCC("vkandregula@miraclesoft.com", "Venkat Ram Prasad Kandregula");
		//$mail->MsgHTML("<b>Hi, your first SMTP mail has been received. Great Job!.. <br/><br/>by <a href='http://www.asif18.com/7/php/send-mails-using-smtp-in-php-by-gmail-server-or-own-domain-server/'>Asif18</a></b>"); //Put your body of the message you can place html code here
		$mail->MsgHTML("<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
				<html xmlns='http://www.w3.org/1999/xhtml'>
				<head>
				<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
				<title>Employee Verification</title>
				<style type='text/css'>
				body {
				padding-top: 0 !important;
				padding-bottom: 0 !important;
				padding-top: 0 !important;
				padding-bottom: 0 !important;
				margin:0 !important;
				width: 100% !important;
				-webkit-text-size-adjust: 100% !important;
				-ms-text-size-adjust: 100% !important;
				-webkit-font-smoothing: antialiased !important;
	}
				.tableContent img {
				border: 0 !important;
				display: block !important;
				outline: none !important;
	}
				a{
				color:#382F2E;
	}
				p, h1,h2,ul,ol,li,div{
				margin:0;
				padding:0;
	}
				h1,h2{
				font-weight: normal;
				background:transparent !important;
				border:none !important;
	}
				.contentEditable h2.big,.contentEditable h1.big{
				font-size: 26px !important;
	}
				.contentEditable h2.bigger,.contentEditable h1.bigger{
				font-size: 37px !important;
	}
				td,table{
				vertical-align: top;
	}
				td.middle{
				vertical-align: middle;
	}
				a.link1{
				font-size:13px;
				color:#27A1E5;
				line-height: 24px;
				text-decoration:none;
	}
				a{
				text-decoration: none;
	}
				.link2{
				color:#fc3f3f;
				border-top:0px solid #fc3f3f;
				border-bottom:0px solid #fc3f3f;
				border-left:10px solid #fc3f3f;
				border-right:10px solid #fc3f3f;
				border-radius:1px;
				-moz-border-radius:5px;
				-webkit-border-radius:5px;
				background:#fc3f3f;
	}
				.link3{
				color:#555555;
				border:1px solid #cccccc;
				padding:10px 18px;
				border-radius:3px;
				-moz-border-radius:3px;
				-webkit-border-radius:3px;
				background:#ffffff;
	}
				.link4{
				color:#27A1E5;
				line-height: 24px;
	}
				h2,h1{
				line-height: 20px;
	}
				p{
				font-size: 14px;
				line-height: 21px;
				color:#AAAAAA;
	}
				.contentEditable li{
	}
				.appart p{
	}
				.bgItem{
				background:#ffffff;
	}
				.bgBody{
				background: #000000;
	}
				img {
				outline:none;
				text-decoration:none;
				-ms-interpolation-mode: bicubic;
				width: auto;
				max-width: 100%;
				clear: both;
				display: block;
				float: none;
	}
				</style>
				<script type='colorScheme' class='swatch active'>
				{
				'name':'Default',
				'bgBody':'ffffff',
				'link':'27A1E5',
				'color':'AAAAAA',
				'bgItem':'ffffff',
				'title':'444444'
	}
				</script>
				</head>
				<body paddingwidth='0' paddingheight='0' bgcolor='#d1d3d4'  style='padding-top: 0; padding-bottom: 0; padding-top: 0; padding-bottom: 0; background-repeat: repeat; width: 100% !important; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased;' offset='0' toppadding='0' leftpadding='0'>
				<table width='100%' border='0' cellspacing='0' cellpadding='0' class='tableContent bgBody' align='center'  style='font-family:Helvetica, sans-serif;'>
				<tr>
				<td align='center'>
				<table width='600' border='0' cellspacing='0' cellpadding='0' align='center' >
				<tr>
				<td class='bgItem' align='center'>
				<table width='600' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td class='movableContentContainer' align='center'>
				<div class='movableContent'>
				<table width='100%' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td style='background:#000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px' height='20'></td>
				</tr>
				<tr>
				<td style='background:#000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px'>
				<table width='650' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td width='130'>
				<div class='contentEditableContainer contentImageEditable'>
				<div class='contentEditable'>
				<a href='http://www.miraclesoft.com/index.php' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/logo.png' alt='Logo' width='70' height='45' data-default='placeholder' data-max-width='200'></a>
				</div>
				</div>
				</td>
				<td valign='middle' style='vertical-align: middle;'>
				</td>
				<td valign='middle' style='vertical-align: middle;' width='150'>
				<br>
				<table width='300' border='0' cellpadding='0' cellspacing='0' align='right' style='text-align: right; font-size: 13px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='fullCenter'>
				<tr>
				<td height='55' valign='middle' width='100%' style='font-family: Helvetica, Arial, sans-serif; color:#000000;'>
				<span style='font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;'><a href='http://www.miraclesoft.com' target='_blank' style='text-decoration: none; color:#ffffff;'class='underline' >Company</a></span>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style='font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;'><a href='http://www.miraclesoft.com/careers/careers.php' target='_blank' style='text-decoration: none; color:#ffffff;'class='underline' >Careers</a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</td>
				</tr>
				</table>
				</td>
				</tr>
				</table>
				</td>
				</tr>
				</table>
				</div>
				<div class='movableContent'>
				<table width='580' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td style='border: 5px solid #000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px'>
				<div class='movableContent'>
				<table width='650' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td style='background:#305983; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:px'>
				<table width='600' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td height='18'></td>
				</tr>
				<tr>
				<td>
				<div class='contentEditableContainer contentTextEditable'>
				<div class='contentEditable' style='text-align: left;'>
				<h2 style='font-size: 22px;'><font color='#FFffff' face='trebuchet ms'><b>Thank You</b></font></h2>
				<br>
				<p style='font-size: 20px;'>
				<font face='calibri'>
				<b></b>
				</p>
				</div>
				</div>
				</td>
				</tr>
				</table>
				</td>
				</tr>
				</table>
				</div>
				<table width='600' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr><td height='10'></td></tr>
				<tr>
				<td>
				<div class='contentEditableContainer contentTextEditable'>
				<div class='contentEditable' style='text-align: center;'>
				<br>
				<p style='text-align: justify; font-size: 14px;'><font color='#000000' face='trebuchet ms'><b>Hello $fname,</b><br><br>
				Thank You so much for filling in the Employee Verification Form with Miracle Software Systems, Inc. Your application is under process and one of our Team Members will call you back to verify the employment details.
				
				<br><br><b>Thanks & Regards,</b>
				<br><b>Corporate Application Support Team,</b>
				<br> Miracle Software Systems, Inc.
				<br>45625 Grand River Avenue, Novi, MI(USA)
				<br><b>Email :</b> marketing@miraclesoft.com
				<br><b>Phone :</b> 91-891-6696666
				</font></p>
				<tr><td height='10'></td></tr></font></p>
				</div>
				</div>
				</td>
				</tr>
				<tr><td height='15'></td></tr>
				</table>
				<table width='600' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td>
				<div class='contentEditableContainer contentTextEditable'>
				<div class='contentEditable' style='text-align: center;'>
				<p style='text-align: justify; font-size: 14px;'><font color='#ff000' face='trebuchet ms'><i><b>*Note:</b> Do not reply to this email as this is an automated notification.</i>
				</font>
				</p>
				</div>
				</div>
				</td>
				</tr>
				<tr>
				<td height='25'></td>
				</tr>
				</table>
				</td>
				</tr>
				</table>
				</div>
				<div class='movableContent'>
				<table width='660' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td style='background:#000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px'>
				<table width='655' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td colspan='3' height='20'></td>
				</tr>
				<tr>
				<td width='90'></td>
				<td width='660'align='center' style='text-align: center;'>
				<table width='660' cellpadding='0' cellspacing='0' align='center'>
				<tr>
				<td>
				<div class='contentEditableContainer contentTextEditable'>
				<div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
				<p style='text-align: center; font-size: 14px;'><font color='#ffffff' face='trebuchet ms'>� Copyright ".date('Y')." Miracle Software Systems, Inc.<br>
                                                45625 Grand River Avenue<br> Novi, MI - USA
                                              </p>
                                            </div>
                                          </div>
                                        </td>
                                      </tr>
                                    </table>
                                  </td>
                                  <td width='90'></td>
                                </tr>
                              </table>
                              <table width='650' border='0' cellspacing='0' cellpadding='0' align='center'>
                                <tr>
                                  <td colspan='3' height='20'></td>
                                </tr>
                                <tr>
                                  <td width='195'></td>
                                  <td width='190' align='center' style='text-align: center;'>
                                    <table width='190' cellpadding='0' cellspacing='0' align='center'>
                                      <tr>
                                        <td width='40'>
                                          <div class='contentEditableContainer contentFacebookEditable'>
                                            <div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
                                              <a href='https://www.facebook.com/miracle45625' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/fb.png' alt='facebook' width='32' height='32' data-max-width='40' data-customIcon='true' ></a>
                                            </div>
                                          </div>
                                        </td>
                                        <td width='10'></td>
                                        <td width='40'>
                                          <div class='contentEditableContainer contentTwitterEditable'>
                                            <div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
                                              <a href='https://twitter.com/team_mss' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/tweet.png' alt='twitter' width='32' height='32' data-max-width='40' data-customIcon='true'></a>
                                            </div>
                                          </div>
                                        </td>
                                        <td width='10'></td>
                                        <td width='40'>
                                          <div class='contentEditableContainer contentImageEditable'>
                                            <div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
                                              <a href='https://plus.google.com/+Team_MSS/posts' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/googleplus.png' alt='Pinterest' width='32' height='32' data-max-width='40'></a>
                                            </div>
                                          </div>
                                        </td>
                                        <td width='10'></td>
                                        <td width='40'>
                                          <div class='contentEditableContainer contentImageEditable'>
                                            <div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
                                              <a href='https://www.linkedin.com/company/miracle-software-systems-inc' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/linkedin.png' alt='Social media' width='32' height='32' data-max-width='40'></a>
                                            </div>
                                          </div>
                                        </td>
                                      </tr>
                                    </table>
                                  </td>
                                  <td width='195'></td>
                                </tr>
                                <tr>
                                  <td colspan='3' height='40'></td>
                                </tr>
                              </table>
                            </td>
                          </tr>
                        </table>
                      </div>
                      <div class='movableContent'>
                        <table width='100%' border='0' cellspacing='0' cellpadding='0' align='center'>
                          <tr>
                            <td style='background:#000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px' height='0'></td>
                          </tr>
                          <tr>
                        </table>
                      </div>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </body>
</html>
				
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
	/* method for Acknowledging the Job Application
	 *
	 * 04/09/2015
	 */
	function sendJobApplicatinAcknowldge($fname,$email){
		
		$mail	= new PHPMailer; // call the class
		$mail->IsSMTP();
		$mail->Host = SMTP_HOST; //Hostname of the mail server
		$mail->Port = SMTP_PORT; //Port of the SMTP like to be 25, 80, 465 or 587
		$mail->SMTPAuth = true; //Whether to use SMTP authentication
		$mail->SMTPSecure = SMTP_SECURE;
		$mail->Username = SMTP_UNAME; //Username for SMTP authentication any valid email created in your domain
		$mail->Password = SMTP_PWORD; //Password for SMTP authentication
		$mail->AddReplyTo($email, $fname); //reply-to address
		$mail->SetFrom("hubbleapp@miraclesoft.com", "Cas Team"); //From address of the mail
		// put your while loop here like below,
		$mail->Subject = "Thankyou!!"; //Subject od your mail
		//$mail->AddAddress("skola2@miraclesoft.com", "Santosh Kola"); //To address who will receive this email
		$mail->AddAddress($email, $fname); //To address who will receive this email
		//$mail->MsgHTML("<b>Hi, your first SMTP mail has been received. Great Job!.. <br/><br/>by <a href='http://www.asif18.com/7/php/send-mails-using-smtp-in-php-by-gmail-server-or-own-domain-server/'>Asif18</a></b>"); //Put your body of the message you can place html code here
		$mail->MsgHTML("<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
				<html xmlns='http://www.w3.org/1999/xhtml'>
				<head>
				<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
				<title>Job Application</title>
				<style type='text/css'>
				body {
				padding-top: 0 !important;
				padding-bottom: 0 !important;
				padding-top: 0 !important;
				padding-bottom: 0 !important;
				margin:0 !important;
				width: 100% !important;
				-webkit-text-size-adjust: 100% !important;
				-ms-text-size-adjust: 100% !important;
				-webkit-font-smoothing: antialiased !important;
	}
				.tableContent img {
				border: 0 !important;
				display: block !important;
				outline: none !important;
	}
				a{
				color:#382F2E;
	}
				p, h1,h2,ul,ol,li,div{
				margin:0;
				padding:0;
	}
				h1,h2{
				font-weight: normal;
				background:transparent !important;
				border:none !important;
	}
				.contentEditable h2.big,.contentEditable h1.big{
				font-size: 26px !important;
	}
				.contentEditable h2.bigger,.contentEditable h1.bigger{
				font-size: 37px !important;
	}
				td,table{
				vertical-align: top;
	}
				td.middle{
				vertical-align: middle;
	}
				a.link1{
				font-size:13px;
				color:#27A1E5;
				line-height: 24px;
				text-decoration:none;
	}
				a{
				text-decoration: none;
	}
				.link2{
				color:#fc3f3f;
				border-top:0px solid #fc3f3f;
				border-bottom:0px solid #fc3f3f;
				border-left:10px solid #fc3f3f;
				border-right:10px solid #fc3f3f;
				border-radius:1px;
				-moz-border-radius:5px;
				-webkit-border-radius:5px;
				background:#fc3f3f;
	}
				.link3{
				color:#555555;
				border:1px solid #cccccc;
				padding:10px 18px;
				border-radius:3px;
				-moz-border-radius:3px;
				-webkit-border-radius:3px;
				background:#ffffff;
	}
				.link4{
				color:#27A1E5;
				line-height: 24px;
	}
				h2,h1{
				line-height: 20px;
	}
				p{
				font-size: 14px;
				line-height: 21px;
				color:#AAAAAA;
	}
				.contentEditable li{
	}
				.appart p{
	}
				.bgItem{
				background:#ffffff;
	}
				.bgBody{
				background: #000000;
	}
				img {
				outline:none;
				text-decoration:none;
				-ms-interpolation-mode: bicubic;
				width: auto;
				max-width: 100%;
				clear: both;
				display: block;
				float: none;
	}
				</style>
				<script type='colorScheme' class='swatch active'>
				{
				'name':'Default',
				'bgBody':'ffffff',
				'link':'27A1E5',
				'color':'AAAAAA',
				'bgItem':'ffffff',
				'title':'444444'
	}
				</script>
				</head>
				<body paddingwidth='0' paddingheight='0' bgcolor='#d1d3d4'  style='padding-top: 0; padding-bottom: 0; padding-top: 0; padding-bottom: 0; background-repeat: repeat; width: 100% !important; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased;' offset='0' toppadding='0' leftpadding='0'>
				<table width='100%' border='0' cellspacing='0' cellpadding='0' class='tableContent bgBody' align='center'  style='font-family:Helvetica, sans-serif;'>
				<tr>
				<td align='center'>
				<table width='600' border='0' cellspacing='0' cellpadding='0' align='center' >
				<tr>
				<td class='bgItem' align='center'>
				<table width='600' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td class='movableContentContainer' align='center'>
				<div class='movableContent'>
				<table width='100%' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td style='background:#000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px' height='20'></td>
				</tr>
				<tr>
				<td style='background:#000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px'>
				<table width='650' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td width='130'>
				<div class='contentEditableContainer contentImageEditable'>
				<div class='contentEditable'>
				<a href='http://www.miraclesoft.com/index.php' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/logo.png' alt='Logo' width='70' height='45' data-default='placeholder' data-max-width='200'></a>
				</div>
				</div>
				</td>
				<td valign='middle' style='vertical-align: middle;'>
				</td>
				<td valign='middle' style='vertical-align: middle;' width='150'>
				<br>
				<table width='300' border='0' cellpadding='0' cellspacing='0' align='right' style='text-align: right; font-size: 13px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='fullCenter'>
				<tr>
				<td height='55' valign='middle' width='100%' style='font-family: Helvetica, Arial, sans-serif; color:#000000;'>
				<span style='font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;'><a href='http://www.miraclesoft.com' target='_blank' style='text-decoration: none; color:#ffffff;'class='underline' >Company</a></span>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style='font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;'><a href='http://www.miraclesoft.com/careers/careers.php' target='_blank' style='text-decoration: none; color:#ffffff;'class='underline' >Careers</a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</td>
				</tr>
				</table>
				</td>
				</tr>
				</table>
				</td>
				</tr>
				</table>
				</div>
				<div class='movableContent'>
				<table width='580' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td style='border: 5px solid #000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px'>
				<div class='movableContent'>
				<table width='650' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td style='background:#305983; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:px'>
				<table width='600' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td height='18'></td>
				</tr>
				<tr>
				<td>
				<div class='contentEditableContainer contentTextEditable'>
				<div class='contentEditable' style='text-align: left;'>
				<h2 style='font-size: 22px;'><font color='#FFffff' face='trebuchet ms'><b>Thank You</b></font></h2>
				<br>
				<p style='font-size: 20px;'>
				<font face='calibri'>
				<b></b>
				</p>
				</div>
				</div>
				</td>
				</tr>
				</table>
				</td>
				</tr>
				</table>
				</div>
				<table width='600' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr><td height='10'></td></tr>
				<tr>
				<td>
				<div class='contentEditableContainer contentTextEditable'>
				<div class='contentEditable' style='text-align: center;'>
				<br>
				<p style='text-align: justify; font-size: 14px;'><font color='#000000' face='trebuchet ms'><b>Hello $fname,</b><br><br>
				Thank You so much for submitting your Job application with Miracle Software Systems, Inc. Your application is under process and one of our Team Members will call you back soon.
				
				<br><br><b>Thanks & Regards,</b>
				<br><b>Corporate Application Support Team,</b>
				<br> Miracle Software Systems, Inc.
				<br>45625 Grand River Avenue, Novi, MI(USA)
				<br><b>Email :</b> marketing@miraclesoft.com
				<br><b>Phone :</b> (+1)248-412-0426
				</font></p>
				<tr><td height='10'></td></tr></font></p>
				</div>
				</div>
				</td>
				</tr>
				<tr><td height='15'></td></tr>
				</table>
				<table width='600' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td>
				<div class='contentEditableContainer contentTextEditable'>
				<div class='contentEditable' style='text-align: center;'>
				<p style='text-align: justify; font-size: 14px;'><font color='#ff000' face='trebuchet ms'><i><b>*Note:</b> Do not reply to this email as this is an automated notification.</i>
				</font>
				</p>
				</div>
				</div>
				</td>
				</tr>
				<tr>
				<td height='25'></td>
				</tr>
				</table>
				</td>
				</tr>
				</table>
				</div>
				<div class='movableContent'>
				<table width='660' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td style='background:#000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px'>
				<table width='655' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td colspan='3' height='20'></td>
				</tr>
				<tr>
				<td width='90'></td>
				<td width='660'align='center' style='text-align: center;'>
				<table width='660' cellpadding='0' cellspacing='0' align='center'>
				<tr>
				<td>
				<div class='contentEditableContainer contentTextEditable'>
				<div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
				<p style='text-align: center; font-size: 14px;'><font color='#ffffff' face='trebuchet ms'>© Copyright ".date('Y')." Miracle Software Systems, Inc.<br>
                                                45625 Grand River Avenue<br> Novi, MI - USA
                                              </p>
                                            </div>
                                          </div>
                                        </td>
                                      </tr>
                                    </table>
                                  </td>
                                  <td width='90'></td>
                                </tr>
                              </table>
                              <table width='650' border='0' cellspacing='0' cellpadding='0' align='center'>
                                <tr>
                                  <td colspan='3' height='20'></td>
                                </tr>
                                <tr>
                                  <td width='195'></td>
                                  <td width='190' align='center' style='text-align: center;'>
                                    <table width='190' cellpadding='0' cellspacing='0' align='center'>
                                      <tr>
                                        <td width='40'>
                                          <div class='contentEditableContainer contentFacebookEditable'>
                                            <div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
                                              <a href='https://www.facebook.com/miracle45625' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/fb.png' alt='facebook' width='32' height='32' data-max-width='40' data-customIcon='true' ></a>
                                            </div>
                                          </div>
                                        </td>
                                        <td width='10'></td>
                                        <td width='40'>
                                          <div class='contentEditableContainer contentTwitterEditable'>
                                            <div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
                                              <a href='https://twitter.com/team_mss' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/tweet.png' alt='twitter' width='32' height='32' data-max-width='40' data-customIcon='true'></a>
                                            </div>
                                          </div>
                                        </td>
                                        <td width='10'></td>
                                        <td width='40'>
                                          <div class='contentEditableContainer contentImageEditable'>
                                            <div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
                                              <a href='https://plus.google.com/+Team_MSS/posts' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/googleplus.png' alt='Pinterest' width='32' height='32' data-max-width='40'></a>
                                            </div>
                                          </div>
                                        </td>
                                        <td width='10'></td>
                                        <td width='40'>
                                          <div class='contentEditableContainer contentImageEditable'>
                                            <div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
                                              <a href='https://www.linkedin.com/company/miracle-software-systems-inc' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/linkedin.png' alt='Social media' width='32' height='32' data-max-width='40'></a>
                                            </div>
                                          </div>
                                        </td>
                                      </tr>
                                    </table>
                                  </td>
                                  <td width='195'></td>
                                </tr>
                                <tr>
                                  <td colspan='3' height='40'></td>
                                </tr>
                              </table>
                            </td>
                          </tr>
                        </table>
                      </div>
                      <div class='movableContent'>
                        <table width='100%' border='0' cellspacing='0' cellpadding='0' align='center'>
                          <tr>
                            <td style='background:#000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px' height='0'></td>
                          </tr>
                          <tr>
                        </table>
                      </div>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </body>
</html>
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
	
	
	
	
	/*Method for Suggestion
	 * Author : Santosh Kola
	 * Date : 06/01/2015
	 */
	
	function sendSuggestionDetails($fname,$lname,$rsuggestions,$ranonymously){
		
		$mail	= new PHPMailer; // call the class
		$mail->IsSMTP();
		$mail->Host = SMTP_HOST; //Hostname of the mail server
		$mail->Port = SMTP_PORT; //Port of the SMTP like to be 25, 80, 465 or 587
		$mail->SMTPAuth = true; //Whether to use SMTP authentication
		$mail->SMTPSecure = SMTP_SECURE;
		$mail->Username = SMTP_UNAME; //Username for SMTP authentication any valid email created in your domain
		$mail->Password = SMTP_PWORD; //Password for SMTP authentication
		$mail->AddReplyTo($email, $fname); //reply-to address
		$mail->SetFrom("hubbleapp@miraclesoft.com", "Cas Team"); //From address of the mail
		// put your while loop here like below,
		$mail->Subject = "Suggestions from Website"; //Subject od your mail
		//$mail->AddAddress("skola2@miraclesoft.com", "Santosh Kola"); //To address who will receive this email
		// $mail->AddAddress(CONTACT_US, "info"); //To address who will receive this email
		$myArray = explode(';', SUGGESTIONS_ADDRESS);
		for ($i = 0; $i < count($myArray); ++$i) {
			$innerArray = explode(',', $myArray[$i]);
			$mail->AddAddress($innerArray[0], $innerArray[1]);
		}
		
		
		$bodyContent = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
  <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
  <title>Suggestion Box</title>
  <style type='text/css'>
				
				
  body {
   padding-top: 0 !important;
   padding-bottom: 0 !important;
   padding-top: 0 !important;
   padding-bottom: 0 !important;
   margin:0 !important;
   width: 100% !important;
   -webkit-text-size-adjust: 100% !important;
   -ms-text-size-adjust: 100% !important;
   -webkit-font-smoothing: antialiased !important;
 }
 .tableContent img {
   border: 0 !important;
   display: block !important;
   outline: none !important;
 }
 a{
  color:#382F2E;
}
				
p, h1,h2,ul,ol,li,div{
  margin:0;
  padding:0;
}
				
h1,h2{
  font-weight: normal;
  background:transparent !important;
  border:none !important;
}
				
.contentEditable h2.big,.contentEditable h1.big{
  font-size: 26px !important;
}
				
 .contentEditable h2.bigger,.contentEditable h1.bigger{
  font-size: 37px !important;
}
				
td,table{
  vertical-align: top;
}
td.middle{
  vertical-align: middle;
}
				
a.link1{
  font-size:13px;
  color:#27A1E5;
  line-height: 24px;
  text-decoration:none;
}
a{
  text-decoration: none;
}
				
.link2{
color:#fc3f3f;
border-top:0px solid #fc3f3f;
border-bottom:0px solid #fc3f3f;
border-left:10px solid #fc3f3f;
border-right:10px solid #fc3f3f;
border-radius:1px;
-moz-border-radius:5px;
-webkit-border-radius:5px;
background:#fc3f3f;
}
				
.link3{
color:#555555;
border:1px solid #cccccc;
padding:10px 18px;
border-radius:3px;
-moz-border-radius:3px;
-webkit-border-radius:3px;
background:#ffffff;
}
				
.link4{
color:#27A1E5;
line-height: 24px;
}
				
h2,h1{
line-height: 20px;
}
p{
  font-size: 14px;
  line-height: 21px;
  color:#AAAAAA;
}
				
.contentEditable li{
				
}
				
.appart p{
				
}
.bgItem{
background:#ffffff;
}
.bgBody{
background: #000000;
}
				
img {
  outline:none;
  text-decoration:none;
  -ms-interpolation-mode: bicubic;
  width: auto;
  max-width: 100%;
  clear: both;
  display: block;
  float: none;
}
				
				
				
</style>
				
				
<script type='colorScheme' class='swatch active'>
{
    'name':'Default',
    'bgBody':'ffffff',
    'link':'27A1E5',
    'color':'AAAAAA',
    'bgItem':'ffffff',
    'title':'444444'
}
</script>
				
				
</head>
<body paddingwidth='0' paddingheight='0' bgcolor='#d1d3d4'  style='padding-top: 0; padding-bottom: 0; padding-top: 0; padding-bottom: 0; background-repeat: repeat; width: 100% !important; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased;' offset='0' toppadding='0' leftpadding='0'>
  <table width='100%' border='0' cellspacing='0' cellpadding='0' class='tableContent bgBody' align='center'  style='font-family:Helvetica, sans-serif;'>
				
				
  <tr>
    <td align='center'>
      <table width='600' border='0' cellspacing='0' cellpadding='0' align='center' >
      <tr>
      <td class='bgItem' align='center'>
      <table width='600' border='0' cellspacing='0' cellpadding='0' align='center'>
        <tr>
          <td class='movableContentContainer' align='center'>
            <div class='movableContent'>
              <table width='100%' border='0' cellspacing='0' cellpadding='0' align='center'>
                <tr><td style='background:#000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px' height='30'></td></tr>
                <tr>
                  <td style='background:#000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px'>
                    <table width='650' border='0' cellspacing='0' cellpadding='0' align='center'>
                      <tr>
                        <td width='130'>
                          <div class='contentEditableContainer contentImageEditable'>
                            <div class='contentEditable'>
                              <a href='http://www.miraclesoft.com/index.php' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/logo.png' alt='Logo' width='70' height='45' data-default='placeholder' data-max-width='200'></a>
				
                            </div>
                          </div>
                        </td>
				
                        <td valign='middle' style='vertical-align: middle;'>
                        </td>
				
                        <td valign='middle' style='vertical-align: middle;' width='150'></br>
                          <table width='300' border='0' cellpadding='0' cellspacing='0' align='right' style='text-align: right; font-size: 13px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='fullCenter'>
										<tr>
											<td height='55' valign='middle' width='100%' style='font-family: Helvetica, Arial, sans-serif; color:#000000;'>
												<span style='font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;'><a href='http://www.miraclesoft.com' target='_blank' style='text-decoration: none; color:#ffffff;'class='underline' >Company</a></span>
												&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style='font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;'><a href='http://www.miraclesoft.com/careers/careers.php' target='_blank' style='text-decoration: none; color:#ffffff;'class='underline' >Careers</a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											</td>
										</tr>
									</table>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
            </div>
				
				
            <div class='movableContent'>
			<table width='580' border='0' cellspacing='0' cellpadding='0' align='center'>
				
                <tr>
                  <td style='border: 5px solid #000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px'>
		   <div class='movableContent'>
              <table width='650' border='0' cellspacing='0' cellpadding='0' align='center'>
                <tr>
                  <td style='background:#305983; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:px'>
				
                    <table width='600' border='0' cellspacing='0' cellpadding='0' align='center'>
                      <tr><td height='18'></td></tr>
                      <tr>
                        <td>
                          <div class='contentEditableContainer contentTextEditable'>
                            <div class='contentEditable' style='text-align: left;'>
                              <h2 style='font-size: 22px;'><font color='#FFffff' face='trebuchet ms'><b>Suggestion Box</b></font></h2>
                              <br>
				
                              </div>
                          </div>
                        </td>
                      </tr>
				
					 </table>
				
                  </td>
                </tr>
				
              </table>
            </div>
                    <table width='600' border='0' cellspacing='0' cellpadding='0' align='center'>
                      <tr><td height='10'></td></tr>
                      <tr>
                        <td>
                          <div class='contentEditableContainer contentTextEditable'>
                            <div class='contentEditable' style='text-align: center;'>
				
                              <br>
                              <p style='text-align: justify; font-size: 14px;'><font color='#000000' face='trebuchet ms'><b>Hello Team,</b>
							  <br></br>";
		if($ranonymously==0){
			$bodyContent = $bodyContent."You have received a suggestion from <b>$fname $lname</b>, can you please find it out below and provide an appropriate solution for it.";
		}else {
			$bodyContent = $bodyContent."You have received a suggestion from <b>anonymous user</b>, can you please find it out below and provide an appropriate solution for it.";
		}
		
		
		
		
		$bodyContent = $bodyContent."<br><br> $rsuggestions <br>
		<br></font></p>
		
		
		<p style='text-align: justify; font-size: 14px;'><font color='#000000' face='trebuchet ms'><b>Thanks & Regards,</b><br>
		<b>Corporate Application Support Team,</b><br>
		Miracle Software Systems, Inc.<br>
		45625 Grand River Avenue, Novi, MI(USA)<br>
		<b>Email :</b> marketing@miraclesoft.com<br>
		<b>Phone :</b> (+1)248-412-0426
		</font></p><br>
		<p style='text-align: justify; font-size: 14px;'><font color='#ff0000' face='trebuchet ms'><i><b>*Note:</b> Do not reply to this email as this is an automated notification.</i></font></p>
		<br>
		
		</div>
		</div>
		</td>
		</tr>
		<tr><td height='9'></td></tr>
		
		</table>
		</td>
		</tr>
		</table>
		</div>
		
		
		<div class='movableContent'>
		<table width='660' border='0' cellspacing='0' cellpadding='0' align='center'>
		<tr>
		<td style='background:#000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px'>
		<table width='655' border='0' cellspacing='0' cellpadding='0' align='center'>
		<tr><td colspan='3' height='20'></td></tr>
		<tr>
		<td width='90'></td>
		<td width='660'align='center' style='text-align: center;'>
		<table width='660' cellpadding='0' cellspacing='0' align='center'>
		<tr>
		<td>
		<div class='contentEditableContainer contentTextEditable'>
		<div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
		<p style='text-align: center; font-size: 14px;'><font color='#ffffff' face='trebuchet ms'>� Copyright ".date('Y')." Miracle Software Systems, Inc.</br>
							  45625 Grand River Avenue</br> Novi, MI - USA</p>
				
                            </div>
                          </div>
                        </td>
                      </tr>
                    </table>
                  </td>
                  <td width='90'></td>
                </tr>
              </table>
			  <table width='650' border='0' cellspacing='0' cellpadding='0' align='center'>
                <tr><td colspan='3' height='20'></td></tr>
                <tr>
                  <td width='195'></td>
                  <td width='190' align='center' style='text-align: center;'>
                    <table width='190' cellpadding='0' cellspacing='0' align='center'>
                      <tr>
                        <td width='40'>
                          <div class='contentEditableContainer contentFacebookEditable'>
                            <div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
                              <a href='https://www.facebook.com/miracle45625' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/fb.png' alt='facebook' width='32' height='32' data-max-width='40' data-customIcon='true' ></a>
                            </div>
                          </div>
                        </td>
                        <td width='10'></td>
                        <td width='40'>
                          <div class='contentEditableContainer contentTwitterEditable'>
                            <div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
                              <a href='https://twitter.com/team_mss' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/tweet.png' alt='twitter' width='32' height='32' data-max-width='40' data-customIcon='true'></a>
                            </div>
                          </div>
                        </td>
                        <td width='10'></td>
                        <td width='40'>
                          <div class='contentEditableContainer contentImageEditable'>
                            <div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
                              <a href='https://plus.google.com/+Team_MSS/posts' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/googleplus.png' alt='Pinterest' width='32' height='32' data-max-width='40'></a>
                            </div>
                          </div>
                        </td>
                        <td width='10'></td>
                        <td width='40'>
                          <div class='contentEditableContainer contentImageEditable'>
                            <div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
                              <a href='https://www.linkedin.com/company/miracle-software-systems-inc' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/linkedin.png' alt='Social media' width='32' height='32' data-max-width='40'></a>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </table>
                  </td>
                  <td width='195'></td>
                </tr>
                <tr><td colspan='3' height='40'></td></tr>
              </table>
				
                  </td>
                </tr>
              </table>
            </div>
			<div class='movableContent'>
              <table width='100%' border='0' cellspacing='0' cellpadding='0' align='center'>
                <tr><td style='background:#000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px' height='0'></td></tr>
                <tr>
				</table>
				</div>
				
				
          </td>
        </tr>
      </table>
      </td>
      </tr>
      </table>
    </td>
  </tr>
</table>
</body>
  </html>
";
		
		
		
		
		
		
		//$mail->MsgHTML("<b>Hi, your first SMTP mail has been received. Great Job!.. <br/><br/>by <a href='http://www.asif18.com/7/php/send-mails-using-smtp-in-php-by-gmail-server-or-own-domain-server/'>Asif18</a></b>"); //Put your body of the message you can place html code here
		$mail->MsgHTML($bodyContent); //Put your body of the message you can place html code here
		
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
	
	/*Method For Atlanta Office Opening Attendi Acknowledgement
	 * Date : 10/05/2015
	 * Author : Santosh Kola
	 */
	
	function sendAtlantaAttendeeAcknowledgement($fullName1,$emailId1,$emailId2,$addFlag,$fullName2){
		
		$mail	= new PHPMailer; // call the class
		$mail->IsSMTP();
		$mail->Host = SMTP_HOST; //Hostname of the mail server
		$mail->Port = SMTP_PORT; //Port of the SMTP like to be 25, 80, 465 or 587
		$mail->SMTPAuth = true; //Whether to use SMTP authentication
		$mail->SMTPSecure = SMTP_SECURE;
		$mail->Username = SMTP_UNAME; //Username for SMTP authentication any valid email created in your domain
		$mail->Password = SMTP_PWORD; //Password for SMTP authentication
		$mail->AddReplyTo("marketing@miraclesoft.com", "Marketing Team"); //reply-to address
		$mail->SetFrom("marketing@miraclesoft.com", " Miracle Software Systems, Inc."); //From address of the mail
		// put your while loop here like below,
		$mail->Subject = "Miracle in Atlanta : Thank you!!"; //Subject od your mail
		//$mail->AddAddress("skola2@miraclesoft.com", "Santosh Kola"); //To address who will receive this email
		// $mail->AddAddress(CONTACT_US, "info"); //To address who will receive this email
		
		$mail->AddAddress($emailId1, $fullName1);
		if($addFlag==1){
			if(strlen($emailId2)>0)
				$mail->AddAddress($emailId2, $fullName2);
		}
		$bodyContent = "<html xmlns='http://www.w3.org/1999/xhtml'>
		<head>
		<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
		<meta name='viewport' content='width=device-width; initial-scale=1.0; maximum-scale=1.0;'>
		<link href='http://fonts.googleapis.com/css?family=calibri:300,400,700' rel='stylesheet' type='text/css'>
		<title>
		Atlanta Office Opening
		</title>
		<style type='text/css'>
		html
		{
		width: 100%;
	}
	::-moz-selection{
	background:#fefac7;
	color:#4a4a4a;
	}
	::selection{
	background:#fefac7;
	color:#4a4a4a;
	}
	body {
	margin: 0;
	padding: 0;
	}
	.ReadMsgBody
	{
	width: 100%;
	background-color: #f1f1f1;
	}
	.ExternalClass
	{
	width: 100%;
	background-color: #f1f1f1;
	}
	a {
	color:#ef4048;
	text-decoration: none;
	font-weight: normal;
	font-style: normal;
	}
	p, div, span {
	margin: 0 !important;
	}
	table {
	border-collapse: collapse;
	}
	@media only screen and (max-width: 640px)  {
	body {
	width: auto !important;
	}
	body table table{
	width:100% !important;
	}
	body table[class='table-wrapper'] {
	width: auto !important;
	margin: 0px 20px !important;
	}
	body table[class='table-inner'] {
	width: 100% !important;
	margin: 0 auto !important;
	}
	body table[class='full'] {
	width: 100% !important;
	margin: 0 auto !important;
	}
	body table[class='center'] {
	margin: 0 auto !important;
	}
	body td[class='center'] {
	text-align: center !important;
	}
	body td[class='rewrite_padding'] {
	padding:0px !important;
	border-left: none !important;
	}
	body img[class='img_scale'] {
	width: 100% !important;
	height: auto !Important;
	}
	body img[class='divider'] {
	width: 100% !important;
	height: 2px !Important;
	}
	}
	@media only screen and (max-width: 479px)  {
	body {
	width: auto !important;
	}
	body table table{
	width:100% !important;
	}
	body table[class='table-wrapper'] {
	width: auto !important;
	margin: 0px 20px !important;
	}
	body table[class='table-inner'] {
	width: 100% !important;
	margin: 0 auto !important;
	}
	body table[class='full'] {
	width: 100% !important;
	margin: 0 auto !important;
	}
	body table[class='center'] {
	margin: 0 auto !important;
	}
	body td[class='center'] {
	text-align: center !important;
	}
	body td[class='rewrite_padding'] {
	padding:0px !important;
	border-left: none !important;
	}
	body img[class='img_scale'] {
	width: 100% !important;
	height: auto !Important;
	}
	body img[class='divider'] {
	width: 100% !important;
	height: 2px !Important;
	}
	body td[class='one_third'] {
	width: 100% !important;
	display: block !important;
	padding-bottom: 20px;
	margin: 0 auto !important;
	text-align: center !important;
	}
	body td[class='one_third_last'] {
	width: 100% !important;
	display: block !important;
	margin: 0 auto !important;
	text-align: center !important;
	}
	}
	div.preheader{
	line-height:0px;
	font-size:0px;
	height:0px;
	display:none !important;
	display:none;
	visibility:hidden;
	}
	table.textbutton td{
	display:block;
	text-align: center;
	}
	table.textbutton a {
	text-decoration: none;
	font-style: normal;
	font-weight: normal;
	color:#ffffff;
	}
	table.whitebutton td{
	display:block}
	a.white_links {
	color:#ffffff;
	font-weight: normal;
	text-decoration: none;
	}
	a.heading_links {
	text-decoration: none;
	font-style: normal;
	font-weight: normal;
	color:#333333;
	font-family: 'calibri' !important;
	}
	td.footer_links a{
	text-decoration: none;
	font-style: normal;
	font-weight: normal;
	color:#7a7a7a;
	font-family: 'calibri' !important;
	}
	span,
	a {
	font-family: 'calibri' !important;
	}
	</style>
	</head>
	<body>
	<modules>
	<module label='header'>
	<table style='background-color: #b3b2b7;' align='center' border='0' cellpadding='0' cellspacing='0' width='100%'>
	<tbody>
	<tr>
	<td valign='top' width='100%'>
	<table width='50%' border='0' align='center'>
	<tbody>
	<tr>
	<td height='25'>
	</td>
	</tr>
	</tbody>
	</table>
	<modules>
	<module label='header'>
	<table style='background-color: #b3b2b7;' align='center' border='0' cellpadding='0' cellspacing='0' width='100%'>
	<tbody>
	<tr>
	<td valign='top' width='100%'>
	<table width='50%' bgcolor='#333333' border='0' background='http://www.miraclesoft.com/images/newsletters/bg-image-1.png' align='center' style='background-image: url(http://www.miraclesoft.com/images/newsletters/bg-image-1.png); border-radius : 20px 20px 0px 0px; background-position: center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; '>
	<tbody>
	<tr>
	<td valign='top' align='center'>
	<table class='table-wrapper' width='660' border='0' align='center' cellpadding='0' cellspacing='0'>
	<tbody>
	<tr>
	<td style='padding: 15px 20px;'>
	<table class='table-inner' width='640' border='0' align='center' cellpadding='0' cellspacing='0'>
	<tbody>
	<tr>
	<td valign='top'>
	<table class='full' width='640' border='0' align='left' cellpadding='0' cellspacing='0' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;'>
	<tbody>
	<tr>
	<td class='one_third' width='230' align='left' valign='middle' style=' margin: 0;font-weight: normal; font-size:14px ; color:#ffffff; font-family: 'calibri'; line-height: 18px;mso-line-height-rule: exactly;'>
	<multi>
	<span>
	</span>
	</multi>
	</td>
	<td class='one_third' width='180' align='center' valign='top' style=''>
	<span>
	<a href='http://www.miraclesoft.com/' target='blank' style='color:#ef4048;'>
	<img editable='' label='logo' src='http://www.miraclesoft.com/images/newsletters/logo.png' alt='logo' width='150' height='auto' border='0' style='display: inline-block;'>
	</a>
	</span>
	</td>
	<td class='one_third_last' width='230' align='right' valign='middle' style=' margin: 0;font-weight: normal; font-size:14px ; color:#ffffff; font-family: 'calibri'; line-height: 18px;mso-line-height-rule: exactly;'>
	<span>
	<a class='white_links' href='http://www.miraclesoft.com/library' target='blank' style='color:#ffffff; font-weight: normal; text-decoration: none;'>
	</a>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a class='white_links' href='http://www.miraclesoft.com/events' target='blank' style='color:#ffffff; font-weight: normal; text-decoration: none;'>
	</a>
	</span>
	</td>
	</tr>
	
	
	
	</tbody>
	</table>
	</td>
	</tr>
	</tbody>
	</table>
	</td>
	</tr>
	</tbody>
	</table>
	</td>
	</tr>
	</tbody>
	</table>
	</td>
	</tr>
	</tbody>
	</table>
	<modules>
	<module label='header'>
	<table style='background-color: #b3b2b7;' align='center' border='0' cellpadding='0' cellspacing='0' width='100%'>
	<tbody>
	<tr>
	<td valign='top' width='100%'>
	<table width='50%' bgcolor='#ededed' border='0' align='center'>
	<tbody>
	
	
	
	
	
	
	</tbody>
	</table>
	</td>
	</tr>
	</tbody>
	</table>
	</module>
	</modules>
	</module>
	</modules>
	</td>
	</tr>
	</tbody>
	</table>
	
	
	
	
	<module label='1 column article'>
	<table style='background-color: #b3b2b7;' align='center' border='0' cellpadding='0' cellspacing='0' width='100%'>
	<tbody>
	<tr>
	<td valign='top' width='100%'>
	<table width='50%' bgcolor='#ffffff' border='0' align='center'>
	<tbody>
	<tr>
	<td height='10' style='padding:0; line-height: 0;'>
	&nbsp;
	</td>
	</tr>
	<tr>
	<td valign='top' align='center'>
	<table class='table-wrapper' width='660' border='0' align='center' cellpadding='0' cellspacing='0'>
	<tbody>
	<tr>
	<td style='padding: 0px 20px;'>
	<table class='table-inner' width='640' border='0' align='center' cellpadding='0' cellspacing='0'>
	<tbody>
	<tr>
	<td valign='top'>
	<table class='full' width='640' border='0' align='left' cellpadding='0' cellspacing='0' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;'>
	<tbody>
	<tr>
	<td align='justify' valign='top' style='margin: 0; padding-top: 5px; font-size:16px ; font-weight: normal; color:#8c8c8c; font-family: 'calibri'; line-height: 180%;  mso-line-height-rule: exactly;'>
	<multi>
	<span>
	<b>
	Hello $fullName1,
	</b>
	</span>
	</multi>
	</td>
	</tr>
	
	<tr>
	<td height='10' style='padding:0; line-height: 0;'>
	&nbsp;
	</td>
	</tr>
	<tr>
	<td align='justify' valign='top' style='margin: 0; padding-top: 5px; font-size:16px ; font-weight: normal; color:#8c8c8c; font-family: 'calibri'; line-height: 180%;  mso-line-height-rule: exactly;'>
	<multi>
	<span>
	Thank you for RSVP'ing for our opening celebrations at our Center for Digital Transformation at Atlanta. We look forward to seeing you there, as we start our journey in the South East. Please find the details of the event below for your reference.
	</span>
	</multi>
	</td>
	</tr>
	
	<tr>
	<td height='10' style='padding:0; line-height: 0;'>
	&nbsp;
	</td>
	</tr>
	<tr>
	<td style='text-align: justify; font-family: calibri; font-size: 17px; color: #232527; line-height:200%; font-weight: normal;' class='fullCenter' valign='top' width='100%'>
	<span style='font-family: calibri; font-size: 16px; color:#ef4048; font-weight: normal;'>
	<b>
	Venue :
	</b>
	</span>
	<span style='font-family: calibri; font-size: 16px; color:#8c8c8c; font-weight: normal;'>
	6465 East Johns Crossing , Suit 315
	Johns Creek GA 30097
	</span>
	<br>
	<span style='font-family: calibri; font-size: 17px; color:#ef4048; font-weight: normal;'>
	<b>
	Time :
	</b>
	</span>
	<span style='font-family: calibri; font-size: 16px; color:#8c8c8c; font-weight: normal;'>
	11:30 AM EST
	</span>
	<br>
	<span style='font-family: calibri; font-size: 17px; color:#ef4048; font-weight: normal;'>
	<b>
	Date :
	</b>
	</span>
	<span style='font-family: calibri; font-size: 16px; color:#8c8c8c; font-weight: normal;'>
	October 16th, 2015(Friday)
	</span>
	
	
	
	
	
	</td>
	</tr>
	
	
	<tr>
	<td align='left' valign='top' style='padding-top: 10px;'>
	<table class='textbutton' border='0' align='left' cellpadding='0' cellspacing='0' style='margin: 0;'>
	<tbody>
	
	<tr>
	<td bgcolor='#ef4048' align='center' valign='middle' style='display: inline-blosck; border-radius:20px; padding: 8px 20px; font-weight: normal; font-size: 15px; line-height: 100%; font-family: 'calibri'; color:#ffffff; margin: 0 !important; mso-line-height-rule: exactly;'>
	<span>
	<a editable='' label='text button' href='https://www.google.com/maps/dir//6465+E+Johns+Crossing+%23315,+Duluth,+GA+30097,+USA/@34.0624409,-84.2414185,12z/data=!3m1!4b1!4m8!4m7!1m0!1m5!1m1!1s0x88f5992100c3e58d:0x66ce19eb7db71c3a!2m2!1d-84.1676014!2d34.062463' target='blank' style='text-decoration: none; font-style: normal; font-weight: normal; color:#ffffff;'>
	Get Directions
	</a>
	</span>
	</td>
	</tr>
	</tbody>
	</table>
	</td>
	</tr>
	
	<tr>
	<td height='10' style='padding:0; line-height: 0;'>
	&nbsp;
	</td>
	</tr>
	<tr>
	<td align='justify' valign='top' style='margin: 0; padding-top: 5px; font-size:15px ; font-weight: normal; color:#8c8c8c; font-family: 'calibri'; line-height: 180%;  mso-line-height-rule: exactly;'>
	<multi>
	<span>
	<b>
	Thanks &amp; Regards,
	</b>
	<br>
	<b>
	Marketing Team,
	</b>
	<br>
	Miracle Software Systems, Inc.
	<br>
	45625 Grand River Avenue, Novi, MI(USA)
	<br>
	<b>
	Email :
	</b>
	marketing@miraclesoft.com
	<br>
	<b>
	Phone :
	</b>
	(+1)248-233-1885
	</span>
	</multi>
	</td>
	</tr>
	</tbody>
	</table>
	</td>
	</tr>
	</tbody>
	</table>
	</td>
	</tr>
	</tbody>
	</table>
	</td>
	</tr>
	<tr>
	<td height='20' style='padding:0; line-height: 0;'>
	&nbsp;
	</td>
	</tr>
	</tbody>
	</table>
	
	<modules>
	<module label='header'>
	<table style='background-color: #b3b2b7;' align='center' border='0' cellpadding='0' cellspacing='0' width='100%'>
	<tbody>
	
	
	</tbody>
	</table>
	<module label='1 column article'>
	<table style='background-color: #b3b2b7;' align='center' border='0' cellpadding='0' cellspacing='0' width='100%'>
	<tbody>
	<tr>
	<td valign='top' width='100%'>
	<table width='50%' bgcolor='#232527' border='0' align='center' style='border-radius : 0px 0px 20px 20px;'>
	<tbody>
	<tr>
	
	</tr>
	<tr>
	<td valign='top' align='center'>
	<table class='table-wrapper' width='660' border='0' align='center' cellpadding='0' cellspacing='0'>
	<tbody>
	<tr>
	<td style='padding: 0px 20px;'>
	<table class='table-inner' width='640' border='0' align='center' cellpadding='0' cellspacing='0'>
	<tbody>
	<tr>
	<td valign='top' style='padding-bottom: 10px;'>
	<table class='full' width='640' border='0' align='center' cellpadding='0' cellspacing='0' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;'>
	<tbody>
	
	</tbody>
	</table>
	<table width='1' border='0' align='left' cellpadding='0' cellspacing='0' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;'>
	<tbody>
	<tr>
	<td width='100%' height='20' style='line-height:0;'>
	&nbsp;
	</td>
	</tr>
	</tbody>
	</table>
	<table class='full' width='640' border='0' align='center' cellpadding='0' cellspacing='0' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;'>
	<tbody>
	<tr>
	<td align='center' style='font-size:14px ; font-weight: normal; color:#ffffff; font-family: 'trebuchet ms'; line-height: 100%;'>
	<span>
	<a href='https://www.linkedin.com/company/miracle-software-systems-inc' target='blank' style='color:#ef4048; text-decoration: none;'>
	<img src='http://www.miraclesoft.com/images/newsletters/ln.png' alt='twitter' width='25' height='auto' border='0' style=' display: inline-block;'>
	</a>
	&nbsp;&nbsp;&nbsp;
	<a href='https://plus.google.com/+Team_MSS' target='blank' style='color:#ef4048; text-decoration: none;'>
	<img src='http://www.miraclesoft.com/images/newsletters/gs.png' alt='pinterest' width='25' height='auto' border='0' style='display: inline-block;'>
	</a>
	&nbsp;&nbsp;&nbsp;
	<a href='https://facebook.com/miracle45625' target='blank' style='color:#ef4048; text-decoration: none;'>
	<img src='http://www.miraclesoft.com/images/newsletters/fk.png' alt='facebook' width='25' height='auto' border='0' style='display: inline-block;'>
	</a>
	&nbsp;&nbsp;&nbsp;
	<a href='https://twitter.com/Team_MSS' target='blank' style='color:#ef4048; text-decoration: none;'>
	<img src='http://www.miraclesoft.com/images/newsletters/tr.png' alt='instagram' width='25' height='auto' border='0' style=' display: inline-block;'>
	</a>
	&nbsp;&nbsp;&nbsp;
	<a href='https://www.youtube.com/c/Team_MSS' target='blank' style='color:#ef4048; text-decoration: none;'>
	<img src='http://www.miraclesoft.com/images/newsletters/ye.png' alt='dribbble' width='25' height='auto' border='0' style='display: inline-block;'>
	</a>
	&nbsp;&nbsp;&nbsp;
	<a href='https://www.flickr.com/photos/team_miracle' target='blank' style='color:#ef4048; text-decoration: none;'>
	<img src='http://www.miraclesoft.com/images/newsletters/fr.png' alt='linkedin' width='25' height='auto' border='0' style=' display: inline-block;'>
	</a>
	</span>
	</td>
	</tr>
	</tbody>
	</table>
	</td>
	</tr>
	<tr>
	<td valign='top'>
	<table class='full' width='640' border='0' align='center' cellpadding='0' cellspacing='0' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;'>
	<tbody>
	<tr>
	<td class='footer_links' align='center' valign='top' style='margin: 0; padding-bottom: 0; font-size:14px ; font-weight: normal; color:#8c8c8c; font-family: 'calibri'; line-height: 180%;  mso-line-height-rule: exactly;'>
	<multi>
	<span>
	</span>
	</multi>
	</td>
	</tr>
	</tbody>
	</table>
	<table class='full' width='640' border='0' align='center' cellpadding='0' cellspacing='0' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;'>
	<tbody>
	<tr>
	<td class='footer_links' width='640' align='center' valign='top' style='margin: 0; font-size:14px ; font-weight: normal; color:#8c8c8c; font-family: 'calibri'; line-height: 180%;  mso-line-height-rule: exactly;'>
	<multi>
	<span>
	<a href='http://www.miraclesoft.com/company/about-us.php' target='blank' style='text-decoration: none; font-style: normal; font-weight: bold; color:#8c8c8c;'>
	Company
	</a>
	</span>
	|
	<span>
	<a href='http://www.miraclesoft.com/library/' target='blank' style='text-decoration: none; font-style: normal; font-weight: bold; color:#8c8c8c;'>
	Library
	</a>
	</span>
	|
	<span>
	<a href='http://www.miraclesoft.com/company/partnerships.php' target='blank' style='text-decoration: none; font-style: normal; font-weight: bold; color:#8c8c8c;'>
	Partnerships
	</a>
	</span>
	|
	<span>
	<a href='http://www.miraclesoft.com/events/' target='blank' style='text-decoration: none; font-style: normal; font-weight: bold; color:#8c8c8c;'>
	Events
	</a>
	</span>
	</multi>
	</td>
	</tr>
	<tr>
	<td height='10'>
	</td>
	</tr>
	</tbody>
	</table>
	<table class='full' width='640' border='0' align='center' cellpadding='0' cellspacing='0' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;'>
	<tbody>
	<tr>
	<td class='footer_links' width='640' align='center' valign='top' style='margin: 0; font-size:13px ; font-weight: normal; color:#8c8c8c; font-family: 'calibri'; line-height: 180%;  mso-line-height-rule: exactly;'>
	<multi>
	<span style='text-decoration: none; font-style: normal; font-weight: normal; color:#8c8c8c;'>
	© 2015 Miracle Software Systems, Inc.
	</span>
	</multi>
	</td>
	</tr>
	</tbody>
	</table>
	</td>
	</tr>
	</tbody>
	</table>
	</td>
	</tr>
	</tbody>
	</table>
	</td>
	</tr>
	<tr>
	<td height='10' style='padding:0; line-height: 0;'>
	&nbsp;
	</td>
	</tr>
	</tbody>
	</table>
	<modules>
	<module label='header'>
	<table style='background-color: #b3b2b7;' align='center' border='0' cellpadding='0' cellspacing='0' width='100%'>
	<tbody>
	<tr>
	<td valign='top' width='100%'>
	<table width='50%' border='0' align='center'>
	<tbody>
	<tr>
	<td height='25'>
	</td>
	</tr>
	</tbody>
	</table>
	<modules>
	<module label='header'>
	</module>
	</modules>
	</td>
	</tr>
	</tbody>
	</table>
	
	</module>
	</modules>
	</td>
	</tr>
	</tbody>
	</table>
	</module>
	</module>
	</modules>
	</td>
	</tr>
	</tbody>
	</table>
	</module>
	</module>
	</modules>
	</body>
	</html>
	";
		
		
		
		
		
		
		//$mail->MsgHTML("<b>Hi, your first SMTP mail has been received. Great Job!.. <br/><br/>by <a href='http://www.asif18.com/7/php/send-mails-using-smtp-in-php-by-gmail-server-or-own-domain-server/'>Asif18</a></b>"); //Put your body of the message you can place html code here
		$mail->MsgHTML($bodyContent); //Put your body of the message you can place html code here
		
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
	
	/*
	 Event nominations start
	 Author : Santosh Kola
	 Date : 05/30/2017
	 */
	
	function sendYourNominationSubmitted($empName,$eventName,$location,$startDate,$endDate,$eventLink,$email){
		
		$mail	= new PHPMailer; // call the class
		$mail->IsSMTP();
		$mail->Host = SMTP_HOST; //Hostname of the mail server
		$mail->Port = SMTP_PORT; //Port of the SMTP like to be 25, 80, 465 or 587
		$mail->SMTPAuth = true; //Whether to use SMTP authentication
		$mail->SMTPSecure = SMTP_SECURE;
		$mail->Username = SMTP_UNAME; //Username for SMTP authentication any valid email created in your domain
		$mail->Password = SMTP_PWORD; //Password for SMTP authentication
		//$mail->AddReplyTo($email, $fname); //reply-to address
		$mail->SetFrom("partnerships@miraclesoft.com", "Partnerships Team"); //From address of the mail
		// put your while loop here like below,
		$mail->Subject = "Your nomination has been submitted!"; //Subject od your mail
		//$mail->AddAddress("skola2@miraclesoft.com", "Santosh Kola"); //To address who will receive this email
		// $mail->AddAddress(CONTACT_US, "info"); //To address who will receive this email
		/* $myArray = explode(';', EVENT_SUGGESTIONS_ADDRESS);
		 for ($i = 0; $i < count($myArray); ++$i) {
		 $innerArray = explode(',', $myArray[$i]);
		 $mail->AddAddress($innerArray[0], $innerArray[1]);
		 }*/
		$startDate = date("F d , Y",strtotime($startDate));
		$endDate = date("F d , Y",strtotime($endDate));
		
		$mail->AddAddress($email, $empName);
		//$mail->AddAddress('skola2@miraclesoft.com', "Santosh Kola");
		$bodyContent = "<html xmlns='http://www.w3.org/1999/xhtml' class='gr__newsletters-2017-vnallamalla_c9users_io'><head>
		<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<meta http-equiv='X-UA-Compatible' content='IE=edge'>
		<meta name='format-detection' content='telephone=no'>
		<title>Your nomination has been submitted</title>
		<style>
		@import url('https://fonts.googleapis.com/css?family=Montserrat:400,700');
		@import url('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i');
		html{width: 100%;}
		body{
		width: 100%;
		background-color: #ffffff;
		margin:0; padding:0;
		-webkit-text-size-adjust:none;
		-ms-text-size-adjust:none;
		-webkit-font-smoothing: ;
		mso-margin-top-alt:0px;
		mso-margin-bottom-alt:0px;
		mso-padding-alt: 0px 0px 0px 0px;}
		div, p, a, li, td { -webkit-text-size-adjust:none; }
		#outlook a {padding:0;}
		p,h1,h2,h3,h4{ margin-top:0; margin-bottom:0; padding-top:0; padding-bottom:0;}
		table{
		mso-table-lspace:0pt;
		mso-table-rspace:0pt;
	}
	table td {border-collapse: collapse;}
	span.preheader{display: none;font-size: 1px; visibility: hidden; opacity: 0; color: transparent; height: 0; width: 0;}
	.googlefix {width: 280px!important; text-align:center!important; min-width:0px!important}
	a {outline:none;}
	a {text-decoration: none;}
	a img {border:none;}
	.image_fix {display:block;}
	.ReadMsgBody { width: 100%;}
	.ExternalClass {width: 100%;}
	.ExternalClass,
	.ExternalClass p,
	.ExternalClass span,
	.ExternalClass font,
	.ExternalClass td,
	.ExternalClass div {
	line-height: 100%;}
	img{
	-ms-interpolation-mode:bicubic;}
	p {
	margin:0 !important;
	padding:0 !important;}
	.button:hover {filter: brightness(120%);}
	@media only screen and (max-width: 600px)
	{
	body{width:100% !important;}
	.container           {width:100% !important; min-width:100% !important;}
	.container-wrap      {display:inline-block !important; width:100% !important; height:auto !important; border-radius:0 !important;}
	.image-container     {width: 100% !important; height: auto !important; }
	.disable             {display: none !important;}
	.enable              {display: inline !important;}
	.padding-top-10      {padding-top: 10px !important;}
	.padding-top-20      {padding-top: 20px !important;}
	.padding-top-30      {padding-top: 30px !important;}
	.padding-top-40      {padding-top: 40px !important;}
	.padding-top-60      {padding-top: 60px !important;}
	.padding-bottom-10   {padding-bottom: 10px !important;}
	.padding-bottom-20   {padding-bottom: 20px !important;}
	.padding-bottom-30   {padding-bottom: 30px !important;}
	.padding-bottom-40   {padding-bottom: 40px !important;}
	.padding-bottom-60   {padding-bottom: 60px !important;}
	.padding-none        {padding:0  !important;}
	.text                {width:90% !important; text-align:center !important;}
	.text-on-bg          {width:90% !important; text-align:center !important;}
	.text-center         {text-align: center !important;}
	.text-right          {text-align: right !important;}
	.text-left           {text-align: left !important;}
	.text-white          {color: #ffffff !important;}
	.background-cover    {background-size: cover !important;}
	.background-cover-percent    {background-size: 100% 79% !important;}
	.background-contain  {background-size: contain !important;}
	.background-auto     {background-size: auto !important;}
	.background-center   {background-position: center center !important;}
	.background-none     {background-image: none !important;}
	.border-none         {border:0 !important;}
	.border-white        {border-color: #ffffff !important;}
	}
	@media only screen and (max-width: 451px)
	{
	body {width:100% !important;}
	.container           {width:100% !important; min-width:100% !important;}
	.container-wrap      {display:inline-block !important; width:100% !important; height:auto !important; border-radius:0 !important;}
	}
	@media only screen and (max-width: 341px)
	{
	body {width:100%!important;}
	.container           {width:100% !important; min-width:100% !important;}
	.container-wrap      {display:inline-block !important; width:100% !important; height:auto !important; border-radius:0 !important;}
	}
	</style>
	</head>
	<body marginwidth='0' marginheight='0' style='margin-top: 0; margin-bottom: 0; padding-top: 0; padding-bottom: 0; width: 100%; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;' offset='0' topmargin='0' leftmargin='0' data-gr-c-s-loaded='true'>
	
	<table mc:repeatable='layout' mc:hideable='' mc:variant='navigation-6' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='margin:0 auto; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px; max-width:680px;' data-module='navigation-6' >
	
	<tbody>
	<tr>
	<td align='center' style='width:100%; height:100%; background-color:#ffffff;' bgcollor='#ffffff' data-bgcolor='nav-6-bg'>
	<table width='600' align='center' class='container' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td align='center' height='20' width='1' style='font-size: 1px; line-height: 20px; height:20px;'>&nbsp;
	</td>
	</tr>
	
	<tr>
	<td align='center'>
	<table width='600' align='center' class='container' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	<tbody>
	<tr>
	
	<th width='140' align='left' class='container-wrap' valign='top' style='vertical-align: top;'>
	<table align='center' cellpadding='0' cellspacing='0'>
	<tbody>
	<tr>
	<td width='160' align='center' valign='top'>
	<table width='100%' align='center' cellpadding='0' cellspacing='0'>
	<tbody>
	
	<tr>
	<td align='center' valign='top' style='line-height: 0px !important;'>
	<a style='text-decoration: none; display: block;' href='http://www.miraclesoft.com/' target='blank'>
	<img src='http://www.miraclesoft.com/images/newsletters/miracle-logo-dark.png' alt='logo' width='100%' style='width: 100%; max-width: 100%;'>
	</a>
	</td>
	</tr>
	</tbody>
	</table>
	</td>
	</tr>
	</tbody>
	</table>
	</th>
	
	<th width='320' align='right' class='container-wrap' valign='top' style='vertical-align: top;'>
	<table width='320' align='right' class='container' border='0' cellpadding='0' cellspacing='0' style='width:320px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td align='center' height='1' width='1' style='font-size: 1px; line-height: 1px; height:1px;'>&nbsp;
	</td>
	</tr>
	
	<tr>
	<td align='right'>
	<table width='auto' align='right' class='container' border='0' cellpadding='0' cellspacing='0' style='width:autopx; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	<tbody>
	<tr>
	<td align='center'>
	<table width='auto' align='center' class='' border='0' cellpadding='0' cellspacing='0' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	<tbody><tr>
	<td align='center' height='15'>
	</td>
	</tr>
	<tr>
	
	<th align='center' height='1' width='4' style='font-size: 1px; line-height: 1px; width:4px;'>
	</th>
	
	<th style='text-align:center; font-family: oPen sans; font-size:12px; line-height: 20px; text-decoration: none; color: #000000; font-weight:400; text-transform: uppercase; Partnerships Team<: 0.05em;'>
	<a href='http://www.miraclesoft.com/company/' target='blank' style='text-align:center; font-family: oPen sans; font-size:12px; line-height: 20px; text-decoration: none; color: #000000; font-weight:600; text-transform: uppercase; : 0.05em;' data-size='nav-6-link-size' data-min='9' data-max='40' data-color='nav-6-link-color' mc:edit='nav-6-link-2'>
	<multiline>About us |</multiline>
	</a>
	</th>
	
	<th align='center' height='1' width='4' style='font-size: 1px; line-height: 1px; width:4px;'>
	</th>
	
	<th style='text-align:center; font-family: oPen sans; font-size:12px; line-height: 20px; text-decoration: none; color: #000000; font-weight:400; text-transform: uppercase; : 0.05em;'>
	<a href='http://www.miraclesoft.com/services/' target='blank' style='text-align:center; font-family: oPen sans; font-size:12px; line-height: 20px; text-decoration: none; color: #000000; font-weight:600; text-transform: uppercase; : 0.05em;' data-size='nav-6-link-size' data-min='9' data-max='40' data-color='nav-6-link-color' mc:edit='nav-6-link-3'>
	<multiline> Our Services |</multiline>
	</a>
	</th>
	
	<th align='center' height='1' width='4' style='font-size: 1px; line-height: 1px; width:4px;'>
	</th>
	
	<th style='text-align:center; font-family: oPen sans; font-size:12px; line-height: 20px; text-decoration: none; color: #232527; font-weight:600; text-transform: uppercase; : 0.05em;'>
	<a href='http://www.miraclesoft.com/contact/' target='blank' style='text-align:center; font-family: oPen sans; font-size:12px; line-height: 20px; text-decoration: none; color: #232527; font-weight:600; text-transform: uppercase; : 0.05em;' data-size='nav-6-signUp-size' data-min='9' data-max='40' data-color='nav-6-signUp-color' mc:edit='nav-6-signUp-4'>
	<multiline>Contact us</multiline>
	</a>
	</th>
	
	</tr>
	</tbody>
	</table>
	</td>
	</tr>
	</tbody>
	</table>
	</td>
	</tr>
	
	<tr>
	<td align='center' height='18' width='1' style='font-size: 1px; line-height: 18px; height:18px;'>&nbsp;
	</td>
	</tr>
	
	</tbody>
	</table>
	</th>
	
	</tr>
	</tbody>
	</table>
	</td>
	</tr>
	</tbody>
	</table>
	</td>
	</tr>
	
	</tbody>
	</table>
	<table mc:repeatable='layout' mc:hideable='' mc:variant='navigation-margin' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='margin:0 auto; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px; max-width:680px;' data-module='navigation-margin'>
	
	<tbody>
	<tr>
	<td align='center' style='width:100%; height:100%; background-color:#ffffff;' bgcollor='#ffffff' data-bgcolor='navigation-margin-bg'>
	<table width='600' align='center' class='container' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td align='center' height='20' width='1' style='font-size: 1px;line-height: 10px;height: 10px;'>&nbsp;
	</td>
	</tr>
	
	</tbody>
	</table>
	</td>
	</tr>
	
	</tbody>
	</table>
	<div class='parentOfBg'></div>
	<table align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='margin:0 auto; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px; max-width:680px;' data-module='text-block-1'>
	
	<tbody>
	<tr>
	<td align='center' style='width:100%; height:100%; background-color:#f8f8f8;' data-bgcolor='txt-blck-1-bg'>
	<table width='600' align='center' class='text' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td align='center' height='35' width='1' style='font-size: 1px; line-height: 35px; height:35px;'>
	&nbsp;
	</td>
	</tr>
	
	<tr>
	<td style='text-align: center;font-family: 'Open Sans' , sans-serif;font-size: 25px;line-height: 20px;text-decoration: none;color: #232527;font-weight:700;' data-size='txt-blck-1-text-size' data-min='9' data-max='40' data-color='txt-blck-1-text-color'>
	<multiline>Event Nomination Submitted</multiline>
	</td>
	</tr>
	
	<tr>
	<td align='center' height='25' width='1' style='font-size: 1px;line-height: 25px;height: 25px;'>
	&nbsp;
	</td>
	</tr>
	<tr>
	<td align='center'>
	<table width='60' height='2' align='center' border='0' cellpadding='0' cellspacing='0' style='width:60px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px; background-color: #232527' data-bgcolor='team-6-line-color'>
	
	<tbody>
	<tr>
	<td align='center' height='2' width='40' style='font-size: 2px; line-height: 2px; width:40px;'></td>
	</tr>
	
	</tbody>
	</table>
	</td>
	</tr>
	
	</tbody>
	</table>
	</td>
	
	</tr>
	
	</tbody>
	</table>
	<table mc:repeatable='layout' mc:hideable='' mc:variant='text-block-1' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='margin:0 auto; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px; max-width:680px;' data-module='text-block-1' >
	
	<tbody>
	<tr>
	<td align='center' style='width:100%; height:100%; background-color:#f8f8f8;' bgcollor='#f8f8f8' data-bgcolor='txt-blck-1-bg'>
	<table width='600' align='center' class='text' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td align='center' height='25' width='1' style='font-size: 1px; line-height: 25px; height:25px;'>&nbsp;
	</td>
	</tr>
	
	<tr>
	<td style='text-align:left;font-family: 'Open Sans' , sans-serif;font-size: 14px;line-height: 20px;text-decoration: none;color: #232527;font-weight:400;' data-size='txt-blck-1-text-size' data-min='9' data-max='40' data-color='txt-blck-1-text-color' mc:edit='txt-blck-1-text-1'>
	<multiline><b>$empName,</b>
	</multiline>
	</td>
	</tr>
	
	</tbody>
	</table>
	</td>
	
	</tr>
	
	</tbody>
	</table>
	
	
	<table mc:repeatable='layout' mc:hideable='' mc:variant='text-block-1' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='margin:0 auto; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px; max-width:680px;' data-module='text-block-1' >
	
	<tbody>
	<tr>
	<td align='center' style='width:100%; height:100%; background-color:#f8f8f8;' bgcollor='#f8f8f8' data-bgcolor='txt-blck-1-bg'>
	<table width='600' align='center' class='text' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td align='center' height='25' width='1' style='font-size: 1px;line-height: 15px;height: 15px;'>&nbsp;
	</td>
	</tr>
	
	<tr>
	<td style='text-align:justify; font-family: 'Open Sans' , sans-serif; font-size:14px; line-height: 20px; text-decoration: none; color: #232527; font-weight:400;' data-size='txt-blck-1-text-size' data-min='9' data-max='40' data-color='txt-blck-1-text-color' mc:edit='txt-blck-1-text-1'>
	<multiline>Thank you for submitting your nomination to attend <b>$eventName</b> at <b>$location</b> from <b>$startDate</b> to <b>$endDate</b>. Our events team will go through the submissions and approve a selected set to attend the event.</multiline>
	</td>
	</tr>
	
	</tbody>
	</table>
	</td>
	
	</tr>
	
	</tbody>
	</table>
	
	<table mc:repeatable='layout' mc:hideable='' mc:variant='text-block-1' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='margin:0 auto; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px; max-width:680px;' data-module='text-block-1' >
	
	<tbody>
	<tr>
	<td align='center' style='width:100%; height:100%; background-color:#f8f8f8;' bgcollor='#f8f8f8' data-bgcolor='txt-blck-1-bg'>
	<table width='600' align='center' class='text' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td align='center' height='25' width='1' style='font-size: 1px;line-height: 15px;height: 15px;'>&nbsp;
	</td>
	</tr>
	
	<tr>
	<td style='text-align:justify; font-family: 'Open Sans' , sans-serif; font-size:14px; line-height: 20px; text-decoration: none; color: #232527; font-weight:400;' data-size='txt-blck-1-text-size' data-min='9' data-max='40' data-color='txt-blck-1-text-color' mc:edit='txt-blck-1-text-1'>
	<multiline>For more information please reach out to <a href='mailto:partnerships@miraclesoft.com'><span style='color:#00aae7;'>partnerships@miraclesoft.com</span></a> (or) visit <a href='http://www.miraclesoft.com/conferencenominations' target='blank'><span style='color:#00aae7;'>www.miraclesoft.com/conferencenominations.</span></a>
	</multiline>
	</td>
	</tr>
	
	</tbody>
	</table>
	</td>
	
	</tr>
	
	</tbody>
	</table>
	
	<table mc:repeatable='layout' mc:hideable='' mc:variant='text-block-1' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='margin:0 auto; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px; max-width:680px;' data-module='text-block-1' >
	
	<tbody>
	<tr>
	<td align='center' style='width:100%; height:100%; background-color:#f8f8f8;' bgcollor='#f8f8f8' data-bgcolor='txt-blck-1-bg'>
	<table width='600' align='center' class='text' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td align='center' height='25' width='1' style='font-size: 1px;line-height: 15px;height: 15px;'>&nbsp;
	</td>
	</tr>
	
	<tr>
	<td style='text-align:left; font-family: 'Open Sans' , sans-serif; font-size:14px; line-height: 20px; text-decoration: none; color: #232527; font-weight:400;' data-size='txt-blck-1-text-size' data-min='9' data-max='40' data-color='txt-blck-1-text-color' mc:edit='txt-blck-1-text-1'>
	<multiline>For more details regarding <b>$eventName</b> please visit <a href='$eventLink'><span style='color:#00aae7;'>$eventLink</span></a>.</multiline>
	</td>
	</tr>
	
	</tbody>
	</table>
	</td>
	
	</tr>
	
	</tbody>
	</table><table mc:repeatable='layout' mc:hideable='' mc:variant='text-block-1' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='margin:0 auto; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px; max-width:680px;' data-module='text-block-1'>
	
	<tbody>
	<tr>
	<td align='center' style='width:100%; height:100%; background-color:#f8f8f8;' bgcollor='#f8f8f8' data-bgcolor='txt-blck-1-bg'>
	<table width='600' align='center' class='text' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td align='center' height='25' width='1' style='font-size: 1px;line-height: 15px;height: 15px;'>&nbsp;
	</td>
	</tr>
	
	<tr>
	<td style='text-align:left; font-family: 'Open Sans' , sans-serif; font-size:14px; line-height: 20px; text-decoration: none; color: #232527; font-weight:400;' data-size='txt-blck-1-text-size' data-min='9' data-max='40' data-color='txt-blck-1-text-color' mc:edit='txt-blck-1-text-1'>
	<multiline><b>Thanks &amp; Regards</b><br><b>Partnerships Team</b><br>
	
	Phone : (248)-412-0430<br>
	Email : <a href='mailto:partnerships@miraclesoft.com'><span style='color:#232527;'>partnerships@miraclesoft.com</span></a>
	</multiline>
	</td>
	</tr>
	
	<tr>
	<td align='center' height='46' width='1' style='font-size: 1px; line-height: 46px; height:46px;'>&nbsp;
	</td>
	</tr>
	
	</tbody>
	</table>
	</td>
	
	</tr>
	
	</tbody>
	</table>
	<table mc:repeatable='layout' mc:hideable='' mc:variant='footer-5' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='margin:0 auto; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px; max-width:680px;' data-module='footer-5' >
	
	<tbody>
	<tr>
	<td align='center' style='width:100%; height:100%; background-color:#ffffff;' bgcollor='#ffffff' data-bgcolor='footer-5-bg'>
	<table width='600' align='center' class='container' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td align='center' height='35' width='1' style='font-size: 1px;line-height: 15px;height: 15px;'>&nbsp;
	</td>
	</tr>
	
	<tr>
	<td align='center'>
	<table width='600' align='center' class='text' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	<tbody>
	<tr>
	
	<th width='360' align='left' class='container-wrap' valign='top' style='vertical-align: top;'>
	<table width='360' align='left' class='container' border='0' cellpadding='0' cellspacing='0' style='width:360px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td class='text-left' style='vertical-align:top;text-align:left;font-family: 'Open Sans', sans-serif;font-size:13px;padding-top: 5px;line-height: 20px;text-decoration: none;color: #232527;font-weight: 400;' data-size='footer-5-rights-size' data-min='9' data-max='40' data-color='footer-5-rights-color' mc:edit='footer-5-rights-1.1'>
	<multiline>&copy; Copyrights ".date('Y')." | Miracle Software Systems, Inc.</multiline>
                                                      </td>
                                                   </tr>
			
                                                   <tr>
                                                      <td align='center' height='13' width='1' style='font-size: 1px; line-height: 13px; height:13px;'>&nbsp;
                                                      </td>
                                                   </tr>
			
                                                   <tr>
                                                      <td align='center' height='39' width='1' style='font-size: 1px;line-height: 20px;height: 20px;'>&nbsp;
                                                      </td>
                                                   </tr>
			
                                                </tbody>
                                             </table>
                                          </th>
			
                                          <th width='280' align='right' class='container-wrap' valign='top' style='vertical-align: top;'>
                                             <table width='280' align='right' class='container' border='0' cellpadding='0' cellspacing='0' style='width:280px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
			
                                                <tbody>
                                                   <tr>
                                                      <td class='disable' align='center' height='5' width='1' style='font-size: 1px; line-height: 5px; height:5px;'>&nbsp;
                                                      </td>
                                                   </tr>
			
                                                   <tr>
                                                      <td align='right'>
                                                         <table width='135' align='right' class='container' border='0' cellpadding='0' cellspacing='0' style='width:135px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
			
                                                            <tbody>
                                                               <tr>
                                                                  <td align='left'>
                                                                     <table style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;border: 0px;' align='left' border='0' cellpadding='0' cellspacing='0' width='auto'>
                                                                        <tbody>
                                                                           <tr>
                                                                              <th>
                                                                                    <a href='https://www.facebook.com/miracle45625/' target='blank' style='color:#ef4048; text-decoration: none;'><img src='http://www.miraclesoft.com/images/newsletters/facebook1.png' width='20' height='20' alt='#' style='display:block; vertical-align:middle;'></a>   </th>
			
                                                                              <td align='center' height='1' width='10' style='font-size: 1px; line-height: 1px; width:10px;'>
                                                                              </td>
			
                                                                              <th>
                                                                                <a href='https://plus.google.com/+Team_MSS' target='blank' style='color:#ef4048; text-decoration: none;'><img src='http://www.miraclesoft.com/images/newsletters/googleplus1.png' width='20' height='20' alt='#' style='display:block; vertical-align:middle;'></a>     </th>
			
                                                                              <td align='center' height='1' width='10' style='font-size: 1px; line-height: 1px; width:10px;'>
                                                                              </td>
			
                                                                              <th>
                                                                                     <a href='https://www.linkedin.com/company/miracle-software-systems-inc' target='blank' style='color:#ef4048; text-decoration: none;'><img src='http://www.miraclesoft.com/images/newsletters/Linkedin1.png' width='20' height='20' alt='#' style='display:block; vertical-align:middle;'></a>     </th>
			
                                                                              <td align='center' height='1' width='10' style='font-size: 1px; line-height: 1px; width:10px;'>
                                                                              </td>
			
                                                                              <th>
</th><td>                        <a href='https://www.youtube.com/c/Team_MSS' target='blank' style='color:#ef4048; text-decoration: none;'><img src='http://www.miraclesoft.com/images/newsletters/youtube1.png' width='20' height='20' alt='#' style='display:block; vertical-align:middle;'></a>
			
                                                                              </td><td align='center' height='1' width='10' style='font-size: 1px; line-height: 1px; width:10px;'>
                                                                              </td>
			
                                                                              <th>
</th><td>                        <a href='https://twitter.com/Team_MSS' target='blank' style='color:#ef4048; text-decoration: none;'><img src='http://www.miraclesoft.com/images/newsletters/Twitter1.png' width='20' height='20' alt='#' style='display:block; vertical-align:middle;'></a>
			
                                                                              </td><td align='center' height='1' width='10' style='font-size: 1px; line-height: 1px; width:10px;'>
                                                                              </td>
			
                                                                              <th>
                                                                                </th></tr>
                                                                        </tbody>
                                                                     </table>
                                                                  </td>
                                                               </tr>
			
                                                            </tbody>
                                                         </table>
                                                      </td>
                                                   </tr>
			
                                                   <tr>
                                                      <td align='center' height='39' width='1' style='font-size: 1px;line-height: 20px;height: 20px;'>&nbsp;
                                                      </td>
                                                   </tr>
			
                                                </tbody>
                                             </table>
                                          </th>
			
                                       </tr>
                                    </tbody>
                                 </table>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </td>
			
               </tr>
			
         </tbody>
      </table>
			
<span class='gr__tooltip'><span class='gr__tooltip-content'></span><i class='gr__tooltip-logo'></i><span class='gr__triangle'></span></span></body></html>";
		
		
		//$mail->MsgHTML("<b>Hi, your first SMTP mail has been received. Great Job!.. <br/><br/>by <a href='http://www.asif18.com/7/php/send-mails-using-smtp-in-php-by-gmail-server-or-own-domain-server/'>Asif18</a></b>"); //Put your body of the message you can place html code here
		$mail->MsgHTML($bodyContent); //Put your body of the message you can place html code here
		
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
	
	
	
	function sendNewNominationSubmitted($eventName,$location,$startDate,$endDate,$empName,$workPhone,$empEmail){
		
		$mail	= new PHPMailer; // call the class
		$mail->IsSMTP();
		$mail->Host = SMTP_HOST; //Hostname of the mail server
		$mail->Port = SMTP_PORT; //Port of the SMTP like to be 25, 80, 465 or 587
		$mail->SMTPAuth = true; //Whether to use SMTP authentication
		$mail->SMTPSecure = SMTP_SECURE;
		$mail->Username = SMTP_UNAME; //Username for SMTP authentication any valid email created in your domain
		$mail->Password = SMTP_PWORD; //Password for SMTP authentication
		//$mail->AddReplyTo($empEmail, $empName); //reply-to address
		//$mail->SetFrom("mssapp@miraclesoft.com", "Maketing Team"); //From address of the mail
		$mail->SetFrom($empEmail, $empName);
		//partnerships@miraclesoft.com
		// put your while loop here like below,
		$mail->Subject = "New Nomination Submitted"; //Subject od your mail
		//$mail->AddAddress("skola2@miraclesoft.com", "Santosh Kola"); //To address who will receive this email
		// $mail->AddAddress(CONTACT_US, "info"); //To address who will receive this email
		$myArray = explode(';', NEW_NOMINATIONS_SUBMITTED);
		for ($i = 0; $i < count($myArray); ++$i) {
			$innerArray = explode(',', $myArray[$i]);
			$mail->AddAddress($innerArray[0], $innerArray[1]);
		}
		$startDate = date("F d , Y",strtotime($startDate));
		$endDate = date("F d , Y",strtotime($endDate));
		
		$bodyContent = "<html xmlns='http://www.w3.org/1999/xhtml' class='gr__newsletters-2017-vnallamalla_c9users_io'><head>
		<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<meta http-equiv='X-UA-Compatible' content='IE=edge'>
		<meta name='format-detection' content='telephone=no'>
		<title>New Nomination Submitted</title>
		<style>
		@import url('https://fonts.googleapis.com/css?family=Montserrat:400,700');
		@import url('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i');
		html{width: 100%;}
		body{
		width: 100%;
		background-color: #ffffff;
		margin:0; padding:0;
		-webkit-text-size-adjust:none;
		-ms-text-size-adjust:none;
		-webkit-font-smoothing: ;
		mso-margin-top-alt:0px;
		mso-margin-bottom-alt:0px;
		mso-padding-alt: 0px 0px 0px 0px;}
		div, p, a, li, td { -webkit-text-size-adjust:none; }
		#outlook a {padding:0;}
		p,h1,h2,h3,h4{ margin-top:0; margin-bottom:0; padding-top:0; padding-bottom:0;}
		table{
		mso-table-lspace:0pt;
		mso-table-rspace:0pt;
	}
	table td {border-collapse: collapse;}
	span.preheader{display: none;font-size: 1px; visibility: hidden; opacity: 0; color: transparent; height: 0; width: 0;}
	.googlefix {width: 280px!important; text-align:center!important; min-width:0px!important}
	a {outline:none;}
	a {text-decoration: none;}
	a img {border:none;}
	.image_fix {display:block;}
	.ReadMsgBody { width: 100%;}
	.ExternalClass {width: 100%;}
	.ExternalClass,
	.ExternalClass p,
	.ExternalClass span,
	.ExternalClass font,
	.ExternalClass td,
	.ExternalClass div {
	line-height: 100%;}
	img{
	-ms-interpolation-mode:bicubic;}
	p {
	margin:0 !important;
	padding:0 !important;}
	.button:hover {filter: brightness(120%);}
	@media only screen and (max-width: 600px)
	{
	body{width:100% !important;}
	.container           {width:100% !important; min-width:100% !important;}
	.container-wrap      {display:inline-block !important; width:100% !important; height:auto !important; border-radius:0 !important;}
	.image-container     {width: 100% !important; height: auto !important; }
	.disable             {display: none !important;}
	.enable              {display: inline !important;}
	.padding-top-10      {padding-top: 10px !important;}
	.padding-top-20      {padding-top: 20px !important;}
	.padding-top-30      {padding-top: 30px !important;}
	.padding-top-40      {padding-top: 40px !important;}
	.padding-top-60      {padding-top: 60px !important;}
	.padding-bottom-10   {padding-bottom: 10px !important;}
	.padding-bottom-20   {padding-bottom: 20px !important;}
	.padding-bottom-30   {padding-bottom: 30px !important;}
	.padding-bottom-40   {padding-bottom: 40px !important;}
	.padding-bottom-60   {padding-bottom: 60px !important;}
	.padding-none        {padding:0  !important;}
	.text                {width:90% !important; text-align:center !important;}
	.text-on-bg          {width:90% !important; text-align:center !important;}
	.text-center         {text-align: center !important;}
	.text-right          {text-align: right !important;}
	.text-left           {text-align: left !important;}
	.text-white          {color: #ffffff !important;}
	.background-cover    {background-size: cover !important;}
	.background-cover-percent    {background-size: 100% 79% !important;}
	.background-contain  {background-size: contain !important;}
	.background-auto     {background-size: auto !important;}
	.background-center   {background-position: center center !important;}
	.background-none     {background-image: none !important;}
	.border-none         {border:0 !important;}
	.border-white        {border-color: #ffffff !important;}
	}
	@media only screen and (max-width: 451px)
	{
	body {width:100% !important;}
	.container           {width:100% !important; min-width:100% !important;}
	.container-wrap      {display:inline-block !important; width:100% !important; height:auto !important; border-radius:0 !important;}
	}
	@media only screen and (max-width: 341px)
	{
	body {width:100%!important;}
	.container           {width:100% !important; min-width:100% !important;}
	.container-wrap      {display:inline-block !important; width:100% !important; height:auto !important; border-radius:0 !important;}
	}
	</style>
	</head>
	<body marginwidth='0' marginheight='0' style='margin-top: 0; margin-bottom: 0; padding-top: 0; padding-bottom: 0; width: 100%; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;' offset='0' topmargin='0' leftmargin='0' data-gr-c-s-loaded='true'>
	
	<table mc:repeatable='layout' mc:hideable='' mc:variant='navigation-6' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='margin:0 auto; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px; max-width:680px;' data-module='navigation-6'>
	
	<tbody>
	<tr>
	<td align='center' style='width:100%; height:100%; background-color:#ffffff;' bgcollor='#ffffff' data-bgcolor='nav-6-bg'>
	<table width='600' align='center' class='container' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td align='center' height='20' width='1' style='font-size: 1px; line-height: 20px; height:20px;'>&nbsp;                              </td>
	</tr>
	
	<tr>
	<td align='center'>
	<table width='600' align='center' class='container' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	<tbody>
	<tr>
	
	<th width='140' align='left' class='container-wrap' valign='top' style='vertical-align: top;'>
	<table align='center' cellpadding='0' cellspacing='0'>
	<tbody>
	<tr>
	<td width='160' align='center' valign='top'>
	<table width='100%' align='center' cellpadding='0' cellspacing='0'>
	<tbody>
	<tr>
	<td align='center' valign='top' style='line-height: 0px !important;'>
	<a style='text-decoration: none; display: block;' href='http://www.miraclesoft.com/' target='blank'>
	<img src='http://www.miraclesoft.com/images/newsletters/miracle-logo-dark.png' alt='logo' width='100%' style='width: 100%; max-width: 100%;'>
	</a>
	</td>
	</tr>
	</tbody>
	</table>
	</td>
	</tr>
	</tbody>
	</table>
	</th>
	
	<th width='320' align='right' class='container-wrap' valign='top' style='vertical-align: top;'>
	<table width='320' align='right' class='container' border='0' cellpadding='0' cellspacing='0' style='width:320px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td align='center' height='1' width='1' style='font-size: 1px; line-height: 1px; height:1px;'>&nbsp;
	</td>
	</tr>
	
	<tr>
	<td align='right'>
	<table width='auto' align='right' class='container' border='0' cellpadding='0' cellspacing='0' style='width:autopx; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	<tbody>
	<tr>
	<td align='center'>
	<table width='auto' align='center' class='' border='0' cellpadding='0' cellspacing='0' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	<tbody>
	<tr>
	<td align='center' height='15'>
	</td>
	</tr>
	<tr>
	
	<th align='center' height='1' width='4' style='font-size: 1px; line-height: 1px; width:4px;'>
	</th>
	
	<th style='text-align:center; font-family: oPen sans; font-size:12px; line-height: 20px; text-decoration: none; color: #000000; font-weight:400; text-transform: uppercase; : 0.05em;'>
	<a href='http://www.miraclesoft.com/company/' target='blank' style='text-align:center; font-family: oPen sans; font-size:12px; line-height: 20px; text-decoration: none; color: #000000; font-weight:600; text-transform: uppercase; : 0.05em;' data-size='nav-6-link-size' data-min='9' data-max='40' data-color='nav-6-link-color' mc:edit='nav-6-link-2'>
	<multiline><b>About us</b> |</multiline>
	</a>
	</th>
	
	<th align='center' height='1' width='4' style='font-size: 1px; line-height: 1px; width:4px;'>
	</th>
	
	<th style='text-align:center; font-family: oPen sans; font-size:12px; line-height: 20px; text-decoration: none; color: #000000; font-weight:400; text-transform: uppercase; : 0.05em;'>
	<a href='http://www.miraclesoft.com/services/' target='blank' style='text-align:center; font-family: oPen sans; font-size:12px; line-height: 20px; text-decoration: none; color: #000000; font-weight:600; text-transform: uppercase; : 0.05em;' data-size='nav-6-link-size' data-min='9' data-max='40' data-color='nav-6-link-color' mc:edit='nav-6-link-3'>
	<multiline> <b>Our Services</b> |</multiline>
	</a>
	</th>
	
	<th align='center' height='1' width='4' style='font-size: 1px; line-height: 1px; width:4px;'>
	</th>
	
	<th style='text-align:center; font-family: oPen sans; font-size:12px; line-height: 20px; text-decoration: none; color: #232527; font-weight:600; text-transform: uppercase; : 0.05em;'>
	<a href='http://www.miraclesoft.com/contact/' target='blank' style='text-align:center; font-family: oPen sans; font-size:12px; line-height: 20px; text-decoration: none; color: #232527; font-weight:600; text-transform: uppercase; : 0.05em;' data-size='nav-6-signUp-size' data-min='9' data-max='40' data-color='nav-6-signUp-color' mc:edit='nav-6-signUp-4'>
	<multiline><b>Contact us</b></multiline>
	</a>
	</th>
	
	</tr>
	</tbody>
	</table>
	</td>
	</tr>
	</tbody>
	</table>
	</td>
	</tr>
	
	<tr>
	<td align='center' height='18' width='1' style='font-size: 1px; line-height: 18px; height:18px;'>&nbsp;
	</td>
	</tr>
	
	</tbody>
	</table>
	</th>
	
	</tr>
	</tbody>
	</table>
	</td>
	</tr>
	</tbody>
	</table>
	</td>
	</tr>
	
	</tbody>
	</table>
	<table mc:repeatable='layout' mc:hideable='' mc:variant='navigation-margin' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='margin:0 auto; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px; max-width:680px;' data-module='navigation-margin'>
	
	<tbody>
	<tr>
	<td align='center' style='width:100%; height:100%; background-color:#ffffff;' bgcollor='#ffffff' data-bgcolor='navigation-margin-bg'>
	<table width='600' align='center' class='container' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td align='center' height='20' width='1' style='font-size: 1px;line-height: 10px;height: 10px;'>&nbsp;                              </td>
	</tr>
	
	</tbody>
	</table>
	</td>
	</tr>
	
	</tbody>
	</table>
	<div class='parentOfBg'></div>
	<table align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='margin:0 auto; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px; max-width:680px;' data-module='text-block-1'>
	
	<tbody>
	<tr>
	<td align='center' style='width:100%; height:100%; background-color:#f8f8f8;' data-bgcolor='txt-blck-1-bg'>
	<table width='600' align='center' class='text' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td align='center' height='35' width='1' style='font-size: 1px; line-height: 35px; height:35px;'>
	&nbsp;
	</td>
	</tr>
	
	<tr>
	<td style='text-align: center;font-family: 'Open Sans' , sans-serif;font-size: 25px;line-height: 20px;text-decoration: none;color: #232527;font-weight:700;' data-size='txt-blck-1-text-size' data-min='9' data-max='40' data-color='txt-blck-1-text-color'>
	<multiline>Nomination Submitted</multiline>
	</td>
	</tr>
	
	<tr>
	<td align='center' height='25' width='1' style='font-size: 1px;line-height: 25px;height: 25px;'>
	&nbsp;
	</td>
	</tr>
	<tr>
	<td align='center'>
	<table width='60' height='2' align='center' border='0' cellpadding='0' cellspacing='0' style='width:60px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px; background-color: #232527' data-bgcolor='team-6-line-color'>
	
	<tbody>
	<tr>
	<td align='center' height='2' width='40' style='font-size: 2px; line-height: 2px; width:40px;'></td>
	</tr>
	
	</tbody>
	</table>
	</td>
	</tr>
	
	</tbody>
	</table>
	</td>
	
	</tr>
	
	</tbody>
	</table>
	<table mc:repeatable='layout' mc:hideable='' mc:variant='text-block-1' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='margin:0 auto; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px; max-width:680px;' data-module='text-block-1'>
	
	<tbody>
	<tr>
	<td align='center' style='width:100%; height:100%; background-color:#f8f8f8;' bgcollor='#f8f8f8' data-bgcolor='txt-blck-1-bg'>
	<table width='600' align='center' class='text' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td align='center' height='25' width='1' style='font-size: 1px; line-height: 25px; height:25px;'>&nbsp;
	</td>
	</tr>
	
	<tr>
	<td style='text-align:left;font-family: 'Open Sans' , sans-serif;font-size: 14px;line-height: 20px;text-decoration: none;color: #232527;font-weight:400;' data-size='txt-blck-1-text-size' data-min='9' data-max='40' data-color='txt-blck-1-text-color' mc:edit='txt-blck-1-text-1'>
	<multiline><b>Team,</b>
	</multiline>
	</td>
	</tr>
	
	</tbody>
	</table>
	</td>
	
	</tr>
	
	</tbody>
	</table>
	<table mc:repeatable='layout' mc:hideable='' mc:variant='text-block-1' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='margin:0 auto; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px; max-width:680px;' data-module='text-block-1'>
	
	<tbody>
	<tr>
	<td align='center' style='width:100%; height:100%; background-color:#f8f8f8;' bgcollor='#f8f8f8' data-bgcolor='txt-blck-1-bg'>
	<table width='600' align='center' class='text' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td align='center' height='25' width='1' style='font-size: 1px;line-height: 15px;height: 15px;'>&nbsp;
	</td>
	</tr>
	
	<tr>
	<td style='text-align:justify; font-family: 'Open Sans' , sans-serif; font-size:14px; line-height: 24px; text-decoration: none; color: #232527; font-weight:400;' data-size='txt-blck-1-text-size' data-min='9' data-max='40' data-color='txt-blck-1-text-color' mc:edit='txt-blck-1-text-1'>
	<multiline><b>$empName</b> has submitted the nomination for <b>$eventName</b> which will be held from <b>$startDate</b> to <b>$endDate</b> at <b>$location</b>.</multiline>
	</td>
	</tr>
	
	</tbody>
	</table>
	</td>
	
	</tr>
	
	</tbody>
	</table>
	<table mc:repeatable='layout' mc:hideable='' mc:variant='text-block-1' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='margin:0 auto; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px; max-width:680px;' data-module='text-block-1'>
	
	<tbody>
	<tr>
	<td align='center' style='width:100%; height:100%; background-color:#f8f8f8;' bgcollor='#f8f8f8' data-bgcolor='txt-blck-1-bg'>
	<table width='600' align='center' class='text' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td align='center' height='25' width='1' style='font-size: 1px;line-height: 15px;height: 15px;'>&nbsp;
	</td>
	</tr>
	
	<tr>
	<td align='left' class='button-width'>
	<table align='left' class='display-button' bgcolor='#232527' style='border-radius: 5px;' data-bgcolor='Header-Butn-BG'>
	<tbody>
	<tr>
	<td align='left' class='MsoNormal' style='color: #ffffff; font-family:'Open Sans'; font-size: 15px; font-weight: 700; padding: 2px 8px;  border-radius: 5px; line-height: 25.5px;' data-color='Header-Butn-Txt' data-size='Header-Butn-Txt' data-min='12' data-max='33'><a href='http://www.miraclesoft.com/Hubble' target='blank' class='' style='color:#ffffff; text-decoration:none;' data-color='Header-Butn-Txt'>Check the Nomination</a></td>
	</tr>
	</tbody>
	</table>
	
	</td>
	
	</tr>
	<tr>
	<td align='center' height='25' width='1' style='font-size: 1px;line-height: 15px;height: 15px;'>&nbsp;
	</td>
	</tr>
	<tr>
	<td style='text-align:justify; font-family: 'Open Sans' , sans-serif; font-size:14px; line-height: 24px; text-decoration: none; color: #232527; font-weight:400;' data-size='txt-blck-1-text-size' data-min='9' data-max='40' data-color='txt-blck-1-text-color' mc:edit='txt-blck-1-text-1'>
	<multiline>For more information please reach out to <a href='mailto:partnerships@miraclesoft.com'><span style='color:#00aae7;'>partnerships@miraclesoft.com</span></a> (or) visit <a href='http://www.miraclesoft.com/conferencenominations' target='blank'><span style='color:#00aae7;'>www.miraclesoft.com/conferencenominations.</span></a>
	</multiline>
	</td>
	</tr>
	
	</tbody>
	</table>
	</td>
	
	</tr>
	
	</tbody>
	</table>
	
	<table mc:repeatable='layout' mc:hideable='' mc:variant='text-block-1' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='margin:0 auto; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px; max-width:680px;' data-module='text-block-1'>
	
	<tbody>
	<tr>
	<td align='center' style='width:100%; height:100%; background-color:#f8f8f8;' bgcollor='#f8f8f8' data-bgcolor='txt-blck-1-bg'>
	<table width='600' align='center' class='text' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td align='center' height='25' width='1' style='font-size: 1px;line-height: 15px;height: 15px;'>&nbsp;
	</td>
	</tr>
	
	<tr>
	<td style='text-align:left; font-family: 'Open Sans' , sans-serif; font-size:14px; line-height: 24px; text-decoration: none; color: #232527; font-weight:400;' data-size='txt-blck-1-text-size' data-min='9' data-max='40' data-color='txt-blck-1-text-color' mc:edit='txt-blck-1-text-1'>
	
	<multiline><b>Thanks &amp; Regards</b><br><b>$empName</b><br>
	
	$workPhone<br>
	<a href='mailto:$empEmail'><span style='color:#232527;'>$empEmail</span></a>
	</multiline>
	
	</td>
	</tr>
	
	<tr>
	<td align='center' height='46' width='1' style='font-size: 1px; line-height: 46px; height:46px;'>&nbsp;
	</td>
	</tr>
	
	</tbody>
	</table>
	</td>
	
	</tr>
	
	</tbody>
	</table>
	<table mc:repeatable='layout' mc:hideable='' mc:variant='footer-5' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='margin:0 auto; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px; max-width:680px;' data-module='footer-5'>
	
	<tbody>
	<tr>
	<td align='center' style='width:100%; height:100%; background-color:#ffffff;' bgcollor='#ffffff' data-bgcolor='footer-5-bg'>
	<table width='600' align='center' class='container' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td align='center' height='35' width='1' style='font-size: 1px;line-height: 15px;height: 15px;'>&nbsp;
	</td>
	</tr>
	
	<tr>
	<td align='center'>
	<table width='600' align='center' class='text' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	<tbody>
	<tr>
	
	<th width='360' align='left' class='container-wrap' valign='top' style='vertical-align: top;'>
	<table width='360' align='left' class='container' border='0' cellpadding='0' cellspacing='0' style='width:360px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td class='text-left' style='vertical-align:top;text-align:left;font-family: 'Open Sans', sans-serif;font-size:13px;padding-top: 5px;line-height: 20px;text-decoration: none;color: #232527;font-weight: 400;' data-size='footer-5-rights-size' data-min='9' data-max='40' data-color='footer-5-rights-color' mc:edit='footer-5-rights-1.1'>
	<multiline>&copy; Copyrights ".date('Y')." | Miracle Software Systems, Inc.</multiline>
                                                      </td>
                                                   </tr>
			
                                                   <tr>
                                                      <td align='center' height='13' width='1' style='font-size: 1px; line-height: 13px; height:13px;'>&nbsp;
                                                      </td>
                                                   </tr>
			
                                                   <tr>
                                                      <td align='center' height='39' width='1' style='font-size: 1px;line-height: 20px;height: 20px;'>&nbsp;
                                                      </td>
                                                   </tr>
			
                                                </tbody>
                                             </table>
                                          </th>
			
                                          <th width='280' align='right' class='container-wrap' valign='top' style='vertical-align: top;'>
                                             <table width='280' align='right' class='container' border='0' cellpadding='0' cellspacing='0' style='width:280px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
			
                                                <tbody>
                                                   <tr>
                                                      <td class='disable' align='center' height='5' width='1' style='font-size: 1px; line-height: 5px; height:5px;'>&nbsp;
                                                      </td>
                                                   </tr>
			
                                                   <tr>
                                                      <td align='right'>
                                                         <table width='135' align='right' class='container' border='0' cellpadding='0' cellspacing='0' style='width:135px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
			
                                                            <tbody>
                                                               <tr>
                                                                  <td align='left'>
                                                                     <table style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;border: 0px;' align='left' border='0' cellpadding='0' cellspacing='0' width='auto'>
                                                                        <tbody>
                                                                           <tr>
                                                                              <th>
                                                                                 <a href='https://www.facebook.com/miracle45625/' target='blank' style='color:#ef4048; text-decoration: none;'><img src='http://www.miraclesoft.com/images/newsletters/facebook1.png' width='20' height='20' alt='#' style='display:block; vertical-align:middle;'></a>
                                                                              </th>
			
                                                                              <td align='center' height='1' width='10' style='font-size: 1px; line-height: 1px; width:10px;'>
                                                                              </td>
			
                                                                              <th>
                                                                                 <a href='https://plus.google.com/+Team_MSS' target='blank' style='color:#ef4048; text-decoration: none;'><img src='http://www.miraclesoft.com/images/newsletters/googleplus1.png' width='20' height='20' alt='#' style='display:block; vertical-align:middle;'></a>
                                                                              </th>
			
                                                                              <td align='center' height='1' width='10' style='font-size: 1px; line-height: 1px; width:10px;'>
                                                                              </td>
			
                                                                              <th>
                                                                                 <a href='https://www.linkedin.com/company/miracle-software-systems-inc' target='blank' style='color:#ef4048; text-decoration: none;'><img src='http://www.miraclesoft.com/images/newsletters/Linkedin1.png' width='20' height='20' alt='#' style='display:block; vertical-align:middle;'></a>
                                                                              </th>
			
                                                                              <td align='center' height='1' width='10' style='font-size: 1px; line-height: 1px; width:10px;'>
                                                                              </td>
			
                                                                              <th></th>
                                                                              <td>
                                                                                 <a href='https://www.youtube.com/c/Team_MSS' target='blank' style='color:#ef4048; text-decoration: none;'><img src='http://www.miraclesoft.com/images/newsletters/youtube1.png' width='20' height='20' alt='#' style='display:block; vertical-align:middle;'></a>
			
                                                                              </td>
                                                                              <td align='center' height='1' width='10' style='font-size: 1px; line-height: 1px; width:10px;'>
                                                                              </td>
			
                                                                              <th></th>
                                                                              <td>
                                                                                 <a href='https://twitter.com/Team_MSS' target='blank' style='color:#ef4048; text-decoration: none;'><img src='http://www.miraclesoft.com/images/newsletters/Twitter1.png' width='20' height='20' alt='#' style='display:block; vertical-align:middle;'></a>
			
                                                                              </td>
                                                                              <td align='center' height='1' width='10' style='font-size: 1px; line-height: 1px; width:10px;'>
                                                                              </td>
			
                                                                              <th>
                                                                              </th>
                                                                           </tr>
                                                                        </tbody>
                                                                     </table>
                                                                  </td>
                                                               </tr>
			
                                                            </tbody>
                                                         </table>
                                                      </td>
                                                   </tr>
			
                                                   <tr>
                                                      <td align='center' height='39' width='1' style='font-size: 1px;line-height: 20px;height: 20px;'>&nbsp;
                                                      </td>
                                                   </tr>
			
                                                </tbody>
                                             </table>
                                          </th>
			
                                       </tr>
                                    </tbody>
                                 </table>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </td>
			
               </tr>
			
         </tbody>
      </table>
      <span class='gr__tooltip'><span class='gr__tooltip-content'></span><i class='gr__tooltip-logo'></i><span class='gr__triangle'></span></span>
			
</body></html>";
	
	
	//$mail->MsgHTML("<b>Hi, your first SMTP mail has been received. Great Job!.. <br/><br/>by <a href='http://www.asif18.com/7/php/send-mails-using-smtp-in-php-by-gmail-server-or-own-domain-server/'>Asif18</a></b>"); //Put your body of the message you can place html code here
	$mail->MsgHTML($bodyContent); //Put your body of the message you can place html code here
	
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
	
	
	
	/*Method for Suggestion
	 * Author : Santosh Kola
	 * Date : 06/01/2015
	 */
	
	function sendEventSuggestionDetails($submittedBy,$suggestedEventName,$eventLocation,$eventStartDate,$eventEndDate,$eventLink,$submittedByEmail,$submittedByWorkPhone){
		
		$mail	= new PHPMailer; // call the class
		$mail->IsSMTP();
		$mail->Host = SMTP_HOST; //Hostname of the mail server
		$mail->Port = SMTP_PORT; //Port of the SMTP like to be 25, 80, 465 or 587
		$mail->SMTPAuth = true; //Whether to use SMTP authentication
		$mail->SMTPSecure = SMTP_SECURE;
		$mail->Username = SMTP_UNAME; //Username for SMTP authentication any valid email created in your domain
		$mail->Password = SMTP_PWORD; //Password for SMTP authentication
		//$mail->AddReplyTo("mssapp@miraclesoft.com", "Maketing Team"); //reply-to address
		//$mail->SetFrom("mssapp@miraclesoft.com", "Maketing Team"); //From address of the mail
		// $mail->SetFrom("partnerships@miraclesoft.com", "Partnerships Team"); //From address of the mail
		$mail->SetFrom($submittedByEmail, $submittedBy); //From address of the mail
		// put your while loop here like below,
		$mail->Subject = "Event Suggestion Submitted"; //Subject od your mail
		//$mail->AddAddress("skola2@miraclesoft.com", "Santosh Kola"); //To address who will receive this email
		// $mail->AddAddress(CONTACT_US, "info"); //To address who will receive this email
		$myArray = explode(';', EVENT_SUGGESTIONS_ADDRESS);
		for ($i = 0; $i < count($myArray); ++$i) {
			$innerArray = explode(',', $myArray[$i]);
			$mail->AddAddress($innerArray[0], $innerArray[1]);
		}
		
		$suggestedDate = date("F d , Y");
		$eventStartDate = date("F d , Y",strtotime($eventStartDate));
		$eventEndDate = date("F d , Y",strtotime($eventEndDate));
		
		$bodyContent = "<html xmlns='http://www.w3.org/1999/xhtml' class='gr__newsletters-2017-vnallamalla_c9users_io'><head>
		<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<meta http-equiv='X-UA-Compatible' content='IE=edge'>
		<meta name='format-detection' content='telephone=no'>
		<title>Event Suggestion Submitted</title>
		<style>
		@import url('https://fonts.googleapis.com/css?family=Montserrat:400,700');
		@import url('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i');
		html{width: 100%;}
		body{
		width: 100%;
		background-color: #ffffff;
		margin:0; padding:0;
		-webkit-text-size-adjust:none;
		-ms-text-size-adjust:none;
		-webkit-font-smoothing: ;
		mso-margin-top-alt:0px;
		mso-margin-bottom-alt:0px;
		mso-padding-alt: 0px 0px 0px 0px;}
		div, p, a, li, td { -webkit-text-size-adjust:none; }
		#outlook a {padding:0;}
		p,h1,h2,h3,h4{ margin-top:0; margin-bottom:0; padding-top:0; padding-bottom:0;}
		table{
		mso-table-lspace:0pt;
		mso-table-rspace:0pt;
	}
	table td {border-collapse: collapse;}
	span.preheader{display: none;font-size: 1px; visibility: hidden; opacity: 0; color: transparent; height: 0; width: 0;}
	.googlefix {width: 280px!important; text-align:center!important; min-width:0px!important}
	a {outline:none;}
	a {text-decoration: none;}
	a img {border:none;}
	.image_fix {display:block;}
	.ReadMsgBody { width: 100%;}
	.ExternalClass {width: 100%;}
	.ExternalClass,
	.ExternalClass p,
	.ExternalClass span,
	.ExternalClass font,
	.ExternalClass td,
	.ExternalClass div {
	line-height: 100%;}
	img{
	-ms-interpolation-mode:bicubic;}
	p {
	margin:0 !important;
	padding:0 !important;}
	.button:hover {filter: brightness(120%);}
	@media only screen and (max-width: 600px)
	{
	body{width:100% !important;}
	.container           {width:100% !important; min-width:100% !important;}
	.container-wrap      {display:inline-block !important; width:100% !important; height:auto !important; border-radius:0 !important;}
	.image-container     {width: 100% !important; height: auto !important; }
	.disable             {display: none !important;}
	.enable              {display: inline !important;}
	.padding-top-10      {padding-top: 10px !important;}
	.padding-top-20      {padding-top: 20px !important;}
	.padding-top-30      {padding-top: 30px !important;}
	.padding-top-40      {padding-top: 40px !important;}
	.padding-top-60      {padding-top: 60px !important;}
	.padding-bottom-10   {padding-bottom: 10px !important;}
	.padding-bottom-20   {padding-bottom: 20px !important;}
	.padding-bottom-30   {padding-bottom: 30px !important;}
	.padding-bottom-40   {padding-bottom: 40px !important;}
	.padding-bottom-60   {padding-bottom: 60px !important;}
	.padding-none        {padding:0  !important;}
	.text                {width:90% !important; text-align:center !important;}
	.text-on-bg          {width:90% !important; text-align:center !important;}
	.text-center         {text-align: center !important;}
	.text-right          {text-align: right !important;}
	.text-left           {text-align: left !important;}
	.text-white          {color: #ffffff !important;}
	.background-cover    {background-size: cover !important;}
	.background-cover-percent    {background-size: 100% 79% !important;}
	.background-contain  {background-size: contain !important;}
	.background-auto     {background-size: auto !important;}
	.background-center   {background-position: center center !important;}
	.background-none     {background-image: none !important;}
	.border-none         {border:0 !important;}
	.border-white        {border-color: #ffffff !important;}
	}
	@media only screen and (max-width: 451px)
	{
	body {width:100% !important;}
	.container           {width:100% !important; min-width:100% !important;}
	.container-wrap      {display:inline-block !important; width:100% !important; height:auto !important; border-radius:0 !important;}
	}
	@media only screen and (max-width: 341px)
	{
	body {width:100%!important;}
	.container           {width:100% !important; min-width:100% !important;}
	.container-wrap      {display:inline-block !important; width:100% !important; height:auto !important; border-radius:0 !important;}
	}
	</style>
	</head>
	<body marginwidth='0' marginheight='0' style='margin-top: 0; margin-bottom: 0; padding-top: 0; padding-bottom: 0; width: 100%; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;' offset='0' topmargin='0' leftmargin='0' data-gr-c-s-loaded='true'>
	
	<table mc:repeatable='layout' mc:hideable='' mc:variant='navigation-6' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='margin:0 auto; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px; max-width:680px;' data-module='navigation-6'>
	
	<tbody>
	<tr>
	<td align='center' style='width:100%; height:100%; background-color:#ffffff;' bgcollor='#ffffff' data-bgcolor='nav-6-bg'>
	<table width='600' align='center' class='container' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td align='center' height='20' width='1' style='font-size: 1px; line-height: 24px; height:20px;'>&nbsp;
	</td>
	</tr>
	
	<tr>
	<td align='center'>
	<table width='600' align='center' class='container' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	<tbody>
	<tr>
	
	<th width='140' align='left' class='container-wrap' valign='top' style='vertical-align: top;'>
	<table align='center' cellpadding='0' cellspacing='0'>
	<tbody>
	<tr>
	<td width='160' align='center' valign='top'>
	<table width='100%' align='center' cellpadding='0' cellspacing='0'>
	<tbody>
	
	<tr>
	<td align='center' valign='top' style='line-height: 0px !important;'>
	<a style='text-decoration: none; display: block;' href='http://www.miraclesoft.com/' target='blank'>
	<img src='http://www.miraclesoft.com/images/newsletters/miracle-logo-dark.png' alt='logo' width='100%' style='width: 100%; max-width: 100%;'>
	</a>
	</td>
	</tr>
	</tbody>
	</table>
	</td>
	</tr>
	</tbody>
	</table>
	</th>
	
	<th width='320' align='right' class='container-wrap' valign='top' style='vertical-align: top;'>
	<table width='320' align='right' class='container' border='0' cellpadding='0' cellspacing='0' style='width:320px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td align='center' height='1' width='1' style='font-size: 1px; line-height: 1px; height:1px;'>&nbsp;
	</td>
	</tr>
	
	<tr>
	<td align='right'>
	<table width='auto' align='right' class='container' border='0' cellpadding='0' cellspacing='0' style='width:autopx; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	<tbody>
	<tr>
	<td align='center'>
	<table width='auto' align='center' class='' border='0' cellpadding='0' cellspacing='0' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	<tbody><tr>
	<td align='center' height='15'>
	</td>
	</tr>
	<tr>
	
	<th align='center' height='1' width='4' style='font-size: 1px; line-height: 1px; width:4px;'>
	</th>
	
	<th style='text-align:center; font-family: oPen sans; font-size:12px; line-height: 24px; text-decoration: none; color: #000000; font-weight:400; text-transform: uppercase; : 0.05em;'>
	<a href='http://www.miraclesoft.com/company/' target='blank' style='text-align:center; font-family: oPen sans; font-size:12px; line-height: 24px; text-decoration: none; color: #000000; font-weight:600; text-transform: uppercase; : 0.05em;' data-size='nav-6-link-size' data-min='9' data-max='40' data-color='nav-6-link-color' mc:edit='nav-6-link-2'>
	<multiline><b>About us</b> |</multiline>
	</a>
	</th>
	
	<th align='center' height='1' width='4' style='font-size: 1px; line-height: 1px; width:4px;'>
	</th>
	
	<th style='text-align:center; font-family: oPen sans; font-size:12px; line-height: 24px; text-decoration: none; color: #000000; font-weight:400; text-transform: uppercase; : 0.05em;'>
	<a href='http://www.miraclesoft.com/services/' target='blank' style='text-align:center; font-family: oPen sans; font-size:12px; line-height: 24px; text-decoration: none; color: #000000; font-weight:600; text-transform: uppercase; : 0.05em;' data-size='nav-6-link-size' data-min='9' data-max='40' data-color='nav-6-link-color' mc:edit='nav-6-link-3'>
	<multiline> <b>Our Services</b> |</multiline>
	</a>
	</th>
	
	<th align='center' height='1' width='4' style='font-size: 1px; line-height: 1px; width:4px;'>
	</th>
	
	<th style='text-align:center; font-family: oPen sans; font-size:12px; line-height: 24px; text-decoration: none; color: #232527; font-weight:600; text-transform: uppercase; : 0.05em;'>
	<a href='http://www.miraclesoft.com/contact/' target='blank' style='text-align:center; font-family: oPen sans; font-size:12px; line-height: 24px; text-decoration: none; color: #232527; font-weight:600; text-transform: uppercase; : 0.05em;' data-size='nav-6-signUp-size' data-min='9' data-max='40' data-color='nav-6-signUp-color' mc:edit='nav-6-signUp-4'>
	<multiline><b>Contact us</b></multiline>
	</a>
	</th>
	
	</tr>
	</tbody>
	</table>
	</td>
	</tr>
	</tbody>
	</table>
	</td>
	</tr>
	
	<tr>
	<td align='center' height='18' width='1' style='font-size: 1px; line-height: 18px; height:18px;'>&nbsp;
	</td>
	</tr>
	
	</tbody>
	</table>
	</th>
	
	</tr>
	</tbody>
	</table>
	</td>
	</tr>
	</tbody>
	</table>
	</td>
	</tr>
	
	</tbody>
	</table>
	<table mc:repeatable='layout' mc:hideable='' mc:variant='navigation-margin' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='margin:0 auto; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px; max-width:680px;' data-module='navigation-margin'>
	
	<tbody>
	<tr>
	<td align='center' style='width:100%; height:100%; background-color:#ffffff;' bgcollor='#ffffff' data-bgcolor='navigation-margin-bg'>
	<table width='600' align='center' class='container' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td align='center' height='20' width='1' style='font-size: 1px;line-height: 10px;height: 10px;'>&nbsp;
	</td>
	</tr>
	
	</tbody>
	</table>
	</td>
	</tr>
	
	</tbody>
	</table>
	<div class='parentOfBg'></div>
	<table align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='margin:0 auto; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px; max-width:680px;' data-module='text-block-1'>
	
	<tbody>
	<tr>
	<td align='center' style='width:100%; height:100%; background-color:#f8f8f8;' data-bgcolor='txt-blck-1-bg'>
	<table width='600' align='center' class='text' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td align='center' height='35' width='1' style='font-size: 1px; line-height: 35px; height:35px;'>
	&nbsp;
	</td>
	</tr>
	
	<tr>
	<td style='text-align: center;font-family: 'Open Sans' , sans-serif;font-size: 25px;line-height: 24px;text-decoration: none;color: #232527;font-weight:700;' data-size='txt-blck-1-text-size' data-min='9' data-max='40' data-color='txt-blck-1-text-color'>
	<multiline>Event Suggestion Submitted</multiline>
	</td>
	</tr>
	
	<tr>
	<td align='center' height='25' width='1' style='font-size: 1px;line-height: 25px;height: 25px;'>
	&nbsp;
	</td>
	</tr>
	<tr>
	<td align='center'>
	<table width='60' height='2' align='center' border='0' cellpadding='0' cellspacing='0' style='width:60px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px; background-color: #232527' data-bgcolor='team-6-line-color'>
	
	<tbody>
	<tr>
	<td align='center' height='2' width='40' style='font-size: 2px; line-height: 2px; width:40px;'></td>
	</tr>
	
	</tbody>
	</table>
	</td>
	</tr>
	
	</tbody>
	</table>
	</td>
	
	</tr>
	
	</tbody>
	</table>
	<table mc:repeatable='layout' mc:hideable='' mc:variant='text-block-1' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='margin:0 auto; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px; max-width:680px;' data-module='text-block-1'>
	
	<tbody>
	<tr>
	<td align='center' style='width:100%; height:100%; background-color:#f8f8f8;' bgcollor='#f8f8f8' data-bgcolor='txt-blck-1-bg'>
	<table width='600' align='center' class='text' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td align='center' height='25' width='1' style='font-size: 1px; line-height: 25px; height:25px;'>&nbsp;
	</td>
	</tr>
	
	<tr>
	<td style='text-align:left;font-family: 'Open Sans' , sans-serif;font-size: 14px;line-height: 24px;text-decoration: none;color: #232527;font-weight:400;' data-size='txt-blck-1-text-size' data-min='9' data-max='40' data-color='txt-blck-1-text-color' mc:edit='txt-blck-1-text-1'>
	<multiline><b>Team,</b>
	</multiline>
	</td>
	</tr>
	
	</tbody>
	</table>
	</td>
	
	</tr>
	
	</tbody>
	</table>
	
	
	<table mc:repeatable='layout' mc:hideable='' mc:variant='text-block-1' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='margin:0 auto; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px; max-width:680px;' data-module='text-block-1'>
	
	<tbody>
	<tr>
	<td align='center' style='width:100%; height:100%; background-color:#f8f8f8;' bgcollor='#f8f8f8' data-bgcolor='txt-blck-1-bg'>
	<table width='600' align='center' class='text' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td align='center' height='25' width='1' style='font-size: 1px;line-height: 15px;height: 15px;'>&nbsp;
	</td>
	</tr>
	
	<tr>
	<td style='text-align:justify; font-family: 'Open Sans' , sans-serif; font-size:14px; line-height: 24px; text-decoration: none; color: #232527; font-weight:400;' data-size='txt-blck-1-text-size' data-min='9' data-max='40' data-color='txt-blck-1-text-color' mc:edit='txt-blck-1-text-1'>
	<multiline>An event suggestion has been submitted by <b>$submittedBy</b> on <b>$suggestedDate</b>. Please find the details of the event below </multiline>
	</td>
	</tr>
	
	</tbody>
	</table>
	</td>
	
	</tr>
	
	</tbody>
	</table>
	
	<table mc:repeatable='layout' mc:hideable='' mc:variant='text-block-1' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='margin:0 auto; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px; max-width:680px;' data-module='text-block-1'>
	
	<tbody>
	<tr>
	<td align='center' style='width:100%; height:100%; background-color:#f8f8f8;' bgcollor='#f8f8f8' data-bgcolor='txt-blck-1-bg'>
	<table width='600' align='center' class='text' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	
	
	</tbody>
	</table>
	</td>
	
	</tr>
	
	</tbody>
	</table>
	
	<table mc:repeatable='layout' mc:hideable='' mc:variant='text-block-1' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='margin:0 auto; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px; max-width:680px;' data-module='text-block-1'>
	
	<tbody>
	<tr>
	<td align='center' style='width:100%; height:100%; background-color:#f8f8f8;' bgcollor='#f8f8f8' data-bgcolor='txt-blck-1-bg'>
	<table width='600' align='center' class='text' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	
	<tr>
	<td align='center' height='25' width='1' style='font-size: 1px;line-height: 15px;height: 15px;'>&nbsp;
	</td>
	</tr>
	
	<tr>
	<td style='text-align:left; font-family: 'Open Sans' , sans-serif; font-size:14px; line-height: 24px; text-decoration: none; color: #232527; font-weight:400;' data-size='txt-blck-1-text-size' data-min='9' data-max='40' data-color='txt-blck-1-text-color' mc:edit='txt-blck-1-text-1'>
	<multiline><b>$suggestedEventName</b> at <b>$eventLocation</b> from <b>$eventStartDate</b> to <b>$eventEndDate</b>. For more details regarding <b>$suggestedEventName</b> please visit <a href='$eventLink' target='blank' ><span style='color:#00aae7;'>$eventLink</span></a>.</multiline>
	</td>
	</tr>
	
	
	</tbody>
	</table>
	</td>
	
	</tr>
	
	</tbody>
	</table>
	
	<table mc:repeatable='layout' mc:hideable='' mc:variant='text-block-1' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='margin:0 auto; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px; max-width:680px;' data-module='text-block-1'>
	
	<tbody>
	<tr>
	<td align='center' style='width:100%; height:100%; background-color:#f8f8f8;' bgcollor='#f8f8f8' data-bgcolor='txt-blck-1-bg'>
	<table width='600' align='center' class='text' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td align='center' height='25' width='1' style='font-size: 1px;line-height: 15px;height: 15px;'>&nbsp;
	</td>
	</tr>
	
	<tr>
	<td style='text-align:left; font-family: 'Open Sans' , sans-serif; font-size:14px; line-height: 24px; text-decoration: none; color: #232527; font-weight:400;' data-size='txt-blck-1-text-size' data-min='9' data-max='40' data-color='txt-blck-1-text-color' mc:edit='txt-blck-1-text-1'>
	
	<multiline><b>Thanks &amp; Regards</b><br><b>Partnerships Team</b><br>
	
	Phone : (248)-412-0430<br>
	Email : <a href='mailto:partnerships@miraclesoft.com'><span style='color:#232527;'>partnerships@miraclesoft.com</span></a>
	</multiline>
	
	</td>
	</tr>
	
	<tr>
	<td align='center' height='46' width='1' style='font-size: 1px; line-height: 46px; height:46px;'>&nbsp;
	</td>
	</tr>
	
	</tbody>
	</table>
	</td>
	
	</tr>
	
	</tbody>
	</table>
	<table mc:repeatable='layout' mc:hideable='' mc:variant='footer-5' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='margin:0 auto; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px; max-width:680px;' data-module='footer-5'>
	
	<tbody>
	<tr>
	<td align='center' style='width:100%; height:100%; background-color:#ffffff;' bgcollor='#ffffff' data-bgcolor='footer-5-bg'>
	<table width='600' align='center' class='container' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td align='center' height='35' width='1' style='font-size: 1px;line-height: 15px;height: 15px;'>&nbsp;
	</td>
	</tr>
	
	<tr>
	<td align='center'>
	<table width='600' align='center' class='text' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	<tbody>
	<tr>
	
	<th width='360' align='left' class='container-wrap' valign='top' style='vertical-align: top;'>
	<table width='360' align='left' class='container' border='0' cellpadding='0' cellspacing='0' style='width:360px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td class='text-left' style='vertical-align:top;text-align:left;font-family: 'Open Sans', sans-serif;font-size:13px;padding-top: 5px;line-height: 24px;text-decoration: none;color: #232527;font-weight: 400;' data-size='footer-5-rights-size' data-min='9' data-max='40' data-color='footer-5-rights-color' mc:edit='footer-5-rights-1.1'>
	<multiline>&copy; Copyrights ".date('Y')." | Miracle Software Systems, Inc.</multiline>
                                                      </td>
                                                   </tr>
			
                                                   <tr>
                                                      <td align='center' height='13' width='1' style='font-size: 1px; line-height: 13px; height:13px;'>&nbsp;
                                                      </td>
                                                   </tr>
			
                                                   <tr>
                                                      <td align='center' height='39' width='1' style='font-size: 1px;line-height: 24px;height: 20px;'>&nbsp;
                                                      </td>
                                                   </tr>
			
                                                </tbody>
                                             </table>
                                          </th>
			
                                          <th width='280' align='right' class='container-wrap' valign='top' style='vertical-align: top;'>
                                             <table width='280' align='right' class='container' border='0' cellpadding='0' cellspacing='0' style='width:280px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
			
                                                <tbody>
                                                   <tr>
                                                      <td class='disable' align='center' height='5' width='1' style='font-size: 1px; line-height: 5px; height:5px;'>&nbsp;
                                                      </td>
                                                   </tr>
			
                                                   <tr>
                                                      <td align='right'>
                                                         <table width='135' align='right' class='container' border='0' cellpadding='0' cellspacing='0' style='width:135px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
			
                                                            <tbody>
                                                               <tr>
                                                                  <td align='left'>
                                                                     <table style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;border: 0px;' align='left' border='0' cellpadding='0' cellspacing='0' width='auto'>
                                                                        <tbody>
                                                                           <tr>
                                                                              <th>
                                                                                    <a href='https://www.facebook.com/miracle45625/' target='blank' style='color:#ef4048; text-decoration: none;'><img src='http://www.miraclesoft.com/images/newsletters/facebook1.png' width='20' height='20' alt='#' style='display:block; vertical-align:middle;'></a>   </th>
			
                                                                              <td align='center' height='1' width='10' style='font-size: 1px; line-height: 1px; width:10px;'>
                                                                              </td>
			
                                                                              <th>
                                                                                <a href='https://plus.google.com/+Team_MSS' target='blank' style='color:#ef4048; text-decoration: none;'><img src='http://www.miraclesoft.com/images/newsletters/googleplus1.png' width='20' height='20' alt='#' style='display:block; vertical-align:middle;'></a>     </th>
			
                                                                              <td align='center' height='1' width='10' style='font-size: 1px; line-height: 1px; width:10px;'>
                                                                              </td>
			
                                                                              <th>
                                                                                     <a href='https://www.linkedin.com/company/miracle-software-systems-inc' target='blank' style='color:#ef4048; text-decoration: none;'><img src='http://www.miraclesoft.com/images/newsletters/Linkedin1.png' width='20' height='20' alt='#' style='display:block; vertical-align:middle;'></a>     </th>
			
                                                                              <td align='center' height='1' width='10' style='font-size: 1px; line-height: 1px; width:10px;'>
                                                                              </td>
			
                                                                              <th>
</th><td>                        <a href='https://www.youtube.com/c/Team_MSS' target='blank' style='color:#ef4048; text-decoration: none;'><img src='http://www.miraclesoft.com/images/newsletters/youtube1.png' width='20' height='20' alt='#' style='display:block; vertical-align:middle;'></a>
			
                                                                              </td><td align='center' height='1' width='10' style='font-size: 1px; line-height: 1px; width:10px;'>
                                                                              </td>
			
                                                                              <th>
</th><td>                        <a href='https://twitter.com/Team_MSS' target='blank' style='color:#ef4048; text-decoration: none;'><img src='http://www.miraclesoft.com/images/newsletters/Twitter1.png' width='20' height='20' alt='#' style='display:block; vertical-align:middle;'></a>
			
                                                                              </td><td align='center' height='1' width='10' style='font-size: 1px; line-height: 1px; width:10px;'>
                                                                              </td>
			
                                                                              <th>
                                                                                </th></tr>
                                                                        </tbody>
                                                                     </table>
                                                                  </td>
                                                               </tr>
			
                                                            </tbody>
                                                         </table>
                                                      </td>
                                                   </tr>
			
                                                   <tr>
                                                      <td align='center' height='39' width='1' style='font-size: 1px;line-height: 24px;height: 20px;'>&nbsp;
                                                      </td>
                                                   </tr>
			
                                                </tbody>
                                             </table>
                                          </th>
			
                                       </tr>
                                    </tbody>
                                 </table>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </td>
			
               </tr>
			
         </tbody>
      </table>
			
<span class='gr__tooltip'><span class='gr__tooltip-content'></span><i class='gr__tooltip-logo'></i><span class='gr__triangle'></span></span></body></html>";
		
		
		
		
		
		
		//$mail->MsgHTML("<b>Hi, your first SMTP mail has been received. Great Job!.. <br/><br/>by <a href='http://www.asif18.com/7/php/send-mails-using-smtp-in-php-by-gmail-server-or-own-domain-server/'>Asif18</a></b>"); //Put your body of the message you can place html code here
		$mail->MsgHTML($bodyContent); //Put your body of the message you can place html code here
		
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
	
	
	
	
	
	
	
	
	function sendYourNominationUpdated($empName,$eventName,$location,$startDate,$endDate,$eventLink,$email){
		
		$mail	= new PHPMailer; // call the class
		$mail->IsSMTP();
		$mail->Host = SMTP_HOST; //Hostname of the mail server
		$mail->Port = SMTP_PORT; //Port of the SMTP like to be 25, 80, 465 or 587
		$mail->SMTPAuth = true; //Whether to use SMTP authentication
		$mail->SMTPSecure = SMTP_SECURE;
		$mail->Username = SMTP_UNAME; //Username for SMTP authentication any valid email created in your domain
		$mail->Password = SMTP_PWORD; //Password for SMTP authentication
		//$mail->AddReplyTo($email, $empName); //reply-to address
		//$mail->SetFrom("mssapp@miraclesoft.com", "Maketing Team"); //From address of the mail
		$mail->SetFrom("partnerships@miraclesoft.com", "Partnerships Team"); //From address of the mail
		// put your while loop here like below,
		$mail->Subject = "Your nomination has been updated!"; //Subject od your mail
		//$mail->AddAddress("skola2@miraclesoft.com", "Santosh Kola"); //To address who will receive this email
		// $mail->AddAddress(CONTACT_US, "info"); //To address who will receive this email
		/*$myArray = explode(';', EVENT_SUGGESTIONS_ADDRESS);
		 for ($i = 0; $i < count($myArray); ++$i) {
		 $innerArray = explode(',', $myArray[$i]);
		 $mail->AddAddress($innerArray[0], $innerArray[1]);
		 }*/
		$startDate = date("F d , Y",strtotime($startDate));
		$endDate = date("F d , Y",strtotime($endDate));
		$mail->AddAddress($email, $empName);
		
		$bodyContent = "<html xmlns='http://www.w3.org/1999/xhtml' class='gr__newsletters-2017-vnallamalla_c9users_io'><head>
		<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<meta http-equiv='X-UA-Compatible' content='IE=edge'>
		<meta name='format-detection' content='telephone=no'>
		<title>Your nomination has been updated</title>
		<style>
		@import url('https://fonts.googleapis.com/css?family=Montserrat:400,700');
		@import url('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i');
		html{width: 100%;}
		body{
		width: 100%;
		background-color: #ffffff;
		margin:0; padding:0;
		-webkit-text-size-adjust:none;
		-ms-text-size-adjust:none;
		-webkit-font-smoothing: ;
		mso-margin-top-alt:0px;
		mso-margin-bottom-alt:0px;
		mso-padding-alt: 0px 0px 0px 0px;}
		div, p, a, li, td { -webkit-text-size-adjust:none; }
		#outlook a {padding:0;}
		p,h1,h2,h3,h4{ margin-top:0; margin-bottom:0; padding-top:0; padding-bottom:0;}
		table{
		mso-table-lspace:0pt;
		mso-table-rspace:0pt;
	}
	table td {border-collapse: collapse;}
	span.preheader{display: none;font-size: 1px; visibility: hidden; opacity: 0; color: transparent; height: 0; width: 0;}
	.googlefix {width: 280px!important; text-align:center!important; min-width:0px!important}
	a {outline:none;}
	a {text-decoration: none;}
	a img {border:none;}
	.image_fix {display:block;}
	.ReadMsgBody { width: 100%;}
	.ExternalClass {width: 100%;}
	.ExternalClass,
	.ExternalClass p,
	.ExternalClass span,
	.ExternalClass font,
	.ExternalClass td,
	.ExternalClass div {
	line-height: 100%;}
	img{
	-ms-interpolation-mode:bicubic;}
	p {
	margin:0 !important;
	padding:0 !important;}
	.button:hover {filter: brightness(120%);}
	@media only screen and (max-width: 600px)
	{
	body{width:100% !important;}
	.container           {width:100% !important; min-width:100% !important;}
	.container-wrap      {display:inline-block !important; width:100% !important; height:auto !important; border-radius:0 !important;}
	.image-container     {width: 100% !important; height: auto !important; }
	.disable             {display: none !important;}
	.enable              {display: inline !important;}
	.padding-top-10      {padding-top: 10px !important;}
	.padding-top-20      {padding-top: 20px !important;}
	.padding-top-30      {padding-top: 30px !important;}
	.padding-top-40      {padding-top: 40px !important;}
	.padding-top-60      {padding-top: 60px !important;}
	.padding-bottom-10   {padding-bottom: 10px !important;}
	.padding-bottom-20   {padding-bottom: 20px !important;}
	.padding-bottom-30   {padding-bottom: 30px !important;}
	.padding-bottom-40   {padding-bottom: 40px !important;}
	.padding-bottom-60   {padding-bottom: 60px !important;}
	.padding-none        {padding:0  !important;}
	.text                {width:90% !important; text-align:center !important;}
	.text-on-bg          {width:90% !important; text-align:center !important;}
	.text-center         {text-align: center !important;}
	.text-right          {text-align: right !important;}
	.text-left           {text-align: left !important;}
	.text-white          {color: #ffffff !important;}
	.background-cover    {background-size: cover !important;}
	.background-cover-percent    {background-size: 100% 79% !important;}
	.background-contain  {background-size: contain !important;}
	.background-auto     {background-size: auto !important;}
	.background-center   {background-position: center center !important;}
	.background-none     {background-image: none !important;}
	.border-none         {border:0 !important;}
	.border-white        {border-color: #ffffff !important;}
	}
	@media only screen and (max-width: 451px)
	{
	body {width:100% !important;}
	.container           {width:100% !important; min-width:100% !important;}
	.container-wrap      {display:inline-block !important; width:100% !important; height:auto !important; border-radius:0 !important;}
	}
	@media only screen and (max-width: 341px)
	{
	body {width:100%!important;}
	.container           {width:100% !important; min-width:100% !important;}
	.container-wrap      {display:inline-block !important; width:100% !important; height:auto !important; border-radius:0 !important;}
	}
	</style>
	</head>
	<body marginwidth='0' marginheight='0' style='margin-top: 0; margin-bottom: 0; padding-top: 0; padding-bottom: 0; width: 100%; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;' offset='0' topmargin='0' leftmargin='0' data-gr-c-s-loaded='true'>
	
	<table mc:repeatable='layout' mc:hideable='' mc:variant='navigation-6' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='margin:0 auto; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px; max-width:680px;' data-module='navigation-6'>
	
	<tbody>
	<tr>
	<td align='center' style='width:100%; height:100%; background-color:#ffffff;' bgcollor='#ffffff' data-bgcolor='nav-6-bg'>
	<table width='600' align='center' class='container' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td align='center' height='20' width='1' style='font-size: 1px; line-height: 20px; height:20px;'>&nbsp;
	</td>
	</tr>
	
	<tr>
	<td align='center'>
	<table width='600' align='center' class='container' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	<tbody>
	<tr>
	
	<th width='140' align='left' class='container-wrap' valign='top' style='vertical-align: top;'>
	<table align='center' cellpadding='0' cellspacing='0'>
	<tbody>
	<tr>
	<td width='160' align='center' valign='top'>
	<table width='100%' align='center' cellpadding='0' cellspacing='0'>
	<tbody>
	<tr>
	<td align='center' valign='top' style='line-height: 0px !important;'>
	<a style='text-decoration: none; display: block;' href='http://www.miraclesoft.com/' target='blank'>
	<img src='http://www.miraclesoft.com/images/newsletters/miracle-logo-dark.png' alt='logo' width='100%' style='width: 100%; max-width: 100%;'>
	</a>
	</td>
	</tr>
	</tbody>
	</table>
	</td>
	</tr>
	</tbody>
	</table>
	</th>
	
	<th width='320' align='right' class='container-wrap' valign='top' style='vertical-align: top;'>
	<table width='320' align='right' class='container' border='0' cellpadding='0' cellspacing='0' style='width:320px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td align='center' height='1' width='1' style='font-size: 1px; line-height: 1px; height:1px;'>&nbsp;
	</td>
	</tr>
	
	<tr>
	<td align='right'>
	<table width='auto' align='right' class='container' border='0' cellpadding='0' cellspacing='0' style='width:autopx; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	<tbody>
	<tr>
	<td align='center'>
	<table width='auto' align='center' class='' border='0' cellpadding='0' cellspacing='0' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	<tbody>
	<tr>
	<td align='center' height='15'>
	</td>
	</tr>
	<tr>
	
	<th align='center' height='1' width='4' style='font-size: 1px; line-height: 1px; width:4px;'>
	</th>
	
	<th style='text-align:center; font-family: oPen sans; font-size:12px; line-height: 20px; text-decoration: none; color: #000000; font-weight:400; text-transform: uppercase; : 0.05em;'>
	<a href='http://www.miraclesoft.com/company/' target='blank' style='text-align:center; font-family: oPen sans; font-size:12px; line-height: 20px; text-decoration: none; color: #000000; font-weight:600; text-transform: uppercase; : 0.05em;' data-size='nav-6-link-size' data-min='9' data-max='40' data-color='nav-6-link-color' mc:edit='nav-6-link-2'>
	<multiline>About us |</multiline>
	</a>
	</th>
	
	<th align='center' height='1' width='4' style='font-size: 1px; line-height: 1px; width:4px;'>
	</th>
	
	<th style='text-align:center; font-family: oPen sans; font-size:12px; line-height: 20px; text-decoration: none; color: #000000; font-weight:400; text-transform: uppercase; : 0.05em;'>
	<a href='http://www.miraclesoft.com/services/' target='blank' style='text-align:center; font-family: oPen sans; font-size:12px; line-height: 20px; text-decoration: none; color: #000000; font-weight:600; text-transform: uppercase; : 0.05em;' data-size='nav-6-link-size' data-min='9' data-max='40' data-color='nav-6-link-color' mc:edit='nav-6-link-3'>
	<multiline> Our Services |</multiline>
	</a>
	</th>
	
	<th align='center' height='1' width='4' style='font-size: 1px; line-height: 1px; width:4px;'>
	</th>
	
	<th style='text-align:center; font-family: oPen sans; font-size:12px; line-height: 20px; text-decoration: none; color: #232527; font-weight:600; text-transform: uppercase; : 0.05em;'>
	<a href='http://www.miraclesoft.com/contact/' target='blank' style='text-align:center; font-family: oPen sans; font-size:12px; line-height: 20px; text-decoration: none; color: #232527; font-weight:600; text-transform: uppercase; : 0.05em;' data-size='nav-6-signUp-size' data-min='9' data-max='40' data-color='nav-6-signUp-color' mc:edit='nav-6-signUp-4'>
	<multiline>Contact us</multiline>
	</a>
	</th>
	
	</tr>
	</tbody>
	</table>
	</td>
	</tr>
	</tbody>
	</table>
	</td>
	</tr>
	
	<tr>
	<td align='center' height='18' width='1' style='font-size: 1px; line-height: 18px; height:18px;'>&nbsp;
	</td>
	</tr>
	
	</tbody>
	</table>
	</th>
	
	</tr>
	</tbody>
	</table>
	</td>
	</tr>
	</tbody>
	</table>
	</td>
	</tr>
	
	</tbody>
	</table>
	<table mc:repeatable='layout' mc:hideable='' mc:variant='navigation-margin' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='margin:0 auto; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px; max-width:680px;' data-module='navigation-margin'>
	
	<tbody>
	<tr>
	<td align='center' style='width:100%; height:100%; background-color:#ffffff;' bgcollor='#ffffff' data-bgcolor='navigation-margin-bg'>
	<table width='600' align='center' class='container' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td align='center' height='20' width='1' style='font-size: 1px;line-height: 10px;height: 10px;'>&nbsp;
	</td>
	</tr>
	
	</tbody>
	</table>
	</td>
	</tr>
	
	</tbody>
	</table>
	<div class='parentOfBg'></div>
	<table align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='margin:0 auto; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px; max-width:680px;' data-module='text-block-1'>
	
	<tbody>
	<tr>
	<td align='center' style='width:100%; height:100%; background-color:#f8f8f8;' data-bgcolor='txt-blck-1-bg'>
	<table width='600' align='center' class='text' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td align='center' height='35' width='1' style='font-size: 1px; line-height: 35px; height:35px;'>
	&nbsp;
	</td>
	</tr>
	
	<tr>
	<td style='text-align: center;font-family: 'Open Sans' , sans-serif;font-size: 25px;line-height: 20px;text-decoration: none;color: #232527;font-weight:700;' data-size='txt-blck-1-text-size' data-min='9' data-max='40' data-color='txt-blck-1-text-color'>
	<multiline>Event Nomination Updated</multiline>
	</td>
	</tr>
	
	<tr>
	<td align='center' height='25' width='1' style='font-size: 1px;line-height: 25px;height: 25px;'>
	&nbsp;
	</td>
	</tr>
	<tr>
	<td align='center'>
	<table width='60' height='2' align='center' border='0' cellpadding='0' cellspacing='0' style='width:60px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px; background-color: #232527' data-bgcolor='team-6-line-color'>
	
	<tbody>
	<tr>
	<td align='center' height='2' width='40' style='font-size: 2px; line-height: 2px; width:40px;'></td>
	</tr>
	
	</tbody>
	</table>
	</td>
	</tr>
	
	</tbody>
	</table>
	</td>
	
	</tr>
	
	</tbody>
	</table>
	<table mc:repeatable='layout' mc:hideable='' mc:variant='text-block-1' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='margin:0 auto; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px; max-width:680px;' data-module='text-block-1'>
	
	<tbody>
	<tr>
	<td align='center' style='width:100%; height:100%; background-color:#f8f8f8;' bgcollor='#f8f8f8' data-bgcolor='txt-blck-1-bg'>
	<table width='600' align='center' class='text' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td align='center' height='25' width='1' style='font-size: 1px; line-height: 25px; height:25px;'>&nbsp;
	</td>
	</tr>
	
	<tr>
	<td style='text-align:left;font-family: 'Open Sans' , sans-serif;font-size: 14px;line-height: 20px;text-decoration: none;color: #232527;font-weight:400;' data-size='txt-blck-1-text-size' data-min='9' data-max='40' data-color='txt-blck-1-text-color' mc:edit='txt-blck-1-text-1'>
	<multiline><b>$empName,</b>
	</multiline>
	</td>
	</tr>
	
	</tbody>
	</table>
	</td>
	
	</tr>
	
	</tbody>
	</table>
	<table mc:repeatable='layout' mc:hideable='' mc:variant='text-block-1' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='margin:0 auto; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px; max-width:680px;' data-module='text-block-1'>
	
	<tbody>
	<tr>
	<td align='center' style='width:100%; height:100%; background-color:#f8f8f8;' bgcollor='#f8f8f8' data-bgcolor='txt-blck-1-bg'>
	<table width='600' align='center' class='text' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td align='center' height='25' width='1' style='font-size: 1px;line-height: 15px;height: 15px;'>&nbsp;
	</td>
	</tr>
	
	<tr>
	<td style='text-align:justify; font-family: 'Open Sans' , sans-serif; font-size:14px; line-height: 20px; text-decoration: none; color: #232527; font-weight:400;' data-size='txt-blck-1-text-size' data-min='9' data-max='40' data-color='txt-blck-1-text-color' mc:edit='txt-blck-1-text-1'>
	<multiline>Your nomination has been successfully updated for <b>$eventName</b> which will be held from <b>$startDate</b> to <b>$endDate</b> at <b>$location</b>.</multiline>
	</td>
	</tr>
	
	</tbody>
	</table>
	</td>
	
	</tr>
	
	</tbody>
	</table>
	
	<table mc:repeatable='layout' mc:hideable='' mc:variant='text-block-1' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='margin:0 auto; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px; max-width:680px;' data-module='text-block-1'>
	
	<tbody>
	<tr>
	<td align='center' style='width:100%; height:100%; background-color:#f8f8f8;' bgcollor='#f8f8f8' data-bgcolor='txt-blck-1-bg'>
	<table width='600' align='center' class='text' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td align='center' height='25' width='1' style='font-size: 1px;line-height: 15px;height: 15px;'>&nbsp;
	</td>
	</tr>
	
	<tr>
	<td style='text-align:left; font-family: 'Open Sans' , sans-serif; font-size:14px; line-height: 20px; text-decoration: none; color: #232527; font-weight:400;' data-size='txt-blck-1-text-size' data-min='9' data-max='40' data-color='txt-blck-1-text-color' mc:edit='txt-blck-1-text-1'>
	<multiline>You will be notified of the event team selection results as the event approaches closer</multiline>
	</td>
	</tr>
	<tr>
	<td align='center' height='25' width='1' style='font-size: 1px;line-height: 15px;height: 15px;'>&nbsp;
	</td>
	</tr>
	
	<tr>
	<td style='text-align:left; font-family: 'Open Sans' , sans-serif; font-size:14px; line-height: 20px; text-decoration: none; color: #232527; font-weight:400;' data-size='txt-blck-1-text-size' data-min='9' data-max='40' data-color='txt-blck-1-text-color' mc:edit='txt-blck-1-text-1'>
	<multiline>For more details regarding <b>$eventName</b> please visit <a href='$eventLink' target='blank' ><span style='color:#00aae7;'>$eventLink</span></a>.</multiline>
	</td>
	</tr>
	<tr>
	<td align='center' height='25' width='1' style='font-size: 1px;line-height: 15px;height: 15px;'>&nbsp;
	</td>
	</tr>
	
	<tr>
	<td style='text-align:left; font-family: 'Open Sans' , sans-serif; font-size:14px; line-height: 20px; text-decoration: none; color: #232527; font-weight:400;' data-size='txt-blck-1-text-size' data-min='9' data-max='40' data-color='txt-blck-1-text-color' mc:edit='txt-blck-1-text-1'>
	<multiline>For more information please reach out to <a href='mailto:partnerships@miraclesoft.com'><span style='color:#00aae7;'>partnerships@miraclesoft.com</span></a> (or) visit <a href='http://www.miraclesoft.com/conferencenominations' target='blank'><span style='color:#00aae7;'>www.miraclesoft.com/conferencenominations.</span></a>
	</multiline>
	</td>
	</tr>
	</tbody>
	</table>
	</td>
	
	</tr>
	
	</tbody>
	</table>
	<table mc:repeatable='layout' mc:hideable='' mc:variant='text-block-1' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='margin:0 auto; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px; max-width:680px;' data-module='text-block-1'>
	
	<tbody>
	<tr>
	<td align='center' style='width:100%; height:100%; background-color:#f8f8f8;' bgcollor='#f8f8f8' data-bgcolor='txt-blck-1-bg'>
	<table width='600' align='center' class='text' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td align='center' height='25' width='1' style='font-size: 1px;line-height: 15px;height: 15px;'>&nbsp;
	</td>
	</tr>
	
	<tr>
	<td style='text-align:left; font-family: 'Open Sans' , sans-serif; font-size:14px; line-height: 20px; text-decoration: none; color: #232527; font-weight:400;' data-size='txt-blck-1-text-size' data-min='9' data-max='40' data-color='txt-blck-1-text-color' mc:edit='txt-blck-1-text-1'>
	
	<multiline><b>Thanks &amp; Regards</b><br><b>Partnerships Team</b><br>
	
	Phone : (248)-412-0430<br>
	Email : <a href='mailto:partnerships@miraclesoft.com'><span style='color:#232527;'>partnerships@miraclesoft.com</span></a>
	</multiline>
	
	</td>
	</tr>
	
	<tr>
	<td align='center' height='46' width='1' style='font-size: 1px; line-height: 46px; height:46px;'>&nbsp;
	</td>
	</tr>
	
	</tbody>
	</table>
	</td>
	
	</tr>
	
	</tbody>
	</table>
	<table mc:repeatable='layout' mc:hideable='' mc:variant='footer-5' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='margin:0 auto; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px; max-width:680px;' data-module='footer-5'>
	
	<tbody>
	<tr>
	<td align='center' style='width:100%; height:100%; background-color:#ffffff;' bgcollor='#ffffff' data-bgcolor='footer-5-bg'>
	<table width='600' align='center' class='container' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td align='center' height='35' width='1' style='font-size: 1px;line-height: 15px;height: 15px;'>&nbsp;
	</td>
	</tr>
	
	<tr>
	<td align='center'>
	<table width='600' align='center' class='text' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	<tbody>
	<tr>
	
	<th width='360' align='left' class='container-wrap' valign='top' style='vertical-align: top;'>
	<table width='360' align='left' class='container' border='0' cellpadding='0' cellspacing='0' style='width:360px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td class='text-left' style='vertical-align:top;text-align:left;font-family: 'Open Sans', sans-serif;font-size:13px;padding-top: 5px;line-height: 20px;text-decoration: none;color: #232527;font-weight: 400;' data-size='footer-5-rights-size' data-min='9' data-max='40' data-color='footer-5-rights-color' mc:edit='footer-5-rights-1.1'>
	<multiline>&copy; Copyrights ".date('Y')." | Miracle Software Systems, Inc.</multiline>
                                                      </td>
                                                   </tr>
			
			
                                                   <tr>
                                                      <td align='center' height='13' width='1' style='font-size: 1px; line-height: 13px; height:13px;'>&nbsp;
                                                      </td>
                                                   </tr>
			
                                                   <tr>
                                                      <td align='center' height='39' width='1' style='font-size: 1px;line-height: 20px;height: 20px;'>&nbsp;
                                                      </td>
                                                   </tr>
			
                                                </tbody>
                                             </table>
                                          </th>
			
                                          <th width='280' align='right' class='container-wrap' valign='top' style='vertical-align: top;'>
                                             <table width='280' align='right' class='container' border='0' cellpadding='0' cellspacing='0' style='width:280px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
			
                                                <tbody>
                                                   <tr>
                                                      <td class='disable' align='center' height='5' width='1' style='font-size: 1px; line-height: 5px; height:5px;'>&nbsp;
                                                      </td>
                                                   </tr>
			
                                                   <tr>
                                                      <td align='right'>
                                                         <table width='135' align='right' class='container' border='0' cellpadding='0' cellspacing='0' style='width:135px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
			
                                                            <tbody>
                                                               <tr>
                                                                  <td align='left'>
                                                                     <table style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;border: 0px;' align='left' border='0' cellpadding='0' cellspacing='0' width='auto'>
                                                                        <tbody>
                                                                           <tr>
                                                                              <th>
                                                                                 <a href='https://www.facebook.com/miracle45625/' target='blank' style='color:#ef4048; text-decoration: none;'><img src='http://www.miraclesoft.com/images/newsletters/facebook1.png' width='20' height='20' alt='#' style='display:block; vertical-align:middle;'></a>
                                                                              </th>
			
                                                                              <td align='center' height='1' width='10' style='font-size: 1px; line-height: 1px; width:10px;'>
                                                                              </td>
			
                                                                              <th>
                                                                                 <a href='https://plus.google.com/+Team_MSS' target='blank' style='color:#ef4048; text-decoration: none;'><img src='http://www.miraclesoft.com/images/newsletters/googleplus1.png' width='20' height='20' alt='#' style='display:block; vertical-align:middle;'></a>
                                                                              </th>
			
                                                                              <td align='center' height='1' width='10' style='font-size: 1px; line-height: 1px; width:10px;'>
                                                                              </td>
			
                                                                              <th>
                                                                                 <a href='https://www.linkedin.com/company/miracle-software-systems-inc' target='blank' style='color:#ef4048; text-decoration: none;'><img src='http://www.miraclesoft.com/images/newsletters/Linkedin1.png' width='20' height='20' alt='#' style='display:block; vertical-align:middle;'></a>
                                                                              </th>
			
                                                                              <td align='center' height='1' width='10' style='font-size: 1px; line-height: 1px; width:10px;'>
                                                                              </td>
			
                                                                              <th></th>
                                                                              <td>
                                                                                 <a href='https://www.youtube.com/c/Team_MSS' target='blank' style='color:#ef4048; text-decoration: none;'><img src='http://www.miraclesoft.com/images/newsletters/youtube1.png' width='20' height='20' alt='#' style='display:block; vertical-align:middle;'></a>
			
                                                                              </td>
                                                                              <td align='center' height='1' width='10' style='font-size: 1px; line-height: 1px; width:10px;'>
                                                                              </td>
			
                                                                              <th></th>
                                                                              <td>
                                                                                 <a href='https://twitter.com/Team_MSS' target='blank' style='color:#ef4048; text-decoration: none;'><img src='http://www.miraclesoft.com/images/newsletters/Twitter1.png' width='20' height='20' alt='#' style='display:block; vertical-align:middle;'></a>
			
                                                                              </td>
                                                                              <td align='center' height='1' width='10' style='font-size: 1px; line-height: 1px; width:10px;'>
                                                                              </td>
			
                                                                              <th>
                                                                              </th>
                                                                           </tr>
                                                                        </tbody>
                                                                     </table>
                                                                  </td>
                                                               </tr>
			
                                                            </tbody>
                                                         </table>
                                                      </td>
                                                   </tr>
			
                                                   <tr>
                                                      <td align='center' height='39' width='1' style='font-size: 1px;line-height: 20px;height: 20px;'>&nbsp;
                                                      </td>
                                                   </tr>
			
                                                </tbody>
                                             </table>
                                          </th>
			
                                       </tr>
                                    </tbody>
                                 </table>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </td>
			
               </tr>
			
         </tbody>
      </table>
      <span class='gr__tooltip'><span class='gr__tooltip-content'></span><i class='gr__tooltip-logo'></i><span class='gr__triangle'></span></span>
			
</body></html>";
		
		
		//$mail->MsgHTML("<b>Hi, your first SMTP mail has been received. Great Job!.. <br/><br/>by <a href='http://www.asif18.com/7/php/send-mails-using-smtp-in-php-by-gmail-server-or-own-domain-server/'>Asif18</a></b>"); //Put your body of the message you can place html code here
		$mail->MsgHTML($bodyContent); //Put your body of the message you can place html code here
		
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
	
	
	
	function sendNominationUpdated($eventName,$location,$startDate,$endDate,$empName,$workPhone,$empEmail){
		
		$mail	= new PHPMailer; // call the class
		$mail->IsSMTP();
		$mail->Host = SMTP_HOST; //Hostname of the mail server
		$mail->Port = SMTP_PORT; //Port of the SMTP like to be 25, 80, 465 or 587
		$mail->SMTPAuth = true; //Whether to use SMTP authentication
		$mail->SMTPSecure = SMTP_SECURE;
		$mail->Username = SMTP_UNAME; //Username for SMTP authentication any valid email created in your domain
		$mail->Password = SMTP_PWORD; //Password for SMTP authentication
		//$mail->AddReplyTo($email, $fname); //reply-to address
		//$mail->SetFrom("mssapp@miraclesoft.com", "Maketing Team"); //From address of the mail
		// $mail->SetFrom("partnerships@miraclesoft.com", "Partnerships Team"); //From address of the mail
		$mail->SetFrom($empEmail, $empName); //From address of the mail
		// put your while loop here like below,
		$mail->Subject = "Nomination Updated"; //Subject od your mail
		//$mail->AddAddress("skola2@miraclesoft.com", "Santosh Kola"); //To address who will receive this email
		// $mail->AddAddress(CONTACT_US, "info"); //To address who will receive this email
		$myArray = explode(';', NEW_NOMINATIONS_SUBMITTED);
		for ($i = 0; $i < count($myArray); ++$i) {
			$innerArray = explode(',', $myArray[$i]);
			$mail->AddAddress($innerArray[0], $innerArray[1]);
		}
		
		$startDate = date("F d , Y",strtotime($startDate));
		$endDate = date("F d , Y",strtotime($endDate));
		$bodyContent = "<html xmlns='http://www.w3.org/1999/xhtml' class='gr__newsletters-2017-vnallamalla_c9users_io'><head>
		<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<meta http-equiv='X-UA-Compatible' content='IE=edge'>
		<meta name='format-detection' content='telephone=no'>
		<title>Nomination has been updated</title>
		<style>
		@import url('https://fonts.googleapis.com/css?family=Montserrat:400,700');
		@import url('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i');
		html{width: 100%;}
		body{
		width: 100%;
		background-color: #ffffff;
		margin:0; padding:0;
		-webkit-text-size-adjust:none;
		-ms-text-size-adjust:none;
		-webkit-font-smoothing: ;
		mso-margin-top-alt:0px;
		mso-margin-bottom-alt:0px;
		mso-padding-alt: 0px 0px 0px 0px;}
		div, p, a, li, td { -webkit-text-size-adjust:none; }
		#outlook a {padding:0;}
		p,h1,h2,h3,h4{ margin-top:0; margin-bottom:0; padding-top:0; padding-bottom:0;}
		table{
		mso-table-lspace:0pt;
		mso-table-rspace:0pt;
	}
	table td {border-collapse: collapse;}
	span.preheader{display: none;font-size: 1px; visibility: hidden; opacity: 0; color: transparent; height: 0; width: 0;}
	.googlefix {width: 280px!important; text-align:center!important; min-width:0px!important}
	a {outline:none;}
	a {text-decoration: none;}
	a img {border:none;}
	.image_fix {display:block;}
	.ReadMsgBody { width: 100%;}
	.ExternalClass {width: 100%;}
	.ExternalClass,
	.ExternalClass p,
	.ExternalClass span,
	.ExternalClass font,
	.ExternalClass td,
	.ExternalClass div {
	line-height: 100%;}
	img{
	-ms-interpolation-mode:bicubic;}
	p {
	margin:0 !important;
	padding:0 !important;}
	.button:hover {filter: brightness(120%);}
	@media only screen and (max-width: 600px)
	{
	body{width:100% !important;}
	.container           {width:100% !important; min-width:100% !important;}
	.container-wrap      {display:inline-block !important; width:100% !important; height:auto !important; border-radius:0 !important;}
	.image-container     {width: 100% !important; height: auto !important; }
	.disable             {display: none !important;}
	.enable              {display: inline !important;}
	.padding-top-10      {padding-top: 10px !important;}
	.padding-top-20      {padding-top: 20px !important;}
	.padding-top-30      {padding-top: 30px !important;}
	.padding-top-40      {padding-top: 40px !important;}
	.padding-top-60      {padding-top: 60px !important;}
	.padding-bottom-10   {padding-bottom: 10px !important;}
	.padding-bottom-20   {padding-bottom: 20px !important;}
	.padding-bottom-30   {padding-bottom: 30px !important;}
	.padding-bottom-40   {padding-bottom: 40px !important;}
	.padding-bottom-60   {padding-bottom: 60px !important;}
	.padding-none        {padding:0  !important;}
	.text                {width:90% !important; text-align:center !important;}
	.text-on-bg          {width:90% !important; text-align:center !important;}
	.text-center         {text-align: center !important;}
	.text-right          {text-align: right !important;}
	.text-left           {text-align: left !important;}
	.text-white          {color: #ffffff !important;}
	.background-cover    {background-size: cover !important;}
	.background-cover-percent    {background-size: 100% 79% !important;}
	.background-contain  {background-size: contain !important;}
	.background-auto     {background-size: auto !important;}
	.background-center   {background-position: center center !important;}
	.background-none     {background-image: none !important;}
	.border-none         {border:0 !important;}
	.border-white        {border-color: #ffffff !important;}
	}
	@media only screen and (max-width: 451px)
	{
	body {width:100% !important;}
	.container           {width:100% !important; min-width:100% !important;}
	.container-wrap      {display:inline-block !important; width:100% !important; height:auto !important; border-radius:0 !important;}
	}
	@media only screen and (max-width: 341px)
	{
	body {width:100%!important;}
	.container           {width:100% !important; min-width:100% !important;}
	.container-wrap      {display:inline-block !important; width:100% !important; height:auto !important; border-radius:0 !important;}
	}
	</style>
	</head>
	<body marginwidth='0' marginheight='0' style='margin-top: 0; margin-bottom: 0; padding-top: 0; padding-bottom: 0; width: 100%; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;' offset='0' topmargin='0' leftmargin='0' data-gr-c-s-loaded='true'>
	
	<table mc:repeatable='layout' mc:hideable='' mc:variant='navigation-6' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='margin:0 auto; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px; max-width:680px;' data-module='navigation-6'>
	
	<tbody>
	<tr>
	<td align='center' style='width:100%; height:100%; background-color:#ffffff;' bgcollor='#ffffff' data-bgcolor='nav-6-bg'>
	<table width='600' align='center' class='container' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td align='center' height='20' width='1' style='font-size: 1px; line-height: 20px; height:20px;'>&nbsp;
	</td>
	</tr>
	
	<tr>
	<td align='center'>
	<table width='600' align='center' class='container' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	<tbody>
	<tr>
	
	<th width='140' align='left' class='container-wrap' valign='top' style='vertical-align: top;'>
	<table align='center' cellpadding='0' cellspacing='0'>
	<tbody>
	<tr>
	<td width='160' align='center' valign='top'>
	<table width='100%' align='center' cellpadding='0' cellspacing='0'>
	<tbody>
	<tr>
	<td align='center' valign='top' style='line-height: 0px !important;'>
	<a style='text-decoration: none; display: block;' href='http://www.miraclesoft.com/' target='blank'>
	<img src='http://www.miraclesoft.com/images/newsletters/miracle-logo-dark.png' alt='logo' width='100%' style='width: 100%; max-width: 100%;'>
	</a>
	</td>
	</tr>
	</tbody>
	</table>
	</td>
	</tr>
	</tbody>
	</table>
	</th>
	
	<th width='320' align='right' class='container-wrap' valign='top' style='vertical-align: top;'>
	<table width='320' align='right' class='container' border='0' cellpadding='0' cellspacing='0' style='width:320px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td align='center' height='1' width='1' style='font-size: 1px; line-height: 1px; height:1px;'>&nbsp;
	</td>
	</tr>
	
	<tr>
	<td align='right'>
	<table width='auto' align='right' class='container' border='0' cellpadding='0' cellspacing='0' style='width:autopx; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	<tbody>
	<tr>
	<td align='center'>
	<table width='auto' align='center' class='' border='0' cellpadding='0' cellspacing='0' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	<tbody>
	<tr>
	<td align='center' height='15'>
	</td>
	</tr>
	<tr>
	
	<th align='center' height='1' width='4' style='font-size: 1px; line-height: 1px; width:4px;'>
	</th>
	
	<th style='text-align:center; font-family: oPen sans; font-size:12px; line-height: 20px; text-decoration: none; color: #000000; font-weight:400; text-transform: uppercase; : 0.05em;'>
	<a href='http://www.miraclesoft.com/company/' target='blank' style='text-align:center; font-family: oPen sans; font-size:12px; line-height: 20px; text-decoration: none; color: #000000; font-weight:600; text-transform: uppercase; : 0.05em;' data-size='nav-6-link-size' data-min='9' data-max='40' data-color='nav-6-link-color' mc:edit='nav-6-link-2'>
	<multiline><b>About us</b> |</multiline>
	</a>
	</th>
	
	<th align='center' height='1' width='4' style='font-size: 1px; line-height: 1px; width:4px;'>
	</th>
	
	<th style='text-align:center; font-family: oPen sans; font-size:12px; line-height: 20px; text-decoration: none; color: #000000; font-weight:400; text-transform: uppercase; : 0.05em;'>
	<a href='http://www.miraclesoft.com/services/' target='blank' style='text-align:center; font-family: oPen sans; font-size:12px; line-height: 20px; text-decoration: none; color: #000000; font-weight:600; text-transform: uppercase; : 0.05em;' data-size='nav-6-link-size' data-min='9' data-max='40' data-color='nav-6-link-color' mc:edit='nav-6-link-3'>
	<multiline> <b>Our Services</b> |</multiline>
	</a>
	</th>
	
	<th align='center' height='1' width='4' style='font-size: 1px; line-height: 1px; width:4px;'>
	</th>
	
	<th style='text-align:center; font-family: oPen sans; font-size:12px; line-height: 20px; text-decoration: none; color: #232527; font-weight:600; text-transform: uppercase; : 0.05em;'>
	<a href='http://www.miraclesoft.com/contact/' target='blank' style='text-align:center; font-family: oPen sans; font-size:12px; line-height: 20px; text-decoration: none; color: #232527; font-weight:600; text-transform: uppercase; : 0.05em;' data-size='nav-6-signUp-size' data-min='9' data-max='40' data-color='nav-6-signUp-color' mc:edit='nav-6-signUp-4'>
	<multiline><b>Contact us</b></multiline>
	</a>
	</th>
	
	</tr>
	</tbody>
	</table>
	</td>
	</tr>
	</tbody>
	</table>
	</td>
	</tr>
	
	<tr>
	<td align='center' height='18' width='1' style='font-size: 1px; line-height: 18px; height:18px;'>&nbsp;
	</td>
	</tr>
	
	</tbody>
	</table>
	</th>
	
	</tr>
	</tbody>
	</table>
	</td>
	</tr>
	</tbody>
	</table>
	</td>
	</tr>
	
	</tbody>
	</table>
	<table mc:repeatable='layout' mc:hideable='' mc:variant='navigation-margin' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='margin:0 auto; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px; max-width:680px;' data-module='navigation-margin'>
	
	<tbody>
	<tr>
	<td align='center' style='width:100%; height:100%; background-color:#ffffff;' bgcollor='#ffffff' data-bgcolor='navigation-margin-bg'>
	<table width='600' align='center' class='container' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td align='center' height='20' width='1' style='font-size: 1px;line-height: 10px;height: 10px;'>&nbsp;
	</td>
	</tr>
	
	</tbody>
	</table>
	</td>
	</tr>
	
	</tbody>
	</table>
	<div class='parentOfBg'></div>
	<table align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='margin:0 auto; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px; max-width:680px;' data-module='text-block-1'>
	
	<tbody>
	<tr>
	<td align='center' style='width:100%; height:100%; background-color:#f8f8f8;' data-bgcolor='txt-blck-1-bg'>
	<table width='600' align='center' class='text' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td align='center' height='35' width='1' style='font-size: 1px; line-height: 35px; height:35px;'>
	&nbsp;
	</td>
	</tr>
	
	<tr>
	<td style='text-align: center;font-family: 'Open Sans' , sans-serif;font-size: 25px;line-height: 20px;text-decoration: none;color: #232527;font-weight:700;' data-size='txt-blck-1-text-size' data-min='9' data-max='40' data-color='txt-blck-1-text-color'>
	<multiline>Nomination Updated</multiline>
	</td>
	</tr>
	
	<tr>
	<td align='center' height='25' width='1' style='font-size: 1px;line-height: 25px;height: 25px;'>
	&nbsp;
	</td>
	</tr>
	<tr>
	<td align='center'>
	<table width='60' height='2' align='center' border='0' cellpadding='0' cellspacing='0' style='width:60px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px; background-color: #232527' data-bgcolor='team-6-line-color'>
	
	<tbody>
	<tr>
	<td align='center' height='2' width='40' style='font-size: 2px; line-height: 2px; width:40px;'></td>
	</tr>
	
	</tbody>
	</table>
	</td>
	</tr>
	
	</tbody>
	</table>
	</td>
	
	</tr>
	
	</tbody>
	</table>
	<table mc:repeatable='layout' mc:hideable='' mc:variant='text-block-1' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='margin:0 auto; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px; max-width:680px;' data-module='text-block-1'>
	
	<tbody>
	<tr>
	<td align='center' style='width:100%; height:100%; background-color:#f8f8f8;' bgcollor='#f8f8f8' data-bgcolor='txt-blck-1-bg'>
	<table width='600' align='center' class='text' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td align='center' height='25' width='1' style='font-size: 1px; line-height: 25px; height:25px;'>&nbsp;
	</td>
	</tr>
	
	<tr>
	<td style='text-align:left;font-family: 'Open Sans' , sans-serif;font-size: 14px;line-height: 20px;text-decoration: none;color: #232527;font-weight:400;' data-size='txt-blck-1-text-size' data-min='9' data-max='40' data-color='txt-blck-1-text-color' mc:edit='txt-blck-1-text-1'>
	<multiline><b>Team,</b>
	</multiline>
	</td>
	</tr>
	
	</tbody>
	</table>
	</td>
	
	</tr>
	
	</tbody>
	</table>
	<table mc:repeatable='layout' mc:hideable='' mc:variant='text-block-1' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='margin:0 auto; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px; max-width:680px;' data-module='text-block-1'>
	
	<tbody>
	<tr>
	<td align='center' style='width:100%; height:100%; background-color:#f8f8f8;' bgcollor='#f8f8f8' data-bgcolor='txt-blck-1-bg'>
	<table width='600' align='center' class='text' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td align='center' height='25' width='1' style='font-size: 1px;line-height: 15px;height: 15px;'>&nbsp;
	</td>
	</tr>
	
	<tr>
	<td style='text-align:justify; font-family: 'Open Sans' , sans-serif; font-size:14px; line-height: 24px; text-decoration: none; color: #232527; font-weight:400;' data-size='txt-blck-1-text-size' data-min='9' data-max='40' data-color='txt-blck-1-text-color' mc:edit='txt-blck-1-text-1'>
	<multiline><b>$empName</b> has successfully updated his/her details for <b>$eventName</b> which will be held from <b>$startDate</b> to <b>$endDate</b> at <b>$location</b>.</multiline>
	</td>
	</tr>
	<tr>
	<td align='center' height='25' width='1' style='font-size: 1px;line-height: 15px;height: 15px;'>&nbsp;
	</td>
	</tr>
	<tr>
	<td align='left' class='button-width'>
	<table align='left' class='display-button' bgcolor='#232527' style='border-radius: 5px;' data-bgcolor='Header-Butn-BG'>
	<tbody>
	<tr>
	<td align='left' class='MsoNormal' style='color: #ffffff; font-family:'Open Sans'; font-size: 15px; font-weight: 700; padding: 2px 12px;  border-radius: 5px; line-height: 25.5px;' data-color='Header-Butn-Txt' data-size='Header-Butn-Txt' data-min='12' data-max='33'><a href='http://www.miraclesoft.com/Hubble' target='blank' class='' style='color:#ffffff; text-decoration:none;' data-color='Header-Butn-Txt'>Nomination Details</a></td>
	</tr>
	</tbody>
	</table>
	
	</td>
	
	</tr>
	<tr>
	<td align='center' height='25' width='1' style='font-size: 1px;line-height: 15px;height: 15px;'>&nbsp;
	</td>
	</tr>
	
	<tr>
	<td style='text-align:justify; font-family: 'Open Sans' , sans-serif; font-size:14px; line-height: 24px; text-decoration: none; color: #232527; font-weight:400;' data-size='txt-blck-1-text-size' data-min='9' data-max='40' data-color='txt-blck-1-text-color' mc:edit='txt-blck-1-text-1'>
	<multiline>For more information please reach out to <a href='mailto:partnerships@miraclesoft.com'><span style='color:#00aae7;'>partnerships@miraclesoft.com</span></a> (or) visit <a href='http://www.miraclesoft.com/conferencenominations' target='blank'><span style='color:#00aae7;'>www.miraclesoft.com/conferencenominations.</span></a>
	</multiline>
	</td>
	</tr>
	</tbody>
	</table>
	</td>
	
	</tr>
	
	</tbody>
	</table>
	
	
	<table mc:repeatable='layout' mc:hideable='' mc:variant='text-block-1' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='margin:0 auto; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px; max-width:680px;' data-module='text-block-1'>
	
	<tbody>
	<tr>
	<td align='center' style='width:100%; height:100%; background-color:#f8f8f8;' bgcollor='#f8f8f8' data-bgcolor='txt-blck-1-bg'>
	<table width='600' align='center' class='text' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td align='center' height='25' width='1' style='font-size: 1px;line-height: 15px;height: 15px;'>&nbsp;
	</td>
	</tr>
	
	<tr>
	<td style='text-align:left; font-family: 'Open Sans' , sans-serif; font-size:14px; line-height: 24px; text-decoration: none; color: #232527; font-weight:400;' data-size='txt-blck-1-text-size' data-min='9' data-max='40' data-color='txt-blck-1-text-color' mc:edit='txt-blck-1-text-1'>
	
	<multiline><b>Thanks &amp; Regards</b><br><b>Partnerships Team</b><br>
	
	Phone : (248)-412-0430<br>
	Email : <a href='mailto:partnerships@miraclesoft.com'><span style='color:#232527;'>partnerships@miraclesoft.com</span></a>
	</multiline>
	
	</td>
	</tr>
	
	<tr>
	<td align='center' height='46' width='1' style='font-size: 1px; line-height: 46px; height:46px;'>&nbsp;
	</td>
	</tr>
	
	</tbody>
	</table>
	</td>
	
	</tr>
	
	</tbody>
	</table>
	<table mc:repeatable='layout' mc:hideable='' mc:variant='footer-5' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='margin:0 auto; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px; max-width:680px;' data-module='footer-5'>
	
	<tbody>
	<tr>
	<td align='center' style='width:100%; height:100%; background-color:#ffffff;' bgcollor='#ffffff' data-bgcolor='footer-5-bg'>
	<table width='600' align='center' class='container' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td align='center' height='35' width='1' style='font-size: 1px;line-height: 15px;height: 15px;'>&nbsp;
	</td>
	</tr>
	
	<tr>
	<td align='center'>
	<table width='600' align='center' class='text' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	<tbody>
	<tr>
	
	<th width='360' align='left' class='container-wrap' valign='top' style='vertical-align: top;'>
	<table width='360' align='left' class='container' border='0' cellpadding='0' cellspacing='0' style='width:360px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td class='text-left' style='vertical-align:top;text-align:left;font-family: 'Open Sans', sans-serif;font-size:13px;padding-top: 5px;line-height: 20px;text-decoration: none;color: #232527;font-weight: 400;' data-size='footer-5-rights-size' data-min='9' data-max='40' data-color='footer-5-rights-color' mc:edit='footer-5-rights-1.1'>
	<multiline>&copy; Copyrights ".date('Y')." | Miracle Software Systems, Inc.</multiline>
                                                      </td>
                                                   </tr>
			
			
                                                   <tr>
                                                      <td align='center' height='13' width='1' style='font-size: 1px; line-height: 13px; height:13px;'>&nbsp;
                                                      </td>
                                                   </tr>
			
                                                   <tr>
                                                      <td align='center' height='39' width='1' style='font-size: 1px;line-height: 20px;height: 20px;'>&nbsp;
                                                      </td>
                                                   </tr>
			
                                                </tbody>
                                             </table>
                                          </th>
			
                                          <th width='280' align='right' class='container-wrap' valign='top' style='vertical-align: top;'>
                                             <table width='280' align='right' class='container' border='0' cellpadding='0' cellspacing='0' style='width:280px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
			
                                                <tbody>
                                                   <tr>
                                                      <td class='disable' align='center' height='5' width='1' style='font-size: 1px; line-height: 5px; height:5px;'>&nbsp;
                                                      </td>
                                                   </tr>
			
                                                   <tr>
                                                      <td align='right'>
                                                         <table width='135' align='right' class='container' border='0' cellpadding='0' cellspacing='0' style='width:135px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
			
                                                            <tbody>
                                                               <tr>
                                                                  <td align='left'>
                                                                     <table style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;border: 0px;' align='left' border='0' cellpadding='0' cellspacing='0' width='auto'>
                                                                        <tbody>
                                                                           <tr>
                                                                              <th>
                                                                                 <a href='https://www.facebook.com/miracle45625/' target='blank' style='color:#ef4048; text-decoration: none;'><img src='http://www.miraclesoft.com/images/newsletters/facebook1.png' width='20' height='20' alt='#' style='display:block; vertical-align:middle;'></a>
                                                                              </th>
			
                                                                              <td align='center' height='1' width='10' style='font-size: 1px; line-height: 1px; width:10px;'>
                                                                              </td>
			
                                                                              <th>
                                                                                 <a href='https://plus.google.com/+Team_MSS' target='blank' style='color:#ef4048; text-decoration: none;'><img src='http://www.miraclesoft.com/images/newsletters/googleplus1.png' width='20' height='20' alt='#' style='display:block; vertical-align:middle;'></a>
                                                                              </th>
			
                                                                              <td align='center' height='1' width='10' style='font-size: 1px; line-height: 1px; width:10px;'>
                                                                              </td>
			
                                                                              <th>
                                                                                 <a href='https://www.linkedin.com/company/miracle-software-systems-inc' target='blank' style='color:#ef4048; text-decoration: none;'><img src='http://www.miraclesoft.com/images/newsletters/Linkedin1.png' width='20' height='20' alt='#' style='display:block; vertical-align:middle;'></a>
                                                                              </th>
			
                                                                              <td align='center' height='1' width='10' style='font-size: 1px; line-height: 1px; width:10px;'>
                                                                              </td>
			
                                                                              <th></th>
                                                                              <td>
                                                                                 <a href='https://www.youtube.com/c/Team_MSS' target='blank' style='color:#ef4048; text-decoration: none;'><img src='http://www.miraclesoft.com/images/newsletters/youtube1.png' width='20' height='20' alt='#' style='display:block; vertical-align:middle;'></a>
			
                                                                              </td>
                                                                              <td align='center' height='1' width='10' style='font-size: 1px; line-height: 1px; width:10px;'>
                                                                              </td>
			
                                                                              <th></th>
                                                                              <td>
                                                                                 <a href='https://twitter.com/Team_MSS' target='blank' style='color:#ef4048; text-decoration: none;'><img src='http://www.miraclesoft.com/images/newsletters/Twitter1.png' width='20' height='20' alt='#' style='display:block; vertical-align:middle;'></a>
			
                                                                              </td>
                                                                              <td align='center' height='1' width='10' style='font-size: 1px; line-height: 1px; width:10px;'>
                                                                              </td>
			
                                                                              <th>
                                                                              </th>
                                                                           </tr>
                                                                        </tbody>
                                                                     </table>
                                                                  </td>
                                                               </tr>
			
                                                            </tbody>
                                                         </table>
                                                      </td>
                                                   </tr>
			
                                                   <tr>
                                                      <td align='center' height='39' width='1' style='font-size: 1px;line-height: 20px;height: 20px;'>&nbsp;
                                                      </td>
                                                   </tr>
			
                                                </tbody>
                                             </table>
                                          </th>
			
                                       </tr>
                                    </tbody>
                                 </table>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </td>
			
               </tr>
			
         </tbody>
      </table>
      <span class='gr__tooltip'><span class='gr__tooltip-content'></span><i class='gr__tooltip-logo'></i><span class='gr__triangle'></span></span>
			
</body></html>";
		
		
		//$mail->MsgHTML("<b>Hi, your first SMTP mail has been received. Great Job!.. <br/><br/>by <a href='http://www.asif18.com/7/php/send-mails-using-smtp-in-php-by-gmail-server-or-own-domain-server/'>Asif18</a></b>"); //Put your body of the message you can place html code here
		$mail->MsgHTML($bodyContent); //Put your body of the message you can place html code here
		
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
	
	
	function sendYouHaveBeenNominated($eventName,$location,$startDate,$endDate,$collegueEmail,$nominatoreName,$collegueName,$collegueConferenceId,$conferenceCountry){
		
		$mail	= new PHPMailer; // call the class
		$mail->IsSMTP();
		$mail->Host = SMTP_HOST; //Hostname of the mail server
		$mail->Port = SMTP_PORT; //Port of the SMTP like to be 25, 80, 465 or 587
		$mail->SMTPAuth = true; //Whether to use SMTP authentication
		$mail->SMTPSecure = SMTP_SECURE;
		$mail->Username = SMTP_UNAME; //Username for SMTP authentication any valid email created in your domain
		$mail->Password = SMTP_PWORD; //Password for SMTP authentication
		//$mail->AddReplyTo("mssapp@miraclesoft.com", "Maketing Team"); //reply-to address
		//$mail->SetFrom("mssapp@miraclesoft.com", "Maketing Team"); //From address of the mail
		$mail->SetFrom("partnerships@miraclesoft.com", "Partnerships Team"); //From address of the mail
		// put your while loop here like below,
		$mail->Subject = "You have been nominated!"; //Subject od your mail
		//$mail->AddAddress("skola2@miraclesoft.com", "Santosh Kola"); //To address who will receive this email
		// $mail->AddAddress(CONTACT_US, "info"); //To address who will receive this email
		/*  $myArray = explode(';', NEW_NOMINATIONS_SUBMITTED);
		 for ($i = 0; $i < count($myArray); ++$i) {
		 $innerArray = explode(',', $myArray[$i]);
		 $mail->AddAddress($innerArray[0], $innerArray[1]);
		 }*/
		$mail->AddAddress($collegueEmail, $collegueName);
		$mail->AddBCC("skola2@miraclesoft.com", "Santosh Kola");
		// $mail->AddBCC("santu0645@gmail.com", "Santosh Kola");
		
		$startDate = date("F d , Y",strtotime($startDate));
		$endDate = date("F d , Y",strtotime($endDate));
		
		$bodyContent = "<html xmlns='http://www.w3.org/1999/xhtml' class='gr__newsletters-2017-vnallamalla_c9users_io'><head>
		<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<meta http-equiv='X-UA-Compatible' content='IE=edge'>
		<meta name='format-detection' content='telephone=no'>
		<title>Your nomination has been submitted</title>
		<style>
		@import url('https://fonts.googleapis.com/css?family=Montserrat:400,700');
		@import url('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i');
		html{width: 100%;}
		body{
		width: 100%;
		background-color: #ffffff;
		margin:0; padding:0;
		-webkit-text-size-adjust:none;
		-ms-text-size-adjust:none;
		-webkit-font-smoothing: ;
		mso-margin-top-alt:0px;
		mso-margin-bottom-alt:0px;
		mso-padding-alt: 0px 0px 0px 0px;}
		div, p, a, li, td { -webkit-text-size-adjust:none; }
		#outlook a {padding:0;}
		p,h1,h2,h3,h4{ margin-top:0; margin-bottom:0; padding-top:0; padding-bottom:0;}
		table{
		mso-table-lspace:0pt;
		mso-table-rspace:0pt;
	}
	table td {border-collapse: collapse;}
	span.preheader{display: none;font-size: 1px; visibility: hidden; opacity: 0; color: transparent; height: 0; width: 0;}
	.googlefix {width: 280px!important; text-align:center!important; min-width:0px!important}
	a {outline:none;}
	a {text-decoration: none;}
	a img {border:none;}
	.image_fix {display:block;}
	.ReadMsgBody { width: 100%;}
	.ExternalClass {width: 100%;}
	.ExternalClass,
	.ExternalClass p,
	.ExternalClass span,
	.ExternalClass font,
	.ExternalClass td,
	.ExternalClass div {
	line-height: 100%;}
	img{
	-ms-interpolation-mode:bicubic;}
	p {
	margin:0 !important;
	padding:0 !important;}
	.button:hover {filter: brightness(120%);}
	@media only screen and (max-width: 600px)
	{
	body{width:100% !important;}
	.container           {width:100% !important; min-width:100% !important;}
	.container-wrap      {display:inline-block !important; width:100% !important; height:auto !important; border-radius:0 !important;}
	.image-container     {width: 100% !important; height: auto !important; }
	.disable             {display: none !important;}
	.enable              {display: inline !important;}
	.padding-top-10      {padding-top: 10px !important;}
	.padding-top-20      {padding-top: 20px !important;}
	.padding-top-30      {padding-top: 30px !important;}
	.padding-top-40      {padding-top: 40px !important;}
	.padding-top-60      {padding-top: 60px !important;}
	.padding-bottom-10   {padding-bottom: 10px !important;}
	.padding-bottom-20   {padding-bottom: 20px !important;}
	.padding-bottom-30   {padding-bottom: 30px !important;}
	.padding-bottom-40   {padding-bottom: 40px !important;}
	.padding-bottom-60   {padding-bottom: 60px !important;}
	.padding-none        {padding:0  !important;}
	.text                {width:90% !important; text-align:center !important;}
	.text-on-bg          {width:90% !important; text-align:center !important;}
	.text-center         {text-align: center !important;}
	.text-right          {text-align: right !important;}
	.text-left           {text-align: left !important;}
	.text-white          {color: #ffffff !important;}
	.background-cover    {background-size: cover !important;}
	.background-cover-percent    {background-size: 100% 79% !important;}
	.background-contain  {background-size: contain !important;}
	.background-auto     {background-size: auto !important;}
	.background-center   {background-position: center center !important;}
	.background-none     {background-image: none !important;}
	.border-none         {border:0 !important;}
	.border-white        {border-color: #ffffff !important;}
	}
	@media only screen and (max-width: 451px)
	{
	body {width:100% !important;}
	.container           {width:100% !important; min-width:100% !important;}
	.container-wrap      {display:inline-block !important; width:100% !important; height:auto !important; border-radius:0 !important;}
	}
	@media only screen and (max-width: 341px)
	{
	body {width:100%!important;}
	.container           {width:100% !important; min-width:100% !important;}
	.container-wrap      {display:inline-block !important; width:100% !important; height:auto !important; border-radius:0 !important;}
	}
	</style>
	</head>
	<body marginwidth='0' marginheight='0' style='margin-top: 0; margin-bottom: 0; padding-top: 0; padding-bottom: 0; width: 100%; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;' offset='0' topmargin='0' leftmargin='0' data-gr-c-s-loaded='true'>
	
	<table mc:repeatable='layout' mc:hideable='' mc:variant='navigation-6' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='margin:0 auto; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px; max-width:680px;' data-module='navigation-6'>
	
	<tbody>
	<tr>
	<td align='center' style='width:100%; height:100%; background-color:#ffffff;' bgcollor='#ffffff' data-bgcolor='nav-6-bg'>
	<table width='600' align='center' class='container' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td align='center' height='20' width='1' style='font-size: 1px; line-height: 20px; height:20px;'>&nbsp;
	</td>
	</tr>
	
	<tr>
	<td align='center'>
	<table width='600' align='center' class='container' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	<tbody>
	<tr>
	
	<th width='140' align='left' class='container-wrap' valign='top' style='vertical-align: top;'>
	<table align='center' cellpadding='0' cellspacing='0'>
	<tbody>
	<tr>
	<td width='160' align='center' valign='top'>
	<table width='100%' align='center' cellpadding='0' cellspacing='0'>
	<tbody>
	
	<tr>
	<td align='center' valign='top' style='line-height: 0px !important;'>
	<a style='text-decoration: none; display: block;' href='http://www.miraclesoft.com/' target='blank'>
	<img src='http://www.miraclesoft.com/images/newsletters/miracle-logo-dark.png' alt='logo' width='100%' style='width: 100%; max-width: 100%;'>
	</a>
	</td>
	</tr>
	</tbody>
	</table>
	</td>
	</tr>
	</tbody>
	</table>
	</th>
	
	<th width='320' align='right' class='container-wrap' valign='top' style='vertical-align: top;'>
	<table width='320' align='right' class='container' border='0' cellpadding='0' cellspacing='0' style='width:320px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td align='center' height='1' width='1' style='font-size: 1px; line-height: 1px; height:1px;'>&nbsp;
	</td>
	</tr>
	
	<tr>
	<td align='right'>
	<table width='auto' align='right' class='container' border='0' cellpadding='0' cellspacing='0' style='width:autopx; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	<tbody>
	<tr>
	<td align='center'>
	<table width='auto' align='center' class='' border='0' cellpadding='0' cellspacing='0' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	<tbody><tr>
	<td align='center' height='15'>
	</td>
	</tr>
	<tr>
	
	<th align='center' height='1' width='4' style='font-size: 1px; line-height: 1px; width:4px;'>
	</th>
	
	<th style='text-align:center; font-family: oPen sans; font-size:12px; line-height: 20px; text-decoration: none; color: #000000; font-weight:400; text-transform: uppercase; : 0.05em;'>
	<a href='http://www.miraclesoft.com/company/' target='blank' style='text-align:center; font-family: oPen sans; font-size:12px; line-height: 20px; text-decoration: none; color: #000000; font-weight:600; text-transform: uppercase; : 0.05em;' data-size='nav-6-link-size' data-min='9' data-max='40' data-color='nav-6-link-color' mc:edit='nav-6-link-2'>
	<multiline>About us |</multiline>
	</a>
	</th>
	
	<th align='center' height='1' width='4' style='font-size: 1px; line-height: 1px; width:4px;'>
	</th>
	
	<th style='text-align:center; font-family: oPen sans; font-size:12px; line-height: 20px; text-decoration: none; color: #000000; font-weight:400; text-transform: uppercase; : 0.05em;'>
	<a href='http://www.miraclesoft.com/services/' target='blank' style='text-align:center; font-family: oPen sans; font-size:12px; line-height: 20px; text-decoration: none; color: #000000; font-weight:600; text-transform: uppercase; : 0.05em;' data-size='nav-6-link-size' data-min='9' data-max='40' data-color='nav-6-link-color' mc:edit='nav-6-link-3'>
	<multiline> Our Services |</multiline>
	</a>
	</th>
	
	<th align='center' height='1' width='4' style='font-size: 1px; line-height: 1px; width:4px;'>
	</th>
	
	<th style='text-align:center; font-family: oPen sans; font-size:12px; line-height: 20px; text-decoration: none; color: #232527; font-weight:600; text-transform: uppercase; : 0.05em;'>
	<a href='http://www.miraclesoft.com/contact/' target='blank' style='text-align:center; font-family: oPen sans; font-size:12px; line-height: 20px; text-decoration: none; color: #232527; font-weight:600; text-transform: uppercase; : 0.05em;' data-size='nav-6-signUp-size' data-min='9' data-max='40' data-color='nav-6-signUp-color' mc:edit='nav-6-signUp-4'>
	<multiline>Contact us</multiline>
	</a>
	</th>
	
	</tr>
	</tbody>
	</table>
	</td>
	</tr>
	</tbody>
	</table>
	</td>
	</tr>
	
	<tr>
	<td align='center' height='18' width='1' style='font-size: 1px; line-height: 18px; height:18px;'>&nbsp;
	</td>
	</tr>
	
	</tbody>
	</table>
	</th>
	
	</tr>
	</tbody>
	</table>
	</td>
	</tr>
	</tbody>
	</table>
	</td>
	</tr>
	
	</tbody>
	</table>
	<table mc:repeatable='layout' mc:hideable='' mc:variant='navigation-margin' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='margin:0 auto; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px; max-width:680px;' data-module='navigation-margin'>
	
	<tbody>
	<tr>
	<td align='center' style='width:100%; height:100%; background-color:#ffffff;' bgcollor='#ffffff' data-bgcolor='navigation-margin-bg'>
	<table width='600' align='center' class='container' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td align='center' height='20' width='1' style='font-size: 1px;line-height: 10px;height: 10px;'>&nbsp;
	</td>
	</tr>
	
	</tbody>
	</table>
	</td>
	</tr>
	
	</tbody>
	</table>
	<div class='parentOfBg'></div>
	<table align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='margin:0 auto; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px; max-width:680px;' data-module='text-block-1'>
	
	<tbody>
	<tr>
	<td align='center' style='width:100%; height:100%; background-color:#f8f8f8;' data-bgcolor='txt-blck-1-bg'>
	<table width='600' align='center' class='text' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td align='center' height='35' width='1' style='font-size: 1px; line-height: 35px; height:35px;'>
	&nbsp;
	</td>
	</tr>
	
	<tr>
	<td style='text-align: center;font-family: 'Open Sans' , sans-serif;font-size: 25px;line-height: 20px;text-decoration: none;color: #232527;font-weight:700;' data-size='txt-blck-1-text-size' data-min='9' data-max='40' data-color='txt-blck-1-text-color'>
	<multiline>You Have Been Nominated!</multiline>
	</td>
	</tr>
	
	<tr>
	<td align='center' height='25' width='1' style='font-size: 1px;line-height: 25px;height: 25px;'>
	&nbsp;
	</td>
	</tr>
	<tr>
	<td align='center'>
	<table width='60' height='2' align='center' border='0' cellpadding='0' cellspacing='0' style='width:60px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px; background-color: #232527' data-bgcolor='team-6-line-color'>
	
	<tbody>
	<tr>
	<td align='center' height='2' width='40' style='font-size: 2px; line-height: 2px; width:40px;'></td>
	</tr>
	
	</tbody>
	</table>
	</td>
	</tr>
	
	</tbody>
	</table>
	</td>
	
	</tr>
	
	</tbody>
	</table>
	<table mc:repeatable='layout' mc:hideable='' mc:variant='text-block-1' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='margin:0 auto; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px; max-width:680px;' data-module='text-block-1'>
	
	<tbody>
	<tr>
	<td align='center' style='width:100%; height:100%; background-color:#f8f8f8;' bgcollor='#f8f8f8' data-bgcolor='txt-blck-1-bg'>
	<table width='600' align='center' class='text' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td align='center' height='25' width='1' style='font-size: 1px; line-height: 25px; height:25px;'>&nbsp;
	</td>
	</tr>
	
	<tr>
	<td style='text-align:left;font-family: 'Open Sans' , sans-serif;font-size: 14px;line-height: 20px;text-decoration: none;color: #232527;font-weight:400;' data-size='txt-blck-1-text-size' data-min='9' data-max='40' data-color='txt-blck-1-text-color' mc:edit='txt-blck-1-text-1'>
	<multiline><b>Congratulations! $collegueName,</b>
	</multiline>
	</td>
	</tr>
	
	</tbody>
	</table>
	</td>
	
	</tr>
	
	</tbody>
	</table>
	
	
	<table mc:repeatable='layout' mc:hideable='' mc:variant='text-block-1' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='margin:0 auto; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px; max-width:680px;' data-module='text-block-1'>
	
	<tbody>
	<tr>
	<td align='center' style='width:100%; height:100%; background-color:#f8f8f8;' bgcollor='#f8f8f8' data-bgcolor='txt-blck-1-bg'>
	<table width='600' align='center' class='text' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td align='center' height='25' width='1' style='font-size: 1px;line-height: 15px;height: 15px;'>&nbsp;
	</td>
	</tr>
	
	<tr>
	<td style='text-align:justify; font-family: 'Open Sans' , sans-serif; font-size:14px; line-height: 24px; text-decoration: none; color: #232527; font-weight:400;' data-size='txt-blck-1-text-size' data-min='9' data-max='40' data-color='txt-blck-1-text-color' mc:edit='txt-blck-1-text-1'>
	<multiline label='content'>You have been nominated by <b>$nominatoreName</b> to attend <b>$eventName</b> at <b>$location</b> from <b>$startDate</b> to <b>$endDate.</b> </multiline>
	</td>
	</tr>
	<tr>
	<td height='15'></td>
	</tr>
	<tr>
	<td align='left' class='button-width'>
	<table align='left' class='display-button' bgcolor='#00aae7' style='border-radius: 5px;' data-bgcolor='Header-Butn-BG'>
	<tbody>
	<tr>
	<td align='left' class='MsoNormal' style='color: #ffffff; font-family:'Open Sans'; font-size: 15px; font-weight: 700; padding: 4px 16px;  border-radius: 5px; line-height: 25.5px;' data-color='Header-Butn-Txt' data-size='Header-Butn-Txt' data-min='12' data-max='33'><a href='http://www.miraclesoft.com/events/eventnominations?conferenceId=$collegueConferenceId&conferenceCountry=$conferenceCountry' target='blank' class='' style='color:#ffffff; text-decoration:none; :1px;' data-color='Header-Butn-Txt'>Accept</a></td>
	</tr>
	</tbody>
	</table>
	
	</td>
	
	</tr>
	<tr>
	<td height='15'></td>
	</tr>
	<tr>
	<td style='text-align:justify; font-family: 'Open Sans' , sans-serif; font-size:14px; line-height: 24px; text-decoration: none; color: #232527; font-weight:400;' data-size='txt-blck-1-text-size' data-min='9' data-max='40' data-color='txt-blck-1-text-color' mc:edit='txt-blck-1-text-1'>
	<multiline label='content'><i><b style='color: #ef4048; font-weight:600;'>Note :</b></i> If you fail to respond within 72 hours, then it will be considered not accepted. </multiline>
	</td>
	</tr>
	
	</tbody>
	</table>
	</td>
	
	</tr>
	
	</tbody>
	</table>
	
	<table mc:repeatable='layout' mc:hideable='' mc:variant='text-block-1' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='margin:0 auto; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px; max-width:680px;' data-module='text-block-1'>
	
	<tbody>
	<tr>
	<td align='center' style='width:100%; height:100%; background-color:#f8f8f8;' bgcollor='#f8f8f8' data-bgcolor='txt-blck-1-bg'>
	<table width='600' align='center' class='text' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td align='center' height='25' width='1' style='font-size: 1px;line-height: 15px;height: 15px;'>&nbsp;
	</td>
	</tr>
	
	<tr>
	<td style='text-align:justify; font-family: 'Open Sans' , sans-serif; font-size:14px; line-height: 24px; text-decoration: none; color: #232527; font-weight:400;' data-size='txt-blck-1-text-size' data-min='9' data-max='40' data-color='txt-blck-1-text-color' mc:edit='txt-blck-1-text-1'>
	<multiline label='content'>Once you have submitted the application our team will go through the submissions and select a group to attend the event. For more information please reach out to <a href='mailto:partnerships@miraclesoft.com'><span style='color:#00aae7;'>partnerships@miraclesoft.com</span></a> (or) visit <a href='http://www.miraclesoft.com/conferencenominations' target='blank'><span style='color:#00aae7;'>www.miraclesoft.com/conferencenominations</span></a></multiline>
	</td>
	</tr>
	
	</tbody>
	</table>
	</td>
	
	</tr>
	
	</tbody>
	</table>
	
	
	<table mc:repeatable='layout' mc:hideable='' mc:variant='text-block-1' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='margin:0 auto; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px; max-width:680px;' data-module='text-block-1'>
	
	<tbody>
	<tr>
	<td align='center' style='width:100%; height:100%; background-color:#f8f8f8;' bgcollor='#f8f8f8' data-bgcolor='txt-blck-1-bg'>
	<table width='600' align='center' class='text' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td align='center' height='25' width='1' style='font-size: 1px;line-height: 15px;height: 15px;'>&nbsp;
	</td>
	</tr>
	
	<tr>
	<td style='text-align:left; font-family: 'Open Sans' , sans-serif; font-size:14px; line-height: 24px; text-decoration: none; color: #232527; font-weight:400;' data-size='txt-blck-1-text-size' data-min='9' data-max='40' data-color='txt-blck-1-text-color' mc:edit='txt-blck-1-text-1'>
	<multiline><b>Thanks &amp; Regards</b><br><b>Partnerships Team</b><br>
	
	Phone : (248)-412-0430<br>
	Email : <a href='mailto:partnerships@miraclesoft.com'><span style='color:#232527;'>partnerships@miraclesoft.com</span></a>
	</multiline>
	</td>
	</tr>
	
	<tr>
	<td align='center' height='46' width='1' style='font-size: 1px; line-height: 46px; height:46px;'>&nbsp;
	</td>
	</tr>
	
	</tbody>
	</table>
	</td>
	
	</tr>
	
	</tbody>
	</table>
	<table mc:repeatable='layout' mc:hideable='' mc:variant='footer-5' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='margin:0 auto; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px; max-width:680px;' data-module='footer-5'>
	
	<tbody>
	<tr>
	<td align='center' style='width:100%; height:100%; background-color:#ffffff;' bgcollor='#ffffff' data-bgcolor='footer-5-bg'>
	<table width='600' align='center' class='container' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td align='center' height='35' width='1' style='font-size: 1px;line-height: 15px;height: 15px;'>&nbsp;
	</td>
	</tr>
	
	<tr>
	<td align='center'>
	<table width='600' align='center' class='text' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	<tbody>
	<tr>
	
	<th width='360' align='left' class='container-wrap' valign='top' style='vertical-align: top;'>
	<table width='360' align='left' class='container' border='0' cellpadding='0' cellspacing='0' style='width:360px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td class='text-left' style='vertical-align:top;text-align:left;font-family: 'Open Sans', sans-serif;font-size:13px;padding-top: 5px;line-height: 20px;text-decoration: none;color: #232527;font-weight: 400;' data-size='footer-5-rights-size' data-min='9' data-max='40' data-color='footer-5-rights-color' mc:edit='footer-5-rights-1.1'>
	<multiline>&copy; Copyrights ".date('Y')." | Miracle Software Systems, Inc.</multiline>
                                                      </td>
                                                   </tr>
			
                                                   <tr>
                                                      <td align='center' height='13' width='1' style='font-size: 1px; line-height: 13px; height:13px;'>&nbsp;
                                                      </td>
                                                   </tr>
			
                                                   <tr>
                                                      <td align='center' height='39' width='1' style='font-size: 1px;line-height: 20px;height: 20px;'>&nbsp;
                                                      </td>
                                                   </tr>
			
                                                </tbody>
                                             </table>
                                          </th>
			
                                          <th width='280' align='right' class='container-wrap' valign='top' style='vertical-align: top;'>
                                             <table width='280' align='right' class='container' border='0' cellpadding='0' cellspacing='0' style='width:280px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
			
                                                <tbody>
                                                   <tr>
                                                      <td class='disable' align='center' height='5' width='1' style='font-size: 1px; line-height: 5px; height:5px;'>&nbsp;
                                                      </td>
                                                   </tr>
			
                                                   <tr>
                                                      <td align='right'>
                                                         <table width='135' align='right' class='container' border='0' cellpadding='0' cellspacing='0' style='width:135px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
			
                                                            <tbody>
                                                               <tr>
                                                                  <td align='left'>
                                                                     <table style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;border: 0px;' align='left' border='0' cellpadding='0' cellspacing='0' width='auto'>
                                                                        <tbody>
                                                                           <tr>
                                                                              <th>
                                                                                    <a href='https://www.facebook.com/miracle45625/' target='blank' style='color:#ef4048; text-decoration: none;'><img src='http://www.miraclesoft.com/images/newsletters/facebook1.png' width='20' height='20' alt='#' style='display:block; vertical-align:middle;'></a>   </th>
			
                                                                              <td align='center' height='1' width='10' style='font-size: 1px; line-height: 1px; width:10px;'>
                                                                              </td>
			
                                                                              <th>
                                                                                <a href='https://plus.google.com/+Team_MSS' target='blank' style='color:#ef4048; text-decoration: none;'><img src='http://www.miraclesoft.com/images/newsletters/googleplus1.png' width='20' height='20' alt='#' style='display:block; vertical-align:middle;'></a>     </th>
			
                                                                              <td align='center' height='1' width='10' style='font-size: 1px; line-height: 1px; width:10px;'>
                                                                              </td>
			
                                                                              <th>
                                                                                     <a href='https://www.linkedin.com/company/miracle-software-systems-inc' target='blank' style='color:#ef4048; text-decoration: none;'><img src='http://www.miraclesoft.com/images/newsletters/Linkedin1.png' width='20' height='20' alt='#' style='display:block; vertical-align:middle;'></a>     </th>
			
                                                                              <td align='center' height='1' width='10' style='font-size: 1px; line-height: 1px; width:10px;'>
                                                                              </td>
			
                                                                              <th>
</th><td>                        <a href='https://www.youtube.com/c/Team_MSS' target='blank' style='color:#ef4048; text-decoration: none;'><img src='http://www.miraclesoft.com/images/newsletters/youtube1.png' width='20' height='20' alt='#' style='display:block; vertical-align:middle;'></a>
			
                                                                              </td><td align='center' height='1' width='10' style='font-size: 1px; line-height: 1px; width:10px;'>
                                                                              </td>
			
                                                                              <th>
</th><td>                        <a href='https://twitter.com/Team_MSS' target='blank' style='color:#ef4048; text-decoration: none;'><img src='http://www.miraclesoft.com/images/newsletters/Twitter1.png' width='20' height='20' alt='#' style='display:block; vertical-align:middle;'></a>
			
                                                                              </td><td align='center' height='1' width='10' style='font-size: 1px; line-height: 1px; width:10px;'>
                                                                              </td>
			
                                                                              <th>
                                                                                </th></tr>
                                                                        </tbody>
                                                                     </table>
                                                                  </td>
                                                               </tr>
			
                                                            </tbody>
                                                         </table>
                                                      </td>
                                                   </tr>
			
                                                   <tr>
                                                      <td align='center' height='39' width='1' style='font-size: 1px;line-height: 20px;height: 20px;'>&nbsp;
                                                      </td>
                                                   </tr>
			
                                                </tbody>
                                             </table>
                                          </th>
			
                                       </tr>
                                    </tbody>
                                 </table>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </td>
			
               </tr>
			
         </tbody>
      </table>
			
<span class='gr__tooltip'><span class='gr__tooltip-content'></span><i class='gr__tooltip-logo'></i><span class='gr__triangle'></span></span></body></html>";
		
		
		//$mail->MsgHTML("<b>Hi, your first SMTP mail has been received. Great Job!.. <br/><br/>by <a href='http://www.asif18.com/7/php/send-mails-using-smtp-in-php-by-gmail-server-or-own-domain-server/'>Asif18</a></b>"); //Put your body of the message you can place html code here
		$mail->MsgHTML($bodyContent); //Put your body of the message you can place html code here
		
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
	
	//------------
	
	function sendXXXSubmittedNominee($eventName,$location,$startDate,$endDate,$collegueEmail,$nominatoreName,$collegueName,$nominatedByEmail,$redirectionUrl){
		
		$mail	= new PHPMailer; // call the class
		$mail->IsSMTP();
		$mail->Host = SMTP_HOST; //Hostname of the mail server
		$mail->Port = SMTP_PORT; //Port of the SMTP like to be 25, 80, 465 or 587
		$mail->SMTPAuth = true; //Whether to use SMTP authentication
		$mail->SMTPSecure = SMTP_SECURE;
		$mail->Username = SMTP_UNAME; //Username for SMTP authentication any valid email created in your domain
		$mail->Password = SMTP_PWORD; //Password for SMTP authentication
		//$mail->AddReplyTo("mssapp@miraclesoft.com", "Maketing Team"); //reply-to address
		//$mail->SetFrom("mssapp@miraclesoft.com", "Maketing Team"); //From address of the mail
		$mail->SetFrom("partnerships@miraclesoft.com", "Partnerships Team"); //From address of the mail
		// put your while loop here like below,
		$mail->Subject = $collegueName." Submitted their nomination!"; //Subject od your mail
		//$mail->AddAddress("skola2@miraclesoft.com", "Santosh Kola"); //To address who will receive this email
		// $mail->AddAddress(CONTACT_US, "info"); //To address who will receive this email
		/*  $myArray = explode(';', NEW_NOMINATIONS_SUBMITTED);
		 for ($i = 0; $i < count($myArray); ++$i) {
		 $innerArray = explode(',', $myArray[$i]);
		 $mail->AddAddress($innerArray[0], $innerArray[1]);
		 }*/
		$mail->AddAddress($nominatedByEmail, $nominatoreName);
		//$mail->AddAddress("skola2@miraclesoft.com", $collegueName);
		$startDate = date("F d , Y",strtotime($startDate));
		$endDate = date("F d , Y",strtotime($endDate));
		
		$bodyContent = "<html xmlns='http://www.w3.org/1999/xhtml' class='gr__newsletters-2017-vnallamalla_c9users_io'><head>
		<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<meta http-equiv='X-UA-Compatible' content='IE=edge'>
		<meta name='format-detection' content='telephone=no'>
		<title>xxx Submitted their nomination!</title>
		<style>
		@import url('https://fonts.googleapis.com/css?family=Montserrat:400,700');
		@import url('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i');
		html{width: 100%;}
		body{
		width: 100%;
		background-color: #ffffff;
		margin:0; padding:0;
		-webkit-text-size-adjust:none;
		-ms-text-size-adjust:none;
		-webkit-font-smoothing: ;
		mso-margin-top-alt:0px;
		mso-margin-bottom-alt:0px;
		mso-padding-alt: 0px 0px 0px 0px;}
		div, p, a, li, td { -webkit-text-size-adjust:none; }
		#outlook a {padding:0;}
		p,h1,h2,h3,h4{ margin-top:0; margin-bottom:0; padding-top:0; padding-bottom:0;}
		table{
		mso-table-lspace:0pt;
		mso-table-rspace:0pt;
	}
	table td {border-collapse: collapse;}
	span.preheader{display: none;font-size: 1px; visibility: hidden; opacity: 0; color: transparent; height: 0; width: 0;}
	.googlefix {width: 280px!important; text-align:center!important; min-width:0px!important}
	a {outline:none;}
	a {text-decoration: none;}
	a img {border:none;}
	.image_fix {display:block;}
	.ReadMsgBody { width: 100%;}
	.ExternalClass {width: 100%;}
	.ExternalClass,
	.ExternalClass p,
	.ExternalClass span,
	.ExternalClass font,
	.ExternalClass td,
	.ExternalClass div {
	line-height: 100%;}
	img{
	-ms-interpolation-mode:bicubic;}
	p {
	margin:0 !important;
	padding:0 !important;}
	.button:hover {filter: brightness(120%);}
	@media only screen and (max-width: 600px)
	{
	body{width:100% !important;}
	.container           {width:100% !important; min-width:100% !important;}
	.container-wrap      {display:inline-block !important; width:100% !important; height:auto !important; border-radius:0 !important;}
	.image-container     {width: 100% !important; height: auto !important; }
	.disable             {display: none !important;}
	.enable              {display: inline !important;}
	.padding-top-10      {padding-top: 10px !important;}
	.padding-top-20      {padding-top: 20px !important;}
	.padding-top-30      {padding-top: 30px !important;}
	.padding-top-40      {padding-top: 40px !important;}
	.padding-top-60      {padding-top: 60px !important;}
	.padding-bottom-10   {padding-bottom: 10px !important;}
	.padding-bottom-20   {padding-bottom: 20px !important;}
	.padding-bottom-30   {padding-bottom: 30px !important;}
	.padding-bottom-40   {padding-bottom: 40px !important;}
	.padding-bottom-60   {padding-bottom: 60px !important;}
	.padding-none        {padding:0  !important;}
	.text                {width:90% !important; text-align:center !important;}
	.text-on-bg          {width:90% !important; text-align:center !important;}
	.text-center         {text-align: center !important;}
	.text-right          {text-align: right !important;}
	.text-left           {text-align: left !important;}
	.text-white          {color: #ffffff !important;}
	.background-cover    {background-size: cover !important;}
	.background-cover-percent    {background-size: 100% 79% !important;}
	.background-contain  {background-size: contain !important;}
	.background-auto     {background-size: auto !important;}
	.background-center   {background-position: center center !important;}
	.background-none     {background-image: none !important;}
	.border-none         {border:0 !important;}
	.border-white        {border-color: #ffffff !important;}
	}
	@media only screen and (max-width: 451px)
	{
	body {width:100% !important;}
	.container           {width:100% !important; min-width:100% !important;}
	.container-wrap      {display:inline-block !important; width:100% !important; height:auto !important; border-radius:0 !important;}
	}
	@media only screen and (max-width: 341px)
	{
	body {width:100%!important;}
	.container           {width:100% !important; min-width:100% !important;}
	.container-wrap      {display:inline-block !important; width:100% !important; height:auto !important; border-radius:0 !important;}
	}
	</style>
	</head>
	<body marginwidth='0' marginheight='0' style='margin-top: 0; margin-bottom: 0; padding-top: 0; padding-bottom: 0; width: 100%; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;' offset='0' topmargin='0' leftmargin='0' data-gr-c-s-loaded='true'>
	
	<table mc:repeatable='layout' mc:hideable='' mc:variant='navigation-6' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='margin:0 auto; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px; max-width:680px;' data-module='navigation-6'>
	
	<tbody>
	<tr>
	<td align='center' style='width:100%; height:100%; background-color:#ffffff;' bgcollor='#ffffff' data-bgcolor='nav-6-bg'>
	<table width='600' align='center' class='container' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td align='center' height='20' width='1' style='font-size: 1px; line-height: 20px; height:20px;'>&nbsp;
	</td>
	</tr>
	
	<tr>
	<td align='center'>
	<table width='600' align='center' class='container' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	<tbody>
	<tr>
	
	<th width='140' align='left' class='container-wrap' valign='top' style='vertical-align: top;'>
	<table align='center' cellpadding='0' cellspacing='0'>
	<tbody>
	<tr>
	<td width='160' align='center' valign='top'>
	<table width='100%' align='center' cellpadding='0' cellspacing='0'>
	<tbody>
	<tr>
	<td align='center' valign='top' style='line-height: 0px !important;'>
	<a style='text-decoration: none; display: block;' href='http://www.miraclesoft.com/' target='blank'>
	<img src='http://www.miraclesoft.com/images/newsletters/miracle-logo-dark.png' alt='logo' width='100%' style='width: 100%; max-width: 100%;'>
	</a>
	</td>
	</tr>
	</tbody>
	</table>
	</td>
	</tr>
	</tbody>
	</table>
	</th>
	
	<th width='320' align='right' class='container-wrap' valign='top' style='vertical-align: top;'>
	<table width='320' align='right' class='container' border='0' cellpadding='0' cellspacing='0' style='width:320px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td align='center' height='1' width='1' style='font-size: 1px; line-height: 1px; height:1px;'>&nbsp;
	</td>
	</tr>
	
	<tr>
	<td align='right'>
	<table width='auto' align='right' class='container' border='0' cellpadding='0' cellspacing='0' style='width:autopx; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	<tbody>
	<tr>
	<td align='center'>
	<table width='auto' align='center' class='' border='0' cellpadding='0' cellspacing='0' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	<tbody>
	<tr>
	<td align='center' height='15'>
	</td>
	</tr>
	<tr>
	
	<th align='center' height='1' width='4' style='font-size: 1px; line-height: 1px; width:4px;'>
	</th>
	
	<th style='text-align:center; font-family: oPen sans; font-size:12px; line-height: 20px; text-decoration: none; color: #000000; font-weight:400; text-transform: uppercase; : 0.05em;'>
	<a href='http://www.miraclesoft.com/company/' target='blank' style='text-align:center; font-family: oPen sans; font-size:12px; line-height: 20px; text-decoration: none; color: #000000; font-weight:600; text-transform: uppercase; : 0.05em;' data-size='nav-6-link-size' data-min='9' data-max='40' data-color='nav-6-link-color' mc:edit='nav-6-link-2'>
	<multiline><b>About us</b> |</multiline>
	</a>
	</th>
	
	<th align='center' height='1' width='4' style='font-size: 1px; line-height: 1px; width:4px;'>
	</th>
	
	<th style='text-align:center; font-family: oPen sans; font-size:12px; line-height: 20px; text-decoration: none; color: #000000; font-weight:400; text-transform: uppercase; : 0.05em;'>
	<a href='http://www.miraclesoft.com/services/' target='blank' style='text-align:center; font-family: oPen sans; font-size:12px; line-height: 20px; text-decoration: none; color: #000000; font-weight:600; text-transform: uppercase; : 0.05em;' data-size='nav-6-link-size' data-min='9' data-max='40' data-color='nav-6-link-color' mc:edit='nav-6-link-3'>
	<multiline><b>Our Services</b> |</multiline>
	</a>
	</th>
	
	<th align='center' height='1' width='4' style='font-size: 1px; line-height: 1px; width:4px;'>
	</th>
	
	<th style='text-align:center; font-family: oPen sans; font-size:12px; line-height: 20px; text-decoration: none; color: #232527; font-weight:600; text-transform: uppercase; : 0.05em;'>
	<a href='http://www.miraclesoft.com/contact/' target='blank' style='text-align:center; font-family: oPen sans; font-size:12px; line-height: 20px; text-decoration: none; color: #232527; font-weight:600; text-transform: uppercase; : 0.05em;' data-size='nav-6-signUp-size' data-min='9' data-max='40' data-color='nav-6-signUp-color' mc:edit='nav-6-signUp-4'>
	<multiline><b>Contact us</b></multiline>
	</a>
	</th>
	
	</tr>
	</tbody>
	</table>
	</td>
	</tr>
	</tbody>
	</table>
	</td>
	</tr>
	
	<tr>
	<td align='center' height='18' width='1' style='font-size: 1px; line-height: 18px; height:18px;'>&nbsp;
	</td>
	</tr>
	
	</tbody>
	</table>
	</th>
	
	</tr>
	</tbody>
	</table>
	</td>
	</tr>
	</tbody>
	</table>
	</td>
	</tr>
	
	</tbody>
	</table>
	<table mc:repeatable='layout' mc:hideable='' mc:variant='navigation-margin' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='margin:0 auto; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px; max-width:680px;' data-module='navigation-margin'>
	
	<tbody>
	<tr>
	<td align='center' style='width:100%; height:100%; background-color:#ffffff;' bgcollor='#ffffff' data-bgcolor='navigation-margin-bg'>
	<table width='600' align='center' class='container' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td align='center' height='20' width='1' style='font-size: 1px;line-height: 10px;height: 10px;'>&nbsp;
	</td>
	</tr>
	
	</tbody>
	</table>
	</td>
	</tr>
	
	</tbody>
	</table>
	<div class='parentOfBg'></div>
	<table align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='margin:0 auto; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px; max-width:680px;' data-module='text-block-1'>
	
	<tbody>
	<tr>
	<td align='center' style='width:100%; height:100%; background-color:#f8f8f8;' data-bgcolor='txt-blck-1-bg'>
	<table width='600' align='center' class='text' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td align='center' height='35' width='1' style='font-size: 1px; line-height: 35px; height:35px;'>
	&nbsp;
	</td>
	</tr>
	
	<tr>
	<td style='text-align: center;font-family: 'Open Sans' , sans-serif;font-size: 25px;line-height: 20px;text-decoration: none;color: #232527;font-weight:700;' data-size='txt-blck-1-text-size' data-min='9' data-max='40' data-color='txt-blck-1-text-color'>
	<multiline>$collegueName Submitted his/her details!</multiline>
	</td>
	</tr>
	
	<tr>
	<td align='center' height='25' width='1' style='font-size: 1px;line-height: 25px;height: 25px;'>
	&nbsp;
	</td>
	</tr>
	<tr>
	<td align='center'>
	<table width='60' height='2' align='center' border='0' cellpadding='0' cellspacing='0' style='width:60px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px; background-color: #232527' data-bgcolor='team-6-line-color'>
	
	<tbody>
	<tr>
	<td align='center' height='2' width='40' style='font-size: 2px; line-height: 2px; width:40px;'></td>
	</tr>
	
	</tbody>
	</table>
	</td>
	</tr>
	
	</tbody>
	</table>
	</td>
	
	</tr>
	
	</tbody>
	</table>
	<table mc:repeatable='layout' mc:hideable='' mc:variant='text-block-1' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='margin:0 auto; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px; max-width:680px;' data-module='text-block-1'>
	
	<tbody>
	<tr>
	<td align='center' style='width:100%; height:100%; background-color:#f8f8f8;' bgcollor='#f8f8f8' data-bgcolor='txt-blck-1-bg'>
	<table width='600' align='center' class='text' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td align='center' height='25' width='1' style='font-size: 1px; line-height: 25px; height:25px;'>&nbsp;
	</td>
	</tr>
	
	<tr>
	<td style='text-align:left;font-family: 'Open Sans' , sans-serif;font-size: 14px;line-height: 20px;text-decoration: none;color: #232527;font-weight:400;' data-size='txt-blck-1-text-size' data-min='9' data-max='40' data-color='txt-blck-1-text-color' mc:edit='txt-blck-1-text-1'>
	<multiline><b>$nominatoreName,</b>
	</multiline>
	</td>
	</tr>
	
	</tbody>
	</table>
	</td>
	
	</tr>
	
	</tbody>
	</table>
	<table mc:repeatable='layout' mc:hideable='' mc:variant='text-block-1' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='margin:0 auto; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px; max-width:680px;' data-module='text-block-1'>
	
	<tbody>
	<tr>
	<td align='center' style='width:100%; height:100%; background-color:#f8f8f8;' bgcollor='#f8f8f8' data-bgcolor='txt-blck-1-bg'>
	<table width='600' align='center' class='text' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td align='center' height='25' width='1' style='font-size: 1px;line-height: 15px;height: 15px;'>&nbsp;
	</td>
	</tr>
	
	<tr>
	<td style='text-align:justify; font-family: 'Open Sans' , sans-serif; font-size:14px; line-height: 24px; text-decoration: none; color: #232527; font-weight:400;' data-size='txt-blck-1-text-size' data-min='9' data-max='40' data-color='txt-blck-1-text-color' mc:edit='txt-blck-1-text-1'>
	<multiline>Your  nominee, <b>$collegueName</b> has submitted all the required details to attend <b>$eventName</b> which will be held from <b>$startDate</b> to <b>$endDate</b> at <b>$location</b>.</multiline>
	</td>
	</tr>
	
	</tbody>
	</table>
	</td>
	
	</tr>
	
	</tbody>
	</table>
	<table mc:repeatable='layout' mc:hideable='' mc:variant='text-block-1' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='margin:0 auto; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px; max-width:680px;' data-module='text-block-1'>
	
	<tbody>
	<tr>
	<td align='center' style='width:100%; height:100%; background-color:#f8f8f8;' bgcollor='#f8f8f8' data-bgcolor='txt-blck-1-bg'>
	<table width='600' align='center' class='text' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td align='center' height='25' width='1' style='font-size: 1px;line-height: 15px;height: 15px;'>&nbsp;
	</td>
	</tr>
	
	<tr>
	<td style='text-align:justify; font-family: 'Open Sans' , sans-serif; font-size:14px; line-height: 24px; text-decoration: none; color: #232527; font-weight:400;' data-size='txt-blck-1-text-size' data-min='9' data-max='40' data-color='txt-blck-1-text-color' mc:edit='txt-blck-1-text-1'>
	<multiline>For more information please reach out to <a href='mailto:partnerships@miraclesoft.com'><span style='color:#00aae7;'>partnerships@miraclesoft.com</span></a> (or) visit <a href='http://www.miraclesoft.com/conferencenominations' target='blank'><span style='color:#00aae7;'>www.miraclesoft.com/conferencenominations.</span></a></multiline>
	</td>
	</tr>
	
	</tbody>
	</table>
	</td>
	
	</tr>
	
	</tbody>
	</table>
	<table mc:repeatable='layout' mc:hideable='' mc:variant='text-block-1' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='margin:0 auto; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px; max-width:680px;' data-module='text-block-1'>
	
	<tbody>
	<tr>
	<td align='center' style='width:100%; height:100%; background-color:#f8f8f8;' bgcollor='#f8f8f8' data-bgcolor='txt-blck-1-bg'>
	<table width='600' align='center' class='text' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td align='center' height='25' width='1' style='font-size: 1px;line-height: 15px;height: 15px;'>&nbsp;
	</td>
	</tr>
	
	<tr>
	<td style='text-align:left; font-family: 'Open Sans' , sans-serif; font-size:14px; line-height: 24px; text-decoration: none; color: #232527; font-weight:400;' data-size='txt-blck-1-text-size' data-min='9' data-max='40' data-color='txt-blck-1-text-color' mc:edit='txt-blck-1-text-1'>
	<multiline>For more details regarding <b>$eventName</b> please visit <a href='$eventName'><span style='color:#00aae7;'>$eventName</span></a>.</multiline>
	</td>
	</tr>
	
	</tbody>
	</table>
	</td>
	
	</tr>
	
	</tbody>
	</table>
	<table mc:repeatable='layout' mc:hideable='' mc:variant='text-block-1' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='margin:0 auto; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px; max-width:680px;' data-module='text-block-1'>
	
	<tbody>
	<tr>
	<td align='center' style='width:100%; height:100%; background-color:#f8f8f8;' bgcollor='#f8f8f8' data-bgcolor='txt-blck-1-bg'>
	<table width='600' align='center' class='text' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td align='center' height='25' width='1' style='font-size: 1px;line-height: 15px;height: 15px;'>&nbsp;
	</td>
	</tr>
	
	<tr>
	<td style='text-align:left; font-family: 'Open Sans' , sans-serif; font-size:14px; line-height: 24px; text-decoration: none; color: #232527; font-weight:400;' data-size='txt-blck-1-text-size' data-min='9' data-max='40' data-color='txt-blck-1-text-color' mc:edit='txt-blck-1-text-1'>
	
	<multiline><b>Thanks &amp; Regards</b><br><b>Partnerships Team</b><br>
	
	Phone : (248)-412-0430<br>
	Email : <a href='mailto:partnerships@miraclesoft.com'><span style='color:#232527;'>partnerships@miraclesoft.com</span></a>
	</multiline>
	
	</td>
	</tr>
	
	<tr>
	<td align='center' height='46' width='1' style='font-size: 1px; line-height: 46px; height:46px;'>&nbsp;
	</td>
	</tr>
	
	</tbody>
	</table>
	</td>
	
	</tr>
	
	</tbody>
	</table>
	<table mc:repeatable='layout' mc:hideable='' mc:variant='footer-5' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='margin:0 auto; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px; max-width:680px;' data-module='footer-5'>
	
	<tbody>
	<tr>
	<td align='center' style='width:100%; height:100%; background-color:#ffffff;' bgcollor='#ffffff' data-bgcolor='footer-5-bg'>
	<table width='600' align='center' class='container' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td align='center' height='35' width='1' style='font-size: 1px;line-height: 15px;height: 15px;'>&nbsp;
	</td>
	</tr>
	
	<tr>
	<td align='center'>
	<table width='600' align='center' class='text' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	<tbody>
	<tr>
	
	<th width='360' align='left' class='container-wrap' valign='top' style='vertical-align: top;'>
	<table width='360' align='left' class='container' border='0' cellpadding='0' cellspacing='0' style='width:360px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td class='text-left' style='vertical-align:top;text-align:left;font-family: 'Open Sans', sans-serif;font-size:13px;padding-top: 5px;line-height: 20px;text-decoration: none;color: #232527;font-weight: 400;' data-size='footer-5-rights-size' data-min='9' data-max='40' data-color='footer-5-rights-color' mc:edit='footer-5-rights-1.1'>
	<multiline>&copy; Copyrights ".date('Y')." | Miracle Software Systems, Inc.</multiline>
                                                      </td>
                                                   </tr>
			
                                                   <tr>
                                                      <td align='center' height='13' width='1' style='font-size: 1px; line-height: 13px; height:13px;'>&nbsp;
                                                      </td>
                                                   </tr>
			
                                                   <tr>
                                                      <td align='center' height='39' width='1' style='font-size: 1px;line-height: 20px;height: 20px;'>&nbsp;
                                                      </td>
                                                   </tr>
			
                                                </tbody>
                                             </table>
                                          </th>
			
                                          <th width='280' align='right' class='container-wrap' valign='top' style='vertical-align: top;'>
                                             <table width='280' align='right' class='container' border='0' cellpadding='0' cellspacing='0' style='width:280px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
			
                                                <tbody>
                                                   <tr>
                                                      <td class='disable' align='center' height='5' width='1' style='font-size: 1px; line-height: 5px; height:5px;'>&nbsp;
                                                      </td>
                                                   </tr>
			
                                                   <tr>
                                                      <td align='right'>
                                                         <table width='135' align='right' class='container' border='0' cellpadding='0' cellspacing='0' style='width:135px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
			
                                                            <tbody>
                                                               <tr>
                                                                  <td align='left'>
                                                                     <table style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;border: 0px;' align='left' border='0' cellpadding='0' cellspacing='0' width='auto'>
                                                                        <tbody>
                                                                           <tr>
                                                                              <th>
                                                                                 <a href='https://www.facebook.com/miracle45625/' target='blank' style='color:#ef4048; text-decoration: none;'><img src='http://www.miraclesoft.com/images/newsletters/facebook1.png' width='20' height='20' alt='#' style='display:block; vertical-align:middle;'></a>
                                                                              </th>
			
                                                                              <td align='center' height='1' width='10' style='font-size: 1px; line-height: 1px; width:10px;'>
                                                                              </td>
			
                                                                              <th>
                                                                                 <a href='https://plus.google.com/+Team_MSS' target='blank' style='color:#ef4048; text-decoration: none;'><img src='http://www.miraclesoft.com/images/newsletters/googleplus1.png' width='20' height='20' alt='#' style='display:block; vertical-align:middle;'></a>
                                                                              </th>
			
                                                                              <td align='center' height='1' width='10' style='font-size: 1px; line-height: 1px; width:10px;'>
                                                                              </td>
			
                                                                              <th>
                                                                                 <a href='https://www.linkedin.com/company/miracle-software-systems-inc' target='blank' style='color:#ef4048; text-decoration: none;'><img src='http://www.miraclesoft.com/images/newsletters/Linkedin1.png' width='20' height='20' alt='#' style='display:block; vertical-align:middle;'></a>
                                                                              </th>
			
                                                                              <td align='center' height='1' width='10' style='font-size: 1px; line-height: 1px; width:10px;'>
                                                                              </td>
			
                                                                              <th></th>
                                                                              <td>
                                                                                 <a href='https://www.youtube.com/c/Team_MSS' target='blank' style='color:#ef4048; text-decoration: none;'><img src='http://www.miraclesoft.com/images/newsletters/youtube1.png' width='20' height='20' alt='#' style='display:block; vertical-align:middle;'></a>
			
                                                                              </td>
                                                                              <td align='center' height='1' width='10' style='font-size: 1px; line-height: 1px; width:10px;'>
                                                                              </td>
			
                                                                              <th></th>
                                                                              <td>
                                                                                 <a href='https://twitter.com/Team_MSS' target='blank' style='color:#ef4048; text-decoration: none;'><img src='http://www.miraclesoft.com/images/newsletters/Twitter1.png' width='20' height='20' alt='#' style='display:block; vertical-align:middle;'></a>
			
                                                                              </td>
                                                                              <td align='center' height='1' width='10' style='font-size: 1px; line-height: 1px; width:10px;'>
                                                                              </td>
			
                                                                              <th>
                                                                              </th>
                                                                           </tr>
                                                                        </tbody>
                                                                     </table>
                                                                  </td>
                                                               </tr>
			
                                                            </tbody>
                                                         </table>
                                                      </td>
                                                   </tr>
			
                                                   <tr>
                                                      <td align='center' height='39' width='1' style='font-size: 1px;line-height: 20px;height: 20px;'>&nbsp;
                                                      </td>
                                                   </tr>
			
                                                </tbody>
                                             </table>
                                          </th>
			
                                       </tr>
                                    </tbody>
                                 </table>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </td>
			
               </tr>
			
         </tbody>
      </table>
      <span class='gr__tooltip'><span class='gr__tooltip-content'></span><i class='gr__tooltip-logo'></i><span class='gr__triangle'></span></span>
			
</body></html>";
		
		
		//$mail->MsgHTML("<b>Hi, your first SMTP mail has been received. Great Job!.. <br/><br/>by <a href='http://www.asif18.com/7/php/send-mails-using-smtp-in-php-by-gmail-server-or-own-domain-server/'>Asif18</a></b>"); //Put your body of the message you can place html code here
		$mail->MsgHTML($bodyContent); //Put your body of the message you can place html code here
		
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
	/*Author : Santosh Kola
	 * Date : 05/08/2017
	 * Description : You have been nominated (After nomination submitted)
	 *
	 */
	function sendYouHaveBeenNominatedByNominee($eventName,$location,$startDate,$endDate,$collegueEmail,$nominatoreName,$collegueName,$conferenceUrl){
		
		$mail	= new PHPMailer; // call the class
		$mail->IsSMTP();
		$mail->Host = SMTP_HOST; //Hostname of the mail server
		$mail->Port = SMTP_PORT; //Port of the SMTP like to be 25, 80, 465 or 587
		$mail->SMTPAuth = true; //Whether to use SMTP authentication
		$mail->SMTPSecure = SMTP_SECURE;
		$mail->Username = SMTP_UNAME; //Username for SMTP authentication any valid email created in your domain
		$mail->Password = SMTP_PWORD; //Password for SMTP authentication
		//$mail->AddReplyTo("mssapp@miraclesoft.com", "Maketing Team"); //reply-to address
		//$mail->SetFrom("mssapp@miraclesoft.com", "Maketing Team"); //From address of the mail
		$mail->SetFrom("partnerships@miraclesoft.com", "Partnerships Team"); //From address of the mail
		// put your while loop here like below,
		$mail->Subject = "You have been nominated!"; //Subject od your mail
		//$mail->AddAddress("skola2@miraclesoft.com", "Santosh Kola"); //To address who will receive this email
		// $mail->AddAddress(CONTACT_US, "info"); //To address who will receive this email
		/*  $myArray = explode(';', NEW_NOMINATIONS_SUBMITTED);
		 for ($i = 0; $i < count($myArray); ++$i) {
		 $innerArray = explode(',', $myArray[$i]);
		 $mail->AddAddress($innerArray[0], $innerArray[1]);
		 }*/
		
		$startDate = date("F d , Y",strtotime($startDate));
		$endDate = date("F d , Y",strtotime($endDate));
		
		$mail->AddAddress($collegueEmail, $collegueName);
		//  $mail->AddAddress("skola2@miraclesoft.com", $collegueName);
		$mail->AddBCC("skola2@miraclesoft.com", "Santosh Kola");
		
		$bodyContent = "<html xmlns='http://www.w3.org/1999/xhtml' class='gr__newsletters-2017-vnallamalla_c9users_io'><head>
		<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<meta http-equiv='X-UA-Compatible' content='IE=edge'>
		<meta name='format-detection' content='telephone=no'>
		<title>Your nomination has been submitted</title>
		<style>
		@import url('https://fonts.googleapis.com/css?family=Montserrat:400,700');
		@import url('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i');
		html{width: 100%;}
		body{
		width: 100%;
		background-color: #ffffff;
		margin:0; padding:0;
		-webkit-text-size-adjust:none;
		-ms-text-size-adjust:none;
		-webkit-font-smoothing: ;
		mso-margin-top-alt:0px;
		mso-margin-bottom-alt:0px;
		mso-padding-alt: 0px 0px 0px 0px;}
		div, p, a, li, td { -webkit-text-size-adjust:none; }
		#outlook a {padding:0;}
		p,h1,h2,h3,h4{ margin-top:0; margin-bottom:0; padding-top:0; padding-bottom:0;}
		table{
		mso-table-lspace:0pt;
		mso-table-rspace:0pt;
	}
	table td {border-collapse: collapse;}
	span.preheader{display: none;font-size: 1px; visibility: hidden; opacity: 0; color: transparent; height: 0; width: 0;}
	.googlefix {width: 280px!important; text-align:center!important; min-width:0px!important}
	a {outline:none;}
	a {text-decoration: none;}
	a img {border:none;}
	.image_fix {display:block;}
	.ReadMsgBody { width: 100%;}
	.ExternalClass {width: 100%;}
	.ExternalClass,
	.ExternalClass p,
	.ExternalClass span,
	.ExternalClass font,
	.ExternalClass td,
	.ExternalClass div {
	line-height: 100%;}
	img{
	-ms-interpolation-mode:bicubic;}
	p {
	margin:0 !important;
	padding:0 !important;}
	.button:hover {filter: brightness(120%);}
	@media only screen and (max-width: 600px)
	{
	body{width:100% !important;}
	.container           {width:100% !important; min-width:100% !important;}
	.container-wrap      {display:inline-block !important; width:100% !important; height:auto !important; border-radius:0 !important;}
	.image-container     {width: 100% !important; height: auto !important; }
	.disable             {display: none !important;}
	.enable              {display: inline !important;}
	.padding-top-10      {padding-top: 10px !important;}
	.padding-top-20      {padding-top: 20px !important;}
	.padding-top-30      {padding-top: 30px !important;}
	.padding-top-40      {padding-top: 40px !important;}
	.padding-top-60      {padding-top: 60px !important;}
	.padding-bottom-10   {padding-bottom: 10px !important;}
	.padding-bottom-20   {padding-bottom: 20px !important;}
	.padding-bottom-30   {padding-bottom: 30px !important;}
	.padding-bottom-40   {padding-bottom: 40px !important;}
	.padding-bottom-60   {padding-bottom: 60px !important;}
	.padding-none        {padding:0  !important;}
	.text                {width:90% !important; text-align:center !important;}
	.text-on-bg          {width:90% !important; text-align:center !important;}
	.text-center         {text-align: center !important;}
	.text-right          {text-align: right !important;}
	.text-left           {text-align: left !important;}
	.text-white          {color: #ffffff !important;}
	.background-cover    {background-size: cover !important;}
	.background-cover-percent    {background-size: 100% 79% !important;}
	.background-contain  {background-size: contain !important;}
	.background-auto     {background-size: auto !important;}
	.background-center   {background-position: center center !important;}
	.background-none     {background-image: none !important;}
	.border-none         {border:0 !important;}
	.border-white        {border-color: #ffffff !important;}
	}
	@media only screen and (max-width: 451px)
	{
	body {width:100% !important;}
	.container           {width:100% !important; min-width:100% !important;}
	.container-wrap      {display:inline-block !important; width:100% !important; height:auto !important; border-radius:0 !important;}
	}
	@media only screen and (max-width: 341px)
	{
	body {width:100%!important;}
	.container           {width:100% !important; min-width:100% !important;}
	.container-wrap      {display:inline-block !important; width:100% !important; height:auto !important; border-radius:0 !important;}
	}
	</style>
	</head>
	<body marginwidth='0' marginheight='0' style='margin-top: 0; margin-bottom: 0; padding-top: 0; padding-bottom: 0; width: 100%; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;' offset='0' topmargin='0' leftmargin='0' data-gr-c-s-loaded='true'>
	
	<table mc:repeatable='layout' mc:hideable='' mc:variant='navigation-6' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='margin:0 auto; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px; max-width:680px;' data-module='navigation-6'>
	
	<tbody>
	<tr>
	<td align='center' style='width:100%; height:100%; background-color:#ffffff;' bgcollor='#ffffff' data-bgcolor='nav-6-bg'>
	<table width='600' align='center' class='container' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td align='center' height='20' width='1' style='font-size: 1px; line-height: 20px; height:20px;'>&nbsp;
	</td>
	</tr>
	
	<tr>
	<td align='center'>
	<table width='600' align='center' class='container' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	<tbody>
	<tr>
	
	<th width='140' align='left' class='container-wrap' valign='top' style='vertical-align: top;'>
	<table align='center' cellpadding='0' cellspacing='0'>
	<tbody>
	<tr>
	<td width='160' align='center' valign='top'>
	<table width='100%' align='center' cellpadding='0' cellspacing='0'>
	<tbody>
	
	<tr>
	<td align='center' valign='top' style='line-height: 0px !important;'>
	<a style='text-decoration: none; display: block;' href='http://www.miraclesoft.com/' target='blank'>
	<img src='http://www.miraclesoft.com/images/newsletters/miracle-logo-dark.png' alt='logo' width='100%' style='width: 100%; max-width: 100%;'>
	</a>
	</td>
	</tr>
	</tbody>
	</table>
	</td>
	</tr>
	</tbody>
	</table>
	</th>
	
	<th width='320' align='right' class='container-wrap' valign='top' style='vertical-align: top;'>
	<table width='320' align='right' class='container' border='0' cellpadding='0' cellspacing='0' style='width:320px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td align='center' height='1' width='1' style='font-size: 1px; line-height: 1px; height:1px;'>&nbsp;
	</td>
	</tr>
	
	<tr>
	<td align='right'>
	<table width='auto' align='right' class='container' border='0' cellpadding='0' cellspacing='0' style='width:autopx; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	<tbody>
	<tr>
	<td align='center'>
	<table width='auto' align='center' class='' border='0' cellpadding='0' cellspacing='0' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	<tbody><tr>
	<td align='center' height='15'>
	</td>
	</tr>
	<tr>
	
	<th align='center' height='1' width='4' style='font-size: 1px; line-height: 1px; width:4px;'>
	</th>
	
	<th style='text-align:center; font-family: oPen sans; font-size:12px; line-height: 20px; text-decoration: none; color: #000000; font-weight:400; text-transform: uppercase; : 0.05em;'>
	<a href='http://www.miraclesoft.com/company/' target='blank' style='text-align:center; font-family: oPen sans; font-size:12px; line-height: 20px; text-decoration: none; color: #000000; font-weight:600; text-transform: uppercase; : 0.05em;' data-size='nav-6-link-size' data-min='9' data-max='40' data-color='nav-6-link-color' mc:edit='nav-6-link-2'>
	<multiline>About us |</multiline>
	</a>
	</th>
	
	<th align='center' height='1' width='4' style='font-size: 1px; line-height: 1px; width:4px;'>
	</th>
	
	<th style='text-align:center; font-family: oPen sans; font-size:12px; line-height: 20px; text-decoration: none; color: #000000; font-weight:400; text-transform: uppercase; : 0.05em;'>
	<a href='http://www.miraclesoft.com/services/' target='blank' style='text-align:center; font-family: oPen sans; font-size:12px; line-height: 20px; text-decoration: none; color: #000000; font-weight:600; text-transform: uppercase; : 0.05em;' data-size='nav-6-link-size' data-min='9' data-max='40' data-color='nav-6-link-color' mc:edit='nav-6-link-3'>
	<multiline> Our Services |</multiline>
	</a>
	</th>
	
	<th align='center' height='1' width='4' style='font-size: 1px; line-height: 1px; width:4px;'>
	</th>
	
	<th style='text-align:center; font-family: oPen sans; font-size:12px; line-height: 20px; text-decoration: none; color: #232527; font-weight:600; text-transform: uppercase; : 0.05em;'>
	<a href='http://www.miraclesoft.com/contact/' target='blank' style='text-align:center; font-family: oPen sans; font-size:12px; line-height: 20px; text-decoration: none; color: #232527; font-weight:600; text-transform: uppercase; : 0.05em;' data-size='nav-6-signUp-size' data-min='9' data-max='40' data-color='nav-6-signUp-color' mc:edit='nav-6-signUp-4'>
	<multiline>Contact us</multiline>
	</a>
	</th>
	
	</tr>
	</tbody>
	</table>
	</td>
	</tr>
	</tbody>
	</table>
	</td>
	</tr>
	
	<tr>
	<td align='center' height='18' width='1' style='font-size: 1px; line-height: 18px; height:18px;'>&nbsp;
	</td>
	</tr>
	
	</tbody>
	</table>
	</th>
	
	</tr>
	</tbody>
	</table>
	</td>
	</tr>
	</tbody>
	</table>
	</td>
	</tr>
	
	</tbody>
	</table>
	<table mc:repeatable='layout' mc:hideable='' mc:variant='navigation-margin' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='margin:0 auto; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px; max-width:680px;' data-module='navigation-margin'>
	
	<tbody>
	<tr>
	<td align='center' style='width:100%; height:100%; background-color:#ffffff;' bgcollor='#ffffff' data-bgcolor='navigation-margin-bg'>
	<table width='600' align='center' class='container' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td align='center' height='20' width='1' style='font-size: 1px;line-height: 10px;height: 10px;'>&nbsp;
	</td>
	</tr>
	
	</tbody>
	</table>
	</td>
	</tr>
	
	</tbody>
	</table>
	<div class='parentOfBg'></div>
	<table align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='margin:0 auto; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px; max-width:680px;' data-module='text-block-1'>
	
	<tbody>
	<tr>
	<td align='center' style='width:100%; height:100%; background-color:#f8f8f8;' data-bgcolor='txt-blck-1-bg'>
	<table width='600' align='center' class='text' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td align='center' height='35' width='1' style='font-size: 1px; line-height: 35px; height:35px;'>
	&nbsp;
	</td>
	</tr>
	
	<tr>
	<td style='text-align: center;font-family: 'Open Sans' , sans-serif;font-size: 25px;line-height: 20px;text-decoration: none;color: #232527;font-weight:700;' data-size='txt-blck-1-text-size' data-min='9' data-max='40' data-color='txt-blck-1-text-color'>
	<multiline>You Have Been Nominated!
	</multiline>
	</td>
	</tr>
	
	<tr>
	<td align='center' height='25' width='1' style='font-size: 1px;line-height: 25px;height: 25px;'>
	&nbsp;
	</td>
	</tr>
	<tr>
	<td align='center'>
	<table width='60' height='2' align='center' border='0' cellpadding='0' cellspacing='0' style='width:60px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px; background-color: #232527' data-bgcolor='team-6-line-color'>
	
	<tbody>
	<tr>
	<td align='center' height='2' width='40' style='font-size: 2px; line-height: 2px; width:40px;'></td>
	</tr>
	
	</tbody>
	</table>
	</td>
	</tr>
	
	</tbody>
	</table>
	</td>
	
	</tr>
	
	</tbody>
	</table>
	
	
	
	<table mc:repeatable='layout' mc:hideable='' mc:variant='text-block-1' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='margin:0 auto; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px; max-width:680px;' data-module='text-block-1'>
	
	<tbody>
	<tr>
	<td align='center' style='width:100%; height:100%; background-color:#f8f8f8;' bgcollor='#f8f8f8' data-bgcolor='txt-blck-1-bg'>
	<table width='600' align='center' class='text' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td align='center' height='35' width='1' style='font-size: 1px;line-height: 15px;height: 35px;'>&nbsp;
	</td>
	</tr>
	
	<tr>
	<td style='text-align:justify; font-family: 'Open Sans' , sans-serif; font-size:14px; line-height: 24px; text-decoration: none; color: #232527; font-weight:400;' data-size='txt-blck-1-text-size' data-min='9' data-max='40' data-color='txt-blck-1-text-color' mc:edit='txt-blck-1-text-1'>
	<multiline label='content'>You have been nominated by <b>$nominatoreName</b> to attend <b>$eventName</b> at <b>$location</b> from
	<b>$startDate</b> to <b>$endDate</b>.
	</multiline>
	</td>
	</tr>
	
	
	
	
	</tbody>
	</table>
	</td>
	
	</tr>
	
	</tbody>
	</table>
	
	<table mc:repeatable='layout' mc:hideable='' mc:variant='text-block-1' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='margin:0 auto; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px; max-width:680px;' data-module='text-block-1'>
	
	<tbody>
	<tr>
	<td align='center' style='width:100%; height:100%; background-color:#f8f8f8;' bgcollor='#f8f8f8' data-bgcolor='txt-blck-1-bg'>
	<table width='600' align='center' class='text' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td align='center' height='25' width='1' style='font-size: 1px;line-height: 15px;height: 15px;'>&nbsp;
	</td>
	</tr>
	
	<tr>
	<td style='text-decoration:none; text-align:justify; font-family: 'Open Sans' , sans-serif; font-size:14px; line-height: 24px; text-decoration: none; color: #232527; font-weight:400;' data-size='txt-blck-1-text-size' data-min='9' data-max='40' data-color='txt-blck-1-text-color' mc:edit='txt-blck-1-text-1'>
	<multiline class=''>For more information please reach out to <a href='mailto:partnerships@miraclesoft.com'><span style='color:#00aae7;'>partnerships@miraclesoft.com</span></a> (or) visit <a href='http://www.miraclesoft.com/conferencenominations' target='blank'><span style='color:#00aae7;'>www.miraclesoft.com/conferencenominations</span></a> and Visit <a href='$conferenceUrl'><span style='color:#00aae7;'>$conferenceUrl</span></a> for more details regarding <b>$eventName</b>
	</multiline>
	</td>
	</tr>
	
	</tbody>
	</table>
	</td>
	
	</tr>
	
	</tbody>
	</table>
	
	
	<table mc:repeatable='layout' mc:hideable='' mc:variant='text-block-1' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='margin:0 auto; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px; max-width:680px;' data-module='text-block-1'>
	
	<tbody>
	<tr>
	<td align='center' style='width:100%; height:100%; background-color:#f8f8f8;' bgcollor='#f8f8f8' data-bgcolor='txt-blck-1-bg'>
	<table width='600' align='center' class='text' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td align='center' height='25' width='1' style='font-size: 1px;line-height: 15px;height: 15px;'>&nbsp;
	</td>
	</tr>
	
	<tr>
	<td style='text-align:left; font-family: 'Open Sans' , sans-serif; font-size:14px; line-height: 24px; text-decoration: none; color: #232527; font-weight:400;' data-size='txt-blck-1-text-size' data-min='9' data-max='40' data-color='txt-blck-1-text-color' mc:edit='txt-blck-1-text-1'>
	<multiline><b>Thanks &amp; Regards</b><br><b>Partnerships Team</b><br>
	
	Phone : (248)-412-0430<br>
	Email : <a href='mailto:partnerships@miraclesoft.com'><span style='color:#232527;'>partnerships@miraclesoft.com</span></a>
	</multiline>
	</td>
	</tr>
	
	<tr>
	<td align='center' height='46' width='1' style='font-size: 1px; line-height: 46px; height:46px;'>&nbsp;
	</td>
	</tr>
	
	</tbody>
	</table>
	</td>
	
	</tr>
	
	</tbody>
	</table>
	<table mc:repeatable='layout' mc:hideable='' mc:variant='footer-5' align='center' border='0' cellpadding='0' cellspacing='0' width='100%' style='margin:0 auto; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px; max-width:680px;' data-module='footer-5'>
	
	<tbody>
	<tr>
	<td align='center' style='width:100%; height:100%; background-color:#ffffff;' bgcollor='#ffffff' data-bgcolor='footer-5-bg'>
	<table width='600' align='center' class='container' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td align='center' height='35' width='1' style='font-size: 1px;line-height: 15px;height: 15px;'>&nbsp;
	</td>
	</tr>
	
	<tr>
	<td align='center'>
	<table width='600' align='center' class='text' border='0' cellpadding='0' cellspacing='0' style='width:600px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	<tbody>
	<tr>
	
	<th width='360' align='left' class='container-wrap' valign='top' style='vertical-align: top;'>
	<table width='360' align='left' class='container' border='0' cellpadding='0' cellspacing='0' style='width:360px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
	
	<tbody>
	<tr>
	<td class='text-left' style='vertical-align:top;text-align:left;font-family: 'Open Sans', sans-serif;font-size:13px;padding-top: 5px;line-height: 20px;text-decoration: none;color: #232527;font-weight: 400;' data-size='footer-5-rights-size' data-min='9' data-max='40' data-color='footer-5-rights-color' mc:edit='footer-5-rights-1.1'>
	<multiline>&copy; Copyrights ".date('Y')." | Miracle Software Systems, Inc.</multiline>
                                                      </td>
                                                   </tr>
			
                                                   <tr>
                                                      <td align='center' height='13' width='1' style='font-size: 1px; line-height: 13px; height:13px;'>&nbsp;
                                                      </td>
                                                   </tr>
			
                                                   <tr>
                                                      <td align='center' height='39' width='1' style='font-size: 1px;line-height: 20px;height: 20px;'>&nbsp;
                                                      </td>
                                                   </tr>
			
                                                </tbody>
                                             </table>
                                          </th>
			
                                          <th width='280' align='right' class='container-wrap' valign='top' style='vertical-align: top;'>
                                             <table width='280' align='right' class='container' border='0' cellpadding='0' cellspacing='0' style='width:280px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
			
                                                <tbody>
                                                   <tr>
                                                      <td class='disable' align='center' height='5' width='1' style='font-size: 1px; line-height: 5px; height:5px;'>&nbsp;
                                                      </td>
                                                   </tr>
			
                                                   <tr>
                                                      <td align='right'>
                                                         <table width='135' align='right' class='container' border='0' cellpadding='0' cellspacing='0' style='width:135px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 0px;'>
			
                                                            <tbody>
                                                               <tr>
                                                                  <td align='left'>
                                                                     <table style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;border: 0px;' align='left' border='0' cellpadding='0' cellspacing='0' width='auto'>
                                                                        <tbody>
                                                                           <tr>
                                                                              <th>
                                                                                    <a href='https://www.facebook.com/miracle45625/' target='blank' style='color:#ef4048; text-decoration: none;'><img src='http://www.miraclesoft.com/images/newsletters/facebook1.png' width='20' height='20' alt='#' style='display:block; vertical-align:middle;'></a>   </th>
			
                                                                              <td align='center' height='1' width='10' style='font-size: 1px; line-height: 1px; width:10px;'>
                                                                              </td>
			
                                                                              <th>
                                                                                <a href='https://plus.google.com/+Team_MSS' target='blank' style='color:#ef4048; text-decoration: none;'><img src='http://www.miraclesoft.com/images/newsletters/googleplus1.png' width='20' height='20' alt='#' style='display:block; vertical-align:middle;'></a>     </th>
			
                                                                              <td align='center' height='1' width='10' style='font-size: 1px; line-height: 1px; width:10px;'>
                                                                              </td>
			
                                                                              <th>
                                                                                     <a href='https://www.linkedin.com/company/miracle-software-systems-inc' target='blank' style='color:#ef4048; text-decoration: none;'><img src='http://www.miraclesoft.com/images/newsletters/Linkedin1.png' width='20' height='20' alt='#' style='display:block; vertical-align:middle;'></a>     </th>
			
                                                                              <td align='center' height='1' width='10' style='font-size: 1px; line-height: 1px; width:10px;'>
                                                                              </td>
			
                                                                              <th>
</th><td>                        <a href='https://www.youtube.com/c/Team_MSS' target='blank' style='color:#ef4048; text-decoration: none;'><img src='http://www.miraclesoft.com/images/newsletters/youtube1.png' width='20' height='20' alt='#' style='display:block; vertical-align:middle;'></a>
			
                                                                              </td><td align='center' height='1' width='10' style='font-size: 1px; line-height: 1px; width:10px;'>
                                                                              </td>
			
                                                                              <th>
</th><td>                        <a href='https://twitter.com/Team_MSS' target='blank' style='color:#ef4048; text-decoration: none;'><img src='http://www.miraclesoft.com/images/newsletters/Twitter1.png' width='20' height='20' alt='#' style='display:block; vertical-align:middle;'></a>
			
                                                                              </td><td align='center' height='1' width='10' style='font-size: 1px; line-height: 1px; width:10px;'>
                                                                              </td>
			
                                                                              <th>
                                                                                </th></tr>
                                                                        </tbody>
                                                                     </table>
                                                                  </td>
                                                               </tr>
			
                                                            </tbody>
                                                         </table>
                                                      </td>
                                                   </tr>
			
                                                   <tr>
                                                      <td align='center' height='39' width='1' style='font-size: 1px;line-height: 20px;height: 20px;'>&nbsp;
                                                      </td>
                                                   </tr>
			
                                                </tbody>
                                             </table>
                                          </th>
			
                                       </tr>
                                    </tbody>
                                 </table>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </td>
			
               </tr>
			
         </tbody>
      </table>
			
<span class='gr__tooltip'><span class='gr__tooltip-content'></span><i class='gr__tooltip-logo'></i><span class='gr__triangle'></span></span></body></html>";
		
		
		//$mail->MsgHTML("<b>Hi, your first SMTP mail has been received. Great Job!.. <br/><br/>by <a href='http://www.asif18.com/7/php/send-mails-using-smtp-in-php-by-gmail-server-or-own-domain-server/'>Asif18</a></b>"); //Put your body of the message you can place html code here
		$mail->MsgHTML($bodyContent); //Put your body of the message you can place html code here
		
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
	
	
	/*
	 Event nominations emails end
	 Author : Santosh Kola
	 DAte : 05/30/2017
	 */
	
	/*Acknowldgement for India employee verification
	 * Date : 09/27/2017
	 * Author : Santosh Kola
	 */
	function sendEmployeeVerificationIndiaAcknowldge($fname,$email,$remployeeName,$verificationRandonId){
		
		$mail	= new PHPMailer; // call the class
		$mail->IsSMTP();
		$mail->Host = SMTP_HOST; //Hostname of the mail server
		$mail->Port = SMTP_PORT; //Port of the SMTP like to be 25, 80, 465 or 587
		$mail->SMTPAuth = true; //Whether to use SMTP authentication
		$mail->SMTPSecure = SMTP_SECURE;
		$mail->Username = SMTP_UNAME; //Username for SMTP authentication any valid email created in your domain
		$mail->Password = SMTP_PWORD; //Password for SMTP authentication
		//$mail->AddReplyTo($email, $fname); //reply-to address
		$mail->SetFrom("hubbleapp@miraclesoft.com", "Miracle Software Systems (I) Pvt. Ltd"); //From address of the mail
		// put your while loop here like below,
		$mail->Subject = "ThankYou!!"; //Subject od your mail
		//$mail->AddAddress("skola2@miraclesoft.com", "Santosh Kola"); //To address who will receive this email
		$mail->AddAddress($email, $fname); //To address who will receive this email
		$mail->AddBCC("vkandregula@miraclesoft.com", "Venkat Ram Prasad Kandregula");
		//$mail->MsgHTML("<b>Hi, your first SMTP mail has been received. Great Job!.. <br/><br/>by <a href='http://www.asif18.com/7/php/send-mails-using-smtp-in-php-by-gmail-server-or-own-domain-server/'>Asif18</a></b>"); //Put your body of the message you can place html code here
		$mail->MsgHTML("<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
				<html xmlns='http://www.w3.org/1999/xhtml'>
				<head>
				<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
				<title>Employee Verification</title>
				<style type='text/css'>
				body {
				padding-top: 0 !important;
				padding-bottom: 0 !important;
				padding-top: 0 !important;
				padding-bottom: 0 !important;
				margin:0 !important;
				width: 100% !important;
				-webkit-text-size-adjust: 100% !important;
				-ms-text-size-adjust: 100% !important;
				-webkit-font-smoothing: antialiased !important;
	}
				.tableContent img {
				border: 0 !important;
				display: block !important;
				outline: none !important;
	}
				a{
				color:#382F2E;
	}
				p, h1,h2,ul,ol,li,div{
				margin:0;
				padding:0;
	}
				h1,h2{
				font-weight: normal;
				background:transparent !important;
				border:none !important;
	}
				.contentEditable h2.big,.contentEditable h1.big{
				font-size: 26px !important;
	}
				.contentEditable h2.bigger,.contentEditable h1.bigger{
				font-size: 37px !important;
	}
				td,table{
				vertical-align: top;
	}
				td.middle{
				vertical-align: middle;
	}
				a.link1{
				font-size:13px;
				color:#27A1E5;
				line-height: 24px;
				text-decoration:none;
	}
				a{
				text-decoration: none;
	}
				.link2{
				color:#fc3f3f;
				border-top:0px solid #fc3f3f;
				border-bottom:0px solid #fc3f3f;
				border-left:10px solid #fc3f3f;
				border-right:10px solid #fc3f3f;
				border-radius:1px;
				-moz-border-radius:5px;
				-webkit-border-radius:5px;
				background:#fc3f3f;
	}
				.link3{
				color:#555555;
				border:1px solid #cccccc;
				padding:10px 18px;
				border-radius:3px;
				-moz-border-radius:3px;
				-webkit-border-radius:3px;
				background:#ffffff;
	}
				.link4{
				color:#27A1E5;
				line-height: 24px;
	}
				h2,h1{
				line-height: 20px;
	}
				p{
				font-size: 14px;
				line-height: 21px;
				color:#AAAAAA;
	}
				.contentEditable li{
	}
				.appart p{
	}
				.bgItem{
				background:#ffffff;
	}
				.bgBody{
				background: #000000;
	}
				img {
				outline:none;
				text-decoration:none;
				-ms-interpolation-mode: bicubic;
				width: auto;
				max-width: 100%;
				clear: both;
				display: block;
				float: none;
	}
				</style>
				<script type='colorScheme' class='swatch active'>
				{
				'name':'Default',
				'bgBody':'ffffff',
				'link':'27A1E5',
				'color':'AAAAAA',
				'bgItem':'ffffff',
				'title':'444444'
	}
				</script>
				</head>
				<body paddingwidth='0' paddingheight='0' bgcolor='#d1d3d4'  style='padding-top: 0; padding-bottom: 0; padding-top: 0; padding-bottom: 0; background-repeat: repeat; width: 100% !important; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased;' offset='0' toppadding='0' leftpadding='0'>
				<table width='100%' border='0' cellspacing='0' cellpadding='0' class='tableContent bgBody' align='center'  style='font-family:Helvetica, sans-serif;'>
				<tr>
				<td align='center'>
				<table width='600' border='0' cellspacing='0' cellpadding='0' align='center' >
				<tr>
				<td class='bgItem' align='center'>
				<table width='600' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td class='movableContentContainer' align='center'>
				<div class='movableContent'>
				<table width='100%' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td style='background:#000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px' height='20'></td>
				</tr>
				<tr>
				<td style='background:#000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px'>
				<table width='650' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td width='130'>
				<div class='contentEditableContainer contentImageEditable'>
				<div class='contentEditable'>
				<a href='http://www.miraclesoft.com/index.php' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/logo.png' alt='Logo' width='70' height='45' data-default='placeholder' data-max-width='200'></a>
				</div>
				</div>
				</td>
				<td valign='middle' style='vertical-align: middle;'>
				</td>
				<td valign='middle' style='vertical-align: middle;' width='150'>
				<br>
				<table width='300' border='0' cellpadding='0' cellspacing='0' align='right' style='text-align: right; font-size: 13px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='fullCenter'>
				<tr>
				<td height='55' valign='middle' width='100%' style='font-family: Helvetica, Arial, sans-serif; color:#000000;'>
				<span style='font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;'><a href='http://www.miraclesoft.com' target='_blank' style='text-decoration: none; color:#ffffff;'class='underline' >Company</a></span>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style='font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;'><a href='http://www.miraclesoft.com/careers/careers.php' target='_blank' style='text-decoration: none; color:#ffffff;'class='underline' >Careers</a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</td>
				</tr>
				</table>
				</td>
				</tr>
				</table>
				</td>
				</tr>
				</table>
				</div>
				<div class='movableContent'>
				<table width='580' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td style='border: 5px solid #000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px'>
				<div class='movableContent'>
				<table width='650' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td style='background:#305983; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:px'>
				<table width='600' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td height='18'></td>
				</tr>
				<tr>
				<td>
				<div class='contentEditableContainer contentTextEditable'>
				<div class='contentEditable' style='text-align: left;'>
				<h2 style='font-size: 22px;'><font color='#FFffff' face='trebuchet ms'><b>Thank You</b></font></h2>
				<br>
				<p style='font-size: 20px;'>
				<font face='calibri'>
				<b></b>
				</p>
				</div>
				</div>
				</td>
				</tr>
				</table>
				</td>
				</tr>
				</table>
				</div>
				<table width='600' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr><td height='10'></td></tr>
				<tr>
				<td>
				<div class='contentEditableContainer contentTextEditable'>
				<div class='contentEditable' style='text-align: center;'>
				<br>
				<p style='text-align: justify; font-size: 14px;'><font color='#000000' face='trebuchet ms'><b>Hello $fname,</b><br><br>
				Thank you so much for filling  the employee verification Form with Miracle Software Systems, your application verification code <b>$verificationRandonId</b> is under process it will take 10 to 15 business days  and our concern authority Mrs. Madhavi Lokam- Vice President- Global Operations,  will respond to your  verification.
				
				<br><br><b>Thanks & Regards,</b>
				<br><b>Corporate Application Support Team,</b>
				<br>  Miracle Software Systems (I) Pvt. Ltd. 
				<br> MIG-49 Lawsons Bay Colony  Visakhapatnam, AP � 530017, India 
				
				<br><b>Phone :</b> 91-891-6696666
				</font></p>
				<tr><td height='10'></td></tr></font></p>
				</div>
				</div>
				</td>
				</tr>
				<tr><td height='15'></td></tr>
				</table>
				<table width='600' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td>
				<div class='contentEditableContainer contentTextEditable'>
				<div class='contentEditable' style='text-align: center;'>
				<p style='text-align: justify; font-size: 14px;'><font color='#ff000' face='trebuchet ms'><i><b>*Note:</b> Do not reply to this email as this is an automated notification.</i>
				</font>
				</p>
				</div>
				</div>
				</td>
				</tr>
				<tr>
				<td height='25'></td>
				</tr>
				</table>
				</td>
				</tr>
				</table>
				</div>
				<div class='movableContent'>
				<table width='660' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td style='background:#000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px'>
				<table width='655' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td colspan='3' height='20'></td>
				</tr>
				<tr>
				<td width='90'></td>
				<td width='660'align='center' style='text-align: center;'>
				<table width='660' cellpadding='0' cellspacing='0' align='center'>
				<tr>
				<td>
				<div class='contentEditableContainer contentTextEditable'>
				<div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
				<p style='text-align: center; font-size: 14px;'><font color='#ffffff' face='trebuchet ms'>� Copyright ".date('Y')." Miracle Software Systems, Inc.<br>
                                                45625 Grand River Avenue<br> Novi, MI - USA
                                              </p>
                                            </div>
                                          </div>
                                        </td>
                                      </tr>
                                    </table>
                                  </td>
                                  <td width='90'></td>
                                </tr>
                              </table>
                              <table width='650' border='0' cellspacing='0' cellpadding='0' align='center'>
                                <tr>
                                  <td colspan='3' height='20'></td>
                                </tr>
                                <tr>
                                  <td width='195'></td>
                                  <td width='190' align='center' style='text-align: center;'>
                                    <table width='190' cellpadding='0' cellspacing='0' align='center'>
                                      <tr>
                                        <td width='40'>
                                          <div class='contentEditableContainer contentFacebookEditable'>
                                            <div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
                                              <a href='https://www.facebook.com/miracle45625' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/fb.png' alt='facebook' width='32' height='32' data-max-width='40' data-customIcon='true' ></a>
                                            </div>
                                          </div>
                                        </td>
                                        <td width='10'></td>
                                        <td width='40'>
                                          <div class='contentEditableContainer contentTwitterEditable'>
                                            <div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
                                              <a href='https://twitter.com/team_mss' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/tweet.png' alt='twitter' width='32' height='32' data-max-width='40' data-customIcon='true'></a>
                                            </div>
                                          </div>
                                        </td>
                                        <td width='10'></td>
                                        <td width='40'>
                                          <div class='contentEditableContainer contentImageEditable'>
                                            <div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
                                              <a href='https://plus.google.com/+Team_MSS/posts' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/googleplus.png' alt='Pinterest' width='32' height='32' data-max-width='40'></a>
                                            </div>
                                          </div>
                                        </td>
                                        <td width='10'></td>
                                        <td width='40'>
                                          <div class='contentEditableContainer contentImageEditable'>
                                            <div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
                                              <a href='https://www.linkedin.com/company/miracle-software-systems-inc' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/linkedin.png' alt='Social media' width='32' height='32' data-max-width='40'></a>
                                            </div>
                                          </div>
                                        </td>
                                      </tr>
                                    </table>
                                  </td>
                                  <td width='195'></td>
                                </tr>
                                <tr>
                                  <td colspan='3' height='40'></td>
                                </tr>
                              </table>
                            </td>
                          </tr>
                        </table>
                      </div>
                      <div class='movableContent'>
                        <table width='100%' border='0' cellspacing='0' cellpadding='0' align='center'>
                          <tr>
                            <td style='background:#000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px' height='0'></td>
                          </tr>
                          <tr>
                        </table>
                      </div>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </body>
</html>
				
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
	
	/*Method for verification details inputs approval
	 * Author : Santosh Kola
	 * Date : 09/12/2017
	 */
	function employeeVerificationInputsApproval($currentUserName,$currentUserEmail,$currentUserWorkphone,$candidateName,$dateofRelieving,$remuneration,$reasonforLeaving,$additionalHRComments,$actEmployeeId,$actdepartment,$lastHikeDate,$eligibleforRehire,$skillSet,$dateofJoining,$lastDesignation,$lastHikePercentage,$natureofSeparation,$companyName,$companyLocation,$companyTelNo,$rrefId,$rrandomKey){
		
		$mail	= new PHPMailer; // call the class
		$mail->IsSMTP();
		$mail->Host = SMTP_HOST; //Hostname of the mail server
		$mail->Port = SMTP_PORT; //Port of the SMTP like to be 25, 80, 465 or 587
		$mail->SMTPAuth = true; //Whether to use SMTP authentication
		$mail->SMTPSecure = SMTP_SECURE;
		$mail->Username = SMTP_UNAME; //Username for SMTP authentication any valid email created in your domain
		$mail->Password = SMTP_PWORD; //Password for SMTP authentication
		//$mail->AddReplyTo($email, $fname); //reply-to address
		$mail->SetFrom($currentUserEmail, $currentUserName); //From address of the mail
		// put your while loop here like below,
		$mail->Subject = $candidateName." Profile To Be Approved !!"; //Subject od your mail
		//$mail->AddAddress("skola2@miraclesoft.com", "Santosh Kola"); //To address who will receive this email
		//  echo 'conutry11'.$rlocation;
		//if($rlocation == 'India') {
		//if(strcmp($rlocation,"India")==0) {
		// echo "hii-->".EMPLOYEE_VERIFICATION_INDIA;
		//$mail->AddAddress(EMPLOYEE_VERIFICATION_INDIA, "info"); //To address who will receive this email
		
		$myArray = explode(';', EMPLOYEE_VERIFICATION_APPROVAL);
		for ($i = 0; $i < count($myArray); ++$i) {
			$innerArray = explode(',', $myArray[$i]);
			$mail->AddAddress($innerArray[0], $innerArray[1]);
		}
		
		$mail->AddBCC($currentUserEmail, $currentUserName);
		$mail->AddBCC("vkandregula@miraclesoft.com", "Venkat Ram Prasad Kandregula");
		/*$myArray = explode(';', EMPLOYEE_VERIFICATION_INDIA_CC);
		 for ($i = 0; $i < count($myArray); ++$i) {
		 $innerArray = explode(',', $myArray[$i]);
		 $mail->AddBCC($innerArray[0], $innerArray[1]);
		 }*/
		
		
		
		//}
		//EMPLOYEE_VERIFICATION
		//$mail->MsgHTML("<b>Hi, your first SMTP mail has been received. Great Job!.. <br/><br/>by <a href='http://www.asif18.com/7/php/send-mails-using-smtp-in-php-by-gmail-server-or-own-domain-server/'>Asif18</a></b>"); //Put your body of the message you can place html code here
		$mail->MsgHTML("<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
				<html xmlns='http://www.w3.org/1999/xhtml'>
				<head>
				<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
				<title>Employee Verification</title>
				<style type='text/css'>
				
				
				body {
				padding-top: 0 !important;
				padding-bottom: 0 !important;
				padding-top: 0 !important;
				padding-bottom: 0 !important;
				margin:0 !important;
				width: 100% !important;
				-webkit-text-size-adjust: 100% !important;
				-ms-text-size-adjust: 100% !important;
				-webkit-font-smoothing: antialiased !important;
	}
				.tableContent img {
				border: 0 !important;
				display: block !important;
				outline: none !important;
	}
				a{
				color:#382F2E;
	}
				
				p, h1,h2,ul,ol,li,div{
				margin:0;
				padding:0;
	}
				
				h1,h2{
				font-weight: normal;
				background:transparent !important;
				border:none !important;
	}
				
				.contentEditable h2.big,.contentEditable h1.big{
				font-size: 26px !important;
	}
				
				.contentEditable h2.bigger,.contentEditable h1.bigger{
				font-size: 37px !important;
	}
				
				td,table{
				vertical-align: top;
	}
				td.middle{
				vertical-align: middle;
	}
				
				a.link1{
				font-size:13px;
				color:#27A1E5;
				line-height: 24px;
				text-decoration:none;
	}
				a{
				text-decoration: none;
	}
				
				.link2{
				color:#fc3f3f;
				border-top:0px solid #fc3f3f;
				border-bottom:0px solid #fc3f3f;
				border-left:10px solid #fc3f3f;
				border-right:10px solid #fc3f3f;
				border-radius:1px;
				-moz-border-radius:5px;
				-webkit-border-radius:5px;
				background:#fc3f3f;
	}
				
				.link3{
				color:#555555;
				border:1px solid #cccccc;
				padding:10px 18px;
				border-radius:3px;
				-moz-border-radius:3px;
				-webkit-border-radius:3px;
				background:#ffffff;
	}
				
				.link4{
				color:#27A1E5;
				line-height: 24px;
	}
				
				h2,h1{
				line-height: 20px;
	}
				p{
				font-size: 14px;
				line-height: 21px;
				color:#AAAAAA;
	}
				
				.contentEditable li{
				
	}
				
				.appart p{
				
	}
				.bgItem{
				background:#ffffff;
	}
				.bgBody{
				background: #000000;
	}
				
				img {
				outline:none;
				text-decoration:none;
				-ms-interpolation-mode: bicubic;
				width: auto;
				max-width: 100%;
				clear: both;
				display: block;
				float: none;
	}
				
				
				
				</style>
				
				
				<script type='colorScheme' class='swatch active'>
				{
				'name':'Default',
				'bgBody':'ffffff',
				'link':'27A1E5',
				'color':'AAAAAA',
				'bgItem':'ffffff',
				'title':'444444'
	}
				</script>
				
				
				</head>
				<body paddingwidth='0' paddingheight='0' bgcolor='#d1d3d4'  style='padding-top: 0; padding-bottom: 0; padding-top: 0; padding-bottom: 0; background-repeat: repeat; width: 100% !important; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased;' offset='0' toppadding='0' leftpadding='0'>
				<table width='100%' border='0' cellspacing='0' cellpadding='0' class='tableContent bgBody' align='center'  style='font-family:Helvetica, sans-serif;'>
				
				
				<tr>
				<td align='center'>
				<table width='600' border='0' cellspacing='0' cellpadding='0' align='center' >
				<tr>
				<td class='bgItem' align='center'>
				<table width='600' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td class='movableContentContainer' align='center'>
				<div class='movableContent'>
				<table width='100%' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr><td style='background:#000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px' height='30'></td></tr>
				<tr>
				<td style='background:#000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px'>
				<table width='650' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td width='130'>
				<div class='contentEditableContainer contentImageEditable'>
				<div class='contentEditable'>
				<a href='http://www.miraclesoft.com/index.php' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/logo.png' alt='Logo' width='70' height='45' data-default='placeholder' data-max-width='200'></a>
				
				</div>
				</div>
				</td>
				
				<td valign='middle' style='vertical-align: middle;'>
				</td>
				
				<td valign='middle' style='vertical-align: middle;' width='150'><br>
				<table width='300' border='0' cellpadding='0' cellspacing='0' align='right' style='text-align: right; font-size: 13px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='fullCenter'>
				<tr>
				<td height='55' valign='middle' width='100%' style='font-family: Helvetica, Arial, sans-serif; color:#000000;'>
				<span style='font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;'><a href='http://www.miraclesoft.com' target='_blank' style='text-decoration: none; color:#ffffff;'class='underline' >Company</a></span>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style='font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;'><a href='http://www.miraclesoft.com/careers/careers.php' target='_blank' style='text-decoration: none; color:#ffffff;'class='underline' >Careers</a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</td>
				</tr>
				</table>
				</td>
				</tr>
				</table>
				</td>
				</tr>
				</table>
				</div>
				
				
				<div class='movableContent'>
				<table width='580' border='0' cellspacing='0' cellpadding='0' align='center'>
				
				<tr>
				<td style='border: 5px solid #000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px'>
				<div class='movableContent'>
				<table width='650' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td style='background:#305983; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:px'>
				
				<table width='600' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr><td height='18'></td></tr>
				<tr>
				<td>
				<div class='contentEditableContainer contentTextEditable'>
				<div class='contentEditable' style='text-align: left;'>
				<h2 style='font-size: 22px;'><font color='#FFffff' face='trebuchet ms'><b>Verification inputs by MSS India operation team !!</b></font></h2>
				<br>
				<p style='font-size: 20px;'><font face='calibri'><b></b>
				</p>
				</div>
				</div>
				</td>
				</tr>
				
				</table>
				
				</td>
				</tr>
				
				</table>
				</div>
				<table width='600' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr><td height='10'></td></tr>
				<tr>
				<td>
				<div class='contentEditableContainer contentTextEditable'>
				<div class='contentEditable' style='text-align: center;'>
				
				<br>
				<p style='text-align: justify; font-size: 14px;'><font color='#000000' face='trebuchet ms'><b>Hello Madam,</b><br><br>
				A new profile has been sent for employee verification, can you please look on to the following details to approve it.
				<br><br>
				<p style='text-align: justify; font-size: 14px;'><font color='#000000' face='trebuchet ms'>
				<b>Our Verification Inputs MSS India operation team :</b><br><br>
				
				<table width='100%'>
				
				<tr><td align='left'><font color='#000000' face='trebuchet ms' size='2px'>Candidate's&nbsp;Name&nbsp;:</font></td><td align='left'><b><font color='#000000' face='trebuchet ms' size='2px'> 	$candidateName</font></b></td></tr>
				<tr><td align='left'><font color='#000000' face='trebuchet ms' size='2px'>Employee&nbsp;Id&nbsp;:</font></td><td align='left'><b><font color='#000000' face='trebuchet ms' size='2px'>$actEmployeeId</font></b></td></tr>
				<tr><td align='left'><font color='#000000' face='trebuchet ms' size='2px'>Company&nbsp;Name&nbsp;:</font></td><td align='left'><b><font color='#000000' face='trebuchet ms' size='2px'> 	$companyName</font></b></td></tr>
				<tr><td align='left'><font color='#000000' face='trebuchet ms' size='2px'>Company&nbsp;Location&nbsp;:</font></td><td align='left'><b><font color='#000000' face='trebuchet ms' size='2px'> 	 	$companyLocation</font></b></td></tr>
				<tr><td align='left'><font color='#000000' face='trebuchet ms' size='2px'>Company&nbsp;Tel.&nbsp;No.&nbsp;:</font></td><td align='left'><b><font color='#000000' face='trebuchet ms' size='2px'> 	 	$companyTelNo</font></b></td></tr>
				<tr><td align='left'><font color='#000000' face='trebuchet ms' size='2px'>Date&nbsp;of&nbsp;Joining&nbsp;:</font></td><td align='left'><b><font color='#000000' face='trebuchet ms' size='2px'> 	 	$dateofJoining  </font></b></td></tr>
				<tr><td align='left'><font color='#000000' face='trebuchet ms' size='2px'>Date&nbsp;of&nbsp;Relieving&nbsp;:</font></td><td align='left'><b><font color='#000000' face='trebuchet ms' size='2px'> 	$dateofRelieving </font></b></td></tr>
				<tr><td align='left'><font color='#000000' face='trebuchet ms' size='2px'>Department&nbsp;:</font></td><td align='left'><b><font color='#000000' face='trebuchet ms' size='2px'>$actdepartment</font></b></td></tr>
				<tr><td align='left'><font color='#000000' face='trebuchet ms' size='2px'>Last&nbsp;Designation&nbsp;:</font></td><td align='left'><b><font color='#000000' face='trebuchet ms' size='2px'> 	 	$lastDesignation</font></b></td></tr>
				<tr><td align='left'><font color='#000000' face='trebuchet ms' size='2px'>Remuneration&nbsp;:</font></td><td align='left'><b><font color='#000000' face='trebuchet ms' size='2px'> 	$remuneration  </font></b></td></tr>
				<tr><td align='left'><font color='#000000' face='trebuchet ms' size='2px'>Last&nbsp;Hike&nbsp;Date&nbsp;:</font></td><td align='left'><b><font color='#000000' face='trebuchet ms' size='2px'>$lastHikeDate</font></b></td></tr>
				<tr><td align='left'><font color='#000000' face='trebuchet ms' size='2px'>Last&nbsp;Hike&nbsp;Percentage&nbsp;:</font></td><td align='left'><b><font color='#000000' face='trebuchet ms' size='2px'> 	$lastHikePercentage</font></b></td></tr>
				<tr><td align='left'><font color='#000000' face='trebuchet ms' size='2px'>Reason&nbsp;for&nbsp;Leaving&nbsp;:</font></td><td align='left'><b><font color='#000000' face='trebuchet ms' size='2px'>$reasonforLeaving</font></b></td></tr>
				<tr><td align='left'><font color='#000000' face='trebuchet ms' size='2px'>Eligible&nbsp;for&nbsp;Rehire&nbsp;:</font></td><td align='left'><b><font color='#000000' face='trebuchet ms' size='2px'>$eligibleforRehire </font></b></td></tr>
				<tr><td align='left'><font color='#000000' face='trebuchet ms' size='2px'>Nature&nbsp;of&nbsp;Separation&nbsp;(HR Comments)&nbsp;:</font></td><td align='left'><b><font color='#000000' face='trebuchet ms' size='2px'> 	$natureofSeparation</font></b></td></tr>
				<tr><td align='left'><font color='#000000' face='trebuchet ms' size='2px'>Additional&nbsp;HR&nbsp;Comments&nbsp;:</font></td><td align='left'><b><font color='#000000' face='trebuchet ms' size='2px'>$additionalHRComments</font></b></td></tr>
				<tr><td align='left'><font color='#000000' face='trebuchet ms' size='2px'>Skill&nbsp;Set&nbsp;:</font></td><td align='left'><b><font color='#000000' face='trebuchet ms' size='2px'>$skillSet</font></b></td></tr>
				
				
				
				</table>
				
				
				
				<br>
				</font></p>
				
				<table align='center'>
				<tr>
				<td style='text-align:center;padding: 13px;border-color: rgb(0,165,80);background-color: rgb(0,165,80);border-radius: 6px !important;overflow:hidden;font-family:'Open Sans';font-size: 15px;mso-line-height-rule:exactly;line-height:16px;font-weight:700;text-transform:normal;'>
				<span style='color:#fff'><a href='".DOWNLOAD_URL."/contact/employee-verification-approval.php?refId=$rrefId&randomKey=$rrandomKey' target='_blank' ><b>Approve Details</b></a></span>
				</td>
				</tr>
				</table>
				
				
				<p style='text-align: justify; font-size: 14px;'><font color='#000000' face='trebuchet ms'><b>Thanks & Regards,</b><br>
				<b>$currentUserName,</b><br>
				Miracle Software Systems, Inc.<br>
				45625 Grand River Avenue, Novi, MI(USA)<br>
				<b>Email :</b> $currentUserEmail<br>
				<b>Phone :</b> $currentUserWorkphone</font></p><br>
				
				<tr><td height='10'></td></tr>
				</div>
				</div>
				</td>
				</tr>
				<tr><td height='10'></td></tr>
				
				</table>
				
				
				
				
				</td>
				</tr>
				</table>
				</div>
				
				
				<div class='movableContent'>
				<table width='660' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr>
				<td style='background:#000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px'>
				<table width='655' border='0' cellspacing='0' cellpadding='0' align='center'>
				<tr><td colspan='3' height='20'></td></tr>
				<tr>
				<td width='90'></td>
				<td width='660'align='center' style='text-align: center;'>
				<table width='660' cellpadding='0' cellspacing='0' align='center'>
				<tr>
				<td>
				<div class='contentEditableContainer contentTextEditable'>
				<div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
				<p style='text-align: center; font-size: 14px;'><font color='#ffffff' face='trebuchet ms'>© Copyright ".date('Y')." Miracle Software Systems, Inc.<br>
							  45625 Grand River Avenue<br> Novi, MI - USA</p>
				
                            </div>
                          </div>
                        </td>
                      </tr>
                    </table>
                  </td>
                  <td width='90'></td>
                </tr>
              </table>
			  <table width='650' border='0' cellspacing='0' cellpadding='0' align='center'>
                <tr><td colspan='3' height='20'></td></tr>
                <tr>
                  <td width='195'></td>
                  <td width='190' align='center' style='text-align: center;'>
                    <table width='190' cellpadding='0' cellspacing='0' align='center'>
                      <tr>
                        <td width='40'>
                          <div class='contentEditableContainer contentFacebookEditable'>
                            <div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
                              <a href='https://www.facebook.com/miracle45625' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/fb.png' alt='facebook' width='32' height='32' data-max-width='40' data-customIcon='true' ></a>
                            </div>
                          </div>
                        </td>
                        <td width='10'></td>
                        <td width='40'>
                          <div class='contentEditableContainer contentTwitterEditable'>
                            <div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
                              <a href='https://twitter.com/team_mss' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/tweet.png' alt='twitter' width='32' height='32' data-max-width='40' data-customIcon='true'></a>
                            </div>
                          </div>
                        </td>
                        <td width='10'></td>
                        <td width='40'>
                          <div class='contentEditableContainer contentImageEditable'>
                            <div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
                              <a href='https://plus.google.com/+Team_MSS/posts' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/googleplus.png' alt='Pinterest' width='32' height='32' data-max-width='40'></a>
                            </div>
                          </div>
                        </td>
                        <td width='10'></td>
                        <td width='40'>
                          <div class='contentEditableContainer contentImageEditable'>
                            <div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
                              <a href='https://www.linkedin.com/company/miracle-software-systems-inc' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/linkedin.png' alt='Social media' width='32' height='32' data-max-width='40'></a>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </table>
                  </td>
                  <td width='195'></td>
                </tr>
                <tr><td colspan='3' height='40'></td></tr>
              </table>
				
                  </td>
                </tr>
              </table>
            </div>
			<div class='movableContent'>
              <table width='100%' border='0' cellspacing='0' cellpadding='0' align='center'>
                <tr><td style='background:#000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px' height='0'></td></tr>
                <tr>
				</table>
				</div>
				
				
          </td>
        </tr>
      </table>
      </td>
      </tr>
      </table>
    </td>
  </tr>
</table>
</body>
  </html>		"); //Put your body of the message you can place html code here
		
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
	
	function sendApprovedEmployeeVerificationDeatils($currentUserName,$currentUserEmail,$currentUserWorkphone,$employerEmail,$employerName,$candidateName,$dateofRelieving,$remuneration,$reasonforLeaving,$additionalHRComments,$actEmployeeId,$actdepartment,$lastHikeDate,$eligibleforRehire,$skillSet,$dateofJoining,$lastDesignation,$lastHikePercentage,$natureofSeparation,$companyName,$companyLocation,$companyTelNo,$reqRandomKey){
		
		$mail	= new PHPMailer; // call the class
		$mail->IsSMTP();
		$mail->Host = SMTP_HOST; //Hostname of the mail server
		$mail->Port = SMTP_PORT; //Port of the SMTP like to be 25, 80, 465 or 587
		$mail->SMTPAuth = true; //Whether to use SMTP authentication
		$mail->SMTPSecure = SMTP_SECURE;
		$mail->Username = SMTP_UNAME; //Username for SMTP authentication any valid email created in your domain
		$mail->Password = SMTP_PWORD; //Password for SMTP authentication
		//$mail->AddReplyTo($email, $fname); //reply-to address
		$mail->SetFrom($currentUserEmail, $currentUserName); //From address of the mail
		// put your while loop here like below,
		$mail->Subject = $candidateName." Profile Verification Inputs !!"; //Subject od your mail
		//$mail->AddAddress("skola2@miraclesoft.com", "Santosh Kola"); //To address who will receive this email
		//  echo 'conutry11'.$rlocation;
		//if($rlocation == 'India') {
		//if(strcmp($rlocation,"India")==0) {
		// echo "hii-->".EMPLOYEE_VERIFICATION_INDIA;
			//$mail->AddAddress(EMPLOYEE_VERIFICATION_INDIA, "info"); //To address who will receive this email
			
			//$myArray1 = explode(',', FROM_EMP_APPROVAL_VERIFICATION_INPUTS);
			//$mail->AddAddress($myArray[0], $myArray[1]);
			
			//	$mail->SetFrom($myArray1[0], $myArray1[1]); //From address of the mail
			
			$mail->AddAddress($employerEmail, $employerName);
			$mail->AddBCC($currentUserEmail, $currentUserName);
			$mail->AddBCC("vkandregula@miraclesoft.com", "Venkat Ram Prasad Kandregula");
			/*	$myArray = explode(';', EMPLOYEE_VERIFICATION_INDIA_CC);
			 for ($i = 0; $i < count($myArray); ++$i) {
			 $innerArray = explode(',', $myArray[$i]);
			 $mail->AddBCC($innerArray[0], $innerArray[1]);
			 }
			 
			 */
			
			
			//}
			//EMPLOYEE_VERIFICATION
			//$mail->MsgHTML("<b>Hi, your first SMTP mail has been received. Great Job!.. <br/><br/>by <a href='http://www.asif18.com/7/php/send-mails-using-smtp-in-php-by-gmail-server-or-own-domain-server/'>Asif18</a></b>"); //Put your body of the message you can place html code here
			$mail->MsgHTML("	<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
					<html xmlns='http://www.w3.org/1999/xhtml'>
					<head>
					<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
					<title>Employee Verification</title>
					<style type='text/css'>
					
					
					body {
					padding-top: 0 !important;
					padding-bottom: 0 !important;
					padding-top: 0 !important;
					padding-bottom: 0 !important;
					margin:0 !important;
					width: 100% !important;
					-webkit-text-size-adjust: 100% !important;
					-ms-text-size-adjust: 100% !important;
					-webkit-font-smoothing: antialiased !important;
		}
					.tableContent img {
					border: 0 !important;
					display: block !important;
					outline: none !important;
		}
					a{
					color:#382F2E;
		}
					
					p, h1,h2,ul,ol,li,div{
					margin:0;
					padding:0;
		}
					
					h1,h2{
					font-weight: normal;
					background:transparent !important;
					border:none !important;
		}
					
					.contentEditable h2.big,.contentEditable h1.big{
					font-size: 26px !important;
		}
					
					.contentEditable h2.bigger,.contentEditable h1.bigger{
					font-size: 37px !important;
		}
					
					td,table{
					vertical-align: top;
		}
					td.middle{
					vertical-align: middle;
		}
					
					a.link1{
					font-size:13px;
					color:#27A1E5;
					line-height: 24px;
					text-decoration:none;
		}
					a{
					text-decoration: none;
		}
					
					.link2{
					color:#fc3f3f;
					border-top:0px solid #fc3f3f;
					border-bottom:0px solid #fc3f3f;
					border-left:10px solid #fc3f3f;
					border-right:10px solid #fc3f3f;
					border-radius:1px;
					-moz-border-radius:5px;
					-webkit-border-radius:5px;
					background:#fc3f3f;
		}
					
					.link3{
					color:#555555;
					border:1px solid #cccccc;
					padding:10px 18px;
					border-radius:3px;
					-moz-border-radius:3px;
					-webkit-border-radius:3px;
					background:#ffffff;
		}
					
					.link4{
					color:#27A1E5;
					line-height: 24px;
		}
					
					h2,h1{
					line-height: 20px;
		}
					p{
					font-size: 14px;
					line-height: 21px;
					color:#AAAAAA;
		}
					
					.contentEditable li{
					
		}
					
					.appart p{
					
		}
					.bgItem{
					background:#ffffff;
		}
					.bgBody{
					background: #000000;
		}
					
					img {
					outline:none;
					text-decoration:none;
					-ms-interpolation-mode: bicubic;
					width: auto;
					max-width: 100%;
					clear: both;
					display: block;
					float: none;
		}
					
					
					
					</style>
					
					
					<script type='colorScheme' class='swatch active'>
					{
					'name':'Default',
					'bgBody':'ffffff',
					'link':'27A1E5',
					'color':'AAAAAA',
					'bgItem':'ffffff',
					'title':'444444'
		}
					</script>
					
					
					</head>
					<body paddingwidth='0' paddingheight='0' bgcolor='#d1d3d4'  style='padding-top: 0; padding-bottom: 0; padding-top: 0; padding-bottom: 0; background-repeat: repeat; width: 100% !important; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased;' offset='0' toppadding='0' leftpadding='0'>
					<table width='100%' border='0' cellspacing='0' cellpadding='0' class='tableContent bgBody' align='center'  style='font-family:Helvetica, sans-serif;'>
					
					
					<tr>
					<td align='center'>
					<table width='600' border='0' cellspacing='0' cellpadding='0' align='center' >
					<tr>
					<td class='bgItem' align='center'>
					<table width='600' border='0' cellspacing='0' cellpadding='0' align='center'>
					<tr>
					<td class='movableContentContainer' align='center'>
					<div class='movableContent'>
					<table width='100%' border='0' cellspacing='0' cellpadding='0' align='center'>
					<tr><td style='background:#000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px' height='30'></td></tr>
					<tr>
					<td style='background:#000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px'>
					<table width='650' border='0' cellspacing='0' cellpadding='0' align='center'>
					<tr>
					<td width='130'>
					<div class='contentEditableContainer contentImageEditable'>
					<div class='contentEditable'>
					<a href='http://www.miraclesoft.com/index.php' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/logo.png' alt='Logo' width='70' height='45' data-default='placeholder' data-max-width='200'></a>
					
					</div>
					</div>
					</td>
					
					<td valign='middle' style='vertical-align: middle;'>
					</td>
					
					<td valign='middle' style='vertical-align: middle;' width='150'><br>
					<table width='300' border='0' cellpadding='0' cellspacing='0' align='right' style='text-align: right; font-size: 13px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='fullCenter'>
					<tr>
					<td height='55' valign='middle' width='100%' style='font-family: Helvetica, Arial, sans-serif; color:#000000;'>
					<span style='font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;'><a href='http://www.miraclesoft.com' target='_blank' style='text-decoration: none; color:#ffffff;'class='underline' >Company</a></span>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style='font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;'><a href='http://www.miraclesoft.com/careers/careers.php' target='_blank' style='text-decoration: none; color:#ffffff;'class='underline' >Careers</a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					</td>
					</tr>
					</table>
					</td>
					</tr>
					</table>
					</td>
					</tr>
					</table>
					</div>
					
					
					<div class='movableContent'>
					<table width='580' border='0' cellspacing='0' cellpadding='0' align='center'>
					
					<tr>
					<td style='border: 5px solid #000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px'>
					<div class='movableContent'>
					<table width='650' border='0' cellspacing='0' cellpadding='0' align='center'>
					<tr>
					<td style='background:#305983; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:px'>
					
					<table width='600' border='0' cellspacing='0' cellpadding='0' align='center'>
					<tr><td height='18'></td></tr>
					<tr>
					<td>
					<div class='contentEditableContainer contentTextEditable'>
					<div class='contentEditable' style='text-align: left;'>
					<h2 style='font-size: 22px;'><font color='#FFffff' face='trebuchet ms'><b>Profile Verification Inputs by  Miracle Software Systems (I) Pvt. Ltd.</b></font></h2>
					<br>
					<p style='font-size: 20px;'><font face='calibri'><b></b>
					</p>
					</div>
					</div>
					</td>
					</tr>
					
					</table>
					
					</td>
					</tr>
					
					</table>
					</div>
					<table width='600' border='0' cellspacing='0' cellpadding='0' align='center'>
					<tr><td height='10'></td></tr>
					<tr>
					<td>
					<div class='contentEditableContainer contentTextEditable'>
					<div class='contentEditable' style='text-align: center;'>
					
					<br>
					<p style='text-align: justify; font-size: 14px;'><font color='#000000' face='trebuchet ms'><b>Hello $employerName,</b><br><br>
					Here is the verifed employee profile details.
					<br><br>
					<p style='text-align: justify; font-size: 14px;'><font color='#000000' face='trebuchet ms'>
					<b>Profile Verification Inputs by  Miracle Software Systems (I) Pvt. Ltd. :</b><br><br>
					
					<table width='100%'>
					<tr><td align='left'><font color='#000000' face='trebuchet ms' size='2px'>Verification&nbsp;Code&nbsp;:</font></td><td align='left'><b><font color='#000000' face='trebuchet ms' size='2px'>$reqRandomKey</font></b></td></tr>
					<tr><td align='left'><font color='#000000' face='trebuchet ms' size='2px'>Candidate's&nbsp;Name&nbsp;:</font></td><td align='left'><b><font color='#000000' face='trebuchet ms' size='2px'>$candidateName</font></b></td></tr>
					<tr><td align='left'><font color='#000000' face='trebuchet ms' size='2px'>Employee&nbsp;Id&nbsp;:</font></td><td align='left'><b><font color='#000000' face='trebuchet ms' size='2px'>$actEmployeeId</font></b></td></tr>
					<tr><td align='left'><font color='#000000' face='trebuchet ms' size='2px'>Company&nbsp;Name&nbsp;:</font></td><td align='left'><b><font color='#000000' face='trebuchet ms' size='2px'> 	$companyName</font></b></td></tr>
					<tr><td align='left'><font color='#000000' face='trebuchet ms' size='2px'>Company&nbsp;Location&nbsp;:</font></td><td align='left'><b><font color='#000000' face='trebuchet ms' size='2px'> 	$companyLocation</font></b></td></tr>
					<tr><td align='left'><font color='#000000' face='trebuchet ms' size='2px'>Company&nbsp;Tel.&nbsp;No.&nbsp;:</font></td><td align='left'><b><font color='#000000' face='trebuchet ms' size='2px'> 	$companyTelNo</font></b></td></tr>
					<tr><td align='left'><font color='#000000' face='trebuchet ms' size='2px'>Date&nbsp;of&nbsp;Joining&nbsp;:</font></td><td align='left'><b><font color='#000000' face='trebuchet ms' size='2px'> 	$dateofJoining </font></b></td></tr>
					<tr><td align='left'><font color='#000000' face='trebuchet ms' size='2px'>Date&nbsp;of&nbsp;Relieving&nbsp;:</font></td><td align='left'><b><font color='#000000' face='trebuchet ms' size='2px'>$dateofRelieving </font></b></td></tr>
					<tr><td align='left'><font color='#000000' face='trebuchet ms' size='2px'>Department&nbsp;:</font></td><td align='left'><b><font color='#000000' face='trebuchet ms' size='2px'>$actdepartment</font></b></td></tr>
					<tr><td align='left'><font color='#000000' face='trebuchet ms' size='2px'>Last&nbsp;Designation&nbsp;:</font></td><td align='left'><b><font color='#000000' face='trebuchet ms' size='2px'> 	$lastDesignation</font></b></td></tr>
					<tr><td align='left'><font color='#000000' face='trebuchet ms' size='2px'>Remuneration&nbsp;:</font></td><td align='left'><b><font color='#000000' face='trebuchet ms' size='2px'> 	$remuneration </font></b></td></tr>
					<tr><td align='left'><font color='#000000' face='trebuchet ms' size='2px'>Last&nbsp;Hike&nbsp;Date&nbsp;:</font></td><td align='left'><b><font color='#000000' face='trebuchet ms' size='2px'>$lastHikeDate</font></b></td></tr>
					<tr><td align='left'><font color='#000000' face='trebuchet ms' size='2px'>Last&nbsp;Hike&nbsp;Percentage&nbsp;:</font></td><td align='left'><b><font color='#000000' face='trebuchet ms' size='2px'> 	$lastHikePercentage</font></b></td></tr>
					<tr><td align='left'><font color='#000000' face='trebuchet ms' size='2px'>Reason&nbsp;for&nbsp;Leaving&nbsp;:</font></td><td align='left'><b><font color='#000000' face='trebuchet ms' size='2px'>$reasonforLeaving</font></b></td></tr>
					<tr><td align='left'><font color='#000000' face='trebuchet ms' size='2px'>Eligible&nbsp;for&nbsp;Rehire&nbsp;:</font></td><td align='left'><b><font color='#000000' face='trebuchet ms' size='2px'>$eligibleforRehire </font></b></td></tr>
					<tr><td align='left'><font color='#000000' face='trebuchet ms' size='2px'>Nature&nbsp;of&nbsp;Separation&nbsp;(HR Comments)&nbsp;:</font></td><td align='left'><b><font color='#000000' face='trebuchet ms' size='2px'> 	$natureofSeparation</font></b></td></tr>
					<tr><td align='left'><font color='#000000' face='trebuchet ms' size='2px'>Additional&nbsp;HR&nbsp;Comments&nbsp;:</font></td><td align='left'><b><font color='#000000' face='trebuchet ms' size='2px'>$additionalHRComments</font></b></td></tr>
					<tr><td align='left'><font color='#000000' face='trebuchet ms' size='2px'>Skill&nbsp;Set&nbsp;:</font></td><td align='left'><b><font color='#000000' face='trebuchet ms' size='2px'>$skillSet</font></b></td></tr>
					
					
					
					</table>
					
					
					
					<br>
					</font></p>
					
					<table>
					<tbody>
					<tr>
					<td style='font-size: 15px; font-family: Calibri;' valign='top' align='left'>Regards,<br/><b>Madhavi Lokam</b><br />Vice President</td>
					<td width='80'></td>
					<td align='right'><a href='http://www.miraclesoft.com' target='blank'><img src='http://www.miraclesoft.com/images/newsletters/miracle-logo-dark1.png' alt='logo'' /></a></td>
					</tr>
					<tr>
					<td colspan='04'><hr /></td>
					</tr>
					<tr>
					<td style='font-size: 14px; font-family: Calibri;' valign='top' align='left'>
					
					<b>Phone: </b>(248)-233-1180<br /> <b>Mobile: </b>(248)-679-2660<br /> <b> Email: </b><a href='mailto:mssusr26@miraclesoft.com' target='blank'>mlokam@miraclesoft.com
					
					<table><tr><td><a href='https://www.facebook.com/miracle45625/' target='blank' style='color: #ef4048;'><img src='http://www.miraclesoft.com/images/newsletters/facebook1.png' ></a></td>
					
					<td><a href='https://plus.google.com/+Team_MSS' target='blank' style='color: #ef4048; text-decoration: none;'><img src='http://www.miraclesoft.com/images/newsletters/googleplus1.png' ></a></td>
					
					<td><a href='https://www.linkedin.com/company/miracle-software-systems-inc' target='blank' style='color: #ef4048; text-decoration: none;'><img src='http://www.miraclesoft.com/images/newsletters/Linkedin1.png'></a></td>
					<td><a href='https://www.youtube.com/c/Team_MSS' target='blank' style='color: #ef4048; text-decoration: none;'><img src='http://www.miraclesoft.com/images/newsletters/youtube1.png' ></a></td>
					<td><a href='https://twitter.com/Team_MSS' target='blank' style='color: #ef4048; text-decoration: none;'><img src='http://www.miraclesoft.com/images/newsletters/Twitter1.png' /></a></td>
					</tr></table>
					
					<td width='80'></td>
					<td style='font-size: 14px; font-family: calibri;' valign='top' align='right'>Miracle Software Systems, Inc.<br /> 45625 Grand River Avenue<br /> Novi MI(48374) USA<br /> <a href='http://www.miraclesoft.com' target='blank'>www.miraclesoft.com</a></td>
					</tr>
					</tbody>
					</table>
					
					
					
					<tr><td height='10'></td></tr>
					</div>
					</div>
					</td>
					</tr>
					<tr><td height='10'></td></tr>
					
					</table>
					
					
					
					
					</td>
					</tr>
					</table>
					</div>
					
					
					<div class='movableContent'>
					<table width='660' border='0' cellspacing='0' cellpadding='0' align='center'>
					<tr>
					<td style='background:#000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px'>
					<table width='655' border='0' cellspacing='0' cellpadding='0' align='center'>
					<tr><td colspan='3' height='20'></td></tr>
					<tr>
					<td width='90'></td>
					<td width='660'align='center' style='text-align: center;'>
					<table width='660' cellpadding='0' cellspacing='0' align='center'>
					<tr>
					<td>
					<div class='contentEditableContainer contentTextEditable'>
					<div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
					<p style='text-align: center; font-size: 14px;'><font color='#ffffff' face='trebuchet ms'>© Copyright ".date('Y')." Miracle Software Systems, Inc.<br>
							  45625 Grand River Avenue<br> Novi, MI - USA</p>
					
                            </div>
                          </div>
                        </td>
                      </tr>
                    </table>
                  </td>
                  <td width='90'></td>
                </tr>
              </table>
			  <table width='650' border='0' cellspacing='0' cellpadding='0' align='center'>
                <tr><td colspan='3' height='20'></td></tr>
                <tr>
                  <td width='195'></td>
                  <td width='190' align='center' style='text-align: center;'>
                    <table width='190' cellpadding='0' cellspacing='0' align='center'>
                      <tr>
                        <td width='40'>
                          <div class='contentEditableContainer contentFacebookEditable'>
                            <div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
                              <a href='https://www.facebook.com/miracle45625' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/fb.png' alt='facebook' width='32' height='32' data-max-width='40' data-customIcon='true' ></a>
                            </div>
                          </div>
                        </td>
                        <td width='10'></td>
                        <td width='40'>
                          <div class='contentEditableContainer contentTwitterEditable'>
                            <div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
                              <a href='https://twitter.com/team_mss' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/tweet.png' alt='twitter' width='32' height='32' data-max-width='40' data-customIcon='true'></a>
                            </div>
                          </div>
                        </td>
                        <td width='10'></td>
                        <td width='40'>
                          <div class='contentEditableContainer contentImageEditable'>
                            <div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
                              <a href='https://plus.google.com/+Team_MSS/posts' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/googleplus.png' alt='Pinterest' width='32' height='32' data-max-width='40'></a>
                            </div>
                          </div>
                        </td>
                        <td width='10'></td>
                        <td width='40'>
                          <div class='contentEditableContainer contentImageEditable'>
                            <div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
                              <a href='https://www.linkedin.com/company/miracle-software-systems-inc' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/linkedin.png' alt='Social media' width='32' height='32' data-max-width='40'></a>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </table>
                  </td>
                  <td width='195'></td>
                </tr>
                <tr><td colspan='3' height='40'></td></tr>
              </table>
					
                  </td>
                </tr>
              </table>
            </div>
			<div class='movableContent'>
              <table width='100%' border='0' cellspacing='0' cellpadding='0' align='center'>
                <tr><td style='background:#000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px' height='0'></td></tr>
                <tr>
				</table>
				</div>
					
					
          </td>
        </tr>
      </table>
      </td>
      </tr>
      </table>
    </td>
  </tr>
</table>
</body>
  </html>
					
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
		
		
		
			
/*Employee verification reject email
 * Author : Santosh Kola
 * Date : 10/12/2017
 */			
			
			function sendRejectedEmployeeVerificationDeatils($currentUserName,$currentUserEmail,$currentUserWorkphone,$employerEmail,$employerName,$candidateName,$reqRandomKey,$rejectReason){
				
				$mail	= new PHPMailer; // call the class
				$mail->IsSMTP();
				$mail->Host = SMTP_HOST; //Hostname of the mail server
				$mail->Port = SMTP_PORT; //Port of the SMTP like to be 25, 80, 465 or 587
				$mail->SMTPAuth = true; //Whether to use SMTP authentication
				$mail->SMTPSecure = SMTP_SECURE;
				$mail->Username = SMTP_UNAME; //Username for SMTP authentication any valid email created in your domain
				$mail->Password = SMTP_PWORD; //Password for SMTP authentication
				//$mail->AddReplyTo($email, $fname); //reply-to address
				//$mail->SetFrom($currentUserEmail, $currentUserName); //From address of the mail
				$mail->SetFrom("mlokam@miraclesoft.com", "Madhavi Naga Lokam"); //From address of the mail
				// put your while loop here like below,
				$mail->Subject = $candidateName." Profile Verification Inputs !!"; //Subject od your mail
				//$mail->AddAddress("skola2@miraclesoft.com", "Santosh Kola"); //To address who will receive this email
				//  echo 'conutry11'.$rlocation;
				//if($rlocation == 'India') {
				//if(strcmp($rlocation,"India")==0) {
				// echo "hii-->".EMPLOYEE_VERIFICATION_INDIA;
					//$mail->AddAddress(EMPLOYEE_VERIFICATION_INDIA, "info"); //To address who will receive this email
					
					//$myArray1 = explode(',', FROM_EMP_APPROVAL_VERIFICATION_INPUTS);
					//$mail->AddAddress($myArray[0], $myArray[1]);
					
					//	$mail->SetFrom($myArray1[0], $myArray1[1]); //From address of the mail
					
					$mail->AddAddress($employerEmail, $employerName);
					$mail->AddBCC($currentUserEmail, $currentUserName);
					$mail->AddBCC("vkandregula@miraclesoft.com", "Venkat Ram Prasad Kandregula");
					/*	$myArray = explode(';', EMPLOYEE_VERIFICATION_INDIA_CC);
					 for ($i = 0; $i < count($myArray); ++$i) {
					 $innerArray = explode(',', $myArray[$i]);
					 $mail->AddBCC($innerArray[0], $innerArray[1]);
					 }
					 
					 */
					
					
					//}
					//EMPLOYEE_VERIFICATION
					//$mail->MsgHTML("<b>Hi, your first SMTP mail has been received. Great Job!.. <br/><br/>by <a href='http://www.asif18.com/7/php/send-mails-using-smtp-in-php-by-gmail-server-or-own-domain-server/'>Asif18</a></b>"); //Put your body of the message you can place html code here
					$mail->MsgHTML("<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
						<html xmlns='http://www.w3.org/1999/xhtml'>
						<head>
						<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
						<title>Employee Verification</title>
						<style type='text/css'>
						
						
						body {
						padding-top: 0 !important;
						padding-bottom: 0 !important;
						padding-top: 0 !important;
						padding-bottom: 0 !important;
						margin:0 !important;
						width: 100% !important;
						-webkit-text-size-adjust: 100% !important;
						-ms-text-size-adjust: 100% !important;
						-webkit-font-smoothing: antialiased !important;
			}
						.tableContent img {
						border: 0 !important;
						display: block !important;
						outline: none !important;
			}
						a{
						color:#382F2E;
			}
						
						p, h1,h2,ul,ol,li,div{
						margin:0;
						padding:0;
			}
						
						h1,h2{
						font-weight: normal;
						background:transparent !important;
						border:none !important;
			}
						
						.contentEditable h2.big,.contentEditable h1.big{
						font-size: 26px !important;
			}
						
						.contentEditable h2.bigger,.contentEditable h1.bigger{
						font-size: 37px !important;
			}
						
						td,table{
						vertical-align: top;
			}
						td.middle{
						vertical-align: middle;
			}
						
						a.link1{
						font-size:13px;
						color:#27A1E5;
						line-height: 24px;
						text-decoration:none;
			}
						a{
						text-decoration: none;
			}
						
						.link2{
						color:#fc3f3f;
						border-top:0px solid #fc3f3f;
						border-bottom:0px solid #fc3f3f;
						border-left:10px solid #fc3f3f;
						border-right:10px solid #fc3f3f;
						border-radius:1px;
						-moz-border-radius:5px;
						-webkit-border-radius:5px;
						background:#fc3f3f;
			}
						
						.link3{
						color:#555555;
						border:1px solid #cccccc;
						padding:10px 18px;
						border-radius:3px;
						-moz-border-radius:3px;
						-webkit-border-radius:3px;
						background:#ffffff;
			}
						
						.link4{
						color:#27A1E5;
						line-height: 24px;
			}
						
						h2,h1{
						line-height: 20px;
			}
						p{
						font-size: 14px;
						line-height: 21px;
						color:#AAAAAA;
			}
						
						.contentEditable li{
						
			}
						
						.appart p{
						
			}
						.bgItem{
						background:#ffffff;
			}
						.bgBody{
						background: #000000;
			}
						
						img {
						outline:none;
						text-decoration:none;
						-ms-interpolation-mode: bicubic;
						width: auto;
						max-width: 100%;
						clear: both;
						display: block;
						float: none;
			}
						
						
						
						</style>
						
						
						<script type='colorScheme' class='swatch active'>
						{
						'name':'Default',
						'bgBody':'ffffff',
						'link':'27A1E5',
						'color':'AAAAAA',
						'bgItem':'ffffff',
						'title':'444444'
			}
						</script>
						
						
						</head>
						<body paddingwidth='0' paddingheight='0' bgcolor='#d1d3d4'  style='padding-top: 0; padding-bottom: 0; padding-top: 0; padding-bottom: 0; background-repeat: repeat; width: 100% !important; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased;' offset='0' toppadding='0' leftpadding='0'>
						<table width='100%' border='0' cellspacing='0' cellpadding='0' class='tableContent bgBody' align='center'  style='font-family:Helvetica, sans-serif;'>
						
						
						<tr>
						<td align='center'>
						<table width='600' border='0' cellspacing='0' cellpadding='0' align='center' >
						<tr>
						<td class='bgItem' align='center'>
						<table width='600' border='0' cellspacing='0' cellpadding='0' align='center'>
						<tr>
						<td class='movableContentContainer' align='center'>
						<div class='movableContent'>
						<table width='100%' border='0' cellspacing='0' cellpadding='0' align='center'>
						<tr><td style='background:#000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px' height='30'></td></tr>
						<tr>
						<td style='background:#000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px'>
						<table width='650' border='0' cellspacing='0' cellpadding='0' align='center'>
						<tr>
						<td width='130'>
						<div class='contentEditableContainer contentImageEditable'>
						<div class='contentEditable'>
						<a href='http://www.miraclesoft.com/index.php' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/logo.png' alt='Logo' width='70' height='45' data-default='placeholder' data-max-width='200'></a>
						
						</div>
						</div>
						</td>
						
						<td valign='middle' style='vertical-align: middle;'>
						</td>
						
						<td valign='middle' style='vertical-align: middle;' width='150'><br>
						<table width='300' border='0' cellpadding='0' cellspacing='0' align='right' style='text-align: right; font-size: 13px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;' class='fullCenter'>
						<tr>
						<td height='55' valign='middle' width='100%' style='font-family: Helvetica, Arial, sans-serif; color:#000000;'>
						<span style='font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;'><a href='http://www.miraclesoft.com' target='_blank' style='text-decoration: none; color:#ffffff;'class='underline' >Company</a></span>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style='font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;'><a href='http://www.miraclesoft.com/careers/careers.php' target='_blank' style='text-decoration: none; color:#ffffff;'class='underline' >Careers</a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						</td>
						</tr>
						</table>
						</td>
						</tr>
						</table>
						</td>
						</tr>
						</table>
						</div>
						
						
						<div class='movableContent'>
						<table width='580' border='0' cellspacing='0' cellpadding='0' align='center'>
						
						<tr>
						<td style='border: 5px solid #000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px'>
						<div class='movableContent'>
						<table width='650' border='0' cellspacing='0' cellpadding='0' align='center'>
						<tr>
						<td style='background:#305983; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:px'>
						
						<table width='600' border='0' cellspacing='0' cellpadding='0' align='center'>
						<tr><td height='18'></td></tr>
						<tr>
						<td>
						<div class='contentEditableContainer contentTextEditable'>
						<div class='contentEditable' style='text-align: left;'>
						<h2 style='font-size: 22px;'><font color='#FFffff' face='trebuchet ms'><b>Profile Verification Inputs by  Miracle Software Systems (I) Pvt. Ltd.</b></font></h2>
						<br>
						<p style='font-size: 20px;'><font face='calibri'><b></b>
						</p>
						</div>
						</div>
						</td>
						</tr>
						
						</table>
						
						</td>
						</tr>
						
						</table>
						</div>
						<table width='600' border='0' cellspacing='0' cellpadding='0' align='center'>
						<tr><td height='10'></td></tr>
						<tr>
						<td>
						<div class='contentEditableContainer contentTextEditable'>
						<div class='contentEditable' style='text-align: center;'>
						
						<br>
						<p style='text-align: justify; font-size: 14px;'><font color='#000000' face='trebuchet ms'><b>Hello $employerName,</b><br><br>
						Here is the verifed employee profile details.
						<br><br>
						<p style='text-align: justify; font-size: 14px;'><font color='#000000' face='trebuchet ms'>
						<b>Profile Verification Inputs by  Miracle Software Systems (I) Pvt. Ltd. :</b><br><br>
						
						<table width='100%'>
						<tr><td align='left'><font color='#000000' face='trebuchet ms' size='2px'>Verification&nbsp;Id&nbsp;:</font></td><td align='left'><b><font color='#000000' face='trebuchet ms' size='2px'>$reqRandomKey</font></b></td></tr>
						<tr><td align='left'><font color='#000000' face='trebuchet ms' size='2px'>Candidate's&nbsp;Name&nbsp;:</font></td><td align='left'><b><font color='#000000' face='trebuchet ms' size='2px'>$candidateName</font></b></td></tr>
							<tr><td align='left'><font color='#000000' face='trebuchet ms' size='2px'>Rejected&nbsp;Reason&nbsp;:</font></td><td align='left'><b><font color='#000000' face='trebuchet ms' size='2px'>$rejectReason</font></b></td></tr>
						
						
						
						</table>
						
						
						
						<br>
						</font></p>
						
						<table>
						<tbody>
						<tr>
						<td style='font-size: 15px; font-family: Calibri;' valign='top' align='left'>Regards,<br/><b>Madhavi Lokam</b><br />Vice President</td>
						<td width='80'></td>
						<td align='right'><a href='http://www.miraclesoft.com' target='blank'><img src='http://www.miraclesoft.com/images/newsletters/miracle-logo-dark1.png' alt='logo'' /></a></td>
						</tr>
						<tr>
						<td colspan='04'><hr /></td>
						</tr>
						<tr>
						<td style='font-size: 14px; font-family: Calibri;' valign='top' align='left'>
						
						<b>Phone: </b>(248)-233-1180<br /> <b>Mobile: </b>(248)-679-2660<br /> <b> Email: </b><a href='mailto:mssusr26@miraclesoft.com' target='blank'>mlokam@miraclesoft.com
						
						<table><tr><td><a href='https://www.facebook.com/miracle45625/' target='blank' style='color: #ef4048;'><img src='http://www.miraclesoft.com/images/newsletters/facebook1.png' ></a></td>
						
						<td><a href='https://plus.google.com/+Team_MSS' target='blank' style='color: #ef4048; text-decoration: none;'><img src='http://www.miraclesoft.com/images/newsletters/googleplus1.png' ></a></td>
						
						<td><a href='https://www.linkedin.com/company/miracle-software-systems-inc' target='blank' style='color: #ef4048; text-decoration: none;'><img src='http://www.miraclesoft.com/images/newsletters/Linkedin1.png'></a></td>
						<td><a href='https://www.youtube.com/c/Team_MSS' target='blank' style='color: #ef4048; text-decoration: none;'><img src='http://www.miraclesoft.com/images/newsletters/youtube1.png' ></a></td>
						<td><a href='https://twitter.com/Team_MSS' target='blank' style='color: #ef4048; text-decoration: none;'><img src='http://www.miraclesoft.com/images/newsletters/Twitter1.png' /></a></td>
						</tr></table>
						
						<td width='80'></td>
						<td style='font-size: 14px; font-family: calibri;' valign='top' align='right'>Miracle Software Systems, Inc.<br /> 45625 Grand River Avenue<br /> Novi MI(48374) USA<br /> <a href='http://www.miraclesoft.com' target='blank'>www.miraclesoft.com</a></td>
						</tr>
						</tbody>
						</table>
						
						
						
						<tr><td height='10'></td></tr>
						</div>
						</div>
						</td>
						</tr>
						<tr><td height='10'></td></tr>
						
						</table>
						
						
						
						
						</td>
						</tr>
						</table>
						</div>
						
						
						<div class='movableContent'>
						<table width='660' border='0' cellspacing='0' cellpadding='0' align='center'>
						<tr>
						<td style='background:#000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px'>
						<table width='655' border='0' cellspacing='0' cellpadding='0' align='center'>
						<tr><td colspan='3' height='20'></td></tr>
						<tr>
						<td width='90'></td>
						<td width='660'align='center' style='text-align: center;'>
						<table width='660' cellpadding='0' cellspacing='0' align='center'>
						<tr>
						<td>
						<div class='contentEditableContainer contentTextEditable'>
						<div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
						<p style='text-align: center; font-size: 14px;'><font color='#ffffff' face='trebuchet ms'>� Copyright ".date('Y')." Miracle Software Systems, Inc.<br>
							  45625 Grand River Avenue<br> Novi, MI - USA</p>
						
                            </div>
                          </div>
                        </td>
                      </tr>
                    </table>
                  </td>
                  <td width='90'></td>
                </tr>
              </table>
			  <table width='650' border='0' cellspacing='0' cellpadding='0' align='center'>
                <tr><td colspan='3' height='20'></td></tr>
                <tr>
                  <td width='195'></td>
                  <td width='190' align='center' style='text-align: center;'>
                    <table width='190' cellpadding='0' cellspacing='0' align='center'>
                      <tr>
                        <td width='40'>
                          <div class='contentEditableContainer contentFacebookEditable'>
                            <div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
                              <a href='https://www.facebook.com/miracle45625' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/fb.png' alt='facebook' width='32' height='32' data-max-width='40' data-customIcon='true' ></a>
                            </div>
                          </div>
                        </td>
                        <td width='10'></td>
                        <td width='40'>
                          <div class='contentEditableContainer contentTwitterEditable'>
                            <div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
                              <a href='https://twitter.com/team_mss' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/tweet.png' alt='twitter' width='32' height='32' data-max-width='40' data-customIcon='true'></a>
                            </div>
                          </div>
                        </td>
                        <td width='10'></td>
                        <td width='40'>
                          <div class='contentEditableContainer contentImageEditable'>
                            <div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
                              <a href='https://plus.google.com/+Team_MSS/posts' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/googleplus.png' alt='Pinterest' width='32' height='32' data-max-width='40'></a>
                            </div>
                          </div>
                        </td>
                        <td width='10'></td>
                        <td width='40'>
                          <div class='contentEditableContainer contentImageEditable'>
                            <div class='contentEditable' style='text-align: center;color:#AAAAAA;'>
                              <a href='https://www.linkedin.com/company/miracle-software-systems-inc' target='_blank'><img src='http://www.miraclesoft.com/newsletters/others/invite_interconnect_2015/images/linkedin.png' alt='Social media' width='32' height='32' data-max-width='40'></a>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </table>
                  </td>
                  <td width='195'></td>
                </tr>
                <tr><td colspan='3' height='40'></td></tr>
              </table>
						
                  </td>
                </tr>
              </table>
            </div>
			<div class='movableContent'>
              <table width='100%' border='0' cellspacing='0' cellpadding='0' align='center'>
                <tr><td style='background:#000000; border-radius:0px;-moz-border-radius:0px;-webkit-border-radius:0px' height='0'></td></tr>
                <tr>
				</table>
				</div>
						
						
          </td>
        </tr>
      </table>
      </td>
      </tr>
      </table>
    </td>
  </tr>
</table>
</body>
  </html>
							
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
			
			
			
		}
		?>
