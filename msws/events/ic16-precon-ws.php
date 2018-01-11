<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="description">
        <meta content="" name="author">
        <title>
            Pre-Conference Workshop IC '16 | Miracle
        </title>
      <?php include '../config/Locations.php';?>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/font-awesome.min.css" rel="stylesheet">
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
        <script type="text/javascript" src="../js/Validation.js">
            
    </script>
     <script src="../js/custom.js">
    </script>
        <?php
 include '../config/general.php';
      $resultMessage = "";
if(isset($_POST['btnSubmit'])){
require '../config/DbController.php';
$conn = new DbController();
try{
    $conn->connectToDatabase();
if(! get_magic_quotes_gpc() )
{$rfname = addslashes ($_POST['firstname']);
    $rlname = addslashes ($_POST['lastname']);
    $rorganization = addslashes ($_POST['organization']);
    $rcity = addslashes ($_POST['city']);
    $rdesignation = addslashes ($_POST['designation']);
    $remail = addslashes ($_POST['email']);
    $rphone = addslashes ($_POST['phone']);
     $rstate = addslashes ($_POST['state']);
}
else
{
    $rfname = $_POST['firstname'];
    $rlname = $_POST['lastname'];
    $rorganization = $_POST['organization'];
    $rcity = $_POST['city'];
    $rdesignation = $_POST['designation'];
    $remail = $_POST['email'];
    $rphone = $_POST['phone'];
    $rstate = addslashes ($_POST['state']);
    
}
$rflag = 1;
$conn->selectDatabase();
$sql = "insert into tblPreIcWs(Fname,Lname,Organization,Designation,WorkPhone,City,".
        "Email,State) values('$rfname','$rlname','$rorganization','$rdesignation','$rphone','$rcity'".
        ",'$remail','$rstate')";
            if(mysql_query($sql)){
                echo 'I If';
                $icPreWsRegId = mysql_insert_id();
                echo 'after I';
                 header('Location: interconnect-2016.php?icPreWsRegId='.$icPreWsRegId);
            }else {
                echo 'I else';
            }
            
}
  catch(Exception $exc){
       // Fb::log("log message");
         //$resultMessage= $exc->getTraceAsString();
      $exc->getMessage();
         //$resultMessage= '<font color=red size=2px>'.$exc.'</font>';
                  $resultMessage= "<font color=red size=2px>Please try again later.</font>";
                  //  $conn->closeConnection(); // closing the connection
                   
    }
}
?>
    </head><!--/head-->
    <?php include '../header.php';?>
          
            <script>
                $(document).ready(function() {
  	$('#rootwizard').bootstrapWizard({'tabClass': 'nav nav-tabs'});
});
            </script>
             <style>
    .hd
    {
      font-size: 40px !important;
      color: #FFF ; 
    }
    .hd1
    {
      font-size: 40px ;
       color: #FFF ; 
       margin-top:35px ;
       margin-bottom:20px;
    }
    b,strong
    {
      font-weight:600 !important;
      
    }
    </style>

        <body>
        
        <section class="container" id="about-us">
            <br>
       
            <div class="row">
                <div class="col-sm-12 text-left">
                    <h1 class="heavy noMarginBottom">
                        Free Pre-Conference Hands-On Workshop @ Interconnect 2016!
                    </h1>
                    <div class="row">
                            <div class="col-sm-6 noMargin">
                                <hr>
                            </div>
                        </div>
                    <h6 class="heavy">
                        8 AM Onwards on February 21st, 2016 at Mandalay Bay Hotel and Resort/Las Vegas
                    </h6>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-9">
                     <p class="methodText">
                         In a consumer-centric world todayâ€™s Enterprises have to adapt to a faster paced IT model. Technologies like <strong>Node.js</strong> and <strong>REST APIs</strong>, which address the need for agility, scalability and flexibility, are taking front-stage. Digital is here to stay and those who donâ€™t adapt are bound to fall behind! In this workshop, you will be taken through 4 labs over 6 hours in a completely guided hands-on approach with technologies like, <strong>JavaScript/JSON, Node.js, Loopback/Express, REST APIs, YAML/RAML/Swagger, Hybrid Mobile Apps, Dojo, IBM Bluemix and the Internet of Things!</strong>(Scroll Down to check the full agenda and register!)
                        <br><br>Join us on <strong>February 21st, 2016</strong> from <strong>8 AM PST</strong> onwards for a <strong>Full-Day Hands-On Workshop</strong> covering the latest technologies in the Digital Transformation Journey. After the workshop join us to continue the learning at <a href="https://www.eventbrite.com/e/open-technology-summit-at-ibm-interconnect-2016-ibmots-tickets-20773679635" class="linkText heavy" style="color:red" target="new">Open Technology Summit</a>  at the Mandalay Bay from 4 PM PST onwards!
                        <br>
                     </p>
                </div>
                <div class="col-sm-3 center">
                    <center><img src="../images/ic-workshop/mc-free.png" class="img-responsive" height="60%" alt="Cinque Terre" href=""></center>
                    
                    <p class="heavy">Get a free Micro-Controller and Sensor Kit for participating in the workshop!</p>
                </div>
            </div>
            <hr class="noMarginTop">
            <div class="row">
                <div class="col-sm-12">
                    <h5 class="heavy noMarginBottom">Get Registered Today!</h5>
                    <div class="row noMarginBottom">
                        <div class="col-sm-2 noMargin">
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
              <?php echo $resultMessage; ?>
           <form id="myForm" action="<?php $_PHP_SELF ?>" method="post">
            <div class="row">
                <div class="col-sm-3">
                    <input type="text " tabindex="1" class="form-control" placeholder="First Name" id="firstname" name="firstname" onchange="fieldLengthValidator(this);" required="true"><br>
                    <input type="text " tabindex="5" class="form-control" placeholder="Email" id="email" name="email" onchange="return checkEmail(this);fieldLengthValidator(this);" required="true">
                   
                </div>
                <div class="col-sm-3">
                      <input type="text " tabindex="2" class="form-control" placeholder="Last Name" id="lastname" name="lastname" onchange="fieldLengthValidator(this);" required="true"><br>
                      <input type="text " tabindex="6" class="form-control" placeholder="Phone" id="phone" name="phone" onchange="return formatPhone(this);" onblur="return validatenumber(this)" required="true">
                </div>
                <div class="col-sm-3">
                     <input type="text " tabindex="3" class="form-control" placeholder="Organization" id="organization" name="organization" onchange="fieldLengthValidator(this);" required="true"><br>
                     <input type="text " tabindex="7" class="form-control" placeholder="City" id="city" name="city" onchange="fieldLengthValidator(this);" required="true">
                     
                </div>
                
                <div class="col-sm-3">
                    <input type="text " tabindex="4" class="form-control" placeholder="Designation" id="designation" name="designation" onchange="fieldLengthValidator(this);" required="true"><br> 
                    <input type="text " tabindex="8" class="form-control" placeholder="State" name="state" id="state" onchange="fieldLengthValidator(this);" required="true">
                     
                </div>
            </div>
               
            <div class="row">
                <div class="col-sm-12">
                     <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-body">
              <strong>
                <div id="showAlertText">
                </div>
              </strong>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">
                Close
              </button>
            </div><!-- Modal Footer -->
          </div><!-- Modal Content -->
        </div><!-- Modal Dialog -->
      </div><!-- Modal Container-->
                    <button class="btn btn-primary btn-md col-sm-12" type="submit" name="btnSubmit" id="btnSubmit">Register Today and book your slot for the experience of a lifetime :)</button>    
                </div>
            </div>
                 </form>
            <br>
             <div class="row">
                 <div class="col-sm-12">
                     <ul class="nav nav-tabs">
                        <li class="active">
                            <a data-toggle="tab" href="#overview">Overview</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#agenda">Agenda</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#trainers">Trainers</a>
                        </li>
                    </ul><!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="overview">
                            <p class="methodText">
                                <br>
                                <p class="methodText"><strong>Wow!</strong> We have got loads of fun for you at our <strong>â€œGo Hands-On with Digital Pre-Conference Workshopâ€�</strong>. From Node.js to Bluemix to IoT, we have planned a workshop that you will remember for a lifetime. Forget the boring theoretical sessions, and dive into code hands-on in this live-guided workshop!</p>
                                <p class="methodText">Our team will be there for you throughout the day, to help you become a master of Digital Technologies, and will help you understand the latest technology trends that are changing the face of todayâ€™s organizations.</p><br>
                                <div class="row">
                                <div class="col-sm-3 center"> 
                                    <center><img src="../images/ic-workshop/6hours.png" class="img-responsive" height="60%" alt="Cinque Terre" href=""></center>
                                    <h4 class="heavy noMarginBottom">6 Hours of Coding</h4>
                                </div>
                                <div class="col-sm-3 center"> 
                                    <center><img src="../images/ic-workshop/guided.png" class="img-responsive" height="60%" alt="Cinque Terre"></center>
                                    <h4 class="heavy noMarginBottom">Guided Labs</h4>
                                </div>
                                <div class="col-sm-3 center"> 
                                    <center><img src="../images/ic-workshop/digital.png" class="img-responsive" height="60%" alt="Cinque Terre"></center>
                                    <h4 class="heavy noMarginBottom">Focus on Digital</h4>
                                </div>
                                <div class="col-sm-3 center"> 
                                    <center><img src="../images/ic-workshop/innovation.png" class="img-responsive" height="60%" alt="Cinque Terre"></center>
                                    <h4 class="heavy noMarginBottom">Innovaaaation!</h4>
                                </div>
                                </div>
                                <hr>
                                Also come by our <strong>booth(#402)</strong> during the <strong>Solution EXPO</strong> between <strong>February 22nd and 25th, 2016</strong> and meet-and-greet with our technical experts to learn about IBM, Digital Transformation and the way forward! <a href="http://www.miraclesoft.com/interconnect" class="linkText heavy" target="new">Learn more right here :)</a> 
                                <br><br>
                            </p>
                        </div>
                        <div class="tab-pane" id="agenda">
                            <p class="methodText">
                                <br>
                                <strong>8 trainers, 6 hours and 4 labs of technology and fun await for you in Vegas! Absolutely ZERO! boring lectures :)</strong> We have fine-tuned the workshop's agenda to ensure that you get the best value out of joining us. Consisting of 4 labs, our goal will be to take you through Enterprise Use Cases for Digital Transformation, while showcasing some of the latest technologies that are evolving in the market today.     
                            </p>
                            <hr>
                            <div class="row">
                                <div class="col-sm-6">
                                    <h6 class="heavy">Lab #1 | The IoT Developer Lab</h6>
                                    <hr>
                                    <p class="greyText heavy">IBM Bluemix, NodeRed, JavaScript, and Device Configuration</p>
                                    <p class="methodText">We will kick off the lab by having you configure and setup an <strong>IoT Gateway</strong> and <strong>Sensor</strong> to collect and broadcast the collected sensor data to the cloud. Once you have done that the next step will be to take this data into the <strong>Cloud(Bluemix)</strong>, and then orchestrate what you want to do with this data using <strong>NodeRed!</strong></p>
                                </div>
                                <div class="col-sm-6">
                                    <h6 class="heavy">Lab #2 | The API Developer Lab</h6>
                                    <hr>
                                    <p class="greyText heavy">StrongLoop, JavaScript/JSON, Loopback/Express and MongoDB</p>
                                    <p class="methodText">Once we have the Device Data in the Cloud, the next step will be to make sure that we can expose this data to developers via a REST API. For this we will use <strong>IBM's StrongLoop</strong> to compose a REST API that performs <strong>CRUD operations</strong> against a <strong>NoSQL Database</strong> in the Cloud. You will be configuring StrongLoop on your machine and composing APIs within minutes!</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <h6 class="heavy">Lab #3 | The API Manager Lab</h6>
                                    <hr>
                                    <p class="greyText heavy">IBM API Management, REST APIs and Service Governance</p>
                                    <p class="methodText"><strong>So, who gets to use your API and how many times are they allowed to use it?</strong> Are they charged for using the IoT API? In our 3rd lab of the day you will be able to take a sample SOAP Service and expose it as a REST API with control mechanism such as <strong>Client Key Security</strong>, <strong>Throtlling</strong> and <strong>Data Transformation</strong> applied to our REST API.</p>
                                </div>
                                <div class="col-sm-6">
                                    <h6 class="heavy">Lab #4 | The Mobile Developer Lab</h6>
                                    <hr>
                                    <p class="greyText heavy">IBM Mobile First, HTTP Adapters and IBM API M Developer Portal</p>
                                    <p class="methodText">In today's world Enterprises need to be able to make rapid changes for their customers. And what better way to do this than to build your Mobile App using REST APIs! In this final lab we will be showing you how you can get access to REST APIs from <strong>Developer Portals</strong> and consume them into <strong>IBM MobileFirst</strong> with the help of <strong>HTTP adapters</strong> and <strong>DOJO UI Framework</strong>.</p>
                                </div>
                            </div>
                            <hr class="noMarginTop">
                            <p class="methodText">
                                Also come by our <strong>booth(#402)</strong> during the <strong>Solution EXPO</strong> between <strong>February 22nd and 25th, 2016</strong> and meet-and-greet with our technical experts to learn about IBM, Digital Transformation and the way forward! <a href="http://www.miraclesoft.com/interconnect" class="linkText heavy" target="new">Learn more right here :)</a> 
                                <br><br>
                            </p>
                        </div>
                        <div class="tab-pane" id="trainers">
                            <br>
                            <div class="row">
                                <div class="col-sm-12">
                                    We will have our best tech-geeks available for you during the labs, with both our <strong>Technical Experts</strong> and <strong>Innovation Labs</strong> Teams being present at the full-day workshop! Come and interact with them, and feel free to pick their brains with ideas, challenges (or) initiatives that you are thinking about. 
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-3 center"> 
                                    <center><img src="../images/ic-workshop/trainer-6.png" class="img-responsive" height="60%" alt="Cinque Terre" href=""></center>
                                    <h4 class="heavy noMarginBottom">Chanakya Lokam</h4>
                                    <p class="noMarginTop">Director Innovation</p>
                                </div>
                                <div class="col-sm-3 center"> 
                                    <center><img src="../images/ic-workshop/trainer-2.png" class="img-responsive" height="60%" alt="Cinque Terre" href=""></center>
                                    <h4 class="heavy noMarginBottom">Bharathi Ramachandran</h4>
                                    <p class="noMarginTop">VP - Product Engineering</p>
                                </div>
                                <div class="col-sm-3 center"> 
                                    <center><img src="../images/ic-workshop/trainer-4.png" class="img-responsive" height="60%" alt="Cinque Terre" href=""></center>
                                    <h4 class="heavy noMarginBottom">Santosh Soni</h4>
                                    <p class="noMarginTop">SVP - Software Services</p>
                                </div>
                                <div class="col-sm-3 center"> 
                                    <center><img src="../images/ic-workshop/trainer-3.png" class="img-responsive" height="60%" alt="Cinque Terre" href=""></center>
                                    <h4 class="heavy noMarginBottom">Hanuman Veluri</h4>
                                    <p class="noMarginTop">Director - EDGE Integration</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3 center"> 
                                    <center><img src="../images/ic-workshop/trainer-5.png" class="img-responsive" height="60%" alt="Cinque Terre" href=""></center>
                                    <h4 class="heavy noMarginBottom">Kunal Mittal</h4>
                                    <p class="noMarginTop">Practice Manager - Integration</p>
                                </div>
                                <div class="col-sm-3 center"> 
                                    <center><img src="../images/ic-workshop/trainer-1.png" class="img-responsive" height="60%" alt="Cinque Terre" href=""></center>
                                    <h4 class="heavy noMarginBottom">Aditya Venkat Chinni</h4>
                                    <p class="noMarginTop">Lead - Miracle Innovation Labs</p>
                                </div>
                                <div class="col-sm-3 center"> 
                                    <center><img src="../images/ic-workshop/trainer-7.png" class="img-responsive" height="60%" alt="Cinque Terre" href=""></center>
                                    <h4 class="heavy noMarginBottom">Jyotsna Duvvuri</h4>
                                    <p class="noMarginTop">Practice Manager - ALM/DevOps</p>
                                </div>
                                <div class="col-sm-3 center"> 
                                    <center><img src="../images/ic-workshop/trainer-8.png" class="img-responsive" height="60%" alt="Cinque Terre" href=""></center>
                                    <h4 class="heavy noMarginBottom">Snehansu Bhuyan</h4>
                                    <p class="noMarginTop">Practice Manager - EDGEi/APIM</p>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-12">
                                    <p class="methodText">
                                        Also come by our <strong>booth(#402)</strong> during the <strong>Solution EXPO</strong> between <strong>February 22nd and 25th, 2016</strong> and meet-and-greet with our technical experts to learn about IBM, Digital Transformation and the way forward! <a href="http://www.miraclesoft.com/interconnect" class="linkText heavy" target="new">Learn more right here :)</a> 
                                        <br><br>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--/#about-us-->
        <?php include '../footer.php';?>
    </body>
</html>