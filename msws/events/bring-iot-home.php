<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="description">
        <meta content="" name="author">
        <title>
            Bring IOT Home! | Miracle
        </title>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/font-awesome.min.css" rel="stylesheet">
        <link href="../css/main.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link href="../css/default.css" rel="stylesheet" type="text/css">
        <link href="../css/component.css" rel="stylesheet" type="text/css">
         <script src="../js/Validation.js" type="text/javascript"></script><!--[if lt IE 9]>-->
        <script src="js/modernizr.custom.js"></script><!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="../images/favicon.ico" rel="shortcut icon">
    </head><!--/head-->
    <?php
        include '../config/Locations.php';
        include '../config/general.php';
        require '../config/DbController.php';

        $conn = new DbController();
        if (isset($_POST['btnSubmit'])) {
            // echo 'hii';
            try {

                $conn->connectToDatabase();

                if (!get_magic_quotes_gpc()) {
                    //  $rrefId = addslashes ($_POST['refId']);
                    //   $robjectId = addslashes ($_POST['objectId']);
                    $rfirstName = addslashes($_POST['firstName']);
                    $rlastName = addslashes($_POST['lastName']);
                    $rorganization = addslashes($_POST['organization']);
                    $rdesignation = addslashes($_POST['designation']);
                    $remail = addslashes($_POST['email']);
                    $rphone = addslashes($_POST['phone']);
                    $rzipCode = addslashes($_POST['zip']);
                    $ryourCity = addslashes($_POST['cCity']);
                    $rdescription = addslashes($_POST['description']);
                } else {
                    //  $rrefId = $_POST['refId'];
                    //$robjectId = $_POST['objectId'];
                    $rfirstName = $_POST['firstName'];
                    $rlastName = $_POST['lastName'];
                    $rorganization = $_POST['organization'];
                    $rdesignation = $_POST['designation'];
                    $remail = $_POST['email'];
                    $rphone = $_POST['phone'];
                    $rzipCode = $_POST['zip'];
                    $ryourCity = $_POST['cCity'];
                    $rdescription = $_POST['description'];
                }



                $conn->selectDatabase();
                $sql = "INSERT INTO tblIot (FirstName,LastName,EmailId,Phone,Organization,City,Designation,ZipCode,Description)   " .
                        " VALUES('$rfirstName','$rlastName','$remail','$rphone','$rorganization','$ryourCity'," .
                        "'$rdesignation','$rzipCode','$rdescription')";

                //  echo $sql;
                /*  $selectQuery = "select * from tblEventAttendies where email_id='$remail' AND phone_no='".$rphone."'";
                  //echo $selectQuery;
                  $selectresponce = mysql_query($selectQuery);
                  if(mysql_num_rows($selectresponce)>0){

                  $resultMessage = '<font color=red size=2px>You are already registered ..</font>';
                  mysql_close();
                  header('Location: ../back-end-error.php?resultMessage='.$resultMessage);
                  // $conn->closeConnection(); // closing the connection
                  }else{ */

                if (!mysql_query($sql)) {
                    $resultMessage = "<font color=red size=2px>Data insertion failed..Please try again later\n</font>";
                    // $conn->closeConnection(); // closing the connection
                    mysql_close();
                    header('Location: ../back-end-error.php?resultMessage=' . $resultMessage);
                } else {
                    $iotId = mysql_insert_id();
                    mysql_close();
                    // $resultMessage = 'Thank you for your patience in filling in the details.Please check your mail for download link.';
                    header('Location: ../index.php?iotId='.$iotId);
                    // header('Location: ../library/index.php?refId='.$frmRefId); 
                }

//}
            } catch (Exception $exc) {

                $exc->getMessage();
                $resultMessage = '<font color=red size=2px>' . $exc . '</font>';
                //  $conn->closeConnection(); // closing the connection
                mysql_close();
                header('Location: ../back-end-error.php?resultMessage=' . $resultMessage);
            }
        }
        ?>
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
        <br>
        <br>
        <br>
            <div class="row">
                <div class="col-sm-12 text-left">
                    <h1 class="heavy noMarginBottom">
                        Bring IOT to your City :)
                    </h1>
                    <div class="row">
                            <div class="col-sm-6 noMargin">
                                <hr>
                            </div>
                        </div>
                    <h6 class="heavy">
                        Nominate your city and we will come within 45 days!
                    </h6>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-9">
                     <p class="methodText">50 Billion Devices by 2020! Smart Homes, Intelligent Stores and Healthier Machines are entering our lives today. <strong>Have you ever wanted to be a IoT Developer?</strong> If you have well you and your city have a great chance of becoming one right away!At Miracle we are picking some of the most tech-savy towns in the US and giving them a chance to play around with some of the latest technologies in the Digital Realm. <strong>Nominate your city today, and if we have more than 15 interested people we will send our Labs Team to conduct a 1-day free(1500$ worth) hands-on workshop.</strong>
                        <br><br>From IBM's Bluemix Platform to NodeRed, we will help you to understand and create Smart IoT Applications within hours. Scroll down to read more about what we will cover during the workshops, and then nominate your city to win a chance to have our next workshop come to you :)
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
                    <h5 class="heavy noMarginBottom">Nominate Your City Today!</h5>
                    <div class="row noMarginBottom">
                        <div class="col-sm-2 noMargin">
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
            <form method="post" action="<?php $_PHP_SELF ?>" id="myForm" >
                <div class="row">
                    <div class="col-sm-3">
                        <input class="form-control" placeholder="First Name*" required="required" type="text" id="firstName" name="firstName" tabindex="1" onchange="fieldLengthValidator(this);"><br>
                        <input class="form-control" placeholder="Email*" required="required" type="text" id="email" name="email" tabindex="5" onchange="return checkEmail(this);fieldLengthValidator(this);">
                    </div>
                    <div class="col-sm-3">
                        <input class="form-control" placeholder="Last Name*" required="required" type="text" name="lastName" id="lastName" tabindex="2" onchange="fieldLengthValidator(this);"><br>
                        <input class="form-control" placeholder="Work Phone*" required="required" type="text" id="phone" name="phone" tabindex="6" onchange="return formatPhone(this);" onblur="return validatenumber(this)">
                    </div>
                    <div class="col-sm-3">
                        <input class="form-control" placeholder="Organization*" required="required" type="text" name="organization" id="organization" tabindex="3" onchange="fieldLengthValidator(this);"><br>
                        <input class="form-control" placeholder="Your City*" required="required" type="text" name="cCity" id="cCity" tabindex="7" onchange="fieldLengthValidator(this);">
                    </div>
                    <div class="col-sm-3">
                        <input class="form-control" placeholder="Designation*" required="required" type="text" name="designation" id="designation" tabindex="4" onchange="fieldLengthValidator(this);"><br>
                        <input class="form-control" placeholder="Zip Code*" required="required" type="text" name="zip" id="zip" tabindex="8" onchange="fieldLengthValidator(this);">
                    </div>
                </div>
            

                <div class="row">
                   
                    <div class="col-sm-12">
                        
                        <input class="form-control" placeholder="Convince Us! Why should we come to your city? Do you have a team of IoT Enthusiasts that want to attend in your city? Let us know and we will come by for sure :)" required="required" type="text" name="description" id="description" tabindex="9" onchange="fieldLengthValidator(this);">
                    </div>
                </div>
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"><!-- Modal for showing alerts -->
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <strong><div id="showAlertText"></div></strong>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                    
                </div><!-- Modal ends here -->
                <div class="row">
                    <div class="col-sm-12">
                        <button class="btn btn-primary col-sm-12" id="btnSubmit" name="btnSubmit" tabindex="10" type="submit" >I'm Ready! Nominate My City :)</button>
                        <!--<button class="btn btn-primary btn-md col-sm-12" type="button">I'm Ready! Nominate My City :) </button>   --> 
                    </div>
                </div>
            </form>
            <br>
            <div class="row noMarginBottom">
                <div class="col-sm-12">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <td><strong>#</strong></td>
                                <td><strong>Camp Name</strong></td>
                                <td><strong>Date</strong></td>
                                <td><strong>Start Time</strong></td>
                                <td><strong>Location</strong></td>
                                <td><strong>Register</strong></td>
                            </tr>
                        </thead>
                        <tbody>
                           <!-- <tr>
                                <td>1</td>
                                <td><strong><a href="bring-iot-home-dallas.php">Dallas IOT Camp - 2016</a></strong></td>
                                <td>May 20th 2016</td>
                                <td>8:30 AM CST Onwards</td>
                                <td><strong>IBM Innovation Center</strong></td>
                                <td> <a href="bring-iot-home-dallas.php"><button type="button" class="btn btn-primary "  data-dismiss="modal">Register!</button> </a></td>
                            </tr> -->
							
                             <tr>
                                <td>1</td>
                                <td><strong><a href="bring-iot-home-minneapolis.php">Minneapolis IOT Camp - 2016 </a></strong></td>
                                <td> June 23rd, 2016</td>
                                <td>8:30 AM CST Onwards</td>
                                <td><strong><!-- <a  href="bring-iot-home-minneapolis.php"  target="new">-->Euler Training Center<!--</a>--></strong></td>
                                <td><a href="bring-iot-home-minneapolis.php"><button type="button" class="btn btn-primary "  href="bring-iot-home-minneapolis.php"  data-dismiss="modal">Register!</button></a></td>
                            </tr>
							
                        </tbody>
                    </table>
                </div>
            </div>
            <hr class="noMarginBottom">
            <div class="row noMarginTop">
                <div class="col-sm-12">
                    <p class="methodText">
                                <br>
                                <p class="methodText"><strong>Wow!</strong> We have got loads of fun for you at our <strong>"Bring IoT Home Workshops"</strong>. From Node.js to Bluemix to IoT, we have planned workshops that you will remember for a lifetime. Forget the boring theoretical sessions, and dive into code hands-on in this live-guided workshop series! You just have to nominate your city and we will make sure that we are there to help you out :)</p>
                                <p class="methodText">Our team will be there for you throughout the day, to help you become a master of Digital Technologies, and will help you understand the latest technology trends that are changing the face of today’s organizations.</p><br>
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
            </div>
            <br>
        </section><!--/#about-us-->
        <?php include '../footer.php';?>
    </body>
</html>
