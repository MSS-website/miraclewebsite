/**
 * Author : Santosh Kola Date : 11/13/2017 Description : Included all
 * validations related to citizenhack registration
 */

function addTeamDiv() {
	hideAllErrMessages();
	var currentTeamSize = $("#teamHiddenCount").val();
	
	if($("#teamCandidateName"+currentTeamSize).val().trim()==""){
	//	displayAlertMessage("Please enter Name "+currentTeamSize);
		document.getElementById("teamCandidateName"+currentTeamSize+"Err").innerHTML = "Please enter Name!";
		document.getElementById("teamCandidateName"+currentTeamSize+"Err").style.display = "block";
		$("#teamCandidateName"+currentTeamSize).focus();
		
		
	}else if($("#teamCandidateBranch"+currentTeamSize).val().trim()==""){
		
	//	displayAlertMessage("Please select branch "+currentTeamSize);
		
		document.getElementById("teamCandidateBranch"+currentTeamSize+"Err").innerHTML = "Please select branch!";
		document.getElementById("teamCandidateBranch"+currentTeamSize+"Err").style.display = "block";
		$("#teamCandidateBranch"+currentTeamSize).focus();
		
		
	}else if($("#teamCandidateYear"+currentTeamSize).val().trim()==""){
		//displayAlertMessage("Please select year "+currentTeamSize);
		document.getElementById("teamCandidateYear"+currentTeamSize+"Err").innerHTML = "Please select year!";
		document.getElementById("teamCandidateYear"+currentTeamSize+"Err").style.display = "block";
		$("#teamCandidateYear"+currentTeamSize).focus();
		
	}else if($("#teamContactNumber"+currentTeamSize).val().trim()==""){
		//displayAlertMessage("Please enter contact number "+currentTeamSize);
		
		document.getElementById("teamContactNumber"+currentTeamSize+"Err").innerHTML = "Please enter contact number!";
		document.getElementById("teamContactNumber"+currentTeamSize+"Err").style.display = "block";
		$("#teamContactNumber"+currentTeamSize).focus();
		
	}else if($("#teamCandidateEmailId"+currentTeamSize).val().trim()==""){
		//displayAlertMessage("Please enter emailId "+currentTeamSize);
		
		document.getElementById("teamCandidateEmailId"+currentTeamSize+"Err").innerHTML = "Please enter email!";
		document.getElementById("teamCandidateEmailId"+currentTeamSize+"Err").style.display = "block";
		$("#teamCandidateEmailId"+currentTeamSize).focus();
		
	}else {
	
	$("#teamDiv" + (parseInt(currentTeamSize) + 1)).show();
	$("#teamHiddenCount").val(parseInt(currentTeamSize) + 1);
	if (parseInt($("#teamHiddenCount").val()) == 4)
		$("#plusButton").hide();

	if (parseInt($("#teamHiddenCount").val()) > 1)
		$("#minusButton").show();
	}

}
function removeTeamDiv() {
	hideAllErrMessages();
	var currentTeamSize = $("#teamHiddenCount").val();
	
	$("#teamCandidateName"+currentTeamSize).val("")
	$("#teamCandidateBranch"+currentTeamSize).val("")
	$("#teamCandidateYear"+currentTeamSize).val("")
	$("#teamContactNumber"+currentTeamSize).val("")
	$("#teamCandidateEmailId"+currentTeamSize).val("")
	
	
	
	$("#teamDiv" + (currentTeamSize)).hide();
	$("#teamHiddenCount").val(parseInt(currentTeamSize) - 1);

	if (parseInt($("#teamHiddenCount").val()) == 1) {

		$("#minusButton").hide();
	}

	if (parseInt($("#teamHiddenCount").val()) < 4)
		$("#plusButton").show();

}

function closeAlertMessage() {

	$("#alertMessageDiv").hide();
	$("#alertMessageSpan").html("");

}

function displayAlertMessage(alertMessage) {
	$("#alertMessageDiv").show();
	$("#alertMessageSpan").html(alertMessage);
}




function checkBasicDetails() {
	closeAlertMessage();
	hideAllErrMessages();
	var firstName = $("#firstName").val().trim();
	var lastName = $("#lastName").val().trim();
	var mobileNumber = $("#mobileNumber").val().trim();
	var altMobileNumber = $("#altMobileNumber").val().trim();
	var email = $("#email").val().trim();
	var collegeName = $("#collegeName").val().trim();
	var graduationBranch = $("#graduationBranch").val().trim();
	var graduationYear = $("#graduationYear").val().trim();
	var aboutHim = $("#aboutHim").val().trim();
	var otherCollegeName = $("#otherCollegeName").val().trim();
	
	var gender = document.getElementsByName('gender');
	var isGenderSelected = false;
	for (var i = 0, length = gender.length; i < length; i++)
	{
	 if (gender[i].checked)
	 {
		 isGenderSelected = true;
	 
	  // do whatever you want with the checked radio
	  //alert(radios[i].value);
	  //selectRadio = radios[i].value;
	  // only one radio can be logically checked, don't check the rest
	  break;
	 }
	}
	
	if(firstName.length==0){
		//displayAlertMessage("Please enter first name!");
		document.getElementById("firstNameErr").innerHTML = "Please enter first name!";
		document.getElementById("firstNameErr").style.display = "block";
		//documnet.getElementById("firstName").focus();
		$("#firstName").focus();
		
	}else if(lastName.length==0){
		//displayAlertMessage("Please enter last name!");
		document.getElementById("lastNameErr").innerHTML = "Please enter last name!";
		 document.getElementById("lastNameErr").style.display = "block";
		 $("#lastName").focus();
	}else if(mobileNumber.length==0){
		//displayAlertMessage("Please enter mobile number!");
		document.getElementById("mobileNumberErr").innerHTML = "Please enter Mobile Number!";
		document.getElementById("mobileNumberErr").style.display = "block";
		$("#mobileNumber").focus();
	}else if(altMobileNumber.length==0){
		//displayAlertMessage("Please enter Alternative Mobile Number!");
		document.getElementById("altMobileNumberErr").innerHTML = "Please enter Alternate Mobile Number!";
		document.getElementById("altMobileNumberErr").style.display = "block";
		$("#altMobileNumber").focus();
		
	}else if(email.length==0){
		//displayAlertMessage("Please enter Email!");
		document.getElementById("emailErr").innerHTML = "Please enter email !";
		document.getElementById("emailErr").style.display = "block";
		$("#email").focus();
	}else if(!isGenderSelected){
		document.getElementById("genderErr").innerHTML = "Please select gender !";
		document.getElementById("genderErr").style.display = "block";
		//$("input.gender").focus();
		//document.forms["msform"].elements["gender"].focus();
		//document.msform.gender.focus(); 
		//displayAlertMessage("Please enter Email Address!");
	}else if(collegeName.length==0){
		//displayAlertMessage("Please enter College Name!");
		document.getElementById("collegeNameErr").innerHTML = "Please select college !";
		document.getElementById("collegeNameErr").style.display = "block";
		$("#collegeName").focus();
	}else if(collegeName=="Other" && otherCollegeName.length==0){
		
		//displayAlertMessage("Please enter Other College Name!");
		document.getElementById("otherCollegeNameErr").innerHTML = "Please enter college name!";
		document.getElementById("otherCollegeNameErr").style.display = "block";
		$("#collegeName").focus();
		
	}else if(graduationBranch.length==0){
		//displayAlertMessage("Please select Branch!");
		document.getElementById("graduationBranchErr").innerHTML = "Please select Branch !";
		document.getElementById("graduationBranchErr").style.display = "block";
		$("#graduationBranch").focus();
	}else if(graduationYear.length==0){
		//displayAlertMessage("Please select Year!");
		document.getElementById("graduationYearErr").innerHTML = "Please select Year !";
		document.getElementById("graduationYearErr").style.display = "block";
		$("#graduationYear").focus();
		
	}else if(aboutHim.length==0){
		//displayAlertMessage("Please enter Tell us a bit about yourself!");
		document.getElementById("aboutHimErr").innerHTML = "Please enter about your self!";
		document.getElementById("aboutHimErr").style.display = "block";
		$("#aboutHim").focus();
	}else{
		showAcadamicDetailsFieldSet();
	}
	
	
	
	
	
	/*
	if(firstName.length==0){
		displayAlertMessage("Please enter first name!");
	}else if(lastName.length==0){
		displayAlertMessage("Please enter last name!");
	}else if(mobileNumber.length==0){
		displayAlertMessage("Please enter mobile number!");
	}else if(altMobileNumber.length==0){
		displayAlertMessage("Please enter Alternative Mobile Number!");
	}else if(email.length==0){
		displayAlertMessage("Please enter Email!");
	}else if(collegeName.length==0){
		displayAlertMessage("Please enter College Name!");
	}else if(collegeName.length=="Other" && otherCollegeName.length==0){
		displayAlertMessage("Please enter Other College Name!");
	}else if(graduationBranch.length==0){
		displayAlertMessage("Please select Branch!");
	}else if(graduationYear.length==0){
		displayAlertMessage("Please select Year!");
	}else if(aboutHim.length==0){
		displayAlertMessage("Please enter Tell us a bit about yourself!");
	}else{
		showAcadamicDetailsFieldSet();
	}
	*/
}


function checkTeamdetails(optType){
	closeAlertMessage();
	hideAllErrMessages();
	if(optType=='P'){
		showbasicDetailsFieldSet();
	}else {
	
	var technologyArea = $("#technologyArea").val().trim();
	var useCaseArea = $("#useCaseArea").val().trim();
	
	var teamCandidateName1 = $("#teamCandidateName1").val().trim();
	var teamCandidateBranch1 = $("#teamCandidateBranch1").val().trim();
	var teamCandidateYear1 = $("#teamCandidateYear1").val().trim();
	var teamContactNumber1 = $("#teamContactNumber1").val().trim();
	var teamCandidateEmailId1 = $("#teamCandidateEmailId1").val().trim();
	
	var teamCandidateName2 = $("#teamCandidateName2").val().trim();
	var teamCandidateBranch2 = $("#teamCandidateBranch2").val().trim();
	var teamCandidateYear2 = $("#teamCandidateYear2").val().trim();
	var teamContactNumber2 = $("#teamContactNumber2").val().trim();
	var teamCandidateEmailId2 = $("#teamCandidateEmailId2").val().trim();
	
	var teamCandidateName3 = $("#teamCandidateName3").val().trim();
	var teamCandidateBranch3 = $("#teamCandidateBranch3").val().trim();
	var teamCandidateYear3 = $("#teamCandidateYear3").val().trim();
	var teamContactNumber3 = $("#teamContactNumber3").val().trim();
	var teamCandidateEmailId3 = $("#teamCandidateEmailId3").val().trim();
	
	
	var teamCandidateName4 = $("#teamCandidateName4").val().trim();
	var teamCandidateBranch4 = $("#teamCandidateBranch4").val().trim();
	var teamCandidateYear4 = $("#teamCandidateYear4").val().trim();
	var teamContactNumber4 = $("#teamContactNumber4").val().trim();
	var teamCandidateEmailId4 = $("#teamCandidateEmailId4").val().trim();
	
	
	
	var teamHiddenCount = $("#teamHiddenCount").val();
	var technicalExpertise = $("#technicalExpertise").val().trim();
	var whyAreYouTheBest = $("#whyAreYouTheBest").val().trim();
	
	
	 if(technologyArea.length==0){
			
			//displayAlertMessage("Please select Technology Area!");
			document.getElementById("technologyAreaErr").innerHTML = "Please select Technology Area!";
			document.getElementById("technologyAreaErr").style.display = "block";
			$("#technologyArea").focus();
			
		}else if(useCaseArea.length==0){
			//displayAlertMessage("Please select Use Case Area!");
			document.getElementById("useCaseAreaErr").innerHTML = "Please select Use Case Area!";
			document.getElementById("useCaseAreaErr").style.display = "block";
			$("#useCaseArea").focus();
			
		}else if(teamCandidateName1.length==0){
			//displayAlertMessage("Please select Name1!");
			document.getElementById("teamCandidateName1Err").innerHTML = "Please enter Name!";
			document.getElementById("teamCandidateName1Err").style.display = "block";
			$("#teamCandidateName1").focus();
			
		}else if(teamCandidateBranch1.length==0){
			//displayAlertMessage("Please enter Candidate Branch1!");
			
			document.getElementById("teamCandidateBranch1Err").innerHTML = "Please select branch!";
			document.getElementById("teamCandidateBranch1Err").style.display = "block";
			$("#teamCandidateBranch1").focus();
		}else if(teamCandidateYear1.length==0){
			//displayAlertMessage("Please select Team memeber1 Year!");
			document.getElementById("teamCandidateYear1Err").innerHTML = "Please select year!";
			document.getElementById("teamCandidateYear1Err").style.display = "block";
			$("#teamCandidateYear1").focus();
		}else if(teamContactNumber1.length==0){
			//displayAlertMessage("Please enter Team memeber1 contact number!");
			document.getElementById("teamContactNumber1Err").innerHTML = "Please enter contact number!";
			document.getElementById("teamContactNumber1Err").style.display = "block";
			$("#teamContactNumber1").focus();
			
		}else if(teamCandidateEmailId1.length==0){
			//displayAlertMessage("Please enter Team memeber1 Email!");
			document.getElementById("teamCandidateEmailId1Err").innerHTML = "Please enter email!";
			document.getElementById("teamCandidateEmailId1Err").style.display = "block";
			$("#teamCandidateEmailId1").focus();
			
		}else if(teamCandidateName2.length==0 && parseInt(teamHiddenCount,10)>1){
			//displayAlertMessage("Please select Name2!");
			document.getElementById("teamCandidateName2Err").innerHTML = "Please enter Name!";
			document.getElementById("teamCandidateName2Err").style.display = "block";
			$("#teamCandidateName2").focus();
			
			
		}else if(teamCandidateBranch2.length==0 && parseInt(teamHiddenCount,10)>1){
			//displayAlertMessage("Please enter Candidate Branch2!");
			document.getElementById("teamCandidateBranch2Err").innerHTML = "Please select branch!";
			document.getElementById("teamCandidateBranch2Err").style.display = "block";
			$("#teamCandidateBranch2").focus();
			
			
		}else if(teamCandidateYear2.length==0 && parseInt(teamHiddenCount,10)>1 ){
			//displayAlertMessage("Please select Team memeber2 Year!");
			document.getElementById("teamCandidateYear2Err").innerHTML = "Please select year!";
			document.getElementById("teamCandidateYear2Err").style.display = "block";
			$("#teamCandidateYear2").focus();
			
			
		}else if(teamContactNumber2.length==0 && parseInt(teamHiddenCount,10)>1 ){
			//displayAlertMessage("Please enter Team memeber2 contact number!");
			document.getElementById("teamContactNumber2Err").innerHTML = "Please enter contact number!";
			document.getElementById("teamContactNumber2Err").style.display = "block";
			$("#teamContactNumber2").focus();
			
		}else if(teamCandidateEmailId2.length==0 && parseInt(teamHiddenCount,10)>1 ){
			//displayAlertMessage("Please enter Team memeber2 Email!");
			document.getElementById("teamCandidateEmailId2Err").innerHTML = "Please enter email!";
			document.getElementById("teamCandidateEmailId2Err").style.display = "block";
			$("#teamCandidateEmailId2").focus();
			
		}else if(teamCandidateName3.length==0 && parseInt(teamHiddenCount,10)>2){
			//displayAlertMessage("Please select Name3!");
			document.getElementById("teamCandidateName3Err").innerHTML = "Please enter Name!";
			document.getElementById("teamCandidateName3Err").style.display = "block";
			$("#teamCandidateName3").focus();
			
			
		}else if(teamCandidateBranch3.length==0 && parseInt(teamHiddenCount,10)>2){
			//displayAlertMessage("Please enter Candidate Branch3!");
			document.getElementById("teamCandidateBranch3Err").innerHTML = "Please select branch!";
			document.getElementById("teamCandidateBranch3Err").style.display = "block";
			$("#teamCandidateBranch3").focus();
			
		}else if(teamCandidateYear3.length==0 && parseInt(teamHiddenCount,10)>2 ){
			//displayAlertMessage("Please select Team memeber3 Year!");
			document.getElementById("teamCandidateYear3Err").innerHTML = "Please select year!";
			document.getElementById("teamCandidateYear3Err").style.display = "block";
			$("#teamCandidateYear3").focus();
			
		}else if(teamContactNumber3.length==0 && parseInt(teamHiddenCount,10)>2 ){
			//displayAlertMessage("Please enter Team memeber3 contact number!");
			
			document.getElementById("teamContactNumber3Err").innerHTML = "Please enter contact number!";
			document.getElementById("teamContactNumber3Err").style.display = "block";
			$("#teamContactNumber3").focus();
		}else if(teamCandidateEmailId3.length==0 && parseInt(teamHiddenCount,10)>2 ){
			//displayAlertMessage("Please enter Team memeber3 Email!");
			
			document.getElementById("teamCandidateEmailId3Err").innerHTML = "Please enter email!";
			document.getElementById("teamCandidateEmailId3Err").style.display = "block";
			$("#teamCandidateEmailId3").focus();
		}
		else if(teamCandidateName4.length==0 && parseInt(teamHiddenCount,10)>3){
			//displayAlertMessage("Please select Name4!");
			document.getElementById("teamCandidateName4Err").innerHTML = "Please enter Name!";
			document.getElementById("teamCandidateName4Err").style.display = "block";
			$("#teamCandidateName4").focus();
			
		}else if(teamCandidateBranch4.length==0 && parseInt(teamHiddenCount,10)>3){
			//displayAlertMessage("Please enter Candidate Branch4!");
			document.getElementById("teamCandidateBranch4Err").innerHTML = "Please select branch!";
			document.getElementById("teamCandidateBranch4Err").style.display = "block";
			$("#teamCandidateBranch4").focus();
			
		}else if(teamCandidateYear4.length==0 && parseInt(teamHiddenCount,10)>3 ){
			//displayAlertMessage("Please select Team memeber4 Year!");
			document.getElementById("teamCandidateYear4Err").innerHTML = "Please select year!";
			document.getElementById("teamCandidateYear4Err").style.display = "block";
			$("#teamCandidateYear4").focus();
			
		}else if(teamContactNumber4.length==0 && parseInt(teamHiddenCount,10)>3 ){
			//displayAlertMessage("Please enter Team memeber4 contact number!");
			document.getElementById("teamContactNumber4Err").innerHTML = "Please enter contact number!";
			document.getElementById("teamContactNumber4Err").style.display = "block";
			$("#teamContactNumber4").focus();
			
		}else if(teamCandidateEmailId4.length==0 && parseInt(teamHiddenCount,10)>3 ){
			//displayAlertMessage("Please enter Team memeber4 Email!");
			document.getElementById("teamCandidateEmailId4Err").innerHTML = "Please enter email!";
			document.getElementById("teamCandidateEmailId4Err").style.display = "block";
			$("#teamCandidateEmailId4").focus();
		}
		else if(technicalExpertise.length==0){
			//displayAlertMessage("Please enter Technical Expertise!");
			document.getElementById("technicalExpertiseErr").innerHTML = "Please enter Technical Expertise!";
			document.getElementById("technicalExpertiseErr").style.display = "block";
			$("#technicalExpertise").focus();
		}
		else if(whyAreYouTheBest.length==0){
			//displayAlertMessage("Please enter Why are you the best!");
			document.getElementById("whyAreYouTheBestErr").innerHTML = "Please enter Why are you the best!";
			document.getElementById("whyAreYouTheBestErr").style.display = "block";
			$("#whyAreYouTheBest").focus();
			
		}else {
			showAddressDetailsFieldSet();
		}
		
		}


	
	
	/*
	
	if(technologyArea.length==0){
		displayAlertMessage("Please select Technology Area!");
	}else if(useCaseArea.length==0){
		displayAlertMessage("Please select Use Case Area!");
	}else if(teamCandidateName1.length==0){
		displayAlertMessage("Please select Name1!");
	}else if(teamCandidateBranch1.length==0){
		displayAlertMessage("Please enter Candidate Branch1!");
	}else if(teamCandidateYear1.length==0){
		displayAlertMessage("Please select Team memeber1 Year!");
	}else if(teamContactNumber1.length==0){
		displayAlertMessage("Please enter Team memeber1 contact number!");
	}else if(teamCandidateEmailId1.length==0){
		displayAlertMessage("Please enter Team memeber1 Email!");
	}else if(teamCandidateName2.length==0 && parseInt(teamHiddenCount,10)>1){
		displayAlertMessage("Please select Name2!");
	}else if(teamCandidateBranch2.length==0 && parseInt(teamHiddenCount,10)>1){
		displayAlertMessage("Please enter Candidate Branch2!");
	}else if(teamCandidateYear2.length==0 && parseInt(teamHiddenCount,10)>1 ){
		displayAlertMessage("Please select Team memeber2 Year!");
	}else if(teamContactNumber2.length==0 && parseInt(teamHiddenCount,10)>1 ){
		displayAlertMessage("Please enter Team memeber2 contact number!");
	}else if(teamCandidateEmailId2.length==0 && parseInt(teamHiddenCount,10)>1 ){
		displayAlertMessage("Please enter Team memeber2 Email!");
	}else if(teamCandidateName3.length==0 && parseInt(teamHiddenCount,10)>2){
		displayAlertMessage("Please select Name3!");
	}else if(teamCandidateBranch3.length==0 && parseInt(teamHiddenCount,10)>2){
		displayAlertMessage("Please enter Candidate Branch3!");
	}else if(teamCandidateYear3.length==0 && parseInt(teamHiddenCount,10)>2 ){
		displayAlertMessage("Please select Team memeber3 Year!");
	}else if(teamContactNumber3.length==0 && parseInt(teamHiddenCount,10)>2 ){
		displayAlertMessage("Please enter Team memeber3 contact number!");
	}else if(teamCandidateEmailId3.length==0 && parseInt(teamHiddenCount,10)>2 ){
		displayAlertMessage("Please enter Team memeber3 Email!");
	}
	else if(teamCandidateName4.length==0 && parseInt(teamHiddenCount,10)>3){
		displayAlertMessage("Please select Name4!");
	}else if(teamCandidateBranch4.length==0 && parseInt(teamHiddenCount,10)>3){
		displayAlertMessage("Please enter Candidate Branch4!");
	}else if(teamCandidateYear4.length==0 && parseInt(teamHiddenCount,10)>3 ){
		displayAlertMessage("Please select Team memeber4 Year!");
	}else if(teamContactNumber4.length==0 && parseInt(teamHiddenCount,10)>3 ){
		displayAlertMessage("Please enter Team memeber4 contact number!");
	}else if(teamCandidateEmailId4.length==0 && parseInt(teamHiddenCount,10)>3 ){
		displayAlertMessage("Please enter Team memeber4 Email!");
	}
	else if(technicalExpertise.length==0){
		displayAlertMessage("Please enter Technical Expertise!");
	}
	else if(whyAreYouTheBest.length==0){
		displayAlertMessage("Please enter Why are you the best!");
	}else {
		showAddressDetailsFieldSet();
	}
	
	}*/
	
}


function checkAddressDetails(optType) {
	
	closeAlertMessage();
	hideAllErrMessages();
	if(optType=='S'){
	var street = $("#street").val();
	var state = $("#state").val();
	var district = $("#district").val();
	var postalCode = $("#postalCode").val();
	var captcha_code = $("#captcha_code").val();
	
	
	if(street.length==0){
		//displayAlertMessage("Please enter street details!");
		document.getElementById("streetErr").innerHTML = "Please enter Street!";
		document.getElementById("streetErr").style.display = "block";
		$("#street").focus();
		return false;
	}else if(state.length==0){
		//displayAlertMessage("Please select State!");
		document.getElementById("stateErr").innerHTML = "Please select State name!";
		document.getElementById("stateErr").style.display = "block";
		$("#state").focus();
		return false;
	}else if(district.length==0){
		//displayAlertMessage("Please select District!");
		document.getElementById("districtErr").innerHTML = "Please select district name!";
		document.getElementById("districtErr").style.display = "block";
		$("#district").focus();
		return false;
	}else if(postalCode.length==0){
		//displayAlertMessage("Please enter Postal Code!");
		document.getElementById("postalCodeErr").innerHTML = "Please enter Postal Code!";
		document.getElementById("postalCodeErr").style.display = "block";
		$("#postalCode").focus();
		return false;
	}else if(captcha_code.length==0){
		//displayAlertMessage("Please enter Captcha Code!");
		document.getElementById("captcha_codeErr").innerHTML = "Please enter Captcha!";
		document.getElementById("captcha_codeErr").style.display = "block";
		$("#captcha_code").focus();
		return false;
	}else {
		
		$("#btnCitizenSubmit").button('loading');
		$("#addressPreviousButton").attr("disabled", true);
		
		return true;
	}
	
	
	}else {
		showAcadamicDetailsFieldSet();
	}
	
	
	/*
	
	if(street.length==0){
		displayAlertMessage("Please enter street details!");
		return false;
	}else if(state.length==0){
		displayAlertMessage("Please select State!");
		return false;
	}else if(district.length==0){
		displayAlertMessage("Please select District!");
		return false;
	}else if(postalCode.length==0){
		displayAlertMessage("Please enter Postal Code!");
		return false;
	}else if(captcha_code.length==0){
		displayAlertMessage("Please enter Captcha Code!");
		return false;
	}else {
		
		$("#btnCitizenSubmit").button('loading');
		$("#addressPreviousButton").attr("disabled", true);
		
		return true;
	}
	
	
	}else {
		showAcadamicDetailsFieldSet();
	}*/
	
	
	
	
}



function collegeType(obj){
	if(obj.value=='Other'){
		$("#otherCollegeName").show();
		
	}else {
		$("#otherCollegeName").hide();
		$("#otherCollegeName").val("");
		
	}
}




function citizenFieldLengthValidator(element) {
	
	closeAlertMessage();
    var i=0;
    var label="";
    //New Change middlename
    /// alert("hai");
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
        label="Alternative Mobile Number"
    }else if(element.id=="email")
    {
        i=100;
        label="Email"
    }else if(element.id=="otherCollegeName")
    {
        i=100;
        label="College Name"
    }else if(element.id=="aboutHim")
    {
        i=500;
        label="Tell us a bit about yourself"
    }else if(element.id=="teamCandidateName1")
    {
        i=60;
        label="Candidate Name 1"
    }else if(element.id=="teamCandidateBranch1")
    {
        i=10;
        label="Candidate Branch 1"
    }else if(element.id=="teamContactNumber1")
    {
        i=15;
        label="Contact Number 1"
    }else if(element.id=="teamCandidateEmailId1")
    {
        i=100;
        label="Candidate Email 1"
    }else if(element.id=="teamCandidateName2")
    {
        i=60;
        label="Candidate Name 2"
    }else if(element.id=="teamCandidateBranch2")
    {
        i=10;
        label="Candidate Branch 2"
    }else if(element.id=="teamContactNumber2")
    {
        i=15;
        label="Contact Number 2"
    }else if(element.id=="teamCandidateEmailId2")
    {
        i=100;
        label="Candidate Email 2"
    }else if(element.id=="teamCandidateName3")
    {
        i=60;
        label="Candidate Name 3"
    }else if(element.id=="teamCandidateBranch3")
    {
        i=60;
        label="Candidate Branch 3"
    }else if(element.id=="teamContactNumber3")
    {
        i=15;
        label="Contact number 3"
    }else if(element.id=="teamCandidateEmailId3")
    {
        i=100;
        label="Candidate Email 3"
    }else if(element.id=="teamCandidateName4")
    {
        i=60;
        label="Candidate name 4"
    }else if(element.id=="teamCandidateBranch4")
    {
        i=10;
        label="Candidate Branch 4"
    }else if(element.id=="teamContactNumber4")
    {
        i=15;
        label="Contact number 4"
    }else if(element.id=="teamCandidateEmailId4")
    {
        i=100;
        label="Candidate Email 4"
    }else if(element.id=="technicalExpertise")
    {
        i=500;
        label="Technical Expertise"
    }else if(element.id=="whyAreYouTheBest")
    {
        i=500;
        label="Why are you the best"
    }else if(element.id=="street")
    {
        i=60;
        label="Street"
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
       // displayAlertMessage("The "+label+" length must be less than "+i+" characters");
        //alert("The "+element.id+" length must be less than "+i+" characters");
       // element.focus();
        if(element.id=="firstName")
        {
        	document.getElementById("firstNameErr").innerHTML = "The "+label+" length must be less than "+i+" characters";
    		document.getElementById("firstNameErr").style.display = "block";
    		$("#firstName").focus();
          
        }else if(element.id=="lastName")
        {
        	document.getElementById("lastNameErr").innerHTML = "The "+label+" length must be less than "+i+" characters";
    		document.getElementById("lastNameErr").style.display = "block";
    		//$("#lastName").focus();
        }else if(element.id=="mobileNumber")
        {
        	document.getElementById("mobileNumberErr").innerHTML = "The "+label+" length must be less than "+i+" characters";
    		document.getElementById("mobileNumberErr").style.display = "block";
    		$("#mobileNumber").focus();
           
        }else if(element.id=="altMobileNumber")
        {
        	document.getElementById("altMobileNumberErr").innerHTML = "The "+label+" length must be less than "+i+" characters";
    		document.getElementById("altMobileNumberErr").style.display = "block";
    		$("#altMobileNumber").focus();
        }else if(element.id=="email")
        {
        	document.getElementById("emailErr").innerHTML = "The "+label+" length must be less than "+i+" characters";
    		document.getElementById("emailErr").style.display = "block";
    		$("#email").focus();
           
        }else if(element.id=="otherCollegeName")
        {
        	document.getElementById("otherCollegeNameErr").innerHTML = "The "+label+" length must be less than "+i+" characters";
    		document.getElementById("otherCollegeNameErr").style.display = "block";
    		$("#otherCollegeName").focus();
           
        }else if(element.id=="aboutHim")
        {
        	document.getElementById("aboutHimErr").innerHTML = "The "+label+" length must be less than "+i+" characters";
    		document.getElementById("aboutHimErr").style.display = "block";
    		$("#aboutHim").focus();
           
        }else if(element.id=="teamCandidateName1")
        {
        	document.getElementById("teamCandidateName1Err").innerHTML = "The "+label+" length must be less than "+i+" characters";
    		document.getElementById("teamCandidateName1Err").style.display = "block";
    		$("#teamCandidateName1").focus();
           
        }else if(element.id=="teamCandidateBranch1")
        {
        	document.getElementById("teamCandidateBranch1Err").innerHTML = "The "+label+" length must be less than "+i+" characters";
    		document.getElementById("teamCandidateBranch1Err").style.display = "block";
    		$("#teamCandidateBranch1").focus();
           
        }else if(element.id=="teamContactNumber1")
        {
        	document.getElementById("teamContactNumber1Err").innerHTML = "The "+label+" length must be less than "+i+" characters";
    		document.getElementById("teamContactNumber1Err").style.display = "block";
    		$("#teamContactNumber1").focus();
           
        }else if(element.id=="teamCandidateEmailId1")
        {
        	document.getElementById("teamCandidateEmailId1Err").innerHTML = "The "+label+" length must be less than "+i+" characters";
    		document.getElementById("teamCandidateEmailId1Err").style.display = "block";
    		$("#teamCandidateEmailId1").focus();
           
        }
        
    else if(element.id=="teamCandidateName2")
    {
    	document.getElementById("teamCandidateName2Err").innerHTML = "The "+label+" length must be less than "+i+" characters";
		document.getElementById("teamCandidateName2Err").style.display = "block";
		$("#teamCandidateName2").focus();
       
    }else if(element.id=="teamCandidateBranch2")
    {
    	document.getElementById("teamCandidateBranch2Err").innerHTML = "The "+label+" length must be less than "+i+" characters";
		document.getElementById("teamCandidateBranch2Err").style.display = "block";
		$("#teamCandidateBranch2").focus();
       
    }else if(element.id=="teamContactNumber2")
    {
    	document.getElementById("teamContactNumber2Err").innerHTML = "The "+label+" length must be less than "+i+" characters";
		document.getElementById("teamContactNumber2Err").style.display = "block";
		$("#teamContactNumber2").focus();
       
    }else if(element.id=="teamCandidateEmailId2")
    {
    	document.getElementById("teamCandidateEmailId2Err").innerHTML = "The "+label+" length must be less than "+i+" characters";
		document.getElementById("teamCandidateEmailId2Err").style.display = "block";
		$("#teamCandidateEmailId2").focus();
       
    }
        
    else if(element.id=="teamCandidateName3")
    {
    	document.getElementById("teamCandidateName3Err").innerHTML = "The "+label+" length must be less than "+i+" characters";
		document.getElementById("teamCandidateName3Err").style.display = "block";
		$("#teamCandidateName3").focus();
       
    }else if(element.id=="teamCandidateBranch3")
    {
    	document.getElementById("teamCandidateBranch3Err").innerHTML = "The "+label+" length must be less than "+i+" characters";
		document.getElementById("teamCandidateBranch3Err").style.display = "block";
		$("#teamCandidateBranch3").focus();
       
    }else if(element.id=="teamContactNumber3")
    {
    	document.getElementById("teamContactNumber3Err").innerHTML = "The "+label+" length must be less than "+i+" characters";
		document.getElementById("teamContactNumber3Err").style.display = "block";
		$("#teamContactNumber3").focus();
       
    }else if(element.id=="teamCandidateEmailId3")
    {
    	document.getElementById("teamCandidateEmailId3Err").innerHTML = "The "+label+" length must be less than "+i+" characters";
		document.getElementById("teamCandidateEmailId3Err").style.display = "block";
		$("#teamCandidateEmailId3").focus();
       
    }
        
    else if(element.id=="teamCandidateName4")
    {
    	document.getElementById("teamCandidateName4Err").innerHTML = "The "+label+" length must be less than "+i+" characters";
		document.getElementById("teamCandidateName4Err").style.display = "block";
		$("#teamCandidateName4").focus();
       
    }else if(element.id=="teamCandidateBranch4")
    {
    	document.getElementById("teamCandidateBranch4Err").innerHTML = "The "+label+" length must be less than "+i+" characters";
		document.getElementById("teamCandidateBranch4Err").style.display = "block";
		$("#teamCandidateBranch4").focus();
       
    }else if(element.id=="teamContactNumber4")
    {
    	document.getElementById("teamContactNumber4Err").innerHTML = "The "+label+" length must be less than "+i+" characters";
		document.getElementById("teamContactNumber4Err").style.display = "block";
		$("#teamContactNumber4").focus();
       
    }else if(element.id=="teamCandidateEmailId4")
    {
    	document.getElementById("teamCandidateEmailId4Err").innerHTML = "The "+label+" length must be less than "+i+" characters";
		document.getElementById("teamCandidateEmailId4Err").style.display = "block";
		$("#teamCandidateEmailId4").focus();
       
    }
        
    else if(element.id=="technicalExpertise")
    {
    	document.getElementById("technicalExpertiseErr").innerHTML = "The "+label+" length must be less than "+i+" characters";
		document.getElementById("technicalExpertiseErr").style.display = "block";
		$("#technicalExpertise").focus();
       
    } else if(element.id=="whyAreYouTheBest")
    {
    	document.getElementById("whyAreYouTheBestErr").innerHTML = "The "+label+" length must be less than "+i+" characters";
		document.getElementById("whyAreYouTheBestErr").style.display = "block";
		$("#whyAreYouTheBest").focus();
       
    }
        else if(element.id=="street")
        {
        	document.getElementById("streetErr").innerHTML = "The "+label+" length must be less than "+i+" characters";
    		document.getElementById("streetErr").style.display = "block";
    		$("#street").focus();
           
        }else if(element.id=="postalCode")
        {
        	document.getElementById("postalCodeErr").innerHTML = "The "+label+" length must be less than "+i+" characters";
    		document.getElementById("postalCodeErr").style.display = "block";
    		$("#postalCode").focus();
           
        }
        
        element.focus();
        return false;
    }


 
        
  
    return true;
        
        
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
	    	  //displayAlertMessage("Phone Number should be 10 characters");
	    	  if(element.id=="mobileNumber"){
	    	  document.getElementById("mobileNumberErr").innerHTML = "Mobile Number should be 10 digits";
	  		  document.getElementById("mobileNumberErr").style.display = "block";
	  		$("#mobileNumber").focus();
	    	  }
	    	  if(element.id=="altMobileNumber"){  
	        	  document.getElementById("altMobileNumberErr").innerHTML = "Alternate Mobile Number should be 10 digits";
	      		  document.getElementById("altMobileNumberErr").style.display = "block";
	      		  $("#altMobileNumber").focus();
	        	  }
	    	  
	    	  if(element.id=="teamContactNumber1"){  
          	  document.getElementById("teamContactNumber1Err").innerHTML = "Contact Number should be 10 digits";
        		  document.getElementById("teamContactNumber1Err").style.display = "block";
        		  $("#teamContactNumber1").focus();
          	  }
      	  
	    	  if(element.id=="teamContactNumber2"){  
          	  document.getElementById("teamContactNumber2Err").innerHTML = "Contact Number should be 10 digits";
        		  document.getElementById("teamContactNumber2Err").style.display = "block";
        		  $("#teamContactNumber2").focus();
          	  }
	    	  if(element.id=="teamContactNumber3"){  
          	  document.getElementById("teamContactNumber3Err").innerHTML = "Contact Number should be 10 digits";
        		  document.getElementById("teamContactNumber3Err").style.display = "block";
        		  $("#teamContactNumber3").focus();
          	  }
	    	  if(element.id=="teamContactNumber4"){  
          	  document.getElementById("teamContactNumber4Err").innerHTML = "Contact Number should be 10 digits";
        		  document.getElementById("teamContactNumber4Err").style.display = "block";
        		  $("#teamContactNumber4").focus();
          	  }
	        
	          element.value="";
	          element.focus();
	          return false;
	      }else{
	          if(num.length<10){//alert("Please give atleast  10 charcters in PhoneNumber");
	       
	        	  //displayAlertMessage("Please give atleast  10 charcters in PhoneNumber");
	        	  if(element.id=="mobileNumber"){
	            	  document.getElementById("mobileNumberErr").innerHTML = "Mobile Number should be 10 digits";
	          		  document.getElementById("mobileNumberErr").style.display = "block";
	          		  $("#mobileNumber").focus();
	            	  }
	        	  if(element.id=="altMobileNumber"){  
	            	  document.getElementById("altMobileNumberErr").innerHTML = "Alternate Mobile Number should be 10 digits";
	          		  document.getElementById("altMobileNumberErr").style.display = "block";
	          		  $("#altMobileNumber").focus();
	            	  }
	        	  
	        	  if(element.id=="teamContactNumber1"){  
	            	  document.getElementById("teamContactNumber1Err").innerHTML = "Contact Number should be 10 digits";
	          		  document.getElementById("teamContactNumber1Err").style.display = "block";
	          		  $("#teamContactNumber1").focus();
	            	  }
	        	  
	        	  if(element.id=="teamContactNumber2"){  
	            	  document.getElementById("teamContactNumber2Err").innerHTML = "Contact Number should be 10 digits";
	          		  document.getElementById("teamContactNumber2Err").style.display = "block";
	          		  $("#teamContactNumber2").focus();
	            	  }
	        	  if(element.id=="teamContactNumber3"){  
	            	  document.getElementById("teamContactNumber3Err").innerHTML = "Contact Number should be 10 digits";
	          		  document.getElementById("teamContactNumber3Err").style.display = "block";
	          		  $("#teamContactNumber3").focus();
	            	  }
	        	  if(element.id=="teamContactNumber4"){  
	            	  document.getElementById("teamContactNumber4Err").innerHTML = "Contact Number should be 10 digits";
	          		  document.getElementById("teamContactNumber4Err").style.display = "block";
	          		  $("#teamContactNumber4").focus();
	            	  }
	        	  
	              element.value="";
	              return false;
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
function checkEmail(element){
	var emaill=element.value;
	var emailLength=emaill.length;
	//alert("emaill-->"+emaill);
	//alert("length-->"+emailLength);
	if(emailLength>100){
		element.value="";
		//displayAlertMessage("Email id length should be less than 100 characters");
		//alert("Invalid E-mail Address! Please re-enter.");
		if(element.id=="email"){
			//alert("email-->");
		document.getElementById("emailErr").innerHTML = "Email id length should be less than 100 characters";
		document.getElementById("emailErr").style.display = "block";
		$("#email").focus();
		}
		 if(element.id=="teamCandidateEmailId1"){
			 //alet("teamCandidateEmailId1");
			document.getElementById("teamCandidateEmailId1Err").innerHTML = "Email id length should be less than 100 characters";
			document.getElementById("teamCandidateEmailId1Err").style.display = "block";
			$("#teamCandidateEmailId1").focus();
			
		} if(element.id=="teamCandidateEmailId2"){
			document.getElementById("teamCandidateEmailId2Err").innerHTML = "Email id length should be less than 100 characters";
			document.getElementById("teamCandidateEmailId2Err").style.display = "block";
			$("#teamCandidateEmailId2").focus();
			
		} if(element.id=="teamCandidateEmailId3"){
			document.getElementById("teamCandidateEmailId3Err").innerHTML = "Email id length should be less than 100 characters";
			document.getElementById("teamCandidateEmailId3Err").style.display = "block";
			$("#teamCandidateEmailId3").focus();
			
		} if(element.id=="teamCandidateEmailId4"){
			document.getElementById("teamCandidateEmailId4Err").innerHTML = "Email id length should be less than 100 characters";
			document.getElementById("teamCandidateEmailId4Err").style.display = "block";
			$("#teamCandidateEmailId4").focus();
			
		}
		
	}
	
if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(element.value)){return(true);
}element.value="";
//displayAlertMessage("Invalid E-mail Address! Please re-enter.");
if(element.id=="email"){
	
	document.getElementById("emailErr").innerHTML = "Invalid E-mail Address! Please re-enter.";
	document.getElementById("emailErr").style.display = "block";
	$("#email").focus();
	//return(false);
	}
 if(element.id=="teamCandidateEmailId1"){
		
		document.getElementById("teamCandidateEmailId1Err").innerHTML = "Invalid E-mail Address! Please re-enter.";
		document.getElementById("teamCandidateEmailId1Err").style.display = "block";
		$("#teamCandidateEmailId1").focus();
		//return(false);
		
	}else if(element.id=="teamCandidateEmailId2"){
		document.getElementById("teamCandidateEmailId2Err").innerHTML = "Invalid E-mail Address! Please re-enter.";
		document.getElementById("teamCandidateEmailId2Err").style.display = "block";
		$("#teamCandidateEmailId2").focus();
		
	}else if(element.id=="teamCandidateEmailId3"){
		document.getElementById("teamCandidateEmailId3Err").innerHTML = "Invalid E-mail Address! Please re-enter.";
		document.getElementById("teamCandidateEmailId3Err").style.display = "block";
		$("#teamCandidateEmailId3").focus();
		
	}else if(element.id=="teamCandidateEmailId4"){
		document.getElementById("teamCandidateEmailId4Err").innerHTML = "Invalid E-mail Address! Please re-enter.";
		document.getElementById("teamCandidateEmailId4Err").style.display = "block";
		$("#teamCandidateEmailId4").focus();
		
	}

//alert("Invalid E-mail Address! Please re-enter.");
//return(false);
}





//-------------------

$(function() {

	   $("#firstName").click(function() {
	        $("#firstNameErr").hide();
	        
	    });
	   
	   $("#lastName").click(function() {
	       $("#lastNameErr").hide();
	   });
	   
	   $("#mobileNumber").click(function() {
	       $("#mobileNumberErr").hide();
	       
	   });
	   
	  
	   $("#altMobileNumber").click(function() {
	       $("#altMobileNumberErr").hide();
	   });
	   
	   $("#email").click(function() {
	       $("#emailErr").hide();
	   });
	   
	   $("#collegeName").click(function() {
	       $("#collegeNameErr").hide();
	   });
	   $("input.gender").click(function() {
	       $("#genderErr").hide();
	   });
	   
	   
	   $("#otherCollegeName").click(function() {
	       $("#otherCollegeNameErr").hide();
	   });
	   
	   $("#graduationBranch").click(function() {
	       $("#graduationBranchErr").hide();
	   });
	   
	   $("#graduationYear").click(function() {
	       $("#graduationYearErr").hide();
	   });
	   
	   $("#aboutHim").click(function() {
	       $("#aboutHimErr").hide();
	   });
	   
	   $("#technologyArea").click(function() {
	       $("#technologyAreaErr").hide();
	   });
	   
	   $("#useCaseArea").click(function() {
	       $("#useCaseAreaErr").hide();
	   });
	   
	   
	   $("#teamCandidateName1").click(function() {
	       $("#teamCandidateName1Err").hide();
	   });
	   $("#teamCandidateBranch1").click(function() {
	       $("#teamCandidateBranch1Err").hide();
	   });
	   $("#teamCandidateYear1").click(function() {
	       $("#teamCandidateYear1Err").hide();
	   });
	   $("#teamContactNumber1").click(function() {
	       $("#teamContactNumber1Err").hide();
	   });
	   $("#teamCandidateEmailId1").click(function() {
	       $("#teamCandidateEmailId1Err").hide();
	   });
	   
	   
	   $("#teamCandidateName2").click(function() {
	       $("#teamCandidateName2Err").hide();
	   });
	   $("#teamCandidateBranch2").click(function() {
	       $("#teamCandidateBranch2Err").hide();
	   });
	   $("#teamCandidateYear2").click(function() {
	       $("#teamCandidateYear2Err").hide();
	   });
	   $("#teamContactNumber2").click(function() {
	       $("#teamContactNumber2Err").hide();
	   });
	   $("#teamCandidateEmailId2").click(function() {
	       $("#teamCandidateEmailId2Err").hide();
	   });
	   
	   $("#teamCandidateName3").click(function() {
	       $("#teamCandidateName3Err").hide();
	   });
	   $("#teamCandidateBranch3").click(function() {
	       $("#teamCandidateBranch3Err").hide();
	   });
	   $("#teamCandidateYear3").click(function() {
	       $("#teamCandidateYear3Err").hide();
	   });
	   $("#teamContactNumber3").click(function() {
	       $("#teamContactNumber3Err").hide();
	   });
	   $("#teamCandidateEmailId3").click(function() {
	       $("#teamCandidateEmailId3Err").hide();
	   });
	   
	   
	   $("#teamCandidateName4").click(function() {
	       $("#teamCandidateName4Err").hide();
	   });
	   $("#teamCandidateBranch4").click(function() {
	       $("#teamCandidateBranch4Err").hide();
	   });
	   $("#teamCandidateYear4").click(function() {
	       $("#teamCandidateYear4Err").hide();
	   });
	   $("#teamContactNumber4").click(function() {
	       $("#teamContactNumber4Err").hide();
	   });
	   $("#teamCandidateEmailId4").click(function() {
	       $("#teamCandidateEmailId4Err").hide();
	   });
	   
	   
	   $("#technicalExpertise").click(function() {
	       $("#technicalExpertiseErr").hide();
	   });
	   $("#whyAreYouTheBest").click(function() {
	       $("#whyAreYouTheBestErr").hide();
	   });
	   
	   
	   $("#street").click(function() {
	       $("#streetErr").hide();
	   });
	   
	   $("#country").click(function() {
	       $("#countryErr").hide();
	   });
	   
	   $("#state").click(function() {
	       $("#stateErr").hide();
	   });
	   
	   $("#district").click(function() {
	       $("#districtErr").hide();
	   });
	   
	   $("#postalCode").click(function() {
	       $("#postalCodeErr").hide();
	   });
	   
	   $("#captcha_code").click(function() {
	       $("#captcha_codeErr").hide();
	   });
	   
	   
	});




function hideAllErrMessages(){
	        $("#firstNameErr").hide();
	       $("#lastNameErr").hide();
	       $("#mobileNumberErr").hide();
	       $("#altMobileNumberErr").hide();
	       $("#emailErr").hide();
	       $("#genderErr").hide();
	       $("#collegeNameErr").hide();
	       $("#otherCollegeNameErr").hide();
	       $("#graduationBranchErr").hide();
	       $("#graduationYearErr").hide();
	       $("#aboutHimErr").hide();
	       $("#technologyAreaErr").hide();
	       $("#useCaseAreaErr").hide();
	       $("#teamCandidateName1Err").hide();
	       $("#teamCandidateBranch1Err").hide();
	       $("#teamCandidateYear1Err").hide();
	       $("#teamContactNumber1Err").hide();
	       $("#teamCandidateEmailId1Err").hide();
	       $("#teamCandidateName2Err").hide();
	       $("#teamCandidateBranch2Err").hide();
	       $("#teamCandidateYear2Err").hide();
	       $("#teamContactNumber2Err").hide();
	       $("#teamCandidateEmailId2Err").hide();
	       $("#teamCandidateName3Err").hide();
	       $("#teamCandidateBranch3Err").hide();
	       $("#teamCandidateYear3Err").hide();
	       $("#teamContactNumber3Err").hide();
	       $("#teamCandidateEmailId3Err").hide();
	       $("#teamCandidateName4Err").hide();
	       $("#teamCandidateBranch4Err").hide();
	       $("#teamCandidateYear4Err").hide();
	       $("#teamContactNumber4Err").hide();
	       $("#teamCandidateEmailId4Err").hide();
	       $("#technicalExpertiseErr").hide();
	       $("#whyAreYouTheBestErr").hide();
	       $("#streetErr").hide();
	       $("#countryErr").hide();
	       $("#stateErr").hide();
	       $("#districtErr").hide();
	       $("#postalCodeErr").hide();
	       $("#captcha_codeErr").hide();
	   
}


