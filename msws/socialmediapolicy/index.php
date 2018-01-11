
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
          Miracle Social Media Policy | Miracle
        </title>
        <?php include '../config/Locations.php';?>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/font-awesome.min.css" rel="stylesheet">
        <link href="../css/main.css" rel="stylesheet">
        <link href="../css/default.css" rel="stylesheet" type="text/css">
        <link href="../css/component.css" rel="stylesheet" type="text/css">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?= AMAZON_URL ?>/images/favicon.ico" rel="shortcut icon">
         <script type="text/javascript" src="../js/ajaxUtil.js"></script>
         <style>body,p,li,.btn,h1,h3,div{font-family: Open Sans ,sans-serif;}
       .methodText a:hover{color:#00aae7;}
       h2{
           color:#0d416b !important;
       }
        
         .tinted-image {
         background: 
         /* top, transparent red */
         linear-gradient(
         rgba(0, 0, 0, 0.55), 
         rgba(0, 0, 0, 0.55)
         ),
         /* your image */
         url("<?= AMAZON_URL ?>/images/sm-policy/bg.png");
         -webkit-background-size: cover;
         -moz-background-size: cover;
         -o-background-size: cover;
         background-size: cover;
         }
         label {
         font-weight: 600;
         }
         a{text-decoration:none !important;}
         .contact{border: solid 3px #00aae7 !important;border-radius: 3px !important;
         color: #00aae7 !important;display: inline-block;font-size: 17px;letter-spacing: 1px;
         margin-bottom: 5px;moz-border-radius: 3px;padding: 11px 59px;transition: all 0.5s ease;
         webkit-border-radius: 3px;background:#fff;font-weight:bolder;}
         .contact:hover{color:#00aae7;background: #232527;}
         .h4{color:#fff !important; }
         /* Widgets */
         .widget {background-color: #ffffff;margin-bottom: 10px;position: relative;border-radius: 2px;}
         .widget > .widget-content:first-child,.widget > .widget-image:first-child {
         border-top-right-radius: 2px;border-top-left-radius: 2px;}
         .widget > .widget-content:last-child {border-bottom-right-radius: 2px;border-bottom-left-radius: 2px;}
         .widget,.widget-content {display: block;-webkit-transition: all .1s ease-out;
         transition: all .1s ease-out;}
         
         .widget:active,.widget-content:active {text-decoration: none;-webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, .02);
         box-shadow: 0 1px 3px rgba(0, 0, 0, .02);-webkit-transform: translateY(0);transform: translateY(0);}
         .widget-image {height: 310px;overflow: hidden;position: relative;}
         .widget-image > img {min-width: 787px;}
         .widget-image.widget-image-bottom img {position: absolute;left: 0;bottom: 0;}
         .widget-image.widget-image-sm {height: 270px;}
         .widget-image.widget-image-xs {height: 175px;}
         .widget-image > i {position: absolute;right: 30px;bottom: 30px;color: #ffffff;
         font-size: 70px;opacity: .5;}
         .widget-image-content {position: absolute;top: 0;left: 0;right: 0;bottom: 0;padding: 15px 25px;
         background: rgba(0, 0, 0, .65);}
         .widget-content {padding: 1px;}
         .widget-content.widget-content-mini {padding-top: 7px;padding-bottom: 7px;}
         .widget-content.widget-content-full {padding: 0;}
         .widget-content.widget-content-full-top-bottom {padding-top: 0;padding-bottom: 0;}
         .widget-content .pull-left {margin-right: 20px;}
         .widget-content .pull-right {margin-left: 20px;}
         a.widget-content {display: block;}a.widget-content {display: block;}
         .widget-heading {margin: 10px 0;}
         .widget-icon {display: inline-block;width: 64px;height: 64px;line-height: 60px;
         margin: 5px;font-size: 20px;text-align: center;border-radius: 50%;
         background: rgba(0, 0, 0, .05);}
         .widget-icon.pull-left {margin: 5px 5px 5px 0;}.widget-icon.pull-right {margin: 5px 0 5px 5px;}
         .widget-icon .gi,.widget-icon .hi,.widget-icon .si,.widget-icon .fi {margin-top: -3px;}
         /* Full Background Image */
         img.full-bg {min-height: 100%;min-width: 1280px;width: 100%;height: auto;
         position: fixed;top: 0;left: 0;}
         img.full-bg.full-bg-bottom {top: auto;bottom: 0;}
         @media screen and (max-width: 1280px) {img.full-bg {left: 50%;margin-left: -640px;}}
         /* Content which contains floats */
         .content-float .pull-left {margin: 0 20px 20px 0;}
         .content-float .pull-right {margin: 0 0 20px 20px;}
         .content-float-hor .pull-left {margin-right: 20px;}
         .content-float-hor .pull-right {margin-left: 20px;}
         .themed-background {background-color: #00aae7 !important;}
         .themed-color-dark {color: #454e59 !important;}
         .themed-background-dark {
         background-color: #454e59 !important;
         }
         .breadcrumb {0px !important;}
         .text-dark, .text-dark:hover, a.text-dark, a.text-dark:hover, a.text-dark:focus {
         background-color: #232527;
         color: #fff !important;
         }
         .emerald{
         background-color:#0d416b !important;}
         }
         .list-group-item {
         position: relative;
         display: block;
         padding-top: 10px!important;
         padding-right: 5px!important;
         padding-bottom: 10px!important;
         padding-left: 5px!important;
         margin-bottom: -1px;
         background-color: #fff;
         border: 1px solid #ddd;
         }
         .micro{
         margin-top:3px !important;
         }
         .footer-nav-links a:hover,
         .footer-nav-links a:focus {
         color: #ffffff;
         background-color: #0d416b;
         -webkit-box-shadow: 0 2px 3px rgba(0, 0, 0, .46);
         box-shadow: 0 2px 3px rgba(0, 0, 0, .46);
         }
         .footer-nav-links a.social-twitter:hover,
         .footer-nav-links a.social-twitter:focus {
         background-color: #55acee!important;
         }
         .footer-nav-links a.social-facebook:hover,
         .footer-nav-links a.social-facebook:focus {
         background-color: #3b5998!important;
         }
         .footer-nav-links a.social-google-plus:hover,
         .footer-nav-links a.social-google-plus:focus {
         background-color: #dd4b39!important;
         }
         .footer-nav-links a.social-dribbble:hover,
         .footer-nav-links a.social-dribbble:focus {
         background-color: #ea4c89!important;
         }
         .footer-nav-links a.social-youtube:hover,
         .footer-nav-links a.social-youtube:focus {
         background-color: #b31217!important;
         }
         .footer-nav-links a.social-flickr:hover,
         .footer-nav-links a.social-flickr:focus {
         background-color: #ed1983!important;
         }
         .footer-nav-links a.social-linkedin:hover,
         .footer-nav-links a.social-linkedin:focus {
         background-color: #0077b5!important;
         }
      </style>
      <style type="text/css">
         .display-1 {font-size: 3rem !important;}
         .card {overflow:hidden;height:100% !important;}
         .card-block .rotate {z-index: 8;float: right;height: 100% !important;}
         .card-block .rotate i{color: rgba(20, 20, 20, 0.15);position:absolute;left:0;
         left: auto;right: -10px;bottom: 0;
         display: block;-webkit-transform: rotate(-44deg);
         -moz-transform: rotate(-44deg);-o-transform: rotate(-44deg);
         -ms-transform: rotate(-44deg);transform: rotate(-44deg);
         }
      </style>
      <style>
         a{text-decoration:none !important;}
         .contact{border: solid 3px #00aae7 !important;border-radius: 3px !important;
         color: #00aae7 !important;display: inline-block;font-size: 17px;letter-spacing: 1px;
         margin-bottom: 5px;moz-border-radius: 3px;padding: 11px 59px;transition: all 0.5s ease;
         webkit-border-radius: 3px;background:#fff;font-weight:bolder;}
         .contact:hover{color:#00aae7;background: #232527;}
         .h4{color:#fff !important; }
         /* Widgets */
         .widget {background-color: #ffffff;margin-bottom: 10px;position: relative;border-radius: 2px;}
         box-shadow: 0 1px 3px rgba(0, 0, 0, .02);-webkit-transform: translateY(0);transform: translateY(0);}
         .widget-image {height: 310px;overflow: hidden;position: relative;}
         .widget-image > img {min-width: 787px;}
         .widget-image.widget-image-bottom img {position: absolute;left: 0;bottom: 0;}
         .widget-image.widget-image-sm {height: 270px;}
         .widget-image.widget-image-xs {height: 175px;}
         .widget-image > i {position: absolute;right: 30px;bottom: 30px;color: #ffffff;
         font-size: 70px;opacity: .5;}
         .widget-image-content {position: absolute;top: 0;left: 0;right: 0;bottom: 0;padding: 15px 25px;
         background: rgba(0, 0, 0, .65);}
         .widget-content {padding: 15px;}
         .widget-content > a: {padding: 15px;}
         .widget-content.widget-content-mini {padding-top: 7px;padding-bottom: 7px;}
         .widget-content.widget-content-full {padding: 0;}
         .widget-content.widget-content-full-top-bottom {padding-top: 0;padding-bottom: 0;}
         .widget-content .pull-left {margin-right: 20px;}
         .widget-content .pull-right {margin-left: 20px;}
         .widget-heading {margin: 10px 0;}
         .widget-icon {display: inline-block;width: 64px;height: 64px;line-height: 60px;
         margin: 5px;font-size: 28px;text-align: center;border-radius: 50%;
         background: rgba(0, 0, 0, .05);}
         .widget-icon.pull-left {margin: 5px 5px 5px 0;}.widget-icon.pull-right {margin: 5px 0 5px 5px;}
         .widget-icon .gi,.widget-icon .hi,.widget-icon .si,.widget-icon .fi {margin-top: -3px;}
         /* Full Background Image */
         img.full-bg {min-height: 100%;min-width: 1280px;width: 100%;height: auto;
         position: fixed;top: 0;left: 0;}
         img.full-bg.full-bg-bottom {top: auto;bottom: 0;}
         @media screen and (max-width: 1280px) {img.full-bg {left: 50%;margin-left: -640px;}}
         /* Content which contains floats */
         .content-float .pull-left {margin: 0 20px 20px 0;}
         .content-float .pull-right {margin: 0 0 20px 20px;}
         .content-float-hor .pull-left {margin-right: 20px;}
         .content-float-hor .pull-right {margin-left: 20px;}
         .themed-background {background-color: #00aae7 ;}
         .themed-background-info {
         background-color: #5cafde !important;
         }
         .themed-color-dark {color: #454e59 !important;}
         .themed-background-dark {
         background-color: #454e59 !important;
         }
         .breadcrumb {margin:0px !important;}
         .breadcrumb li,.breadcrumb li a{color:#ffffff !important;}
         .text-dark, .text-dark:hover, a.text-dark, a.text-dark:hover, a.text-dark:focus {
         background-color: #232527;
         color:#fff;
         }
         .card {border:0px !important;} 
         .emerald{background-color:#0d416b !important;width:100%;}
         .list-inline {
         margin-left: 0px!important;
         list-style: none;
         }
         .effect:hover{
            top:-5px;
         }
</style>
    </head>
   <?php include '../header.php';?>
    <body>
       <script type="text/javascript">
    $(window).load(function(){
        $('#myModal').modal('show');
		/*   var empLoginID=document.getElementById("empLoginID").value;
        var empPassword=document.getElementById("empPassword").value;
        if(empLoginID!='' && empPassword!=''){
             doSignatureLogin();
        }else{
             $('#myModal1').modal('show');
        }*/
    });
    
    
    
    function enableLoginEnter(e) {
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
            checkLogin($("#loginId").val(),$("#password").val());
            return false;
        }
    }catch(e){
        alert("Error"+e);
    }
};

function doSMPLogin() {
    checkLogin($("#loginId").val(),$("#password").val());
}
function downloadSMPAttachment() {
    window.location="../download/SocialMediaPolicyDownload.php";
}


</script>
  <section id="services" >
        
         <div class="emerald tinted-image">
            <div class="container ">
               <div class="row">
                  <br><br><br>
                  <div class="col-sm-6 text-left">
                     <h1 class="heavy micro">Miracle's Corporate Social Media Policy</h1><br>
                  </div>
                  <div class="col-sm-6 text-right">
                     <ul class="breadcrumb pull-right">
                        <li><a href="../">Home</a></li>
                        <li>Social Media Policy</li>
                     
                     </ul>
                  </div>
                 <br><br>
               </div>
            </div>
           
         
      </section>

        <section class="container">
          
           
            <div class="row">
             <div class="col-sm-12">
                 <h2 class="heavy">Introduction</h2>
                 <h3 class="heavy">Foreword</h3>
                 <p class="methodText">Today's world is glued to their screens and social media has become more accessible than ever! It is reforming the way we work and offering a trend to grab the attention of customers, employees and the world at large. Miracle waves a path of encouragement for employees to actively participate in all online activities and contribute equally to its brand and image. With the increased usage of Social Media by our employees we would like to ensure that we are staying within the corporate policies on social media as well and in return ensure that we can keep our brand image clean.</p>
                  <h3 class="heavy">Miracle's Social Media Presence</h3>
                 <p class="methodText">Social media provides us with a huge opportunity to promote our brand and image to the world. Miracle is proud to have a very large presence and following online which helps us take our message to the entire world. The following are Miracle's official social media channels.
                 <div class="col-sm-12">
                 <ul class="methodText">
                     <li>Youtube - <a href="https://www.youtube.com/c/Team_MSS"><strong>https://www.youtube.com/c/Team_MSS </strong></a></li>
                     <li>Facebook - <a href="https://www.facebook.com/miracle45625"><strong>https://www.facebook.com/miracle45625 </strong></a></li>
                     <li>Twitter - <a href="https://twitter.com/Team_MSS"><strong>https://twitter.com/Team_MSS </strong></a></li>
                     <li>Flickr - <a href="https://www.flickr.com/photos/team_miracle"><strong>https://www.flickr.com/photos/team_miracle </strong></a></li>
                     <li>Google Plus - <a href="https://plus.google.com/+Team_MSS"><strong>https://plus.google.com/+Team_MSS </strong></a></li>
                     <li>Linked In - <a href="https://www.linkedin.com/company/miracle-software-systems-inc"><strong>https://www.linkedin.com/company/miracle-software-systems-inc</strong></a></li>
                 </ul>
                 </div>
                 
                 For any information related to our social media presence and the content created for them, please reach out to <a class="linkText" href="mailto:marketing@miraclesoft.com"><strong>marketing@miraclesoft.com</strong></a>. 
                 </p>
                 <h3 class="heavy">Why Social Media Policies?</h3>
                 <p class="methodText">Miracle Software Systems, Inc. is on a mission to brand, market and recruit across the globe through social medial platforms and blogs. This document includes pretty clear guidelines showcasing about the Do's, Don'ts, and best Practices for participation of employees on any of the above mentioned platforms to ensure that we keep a clean and healthy image of our organization. </p>
                 <p class="methodText">All employees of Miracle's are ambassadors and your actions will reflect the overall brand of the organization. Hence, it is very important that we adhere to the policy document to remain within the standards expected of a Miraclite. </p>
                 <h3 class="heavy">Who should read this?</h3>
                 <p class="methodText">The policy is applicable to everyone who is directly affiliated to Miracle Software Systems which includes all the Executives, Employees, Managers, Interns, and also others whoever don't fall into these categories. This also includes all employees affiliated with any of the registered Miracle companies including child and sister concerns if any.</p>
                 <h3 class="heavy">Compliance with Related Policies / Authorized Statement</h3>
                <p class="methodText">Anxious to share about the excellence of the company in the best way? You are allowed to share them, but they should include a disclaimer message in your account stating as "All the views are of my own", or you should incorporate that your posts have no way relation with the company that you are working for.</p>
                <p class="methodText">"Declaring personal opinions and messages on behalf of the company without authorization will be considered a corporate violation. While you are affiliated to Miracle, you are free to post as per your interests and opinions, but please keep in mind that your affiliation with Miracle will ensure that your views reflect on the brand of the company as well.</p>
                <p class="methodText">Any views and opinions of yours that might reflect yourselves and the organization in a bad light are always good to be avoided. But in case you would like to post something which has a relation to Miracle's brand image, partner companies, customers, (or) related business concerns please note that your actions will reflect upon the organization as a whole. </p>
                </div>
       <hr> 
    </div>           
    <div class="row">
        
        <div class="col-sm-6">
            <img src="<?= AMAZON_URL ?>/images/sm-policy/pic2.jpg" class="img-responsive">
        </div>
         <div class="col-sm-6">
            <img src="<?= AMAZON_URL ?>/images/sm-policy/pic1.jpg" class="img-responsive">
        </div>
      </div>
      <div class="row">
       
        <div class="col-sm-12">
            <h2 class="heavy">Miracle's Brand and Image</h2>
            <h3 class="heavy">Respect and Health</h3>
            <p class="methodText">Miracle's Employees should not post anything that addresses their co-workers, clients, customers, vendors, competitors or business partners which could be found reasonably offensive, such as posting offensive comments, ethnic slurs, discriminatory comments, insults, (or) threatening them. Those instances are considered in-appropriate and these cases will fall under violating Miracle's Social Media Policy, which in certain cases could lead to further legal action.
</p>
            <p class="methodText">It is also against corporate policy to post (or) discuss any business related matters which are associated to team members, clients, business partners, competetors (or) vendors without their written permission. Treat Past and present team members, customers, partners, competitors and everyone in the line of duty with respect.
</p>
        </div> 
        <div class="col-sm-12">
            <p class="methodText"><strong>For Example,</strong></p>
            <img src="<?= AMAZON_URL ?>/images/sm-policy/2.jpg" class="img-responsive">
        </div>
        <div class="col-sm-12">
           <h3 class="heavy">Branding and Messaging</h3>
           <p class="methodText">Employees are the face of the organization. Ensure that whatever you post should be within Miracle's themes and branding. We should always give a great impression of our organization to the viewers who are viewing our posts, documents, videos and presentations which we share in the website and corporate social media channels. 
</p>
           <p class="methodText">We recommend to share, post and like content that is published by the Marketing Team of Miracle through our official Social Media Channels. That way the messaging by Miracle and its team members will remain consistent and uniform across the board. 
</p>
           <p class="methodText">Feel free to share anything that's posted by these channels. If any misrepresentation was posted about Miracle on the Internet, stick with facts and add a comment defending to avoid such unnecessary arguments.
</p>
           <p class="methodText"><strong>For Example,</strong></p>
        </div>
        <div class="col-sm-6">
            <img src="<?= AMAZON_URL ?>/images/sm-policy/pic5.jpg" class="img-responsive">
        </div>
        <div class="col-sm-6">
            <img src="<?= AMAZON_URL ?>/images/sm-policy/pic6.jpg" class="img-responsive">
        </div>
        <div class="col-sm-12">
           <h3 class="heavy">Freedom and Usage</h3>
           <p class="methodText">Miracle has its own branded and official Social Media Accounts for Facebook, Twitter, LinkedIn, Youtube, Vimeo, Google Plus and Flickr. Through these accounts you can share the information to increase the social reach. However, the Social Computing is time consuming and this should not affect the Daily tasks or your primary role. The main aim of the organization is to encourage all the employees to participate on social groups and maintain etiquette on these platforms without disrupting our existing duties. 
</p>
        </div>
        
          <div class="col-sm-12">
            <h2 class="heavy">Legal Policies of Miracle</h2>
            <h3 class="heavy">Confidentiality</h3>
            <p class="methodText">Confidentiality policy restricts employees use of social media and never to disclose the company's confidential information and intellectual property in any manner which includes sharing the details like customer and opportunity names/details, financial details, illegal recordings of internal calls and meetings and any other confidential data that resides within our organization.</p>
            <p class="methodText">Any violation of the confidentiality policy will be considered a serious offense and appropriate action will be taken against the respective team member(s). 
            </p>
            <p class="methodText"><strong>For Example,</strong></p>
        </div> 
        
        <div class="col-sm-6">
            <img src="<?= AMAZON_URL ?>/images/sm-policy/pic3.jpg" class="img-responsive">
        </div>
        <div class="col-sm-6">
            <img src="<?= AMAZON_URL ?>/images/sm-policy/pic4.jpg" class="img-responsive">
        </div>
         <div class="col-sm-12">
            <h3 class="heavy">Copyrights</h3>
            <p class="methodText">Coming to copyrights, every company has its own set of copyrights and Miracle also follows particular copyrights and standards. Anyone who are posting about Miracle (or) writing about Miracle should follow all the copyrights of this company and they should never use their personal themes or standards for sharing the content which is related to Miracle in any social media channel. If you want to share the particular event (or) something related to Miracle just get in contact with Social Media Team of Miracle <a class="linkText" href="mailto:miraclesoft.com"><strong>(marketing@miraclesoft.com)</strong></a>. They will create the required branded material for you to post on social media. </p>
            <p class="methodText">Copyright protected works such as images, content, videos, and source code are often copied from one website to other websites without any authorization of website owner and it falls under infringement liability. Employees who find such type of stuff in the internet can report to the Web Experience Team. So, that they will take the necessary action. 
</p>
        </div> 
        
        <div class="col-sm-12">
            <h2 class="heavy">Best Practices/Violations</h2>
            <h3 class="heavy">Best Practices</h3>
            <div class="col-sm-12">
            <ul style="text-align:justify;" class="methodText">
                <li> <strong>Always respect your audience</strong> - In every situation, use social channels as a respectful tool to share your ideas and information especially, be mindful when dealing with sensitive subjects such as politics and religions</li>
                <li> <strong>Share content smartly</strong> -  If you publish an item professionally, you may help to strengthen the community of Miracle Software Systems, Inc. and make sure what you publish is valuable, helpful, clear and promotes the principles of our company</li>
                <li> Employees are responsible for ensuring that their on-line activities do not interfere with their ability to perform their job, (or) to fulfill commitments to their managers, co-workers or clients</li>
                <li> <strong>Protect your privacy</strong> - Always think twice before posting, and remember that what you share may remain in the public domain for a long time; Make sure that you are protecting your company's privacy and your own privacy too</li>
                <li><strong>Help your friends</strong> - Make sure that you assist your friends learn about using Social Media; Put in the right hands it can be a very useful and powerful tool for positive change</li>
            </ul> 
            </div>
        </div> 
          <div class="col-sm-12">
            <h3 class="heavy">Violations</h3>
            <div class="col-sm-12">
            <ul  style="text-align:justify;" class="methodText">
                <li> The company requests and also strongly encourages their employees to report any violations which are occurred in online social media channels over all the policies mentioned above</li>
                <li> Team 	Miracle will notice and respond to all the reports of violations which are related to on-line social networking and Internet blogs which are violating the policies that come under Miracle's Corporate Social Media Policy</li>
                <li> Violation of Miracle's Social Media policy will be considered serious and this may lead to serious disciplinary actions - The level of discipline may be varied on case by case basis</li>
                <li> Miracle reserves to take legal action where necessary against the employees who are engaged in unlawful conduct</li>
            </ul> 
            </div>
        </div> 
        <div class="col-sm-12">
            <h3 class="heavy">Any Questions/Suggestions?</h3>
            <p class="methodText">Having any queries about posting and sharing online? Want to suggest any changes to the Guidelines?</p>
            <p class="methodText">Please reach out to Marketing Team at <a href="mailto:marketing@miraclesoft.com"><span style="font-weight:bold;">marketing@miraclesoft.com</span></a></p>
        </div>
      </div>
      <div class="row">
          <div class="col-sm-2">
              <hr>
          </div>
          <div class="col-sm-10"></div>
         
      </div>
      <div class="row">
        <div class="col-sm-12">
          
            <button type="button" class="btn btn-primary" onclick="downloadSMPAttachment();">Download PDF</button>
        </div>
    </div>        
             
           
         <!-- Modal box Start -->   
            <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
      
       
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog" style=" position: static;">
        <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="loginModalClosId" style="display: none"><span aria-hidden="true">&times;</span>
                </button>
                 <h3 class="modal-title" id="memberModalLabel"><strong>Employee LogIn</strong> </h3>
                    <hr class="noMarginBottom">
            </div>
            <div class="modal-body">
               <p class="methodText" style="margin-top: -10px;">You must be a Miraclite to gain access to this. Please validate yourself using your Miracle credentials for further access. </p>
               <div class="row">
               <div class=" col-sm-6">
                      <input tabindex="9" class="form-control" required="required" placeholder="LoginId" id="loginId" name="loginId" value="" type="text" onkeydown="return enableLoginEnter(event);"/>
                    <br>
                     <input tabindex="10" class="form-control" required="required" placeholder="Password" name="password" id="password"  value="" type="password" onkeydown="return enableLoginEnter(event);"/>
                    
                  </div>
                  <div class="col-sm-6"></div>
                  </div>
            <hr  class="">
          <div class="row">
                                        <div class="col-sm-12"> 
                                            <div class="alert alert-danger" style="display:none" id="errorMsgDiv">
                                                <button type="button" class="close" onclick="closeErrorMsg()" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <strong><span id="resultMessage">Invalid details!!</span></strong> 
                                            </div>                        
                                        </div>
                                    </div>
            <div class=" row ">
              
                    <div class="col-sm-4"> <!--<button class="btn btn-primary col-sm-12 noMarginBottom" type="button" data-dismiss="modal">Log In</button>-->
                    
                        <input type="button" value="Login" tabindex="7" class="btn btn-primary col-sm-12" name="btnSubmit1" id="btnSubmit1" onclick="doSMPLogin();"/></div>
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4"></div>
               
             
            </div>
            </div>
        </div>
    </div>
</div>
        </div>
        <div class="col-sm-1"></div>
     
      </div>
            
            <!-- Modal box end -->
         <br>
        </section>
        
    </body>
    <?php include '../footer.php';?>
</html>
