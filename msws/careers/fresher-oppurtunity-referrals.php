 <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="description">
        <meta content="" name="author">
        <title>
            Freshers | Miracle
        </title>
         <?php include '../config/Locations.php';?>
       
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/font-awesome.min.css" rel="stylesheet">
        <link href="../css/main.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link href="../css/default.css" rel="stylesheet" type="text/css">
        <link href="../css/component.css" rel="stylesheet" type="text/css">
        <script src="../js/modernizr.custom.js"></script><!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
                                                        
                                                         
    <![endif]-->
       
         
            <script>
            function SetName(data) {
                if (window.opener != null && !window.opener.closed) {
                    var txtName = window.opener.document.getElementById("jobTitle");
                    txtName.value = data;
                }
                window.close();
            }
        </script>
            
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?= AMAZON_URL ?>/images/favicon.ico" rel="shortcut icon">
    </head><!--/head-->
    <?php //include '../header.php'; ?>
    <?php 
     //header('Location: ../contact/employee-referrals.php'); 
    
    
//    session_start();
//if(isset($_SESSION['ses_Validate']) && $_SESSION['ses_Validate'] != "")
//    {
//    //$rcreatedBy = $_SESSION['ses_EmpLoginId'];
//    
//    //echo 'hiii123';
//    //session_unset();
//   // session_destroy();
//    }else {
//          header('Location: ../contact/employee-referrals.php'); 
//    }
    
    //include '../header.php';
    
    ?>
    <body>
        <section class="container">
           
            <div class="row">
                <div class="col-sm-7 text-left">
                    <h1 class="heavy">Fresher Opportunities</h1>
                </div>
<!--                <div class="col-sm-5 text-right">
                    <ul class="breadcrumb pull-right">
                        <li>
                            <a href="../">Home</a>
                        </li>
                        <li>
                            <a href="index.php">Careers</a>
                        </li>
                        <li class="active">Freshers
                        </li>
                    </ul>
                </div>-->
            </div>
           <hr>
                <div class="row">
                    <!-- Article Listing starts here -->
                   
                    <div class="col-sm-4">
                         <form action="../contact/employee-referral-form.php" name="empfresherrefferal" method="post"> 
                         <input type="hidden" name="positionType" value="Freshers"/>
                        
                        <p class="heavy greyText noMargin">
                            Development
                        </p>
                        <h5 class="heavy noMargin">Jr. Software Engineer</h5>
                        <div class="row">
                            <div class="col-sm-6 noMargin">
                                <hr>
                            </div>
                        </div>
                        <p class="noMargin">
                        <strong>B.Tech(CSE/IT/ECE) or MCA 14/15 passouts with above 70% aggregate</strong>
                        | Strong communication skills, Good attitude and personality, Command on Java (or) C programming languages, and Enthusiasm to work hard
                        </p>
                        <div class="row">
                            <div class="col-sm-6 noMargin">
                                <hr>
                            </div>
                        </div>
                        <p class="noMargin">
                            <a href="../locations/miracle-city.php" class="linkText"> Miracle City(IND)</a> | <a href="../locations/miracle-heights.php" class="linkText">Miracle Heights(IND)</a>
                        </p><br>
                        <button type="button" tabindex="14" class="btn btn-primary " name="btnSubmit" id="btnSubmit" onclick="SetName('Jr. Software Enginee');">Select Position</button>
                         </form>
                    </div>
                    <div class="col-sm-4">
                         <form action="../contact/employee-referral-form.php" method="post"> 
                             <input type="hidden" name="positionType" value="Freshers"/>
                        <p class="heavy greyText noMargin">
                            Operations
                        </p>
                        <h5 class="heavy noMargin">Jr. Systems Engineer</h5>
                        <div class="row">
                            <div class="col-sm-6 noMargin">
                                <hr>
                            </div>
                        </div>
                        <p class="noMargin">
                        <strong>Any Degree with preferable Computer Science Background</strong>
                        | Good communication skills, Experience with Networking and Servers is added advantage, Hard working and ability to learn new things and flexibility for night shifts
                        </p>
                        <div class="row">
                            <div class="col-sm-6 noMargin">
                                <hr>
                            </div>
                        </div>
                        <p class="noMargin">
                            <a href="../locations/miracle-city.php" class="linkText"> Miracle City(IND)</a>
                        </p><br>
                         <button type="button" tabindex="14" class="btn btn-primary " name="btnSubmit" id="btnSubmit" onclick="SetName('Jr. Software Enginee');">Select Position</button>
                         </form>
                    </div>
                    <div class="col-sm-4">
                         <form action="../contact/employee-referral-form.php" method="post"> 
                        <input type="hidden" name="positionType" value="Freshers"/>
                        <p class="heavy greyText noMargin">
                            Project Management
                        </p>
                        <h5 class="heavy noMargin">Project Management Executive</h5>
                        <div class="row">
                            <div class="col-sm-6 noMargin">
                                <hr>
                            </div>
                        </div>
                        <p class="noMargin">
                        <strong>MBA '13/'14/'15 passout with above 70% aggregate</strong>
                        | Strong communication skills, People Management skills, Ability to interface with US-based customers and documentation/reporting capabilities
                        </p>
                        <div class="row">
                            <div class="col-sm-6 noMargin">
                                <hr>
                            </div>
                        </div>
                        <p class="noMargin">
                            <a href="../locations/miracle-city.php" class="linkText"> Miracle City(IND)</a> | <a href="../locations/miracle-heights.php" class="linkText">Miracle Heights(IND)</a>
                        </p><br>
                         <button type="button" tabindex="14" class="btn btn-primary " name="btnSubmit" id="btnSubmit" onclick="SetName('Project Management Executive');">Select Position</button>
                         </form>
                    </div>
                </div><!-- Article Listing ends here -->
                <hr>
                <div class="row">
                    <!-- Article Listing starts here -->
                    <div class="col-sm-4">
                         <form action="../contact/employee-referral-form.php" method="post"> 
                        <input type="hidden" name="positionType" value="Freshers"/>
                        <p class="heavy greyText noMargin">
                            Sales
                        </p>
                        <h5 class="heavy noMargin">Business Development Executive</h5>
                        <div class="row">
                            <div class="col-sm-6 noMargin">
                                <hr>
                            </div>
                        </div>
                        <p class="noMargin">
                        <strong>Any Degree '13/'14/'15 passout with above 65% aggregate</strong>
                        | Strong communication skills, Good attitude and personality, Ability to interface with US based customers, and flexibility to work in night shifts
                        </p>
                        <div class="row">
                            <div class="col-sm-6 noMargin">
                                <hr>
                            </div>
                        </div>
                        <p class="noMargin">
                            <a href="../locations/miracle-city.php" class="linkText"> Miracle City(IND)</a> | <a href="../locations/miracle-heights.php" class="linkText">Miracle Heights(IND)</a>
                        </p><br>
                         <button type="button" tabindex="14" class="btn btn-primary " name="btnSubmit" id="btnSubmit" onclick="SetName('Business Development Executive');">Select Position</button>
                         </form>
                    </div>
                    <div class="col-sm-4">
                        <form action="../contact/employee-referral-form.php" method="post"> 
                        <input type="hidden" name="positionType" value="Freshers"/>
                        <p class="heavy greyText noMargin">
                            Marketing
                        </p>
                        <h5 class="heavy noMargin">Digital Content Creator</h5>
                        <div class="row">
                            <div class="col-sm-6 noMargin">
                                <hr>
                            </div>
                        </div>
                        <p class="noMargin">
                        <strong>Any Degree with preferable Computer Science Background</strong>
                        | Good communication skills, ability to understand, learn and create technical articles, quickly adapt to the Organization’s domain and proof-read documents
                        </p>
                        <div class="row">
                            <div class="col-sm-6 noMargin">
                                <hr>
                            </div>
                        </div>
                        <p class="noMargin">
                            <a href="../locations/miracle-city.php" class="linkText"> Miracle City(IND)</a>
                        </p><br>
                         <button type="button" tabindex="14" class="btn btn-primary " name="btnSubmit" id="btnSubmit" onclick="SetName('Digital Content Creator');">Select Position</button>
                        </form>
                    </div>
                    <div class="col-sm-4">
                        <form action="../contact/employee-referral-form.php" method="post"> 
                        <input type="hidden" name="positionType" value="Freshers"/>
                        <p class="heavy greyText noMargin">
                            Operations
                        </p>
                        <h5 class="heavy noMargin">Human Resources Executive</h5>
                        <div class="row">
                            <div class="col-sm-6 noMargin">
                                <hr>
                            </div>
                        </div>
                        <p class="noMargin">
                        <strong>MBA '13/'14/'15 passout with above 70% aggregate</strong>
                        | Strong communication skills, People Management skills, Patience and Flexibility, Ability to employee grievances and documentation/reporting capabilities
                        </p>
                        <div class="row">
                            <div class="col-sm-6 noMargin">
                                <hr>
                            </div>
                        </div>
                        <p class="noMargin">
                            <a href="../locations/miracle-city.php" class="linkText"> Miracle City(IND)</a> | <a href="../locations/miracle-heights.php" class="linkText">Miracle Heights(IND)</a>
                        </p><br>
                         <button type="button" tabindex="14" class="btn btn-primary " name="btnSubmit" id="btnSubmit" onclick="SetName('Human Resources Executive');">Select Position</button>
                        </form>
                    </div>
                </div><!-- Article Listing ends here -->
            </div>
            <hr>
            <div class="row">
                    <!-- Article Listing starts here -->
                    <div class="col-sm-4">
                        <form action="../contact/employee-referral-form.php" method="post"> 
                        <input type="hidden" name="positionType" value="Freshers"/>
                        <p class="heavy greyText noMargin">
                            Recruitment
                        </p>
                        <h5 class="heavy noMargin">US IT Recruiter</h5>
                        <div class="row">
                            <div class="col-sm-6 noMargin">
                                <hr>
                            </div>
                        </div>
                        <p class="noMargin">
                        <strong>Any Degree '13/'14/'15 passouts with above 65% aggregate</strong>
                        | Strong communication skills, Good attitude and personality, Ability to interface with US Based Consultants, Flexibility with night shifts and ability to find/filter the right resource
                        </p>
                        <div class="row">
                            <div class="col-sm-6 noMargin">
                                <hr>
                            </div>
                        </div>
                        <p class="noMargin">
                            <a href="../locations/miracle-city.php" class="linkText"> Miracle City(IND)</a> | <a href="../locations/miracle-heights.php" class="linkText">Miracle Heights(IND)</a>
                        </p><br>
                         <button type="button" tabindex="14" class="btn btn-primary " name="btnSubmit" id="btnSubmit" onclick="SetName('US IT Recruiter');">Select Position</button>
                        </form>
                    </div>
                    <div class="col-sm-4">
                         <form action="../contact/employee-referral-form.php" method="post"> 
                        <input type="hidden" name="positionType" value="Freshers"/>
                        <p class="heavy greyText noMargin">
                            Marketing
                        </p>
                        <h5 class="heavy noMargin">Digital Marketing Executive</h5>
                        <div class="row">
                            <div class="col-sm-6 noMargin">
                                <hr>
                            </div>
                        </div>
                        <p class="noMargin">
                        <strong>Any Degree '13/'14/'15 passouts with above 65% aggregate</strong>
                        | Strong communication skills, ability to research and document potential leads and accounts, ability to interface with US Based customers and enthusiastic work attitude
                        </p>
                        <div class="row">
                            <div class="col-sm-6 noMargin">
                                <hr>
                            </div>
                        </div>
                        <p class="noMargin">
                            <a href="../locations/miracle-city.php" class="linkText"> Miracle City(IND)</a>
                       
                        </p><br>
                        <button type="button" tabindex="14" class="btn btn-primary " name="btnSubmit" id="btnSubmit" onclick="SetName('Digital Marketing Executive');">Select Position</button>
                         </form>
                    </div>
                     <div class="col-sm-4">
                        <p class="heavy greyText noMargin">
                            Development
                        </p>
                        <h5 class="heavy noMargin">SAP Trainee</h5>
                        <div class="row">
                            <div class="col-sm-6 noMargin">
                                <hr>
                            </div>
                        </div>
                        <p class="noMargin">
                        <strong> B.Tech 2013/2014 Passed out Candidates with Min 65% (CSE/IT & ECE)</strong>
                        | Orientation to learn and work with new processes, Excellent communication skills: verbal communication, and SAP Trained candidates on any module.
                        </p>
                        <div class="row">
                            <div class="col-sm-6 noMargin">
                                <hr>
                            </div>
                        </div>
                        <p class="noMargin">
                            <a href="../locations/miracle-city.php" class="linkText"> Miracle City(IND)</a>
                        </p><br>
                         <button type="submit" tabindex="14" class="btn btn-primary " name="btnSubmit" id="btnSubmit" onclick="SetName('SAP Trainee');">Select Position</button>
                    </div>
                </div><!-- Article Listing ends here -->
                    <hr>
                <div class="row">
                     <div class="col-sm-4">
                        <p class="heavy greyText noMargin">
                            Development
                        </p>
                        <h5 class="heavy noMargin">DotNet Trainee</h5>
                        <div class="row">
                            <div class="col-sm-6 noMargin">
                                <hr>
                            </div>
                        </div>
                        <p class="noMargin">
                        <strong> B.Tech 2014/2015 Passed out Candidates with Min 65% (CSE/IT & ECE)</strong>
                        | Orientation to learn and work with new processes, Excellent communication skills: verbal communication, and Dot Net Trained candidates on any module.
                        </p>
                        <div class="row">
                            <div class="col-sm-6 noMargin">
                                <hr>
                            </div>
                        </div>
                        <p class="noMargin">
                            <a href="../locations/miracle-city.php" class="linkText"> Miracle City(IND)</a>
                        </p><br>
                         <button type="submit" tabindex="14" class="btn btn-primary " name="btnSubmit" id="btnSubmit" onclick="SetName('DotNet Trainee');">Select Position</button>
                    </div>
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4"></div>
                </div>
        </section><br>
        <br>
        <?php //include '../footer.php';?>
    </body>
</html>
