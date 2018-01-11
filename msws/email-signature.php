<!DOCTYPE html>
<html lang="en">
    <head>


        <title>
            Miracle Email Signature Standards
        </title>
        <?php include 'config/Locations.php'; ?>
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- <link href="css/font-awesome.min.css" rel="stylesheet"> -->

        <link href="css/main.css" rel="stylesheet">
        <link rel="stylesheet" href="css/signature.css">
        <!--  <link rel="stylesheet" type="text/css" href="../css/font-awesome.css"/> -->
        <link rel="stylesheet" type="text/css" href="css/default.css"/>
        <link rel="stylesheet" type="text/css" href="css/component.css"/>
        <script src="js/modernizr.custom.js"></script>
        <link href="css/font-awesome.min.css" rel="stylesheet">    
        <link rel="shortcut icon" href="<?= AMAZON_URL ?>/images/favicon.ico">

        <script src="js/custom.js">
        </script>
        <script type="text/javascript" src="js/Validation.js">
        </script>

        <link rel="stylesheet" type="text/css" href="css/codemirror.css" />

        <script type="text/javascript" src="js/codemirror.js">
        </script> 


        <script type="text/javascript" src="js/xml.js">
        </script>

        <script src="js/signtaure.js?ver=1.0"></script>
     <!-- <script type="text/javascript" src="../js/jquery-1.4.2.min.js"></script>-->

        <script type="text/javascript">
            function enableSignatureEnter(e) {
                var keynum;
                var keychar;
                var numcheck;
    
                if(window.event) {
                    keynum = e.keyCode;
                }
                else if(e.which) // Netscape/Firefox/Opera
                {
                    keynum = e.which;
                }
                try{
                    if(keynum==13){
                        getSignature();
                        return false;
                    }
                }catch(e){
                    alert("Error"+e);
                }
            };
    
            function enableLoginEnter(e) {
                var keynum;
                var keychar;
                var numcheck;
    
                if(window.event) {
                    keynum = e.keyCode;
                }
                else if(e.which) // Netscape/Firefox/Opera
                {
                    keynum = e.which;
                }
                try{
                    if(keynum==13){
                        doSignatureLogin();
                        return false;
                    }
                }catch(e){
                    alert("Error"+e);
                }
            };
    
        </script>
        <?php
        $rempLoginId = '';
        $rempPassword = '';
        //   $rempLoginId = isset($_SESSION['ses_EmpLoginId']);
        //   $rempPassword = isset($_GET["surveyId"]) ? $_GET["surveyId"] : '-1';
        session_start();
        $rempLoginId = isset($_SESSION["ses_EmpLoginId"]) ? $_SESSION["ses_EmpLoginId"] : '';
        $rempPassword = isset($_SESSION["ses_EmpPassword"]) ? $_SESSION["ses_EmpPassword"] : '';
        // $rempLoginId=  $_SESSION['ses_EmpLoginId'];
        // $rempPassword=  $_SESSION['ses_EmpPassword']; 
        ?>
        <style>
            .overlay{
                background-color:rgba(0,0,0,0.5) !important;
            }
            .modal-dialog
            {
                overflow:hidden !important;

            }
            ul.breadcrumb > li > a, ul.breadcrumb > li .divider {
                color: #fff;
            }
            ul.breadcrumb > li.active {
                color: #fff;
            }
            ul.breadcrumb > li > a:hover {
                color: #fff;
            }
            body{
                overflow-x:hidden;
            }
            body > section {
                padding-top: 0px !important;}

            .tinted-image {
                background: 
                    /* top, transparent red */
                    linear-gradient(
                    rgba(0, 0, 0, 0.55), 
                    rgba(0, 0, 0, 0.55)
                    ),
                    /* your image */
                    url("../img/key.jpg");
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }
            .modal-dialog
            {
                overflow:hidden !important;

            }


            .section_bg{
                background: 
                    /* top, transparent red */
                    linear-gradient(
                    rgba(0, 0, 0, 0.55), 
                    rgba(0, 0, 0, 0.55)
                    ),
                    /* your image */
                    url("<?= AMAZON_URL ?>/images/banners/Signature.png");
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                
            }



        </style>

    </head>

    <?php include 'header.php'; ?>

    <body>

<section>
                <div class="overlay section_bg">
                    <div class=" container">
                       
                        <div class="row">    
                            <div class="col-sm-7 text-left">  
                                <br><br>
                                <h1 class="micro "><font color="#fff"><strong>Miracle Email Signature Standards</strong></font></h1>

                            </div>
                            <div class="col-sm-5 text-right">
                                <br><br>
                                <ul class="breadcrumb pull-right">
                                    <li><a href="../../">Home</a></li>
                                    <li><a href="../standards">Standards</a></li>
                                    <!-- Breadcrumb div starts here --> 
                                    <li class="active">Signature</span>
                                    </li>
                                    <!-- Breadcrumb div Ends here --> 
                                </ul>
                            </div>
                        </div><br>
                    </div>
                </div>

            </section>

        <section class="container" id="about-us">
            <script type="text/javascript">
                $(window).load(function(){
                    //$('#myModal1').modal('show');
                    var empLoginID=document.getElementById("empLoginID").value;
                    var empPassword=document.getElementById("empPassword").value;
                    if(empLoginID!='' && empPassword!=''){
                        doSignatureLogin();
                    }else{
                        $('#myModal1').modal('show');
                    }
                });
            </script>

            


            <section class="container">
                <input type="hidden" name="actualdesignation" id="actualdesignation"/>
                <input type="hidden" id="empLoginID" name="empLogiID" value="<?= $rempLoginId ?>"/>
                <input type="hidden" id="empPassword" name="empPassword" value="<?= $rempPassword ?>"/>
                <br>
<!--                <br>
                <br><br>
                <div class="row">

                    <div class="col-sm-6 text-left">
                        <h2>
                            <strong>Miracle Email Signature Standards </strong>
                        </h2>
                    </div>
                    <div class="col-sm-6 text-right">
                        <ul class="breadcrumb pull-right">
                            <li>
                                <a href="../">Home</a>
                            </li>
                            <li>
                                <a href="../standards">Standards</a>
                            </li>

                            <li class="active">Signature
                            </li>
                        </ul>
                    </div>

                </div>-->

                <div class="row ">
                    <div class="col-sm-6">
                        <p class="methodText">
                            In this fast updating generation the latest forms of collaboration such as instant messaging are becoming popular but still the email has the very same demand, priority, and usage for passing information in the corporate world. Every company has it's own style of email communication to uphold and showcase their brand to customers and partners.  Similarly, at Miracle we depend heavily on our corporate communication and it is important and essential that we maintain the Miracle brand within everyday emails as well. </p>


                        <p class="methodText"> Our latest upgrade, Corporate Signature Standards v2.0 adds some more features to grab the attention of the readers as it is now equipped with partner logos as well adding beauty and strength showcasing our ability to others. Whoever wants the signature with our partner logos, go ahead and get started by putting in your details in the right-hand side form and generate your signature. Our Corporate Email Standards help us to create your own signature. <strong>Check out the <a href="signature-document.php" class="linkText" target="_blank"><font color="#00aae7">"How To"</font> </a> documentation right here, if you are facing any trouble in setting up your signature!     </strong> 

                        </p>
                    </div>
                    <div class="col-sm-6">
                        <div class="row ">
                            <div class="col-sm-6">
                                <label > Name</label>
                                <input tabindex="1" class="form-control" required="required" placeholder="Full name" id="firstname" name="firstname"  type="text" onkeydown="return enableSignatureEnter(event);" onchange="fieldLengthValidator(this);">
                                <br>
                                <label > Email</label>
                                <input class="form-control" required="required" placeholder="Email"  name="email" id="email"  type="text" tabindex="3" readOnly="true" onkeydown="return enableSignatureEnter(event);">
                                <br><label > Mobile</label>
                                <input tabindex="5" class="form-control" required="required" placeholder="Mobile"  name="mobile" id="mobile" type="text" onchange="return formatPhone(this);" onblur="return validatenumber(this)" onkeypress="return isNumberKey(event)" onkeydown="return enableSignatureEnter(event);">
                                <br>
                            </div>
                            <div class="col-sm-6">
                                <label >Designation</label>
                                <input tabindex="2" class="form-control" required="required" placeholder="Designation" id="designation" name="designation"  type="text" onkeydown="return enableSignatureEnter(event);" onchange="fieldLengthValidator(this);">
                                <br>
                                <label > Work Phone</label>
                                <input tabindex="4" class="form-control" required="required" placeholder="Work Phone"  name="workPhone" id="workPhone"  type="text" onchange="return formatPhone(this);" onblur="return validatenumber(this)" onkeypress="return isNumberKey(event)" onkeydown="return enableSignatureEnter(event);"/>
                                <br><label > Location</label>
                                <select class="form-control" id="location" onchange="checkLocationType(this);" tabindex="6" onkeydown="return enableSignatureEnter(event);">
                                    <option value=""> Select Location</option>
                                    <option value="Atlanta">Atlanta</option>
                                    <option value="Bentonville"> Bentonville</option>
                                    <option value="Cincinnati">Cincinnati</option>
                                    <option value="GDC">Miracle City</option>
                                    <option value="HQ">Headquarters</option>
                                    <option value="IO">LB Colony</option>
                                    <option value="IH">Miracle Heights</option>

                                    <option value="OL">Other Locations</option>
                                </select> 
                            </div>  

                        </div>
                        <div class="row ">
                            <div class="col-sm-12">
                                <label >Add Partnership Logo to your Signature (Optional)</label>
                                <select class="form-control" id="partnerLogo"  tabindex="7" >
                                    <option value=""> Select Partner Logo</option>

                                    <option value="Amazon">Amazon Web Services</option>
                                    <option value="APCloud">AP Cloud</option>
                                    <option value="Apigee">Apigee</option>
                                    <option value="Atlassian">Atlassian</option>
                                    <option value="Axway">Axway</option>
                                    <option value="CaLogo">CA Technologies</option>
                                    <option value="Cloudera">Cloudera</option>
                                    <option value="digitalsummit">Digital Summit</option>
                                    <option value="HP">HP</option>
                                    <option value="IBM">IBM</option>
                                    <option value="Microsoft">Microsoft</option>
                                    <option value="Morpheus">Morpheus</option>
                                    <option value="MuleSoft">Mulesoft</option>
                                    <option value="ORACLE">Oracle</option>
                                    <option value="Pivotal">Pivotal</option>
                                    <option value="PitneyBowes">Pitney Bowes</option>
                                    <option value="Redhat">Redhat</option>
                                    <option value="Rally">Rally</option>
                                    <option value="SAP">SAP</option>
                                    <option value="Tag">TAG</option>

                                </select>
                                <br>
                                <button  type="button" class="btn btn-primary form-control col-sm-12 noMarginTop" onclick="insertEmployeeSignatureData();" style="margin-top: 5px;" id="generateButton">Generate Signature&nbsp;&nbsp;&nbsp;&nbsp;</button><br>

                            </div>
                        </div>

                    </div>

                    <input type="hidden" name="livingCountry" id="livingCountry" />
                    <input type="hidden" name="empSignId" id="empSignId" value="0"/>
                    <input type="hidden" name="empSignUpdate" id="empSignUpdate" value="0"/>
                </div>



            </section>



            <div id="insertionLoading" style="display: none" ><font color="red" size="3px">Loading please wait...</font></div>

            <hr id="topHr" style="display: none"></hr>
            <br>  

            <div class="row" id="signatureDiv" style="display: none">
                <section class="container">
                    <div class="col-sm-6" id="signatureDivId">
                    </div>
                    <div class="col-sm-6" >

                        <div id="signatureView" class="embed-responsive-item col-sm-12"></div> 

                    </div>
                </section>
            </div>


            <br>
            <div class="row container" id="buttonDiv" style="display: none">
                <div class="col-sm-6"><button type="button" class="btn btn-primary form-control" onclick="updateEmployeeSignatureData();" id="copyButton">Copy Code to Clipboard</button><br><br></div>
                <div class="col-sm-6">

                    <button type="button" class="btn btn-success form-control " tabindex="8">Signature Preview </button>

                </div>
            </div>
            <section class="container">
                <div class="row" id="italicDiv" style="display: none" class="container">
                    <div class="col-sm-12">
                        <i>Now that you have generated your signature, go over to the <a href="signature-document.php" class="linkText" target="_blank"><strong><font color="#00aae7">How To Documentation</font></strong></a> to start adding your signature to your email client!</i>
                    </div>
                </div>
            </section>

            <div id="faqDiv" style="display:none">
                <div class="col-sm-12">
                    <h5 class="heavy noMarginBottom">FAQs </h5>
                    <div class="row noMarginBottom">
                        <div class="col-sm-2 noMargin">
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <p class="methodText">
                        <strong>Q#1. What is the suggested font details for corporate email?</strong><br>
                        We would highly recommend using Calibri 15 for all emails whether it be your phone (or) laptop.  <br><br>
                        <strong>Q#2. What if I need to setup a non-HTML regular signature for my mobile device?</strong><br>
                        We understand that for some devices HTML Signatures might be too heavy and there will be the need to setup regular test signatures, like on your mobile email client. In such cases use the format below to define your email signature. 

                        <br><br>
                    <div class="row">
                        <div class="col-sm-4">

                            <strong>Regards,</strong><br>
                            <strong>Chanakya Lokam</strong><br>
                            Director Marketing | Innovation<br>
                            Miracle Software Systems, Inc.<br>
                            45625&nbsp;Grand&nbsp;River&nbsp;Avenue,&nbsp;Novi,&nbsp;MI&nbsp;-&nbsp;48374<br>
                            clokam@miraclesoft.com<br>
                            Phone : 1-248-233-1900<br>
                            Home : 1-248-679-2661<br>
                            India: 011-91-9704478300<br>

                        </div>
                        <div class="col-sm-3">
                            <strong>Regards,</strong><br>
                            <strong>&lt; Full Name&gt;</strong><br>
                            &lt;Designation&gt;<br>
                            Miracle Software Systems, Inc.<br>
                            &lt;Address Based on Location&gt;<br>
                            &lt;Email Address&gt;<br>
                            Phone : &lt;Your Work Phone&gt;<br>
                            Home : &lt;Your Mobile Phone&gt;<br>
                        </div>
                    </div><br>
                    <strong>Q#3. Do you have "How To" documents for all device type?</strong><br>
                    While our "How To" guides cover most of the email clients available such as Outlook, Thunderbird, Zimbra and more there will always be an email client that we havenâ€™t covered. While we will actively add more clients to the documentation, please feel free to reach out to us for more information and help. <strong><font color="#00aae7">Check out our documentation collection</font> <a href=""><font color="#0d416b">today!</font></a></strong>  <br><br>
                    <strong>Q#4. Who should I reach out to if I have a question?</strong><br>
                    Please feel free to contact the Marketing Team at <a href="mailto:marketing@miraclesoft.com"><strong>marketing@miraclesoft.com</strong></a> (or) give us a call at <strong>248-412-0428</strong>. The Web Experience and the Content Team are in-charge of the Email Signature Standards and will be more than happy to help you out.  </p>

                    <br></br>
                </div>
            </div> 
            <!--
             <div class="container" id="stepsDiv" style="display: none">
                <h3 class="heavy ">&nbsp;&nbsp;Setting up your signature today!</h3>
                  <br>
              <div class="row" >
            <!--<div class="col-sm-12" id="stepsDiv" style="display: none"> -->

            <!--  <div class="col-sm-2">
         <div class="tabbable tabs-left col-sm-2">
          <ul class="nav nav-tabs">
     <li class="active"><a data-toggle="tab" href="#zimbra">Zimbra</a></li>
     <li><a data-toggle="tab" href="#tbird">Thunderbird</a></li>
    </ul>
     </div>
     </div>
            <div class="col-sm-10">
         <div class="tab-content">
     <div id="zimbra" data-toggle="tab" class="tab-pane fade in active ">
       <div id="zimbra0" data-toggle="tab" class="tab-pane fade in active">
       <strong>Step 1</strong> : Open your <strong>Zimbra Mail</strong>..<br><br>
        <strong>Step 2</strong> : Click on the Preferences tab and then click on the <strong>Signatures option</strong>. It displays as shown below,<br>
          <br><img src="../images/signature/01.png" height="500px" width="700px" class="img-responsive">
        <div class="row col-sm-12">
              <div class="col-sm-2">
         <br><button type="button" data-toggle="tab" href="#zimbra1" class="btn btn-primary col-sm-12" style="left:-12px;">Next</button>
        </div>
         </div>  </div>
      </div>
      <div id="zimbra1" data-toggle="tab" class="tab-pane fade" >
         <strong>Step 3</strong> : Select the option <strong>"Format as HTML"</strong>.<br>
          <br><img src="../images/signature/02.png" height="500px" width="700px" class="img-responsive">
          <div class="row col-sm-12">
              <div class="col-sm-2">
                  <button type="button" data-toggle="tab" href="#zimbra" class="btn btn-primary col-sm-12">Prev</button>
   
              </div>
               <div class="col-sm-6"></div>
                <div class="col-sm-2">
                    <button type="button" data-toggle="tab" href="#zimbra2" class="btn btn-primary col-sm-12">Next</button>
    
                </div>
           </div>
      </div>
      <div id="zimbra2" data-toggle="tab" class="tab-pane fade">
         <strong>Step 4</strong> : Click on the Source Code with the symbol <strong>"< >"</strong>.<br>
           <br><img src="../images/signature/03.png" height="500px" width="700px" class="img-responsive">
       
        <div class="row col-sm-12">
              <div class="col-sm-2">
         <button type="button" data-toggle="tab" href="#zimbra1" class="btn btn-primary col-sm-12" style="left:-12px;">Prev</button>
      </div>
     <div class="col-sm-6"></div>
                <div class="col-sm-2">
     <button type="button" data-toggle="tab" href="#zimbra3" class="btn btn-primary col-sm-12" style="right: 38px;">Next</button>
     </div>
      </div> </div>
     
     <div id="zimbra3" data-toggle="tab" class="tab-pane fade">
         <strong>Step 5</strong> : By clicking the Source Code symbol it <strong>pops up a window</strong> as shown below.<br>
           <br><img src="../images/signature/04.png" height="300px" width="700px" ><br><br>
  <div class="row col-sm-12">
              <div class="col-sm-2">
         <button type="button" data-toggle="tab" href="#zimbra2" class="btn btn-primary col-sm-12" style="left:-12px;">Prev</button>
      </div>
     <div class="col-sm-6"></div>
                <div class="col-sm-2">
     <button type="button" data-toggle="tab" href="#zimbra4" class="btn btn-primary col-sm-12" style="right: 38px;">Next</button>
     </div>
      </div>
     </div>
     
     <div id="zimbra4" data-toggle="tab" class="tab-pane fade">
          <strong>Step 6</strong> : Delete the existing code or text. <strong>Copy and paste</strong> the above HTML Code.<br><br>
         <strong>Step 7</strong> : Please modify the highlighted fields (in bold) as per your requirement such as, Name, Designation, Department, Contact, Email Id, Company Address.
      <br><br>  
       <div class="row col-sm-12">
              <div class="col-sm-2">
     <button type="button" data-toggle="tab" href="#zimbra3" class="btn btn-primary col-sm-12" style="left:-12px;">Prev</button>
     </div>
     </div> </div>
     
          <div class="tab-pane" id="tbird" data-toggle="tab">
          <div id="tbird0 " data-toggle="tab" class="tab-pane fade in active">
          <strong>Step 1 :</strong> Open your <strong> Thunderbird Mail </strong> <br><br>
         <strong>Step 2 :</strong> Click on the <strong> Thunderbird Dashboard </strong>as shown below.<br><br>
        <img src="../images/signature/1tb.png" height="500px" width="700px"class="img-responsive"><br>
        
      <div class="row col-sm-12">
              <div class="col-sm-2">
     <button type="button" data-toggle="tab" href="#tbird2" class="btn btn-primary col-sm-12" style="left:-12px;">Next</button>
     </div>
     </div> 
 </div>
 </div>
     <div id="tbird1" data-toggle="tab" class="tab-pane fade">
        <strong>Step 3 :</strong>  The <strong>Account Settings </strong> page is displayed as shown below. Click on the â€œView Settings for this Accountâ€� option. <br><br>
         <img src="../images/signature/2tb.png" height="500px" width="700px"class="img-responsive"> <br>
       <div class="row col-sm-12">
              <div class="col-sm-2">
        <button type="button" data-toggle="tab" href="#tbird" class="btn btn-primary col-sm-12" style="left:-12px;">Prev</button>
    </div>
    <div class="col-sm-6"></div>
     <div class="col-sm-2">
     <button type="button" data-toggle="tab" href="#tbird2" class="btn btn-primary col-sm-12" style="right: 27px;">Next</button>
             </div>
         </div>
 </div>
        
        <div id="tbird2" data-toggle="tab" class="tab-pane fade">
         <strong>Step 4 :</strong> Once you click on the View Settings for this Account and it popups a screen with all the Account Settings as shown below.<br><br>
        <img src="../images/signature/3tb.png" height="500px" width="700px"class="img-responsive"> <br>
              <div class="row col-sm-12">
              <div class="col-sm-2">
        <button type="button" data-toggle="tab" href="#tbird1" class="btn btn-primary col-sm-12" style="left:-12px;">Prev</button>
     </div>
    <div class="col-sm-6"></div>
     <div class="col-sm-2">
     <button type="button" data-toggle="tab" href="#tbird3" class="btn btn-primary col-sm-12" style="right: 27px;">Next</button>
     </div>
        </div>
       </div>
        
         <div id="tbird3" data-toggle="tab" class="tab-pane fade">
          <strong>Step 5 :</strong>  In this Accounts Settings you can see the option as â€œSignature Textâ€�, and with a checkbox Use HTML. Tick the check box to enable the HTML. The below image gives a clear picture.<br><br>
           <img src="../images/signature/4tb.png" height="500px" width="700px"class="img-responsive"> <br>
   <div class="row col-sm-12">
              <div class="col-sm-2">
        <button type="button" data-toggle="tab" href="#tbird2" class="btn btn-primary col-sm-12" style="left:-12px;">Prev</button>
      </div>
    <div class="col-sm-6"></div>
     <div class="col-sm-2">
     <button type="button" data-toggle="tab" href="#tbird4" class="btn btn-primary col-sm-12" style="right: 27px;">Next</button>
     </div>
  </div>
 </div>
      
       <div id="tbird4" data-toggle="tab" class="tab-pane fade">
        <strong>Step 6 :</strong> In the space please delete all the previous code. Here you need to paste the code from Email Signature Standards available on the website.<br><br>
          <strong>Step 7 : </strong>Goto, www.miraclesoft.com/emailsignature. You will be redirected to the page as shown below,<br>
       <br><img src="../images/signature/5tb.png" height="500px" width="700px"class="img-responsive"> <br>
        <strong>Step 8 :</strong> Please enter your Hubble Credentials as username and password. Now you can see the page with complete details of your Name, Designation, Contact, Department etc. 
  <br><div class="row col-sm-12">
      <br>
              <div class="col-sm-2">
        <button type="button" data-toggle="tab" href="#tbird3" class="btn btn-primary col-sm-12" style="left:-12px;">Prev</button>
      </div>
    <div class="col-sm-6"></div >
     <div class="col-sm-2">
     <button type="button" data-toggle="tab" href="#tbird5" class="btn btn-primary col-sm-12" style="right: 27px;">Next</button>
     </div>
  </div> 
         </div>
         <div id="tbird5" data-toggle="tab" class="tab-pane fade">
        <strong>Step 9 :</strong> Paste the code in the signature column as shown below and click on Ok.<br><br>
          <strong>Step 10 :</strong>Now to open New Mail and check your Email Signature. 
 <br>
        
         <br> <div class="row col-sm-12">
              <div class="col-sm-2">
         <br><button type="button" data-toggle="tab" href="#tbird4" class="btn btn-primary col-sm-12" style="left:-12px;">Prev</button>
        </div>
         </div>
         </div>
 </div>
           </div>  
        </div> 
      </div>
        <br>
            -->
            <div class="row">
                <!-- Modal -->
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10">


                        <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                          <div class="modal-dialog" style=" position: static;">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="loginModalClosId" style="display: none"><span aria-hidden="true">&times;</span>
                                        </button>
                                        <h3 class="modal-title" id="memberModalLabel"><strong>Employee LogIn</strong> </h3>
                                        <hr class="noMarginBottom">
                                    </div>
                                    <div class="modal-body">
                                        <p class="methodText" style="margin-top: -10px;">You must be a Miraclite to gain access to this. Please validate yourself using your Miracle credentials for further access. </p>
                                        <div class="row">
                                            <div class=" col-sm-6">
                                                <input tabindex="9" class="form-control" required="required" placeholder="LoginId" id="loginId" name="loginId" value="<?= $rempLoginId ?>" type="text" onkeydown="return enableLoginEnter(event);"/>
                                                <br>
                                                <input tabindex="10" class="form-control" required="required" placeholder="Password" name="password" id="password"  value="<?= $rempPassword ?>" type="password" onkeydown="return enableLoginEnter(event);"/>

                                            </div>
                                            <div class="col-sm-6"></div>
                                        </div>
                                        <hr  class="">
                                       
                                        <div class="row">
                                            <div class="col-sm-12"> 
                                                <div class="alert alert-danger" style="display:none" id="errorMsgDiv">
                                                    <button type="button" class="close" onclick="closeErrorMsg()" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <strong><span id="resultMessage"></span></strong> 
                                                </div>                        
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-sm-4">
                                                <button type="button" data-loading-text="<i class='fa fa-spinner fa-spin '></i> loading..."  tabindex="7" class="btn btn-primary col-sm-12" name="btnSubmit1" id="btnSubmit1" onclick="doSignatureLogin();">Login</button>
                                            </div>
                                            <div class="col-sm-4"></div>
                                            <div class="col-sm-4"></div>

                                        </div>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-1"></div>

                </div>
            </div>

            <div class="row">
                <!-- Modal -->
                <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                   <div class="modal-dialog" style=" position: static;">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="display: none" id="olmodalClose"><span aria-hidden="true">&times;</span>
                                </button>
                                <h3 class="modal-title" id="memberModalLabel"><strong>Enter your location</strong> </h3>
                                <hr>
                            </div>
                            <div class="modal-body">

                                <div class="row">
                                    <div class=" col-sm-6">

                                        <label>Select Country :</label><br>   <select id="country" name ="country" style="width: 253px !important;" class="form-control"></select>
                                        <br><label>Address</label>
                                        <input tabindex="1" class="form-control" required="required" placeholder="Address" id="address" name="address" type="text">

                                    </div>

                                    <div class=" col-sm-6">
                                        <label>Select State :</label> <br>  <select name ="state" id ="state"  style="width: 253px !important;" class="form-control"></select>
                                        <script language="javascript">
                                            populateCountries("country", "state");
                                        </script><br> 
                                        <label>City</label>
                                        <input tabindex="1" class="form-control" required="required" placeholder="City" id="city" name="city" type="text">

                                    </div> 
                                </div>
                                <hr>



                            </div>

                            <div class="row ">
                                <div class="col-sm-4">
                                    <span id="alertMessage"></span>

                                </div>
                                <div class="col-sm-4"></div>
                                <div class="col-sm-4"></div>
                            </div>
                            <div class="modal-footer row" style="margin-left: 3px;"> 


                                <div class="col-sm-4"> 

                                    <input type="button" value="Submit" tabindex="7" class="btn btn-primary col-sm-12" name="btnSubmit2" id="btnSubmit2" onclick="setOtherLocations();" /> 
                                </div>
                                <div class="col-sm-4"></div>
                                <div class="col-sm-4"></div>


                            </div>
                        </div>

                    </div>
                </div>
            </div>


            <!-- Alert Modal Start -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog" style=" position: static;">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <strong><div id="showAlertText"></div></strong>
                                </div>
                                <div class="modal-footer row">
                                    <div class="col-sm-8"></div>
                                    <div class="col-sm-3">
                                        <button type="button" class="btn btn-danger col-sm-12" data-dismiss="modal">
                                            Close
                                        </button>
                                    </div>
                                    <div class="col-sm-1"></div>
                                </div><!-- Modal Footer -->
                            </div><!-- Modal Content -->
                        </div><!-- Modal Dialog -->
                    </div><!-- Modal Container-->


                </div>
            </div>
            <!-- Alert Modal End -->

        </section> 
        <?php include 'footer.php'; ?> 
            <!-- <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
            
          <script type="text/javascript" src="js/jquery.syntaxhighlighter.min.js"></script> -->

    </body>
</html>
