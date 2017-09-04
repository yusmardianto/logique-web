<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
    
    <title>Contact Logique</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
	
    <link href="../css/style.css" rel="stylesheet">
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
								<img src="../img/home.png" alt="Home"/><br/>
								Home
							</a>
						</div>
						<div class="text-center">
							<a href="about.php">
								<img src="../img/about-us.png" alt="About Us"/><br/>
								About Us
							</a>
						</div>
						<div class="text-center">
							<a href="portfolio.php">
								<img src="../img/portfolio.png" alt="Portfolio"/><br/>
								Portfolio
							</a>
						</div>
						<div class="text-center">
							<a href="services.php">
								<img src="../img/services.png" alt="Services"/><br/>
								Services
							</a>
						</div>
						<div class="text-center">
							<a href="joinus.php">
								<img src="../img/joinus.png" alt="Services"/><br/>
								Career
							</a>
						</div>
						<div class="text-center active">
							<a href="contact.php">
								<img src="../img/contact-us.png" alt="Contact Us"/><br/>
								Contact Us
							</a>
						</div>
					</div>
				</div>
			</div>
			<!-- NAVIGATION -->
			
			<!-- <div id="bgImg" class="others"><div class="img"></div></div> -->
			<div class="contain-video">
				<video poster="../img/video-img.png" id="bgvid" playsinline autoplay muted loop>
					<source src="../img/12377093.mp4" type="video/mp4">
				</video>
			</div>
			<div class="bg-white-opacity"></div>
			
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-offset-1 col-sm-10">
						<div class="lang-logo">
							<ul class="list-inline">
								<li class="active"><a href="#">EN</a></li>
								<li><a href="../contact.php">ID</a></li>
								<li><a href="../jp/contact.php">JP</a></li>
							</ul>
							<a href="index.php"><img src="../img/logo.png" alt="Logo" class="img-responsive logo"/></a>
							<ol class="breadcrumb">
							  <li><a href="index.php">Home</a></li>
							  <li class="active"><a>Contact Us</a></li>
							</ol>
						</div>
					</div>
				</div>
			</div>			
			
			<br/>
			
			<div id="contentsArea">
				<div id="contents">
					<div class="map-container">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1982.8748090433066!2d106.82702104991579!3d-6.296598097694437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f206effdebf1%3A0xca2d9403de2bfbe1!2sAD+Premier+Office+Park!5e0!3m2!1sen!2sid!4v1499330296225" allowfullscreen></iframe>
					</div>
					<div class="title"><b>Contact</b><span class="yellow">Us</span></div>
					<div class="form-container">
						Feel free to contact LOGIQUE about website creation, social media, inquiry about web-related consultation, or designing.<br/><br/>
						<div class="row">
							<div class="col-lg-7">
								<form class="form-contact">
								  <div class="form-group">
									<input type="text" class="form-control" id="company-name" name="company-name" placeholder="COMPANY NAME">
								  </div>
								  <div class="form-group">
									<input type="text" class="form-control" id="name" name="name" placeholder="NAME">
								  </div>
								  <div class="form-group">
									<input type="number" class="form-control" id="phone" name="phone" placeholder="TELEPHONE">
								  </div>
								  <div class="form-group">
									<input type="email" class="form-control" id="email" name="email" placeholder="E-MAIL">
								  </div>
								  <div class="form-group">
									<textarea class="form-control" placeholder="YOUR MESSAGE"></textarea>
								  </div>
								  <div class="row">
									  <div class="col-sm-9">
											<div class="g-recaptcha" data-sitekey="6LeZwRoUAAAAAJ7_3OVKSFKNEJHpLmijZrZcFYZT"></div>
											<br/>
									  </div>
									  <div class="col-sm-3 paddingleft">
										<button type="submit" class="btn btn-submit btn-block">Submit</button>
									  </div>
								  </div>
								</form>
								<br/>
							</div>
							<div class="col-lg-5">
								<span class="yellow">Alamat :</span><br/>
								Ad Premier Building 19th Floor, <br/>
								Jalan Tb. Simatupang No. 5,  Pasar Minggu, <br/>
								Jakarta 12540.  INDONESIA<br/><br/>
								<div class="row">
									<div class="col-xs-6">
										<span class="yellow">Phone :</span><br/>
										+62 (21) 2270 8935 <br/>
										+62 (21) 2270 89336
									</div>
									<div class="col-xs-6">
										<span class="yellow">Email :</span><br/>
										info@logique.co.id
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<?php include 'footer.php';?>
			
		</div>
	</body>
</html>