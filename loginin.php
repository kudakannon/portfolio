
<!doctype html>

<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="mobile-web-app-capable" content="yes" />

	<link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon">
	<link rel="icon" href="favicon.ico" type="image/vnd.microsoft.icon">
	<link rel="apple-touch-icon" href="favicon.ico"/>
	<link rel="apple-touch-icon-precomposed" href="favicon.ico"/>
	
		
	<title>Stephen Horsburgh</title>
	<script>
	</script>
	<style>
		@font-face{
		font-family: SAOfont;
	    src: url(fonts/SAOfont.ttf);
	    font-style: normal;
	    font-weight:200;
		}
		body{
			background-image: url(images/hexagon.png);
		}
		#loginscreen{
			background-color: rgba(255,255,255,0.4);
			height:500px;
			width: 500px;
			top: 100px;
			left: 420px;
			position: absolute;
			border-radius: 50px;
		}
		.loginBox{
			color: black;
			height: 30px;
			width:300px;
			background-color: white;
			border-radius: 10px;
		}
		#username{
			top:300px;
			left:550px;
			position: absolute
		}
		#password{
			top:350px;
			left:550px;
			position: absolute
		}
		#loginbutton{
			background-color: green;
			border-color: green;
			height: 30px;
			width:300px;
			border-radius: 10px;
			top:440px;
			left:550px;
			position: absolute
		}
		#newpassword{
			position: absolute;
			color:blue;
			left:610px;
			top:395px;
			font-family: SAOfont;
			font-size: 23px;
		}
		#newaccount{
			position: absolute;
			color:blue;
			left:610px;
			top:470px;
			font-family: SAOfont;
			font-size: 23px;
		}
		#usernametxt{
			font-family: SAOfont;
			top:310px;
			left:470px;
			position: absolute;
			font-size:20px;

		}
		#passwordtxt{
			font-family: SAOfont;
			top:360px;
			left:470px;
			position: absolute;
			font-size:20px;
		}
		@media screen and (min-device-width: 700px) and (max-device-width: 1024px) and (orientation:portrait){
			#loginscreen{
			background-color: rgba(255,255,255,0.4);
			height:500px;
			width: 500px;
			top: 400px;
			left: 220px;
			position: absolute;
			border-radius: 50px;
		}
		.loginBox{
			color: black;
			height: 30px;
			width:300px;
			background-color: white;
			border-radius: 10px;
		}
		#username{
			top:600px;
			left:350px;
			position: absolute
		}
		#password{
			top:650px;
			left:350px;
			position: absolute
		}
		#loginbutton{
			background-color: green;
			border-color: green;
			height: 30px;
			width:300px;
			border-radius: 10px;
			top:740px;
			left:350px;
			position: absolute
		}
		#newpassword{
			position: absolute;
			color:blue;
			left:410px;
			top:695px;
			font-family: SAOfont;
			font-size: 23px;
		}
		#newaccount{
			position: absolute;
			color:blue;
			left:410px;
			top:770px;
			font-family: SAOfont;
			font-size: 23px;
		}
		#usernametxt{
			font-family: SAOfont;
			top:610px;
			left:270px;
			position: absolute;
			font-size:20px;

		}
		#passwordtxt{
			font-family: SAOfont;
			top:660px;
			left:270px;
			position: absolute;
			font-size:20px;
		}
		}
				@media screen and (min-device-width: 320px) and (max-device-width: 700px) and (orientation:portrait){
			#loginscreen{
			background-color: rgba(255,255,255,0.4);
			height:200px;
			width: 345px;
			top: 100px;
			left: 20px;
			position: absolute;
			border-radius: 50px;
		}
		.loginBox{
			color: black;
			height: 30px;
			width:100px;
			background-color: white;
			border-radius: 10px;
		}
		#username{
			top:150px;
			left:150px;
			position: absolute
		}
		#password{
			top:200px;
			left:150px;
			position: absolute
		}
		#loginbutton{
			background-color: green;
			border-color: green;
			height: 30px;
			width:100px;
			border-radius: 10px;
			top:250px;
			left:150px;
			position: absolute
		}
		#newpassword{
			position: absolute;
			color:blue;
			left:170px;
			top:235px;
			font-family: SAOfont;
			font-size: 10px;
		}
		#newaccount{
			position: absolute;
			color:blue;
			left:170px;
			top:280px;
			font-family: SAOfont;
			font-size: 10px;
		}
		#usernametxt{
			font-family: SAOfont;
			top:150px;
			left:70px;
			position: absolute;
			font-size:20px;

		}
		#passwordtxt{
			font-family: SAOfont;
			top:210px;
			left:70px;
			position: absolute;
			font-size:20px;
		}
		}
	</style>
</head>
<body>
	<?php




	?>
	<form action="login.php" method="post">
	<div id="loginscreen"></div>
		<div id="usernametxt">User name:</div>
		<div id="passwordtxt">Password:</div>
		<input type="text" name="username" class="loginBox" id="username" value="" />
		<input type="text" name="password" class="loginBox" id="password" value="" />
		<input type="submit" name="" class="loginbutton" id="loginbutton" value="Log In" />
		<a href="" id="newpassword">forgot your password?</a>
		<a href="new-account.php" id="newaccount">create a new account</a>
	</form>
</body>

</html>