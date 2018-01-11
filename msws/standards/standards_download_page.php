<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="description">
        <meta content="" name="author">
        <title>
            Corporate Standards Library | Miracle
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
                    url("<?= AMAZON_URL ?>/images/banners/corporateStandards.png");
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
               /* background-position:0px 71px;*/
            }



        </style>
    </head><!--/head-->
	<?php 
  
        include '../config/general.php';
//        require '../config/DbController.php';
//$conn = new DbController();
//       
        $resultMessage = '';
        $rcreatedBy = '';
        $rattachementLocation = '';
      //  $rpassword='';
session_start();
if(isset($_SESSION['ses_EmpLoginId']) && $_SESSION['ses_EmpLoginId'] != "")
    {
    $rcreatedBy = $_SESSION['ses_EmpLoginId'];
   // $rpassword = $_SESSION["ses_EmpPassword"];
    //echo 'hiii123';
   // session_unset();
//session_destroy();
    }else {
          header('Location: index.php'); 
    }
    ?>
     <?php include '../header.php'; ?>
    <body>
        <section>
        <div class="overlay section_bg">
            <div class=" container">
              
                <div class="row">    
                    <div class="col-sm-7 text-left">  
                        <br><br>
                        <h1 class="micro "><font color="#fff"><strong>Corporate Standards Library</strong></font></h1>

                    </div>
                    <div class="col-sm-5 text-right">
                        <br><br>
                       <ul class="breadcrumb pull-right">
                        <li><a href="../">Home</a></li>
                        <!-- Breadcrumb div starts here --> 
                        <li class="active">Corporate Standards</li>
                        <!-- Breadcrumb div Ends here --> 
                    </ul>
                    </div>
                </div><br>
            </div>
        </div>

    </section>
        <section class="container">
        
<!--            <br>-->
          
<!--            <div class="row">
                <div class="col-sm-7 text-left">
                    <h1 class="heavy">
                        Corporate Standards Library
                    </h1>
                </div>
                <div class="col-sm-5 text-right">
                    <ul class="breadcrumb pull-right">
                        <li>
                            <a href="../">Home</a>
                        </li>
                        <li class="active">Corporate Standards
                        </li>
                    </ul>
                </div>
            </div>-->
            <div class="row">
             <div class="col-sm-12">
<!--                 <hr clas="noMargin">-->
                 <h3 class="heavy">Brand Identity and Corporate Standards</h3>
                 <p class="methodText">Brand Identity is a crucial aspect of any organization, and a study shows that 90% of the successful brands have a superior brand and marketing strategy than other organizations. Uniformity of Message, superior quality collateral and cleanliness of design all help in the process of creating a truly inspiring and impressive piece of work. Through our Corporate Standards and Guidelines packet we will be providing you with a huge array of templates, collateral and other brand related items which will help everyone in Team Miracle to consistently maintain the high standards that we set in terms of brand identity. Brand Identity can deteriorate very quickly, hence we request everyone to follow the guidelines strictly and contact marketing@miraclesoft.com if there are any questions (or) suggestions. 
                 </p>
                 <a href="../download/DownloadCorporateLibrary.php?refId=1"><button class="btn btn-primary btn-md" type="button">Download Corporate Standards and Guidelines Document</button></a><!-- Link the corporate standards PDF here -->
                 <h3 class="heavy">Corporate Standards Packet</h3>
                 <p class="methodText">Templates, logos, fonts, collateral formats and guidelines of our Corporate Brand are all included in the packet, which enables all Miracle Team members to follow a consistent and uniform approach.<strong> You can download the complete packet (or) choose individual elements as well!!</strong></p>
                 <p class="methodText heavy">The Corporate Standards Packet consists of : </p>
                 <div class="row">
                     <div class="col-sm-5">
                     <div class="col-sm-12">
                         <ul class="methodText">
                             <li>Miracle Corporate Logos : Dark/Light</li>
                             <li>Business Partner Logos : IBM/SAP/Oracle/</li>
                             <li>Miracle Word Document Template</li>
                             <li>Flat vector Image Collection</li>
                             
                         </ul>   
                              </div>
                     </div>
                     <div class="col-sm-6">
                      <div class="col-sm-12">
                         <ul class="methodText">
                             <li>Miracle PowerPoint Presentation Template</li>
                             <li>Miracle Screen Background : Wide/Square Screens</li>
                             <li>Miracle Corporate Fonts : Lato</li>
                             <li>Common Slide collection</li>
                         </ul>  
                         </div>   
                     </div>
                 </div>
                 
                 <a href="../download/DownloadCorporateLibrary.php?refId=2"><button class="btn btn-primary btn-md" type="button">Download Corporate Standards Packet </button></a><!-- Link the corporate standards packet here -->
                 
                 <!-- Signature Code Start -->
                 <h3 class="heavy">Corporate Email Signature</h3>
                 <p class="methodText">In today's corporate world the fact  that sending email has become top form of modern business communication is undeniable. Everyday with millions of emails being read by our partners and customers around the globe, to uphold the Miracle brand it has become essential to include a proper email signature to add credibility for the company. The <strong>Email Signature</strong> that we use  should be consistent amongst employees to promote a uniform brand identity.  Miracle following corporate standards, has now designed an effective business signature for the employees giving a chance for all the Miraclites to create their signature and to integrate it with their email clients to ensure that we all follow the same standard. <strong>Go ahead and get started by putting in your details in feilds the and generate your signature.</strong></p> 
                 <a href="../email-signature.php"><button class="btn btn-primary btn-md" type="button" style="margin-top:-3px;">Don’t have your email signature? Generate Today!</button></a><!-- Link the corporate standards PDF here -->
                 <!-- Signature Code End -->
                 
                <h3 class="heavy">Corporate Elements</h3>
                 <div class="row noMarginTop noMarginBottom">
                     <div class="col-sm-2">
                         <hr class="noMargin">
                     </div>
                 </div>
                 
                 <div class="row"> <!-- Row #1 -->
                     <div class="col-sm-4">
                        <p class="heavy greyText noMargin">Graphics</p>
                        <h5 class="heavy noMargin">Miracle Corporate Logo Packet</h5>
                        <p class="noMarginTop">
                        This packet contains the EPS, JPEG and PNG formats of our Dark(Black) and Light(White) logo. 
                        </p> 
                        <a href="../download/DownloadCorporateLibrary.php?refId=3"><button class="btn btn-primary btn-md" type="button">Download Now!! </button></a>
                     </div>
                     <div class="col-sm-4">
                         <p class="heavy greyText noMargin">Template</p>
                        <h5 class="heavy noMargin">Corporate Word Templates</h5>
                        <p class="noMarginTop">
                        This packet contains the Dark/Light MS Word Document templates for corporate usage. 
                        </p> 
                        <a href="../download/DownloadCorporateLibrary.php?refId=8"><button class="btn btn-primary btn-md" type="button">Download Now!! </button></a>
                     </div>
                     
                     <div class="col-sm-4">
                        <p class="heavy greyText noMargin">Graphics</p>
                        <h5 class="heavy noMargin">Corporate Screen Backgrounds</h5>
                        <p class="noMarginTop">
                        This packet contains the Wide Screen and Square Screen Screen Backgrounds with left/right logo options.  
                        </p> 
                        <a href="../download/DownloadCorporateLibrary.php?refId=9"><button class="btn btn-primary btn-md" type="button">Download Now!! </button></a>
                     </div>
                </div>
                     <hr>
                <div class="row"> <!-- Row #2 -->
                     <div class="col-sm-4">
                         <p class="heavy greyText noMargin">Fonts</p>
                        <h5 class="heavy noMargin">Corporate Lato Font</h5>
                        <p class="noMarginTop">
                        This packets contains the corporate Lato font which is used on all our Web and Print Graphics. 
                        </p> 
                        <a href="../download/DownloadCorporateLibrary.php?refId=10"><button class="btn btn-primary btn-md" type="button">Download Now!! </button></a>
                     </div>
                     <div class="col-sm-4">
                         <p class="heavy greyText noMargin">Template</p>
                        <h5 class="heavy noMargin">Corporate PPT Templates</h5>
                        <p class="noMarginTop">
                        This packet contains the Light MS PowerPoint Template and Common Presentation Slides for Presentations.
                        </p> 
                        <a href="../download/DownloadCorporateLibrary.php?refId=11"><button class="btn btn-primary btn-md" type="button">Download Now!! </button></a>
                     </div>
                      <div class="col-sm-4">
                         <p class="heavy greyText noMargin">Graphics</p>
                        <h5 class="heavy noMargin">Flat Vector Collection</h5>
                        <p class="noMarginTop">
                      This collection consists of HQ reusable images that can be used in presentations and documents.
                        </p> 
                        <a href="../download/DownloadCorporateLibrary.php?refId=16"><button class="btn btn-primary btn-md" type="button">Download Now!! </button></a>
                     </div>
                    
                 </div>
                     <hr> 
                     <div class="row"> <!-- Row #3 -->
                     <div class="col-sm-4">
                         <p class="heavy greyText noMargin">Template</p>
                        <h5 class="heavy noMargin">Corporate Document Themes</h5>
                        <p class="noMarginTop">
                            This collection consists of Document themes along with font styles and colors.
                        </p> 
                        <a href="../download/DownloadCorporateLibrary.php?refId=17"><button class="btn btn-primary btn-md" type="button">Download Now!! </button></a>
                     </div>
                         <div class="col-sm-4">
                         <p class="heavy greyText noMargin">Template</p>
                        <h5 class="heavy noMargin">Common Slide Collection</h5>
                        <p class="noMarginTop">
                            This collection consists of  common Presentation Slides that can be used in our presentations
                        </p> 
                        <a href="../download/DownloadCorporateLibrary.php?refId=28"><button class="btn btn-primary btn-md" type="button">Download Now!! </button></a>
                     </div>
                      </div>
                     
                  <!--   <div class="row">
                       <div class="col-sm-4">
                         <p class="heavy greyText noMargin">Fonts</p>
                        <h5 class="heavy noMargin">Presentation Templates</h5>
                        <p class="noMarginTop">
                        This packets contains the corporate Lato font which is used on all our Web and Print Graphics. 
                        </p> 
                        <a href="../download/DownloadCorporateLibrary.php?refId=17"><button class="btn btn-primary btn-md" type="button">Download Now!! </button></a>
                     </div>  
                     </div> -->
                     
                  <h3 class="heavy"> Partner Logos</h3>
                 <div class="row noMarginTop noMarginBottom">
                     <div class="col-sm-2">
                         <hr class="noMargin">
                     </div>
                 </div>
                 <div class="row"> <!-- row #1-->
                     
                     <div class="col-sm-4">
                         <p class="heavy greyText noMargin">Graphics</p>
                        <h5 class="heavy noMargin">SAP Business Partner Mark</h5>
                        <p class="noMarginTop">
                        This packet contains the EPS, JPEG and PNG formats of the SAP Business Partner Mark.  
                        </p> 
                        <a href="../download/DownloadCorporateLibrary.php?refId=4"><button class="btn btn-primary btn-md" type="button">Download Now!! </button></a>
                     </div>
                     <div class="col-sm-4">
                         <p class="heavy greyText noMargin">Graphics</p>
                        <h5 class="heavy noMargin">IBM Business Partner Mark</h5>
                        <p class="noMarginTop">
                        This packet contains the EPS, JPEG and PNG formats of the IBM Business Partner Mark. 
                        </p> 
                        <a href="../download/DownloadCorporateLibrary.php?refId=5"><button class="btn btn-primary btn-md" type="button">Download Now!! </button></a>
                     </div>
                     <div class="col-sm-4">
                        <p class="heavy greyText noMargin">Graphics</p>
                        <h5 class="heavy noMargin">RedHat Business Partner Mark</h5>
                        <p class="noMarginTop">
                        This packet contains the EPS, JPEG and PNG formats of the RedHat Business Partner Mark.
                        </p> 
                        <a href="../download/DownloadCorporateLibrary.php?refId=6"><button class="btn btn-primary btn-md" type="button">Download Now!! </button></a>
                     </div>
                 </div>
                 <hr>
                 <div class="row"><!-- Row #2 -->
                     
                     <div class="col-sm-4">
                         <p class="heavy greyText noMargin">Graphics</p>
                        <h5 class="heavy noMargin">Oracle Business Partner Mark</h5>
                        <p class="noMarginTop">
                        This packet contains the EPS, JPEG and PNG formats of the Oracle Gold Business Partner Mark.  
                        </p> 
                        <a href="../download/DownloadCorporateLibrary.php?refId=7"><button class="btn btn-primary btn-md" type="button">Download Now!! </button></a>
                     </div>
                      <div class="col-sm-4">
                        <p class="heavy greyText noMargin">Graphics</p>
                        <h5 class="heavy noMargin">Rally Business Partner Mark</h5>
                        <p class="noMarginTop">
                        This packet contains the EPS, JPEG and PNG formats of the Rally Business Partner Mark.
                        </p> 
                        <a href="../download/DownloadCorporateLibrary.php?refId=12"><button class="btn btn-primary btn-md" type="button">Download Now!! </button></a>
                     </div>
                     <div class="col-sm-4">
                        <p class="heavy greyText noMargin">Graphics</p>
                        <h5 class="heavy noMargin">HP Business Partner Mark</h5>
                        <p class="noMarginTop">
                        This packet contains the EPS, JPEG and PNG formats of the HP Business Partner Mark.
                        </p> 
                        <a href="../download/DownloadCorporateLibrary.php?refId=13"><button class="btn btn-primary btn-md" type="button">Download Now!! </button></a>
                     </div>
                 </div>
                 <hr>
                 <div class="row"><!-- Row #3 -->
                    
                     <div class="col-sm-4">
                        <p class="heavy greyText noMargin">Graphics</p>
                        <h5 class="heavy noMargin">Pitney Bowes Business Partner Mark</h5>
                        <p class="noMarginTop">
                        This packet contains the EPS, JPEG and PNG formats of the  Pitney Bowes Business Partner Mark.
                        </p> 
                        <a href="../download/DownloadCorporateLibrary.php?refId=14"><button class="btn btn-primary btn-md" type="button">Download Now!! </button></a>
                     </div>
                     
                     <div class="col-sm-4">
                        <p class="heavy greyText noMargin">Graphics</p>
                        <h5 class="heavy noMargin">Atlassian Business Partner Mark</h5>
                        <p class="noMarginTop">
                        This packet contains the EPS, JPEG and PNG formats of the Atlassian Business Partner Mark.
                        </p> 
                        <a href="../download/DownloadCorporateLibrary.php?refId=15"><button class="btn btn-primary btn-md" type="button">Download Now!! </button></a>
                     </div>
                     <div class="col-sm-4">
                        <p class="heavy greyText noMargin">Graphics</p>
                        <h5 class="heavy noMargin">Apigee Business Partner Mark</h5>
                        <p class="noMarginTop">
                        This packet contains the EPS, JPEG and PNG formats of the Apigee Business Partner Mark.
                        </p> 
                        <a href="../download/DownloadCorporateLibrary.php?refId=18"><button class="btn btn-primary btn-md" type="button">Download Now!! </button></a>
                     </div>
                 </div>
                 
                   <hr>
                 <div class="row"><!-- Row #4 -->
                    
                     <div class="col-sm-4">
                        <p class="heavy greyText noMargin">Graphics</p>
                        <h5 class="heavy noMargin">Axway Business Partner Mark</h5>
                        <p class="noMarginTop">
                        This packet contains the EPS, JPEG and PNG formats of the  Axway Business Partner Mark.
                        </p> 
                        <a href="../download/DownloadCorporateLibrary.php?refId=19"><button class="btn btn-primary btn-md" type="button">Download Now!! </button></a>
                     </div>
                     
                     <div class="col-sm-4">
                        <p class="heavy greyText noMargin">Graphics</p>
                        <h5 class="heavy noMargin">Microsoft Business Partner Mark</h5>
                        <p class="noMarginTop">
                        This packet contains the EPS, JPEG and PNG formats of the Microsoft Business Partner Mark.
                        </p> 
                        <a href="../download/DownloadCorporateLibrary.php?refId=20"><button class="btn btn-primary btn-md" type="button">Download Now!! </button></a>
                     </div>
                     <div class="col-sm-4">
                        <p class="heavy greyText noMargin">Graphics</p>
                        <h5 class="heavy noMargin">CA Business Partner Mark</h5>
                        <p class="noMarginTop">
                        This packet contains the EPS, JPEG and PNG formats of the CA Business Partner Mark.
                        </p> 
                        <a href="../download/DownloadCorporateLibrary.php?refId=21"><button class="btn btn-primary btn-md" type="button">Download Now!! </button></a>
                     </div>
                 </div>
				 <!-- row 5 start -->
				  <hr>
				 <div class="row"><!-- Row #3 -->
                    
                     <div class="col-sm-4">
                        <p class="heavy greyText noMargin">Graphics</p>
                        <h5 class="heavy noMargin">Cloudera Business Partner Mark</h5>
                        <p class="noMarginTop">
                        This packet contains the EPS, JPEG and PNG formats of the  Cloudera Business Partner Mark.
                        </p> 
                        <a href="../download/DownloadCorporateLibrary.php?refId=22"><button class="btn btn-primary btn-md" type="button">Download Now!! </button></a>
                     </div>
                     
                     <div class="col-sm-4">
                        <p class="heavy greyText noMargin">Graphics</p>
                        <h5 class="heavy noMargin">Mulesoft Business Partner Mark</h5>
                        <p class="noMarginTop">
                        This packet contains the EPS, JPEG and PNG formats of the Mulesoft Business Partner Mark.
                        </p> 
                        <a href="../download/DownloadCorporateLibrary.php?refId=23"><button class="btn btn-primary btn-md" type="button">Download Now!! </button></a>
                     </div>
                    <div class="col-sm-4">
                        <p class="heavy greyText noMargin">Graphics</p>
                        <h5 class="heavy noMargin">TAG Business Partner Mark</h5>
                        <p class="noMarginTop">
                        This packet contains the EPS, JPEG and PNG formats of the  TAG Business Partner Mark.
                        </p> 
                        <a href="../download/DownloadCorporateLibrary.php?refId=24"><button class="btn btn-primary btn-md" type="button">Download Now!! </button></a>
                     </div>
                 </div>
				 <!-- row 5 end -->
				 <hr><div class="row"><!-- Row #6 -->
                    
                     <div class="col-sm-4">
                        <p class="heavy greyText noMargin">Graphics</p>
                        <h5 class="heavy noMargin">Informatica Business Partner Mark</h5>
                        <p class="noMarginTop">
                        This packet contains the EPS, JPEG and PNG formats of the  Informatica Business Partner Mark.
                        </p> 
                        <a href="../download/DownloadCorporateLibrary.php?refId=25"><button class="btn btn-primary btn-md" type="button">Download Now!! </button></a>
                     </div>
                     
                     <div class="col-sm-4">
                        <p class="heavy greyText noMargin">Graphics</p>
                        <h5 class="heavy noMargin">Morpheus Business Partner Mark</h5>
                        <p class="noMarginTop">
                        This packet contains the EPS, JPEG and PNG formats of the Morpheus Business Partner Mark.
                        </p> 
                        <a href="../download/DownloadCorporateLibrary.php?refId=26"><button class="btn btn-primary btn-md" type="button">Download Now!! </button></a>
                     </div>
                    <div class="col-sm-4">
                        <p class="heavy greyText noMargin">Graphics</p>
                        <h5 class="heavy noMargin">Pivotal Business Partner Mark</h5>
                        <p class="noMarginTop">
                        This packet contains the EPS, JPEG and PNG formats of the  Pivotal Business Partner Mark.
                        </p> 
                        <a href="../download/DownloadCorporateLibrary.php?refId=27"><button class="btn btn-primary btn-md" type="button">Download Now!! </button></a>
                     </div>
                 </div> 
				 
            </div>
                 </div>     
                 </div>
             </div>
         </div>
         <br>
        </section>
        <?php include '../footer.php';?>
    </body>
</html>
