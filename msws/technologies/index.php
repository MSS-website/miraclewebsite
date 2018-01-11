<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="description">
        <meta content="" name="author">
        <title>
            Our Technologies | Miracle
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
                    url("<?= AMAZON_URL ?>/images/banners/technologies.png");
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
              
            }



        </style>
    </head><!--/head-->
   <?php include '../header.php';?>
    <body>
    <section>
            <div class="overlay section_bg">
                <div class=" container">
                   
                    <div class="row">    
                        <div class="col-sm-7 text-left">  
                            <br><br><br>
                            <h1 class="micro "><font color="#fff"><strong>Our Technologies</strong></font></h1>

                        </div>

                        <div class="col-sm-5 text-right">
                            <br><br><br>
                            <ul class="breadcrumb pull-right">
                        <li>
                            <a href="../">Home</a>
                        </li>
                        <li class="active">Technologies
                        </li>
                    </ul>
                        </div>
                    </div><br>
                </div>
            </div>

        </section>
    
    
    
        
            <section class="container" id="career">
            <div class="row">
                <div class="col-sm-3 center">
                    <a href="../technologies/api-management.php"><center><img alt="API-Management" title="API Management" class="img-responsive" src="<?= AMAZON_URL ?>/images/technologies/api-management.png"><br></a></center>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="serviceTitle">
                                API Management
                            </div><br>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 center">
                    <a href="../technologies/big-data-cloud-mobile.php"><center><img alt="BIG-Data"title=" Big Data" class="img-responsive flatImages" src="<?= AMAZON_URL ?>/images/technologies/bigdata-cloud-mobile.png"><br></a></center>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="serviceTitle">
                                Big Data, Cloud and Mobile
                            </div><br>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 center">
                    <a href="../technologies/business-process-management.php"><center><img alt="Process-Management"title="Process Management" class="img-responsive" src="<?= AMAZON_URL ?>/images/technologies/process-management.png"><br></a></center>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="serviceTitle">
                                Process Management
                            </div><br>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 center">
                    <a href="../technologies/data-services/"><center><img alt="Data-ETL-Analytics" title="Data, ETL and Analytics" class="img-responsive" src="<?= AMAZON_URL ?>/images/technologies/data-etl-analytics.png"><br></a></center>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="serviceTitle">
                                Big Data, BI and Analytics Offerings
                            </div><br>
                        </div>
                    </div>
                </div>
            </div><br>
            <div class="row">
                <div class="col-sm-3 center">
                    <a href="../technologies/digital-experience-commerence.php"><center><img alt="Digital-Experience"title="Digital Experience" class="img-responsive" src="<?= AMAZON_URL ?>/images/technologies/digital-experience.png"><br></a></center>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="serviceTitle">
                                Digital Experience
                            </div><br>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 center">
                    <a href="../technologies/b2b_edi_mft.php"><center><img alt="File-Transfer" title="File Transfer" class="img-responsive flatImages" src="<?= AMAZON_URL ?>/images/technologies/b2b-edi.png"><br></a></center>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="serviceTitle">
                                File Transfer and B2B/EDI
                            </div><br>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 center">
                    <a href="../technologies/sap-services.php"><center><img alt="SAP-Services" title="SAP Services" class="img-responsive" src="<?= AMAZON_URL ?>/images/technologies/sap-services.png"><br></a></center>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="serviceTitle">
                               SAP Services
                            </div><br>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 center">
                    <a href="../technologies/application-integration.php"><center><img alt="SOA-Connectivity" title="SOA & Connectivity"class="img-responsive" src="<?= AMAZON_URL ?>/images/technologies/soa-connectivity.png"><br></a></center>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="serviceTitle">
                                SOA and Connectivity
                            </div><br>
                        </div>
                    </div>
                </div>
            </div><br>
        </section><?php include '../footer.php';?>
    </body>
</html>