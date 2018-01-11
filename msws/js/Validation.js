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
 showAlertModal("Phone Number should be 10 characters");
 element.value=_return;
 element.value="";
 element.focus();
 return false;
 }else{if(num.length<13){//alert("Please give atleast  10 charcters in PhoneNumber");
         
 showAlertModal("Please give atleast  10 charcters in PhoneNumber");
 element.value="";
 }}}return _return;
 }function checkEmail(element){if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(element.value)){return(true);
 }element.value="";
 showAlertModal("Invalid E-mail Address! Please re-enter.");
 //alert("Invalid E-mail Address! Please re-enter.");
 return(false);
 }
 
 function validatenumber(xxxxx){var maintainplus="";
 var numval=xxxxx.value;
 if(numval.charAt(0)=="+"){var maintainplus="+";
 }curnumbervar=numval.replace(/[\\A-Za-z!"?$%^&*+_={};:'@#~,?\/<>?|`?\]\[]/g,"");
 xxxxx.value=maintainplus+curnumbervar;
 var maintainplus="";
 xxxxx.focus;
 }
 
 function valueCheck(myForm){email=myForm.value;
 var is_value=email.indexOf("miraclesoft.com");
 if(is_value==-1){myForm.value="";
 
 showAlertModal("You should enter valid Miracle Mail Id!");
 }}
 
function isNumber(evt) {
    
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode!=46 && charCode > 31 && (charCode < 48 || charCode > 57) && charCode >= 1 && charCode <=100)
        return false;
    
    return true;
}


function fieldLengthValidator(element) {
    var i=0;
    
     //New Change middlename
        if(element.id=="firstname" || element.id=="lastname" || element.id=="employeeName" || element.id=="middlename" || element.id=="firstName" || element.id=="lastName" || element.id== "fullName")
        {i=60;
        }if(element.id=="organization" || element.id=="currentOrganization")
        {i=100;
        }if(element.id=='cCity'||element.id=='nCity'||element.id=="currentLocation" ||element.id=="experience" ||element.id=="educationalQualification" ||element.id=="city" || element.id=="employeePeriod"|| element.id=="nativePlace"|| element.id=="workLocation"|| element.id=="state"|| element.id=="country" || element.id=="nativeDistrict"|| element.id=="nativeState"|| element.id=="curentDistrict"|| element.id=="currentState")
        {i=30;
        }if(element.id=="designation" || element.id=="empDesignation" || element.id=="department" || element.id== "currentOccupation")
        {i=40;
        }if(element.id=="description")
        {i=500;
        }if(element.id=="email" || element.id=="remuneration")
        {i=60;
        }if(element.id=="employeeId")
        {i=20;  
        }if(element.id=="reasonsToLeave" || element.id=="dropPoint" || element.id=="reasonForLeaving")
        {i=500;
        }if(element.id=="zip" || element.id=="nativeZipcode" || element.id=="currentZipcode")
        {i=10;
        }if(element.id=="suggestions")
        {i=10000;
        }if(element.id=="addExperience")
        {i=50;
        }if(element.id=="newCompanyName" || element.id=="endCustomerName")
        {i=100;
        }
        
        
        if(element.value.replace(/^\s+|\s+$/g,"").length>i) {
            str=new String(element.value);
            element.value=str.substring(0,i);
            
         //   document.getElementById("resultmessage").style.color= "red";
 	   // 	document.getElementById("resultmessage").innerHTML="The "+element.id+" length must be less than "+i+" characters";
           
           
           showAlertModal("The "+element.id+" length must be less than "+i+" characters");
         //alert("The "+element.id+" length must be less than "+i+" characters");
            element.focus();
            return false;
        }
        return true;
        
        
    }

function NumericValidation(eventObj)
{
    var keycode;
 
    if(eventObj.keyCode) //For IE
        keycode = eventObj.keyCode;
    else if(eventObj.Which)
        keycode = eventObj.Which;  // For FireFox
    else
        keycode = eventObj.charCode; // Other Browser
 
    if (keycode!=8) //if the key is the backspace key
    {
        if (keycode<48||keycode>57) //if not a number
            return false; // disable key press
        else
            return true; // enable key press
     }        
 }
 
 
 var specialKeys = new Array();
        specialKeys.push(8); //Backspace
        function IsNumeric(e) {
            var keyCode = e.which ? e.which : e.keyCode
            var ret = ((keyCode >= 48 && keyCode <= 57) || specialKeys.indexOf(keyCode) != -1);
            if(!ret){
               // alert("Please enter numerics only!");
                showAlertModal("Please enter numerics only!");
            }
            //document.getElementById("error").style.display = ret ? "none" : "inline";
            return ret;
        }
        
        
        function validateDays(obj) {
            if(obj.value <=90){
                
            }else {
                //alert("Please enter below 90 days!");
                showAlertModal("Please enter below 90 days!");
                obj.value = "";
            }
        }
        
        
        
function changeDropPoint(event){
    //alert(event.value);
    var corporateTrans = event.value;
    if(corporateTrans=='Yes'){
        document.getElementById("dropPoint").readOnly = false;
    }else{
        document.getElementById("dropPoint").value='';
        document.getElementById("dropPoint").readOnly = true;
    }
}


function checkMandatoryFields() {
   var jobTitle =  document.getElementById("jobTitle").value; 
   
   if(jobTitle.trim().length==0){
      showAlertModal("Please select position.");  
      return false;
   }else{
        return true;
   }
  
  // alert("-->"+jobTitle+"<--");
   
}


function enableLoginWhenEnter(e) {
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
            doSubmit();
            return false;
        }
    }catch(e){
        alert("Error"+e);
    }
};

function checkResourceEmail(element){
  //  document.getElementById("errorMessage").innerHTML = "";
 // alert("element--"+element.value.length);
  if(element.value.length>60){
      displayErrorMessageEx("E-Mail Length must be less than 60 Characters.");
      element.value="";
      return(false);
  }
    closeErrorMsgEx();
    if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(element.value)){
       if(element.value.indexOf('@miraclesoft.com')== -1){
           if(element.value.indexOf('@gmail.com')== -1&&element.value.indexOf('@yahoo.com')== -1&&element.value.indexOf('@hotmail.com')== -1&&element.value.indexOf('@live.com')== -1&&element.value.indexOf('@outlook.com')== -1&&element.value.indexOf('@infosys.com')== -1&&element.value.indexOf('@hcl.com')== -1&&element.value.indexOf('@tcs.com')== -1&&element.value.indexOf('@wipro.com')== -1&&element.value.indexOf('@capgemini.com')== -1&&element.value.indexOf('@prolifichr.com')== -1&&element.value.indexOf('@open-logix.com')== -1){
               return(true);  
           }
            element.value="";
            displayErrorMessageEx("Please enter your corporate email!");
 //document.getElementById("errorMessage").innerHTML ="<font color=red size=2px>Please enter your corporate email!</font>";
           return(false);
       }
        element.value="";
       displayErrorMessageEx("Please login through employee sign in with hubble credentials .");
 //document.getElementById("errorMessage").innerHTML ="<font color=red size=2px>Please login through employee sign in with hubble credentials .</font>";
// showAlertModal("Invalid E-mail Address! Please re-enter.");
 //alert("Invalid E-mail Address! Please re-enter.");
 return(false);
       
    
 }element.value="";
 displayErrorMessageEx("Invalid E-mail Address! Please re-enter.");
// document.getElementById("errorMessage").innerHTML ="<font color=red size=2px>Invalid E-mail Address! Please re-enter.</font>";
// showAlertModal("Invalid E-mail Address! Please re-enter.");
 //alert("Invalid E-mail Address! Please re-enter.");
 return(false);
 }
 
 
 
 
 function displayErrorMessageEx(message){
    $("#resultMessageEX").html(message);
    $("#errorMsgDivEX").show();
}
function closeErrorMsgEx() {
    $("#resultMessageEX").html("");
    $("#errorMsgDivEX").hide();
}




 function checkEmailForExternalSurvey(element){if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(element.value)){return(true);
 }element.value="";
  displayErrorMessage("Invalid E-mail Address! Please re-enter");
//    $("#errorMsgDiv").html("Invalid E-mail Address! Please re-enter.");
//    $("#errorMsgDiv").show();

 return(false);
 }
 
 
 function formatPhoneForExternalSurvey(element){str=new String(element.value);
     
 $("#errorMsgDiv").hide();
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
// showAlertModal("Phone Number should be 10 characters");
displayErrorMessage("Phone Number should be 10 characters");
//    $("#errorMsgDiv").html("Phone Number should be 10 characters");
//    $("#errorMsgDiv").show();
 element.value=_return;
 element.value="";
 element.focus();
 return false;
 }else{if(num.length<13){//alert("Please give atleast  10 charcters in PhoneNumber");
         displayErrorMessage("Please give atleast  10 charcters in PhoneNumber");
//          $("#errorMsgDiv").html("Please give atleast  10 charcters in PhoneNumber");
//    $("#errorMsgDiv").show();
 //showAlertModal("Please give atleast  10 charcters in PhoneNumber");
 element.value="";
 }}}return _return;
 }
 
 
 function fieldLengthValidatorForExternalWebinars(element) {
    var i=0;
    
     //New Change middlename
        if(element.id=="firstname" || element.id=="lastname" || element.id=="employeeName" || element.id=="middlename" || element.id=="firstName" || element.id=="lastName" || element.id== "fullName")
        {i=60;
        }if(element.id=="organization" || element.id=="currentOrganization")
        {i=100;
        }if(element.id=='cCity'||element.id=='nCity'||element.id=="currentLocation" ||element.id=="experience" ||element.id=="educationalQualification" ||element.id=="city" || element.id=="employeePeriod"|| element.id=="nativePlace"|| element.id=="workLocation"|| element.id=="state"|| element.id=="country" || element.id=="nativeDistrict"|| element.id=="nativeState"|| element.id=="curentDistrict"|| element.id=="currentState")
        {i=30;
        }if(element.id=="designation" || element.id=="empDesignation" || element.id=="department" || element.id== "currentOccupation")
        {i=40;
        }if(element.id=="description")
        {i=500;
        }if(element.id=="email")
        {i=60;
        }if(element.id=="employeeId")
        {i=20;  
        }if(element.id=="reasonsToLeave" || element.id=="dropPoint")
        {i=500;
        }if(element.id=="zip" || element.id=="nativeZipcode" || element.id=="currentZipcode")
        {i=10;
        }if(element.id=="suggestions")
        {i=10000;
        }
        
        
        if(element.value.replace(/^\s+|\s+$/g,"").length>i) {
            str=new String(element.value);
            element.value=str.substring(0,i);
            
         //   document.getElementById("resultmessage").style.color= "red";
 	   // 	document.getElementById("resultmessage").innerHTML="The "+element.id+" length must be less than "+i+" characters";
           
           
           displayErrorMessageEx("The "+element.id+" length must be less than "+i+" characters");
         //alert("The "+element.id+" length must be less than "+i+" characters");
            element.focus();
            return false;
        }
        return true;
        
        
    }
 function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
} 


function formatPhoneForWebinarAfetr(element){str=new String(element.value);
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
  displayErrorMessageEx("Phone Number should be 10 characters");
 element.value=_return;
 element.value="";
 element.focus();
 return false;
 }else{if(num.length<13){//alert("Please give atleast  10 charcters in PhoneNumber");
         
  displayErrorMessageEx("Please give atleast  10 charcters in PhoneNumber");
 element.value="";
 }}}return _return;
 }



function employeeVerificationDatesValidation()
{
	
  var startDate= document.getElementById('startDate').value;
  var endDate= document.getElementById('endDate').value;
  var strDate = new Date(startDate);
  var eDate = new Date(endDate);
 if (strDate > eDate) {
	// alert("not valid......");
	 showAlertModal("Please ensure that the End Date is greater than or equal to the Start Date.");
	 return false;
	 
 }
  }
