/**
 * Author : Santosh Kola
 * Date : 11/30/2017
 * Description : For getting and update call details data.
 */

function updateHangamaCallData() {
	$("#resultMessageForupdate").html('');
	var callComments = $("#callComments").val();
	var typeOfStaying = $("#typeOfStaying").val();
	var radios = document.getElementsByName('likelytoComeOption');
	var hangamaId = $("#hangamaId").val();
	var selectRadio=-2;
	for (var i = 0, length = radios.length; i < length; i++)
	{
	 if (radios[i].checked)
	 {
	  // do whatever you want with the checked radio
	  //alert(radios[i].value);
	  selectRadio = radios[i].value;
	  // only one radio can be logically checked, don't check the rest
	  break;
	 }
	}
	var attendeeradios = document.getElementsByName('attendingAsOption');
	var selectAttendeeRadio=-1;
	for (var j = 0, attendeelength = attendeeradios.length; j < attendeelength; j++)
	{
	 if (attendeeradios[j].checked)
	 {
	  // do whatever you want with the checked radio
	  //alert(radios[i].value);
		 selectAttendeeRadio = attendeeradios[j].value;
	  // only one radio can be logically checked, don't check the rest
	  break;
	 }
	}
	if(selectRadio==-2){
		$("#resultMessageForupdate").html('<div class="alert alert-danger alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>Please Choose Likely to come option!</div>');
		return false;
	}else if(selectAttendeeRadio==-1 && (selectRadio.trim()=='May Be' || selectRadio.trim()=='Yes')){
		$("#resultMessageForupdate").html('<div class="alert alert-danger alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>Please Choose Attending As option!</div>');
		return false;
	}else if(typeOfStaying=="" && (selectRadio.trim()=='May Be' || selectRadio.trim()=='Yes')){
		$("#resultMessageForupdate").html('<div class="alert alert-danger alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>Please Choose Type Of Staying option!</div>');
		return false;
	}else if(callComments.trim()==""){
		$("#resultMessageForupdate").html('<div class="alert alert-danger alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>Please Enter Comments!</div>');
		return false;
	}else{
		 var myObj = {};
		    
		    myObj["callComments"]=callComments;
		    myObj["radios"]=selectRadio;
		    if(selectRadio.trim()=='May Be' || selectRadio.trim()=='Yes'){
		    myObj["attendeeradios"]=selectAttendeeRadio;
		    myObj["stayingType"]=typeOfStaying;
		    }else {
		    	myObj["attendeeradios"]="";
			    myObj["stayingType"]="";
		    }
		    myObj["hangamaId"]=hangamaId;
		    
		    var json = JSON.stringify(myObj);
		    $("#btnHangamaCallSubmit").text('loading');
		    $("#btnHangamaCallSubmit").attr("disabled", true);
		   // $("#btnCallSubmit").button('loading');
		    $.ajax({
		        // url:'editJobposting.action?jobId='+jobId,//
		        //url:'addJobposting.action?jobtitle='+jobtitle+'&jobtagline='+jobtagline+'&jobposition='+jobposition+'&jobqulification='+jobqulification+'&jobshifits='+jobshifits+"&location="+location+"&jobcountry="+jobcountry+"&jobstatus="+jobstatus+"&jobdescription="+jobdescription+"&jobtechnical="+jobtechnical+"&jobshiftskills="+jobshiftskills,
		        url:'save-hangama-admin-call-data.php',
		        data:{callDetails: json},
		        contentType: 'application/json',
		        type: 'GET',
		        context: document.body,
		        success: function(responseText) {
		              var displaymessage = responseText;
		             
		              if(displaymessage='Success')
		              $("#resultMessageForupdate").html('<div class="alert alert-success alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>Student details updated successfully.</div>');
		              else
		            	  $("#resultMessageForupdate").html('<div class="alert alert-danger alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>Oops! Something went wrong. Please Try Again!</div>');
		             // document.getElementById("load").style.display = 'none';
		               $("#btnHangamaCallSubmit").text('Save');
			 		    $("#btnHangamaCallSubmit").attr("disabled", false);
		        },
		        error: function(e){
		        	alert("error=="+e);
		        	 $("#btnHangamaCallSubmit").text('Save');
		 		    $("#btnHangamaCallSubmit").attr("disabled", false);
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
    $("#resultMessageForupdate").html('');
     //New Change middlename
      if(element.id=="callComments")
        {i=500;
        }
        
        if(element.value.replace(/^\s+|\s+$/g,"").length>i) {
            str=new String(element.value);
            element.value=str.substring(0,i);
            $("#resultMessageForupdate").html('<div class="alert alert-danger alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>Comments length must be less than 500 characters</div>');
         //alert("The "+element.id+" length must be less than "+i+" characters");
            element.focus();
            return false;
        }
        return true;
        
        
    }



function showRegistraintsHangamaModal(techTalksEmail, citizenHackEmail,hungamaEmail,jobFairEmail, Id) {
	
	
	
	
	$('#hangamaId').val(Id);
	
	 $("#resultMessageForupdate").html('');
	document.getElementById("load").style.display = 'block';
	document.getElementById("loadComments").style.display = 'block';
	
	var radios = document.getElementsByName('likelytoComeOption');
	for (var i = 0, length = radios.length; i < length; i++)
	{
		radios[i].checked=false;
	}
	var attendeeradios = document.getElementsByName('attendingAsOption');
	for (var j = 0, length = attendeeradios.length; j < length; j++)
	{
		attendeeradios[j].checked=false;
	}
	$('#nameSpan').html("");
	//---------
	$('#firstName').val("");
	$('#lastName').val("");
	$('#mobileNumber').val("");
	$('#altMobileNumber').val("");
	$('#email').val("");
	$('#collegeName').val("");
	$('#branch').val("");
	$('#year').val("");
	$('#branch').val("");
	$('#year').val("");
	$('#gender').val("");
	$('#hungammaPerformance').val("");
	$('#performanceType').val("");
	$('#auditionLink').val("");
	$('#street').val("");
	$('#state').val("");
	$('#district').val("");
	$('#postalCode').val("");
	$('#aboutHim').val("");
	$('#callComments').val("");
	$('#typeOfStaying').val("");
	$('#leaderName').val("");
	$('#leaderEmail').val("");
	$('#leaderPhoneNumber').val("");
	$('#teamSize').val("");
	$('#teamMemberNames').val("");
	
	
	
	//-------
	
	$("#btnHangamaCallSubmit").attr("disabled", true);
	
	$.ajax({
		
		
		url : 'getHangamaCallDetails.php?hangamaId=' + Id + '&date=' + new Date(),//
		context : document.body,
		success : function(responseText) {
			var json = $.parseJSON(responseText);
			
			
			 if(parseInt(json["RowCount"],10)>0){
				 var LikelyToCome = json["LikelyToCome"];
					var CallComments = json["CallComments"];
				
				for (var i = 0, length = radios.length; i < length; i++)
				{
					if(radios[i].value==LikelyToCome){
						radios[i].checked=true;
						break;
					}
				}
				var AttendingAs = json["AttendingAs"];

				for (var j = 0, attenlength = attendeeradios.length; j < attenlength; j++)
				{
					if(attendeeradios[j].value==AttendingAs){
						attendeeradios[j].checked=true;
						break;
					}
				}
				
				
				
				$('#nameSpan').html(json["FirstName"]+" "+json["LastName"]);
				$('#firstName').val(json["FirstName"]);
				$('#lastName').val(json["LastName"]);
				$('#mobileNumber').val(json["MobileNumber"]);
				$('#altMobileNumber').val(json["AltMobileNumber"]);
				$('#email').val(json["Email"]);
				$('#collegeName').val(json["CollegeName"]);
				$('#branch').val(json["Branch"]);
				$('#year').val(json["YEAR"]);
				$('#gender').val(json["Gender"]);
				$('#hungammaPerformance').val(json["CompetitionName"]);
				$('#performanceType').val(json["CompetitionType"]);
				$('#auditionLink').val(json["AuditionLink"]);
				$('#street').val(json["Street"]);
				$('#Country').val(json["Country"]);
				$('#state').val(json["State"]);
				$('#district').val(json["District"]);
				$('#postalCode').val(json["PostalCode"]);
				$('#aboutHim').val(json["AboutHim"]);
				$('#callComments').val(json["CallComments"]);
				$('#typeOfStaying').val(json["TypeOfStaying"]);
				
				if(json["CompetitionType"]=='Group'){
					$('#leaderName').val(json["LeaderName"]);
					$('#leaderEmail').val(json["LeaderEmail"]);
					$('#leaderPhoneNumber').val(json["LeaderPhoneNumber"]);
					$('#teamSize').val(json["TeamSize"]);
					$('#teamMemberNames').val(json["TeamMemberNames"]);
					$('#teamDetailsDiv').show();
					
				}else{
					$('#leaderName').val("");
					$('#leaderEmail').val("");
					$('#leaderPhoneNumber').val("");
					$('#teamSize').val("");
					$('#teamMemberNames').val("");
					$('#teamDetailsDiv').hide();
				}
				
				
				
				
				if(json["CollegeName"]=='Other'){
				$('#otherCollegeName').val(json["OtherCollegeName"]);
				$('#otherCollegeDiv').show();
				}
				
				
				if(LikelyToCome.trim()=='May Be' || LikelyToCome.trim()=='Yes'){
					$("#isAttending").show();
					
				}else{
					$("#isAttending").hide();
					
				}
 
				
			}
			 document.getElementById("load").style.display = 'none';
			 document.getElementById("loadComments").style.display = 'none';
			 $("#btnHangamaCallSubmit").attr("disabled", false);
		},
		error : function(e) {

		}
	});

	
	if (techTalksEmail != '') {
		
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
	
	if (jobFairEmail != '') {
		$('#jobFairButton').show();
	} else {
		$('#jobFairButton').hide();
	}
	
	
	
	$('#editModal').modal('show');
}