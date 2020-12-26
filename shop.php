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
	<link rel="stylesheet" href="menu.css" type="text/css">
	
		
	<title>Shop</title>
	<script>
	function getProduct(ev){

			var proQuery = document.getElementById('search').value.trim();

			inject('shopdisplay', 'images/shop/shop-search.php?shop=' + proQuery);
		}



		var itemOpen = false;
		var charOpen = false;


		function subheading(value){
			if (value==1){
				if (itemOpen==false) {
					document.getElementById('Dresses').style.display = 'block';
					document.getElementById('shirts').style.display = 'block';
					document.getElementById('Pants').style.display = 'block';
					document.getElementById('Jumpers').style.display = 'block';
					document.getElementById('Dresses').style.display = 'block';
					itemOpen=true;
				}
				else if (itemOpen==true) {
					document.getElementById('Dresses').style.display = 'none';
					document.getElementById('shirts').style.display = 'none';
					document.getElementById('Pants').style.display = 'none';
					document.getElementById('Jumpers').style.display = 'none';
					document.getElementById('Dresses').style.display = 'none';
					itemOpen=false;
				}
		}
		if (value==2){
				if (charOpen==false) {
					document.getElementById('charkirito').style.display = 'block';
					document.getElementById('charasuna').style.display = 'block'
					charOpen=true;	
				}
				else if (charOpen==true) {
					document.getElementById('charkirito').style.display = 'none';
					document.getElementById('charasuna').style.display = 'none';
					charOpen=false;
				}
		}
	}
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
			font-size: 30px;
			color: white;
			background-image: url(images/background/agil-shop.png);
		}

ul {
	list-style: none;

}
	ul li:hover{
			cursor: pointer;
			
		}
		ul li ul li:hover{
			cursor: pointer;
			
		}
.items, .charactures : hover{
	cursor: pointer;
}
#topMenu ul li{
	float: left;
	margin-left: 10px;
	margin-right: 10px;
}
#topMenu{
	position: absolute;
	left: 150px;
	top: 30px;
 }
#leftMenu{
	position: absolute;
	left: -30px;
	top: 100px;
	height: 600px;
}
#shopdisplay{
	position: absolute;
	border-style: solid;
	border-color: #32F6FF;
	border-width: 2px;
	top: 100px;
	left:160px;
	width: 50%;
	height:600px;
	background-color: rgba(255,255,255,0.4);
	overflow: scroll;
}
.minMenu{
	background-color: rgba(255,255,255,0);
	color: white;
	font-size: 30px;
	border-style: none;
}
#addID{
	position: absolute;
	left: 0px;
	top:25px;
}
#username{
	position: absolute;
	top:20px;
	left: 50px;
}
#Dresses: hover{
cursor: pointer;
color: green;
}

	</style>

</head>
<body>
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
	<div id="topMenu">
		<ul>	
			<li>Children</li>
			<li>Teens</li>
			<li>Men</li>
			<li>Women</li>
			<li>Acessories</li>
			<li><input type="text" name="search" id="search" placeholder="Search.." onkeyup="getProduct(event)"/></li>
		</ul>
		
	</div>
	<div id="leftMenu">
		<ul>	
			<li>Item <input type="button" name="" value="-" id="bItem" class="minMenu" onclick="subheading(1)">
				<ul>	
					<li class="items" id="Dresses">Dresses</li>
					<li class="items" id="shirts">shirts</li>
					<li class="items" id="Jumpers">Jumpers</li>
					<li class="items" id="Pants">Pants</li>
					<li class="items" id="Underware">Underware</li>
					<li class="items" id="Jewlery">Jewlery</li>
				</ul>
			</li>
		
			<li>Characture <input type="button" name="" value="-" id="bCharacture" class="minMenu" onclick="subheading(2)"> 
				<ul>	
					<li class="characture" id="charkirito">Kirito</li>
					<li class="characture" id="charasuna">Asuna</li>
				</ul>
			</li>

		</ul>
	</div>
	<div id="shopdisplay"></div>

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