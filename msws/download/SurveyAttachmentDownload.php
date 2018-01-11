<?php
 include '../config/Locations.php';
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

$fileId=$_REQUEST['fileId'];


//------------------------------------------------------------------
//require '../config/DbController.php';
require '../config/ConnectionProvider.php';
//$conn = new DbController();
    
try{
    //$conn->connectToDatabase();
 
    //$conn->selectDatabase();
    //$selectQuery = "SELECT sfd_option FROM tblSurveyInfoDetails WHERE Id =".$fileId;
    $selectQuery = "SELECT sfd_option FROM tblSurveyInfoDetails WHERE Id =:fileId";
  $stmt = $conn->prepare($selectQuery);
   $stmt->bindParam(':fileId', $fileId);
   
                      $stmt->execute();
    
    //if(mysql_num_rows($selectresponce)>0){
       // $row = mysql_fetch_row($selectresponce); 
                      if ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
        $rootPath = $row[0];
      
        
        $file_name = basename($rootPath);
$filetype = pathinfo($file_name, PATHINFO_EXTENSION);
       // mysql_close();
    }
  }catch(Exception $exc){
        $exc->getMessage();
      $resultMessage= '<font color=red size=2px>'.$exc.'</font>';
     
      //mysql_close();
      header('Location: ../back-end-error.php?resultMessage='.$resultMessage); 
} 

//-----------------------------------------------------------------------



//Call the download function with file path,file name and file type
//output_file($file_path, ''.$_REQUEST['filename'].'', 'text/plain');



switch ($filetype) {
   
     case "doc":
      output_file($rootPath, ''.$file_name.'', 'application/msword');
        break;
      case "docx":
      output_file($rootPath, ''.$file_name.'', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document');
        break;  
     case "xls":
      output_file($rootPath, ''.$file_name.'', 'application/vnd.ms-excel');
        break;
     case "ppt":
      output_file($rootPath, ''.$file_name.'', 'application/vnd.ms-powerpoint');
        break;
     case "txt":
       output_file($rootPath, ''.$file_name.'', 'text/plain');
        break;
  case "gif":
      output_file($rootPath, ''.$file_name.'', 'image/gif');
        break;
     case "png":
      output_file($rootPath, ''.$file_name.'', 'image/png');
        break;
     case "jpeg":
      output_file($rootPath, ''.$file_name.'', 'image/jpeg');
        break;
       case "jpg":
      output_file($rootPath, ''.$file_name.'', 'image/jpeg');
        break;
      case "bmp":
      output_file($rootPath, ''.$file_name.'', 'image/x-windows-bmp');
        break;
    case "tiff":
      output_file($rootPath, ''.$file_name.'', 'image/tiff');
        break;
   default:
      output_file($rootPath, ''.$file_name.'', 'application/pdf');
}


?>