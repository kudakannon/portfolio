
<?php
	session_start();
?>
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
		var cl = 0;
		var rightPass = false;
		var fsnIN = false;
		var lsnIN = false;
		var usnIN = false;
		var emIN = false;
		var fsn = document.getElementById('firstnametxt');
		// var lsn = document.getElementById();
		// var usn = document.getElementById();
		// var em = document.getElementById();
		// var usn = document.getElementById();
		// var pas = document.getElementById();
		var emp = "";
		function checkPassword(el){
			var checking = el.value;
			var pass = document.getElementById('passwordtxt').value;

			if(checking == pass){
				document.getElementById('entrepassword').style.display = 'none';
				;
				rightPass = true;
			}
			else{
				document.getElementById('entrepassword').style.display = 'inline';
				

			}
		}
		function checkfirst(){
			if(fsn.value == ""){

				document.getElementById('entfirstname').style.display = 'inline';
			}
		else {
			fsnIN = true;
			document.getElementById('entfirstname').style.display = 'none';
		}
	}
	
			function tick(){
			cl = cl+ 1;
			console.log(cl);
			if(rightPass == true){
				console.log('clicked')
				document.getElementById('butt').innerHTML.value = 'thie';
				
			}
			else{
				document.getElementById('entpassword').style.display = 'inline';
				document.getElementById('entrepassword').style.display = 'inline';
			}
		}

	</script>
<style>

	@font-face{
		font-family: SAOfont;
	    src: url(fonts/SAOfont.ttf);
	    font-style: normal;
	    font-weight:200;
		}

	body{
		font-family: SAOfont;
		font-size: 20px;
		background-image: url(images/hexagon.png);
	}

	#backDrop{
		margin-bottom: 10px;
		margin-top: 10px;
		margin-left: 300px;
		margin-right: 25%;
		height:600px ;
		width: 600px;
		background-color: rgba(255,255,255,0.5);
		border-radius: 50px;
	}
	#firstnametxt{
		top:100px;
		left:580px;
		position: absolute;
		
	}
	#lastnametxt{
		top:170px;
		left:580px;
		position: absolute;	
	}
	#usernametxt{
		top:240px;
		left:580px;
		position: absolute;
	}
	#emailtxt{
		top:310px;
		left:580px;
		position: absolute;
	}
	#passwordtxt{
		top:380px;
		left:580px;
		position: absolute;	
	}
	#repasswordtxt{
		top:450px;
		left:580px;
		position: absolute;
	}
	#firstname{
			top:100px;
			left:475px;
			position: absolute
	}
	#lastname{
		top:170px;
		left:475px;
		position: absolute
	}
	#username{
		top:240px;
		left:475px;
		position: absolute
	}
	#email{
		top:310px;
		left:495px;
		position: absolute
	}
	#password{
		top:380px;
		left:475px;
		position: absolute
	}
	#repassword{
		top:450px;
		left:420px;
		position: absolute
	}
	#butt{
		width: 200px;
		height: 25px;
		position: absolute;
		left: 500px;
		top: 500px;
		color: green;
		background-color: rgb(0,255,0);
		border-color: rgb(0,255,0);
		border-radius: 10px;
		font-family: SAOfont;
		font-size: 20px;
	}
	#entfirstname{
		top:120px;
		left:580px;
		position: absolute;
		font-size: 15px;
		color:red;
		
	}
	#entlastname{
		top:190px;
		left:580px;
		position: absolute;
		font-size: 15px;
		color:red;	
	}
	#entusername{
		top:260px;
		left:580px;
		position: absolute;
		font-size: 15px;
		color:red;
	}
	#entemail{
		top:330px;
		left:580px;
		position: absolute;
		font-size: 15px;
		color:red;
	}
	#entpassword{
		top:400px;
		left:580px;
		position: absolute;	
		font-size: 15px;
		color:red;
	}
	#entrepassword{
		top:470px;
		left:580px;
		position: absolute;
		font-size: 15px;
		color:red;
	}
	.needed{
		display: none;
	}
</style>
</head>
<body>

	<div id="backDrop"></div>
	<div id="firstname">First name</div>
	<div id="lastname">Last name</div>
	<div id="username">Username</div>
	<div id="email">Email</div>
	<div id="password">Password</div>
	<div id="repassword">Re-type Password</div>
	<form action="profile-entry.php" method="post"> 
	<input type="text" required  id="firstnametxt" value="" placeholder="First name" name="firstname"  onchange="checkfirst(this)"/>
	<input type="text" required  id="lastnametxt" value="" placeholder="Last name" name="lastname"  />
	<input type="text"  required  id="usernametxt" value="" placeholder="Username" name="username"  />
	<input type="email" required  id="emailtxt" value="" placeholder="Email" name="email" />
	<input type="text" required  id="passwordtxt" value="" placeholder="Password" name="password"  />
	<input type="text" required   id="repasswordtxt" value="" placeholder="Re-type Password" onchange="checkPassword(this)"/>
	<input  type="Submit" name="" id="butt" value="Submit"   />
	</form>
	<div id="entfirstname" class="needed">PLEASE ENTER YOUR FRIST NAME</div>
	<div id="entlastname" class="needed">PLEASE ENTER YOUR LAST NAME</div>
	<div id="entusername" class="needed">USER NAME IS TAKEN OR INVALID</div>
	<div id="entemail" class="needed">PLEASE ENTER A VAILD EMAIL</div>
	<div id="entpassword" class="needed">PLEASE ENTER A PASSWORD</div>
	<div id="entrepassword" class="needed">PASSWORD DOES NOT MATCH</div>

	
</body>

</html>