/**
 * Author : Santosh Kola
 * Date : 11/30/2017
 * Description : For getting and update call details data.
 */

function updateMeanHackCallData() {
	$("#resultMessageForupdate").html('');
	var callComments = $("#callComments").val();
	var typeOfStaying = $("#typeOfStaying").val();
	var radios = document.getElementsByName('optradio');
	var meanHackId = $("#meanHackId").val();
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
	var attendeeradios = document.getElementsByName('attendeeradio');
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
	var lapradios = document.getElementsByName('lapradio');
	var selectLaprRadio=-1;
	for (var k = 0, laplength = lapradios.length; k < laplength; k++)
	{
	 if (lapradios[k].checked)
	 {
	  // do whatever you want with the checked radio
	  //alert(radios[i].value);
		 selectLaprRadio = lapradios[k].value;
	  // only one radio can be logically checked, don't check the rest
	  break;
	 }
	}
	
	var genderObj = document.getElementsByName('gender');
	var genderValue='';
	for (var k = 0, genderLength = genderObj.length; k < genderLength; k++)
	{
	 if (genderObj[k].checked)
	 {
		 genderValue = genderObj[k].value;
	  break;
	 }
	}
	
	
	if(selectRadio==-2){
		$("#resultMessageForupdate").html('<div class="alert alert-danger alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>Please Choose Likely to come option!</div>');
		return false;
	}else if(selectAttendeeRadio==-1 && (selectRadio==1||selectRadio==2)){
		$("#resultMessageForupdate").html('<div class="alert alert-danger alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>Please Choose Attending As option!</div>');
		return false;
	}else if(selectLaprRadio==-1 && (selectRadio==1||selectRadio==2)){
		$("#resultMessageForupdate").html('<div class="alert alert-danger alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>Please Choose Carrying Laptop option!</div>');
		return false;
	}else if(typeOfStaying=="" && (selectRadio==1||selectRadio==2)){
		$("#resultMessageForupdate").html('<div class="alert alert-danger alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>Please Choose Type Of Staying option!</div>');
		return false;
	}else if(callComments.trim()==""){
		$("#resultMessageForupdate").html('<div class="alert alert-danger alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>Please Enter Comments!</div>');
		return false;
	}else if(genderValue.trim()==""){
		$("#resultMessageForupdate").html('<div class="alert alert-danger alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>Please select gender!</div>');
		return false;
	}else{
		 var myObj = {};
		    
		    myObj["callComments"]=callComments;
		    myObj["radios"]=selectRadio;
		    if(selectRadio==1|| selectRadio==2){
		    myObj["attendeeradios"]=selectAttendeeRadio;
		    myObj["laprRadios"]=selectLaprRadio;
		    myObj["stayingType"]=typeOfStaying;
		    }else {
		    	myObj["attendeeradios"]="";
			    myObj["laprRadios"]="";
			    myObj["stayingType"]="";
		    }
		    myObj["meanHackId"]=meanHackId;
		    myObj["gender"]=genderValue;
		    
		    
		    var json = JSON.stringify(myObj);
		    $("#btnMeanHackCallSubmit").text('loading');
		    $("#btnMeanHackCallSubmit").attr("disabled", true);
		   // $("#btnCallSubmit").button('loading');
		    $.ajax({
		        // url:'editJobposting.action?jobId='+jobId,//
		        //url:'addJobposting.action?jobtitle='+jobtitle+'&jobtagline='+jobtagline+'&jobposition='+jobposition+'&jobqulification='+jobqulification+'&jobshifits='+jobshifits+"&location="+location+"&jobcountry="+jobcountry+"&jobstatus="+jobstatus+"&jobdescription="+jobdescription+"&jobtechnical="+jobtechnical+"&jobshiftskills="+jobshiftskills,
		        url:'save-mean-hack-admin-call-data.php',
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
		               $("#btnMeanHackCallSubmit").text('Save');
			 		    $("#btnMeanHackCallSubmit").attr("disabled", false);
		        },
		        error: function(e){
		        	alert("error=="+e);
		        	 $("#btnMeanHackCallSubmit").text('Save');
		 		    $("#btnMeanHackCallSubmit").attr("disabled", false);
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



function showRegistraintsMeanHackModal(techTalksEmail, citizenHackEmail,hungamaEmail,jobFairEmail, Id) {
	
	$('#meanHackId').val(Id);
	
	
	 $("#resultMessageForupdate").html('');
	document.getElementById("load").style.display = 'block';
	document.getElementById("loadComments").style.display = 'block';
	
	var radios = document.getElementsByName('optradio');
	for (var i = 0, length = radios.length; i < length; i++)
	{
		radios[i].checked=false;
	}
	var attendeeradios = document.getElementsByName('attendeeradio');
	for (var i = 0, length = attendeeradios.length; i < length; i++)
	{
		attendeeradios[i].checked=false;
	}
	var lapradios = document.getElementsByName('lapradio');
	for (var i = 0, length = lapradios.length; i < length; i++)
	{
		lapradios[i].checked=false;
	}
	
	var gender = document.getElementsByName('gender');
	for (var i = 0, length = gender.length; i < length; i++)
	{
		gender[i].checked=false;
	}
	
	
	//---------
	$('#firstName').val("");
	$('#lastName').val("");
	$('#mobileNumber').val("");
	$('#altMobileNumber').val("");
	$('#email').val("");
	$('#collegeName').val("");
	$('#otherCollegeName').val("");
	$('#otherCollegeDiv').hide();
	$('#branch').val("");
	$('#year').val("");
	$('#technologyArea').val("");
	$('#useCaseArea').val("");
	$('#teamMember1Name').val("");
	$('#teamMember1Branch').val("");
	$('#teamMember1Year').val("");
	$('#teamMember2Name').val("");
	$('#teamMember2Branch').val("");
	$('#teamMember2Year').val("");
	$('#teamMember3Name').val("");
	$('#teamMember3Branch').val("");
	$('#teamMember3Year').val("");
	$('#teamMember4Name').val("");
	$('#teamMember4Branch').val("");
	$('#teamMember4Year').val("");
	$('#technicalExpertise').val("");
	$('#reasonForBest').val("");
	$('#street').val("");
	$('#state').val("");
	$('#district').val("");
	$('#postalCode').val("");
	$('#aboutHim').val("");
	$('#teamContact1Number').val("");
	$('#teamContact2Number').val("");
	$('#teamContact3Number').val("");
	$('#teamContact4Number').val("");
	$('#teamMember1Email').val("");
	$('#teamMember2Email').val("");
	$('#teamMember3Email').val("");
	$('#teamMember4Email').val("");
	$('#callComments').val("");
	$('#typeOfStaying').val("");
	
	//-------
	
	$("#btnMeanHackCallSubmit").attr("disabled", true);
	
	$.ajax({
		
		
		url : 'getMeanHackCallDetails.php?meanHackId=' + Id + '&date=' + new Date(),//
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
				var CarryingLaptop = json["CarryingLaptop"];

				for (var k = 0, laplength = lapradios.length; k < laplength; k++)
				{
					if(lapradios[k].value==CarryingLaptop){
						lapradios[k].checked=true;
						break;
					}
				}
			
				
				var Gender = json["Gender"];
				for (var l = 0, genderLength = gender.length;  l< genderLength; l++)
				{
					if(gender[l].value==Gender){
						gender[l].checked=true;
						break;
					}
				}
				
				
				$('#studentNameSpan').html(json["FirstName"]+" "+json["LastName"]);
				$('#firstName').val(json["FirstName"]);
				$('#lastName').val(json["LastName"]);
				$('#mobileNumber').val(json["MobileNumber"]);
				$('#altMobileNumber').val(json["AltMobileNumber"]);
				$('#email').val(json["Email"]);
				$('#collegeName').val(json["CollegeName"]);
				$('#branch').val(json["Branch"]);
				$('#year').val(json["YEAR"]);
				$('#technologyArea').val(json["TechnologyArea"]);
				$('#useCaseArea').val(json["UseCaseArea"]);
				$('#teamMember1Name').val(json["TeamMember1Name"]);
				$('#teamMember1Branch').val(json["TeamMember1Branch"]);
				$('#teamMember1Year').val(json["TeamMember1Year"]);
				$('#teamMember2Name').val(json["TeamMember2Name"]);
				$('#teamMember2Branch').val(json["TeamMember2Branch"]);
				$('#teamMember2Year').val(json["TeamMember2Year"]);
				$('#teamMember3Name').val(json["TeamMember3Name"]);
				$('#teamMember3Branch').val(json["TeamMember3Branch"]);
				$('#teamMember3Year').val(json["TeamMember3Year"]);
				$('#teamMember4Name').val(json["TeamMember4Name"]);
				$('#teamMember4Branch').val(json["TeamMember4Branch"]);
				$('#teamMember4Year').val(json["TeamMember4Year"]);
				$('#technicalExpertise').val(json["TechnicalExpertise"]);
				$('#reasonForBest').val(json["ReasonForBest"]);
				$('#street').val(json["Street"]);
				$('#state').val(json["State"]);
				$('#district').val(json["District"]);
				$('#postalCode').val(json["PostalCode"]);
				$('#aboutHim').val(json["AboutHim"]);
				$('#teamContact1Number').val(json["TeamContact1Number"]);
				$('#teamContact2Number').val(json["TeamContact2Number"]);
				$('#teamContact3Number').val(json["TeamContact3Number"]);
				$('#teamContact4Number').val(json["TeamContact4Number"]);
				$('#teamMember1Email').val(json["TeamMember1Email"]);
				$('#teamMember2Email').val(json["TeamMember2Email"]);
				$('#teamMember3Email').val(json["TeamMember3Email"]);
				$('#teamMember4Email').val(json["TeamMember4Email"]);
				$('#callComments').val(json["CallComments"]);
				$('#typeOfStaying').val(json["TypeOfStaying"]);
				
				
				
				
				if(json["CollegeName"]=='Other'){
				$('#otherCollegeName').val(json["OtherCollegeName"]);
				$('#otherCollegeDiv').show();
				}
				
				if(json["TeamMember1Email"].trim()!=''){
					$("#teamMember1Div").show();
				}else{
					$("#teamMember1Div").hide();
				}
				if(json["TeamMember2Email"].trim()!=''){
					$("#teamMember2Div").show();
				}else{
					$("#teamMember2Div").hide();
				}
				if(json["TeamMember3Email"].trim()!=''){
					$("#teamMember3Div").show();
				}else{
					$("#teamMember3Div").hide();
				}
				if(json["TeamMember4Email"].trim()!=''){
					$("#teamMember4Div").show();
				}else{
					$("#teamMember4Div").hide();
				}
				
				if(LikelyToCome==1 || LikelyToCome==2){
					$("#isAttending").show();
					
				}else{
					$("#isAttending").hide();
					
				}
 
				
			}
			 document.getElementById("load").style.display = 'none';
			 document.getElementById("loadComments").style.display = 'none';
			 $("#btnMeanHackCallSubmit").attr("disabled", false);
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