

function fieldLengthValidator(element) {
	
	var i=0;
	 var label="";
	// alert("hai");
     //New Change middlename
        if(element.id=="ver_candidateName")
        {
        	//alert(element.id);
        	i=60;
        label="Candidate's Name"
        }if(element.id=="ver_employeeId")
        {i=60;
        label="Employee ID"
        }if(element.id=="ver_department")
        {i=60;
        label="Department"
        }if(element.id=="ver_lastDesignation")
        {i=60;
        label="Last Designation"
        }if(element.id=="ver_remuneration")
        {i=500;
        label="Remuneration"
        }if(element.id=="ver_lastHikePercentage")
        {i=60;
        label="Last Hike Percentage" 
        }if(element.id=="ver_reasonforLeaving")
        {i=200;  
        label="Reason for Leaving" 
        }if(element.id=="ver_eligibleforRehire")
        {i=200;
        label="Eligible for Rehire" 
        }if(element.id=="ver_natureofSeparation")
        {i=500;
        label="Nature of Separation (HR Comments)" 
        }if(element.id=="ver_additionalHRComments")
        {i=500;
        label="Additional HR Comments" 
        }if(element.id=="ver_skillSet")
        {i=500;
        label="Skill Set" 
        }
        
        
        
        
        if(element.value.replace(/^\s+|\s+$/g,"").length>i) {
            str=new String(element.value);
            element.value=str.substring(0,i);
            
         //   document.getElementById("resultmessage").style.color= "red";
 	   // 	document.getElementById("resultmessage").innerHTML="The "+element.id+" length must be less than "+i+" characters";
           
           
           showAlertModal("The "+label+" length must be less than "+i+" characters");
        // alert("The "+label+" length must be less than "+i+" characters");
            element.focus();
            return false;
        }
        return true;
        
        
    }



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

       
function checkdate(input){
	//alert("hii");
var validformat=/^\d{2}\/\d{2}\/\d{4}$/ //Basic check for format validity
var returnval=false
if (!validformat.test(input.value))
//alert("Invalid Date Format. Please correct and submit again.")
showAlertModal("Invalid Date Format. Please give correct date");
else{ //Detailed check for valid date ranges
var monthfield=input.value.split("/")[0]
var dayfield=input.value.split("/")[1]
var yearfield=input.value.split("/")[2]
var dayobj = new Date(yearfield, monthfield-1, dayfield)
if ((dayobj.getMonth()+1!=monthfield)||(dayobj.getDate()!=dayfield)||(dayobj.getFullYear()!=yearfield))
showAlertModal("Invalid Day, Month, or Year range detected. Please correct and submit again.");
else
returnval=true
}
if (returnval==false) input.select()
return returnval
	
}

	


function rejectReasonLengthvalidator(element) {
	
	closeRejectErrorMsg();
    var i=0;
  
    if(element.id=="rejectReason")
    {
    	   

        i=500;
       
    }
            
    if(element.value.replace(/^\s+|\s+$/g,"").length>i) {
        str=new String(element.value);
        element.value=str.substring(0,i);
        displayRejectErrorMessage("The length must be less than "+i+" characters");
        //showAlertModal("The length must be less than "+i+" characters");
        //document.getElementById("alertMessage").innerHTML="The "+element.id+" length must be less than "+i+" characters";
       
        //alert("The "+element.id+" length must be less than "+i+" characters");
        element.focus();
        return false;
    }
    return true;
        
        
}

function displayRejectErrorMessage(message){
    $("#rejectErrorMessage").html(message);
   // $("#RejectReason").show();
    
    document.getElementById("rejectReasonErrorMessageDiv").style.display='block';
}
function closeRejectErrorMsg() {
    $("#rejectErrorMessage").html("");
  //  $("#suggestEventValidationRow").hide();
    document.getElementById("rejectReasonErrorMessageDiv").style.display='none';
}

	