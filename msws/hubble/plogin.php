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
</head>

<body>

  <html lang="en-US">
<head>

	<meta charset="utf-8">

	<title>Login | Miracle</title>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,700">
    <link rel="stylesheet" href="hubble/css/">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,700">

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
    <center><img src="Login3.png"/></center>
    <div class="login" id="loginForm">
        
        <form action="javascript:void(0);" method="get">

            <fieldset class="clearfix">

                <p><span class="fontawesome-user"></span><input type="text" value="Username" onBlur="if(this.value == '') this.value = 'Username'" onFocus="if(this.value == 'Username') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
                <p><span class="fontawesome-lock"></span><input type="password"  value="Password" onBlur="if(this.value == '') this.value = 'Password'" onFocus="if(this.value == 'Password') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
                <p><input type="submit" id="lSubmit" value="Sign In"></p>
                
            </fieldset>
        </form>
        <p><a href="#" id="register">Register Here</a><span class="fontawesome-arrow-right"></span>&nbsp;&nbsp;<a href="#" id="pwdForget">Forgot Password</a><span class="fontawesome-arrow-right"></span></p>    
        
    </div> <!-- end login -->
    
    <div class="login" id="fPwdForm">
        <form action="javascript:void(0);" method="get">
            <fieldset class="clearfix">
                <p><span class="fontawesome-user"></span><input type="text" value="Username" onBlur="if(this.value == '') this.value = 'Username'" onFocus="if(this.value == 'Username') this.value = ''" required></p> 
                <p><input type="submit" value="Change Password"></p>
            </fieldset>
        </form>
        <p><a href="#" id="register">Register Here</a><span class="fontawesome-arrow-right"></span>&nbsp;&nbsp;<a href="#" id="pwdRemember">Login Here</a><span class="fontawesome-arrow-right"></span></p>   
    </div> <!-- end login -->

</body>
</html>

</body>

</html>