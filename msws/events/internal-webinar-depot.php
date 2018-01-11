<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="description" content="">

        <meta name="author" content="">

        <title>
            Internal Webinar Depot | Miracle
        </title>
         <?php include '../config/Locations.php';?>
  
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/font-awesome.min.css" rel="stylesheet">
        <link href="../css/main.css" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../css/default.css"/>
        <link rel="stylesheet" type="text/css" href="../css/component.css"/>

        <script src="../js/modernizr.custom.js"></script>
        <script src="../js/ajaxUtil.js?version=2.0"></script>
        <script src="../js/fileinput.js"></script>
        <script src="../js/custom.js">
   
        </script> 
        <!-- Date pickers links start -->
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">  
        <link rel="stylesheet" type="text/css" media="all" href="../css/calander/daterangepicker-bs3.css" />
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>  
        <!--  <script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script> -->
        <script type="text/javascript" src="../js/calander/moment.js"></script>
        <script type="text/javascript" src="../js/calander/daterangepicker.js"></script>
        <!-- date pickers links end -->
        <?php session_start(); ?>
             <!--  <script type="text/javascript">
              $(function () {
                  $('#datetimepicker1').datetimepicker({
                      inline: true,
                      sideBySide: true
                  });
              });
          </script> -->
        <script type="text/javascript" src="../js/Validation.js">
        </script>
        <!--[if lt IE 9]>
    
    <script src="js/html5shiv.js">
    </script>
    
    <script src="js/respond.min.js">
    </script>
    <![endif]-->



        <link rel="shortcut icon" href="<?= AMAZON_URL ?>/images/favicon.ico">
        <!-- <script type="text/javascript">
                  var datefield=document.createElement("input")
                  datefield.setAttribute("type", "date")
                  if (datefield.type!="date"){ //if browser doesn't support input type="date", load files for jQuery UI Date Picker
                      document.write('<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />\n')
                      document.write('<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"><\/script>\n')
                      document.write('<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"><\/script>\n')
                  }
              </script>
              <script>
                  if (datefield.type!="date"){ //if browser doesn't support input type="date", initialize date picker widget:
          
                      jQuery(function($){ //on document.ready
                          $('#startDate').datepicker();
                          $('#endDate').datepicker();
                      })
                  }
              </script>
              <style type="text/css">
                  .ui-datepicker-calendar tr, .ui-datepicker-calendar td,
                  .ui-datepicker-calendar td a, .ui-datepicker-calendar th{font-size:inherit;}
                  div.ui-datepicker{font-size:12px;width:inherit;height:inherit;}
                  .ui-datepicker-title span{font-size:12px;}
              </style> -->
        <script type="text/javascript" language ="javascript">
            
            // var dispRecords = 15;
            // $(document).ready(function(){
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
     
            function doSubmit() {
         
                var loginId=document.getElementById("loginId").value;
                var password=document.getElementById("password").value;
       
              //  checkLogin(loginId,password);
               if(loginId.trim().length!=0 && password.trim().length!=0 ){
               checkLogin(loginId,password);
            }else if(loginId.trim().length==0 && password.trim().length==0){
                //document.getElementById("resultMessage").innerHTML="<font color='red'>Please enter details.</font>";
                displayErrorMessage("Please enter details.");
                 //  alert("dgddddddaaaaaaaaa---------------------->");
            }else if(loginId.trim().length==0 && password.trim().length!=0){
                //document.getElementById("resultMessage").innerHTML="<font color='red'>Please enter details.</font>";
                displayErrorMessage("Please enter loginid.");
                 //  alert("dgddddddaaaaaaaaa---------------------->");
            }else if(loginId.trim().length!=0 && password.trim().length==0){
                 displayErrorMessage("Please enter password.");
            }
            }
            function doSearchSubmit() {
                document.forms["myForm"].submit();    
            }
        </script>
 <!-- <style>
  body {
    padding-top: 50px;
    
}
.dropdown.dropdown-lg .dropdown-menu {
    margin-top: -1px;
    padding: 6px 20px;
    
}
.input-group-btn .btn-group {
    display: flex !important;
}
.btn-group .btn {
    border-radius: 0;
    margin-left: -1px;
}
.btn-group .btn:last-child {
    border-top-right-radius: 4px;
    border-bottom-right-radius: 4px;
}
.btn-group .form-horizontal .btn[type="submit"] {
  border-top-left-radius: 4px;
  border-bottom-left-radius: 4px;
}
.form-horizontal .form-group {
    margin-left: 0;
    margin-right: 0;
}
.form-group .form-control:last-child {
    border-top-left-radius: 4px;
    border-bottom-left-radius: 4px;
}

@media screen and (min-width: 768px) {
    #adv-search {
        
        margin: 0 auto;
    }
    .dropdown.dropdown-lg {
        position: static !important;
    }
    .dropdown.dropdown-lg .dropdown-menu {
        min-width: 280px;
    }
}
  </style> -->
        <?php
        $rempID = isset($_SESSION["ses_EmpLoginId"]) ? $_SESSION["ses_EmpLoginId"] : '';
        //  echo 'hii-->'.strlen($rempID).'<---';
        // if(strlen($rempID) === 0){
        // echo 'hii-->'.strlen($rempID).'<---';
        ?>









        <?php
        //}
      //  require '../config/DbController.php';
          require '../config/ConnectionProvider.php';
        $rtrackName = '';
        $rtrackId = '';
        $queryString = '';
        $rkeyWords = '';
     //   $rdepartment = '';
        $rstartDate = '';
        $rendDate = '';
        $rintWebinarId = '';
        $rintWebinarId = isset($_GET['eventId']) ? $_GET['eventId'] : '';
        // $flag = isset($_GET["flag"]) ? $_GET["flag"] : null;
        if (isset($_POST['btnSearchSubmit'])) {
            // echo 'hii';
            try {
                // $conn->connectToDatabase();
                $rintWebinarId = '';
                if (!get_magic_quotes_gpc()) {
                    $rtrackId = addslashes($_POST['trackName']);
                  //  $rdepartment = addslashes($_POST['department']);
                    $rkeyWords = addslashes($_POST['keyWords']);
                    $rstartDate = addslashes($_POST['calId1']);
                    $rendDate = addslashes($_POST['calId2']);
                } else {
                    $rtrackId = $_POST['trackName'];
                  //  $rdepartment = $_POST['department'];
                    $rkeyWords = $_POST['keyWords'];
                    $rstartDate = $_POST['calId1'];
                    $rendDate = $_POST['calId2'];
                }





                $queryString = 'SELECT event_id,event_title,event_description,WebinarType,Page_Title,After_Description,FileName FROM tblEventLines WHERE STATUS = \'Published\' AND WebinarType IN(\'E\',\'I\')';
                if ($rtrackId != '') {
                   // $queryString = $queryString . ' AND (PrimaryTrackId=' . $rtrackId . ' OR SecondaryTrackId = ' . $rtrackId . ')';
                     $queryString = $queryString . ' AND (PrimaryTrackId=:primaryrtrackId OR SecondaryTrackId = :secondaryrtrackId OR PrimaryTrackId=-1 OR SecondaryTrackId=-1)';
                }
            /*    if ($rdepartment != '') {
                    $queryString = $queryString . ' AND Department = \'' . $rdepartment . '\'';
                }*/

                if ($rkeyWords != '') {
                    //$queryString = $queryString . ' AND (MATCH(Page_Title,Department,event_title,event_description)  AGAINST (\'' . $rkeyWords . '\' IN BOOLEAN MODE) )';
                    $queryString = $queryString . ' AND (MATCH(Page_Title,Department,event_title,event_description)  AGAINST (:rkeyWords IN BOOLEAN MODE) )';
                   
                }

                if ($rstartDate != '') {
                    //$queryString = $queryString.' AND DATE_FORMAT(event_startdate, \'%m/%d/%Y\') >= DATE_FORMAT(\''.$rstartDate.'\', \'%m/%d/%Y\')';
                    //$queryString = $queryString . ' AND event_startdate>=\'' . $rstartDate . '\'';
                    $queryString = $queryString . ' AND event_startdate>=:rstartDate';
                }
                if ($rendDate != '') {
                    // $queryString = $queryString.' AND DATE_FORMAT(evetnt_enddate, \'%m/%d/%Y\') <= DATE_FORMAT(\''.$rendDate.'\', \'%m/%d/%Y\')';
                    $queryString = $queryString . ' AND evetnt_enddate<=:rendDate';
                }

                $queryString = $queryString . ' ORDER BY event_startdate DESC';
            } catch (Exception $exc) {

                $exc->getMessage();
                $resultMessage = '<font color=red size=2px>' . $exc . '</font>';
                //  $conn->closeConnection(); // closing the connection
                //    mysql_close();
            }
        }
        ?>
        <?php
//  include '../config/general.php';
        /*
          $url = 'http://localhost:8084/EmployeeService/es/general/nseerapu/123';

          // prepare the body data. Example is JSON here
          $data = json_encode(array(
          'description' => 'Inspiring Poetry',
          'public' => 'true',
          'files' => array(
          'poem.txt' => array(
          'content' => 'If I had the time, I\'d make a rhyme'
          )
          )
          ));

          // set up the request context
          $options = ["http" => [
          "method" => "POST",
          "header" => ["Authorization: token " . $access_token,
          "Content-Type: application/json"],
          "content" => $data
          ]];
          $context = stream_context_create($options);

          // make the request
          $response = file_get_contents($url, false, $context);
          $resultMessage = '';
         */
        $resultMessage = '';
        $sesLoginId = '';
        ?>
        <style>
            .modal-footer{
                margin-bottom: 20px;
            }
        </style>
    </head>

    <?php include '../header.php'; ?>
    <body>
        <script type="text/javascript">
            //    alert("hii");
            
        
            $(window).load(function(){
                var sesionLoginId = document.getElementById("sesionLoginId").value;
                var intWebinarId = document.getElementById("intWebinarId").value;
                //alert(sesionLoginId);
                // if(sesionLoginId==''){
                if(sesionLoginId=='' || (document.getElementById("intWebinarId").value!='' && parseInt(document.getElementById("intWebinarId").value,10)>0 )){
                    // alert(document.getElementById("webId").value.length)
                    // if(document.getElementById("webId").value!=''){
                    $('#myModal1').modal('show');
                }else if(document.getElementById("intWebinarId").value=='-1'){
                    $("#myModal1").modal('show');
                }else if(document.getElementById("intWebinarId").value=='-1'){
                    $("#myModal1").modal('show');
                }else if(document.getElementById("intWebinarId").value=='-2'){
                    $("#myModal1").modal('show');
                }
               
               
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
                    //   dateLimit: { days: 60 },
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

                // $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));

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

                $('#options1').click(function() {
                    $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
                });

                $('#options2').click(function() {
                    $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
                });

                $('#destroy').click(function() {
                    $('#reportrange').data('daterangepicker').remove();
                });
                  
                  
                // Search dates persistance start
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
                  
                // search dates persistance end
                  
            });
            function hideModal() {
                $('#myModal1').modal('hide');
            }
        </script>

        <input type="hidden" name="sesionLoginId" id="sesionLoginId" value="<?= $rempID ?>"/>
        <input type="hidden" name="intWebinarId" id="intWebinarId" value="<?= $rintWebinarId ?>"/>
        <!-- Modal start -->
        <?php
        if ($rempID == '' || $rintWebinarId != '') {
           // $conn = new DbController();
            $title = '';
            $mynewtitle1 = '';
            $evenDate = '';
            $eventFromDate = '';
            $eventToDate = '';
            $eventToTime = '';
            $eventFromTime = '';
            $timezone = '';
            $rtime = '';
            $rmidadyfrom = '';
            $rmidadyto = '';
            try {
              //  $conn->connectToDatabase();

              //  $conn->selectDatabase();

              //  $selectQuery = "SELECT event_title,event_startdate,evetnt_enddate,event_time_from,event_time_to,timezone,midday_from,midday_to,Page_Title FROM tblEventLines WHERE event_id= " . $rintWebinarId;
                 $selectQuery = "SELECT event_title,event_startdate,evetnt_enddate,event_time_from,event_time_to,timezone,midday_from,midday_to,Page_Title,FileName FROM tblEventLines WHERE event_id= :rintWebinarId";
               // echo $selectQuery;
//rintWebinarId
                 
                //$result = mysql_query($selectQuery);
              //  while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
                 $stmt = $conn->prepare($selectQuery);
                 $stmt->bindParam(':rintWebinarId', $rintWebinarId);
             //$result = mysql_query($selectQuery);
                 //while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
                   $stmt->execute();
                 $stmt->setFetchMode(PDO::FETCH_ASSOC);
          
                     while ($row = $stmt->fetch()) {
                    $eventFromDate = $row["event_startdate"];
                    $eventToDate = $row["evetnt_enddate"];

                    $eventToTime = strtotime($row["event_time_to"]);
                    $eventFromTime = strtotime($row["event_time_from"]);
                    $rmiddayfrom = $row["midday_from"];
                    $rmiddayto = $row["midday_to"];
                    $timezone = $row["timezone"];
                    $rtime = date('h:i  ', $eventFromTime) . $rmiddayfrom . ' to ' . date('h:i  ', $eventToTime) . $rmiddayto;
                    /* $title = strip_tags($row["event_title"]);
                      $mynewtitle = explode(':', $title);
                      $mynewtitle1 = $mynewtitle[1];
                     * *
                     */
                    $mynewtitle1 = strip_tags($row["Page_Title"]);
                    $startdata = strtotime($row["event_startdate"]);
                    $enddata = strtotime($row["evetnt_enddate"]);

                    $dateString = date('F d , Y', $startdata);

                    $startDay = date('d', $startdata);
                    $startMonth = date('F', $startdata);
                    $startYear = date('Y', $startdata);

                    $endDay = date('d', $enddata);
                    $endMonth = date('F', $enddata);
                    $endYear = date('Y', $enddata);
                    $evenDate = '';
                    if ($startDay != $endDay)
                        $evenDate = $startMonth . ' ' . $startDay . '-' . $endDay . ' ' . $startYear;
                    else
                        $evenDate = $dateString;
                }
            } catch (Exception $exc) {

                $exc->getMessage();
            }
            ?>

            <form id="internalDepotForm" name="internalDepotForm" method="post" action="#">
                <div class="modal" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static" >
                    <div class="modal-dialog" style="margin-left: -280px;">
                        <div class="modal-content">
                            <?php if ($rintWebinarId == '-1') { ?>
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="display: none"><span aria-hidden="true">&times;</span></button>
                                    <h5 class="modal-title" id="myModalLabel"><strong>Webinar not found </strong></h5><hr>
                                </div>
                            <?php } ?>
                            <?php if ($rintWebinarId == '-2') { ?>
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="display: none"><span aria-hidden="true">&times;</span></button>
                                    <h5 class="modal-title" id="myModalLabel"><strong> Webinar is completed </strong></h5><hr>
                                </div>
                            <?php } ?>
                            <?php if ($rintWebinarId != '' && $rintWebinarId != '-1' && $rintWebinarId != '-2') { ?>
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="display: none"><span aria-hidden="true">&times;</span></button>
                                    <h3 class="modal-title" id="memberModalLabel"><strong>Registration Successful</strong> </h3><hr>
                                </div>
                            <?php } ?>


                            <div class="modal-body" style="margin-top: -10px;"> 
                                <?php if ($rintWebinarId == '-1') { ?>
                                    <p class="methodText"> The webinar link that you accessed is not available anymore. By closing this dialogue you can browse through our collection of Internal webinars. </p> 
                                    <?php if ($rempID != '') { ?>
                                        <div class="modal-footer">
                                            <button type="button" class=" btn-primary btn-lg btn-successbtn btn-default" data-dismiss="modal">Okay</button>
                                        </div>
                                    <?php } ?>
                                <?php } else if ($rintWebinarId == '-2') { ?>
                                    <p class="methodText" > The Webinar you are looking for is already completed and Replay link will be available soon. You can see other webinar happening below.  </p> 
                                    <?php if ($rempID != '') { ?>
                                        <div class="modal-footer">
                                            <button type="button" class=" btn-primary btn-lg btn-successbtn btn-default" data-dismiss="modal">Okay</button>
                                        </div>
                                    <?php } ?>
                                <?php } ?> 

                                <?php if ($rintWebinarId != '' && $rintWebinarId != '-1' && $rintWebinarId != '-2') { ?>



                                    <p class="methodText">Thank you for registering for our webinar <strong><?php echo $mynewtitle1; ?></strong> on <strong><?php echo $evenDate; ?></strong> at <strong><?php echo $rtime; ?> <?php echo $timezone; ?></strong>. 
                                        You will be receiving a confirmation email soon.  </p> 
                                    <?php if ($rempID != '') { ?>
                                        <div class="modal-footer">
                                            <button type="button" class=" btn-primary btn-lg btn-successbtn btn-default" data-dismiss="modal">Continue</button>
                                        </div>
                                    <?php } ?>
                                <?php } ?>

                                <?php if ($rempID == '') { ?>
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

                                    <!--                                            <div class="col-sm-9">
                                    
                                                                                    <span id="resultMessage"></span>
                                                                                    <span id="loading" style="display: none"><font color="red" size="3px">Loading please wait...</font></span>
                                    
                                                                                </div> 
                                                                            </div>-->
                                   <!-- <div class="row">
                                        <span id="resultMessage"></span></div>
                                    <div class="row"><span id="loading" style="display: none"><font color="red" size="3px">Loading please wait...</font></span></div> -->
                                    <div class="row">
                                          <div class="col-sm-12"> 
                                              <div class="alert alert-danger" style="display:none" id="errorMsgDiv">
                                                  <button type="button" class="close" onclick="closeErrorMsg()" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong><span id="resultMessage">Invalid details!!</span></strong> 
                        </div>                        
                                          </div>
                                    </div>
                                    <div class="row" style="margin-top:-10px;">
                                        <hr> 
                                    </div>

                                    <div class="row" >
                                        <div class="col-sm-4" >
                                          <!--  <input type="button" value="Login" tabindex="3" class="btn btn-primary col-sm-12" style="margin-left:5px;" name="btnSubmit1" id="btnSubmit1" onclick="doSubmit();"> -->
                                              <button type="button" class="btn btn-primary col-md-12" data-loading-text="<i class='fa fa-spinner fa-spin '></i> loading..." style="margin-left:5px;" name="btnSubmit1" id="btnSubmit1" onclick="doSubmit();" tabindex="3">Login</button>									
                                        </div>
                                    </div>



                                    <div class="col-sm-6"></div> 
                                </div>


                                <div class="col-sm-8"></div>   
                            </div>


                        </div>
                    </div>
                    <!--
                    <div class="col-sm-2"></div> 
                </div>
              

                <div class="modal-footer" style="margin-top:-10px; ">     
                    <div class="row">

                    <!--  <div class="col-sm-6"> 
                          <a href="../forgot-password.php" class="linkText"> <strong>Forgot password !! </strong>&nbsp;&nbsp;</a>
                      </div> -->
                    <!--      </div>
                              <div class="row" >
                                  <hr> 
                              </div>

                              <div class="row" >
                                  <div class="col-sm-4" >
                                      <input type="button" value="Login" tabindex="3" class="btn btn-primary col-sm-12" style="margin-left:15px;" name="btnSubmit1" id="btnSubmit1" onclick="doSubmit();">
                                  </div>
                              </div>
                    <!--  
                     <div class="col-sm-4">
                           <input type="button" value="Login" tabindex="3" class="btn btn-primary col-sm-12" style="margin-left:-16px;" name="btnSubmit1" id="btnSubmit1" onclick="doSubmit();">

                           </input>
                       </div> -->
                    <!--      <div class="col-sm-8">
                          </div>
                      </div> 

                  </div> -->
                <?php } ?>
            </div>
        </div>
    </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog end -->
    </form>


    </div>
<?php } ?>
<section  class="container">
    <br> <br> <br>
    <div class="row">
        <div class="col-sm-7 text-left" style="margin-left:-15px;">
            <h1 class="heavy">
                Internal Webinar Depot
            </h1>
        </div>
        <div class="col-sm-5 text-right">
            <ul class="breadcrumb pull-right">
                <li>
                    <a href="../">Home</a>
                </li>
                <li>
                    <a href="../events/">
                        Events
                    </a></li>
                <li class="active">Internal Webinar Depot
                </li>
            </ul>
        </div>
    </div>

    <div class="row">
        <br>
        <h3 class="heavy noMargin">Upcoming Webinars </h3>
        <div class="row">
            <div class="col-sm-4">
                <!-- <hr> -->
            </div><!-- This is the divider line between the heading and the content -->
        </div>
        <table class="table table-hover table-striped">

            <thead>

                <tr>

                    <th>
                        #
                    </th>

                    <th>
                        Title
                    </th>

                    <th>
                        Date
                    </th>
                    <th>
                        Time
                    </th>
                    <th>
                        Speaker(s)
                    </th>
                    <th>
                        Register
                    </th>

                </tr>
            </thead>

            <tbody>
                <?php

// include '../config/Locations.php';
//    include '../config/general.php';


                function getWebinarUrl($webEventId) {
                    //$conn = new DbController();
                    require '../config/ConnectionProvider.php';
                    $webinarUrl = '';

                    //  echo 'eventId-->'.$webEventId;
                    try {
                      //  $conn->connectToDatabase();
                     //   $conn->selectDatabase();
                      //  $selectQuery = "SELECT Id,Download_Id,WebinarId FROM tblWebDownloadsLines WHERE WebinarId=" . $webEventId;
                          $selectQuery = "SELECT Id,Download_Id,WebinarId FROM tblWebDownloadsLines WHERE WebinarId=:webEventId";
                        //$result = mysql_query($selectQuery) or die(mysql_error());
                       // ;
                           $stmt = $conn->prepare($selectQuery);
              $stmt->bindParam(':webEventId', $webEventId);
               $stmt->execute();
                $num_rows = $stmt->rowCount();
                 $stmt->setFetchMode(PDO::FETCH_ASSOC);
                    //    if (mysql_num_rows($result) > 0) {
                 if ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
                           // $row = mysql_fetch_row($result);
                            $rWebinarRefId = $row[0];
                            $rWebinarObjectId = $row[1];
                            $rWebinarEventId = $row[2];
                            $webinarUrl = "../resource/get-resource.php?eventId=" . $rWebinarEventId . "&objectId=" . $rWebinarObjectId . "&refId=" . $rWebinarRefId;
                            // echo "webinarid-->".$webinarUrl;
                        }
                    } catch (Exception $exc) {

                        $exc->getMessage();
                        $resultMessage = '<font color=red size=2px>' . $exc . '</font>';
                        header('Location: ../back-end-error.php?resultMessage=' . $resultMessage);
                        // $conn->closeConnection(); // closing the connection
                    }
                    return $webinarUrl;
                }

                function getPrimarySpeakers($webinarId) {
                   // $conn = new DbController();
                    $speakers = '';
                     require '../config/ConnectionProvider.php';
                    try {
                      //  $conn->connectToDatabase();
                      //  $conn->selectDatabase();
                        //  $selectQuery = "SELECT event_speaker FROM tblEventSpeakers WHERE event_id = " . $webinarId . " AND primary_speaker=1 AND STATUS='Active'";
                     //   $selectQuery = "SELECT SpeakerName FROM vwSpeakerList WHERE EventId=" . $webinarId . " AND ObjectType = 'EV' AND PrimaryFlag=1 AND STATUS='Active'";
                           $selectQuery = "SELECT SpeakerName FROM vwSpeakerList WHERE EventId=:webinarId AND ObjectType = 'EV' AND PrimaryFlag=1 AND STATUS='Active'";
                        //$result = mysql_query($selectQuery);
                           $stmt = $conn->prepare($selectQuery);
              $stmt->bindParam(':webinarId', $webinarId);
               $stmt->execute();
                $num_rows = $stmt->rowCount();
                 $stmt->setFetchMode(PDO::FETCH_ASSOC);
                       // $num_rows = mysql_num_rows($result);
                        $countSpeakers = 0;
                     //   while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
                         while ($row = $stmt->fetch()) {
                            $countSpeakers++;
                            if ($countSpeakers === $num_rows) {
                                $speakers = $speakers . $row["SpeakerName"] . '<BR>';
                            } else {
                                $speakers = $speakers . $row["SpeakerName"] . '|' . '<BR>';
                            }
                        }
                    } catch (Exception $exc) {

                        $exc->getMessage();
                        $resultMessage = '<font color=red size=2px>' . $exc . '</font>';
                        header('Location: ../back-end-error.php?resultMessage=' . $resultMessage);
                        // $conn->closeConnection(); // closing the connection
                    }
                    return $speakers;
                }

                function getSpeakers($webinarId) {
                    //$conn = new DbController();
                    $speakers = '';
                     require '../config/ConnectionProvider.php';
                     
                    try {
                        //$conn->connectToDatabase();
                       // $conn->selectDatabase();
                        //$selectQuery = "SELECT event_speaker FROM tblEventSpeakers WHERE event_id = " . $webinarId . " AND STATUS='Active'";
                       // $selectQuery = "SELECT SpeakerName FROM vwSpeakerList WHERE EventId=" . $webinarId . " AND ObjectType = 'EV' AND STATUS='Active' ORDER BY PrimaryFlag DESC";
                         $selectQuery = "SELECT SpeakerName FROM vwSpeakerList WHERE EventId=:webinarId AND ObjectType = 'EV' AND STATUS='Active' ORDER BY PrimaryFlag DESC";
                          $stmt = $conn->prepare($selectQuery);
              $stmt->bindParam(':webinarId', $webinarId);
               $stmt->execute();
                $num_rows = $stmt->rowCount();
                 $stmt->setFetchMode(PDO::FETCH_ASSOC);
                       // $result = mysql_query($selectQuery);
                      //  $num_rows = mysql_num_rows($result);

                        $countSpeakers = 0;
                     //   while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
                           while ($row = $stmt->fetch()) {
                            $countSpeakers++;
                            if ($countSpeakers === $num_rows) {
                                $speakers = $speakers . $row["SpeakerName"] . '<BR>';
                            } else {
                                $speakers = $speakers . $row["SpeakerName"] . '|' . '<BR>';
                            }
                        }
                    } catch (Exception $exc) {

                        $exc->getMessage();
                        $resultMessage = '<font color=red size=2px>' . $exc . '</font>';
                        header('Location: ../back-end-error.php?resultMessage=' . $resultMessage);
                        // $conn->closeConnection(); // closing the connection
                    }
                    return $speakers;
                }

            //    $conn1 = new DbController();
                try {
                 //   $conn1->connectToDatabase();
                    //$conn1->selectDatabase();
                    /*    $selectQuery1 = "SELECT event_id,event_title,event_startdate,event_time_from,event_time_to,midday_from,midday_to,timezone,
                      RegistrationLink,STATUS FROM tblEventLines WHERE STATUS = 'Active' AND event_startdate >= CURDATE() AND event_type='W'
                      AND WebinarType=('E' OR 'I') ORDER BY event_startdate"; */
                    $selectQuery1 = "SELECT event_id,event_title,event_startdate,event_time_from,event_time_to,midday_from,midday_to,timezone,
                 RegistrationLink,STATUS,WebinarType,FileName FROM tblEventLines WHERE STATUS = 'Active'  
                 AND WebinarType IN ('E','I') ORDER BY event_startdate ";
                   // $result1 = mysql_query($selectQuery1);
                    $stmt = $conn->prepare($selectQuery1);
                    $sno = 1;
 $stmt->execute();
                
                 $stmt->setFetchMode(PDO::FETCH_ASSOC);
                   // while ($row = mysql_fetch_array($result1, MYSQL_ASSOC)) {
                    while ($row = $stmt->fetch()) {
                        //printf("ID: %s  Name: %s", $row["id"], $row["name"]);
                        $webinarId = $row["event_id"];
                        $webinarDate = strtotime($row["event_startdate"]);

                        $dispSpeakars = '';
                        $dispSpeakars = getSpeakers($webinarId);
                        $primarySpeakers = getPrimarySpeakers($webinarId);
                        if ($primarySpeakers != '') {
                            ?>
                            <tr>
                                <td> <?php echo $sno; ?></td>
                                <td> <strong><?php echo $row["event_title"]; ?> </strong></td>
                                <td><?php echo date('M d , Y', $webinarDate); ?></td>

                                <td><?php echo date('h:i', strtotime($row["event_time_from"])) . ' ' . $row["midday_from"] . ' to ' . date('h:i', strtotime($row["event_time_to"])) . ' ' . $row["midday_to"] . ' ' . $row["timezone"]; ?></td>

                                <td> <?php
                //echo getSpeakers($webinarId);
                echo $dispSpeakars;
                            ?></td>
                                <td> 
                                    <?php
                                    $url = '';
                                    if ($row["WebinarType"] == 'I') {
                                        $url =  '../webinars/'.$row["FileName"];
                                    } else {
                                        $url =  '../webinars/'.$row["FileName"];
                                    }
                                    ?>

                                    <a href="<?= $url; ?>" class="btn btn-primary btn-sm btn-success">Register</a></td>

                            </tr>

                            <?php
                             $sno = $sno + 1;
                        }
                       
                    }
                    //$conn->closeConnection();
                    // mysqli_close($conn);
                   // mysql_close();
                } catch (Exception $exc) {

                    $exc->getMessage();
                    $resultMessage = '<font color=red size=2px>' . $exc . '</font>';
                    header('Location: ../back-end-error.php?resultMessage=' . $resultMessage);
                    // $conn->closeConnection(); // closing the connection
                }
                ?>

 <!-- <tr>
    
    <td>
      1
    </td>
    <td>
      <strong>
       
   IBM Partner University Enablement <br>for Sales Professionals
       
      </strong>
    </td>
    <td>
     June 17th, 2015
    </td>
    <td>
   2:00 PM to 3:00 PM EST
    </td>
    <td>
    Rick Paila</td>
    <td><button class="btn btn-primary btn-sm btn-success" type="button">Register</button></td>
  </tr>
 <tr>
    
    <td>
      2
    </td>
    <td>
      <strong>
       
    Miracle Who we are and What we do
       
      </strong>
    </td>
    <td>
     June 18th, 2015
    </td>
    <td>
   3:00 PM  to 4:00 PM EST
    </td>
     <td>
    Chanakya Lokam
    </td>
    <td><button class="btn btn-primary btn-sm btn-success" type="button">Register</button></td>
  </tr>
 <tr>
    
    <td>
      3
    </td>
    <td>
      <strong>
       
    Data Power - SOMA Scripts
    <br>for Auto Deployment and What Next?
       
      </strong>
    </td>
    <td>
      June 30th, 2015
    </td>
    <td>
     1:00 PM  to 1:30 PM EST
    </td>
     <td>
    Hanu Veluri</td>
    <td><button class="btn btn-primary btn-sm btn-success" type="button">Register</button></td>
  </tr> -->

            </tbody>

        </table>
    </div>
    <div class="row">
        <h3 class="heavy noMargin">
            On-Demand Webinars </h3>
        <div class="row">
            <div class="col-sm-4">
                <hr>
            </div><!-- This is the divider line between the heading and the content -->
        </div><!-- This is the divider line between the heading and the content -->


        <form method="post" action="<?php $_PHP_SELF ?>" id="myForm" name="myForm">
            <div class="row">

                <div class="col-sm-4">
                    <select class="form-control" name="trackName" id="trackName">
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
                      //  $conn->connectToDatabase();
                       // $conn->selectDatabase();
                        //  $query="SELECT DISTINCT TrackName FROM tbLKTrackNames WHERE TrackName != ''";
                        $query = "SELECT Id,TrackName FROM tbLKTrackNames WHERE TrackName != '' AND Id!='-1' ORDER BY TrackName";
                  //      $result = mysql_query($query) or die(mysql_error());
                        $stmt = $conn->prepare($query);
                         $stmt->execute();
                         $stmt->setFetchMode(PDO::FETCH_ASSOC);
                      //  while ($row = mysql_fetch_array($result)) {
                           while ($row = $stmt->fetch()) {
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

               
                <div class="col-sm-4">
                    <!--Date search-->
                    <div id="reportrange" class="form-control">
                        <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                        <span></span> <b class="caret"></b>
                    </div>
                    <input type="hidden" id="calId1" name="calId1" value="<?= $rstartDate; ?>"/>
                    <input type="hidden" id="calId2" name="calId2" value="<?= $rendDate; ?>"/>
                    <!--Date search-->
                </div>        

                <div class="col-sm-4">
                    <div class="form-group">

                        <div class="input-group">
                            <input class="form-control" placeholder="Enter Key Words" name="keyWords" id="keyWords" type="text" value="<?= $rkeyWords ?>">


                            <span class="input-group-btn"><span class="btn btn-primary btn-file"><input name="btnSearchSubmit" id="btnSearchSubmit" type="siv" onclick="doSearchSubmit();"> Search…</span></span> 
                            <!-- <button type="submit" tabindex="13" class="btn btn-primary" name="btnJobSubmit" id="btnJobSubmit">Search&hellip;</button>   -->
                        </div>

                    </div>
                </div>

        
    </div>
</form>

<?php
//$conn1 = new DbController();
try {
  //  $conn1->connectToDatabase();
    //$conn1->selectDatabase();



    if ($queryString == '') {
        $selectQuery1 = "SELECT event_id,event_title,event_description,event_startdate,event_time_from,event_time_to,midday_from,midday_to,timezone,RegistrationLink,STATUS,VideoLink,WebinarType,Page_Title,After_Description,FileName FROM tblEventLines
WHERE STATUS = 'Published' AND WebinarType IN('E','I') ORDER BY event_startdate DESC";
         $stmt = $conn->prepare($selectQuery1); 
        
    } else {
        $selectQuery1 = $queryString;
         
                   $stmt = $conn->prepare($selectQuery1); 
                              if ($rtrackId != '') {
                                 $stmt->bindParam(':primaryrtrackId', $rtrackId);
                                  $stmt->bindParam(':secondaryrtrackId', $rtrackId);
                             }
                             if ($rkeyWords != '') 
                                   $stmt->bindParam(':rkeyWords', $rkeyWords);
                            if ($rstartDate != '')
                                  $stmt->bindParam(':rstartDate', $rstartDate);
                              if ($rendDate != '')
                                   $stmt->bindParam(':rendDate', $rendDate);
    }

    //   echo $selectQuery1;
   // $result1 = mysql_query($selectQuery1);
    $sno = 1;
    $rows = 0;
    $isDivClosed = false;
    $numrows = 0;
    $stmt->execute();
    
  //  while ($row = mysql_fetch_array($result1, MYSQL_ASSOC)) {
 while ($row = $stmt->fetch()) {
        $mytitle = strip_tags($row["event_title"]);
        $mynewtitle = explode(':', $mytitle);

        $webEventId = $row["event_id"];
        $webinarType = $row["WebinarType"];
        $myvalue = strip_tags($row["After_Description"]);

        $desc = substr($myvalue, 0, 150);
        $rows = $rows + 1;
        if ($rows == 1) {
            $numrows = $numrows + 1;
            $isDivClosed = false;
            ?>
                <div class="row" id="divrow<?= $numrows ?>" style="display: none"><?php } ?>
                <div class="col-sm-4" >


                    <h6  class="heavy noMargin"> <?php echo $row["Page_Title"]; ?></h6>

                    <div ><p class="noMargin"><?php echo $desc; ?>...


        <?php if ($webinarType == 'E') { ?>
                                <a class="linkText" href="../webinars/<?= $row["FileName"]; ?>">

                            <?php } else { ?>
                                    <a class="linkText" href="../webinars/<?= $row["FileName"]; ?>">
        <?php } ?>
                                    <br><br><button class="btn btn-primary btn-md" type="button">Watch Replay</button></a> </p></div>

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
    header('Location: ../back-end-error.php?resultMessage=' . $resultMessage);
    // $conn->closeConnection(); // closing the connection
}
        ?>

</div>

<input type="hidden" name="numRows" id="numRows" value="<?= $numrows ?>"/>

<!-- <div class="row"><!-- Article Listing starts here -->
<!--  <div class="col-sm-4">
         
         <h5 class="heavy noMargin" align="left" class="heavy">Product Catalog Implementation and Support for Global Carpet Retailer</h5>
         <div class="row">
             <div class="col-sm-6 noMargin"><hr></div>
         </div>
         <p class="noMargin">With over 10,000 products in their catalog and a global presence demanding 1800 employees and 49 distribution centers for their 11,000 customer base...| <a href="#"><button class="btn btn-primary btn-md" type="button">Watch Video</button></a></p>
        
  </div>
   <div class="col-sm-4">
         
         <h5 class="heavy noMargin" align="left" class="heavy">Automated Scripting and Data load Functions for Global Carpet Retailer</h5>
         <div class="row">
             <div class="col-sm-6 noMargin"><hr></div>
         </div>
         <p class="noMargin">With over 10,000 products in their catalog and a global presence demanding 1800 employees and 49 distribution centers for their 11,000 customer base...| <a href="#"><button class="btn btn-primary btn-md" type="button">Watch Video</button></a></p>
        
  </div>
   <div class="col-sm-4">
         
         <h5 class="heavy noMargin" align="left" class="heavy">End-to-End Validation QA and Testing for Finanical Holdings Firms </h5>
         <div class="row">
             <div class="col-sm-6 noMargin"><hr></div>
         </div>
         <p class="noMargin">Our customer is a financial holding company with investments primarily in companies focused on providing financial services. The migration process req...| <a href="#"><button class="btn btn-primary btn-md" type="button">Watch Video</button></a></p>
        
  </div>
</div> -->
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
</div>
<!--contact form copy starts-->
</div>

</div>  
<br/>
<!--contact form copy ends-->

</section> <!--/#error-->
<?php include '../footer.php'; ?>   

</body>
</html>
