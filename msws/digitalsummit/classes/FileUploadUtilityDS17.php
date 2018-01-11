<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

//include '../config/Locations.php';

/**
 * Description of FileUploadUtility
 *
 * @author miracle
 */
class FileUploadUtilityDS17{
    //put your code here
    
	function fileMove($fileRef,$rootPath){
		
		// $rootPath = JOB_ATTACHMENT_LOCATION;
		$errors= array();
		$file_name = $fileRef['name'];
		$file_size =$fileRef['size'];
		$file_tmp =$fileRef['tmp_name'];
		$file_type=$fileRef['type'];
		$file_ext=strtolower(end(explode('.',$fileRef['name'])));
		$extensions = array("doc","pdf","txt","docx");
		if(in_array($file_ext,$extensions )=== false){
			return "<font color=red size=2px>extension not allowed, please choose a doc or pdf or txt file.</font>";
		}
		// echo 'filesize-->'.$file_size;
		if($file_size > 2097152){
			return 'File size must be excately 2 MB';
		}
		if(empty($errors)===true){
			move_uploaded_file($file_tmp,$rootPath.$file_name);
			return "Success";
			
		}else{
			// print_r($errors);
			return $errors;
		}
		
	}
   function fileMoveWithRename($fileRef,$rootPath){
       
      // $rootPath = JOB_ATTACHMENT_LOCATION;
       $errors= array();
    $file_name = $fileRef['name'];
    $file_size =$fileRef['size'];
    $file_tmp =$fileRef['tmp_name'];
    $file_type=$fileRef['type'];   
    $file_ext=strtolower(end(explode('.',$fileRef['name'])));
    $extensions = array("doc","pdf","txt","docx","rtf"); 		
    if(in_array($file_ext,$extensions )=== false){
     return "<font color=red size=2px>extension not allowed, please choose a doc or pdf or txt file.</font>";
    }
   // echo 'filesize-->'.$file_size;
   // if($file_size > 2097152){
    if($file_size > 10000000){
    return 'File size must be less than 10 MB';
    }				
    if(empty($errors)===true){
        //  move_uploaded_file($file_tmp,$rootPath.$file_name);
        move_uploaded_file($file_tmp, $rootPath);
        return "Success";
        
    }else{
       // print_r($errors);
       return $errors; 
    }
       
   }
}

?>
