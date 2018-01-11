<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login | Miracle</title>
    <?php include '../config/Locations.php';?>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../cs/s/font-awesome.min.css" rel="stylesheet">
    <link href="../css/prettyPhoto.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/default.css" />
	<link rel="stylesheet" type="text/css" href="../css/component.css" />
	<script src="../js/modernizr.custom.js"></script>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?= AMAZON_URL ?>/images/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= AMAZON_URL ?>/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= AMAZON_URL ?>/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= AMAZON_URL ?>/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?= AMAZON_URL ?>/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<?php include '../header.php';?>
<body>
        
    <section id="title" class="peter-river">
        <div class="container" id="topHeading">
            <div class="row">
                <div class="col-sm-6">
                </br>
                </br>
                </br>
                    <h1>Welcome to Hubble</h1>
                    <p>The Internal Portal of Miracle</p>
                </div>
                <div class="col-sm-6">
                </br>
                </br>
                </br>
                    <ul class="breadcrumb pull-right">
                        <li><a href="../">Home</a></li>
                        <li class="active">Sign In</li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!--/#title-->

    <section id="about-us" class="container">
       <div class="row">
           <div class="col-md-4">
               <center><a href="../hubble/clogin.php"><img class="flatImages" src="<?= AMAZON_URL ?>/images/login/Login1.png"></a></center>
           </div>
           <div class="col-md-4">
                <center><a href="../hubble/elogin.php"><img class="flatImages" src="<?= AMAZON_URL ?>/images/login/Login2.png"></a></center>
           </div>
           <div class="col-md-4">
               <center><a href="../hubble/plogin.php"><img class="flatImages" src="<?= AMAZON_URL ?>/images/login/Login3.png"></a></center>
           </div>
       </div> 
    </section><!--/#about-us-->

<?php include '../footer.php';?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="../js/cbpHorizontalMenu.js"></script>
		<script>
			$(function() {
				cbpHorizontalMenu.init();
			});
		</script>
		<script></script>    
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.prettyPhoto.js"></script>
    <script src="../js/main.js"></script>
</body>
</html>
