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

	</style>
</head>
<body>
<?php

	$search = $_POST['search'];


	//connect to db
	$con=mysqli_connect("45.40.164.97","qibtdev01","dev01@DATABASE","qibtdev01");

	//run query
	$result = $con->query("select * from qibtdev01.HORSD1802_shops where title like '%$search%'");
	$num = mysqli_num_rows($result);
	

	if($num == 0){
		print("No matches found.");
	}else{
		for($i = 0; $i < $num; $i++){
			$row = $result->fetch_assoc();
			
			//get columns for the row, e.g
			$title = $row['title'];
			$item = $row['item'];
			$price = $row['price'];
			$description = $row['description'];

			//print the results
?>
	<p>
		<img src="<?php "$item" ?>"
 alt="" 	></p>
	<p>
		Title: <?php print("$title"); ?>
	</p>
	<p>
		Price: <?php print("$price"); ?>
	</p>
	<p>
		Description: <?php print("$description"); ?>
	</p>
	
	<hr />
<?php
		}
	}
?>
	
</body>

</html>