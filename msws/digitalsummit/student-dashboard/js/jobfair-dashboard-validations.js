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

function loadJobFairDashBoardSubmitButton() {
	$("#successMessageDiv").hide();
	$("#failMessageDiv").hide();
	closeAlertMessage();
	var applyingFor = $("#applyingFor").val().trim();
	var graduation = $("#graduation").val().trim();
	var graduationPer = $("#graduationPer").val().trim();
	var postGraduation = $("#postGraduation").val().trim();
	var postGraduationPer = $("#postGraduationPer").val().trim();
	var experience = $("#experience").val().trim();
	var salary = $("#salary").val().trim();
	var locDestination = $("#locDestination").val().trim();
	var skillSet = $("#skillSet").val().trim();
	var description = $("#description").val().trim();

	if (applyingFor.length == 0) {
		displayAlertMessage("Please Select Position!");
		$("#applyingFor").focus();
		return false;
	} else if (graduation.length == 0) {
		displayAlertMessage("Please select  Graduation!");
		$("#graduation").focus();
		return false;

	} else if (graduationPer.length == 0) {
		displayAlertMessage("Please enter Graduation Percentage!");
		$("#graduationPer").focus();
		return false;

	} else if (postGraduation.length != 0 && postGraduationPer.length == 0) {
		displayAlertMessage("Please enter Post Graduation Percentage!");
		$("#postGraduationPer").focus();
		return false;

	} else if (experience.length == 0) {
		displayAlertMessage("Please Select Experience!");
		$("#experience").focus();
		return false;

	} else if (salary.length == 0) {
		displayAlertMessage("Please enter Salary!");
		$("#salary").focus();
		return false;

	} else if (locDestination.length == 0) {
		displayAlertMessage("Please Upload File!");
		$("#locDestination").focus();
		return false;

	} else if (skillSet.length == 0) {
		displayAlertMessage("Please enter SkillSet!");
		/*
		 * document.getElementById("skillSetErr").innerHTML = "Please enter
		 * SkillSet!"; document.getElementById("skillSetErr").style.display =
		 * "block";
		 */
		$("#skillSet").focus();
		return false;

	} else if (description.length == 0) {
		displayAlertMessage("Please enter Description!");
		$("#description").focus();
		return false;

	} else {
		$("#btnJobFairAdd").button('loading');
		// $("#btnJobFairAdd").text("loading...");
		return true;
	}
}
function loadJobFairDashBoardUpdateButton() {
	$("#successMessageDiv").hide();
	$("#failMessageDiv").hide();
	closeAlertMessage();
	var applyingFor = $("#applyingFor").val().trim();
	var graduation = $("#graduation").val().trim();
	var graduationPer = $("#graduationPer").val().trim();
	var postGraduation = $("#postGraduation").val().trim();
	var postGraduationPer = $("#postGraduationPer").val().trim();
	var experience = $("#experience").val().trim();
	var salary = $("#salary").val().trim();
	var locDestination = $("#locDestination").val().trim();
	var skillSet = $("#skillSet").val().trim();
	var description = $("#description").val().trim();
	if (applyingFor.length == 0) {
		displayAlertMessage("Please Select Position!");
		$("#applyingFor").focus();
		return false;
	} else if (graduation.length == 0) {
		displayAlertMessage("Please select  Graduation!");
		$("#graduation").focus();
		return false;

	} else if (graduationPer.length == 0) {
		displayAlertMessage("Please enter Graduation Percentage!");
		$("#graduationPer").focus();
		return false;

	} else if (postGraduation.length != 0 && postGraduationPer.length == 0) {
		displayAlertMessage("Please enter Post Graduation Percentage!");
		$("#postGraduationPer").focus();
		return false;

	} else if (experience.length == 0) {
		displayAlertMessage("Please Select Experience!");
		$("#experience").focus();
		return false;

	} else if (salary.length == 0) {
		displayAlertMessage("Please enter Salary!");
		$("#salary").focus();
		return false;

	} else if (skillSet.length == 0) {
		displayAlertMessage("Please enter SkillSet!");
		$("#skillSet").focus();
		return false;

	} else if (description.length == 0) {
		displayAlertMessage("Please enter Description!");
		$("#description").focus();
		return false;

	} else {
		$("#btnJobFairUpdate").button('loading');
		// $("#btnJobFairUpdate").text("loading...");
		return true;
	}
}

function jobFairDashboardFieldLengthValidator(element) {
	$("#successMessageDiv").hide();
	$("#failMessageDiv").hide();
	closeAlertMessage();
	var i = 0;
	var label = "";
	// New Change middlename
	// / alert("hai");
	if (element.id == "graduationPer") {
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
	}

	if (element.value.replace(/^\s+|\s+$/g, "").length > i) {
		str = new String(element.value);
		element.value = str.substring(0, i);
		displayAlertMessage("The " + label + " length must be less than " + i
				+ " characters");
		element.focus();
		return false;
	}

	return true;

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

function putFileName() {
	$("#successMessageDiv").hide();
	$("#failMessageDiv").hide();
	closeAlertMessage();
	var fullPath = document.getElementById('fileToUpload').value;
	var fileName = document.getElementById('fileToUpload').files[0].name;
	if (fileName.length > 100) {
		displayAlertMessage("File name must be less than 100 characters!");
		$("#locDestination").focus();
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
				displayAlertMessage("File size must be less than 2 MB");
				$("#locDestination").focus();
				return (false);
			}
		} else {
			displayAlertMessage("Invalid File Format Selected.Please choose doc/docx/txt/pdf/rtf formats.");
			$("#locDestination").focus();
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

$(function() {

	$("input[type=text]").click(function() {
		closeAlertMessage();

	});

});
