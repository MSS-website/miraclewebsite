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
        if(element.id=="firstname" || element.id=="lastname" )
        {i=60;
        }else if(element.id=="workPhone")
        {i=20;
        }else if(element.id=='organization' || element.id=='designation')
        {i=100;
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
    $("#resultMessageEX").html(message);
    $("#errorMsgDivEX").show();
}
function closeErrorMsg() {
    $("#resultMessageEX").html("");
    $("#errorMsgDivEX").hide();
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
 
 
 function checkResourceEmail(element){
  //  document.getElementById("errorMessage").innerHTML = "";
 // alert("element--"+element.value.length);
  if(element.value.length>60){
      displayErrorMessage("E-Mail Length must be less than 60 Characters.");
      element.value="";
      return(false);
  }
    closeErrorMsg();
    if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(element.value)){
       if(element.value.indexOf('@miraclesoft.com')== -1){
           if(element.value.indexOf('@gmail.com')== -1&&element.value.indexOf('@yahoo.com')== -1&&element.value.indexOf('@hotmail.com')== -1&&element.value.indexOf('@live.com')== -1&&element.value.indexOf('@outlook.com')== -1&&element.value.indexOf('@infosys.com')== -1&&element.value.indexOf('@hcl.com')== -1&&element.value.indexOf('@tcs.com')== -1&&element.value.indexOf('@wipro.com')== -1&&element.value.indexOf('@capgemini.com')== -1&&element.value.indexOf('@prolifichr.com')== -1&&element.value.indexOf('@open-logix.com')== -1){
               return(true);  
           }
            element.value="";
            displayErrorMessage("Please enter your corporate email!");
 //document.getElementById("errorMessage").innerHTML ="<font color=red size=2px>Please enter your corporate email!</font>";
           return(false);
       }
        element.value="";
       displayErrorMessage("Please login through employee sign in with hubble credentials .");
 //document.getElementById("errorMessage").innerHTML ="<font color=red size=2px>Please login through employee sign in with hubble credentials .</font>";
// showAlertModal("Invalid E-mail Address! Please re-enter.");
 //alert("Invalid E-mail Address! Please re-enter.");
 return(false);
       
    
 }element.value="";
 displayErrorMessage("Invalid E-mail Address! Please re-enter.");
// document.getElementById("errorMessage").innerHTML ="<font color=red size=2px>Invalid E-mail Address! Please re-enter.</font>";
// showAlertModal("Invalid E-mail Address! Please re-enter.");
 //alert("Invalid E-mail Address! Please re-enter.");
 return(false);
 }