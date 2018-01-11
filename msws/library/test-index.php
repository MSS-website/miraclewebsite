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
         <?php include '../config/Locations.php';?>
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
     
       
        $rsearchIndustry = isset($_GET['searchIndustry']) ? $_GET['searchIndustry'] : '';
        $rsearchTrack = isset($_GET['searchTrack']) ? $_GET['searchTrack'] : '';
         $rsearchType = isset($_GET['searchType']) ? $_GET['searchType'] : '';
      
         
        $rtrackName = '';
        $rtrackId = '';
        $rdocType = '';
        $rindustry = '';
        $queryString  = '';
        $rkeyWords = '';
        
        
          $queryString = 'SELECT Id,DocTitle,DocType,DocLongDesc,CreatedDate,SourceLink FROM tblWebDownloadsLines WHERE Status = \'Active\' ';
          if($rsearchIndustry != ''){
         $queryString = $queryString.' AND Industry LIKE :industry';
            }
            if($rsearchTrack!=''){
             $queryString = $queryString . ' AND (PrimaryTrackId LIKE :tempPrimaryTrackId OR SecondaryTrackId LIKE :tempSecondaryTrackId) ';
        }
        if($rsearchType!=''){
             $queryString = $queryString . ' AND DocType LIKE :doctype';
        }
       
        $queryString = $queryString.' ORDER BY CreatedDate DESC ';
        
        
        
        
        
        ?>
        
    </head><!--/head-->
    <?php include '../header.php';?>
    <body>
         <input type ="hidden" name="libraryId" id="libraryId" value="<?= $libraryId?>"/> 
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
    <div class="modal-dialog ">
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
        
        <section class="container">
            <br>
            <br>
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
                </div><br>
                <br>
                <br>
                <br>
               
                 <div class="tab-content">
                     
                     
                     <?php
  
        $jobId = '';
        $pageNo = 1;
        //$conn = new DbController();
        
        try {
          //   $conn->connectToDatabase();
           //  $conn->selectDatabase();
            // echo 'query-->'.$queryString;
             if($queryString=='') {
                 if($flag=='success'){
                   $selectQuery = "SELECT Id,DocTitle,DocType,DocLongDesc,CreatedDate,SourceLink FROM tblWebDownloadsLines WHERE DocType='Case Study' AND Status = 'Active' ORDER BY CreatedDate DESC";  
                 }else {
                      $selectQuery = "SELECT Id,DocTitle,DocType,DocLongDesc,CreatedDate,SourceLink FROM tblWebDownloadsLines WHERE Status = 'Active' ORDER BY CreatedDate DESC";
                 }
                $stmt = $conn->prepare($selectQuery); 
                 
             }else if($rsearchTrack!='' || $rsearchIndustry != '' || $rsearchType!=''){
                 $selectQuery = $queryString;
                 $stmt = $conn->prepare($selectQuery);
                 if($rsearchIndustry!=''){
                 $stmt->bindParam(':industry', $rsearchIndustry);
                 }
                 if($rsearchTrack!=''){
                     $stmt->bindParam(':tempPrimaryTrackId', $rsearchTrack);
                     $stmt->bindParam(':tempSecondaryTrackId', $rsearchTrack);
                     
                 }
                 
                 if($rsearchType!=''){
                 $stmt->bindParam(':doctype', $rsearchType);
                 }
                 
                 
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
            // while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
                 
                 $myvalue =strip_tags($row["DocLongDesc"]);
                 
 
            //echo $myvalue;
//$desc=explode(".",$myvalue); 
$desc=substr($myvalue, 0, 150);
//echo $desc;
                 //printf("ID: %s  Name: %s", $row["id"], $row["name"]);



 if($pageJobs==0 && $sno==0){
                    $pageJobClosed = false;
                      ?>
        <div class="tab-pane active" id="page<?=$pageNo?>"> <hr>
                            <?php }else if($pageJobs==0){
                                 $pageJobClosed = false;
                                ?><div class="tab-pane" id="page<?=$pageNo?>"> <hr><?php
                            }
                if($initial==0){
                    $isClosed = false;
                      ?>
                        <!-- 3 jobs row start -->
                        
                        <div class="row">
                            <?php }?>
                    <!-- Article Listing starts here -->
                    <div class="col-sm-4">
                        <p class="heavy greyText noMargin">
                           <?php echo $row["DocType"];?>
                        </p>
                        <h5 class="heavy noMargin">
                            <a href="..<?php echo $row["SourceLink"];?>"><?php echo $row["DocTitle"];?></a>
                        </h5>
                        <div class="row">
                            <div class="col-sm-6 noMargin">
                                <hr>
                            </div>
                        </div>
                        <p class="noMargin">
                             <?php echo $desc.'... | ';?><br> <a class="linkText heavy" href="..<?php echo $row["SourceLink"];?>">Read More</a>
                        </p>
                        <p class="greyText noMargin">
                           <?php echo date('F d , Y', strtotime($row["CreatedDate"]));?>
                        </p>
                    </div>
                    
                     <?php
                 $initial = $initial + 1;
                 $pageJobs = $pageJobs + 1;
                 if($initial==3){
                     $initial=0;
                      $isClosed = true;
                      ?>
                        </div>
                 <?php }
                     if($pageJobs==9){
                         $pageNo++;
                     $pageJobs=0;
                      $pageJobClosed = true;
                      ?>
                        </div>
                 <?php 
                      
                 }
                $sno = $sno+1;
             }
             
             if($sno==0){
                 echo 'No records found!';
             }
             
            if($isClosed == false && $sno!=0) {?>
                        
                        </div>
            
            
                        <?php }if($pageJobClosed == false && $sno!=0) { ?> </div>
            
            
                        <?php }else if($pageJobClosed == true && $sno!=0){
                           $pageNo--;
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
                 
               
          
          </div>
                
                
                
                
                
                
                
                
                
                <!-- page numbers -->
                 
                
                 <div class="text-center">
                      <input type="hidden" name="pageCount" id="pageCount" value="<?=$pageNo?>"/>
            <ul class="pagination">
                <?php 
                if($pageNo>1){
                ?>
                <li id="lip"><a>&laquo;</a></li>
                
               <!-- <li class="active"><a data-toggle="tab" href="#pageone">1</a></li>
                <li><a data-toggle="tab" href="#pagetwo">2</a></li>
                <li><a data-toggle="tab" href="#pagethree">3</a></li> -->
                <?php }
                for ($x = 1; $x <=  $pageNo; $x++) {
                    if($x==1){
               ?> 
               <li class="active" id="li<?=$x?>"><a data-toggle="tab" href="#page<?=$x?>" id="a<?=$x?>" onclick="goTop();"><?php echo $x ?></a></li> 
                    
                    <?php }
                    else {
                        ?> <li id="li<?=$x?>"><a data-toggle="tab" href="#page<?=$x?>" id="a<?=$x?>" onclick="goTop();"><?php echo $x ?></a></li><?php
                    }
                    
                    
                    
                    }
if($pageNo>1){
?>
                
                <li id="lin"><a>&raquo;</a></li>
                <?php }?>
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
        <br>
        <?php include '../footer.php';?>
    </body>
</html>
