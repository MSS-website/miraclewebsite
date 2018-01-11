<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <?php
        //  require '../config/DbController.php';
        require '../../config/general.php';
        require '../../config/ConnectionProvider.php';


        //$conn = new DbController();
        $resultMessage = '';
        $rdocType = '';
        $pageTitle = '';
        $rDocLongDesc = '';
        $rIndustry = '';
        $rBreadComLabel = '';
        $rAccessType = '';
        $rVideoType = '';
        $videoLink = '';
        $banner = '';
        $spekarsList = '';
        $rPhpFileName = '';
        $videoLinkForSugg = '';
        $primaryTrackId = '';
        $secondaryTrackId = '';
		$tempGatedContent='0';

        try {

            $rvideoId = isset($_GET["videoId"]) ? $_GET["videoId"] : '';
            $ses_VideoId = isset($_GET["sesVideoId"]) ? $_GET["sesVideoId"] : '';
            $ses_Err_Msg = isset($_GET["sesErrMsg"]) ? $_GET["sesErrMsg"] : '';
            $sesAccessType = isset($_GET["sesAccessType"]) ? $_GET["sesAccessType"] : '';

            if ($rvideoId != '') {

                try {

                    $selectQuery = "SELECT DocType,DocTitle,DocLongDesc,Industry,BreadComLabel,AccessType,VideoType,VideoLink,PhpFileName,PrimaryTrackId,SecondaryTrackId,GatedContent FROM tblWebDownloadsLines WHERE Id=:rvideoId";
                    $stmt = $conn->prepare($selectQuery);
                    $stmt->bindParam(':rvideoId', $rvideoId);
                    $stmt->execute();
                    //$result = mysql_query($selectQuery) or die(mysql_error());
                    //$sno = 1;
                    if ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
                        // if (mysql_num_rows($result) > 0) {
                        //   $row = mysql_fetch_row($result);
                        //printf("ID: %s  Name: %s", $row["id"], $row["name"]);
                        //printf("ID: %s  Name: %s", $row["id"], $row["name"]);
                        $rdocType = $row[0];
                        $pageTitle = $row[1];
                        $rDocLongDesc = $row[2];
                        $rIndustry = $row[3];
                        $rBreadComLabel = $row[4];
                        $rAccessType = $row[5];
                        $rVideoType = $row[6];
                        $videoLink = $row[7];
                        $rPhpFileName = $row[8];
                        $primaryTrackId = $row[9];
                        $secondaryTrackId = $row[10];
							
                        $tempConstant = $rvideoId;
                        
                        $tempGatedContent = $row[11];
                        
                        
                        while ($tempConstant > 3)
                            $tempConstant = $tempConstant - 3;

                        if ($rIndustry == 'Retail, Logistics and Supply Chain') {
                            $banner = 'retail-logistics-' . $tempConstant;
                        } else if ($rIndustry = 'Manufacturing and Automotive') {
                            $banner = 'manufacturing-' . $tempConstant;
                        } else if ($rIndustry = 'Healthcare and Pharmacy') {
                            $banner = 'healthcare-' . $tempConstant;
                        } else if ($rIndustry = 'Energy and Utilities') {
                            $banner = 'energy-utilities-' . $tempConstant;
                        } else if ($rIndustry = 'Finance, Banking and Insurance') {
                            $banner = 'finance-banking-' . $tempConstant;
                        }
						

                        // $sno = $sno+1;
                    } else {
                        header('Location: internal-webinar-depot.php?eventId=-1');
                    }
                } catch (Exception $exc) {

                    $exc->getMessage();
                    $resultMessage = '<font color=red size=2px>' . $exc . '</font>';

                    header('Location: ../../back-end-error.php?resultMessage=' . $resultMessage);
                    // $conn->closeConnection(); // closing the connection
                }
                $displayspekarsList = '';
                try {
                    // $conn->connectToDatabase();
                    //  $conn->selectDatabase();
                    //    $selectQuery = "SELECT event_speaker,event_designation,Company FROM tblEventSpeakers WHERE STATUS='Active' AND event_id =". $reventId." ORDER BY primary_speaker DESC";
                    //  $selectQuery = "SELECT SpeakerId,SpeakerName,EventId,ObjectType,PrimaryFlag,Designation,Company,STATUS FROM vwSpeakerList WHERE EventId=" . $reventId . " AND ObjectType = 'EV' ORDER BY PrimaryFlag DESC";
                    $selectQuery = "SELECT SpeakerId,SpeakerName,EventId,ObjectType,PrimaryFlag,Designation,Company,STATUS FROM vwSpeakerList WHERE EventId=:rvideoId AND ObjectType='LB' ORDER BY PrimaryFlag DESC";
                    $stmt = $conn->prepare($selectQuery);
                    $stmt->bindParam(':rvideoId', $rvideoId);

                    //  $result = mysql_query($selectQuery) or die(mysql_error());

                    $sno = 1;
                    $stmt->execute();
                    $stmt->setFetchMode(PDO::FETCH_ASSOC);

                    while ($row = $stmt->fetch()) {
                        //  while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
                        //printf("ID: %s  Name: %s", $row["id"], $row["name"]);
                        // $jobId = $row["Id"];
                        // $displayspekarsList = $displayspekarsList.'<p class="methodText"><strong>'.$row["event_speaker"].'</strong>,'.$row["event_designation"]."</p>";
                        $displayspekarsList = $displayspekarsList . '<strong>' . $row["SpeakerName"] . '</strong><br> ' . $row["Designation"] . '</p><p class="greyText noMargin">' . $row["Company"] . ' <hr>';


                        $spekarsList = $spekarsList . "<b>" . $row["SpeakerName"] . "," . $row["Designation"] . " - " . $row["Company"] . "</b></br>";
                        ?>
                        <?php
                        $sno = $sno + 1;
                    }
                } catch (Exception $exc) {

                    $exc->getMessage();
                    $resultMessage = '<font color=red size=2px>' . $exc . '</font>';
                    // $conn->closeConnection(); // closing the connection
                }
            } else {
                header('Location: external-webinar-depot.php?eventId=-1');
            }
        } catch (Exception $exc) {

            $exc->getMessage();
            $resultMessage = '<font color=red size=2px>' . $exc . '</font>';
            //  $conn->closeConnection(); // closing the connection
        }
        ?>

        <title>
            <?php echo strip_tags($pageTitle); ?>
        </title>
        <?php include '../../config/Locations.php'; ?>
        <link href="../../css/bootstrap.min.css" rel="stylesheet">
        <link href="../../css/font-awesome.min.css" rel="stylesheet">
        <link href="../../css/main.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../../css/default.css" />
        <link rel="stylesheet" type="text/css" href="../../css/component.css" />
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
        <link href="/css/themes.css" rel="stylesheet">
        <link rel="shortcut icon" href="<?= AMAZON_URL ?>/images/favicon.ico">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
        <script type="text/javascript" src="../../js/videoManagementValidations.js">
        </script>
        <script src="../../js/ajaxUtil.js?version=2.2"></script>
        <style>
            .modal-dialog
            {
                overflow:hidden !important;

            }

        </style>
        <style>
            a{text-decoration:none !important;}
            .contact{border: solid 3px #00aae7 !important;border-radius: 3px !important;
                     color: #00aae7 !important;display: inline-block;font-size: 17px;letter-spacing: 1px;
                     margin-bottom: 5px;moz-border-radius: 3px;padding: 11px 59px;transition: all 0.5s ease;
                     webkit-border-radius: 3px;background:#fff;font-weight:bolder;}
            .contact:hover{color:#00aae7;background: #232527;}
            .h4{color:#fff !important; }
            /* Widgets */
            .widget {background-color: #ffffff;margin-bottom: 10px;position: relative;border-radius: 2px;}
            .widget > .widget-content:first-child,.widget > .widget-image:first-child {
                border-top-right-radius: 2px;border-top-left-radius: 2px;}
            .widget > .widget-content:last-child {border-bottom-right-radius: 2px;border-bottom-left-radius: 2px;}
            .widget,.widget-content {display: block;-webkit-transition: all .1s ease-out;
                                     transition: all .1s ease-out;}

            .widget:active,.widget-content:active {text-decoration: none;-webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, .02);
                                                   box-shadow: 0 1px 3px rgba(0, 0, 0, .02);-webkit-transform: translateY(0);transform: translateY(0);}
            .widget-image {height: 310px;overflow: hidden;position: relative;}
            .widget-image > img {min-width: 787px;}
            .widget-image.widget-image-bottom img {position: absolute;left: 0;bottom: 0;}
            .widget-image.widget-image-sm {height: 270px;}
            .widget-image.widget-image-xs {height: 175px;}
            .widget-image > i {position: absolute;right: 30px;bottom: 30px;color: #ffffff;
                               font-size: 70px;opacity: .5;}
            .widget-image-content {position: absolute;top: 0;left: 0;right: 0;bottom: 0;padding: 15px 25px;
                                   background: rgba(0, 0, 0, .65);}
            .widget-content {padding: 1px;}
            .widget-content.widget-content-mini {padding-top: 7px;padding-bottom: 7px;}
            .widget-content.widget-content-full {padding: 0;}
            .widget-content.widget-content-full-top-bottom {padding-top: 0;padding-bottom: 0;}
            .widget-content .pull-left {margin-right: 20px;}
            .widget-content .pull-right {margin-left: 20px;}
            a.widget-content {display: block;}a.widget-content {display: block;}
            .widget-heading {margin: 10px 0;}
            .widget-icon {display: inline-block;width: 64px;height: 64px;line-height: 60px;
                          margin: 5px;font-size: 20px;text-align: center;border-radius: 50%;
                          background: rgba(0, 0, 0, .05);}
            .widget-icon.pull-left {margin: 5px 5px 5px 0;}.widget-icon.pull-right {margin: 5px 0 5px 5px;}
            .widget-icon .gi,.widget-icon .hi,.widget-icon .si,.widget-icon .fi {margin-top: -3px;}
            /* Full Background Image */
            img.full-bg {min-height: 100%;min-width: 1280px;width: 100%;height: auto;
                         position: fixed;top: 0;left: 0;}
            img.full-bg.full-bg-bottom {top: auto;bottom: 0;}
            @media screen and (max-width: 1280px) {img.full-bg {left: 50%;margin-left: -640px;}}
            /* Content which contains floats */
            .content-float .pull-left {margin: 0 20px 20px 0;}
            .content-float .pull-right {margin: 0 0 20px 20px;}
            .content-float-hor .pull-left {margin-right: 20px;}
            .content-float-hor .pull-right {margin-left: 20px;}
            .themed-background {background-color: #00aae7 !important;}
            .themed-color-dark {color: #454e59 !important;}
            .themed-background-dark {
                background-color: #454e59 !important;
            }
            .breadcrumb {
                0px !important;
            }
            .text-dark, .text-dark:hover, a.text-dark, a.text-dark:hover, a.text-dark:focus {
                background-color: #232527;
                color: #fff !important;
            }
            .emerald{
                background-color:#0d416b !important;}


            .micro{
                margin-top:3px !important;
            }
            .footer-nav-links a:hover,
            .footer-nav-links a:focus {
                color: #ffffff;
                background-color: #0d416b;
                -webkit-box-shadow: 0 2px 3px rgba(0, 0, 0, .46);
                box-shadow: 0 2px 3px rgba(0, 0, 0, .46);
            }
            .footer-nav-links a.social-twitter:hover,
            .footer-nav-links a.social-twitter:focus {
                background-color: #55acee!important;
            }
            .footer-nav-links a.social-facebook:hover,
            .footer-nav-links a.social-facebook:focus {
                background-color: #3b5998!important;
            }
            .footer-nav-links a.social-google-plus:hover,
            .footer-nav-links a.social-google-plus:focus {
                background-color: #dd4b39!important;
            }
            .footer-nav-links a.social-dribbble:hover,
            .footer-nav-links a.social-dribbble:focus {
                background-color: #ea4c89!important;
            }
            .footer-nav-links a.social-youtube:hover,
            .footer-nav-links a.social-youtube:focus {
                background-color: #b31217!important;
            }
            .footer-nav-links a.social-flickr:hover,
            .footer-nav-links a.social-flickr:focus {
                background-color: #ed1983!important;
            }
            .footer-nav-links a.social-linkedin:hover,
            .footer-nav-links a.social-linkedin:focus {
                background-color: #0077b5!important;
            }
        </style>
        <style type="text/css">
            .display-1 {font-size: 3rem !important;}
            .card {overflow:hidden;height:100% !important;}
            .card-block .rotate {z-index: 8;float: right;height: 100% !important;}
            .card-block .rotate i{color: rgba(20, 20, 20, 0.15);position:absolute;left:0;
                                  left: auto;right: -10px;bottom: 0;
                                  display: block;-webkit-transform: rotate(-44deg);
                                  -moz-transform: rotate(-44deg);-o-transform: rotate(-44deg);
                                  -ms-transform: rotate(-44deg);transform: rotate(-44deg);
            }

        </style>
        <style>
            a{text-decoration:none !important;}
            .contact{border: solid 3px #00aae7 !important;border-radius: 3px !important;
                     color: #00aae7 !important;display: inline-block;font-size: 17px;letter-spacing: 1px;
                     margin-bottom: 5px;moz-border-radius: 3px;padding: 11px 59px;transition: all 0.5s ease;
                     webkit-border-radius: 3px;background:#fff;font-weight:bolder;}
            .contact:hover{color:#00aae7;background: #232527;}
            .h4{color:#fff !important; }
            /* Widgets */
            .widget {background-color: #ffffff;margin-bottom: 10px;position: relative;border-radius: 2px;}
            box-shadow: 0 1px 3px rgba(0, 0, 0, .02);-webkit-transform: translateY(0);transform: translateY(0);}
            .widget-image {height: 310px;overflow: hidden;position: relative;}
            .widget-image > img {min-width: 787px;}
            .widget-image.widget-image-bottom img {position: absolute;left: 0;bottom: 0;}
            .widget-image.widget-image-sm {height: 270px;}
            .widget-image.widget-image-xs {height: 175px;}
            .widget-image > i {position: absolute;right: 30px;bottom: 30px;color: #ffffff;
                               font-size: 70px;opacity: .5;}
            .widget-image-content {position: absolute;top: 0;left: 0;right: 0;bottom: 0;padding: 15px 25px;
                                   background: rgba(0, 0, 0, .65);}
            .widget-content {padding: 15px;}
            .widget-content > a: {padding: 15px;}
            .widget-content.widget-content-mini {padding-top: 7px;padding-bottom: 7px;}
            .widget-content.widget-content-full {padding: 0;}
            .widget-content.widget-content-full-top-bottom {padding-top: 0;padding-bottom: 0;}
            .widget-content .pull-left {margin-right: 20px;}
            .widget-content .pull-right {margin-left: 20px;}
            .widget-heading {margin: 10px 0;}
            .widget-icon {display: inline-block;width: 64px;height: 64px;line-height: 60px;
                          margin: 5px;font-size: 28px;text-align: center;border-radius: 50%;
                          background: rgba(0, 0, 0, .05);}
            .widget-icon.pull-left {margin: 5px 5px 5px 0;}.widget-icon.pull-right {margin: 5px 0 5px 5px;}
            .widget-icon .gi,.widget-icon .hi,.widget-icon .si,.widget-icon .fi {margin-top: -3px;}
            /* Full Background Image */
            img.full-bg {min-height: 100%;min-width: 1280px;width: 100%;height: auto;
                         position: fixed;top: 0;left: 0;}
            img.full-bg.full-bg-bottom {top: auto;bottom: 0;}
            @media screen and (max-width: 1280px) {img.full-bg {left: 50%;margin-left: -640px;}}
            /* Content which contains floats */
            .content-float .pull-left {margin: 0 20px 20px 0;}
            .content-float .pull-right {margin: 0 0 20px 20px;}
            .content-float-hor .pull-left {margin-right: 20px;}
            .content-float-hor .pull-right {margin-left: 20px;}
            .themed-background {background-color: #00aae7 ;}
            .themed-background-info {
                background-color: #5cafde !important;
            }
            .themed-color-dark {color: #454e59 !important;}
            .themed-background-dark {
                background-color: #454e59 !important;
            }
            .breadcrumb {margin:0px !important;}
            .breadcrumb li,.breadcrumb li a{color:#FFF !important;}
            .text-dark, .text-dark:hover, a.text-dark, a.text-dark:hover, a.text-dark:focus {
                background-color: #232527;
                color:#fff;
            }
            .card {border:0px !important;} 
            .emerald{background-color:#0d416b !important;width:100%;}
            .list-inline {
                margin-left: 0px!important;
                list-style: none;
            }
            .effect:hover{
                top:-5px;
            }
            .response{
                border-radius:50%;}
            .carousel1{
                background-color:#00aae7;
                color:#ffffff;
                padding:50px;
                height:100%;
                width:100%;
            }
            .carousel2{
                background-color:#0d416b;
                color:#ffffff;
                padding:50px;
                height:100%;
                width:100%;
            }
            .carousel3{
                background-color:#232527;
                color:#ffffff;
                padding:50px;
                height:100%;
                width:100%;
            }
            .boxes div {
                display: none;
            }
            .boxes1 div {
                display: none;
            }
            .boxes2 div {
                display: none;
            }
            .btn:hover{
                color:#ffffff;
            }
            .slide {
                overflow: hidden !important;
            }


            .section_bg{
                background: 
                    /* top, transparent red */
                    linear-gradient(
                    rgba(0, 0, 0, 0.55), 
                    rgba(0, 0, 0, 0.55)
                    ),
                    /* your image */
                    url("<?= AMAZON_URL ?>/images/banners/NewIndustries/<?= $banner ?>.png");
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;

            }
        </style>
    </head>
    <!--/head-->
    <?php include '../../header.php'; ?>
    <body>
    
    <input type="hidden" name="isGatedContent" id="isGatedContent" value="<?= $tempGatedContent?>"/>
    
        <script type="text/javascript">
            
            $(document).ready(function()
            { 
                $(document).bind("contextmenu",function(e){
                    return false;
                }); 
            })
            $(window).load(function(){
                var ses_VideoId=document.getElementById("ses_VideoId").value;
                var ses_Err_Msg=document.getElementById("ses_Err_Msg").value;
                var sesAccessType=document.getElementById("sesAccessType").value;
                
                var curr_videoId=document.getElementById("libId").value;

                var curr_isGatedContent=document.getElementById("isGatedContent").value;

                
                //   alert("ses_VideoId--"+ses_VideoId+"--curr_videoId--"+curr_videoId+"--ses_Err_Msg--"+ses_Err_Msg);
                
                if(curr_isGatedContent=='0'){
                    $('#myModal1').modal('hide');
                }
                else if(ses_VideoId==''){
                    $('#myModal1').modal('show');
                }else if(ses_VideoId=='-1' && sesAccessType=='I'){
                    $('#myModal2').modal('show');
                    $("#signUp").removeClass("active");
                    $("#employeeSignin").addClass("active"); 
                    $("#sign-in-for-access").removeClass("active");
                    $("#emplyolee-sign-in").addClass("active"); 
                    document.getElementById("errorMsgDiv").style.display='block';
                    document.getElementById("resultMessage").innerHTML=ses_Err_Msg;
                }else if(ses_VideoId=='-1' && sesAccessType=='E'){
                    $('#myModal2').modal('show');
                    //                    $("#signUp").removeClass("active");
                    //                    $("#employeeSignin").addClass("active"); 
                    //                    $("#sign-in-for-access").removeClass("active");
                    //                    $("#emplyolee-sign-in").addClass("active"); 
                    document.getElementById("errorMsgDivEX").style.display='block';
                    document.getElementById("resultMessageEX").innerHTML=ses_Err_Msg;
                }else if(ses_VideoId!=curr_videoId){
                    $('#myModal1').modal('show');
                }else if(ses_VideoId==curr_videoId){
                    $('#myModal1').modal('hide');
                }
                /*$('.container').addClass('blur'); */
            });
          
            function doSubmit(){
               
            }
        </script>
        <section id="services" class="">

          
            <div class="emerald section_bg">
                <div class=" container">
                    <?php if (strlen($pageTitle) > 42) { ?>
                        <br>
                    <?php } else { ?>
                        <br>
                    <?php } ?>
                    <div class="row">    
                        <div class="col-sm-6 text-left" style="margin-top: 4px;">  
                            <br>
                            <h1 class="micro "><font color="#fff"><strong><?php echo $pageTitle; ?></strong></font></h1>

                        </div>
                        <div class="col-sm-6 text-right">
                            <br><br>
                            <ul class="breadcrumb pull-right">
                                <li><a href="../">Home</a></li>
                                <li><a href="../index.php">Library</a></li>
                                <li><a href=""><?= $rBreadComLabel ?></a></li>


                            </ul>
                        </div>
                    </div>
                </div>

                <br>
                </section>
                <section id="services" class="container">
                    <input type="hidden" name="ses_VideoId" id="ses_VideoId" value="<?= $ses_VideoId ?>"/>
                    <input type="hidden" name="ses_Err_Msg" id="ses_Err_Msg" value="<?= $ses_Err_Msg ?>"/>
                    <input type="hidden" name="acessType" id="acessType" value="<?= $rAccessType ?>"/>
                    <input type="hidden" name="sesAccessType" id="sesAccessType" value="<?= $sesAccessType ?>"/>
                    <input type="hidden" name="objectId" id="objectId" value="7"/>
                    <input type="hidden" name="libId" id="libId" value="<?= $rvideoId ?>"/>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="row">
                                <br>
                                <div class="col-sm-12">

                                    <?php echo $rDocLongDesc; ?> 
                                    <hr>
                                </div>

                            </div>





                            <br>

                            <div class="row"> 
                                <div class=" col-sm-8">
                                    <iframe width="100%" height="350" src="<?= $videoLink; ?>" frameborder="0" allowfullscreen></iframe>
                                </div>
                                <div class="col-sm-4" style="margin-top:-23px;">
                                    <h2 class="heavy">Event Speakers</h2><hr>
                                    <?php echo $displayspekarsList; ?>

                                </div>
                            </div>  
                            <div class="container">
                                <div class="row">
                                    <div class="">
                                        <h1 class="heavy">More Resources</h1>
                                        <p class="methodText">Learn more about how Miracle’s teams have helped organizations improve their test processes through innovative techniques. </p>
                                        <a class="btn btn-danger" href="#scroller" data-slide="prev"><i class="icon-angle-left"></i></a>
                                        <a class="btn btn-danger" href="#scroller" data-slide="next"><i class="icon-angle-right"></i></a>
                                    </div>
                                </div>
                                <br>


                                <?php
                                $displayDivs = '';
                                $myEventids = array();
                                try {
                                    $serialNo = 0;

                                    //  $conn->connectToDatabase();
                                    //  $conn->selectDatabase();
                                    //  $selectQueryy = "SELECT event_id,event_title,event_bold_Title,event_tagline,event_description,event_startdate,STATUS,After_Description,SeriesId,Page_Title FROM tblEventLines WHERE SeriesId=" . $rSeriesId . " AND STATUS !='InActive' AND event_id !=" . $reventId . " ORDER BY event_startdate DESC";
                                    $selectQueryy = "SELECT Id,DocTitle,DocLongDesc,CreatedDate,STATUS,VideoLink,PhpFileName FROM tblWebDownloadsLines WHERE DocType ='Video'  AND STATUS !='InActive' AND Id !=:rvideoId  ORDER BY CreatedDate DESC limit 9";
                                    $stmt = $conn->prepare($selectQueryy);
                                    $stmt->bindParam(':rvideoId', $rvideoId);
                                    $stmt->execute();
//echo "selectQueryy ".$selectQueryy;
                                    //    $result = mysql_query($selectQueryy) or die(mysql_error());
                                    $stmt->setFetchMode(PDO::FETCH_ASSOC);
                                    $serialNo = 0;
                                    // while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
                                    while ($row = $stmt->fetch()) {
                                        $myvalue = strip_tags($row["DocLongDesc"]);

                                        $tempEventId = $row["Id"];
                                        $startDate = date('F d, Y', strtotime($row["CreatedDate"]));
                                        $videoLinkForSugg = $row["VideoLink"];                                          // echo 'hi-->'.$tempEventId;
                                        //echo $myvalue;
//$desc=explode(".",$myvalue); 
                                        $desc = substr($myvalue, 0, 150);
                                        $myDocTitlevalue = strip_tags($row["DocTitle"]);
                                        $tempLength = strlen($myDocTitlevalue);
                                        if ($tempLength > 75) {
                                            $tempDocTitle = substr($myDocTitlevalue, 0, 70) . '...';
                                        } else {
                                            $tempDocTitle = $myDocTitlevalue;
                                        }

                                        // if (getDateDiff($tempEventId) >= 0) {
                                        if ($row["STATUS"] == 'Active') {
                                            $myEventids[] = $row["Id"];
                                            $serialNo = $serialNo + 1;
                                            $displayDivs = $displayDivs . ' <div class="col-sm-4">' . '<div class="portfolio-item">' . '<div class="card">';
                                            $displayDivs = $displayDivs . ' <iframe width="360" height="200" src="' . $videoLinkForSugg . '" frameborder="0" allowfullscreen></iframe> </div>';
                                            $displayDivs = $displayDivs . ' <a class="linkText1" target="_blank"  href="http://www.miraclesoft.com/library/video/' . $row["PhpFileName"] . '">';
                                            $displayDivs = $displayDivs . '<div class="container" style="background-color:#eee; margin-top:-5px;height: 66px;">' . '<p><center><strong>' . $tempDocTitle . '</strong></center></p>' . '</div></a> </div> </div>' . '@#$';
                                        }
                                        if ($serialNo == 9) {
                                            break;
                                        }
                                    }

                                    if ($serialNo < 9) {
                                        $dayDiff = '';


                                        $selectQuerye = "SELECT Id,DocTitle,DocLongDesc,CreatedDate,STATUS,VideoLink FROM tblWebDownloadsLines WHERE DocType ='Video'  AND STATUS !='InActive' AND Id !=:rvideoId ";
                                        if ($primaryTrackId != '' && $secondaryTrackId != '') {
                                            //   $selectQuerye = $selectQuerye . ' AND (PrimaryTrackId=' . $primaryTrackId . ' OR SecondaryTrackId = ' . $secondaryTrackId . ' OR PrimaryTrackId=' . $secondaryTrackId . ' OR SecondaryTrackId = ' . $primaryTrackId . ')';
                                            $selectQuerye = $selectQuerye . ' AND (PrimaryTrackId=:primaryTrackId1  OR SecondaryTrackId = :secondaryTrackId1  OR PrimaryTrackId=:secondaryTrackId2  OR SecondaryTrackId = :primaryTrackId2)';
                                        } else if ($primaryTrackId != '' && $secondaryTrackId == '') {
                                            // $selectQuerye = $selectQuerye . ' AND (PrimaryTrackId=' . $primaryTrackId . ' OR SecondaryTrackId = ' . $primaryTrackId . ')';
                                            $selectQuerye = $selectQuerye . ' AND (PrimaryTrackId=:primaryTrackId1  OR SecondaryTrackId = :primaryTrackId2)';
                                        }
                                        //echo 'selectQuerye---' . $selectQuerye;
                                        $stmt = $conn->prepare($selectQuerye);
                                        $stmt->bindParam(':rvideoId', $rvideoId);
                                        if ($primaryTrackId != '' && $secondaryTrackId != '') {
                                            $stmt->bindParam(':primaryTrackId1', $primaryTrackId);
                                            $stmt->bindParam(':secondaryTrackId1', $secondaryTrackId);
                                            $stmt->bindParam(':secondaryTrackId2', $secondaryTrackId);
                                            $stmt->bindParam(':primaryTrackId2', $primaryTrackId);
                                        } else if ($primaryTrackId != '' && $secondaryTrackId == '') {
                                            $stmt->bindParam(':primaryTrackId1', $primaryTrackId);
                                            $stmt->bindParam(':primaryTrackId2', $primaryTrackId);
                                        }
//                                        if ($primaryTrackId != '' && $secondaryTrackId != '') {
//                                       
                                        $stmt->execute();
                                        //    $num_rows = $stmt->rowCount();
                                        $stmt->setFetchMode(PDO::FETCH_ASSOC);
                                        //  $result = mysql_query($selectQuerye) or die(mysql_error());
                                        //   $sno = 0;
                                        //  while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
                                        while ($row = $stmt->fetch()) {
                                            $myvalue = strip_tags($row["DocLongDesc"]);

                                            $startDate = date('F d, Y', strtotime($row["CreatedDate"]));
                                            //echo $myvalue;
//$desc=explode(".",$myvalue); 
                                            $desc = substr($myvalue, 0, 150);
                                            $myDocTitlevalue = strip_tags($row["DocTitle"]);
                                            $tempLength = strlen($myDocTitlevalue);
                                            if ($tempLength > 75) {
                                                $tempDocTitle = substr($myDocTitlevalue, 0, 70) . '...';
                                            } else {
                                                $tempDocTitle = $myDocTitlevalue;
                                            }



                                            //printf("ID: %s  Name: %s", $row["id"], $row["name"]);
                                            // $jobId = $row["Id"];
                                            // $displayspekarsList = $displayspekarsList.'<p class="methodText"><strong>'.$row["event_speaker"].'</strong>,'.$row["event_designation"]."</p>";
                                            //  $displayspekarsList = $displayspekarsList . '<p class="noMarginBottom"><strong>' . $row["event_speaker"] . '</strong> <BR>' . $row["event_designation"] . '</p><p class="greyText noMargin">' . $row["Company"] . '</p>  <div class="row"><div class="col-sm-7"><hr class="noMarginBottom noMarginTop"></div><div class="col-sm-5"></div></div>';
                                            $isExist = false;


                                            for ($x = 0; $x < sizeof($myEventids); $x++) {

                                                if ($myEventids[$x] == $row["Id"]) {
                                                    $isExist = true;
                                                    break;
                                                }
                                            }
                                            if (!$isExist) {
//if (getDateDiff($row["event_id"]) >= 0) {
                                                if ($row["STATUS"] == 'Active') {
                                                    $myEventids[] = $row["Id"];
                                                    $serialNo = $serialNo + 1;
                                                    $displayDivs = $displayDivs . ' <div class="col-sm-4">' . '<div class="portfolio-item">' . '<div class="card">';
                                                    $displayDivs = $displayDivs . ' <iframe width="360" height="200" src="' . $videoLinkForSugg . '" frameborder="0" allowfullscreen></iframe> </div>';
                                                    $displayDivs = $displayDivs . ' <a class="linkText1" target="_blank"   href="http://www.miraclesoft.com/library/video/' . $row["PhpFileName"] . '">';
                                                    $displayDivs = $displayDivs . '<div class="container" style="background-color:#eee; margin-top:-5px;height: 66px;">' . '<p><center><strong>' . $tempDocTitle . '</strong></center></p>' . '</div></a> </div> </div> </div>' . '@#$';
                                                }
                                            }
                                            if ($serialNo == 9) {
                                                break;
                                            }
                                            ?>
                                            <?php
                                        }
                                    }


                                    $array = explode('@#$', $displayDivs);
                                    // echo 'array size-->'.count($array);

                                    if (count($array) > 0) {
                                        ?> <div class="row">
                                            <div id="scroller" class="carousel slide">
                                                <div class="carousel-inner">

        <?php
        $temprows = 0;
        $initial = true;
        $isClosed = false;
        for ($x = 0; $x < count($array) - 1; $x++) {

            if ($temprows == 0 && $initial) {
                $isClosed = false;
                ?>
                                                            <div class="item active">
                                                                <div class="row">

                <?php
            } else if ($temprows == 0) {
                $isClosed = false;
                ?> <div class="item">
                                                                        <div class="row"><?php
                                                }


                                                echo $array[$x];
                                                $temprows++;
                                                $initial = false;
                                                if ($temprows == 3) {
                                                    $temprows = 0;
                ?>
                                                                        </div>
                                                                    </div>
                <?php
                $isClosed = true;
            }
        }
        if (!$isClosed) {
            ?></div>
                                                        </div><?php
                                                }
                                                ?>

                                                </div>
                                            </div>
                                        </div>

        <?php
    }
} catch (Exception $exc) {

    $exc->getMessage();
    $resultMessage = '<font color=red size=2px>' . $exc . '</font>';
    header('Location: ../../back-end-error.php?resultMessage=' . $resultMessage);
    // $conn->closeConnection(); // closing the connection
}
?>





                                <!--- Start -->






                                <!-- End -->


                                <!--/.row-->
                            </div>




                        </div>

                    </div>
                    <script>

                        var allBoxes = $("div.boxes").children("div");
                        transitionBox1(null, allBoxes.first());


                        function transitionBox1(from, to) {
                            function next() {
                                var nextTo;
                                if (to.is(":last-child")) {
                                    nextTo = to.closest(".boxes").children("div").first();
                                } else {
                                    nextTo = to.next();
                                }
                                to.fadeIn(500, function () {
                                    setTimeout(function () {
                                        transitionBox1(to, nextTo);
                                    }, 4000);
                                });
                            }
    
                            if (from) {
                                from.fadeOut(500, next);
                            } else  {
                                next();
                            }
   
                        }
                    </script>

                    <script>

                        var allBoxes = $("div.boxes1").children("div");
                        transitionBox2(null, allBoxes.first());


                        function transitionBox2(from, to) {
                            function next() {
                                var nextTo;
                                if (to.is(":last-child")) {
                                    nextTo = to.closest(".boxes1").children("div").first();
                                } else {
                                    nextTo = to.next();
                                }
                                to.fadeIn(500, function () {
                                    setTimeout(function () {
                                        transitionBox2(to, nextTo);
                                    }, 4000);
                                });
                            }
    
                            if (from) {
                                from.fadeOut(500, next);
                            } else  {
                                next();
                            }
   
                        }
                    </script>
                    <script>

                        var allBoxes = $("div.boxes2").children("div");
                        transitionBox3(null, allBoxes.first());


                        function transitionBox3(from, to) {
                            function next() {
                                var nextTo;
                                if (to.is(":last-child")) {
                                    nextTo = to.closest(".boxes2").children("div").first();
                                } else {
                                    nextTo = to.next();
                                }
                                to.fadeIn(500, function () {
                                    setTimeout(function () {
                                        transitionBox3(to, nextTo);
                                    }, 4000);
                                });
                            }
    
                            if (from) {
                                from.fadeOut(500, next);
                            } else  {
                                next();
                            }
   
                        }
                    </script>
                    <link rel="stylesheet" href="../../css/box.css">
                    <script src="js/query.js"></script>
                    <script src="js/bootstrap.js"></script>


                    <script src="js/jquery-2.2.0.min.js"></script>
                    <script src="js/bootstrap.min.js"></script>

                    <script src="js/plugins.js"></script>

                    <script src="js/app.js"></script>

                    <br>

                </section>
                <!-- new models start-->

                <div class="modal fade" id="myModal1" tabindex="-1" data-backdrop= "static" data-keyboard= "false">
                    <div class="modal-dialog"  style=" position: static;">
                        <div class="modal-content">
                            <button type="button" class="close" data-dismiss="modal"><i class="icon-xs-o-md"></i></button>
                            <div class="modal-header">


                                <h3 class="modal-title" id="memberModalLabel">
                                    <strong>
                                        <!--Enhanced EDI Transaction Visibility with Miracle's Supply Chain Visibility Portal -->
<?php echo $pageTitle; ?>
                                    </strong>
                                </h3>
                                <hr></div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <div class="input-group">
                                   <!--  <p class="methodText greyText">
                                          Increased visibility into your Supply Chain is a critical strategy for any enterprise aiming at increasing efficiency and optimizing costs. The importance of visibility into your transactional flows only increases when you have global supply chain networks with increasing trading partner numbers. Miracle's Supply Chain Visibility Portal provides complete visibility into your Order-to-Cash and Procure-to-Pay cycles. Through the various roles and modules available in the portal, you can use meaningful and enriched transactional data to track and trace the exchange of your EDI documents. 
                                           </p>
                                          <p class="methodText greyText">
                                           As our B2Bi and MFT experts give able guidance on how our Supply Chain Visibility Portal can help Global Enterprises gain critical visibility and control of their EDI Transactions. A live demo, architectural discussions followed by some great success stories make this a session that you do not want to miss. 
                                          </p> -->
<?php echo $rDocLongDesc; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <hr>
                                <div class="row noMargin">

                                    <div class="col-sm-6"> <a href="../../library/index.php"><button type="button" class="btn btn-primary col-sm-12 "   style="margin-left:-8px;">Go to Library</button></a></div>
                                    <div class="col-sm-6">
                                        <button type="button" class="btn btn-primary col-sm-12" class="md-close" data-toggle="modal" id="accessButton" data-target="#myModal2" data-dismiss="modal">Access</button></div>

                                </div>


                            </div>
                        </div>
                    </div>
                </div>


                <!--MODAL CODE PREV-->

                <!-- [ Modal #2 ] -->
                <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false" data-keyboard="false" data-backdrop="static">
                    <div class="modal-dialog" style=" position: static;">
                        <div class="modal-content">
                            <button type="button" class="close" data-dismiss="modal"><i class="icon-xs-o-md"></i></button>
                            <div class="modal-header">
                                <ul class="nav nav-tabs modal-title">
<?php if ($rAccessType == 'E') { ?>

                                        <li class="active" id="signUp">
                                            <a data-toggle="tab" href="#sign-in-for-access" ><h6><strong>Sign Up </strong></h6></a>
                                        </li>
<?php } ?>
                                    <li id="employeeSignin">
                                        <a data-toggle="tab" href="#emplyolee-sign-in" ><h6><strong>Employee Sign In</strong></h6></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="modal-body noMargin">
                                <div class="tab-content">
<?php if ($rAccessType == 'E') { ?>
                                        <div class="tab-pane active " id="sign-in-for-access">

                                            <br>

                                            <form method="post" action="VideoSignUpDataSubmit.php" id="myForm" >
                                                <div class="row">
                                                    <!--copy 1 from contact first row starts-->
                                                    <input type="hidden" name="videoId" id="videoId" value="<?= $rvideoId ?>"/>
                                                    <input type="hidden" name="phpFileName" id="phpFileName" value="<?= $rPhpFileName ?>"/>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input class="form-control col-sm-12" id="firstname" name="firstname" placeholder="First Name*" required="required" type="text" onchange="fieldLengthValidator(this);">
                                                        </div>

                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input class="form-control col-sm-12" name="lastname" id="lastname" placeholder="Last Name*" required="required" type="text" onchange="fieldLengthValidator(this);">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input class="form-control" placeholder="Organization*" name="organization" id="organization" required="required" type="text" onchange="fieldLengthValidator(this);">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input class="form-control" placeholder="Designation*" name="designation" id="designation" required="required" type="text" onchange="fieldLengthValidator(this);">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input class="form-control" placeholder="Email*" name="email" id="email" required="required" type="text" onchange="return checkResourceEmail(this);">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input class="form-control" placeholder="Work Phone*" name="workPhone" id="workPhone" required="required" type="text" onchange="return formatPhone(this);" onblur="return validatenumber(this)" onkeypress="return isNumberKey(event)">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12"> 
                                                        <div class="alert alert-danger" style="display:none" id="errorMsgDivEX">
                                                            <button type="button" class="close" onclick="closeErrorMsgEx()" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                            <strong><span id="resultMessageEX">Invalid details!!</span></strong> 
                                                        </div>                        
                                                    </div>
                                                </div>
                                                <!--copy 1 from contact first row ends-->
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <button class="btn btn-primary col-sm-12" id="btnSubmit" name="btnSubmit" tabindex="12" type="submit"> Submit </button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </form>


                                            <div class="modal-footer noMargin" >
                                                <p class="methodText greyText">
                                                    The given information will not be used or be distributed to any sources and will be used only for User Authentication. Miracle has copyrights and is authorized to use and circulate all the resources which are being provided to you.
                                                </p> <br>



                                                <div class="row">

                                                    <div class="col-sm-6"><button type="button" class="btn btn-primary col-sm-12" class="md-close" data-toggle="modal" data-target="#myModal1" data-dismiss="modal"><i class="fa fa-arrow-left" ></i> &nbsp; Back to Description</button></div>
                                                    <div class="col-sm-6"><a href="../../library/index.php"><button class="btn btn-primary col-sm-12"> &nbsp; Back To Library <span> <i class="fa fa-arrow-right" ></i> </span></button></a></div>
                                                </div>
                                            </div>
                                        </div>  <!--first tab ends-->
<?php } ?>
                                    <?php if ($rAccessType == 'I') { ?>
                                        <div class="tab-pane active" id="emplyolee-sign-in">
                                    <?php } else { ?>
                                            <div class="tab-pane" id="emplyolee-sign-in">
                                        <?php } ?>
                                            <br>

                                            <form id="employeeLoginForm" method="post" action="EmployeeLoginDataSubmit.php">
                                                <input type="hidden" name="videoIdEmp" id="videoIdEmp" value="<?= $rvideoId ?>"/>
                                                <input type="hidden" name="phpFileNameEmp" id="phpFileNameEmp" value="<?= $rPhpFileName ?>"/>
                                                <p class="methodText">
                                                    You must be a Miraclite to gain access to this. Please validate yourself using your Miracle credentials for further access.
                                                </p> <br>
                                                <div class="row ">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <input class="form-control" id="loginId" name="loginId" placeholder="LoginId*" required="required" type="text" onkeydown="return enableLoginWhenEnter(event);">
                                                        </div>
                                                        <br>
                                                        <div class="form-group">
                                                            <input class="form-control" id="password" name="password" placeholder="Password*" required="required" type="password" onkeydown="return enableLoginWhenEnter(event);">
                                                        </div>
                                                    </div> 
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12"> 
                                                        <div class="alert alert-danger" style="display:none" id="errorMsgDiv">
                                                            <button type="button" class="close" onclick="closeErrorMsg()" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                            <strong><span id="resultMessage">Invalid details!!</span></strong> 
                                                        </div>                        
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <!--<button class="btn btn-primary col-sm-12" >Log In</button>-->
                                                          <!--  <span id="resultMessage"></span>
                                                            <div class="row"><span id="loading" style="display: none"><font color="red" size="3px">Loading please wait...</font></span></div>-->
                                                            <!-- <button class="btn btn-primary col-sm-12" >Log In</button> -->
                                                            <!-- <button type="button" class="btn btn-primary col-sm-12" name="btnLoginSubmit" id="btnLoginSubmit" onclick="doSubmit();">
                                                                 Log In 
                                                             </button> -->
                                                            <button type="submit" class="btn btn-primary col-md-12" data-loading-text="<i class='fa fa-spinner fa-spin '></i> loading..." style="margin-left:2px;" name="btnLoginSubmit" id="btnLoginSubmit" tabindex="3">Login</button>									

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6 noMargin">
                                                        <p class="methodText">Forgot password!<a href="../../forgot-password.php" class="linkText"><strong> Click here.</strong></a></p> 
                                                    </div>
                                                    <div class="col-sm-6"></div>
                                                </div> 
                                            </form> 

                                            <div class="modal-footer">

                                                <div class="row">

                                                    <div class="col-sm-6"><button style="margin-left:-11px;" type="button" class="btn btn-primary col-sm-12" class="md-close" data-toggle="modal" data-target="#myModal1" data-dismiss="modal"><i class="fa fa-arrow-left" ></i> &nbsp; Back to Description</button></div>
                                                    <div class="col-sm-6"><a href="../../library/index.php"><button class="btn btn-primary col-sm-12"> &nbsp; Back To Library  <span> <i class="fa fa-arrow-right" ></i> </span></button></a></div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- new models end-->
                    <!--/#about-us-->
<?php include '../../footer.php'; ?>
                    </body>
                    </html>