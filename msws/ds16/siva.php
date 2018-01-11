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
       <link rel="stylesheet" type="text/css" href="css/interactive-svg.css" />
		<script src="js/modernizr.custom.js"></script>
        <title>Digital Summit</title>

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script type="text/javascript" src="./includes/js/generalScript.js"></script>
        <?php include './context.php'; ?>
        <link rel="stylesheet" href="./includes/css/style.css">
         <link rel="stylesheet" href="./includes/css/bootstrap.min.css">
         <link rel="stylesheet" href="./includes/css/main.css">
         <link rel="stylesheet" href="./includes/css/plugins.css">
        <script src="./includes/js/countdown.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
		<script src="js/interactive-svg.js"></script>
        
        
        <link href="../css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
     @media only screen and (min-width: 768px) and (max-width: 880px) {
         .widget-image{
             height:535px !important;
         }
         .widget-image> img{
             min-width:810px !important;
         }
     }
     @media only screen and (min-width: 880px) and (max-width: 975px) {
         .widget-image{
             height:545px !important;
         }
         .widget-image> img{
             min-width:600px !important;
         }
     }
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
.widget {
    background-color: #ffffff;
    margin-bottom: 10px;
    position: relative;
    border-radius: 2px;
}
.widget-image:first-child {
    border-top-right-radius: 2px;
    border-top-left-radius: 2px;
}
.widget-image {
    overflow: hidden;
    position: relative;
    height: 470px;
}
.widget-image> img {
    min-width: 700px;
}
img {
    vertical-align: middle;
}
.widget-image-content-red {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    padding: -1px 25px;
    background: rgba(231,76,60, .80);
}
.widget-image-content-blue {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    padding: -1px 25px;
    background: rgba(0,167,155, .85);
}
.btn-default{
    background-color:#fff !important;
    color:#232527 !important;
    box-shadow:none !important;
}
.btn-default:hover{
    background-color:#232527 !important;
    color:#fff !important;
    
}
.widget-image-content-purple {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    padding: -1px 25px;
    background: rgba(155,89,182, .80);
}
.text-light-op, .text-light-op:hover, a.text-light-op, a.text-light-op:hover, a.text-light-op:focus {
    color: rgba(255, 255, 255, .8);
}
h4 {
    padding: 6px !important;
    line-height:1.5em important;
    font-size: 18px !important;
    
}
.text-light, .text-light:hover, a.text-light, a.text-light:hover, a.text-light:focus {
    color: #ffffff;
}
.widget-heading {
    margin: 10px 0;
}
    </style>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>

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
.carousel-control.left span, .carousel-control.right span {
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

        </style>
    </head>
    <?php include './header.php'; ?>
    <body class="home">
        <br><br>
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <p class="methodText">
                    <strong>Bring out the innovator in you - 30 Teams, 24 hours, 15 mentors, 3 ideas, and 1 winner!</strong> Do you have what it takes to be crowned the Best Digital Innovation Team at Digital Summit 2016? Join us at MEANHack ’16 which will be a unique 24 hour hack-a-thon, where 30 students teams will compete against one another to become the best. The event will focus around Cloud and MEAN Stack technologies, where students will have to learn and create a working prototype of one of the 3 ideas that Miracle gives them. The ideas will be focussed on Mobility, Internet of Things, Cloud Computing and Cognitive. 
                </p>
                <h4>Venue, Date and Environment</h4>
                <p class="methodText">
                    MEANHack ’16 will be held at Miracle Heights, Rushikonda which is Miracle’s APAC HQ. Situated on a beautiful hill, with a beautiful view of the Bay of Bengal, you will be treated with a free-style and innovation-encouraging environment. You can choose your area in the location to work, make sure to choose the best for your team! Your lunch, snacks, dinner and more will all be provided by Miracle and we will try and add some fun and games as well to the work. While your dress code is up to you, please do ensure that you wear something that is comfortable and unobtrusive to others in the area. We would like to provide a harassment free area for all the attendees, any negligence to this code of conduct will be treated with punishment.
                </p>
               
                <p class="methodText">
                    The best implementation of the 3 ideas by a team which solves the problem for Miracle will be given the prize for the event, which includes a cash prize of xxx for the winners followed by cool giveaways. 
                </p>
                 <h4>Event Rules and Details</h4> 
                <p class="methodText">
                    <div class="container">
                    <ul>
                        <li>Each team will consist of a minimum of 3 members and a maximum of 4 members – All students will need to be 3rd year (or) 4th year B.Tech</li>
                        <li>All team members will need to bring their own laptop – WIFI, Power and seating area will be provided by Miracle</li>
                        <li>Final 30 teams selection is up to Miracle – Not all teams that are registered will be selected to participate</li>
                        <li>Any detection of plagiarism, misconduct, (or) unlawful behavior will result in the disqualification of the team from the event</li>
                        <li>Each team must participate in the full event – leaving in the middle will render the college and the students ineligible for any future Miracle/AP Cloud programs</li>
                    </ul>
                    </div>
                </p>
                <h4>Scoring and Judging </h4>
                <p class="methodText">
                    The scoring process will not only include your final demonstration but also your overall performance and attitude throughout the event. The following elements will be used to judge your performance and points, 
                    <div class="container">
                    <ul>
                    <li>Code Quality and UI/UX of application </li>
                    <li>Innovation behind the functional idea </li>
                    <li>Percentage of completion towards the problem case</li>
                    <li>Aptness in solving the problem at hand </li>
                    <li>Demo mechanism and presentation speech quality </li>
                    <li>Time/Task/Team Management </li>
                    <li>Overall behavior/attitude of the team </li>
                    </ul>
                    </div>
                </p>
                <h4>Event Schedule</h4>
               <div id="stage"></div>
            </div>
            <div class="col-sm-1"></div>
        </div>
        <br>
        <div class="container">
        <div class="row">
                <div class="col-sm-4">
                    <div class="widget">
                    <div class="widget-image">
                        <img src="images/hackathon/1laptop.png"  />
                        <div class="widget-image-content-blue  clearfix">
                            <br>
                            <a href="javascript:void(0)" class="pull-center">
                                <center><img src="images/hackathon/BusinessIntelligence.png" alt="avatar" class="img-circle img-thumbnail img-thumbnail-avatar-2x" height="150" width="150"> </center>
                            </a><br>
                            <center><h3 class="widget-heading text-light"><strong>Enterprise Mobility</strong></h3></center>
                           <center><h4 class="widget-image-heading text-light-op">Come and build a mobile application that will help Miracle’s Employee interact with facilities teams better through technology. This track will involve technologies such as Ionic, Angular, Sockets, Node JS, Cloudant and more.</h4></center>
                           <center><a href="personality-insights.html"><button type="button" class="btn btn-square btn-default" ><strong>Try it out</strong></button></a></center>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="widget">
                    <div class="widget-image">
                        <img src="images/hackathon/2mountains.png" />
                        <div class="widget-image-content-red  clearfix">
                            <br>
                            <a href="javascript:void(0)" class="pull-center">
                                <center><img src="images/hackathon/CognitiveIoT.png" alt="avatar" class="img-circle img-thumbnail img-thumbnail-avatar-2x" height="150" width="150"> </center>
                            </a><br>
                            <center><h3 class="widget-heading text-light"><strong>Cognitive Computing</strong></h3></center>
                           <center><h4 class="widget-image-heading text-light-op">Come and build a chat bot that will change the way that Miraclites interact with the Innovation Labs team for tasks. This track will involve technologies such as Watson, Node JS, Sockets, APIs, Cloudant, IBM Bluemix and more.</h4></center>
                           <center><button type="button" class="btn btn-square btn-default" ><strong>Try it out</strong></button></center>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="widget">
                    <div class="widget-image">
                        <img src="images/hackathon/3laptopwomen.png"  />
                        <div class="widget-image-content-purple  clearfix">
                            <br>
                            <a href="javascript:void(0)" class="pull-center">
                                <center><img src="images/hackathon/BigData_Analytics.png" alt="avatar" class="img-circle img-thumbnail img-thumbnail-avatar-2x" height="150" width="150"> </center>
                            </a><br>
                            <center><h3 class="widget-heading text-light"><strong>Connected Solutions</strong></h3></center>
                           <center><h4 class="widget-image-heading text-light-op">Come and build a solution that will help Miracle’s Bus Schedule optimization with the help of RFID technology and a very cool dashboard. This track will involve technologies such as Angular, Sockets, Node JS, RFID, IBM Bluemix and more.</h4></center>
                          <center><button type="button" class="btn btn-square btn-default btnright" id="menu-button" ><strong>Try it out</strong></button></center>
                        </div>
                    </div>
                    </div>
                    
                </div>
               
            </div>
            </div>
    </body>
    <?php include './footer.php'; ?>
</html>
