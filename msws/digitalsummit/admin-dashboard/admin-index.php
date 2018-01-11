<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>

    <!-- Meta-Information -->
    <title>Digital Summit'17 | Admin </title>
      <?php include '../../config/Locations.php';
 include '../config/DS17Config.php';
 ?>
    <link rel="shortcut icon" href="<?= AMAZON_URL ?>/ds17/admin/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Our Website CSS Styles -->
  <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
  <link rel='stylesheet prefetch'
	href=' https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
	
	 <?php 
    session_start();
    if (isset($_SESSION['SES_DS17_ADMIN_LOGINID']) && $_SESSION['SES_DS17_ADMIN_LOGINID'] != "") {
    	
    } else {
    	header('Location: admin-login.php');
    }
    
    ?>
	
	
<style>
.panel-heading {
    padding: 27px 15px !important;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
}
.side-menu-sec {
    background: #0d1217 none repeat scroll 0 0;
    height: 100%;
    left: 0;
    position: fixed;
    top: 0;
    width: 215px!important;
    
}
.side-menus nav > ul > li > a {
    color: #dadada;
    float: left;
    font-family: Rubik;
    font-size: 17px;
    padding: 8px 27px;
    width: 100%;
}
.side-menu-sec
{
   top:0px!important;
   background:transparent;
}
.panel-content {
    margin-top:0px!important;
}
.main-content{
    margin-top:88px;
}
.side-menus{

height:100%;
}
.breadcrumbs {
    background: #f5f5f5 none repeat scroll 0 0;
    float: left;
    list-style: outside none none;
    margin: 23px 0 0;
    padding: 3px 8px !important;
    width: 100%;
}
</style>
</head>
<body>
<!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Our Website Content Goes Here -->
<header class="simple-normal">
     <div class="top-bar">
          <div class="logo">
               <a href="http://www.miraclesoft.com/" title=""><img src="<?= AMAZON_URL ?>/ds17/admin/images/logo.png" alt="Digital summit" style="height: 50px;">&nbsp; </a>
          </div>
                    <div class="vertical-header">
         <div class="side-menu-sec" style="background:transparent;">
          <div class="side-menus">
               <nav>
                    <ul class="parent-menu">
                         <li class="menu-item-has-children" style="display: inline-flex;margin-top: 20px;">
                              
                                   <span><img class="pull-right"  src="<?= AMAZON_URL ?>/ds17/admin/images/user.png" alt="" / style="margin-right: 30px;"><i class="online"></i></span>
                              <h4 style=" margin-top: 5px;">
                                 <a class="" title="" style="color: #ffffff; font-family:Rubik!important; font-size: 16px!important;">
                                     <?php echo $_SESSION["SES_DS17_ADMIN_FNAME"].' '.$_SESSION["SES_DS17_ADMIN_LNAME"];?> <span style="font-size:13px;position: relative;top: -6px;font-weight:400 !important"><?php echo $_SESSION["SES_DS17_ADMIN_EMAIL"]; ?></span></a></h4>

                         <ul style="list-style-type:none;">
                                    <li style="margin-left: -15px;"><a href="admin-signout.php" title=""><i class="fa fa-sign-out"></i><span style="margin-left: 14px;">Sign Out</span></a></li>
                              </ul>
                         </li>
                      
                    </ul>
               </nav>
                
          </div>
     </div>
     </div>
        
          </div>
       <div class="side-menu-sec" >
           <div class="side-menus" style="margin-top:86px;background: #0d1217 none repeat scroll 0 0;">
               <nav>
                    <ul class="parent-menu"><br>
                     <li>
                              <a href="admin-index.php"><i class="fa fa-home" style="text-align:center;"></i><span>Home</span></a>
                         </li>
                       
                        <li>
                              <a href="admin-techtalks.php"><i class="fa fa-microphone" style="text-align:center;"></i><span>&nbsp;Tech Talks </span></a>
                         </li>
                         <li>
                              <a href="admin-meanhack.php" title=""><i class="fa fa-laptop"></i><span>&nbsp;Citizen Hack</span></a>
                         </li>
                          <li>
                              <a href="admin-hungama.php"><i class="fa fa-music"></i><span>&nbsp;Hungama</span></a>
                         </li>
                         
                         <li>
                              <a href="admin-jobfair.php"><i class="fa fa-at"></i><span>&nbsp;Jobfair</span></a>
                         </li>
                         
                          <li>
                              <a href="admin-partners.php"><i class="fa fa-user"></i><span>&nbsp;Partners</span></a>
                         </li>
                          <li>
                              <a href="admin-contacts.php"><i class="fa fa-phone"></i><span>&nbsp;Contacts</span></a>
                         </li>
                         
                           <li>
                              <a href="http://www.miraclesoft.com/digitalsummit/" target="_blank"><i class="fa fa-book"></i><span>&nbsp;Read More </span></a>
                         </li>
                          <li>
                              <a href="http://www.miraclesoft.com/digitalsummit/"><img class="img-responsive" src="<?= AMAZON_URL ?>/ds17/admin/images/DSWhite-01.svg" height="85px" width="106px"></a>
                         </li>
                    </ul>
               </nav>
                <span class="footer-line">&copy; 2017 <a title="" href="http://www.miraclesoft.com">Miracle Software Systems, Inc.</a></span>
          </div>
     </div>
</header>

<div class="main-content">
    <div id="live-chat">
        
         <div class="chat" style="display:none;">
              <div class="chat-history">
                   <div class="chat-message">
                        <img src="http://placehold.it/40x40" alt="" width="32" height="32" />
                        <div class="chat-message-content">
                             <span class="chat-time">11:54</span>
                             <h5>John Doe</h5>
                             <p>Lorem ipsum dolor. Error, explicabo quasi ratione odio dolorum harum.</p>
                        </div> <!-- end chat-message-content -->
                   </div> <!-- end chat-message -->
                   <div class="chat-message">
                        <img src="http://placehold.it/40x40" alt="" width="32" height="32" />
                        <div class="chat-message-content">
                             <span class="chat-time">12:43</span>
                             <h5>Marco Biedermann</h5>
                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div> <!-- end chat-message-content -->
                   </div> <!-- end chat-message -->
                   <div class="chat-message">
                        <img src="http://placehold.it/40x40" alt="" width="32" height="32" />
                        <div class="chat-message-content">
                             <span class="chat-time">12:23</span>
                             <h5>John Doe</h5>
                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                        </div> <!-- end chat-message-content -->
                   </div> <!-- end chat-message -->
              </div> <!-- end chat-history -->
              <p class="chat-feedback">Your partner is typing… <img src="<?= AMAZON_URL ?>/ds17/admin/images/typing-loading.gif" alt="" /></p>
              <form action="#" method="post">
                   <fieldset>
                        <input type="text" placeholder="Type your message…" autofocus>
                        <input type="hidden">
                   </fieldset>
              </form>
         </div> <!-- end chat -->
    </div> <!-- end live-chat -->
    <div class="panel-content">
        <div class="main-title-sec">
            <div class="row">
                <div class="col-md-3 column">
                    <div class="heading-profile">
                        <h2>Dashboard</h2>
                       
                    </div>
                </div>
            </div>
        </div><!-- Heading Sec -->
        <ul class="breadcrumbs">
          
            <li>December 13th-15th, 2017 Digital Valley(Vizag)</li>
        </ul>
        <!-- Registrants Count Start -->
        <?php include 'count-registraints.php'; ?>
        <!-- Registrants Count end -->
           
        <!--   <div class="row">
                    <div class="col-md-12">
                         <div class="widget">          
                               <div class="row">   
                                   <div class="col-sm-12">
                                        <div class="with-padding">
                                             <div id="graph-wrapper ">
                                                  <div class="graph-info widget-title">
                                                       <a   class="visitors"><span class="red-bg"></span>Unique</a>
                                                       <a   class="returning"><span class="dark-bg"></span>Events</a>
                                                   <a href="#" id="bars" class="graph-tab-btn"><span><i class="fa fa-bar-chart-o"></i></span></a>
                                                       <a href="#" id="lines" class="active graph-tab-btn"><span><i class="fa fa-code-fork"></i></span></a>
                                                     
                                                  </div>
                                                  <div class="graph-containers">
                                                  <span id="loadMessage" style='display: none;'><br><br><br><br><br><br><strong><font color='red' size='3px'>Processing please wait..</font></strong></span>
                                                       <div id="graph-lines"></div>
                                                       <div id="graph-bars"></div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                  
                              </div> 
                         </div>
                    </div>
               </div>
               -->
               <!-- Line chart Start -->
                 <div class="row">
                    <div class="col-md-12">
                         <div class="widget">          
                              <div class="row">   
                                   <div class="col-sm-12">
                                        <div class="with-padding">
                                        <span id="loadMessage" style='display: none;'><strong><font color='red' size='3px'>Processing please wait..</font></strong></span>
                                        
                                           <div id="curve_chart" style="width: 900px; height: 500px"></div>
                                        </div>
                                   </div>
                                  
                              </div>
                         </div>
                    </div>
               </div>  
               <!-- Line chart End -->
               
               
               <!-- Pie chart start -->
           <!--    <div class="col-md-6" style="margin-left:-14px;!important;">
                         <div class="widget">
                              <div class="widget-title">
                                   <h3>Demographic View</h3>
                              </div>
                              <div class="pie-chart-box" >
                                   <div id="chart_div" style="width: 400px; height: 240px;"></div> 
                              </div>
                         </div>
                    </div>
                    -->
                      <div class="col-md-6" style="margin-left:-14px;!important;">
                         <div class="widget">
                              <div class="widget-title">
                                   <h3>Demographic View</h3>
                              </div>
                              <div class="pie-chart-box" >
                                   <div id="pieChart" class="chart"><svg style="display:none !important;" width="501" height="330" viewBox="0 0 501 330" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><circle cx="250.5" cy="165" r="150" fill="#fff"></circle><g opacity="0.9999998780673678"><g data-order="0" class="pieSegmentGroup"><path stroke-width="1" stroke="#fff" stroke-miterlimit="2" fill="#a79bfd" class="pieSegment" d="M 250.5 30 A 135 135 0 0 1 258.584597661351 299.7577058303312 L 250.5 165 Z"></path><path stroke-width="1" stroke="#fff" stroke-miterlimit="2" fill="#a79bfd" opacity="0.3" class="lightPie" d="M 250.5 18 A 147 147 0 0 1 259.3032285645822 311.7361685708051 L 250.5 165 Z" style="opacity: 0.3;"></path></g><g data-order="1" class="pieSegmentGroup"><path stroke-width="1" stroke="#fff" stroke-miterlimit="2" fill="#a79bfd" class="pieSegment" d="M 258.584597661351 299.7577058303312 A 135 135 0 0 1 139.34674282560297 241.61562124999284 L 250.5 165 Z"></path><path stroke-width="1" stroke="#fff" stroke-miterlimit="2" fill="#a79bfd" opacity="0.3" class="lightPie" d="M 259.3032285645822 311.7361685708051 A 147 147 0 0 1 129.4664532989899 248.42589869443665 L 250.5 165 Z" style="opacity: 0.3;"></path></g><g data-order="2" class="pieSegmentGroup"><path stroke-width="1" stroke="#fff" stroke-miterlimit="2" fill="#a79bfd" class="pieSegment" d="M 139.34674282560297 241.61562124999284 A 135 135 0 0 1 119.78158169341793 131.27026363243505 L 250.5 165 Z"></path><path stroke-width="1" stroke="#fff" stroke-miterlimit="2" fill="#a79bfd" opacity="0.3" class="lightPie" d="M 129.4664532989899 248.42589869443665 A 147 147 0 0 1 108.16216673283287 128.27206484420705 L 250.5 165 Z"></path></g><g data-order="3" class="pieSegmentGroup"><path stroke-width="1" stroke="#fff" stroke-miterlimit="2" fill="#a79bfd" class="pieSegment" d="M 119.78158169341793 131.27026363243505 A 135 135 0 0 1 153.2197503155769 71.39683220458669 L 250.5 165 Z"></path><path stroke-width="1" stroke="#fff" stroke-miterlimit="2" fill="#a79bfd" opacity="0.3" class="lightPie" d="M 108.16216673283287 128.27206484420705 A 147 147 0 0 1 144.57261701029483 63.076550622772174 L 250.5 165 Z" style="opacity: 0.3;"></path></g><g data-order="4" class="pieSegmentGroup"><path stroke-width="1" stroke="#fff" stroke-miterlimit="2" fill="#575757" class="pieSegment" d="M 153.2197503155769 71.39683220458669 A 135 135 0 0 1 190.29481239161314 44.16815243885847 L 250.5 165 Z"></path><path stroke-width="1" stroke="#fff" stroke-miterlimit="2" fill="#575757" opacity="0.3" class="lightPie" d="M 144.57261701029483 63.076550622772174 A 147 147 0 0 1 184.94324015975653 33.427543766757 L 250.5 165 Z" style="opacity: 0.3;"></path></g><g data-order="5" class="pieSegmentGroup"><path stroke-width="1" stroke="#fff" stroke-miterlimit="2" fill="#a79bfd" class="pieSegment" d="M 190.29481239161314 44.16815243885847 A 135 135 0 0 1 234.35982469029736 30.96830695327293 L 250.5 165 Z"></path><path stroke-width="1" stroke="#fff" stroke-miterlimit="2" fill="#a79bfd" opacity="0.3" class="lightPie" d="M 184.94324015975653 33.427543766757 A 147 147 0 0 1 232.925142440546 19.05437868245275 L 250.5 165 Z" style="opacity: 0.3;"></path></g><g data-order="6" class="pieSegmentGroup"><path stroke-width="1" stroke="#fff" stroke-miterlimit="2" fill="#303030" class="pieSegment" d="M 234.35982469029736 30.96830695327293 A 135 135 0 0 1 250.49989657308123 30.00000000003962 L 250.5 165 Z"></path><path stroke-width="1" stroke="#fff" stroke-miterlimit="2" fill="#303030" opacity="0.3" class="lightPie" d="M 232.925142440546 19.05437868245275 A 147 147 0 0 1 250.49988737957733 18.000000000043144 L 250.5 165 Z"></path></g></g></svg></div> 
                              </div>
                         </div>
                    </div>
                    
                    
                    <!-- Pie chart end -->
                    
                    <!-- Location wise registraints start -->
             <?php    $Query = "SELECT COUNT(Id),District FROM tblDs17Users GROUP BY District";
$stmt = $conn->prepare($Query);
$stmt->execute();


?>
                    <div class="col-sm-6">
                    <div class="visit-table">
                    <ul>
                    <li class="table-head"><h2 class="location">Location</h2><h2 class="visit">Registrants</h2></li>
                   <?php  while($row = $stmt->fetch()) { ?>
                    	<li><span class="location"><img src="<?= AMAZON_URL ?>/ds17/admin/images/resource/us-flag.jpg" alt=""><?php echo $row['District']; ?></span><i class="visit"><?php echo $row['COUNT(Id)']; ?></i></li>
                 <?php  } ?>
                   
                    </ul>
                    </div>
                    </div>
                    
                    <!-- Location wise registraints end -->
                    
    </div><!-- Panel Content -->
</div>

               

<!-- Vendor: Javascripts -->
<script src="js/jquery-2.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="https://maps.google.com/maps/api/js?key=AIzaSyDrlCWSCEGTYat1yFIybvtjXe6v24wXY04" 
        async="" 
        type="text/javascript">
</script>


<script src="js/app.js"></script>
<script src="js/common.js"></script>
<script src="js/chart.js"></script>


<!--  piec hart scripts start -->

	<!--  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> -->
	  <script type="text/javascript" src="js/loader.js"></script>
	  <!-- Line chart start -->
          <script src="js/adminlinecharts.js"></script> 
        <!-- Line chart end -->
        
	<!--   <script type="text/javascript" src="js/piechart.js"></script>
	  
	   <script type="text/javascript" src="https://www.google.com/jsapi"></script> 
       <script language="JavaScript">
            google.load("visualization", "1", {packages:["corechart"]});   
        
        </script> -->
        
        <!--  piec hart scripts end -->
       
       
       <!-- Our Website Javascripts -->

</body>
</html>