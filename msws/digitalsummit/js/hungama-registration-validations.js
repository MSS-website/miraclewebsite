/**
 * Author : Santosh Kola
 * Description : Validations for digital summit 2017 cultural registraion form
 * Date : 11/27/2017
 */


function collegeType(obj){
	if(obj.value=='Other'){
		$("#otherCollegeName").show();
		
	}else {
		$("#otherCollegeName").hide();
		$("#otherCollegeName").val("");
		
	}
}


function checkBasicDetailsOfCulReg() {
	//alert("checkBasicDetailsOfCulReg");
	closeAlertMessage();
	hideAllErrMessages();
	var firstName = $("#firstName").val().trim();
	var lastName = $("#lastName").val().trim();
	var email = $("#email").val().trim();
	var mobileNumber = $("#mobileNumber").val().trim();
	var altMobileNumber = $("#altMobileNumber").val().trim();
	var collegeName = $("#collegeName").val().trim();
	var otherCollegeName = $("#otherCollegeName").val().trim();
	var graduationBranch = $("#graduationBranch").val().trim();
	var graduationYear = $("#graduationYear").val().trim();
	
	var gender = document.getElementsByName('gender');
	var isGenderSelected = false;
	for (var i = 0, length = gender.length; i < length; i++)
	{
	 if (gender[i].checked)
	 {
		 isGenderSelected = true;
	 
	  // do whatever you want with the checked radio
	  //alert(radios[i].value);
	  //selectRadio = radios[i].value;
	  // only one radio can be logically checked, don't check the rest
	  break;
	 }
	}
	
	
	
	if(firstName.length==0){
		//displayAlertMessage("Please enter first name!");
		document.getElementById("firstNameErr").innerHTML = "Please enter first name!";
		document.getElementById("firstNameErr").style.display = "block";
		//documnet.getElementById("firstName").focus();
		$("#firstName").focus();
		
	}else if(lastName.length==0){
		//displayAlertMessage("Please enter last name!");
		document.getElementById("lastNameErr").innerHTML = "Please enter last name!";
		 document.getElementById("lastNameErr").style.display = "block";
		 $("#lastName").focus();
	}else if(email.length==0){
		//displayAlertMessage("Please enter Email!");
		document.getElementById("emailErr").innerHTML = "Please enter email !";
		document.getElementById("emailErr").style.display = "block";
		$("#email").focus();
	}else if(!isGenderSelected){
		document.getElementById("genderErr").innerHTML = "Please select gender !";
		document.getElementById("genderErr").style.display = "block";
		//$("input.gender").focus();
		//document.forms["msform"].elements["gender"].focus();
		//document.msform.gender.focus(); 
		//displayAlertMessage("Please enter Email Address!");
	}else if(mobileNumber.length==0){
		//displayAlertMessage("Please enter mobile number!");
		document.getElementById("mobileNumberErr").innerHTML = "Please enter Mobile Number!";
		document.getElementById("mobileNumberErr").style.display = "block";
		$("#mobileNumber").focus();
	}else if(altMobileNumber.length==0){
		//displayAlertMessage("Please enter Alternative Mobile Number!");
		document.getElementById("altMobileNumberErr").innerHTML = "Please enter Alternate Mobile Number!";
		document.getElementById("altMobileNumberErr").style.display = "block";
		$("#altMobileNumber").focus();
		
	}else if(collegeName.length==0){
		//displayAlertMessage("Please enter College Name!");
		document.getElementById("collegeNameErr").innerHTML = "Please select college !";
		document.getElementById("collegeNameErr").style.display = "block";
		$("#collegeName").focus();
	}else if(collegeName=="Other" && otherCollegeName.length==0){
		
		//displayAlertMessage("Please enter Other College Name!");
		document.getElementById("otherCollegeNameErr").innerHTML = "Please enter college name!";
		document.getElementById("otherCollegeNameErr").style.display = "block";
		$("#collegeName").focus();
		
	}else if(graduationBranch.length==0){
		//displayAlertMessage("Please select Branch!");
		document.getElementById("graduationBranchErr").innerHTML = "Please select Branch !";
		document.getElementById("graduationBranchErr").style.display = "block";
		$("#graduationBranch").focus();
	}else if(graduationYear.length==0){
		//displayAlertMessage("Please select Year!");
		document.getElementById("graduationYearErr").innerHTML = "Please select Year !";
		document.getElementById("graduationYearErr").style.display = "block";
		$("#graduationYear").focus();
		
	}else{
		showAcadamicDetailsFieldSet();
	}
	
	
}


function closeAlertMessage() {

	$("#alertMessageDiv").hide();
	$("#alertMessageSpan").html("");

}

function displayAlertMessage(alertMessage) {
	$("#alertMessageDiv").show();
	$("#alertMessageSpan").html(alertMessage);
}


function collegeType(obj){
	if(obj.value=='Other'){
		$("#otherCollegeName").show();
		
	}else {
		$("#otherCollegeName").hide();
		$("#otherCollegeName").val("");
		
	}
}



function hideAllErrMessages(){
    $("#firstNameErr").hide();
   $("#lastNameErr").hide();
   $("#emailErr").hide();
   $("#genderErr").hide();
   $("#mobileNumberErr").hide();
   $("#altMobileNumberErr").hide();
   $("#collegeNameErr").hide();
   $("#otherCollegeNameErr").hide();
   $("#graduationBranchErr").hide();
   $("#graduationYearErr").hide();
   
   $("#competitionNameErr").hide();
   $("#competitionTypeErr").hide();
   $("#leaderNameErr").hide();
   $("#leaderEmailErr").hide();
   $("#leaderPhoneNumberErr").hide();
   $("#teamSizeErr").hide();
   $("#teamMemberNamesErr").hide();
   $("#auditionLinkErr").hide();
   $("#commentsErr").hide();
  
   $("#streetErr").hide();
   $("#countryErr").hide();
   $("#stateErr").hide();
   $("#districtErr").hide();
   $("#postalCodeErr").hide();
   $("#captcha_codeErr").hide();

}



$(function() {

	   $("#firstName").click(function() {
	        $("#firstNameErr").hide();
	        
	    });
	   
	   $("#lastName").click(function() {
	       $("#lastNameErr").hide();
	   });
	   
	   $("#mobileNumber").click(function() {
	       $("#mobileNumberErr").hide();
	       
	   });
	   
	  
	   $("#altMobileNumber").click(function() {
	       $("#altMobileNumberErr").hide();
	   });
	   
	   $("#email").click(function() {
	       $("#emailErr").hide();
	   });
	   $("input.gender").click(function() {
	       $("#genderErr").hide();
	   });
	   
	   $("#collegeName").click(function() {
	       $("#collegeNameErr").hide();
	   });
	   
	   
	   $("#otherCollegeName").click(function() {
	       $("#otherCollegeNameErr").hide();
	   });
	   
	   $("#graduationBranch").click(function() {
	       $("#graduationBranchErr").hide();
	   });
	   
	   $("#graduationYear").click(function() {
	       $("#graduationYearErr").hide();
	   });
	   
	   
	   
	   $("#competitionName").click(function() {
	       $("#competitionNameErr").hide();
	   });
	   
	   $("#competitionType").click(function() {
	       $("#competitionTypeErr").hide();
	   });
	   
	   $("#leaderName").click(function() {
	       $("#leaderNameErr").hide();
	   });
	   
	   $("#leaderEmail").click(function() {
	       $("#leaderEmailErr").hide();
	   });
	   
	   $("#leaderPhoneNumber").click(function() {
	       $("#leaderPhoneNumberErr").hide();
	   });
	   
	   $("#teamSize").click(function() {
	       $("#teamSizeErr").hide();
	   });
	   
	   $("#teamMemberNames").click(function() {
	       $("#teamMemberNamesErr").hide();
	   });
	   
	   $("#auditionLink").click(function() {
	       $("#auditionLinkErr").hide();
	   });
	   
	   $("#comments").click(function() {
	       $("#commentsErr").hide();
	   });
	   
	   
	   
	   
	   $("#street").click(function() {
	       $("#streetErr").hide();
	   });
	   
	   $("#country").click(function() {
	       $("#countryErr").hide();
	   });
	   
	   $("#state").click(function() {
	       $("#stateErr").hide();
	   });
	   
	   $("#district").click(function() {
	       $("#districtErr").hide();
	   });
	   
	   $("#postalCode").click(function() {
	       $("#postalCodeErr").hide();
	   });
	   
	   $("#captcha_code").click(function() {
	       $("#captcha_codeErr").hide();
	   });
	   
	   
	});


function culturalFieldLengthValidator(element) {
	
	closeAlertMessage();
    var i=0;
    var label="";
    //New Change middlename
    /// alert("hai");
    if(element.id=="firstName")
    {
        i=60;
        label="First name"
    }else if(element.id=="lastName")
    {
        i=60;
        label="Last name"
    }else if(element.id=="mobileNumber")
    {
        i=15;
        label="Mobile Number"
    }else if(element.id=="altMobileNumber")
    {
        i=15;
        label="Alternative Mobile Number"
    }else if(element.id=="email")
    {
        i=100;
        label="Email"
    }else if(element.id=="otherCollegeName")
    {
        i=100;
        label="College Name"
    }else if(element.id=="leaderName")
    {
        i=60;
        label="Leader Name"
    }else if(element.id=="leaderEmail")
    {
        i=100;
        label="Leader Email"
    }else if(element.id=="leaderPhoneNumber")
    {
        i=15;
        label="Leader Phone Number"
    }else if(element.id=="teamMemberNames")
    {
        i=500;
        label="Team Member Names"
    }else if(element.id=="auditionLink")
    {
        i=2000;
        label="Audition Link"
    }else if(element.id=="comments")
    {
        i=500;
        label="Comments"
    }
    
    
    else if(element.id=="street")
    {
        i=100;
        label="Street"
    }else if(element.id=="postalCode")
    {
        i=10;
        label="Postal Code"
    }
    
    
    
    
    
    if(element.value.replace(/^\s+|\s+$/g,"").length>i) {
        str=new String(element.value);
        element.value=str.substring(0,i);
        // showAlertModal("The "+element.id+" length must be less than "+i+" characters");
        // document.getElementById("alertMessage").innerHTML="The "+element.id+" length must be less than "+i+" characters";
       // displayAlertMessage("The "+label+" length must be less than "+i+" characters");
        //alert("The "+element.id+" length must be less than "+i+" characters");
       // element.focus();
        if(element.id=="firstName")
        {
        	document.getElementById("firstNameErr").innerHTML = "The "+label+" length must be less than "+i+" characters";
    		document.getElementById("firstNameErr").style.display = "block";
    		$("#firstName").focus();
          
        }else if(element.id=="lastName")
        {
        	document.getElementById("lastNameErr").innerHTML = "The "+label+" length must be less than "+i+" characters";
    		document.getElementById("lastNameErr").style.display = "block";
    		//$("#lastName").focus();
        }else if(element.id=="mobileNumber")
        {
        	document.getElementById("mobileNumberErr").innerHTML = "The "+label+" length must be less than "+i+" characters";
    		document.getElementById("mobileNumberErr").style.display = "block";
    		$("#mobileNumber").focus();
           
        }else if(element.id=="altMobileNumber")
        {
        	document.getElementById("altMobileNumberErr").innerHTML = "The "+label+" length must be less than "+i+" characters";
    		document.getElementById("altMobileNumberErr").style.display = "block";
    		$("#altMobileNumber").focus();
        }else if(element.id=="email")
        {
        	document.getElementById("emailErr").innerHTML = "The "+label+" length must be less than "+i+" characters";
    		document.getElementById("emailErr").style.display = "block";
    		$("#email").focus();
           
        }else if(element.id=="otherCollegeName")
        {
        	document.getElementById("otherCollegeNameErr").innerHTML = "The "+label+" length must be less than "+i+" characters";
    		document.getElementById("otherCollegeNameErr").style.display = "block";
    		$("#otherCollegeName").focus();
           
        }else if(element.id=="leaderName")
        {
        	document.getElementById("leaderNameErr").innerHTML = "The "+label+" length must be less than "+i+" characters";
    		document.getElementById("leaderNameErr").style.display = "block";
    		$("#leaderName").focus();
           
        }else if(element.id=="leaderEmail")
        {
        	document.getElementById("leaderEmailErr").innerHTML = "The "+label+" length must be less than "+i+" characters";
    		document.getElementById("leaderEmailErr").style.display = "block";
    		$("#leaderEmail").focus();
           
        }else if(element.id=="leaderPhoneNumber")
        {
        	document.getElementById("leaderPhoneNumberErr").innerHTML = "The "+label+" length must be less than "+i+" characters";
    		document.getElementById("leaderPhoneNumberErr").style.display = "block";
    		$("#leaderPhoneNumber").focus();
           
        }else if(element.id=="teamMemberNames")
        {
        	document.getElementById("teamMemberNamesErr").innerHTML = "The "+label+" length must be less than "+i+" characters";
    		document.getElementById("teamMemberNamesErr").style.display = "block";
    		$("#teamMemberNames").focus();
           
        }else if(element.id=="auditionLink")
        {
        	document.getElementById("auditionLinkErr").innerHTML = "The "+label+" length must be less than "+i+" characters";
    		document.getElementById("auditionLinkErr").style.display = "block";
    		$("#auditionLink").focus();
           
        }else if(element.id=="comments")
        {
        	document.getElementById("commentsErr").innerHTML = "The "+label+" length must be less than "+i+" characters";
    		document.getElementById("commentsErr").style.display = "block";
    		$("#comments").focus();
           
        }
        
        
        
        else if(element.id=="street")
        {
        	document.getElementById("streetErr").innerHTML = "The "+label+" length must be less than "+i+" characters";
    		document.getElementById("streetErr").style.display = "block";
    		$("#street").focus();
           
        }else if(element.id=="postalCode")
        {
        	document.getElementById("postalCodeErr").innerHTML = "The "+label+" length must be less than "+i+" characters";
    		document.getElementById("postalCodeErr").style.display = "block";
    		$("#postalCode").focus();
           
        }
        
        element.focus();
        return false;
    }


 
        
  
    return true;
        
        
}



function checkActivitiesDetails(optType){
	closeAlertMessage();
	hideAllErrMessages();
	if(optType=='P'){
		showbasicDetailsFieldSet();
	}
	
		else {
			var competitionName = $("#competitionName").val().trim();
			var competitionType = $("#competitionType").val().trim();
			var leaderName = $("#leaderName").val().trim();
			var leaderEmail = $("#leaderEmail").val().trim();
			var leaderPhoneNumber = $("#leaderPhoneNumber").val().trim();
			var teamSize = $("#teamSize").val().trim();
			var teamMemberNames = $("#teamMemberNames").val().trim();
			var auditionLink = $("#auditionLink").val().trim();
			var comments = $("#comments").val().trim();
			
			if(competitionName.length==0){
				
				//displayAlertMessage("Please select Technology Area!");
				document.getElementById("competitionNameErr").innerHTML = "Please select Performance!";
				document.getElementById("competitionNameErr").style.display = "block";
				$("#competitionName").focus();
				
			}else if(competitionType.length==0){
				//displayAlertMessage("Please select Use Case Area!");
				document.getElementById("competitionTypeErr").innerHTML = "Please select Type of Performance!";
				document.getElementById("competitionTypeErr").style.display = "block";
				$("#competitionType").focus();
				
			}else if(leaderName.length==0&&competitionType=="Group"){
				//displayAlertMessage("Please select Name1!");
				document.getElementById("leaderNameErr").innerHTML = "Please enter Leader Name!";
				document.getElementById("leaderNameErr").style.display = "block";
				$("#leaderName").focus();
				
			}else if(leaderEmail.length==0&&competitionType=="Group"){
				//displayAlertMessage("Please select Name1!");
				document.getElementById("leaderEmailErr").innerHTML = "Please enter Leader Email!";
				document.getElementById("leaderEmailErr").style.display = "block";
				$("#leaderEmail").focus();
				
			}else if(leaderPhoneNumber.length==0&&competitionType=="Group"){
				//displayAlertMessage("Please select Name1!");
				document.getElementById("leaderPhoneNumberErr").innerHTML = "Please enter Leader Phone Number!";
				document.getElementById("leaderPhoneNumberErr").style.display = "block";
				$("#leaderPhoneNumber").focus();
				
			}else if(teamSize.length==0&&competitionType=="Group"){
				//displayAlertMessage("Please select Name1!");
				document.getElementById("teamSizeErr").innerHTML = "Please enter Team Size!";
				document.getElementById("teamSizeErr").style.display = "block";
				$("#teamSize").focus();
				
			}else if(teamMemberNames.length==0&&competitionType=="Group"){
				//displayAlertMessage("Please select Name1!");
				document.getElementById("teamMemberNamesErr").innerHTML = "Please enter Team Member Names!";
				document.getElementById("teamMemberNamesErr").style.display = "block";
				$("#teamMemberNames").focus();
				
			}else if(auditionLink.length==0){
				//displayAlertMessage("Please select Name1!");
				document.getElementById("auditionLinkErr").innerHTML = "Please enter Audition Link!";
				document.getElementById("auditionLinkErr").style.display = "block";
				$("#auditionLink").focus();
				
			}else if(comments.length==0){
				//displayAlertMessage("Please select Name1!");
				document.getElementById("commentsErr").innerHTML = "Please enter Comments!";
				document.getElementById("commentsErr").style.display = "block";
				$("#comments").focus();
				
			}
			else{
			
			showAddressDetailsFieldSet();
			}
		}
		
		}





function checkAddressDetailsOfCulReg() {
	
	closeAlertMessage();
	hideAllErrMessages();
	
	var street = $("#street").val();
	var state = $("#state").val();
	var district = $("#district").val();
	var postalCode = $("#postalCode").val();
	var captcha_code = $("#captcha_code").val();
	
	
	if(street.length==0){
		//displayAlertMessage("Please enter street details!");
		document.getElementById("streetErr").innerHTML = "Please enter Street!";
		document.getElementById("streetErr").style.display = "block";
		$("#street").focus();
		return false;
	}else if(state.length==0){
		//displayAlertMessage("Please select State!");
		document.getElementById("stateErr").innerHTML = "Please select State name!";
		document.getElementById("stateErr").style.display = "block";
		$("#state").focus();
		return false;
	}else if(district.length==0){
		//displayAlertMessage("Please select District!");
		document.getElementById("districtErr").innerHTML = "Please select district name!";
		document.getElementById("districtErr").style.display = "block";
		$("#district").focus();
		return false;
	}else if(postalCode.length==0){
		//displayAlertMessage("Please enter Postal Code!");
		document.getElementById("postalCodeErr").innerHTML = "Please enter Postal Code!";
		document.getElementById("postalCodeErr").style.display = "block";
		$("#postalCode").focus();
		return false;
	}else if(captcha_code.length==0){
		//displayAlertMessage("Please enter Captcha Code!");
		document.getElementById("captcha_codeErr").innerHTML = "Please enter Captcha!";
		document.getElementById("captcha_codeErr").style.display = "block";
		$("#captcha_code").focus();
		return false;
	}else {
		
		$("#btnCulturalSubmit").button('loading');
		$("#addressPreviousBtn").attr("disabled", true);
		
		return true;
	}
	
	

	
	
}




function formatPhone(element){
	  str=new String(element.value);
	  element.value=str.replace(/[A-Za-z\(\)\.\-\x\s,]/g,"");
	  num=element.value;
	  var _return;
	  if(num.length==10){
	      _return="(";
	      var ini=num.substring(0,3);
	      _return+=ini+")";
	      var st=num.substring(3,6);
	      _return+="-"+st+"-";
	      var end=num.substring(6,10);
	      _return+=end;
	      element.value="";
	      element.value=_return;
	  }else{
	      if(num.length>10){//alert("Phone Number should be 10 characters");
	    	  //displayAlertMessage("Phone Number should be 10 characters");
	    	  if(element.id=="mobileNumber"){
	    	  document.getElementById("mobileNumberErr").innerHTML = "Mobile Number should be 10 digits";
	  		  document.getElementById("mobileNumberErr").style.display = "block";
	  		$("#mobileNumber").focus();
	    	  }
	    	  if(element.id=="altMobileNumber"){  
	        	  document.getElementById("altMobileNumberErr").innerHTML = "Alternate Mobile Number should be 10 digits";
	      		  document.getElementById("altMobileNumberErr").style.display = "block";
	      		  $("#altMobileNumber").focus();
	        	  }
	    	  
	    	  if(element.id=="leaderPhoneNumber"){  
        	  document.getElementById("leaderPhoneNumberErr").innerHTML = "Contact Number should be 10 digits";
      		  document.getElementById("leaderPhoneNumberErr").style.display = "block";
      		  $("#leaderPhoneNumber").focus();
        	  }
    	  
	          element.value="";
	          element.focus();
	          return false;
	      }else{
	          if(num.length<10){//alert("Please give atleast  10 charcters in PhoneNumber");
	       
	        	  //displayAlertMessage("Please give atleast  10 charcters in PhoneNumber");
	        	  if(element.id=="mobileNumber"){
	            	  document.getElementById("mobileNumberErr").innerHTML = "Mobile Number should be 10 digits";
	          		  document.getElementById("mobileNumberErr").style.display = "block";
	          		  $("#mobileNumber").focus();
	            	  }
	        	  if(element.id=="altMobileNumber"){  
	            	  document.getElementById("altMobileNumberErr").innerHTML = "Alternate Mobile Number should be 10 digits";
	          		  document.getElementById("altMobileNumberErr").style.display = "block";
	          		  $("#altMobileNumber").focus();
	            	  }
	        	  
	        	  if(element.id=="leaderPhoneNumber"){  
	            	  document.getElementById("leaderPhoneNumberErr").innerHTML = "Leader Phone Number should be 10 digits";
	          		  document.getElementById("leaderPhoneNumberErr").style.display = "block";
	          		  $("#leaderPhoneNumber").focus();
	            	  }
	        	  
	        	  
	              element.value="";
	              return false;
	          }
	      }
	  }
	return _return;
	}



function validatenumber(xxxxx){
    var maintainplus="";
    var numval=xxxxx.value;
    if(numval.charAt(0)=="+"){
        var maintainplus="+";
    }
    curnumbervar=numval.replace(/[\\A-Za-z!"?$%^&*+_={};:'@#~,?\/<>?|`?\]\[]/g,"");
    xxxxx.value=maintainplus+curnumbervar;
    var maintainplus="";
    xxxxx.focus;
}
function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
} 
function checkEmail(element){
	var emaill=element.value;
	var emailLength=emaill.length;
	//alert("emaill-->"+emaill);
	//alert("length-->"+emailLength);
	if(emailLength>100){
		element.value="";
		//displayAlertMessage("Email id length should be less than 100 characters");
		//alert("Invalid E-mail Address! Please re-enter.");
		if(element.id=="email"){
			//alert("email-->");
		document.getElementById("emailErr").innerHTML = "Email id length should be less than 100 characters";
		document.getElementById("emailErr").style.display = "block";
		$("#email").focus();
		}
		 if(element.id=="leaderEmail"){
			 //alet("teamCandidateEmailId1");
			document.getElementById("leaderEmailErr").innerHTML = "Leader Email id length should be less than 100 characters";
			document.getElementById("leaderEmailErr").style.display = "block";
			$("#leaderEmail").focus();
			
		} 
		
	}
	
if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(element.value)){return(true);
}element.value="";
//displayAlertMessage("Invalid E-mail Address! Please re-enter.");
if(element.id=="email"){
	
	document.getElementById("emailErr").innerHTML = "Invalid E-mail Address! Please re-enter.";
	document.getElementById("emailErr").style.display = "block";
	$("#email").focus();
	//return(false);
	}
 if(element.id=="leaderEmail"){
		
		document.getElementById("leaderEmailErr").innerHTML = "Invalid E-mail Address! Please re-enter.";
		document.getElementById("leaderEmailErr").style.display = "block";
		$("#leaderEmail").focus();
		//return(false);
		
	}


}



function isUrl(obj) {
    
    var  url_validate = /(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/;
    var tempUrl=obj.value.trim();
    if(tempUrl.length==0){
        //document.getElementById('resultMessage').innerHTML = "<font color=red>Please enter the Registration URL</font>";
    	document.getElementById("auditionLinkErr").innerHTML = "Please enter the audition url";
		document.getElementById("auditionLinkErr").style.display = "block";
		$("#auditionLink").focus();
        obj.value = '';
    // alert('error');
    }else if(!(url_validate.test(obj.value) && tempUrl.length>0)){
       // document.getElementById('resultMessage').innerHTML = "<font color=red>Invalid Url</font>";
    	document.getElementById("auditionLinkErr").innerHTML = "Please enter valid Url";
		document.getElementById("auditionLinkErr").style.display = "block";
		$("#auditionLink").focus();
        obj.value = '';
    // alert('error');
    }

}


function checkCompetitionType(obj){
	$("#leaderName").val("");
	$("#leaderEmail").val("");
	$("#leaderPhoneNumber").val("");
	$("#teamSize").val("");
	$("#teamMemberNames").val("");
	
	if(obj.value=="Group"){
		
		$("#leaderNameDiv").show();
		$("#leaderEmailDiv").show();
		$("#leaderPhoneNumberDiv").show();
		$("#teamSizeDivDiv").show();
		$("#teammemberNamesDiv").show();
	}else {
		
		$("#leaderNameDiv").hide();
		$("#leaderEmailDiv").hide();
		$("#leaderPhoneNumberDiv").hide();
		$("#teamSizeDivDiv").hide();
		$("#teammemberNamesDiv").hide();
		
		
	}
}
