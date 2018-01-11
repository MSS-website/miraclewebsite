/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/*Webservice call from Jquery 
 *Qmeet RSVP/Internal Webinar depot/Internal Webinar Before/After page Login
 *Author : Santosh Kola
 *Date : 04/11/2017
 */


function checkLogin(loginId,password) {
    closeErrorMsg();
    $("#btnSubmit1").button('loading');
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
		
            if(result["ResultString"]=="Valid"){
                document.getElementById("loginModalClosId").click();
            }else {
                if(result["ResultString"]=="InValidCredentiales")
                    displayErrorMessage(INVALID_CREDENTIALES_MESSAGE);
                else
                    displayErrorMessage(INACTIVE_MESSAGE);
            }

        },
        error: function (xhr) {
            $("#btnSubmit1").button('reset');
            displayErrorMessage(xhr.responseText);
           
        }
  
    });
}
					



function getBodyContent(){

    var libId=document.getElementById("libId").value;
    //alert(libId);
    if(libId!='0'){
        var xmlhttp;
                
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("loadingImage").style.display = 'none';
                var response=xmlhttp.responseText;
                // alert(response);
                populateBodyConetnt(response);
            //    document.getElementById("posttype").innerHTML = xmlhttp.responseText;
            }else {
                document.getElementById("loadingImage").style.display = 'block';
            }
        }
        xmlhttp.open("GET","../../classes/AjaxBodyContent.php?libId="+libId,true);
        xmlhttp.send();
 
    }
        
}
function populateBodyConetnt(res){
    //alert(res);
    var result = res.split("$#@");
   
    document.getElementById("pageContentId").innerHTML=result[0];
    document.getElementById("breadcomLabelId").innerHTML=result[1];
    document.getElementById("contentTitleId").innerHTML=result[2];
    if(result[7]==1){
        
        if(result[8]==1){
            // document.getElementById("downloadContentId").innerHTML="<a class=\"btn btn-primary btn-md\" href=\"../../resource/get-resource.php?refId="+result[3]+"&objectId="+result[4]+"\">Download Product Brief</a>";
            document.getElementById("downloadContentId").innerHTML="<a class=\"btn btn-primary btn-md\" href=\"../../download/DownloadDocs.php?refId="+result[3]+"&objectId="+result[4]+"\">Download "+result[9]+"</a>";
        }else {
            document.getElementById("isAuthorized").value=1;
            $('#myModal1').modal('hide');
            document.getElementById("downloadContentId").innerHTML="<a class=\"btn btn-primary btn-md\" href=\"../../download/DownloadDocs.php?refId="+result[3]+"&objectId="+result[4]+"\">Download "+result[9]+"</a>";
        }
         
    }
   
    
    document.getElementById("pageContentId2").innerHTML=result[5];
    document.getElementById("publishedDateLabelId").innerHTML=result[6];
   
}


function getAuthors() {
    var libId=document.getElementById("libId").value;
    //alert(libId);
    if(libId!='0'){
        var xmlhttp;
                
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("loadingImage").style.display = 'none';
                var response=xmlhttp.responseText;
                // alert(response);
                populateAuthors(response);
            //   document.getElementById("posttype").innerHTML = xmlhttp.responseText;
            }else {
                document.getElementById("loadingImage").style.display = 'block';
            }
        }
        xmlhttp.open("GET","../../classes/AjaxLibraryAuthors.php?libId="+libId,true);
        xmlhttp.send();
 
    }
        
}


function populateAuthors(response){
   
    document.getElementById("authorsId").innerHTML=response;
}

/*Webservice call from Jquery 
 *Survey Form Login
 *Author : Santosh Kola
 *Date : 04/11/2017
 */


function checkSurveyLogin(loginId,password) {
    closeErrorMsg();
    $("#btnSubmit1").button('loading');
    var jsonData = {};
    jsonData["LoginId"] = loginId;
    jsonData["Password"] = password;
    jsonData["Authorization"] = AUTHENTICATION;
				
    $.ajax({
        url: LOGIN_SERVICE_URL,
        method: "POST",
        data: JSON.stringify(jsonData),
        dataType: 'json',
        contentType: "application/json",
        success: function(result,status,jqXHR ){
		
            if(result["ResultString"]=="Valid"){
                var LName = result["LName"];
                var FName = result["FName"];
                var MName = result["MName"];
                var WorkPhoneNo = result["WorkPhoneNo"];
                var Email1 = result["Email1"];
               // var Department = result["DepartmentId"];
                var Id = result["Id"];
                var EmpNo = result["EmpNo"];
                document.getElementById("frmFullName").value=FName+" "+LName;
                document.getElementById("frmPhone").value=WorkPhoneNo;
                document.getElementById("frmEmailId").value=Email1;
               // document.getElementById("frmEmpDepartment").value=Department;
                if(EmpNo==0 || EmpNo=="" || EmpNo==null )
                {
                    document.getElementById("frmEmpNo").value="N/A";
                }else{
                    document.getElementById("frmEmpNo").value=EmpNo;
                }
                document.getElementById("tempFrmFullName").value=FName+" "+LName;
                document.getElementById("tempFrmPhone").value=WorkPhoneNo;
                document.getElementById("tempFrmEmailId").value=Email1;
                document.getElementById("tempFrmEmpNo").value=EmpNo;
    
                if(document.getElementById("surveyStatus").value=='Published' && document.getElementById("isAllowDuplicates").value=='0'){
    
                    if( document.getElementById("regEmails").value.indexOf(Email1)>=0){
                        //displayErrorMessage("Duplicates not allowed!");
               
               
                        getSurveyReviewDetails(Email1);
                    }else {
                        document.getElementById("loginModalClosId").click();
                    }
                }else {
                    document.getElementById("loginModalClosId").click();
                }
       
            //  document.getElementById("loginModalClosId").click();
                     
            }else {
                if(result["ResultString"]=="InValidCredentiales")
                    displayErrorMessage(INVALID_CREDENTIALES_MESSAGE);
   
                else
                    displayErrorMessage(INACTIVE_MESSAGE);
            //document.getElementById("resultMessage").innerHTML="<font color='red'>"+res+"</font>";
            // displayErrorMessage("Invalid data");
            }
            $("#btnSubmit1").button('reset');
        },
        error: function (xhr) {
            $("#btnSubmit1").button('reset');
            displayErrorMessage(xhr.responseText);
           
        }
    });
}



/*Webservice call from Jquery
 *Author : Santosh Kola
 *Date : 04/11/2017
 *For Webinar after/libray/why static pages
 */


function checkEmployeeLogin(loginId,password)

{
    closeErrorMsg();
    $("#btnLoginSubmit").button('loading');
    var jsonData={};
    jsonData["LoginId"] = loginId;
    jsonData["Password"] = password;
    jsonData["Authorization"] = AUTHENTICATION;   
    $.ajax({
        url: LOGIN_SERVICE_URL,
        method: "POST",
        data: JSON.stringify(jsonData),
        dataType: 'json',
        contentType: "application/json",
        success: function(result,status,jqXHR ){
            if(result["ResultString"]=="Valid"){
                var FName=result["FName"];
                var LName=result["LName"];
                var TitleTypeId=result["TitleTypeId"];
                var OrgId=result["OrgId"];
                var Email1=result["Email1"];
                var WorkPhoneNo=result["WorkPhoneNo"];
                insertEmployeeData(FName,LName,WorkPhoneNo,Email1,TitleTypeId,OrgId);
            }else {
                if(result["ResultString"]=="InValidCredentiales")
                    displayErrorMessage(INVALID_CREDENTIALES_MESSAGE);
                else
                    displayErrorMessage(INACTIVE_MESSAGE);
            }
        },
        error: function (xhr) {
            $("#btnLoginSubmit").button('reset');
            displayErrorMessage(xhr.responseText);
        }
    });
    
}


function checkLibraryEmployeeLogin(loginId,password)

{
    closeErrorMsg();
    $("#btnLoginSubmit").button('loading');
    var jsonData={};
    jsonData["LoginId"] = loginId;
    jsonData["Password"] = password;
    jsonData["Authorization"] = AUTHENTICATION;   
    $.ajax({
        url: LOGIN_SERVICE_URL,
        method: "POST",
        data: JSON.stringify(jsonData),
        dataType: 'json',
        contentType: "application/json",
        success: function(result,status,jqXHR ){
            if(result["ResultString"]=="Valid"){
                var FName=result["FName"];
                var LName=result["LName"];
                var TitleTypeId=result["TitleTypeId"];
                var OrgId=result["OrgId"];
                var Email1=result["Email1"];
                var WorkPhoneNo=result["WorkPhoneNo"];
                insertEmployeeData(FName,LName,WorkPhoneNo,Email1,TitleTypeId,OrgId);
  
            }else {
                   
                if(result["ResultString"]=="InValidCredentiales")
                    displayErrorMessage(INVALID_CREDENTIALES_MESSAGE);
                else
                    displayErrorMessage(INACTIVE_MESSAGE);
            }

            $("#btnLoginSubmit").button('reset');      
                
        },
        error: function (xhr) {
            $("#btnLoginSubmit").button('reset');
            displayErrorMessage(xhr.responseText);
        }
    });
    
}


function populateLoginResults(res){
    // alert(res);

    if(res==200){
        //document.getElementById("loginModalClosId").click();
        $("#myModal1").modal('hide');
        $("#myModal2").modal('hide');
    }else {
        //document.getElementById("resultMessage").innerHTML="<font color='red'>"+res+"</font>";
        displayErrorMessage(res);
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

function populateEmployeeInfo(resText){
    //alert(resText);
    //var result = resText.split("|");
  var json = $.parseJSON(resText);
  var ResultString=json["ResultString"];
  
    if(ResultString=="Valid"){
  var FName=json["FName"];
  var LName=json["LName"];
  var TitleTypeId=json["TitleTypeId"];
  var OrgId=json["OrgId"];
  var Email1=json["Email1"];
  var WorkPhoneNo=json["WorkPhoneNo"];
        insertEmployeeData(FName,LName,WorkPhoneNo,Email1,TitleTypeId,OrgId);
    }else {
        //  document.getElementById("resultMessage").innerHTML="<font color='red'>"+resText+"</font>";
        displayErrorMessage(ResultString);
    }
}

function insertEmployeeData(firstName,lastName,phone,email,title,organization){
    //alert("insertEmployeeData");
    //  document.getElementById("resultMessage").innerHTML='';
    closeErrorMsg();
    var libId = document.getElementById("libId").value;
    var objectId = document.getElementById("objectId").value;
    var xmlhttp;
                
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    }
    else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
      //  alert(xmlhttp.readyState+" -- "+xmlhttp.status)
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            // document.getElementById("loading").style.display = 'none';
            $("#btnLoginSubmit").button('reset');
            var response=xmlhttp.responseText;
            //  alert(response);
            //  populateEmployeeInfo(response);
                
            if(parseInt(response,10)>0){
                $("#myModal1").modal('hide');
                $("#myModal2").modal('hide');
            }else {
                displayErrorMessage(response);
            //    document.getElementById("resultMessage").innerHTML=response;
            }
                
        //document.getElementById("posttype").innerHTML = xmlhttp.responseText;
        }else {
            //   document.getElementById("loading").style.display = 'block';
            $("#btnLoginSubmit").button('loading');
        }
    }
    xmlhttp.open("GET","../../classes/AjaxEmpResourceDepot.php?firstName="+escape(firstName)+"&lastName="+escape(lastName)+"&phone="+escape(phone)+"&email="+escape(email)+"&title="+escape(title)+"&organization="+escape(organization)+"&libId="+libId+"&objectId="+objectId,true);
    xmlhttp.send();
 
}

/*
 * Get Survey info by email
 * Author : Santosh Kola
 * Date : 08/10/2016
 */
function closeAttachmentErrorMsg() {
    $("#attachmentMessage").html("");
    $("#attachmentErrorMsgDiv").hide();
}
function displayAttachmentErrorMessage(message){
    $("#attachmentMessage").html(message);
    $("#attachmentErrorMsgDiv").show();
}
function getSurveyReviewDetails(email){
    //alert("checkemployeelogin");
    closeErrorMsg();
     
    //frmSurveyId
       
    var xmlhttp;
                
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    }
    else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            $("#btnSubmit1").button('reset');
            var response=xmlhttp.responseText;
            //  alert(response);
            populateSurveyData(response);
        //document.getElementById("posttype").innerHTML = xmlhttp.responseText;
        }else {
            $("#btnSubmit1").button('loading');
        }
    }
        var dateTime = new Date();
    xmlhttp.open("GET","../classes/AjaxSurveyReviewInfo.php?email="+escape(email)+"&surveyId="+$("#frmSurveyId").val()+"&quesionIdArray="+escape($("#quesionIdArray").val())+"&datetime="+escape(dateTime),true);
    xmlhttp.send();
 
}


function populateSurveyData(response){
    //alert(response);
  
    if(response!='notexists'){
      
        var infoId = response.split("*id*")[0];
        document.getElementById("frmInfoId").value=infoId;
        //alert(response.split("*id*")[1]);
        var infodata = response.split("*id*")[1].split("*@!");
        var i;
        for (i = 0; i < infodata.length-1; ++i) {
            //alert( index + ": " + value );
            var qinfo = infodata[i].split("#^$");
  
            if(qinfo[1]=='Checkbox'){
      
                var checkData = qinfo[2].split(",");
                var j;
      
                for (j = 0; j < checkData.length; ++j) {
                    // alert(checkData[j])
                    //  var questionIdObj = $("#questionId"+qinfo[0]);
                    var questionIdObj = document.getElementsByName("questionId"+qinfo[0]+"[]");
                    var k;
                    for (k = 0; k < questionIdObj.length; k++) {
                        //  alert(questionIdObj[k].value)
                        if (questionIdObj[k].value==checkData[j]) {
                            questionIdObj[k].checked=true;
                        }
                    }
                }
  
      
            }else if(qinfo[1]=='RadioButton'){
                // if($("#questionId"+qinfo[0]).length){
                var selectedList = qinfo[2];
                var options = document.getElementsByName("questionId"+qinfo[0]);
                for(var l=0; options[l]; ++l){
                    if(options[l].value==selectedList){
                        options[l].checked=true;
                        break;
                    }
                }
            //}
                            
            }else if(qinfo[1]=='Slider'){
                //if($("#questionId"+key).length)
                document.getElementById("questionId"+qinfo[0]).value = qinfo[2];
                document.getElementById("rangevalue"+qinfo[0]).innerHTML='';
                //attachmentLink
                           
                if(qinfo[2]!='0'){
                    document.getElementById("rangevalue"+qinfo[0]).innerHTML=qinfo[2];
                }
            }else if(qinfo[1]=='DropDown'){
                var dropDownObj = document.getElementById("questionId"+qinfo[0]);
                for ( var m = 0; m < dropDownObj.options.length; m++ ) {
                    if ( dropDownObj.options[m].value == qinfo[2] ) {
                        dropDownObj.options[m].selected = true;
           
                    }
                }
                            
            }else if(qinfo[1]=='Attachment'){
                //if($("#questionId"+key).length)
                if(qinfo[2]!="notexist"){
                  
                    var attachmentInfo=qinfo[2].split("*name*")
                     document.getElementById("fileDestination"+qinfo[0]).value = attachmentInfo[1];
                     document.getElementById("attachmentPath"+qinfo[0]).value = attachmentInfo[0];
                     document.getElementById("attachmentLabel"+qinfo[0]).innerHTML="Replace Attachment";
                     var url="../download/SurveyAttachmentDownload.php?fileId="+attachmentInfo[2];
                     document.getElementById("attachmentDownload"+qinfo[0]).innerHTML="&nbsp;&nbsp;<a href='"+url+"'><img src='../images/download.png' height='20px' width='20px'/></a>";
                }
                
            } else {
                $("#questionId"+qinfo[0]).val(qinfo[2]);
            }
        }
       
        if($("#surveyStatus").val()=='Published')
            $("#btnSubmit").text("Update");
        document.getElementById("loginModalClosId").click();
 
      
    }else {
        document.getElementById("loginModalClosId").click();
    }
    
    	
        
    
}



/*
 * Qmeet Login
 * Date : 07/11/2017
 * Author : Santosh Kola
 */
function checkQmeetLogin(loginId,password) {
    closeErrorMsg();
    $("#btnSubmit1").button('loading');
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
		
            if(result["ResultString"]=="Valid"){
            	
            	
            	 var FName=result["FName"].trim();
            	 var MName=result["MName"].trim();
            	  var LName=result["LName"].trim();
//            	  var TitleTypeId=json["TitleTypeId"];
            	 // var OrgId=json["OrgId"];
            	  var Email1=result["Email1"];
            	  var WorkPhoneNo=result["WorkPhoneNo"];
            	  var DepartmentId=result["DepartmentId"];
            	$("#fullName").val(FName+" "+MName+" "+LName);
            	$("#email").val(Email1.trim());
            	$("#phone").val(WorkPhoneNo);
            	$("#department").val(DepartmentId);
            	
                document.getElementById("loginModalClosId").click();
            }else {
                if(result["ResultString"]=="InValidCredentiales")
                    displayErrorMessage(INVALID_CREDENTIALES_MESSAGE);
                else
                    displayErrorMessage(INACTIVE_MESSAGE);
            }
            $("#btnSubmit1").button('reset');
        },
        error: function (xhr) {
            $("#btnSubmit1").button('reset');
            displayErrorMessage(xhr.responseText);
           
        }
  
    });
}





