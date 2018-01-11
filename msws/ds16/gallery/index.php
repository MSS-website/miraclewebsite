<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Digital Valley Summit</title>
      <!--  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
        <link rel="stylesheet" type="text/css" href="../css/gallery/style.css"/> 
        <link rel="stylesheet" type="text/css" href="../css/gallery/demo.css"/> 
        <script src="../js/gallery/modernizr.custom.70736.js"></script>
        <!-- <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

        <?php include '../context.php'; ?>
        <?php
        $currEventType = isset($_GET["eventType"]) ? $_GET["eventType"] : 1;
        ?>
        <style>


            .loader {
                position: fixed;
                left: 0px;
                top: 350px;
                width: 100%;
                height: 37%;
                z-index: 9999;
                background: url('../images/preloading.gif') 50% 50% no-repeat rgb(249,249,249);
                opacity: .8;
                position:absolute;
            }

            .h2-text{
                color:#00aae7;
                font-weight:bold;
            }
            .parallax{
                background-image:url('../images/culturals/culturals-paralx.jpg');
                background-attachment:fixed;
                background-size:cover;
                background-position:center;}


            .nav-tabs < li{
                margin-left:0px !important;
            }
            .nav-tabs {
                margin-left:16px !important;
                margin-right:17px !important;
            }
        </style>

    </head>
    <?php include '../header.php'; ?>
    <body class="home">

            <div class="loader">
            </div>

        
        
        
        <section class="parallax">
            <div class="overlay">
                <div class="container">

                    <div class="row" style="margin-top:40px; margin-bottom:45px;">


                        <div class="col-sm-6 text-left">

                            <h1 style="color:#fff"><strong>Gallery</strong></h1>
                        </div>
                        <div class="col-sm-6 text-right">
                            <ul class="breadcrumb pull-right">
                                <li><a href="../"><font color="#fff">Home</font></a></li>

                                <li class="active"><font color="#fff">Gallery</font></li>
                            </ul>
                        </div>

                    </div>

                </div></div>
        </section>
        <section class="container">
            <script type="text/javascript">
                function enableDiv(divNum) {
                    window.location="../gallery?eventType="+divNum;
                }
          	
            </script>
            <div class="row">

                <br>
                <ul class="nav nav-tabs">
                    <?php if ($currEventType == 1) { ?>
                        <li class="active">
                        <?php } else { ?>
                        <li>
                        <?php } ?>
                        <a data-toggle="tab" href="#one" onclick="enableDiv(1);"><h4><strong>MeanHack</strong></h4></a>
                    </li>
                    <?php if ($currEventType == 2) { ?>
                        <li class="active">
                        <?php } else { ?>
                        <li>
                        <?php } ?>
                        <a data-toggle="tab" href="#two" onclick="enableDiv(2);"><h4><strong>Business Summit</strong></h4></a>
                    </li>
                    <?php if ($currEventType == 3) { ?>
                        <li class="active">
                        <?php } else { ?>
                        <li>
                        <?php } ?>
                        <a data-toggle="tab" href="#three" onclick="enableDiv(3);"><h4><strong>Job Fair</strong></h4></a>
                    </li>
                    <?php if ($currEventType == 4) { ?>
                        <li class="active">
                        <?php } else { ?>
                        <li>
                        <?php } ?>
                        <a data-toggle="tab" href="#four" onclick="enableDiv(4);"><h4><strong>Hungama</strong></h4></a>
                    </li>
                    <?php if ($currEventType == 5) { ?>
                        <li class="active">
                        <?php } else { ?>
                        <li>
                        <?php } ?>
                        <a data-toggle="tab" href="#five" onclick="enableDiv(5);"><h4><strong>TechTalk</strong></h4></a>
                    </li>
                    <?php if ($currEventType == 6) { ?>
                        <li class="active">
                        <?php } else { ?>
                        <li>
                        <?php } ?>
                        <a data-toggle="tab" href="#six" onclick="enableDiv(6);"><h4><strong></strong></h4></a>
                    </li>
                    <?php if ($currEventType == 7) { ?>
                        <li class="active">
                        <?php } else { ?>
                        <li>
                        <?php } ?>
                        <a data-toggle="tab" href="#seven" onclick="enableDiv(7);"><h4><strong></strong></h4></a>
                    </li>
                </ul>
                <div class="tab-content">
                    <?php if ($currEventType == 1) { ?>
                        <div class="tab-pane fade in active" id="one">
                            <?php
                            include 'Gallerymeanhack.php';
                        } else {
                            ?>
                            <div class="tab-pane fade" id="one">

                            </div>

<?php } ?>
                        <?php if ($currEventType == 2) { ?>
                            <div class="tab-pane fade in active" id="two">
                            <?php
                            include 'Gallerybusinessummit.php';
                        } else {
                            ?>
                                <div class="tab-pane fade" id="two">

                                </div>
                            <?php } ?>
<?php if ($currEventType == 3) { ?>
                                <div class="tab-pane fade in active" id="three">
                                <?php
                                include 'Galleryjobfair.php';
                            } else {
                                ?>
                                    <div class="tab-pane fade" id="three">

                                    </div>
                                <?php } ?>

                                <?php if ($currEventType == 4) { ?>
                                    <div class="tab-pane fade in active" id="four">
    <?php
    include 'Galleryhungama.php';
} else {
    ?>
                                        <div class="tab-pane fade" id="four">

                                        </div>
                                    <?php } ?>
                                    <?php if ($currEventType == 5) { ?>
                                        <div class="tab-pane fade in active" id="five">
                                        <?php
                                        include 'Gallerytechtalk.php';
                                    } else {
                                        ?>
                                            <div class="tab-pane fade" id="five">

                                            </div>
                                    <?php } ?>
                                    </div>
                                        <?php if ($currEventType == 6) { ?>
                                        <div class="tab-pane fade in active" id="six">
                                            <?php
                                            include 'Gallerytechtalk.php';
                                        } else {
                                            ?>
                                            <div class="tab-pane fade" id="five">
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <?php if ($currEventType == 7) { ?>
                                        <div class="tab-pane fade in active" id="seven">
                                            <?php
                                            include 'Galleryhungama.php';
                                        } else {
                                            ?>
                                            <div class="tab-pane fade" id="five">
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <br><br>

                                    <br><br>
                                </div>


                                </section>

                                <div style="clear:both;" class="clearfix"></div>

                                <div class="uparrow" id="uparrow"><i class="fa fa-3x fa-angle-up" aria-hidden="true"></i></div>
                              <!--  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script> -->
                                <script>
                                   $(window).load(function() {
                                       

                                        $(".loader").fadeOut("slow");
                                    })


                                    $(document).ready(function () {
                                        $(function () {
                                            $(window).scroll(function () {
                                                if ($(this).scrollTop() > 50) {
                                                    $('#uparrow').fadeIn();
                                                } else {
                                                    $('#uparrow').fadeOut();
                                                }
                                            });
                                            $('#uparrow').click(function () {
                                                $('body,html').animate({
                                                    scrollTop: 0
                                                }, 800);
                                                return false;
                                            });
                                        });

                                    });
            
           
                                </script>

                                <script>
    
                                </script>	
<?php include '../footer.php'; ?>
                                </body>
                                </html>
