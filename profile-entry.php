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
	<?php
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	
		//connect to the database
	$con=mysqli_connect("45.40.164.97","qibtdev01","dev01@DATABASE","qibtdev01");
	//runquery
	$resultun = $con->query("select * from qibtdev01.HORSD_NewProfile where Username ='$username'");
	$unnum = mysqli_num_rows($resultun);

	if($unnum == 0){
		$con->query("insert into qibtdev01.HORSD_NewProfile (Firstname, Lastname, Username, Password, Email) values('$firstname', '$lastname', '$username' , '$password' , '$email');");
		print("Account created successfully.");
		header('Location: loginin.php');
	}
	else{
		print("username already in use");
	}



	?>

	
</body>

</html>