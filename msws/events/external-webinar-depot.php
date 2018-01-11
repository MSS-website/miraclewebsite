<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="">
    
    <meta name="author" content="">
    
    <title>
      External Webinar Depot | Miracle
    </title>
      <?php include '../config/Locations.php';?>
  
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
  <!-- date pickers links end -->
   
    <script type="text/javascript" language ="javascript">
        function doSubmit(){
            document.forms["myForm"].submit();    
            }
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
     
     
  </script>
<style>
            .modal-footer{
                margin-bottom: 20px;
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
                    url("<?= AMAZON_URL ?>/images/banners/webinar-depot.png");
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
              /*  background-position:0px 71px;*/
            }



        </style>
   
<!--
 <style>
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
  </style>  -->

  <?php
//     require '../config/DbController.php';
   require '../config/ConnectionProvider.php';
      $rtrackName = '';
       $rtrackId = '';
      $queryString  = '';
        $rkeyWords = '';
        // $rdepartment = '';
         $rstartDate = '';
         $rendDate = '';
         $rextWebinarId = '';
         $rextWebinarId = isset($_GET['eventId']) ? $_GET['eventId'] : '';
       // $flag = isset($_GET["flag"]) ? $_GET["flag"] : null;
   if(isset($_POST['btnSearchSubmit'])){
            // echo 'hii';
       $rextWebinarId = '';
try{
   // $conn->connectToDatabase();
    
    if(! get_magic_quotes_gpc() ){
         $rtrackId = addslashes ($_POST['trackName']);
        // $rdepartment = addslashes ($_POST['department']);
         $rkeyWords = addslashes ($_POST['keyWords']);
         $rstartDate = addslashes ($_POST['calId1']);
         $rendDate = addslashes ($_POST['calId2']);
         
    }else {
        $rtrackId = $_POST['trackName'];
       // $rdepartment = $_POST['department'];
        $rkeyWords = $_POST['keyWords'];
        $rstartDate = $_POST['calId1'];
        $rendDate = $_POST['calId2'];
    }
    
    
    
    
    
    //$queryString = 'SELECT event_id,event_title,event_description FROM tblEventLines WHERE event_startdate < CURDATE() AND WebinarType=\'E\' AND STATUS=\'Closed\''  ;
    
    $queryString = 'SELECT Id,Download_Id,event_id,event_title,event_description,event_startdate,event_time_from,event_time_to,midday_from,midday_to,
timezone,RegistrationLink,tblEventLines.STATUS,tblEventLines.VideoLink ,Page_Title,After_Description,FileName FROM tblEventLines LEFT JOIN tblWebDownloadsLines ON (tblEventLines.event_id=tblWebDownloadsLines.WebinarId)
WHERE  WebinarType=\'E\' AND tblEventLines.STATUS=\'Published\'';
    if($rtrackId != ''){
       // $queryString = $queryString.' AND (tblEventLines.PrimaryTrackId='.$rtrackId.' OR tblEventLines.SecondaryTrackId = '.$rtrackId.')';
         $queryString = $queryString.' AND (tblEventLines.PrimaryTrackId=:primaryrtrackId OR tblEventLines.SecondaryTrackId = :secondaryrtrackId OR tblEventLines.PrimaryTrackId=-1 OR tblEventLines.SecondaryTrackId = -1)';
    }
   
    
    if($rkeyWords != ''){
        // $queryString = $queryString.' AND (MATCH(Page_Title,Department,event_title,event_description)  AGAINST (\''.$rkeyWords.'\' IN BOOLEAN MODE) )';
         $queryString = $queryString.' AND (MATCH(Page_Title,Department,event_title,event_description)  AGAINST (:rkeyWords IN BOOLEAN MODE) )';
       
    }
    
     if($rstartDate != ''){
        //$queryString = $queryString.' AND DATE_FORMAT(event_startdate, \'%m/%d/%Y\') >= DATE_FORMAT(\''.$rstartDate.'\', \'%m/%d/%Y\')';
     //    $queryString = $queryString.' AND event_startdate>=\''.$rstartDate.'\'';
             $queryString = $queryString.' AND event_startdate>=:rstartDate';
         
    }
     if($rendDate != ''){
       // $queryString = $queryString.' AND DATE_FORMAT(evetnt_enddate, \'%m/%d/%Y\') <= DATE_FORMAT(\''.$rendDate.'\', \'%m/%d/%Y\')';
       //  $queryString = $queryString.' AND evetnt_enddate<=\''.$rendDate.'\'';
           $queryString = $queryString.' AND evetnt_enddate<=:rendDate';
    }
    
    $queryString = $queryString.' ORDER BY event_startdate DESC';
   
    
    $dateformat = '';
    $startForamt = strtotime($rstartDate);
    $startForamt = date('F', $startForamt).' '.date('d', $startForamt).', '.date('Y', $startForamt);
    
    //echo  'strt-->'.$startForamt;
    $endFormat = strtotime($rendDate);
    $endFormat = date('F', $endFormat).' '.date('d', $endFormat).', '.date('Y', $endFormat);
 $dateformat = $startForamt.' - '.$endFormat;
 $searchDate = $dateformat;
//echo '<script type=\'text/javascript\'>$(\'#reportrange span\').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));';
 //echo 'huii-->'.$dateformat;
 echo $searchDate;
 //echo '<script type=\'text/javascript\'>$(\'#reportrange span\').html('.$dateformat.'));</script>';
    
}catch(Exception $exc){
       
      $exc->getMessage();
         $resultMessage= '<font color=red size=2px>'.$exc.'</font>';
               //  $conn->closeConnection(); // closing the connection
     //    mysql_close();
                   
}
               
         }
        
 
  ?>
 
    

  </head>
  <?php include '../header.php';?>
  

    

  <!-- Modal -->
  
  <body>    
       <script type="text/javascript">
      //    alert("hii");
    $(window).load(function(){
       // alert(document.getElementById("webId").value.length)
        if(document.getElementById("webId").value!=''&&parseInt(document.getElementById("webId").value,10)>0){
        $('#myModal1').modal('show');
        }else if(document.getElementById("webId").value=='-1'){
            $("#myEventModal").modal('show');
        }else if(document.getElementById("webId").value=='-2'){
              $("#myExternalModal").modal('show');
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
      <input type ="hidden" name="webId" id="webId" value="<?= $rextWebinarId?>"/> 
        <?php 
        
        if($rextWebinarId!='') { 
        //  $conn = new DbController();
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
                // $conn->connectToDatabase();
               
             //$conn->selectDatabase();
            
           //  $selectQuery = "SELECT event_title,event_startdate,evetnt_enddate,event_time_from,event_time_to,timezone,midday_from,midday_to FROM tblEventLines WHERE WebinarId= '".$rextWebinarId."'";
            //   $selectQuery = "SELECT event_title,event_startdate,evetnt_enddate,event_time_from,event_time_to,timezone,midday_from,midday_to,Page_Title FROM tblEventLines WHERE event_id= ".$rextWebinarId;
                 $selectQuery = "SELECT event_title,event_startdate,evetnt_enddate,event_time_from,event_time_to,timezone,midday_from,midday_to,Page_Title,FileName FROM tblEventLines WHERE event_id= :rextWebinarId";
         //  echo $selectQuery;
              $stmt = $conn->prepare($selectQuery);
                 $stmt->bindParam(':rextWebinarId', $rextWebinarId);
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
                    $rtime=  date('h:i  ', $eventFromTime).$rmiddayfrom.' to '.date('h:i  ', $eventToTime).$rmiddayto;
                    /*$title =strip_tags($row["event_title"]);
                 $mynewtitle =explode( ':', $title );
                 $mynewtitle1 = $mynewtitle[1];*/
                    $mynewtitle1 = strip_tags($row["Page_Title"]);
                 $startdata= strtotime($row["event_startdate"]);
                  $enddata= strtotime($row["evetnt_enddate"]);
                  
                  $dateString = date('F d , Y', $startdata);
                  
                     $startDay =  date('d', $startdata);
                     $startMonth =  date('F', $startdata);
                     $startYear =  date('Y', $startdata);
                     
                     $endDay =  date('d', $enddata);
                      $endMonth =  date('F', $enddata);
                       $endYear =  date('Y', $enddata);
                  $evenDate = '';
                  if($startDay!=$endDay)
                      $evenDate = $startMonth.' '.$startDay.'-'.$endDay.' '.$startYear;
                  else
                      $evenDate = $dateString;
                 }
                
        }catch(Exception $exc){
       
      $exc->getMessage();

        }    
          ?>
      
      
   
<div class="modal fade" id="myEventModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" a-keyboard="false" data-backdrop="static">
                <div class="modal-dialog modal-md" style="margin-left: -280px;">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h5 class="modal-title" id="myModalLabel"><strong>Webinar Not Found</strong></h5><hr>
                        </div>
                        <div class="modal-body" style="margin-top:-20px;">
                            The webinar link that you accessed is not available anymore. By closing this dialogue you can browse through our collection of External webinars.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal" >Okay</button>

                        </div>
                    </div>
                </div>
            </div>
      
  <div class="modal" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog" style="margin-left: -280px;">
      <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title" id="memberModalLabel"><strong>Registration Successful</strong> </h4><hr>
      </div>
        
       <!-- <div class="modal-body"> 
         <p class="methodText">Thank you for registering for our webinar <strong>IBM Partner University Enablement
for Sales Professionals </strong>on <strong>June 17th, 2015</strong> at <strong>2:00 PM to 3:00 PM EST</strong>. You will be receiving a confirmation email soon.  </p>
        </div> -->
        <div class="modal-body" style="margin-top:-20px;"> 
         <p class="methodText">Thank you for registering for our webinar <strong><?php echo $mynewtitle1; ?></strong> on <strong><?php echo $evenDate; ?></strong> at <strong><?php echo $rtime;?> <?php echo $timezone;?></strong>. You will be receiving a confirmation email soon.  </p>
        </div>
        <div class="modal-footer">
         <button type="button" class=" btn-primary btn-lg btn-successbtn btn-default" data-dismiss="modal">Continue</button>
         <br> <br> 
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>
      <div class="modal fade" id="myExternalModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" a-keyboard="false" data-backdrop="static">
                <div class="modal-dialog modal-md" style="margin-left: -280px;">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="getWebinarType();"><span aria-hidden="true">&times;</span></button>
                            <h5 class="modal-title" id="myModalLabel"><strong>Webinar is Completed</strong></h5><hr>
                        </div>
                        <div class="modal-body">
                            The Webinar you are looking for is already completed and Replay link will be available soon. You can see other webinar happening below.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal" >Okay</button>

                        </div>
                    </div>
                </div>
            </div>

<?php } ?>



<!-- Header image code starts -->
 <section>
        <div class="overlay section_bg">
            <div class=" container">
                <br>
                <div class="row">    
                    <div class="col-sm-7 text-left" style="margin-bottom:16px;">  
                        <br>
                        <h1 class="micro "><font color="#fff"><strong>Webinar Depot</strong></font></h1>

                    </div>
                    <div class="col-sm-5 text-right">
                        <br>
                       <ul class="breadcrumb pull-right">
                        <li><a href="../">Home</a></li>
                        <!-- Breadcrumb div starts here --> 
                        <li>
                       <a href="../events/">
                Events
              </a></li>
                        <li class="active">Webinar Depot
                        </li>
                        <!-- Breadcrumb div Ends here --> 
                    </ul>
                    </div>
                </div><br>
            </div>
        </div>

    </section>
    
    
<!-- Header image code end -->



     <section  class="container">
<br>
     
     
<div class="row">
        <br>
        <h3 class="heavy noMargin">Upcoming Webinars </h3>
        <div class="row">
                        <div class="col-sm-4">
                            <hr>
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
     
       
         function getPrimarySpeakers($webinarId)
         {
             //$conn = new DbController();
            $speakers = '';
            require '../config/ConnectionProvider.php';
            
            try {
                // $conn->connectToDatabase();
            // $conn->selectDatabase();
            // $selectQuery = "SELECT event_speaker FROM tblEventSpeakers WHERE event_id = ".$webinarId." AND primary_speaker=1 AND STATUS='Active'";
             $selectQuery = "SELECT SpeakerName FROM vwSpeakerList WHERE EventId=:webinarId AND ObjectType = 'EV' AND PrimaryFlag=1 AND STATUS='Active'";
            // $result = mysql_query($selectQuery);
             //$num_rows = mysql_num_rows($result);
              $stmt = $conn->prepare($selectQuery);
              $stmt->bindParam(':webinarId', $webinarId);
               $stmt->execute();
                $num_rows = $stmt->rowCount();
                 $stmt->setFetchMode(PDO::FETCH_ASSOC);
          
                     
             $countSpeakers = 0;
                // while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
             while ($row = $stmt->fetch()) {
                     $countSpeakers++;
                                    if($countSpeakers===$num_rows){
                                        $speakers = $speakers . $row["SpeakerName"].'<BR>';
                                    }else {
                                        $speakers = $speakers . $row["SpeakerName"].'|' . '<BR>';
                                    }
                 }
                
        }catch(Exception $exc){
       
      $exc->getMessage();
         $resultMessage= '<font color=red size=2px>'.$exc.'</font>';
          header('Location: ../back-end-error.php?resultMessage='.$resultMessage); 
                // $conn->closeConnection(); // closing the connection
                   
}
    return $speakers;
}

        
        function getSpeakers($webinarId)
         {
            
               require '../config/ConnectionProvider.php';
          //  $conn = new DbController();
            $speakers = '';
            try {
              //   $conn->connectToDatabase();
            // $conn->selectDatabase();
            // $selectQuery = "SELECT event_speaker FROM tblEventSpeakers WHERE event_id = ".$webinarId." AND STATUS='Active'";
              $selectQuery = "SELECT SpeakerName FROM vwSpeakerList WHERE EventId=:webinarId AND ObjectType = 'EV' AND STATUS='Active' ORDER BY PrimaryFlag DESC";
            // $result = mysql_query($selectQuery);
            //  $stmt = $conn->prepare($selectQuery);
             //$num_rows = mysql_num_rows($result);
               $stmt = $conn->prepare($selectQuery);
              $stmt->bindParam(':webinarId', $webinarId);
               $stmt->execute();
                $num_rows = $stmt->rowCount();
                 $stmt->setFetchMode(PDO::FETCH_ASSOC);
             $countSpeakers = 0;
                // while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
              while ($row = $stmt->fetch()) {
                     $countSpeakers++;
                                    if($countSpeakers===$num_rows){
                                        $speakers = $speakers . $row["SpeakerName"].'<BR>';
                                    }else {
                                        $speakers = $speakers . $row["SpeakerName"].' |' . '<BR>';
                                    }
                 }
                
        }catch(Exception $exc){
       
      $exc->getMessage();
         $resultMessage= '<font color=red size=2px>'.$exc.'</font>';
          header('Location: ../back-end-error.php?resultMessage='.$resultMessage); 
                // $conn->closeConnection(); // closing the connection
                   
}
    return $speakers;
}
        
        
        
        
        //$conn1 = new DbController();
        try {
          //   $conn1->connectToDatabase();
          //   $conn1->selectDatabase();
           /*  $selectQuery1 = "SELECT event_id,event_title,event_startdate,event_time_from,event_time_to,midday_from,midday_to,timezone,
                 RegistrationLink,STATUS FROM tblEventLines WHERE STATUS = 'Active' AND event_startdate >= CURDATE() AND event_type='W' 
                 AND WebinarType='E' ORDER BY event_startdate"; */
             $selectQuery1 = "SELECT event_id,event_title,event_startdate,event_time_from,event_time_to,midday_from,midday_to,timezone,
                 RegistrationLink,STATUS,FileName FROM tblEventLines WHERE STATUS = 'Active' 
                 AND WebinarType='E' ORDER BY event_startdate";
          //   $result1 = mysql_query($selectQuery1);
              $stmt = $conn->prepare($selectQuery1);
               $stmt->execute();
             $sno = 1;
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
          
                     while ($row = $stmt->fetch()) { 
          //   while ($row = mysql_fetch_array($result1, MYSQL_ASSOC)) {
                 //printf("ID: %s  Name: %s", $row["id"], $row["name"]);
                 $webinarId = $row["event_id"];
                  $webinarDate= strtotime($row["event_startdate"]);
                  $dispSpeakers = getSpeakers($webinarId);
                  $primarySpeakes = getPrimarySpeakers($webinarId);
                  if($primarySpeakes!=''){
                 ?>
                 <tr>
                <td> <?php echo $sno;?></td>
                <td> <strong><?php echo $row["event_title"];?> </strong></td>
                 <td><?php echo date('M d , Y', $webinarDate);?></td>
               
                <td><?php echo date('h:i', strtotime($row["event_time_from"])).' '.$row["midday_from"].' to '.date('h:i', strtotime($row["event_time_to"])).' '.$row["midday_to"].' '.$row["timezone"];?></td>
                
                <td> <?php 
                
                echo $dispSpeakers;
                
                
                
                
                ?></td>
               <td>
                   <?php 
                   
                   $url = '../webinars/'.$row["FileName"];
                   ?>
                   
                   <a href="<?= $url; ?>" class="btn btn-primary btn-sm btn-success">Register</a></td>
               
              </tr>
                 
                 <?php
                  $sno = $sno+1;
                  }
                
             }
             //$conn->closeConnection();
            // mysqli_close($conn);
          //   mysql_close();
             
                 }catch(Exception $exc){
       
      $exc->getMessage();
         $resultMessage= '<font color=red size=2px>'.$exc.'</font>';
          header('Location: ../back-end-error.php?resultMessage='.$resultMessage); 
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
              </tr>
              -->
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
                                 <?php if($rtrackId==''){ ?>
                                <option value="" selected>
                                    <?php }else{ ?>
                                <option value="">
                                     <?php } ?>
                                  Search by Track
                                </option>
                                
                                  <?php  
                  
                 //  $conn = new DbController();
        
   //     try {
            // $conn->connectToDatabase();
          //   $conn->selectDatabase();
           //  $query="SELECT DISTINCT TrackName FROM tbLKTrackNames WHERE TrackName != ''";
             $query="SELECT Id,TrackName FROM tbLKTrackNames WHERE TrackName !='' AND TrackType='E' AND Id!='-1' ORDER BY TrackName";
            // $result = mysql_query($query) or die(mysql_error());

           // while ($row=mysql_fetch_array($result)) {
 $stmt = $conn->prepare($query);
             $stmt->execute();
                 $stmt->setFetchMode(PDO::FETCH_ASSOC);
          
                     while ($row = $stmt->fetch()) {
            $dtrackName=$row['TrackName'];
            $dtrackID=$row['Id'];
            if($rtrackId==$dtrackID){
              
            echo "<option value=\"$dtrackID\" selected>$dtrackName</option>";
            
            }else {
            
                 echo "<option value=\"$dtrackID\">$dtrackName</option>";
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
                                <input type="hidden" id="calId1" name="calId1" value="<?= $rstartDate; ?>"/>
<input type="hidden" id="calId2" name="calId2" value="<?= $rendDate; ?>"/>
        <!--Date search-->
              </div>                 
                          
                        <div class="col-sm-4">
                            <div class="form-group">
                                
                                    <div class="input-group">
                                        
                                        <input class="form-control" placeholder="Enter Key Words" name="keyWords" id="keyWords" type="text" value="<?=$rkeyWords?>">
                                        
                                        
                                        <span class="input-group-btn"><span class="btn btn-primary btn-file"><input name="btnSearchSubmit" id="btnSearchSubmit" type="siv" onclick="doSubmit();"> Search…</span></span> 
                                                                     <!-- <button type="submit" tabindex="13" class="btn btn-primary" name="btnJobSubmit" id="btnJobSubmit">Search&hellip;</button>   -->
                                    </div>
                                
                            </div>
                        </div>
                    </div>
                    </form>
                    
       

<?php
//$conn1 = new DbController();
        try {
          //   $conn1->connectToDatabase();
            // $conn1->selectDatabase();
             
             
             
             if($queryString=='') {
            // $selectQuery1 = "SELECT event_id,event_title,event_description,event_startdate,event_time_from,event_time_to,midday_from,midday_to,timezone,RegistrationLink,STATUS,VideoLink FROM tblEventLines
//WHERE  event_startdate < CURDATE() AND event_type='W' AND WebinarType='E' AND STATUS='Closed' ORDER BY event_startdate";
             
             
              $selectQuery1 = 'SELECT Id,Download_Id,event_id,event_title,event_description,event_startdate,event_time_from,event_time_to,midday_from,midday_to,
timezone,RegistrationLink,tblEventLines.STATUS,tblEventLines.VideoLink ,Page_Title,After_Description,FileName FROM tblEventLines LEFT JOIN tblWebDownloadsLines ON (tblEventLines.event_id=tblWebDownloadsLines.WebinarId)
WHERE  WebinarType=\'E\' AND tblEventLines.STATUS=\'Published\' ORDER BY event_startdate DESC';
              
              
              $stmt = $conn->prepare($selectQuery1); 
             }else {
                 $selectQuery1 = $queryString;
                   $stmt = $conn->prepare($selectQuery1); 
                             if ($rtrackId != ''){
                                 $stmt->bindParam(':primaryrtrackId', $rtrackId);
                                  $stmt->bindParam(':secondaryrtrackId', $rtrackId);
                             }
                              if($rkeyWords != '')
                                   $stmt->bindParam(':rkeyWords', $rkeyWords);
                              if($rstartDate != '')
                                  $stmt->bindParam(':rstartDate', $rstartDate);
                              if($rendDate != '')
                                   $stmt->bindParam(':rendDate', $rendDate);
             }
             
           // echo $selectQuery1;
            // $result1 = mysql_query($selectQuery1);
              $stmt->execute();
                   $rowcount = $stmt->rowCount();
          
                    
             $sno = 1;
             $rows = 0;
             $isDivClosed = false;
             $numrows = 0;
             if($rowcount>0)
{
                 $stmt->setFetchMode(PDO::FETCH_ASSOC);
             //while ($row = mysql_fetch_array($result1, MYSQL_ASSOC)) {
                  while ($row = $stmt->fetch()) {
                 
                 $mytitle =strip_tags($row["event_title"]);
                 $mynewtitle =explode( ':', $mytitle );
                 
                 
                 $myvalue =strip_tags($row["After_Description"]);
                 
              $desc=substr($myvalue, 0, 150);
                 $rows = $rows + 1;
                 if($rows==1){
                     $numrows = $numrows + 1;
                     $isDivClosed = false;
                 ?>
<div class="row" id="divrow<?=$numrows?>" style="display: none"><?php } ?>
                <div class="col-sm-4 center" >
                
                    
                    <h6  align="left" class="heavy noMargin"> <?php echo $row["Page_Title"];?></h6>
                       
                    <div align="left" class="greyText"><?php echo $desc;?>... 
                       <br></br>
                          
                        <a class="linkText" href="../webinars/<?= $row["FileName"]; ?>">
                            <button class="btn btn-primary btn-md" type="button">Watch Replay</button></a> </div>
                    
                </div>
               <!-- <div class="col-sm-4 center">
                    <div class="row"><center><img  align="left" src="../images/events/team-enablement.png" class="img-responsive" alt="Technical Excellence" title="Technical Excellence"></center><br></div>
                    <div class="row"><br></div>
                    <div class="row"><h6  align="left" class="heavy">Automated Scripting and Data load Functions for Global Carpet Retailer</h3>
                    <div align="left" class="greyText">With over 10,000 products in their catalog and a global presence demanding 1800 employees and 49 distribution centers for their 11,000 customer base...| <a class="linkText" href="#"><strong>Watch Video</strong></a> </div>
                    </div>
                </div>
                <div class="col-sm-4 center">
                    <div class="row"><center><img align="left" src="../images/events/technical-webinar.png" class="img-responsive" alt="Industry Expertise" title="Industry Expertise"></center><br></div>
                    <div class="row"><br></div>   
                    <div class="row"><h6  align="left" class="heavy">End-to-End Validation QA and Testing for Finanical Holdings Firms </h3>
                    <div align="left" class="greyText">Our customer is a financial holding company with investments primarily in companies focused on providing financial services. The migration process req...| <a class="linkText" href="#"><strong>Watch Video</strong></a>  </div>
                    </div>
                </div>
                
            -->

                
                 
                 <?php
                 
                 if($rows==3){
                 $rows = 0;
                 ?>
                 
     </div>
                 <?php
                 $isDivClosed = true;
                 }
                 $sno = $sno+1;
             }
             
        } 
             
              if($sno==1){
                 echo 'No records found!';
             }
             
             if($isDivClosed==false){
                 ?></div><?php
             }
             //$conn->closeConnection();
            // mysqli_close($conn);
         //    mysql_close();
             
                 }catch(Exception $exc){
       
      //$exc->getMessage();
      //   $resultMessage= '<font color=red size=2px>'.$exc.'</font>';
       //   header('Location: ../back-end-error.php?resultMessage='.$resultMessage); 
                // $conn->closeConnection(); // closing the connection
                   
}
   


?>

</div>

<input type="hidden" name="numRows" id="numRows" value="<?=$numrows?>"/>



                      
       <!-- <div class="row">
                <div class="col-sm-4 center">
                    <div class="row"><center><img align="left" src="../images/events/sales-enablement.png" class="img-responsive" alt="Thought Leadership" title="Thought Leadership"></center><br></div>
                    <div class="row"><br></div>
                    <div class="row"><h6  align="left" class="heavy"> Product Catalog Implementation and Support for Global Carpet Retailer</h3>
                    <div align="left" class="greyText">With over 10,000 products in their catalog and a global presence demanding 1800 employees and 49 distribution centers for their 11,000 customer base...| <a class="linkText" href="#"><strong>Watch Video</strong></a> </div>
                    </div>
                </div>
                <div class="col-sm-4 center">
                    <div class="row"><center><img  align="left" src="../images/events/team-enablement.png" class="img-responsive" alt="Technical Excellence" title="Technical Excellence"></center><br></div>
                    <div class="row"><br></div>
                    <div class="row"><h6  align="left" class="heavy">Automated Scripting and Data load Functions for Global Carpet Retailer</h3>
                    <div align="left" class="greyText">With over 10,000 products in their catalog and a global presence demanding 1800 employees and 49 distribution centers for their 11,000 customer base...| <a class="linkText" href="#"><strong>Watch Video</strong></a> </div>
                    </div>
                </div>
                <div class="col-sm-4 center">
                    <div class="row"><center><img align="left" src="../images/events/technical-webinar.png" class="img-responsive" alt="Industry Expertise" title="Industry Expertise"></center><br></div>
                    <div class="row"><br></div>   
                    <div class="row"><h6  align="left" class="heavy">End-to-End Validation QA and Testing for Finanical Holdings Firms </h3>
                    <div align="left" class="greyText">Our customer is a financial holding company with investments primarily in companies focused on providing financial services. The migration process req...| <a class="linkText" href="#"><strong>Watch Video</strong></a>  </div>
                    </div>
                </div>
                
            </div> -->








            <br>
            
            <!-- row start -->
            <?php if($numrows>1){?>
        <div class="row" id="loadMoreId">
          <div class="col-sm-2"></div>
          <div class="col-sm-10">
            <button class="btn btn-default col-sm-10" data-dismiss="modal" type="button" id="btnSubmit" name="btnSubmit" onclick="getMoreRecords();">Load More</button>
          </div>
          <div class="col-sm-1"></div>
        </div>
            
           <?php } ?> 
        <!-- row end -->
            
            
            
            
            
      </div>
      <!--contact form copy starts-->
      </div>
          
      </div>  
      <br/>
      <!--contact form copy ends-->

    </section> <!--/#error-->
   <?php include '../footer.php';?>   
      
</body>
</html>
