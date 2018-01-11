<!DOCTYPE html>
<html >
    <head>

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="description" content="">

        <meta name="author" content="">

        <title>
            Executive Meets | Miracle
        </title>
        <?php include '../config/Locations.php'; ?>

        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <link href="../css/font-awesome.min.css" rel="stylesheet">

        <link href="../css/main.css" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../css/default.css"/>
        <link rel="stylesheet" type="text/css" href="../css/component.css"/>
        <link rel="shortcut icon" href="<?= AMAZON_URL ?>/images/favicon.ico">

        <!-- Date pickers links start -->
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">  
        <link rel="stylesheet" type="text/css" media="all" href="../css/calander/daterangepicker-bs3.css" />
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>  
        <!--  <script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script> -->
        <script type="text/javascript" src="../js/calander/moment.js"></script>
        <script type="text/javascript" src="../js/calander/daterangepicker.js"></script>
          <script type="text/javascript">

        function loadbutton() {
            if($("#loginId").val().trim().length>0&&$("#password").val().trim().length>0)
            $("#btnSubmit1").button('loading');
        }
        </script>
        <script src="../js/ajaxUtil.js"></script>
        <?php session_start(); ?>
        <?php
        include '../config/general.php';
        $resultMessage = '';
        $accessType = 'noAccess';
        if (isset($_POST['btnSubmit1'])) {
            try {


                if (!get_magic_quotes_gpc()) {
                    $rloginId = addslashes($_POST['loginId']);
                    $rpassword = addslashes($_POST['password']);
                } else {
                    $rloginId = $_POST['loginId'];
                    $rpassword = $_POST['password'];
                }
                /* $serviceUrl = SERVICE_URL . '/attendeeCheck/';
                  $curl = curl_init($serviceUrl);
                  curl_setopt($curl, CURLOPT_POST, true);
                  curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
                  curl_setopt($curl, CURLOPT_POSTFIELDS, "loginId=" . $rloginId . "&password=" . $rpassword);
                  $curl_response = curl_exec($curl);
                  //echo 'response-->'.$curl_response;
                  if (1 !== $curl_response) {

                  $myArray = json_decode($curl_response, true);
                  //  echo 'code-->' . $myArray['code'];

                  if ($myArray['code'] == '200') {
                  //session_start();
                  // $_SESSION["ses_EmpLoginId"] = $rloginId;
                  if ($myArray['message'] == 'noAccess') {
                  $resultMessage = "<font color=red size=2px>Access Denied!</font>";
                  } else {
                  $_SESSION["ses_EmpLoginId"] = $rloginId;
                  $_SESSION["ses_AccessType"] = $myArray['message'];

                  //   echo 'messs-->' . $myArray['message'];
                  $accessType = $_SESSION["ses_AccessType"];
                  }


                  // header('Location: executive-management-meets.php');
                  } else if ($myArray['code'] == '222') {
                  $resultMessage = "<font color=red size=2px>" . $myArray['message'] . "</font>";
                  }
                  //$resultMessage = $myArray['message'];
                  else
                  $resultMessage = "<font color=red size=2px>" . $myArray['message'] . "</font>";
                  } */

                $data = array("LoginId" => "$rloginId", "Password" => "$rpassword", "Authorization" => base64_encode(SERVICE_AUTHORIZATION));
                $data_string = json_encode($data);
                $curl = curl_init(SERVICE_URL . "websiteServices/getEmployeeEmeetsAccessType");
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

                if (1 !== $curl_response) {

                    $myArray = json_decode($curl_response, true);
                    if ($myArray['IsAuthenticate']) {

                        if ($myArray['ResultString'] == 'Valid') {
                            if ($myArray['AccessType'] == 'noAccess') {
                                $resultMessage = "<font  size=2px>Access Denied!</font>";
                            } else {
                                $_SESSION["ses_EmpLoginId"] = $rloginId;
                                $_SESSION["ses_AccessType"] = $myArray['AccessType'];

                                //   echo 'messs-->' . $myArray['message'];
                                $accessType = $_SESSION["ses_AccessType"];
                            }
                        } else {

                            if ($myArray['ResultString'] == 'InValidCredentiales')
                                $resultMessage = "<font  size=2px>" . INVALID_CREDENTIALES_MESSAGE . " </font>";
                            else
                                $resultMessage = "<font  size=2px>" . INACTIVE_MESSAGE . " </font>";
                        }
                    }else {
                        $resultMessage = "<font  size=2px>" . UNAUTHORIZED_ACCESS_MESSAGE . "</font>";
                    }
                }
                curl_close($curl);
            } catch (Exception $exc) {


                $exc->getMessage();
                $resultMessage = '<font color=red size=2px>' . $exc . '</font>';
                header('Location: ../back-end-error.php?resultMessage=' . $resultMessage);
            }
        }
        ?>
        <?php include '../header.php'; ?>

        <?php
        //  require '../config/DbController.php';
        require '../config/ConnectionProvider.php';

        $rempID = isset($_SESSION["ses_EmpLoginId"]) ? $_SESSION["ses_EmpLoginId"] : '';
        $remeetId = isset($_GET["emeetId"]) ? $_GET["emeetId"] : '';
        $accessType = isset($_SESSION["ses_AccessType"]) ? $_SESSION["ses_AccessType"] : 'noAccess';
        //  echo "accessType--".$accessType;
        $rstartDate = '';
        $rendDate = '';
        $rtrackName = '';
        $rtrackId = '';
        $queryString = '';
        $rmonthName = '';
        //   $rdepartment = '';
        $rstartDate = '';
        $rendDate = '';

        $isEmmetsExits = '';
        // $rintWebinarId = isset($_GET['eventId']) ? $_GET['eventId'] : '';
        // $flag = isset($_GET["flag"]) ? $_GET["flag"] : null;
        if (isset($_POST['btnSearchSubmit'])) {
            // echo 'hii';
            try {
                // $conn->connectToDatabase();

                $rerrorId = '';
                if (!get_magic_quotes_gpc()) {
                    $rtrackId = addslashes($_POST['eMeetType']);
                    //  $rdepartment = addslashes($_POST['department']);
                    $rmonthName = addslashes($_POST['monthName']);
                    $rstartDate = addslashes($_POST['calId1']);
                    $rendDate = addslashes($_POST['calId2']);
                } else {
                    $rtrackId = $_POST['eMeetType'];
                    //  $rdepartment = $_POST['department'];
                    $rmonthName = $_POST['monthName'];
                    $rstartDate = $_POST['calId1'];
                    $rendDate = $_POST['calId2'];
                }





                $queryString = 'SELECT Id,TYPE,VideoLink,STATUS,MONTH,EMeetDate  FROM tblExecutiveMeet WHERE STATUS = \'Completed\'';
                if ($rtrackId != '') {
                    //    $queryString = $queryString . ' AND Type=\'' . $rtrackId . '\'';
                    $queryString = $queryString . ' AND Type=:rtrackId';
                }
                /*    if ($rdepartment != '') {
                  $queryString = $queryString . ' AND Department = \'' . $rdepartment . '\'';
                  } */

                if ($rmonthName != '') {
                    //  $queryString = $queryString . ' AND MONTH=\'' . $rmonthName . '\'';
                    $queryString = $queryString . ' AND MONTH=:rmonthName';
                }

                if ($rstartDate != '') {
                    //$queryString = $queryString.' AND DATE_FORMAT(event_startdate, \'%m/%d/%Y\') >= DATE_FORMAT(\''.$rstartDate.'\', \'%m/%d/%Y\')';
                    // $queryString = $queryString . ' AND EMeetDate>=\'' . $rstartDate . '\'';
                    $queryString = $queryString . ' AND EMeetDate>=:rstartDate ';
                }
                if ($rendDate != '') {
                    // $queryString = $queryString.' AND DATE_FORMAT(evetnt_enddate, \'%m/%d/%Y\') <= DATE_FORMAT(\''.$rendDate.'\', \'%m/%d/%Y\')';
                    // $queryString = $queryString . ' AND EMeetDate<=\'' . $rendDate . '\'';
                    $queryString = $queryString . ' AND EMeetDate<=:rendDate';
                }
                if ($accessType != 'Both') {
                    //  $queryString = $queryString . ' AND TYPE=\'' . $accessType . '\'';
                    $queryString = $queryString . ' AND TYPE=:accessType';
                }

                $queryString = $queryString . ' ORDER BY EMeetDate DESC';

                //echo "searchQuery---->".$queryString;
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
                    url("<?= AMAZON_URL ?>/images/banners/emeets.png");
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                
            }



        </style>
    </head>

    <body>
        <script type="text/javascript">
            $(window).load(function(){
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
                    //   alert("Callback has fired: [" + start.format('MMMM D, YYYY') + " to " + end.format('MMMM D, YYYY') + ", label = " + label + "]");
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
                  
                $('#reportrange').on('cancel.daterangepicker', function(ev, picker) { console.log("cancel event fired"); });

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
        </script>
        <script type="text/javascript">
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
                document.getElementById(divId).scrollIntoView();
          
                if(count==visibleRows){
                    document.getElementById("loadMoreId").style.display='none';
              
                }
            }
          
            $(window).load(function(){
                var sesionLoginId = document.getElementById("sesionLoginId").value;
                var emmetId = document.getElementById("emmetId").value;
                
                if(sesionLoginId=='' || (document.getElementById("emmetId").value!='' && parseInt(document.getElementById("emmetId").value,10)>0 )){
                    $('#myModal1').modal('show');
                }else if(document.getElementById("emmetId").value=='-1'){
                    $("#myModal1").modal('show');
                }else if(document.getElementById("emmetId").value=='-2'){
                    $("#myModal1").modal('show');
                }
                
            });
            function doSubmit() {
                // alert("dgd");
                var loginId=document.getElementById("loginId").value;
                var password=document.getElementById("password").value;
       
                checkLogin(loginId,password);
            }
            function doSearchSubmit() {
                document.forms["myForm"].submit();    
            }
   
        </script>
        <?php
        if ($rempID == '' || $remeetId != '') {
            //  $conn = new DbController();
            $emmetType = '';
            $emeetMonth = '';

            try {
                // $conn->connectToDatabase();
                //   $conn->selectDatabase();
                // $selectQuery = "SELECT TYPE,MONTH FROM tblExecutiveMeet WHERE Id = " . $remeetId;
                $selectQuery = "SELECT TYPE,MONTH FROM tblExecutiveMeet WHERE Id = :remeetId";
                // echo $selectQuery;
                $stmt = $conn->prepare($selectQuery);
                $stmt->bindParam(':remeetId', $remeetId);
                //  $result = mysql_query($selectQuery);
                //    while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
                $stmt->execute();
                $stmt->setFetchMode(PDO::FETCH_ASSOC);

                while ($row = $stmt->fetch()) {
                    $emmetType = $row["TYPE"];
                    $emeetMonth = $row["MONTH"];
//
//                    $eventToTime = strtotime($row["event_time_to"]);
//                    $eventFromTime = strtotime($row["event_time_from"]);
//                    $rmiddayfrom = $row["midday_from"];
//                    $rmiddayto = $row["midday_to"];
//                    $timezone = $row["timezone"];
//                    $rtime = date('h:i  ', $eventFromTime) . $rmiddayfrom . ' to ' . date('h:i  ', $eventToTime) . $rmiddayto;
                    /* $title = strip_tags($row["event_title"]);
                      $mynewtitle = explode(':', $title);
                      $mynewtitle1 = $mynewtitle[1];
                     * *
                     */
//                    $mynewtitle1 = strip_tags($row["Page_Title"]);
//                    $startdata = strtotime($row["event_startdate"]);
//                    $enddata = strtotime($row["evetnt_enddate"]);
//
//                    $dateString = date('F d , Y', $startdata);
//
//                    $startDay = date('d', $startdata);
//                    $startMonth = date('F', $startdata);
//                    $startYear = date('Y', $startdata);
//
//                    $endDay = date('d', $enddata);
//                    $endMonth = date('F', $enddata);
//                    $endYear = date('Y', $enddata);
//                    $evenDate = '';
//                    if ($startDay != $endDay)
//                        $evenDate = $startMonth . ' ' . $startDay . '-' . $endDay . ' ' . $startYear;
//                    else
//                        $evenDate = $dateString;
                }
            } catch (Exception $exc) {

                $exc->getMessage();
            }
            ?>
            <!-- Modal -->
        <body>
            <input type="hidden" name="sesionLoginId" id="sesionLoginId" value="<?= $rempID ?>"/>
            <input type="hidden" name="emmetId" id="emmetId" value="<?= $remeetId ?>"/>
            <!-- new Modal Start -->
            <form method="post" action="<?php $_PHP_SELF ?>" id="executiveMeetForm" name="executiveMeetForm" onsubmit="loadbutton();">
                <div class="modal" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static" >
                    <div class="modal-dialog" style="margin-left: -280px;">
                        <div class="modal-content">
                            <?php if ($remeetId == '-1') { ?>
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="display: none"><span aria-hidden="true">&times;</span></button>
                                    <h3 class="modal-title" id="memberModalLabel"><strong>Access Denied</strong> </h4><hr>
                                        </div>
                                    <?php } ?>
                                    <?php if ($remeetId == '-2') { ?>
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="display: none"><span aria-hidden="true">&times;</span></button>
                                            <h3 class="modal-title" id="memberModalLabel"><strong>Invalid ID</strong> </h4><hr>
                                                </div>
                                            <?php } ?>
                                            <?php if ($remeetId != '' && $remeetId != '-1' && $remeetId != '-2') { ?>
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="display: none"><span aria-hidden="true">&times;</span></button>
                                                    <h3 class="modal-title noMarginBottom" id="memberModalLabel"><strong>Registration Successful</strong> </h3><hr class="noMarginBottom">
                                                </div>
                                            <?php } ?>


                                            <div class="modal-body" style="margin-top: -10px;"> 
                                                <?php if ($remeetId == '-1') { ?>
                                                    <p class="methodText noMarginBottom">     Thank you for showing interest in accessing this resource. You are not authorized to view the content within this page, and hence have been denied access.</p>
                                                    <?php if ($rempID != '') { ?>
                                                        <div class="row modal-footer">
                                                            <div class="col-sm-10"></div>
                                                            <div class="col-sm-2">
                                                                <button type="button" class=" btn-primary col-sm-10 btn-sm btn-successbtn btn-default" data-dismiss="modal">Okay</button>
                                                            </div>
                                                        </div>
                                                    <?php } ?>
                                                <?php } else if ($remeetId == '-2') { ?>
                                                    <p class="methodText noMarginBottom"> The meeting ID that you selected is not available at this moment (or) might be an invalid meet ID. Please recheck the link and try again.</p>
                                                    <?php if ($rempID != '') { ?>
                                                        <div class="modal-footer">
                                                            <div class="col-sm-10"></div>
                                                            <div class="col-sm-2">
                                                                <button type="button" class=" btn-primary col-sm-10 btn-sm btn-successbtn btn-default" data-dismiss="modal">Okay</button>
                                                            </div>
                                                        </div>
                                                    <?php } ?>
                                                <?php } ?> 
                                                <?php if ($remeetId != '' && $remeetId != '-1' && $remeetId != '-2') { ?>
                                                    <p class="methodText noMarginBottom">Thank you for registering for the <strong><?php echo $emmetType; ?></strong> of <strong><?php echo $emeetMonth; ?></strong>. You will be receiving an email from <strong>clokam@miraclesoft.com </strong>with further details.   </p> 
                                                    <?php if ($rempID != '') { ?>
                                                        <div class="modal-footer">
                                                            <div class="col-sm-8"></div>
                                                            <div class="col-sm-4">
                                                                 <button  type="button" class=" btn-primary col-sm-12 btn-sm btn-successbtn btn-default" data-dismiss="modal">Continue</button>
                                                            </div>
                                                        </div>
                                                    <?php } ?>
                                                <?php } ?>

                                                <?php if ($rempID == '') { ?>
                                                    <div class="row">
                                                        <div class="modal-header" style="margin-top: -10px;">
                                                            <h3 class="modal-title" id="memberModalLabel"><strong>Employee Login</strong> </h3> <hr>
                                                            <p class='methodText'> You must be a Miraclite to gain access to this meet. Please validate yourself using your Miracle credentials for further access.</p>

                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="display: none" id="loginModalClosId"><span aria-hidden="true">&times;</span></button>

                                                        </div>
                                                        <div class="col-sm-5">
                                                            <div class="form-group">
                                                                <input type="text " tabindex="1" class="form-control" required="required" placeholder="Username" id="loginId" name="loginId">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="password" tabindex="2" class="form-control noMarginBottom" required="required" placeholder="Password" id="password" name="password" style="width: 206px">

                                                                <!--  <a href="../forgot-password.php"> Forgot password !! &nbsp;&nbsp;</a> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                     <?php if ($resultMessage!= '') { ?>
                                    <div class="row">
                                            <div class="col-sm-12">


                                                <div class="alert alert-danger alert-dismissable fade in">
                                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                    <strong><?php echo $resultMessage; ?></strong>
                                                    <span id="resultMessage"></span>

                                                </div>


                                            </div>
                                        </div>
                                        <?php }?>

                                               <!--      <div class="row noMargin"> 
                                                        <?php// echo $resultMessage; ?>
                                                        <span id="resultMessage"></span></div> -->
                                                    <div class="row"><span id="loading" style="display: none"><font color="red" size="3px">Loading please wait...</font></span></div>
                                                    <div class="row" style="margin-top:-10px;">
                                                        <hr> 
                                                    </div>

                                                    <div class="row" >
                                                        <div class="col-sm-4" >
                                                            <!-- <input type="submit" value="Login" tabindex="3" class="btn btn-primary col-sm-12" name="btnSubmit1" id="btnSubmit1" style="margin-left:0px;" />-->
                                                        <button type="submit" tabindex="3" class="btn btn-primary col-sm-12" name="btnSubmit1" id="btnSubmit1" style="margin-left:0px;" data-loading-text="<i class='fa fa-spinner fa-spin '></i> loading...">
                                        Login 
                                    </button>
                                                        </div>
                                                    </div>



                                                    <div class="col-sm-6"></div> 
                                                </div>


                                                <div class="col-sm-8"></div>   
                                        </div>


                                </div>
                            </div>

                        <?php } ?>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog end -->
    </form>
<?php } ?>

<!-- new Modal End -->

<section>
    <div class="overlay section_bg">
        <div class=" container">
            
            <div class="row">    
                <div class="col-sm-7 text-left">  
                    <br><br><br>
                    <h1 class="micro "><font color="#fff"><strong>Internal Executive Meets</strong></font></h1>

                </div>
                <div class="col-sm-5 text-right">
                    <br><br><br>
                    <ul class="breadcrumb pull-right">
                        <li><a href="../../">Home</a></li>
                        <li><a href="../events/">Events</a></li>
                        <li class="active">Executive Meets</li>
                        <!-- Breadcrumb div Ends here --> 
                    </ul>
                </div>
            </div><br>
        </div>
    </div>

</section>

<section  class="container">

    <br>
    <!--    <br><br>
        <div class="row">
            <div class="col-sm-6 text-left" style="margin-left:-12px;">
                <h1 class="heavy">
                    Internal Executive Meets
                </h1>
            </div>
            <div class="col-sm-6 text-right">
                <ul class="breadcrumb pull-right">
                    <li>
                        <a href="../">Home</a>
                    </li>
                    <li><a href="../events/">Events</a></li>
                    <li class="active">Executive Meets</li>
                </ul>
            </div>
    
        </div>-->

    <div class="row">

        <h3 class="heavy noMargin">GSM/GPM Schedule</h3>
        <div class="row noMarginBottom">
            <div class="col-sm-4">
                <hr class="noMarginBottom" >
            </div><!-- This is the divider line between the heading and the content -->
        </div>
        <table class="table table-hover table-striped">

            <?php
// include '../config/Locations.php';
//    include '../config/general.php';
            if ($accessType != 'noAccess') {
                //$conn = new DbController();
                try {
                    //    $conn->connectToDatabase();
                    //    $conn->selectDatabase();
                    /*    $selectQuery1 = "SELECT event_id,event_title,event_startdate,event_time_from,event_time_to,midday_from,midday_to,timezone,
                      RegistrationLink,STATUS FROM tblEventLines WHERE STATUS = 'Active' AND event_startdate >= CURDATE() AND event_type='W'
                      AND WebinarType=('E' OR 'I') ORDER BY event_startdate"; */
                    $selectQuery = "SELECT Id,TYPE,MONTH,EMeetDate,StartTime,EndTime,MidDayFrom,MidDayTo,TimeZone,EMeetRegistrationLink FROM tblExecutiveMeet WHERE STATUS = 'Published' AND DATE(EMeetDate)>=DATE(NOW()) ";
                    if ($accessType != 'Both') {
                        // $selectQuery = $selectQuery . ' AND TYPE=\'' . $accessType . '\'';
                        $selectQuery = $selectQuery . ' AND TYPE=:accessType ';
                    }

                    $stmt = $conn->prepare($selectQuery);
                    if ($accessType != 'Both')
                        $stmt->bindParam(':accessType', $accessType);
                    $stmt->execute();
                    $rows = $stmt->rowCount();

                    //  $result = mysql_query($selectQuery);
                    //    while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
                    // $stmt->setFetchMode(PDO::FETCH_ASSOC);
//if(mysql_num_rows($selectresponce)>0){
                    //  while ($row = $stmt->fetch()) {
                    //  echo "upcomnk----".$selectQuery;
                    // $result = mysql_query($selectQuery);
                    $sno = 1;
                    //   $num_rows = mysql_num_rows($result);
                    //  if ($num_rows > 0) {
                    if ($rows > 0) {
                        ?>
                        <thead>
                            <tr>
                                <th>
                        <h6 class="heavy">Meet Type</h6>
                        </th>
                        <th>
                        <h6 class="heavy"> Month </h6>
                        </th>
                        <th>
                        <h6 class="heavy">  Date</h6>
                        </th>
                        <th>
                        <h6 class="heavy"> Time</h6>
                        </th>
                        <th>
                        <h6 class="heavy"> Register</h6>
                        </th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php } else { ?>
                        <thead>
                            <tr>
                                <td>   
                                    <p class="methodText noMarginTop"><i>There are no upcoming executive meets scheduled at the moment.Please check back later (or) view any of the available On-Demand Replays. 
                                        </i></p>

                                </td>
                            </tr>
                        </thead>
                        <?php
                    }
                    $stmt->setFetchMode(PDO::FETCH_ASSOC);
                    //   echo "result===".$num_rows;
                    // while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
                    while ($row = $stmt->fetch()) {
                        //printf("ID: %s  Name: %s", $row["id"], $row["name"]);
                        $isEmmetsExits = 1;
                        $emeetDate = strtotime($row["EMeetDate"]);
                        ?>
                        <tr>
                            <!--<td> <?php //echo $sno;        ?></td> -->
                            <td> <strong><?php echo $row["TYPE"]; ?> </strong></td>
                            <td> <?php echo $row["MONTH"]; ?></td>
                            <td><?php echo date('M d , Y', $emeetDate); ?></td>

                            <td><?php echo date('h:i', strtotime($row["StartTime"])) . ' ' . $row["MidDayFrom"] . ' to ' . date('h:i', strtotime($row["EndTime"])) . ' ' . $row["MidDayTo"] . ' ' . $row["TimeZone"]; ?></td>


                            <td> 


                                <a  target="_blank" href="<?= $row["EMeetRegistrationLink"]; ?>" class="btn btn-primary btn-sm btn-success">Register</a></td>

                        </tr>

                        <?php
                        $sno = $sno + 1;
                    }
                    //$conn->closeConnection();
                    // mysqli_close($conn);
                    //  mysql_close();
                } catch (Exception $exc) {

                    $exc->getMessage();
                    $resultMessage = '<font color=red size=2px>' . $exc . '</font>';
                    // header('Location: ../back-end-error.php?resultMessage=' . $resultMessage);
                    // $conn->closeConnection(); // closing the connection
                }
            }
            ?>

<!--  <tr>
    <td>
      <strong>
       
   Global Sales Meet for January
       
      </strong>
    </td>
    <td>
     January
    </td>
    
    <td>
     Jan 17th, 2015
    </td>
    <td>
   2:00 PM to 3:00 PM EST
    </td>
    
    <td><button class="btn btn-primary btn-sm btn-success" type="button">Register</button></td>
  
  </tr> 
   <tr>
    <td>
      <strong>
       
   Global Sales Meet for January
       
      </strong>
    </td>
    <td>
     February
    </td>
    
    <td>
     Feb 17th, 2015
    </td>
    <td>
   2:00 PM to 3:00 PM EST
    </td>
    
    <td><button class="btn btn-primary btn-sm btn-success" type="button">Register</button></td>
  
  </tr>
   <tr>
    <td>
      <strong>
       
   Global Sales Meet for January
       
      </strong>
    </td>
    <td>
     March
    </td>
    
    <td>
     Mar 17th, 2015
    </td>
    <td>
   2:00 PM to 3:00 PM EST
    </td>
    
    <td><button class="btn btn-primary btn-sm btn-success" type="button">Register</button></td>
  
  </tr>-->

            </tbody>

        </table>
    </div>
    <div class="row">
        <h3 class="heavy noMargin">
            Executive Meets Replay </h3>
        <div class="row">
            <div class="col-sm-3">
                <hr>
            </div><!-- This is the divider line between the heading and the content -->
        </div><!-- This is the divider line between the heading and the content -->
        <div class="row">
            <form method="post" action="<?php $_PHP_SELF ?>" id="myForm" name="myForm">

                <div class="col-sm-3">
                    <select class="form-control" name="eMeetType" id="eMeetType">
                        <option value="" selected="">Search by Access Type</option>

                        <?php if ($rtrackId == 'Global Sales Meet') { ?>
                            <option value="Global Sales Meet" selected>Global Sales Meet</option>
                        <?php } else { ?>
                            <option value="Global Sales Meet">Global Sales Meet</option> 
                        <?php } ?>
                        <?php if ($rtrackId == 'Global Practice Meet') { ?>
                            <option value="Global Practice Meet" selected>Global Practice Meet</option>
                        <?php } else { ?>
                            <option value="Global Practice Meet">Global Practice Meet</option>
                        <?php } ?>


                    </select>
                </div>



                <div class="col-sm-4"> 
                    <div id="reportrange" class="form-control">
                        <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                        <span></span> <b class="caret"></b>
                    </div>
                    <input type="hidden" id="calId1" name="calId1" value="<?= $rstartDate; ?>"/>
                    <input type="hidden" id="calId2" name="calId2" value="<?= $rendDate; ?>"/>


                </div>
                <div class="col-sm-3">
                    <select class="form-control" name="monthName" id="monthName">
                        <option value="" selected="">Search by Month</option>
                        <?php if ($rmonthName == 'January') { ?>
                            <option value="January" selected>January</option>
                        <?php } else { ?>
                            <option value="January">January</option> 
                        <?php } ?>
                        <?php if ($rmonthName == 'February') { ?>
                            <option value="February" selected>February</option>
                        <?php } else { ?>
                            <option value="February">February</option> 
                        <?php } ?>
                        <?php if ($rmonthName == 'March') { ?>
                            <option value="March" selected>March</option>
                        <?php } else { ?>
                            <option value="March">March</option>
                        <?php } ?>
                        <?php if ($rmonthName == 'April') { ?>
                            <option value="April" selected>April</option>
                        <?php } else { ?>
                            <option value="April">April</option> 
                        <?php } ?>
                        <?php if ($rmonthName == 'May') { ?>
                            <option value="May" selected>May</option>
                        <?php } else { ?>
                            <option value="May">May</option>  
                        <?php } ?>
                        <?php if ($rmonthName == 'June') { ?>
                            <option value="June" selected>June</option>
                        <?php } else { ?>
                            <option value="June">June</option> 
                        <?php } ?>

                        <?php if ($rmonthName == 'July') { ?>
                            <option value="July" selected>July</option>
                        <?php } else { ?>
                            <option value="July">July</option> 
                        <?php } ?>
                        <?php if ($rmonthName == 'August') { ?>
                            <option value="August" selected>August</option>
                        <?php } else { ?>
                            <option value="August">August</option>  
                        <?php } ?>
                        <?php if ($rmonthName == 'September') { ?>
                            <option value="September" selected>September</option>
                        <?php } else { ?>
                            <option value="September">September</option> 
                        <?php } ?>
                        <?php if ($rmonthName == 'October') { ?>
                            <option value="October" selected>October</option>
                        <?php } else { ?>
                            <option value="October">October</option>  
                        <?php } ?>
                        <?php if ($rmonthName == 'November') { ?>
                            <option value="November" selected>November</option>
                        <?php } else { ?>
                            <option value="November">November</option> 
                        <?php } ?>
                        <?php if ($rmonthName == 'December') { ?>
                            <option value="December" selected>December</option>
                        <?php } else { ?>
                            <option value="December">December</option> 
                        <?php } ?>

                    </select>

                </div>
                <div class="col-sm-2">
                    <input class="btn btn-primary btn-md col-sm-12" type="submit"  name="btnSearchSubmit" id="btnSearchSubmit" value="Search"/> 
                  <!-- <span class="input-group-btn"><span class="btn btn-primary btn-file"><input name="btnSearchSubmit" id="btnSearchSubmit" type="siv" onclick="doSearchSubmit();"> Search…</span></span>    -->
                </div>

            </form>
            <br>
            <?php
// $conn1 = new DbController();
            try {
                //    $conn1->connectToDatabase();
                //  $conn1->selectDatabase();


                $selectQuery1 = '';
                if ($queryString == '') {
                    $selectQuery1 = "SELECT Id,TYPE,VideoLink,STATUS,MONTH,EMeetDate FROM tblExecutiveMeet WHERE STATUS = 'Completed' AND DATE(EMeetDate)<DATE(NOW()) ";
                    if ($accessType != 'Both') {
                        //$selectQuery1 = $selectQuery1 . ' AND TYPE=\'' . $accessType . '\'';
                        $selectQuery1 = $selectQuery1 . ' AND TYPE=:accessType';
                    }
                    $selectQuery1 = $selectQuery1 . ' ORDER BY EMeetDate DESC';

                    $stmt = $conn->prepare($selectQuery1);
                } else {
                    $selectQuery1 = $queryString;
                    $stmt = $conn->prepare($selectQuery1);
                    if ($rtrackId != '')
                        $stmt->bindParam(':rtrackId', $rtrackId);
                    if ($rmonthName != '')
                        $stmt->bindParam(':rmonthName', $rmonthName);
                    if ($rstartDate != '')
                        $stmt->bindParam(':rstartDate', $rstartDate);
                    if ($rendDate != '')
                        $stmt->bindParam(':rendDate', $rendDate);
                    if ($accessType != 'Both')
                        $stmt->bindParam(':accessType', $accessType);
                }


                // $result1 = mysql_query($selectQuery1);
                $sno = 1;
                $rows = 0;
                $isDivClosed = false;
                $numrows = 0;
                // while ($row1 = mysql_fetch_array($result1, MYSQL_ASSOC)) {
                $stmt->execute();
                $stmt->setFetchMode(PDO::FETCH_ASSOC);

                while ($row1 = $stmt->fetch()) {
                    // $mynewtitle = explode(':', $mytitle);
                    $type = $row1["TYPE"];
                    $eMeetstatus = $row1["STATUS"];
                    $videoLink = $row1["VideoLink"];
                    $emeetDatee = strtotime($row1["EMeetDate"]);
                    //   $myvalue = strip_tags($row1["EMeetRegistrationText"]);
                    //  $desc = substr($myvalue, 0, 150);
                    $rows = $rows + 1;
                    if ($rows == 1) {
                        $numrows = $numrows + 1;
                        $isDivClosed = false;
                        ?>
                        <div class="row noMargin" id="divrow<?= $numrows ?>" style="display: none"><?php } ?>
                        <div class="col-sm-4" >
                            <div class="row"></div>
                            <div class="row"><br></div>
                            <h6  class="heavy noMargin"> <?php echo $row1["TYPE"]; ?></h6>

                            <div ><p class="noMargin">Check out the on-demand replay for the <b><?php echo $row1["TYPE"]; ?></b> of <b><?php echo $row1["MONTH"]; ?></b> which was run on <b><?php echo date('M d , Y', $emeetDatee); ?></b>. 
                                    <?php // echo $desc;   ?>


                                    <?php if ($videoLink != '') { ?>
                                        <a class="linkText" href="emeets-replay.php?exeMeetId=<?= $row1["Id"]; ?>">

                                        <?php } else { ?>
                                            <a class="linkText" href="executive-management-meets.php">
                                            <?php } ?>
                                            <br><br><button class="btn btn-primary btn-md" type="button" target="_blank" >Watch Replay</button></a> </p></div>

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
                    ?>
                    <div class="col-sm-12" >
                        <div class="row"></div>
                        <div class="row"><br></div>
                        <p> <i><?php echo 'Currently we do not have any replays available in our Executive Meet Library. Please stay tuned for the replays to be posted online!'; ?></i></p>
                    </div>
                    <?php
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
        //  header('Location: ../back-end-error.php?resultMessage=' . $resultMessage);
        // $conn->closeConnection(); // closing the connection
    }
            ?>
    </div>


    <input type="hidden" name="numRows" id="numRows" value="<?= $numrows ?>"/>


    <br>
    <?php if ($numrows > 1) { ?>
        <div class="row" id="loadMoreId">
            <div class="col-sm-2"></div>
            <div class="col-sm-10">
                <button class="btn btn-default col-sm-10" data-dismiss="modal" type="button" id="btnSubmit" name="btnSubmit" onclick="getMoreRecords();">Load More</button>
            </div>
            <div class="col-sm-1"></div>
        </div>
    <?php } ?>

    <br/>
    <!--contact form copy ends-->


</section> <!--/#error-->
<?php include '../footer.php'; ?>   

</body>
</html>
