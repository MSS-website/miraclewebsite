<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="As we are growing we need our team members to help us out to bring the best to our team. Refer a friend today and help grow the Miracle Family. ">
    <meta name="author" content="">
    <title>Suggestion form | Miracle</title>
     <?php include '../config/Locations.php';?>
 
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/default.css" />
	<link rel="stylesheet" type="text/css" href="../css/component.css" />
	<script src="../js/modernizr.custom.js"></script>
        <script src="../js/Validation.js"></script>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?= AMAZON_URL ?>/images/favicon.ico"></link>
    
<script>
 
    function getValue(content){
        var isDisabled = true;
        if(content=='Yes'){
            var yesStyle = $('#yes').attr('class');
            if(yesStyle.indexOf("active")>-1){
                isDisabled = false;
            }else {
                isDisabled = true;
            }
        }
         else if(content=='No'){
            var noStyle = $('#no').attr('class');
            if(noStyle.indexOf("active")>-1){
                isDisabled = true;
            }else {
                isDisabled = false;
            }
        }
        if(isDisabled){
            $('#firstname').val("");
            $('#lastname').val("");
            $('#firstname').attr('readonly', true);
            $('#lastname').attr('readonly', true);
             $('#anonymously').val("1");
        }else {
            $('#anonymously').val("0");
            $('#firstname').attr('readonly', false);
             $('#lastname').attr('readonly', false);
      }
    }
</script>
 <!-- <script>
$('.btn-toggle').click(function() {
  
    $(this).find('.btn').toggleClass('active');  
    
    if ($(this).find('.btn-primary').size()>0) {
    	$(this).find('.btn').toggleClass('btn-primary');
    }
    if ($(this).find('.btn-danger').size()>0) {
    	$(this).find('.btn').toggleClass('btn-danger');
    }
    if ($(this).find('.btn-success').size()>0) {
    	$(this).find('.btn').toggleClass('btn-success');
    }
    if ($(this).find('.btn-info').size()>0) {
    	$(this).find('.btn').toggleClass('btn-info');
    }
    
    $(this).find('.btn').toggleClass('btn-default');
       
       
       
       
       
});

$('form').submit(function(){
	alert($(this["options"]).val());
    return false;
});
</script> -->




       
        <?php 
        include '../config/general.php';
      //  require '../config/DbController.php';
         require '../config/ConnectionProvider.php';
//$conn = new DbController();
       
        $resultMessage = '';
        $rcreatedBy = '';
        $rattachementLocation = '';
        
session_start();
if(isset($_SESSION['ses_EmpLoginId']) && $_SESSION['ses_EmpLoginId'] != "")
    {
    $rcreatedBy = $_SESSION['ses_EmpLoginId'];
    
    //echo 'hiii123';
    session_unset();
session_destroy();
    }else {
         header('Location: suggestion-login.php'); 
    }
    
// Insertion code start
    
  
        //-----
        
         if(isset($_POST['btnSubmit'])){
            // echo 'hii';
try{
   // $conn->connectToDatabase();
    
    if(! get_magic_quotes_gpc() ){

         $rfirstname = addslashes ($_POST['firstname']);
         $rlastname = addslashes ($_POST['lastname']);
         $rsuggestions = addslashes ($_POST['suggestions']);
         $ranonymously = addslashes ($_POST['anonymously']);
    }else {
        $rfirstname = $_POST['firstname'];
        $rlastname = $_POST['lastname'];
        $rsuggestions = $_POST['suggestions'];
        $ranonymously = $_POST['anonymously'];
    }
    
   // $conn->selectDatabase();
   /* $sql = "INSERT INTO tblSuggestions(FirstName,LastName,Anonymously,Suggestions) ".
        " VALUES('$rfirstname','$rlastname',$ranonymously,'$rsuggestions')"; */
       $sql = "INSERT INTO tblSuggestions(FirstName,LastName,Anonymously,Suggestions) ".
        " VALUES(:rfirstname,:rlastname,:ranonymously,:rsuggestions)";
    $stmt = $conn->prepare($sql);
                 $stmt->bindParam(':rfirstname', $rfirstname);
                 $stmt->bindParam(':rlastname', $rlastname);
                 $stmt->bindParam(':ranonymously', $ranonymously);
                 $stmt->bindParam(':rsuggestions', $rsuggestions);
                 
  
     if(!$stmt->execute()){
             $resultMessage= "<font color=red size=2px>Data insertion failed..Please try again later\n</font>";
           // $conn->closeConnection(); // closing the connection
            header('Location: ../back-end-error.php?resultMessage='.$resultMessage); 
            }else{
                //sendSuggestionDetails($fname,$lname,$rsuggestions,$ranonymously)
                $eflag=EMAILFLAG;
                if($eflag==1){
                require '../classes/MailManager.php';
               $mailmanager = new MailManager();
             
               $mailmanager->sendSuggestionDetails($rfirstname, $rlastname,$rsuggestions,$ranonymously); 
               }
                 
            $resultMessage= "Thanks for your valuable suggestion. Your opinions are always helpful to make our orgnaization better."; 
         //   $conn->closeConnection(); // closing the connection
           // echo'<script> window.location="../thank-you.php"; </script> ';
             header('Location: ../Status.php?resultMessage='.$resultMessage); 
            }
                

    
}catch(Exception $exc){
       
      $exc->getMessage();
         $resultMessage= '<font color=red size=2px>'.$exc.'</font>';
                 $conn->closeConnection(); // closing the connection
                 header('Location: ../back-end-error.php?resultMessage='.$resultMessage); 
                   
}
               
         }
        
        
       
    
    
    
    
// insertion code end
    
    
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
                    url("<?= AMAZON_URL ?>/images/banners/SuggestionBox.png");
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
               
            }



        </style>
    </head><!DOCTYPE html>
<?php include '../header.php';?>
    <body>
        
        <section>
            <div class="overlay section_bg">
                <div class=" container">
                    <br>
                    <div class="row">    
                        <div class="col-sm-7 text-left">  
                            <br><br>
                            <h1 class="micro "><font color="#fff"><strong>Suggestion Box</strong></font></h1>

                        </div>
                        <div class="col-sm-5 text-right">
                            <br><br>
                            <ul class="breadcrumb pull-right">
                                <li><a href="../">Home</a></li>
                                <li><a href="../contact">Company</a></li>
                                <li class="active">Suggestions Box</li>
                                <!-- Breadcrumb div Ends here --> 
                            </ul>
                        </div>
                    </div><br>
                </div>
            </div>

        </section>
        <section class="container" id="about-us">
            <br>
<!--            <br>
            <br>
            <br>
            
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-4 text-left">
                    <h1 class="heavy">
                        Suggestion Box
                    </h1>
                </div>
                <div class="col-sm-6 text-right">
                    <ul class="breadcrumb pull-right">
                        <li>
                            <a href="../">Home</a>
                        </li>
                        <li>
                            <a href="../">Company </a>
                        </li>
                        <li class="active">Suggestions Box
                        </li>
                    </ul>
                </div>
                <div class="col-sm-1"></div>
            </div>-->
            
            <div class="row">
                <div class="col-sm-12">
                       
                        <div class="row">
                            <div class="col-sm-6">
                                <p class="methodText">
                                    <strong>Constant growth and improvement is at the heart of Miracle's principles</strong>, and who would bebetter to suggest a change, (or) bring an idea to our core management than our huge Miracle Family. All suggestions will be considered and taken to the appropriate personal for revision and analysis. You can post anonymously, but we would be greatful if the suggestion comes from a known source. You will need your Hubble Credentials to reach the form, but we will not mark the suggestion as yours unless you select to do so. 
                                </p>
                                <p class"greyText">Please do note that any unappropriate text (or) language used will be tracked down and punished. The suggestion form is for the company to utilize your intellect and ensure that we create a healthy and suggestive environment.</p>
                            </div>
                            <div class="col-sm-6">
                                
                                <!--<div class="row">
                                   
                                     <div class="row">
                                    <div class="col-sm-4">
                                        <input type="text" tabindex="4" class="form-control" required="required" placeholder="Username">        
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="password" tabindex="4" class="form-control" required="required" placeholder="Password">  
                                    </div>
                                    <div class="col-sm-4">
                                        <button type="button" class="btn btn-primary col-sm-12">Login</button>
                                    </div>
                                </div> -->
                               <form method="post" action="<?php $_PHP_SELF ?>" id="myForm" enctype="multipart/form-data"> 
                                <div class="row">
                                    <div class="col-sm-8">
                                        Do you want to post anonymously? &nbsp &nbsp
                                        </div>
                                        <div class="btn-group btn-toggle col-sm-4"> 
                                            <button class="btn btn-xs btn-default" onclick="return getValue('Yes')" id="yes" type="button">YES</button>
                                            <button class="btn btn-xs btn-primary active" onclick="return getValue('No')" id="no" type="button">NO</button>
                                            
                                            <input type="hidden" name="anonymously" id="anonymously" value="0"/>
                                            
                                        </div>
                                    </div>
                               
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" tabindex="1" class="form-control" required="required" placeholder="First Name" id="firstname" name="firstname">        
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" tabindex="2" class="form-control" required="required" placeholder="Last Name" id="lastname" name="lastname">  
                                    </div>
                                </div>
                                <p class="methodText heavy">Your Suggestions please,</p>
                                <div class="form-group">
                                    <textarea class="form-control" tabindex="3" placeholder="Suggestion Form " rows="5" required="true" name="suggestions" id="suggestions" onchange="fieldLengthValidator(this);"></textarea>  
                                    
                                </div>
                                <button type="submit" class="btn btn-primary" name="btnSubmit" id="btnSubmit" tabindex="4">Send Suggestion</button>
                                 </form> 
                                 </div>
                            
                           
                            
                            
                        </div>
                        <hr>
                </div>
            </div>
           
            <br>
        </section> 
        
      <script>
                          $('.btn-toggle').click(function() {
                        $(this).find('.btn').toggleClass('active');  
                        
                        if ($(this).find('.btn-primary').size()>0) {
                        	$(this).find('.btn').toggleClass('btn-primary');
                        }
                        if ($(this).find('.btn-danger').size()>0) {
                        	$(this).find('.btn').toggleClass('btn-danger');
                        }
                        /*if ($(this).find('.btn-success').size()>0) {
                        	$(this).find('.btn').toggleClass('btn-success');
                        }
                        if ($(this).find('.btn-info').size()>0) {
                        	$(this).find('.btn').toggleClass('btn-info');
                        }*/
                        
                        $(this).find('.btn').toggleClass('btn-default');
                           
                    });
                    
                   /* $('form').submit(function(){
                    	alert($(this["options"]).val());
                        return false;
                    }); */
                      </script>
        
        
   <?php include '../footer.php';?>
</body>
</html>