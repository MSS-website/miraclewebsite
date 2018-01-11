/**
 * Author : Santosh Kola Date : 11/14/2017 Description : Included all
 * validations related to tech talks registration
 */



function closeAlertMessage() {

	$("#alertMessageDiv").hide();
	$("#alertMessageSpan").html("");

}

function displayAlertMessage(alertMessage) {
	$("#alertMessageDiv").show();
	$("#alertMessageSpan").html(alertMessage);
}





function checkBasicDetails() {
	closeAlertMessage();
	hideAllErrMessages();
	var firstName = $("#firstName").val().trim();
	var lastName = $("#lastName").val().trim();
	var mobileNumber = $("#mobileNumber").val().trim();
	var altMobileNumber = $("#altMobileNumber").val().trim();
	var email = $("#email").val().trim();
	var designation = $("#designation").val().trim();
	var attendeeType = $("#attendeeType").val().trim();
	
	var collegeName = $("#collegeName").val().trim();
	
	var otherCollegeName = $("#otherCollegeName").val().trim();
	
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
		document.getElementById("firstNameErr").innerHTML = "Please enter first name!";
		document.getElementById("firstNameErr").style.display = "block";
		//documnet.getElementById("firstName").focus();
		$("#firstName").focus();
		
		//displayAlertMessage("Please enter first name!");
	}else if(lastName.length==0){
		 document.getElementById("lastNameErr").innerHTML = "Please enter last name!";
		 document.getElementById("lastNameErr").style.display = "block";
		 $("#lastName").focus();
		//displayAlertMessage("Please enter last name!");
	}else if(mobileNumber.length==0){
		document.getElementById("mobileNumberErr").innerHTML = "Please enter Mobile Number!";
		document.getElementById("mobileNumberErr").style.display = "block";
		$("#mobileNumber").focus();
		//displayAlertMessage("Please enter mobile number!");
	}else if(altMobileNumber.length==0){
		document.getElementById("altMobileNumberErr").innerHTML = "Please enter Alternate Mobile Number!";
		document.getElementById("altMobileNumberErr").style.display = "block";
		$("#altMobileNumber").focus();
		//displayAlertMessage("Please enter Alternative Mobile Number!");
	}else if(email.length==0){
		document.getElementById("emailErr").innerHTML = "Please enter email !";
		document.getElementById("emailErr").style.display = "block";
		$("#email").focus();
		//displayAlertMessage("Please enter Email Address!");
	}else if(!isGenderSelected){
		document.getElementById("genderErr").innerHTML = "Please select gender !";
		document.getElementById("genderErr").style.display = "block";
		//$("input.gender").focus();
		//document.forms["msform"].elements["gender"].focus();
		//document.msform.gender.focus(); 
		//displayAlertMessage("Please enter Email Address!");
	}else if(designation.length==0){
		
		document.getElementById("designationErr").innerHTML = "Please enter designation !";
		document.getElementById("designationErr").style.display = "block";
		$("#designation").focus();
		//displayAlertMessage("Please enter Designation!");
	}else if(attendeeType.length==0){
		document.getElementById("attendeeTypeErr").innerHTML = "Please enter attendee Type !";
		document.getElementById("attendeeTypeErr").style.display = "block";
		$("#attendeeType").focus();
		//displayAlertMessage("Please select Attendee type!");
	}else if(attendeeType=="Student"&&collegeName.length==0){
		document.getElementById("collegeNameErr").innerHTML = "Please select college name !";
		document.getElementById("collegeNameErr").style.display = "block";
		$("#collegeName").focus();
		//displayAlertMessage("Please select Attendee type!");
	}else if(collegeName=="Other"&&otherCollegeName.length==0){
		document.getElementById("otherCollegeNameErr").innerHTML = "Please enter college name !";
		document.getElementById("otherCollegeNameErr").style.display = "block";
		$("#otherCollegeName").focus();
		//displayAlertMessage("Please select Attendee type!");
	}
	
	
	else{
		showAcadamicDetailsFieldSet();
	}

/*
	
	if(firstName.length==0){
		displayAlertMessage("Please enter first name!");
	}else if(lastName.length==0){
		displayAlertMessage("Please enter last name!");
	}else if(mobileNumber.length==0){
		displayAlertMessage("Please enter mobile number!");
	}else if(altMobileNumber.length==0){
		displayAlertMessage("Please enter Alternative Mobile Number!");
	}else if(email.length==0){
		displayAlertMessage("Please enter Email Address!");
	}else if(designation.length==0){
		displayAlertMessage("Please enter Designation!");
	}else if(attendeeType.length==0){
		displayAlertMessage("Please select Attendee type!");
	}else{
		showAcadamicDetailsFieldSet();
	}
	*/
}



function checkAcadamicDetails() {
	closeAlertMessage();
	hideAllErrMessages();
	var primaryIntrest = $("#primaryIntrest").val().trim();
	var secondaryIntrest = $("#secondaryIntrest").val().trim();
	var comments = $("#comments").val().trim();
	
	if(primaryIntrest.length==0){
		//displayAlertMessage("Please select Primary Intrest!");
		
		document.getElementById("primaryIntrestErr").innerHTML = "Please select Primary intrest!";
		document.getElementById("primaryIntrestErr").style.display = "block";
		$("#primaryIntrest").focus();
		
	}else if(secondaryIntrest.length==0){
		//displayAlertMessage("Please select Secondary Intrest!");
		
		document.getElementById("secondaryIntrestErr").innerHTML = "Please select  secondary intrest!";
		document.getElementById("secondaryIntrestErr").style.display = "block";
		$("#secondaryIntrest").focus();
		
	}else if(comments.length==0){
		//displayAlertMessage("Please enter Comments!");
		document.getElementById("commentsErr").innerHTML = "Please enter comments!";
		document.getElementById("commentsErr").style.display = "block";
		$("#comments").focus();
		
	}else{
		showAddressDetailsFieldSet();
	}
	/*
	if(primaryIntrest.length==0){
		displayAlertMessage("Please select Primary Intrest!");
	}else if(secondaryIntrest.length==0){
		displayAlertMessage("Please select Secondary Intrest!");
	}else if(comments.length==0){
		displayAlertMessage("Please enter Comments!");
	}else{
		showAddressDetailsFieldSet();
	}*/
	
}

function checkAddressDetails() {
	closeAlertMessage();
	hideAllErrMessages();
	var street = $("#street").val().trim();
	var country = $("#country").val().trim();
	var state = $("#state").val().trim();
	var district = $("#district").val().trim();
	var postalCode = $("#postalCode").val().trim();
	var captcha_code = $("#captcha_code").val().trim();
	
	
	if(street.length==0){
		//displayAlertMessage("Please enter Street!");
		document.getElementById("streetErr").innerHTML = "Please enter Street!";
		document.getElementById("streetErr").style.display = "block";
		$("#street").focus();
		return false;
	}else if(country.length==0){
		//displayAlertMessage("Please select Country!");
		document.getElementById("countryErr").innerHTML = "Please select Country!";
		document.getElementById("countryErr").style.display = "block";
		$("#country").focus();
		return false;
	}else if(state.length==0){
		//displayAlertMessage("Please select State!");
		document.getElementById("stateErr").innerHTML = "Please enter sate name!";
		document.getElementById("stateErr").style.display = "block";
		$("#state").focus();
		return false;
	}else if(district.length==0){
		//displayAlertMessage("Please select district!");
		document.getElementById("districtErr").innerHTML = "Please enter district name!";
		document.getElementById("districtErr").style.display = "block";
		$("#district").focus();
		return false;
	}else if(postalCode.length==0){
		//displayAlertMessage("Please enter postalCode!");
		document.getElementById("postalCodeErr").innerHTML = "Please enter postalCode!";
		document.getElementById("postalCodeErr").style.display = "block";
		$("#postalCode").focus();
		return false;
	}else if(captcha_code.length==0){
		//displayAlertMessage("Please enter Captcha!");
		document.getElementById("captcha_codeErr").innerHTML = "Please enter Captcha!";
		document.getElementById("captcha_codeErr").style.display = "block";
		$("#captcha_code").focus();
		return false;
	}else{
		$("#btnTechTalkSubmit").button('loading');
		$("#addressPreviousBtn").attr("disabled", true);
		
		return true;
	}
	
	/*if(street.length==0){
		displayAlertMessage("Please enter Street!");
		return false;
	}else if(country.length==0){
		displayAlertMessage("Please select Country!");
		return false;
	}else if(state.length==0){
		displayAlertMessage("Please select State!");
		return false;
	}else if(district.length==0){
		displayAlertMessage("Please select district!");
		return false;
	}else if(postalCode.length==0){
		displayAlertMessage("Please enter postalCode!");
		return false;
	}else if(captcha_code.length==0){
		displayAlertMessage("Please enter Captcha!");
		return false;
	}else{
		$("#btnTechTalkSubmit").button('loading');
		$("#addressPreviousBtn").attr("disabled", true);
		
		return true;
	}
	*/
}

function techTalksFieldLengthValidator(element) {
	
	closeAlertMessage();
    var i=0;
    var label="";
    
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
        label="Alternate Mobile Number"
    }else if(element.id=="email")
    {
        i=100;
        label="Email Address"
    }else if(element.id=="designation")
    {
        i=30;
        label="Designation"
    }else if(element.id=="attendeeType")
    {
        i=5;
        label="Attendee Type"
    }else if(element.id=="technologyArea")
    {
        i=15;
        label="Primary Interest "
    }else if(element.id=="useCaseArea")
    {
        i=15;
        label="Secondary Interest"
    }else if(element.id=="comments")
    {
        i=500;
        label="Comments"
    }else if(element.id=="street")
    {
        i=100;
        label="Street"
    }else if(element.id=="country")
    {
        i=10;
        label="Country"
    }else if(element.id=="state")
    {
        i=60;
        label="State"
    }else if(element.id=="district")
    {
        i=60;
        label="District"
    }else if(element.id=="postalCode")
    {
        i=10;
        label="Postal Code"
    }
    else if(element.id=="otherCollegeName")
    {
        i=100;
        label="Other College Name"
    }
    
    
    if(element.value.replace(/^\s+|\s+$/g,"").length>i) {
        str=new String(element.value);
        element.value=str.substring(0,i);
        
    if(element.id=="firstName")
    {
    	document.getElementById("firstNameErr").innerHTML = "The FirstName length must be less than "+i+" characters";
		document.getElementById("firstNameErr").style.display = "block";
		$("#firstName").focus();
      
    }else if(element.id=="lastName")
    {
    	document.getElementById("lastNameErr").innerHTML = "The LastName length must be less than "+i+" characters";
		document.getElementById("lastNameErr").style.display = "block";
		//$("#lastName").focus();
    }else if(element.id=="mobileNumber")
    {
    	document.getElementById("mobileNumberErr").innerHTML = "The Mobile Number length must be less than "+i+" characters";
		document.getElementById("mobileNumberErr").style.display = "block";
		$("#mobileNumber").focus();
       
    }else if(element.id=="altMobileNumber")
    {
    	document.getElementById("altMobileNumberErr").innerHTML = "The Alternate Number length must be less than "+i+" characters";
		document.getElementById("altMobileNumberErr").style.display = "block";
		$("#altMobileNumber").focus();
    }else if(element.id=="email")
    {
    	document.getElementById("emailErr").innerHTML = "The Email Id length must be less than "+i+" characters";
		document.getElementById("emailErr").style.display = "block";
		$("#email").focus();
       
    }else if(element.id=="designation")
    {
    	document.getElementById("designationErr").innerHTML = "The designation length must be less than "+i+" characters";
		document.getElementById("designationErr").style.display = "block";
		$("#designation").focus();
       
    }else if(element.id=="attendeeType")
    {
    	document.getElementById("attendeeTypeErr").innerHTML = "The AttendeeType length must be less than "+i+" characters";
		document.getElementById("attendeeTypeErr").style.display = "block";
		$("#attendeeType").focus();
       
    }else if(element.id=="technologyArea")
    {
    	document.getElementById("primaryIntrestErr").innerHTML = "The PrimaryIntrest length must be less than "+i+" characters";
		document.getElementById("primaryIntrestErr").style.display = "block";
		$("#primaryIntrest").focus();
        
    }else if(element.id=="useCaseArea")
    {
    	document.getElementById("secondaryIntrestErr").innerHTML = "The SecondaryIntrest length must be less than "+i+" characters";
		document.getElementById("secondaryIntrestErr").style.display = "block";
		$("#secondaryIntrest").focus();
    }else if(element.id=="comments")
    {
    	document.getElementById("commentsErr").innerHTML = "The Comments length must be less than "+i+" characters";
		document.getElementById("commentsErr").style.display = "block";
		$("#comments").focus();
    }else if(element.id=="street")
    {
    	document.getElementById("streetErr").innerHTML = "The Street length must be less than "+i+" characters";
		document.getElementById("streetErr").style.display = "block";
		$("#street").focus();
    }else if(element.id=="state")
    {
    	document.getElementById("stateErr").innerHTML = "The State length must be less than "+i+" characters";
		document.getElementById("stateErr").style.display = "block";
		$("#state").focus();
    }else if(element.id=="district")
    {
    	document.getElementById("districtErr").innerHTML = "The District length must be less than "+i+" characters";
		document.getElementById("districtErr").style.display = "block";
		$("#district").focus();
    }else if(element.id=="postalCode")
    {
    	document.getElementById("postalCodeErr").innerHTML = "The PostalCode length must be less than "+i+" characters";
		document.getElementById("postalCodeErr").style.display = "block";
		$("#postalCode").focus();
    }else if(element.id=="otherCollegeName")
    {
    	document.getElementById("otherCollegeNameErr").innerHTML = "The Other College Name length must be less than "+i+" characters";
		document.getElementById("otherCollegeNameErr").style.display = "block";
		$("#otherCollegeName").focus();
    }
    element.focus();
    return false;
}
return true;
    

        
}



//phone number validation starts
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
	          element.value=_return;
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
	        	  
	              element.value="";
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
    
/*
function checkEmail(element){
	var emaill=element.value;
	var emailLength=emaill.length;
	//alert("emaill-->"+emaill);
	//alert("length-->"+emailLength);
	if(emailLength>100){
		displayAlertMessage("Email id length should be less than 100 characters");
		//alert("Invalid E-mail Address! Please re-enter.");
		return(false);	
	}
	
if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(element.value)){return(true);
}element.value="";
displayAlertMessage("Invalid E-mail Address! Please re-enter.");
//alert("Invalid E-mail Address! Please re-enter.");
return(false);
}


*/


function checkEmail(element){
	var emaill=element.value;
	var emailLength=emaill.length;
	//alert("emaill-->"+emaill);
	//alert("length-->"+emailLength);
	if(emailLength>100){
		element.value="";
		//displayAlertMessage("Email id length should be less than 100 characters");
		//alert("Invalid E-mail Address! Please re-enter.");
		document.getElementById("emailErr").innerHTML = "Email id length should be less than 100 characters";
		document.getElementById("emailErr").style.display = "block";
		$("#email").focus();
		
		return(false);	
	}
	
if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(element.value)){return(true);
}element.value="";
//displayAlertMessage("Invalid E-mail Address! Please re-enter!");
document.getElementById("emailErr").innerHTML = "Invalid E-mail Address! Please re-enter!";
document.getElementById("emailErr").style.display = "block";
$("#email").focus();

//alert("Invalid E-mail Address! Please re-enter.");
return(false);
}








function checkIntrestes(obj){
	closeAlertMessage();
	if(obj.value!=""){
		if(obj.id=="primaryIntrest"){
			if(obj.value==$("#secondaryIntrest").val()){
				
				
				displayAlertMessage("Primary intrest and secondary intrest should be different!");
				document.getElementById("primaryIntrestErr").innerHTML = "Primary intrest and secondary intrest should be different!";
				document.getElementById("primaryIntrestErr").style.display = "block";
				obj.value="";
				$("#primaryIntrest").focus();
				
				//return false;
			}
		}
		if(obj.id=="secondaryIntrest"){
			if(obj.value==$("#primaryIntrest").val()){
				
				displayAlertMessage("Primary intrest and secondary intrest should be different!");
				document.getElementById("secondaryIntrestErr").innerHTML = "Primary intrest and secondary intrest should be different!";
				document.getElementById("secondaryIntrestErr").style.display = "block";
				obj.value="";
				$("#secondaryIntrest").focus();
				//return false;
			}
		}
		//return true;
	}
	
	
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
	   
	   //genderErr
	   
	   $("#designation").click(function() {
	       $("#designationErr").hide();
	   });
	   
	   $("#attendeeType").click(function() {
	       $("#attendeeTypeErr").hide();
	   });
	   
	   $("#collegeName").click(function() {
	       $("#attendeeTypeErr").hide();
	   });
	   $("#otherCollegeName").click(function() {
	       $("#attendeeTypeErr").hide();
	   });
	   
	   $("#primaryIntrest").click(function() {
	       $("#primaryIntrestErr").hide();
	   });
	   
	   $("#secondaryIntrest").click(function() {
	       $("#secondaryIntrestErr").hide();
	   });
	   
	   $("#comments").click(function() {
	       $("#commentsErr").hide();
	   });
	   
	   $("#street").click(function() {
	       $("#streetErr").hide();
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


function hideAllErrMessages(){

	  
	        $("#firstNameErr").hide();
	        
	   
	       $("#lastNameErr").hide();
	  
	       $("#mobileNumberErr").hide();
	       
	       
	  
	       $("#altMobileNumberErr").hide();
	  
	       $("#emailErr").hide();
	       $("#genderErr").hide();
	       $("#designationErr").hide();
	  
	       $("#attendeeTypeErr").hide();
	       $("#collegeNameErr").hide();
	       $("#otherCollegeNameErr").hide();
	       
	  
	       $("#primaryIntrestErr").hide();
	 
	       $("#secondaryIntrestErr").hide();
	   
	       $("#commentsErr").hide();
	  
	       $("#streetErr").hide();
	  
	       $("#stateErr").hide();
	  
	       $("#districtErr").hide();
	  
	       $("#postalCodeErr").hide();
	  
	       $("#captcha_codeErr").hide();
	  
	   
	   
}


