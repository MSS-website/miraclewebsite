/**
 * Author : Santosh Kola
 * Date : 10/31/2017
 * Description : scripts for miracle me page 
 */



function miracleMeFieldLengthValidator(element) {
	closeErrorMessage('successFeedBackDiv','successFeedBackMessage');
	closeErrorMessage('exceptionFeedbackDiv','exceptionFeedbackMessage')
	
    var i=0;
    var label="";
   
    if(element.id=="feedbackMessage")
    {
        i=500;
        label="Compliments/Feedback"
    }
        
        
    if(element.value.replace(/^\s+|\s+$/g,"").length>i) {
        str=new String(element.value);
        element.value=str.substring(0,i);
        // showAlertModal("The "+element.id+" length must be less than "+i+" characters");
        // document.getElementById("alertMessage").innerHTML="The "+element.id+" length must be less than "+i+" characters";
        displayErrorMessage("The "+label+" length must be less than "+i+" characters","errorMessageFeedbackDiv","feedbackErrorMessage");
        //alert("The "+element.id+" length must be less than "+i+" characters");
        element.focus();
        return false;
    }
    return true;
        
        
}




function loadFeedbackButton() {
	closeErrorMessage('successFeedBackDiv','successFeedBackMessage');
	closeErrorMessage('exceptionFeedbackDiv','exceptionFeedbackMessage')
	closeErrorMessage("errorMessageFeedbackDiv","feedbackErrorMessage");
	
    if($("#feedbackMessage").val().trim().length>0){
    	 $("#btnFeedBackSubmit").button('loading');
    	 return true;
    } else{
    	
    	displayErrorMessage("Please enter your message!","errorMessageFeedbackDiv","feedbackErrorMessage")
    	
    	return false;
    }
    	
}




function checkMobileDownloadLogin(loginId,password) {
	window.scrollTo(0, 0);
	closeErrorMessage("errorMsgDiv","resultMessage");
    $("#currentEmpId").val("0");
    $("#btnLoginSubmit").button('loading');
    //getUpcomingConferenceImage();
    var jsonData = {};
    jsonData["LoginId"] = loginId;
    jsonData["Password"] = password;
    jsonData["Authorization"] = AUTHENTICATION;
				
    //jsonData["SearchKey"] = "kola";
    $.ajax({
        url: LOGIN_SERVICE_URL,
        method: "POST",
        data: JSON.stringify(jsonData),
        dataType: 'json',
        contentType: "application/json",
        success: function(result,status,jqXHR ){
		//alert("In suvvess-->"+result["ResultString"]);
            if(result["ResultString"]=="Valid"){
            	
            	
            	$("#currentEmpId").val(result["Id"]);
                //$("#currentLoginId").val(loginId);
                 $('#myModal').modal('hide');
                 $("#btnLoginSubmit").button('reset');
                //document.getElementById("loginModalClosId").click();
            }else {
                if(result["ResultString"]=="InValidCredentiales")
                    displayErrorMessage(INVALID_CREDENTIALES_MESSAGE,"errorMsgDiv","resultMessage");
                else
                    displayErrorMessage(INACTIVE_MESSAGE,"errorMsgDiv","resultMessage");
                
                $("#btnLoginSubmit").button('reset');
            }

        },
        error: function (xhr) {
            $("#btnLoginSubmit").button('reset');
            displayErrorMessage(xhr.responseText,"errorMsgDiv","resultMessage");
           
        }
  
    });
}


function doMiracleMeLoginSubmit() {
    
    var loginId=document.getElementById("loginId").value;
    var password=document.getElementById("password1").value;

  //  checkLogin(loginId,password);
   if(loginId.trim().length!=0 && password.trim().length!=0 ){
   checkMobileDownloadLogin(loginId,password);
}else if(loginId.trim().length==0 && password.trim().length==0){
    //document.getElementById("resultMessage").innerHTML="<font color='red'>Please enter details.</font>";
    displayErrorMessage("Please enter details.","errorMsgDiv","resultMessage");
     //  alert("dgddddddaaaaaaaaa---------------------->");
}else if(loginId.trim().length==0 && password.trim().length!=0){
    //document.getElementById("resultMessage").innerHTML="<font color='red'>Please enter details.</font>";
    displayErrorMessage("Please enter loginid.","errorMsgDiv","resultMessage");
     //  alert("dgddddddaaaaaaaaa---------------------->");
}else if(loginId.trim().length!=0 && password.trim().length==0){
     displayErrorMessage("Please enter password.","errorMsgDiv","resultMessage");
}
}
function enableLoginEnter(e) {
var keynum;
var keychar;
var numcheck;

if(window.event) {
    keynum = e.keyCode;
}
else if(e.which) // Netscape/Firefox/Opera
{
    keynum = e.which;
}
try{
    if(keynum==13){
    	doMiracleMeLoginSubmit();
        return false;
    }
}catch(e){
    alert("Error"+e);
}
}



function closeErrorMessage(divId,messageId){
	$("#"+divId).hide();
	$("#"+messageId).html("");
	
}

function displayErrorMessage(message,divId,messageId){
	$("#"+divId).show();
	$("#"+messageId).html(message);
	
}




