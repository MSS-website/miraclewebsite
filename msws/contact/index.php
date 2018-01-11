<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="description" content="">

        <meta name="author" content="">

        <title>
            Contact Us | Miracle
        </title>

        <?php
        session_start();
        include '../config/Locations.php';
        ?>
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <link href="../css/font-awesome.min.css" rel="stylesheet">

        <link href="../css/main.css" rel="stylesheet">

        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../css/default.css"/>
        <link rel="stylesheet" type="text/css" href="../css/component.css"/>
        <script src="../js/modernizr.custom.js">
        </script>
        <script src="../js/fileinput.js">
        </script>
        <script src="../js/custom.js">
        </script>

        <script type="text/javascript" src="../js/Validation.js">
        </script>
        <!--[if lt IE 9]>
    
    <script src="js/html5shiv.js">
    </script>
    
    <script src="js/respond.min.js">
    </script>
    <![endif]-->

        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

        <link rel="shortcut icon" href="<?= AMAZON_URL ?>/images/favicon.ico">
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
                    url("<?= AMAZON_URL ?>/images/banners/contactUS.png");
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
              
            }



        </style>
    </head>
    <?php include '../header.php'; ?>
    <body>
<section>
    <div class="overlay section_bg">
            <div class=" container">
                <div class="row">    
                    <div class="col-sm-7 text-left">  
                        <br><br>
                        <h1 class="micro "><font color="#fff"><strong>Contact Us</strong></font></h1>

                    </div>
                    <div class="col-sm-5 text-right">
                        <br><br>
                       <ul class="breadcrumb pull-right">
                        <li><a href="../">Home</a></li>
                        <!-- Breadcrumb div starts here --> 
                        <li class="active">Contact Us</li>
                        <!-- Breadcrumb div Ends here --> 
                    </ul>
                    </div>
                </div><br>
            </div>
        </div>

    </section>
        <?php
        require '../classes/contactData.php';
        ?>
        <script type='text/javascript'>
            function refreshCaptcha(){
                var img = document.images['captchaimg'];
                img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
            }

        </script>
        <section class="container">

            <br>
<!--            <br>
            <br>
            <br>-->
<!--            <div class="row">

                <div class="col-sm-1">
                </div>
                <div class="col-sm-5 text-left">

                    <div class="pageTitle">

                        <strong>
                            Contact Us
                        </strong>

                    </div>
                </div>
                <div class="col-sm-5 text-right">

                    <ul class="breadcrumb pull-right">

                        <li>
                            <a href="../">
                                Home
                            </a>
                        </li>

                        <li class="active">
                            Contact Us
                        </li>
                    </ul>

                </div>
                <div class="col-sm-1">
                </div>
            </div>-->
            <br/>

            <div class="row">

             
                <div class="col-sm-12">

                    <p class="methodText">
                        At Miracle we believe that we can help you reach your business goals and achieve more. Our teams can understand your business needs and customize solutions to fit perfectly for your business. Fill in the following form if you would like to reach out to us for more information.
                    </p>
                </div>
                
            </div>
            <div class="row">

                
                <div class="col-sm-12">

                    <div class="jumbotron">

                        <div class="row">

                            <div class="col-sm-12">

                                <div class="whyTitle">
                                    <strong>
                                        Contact Form
                                    </strong>
                                </div>
                            </div>
                        </div>
                        <div id="resultmessage">

<?php echo $resultMessage; ?>

                        </div>
                        <form id="myForm" action="
                            <?php $_PHP_SELF ?>
                              " method="post">

                            <div class="row">

                                <div class="col-sm-4">

                                    <div class="form-group">

                                        <input type="text" tabindex="1" class="form-control" required="required" placeholder="First Name" id="firstname" name="firstname" tabindex="1" onchange="fieldLengthValidator(this);">

                                    </div>
                                    <div class="form-group">

                                        <input type="text" tabindex="4" class="form-control" required="required" placeholder="Organization" id="organization" name="organization" tabindex="4" onchange="fieldLengthValidator(this);">

                                    </div>
                                </div>
                                <div class="col-sm-4">

                                    <div class="form-group">

                                        <input type="text" tabindex="2" class="form-control" required="required" placeholder="Last Name" id="lastname" name="lastname" tabindex="2" onchange="fieldLengthValidator(this);">

                                    </div>
                                    <div class="form-group">

                                        <input type="text" tabindex="5" class="form-control" required="required" placeholder="Designation" id="designation" name="designation" tabindex="5" onchange="fieldLengthValidator(this);">

                                    </div>
                                </div>
                                <div class="col-sm-4">

                                    <div class="form-group">

                                        <input type="text" tabindex="3" class="form-control" required="required" placeholder="Email" id="email" name="email" tabindex="3" onchange="return checkEmail(this);fieldLengthValidator(this);">

                                    </div>
                                    <div class="form-group">

                                        <input type="text" tabindex="6" class="form-control" required="required" onkeypress="return isNumberKey(event)" placeholder="Work Phone" id="phone" name="phone" tabindex="6" onchange="return formatPhone(this);" onblur="return validatenumber(this)">

                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-sm-3">

                                    <div class="form-group">

                                        <input type="text" tabindex="7" class="form-control" required="required" placeholder="City" id="city" name="city" tabindex="7" onchange="fieldLengthValidator(this);">

                                    </div>
                                </div>
                                <div class="col-sm-3">

                                    <div class="form-group">

                                        <input type="text" tabindex="8" class="form-control" required="required" placeholder="State" name="state" id="state" onchange="fieldLengthValidator(this);">

                                    </div>
                                </div>
                                <div class="col-sm-3">

                                    <div class="form-group">

                                        <input type="text" tabindex="9" class="form-control" required="required" placeholder="Country" id="country" name="country" onchange="fieldLengthValidator(this);">

                                    </div>
                                </div>
                                <div class="col-sm-3">

                                    <div class="form-group">

                                        <input type="text" tabindex="10" class="form-control" required="required" onkeypress="return isNumberKey(event)" placeholder="Zip Code" id="zip" name="zip" onchange="fieldLengthValidator(this);">

                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-sm-12">

                                    <div class="form-group">

                                        <textarea class="form-control" tabindex="11" placeholder="What kind of services are you looking for?" rows="3" id="description" name="description" value="" onchange="fieldLengthValidator(this);">
                                        </textarea>

                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-sm-6">

                                    <div class="form-group">

                                        <input id="captcha_code" name="captcha_code" type="text" required="true" class="form-control" placeholder="Enter the code right here">

                                    </div>
                                </div>
                                <div class="col-sm-6" style="text-align: left">
                                    <img src="../classes/captcha.php?rand=<?php echo rand(); ?>" id='captchaimg' height="30px;" width="100px;">&nbsp;&nbsp;&nbsp;&nbsp;<a href='javascript: refreshCaptcha();'><i class="fa fa-refresh fa-1x" aria-hidden="true" title="Can't read the image? click here to refresh"></i></a>

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
                                    <button type="submit" tabindex="12" class="btn btn-primary" name="btnSubmit" id="btnSubmit">
                                        Submit Message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
            <br>
        </section>

<?php include '../footer.php'; ?>


    </body>
</html>