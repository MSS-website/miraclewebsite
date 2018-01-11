<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="description">
        <meta content="" name="author">
        <title>
            Library | Miracle
        </title>
        <?php include '../config/Locations.php'; ?>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/font-awesome.min.css" rel="stylesheet">
        <link href="../css/main.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link href="../css/default.css" rel="stylesheet" type="text/css">
        <link href="../css/component.css" rel="stylesheet" type="text/css">
        <script src="../js/modernizr.custom.js"></script><!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?= AMAZON_URL ?>/images/favicon.ico" rel="shortcut icon">
        <script type="text/javascript">
            $(document).ready(function () {
                //Disable full page
                $("body").on("contextmenu",function(e){
                    return false;
                });
    
                //Disable part of page
                $("#id").on("contextmenu",function(e){
                    return false;
                });
            });
        </script>
        <script>
            function doSubmit(){
                document.forms["myForm"].submit();    
            }
            
            function enableSearchEnter(e) {
                var keynum;
                var keychar;
                var numcheck;
    
                if(window.event) {
                    keynum = e.keyCode;
                }
                else if(e.which) // Netscape/Firefox/Opera
                {
                    keynum = e.which;
                }
                try{
                    if(keynum==13){
                        doSubmit();
                        return false;
                    }
                }catch(e){
                    alert("Error"+e);
                }
            }
        </script>
        <style>
            .pagination{
                border: 1px solid #b7b2b3;
                border-radius: 0.25em;
            }
        </style>
        <?php
        include '../config/general.php';
        // require '../config/DbController.php';
        require '../config/ConnectionProvider.php';

        $libraryId = isset($_GET["refId"]) ? $_GET["refId"] : '';
        $flag = isset($_GET["flag"]) ? $_GET["flag"] : null;
        //   echo "flag-->".$flag;
        $rtrackName = '';
        $rtrackId = '';
        $rdocType = '';
        $rindustry = '';
        $queryString = '';
        $rkeyWords = '';
        if (isset($_POST['btnJobSubmit'])) {
            // echo 'hii';
            $libraryId = '';
            try {
                // $conn->connectToDatabase();

                if (!get_magic_quotes_gpc()) {


                    $rtrackId = addslashes($_POST['trackName']);
                    $rdocType = addslashes($_POST['docType']);
                    $rindustry = addslashes($_POST['industry']);
                    $rkeyWords = addslashes($_POST['keyWords']);
                } else {

                    $rtrackId = $_POST['trackName'];
                    $rdocType = $_POST['docType'];
                    $rindustry = $_POST['industry'];
                    $rkeyWords = $_POST['keyWords'];
                }

                $queryString = 'SELECT Id,DocTitle,DocType,DocLongDesc,DateOfPublish,SourceLink FROM tblWebDownloadsLines WHERE Status = \'Active\' AND AccessType!=\'I\' ';
                if ($rtrackId != '') {
                    // $queryString = $queryString.' AND (PrimaryTrackId='.$rtrackId.' OR SecondaryTrackId='.$rtrackId.') ';
                    $queryString = $queryString . ' AND (PrimaryTrackId=:primarytrackId OR SecondaryTrackId=:secondarytrackId OR PrimaryTrackId=-1 OR SecondaryTrackId=-1) ';
                }if ($rdocType != '-1') {
                    //$queryString = $queryString . ' AND DocType=\'' . $rdocType . '\'';
                    $queryString = $queryString . ' AND DocType=:doctype';
                }
                if ($rindustry != '') {
                    // $queryString = $queryString.' AND Industry = \''.$rindustry.'\'';
                    //$queryString = $queryString . ' AND Industry =:industry';
                       $queryString = $queryString . " AND (Industry =:industry OR Industry='Cross Industry')";
                }

                if ($rkeyWords != '') {
                    //$queryString = $queryString.' AND (MATCH(DocType,DocTitle,DocLongDesc)  AGAINST (\''.$rkeyWords.'\' IN BOOLEAN MODE) )';
                    //$queryString = $queryString.' AND (MATCH(DocTitle,DocName,DocLongDesc,BodyContent,BreadComLabel,PhpFileName)  AGAINST (\''.$rkeyWords.'\' IN BOOLEAN MODE) )';
                    $queryString = $queryString . ' AND (MATCH(DocTitle,DocName,DocLongDesc,BodyContent,BreadComLabel,PhpFileName)  AGAINST (:keywords IN BOOLEAN MODE) )';
                    //MATCH(SkillsetUtilized,SkillSet,ProjectInfo)  AGAINST ('"+getSkills()+"' IN BOOLEAN MODE
                    // $queryString = $queryString.' AND TrackName LIKE \'%'.$rkeyWords.'%\' OR DocType LIKE \'%'.$rkeyWords.'%\' OR DocTitle LIKE  \'%'.$rkeyWords.'%\' OR DocLongDesc  ';
                }
                $queryString = $queryString . ' ORDER BY DateOfPublish DESC ';
            } catch (Exception $exc) {

                $exc->getMessage();
                $resultMessage = '<font color=red size=2px>' . $exc . '</font>';
                //  $conn->closeConnection(); // closing the connection
                //    mysql_close();
            }
        }
        ?>
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
                    url("<?= AMAZON_URL ?>/images/banners/library.png");
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                
            }



        </style>
    </head><!--/head-->
    <?php include '../header.php'; ?>
    <body>
        <input type ="hidden" name="libraryId" id="libraryId" value="<?= $libraryId ?>"/> 
        <script type="text/javascript">
           
            $('#myModal').modal({backdrop: 'static'}) 
            $(window).load(function(){
                if(document.getElementById("libraryId").value!=''){
                    $('#myModal1').modal('show');
                }
            });
            // }
  
        </script>

        <div class="modal" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
            <div class="modal-dialog " style="margin-left: -280px;">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title" id="memberModalLabel"><strong>Thank You</strong> </h4><hr>
                            </div>

                            <div class="modal-body"> 

                                <p class="methodText"> Thank you for showing interest in our expertise. The link for the resource that you have requested has been sent to your email ID.</p>
                                <div class="modal-footer">     
                                    <div class="row">
                                        <div class="col-sm-4"> 

                                        </div>

                                        <div class="col-sm-4"></div>      
                                        <div class="col-sm-4">
                                            <button type="submit" tabindex="3" class="btn btn-primary col-sm-12" data-dismiss="modal" name="btnSubmit" id="btnSubmit">
                                                Okay
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div><!-- /.modal-content -->
            </div>
            <section>
                <div class="overlay section_bg">
                    <div class=" container">
                        
                        <div class="row">    
                            <div class="col-sm-7 text-left">  
                                <br><br>
                                <h1 class="micro "><font color="#fff"><strong>Knowledge Center</strong></font></h1>

                            </div>
                            <div class="col-sm-5 text-right">
                                <br><br>
                                <ul class="breadcrumb pull-right">
                                    <li><a href="../../">Home</a></li>
                                    <!-- Breadcrumb div starts here --> 
                                    <li class="active">Library</li>
                                    <!-- Breadcrumb div Ends here --> 
                                </ul>
                            </div>
                        </div><br>
                    </div>
                </div>

            </section>
            <section class="container">
                <br>
                <!--                <br>
                                <br>
                                <br>
                                <div class="row">
                                    <div class="col-sm-7 text-left">
                                        <h1 class="heavy" style="margin-left:-15px;">
                                            Knowledge Center
                                        </h1>
                                    </div>
                                    <div class="col-sm-5 text-right">
                                        <ul class="breadcrumb pull-right">
                                            <li>
                                                <a href="../">Home</a>
                                            </li>
                                            <li class="active">Library
                                            </li>
                                        </ul>
                                    </div>-->
                <br>
                <!--                <br>
                                <br>
                                <br>-->

                <div class="tab-content">
                    <form method="post" action="<?php $_PHP_SELF ?>" id="myForm" name="myForm">
                        <div class="row">
                            <div class="col-sm-3">
                                <select class="form-control" name="trackName" id="trackName" onkeydown="return enableSearchEnter(event);">
                                    <!--  <option disabled selected value="default"> -->
                                    <?php if ($rtrackId == '') { ?>
                                        <option value="" selected>
                                        <?php } else { ?>
                                        <option value="">
                                        <?php } ?>
                                        Search by Track
                                    </option>
                                    <?php
//  $conn = new DbController();
//     try {
// $conn->connectToDatabase();
// $conn->selectDatabase();
// $query="SELECT DISTINCT TrackName FROM tblWebDownloadsLines WHERE TrackName != ''";
                                    $query = "SELECT Id,TrackName FROM tbLKTrackNames WHERE TrackName != '' AND TrackType='E' AND STATUS='Active' AND Id!='-1' ORDER BY TrackName";
// $result = mysql_query($query) or die(mysql_error());
                                    $stmt = $conn->prepare($query);
                                    $stmt->execute();
                                    $stmt->setFetchMode(PDO::FETCH_ASSOC);

                                    while ($row = $stmt->fetch()) {
                                        //  while ($row=mysql_fetch_array($result)) {

                                        $dtrackName = $row['TrackName'];
                                        $dtrackID = $row['Id'];
                                        if ($rtrackId == $dtrackID) {

                                            echo "<option value=\"$dtrackID\" selected>$dtrackName</option>";
                                        } else {

                                            echo "<option value=\"$dtrackID\">$dtrackName</option>";
                                        }
                                    }
                                    ?> 

                                </select>
                            </div>
                            <div class="col-sm-3">
                                <select class="form-control" name="docType" id="docType" onkeydown="return enableSearchEnter(event);">
                                    <?php if ($rdocType == '-1') { ?>
                                        <option value="-1" selected>
                                        <?php } else { ?>
                                        <option value="-1">
                                        <?php } ?>
                                        Search by Type
                                    </option>
                                    <?php
                                    // $conn = new DbController();
                                    //     try {
                                    //$conn->connectToDatabase();
                                    // $conn->selectDatabase();
                                    $query = "SELECT DISTINCT DocType FROM tblWebDownloadsLines WHERE DocType != '' ORDER BY DocType";
                                    //   $result = mysql_query($query) or die(mysql_error());
                                    $stmt = $conn->prepare($query);
                                    $stmt->execute();
                                    $stmt->setFetchMode(PDO::FETCH_ASSOC);

                                    while ($row = $stmt->fetch()) {
                                        // while ($row=mysql_fetch_array($result)) {

                                        $ddoctype = $row['DocType'];
                                        if ($flag == 'success') {
                                            if ($rdocType == '') {
                                                $rdocType = 'Case Study';
                                            }
                                        }
                                        if ($rdocType == $ddoctype) {

                                            echo "<option value=\"$ddoctype\" selected>$ddoctype</option>";
                                        } else {

                                            echo "<option value=\"$ddoctype\">$ddoctype</option>";
                                        }
                                    }
                                    ?> 
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <select class="form-control" name="industry" id="industry" onkeydown="return enableSearchEnter(event);">
                                    <?php if ($rindustry == '') { ?>
                                        <option value="" selected>
                                        <?php } else { ?>
                                        <option value="">
                                        <?php } ?>
                                        Search by Industry
                                    </option>
                                    <?php
                                    //  $conn = new DbController();
                                    //     try {
                                    // $conn->connectToDatabase();
                                    //   $conn->selectDatabase();
                                   // $query = "SELECT DISTINCT Industry FROM tblWebDownloadsLines WHERE Industry != '' ORDER BY Industry";
                                   $query = "SELECT DISTINCT Industry FROM tblWebDownloadsLines WHERE Industry != '' AND Industry != 'Cross Industry' ORDER BY Industry";
                                    //  $result = mysql_query($query) or die(mysql_error());
                                    $stmt = $conn->prepare($query);
                                    $stmt->execute();
                                    $stmt->setFetchMode(PDO::FETCH_ASSOC);

                                    while ($row = $stmt->fetch()) {
                                        // while ($row=mysql_fetch_array($result)) {

                                        $dindustry = $row['Industry'];
                                        if ($rindustry == $dindustry) {

                                            echo "<option value=\"$dindustry\" selected>$dindustry</option>";
                                        } else {

                                            echo "<option value=\"$dindustry\">$dindustry</option>";
                                        }
                                    }
                                    ?> 

                                </select>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">

                                    <div class="input-group">

                                        <?php if ($rkeyWords == '') { ?>
                                            <input class="form-control" placeholder="Enter Key Words" type="text" name="keyWords" id="keyWords" onkeydown="return enableSearchEnter(event);"><span class="input-group-btn"><span class="btn btn-primary btn-file"><input type="siv" onclick="doSubmit();" name="btnJobSubmit" id="btnJobSubmit"> Search&hellip;</span></span> 
                                        <?php } else { ?>
                                            <input class="form-control" placeholder="Enter Key Words" type="text" name="keyWords" id="keyWords" value="<?php echo $rkeyWords ?>" onkeydown="return enableSearchEnter(event);"> <span class="input-group-btn"><span class="btn btn-primary btn-file"><input type="siv" onclick="doSubmit();" name="btnJobSubmit" id="btnJobSubmit">Search&hellip;</span></span> 
                                        <?php } ?>
                                        <!-- <button type="submit" tabindex="13" class="btn btn-primary" name="btnJobSubmit" id="btnJobSubmit">Search&hellip;</button>   -->
                                    </div>

                                </div>
                            </div>
                        </div>
                    </form>

                    <?php

                    function getSpeakers($videoId) {
                        $speakers = '';
                        require '../config/ConnectionProvider.php';
                        try {
                            $selectQuery = "SELECT SpeakerId FROM tblEventSpeakers WHERE event_id = :webinarId AND primary_speaker=1 AND STATUS='Active'";
                            // echo 'spekares-->'.$selectQuery;
                            $stmt = $conn->prepare($selectQuery);
                            $stmt->bindParam(':webinarId', $videoId);
                            $stmt->execute();
                            $countSpeakers = $stmt->rowCount();
                        } catch (Exception $exc) {

                            $exc->getMessage();
                            $resultMessage = '<font color=red size=2px>' . $exc . '</font>';
                            header('Location: ../back-end-error.php?resultMessage=' . $resultMessage);
                            // $conn->closeConnection(); // closing the connection
                        }


                        return $countSpeakers;
                    }

                    $jobId = '';
                    $pageNo = 1;
                    //$conn = new DbController();

                    try {
                        //   $conn->connectToDatabase();
                        //  $conn->selectDatabase();

                        if ($queryString == '') {
                            if ($flag == 'success') {
                                $selectQuery = "SELECT Id,DocTitle,DocType,DocLongDesc,DateOfPublish,SourceLink FROM tblWebDownloadsLines WHERE DocType='Case Study' AND Status = 'Active' ORDER BY DateOfPublish DESC";
                            } else {
                                $selectQuery = "SELECT Id,DocTitle,DocType,DocLongDesc,DateOfPublish,SourceLink FROM tblWebDownloadsLines WHERE Status = 'Active' AND AccessType!='I' ORDER BY DateOfPublish DESC";
                            }
                            $stmt = $conn->prepare($selectQuery);
                        } else {
                            $selectQuery = $queryString;
                            $stmt = $conn->prepare($selectQuery);
                            if ($rtrackId != '') {
                                $stmt->bindParam(':primarytrackId', $rtrackId);
                                $stmt->bindParam(':secondarytrackId', $rtrackId);
                            }
                            if ($rdocType != '-1')
                                $stmt->bindParam(':doctype', $rdocType);
                            if ($rindustry != '')
                                $stmt->bindParam(':industry', $rindustry);
                            if ($rkeyWords != '')
                                $stmt->bindParam(':keywords', $rkeyWords);
                        }


                        //   echo 'queryString-->'.$selectQuery;
                        //$selectQuery = "SELECT Id,DocTitle,DocType,DocLongDesc,CreatedDate FROM tblWebDownloadsLines WHERE DownloadFlag=1 ORDER BY CreatedDate DESC LIMIT 6";
                        //$result = mysql_query($selectQuery) or die(mysql_error());
                        // $result = mysql_query($selectQuery);
                        $sno = 0;
                        $initial = 0;
                        $pageJobs = 0;
                        $pageJobClosed = false;
                        $isClosed = false;
                        //$stmt = $conn->prepare($selectQuery);
                        $stmt->execute();
                        $stmt->setFetchMode(PDO::FETCH_ASSOC);

                        while ($row = $stmt->fetch()) {
                            $count = 0;
                            if ($row["DocType"] == 'Video') {
                                $count = getSpeakers($row["Id"]);
                                if ($count > 0) {
                                    // while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {

                                    $myvalue = strip_tags($row["DocLongDesc"]);


                                    //echo $myvalue;
//$desc=explode(".",$myvalue); 
                                    $desc = substr($myvalue, 0, 150);
//echo $desc;
                                    //printf("ID: %s  Name: %s", $row["id"], $row["name"]);



                                    if ($pageJobs == 0 && $sno == 0) {
                                        $pageJobClosed = false;
                                        ?>
                                        <div class="tab-pane active" id="page<?= $pageNo ?>"> <hr>
                                            <?php
                                        } else if ($pageJobs == 0) {
                                            $pageJobClosed = false;
                                            ?><div class="tab-pane" id="page<?= $pageNo ?>"> <hr><?php
                    }
                    if ($initial == 0) {
                        $isClosed = false;
                                            ?>
                                                <!-- 3 jobs row start -->

                                                <div class="row">
                                                <?php } ?>
                                                <!-- Article Listing starts here -->
                                                <div class="col-sm-4">
                                                    <p class="heavy greyText noMargin">
                                                        <?php echo $row["DocType"]; ?>
                                                    </p>
                                                    <h5 class="heavy noMargin">
                                                        <a href="..<?php echo $row["SourceLink"]; ?>"><?php echo $row["DocTitle"]; ?></a>
                                                    </h5>
                                                    <div class="row">
                                                        <div class="col-sm-6 noMargin">
                                                            <hr>
                                                        </div>
                                                    </div>
                                                    <p class="noMargin">
                                                        <?php echo $desc . '... | '; ?><br> <a class="linkText heavy" href="..<?php echo $row["SourceLink"]; ?>">Read More</a>
                                                    </p>
                                                    <p class="greyText noMargin">
                                                        <?php echo date('F d , Y', strtotime($row["DateOfPublish"])); ?>
                                                    </p>
                                                </div>

                                                <?php
                                                $initial = $initial + 1;
                                                $pageJobs = $pageJobs + 1;
                                                if ($initial == 3) {
                                                    $initial = 0;
                                                    $isClosed = true;
                                                    ?>
                                                </div>
                                                <?php
                                            }
                                            if ($pageJobs == 9) {
                                                $pageNo++;
                                                $pageJobs = 0;
                                                $pageJobClosed = true;
                                                ?>
                                            </div>
                                            <?php
                                        }
                                        $sno = $sno + 1;
                                    }
                                } else {
                                    $myvalue = strip_tags($row["DocLongDesc"]);


                                    //echo $myvalue;
//$desc=explode(".",$myvalue); 
                                    $desc = substr($myvalue, 0, 150);
//echo $desc;
                                    //printf("ID: %s  Name: %s", $row["id"], $row["name"]);



                                    if ($pageJobs == 0 && $sno == 0) {
                                        $pageJobClosed = false;
                                        ?>
                                        <div class="tab-pane active" id="page<?= $pageNo ?>"> <hr>
                                            <?php
                                        } else if ($pageJobs == 0) {
                                            $pageJobClosed = false;
                                            ?><div class="tab-pane" id="page<?= $pageNo ?>"> <hr><?php
                        }
                        if ($initial == 0) {
                            $isClosed = false;
                                            ?>
                                                <!-- 3 jobs row start -->

                                                <div class="row">
                                                <?php } ?>
                                                <!-- Article Listing starts here -->
                                                <div class="col-sm-4">
                                                    <p class="heavy greyText noMargin">
                                                        <?php echo $row["DocType"]; ?>
                                                    </p>
                                                    <h5 class="heavy noMargin">
                                                        <a href="..<?php echo $row["SourceLink"]; ?>"><?php echo $row["DocTitle"]; ?></a>
                                                    </h5>
                                                    <div class="row">
                                                        <div class="col-sm-6 noMargin">
                                                            <hr>
                                                        </div>
                                                    </div>
                                                    <p class="noMargin">
                                                        <?php echo $desc . '... | '; ?><br> <a class="linkText heavy" href="..<?php echo $row["SourceLink"]; ?>">Read More</a>
                                                    </p>
                                                    <p class="greyText noMargin">
                                                        <?php echo date('F d , Y', strtotime($row["DateOfPublish"])); ?>
                                                    </p>
                                                </div>

                                                <?php
                                                $initial = $initial + 1;
                                                $pageJobs = $pageJobs + 1;
                                                if ($initial == 3) {
                                                    $initial = 0;
                                                    $isClosed = true;
                                                    ?>
                                                </div>
                                                <?php
                                            }
                                            if ($pageJobs == 9) {
                                                $pageNo++;
                                                $pageJobs = 0;
                                                $pageJobClosed = true;
                                                ?>
                                            </div>
                                            <?php
                                        }
                                        $sno = $sno + 1;
                                    }
                                }

                                if ($sno == 0) {
                                    echo 'No records found!';
                                }

                                if ($isClosed == false && $sno != 0) {
                                    ?>

                                </div>


                            <?php }if ($pageJobClosed == false && $sno != 0) { ?> </div>


                            <?php
                        } else if ($pageJobClosed == true && $sno != 0) {
                            $pageNo--;
                        }
                        //$conn->closeConnection();
                        // mysqli_close($conn);
                        //   mysql_close();
                    } catch (Exception $exc) {

                        $exc->getMessage();
                        $resultMessage = '<font color=red size=2px>' . $exc . '</font>';
                        header('Location: ../back-end-error.php?resultMessage=' . $resultMessage);
                        // $conn->closeConnection(); // closing the connection
                    }
                    ?>



                </div>






                <!-- page numbers -->


                <div class="text-center">
                    <input type="hidden" name="pageCount" id="pageCount" value="<?= $pageNo ?>"/>
                    <ul class="pagination">
                        <?php
                        if ($pageNo > 1) {
                            ?>
                            <li id="lip"><a>&laquo;</a></li>

                            <!-- <li class="active"><a data-toggle="tab" href="#pageone">1</a></li>
                             <li><a data-toggle="tab" href="#pagetwo">2</a></li>
                             <li><a data-toggle="tab" href="#pagethree">3</a></li> -->


                            <?php
                        }
//  echo 'count----'.$pageNo;


                        for ($x = 1; $x <= $pageNo; $x++) {
                            if ($x == 1) {
                                ?> 
                                <li class="active" id="li<?= $x ?>"><a data-toggle="tab" href="#page<?= $x ?>" id="a<?= $x ?>" onclick="alignCenter(this);goTop();"><?php echo $x ?></a></li> 

                                <?php
                            } else {
                                if ($x <= 5) {
                                    ?> <li id="li<?= $x ?>"><a data-toggle="tab" href="#page<?= $x ?>" id="a<?= $x ?>" onclick="alignCenter(this);goTop();"><?php echo $x ?></a></li><?php } else {
                                    ?>
                                    <li id="li<?= $x ?>"><a data-toggle="tab" href="#page<?= $x ?>" id="a<?= $x ?>" onclick="alignCenter(this);goTop();" style="display: none"><?php echo $x ?></a></li>
                                    <?php
                                }
                            }
                        }



                        if ($pageNo > 1) {
                            ?>

                            <li id="lin"><a>&raquo;</a></li>
                        <?php } ?>
                    </ul>
                </div>   



            </section><br>

            <script type="text/javascript">
  
        
        
                $( "#lip" ).click(function() {
           
                    var pages = document.getElementById("pageCount").value;
            
                    for (var i = 1; i <= pages; i++) { 
                        if($('#li'+i).attr('class')=='active'){
                            if(i>1){
                                $("#page"+(i)).removeClass("active");
                                $("#page"+(i-1)).addClass("active");
                                $("#li"+(i)).removeClass("active");
                                $("#li"+(i-1)).addClass("active");
                                $("#a"+(i-1)).show();
                                $("#a"+(i+4)).hide();
                                goTop();
                              
                                break;
                            }
                        }
                    }
                });
                $( "#lin" ).click(function() {
    
     
                    var pages = document.getElementById("pageCount").value;
                    for (var j = 1; j <= pages; j++) { 
                 
                        if($('#li'+j).attr('class')=='active') {

                            if(j<pages){
                                $("#page"+(j)).removeClass("active");
                                $("#page"+(j+1)).addClass("active");
                                $("#li"+(j)).removeClass("active");
                                $("#li"+(j+1)).addClass("active");
                   
                                $("#a"+(j+1)).show();
                                $("#a"+(j-4)).hide();
                    
                    
                                goTop();
                                break;
                            }
                     
                        }
                    }
                });
   
   
   
                function goTop(){
                    window.scrollTo(500, 0);
                }
    
                function alignCenter(id){
                    var res1=id+"";
                    var res = res1.split("#page");
                    var k =res[1];
                    // $('#li'+k).attr('class')=='active';
                    var pages = document.getElementById("pageCount").value;
                    for (var i = 1; i <= pages; i++) {
                        $("#page"+(i)).removeClass("active");
                        $("#a"+(i)).hide();
                    }
                    for (var j = 1; j <= pages; j++) { 
                        if($('#li'+j).attr('class')=='active') {
                            $("#page"+(k)).addClass("active");
                            $("#li"+j).removeClass("active");
                            $("#li"+k).addClass("active");
                            break;
                        }
                    }
                    for (var j = 1; j <= pages; j++) { 
                        if($('#li'+j).attr('class')=='active') {
                            if(res[1]==1){
                                $("#a"+(j)).show();
                                $("#a"+(j+1)).show();
                                $("#a"+(j+2)).show();
                                $("#a"+(j+3)).show();
                                $("#a"+(j+4)).show();
                                goTop();
                                break;
                            }
                            else if(res[1]==2){
                                $("#a"+(j)).show();
                                $("#a"+(j+1)).show();
                                $("#a"+(j+2)).show();
                                $("#a"+(j+3)).show();
                                $("#a"+(j-1)).show();
                                goTop();
                                break;
                            }
                            else if(res[1]==3){
                                $("#a"+(j)).show();
                                $("#a"+(j+1)).show();
                                $("#a"+(j+2)).show();
                                $("#a"+(j-2)).show();
                                $("#a"+(j-1)).show();
                                goTop();
                                break;
                            }
                            else if(res[1]>3 && res[1]<=pages-2){
                                $("#a"+(j)).show();
                                $("#a"+(j+1)).show();
                                $("#a"+(j+2)).show();
                                $("#a"+(j-2)).show();
                                $("#a"+(j-1)).show();
                                goTop();
                                break;
                            }
                            else if(res[1]>3 && res[1]<=pages-1){
                                $("#a"+(j)).show();
                                $("#a"+(j+1)).show();
                                $("#a"+(j-3)).show();
                                $("#a"+(j-2)).show();
                                $("#a"+(j-1)).show();
                                goTop();
                                break;
                            }
                            else if(res[1]>3 && res[1]<=pages){
                                $("#a"+(j)).show();
                                $("#a"+(j-1)).show();
                                $("#a"+(j-3)).show();
                                $("#a"+(j-2)).show();
                                $("#a"+(j-4)).show();
                                goTop();
                                break;
                            }
                        }
                    }
       
                }
   
            </script>
            <br>
            <?php include '../footer.php'; ?>
            </body>
            </html>