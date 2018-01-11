

function newXMLHttpRequest() {
    var xmlreq = false;
    if(window.XMLHttpRequest) {
        xmlreq = new XMLHttpRequest();
    } else if(window.ActiveXObject) {
        try {
            xmlreq = new ActiveXObject("MSxm12.XMLHTTP");
        } catch(e1) {
            try {
                xmlreq = new ActiveXObject("Microsoft.XMLHTTP");
            } catch(e2) {
                xmlreq = false;
            }
        }
    }
    return xmlreq;
}


function readyStateHandler(req,responseTextHandler) {
    return function() {
       // alert(req.readyState+" "+req.status);
        if (req.readyState == 4) {
            if (req.status == 200) {
                responseTextHandler(req.responseText);
            } else {
                alert("HTTP error ---"+req.status+" : "+req.statusText);
            }
        }
    }
}





function getUpcomingConferenceImage(){


  var req = newXMLHttpRequest();
        req.onreadystatechange = readyStateHandler(req, populateConferenceImage);
    //    var url="http://192.168.1.203/classes/ConferenceImage.php?version="+new Date();
           var url="http://www.miraclesoft.com/classes/ConferenceImage.php?version="+new Date();
       // alert(url);
    req.open("GET",url,true);
   // req.open("GET","../classes/ConferenceImage.php",true);
       // req.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
        req.setRequestHeader( 'Access-Control-Allow-Origin', '*');
        req.setRequestHeader( 'Content-Type', 'application/json' );
        req.send(null);
    
 
   
        
}


function populateConferenceImage(res){
   //alert(res);
document.getElementById("cfgImg").innerHTML="<img width='150' height='auto' border='0' dfsrc='"+res+"' style='display: inline-block;' alt='logo' src='"+res+"' saveddisplaymode='inline-block'>";



}