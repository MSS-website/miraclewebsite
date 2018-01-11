<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="description">
        <meta content="" name="author">
        <title>
            Bringing Digital Transformation to Atlanta | Miracle
        </title>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/font-awesome.min.css" rel="stylesheet">
        <link href="../css/prettyPhoto.css" rel="stylesheet">
        <link href="../css/animate.css" rel="stylesheet">
        <link href="../css/main.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link href="../css/default.css" rel="stylesheet" type="text/css">
        <link href="../css/component.css" rel="stylesheet" type="text/css">
        <script src="js/modernizr.custom.js"></script><!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="../images/favicon.ico" rel="shortcut icon">
        <link href="images/ico/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon-precomposed" sizes="144x144">
        <link href="images/ico/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon-precomposed" sizes="114x114">
        <link href="images/ico/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon-precomposed" sizes="72x72">
        <link href="images/ico/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon-precomposed">
           <script src="../js/Validation.js" type="text/javascript"></script><!--[if lt IE 9]>                                                          
                                                                          
                                                                          
        <?php 
       //  include '../config/general.php';
        require '../config/DbController.php';
        require '../config/general.php';
        
        
        $rscvpactualcode = RSCVP_CODE_ATLANTA;
         if(isset($_POST['btnSubmit'])){
            // echo 'hii';
try{
      $fullName1 = isset($_POST["fullName1"]) ? $_POST["fullName1"] : '';
      $organization1 = isset($_POST["organization1"]) ? $_POST["organization1"] : '';
      $phone1 = isset($_POST["phone1"]) ? $_POST["phone1"] : '';
      $email1 = isset($_POST["email1"]) ? $_POST["email1"] : '';
      
      $fullName2 = isset($_POST["fullName2"]) ? $_POST["fullName2"] : '';
      $organization2 = isset($_POST["organization2"]) ? $_POST["organization2"] : '';
      $phone2 = isset($_POST["phone2"]) ? $_POST["phone2"] : '';
      $email2 = isset($_POST["email2"]) ? $_POST["email2"] : '';
      $rscvpcode = isset($_POST["rsvp_code_atlanta"]) ? $_POST["rsvp_code_atlanta"] : '';
      $addflag = isset($_POST["addflag"]) ? $_POST["addflag"] : '';
      
      
      $conn = new DbController();
      $conn->connectToDatabase();
      $conn->selectDatabase();
      //$sql = "INSERT INTO tblAtlantaAttendies(FullName1,Organization1,Email1,Phone1,FullName2,Organization2,Email2,Phone2) VALUES('$fullName1','$organization1','$phone1','$email1','$fullName2','$organization2','$phone2','$email2')";
      $sql = "INSERT INTO tblrsvpevent(eventfor,p1name,p1org,p1phone,p1emailid,p2name,p2org,p2phone,p2emailid,rsvpcode) VALUES('atlanta','$fullName1','$organization1','$phone1','$email1','$fullName2','$organization2','$phone2','$email2','$rscvpcode')";
      //echo '$sql-->'.$sql;
        
      if(!mysql_query($sql)){
          echo 'Error';
      }else {
          $atlantaId =  mysql_insert_id();
          $eflag=EMAILFLAG;
                 if($eflag==1){
                 require '../classes/MailManager.php';
                $mailmanager = new MailManager();
                //$mailmanager->sendContactForm($rfname, $rlname, $remail, $rorganization, $rdesignation, $rphone, $rcity, $rcountry, $rdescription,$rzip,$rstate);
                $mailmanager->sendAtlantaAttendeeAcknowledgement($fullName1,$email1,$email2,$addflag,$fullName2);
                
                }
         // echo '$atlantaId-->'.$atlantaId;
          header('Location: ../index.php?atlantaId='.$atlantaId);
      }
    
}catch(Exception $exc){
       
      $exc->getMessage();
         $resultMessage= '<font color=red size=2px>'.$exc.'</font>';
               //  $conn->closeConnection(); // closing the connection
         mysql_close();
                   
}

         }
        ?>
    </head><!--/head-->
    <?php include '../header.php';?>
    <body>
        <section class="container" id="career">
            <br>
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-6 text-left">
                    <h1 class="heavy">
                      Bringing Digital Transformation to Atlanta
                        </h1>
                    </div>
            
                <div class="col-sm-4 text-right">
                    <ul class="breadcrumb pull-right">
                        <li>
                            <a href="../">Home</a>
                        </li>
                        <li>
                            <a href="../events/recent.php">Events</a>
                        </li>
                        <li class="active">Atlanta
                        </li>
                    </ul>
                </div>
                <div class="col-sm-1"></div>
            </div>
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-5">
                    
                        <p class="methodText">
                          We are proud to announce that as part of our expansion process, we are now announcing our latest location by putting Atlanta on the Miracle map. Atlanta has long been a hub for innovation, and Miracle has had roots with many South East/US customers over the past 20 years. Today's Enterprises are all buzzing with excitement as they look to transform themselves into a Digital Enterprise. CIOs are having to think differently to help make sure that their organizations can compete in a competitive market, where IT is becoming a crucial business differentiator. 
                        </p>
                       
                        <p class="methodText">
                        With this in mind, we are glad to announce our new <strong>"Center for Digital Transformation"</strong> at Atlanta, as we look to expand our outreach and provide our customers with innovative IT solutions and thought leadership. Our Atlanta unit will focus on helping customers in their Digital Transformation initiatives by analyzing their current IT ecosystem and providing insight into how they can transform themselves. Our team has and will be helping customers make the crucial decision between being the disruptor, (or) being disrupted and left behind. As we move forward the team will expand into forming our very own Retail-Centric Practice Team, a Quality Assurance Center of Excellence and a Mobility Zone for innovation. 
                            </p>
                        <p class="methodText">
                            Join us on <strong>October 16th, 2015(Friday)</strong> as we get together at our new location to celebrate our growth and see what new opportunities might lie for Team Miracle in the future. We would love to have you all at our "Grand Opening Ceremony" to make the event so much more special. 
                        </p>
              
                        <div class="container">
<!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <!-- Trigger the modal with a button -->
  

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    <form id="myForm" action="<?php $_PHP_SELF ?>" method="post">
        <input type="hidden" name="rscvpcode" id="rscvpcode" value="<?= $rscvpactualcode;?>"/>
<input type="hidden" name="addflag" id="addflag" />
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="border-bottom:1px solid #e5e5e5;"  >
        <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h1 class="heavy">RSVP for the Event</h1>
        </div>
        <div class="modal-body">
            <div class="row">
                 <div class="col-sm-12">
                     <label>Your Details</label>
                 </div>
            </div>
            
         
            
            
            
         <div class="row">
             
             <div class="col-sm-6">
                 
                <!-- <input type="text" name="txt" style="width: 220px;" rows="8" class="form-control"  placeholder="Name"/> -->
                 <input type="text" name="fullName1" id="fullName1" style="width: 220px;" rows="8" class="form-control"  placeholder="Name" onchange="fieldLengthAtlantaValidator(this);" tabindex="1" required="true"/>
                
                <!-- <input type="text" name="txt" style="width: 220px;" class="form-control"  placeholder="Organisation"/> -->
                <br><input type="text" name="organization1" id="organization1" style="width: 220px;" class="form-control"  placeholder="Organisation" onchange="fieldLengthAtlantaValidator(this);" tabindex="3" required="true"/>
             </div> 
             
             <div class="col-sm-6">
                 <!-- <input type="text" name="txt" style="width: 220px;" class="form-control"  placeholder="Phone"/> -->
                 <input type="text" name="phone1" id="phone1" style="width: 220px;" class="form-control"  placeholder="Phone" onchange="return formatPhone(this);" onblur="return validatenumber(this)" tabindex="2" required="true"/>
             <br>
             <!-- <input type="text" name="txt" style="width: 220px;" class="form-control"  placeholder="EmailID"/> -->
             <input type="text" name="email1" id="email1" style="width: 220px;" class="form-control"  placeholder="Email" onchange="return checkEmail(this);fieldLengthAtlantaValidator(this);" tabindex="4" required="true"/>
             </div>
             
             
         </div>
            <div class="row" id="alongLabelDiv" style="display: none">
                 <div class="col-sm-12">
                      <label>and your +1</label>
                 </div>
            </div>
           
            <div class="row" id="alongDiv" style="display: none">
         
        
             <div class="col-sm-6">
                   
                 <!-- <input type="text" name="txt" style="width: 220px;" rows="8" class="form-control"  placeholder="Name"/> -->
                    <input type="text" name="fullName2" id="fullName2" style="width: 220px;" rows="8" class="form-control"  placeholder="Name" onchange="fieldLengthAtlantaValidator(this);" tabindex="5"/>
                <br>
                <!-- <input type="text" name="txt" style="width: 220px;" class="form-control"  placeholder="Organisation"/> -->
                <input type="text" name="organization2" id="organization2" style="width: 220px;" class="form-control"  placeholder="Organisation" onchange="fieldLengthAtlantaValidator(this);" tabindex="7"/>
             </div>
             
             <div class="col-sm-6">
                <!--  <input type="text" name="txt" style="width: 220px;" class="form-control"  placeholder="Phone"/> -->
                 <input type="text" name="phone2" id="phone2" style="width: 220px;" class="form-control"  placeholder="Phone" onchange="return formatPhone(this);" onblur="return validatenumber(this)" tabindex="6"/>
             <br>
            <!-- <input type="text" name="txt" style="width: 220px;" class="form-control"  placeholder="EmailID"/> -->
              <input type="text" name="email2" id="email2" style="width: 220px;" class="form-control"  placeholder="Email" onchange="return checkEmail(this);fieldLengthAtlantaValidator(this);" tabindex="8"/>
             </div>
             
             
         </div>
            
         <div class="row">
             <div class="col-sm-12 ">
                 <div id="yesDiv">
                     <h7 class="heavy">Are you planning on bringing someone along with you?</h7> <u>
                  <a href="#" onclick="showAlong();">YES</a>
              </u>
                 </div> 
             
    </div>
</div>
<div class="row">
    <br>
    <div class="col-sm-4">
        
      <span>Enter RSVP code </span>  
    </div>
    <div class="col-sm-2" >
     <!-- <input type="text" name="txt" style="width: 180px; important ;" class="form-control"  placeholder="RSVP Code"/>    -->
          <input type="text" class="form-control"  placeholder="RSVP Code" name="rsvp_code_atlanta" id="rsvp_code_atlanta" required="true" onchange="checkCode();" tabindex="9"/>   
    </div>
    <div class="col-sm-1"></div>
     <div class="col-sm-5"><span id="codeMsg"></span></div>
</div>
        </div>
        <div class="modal-footer">
            <div class="row">
                <div class="col-sm-8"></div>
                <div class="col-sm-3">
                    
                    <button type="submit" tabindex="10" class="btn btn-primary col-sm-12" name="btnSubmit" id="btnSubmit" >
        Submit
      </button>
                </div>
                <div class="col-sm-1"></div>
                
            </div>
      <!-- <a href="../index-tq.php">   <button type="button" class="btn btn-primary" style="margin-left: 420px;" >Submit</button></a> -->
        
        <br><br>
        </div>
      </div>
    </form>
    </div>
  </div>
  
</div>

                       
                       
                <br></br>
                </div>
        <div class="col-sm-5">
                 
          <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class="embed-container"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3305.275042210797!2d-84.16760140000001!3d34.062463!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88f5992100c3e58d%3A0x66ce19eb7db71c3a!2s6465+E+Johns+Crossing+%23315%2C+Duluth%2C+GA+30097%2C+USA!5e0!3m2!1sen!2sin!4v1443795018411" width="600" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe></div>
          <br><strong>Venue </strong>: 
          6465 East Johns Crossing, Suit 315 Johns Creek GA 30097 <br>
          <br>
           <a href="#"><button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary btn-lg">RSVP for the Event</button></a></br>
           
                </div>        
          
              
                
                  <div class="col-sm-1"></div>
            </div>
        </section><!-- /Career -->
        <script type="text/javascript">
    
function showAlong() {
    
    document.getElementById("alongLabelDiv").style.display='block';
    document.getElementById("alongDiv").style.display='block';
    document.getElementById("yesDiv").style.display='none';
         document.getElementById("addflag").value = "1";
    
}
function checkCode() {
    var rsvp_code_atlanta =  document.getElementById("rsvp_code_atlanta").value;
    var rscvpcode =  document.getElementById("rscvpcode").value;
    document.getElementById("codeMsg").innerHTML ='';
    if(rscvpcode != rsvp_code_atlanta){
        document.getElementById("rsvp_code_atlanta").value = "";
         document.getElementById("codeMsg").innerHTML = '<font color=red size=2px>*Please enter valid RSVP code.</font>';
        
    }
    
}

    </script>
        <?php include '../footer.php';?>
    </body>
</html>