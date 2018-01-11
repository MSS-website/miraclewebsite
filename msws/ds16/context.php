 <?php
//define("url", "http://192.168.1.203/conf");
 //if (!defined('url'))define("url", "http://172.17.12.220/msws/conf3");
 
 define("url", "http://www.miraclesoft.com/ds16");
 //define("url", "http://172.17.12.79/ds16");
 error_reporting(0);
define("SMTP_HOST", "smtp.miraclesoft.com"); //Hostname of the mail server
define("SMTP_PORT", "587"); //Port of the SMTP like to be 25, 80, 465 or 587
define("SMTP_UNAME", "mssapp@miraclesoft.com"); //Username for SMTP authentication any valid email created in your domain
define("SMTP_PWORD", "Miracle@2k16"); //Password for SMTP authentication
define("SMTP_SECURE", "tls"); //Password for SMTP authentication

 if (!defined('CONF_EMAILFLAG')) define('CONF_EMAILFLAG', '1');
// if (!defined('DIGITAL_SUMMIT_REGISTRAINTS'))define("DIGITAL_SUMMIT_REGISTRAINTS", "vkandregula@miraclesoft.com,Prasad Kandregula;santoshkola8@gmail.com,Santosh Kola");
 #if (!defined('DIGITAL_SUMMIT_REGISTRAINTS'))define("DIGITAL_SUMMIT_REGISTRAINTS", "plokam@miraclesoft.com,Prasad Lokam;clokam@miraclesoft.com,Chanakya Lokam;rijju@miraclesoft.com,Ravi Kumar Ijju;vpusapati@miraclesoft.com,Swaroop Varma Pusapati;rthamada@miraclesoft.com,Raja Ramesh Thamada;vneeli@miraclesoft.com,Vishnu Priya Neeli;mbonthu2@miraclesoft.com,Mani Teja Bonthu;mmanduri@miraclesoft.com,mmanduri@miraclesoft.com");
 if (!defined('DIGITAL_SUMMIT_REGISTRAINTS_STUDENTS'))define("DIGITAL_SUMMIT_REGISTRAINTS_STUDENTS", "rijju@miraclesoft.com,Ravi Kumar Ijju;vpusapati@miraclesoft.com,Swaroop Varma Pusapati;rthamada@miraclesoft.com,Raja Ramesh Thamada;vneeli@miraclesoft.com,Vishnu Priya Neeli;mbonthu2@miraclesoft.com,Mani Teja Bonthu;mmanduri@miraclesoft.com,mmanduri@miraclesoft.com");
 
 if (!defined('DIGITAL_SUMMIT_REGISTRAINTS_CUSTOMER'))define("DIGITAL_SUMMIT_REGISTRAINTS_CUSTOMER", "plokam@miraclesoft.com,Prasad Lokam;vmada@miraclesoft.com,Venkata Subba Nag Mada;ssoni@miraclesoft.com,Santosh Soni;clokam@miraclesoft.com,Chanakya Lokam;rthamada@miraclesoft.com,Raja Ramesh Thamada");
 
// if (!defined('DIGITAL_SUMMIT_CONTACTUS'))define("DIGITAL_SUMMIT_CONTACTUS", "vkandregula@miraclesoft.com,Prasad Kandregula;santoshkola8@gmail.com,Santosh Kola");
 if (!defined('DIGITAL_SUMMIT_CONTACTUS'))define("DIGITAL_SUMMIT_CONTACTUS", "plokam@miraclesoft.com,Prasad Lokam;clokam@miraclesoft.com,Chanakya Lokam;rijju@miraclesoft.com,Ravi Kumar Ijju;vpusapati@miraclesoft.com,Swaroop Varma Pusapati;rthamada@miraclesoft.com,Raja Ramesh Thamada;vneeli@miraclesoft.com,Vishnu Priya Neeli;mbonthu2@miraclesoft.com,Mani Teja Bonthu;mmanduri@miraclesoft.com,mmanduri@miraclesoft.com");
if (!defined('APPLICANT_ATTACHMENT_LOCATION'))define("APPLICANT_ATTACHMENT_LOCATION", "/usr/local/ConfFiles/ApplicantAttachments/"); 

#if (!defined('DIGITAL_SUMMIT_JOB_APPLICANTS'))define("DIGITAL_SUMMIT_JOB_APPLICANTS", "plokam@miraclesoft.com,Prasad Lokam;clokam@miraclesoft.com,Chanakya Lokam;rijju@miraclesoft.com,Ravi Kumar Ijju;vpusapati@miraclesoft.com,Swaroop Varma Pusapati;rthamada@miraclesoft.com,Raja Ramesh Thamada;vneeli@miraclesoft.com,Vishnu Priya Neeli;mbonthu2@miraclesoft.com,Mani Teja Bonthu;mmanduri@miraclesoft.com,mmanduri@miraclesoft.com");
if (!defined('DIGITAL_SUMMIT_JOB_APPLICANTS'))define("DIGITAL_SUMMIT_JOB_APPLICANTS", "rijju@miraclesoft.com,Ravi Kumar Ijju;rthamada@miraclesoft.com,Raja Ramesh Thamada;vneeli@miraclesoft.com,Vishnu Priya Neeli;stekkam@miraclesoft.com,Srinivas Tekkam");
//if (!defined('DIGITAL_SUMMIT_CULTURAL'))define("DIGITAL_SUMMIT_CULTURAL", "skola2@miraclesoft.com,Santosh Kola;tkadamanti@miraclesoft.com,Phanindra Kanuri");
if (!defined('DIGITAL_SUMMIT_CULTURAL'))define("DIGITAL_SUMMIT_CULTURAL", "vmajji@miraclesoft.com,Vishal Majji;areddy@miraclesoft.com,Aradhana Reddy");
if (!defined('DIGITAL_SUMMIT_HACKATHON'))define("DIGITAL_SUMMIT_HACKATHON", "skola2@miraclesoft.com,Santosh Kola;vkandregula@miraclesoft.com,Prasad Kandregula");
?>
