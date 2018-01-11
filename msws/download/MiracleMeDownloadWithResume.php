<?php 
 include '../config/Locations.php';
 include '../config/general.php';
/**
 * Copyright 2012 Armand Niculescu - media-division.com
 * Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:
 * 1. Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.
 * 2. Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.
 * THIS SOFTWARE IS PROVIDED BY THE FREEBSD PROJECT "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE FREEBSD PROJECT OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 */
// get the file request, throw error if nothing supplied

// hide notices
 
 
 //-------------
 
 
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
                   //  $rootPath = MIRACLE_ME_ANDROID_PATH;
                //  $file_name = basename($rootPath);
          // output_file($rootPath, ''.$file_name.'', 'application/vnd.android.package-archive');
           
           
           
           
           
@ini_set('error_reporting', E_ALL & ~ E_NOTICE);

//- turn off compression on the server
@apache_setenv('no-gzip', 1);
@ini_set('zlib.output_compression', 'Off');



// sanitize the file request, keep just the name and extension
// also, replaces the file location with a preset one ('./myfiles/' in this example)
$file_path  = MIRACLE_ME_ANDROID_PATH;
$path_parts = pathinfo($file_path);
$file_name  = $path_parts['basename'];
$file_ext   = $path_parts['extension'];
//$file_path  = './myfiles/' . $file_name;

// allow a file to be streamed instead of sent as an attachment
$is_attachment = isset($_REQUEST['stream']) ? false : true;

// make sure the file exists
if (is_file($file_path))
{
    $file_size  = filesize($file_path);
    $file = @fopen($file_path,"rb");
    if ($file)
    {
        // set the headers, prevent caching
        header("Pragma: public");
        header("Expires: -1");
        header("Cache-Control: public, must-revalidate, post-check=0, pre-check=0");
        header("Content-Disposition: attachment; filename=\"$file_name\"");

        // set appropriate headers for attachment or streamed file
        if ($is_attachment)
                header("Content-Disposition: attachment; filename=\"$file_name\"");
        else
                header('Content-Disposition: inline;');

        // set the mime type based on extension, add yours if needed.
        $ctype_default = "application/octet-stream";
        $content_types = array(
                "exe" => "application/octet-stream",
                "zip" => "application/zip",
                "mp3" => "audio/mpeg",
                "mpg" => "video/mpeg",
                "avi" => "video/x-msvideo",
        );
        $ctype = isset($content_types[$file_ext]) ? $content_types[$file_ext] : $ctype_default;
        header("Content-Type: " . $ctype);

        //check if http_range is sent by browser (or download manager)
        if(isset($_SERVER['HTTP_RANGE']))
        {
            list($size_unit, $range_orig) = explode('=', $_SERVER['HTTP_RANGE'], 2);
            if ($size_unit == 'bytes')
            {
                //multiple ranges could be specified at the same time, but for simplicity only serve the first range
                //http://tools.ietf.org/id/draft-ietf-http-range-retrieval-00.txt
                list($range, $extra_ranges) = explode(',', $range_orig, 2);
            }
            else
            {
                $range = '';
                //header('HTTP/1.1 416 Requested Range Not Satisfiable');
                //exit;
                 $resultMessage =  "HTTP/1.1 416 Requested Range Not Satisfiable";
            header('Location: ../miracleme?resultMessage='.$resultMessage); 
            }
        }
        else
        {
            $range = '';
        }

        //figure out download piece from range (if set)
        list($seek_start, $seek_end) = explode('-', $range, 2);

        //set start and end based on range (if set), else set defaults
        //also check for invalid ranges.
        $seek_end   = (empty($seek_end)) ? ($file_size - 1) : min(abs(intval($seek_end)),($file_size - 1));
        $seek_start = (empty($seek_start) || $seek_end < abs(intval($seek_start))) ? 0 : max(abs(intval($seek_start)),0);

        //Only send partial content header if downloading a piece of the file (IE workaround)
        if ($seek_start > 0 || $seek_end < ($file_size - 1))
        {
            header('HTTP/1.1 206 Partial Content');
            header('Content-Range: bytes '.$seek_start.'-'.$seek_end.'/'.$file_size);
            header('Content-Length: '.($seek_end - $seek_start + 1));
        }
        else
          header("Content-Length: $file_size");

        header('Accept-Ranges: bytes');

        set_time_limit(0);
        fseek($file, $seek_start);

        while(!feof($file)) 
        {
            print(@fread($file, 1024*8));
            ob_flush();
            flush();
            if (connection_status()!=0) 
            {
                @fclose($file);
                exit;
            }           
        }

        // file save was a success
        @fclose($file);
        exit;
    }
    else 
    {
        // file couldn't be opened
       // header("HTTP/1.0 500 Internal Server Error");
      //  exit;
         $resultMessage =  "HTTP/1.0 500 Internal Server Error";
            header('Location: ../miracleme?resultMessage='.$resultMessage); 
    }
}
else
{
    // file does not exist
  //  header("HTTP/1.0 404 Not Found");
  //  exit;
    
     $resultMessage =  "HTTP/1.0 404 Not Found";
            header('Location: ../miracleme?resultMessage='.$resultMessage); 
}
           
           
           
           
           
           
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
    
    
    
    
 
 //----------------
 
 