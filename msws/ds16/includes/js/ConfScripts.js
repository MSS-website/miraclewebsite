 /* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

 
 
 
 
function formatPhone(element){str=new String(element.value);
 element.value=str.replace(/[A-Za-z\(\)\.\-\x\s,]/g,"");
 num=element.value;
 var _return;
 if(num.length==10){_return="(";
 var ini=num.substring(0,3);
 _return+=ini+")";
 var st=num.substring(3,6);
 _return+="-"+st+"-";
 var end=num.substring(6,10);
 _return+=end;
 element.value="";
 element.value=_return;
 }else{if(num.length>13){//alert("Phone Number should be 10 characters");
 displayErrorMessage("Phone Number should be 10 characters");
 element.value=_return;
 element.value="";
 element.focus();
 return false;
 }else{if(num.length<13){//alert("Please give atleast  10 charcters in PhoneNumber");
         
 displayErrorMessage("Please give atleast  10 charcters in PhoneNumber");
 element.value="";
 }}}return _return;
 }function checkEmail(element){if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(element.value)){return(true);
 }element.value="";
 displayErrorMessage("Invalid E-mail Address! Please re-enter.");
 //alert("Invalid E-mail Address! Please re-enter.");
 return(false);
 }
 
 
 
 
 
 
 
 
 
 
 
function fieldLengthValidator(element) {
    var i=0;
    
     //New Change middlename
    /// alert("hai");
        if(element.id=="fname" || element.id=="lname" || element.id=="title" || element.id=="city" || element.id=="personName" || element.id=="email"|| element.id=="mname"|| element.id=='state'|| element.id=='teamCandidateName1' || element.id=='teamCandidateEmailId1'|| element.id=='teamCandidateName2' || element.id=='teamCandidateEmailId2'|| element.id=='teamCandidateName3' || element.id=='teamCandidateEmailId3')
        {i=60;
        }else if(element.id=="mobileNo" || element.id=="mobileNumber")
        {i=20;
        }else if(element.id=='comments' || element.id=="description")
        {i=1000;
        }else if(element.id=='skillSet')
        {i=500;
        }else if(element.id=='collegeName'|| element.id=="branch" || element.id=='teamCandidateBranch1'|| element.id=='teamCandidateBranch2'|| element.id=='teamCandidateBranch3')
        {i=100;
        } else if(element.id=='competitionType'){
            i=100;
        }else if(element.id=='leaderName' || element.id=='leaderEmail'){
            i=60;
        }else if(element.id=='teamMemberNames'){
            i=2000;
        }else if(element.id=='auditionLink'){
            i=10000;
        }else if(element.id=='teamInfo' || element.id=="teamCandidateInfo" || element.id=="candidateInfo")
        {i=1500;
        }
        
        
        
        if(element.value.replace(/^\s+|\s+$/g,"").length>i) {
            str=new String(element.value);
            element.value=str.substring(0,i);
          // showAlertModal("The "+element.id+" length must be less than "+i+" characters");
         // document.getElementById("alertMessage").innerHTML="The "+element.id+" length must be less than "+i+" characters";
          displayErrorMessage("The "+element.id+" length must be less than "+i+" characters");
         //alert("The "+element.id+" length must be less than "+i+" characters");
            element.focus();
            return false;
        }
        return true;
        
        
    }

 var specialKeys = new Array();
        specialKeys.push(8); //Backspace
        function IsNumeric(e) {
            var keyCode = e.which ? e.which : e.keyCode
            var ret = ((keyCode >= 48 && keyCode <= 57) || specialKeys.indexOf(keyCode) != -1);
            if(!ret){
               // alert("Please enter numerics only!");
               // showAlertModal("Please enter numerics only!");
                displayErrorMessage("Please enter numerics only!");
            }
            //document.getElementById("error").style.display = ret ? "none" : "inline";
            return ret;
        }
        
    
 function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
} 
 function displayErrorMessage(message){
    $("#resultMessage").html(message);
    $("#errorMsgDiv").show();
}
function closeErrorMsg() {
    $("#resultMessage").html("");
    $("#errorMsgDiv").hide();
}

function closeSuccessDiv(id){
   // alert("id"+id);
     $(id).hide();
}


function validatenumber(xxxxx){var maintainplus="";
 var numval=xxxxx.value;
 if(numval.charAt(0)=="+"){var maintainplus="+";
 }curnumbervar=numval.replace(/[\\A-Za-z!"?$%^&*+_={};:'@#~,?\/<>?|`?\]\[]/g,"");
 xxxxx.value=maintainplus+curnumbervar;
 var maintainplus="";
 xxxxx.focus;
 }
 
 
  var _validFileExtensions = [ "doc","pdf","txt","docx","rtf"];    
function resumeCheck(oInput) {
    if (oInput.type == "file") {
        var sFileName = oInput.value;
       // alert(sFileName)
       //  var size = document.getElementById('file').files[0].size;
       var size =oInput.files[0].size;
       var fileName =oInput.files[0].name;
       // var fileSize = sFileName.size;
    
       if(sFileName.length>50){
                   oInput.value = "";
                  // x0p( '','File name length must be less than 50 characters!','info');
                   displayErrorMessage( 'File name length must be less than 50 characters!');
                   $('html,body').scrollTop(0);
                 return false;
             }else {
            if(parseInt(size)>2097152) {
              oInput.value = "";
                  displayErrorMessage( 'File size must be less than 2 MB!');
                  $('html,body').scrollTop(0);
                 return (false);
            }
             }
        
         if (sFileName.length > 0) {
            var blnValid = false;
            for (var j = 0; j < _validFileExtensions.length; j++) {
                var sCurExtension = _validFileExtensions[j];
                if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                    blnValid = true;
                    break;
                }
            }
             
            if (!blnValid) {
                $('html,body').scrollTop(0);
                displayErrorMessage( fileName + ' is invalid, allowed extensions are: ' + _validFileExtensions.join(", "));
               // alert("Sorry, " + sFileName + " is invalid, allowed extensions are: " + _validFileExtensions.join(", "));
                oInput.value = "";
                return false;
            }
        }
    
     var startIndex = (sFileName.indexOf('\\') >= 0 ? sFileName.lastIndexOf('\\') : sFileName.lastIndexOf('/'));
                var filename = sFileName.substring(startIndex);
                if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                    filename = filename.substring(1);
                }
            	
                document.getElementById("fileDestination").value = filename;
    return true;
}

}



     var country = new Array();
            function stateAssign(){
                country = new Array();
                //alert("assign");
                country['USA'] = new Array('--Please Select--','Alabama','Alaska','Arizona','Arkansas','California','Colorado',
                'Connecticut','Delaware','Florida','Georgia','Hawaii','Idaho','Illinois','Indiana','Iowa','Kansas','Kentucky',
                'Louisiana','Maine','Maryland','Massachusetts','Michigan','Minnesota','Mississippi','Missouri','Montana','Nebraska',
                'Nevada','New Hampshire','New Jersey','New Mexico','New York','North Carolina','North Dakota','Oklahoma','Oregon',
                'Pennsylvania','Rhode Island','South Carolina','South Dakota','Tennessee','Texas','Utah','Virginia','Vermont','Washington','Wisconsin','West Virginia','Wyoming');
                country['India'] = new Array('--Please Select--','Andhra Pradesh','Arunachal Pradesh','Assam','Bihar','Chhattisgarh',
                'Goa','Gujarat','Haryana','Himachal Pradesh','Jammu and Kashmir','Jharkhand','Karnataka','Kerala','Madhya Pradesh',
            'Maharashtra','Manipur','Meghalaya','Mizoram','Nagaland','Orissa','Punjab','Rajasthan','Sikkim','Tamil Nadu','Tripura','Uttar Pradesh',
        'Uttarakhand','West Bengal','Telangana');
                country['Australia'] = new Array('--Please Select--','NSW');
                country['UK'] = new Array('--Please Select--');
                country['-1'] = new Array('--Please Select--');
            }
            var vmessage= 1;


            function getStates() {
                var cntrySel = document.getElementById('country').value;
                stateAssign();
                var statesList = country[cntrySel];
                // alert(statesList);
                if(statesList != null) {
                    setStates('states', statesList, statesList);
                }
            }

            function setStates(fieldId, newOptions, newValues) {
                var  selectedField = document.getElementById(fieldId);
                selectedField.options.length = 0;
                //alert(newOptions.length);
                for (var i=0; i<newOptions.length; i++) {
                    if(newValues[i]!='--Please Select--')
                        selectedField.options[selectedField.length] = new Option(newOptions[i], newValues[i]);
                    else
                        selectedField.options[selectedField.length] = new Option(newOptions[i], "");
                }
            }									
 
function isNumberKey(evt) {
 
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode!=46 && charCode > 31 && (charCode < 48 || charCode > 57))
    {
        displayErrorMessage("Please enter numeric value");
        return false;
    }else {
        return true;
    }
}


function isUrl(obj) {
    document.getElementById('resultMessage').innerHTML = '';
  var  url_validate = /(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/;
if(!url_validate.test(obj.value)){
    displayErrorMessage("Invalid Url");
     //document.getElementById('resultMessage').innerHTML = "<font color=red>Invalid Url</font>";
     obj.value = '';
  // alert('error');
}

}