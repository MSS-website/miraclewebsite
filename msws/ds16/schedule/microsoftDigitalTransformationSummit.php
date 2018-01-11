<!-- 
/* ******************************************************************************
*
* Project : The Digital Valley Summit V1
*
* Date    : October10,2016
*
* Author  : Corporate Applicaiton Support Team<hubble@miraclesoft.com>
*
* File    : Agenda.php
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
        <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="" type="image/x-icon">
        <title>Digital Valley Summit</title>


        <?php include '../context.php';?>


    </head>
    <?php include '../header.php'; ?>
    <body class="home">




        <div style="clear:both;" class="clearfix"></div>

        <!-- /Header -->

        <!-- Intro -->

        <div clas="row">
            <!-- TIMER -->

            <!-- end timer-area --> 

        </div>

        <!-- /Intro-->



        <div class="">
            <div style="width:100%;overflow:hidden">    
                <div class="header-bar">
                    <div class="container">
                        <h2 class="text-center"><span class="visuallyhidden">Go's Here</span></h2>
                    </div>
                </div></div>

            
        </div>


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
        <?php include '../footer.php'; ?>
    </body>
</html>
