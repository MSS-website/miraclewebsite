<!-- 
/* ******************************************************************************
*
* Project : The Digital Valley Summit V1
*
* Date    : October10,2016
*
* Author  : Corporate Applicaiton Support Team<hubble@miraclesoft.com>
*
* File    : MeanhackRegistranData.php
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


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3./includes/cssfont-awesome.min.css">
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="./includes/css/selectivity-full.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">


        <?php include './context.php'; ?>

        <?php
        require '../config/ConnectionProvider.php';

        session_start();
        if (isset($_SESSION['ses_Email']) && $_SESSION['ses_Email'] != "" && $_SESSION['ses_Email'] == "vkandregula@miraclesoft.com") {
            
        } else {
            header('Location: AdminLogin.php');
        }


        if (isset($_POST['btnGenerateExcel'])) {
            header('Location: ExportMeanhackRegistrationData.php');
        }


        $rattendeeType = '';
        $rcountry = '';
        $queryString = '';
        $rsearchSelecetd='1';
        if (isset($_POST['btnSearchSubmit'])) {
            // echo 'hii';
            try {
                
                // $conn->connectToDatabase();
                if (!get_magic_quotes_gpc()) {
                    //$rcollegeNameSearch = addslashes($_POST['collegeName']);
                    $rsearchSelecetd = addslashes($_POST['searchSelecetd']);
                    
                  //  $rcompetitionTypeSearch = addslashes($_POST['competitionType']);
                } else {
                   // $rcollegeNameSearch = $_POST['collegeName'];
                    $rsearchSelecetd = $_POST['searchSelecetd'];
                    //$rcompetitionTypeSearch = $_POST['competitionType'];
                }

                $queryString = 'SELECT Id,FirstName,LastName,EmailId,MobileNumber,CollegeName,City,Branch,GraduationYear,CreatedDate,State,AlteMobileNo,CandidateInfo,TeamCandidateName,TeamCandidateBranch,TeamGraduationYear,TeamEmailId,TeamCandidateInfo,TeamInfo,TeamCandidateName2,TeamCandidateBranch2,TeamGraduationYear2,TeamEmailId2,TeamCandidateName3,TeamCandidateBranch3,TeamGraduationYear3,TeamEmailId3,AssignedTrack FROM tblConfHackathonRegistration where 1=1 ';

               /* if ($rcollegeNameSearch != '-1') {
                    $queryString = $queryString . ' AND CollegeName =\'' . $rcollegeNameSearch . '\'';
                }*/
                
                if ($rsearchSelecetd != '') {
                    $queryString = $queryString . ' AND IsSelected ='. $rsearchSelecetd;
                }

//                if ($rcompetitionTypeSearch != '-1') {
//                    echo '$rcompetitionTypeSearch-*--'.$rcompetitionTypeSearch;
//                    $queryString = $queryString . ' AND CompetitionType =\'' . $rcompetitionTypeSearch . '\'';
//                }


                $queryString = $queryString . ' ORDER BY CreatedDate DESC';
                
            //    echo '$queryString----'.$queryString;
            } catch (Exception $exc) {

                $exc->getMessage();
                $resultMessage = '<font color=red size=2px>' . $exc . '</font>';
                //  $conn->closeConnection(); // closing the connection
                //    mysql_close();
            }
        }
        ?>

        <style>
            .home >  .jumbotron {
                background-color: #2bb2dc;
                color: inherit;
                margin-bottom: 0;
                padding-bottom: 10px;
                padding-top: 10px;
            }
            .jumbotron-sm { padding-top: 24px;
                            padding-bottom: 24px; }
            .jumbotron small {
                color: yellow !important;
                font-size: xx-large;
            }
            .h1 small {
                font-size: 24px;

            }


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

            .panel-primary > .panel-heading {
                background-color: #5fbae9;
                border-color: #5fbae9;
                color: #fff;
            }

            .location_map .h1 {
                font-size: 43px !important;
            }

            .tabl_head{
                overflow: auto;
            }


            .tabl_head i{
                color:#fff;
            }
            
            .parallax{
                background-image:url('./images/jobfairs.jpg');
                background-attachment:fixed;
                background-size:cover;
                background-position:center;
            }
        </style>
        <script>
            function doSearchSubmit() {
                document.forms["myForm"].submit();    
            }    
            
              function enableUpdateEnter(e) {
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
                        upadteMeanHackAttendeeData();
                        return false;
                    }
                }catch(e){
                    alert("Error"+e);
                }
            }
            
            
            function cancelModal() {
                        $("#loginModalClosId").click();
            }
        </script>
        <script type="text/javascript" src="includes/js/ConfScripts.js"></script>
    </head>
    <?php include './header.php'; ?>
    <body class="home" >

     <!--   <div class="jumbotron jumbotron-sm">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-lg-12">


                        <div class="location_map col-sm-6">
                            <h2 style="color: peachpuff;" class=""> Digital Summit 2016<br><small style="color:#fff">Cultural Data</small></h2>
                        </div>


                        <div class="location_map col-sm-6">  <i class="fa fa-pencil-square-o fa-5x pull-right" aria-hidden="true" ></i></div>

                    </div>
                </div>
            </div>
        </div> -->
      <section class="parallax">
            <div class="overlay">
                <div class="container">

                    <div class="row" style="margin-top:40px; margin-bottom:45px;">

                        <div class="col-sm-6 text-left">

                            <h1 style="color:#fff"><strong>MeanHack Registrations</strong></h1>
                        </div>
                        <div class="col-sm-6 text-right">
                            <ul class="breadcrumb pull-right">
                                <li><a href="AdminHome.php"><font color="#fff">Admin Home</font></a></li>

                                <li class="active"><font color="#fff"><strong>MeanHack Registrations</strong></font></li>
                            </ul>
                        </div>

                    </div>

                </div></div>
        </section>
     
        <div class="container">
            <div class="container">
                <div class="gap" style="line-height: 50px; height: 50px;"></div>




                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div  class="panel-heading tabl_head">

                                <div class="col-sm-11">    Registration Data</div>

                                <div class="col-sm-1 pull-right">     <a href="AdminHome.php"><i class="fa fa-2x fa-arrow-circle-left"></i></a>  </div>  

                            </div>



                            <div class="panel-body">

                                <div class="row">
                                    <div class="col-sm-12">
                                        <form method="post" action="<?php $_PHP_SELF ?>" id="myForm" name="myForm">
                                            <div class="row">
                                               

                                                <div class="col-sm-4"> <label for="lname">Status</label>
                                              <select class="form-control" id="searchSelecetd" name="searchSelecetd" >
                                                  <?php if($rsearchSelecetd=='') {?>
                                                  <option value="" selected>All</option>
                                                  <?php } else { ?>
                                                  <option value="" >All</option>
                                                  <?php } ?>
                                                  
                                                  <?php if($rsearchSelecetd=='0') {?>
                                                 <option value="0" selected>Registered</option>
                                                  <?php } else { ?>
                                                  <option value="0" >Registered</option>
                                                  <?php } ?>
                                                  
                                                  <?php if($rsearchSelecetd=='1') {?>
                                                 <option value="1" selected>Selected</option>
                                                  <?php } else { ?>
                                                 <option value="1">Selected</option>
                                                  <?php } ?>
                                                  
                                                
                                                
                                                
                                                
                                            </select>
                                        </div>
                                             
                                                <div class="col-sm-4"><br>
                                                  <!--  <input type="submit" class="btn btn-primary m-t-10 pull-right" id="btnSearchSubmit" name="btnSearchSubmit" value="Search">  -->
                                                    <button type="submit" class="btn col-sm-4 btn-info" id="btnSearchSubmit" name="btnSearchSubmit" value="Submit">Search</button> 
                                                </div>
                                            </div>
                                        </form>
                                        
                                        
                                         <div class="row" id="processing" style="display: none">
                                                               <div class="col-sm-4"></div>
     <div class="col-sm-4">
         <font color="red" size="4px">Processing please wait..</font>
         
     </div><div class="col-sm-4"></div>
     </div>
                                        
                                        
                                        <div class="gap" style="line-height: 50px; height: 50px;"></div>
                                        <table class="table table-hover table-striped" id="reg_tab">
                                            <thead>
                                                <tr>
                                                    <th>SNO</th>
                                                    <th>Name</th>
                                                    <th>EmailId</th>
                                                    <th>MobileNumber</th>
                                                    <th>CollegeName</th>
                                                   <th>AssignedTrack</th>
                                                </tr>
                                            </thead>
                                            <tbody>
<?php
//$conn1 = new DbController();
try {

    if ($queryString == '') {
        $selectQuery1 = "SELECT Id,FirstName,LastName,EmailId,MobileNumber,CollegeName,City,Branch,GraduationYear,CreatedDate,State,AlteMobileNo,CandidateInfo,TeamCandidateName,TeamCandidateBranch,TeamGraduationYear,TeamEmailId,TeamCandidateInfo,TeamInfo,TeamCandidateName2,TeamCandidateBranch2,TeamGraduationYear2,TeamEmailId2,TeamCandidateName3,TeamCandidateBranch3,TeamGraduationYear3,TeamEmailId3,AssignedTrack FROM tblConfHackathonRegistration WHERE IsSelected=1 ORDER BY CreatedDate DESC";
    } else {
        $selectQuery1 = $queryString;
    }
    //  echo '$selectQuery1---' . $selectQuery1;
    $stmt = $conn->prepare($selectQuery1);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $i = 0;
    while ($row = $stmt->fetch()) {

        $i++;
        ?><tr>
                                                            <td><?php echo $i; ?></td>
                                                            
                                                             <td><a href="javascript:getHackathonRegistrantDetails('<?=$row["Id"]?>');"><?php echo $row["FirstName"] . '.' . $row["LastName"]; ?></a></td>
                                                            <td><?php echo $row["EmailId"]; ?></td>
                                                            <td><?php echo $row["MobileNumber"]; ?></td>
                                                            <td><?php echo $row["CollegeName"]; ?></td>
                                                            <td><?php 
                                                            if($row["AssignedTrack"]=='IOT')
                                                            echo 'Internet of Things'; 
                                                            else if($row["AssignedTrack"]=='CCB')
                                                                echo 'Cognitive Chat Bots';
                                                            else if($row["AssignedTrack"]=='EM')
                                                                echo 'Enterprise Mobility';
                                                            else 
                                                                echo '';
                                                            ?></td>
                                                        </tr><?php
                                            }
                                        } catch (Exception $exc) {

                                            $exc->getMessage();
                                            // $resultMessage= '<font color=red size=2px>'.$exc.'</font>';
                                            //header('Location: ../back-end-error.php?resultMessage='.$resultMessage); 
                                            // $conn->closeConnection(); // closing the connection
                                        }
?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- Table end -->



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div style="clear:both;" class="clearfix"></div>

        <!-- /Header -->

        <!-- Intro -->

        <div class="clearfix"></div>




        <div class="clearfix"></div>
        <!--mainwrapper start-->

        <form method="post" action="<?php $_PHP_SELF ?>" id="myForm" enctype="multipart/form-data" >
            <div class="col-sm-12" >
                <div class="col-sm-2 pull-right" >
                    <!-- <input type="button" value="Login" tabindex="3" class="btn btn-primary col-sm-12" name="btnSubmit1" id="btnSubmit1" onclick="doSubmit();"/> -->
                    <button type="submit" tabindex="13" class="btn btn-primary" name="btnGenerateExcel" id="btnGenerateExcel">Export</button>
                </div>
            </div>
        </form>


        <!-- Social links. @TODO: replace by link/instructions in template -->
        <section id="social">
            <div class="container">
                <div class="wrapper clearfix">
                    <!-- AddThis Button BEGIN -->
                    <div class="addthis_toolbox addthis_default_style">
                        <a class="addthis_button_facebook_like" ></a>
                        <a class="addthis_button_tweet"></a>
                        <a class="addthis_button_linkedin_counter"></a>
                        <a class="addthis_button_google_plusone" ></a>
                    </div>
                    <!-- AddThis Button END -->
                </div>
            </div>
        </section>
        <!-- /social links -->
        <div class="uparrow" id="uparrow"><i class="fa fa-3x fa-angle-up" aria-hidden="true"></i></div>


        
        
        
        
        
        
        
        
        
        
        
        
        
         <!-- Modal box start -->
        
        
        
        
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="loginModalClosId" ><span aria-hidden="true">&times;</span>
                </button>
                 <h3 class="modal-title" id="memberModalLabel"><strong>DS16 MEANHack Registration Details</strong> </h3>
                    
            </div>
            <input type="hidden" id="hackRegId" name="hackRegId"/>
            <div class="modal-body">
                
              
              <!-- <p class="methodText" style="margin-top: -10px;">You must be a Miraclite to gain access to this. Please validate yourself using your Miracle credentials for further access. </p> -->
              <div class="row"> <div class="col-sm-12">  <h3 class="heavy">Personal information</h3></div></div>
                                        
             
              
                                        <div class="row">
                                        
                                        <div class="col-sm-3">
                                            <label for="lname">First Name</label>
                                            <input type="text" id="fname" class="form-control" name="fname" placeholder="First Name" required="true" onchange="fieldLengthValidator(this);" onkeydown="return enableUpdateEnter(event);">
                                        </div>
                                        <div class="col-sm-3">
                                            <label for="lname">Last Name</label>
                                            <input type="text" id="lname" class="form-control" name="lname" placeholder="Last Name" required="true" onchange="fieldLengthValidator(this);" onkeydown="return enableUpdateEnter(event);">
                                        </div>
                                      
                                       
                                       
                                       <div class="col-sm-3"> <label for="lname">Assigned Track</label>
                                              <select class="form-control" id="assignedTrack" name="assignedTrack" required="true" onkeydown="return enableUpdateEnter(event);">
                                                <option value="" selected="selected">Select Track</option>
                                                <option value="IOT">Internet of Things</option>
                                                <option value="CCB">Cognitive Chat Bots</option>
                                                <option value="EM">Enterprise Mobility</option>
                                            </select>
                                        </div>
                     
                    <div class=" col-sm-3"><br></br>
                   <input type="checkbox" name="isAttended" id="isAttended" checked="false" onkeydown="return enableUpdateEnter(event);"/>&nbsp;&nbsp;<label for="lname">Attended?</label>
                </div>
                                        </div>
                <br>
                <div class="row"> <div class="col-sm-12">  <h3 class="heavy">Team Information</h3></div></div>
                <div class="row">   
                    <div class="col-sm-4">
                         <label for="lname">Team Member1</label>
                        <input type="text" id="teamCandidateName1" class="form-control" name="teamCandidateName1" placeholder="Name" required="true"   onchange="fieldLengthValidator(this);" onkeydown="return enableUpdateEnter(event);">
                   </div>
                    <div class=" col-sm-4"><br></br>
                   <input type="checkbox" name="isAttended1" id="isAttended1" checked="false" onkeydown="return enableUpdateEnter(event);"/>&nbsp;&nbsp;<label for="lname">Attended?</label>
                </div>
                </div>
                <div class="row" id="tm2Div" >   
                    <div class="col-sm-4"><label for="lname">Team Member2</label>
                        
                        <input type="text" id="teamCandidateName2" class="form-control" name="teamCandidateName2" placeholder="Name" required="true"  onchange="fieldLengthValidator(this);" onkeydown="return enableUpdateEnter(event);">
                   </div>
                     <div class=" col-sm-4"><br></br>
                   <input type="checkbox" name="isAttended2" id="isAttended2" checked="false" onkeydown="return enableUpdateEnter(event);"/>&nbsp;&nbsp;<label for="lname">Attended?</label>
                </div>
                </div>
                 <div class="row" id="tm3Div" >   
                    <div class="col-sm-4">
                        <label for="lname">Team Member3</label>
                        <input type="text" id="teamCandidateName3" class="form-control" name="teamCandidateName3" placeholder="Name" required="true"   onchange="fieldLengthValidator(this);" onkeydown="return enableUpdateEnter(event);">
                   </div>
                     
                     <div class=" col-sm-4"><br></br>
                   <input type="checkbox" name="isAttended3" id="isAttended3" checked="false" onkeydown="return enableUpdateEnter(event);"/>&nbsp;&nbsp;<label for="lname">Attended?</label>
                </div>
                </div>
                
            <hr  class="">
          <div class="row ">
           <div class="col-sm-12">
               <div class="alert alert-success" id="successmsg" style="display: none">
                     
  <strong>Success!</strong> Updated successfully.
</div><div class="alert alert-danger" id="errormsg" style="display: none">
      
  <strong>Error!</strong> Opps Please try again.
</div>
           </div>
            
       </div>
              <div class="row">
                                    <div class="col-sm-12"> 
                                        <div class="alert alert-danger" style="display:none" id="errorMsgDiv">
                                            <button type="button" class="close" onclick="closeErrorMsg()" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <strong><span id="resultMessage">Invalid details!!</span></strong> 
                                        </div>                        
                                    </div>
                                </div>
            <div class=" row ">
              
                    <div class="col-sm-4"> <!--<button class="btn btn-primary col-sm-12 noMarginBottom" type="button" data-dismiss="modal">Log In</button>-->
                    <span id="resultMessage"></span>
                    <!-- <button type="button" class="btn col-sm-12 btn-info" id="btnSubmit1" name="btnSubmit1" >Update</button>  -->
                      <button type="button" class="btn col-sm-12 btn-info" data-loading-text="<i class='fa fa-spinner fa-spin '></i> loading..." style="margin-left:5px;" name="btnUpdateSubmit" id="btnUpdateSubmit" onclick="upadteMeanHackAttendeeData();" tabindex="3">Update</button>
                      <!--  <input type="button" value="Update" tabindex="7" class="btn col-sm-4 btn-info" name="btnSubmit1" id="btnSubmit1" onclick="doSignatureLogin();"/>-->
                    </div> 
                  
               
             <div class="col-sm-4">
               <button type="button" class="btn btn-danger col-sm-12 btn-info"  name="btnUpdateCancel" id="btnUpdateCancel" onclick="cancelModal();" >Cancel</button>
             </div> 
            </div>
            </div>
        </div>
    </div>
</div>
        
        
        <!-- Modal box end -->
        
        
        
        
        
        
        
        
        
<script type="text/javascript" src="./js/ConfAjaxUtil.js"></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>



        <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.4/waypoints.min.js"></script>

        <script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>

        <script src="includes/js/headroom.min.js"></script>
        <script src="includes/js/jQuery.headroom.min.js"></script>
        <script src="includes/js/template.js"></script>
        <script type="text/javascript" src="includes/js/wow.js"></script>


        <script>new WOW().init();</script>
        <!--animate_end-->

        <script type="text/javascript" src="includes/js/clients.js"></script>



        <script>
            $(document).ready(function () {
                $('#reg_tab').DataTable();
              
            
                
                
                
                $('#areasOfInterest').selectivity({
                    items: ['IOT', 'Cloud', 'Analytics', 'Mobile', 'Security'],
                    multiple: true,
                    placeholder: 'Type your area of interest'
                });
            
                $('#areasOfInterest').change(function(e){
                    var myString = $('#areasOfInterest').selectivity('value');
                    //  alert(myString.length);
                    if(myString.length>4){
                        $('#areasOfInterest').selectivity('remove', myString[myString.length-1]);
                        alert("Selecting more than 4 not allowed");
                    }else {
                        // alert(myString.length-1);
                        document.getElementById("areasOfInterestHidden").value=myString;
                    }
                });
                
                

                $("#countdown").countdown({
                    date: "22 december 2016 12:00:00",
                    format: "on"
                },
                function () {
                    // callback function
                });
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
<?php include './footer.php'; ?>
    </body>
</html>