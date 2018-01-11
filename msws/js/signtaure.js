/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

var isTextAreaCreated=false;
   var editor ;
function getSignature(){
  //  $("#signatureCode").val("");
$("#signatureView").html("");
     $("#buttonDiv").hide();
     $("#signatureDiv").hide();
     $("#stepsDiv").hide();
     $("#topHr").hide();
     $("#bottomHr").hide();
      $("#italicDiv").hide();
      $("#faqDiv").hide();
    
       
   document.getElementById("signatureDivId").innerHTML='';
  document.getElementById("signatureDivId").innerHTML='<textarea id="signatureCode"></textarea>';
     document.getElementById("signatureCode").value='';
     
     
    var name=$("#firstname").val().trim();
    var Designation=$("#designation").val().trim();
    var Email=$("#email").val().trim();
    var  WorkPhone=$("#workPhone").val().trim();
   // var Department=$("#department").val().trim();
    var  Mobile=$("#mobile").val().trim();
    var  Location=$("#location").val().trim();
    var PartnerLogo = $("#partnerLogo").val().trim();
   // alert(PartnerLogo);
    var isValid=false;
     if(name.trim().length==0){
         showAlertModal("Please enter Name.");
     }else if(Designation.trim().length==0){
         showAlertModal("Please enter Designation.");
     }else if(Email.trim().length==0){
         showAlertModal("Please enter Email.");
     }else if(WorkPhone.trim().length==0){
         showAlertModal("Please enter WorkPhone.");
     }
//     else if(Department.trim().length==0){
//         showAlertModal("Please enter Department.");
//     }
     else if(Mobile.trim().length==0){
         showAlertModal("Please enter Mobile number.");
     }else if(Location.trim().length==0){
         showAlertModal("Please select Location.");
     }else {
         isValid=true;
     }
     var livingCountry=$("#livingCountry").val().trim();
if(isValid){
 var signature="";
 
if(PartnerLogo==''){
    
 signature="<html>\n";
signature=signature+"     <head></head>\n";
signature=signature+"              <body>\n";


signature=signature+'        <table style="border: 0px">\n';
signature=signature+'            <tbody>\n';
signature=signature+'                <tr>\n';
signature=signature+'                    <td style="font-size: 15px; font-family: Calibri;" valign="top" align="left"><b>'+name+'</b><br/>\n';
signature=signature+'                       <span style="font-size: 14px"> '+Designation+'\n';
signature=signature+'                        </span>\n';
signature=signature+'                    </td>\n';
signature=signature+'                    <td width="80"></td>\n';

signature=signature+'                    <td align="right"><a href="http://www.miraclesoft.com" target="blank"><img src="http://www.miraclesoft.com/images/newsletters/miracle-logo-dark1.png" alt="logo"/></a></td>\n';
signature=signature+'                </tr>\n';
signature=signature+'                <tr>\n';
signature=signature+'                    <td colspan="4">\n';
signature=signature+'                        <hr/>\n';
signature=signature+'                    </td>\n';
signature=signature+'                </tr>\n';
signature=signature+'                <tr>\n';
signature=signature+'                    <td style="font-size: 14px; font-family: Calibri;" valign="top" align="left"><b>Phone&nbsp;:&nbsp;</b>'+WorkPhone+'<br/>\n';
signature=signature+'                        <b>Mobile&nbsp;:&nbsp;</b>'+Mobile+'<br/>\n';
signature=signature+'                        <b>Email&nbsp;:&nbsp;</b><a href="mailto:'+Email+'" target="blank">'+Email+'</a><br/>\n';

signature=signature+'<table style="margin-top:3px;" ><tr>';
signature=signature+'<td>                        <a href="https://www.facebook.com/miracle45625/" target="blank" style="color:#ef4048; text-decoration: none;"><img src="http://www.miraclesoft.com/images/newsletters/facebook1.png"/></a></td>\n';
signature=signature+'<td>                       <a href="https://plus.google.com/+Team_MSS" target="blank" style="color:#ef4048; text-decoration: none;"><img src="http://www.miraclesoft.com/images/newsletters/googleplus1.png"/></a></td>\n';
signature=signature+'<td>                        <a href="https://www.linkedin.com/company/miracle-software-systems-inc" target="blank" style="color:#ef4048; text-decoration: none;"><img src="http://www.miraclesoft.com/images/newsletters/Linkedin1.png"/></a></td>\n';
signature=signature+'<td>                        <a href="https://www.youtube.com/c/Team_MSS" target="blank" style="color:#ef4048; text-decoration: none;"><img src="http://www.miraclesoft.com/images/newsletters/youtube1.png"/></a></td>\n';
signature=signature+'<td>                        <a href="https://twitter.com/Team_MSS" target="blank" style="color:#ef4048; text-decoration: none;"><img src="http://www.miraclesoft.com/images/newsletters/Twitter1.png"/></a></td>\n';
//signature=signature+'                        </div>';
signature=signature+'</tr></table>';
signature=signature+'                    </td>\n';
if(Location=='HQ'){
signature=signature+'                    <td width="80"></td>\n';
signature=signature+'                    <td style="font-size:14px; font-family: calibri" valign="top" align="right">\n';
signature=signature+'                        Miracle Software Systems, Inc.<br/>\n';
signature=signature+'                        45625 Grand River Avenue<br/>\n';
signature=signature+'                        Novi MI(48374) USA<br/>\n';
signature=signature+'                        <a href="http://www.miraclesoft.com" target="blank">www.miraclesoft.com</a>\n ';
signature=signature+'                    </td>\n';
}else if(Location=='Atlanta'){
    signature=signature+'                    <td width="80"></td>\n';
signature=signature+'                    <td style="font-size:14px; font-family: calibri" valign="top" align="right">\n';
signature=signature+'                    Miracle Software Systems, Inc.<br/>\n';
signature=signature+'                    6465 East John\'s Crossing<br/>\n';
signature=signature+'                    Suite 315, Duluth GA USA <br/>\n';
signature=signature+'                    <a href="http://www.miraclesoft.com" target="blank">www.miraclesoft.com</a>\n';
signature=signature+'                    </td> \n ';
}else if(Location=='Bentonville'){
    signature=signature+'                    <td width="80"></td>\n';

signature=signature+'                    <td style="font-size:14px; font-family: calibri" valign="top" align="right">\n';
signature=signature+'                    Miracle Software Systems, Inc.<br/>\n';
signature=signature+'                    2601 North Walton Blvd, Ste 9<br/>\n';
signature=signature+'                    Bentonville, AR(72712) <br/>\n';
signature=signature+'                    <a href="http://www.miraclesoft.com" target="blank">www.miraclesoft.com</a>\n';
signature=signature+'                    </td>\n';
}else if(Location=='Cincinnati'){
    signature=signature+'                    <td width="80"></td>\n';
signature=signature+'                    <td style="font-size:14px; font-family: calibri" valign="top" align="right">\n';
signature=signature+'                    Miracle Software Systems, Inc.<br/>\n';
signature=signature+'                    100 Techne Center Dr. Suite #120<br/>\n';
signature=signature+'                    Cincinnati, OH(45150) USA <br/>\n';
signature=signature+'                    <a href="http://www.miraclesoft.com" target="blank">www.miraclesoft.com</a>\n';
signature=signature+'                    </td>   \n';
}else if(Location=='GDC'){
    signature=signature+'                    <td width="80"></td>\n';
signature=signature+'                    <td style="font-size:14px; font-family: calibri" valign="top" align="right">\n';
signature=signature+'                    Miracle City – Global Delivery Center<br/>\n';
signature=signature+'                    Munjeru Village, Bhogapuram<br/>\n';
signature=signature+'                    Vizianagaram, AP 535216 India <br/>';
signature=signature+'                    <a href="http://www.miraclesoft.com" target="blank">www.miraclesoft.com</a>\n';
signature=signature+'                    </td>  \n ';
}else if(Location=='IO'){
    signature=signature+'                    <td width="80"></td>\n';
signature=signature+'                    <td style="font-size:14px; font-family: calibri" valign="top" align="right">\n';
signature=signature+'                    Miracle Software Systems Pvt. Ltd.<br/>\n';
signature=signature+'                    MIG-49 Lawsons Bay Colony<br/>\n';
signature=signature+'                    Visakhapatnam, AP - 530017, India <br/>\n';
signature=signature+'                    <a href="http://www.miraclesoft.com" target="blank">www.miraclesoft.com</a>\n';
signature=signature+'                    </td>  \n';
}else if(Location=='IH'){
    signature=signature+'                    <td width="80"></td>\n';
signature=signature+'                    <td style="font-size:14px; font-family: calibri" valign="top" align="right">\n';
signature=signature+'                    Miracle Heights – APAC HQ<br/>\n';
signature=signature+'                    Hill No. 1, IT SEZ, Chinna Rushi Konda<br/>\n';
signature=signature+'                    Visakhapatnam, AP - 530045, India <br/>\n';
signature=signature+'                    <a href="http://www.miraclesoft.com" target="blank">www.miraclesoft.com</a>\n';
signature=signature+'                    </td>\n';
}else if(Location=='OL'){
    
    if($("#actualdesignation").val().trim()=='BDM') {
         
signature=signature+'                    <td width="80"></td>\n';
signature=signature+'                    <td style="font-size:14px; font-family: calibri" valign="top" align="right">\n';
if($("#country").val()=='USA')
signature=signature+'                        Miracle Software Systems, Inc.<br/>\n';
else if($("#country").val()=='Canada')
    signature=signature+'                         Miracle Software Systems(Canada), Inc.<br/>\n';
else
    signature=signature+'                         Miracle Software Systems (I) Pvt. Ltd.<br/>\n';
signature=signature+'                        '+$("#address").val()+'<br/>\n';
signature=signature+'                        '+$("#city").val()+', '+$("#state").val()+' | '+$("#country").val()+'<br/>\n';
signature=signature+'                        <a href="http://www.miraclesoft.com" target="blank">www.miraclesoft.com</a> \n';
signature=signature+'                    </td>\n';
    }
    else if(livingCountry=='India'){
   signature=signature+'                    <td width="80"></td>\n';
signature=signature+'                    <td style="font-size:14px; font-family: calibri" valign="top" align="right">\n';
signature=signature+'                    Miracle Heights - APAC HQ<br/>\n';
signature=signature+'                    Hill No. 1, IT SEZ, Chinna Rushi Konda<br/>\n';
signature=signature+'                    Visakhapatnam, AP - 530045, India <br/>\n';
signature=signature+'                    <a href="http://www.miraclesoft.com" target="blank">www.miraclesoft.com</a>\n';
signature=signature+'                    </td>\n';
    }else if(livingCountry=='USA'){
      signature=signature+'                    <td width="80"></td>\n';
signature=signature+'                    <td style="font-size:14px; font-family: calibri" valign="top" align="right">\n';
signature=signature+'                        Miracle Software Systems, Inc.<br/>\n';
signature=signature+'                        45625 Grand River Avenue<br/>\n';
signature=signature+'                        Novi MI(48374) USA<br/>\n';
signature=signature+'                        <a href="http://www.miraclesoft.com" target="blank">www.miraclesoft.com</a>\n ';
signature=signature+'                    </td>\n';
    }
}

signature=signature+'                </tr>\n';
signature=signature+'            </tbody>\n'
signature=signature+'        </table></body></html> ';

}else {
  //  alert("Else");
    signature=signature+'<html>\n';
   signature=signature+' <head></head>\n';
    signature=signature+'         <body>\n';
     signature=signature+' <table>\n';
     signature=signature+'      <tbody>\n';
       signature=signature+'        <tr>\n';
       signature=signature+'            <td style="font-size: 15px; font-family: Calibri;" valign="top" align="left"><b>'+name+'</b><br/>\n';
        signature=signature+'              <span style="font-size: 14px"> '+Designation+'\n';
            signature=signature+'           </span>\n';
           signature=signature+'            <br/> <b>Phone&nbsp;:&nbsp;</b>'+WorkPhone+'<br/>\n';
              signature=signature+'         <b>Mobile&nbsp;:&nbsp;</b>'+Mobile+'<br/>\n';
                 signature=signature+'      <b>Email&nbsp;:&nbsp;</b><a href="mailto:'+Email+'" target="blank">'+Email+'</a><br/>\n';
               signature=signature+'    </td>\n';
                signature=signature+'   <td width="80"></td>\n';
                 signature=signature+'   <td style="font-size: 14px; font-family: Calibri;" valign="top" align="right">\n';
                 if(Location=='HQ'){
               signature=signature+'        Miracle Software Systems, Inc.<br/>\n';
                 signature=signature+'      45625 Grand River Avenue<br/>\n';
                 signature=signature+'      Novi MI(48374) USA<br/>\n';
                  signature=signature+'     <a href="http://www.miraclesoft.com" target="blank">www.miraclesoft.com</a>\n';
                  
                 }else if(Location=='Atlanta'){
//signature=signature+'                    <td style="font-size:14px; font-family: calibri" valign="top" align="right">\n';
signature=signature+'                    Miracle Software Systems, Inc.<br/>\n';
signature=signature+'                    6465 East John\'s Crossing<br/>\n';
signature=signature+'                    Suite 315, Duluth GA USA <br/>\n';
signature=signature+'                    <a href="http://www.miraclesoft.com" target="blank">www.miraclesoft.com</a>\n';
}else if(Location=='Bentonville'){
signature=signature+'                    Miracle Software Systems, Inc.<br/>\n';
signature=signature+'                    2601 North Walton Blvd, Ste 9<br/>\n';
signature=signature+'                    Bentonville, AR(72712) <br/>\n';
signature=signature+'                    <a href="http://www.miraclesoft.com" target="blank">www.miraclesoft.com</a>\n';
}else if(Location=='Cincinnati'){

//signature=signature+'                    <td style="font-size:14px; font-family: calibri" valign="top" align="right">\n';
signature=signature+'                    Miracle Software Systems, Inc.<br/>\n';
signature=signature+'                    100 Techne Center Dr. Suite #120<br/>\n';
signature=signature+'                    Cincinnati, OH(45150) USA <br/>\n';
signature=signature+'                    <a href="http://www.miraclesoft.com" target="blank">www.miraclesoft.com</a>\n';

}else if(Location=='GDC'){
signature=signature+'                    Miracle City – Global Delivery Center<br/>\n';
signature=signature+'                    Munjeru Village, Bhogapuram<br/>\n';
signature=signature+'                    Vizianagaram, AP 535216 India <br/>';
signature=signature+'                    <a href="http://www.miraclesoft.com" target="blank">www.miraclesoft.com</a>\n';
}else if(Location=='IO'){
signature=signature+'                    Miracle Software Systems Pvt. Ltd.<br/>\n';
signature=signature+'                    MIG-49 Lawsons Bay Colony<br/>\n';
signature=signature+'                    Visakhapatnam, AP - 530017, India <br/>\n';
signature=signature+'                    <a href="http://www.miraclesoft.com" target="blank">www.miraclesoft.com</a>\n';
}else if(Location=='IH'){
signature=signature+'                    Miracle Heights – APAC HQ<br/>\n';
signature=signature+'                    Hill No. 1, IT SEZ, Chinna Rushi Konda<br/>\n';
signature=signature+'                    Visakhapatnam, AP - 530045, India <br/>\n';
signature=signature+'                    <a href="http://www.miraclesoft.com" target="blank">www.miraclesoft.com</a>\n';
}
else if(Location=='OL'){
if($("#actualdesignation").val().trim()=='BDM') {
if($("#country").val()=='USA')
signature=signature+'                        Miracle Software Systems, Inc.<br/>\n';
else if($("#country").val()=='Canada')
    signature=signature+'                         Miracle Software Systems(Canada), Inc.<br/>\n';
else
    signature=signature+'                         Miracle Software Systems (I) Pvt. Ltd.<br/>\n';
signature=signature+'                        '+$("#address").val()+'<br/>\n';
signature=signature+'                        '+$("#city").val()+', '+$("#state").val()+' | '+$("#country").val()+'<br/>\n';
signature=signature+'                        <a href="http://www.miraclesoft.com" target="blank">www.miraclesoft.com</a> \n';
}else if(livingCountry=='India'){
signature=signature+'                    Miracle Heights - APAC HQ<br/>\n';
signature=signature+'                    Hill No. 1, IT SEZ, Chinna Rushi Konda<br/>\n';
signature=signature+'                    Visakhapatnam, AP - 530045, India <br/>\n';
signature=signature+'                    <a href="http://www.miraclesoft.com" target="blank">www.miraclesoft.com</a>\n';
}else if(livingCountry=='USA'){
signature=signature+'                        Miracle Software Systems, Inc.<br/>\n';
signature=signature+'                        45625 Grand River Avenue<br/>\n';
signature=signature+'                        Novi MI(48374) USA<br/>\n';
signature=signature+'                        <a href="http://www.miraclesoft.com" target="blank">www.miraclesoft.com</a>\n ';
}

}

                 
                 
                  
                   signature=signature+'    <br>\n';
		/*			   
			signature=signature+'		   <a href="https://www.facebook.com/miracle45625/" target="blank" style="color:#ef40; text-decoration: none;"><img src="http://www.miraclesoft.com/images/newsletters/facebook1.png"/></a>\n';
                   signature=signature+'    <a href="https://plus.google.com/+Team_MSS" target="blank" style="color:#ef4048; text-decoration: none;"><img src="http://www.miraclesoft.com/images/newsletters/googleplus1.png"/></a>\n';
                  signature=signature+'     <a href="https://www.linkedin.com/company/miracle-software-systems-inc" target="blank" style="color:#ef4048; text-decoration: none;"><img src="http://www.miraclesoft.com/images/newsletters/Linkedin1.png"/></a>\n';
                    signature=signature+'   <a href="https://www.youtube.com/c/Team_MSS" target="blank" style="color:#ef4048; text-decoration: none;"><img src="http://www.miraclesoft.com/images/newsletters/youtube1.png"/></a>\n';
                     signature=signature+'  <a href="https://twitter.com/Team_MSS" target="blank" style="color:#ef4048; text-decoration: none;"><img src="http://www.miraclesoft.com/images/newsletters/Twitter1.png"/></a>\n';
*/
signature=signature+'<table style="margin-top:3px;" ><tr>';
signature=signature+'<td>                        <a href="https://www.facebook.com/miracle45625/" target="blank" style="color:#ef4048; text-decoration: none;"><img src="http://www.miraclesoft.com/images/newsletters/facebook1.png"/></a></td>\n';
signature=signature+'<td>                       <a href="https://plus.google.com/+Team_MSS" target="blank" style="color:#ef4048; text-decoration: none;"><img src="http://www.miraclesoft.com/images/newsletters/googleplus1.png"/></a></td>\n';
signature=signature+'<td>                        <a href="https://www.linkedin.com/company/miracle-software-systems-inc" target="blank" style="color:#ef4048; text-decoration: none;"><img src="http://www.miraclesoft.com/images/newsletters/Linkedin1.png"/></a></td>\n';
signature=signature+'<td>                        <a href="https://www.youtube.com/c/Team_MSS" target="blank" style="color:#ef4048; text-decoration: none;"><img src="http://www.miraclesoft.com/images/newsletters/youtube1.png"/></a></td>\n';
signature=signature+'<td>                        <a href="https://twitter.com/Team_MSS" target="blank" style="color:#ef4048; text-decoration: none;"><img src="http://www.miraclesoft.com/images/newsletters/Twitter1.png"/></a></td>\n';
//signature=signature+'                        </div>';
signature=signature+'</tr></table>';
                signature=signature+'   </td>\n';
             signature=signature+'  </tr>\n';
            signature=signature+'   <tr>\n';
               signature=signature+'    <td colspan="3">\n';
                 signature=signature+'      <hr/>\n';
                signature=signature+'   </td>\n';
              signature=signature+' </tr>\n';
              signature=signature+' <tr>\n';
                 signature=signature+'  <td align="left"><a href="http://www.miraclesoft.com" target="blank"><img src="http://www.miraclesoft.com/images/newsletters/miracle-logo-dark1.png" alt="logo"/></a></td>\n';
                signature=signature+'   <td width="80px"></td>\n';
                signature=signature+'   <td style="font-size:14px; font-family: calibri"  align="right">\n';
                
                if(PartnerLogo=='IBM'){
                  //signature=signature+'     <a href="http://www.ibm.com/in-en/" target="blank">\n';
                  signature=signature+' <img src="http://www.miraclesoft.com/images/partner/IBM.png"/>\n';
}else if(PartnerLogo=='SAP'){
    //signature=signature+'     <a href="http://go.sap.com/index.html" target="blank">\n';
                  signature=signature+' <img src="http://www.miraclesoft.com/images/partner/SAP.png"/>\n';
}else if(PartnerLogo=='ORACLE'){
    //signature=signature+'     <a href="https://www.oracle.com/index.html" target="blank">\n';
                  signature=signature+' <img src="http://www.miraclesoft.com/images/partner/Oracle.png"/>\n';
}else if(PartnerLogo=='MuleSoft'){
    //signature=signature+'     <a href="https://www.mulesoft.com/" target="blank">\n';
                  signature=signature+' <img src="http://www.miraclesoft.com/images/partner/mulesoft-partner-new.png"/>\n';
}else if(PartnerLogo=='Apigee'){
    //signature=signature+'     <a href="https://apigee.com/about/partners/partners-list#consulting" target="blank">\n';
                  signature=signature+' <img src="http://www.miraclesoft.com/images/partner/apigee-partner-new.png"/>\n';
}else if(PartnerLogo=='Amazon'){
    //signature=signature+'     <a href="https://aws.amazon.com/" target="blank">\n';
                  signature=signature+' <img src="http://www.miraclesoft.com/images/partner/amazon-partner-new.png"/>\n';
}else if(PartnerLogo=='Redhat'){
    //signature=signature+'     <a href="https://aws.amazon.com/" target="blank">\n';
                  signature=signature+' <img src="http://www.miraclesoft.com/images/partner/redhat-partner-new.png"/>\n';
}else if(PartnerLogo=='Rally'){
    //signature=signature+'     <a href="https://aws.amazon.com/" target="blank">\n';
                  signature=signature+' <img src="http://www.miraclesoft.com/images/partner/rally-partner-new.png"/>\n';
}else if(PartnerLogo=='Morpheus'){
    //signature=signature+'     <a href="https://aws.amazon.com/" target="blank">\n';
                  signature=signature+' <img src="http://www.miraclesoft.com/images/partner/morpheus-new.png"/>\n';
}else if(PartnerLogo=='Microsoft'){
    //signature=signature+'     <a href="https://aws.amazon.com/" target="blank">\n';
                  signature=signature+' <img src="http://www.miraclesoft.com/images/partner/microsoft-partner-new.png"/>\n';
}else if(PartnerLogo=='HP'){
    //signature=signature+'     <a href="https://aws.amazon.com/" target="blank">\n';
                  signature=signature+' <img src="http://www.miraclesoft.com/images/partner/hp-partner-logo-new.png"/>\n';
}else if(PartnerLogo=='Cloudera'){
    //signature=signature+'     <a href="https://aws.amazon.com/" target="blank">\n';
                  signature=signature+' <img src="http://www.miraclesoft.com/images/partner/cloudera_connect_logo-new.png"/>\n';
}else if(PartnerLogo=='CaLogo'){
    //signature=signature+'     <a href="https://aws.amazon.com/" target="blank">\n';
                  signature=signature+' <img src="http://www.miraclesoft.com/images/partner/CaLogo-new.png"/>\n';
}else if(PartnerLogo=='Axway'){
    //signature=signature+'     <a href="https://aws.amazon.com/" target="blank">\n';
                  signature=signature+' <img src="http://www.miraclesoft.com/images/partner/axway-partner-new.png"/>\n';
}else if(PartnerLogo=='Atlassian'){
    //signature=signature+'     <a href="https://aws.amazon.com/" target="blank">\n';
                  signature=signature+' <img src="http://www.miraclesoft.com/images/partner/Atlassian-new.png"/>\n';
}else if(PartnerLogo=='Tag'){
    //signature=signature+'     <a href="https://aws.amazon.com/" target="blank">\n';
                  signature=signature+' <img src="http://www.miraclesoft.com/images/partner/Tag-new.png"/>\n';
}else if(PartnerLogo=='Pivotal'){
    //signature=signature+'     <a href="https://aws.amazon.com/" target="blank">\n';
                  signature=signature+' <img src="http://www.miraclesoft.com/images/partner/pivotal-new.png"/>\n';
}else if(PartnerLogo=='PitneyBowes'){
    //signature=signature+'     <a href="https://aws.amazon.com/" target="blank">\n';
                  signature=signature+' <img src="http://www.miraclesoft.com/images/partner/pitney-bowes-new.png"/>\n';
}else if(PartnerLogo=='APCloud'){
    //signature=signature+'     <a href="https://aws.amazon.com/" target="blank">\n';
                  signature=signature+' <img src="http://www.miraclesoft.com/images/partner/Ap-cloud-new.png"/>\n';
}else if(PartnerLogo=='digitalsummit'){
    //signature=signature+'     <a href="https://aws.amazon.com/" target="blank">\n';
    //signature=signature+' <img src="http://www.miraclesoft.com/images/partner/digital-summit-signature.png"/>\n';
	signature=signature+' <img src="http://www.miraclesoft.com/images/partner/Signature.svg" height="100px"/>\n';
}
       
                
       
                signature=signature+'   \n';
                signature=signature+'    </td>\n';
              signature=signature+' </tr>\n';
         signature=signature+'  </tbody>\n';
     signature=signature+'  </table></body></html>\n';
    
    
}

var codeSignature= '';
codeSignature =  signature.replace(/</g, "&lt;");
codeSignature =  codeSignature.replace(/>/g, "&gt;");
//
//alert(codeSignature);

$("#signatureCode").val(signature);
 
// $("#ss").html('<pre class="code language-html">'+codeSignature+'</pre>');
 
 
//$("#signatureCode").html('<div class="col-sm-6 scroll"><pre>&lt;!doctype html &gt;'+codeSignature+'</pre> </div>');
//$("#signatureCode").html('<pre>&lt;!doctype html &gt;'+codeSignature+'</pre>');
//$("#signatureView").html("<div style='border: 2px solid gray;' ><br>"+signature+"<br></div>");
//$("#signatureView").html('<div class="col-sm-6"><div class="embed-responsive-item col-sm-12">'+signature+'</div></div>');
$("#signatureView").html(signature);
//$('#signatureView').contents().find('html').html(signature);
//document.getElementById('signatureView').src = "data:text/html;charset=utf-8," + escape(signature);
//$("#signatureView").html(signature);
     $("#buttonDiv").show();
     $("#signatureDiv").show();
     $("#stepsDiv").show();
     $("#topHr").show();
     $("#bottomHr").show();
     $("#italicDiv").show();
       $("#faqDiv").show();
   //  $.SyntaxHighlighter.init();
        editor = CodeMirror.fromTextArea(document.getElementById("signatureCode"), {
                        lineNumbers: true,
                       readOnly:'cursor'
                       
                       
                       
                    });
                    
                    
                    //CodeMirror.onFocus(document.getElementById("signatureCode"));
  
      //alert($("#signatureCode").val());
    
                    
     
      
}

}



/*
 *Populate Countries 
 *Date : 04/04/2016
 * 
 */


// Countries
var country_arr = new Array("India",  "Canada", "USA");

// States
var s_a = new Array();
s_a[1]="Andaman and Nicobar Islands|Andhra Pradesh|Arunachal Pradesh|Assam|Bihar|Chandigarh|Chhattisgarh|Dadra and Nagar Haveli|Daman and Diu|Delhi|Goa|Gujarat|Haryana|Himachal Pradesh|Jammu and Kashmir|Jharkhand|Karnataka|Kerala|Lakshadweep|Madhya Pradesh|Maharashtra|Manipur|Meghalaya|Mizoram|Nagaland|Orissa|Pondicherry|Punjab|Rajasthan|Sikkim|Tamil Nadu|Tripura|Uttar Pradesh|Uttaranchal|West Bengal";
s_a[2]="Alberta|British Columbia|Manitoba|New Brunswick|Newfoundland|Northwest Territories|Nova Scotia|Nunavut|Ontario|Prince Edward Island|Quebec|Saskatchewan|Yukon Territory";
s_a[3]="Alabama|Alaska|Arizona|Arkansas|California|Colorado|Connecticut|Delaware|District of Columbia|Florida|Georgia|Hawaii|Idaho|Illinois|Indiana|Iowa|Kansas|Kentucky|Louisiana|Maine|Maryland|Massachusetts|Michigan|Minnesota|Mississippi|Missouri|Montana|Nebraska|Nevada|New Hampshire|New Jersey|New Mexico|New York|North Carolina|North Dakota|Ohio|Oklahoma|Oregon|Pennsylvania|Rhode Island|South Carolina|South Dakota|Tennessee|Texas|Utah|Vermont|Virginia|Washington|West Virginia|Wisconsin|Wyoming";


function populateStates( countryElementId, stateElementId ){
	
	var selectedCountryIndex = document.getElementById( countryElementId ).selectedIndex;

	var stateElement = document.getElementById( stateElementId );
	
	stateElement.length=0;	// Fixed by Julian Woods
	stateElement.options[0] = new Option('Select State','');
	stateElement.selectedIndex = 0;
	
	var state_arr = s_a[selectedCountryIndex].split("|");
	
	for (var i=0; i<state_arr.length; i++) {
		stateElement.options[stateElement.length] = new Option(state_arr[i],state_arr[i]);
	}
}

function populateCountries(countryElementId, stateElementId){
	// given the id of the <select> tag as function argument, it inserts <option> tags
	var countryElement = document.getElementById(countryElementId);
	countryElement.length=0;
	countryElement.options[0] = new Option('Select Country','-1');
	countryElement.selectedIndex = 0;
	for (var i=0; i<country_arr.length; i++) {
		countryElement.options[countryElement.length] = new Option(country_arr[i],country_arr[i]);
	}

	// Assigned all countries. Now assign event listener for the states.

	if( stateElementId ){
		countryElement.onchange = function(){
			populateStates( countryElementId, stateElementId );
		};
	}
}


 function doSignatureLogin() {
                    //alert("dgd---------------------->");
                    var loginId=document.getElementById("loginId").value;
                    var password=document.getElementById("password").value;
                    // alert("dgd---------------------->");
                    if(loginId.trim().length!=0 && password.trim().length!=0 ){
                        checkSignatureLogin(loginId,password);
                        //getValue();
                        //alert("dgddddddddddddd---------------------->");hide
                    }else {
                        document.getElementById("resultMessage").innerHTML="<font color='red'>Please enter details.</font>";
                        //  alert("dgddddddaaaaaaaaa---------------------->");
                    }
                }
                
                
                      
    /*Webservice call from Jquery
     *  Date : 04/10/2017
     *  Author : Santosh Kola
     */                        
            
            
            
       
function checkSignatureLogin(loginId,password){
     closeErrorMsg();
    $("#btnSubmit1").button('loading');
      var jsonData={};
            jsonData["LoginId"] = loginId;
            jsonData["Password"] = password;
            jsonData["Authorization"] = AUTHENTICATION;  
           $.ajax({
        url: LOGIN_SERVICE_URL,
        method: "POST",
        data: JSON.stringify(jsonData),
        dataType: 'json',
        contentType: "application/json",
         success: function(result,status,jqXHR ){
		//alert("In success---"+result["ResultString"]);
               // alert(result["ResultString"]);
              $("#btnSubmit1").button('reset');
                if(result["ResultString"]=="Valid"){
                  
    var Country=result["Country"]
    var FName=result["FName"];
    var LName=result["LName"];
    var CellPhoneNo=result["CellPhoneNo"];
    var OrgId=result["OrgId"];
    var Email1=result["Email1"];
    var TitleTypeId=result["TitleTypeId"];
    var WorkPhoneNo=result["WorkPhoneNo"];
 
        document.getElementById("livingCountry").value=Country;
   
        document.getElementById("firstname").value=FName+" "+LName;
        document.getElementById("mobile").value=CellPhoneNo;
        document.getElementById("email").value=Email1;
        document.getElementById("designation").value=TitleTypeId;
        document.getElementById("workPhone").value=WorkPhoneNo;
       $("#actualdesignation").val(TitleTypeId);
        document.getElementById("loginModalClosId").click();
        
    }else {
        if(result["ResultString"]=="InValidCredentiales")
       displayErrorMessage(INVALID_CREDENTIALES_MESSAGE);
   
       else
           displayErrorMessage(INACTIVE_MESSAGE);
    }
        
         },
         error: function (xhr) {
             $("#btnSubmit1").button('reset');
             displayErrorMessage(xhr.responseText);
           
        }
    });


}

function displayErrorMessage(message){
    $("#resultMessage").html(message);
    $("#errorMsgDiv").show();
}
function closeErrorMsg() {
    $("#resultMessage").html("");
    $("#errorMsgDiv").hide();
}
     

function setOtherLocations(){
    $("#alertMessage").html("");
     var country=$("#country").val().trim();
     var address=$("#address").val().trim();
      var state='';
     // alert($('#state'))
     // alert($('#state').length)
     //if($('#state').length)
     state=$("#state").val();
 
     var city=$("#city").val().trim();
     var isEntered=false;
      if(country.trim()=='-1'){
          $("#alertMessage").html("<font color='red' size='3px'>Please select Country</font>");
     }else if(state.trim().length==0){
         $("#alertMessage").html("<font color='red' size='3px'>Please select State</font>");
     }else if(address.trim().length==0){
         $("#alertMessage").html("<font color='red' size='3px'>Please enter Address</font>");
     }else if(city.trim().length==0){
         $("#alertMessage").html("<font color='red' size='3px'>Please enter city</font>");
     }else {
         isEntered=true;
     }
     if(isEntered){
        document.getElementById("olmodalClose").click();  
     }
     
}



function checkLocationType(obj){
 
    if(obj.value=='OL'&& $("#actualdesignation").val().trim()=='BDM'){
          
        $('#modal2').modal('show');
    }
}

//----------------------- Code Format ----

     

 function selectAllText() {
   //  $('#textareaId').click(function() {
    //SelectText('#cmTextArea');
  //});
 // editor.focus();
  document.getElementById('cmTextArea').focus();
 // editor.selectAll();
 // editor.copy();
  editor.execCommand("selectAll");
  //editor.execCommand("copy");
//  var start = editor.firstLine(), end = editor.lastLine();
//editor.selectLines(start, 0, end, editor.lineContent(end).length);

 
 //$('#cmTextArea').select(); 
    //document.getElementById('cmTextArea').select();
     //editor.markText({line:1,ch:1},{line:3,ch:1},{readOnly:true});
 
    // editor.focus();
  //   prepareSelectAllHack(editor);
 //alert(editor.getValue());

 //editor.setSelection("<body>");
//alert(document.getElementById("signatureCode").value);
//document.getElementById("cmTextArea").focus();
//alert("After focus");
//document.getElementById("cmTextArea").select();
//editor.prepareSelection();


var copysuccess // var to check whether execCommand successfully executed
		try{
			copysuccess = document.execCommand("copy")
		}catch(e){
			copysuccess = false
		}
 if (copysuccess){ // execute desired code whenever text has been successfully copied
			var copiedtext = (function(){
		    if (window.getSelection){
		        return window.getSelection().toString()
				}
				else if (document.selection){
					return document.selection.createRange().text	
				}			
			})()
			
		}
}
     function copyToClipboard(elem) {
  //   alert("haiii");
	  // create hidden text element, if it doesn't already exist
    var targetId = "_hiddenCopyText_";
    var isInput = elem.tagName === "INPUT" || elem.tagName === "TEXTAREA";
    var origSelectionStart, origSelectionEnd;
    if (isInput) {
        // can just use the original source element for the selection and copy
        target = elem;
       // alert(elem.value);
        origSelectionStart = elem.selectionStart;
       // alert(origSelectionStart);
        //origSelectionEnd = elem.selectionEnd;
        origSelectionEnd = elem.selectionEnd;
        //alert(origSelectionEnd);
    } else {
        // must use a temporary form element for the selection and copy
        target = document.getElementById(targetId);
        if (!target) {
            var target = document.createElement("textarea");
            target.style.position = "absolute";
            target.style.left = "-9999px";
            target.style.top = "0";
            target.id = targetId;
            document.body.appendChild(target);
        }
        target.textContent = elem.textContent;
    }
    // select the content
    var currentFocus = document.activeElement;
    target.focus();
    target.setSelectionRange(0, target.value.length);
    
    // copy the selection
    var succeed;
    try {
    	  succeed = document.execCommand("copy");
    } catch(e) {
        succeed = false;
    }
    // restore original focus
    if (currentFocus && typeof currentFocus.focus === "function") {
        currentFocus.focus();
    }
    
    if (isInput) {
        // restore prior selection
        elem.setSelectionRange(origSelectionStart, origSelectionEnd);
    } else {
        // clear temporary content
        target.textContent = "";
    }
    return succeed;
}

//------------------------------------------------------------------

/*
 * Data Insertion Signature.
 * Author : Santosh Kola
 * Date : 04/22/2016
 */

 function insertEmployeeSignatureData(){
    //alert("checkemployeelogin");
    document.getElementById("resultMessage").innerHTML='';
     
    var name=$("#firstname").val().trim();
    var Designation=$("#designation").val().trim();
    var Email=$("#email").val().trim();
    var  WorkPhone=$("#workPhone").val().trim();
    // var Department=$("#department").val().trim();
    var  Mobile=$("#mobile").val().trim();
    var  Location=$("#location").val().trim();
    var  PartnerLogo=$("#partnerLogo").val().trim();
    
    
    
    
   // if(parseInt($("#empSignId").val(),10)==0){
        
        
        if(name.trim().length==0){
            showAlertModal("Please enter Name.");
        }else if(Designation.trim().length==0){
            showAlertModal("Please enter Designation.");
        }else if(Email.trim().length==0){
            showAlertModal("Please enter Email.");
        }else if(WorkPhone.trim().length==0){
            showAlertModal("Please enter WorkPhone.");
        }
        //     else if(Department.trim().length==0){
        //         showAlertModal("Please enter Department.");
        //     }
        else if(Mobile.trim().length==0){
            showAlertModal("Please enter Mobile number.");
        }else if(Location.trim().length==0){
            showAlertModal("Please select Location.");
        }else {
        
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
                    document.getElementById("insertionLoading").style.display = 'none';
                    document.getElementById("generateButton").disabled=false;
                    var response=xmlhttp.responseText;
                    //  alert(response);
                    //  populateEmployeeInfo(response);
                
                    if(parseInt(response,10)>0){
                        $("#empSignId").val(parseInt(response,10));
                        getSignature();
                    
                    }else {
                        showAlertModal(response);
                    //document.getElementById("resultMessage").innerHTML=response;
                    }
                l
                //document.getElementById("posttype").innerHTML = xmlhttp.responseText;
                }else {
                    document.getElementById("generateButton").disabled=true;
                    document.getElementById("insertionLoading").style.display = 'block';
                }
            }
            
            xmlhttp.open("GET","../classes/AjaxEmpSignature.php?firstName="+escape(name)+"&designation="+escape(Designation)+"&workPhone="+escape(WorkPhone)+"&mobile="+escape(Mobile)+"&location="+escape(Location)+"&email="+escape(Email)+"&partnerLogo="+escape(PartnerLogo)+"&actionType=add&id="+$("#empSignId").val(),true);
            xmlhttp.send();
        }
//    }else {
//        getSignature();
//    }
 
}



function updateEmployeeSignatureData(){
    //alert("checkemployeelogin");
    document.getElementById("resultMessage").innerHTML='';
     
    var name=$("#firstname").val().trim();
    var Designation=$("#designation").val().trim();
    var Email=$("#email").val().trim();
    var  WorkPhone=$("#workPhone").val().trim();
    // var Department=$("#department").val().trim();
    var  Mobile=$("#mobile").val().trim();
    var  Location=$("#location").val().trim();
    var  PartnerLogo=$("#partnerLogo").val().trim();
    var  id=$("#empSignId").val();
    //empSignUpdate
    
    //alert(id);
    if(parseInt($("#empSignUpdate").val(),10)==0){
        
        
        //         if(name.trim().length==0){
        //         showAlertModal("Please enter Name.");
        //     }else if(Designation.trim().length==0){
        //         showAlertModal("Please enter Designation.");
        //     }else if(Email.trim().length==0){
        //         showAlertModal("Please enter Email.");
        //     }else if(WorkPhone.trim().length==0){
        //         showAlertModal("Please enter WorkPhone.");
        //     }
        ////     else if(Department.trim().length==0){
        ////         showAlertModal("Please enter Department.");
        ////     }
        //     else if(Mobile.trim().length==0){
        //         showAlertModal("Please enter Mobile number.");
        //     }else if(Location.trim().length==0){
        //         showAlertModal("Please select Location.");
        //     }else {
        
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
                document.getElementById("insertionLoading").style.display = 'none';
                document.getElementById("copyButton").disabled=false;
                var response=xmlhttp.responseText;
                //  alert(response);
                //  populateEmployeeInfo(response);
                
                if(parseInt(response,10)>0){
                    $("#empSignUpdate").val(1);
                    // alert("Haii");
                    selectAllText();
                    
                }else {
                    showAlertModal(response);
                //document.getElementById("resultMessage").innerHTML=response;
                }
                
            //document.getElementById("posttype").innerHTML = xmlhttp.responseText;
            }else {
                document.getElementById("copyButton").disabled=true;
                document.getElementById("insertionLoading").style.display = 'block';
            }
        }
        xmlhttp.open("GET","../classes/AjaxEmpSignature.php?firstName="+escape(name)+"&designation="+escape(Designation)+"&workPhone="+escape(WorkPhone)+"&mobile="+escape(Mobile)+"&location="+escape(Location)+"&email="+escape(Email)+"&actionType=update&id="+id+"&partnerLogo="+escape(PartnerLogo),true);
        xmlhttp.send();
    //}
    }else {
        selectAllText();
    }
 
}






function gotoEmailSignature() {
    window.location="email-signature.php";
}