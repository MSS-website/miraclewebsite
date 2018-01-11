/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


function getRegistrantDetails(regId) {
    //closeErrorMsg();
    $("#successmsg").hide();
    $("#errormsg").hide();
      document.getElementById("regId").value=0;
    document.getElementById("fname").value='';
    document.getElementById("lname").value='';
    document.getElementById("email").value='';
    document.getElementById("mobileNo").value='';
    document.getElementById("isAttended").checked=false;
    document.getElementById("ctype").value='Attendee';
    
    var xmlhttp;
                
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    }
    else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
               document.getElementById("processing").style.display = 'none';
           // $("#btnSubmit1").button('reset');
            var response=xmlhttp.responseText;
           //   alert(response);
            populateResults(response);
        //document.getElementById("posttype").innerHTML = xmlhttp.responseText;
        }else {
            document.getElementById("processing").style.display = 'block';
           // $("#btnSubmit1").button('loading');
        }
    }
    xmlhttp.open("GET","classes/AjaxDsRegistraintDetails.php?regId="+regId+"&date="+new Date(),true);
    xmlhttp.send();
  //  $('#myModal1').modal('show');
}


function populateResults(resText){
    
    var regDetails = resText.split("$#@");
    
    document.getElementById("regId").value=regDetails[0].trim();
    document.getElementById("fname").value=regDetails[1].trim();
    document.getElementById("lname").value=regDetails[2].trim();
    document.getElementById("email").value=regDetails[3].trim();
    document.getElementById("mobileNo").value=regDetails[4].trim();
   // document.getElementById("ctype").value=regDetails[6];
   $('#ctype option').each(function() {
      // alert($(this).val()+"--"+regDetails[6])
    if($(this).val() == regDetails[6].trim()) {
        
        $(this).prop("selected", true);
    }
});
  //  alert("ctype-->"+regDetails[6]);
  //  $("#ctype").val(regDetails[6]);
   // alert("ceh-->"+regDetails[5])
    if(parseInt(regDetails[5].trim(),10)==0){
        document.getElementById("isAttended").checked=false;
       // alert(0);
    }
    
else{
  //  alert(1);
    document.getElementById("isAttended").checked=true;
}
    
    $('#myModal1').modal('show');
}




function upadteAttendeeData(){
    $("#successmsg").hide();
    $("#errormsg").hide();
    //alert("insertEmployeeData");
    //  document.getElementById("resultMessage").innerHTML='';
    //closeErrorMsg();
    var regId = document.getElementById("regId").value;
    var fname = document.getElementById("fname").value;
    var lname = document.getElementById("lname").value;
    var email = document.getElementById("email").value;
    var mobileNo = document.getElementById("mobileNo").value;
    var ctype = document.getElementById("ctype").value;
    
    var isChecked = document.getElementById("isAttended").checked;
    if(isChecked){
        isChecked = 1;
    }else {
        isChecked = 0;
    }
    var xmlhttp;
                
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    }
    else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
      //  alert(xmlhttp.readyState+" -- "+xmlhttp.status)
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            // document.getElementById("loading").style.display = 'none';
            $("#btnUpdateSubmit").button('reset');
            var response=xmlhttp.responseText;
            //  alert(response);
            //  populateEmployeeInfo(response);
                
            if(parseInt(response,10)>0){
      
      
      $("#successmsg").show();
            }else {
                 $("#errormsg").show();
              //  alert("not updated");
            //    document.getElementById("resultMessage").innerHTML=response;
            }
                
        //document.getElementById("posttype").innerHTML = xmlhttp.responseText;
        }else {
            //   document.getElementById("loading").style.display = 'block';
            $("#btnUpdateSubmit").button('loading');
        }
    }
    xmlhttp.open("GET","classes/AjaxUpdateDsRegistraintDetails.php?regId="+regId+"&fname="+escape(fname)+"&lname="+escape(lname)+"&email="+escape(email)+"&mobileNo="+escape(mobileNo)+"&isChecked="+escape(isChecked)+"&ctype="+escape(ctype)+"&date="+new Date(),true);
    xmlhttp.send();
 
}



function getHackathonRegistrantDetails(hackRegId){
   // alert(hackRegId);
    // $('#myModal1').modal('show');
     
     
      $("#successmsg").hide();
    $("#errormsg").hide();
    
    


    
      document.getElementById("hackRegId").value=0;
    document.getElementById("fname").value='';
    document.getElementById("lname").value='';
   
    document.getElementById("isAttended").checked=false;
    document.getElementById("assignedTrack").value='';
    document.getElementById("teamCandidateName1").value='';
    document.getElementById("isAttended1").checked=false;
    document.getElementById("teamCandidateName2").value='';
    document.getElementById("isAttended2").checked=false;
    document.getElementById("teamCandidateName3").value='';
    document.getElementById("isAttended3").checked=false;
    
    
    
    var xmlhttp;
                
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    }
    else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
               document.getElementById("processing").style.display = 'none';
           // $("#btnSubmit1").button('reset');
            var response=xmlhttp.responseText;
           //   alert(response);
            populateMeanHackResults(response);
        //document.getElementById("posttype").innerHTML = xmlhttp.responseText;
        }else {
            document.getElementById("processing").style.display = 'block';
           // $("#btnSubmit1").button('loading');
        }
    }
    xmlhttp.open("GET","classes/AjaxDsMeanHackRegistraintDetails.php?hackRegId="+hackRegId+"&date="+new Date(),true);
    xmlhttp.send();
  //  $('#myModal1').modal('show');
}

function populateMeanHackResults(jsonData) {
var json = $.parseJSON(jsonData);
     var ResultString = json["ResultString"];
     
//Id,FirstName,LastName,EmailId,MobileNumber,CollegeName,TeamCandidateName,TeamCandidateName2,TeamCandidateName3,AssignedTrack,IsAttendedMain,IsAttendedTm1,IsAttendedTm2,IsAttendedTm3
      document.getElementById("hackRegId").value=json["Id"];
      
    document.getElementById("fname").value=json["FirstName"];
    document.getElementById("lname").value=json["LastName"];
    
    
     if(parseInt(json["IsAttendedMain"],10)==0)
    document.getElementById("isAttended").checked=false;
    else
        document.getElementById("isAttended").checked=true;
    
    document.getElementById("assignedTrack").value=json["AssignedTrack"];
    document.getElementById("teamCandidateName1").value=json["TeamCandidateName"];
    if(parseInt(json["IsAttendedTm1"],10)==0)
    document.getElementById("isAttended1").checked=false;
else
    document.getElementById("isAttended1").checked=true;


    document.getElementById("teamCandidateName2").value=json["TeamCandidateName2"];
     if(parseInt(json["IsAttendedTm2"],10)==0)
    document.getElementById("isAttended2").checked=false;
else
    document.getElementById("isAttended2").checked=true;


    document.getElementById("teamCandidateName3").value=json["TeamCandidateName3"];
    if(parseInt(json["IsAttendedTm3"],10)==0)
    document.getElementById("isAttended3").checked=false;
else
    document.getElementById("isAttended3").checked=false;

$('#myModal1').modal('show');
}






function upadteMeanHackAttendeeData(){
    $("#successmsg").hide();
    $("#errormsg").hide();
    
    
    
   
    //alert("insertEmployeeData");
    //  document.getElementById("resultMessage").innerHTML='';
    //closeErrorMsg();
    var assignedTrack = document.getElementById("assignedTrack").value;
     if(assignedTrack.trim().length==0){
         displayErrorMessage("Please assign track!");
     }else {
    var regId = document.getElementById("hackRegId").value;
    var fname = document.getElementById("fname").value;
    var lname = document.getElementById("lname").value;
    
    var teamCandidateName1 = document.getElementById("teamCandidateName1").value;
    var teamCandidateName2 = document.getElementById("teamCandidateName2").value;
    var teamCandidateName3 = document.getElementById("teamCandidateName3").value;
    
   
    var isChecked = document.getElementById("isAttended").checked;
    if(isChecked){
        isChecked = 1;
    }else {
        isChecked = 0;
    }
    
    
    
     var isChecked1 = document.getElementById("isAttended1").checked;
    if(isChecked1){
        isChecked1 = 1;
    }else {
        isChecked1 = 0;
    }

 var isChecked2 = document.getElementById("isAttended2").checked;
    if(isChecked2){
        isChecked2 = 1;
    }else {
        isChecked2 = 0;
    }
    
     var isChecked3 = document.getElementById("isAttended3").checked;
    if(isChecked3){
        isChecked3 = 1;
    }else {
        isChecked3 = 0;
    }
    
    
    
    var xmlhttp;
                
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    }
    else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
      //  alert(xmlhttp.readyState+" -- "+xmlhttp.status)
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            // document.getElementById("loading").style.display = 'none';
            $("#btnUpdateSubmit").button('reset');
            var response=xmlhttp.responseText;
            //  alert(response);
            //  populateEmployeeInfo(response);
                
            if(parseInt(response,10)>0){
      
      
      $("#successmsg").show();
            }else {
                 $("#errormsg").show();
              //  alert("not updated");
            //    document.getElementById("resultMessage").innerHTML=response;
            }
                
        //document.getElementById("posttype").innerHTML = xmlhttp.responseText;
        }else {
            //   document.getElementById("loading").style.display = 'block';
            $("#btnUpdateSubmit").button('loading');
        }
    }
    xmlhttp.open("GET","classes/AjaxUpdateDsHackRegistraintDetails.php?hackRegId="+regId+"&fname="+escape(fname)+"&lname="+escape(lname)+"&teamCandidateName1="+escape(teamCandidateName1)+"&teamCandidateName2="+escape(teamCandidateName2)+"&isChecked="+escape(isChecked)+"&isChecked1="+escape(isChecked1)+"&isChecked2="+escape(isChecked2)+"&isChecked3="+escape(isChecked3)+"&assignedTrack="+escape(assignedTrack)+"&teamCandidateName3="+teamCandidateName3+"&date="+new Date(),true);
    xmlhttp.send();
     }
}
