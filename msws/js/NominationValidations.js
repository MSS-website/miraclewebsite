/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


 
function fieldLengthValidator(element) {
    closeErrorMsg();
    var i=0;
    var label="";
    //New Change middlename
    /// alert("hai");
    if(element.id=="suggestedEventName")
    {
        i=200;
        label="Event Name"
    }else if(element.id=="suggestedEventCity")
    {
        i=60;
        label="City"
    }else if(element.id=='suggestedEventState')
    {
        i=60;
        label="State"
    } else if(element.id=='suggestedEventCountry')
{
        i=60;
        label="Country"
    } else if(element.id=='suggestedEventDescription')
{
        i=2000;
        label="Description"
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
    //$("#suggestEventValidationRow").show();
    
    document.getElementById("suggestEventValidationRow").style.display='block';
}
function closeErrorMsg() {
    $("#errorMessage").html("");
  //  $("#suggestEventValidationRow").hide();
    document.getElementById("suggestEventValidationRow").style.display='none';
}



function isUrl(obj) {
    //document.getElementById('resultMessage').innerHTML = '';
    var  url_validate = /(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/;
    if(!url_validate.test(obj.value)){
        //document.getElementById('resultMessage').innerHTML = "<font color=red>Invalid Url</font>";
        displayErrorMessage("Please enter a valid URL");
        obj.value = '';
    // alert('error');
    }

}




function doSearchSubmit() {
    document.forms["eventSearchForm"].submit();    
}
 function showNominateModal(conferenceId,conferenceCountry,frmGrd){
    
    $("#collegueNominationsCommentsTable").html("<font color='red' size='2px;' style='text-align:center'><b>loading please wait..</b></font>")
    $('#nominatednames').html("");
    $("#nominateDivContent").hide();
$("#statusInfo").html("");

    $("#loadingNominateUrSelf").show();
    
    
    if($('#sessionLoginId').val()!=''){
        if(frmGrd=='1') {
            $(".close").click();
        }
          
             $('#nominateYourSelfConferenceId').val(conferenceId);
      $('#nominateCollegueConferenceId').val(conferenceId);
      $('#conferenceCountry').val(conferenceCountry);
      $('#nominateCollegueConferenceCountry').val(conferenceCountry);
      
      //alert($('#ses_Country').val())
      //alert("conferenceCountry-->"+conferenceCountry);
     // alert("ses_Country-->"+$('#ses_Country').val());
      if(conferenceCountry!=$('#ses_Country').val()){
           $('#passportAvailDiv').show();
      }else {
          $('#passportAvailDiv').hide();
      }
      
      
            if(!$("#btnNominateSubmit").hasClass("disabled"))
            $( "#btnNominateSubmit" ).addClass( "disabled" )
            $("#nominationBtnLabel").html("Submit Nomination");
            $('#passportAvailability')[0].checked=false;
            $('#employeeName').val($('#ses_EmployeeName').val());
            $('#employeeDesignation').val($('#ses_TitleTypeId').val());
            $('#employeeWorkPhone').val($('#ses_WorkPhoneNo').val());
            $('#workLocation').val($('#ses_Location').val());
            $('#reportingManager').val($('#ses_ReportsTo').val());
            $('#nearestAirport').val("");
            $('#goalsOfAttending').val("");
            //$('#nominateYourSelfConferenceId').val(conferenceId);
            $('#nominationYourId').val(0);
 
            // Collegue Niominations default Values
            document.getElementById("activityFlag").value='Add';
            document.getElementById("collegueName").value="";
            document.getElementById("collegueName").readOnly = false;
            document.getElementById("nominateCollegueDescription").value="";
            document.getElementById("coolegueId").value="";
         //   document.getElementById("btnNominateCollegueSubmit").value='Submit Nomination';
		 document.getElementById("collegueNominationButtonSpan").innerHTML='Submit Nomination';
 
            
 
 
 
                
 
    var empLoginId=$('#sessionLoginId').val();
     
      
    $('#nominateModalButton').click(); 
        $.ajax({
        url:'../classes/AjaxEventNominationDetails.php?conferenceId='+conferenceId+'&empLoginId='+empLoginId+'&date='+new Date(),//
        context: document.body,
        success: function(responseText) {
            //alert(responseText)
            var json = $.parseJSON(responseText);
            //Id,event_id,event_speaker,event_designation,primary_speaker,Company
            var nominationId = json["Id"];
            //alert(parseInt(json["RowCount"],10));
            var NomineeStatus = "Completed";
            
            if(parseInt(json["RowCount"],10)>0){
             // alert("Haii");
              $('#nominationYourId').val(json["Id"]);
                $('#employeeName').val(json["EmployeeName"]);
                $('#employeeDesignation').val(json["Designation"]);
                $('#employeeWorkPhone').val(json["WorkPhone"]);
                $('#workLocation').val(json["WorkLocation"]);
                $('#reportingManager').val(json["ReportsTo"]);
                $('#passportAvailability').val(json["PassportAvailability"]);
                
                if(json["PassportAvailability"]=='1')
                    $('#passportAvailability')[0].checked=true;
                
                    
                $('#nearestAirport').val(json["NearestAirport"]);
                $('#goalsOfAttending').val(json["GoalsOfAttending"]);
                $('#nominateYourSelfConferenceId').val(conferenceId);
                $("#nominationBtnLabel").html("Update Nomination");
                NomineeStatus = json["NomineeStatus"];
                
                
                
            }
                if(NomineeStatus == "Completed"){
                    
                    $("#nominateDivContent").show();
                    $( "#btnNominateSubmit" ).removeClass( "disabled" )
                }else if(NomineeStatus == "Approved"){
                    $("#statusInfo").html("<div class='col-sm-12'><div class='alert alert-success'><strong>Congratulations!</strong> You have been selected to represent Miracle at this event. Please reach out to partnerships@miraclesoft.com for more information.</div></div>");
                     }else if(NomineeStatus == "Rejected"){
                    $("#statusInfo").html("<div class='col-sm-12'><div class='alert alert-danger'>We're sorry, due to overwhelming response we are unable to approve your nomination at this point of time. For more information please reach out to partnerships@miraclesoft.com. </div></div>");
                     }
                 
                 
                 
                 
                 $("#loadingNominateUrSelf").hide();
        }, 
        error: function(e){
          $("#loadingNominateUrSelf").hide();
        }
    }); 
    
    // Collegue Nominations Table 
    
    
     
     
        $.ajax({
            url:'../classes/AjaxCollegueNominationComments.php?conferenceId='+conferenceId+'&empLoginId='+empLoginId+'&date='+new Date(),//
            context: document.body,
            success: function(responseText) {
                //alert(responseText)
                var json = $.parseJSON(responseText);
                //alert(json.length)
         
                //collegueNominationsCommentsTable
         
                if(json.length==0){
                    $("#collegueNominationsCommentsTable").html("");
                }else {
                    var commentsString = "<div class='col-sm-12'><br><p class='methodText'>All the names of the employees which you have been nominated for this event are here, including your comments and also you can update your details if you need.</p></div><div class='col-sm-12'><table class='table table-striped'><thead><tr><th>Name</th><th>Comments</th><th>Update</th></tr></thead><tbody>";
             
                    for (var i = 0; i < json.length; i++) {
                 
                 
                        var displayComments = json[i].Comments;
                        var displayCollegueName = json[i].CollegueName;
                        var hiddenCommnets=displayComments.replace(/'/g, '"');
                        var hiddenCollegueName=displayCollegueName.replace(/'/g, '"');
                        if(displayComments.length>15){
                            displayComments=  displayComments.substring(0,15)+"..";
                        }
                        //alert(json[i].CollegueName + ' ' +json[i].Comments);
                        //commentsString = commentsString+"<tr><td>"+json[i].CollegueName+"</td><td data-toggle='modal' data-target='#myModal'>"+json[i].Comments+"</td><td><button type='button' class='btn btn-primary'>Update</button></td></tr>";
                        commentsString = commentsString+"<tr><td><input type='hidden' id='dispalyCollegueName"+i+"' value='"+hiddenCollegueName+"'/>"+displayCollegueName+"</td><td><input type='hidden' id='dispalyComments"+i+"' value='"+hiddenCommnets+"'/><div class='tooltip'>"+displayComments+"<span class='tooltiptext'>"+json[i].Comments+"</span></div></td><td><button type='button' class='btn btn-primary' onclick='updateNominee("+i+","+json[i].Id+");'>Edit</button></td></tr>";
                    }
                    commentsString = commentsString+"</tbody></table></div>";
                    $("#collegueNominationsCommentsTable").html(commentsString)
                }

             
            }, 
            error: function(e){
                alert("Error--"+e)
            }
        });
    
    
    
    //    my change start here
        $.ajax({
            url:'../classes/AjaxNominatedNames.php?conferenceId='+conferenceId+'&empLoginId='+empLoginId,//
            context: document.body,
            success: function(responseText) {
               // alert(responseText)
                var json = $.parseJSON(responseText);
                var nominatedByNames = "";
                for (var i = 0; i < json.length; i++) {
                    var NominatorName = json[i].NominatorName;
                    if(i==0)
                        nominatedByNames = json[i].NominatorName;
                    else if(i==json.length-1)
                        nominatedByNames = nominatedByNames+" and "+json[i].NominatorName;
                    else 
                        nominatedByNames = nominatedByNames+","+json[i].NominatorName;
                }
                
                if(json.length==0){
                  $('#nominatednames').html("");
                }else 
                {
                   $('#nominatednames').html("You have been nominated by <b>"+nominatedByNames+".</b>"); 
                    }

             
            }, 
            error: function(e){
                alert("Error--"+e)
            }
        });
    
//  my change end here  
  
    
    
    }        
}







function updateNominee(index,collegueId){
    // $(".close").click();
   // var collegueLoginId=$("#collegueLoginId"+index).val();
    //var collegueId=$("#collegueId"+index).val();
    
    
    
    var comments=$("#dispalyComments"+index).val();
     comments=comments.split('"').join("'");
   
    var collegueName=$("#dispalyCollegueName"+index).val();
    document.getElementById("activityFlag").value='Update';
    document.getElementById("collegueName").value=collegueName;
    document.getElementById("collegueName").readOnly = true;
    document.getElementById("nominateCollegueDescription").value=comments;
    $("#nominateCollegueDescription").focus();
    //document.getElementById("coolegueLoginId").value=$("#collegueLoginId"+index).val();
    document.getElementById("coolegueId").value=collegueId;
    //document.getElementById("btnNominateCollegueSubmit").value='Update Nomination';
    document.getElementById("collegueNominationButtonSpan").innerHTML='Update Nomination';
    
    $("#nominateCollegueTab").click(); 
}




  function addCollegueNomination(){

            var coolegueLoginId=document.getElementById("coolegueLoginId").value;
            var coolegueEmail=document.getElementById("coolegueEmail").value;
            if(coolegueLoginId=='' && coolegueEmail=='' && $("#activityFlag").val()=='Add'){
              //  document.getElementById("nomineeCollegueValidationRow").style.display = "block";
             //   document.getElementById("errorMessageForEmptyName").innerHTML='Please Select Employee Name From Suggession List';
                displayCollegueNominationErrorMessage('Please Select Employee Name From Suggession List');
                document.getElementById("collegueName").value='';
                document.getElementById("collegueName").focus();
                return false;
               
            }else{
                 return true;
             //   document.forms["frmNominateCollegue"].submit(); 
            }
        }
    


function displayCollegueNominationErrorMessage(message){
    $("#errorMessageNominateCollegue").html(message);
    //$("#suggestEventValidationRow").show();
    
    document.getElementById("nomineeCollegueValidationRow").style.display='block';
}
function closeNominateCollegueErrorMsg() {
    $("#errorMessageNominateCollegue").html("");
  //  $("#suggestEventValidationRow").hide();
    document.getElementById("nomineeCollegueValidationRow").style.display='none';
}




function fieldLengthValidatorForNYS(element) {
    var i=0;
    var label="";
    //New Change middlename
    /// alert("hai");
    if(element.id=='employeeDesignation')
    {
        i=30;
        label="Employee Designation"
    } else if(element.id=='nearestAirport')
{
        i=30;
        label="Nearest Airport"
    } else if(element.id=='goalsOfAttending')
{
        i=2000;
        label="Goals Of Attending"
    } 
        
        
        
    if(element.value.replace(/^\s+|\s+$/g,"").length>i) {
        str=new String(element.value);
        element.value=str.substring(0,i);
        // showAlertModal("The "+element.id+" length must be less than "+i+" characters");
        // document.getElementById("alertMessage").innerHTML="The "+element.id+" length must be less than "+i+" characters";
        displayNYSErrorMessage("The "+label+" length must be less than "+i+" characters");
        //alert("The "+element.id+" length must be less than "+i+" characters");
        element.focus();
        return false;
    }
    return true;
        
        
}
    
function displayNYSErrorMessage(message){
    $("#errorMessageForNYS").html(message);
    //$("#suggestEventValidationRow").show();
    
    document.getElementById("nominateYSValidationRow").style.display='block';
}
function closeNYSErrorMsg() {
    $("#errorMessageForNYS").html("");
    //  $("#suggestEventValidationRow").hide();
    document.getElementById("nominateYSValidationRow").style.display='none';
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
            displayNYSErrorMessage("Phone Number should be 10 characters");
            element.value=_return;
            element.value="";
            element.focus();
            return false;
        }else{
            if(num.length<10){//alert("Please give atleast  10 charcters in PhoneNumber");
         
                displayNYSErrorMessage("Please give atleast  10 charcters in PhoneNumber");
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


function fieldLengthValidatorForNAC(element) {
    var i=0;
    var label="";
    //New Change middlename
    /// alert("hai");
if(element.id=='nominateCollegueDescription')
{
        i=2000;
        label="Description"
    } 
        
        
        
    if(element.value.replace(/^\s+|\s+$/g,"").length>i) {
        str=new String(element.value);
        element.value=str.substring(0,i);
        // showAlertModal("The "+element.id+" length must be less than "+i+" characters");
        // document.getElementById("alertMessage").innerHTML="The "+element.id+" length must be less than "+i+" characters";
        displayCollegueNominationErrorMessage("The "+label+" length must be less than "+i+" characters");
        //alert("The "+element.id+" length must be less than "+i+" characters");
        element.focus();
        return false;
    }
    return true;
        
        
}
    




//------------------

var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope,$http) {
    $scope.collegueName = {};
     $scope.employees={};
    
  //  alert("Before method"+$scope.collegueName);
    $scope.getEmployeesList=function(){
        
        if($("#activityFlag").val()=='Add'){
        
         $scope.employees ={};
     //   alert("In method "+$scope.collegueName);
      $("#coolegueLoginId").val("");
      $("#coolegueEmail").val("");
     if($scope.collegueName.searchKey.length>0){
       // var contextPath = "http://www.miraclesoft.com/HubbleServices/hubbleresources";
       var contextPath = "http://192.168.1.203:9999/HubbleServices/hubbleresources";
        var securityToken="YWRtaW46YWRtaW4=";
        //------
         $http.post(contextPath + "/websiteServices/getEmployeeSuggestionsForEventNominations", {
        "SearchKey": $scope.collegueName.searchKey,
        "LoginId": $("#sessionLoginId").val(),
        "Authorization": securityToken
      }).then(function(response) {
          $scope.employees = response.data.employees;
         // $scope.$apply();
      console.log(JSON.stringify($scope.employees));
      
        if (JSON.stringify(response.data.IsAuthenticate) == "true") {
          console.log("emp suggestionlist authenticated service");
          if (JSON.stringify(response.data.isDataExisted) == "true") {
              closeNominateCollegueErrorMsg();
            $scope.employeeSuggestionListArray = response.data.employees;
          } else if (JSON.stringify(response.data.isDataExisted) == "false") {
            //ionicToast.show('No employee found', 'middle', false, 1500);
            displayCollegueNominationErrorMessage("Employee name not existed!")
          }
        } else {
          console.log("emp suggestionlist not authenticated service");
        }
      })
     }
        
        //-----
    }
}
    $scope.selectEmploye=function(employee){
    
    if(employee.LoginId!=$("#sessionLoginId").val())
    {
     // alert(employee.Email1);
      $("#collegueName").val(employee.EmployeeName);
      $("#coolegueLoginId").val(employee.LoginId);
      $("#coolegueEmail").val(employee.Email1);
     // $scope.name=employee.EmployeeName;
      
    }else {
        displayCollegueNominationErrorMessage("You should not nominate yourself need to nominate other employees");
        $("#collegueName").val("");
    }
    $scope.employees ={};
    }
    
});



function checkDateSelection() {
    closeErrorMsg();
    var calId1 = $("#calId1").val();
    var calId2 = $("#calId2").val();
    if(calId1!=''&&calId2!='')
    return true;
else{
    displayErrorMessage("Please select dates from Date picker!");
    
     return false;
}
}



function setNominateUrSelfButton(isDisable) {
    document.getElementById("btnNominateSubmit").disabled = isDisable;
    
}


function hideNominateUrselfButton() {
    if($("#employeeName").val().trim().length>0&&$("#employeeDesignation").val().trim().length>0&&$("#employeeWorkPhone").val().trim().length>0&&$("#workLocation").val().trim().length>0&&$("#reportingManager").val().trim().length>0&&$("#nearestAirport").val().trim().length>0&&$("#goalsOfAttending").val().trim().length>0)
        {
            $("#btnNominateSubmit").button('loading');
          //  $("#btnNominateSubmit").hide();
           // $("#nominateUrSelfSubmitLoadSpan").show();
        }
}

function hideNominateCollegueButton() {
   
    if(($("#coolegueLoginId").val().trim().length>0&&$("#nominateCollegueDescription").val().trim().length>0&&$("#activityFlag").val()=='Add') || ($("#nominateCollegueDescription").val().trim().length>0&&$("#activityFlag").val()!='Add'))
        {
           
           $("#btnNominateCollegueSubmit").button('loading');
           // $("#btnNominateCollegueSubmit").hide();
           // $("#nominateCollegueSubmitLoadSpan").show();
        }
}

function hideSuggestEventButton() {
    if($("#suggestedEventName").val().trim().length>0&&$("#calId1").val().trim().length>0&&$("#calId2").val().trim().length>0&&$("#suggestedEventCity").val().trim().length>0&&$("#suggestedEventState").val().trim().length>0&&$("#suggestedEventCountry").val().trim().length>0&&$("#suggestedEventLink").val().trim().length>0&&$("#suggestedEventDescription").val().trim().length>0)
        {
            $("#btnSuggestionEventSubmit").button('loading');
          //  $("#btnSuggestionEventSubmit").hide();
          //  $("#suggestionSubmitLoadSpan").show();
        }
}

function loadbutton() {
    if($("#loginId").val().trim().length>0&&$("#password").val().trim().length>0)
    $("#btnLoginSubmit").button('loading');
}