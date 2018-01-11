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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" />
       <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css" />
       
        <title>Digital Summit</title>

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script type="text/javascript" src="./includes/js/generalScript.js"></script>
        <?php include './context.php'; ?>
        <link rel="stylesheet" href="./includes/css/style.css">
        <script src="./includes/js/countdown.js"></script>
        
        
        <link href="../css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
    .glyphicon-chevron-left:before {
    content: "\e079";
}
    .carousel-indicators .active{ background: #31708f; } .content{ margin-top:20px; } 
    .adjust1{ float:left; width:100%; margin-bottom:0; } .adjust2{ margin:0; } 
    .carousel-control{ color:#31708f; width:5%; } .carousel-control:hover, .carousel-control:focus{ color:#31708f; }
    .carousel-control.left, .carousel-control.right { background-image: none; }
    .media-object{ margin:auto; } @media screen and (max-width: 768px) { .media-object{ margin-top:-20px; } }
    .carousel-indicators .active {
    background-color: #2980b9 !important;
}

    </style>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
<!---rotator---->
<link rel="stylesheet" type="text/css" href="css/default-quoterotator.css" />
		<link rel="stylesheet" type="text/css" href="css/component-quoterotator.css" />
		<script src="js/modernizr.custom-quoterotator.js"></script>
		
		
        <script>


            $(document).ready(function () {
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
               
                $('.job_section img').waypoint(function () {
                    $('.job_section img').addClass('animated bounceIn');
                    $('.job_section p').addClass('animated fadeIn');
                    //                    $('.col-b p').addClass('animated fadeInRight');
                }, {offset: '60%'});
            });





        </script>
        <style>
            .quote_section {
                background: rgba(0, 0, 0, 0) radial-gradient(ellipse at center center , #fefefe 50%, #e0e0df 100%) repeat scroll 0 0;
                padding: 45px 0;
            }


            .job_section {

                text-align: center;
            }


            .job_section img{
                margin: 0 auto;
                width:50%;
            }

            .skills i{
                position: relative;
                bottom:4px;
            }


            .current_tab >  a{
                color:#53bce8 !important;
            }
            .carousel-indicators > li{
    
    background-color:#fff !important;
}
.carousel-indicators{
    bottom:4px !important;
}
    .h2-text{
        margin-top:-12px !important;
        color:#0d416b !important;
    }
    .dark{
        background-color:rgba(0,0,0,0.5 );
    }
    h4{
       
        font-size:22px !important;
    }
    blockquote {
    border-left:0px !important;
    }
    .parallax{
        background-image:url('images/jobfair.jpeg');
        background-size:cover;
        background-attachment:fixed;
        background-position:top;
    }
    .overlay{
        background-color:rgba(0,0,0,0.5);
    }
    
    .more-btn {
    border: 1px solid;
    color: #fff;
    letter-spacing: 1px;
    padding: 9px 30px;
    position: relative;
    
    z-index: 999;
    -moz-user-select: none;
    background-image: none;
    border-radius: 0px;
    display: inline-block;
    font-size: 14px;
    font-weight: 400;
    margin-bottom: 0;
    text-align: center;
    vertical-align: middle;
    margin: 0 5px;
    text-decoration:none;
}
.more-btn:hover {
    border-color: #00aae7 !important;
    color: #00aae7 !important;
    text-decoration:none;
}


        </style>
    </head>
    <?php include './header.php'; ?>
    <body class="home">

        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active" ></li>
                <li data-target="#carousel-example-generic" data-slide-to="1" ></li>
                <li data-target="#carousel-example-generic" data-slide-to="2" ></li>
                <li data-target="#carousel-example-generic" data-slide-to="3" ></li>
                 <!-- <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                <li data-target="#carousel-example-generic" data-slide-to="4"></li>-->
            </ol>
            <!-- Wrapper for slides -->
             <div class="carousel-inner">
                <div class="item active">
                   <!-- <img src="./images/banner/banner1.png" alt="First slide"> -->
                    <img src="./images/banner/b1.png" alt="First slide">
                    <!-- Static Header -->
                    <div class="header-text">
                        <div class="col-md-12">


                            <center >
                                <h1  data-animation="animated fadeInRight">
                                   <strong>Relive the action from Digital Summit!</strong>
                                
                                </h1>

                                <h2  data-animation="animated fadeInDown">
                                    AP’s largest event focused on Digital Technologies

                                </h2> <br>
                                <a class="btn btn-info btn-cons" href="https://www.youtube.com/channel/UCDRK-Uers5QyyhaDCSHiXJA" target="_blank">Explore</a>
                                <br>
                                
                            </center>
                            <!--                            <div class="">
                                                            <a class="btn btn-theme btn-sm btn-min-block" href="#">Read More&nbsp;<i class="fa fa-arrow-right"></i></a></div>-->
                        </div>
                    </div><!-- /header-text -->
                </div>
                <div class="item">
<!--                    <img src="./images/banner/BestPracticesAnalytics-1.png" alt="Second slide">-->
                    <img src="./images/banner/b2.png" alt="Second slide">
                    <!-- Static Header -->
                    <div class="header-text">
                        <div class="col-md-12 center">

                        <center>
                            <h1 data-animation="animated fadeInRight"><strong>Digital Summit - 2017 || 11th to 16th December</strong></h1>
                            <h2  data-animation="animated fadeInDown">Stay tuned to join us for the upcoming Digital Summit! </h2>
                            <br>
                            
                            </center>
                            <!--                            <h3>
                                                            <span>13- 14 Feb 2017 at visakhapatnam, India</span>
                                                        </h3>-->

                            <!--                            <div class="">
                                                            <a class="btn btn-theme btn-sm btn-min-block" href="#">Read More&nbsp;<i class="fa fa-arrow-right"></i></a></div>-->
                        </div>
                    </div><!-- /header-text -->
                </div>
                
                <div class="item">
<!--                    <img src="./images/banner/BestPracticesAnalytics-1.png" alt="Second slide">-->
                    <img src="./images/banner/b3.png" alt="Third slide">
                 <div class="dark">
                    <!-- Static Header -->
                    <div class="header-text">
                        <div class="col-md-12 center">

                        <center>
                            <h1  data-animation="animated fadeInRight"><strong>The Memories of Digital Summit ’16</strong></h1>
                            <h2  data-animation="animated fadeInDown">Explore the awesomeness of Digital Summit 2016</h2>
                            <br>
                             <a class="btn btn-info btn-cons" href="http://www.miraclesoft.com/digitalsummit/gallery/" target="_blank">Gallery</a>
                            </center>
                            <!--                            <h3>
                                                            <span>13- 14 Feb 2017 at visakhapatnam, India</span>
                                                        </h3>-->

                            <!--                            <div class="">
                                                            <a class="btn btn-theme btn-sm btn-min-block" href="#">Read More&nbsp;<i class="fa fa-arrow-right"></i></a></div>-->
                        </div>
                    </div>
                    </div><!-- /header-text -->
                </div>
                
                <div class="item">
                   <!-- <img src="./images/banner/banner1.png" alt="First slide"> -->
                    <img src="./images/banner/b5.png" alt="First slide">
                    <!-- Static Header -->
                    <div class="header-text">
                        <div class="col-md-12">


                            <center >
                                <h1  data-animation="animated fadeInRight">
                                   <strong>Support the AP Cloud Initiative</strong>
                                
                                </h1>

                                <h2  data-animation="animated fadeInDown">
                                   

                                </h2><br>
                                <a class="btn btn-info btn-cons" href="http://www.miraclesoft.com/ac/" target="_blank">AP Cloud</a>
                                <a class="more-btn" href="https://www.facebook.com/andhracloud" target="_blank"><strong>Facebook</strong></a>
                            </center>
                            <!--                            <div class="">
                                                            <a class="btn btn-theme btn-sm btn-min-block" href="#">Read More&nbsp;<i class="fa fa-arrow-right"></i></a></div>-->
                        </div>
                    </div><!-- /header-text -->
                </div>
                
                
            


            </div>
            <!-- Wrapper for end -->
            <!-- Controls -->


        </div>


        <div style="clear:both;" class="clearfix"></div>

        <!-- /Header -->

        <!--
        <br>
        <div clas="row">
            
            <div class="timer-area">
               <br>
                <ul id="countdown">
                    <li style="background:#ef4048;"> <span class="days">00</span>
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
                <h2 style="color:#0d416b;">to Digital Summit 2016 </h2> 
            </div>
            

        </div>
-->
<br>
<section class="container">
<div class="row">
            <div class="col-sm-12" >
                <center>
                <div class="col-sm-3">
                   <a href="meanhack"> <img src="images/mean-hack2.png" alt="MEANHack" class="img-responsive" width="150" height="150">
               <h4><strong>MEAN Hack</strong></h4></a>
                </div>
                <div class="col-sm-3">
                   <a href="jobfair/job_fair.php">  <img src="images/job-fair2.png" alt="" class="img-responsive" width="150" height="150">
                <h4><strong>Job Fair</strong></h4></a>
                </div>
                <div class="col-sm-3">
                    <a href="TechTalks/InnovationSummit.php"> <img src="images/Tech-talk2.png" alt="" class="img-responsive" width="150" height="150">
                <h4><strong>TechTalks</strong></h4></a>
                </div>
                <div class="col-sm-3">
                    <a href="schedule/culturals.php"> <img src="images/Culturals2.png" alt="" class="img-responsive" width="150" height="150">
               <h4><strong>Culturals</strong></h4></a>
                </div>
                </center>
            </div>
        </div>
        </section>
        <!-- /Intro-->
        <br>
    <!----rotator--->    
    <div class="container">
				
			<div >
				<div id="cbp-qtrotator" class="cbp-qtrotator">
					<div class="cbp-qtcontent">
						<img src="./images/profile_pics/cm3.png" alt="CM" />
						<blockquote>
						   <p> <i class="fa fa-quote-left"></i> &nbsp;Digital Transformation has emerged as the most transformative means to ignite sustainable growth and improve society. My vision is to digitally empower every citizen of the state, enhance their quality of life, accelerate economic competitiveness, boost local innovation and to make the state, a (which hub) hub of the country for knowledge and technology. We envision Andhra Pradesh as an icon of digital transformation for the other states to follow.</p>
						  <footer>Shri N.Chandrababu Naidu
                              <small>Chief Minister of Andhra Pradesh</small></footer>
						</blockquote>
					</div>
					<div class="cbp-qtcontent">
						<img src="./images/profile_pics/pr.png" alt="IT" />
						<blockquote>
						  <p> <i class="fa fa-quote-left"></i> &nbsp;Digital transformation is a journey for the entire company.It is no longer just about marketing transformation, its about business transformation. We are entering a new phase where all internal stakeholders are involved.</p>
						  <br><br><br>
						  <footer>Shri Palle Raghunatha Reddy
                              <small>IT & Communications Minister of Andhra Pradesh.</small> </footer>
						</blockquote>
					</div>
					<div class="cbp-qtcontent">
						<img src="./images/profile_pics/edu2.png" alt="img03" />
						<blockquote>
						  <p> <i class="fa fa-quote-left"></i> &nbsp;A good initiative for the growth of IT people.</p>
						  <br><br><br>
						  <footer>Shri Ganta Srinivasarao
                              <small> Human Resources Development (Primary Education, Secondary Education, Higher & Technical Education) ,Andhra Pradesh.</small> 
                           </footer>
						</blockquote>
					</div>
					<div class="cbp-qtcontent">
						<img src="./images/profile_pics/prasad2.png" alt="img04" />
						<blockquote>
						 <p> <i class="fa fa-quote-left"></i> &nbsp;Digital transformation will not only force you to do different things, but also to do things differently. A couple of new business mantras need to be introduced and should become a part of everyone’s thinking. From today anything you do, anything you develop, anything you roll-out towards the market, should always be driven from a new set of basic rules that determine your view on the world from now on.</p>
						  <footer>Prasad Lokam
                              <small>CEO of Miracle Software Systems, Inc.</small> 
                           </footer>
						</blockquote>
					</div>
				</div>
			</div>
		</div>
    <!----rotator--->    
    <!---DS content --->
    <section class="container">
    <div class="row">
        <div class="col-sm-12">
            <p>The world is changing and every enterprise is now a technology firm. It has become vital for organizations to reinvent themselves to ensure that they can sustain and progress. <strong>Digital Summit ’16</strong> had been all about educating professionals and students about the importance of Digital Transformation, and also the opportunities that are available in this space.</p>
            <p><strong>Digital Summit '16</strong>, a week long extravaganza of technology, fun and opportunities all wrapped together took place at <strong>Visakhapatnam – The Digital Valley!</strong> The summit brought together students, academicians, technologists, executives and NRIs with technical talks by <strong>Microsoft, IBM and Oracle</strong>, a 24-hour code-a-thon, a 2-day job fair and loads of fun activities all focussed on Digital Transformation technologies.</p>
       </div>
    </div>
    </section>
     <!---DS content --->
     
        <br>            
     <style>.carousel-control.left span, .carousel-control.right span {
    /* background-color: #000; !important*/
}
.carousel-control {
    color: #31708f !important;
    margin-left:-27px;
}
    
.carousel-indicators .active {
    background-color: #2980b9 !important;
}
.carousel-indicators li {
   border:0px !important;
}
.cbp-qtprogress { height:3px;}

</style>         
        </div>      

        <!-- Highlights - jumbotron -->
       
       
        <br>
       <section class="container">
 <div class="row">
     
            <div class="col-sm-2">
                <img src="images/index/tech-circle-1.png" alt="" class="img-responsive" ></img>
            <center>     <h5 style="color:#0d416b;"><strong>Cloud</strong></h5> </center>
            </div>
            <div class="col-sm-2">
                 <img src="images/index/tech-circle-3.png" alt="" class="img-responsive" ></img>
                <center>   <h5 style="color:#0d416b;"><strong>Cognitive</strong></h5></center>
            </div>
            <div class="col-sm-2">
               <img src="images/index/tech-circle-2.png" alt="" class="img-responsive" ></img>
                <center>  <h5 style="color:#0d416b;"><strong>Devops</strong></h5></center>
            </div>
            <div class="col-sm-2">
               <img src="images/index/tech-circle-4.png" alt="" class="img-responsive" ></img>
                <center>   <h5 style="color:#0d416b;"><strong>IoT</strong></h5></center>
            </div>
            <div class="col-sm-2">
                 <img src="images/index/tech-circle-6.png" alt="" class="img-responsive" ></img>
                <center> <h5 style="color:#0d416b;"><strong>Mobile</strong></h5></center>
            </div>
            <div class="col-sm-2">
                 <img src="images/index/tech-circle-5.png" alt="" class="img-responsive"></img>
                <center> <h5 style="color:#0d416b;"><strong>Security</strong></h5></center>
            </div>
            
        </div>
        </section>
        <br>
        <!--mainwrapper start-->
        <section class="parallax">
            <div class="row overlay">
            <div class="container job_section">

                <div class="col-lg-12">
                   
                    <div class="intro-text">
                         <br>
                        <h3 style="color:#fff;"> <strong>A Great Career Start-up</strong></h3>
                        <hr class="star-light" style="border:2px solid #eee;">
                        <p class="skills"><i class="fa fa-quote-left" aria-hidden="true" style="color:#fff;"></i> <font color="#fff">&nbsp;Availing valuable job opportunities, <strong>Digital Summit Job fair '16</strong> had geared up a huge young crowd. With over 1500 jobs being created, 10,000 people had attended the drive and opted for several jobs in various multinational companies.&nbsp;<i class="fa fa-quote-right" aria-hidden="true"></i></font></p>
                        <br/>
                    </div>
                    <br><br>
                </div>

            </div>
            
        </div>
      
</section>
<br>

        <br>
  <br>
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
            /*  Scripts for Bootstrap Carousel animation
             
             */
            (function ($) {

                //Function to animate slider captions 
                function doAnimations(elems) {
                    //Cache the animationend event in a variable
                    var animEndEv = 'webkitAnimationEnd animationend';

                    elems.each(function () {
                        var $this = $(this),
                        $animationType = $this.data('animation');
                        $this.addClass($animationType).one(animEndEv, function () {
                            $this.removeClass($animationType);
                        });
                    });
                }

                //Variables on page load 
                var $myCarousel = $('#carousel-example-generic'),
                $firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");

                //Initialize carousel 
                $myCarousel.carousel();

                //Animate captions in first slide on page load 
                doAnimations($firstAnimatingElems);

                //Pause carousel  
                $myCarousel.carousel('pause');


                //Other slides to be animated on carousel slide event 
                $myCarousel.on('slide.bs.carousel', function (e) {
                    var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
                    doAnimations($animatingElems);
                });

            })(jQuery);
    
        </script>
        
        <script type="text/javascript" src="">
            $(document).ready(function() {
  //carousel options
  $('#quote-carousel').carousel({
    pause: true, interval: 5000,
  });
});
        </script>
    
		<script src="js/jquery.cbpQTRotator.min.js"></script>
		<script src="js/jquery.cbpQTRotator.js"></script>
		<script>
			$( function() {
				/*
				- how to call the plugin:
				$( selector ).cbpQTRotator( [options] );
				- options:
				{
					// default transition speed (ms)
					speed : 700,
					// default transition easing
					easing : 'ease',
					// rotator interval (ms)
					interval : 8000
				}
				- destroy:
				$( selector ).cbpQTRotator( 'destroy' );
				*/

				$( '#cbp-qtrotator' ).cbpQTRotator();

			} );
		</script>
        <?php include './footer.php'; ?>
    </body>
</html>
