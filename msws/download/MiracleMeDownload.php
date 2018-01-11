<?php
 include '../config/Locations.php';
 include '../config/general.php';
function output_file($file, $name, $mime_type='')
{
 if(!is_readable($file)) die('File not found or inaccessible!');
 $size = filesize($file);
 $name = rawurldecode($name);
 
 /* Figure out the MIME type | Check in array */
 $known_mime_types=array(
 	"htm" => "text/html",
	"exe" => "application/octet-stream",
	"zip" => "application/zip",
	"doc" => "application/msword",
	"jpg" => "image/jpg",
	"php" => "text/plain",
	"xls" => "application/vnd.ms-excel",
	"ppt" => "application/vnd.ms-powerpoint",
	"gif" => "image/gif",
	"pdf" => "application/pdf",
 	"txt" => "text/plain",
 	"html"=> "text/html",
 	"png" => "image/png",
	"jpeg"=> "image/jpg",
     "bmp"=> "image/x-windows-bmp",
     "tiff"=> "image/tiff",
        "docx"=>"application/vnd.openxmlformats-officedocument.wordprocessingml.document"
 );
 
 if($mime_type==''){
	 $file_extension = strtolower(substr(strrchr($file,"."),1));
	 if(array_key_exists($file_extension, $known_mime_types)){
		$mime_type=$known_mime_types[$file_extension];
	 } else {
		$mime_type="application/force-download";
	 };
 };
 
 //turn off output buffering to decrease cpu usage
 @ob_end_clean(); 
 
 // required for IE, otherwise Content-Disposition may be ignored
 if(ini_get('zlib.output_compression'))
 ini_set('zlib.output_compression', 'Off');
 header('Content-Type: ' . $mime_type);
 header('Content-Disposition: attachment; filename="'.$name.'"');
 header("Content-Transfer-Encoding: binary");
 header('Accept-Ranges: bytes');
 
 // multipart-download and download resuming support
 if(isset($_SERVER['HTTP_RANGE']))
 {
	list($a, $range) = explode("=",$_SERVER['HTTP_RANGE'],2);
	list($range) = explode(",",$range,2);
	list($range, $range_end) = explode("-", $range);
	$range=intval($range);
	if(!$range_end) {
		$range_end=$size-1;
	} else {
		$range_end=intval($range_end);
	}

	$new_length = $range_end-$range+1;
	header("HTTP/1.1 206 Partial Content");
	header("Content-Length: $new_length");
	header("Content-Range: bytes $range-$range_end/$size");
 } else {
	$new_length=$size;
	header("Content-Length: ".$size);
 }
 
 /* Will output the file itself */
 $chunksize = 1*(1024*1024); //you may want to change this
 $bytes_send = 0;
 if ($file = fopen($file, 'r'))
 {
	if(isset($_SERVER['HTTP_RANGE']))
	fseek($file, $range);
 
	while(!feof($file) && 
		(!connection_aborted()) && 
		($bytes_send<$new_length)
	      )
	{
		$buffer = fread($file, $chunksize);
		echo($buffer); 
		flush();
		$bytes_send += strlen($buffer);
	}
 fclose($file);
 } else
 //If no permissiion
 die('Error - can not open file.');
 //die
die();
}
//Set the time out
set_time_limit(0);

//path to the file
//$file_path='files/'.$_REQUEST['filename'];
//$file_path='C:\\Users\\miracle\\Desktop\\file-download-code\\files\\'.$_REQUEST['filename'];
//$file_path=EMPREFERERAL_ATTACHMENT_LOCATION.$_REQUEST['filename'];
//$file_path=$_REQUEST['filename'];
//$rootPath=$_REQUEST['rootPath'];

$file_name='';
$rootPath='';
$filetype='';

$frmLoginId=$_REQUEST['loginId'];
$frmOsType=$_REQUEST['osType'];
//$frmRandomKey=$_REQUEST['randomKey'];

 $data = array("LoginId" => "$frmLoginId","OSType" => "$frmOsType", "Authorization" => base64_encode(SERVICE_AUTHORIZATION));
    $data_string = json_encode($data);
    $curl = curl_init(SERVICE_URL . "generalServices/miracleMeDownloadActivity");
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Content-Length: ' . strlen($data_string))
    );
    curl_setopt($curl, CURLOPT_TIMEOUT, 5000);
    curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 5000);
    $curl_response = curl_exec($curl);

    if (1 !== $curl_response) {

        $myArray = json_decode($curl_response, true);
        if ($myArray['IsAuthenticate']) {

            if ($myArray['ResultString'] == 'Success') {
                // session_start();
                if($frmOsType=='Android'){
                     $rootPath = MIRACLE_ME_ANDROID_PATH;
                  $file_name = basename($rootPath);
           output_file($rootPath, ''.$file_name.'', 'application/vnd.android.package-archive');
                }else {
                     $rootPath = MIRACLE_ME_IOS_PATH;
                  $file_name = basename($rootPath);
           output_file($rootPath, ''.$file_name.'', 'application/pdf');
                }
                
               
               
            } else {

                if ($myArray['ResultString'] == 'TryAgain'){
                    $resultMessage =  "Please try again!";
                    
                    //$myArray['ResultString'] = $resultMessage;
                }
                    
                else{
                    $resultMessage =  "Unauthorized access!" ;
                   // $myArray['ResultString'] = $resultMessage;
                }
                   header('Location: ../miracleme?resultMessage='.$resultMessage);  
               // echo $resultMessage;
                //echo json_encode($myArray);
            }
        }else {
            $resultMessage =  "Unauthorized access!";
            header('Location: ../miracleme?resultMessage='.$resultMessage); 
			//$myArray['ResultString'] = $resultMessage;
             //echo json_encode($myArray);
        }
    }
    curl_close($curl);

//-----------------------------------------------------------------------



//Call the download function with file path,file name and file type
//output_file($file_path, ''.$_REQUEST['filename'].'', 'text/plain');



      


?>