
<?php
	session_start();

?><!doctype html>

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

	</style>
</head>
<body onload>
	<?php
	$username = $_POST['username'];
	$password = $_POST['password'];
	$con=mysqli_connect("45.40.164.97","qibtdev01","dev01@DATABASE","qibtdev01");
	//runquery
	$resultun = $con->query("select username from qibtdev01.HORSD_NewProfile where Username = '$username' and Password = '$password'");
	$unnum = mysqli_num_rows($resultun);

	if($unnum==1){
		print("you are logged in.");
		$_SESSION['username'] = $username;
		$_SESSION['loggedin'] = true;
		header('Location: index2.php');
	}
	else{
		print("username or password incorrect.");
		$_SESSION['loggedin'] = false;
		header('Location: loginin.php');
	}



	?>

	
</body>

</html>