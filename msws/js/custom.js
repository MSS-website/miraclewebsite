//Function for File Input to take filename and put in Text Input
function putFileName()
{
	      
    var fullPath = document.getElementById('fileToUpload').value;
        
    if (fullPath) {
        var arr1 = new Array;
        arr1 = fullPath.split("\\");
        var len = arr1.length;
        var img1 = arr1[len-1];
        var filext = img1.substring(img1.lastIndexOf(".")+1);

        if(filext == "doc" || filext == "docx" || filext == 'txt' || filext == 'pdf' || filext == 'rtf')
        {
            
            var size = document.getElementById('fileToUpload').files[0].size;
                 
             
            if(parseInt(size)<2097152) {
                var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
                var filename = fullPath.substring(startIndex);
                if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                    filename = filename.substring(1);
                }
            	
                document.getElementById("fileDestination").value = filename;
                  
            }else {
                   
                showAlertModal("File size must be less than 2 MB");
                return (false);
            }
        }else {
            showAlertModal("Invalid File Format Selected.Please choose doc/docx/txt/pdf/rtf formats.");

            return false;
        }
            	
    }
}
function putSurveyFileName(qId,isAllowDocument,isAllowPictures)
{
	      closeAttachmentErrorMsg();
    var fullPath = document.getElementById('fileToUpload'+qId).value;
        
    if (fullPath) {
        var arr1 = new Array;
        arr1 = fullPath.split("\\");
        var len = arr1.length;
        var img1 = arr1[len-1];
        var filext = img1.substring(img1.lastIndexOf(".")+1).toLowerCase();
        
       var isAllow=true;
       var alertMessage='';
       if(isAllowDocument=='1'&&isAllowPictures=='1'){
           alertMessage = 'Please upload doc/docx/txt/pdf/rtf/xls/ods/png/jpg/jpeg/gif/bmp/tiff formates.';
           if(filext == "doc" || filext == "docx" || filext == 'txt' || filext == 'pdf' || filext == 'rtf'|| filext == 'png' || filext == 'jpg'|| filext == 'jpeg' || filext == 'gif'|| filext == 'xls'|| filext == 'ods'||filext == 'bmp'||filext == 'tiff')
              isAllow = true;
          else
              isAllow = false;
       }else if(isAllowDocument=='1'){
           alertMessage = 'Please upload doc/docx/txt/pdf/rtf/xls/ods formates.';
           if(filext == "doc" || filext == "docx" || filext == 'txt' || filext == 'pdf' || filext == 'rtf'|| filext == 'xls'|| filext == 'ods')
              isAllow = true;
          else
              isAllow = false;
       }else if(isAllowPictures=='1'){
           alertMessage = 'Please upload png/jpg/jpeg/gif/bmp/tiff formates.';
           if(filext == 'png' || filext == 'jpg'|| filext == 'jpeg' || filext == 'gif'||filext == 'bmp'||filext == 'tiff')
              isAllow = true;
          else
              isAllow = false;
       }
        
        
        

       if(isAllow)
        {
            
            var size = document.getElementById('fileToUpload'+qId).files[0].size;
                 
             
         //   if(parseInt(size)<2097152) {
            if(parseInt(size)<10000000) {// 10 MB(In Bytes)
            	
                var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
                var filename = fullPath.substring(startIndex);
                if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                    filename = filename.substring(1);
                }
            	
                document.getElementById("fileDestination"+qId).value = filename;
                 document.getElementById("isAttachmentReplaced"+qId).value = '1';
                 document.getElementById("attachmentDownload"+qId).innerHTML="";
                  
            }else {
                document.getElementById("fileDestination"+qId).value ='';
                  document.getElementById("fileToUpload"+qId).value = ''; 
                displayAttachmentErrorMessage("File size must be less than 10 MB");
                return (false);
            }
        }else {
          //  showAlertModal("Please upload doc/docx/txt/pdf/rtf/png/jpg/jpeg/gif formats ");
            displayAttachmentErrorMessage(alertMessage);
            document.getElementById("fileDestination"+qId).value ='';
           document.getElementById("fileToUpload"+qId).value = ''; 
            return (false);
        }
            	
    }
}    
//Function to hide alert element
function showAlertModal(msg)
{
    document.getElementById('showAlertText').innerHTML = msg;
    $('#myModal').modal('show');
    return false;
}

//Function to show SCVP Modals
function showAlertModalSCVP(a)
{
    alert('test');
    if(a==0)
    {
        $('#myModal1').modal('show');
    }else if(a==1)
    {
        $('#myModal2').modal('show');
    }else{
        $('#myModal3').modal('show');
    }
}

//Contact Form Validation
function validateForm()
{
    if(validateEmail(document.forms['myForm']['email'].value)==1)
    {
        return showAlertModal('Please enter a valid Email Address!!');
    }
    
    return true;
}

//Email Validation Method
function validateEmail(str)
{
    var atpos = str.indexOf("@");
    var dotpos = str.lastIndexOf(".");
    if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        return 1;
    }
    else
    {
        return 0;
    }
}

//No Number method; On Key Press
function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}   




function putExpLetterName()
{
	      
    var fullPath = document.getElementById('experienceLetter').value;
    var fileName = document.getElementById('experienceLetter').files[0].name;
    
    if(fileName.length>100){
    	 showAlertModal("File name must be less than 100 characters!");
         return (false);
    }
    
    if (fullPath) {
        var arr1 = new Array;
        arr1 = fullPath.split("\\");
        var len = arr1.length;
        var img1 = arr1[len-1];
        var filext = img1.substring(img1.lastIndexOf(".")+1);

        if(filext == "doc" || filext == "docx" || filext == 'txt' || filext == 'pdf' || filext == 'rtf')
        {
            
            var size = document.getElementById('experienceLetter').files[0].size;
                 
             
            if(parseInt(size)<2097152) {
                var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
                var filename = fullPath.substring(startIndex);
                if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                    filename = filename.substring(1);
                }
            	
                document.getElementById("explDestination").value = filename;
                  
            }else {
                   
                showAlertModal("File size must be less than 2 MB");
                return (false);
            }
        }else {
            showAlertModal("Invalid File Format Selected.Please choose doc/docx/txt/pdf/rtf formats.");

            return false;
        }
            	
    }
}



function putLatestResumeName()
{
	      
    var fullPath = document.getElementById('latestResume').value;
 var fileName = document.getElementById('latestResume').files[0].name;
 if(fileName.length>100){
	 showAlertModal("File name must be less than 100 characters!");
     return (false);
}
    
    if (fullPath) {
        var arr1 = new Array;
        arr1 = fullPath.split("\\");
        var len = arr1.length;
        var img1 = arr1[len-1];
        var filext = img1.substring(img1.lastIndexOf(".")+1);

        if(filext == "doc" || filext == "docx" || filext == 'txt' || filext == 'pdf' || filext == 'rtf')
        {
            
            var size = document.getElementById('latestResume').files[0].size;
                 
             
            if(parseInt(size)<2097152) {
                var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
                var filename = fullPath.substring(startIndex);
                if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                    filename = filename.substring(1);
                }
            	
                document.getElementById("resumeDestination").value = filename;
                  
            }else {
                   
                showAlertModal("File size must be less than 2 MB");
                return (false);
            }
        }else {
            showAlertModal("Invalid File Format Selected.Please choose doc/docx/txt/pdf/rtf formats.");

            return false;
        }
            	
    }
}


//putLetterOfAgreement()


function putLetterOfAgreement()
{
	      
    var fullPath = document.getElementById('letterOfAgreement').value;
 var fileName = document.getElementById('letterOfAgreement').files[0].name;
 if(fileName.length>100){
	 showAlertModal("File name must be less than 100 characters!");
     return (false);
}
    
    if (fullPath) {
        var arr1 = new Array;
        arr1 = fullPath.split("\\");
        var len = arr1.length;
        var img1 = arr1[len-1];
        var filext = img1.substring(img1.lastIndexOf(".")+1);

        if(filext == "doc" || filext == "docx" || filext == 'txt' || filext == 'pdf' || filext == 'rtf')
        {
            
            var size = document.getElementById('letterOfAgreement').files[0].size;
                 
             
            if(parseInt(size)<2097152) {
                var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
                var filename = fullPath.substring(startIndex);
                if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                    filename = filename.substring(1);
                }
            	
                document.getElementById("locDestination").value = filename;
                  
            }else {
                   
                showAlertModal("File size must be less than 2 MB");
                return (false);
            }
        }else {
            showAlertModal("Invalid File Format Selected.Please choose doc/docx/txt/pdf/rtf formats.");

            return false;
        }
            	
    }
    
}
    function dateOfJoining(){
    	
    	//alert("We are in dateOfJoining...method");
    		
    	var joinDate=document.getElementById("ver_dateofJoining").value;
    	var relievingDate=document.getElementById("ver_dateofRelieving").value;
    	var lastHikeDate=document.getElementById("ver_lastHikeDate").value;

    	/*alert("joinDate-->"+joinDate);
    	alert("relievingDate-->"+relievingDate);
    	alert("lastHikeDate-->"+lastHikeDate);*/

    	var dateOfJoining = new Date(joinDate);
    	var dateOfRelieving = new Date(relievingDate);
    	var dateOfLastHike= new Date(lastHikeDate);

    	/*alert("dateOfJoining-->"+dateOfJoining);
    	alert("dateOfRelieving-->"+dateOfRelieving);
    	alert("dateOfLastHike-->"+dateOfLastHike);
    	*/
    	if(dateOfJoining > dateOfRelieving || dateOfJoining > dateOfLastHike){
    		showAlertModal("Joining Date must be less than Relieving Date and last Hike Date");
    		document.getElementById("ver_dateofJoining").value="";
    		//document.getElementById("ver_dateofJoining").focus(); 
    		
    	}
    		
    	}


    	function dateOfRelieving(){
    		//alert("We are in dateOfRelieving...method");
    		
    		var joinDate=document.getElementById("ver_dateofJoining").value;
    		var relievingDate=document.getElementById("ver_dateofRelieving").value;
    		var lastHikeDate=document.getElementById("ver_lastHikeDate").value;

    		var dateOfJoining = new Date(joinDate);
    		var dateOfRelieving = new Date(relievingDate);
    		var dateOfLastHike= new Date(lastHikeDate);
    	/*
    		alert("dateOfJoining-->"+dateOfJoining);
    		alert("dateOfRelieving-->"+dateOfRelieving);
    		alert("dateOfLastHike-->"+dateOfLastHike);*/

    		if(dateOfRelieving < dateOfJoining || dateOfRelieving < dateOfLastHike){
    			showAlertModal("Relieving Date must be greater than Joining Date and last Hike Date ");
    			document.getElementById("ver_dateofRelieving").value="";
    			//document.getElementById("ver_dateofRelieving").focus(); 
    			
    		}
    		
    	}


    	function lastHikeDate(){
    		//alert("We are in lastHikeDate...method");
    		
    		var joinDate=document.getElementById("ver_dateofJoining").value;
    		var relievingDate=document.getElementById("ver_dateofRelieving").value;
    		var lastHikeDate=document.getElementById("ver_lastHikeDate").value;

    		var dateOfJoining = new Date(joinDate);
    		var dateOfRelieving = new Date(relievingDate);
    		var dateOfLastHike= new Date(lastHikeDate);
    	/*
    		alert("dateOfJoining-->"+dateOfJoining);
    		alert("dateOfRelieving-->"+dateOfRelieving);
    		alert("dateOfLastHike-->"+dateOfLastHike);
    	*/
    		if(dateOfLastHike < dateOfJoining || dateOfLastHike > dateOfRelieving){
    			showAlertModal("Last Hike Date must be between Joining Date and Relieving date ");
    			document.getElementById("ver_lastHikeDate").value="";
    			//document.getElementById("ver_lastHikeDate").focus(); 
    			
    		}
    		
    	}

    	 function checkVerifyForm(){
     		//alert("in checkVerifyForm function... ");
     		 
     		var experienceLetter = document.getElementById('experienceLetter').value;
     		//alert("experienceLetter-->"+experienceLetter);
     		
     		var latestResume = document.getElementById('latestResume').value;
     		//alert("latestResume-->"+latestResume);
     		
     		var letterOfAgreement = document.getElementById('letterOfAgreement').value;
     		//alert("letterOfAgreement-->"+letterOfAgreement);
     		
     		var latestPayslip = document.getElementById('latestPayslip').value;
     		//alert("latestPayslip-->"+latestPayslip);
     		
     		 
     		if(experienceLetter=='')
 			 {
 			 showAlertModal("Please Upload ExperienceLetter.");

 	            return false;
 			 }
     		else if(latestResume=='')
 			 {
    			 showAlertModal("Please Upload LatestResume.");

    	            return false;
    			 }
     		else if(letterOfAgreement=='')
 			 {
 			 showAlertModal("Please Upload LetterOfAgreement.");

 	            return false;
 			 }
     		else if(latestPayslip=='')
 			 {
 			 showAlertModal("Please Upload LatestPayslip.");

 	            return false;
 			 }else {
 				$("#btnSubmit").button('loading');
 				return true;
 			 }
     		
     		
     		
     	}

    	 
    	 function putLatestPaySlip()
     	{
     		//alert("hii");
     		      
     	    var fullPath = document.getElementById('latestPayslip').value;
     	    var fileName = document.getElementById('latestPayslip').files[0].name;
     	    
     	    if(fileName.length>100){
     	    	 showAlertModal("File name must be less than 100 characters!");
     	         return (false);
     	    }
     	    
     	    if (fullPath) {
     	        var arr1 = new Array;
     	        arr1 = fullPath.split("\\");
     	        var len = arr1.length;
     	        var img1 = arr1[len-1];
     	        var filext = img1.substring(img1.lastIndexOf(".")+1);

     	        if(filext == "doc" || filext == "docx" || filext == 'txt' || filext == 'pdf' || filext == 'rtf')
     	        {
     	            
     	            var size = document.getElementById('latestPayslip').files[0].size;
     	                 
     	             
     	            if(parseInt(size)<2097152) {
     	                var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
     	                var filename = fullPath.substring(startIndex);
     	                if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
     	                    filename = filename.substring(1);
     	                }
     	            	
     	                document.getElementById("payslipDestination").value = filename;
     	                  
     	            }else {
     	                   
     	                showAlertModal("File size must be less than 2 MB");
     	                return (false);
     	            }
     	        }else {
     	            showAlertModal("Invalid File Format Selected.Please choose doc/docx/txt/pdf/rtf formats.");

     	            return false;
     	        }
     	            	
     	    }
     	}




