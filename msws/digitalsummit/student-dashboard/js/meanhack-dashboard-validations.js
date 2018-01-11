/**
 * Meanhack dashboard validation
 * Author : Santosh Kola
 * Date : 11/16/2017
 */



 $( document ).ready(function() {
	 var teamCount = $("#teamCount").val();
	   if(parseInt($("#team2Name").val().trim().length)>0){
		   $("#team2Div").show();
		   $("#removeButton").show();
		   teamCount = parseInt(teamCount,10)+1;
		   $("#teamCount").val(parseInt(teamCount,10));
		   
		   
	   }
	   if(parseInt($("#team3Name").val().trim().length)>0){
		   $("#team3Div").show();
		   teamCount = parseInt(teamCount,10)+1;
		   $("#teamCount").val(parseInt(teamCount,10));
	   }
	   if(parseInt($("#team4Name").val().trim().length)>0){
		   $("#team4Div").show();
		   teamCount = parseInt(teamCount,10)+1;
		   $("#teamCount").val(parseInt(teamCount,10));
		   $("#addButton").hide();
		   
	   }
	});


	function addTeamRow(){
		var teamCount = $("#teamCount").val();
		
		
		if($("#teamCandidateName"+teamCount).val().trim().length==0){
			displayAlertMessage("Please enter Name "+teamCount);
		}else if($("#teamCandidateEmailId"+teamCount).val().trim().length==0){
			displayAlertMessage("Please enter emailid "+teamCount);
		}else if($("#teamCandidateBranch"+teamCount).val().trim().length==0){
			displayAlertMessage("Please select branch "+teamCount);
		}else if($("#teamCandidateYear"+teamCount).val().trim().length==0){
			displayAlertMessage("Please select year "+teamCount);
		}else if($("#teamContactNumber"+teamCount).val().trim().length==0){
			displayAlertMessage("Please enter Contact Number "+teamCount);
		}
		else {
		
		if(parseInt(teamCount,10)==1){
			 $("#team2Div").show();
			 $("#teamCount").val(parseInt(teamCount,10)+1);
			 $("#removeButton").show();
		}else if(parseInt(teamCount,10)==2){
			 $("#team3Div").show();
			 $("#teamCount").val(parseInt(teamCount,10)+1);
			 $("#removeButton").show();
		}else if(parseInt(teamCount,10)==3){
			 $("#team4Div").show();
			 $("#teamCount").val(parseInt(teamCount,10)+1);
			 $("#addButton").hide();
			 $("#removeButton").show();
		}
		}
	}

	function removeTeamRow(){
		var teamCount = $("#teamCount").val();

		if(parseInt(teamCount,10)==4){
			 $("#teamCandidateName4").val("");
			 $("#teamCandidateEmailId4").val("");
			 $("#teamCandidateBranch4").val("");
			 $("#teamCandidateYear4").val("");
			 $("#teamContactNumber4").val("");
			
			 $("#team4Div").hide();
			 $("#teamCount").val(parseInt(teamCount,10)-1);
			 $("#addButton").show();
		}else if(parseInt(teamCount,10)==3){
			
			$("#teamCandidateName3").val("");
			 $("#teamCandidateEmailId3").val("");
			 $("#teamCandidateBranch3").val("");
			 $("#teamCandidateYear3").val("");
			 $("#teamContactNumber3").val("");
			 
			 $("#team3Div").hide();
			 $("#teamCount").val(parseInt(teamCount,10)-1);
			 $("#addButton").show();
		}else if(parseInt(teamCount,10)==2){
			$("#teamCandidateName2").val("");
			 $("#teamCandidateEmailId2").val("");
			 $("#teamCandidateBranch2").val("");
			 $("#teamCandidateYear2").val("");
			 $("#teamContactNumber2").val("");
			 
			 $("#team2Div").hide();
			 $("#teamCount").val(parseInt(teamCount,10)-1);
			 $("#removeButton").hide();
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


	
	function loadMeanhackSubmitButton(){
		closeAlertMessage();
		 var teamCount = $("#teamCount").val().trim();
		 var frmTechnologyArea = $("#frmTechnologyArea").val().trim();
		 var frmUseCaseArea = $("#frmUseCaseArea").val().trim();
		 
		 var teamCandidateName1 = $("#teamCandidateName1").val().trim();
		 var teamCandidateEmailId1 = $("#teamCandidateEmailId1").val().trim();
		 var teamCandidateBranch1 = $("#teamCandidateBranch1").val().trim();
		 var teamCandidateYear1 = $("#teamCandidateYear1").val().trim();
		 var teamContactNumber1 = $("#teamContactNumber1").val().trim();
		 
		 var teamCandidateName2 = $("#teamCandidateName2").val().trim();
		 var teamCandidateEmailId2 = $("#teamCandidateEmailId2").val().trim();
		 var teamCandidateBranch2 = $("#teamCandidateBranch2").val().trim();
		 var teamCandidateYear2 = $("#teamCandidateYear2").val().trim();
		 var teamContactNumber2 = $("#teamContactNumber2").val().trim();
		 
		 var teamCandidateName3 = $("#teamCandidateName3").val().trim();
		 var teamCandidateEmailId3 = $("#teamCandidateEmailId3").val().trim();
		 var teamCandidateBranch3 = $("#teamCandidateBranch3").val().trim();
		 var teamCandidateYear3 = $("#teamCandidateYear3").val().trim();
		 var teamContactNumber3 = $("#teamContactNumber3").val().trim();
		 
		 var teamContactNumber4 = $("#teamCandidateName4").val().trim();
		 var teamCandidateEmailId4 = $("#teamCandidateEmailId4").val().trim();
		 var teamCandidateBranch4 = $("#teamCandidateBranch4").val().trim();
		 var teamCandidateYear4 = $("#teamCandidateYear4").val().trim();
		 var teamContactNumber4 = $("#teamContactNumber4").val().trim();
		 
		 var technicalExpertise = $("#technicalExpertise").val().trim();
		 var whyAreYouTheBest = $("#whyAreYouTheBest").val().trim();
		 
		 var collegeName = $("#collegeName").val().trim();
		 var otherCollegeName = $("#otherCollegeName").val().trim();
		 var graduationBranch = $("#graduationBranch").val().trim();
		 var graduationYear = $("#graduationYear").val().trim();
		 var aboutHim = $("#aboutHim").val().trim();
		 
		 
		 
		 
		 
		 
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
		 }
		 else if(aboutHim.length==0){
			 displayAlertMessage("Please enter About Yourself!");
			 return false;
		 }
		 
		 else if(frmTechnologyArea.length==0){
			 displayAlertMessage("Please select Technology Area!");
			 return false;
		 }else if(frmUseCaseArea.length==0){
			 displayAlertMessage("Please select Use Case Area!");
			 return false;
		 }else if(teamCandidateName1.length==0){
			 displayAlertMessage("Please enter Name 1!");
			 return false;
		 }else if(teamCandidateEmailId1.length==0){
			 displayAlertMessage("Please enter Emaild 1!");
			 return false;
		 }else if(teamCandidateBranch1.length==0){
			 displayAlertMessage("Please select Branch 1!");
			 return false;
		 }else if(teamCandidateYear1.length==0){
			 displayAlertMessage("Please select Year 1!");
			 return false;
		 }else if(teamContactNumber1.length==0){
			 displayAlertMessage("Please enter Contact number 1!");
			 return false;
		 }
		 
		 else if(teamCandidateName2.length==0&&parseInt(teamCount,10)==2){
			 displayAlertMessage("Please enter Name 2!");
			 return false;
		 }else if(teamCandidateEmailId2.length==0&&parseInt(teamCount,10)==2){
			 displayAlertMessage("Please enter Emaild 2!");
			 return false;
		 }else if(teamCandidateBranch2.length==0&&parseInt(teamCount,10)==2){
			 displayAlertMessage("Please select Branch 2!");
			 return false;
		 }else if(teamCandidateYear2.length==0&&parseInt(teamCount,10)==2){
			 displayAlertMessage("Please select Year 2!");
			 return false;
		 }else if(teamContactNumber2.length==0&&parseInt(teamCount,10)==2){
			 displayAlertMessage("Please enter Contact number 2!");
			 return false;
		 }
		 
		 else if(teamCandidateName3.length==0&&parseInt(teamCount,10)==3){
			 displayAlertMessage("Please enter Name 3!");
			 return false;
		 }else if(teamCandidateEmailId3.length==0&&parseInt(teamCount,10)==3){
			 displayAlertMessage("Please enter Emaild 3!");
			 return false;
		 }else if(teamCandidateBranch3.length==0&&parseInt(teamCount,10)==3){
			 displayAlertMessage("Please select Branch 3!");
			 return false;
		 }else if(teamCandidateYear3.length==0&&parseInt(teamCount,10)==3){
			 displayAlertMessage("Please select Year 3!");
			 return false;
		 }else if(teamContactNumber3.length==0&&parseInt(teamCount,10)==3){
			 displayAlertMessage("Please enter Contact number 3!");
			 return false;
		 }
		 
		 else if(teamCandidateName4.length==0&&parseInt(teamCount,10)==4){
			 displayAlertMessage("Please enter Name 4!");
			 return false;
		 }else if(teamCandidateEmailId4.length==0&&parseInt(teamCount,10)==4){
			 displayAlertMessage("Please enter Emaild 4!");
			 return false;
		 }else if(teamCandidateBranch4.length==0&&parseInt(teamCount,10)==4){
			 displayAlertMessage("Please select Branch 4!");
			 return false;
		 }else if(teamCandidateYear4.length==0&&parseInt(teamCount,10)==4){
			 displayAlertMessage("Please select Year 4!");
			 return false;
		 }else if(teamContactNumber4.length==0&&parseInt(teamCount,10)==4){
			 displayAlertMessage("Please enter Contact number 4!");
			 return false;
		 }
		 else if(technicalExpertise.length==0){
			 displayAlertMessage("Please enter Technical Expertise!");
			 return false;
		 }
		 else if(whyAreYouTheBest.length==0){
			 displayAlertMessage("Please enter What is your technology idea!");
			 return false;
		 }
		 
		
		 
		 
		 else {
			 $("#btnCitizenHackSubmit").button('loading');
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

	

	function citizenFieldLengthValidator(element) {
		
		closeAlertMessage();
	    var i=0;
	    var label="";
	    //New Change middlename
	    /// alert("hai");
	   if(element.id=="teamCandidateName1")
	    {
	        i=60;
	        label="Candidate Name 1"
	    }else if(element.id=="teamCandidateEmailId1")
	    {
	        i=100;
	        label="Candidate Email 1"
	    }else if(element.id=="teamCandidateName2")
	    {
	        i=60;
	        label="Candidate Name 2"
	    }else if(element.id=="teamCandidateEmailId2")
	    {
	        i=100;
	        label="Candidate Email 2"
	    }else if(element.id=="teamCandidateName3")
	    {
	        i=60;
	        label="Candidate Name 3"
	    }else if(element.id=="teamCandidateEmailId3")
	    {
	        i=100;
	        label="Candidate Email 3"
	    }else if(element.id=="teamCandidateName4")
	    {
	        i=60;
	        label="Candidate name 4"
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
	    }else if(element.id=="otherCollegeName")
	    {
	        i=100;
	        label="Other College Name"
	    }else if(element.id=="aboutHim")
	    {
	        i=500;
	        label="Tell us a bit about yourself"
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

	function collegeType(obj){
		if(obj.value=='Other'){
			$("#otherCollegeName").show();
			
		}else {
			$("#otherCollegeName").hide();
			$("#otherCollegeName").val("");
			
		}
	}

	
	