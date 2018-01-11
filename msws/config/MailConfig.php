<?php
error_reporting(0);
define("SMTP_HOST", "smtp.miraclesoft.com"); //Hostname of the mail server
define("SMTP_PORT", "587"); //Port of the SMTP like to be 25, 80, 465 or 587
define("SMTP_UNAME", "mssapp@miraclesoft.com"); //Username for SMTP authentication any valid email created in your domain
define("SMTP_PWORD", "Miracle@2017"); //Password for SMTP authentication
define("SMTP_SECURE", "tls"); //Password for SMTP authentication
// you can get your SMTP host here http://www.asif18.com/6/php/list-of-smtp-and-pop3-severs,-hosts,-ports-email-servers/
/*---------------------------------------------
 Email configurations in production start 
 --------------------------------------------- */
/* contactus form mail */
//define("CONTACT_US", "info@miraclesoft.com");
//define("CONTACT_US", "skastury@miraclesoft.com,Sai Kastury;clokam@miraclesoft.com,Chankya Lokam;ssirivuru@miraclesoft.com,Srinivas Sirivuru;smudunuri@miraclesoft.com,Satish Mudunuri");
define("CONTACT_US", "skola2@miraclesoft.com,Santosh Kola;pkanuri@miraclesoft.com,Phani Kanuri;gdurgam@miraclesoft.com,Gopal Durgam");

/* Employee verification form mail */
define("EMPLOYEE_VERIFICATION_INDIA", "skola2@miraclesoft.com");
define("EMPLOYEE_VERIFICATION_USA", "pkanuri@miraclesoft.com");

/*Apply job forms for India and USA */
define("APPLYJOB_INDIA", "skola2@miraclesoft.com");
define("APPLYJOB_USA", "skola2@miraclesoft.com");

/* Downlaod URL to for downloading files */
define("DOWNLOAD_URL", "http://172.17.12.79");

/* Referral jobs emails for India and USA */
define("REFERAL_INDIA", "skola2@miraclesoft.com");
define("REFERAL_USA", "skola2@miraclesoft.com");
define("SUGGESTIONS_ADDRESS", "skola2@miraclesoft.com,Santosh Kola;pkanuri@miraclesoft.com,Phani Kanuri");
define("EMPREF_FRESHERS_OTHERS", "skola2@miraclesoft.com,Santosh Kola;pkanuri@miraclesoft.com,Phani Kanuri");
#define("EMPREF_FRESHERS_OTHERS", "skola2@miraclesoft.com,Santosh Kola;pkanuri@miraclesoft.com,Phani Kanuri");
define("EVENT_SUGGESTIONS_ADDRESS", "skola2@miraclesoft.com,Santosh Team");
define("NEW_NOMINATIONS_SUBMITTED", "skola2@miraclesoft.com,Santosh Team");

define("EMPLOYEE_VERIFICATION_INDIA_CC", "skola2@miraclesoft.com,Santosh Kola;pkanuri@miraclesoft.com,Phani Kanuri");
define("EMPLOYEE_VERIFICATION_APPROVAL", "vkandregula@miraclesoft.com,Prasad Kandregula");
/*---------------------------------------------
 Email configurations in production end
 --------------------------------------------- */


?>
