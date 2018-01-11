function fieldLengthValidator(element) {

	closeErrorMsg();
	var i = 0;
	var label = "";
	// New Change middlename
	// / alert("hai");
	if (element.id == "firstname") {
		i = 60;
		label = "First Name"
	} else if (element.id == "lastname") {
		i = 60;
		label = "Last Name"
	} else if (element.id == "email") {
		i = 100;
		label = "E-mail"
	} else if (element.id == "phonenumber") {
		i = 15;
		label = "Phone Number"
	} else if (element.id == "altphonenumber") {
		i = 15;
		label = "Alternative Phone Number"
	} else if (element.id == "graduationPer") {
		i = 5;
		label = "Graduation Percentage"
	} else if (element.id == "postGraduationPer") {
		i = 5;
		label = "Post Graduation Percentage"
	} else if (element.id == "experience") {
		i = 30;
		label = "Experience"
	} else if (element.id == "skillSet") {
		i = 1500;
		label = "SkillSet"
	} else if (element.id == "positionDesc") {
		i = 1500;
		label = "position Description"
	} else if (element.id == "street") {
		i = 150;
		label = "Street"
	} else if (element.id == "postalCode") {
		i = 10;
		label = "Postal Code"
	}
	if (element.value.replace(/^\s+|\s+$/g, "").length > i) {
		str = new String(element.value);
		element.value = str.substring(0, i);
		// showAlertModal("The "+element.id+" length must be less than "+i+"
		// characters");
		// document.getElementById("alertMessage").innerHTML="The "+element.id+"
		// length must be less than "+i+" characters";
		displayErrorMessage("The " + label + " length must be less than " + i
				+ " characters");
		// alert("The "+element.id+" length must be less than "+i+"
		// characters");
		element.focus();
		return false;
	}
	return true;

}

function displayErrorMessage(message) {
	$("#errorMessage").html(message);
	$("#errorMsgDiv").show();

	// document.getElementById("DsRow").style.display='block';
}
function closeErrorMsg() {
	$("#errorMessage").html("");
	$("#errorMsgDiv").hide();
	// document.getElementById("DsRow").style.display='none';
}

// Email Validation

/*
 * function
 * checkEmail(element){if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(element.value)){return(true);
 * }element.value=""; //showAlertModal("Invalid E-mail Address! Please
 * re-enter."); //alert("Invalid E-mail Address! Please re-enter.");
 * displayErrorMessage("Invalid E-mail Address! Please re-enter");
 * 
 * return(false); }
 */

function checkEmail(element) {
	// alert("hello.....");
	var email = element.value;
	// alert("emailLength-->"+email.length);
	// alert("length-->"+email.length);
	if (email.length > 100) {
		displayErrorMessage("The email length should be less than 100 characters.");
		element.value = "";
		return (false);
	}
	if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(element.value)) {
		return (true);
	}
	element.value = "";
	// showAlertModal("Invalid E-mail Address! Please re-enter.");
	// alert("Invalid E-mail Address! Please re-enter.");
	displayErrorMessage("Invalid E-mail Address! Please re-enter");

	return (false);
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
			displayErrorMessage("Phone Number should be 10 characters");
			element.value = _return;
			element.value = "";
			element.focus();
			return false;
		} else {
			if (num.length < 10) {// alert("Please give atleast 10 charcters
									// in PhoneNumber");

				displayErrorMessage("Please give atleast  10 charcters in PhoneNumber");
				element.value = "";
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


function checkPersonalInfo() {
	closeErrorMsg();
	if ($("#firstname").val().trim().length > 0) {
		if ($("#lastname").val().trim().length > 0) {
			if ($("#phonenumber").val().trim().length > 0) {
				if ($("#altphonenumber").val().trim().length > 0) {
					if ($("#email").val().trim().length > 0) {
						showAcadamicDetailsFieldSet();

					} else {
						displayErrorMessage("Please Enter Email");
						return false;
					}

				} else {
					displayErrorMessage("Please Enter Alternative Phone Number");
					return false;
				}

			} else {
				displayErrorMessage("Please Enter Phone Number");
				return false;
			}
		} else {
			displayErrorMessage("Please Enter Last Name");
			return false;
		}

	} else {
		displayErrorMessage("Please Enter First Name");
		return false;
	}
}
function checkPercentage(){
	closeErrorMsg();
	if ($("#graduationPer").val().trim().length > 0 && $("#graduationPer").val()>100) {
		displayErrorMessage("Please Enter Graduation Degree Percentage in between (0 to 100 %)");
		return false;
	}else if ($("#postGraduationPer").val().trim().length > 0 && $("#postGraduationPer").val()>100) {
		displayErrorMessage("Please Enter Post Graduation Degree Percentage in between (0 to 100 %)");
		return false;
	}else{
		return true;
	}
}
function checkApplicantDetails() {
	closeErrorMsg();
	if ($("#applyingFor").val() != "-1") {
		if ($("#graduation").val() != "-1") {
			if ($("#graduationPer").val().trim().length > 0 && $("#graduationPer").val()<=100) {
				if ($("#postGraduation").val() != "-1") {
					if ($("#postGraduationPer").val().trim().length > 0 && $("#postGraduationPer").val()<=100) {
						if ($("#experience").val().trim().length > 0) {
							if ($("#salary").val().trim().length > 0) {
								if ($("#locDestination").val().trim().length > 0) {
									if ($("#skillSet").val().trim().length > 0) {
										if ($("#positionDesc").val().trim().length > 0) {

											showAddressDetailsFieldSet();
										} else {
											displayErrorMessage("Please Enter Description");
											return false;
										}
									} else {
										displayErrorMessage("Please Enter SkillSet");
										return false;
									}
								} else {
									displayErrorMessage("Please Upload Resume");
									return false;
								}
							} else {
								displayErrorMessage("Please Enter Salary");
								return false;
							}
						} else {
							displayErrorMessage("Please Enter Experence");
							return false;
						}

					} else {
						displayErrorMessage("Please Enter Post Graduation Degree Percentage in between (0 to 100 %)");
						return false;
					}

				} else {
					displayErrorMessage("Please Select Post Graduation");
					return false;
				}

			} else {
				displayErrorMessage("Please Enter Graduation Percentage in between (0 to 100 %)");
				return false;
			}

		} else {
			displayErrorMessage("Please Select Graduation");
			return false;
		}

	} else {
		displayErrorMessage("Please Select Position");
		return false;
	}
}

function loadJobDetailsSubmitbutton() {
	closeErrorMsg();
	if ($("#street").val().trim().length > 0) {
		if ($("#state").val() != "-1") {
			if ($("#district").val() != "-1") {
				if ($("#postalCode").val().trim().length > 0) {
					if ($("#captcha_code").val().trim().length > 0) {
						$("#btnJobFairSubmit").button('loading');
					}else{
						displayErrorMessage("Please Enter Captcha Code");
						return false;
					}
					
					
				} else {
					displayErrorMessage("Please Enter Postal Code");
					return false;
				}
			} else {
				displayErrorMessage("Please Select District");
				return false;
			}

		} else {
			displayErrorMessage("Please Select State");
			return false;
		}
	} else {
		displayErrorMessage("Please Enter Street");
		return false;
	}

}

function putFileName() {

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
				displayErrorMessage("File size must be less than 2 MB");
				return (false);
			}
		} else {
			displayErrorMessage("Invalid File Format Selected.Please choose doc/docx/txt/pdf/rtf formats.");
			return false;
		}

	}

}
function showAlertModal(msg) {
	document.getElementById('showAlertText').innerHTML = msg;
	$('#myModal').modal('show');
	return false;
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
