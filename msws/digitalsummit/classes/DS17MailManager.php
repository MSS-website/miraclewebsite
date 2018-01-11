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
class DS17MailManager {
	function sendPartnerShipAcknowledge($partnerName, $email) {
		$mail = new PHPMailer (); // call the class
		$mail->IsSMTP ();
		$mail->Host = SMTP_HOST; // Hostname of the mail server
		$mail->Port = SMTP_PORT; // Port of the SMTP like to be 25, 80, 465 or 587
		$mail->SMTPAuth = true; // Whether to use SMTP authentication
		$mail->SMTPSecure = SMTP_SECURE;
		$mail->Username = SMTP_UNAME; // Username for SMTP authentication any valid email created in your domain
		$mail->Password = SMTP_PWORD; // Password for SMTP authentication
		                              // $mail->AddReplyTo($email, $fname); //reply-to address
		$mail->SetFrom ( "hubbleapp@miraclesoft.com", "Digital Summit 2k17" ); // From address of the mail
		                                                                    // put your while loop here like below,
		$mail->Subject = "Thank You!!"; // Subject od your mail
		                                // $mail->AddAddress("skola2@miraclesoft.com", "Santosh Kola"); //To address who will receive this email
		$mail->AddAddress ( $email, $partnerName ); // To address who will receive this email
		                                         // $mail->MsgHTML("<b>Hi, your first SMTP mail has been received. Great Job!.. <br/><br/>by <a href='http://www.asif18.com/7/php/send-mails-using-smtp-in-php-by-gmail-server-or-own-domain-server/'>Asif18</a></b>"); //Put your body of the message you can place html code here
		$mail->MsgHTML ( "<html xmlns='http://www.w3.org/1999/xhtml'><head>
 <link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans'>
					
				<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0'><meta http-equiv='Content-Type' content='text/html; charset=UTF-8'><meta http-equiv='X-UA-Compatible' content='IE=edge'><title>Digital Summit 2017</title><style>

        .ReadMsgBody { width: 100%; background-color: #D2D7D3; }
        .ExternalClass { width: 100%; background-color: #D2D7D3; }
		.a { text-decoration:none; }
        body { width: 100%; background-color: #d8eaf8; margin: 0; padding: 0; -webkit-font-smoothing: ; font-family:OpenSans ,Arial, Helvetica Neue, Helvetica, sans-serif }
        @-ms-viewport{ width: device-width; }

@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 400;
  src: url('Fonts/Montserrat-Regular.ttf') format('truetype'), url('https://fonts.gstatic.com/s/montserrat/v6/zhcz-_WihjSQC0oHJ9TCYPk_vArhqVIZ0nv9q090hN8.woff2') format('woff2');
}
@font-face {
  font-family: 'Montserrat';
  font-style: Bold;
  font-weight: 700;
  src: url('Fonts/Montserrat-Bold.ttf') format('truetype'), url('https://fonts.gstatic.com/s/montserrat/v6/IQHow_FEYlDC4Gzy_m8fcoWiMMZ7xLd792ULpGE4W_Y.woff2') format('woff2');
}
@font-face {
  font-family: 'OpenSans';
  font-style: normal;
  font-weight: 400;
  src: url('Fonts/OpenSans-Regular.ttf') format('truetype'), url('https://fonts.gstatic.com/s/opensans/v13/cJZKeOuBrn4kERxqtaUH3VtXRa8TVwTICgirnJhmVJw.woff2') format('woff2');
}
@font-face {
  font-family: 'OpenSans';
  font-style: normal;
  font-weight: 600;
  src: url('Fonts/OpenSans-Semibold.ttf') format('truetype'), url('https://fonts.gstatic.com/s/opensans/v13/MTP_ySUJH_bn48VBG8sNSugdm0LZdjqr5-oayXSOefg.woff2') format('woff2');
}

@font-face {
  font-family: 'OpenSans';
  font-style: extraBold;
  font-weight: 900;
  src: url('Fonts/OpenSans-ExtraBold.ttf') format('truetype'), url('https://fonts.gstatic.com/s/opensans/v13/EInbV5DfGHOiMmvb1Xr-hugdm0LZdjqr5-oayXSOefg.woff2') format('woff2');
}
        @media only screen and (max-width: 639px){
        .wrapper{ width:100%;  padding: 0 !important; }
        }

        @media only screen and (max-width: 480px){
        .centerClass{ margin:0 auto !important; }
        .imgClass{ width:100% !important; height:auto; }
		.img{ text-align:center}
		.hide{ display:none;}
        .wrapper{ width:100%; padding: 0 !important; }
        .header{ width:100%; padding: 0 !important; background-image: url(http://placehold.it/320x400) !important; }
        .container{ width:300px;  padding: 0 !important; }
		.box{ width:250px;  padding: 0 !important; }
        .mobile{ width:300px; display:block; padding: 0 !important; text-align:center !important;}
        .mobile50{ width:300px; padding: 0 !important; text-align:center; }
        *[class='mobileOff'] { width: 0px !important; display: none !important; }
        *[class*='mobileOn'] { display: block !important; max-height:none !important; }
        }

    .MsoNormal {font-family:Montserrat, OpenSans ,Arial, Helvetica Neue, Helvetica, sans-serif !important;}
    </style>

					
				</head><body marginwidth='0' marginheight='0' style='margin-top: 0; margin-bottom: 0; padding-top: 0; padding-bottom: 0; width: 100%; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;' offset='0' topmargin='0' leftmargin='0'><table width='100%' data-module='Notif1' align='center' cellpadding='0' cellspacing='0' border='0' class='wrapper' bgcolor='#ececec' data-bgcolor='MainBG_Color5'>
                    
                      <tbody><tr>
                        <td height='50' style='font-family: OpenSans, Arial, sans-serif; font-size:10px; line-height:10px;'></td>
                      </tr>
                </tbody></table><table width='100%' data-module='Notif2' align='center' cellpadding='0' cellspacing='0' border='0' class='wrapper' bgcolor='#ececec' data-bgcolor='MainBG_Color5'>
                    
                      <tbody><tr>
                        <td align='center'>

                            <!-- Start Container -->
                            <table width='600' border='0' align='center' cellpadding='0' cellspacing='0' bgcolor='#ffffff' style='border-radius:25px' class='container'>
                                 
                                   <tbody><tr>
                                     <td style=' border-top-left-radius:4px; border-top-right-radius:4px; font-size: 35px; line-height: 30px; color: #ffffff; font-weight: 700;' bgcolor='#42729B' align='center'></td>
                                   </tr>
                                   <tr>
                                     <td align='center' class='mobile' style='font-size:12px; line-height:24px;'><table width='100%' border='0' cellspacing='0' cellpadding='0' bgcolor='#232527' data-bgcolor='BlueBoxBG_Color' style='border-top-left-radius:4px; border-top-right-radius:4px'>
                                       <tbody><tr>
                                         <td height='20'></td>
                                       </tr>
                                         <tr>
                                           <td height='20' align='center'><img mc:edit='' editable='' src='https://newsletters-2017-sivanmyc.c9users.io/October/Internal/Campaigns/ds17logo-black.png' width='170' height='auto'></td>
                                         </tr>
                                         <tr>
                                         <td height='20'></td>
                                       </tr>
                                       <tr>
                                         <td align='center' style='font-size:34px; line-height:40px; color: #ffffff; font-weight:400' data-color='H1wht Color' data-size='H1wht size' data-min='18' data-max='50' mc:edit=''></td>
                                       </tr>
                                       <tr>
                                         
                                       </tr>
                                     </tbody></table></td>
                                   </tr>
                             </tbody></table>
                            <!-- End Container -->

                        </td>
                    </tr>
                </tbody></table><table width='100%' data-module='Notif3' align='center' cellpadding='0' cellspacing='0' border='0' class='wrapper' bgcolor='#ececec' data-bgcolor='MainBG_Color5'>
                    
                      <tbody><tr>
                        <td align='center'>

                            <!-- Start Container -->
                            <table width='100%' data-module='Notif3' align='center' cellpadding='0' cellspacing='0' border='0' class='wrapper' bgcolor='#ececec' data-bgcolor='MainBG_Color5'>
                    
                      <tbody><tr>
                        <td align='center'>

                            <!-- Start Container -->
                          <table width='600' border='0' align='center' cellpadding='0' cellspacing='0' bgcolor='#ffffff' class='container' style='border-bottom:1px #ececec solid'>
                                 
                                   <tbody><tr>
                                     <td align='center' bgcolor='#42729B' style='font-size: 35px; line-height: 30px; color: #ffffff; font-weight: 700;'></td>
                                   </tr>
                                   <tr>
                                     <td height='30'></td>
                                   </tr>
                                   <tr>
                                              <td width='330' align='center' style='font-family: Open Sans; font-size: 25px; line-height:38px; color: #2368a0; font-weight:400;' data-color='H1 Color' data-size='H1 Size' data-min='12' data-max='40' mc:edit=''><multiline label='content'><b> Thank You for Your Interest in <br>Partnering With DS '17! </b></multiline></td>
                                          </tr>
                                   <tr>
                                     <td align='center' height='30' class='mobile'></td>
                                   </tr>
                             
                          </tbody></table>
                            <!-- End Container -->

                        </td>
                    </tr>
                </tbody></table><table width='600' cellspacing='0' cellpadding='0' bgcolor='#ffffff' data-bgcolor='Box9BGcolor' style='border-radius:4px' class='container'>
  
  <tbody><tr>
    <td><table width='100%' border='0' align='center' cellpadding='0' cellspacing='0' class='container'>
      
        <tbody><tr>
          <td height='20' align='center' valign='middle' class='mobile'></td>
        </tr>
        <tr>
      <td height='20' align='center' valign='middle' class='mobile' style='font-size:12px; line-height:18px;'>
        <!-- Start Content -->
        <table class='container' cellspacing='0' cellpadding='0' align='justify' border='0' width='500'>
          
            <tbody>
            
            <tr>
              <td align='justify' class='padding-copy' style='padding: 5px 0 5px 0; font-size: 14px; line-height: 30px; font-family: Open Sans; color: #232527;'><b>Hello $partnerName,</b>
<br> Thank you for showing your interest in collaborating with us. One of our team members will reach you out shortly. And we will be more than happy to have your presence at the event.
 </td>
              </tr>
            <tr>
              
              </tr><tr></tr>
            <tr><td><table width='100%' cellspacing='0' cellpadding='0' border='0'><tbody><tr>
              
              </tr><tr></tr></tbody></table></td></tr>
            <tr>
              
            </tr>
            
            
            <tr>
              
              </tr>
            
          </tbody></table>
        <!-- End Content -->
      </td>
        </tr>
        <tr>
          
        </tr>
        
    </tbody></table></td>
  </tr>
  </tbody></table><table width='600' cellspacing='0' cellpadding='0' bgcolor='#ffffff' data-bgcolor='Box9BGcolor' style='border-radius:0px' class='container'>
  
  <tbody><tr>
    <td><table width='500' border='0' align='center' cellpadding='0' cellspacing='0' class='container'>
      
        <tbody><tr>
          
        </tr><tr><td align='justify' class='padding-copy' style='padding: 5px 0 5px 0; border-bottom: 1px dashed #2368a0; font-size: 14px; line-height: 25px; font-family: Open Sans; color: #232527;'></td></tr>
        <tr>
      <td height='20' align='center' valign='middle' class='mobile' style='font-size:12px; line-height:18px;'>
        <!-- Start Content -->
        <table class='container' cellspacing='0' cellpadding='0' align='justify' border='0' width='500'>
          
            <tbody>
            
            <tr><td style='padding: 5px 0 5px 0; font-size: 14px; line-height: 30px; font-family: Open Sans; color: #8c8c8c; font-style: normal;text-decoration:none;' class='padding-copy' align='left'>Thanks &amp; Regards,<br><b>Digital Summit 2017,</b><br><b> Miracle Software Systems, Inc. </b><br>
  <b>Email :</b> <a href='mailto: apcloud@miraclesoft.com' style='font-size: 14px;color:#252327;text-decoration:none; font-family: Open Sans; color: #8c8c8c; font-style: normal'>apcloud@miraclesoft.com</a> <br><b>Phone :</b> +91-891-6623556<br>
							 
							  </td></tr>
            <tr>
              
              </tr><tr></tr>
            <tr><td><table width='100%' cellspacing='0' cellpadding='0' border='0'><tbody><tr>
              
              </tr><tr></tr></tbody></table></td></tr>
            <tr>
              
            </tr>
            
            
            <tr>
              
              </tr>
            
          </tbody></table>
        <!-- End Content -->
      </td>
        </tr>
        <tr>
          
        </tr>
        
    </tbody></table></td>
  </tr>
  </tbody></table>

                          
                          
                            <!-- End Container -->

                        </td>
                    </tr>
                </tbody></table><table width='100%' data-module='Notif4' align='center' cellpadding='0' cellspacing='0' border='0' class='wrapper' bgcolor='#ececec' data-bgcolor='MainBG_Color5'>
                    
                      <tbody><tr>
                        <td align='center'>

                            <!-- Start Container -->
                          <table width='600' border='0' align='center' cellpadding='0' cellspacing='0' bgcolor='#ffffff' style='border-radius:25px' class='container'>
                                 
                                   <tbody><tr>
                                     <td align='center' bgcolor='#42729B' style=' border-top-left-radius:4px; border-top-right-radius:4px; font-size: 35px; line-height: 30px; color: #ffffff; font-weight: 700;'></td>
                                   </tr>
                                   <tr>
                                     <td align='center' class='mobile'><table class='container' style='border-bottom-left-radius:4px; border-bottom-right-radius:4px' data-bgcolor='FootBoxBG_Color' bgcolor='#232527' border='0' cellspacing='0' cellpadding='0' width='100%'>
                                <tbody><tr><td align='center' height='30' class='mobile'></td>
                                </tr><tr>
                                                                           <td width='600' align='center' style='font-size:0!important'>
                                                                              <div style='width:100%;display:inline-block;vertical-align:top;font-size:normal;max-width:50px'>
                                                                                 <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                    <tbody>
                                                                                       <tr>
                                                                                          <td style='padding:0 10px' align='center'>
                                                                                             <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                                <tbody>
                                                                                                   <tr>
                                                                                                      <td style='height:10px;line-height:10px' height='10'></td>
                                                                                                   </tr>
                                                                                                   <tr>
                                                                                                      <td style='line-height:0!important' align='center'>
                                                                                                         <a style='text-decoration:none;display:inline-block' href='https://www.facebook.com/DigitalSummit16/' target='blank'>
                                                                                                         <img src='http://www.miraclesoft.com/images/newsletters/2016/September/facebook-1.png' alt='socials1' width='30'>
                                                                                                         </a>
                                                                                                      </td>
                                                                                                   </tr>
                                                                                                </tbody>
                                                                                             </table>
                                                                                          </td>
                                                                                       </tr>
                                                                                    </tbody>
                                                                                 </table>
                                                                              </div>
                                                                              <div style='width:100%;display:inline-block;vertical-align:top;font-size:normal;max-width:50px'>
                                                                                 <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                    <tbody>
                                                                                       <tr>
                                                                                          <td style='padding:0 10px' align='center'>
                                                                                             <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                                <tbody>
                                                                                                   <tr>
                                                                                                      <td style='height:10px;line-height:10px' height='10'></td>
                                                                                                   </tr>
                                                                                                   <tr>
                                                                                                      <td style='line-height:0!important' align='center'>
                                                                                                         <a style='text-decoration:none;display:inline-block' href='https://plus.google.com/104381127288956493644' target='blank'>
                                                                                                         <img src='http://www.miraclesoft.com/images/newsletters/2016/September/google-plus-2.png' alt='socials1' width='30'>
                                                                                                         </a>
                                                                                                      </td>
                                                                                                   </tr>
                                                                                                </tbody>
                                                                                             </table>
                                                                                          </td>
                                                                                       </tr>
                                                                                    </tbody>
                                                                                 </table>
                                                                              </div>
                                                                              <div style='width:100%;display:inline-block;vertical-align:top;font-size:normal;max-width:50px'>
                                                                                 <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                    <tbody>
                                                                                       <tr>
                                                                                          <td style='padding:0 10px' align='center'>
                                                                                             <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                                <tbody>
                                                                                                   <tr>
                                                                                                      <td style='height:10px;line-height:10px' height='10'></td>
                                                                                                   </tr>
                                                                                                   <tr>
                                                                                                      <td style='line-height:0!important' align='center'>
                                                                                                         <a style='text-decoration:none;display:inline-block' href='https://www.linkedin.com/groups/10313125' target='blank'>
                                                                                                         <img src='http://www.miraclesoft.com/images/newsletters/2016/September/linkedin-2.png' alt='socials1' width='30'>
                                                                                                         </a>
                                                                                                      </td>
                                                                                                   </tr>
                                                                                                </tbody>
                                                                                             </table>
                                                                                          </td>
                                                                                       </tr>
                                                                                    </tbody>
                                                                                 </table>
                                                                              </div>
                                                                              <div style='width:100%;display:inline-block;vertical-align:top;font-size:normal;max-width:50px'>
                                                                                 <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                    <tbody>
                                                                                       <tr>
                                                                                          <td style='padding:0 10px' align='center'>
                                                                                             <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                                <tbody>
                                                                                                   <tr>
                                                                                                      <td style='height:10px;line-height:10px' height='10'></td>
                                                                                                   </tr>
                                                                                                   <tr>
                                                                                                      <td style='line-height:0!important' align='center'>
                                                                                                         <a style='text-decoration:none;display:inline-block' href='https://www.flickr.com/people/digitalsummit/' target='blank'>
                                                                                                         <img src='http://www.miraclesoft.com/images/newsletters/2016/September/flickr-1.png' alt='socials1' width='30'>
                                                                                                         </a>
                                                                                                      </td>
                                                                                                   </tr>
                                                                                                </tbody>
                                                                                             </table>
                                                                                          </td>
                                                                                       </tr>
                                                                                    </tbody>
                                                                                 </table>
                                                                              </div>
                                                                              <div style='width:100%;display:inline-block;vertical-align:top;font-size:normal;max-width:50px'>
                                                                                 <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                    <tbody>
                                                                                       <tr>
                                                                                          <td style='padding:0 10px' align='center'>
                                                                                             <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                                <tbody>
                                                                                                   <tr>
                                                                                                      <td style='height:10px;line-height:10px' height='10'></td>
                                                                                                   </tr>
                                                                                                   <tr>
                                                                                                      <td style='line-height:0!important' align='center'>
                                                                                                         <a style='text-decoration:none;display:inline-block' href='https://twitter.com/andhracloud' target='blank'>
                                                                                                         <img src='http://www.miraclesoft.com/images/newsletters/2016/September/twitter-2.png' alt='socials2' width='30'>
                                                                                                         </a>
                                                                                                      </td>
                                                                                                   </tr>
                                                                                                </tbody>
                                                                                             </table>
                                                                                          </td>
                                                                                       </tr>
                                                                                    </tbody>
                                                                                 </table>
                                                                              </div>
                                                                              <div style='width:100%;display:inline-block;vertical-align:top;font-size:normal;max-width:50px'>
                                                                                 <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                    <tbody>
                                                                                       <tr>
                                                                                          <td style='padding:0 10px' align='center'>
                                                                                             <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                                <tbody>
                                                                                                   <tr>
                                                                                                      <td style='height:10px;line-height:10px' height='10'></td>
                                                                                                   </tr>
                                                                                                   <tr>
                                                                                                      <td style='line-height:0!important' align='center'>
                                                                                                         <a style='text-decoration:none;display:inline-block' href='https://www.youtube.com/c/DigitalSummitVizag' target='blank'>
                                                                                                         <img src='http://www.miraclesoft.com/images/newsletters/2016/September/youtube-3.png' alt='socials3' width='30'>
                                                                                                         </a>
                                                                                                      </td>
                                                                                                   </tr>
                                                                                                </tbody>
                                                                                             </table>
                                                                                          </td>
                                                                                       </tr>
                                                                                    </tbody>
                                                                                 </table>
                                                                              </div>
                                                                           </td>
                                                                        </tr>
                                    <tr><td align='center' height='30' class='mobile'></td>
                                </tr>
                            </tbody></table></td>
                                   </tr>
                             </tbody></table>
                            <!-- End Container -->

                        </td>
                    </tr>
                </tbody></table><table width='100%' data-module='Notif5' align='center' cellpadding='0' cellspacing='0' border='0' class='wrapper' bgcolor='#ECECEC' data-bgcolor='MainBG_Color22'>
                    
                      <tbody><tr>
                        <td height='40'></td>
                      </tr>
                      <tr>
                        <td align='center'>

                            <!-- Start Container -->
                            <table width='600' cellpadding='0' cellspacing='0' border='0' class='container'>
                                
                                  <tbody><tr>
                                    <td align='center' class='mobile' style='font-family: OpenSans, Arial, sans-serif; font-size:12px; line-height:24px;'>
                                        <!-- Start Content -->
                                        <table width='90%' border='0' align='center' cellpadding='0' cellspacing='0' class='container'>
                                          
                                            <tbody><tr>
                                            <td style='font-size: 15px; line-height: 20px; font-family: Open Sans; color:#666666;' align='center'>© 2017 | Miracle Software Systems, Inc.<br></td>
                                          </tr>
                                        </tbody></table>                                        <!-- End Container -->
                                    </td>
                                  </tr>
                            </tbody></table>
                            
                            <!-- End Container -->

                        </td>
                    </tr>
                    
                    <tr>
                        <td height='40'> </td><!-- Spacer -->
                    </tr>
                </tbody></table><div id='edit_link' class='hidden' style='display: none;'>

						<!-- Close Link -->
						<div class='close_link'></div>

						<!-- Edit Link Value -->
						<input type='text' id='edit_link_value' class='createlink' placeholder='Your URL'>

						<!-- Change Image Wrapper-->
						<div id='change_image_wrapper'>

							<!-- Change Image Tooltip -->
							<div id='change_image'>

								<!-- Change Image Button -->
								<p id='change_image_button'>Change &nbsp; <span class='pixel_result'></span></p>

							</div>

							<!-- Change Image Link Button -->
							<input type='button' value='' id='change_image_link'>

							<!-- Remove Image -->
							<input type='button' value='' id='remove_image'>

						</div>

						<!-- Tooltip Bottom Arrow-->
						<div id='tip'></div>

					</div></body></html>			
" ); // Put your body of the message you can place html code here
		    
		// $mail->AddAttachment("images/asif18-logo.png"); //Attach a file here if any or comment this line,
		$send = $mail->Send (); // Send the mails
		if ($send) {
			// echo '<center><h3 style="color:#009933;">Mail sent successfully</h3></center>';
			
			return "Mail sent successfully";
		} else {
			// echo '<center><h3 style="color:#FF3300;">Mail error: </h3></center>'.$mail->ErrorInfo;
			throw new Exception ( $mail->ErrorInfo );
		}
	}
	
	// for contact acknoledge ds summit
	function sendDs17ContactAcknowledge($contactName, $email) {
		$mail = new PHPMailer (); // call the class
		$mail->IsSMTP ();
		$mail->Host = SMTP_HOST; // Hostname of the mail server
		$mail->Port = SMTP_PORT; // Port of the SMTP like to be 25, 80, 465 or 587
		$mail->SMTPAuth = true; // Whether to use SMTP authentication
		$mail->SMTPSecure = SMTP_SECURE;
		$mail->Username = SMTP_UNAME; // Username for SMTP authentication any valid email created in your domain
		$mail->Password = SMTP_PWORD; // Password for SMTP authentication
		                              // $mail->AddReplyTo($email, $fname); //reply-to address
		$mail->SetFrom ( "mssapp@miraclesoft.com", "Digital Summit 2k17" ); // From address of the mail
		                                                                 // put your while loop here like below,
		$mail->Subject = "ThankYou!!"; // Subject od your mail
		                               // $mail->AddAddress("skola2@miraclesoft.com", "Santosh Kola"); //To address who will receive this email
		$mail->AddAddress ( $email, $contactName ); // To address who will receive this email
		                                         // $mail->MsgHTML("<b>Hi, your first SMTP mail has been received. Great Job!.. <br/><br/>by <a href='http://www.asif18.com/7/php/send-mails-using-smtp-in-php-by-gmail-server-or-own-domain-server/'>Asif18</a></b>"); //Put your body of the message you can place html code here
		$mail->MsgHTML ( "<html xmlns='http://www.w3.org/1999/xhtml'><head>
 <link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans'>
					
				<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0'><meta http-equiv='Content-Type' content='text/html; charset=UTF-8'><meta http-equiv='X-UA-Compatible' content='IE=edge'><title>Digital Summit 2017</title><style>

        .ReadMsgBody { width: 100%; background-color: #D2D7D3; }
        .ExternalClass { width: 100%; background-color: #D2D7D3; }
		.a { text-decoration:none; }
        body { width: 100%; background-color: #d8eaf8; margin: 0; padding: 0; -webkit-font-smoothing: ; font-family:OpenSans ,Arial, Helvetica Neue, Helvetica, sans-serif }
        @-ms-viewport{ width: device-width; }

@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 400;
  src: url('Fonts/Montserrat-Regular.ttf') format('truetype'), url('https://fonts.gstatic.com/s/montserrat/v6/zhcz-_WihjSQC0oHJ9TCYPk_vArhqVIZ0nv9q090hN8.woff2') format('woff2');
}
@font-face {
  font-family: 'Montserrat';
  font-style: Bold;
  font-weight: 700;
  src: url('Fonts/Montserrat-Bold.ttf') format('truetype'), url('https://fonts.gstatic.com/s/montserrat/v6/IQHow_FEYlDC4Gzy_m8fcoWiMMZ7xLd792ULpGE4W_Y.woff2') format('woff2');
}
@font-face {
  font-family: 'OpenSans';
  font-style: normal;
  font-weight: 400;
  src: url('Fonts/OpenSans-Regular.ttf') format('truetype'), url('https://fonts.gstatic.com/s/opensans/v13/cJZKeOuBrn4kERxqtaUH3VtXRa8TVwTICgirnJhmVJw.woff2') format('woff2');
}
@font-face {
  font-family: 'OpenSans';
  font-style: normal;
  font-weight: 600;
  src: url('Fonts/OpenSans-Semibold.ttf') format('truetype'), url('https://fonts.gstatic.com/s/opensans/v13/MTP_ySUJH_bn48VBG8sNSugdm0LZdjqr5-oayXSOefg.woff2') format('woff2');
}

@font-face {
  font-family: 'OpenSans';
  font-style: extraBold;
  font-weight: 900;
  src: url('Fonts/OpenSans-ExtraBold.ttf') format('truetype'), url('https://fonts.gstatic.com/s/opensans/v13/EInbV5DfGHOiMmvb1Xr-hugdm0LZdjqr5-oayXSOefg.woff2') format('woff2');
}
        @media only screen and (max-width: 639px){
        .wrapper{ width:100%;  padding: 0 !important; }
        }

        @media only screen and (max-width: 480px){
        .centerClass{ margin:0 auto !important; }
        .imgClass{ width:100% !important; height:auto; }
		.img{ text-align:center}
		.hide{ display:none;}
        .wrapper{ width:100%; padding: 0 !important; }
        .header{ width:100%; padding: 0 !important; background-image: url(http://placehold.it/320x400) !important; }
        .container{ width:300px;  padding: 0 !important; }
		.box{ width:250px;  padding: 0 !important; }
        .mobile{ width:300px; display:block; padding: 0 !important; text-align:center !important;}
        .mobile50{ width:300px; padding: 0 !important; text-align:center; }
        *[class='mobileOff'] { width: 0px !important; display: none !important; }
        *[class*='mobileOn'] { display: block !important; max-height:none !important; }
        }

    .MsoNormal {font-family:Montserrat, OpenSans ,Arial, Helvetica Neue, Helvetica, sans-serif !important;}
    </style>

					
				</head><body marginwidth='0' marginheight='0' style='margin-top: 0; margin-bottom: 0; padding-top: 0; padding-bottom: 0; width: 100%; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;' offset='0' topmargin='0' leftmargin='0'><table width='100%' data-module='Notif1' align='center' cellpadding='0' cellspacing='0' border='0' class='wrapper' bgcolor='#ececec' data-bgcolor='MainBG_Color5'>
                    
                      <tbody><tr>
                        <td height='50' style='font-family: OpenSans, Arial, sans-serif; font-size:10px; line-height:10px;'></td>
                      </tr>
                </tbody></table><table width='100%' data-module='Notif2' align='center' cellpadding='0' cellspacing='0' border='0' class='wrapper' bgcolor='#ececec' data-bgcolor='MainBG_Color5'>
                    
                      <tbody><tr>
                        <td align='center'>

                            <!-- Start Container -->
                            <table width='600' border='0' align='center' cellpadding='0' cellspacing='0' bgcolor='#ffffff' style='border-radius:25px' class='container'>
                                 
                                   <tbody><tr>
                                     <td style=' border-top-left-radius:4px; border-top-right-radius:4px; font-size: 35px; line-height: 30px; color: #ffffff; font-weight: 700;' bgcolor='#42729B' align='center'></td>
                                   </tr>
                                   <tr>
                                     <td align='center' class='mobile' style='font-size:12px; line-height:24px;'><table width='100%' border='0' cellspacing='0' cellpadding='0' bgcolor='#232527' data-bgcolor='BlueBoxBG_Color' style='border-top-left-radius:4px; border-top-right-radius:4px'>
                                       <tbody><tr>
                                         <td height='20'></td>
                                       </tr>
                                         <tr>
                                           <td height='20' align='center'><img mc:edit='' editable='' src='https://newsletters-2017-sivanmyc.c9users.io/October/Internal/Campaigns/ds17logo-black.png' width='170' height='auto'></td>
                                         </tr>
                                         <tr>
                                         <td height='20'></td>
                                       </tr>
                                       <tr>
                                         <td align='center' style='font-size:34px; line-height:40px; color: #ffffff; font-weight:400' data-color='H1wht Color' data-size='H1wht size' data-min='18' data-max='50' mc:edit=''></td>
                                       </tr>
                                       <tr>
                                         
                                       </tr>
                                     </tbody></table></td>
                                   </tr>
                             </tbody></table>
                            <!-- End Container -->

                        </td>
                    </tr>
                </tbody></table><table width='100%' data-module='Notif3' align='center' cellpadding='0' cellspacing='0' border='0' class='wrapper' bgcolor='#ececec' data-bgcolor='MainBG_Color5'>
                    
                      <tbody><tr>
                        <td align='center'>

                            <!-- Start Container -->
                            <table width='100%' data-module='Notif3' align='center' cellpadding='0' cellspacing='0' border='0' class='wrapper' bgcolor='#ececec' data-bgcolor='MainBG_Color5'>
                    
                      <tbody><tr>
                        <td align='center'>

                            <!-- Start Container -->
                          <table width='600' border='0' align='center' cellpadding='0' cellspacing='0' bgcolor='#ffffff' class='container' style='border-bottom:1px #ececec solid'>
                                 
                                   <tbody><tr>
                                     <td align='center' bgcolor='#42729B' style='font-size: 35px; line-height: 30px; color: #ffffff; font-weight: 700;'></td>
                                   </tr>
                                   <tr>
                                     <td height='30'></td>
                                   </tr>
                                   <tr>
                                              <td width='330' align='center' style='font-family: Open Sans; font-size: 26px; line-height:30px; color: #2368a0; font-weight:400;' data-color='H1 Color' data-size='H1 Size' data-min='12' data-max='40' mc:edit=''><multiline label='content'><b>Thank You for Reaching Us!</b></multiline></td>
                                          </tr>
                                   <tr>
                                     <td align='center' height='30' class='mobile'></td>
                                   </tr>
                             
                          </tbody></table>
                            <!-- End Container -->

                        </td>
                    </tr>
                </tbody></table><table width='600' cellspacing='0' cellpadding='0' bgcolor='#ffffff' data-bgcolor='Box9BGcolor' style='border-radius:4px' class='container'>
  
  <tbody><tr>
    <td><table width='100%' border='0' align='center' cellpadding='0' cellspacing='0' class='container'>
      
        <tbody><tr>
          <td height='20' align='center' valign='middle' class='mobile'></td>
        </tr>
        <tr>
      <td height='20' align='center' valign='middle' class='mobile' style='font-size:12px; line-height:18px;'>
        <!-- Start Content -->
        <table class='container' cellspacing='0' cellpadding='0' align='justify' border='0' width='500'>
          
            <tbody>
            
            <tr>
              <td align='justify' class='padding-copy' style='padding: 5px 0 5px 0; font-size: 14px; line-height: 30px; font-family: open sans; color: #232527;'><b>Hello $contactName,</b>
<br> Thank you so much for writing us your query regarding Digital Summit '17 (or) AP Cloud. One of our team members will contact you soon to assist you better in this regard. </td>
              </tr>
            <tr>
              
              </tr><tr></tr>
            <tr><td><table width='100%' cellspacing='0' cellpadding='0' border='0'><tbody><tr>
              
              </tr><tr></tr></tbody></table></td></tr>
            <tr>
              
            </tr>
            
            
            <tr>
              
              </tr>
            
          </tbody></table>
        <!-- End Content -->
      </td>
        </tr>
        <tr>
          
        </tr>
        
    </tbody></table></td>
  </tr>
  </tbody></table><table width='600' cellspacing='0' cellpadding='0' bgcolor='#ffffff' data-bgcolor='Box9BGcolor' style='border-radius:0px' class='container'>
  
  <tbody><tr>
    <td><table width='500' border='0' align='center' cellpadding='0' cellspacing='0' class='container'>
      
        <tbody><tr>
          
        </tr><tr><td align='justify' class='padding-copy' style='padding: 5px 0 5px 0; border-bottom: 1px dashed #2368a0; font-size: 14px; line-height: 25px; font-family: open sans; color: #232527;'></td></tr>
        <tr>
      <td height='20' align='center' valign='middle' class='mobile' style='font-size:12px; line-height:18px;'>
        <!-- Start Content -->
        <table class='container' cellspacing='0' cellpadding='0' align='justify' border='0' width='500'>
          
            <tbody>
            
            <tr><td style='padding: 5px 0 5px 0; font-size: 14px; line-height: 30px; font-family: open sans; color: #8c8c8c; font-style: normal;' class='padding-copy' align='left'>Thanks &amp; Regards,<br><b>Digital Summit 2017,</b><br><b> Miracle Software Systems, Inc. </b><br><b>Email :</b> <a href='mailto: apcloud@miraclesoft.com' style='font-size: 14px;color:#252327;text-decoration:none; font-family: Open Sans; color: #8c8c8c; font-style: normal'>apcloud@miraclesoft.com</a> <br><b>Phone :</b> +91-891-6623556<br>
							 
							  </td></tr>
            <tr>
              
              </tr><tr></tr>
            <tr><td><table width='100%' cellspacing='0' cellpadding='0' border='0'><tbody><tr>
              
              </tr><tr></tr></tbody></table></td></tr>
            <tr>
              
            </tr>
            
            
            <tr>
              
              </tr>
            
          </tbody></table>
        <!-- End Content -->
      </td>
        </tr>
        <tr>
          
        </tr>
        
    </tbody></table></td>
  </tr>
  </tbody></table>

                          
                          
                            <!-- End Container -->

                        </td>
                    </tr>
                </tbody></table><table width='100%' data-module='Notif4' align='center' cellpadding='0' cellspacing='0' border='0' class='wrapper' bgcolor='#ececec' data-bgcolor='MainBG_Color5'>
                    
                      <tbody><tr>
                        <td align='center'>

                            <!-- Start Container -->
                          <table width='600' border='0' align='center' cellpadding='0' cellspacing='0' bgcolor='#ffffff' style='border-radius:25px' class='container'>
                                 
                                   <tbody><tr>
                                     <td align='center' bgcolor='#42729B' style=' border-top-left-radius:4px; border-top-right-radius:4px; font-size: 35px; line-height: 30px; color: #ffffff; font-weight: 700;'></td>
                                   </tr>
                                   <tr>
                                     <td align='center' class='mobile'><table class='container' style='border-bottom-left-radius:4px; border-bottom-right-radius:4px' data-bgcolor='FootBoxBG_Color' bgcolor='#232527' border='0' cellspacing='0' cellpadding='0' width='100%'>
                                <tbody><tr><td align='center' height='30' class='mobile'></td>
                                </tr><tr>
                                                                           <td width='600' align='center' style='font-size:0!important'>
                                                                              <div style='width:100%;display:inline-block;vertical-align:top;font-size:normal;max-width:50px'>
                                                                                 <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                    <tbody>
                                                                                       <tr>
                                                                                          <td style='padding:0 10px' align='center'>
                                                                                             <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                                <tbody>
                                                                                                   <tr>
                                                                                                      <td style='height:10px;line-height:10px' height='10'></td>
                                                                                                   </tr>
                                                                                                   <tr>
                                                                                                      <td style='line-height:0!important' align='center'>
                                                                                                         <a style='text-decoration:none;display:inline-block' href='https://www.facebook.com/DigitalSummit16/' target='blank'>
                                                                                                         <img src='http://www.miraclesoft.com/images/newsletters/2016/September/facebook-1.png' alt='socials1' width='30'>
                                                                                                         </a>
                                                                                                      </td>
                                                                                                   </tr>
                                                                                                </tbody>
                                                                                             </table>
                                                                                          </td>
                                                                                       </tr>
                                                                                    </tbody>
                                                                                 </table>
                                                                              </div>
                                                                              <div style='width:100%;display:inline-block;vertical-align:top;font-size:normal;max-width:50px'>
                                                                                 <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                    <tbody>
                                                                                       <tr>
                                                                                          <td style='padding:0 10px' align='center'>
                                                                                             <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                                <tbody>
                                                                                                   <tr>
                                                                                                      <td style='height:10px;line-height:10px' height='10'></td>
                                                                                                   </tr>
                                                                                                   <tr>
                                                                                                      <td style='line-height:0!important' align='center'>
                                                                                                         <a style='text-decoration:none;display:inline-block' href='https://plus.google.com/104381127288956493644' target='blank'>
                                                                                                         <img src='http://www.miraclesoft.com/images/newsletters/2016/September/google-plus-2.png' alt='socials1' width='30'>
                                                                                                         </a>
                                                                                                      </td>
                                                                                                   </tr>
                                                                                                </tbody>
                                                                                             </table>
                                                                                          </td>
                                                                                       </tr>
                                                                                    </tbody>
                                                                                 </table>
                                                                              </div>
                                                                              <div style='width:100%;display:inline-block;vertical-align:top;font-size:normal;max-width:50px'>
                                                                                 <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                    <tbody>
                                                                                       <tr>
                                                                                          <td style='padding:0 10px' align='center'>
                                                                                             <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                                <tbody>
                                                                                                   <tr>
                                                                                                      <td style='height:10px;line-height:10px' height='10'></td>
                                                                                                   </tr>
                                                                                                   <tr>
                                                                                                      <td style='line-height:0!important' align='center'>
                                                                                                         <a style='text-decoration:none;display:inline-block' href='https://www.linkedin.com/groups/10313125' target='blank'>
                                                                                                         <img src='http://www.miraclesoft.com/images/newsletters/2016/September/linkedin-2.png' alt='socials1' width='30'>
                                                                                                         </a>
                                                                                                      </td>
                                                                                                   </tr>
                                                                                                </tbody>
                                                                                             </table>
                                                                                          </td>
                                                                                       </tr>
                                                                                    </tbody>
                                                                                 </table>
                                                                              </div>
                                                                              <div style='width:100%;display:inline-block;vertical-align:top;font-size:normal;max-width:50px'>
                                                                                 <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                    <tbody>
                                                                                       <tr>
                                                                                          <td style='padding:0 10px' align='center'>
                                                                                             <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                                <tbody>
                                                                                                   <tr>
                                                                                                      <td style='height:10px;line-height:10px' height='10'></td>
                                                                                                   </tr>
                                                                                                   <tr>
                                                                                                      <td style='line-height:0!important' align='center'>
                                                                                                         <a style='text-decoration:none;display:inline-block' href='https://www.flickr.com/people/digitalsummit/' target='blank'>
                                                                                                         <img src='http://www.miraclesoft.com/images/newsletters/2016/September/flickr-1.png' alt='socials1' width='30'>
                                                                                                         </a>
                                                                                                      </td>
                                                                                                   </tr>
                                                                                                </tbody>
                                                                                             </table>
                                                                                          </td>
                                                                                       </tr>
                                                                                    </tbody>
                                                                                 </table>
                                                                              </div>
                                                                              <div style='width:100%;display:inline-block;vertical-align:top;font-size:normal;max-width:50px'>
                                                                                 <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                    <tbody>
                                                                                       <tr>
                                                                                          <td style='padding:0 10px' align='center'>
                                                                                             <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                                <tbody>
                                                                                                   <tr>
                                                                                                      <td style='height:10px;line-height:10px' height='10'></td>
                                                                                                   </tr>
                                                                                                   <tr>
                                                                                                      <td style='line-height:0!important' align='center'>
                                                                                                         <a style='text-decoration:none;display:inline-block' href='https://twitter.com/andhracloud' target='blank'>
                                                                                                         <img src='http://www.miraclesoft.com/images/newsletters/2016/September/twitter-2.png' alt='socials2' width='30'>
                                                                                                         </a>
                                                                                                      </td>
                                                                                                   </tr>
                                                                                                </tbody>
                                                                                             </table>
                                                                                          </td>
                                                                                       </tr>
                                                                                    </tbody>
                                                                                 </table>
                                                                              </div>
                                                                              <div style='width:100%;display:inline-block;vertical-align:top;font-size:normal;max-width:50px'>
                                                                                 <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                    <tbody>
                                                                                       <tr>
                                                                                          <td style='padding:0 10px' align='center'>
                                                                                             <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                                <tbody>
                                                                                                   <tr>
                                                                                                      <td style='height:10px;line-height:10px' height='10'></td>
                                                                                                   </tr>
                                                                                                   <tr>
                                                                                                      <td style='line-height:0!important' align='center'>
                                                                                                         <a style='text-decoration:none;display:inline-block' href='https://www.youtube.com/c/DigitalSummitVizag' target='blank'>
                                                                                                         <img src='http://www.miraclesoft.com/images/newsletters/2016/September/youtube-3.png' alt='socials3' width='30'>
                                                                                                         </a>
                                                                                                      </td>
                                                                                                   </tr>
                                                                                                </tbody>
                                                                                             </table>
                                                                                          </td>
                                                                                       </tr>
                                                                                    </tbody>
                                                                                 </table>
                                                                              </div>
                                                                           </td>
                                                                        </tr>
                                    <tr><td align='center' height='30' class='mobile'></td>
                                </tr>
                            </tbody></table></td>
                                   </tr>
                             </tbody></table>
                            <!-- End Container -->

                        </td>
                    </tr>
                </tbody></table><table width='100%' data-module='Notif5' align='center' cellpadding='0' cellspacing='0' border='0' class='wrapper' bgcolor='#ECECEC' data-bgcolor='MainBG_Color22'>
                    
                      <tbody><tr>
                        <td height='40'></td>
                      </tr>
                      <tr>
                        <td align='center'>

                            <!-- Start Container -->
                            <table width='600' cellpadding='0' cellspacing='0' border='0' class='container'>
                                
                                  <tbody><tr>
                                    <td align='center' class='mobile' style='font-family: OpenSans, Arial, sans-serif; font-size:12px; line-height:24px;'>
                                        <!-- Start Content -->
                                        <table width='90%' border='0' align='center' cellpadding='0' cellspacing='0' class='container'>
                                          
                                            <tbody><tr>
                                            <td style='font-size: 14px; line-height: 20px; font-family: open sans; color:#666666;' align='center'>
  © 2017 | Miracle Software Systems, Inc.<br></td>
                                          </tr>
                                        </tbody></table>                                        <!-- End Container -->
                                    </td>
                                  </tr>
                            </tbody></table>
                            
                            <!-- End Container -->

                        </td>
                    </tr>
                    
                    <tr>
                        <td height='40'> </td><!-- Spacer -->
                    </tr>
                </tbody></table><div id='edit_link' class='hidden' style='display: none;'>

						<!-- Close Link -->
						<div class='close_link'></div>

						<!-- Edit Link Value -->
						<input type='text' id='edit_link_value' class='createlink' placeholder='Your URL'>

						<!-- Change Image Wrapper-->
						<div id='change_image_wrapper'>

							<!-- Change Image Tooltip -->
							<div id='change_image'>

								<!-- Change Image Button -->
								<p id='change_image_button'>Change &nbsp; <span class='pixel_result'></span></p>

							</div>

							<!-- Change Image Link Button -->
							<input type='button' value='' id='change_image_link'>

							<!-- Remove Image -->
							<input type='button' value='' id='remove_image'>

						</div>

						<!-- Tooltip Bottom Arrow-->
						<div id='tip'></div>

					</div></body></html>
				
" ); // Put your body of the message you can place html code here
		    
		// $mail->AddAttachment("images/asif18-logo.png"); //Attach a file here if any or comment this line,
		$send = $mail->Send (); // Send the mails
		if ($send) {
			// echo '<center><h3 style="color:#009933;">Mail sent successfully</h3></center>';
			
			return "Mail sent successfully";
		} else {
			// echo '<center><h3 style="color:#FF3300;">Mail error: </h3></center>'.$mail->ErrorInfo;
			throw new Exception ( $mail->ErrorInfo );
		}
	}
	// for ds contact details to office...
	function sendDs17ContactDetails($contactName, $email, $subject, $phoneNumber, $profession, $organizationName, $message) {
		$mail = new PHPMailer (); // call the class
		$mail->IsSMTP ();
		$mail->Host = SMTP_HOST; // Hostname of the mail server
		$mail->Port = SMTP_PORT; // Port of the SMTP like to be 25, 80, 465 or 587
		$mail->SMTPAuth = true; // Whether to use SMTP authentication
		$mail->SMTPSecure = SMTP_SECURE;
		$mail->Username = SMTP_UNAME; // Username for SMTP authentication any valid email created in your domain
		$mail->Password = SMTP_PWORD; // Password for SMTP authentication
		                              // $mail->AddReplyTo($email, $fname); //reply-to address
		$mail->SetFrom ( "hubbleapp@miraclesoft.com", "Digital Summit 2k17" ); // From address of the mail
		                                                                    // put your while loop here like below,
		$mail->Subject = "You have been contact DS17 " . $contactName . " !!"; // Subject od your mail
		                                                                   // $mail->AddAddress("skola2@miraclesoft.com", "Santosh Kola"); //To address who will receive this email
		                                                                   // echo 'conutry11'.$rlocation;
		                                                                   // if($rlocation == 'India') {
		                                                                   // $mail->AddAddress(DS_SUMMIT_CONTACTS, "info"); //To address who will receive this email
		                                                                   // EMPLOYEE_VERIFICATION
		
		$myArray = explode ( ';', DS17_CONTACT_RECIPIENT );
		for($i = 0; $i < count ( $myArray ); ++ $i) {
			$innerArray = explode ( ',', $myArray [$i] );
			$mail->AddAddress ( $innerArray [0], $innerArray [1] );
		}
		// $mail->MsgHTML("<b>Hi, your first SMTP mail has been received. Great Job!.. <br/><br/>by <a href='http://www.asif18.com/7/php/send-mails-using-smtp-in-php-by-gmail-server-or-own-domain-server/'>Asif18</a></b>"); //Put your body of the message you can place html code here
		$mail->MsgHTML ( "<html xmlns='http://www.w3.org/1999/xhtml'><head>
 <link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans'>
					
				<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0'><meta http-equiv='Content-Type' content='text/html; charset=UTF-8'><meta http-equiv='X-UA-Compatible' content='IE=edge'><title>Digital Summit 2017</title><style>

        .ReadMsgBody { width: 100%; background-color: #D2D7D3; }
        .ExternalClass { width: 100%; background-color: #D2D7D3; }
		.a { text-decoration:none; }
        body { width: 100%; background-color: #d8eaf8; margin: 0; padding: 0; -webkit-font-smoothing: ; font-family:OpenSans ,Arial, Helvetica Neue, Helvetica, sans-serif }
        @-ms-viewport{ width: device-width; }

@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 400;
  src: url('Fonts/Montserrat-Regular.ttf') format('truetype'), url('https://fonts.gstatic.com/s/montserrat/v6/zhcz-_WihjSQC0oHJ9TCYPk_vArhqVIZ0nv9q090hN8.woff2') format('woff2');
}
@font-face {
  font-family: 'Montserrat';
  font-style: Bold;
  font-weight: 700;
  src: url('Fonts/Montserrat-Bold.ttf') format('truetype'), url('https://fonts.gstatic.com/s/montserrat/v6/IQHow_FEYlDC4Gzy_m8fcoWiMMZ7xLd792ULpGE4W_Y.woff2') format('woff2');
}
@font-face {
  font-family: 'OpenSans';
  font-style: normal;
  font-weight: 400;
  src: url('Fonts/OpenSans-Regular.ttf') format('truetype'), url('https://fonts.gstatic.com/s/opensans/v13/cJZKeOuBrn4kERxqtaUH3VtXRa8TVwTICgirnJhmVJw.woff2') format('woff2');
}
@font-face {
  font-family: 'OpenSans';
  font-style: normal;
  font-weight: 600;
  src: url('Fonts/OpenSans-Semibold.ttf') format('truetype'), url('https://fonts.gstatic.com/s/opensans/v13/MTP_ySUJH_bn48VBG8sNSugdm0LZdjqr5-oayXSOefg.woff2') format('woff2');
}

@font-face {
  font-family: 'OpenSans';
  font-style: extraBold;
  font-weight: 900;
  src: url('Fonts/OpenSans-ExtraBold.ttf') format('truetype'), url('https://fonts.gstatic.com/s/opensans/v13/EInbV5DfGHOiMmvb1Xr-hugdm0LZdjqr5-oayXSOefg.woff2') format('woff2');
}
        @media only screen and (max-width: 639px){
        .wrapper{ width:100%;  padding: 0 !important; }
        }

        @media only screen and (max-width: 480px){
        .centerClass{ margin:0 auto !important; }
        .imgClass{ width:100% !important; height:auto; }
		.img{ text-align:center}
		.hide{ display:none;}
        .wrapper{ width:100%; padding: 0 !important; }
        .header{ width:100%; padding: 0 !important; background-image: url(http://placehold.it/320x400) !important; }
        .container{ width:300px;  padding: 0 !important; }
		.box{ width:250px;  padding: 0 !important; }
        .mobile{ width:300px; display:block; padding: 0 !important; text-align:center !important;}
        .mobile50{ width:300px; padding: 0 !important; text-align:center; }
        *[class='mobileOff'] { width: 0px !important; display: none !important; }
        *[class*='mobileOn'] { display: block !important; max-height:none !important; }
        }

    .MsoNormal {font-family:Montserrat, OpenSans ,Arial, Helvetica Neue, Helvetica, sans-serif !important;}
    </style>

					
				</head><body marginwidth='0' marginheight='0' style='margin-top: 0; margin-bottom: 0; padding-top: 0; padding-bottom: 0; width: 100%; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;' offset='0' topmargin='0' leftmargin='0'><table width='100%' data-module='Notif1' align='center' cellpadding='0' cellspacing='0' border='0' class='wrapper' bgcolor='#ececec' data-bgcolor='MainBG_Color5'>
                    
                      <tbody><tr>
                        <td height='50' style='font-family: OpenSans, Arial, sans-serif; font-size:10px; line-height:10px;'></td>
                      </tr>
                </tbody></table><table width='100%' data-module='Notif2' align='center' cellpadding='0' cellspacing='0' border='0' class='wrapper' bgcolor='#ececec' data-bgcolor='MainBG_Color5'>
                    
                      <tbody><tr>
                        <td align='center'>

                            <!-- Start Container -->
                            <table width='600' border='0' align='center' cellpadding='0' cellspacing='0' bgcolor='#ffffff' style='border-radius:25px' class='container'>
                                 
                                   <tbody><tr>
                                     <td style=' border-top-left-radius:4px; border-top-right-radius:4px; font-size: 35px; line-height: 30px; color: #ffffff; font-weight: 700;' bgcolor='#42729B' align='center'></td>
                                   </tr>
                                   <tr>
                                     <td align='center' class='mobile' style='font-size:12px; line-height:24px;'><table width='100%' border='0' cellspacing='0' cellpadding='0' bgcolor='#232527' data-bgcolor='BlueBoxBG_Color' style='border-top-left-radius:4px; border-top-right-radius:4px'>
                                       <tbody><tr>
                                         <td height='20'></td>
                                       </tr>
                                         <tr>
                                           <td height='20' align='center'><img mc:edit='' editable='' src='https://newsletters-2017-sivanmyc.c9users.io/October/Internal/Campaigns/ds17logo-black.png' width='170' height='auto'></td>
                                         </tr>
                                         <tr>
                                         <td height='20'></td>
                                       </tr>
                                       <tr>
                                         <td align='center' style='font-size:34px; line-height:40px;  color: #ffffff; font-weight:400' data-color='H1wht Color' data-size='H1wht size' data-min='18' data-max='50' mc:edit=''></td>
                                       </tr>
                                       <tr>
                                         
                                       </tr>
                                     </tbody></table></td>
                                   </tr>
                             </tbody></table>
                            <!-- End Container -->

                        </td>
                    </tr>
                </tbody></table><table width='100%' data-module='Notif3' align='center' cellpadding='0' cellspacing='0' border='0' class='wrapper' bgcolor='#ececec' data-bgcolor='MainBG_Color5'>
                    
                      <tbody><tr>
                        <td align='center'>

                            <!-- Start Container -->
                            <table width='100%' data-module='Notif3' align='center' cellpadding='0' cellspacing='0' border='0' class='wrapper' bgcolor='#ececec' data-bgcolor='MainBG_Color5'>
                    
                      <tbody><tr>
                        <td align='center'>

                            <!-- Start Container -->
                          <table width='600' border='0' align='center' cellpadding='0' cellspacing='0' bgcolor='#ffffff' class='container' style='border-bottom:1px #ececec solid'>
                                 
                                   <tbody><tr>
                                     <td align='center' bgcolor='#42729B' style='font-size: 35px; line-height: 30px; color: #ffffff; font-weight: 700;'></td>
                                   </tr>
                                   <tr>
                                     <td height='30'></td>
                                   </tr>
                                   <tr>
                                              <td width='330' align='center' style='font-family: Open Sans; font-size: 26px; line-height:30px; color: #2368a0; font-weight:400;' data-color='H1 Color' data-size='H1 Size' data-min='12' data-max='40' mc:edit=''><multiline label='content'><b> Contact Details
</b></multiline></td>
                                          </tr>
                                   <tr>
                                     <td align='center' height='30' class='mobile'></td>
                                   </tr>
                             
                          </tbody></table>
                            <!-- End Container -->

                        </td>
                    </tr>
                </tbody></table><table width='600' cellspacing='0' cellpadding='0' bgcolor='#ffffff' data-bgcolor='Box9BGcolor' style='border-radius:4px' class='container'>
  
  <tbody><tr>
    <td><table width='100%' border='0' align='center' cellpadding='0' cellspacing='0' class='container'>
      
        <tbody><tr>
          <td height='20' align='center' valign='middle' class='mobile'></td>
        </tr>
        <tr>
      <td height='20' align='center' valign='middle' class='mobile' style='font-size:12px; line-height:18px;'>
        <!-- Start Content -->
        <table class='container' cellspacing='0' cellpadding='0' align='center' border='0' width='500'>
          
            <tbody>
            
            <tr>
              <td align='left' class='padding-copy' style='padding: 5px 0 5px 0; font-size: 14px; line-height: 30px; font-family: Open Sans; color: #232527;'><b>Team,</b>
<br> Following are the details of the candidate who have contacted us regarding Digital Summit 2017. 

 </td>
              </tr>
            <tr>
              
              </tr><tr></tr>
            <tr><td><table width='100%' cellspacing='0' cellpadding='0' border='0'><tbody><tr>
              
              </tr><tr></tr></tbody></table></td></tr>
            <tr>
              
            </tr>
            
            
            <tr>
              
              </tr>
            
          </tbody></table>
        <!-- End Content -->
      </td>
        </tr>
        <tr>
          
        </tr>
        
    </tbody></table></td>
  </tr>
  </tbody></table><table width='600' cellspacing='0' cellpadding='0' bgcolor='#ffffff' data-bgcolor='Box9BGcolor' style='border-radius:4px' class='container'>
  
  <tbody><tr>
    <td><table width='100%' border='0' align='center' cellpadding='0' cellspacing='0' class='container'>
      
        <tbody><tr>
          
        </tr>
        <tr>
      <td height='20' align='center' valign='middle' class='mobile' style='font-size:12px; line-height:18px;'>
        <!-- Start Content -->
        <table class='container' cellspacing='0' cellpadding='0' align='center' border='0' width='500'>
          
            <tbody>
            
            <tr><td style='padding: 5px 0 5px 0; font-size: 14px; line-height: 30px; font-family: Open Sans; color: #232527;' class='padding-copy'><b>Name:</b> $contactName<br>
							  <b>Email :</b> $email<br>
							  <b>Mobile Number :</b> $phoneNumber<br>
							  
							 
							  <b>Subject :</b> $subject<br>
  <b>Profession :</b> $profession<br>
  
							    <b>Institute/Organization :</b> $organizationName<br>
   <b>Message :</b> $message<br>
							  </td></tr>
            <tr>
              
              </tr><tr></tr>
            <tr><td><table width='100%' cellspacing='0' cellpadding='0' border='0'><tbody><tr>
              
              </tr><tr></tr></tbody></table></td></tr>
            <tr>
              
            </tr>
            
            
            <tr>
              
              </tr>
            
          </tbody></table>
        <!-- End Content -->
      </td>
        </tr>
        <tr>
          
        </tr>
        
    </tbody></table></td>
  </tr>
  </tbody></table><table width='600' cellspacing='0' cellpadding='0' bgcolor='#ffffff' data-bgcolor='Box9BGcolor' style='border-radius:4px' class='container'>
  
  <tbody><tr>
    <td><table width='500' border='0' align='center' cellpadding='0' cellspacing='0' class='container'>
      
        <tbody><tr>
          
        </tr><tr><td align='justify' class='padding-copy' style='padding: 5px 0 5px 0; border-bottom: 1px dashed #2368a0; font-size: 14px; line-height: 25px; font-family: Open Sans; color: #232527;'></td></tr>
        <tr>
      <td height='20' align='center' valign='middle' class='mobile' style='font-size:12px; line-height:18px;'>
        <!-- Start Content -->
        <table class='container' cellspacing='0' cellpadding='0' align='center' border='0' width='500'>
          
            <tbody>
            
            <tr><td style='padding: 5px 0 5px 0; font-size: 14px; line-height: 30px; font-family: Open Sans; color: #8c8c8c; font-style: normal;' class='padding-copy' align='left'>Thanks &amp; Regards,<br><b>Digital Summit 2017,</b><br><b> Miracle Software Systems, Inc. </b><br><b>Email : </b><a href='mailto: apcloud@miraclesoft.com' style='font-size: 14px;color:#252327;text-decoration:none; font-family: Open Sans; color: #8c8c8c; font-style: normal'>apcloud@miraclesoft.com</a> <br><b>Phone :</b> +91-891-6623556<br>
							 
							  </td></tr>
            <tr>
              
              </tr><tr></tr>
            <tr><td><table width='100%' cellspacing='0' cellpadding='0' border='0'><tbody><tr>
              
              </tr><tr></tr></tbody></table></td></tr>
            <tr>
              
            </tr>
            
            
            <tr>
              
              </tr>
            
          </tbody></table>
        <!-- End Content -->
      </td>
        </tr>
        <tr>
          
        </tr>
        
    </tbody></table></td>
  </tr>
  </tbody></table>

                          
                          
                            <!-- End Container -->

                        </td>
                    </tr>
                </tbody></table><table width='100%' data-module='Notif4' align='center' cellpadding='0' cellspacing='0' border='0' class='wrapper' bgcolor='#ececec' data-bgcolor='MainBG_Color5'>
                    
                      <tbody><tr>
                        <td align='center'>

                            <!-- Start Container -->
                          <table width='600' border='0' align='center' cellpadding='0' cellspacing='0' bgcolor='#ffffff' style='border-radius:25px' class='container'>
                                 
                                   <tbody><tr>
                                     <td align='center' bgcolor='#42729B' style=' border-top-left-radius:4px; border-top-right-radius:4px; font-size: 35px; line-height: 30px; color: #ffffff; font-weight: 700;'></td>
                                   </tr>
                                   <tr>
                                     <td align='center' class='mobile'><table class='container' style='border-bottom-left-radius:4px; border-bottom-right-radius:4px' data-bgcolor='FootBoxBG_Color' bgcolor='#232527' border='0' cellspacing='0' cellpadding='0' width='100%'>
                                <tbody><tr><td align='center' height='30' class='mobile'></td>
                                </tr><tr>
                                                                           <td width='600' align='center' style='font-size:0!important'>
                                                                              <div style='width:100%;display:inline-block;vertical-align:top;font-size:normal;max-width:50px'>
                                                                                 <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                    <tbody>
                                                                                       <tr>
                                                                                          <td style='padding:0 10px' align='center'>
                                                                                             <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                                <tbody>
                                                                                                   <tr>
                                                                                                      <td style='height:10px;line-height:10px' height='10'></td>
                                                                                                   </tr>
                                                                                                   <tr>
                                                                                                      <td style='line-height:0!important' align='center'>
                                                                                                         <a style='text-decoration:none;display:inline-block' href='https://www.facebook.com/DigitalSummit16/' target='blank'>
                                                                                                         <img src='http://www.miraclesoft.com/images/newsletters/2016/September/facebook-1.png' alt='socials1' width='30'>
                                                                                                         </a>
                                                                                                      </td>
                                                                                                   </tr>
                                                                                                </tbody>
                                                                                             </table>
                                                                                          </td>
                                                                                       </tr>
                                                                                    </tbody>
                                                                                 </table>
                                                                              </div>
                                                                              <div style='width:100%;display:inline-block;vertical-align:top;font-size:normal;max-width:50px'>
                                                                                 <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                    <tbody>
                                                                                       <tr>
                                                                                          <td style='padding:0 10px' align='center'>
                                                                                             <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                                <tbody>
                                                                                                   <tr>
                                                                                                      <td style='height:10px;line-height:10px' height='10'></td>
                                                                                                   </tr>
                                                                                                   <tr>
                                                                                                      <td style='line-height:0!important' align='center'>
                                                                                                         <a style='text-decoration:none;display:inline-block' href='https://plus.google.com/104381127288956493644' target='blank'>
                                                                                                         <img src='http://www.miraclesoft.com/images/newsletters/2016/September/google-plus-2.png' alt='socials1' width='30'>
                                                                                                         </a>
                                                                                                      </td>
                                                                                                   </tr>
                                                                                                </tbody>
                                                                                             </table>
                                                                                          </td>
                                                                                       </tr>
                                                                                    </tbody>
                                                                                 </table>
                                                                              </div>
                                                                              <div style='width:100%;display:inline-block;vertical-align:top;font-size:normal;max-width:50px'>
                                                                                 <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                    <tbody>
                                                                                       <tr>
                                                                                          <td style='padding:0 10px' align='center'>
                                                                                             <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                                <tbody>
                                                                                                   <tr>
                                                                                                      <td style='height:10px;line-height:10px' height='10'></td>
                                                                                                   </tr>
                                                                                                   <tr>
                                                                                                      <td style='line-height:0!important' align='center'>
                                                                                                         <a style='text-decoration:none;display:inline-block' href='https://www.linkedin.com/groups/10313125' target='blank'>
                                                                                                         <img src='http://www.miraclesoft.com/images/newsletters/2016/September/linkedin-2.png' alt='socials1' width='30'>
                                                                                                         </a>
                                                                                                      </td>
                                                                                                   </tr>
                                                                                                </tbody>
                                                                                             </table>
                                                                                          </td>
                                                                                       </tr>
                                                                                    </tbody>
                                                                                 </table>
                                                                              </div>
                                                                              <div style='width:100%;display:inline-block;vertical-align:top;font-size:normal;max-width:50px'>
                                                                                 <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                    <tbody>
                                                                                       <tr>
                                                                                          <td style='padding:0 10px' align='center'>
                                                                                             <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                                <tbody>
                                                                                                   <tr>
                                                                                                      <td style='height:10px;line-height:10px' height='10'></td>
                                                                                                   </tr>
                                                                                                   <tr>
                                                                                                      <td style='line-height:0!important' align='center'>
                                                                                                         <a style='text-decoration:none;display:inline-block' href='https://www.flickr.com/people/digitalsummit/' target='blank'>
                                                                                                         <img src='http://www.miraclesoft.com/images/newsletters/2016/September/flickr-1.png' alt='socials1' width='30'>
                                                                                                         </a>
                                                                                                      </td>
                                                                                                   </tr>
                                                                                                </tbody>
                                                                                             </table>
                                                                                          </td>
                                                                                       </tr>
                                                                                    </tbody>
                                                                                 </table>
                                                                              </div>
                                                                              <div style='width:100%;display:inline-block;vertical-align:top;font-size:normal;max-width:50px'>
                                                                                 <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                    <tbody>
                                                                                       <tr>
                                                                                          <td style='padding:0 10px' align='center'>
                                                                                             <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                                <tbody>
                                                                                                   <tr>
                                                                                                      <td style='height:10px;line-height:10px' height='10'></td>
                                                                                                   </tr>
                                                                                                   <tr>
                                                                                                      <td style='line-height:0!important' align='center'>
                                                                                                         <a style='text-decoration:none;display:inline-block' href='https://twitter.com/andhracloud' target='blank'>
                                                                                                         <img src='http://www.miraclesoft.com/images/newsletters/2016/September/twitter-2.png' alt='socials2' width='30'>
                                                                                                         </a>
                                                                                                      </td>
                                                                                                   </tr>
                                                                                                </tbody>
                                                                                             </table>
                                                                                          </td>
                                                                                       </tr>
                                                                                    </tbody>
                                                                                 </table>
                                                                              </div>
                                                                              <div style='width:100%;display:inline-block;vertical-align:top;font-size:normal;max-width:50px'>
                                                                                 <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                    <tbody>
                                                                                       <tr>
                                                                                          <td style='padding:0 10px' align='center'>
                                                                                             <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                                <tbody>
                                                                                                   <tr>
                                                                                                      <td style='height:10px;line-height:10px' height='10'></td>
                                                                                                   </tr>
                                                                                                   <tr>
                                                                                                      <td style='line-height:0!important' align='center'>
                                                                                                         <a style='text-decoration:none;display:inline-block' href='https://www.youtube.com/c/DigitalSummitVizag' target='blank'>
                                                                                                         <img src='http://www.miraclesoft.com/images/newsletters/2016/September/youtube-3.png' alt='socials3' width='30'>
                                                                                                         </a>
                                                                                                      </td>
                                                                                                   </tr>
                                                                                                </tbody>
                                                                                             </table>
                                                                                          </td>
                                                                                       </tr>
                                                                                    </tbody>
                                                                                 </table>
                                                                              </div>
                                                                           </td>
                                                                        </tr>
                                    <tr><td align='center' height='30' class='mobile'></td>
                                </tr>
                            </tbody></table></td>
                                   </tr>
                             </tbody></table>
                            <!-- End Container -->

                        </td>
                    </tr>
                </tbody></table><table width='100%' data-module='Notif5' align='center' cellpadding='0' cellspacing='0' border='0' class='wrapper' bgcolor='#ECECEC' data-bgcolor='MainBG_Color22'>
                    
                      <tbody><tr>
                        <td height='40'></td>
                      </tr>
                      <tr>
                        <td align='center'>

                            <!-- Start Container -->
                            <table width='600' cellpadding='0' cellspacing='0' border='0' class='container'>
                                
                                  <tbody><tr>
                                    <td align='center' class='mobile' style='font-family: OpenSans, Arial, sans-serif; font-size:12px; line-height:24px;'>
                                        <!-- Start Content -->
                                        <table width='90%' border='0' align='center' cellpadding='0' cellspacing='0' class='container'>
                                          
                                            <tbody><tr>
                                            <td style='font-size: 15px; line-height: 30px; font-family: Open Sans; color:#666666;' align='center'>© 2017 | Miracle Software Systems, Inc.<br></td>
                                          </tr>
                                        </tbody></table>                                        <!-- End Container -->
                                    </td>
                                  </tr>
                            </tbody></table>
                            
                            <!-- End Container -->

                        </td>
                    </tr>
                    
                    <tr>
                        <td height='40'> </td><!-- Spacer -->
                    </tr>
                </tbody></table><div id='edit_link' class='hidden' style='display: none;'>

						<!-- Close Link -->
						<div class='close_link'></div>

						<!-- Edit Link Value -->
						<input type='text' id='edit_link_value' class='createlink' placeholder='Your URL'>

						<!-- Change Image Wrapper-->
						<div id='change_image_wrapper'>

							<!-- Change Image Tooltip -->
							<div id='change_image'>

								<!-- Change Image Button -->
								<p id='change_image_button'>Change &nbsp; <span class='pixel_result'></span></p>

							</div>

							<!-- Change Image Link Button -->
							<input type='button' value='' id='change_image_link'>

							<!-- Remove Image -->
							<input type='button' value='' id='remove_image'>

						</div>

						<!-- Tooltip Bottom Arrow-->
						<div id='tip'></div>

					</div></body></html>		" ); // Put your body of the message you can place html code here aaaaaaaaaaaaaaaaa
		                          
		// $mail->AddAttachment("images/asif18-logo.png"); //Attach a file here if any or comment this line,
		$send = $mail->Send (); // Send the mails
		if ($send) {
			// echo '<center><h3 style="color:#009933;">Mail sent successfully</h3></center>';
			
			return "Mail sent successfully";
		} else {
			// echo '<center><h3 style="color:#FF3300;">Mail error: </h3></center>'.$mail->ErrorInfo;
			throw new Exception ( $mail->ErrorInfo );
		}
	}
	
	// for ds summit partner details to office
	function sendDsPartnerDetails($partnerName, $organizationName, $designation, $email, $phoneNumber, $reasonTobePartner) {
		$mail = new PHPMailer (); // call the class
		$mail->IsSMTP ();
		$mail->Host = SMTP_HOST; // Hostname of the mail server
		$mail->Port = SMTP_PORT; // Port of the SMTP like to be 25, 80, 465 or 587
		$mail->SMTPAuth = true; // Whether to use SMTP authentication
		$mail->SMTPSecure = SMTP_SECURE;
		$mail->Username = SMTP_UNAME; // Username for SMTP authentication any valid email created in your domain
		$mail->Password = SMTP_PWORD; // Password for SMTP authentication
		                              // $mail->AddReplyTo($email, $fname); //reply-to address
		$mail->SetFrom ( "hubbleapp@miraclesoft.com", "Digital Summit 2k17" ); // From address of the mail
		                                                                    // put your while loop here like below,
		$mail->Subject = "DS 2k17 Partner " . $partnerName . " !!"; // Subject od your mail
		                                                       // $mail->AddAddress("skola2@miraclesoft.com", "Santosh Kola"); //To address who will receive this email
		                                                       // echo 'conutry11'.$rlocation;
		                                                       // if($rlocation == 'India') {
		                                                       // $mail->AddAddress(DS_SUMMIT_PARTNERS, "info");//To address who will receive this email
		
		$myArray = explode ( ';', DS17_PARTNER_RECIPIENT );
		for($i = 0; $i < count ( $myArray ); ++ $i) {
			$innerArray = explode ( ',', $myArray [$i] );
			$mail->AddAddress ( $innerArray [0], $innerArray [1] );
		}
		// EMPLOYEE_VERIFICATION
		// $mail->MsgHTML("<b>Hi, your first SMTP mail has been received. Great Job!.. <br/><br/>by <a href='http://www.asif18.com/7/php/send-mails-using-smtp-in-php-by-gmail-server-or-own-domain-server/'>Asif18</a></b>"); //Put your body of the message you can place html code here
		$mail->MsgHTML ( "<html xmlns='http://www.w3.org/1999/xhtml'><head>
 <link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans'>
					
				<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0'><meta http-equiv='Content-Type' content='text/html; charset=UTF-8'><meta http-equiv='X-UA-Compatible' content='IE=edge'><title>Digital Summit 2017</title><style>

        .ReadMsgBody { width: 100%; background-color: #D2D7D3; }
        .ExternalClass { width: 100%; background-color: #D2D7D3; }
		.a { text-decoration:none; }
        body { width: 100%; background-color: #d8eaf8; margin: 0; padding: 0; -webkit-font-smoothing: ; font-family:OpenSans ,Arial, Helvetica Neue, Helvetica, sans-serif }
        @-ms-viewport{ width: device-width; }

@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 400;
  src: url('Fonts/Montserrat-Regular.ttf') format('truetype'), url('https://fonts.gstatic.com/s/montserrat/v6/zhcz-_WihjSQC0oHJ9TCYPk_vArhqVIZ0nv9q090hN8.woff2') format('woff2');
}
@font-face {
  font-family: 'Montserrat';
  font-style: Bold;
  font-weight: 700;
  src: url('Fonts/Montserrat-Bold.ttf') format('truetype'), url('https://fonts.gstatic.com/s/montserrat/v6/IQHow_FEYlDC4Gzy_m8fcoWiMMZ7xLd792ULpGE4W_Y.woff2') format('woff2');
}
@font-face {
  font-family: 'OpenSans';
  font-style: normal;
  font-weight: 400;
  src: url('Fonts/OpenSans-Regular.ttf') format('truetype'), url('https://fonts.gstatic.com/s/opensans/v13/cJZKeOuBrn4kERxqtaUH3VtXRa8TVwTICgirnJhmVJw.woff2') format('woff2');
}
@font-face {
  font-family: 'OpenSans';
  font-style: normal;
  font-weight: 600;
  src: url('Fonts/OpenSans-Semibold.ttf') format('truetype'), url('https://fonts.gstatic.com/s/opensans/v13/MTP_ySUJH_bn48VBG8sNSugdm0LZdjqr5-oayXSOefg.woff2') format('woff2');
}

@font-face {
  font-family: 'OpenSans';
  font-style: extraBold;
  font-weight: 900;
  src: url('Fonts/OpenSans-ExtraBold.ttf') format('truetype'), url('https://fonts.gstatic.com/s/opensans/v13/EInbV5DfGHOiMmvb1Xr-hugdm0LZdjqr5-oayXSOefg.woff2') format('woff2');
}
        @media only screen and (max-width: 639px){
        .wrapper{ width:100%;  padding: 0 !important; }
        }

        @media only screen and (max-width: 480px){
        .centerClass{ margin:0 auto !important; }
        .imgClass{ width:100% !important; height:auto; }
		.img{ text-align:center}
		.hide{ display:none;}
        .wrapper{ width:100%; padding: 0 !important; }
        .header{ width:100%; padding: 0 !important; background-image: url(http://placehold.it/320x400) !important; }
        .container{ width:300px;  padding: 0 !important; }
		.box{ width:250px;  padding: 0 !important; }
        .mobile{ width:300px; display:block; padding: 0 !important; text-align:center !important;}
        .mobile50{ width:300px; padding: 0 !important; text-align:center; }
        *[class='mobileOff'] { width: 0px !important; display: none !important; }
        *[class*='mobileOn'] { display: block !important; max-height:none !important; }
        }

    .MsoNormal {font-family:Montserrat, OpenSans ,Arial, Helvetica Neue, Helvetica, sans-serif !important;}
    </style>

					
				</head><body marginwidth='0' marginheight='0' style='margin-top: 0; margin-bottom: 0; padding-top: 0; padding-bottom: 0; width: 100%; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;' offset='0' topmargin='0' leftmargin='0'><table width='100%' data-module='Notif1' align='center' cellpadding='0' cellspacing='0' border='0' class='wrapper' bgcolor='#ececec' data-bgcolor='MainBG_Color5'>
                    
                      <tbody><tr>
                        <td height='50' style='font-family: OpenSans, Arial, sans-serif; font-size:10px; line-height:10px;'></td>
                      </tr>
                </tbody></table><table width='100%' data-module='Notif2' align='center' cellpadding='0' cellspacing='0' border='0' class='wrapper' bgcolor='#ececec' data-bgcolor='MainBG_Color5'>
                    
                      <tbody><tr>
                        <td align='center'>

                            <!-- Start Container -->
                            <table width='600' border='0' align='center' cellpadding='0' cellspacing='0' bgcolor='#ffffff' style='border-radius:25px' class='container'>
                                 
                                   <tbody><tr>
                                     <td style=' border-top-left-radius:4px; border-top-right-radius:4px; font-size: 35px; line-height: 30px; color: #ffffff; font-weight: 700;' bgcolor='#42729B' align='center'></td>
                                   </tr>
                                   <tr>
                                     <td align='center' class='mobile' style='font-size:12px; line-height:24px;'><table width='100%' border='0' cellspacing='0' cellpadding='0' bgcolor='#232527' data-bgcolor='BlueBoxBG_Color' style='border-top-left-radius:4px; border-top-right-radius:4px'>
                                       <tbody><tr>
                                         <td height='20'></td>
                                       </tr>
                                         <tr>
                                           <td height='20' align='center'><img mc:edit='' editable='' src='https://newsletters-2017-sivanmyc.c9users.io/October/Internal/Campaigns/ds17logo-black.png' width='170' height='auto'></td>
                                         </tr>
                                         <tr>
                                         <td height='20'></td>
                                       </tr>
                                       <tr>
                                         <td align='center' style='font-size:34px; line-height:40px; color: #ffffff; font-weight:400' data-color='H1wht Color' data-size='H1wht size' data-min='18' data-max='50' mc:edit=''></td>
                                       </tr>
                                       <tr>
                                         
                                       </tr>
                                     </tbody></table></td>
                                   </tr>
                             </tbody></table>
                            <!-- End Container -->

                        </td>
                    </tr>
                </tbody></table><table width='100%' data-module='Notif3' align='center' cellpadding='0' cellspacing='0' border='0' class='wrapper' bgcolor='#ececec' data-bgcolor='MainBG_Color5'>
                    
                      <tbody><tr>
                        <td align='center'>

                            <!-- Start Container -->
                            <table width='100%' data-module='Notif3' align='center' cellpadding='0' cellspacing='0' border='0' class='wrapper' bgcolor='#ececec' data-bgcolor='MainBG_Color5'>
                    
                      <tbody><tr>
                        <td align='center'>

                            <!-- Start Container -->
                          <table width='600' border='0' align='center' cellpadding='0' cellspacing='0' bgcolor='#ffffff' class='container' style='border-bottom:1px #ececec solid'>
                                 
                                   <tbody><tr>
                                     <td align='center' bgcolor='#42729B' style='font-size: 35px; line-height: 30px; color: #ffffff; font-weight: 700;'></td>
                                   </tr>
                                   <tr>
                                     <td height='30'></td>
                                   </tr>
                                   <tr>
                                              <td width='330' align='center' style='font-family: Open Sans; font-size: 26px; line-height:30px;  color: #2368a0; font-weight:400;' data-color='H1 Color' data-size='H1 Size' data-min='12' data-max='40' mc:edit=''><multiline label='content'><b> Partner Registrant Details  
</b></multiline></td>
                                          </tr>
                                   <tr>
                                     <td align='center' height='30' class='mobile'></td>
                                   </tr>
                             
                          </tbody></table>
                            <!-- End Container -->

                        </td>
                    </tr>
                </tbody></table><table width='600' cellspacing='0' cellpadding='0' bgcolor='#ffffff' data-bgcolor='Box9BGcolor' style='border-radius:4px' class='container'>
  
  <tbody><tr>
    <td><table width='100%' border='0' align='center' cellpadding='0' cellspacing='0' class='container'>
      
        <tbody><tr>
          <td height='20' align='center' valign='middle' class='mobile'></td>
        </tr>
        <tr>
      <td height='20' align='center' valign='middle' class='mobile' style='font-size:12px; line-height:18px;'>
       
        <table class='container' cellspacing='0' cellpadding='0' align='center' border='0' width='500'>
          
            <tbody>
            
            <tr>
              <td align='justify' class='padding-copy' style='padding: 5px 0 5px 0; font-size: 14px; line-height: 30px; font-family: Open Sans; color: #232527;'><b>Team,</b>
<br> Following are the details of the organization, who is interested in partnering with us for Digital Summit 2017.

 </td>
              </tr>
            <tr>
              
              </tr><tr></tr>
            <tr><td><table width='100%' cellspacing='0' cellpadding='0' border='0'><tbody><tr>
              
              </tr><tr></tr></tbody></table></td></tr>
            <tr>
              
            </tr>
            
            
            <tr>
              
              </tr>
            
          </tbody></table>
        <!-- End Content -->
      </td>
        </tr>
        <tr>
          
        </tr>
        
    </tbody></table></td>
  </tr>
  </tbody></table><table width='600' cellspacing='0' cellpadding='0' bgcolor='#ffffff' data-bgcolor='Box9BGcolor' style='border-radius:4px' class='container'>
  
  <tbody><tr>
    <td><table width='100%' border='0' align='center' cellpadding='0' cellspacing='0' class='container'>
      
        <tbody><tr>
          
        </tr>
        <tr>
      <td height='20' align='center' valign='middle' class='mobile' style='font-size:12px; line-height:18px;'>
        <!-- Start Content -->
        <table class='container' cellspacing='0' cellpadding='0' align='justify' border='0' width='500'>
          
            <tbody>
            
            <tr><td style='padding: 5px 0 5px 0; font-size: 14px; line-height: 30px; font-family: Open Sans; color: #232527;' class='padding-copy'><b>Name :</b> $partnerName<br>
							  <b>Organization Name :</b> $organizationName <br>
							  <b>Designtation :</b> $designation<br>
							  
							 
							  <b>Email Address :</b> $email <br>
  <b>Phone Number :</b> $phoneNumber<br>
  
							    <b>Why do you want to be a partner? :</b> $reasonTobePartner<br>
   
							  </td></tr>
            <tr>
              
              </tr><tr></tr>
            <tr><td><table width='100%' cellspacing='0' cellpadding='0' border='0'><tbody><tr>
              
              </tr><tr></tr></tbody></table></td></tr>
            <tr>
              
            </tr>
            
            
            <tr>
              
              </tr>
            
          </tbody></table>
        <!-- End Content -->
      </td>
        </tr>
        <tr>
          
        </tr>
        
    </tbody></table></td>
  </tr>
  </tbody></table><table width='600' cellspacing='0' cellpadding='0' bgcolor='#ffffff' data-bgcolor='Box9BGcolor' style='border-radius:4px' class='container'>
  
  <tbody><tr>
    <td><table width='500' border='0' align='center' cellpadding='0' cellspacing='0' class='container'>
      
        <tbody><tr>
          
        </tr><tr><td align='justify' class='padding-copy' style='padding: 5px 0 5px 0; border-bottom: 1px dashed #2368a0; font-size: 14px; line-height: 25px; font-family: Open Sans; color: #232527;'></td></tr>
        <tr>
      <td height='20' align='center' valign='middle' class='mobile' style='font-size:12px; line-height:18px;'>
        <!-- Start Content -->
        <table class='container' cellspacing='0' cellpadding='0' align='center' border='0' width='500'>
          
            <tbody>
            
            <tr><td style='padding: 5px 0 5px 0; font-size: 14px; line-height: 30px; font-family: Open Sans; color: #8c8c8c; font-style: normal;' class='padding-copy' align='left'>Thanks &amp; Regards,<br><b>Digital Summit 2017,</b><br><b> Miracle Software Systems, Inc. </b><br><b>Email :</b> <a href='mailto: apcloud@miraclesoft.com' style='font-size: 14px;color:#252327;text-decoration:none; font-family: Open Sans; color: #8c8c8c; font-style: normal'>apcloud@miraclesoft.com</a> <br><b>Phone :</b>+91-891-6623556<br>
							 
							  </td></tr>
            <tr>
              
              </tr><tr></tr>
            <tr><td><table width='100%' cellspacing='0' cellpadding='0' border='0'><tbody><tr>
              
              </tr><tr></tr></tbody></table></td></tr>
            <tr>
              
            </tr>
            
            
            <tr>
              
              </tr>
            
          </tbody></table>
        <!-- End Content -->
      </td>
        </tr>
        <tr>
          
        </tr>
        
    </tbody></table></td>
  </tr>
  </tbody></table>

                          
                          
                            <!-- End Container -->

                        </td>
                    </tr>
                </tbody></table><table width='100%' data-module='Notif4' align='center' cellpadding='0' cellspacing='0' border='0' class='wrapper' bgcolor='#ececec' data-bgcolor='MainBG_Color5'>
                    
                      <tbody><tr>
                        <td align='center'>

                            <!-- Start Container -->
                          <table width='600' border='0' align='center' cellpadding='0' cellspacing='0' bgcolor='#ffffff' style='border-radius:25px' class='container'>
                                 
                                   <tbody><tr>
                                     <td align='center' bgcolor='#42729B' style=' border-top-left-radius:4px; border-top-right-radius:4px; font-size: 35px; line-height: 30px; color: #ffffff; font-weight: 700;'></td>
                                   </tr>
                                   <tr>
                                     <td align='center' class='mobile'><table class='container' style='border-bottom-left-radius:4px; border-bottom-right-radius:4px' data-bgcolor='FootBoxBG_Color' bgcolor='#232527' border='0' cellspacing='0' cellpadding='0' width='100%'>
                                <tbody><tr><td align='center' height='30' class='mobile'></td>
                                </tr><tr>
                                                                           <td width='600' align='center' style='font-size:0!important'>
                                                                              <div style='width:100%;display:inline-block;vertical-align:top;font-size:normal;max-width:50px'>
                                                                                 <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                    <tbody>
                                                                                       <tr>
                                                                                          <td style='padding:0 10px' align='center'>
                                                                                             <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                                <tbody>
                                                                                                   <tr>
                                                                                                      <td style='height:10px;line-height:10px' height='10'></td>
                                                                                                   </tr>
                                                                                                   <tr>
                                                                                                      <td style='line-height:0!important' align='center'>
                                                                                                         <a style='text-decoration:none;display:inline-block' href='https://www.facebook.com/DigitalSummit16/' target='blank'>
                                                                                                         <img src='http://www.miraclesoft.com/images/newsletters/2016/September/facebook-1.png' alt='socials1' width='30'>
                                                                                                         </a>
                                                                                                      </td>
                                                                                                   </tr>
                                                                                                </tbody>
                                                                                             </table>
                                                                                          </td>
                                                                                       </tr>
                                                                                    </tbody>
                                                                                 </table>
                                                                              </div>
                                                                              <div style='width:100%;display:inline-block;vertical-align:top;font-size:normal;max-width:50px'>
                                                                                 <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                    <tbody>
                                                                                       <tr>
                                                                                          <td style='padding:0 10px' align='center'>
                                                                                             <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                                <tbody>
                                                                                                   <tr>
                                                                                                      <td style='height:10px;line-height:10px' height='10'></td>
                                                                                                   </tr>
                                                                                                   <tr>
                                                                                                      <td style='line-height:0!important' align='center'>
                                                                                                         <a style='text-decoration:none;display:inline-block' href='https://plus.google.com/104381127288956493644' target='blank'>
                                                                                                         <img src='http://www.miraclesoft.com/images/newsletters/2016/September/google-plus-2.png' alt='socials1' width='30'>
                                                                                                         </a>
                                                                                                      </td>
                                                                                                   </tr>
                                                                                                </tbody>
                                                                                             </table>
                                                                                          </td>
                                                                                       </tr>
                                                                                    </tbody>
                                                                                 </table>
                                                                              </div>
                                                                              <div style='width:100%;display:inline-block;vertical-align:top;font-size:normal;max-width:50px'>
                                                                                 <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                    <tbody>
                                                                                       <tr>
                                                                                          <td style='padding:0 10px' align='center'>
                                                                                             <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                                <tbody>
                                                                                                   <tr>
                                                                                                      <td style='height:10px;line-height:10px' height='10'></td>
                                                                                                   </tr>
                                                                                                   <tr>
                                                                                                      <td style='line-height:0!important' align='center'>
                                                                                                         <a style='text-decoration:none;display:inline-block' href='https://www.linkedin.com/groups/10313125' target='blank'>
                                                                                                         <img src='http://www.miraclesoft.com/images/newsletters/2016/September/linkedin-2.png' alt='socials1' width='30'>
                                                                                                         </a>
                                                                                                      </td>
                                                                                                   </tr>
                                                                                                </tbody>
                                                                                             </table>
                                                                                          </td>
                                                                                       </tr>
                                                                                    </tbody>
                                                                                 </table>
                                                                              </div>
                                                                              <div style='width:100%;display:inline-block;vertical-align:top;font-size:normal;max-width:50px'>
                                                                                 <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                    <tbody>
                                                                                       <tr>
                                                                                          <td style='padding:0 10px' align='center'>
                                                                                             <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                                <tbody>
                                                                                                   <tr>
                                                                                                      <td style='height:10px;line-height:10px' height='10'></td>
                                                                                                   </tr>
                                                                                                   <tr>
                                                                                                      <td style='line-height:0!important' align='center'>
                                                                                                         <a style='text-decoration:none;display:inline-block' href='https://www.flickr.com/people/digitalsummit/' target='blank'>
                                                                                                         <img src='http://www.miraclesoft.com/images/newsletters/2016/September/flickr-1.png' alt='socials1' width='30'>
                                                                                                         </a>
                                                                                                      </td>
                                                                                                   </tr>
                                                                                                </tbody>
                                                                                             </table>
                                                                                          </td>
                                                                                       </tr>
                                                                                    </tbody>
                                                                                 </table>
                                                                              </div>
                                                                              <div style='width:100%;display:inline-block;vertical-align:top;font-size:normal;max-width:50px'>
                                                                                 <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                    <tbody>
                                                                                       <tr>
                                                                                          <td style='padding:0 10px' align='center'>
                                                                                             <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                                <tbody>
                                                                                                   <tr>
                                                                                                      <td style='height:10px;line-height:10px' height='10'></td>
                                                                                                   </tr>
                                                                                                   <tr>
                                                                                                      <td style='line-height:0!important' align='center'>
                                                                                                         <a style='text-decoration:none;display:inline-block' href='https://twitter.com/andhracloud' target='blank'>
                                                                                                         <img src='http://www.miraclesoft.com/images/newsletters/2016/September/twitter-2.png' alt='socials2' width='30'>
                                                                                                         </a>
                                                                                                      </td>
                                                                                                   </tr>
                                                                                                </tbody>
                                                                                             </table>
                                                                                          </td>
                                                                                       </tr>
                                                                                    </tbody>
                                                                                 </table>
                                                                              </div>
                                                                              <div style='width:100%;display:inline-block;vertical-align:top;font-size:normal;max-width:50px'>
                                                                                 <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                    <tbody>
                                                                                       <tr>
                                                                                          <td style='padding:0 10px' align='center'>
                                                                                             <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                                <tbody>
                                                                                                   <tr>
                                                                                                      <td style='height:10px;line-height:10px' height='10'></td>
                                                                                                   </tr>
                                                                                                   <tr>
                                                                                                      <td style='line-height:0!important' align='center'>
                                                                                                         <a style='text-decoration:none;display:inline-block' href='https://www.youtube.com/c/DigitalSummitVizag' target='blank'>
                                                                                                         <img src='http://www.miraclesoft.com/images/newsletters/2016/September/youtube-3.png' alt='socials3' width='30'>
                                                                                                         </a>
                                                                                                      </td>
                                                                                                   </tr>
                                                                                                </tbody>
                                                                                             </table>
                                                                                          </td>
                                                                                       </tr>
                                                                                    </tbody>
                                                                                 </table>
                                                                              </div>
                                                                           </td>
                                                                        </tr>
                                    <tr><td align='center' height='30' class='mobile'></td>
                                </tr>
                            </tbody></table></td>
                                   </tr>
                             </tbody></table>
                            <!-- End Container -->

                        </td>
                    </tr>
                </tbody></table><table width='100%' data-module='Notif5' align='center' cellpadding='0' cellspacing='0' border='0' class='wrapper' bgcolor='#ECECEC' data-bgcolor='MainBG_Color22'>
                    
                      <tbody><tr>
                        <td height='40'></td>
                      </tr>
                      <tr>
                        <td align='center'>

                            <!-- Start Container -->
                            <table width='600' cellpadding='0' cellspacing='0' border='0' class='container'>
                                
                                  <tbody><tr>
                                    <td align='center' class='mobile' style='font-family: OpenSans, Arial, sans-serif; font-size:12px; line-height:24px;'>
                                        <!-- Start Content -->
                                        <table width='90%' border='0' align='center' cellpadding='0' cellspacing='0' class='container'>
                                          
                                            <tbody><tr>
                                            <td style='font-size: 15px; line-height: 20px;font-family: Open Sans;color:#666666;' align='center'>© 2017 | Miracle Software Systems, Inc.<br></td>
                                          </tr>
                                        </tbody></table>                                        <!-- End Container -->
                                    </td>
                                  </tr>
                            </tbody></table>
                            
                            <!-- End Container -->

                        </td>
                    </tr>
                    
                    <tr>
                        <td height='40'> </td><!-- Spacer -->
                    </tr>
                </tbody></table><div id='edit_link' class='hidden' style='display: none;'>

						<!-- Close Link -->
						<div class='close_link'></div>

						<!-- Edit Link Value -->
						<input type='text' id='edit_link_value' class='createlink' placeholder='Your URL'>

						<!-- Change Image Wrapper-->
						<div id='change_image_wrapper'>

							<!-- Change Image Tooltip -->
							<div id='change_image'>

								<!-- Change Image Button -->
								<p id='change_image_button'>Change &nbsp; <span class='pixel_result'></span></p>

							</div>

							<!-- Change Image Link Button -->
							<input type='button' value='' id='change_image_link'>

							<!-- Remove Image -->
							<input type='button' value='' id='remove_image'>

						</div>

						<!-- Tooltip Bottom Arrow-->
						<div id='tip'></div>

					</div></body></html>		" ); // Put your body of the message you can place html code here aaaaaaaaaaaaaaaaa
		                          
		// $mail->AddAttachment("images/asif18-logo.png"); //Attach a file here if any or comment this line,
		$send = $mail->Send (); // Send the mails
		if ($send) {
			// echo '<center><h3 style="color:#009933;">Mail sent successfully</h3></center>';
			
			return "Mail sent successfully";
		} else {
			// echo '<center><h3 style="color:#FF3300;">Mail error: </h3></center>'.$mail->ErrorInfo;
			throw new Exception ( $mail->ErrorInfo );
		}
	}
	
	/*
	 * Pahni mails start
	 * Date : 11/15/2017
	 *
	 */
	function sendConfApplicantDetails($tempFirstName, $tempLastName, $tempEmail, $tempMobileNumber, $rootPath, $tempSkillSet, $tempComments, $randomKey, $filname, $tempApplyingFor, $tempGraduation, $tempGraduationPercentage, $tempPostGraduation, $tempPostGraduationPercentage, $tempYearsofExperience, $tempLastDrawnMonthlySalary, $consultantId) {
		$mail = new PHPMailer (); // call the class
		$mail->IsSMTP ();
		$mail->Host = SMTP_HOST; // Hostname of the mail server
		$mail->Port = SMTP_PORT; // Port of the SMTP like to be 25, 80, 465 or 587
		$mail->SMTPAuth = true; // Whether to use SMTP authentication
		$mail->SMTPSecure = SMTP_SECURE;
		$mail->Username = SMTP_UNAME; // Username for SMTP authentication any valid email created in your domain
		$mail->Password = SMTP_PWORD; // Password for SMTP authentication
		$mail->AddReplyTo ( "mssapp@miraclesoft.com", "Digital Summit 2017" ); // reply-to address
		$mail->SetFrom ( "mssapp@miraclesoft.com", "Digital Summit 2017" ); // From address of the mail
		                                                                 // $mail->AddBCC("vkandregula@miraclesoft.com", "Venkat Ram Prasad Kandregula");
		                                                                 // $mail->AddBCC("santu0645@gmail.com", "Santosh Kola");
		                                                                 // AddBCC
		                                                                 // put your while loop here like below,
		$mail->Subject = "Digital Summit 2017 Applicant details:" . $tempApplyingFor; // Subject od your mail
		                                                                            // $mail->AddAddress("skola2@miraclesoft.com", "Santosh Kola"); //To address who will receive this email
		                                                                            // $mail->AddAddress(CONTACT_US, "info"); //To address who will receive this email
		$myArray = explode ( ';', DIGITAL_SUMMIT_JOB_APPLICANTS );
		for($i = 0; $i < count ( $myArray ); ++ $i) {
			$innerArray = explode ( ',', $myArray [$i] );
			$mail->AddAddress ( $innerArray [0], $innerArray [1] );
		}
		// $mail->MsgHTML("<b>Hi, your first SMTP mail has been received. Great Job!.. <br/><br/>by <a href='http://www.asif18.com/7/php/send-mails-using-smtp-in-php-by-gmail-server-or-own-domain-server/'>Asif18</a></b>"); //Put your body of the message you can place html code here
		$mail->MsgHTML ( "<!DOCTYPE html>
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
				<tr><td><table width='100%' border='0' cellspacing='0' cellpadding='0'><tr><td align='center' style='font-size: 26px; font-family: calibri; color: #2368a0; padding-top: 10px;' class='padding-copy'><b>Digital Summit 2017 Job Application</b></td></tr></table></td></tr></table></td></tr>
				<tr><td bgcolor='#ffffff' align='center' style='padding: 15px;' class='padding'>
				<table border='0' cellpadding='0' cellspacing='0' width='100%' style='max-width: 500px;' class='responsive-table'>
				<tr><td><table width='100%' border='0' cellspacing='0' cellpadding='0'>
				<tr><td align='left' style='padding: 5px 0 5px 0; font-size: 14px; line-height: 25px; font-family: calibri; color: #232527;' class='padding-copy'><b>Team,</b>
				<br> Following are the details of job applicant.</td></tr>
				<tr><td style='padding: 5px 0 5px 0; font-size: 14px; line-height: 25px; font-family: calibri; color: #232527;' class='padding-copy'><b>Name:</b> $tempFirstName.$tempLastName<br/>
				<b>Email:</b> $tempEmail<br/>
				<b>Mobile Number:</b> $tempMobileNumber<br/>
				<b>Skill Set:</b> $tempSkillSet<br/>
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
				<tr><td><table width='100%' border='0' cellspacing='0' cellpadding='0'><tr><td align='left' style='padding: 5px 0 5px 0; font-size: 14px; line-height: 22px; font-family: calibri; color: #8c8c8c; font-style: normal;' class='padding-copy'>Thanks & Regards,<br/><b>Digital Summit 2017,</b><br/><b> Miracle Software Systems, Inc. </b><br/><b>Email : corporate@miraclesoft.com </b><br/><b>Phone : 248-2331185</b><br/>
				
				</font></td></tr></table></td></tr>
				
				
				
				</table></td></tr><tr><td bgcolor='#ffffff' align='center' style='padding: 15px 0px;'>
				<table width='100%' border='0' cellspacing='0' cellpadding='0' align='center' style='max-width: 500px;' class='responsive-table'><tr><td width='200' align='center' style='text-align: center;'><table width='200' cellpadding='0' cellspacing='0' align='center'><tr><td width='10'><a href='https://www.facebook.com/andhracloud' target='_blank'><img src='http://www.miraclesoft.com/images/newsletters/facebook.png' alt='facebook' width='26' height='auto' data-max-width='40' data-customIcon='true' ></a></td>
				<td width='10'><a href='https://plus.google.com/104381127288956493644/posts/p/pub' target='_blank'><img src='http://www.miraclesoft.com/images/newsletters/googleplus.png' alt='facebook' width='26' height='auto' data-max-width='40' data-customIcon='true' ></a></td><td width='10'><a href='https://www.linkedin.com/groups/10313125' target='_blank'><img src='http://www.miraclesoft.com/images/newsletters/linkedin.png' alt='facebook' width='26' height='auto' data-max-width='40' data-customIcon='true' ></a></td><td width='10'><a href='https://www.youtube.com/channel/UC6JwAnSWoF2eMEz6RnDWJhg' target='_blank'><img src='http://www.miraclesoft.com/images/newsletters/youtube.png' alt='facebook' width='26' height='auto' data-max-width='40' data-customIcon='true' ></a></td><td width='10'><a href='https://twitter.com/andhracloud' target='_blank'><img src='http://www.miraclesoft.com/images/newsletters/twitter.png' alt='facebook' width='26' height='auto' data-max-width='40' data-customIcon='true' ></a></td></tr></table></td></tr>
				<tr><td height='10'></td></tr><tr><td align='center' style='font-size: 14px; line-height: 20px; font-family: calibri; color:#666666;'>&copy; 2017 Miracle Software Systems<br></td></tr></table></td></tr></table></body></html>
				
				" ); // Put your body of the message you can place html code here
		    // $mail->AddAttachment("images/asif18-logo.png"); //Attach a file here if any or comment this line,
		$send = $mail->Send (); // Send the mails
		if ($send) {
			// echo '<center><h3 style="color:#009933;">Mail sent successfully</h3></center>';
			
			return "Mail sent successfully";
		} else {
			// echo '<center><h3 style="color:#FF3300;">Mail error: </h3></center>'.$mail->ErrorInfo;
			throw new Exception ( $mail->ErrorInfo );
		}
	}
	function sendConfApplicantAcknowledgement($fname, $lname, $email) {
		$mail = new PHPMailer (); // call the class
		$mail->IsSMTP ();
		$mail->Host = SMTP_HOST; // Hostname of the mail server
		$mail->Port = SMTP_PORT; // Port of the SMTP like to be 25, 80, 465 or 587
		$mail->SMTPAuth = true; // Whether to use SMTP authentication
		$mail->SMTPSecure = SMTP_SECURE;
		$mail->Username = SMTP_UNAME; // Username for SMTP authentication any valid email created in your domain
		$mail->Password = SMTP_PWORD; // Password for SMTP authentication
		$mail->AddReplyTo ( "mssapp@miraclesoft.com", "Digital Summit 2017" ); // reply-to address
		$mail->SetFrom ( "mssapp@miraclesoft.com", "Digital Summit 2017" ); // From address of the mail
		                                                                 // put your while loop here like below,
		$mail->Subject = "Digital Summit 2017 Job Applcation Applied Successfully"; // Subject od your mail
		                                                                            // $mail->AddBCC("vkandregula@miraclesoft.com", "Venkat Ram Prasad Kandregula");
		                                                                            // $mail->AddAddress("skola2@miraclesoft.com", "Santosh Kola"); //To address who will receive this email
		                                                                            // $mail->AddAddress(CONTACT_US, "info"); //To address who will receive this email
		                                                                            // $myArray = explode(';', DIGITAL_SUMMIT_REGISTRAINTS);
		                                                                            // for ($i = 0; $i < count($myArray); ++$i) {
		                                                                            // $innerArray = explode(',', $myArray[$i]);
		$mail->AddAddress ( $email, $fname );
		// }
		// $mail->MsgHTML("<b>Hi, your first SMTP mail has been received. Great Job!.. <br/><br/>by <a href='http://www.asif18.com/7/php/send-mails-using-smtp-in-php-by-gmail-server-or-own-domain-server/'>Asif18</a></b>"); //Put your body of the message you can place html code here
		$mail->MsgHTML ( "<!DOCTYPE html>
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
				<tr><td><table width='100%' border='0' cellspacing='0' cellpadding='0'><tr><td align='center' style='font-size: 26px; font-family: calibri; color: #2368a0; padding-top: 10px;' class='padding-copy'><b>Digital Summit 2017 applied successfully</b></td></tr></table></td></tr></table></td></tr>
				<tr><td bgcolor='#ffffff' align='center' style='padding: 15px;' class='padding'>
				<table border='0' cellpadding='0' cellspacing='0' width='100%' style='max-width: 500px;' class='responsive-table'>
				<tr><td><table width='100%' border='0' cellspacing='0' cellpadding='0'>
				<tr><td align='left' style='padding: 5px 0 5px 0; font-size: 14px; line-height: 25px; font-family: calibri; color: #232527;' class='padding-copy'><b>Hello $citizenName,</b>
				<br> Thank you for showing your intrest to participate in Digital Summit 2017. One of our Digital Summit representative will contact you shortly  </td></tr>
				
				
				
				<tr></td>
				<tr><td align='justify' style='padding: 5px 0 5px 0; border-bottom: 1px dashed #2368a0; font-size: 14px; line-height: 25px; font-family: calibri; color: #232527;' class='padding-copy'></td></tr></tr></table></td></tr>
				<tr><td><table width='100%' border='0' cellspacing='0' cellpadding='0'><tr><td align='left' style='padding: 5px 0 5px 0; font-size: 14px; line-height: 22px; font-family: calibri; color: #8c8c8c; font-style: normal;' class='padding-copy'>Thanks & Regards,<br/><b>Digital Summit 2017,</b><br/><b> Miracle Software Systems, Inc. </b><br/><b>Email : corporate@miraclesoft.com </b><br/><b>Phone : 248-2331185</b><br/>
				
				</font></td></tr></table></td></tr>
				
				
				
				</table></td></tr><tr><td bgcolor='#ffffff' align='center' style='padding: 15px 0px;'>
				<table width='100%' border='0' cellspacing='0' cellpadding='0' align='center' style='max-width: 500px;' class='responsive-table'><tr><td width='200' align='center' style='text-align: center;'><table width='200' cellpadding='0' cellspacing='0' align='center'><tr><td width='10'><a href='https://www.facebook.com/andhracloud' target='_blank'><img src='http://www.miraclesoft.com/images/newsletters/facebook.png' alt='facebook' width='26' height='auto' data-max-width='40' data-customIcon='true' ></a></td>
				<td width='10'><a href='https://plus.google.com/104381127288956493644/posts/p/pub' target='_blank'><img src='http://www.miraclesoft.com/images/newsletters/googleplus.png' alt='facebook' width='26' height='auto' data-max-width='40' data-customIcon='true' ></a></td><td width='10'><a href='https://www.linkedin.com/groups/10313125' target='_blank'><img src='http://www.miraclesoft.com/images/newsletters/linkedin.png' alt='facebook' width='26' height='auto' data-max-width='40' data-customIcon='true' ></a></td><td width='10'><a href='https://www.youtube.com/channel/UC6JwAnSWoF2eMEz6RnDWJhg' target='_blank'><img src='http://www.miraclesoft.com/images/newsletters/youtube.png' alt='facebook' width='26' height='auto' data-max-width='40' data-customIcon='true' ></a></td><td width='10'><a href='https://twitter.com/andhracloud' target='_blank'><img src='http://www.miraclesoft.com/images/newsletters/twitter.png' alt='facebook' width='26' height='auto' data-max-width='40' data-customIcon='true' ></a></td></tr></table></td></tr>
				<tr><td height='10'></td></tr><tr><td align='center' style='font-size: 14px; line-height: 20px; font-family: calibri; color:#666666;'>&copy; 2017 Miracle Software Systems<br></td></tr></table></td></tr></table></body></html>
				
				" ); // Put your body of the message you can place html code here
		    // $mail->AddAttachment("images/asif18-logo.png"); //Attach a file here if any or comment this line,
		$send = $mail->Send (); // Send the mails
		if ($send) {
			// echo '<center><h3 style="color:#009933;">Mail sent successfully</h3></center>';
			
			return "Mail sent successfully";
		} else {
			// echo '<center><h3 style="color:#FF3300;">Mail error: </h3></center>'.$mail->ErrorInfo;
			throw new Exception ( $mail->ErrorInfo );
		}
	}
	function sendConfCulturalDetails($tempCompetitionType, $tempCollegeName, $tempLeaderName, $tempLeaderEmail, $tempLeaderPhoneNumber, $tempTeamSize, $tempTeamMemberNames, $tempComments) {
		echo "sendConfCulturalDetails";
		$mail = new PHPMailer (); // call the class
		$mail->IsSMTP ();
		$mail->Host = SMTP_HOST; // Hostname of the mail server
		$mail->Port = SMTP_PORT; // Port of the SMTP like to be 25, 80, 465 or 587
		$mail->SMTPAuth = true; // Whether to use SMTP authentication
		$mail->SMTPSecure = SMTP_SECURE;
		$mail->Username = SMTP_UNAME; // Username for SMTP authentication any valid email created in your domain
		$mail->Password = SMTP_PWORD; // Password for SMTP authentication
		$mail->AddReplyTo ( "mssapp@miraclesoft.com", "Digital Summit 2017" ); // reply-to address
		$mail->SetFrom ( "mssapp@miraclesoft.com", "Digital Summit 2017" ); // From address of the mail
		                                                                 // $mail->AddBCC("vkandregula@miraclesoft.com", "Venkat Ram Prasad Kandregula");
		                                                                 // $mail->AddBCC("santu0645@gmail.com", "Santosh Kola");
		                                                                 // AddBCC
		                                                                 // put your while loop here like below,
		$mail->Subject = "Digital Summit 2017 Cultural Registration details"; // Subject od your mail
		                                                                      // $mail->AddAddress("skola2@miraclesoft.com", "Santosh Kola"); //To address who will receive this email
		                                                                      // $mail->AddAddress(CONTACT_US, "info"); //To address who will receive this email
		$myArray = explode ( ';', DIGITAL_SUMMIT_CULTURAL );
		for($i = 0; $i < count ( $myArray ); ++ $i) {
			$innerArray = explode ( ',', $myArray [$i] );
			$mail->AddAddress ( $innerArray [0], $innerArray [1] );
		}
		// $mail->MsgHTML("<b>Hi, your first SMTP mail has been received. Great Job!.. <br/><br/>by <a href='http://www.asif18.com/7/php/send-mails-using-smtp-in-php-by-gmail-server-or-own-domain-server/'>Asif18</a></b>"); //Put your body of the message you can place html code here
		$mail->MsgHTML ( "<!DOCTYPE html>
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
				<tr><td><table width='100%' border='0' cellspacing='0' cellpadding='0'><tr><td align='center' style='font-size: 26px; font-family: calibri; color: #2368a0; padding-top: 10px;' class='padding-copy'><b>Digital Summit 2017 Cultural Competition Registration Details</b></td></tr></table></td></tr></table></td></tr>
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
				<b>Team Member Names:</b> $tempTeamMemberNames<br/>
				<b>Comments(Optional):</b> $tempComments<br/>
				
				
				
				</td></tr><tr></td>
				<tr><td align='justify' style='padding: 5px 0 5px 0; border-bottom: 1px dashed #2368a0; font-size: 14px; line-height: 25px; font-family: calibri; color: #232527;' class='padding-copy'></td></tr></tr></table></td></tr>
				<tr><td><table width='100%' border='0' cellspacing='0' cellpadding='0'><tr><td align='left' style='padding: 5px 0 5px 0; font-size: 14px; line-height: 22px; font-family: calibri; color: #8c8c8c; font-style: normal;' class='padding-copy'>Thanks & Regards,<br/><b>Digital Summit 2017,</b><br/><b> Miracle Software Systems, Inc. </b><br/><b>Email : corporate@miraclesoft.com </b><br/><b>Phone : 248-2331185</b><br/>
				
				</font></td></tr></table></td></tr>
				
				
				
				</table></td></tr><tr><td bgcolor='#ffffff' align='center' style='padding: 15px 0px;'>
				<table width='100%' border='0' cellspacing='0' cellpadding='0' align='center' style='max-width: 500px;' class='responsive-table'><tr><td width='200' align='center' style='text-align: center;'><table width='200' cellpadding='0' cellspacing='0' align='center'><tr><td width='10'><a href='https://www.facebook.com/andhracloud' target='_blank'><img src='http://www.miraclesoft.com/images/newsletters/facebook.png' alt='facebook' width='26' height='auto' data-max-width='40' data-customIcon='true' ></a></td>
				<td width='10'><a href='https://plus.google.com/104381127288956493644/posts/p/pub' target='_blank'><img src='http://www.miraclesoft.com/images/newsletters/googleplus.png' alt='facebook' width='26' height='auto' data-max-width='40' data-customIcon='true' ></a></td><td width='10'><a href='https://www.linkedin.com/groups/10313125' target='_blank'><img src='http://www.miraclesoft.com/images/newsletters/linkedin.png' alt='facebook' width='26' height='auto' data-max-width='40' data-customIcon='true' ></a></td><td width='10'><a href='https://www.youtube.com/channel/UC6JwAnSWoF2eMEz6RnDWJhg' target='_blank'><img src='http://www.miraclesoft.com/images/newsletters/youtube.png' alt='facebook' width='26' height='auto' data-max-width='40' data-customIcon='true' ></a></td><td width='10'><a href='https://twitter.com/andhracloud' target='_blank'><img src='http://www.miraclesoft.com/images/newsletters/twitter.png' alt='facebook' width='26' height='auto' data-max-width='40' data-customIcon='true' ></a></td></tr></table></td></tr>
				<tr><td height='10'></td></tr><tr><td align='center' style='font-size: 14px; line-height: 20px; font-family: calibri; color:#666666;'>&copy; 2017 Miracle Software Systems<br></td></tr></table></td></tr></table></body></html>
				
				" ); // Put your body of the message you can place html code here
		    // $mail->AddAttachment("images/asif18-logo.png"); //Attach a file here if any or comment this line,
		$send = $mail->Send (); // Send the mails
		if ($send) {
			// echo '<center><h3 style="color:#009933;">Mail sent successfully</h3></center>';
			
			return "Mail sent successfully";
		} else {
			// echo '<center><h3 style="color:#FF3300;">Mail error: </h3></center>'.$mail->ErrorInfo;
			throw new Exception ( $mail->ErrorInfo );
		}
	}
	function sendConfCulturalAcknowledgement($tempLeaderName, $tempLeaderEmail) {
		$mail = new PHPMailer (); // call the class
		$mail->IsSMTP ();
		$mail->Host = SMTP_HOST; // Hostname of the mail server
		$mail->Port = SMTP_PORT; // Port of the SMTP like to be 25, 80, 465 or 587
		$mail->SMTPAuth = true; // Whether to use SMTP authentication
		$mail->SMTPSecure = SMTP_SECURE;
		$mail->Username = SMTP_UNAME; // Username for SMTP authentication any valid email created in your domain
		$mail->Password = SMTP_PWORD; // Password for SMTP authentication
		$mail->AddReplyTo ( "mssapp@miraclesoft.com", "Digital Summit 2017" ); // reply-to address
		$mail->SetFrom ( "mssapp@miraclesoft.com", "Digital Summit 2017" ); // From address of the mail
		                                                                 // put your while loop here like below,
		$mail->Subject = "Digital Summit 2017 Cultural Registration Successfull"; // Subject od your mail
		                                                                          // $mail->AddBCC("vkandregula@miraclesoft.com", "Venkat Ram Prasad Kandregula");
		                                                                          // $mail->AddAddress("skola2@miraclesoft.com", "Santosh Kola"); //To address who will receive this email
		                                                                          // $mail->AddAddress(CONTACT_US, "info"); //To address who will receive this email
		                                                                          // $myArray = explode(';', DIGITAL_SUMMIT_REGISTRAINTS);
		                                                                          // for ($i = 0; $i < count($myArray); ++$i) {
		                                                                          // $innerArray = explode(',', $myArray[$i]);
		$mail->AddAddress ( $tempLeaderEmail, $tempLeaderName );
		// }
		// $mail->MsgHTML("<b>Hi, your first SMTP mail has been received. Great Job!.. <br/><br/>by <a href='http://www.asif18.com/7/php/send-mails-using-smtp-in-php-by-gmail-server-or-own-domain-server/'>Asif18</a></b>"); //Put your body of the message you can place html code here
		$mail->MsgHTML ( "<!DOCTYPE html>
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
				<tr><td><table width='100%' border='0' cellspacing='0' cellpadding='0'><tr><td align='center' style='font-size: 26px; font-family: calibri; color: #2368a0; padding-top: 10px;' class='padding-copy'><b>Digital Summit 2017 cultural competition registration successfull</b></td></tr></table></td></tr></table></td></tr>
				<tr><td bgcolor='#ffffff' align='center' style='padding: 15px;' class='padding'>
				<table border='0' cellpadding='0' cellspacing='0' width='100%' style='max-width: 500px;' class='responsive-table'>
				<tr><td><table width='100%' border='0' cellspacing='0' cellpadding='0'>
				<tr><td align='left' style='padding: 5px 0 5px 0; font-size: 14px; line-height: 25px; font-family: calibri; color: #232527;' class='padding-copy'><b>Hello $tempLeaderName,</b>
				<br> Thank you for showing your interest to participate in Digital Summit 2017 cultural competition. One of our Digital Summit representative will contact you shortly.  </td></tr>
				
				
				
				<tr></td>
				<tr><td align='justify' style='padding: 5px 0 5px 0; border-bottom: 1px dashed #2368a0; font-size: 14px; line-height: 25px; font-family: calibri; color: #232527;' class='padding-copy'></td></tr></tr></table></td></tr>
				<tr><td><table width='100%' border='0' cellspacing='0' cellpadding='0'><tr><td align='left' style='padding: 5px 0 5px 0; font-size: 14px; line-height: 22px; font-family: calibri; color: #8c8c8c; font-style: normal;' class='padding-copy'>Thanks & Regards,<br/><b>Digital Summit 2017,</b><br/><b> Miracle Software Systems, Inc. </b><br/><b>Email : corporate@miraclesoft.com </b><br/><b>Phone : 248-2331185</b><br/>
				
				</font></td></tr></table></td></tr>
				
				
				
				</table></td></tr><tr><td bgcolor='#ffffff' align='center' style='padding: 15px 0px;'>
				<table width='100%' border='0' cellspacing='0' cellpadding='0' align='center' style='max-width: 500px;' class='responsive-table'><tr><td width='200' align='center' style='text-align: center;'><table width='200' cellpadding='0' cellspacing='0' align='center'><tr><td width='10'><a href='https://www.facebook.com/andhracloud' target='_blank'><img src='http://www.miraclesoft.com/images/newsletters/facebook.png' alt='facebook' width='26' height='auto' data-max-width='40' data-customIcon='true' ></a></td>
				<td width='10'><a href='https://plus.google.com/104381127288956493644/posts/p/pub' target='_blank'><img src='http://www.miraclesoft.com/images/newsletters/googleplus.png' alt='facebook' width='26' height='auto' data-max-width='40' data-customIcon='true' ></a></td><td width='10'><a href='https://www.linkedin.com/groups/10313125' target='_blank'><img src='http://www.miraclesoft.com/images/newsletters/linkedin.png' alt='facebook' width='26' height='auto' data-max-width='40' data-customIcon='true' ></a></td><td width='10'><a href='https://www.youtube.com/channel/UC6JwAnSWoF2eMEz6RnDWJhg' target='_blank'><img src='http://www.miraclesoft.com/images/newsletters/youtube.png' alt='facebook' width='26' height='auto' data-max-width='40' data-customIcon='true' ></a></td><td width='10'><a href='https://twitter.com/andhracloud' target='_blank'><img src='http://www.miraclesoft.com/images/newsletters/twitter.png' alt='facebook' width='26' height='auto' data-max-width='40' data-customIcon='true' ></a></td></tr></table></td></tr>
				<tr><td height='10'></td></tr><tr><td align='center' style='font-size: 14px; line-height: 20px; font-family: calibri; color:#666666;'>&copy; 2017 Miracle Software Systems<br></td></tr></table></td></tr></table></body></html>
				
				" ); // Put your body of the message you can place html code here
		    // $mail->AddAttachment("images/asif18-logo.png"); //Attach a file here if any or comment this line,
		$send = $mail->Send (); // Send the mails
		if ($send) {
			// echo '<center><h3 style="color:#009933;">Mail sent successfully</h3></center>';
			
			return "Mail sent successfully";
		} else {
			// echo '<center><h3 style="color:#FF3300;">Mail error: </h3></center>'.$mail->ErrorInfo;
			throw new Exception ( $mail->ErrorInfo );
		}
	}
	
	/*
	 * Phani mails end
	 *
	 *
	 */
	
	/*
	 * CitizenHack acknowledgement
	 * Date : 11/15/2017
	 * Author : Santosh Kola
	 */
	function sendDs17CitizenHackAcknowledge($citizenName, $email, $password, $countUserRecords) {
		$mail = new PHPMailer (); // call the class
		$mail->IsSMTP ();
		$mail->Host = SMTP_HOST; // Hostname of the mail server
		$mail->Port = SMTP_PORT; // Port of the SMTP like to be 25, 80, 465 or 587
		$mail->SMTPAuth = true; // Whether to use SMTP authentication
		$mail->SMTPSecure = SMTP_SECURE;
		$mail->Username = SMTP_UNAME; // Username for SMTP authentication any valid email created in your domain
		$mail->Password = SMTP_PWORD; // Password for SMTP authentication
		                              // $mail->AddReplyTo($email, $fname); //reply-to address
		$mail->SetFrom ( "hubbleapp@miraclesoft.com", "Digital Summit 2k17" ); // From address of the mail
		                                                                    // put your while loop here like below,
		$mail->Subject = "You have been successfully registered for Citizen Hack - DS' 17"; // Subject od your mail
		                                                                                    // $mail->AddAddress("skola2@miraclesoft.com", "Santosh Kola"); //To address who will receive this email
		$mail->AddAddress ( $email, $citizenName ); // To address who will receive this email
		                                         // $mail->MsgHTML("<b>Hi, your first SMTP mail has been received. Great Job!.. <br/><br/>by <a href='http://www.asif18.com/7/php/send-mails-using-smtp-in-php-by-gmail-server-or-own-domain-server/'>Asif18</a></b>"); //Put your body of the message you can place html code here
		                                         // $htmlContent="
		
		$htmlContent = "<html xmlns='http://www.w3.org/1999/xhtml'><head>
 <link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans'>
					
				<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0'><meta http-equiv='Content-Type' content='text/html; charset=UTF-8'><meta http-equiv='X-UA-Compatible' content='IE=edge'><title>Digital Summit 2017</title><style>

        .ReadMsgBody { width: 100%; background-color: #D2D7D3; }
        .ExternalClass { width: 100%; background-color: #D2D7D3; }
		.a { text-decoration:none; }
        body { width: 100%; background-color: #d8eaf8; margin: 0; padding: 0; -webkit-font-smoothing: ; font-family:OpenSans ,Arial, Helvetica Neue, Helvetica, sans-serif }
        @-ms-viewport{ width: device-width; }

@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 400;
  src: url('Fonts/Montserrat-Regular.ttf') format('truetype'), url('https://fonts.gstatic.com/s/montserrat/v6/zhcz-_WihjSQC0oHJ9TCYPk_vArhqVIZ0nv9q090hN8.woff2') format('woff2');
}
@font-face {
  font-family: 'Montserrat';
  font-style: Bold;
  font-weight: 700;
  src: url('Fonts/Montserrat-Bold.ttf') format('truetype'), url('https://fonts.gstatic.com/s/montserrat/v6/IQHow_FEYlDC4Gzy_m8fcoWiMMZ7xLd792ULpGE4W_Y.woff2') format('woff2');
}
@font-face {
  font-family: 'OpenSans';
  font-style: normal;
  font-weight: 400;
  src: url('Fonts/OpenSans-Regular.ttf') format('truetype'), url('https://fonts.gstatic.com/s/opensans/v13/cJZKeOuBrn4kERxqtaUH3VtXRa8TVwTICgirnJhmVJw.woff2') format('woff2');
}
@font-face {
  font-family: 'OpenSans';
  font-style: normal;
  font-weight: 600;
  src: url('Fonts/OpenSans-Semibold.ttf') format('truetype'), url('https://fonts.gstatic.com/s/opensans/v13/MTP_ySUJH_bn48VBG8sNSugdm0LZdjqr5-oayXSOefg.woff2') format('woff2');
}

@font-face {
  font-family: 'OpenSans';
  font-style: extraBold;
  font-weight: 900;
  src: url('Fonts/OpenSans-ExtraBold.ttf') format('truetype'), url('https://fonts.gstatic.com/s/opensans/v13/EInbV5DfGHOiMmvb1Xr-hugdm0LZdjqr5-oayXSOefg.woff2') format('woff2');
}
        @media only screen and (max-width: 639px){
        .wrapper{ width:100%;  padding: 0 !important; }
        }

        @media only screen and (max-width: 480px){
        .centerClass{ margin:0 auto !important; }
        .imgClass{ width:100% !important; height:auto; }
		.img{ text-align:center}
		.hide{ display:none;}
        .wrapper{ width:100%; padding: 0 !important; }
        .header{ width:100%; padding: 0 !important; background-image: url(http://placehold.it/320x400) !important; }
        .container{ width:300px;  padding: 0 !important; }
		.box{ width:250px;  padding: 0 !important; }
        .mobile{ width:300px; display:block; padding: 0 !important; text-align:center !important;}
        .mobile50{ width:300px; padding: 0 !important; text-align:center; }
        *[class='mobileOff'] { width: 0px !important; display: none !important; }
        *[class*='mobileOn'] { display: block !important; max-height:none !important; }
        }

    .MsoNormal {font-family:Montserrat, OpenSans ,Arial, Helvetica Neue, Helvetica, sans-serif !important;}
    </style>

					
				</head><body marginwidth='0' marginheight='0' style='margin-top: 0; margin-bottom: 0; padding-top: 0; padding-bottom: 0; width: 100%; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;' offset='0' topmargin='0' leftmargin='0'><table width='100%' data-module='Notif1' align='center' cellpadding='0' cellspacing='0' border='0' class='wrapper' bgcolor='#ececec' data-bgcolor='MainBG_Color5'>
                    
                      <tbody><tr>
                        <td height='50' style='font-family: OpenSans, Arial, sans-serif; font-size:10px; line-height:10px;'></td>
                      </tr>
                </tbody></table><table width='100%' data-module='Notif2' align='center' cellpadding='0' cellspacing='0' border='0' class='wrapper' bgcolor='#ececec' data-bgcolor='MainBG_Color5'>
                    
                      <tbody><tr>
                        <td align='center'>

                            <!-- Start Container -->
                            <table width='600' border='0' align='center' cellpadding='0' cellspacing='0' bgcolor='#ffffff' style='border-radius:25px' class='container'>
                                 
                                   <tbody><tr>
                                     <td style=' border-top-left-radius:4px; border-top-right-radius:4px; font-size: 35px; line-height: 30px; color: #ffffff; font-weight: 700;' bgcolor='#42729B' align='center'></td>
                                   </tr>
                                   <tr>
                                     <td align='center' class='mobile' style='font-size:12px; line-height:24px;'><table width='100%' border='0' cellspacing='0' cellpadding='0' bgcolor='#232527' data-bgcolor='BlueBoxBG_Color' style='border-top-left-radius:4px; border-top-right-radius:4px'>
                                       <tbody><tr>
                                         <td height='20'></td>
                                       </tr>
                                         <tr>
                                           <td height='20' align='center'><img mc:edit='' editable='' src='https://newsletters-2017-sivanmyc.c9users.io/October/Internal/Campaigns/ds17logo-black.png' width='170' height='auto'></td>
                                         </tr>
                                         <tr>
                                         <td height='20'></td>
                                       </tr>
                                       <tr>
                                         <td align='center' style='font-size:34px; line-height:40px; color: #ffffff; font-weight:400' data-color='H1wht Color' data-size='H1wht size' data-min='18' data-max='50' mc:edit=''></td>
                                       </tr>
                                       <tr>
                                         
                                       </tr>
                                     </tbody></table></td>
                                   </tr>
                             </tbody></table>
                            <!-- End Container -->

                        </td>
                    </tr>
                </tbody></table><table width='100%' data-module='Notif3' align='center' cellpadding='0' cellspacing='0' border='0' class='wrapper' bgcolor='#ececec' data-bgcolor='MainBG_Color5'>
                    
                      <tbody><tr>
                        <td align='center'>

                            <!-- Start Container -->
                            <table width='100%' data-module='Notif3' align='center' cellpadding='0' cellspacing='0' border='0' class='wrapper' bgcolor='#ececec' data-bgcolor='MainBG_Color5'>
                    
                      <tbody><tr>
                        <td align='center'>

                            <!-- Start Container -->
                          <table width='600' border='0' align='center' cellpadding='0' cellspacing='0' bgcolor='#ffffff' class='container' style='border-bottom:1px #ececec solid'>
                                 
                                   <tbody><tr>
                                     <td align='center' bgcolor='#42729B' style='font-size: 35px; line-height: 30px; color: #ffffff; font-weight: 700;'></td>
                                   </tr>
                                   <tr>
                                     <td height='30'></td>
                                   </tr>
                                   <tr>
                                              <td width='330' align='center' style='font-family: Open Sans; font-size: 26px; line-height:30px; color: #2368a0; font-weight:400;' data-color='H1 Color' data-size='H1 Size' data-min='12' data-max='40' mc:edit=''><multiline label='content'><b>Your registration was successful!</b></multiline></td>
                                          </tr>
                                   <tr>
                                     <td align='center' height='30' class='mobile'></td>
                                   </tr>
                             
                          </tbody></table>
                            <!-- End Container -->

                        </td>
                    </tr>
                </tbody></table><table width='600' cellspacing='0' cellpadding='0' bgcolor='#ffffff' data-bgcolor='Box9BGcolor' style='border-radius:4px' class='container'>
  
  <tbody><tr>
    <td><table width='100%' border='0' align='center' cellpadding='0' cellspacing='0' class='container'>
      
        <tbody><tr>
          <td height='20' align='center' valign='middle' class='mobile'></td>
        </tr>
        <tr>
      <td height='20' align='center' valign='middle' class='mobile' style='font-size:12px; line-height:18px;'>
        <!-- Start Content -->
        <table class='container' cellspacing='0' cellpadding='0' align='justify' border='0' width='500'>
          
            <tbody>
            
            <tr>
            <td align='justify' class='padding-copy' style='padding: 5px 0 5px 0; font-size: 14px; line-height: 30px; font-family: open sans; color: #232527;'><b>Hello $citizenName,</b>
<br> Thanks for your interest in Citizen Hack and providing us all your details.
 Our team will be reviewing all your Registration Details, and will confirm your presence on 16-12-2017</td>
              </tr>";
		
		if ($countUserRecords == 0) {
			$htmlContent = $htmlContent . "
<tr>
      <td height='20' align='center' valign='middle' class='mobile' style='font-size:12px; line-height:18px;'>
       

 <!-- Start Content -->
        <table class='container' cellspacing='0' cellpadding='0' align='justify' border='0' width='500'>
          
            <tbody>
            
            
<tr>
              
              </tr>
<tr>
<td align='justify' class='padding-copy' style='padding: 5px 0 5px 0; font-size: 14px; line-height: 30px; font-family: open sans; color: #232527;'><b>User Name  &nbsp;: &nbsp;$email</b>
  </td>
              </tr><tr>
              <td align='justify' class='padding-copy' style='padding: 5px 0 5px 0; font-size: 14px; line-height: 30px; font-family: open sans; color: #232527;'><b>Password&nbsp; &nbsp;&nbsp; : &nbsp;$password</b>
  </td>
              </tr><tr>
              <td align='justify' class='padding-copy' style='padding: 5px 0 5px 0; font-size: 14px; line-height: 30px; font-family: open sans; color: #232527;'><b>Note : </b><i><font color='#8c8c8c'>The above password is only for temporary login. So, please Sign in and
  change your password and make sure that you are not sharing it with anyone.</font></i><font color='#8c8c8c'><i></i>  
  </font></td>
              </tr><tr>
                            <td align='left'>
                              <table>
                                <tbody><tr>
                                  <td align='left' bgcolor='#fc3f3f' style='background:#fc3f3f; padding:8px 10px;-webkit-border-radius: 2px; 
           -moz-border-radius: 2px; border-radius: 2px;'>
                                    <div class='contentEditableContainer contentTextEditable'>
                                      <div class='contentEditable' align='left'>
        <a href='" . DS17_ROOT_URL . "/student-dashboard/login.php' class='link2' style='color:#ffffff;text-decoration:none;><font face=' target='_blank'><b>Access Student Portal</b></a>
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                              </tbody></table>
                            </td>
                          </tr>
            <tr>
              
              </tr><tr></tr>
            <tr><td><table width='100%' cellspacing='0' cellpadding='0' border='0'><tbody><tr>
              
              </tr><tr></tr></tbody></table></td></tr>
            <tr>
              
            </tr>
            
            
            <tr>
              
              </tr>
            
          </tbody></table>
        <!-- End Content -->



      </td>
        </tr>";
		}
		
		$htmlContent = $htmlContent . "
            <tr>
              
              </tr><tr></tr>
            <tr><td><table width='100%' cellspacing='0' cellpadding='0' border='0'><tbody><tr>
              
              </tr><tr></tr></tbody></table></td></tr>
            <tr>
              
            </tr>
            
            
            <tr>
              
              </tr>
            
          </tbody></table>
        <!-- End Content -->


      </td>
        </tr>
        <tr>
          
        </tr>
        
    </tbody></table></td>
  </tr>
  </tbody></table><table width='600' cellspacing='0' cellpadding='0' bgcolor='#ffffff' data-bgcolor='Box9BGcolor' style='border-radius:0px' class='container'>
  
  <tbody><tr>
    <td><table width='500' border='0' align='center' cellpadding='0' cellspacing='0' class='container'>
      
        <tbody><tr>
          
        </tr><tr><td align='justify' class='padding-copy' style='padding: 5px 0 5px 0; border-bottom: 1px dashed #2368a0; font-size: 14px; line-height: 25px; font-family: open sans; color: #232527;'></td></tr>
        <tr>
      <td height='20' align='center' valign='middle' class='mobile' style='font-size:12px; line-height:18px;'>
        <!-- Start Content -->
        <table class='container' cellspacing='0' cellpadding='0' align='justify' border='0' width='500'>
          
            <tbody>
            
            <tr><td style='padding: 5px 0 5px 0; font-size: 14px; line-height: 30px; font-family: open sans; color: #8c8c8c; font-style: normal;' class='padding-copy' align='left'>Thanks &amp; Regards,<br><b>Digital Summit 2017,</b><br><b> Miracle Software Systems, Inc. </b><br><b>Email :</b> <a href='mailto: apcloud@miraclesoft.com' style='font-size: 14px;color:#252327;text-decoration:none; font-family: Open Sans; color: #8c8c8c; font-style: normal'>apcloud@miraclesoft.com</a> <br><b>Phone :</b> +91-891-6623556<br>
							 
							  </td></tr>
            <tr>
              
              </tr><tr></tr>
            <tr><td><table width='100%' cellspacing='0' cellpadding='0' border='0'><tbody><tr>
              
              </tr><tr></tr></tbody></table></td></tr>
            <tr>
              
            </tr>
            
            
            <tr>
              
              </tr>
            
          </tbody></table>
        <!-- End Content -->
      </td>
        </tr>
        <tr>
          
        </tr>
        
    </tbody></table></td>
  </tr>
  </tbody></table>

                          
                          
                            <!-- End Container -->

                        </td>
                    </tr>
                </tbody></table><table width='100%' data-module='Notif4' align='center' cellpadding='0' cellspacing='0' border='0' class='wrapper' bgcolor='#ececec' data-bgcolor='MainBG_Color5'>
                    
                      <tbody><tr>
                        <td align='center'>

                            <!-- Start Container -->
                          <table width='600' border='0' align='center' cellpadding='0' cellspacing='0' bgcolor='#ffffff' style='border-radius:25px' class='container'>
                                 
                                   <tbody><tr>
                                     <td align='center' bgcolor='#42729B' style=' border-top-left-radius:4px; border-top-right-radius:4px; font-size: 35px; line-height: 30px; color: #ffffff; font-weight: 700;'></td>
                                   </tr>
                                   <tr>
                                     <td align='center' class='mobile'><table class='container' style='border-bottom-left-radius:4px; border-bottom-right-radius:4px' data-bgcolor='FootBoxBG_Color' bgcolor='#232527' border='0' cellspacing='0' cellpadding='0' width='100%'>
                                <tbody><tr><td align='center' height='30' class='mobile'></td>
                                </tr><tr>
                                                                           <td width='600' align='center' style='font-size:0!important'>
                                                                              <div style='width:100%;display:inline-block;vertical-align:top;font-size:normal;max-width:50px'>
                                                                                 <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                    <tbody>
                                                                                       <tr>
                                                                                          <td style='padding:0 10px' align='center'>
                                                                                             <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                                <tbody>
                                                                                                   <tr>
                                                                                                      <td style='height:10px;line-height:10px' height='10'></td>
                                                                                                   </tr>
                                                                                                   <tr>
                                                                                                      <td style='line-height:0!important' align='center'>
                                                                                                         <a style='text-decoration:none;display:inline-block' href='https://www.facebook.com/DigitalSummit16/' target='blank'>
                                                                                                         <img src='http://www.miraclesoft.com/images/newsletters/2016/September/facebook-1.png' alt='socials1' width='30'>
                                                                                                         </a>
                                                                                                      </td>
                                                                                                   </tr>
                                                                                                </tbody>
                                                                                             </table>
                                                                                          </td>
                                                                                       </tr>
                                                                                    </tbody>
                                                                                 </table>
                                                                              </div>
                                                                              <div style='width:100%;display:inline-block;vertical-align:top;font-size:normal;max-width:50px'>
                                                                                 <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                    <tbody>
                                                                                       <tr>
                                                                                          <td style='padding:0 10px' align='center'>
                                                                                             <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                                <tbody>
                                                                                                   <tr>
                                                                                                      <td style='height:10px;line-height:10px' height='10'></td>
                                                                                                   </tr>
                                                                                                   <tr>
                                                                                                      <td style='line-height:0!important' align='center'>
                                                                                                         <a style='text-decoration:none;display:inline-block' href='https://plus.google.com/104381127288956493644' target='blank'>
                                                                                                         <img src='http://www.miraclesoft.com/images/newsletters/2016/September/google-plus-2.png' alt='socials1' width='30'>
                                                                                                         </a>
                                                                                                      </td>
                                                                                                   </tr>
                                                                                                </tbody>
                                                                                             </table>
                                                                                          </td>
                                                                                       </tr>
                                                                                    </tbody>
                                                                                 </table>
                                                                              </div>
                                                                              <div style='width:100%;display:inline-block;vertical-align:top;font-size:normal;max-width:50px'>
                                                                                 <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                    <tbody>
                                                                                       <tr>
                                                                                          <td style='padding:0 10px' align='center'>
                                                                                             <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                                <tbody>
                                                                                                   <tr>
                                                                                                      <td style='height:10px;line-height:10px' height='10'></td>
                                                                                                   </tr>
                                                                                                   <tr>
                                                                                                      <td style='line-height:0!important' align='center'>
                                                                                                         <a style='text-decoration:none;display:inline-block' href='https://www.linkedin.com/groups/10313125' target='blank'>
                                                                                                         <img src='http://www.miraclesoft.com/images/newsletters/2016/September/linkedin-2.png' alt='socials1' width='30'>
                                                                                                         </a>
                                                                                                      </td>
                                                                                                   </tr>
                                                                                                </tbody>
                                                                                             </table>
                                                                                          </td>
                                                                                       </tr>
                                                                                    </tbody>
                                                                                 </table>
                                                                              </div>
                                                                              <div style='width:100%;display:inline-block;vertical-align:top;font-size:normal;max-width:50px'>
                                                                                 <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                    <tbody>
                                                                                       <tr>
                                                                                          <td style='padding:0 10px' align='center'>
                                                                                             <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                                <tbody>
                                                                                                   <tr>
                                                                                                      <td style='height:10px;line-height:10px' height='10'></td>
                                                                                                   </tr>
                                                                                                   <tr>
                                                                                                      <td style='line-height:0!important' align='center'>
                                                                                                         <a style='text-decoration:none;display:inline-block' href='https://www.flickr.com/people/digitalsummit/' target='blank'>
                                                                                                         <img src='http://www.miraclesoft.com/images/newsletters/2016/September/flickr-1.png' alt='socials1' width='30'>
                                                                                                         </a>
                                                                                                      </td>
                                                                                                   </tr>
                                                                                                </tbody>
                                                                                             </table>
                                                                                          </td>
                                                                                       </tr>
                                                                                    </tbody>
                                                                                 </table>
                                                                              </div>
                                                                              <div style='width:100%;display:inline-block;vertical-align:top;font-size:normal;max-width:50px'>
                                                                                 <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                    <tbody>
                                                                                       <tr>
                                                                                          <td style='padding:0 10px' align='center'>
                                                                                             <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                                <tbody>
                                                                                                   <tr>
                                                                                                      <td style='height:10px;line-height:10px' height='10'></td>
                                                                                                   </tr>
                                                                                                   <tr>
                                                                                                      <td style='line-height:0!important' align='center'>
                                                                                                         <a style='text-decoration:none;display:inline-block' href='https://twitter.com/andhracloud' target='blank'>
                                                                                                         <img src='http://www.miraclesoft.com/images/newsletters/2016/September/twitter-2.png' alt='socials2' width='30'>
                                                                                                         </a>
                                                                                                      </td>
                                                                                                   </tr>
                                                                                                </tbody>
                                                                                             </table>
                                                                                          </td>
                                                                                       </tr>
                                                                                    </tbody>
                                                                                 </table>
                                                                              </div>
                                                                              <div style='width:100%;display:inline-block;vertical-align:top;font-size:normal;max-width:50px'>
                                                                                 <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                    <tbody>
                                                                                       <tr>
                                                                                          <td style='padding:0 10px' align='center'>
                                                                                             <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                                <tbody>
                                                                                                   <tr>
                                                                                                      <td style='height:10px;line-height:10px' height='10'></td>
                                                                                                   </tr>
                                                                                                   <tr>
                                                                                                      <td style='line-height:0!important' align='center'>
                                                                                                         <a style='text-decoration:none;display:inline-block' href='https://www.youtube.com/c/DigitalSummitVizag' target='blank'>
                                                                                                         <img src='http://www.miraclesoft.com/images/newsletters/2016/September/youtube-3.png' alt='socials3' width='30'>
                                                                                                         </a>
                                                                                                      </td>
                                                                                                   </tr>
                                                                                                </tbody>
                                                                                             </table>
                                                                                          </td>
                                                                                       </tr>
                                                                                    </tbody>
                                                                                 </table>
                                                                              </div>
                                                                           </td>
                                                                        </tr>
                                    <tr><td align='center' height='30' class='mobile'></td>
                                </tr>
                            </tbody></table></td>
                                   </tr>
                             </tbody></table>
                            <!-- End Container -->

                        </td>
                    </tr>
                </tbody></table><table width='100%' data-module='Notif5' align='center' cellpadding='0' cellspacing='0' border='0' class='wrapper' bgcolor='#ECECEC' data-bgcolor='MainBG_Color22'>
                    
                      <tbody><tr>
                        <td height='40'></td>
                      </tr>
                      <tr>
                        <td align='center'>

                            <!-- Start Container -->
                            <table width='600' cellpadding='0' cellspacing='0' border='0' class='container'>
                                
                                  <tbody><tr>
                                    <td align='center' class='mobile' style='font-family: OpenSans, Arial, sans-serif; font-size:12px; line-height:24px;'>
                                        <!-- Start Content -->
                                        <table width='90%' border='0' align='center' cellpadding='0' cellspacing='0' class='container'>
                                          
                                            <tbody><tr>
                                            <td style='font-size: 14px; line-height: 20px; font-family: open sans; color:#666666;' align='center'>
  © 2017 | Miracle Software Systems, Inc.<br></td>
                                          </tr>
                                        </tbody></table>                                        <!-- End Container -->
                                    </td>
                                  </tr>
                            </tbody></table>
                            
                            <!-- End Container -->

                        </td>
                    </tr>
                    
                    <tr>
                        <td height='40'> </td><!-- Spacer -->
                    </tr>
                </tbody></table><div id='edit_link' class='hidden' style='display: none;'>

						<!-- Close Link -->
						<div class='close_link'></div>

						<!-- Edit Link Value -->
						<input type='text' id='edit_link_value' class='createlink' placeholder='Your URL'>

						<!-- Change Image Wrapper-->
						<div id='change_image_wrapper'>

							<!-- Change Image Tooltip -->
							<div id='change_image'>

								<!-- Change Image Button -->
								<p id='change_image_button'>Change &nbsp; <span class='pixel_result'></span></p>

							</div>

							<!-- Change Image Link Button -->
							<input type='button' value='' id='change_image_link'>

							<!-- Remove Image -->
							<input type='button' value='' id='remove_image'>

						</div>

						<!-- Tooltip Bottom Arrow-->
						<div id='tip'></div>

					</div></body></html>
				"; // Put your body of the message you can place html code here
		
		$mail->MsgHTML ( $htmlContent );
		
		// $mail->AddAttachment("images/asif18-logo.png"); //Attach a file here if any or comment this line,
		$send = $mail->Send (); // Send the mails
		if ($send) {
			// echo '<center><h3 style="color:#009933;">Mail sent successfully</h3></center>';
			
			return "Mail sent successfully";
		} else {
			// echo '<center><h3 style="color:#FF3300;">Mail error: </h3></center>'.$mail->ErrorInfo;
			throw new Exception ( $mail->ErrorInfo );
		}
	}
	
	// ---------
	
	/*
	 * Tech talk acknowledgement
	 * Date : 11/15/2017
	 * Author : Santosh Kola
	 */
	function sendDs17TechTalkAcknowledge($techeName, $email, $password, $countUserRecords) {
		$mail = new PHPMailer (); // call the class
		$mail->IsSMTP ();
		$mail->Host = SMTP_HOST; // Hostname of the mail server
		$mail->Port = SMTP_PORT; // Port of the SMTP like to be 25, 80, 465 or 587
		$mail->SMTPAuth = true; // Whether to use SMTP authentication
		$mail->SMTPSecure = SMTP_SECURE;
		$mail->Username = SMTP_UNAME; // Username for SMTP authentication any valid email created in your domain
		$mail->Password = SMTP_PWORD; // Password for SMTP authentication
		                              // $mail->AddReplyTo($email, $fname); //reply-to address
		$mail->SetFrom ( "hubbleapp@miraclesoft.com", "Digital Summit 2k17" ); // From address of the mail
		                                                                    // put your while loop here like below,
		$mail->Subject = "You have been successfully registered for Tech Talks - DS' 17"; // Subject od your mail
		                                                                                  // $mail->AddAddress("skola2@miraclesoft.com", "Santosh Kola"); //To address who will receive this email
		$mail->AddAddress ( $email, $citizenName ); // To address who will receive this email
		                                         // $mail->MsgHTML("<b>Hi, your first SMTP mail has been received. Great Job!.. <br/><br/>by <a href='http://www.asif18.com/7/php/send-mails-using-smtp-in-php-by-gmail-server-or-own-domain-server/'>Asif18</a></b>"); //Put your body of the message you can place html code here
		                                         // $htmlContent="
		
		$htmlContent = "<html xmlns='http://www.w3.org/1999/xhtml'><head>
 <link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans'>
					
				<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0'><meta http-equiv='Content-Type' content='text/html; charset=UTF-8'><meta http-equiv='X-UA-Compatible' content='IE=edge'><title>Digital Summit 2017</title><style>

        .ReadMsgBody { width: 100%; background-color: #D2D7D3; }
        .ExternalClass { width: 100%; background-color: #D2D7D3; }
		.a { text-decoration:none; }
        body { width: 100%; background-color: #d8eaf8; margin: 0; padding: 0; -webkit-font-smoothing: ; font-family:OpenSans ,Arial, Helvetica Neue, Helvetica, sans-serif }
        @-ms-viewport{ width: device-width; }

@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 400;
  src: url('Fonts/Montserrat-Regular.ttf') format('truetype'), url('https://fonts.gstatic.com/s/montserrat/v6/zhcz-_WihjSQC0oHJ9TCYPk_vArhqVIZ0nv9q090hN8.woff2') format('woff2');
}
@font-face {
  font-family: 'Montserrat';
  font-style: Bold;
  font-weight: 700;
  src: url('Fonts/Montserrat-Bold.ttf') format('truetype'), url('https://fonts.gstatic.com/s/montserrat/v6/IQHow_FEYlDC4Gzy_m8fcoWiMMZ7xLd792ULpGE4W_Y.woff2') format('woff2');
}
@font-face {
  font-family: 'OpenSans';
  font-style: normal;
  font-weight: 400;
  src: url('Fonts/OpenSans-Regular.ttf') format('truetype'), url('https://fonts.gstatic.com/s/opensans/v13/cJZKeOuBrn4kERxqtaUH3VtXRa8TVwTICgirnJhmVJw.woff2') format('woff2');
}
@font-face {
  font-family: 'OpenSans';
  font-style: normal;
  font-weight: 600;
  src: url('Fonts/OpenSans-Semibold.ttf') format('truetype'), url('https://fonts.gstatic.com/s/opensans/v13/MTP_ySUJH_bn48VBG8sNSugdm0LZdjqr5-oayXSOefg.woff2') format('woff2');
}

@font-face {
  font-family: 'OpenSans';
  font-style: extraBold;
  font-weight: 900;
  src: url('Fonts/OpenSans-ExtraBold.ttf') format('truetype'), url('https://fonts.gstatic.com/s/opensans/v13/EInbV5DfGHOiMmvb1Xr-hugdm0LZdjqr5-oayXSOefg.woff2') format('woff2');
}
        @media only screen and (max-width: 639px){
        .wrapper{ width:100%;  padding: 0 !important; }
        }

        @media only screen and (max-width: 480px){
        .centerClass{ margin:0 auto !important; }
        .imgClass{ width:100% !important; height:auto; }
		.img{ text-align:center}
		.hide{ display:none;}
        .wrapper{ width:100%; padding: 0 !important; }
        .header{ width:100%; padding: 0 !important; background-image: url(http://placehold.it/320x400) !important; }
        .container{ width:300px;  padding: 0 !important; }
		.box{ width:250px;  padding: 0 !important; }
        .mobile{ width:300px; display:block; padding: 0 !important; text-align:center !important;}
        .mobile50{ width:300px; padding: 0 !important; text-align:center; }
        *[class='mobileOff'] { width: 0px !important; display: none !important; }
        *[class*='mobileOn'] { display: block !important; max-height:none !important; }
        }

    .MsoNormal {font-family:Montserrat, OpenSans ,Arial, Helvetica Neue, Helvetica, sans-serif !important;}
    </style>

					
				</head><body marginwidth='0' marginheight='0' style='margin-top: 0; margin-bottom: 0; padding-top: 0; padding-bottom: 0; width: 100%; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;' offset='0' topmargin='0' leftmargin='0'><table width='100%' data-module='Notif1' align='center' cellpadding='0' cellspacing='0' border='0' class='wrapper' bgcolor='#ececec' data-bgcolor='MainBG_Color5'>
                    
                      <tbody><tr>
                        <td height='50' style='font-family: OpenSans, Arial, sans-serif; font-size:10px; line-height:10px;'></td>
                      </tr>
                </tbody></table><table width='100%' data-module='Notif2' align='center' cellpadding='0' cellspacing='0' border='0' class='wrapper' bgcolor='#ececec' data-bgcolor='MainBG_Color5'>
                    
                      <tbody><tr>
                        <td align='center'>

                            <!-- Start Container -->
                            <table width='600' border='0' align='center' cellpadding='0' cellspacing='0' bgcolor='#ffffff' style='border-radius:25px' class='container'>
                                 
                                   <tbody><tr>
                                     <td style=' border-top-left-radius:4px; border-top-right-radius:4px; font-size: 35px; line-height: 30px; color: #ffffff; font-weight: 700;' bgcolor='#42729B' align='center'></td>
                                   </tr>
                                   <tr>
                                     <td align='center' class='mobile' style='font-size:12px; line-height:24px;'><table width='100%' border='0' cellspacing='0' cellpadding='0' bgcolor='#232527' data-bgcolor='BlueBoxBG_Color' style='border-top-left-radius:4px; border-top-right-radius:4px'>
                                       <tbody><tr>
                                         <td height='20'></td>
                                       </tr>
                                         <tr>
                                           <td height='20' align='center'><img mc:edit='' editable='' src='https://newsletters-2017-sivanmyc.c9users.io/October/Internal/Campaigns/ds17logo-black.png' width='170' height='auto'></td>
                                         </tr>
                                         <tr>
                                         <td height='20'></td>
                                       </tr>
                                       <tr>
                                         <td align='center' style='font-size:34px; line-height:40px; color: #ffffff; font-weight:400' data-color='H1wht Color' data-size='H1wht size' data-min='18' data-max='50' mc:edit=''></td>
                                       </tr>
                                       <tr>
                                         
                                       </tr>
                                     </tbody></table></td>
                                   </tr>
                             </tbody></table>
                            <!-- End Container -->

                        </td>
                    </tr>
                </tbody></table><table width='100%' data-module='Notif3' align='center' cellpadding='0' cellspacing='0' border='0' class='wrapper' bgcolor='#ececec' data-bgcolor='MainBG_Color5'>
                    
                      <tbody><tr>
                        <td align='center'>

                            <!-- Start Container -->
                            <table width='100%' data-module='Notif3' align='center' cellpadding='0' cellspacing='0' border='0' class='wrapper' bgcolor='#ececec' data-bgcolor='MainBG_Color5'>
                    
                      <tbody><tr>
                        <td align='center'>

                            <!-- Start Container -->
                          <table width='600' border='0' align='center' cellpadding='0' cellspacing='0' bgcolor='#ffffff' class='container' style='border-bottom:1px #ececec solid'>
                                 
                                   <tbody><tr>
                                     <td align='center' bgcolor='#42729B' style='font-size: 35px; line-height: 30px; color: #ffffff; font-weight: 700;'></td>
                                   </tr>
                                   <tr>
                                     <td height='30'></td>
                                   </tr>
                                   <tr>
                                              <td width='330' align='center' style='font-family: Open Sans; font-size: 26px; line-height:30px; color: #2368a0; font-weight:400;' data-color='H1 Color' data-size='H1 Size' data-min='12' data-max='40' mc:edit=''><multiline label='content'><b>Your registration was successful!</b></multiline></td>
                                          </tr>
                                   <tr>
                                     <td align='center' height='30' class='mobile'></td>
                                   </tr>
                             
                          </tbody></table>
                            <!-- End Container -->

                        </td>
                    </tr>
                </tbody></table><table width='600' cellspacing='0' cellpadding='0' bgcolor='#ffffff' data-bgcolor='Box9BGcolor' style='border-radius:4px' class='container'>
  
  <tbody><tr>
    <td><table width='100%' border='0' align='center' cellpadding='0' cellspacing='0' class='container'>
      
        <tbody><tr>
          <td height='20' align='center' valign='middle' class='mobile'></td>
        </tr>
        <tr>
      <td height='20' align='center' valign='middle' class='mobile' style='font-size:12px; line-height:18px;'>
        <!-- Start Content -->
        <table class='container' cellspacing='0' cellpadding='0' align='justify' border='0' width='500'>
          
            <tbody>
            
            <tr>
            <td align='justify' class='padding-copy' style='padding: 5px 0 5px 0; font-size: 14px; line-height: 30px; font-family: open sans; color: #232527;'><b>Hello $techeName,</b>
<br>  Thanks for your interest in Tech Talks, we have received your details and registration is confirmed. Looking forward to see you at the event.   </td>
              </tr>";
		
		if ($countUserRecords === 0) {
			$htmlContent = $htmlContent . "
<tr>
      <td height='20' align='center' valign='middle' class='mobile' style='font-size:12px; line-height:18px;'>
        <!-- Start Content -->
        <table class='container' cellspacing='0' cellpadding='0' align='justify' border='0' width='500'>
          
            <tbody>
            
            
<tr>
              
              </tr>
<tr>
<td align='justify' class='padding-copy' style='padding: 5px 0 5px 0; font-size: 14px; line-height: 30px; font-family: open sans; color: #232527;'><b>User Name  &nbsp;: &nbsp;$email</b>
  </td>
              </tr><tr>
              <td align='justify' class='padding-copy' style='padding: 5px 0 5px 0; font-size: 14px; line-height: 30px; font-family: open sans; color: #232527;'><b>Password&nbsp; &nbsp;&nbsp; : &nbsp;$password</b>
  </td>
              </tr><tr>
              <td align='justify' class='padding-copy' style='padding: 5px 0 5px 0; font-size: 14px; line-height: 30px; font-family: open sans; color: #232527;'><b>Note : </b><i><font color='#8c8c8c'>The above password is only for temporary login. So, please Sign in and
  change your password and make sure that you are not sharing it with anyone.</font></i><font color='#8c8c8c'><i></i>  
  </font></td>
              </tr><tr>
                            <td align='left'>
                              <table>
                                <tbody><tr>
                                  <td align='left' bgcolor='#fc3f3f' style='background:#fc3f3f; padding:8px 10px;-webkit-border-radius: 2px; 
           -moz-border-radius: 2px; border-radius: 2px;'>
                                    <div class='contentEditableContainer contentTextEditable'>
                                      <div class='contentEditable' align='left'>
        <a href='" . DS17_ROOT_URL . "/student-dashboard/login.php' class='link2' style='color:#ffffff;text-decoration:none;><font face=' target='_blank'><b>Access Student Portal</b></a>
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                              </tbody></table>
                            </td>
                          </tr>
            <tr>
              
              </tr><tr></tr>
            <tr><td><table width='100%' cellspacing='0' cellpadding='0' border='0'><tbody><tr>
              
              </tr><tr></tr></tbody></table></td></tr>
            <tr>
              
            </tr>
            
            
            <tr>
              
              </tr>
            
          </tbody></table>
        <!-- End Content -->
      </td>
        </tr>";
		}
		$htmlContent = $htmlContent . "

            <tr>
              
              </tr><tr></tr>
            <tr><td><table width='100%' cellspacing='0' cellpadding='0' border='0'><tbody><tr>
              
              </tr><tr></tr></tbody></table></td></tr>
            <tr>
              
            </tr>
            
            
            <tr>
              
              </tr>
            
          </tbody></table>
        <!-- End Content -->
      </td>
        </tr>
        <tr>
          
        </tr>
        
    </tbody></table></td>
  </tr>
  </tbody></table><table width='600' cellspacing='0' cellpadding='0' bgcolor='#ffffff' data-bgcolor='Box9BGcolor' style='border-radius:0px' class='container'>
  
  <tbody><tr>
    <td><table width='500' border='0' align='center' cellpadding='0' cellspacing='0' class='container'>
      
        <tbody><tr>
          
        </tr><tr><td align='justify' class='padding-copy' style='padding: 5px 0 5px 0; border-bottom: 1px dashed #2368a0; font-size: 14px; line-height: 25px; font-family: open sans; color: #232527;'></td></tr>
        <tr>
      <td height='20' align='center' valign='middle' class='mobile' style='font-size:12px; line-height:18px;'>
        <!-- Start Content -->
        <table class='container' cellspacing='0' cellpadding='0' align='justify' border='0' width='500'>
          
            <tbody>
            
            <tr><td style='padding: 5px 0 5px 0; font-size: 14px; line-height: 30px; font-family: open sans; color: #8c8c8c; font-style: normal;' class='padding-copy' align='left'>Thanks &amp; Regards,<br><b>Digital Summit 2017,</b><br><b> Miracle Software Systems, Inc. </b><br><b>Email :</b> <a href='mailto: apcloud@miraclesoft.com' style='font-size: 14px;color:#252327;text-decoration:none; font-family: Open Sans; color: #8c8c8c; font-style: normal'>apcloud@miraclesoft.com</a> <br><b>Phone :</b> +91-891-6623556<br>
							 
							  </td></tr>
            <tr>
              
              </tr><tr></tr>
            <tr><td><table width='100%' cellspacing='0' cellpadding='0' border='0'><tbody><tr>
              
              </tr><tr></tr></tbody></table></td></tr>
            <tr>
              
            </tr>
            
            
            <tr>
              
              </tr>
            
          </tbody></table>
        <!-- End Content -->
      </td>
        </tr>
        <tr>
          
        </tr>
        
    </tbody></table></td>
  </tr>
  </tbody></table>

                          
                          
                            <!-- End Container -->

                        </td>
                    </tr>
                </tbody></table><table width='100%' data-module='Notif4' align='center' cellpadding='0' cellspacing='0' border='0' class='wrapper' bgcolor='#ececec' data-bgcolor='MainBG_Color5'>
                    
                      <tbody><tr>
                        <td align='center'>

                            <!-- Start Container -->
                          <table width='600' border='0' align='center' cellpadding='0' cellspacing='0' bgcolor='#ffffff' style='border-radius:25px' class='container'>
                                 
                                   <tbody><tr>
                                     <td align='center' bgcolor='#42729B' style=' border-top-left-radius:4px; border-top-right-radius:4px; font-size: 35px; line-height: 30px; color: #ffffff; font-weight: 700;'></td>
                                   </tr>
                                   <tr>
                                     <td align='center' class='mobile'><table class='container' style='border-bottom-left-radius:4px; border-bottom-right-radius:4px' data-bgcolor='FootBoxBG_Color' bgcolor='#232527' border='0' cellspacing='0' cellpadding='0' width='100%'>
                                <tbody><tr><td align='center' height='30' class='mobile'></td>
                                </tr><tr>
                                                                           <td width='600' align='center' style='font-size:0!important'>
                                                                              <div style='width:100%;display:inline-block;vertical-align:top;font-size:normal;max-width:50px'>
                                                                                 <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                    <tbody>
                                                                                       <tr>
                                                                                          <td style='padding:0 10px' align='center'>
                                                                                             <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                                <tbody>
                                                                                                   <tr>
                                                                                                      <td style='height:10px;line-height:10px' height='10'></td>
                                                                                                   </tr>
                                                                                                   <tr>
                                                                                                      <td style='line-height:0!important' align='center'>
                                                                                                         <a style='text-decoration:none;display:inline-block' href='https://www.facebook.com/DigitalSummit16/' target='blank'>
                                                                                                         <img src='http://www.miraclesoft.com/images/newsletters/2016/September/facebook-1.png' alt='socials1' width='30'>
                                                                                                         </a>
                                                                                                      </td>
                                                                                                   </tr>
                                                                                                </tbody>
                                                                                             </table>
                                                                                          </td>
                                                                                       </tr>
                                                                                    </tbody>
                                                                                 </table>
                                                                              </div>
                                                                              <div style='width:100%;display:inline-block;vertical-align:top;font-size:normal;max-width:50px'>
                                                                                 <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                    <tbody>
                                                                                       <tr>
                                                                                          <td style='padding:0 10px' align='center'>
                                                                                             <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                                <tbody>
                                                                                                   <tr>
                                                                                                      <td style='height:10px;line-height:10px' height='10'></td>
                                                                                                   </tr>
                                                                                                   <tr>
                                                                                                      <td style='line-height:0!important' align='center'>
                                                                                                         <a style='text-decoration:none;display:inline-block' href='https://plus.google.com/104381127288956493644' target='blank'>
                                                                                                         <img src='http://www.miraclesoft.com/images/newsletters/2016/September/google-plus-2.png' alt='socials1' width='30'>
                                                                                                         </a>
                                                                                                      </td>
                                                                                                   </tr>
                                                                                                </tbody>
                                                                                             </table>
                                                                                          </td>
                                                                                       </tr>
                                                                                    </tbody>
                                                                                 </table>
                                                                              </div>
                                                                              <div style='width:100%;display:inline-block;vertical-align:top;font-size:normal;max-width:50px'>
                                                                                 <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                    <tbody>
                                                                                       <tr>
                                                                                          <td style='padding:0 10px' align='center'>
                                                                                             <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                                <tbody>
                                                                                                   <tr>
                                                                                                      <td style='height:10px;line-height:10px' height='10'></td>
                                                                                                   </tr>
                                                                                                   <tr>
                                                                                                      <td style='line-height:0!important' align='center'>
                                                                                                         <a style='text-decoration:none;display:inline-block' href='https://www.linkedin.com/groups/10313125' target='blank'>
                                                                                                         <img src='http://www.miraclesoft.com/images/newsletters/2016/September/linkedin-2.png' alt='socials1' width='30'>
                                                                                                         </a>
                                                                                                      </td>
                                                                                                   </tr>
                                                                                                </tbody>
                                                                                             </table>
                                                                                          </td>
                                                                                       </tr>
                                                                                    </tbody>
                                                                                 </table>
                                                                              </div>
                                                                              <div style='width:100%;display:inline-block;vertical-align:top;font-size:normal;max-width:50px'>
                                                                                 <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                    <tbody>
                                                                                       <tr>
                                                                                          <td style='padding:0 10px' align='center'>
                                                                                             <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                                <tbody>
                                                                                                   <tr>
                                                                                                      <td style='height:10px;line-height:10px' height='10'></td>
                                                                                                   </tr>
                                                                                                   <tr>
                                                                                                      <td style='line-height:0!important' align='center'>
                                                                                                         <a style='text-decoration:none;display:inline-block' href='https://www.flickr.com/people/digitalsummit/' target='blank'>
                                                                                                         <img src='http://www.miraclesoft.com/images/newsletters/2016/September/flickr-1.png' alt='socials1' width='30'>
                                                                                                         </a>
                                                                                                      </td>
                                                                                                   </tr>
                                                                                                </tbody>
                                                                                             </table>
                                                                                          </td>
                                                                                       </tr>
                                                                                    </tbody>
                                                                                 </table>
                                                                              </div>
                                                                              <div style='width:100%;display:inline-block;vertical-align:top;font-size:normal;max-width:50px'>
                                                                                 <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                    <tbody>
                                                                                       <tr>
                                                                                          <td style='padding:0 10px' align='center'>
                                                                                             <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                                <tbody>
                                                                                                   <tr>
                                                                                                      <td style='height:10px;line-height:10px' height='10'></td>
                                                                                                   </tr>
                                                                                                   <tr>
                                                                                                      <td style='line-height:0!important' align='center'>
                                                                                                         <a style='text-decoration:none;display:inline-block' href='https://twitter.com/andhracloud' target='blank'>
                                                                                                         <img src='http://www.miraclesoft.com/images/newsletters/2016/September/twitter-2.png' alt='socials2' width='30'>
                                                                                                         </a>
                                                                                                      </td>
                                                                                                   </tr>
                                                                                                </tbody>
                                                                                             </table>
                                                                                          </td>
                                                                                       </tr>
                                                                                    </tbody>
                                                                                 </table>
                                                                              </div>
                                                                              <div style='width:100%;display:inline-block;vertical-align:top;font-size:normal;max-width:50px'>
                                                                                 <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                    <tbody>
                                                                                       <tr>
                                                                                          <td style='padding:0 10px' align='center'>
                                                                                             <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                                <tbody>
                                                                                                   <tr>
                                                                                                      <td style='height:10px;line-height:10px' height='10'></td>
                                                                                                   </tr>
                                                                                                   <tr>
                                                                                                      <td style='line-height:0!important' align='center'>
                                                                                                         <a style='text-decoration:none;display:inline-block' href='https://www.youtube.com/c/DigitalSummitVizag' target='blank'>
                                                                                                         <img src='http://www.miraclesoft.com/images/newsletters/2016/September/youtube-3.png' alt='socials3' width='30'>
                                                                                                         </a>
                                                                                                      </td>
                                                                                                   </tr>
                                                                                                </tbody>
                                                                                             </table>
                                                                                          </td>
                                                                                       </tr>
                                                                                    </tbody>
                                                                                 </table>
                                                                              </div>
                                                                           </td>
                                                                        </tr>
                                    <tr><td align='center' height='30' class='mobile'></td>
                                </tr>
                            </tbody></table></td>
                                   </tr>
                             </tbody></table>
                            <!-- End Container -->

                        </td>
                    </tr>
                </tbody></table><table width='100%' data-module='Notif5' align='center' cellpadding='0' cellspacing='0' border='0' class='wrapper' bgcolor='#ECECEC' data-bgcolor='MainBG_Color22'>
                    
                      <tbody><tr>
                        <td height='40'></td>
                      </tr>
                      <tr>
                        <td align='center'>

                            <!-- Start Container -->
                            <table width='600' cellpadding='0' cellspacing='0' border='0' class='container'>
                                
                                  <tbody><tr>
                                    <td align='center' class='mobile' style='font-family: OpenSans, Arial, sans-serif; font-size:12px; line-height:24px;'>
                                        <!-- Start Content -->
                                        <table width='90%' border='0' align='center' cellpadding='0' cellspacing='0' class='container'>
                                          
                                            <tbody><tr>
                                            <td style='font-size: 14px; line-height: 20px; font-family: open sans; color:#666666;' align='center'>
  © 2017 | Miracle Software Systems, Inc.<br></td>
                                          </tr>
                                        </tbody></table>                                        <!-- End Container -->
                                    </td>
                                  </tr>
                            </tbody></table>
                            
                            <!-- End Container -->

                        </td>
                    </tr>
                    
                    <tr>
                        <td height='40'> </td><!-- Spacer -->
                    </tr>
                </tbody></table><div id='edit_link' class='hidden' style='display: none;'>

						<!-- Close Link -->
						<div class='close_link'></div>

						<!-- Edit Link Value -->
						<input type='text' id='edit_link_value' class='createlink' placeholder='Your URL'>

						<!-- Change Image Wrapper-->
						<div id='change_image_wrapper'>

							<!-- Change Image Tooltip -->
							<div id='change_image'>

								<!-- Change Image Button -->
								<p id='change_image_button'>Change &nbsp; <span class='pixel_result'></span></p>

							</div>

							<!-- Change Image Link Button -->
							<input type='button' value='' id='change_image_link'>

							<!-- Remove Image -->
							<input type='button' value='' id='remove_image'>

						</div>

						<!-- Tooltip Bottom Arrow-->
						<div id='tip'></div>

					</div></body></html>
	"; // Put your body of the message you can place html code here
		
		$mail->MsgHTML ( $htmlContent );
		
		// $mail->AddAttachment("images/asif18-logo.png"); //Attach a file here if any or comment this line,
		$send = $mail->Send (); // Send the mails
		if ($send) {
			// echo '<center><h3 style="color:#009933;">Mail sent successfully</h3></center>';
			
			return "Mail sent successfully";
		} else {
			// echo '<center><h3 style="color:#FF3300;">Mail error: </h3></center>'.$mail->ErrorInfo;
			throw new Exception ( $mail->ErrorInfo );
		}
	}
	function sendDs17ForgetPassword($citizenName, $userEmail, $newPassword) {
		$mail = new PHPMailer (); // call the class
		$mail->IsSMTP ();
		$mail->Host = SMTP_HOST; // Hostname of the mail server
		$mail->Port = SMTP_PORT; // Port of the SMTP like to be 25, 80, 465 or 587
		$mail->SMTPAuth = true; // Whether to use SMTP authentication
		$mail->SMTPSecure = SMTP_SECURE;
		$mail->Username = SMTP_UNAME; // Username for SMTP authentication any valid email created in your domain
		$mail->Password = SMTP_PWORD; // Password for SMTP authentication
		                              // $mail->AddReplyTo($email, $fname); //reply-to address
		$mail->SetFrom ( "hubbleapp@miraclesoft.com", "Digital Summit 2k17" ); // From address of the mail
		                                                                    // put your while loop here like below,
		$mail->Subject = "Thank You!!"; // Subject od your mail
		                                // $mail->AddAddress("skola2@miraclesoft.com", "Santosh Kola"); //To address who will receive this email
		$mail->AddAddress ( $userEmail, $citizenName ); // To address who will receive this email
		                                             // $mail->MsgHTML("<b>Hi, your first SMTP mail has been received. Great Job!.. <br/><br/>by <a href='http://www.asif18.com/7/php/send-mails-using-smtp-in-php-by-gmail-server-or-own-domain-server/'>Asif18</a></b>"); //Put your body of the message you can place html code here
		                                             // $htmlContent="
		
		$htmlContent = "<html xmlns='http://www.w3.org/1999/xhtml' class='gr__newsletters-2017-sivanmyc_c9users_io'><head>
 <link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans'>
					
				<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0'><meta http-equiv='Content-Type' content='text/html; charset=UTF-8'><meta http-equiv='X-UA-Compatible' content='IE=edge'><title>Digital Summit 2017</title><style>

        .ReadMsgBody { width: 100%; background-color: #D2D7D3; }
        .ExternalClass { width: 100%; background-color: #D2D7D3; }
		.a { text-decoration:none; }
        body { width: 100%; background-color: #d8eaf8; margin: 0; padding: 0; -webkit-font-smoothing: ; font-family:OpenSans ,Arial, Helvetica Neue, Helvetica, sans-serif }
        @-ms-viewport{ width: device-width; }

@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 400;
  src: url('Fonts/Montserrat-Regular.ttf') format('truetype'), url('https://fonts.gstatic.com/s/montserrat/v6/zhcz-_WihjSQC0oHJ9TCYPk_vArhqVIZ0nv9q090hN8.woff2') format('woff2');
}
@font-face {
  font-family: 'Montserrat';
  font-style: Bold;
  font-weight: 700;
  src: url('Fonts/Montserrat-Bold.ttf') format('truetype'), url('https://fonts.gstatic.com/s/montserrat/v6/IQHow_FEYlDC4Gzy_m8fcoWiMMZ7xLd792ULpGE4W_Y.woff2') format('woff2');
}
@font-face {
  font-family: 'OpenSans';
  font-style: normal;
  font-weight: 400;
  src: url('Fonts/OpenSans-Regular.ttf') format('truetype'), url('https://fonts.gstatic.com/s/opensans/v13/cJZKeOuBrn4kERxqtaUH3VtXRa8TVwTICgirnJhmVJw.woff2') format('woff2');
}
@font-face {
  font-family: 'OpenSans';
  font-style: normal;
  font-weight: 600;
  src: url('Fonts/OpenSans-Semibold.ttf') format('truetype'), url('https://fonts.gstatic.com/s/opensans/v13/MTP_ySUJH_bn48VBG8sNSugdm0LZdjqr5-oayXSOefg.woff2') format('woff2');
}

@font-face {
  font-family: 'OpenSans';
  font-style: extraBold;
  font-weight: 900;
  src: url('Fonts/OpenSans-ExtraBold.ttf') format('truetype'), url('https://fonts.gstatic.com/s/opensans/v13/EInbV5DfGHOiMmvb1Xr-hugdm0LZdjqr5-oayXSOefg.woff2') format('woff2');
}
        @media only screen and (max-width: 639px){
        .wrapper{ width:100%;  padding: 0 !important; }
        }

        @media only screen and (max-width: 480px){
        .centerClass{ margin:0 auto !important; }
        .imgClass{ width:100% !important; height:auto; }
		.img{ text-align:center}
		.hide{ display:none;}
        .wrapper{ width:100%; padding: 0 !important; }
        .header{ width:100%; padding: 0 !important; background-image: url(http://placehold.it/320x400) !important; }
        .container{ width:300px;  padding: 0 !important; }
		.box{ width:250px;  padding: 0 !important; }
        .mobile{ width:300px; display:block; padding: 0 !important; text-align:center !important;}
        .mobile50{ width:300px; padding: 0 !important; text-align:center; }
        *[class='mobileOff'] { width: 0px !important; display: none !important; }
        *[class*='mobileOn'] { display: block !important; max-height:none !important; }
        }

    .MsoNormal {font-family:Montserrat, OpenSans ,Arial, Helvetica Neue, Helvetica, sans-serif !important;}
    </style>

					
				</head><body marginwidth='0' marginheight='0' style='margin-top: 0; margin-bottom: 0; padding-top: 0; padding-bottom: 0; width: 100%; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;' offset='0' topmargin='0' leftmargin='0' data-gr-c-s-loaded='true'><table width='100%' data-module='Notif1' align='center' cellpadding='0' cellspacing='0' border='0' class='wrapper' bgcolor='#ececec' data-bgcolor='MainBG_Color5'>
                    
                      <tbody><tr>
                        <td height='50' style='font-family: OpenSans, Arial, sans-serif; font-size:10px; line-height:10px;'></td>
                      </tr>
                </tbody></table><table width='100%' data-module='Notif2' align='center' cellpadding='0' cellspacing='0' border='0' class='wrapper' bgcolor='#ececec' data-bgcolor='MainBG_Color5'>
                    
                      <tbody><tr>
                        <td align='center'>

                            <!-- Start Container -->
                            <table width='600' border='0' align='center' cellpadding='0' cellspacing='0' bgcolor='#ffffff' style='border-radius:25px' class='container'>
                                 
                                   <tbody><tr>
                                     <td style=' border-top-left-radius:4px; border-top-right-radius:4px; font-size: 35px; line-height: 30px; color: #ffffff; font-weight: 700;' bgcolor='#42729B' align='center'></td>
                                   </tr>
                                   <tr>
                                     <td align='center' class='mobile' style='font-size:12px; line-height:24px;'><table width='100%' border='0' cellspacing='0' cellpadding='0' bgcolor='#232527' data-bgcolor='BlueBoxBG_Color' style='border-top-left-radius:4px; border-top-right-radius:4px'>
                                       <tbody><tr>
                                         <td height='20'></td>
                                       </tr>
                                         <tr>
                                           <td height='20' align='center'><img mc:edit='' editable='' src='https://newsletters-2017-sivanmyc.c9users.io/October/Internal/Campaigns/ds17logo-black.png' width='170' height='auto'></td>
                                         </tr>
                                         <tr>
                                         <td height='20'></td>
                                       </tr>
                                       <tr>
                                         <td align='center' style='font-size:34px; line-height:40px; color: #ffffff; font-weight:400' data-color='H1wht Color' data-size='H1wht size' data-min='18' data-max='50' mc:edit=''></td>
                                       </tr>
                                       <tr>
                                         
                                       </tr>
                                     </tbody></table></td>
                                   </tr>
                             </tbody></table>
                            <!-- End Container -->

                        </td>
                    </tr>
                </tbody></table><table width='100%' data-module='Notif3' align='center' cellpadding='0' cellspacing='0' border='0' class='wrapper' bgcolor='#ececec' data-bgcolor='MainBG_Color5'>
                    
                      <tbody><tr>
                        <td align='center'>

                            <!-- Start Container -->
                            <table width='100%' data-module='Notif3' align='center' cellpadding='0' cellspacing='0' border='0' class='wrapper' bgcolor='#ececec' data-bgcolor='MainBG_Color5'>
                    
                      <tbody><tr>
                        <td align='center'>

                            <!-- Start Container -->
                          <table width='600' border='0' align='center' cellpadding='0' cellspacing='0' bgcolor='#ffffff' class='container' style='border-bottom:1px #ececec solid'>
                                 
                                   <tbody><tr>
                                     <td align='center' bgcolor='#42729B' style='font-size: 35px; line-height: 30px; color: #ffffff; font-weight: 700;'></td>
                                   </tr>
                                   <tr>
                                     <td height='30'></td>
                                   </tr>
                                   <tr>
                                              <td width='330' align='center' style='font-family: Open Sans; font-size: 26px; line-height:30px; color: #2368a0; font-weight:400;' data-color='H1 Color' data-size='H1 Size' data-min='12' data-max='40' mc:edit=''><multiline label='content'><b>Password Reset</b></multiline></td>
                                          </tr>
                                   <tr>
                                     <td align='center' height='30' class='mobile'></td>
                                   </tr>
                             
                          </tbody></table>
                            <!-- End Container -->

                        </td>
                    </tr>
                </tbody></table><table width='600' cellspacing='0' cellpadding='0' bgcolor='#ffffff' data-bgcolor='Box9BGcolor' style='border-radius:4px' class='container'>
  
  <tbody><tr>
    <td><table width='100%' border='0' align='center' cellpadding='0' cellspacing='0' class='container'>
      
        <tbody><tr>
          <td height='20' align='center' valign='middle' class='mobile'></td>
        </tr>
        <tr>
      <td height='20' align='center' valign='middle' class='mobile' style='font-size:12px; line-height:18px;'>
        <!-- Start Content -->
        <table class='container' cellspacing='0' cellpadding='0' align='justify' border='0' width='500'>
          
            <tbody>
            
            

<tr>
<td align='justify' class='padding-copy' style='padding: 5px 0 5px 0; font-size: 14px; line-height: 30px; font-family: open sans; color: #232527;'><b>Hello $citizenName,</b>
<br> You have requested for reset password. Please use the following temporary to reset and create new password on the portal</td>
              </tr>
			  <tr>
              <td align='justify' class='padding-copy' style='padding: 5px 0 5px 0; font-size: 18px; line-height: 30px; font-family: open sans; color: #232527;'><b>Email : $userEmail</b>
</td>
              </tr>
			  <tr>
              <td align='justify' class='padding-copy' style='padding: 5px 0 5px 0; font-size: 18px; line-height: 30px; font-family: open sans; color: #232527;'><b>Password : $newPassword</b>
</td>
              </tr><tr>
          <td height='10' align='center' valign='middle' class='mobile'></td>
        </tr>

                           <tr>
                            <td align='left'>
                              <table>
                                <tbody><tr>
                                  <td align='left' bgcolor='#fc3f3f' style='background:#fc3f3f; padding:10px 15px;-webkit-border-radius: 2px; -moz-border-radius: 2px; border-radius: 2px;'>
                                    <div class='contentEditableContainer contentTextEditable'>
                                      <div class='contentEditable' align='left'>
                                        <a href='" . DS17_ROOT_URL . "/student-dashboard/login.php' class='link2' style='color:#ffffff;text-decoration:none;><font face=' target='_blank'><b>Access Portal</b></a>
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                              </tbody></table>
                            </td>
                          </tr>
						  <tr><td height='10'></td></tr>
						  
                        <tr>
              <td align='justify' class='padding-copy' style='padding: 5px 0 5px 0; font-size: 14px; line-height: 30px; font-family: open sans; color: #232527;'><b>Note : </b><i><font color='#8c8c8c'>
 Your password won’t be changed until unless you create a new one by clicking the above button.</font></i><font color='#8c8c8c'><i></i>  
  </font></td>
              </tr>
            <tr>
              
              </tr><tr></tr>
            <tr><td><table width='100%' cellspacing='0' cellpadding='0' border='0'><tbody><tr>
              
              </tr><tr></tr></tbody></table></td></tr>
            <tr>
              
            </tr>
            
            
            <tr>
              
              </tr>
            
          </tbody></table>
        <!-- End Content -->
      </td>
        </tr>
        <tr>
          
        </tr>
        
    </tbody></table></td>
  </tr>
  </tbody></table><table width='600' cellspacing='0' cellpadding='0' bgcolor='#ffffff' data-bgcolor='Box9BGcolor' style='border-radius:0px' class='container'>
  
  <tbody><tr>
    <td><table width='500' border='0' align='center' cellpadding='0' cellspacing='0' class='container'>
      
        <tbody><tr>
          
        </tr><tr><td align='justify' class='padding-copy' style='padding: 5px 0 5px 0; border-bottom: 1px dashed #2368a0; font-size: 14px; line-height: 25px; font-family: open sans; color: #232527;'></td></tr>
        <tr>
      <td height='20' align='center' valign='middle' class='mobile' style='font-size:12px; line-height:18px;'>
        <!-- Start Content -->
        <table class='container' cellspacing='0' cellpadding='0' align='justify' border='0' width='500'>
          
            <tbody>
            
            <tr><td style='padding: 5px 0 5px 0; font-size: 14px; line-height: 30px; font-family: open sans; color: #8c8c8c; font-style: normal;' class='padding-copy' align='left'>Thanks &amp; Regards,<br><b>Digital Summit 2017,</b><br><b> Miracle Software Systems, Inc. </b><br><b>Email :</b> <a href='mailto: apcloud@miraclesoft.com' style='font-size: 14px;color:#252327;text-decoration:none; font-family: Open Sans; color: #8c8c8c; font-style: normal'>apcloud@miraclesoft.com</a> <br><b>Phone :</b> +91-891-6623556<br>
							 
							  </td></tr>
            <tr>
              
              </tr><tr></tr>
            <tr><td><table width='100%' cellspacing='0' cellpadding='0' border='0'><tbody><tr>
              
              </tr><tr></tr></tbody></table></td></tr>
            <tr>
              
            </tr>
            
            
            <tr>
              
              </tr>
            
          </tbody></table>
        <!-- End Content -->
      </td>
        </tr>
        <tr>
          
        </tr>
        
    </tbody></table></td>
  </tr>
  </tbody></table>

                          
                          
                            <!-- End Container -->

                        </td>
                    </tr>
                </tbody></table><table width='100%' data-module='Notif4' align='center' cellpadding='0' cellspacing='0' border='0' class='wrapper' bgcolor='#ececec' data-bgcolor='MainBG_Color5'>
                    
                      <tbody><tr>
                        <td align='center'>

                            <!-- Start Container -->
                          <table width='600' border='0' align='center' cellpadding='0' cellspacing='0' bgcolor='#ffffff' style='border-radius:25px' class='container'>
                                 
                                   <tbody><tr>
                                     <td align='center' bgcolor='#42729B' style=' border-top-left-radius:4px; border-top-right-radius:4px; font-size: 35px; line-height: 30px; color: #ffffff; font-weight: 700;'></td>
                                   </tr>
                                   <tr>
                                     <td align='center' class='mobile'><table class='container' style='border-bottom-left-radius:4px; border-bottom-right-radius:4px' data-bgcolor='FootBoxBG_Color' bgcolor='#232527' border='0' cellspacing='0' cellpadding='0' width='100%'>
                                <tbody><tr><td align='center' height='30' class='mobile'></td>
                                </tr><tr>
                                                                           <td width='600' align='center' style='font-size:0!important'>
                                                                              <div style='width:100%;display:inline-block;vertical-align:top;font-size:normal;max-width:50px'>
                                                                                 <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                    <tbody>
                                                                                       <tr>
                                                                                          <td style='padding:0 10px' align='center'>
                                                                                             <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                                <tbody>
                                                                                                   <tr>
                                                                                                      <td style='height:10px;line-height:10px' height='10'></td>
                                                                                                   </tr>
                                                                                                   <tr>
                                                                                                      <td style='line-height:0!important' align='center'>
                                                                                                         <a style='text-decoration:none;display:inline-block' href='https://www.facebook.com/DigitalSummit16/' target='blank'>
                                                                                                         <img src='http://www.miraclesoft.com/images/newsletters/2016/September/facebook-1.png' alt='socials1' width='30'>
                                                                                                         </a>
                                                                                                      </td>
                                                                                                   </tr>
                                                                                                </tbody>
                                                                                             </table>
                                                                                          </td>
                                                                                       </tr>
                                                                                    </tbody>
                                                                                 </table>
                                                                              </div>
                                                                              <div style='width:100%;display:inline-block;vertical-align:top;font-size:normal;max-width:50px'>
                                                                                 <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                    <tbody>
                                                                                       <tr>
                                                                                          <td style='padding:0 10px' align='center'>
                                                                                             <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                                <tbody>
                                                                                                   <tr>
                                                                                                      <td style='height:10px;line-height:10px' height='10'></td>
                                                                                                   </tr>
                                                                                                   <tr>
                                                                                                      <td style='line-height:0!important' align='center'>
                                                                                                         <a style='text-decoration:none;display:inline-block' href='https://plus.google.com/104381127288956493644' target='blank'>
                                                                                                         <img src='http://www.miraclesoft.com/images/newsletters/2016/September/google-plus-2.png' alt='socials1' width='30'>
                                                                                                         </a>
                                                                                                      </td>
                                                                                                   </tr>
                                                                                                </tbody>
                                                                                             </table>
                                                                                          </td>
                                                                                       </tr>
                                                                                    </tbody>
                                                                                 </table>
                                                                              </div>
                                                                              <div style='width:100%;display:inline-block;vertical-align:top;font-size:normal;max-width:50px'>
                                                                                 <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                    <tbody>
                                                                                       <tr>
                                                                                          <td style='padding:0 10px' align='center'>
                                                                                             <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                                <tbody>
                                                                                                   <tr>
                                                                                                      <td style='height:10px;line-height:10px' height='10'></td>
                                                                                                   </tr>
                                                                                                   <tr>
                                                                                                      <td style='line-height:0!important' align='center'>
                                                                                                         <a style='text-decoration:none;display:inline-block' href='https://www.linkedin.com/groups/10313125' target='blank'>
                                                                                                         <img src='http://www.miraclesoft.com/images/newsletters/2016/September/linkedin-2.png' alt='socials1' width='30'>
                                                                                                         </a>
                                                                                                      </td>
                                                                                                   </tr>
                                                                                                </tbody>
                                                                                             </table>
                                                                                          </td>
                                                                                       </tr>
                                                                                    </tbody>
                                                                                 </table>
                                                                              </div>
                                                                              <div style='width:100%;display:inline-block;vertical-align:top;font-size:normal;max-width:50px'>
                                                                                 <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                    <tbody>
                                                                                       <tr>
                                                                                          <td style='padding:0 10px' align='center'>
                                                                                             <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                                <tbody>
                                                                                                   <tr>
                                                                                                      <td style='height:10px;line-height:10px' height='10'></td>
                                                                                                   </tr>
                                                                                                   <tr>
                                                                                                      <td style='line-height:0!important' align='center'>
                                                                                                         <a style='text-decoration:none;display:inline-block' href='https://www.flickr.com/people/digitalsummit/' target='blank'>
                                                                                                         <img src='http://www.miraclesoft.com/images/newsletters/2016/September/flickr-1.png' alt='socials1' width='30'>
                                                                                                         </a>
                                                                                                      </td>
                                                                                                   </tr>
                                                                                                </tbody>
                                                                                             </table>
                                                                                          </td>
                                                                                       </tr>
                                                                                    </tbody>
                                                                                 </table>
                                                                              </div>
                                                                              <div style='width:100%;display:inline-block;vertical-align:top;font-size:normal;max-width:50px'>
                                                                                 <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                    <tbody>
                                                                                       <tr>
                                                                                          <td style='padding:0 10px' align='center'>
                                                                                             <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                                <tbody>
                                                                                                   <tr>
                                                                                                      <td style='height:10px;line-height:10px' height='10'></td>
                                                                                                   </tr>
                                                                                                   <tr>
                                                                                                      <td style='line-height:0!important' align='center'>
                                                                                                         <a style='text-decoration:none;display:inline-block' href='https://twitter.com/andhracloud' target='blank'>
                                                                                                         <img src='http://www.miraclesoft.com/images/newsletters/2016/September/twitter-2.png' alt='socials2' width='30'>
                                                                                                         </a>
                                                                                                      </td>
                                                                                                   </tr>
                                                                                                </tbody>
                                                                                             </table>
                                                                                          </td>
                                                                                       </tr>
                                                                                    </tbody>
                                                                                 </table>
                                                                              </div>
                                                                              <div style='width:100%;display:inline-block;vertical-align:top;font-size:normal;max-width:50px'>
                                                                                 <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                    <tbody>
                                                                                       <tr>
                                                                                          <td style='padding:0 10px' align='center'>
                                                                                             <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                                <tbody>
                                                                                                   <tr>
                                                                                                      <td style='height:10px;line-height:10px' height='10'></td>
                                                                                                   </tr>
                                                                                                   <tr>
                                                                                                      <td style='line-height:0!important' align='center'>
                                                                                                         <a style='text-decoration:none;display:inline-block' href='https://www.youtube.com/c/DigitalSummitVizag' target='blank'>
                                                                                                         <img src='http://www.miraclesoft.com/images/newsletters/2016/September/youtube-3.png' alt='socials3' width='30'>
                                                                                                         </a>
                                                                                                      </td>
                                                                                                   </tr>
                                                                                                </tbody>
                                                                                             </table>
                                                                                          </td>
                                                                                       </tr>
                                                                                    </tbody>
                                                                                 </table>
                                                                              </div>
                                                                           </td>
                                                                        </tr>
                                    <tr><td align='center' height='30' class='mobile'></td>
                                </tr>
                            </tbody></table></td>
                                   </tr>
                             </tbody></table>
                            <!-- End Container -->

                        </td>
                    </tr>
                </tbody></table><table width='100%' data-module='Notif5' align='center' cellpadding='0' cellspacing='0' border='0' class='wrapper' bgcolor='#ECECEC' data-bgcolor='MainBG_Color22'>
                    
                      <tbody><tr>
                        <td height='40'></td>
                      </tr>
                      <tr>
                        <td align='center'>

                            <!-- Start Container -->
                            <table width='600' cellpadding='0' cellspacing='0' border='0' class='container'>
                                
                                  <tbody><tr>
                                    <td align='center' class='mobile' style='font-family: OpenSans, Arial, sans-serif; font-size:12px; line-height:24px;'>
                                        <!-- Start Content -->
                                        <table width='90%' border='0' align='center' cellpadding='0' cellspacing='0' class='container'>
                                          
                                            <tbody><tr>
                                            <td style='font-size: 14px; line-height: 20px; font-family: open sans; color:#666666;' align='center'>
  © 2017 | Miracle Software Systems, Inc.<br></td>
                                          </tr>
                                        </tbody></table>                                        <!-- End Container -->
                                    </td>
                                  </tr>
                            </tbody></table>
                            
                            <!-- End Container -->

                        </td>
                    </tr>
                    
                    <tr>
                        <td height='40'> </td><!-- Spacer -->
                    </tr>
                </tbody></table><div id='edit_link' class='hidden' style='display: none;'>

						<!-- Close Link -->
						<div class='close_link'></div>

						<!-- Edit Link Value -->
						<input type='text' id='edit_link_value' class='createlink' placeholder='Your URL'>

						<!-- Change Image Wrapper-->
						<div id='change_image_wrapper'>

							<!-- Change Image Tooltip -->
							<div id='change_image'>

								<!-- Change Image Button -->
								<p id='change_image_button'>Change &nbsp; <span class='pixel_result'></span></p>

							</div>

							<!-- Change Image Link Button -->
							<input type='button' value='' id='change_image_link'>

							<!-- Remove Image -->
							<input type='button' value='' id='remove_image'>

						</div>

						<!-- Tooltip Bottom Arrow-->
						<div id='tip'></div>

					</div></body></html>
	"; // Put your body of the message you can place html code here
		
		$mail->MsgHTML ( $htmlContent );
		
		// $mail->AddAttachment("images/asif18-logo.png"); //Attach a file here if any or comment this line,
		$send = $mail->Send (); // Send the mails
		if ($send) {
			// echo '<center><h3 style="color:#009933;">Mail sent successfully</h3></center>';
			
			return "Mail sent successfully";
		} else {
			
			// echo $mail->ErrorInfo;
			// echo '<center><h3 style="color:#FF3300;">Mail error: </h3></center>'.$mail->ErrorInfo;
			throw new Exception ( $mail->ErrorInfo );
		}
	}
	
	/*
	 * Tech talk acknowledgement
	 * Date : 11/15/2017
	 * Author : Santosh Kola
	 */
	function sendDs17HungamaAcknowledge($techeName, $email, $password, $countUserRecords) {
		$mail = new PHPMailer (); // call the class
		$mail->IsSMTP ();
		$mail->Host = SMTP_HOST; // Hostname of the mail server
		$mail->Port = SMTP_PORT; // Port of the SMTP like to be 25, 80, 465 or 587
		$mail->SMTPAuth = true; // Whether to use SMTP authentication
		$mail->SMTPSecure = SMTP_SECURE;
		$mail->Username = SMTP_UNAME; // Username for SMTP authentication any valid email created in your domain
		$mail->Password = SMTP_PWORD; // Password for SMTP authentication
		                              // $mail->AddReplyTo($email, $fname); //reply-to address
		$mail->SetFrom ( "hubbleapp@miraclesoft.com", "Digital Summit 2k17" ); // From address of the mail
		                                                                    // put your while loop here like below,
		$mail->Subject = "You have been successfully registered for Hungama - DS' 17"; // Subject od your mail
		                                                                               // $mail->AddAddress("skola2@miraclesoft.com", "Santosh Kola"); //To address who will receive this email
		$mail->AddAddress ( $email, $techeName ); // To address who will receive this email
		                                       // $mail->MsgHTML("<b>Hi, your first SMTP mail has been received. Great Job!.. <br/><br/>by <a href='http://www.asif18.com/7/php/send-mails-using-smtp-in-php-by-gmail-server-or-own-domain-server/'>Asif18</a></b>"); //Put your body of the message you can place html code here
		                                       // $htmlContent="
		
		$htmlContent = "<html xmlns='http://www.w3.org/1999/xhtml' class='gr__newsletters-2017-sivanmyc_c9users_io gr__temp-sivakishore675_c9users_io'><head>
 <link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans'>
					
				<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0'><meta http-equiv='Content-Type' content='text/html; charset=UTF-8'><meta http-equiv='X-UA-Compatible' content='IE=edge'><title>Digital Summit 2017</title><style>

        .ReadMsgBody { width: 100%; background-color: #D2D7D3; }
        .ExternalClass { width: 100%; background-color: #D2D7D3; }
		.a { text-decoration:none; }
        body { width: 100%; background-color: #d8eaf8; margin: 0; padding: 0; -webkit-font-smoothing: ; font-family:OpenSans ,Arial, Helvetica Neue, Helvetica, sans-serif }
        @-ms-viewport{ width: device-width; }

@font-face {
  font-family: 'Montserrat';
  font-style: normal;
  font-weight: 400;
  src: url('Fonts/Montserrat-Regular.ttf') format('truetype'), url('https://fonts.gstatic.com/s/montserrat/v6/zhcz-_WihjSQC0oHJ9TCYPk_vArhqVIZ0nv9q090hN8.woff2') format('woff2');
}
@font-face {
  font-family: 'Montserrat';
  font-style: Bold;
  font-weight: 700;
  src: url('Fonts/Montserrat-Bold.ttf') format('truetype'), url('https://fonts.gstatic.com/s/montserrat/v6/IQHow_FEYlDC4Gzy_m8fcoWiMMZ7xLd792ULpGE4W_Y.woff2') format('woff2');
}
@font-face {
  font-family: 'OpenSans';
  font-style: normal;
  font-weight: 400;
  src: url('Fonts/OpenSans-Regular.ttf') format('truetype'), url('https://fonts.gstatic.com/s/opensans/v13/cJZKeOuBrn4kERxqtaUH3VtXRa8TVwTICgirnJhmVJw.woff2') format('woff2');
}
@font-face {
  font-family: 'OpenSans';
  font-style: normal;
  font-weight: 600;
  src: url('Fonts/OpenSans-Semibold.ttf') format('truetype'), url('https://fonts.gstatic.com/s/opensans/v13/MTP_ySUJH_bn48VBG8sNSugdm0LZdjqr5-oayXSOefg.woff2') format('woff2');
}

@font-face {
  font-family: 'OpenSans';
  font-style: extraBold;
  font-weight: 900;
  src: url('Fonts/OpenSans-ExtraBold.ttf') format('truetype'), url('https://fonts.gstatic.com/s/opensans/v13/EInbV5DfGHOiMmvb1Xr-hugdm0LZdjqr5-oayXSOefg.woff2') format('woff2');
}
        @media only screen and (max-width: 639px){
        .wrapper{ width:100%;  padding: 0 !important; }
        }

        @media only screen and (max-width: 480px){
        .centerClass{ margin:0 auto !important; }
        .imgClass{ width:100% !important; height:auto; }
		.img{ text-align:center}
		.hide{ display:none;}
        .wrapper{ width:100%; padding: 0 !important; }
        .header{ width:100%; padding: 0 !important; background-image: url(http://placehold.it/320x400) !important; }
        .container{ width:300px;  padding: 0 !important; }
		.box{ width:250px;  padding: 0 !important; }
        .mobile{ width:300px; display:block; padding: 0 !important; text-align:center !important;}
        .mobile50{ width:300px; padding: 0 !important; text-align:center; }
        *[class='mobileOff'] { width: 0px !important; display: none !important; }
        *[class*='mobileOn'] { display: block !important; max-height:none !important; }
        }

    .MsoNormal {font-family:Montserrat, OpenSans ,Arial, Helvetica Neue, Helvetica, sans-serif !important;}
    </style>

					
				</head><body marginwidth='0' marginheight='0' style='margin-top: 0; margin-bottom: 0; padding-top: 0; padding-bottom: 0; width: 100%; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;' offset='0' topmargin='0' leftmargin='0' data-gr-c-s-loaded='true'><table width='100%' data-module='Notif1' align='center' cellpadding='0' cellspacing='0' border='0' class='wrapper' bgcolor='#ececec' data-bgcolor='MainBG_Color5'>
                    
                      <tbody><tr>
                        <td height='50' style='font-family: OpenSans, Arial, sans-serif; font-size:10px; line-height:10px;'></td>
                      </tr>
                </tbody></table><table width='100%' data-module='Notif2' align='center' cellpadding='0' cellspacing='0' border='0' class='wrapper' bgcolor='#ececec' data-bgcolor='MainBG_Color5'>
                    
                      <tbody><tr>
                        <td align='center'>

                            <!-- Start Container -->
                            <table width='600' border='0' align='center' cellpadding='0' cellspacing='0' bgcolor='#ffffff' style='border-radius:25px' class='container'>
                                 
                                   <tbody><tr>
                                     <td style=' border-top-left-radius:4px; border-top-right-radius:4px; font-size: 35px; line-height: 30px; color: #ffffff; font-weight: 700;' bgcolor='#42729B' align='center'></td>
                                   </tr>
                                   <tr>
                                     <td align='center' class='mobile' style='font-size:12px; line-height:24px;'><table width='100%' border='0' cellspacing='0' cellpadding='0' bgcolor='#232527' data-bgcolor='BlueBoxBG_Color' style='border-top-left-radius:4px; border-top-right-radius:4px'>
                                       <tbody><tr>
                                         <td height='20'></td>
                                       </tr>
                                         <tr>
                                           <td height='20' align='center'><img mc:edit='' editable='' src='https://newsletters-2017-sivanmyc.c9users.io/October/Internal/Campaigns/ds17logo-black.png' width='170' height='auto'></td>
                                         </tr>
                                         <tr>
                                         <td height='20'></td>
                                       </tr>
                                       <tr>
                                         <td align='center' style='font-size:34px; line-height:40px; color: #ffffff; font-weight:400' data-color='H1wht Color' data-size='H1wht size' data-min='18' data-max='50' mc:edit=''></td>
                                       </tr>
                                       <tr>
                                         
                                       </tr>
                                     </tbody></table></td>
                                   </tr>
                             </tbody></table>
                            <!-- End Container -->

                        </td>
                    </tr>
                </tbody></table><table width='100%' data-module='Notif3' align='center' cellpadding='0' cellspacing='0' border='0' class='wrapper' bgcolor='#ececec' data-bgcolor='MainBG_Color5'>
                    
                      <tbody><tr>
                        <td align='center'>

                            <!-- Start Container -->
                            <table width='100%' data-module='Notif3' align='center' cellpadding='0' cellspacing='0' border='0' class='wrapper' bgcolor='#ececec' data-bgcolor='MainBG_Color5'>
                    
                      <tbody><tr>
                        <td align='center'>

                            <!-- Start Container -->
                          <table width='600' border='0' align='center' cellpadding='0' cellspacing='0' bgcolor='#ffffff' class='container' style='border-bottom:1px #ececec solid'>
                                 
                                   <tbody><tr>
                                     <td align='center' bgcolor='#42729B' style='font-size: 35px; line-height: 30px; color: #ffffff; font-weight: 700;'></td>
                                   </tr>
                                   <tr>
                                     <td height='30'></td>
                                   </tr>
                                   <tr>
                                              <td width='330' align='center' style='font-family: Open Sans; font-size: 26px; line-height:30px; color: #2368a0; font-weight:400;' data-color='H1 Color' data-size='H1 Size' data-min='12' data-max='40' mc:edit=''><multiline label='content'><b>Your got Registered Succesfully! </b></multiline></td>
                                          </tr>
                                   <tr>
                                     <td align='center' height='30' class='mobile'></td>
                                   </tr>
                             
                          </tbody></table>
                            <!-- End Container -->

                        </td>
                    </tr>
                </tbody></table><table width='600' cellspacing='0' cellpadding='0' bgcolor='#ffffff' data-bgcolor='Box9BGcolor' style='border-radius:4px' class='container'>
  
  <tbody><tr>
    <td><table width='100%' border='0' align='center' cellpadding='0' cellspacing='0' class='container'>
      
        <tbody><tr>
          <td height='20' align='center' valign='middle' class='mobile'></td>
        </tr>
        <tr>
      <td height='20' align='center' valign='middle' class='mobile' style='font-size:12px; line-height:18px;'>
        <!-- Start Content -->
        <table class='container' cellspacing='0' cellpadding='0' align='justify' border='0' width='500'>
          
            <tbody>
            
            <tr>
            <td align='justify' class='padding-copy' style='padding: 5px 0 5px 0; font-size: 14px; line-height: 30px; font-family: open sans; color: #232527;'><b>Hello $techeName,</b>
<br>Thank you for your registration on Hungama at Digital Summit’17, One of our coordinators will get in touch with you shortly.
 </td>
              </tr>";
		if ($countUserRecords === 0) {
			$htmlContent = $htmlContent . "<tr>
      <td height='20' align='center' valign='middle' class='mobile' style='font-size:12px; line-height:18px;'>
        <!-- Start Content -->
        <table class='container' cellspacing='0' cellpadding='0' align='justify' border='0' width='500'>
          
            <tbody>
            
            
<tr>
              
              </tr>
<tr>
<td align='justify' class='padding-copy' style='padding: 5px 0 5px 0; font-size: 14px; line-height: 30px; font-family: open sans; color: #232527;'><b>User Name  &nbsp;: &nbsp;$email</b>
  </td>
              </tr><tr>
              <td align='justify' class='padding-copy' style='padding: 5px 0 5px 0; font-size: 14px; line-height: 30px; font-family: open sans; color: #232527;'><b>Password&nbsp; &nbsp;&nbsp; : &nbsp;$password</b>
  </td>
              </tr><tr>
              <td align='justify' class='padding-copy' style='padding: 5px 0 5px 0; font-size: 14px; line-height: 30px; font-family: open sans; color: #232527;'><b>Note : </b><i><font color='#8c8c8c'>The above password is only for temporary login. So, please Sign in and
  change your password and make sure that you are not sharing it with anyone.</font></i><font color='#8c8c8c'><i></i>  
  </font></td>
              </tr><tr>
                            <td align='left'>
                              <table>
                                <tbody><tr>
                                  <td align='left' bgcolor='#fc3f3f' style='background:#fc3f3f; padding:8px 10px;-webkit-border-radius: 2px; 
           -moz-border-radius: 2px; border-radius: 2px;'>
                                    <div class='contentEditableContainer contentTextEditable'>
                                      <div class='contentEditable' align='left'>
        <a href='" . DS17_ROOT_URL . "/student-dashboard/login.php' class='link2' style='color:#ffffff;text-decoration:none;><font face=' target='_blank'><b>Access Student Portal</b></a>
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                              </tbody></table>
                            </td>
                          </tr>
            <tr>
              
              </tr><tr></tr>
            <tr><td><table width='100%' cellspacing='0' cellpadding='0' border='0'><tbody><tr>
              
              </tr><tr></tr></tbody></table></td></tr>
            <tr>
              
            </tr>
            
            
            <tr>
              
              </tr>
            
          </tbody></table>
        <!-- End Content -->
      </td>
        </tr>";
		}
		$htmlContent = $htmlContent . "<tr>
              
              </tr><tr></tr>
            <tr><td><table width='100%' cellspacing='0' cellpadding='0' border='0'><tbody><tr>
              
              </tr><tr></tr></tbody></table></td></tr>
            <tr>
              
            </tr>
            
            
            <tr>
              
              </tr>
            
          </tbody></table>
        <!-- End Content -->
      </td>
        </tr>
        <tr>
          
        </tr>
        
    </tbody></table></td>
  </tr>
  </tbody></table><table width='600' cellspacing='0' cellpadding='0' bgcolor='#ffffff' data-bgcolor='Box9BGcolor' style='border-radius:0px' class='container'>
  
  <tbody><tr>
    <td><table width='500' border='0' align='center' cellpadding='0' cellspacing='0' class='container'>
      
        <tbody><tr>
          
        </tr><tr><td align='justify' class='padding-copy' style='padding: 5px 0 5px 0; border-bottom: 1px dashed #2368a0; font-size: 14px; line-height: 25px; font-family: open sans; color: #232527;'></td></tr>
        <tr>
      <td height='20' align='center' valign='middle' class='mobile' style='font-size:12px; line-height:18px;'>
        <!-- Start Content -->
        <table class='container' cellspacing='0' cellpadding='0' align='justify' border='0' width='500'>
          
            <tbody>
            
            <tr><td style='padding: 5px 0 5px 0; font-size: 14px; line-height: 30px; font-family: open sans; color: #8c8c8c; font-style: normal;' class='padding-copy' align='left'>Thanks &amp; Regards,<br><b>Digital Summit 2017,</b><br><b> Miracle Software Systems, Inc. </b><br><b>Email :</b> <a href='mailto: apcloud@miraclesoft.com' style='font-size: 14px;color:#252327;text-decoration:none; font-family: Open Sans; color: #8c8c8c; font-style: normal'>apcloud@miraclesoft.com</a> <br><b>Phone :</b> +91-891-6623556<br>
							 
							  </td></tr>
            <tr>
              
              </tr><tr></tr>
            <tr><td><table width='100%' cellspacing='0' cellpadding='0' border='0'><tbody><tr>
              
              </tr><tr></tr></tbody></table></td></tr>
            <tr>
              
            </tr>
            
            
            <tr>
              
              </tr>
            
          </tbody></table>
        <!-- End Content -->
      </td>
        </tr>
        <tr>
          
        </tr>
        
    </tbody></table></td>
  </tr>
  </tbody></table>

                          
                          
                            <!-- End Container -->

                        </td>
                    </tr>
                </tbody></table><table width='100%' data-module='Notif4' align='center' cellpadding='0' cellspacing='0' border='0' class='wrapper' bgcolor='#ececec' data-bgcolor='MainBG_Color5'>
                    
                      <tbody><tr>
                        <td align='center'>

                            <!-- Start Container -->
                          <table width='600' border='0' align='center' cellpadding='0' cellspacing='0' bgcolor='#ffffff' style='border-radius:25px' class='container'>
                                 
                                   <tbody><tr>
                                     <td align='center' bgcolor='#42729B' style=' border-top-left-radius:4px; border-top-right-radius:4px; font-size: 35px; line-height: 30px; color: #ffffff; font-weight: 700;'></td>
                                   </tr>
                                   <tr>
                                     <td align='center' class='mobile'><table class='container' style='border-bottom-left-radius:4px; border-bottom-right-radius:4px' data-bgcolor='FootBoxBG_Color' bgcolor='#232527' border='0' cellspacing='0' cellpadding='0' width='100%'>
                                <tbody><tr><td align='center' height='30' class='mobile'></td>
                                </tr><tr>
                                                                           <td width='600' align='center' style='font-size:0!important'>
                                                                              <div style='width:100%;display:inline-block;vertical-align:top;font-size:normal;max-width:50px'>
                                                                                 <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                    <tbody>
                                                                                       <tr>
                                                                                          <td style='padding:0 10px' align='center'>
                                                                                             <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                                <tbody>
                                                                                                   <tr>
                                                                                                      <td style='height:10px;line-height:10px' height='10'></td>
                                                                                                   </tr>
                                                                                                   <tr>
                                                                                                      <td style='line-height:0!important' align='center'>
                                                                                                         <a style='text-decoration:none;display:inline-block' href='https://www.facebook.com/DigitalSummit16/' target='blank'>
                                                                                                         <img src='http://www.miraclesoft.com/images/newsletters/2016/September/facebook-1.png' alt='socials1' width='30'>
                                                                                                         </a>
                                                                                                      </td>
                                                                                                   </tr>
                                                                                                </tbody>
                                                                                             </table>
                                                                                          </td>
                                                                                       </tr>
                                                                                    </tbody>
                                                                                 </table>
                                                                              </div>
                                                                              <div style='width:100%;display:inline-block;vertical-align:top;font-size:normal;max-width:50px'>
                                                                                 <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                    <tbody>
                                                                                       <tr>
                                                                                          <td style='padding:0 10px' align='center'>
                                                                                             <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                                <tbody>
                                                                                                   <tr>
                                                                                                      <td style='height:10px;line-height:10px' height='10'></td>
                                                                                                   </tr>
                                                                                                   <tr>
                                                                                                      <td style='line-height:0!important' align='center'>
                                                                                                         <a style='text-decoration:none;display:inline-block' href='https://plus.google.com/104381127288956493644' target='blank'>
                                                                                                         <img src='http://www.miraclesoft.com/images/newsletters/2016/September/google-plus-2.png' alt='socials1' width='30'>
                                                                                                         </a>
                                                                                                      </td>
                                                                                                   </tr>
                                                                                                </tbody>
                                                                                             </table>
                                                                                          </td>
                                                                                       </tr>
                                                                                    </tbody>
                                                                                 </table>
                                                                              </div>
                                                                              <div style='width:100%;display:inline-block;vertical-align:top;font-size:normal;max-width:50px'>
                                                                                 <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                    <tbody>
                                                                                       <tr>
                                                                                          <td style='padding:0 10px' align='center'>
                                                                                             <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                                <tbody>
                                                                                                   <tr>
                                                                                                      <td style='height:10px;line-height:10px' height='10'></td>
                                                                                                   </tr>
                                                                                                   <tr>
                                                                                                      <td style='line-height:0!important' align='center'>
                                                                                                         <a style='text-decoration:none;display:inline-block' href='https://www.linkedin.com/groups/10313125' target='blank'>
                                                                                                         <img src='http://www.miraclesoft.com/images/newsletters/2016/September/linkedin-2.png' alt='socials1' width='30'>
                                                                                                         </a>
                                                                                                      </td>
                                                                                                   </tr>
                                                                                                </tbody>
                                                                                             </table>
                                                                                          </td>
                                                                                       </tr>
                                                                                    </tbody>
                                                                                 </table>
                                                                              </div>
                                                                              <div style='width:100%;display:inline-block;vertical-align:top;font-size:normal;max-width:50px'>
                                                                                 <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                    <tbody>
                                                                                       <tr>
                                                                                          <td style='padding:0 10px' align='center'>
                                                                                             <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                                <tbody>
                                                                                                   <tr>
                                                                                                      <td style='height:10px;line-height:10px' height='10'></td>
                                                                                                   </tr>
                                                                                                   <tr>
                                                                                                      <td style='line-height:0!important' align='center'>
                                                                                                         <a style='text-decoration:none;display:inline-block' href='https://www.flickr.com/people/digitalsummit/' target='blank'>
                                                                                                         <img src='http://www.miraclesoft.com/images/newsletters/2016/September/flickr-1.png' alt='socials1' width='30'>
                                                                                                         </a>
                                                                                                      </td>
                                                                                                   </tr>
                                                                                                </tbody>
                                                                                             </table>
                                                                                          </td>
                                                                                       </tr>
                                                                                    </tbody>
                                                                                 </table>
                                                                              </div>
                                                                              <div style='width:100%;display:inline-block;vertical-align:top;font-size:normal;max-width:50px'>
                                                                                 <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                    <tbody>
                                                                                       <tr>
                                                                                          <td style='padding:0 10px' align='center'>
                                                                                             <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                                <tbody>
                                                                                                   <tr>
                                                                                                      <td style='height:10px;line-height:10px' height='10'></td>
                                                                                                   </tr>
                                                                                                   <tr>
                                                                                                      <td style='line-height:0!important' align='center'>
                                                                                                         <a style='text-decoration:none;display:inline-block' href='https://twitter.com/andhracloud' target='blank'>
                                                                                                         <img src='http://www.miraclesoft.com/images/newsletters/2016/September/twitter-2.png' alt='socials2' width='30'>
                                                                                                         </a>
                                                                                                      </td>
                                                                                                   </tr>
                                                                                                </tbody>
                                                                                             </table>
                                                                                          </td>
                                                                                       </tr>
                                                                                    </tbody>
                                                                                 </table>
                                                                              </div>
                                                                              <div style='width:100%;display:inline-block;vertical-align:top;font-size:normal;max-width:50px'>
                                                                                 <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                    <tbody>
                                                                                       <tr>
                                                                                          <td style='padding:0 10px' align='center'>
                                                                                             <table cellspacing='0' cellpadding='0' border='0' align='center' width='100%'>
                                                                                                <tbody>
                                                                                                   <tr>
                                                                                                      <td style='height:10px;line-height:10px' height='10'></td>
                                                                                                   </tr>
                                                                                                   <tr>
                                                                                                      <td style='line-height:0!important' align='center'>
                                                                                                         <a style='text-decoration:none;display:inline-block' href='https://www.youtube.com/c/DigitalSummitVizag' target='blank'>
                                                                                                         <img src='http://www.miraclesoft.com/images/newsletters/2016/September/youtube-3.png' alt='socials3' width='30'>
                                                                                                         </a>
                                                                                                      </td>
                                                                                                   </tr>
                                                                                                </tbody>
                                                                                             </table>
                                                                                          </td>
                                                                                       </tr>
                                                                                    </tbody>
                                                                                 </table>
                                                                              </div>
                                                                           </td>
                                                                        </tr>
                                    <tr><td align='center' height='30' class='mobile'></td>
                                </tr>
                            </tbody></table></td>
                                   </tr>
                             </tbody></table>
                            <!-- End Container -->

                        </td>
                    </tr>
                </tbody></table><table width='100%' data-module='Notif5' align='center' cellpadding='0' cellspacing='0' border='0' class='wrapper' bgcolor='#ECECEC' data-bgcolor='MainBG_Color22'>
                    
                      <tbody><tr>
                        <td height='40'></td>
                      </tr>
                      <tr>
                        <td align='center'>

                            <!-- Start Container -->
                            <table width='600' cellpadding='0' cellspacing='0' border='0' class='container'>
                                
                                  <tbody><tr>
                                    <td align='center' class='mobile' style='font-family: OpenSans, Arial, sans-serif; font-size:12px; line-height:24px;'>
                                        <!-- Start Content -->
                                        <table width='90%' border='0' align='center' cellpadding='0' cellspacing='0' class='container'>
                                          
                                            <tbody><tr>
                                            <td style='font-size: 14px; line-height: 20px; font-family: open sans; color:#666666;' align='center'>
  © 2017 | Miracle Software Systems, Inc.<br></td>
                                          </tr>
                                        </tbody></table>                                        <!-- End Container -->
                                    </td>
                                  </tr>
                            </tbody></table>
                            
                            <!-- End Container -->

                        </td>
                    </tr>
                    
                    <tr>
                        <td height='40'> </td><!-- Spacer -->
                    </tr>
                </tbody></table><div id='edit_link' class='hidden' style='display: none;'>

						<!-- Close Link -->
						<div class='close_link'></div>

						<!-- Edit Link Value -->
						<input type='text' id='edit_link_value' class='createlink' placeholder='Your URL'>

						<!-- Change Image Wrapper-->
						<div id='change_image_wrapper'>

							<!-- Change Image Tooltip -->
							<div id='change_image'>

								<!-- Change Image Button -->
								<p id='change_image_button'>Change &nbsp; <span class='pixel_result'></span></p>

							</div>

							<!-- Change Image Link Button -->
							<input type='button' value='' id='change_image_link'>

							<!-- Remove Image -->
							<input type='button' value='' id='remove_image'>

						</div>

						<!-- Tooltip Bottom Arrow-->
						<div id='tip'></div>

					</div></body></html>
	"; // Put your body of the message you can place html code here
		
		$mail->MsgHTML ( $htmlContent );
		
		// $mail->AddAttachment("images/asif18-logo.png"); //Attach a file here if any or comment this line,
		$send = $mail->Send (); // Send the mails
		if ($send) {
			// echo '<center><h3 style="color:#009933;">Mail sent successfully</h3></center>';
			
			return "Mail sent successfully";
		} else {
			// echo '<center><h3 style="color:#FF3300;">Mail error: </h3></center>'.$mail->ErrorInfo;
			throw new Exception ( $mail->ErrorInfo );
		}
	}
	
	/*
	 * JobFair acknowledgement
	 * Date : 12/06/2017
	 * Author : Phani Kanuri
	 */
	function sendDs17FobFairAcknowledge($candidateName, $email, $password, $countUserRecords) {
		$mail = new PHPMailer (); // call the class
		$mail->IsSMTP ();
		$mail->Host = SMTP_HOST; // Hostname of the mail server
		$mail->Port = SMTP_PORT; // Port of the SMTP like to be 25, 80, 465 or 587
		$mail->SMTPAuth = true; // Whether to use SMTP authentication
		$mail->SMTPSecure = SMTP_SECURE;
		$mail->Username = SMTP_UNAME; // Username for SMTP authentication any valid email created in your domain
		$mail->Password = SMTP_PWORD; // Password for SMTP authentication
		                              // $mail->AddReplyTo($email, $fname); //reply-to address
		$mail->SetFrom ( "hubbleapp@miraclesoft.com", "Digital Summit 2k17" ); // From address of the mail
		                                                                       // put your while loop here like below,
		$mail->Subject = "You have been successfully registered for Job Fair - DS' 17"; // Subject od your mail
		                                                                                // $mail->AddAddress("skola2@miraclesoft.com", "Santosh Kola"); //To address who will receive this email
		$mail->AddAddress ( $email, $candidateName ); // To address who will receive this email
		                                              // $mail->MsgHTML("<b>Hi, your first SMTP mail has been received. Great Job!.. <br/><br/>by <a href='http://www.asif18.com/7/php/send-mails-using-smtp-in-php-by-gmail-server-or-own-domain-server/'>Asif18</a></b>"); //Put your body of the message you can place html code here
		                                              // $htmlContent="
		
		$htmlContent = "<html xmlns='http://www.w3.org/1999/xhtml' <head=''><head><link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans'>

					
				<meta http-equiv='Content-Type' content='text/html; charset=utf-8'><meta name='viewport' content='width=display-width, initial-scale=1.0, maximum-scale=1.0,'><title>Job Fair Confirmation</title><style>
		@import url(https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i);
		
		
		 .spinning {
    animation-name: spin;
    animation-duration: 4000ms;
    animation-iteration-count: infinite;
    animation-timing-function: linear;
}
            
@keyframes spin {
    from {
        transform:rotate(0deg);
    }
    to {
        transform:rotate(360deg);
    }
}

	html { width: 100%; }
			body {margin:0; padding:0; width:100%; -webkit-text-size-adjust:none; -ms-text-size-adjust:none;}
			img { display: block !important; border:0; -ms-interpolation-mode:bicubic;}

			.ReadMsgBody { width: 100%;}
			.ExternalClass {width: 100%;}
			.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div { line-height: 100%; }
			.images {display:block !important; width:100% !important;}
				
			.MsoNormal {font-family: open sans;}			
			 p {margin:0 !important; padding:0 !important;}	
					
			.display-button td, .display-button a  {font-family: open sans;}
			.display-button a:hover {text-decoration:none !important;}	

			/* MEDIA QUIRES */
			
			 @media only screen and (max-width:799px)
            {
                 body {width:auto !important;}
				.display-width {width:100% !important;}	
				.res-padding {padding:0 20px !important;}	
				.display-width-inner {width:600px !important;}
            }
			
			@media only screen and (max-width:768px)
            {
				.padding-bottom{padding-right:83px !important;}
				.padding-top{padding-left:83px !important;}
				.about-height{height:20px !important;}
			}
			
			@media only screen and (max-width:660px)
            {
				.about-height{height:15px !important;}
				.padding-bottom{padding-right:19px !important;}
				.padding-top{padding-left:19px !important;}
			}
		
			@media only screen and (max-width:639px)
			{
				.display-width-inner, .display-width-child {width:100% !important;}
				td[class='height-hidden'] {display:none !important;}
				.height40 {height:40px !important;}
				.height20 {height:20px !important;}
				.height60 {height:60px !important;}
				.subheight {line-height:20px !important;}
				.height30 {height:30px !important;}
				.res-padding1 { padding:0 20px !important; }
				.text-center {text-align:center !important;}
				.imagecenter {margin:0 auto !important;}
				.hide-border { border-right:0 !important;}
				.padding100 {padding-bottom:100px !important;}
				.price2 {width:282px !important;}
				.clients {width:292px !important;}
				.pad-right{padding-right:0px !important;}
				.padding-bottom{padding-right:0px !important;}
				.padding-top{padding-left:0px !important;}
				.padding-bottom{padding-bottom:60px !important;}
				.padding-img-top{padding-top:60px !important;}
				.about-height{height:0px !important;}
			}

			@media only screen and (max-width:480px) 
			{
			   .display-width table {width:100% !important;}
			   .button-width .display-button {width:auto !important;}
			   .display-width .price2 {width:282px !important;}
			   .display-width .clients {width:292px !important;}
			}
			
			@media only screen and (max-width:340px) 
			{
			  
			   .display-width .price2 {width:100% !important;}
			   .display-width .clients {width:100% !important;}
			}
			
		</style>

					
				</head><body marginwidth='0' marginheight='0' style='margin-top: 0; margin-bottom: 0; padding-top: 0; padding-bottom: 0; width: 100%; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;' offset='0' topmargin='0' leftmargin='0' data-gr-c-s-loaded='true'><table align='center' bgcolor='#b7b2b3' border='0' cellpadding='0' cellspacing='0' width='100%' data-module='Menu' data-bgcolor='Main BG' class=''>
			
				<tbody><tr>
					<td align='center'>
						<!-- ID:BG MENU -->
						<table align='center' bgcolor='#fff' border='0' cellpadding='0' cellspacing='0' class='display-width' width='800' data-bgcolor='Menu BG'>
							
								<tbody><tr>
									<td align='center' class='res-padding'>
										<table align='center' border='0' cellpadding='0' cellspacing='0' class='display-width-inner' width='600'>
											
												<tbody><tr>
													<td height='10' class='height30' style='mso-line-height-rule:exactly; line-height:10px; font-size:0;'>
														&nbsp;
													</td>
												</tr>
												<tr>
													<td>
														<table align='left' border='0' cellpadding='0' cellspacing='0' class='display-width-child' width='25%' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; width:auto;'>
															<tbody><tr>
																<td align='center'>
																	<table align='center' border='0' cellpadding='0' cellspacing='0' style='width:auto !important;'>
																		<tbody>
																		  <tr>
																			<td height='05' class='height-hidden' style='mso-line-height-rule:exactly; line-height:05px; font-size:0;'>
																				&nbsp;
																			</td>
																		</tr>
																		<tr>
																			<!-- ID:TXT MENU -->
																			<td align='center' valign='middle' style='line-height:50px; font-size:0;'>
																				 <a href='#' style='color:#666666; text-decoration:none;' data-color='Menu'> </a><a href='http://www.miraclesoft.com/digitalsummit/' target='blank'> <img src='http://www.miraclesoft.com/images/newsletters/2017/December/ds17.png' alt='150x50' width='70' height='auto' style='margin:0; border:0; padding:0; display:block;'></a>
																			</td>
																		</tr>
																	</tbody></table>
																</td>
															</tr>
														</tbody></table>
														<table align='left' border='0' cellpadding='0' cellspacing='0' class='display-width-child' width='1' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;'>
															
																<tbody><tr>
																	<td height='10' width='1'>
																	</td>
																</tr>
															
														</tbody></table>
														<table align='right' border='0' cellpadding='0' cellspacing='0' class='display-width-child' width='29%' style='border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt;width:auto;'>
															<tbody><tr>
																<td align='center'>
																	<table align='center' border='0' cellspacing='0' cellpadding='0' style='width:auto !important'>
																		<tbody><tr>
																			<td height='20' class='height-hidden' style='mso-line-height-rule:exactly; line-height:10px; font-size:0;'>
																				&nbsp;
																			</td>
																		</tr>
																		</tbody></table><table align='right' border='0' cellpadding='0' cellspacing='0' class='display-width-child' width='29%' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; width:auto;'>
															<tbody><tr data-cloud9-id='2165'>
                                       <td data-cloud9-id='2166' align='center'>
                                          <table data-cloud9-id='2167' style='width:auto !important;' cellspacing='0' cellpadding='0' border='0' align='center'>
                                             <tbody data-cloud9-id='2168'>
                                                <tr data-cloud9-id='2169'>
                                                   <td data-cloud9-id='2170' class='MsoNormal' style='color:#232527; font-family:Open Sans; font-size:16px; line-height:24px; letter-spacing:1px;' align='center'>
                                                      <a data-cloud9-id='2171' href='http://www.miraclesoft.com/digitalsummit/' target='Blank' style='color:#232527; text-decoration:none;' data-color='Footer Menu' data-size='Footer Menu' data-min='12' data-max='34'>
                                                      Home
                                                      </a>
                                                   </td>
                                                   
                                                   
                                                   <td data-cloud9-id='2175' class='MsoNormal' style='color:#232527; font-family:Open Sans; font-size:25px; line-height:20px; padding-bottom:13px;' data-color='Footer Menu' data-size='Footer Menu' data-min='12' data-max='34' width='30' align='center'></td>
                                                   <td data-cloud9-id='2176' class='MsoNormal' style='color:#232527; font-family:Open Sans; font-size:16px; line-height:24px; letter-spacing:1px;' align='center'>
                                                      <a data-cloud9-id='2177' href='http://www.miraclesoft.com/digitalsummit/events/' target='Blank' style='color:#232527; text-decoration:none;' data-color='Footer Menu' data-size='Footer Menu' data-min='12' data-max='34'>Events</a>
                                                   </td>
                                                   <td data-cloud9-id='2178' class='MsoNormal' style='color:#232527; font-family:Open Sans; font-size:25px; line-height:20px; padding-bottom:13px;' data-color='Footer Menu' data-size='Footer Menu' data-min='12' data-max='34' width='30' align='center'></td>
                                                   <td data-cloud9-id='2179' class='MsoNormal' style='color:#232527; font-family:Open Sans; font-size:16px; line-height:24px; letter-spacing:1px;' align='center'>
                                                      <a data-cloud9-id='2180' href='http://www.miraclesoft.com/digitalsummit/contact.php' target='Blank' style='color:#232527; text-decoration:none;' data-color='Footer Menu' data-size='Footer Menu' data-min='12' data-max='34'>
                                                      Contact
                                                      </a>
                                                   </td>
                                                </tr>
                                             </tbody>
                                          </table>
                                       </td>
                                    </tr>
														</tbody></table>
																		</td></tr><tr>
																			<td height='10' class='height-hidden' style='mso-line-height-rule:exactly; line-height:10px; font-size:0;'>
																				&nbsp;
																			</td>
																		</tr>
																	</tbody></table>
																</td>
															</tr>
														</tbody></table>
													</td>
												</tr>
												<tr>
													<td height='10' class='height30' style='mso-line-height-rule:exactly; line-height:10px; font-size:0;'>
														&nbsp;
													</td>
												</tr>
											
										</tbody></table>
									</td>
								</tr>
							
						</tbody></table>
					
				
			
		<table align='center' bgcolor='#b7b2b3' border='0' cellpadding='0' cellspacing='0' width='100%' data-module='Header' data-bgcolor='Main BG'>
			
				<tbody><tr>
					<td align='center'>
						<table align='center' bgcolor='#000000' border='0' cellpadding='0' cellspacing='0' class='display-width' width='800' data-bgcolor='Header Section BG'>
								
								<tbody><tr>
									<td align='center'>
									
										<div style='margin:auto;'>
											<table data-bg='Header BG Image' style='background-image: url(&quot;http://www.miraclesoft.com/images/newsletters/2017/November/universitylecture.jpg&quot;); background-position: center center;background-repeat: no-repeat;' width='100%' cellspacing='0' cellpadding='0' border='0' background='http://www.miraclesoft.com/images/newsletters/2017/November/universitylecture.jpg' align='center'>
													
													<tbody><tr>
														<td align='center' class='res-padding'>
															<table align='center' border='0' class='display-width-inner' cellpadding='0' cellspacing='0' width='600'>
																<tbody><tr>
																	<td height='30'></td>
																</tr>
																<tr>
																	<td>
																		<table align='left' border='0' cellpadding='0' cellspacing='0' class='display-width' width='100%' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;'>
																			
																				<tbody><tr>
																					<td align='center' class='Heading' style='color:#ffffff;font-family: open sans;font-weight:700;text-transform:normal;font-size: 48px;line-height:45px;letter-spacing:1px;' data-color='Header Heading' data-size='Header Heading' data-min='12' data-max='70'>Registration Confirmed</td>
																				</tr>
																				
																				<tr>
																					<td height='20'></td>
																				</tr><tr><td align='center'><img alt='spinning' editable='true' width='200' height='auto' src='http://www.miraclesoft.com/images/newsletters/heading-divider-img.png'></td></tr>
																				<tr>
																					<td height='20'></td>
																				</tr><tr>
																					<td align='center' class='MsoNormal' style='color:#ffffff;font-family: open sans;font-size:18px;font-weight:400;line-height:24px;letter-spacing:1px;' data-color='Header Content' data-size='Header Content' data-min='12' data-max='34'>Job Fair – December 17th, 2017 | Miracle Valley, Vizag(AP)
</td>
																				</tr>
																				
																				
																				
																		</tbody></table>
																	</td>
																</tr>
																<tr>
																	<td height='30'></td>
																</tr>
															</tbody></table>
														</td>
													</tr>
													
											</tbody></table>
										</div>
										<!--[if gte mso 9]> </v:textbox> </v:rect> <![endif]-->
									</td>
								</tr>
							
						</tbody></table>	
					</td>
				</tr>					
				
		</tbody></table><table data-module='About Nature' data-bgcolor='Main BG' width='100%' cellspacing='0' cellpadding='0' border='0' bgcolor='#b7b2b3' align='center' class=''>
         <tbody>
            <tr>
               <td align='center'>
                  <table class='display-width' data-bgcolor='Section BG-1' width='800' cellspacing='0' cellpadding='0' border='0' bgcolor='#fff' align='center'>
                     <tbody>
                        <tr>
                           <td height='20'></td>
                        </tr>
                        <tr>
                           <td style='padding:0 30px;' align='center'>
                              <table class='display-width' width='700' cellspacing='0' cellpadding='0' border='0' align='center'>
                                 <tbody>
                                    <tr>
                                       <td class='MsoNormal' style='color:#232527;font-family:Open Sans;font-size: 16px;line-height:32px;' data-color='Content' data-size='Content' data-min='12' data-max='34' align='justify'><b>Dear $candidateName,</b></td>
</tr>
                                   
                                 </tbody>
                              </table>
                           </td>
                        </tr><tr>
                           <td style='padding:0 30px;' align='center'>
                              <table class='display-width' width='700' cellspacing='0' cellpadding='0' border='0' align='center'>
                                 <tbody>
                                    <tr>
                                       <td class='MsoNormal' style='color:#232527; font-family:Open Sans; font-size:15px; line-height:32px;' data-color='Content' data-size='Content' data-min='12' data-max='34' align='justify'>Congratulations! You have been successfully registered for the <b>Job Fair @Digital Summit 2017 </b> which is going to be held on <b>December 16th and 17th, 2017.</b> </td>
</tr>";
		
		if ($countUserRecords == 0) {
			$htmlContent = $htmlContent . "
<tr>
              <td align='justify' class='padding-copy' style='padding: 5px 0 0 0;font-size: 14px;line-height: 30px;font-family: open sans;color: #232527;'><b>Login ID </b> &nbsp;: &nbsp;$email
  </td>
              </tr><tr>
              <td align='justify' class='padding-copy' style='padding: 0 0 0 0;font-size: 14px;line-height: 30px;font-family: open sans;color: #232527;'><b>Password</b>  &nbsp;: &nbsp;$password
  </td>
              </tr>
          
            
            
            
<tr>
              
              </tr>
<tr>
              
              </tr><tr>
              
              </tr><tr>
                            <td align='left'>
                              <table>
                                <tbody><tr>
                           <td height='5'></td>
                        </tr><tr>
                                  <td align='left' bgcolor='#fc3f3f' style='
           background: #d33257;
           padding:8px 10px;
           -webkit-border-radius: 2px;
           -moz-border-radius: 2px;
           border-radius: 2px;
           '>
                                    <div class='contentEditableContainer contentTextEditable'>
                                      <div class='contentEditable' align='left'>
        <a href='http://www.miraclesoft.com/digitalsummit/student-dashboard/login.php' class='link2' style='font-family:oPen sans;color:#ffffff;text-decoration:none;><font face=' target='_blank'><b>Access Portal</b></a>
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                              </tbody></table>
                            </td>
                          </tr>
            <tr>
              
              </tr>";
		}
		$htmlContent = $htmlContent . "
			  <tr></tr>
            <tr><td><table width='100%' cellspacing='0' cellpadding='0' border='0'><tbody><tr>
              
              </tr><tr></tr></tbody></table></td></tr>
            <tr>
              
            </tr>
            
            
            <tr>
              
              </tr>
            
          <tr>
                           <td height='5'></td>
                        </tr><tr>
                                       <td class='MsoNormal' style='color:#232527; font-family:Open Sans; font-size:15px; line-height:32px;' data-color='Content' data-size='Content' data-min='12' data-max='34' align='justify'><b>Points to be remembered :</b></td>
</tr><tr>
<td align='justify' valign='top' style='color: #232527;font-family:oPen sans;font-size:14px;mso-line-height-rule:exactly;line-height:30px;font-weight:400;'>

<ul>
    
<li>Please make sure to report at <a href='http://www.miraclesoft.com/digitalsummit/venue.php' target='blank' style='color: #d33257;text-decoration:none;'><b>Miracle Valley (VSKP)</b></a> 
 Hill No. 2, IT SEZ, Rushikonda by 09:00 AM IST on December 16th and 17th, 2017 </li><li>Bus transport will be provided by Miracle, starting from 07:30AM to 12:00AM IST on both the days from the below pick-up points,
 </li> &nbsp; &nbsp; &nbsp; <font color='#d33257'><b>-</b></font>  Port Stadium, NH-5, Akkayyapalem, Visakhapatnam
<br> &nbsp; &nbsp; &nbsp; <font color='#d33257'><b>-</b></font>  Vizag Cricket Stadium, Madhurawada (Near to Maruthi Driving School), Visakhapatnam
<li>Bring along your latest resume, 2 passport sized photos, and photocopies of all your certificates</li>


</ul>
</td>
</tr><tr>
                                       <td class='MsoNormal' style='color:#232527; font-family:Open Sans; font-size:15px; line-height:32px;' data-color='Content' data-size='Content' data-min='12' data-max='34' align='justify'><i>We also have skill enablement events like Tech Talks, Citizen Hack and talent show like Hungama at Digital Summit '17 which allows you to scale up your knowledge on the future technologies and also showcase your talent. Interested candidates can get their names enrolled <a href='http://www.miraclesoft.com/digitalsummit/events/' target='blank' style='font-weight: 600;color:#d33257;text-decoration:none;'>here</a>.</i></td>
</tr>
                                   
                                 </tbody>
                              </table>
                           </td>
                        </tr><tr>
                           <td height='20'></td>
                        </tr>
                     </tbody>
                  </table>
<table data-cloud9-id='281' align='center' bgcolor='#232527' border='0' cellpadding='0' cellspacing='0' width='100%' data-module='agency' data-bgcolor='Main BG' class='' style='position:relative;opacity:1;top:0;left:0'>
                        <tbody data-cloud9-id='282'>
                          <tr data-cloud9-id='283'>
                            <td data-cloud9-id='284' align='center'>
                              <table data-cloud9-id='285' align='center' bgcolor='#f5f5f5' border='0' class='display-width' cellpadding='0' cellspacing='0' width='800' data-bgcolor='Section-BG-1'>
                                <tbody data-cloud9-id='286'>
                                  <tr data-cloud9-id='287'>
                                    
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
      </table><table align='center' bgcolor='#b7b2b3' border='0' cellpadding='0' cellspacing='0' width='100%' data-module='Menu' data-bgcolor='Main BG' class=''>
			
				<tbody><tr>
					<td align='center'>
						<!-- ID:BG MENU -->
						<table align='center' bgcolor='#f1f1f1' border='0' cellpadding='0' cellspacing='0' class='display-width' width='800' data-bgcolor='Menu BG'>
							
								<tbody><tr>
													<td height='20' class='height30' style='mso-line-height-rule:exactly; line-height:10px; font-size:0;'>
														&nbsp;
													</td>
												</tr><tr>
																		<td align='center'>
																			<table align='center' border='0' cellpadding='0' cellspacing='0' width='678' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;'>
																				<tbody><tr>
																					<td width='180'>
																						<!-- TABLE LEFT -->
																						<table align='left' cellspacing='0' cellpadding='10' class='display-width-child' width='180' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;'>
																							<tbody><tr>
																								<td align='center'>
																									<table align='center' border='0' cellspacing='0' cellpadding='0' width='100%' style='width:180px !important;'>
																										<tbody><tr>
																											<td align='center' style='line-height:0; font-size:0;'>
																												 <img src='http://www.miraclesoft.com/images/newsletters/2017/December/Date01.png' alt='64x64x1' width='100' height='auto' style='color:#ffffff; margin:0; border:0; padding:0; display:block;'>
																											</td>
																										</tr>
																										<tr>
																											<td style='mso-line-height-rule:exactly; line-height:15px;' height='15'>
																												&nbsp;
																											</td>
																										</tr>
																										<tr>
																											<!-- ID:TXT COUNTER VALUE -->
																											<td align='center' class='MsoNormal' style='color: #232527;font-family: open sans;font-weight: 700;font-size: 14px;letter-spacing:1px;' data-color='Counter Value' data-size='Counter Value' data-min='15' data-max='54'> Dec 16th and 17th, 2017</td>
																										</tr>
																										<tr>
																											<td height='5' style='mso-line-height-rule:exactly; line-height:5px; font-size:0;'>
																												&nbsp;
																											</td>
																										</tr>
																										
																									</tbody></table>
																								</td>
																							</tr>
																						</tbody></table>
																						<!--[if mso]>
																					</td><td width='30'>
																					<![endif]-->
																						<table align='left' border='0' cellpadding='0' cellspacing='0' class='display-width-child' width='30' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; mso-hide:all;'>
																							<tbody><tr>
																								<td height='40' width='5%'>
																								</td>
																							</tr>
																						</tbody></table>
																						<!--[if mso]>
																					</td><td width='180'>
																					<![endif]-->
																						<!-- TABLE CENTER -->
																						<table align='left' cellspacing='0' cellpadding='10' class='display-width-child' width='180' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;'>
																							<tbody><tr>
																								<td align='center'>
																									<table align='center' border='0' cellspacing='0' cellpadding='0' width='100%' style='width:180px !important;'>
																										<tbody><tr>
																											<td align='center' style='line-height:0; font-size:0;'>
																												 <img src='http://www.miraclesoft.com/images/newsletters/2017/December/Time03.png' alt='64x64x2' width='100' height='auto' style='color:#ffffff; margin:0; border:0; padding:0; display:block;'>
																											</td>
																										</tr>
																										<tr>
																											<td height='15' style='mso-line-height-rule:exactly; line-height:15px;'>
																												&nbsp;
																											</td>
																										</tr>
																										<tr>
																											<!-- ID:TXT COUNTER VALUE -->
																											<td align='center' class='MsoNormal' style='color: #232527;font-family: open sans;font-weight:700;font-size: 14px;letter-spacing:1px;' data-color='Counter Value' data-size='Counter Value' data-min='15' data-max='54'> 09:00 AM IST</td>
																										</tr>
																										<tr>
																											<td height='5' style='mso-line-height-rule:exactly; line-height:5px; font-size:0;'>
																												&nbsp;
																											</td>
																										</tr>
																										
																									</tbody></table>
																								</td>
																							</tr>
																						</tbody></table>
																						<!--[if mso]>
																					</td><td width='30'>
																					<![endif]-->
																						<table align='left' border='0' cellpadding='0' cellspacing='0' class='display-width-child' width='30' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; mso-hide:all;'>
																							<tbody><tr>
																								<td height='40' width='5%'>
																								</td>
																							</tr>
																						</tbody></table>
																						<!--[if mso]>
																					</td><td width='180'>
																					<![endif]-->
																						<!-- TABLE RIGHT -->
																						<table align='right' cellspacing='0' cellpadding='10' class='display-width-child' width='180' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;'>
																							<tbody><tr>
																								<td align='center'>
																									<table align='center' border='0' cellspacing='0' cellpadding='0' width='100%' style='width:180px !important;'>
																										<tbody><tr>
																											<td align='center' style='line-height:0; font-size:0;'>
																												 <img src='http://www.miraclesoft.com/images/newsletters/2017/December/Location02.png' alt='64x64x3' width='100' height='auto' style='color:#ffffff; margin:0; border:0; padding:0; display:block;'>
																											</td>
																										</tr>
																										<tr>
																											<td height='15' style='mso-line-height-rule:exactly; line-height:15px;'>
																												&nbsp;
																											</td>
																										</tr>
																										<tr>
																											<!-- ID:TXT COUNTER VALUE -->
																											<td align='center' class='MsoNormal' style='color: #232527;font-family: open sans;font-weight:700;font-size: 14px;letter-spacing:1px;' data-color='Counter Value' data-size='Counter Value' data-min='15' data-max='54'> Miracle Valley, Hill No:2</td>
																										</tr><tr>
																											<!-- ID:TXT COUNTER VALUE -->
																											<td align='center' class='MsoNormal' style='color: #232527;font-family: open sans;font-weight:700;font-size: 14px;letter-spacing:1px;' data-color='Counter Value' data-size='Counter Value' data-min='15' data-max='54'> IT SEZ, Rushikonda(VSKP)</td>
																										</tr>
																										<tr>
																											<td height='5' style='mso-line-height-rule:exactly; line-height:5px; font-size:0;'>
																												&nbsp;
																											</td>
																										</tr>
																										
																									</tbody></table>
																								</td>
																							</tr>
																						</tbody></table>
																					</td>
																				</tr>
																			</tbody></table>
																		</td>
																	</tr>
												<tr>
													<td height='15' class='height30' style='mso-line-height-rule:exactly; line-height:10px; font-size:0;'>
														&nbsp;
													</td>
												</tr>
											
										</tbody></table>
									</td>
								</tr>
							
						</tbody></table><table data-cloud9-id='2147' data-module='Footer' data-bgcolor='Main BG' width='100%' cellspacing='0' cellpadding='0' border='0' bgcolor='#b7b2b3' align='center' class=''>
         <tbody data-cloud9-id='2148'>
            <tr data-cloud9-id='2149'>
               <td data-cloud9-id='2150' align='center'>
                  <table data-cloud9-id='2151' class='display-width' style='background-image:url(http://www.miraclesoft.com/images/newsletters/2016/november/WAS_Bottom_Banner.png);' data-bgcolor='Footer Section BG' width='800' cellspacing='0' cellpadding='0' border='0' bgcolor='#272c33' background='http://www.miraclesoft.com/images/newsletters/2016/november/WAS_Bottom_Banner.png' align='center'>
                     <tbody data-cloud9-id='2152'>
                        <tr data-cloud9-id='2153'>
                           <td data-cloud9-id='2154' height='20'></td>
                        </tr>
                        <tr data-cloud9-id='2155'>
                           <td data-cloud9-id='2156' style='padding:0 30px;' align='center'>
                              <table data-cloud9-id='2157' class='display-width' width='100%' cellspacing='0' cellpadding='0' border='0' align='center'>
                                 <tbody data-cloud9-id='2158'>
                                    <tr data-cloud9-id='2159'>
                                       <td valign='top'>
                                          <table style='mso-table-lspace:0pt; mso-table-rspace:0pt; margin: 0 auto; border-collaps:collaps;' class='logo' align='center' border='0' cellpadding='0' cellspacing='0' width='auto'>
                                             <tbody>
                                                <tr>
                                                   <td>
                                                      <a href='http://www.miraclesoft.com/' target='blank'>
                                                      <img mc:edit='Logo' src='http://www.miraclesoft.com/images/newsletters/Q2/miracle-logo-light.png' style='display:block; margin: 0 auto;' alt='logo' width='150'>
                                                      </a>
                                                   </td>
                                                </tr>
                                             </tbody>
                                          </table>
                                       </td>
                                    </tr>
                                    
                                    
                                    
                                    <tr data-cloud9-id='2194'>
                                       <td data-cloud9-id='2195' height='30'></td>
                                    </tr>
                                    <tr>
																		<td align='center'>
																			<table align='center' border='0' cellpadding='0' cellspacing='0' width='385' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;'>
																				<tbody><tr>
																					<td align='center' width='180'>
																						
																						<table align='left' cellspacing='0' cellpadding='10' class='display-width-child' width='40' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;'>
																							<tbody><tr>
																								<td align='center'>
																									<table align='center' border='0' cellspacing='0' cellpadding='0' width='100%' style='width: 40;'>
																										<tbody><tr>
																											<td valign='middle' align='center'>
                                                      <a href='https://www.linkedin.com/company/digital-summit-vizag/' target='blank'><img style='display:block;' width='40' heignt='40' src='http://www.miraclesoft.com/images/newsletters/2016/november/linkedin2' border='0' mc:edit='m171' editable='true' data-crop='false' label='Facebook' alt='Facebook'></a>
                                                   </td>
																										</tr>
																										
																										
																										
																										
																									</tbody></table>
																								</td>
																							</tr>
																						</tbody></table>
																						
																						<table align='left' border='0' cellpadding='0' cellspacing='0' class='display-width-child' width='5' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; mso-hide:all;'>
																							<tbody><tr>
																								<td height='40' width='10'>
																								</td>
																							</tr>
																						</tbody></table>
																						
																						
																						<table align='left' cellspacing='0' cellpadding='10' class='display-width-child' width='40' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;'>
																							<tbody><tr>
																								<td align='center'>
																									<table align='center' border='0' cellspacing='0' cellpadding='0' width='100%' style='width: 40;'>
																										<tbody><tr>
																											<td valign='middle' align='center'>
                                                      <a href='https://plus.google.com/+Team_MSS' target='blank'><img style='display:block;' width='40' heignt='40' src='http://www.miraclesoft.com/images/newsletters/2016/november/google-plus2.png' border='0' mc:edit='m172' editable='true' data-crop='false' label='Google +' alt='Google +'></a>
                                                   </td>
																										</tr>
																										
																										
																										
																										
																									</tbody></table>
																								</td>
																							</tr>
																						</tbody></table>
																						
																						<table align='left' border='0' cellpadding='0' cellspacing='0' class='display-width-child' width='5' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; mso-hide:all;'>
																							<tbody><tr>
																								<td height='40' width='5%'>
																								</td>
																							</tr>
																						</tbody></table>
																						
																						
																						<table align='left' cellspacing='0' cellpadding='10' class='display-width-child' width='40' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;'>
																							<tbody><tr>
																								<td align='center'>
																									<table align='center' border='0' cellspacing='0' cellpadding='0' width='100%' style='width: 40;'>
																										<tbody><tr>
																											<td valign='middle' align='center'>
                                                      <a href='https://www.facebook.com/DigitalSummitVizag/' target='blank'><img style='display:block;' width='40' heignt='40' src='http://www.miraclesoft.com/images/newsletters/2016/november/facebook2.png' border='0' mc:edit='m173' editable='true' data-crop='false' label='Instagram' alt='Instagram'></a>
                                                   </td>
																										</tr>
																										
																										
																										
																										
																									</tbody></table>
																								</td>
																							</tr>
																						</tbody></table><table align='left' border='0' cellpadding='0' cellspacing='0' class='display-width-child' width='5' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; mso-hide:all;'>
																							<tbody><tr>
																								<td height='40' width='5%'>
																								</td>
																							</tr>
																						</tbody></table><table align='left' cellspacing='0' cellpadding='10' class='display-width-child' width='40' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;'>
																							<tbody><tr>
																								<td align='center'>
																									<table align='center' border='0' cellspacing='0' cellpadding='0' width='100%' style='width: 40;'>
																										<tbody><tr>
																											<td valign='middle' align='center'>
                                                      <a href='https://twitter.com/dsvizag' target='blank'><img style='display:block;' width='40' heignt='40' src='http://www.miraclesoft.com/images/newsletters/2016/november/twitter2.png' border='0' mc:edit='m174' editable='true' data-crop='false' label='LinkedIn' alt='LinkedIn'></a>
                                                   </td>
																										</tr>
																										
																										
																										
																										
																									</tbody></table>
																								</td>
																							</tr>
																						</tbody></table><table align='left' border='0' cellpadding='0' cellspacing='0' class='display-width-child' width='5' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; mso-hide:all;'>
																							<tbody><tr>
																								<td height='40' width='5%'>
																								</td>
																							</tr>
																						</tbody></table><table align='left' cellspacing='0' cellpadding='10' class='display-width-child' width='40' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;'>
																							<tbody><tr>
																								<td align='center'>
																									<table align='center' border='0' cellspacing='0' cellpadding='0' width='100%' style='width: 40;'>
																										<tbody><tr>
																											<td valign='middle' align='center'>
                                                      <a href='https://www.youtube.com/c/DigitalSummitVizag' target='blank'><img style='display:block;' width='40' heignt='40' src='http://www.miraclesoft.com/images/newsletters/2016/november/youtube2.png' border='0' mc:edit='m175' editable='true' data-crop='false' label='Twitter' alt='Twitter'></a>
                                                   </td>
																										</tr>
																										
																										
																										
																										
																									</tbody></table>
																								</td>
																							</tr>
																						</tbody></table><table align='left' border='0' cellpadding='0' cellspacing='0' class='display-width-child' width='5' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; mso-hide:all;'>
																							<tbody><tr>
																								<td height='40' width='5%'>
																								</td>
																							</tr>
																						</tbody></table><table align='left' cellspacing='0' cellpadding='10' class='display-width-child' width='40' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;'>
																							<tbody><tr>
																								<td align='center'>
																									<table align='center' border='0' cellspacing='0' cellpadding='0' width='100%' style='width: 40;'>
																										<tbody><tr>
																											<td valign='middle' align='center'>
                                                      <a href='https://www.flickr.com/people/digitalsummit/' target='blank'><img style='display:block;' width='40' heignt='40' src='http://www.miraclesoft.com/images/newsletters/2016/november/flickr2.png' border='0' mc:edit='m176' editable='true' data-crop='false' label='You Tube' alt='You Tube'></a>
                                                   </td>
																										</tr>
																										
																										
																										
																										
																									</tbody></table>
																								</td>
																							</tr>
																						</tbody></table>
																					</td>
																				</tr>
																			</tbody></table>
																		</td>
																	</tr>
                                    
                                    <tr data-cloud9-id='2222'>
                                       <td data-cloud9-id='2223' height='20'></td>
                                    </tr>
                                    <tr data-cloud9-id='2224'>
                                       <td data-cloud9-id='2225'>
                                          <table data-cloud9-id='2226' class='display-width' style='border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; width:auto;' width='35%' cellspacing='0' cellpadding='0' border='0' align='center'>
                                             <tbody data-cloud9-id='2227'>
                                                <tr data-cloud9-id='2228'>
                                                   <td data-cloud9-id='2229' align='center'>
                                                      <table data-cloud9-id='2230' style='width:auto !important;' cellspacing='0' cellpadding='0' border='0' align='center'>
                                                         <tbody data-cloud9-id='2231'>
                                                            <tr>
                                                               <td class='MsoNormal' style='color:#ffffff; font-family:Open Sans; font-size:13px; line-height:24px; letter-spacing:0px;' data-color='Copyright' data-size='Copyright' data-min='12' data-max='33' align='left'>



© 2017 Miracle Software Systems, Inc.</td>
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
                        <tr data-cloud9-id='2247'>
                           <td data-cloud9-id='2248' height='20'></td>
                        </tr>
                     </tbody>
                  </table>
               </td>
            </tr>
         </tbody>
      </table><div id='edit_link' class='hidden' style='display: none;'>

						<!-- Close Link -->
						<div class='close_link'></div>

						<!-- Edit Link Value -->
						<input type='text' id='edit_link_value' class='createlink' placeholder='Your URL'>

						<!-- Change Image Wrapper-->
						<div id='change_image_wrapper'>

							<!-- Change Image Tooltip -->
							<div id='change_image'>

								<!-- Change Image Button -->
								<p id='change_image_button'>Change &nbsp; <span class='pixel_result'></span></p>

							</div>

							<!-- Change Image Link Button -->
							<input type='button' value='' id='change_image_link'>

							<!-- Remove Image -->
							<input type='button' value='' id='remove_image'>

						</div>

						<!-- Tooltip Bottom Arrow-->
						<div id='tip'></div>

					</div></body></html>"; // Put your body of the message you can place html code here
		
		$mail->MsgHTML ( $htmlContent );
		
		// $mail->AddAttachment("images/asif18-logo.png"); //Attach a file here if any or comment this line,
		$send = $mail->Send (); // Send the mails
		if ($send) {
			// echo '<center><h3 style="color:#009933;">Mail sent successfully</h3></center>';
			
			return "Mail sent successfully";
		} else {
			// echo '<center><h3 style="color:#FF3300;">Mail error: </h3></center>'.$mail->ErrorInfo;
			throw new Exception ( $mail->ErrorInfo );
		}
	}
}
?>
