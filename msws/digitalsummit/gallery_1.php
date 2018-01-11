<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Digital Summit | Gallery</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<?php include '../config/Locations.php';
include 'config/DS17Config.php';
?>
<!--Add Theme Color File To Change Template Color Scheme / Color Scheme Files are Located in root/css/color-themes/ folder-->
<!--<link href="css/color-themes/orange-theme.css" rel="stylesheet">-->

<!--Favicon-->
<link rel="shortcut icon" href="<?= AMAZON_URL ?>/ds17/images/favicon.ico" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
<meta name="description" content=" We have a huge collection of images of Ds '16 that includes all the events such as Meanhack, Techtalks, Social Contribution, Culturals and Business Summit ">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
/*dropdown*/
.main-menu .navigation > li.dropdown > a:after {
    font-family: 'FontAwesome';
    content: "\f107";
    position: absolute;
    right: 0px;
    top: 50%;
    margin-top: -15px;
    width: 10px;
    height: 30px;
    display: block;
    line-height: 30px;
    font-size: 14px;
    font-weight: normal;
}

/*dropdown*/
.sticky-header .main-menu .navigation > li > a{
    padding:19px 15px !important;
}
.footer-style-two {
    position: relative;
    padding: 80px 0px 0px;
    margin-bottom: -126px !important;
}
.styled-pagination li {
    position: relative;
    display: block;
    float: left;
    margin: 0px 8px 4px 0px;
}
.styled-pagination {
    margin-top: 20px !important;
    margin-bottom: 20px !important;
}
.soco-facebook:hover{
  color: #4f7dd4 !important;
}
.soco-twitter:hover{
  color: #00aae7 !important;
}
.soco-google:hover{
  color: #dc422b !important;
}
.soco-linkedin:hover{
  color: #0d416b !important;
}
.soco-youtube:hover{
  color: #c4302b !important;

}
.soco-flickr:hover{
  color: #0063DC !important;

}
@media screen and (min-width: 320px) and (max-width: 564px) {
   .logo-box {
      left: 0px !important;
    }
}
a{ color: #ababab ; } 
a:hover { color:#ef4048 ;}
</style>
</head>

<body>

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
      <!-- Main Header -->
    <?php include 'DS17Header.php'; ?>
    <!--End Main Header -->
    
    <!--Page Title-->
     <section class="page-title" style="background-image:url(<?= AMAZON_URL ?>/ds17/images/header-images/gallery.jpeg);margin-top:-114px!important;background-position:0% 0%;padding-bottom:15px;">
    	<div class="auto-container">
        	<div class="inner-box">
                <h1>Gallery</h1>
                <ul class="bread-crumb">
                	<li><a href="index.php">Home</a></li>
                    <li>Gallery</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->
    
    <!--FullWidth Section-->
    <section class="fullwidth-gallery">
    
    	<div  class="auto-container">
        	
            <!--Sortable Gallery-->
            <div class="mixitup-gallery">
            	<!--Filter-->
                <div class="filters clearfix">
                    <ul class="filter-tabs filter-btns">
                        <li id="identity1" class="filter active" data-role="button" data-filter="all">All</li>
                        <li id="identity2" class="filter" data-role="button" data-filter=".hack">Citizen Hack</li>
                        <li id="identity3" class="filter" data-role="button" data-filter=".tech">Tech Talks</li>
                        <li id="identity4" class="filter" data-role="button" data-filter=".social">Society</li>
                        <li id="identity5" class="filter" data-role="button" data-filter=".culturals">Hungama</li>
                        <li id="identity6" class="filter" data-role="button" data-filter=".summit">Business Summit</li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="filter-list clearfix">
         <span id="gallery1">    
             <div class="gallery-item mix tech col-md-3 col-sm-4 col-xs-12">
                <div class="inner-box">
                    <div class="image-box">
                        <img src="<?= AMAZON_URL ?>/ds17/images/gallery/tech1.png" alt="" />
                        <div class="overlay-box">
                            <div class="portfolio-links">
                                <a href="<?= AMAZON_URL ?>/ds17/images/gallery/tech1.png" data-fancybox-group="default-gallery" class="plus-icon lightbox-image flaticon-plus-symbol" title="Image Caption Here"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gallery-item mix tech col-md-3 col-sm-4 col-xs-12">
                <div class="inner-box">
                    <div class="image-box">
                        <img src="<?= AMAZON_URL ?>/ds17/images/gallery/tech2.png" alt="" />
                        <div class="overlay-box">
                            <div class="portfolio-links">
                                <a href="<?= AMAZON_URL ?>/ds17/images/gallery/tech2.png" data-fancybox-group="default-gallery" class="plus-icon lightbox-image flaticon-plus-symbol" title="Image Caption Here"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gallery-item mix all tech col-md-3 col-sm-4 col-xs-12">
                <div class="inner-box">
                    <div class="image-box">
                        <img src="<?= AMAZON_URL ?>/ds17/images/gallery/tech4.png" alt="" />
                        <div class="overlay-box">
                            <div class="portfolio-links">
                                <a href="<?= AMAZON_URL ?>/ds17/images/gallery/tech4.png" data-fancybox-group="default-gallery" class="plus-icon lightbox-image flaticon-plus-symbol" title="Image Caption Here"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gallery-item mix tech col-md-3 col-sm-4 col-xs-12">
                <div class="inner-box">
                    <div class="image-box">
                        <img src="<?= AMAZON_URL ?>/ds17/images/gallery/tech5.png" alt="" />
                        <div class="overlay-box">
                            <div class="portfolio-links">
                                <a href="<?= AMAZON_URL ?>/ds17/images/gallery/tech5.png" data-fancybox-group="default-gallery" class="plus-icon lightbox-image flaticon-plus-symbol" title="Image Caption Here"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <div class="gallery-item mix tech col-md-3 col-sm-4 col-xs-12">
                <div class="inner-box">
                    <div class="image-box">
                        <img src="<?= AMAZON_URL ?>/ds17/images/gallery/tech6.png" alt="" />
                        <div class="overlay-box">
                            <div class="portfolio-links">
                                <a href="<?= AMAZON_URL ?>/ds17/images/gallery/tech6.png" data-fancybox-group="default-gallery" class="plus-icon lightbox-image flaticon-plus-symbol" title="Image Caption Here"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <div class="gallery-item mix tech col-md-3 col-sm-4 col-xs-12">
                <div class="inner-box">
                    <div class="image-box">
                        <img src="<?= AMAZON_URL ?>/ds17/images/gallery/tech8.png" alt="" />
                        <div class="overlay-box">
                            <div class="portfolio-links">
                                <a href="<?= AMAZON_URL ?>/ds17/images/gallery/tech8.png" data-fancybox-group="default-gallery" class="plus-icon lightbox-image flaticon-plus-symbol" title="Image Caption Here"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <div class="gallery-item mix tech col-md-3 col-sm-4 col-xs-12">
                <div class="inner-box">
                    <div class="image-box">
                        <img src="<?= AMAZON_URL ?>/ds17/images/gallery/tech7.png" alt="" />
                        <div class="overlay-box">
                            <div class="portfolio-links">
                                <a href="<?= AMAZON_URL ?>/ds17/images/gallery/tech7.png" data-fancybox-group="default-gallery" class="plus-icon lightbox-image flaticon-plus-symbol" title="Image Caption Here"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <div class="gallery-item mix tech col-md-3 col-sm-4 col-xs-12">
                <div class="inner-box">
                    <div class="image-box">
                        <img src="<?= AMAZON_URL ?>/ds17/images/gallery/tech9.png" alt="" />
                        <div class="overlay-box">
                            <div class="portfolio-links">
                                <a href="<?= AMAZON_URL ?>/ds17/images/gallery/tech9.png" data-fancybox-group="default-gallery" class="plus-icon lightbox-image flaticon-plus-symbol" title="Image Caption Here"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </span>
        <span id="gallery2">
             <div class="gallery-item mix culturals col-md-3 col-sm-4 col-xs-12">
                <div class="inner-box">
                    <div class="image-box">
                        <img src="<?= AMAZON_URL ?>/ds17/images/gallery/culturals1.png" alt="" />
                        <div class="overlay-box">
                            <div class="portfolio-links">
                                <a href="<?= AMAZON_URL ?>/ds17/images/gallery/culturals1.png" data-fancybox-group="default-gallery" class="plus-icon lightbox-image flaticon-plus-symbol" title="Image Caption Here"></a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="gallery-item mix culturals col-md-3 col-sm-4 col-xs-12">
                <div class="inner-box">
                    <div class="image-box">
                        <img src="<?= AMAZON_URL ?>/ds17/images/gallery/culturals2.png" alt="" />
                        <div class="overlay-box">
                            <div class="portfolio-links">
                                <a href="<?= AMAZON_URL ?>/ds17/images/gallery/culturals2.png" data-fancybox-group="default-gallery" class="plus-icon lightbox-image flaticon-plus-symbol" title="Image Caption Here"></a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="gallery-item mix culturals col-md-3 col-sm-4 col-xs-12">
                <div class="inner-box">
                    <div class="image-box">
                        <img src="<?= AMAZON_URL ?>/ds17/images/gallery/culturals3.png" alt="" />
                        <div class="overlay-box">
                            <div class="portfolio-links">
                                <a href="<?= AMAZON_URL ?>/ds17/images/gallery/culturals3.png" data-fancybox-group="default-gallery" class="plus-icon lightbox-image flaticon-plus-symbol" title="Image Caption Here"></a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="gallery-item mix culturals col-md-3 col-sm-4 col-xs-12">
                <div class="inner-box">
                    <div class="image-box">
                        <img src="<?= AMAZON_URL ?>/ds17/images/gallery/culturals4.png" alt="" />
                        <div class="overlay-box">
                            <div class="portfolio-links">
                                <a href="<?= AMAZON_URL ?>/ds17/images/gallery/culturals4.png" data-fancybox-group="default-gallery" class="plus-icon lightbox-image flaticon-plus-symbol" title="Image Caption Here"></a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="gallery-item mix culturals col-md-3 col-sm-4 col-xs-12">
                <div class="inner-box">
                    <div class="image-box">
                        <img src="<?= AMAZON_URL ?>/ds17/images/gallery/culturals5.png" alt="" />
                        <div class="overlay-box">
                            <div class="portfolio-links">
                                <a href="<?= AMAZON_URL ?>/ds17/images/gallery/culturals5.png" data-fancybox-group="default-gallery" class="plus-icon lightbox-image flaticon-plus-symbol" title="Image Caption Here"></a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
             <div class="gallery-item mix culturals col-md-3 col-sm-4 col-xs-12">
                <div class="inner-box">
                    <div class="image-box">
                        <img src="<?= AMAZON_URL ?>/ds17/images/gallery/culturals6.png" alt="" />
                        <div class="overlay-box">
                            <div class="portfolio-links">
                                <a href="<?= AMAZON_URL ?>/ds17/images/gallery/culturals6.png" data-fancybox-group="default-gallery" class="plus-icon lightbox-image flaticon-plus-symbol" title="Image Caption Here"></a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
             <div class="gallery-item mix culturals col-md-3 col-sm-4 col-xs-12">
                <div class="inner-box">
                    <div class="image-box">
                        <img src="<?= AMAZON_URL ?>/ds17/images/gallery/culturals7.png" alt="" />
                        <div class="overlay-box">
                            <div class="portfolio-links">
                                <a href="<?= AMAZON_URL ?>/ds17/images/gallery/culturals7.png" data-fancybox-group="default-gallery" class="plus-icon lightbox-image flaticon-plus-symbol" title="Image Caption Here"></a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="gallery-item mix culturals col-md-3 col-sm-4 col-xs-12">
                <div class="inner-box">
                    <div class="image-box">
                        <img src="<?= AMAZON_URL ?>/ds17/images/gallery/culturals8.png" alt="" />
                        <div class="overlay-box">
                            <div class="portfolio-links">
                                <a href="<?= AMAZON_URL ?>/ds17/images/gallery/culturals8.png" data-fancybox-group="default-gallery" class="plus-icon lightbox-image flaticon-plus-symbol" title="Image Caption Here"></a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </span>    
            <!--Gallery Item-->
        <span id="gallery3">   
            <div class="gallery-item mix social col-md-3 col-sm-4 col-xs-12">
                <div class="inner-box">
                    <div class="image-box">
                        <img src="<?= AMAZON_URL ?>/ds17/images/gallery/social4.png" alt="" />
                        <div class="overlay-box">
                            <div class="portfolio-links">
                                <a href="<?= AMAZON_URL ?>/ds17/images/gallery/social4.png" data-fancybox-group="default-gallery" class="plus-icon lightbox-image flaticon-plus-symbol" title="Image Caption Here"></a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="gallery-item mix social col-md-3 col-sm-4 col-xs-12">
                <div class="inner-box">
                    <div class="image-box">
                        <img src="<?= AMAZON_URL ?>/ds17/images/gallery/social5.png" alt="" />
                        <div class="overlay-box">
                            <div class="portfolio-links">
                                <a href="<?= AMAZON_URL ?>/ds17/images/gallery/social5.png" data-fancybox-group="default-gallery" class="plus-icon lightbox-image flaticon-plus-symbol" title="Image Caption Here"></a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="gallery-item mix social col-md-3 col-sm-4 col-xs-12">
                <div class="inner-box">
                    <div class="image-box">
                        <img src="<?= AMAZON_URL ?>/ds17/images/gallery/social6.png" alt="" />
                        <div class="overlay-box">
                            <div class="portfolio-links">
                                <a href="<?= AMAZON_URL ?>/ds17/images/gallery/social6.png" data-fancybox-group="default-gallery" class="plus-icon lightbox-image flaticon-plus-symbol" title="Image Caption Here"></a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="gallery-item mix social col-md-3 col-sm-4 col-xs-12">
                <div class="inner-box">
                    <div class="image-box">
                        <img src="<?= AMAZON_URL ?>/ds17/images/gallery/social7.png" alt="" />
                        <div class="overlay-box">
                            <div class="portfolio-links">
                                <a href="<?= AMAZON_URL ?>/ds17/images/gallery/social7.png" data-fancybox-group="default-gallery" class="plus-icon lightbox-image flaticon-plus-symbol" title="Image Caption Here"></a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="gallery-item mix social col-md-3 col-sm-4 col-xs-12">
                <div class="inner-box">
                    <div class="image-box">
                        <img src="<?= AMAZON_URL ?>/ds17/images/gallery/social8.png" alt="" />
                        <div class="overlay-box">
                            <div class="portfolio-links">
                                <a href="<?= AMAZON_URL ?>/ds17/images/gallery/social8.png" data-fancybox-group="default-gallery" class="plus-icon lightbox-image flaticon-plus-symbol" title="Image Caption Here"></a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="gallery-item mix social col-md-3 col-sm-4 col-xs-12">
                <div class="inner-box">
                    <div class="image-box">
                        <img src="<?= AMAZON_URL ?>/ds17/images/gallery/social1.png" alt="" />
                        <div class="overlay-box">
                            <div class="portfolio-links">
                                <a href="<?= AMAZON_URL ?>/ds17/images/gallery/social1.png" data-fancybox-group="default-gallery" class="plus-icon lightbox-image flaticon-plus-symbol" title="Image Caption Here"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gallery-item mix all social col-md-3 col-sm-4 col-xs-12">
                <div class="inner-box">
                    <div class="image-box">
                        <img src="<?= AMAZON_URL ?>/ds17/images/gallery/social2.png" alt="" />
                        <div class="overlay-box">
                            <div class="portfolio-links">
                                <a href="<?= AMAZON_URL ?>/ds17/images/gallery/social2.png" data-fancybox-group="default-gallery" class="plus-icon lightbox-image flaticon-plus-symbol" title="Image Caption Here"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gallery-item mix social col-md-3 col-sm-4 col-xs-12">
                <div class="inner-box">
                    <div class="image-box">
                        <img src="<?= AMAZON_URL ?>/ds17/images/gallery/social3.png" alt="" />
                        <div class="overlay-box">
                            <div class="portfolio-links">
                                <a href="<?= AMAZON_URL ?>/ds17/images/gallery/social3.png" data-fancybox-group="default-gallery" class="plus-icon lightbox-image flaticon-plus-symbol" title="Image Caption Here"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </span>   
            <!--Gallery Item-->
        <span id="gallery4">    
            <div class="gallery-item mix summit col-md-3 col-sm-4 col-xs-12">
                <div class="inner-box">
                    <div class="image-box">
                        <img src="<?= AMAZON_URL ?>/ds17/images/gallery/bs1.png" alt="" />
                        <div class="overlay-box">
                            <div class="portfolio-links">
                                <a href="<?= AMAZON_URL ?>/ds17/images/gallery/bs1.png" data-fancybox-group="default-gallery" class="plus-icon lightbox-image flaticon-plus-symbol" title="Image Caption Here"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <div class="gallery-item mix summit col-md-3 col-sm-4 col-xs-12">
                <div class="inner-box">
                    <div class="image-box">
                        <img src="<?= AMAZON_URL ?>/ds17/images/gallery/bs2.png" alt="" />
                        <div class="overlay-box">
                            <div class="portfolio-links">
                                <a href="<?= AMAZON_URL ?>/ds17/images/gallery/bs2.png" data-fancybox-group="default-gallery" class="plus-icon lightbox-image flaticon-plus-symbol" title="Image Caption Here"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <div class="gallery-item mix summit col-md-3 col-sm-4 col-xs-12">
                <div class="inner-box">
                    <div class="image-box">
                        <img src="<?= AMAZON_URL ?>/ds17/images/gallery/bs3.png" alt="" />
                        <div class="overlay-box">
                            <div class="portfolio-links">
                                <a href="<?= AMAZON_URL ?>/ds17/images/gallery/bs3.png" data-fancybox-group="default-gallery" class="plus-icon lightbox-image flaticon-plus-symbol" title="Image Caption Here"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <div class="gallery-item mix summit col-md-3 col-sm-4 col-xs-12">
                <div class="inner-box">
                    <div class="image-box">
                        <img src="<?= AMAZON_URL ?>/ds17/images/gallery/bs4.png" alt="" />
                        <div class="overlay-box">
                            <div class="portfolio-links">
                                <a href="<?= AMAZON_URL ?>/ds17/images/gallery/bs4.png" data-fancybox-group="default-gallery" class="plus-icon lightbox-image flaticon-plus-symbol" title="Image Caption Here"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <div class="gallery-item mix summit col-md-3 col-sm-4 col-xs-12">
                <div class="inner-box">
                    <div class="image-box">
                        <img src="<?= AMAZON_URL ?>/ds17/images/gallery/bs5.png" alt="" />
                        <div class="overlay-box">
                            <div class="portfolio-links">
                                <a href="<?= AMAZON_URL ?>/ds17/images/gallery/bs5.png" data-fancybox-group="default-gallery" class="plus-icon lightbox-image flaticon-plus-symbol" title="Image Caption Here"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gallery-item mix summit col-md-3 col-sm-4 col-xs-12">
                <div class="inner-box">
                    <div class="image-box">
                        <img src="<?= AMAZON_URL ?>/ds17/images/gallery/bs6.png" alt="" />
                        <div class="overlay-box">
                            <div class="portfolio-links">
                                <a href="<?= AMAZON_URL ?>/ds17/images/gallery/bs6.png" data-fancybox-group="default-gallery" class="plus-icon lightbox-image flaticon-plus-symbol" title="Image Caption Here"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gallery-item mix summit col-md-3 col-sm-4 col-xs-12">
                <div class="inner-box">
                    <div class="image-box">
                        <img src="<?= AMAZON_URL ?>/ds17/images/gallery/bs7.png" alt="" />
                        <div class="overlay-box">
                            <div class="portfolio-links">
                                <a href="<?= AMAZON_URL ?>/ds17/images/gallery/bs7.png" data-fancybox-group="default-gallery" class="plus-icon lightbox-image flaticon-plus-symbol" title="Image Caption Here"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <div class="gallery-item mix summit col-md-3 col-sm-4 col-xs-12">
                <div class="inner-box">
                    <div class="image-box">
                        <img src="<?= AMAZON_URL ?>/ds17/images/gallery/bs8.png" alt="" />
                        <div class="overlay-box">
                            <div class="portfolio-links">
                                <a href="<?= AMAZON_URL ?>/ds17/images/gallery/bs8.png" data-fancybox-group="default-gallery" class="plus-icon lightbox-image flaticon-plus-symbol" title="Image Caption Here"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </span>    
            <!--Gallery Item-->
        <span id="gallery5">    
            <div class="gallery-item mix hack col-md-3 col-sm-4 col-xs-12">
                <div class="inner-box">
                    <div class="image-box">
                        <img src="<?= AMAZON_URL ?>/ds17/images/gallery/hack1.png" alt="" />
                        <div class="overlay-box">
                            <div class="portfolio-links">
                                <a href="<?= AMAZON_URL ?>/ds17/images/gallery/hack1.png" data-fancybox-group="default-gallery" class="plus-icon lightbox-image flaticon-plus-symbol" title="Image Caption Here"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gallery-item mix all hack col-md-3 col-sm-4 col-xs-12">
                <div class="inner-box">
                    <div class="image-box">
                        <img src="<?= AMAZON_URL ?>/ds17/images/gallery/hack2.png" alt="" />
                        <div class="overlay-box">
                            <div class="portfolio-links">
                                <a href="<?= AMAZON_URL ?>/ds17/images/gallery/hack2.png" data-fancybox-group="default-gallery" class="plus-icon lightbox-image flaticon-plus-symbol" title="Image Caption Here"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gallery-item mix all hack col-md-3 col-sm-4 col-xs-12">
                <div class="inner-box">
                    <div class="image-box">
                        <img src="<?= AMAZON_URL ?>/ds17/images/gallery/hack3.png" alt="" />
                        <div class="overlay-box">
                            <div class="portfolio-links">
                                <a href="<?= AMAZON_URL ?>/ds17/images/gallery/hack3.png" data-fancybox-group="default-gallery" class="plus-icon lightbox-image flaticon-plus-symbol" title="Image Caption Here"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gallery-item mix all hack col-md-3 col-sm-4 col-xs-12">
                <div class="inner-box">
                    <div class="image-box">
                        <img src="<?= AMAZON_URL ?>/ds17/images/gallery/hack4.png" alt="" />
                        <div class="overlay-box">
                            <div class="portfolio-links">
                                <a href="<?= AMAZON_URL ?>/ds17/images/gallery/hack4.png" data-fancybox-group="default-gallery" class="plus-icon lightbox-image flaticon-plus-symbol" title="Image Caption Here"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gallery-item mix all hack col-md-3 col-sm-4 col-xs-12">
                <div class="inner-box">
                    <div class="image-box">
                        <img src="<?= AMAZON_URL ?>/ds17/images/gallery/hack5.png" alt="" />
                        <div class="overlay-box">
                            <div class="portfolio-links">
                                <a href="<?= AMAZON_URL ?>/ds17/images/gallery/hack5.png" data-fancybox-group="default-gallery" class="plus-icon lightbox-image flaticon-plus-symbol" title="Image Caption Here"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gallery-item mix all hack col-md-3 col-sm-4 col-xs-12">
                <div class="inner-box">
                    <div class="image-box">
                        <img src="<?= AMAZON_URL ?>/ds17/images/gallery/hack6.png" alt="" />
                        <div class="overlay-box">
                            <div class="portfolio-links">
                                <a href="<?= AMAZON_URL ?>/ds17/images/gallery/hack6.png" data-fancybox-group="default-gallery" class="plus-icon lightbox-image flaticon-plus-symbol" title="Image Caption Here"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gallery-item mix all hack col-md-3 col-sm-4 col-xs-12">
                <div class="inner-box">
                    <div class="image-box">
                        <img src="<?= AMAZON_URL ?>/ds17/images/gallery/hack7.png" alt="" />
                        <div class="overlay-box">
                            <div class="portfolio-links">
                                <a href="<?= AMAZON_URL ?>/ds17/images/gallery/hack7.png" data-fancybox-group="default-gallery" class="plus-icon lightbox-image flaticon-plus-symbol" title="Image Caption Here"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gallery-item mix all hack col-md-3 col-sm-4 col-xs-12">
                <div class="inner-box">
                    <div class="image-box">
                        <img src="<?= AMAZON_URL ?>/ds17/images/gallery/hack8.png" alt="" />
                        <div class="overlay-box">
                            <div class="portfolio-links">
                                <a href="<?= AMAZON_URL ?>/ds17/images/gallery/hack8.png" data-fancybox-group="default-gallery" class="plus-icon lightbox-image flaticon-plus-symbol" title="Image Caption Here"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
         </span>   
        </div>
             <br>   
        <!-- Styled Pagination 
        <div class="styled-pagination text-center">
            <ul class="clearfix">
                <li><a class="prev" href="#"><span class="fa fa-angle-left"></span></a></li>
                <li><a href="#">1</a></li>
                <li><a href="#" class="active">2</a></li>
                <li><a class="next" href="#"><span class="fa fa-angle-right"></span></a></li>
            </ul>
        </div>
            
    </section>
    <!--End Gallery Section-->
       <div id="pagination" class="styled-pagination text-center">
            <ul class="clearfix">
                <li><a class="prev" href="#"><span class="fa fa-angle-left"></span></a></li>
                <li id="click1"><a href="#" id="click1a" class="active" style="color:#fff;">1</a></li>
                <li id="click2"><a href="#" id="click2a" style="color:#8c8c8c;">2</a></li>
                <li id="click3"><a href="#" id="click3a" style="color:#8c8c8c;">3</a></li>
                <li id="click4"><a href="#" id="click4a" style="color:#8c8c8c;">4</a></li>
                <li id="click5"><a href="#" id="click5a" style="color:#8c8c8c;">5</a></li>
                <li><a class="next" href="#"><span class="fa fa-angle-right"></span></a></li>
            </ul>
        </div>
     <!--Main Footer-->
     <?php include 'ds17Footer.php'; ?>
    <!--End Main Footer-->
    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="icon fa fa-long-arrow-up"></span></div>

<script>
    $("document").ready(function(){ 
            $("#gallery2").hide();
            $("#gallery3").hide();
            $("#gallery4").hide();
            $("#gallery5").hide();
        $("#click1").click(function(){
            $("#click1a").css("color","#f4f4f4");
            $("#click2a").css("color","#8c8c8c");
            $("#click3a").css("color","#8c8c8c");
            $("#click4a").css("color","#8c8c8c");
            $("#click5a").css("color","#8c8c8c");
            $("#click1a").css("background-color","#d43058");
            $("#click2a").css("background-color","#f4f4f4");
            $("#click3a").css("background-color","#f4f4f4");
            $("#click4a").css("background-color","#f4f4f4");
            $("#click5a").css("background-color","#f4f4f4");
            $("#gallery1").show();
            $("#gallery2").hide();
            $("#gallery3").hide();
            $("#gallery4").hide();
            $("#gallery5").hide();
        })
        $("#click2").click(function(){
            $("#click2a").css("color","#f4f4f4");
            $("#click1a").css("color","#8c8c8c");
            $("#click3a").css("color","#8c8c8c");
            $("#click4a").css("color","#8c8c8c");
            $("#click5a").css("color","#8c8c8c");
            $("#click2a").css("background-color","#d43058");
            $("#click1a").css("background-color","#f4f4f4");
            $("#click3a").css("background-color","#f4f4f4");
            $("#click4a").css("background-color","#f4f4f4");
            $("#click5a").css("background-color","#f4f4f4");
            $("#gallery2").show();
            $("#gallery1").hide();
            $("#gallery3").hide();
            $("#gallery4").hide();
            $("#gallery5").hide();
        })
        $("#click3").click(function(){
            $("#click3a").css("color","#f4f4f4");
            $("#click2a").css("color","#8c8c8c");
            $("#click1a").css("color","#8c8c8c");
            $("#click4a").css("color","#8c8c8c");
            $("#click5a").css("color","#8c8c8c");
            $("#click3a").css("background-color","#d43058");
            $("#click1a").css("background-color","#f4f4f4");
            $("#click2a").css("background-color","#f4f4f4");
            $("#click4a").css("background-color","#f4f4f4");
            $("#click5a").css("background-color","#f4f4f4");
            $("#gallery3").show();
            $("#gallery1").hide();
            $("#gallery2").hide();
            $("#gallery4").hide();
            $("#gallery5").hide();
        })
        $("#click4").click(function(){
            $("#click4a").css("color","#f4f4f4");
            $("#click2a").css("color","#8c8c8c");
            $("#click3a").css("color","#8c8c8c");
            $("#click1a").css("color","#8c8c8c");
            $("#click5a").css("color","#8c8c8c");
            $("#click4a").css("background-color","#d43058");
            $("#click1a").css("background-color","#f4f4f4");
            $("#click2a").css("background-color","#f4f4f4");
            $("#click3a").css("background-color","#f4f4f4");
            $("#click5a").css("background-color","#f4f4f4");
            $("#gallery4").show();
            $("#gallery1").hide();
            $("#gallery2").hide();
            $("#gallery3").hide();
            $("#gallery5").hide();
        })
        $("#click5").click(function(){
            $("#click5a").css("color","#f4f4f4");
            $("#click2a").css("color","#8c8c8c");
            $("#click3a").css("color","#8c8c8c");
            $("#click1a").css("color","#8c8c8c");
            $("#click4a").css("color","#8c8c8c");
            $("#click1a").css("background-color","#f4f4f4");
            $("#click2a").css("background-color","#f4f4f4");
            $("#click3a").css("background-color","#f4f4f4");
            $("#click4a").css("background-color","#f4f4f4");
            $("#click5a").css("background-color","#d43058");
            $("#gallery5").show();
            $("#gallery1").hide();
            $("#gallery2").hide();
            $("#gallery3").hide();
            $("#gallery4").hide();
        })
        $("#identity1").click(function(){
            $("#identity1").css("color","#d43058");
            $("#identity5").css("color","#222222");
            $("#identity4").css("color","#222222");
            $("#identity3").css("color","#222222");
            $("#identity2").css("color","#222222");
            $("#identity6").css("color","#222222");
            $("#pagination").show();
            $("#gallery1").show();
            $("#gallery2").hide();
            $("#gallery3").hide();
            $("#gallery4").hide();
            $("#gallery5").hide();
        })
        $("#identity2").click(function(){
            $("#identity1").css("color","#222222");
            $("#identity2").css("color","#d43058");
            $("#identity3").css("color","#222222");
            $("#identity4").css("color","#222222");
            $("#identity5").css("color","#222222");
            $("#identity6").css("color","#222222");
            $("#gallery1").hide();
            $("#gallery2").hide();
            $("#gallery3").hide();
            $("#gallery4").hide();
            $("#gallery5").show();
            $("#pagination").hide();
        })
        $("#identity3").click(function(){
             $("#identity1").css("color","#222222");
            $("#identity3").css("color","#d43058");
            $("#identity2").css("color","#222222");
            $("#identity4").css("color","#222222");
            $("#identity5").css("color","#222222");
            $("#identity6").css("color","#222222");
            $("#gallery1").show();
            $("#gallery2").hide();
            $("#gallery3").hide();
            $("#gallery4").hide();
            $("#gallery5").hide();
            $("#pagination").hide();
        })
        $("#identity4").click(function(){
             $("#identity1").css("color","#222222");
            $("#identity4").css("color","#d43058");
            $("#identity3").css("color","#222222");
            $("#identity2").css("color","#222222");
            $("#identity5").css("color","#222222");
            $("#identity6").css("color","#222222");
            $("#gallery1").hide();
            $("#gallery2").hide();
            $("#gallery3").show();
            $("#gallery4").hide();
            $("#gallery5").hide();
            $("#pagination").hide();
        })
        $("#identity5").click(function(){
             $("#identity1").css("color","#222222");
            $("#identity5").css("color","#d43058");
            $("#identity4").css("color","#222222");
            $("#identity3").css("color","#222222");
            $("#identity2").css("color","#222222");
            $("#identity6").css("color","#222222");
            $("#gallery1").hide();
            $("#gallery2").show();
            $("#gallery3").hide();
            $("#gallery4").hide();
            $("#gallery5").hide();
            $("#pagination").hide();
        })
        $("#identity6").click(function(){
             $("#identity1").css("color","#222222");
            $("#identity6").css("color","#d43058");
            $("#identity5").css("color","#222222");
            $("#identity4").css("color","#222222");
            $("#identity3").css("color","#222222");
            $("#identity2").css("color","#222222");
            $("#gallery1").hide();
            $("#gallery2").hide();
            $("#gallery3").hide();
            $("#gallery4").show();
            $("#gallery5").hide();
            $("#pagination").hide();
        })
    })
</script> 

<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/mixitup.js"></script>
<script src="js/appear.js"></script>
<script src="js/script.js"></script>

</body>
</html>