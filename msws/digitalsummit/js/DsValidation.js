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


function loadContactSubmitbutton() {
    if($("#contactName").val().trim().length>0&&$("#email").val().trim().length>0&&$("#subject").val().trim().length>0&&$("#phone").val().trim().length>0&&$("#profession").val().trim().length>0&&$("#institute").val().trim().length>0&&$("#message").val().trim().length>0&&$("#captcha_code").val().trim().length>0)
    $("#btnContactSubmit").button('loading');
}

function loadPartnerSubmitbutton() {
    if($("#partnerName").val().trim().length>0&&$("#organizationName").val().trim().length>0&&$("#designation").val().trim().length>0&&$("#email").val().trim().length>0&&$("#phoneNumber").val().trim().length>0&&$("#reasonTobePartner").val().trim().length>0&&$("#captcha_code").val().trim().length>0)
    $("#btnPartnerSubmit").button('loading');
}

