<!-- 
/* ******************************************************************************
*
* Project : The Digital Valley Summit V1
*
* Date    : October10,2016
*
* Author  : Corporate Applicaiton Support Team<hubble@miraclesoft.com>
*
* File    : Index.php
*
* Copyright 2016 Miracle Software Systems, Inc. All rights reserved.
* MIRACLE SOFTWARE PROPRIETARY/CONFIDENTIAL. Use is subject to license terms.
*
* *****************************************************************************
*/
-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport"    content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author"      content="Shankar">
        <meta content="miraclesoft, education,  industry,  IT,industries, " name="keywords"/>
        <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="" type="image/x-icon">
        <title>Digital Valley Summit</title>
        <meta http-equiv="refresh" content="6; url=index.php?isRedirect=1" />
       <!-- <link rel="stylesheet" href="../css/main.css" type="text/css" />
        <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css" /> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3./includes/cssfont-awesome.min.css">
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="../includes/css/selectivity-full.css">
        <script type="text/javascript" src="../includes/js/selectivity-full.min.js"></script>-->

<!--        <script type="text/JavaScript" src="./includes/js/jquery.min.js"/></script>-->
<!--    <script type="text/javascript" src="./includes/js/jquery.js"/></script>-->

<style type="text/css">
    
   
   h3{
        color:#0d416b  ;
    }
    .btn {
    padding: 8px 35px !important;
    }
    
.heavy {
font-weight: bold !important;
}
 h3 {

        margin-top: 20px;
        margin-bottom: 10px;
    line-height: 1.1;
        font-size: 23px !important;
        color: #3498db !important;
        padding-bottom: 0!important;

}
.btn-file input[type=file] {

        position: absolute!important;
        top: 0!important;
        right: 0!important;
        min-width: 100%!important;
        min-height: 100%!important;
        font-size: 100px!important;
        text-align: right!important;
        filter:alpha(opacity=0)!important;
        opacity: 0!important;
        outline: none!important;
        background: #fff!important;
        cursor: inherit!important;
        display: block!important;

}
</style>


        <?php
        include '../context.php';
        //require '../config/ConnectionProvider.php';
     require '../../config/ConnectionProvider.php';




        $isSubmitted = false;
        $resultMessage = '';
        $consultantId = 0;
        if (isset($_POST['btnSubmit'])) {
            $isSubmitted = true;
            try {

                $tempFirstName = isset($_POST["fname"]) ? $_POST["fname"] : '';
                $tempLastName = isset($_POST["lname"]) ? $_POST["lname"] : '';
                $tempEmail = isset($_POST["email"]) ? $_POST["email"] : '';
                $tempMobileNumber = isset($_POST["mobileNo"]) ? $_POST["mobileNo"] : '';
                $tempCity = isset($_POST["city"]) ? $_POST["city"] : '';
                $tempCollegeName = isset($_POST["collegeName"]) ? $_POST["collegeName"] : '';
                //$tempQualification = isset($_POST["qualification"]) ? $_POST["qualification"] : '';
                $tempBranch = isset($_POST["branch"]) ? $_POST["branch"] : '';
                $tempGraduationYear = isset($_POST["graduationYear"]) ? $_POST["graduationYear"] : '';
                $tempState = isset($_POST["state"]) ? $_POST["state"] : '';
                $tempAlteMobileNo = isset($_POST["altMobileNo"]) ? $_POST["altMobileNo"] : '';
                $tempCandidateInfo = isset($_POST["candidateInfo"]) ? $_POST["candidateInfo"] : '';
                $tempTeamCandidateName = isset($_POST["teamCandidateName1"]) ? $_POST["teamCandidateName1"] : '';
                $tempTeamCandidateBranch = isset($_POST["teamCandidateBranch1"]) ? $_POST["teamCandidateBranch1"] : '';
                $tempTeamCandidateYear = isset($_POST["teamCandidateYear1"]) ? $_POST["teamCandidateYear1"] : '';
                $tempTeamCandidateEmailId = isset($_POST["teamCandidateEmailId1"]) ? $_POST["teamCandidateEmailId1"] : '';
                
                $tempTeamCandidateName2 = isset($_POST["teamCandidateName2"]) ? $_POST["teamCandidateName2"] : '';
                $tempTeamCandidateBranch2 = isset($_POST["teamCandidateBranch2"]) ? $_POST["teamCandidateBranch2"] : '';
                $tempTeamCandidateYear2 = isset($_POST["teamCandidateYear2"]) ? $_POST["teamCandidateYear2"] : '';
                $tempTeamCandidateEmailId2 = isset($_POST["teamCandidateEmailId2"]) ? $_POST["teamCandidateEmailId2"] : '';
                
                
                $tempTeamCandidateName3 = isset($_POST["teamCandidateName3"]) ? $_POST["teamCandidateName3"] : '';
                $tempTeamCandidateBranch3 = isset($_POST["teamCandidateBranch3"]) ? $_POST["teamCandidateBranch3"] : '';
                $tempTeamCandidateYear3 = isset($_POST["teamCandidateYear3"]) ? $_POST["teamCandidateYear3"] : '';
                $tempTeamCandidateEmailId3 = isset($_POST["teamCandidateEmailId3"]) ? $_POST["teamCandidateEmailId3"] : '';
                
                $tempTeamCandidateInfo = isset($_POST["teamCandidateInfo"]) ? $_POST["teamCandidateInfo"] : '';
                $tempTeamInfo = isset($_POST["teamInfo"]) ? $_POST["teamInfo"] : '';
                
                
                $tempPrimaryTrack = isset($_POST["primaryTrack"]) ? $_POST["primaryTrack"] : '';
                $tempSecondaryTrack = isset($_POST["secondaryTrack"]) ? $_POST["secondaryTrack"] : '';
                $tempTertiaryTrack = isset($_POST["tertiaryTrack"]) ? $_POST["tertiaryTrack"] : '';
                
                
                
                
                

                $selectQuery = "SELECT * FROM tblConfHackathonRegistration WHERE EmailId=:tempEmail OR MobileNumber=:tempMobileNumber";
                $stmt = $conn->prepare($selectQuery);
                $stmt->bindParam(':tempEmail', $tempEmail);
                $stmt->bindParam(':tempMobileNumber', $tempMobileNumber);
                $stmt->execute();
                if ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
                    $resultMessage = "Already we have received your details .One of our Digital Summit representative will contact you shortly.";
                } else {

                    $sql = "INSERT INTO tblConfHackathonRegistration (FirstName,LastName,EmailId,MobileNumber,CollegeName,City,Branch,GraduationYear,State,AlteMobileNo,CandidateInfo,TeamCandidateName,TeamCandidateBranch,TeamGraduationYear,TeamEmailId,TeamCandidateInfo,TeamInfo,TeamCandidateName2,TeamCandidateBranch2,TeamGraduationYear2,TeamEmailId2,TeamCandidateName3,TeamCandidateBranch3,TeamGraduationYear3,TeamEmailId3,PrimaryTrack,SecondaryTrack,TertiaryTrack) VALUES 
                       (:tempFirstName,:tempLastName,:tempEmail,:tempMobileNumber,:tempCollegeName,:tempCity,:tempBranch,:tempGraduationYear,:tempState,:tempAlteMobileNo,:tempCandidateInfo,:tempTeamCandidateName,:tempTeamCandidateBranch,:tempTeamCandidateYear,:tempTeamCandidateEmailId,:tempTeamCandidateInfo,:tempTeamInfo,:tempTeamCandidateName2,:tempTeamCandidateBranch2,:tempTeamCandidateYear2,:tempTeamCandidateEmailId2,:tempTeamCandidateName3,:tempTeamCandidateBranch3,:tempTeamCandidateYear3,:tempTeamCandidateEmailId3,:tempPrimaryTrack,:tempSecondaryTrack,:tempTertiaryTrack) ";
//                    $sql = "INSERT INTO tblConfHackathonRegistration (FirstName,LastName,Email,MobileNumber,CollegeName,City,Qualification,Branch,PassoutYear) 
//            VALUES(:tempFirstName,:tempLastName,:tempEmail,:tempMobileNumber,:tempCollegeName,:tempCity,:tempQualification,:tempBranch,:tempPassoutYear)";
                   
           
                    $stmt = $conn->prepare($sql);

                    $stmt->bindParam(':tempFirstName', $tempFirstName);
                    $stmt->bindParam(':tempLastName', $tempLastName);
                    $stmt->bindParam(':tempEmail', $tempEmail);
                    $stmt->bindParam(':tempMobileNumber', $tempMobileNumber);
                    $stmt->bindParam(':tempCollegeName', $tempCollegeName);
                  //  $stmt->bindParam(':tempQualification', $tempQualification);
                    $stmt->bindParam(':tempCity', $tempCity);
                    $stmt->bindParam(':tempBranch', $tempBranch);
                    $stmt->bindParam(':tempGraduationYear', $tempGraduationYear);
                    $stmt->bindParam(':tempState', $tempState);
                    $stmt->bindParam(':tempAlteMobileNo', $tempAlteMobileNo);
                    $stmt->bindParam(':tempCandidateInfo', $tempCandidateInfo);
                    $stmt->bindParam(':tempTeamCandidateName', $tempTeamCandidateName);
                    $stmt->bindParam(':tempTeamCandidateBranch', $tempTeamCandidateBranch);
                    $stmt->bindParam(':tempTeamCandidateYear', $tempTeamCandidateYear);
                    $stmt->bindParam(':tempTeamCandidateEmailId', $tempTeamCandidateEmailId);
                    $stmt->bindParam(':tempTeamCandidateInfo', $tempTeamCandidateInfo);
                    $stmt->bindParam(':tempTeamInfo', $tempTeamInfo);
                    $stmt->bindParam(':tempTeamCandidateName2', $tempTeamCandidateName2);
                    $stmt->bindParam(':tempTeamCandidateBranch2', $tempTeamCandidateBranch2);
                    $stmt->bindParam(':tempTeamCandidateYear2', $tempTeamCandidateYear2);
                    $stmt->bindParam(':tempTeamCandidateEmailId2', $tempTeamCandidateEmailId2);
                    
                    $stmt->bindParam(':tempTeamCandidateName3', $tempTeamCandidateName3);
                    $stmt->bindParam(':tempTeamCandidateBranch3', $tempTeamCandidateBranch3);
                    $stmt->bindParam(':tempTeamCandidateYear3', $tempTeamCandidateYear3);
                    $stmt->bindParam(':tempTeamCandidateEmailId3', $tempTeamCandidateEmailId3);
                    
                    //:tempPrimaryTrack,:tempSecondaryTrack,:tempTertiaryTrack
                    $stmt->bindParam(':tempPrimaryTrack', $tempPrimaryTrack);
                    $stmt->bindParam(':tempSecondaryTrack', $tempSecondaryTrack);
                    $stmt->bindParam(':tempTertiaryTrack', $tempTertiaryTrack);
                    if (!$stmt->execute()) {
                        $resultMessage = "Opps!Something went wrong.Please try later!";
                    } else {
                        $consultantId = $conn->lastInsertId();
                        $resultMessage = "Thank you for showing your interest to participate in Digital Summit 2016. One of our Digital Summit representative will contact you shortly. ";

                        $eflag = CONF_EMAILFLAG;
                        if ($eflag == 1) {
                            require '../classes/ConfMailManager.php';
                            $mailmanager = new ConfMailManager();
                            
                           // $mailmanager->sendConfHackathonDetails($tempFirstName, $tempLastName, $tempEmail, $tempMobileNumber, $tempCity, $tempCollegeName, $tempBranch, $tempGraduationYear,$tempState,$tempAlteMobileNo,$tempCandidateInfo,$tempTeamCandidateName,$tempTeamCandidateBranch,$tempTeamCandidateYear,$tempTeamCandidateEmailId,$tempTeamCandidateInfo,$tempTeamInfo,$tempTeamCandidateName2,$tempTeamCandidateBranch2,$tempTeamCandidateYear2,$tempTeamCandidateEmailId2,$tempTeamCandidateName3,$tempTeamCandidateBranch3,$tempTeamCandidateYear3,$tempTeamCandidateEmailId3);
                          //  $mailmanager->sendConfHackathonAcknowledgement($tempFirstName, $tempLastName, $tempEmail);
                        }
                    }
                }
            } catch (Exception $exc) {

                $exc->getMessage();
                $resultMessage = $exc;

                //header('Location: ../back-end-error.php?resultMessage=' . $resultMessage);
            }
        }
        ?>

        <style>
            .btn {
    padding: 8px 15px !important;
    } 
            .home >  .jumbotron {
                background-color: #00a79b !important;
                color: inherit;
                margin-bottom: 0;
                padding-bottom: 10px;
                padding-top: 10px;
            }
            .jumbotron-sm { padding-top: 24px;
                            padding-bottom: 24px; }

            .h1 small {
                font-size: 24px;

            }


            .location_map{
                font-size: 16px;
                padding: 22px 0;
            }

            body{padding-top:20px}

            .pricing-table .plan {
                margin-left:0px;
                border-radius: 5px;

                background-color: #f3f3f3;
                -moz-box-shadow: 0 0 6px 2px #b0b2ab;
                -webkit-box-shadow: 0 0 6px 2px #b0b2ab;
                box-shadow: 0 0 6px 2px #b0b2ab;
                margin:47px;
            }

            /* .plan:hover {
              background-color: #fff;
              -moz-box-shadow: 0 0 12px 3px #b0b2ab;
              -webkit-box-shadow: 0 0 12px 3px #b0b2ab;
              box-shadow: 0 0 12px 3px #b0b2ab;
            }
            */


            .m-t-10 {
                margin-top: 10px;
            }


            .location_map .h1 {
                font-size: 43px !important;
            }

            .applicant h4{
                border-bottom: 2px solid #00a79b;
                padding: 1% 0;
            }
           .top-space {
   margin-top: 0px !important;
}

.parallax{
    background-image:url('../images/jobfairs.jpg');
    background-attachment:fixed;
    background-size:cover;
    background-position:center;
}
        </style>
        <script type="text/javascript" src="../includes/js/ConfScripts.js"></script>
        <script type="text/javascript">
            function fun_AllowOnlyAmountAndDot(txt)
            {
              //  alert(txt.value);
                if(event.keyCode > 47 && event.keyCode < 58 || event.keyCode == 46)
                {
                    var txtbx=document.getElementById(txt);
                    var amount = document.getElementById(txt).value;
                    var present=0;
                    var count=0;

                    if(amount.indexOf(".",present)||amount.indexOf(".",present+1));
                    {
                        // alert('0');
                    }

                    /*if(amount.length==2)
              {
                if(event.keyCode != 46)
                return false;
              }*/
                    do
                    {
                        present=amount.indexOf(".",present);
                        if(present!=-1)
                        {
                            count++;
                            present++;
                        }
                    }
                    while(present!=-1);
                    if(present==-1 && amount.length==0 && event.keyCode == 46)
                    {
                        event.keyCode=0;
                        //alert("Wrong position of decimal point not  allowed !!");
                        return false;
                    }

                    if(count>=1 && event.keyCode == 46)
                    {

                        event.keyCode=0;
                        //alert("Only one decimal point is allowed !!");
                        return false;
                    }
                    if(count==1)
                    {
                        var lastdigits=amount.substring(amount.indexOf(".")+1,amount.length);
                        if(lastdigits.length>=2)
                        {
                            //alert("Two decimal places only allowed");
                            event.keyCode=0;
                            return false;
                        }
                    }
                    return true;
                }
                else
                {
                    event.keyCode=0;
                    //alert("Only Numbers with dot allowed !!");
                    return false;
                }

            }

        </script>

    </head>
    <?php include '../header.php'; ?>
    <body class="home">
 <script type="text/javascript">
            $(window).load(function(){
                $('#myModal1').modal('show');
            });
        </script>
       <section class="parallax">
            <div class="overlay">
            <div class="container">
                
            <div class="row" style="margin-top:40px; margin-bottom:45px;">
          <div class="col-sm-8">
            <h1 style="color:#fff"> <strong>MEANHack Registration</strong></h1>
          </div>
          <div class="col-sm-4">
              <ul class="breadcrumb pull-right">
                <li><a href="../"><font color="#fff">Home</font></a></li>
               
                <li class="active"><font color="#fff">MEANHack Registration</font></li>
            </ul>
          </div>
         
        </div>
          
            </div></div>
        </section>
       
            <div class="container">
               


                <div class="row">
                    <div class="col-sm-12">
                        <?php
                        if ($isSubmitted) {

                            if ($consultantId > 0) {
                                ?>  

                                <div class="alert alert-success" id="success">

                                    <a href="javascript:closeSuccessDiv(success)" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong>Success! </strong> <?php echo $resultMessage ?>
                                </div>
                            <?php } else { ?>

                                <div class="alert alert-danger" id="danger">
                                    <a href="javascript:closeSuccessDiv(danger)" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong>Exception! </strong><?php echo $resultMessage ?>
                                </div> 

                                <?php
                            }
                        }
                        ?>        

                    </div>
                </div>


                <div class="row">
                    <div class="col-md-12">
                        
                                <div class="row">
                                    <div class="col-sm-12"> 
                                        <div class="alert alert-danger" style="display:none" id="errorMsgDiv">
                                            <button type="button" class="close" onclick="closeErrorMsg()" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <strong><span id="resultMessage">Invalid details!!</span></strong> 
                                        </div>                        
                                    </div>
                                </div>
                               
                                 <form role="form" method="post" action="" accept-charset="UTF-8">
                                    <div class="row">
                                        <div class="col-sm-12"> <h3 class="heavy">College Details</h3></div>
                                     <div class="col-sm-4">                                            
                                           <input type="text" id="collegeName" class="form-control" name="collegeName" placeholder="College Name" required="true" onchange="fieldLengthValidator(this);">

                                        </div>
                                        <div class="col-sm-4">
                                               <input type="text" id="city" class="form-control" name="city" placeholder="City" required="true" onchange="fieldLengthValidator(this);">
                                        </div>
                                        <div class="col-sm-4">
                                               <input type="text" id="state" class="form-control" name="state" placeholder="State" required="true" onchange="fieldLengthValidator(this);">
                                        </div>
                                       
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-sm-12">  <h3 class="heavy">Personal information</h3></div>
                                        <div class="col-sm-4">
                                            
                                            <input type="text" id="fname" class="form-control" name="fname" placeholder="First Name" required="true" onchange="fieldLengthValidator(this);">
                                        </div>
                                        <div class="col-sm-4">
                                            
                                            <input type="text" id="lname" class="form-control" name="lname" placeholder="Last Name" required="true" onchange="fieldLengthValidator(this);">
                                        </div>
                                        <div class="col-sm-4">
                                            
                                            <input type="text" id="branch" class="form-control" name="branch" placeholder="Branch" required="true" onchange="fieldLengthValidator(this);">
                                        </div>
                                        </div>
                                     <br>
                                        <div class="row">
                                        <div class="col-sm-4">
                                            
                                         <select class="form-control" id="graduationYear" name="graduationYear" required="required">
                                                <option value="" selected="selected">Year</option>
                                                <option value="3rd">3rd</option>
                                                <option value="4th">4th</option>
                                                
                                            </select>
                                        </div>
                                        <div class="col-sm-4">
                                            
                                            <input type="text" id="mobileNo" class="form-control" name="mobileNo" placeholder="Mobile Number" required="true" onchange="return formatPhone(this);">
                                        </div> 
                                        <div class="col-sm-4">
                                            
                                            <input type="text" id="altMobileNo" class="form-control" name="altMobileNo" placeholder="Alternate Phone Number" required="true" onchange="return formatPhone(this);">
                                        </div> 
                                        </div>
                                     <br>
                                        <div class="row">
                                        <div class="col-sm-4">
                                            
                                            <input type="text" id="email" class="form-control" name="email" placeholder="Email ID" required="true" onchange="return checkEmail(this);fieldLengthValidator(this);">
                                        </div> 

                                    </div> 
                                    <div class="row">
                                     <div class="col-sm-12" >
                                            <label for="comments"></label>
                                            <textarea placeholder="Tell us a bit about yourself " rows="3" class="form-control" id="candidateInfo" name="candidateInfo" onchange="fieldLengthValidator(this);" required="true"></textarea>
                                        </div>
                                        </div>
                                     
                                     
                                     <br>
                                     <script type="text/javascript">
                                         var myOptions = {
                                            IOT : 'Internet of Things',
                                            CCB : 'Cognitive Chat Bots',
                                            EM : 'Enterprise Mobility'
                                        };
                                         function setRemainingTracks(trckObj){
                                             if(trckObj.id=='primaryTrack'){
                                                 if(trckObj.value!=''){
                                                           $("#secondaryTrack").prop("disabled", false);
                                                           $('#secondaryTrack').empty().append('<option value="" selected="selected">Select Secondary Track</option>');
                                                            $("#tertiaryTrack").prop("disabled", true);
                                                    $('#tertiaryTrack').empty().append('<option value="" selected="selected">Select Tertiary Track</option>');
                                                    
                                                           $.each(myOptions, function(val, text) {
                                                            if(trckObj.value!=val)                                         
                                                            $('#secondaryTrack').append( new Option(text,val) );
                                                            });
                                                 }else {
                                                      $("#secondaryTrack").prop("disabled", true);
                                                    $('#secondaryTrack').empty().append('<option value="" selected="selected">Select Secondary Track</option>');
                                                     $("#tertiaryTrack").prop("disabled", true);
                                                    $('#tertiaryTrack').empty().append('<option value="" selected="selected">Select Tertiary Track</option>');
                                                 }
                                                 
                                                 
                                             }
                                              if(trckObj.id=='secondaryTrack'){
                                                  
                                                 if(trckObj.value!=''){
                                                           $("#tertiaryTrack").prop("disabled", false);
                                                           $('#tertiaryTrack').empty().append('<option value="" selected="selected">Select Tertiary Track</option>');
                                                           $.each(myOptions, function(val, text) {
                                                            if(trckObj.value!=val && $('#primaryTrack').val()!=val)                                         
                                                            $('#tertiaryTrack').append( new Option(text,val) );
                                                            });
                                                 }else {
                                                     $("#tertiaryTrack").prop("disabled", true);
                                                    $('#tertiaryTrack').empty().append('<option value="" selected="selected">Select Tertiary Track</option>');
                                                    }
                                                 
                                                 
                                             }
                                         }
                                         
                                     </script>
                                     
                                     
                                     
                                     
                                         <div class="row">
                                               <div class="col-sm-12">
                                              <h3 class="heavy">Team Registration</h3>
                                              <p>You will be assigned track based on your selection and timestamp of registration – selected teams which have registered first will have higher preference </p>
                                        </div>
                                             </div>
                                             <!-- track details start -->
                                     <div class="row">
                                          <div class="col-sm-4">
                                              <select class="form-control" id="primaryTrack" name="primaryTrack" required="true" onchange="setRemainingTracks(this)">
                                                <option value="" selected="selected">Select Primary Track</option>
                                                <option value="IOT">Internet of Things</option>
                                                <option value="CCB">Cognitive Chat Bots</option>
                                                <option value="EM">Enterprise Mobility</option>
                                            </select>
                                        </div>
                                     <div class="col-sm-4">
                                          <select class="form-control" id="secondaryTrack" name="secondaryTrack" required="true" disabled="true" onchange="setRemainingTracks(this)">
                                                <option value="" selected="selected">Select Secondary Track</option>
                                              <!--  <option value="IOT">Internet of Things</option>
                                                <option value="CCB">Cognitive Chat Bots</option>
                                                <option value="EM">Enterprise Mobility</option> -->
                                            </select>
                                        </div><div class="col-sm-4">
                                            <select class="form-control" id="tertiaryTrack" name="tertiaryTrack" required="true" disabled="true">
                                                <option value="" selected="selected">Select Tertiary Track</option>
                                               <!-- <option value="IOT">Internet of Things</option>
                                                <option value="CCB">Cognitive Chat Bots</option>
                                                <option value="EM">Enterprise Mobility</option> -->
                                            </select>
                                        </div>
                                     </div>
                                     <!-- track details end-->
                                             
                                        
                                     <br>
                                     <div class="row">
                                     <div class="col-sm-12">
                                              <p>You will need to select a team of 3 (or) 4 people including yourselves – Please add the remaining team members name in the below form</p>
                                        </div>
                                         </div>
                                    <div class="row">
                                        
                                        
                                        <div class="col-sm-3">
                                           
                                            <input type="text" id="teamCandidateName1" class="form-control" name="teamCandidateName1" placeholder="Name" required="true"  ondrop="return false;" onpaste="return false;" onchange="fieldLengthValidator(this);">
                                      
                                        </div>
                                        
                                        <div class="col-sm-3">
                                            
                                            <input type="text" id="teamCandidateBranch1" class="form-control" name="teamCandidateBranch1" placeholder="Branch"  required="true" ondrop="return false;" onpaste="return false;" onchange="fieldLengthValidator(this);">
                                        </div>
                                        
                                       
                                        
                                        <div class="col-sm-3">
                                          <select class="form-control" id="teamCandidateYear1" name="teamCandidateYear1" required="true">
                                                <option value="" selected="selected">Year</option>
                                                <option value="3rd">3rd</option>
                                                <option value="4th">4th</option>
                                                
                                            </select>
                                        </div>

                                        <div class="col-sm-3">
                                           
                                            <input type="text" id="teamCandidateEmailId1" class="form-control" name="teamCandidateEmailId1" required="true" placeholder="Email ID"  ondrop="return false;" onpaste="return false;" onchange="return checkEmail(this);fieldLengthValidator(this);">
                                        </div>
                                    </div>
                                     
                                        
                                     <div class="row" id="secondRow" style="display: none">
                                       
                                        <br>
                                        <div class="col-sm-3">
                                           
                                            <input type="text" id="teamCandidateName2" class="form-control" name="teamCandidateName2" placeholder="Name"   ondrop="return false;" onpaste="return false;" onchange="fieldLengthValidator(this);">
                                      
                                        </div>
                                        
                                        <div class="col-sm-3">
                                            
                                            <input type="text" id="teamCandidateBranch2" class="form-control" name="teamCandidateBranch2" placeholder="Branch"   ondrop="return false;" onpaste="return false;" onchange="fieldLengthValidator(this);">
                                        </div>
                                        
                                        
                                        
                                        <div class="col-sm-3">
                                          <select class="form-control" id="teamCandidateYear2" name="teamCandidateYear2">
                                                <option value="" selected="selected">Year</option>
                                                <option value="3rd">3rd</option>
                                                <option value="4th">4th</option>
                                                
                                            </select>
                                        </div>

                                        <div class="col-sm-3">
                                           
                                            <input type="text" id="teamCandidateEmailId2" class="form-control" name="teamCandidateEmailId2" placeholder="Email ID"  ondrop="return false;" onpaste="return false;" onchange="return checkEmail(this);fieldLengthValidator(this);">
                                        </div>
                                        
                                    </div>
                                        
                                         <div class="row" id="thirdRow" style="display: none">
                                       
                                        <br>
                                        <div class="col-sm-3">
                                           
                                            <input type="text" id="teamCandidateName3" class="form-control" name="teamCandidateName3" placeholder="Name"   ondrop="return false;" onpaste="return false;" onchange="fieldLengthValidator(this);">
                                      
                                        </div>
                                        
                                        <div class="col-sm-3">
                                            
                                            <input type="text" id="teamCandidateBranch3" class="form-control" name="teamCandidateBranch3" placeholder="Branch"   ondrop="return false;" onpaste="return false;" onchange="fieldLengthValidator(this);">
                                        </div>
                                        
                                        
                                        
                                        <div class="col-sm-3">
                                          <select class="form-control" id="teamCandidateYear3" name="teamCandidateYear3">
                                                <option value="" selected="selected">Year</option>
                                                <option value="3rd">3rd</option>
                                                <option value="4th">4th</option>
                                                
                                            </select>
                                        </div>

                                        <div class="col-sm-3">
                                           
                                            <input type="text" id="teamCandidateEmailId3" class="form-control" name="teamCandidateEmailId3" placeholder="Email ID"  ondrop="return false;" onpaste="return false;" onchange="return checkEmail(this);fieldLengthValidator(this);">
                                        </div>
                                        
                                    </div><br>
                                        <div class="row">
                                        <div class="col-sm-12">
                                           
                                            <button type="button" class="btn btn-info" id="addButton">
      <span class="glyphicon glyphicon-plus"></span> 
    </button>
                                            <button type="button" class="btn btn-info" id="removeButton" style="display: none">
      <span class="glyphicon glyphicon-minus"></span> 
    </button>
                                        </div>
                                    </div>
                                        <input type="hidden" id="currentRows" value="1"/>
                                  
                                   
                                       
                                    <div class="row">
                                        <div class="col-sm-6">
                                              <h3 class="heavy">Technical Expertise</h3>
                                        </div>
                                            <div class="col-sm-6">
                                              <h3 class="heavy">Why are you the best?</h3>
                                        </div>
                                       <div class="col-sm-6" >
                                            <textarea placeholder="What is your teams technical expertise? Explain how you rate yourself and what technologies you have worked with in the past." rows="3" class="form-control" id="teamCandidateInfo" name="teamCandidateInfo" onchange="fieldLengthValidator(this);" required="true"></textarea>
                                        </div>

                                        <div class="col-sm-6" >
                                            <textarea placeholder="Why do you think your team can win MEANHack? Explain in detail, this will be used to determine your selection to participate. " rows="3" class="form-control" id="teamInfo" name="teamInfo" onchange="fieldLengthValidator(this);" required="true"></textarea>
                                        </div>


                                        </div>
                                        <br>
                                        <div class="row">
                                            
                                            <div class="col-sm-4">
                                                <center>
                                                    <button type="submit" class="btn btn-info col-sm-12" id="btnSubmit" name="btnSubmit" disabled="true">Submit </button>
                                                    </center>
                                           
                                            
                                        </div>
                                        <div class="col-sm-4"></div>
                                            <div class="col-sm-4"></div>
                                    </div>
                                </form>
                    </div>
                </div>
            </div>
        
        <br><br>

<!-- modal box code start -->
   
<div class="modal fade" id="myModal1" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header greyback1">
        
        <h4 class="modal-title" id="memberModalLabel"><strong>Registrations Closed</strong> </h4>
      </div>
        
        <div class="modal-body"> 
         <p class="methodText">We had an enormous response for MEANHack registrations but were unfortunately only able to select 42 teams to participate in the final event. All the selected teams will be participating to try and win the top 3 cash prizes available. For all the teams that didn’t get selected, we will be conducting a lot more events in the future and hope to see you there. </p>
        </div>
        <div class="modal-footer nomargintop">
        
        </div>
        <br>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>
<!-- modal box code end -->

        <!-- Social links. @TODO: replace by link/instructions in template -->
      
        <!-- /social links -->
        <div class="uparrow" id="uparrow"><i class="fa fa-3x fa-angle-up" aria-hidden="true"></i></div>



        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>



        <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.4/waypoints.min.js"></script>




        <script>
            $(document).ready(function () {
               

              
                // fade in and fade out
                $(function () {
                    $(window).scroll(function () {
                        if ($(this).scrollTop() > 50) {
                            $('#uparrow').fadeIn();
                        } else {
                            $('#uparrow').fadeOut();
                        }
                    });

                    // scroll body to 0px on click
                    $('#uparrow').click(function () {
                        $('body,html').animate({
                            scrollTop: 0
                        }, 800);
                        return false;
                    });
                });

            });
            
           
        </script>

        <?php include '../footer.php'; ?>
    </body>
    <script type="text/javascript" src="../includes/js/jquery.price_format.2.0.min.js"></script>
    <script>
        
        
        $(document).ready(function(){
    $("#addButton").click(function(){
        
        if($("#currentRows").val()=='1'){
            $("#secondRow").show();
            $("#removeButton").show();
            
        }else if($("#currentRows").val()=='2'){
            $("#thirdRow").show();
            $("#addButton").hide();
            $("#removeButton").show();
        }
        
        
         var currRows=$("#currentRows").val();
        $("#currentRows").val(parseInt(currRows,10)+1);
        
       // alert("The paragraph was add.");
    });
     $("#removeButton").click(function(){
         
         if($("#currentRows").val()=='3'){
             $("#thirdRow").hide();
             $("#removeButton").show();
             $("#addButton").show();
             
             $("#teamCandidateName3").val("");
         $("#teamCandidateBranch3").val("");
         $("#teamCandidateYear3").val("");
         $("#teamCandidateEmailId3").val("");
             
         }else if($("#currentRows").val()=='2'){
              $("#secondRow").hide();
              $("#addButton").show();
               $("#removeButton").hide();
               
               $("#teamCandidateName2").val("");
         $("#teamCandidateBranch2").val("");
         $("#teamCandidateYear2").val("");
         $("#teamCandidateEmailId2").val("");
         }
         
         
         
         
         
         
         
         



         
      
       // alert("The paragraph was remove.");
       
       
       var currRows=$("#currentRows").val();
        $("#currentRows").val(parseInt(currRows,10)-1);
    });
});
        
        
        $('#postGraduationPer').priceFormat({
            prefix: '',
            centsSeparator: '.',
            limit: 4,
            centsLimit: 2
        });
        $('#graduationPer').priceFormat({
            prefix: '',
            centsSeparator: '.',
            limit: 4,
            centsLimit: 2
        });
        $('#experience').priceFormat({
            prefix: '',
            centsSeparator: '.',
            limit: 4,
            centsLimit: 2
        });
//        $('#salary').priceFormat({
//            prefix: '',
//            centsSeparator: '.',
//            limit: 15,
//            centsLimit: 2
//        });
       
    </script>
</html>
