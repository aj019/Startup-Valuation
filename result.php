<?php $val = 1.250; ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="description" content="The latest funny images, memes, GIFs, youtube videos from India and the world. Share your fun here.">
	<meta name="keywords" content="funny,youtube videos, gif, funny pics, images, lol, rofl, indian, bollywood memes, trolls, awesome, fun, cute, memeveme, hilarious">
	<meta property = "og:title" content="Startup Valuation"/>
	<meta property = "og:type" content="website"/>
	<meta property = "og:url" content="http://startupvaluation.co/index.php"/>
	<meta property = "og:image" content="http://startupvaluation.co/invoice/resources/startup_valuation.png"/>
	<meta property = "og:description" content="My pre money Evaluation is "/>
	<meta property = "og:site_name" content="http://startupvaluation.co"/>
	<meta name="twitter:card" content="photo"/>
	<meta name="twitter:url" content="http://startupvaluation.co/index.php"/>
	<meta name="twitter:title" content="Startup Valuation"/>
	<meta name="twitter:description" content="My pre money evaluation is"/>
	<meta name="twitter:image" content="http://startupvaluation.co/invoice/resources/startup_valuation.png"/>
	<meta name="twitter:creator" value="Sartup Valuation" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="jquery.js"></script>

	<link rel="stylesheet" type="text/css" href="style.css">
    <style type="text/css">

    *{
    	margin: 0 !important;
    	padding: 0 !important;
    }	

    html, body {
  width: 100% !important;
  height: 100% !important;
}
	
	#outer-wrapper{

		height: 100%;
	}

	.slides{

		display: block;
		height: 100%;
	}

	h1{
			font-size: 553% !important;

			margin-top: 9% !important;
		}

	p{

			font-size: 330% !important;
		}
		

		@media screen and (max-width: 700px ) {

		/*----------Anuj----------*/

		/*----------H1 tag styling for alll h1 tags----------*/
		#slide1 #content h1 {

			font-size: 477% !important;

			margin-top: 12% !important;
		}

		/*----------p tag styling for all p tags----------*/

		p{

			font-size: 350% !important;
		}
	}
			

		
	</style>
	
    
</head>
<body>
<div id="outer-wrapper">

		<div id="top-bar">
			<div id="logo-container">
				<img src="resources/startup_valuation_logo.png">
			</div>
		</div>
		
		<div id="clear-fix"></div>


		
		<a name="slide1"></a>
		<section class="slides" id="slide1">		
			<aside class="adds" id="add1">
			</aside>

			<div id="content">
				<h1>Your estimated funding is</h1>
				<br><br><br>
				<p>Rs <?php echo $val; ?> Crores</p>
				<a href="https://plus.google.com/share?url=http%3A%2F%2Fstartupvaluation.co%2Fresult.php" target="_blank"><img style="float:right; width:10px;" class="google-share" src="resources/g1.png" >
				<a href="https://twitter.com/intent/tweet?url=http%3A%2F%2Fstartupvaluation.co%2Fresult.php&via=Memeveme" target="_blank"><img style="float:right; width:10px;" class="twitter-share" src="resources/t1.png" ></a>
			    <a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fstartupvaluation.co%2Fresult.php" target="_blank"><img style="float:right; width:10px;" class="facebook-share" src="resources/f1.png"></a>
			</div>

			<aside class="adds" id="add2">
			</aside>
		</section>
	</div>	
</body>
</html>