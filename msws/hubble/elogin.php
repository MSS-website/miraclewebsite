<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Login | Miracle</title>   
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="application/javascript">
        $(document).ready(function(){
            $("#fPwdForm").hide();
  $("#pwdForget").click(function(){
    $("#loginForm").slideUp("slow"); 
    $("#fPwdForm").slideDown("slow");
  });
$("#pwdRemember").click(function(){
    $("#loginForm").slideDown("slow"); 
    $("#fPwdForm").slideUp("slow");
  });
});
    </script>
    <script type="text/JavaScript" src="www.miraclesoft.com/Hubble/includes/javascripts/AppConstants.js"></script>
<script  type="text/javascript" >
    function performAction(action,element) {
        url = CONTENXT_PATH+action+"?"+element.id+"="+element.value;
        document.location = url;
    }
</script>
</head>

<body>

  <html lang="en-US">
<head>

	<meta charset="utf-8">

	<title>Login | Miracle</title>
	
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,700">
    <link rel="stylesheet" href="hubble/css/">

	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    <link rel="shortcut icon" href="/images/favicon.ico">
</head>

<body>
    <div id="header">
        <a href="http://www.miraclesoft.com">
            <img class="logo menuImage" src="logo.png">
        </a>
        <a href="index.php">
            <img class="home menuImage" src="home.png">
        </a>
    </div>
    <div id="mainHeading"><center>Welcome to Hubble!!</center></div>
    <div id="subHeading"><center>Login to continue</center></div>
    <center><img src="Login2.png"/></center>
    <div class="login" id="loginForm">
        
         <form id="userLoginForm" name="userLoginForm" onsubmit="return checkUserLoginForm();" action="http://www.miraclesoft.com/Hubble/general/loginCheck.action" method="post">
            <fieldset class="clearfix">
                <p><span class="fontawesome-user"></span><input type="text" name="userId" value="" tabindex="1" id="userId" class="inputBox" onkeypress="return handleEnter(this,event);" onchange="userIdValidate(document.userLoginForm.userId.value);"/>
                <p><span class="fontawesome-lock"></span><input type="password" name="password" tabindex="2" id="password" class="inputBox" onchange="passwordValidate(document.userLoginForm.password.value);"/>
                <p> <input type="submit" id="userLoginForm_0" value="Login" class="buttonBg" tabindex="3"/></p>
                
            </fieldset>
        </form>
        <p><a href="#" id="register">Register Here</a><span class="fontawesome-arrow-right"></span>&nbsp;&nbsp;<a href="#" id="pwdForget">Forgot Password</a><span class="fontawesome-arrow-right"></span></p>    
        
    </div> <!-- end login -->
    
    <div class="login" id="fPwdForm">
    
    
 <form id="userLoginForm" name="userLoginForm" onsubmit="return checkUserLoginForm();" action="http://www.miraclesoft.com/Hubble/general/login.action" method="post">
            <fieldset class="clearfix">
                <p><span class="fontawesome-user"></i> icon-user<input type="text" value="Username" onBlur="if(this.value == '') this.value = 'Username'" onFocus="if(this.value == 'Username') this.value = ''" required></p> 
                <p><input type="submit" id="password" value="Change Password"></p>
            </fieldset>
        </form>
        <p><a href="#" id="userLoginForm_0">Register Here</a><span class="fontawesome-arrow-right"></span>&nbsp;&nbsp;<a href="#" id="pwdRemember">Login Here</a><span class="fontawesome-arrow-right"></span></p>   
    </div> <!-- end login -->

</body>
</html>

</body>

</html>