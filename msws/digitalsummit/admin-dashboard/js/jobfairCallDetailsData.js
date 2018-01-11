function showRegistraintsJobFairModal(techTalkEmail, citizenHackEmail,hungamaEmail,email, Id) {
	
	$('#jobfairId').val(Id);
	
	 $("#resultMessageForupdate").html('');
	document.getElementById("load").style.display = 'block';
	document.getElementById("loadComments").style.display = 'block';
	
	var likelytoComeOption = document.getElementsByName('likelyToCome');
	for (var i = 0, length = likelytoComeOption.length; i < length; i++)
	{
		likelytoComeOption[i].checked=false;
	}
	
	$("#addComments").val("");
	
	$('#nameSpan').html("");
	$('#resumeLinkSpan').html("");

	$('#firstName').val("");
	$('#lastName').val("");
	$('#mobileNumber').val("");
	$('#altMobileNumber').val("");
	$('#email').val("");
	$('#designation').val("");
	$('#position').val("");
	$('#graduation').val("");
	$('#graduationPercentage').val("");
	$('#postGraduation').val("");
	$('#postGraduationPercentage').val("");
	$('#yearsOfExperience').val("");
	$('#lastDrawnMonthlySalary').val("");
	
	$('#skillSetModal').val("");
	$('#postalCode').val("");
	$('#comments').val("");
	
	$('#collegeName').val("");  
	$('#otherCollegeName').val("");
	$('#attendeeType').val("");
	
	$('#street').val(""); 
	$('#state').val(""); 
	$('#district').val(""); 
	$('#postalCode').val(""); 
	
	
		$('#collegeNameDiv').hide();
		
			$('#otherCollegeNameDiv').hide();
		
			
			
	//-------
	
	$("#btnJonFairCallSubmit").attr("disabled", true);
	//alert("ajax call-->");
	$.ajax({
		
	
		
		
		url : 'getJobfairCallDetails.php?jobfairId=' + Id + '&date=' + new Date(),//
		context : document.body,
		success : function(responseText) {
			var json = $.parseJSON(responseText);
			
			
			 if(parseInt(json["RowCount"],10)>0){
				 
				// alert("After getting Response");
			 var likelyToCome = json["LikelyToCome"];
			
				
				for (var i = 0, length = likelytoComeOption.length; i < length; i++)
				{
					if(likelytoComeOption[i].value==likelyToCome){
						likelytoComeOption[i].checked=true;
						break;
					}
				}
				
				
				
				
				$('#nameSpan').html(json["FirstName"]+" "+json["LastName"]);
				$('#firstName').val(json["FirstName"]);
				$('#lastName').val(json["LastName"]);
				$('#mobileNumber').val(json["PhoneNumber"]);
				$('#altMobileNumber').val(json["AltPhoneNumber"]);
				$('#email').val(json["Email"]);
				$('#designation').val(json["Designation"]);
				$('#position').val(json["ApplyingFor"]);
				$('#graduation').val(json["Graduation"]);
				$('#graduationPercentage').val(json["GraduationPer"]);
				$('#postGraduation').val(json["PostGraduation"]);
				$('#postGraduationPercentage').val(json["PostGraduationPer"]);
				$('#yearsOfExperience').val(json["Experience"]);
				
				$('#lastDrawnMonthlySalary').val(json["Salary"]);
				
				$('#skillSetModal').val(json["SkillSet"]);
				$('#postalCode').val(json["PostalCode"]);
				$('#comments').val(json["PositionDesc"]);
				
				$('#likelyToCome').val(json["LikelyToCome"]);
				$('#addComments').val(json["AddComments"]);
				
				$('#collegeName').val(json["CollegeName"]);  
				$('#otherCollegeName').val(json["OtherCollegeName"]);
				$('#attendeeType').val(json["AttendeeType"]); 
				
				if(json["AttendeeType"]=="Student"){
					$('#collegeNameDiv').show();
					if(json["CollegeName"]=="Other"){
						$('#otherCollegeNameDiv').show();
					}
					
				}
				
				$('#street').val(json["Street"]); 
				$('#state').val(json["State"]); 
				$('#district').val(json["District"]); 
				$('#postalCode').val(json["PostalCode"]); 
				
				
				
				
				if(json["IsFileExisted"]){
					
				var randomKey = json["RandomKey"];
					$('#resumeLinkSpan').html("FileExisted");
					//var link = "<a href='download-resume.php?id="+Id+"&randomKey="+randomKey+"' ><font color='green' size='3px'>Download Resume</font></a>"
					var link = "<a href=\"javascript:downloadResume("+Id+",'"+randomKey+"');\" ><font color='green' size='3px'>Download Resume</font></a>"
					$('#resumeLinkSpan').html("<font color='green' size='3px'>"+link+"</font>");
					
				}else {
					$('#resumeLinkSpan').html("<font color='red' size='3px'>Resume Not Existed</font>");
				}
				
				
				
				
				//alert(json["isfileexist"]);
				
				
				
				
		
				
			}
			 document.getElementById("load").style.display = 'none';
			 document.getElementById("loadComments").style.display = 'none';
			 $("#btnJonFairCallSubmit").attr("disabled", false);
		},
		error : function(e) {

		}
	});

	 if (techTalkEmail != '') {
			
			$('#techtalksButton').show();
		} else {
			
			$('#techtalksButton').hide();
		}

		if (citizenHackEmail != '') {
			
			$('#citizenhackButton').show();
		} else {
			$('#citizenhackButton').hide();
		}

		if (hungamaEmail != '') {
		
			$('#hungamaButton').show();
		} else {
			$('#hungamaButton').hide();
		}
	    
		$('#jobFairButton').show();
		
	
	$('#editModal').modal('show');
	
}

function downloadResume(Id,randomKey) {
	//alert(Id+"--"+reandomKey);
	
	window.location  ="download-job-fair-attachment.php?id="+Id+"&randomKey="+randomKey;
}

function updateJobFairCallData() {
	$("#resultMessageForupdate").html('');
	

	var likelyToCome = document.getElementsByName('likelyToCome');
	var addComments = $("#addComments").val().trim();
	
	var jobfairId = $("#jobfairId").val();
	
	
	var selectlikelyToCome=-2;
	for (var i = 0, length = likelyToCome.length; i < length; i++)
	{
	 if (likelyToCome[i].checked)
	 {
	  // do whatever you want with the checked radio
	  //alert(radios[i].value);
	  selectlikelyToCome = likelyToCome[i].value;
	  // only one radio can be logically checked, don't check the rest
	  break;
	 }
	}
	
	
	if(selectlikelyToCome==-2){
		$("#resultMessageForupdate").html('<div class="alert alert-danger alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>Please Choose Likely to come option!</div>');
		return false;
	}else if(addComments.length==0){
		$("#resultMessageForupdate").html('<div class="alert alert-danger alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>Please add comments!</div>');
		return false;
	}else{
		 var myObj = {};
		  myObj["likelyToCome"]=selectlikelyToCome;
		    myObj["addComments"]=addComments;
		    myObj["jobfairId"]=jobfairId;
		  
		    
		    var json = JSON.stringify(myObj);
		    $("#btnJonFairCallSubmit").text('loading');
		    $("#btnJonFairCallSubmit").attr("disabled", true);
		   // $("#btnCallSubmit").button('loading');
		    $.ajax({
		        // url:'editJobposting.action?jobId='+jobId,//
		        //url:'addJobposting.action?jobtitle='+jobtitle+'&jobtagline='+jobtagline+'&jobposition='+jobposition+'&jobqulification='+jobqulification+'&jobshifits='+jobshifits+"&location="+location+"&jobcountry="+jobcountry+"&jobstatus="+jobstatus+"&jobdescription="+jobdescription+"&jobtechnical="+jobtechnical+"&jobshiftskills="+jobshiftskills,
		        url:'save-jobfair-admin-call-data.php',
		        data:{callDetails: json},
		        contentType: 'application/json',
		        type: 'GET',
		        context: document.body,
		        success: function(responseText) {
		              var displaymessage = responseText;
		              
		              
		             
		              if(displaymessage='Success')
		              $("#resultMessageForupdate").html('<div class="alert alert-success alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>Your details updated successfully.</div>');
		              else
		            	  $("#resultMessageForupdate").html('<div class="alert alert-danger alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>Oops! Something went wrong. Please Try Again!</div>');
		             // document.getElementById("load").style.display = 'none';
		               $("#btnJonFairCallSubmit").text('Save');
			 		    $("#btnJonFairCallSubmit").attr("disabled", false);
		        },
		        error: function(e){
		        	alert("error=="+e);
		        	 $("#btnJonFairCallSubmit").text('Save');
		 		    $("#btnJonFairCallSubmit").attr("disabled", false);
		        /*	 document.getElementById("load").style.display = 'none';
		             document.getElementById('resultMessage').innerHTML = "<font color=red>Please try again later</font>";*/
		 
		            
		        }
		    });

		    
		    
		   
		    
		       }
        
        
       /* xmlhttp.open("GET","../save-admin-call-data.php?optradio="+radios+"&callComments="+callComments+"&$rtechTalkId="+techTalkId,true);
        xmlhttp.send();*/
	
	
	
	
	
}

function fieldLengthValidator(element) {
    var i=0;
    var label="";
     //New Change middlename
      if(element.id=="addComments")
        {i=500;
        label="Comments"
        }
     
      
        
        if(element.value.replace(/^\s+|\s+$/g,"").length>i) {
            str=new String(element.value);
            element.value=str.substring(0,i);
            $("#resultMessageForupdate").html('<div class="alert alert-danger alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>'+label+' length must be less than '+i+' characters</div>');
         //alert("The "+element.id+" length must be less than "+i+" characters");
            element.focus();
            return false;
        }
        return true;
        
        
    }



