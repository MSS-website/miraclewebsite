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
    <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">

   <link rel="stylesheet" href="css/bootstrap.min.css">
 <link rel='stylesheet prefetch'
	href=' https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    <!-- Our Website CSS Styles -->
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
    
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
.pagenum{
 float:right;
 padding-top: 28px;
}
.breadcrumbs {
    background: #f5f5f5 none repeat scroll 0 0;
    float: left;
    list-style: outside none none;
    margin: 23px 0 0;
    padding: 3px 8px !important;
    width: 100%;
}
#header-scroll {
    top: 96px !important;
}
.main-content {
      padding: 7px 60px 30px 250px;}
</style>


    
    
</head>
<body>
<!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Our Website Content Goes Here -->
<?php include 'admin-header.php'; ?>


<!--tabl modal-->
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Registered to</h4> 
      </div>
      <div class="modal-body">
        <p>
       <button type="button" class="btn btn-primary" >Techtalks</button> &nbsp;&nbsp;
          <button type="button" class="btn btn-primary" >Citizen Hack</button>
       </p>
      </div>
      <div class="modal-footer">
      </div>
    </div>

    </div>
</div>


<div class="main-content">
    <div class="panel-content" style="margin-top:75px!important;">
        <div class="main-title-sec">
            <div class="row">
                <div class="col-md-3 column">
                    <div class="heading-profile">
                        <h2>Tech Talks</h2>
                     
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
           
              
    </div><!-- Panel Content -->

<div class="row">
               <div class="col-sm-3">
                   <select id="attendeeType" class="form-control" name="attendeeType" required="true">
                                                <option value="">Search by College Name</option>
                                                <option value="Customer">Customer</option>
                                                <option value="Native Of AP">Native Of AP</option>
                                                <option value="Independent">Independent</option>
                                                <option value="Research">Research</option>
                                                <option value="Press">Press </option>
                                                <option value="Student">Student </option>


                                            </select>
               </div> 
                <div class="col-sm-3">
                   <select id="attendeeType" class="form-control" name="attendeeType" required="true">
                                                <option value="">Search by Competition Type</option>
                                                <option value="Customer">Instrumental</option>
                                                <option value="Native Of AP">Mimicry</option>
                                                <option value="Independent">Group Dance</option>
                                                <option value="Research">Classical Dancing</option>
                                                <option value="Press">Solo Dance </option>
                                                <option value="Student">Singing </option>


                                            </select>
                </div> 
                 <div class="col-sm-3">
                      <button type="button" class="btn btn-primary col-sm-12">Search</button>
                 </div> 
                   <div class="col-sm-3">
                     <button type="button" class="btn btn-success col-sm-12"> <i class="fa fa-download"></i>&nbsp;&nbsp;&nbsp;Export</button>
                 </div>
            </div>


<div class="row">
                    <div class="col-md-12">
                        
                         
                         <div class="widget white" >
                              <div id="wrapper2">                                           
                                   <table id="keywords" cellspacing="0" cellpadding="0">
                                        <thead>
                                          <tr>
                                             <th class="header"><span>S:No</span></th>
                                             <th class="header"><span>Name</span></th>
                                             <th class="header"><span>E-mail</span></th>
                                             <th class="header"><span>Mobile number</span></th>
                                             <th class="header"><span>Registered Date</span></th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                        
                                        <?php 
                                        $pageNo=1;
                                        $sno = 0;
                                        $pageSize=10;
                                        try {
                                        	$selectQuery = "SELECT Id,FirstName,LastName,MobileNumber,AltMobileNumber,Email,Designation,AttendeeType,PrimaryIntrest,SecondaryIntrest,Comments,Street,Country,State,District,PostalCode,DATE(CreatedDate) AS CreatedDate,CollegeName,OtherCollegeName FROM tblDs17TechTalksRegistrations ORDER BY Id ";
                                        	
                                        	$stmt = $conn->prepare($selectQuery);
                                        	
                                        	$stmt->execute();
                                        	$stmt->setFetchMode(PDO::FETCH_ASSOC);
                                        	
                                        	
                                        	$tempCount=0;
                                        	while ($row = $stmt->fetch()) {
                                        		$sno = $sno + 1;
                                        		$tempCount = $tempCount + 1;
                                        		$FirstName=$row["FirstName"];
                                        		$LastName=$row["LastName"];
                                        		$MobileNumber=$row["MobileNumber"];
                                        		$AltMobileNumber=$row["AltMobileNumber"];
                                        		$Email=$row["Email"];
                                        		$Designation=$row["Designation"];
                                        		$AttendeeType=$row["AttendeeType"];
                                        		
                                        		$PrimaryIntrest=$row["PrimaryIntrest"];
                                        		$SecondaryIntrest=$row["SecondaryIntrest"];
                                        		$Comments=$row["Comments"];
                                        		
                                        		$Street=$row["Street"];
                                        		$Country=$row["Country"];
                                        		$State=$row["State"];
                                        		$District=$row["District"];
                                        		$PostalCode=$row["PostalCode"];
                                        		$CreatedDate=$row["CreatedDate"];
                                        		$CollegeName=$row["CollegeName"];
                                        		$OtherCollegeName=$row["OtherCollegeName"];
                                        		
                                        		if($tempCount>$pageSize){
                                        			$pageNo++;
                                        			$tempCount=1;
                                        		}
                                        		
                                        		?>
                                        		<?php if($pageSize>=$sno){ ?>
                                        		 <tr id="tr<?=$sno?>">
                                        		 <?php } else { ?>
                                        		 <tr id="tr<?=$sno?>" style="display:none;">
                                        		 <?php } ?>
                                             <td class="center"><?php echo $sno; ?></td>
                                             <td  data-toggle="modal" data-target="#editModal"><?php echo $FirstName.' '.$LastName; ?></td>
                                             <td  data-toggle="modal" data-target="#editModal"><?php echo $Email; ?></td>
                                             <td><?php echo $MobileNumber; ?></td>
                                             <td><?php echo $CreatedDate; ?></td>
                                          </tr>
                                        		
                                        		
                                        		
                                        		
                                        		<?php 
                                        		
                                        	}
                                        	
                                        }catch(Exception $exc){
                                        	
                                        	$exc->getMessage();
                                        	$resultMessage= $exc;
                                        	//header('Location: ../back-end-error.php?resultMessage='.$resultMessage);
                                        	// $conn->closeConnection(); // closing the connection
                                        	
                                        }
                                        
                                        
                                        ?>
                                        
                                        
                                        
                                        
                                        <!-- 
                                          <tr>
                                             <td class="center">1</td>
                                             <td  data-toggle="modal" data-target="#editModal">Chanakya Lokam</td>
                                             <td  data-toggle="modal" data-target="#editModal">clokam@gmail.com</td>
                                             <td>1231231231</td>
                                             <td>10-08-2017</td>
                                          </tr>
                                          <tr>
                                             <td class="center">2</td>
                                             <td  data-toggle="modal" data-target="#editModal">Siva Kusampudi</td>
                                             <td  data-toggle="modal" data-target="#editModal">clokam@gmail.com</td>
                                             <td>1231231231</td>
                                             <td>10-08-2017</td>
                                          </tr>
                                          <tr>
                                             <td class="center">3</td>
                                             <td>Deepika Rangoori</td>
                                             <td>clokam@gmail.com</td>
                                             <td>1231231231</td>
                                             <td>10-08-2017</td>
                                          </tr>
                                          <tr>
                                             <td class="center">4</td>
                                             <td>Srinivas Patnala</td>
                                             <td>clokam@gmail.com</td>
                                             <td>1231231231</td>
                                             <td>10-08-2017</td>
                                          </tr>
                                          <tr>
                                             <td class="center">5</td>
                                             <td>Shoba Lekkala</td>
                                             <td>clokam@gmail.com</td>
                                             <td>1231231231</td>
                                             <td>10-08-2017</td>
                                          </tr>
                                          <tr>
                                             <td class="center">6</td>
                                             <td>Chanakya Lokam</td>
                                             <td>clokam@gmail.com</td>
                                             <td>1231231231</td>
                                             <td>10-08-2017</td>
                                          </tr> -->
                                        </tbody>
                                   </table>
                              </div> 
                         </div>
                    </div> 
                    </div>
                 <div class="row">
                    <div class="col-sm-12">
                      
                         <div class="">
                              
                              <div class="pagenum">
                                   <ul class="pagination">
                                        <li>
                                          <a href="javascript:previousPage();" aria-label="Previous">
                                            <span aria-hidden="true">«</span>
                                          </a>
                                        </li>
                                        <?php for ($x = 1; $x <= $pageNo; $x++) {
                                        	if($x==1){
                                        ?>
                                        
                                        	<li class="active" id="li<?=$x?>"><a href="javascript:showPage(<?=$x?>)" onclick="alignCenter(<?=$x?>);"><?php echo $x; ?></a></li>
                                        <?php } else {
                                        if($x>5){
                                        	
                                        	?>	
                                         <li id="li<?=$x?>" style="display: none;"><a href="javascript:showPage(<?=$x?>)" onclick="alignCenter(<?=$x?>);"><?php echo $x; ?></a></li>
                                         <?php } else { ?>
                                        
                                       <li id="li<?=$x?>"><a href="javascript:showPage(<?=$x?>)" onclick="alignCenter(<?=$x?>);"><?php echo $x; ?></a></li>
                                     <?php } } }?>
                                      <!--   <li><a href="javascript:void(0)">1</a></li>
                                        <li><a href="javascript:void(0)">2</a></li>
                                        <li><a href="javascript:void(0)">3</a></li>
                                        <li><a href="javascript:void(0)">4</a></li>
                                        <li><a href="javascript:void(0)">5</a></li>
                                        -->
                                        
                                        <li>
                                          <a href="javascript:nextPage();" aria-label="Next">
                                            <span aria-hidden="true">»</span>
                                          </a>
                                        </li>
                                   </ul>
                              </div><!-- Pagination Sec -->
                         </div>
                    
                    </div>
              
               </div>
           </div>
               <input type="hidden" name="pageCount" id="pageCount" value="<?= $pageNo ?>"/>
               <input type="hidden" name="totalRecords" id="totalRecords" value="<?= $sno?>"/>
               <input type="hidden" name="pageSize" id="pageSize" value="<?= $pageSize?>"/>
               <input type="hidden" name="currentPage" id="currentPage" value="1"/>

<!-- Vendor: Javascripts -->
<script src="js/jquery-2.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="https://maps.google.com/maps/api/js?key=AIzaSyDrlCWSCEGTYat1yFIybvtjXe6v24wXY04" 
        async="" 
        type="text/javascript">
</script>

<!-- Our Website Javascripts -->
<script src="js/app.js"></script>
<script src="js/common.js"></script>
<script src="js/chart.js"></script>
<script type="text/javascript">
function showPage(pageNum){

	var pageCount = $("#pageCount").val();
	var totalRecords = $("#totalRecords").val();
	var pageSize = $("#pageSize").val();
	for (var i = 1; i <= totalRecords; i++) { 
		$("#tr"+i).hide();
	}
	var initial = parseInt(pageNum,10)*parseInt(pageSize,10)+1;

	var endNum =  parseInt(pageNum,10)*parseInt(pageSize,10);
	
	var initial = (parseInt(endNum,10)-parseInt(pageSize,10))+1;
	for (var i = initial; i <= endNum; i++) { 
		$("#tr"+i).show();
	}

	for (var i = 1; i <= pageCount; i++) { 
		if($('#li'+i).attr('class')=='active'){
			$("#li"+(i)).removeClass("active");
		}
	}
	 $("#li"+(pageNum)).addClass("active");
	 $("#currentPage").val(pageNum);
	 
	//alert(pageNum);
}


function previousPage() {
	var currentPage = $("#currentPage").val();
	var pageNum = parseInt(currentPage,10)-1;
	
	if(parseInt(currentPage,10)>1){
	var pageCount = $("#pageCount").val();
	var totalRecords = $("#totalRecords").val();
	var pageSize = $("#pageSize").val();
	for (var i = 1; i <= totalRecords; i++) { 
		$("#tr"+i).hide();
	}
	
	
	var endNum =  parseInt(pageNum,10)*parseInt(pageSize,10);
	var initial = (parseInt(endNum,10)-parseInt(pageSize,10))+1;
	for (var i = initial; i <= endNum; i++) { 
		$("#tr"+i).show();
	}

	for (var i = 1; i <= pageCount; i++) { 
		if($('#li'+i).attr('class')=='active'){
			$("#li"+(i)).removeClass("active");
			 $("#li"+(pageNum)).show();
		     $("#li"+(pageNum+5)).hide();
		     break;
		}
	}
	 $("#li"+(pageNum)).addClass("active");
	 $("#currentPage").val(pageNum);


	

	}
	
}


function nextPage() {
	var currentPage = $("#currentPage").val();
	var pageNum = parseInt(currentPage,10)+1;
	var pageCount = $("#pageCount").val();
	if(parseInt(currentPage,10)<parseInt(pageCount,10)){
	
	var totalRecords = $("#totalRecords").val();
	var pageSize = $("#pageSize").val();
	for (var i = 1; i <= totalRecords; i++) { 
		$("#tr"+i).hide();
	}
	
	
	var endNum =  parseInt(pageNum,10)*parseInt(pageSize,10);
	var initial = (parseInt(endNum,10)-parseInt(pageSize,10))+1;
	for (var i = initial; i <= endNum; i++) { 
		$("#tr"+i).show();
	}

	for (var i = 1; i <= pageCount; i++) { 
		if($('#li'+i).attr('class')=='active'){
			$("#li"+(i)).removeClass("active");
			 $("#li"+(pageNum)).show();
		     $("#li"+(pageNum-5)).hide();
		     break;
		}
	}
	 $("#li"+(pageNum)).addClass("active");
	 $("#currentPage").val(pageNum);
	

	}
	
}


function alignCenter(id){
    var res1=id+"";
    var res = res1.split("#page");
    var k =id;
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
            if(id==1){
                $("#a"+(j)).show();
                $("#a"+(j+1)).show();
                $("#a"+(j+2)).show();
                $("#a"+(j+3)).show();
                $("#a"+(j+4)).show();
                goTop();
                break;
            }
            else if(id==2){
                $("#a"+(j)).show();
                $("#a"+(j+1)).show();
                $("#a"+(j+2)).show();
                $("#a"+(j+3)).show();
                $("#a"+(j-1)).show();
                goTop();
                break;
            }
            else if(id==3){
                $("#a"+(j)).show();
                $("#a"+(j+1)).show();
                $("#a"+(j+2)).show();
                $("#a"+(j-2)).show();
                $("#a"+(j-1)).show();
                goTop();
                break;
            }
            else if(id>3 && id<=pages-2){
                $("#a"+(j)).show();
                $("#a"+(j+1)).show();
                $("#a"+(j+2)).show();
                $("#a"+(j-2)).show();
                $("#a"+(j-1)).show();
                goTop();
                break;
            }
            else if(id>3 && id<=pages-1){
                $("#a"+(j)).show();
                $("#a"+(j+1)).show();
                $("#a"+(j-3)).show();
                $("#a"+(j-2)).show();
                $("#a"+(j-1)).show();
                goTop();
                break;
            }
            else if(id>3 && id<=pages){
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

</body>
</html>