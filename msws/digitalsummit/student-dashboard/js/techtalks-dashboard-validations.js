/**
 * 
 */

function checkDashboardIntrestes(obj){
	closeAlertMessage();
	if(obj.value!=""){
		if(obj.id=="primaryIntrest"){
			if(obj.value==$("#secondaryIntrest").val()){
				obj.value="";
				displayAlertMessage("Primary intrest and secondary intrest should be different!");
				//return false;
			}
		}
		if(obj.id=="secondaryIntrest"){
			if(obj.value==$("#primaryIntrest").val()){
				obj.value="";
				displayAlertMessage("Primary intrest and secondary intrest should be different!");
				//return false;
			}
		}
		//return true;
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


function loadDashBoardSubmit() {
	var primaryIntrest=$("#primaryIntrest").val().trim();
	var secondaryIntrest=$("#secondaryIntrest").val().trim();
	var comments=$("#comments").val().trim();
	
	var designation=$("#designation").val().trim();
	var attendeeType=$("#attendeeType").val().trim();
	
	if(primaryIntrest.length>0&&secondaryIntrest.length>0&&comments.length>0&&designation.length>0&&attendeeType.length>0){
		$("#btnTechTalkSubmit").button('loading');
		return true;
	}else {
		return false;
	}
}


function techTalksDashboardFieldLengthValidator(element) {
	
	closeAlertMessage();
    var i=0;
    var label="";
    
    if(element.id=="firstName")
    {
        i=60;
        label="First name"
    }else if(element.id=="lastName")
    {
        i=60;
        label="Last name"
    }else if(element.id=="mobileNumber")
    {
        i=15;
        label="Mobile Number"
    }else if(element.id=="altMobileNumber")
    {
        i=15;
        label="Alternate Mobile Number"
    }else if(element.id=="email")
    {
        i=100;
        label="Email Address"
    }else if(element.id=="designation")
    {
        i=30;
        label="Designation"
    }else if(element.id=="technologyArea")
    {
        i=15;
        label="Primary Interest "
    }else if(element.id=="useCaseArea")
    {
        i=15;
        label="Secondary Interest"
    }else if(element.id=="comments")
    {
        i=500;
        label="Comments"
    }else if(element.id=="street")
    {
        i=100;
        label="Street"
    }else if(element.id=="country")
    {
        i=10;
        label="Country"
    }else if(element.id=="state")
    {
        i=60;
        label="State"
    }else if(element.id=="district")
    {
        i=60;
        label="District"
    }else if(element.id=="postalCode")
    {
        i=10;
        label="Postal Code"
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
