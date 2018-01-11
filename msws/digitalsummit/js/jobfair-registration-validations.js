/**
 * Author : Santosh Kola Date : 11/13/2017 Description : Included all
 * validations related to jobfair registration
 */

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
	var designation = $("#designation").val().trim();
	var attendeeType = $("#attendeeType").val().trim();
	var collegeName = $("#collegeName").val().trim();
	var otherCollegeName = $("#otherCollegeName").val().trim();
	var gender = document.getElementsByName('gender');
	var isGenderSelected = false;
	for (var i = 0, length = gender.length; i < length; i++) {
		if (gender[i].checked) {
			isGenderSelected = true;

			break;
		}
	}

	if (firstName.length == 0) {
		// displayAlertMessage("Please enter first name!");
		document.getElementById("firstNameErr").innerHTML = "Please enter first name!";
		document.getElementById("firstNameErr").style.display = "block";
		// documnet.getElementById("firstName").focus();
		$("#firstName").focus();

	} else if (lastName.length == 0) {
		// displayAlertMessage("Please enter last name!");
		document.getElementById("lastNameErr").innerHTML = "Please enter last name!";
		document.getElementById("lastNameErr").style.display = "block";
		$("#lastName").focus();
	} else if (mobileNumber.length == 0) {
		// displayAlertMessage("Please enter mobile number!");
		document.getElementById("mobileNumberErr").innerHTML = "Please enter Mobile Number!";
		document.getElementById("mobileNumberErr").style.display = "block";
		$("#mobileNumber").focus();
	} else if (altMobileNumber.length == 0) {
		// displayAlertMessage("Please enter Alternative Mobile Number!");
		document.getElementById("altMobileNumberErr").innerHTML = "Please enter Alternate Mobile Number!";
		document.getElementById("altMobileNumberErr").style.display = "block";
		$("#altMobileNumber").focus();

	} else if (email.length == 0) {
		// displayAlertMessage("Please enter Email!");
		document.getElementById("emailErr").innerHTML = "Please enter email !";
		document.getElementById("emailErr").style.display = "block";
		$("#email").focus();
	} else if (!isGenderSelected) {
		document.getElementById("genderErr").innerHTML = "Please select gender !";
		document.getElementById("genderErr").style.display = "block";
		// $("input.gender").focus();
		// document.forms["msform"].elements["gender"].focus();
		// document.msform.gender.focus();
		// displayAlertMessage("Please enter Email Address!");
	} else if (designation.length == 0) {
		// displayAlertMessage("Please enter College Name!");
		document.getElementById("designationErr").innerHTML = "Please enter Designation !";
		document.getElementById("designationErr").style.display = "block";
		$("#designation").focus();
	} else if (attendeeType.length == 0) {

		// displayAlertMessage("Please enter Other College Name!");
		document.getElementById("attendeeTypeErr").innerHTML = "Please select Attendee Type!";
		document.getElementById("attendeeTypeErr").style.display = "block";
		$("#attendeeType").focus();

	} else if (attendeeType == "Student" && collegeName.length == 0) {

		document.getElementById("collegeNameErr").innerHTML = "Please select College Name!";
		document.getElementById("collegeNameErr").style.display = "block";
		$("#collegeName").focus();

	} else if (otherCollegeName.length == 0 && collegeName == "Other") {
		document.getElementById("otherCollegeNameErr").innerHTML = "Please Specify your College!";
		document.getElementById("otherCollegeNameErr").style.display = "block";
		$("#otherCollegeName").focus();

	} else {
		showAcadamicDetailsFieldSet();
	}

}

function checkAcadamicDetails() {
	closeAlertMessage();
	hideAllErrMessages();
	var applyingFor = $("#applyingFor").val().trim();
	var graduation = $("#graduation").val().trim();
	var graduationPer = $("#graduationPer").val().trim();
	var postGraduation = $("#postGraduation").val().trim();
	var postGraduationPer = $("#postGraduationPer").val().trim();
	var experience = $("#experience").val().trim();
	var salary = $("#salary").val().trim();
	var skillSet = $("#skillSet").val().trim();
	var description = $("#description").val().trim();
	var locDestination = $("#locDestination").val().trim();

	if (applyingFor.length == 0) {
		document.getElementById("applyingForErr").innerHTML = "Please select Position!";
		document.getElementById("applyingForErr").style.display = "block";
		$("#applyingFor").focus();

	} else if (graduation.length == 0) {
		// displayAlertMessage("Please select Secondary Intrest!");

		document.getElementById("graduationErr").innerHTML = "Please select  Graduation!";
		document.getElementById("graduationErr").style.display = "block";
		$("#graduation").focus();

	} else if (graduationPer.length == 0) {
		// displayAlertMessage("Please enter Comments!");
		document.getElementById("graduationPerErr").innerHTML = "Please enter Graduation Percentage!";
		document.getElementById("graduationPerErr").style.display = "block";
		$("#graduationPer").focus();

	}else if (postGraduation.length != 0 && postGraduationPer.length == 0) {
		// displayAlertMessage("Please enter Comments!");
		document.getElementById("postGraduationPerErr").innerHTML = "Please enter Post Graduation Percentage!";
		document.getElementById("postGraduationPerErr").style.display = "block";
		$("#postGraduationPer").focus();

	} else if (experience.length == 0) {
		// displayAlertMessage("Please enter Comments!");
		document.getElementById("experienceErr").innerHTML = "Please Select Experience!";
		document.getElementById("experienceErr").style.display = "block";
		$("#experience").focus();

	} else if (salary.length == 0) {
		// displayAlertMessage("Please enter Comments!");
		document.getElementById("salaryErr").innerHTML = "Please enter Salary!";
		document.getElementById("salaryErr").style.display = "block";
		$("#salary").focus();

	} else if (locDestination.length == 0) {
		// displayAlertMessage("Please enter Comments!");
		document.getElementById("fileToUploadErr").innerHTML = "Please Upload File!";
		document.getElementById("fileToUploadErr").style.display = "block";
		$("#locDestination").focus();

	} else if (skillSet.length == 0) {
		// displayAlertMessage("Please enter Comments!");
		document.getElementById("skillSetErr").innerHTML = "Please enter SkillSet!";
		document.getElementById("skillSetErr").style.display = "block";
		$("#skillSet").focus();

	} else if (description.length == 0) {
		// displayAlertMessage("Please enter Comments!");
		document.getElementById("descriptionErr").innerHTML = "Please enter Description!";
		document.getElementById("descriptionErr").style.display = "block";
		$("#description").focus();

	} else {
		showAddressDetailsFieldSet();
	}

}

function checkAddressDetails() {
	closeAlertMessage();
	hideAllErrMessages();
	var street = $("#street").val().trim();
	var country = $("#country").val().trim();
	var state = $("#state").val().trim();
	var district = $("#district").val().trim();
	var postalCode = $("#postalCode").val().trim();
	var captcha_code = $("#captcha_code").val().trim();

	if (street.length == 0) {
		// displayAlertMessage("Please enter Street!");
		document.getElementById("streetErr").innerHTML = "Please enter Street!";
		document.getElementById("streetErr").style.display = "block";
		$("#street").focus();
		return false;
	} else if (country.length == 0) {
		// displayAlertMessage("Please select Country!");
		document.getElementById("countryErr").innerHTML = "Please select Country!";
		document.getElementById("countryErr").style.display = "block";
		$("#country").focus();
		return false;
	} else if (state.length == 0) {
		// displayAlertMessage("Please select State!");
		document.getElementById("stateErr").innerHTML = "Please enter sate name!";
		document.getElementById("stateErr").style.display = "block";
		$("#state").focus();
		return false;
	} else if (district.length == 0) {
		// displayAlertMessage("Please select district!");
		document.getElementById("districtErr").innerHTML = "Please enter district name!";
		document.getElementById("districtErr").style.display = "block";
		$("#district").focus();
		return false;
	} else if (postalCode.length == 0) {
		// displayAlertMessage("Please enter postalCode!");
		document.getElementById("postalCodeErr").innerHTML = "Please enter postalCode!";
		document.getElementById("postalCodeErr").style.display = "block";
		$("#postalCode").focus();
		return false;
	} else if (captcha_code.length == 0) {
		// displayAlertMessage("Please enter Captcha!");
		document.getElementById("captcha_codeErr").innerHTML = "Please enter Captcha!";
		document.getElementById("captcha_codeErr").style.display = "block";
		$("#captcha_code").focus();
		return false;
	} else {
		$("#btnJobFairSubmit").button('loading');
		$("#addressPreviousBtn").attr("disabled", true);

		return true;
	}

}

function jobFairFieldLengthValidator(element) {

	closeAlertMessage();
	var i = 0;
	var label = "";
	// New Change middlename
	// / alert("hai");
	if (element.id == "firstName") {
		i = 60;
		label = "First Name"
	} else if (element.id == "lastName") {
		i = 60;
		label = "Last Name"
	} else if (element.id == "mobileNumber") {
		i = 15;
		label = "Mobile Number"
	} else if (element.id == "altMobileNumber") {
		i = 15;
		label = "Alternative Mobile Number"
	} else if (element.id == "email") {
		i = 100;
		label = "Email"
	} else if (element.id == "designation") {
		i = 100;
		label = "Designation"
	} else if (element.id == "graduationPer") {
		i = 10;
		label = "Graduation Percentage"
	} else if (element.id == "postGraduationPer") {
		i = 10;
		label = "post Graduation Percentage"
	} else if (element.id == "salary") {
		i = 30;
		label = "Salary"
	} else if (element.id == "skillSet") {
		i = 1500;
		label = "Skill Set"
	} else if (element.id == "description") {
		i = 1500;
		label = "Description"
	} else if (element.id == "street") {
		i = 60;
		label = "Street"
	} else if (element.id == "postalCode") {
		i = 10;
		label = "Postal Code"
	} else if (element.id == "otherCollegeName") {
		i = 100;
		label = "College Name"
	}

	if (element.value.replace(/^\s+|\s+$/g, "").length > i) {
		str = new String(element.value);
		element.value = str.substring(0, i);
		if (element.id == "firstName") {
			document.getElementById("firstNameErr").innerHTML = "The " + label
					+ " length must be less than " + i + " characters";
			document.getElementById("firstNameErr").style.display = "block";
			$("#firstName").focus();

		} else if (element.id == "lastName") {
			document.getElementById("lastNameErr").innerHTML = "The " + label
					+ " length must be less than " + i + " characters";
			document.getElementById("lastNameErr").style.display = "block";
			// $("#lastName").focus();
		} else if (element.id == "mobileNumber") {
			document.getElementById("mobileNumberErr").innerHTML = "The "
					+ label + " length must be less than " + i + " characters";
			document.getElementById("mobileNumberErr").style.display = "block";
			$("#mobileNumber").focus();

		} else if (element.id == "altMobileNumber") {
			document.getElementById("altMobileNumberErr").innerHTML = "The "
					+ label + " length must be less than " + i + " characters";
			document.getElementById("altMobileNumberErr").style.display = "block";
			$("#altMobileNumber").focus();
		} else if (element.id == "email") {
			document.getElementById("emailErr").innerHTML = "The " + label
					+ " length must be less than " + i + " characters";
			document.getElementById("emailErr").style.display = "block";
			$("#email").focus();

		} else if (element.id == "designation") {
			document.getElementById("designationErr").innerHTML = "The "
					+ label + " length must be less than " + i + " characters";
			document.getElementById("designationErr").style.display = "block";
			$("#designation").focus();

		} else if (element.id == "otherCollegeName") {
			document.getElementById("otherCollegeNameErr").innerHTML = "The "
					+ label + " length must be less than " + i + " characters";
			document.getElementById("otherCollegeNameErr").style.display = "block";
			$("#otherCollegeName").focus();

		} else if (element.id == "graduationPer") {
			document.getElementById("graduationPerErr").innerHTML = "The "
					+ label + " length must be less than " + i + " characters";
			document.getElementById("graduationPerErr").style.display = "block";
			$("#graduationPer").focus();

		} else if (element.id == "postGraduationPer") {
			document.getElementById("postGraduationPerErr").innerHTML = "The "
					+ label + " length must be less than " + i + " characters";
			document.getElementById("postGraduationPerErr").style.display = "block";
			$("#postGraduationPer").focus();

		} else if (element.id == "salary") {
			document.getElementById("salaryErr").innerHTML = "The " + label
					+ " length must be less than " + i + " characters";
			document.getElementById("salaryErr").style.display = "block";
			$("#salary").focus();

		} else if (element.id == "skillSet") {
			document.getElementById("skillSetErr").innerHTML = "The " + label
					+ " length must be less than " + i + " characters";
			document.getElementById("skillSetErr").style.display = "block";
			$("#skillSet").focus();

		} else if (element.id == "description") {
			document.getElementById("descriptionErr").innerHTML = "The "
					+ label + " length must be less than " + i + " characters";
			document.getElementById("descriptionErr").style.display = "block";
			$("#description").focus();

		} else if (element.id == "street") {
			document.getElementById("streetErr").innerHTML = "The " + label
					+ " length must be less than " + i + " characters";
			document.getElementById("streetErr").style.display = "block";
			$("#street").focus();

		} else if (element.id == "postalCode") {
			document.getElementById("postalCodeErr").innerHTML = "The " + label
					+ " length must be less than " + i + " characters";
			document.getElementById("postalCodeErr").style.display = "block";
			$("#postalCode").focus();

		}

		element.focus();
		return false;
	}

	return true;

}

// phone number validation starts

function formatPhone(element) {
	str = new String(element.value);
	element.value = str.replace(/[A-Za-z\(\)\.\-\x\s,]/g, "");
	num = element.value;
	var _return;
	if (num.length == 10) {
		_return = "(";
		var ini = num.substring(0, 3);
		_return += ini + ")";
		var st = num.substring(3, 6);
		_return += "-" + st + "-";
		var end = num.substring(6, 10);
		_return += end;
		element.value = "";
		element.value = _return;
	} else {
		if (num.length > 10) {// alert("Phone Number should be 10
			// characters");
			// displayAlertMessage("Phone Number should be 10 characters");
			if (element.id == "mobileNumber") {
				document.getElementById("mobileNumberErr").innerHTML = "Mobile Number should be 10 digits";
				document.getElementById("mobileNumberErr").style.display = "block";
				$("#mobileNumber").focus();
			}
			if (element.id == "altMobileNumber") {
				document.getElementById("altMobileNumberErr").innerHTML = "Alternate Mobile Number should be 10 digits";
				document.getElementById("altMobileNumberErr").style.display = "block";
				$("#altMobileNumber").focus();
			}

			if (element.id == "teamContactNumber1") {
				document.getElementById("teamContactNumber1Err").innerHTML = "Contact Number should be 10 digits";
				document.getElementById("teamContactNumber1Err").style.display = "block";
				$("#teamContactNumber1").focus();
			}

			if (element.id == "teamContactNumber2") {
				document.getElementById("teamContactNumber2Err").innerHTML = "Contact Number should be 10 digits";
				document.getElementById("teamContactNumber2Err").style.display = "block";
				$("#teamContactNumber2").focus();
			}
			if (element.id == "teamContactNumber3") {
				document.getElementById("teamContactNumber3Err").innerHTML = "Contact Number should be 10 digits";
				document.getElementById("teamContactNumber3Err").style.display = "block";
				$("#teamContactNumber3").focus();
			}
			if (element.id == "teamContactNumber4") {
				document.getElementById("teamContactNumber4Err").innerHTML = "Contact Number should be 10 digits";
				document.getElementById("teamContactNumber4Err").style.display = "block";
				$("#teamContactNumber4").focus();
			}

			element.value = "";
			element.focus();
			return false;
		} else {
			if (num.length < 10) {// alert("Please give atleast 10 charcters
				// in PhoneNumber");

				// displayAlertMessage("Please give atleast 10 charcters in
				// PhoneNumber");
				if (element.id == "mobileNumber") {
					document.getElementById("mobileNumberErr").innerHTML = "Mobile Number should be 10 digits";
					document.getElementById("mobileNumberErr").style.display = "block";
					$("#mobileNumber").focus();
				}
				if (element.id == "altMobileNumber") {
					document.getElementById("altMobileNumberErr").innerHTML = "Alternate Mobile Number should be 10 digits";
					document.getElementById("altMobileNumberErr").style.display = "block";
					$("#altMobileNumber").focus();
				}

				if (element.id == "teamContactNumber1") {
					document.getElementById("teamContactNumber1Err").innerHTML = "Contact Number should be 10 digits";
					document.getElementById("teamContactNumber1Err").style.display = "block";
					$("#teamContactNumber1").focus();
				}

				if (element.id == "teamContactNumber2") {
					document.getElementById("teamContactNumber2Err").innerHTML = "Contact Number should be 10 digits";
					document.getElementById("teamContactNumber2Err").style.display = "block";
					$("#teamContactNumber2").focus();
				}
				if (element.id == "teamContactNumber3") {
					document.getElementById("teamContactNumber3Err").innerHTML = "Contact Number should be 10 digits";
					document.getElementById("teamContactNumber3Err").style.display = "block";
					$("#teamContactNumber3").focus();
				}
				if (element.id == "teamContactNumber4") {
					document.getElementById("teamContactNumber4Err").innerHTML = "Contact Number should be 10 digits";
					document.getElementById("teamContactNumber4Err").style.display = "block";
					$("#teamContactNumber4").focus();
				}

				element.value = "";
				return false;
			}
		}
	}
	return _return;
}

function validatenumber(xxxxx) {
	var maintainplus = "";
	var numval = xxxxx.value;
	if (numval.charAt(0) == "+") {
		var maintainplus = "+";
	}
	curnumbervar = numval.replace(
			/[\\A-Za-z!"?$%^&*+_={};:'@#~,?\/<>?|`?\]\[]/g, "");
	xxxxx.value = maintainplus + curnumbervar;
	var maintainplus = "";
	xxxxx.focus;
}
function isNumberKey(evt) {
	var charCode = (evt.which) ? evt.which : event.keyCode
	if (charCode > 31 && (charCode < 48 || charCode > 57))
		return false;
	return true;
}
function checkEmail(element) {
	var emaill = element.value;
	var emailLength = emaill.length;
	// alert("emaill-->"+emaill);
	// alert("length-->"+emailLength);
	if (emailLength > 100) {
		element.value = "";
		// displayAlertMessage("Email id length should be less than 100
		// characters");
		// alert("Invalid E-mail Address! Please re-enter.");
		if (element.id == "email") {
			// alert("email-->");
			document.getElementById("emailErr").innerHTML = "Email id length should be less than 100 characters";
			document.getElementById("emailErr").style.display = "block";
			$("#email").focus();
		}
		if (element.id == "teamCandidateEmailId1") {
			// alet("teamCandidateEmailId1");
			document.getElementById("teamCandidateEmailId1Err").innerHTML = "Email id length should be less than 100 characters";
			document.getElementById("teamCandidateEmailId1Err").style.display = "block";
			$("#teamCandidateEmailId1").focus();

		}
		if (element.id == "teamCandidateEmailId2") {
			document.getElementById("teamCandidateEmailId2Err").innerHTML = "Email id length should be less than 100 characters";
			document.getElementById("teamCandidateEmailId2Err").style.display = "block";
			$("#teamCandidateEmailId2").focus();

		}
		if (element.id == "teamCandidateEmailId3") {
			document.getElementById("teamCandidateEmailId3Err").innerHTML = "Email id length should be less than 100 characters";
			document.getElementById("teamCandidateEmailId3Err").style.display = "block";
			$("#teamCandidateEmailId3").focus();

		}
		if (element.id == "teamCandidateEmailId4") {
			document.getElementById("teamCandidateEmailId4Err").innerHTML = "Email id length should be less than 100 characters";
			document.getElementById("teamCandidateEmailId4Err").style.display = "block";
			$("#teamCandidateEmailId4").focus();

		}

	}

	if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(element.value)) {
		return (true);
	}
	element.value = "";
	// displayAlertMessage("Invalid E-mail Address! Please re-enter.");
	if (element.id == "email") {

		document.getElementById("emailErr").innerHTML = "Invalid E-mail Address! Please re-enter.";
		document.getElementById("emailErr").style.display = "block";
		$("#email").focus();
		// return(false);
	}
	if (element.id == "teamCandidateEmailId1") {

		document.getElementById("teamCandidateEmailId1Err").innerHTML = "Invalid E-mail Address! Please re-enter.";
		document.getElementById("teamCandidateEmailId1Err").style.display = "block";
		$("#teamCandidateEmailId1").focus();
		// return(false);

	} else if (element.id == "teamCandidateEmailId2") {
		document.getElementById("teamCandidateEmailId2Err").innerHTML = "Invalid E-mail Address! Please re-enter.";
		document.getElementById("teamCandidateEmailId2Err").style.display = "block";
		$("#teamCandidateEmailId2").focus();

	} else if (element.id == "teamCandidateEmailId3") {
		document.getElementById("teamCandidateEmailId3Err").innerHTML = "Invalid E-mail Address! Please re-enter.";
		document.getElementById("teamCandidateEmailId3Err").style.display = "block";
		$("#teamCandidateEmailId3").focus();

	} else if (element.id == "teamCandidateEmailId4") {
		document.getElementById("teamCandidateEmailId4Err").innerHTML = "Invalid E-mail Address! Please re-enter.";
		document.getElementById("teamCandidateEmailId4Err").style.display = "block";
		$("#teamCandidateEmailId4").focus();

	}

	// alert("Invalid E-mail Address! Please re-enter.");
	// return(false);
}

// -------------------

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
	$("input.gender").click(function() {
		$("#genderErr").hide();
	});
	$("#designation").click(function() {
		$("#designationErr").hide();
	});
	$("#attendeeType").click(function() {
		$("#attendeeTypeErr").hide();
	});
	$("#collegeName").click(function() {
		$("#collegeNameErr").hide();
	});

	$("#otherCollegeName").click(function() {
		$("#otherCollegeNameErr").hide();
	});

	$("#applyingFor").click(function() {
		$("#applyingForErr").hide();
	});
	$("#graduation").click(function() {
		$("#graduationErr").hide();
	});
	$("#graduationPer").click(function() {
		$("#graduationPerErr").hide();
	});
	$("#postGraduation").click(function() {
		$("#postGraduationErr").hide();
	});

	$("#postGraduationPer").click(function() {
		$("#postGraduationPerErr").hide();
	});
	$("#experience").click(function() {
		$("#experienceErr").hide();
	});
	$("#salary").click(function() {
		$("#salaryErr").hide();
	});
	$("#locDestination").click(function() {
		$("#fileToUploadErr").hide();
	});
	$("#skillSet").click(function() {
		$("#skillSetErr").hide();
	});

	$("#description").click(function() {
		$("#descriptionErr").hide();
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

function hideAllErrMessages() {
	$("#firstNameErr").hide();
	$("#lastNameErr").hide();
	$("#mobileNumberErr").hide();
	$("#altMobileNumberErr").hide();
	$("#emailErr").hide();
	$("#genderErr").hide();
	$("#designationErr").hide();
	$("#attendeeTypeErr").hide();
	$("#applyingForErr").hide();
	$("#graduationErr").hide();
	$("#graduationPerErr").hide();
	$("#postGraduationErr").hide();
	$("#postGraduationPerErr").hide();
	$("#experienceErr").hide();
	$("#salaryErr").hide();
	$("#fileToUploadErr").hide();
	$("#skillSetErr").hide();
	$("#descriptionErr").hide();
	$("#streetErr").hide();
	$("#stateErr").hide();
	$("#districtErr").hide();
	$("#postalCodeErr").hide();
	$("#captcha_codeErr").hide();
	$("#collegeNameErr").hide();
	$("#otherCollegeNameErr").hide();
}

function putFileName() {
	hideAllErrMessages();
	var fullPath = document.getElementById('fileToUpload').value;
	var fileName = document.getElementById('fileToUpload').files[0].name;
	if (fileName.length > 100) {
		displayErrorMessage("File name must be less than 100 characters!");
		return (false);
	}

	if (fullPath) {
		var arr1 = new Array;
		arr1 = fullPath.split("\\");
		var len = arr1.length;
		var img1 = arr1[len - 1];
		var filext = img1.substring(img1.lastIndexOf(".") + 1);

		if (filext == "doc" || filext == "docx" || filext == 'txt'
				|| filext == 'pdf' || filext == 'rtf') {

			var size = document.getElementById('fileToUpload').files[0].size;

			if (parseInt(size) < 2097152) {
				var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath
						.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
				var filename = fullPath.substring(startIndex);
				if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
					filename = filename.substring(1);
				}

				document.getElementById("locDestination").value = filename;

			} else {
				document.getElementById("fileToUploadErr").innerHTML = "File size must be less than 2 MB.";
				document.getElementById("fileToUploadErr").style.display = "block";
				$("#fileToUpload").focus();
				//displayErrorMessage("File size must be less than 2 MB");
				return (false);
			}
		} else {
			document.getElementById("fileToUploadErr").innerHTML = "Invalid File Format Selected.Please choose doc/docx/txt/pdf/rtf formats.";
			document.getElementById("fileToUploadErr").style.display = "block";
			$("#fileToUpload").focus();
			//displayErrorMessage("Invalid File Format Selected.Please choose doc/docx/txt/pdf/rtf formats.");
			return false;
		}

	}

}
function validateDec(key) {
	// getting key code of pressed key
	var keycode = (key.which) ? key.which : key.keyCode;
	// comparing pressed keycodes
	if (!(keycode == 8 || keycode == 46) && (keycode < 48 || keycode > 57)) {
		return false;
	} else {
		var parts = key.srcElement.value.split('.');
		if (parts.length > 1 && keycode == 46)
			return false;
		return true;
	}
}

function collegeType(obj) {
	hideAllErrMessages();
	if (obj.value == 'Other') {
		$("#otherCollegeName").show();

	} else {
		$("#otherCollegeName").hide();
		$("#otherCollegeName").val("");

	}
}

function setPostGraduationPer(obj) {
	hideAllErrMessages();
	if (obj.value == '') {
		$("#postGraduationPer").val("");

	} 
}

function showCollegeDiv(obj) {
	hideAllErrMessages();
	if (obj.value == 'Student') {
		$("#collegeDiv").show();

	} else {
		$("#collegeDiv").hide();
		$("#collegeName").val("");
		$("#otherCollegeName").hide();
		$("#otherCollegeName").val("");

	}
}

function showCollegeDivOnLoad() {
	hideAllErrMessages();
	var attendeeType = $("#attendeeType").val();
	if (attendeeType == 'Student') {
		$("#collegeDiv").show();

	} else {
		$("#collegeDiv").hide();
		$("#collegeName").val("");
		$("#otherCollegeName").hide();
		$("#otherCollegeName").val("");

	}
}