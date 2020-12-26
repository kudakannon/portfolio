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
	
		
	<title>Sword Art Online || SAO</title>
	<script>
		var left0 = 0;
		var nx0= .1;
		var left1 = 400;
		var nx1= .2;
		var left2 = 300;
		var nx2= .3;
		var left3 = 1000;
		var nx3= .4;
		var left4 = 200;
		var nx4= .5
		var left5 = 700;
		var nx5= .6;
		var left6 = 500;
		var nx6= .7;
		var left7 = 600;
		var nx7= .8;
		var left8 = 0;
		var nx8= .9;
		var left9 = 200;
		var nx9= 1.0;
		var left10 = 800;
		var nx10= 1.1;
		var screenWidth = screen.width;
	function aniClouds(){
		t = setInterval(function(){
				left0 = left0 + nx0;
				left1 = left1 + nx1;
				left2 = left2 + nx2;
				left3 = left3 + nx3;
				left4 = left4 + nx4;
				left5 = left5 + nx5;
				left6 = left6 + nx6;
				left7 = left7 + nx7;
				left8 = left8 + nx8;
				left9 = left9 + nx9;
				left10 = left10 + nx10;
				document.getElementById('cloud0').style.left = left0 + 'px';
				document.getElementById('cloud1').style.left = left1 + 'px';
				document.getElementById('cloud2').style.left = left2 + 'px';
				document.getElementById('cloud3').style.left = left3 + 'px';
				document.getElementById('cloud4').style.left = left4 + 'px';
				document.getElementById('cloud5').style.left = left5 + 'px';
				document.getElementById('cloud6').style.left = left6 + 'px';
				document.getElementById('cloud7').style.left = left7 + 'px';
				document.getElementById('cloud8').style.left = left8 + 'px';
				document.getElementById('cloud9').style.left = left9 + 'px';
				document.getElementById('cloud10').style.left = left10 + 'px';



				if( left0 > screenWidth){
				left0 = -800;
				}
				if( left1 > screenWidth){
				left1 = -800;
				}
				if( left2 > screenWidth){
				left2 = -800;
				}
				if( left3 > screenWidth){
				left3 = -800;
				}
				if( left4 > screenWidth){
				left4 = -800;
				}
				if( left5 > screenWidth){
				left5 = -800;
				}
				if( left6 > screenWidth){
				left6 = -800;
				}
				if( left7 > screenWidth){
				left7 = -800;
				}
				if( left8 > screenWidth){
				left8 = -800;
				}
				if( left9 > screenWidth){
				left9 = -800;
				}
				if( left0 > screenWidth){
				left0 = -800;
				}
				if( left10 > screenWidth){
				left10 = -800;
				}						
			}, 10);
		}
	
	var w = 500;

	function zoomin(){
		var t = document.getElementById('parrallex').scrollTop;
			var tr = document.getElementById('trailer');
		var isPlaying = false;
		var h = screenWidth / 2;
		var f = w + (t*2);
		var x = f/2;
		var o = 1-(t/1000);
		var cl = h - x;

		document.getElementById('castle').style.width = f + 'px';
		document.getElementById('castle').style.left = cl +'px';
		document.getElementById('cloud0').style.width = f + 'px';
		document.getElementById('cloud1').style.width = f + 'px';
		document.getElementById('cloud2').style.width = f + 'px';
		document.getElementById('cloud3').style.width = f + 'px';
		document.getElementById('cloud4').style.width = f + 'px';
		document.getElementById('cloud5').style.width = f + 'px';
		document.getElementById('cloud6').style.width = f + 'px';
		document.getElementById('cloud7').style.width = f + 'px';
		document.getElementById('cloud8').style.width = f + 'px';
		document.getElementById('cloud9').style.width = f + 'px';
		document.getElementById('cloud10').style.width = f + 'px';
		document.getElementById('cloud5').style.top = f + 'px';
		document.getElementById('cloud6').style.top = f + 'px';
		document.getElementById('cloud7').style.top = f + 'px';
		document.getElementById('cloud8').style.top = f + 'px';
		document.getElementById('cloud9').style.top = f + 'px';
		document.getElementById('cloud10').style.top = f + 'px';
		 document.getElementById('parrallex').style.opacity = o;
		console.log(t);
		if (t>= 500){
		document.getElementById('parrallex').style.display ='none';
		}
		//  if (t>= 300){
		// 	const playPromise = tr.play();
		// 	if (playPromise !== null){
		// 		playPromise.catch(() => {tr.play();});
		// 	}
		// }
		 if (t >=300){
		 	// if(!isPlaying){
			 // 	var tw = document.getElementById('trailer-wrapper');

			 // 	tw.innerHTML = '<video id ="trailer" controls autoplay><source  src="videos/sword-art-online-official-trailer.mp4" type="video/mp4" /></video>';
			 // 	isPlaying = true;
		 	// }
		 }
		// console.log(f);
		// document.getElementById("scrolling").innerHTML = x += 1;
		// console.log("yup");
	}

	function exit(event){
		var y = event.deltaY;
		var sy = 0;
		if (y>0){
			sy+=1;
		}
		else if (y<0){
			sy-=1;
		}
		else if(y==0){
			sy+= 0;
		}
		console.log(sy)
		if(sy<0){
		document.getElementById('parrallex').style.display ='inline';
		}
	}


	
	function closechange(){
		document.getElementById('close').style.backgroundImage = 'url("images/icons/close-hover.png")';
	}
	function done(){
		document.getElementById('close').style.backgroundImage = 'url("images/icons/close.png")';
		document.getElementById('content').style.animationName = "fade";
		document.getElementById('content').style.animationFillMode = "forwards";
		document.getElementById('content').style.animationDuration = "1s";
		document.getElementById('close').style.display = "none";
		document.getElementById('kirito').style.display = "inline";
		document.getElementById('asuna').style.display = "inline";
		document.getElementById('klein').style.display = "inline";
		document.getElementById('agil').style.display = "inline";
		document.getElementById('silica').style.display = "inline";
		document.getElementById('textbox').style.display = "inline";
		console.log('release');
	}

function kiritohelp(){
	document.getElementById('textbox').style.left = "10%";
	document.getElementById('textbox').style.display = "inline";
}
function asunahelp(){
	document.getElementById('textbox').style.left = "30%";
	document.getElementById('textbox').style.display = "inline";
}
function kleinhelp(){
	document.getElementById('textbox').style.left = "50%";
	document.getElementById('textbox').style.display = "inline";
}
function agilhelp(){
	document.getElementById('textbox').style.left = "70%";
	document.getElementById('textbox').style.display = "inline";
}
function silicahelp(){
	document.getElementById('textbox').style.left = "90%";
}

function closed(){
		document.getElementById('textbox').style.display = "none";
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
		color:white;		
		overflow-x: hidden;
		
	}
	h1{
		font-family: SAOfont;
		font-size: 65px;
		color: white;
		position: absolute;
		
		left:25%;
	}
	#descript{
		font-family: SAOfont;
		font-size: 25px;
		color: white;
		position: absolute;
		top: 100px;
		left:30%;
	}
	#parrallex{
		background-image: url('sky.jpg');
		background-repeat: no-repeat;
		background-size: cover;
		height: 		130% ;
		width:			120%;
		overflow: 		auto;
		left:			-10%;
		top: 			-5%;
		position:		absolute;
		opacity: 1;
		z-index: 1;
		/*	overflow-y: hidden;*/
		overflow-x: hidden;		
	}

	#castle{
		width: 500px;
		position: absolute;
		left: 27%;
		top:5rem;
		transform: translateZ(0px);
		

	}
	.clouds{
		
		height: 30%;
		width: 500px;
		position: absolute;
		left: 0%;
		top:70%;
	}
	#cloud0{

		left:0%;
	}
	#cloud1{
		left:0%;
		top: 25%
	}
	#cloud2{
		left:20%;
		top:50%;
	}
	#cloud3{

		left:30%;
	}
	#cloud4{
		left:40%;
		top:0%;
	}
	#cloud5{
		left:60%;
		top:75%;
	}
	#cloud6{
		left:0%;
		top:80%;
	}
	#cloud7{
		left:10%;
		top: 80%;
	}
	#cloud8{
		left:20%;
		top:80%;
	}
	#cloud9{
		left:30%;
		top:20%;
	}
	#cloud10{
		left:60%;
		top:60%;	
	}
	#stretcher{
		font-family: SAOfont;
		font-size: 25px;
		color: white;
		position: absolute;
		top: 10000000px;
		left:30%;
	}

	#backdrop{
		top: 0px;
		left: 0px;
		background-image: url("images/background/town-of-begining.png");
		background-size: 100% 100%;
		position: fixed;
		height: 100%;
		width: 100%;
	}
	#welcome{
		color: #77727A;
		font-size: 50px;
		top:-5px;
		width:1000px;
		transform: translateX(-47%);
		
	}
	#messagebox{
		background-image: url('images/messagebox.png');
		background-size: 100% 100%;
		height: 500px;
		width: 1000px;
		transform: translateX(-50%);

	}
	#char{
		background-image: url('images/kayaba_1.png');
		background-size: 100% 100%;
		position: absolute;
		height: 50%;
		width: 30%;
		top: 50%;
		left:0%;
	}
	#close{
		background-image: url('images/icons/close.png');
		background-size: 100% 100%;
		height: 50px;
		width: 50px;
		top:440px;
		transform: translateX(200%);
	}
	#closetxt{
		font-size: 30px;
		color: #77727A;
		height: 50px;
		width: 50px;
		top:445px;
		transform: translateX(300%);
	}
	#close:hover{
		cursor: pointer;
	}
	.topping{
		position: absolute;
		top:20px;
		left:50%;
	}
	#kayabamess{
		color: #77727A;
		font-size: 25px;
		top:100px;
		width:950px;
		transform: translateX(-50%);
	}
@keyframes fade{
	from{
		opacity: 1;
	}
	to{
		opacity: 0;
		display: none;
	}
}

#kirito{
	background-image: url('images/menu/kirito.png');
	left:10%;
	animation-fill-mode: forwards;
	animation-name: fadein;
	animation-delay: 1s;
	animation-duration: 1s;
	opacity: 0;
	display: none;
}
#asuna{
	background-image: url('images/menu/asuna.png');
	left:30%;
	animation-fill-mode: forwards;
	animation-delay: 2s;
	animation-duration: 1s;
	animation-name: fadein;
	opacity: 0;
	display: none;
}
#klein{
	background-image: url('images/menu/klein.png');
	left:50%;
	animation-fill-mode: forwards;
	animation-delay: 3s;
	animation-duration: 1s;
	animation-name: fadein;
	opacity: 0;
	display: none;
}
#agil{
	background-image: url('images/menu/agil.png');
	left:70%;
	animation-fill-mode: forwards;
	animation-delay: 4s;
	animation-duration: 1s;
	animation-name: fadein;
	opacity: 0;
	display: none;
}
#silica{
	background-image: url('images/menu/silica.png');
	left:90%;
	animation-fill-mode: forwards;
	animation-delay: 5s;
	animation-duration: 1s;
	animation-name: fadein;
	opacity: 0;
	display: none;
}
.players{
	position: absolute;
	background-size: 100% 100%;
	height: 400px;
	width: 100px;
	bottom: 0%;
	/*transform: translateY(400px);*/
}
.players, .inter:hover{
	cursor: pointer;
}
@keyframes fadein{
	from{
		opacity: 0;
	}
	to{
		opacity: 1;
	}
}
.instruct{
	
}
#textbox{
	
	position: absolute;
	left: 0%;
	animation-fill-mode: forwards;
	animation-name: fadein;
	animation-delay: .5s;
	animation-duration: 1s;
	opacity: 0;
	display: none;
	}
#messageback{
	background-image: url('images/messagebox.png');
		background-size: 100% 100%;
		height: 250px;
		width: 500px;
		
}

#messagetitle{
	position: absolute;
	color: #77727A;
	top:5px;
	font-size: 30px;
	left:20px;
	/*transform: translateX(20px);*/
}
#messagetext{
	position: absolute;

	color: #77727A;
	top:38px;
	height: 167px;
	font-size: 25px;
	left:5px;
	width: 487px;
	padding-left: 5px;
	
}
#next{
	background-image: url('images/icons/accept.png');
	background-size: 100% 100%;
	position: absolute;
	top:212.5px;
	left:300px;
	height: 25px;
	width: 25px;
}
#back{
		background-image: url('images/icons/close.png');
	background-size: 100% 100%;
	position: absolute;
	top:212.5px;
	left:150px;
	height: 25px;
	width: 25px;
}

@media screen and (min-device-width: 800px) and (max-device-width: 2000px) and (orientation:portrait){

	#stretcher{
		font-family: SAOfont;
		font-size: 25px;
		color: white;
		position: absolute;
		top: 10000000px;
		left:30%;
	}

	#backdrop{
		top: 0px;
		left: 0px;
		background-image: url("images/background/town-of-begining.png");
		background-size: 100% 100%;
		position: fixed;
		height: 100%;
		width: 100%;
	}
	#welcome{
		color: #77727A;
		font-size: 50px;
		top:175px;
		width:1000px;
		transform: translateX(-47%);
		
	}
	#messagebox{
		background-image: url('images/messagebox.png');
		background-size: 100% 100%;
		height: 500px;
		width: 1000px;
		top: 200px;
		transform: translateX(-50%);

	}
	#char{
		background-image: url('images/kayaba_1.png');
		background-size: 100% 100%;
		position: absolute;
		height: 50%;
		width: 30%;
		top: 50%;
		left:0%;
	}
	#close{
		background-image: url('images/icons/close.png');
		background-size: 100% 100%;
		height: 50px;
		width: 50px;
		top:625px;
		transform: translateX(200%);
	}
	#closetxt{
		font-size: 30px;
		color: #77727A;
		height: 50px;
		width: 50px;
		top:630px;
		transform: translateX(300%);
	}
	#close:hover{
		cursor: pointer;
	}
	.topping{
		position: absolute;
		top:20px;
		left:50%;
	}
	#kayabamess{
		color: #77727A;
		font-size: 25px;
		top:260px;
		width:950px;
		transform: translateX(-50%);
	}
@keyframes fade{
	from{
		opacity: 1;
	}
	to{
		opacity: 0;
		display: none;
	}
}
@media screen and (min-device-width: 800px) and (max-device-width: 2000px) and (orientation:portrait){


#kirito{
	background-image: url('images/menu/kirito.png');
	left:10%;
	animation-fill-mode: forwards;
	animation-name: fadein;
	animation-delay: 1s;
	animation-duration: 1s;
	opacity: 0;
	display: none;
}
#asuna{
	background-image: url('images/menu/asuna.png');
	left:30%;
	animation-fill-mode: forwards;
	animation-delay: 2s;
	animation-duration: 1s;
	animation-name: fadein;
	opacity: 0;
	display: none;
}
#klein{
	background-image: url('images/menu/klein.png');
	left:50%;
	animation-fill-mode: forwards;
	animation-delay: 3s;
	animation-duration: 1s;
	animation-name: fadein;
	opacity: 0;
	display: none;
}
#agil{
	background-image: url('images/menu/agil.png');
	left:70%;
	animation-fill-mode: forwards;
	animation-delay: 4s;
	animation-duration: 1s;
	animation-name: fadein;
	opacity: 0;
	display: none;
}
#silica{
	background-image: url('images/menu/silica.png');
	left:90%;
	animation-fill-mode: forwards;
	animation-delay: 5s;
	animation-duration: 1s;
	animation-name: fadein;
	opacity: 0;
	display: none;
}
.players{
	position: absolute;
	background-size: 100% 100%;
	height: 400px;
	width: 100px;
	bottom: 0%;
	/*transform: translateY(400px);*/
}

.instruct{
	top:600px;
}
#textbox{
	top: 500px;
	position: absolute;
	left: 0%;
	animation-fill-mode: forwards;
	animation-name: fadein;
	animation-delay: .5s;
	animation-duration: 1s;
	opacity: 0;
	display: none;
	}
#messageback{
	background-image: url('images/messagebox.png');
		background-size: 100% 100%;
		height: 250px;
		width: 500px;	
}

#messagetitle{
	position: absolute;
	color: #77727A;
	top:5px;
	font-size: 30px;
	left:20px;
	/*transform: translateX(20px);*/
}
#messagetext{
	position: absolute;

	color: #77727A;
	top:38px;
	height: 167px;
	font-size: 25px;
	left:5px;
	width: 487px;
	padding-left: 5px;
	
}
#next{
	background-image: url('images/icons/accept.png');
	background-size: 100% 100%;
	position: absolute;
	top:212.5px;
	left:300px;
	height: 25px;
	width: 25px;
}
#back{
		background-image: url('images/icons/close.png');
	background-size: 100% 100%;
	position: absolute;
	top:212.5px;
	left:150px;
	height: 25px;
	width: 25px;
}
}
@media screen and (min-device-width: 500px) and (max-device-width: 781px) and (orientation:portrait){
	#stretcher{
		font-family: SAOfont;
		font-size: 25px;
		color: white;
		position: absolute;
		top: 10000000px;
		left:30%;
	}


	#welcome{
		color: #77727A;
		font-size: 50px;
		top:175px;
		width:500px;
		transform: translateX(-47%);
		
	}
	#messagebox{
		background-image: url('images/messagebox.png');
		background-size: 100% 100%;
		height: 500px;
		width: 500px;
		top: 200px;
		transform: translateX(-50%);

	}
	#char{
		background-image: url('images/kayaba_1.png');
		background-size: 100% 100%;
		position: absolute;
		height: 50%;
		width: 30%;
		top: 50%;
		left:0%;
	}
	#close{
		background-image: url('images/icons/close.png');
		background-size: 100% 100%;
		height: 50px;
		width: 50px;
		top:625px;
		transform: translateX(200%);
	}
	#closetxt{
		font-size: 30px;
		color: #77727A;
		height: 50px;
		width: 50px;
		top:630px;
		transform: translateX(300%);
	}

	.topping{
		position: absolute;
		top:20px;
		left:50%;
	}
	#kayabamess{
		color: #77727A;
		font-size: 25px;
		top:260px;
		width:450px;
		transform: translateX(-50%);
	}

#kirito{
	left:10%;
}
#asuna{
	
	left:30%;
	
}
#klein{
	
	left:50%;
	
}
#agil{
	
	left:70%;

}
#silica{

	left:90%;

}
.players{
	position: absolute;
	background-size: 100% 100%;
	height: 400px;
	width: 100px;
	top: 78%;
}

.instruct{
	top:500px;
}
#textbox{
	position: absolute;
	left: 0%;

	}
#messageback{
		height: 250px;
		width: 500px;	
}

#messagetitle{
	position: absolute;
	color: #77727A;
	top:5px;
	font-size: 30px;
	left:20px;
	/*transform: translateX(20px);*/
}
#messagetext{
	position: absolute;

	color: #77727A;
	top:38px;
	height: 167px;
	font-size: 25px;
	left:5px;
	width: 487px;
	padding-left: 5px;
	
}
#next{

	position: absolute;
	top:212.5px;
	left:300px;
	height: 25px;
	width: 25px;
}
#back{

	position: absolute;
	top:212.5px;
	left:150px;
	height: 25px;
	width: 25px;
}
}
@media screen and (min-device-width: 300px) and (max-device-width: 490px) and (orientation:portrait){
	#stretcher{
		font-family: SAOfont;
		font-size: 25px;
		color: white;
		position: absolute;
		top: 10000000px;
		left:30%;
	}


	#welcome{
		color: #77727A;
		font-size: 35px;
		top:205px;
		width:350px;
		transform: translateX(-47%);
		
	}
	#messagebox{
		background-image: url('images/messagebox.png');
		background-size: 100% 100%;
		height: 500px;
		width: 350px;
		top: 200px;
		transform: translateX(-50%);

	}
	#char{
		background-image: url('images/kayaba_1.png');
		background-size: 100% 100%;
		position: absolute;
		height: 50%;
		width: 30%;
		top: 70%;
		left:0%;
	}
	#close{
		background-image: url('images/icons/close.png');
		background-size: 100% 100%;
		height: 50px;
		width: 50px;
		top:625px;
		transform: translateX(100%);
	}
	#closetxt{
		font-size: 30px;
		color: #77727A;
		height: 50px;
		width: 50px;
		top:630px;
		transform: translateX(200%);
	}

	.topping{
		position: absolute;
		top:20px;
		left:50%;
	}
	#kayabamess{
		color: #77727A;
		font-size: 15px;
		top:260px;
		width:330px;
		transform: translateX(-50%);
	}

#kirito{
	left:5%;
}
#asuna{
	
	left:25%;
	
}
#klein{
	
	left:45%;
	
}
#agil{
	
	left:65%;

}
#silica{

	left:85%;

}
.players{
	position: absolute;
	background-size: 100% 100%;
	height: 400px;
	width: 100px;
	top: 78%;
}

.instruct{
	top:300px;
}
#textbox{
	position: absolute;
	left: 0%;

	}
#messageback{
		height: 250px;
		width: 500px;	
}

#messagetitle{
	position: absolute;
	color: #77727A;
	top:5px;
	font-size: 30px;
	left:20px;
	/*transform: translateX(20px);*/
}
#messagetext{
	position: absolute;

	color: #77727A;
	top:38px;
	height: 167px;
	font-size: 25px;
	left:5px;
	width: 487px;
	padding-left: 5px;
	
}
#next{

	position: absolute;
	top:212.5px;
	left:300px;
	height: 25px;
	width: 25px;
}
#back{

	position: absolute;
	top:212.5px;
	left:150px;
	height: 25px;
	width: 25px;
}
}
</style>

</head>
<body onload="aniClouds()" >
	<div id="backdrop"></div>
	<div id="parrallex" onscroll="zoomin()" >
	<h1>Welcome To Sword Art Online</h1>
		<img src="cloud0.png" alt="" class= "clouds" id="cloud0">
		<img src="cloud1.png" alt="" class= "clouds" id="cloud1">
		<img src="cloud2.png" alt="" class= "clouds" id="cloud2">
		<img src="cloud3.png" alt="" class= "clouds" id="cloud3">
		<img src="cloud4.png" alt="" class= "clouds" id="cloud4">
		<img src="aincrad1.png" alt="" id="castle" >
		<img src="cloud5.png" alt="" class= "clouds" id="cloud5">
		<img src="cloud6.png" alt="" class= "clouds" id="cloud6">
		<img src="cloud7.png" alt="" class= "clouds" id="cloud7">
		<img src="cloud8.png" alt="" class= "clouds" id="cloud8">
		<img src="cloud9.png" alt="" class= "clouds" id="cloud9">
		<img src="cloud10.png" alt="" class= "clouds" id="cloud10">
		
		<p id="descript">scroll down to enter the amazing world of Aincrad</p>
	
		<div id="stretcher"><p>this is the end</p></div>
	</div>
	<div id="content" class="pages">
			<div id="messagebox" class="topping"></div>
			<div id="char"></div>
			<div id="close" class="topping"  onmousedown="closechange()" onmouseup="done()"></div>
			<div id="closetxt" class="topping"> close</div>
			
			<h2 id="welcome" class="topping">Welcome to Sword Art online</h2>
			<p id="kayabamess" class="topping">
				Welcome user to the world of Sword Art Online, a fantasy world of my creatation. You may be wondering why there is no log out button. I assure you this is not a defect. This is how sword art online was meant to be used. there is only one way to escape and that is to reach level 100 and defeat the boss. I wish you the best of luck.
			</p></div>
	<div id="userID" class="hp">
		<div id="backside" class="hp">
			<svg height="50" width="400" class="contact" id="sg">
				<polygon points="0,0,25,0,25,50,0,50" style="fill:#C3CBE4; stroke:#C3CBE4; stroke-width:0; opacity: 0.7" />
				<polygon points="27,0,400,0,400,30,230,30,227,50,27,50" style="fill:#C3CBE4; stroke:#C3CBE4; stroke-width:0; opacity: 0.7" /> 
				<polygon points="100,10,380,10,380,20,225,20,222,40,100,40" style="fill:#2BE622; stroke:#2BE622; stroke-width:0;" /> 
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
	<div id="kirito" class="players"></div>
	<div id="textbox" class="instruct">
		<div id="messageback" class="instruct"></div>
		<div id="messagetitle" class="instruct" onmouseenter="kiritohelp()" onmouseleave="closed()">Kirito</div>
		<div id="messagetext" class="instruct">Welcome user to Sword Art Online. I am Kirito a solo player on the front lines. You can hover over the others to see how they can help you.</div>
		<div id="next"  class="instruct" onmousedown="nextchange()" onmouseup="next()"></div>
		<div id="back"  class="instruct" onmousedown="backchange()" onmouseup="back()"></div>
		<div id="nexttxt" class="instruct"></div>
		<div id="backtxt" class="instruct"></div>
	</div>
	<div id="asuna" class="players" onmouseenter="asunahelp()" onmouseleave="closed()"></div>
	<div id="agil" class="players" onmouseenter="agilhelp()" onmouseleave="closed()"></div>
	<div id="klein" class="players" onmouseenter="kleinhelp()" onmouseleave="closed()"></div>
	<div id="silica" class="players" onmouseenter="silicahelp()" onmouseleave="closed()"></div>
	<div id="poh" class="players" onmouseenter="" onmouseleave=""></div>


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