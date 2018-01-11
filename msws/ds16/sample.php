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

        <link rel="stylesheet" href="/css/bootstrap-theme.css" media="screen" >

        <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/font-awesome.min.css">
        <!-- Stylesheets -->
        <!--<link rel="stylesheet" href="/css/reset.css" />-->
        <link rel="stylesheet" href="/css/styles.css" />

        <!-- Custom styles for our template -->
        <link rel="stylesheet" href="/css/bootstrap-theme.css" media="screen" >
        <link rel="stylesheet" href="/css/main.css">
        <link rel="stylesheet" href="/css/animate.min.css">

        <link rel="stylesheet" href="/css/customstyle.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script type="text/javascript" src="/js/generalScript.js"></script>
        <script src="/js/countdown.js"></script>
        <link rel="stylesheet" href="/css/style.css">


        <script>


            $(document).ready(function () {

                $("#countdown").countdown({
                    date: "22 december 2016 12:00:00",
                    format: "on"
                },
                        function () {
                            // callback function
                        });




                // alert( "ready!" );
                $(".pre-footer img").hover(function () {
                    $(".pre-footer img").removeClass('animated slideInLeft');
                });
                $("#quote").fadeIn(3000);
                // hide our element on page load
                $('#element-to-animate').css('opacity', 0);

                $('#element-to-animate').waypoint(function () {
                    $('#element-to-animate').addClass('fadeInLeft');
                    $('.col-a p').addClass('animated fadeInLeft');
                    $('.col-b p').addClass('animated fadeInRight');
                }, {offset: '100%'});
                $('#services').waypoint(function () {
                    //alert("df");
                    $('#services').addClass('animated fadeInUp');
                }, {offset: '100%'});

                $('#verticals').waypoint(function () {
                    //alert("df");
                    $('#verticals').addClass('animated fadeInUp');
                }, {offset: '100%'});


                $('.pre-footer').waypoint(function () {
                    //alert("df");
                    $('.pre-footer img').addClass('animated slideInLeft');
                }, {offset: '100%'});




                $('#quote').waypoint(function () {
                    //alert("df");
                    $('#quote').addClass('animated fadeInLeft');



                }, {offset: '100%'});

                $('#client').waypoint(function () {
                    //alert("df");
                    $('#client').addClass('animated fadeInUp');



                }, {offset: '100%'});


                $('#clients_head').waypoint(function () {
                    //alert("df");
                    $('#clients_head').addClass('animated fadeInUp');



                }, {offset: '100%'});

                $('.phone').waypoint(function () {
                    //alert("df");
                    $('.phone').addClass('animated fadeInLeft');



                }, {offset: '100%'});

                $('.content').waypoint(function () {
                    //alert("df");
                    $('.content').addClass('animated fadeInRight');



                }, {offset: '100%'});

                $('.banner_img').waypoint(function () {
                    //alert("df");
                    $('.banner_img').addClass('animated zoomInUp');



                }, {offset: '100%'});
            });





        </script>

    </head>
 <?php include '/includes/templets/header.php';?>
    <body class="home">
       
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <!-- <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                <li data-target="#carousel-example-generic" data-slide-to="4"></li>-->
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="/images/banner/slide1.jpg" alt="First slide">
                    <!-- Static Header -->
                    <div class="header-text hidden-xs">
                        <div class="col-md-12">

                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <p>&nbsp;
                                12th Dec 2016  to 16th Dec 2016<br>
                                &nbsp; Digital Valley, Visakhapatnam, AP, India
                            </p>
                            <h2>
                                <span><strong>Digital Summit 2016</strong></span>
                            </h2>

                            <h3>
                                <span>World’s Destination for Digital Transformation Skills</span>
                            </h3>
                            <br>
                            <div class="">
                                <a class="btn btn-theme btn-sm btn-min-block" href="#">Read More&nbsp;<i class="fa fa-arrow-right"></i></a></div>
                        </div>
                    </div><!-- /header-text -->
                </div>
                <div class="item">
                    <img src="/images/banner/slide2.jpg" alt="Second slide">
                    <!-- Static Header -->
                    <div class="header-text hidden-xs">
                        <div class="col-md-12">

                            <br>
                            <br>
                            <br>
                            <br>
                            <h2>Digital Summit 2016</h2>
                            <h3>
                                <span><strong>An International Event
                                        For 
                                        Digital Business Leaders, 
                                        Technology Innovators and Digital Systems Integrators</strong></span>
                            </h3>

                            <!--                            <h3>
                                                            <span>13- 14 Feb 2017 at visakhapatnam, India</span>
                                                        </h3>-->
                            <br>
                            <div class="">
                                <a class="btn btn-theme btn-sm btn-min-block" href="#">Read More&nbsp;<i class="fa fa-arrow-right"></i></a></div>
                        </div>
                    </div><!-- /header-text -->
                </div>
                <div class="item expert_slide">
                    <img src="/images/banner/slide3.jpg" alt="Third slide" >
                    <!-- Static Header -->
                    <div class="header-text hidden-xs">
                        <div class="col-md-12">

                            <br>
                            <br>



                            <h3>
                                Focus  is on 
                                Digital Transformation Use Cases / Adoption / Best Practices on <br>

                            </h3>
                            <h3>
                                <span>  Cloud, Analytics, Mobile, DevOps, IoT and Secuirty</span>
                            </h3>

                            <br>
                            <br>
                            <div class="">
                                <a class="btn btn-theme btn-sm btn-min-block" href="#">Read More&nbsp;<i class="fa fa-arrow-right"></i></a></div>
                        </div>
                    </div><!-- /header-text -->
                </div>
                <!--<div class="item">
                    <img src="/images/banner/slide4.jpg" alt="fourth slide">
                <!-- Static Header
                <div class="header-text hidden-xs">
                    <div class="col-md-12">

                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <h2>
                            <span><strong></strong></span>
                        </h2>

                        <h3>
                            <span></span>
                        </h3>
                        <br>
                        <div class="">
                            <a class="btn btn-theme btn-sm btn-min-block" href="">Read More&nbsp;<i class="fa fa-arrow-right"></i></a></div>
                    </div>
                </div><!-- /header-text 
            </div> -->

            </div>
            <!-- Controls -->


        </div><!-- /carousel -->


        <div style="clear:both;" class="clearfix"></div>

        <!-- /Header -->

        <!-- Intro -->

        <div clas="row">
            <!-- TIMER -->
            <div class="timer-area">
                <h2>Digital Valley Summit begins in </h2>
                <ul id="countdown">
                    <li> <span class="days">00</span>
                        <p class="timeRefDays">days</p>
                    </li>
                    <li> <span class="hours">00</span>
                        <p class="timeRefHours">hours</p>
                    </li>
                    <li> <span class="minutes">00</span>
                        <p class="timeRefMinutes">minutes</p>
                    </li>
                    <li> <span class="seconds">00</span>
                        <p class="timeRefSeconds">seconds</p>
                    </li>
                </ul>
            </div>
            <!-- end timer-area --> 

        </div>

        <!-- /Intro-->

        <!-- Highlights - jumbotron -->
        <div class="row">
              <div class=" text-center col-sm-6 banner_img">
                <img src="./images/bannerdv1.gif">

            </div>
            <div class="col-sm-6" style="background-color: #8AC441;color:#fff;" id="quote">

                <p class="content_slide" >

                    AP Digital Valley Summit 2016 is a two-day conference that begin on Dec 12th at the Novotel Hotel in Visakhapatnam, Digital Valley, AP, India, bringing together Digital Business Leaders, IT Innovators, Academia, Digital Systems Integrators and Public Sector Leaders to discuss and share the Digital Technology Success Stories and also provide Insights and Update on where this Journey is leading to and what the challenges are and how they can be put into actionable plans. Space is limited, so register to attend today!Digital Valley Summit 2016 is the destination for World Class Digital Transformation Skills.




                </p>

            </div>
          
        </div>
        <div class="timer-area">

            <h2 class="text-center thin" id="services" style="margin: 26px;">A Huge Digital Valley Summit</h2>
            <div class="container">
                <div class="row" style="margin: 24px 0;">
                    <div class="col-md-6  text-center mt-100 mb-100">
                        <div class="phone">
                            <img class="img-responsive img-rounded" src="./images/img_provide_it.png">
                        </div>
                    </div>
                    <div class="col-md-5 col-md-offset-1">
                        <div class="content">
                            <div class="pull-middle">
                                <h3 class="h1 page-header">Highlights.</h3>
                                <ul class="media-list">
                                    <li class="media">
                                        <a class="media-left" href="#">
                                            <i class="fa fa-3x fa-globe" style="color:#F19113" aria-hidden="true"></i>

                                        </a>
                                        <div class="media-body">
                                            <h3 class="media-heading">World Class summit.</h3>
                                            <p>Maecenas vitae ex iaculis, efficitur est eu, fermentum quam.</p>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <a class="media-left" href="#">
                                            <i class="fa fa-3x fa-sitemap" style="color:#19B491" aria-hidden="true"></i>
                                        </a>
                                        <div class="media-body">
                                            <h3 class="media-heading">Digital Technology Success Stories.</h3>
                                            <p>Integer suscipit massa at tellus semper, at aliquam ante bibendum.</p>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <a class="media-left" href="#">
                                            <i class="fa fa-3x fa-users" style="color:#F74F4F" aria-hidden="true"></i>
                                        </a>
                                        <div class="media-body">
                                            <h3 class="media-heading">Integrators and Public Sector Leaders.</h3>
                                            <p>Maecenas vitae ex iaculis, efficitur est eu, fermentum quam.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="" style="position: relative; right: -15px;">
            <section class="se-container2 col-sm-5 pull-right">
                <div class="se-slope">

                </div>

                <!-- ... -->
            </section>
        </div>
        <div style="background:#00A79B; " id="quote">
            <blockquote style="border: 0px none; color: rgb(23, 38, 70);word-spacing: 2px;color:#fff;" class="text-center"><h4  style="margin-top:2%;line-height: 26px;">"B2B IT SHOW 2017 – Experience a world of innovations and explore the avenue of sourcing the best of total IT products & solutions for the growth of your enterprise including Mobile Application Services, Cloud Computing and much more…"</h4></blockquote>
            <p style="margin: 0px; position: relative; bottom: 27px;" class="text-center"><a class="btn btn-primary btn-large btn_modify" href="#">START WITH US »</a></p>
        </div>
        <div class="" style="position: relative; left: -15px;">
            <section class="se-container3 col-sm-5 pull-left">
                <div class="se-slope">

                </div>

                <!-- ... -->
            </section>
        </div>


        <div class="[ container text-center ]">
            <div class="[ row ]">
                <div class="comments" role="tabpanel" style="margin:50px 0">
                    <div class="[[ col-xs-4 col-sm-10 col-sm-offset-1 ]]">
                        <!-- Nav tabs -->
                        <ul class="[ nav nav-justified ]" id="nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#dustin" aria-controls="dustin" role="tab" data-toggle="tab">
                                    <img class="img-circle" src="./images/profile_pics/prasad.jpg"/>
                                    <span class="quote"><i class="fa fa-quote-left"></i></span>
                                </a>
                            </li>
                            <li role="presentation" class="">
                                <a href="#daksh" aria-controls="daksh" role="tab" data-toggle="tab">
                                    <img class="img-circle" src="./images/profile_pics/images.jpg" />
                                    <span class="quote"><i class="fa fa-quote-left"></i></span>
                                </a>
                            </li>
                            <li role="presentation" class="">
                                <a href="#anna" aria-controls="anna" role="tab" data-toggle="tab">
                                    <img class="img-circle" src="./images/profile_pics/pic6.jpg" />
                                    <span class="quote"><i class="fa fa-quote-left"></i></span>
                                </a>
                            </li>
                            <li role="presentation" class="">
                                <a href="#wafer" aria-controls="wafer" role="tab" data-toggle="tab">
                                    <img class="img-circle" src="./images/profile_pics/pic7.jpg" />
                                    <span class="quote"><i class="fa fa-quote-left"></i></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="[ col-xs-8 col-sm-12 ]" >
                        <!-- Tab panes -->
                        <div class="tab-content" id="tabs-collapse">            
                            <div role="tabpanel" class="tab-pane fade in active" id="dustin">
                                <div class="tab-inner">                    
                                    <p class="lead">India’s IT sector continues to play an important role in the new knowledge based socio economic revolution that is sweeping the world today. </p>
                                    <hr>
                                    <p><strong class="text-uppercase">Prasad Lokam</strong></p>
                                    <p><em class="text-capitalize"> CEO</em> at <a href="#">Miraclesoft</a></p>                 
                                </div>
                            </div>

                            <div role="tabpanel" class="tab-pane fade" id="daksh">
                                <div class="tab-inner">
                                    <p class="lead">The world has witnessed India’s emergence as an important source of e- solutions and services for meeting the global demand of computer software services..</p>
                                    <hr>
                                    <p><strong class="text-uppercase">Prasad kandregula</strong></p>
                                    <p><em class="text-capitalize"> Senior developer</em> at <a href="#">Google</a></p>
                                </div>
                            </div>

                            <div role="tabpanel" class="tab-pane fade" id="anna">
                                <div class="tab-inner">
                                    <p class="lead">Good initiative for IT people growth.</p>
                                    <hr>
                                    <p><strong class="text-uppercase">Anna Pickard</strong></p>
                                    <p><em class="text-capitalize"> Master web developer</em> at <a href="#">Intel</a></p>
                                </div> 
                            </div>

                            <div role="tabpanel" class="tab-pane fade" id="wafer">
                                <div class="tab-inner">
                                    <p class="lead">IT companies catering a host of solutions with value additions, three dimensional growth in skills, technology and expertise.</p>
                                    <hr>
                                    <p><strong class="text-uppercase">Wafer Baby</strong></p>
                                    <p><em class="text-capitalize"> Web designer</em> at <a href="#">Microsoft</a></p>
                                </div>
                            </div>
                        </div>
                    </div>        
                </div>
            </div>
        </div> 
        <div class="clearfix"></div>
        <!--mainwrapper start-->
        <div class="mainwrapper timer-area">
            <!--mainwrapper start-->

            <h2 class="text-center thin" id="services" style="margin: 26px;">OUR PARTNERS & SPONSORS</h2>
            <div class="innermain_fluid">
                <div style="visibility: hidden; animation-name: none;" class="wow fadeInUp list_carousel">
                    <div style="display: block;" id="clientprev1" class="list_carousel_left"><img src="./images/clients/clientleft.png"></div>
                    <div style="display: block;" id="clientnext1" class="list_carousel_right"><img src="./images/clients/clientright.png"></div>
                    <div style="display: block; text-align: start; float: none; top: auto; right: auto; bottom: auto; left: auto; z-index: auto; margin: 0px 0px 20px; overflow: hidden; position: relative; width: 1152px; height: 70px;" class="caroufredsel_wrapper"><ul style="text-align: left; float: none; position: absolute; top: 0px; right: auto; bottom: auto; margin: 0px; width: 4896px; height: 70px; left: 0px; z-index: auto;" id="clients">
                            <li style="width: 144px;">
                                <div class="clients_div AdvanceAutoParts"> <img src="./images/logo.gif"> </div>
                            </li>
                            <li style="width: 144px;">
                                <div class="clients_div adesa"><img src="./images/cyient-logo.png"></div>
                            </li>
                            <li style="width: 144px;">
                                <div class="clients_div  ibm"><img src="./images/clients/ibm.jpg"></div>
                            </li>
                            <li style="width: 144px;">
                                <div class="clients_div  Aetna_logo"><img src="./images/clients/cisco.png"></div>
                            </li>
                            <li style="width: 144px;">
                                <div class="clients_div BCBS"><img src="./images/clients/microsoft.png"></div>
                            </li>
                            <li style="width: 144px;">
                                <div class="clients_div belk"><img src="./images/oracle.png"></div>
                            </li>
                            <li style="width: 144px;">
                                <div class="clients_div comcast"><img src="./images/google.jpg"></div>
                            </li>
                            <li style="width: 144px;">
                                <div class="clients_div dte"><img src="./images/au.jpg"></div>
                            </li>

                            <li style="width: 144px;">
                                <div class="clients_div  qvc"><img src="./images/gitam.jpg"></div>
                            </li>
                            <li style="width: 144px;">
                                <div class="clients_div  qvc"><img src="./images/clients/nunet.jpg"></div>
                            </li>
                        </ul></div>
                </div>
            </div>
        </div>



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

        

        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>



        <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.4/waypoints.min.js"></script>



        <script src="includes/js/headroom.min.js"></script>
        <script src="includes/js/jQuery.headroom.min.js"></script>
        <script src="includes/js/template.js"></script>
        <script type="text/javascript" src="includes/js/wow.js"></script>


        <script>new WOW().init();</script>
        <!--animate_end-->

        <script type="text/javascript" src="includes/js/clients.js"></script>





        <script type="text/javascript" language="javascript">
            $(function () {
                //	Responsive layout, resizing the items
                $('#clients').carouFredSel({
                    responsive: true,
                    width: '100%',
                    prev: '#clientprev1',
                    next: '#clientnext1',
                    direction: "left",
                    height: 90,
                    scroll: {
                        items: 1,
                        duration: 1920,
                        timeoutDuration: 250,
                        pauseOnHover: true
                    },
                    items: {
                        visible: {
                            min: 1,
                            max: 5
                        }
                    }
                });
            });




        </script>
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
          <?php include '/includes/templets/footer.php';?>
    </body>
</html>
