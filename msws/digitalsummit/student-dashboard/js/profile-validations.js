/**
 * 
 */


function checkPersonalDetails() {
	var firstName = $("#firstName").val().trim();
	var lastName = $("#lastName").val().trim();
	var mobileNumber = $("#mobileNumber").val().trim();
	var altMobileNumber = $("#altMobileNumber").val().trim();
	var designation = $("#designation").val().trim();
	var attendeeType = $("#attendeeType").val().trim();
	
	if(firstName.length>0 && lastName.length>0 && mobileNumber.length>0 && altMobileNumber.length>0 && designation.length>0 && attendeeType.length>0 ){
		 $("#btnPersonalSubmit").button('loading');
			
	}
	
}


function checkAddressDetails() {
	

	
	var street = $("#street").val().trim();
	var country = $("#country").val().trim();
	var state = $("#state").val().trim();
	var district = $("#district").val().trim();
	var postalCode = $("#postalCode").val().trim();
	
	
	if(street.length>0 && country.length>0 && state.length>0  && postalCode.length>0 ){
		
		 $("#btnAddressSubmit").button('loading');
	}
	
}


function checkPasswordDetails() {
	
		var existedPassword = $("#existedPassword").val().trim();
		var newPassword = $("#newPassword").val().trim();
		var retypePassword = $("#retypePassword").val().trim();
		if(existedPassword.length>0&&newPassword.length>0&&retypePassword.length>0){
			
			$("#btnPasswordSubmit").button('loading');
			return true;
			
		}else {
			return false;
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




function profileFieldLengthValidator(element) {
	
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
    }else if(element.id=="street")
    {
        i=60;
        label="Street"
    }else if(element.id=="postalCode")
    {
        i=10;
        label="Postal Code"
    }else if(element.id=="newPassword")
    {
        i=20;
        label="Password"
    }else if(element.id=="designation")
    {
        i=30;
        label="Designation"
    }
    
    
    
    
 
        
    if(element.value.replace(/^\s+|\s+$/g,"").length>i) {
        str=new String(element.value);
        element.value=str.substring(0,i);
        // showAlertModal("The "+element.id+" length must be less than "+i+" characters");
        // document.getElementById("alertMessage").innerHTML="The "+element.id+" length must be less than "+i+" characters";
        displayAlertMessage("The "+label+" length must be less than "+i+" characters");
        //alert("The "+element.id+" length must be less than "+i+" characters");
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
        	displayAlertMessage("Phone Number should be 10 characters");
            element.value=_return;
            element.value="";
            element.focus();
            return false;
        }else{
            if(num.length<10){//alert("Please give atleast  10 charcters in PhoneNumber");
         
            	displayAlertMessage("Please give atleast  10 charcters in PhoneNumber");
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


