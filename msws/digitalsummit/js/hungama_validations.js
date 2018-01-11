function fieldLengthValidator(element) {
	
	closeErrorMsg();
    var i=0;
    var label="";
    //New Change middlename
    /// alert("hai");
    if(element.id=="partnerName")
    {
        i=60;
        label="Partner name"
    }else if(element.id=="organizationName")
    {
        i=100;
        label="Organization"
    }else if(element.id=='designation')
    {
        i=60;
        label="Designation"
    } else if(element.id=='email')
{
        i=100;
        label="email"
    }  else if(element.id=="contactName")
    {
        i=60;
        label="Contact Name"
    } else if(element.id=='subject')
{
        i=100;
        label="subject"
    } else if(element.id=='institute')
{
        i=50;
        label="Institute"
    } else if(element.id=='reasonTobePartner')
   {
        i=500;
        label="Reason"
    }   
    else if(element.id=='message')
    {
         i=500;
         label="Message"
     }else if(element.id=="firstname")
     {
         i=60;
         label="First Name"
     } else if(element.id=="lastname")
     {
         i=60;
         label="Last Name"
     }   else if(element.id=="email")
     {
         i=100;
         label="E-mail"
     }   else if(element.id=="phonenumber")
     {
         i=15;
         label="Phone Number"
     } else if(element.id=="altphonenumber")
     {
         i=15;
         label="Alternative Phone Number"
     }  else if(element.id=="leadername")
     {
         i=100;
         label="Leader Name"
     }  else if(element.id=="leaderemail")
     {
         i=100;
         label="Leader Email"
     } else if(element.id=="leaderPhoneNumber")
     {
         i=15;
         label="Leader Phone Number"
     }  else if(element.id=="performanceCommnets")
     {
         i=1000;
         label="Record and Upload a sample performance to be selected for Hungama@DS â€˜17"
     }  else if(element.id=="teamMemberNames")
     {
         i=200;
         label="Team Member Names"
     }  else if(element.id=="optCommnets")
     {
         i=500;
         label="Comments"
     }  else if(element.id=="street")
     {
         i=100;
         label="Street"
     }   else if(element.id=="postalCode")
     {
         i=10;
         label="Postal Code"
     }  
    if(element.value.replace(/^\s+|\s+$/g,"").length>i) {
        str=new String(element.value);
        element.value=str.substring(0,i);
        // showAlertModal("The "+element.id+" length must be less than "+i+" characters");
        // document.getElementById("alertMessage").innerHTML="The "+element.id+" length must be less than "+i+" characters";
        displayErrorMessage("The "+label+" length must be less than "+i+" characters");
        //alert("The "+element.id+" length must be less than "+i+" characters");
        element.focus();
        return false;
    }
    return true;
        
        
}
    
function displayErrorMessage(message){
    $("#errorMessage").html(message);
    $("#errorMsgDiv").show();
    
    //document.getElementById("DsRow").style.display='block';
}
function closeErrorMsg() {
    $("#errorMessage").html("");
    $("#errorMsgDiv").hide();
  //  document.getElementById("DsRow").style.display='none';
}



//Email Validation

/*function checkEmail(element){if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(element.value)){return(true);
}element.value="";
//showAlertModal("Invalid E-mail Address! Please re-enter.");
//alert("Invalid E-mail Address! Please re-enter.");
displayErrorMessage("Invalid E-mail Address! Please re-enter");

return(false);
}*/

function checkEmail(element){
	//alert("hello.....");
	var email=element.value;
	//alert("emailLength-->"+email.length);
	//alert("length-->"+email.length);
	if(email.length>100){
		displayErrorMessage("The email length should be less than 100 characters.");
		element.value="";
        return(false);
	}
		if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(element.value)){return(true);
}element.value="";
//showAlertModal("Invalid E-mail Address! Please re-enter.");
//alert("Invalid E-mail Address! Please re-enter.");
displayErrorMessage("Invalid E-mail Address! Please re-enter");

return(false);
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
        	displayErrorMessage("Phone Number should be 10 characters");
            element.value=_return;
            element.value="";
            element.focus();
            return false;
        }else{
            if(num.length<10){//alert("Please give atleast  10 charcters in PhoneNumber");
         
            	displayErrorMessage("Please give atleast  10 charcters in PhoneNumber");
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


function checkPersonalInfo(){
	closeErrorMsg();
	 if($("#firstname").val().trim().length>0){
		 if($("#lastname").val().trim().length>0){
			 if($("#email").val().trim().length>0){
				 if($("#phonenumber").val().trim().length>0){
					 if($("#altphonenumber").val().trim().length>0){
						 if($("#frmCollege").val()!="-1"){
							 alert("ddd====="+$("#frmCollege").val());
							 showAcadamicDetailsFieldSet();							 
						 }else{
							 alert("ddd====="+$("#frmCollege").val())
							 displayErrorMessage("Please Select your College");
							 return false;
						 } 
						 
					 }else{
						 displayErrorMessage("Please Enter Alternative Phone Number");
						 return false;
					 } 
					 
				 }else{
					 displayErrorMessage("Please Enter Phone Number");
					 return false;
				 } 
				 
			 }else{
				 displayErrorMessage("Please Enter Email");
				 return false;
			 }
			 
		 }else{
			 displayErrorMessage("Please Enter Last Name");
			 return false;
		 }
		 
	 }else{
		 displayErrorMessage("Please Enter First Name");
		 return false;
	 }
}
function checkHungamaInfo(){
	closeErrorMsg();
	 if($("#performanceType").val()!="-1"){
		 if($("#leadername").val().trim().length>0){
			 if($("#leaderemail").val().trim().length>0){
				 if($("#leaderPhoneNumber").val().trim().length>0){
					 if($("#teamSize").val()!="-1"){
						 if($("#performanceCommnets").val().trim().length>0){
							 if($("#teamMemberNames").val().trim().length>0){
								 showAddressDetailsFieldSet();		
							 }else{
								 displayErrorMessage("Please Enter Team Members Names");
								 return false;
							 }
						 }else{
							displayErrorMessage("Please Enter Record and Upload a sample performance to be selected for Hungama@DS â€˜17");
							 return false;
						 } 
						 
					 }else{
						 displayErrorMessage("Please Select Team Size");
						 return false;
					 } 
					 
				 }else{
					 displayErrorMessage("Please Enter Leader Phone Number");
					 return false;
				 } 
				 
			 }else{
				 displayErrorMessage("Please Enter Leader Email");
				 return false;
			 }
			 
		 }else{
			 displayErrorMessage("Please Enter Leader Name");
			 return false;
		 }
		 
	 }else{
		 displayErrorMessage("Please Select Performance Type");
		 return false;
	 }
}

function loadCulturalsSubmitbutton() {
	closeErrorMsg();

		 if($("#street").val().trim().length>0){
					 if($("#state").val()!="-1"){
						 if($("#district").val()!="-1"){
							 if($("#postalCode").val().trim().length>0){
								 if ($("#captcha_code").val().trim().length > 0) {
									 $("#btnCulturalSubmit").button('loading');
									}else{
										displayErrorMessage("Please Enter Captcha Code");
										return false;
									}
								
							 }else{
								 displayErrorMessage("Please Enter Postal Code");
								 return false;
							 }
						 }else{
							displayErrorMessage("Please Select District");
							 return false;
						 } 
						 
					 }else{
						 displayErrorMessage("Please Select State");
						 return false;
					 } 
		 }else{
			 displayErrorMessage("Please Enter Street");
			 return false;
		 }
		
}
