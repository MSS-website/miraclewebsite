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
        <title>Digital Summit</title>

       
        <link rel="stylesheet" href="../../css/font-awesome.min.css" type="text/css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3./includes/cssfont-awesome.min.css">
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="../includes/css/selectivity-full.css">


        <?php include '../context.php'; ?>

        <?php
        ?>

        <style>

  .current_tabvenu >  a{
                color:#53bce8 !important;
            }
            
           
            div.table-title {
                display: block;
                margin: auto;
                max-width: 600px;
                padding:5px;
                width: 100%;
            }

            .table-title h3 {
                color: #fafafa;
                
                font-weight: 400;
                font-style:normal;
                font-family: "Roboto", helvetica, arial, sans-serif;
                text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
                text-transform:uppercase;
            }



            .table-fill {
                background: white;
                border-radius:3px;
                border-collapse: collapse;
                height: 320px;
                margin: auto;
                max-width: 100%;
                padding:5px;
                width: 100%;
                box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
                animation: float 5s infinite;
                text-align: center !important;
            }

            th {
                color:#D5DDE5;
                background:#1b1e24;
                border-bottom:4px solid #9ea7af;
                border-right: 1px solid #343a45;
                font-size:23px;
                font-weight: 100;
                padding:24px;

                text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
                vertical-align:middle;
            }

            th:first-child {
                border-top-left-radius:3px;
            }

            th:last-child {
                border-top-right-radius:3px;
                border-right:none;
            }

            tr {
                border-top: 1px solid #C1C3D1;
                border-bottom-: 1px solid #C1C3D1;
                color:#666B85;
                font-size:16px;
                font-weight:normal;
                text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);
            }

            tr:hover td {
                background:#4E5066;
                color:#FFFFFF;
                border-top: 1px solid #22262e;
                border-bottom: 1px solid #22262e;
            }

            tr:first-child {
                border-top:none;
            }

            tr:last-child {
                border-bottom:none;
            }

            tr:nth-child(odd) td {
                background:#EBEBEB;
            }

            tr:nth-child(odd):hover td {
                background:#4E5066;
            }

            tr:last-child td:first-child {
                border-bottom-left-radius:3px;
            }

            tr:last-child td:last-child {
                border-bottom-right-radius:3px;
            }

            td {
                background:#FFFFFF;
                padding:20px;

                vertical-align:middle;
                font-weight:300;
                font-size:18px;
                text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
                border-right: 1px solid #C1C3D1;
            }

            td:last-child {
                border-right: 0px;
            }



            th.text-center {
                text-align: center;
            }

            th.text-right {
                text-align: right;
            }



            td.text-center {
                text-align: center;
            }

            td.text-right {
                text-align: right;
            }

            .description{
                padding:30px;



            }

            .agenda-date { width: 170px; }
            .dayofmonth {
                width: 40px;
                font-size: 36px;
                line-height: 36px;
                float: left;
                text-align: right;
                margin-left: 10px; 
            }

            .agenda .agenda-date .shortdate {
                font-size: 0.75em; 
            }




            .lib-panel {
                margin-bottom: 20Px;
            }
            .lib-panel img {
                width: 100%;
                background-color: transparent;
            }

            .lib-panel .row,
            .lib-panel .col-md-6 {
                padding: 0;
                background-color: #FFFFFF;
            }


            .lib-panel .lib-row {
                padding: 0 20px 0 20px;
            }

            .lib-panel .lib-row.lib-header {
                background-color: #FFFFFF;
               
                padding: 0px 20px 0 20px;
            }
            h2{
                margin-top:0 !important;
            }
            .lib-panel .lib-row.lib-header .lib-header-seperator {
                height: 2px;
                width: 26px;
                background-color: #d9d9d9;
                margin: 7px 0 7px 0;
            }

            .lib-panel .lib-row.lib-desc {
                position: relative;
                height: 100%;
                display: block;
                font-size: 13px;
            }
            .lib-panel .lib-row.lib-desc a{
                position: absolute;
                width: 100%;
                bottom: 10px;
                left: 20px;
            }

            .row-margin-bottom {
                margin-bottom: 20px;
            }

            .box-shadow {
                -webkit-box-shadow: 0 0 10px 0 rgba(0,0,0,.10);
                box-shadow: 0 0 10px 0 rgba(0,0,0,.10);
            }

            .no-padding {
                padding: 0;
            }


            .lib-img-show{
                width:200px;
                height: 200px;
            }
            
            .lib-header{
                font-weight: bold;
            }
            .nomargintop{
    margin-top:-15px !important;
}
            .h2-text{
                color:#00aae7;
                font-weight:bold;
            }
            .parallax{
    background-image:url('../images/banner/venue.png');
    background-attachment:fixed;
    background-size:cover;
    background-position:center;
}
.overlay{
    background-color:rgba(0,0,0,0.5);
}
.greyback{
    background-color:#232527;
    padding:10px 15px;
}
.greyback1{
    background-color:#eee;
    padding:10px 15px;
    color:#232527;
}
.methodText{
    text-align: justify !important;
}
        
        .map_container {
            position:relative;
            padding-bottom:74%; /* 16:9 */
            padding-top:125px;
            padding-left:0px;  
            height:0;
            max-width:100%;

}
        .map_container iframe {
            padding-left:0px;    
            position:absolute;
            top:0px;
            bottom:0px;
            left:0;
            width:100%;
            height:98%;
}        
h5 {
    color: #fff!important;
    font-size: 16px !important;
    font-weight: 500;
}
      
        </style>
        <script>
//            $(document).ready(function(){
//                $(".current_tab1 >  a").css("color","#333");
//              
//                $(".current_tab8").css("color","#53bce8");
//                $("#schedule_tab").addClass(".current_tab8");
//                 
//            });        
        </script>
        <script type="text/javascript" src="includes/js/ConfScripts.js"></script>
    </head>
    <?php include '../header.php'; ?>
    <body class="home" onload="getStates()">

        <section class="parallax">
            <div class="overlay">
            <div class="container">
               
            <div class="row" style="margin-top:40px; margin-bottom:45px;">
         
          <div class="col-sm-6 text-left">
             
            <h1 style="color:#fff"><strong>Summit Venues</strong></h1>
          </div>
          <div class="col-sm-6 text-right">
            <ul class="breadcrumb pull-right">
                <li><a href="../"><font color="#fff">Home</font></a></li>
               
                <li class="active"><font color="#fff">Summit Venues</font></li>
            </ul>
          </div>
         
        </div>
        
            </div></div>
        </section>
        <div class="gap" style="line-height: 50px; height: 30px;"></div>

        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    
                    <p class="methodText">
                        The first ever <strong>Digital Summit</strong> was took place at  <strong>Visakhapatnam</strong> this <strong>December</strong> as we celebrated a great year of technology and fun. The event was about 6 days organized at different major venues throughout the week. 
                    </p>                               
                </div>
            </div>
            <div class="row">
                    <br>
                    
                <div class="col-sm-3">
                 <div class="greyback">
                      <h5 style="color:#0d416b"><strong>AU Convocation Hall</strong></h5>
                      
                    </div>
                    <img src="../images/venues/au-convocation.png"></img>
                    <address class="greyback1">
                      <strong>  AU South Campus,
                        HPCL Colony,
                        AU,
                        Visakhapatnam,
                        AP - 530003 </strong>
                    </address>
                </div>
                <div class="col-sm-3">
                <div class="map_container">
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3800.4921269570095!2d83.32022284996489!3d17.721436287819742!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a39434278c3269f%3A0xdb533b8925890d2c!2sConvocation+Hall!5e0!3m2!1sen!2sin!4v1479470286881"frameborder="0" style="border:0;height:98%;" allowfullscreen></iframe> </div>
 
            </div>
                
           
            
            <!--- 2nd row--->
           
               <div class="col-sm-3">
                <div class="greyback">
                     <h5 style="color:#0d416b"><strong>Miracle Heights</strong></h5>
                      
                    </div>
                    <img src="../images/venues/mheights.png"></img>
                    <address class="greyback1">
                      <strong>  Hill No. 1, IT SEZ, Chinna Rushikonda, Visakhapatnam, AP - 530045</strong>
                    </address>
                </div>
                <div class="col-sm-3">
            <div class="map_container "> <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1899.3829925349744!2d83.39513499999998!3d17.802692000000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a395a5c79b2e825%3A0x9b27a2752b51972e!2sMiracle+Heights!5e0!3m2!1sen!2sin!4v1425405223167" style="border:0;height:98%;"></iframe> </div>
 
 
            </div>
            
            </div>
            <br>
            <!----3rd row--->
            <div class="row">
                
                <div class="col-sm-3">
                     <div class="greyback">
                       <h5 style="color:#0d416b"><strong>AU College of Engineering</strong></h5>
                       
                    </div>
                
                    
                    <img src="../images/venues/Au-college.png"></img>
                    <address class="greyback1">
                       
                     <strong>   AU North Campus,
                        Waltair Junction,
                         Visakhapatnam,
                        AP - 530003</strong>
                    </address>
                </div>
                <div class="col-sm-3">
                    <div class="map_container"> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15201.968525374114!2d83.31362993410833!3d17.72143608087237!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a394344ddcad5b9%3A0x2444fb31dbaa10a3!2sAndhra+University!5e0!3m2!1sen!2sin!4v1479470348231" frameborder="0" style="border:0;height:98%;" allowfullscreen></iframe></div>
 

            </div>
            
            
            <!----4th row--->
           <div class="col-sm-3">
                  
                    <div class="greyback">
                      <h5 style="color:#0d416b"><strong>Miracle City</strong></h5>
                    </div>
                    <img src="../images/venues/mcity.jpg"></img>
                    
                    <address class="greyback1">
                       <strong> Munjeru Village, Bhogapuram Mandal, Vizianagaram, AP - 533216</strong>
                    </address>
                </div>
                <div class="col-sm-3">
                    <div class="map_container map-responsive"> 
<iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15178.163255055984!2d83.52767676115036!3d18.000088232167343!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x2020c768a2721344!2sMiracle+Software+Systems!5e0!3m2!1sen!2sin!4v1425385030730"  style="border:0px;">
    
</iframe> </div> 
            </div>
                
              
            
            </div>
            <br>
            <!--- 5th row---->
             <div class="row">
                  
           
                <div class="col-sm-3">
                   <div class="greyback">
                        <h5 style="color:#0d416b"><strong>AU YVS Murty Auditorium</strong></h5>
                    
                    </div>
                    <img src="../images/venues/yvsAuditorium.png"></img>
                    
                    <address class="greyback1">
                       
                    <strong>  AU North Campus, Andhra University, Visakhapatnam, AP - 530003
                   </strong> </address>
                    
                </div>
                <div class="col-sm-3 ">
                    <div class="map_container"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3800.2742144573376!2d83.31836491488122!3d17.731714087873105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a394345dd7e02f7%3A0x53b6776a610788ce!2sYVS+Murthy+Auditorium!5e0!3m2!1sen!2sin!4v1479470194005" frameborder="0" style="border:0;height:98%;" allowfullscreen></iframe></div>
 
            </div>
            </div>
        </div>
        <div style="clear:both;" class="clearfix"></div>

        <!-- /Header -->

        <!-- Intro -->

        
        <!-- Social links. @TODO: replace by link/instructions in template -->
       
        <!-- /social links -->
        <div class="uparrow" id="uparrow"><i class="fa fa-3x fa-angle-up" aria-hidden="true"></i></div>



        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>



        <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.4/waypoints.min.js"></script>



        <!--animate_end-->




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
        <br>
        <?php include '../footer.php'; ?>
    </body>
</html>
