/**
 * Author : Santosh Kola
 * Date : 11/30/2017
 * Description : For getting and update call details data.
 */

function updateCallData() {
	 $("#resultMessageForupdate").html('');
	var callComments = $("#callComments").val().trim();
	var radios = document.getElementsByName('optradio');
	
	var optAttdAs = document.getElementsByName('optAttdAs');
	var laptopOpt = document.getElementsByName('optLap');
	var graduationBranch = $("#graduationBranchCmnts").val();  
	var graduationYear = $("#graduationYearCmnts").val();
	var typeOfStaying = $("#HostelCmnts").val();
	
	var collegeName = $("#collegeNameCmnts").val();
	var otherCollegeName = $("#otherCollegeNameCmnts").val();
	

	
	
	
	
	//alert("typeOfStaying-->"+typeOfStaying);
	//alert("collegeName-->"+collegeName);
	
	//alert("graduationYearCmnts-->"+graduationYear);
	
	var techTalkId = $("#techTalkId").val();
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
	
var selectoptAttdAs =-2;
	
	for (var i = 0, length = optAttdAs.length; i < length; i++)
	{
	 if (optAttdAs[i].checked)
	 {
	  // do whatever you want with the checked radio
	  //alert(radios[i].value);
		 selectoptAttdAs = optAttdAs[i].value;
	  // only one radio can be logically checked, don't check the rest
	  break;
	 }
	}
	
	
	var selectlaptopOpt=-2;
	
	for (var i = 0, length = laptopOpt.length; i < length; i++)
	{
	 if (laptopOpt[i].checked)
	 {
	  // do whatever you want with the checked radio
	  //alert(radios[i].value);
		 selectlaptopOpt = laptopOpt[i].value;
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
	}else if(selectoptAttdAs==-2&& (selectRadio==1||selectRadio==2)){
		$("#resultMessageForupdate").html('<div class="alert alert-danger alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>Please Choose Attending As  option!</div>');
		return false;
		
	}else if(selectlaptopOpt==-2&& (selectRadio==1||selectRadio==2)){
		$("#resultMessageForupdate").html('<div class="alert alert-danger alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>Please Choose Carrying Laptop option!</div>');
		return false;
		
	}else if(genderValue=="" ){
		$("#resultMessageForupdate").html('<div class="alert alert-danger alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>Please select gender!</div>');
		return false;
		
	}else if(graduationBranch==""&& selectRadio!=-1){
		$("#resultMessageForupdate").html('<div class="alert alert-danger alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>Please Choose Graduation Branch</div>');
		return false;
		
	}else if(graduationYear==""&& selectRadio!=-1){
		$("#resultMessageForupdate").html('<div class="alert alert-danger alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>Please Choose graduation Year</div>');
		return false;
		
	}else if(typeOfStaying==""&& (selectRadio==1||selectRadio==2)){
		$("#resultMessageForupdate").html('<div class="alert alert-danger alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>Please Choose Type Of Staying!</div>');
		return false;
		
	}else if(collegeName==""&& selectRadio!=-1){
		$("#resultMessageForupdate").html('<div class="alert alert-danger alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>Please Select Your College</div>');
		return false;
		
	}else if(collegeName=="Other" && otherCollegeName=="" && selectRadio!=-1){
		$("#resultMessageForupdate").html('<div class="alert alert-danger alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>Please Enter  College Name!</div>');
		return false;
		
	}else if(callComments==""  ){
		$("#resultMessageForupdate").html('<div class="alert alert-danger alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>Please Enter Comments!</div>');
		return false;
		
	}else{
		 var myObj = {};
		    
		    myObj["callComments"]=callComments;
		    myObj["radios"]=selectRadio;
		   
		    if(selectRadio==1||selectRadio==2){
		    myObj["optAttdAs"]=selectoptAttdAs; 
		    myObj["laptopOpt"]=selectlaptopOpt;  
		    myObj["typeOfStaying"]=typeOfStaying;
		    }else {
		    	 myObj["optAttdAs"]=""; 
				    myObj["laptopOpt"]="";  
				    myObj["typeOfStaying"]="";
		    }
		    
		    myObj["graduationYear1"]=graduationYear;
		    myObj["graduationBranch1"]=graduationBranch;
		    
		    
		    myObj["collegeName1"]=collegeName;
		    myObj["otherCollegeName1"]=otherCollegeName;
		    myObj["gender"]=genderValue;
		    
		    //alert("typeOfStaying==>"+typeOfStaying);
		  // alert("collegeName==>"+collegeName);
		    
		    myObj["techTalkId"]=techTalkId;
		    
		    var json = JSON.stringify(myObj);
		    $("#btnCallSubmit").text('loading');
		    $("#btnCallSubmit").attr("disabled", true);
		   // $("#btnCallSubmit").button('loading');
		    $.ajax({
		        // url:'editJobposting.action?jobId='+jobId,//
		        //url:'addJobposting.action?jobtitle='+jobtitle+'&jobtagline='+jobtagline+'&jobposition='+jobposition+'&jobqulification='+jobqulification+'&jobshifits='+jobshifits+"&location="+location+"&jobcountry="+jobcountry+"&jobstatus="+jobstatus+"&jobdescription="+jobdescription+"&jobtechnical="+jobtechnical+"&jobshiftskills="+jobshiftskills,
		        url:'save-admin-tech-talk-call-data.php',
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
		               $("#btnCallSubmit").text('Save');
			 		    $("#btnCallSubmit").attr("disabled", false);
		        },
		        error: function(e){
		        	alert("error=="+e);
		        	 $("#btnCallSubmit").text('Save');
		 		    $("#btnCallSubmit").attr("disabled", false);
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
      if(element.id=="callComments")
        {i=500;
        label="Comments"
        }
      if(element.id=="otherCollegeNameCmnts")
      {i=100;
      label="Other College name"
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





function showRegistraintsTechTalkModal(techTalksEmail, citizenHackEmail,hungamaEmail,jobFairEmail, Id, Name) {
	$('#techTalkId').val(Id);
	

	
	 $("#resultMessageForupdate").html('');
	document.getElementById("loadMessage").style.display = 'block';
	document.getElementById("loadMessageComments").style.display = 'block';
	
	var radios = document.getElementsByName('optradio');
	for (var i = 0, length = radios.length; i < length; i++)
	{
		radios[i].checked=false;
	}
	
	var optAttdAs = document.getElementsByName('optAttdAs');
	for (var j = 0, length = optAttdAs.length; j < length; j++)
	{
		optAttdAs[j].checked=false;
	}
	
	var optLap = document.getElementsByName('optLap');
	for (var k = 0, length = optLap.length; k < length; k++)
	{
		optLap[k].checked=false;
	}
	
	var gender = document.getElementsByName('gender');
	for (var i = 0, length = gender.length; i < length; i++)
	{
		gender[i].checked=false;
	}
	
	$('#firstName').val("");
	$('#lastName').val("");
	$('#mobileNumber').val("");
	$('#altMobileNumber').val("");
	$('#email').val("");
	$('#designation').val("");
	$('#attendeeType').val("");
	$('#primaryInterest').val("");
	$('#secondaryInterest').val("");
	$('#street').val("");
	$('#country').val("");
	$('#state').val("");
	$('#district').val("");
	$('#postalCode').val("");
	$('#comments').val("");
	$('#callComments').val("");
	
	$('#graduationBranchCmnts').val("");
	$('#graduationYearCmnts').val("");
	$('#HostelCmnts').val("");
	$('#collegeNameCmnts').val("");
	$('#otherCollegeNameCmntsDiv').hide();
	
	$('#otherCollegeNameCmnts').val("");
	
	
	
	
	
	
	
	$("#btnCallSubmit").attr("disabled", true);
	
	$.ajax({
		
		
		url : 'getCallDetails.php?techTalkId=' + Id + '&date=' + new Date(),//
		context : document.body,
		success : function(responseText) {
			var json = $.parseJSON(responseText);
			
			
			 if(parseInt(json["RowCount"],10)>0){
				 
				 var LikelyToCome = json["LikelyToCome"];
				for (var i = 0, length = radios.length; i < length; i++)
				{
					if(radios[i].value==LikelyToCome){
						radios[i].checked=true;
						break;
					}
				}
				
				 var AttendingAs = json["AttendingAs"];
				for (var i = 0, length = optAttdAs.length; i < length; i++)
				{
					if(optAttdAs[i].value==AttendingAs){
						optAttdAs[i].checked=true;
						break;
					}
				}
				
				 var CarryingLaptop = json["CarryingLaptop"];
				for (var i = 0, length = optLap.length; i < length; i++)
				{
					if(optLap[i].value==CarryingLaptop){
						optLap[i].checked=true;
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
				$('#designation').val(json["Designation"]);
				$('#attendeeType').val(json["AttendeeType"]);
				$('#collegeNameDiv').hide();
				$('#otherCollegeNameDiv').hide();
				
				if(json["AttendeeType"]=="Student"){
					
					
			
				$('#collegeName').val(json["CollegeName"]);
				$('#collegeNameDiv').show();
			
				 
				if(json["CollegeName"]=="Other"){
					//alert("collegeName-->"+json["CollegeName"]);
					$('#otherCollegeName').val(json["OtherCollegeName"]);
					$('#otherCollegeNameDiv').show();
					
				}
				
				}
				
				
				
			
				
				$('#primaryInterest').val(json["PrimaryIntrest"]);
				$('#secondaryInterest').val(json["SecondaryIntrest"]);
				$('#street').val(json["Street"]);
				$('#country').val(json["Country"]);
				$('#state').val(json["State"]);
				$('#district').val(json["District"]);
				$('#postalCode').val(json["PostalCode"]);
				$('#comments').val(json["Comments"]);
				$('#callComments').val(json["CallComments"]);
				
				
				$('#optradio').val(json["LikelyToCome"]);
				$('#optAttdAs').val(json["optAttdAs"]);
				$('#optLap').val(json["CarryingLaptop"]);
				
				$('#graduationBranchCmnts').val(json["Branch"]);
				$('#graduationYearCmnts').val(json["GraduationYear"]);
				$('#HostelCmnts').val(json["TypeOfStaying"]);
				$('#collegeNameCmnts').val(json["CollegeName"]);
				
				if(json["CollegeName"]=="Other"){
				$('#otherCollegeNameCmnts').val(json["OtherCollegeName"]);
				$('#otherCollegeNameCmntsDiv').show();
				}
				
				
				if(json["LikelyToCome"]==1 || json["LikelyToCome"]==2){
					$("#attendingAsDiv").show();
					$("#carryingLaptopDiv").show();
					$("#stayingDiv").show();
					
				}else{
					$("#attendingAsDiv").hide();
					$("#carryingLaptopDiv").hide();
					$("#stayingDiv").hide();

					var attendeeradios = document.getElementsByName('optAttdAs');
					for (var i = 0, length = attendeeradios.length; i < length; i++)
					{
						attendeeradios[i].checked=false;
					}
					var lapradios = document.getElementsByName('optLap');
					for (var i = 0, length = lapradios.length; i < length; i++)
					{
						lapradios[i].checked=false;
					}

					$('#HostelCmnts').val("");
					
					
				}
				
			}
			 document.getElementById("loadMessage").style.display = 'none';
			 document.getElementById("loadMessageComments").style.display = 'none';
			 $("#btnCallSubmit").attr("disabled", false);
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


function collegeTypeCmnts(obj){
	// alert("collegeType");
	if(obj.value=='Other'){
		$("#otherCollegeNameCmntsDiv").show();
		
	}else {
		$("#otherCollegeNameCmntsDiv").hide();
		$("#otherCollegeNameCmnts").val("");
		
	}
}