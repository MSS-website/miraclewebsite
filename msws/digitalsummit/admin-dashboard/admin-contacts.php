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

    <!-- Our Website CSS Styles -->
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
    
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
     <?php 
    session_start();
    if (isset($_SESSION['SES_DS17_ADMIN_LOGINID']) && $_SESSION['SES_DS17_ADMIN_LOGINID'] != "") {
    	
    } else {
    	header('Location: admin-login.php');
    }
    
    
    
    $contactName="";
    $institute="";
    $searchQuery="";
    if (isset($_POST['btnSearchSubmit'])) {
    	// echo 'hii';
    	try {
    		// $conn->connectToDatabase();
    		$contactName= isset($_POST["contactName"]) ? $_POST["contactName"] : '';
    		$institute= isset($_POST["institute"]) ? $_POST["institute"] : '';
    		
    		$searchQuery= 'SELECT ContactName,Email,Subject,PhoneNumber,Profession,OrganizationName,Message,DATE(CreatedDate) AS CreatedDate FROM tblDs17Contacts WHERE 1=1 ';
    		
    		//echo "query-->".$searchQuery.'<br>';
    		//echo "PartnerName-->".$partnerName.'<br>';
    		//echo "organizationName-->".$organizationName.'<br>';
    		if ($contactName!= '') {
    			//$searchQuery= $searchQuery. ' AND PartnerName=:tempPartnerName';
    			$searchQuery= $searchQuery. ' AND ContactName LIKE :tempContactName';
    			
    		}
    		
    		if ($institute!= '') {
    			//$searchQuery= $searchQuery. ' AND OrganizationName=:tempOrganizationName';
    			$searchQuery= $searchQuery. ' AND OrganizationName LIKE :tempOrganizationName';
    			
    		}
    		
    		
    		$searchQuery= $searchQuery. ' ORDER BY Id';
    		
    	} catch (Exception $exc) {
    		
    		$exc->getMessage();
    		$resultMessage = '<font color=red size=2px>' . $exc . '</font>';
    		//  $conn->closeConnection(); // closing the connection
    		//    mysql_close();
    	}
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
                        <h2> Contacts </h2>
                     
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
<form method="post" action="<?php $_PHP_SELF ?>" id="myForm" name="myForm">
<div class="row">
               <div class="col-sm-3">
               
               <input class="form-control" type="text" name="contactName" id="contactName" value="" placeholder="Contact Name">
                     
               </div> 
                <div class="col-sm-3">
                
                 <input class="form-control" type="text" name="institute" id="institute" value="" placeholder="Institution / Organization">    
                     
                </div> 
                 <div class="col-sm-3">
                      <button type="submit" id="btnSearchSubmit" name="btnSearchSubmit" class="btn btn-primary col-sm-12">Search</button>
                 </div> 
                   <div class="col-sm-3">
                   
                     <button type="button" onclick="exportContacts();" class="btn btn-success col-sm-12"> <i class="fa fa-download"></i>&nbsp;&nbsp;&nbsp;Export</button>
                 </div>
            </div>
</form>

<div class="row">
                    <div class="col-md-12">
                        
                         
                         <div class="widget white" >
                              <div id="wrapper2">  
                              <div class="gap" style="line-height: 20px; height: 20px;"></div>                                         
                                   <table class="table table-hover table-striped" id="reg_tab">
                                        <thead>
                                          <tr>
                                             <th ><span>S:No</span></th>
                                             <th ><span>Name</span></th>
                                             <th ><span>E-mail</span></th>
                                             <th ><span>Mobile number</span></th>
                                            <th ><span>Organization Name</span></th>
                                             <th ><span>Registered Date</span></th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                        
                                        <?php 
                                        $pageNo=1;
                                        $sno = 0;
                                        $pageSize=10;
                                        try {
                                        	
                                        	
                                        	if($searchQuery==""){
                                        	$selectQuery = "SELECT ContactName,Email,Subject,PhoneNumber,Profession,OrganizationName,Message,DATE(CreatedDate) AS CreatedDate FROM tblDs17Contacts ORDER BY id ";
                                        	}else {
                                        		$selectQuery = $searchQuery;
                                        	}
                                        
                                        	$stmt = $conn->prepare($selectQuery);
                                        	if($contactName!=""&&$searchQuery!=""){
                                        		$tempContactName= '%'.$contactName.'%';
                                        		//$stmt->bindParam(':tempPartnerName', $partnerName);
                                        		$stmt->bindParam(':tempContactName', $tempContactName);
                                        	}
                                        	if($institute!=""&&$searchQuery!=""){
                                        		$tempOrg = "%" .$institute. "%";
                                        		//$stmt->bindParam(':tempOrganizationName', $organizationName);
                                        		$stmt->bindParam(':tempOrganizationName', $tempOrg);
                                        	}
                                        	
                                        	$stmt->execute();
                                        	$stmt->setFetchMode(PDO::FETCH_ASSOC);
                                        	
                                        	
                                        	$tempCount=0;
                                        	while ($row = $stmt->fetch()) {
                                        		$sno = $sno + 1;
                                        		$tempCount = $tempCount + 1;
                                        		
                                        		$ContactName=$row["ContactName"];
                                        		$Email=$row["Email"];
                                        		$Subject=$row["Subject"]; 
                                        		$PhoneNumber=$row["PhoneNumber"];
                                        		$Profession=$row["Profession"];
                                        		$OrganizationName=$row["OrganizationName"];
                                        		$Message=$row["Message"];
                                        		$CreatedDate=$row["CreatedDate"];
                                        		
                                        		
                                        		if($tempCount>$pageSize){
                                        			$pageNo++;
                                        			$tempCount=1;
                                        		}
                                        		
                                        		?>
                                        		
                                        		 <tr id="tr<?=$sno?>">
                                        		 
                                             <td class="center"><?php echo $sno; ?></td>
                                             <td  data-toggle="modal" data-target="#editModal"><?php echo $ContactName; ?></td>
                                             <td  data-toggle="modal" data-target="#editModal"><?php echo $Email; ?></td>
                                             <td><?php echo $PhoneNumber; ?></td>
                                             <td><?php echo $OrganizationName; ?></td>
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
                                        
                                        
                                        
                                       
                                        </tbody>
                                   </table>
                              </div> 
                         </div>
                    </div> 
                    </div>
                
           </div>
             <input type="hidden" id="frmContactName" name="frmContactName" value="<?=$contactName;?>"/>
             <input type="hidden" id="frmInstitute" name="frmInstitute" value="<?=$institute;?>"/>
<!-- Vendor: Javascripts -->
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>




<script src="https://maps.google.com/maps/api/js?key=AIzaSyDrlCWSCEGTYat1yFIybvtjXe6v24wXY04" 
        async="" 
        type="text/javascript">
</script>

<!-- Our Website Javascripts -->
<script src="js/app.js"></script>
<script src="js/common.js"></script>



<script type="text/javascript">
$(document).ready(function () {
    $('#reg_tab').DataTable();
$("#contactName").val($("#frmContactName").val());
$("#institute").val($("#frmInstitute").val());
    

});

function exportContacts() {
	window.location="export-contacts.php";
}

</script>

</body>
</html>

