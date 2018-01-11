/**
 * Author : Santosh Kola
 * Description : Validations for digital summit 2017 cultural registraion form
 * Date : 11/27/2017
 */


function collegeType(obj){
	if(obj.value=='Other'){
		$("#otherCollegeName").show();
		
	}else {
		$("#otherCollegeName").hide();
		$("#otherCollegeName").val("");
		
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

function loadCulturalSubmitButton(){
	closeAlertMessage();
	
	 var collegeName = $("#collegeName").val().trim();
	 var otherCollegeName = $("#otherCollegeName").val().trim();
	 var graduationBranch = $("#graduationBranch").val().trim();
	 var graduationYear = $("#graduationYear").val().trim();
	 
	 
	 var competitionName = $("#competitionName").val().trim();
	 var competitionType = $("#competitionType").val().trim();
	 var leaderName = $("#leaderName").val().trim();
	 var leaderEmail = $("#leaderEmail").val().trim();
	 var leaderPhoneNumber = $("#leaderPhoneNumber").val().trim();
	 var teamSize = $("#teamSize").val().trim();
	 var teamMemberNames = $("#teamMemberNames").val().trim();
	 var auditionLink = $("#auditionLink").val().trim();
	 var comments = $("#comments").val().trim();
	 
	 
	 
	 
	 
	 
	  if(collegeName.length==0){
		 displayAlertMessage("Please select college name!");
		 return false;
	 } else if(collegeName=="Other"&& otherCollegeName.length==0){
		 displayAlertMessage("Please enter other college name!");
		 return false;
	 }
	 else if(graduationBranch.length==0){
		 displayAlertMessage("Please select branch!");
		 return false;
	 }
	 else if(graduationYear.length==0){
		 displayAlertMessage("Please select graduation year!");
		 return false;
	 } else if(competitionName.length==0){
		 displayAlertMessage("Please select Performance!");
		 return false;
	 }
	 else if(competitionType.length==0){
		 displayAlertMessage("Please select type !");
		 return false;
	 }
	 else if(leaderName.length==0&&competitionType=="Group"){
		 displayAlertMessage("Please enter leader name!");
		 return false;
	 }
	 else if(leaderEmail.length==0&&competitionType=="Group"){
		 displayAlertMessage("Please enter leader email!");
		 return false;
	 }
	 else if(leaderPhoneNumber.length==0&&competitionType=="Group"){
		 displayAlertMessage("Please enter leader phone number!");
		 return false;
	 }else if(teamSize.length==0&&competitionType=="Group"){
		 displayAlertMessage("Please enter team size!");
		 return false;
	 }else if(teamMemberNames.length==0&&competitionType=="Group"){
		 displayAlertMessage("Please enter teammember names!");
		 return false;
	 }else if(auditionLink.length==0){
		 displayAlertMessage("Please enter audition url!");
		 return false;
	 }else if(comments.length==0){
		 displayAlertMessage("Please enter comments!");
		 return false;
	 }
	 
	 else {
		 $("#btnCulturalSubmit").button('loading');
			return true;
	 }
	 
	 
}



function checkEmail(element){
	//alert("hello.....");
	var email=element.value;
	//alert("emailLength-->"+email.length);
	//alert("length-->"+email.length);
	if(email.length>100){
		displayAlertMessage("The email length should be less than 100 characters.");
		element.value="";
        return(false);
	}
		if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(element.value)){return(true);
}element.value="";
//showAlertModal("Invalid E-mail Address! Please re-enter.");
//alert("Invalid E-mail Address! Please re-enter.");
displayAlertMessage("Invalid E-mail Address! Please re-enter");

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
        	displayAlertMessage("Phone Number should be 10 characters");
            element.value=_return;
            element.value="";
            element.focus();
            return false;
        }else{
            if(num.length<10){//alert("Please give atleast  10 charcters in PhoneNumber");
         
            	displayAlertMessage("Please give atleast  10 charcters in PhoneNumber");
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



function culturalFieldLengthValidator(element) {
	
	closeAlertMessage();
    var i=0;
    var label="";
    //New Change middlename
    /// alert("hai");
     if(element.id=="otherCollegeName")
    {
        i=100;
        label="College Name"
    }else if(element.id=="leaderName")
    {
        i=60;
        label="Leader Name"
    }else if(element.id=="leaderEmail")
    {
        i=100;
        label="Leader Email"
    }else if(element.id=="leaderPhoneNumber")
    {
        i=15;
        label="Leader Phone Number"
    }else if(element.id=="teamMemberNames")
    {
        i=500;
        label="Team Member Names"
    }else if(element.id=="auditionLink")
    {
        i=2000;
        label="Audition Link"
    }else if(element.id=="comments")
    {
        i=500;
        label="Comments"
    }
    
    
    
    
    
    
    
    
    if(element.value.replace(/^\s+|\s+$/g,"").length>i) {
        str=new String(element.value);
        element.value=str.substring(0,i);
        // showAlertModal("The "+element.id+" length must be less than "+i+" characters");
        // document.getElementById("alertMessage").innerHTML="The "+element.id+" length must be less than "+i+" characters";
        displayAlertMessage("The "+label+" length must be less than "+i+" characters");
        //alert("The "+element.id+" length must be less than "+i+" characters");
       // element.focus();
        element.focus();
        return false;
    }

  
    return true;
        
        
}



function isUrl(obj) {
    document.getElementById('resultMessage').innerHTML = '';
    var  url_validate = /(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/;
    var tempUrl=obj.value.trim();
    if(tempUrl.length==0){
        
        displayAlertMessage("Please enter the audition URL!");
        obj.value = '';
    // alert('error');
    }else if(!(url_validate.test(obj.value) && tempUrl.length>0)){
    	displayAlertMessage("Please enter valid url!");
        
        obj.value = '';
    // alert('error');
    }

}


function checkCompetitionType(obj){
	$("#leaderName").val("");
	$("#leaderEmail").val("");
	$("#leaderPhoneNumber").val("");
	$("#teamSize").val("");
	$("#teamMemberNames").val("");
	
	if(obj.value=="Group"){
		
		$("#leaderNameDiv").show();
		$("#leaderEmailDiv").show();
		$("#leaderPhoneNumberDiv").show();
		$("#teamSizeDivDiv").show();
		$("#teammemberNamesDiv").show();
	}else {
		
		$("#leaderNameDiv").hide();
		$("#leaderEmailDiv").hide();
		$("#leaderPhoneNumberDiv").hide();
		$("#teamSizeDivDiv").hide();
		$("#teammemberNamesDiv").hide();
		
		
	}
}
