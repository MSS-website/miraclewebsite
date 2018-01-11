/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */




/*
 * Login Service for MobileMe 
 * Author : Santosh Kola
 * Date : 05/12/2017
 */


function checkMobileDownloadLogin(loginId,password) {
    closeErrorMsg();
    $("#currentLoginId").val("");
    $("#btnSubmit").button('loading');
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
                
                $("#currentLoginId").val(loginId);
                 $('#myModal').modal('hide');
                //document.getElementById("loginModalClosId").click();
            }else {
                if(result["ResultString"]=="InValidCredentiales")
                    displayErrorMessage(INVALID_CREDENTIALES_MESSAGE);
                else
                    displayErrorMessage(INACTIVE_MESSAGE);
                
                $("#btnSubmit").button('reset');
            }

        },
        error: function (xhr) {
            $("#btnSubmit").button('reset');
            displayErrorMessage(xhr.responseText);
           
        }
  
    });
}
	
        
 function downloadMiracleMeApp(osType)    {
    
     var loginId = $("#currentLoginId").val();
      if(loginId!=''){
          window.location = "../download/MiracleMeDownload.php?loginId="+loginId+"&osType="+osType;
//          window.location = "../download/MiracleMeDownloadWithResume.php?loginId="+loginId+"&osType="+osType;
          
      }
    
 }
        
function displayErrorMessage(message){
    $("#resultMessage").html(message);
    $("#errorMsgDiv").show();
}
function closeErrorMsg() {
    $("#resultMessage").html("");
    $("#errorMsgDiv").hide();
}
