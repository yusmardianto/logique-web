<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
    
    <title>Portfolio Logique</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
	<script src="https://use.fontawesome.com/df558bb4a1.js"></script>
    
    </head>
	<body>
		<div class="wrapper">
		
			<!-- NAVIGATION -->
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar first"></span>
				<span class="icon-bar second"></span>
				<span class="icon-bar third"></span> 
			</button>
			<div class="collapse navbar-collapse" id="myNavbar">
			<div class="backdrop-test"></div>
				<div class="logique-nav">
					<div class="margin-for-nav">
						<div class="text-center">
							<a href="index.php">
								<img src="img/home.png" alt="Home"/><br/>
								Beranda
							</a>
						</div>
						<div class="text-center">
							<a href="about.php">
								<img src="img/about-us.png" alt="About Us"/><br/>
								Tentang Kami
							</a>
						</div>
						<div class="text-center active">
							<a href="portfolio.php">
								<img src="img/portfolio.png" alt="Portfolio"/><br/>
								Portfolio
							</a>
						</div>
						<div class="text-center">
							<a href="services.php">
								<img src="img/services.png" alt="Services"/><br/>
								Services
							</a>
						</div>
						<div class="text-center">
							<a href="joinus.php">
								<img src="img/joinus.png" alt="Services"/><br/>
								Karir
							</a>
						</div>
						<div class="text-center">
							<a href="contact.php">
								<img src="img/contact-us.png" alt="Contact Us"/><br/>
								Hubungi Kami
							</a>
						</div>
					</div>
				</div>
			</div>
			<!-- NAVIGATION -->
			
			<!-- <div id="bgImg" class="others"><div class="img"></div></div> -->
			<div class="contain-video">
				<video poster="img/video-img.png" id="bgvid" playsinline autoplay muted loop>
					<source src="img/12377093.mp4" type="video/mp4">
				</video>
			</div>
			<div class="bg-white-opacity"></div>
			
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-offset-1 col-sm-10">
						<div class="lang-logo">
							<ul class="list-inline">
								<li><a href="en/portfolio.php">EN</a></li>
								<li class="active"><a href="#">ID</a></li>
								<li><a href="jp/portfolio.php">JP</a></li>
							</ul>
							<a href="index.php"><img src="img/logo.png" alt="Logo" class="img-responsive logo"/></a>
							<ol class="breadcrumb">
							  <li><a href="index.php">Beranda</a></li>
							  <li class="active"><a>Portfolio</a></li>
							</ol>
						</div>
					</div>
				</div>
			</div>			
			
			<br/>
			
			<div id="contentsArea">
				<div id="contents">
					<div class="title"><b>Our</b><span class="yellow">Portfolio</span></div>
					<div class="form-container">
						<div style="text-align: center;font-size: 60px;padding: 150px 0;font-weight: bold;font-style: italic;">Coming Soon</div>
					</div>
				</div>
			</div>
			
			<?php include 'footer.php';?>
			
		</div>
	</body>
</html>