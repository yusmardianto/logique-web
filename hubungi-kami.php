<?php
require_once("./form/fgcontactform.php");

$formproc = new FGContactForm();

//1. Add your email address here.
//You can add more than one receipients.
$formproc->AddRecipient(['info@logique.co.id']); //<<---Put your email address here

//2. For better security. Get a random tring from this link: http://tinyurl.com/randstr
// and put it here
$formproc->SetFormRandomKey('HG9hPBpn9Bn26yg');

//$formproc->AddFileUploadField('photo','jpg,jpeg,pdf,doc,docx',40960);

if(isset($_POST['submitted']))
{
	if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
		$secret = '6LcuHywUAAAAAEfJ-sZem8CzGVYIUMcxoT0jRhtW';
		// $secret = '6Lf3pA8UAAAAAEECs5-RC010LQ3ehBt76aKv8Rxb';
		$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
		// print_r($verifyResponse); exit;
		$responseData = json_decode($verifyResponse);
		if ($responseData->success) {
			if ($formproc->ProcessForm()) {
				$msg = "<div class='alert alert-success' id='msg' role='alert'>Thank you for sending us inquiry!</div>";
			}
		} else {
			$msg = "<div class='alert alert-warning' id='msg' role='alert'>reCAPTCHA verification failed, please try again.</div>";
		}
	} else {
		$msg = "<div class='alert alert-warning' id='msg' role='alert'>Please click the reCAPTCHA box.</div>";
	}
}

?>
<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=3.0">
	<meta name="description" itemprop="description" content="LOGIQUE merupakan perusahaan web developer, web design, digital marketing terbaik di Jakarta yang menawarkan berbagai pelayanan serta produk digital untuk perkembangan bisnis Anda. Tertarik untuk mendapatkan layanan dan produk kami. Hubungi kami sekarang juga!">
	<meta name="keywords" content="pengembangan sistem web, digital marketing, pembuatan aplikasi android, media sosial, sistem aplikasi, hubungi kami, pembuatan website, konten, pemasaran, konsultasi, seo">
	<meta name="author" content="PT. Logique Digital Indonesia">
	<meta property="og:title" content="Hubungi Kami | Web Developer, Designer, Digital Marketing | LOGIQUE">
	<meta property="og:type" content="website">
	<meta property="og:site_name" content="Logique">
	<meta property="og:url" content="https://www.logique.co.id/hubungi-kami.php">
	<meta property="og:image" content="https://www.logique.co.id/img/og-image.png">
	<meta property="og:description" content="LOGIQUE merupakan perusahaan web developer, web design, digital marketing terbaik di Jakarta yang menawarkan berbagai pelayanan serta produk digital untuk perkembangan bisnis Anda. Tertarik untuk mendapatkan layanan dan produk kami. Hubungi kami sekarang juga!">
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	<title>Hubungi Kami | Web Developer, Designer, Digital Marketing | LOGIQUE</title>
	
	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	
	<link href="css/style.css" rel="stylesheet">
	<link href="/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
	
</head>
<style>
	div.row{
		width: 100%;
	}
	
	.text-left{
		text-align: left;
	}
	
	#contentsArea {
		z-index: 4;
		width: 100%;
		max-width: unset!important;
		min-height: 100%;
		/* margin: -35px 50px 0 auto; */
		/* padding: 40px 0; */
		/* margin-left: 95px; */
		/* padding-right: 50px; */
		/* padding-left: 95px; */
	}
	
	.d-title{
		font-size: x-large;
	}
	.d-description{
		font-size: large;
		margin-top: 5%;
		margin-bottom: 1em;
	}
	.c-label{
		font-weight: 500;
	}
	
	.contact-us-cont{
		font-size: large;
		margin-bottom: 1em;
		padding: 1em;
	}
	
	.img-vector{
		width: 100%; 
		height: 200px; 
		object-fit: scale-down; 
		margin-top: 5%;
	}
	
	.panel-heading{
		cursor: pointer;
	}
	
	.panel-body{
		padding: 1em 2em;
	}
	
	/* Custom Checkbox */
	.checkbox label:after {
		content: '';
		display: table;
		clear: both;
	}
	
	.checkbox .cr {
		position: relative;
		display: inline-block;
		border: 1px solid #a9a9a9;
		border-radius: .25em;
		width: 1.3em;
		height: 1.3em;
		float: left;
		margin-right: .5em;
	}
	
	.checkbox .cr .cr-icon {
		position: absolute;
		font-size: .8em;
		line-height: 0;
		top: 50%;
		left: 15%;
	}
	
	.checkbox label input[type="checkbox"] {
		display: none;
	}
	
	.checkbox label input[type="checkbox"]+.cr>.cr-icon {
		opacity: 0;
	}
	
	.checkbox label input[type="checkbox"]:checked+.cr>.cr-icon {
		opacity: 1;
	}
	
	.checkbox label input[type="checkbox"]:disabled+.cr {
		opacity: .5;
	}
	
	.contact-title-copies{
		font-size:30px;
		font-weight:bold;
		text-align:center;
		background:#f4f4f4;
		padding: 10px 25%;
		line-height: 1.3;
	}
	
	.form-container{
		padding-left: 95px;
	}
	
	.yellow-box{
		padding: 24px 0; 
		background: #f4ce58;
		display: flex;
		flex-wrap: wrap;
		justify-content: center;
		border: 2px solid black;
		border-radius: 10%;
	}
	
	.img-box{
		width: 100%; 
		height: 150px; 
		object-fit: scale-down;
	}
	
	.float-box{
		position: relative; top: -150px;
	}
	
	.panel-group .panel {
		margin-bottom: 0;
		border-radius: 0;
		border: none;
	}
	.panel-default>.panel-heading+.panel-collapse>.panel-body {
		border-top-color: #fff;
	}
	
	/* Timeline */
	.timeline,
	.timeline-horizontal {
		list-style: none;
		padding: 20px;
		position: relative;
	}
	.timeline:before {
		top: 40px;
		bottom: 0;
		position: absolute;
		content: "";
		width: 3px;
		background-color: #000;
		left: 50%;
		margin-left: -1.5px;
	}
	.timeline .timeline-item {
		margin-bottom: 20px;
		position: relative;
	}
	.timeline .timeline-item:before,
	.timeline .timeline-item:after {
		content: "";
		display: table;
	}
	.timeline .timeline-item:after {
		clear: both;
	}
	.timeline .timeline-item .timeline-badge {
		color: #fff;
		/* width: 54px;
		height: 54px; */
		content: '';
		padding: 6px;
		line-height: 52px;
		font-size: 22px;
		text-align: center;
		position: absolute;
		top: 18px;
		left: 50%;
		margin-left: -25px;
		background-color: #7c7c7c;
		border: 3px solid #000;
		z-index: 100;
		border-top-right-radius: 50%;
		border-top-left-radius: 50%;
		border-bottom-right-radius: 50%;
		border-bottom-left-radius: 50%;
	}
	.timeline .timeline-item .timeline-badge i,
	.timeline .timeline-item .timeline-badge .fa,
	.timeline .timeline-item .timeline-badge .glyphicon {
		top: 2px;
		left: 0px;
	}
	.timeline .timeline-item .timeline-badge.primary {
		background-color: #000;
	}
	.timeline .timeline-item .timeline-badge.info {
		background-color: #000;
	}
	.timeline .timeline-item .timeline-badge.success {
		background-color: #000;
	}
	.timeline .timeline-item .timeline-badge.warning {
		background-color: #000;
	}
	.timeline .timeline-item .timeline-badge.danger {
		background-color: #000;
	}
	.timeline .timeline-item .timeline-panel {
		position: relative;
		width: 46%;
		height: 60%;
		float: left;
		right: 16px;
		border: 1px solid #000;
		background: #ffffff;
		border-radius: 10px;
		padding: 20px;
		-webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
		box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
	}
	.timeline .timeline-item .timeline-panel:before {
		position: absolute;
		top: 26px;
		right: -16px;
		display: inline-block;
		border-top: 16px solid transparent;
		border-left: 16px solid transparent;
		border-right: 0 solid #c0c0c0;
		border-bottom: 16px solid transparent;
		content: " ";
	}
	.timeline .timeline-item .timeline-panel .timeline-title {
		margin-top: 0;
		color: inherit;
	}
	.timeline .timeline-item .timeline-panel .timeline-body > p,
	.timeline .timeline-item .timeline-panel .timeline-body > ul {
		margin-bottom: 0;
	}
	.timeline .timeline-item .timeline-panel .timeline-body > p + p {
		margin-top: 5px;
	}
	.timeline .timeline-item:last-child:nth-child(even) {
		float: right;
	}
	.timeline .timeline-item:nth-child(even) .timeline-panel {
		float: right;
		left: 16px;
	}
	.timeline .timeline-item:nth-child(even) .timeline-panel:before {
		border-left-width: 0;
		border-right-width: 14px;
		left: -14px;
		right: auto;
	}
	.timeline-horizontal {
		list-style: none;
		position: relative;
		padding: 20px 0px 20px 0px;
		display: inline-block;
	}
	.timeline-horizontal:before {
		height: 3px;
		top: auto;
		bottom: 26px;
		left: 0;
		right: 0;
		width: 100%;
		margin-bottom: 20px;
	}
	.timeline-horizontal .timeline-item {
		display: table-cell;
		height: 320px;
		width: 20%;
		min-width: 260px;
		float: none !important;
		padding-left: 0px;
		padding-right: 20px;
		margin: 0 auto;
		vertical-align: bottom;
	}
	.timeline-horizontal .timeline-item .timeline-panel {
		top: auto;
		bottom: 64px;
		display: inline-block;
		float: none !important;
		left: 0 !important;
		right: 0 !important;
		width: 100%;
		margin-bottom: 20px;
	}
	.timeline-horizontal .timeline-item .timeline-panel:before {
		top: auto;
		bottom: -16px;
		left: 28px !important;
		right: auto;
		border-right: 16px solid transparent !important;
		border-top: 16px solid #000 !important;
		border-bottom: 0 solid #000 !important;
		border-left: 16px solid transparent !important;
	}
	.timeline-horizontal .timeline-item:before,
	.timeline-horizontal .timeline-item:after {
		display: none;
	}
	.timeline-horizontal .timeline-item .timeline-badge {
		top: auto;
		bottom: 18px;
		left: 60px;
	}
	
	.abs-box{
		background: #000;
		color: #fff;
		border-radius: 10px;
		padding: 1em;
		position: absolute;
		bottom: 6px;
		right: -12px;
		left: 24px;
		height: 100px;
	}

	.lang-logo{
		float: right;
		position: unset;
	}
	
	@media (max-width: 1024px){
		.contact-us-cont{
			width: 100%;
		}
		.contact-title-copies{
			margin-left: 70px;
		}
		.form-container{
			padding-left: 95px;
		}
		.float-box{
			top: -120px;
		}
	}
	
	@media screen and (max-width: 979px){
		#contentsArea {
			width: auto;
			max-width: none;
			margin: -18px 0 0 80px;
			padding: 0
		}	
		.contact-title-copies{
			margin-left: 0;
		}
		.form-container{
			padding: 0 15px 30px;
		}
		.img-box{
			height: 50px;
			padding: 0 12px;
		}
		.float-box{
			top: -95px;
		}
		.lang-logo{
			margin-top: 0;
		}
	}
	
	.overflow-auto{
		display:inline-block;
		width:100%;
		overflow-y:auto;
	}
	
	.overflow-auto::-webkit-scrollbar {
		height: 6px;
		/* background: transparent; make scrollbar transparent */
	}
	
	.overflow-auto::-webkit-scrollbar-thumb {
		background: #f4ce58;
	}
	
	.overflow-auto::-webkit-scrollbar-track {
		background: rgba(0, 0, 0, 0.5);
	}
	
	@media only screen and (max-width: 768px){
		.d-title{
			font-size: small;
		}
		.d-description{
			font-size: 12px;
		}
		.img-vector{
			height: 150px;
		}
		.contact-us-cont{
			width: 100%;
		}
	}
	@media screen and (max-width: 480px) {
		#contentsArea{
			margin:unset;
		}
		.float-box{
			top: -80px;
		}
		.lang-logo{
			float: left;
		}
	}
</style>
<body>
	<div class="wrapper">
		<!-- NAVIGATION -->
		<button type="button" class="navbar-toggle collapsed" aria-label="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
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
							<div class="img-home"></div>
							Beranda
						</a>
					</div>
					<div class="text-center">
						<a href="logique.php">
							<div class="img-about"></div>
							Tentang Kami
						</a>
					</div>
					<div class="text-center">
						<a href="portofolio.php">
							<div class="img-portfolio"></div>
							Portfolio
						</a>
					</div>
					<div class="text-center">
						<a href="layanan.php">
							<div class="img-services"></div>
							Layanan
						</a>
					</div>
					<div class="text-center">
						<a href="produk.php">
							<div class="img-product"></div>
							Produk
						</a>
					</div>
					<div class="text-center">
						<a href="/career/">
							<div class="img-career"></div>
							Karir
						</a>
					</div>
					<div class="text-center active">
						<a href="#">
							<div class="img-contact"></div>
							Hubungi Kami
						</a>
					</div>
					<div class="text-center">
						<a href="https://www.logique.co.id/blog/" target="_blank" rel="noreferrer">
							<div class="img-blog"></div>
							Blog
						</a>
					</div>
				</div>
			</div>
		</div>
		<!-- NAVIGATION -->
		
		<br/>
		
		<div id="contentsArea">
			
			<div class="clearfix" id="contents">
				<div class="col-md-11 col-md-offset-1 col-sm-11 col-sm-offset-1" style="background: #fff;">
					<a href="index.php"><img src="../img/logo.png" alt="Logo" class="logo hidden-xs"/></a>
					<div class="lang-logo">
						<ul class="list-inline">
							<li class="active"><a href="#">EN</a></li>
							<li><a href="../hubungi-kami.php">ID</a></li>
							<li><a href="../jp/contact.php">JP</a></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"></div>
				<!-- header -->
				<div class="contact-title-copies mt-12">
						<br>
					<span style="border-bottom: 12px solid #f4ce58; padding-bottom: 3px;">Contact Us</span>
				</div>
				<div class="form-container col-sm-12 bg-grey" style="padding-top: 10px;">
					<div class="text-center container contact-us-cont">
						Terima kasih Anda telah tertarik dengan seluruh layanan yang kami tawarkan. Jika Anda ingin mendapatkan informasi lebih lanjut dengan seluruh layanan kami, seperti pembuatan web, pengembangan sistem web, seo dan berbagai permasalahan di dunia digital lainnya, Kalian dapat menghubungi dan bertanya apapun kepada kami melalui tombol di bawah ini:
					</div>
				</div>
				<div class="form-container col-md-12 col-sm-12" style="height: fit-content; background: #000;">
					<div class="col-sm-6 col-xs-4">
						<img class="img-vector" src="img/vector_smart_object.png" alt="" style="">
					</div>
					<div class="col-md-4 col-sm-5" style="padding: 32px 0;">
						<dt class="d-title" style="color: #fff; text-align: left;">
							Menawarkan Anda solusi dari permasalahan bisnis Anda di dunia digital kapan pun dan dimana pun.
						</dt>
						<br>
						<a class="btn btn-hubungi smooth" href="#anchorForm" style="font-size: medium; font-weight: 600;">
							Hubungi Kami Sekarang
						</a>
					</div>
				</div>
				<!-- end of header -->
				
				<div class="contact-us-cont">
					<div class="col-sm-5 col-sm-offset-1" style="padding: 1em 0;">
						<img class="" src="img/kontak-img.jpg" alt="Hubungi Kami Logique" style="width: 100%; height: auto; max-width: 500px; object-fit: scale-down; border: 2px solid black; padding: 2%;"/>
					</div>
					<div class="col-sm-5" style="padding-top: 5%;">
						<dt class="d-title" style="background: #ffd02a; padding:6px;">
							Kami dapat membantu bisnis Anda, jika Anda menganggap bahwa Web merupakan kunci dari kesuksesan bisnis Anda.
						</dt>
						<p class="d-description">
							Dengan pengalaman selama lebih dari 5 tahun, membuat Logique banyak dipercaya oleh
							berbagai perusahaan baik ditingkat nasional maupun internasional. Selain itu, dengan
							tenaga profesional yang kami miliki, kami dapat memberikan layanan berkualitas tinggi
							bagi seluruh proyek Anda.
						</p>
					</div>
					<br>
					<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 text-center">
						<dt class="d-title" style="margin-top: 3%;">Silahkan menghubungi kami untuk pembuatan website, media sosial, konsultasi seputar web, atau design.</dt>
						<hr class="col-sm-4 col-sm-offset-4 bar-yellow" style="padding: 5px 0; border: none;">
					</div>
					
					<div class="col-sm-8 col-sm-offset-2 text-center sosmed-contact">
						<a href="https://www.facebook.com/logique.id/" target="_blank" aria-label="Facebook" rel="noreferrer"><i class="fa fa-facebook-official" style="color:#777; font-size: xx-large;"></i></a>
						<a href="https://twitter.com/LogiqueDigital" target="_blank" aria-label="Twitter" rel="noreferrer"><i class="fa fa-twitter" style="color:#777; font-size: xx-large;"></i></a>
						<a href="https://www.instagram.com/logiquedigital/" target="_blank" aria-label="Instagram" rel="noreferrer"><i class="fa fa-instagram" style="color:#777; font-size: xx-large;"></i></a>
						<a href="https://www.linkedin.com/company/13420656" target="_blank" aria-label="LinkedIn" rel="noreferrer"><i class="fa fa-linkedin-square" style="color:#777; font-size: xx-large;"></i></a>
						<a href="https://api.whatsapp.com/send?phone=62811870321" target="_blank" aria-label="WhatsApp" rel="noreferrer"><i class="fa fa-whatsapp" style="color:#777; font-size: xx-large;"></i></a>
					</div>
					<br>
					<?php if(isset($msg))
					{
						echo $msg;
					}
					?>
					<br>
					<div class="container" style="margin-top: 3%;">
						<form class="contactform" id="moresco-contactform" role="form" name='myForm' onsubmit='return validateForm()' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
							<input type='hidden' name='submitted' id='submitted' value='1'/>
							<input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
							<div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
							<div class="col-md-8 col-md-offset-2 col-sm-7 col-sm-offset-2">
								<label for="companyname" class="c-label">Nama Perusahaan</label>
								<div class="form-group">
									<input type="text" class="form-control" id="companyname" name="companyname" aria-label="Company Name" value='<?php echo $formproc->SafeDisplay('companyname') ?>' placeholder="NAMA PERUSAHAAN">
								</div>
							</div> 
							<div class="col-md-8 col-md-offset-2 col-sm-7 col-sm-offset-2">
								<label for="name" class="c-label">Nama</label>
								<div class="form-group">
									<input type="text" class="form-control" id="name" name="name" aria-label="Name" value='<?php echo $formproc->SafeDisplay('name') ?>' placeholder="NAMA">
								</div>
							</div>
							
							<div class="col-md-8 col-md-offset-2 col-sm-7 col-sm-offset-2">
								<label for="phone" class="c-label">Nomor Telepon</label>
								<div class="form-group">
									<input type="number" class="form-control" id="phone" name="phone" aria-label="Phone" value='<?php echo $formproc->SafeDisplay('phone') ?>' placeholder="NOMOR TELEPON">
								</div>
							</div>
							<div class="col-md-8 col-md-offset-2 col-sm-7 col-sm-offset-2">
								<label for="email" class="c-label">Email</label>
								<div class="form-group">
									<input type="email" class="form-control" id="email" name="email" aria-label="Email" value='<?php echo $formproc->SafeDisplay('email') ?>' placeholder="E-MAIL">
								</div>
							</div>
							
							<div class="col-md-8 col-md-offset-2 col-sm-7 col-sm-offset-2">
								<label for="message" class="c-label">Message</label>
								<div class="form-group" style="margin-top: 10px;">
									<textarea class="form-control" name="message" aria-label="Message" placeholder="PESAN"><?php echo $formproc->SafeDisplay('message') ?></textarea>
								</div>
							</div>
							
							<div class="col-md-8 col-md-offset-2 col-sm-7 col-sm-offset-2">
								<b>Anda butuh bantuan LOGIQUE untuk:</b>  <i>(Anda boleh memilih lebih dari satu)</i>
							</div>
							
							<div class="col-md-8 col-md-offset-2 col-sm-7 col-sm-offset-2">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="inquiry[]" value="Mengembangkan sebuah website">
										<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>mengembangkan sebuah website
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" name="inquiry[]" value="Mengembangkan sistem web / maintenance">
										<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>mengembangkan sistem web / maintenance
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" name="inquiry[]" value="Memasarkan Web / SEO">
										<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>memasarkan Web / SEO
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" name="inquiry[]" value="Memasang atau mengoperasikan iklan di Internet">
										<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>memasang atau mengoperasikan iklan di Internet
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" name="inquiry[]" value="Mendesain profil perusahaan atau hasil cetakan lainnya untuk pameran">
										<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>mendesain profil perusahaan atau hasil cetakan lainnya untuk pameran
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" name="inquiry[]" value="Kami mencari perusahaan yang ikut tender">
										<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>Kami mencari perusahaan yang ikut tender
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" name="inquiry[]" value="Kami mencari konsultan untuk memulai bisnis di indonesia">
										<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>Kami mencari konsultan untuk memulai bisnis di indonesia
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" name="inquiry[]" value="Kami ingin mengunjungi kantor Anda saat kami ke Jakarta untuk melakukan perjalanan bisnis">
										<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>Kami ingin mengunjungi kantor Anda saat kami ke Jakarta untuk melakukan perjalanan bisnis
									</label>
								</div>
							</div>
							
							<div class="col-md-5 col-md-offset-2 col-sm-5 col-sm-offset-3">
								<div class="g-recaptcha pull-right" data-sitekey="6LcuHywUAAAAACj__hCefsBCkoIC2ExM2Sur4cCp"></div>
								<div class="clearfix"></div><br>
							</div>
							<div class="col-sm-3 col-sm-offset-4 paddingleft">
								<button type="submit" class="btn btn-block" onclick="ga('send', 'event', 'Button-Kirim', 'Action-Click', 'Button-Kirim-Label');" style="background: #f4ce58;">Kirim</button>
							</div>
						</form>
					</div>
				</div>
				
				<div class="bg-grey clearfix" style="padding-bottom: 10%;">
					<div class="title-bg-grey col-lg-11 col-lg-offset-1 col-md-11 col-md-offset-1">
						Jika Anda ingin mendapatkan informasi lebih lanjut mengenai berbagai hal yang berkaitan dengan Logique, Silahkan 
						pilih salah satu opsi di bawah ini:
						<div class="col-sm-12">
							<hr class="col-sm-4 col-sm-offset-4 bar-yellow" style="padding: 5px 0; border: none;">
						</div>
					</div>
				</div>
				<div class="col-lg-9 col-lg-offset-2 col-md-11 col-md-offset-1 col-sm-12 float-box" style="margin-top: 24px; position: relative;">
					<div class="col-md-3 col-sm-3 col-xs-6" style="margin-top: 12px;">
						<div class="yellow-box">
							<img class="img-box" src="img/global_1.png" alt="">
							<dt>Layanan</dt>
						</div>
					</div>
					<div class="col-md-3 col-sm-3 col-xs-6" style="margin-top: 12px;">
						<div class="yellow-box">
							<img class="img-box" src="img/hr.png" alt="">
							<dt>Produk</dt>
						</div>
					</div>
					<div class="col-md-3 col-sm-3 col-xs-6" style="margin-top: 12px;">
						<div class="yellow-box">
							<img class="img-box" src="img/group_3.png" alt="">
							<dt>Tentang Kami</dt>
						</div>
					</div>
					<div class="col-md-3 col-sm-3 col-xs-6" style="margin-top: 12px;">
						<div class="yellow-box">
							<img class="img-box" class="" src="img/promotion_1.png" alt="">
							<dt>Karir</dt>
						</div>
					</div>
				</div>
				<div class="col-lg-9 col-lg-offset-2 col-md-11 col-md-offset-1">
					<div class="d-title text-center"><b>Prosedur Permintaan Informasi</b></div>
					<div class="col-sm-12">
						<hr class="col-sm-2 col-sm-offset-5 bar-yellow" style="padding: 5px 0; border: none;">
					</div>
					<div class="overflow-auto">
						<ul class="timeline timeline-horizontal"  style="padding-left: 1em;">
							
							<li class="timeline-item">
								<div class="timeline-badge primary"></div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<img src="img/call_center.png" alt="">
									</div>
									<div class="timeline-body">
										<p class="abs-box">
											Kami akan menghubungi anda dalam 2 hari kerja
										</p>
									</div>
								</div>
							</li>
							<li class="timeline-item">
								<div class="timeline-badge success"></div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<img src="img/employee.png" alt="">
									</div>
									<div class="timeline-body">
										<p class="abs-box">
											Kami akan mengkonfirmasi beberapa hal dengan Anda
										</p>
									</div>
								</div>
							</li>
							<li class="timeline-item">
								<div class="timeline-badge info"></div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<img src="img/confidential.png" alt="">
									</div>
									<div class="timeline-body">
										<p class="abs-box">
											Kami akan memperdetil kebutuhan serta membuat proposal proyek untuk Anda 
										</p>
									</div>
								</div>
							</li>
							<li class="timeline-item">
								<div class="timeline-badge danger"></div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<img src="img/contract.png" alt="">
									</div>
									<div class="timeline-body">
										<p class="abs-box">
											Pembuatan kontrak dan memulai pengerjaan proyek
										</p>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-9 col-lg-offset-2 col-md-11 col-md-offset-1 col-sm-12" style="margin-top: 1em;">
					<div class="clearfix" style="padding-left: 1em;">
						<dt class="d-title">Pertanyaan yang sering diajukan:</dt>
						<hr class="col-sm-1 col-xs-2 bar-yellow" style="padding: 5px 0; border: none;">
					</div>
					<div class="container mt-12" id="accordion" style="width:100%;">
						
						<div class="panel-group" id="accordion">
							
							<div class="panel panel-default">
								<div class="panel-heading" type="button" data-toggle="collapse" data-parent="#accordion" data-target="#collapse1">
									<dt class="panel-title">
										<i class="fa fa-question-circle">&nbsp;</i><a >Apakah memungkinkan bagi Anda untuk memproses proyek menggunakan Bahasa Inggris?</a>
									</dt>
								</div>
								<div id="collapse1" class="panel-collapse collapse in">
									<div class="panel-body">
										Pada umumnya bisa saja, tapi mungkin akan ada beberapa kesulitan ketika memprosesnya dalam bahasa Inggris. 
										Namun, Anda tidak perlu khawatir sebab kebanyakan dari staff kamu mampu berkomunikasi dengan bahasa Inggris cukup untuk memproses proyek tersebut. 
										Kami juga menerima proyek yang berasal dari perusahaan di luar negeri.
									</div>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<dt class="panel-title" type="button" data-toggle="collapse" data-parent="#accordion" data-target="#collapse2">
										<i class="fa fa-question-circle">&nbsp;</i><a>Dapatkah Anda mengadakan pertemuan di luar negeri?</a>
									</dt>
								</div>
								<div id="collapse2" class="panel-collapse collapse">
									<div class="panel-body">
										Terkait hal ini kami akan mendiskusikannya dengan Anda terlebih dahulu. 
										Biasanya kami menawarkan percakapan via video seperti Skype untuk melakukan hal tersebut, 
										tapi kami juga dapat bersikap fleksibel tergantung dari kondisi dan kasus yang dihadapi.
									</div>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<dt class="panel-title" type="button" data-toggle="collapse" data-parent="#accordion" data-target="#collapse3">
										<i class="fa fa-question-circle">&nbsp;</i><a>
											Kami berpikir untuk mengganti outsourcer sistem atau website kami dan dengan tim Anda.
										</a>
									</dt>
								</div>
								<div id="collapse3" class="panel-collapse collapse">
									<div class="panel-body">
										Silahkan hubungi kami jika Anda berpikir seperti itu, jangan ragu dan khawatir perihal dokumentasi dan sebagainya. 
										Sebab, pada beberapa kasus yang telah kami alami, kami dapat mengelola dan mengoperasikan web / sistem meskipun dengan 
										dokumentasi yang minim selama outsourcer sebelumnya menggunakan teknologi yang pada umumnya telah dipakai.
									</div>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<dt class="panel-title" type="button" data-toggle="collapse" data-parent="#accordion" data-target="#collapse4">
										<i class="fa fa-question-circle">&nbsp;</i><a>
											Kami mencari developer untuk membangun sebuah sistem manajemen untuk bisnis kami.
										</a>
									</dt>
								</div>
								<div id="collapse4" class="panel-collapse collapse">
									<div class="panel-body">
										Dengan pengalaman kami sebagai pengembang sistem, kami dapat mengembangkan berbagai macam sistem, seperti sistem manajemen pelanggan, 
										sistem manajemen peminjaman, sistem rekrutmen, sistem penunjuk, e-commerce, sistem manajemen konten, dan lain-lain. Kami juga ahli dalam pengembangan 
										sistem dengan teknologi website yang umumnya digunakan. Silahkan hubungi kami untuk berdiskusi dan menanyakan hal ini lebih lanjut.
									</div>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<dt class="panel-title" type="button" data-toggle="collapse" data-parent="#accordion" data-target="#collapse5">
										<i class="fa fa-question-circle">&nbsp;</i><a>
											Kami ingin bermitra atau menjadi distributor LOGIQUE.
										</a>
									</dt>
								</div>
								<div id="collapse5" class="panel-collapse collapse">
									<div class="panel-body">
										Mari kita bicarakan hal ini secara rinci. Silahkan kunjungi kantor kami jika Anda mempunyai rencana ke Jakarta.
									</div>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<dt class="panel-title" type="button" data-toggle="collapse" data-parent="#accordion" data-target="#collapse6">
										<i class="fa fa-question-circle">&nbsp;</i><a>
											Kami ingin membuat aplikasi Android atau iOS (iPhone).
										</a>
									</dt>
								</div>
								<div id="collapse6" class="panel-collapse collapse">
									<div class="panel-body">
										Kami mampu mengembangkan aplikasi Android dan iOS untuk Anda. Jika Anda inginkan, kami dapat merencanakan pembuatan aplikasi tersebut untuk Anda.
									</div>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<dt class="panel-title" type="button" data-toggle="collapse" data-parent="#accordion" data-target="#collapse7">
										<i class="fa fa-question-circle">&nbsp;</i><a>
											Kami ingin mencetak alat pemasaran tapi apakah Anda juga menyediakan layanan pencetakan selain desain?
										</a>
									</dt>
								</div>
								<div id="collapse7" class="panel-collapse collapse">
									<div class="panel-body">
										Tentu saja kami dapat membantu mendesain dan mencetak pamflet sekaligus untuk Anda. 
										Selain itu, kami juga bisa mendesain dan mencetak produk lainnya seperti kaos. Namun, 
										jika Anda ingin mencetak sesuatu yang sangat sulit, lebih baik Anda mencari perusahaan percetakan khusus. 
										Kami juga dapat memperkenalkan kepada Anda perusahaan yang kami tahu jika Anda menginginkannya.
									</div>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<dt class="panel-title" type="button" data-toggle="collapse" data-parent="#accordion" data-target="#collapse8">
										<i class="fa fa-question-circle">&nbsp;</i><a>
											Apakah Anda mampu mengimplementasikan SEO dalam bahasa Indonesia?
										</a>
									</dt>
								</div>
								<div id="collapse8" class="panel-collapse collapse">
									<div class="panel-body">
										Ya, kami mempunyai keahlian SEO yang kami tunjukkan di berbagai situs yang telah berada di deretan paling atas pada berbagai industri,
										seperti keuangan, perjalanan, pendidikan, dan lain-lain. Tim kami terdiri dari penulis konten dan pemasaran yang berasal dari Indonesia
										yang akan memberikan hasil terbaik untuk pelayanan SEO bagi Anda. Selain itu, kami juga dapat menerapkan SEO dalam bahasa Inggris dan Jepang dengan baik.
									</div>
								</div>
							</div>
							
						</div>
						
						<div class="map-container">
							<iframe title="Office Map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1982.8748090433066!2d106.82702104991579!3d-6.296598097694437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f206effdebf1%3A0xca2d9403de2bfbe1!2sAD+Premier+Office+Park!5e0!3m2!1sen!2sid!4v1499330296225" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- dummy -->
		<!-- <div>
			<br>
			<div class="klien-flow contact-flow row">
				<div class="col-sm-3">
					<div class="div-for-workflow">
						<div class="valign-center">
							Kami akan menghubungi Anda dalam 2 hari kerja.
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="div-for-workflow">
						<div class="valign-center">
							Kami akan mengkonfirmasi beberapa hal dengan Anda.
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="div-for-workflow">
						<div class="valign-center">
							Kami akan mendetilkan kebutuhan serta membuatkan proposal proyek untuk Anda. 
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="div-for-workflow">
						<div class="valign-center">
							Pembuatan kontrak dan memulai pengerjaan proyek.
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			
			<div class="label-questions">Pertanyaan yang sering diajukan:</div>
			<div class="question">Apakah memungkinkan bagi Anda untuk memproses proyek menggunakan Bahasa Inggris?</div>
			<div class="answer">Pada umumnya bisa saja, tapi mungkin akan ada beberapa kesulitan ketika memprosesnya dalam bahasa Inggris. Namun, Anda tidak perlu khawatir sebab kebanyakan dari staff kamu mampu berkomunikasi dengan bahasa Inggris cukup untuk memproses proyek tersebut. Kami juga menerima proyek yang berasal dari perusahaan di luar negeri.</div>
			<br/>
			<div class="question">Dapatkah Anda mengadakan pertemuan di luar negeri?</div>
			<div class="answer">Terkait hal ini kami akan mendiskusikannya dengan Anda terlebih dahulu. Biasanya kami menawarkan percakapan via video seperti Skype untuk melakukan hal tersebut, tapi kami juga dapat bersikap fleksibel tergantung dari kondisi dan kasus yang dihadapi.</div><br/>
			
			<div class="question">Kami berpikir untuk mengganti outsourcer sistem atau website kami dan dengan tim Anda.</div>
			<div class="answer">Silahkan hubungi kami jika Anda berpikir seperti itu, jangan ragu dan khawatir perihal dokumentasi dan sebagainya. Sebab, pada beberapa kasus yang telah kami alami, kami dapat mengelola dan mengoperasikan web / sistem meskipun dengan dokumentasi yang minim selama outsourcer sebelumnya menggunakan teknologi yang pada umumnya telah dipakai.</div><br/>
			
			<div class="question">Kami mencari developer untuk membangun sebuah sistem manajemen untuk bisnis kami.</div>
			<div class="answer">Dengan pengalaman kami sebagai pengembang sistem, kami dapat mengembangkan berbagai macam sistem, seperti sistem manajemen pelanggan, sistem manajemen peminjaman, sistem rekrutmen, sistem penunjuk, e-commerce, sistem manajemen konten, dan lain-lain. Kami juga ahli dalam pengembangan sistem dengan teknologi website yang umumnya digunakan. Silahkan hubungi kami untuk berdiskusi dan menanyakan hal ini lebih lanjut.</div><br/>
			
			<div class="question">Kami ingin bermitra atau menjadi distributor LOGIQUE.</div>
			<div class="answer">Mari kita bicarakan hal ini secara rinci. Silahkan kunjungi kantor kami jika Anda mempunyai rencana ke Jakarta.</div><br/>
			
			<div class="question">Kami ingin membuat aplikasi Android atau iOS (iPhone).</div>
			<div class="answer">Kami mampu mengembangkan aplikasi Android dan iOS untuk Anda. Jika Anda inginkan, kami dapat merencanakan pembuatan aplikasi tersebut untuk Anda.</div><br/>
			
			<div class="question">Kami ingin mencetak alat pemasaran tapi apakah Anda juga menyediakan layanan pencetakan selain desain?</div>
			<div class="answer">Tentu saja kami dapat membantu mendesain dan mencetak pamflet sekaligus untuk Anda. Selain itu, kami juga bisa mendesain dan mencetak produk lainnya seperti kaos. Namun, jika Anda ingin mencetak sesuatu yang sangat sulit, lebih baik Anda mencari perusahaan percetakan khusus. Kami juga dapat memperkenalkan kepada Anda perusahaan yang kami tahu jika Anda menginginkannya.</div><br/>
			
			<div class="question">Apakah Anda mampu mengimplementasikan SEO dalam bahasa Indonesia?</div>
			<div class="answer">Ya, kami mempunyai keahlian SEO yang kami tunjukkan di berbagai situs yang telah berada di deretan paling atas pada berbagai industri, seperti keuangan, perjalanan, pendidikan, dan lain-lain. Tim kami terdiri dari penulis konten dan pemasaran yang berasal dari Indonesia yang akan memberikan hasil terbaik untuk pelayanan SEO bagi Anda. Selain itu, kami juga dapat menerapkan SEO dalam bahasa Inggris dan Jepang dengan baik.</div><br/>						
			
		</div> -->
		
		<?php include 'footer.php';?>
		<script>
			$(function() {
				$('.smooth').click(function() {
					if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
						var target = $(this.hash);
						target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
						if (target.length) {
							$('html, body').animate({
								scrollTop: target.offset().top
							}, 1000);
							return false;
						}
					}
				});
			});
		</script>
	</div>
</body>
</html>