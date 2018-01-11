<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"> 
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="Home | Miracle" name="Title">
        <meta content="Miracle Software Systems, Inc. is a 20 year firm headquartered in Novi ,MI ,USA. Miracle has been a leader in the IT space as Systems Integrator in ERP/B2B/BPM." name="Description">
        <meta itemscope itemtype="http://schema.org/Organization">
        <meta itemprop="Miracle Software Systems, Inc, is a Global Systems Integrator specializing in ERP/ BPM (EAI/SOA) / B2B / Digital Experience Technologies, headquartered in Novi, MI – USA. Miracle has a global presence on four continents with multiple Global Development Centers spanning across the USA, Canada and India.Miracle has been and continues to be a leader in the niche space of Business Integration and SOA services over the past 20 Years with Premier Partnerships with software giants such as SAP, IBM, Oracle and Microsoft, Other partnerships also includes Amazon, Redhat, apigee, Rally, HP and Axway.">
        <meta content="INDEX,FOLLOW" name="Robots">
        <title> Internal videos | Miracle </title>
        <?php include '../../config/Locations.php'; ?>
        <link href="../../css/bootstrap.min.css" rel="stylesheet">
        <link href="../../css/animate.css" rel="stylesheet">
        <link href="../../css/main.css" rel="stylesheet">
        <link href="../../css/default.css" rel="stylesheet" type="text/css">
        <link href="../../css/component.css" rel="stylesheet" type="text/css">
        <script src="../../js/modernizr.custom.js"></script> 
        <link href="../../css/font-awesome.min.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

        <link href="../../images/favicon.ico" rel="shortcut icon">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">  
        <link rel="stylesheet" type="text/css" media="all" href="../../css/calander/daterangepicker-bs3.css" />
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>  
       <!--  <script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script> -->
        <script type="text/javascript" src="../../js/calander/moment.js"></script>
        <script type="text/javascript" src="../../js/calander/daterangepicker.js"></script>
        <script>
            window.onload = function() {
                var count = document.getElementById("numRows").value;
                //  alert(count);
        
         
                if(count>0){
                    var rowObj = document.getElementById("divrow1");
                    rowObj.style.display='';
                    // $( '#divrow1' ).css('display','');
                }
            }
            
         
            // });
     
            var visibleRows = 1;
            function getMoreRecords(){
                var count = document.getElementById("numRows").value;
                //    alert(count);
                visibleRows = parseInt(visibleRows,10)+1;
                //   alert(visibleRows);
                //for(var i=1;i<=visibleRows;i++){
                var divId = "divrow"+visibleRows;
                // alert(divId);
                document.getElementById(divId).style.display="";
                //}
                //   document.getElementById(divId).scrollIntoView();
          
                if(count==visibleRows){
                    document.getElementById("loadMoreId").style.display='none';
              
                }
            }
            
        </script>
        <?php
        include '../../config/general.php';
        // require '../config/DbController.php';
        require '../../config/ConnectionProvider.php';
        $isValidUser = 'No';
        $errorMessage="";
        if (isset($_POST['btnLoginSubmit'])) {
            try {
                $validationType = 'Login';

                if (!get_magic_quotes_gpc()) {
                    $rloginId = addslashes($_POST['loginId']);
                    $rpassword = addslashes($_POST['password']);
                } else {
                    $rloginId = $_POST['loginId'];
                    $rpassword = $_POST['password'];
                }

                $data = array("LoginId" => "$rloginId", "Password" => "$rpassword", "Authorization" => base64_encode(SERVICE_AUTHORIZATION));
                $data_string = json_encode($data);
                $curl = curl_init(SERVICE_URL . "websiteServices/getEmployeeInformation");
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($curl, CURLOPT_HTTPHEADER, array(
                    'Content-Type: application/json',
                    'Content-Length: ' . strlen($data_string))
                );
                curl_setopt($curl, CURLOPT_TIMEOUT, 500);
                curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 500);
                $curl_response = curl_exec($curl);
                //  echo 'curl_response----'.$curl_response;
                if (1 !== $curl_response) {

                    $myArray = json_decode($curl_response, true);
                    if ($myArray['IsAuthenticate']) {

                        if ($myArray['ResultString'] == 'Valid') {
                            $isValidUser = 'YES';

                            // $isValidUser='YES';
                            //header('Location: standards_download_page.php');
                        } else {

                            if ($myArray['ResultString'] == 'InValidCredentiales') {
                                $errorMessage = INVALID_CREDENTIALES_MESSAGE;
                            }
                            // $resultMessage = "<font color=red size=2px>" . INVALID_CREDENTIALES_MESSAGE . " </font>";
                            else
                                $errorMessage = INACTIVE_MESSAGE;
                            // $resultMessage = "<font color=red size=2px>" . INACTIVE_MESSAGE . " </font>";
                        }
                    }else {
                        $errorMessage = UNAUTHORIZED_ACCESS_MESSAGE;
                        //$resultMessage = "<font color=red size=2px>" . UNAUTHORIZED_ACCESS_MESSAGE . "</font>";
                    }
                }
                curl_close($curl);
            } catch (Exception $exc) {


                $exc->getMessage();
                $resultMessage = '<font color=red size=2px>' . $exc . '</font>';
                header('Location: ../back-end-error.php?resultMessage=' . $resultMessage);
            }
        }


        $rvideoType = '';
        $queryString = '';
        $rkeyWords = '';
        $rstartDate = '';
        $rendDate = '';
        if (isset($_POST['btnSearchSubmit'])) {
            try {
                // $conn->connectToDatabase();
                // $isValidUser='YES';
                if (!get_magic_quotes_gpc()) {


                    $rvideoType = addslashes($_POST['videoType']);
                    $rkeyWords = addslashes($_POST['keyWords']);
                    $rstartDate = addslashes($_POST['calId1']);
                    $rendDate = addslashes($_POST['calId2']);
                    $risValidUser = addslashes($_POST['isValidUser']);
                } else {

                    $rvideoType = $_POST['videoType'];
                    $rkeyWords = $_POST['keyWords'];
                    $rstartDate = $_POST['calId1'];
                    $rendDate = $_POST['calId2'];
                    $risValidUser = $_POST['isValidUser'];
                }
                $isValidUser = $risValidUser;
                $queryString = 'SELECT Id,DocTitle,PhpFileName,VideoLink FROM tblWebDownloadsLines WHERE DocType=\'Video\' AND Status = \'Active\' AND AccessType =\'I\' AND tblWebDownloadsLines.STATUS = \'Active\' AND Id IN (SELECT tblEventSpeakers.event_id FROM tblEventSpeakers  WHERE tblEventSpeakers.STATUS = \'Active\' AND ObjectType=\'LB\')';
                if ($rvideoType != '-1') {
                    //$queryString = $queryString . ' AND DocType=\'' . $rdocType . '\'';
                    $queryString = $queryString . ' AND VideoType=:videoTitleType';
                }
                if ($rkeyWords != '') {
                    $queryString = $queryString . ' AND (MATCH(DocTitle,DocName,DocLongDesc,BodyContent,BreadComLabel,PhpFileName)  AGAINST (:keywordsSearch IN BOOLEAN MODE) )';
                }
                if ($rstartDate != '') {
                    //$queryString = $queryString.' AND DATE_FORMAT(event_startdate, \'%m/%d/%Y\') >= DATE_FORMAT(\''.$rstartDate.'\', \'%m/%d/%Y\')';
                    //    $queryString = $queryString.' AND event_startdate>=\''.$rstartDate.'\'';
                    $queryString = $queryString . ' AND CreatedDate>=:rstartDate';
                }
                if ($rendDate != '') {
                    // $queryString = $queryString.' AND DATE_FORMAT(evetnt_enddate, \'%m/%d/%Y\') <= DATE_FORMAT(\''.$rendDate.'\', \'%m/%d/%Y\')';
                    //  $queryString = $queryString.' AND evetnt_enddate<=\''.$rendDate.'\'';
                    $queryString = $queryString . ' AND CreatedDate<=:rendDate';
                }
                $queryString = $queryString . ' ORDER BY CreatedDate DESC ';
            } catch (Exception $exc) {

                $exc->getMessage();
                $resultMessage = '<font color=red size=2px>' . $exc . '</font>';
                //  $conn->closeConnection(); // closing the connection
                //    mysql_close();
            }
        }
        ?>
        <style>
            .modal-dialog
            {
                overflow:hidden !important;

            }

        </style>
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
                    url('<?= AMAZON_URL ?>/images/banners/event-header.png');
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                /* background-position:0px 71px;*/
            }



        </style>
    </head>
    <?php include '../../header.php'; ?> 
    <body>
        <script type="text/javascript">
            //    alert("hii");
            
            $(window).load(function(){
           
                var isValidUser = document.getElementById("isValidUser").value;
          
                if(isValidUser=='No'){
                    $('#myModal1').modal('show');
                }else{
                    $('#myModal1').modal('hide');
                }
                
                
                var st = document.getElementById("calId1").value
                var end1 =document.getElementById("calId2").value
                if(st.length>0&&end1.length>0) {
                    var monthNames = [
                        "January", "February", "March",
                        "April", "May", "June", "July",
                        "August", "September", "October",
                        "November", "December"
                    ];
                    var s = new Date(st);
                    // var date = new Date();
                    var day = s.getDate();
                    var monthIndex = s.getMonth();
                    var year = s.getFullYear();
                    var startdate = monthNames[monthIndex]+" "+day+", "+year
                    var e = new Date(end1);
                    // var date = new Date();
                    day = e.getDate();
                    monthIndex = e.getMonth();
                    year = e.getFullYear();
                    var eeedate = monthNames[monthIndex]+" "+day+", "+year

                    //console.log(day, monthNames[monthIndex], year);
                    $('#reportrange span').html(startdate + ' - ' + eeedate);
          
                }
                // console.log(st, end1,'Custom');
        
        
        
        
        
                var cb = function(start, end, label) {
                    console.log(start.toISOString(), end.toISOString(), label);
                    
                    
                    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                    
                    document.getElementById("calId1").value=start.format('YYYY-MM-DD');
                    document.getElementById("calId2").value=end.format('YYYY-MM-DD');
                                        
                    //Callback has fired: [June 19, 2015 to July 10, 2015, label = Custom]
                };

                var optionSet1 = {
                    startDate: moment().subtract(29, 'days'),
                    endDate: moment(),
                    minDate: '01/01/2012',
                    maxDate: '12/31/2020',
                    //dateLimit: { days: 120 },
                    showDropdowns: true,
                    showWeekNumbers: true,
                    timePicker: false,
                    timePickerIncrement: 1,
                    timePicker12Hour: true,
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                    },
                    opens: 'left',
                    buttonClasses: ['btn btn-default'],
                    applyClass: 'btn-sm btn-primary',
                    cancelClass: 'btn-sm',
                    format: 'MM/DD/YYYY',
                    separator: ' to ',
                    locale: {
                        applyLabel: 'Submit',
                        cancelLabel: 'Clear',
                        fromLabel: 'From',
                        toLabel: 'To',
                        customRangeLabel: 'Custom',
                        daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr','Sa'],
                        monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                        firstDay: 1
                    }
                };

                var optionSet2 = {
                    startDate: moment().subtract(7, 'days'),
                    endDate: moment(),
                    opens: 'left',
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                    }
                };

                //   $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));

                $('#reportrange').daterangepicker(optionSet1, cb);

                $('#reportrange').on('show.daterangepicker', function() { console.log("show event fired"); });
                $('#reportrange').on('hide.daterangepicker', function() { console.log("hide event fired"); });
                $('#reportrange').on('apply.daterangepicker', function(ev, picker) { 
                    console.log("apply event fired, start/end dates are " 
                        + picker.startDate.format('MMMM D, YYYY') 
                        + " to " 
                        + picker.endDate.format('MMMM D, YYYY')
                ); 
                });
                  
                $('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
                    
                    $('#reportrange span').html("");
                    
                    document.getElementById("calId1").value="";
                    document.getElementById("calId2").value="";
                    
                    console.log("cancel event fired"); 
                
            }
        );

                /* $('#options1').click(function() {
                    $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
                  });

                  $('#options2').click(function() {
                    $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
                  });

                  $('#destroy').click(function() {
                    $('#reportrange').data('daterangepicker').remove();
                  });*/
                  
                  
                  
        
            });
            function doSubmit(){
                document.getElementById("myForm").submit();
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
        <form id="internalDepotForm" name="internalVideoDepotForm" method="post" action="">
            <div class="modal" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static" >
                <div class="modal-dialog" style=" position: static;">
                    <div class="modal-content">
                        <div class="modal-body" style="margin-top: -10px;"> 
                            <div class="row">
                                <div class="modal-header" style="margin-top: -10px;">
                                    <h3 class="modal-title" id="memberModalLabel"><strong>Employee Login</strong> </h3> <hr>
                                    <p class='methodText'> Thank you for showing interest in accessing our internal webinar collection. You must be a Miraclite to gain access to this library. Please validate yourself using your Miracle credentials for further access.</p>

                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="display: none" id="loginModalClosId"><span aria-hidden="true">&times;</span></button>

                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <input type="text " tabindex="1" class="form-control" required="required" placeholder="Username" id="loginId" name="loginId" onkeydown="return enableLoginWhenEnter(event);">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" tabindex="2" class="form-control" required="required" placeholder="Password" id="password" name="password" style="width: 206px" onkeydown="return enableLoginWhenEnter(event);">

                                        <!--  <a href="../forgot-password.php"> Forgot password !! &nbsp;&nbsp;</a> -->
                                    </div>
                                </div>
                            </div>
                            <?php if($errorMessage!='') { ?>
                            <div class="row">
                                <div class="col-sm-12"> 
                                    <div class="alert alert-danger" >
                                         <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <strong><?php echo $errorMessage;?></strong> 
                                    </div>                        
                                </div>
                            </div>
                            <?php }?>
                            <div class="row" style="margin-top:-10px;">
                                <hr> 
                            </div>

                            <div class="row" >
                                <div class="col-sm-4" >
                                  <!--  <input type="button" value="Login" tabindex="3" class="btn btn-primary col-sm-12" style="margin-left:5px;" name="btnSubmit1" id="btnSubmit1" onclick="doSubmit();"> -->
                                    <input type="submit" class="btn btn-primary col-sm-12" data-loading-text="<i class='fa fa-spinner fa-spin '></i> loading..." style="margin-left:1px;" name="btnLoginSubmit" id="btnLoginSubmit" tabindex="3" value="Login"/>
                                </div>
                            </div>



                            <div class="col-sm-6"></div> 
                        </div>


                        <div class="col-sm-8"></div>   
                    </div>


                </div>
            </div>


        </div>
    </div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog end -->
</form>

<br><br><br> 
<div class="row parallax">
    <div class="overlay section_bg" style="margin-top: -14px;">
        <section class="container">
            <div class="row">
                <div class="col-sm-6 text-left">
                    <br><br><br>
                    <h1 class="heavy micro" style="color:#ffffff;">Video depot</h1>
                    <br>
                </div>
                <div class="col-sm-6 text-right" >
                    <br><br><br>
                    <ul class="breadcrumb pull-right" >
                        <li><a href="../../">Home</a></li>
                        <li class="active">Video depot</li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
</div>
<br> 
<section class="container">

    <br>
    <form method="post" action="<?php $_PHP_SELF ?>" id="myForm" name="myForm">
        <input type="hidden" name="isValidUser" id="isValidUser" value="<?= $isValidUser ?>"/>
        <div class="row">
            <div class="col-sm-4">
                <select class="form-control" name="videoType" id="videoType" onkeydown="return enableSearchEnter(event);">
                    <?php if ($rvideoType == '-1') { ?>
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
                    $query = "SELECT DISTINCT VideoTitle FROM tblLKDigitalVideoManagement WHERE STATUS='Active' AND VideoAccessType='I' order by VideoTitle";
                    //   $result = mysql_query($query) or die(mysql_error());
                    $stmt = $conn->prepare($query);
                    $stmt->execute();
                    $stmt->setFetchMode(PDO::FETCH_ASSOC);

                    while ($row = $stmt->fetch()) {
                        // while ($row=mysql_fetch_array($result)) {

                        $dvideotype = $row['VideoTitle'];
                        if ($rvideoType == $dvideotype) {

                            echo "<option value=\"$dvideotype\" selected>$dvideotype</option>";
                        } else {

                            echo "<option value=\"$dvideotype\">$dvideotype</option>";
                        }
                    }
                    ?> 
                </select>
            </div>
            <div class="col-sm-4">
                <!--Date search-->


                <!-- <div id="reportrange" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc" class="form-control"> -->
                <div id="reportrange" class="form-control">
                    <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                    <span></span> <b class="caret"></b>
                </div>
                <input type="hidden" id="calId1" name="calId1" value="<?= $rstartDate ?>"/>
                <input type="hidden" id="calId2" name="calId2" value="<?= $rendDate ?>" />
                <!--Date search-->
            </div> 
            <div class="col-sm-4">
                <div class="form-group">

                    <div class="input-group">

                        <input class="form-control" placeholder="Enter Key Words" name="keyWords" id="keyWords" type="text" value="<?= $rkeyWords ?>" onkeydown="return enableSearchEnter(event);">


                        <span class="input-group-btn"><span class="btn btn-primary btn-file"><input name="btnSearchSubmit" id="btnSearchSubmit" type="siv" onclick="doSubmit();"> Search…</span></span> 
                        <!-- <button type="submit" tabindex="13" class="btn btn-primary" name="btnJobSubmit" id="btnJobSubmit">Search&hellip;</button>   -->
                    </div>

                </div>
            </div>
        </div>
    </form>

    <?php
    try {

        if ($queryString == '') {
            $selectQuery = "SELECT tblWebDownloadsLines.Id,DocTitle,PhpFileName,VideoLink FROM tblWebDownloadsLines WHERE AccessType='I' AND DocType='Video' AND tblWebDownloadsLines.STATUS = 'Active'   AND Id IN (SELECT tblEventSpeakers.event_id FROM tblEventSpeakers  WHERE tblEventSpeakers.STATUS = 'Active' AND ObjectType='LB') ORDER BY CreatedDate DESC";
            $stmt = $conn->prepare($selectQuery);
        } else {
            $selectQuery = $queryString;
            $stmt = $conn->prepare($selectQuery);
            if ($rvideoType != '-1')
                $stmt->bindParam(':videoTitleType', $rvideoType);
            if ($rkeyWords != '')
                $stmt->bindParam(':keywordsSearch', $rkeyWords);



            if ($rstartDate != '')
                $stmt->bindParam(':rstartDate', $rstartDate);
            if ($rendDate != '')
                $stmt->bindParam(':rendDate', $rendDate);
        }



       // echo $selectQuery;
        // $result1 = mysql_query($selectQuery1);
        $sno = 1;
        $rows = 0;
        $isDivClosed = false;
        $numrows = 0;
        $stmt->execute();

        //  while ($row = mysql_fetch_array($result1, MYSQL_ASSOC)) {
        while ($row = $stmt->fetch()) {
            $myDocTitlevalue = strip_tags($row["DocTitle"]);
            $tempLength = strlen($myDocTitlevalue);
            if ($tempLength > 75) {
                $tempDocTitle = substr($myDocTitlevalue, 0, 70) . '...';
            } else {
                $tempDocTitle = $myDocTitlevalue;
            }
            $rows = $rows + 1;
            if ($rows == 1) {
                $numrows = $numrows + 1;
                $isDivClosed = false;
                ?>

                <div class="row" id="divrow<?= $numrows ?>" style="display: none;margin-top: 15px;"><?php } ?>

                <div class="col-sm-4"><!--webinar--->
                    <div class="portfolio-item">

                        <div class="card ">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe width="360" height="200" src="<?= $row["VideoLink"] ?>" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <a class="linkText1" target="_blank"  href="<?= $row['PhpFileName'] ?>">
                                <div class="container" style="background-color:#eee; margin-top:-5px;height: 66px;">

                                    <p><center><strong> <?= $tempDocTitle ?></strong></center></p>
                                </div>
                            </a>

                        </div>
                    </div>
                </div>  
                <?php
                if ($rows == 3) {
                    $rows = 0;
                    ?>

                </div>
                <?php
                $isDivClosed = true;
            }
            $sno = $sno + 1;
        }
        if ($sno == 1) {
            echo 'No records found!';
        }

        if ($isDivClosed == false) {
            ?></div><?php
    }
    //$conn->closeConnection();
    // mysqli_close($conn);
    // mysql_close();
} catch (Exception $exc) {

    $exc->getMessage();
    $resultMessage = '<font color=red size=2px>' . $exc . '</font>';
   // header('Location: ../../back-end-error.php?resultMessage=' . $resultMessage);
    // $conn->closeConnection(); // closing the connection
}
    ?>

</div>

<input type="hidden" name="numRows" id="numRows" value="<?= $numrows ?>"/>

<?php if ($numrows > 1) { ?>

    <div class="row" id="loadMoreId" style="margin-top: 15px;">
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
            <button class="btn btn-default col-sm-10" data-dismiss="modal" type="button" id="btnSubmit" name="btnSubmit" onclick="getMoreRecords();">Load More</button>
        </div>
        <div class="col-sm-1"></div>
    </div>
<?php } ?> 
</div>
<!--contact form copy starts-->
</div>

</div>  
<br/>
<!--contact form copy ends-->

</section> <!--/#error-->
<?php include '../../footer.php'; ?>   

</body>
</html>