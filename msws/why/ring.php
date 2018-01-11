<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="description">
        <meta content="" name="author">
        <title>
            RING | Miracle
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
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?= AMAZON_URL ?>/images/favicon.ico" rel="shortcut icon">
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
         url("<?= AMAZON_URL ?>/images/banners/ring-methodlogies.png");
         -webkit-background-size: cover;
         -moz-background-size: cover;
         -o-background-size: cover;
         background-size: cover;
         
            }

            
            
        </style>
    </head>
  <?php include '../header.php';?>  <body>
  
  <section>
        <div class="overlay section_bg">
            <div class=" container">
               
                <div class="row">    
                    <div class="col-sm-7 text-left">  
                        <br><br>
                        <h1 class="micro "><font color="#fff"><strong>RING Methodology</strong></font></h1>

                    </div>
                    <div class="col-sm-5 text-right">
                        <br><br>
                       <ul class="breadcrumb pull-right">
                        <li>
                            <a href="../">Home</a>
                        </li>
                        <li>
                            <a href="./">Why</a>
                        </li>
                        <li>
                            <a href="methodologies.php">Methodologies</a>
                        </li>
                        <li class="active">RING
                        </li>
                    </ul>
                    </div>
                </div><br>
            </div>
        </div>

    </section>
    <br>
    
        <section class="container" id="about-us">
          
           
            <div class="row">
                <div class="col-sm-12">
                    <p class="methodText">
                        <strong>Rapid Integration Development Methodology</strong> for Next Generation A2A, B2B and Cloud Integrations is a business process oriented methodology designed for projects that are integrating data, applications and processes within or across multiple business units using heterogeneous systems, throughout the enterprise. The methodology provides a foundation to maximize reuse opportunities by providing a common design approach, reusable templates and processes that can be leveraged by other projects within your company.
                    </p>
                    <p class="methodText">
                        This methodology makes software quality assurance a priority over the entire lifecycle of an integration project. It uses Process Excellence and Capability Maturity Model (CMM) and IBM’s Rational Unified Process (RUP) as guiding principles and incorporates best practices and templates from them into its guidelines and templates
                    </p>
                    <p class="methodText">
                        The RING methodology is made up of the following four phases :
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="row center">
                        <div class="col-sm-3">
                            <center><img alt="Responsive image" class="img-responsive" src="<?= AMAZON_URL ?>/images/method/knowledge-transfer.png"></center>
                            <div>
                                <strong>Inception</strong>
                            </div>
                            <p>
                                Planning the Business Case, Synthesizing the architecture and creating the environment
                            </p><br>
                        </div>
                        <div class="col-sm-3">
                            <center><img alt="Responsive image" class="img-responsive" src="<?= AMAZON_URL ?>/images/method/planning.png"></center>
                            <div>
                                <strong>Elaboration</strong>
                            </div>
                            <p>
                                Definition Building, Iteration Plans, and establishing the Development Plan
                            </p><br>
                        </div>
                        <div class="col-sm-3">
                            <center><img alt="Responsive image" class="img-responsive" src="<?= AMAZON_URL ?>/images/method/monitor.png"></center>
                            <div>
                                <strong>Construction</strong>
                            </div>
                            <p>
                                Process Optimization, Component Development and Product Assesment against vision criteria
                            </p><br>
                        </div>
                        <div class="col-sm-3">
                            <center><img alt="Responsive image" class="img-responsive" src="<?= AMAZON_URL ?>/images/method/pilot.png"></center>
                            <div>
                                <strong>Transition</strong>
                            </div>
                            <p>
                                Finalizing User Support, Product Release Creation and Fine Tuning based on feedback
                            </p><br>
                        </div>
                    </div>
                </div>
            </div><br>
        </section><?php include '../footer.php';?>
    </body>
</html>