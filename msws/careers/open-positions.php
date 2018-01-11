<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Open Positions | Miracle</title>
        <?php include '../config/Locations.php'; ?>

        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/font-awesome.min.css" rel="stylesheet">
        <link href="../css/main.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../css/default.css" />
        <link rel="stylesheet" type="text/css" href="../css/component.css" />
        <script src="../js/modernizr.custom.js"></script>
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
        <?php
        //  require '../config/DbController.php';
        require '../config/ConnectionProvider.php';

        $rlocation = '';
        $rdepartment = '';
        $rkeywords = '';
        $queryString = '';
        $rjobId = '';
        $rjobId = isset($_GET['jobId']) ? $_GET['jobId'] : '';

        if (isset($_POST['btnSubmit'])) {
            // echo 'hii';
            try {
                // $conn->connectToDatabase();

                if (!get_magic_quotes_gpc()) {


                    $rlocation = addslashes($_POST['location']);
                    $rdepartment = addslashes($_POST['department']);
                    $rkeywords = addslashes($_POST['keywords']);
                } else {

                    $rlocation = $_POST['location'];
                    $rdepartment = $_POST['department'];
                    $rkeywords = $_POST['keywords'];
                }
                //echo 'key-->'.$rkeywords;
                $queryString = "SELECT JobTitle,JobCreatedDate,JobDescription,JobId,Location,Department FROM tblJobDescriptions WHERE JobStatus = 'Active' ";
                if ($rlocation != '') {
                    //   $queryString = $queryString . ' AND Location=\'' . $rlocation . '\'';
                    $queryString = $queryString . ' AND Location= :rlocation ';
                }
                if ($rdepartment != '') {
                    //   $queryString = $queryString . ' AND Department LIKE \'%' . $rdepartment . '%\'';
                    $queryString = $queryString . ' AND Department =  :rdepartment';
                }
                if ($rkeywords != '') {
                    // $queryString = $queryString . ' AND (MATCH(JobId,JobTitle,JobDescription,JobQualification,Location,Department,HireType)  AGAINST (\'' . $rkeywords . '\' IN BOOLEAN MODE) )';
                    $queryString = $queryString . ' AND (MATCH(JobId,JobTitle,JobDescription,JobQualification,Location,Department,HireType)  AGAINST (:rkeywords IN BOOLEAN MODE) )';
                    //MATCH(SkillsetUtilized,SkillSet,ProjectInfo)  AGAINST ('"+getSkills()+"' IN BOOLEAN MODE
                    // $queryString = $queryString.' AND TrackName LIKE \'%'.$rkeyWords.'%\' OR DocType LIKE \'%'.$rkeyWords.'%\' OR DocTitle LIKE  \'%'.$rkeyWords.'%\' OR DocLongDesc  ';
                }

                $queryString = $queryString . '  ORDER BY JobCreatedDate DESC';
                //echo "location-->".$rlocation;
                //echo "rdepartment-->".$rdepartment;
            } catch (Exception $exc) {

                $exc->getMessage();
                $resultMessage = '<font color=red size=2px>' . $exc . '</font>';
                //  $conn->closeConnection(); // closing the connection
                //    mysql_close();
            }
        }
        ?>

        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="shortcut icon" href="<?= AMAZON_URL ?>/images/favicon.ico">
        <style>
            .pagination{
                border: 1px solid #b7b2b3;
                border-radius: 0.25em;
            }
        </style>
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
                    url("<?= AMAZON_URL ?>/images/banners/openpositons.png");
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                /*background-position:0px 71px;*/
            }



        </style>
    </head><!--/head-->
    <?php include '../header.php'; ?>
    <body>
        <script type="text/javascript">
            $('#myModal').modal({backdrop: 'static'}) 
            $(window).load(function(){
                if(document.getElementById("jobId").value=='-1'){
                    $('#myModal1').modal('show');
                }
            });
    
  
        </script>   
        <input type ="hidden" name="jobId" id="jobId" value="<?= $rjobId ?>"/>

        <section>
            <div class="overlay section_bg">
                <div class=" container">
                    <br>
                    <div class="row">    
                        <div class="col-sm-7 text-left">  
                            <br><br>
                            <h1 class="micro "><font color="#fff"><strong>Open Positions</strong></font></h1>

                        </div>
                        <div class="col-sm-5 text-right">
                            <br><br>
                            <ul class="breadcrumb pull-right">
                                <li><a href="../">Home</a></li>
                                <li class="active">Careers</li>
                            </ul>
                        </div>
                    </div><br>
                </div>
            </div>

        </section>
        <section  class="container">
            <br>
<!--            <br>
            <br>
            <br>-->
            <div class="row">

                <div class="modal" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">

                    <div class="modal-dialog" style="margin-left: -280px;">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="display: none;"><span aria-hidden="true">&times;</span></button>
                                <h5 class="modal-title" id="myModalLabel"><strong>Job Id Not Found</strong></h5>
                            </div>
                            <div class="modal-body">
                                The job link that you accessed is not available anymore. By closing this dialogue you can browse through our collection of Open Positions.
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="getOpenPositions();">Check Jobs</button>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                    <!-- /.modal-content -->
                </div>


                <!--                <div class="col-sm-8 text-left">
                                    <h1 class="heavy">Open Positions</h1>
                                </div>
                                <div class="col-sm-4 text-right">
                                    <ul class="breadcrumb pull-right">
                                        <li><a href="../">Home</a></li>
                                         <li><a href="index.php">Careers</a></li> 
                                        <li class="active">Careers</li>
                                    </ul>
                                </div>-->
                <br/>
<!--                <br/>
                <br/>
                <br/>-->
            </div>
        </section>
        <section class="container">
            <div class="tab-content">
                <form method="post" action="<?php $_PHP_SELF ?>" id="myForm" name="myForm">
                    <div class="row">

                        <div class="col-sm-3">
                            <?php if ($rkeywords == '') { ?>
                                <input type="text" class="form-control" placeholder="Enter Key Words" name="keywords" id="keywords">
                            <?php } else { ?>
                                <input type="text" class="form-control" placeholder="Enter Key Words" name="keywords" id="keywords" value="<?php echo $rkeywords ?> "></input>
                            <?php } ?>
                        </div> 
                        <!--                                <div class="col-sm-3">
                                                            <select class="form-control">
                                                                <option value="default" selected disabled>Search by Location</option>
                                                                <option>Miracle City - India</option>
                                                                <option>Miracle Heights - India</option>
                                                                <option>Miracle HQ - Novi MI, USA</option>
                                                                <option >USA - Any Location</option>
                                                                <option>Michigan - USA</option>
                        
                                                            </select>            
                                                        </div>-->
                        <div class="col-sm-3">
                            <select class="form-control" name="location" id="location">
                                <?php if ($rlocation == '') { ?>
                                    <option value="" selected>
                                    <?php } else { ?>
                                    <option value="">
                                    <?php } ?>
                                    Search by Location
                                </option>
                                <?php
                                // include '../config/Locations.php';
                                // include '../config/general.php';
                                // $conn = new DbController();
                                //     try {
                                // $conn->connectToDatabase();
                                //  $conn->selectDatabase();
                                $query = "SELECT DISTINCT(Location) FROM tblJobDescriptions WHERE JobStatus = 'Active'";
                                // $result = mysql_query($query) or die(mysql_error());
                                $stmt = $conn->prepare($query);
                                $stmt->execute();
                                $stmt->setFetchMode(PDO::FETCH_ASSOC);

                                while ($row = $stmt->fetch()) {
                                    //while ($row = mysql_fetch_array($result)) {

                                    $dlocation = $row['Location'];
                                    if ($rlocation == $dlocation) {

                                        echo "<option value=\"$dlocation\" selected>$dlocation</option>";
                                    } else {

                                        echo "<option value=\"$dlocation\">$dlocation</option>";
                                    }
                                }
                                ?>  

                                <!-- <option >Tech Article</option> -->
                            </select> 

                        </div>
                        <!--                                <div class="col-sm-3">
                                                            <select  class="form-control">
                                                                <option value="placeholder" selected disabled>Search by Department</option>
                                                                <option>Development</option>
                                                                <option>Human Resources</option>
                                                                <option>Operations</option>
                                                                <option>Business Development</option>
                                                                <option>Marketing</option>
                                                                <option>Recruitment</option>
                                                                <option>EAI/BPM - Development</option>
                                                                <options>SAP - Development</options>
                                                                <option>B2B/MFT - Development</option>
                                                                <option>App. Management - Development</option>
                                                                <option>Commerce - Development</option>
                                                                <option>Mobile/Cloud - Development</option>
                                                                <option>Testing/QA - Development</option>
                                                            </select>            
                                                        </div>-->
                        <div class="col-sm-3">
                            <select  class="form-control" name="department" id="department">

                                <?php if ($rdepartment == '') { ?>
                                    <option value="" selected>
                                    <?php } else { ?>
                                    <option value="">
                                    <?php } ?>
                                    Search by Department
                                </option>
                                <?php
// include '../config/Locations.php';
// include '../config/general.php';
// $conn = new DbController();
//     try {
// $conn->connectToDatabase();
// $conn->selectDatabase();
                                $query = "SELECT DISTINCT(Department) FROM tblJobDescriptions WHERE JobStatus = 'Active'";
// $result = mysql_query($query) or die(mysql_error());
// $result = mysql_query($query) or die(mysql_error());
                                $stmt = $conn->prepare($query);
                                $stmt->execute();
                                $stmt->setFetchMode(PDO::FETCH_ASSOC);

                                while ($row = $stmt->fetch()) {
                                    // while ($row = mysql_fetch_array($result)) {

                                    $ddepartment = $row['Department'];
                                    if ($rdepartment == $ddepartment) {

                                        echo "<option value=\"$ddepartment\" selected>$ddepartment</option>";
                                    } else {

                                        echo "<option value=\"$ddepartment\">$ddepartment</option>";
                                    }
                                }
                                ?>  

                            </select>            
                        </div>
                        <div class="col-sm-3">
                            <button type="submit"class="btn btn-primary form-control" name="btnSubmit" id="btnSubmit">
                                Search For Positions
                            </button>
                        </div>
                    </div>
                </form>




                <?php
                $jobId = '';
                $pageNo = 1;
//  $conn = new DbController();

                try {
                    //  $conn->connectToDatabase();
                    //  $conn->selectDatabase();

                    if ($queryString == '') {
                        $selectQuery = "SELECT JobTitle,JobCreatedDate,JobDescription,JobId,Department FROM tblJobDescriptions WHERE JobStatus = 'Active' ORDER BY JobCreatedDate DESC";
                        $stmt = $conn->prepare($selectQuery);
                    } else {
                        $selectQuery = $queryString;
                        $stmt = $conn->prepare($selectQuery);
                        if ($rlocation != '')
                            $stmt->bindParam(':rlocation', $rlocation);
                        if ($rdepartment != '')
                            $stmt->bindParam(':rdepartment', $rdepartment);
                        if ($rkeywords != '')
                            $stmt->bindParam(':rkeywords', $rkeywords);
                    }


                    // echo 'queryString-->'.$selectQuery;
                    //$selectQuery = "SELECT Id,DocTitle,DocType,DocLongDesc,CreatedDate FROM tblWebDownloadsLines WHERE DownloadFlag=1 ORDER BY CreatedDate DESC LIMIT 6";
                    // $result = mysql_query($selectQuery);
                    $sno = 0;
                    $initial = 0;
                    $pageJobs = 0;
                    $pageJobClosed = false;
                    $isClosed = false;
                    $stmt->execute();
                    $stmt->setFetchMode(PDO::FETCH_ASSOC);

                    while ($row = $stmt->fetch()) {
                        // while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {

                        $myvalue = strip_tags($row["JobDescription"]);
                        $jobId = $row["JobId"];

                        //echo $myvalue;
//$desc=explode(".",$myvalue); 
                        $desc = substr($myvalue, 0, 150);
//echo $desc;
                        //printf("ID: %s  Name: %s", $row["id"], $row["name"]);



                        if ($pageJobs == 0 && $sno == 0) {
                            $pageJobClosed = false;
                            ?>
                            <!-- 3 jobs row start -->

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

                                    <div class="col-sm-4">
                                        <p class="heavy greyText noMargin"><?php echo $row["Department"]; ?></p>
                                        <!-- <h5 class="heavy noMargin"><a href="/scc-product-brief.php">Sr. MB Developer - #MSS12GD</a></h5> -->
                                        <h5 class="heavy noMargin"><a href="job-application.php?jobId=<?= $jobId; ?>" class="linkText heavy"><?php echo $row["JobTitle"]; ?> - #<?php echo $jobId; ?></a></h5>
                                        <div class="row">
                                            <div class="col-sm-6 noMargin"><hr></div>
                                        </div>
                                       <!-- <p class="noMargin">See how we help a Global Food Distrbutor gain a competetive advantage through our Supply Chain Visibility Portal<a href="#" class="linkText heavy"> | Apply Position</a></p> -->
                                        <p class="noMargin"><!--See how we help a Global Food Distrbutor gain a competetive advantage through our Supply Chain Visibility Portal..-->
                                            <?php echo $desc; ?>...
                                     <!-- <form action="job-application.php?jobId=<?= $jobId; ?>" method="post"> 
                                                           
                                                       
                                                            <button class="linkText heavy"> | Apply Job</button>
                                                        </form> -->
                                            <a href="job-application.php?jobId=<?= $jobId; ?>" class="linkText heavy"> | Apply Position</a> </p>
                                        <p class="greyText noMargin"><!-- March 14th, 2015-->

                                            <?php echo date('F d , Y', strtotime($row["JobCreatedDate"])); ?></p>
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
                //  mysql_close();
            } catch (Exception $exc) {

                $exc->getMessage();
                $resultMessage = '<font color=red size=2px>' . $exc . '</font>';
                header('Location: ../back-end-error.php?resultMessage=' . $resultMessage);
                // $conn->closeConnection(); // closing the connection
            }
            ?>



            <!-- default Pagination start-->
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
                    for ($x = 1; $x <= $pageNo; $x++) {
                        if ($x == 1) {
                            ?> 
                            <li class="active" id="li<?= $x ?>"><a data-toggle="tab" href="#page<?= $x ?>" id="a<?= $x ?>" onclick="goTop();"><?php echo $x ?></a></li> 

                            <?php
                        } else {
                            ?> <li id="li<?= $x ?>"><a data-toggle="tab" href="#page<?= $x ?>" id="a<?= $x ?>" onclick="goTop();"><?php echo $x ?></a></li><?php
                }
            }
            if ($pageNo > 1) {
                        ?>

                        <li id="lin"><a>&raquo;</a></li>
                    <?php } ?>
                </ul>
            </div>
            <!-- default Pagination stop-->
    <!--        <script>
                $('pagination').twbsPagination({
                    totalPages: 6,
                    visiblePages: 3,
                    onPageClick: function (event, page) {
                        $('#page-content').text('Page ' + page);
                    }
                });
            </script> Article Listing ends here -->

        </section>
        <br/>


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
                            goTop();
                            break;
                        }
                     
                    }
                }
            });
            function goTop(){
                window.scrollTo(500, 0);
            }
        </script>
        <br/>
        <?php include '../footer.php'; ?>

    </body>
</html>

