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
	<link rel="stylesheet" href="css/playerprofile.css" type="text/css">
	<link rel="stylesheet" href="menu.css" type="text/css">
		
	<title>Gallery</title>
	<script>
		function getProduct(ev){

			var proQuery = document.getElementById('search').value.trim();

			inject('gallerydisplay', 'images/database/gallery-view.php?shop=' + proQuery);
		}



		var itemOpen = false;
		var charOpen = false;


		
	</script>
	<script src="ajax.js"></script>
	<style>
		@font-face{
			font-family: SAOfont;
		    src: url(fonts/SAOfont.ttf);
		    font-style: normal;
		    font-weight:200;
			}
	body{
			font-family: SAOfont;
			color: black;
			font-size: 30px;
			background-image: url(images/background/gallery.jpg);
			background-size: 100% cover;

		}

		ul{
			color: white;
			list-style: none;
		}
		ul li:hover{
			cursor: pointer;
			
		}
	#kein-background{
		background-image: url(images/background/klein-gallery.png);
		background-size: 100% 100%;
		height: 100%;
		width: 100%;
		position: absolute;
		top: 0px;
		left: 0px;
	}
	.top_menu li{
		width: 100;
		margin-left: 30px;
		top: 0px;
		left:;
		float: left;
		text-align: center;
	}
	#styles{
		position: absolute;
		top: 0px;
		margin-left: 10%;
	}
	.top_menu {
		position: absolute;
		top: 0px;
		left:100px;
		float: left;
	}
	#Iphone{
		left: 0px;
	}
	#Desktop{
		left: 200px;
	}
	#Android{
		left: 400px;
	}
	#Icons{
		left: 600px;
	}
	#Charactures {
		position: absolute;
		margin-left: 5%;
		margin-top:  100px;
	}
	.left_menu li{
		
		margin-top:  20px;
	}
	#gallerydisplay{
		position: absolute;
		border-style: solid;
		border-width: 2px;
		border-color: #32F6FF;
		background-color: rgba(255,255,255,0.3);
		width:900px;
		height:500px;
		top: 80px;
		left: 120px;
		margin-left:15%; 
	}
	#window{
		position: absolute;
		transform: translateY(3px);
		top: 50px;
	}
	#search{
		top: 40px;
		left: 800px;
	}

	</style>
</head>
<body >
	<div id="kein-background"></div>
		<div id="userID" class="hp">
		<div id="backside" class="hp">
			<svg height="50" width="400" class="contact" id="sg">
				<polygon points="0,0,25,0,25,50,0,50" style="fill:#C3CBE4;stroke:#C3CBE4;stroke-width:0;opacity: 0.7" />
				<polygon points="27,0,400,0,400,30,230,30,227,50,27,50" style="fill:#C3CBE4;stroke:#C3CBE4;stroke-width:0;opacity: 0.7" /> 
				<polygon points="100,10,380,10,380,20,225,20,222,40,100,40" style="fill:#2BE622;stroke:#2BE622;stroke-width:0;" /> 
			</svg>
		</div>
		<div id="clock" class="hp"></div>
		<div id="date" class="hp"></div>
		<div id="username" class="hp">
				<?php

					if($_SESSION['loggedin'] == true){
				?>

				<?php print($_SESSION['username'])?>


				<?php
					}else{
				?>

				username

				<?php
					}
				?></div>
		<div id="health" class="hp"></div>
		<a href="loginin.php"><input type="button" id="addID" value="+" name="" class="hp"/></a>
	</div>
	<div id="window">
	<ul id="styles" class="top_menu" >
		<li id="Iphone" class="top_menu">Iphone&nbspWallpapers</li>
		<li id="Desktop" class="top_menu">Desktop&nbspWallpapers</li>
		<li id="Android" class="top_menu">Android&nbspWallpapers</li>
		<li id="Icons" class="top_menu">Icons</li>

	</ul>
	<ul id="Charactures" class="left_menu" >
		<li>Kirito</li>
		<li>Asuna</li>
		<li>Klien</li>
		<li>Agil</li>
	</ul>
	<div id="gallerydisplay"></div>
	<input id="search" type="text" name="search" placeholder="Search.." class="top_menu" onkeyup="getProduct(event)"/>
	</div>
	<ul id="navmenu" onclick="openMenu()">
		<li><div id="navmenuicon" ></div>
			<ul>
				<a href="index2.php"><li id="home"></li></a>
				<a href="shop.php"><li id="shop"></li></a>
				<a href="message.php"><li id="message"></li></a>
				<a href="gallery.php"><li id="gallery"></li></a>
			</ul>
		</li>
	</ul>
<script type="text/javascript">
	var open=false;
	function openMenu(){
		if(open==false){
			document.getElementById('home').style.display = 'block';
			document.getElementById('shop').style.display = 'block';
			document.getElementById('message').style.display = 'block';
			document.getElementById('gallery').style.display = 'block';
			open=true;
		}else
		{
			document.getElementById('home').style.display = 'none';
			document.getElementById('shop').style.display = 'none';
			document.getElementById('message').style.display = 'none';
			document.getElementById('gallery').style.display = 'none';
			open=false;
		}
	}
</script>

</body>

</html>