<?php
require_once("../form/fgcontactform.php");

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
<html lang="ja">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=3.0">
	<meta name="description" itemprop="description" content="LOGIQUEはインドネシア、他の東南アジアの国でクライアントのWEBマーケティングをWEBサイト制作、WEBシステム開発、モバイルアプリ開発、SEO対策、アクセス解析などで成功に導いてきました。インドネシアでWEBを成功のキーとお考えであれば、LOGIQUEにご相談ください。">
	<meta name="keywords" content="お問い合わせ, WEBサイト制作, ホームページ制作,ウェブシステム構築, WEBマーケティング, パンフレット, モバイルアプリ構築">
	<meta name="author" content="PT. Logique Digital Indonesia">
	<meta property="og:title" content="Web / ホームページの制作運用 デジタルマーケティングに関するお問い合わせ | LOGIQUE デジタルインドネシア">
	<meta property="og:type" content="website">
	<meta property="og:site_name" content="Logique">
	<meta property="og:url" content="https://www.logique.co.id/jp/contact.php">
	<meta property="og:image" content="https://www.logique.co.id/img/og-image.png">
	<meta property="og:description" content="LOGIQUEはインドネシアや他の東南アジアの国で、クライアントにWEBサイト制作、WEBシステム開発、モバイルアプリ開発、SEO対策、アクセス解析などデジタルマーケティングサービスを提供してきました。7年間の大企業向けの豊富な実績があります。デジタル領域のベンダー選定がインドネシアでの成功のキーとお考えであれば、LOGIQUEにご相談ください。">
	<link rel="shortcut icon" type="image/x-icon" href="../favicon.ico">
	<title>Web / ホームページの制作運用 デジタルマーケティングに関するお問い合わせ | LOGIQUE デジタルインドネシア</title>
	
	<!-- Bootstrap -->
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	
	<link href="../css/style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
	<link href="/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=M+PLUS+1p:400,500,700" rel="stylesheet">
	<link href="../css/jpstyle.css" rel="stylesheet">
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
	
	.box-link{
		color:#000;
	}
	
	.box-link:hover{
		opacity: 1;
		color: #000;
	}
	
	.yellow-box:hover{
		background: #ffc6007a;
	}
	
	.lang-logo{
		margin-top: 0;
	}

	/* Custom Checkbox */
	.checkbox label{
		padding-left: 0;
	}

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
		width: 1.5em;
		height: 1.5em;
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
		.contact-us-cont{
			width: 100%;
		}
		.d-title-large{
			font-size: larger;
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
		.btn-hubungi{
			margin-top: 0;
			float: right;
		}
		.contact-us-cont{
			text-align: left;
			font-size: medium;
		}
		.first-title{
			font-size: x-large;
		}
		.contact-title-copies{
			padding: 10px 30px;
		}
		.checkbox label{
			padding-left: 0;
			font-size: smaller;
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
			<div class="logique-nav in-jp">
				<div class="margin-for-nav">
					<div class="text-center">
						<a href="index.php">
							<div class="img-home"></div>
							Home
						</a>
					</div>
					<div class="text-center">
						<a href="logique.php">
							<div class="img-about"></div>
							会社概要
						</a>
					</div>
					<div class="text-center">
						<a href="portfolio.php">
							<div class="img-portfolio"></div>
							制作実績
						</a>
					</div>
					<div class="text-center">
						<a href="services.php">
							<div class="img-services"></div>
							サービス
						</a>
					</div>
					<div class="text-center">
						<a href="product.php">
							<div class="img-product"></div>
							プロダクト
						</a>
					</div>
					<div class="text-center">
						<a href="/career/">
							<div class="img-career"></div>
							採用/<br>パートナー
						</a>
					</div>
					<div class="text-center active">
						<a href="contact.php">
							<div class="img-contact"></div>
							お問い合わせ
						</a>
					</div>
					<div class="text-center">
						<a href="https://www.logique.co.id/blog/ja" target="_blank" rel="noreferrer">
							<div class="img-blog"></div>
							Blog
						</a>
					</div>
				</div>
			</div>
		</div>
		<!-- NAVIGATION -->
		
		<!-- <div id="bgImg" class="others"><div class="img"></div></div> -->
		<!-- <div class="contain-video">
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
								<li><a href="../en/contact.php">EN</a></li>
								<li><a href="../hubungi-kami.php">ID</a></li>
								<li class="active"><a href="#">JP</a></li>
							</ul>
							<a href="index.php"><img src="../img/logo.png" alt="Logo" class="img-responsive logo"/></a>
							<ol class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
								<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="index.php"><span itemprop="name">Home</span></a><meta itemprop="position" content="1" /></li>
								<li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" ><a itemprop="item" ><span itemprop="name">LOGIQUEへのお問い合わせ</span></a><meta itemprop="position" content="2" /></li>
							</ol>
							<h1 class="tagline">Webシステム開発、ホームページ制作、デジタルマーケティング、モバイルアプリ開発、インドネシアでのITコンサルティングなどお気軽にご相談ください。
							</h1>
						</div>
					</div>
				</div>
			</div>			
			
			<br/> -->
			
			<div id="contentsArea">
				<div class="clearfix" id="contents">
					<div class="col-md-11 col-md-offset-1 col-sm-11 col-sm-offset-1" style="background: #fff; margin-top: 20px;">
						<a href="index.php"><img src="../img/logo.png" alt="Logo" class="logo hidden-xs"/></a>
						<div class="lang-logo">
							<ul class="list-inline">
								<li><a href="../en/contact.php">EN</a></li>
								<li><a href="../hubungi-kami.php">ID</a></li>
								<li class="active"><a href="#">JP</a></li>
							</ul>
						</div>
					</div>
					<div class="clearfix"></div>
					<!-- header -->
					<div class="contact-title-copies mt-12 clearfix">
						<br>
						<span class="first-title" style="padding-bottom: 3px;">Contact Us<br class="visible-xs"> こんな事でお困りであれば</span>
						<hr class="col-sm-4 col-sm-offset-4 bar-yellow" style="padding: 5px 0; border: none;">
					</div>
					<div class="form-container col-sm-12 bg-grey" style="padding-top: 10px;">
						<div class="text-center container contact-us-cont">
							<span class="yellow"><strong>Web</strong></span>を営業の重要な１チャネルとして、集客力のあるWEBに改良したい.<br>
							インターネットテクノロジーやAIなど先進技術を活用した新ビジネスを立ち上げたい<br>
							社内管理システムが必要、パッケージ導入ではなく、要件にあったシステムを構築したい<br>
							インドネシアで成長するためにデジタルマーケティングの実施が必要<br>
							既存のWeb・システムの運用保守をインドネシア国内の業者にまかせたい
						</div>
					</div>
					<div class="form-container col-md-12 col-sm-12" style="height: fit-content; background: #000;">
						<div class="col-sm-5 col-xs-4">
							<img class="img-vector" src="../img/vector_smart_object.png" alt="" style="">
						</div>
						<div class="col-md-6 col-sm-5" style="padding: 32px 0;">
							<dt class="d-title" style="color: #fff; text-align: left;">
								LOGIQUEはインドネシアをはじめとした東南アジアの国々でクライアントのWebマーケティングを成功に導いてきました。Webサイト制作（ホームページ制作）、
								Webシステム開発、モバイルアプリ開発、SEO対策、アクセス解析、デジタル広告運用などデジタルマーケティング関連ソリューションをワンストップで対応可能ですので、
								まずはお気軽にご相談ください。
							</dt>
							<br>
							<a class="btn btn-hubungi smooth" href="#anchorForm" style="font-size: medium; font-weight: 600;">
								お問い合わせ
							</a>
						</div>
					</div>
					<!-- end of header -->
					
					<div class="contact-us-cont">
						<div class="col-sm-5 col-sm-offset-1" style="padding: 1em 0;">
							<img class="" src="../img/kontak-img.jpg" alt="Hubungi Kami Logique" style="width: 100%; height: auto; max-width: 500px; object-fit: scale-down; border: 2px solid black; padding: 2%;"/>
						</div>
						<div class="col-md-6 col-sm-6" style="padding-top: 5%;">
							<dt class="d-title" style="background: #ffd02a; padding:1em;">
								デジタルマーケティングやWeb、アプリ開発運用で課題があれば、LOGIQUEがご支援します！<br>
								<span class="d-description"><a href="https://wa.me/+62811870321?text=Halo%20Sahabat%20LOGIQUE" target="_blank" rel="noreferrer">  +62 811-870-321</a> / <a href="tel:021-2270-8935">021-2270-8935</a> / infoアットマークlogique.co.id</span>
							</dt>
							<p class="d-description">
								コンサルティング会社出身者がジャカルタに設立したデジタルマーケティング支援会社です。
								常に質の高い、価値の高いサービス提供を心がけています。お客様の課題をお聞かせいただいたらIT・デジタルの力を活用してそれを解決するソリューションを提案いたします。
								インドネシア語、英語、日本語のいずれでもお気軽にお問合せください。
							</p>
						</div>
						<br>
						<div class="col-md-9 col-md-offset-2 col-sm-10 col-sm-offset-1 text-center mt-12">
							<br>
							<dt class="d-title" style="margin-top: 3%;text-align: left; line-height: 1.5;">
								インドネシアで新規事業を立ち上げる、Webでブランディング・集客したい、オンラインで製品・サービスを売りたい、CRMシステム、
								人事管理システムが必要だ、インドネシア語でSEO対策したい、インドネシア国内でインターネット広告を出稿したい、
								ジャカルタ視察時にインドネシアネットビジネスについて聞きたいなど様々なお問い合わせをいただいています。お気軽に長谷川、吉次までご連絡ください。
							</dt>
							<!-- <hr class="col-sm-4 col-sm-offset-4 bar-yellow" style="padding: 5px 0; border: none;"> -->
						</div>
						
						<div class="col-sm-8 col-sm-offset-2 text-center sosmed-contact" style="margin-top: 1em;">
							<br>
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
							<form class="contactform mt-12" id="moresco-contactform" role="form" name='myForm' onsubmit='return validateForm()' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
								<input type='hidden' name='submitted' id='submitted' value='1'/>
								<input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
								<div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
								<div class="col-md-8 col-md-offset-2 col-sm-11" id="anchorForm">
									<label for="companyname" class="c-label">Company Name</label>
									<div class="form-group">
										<input type="text" class="form-control" id="companyname" name="companyname" aria-label="Company Name" value='<?php echo $formproc->SafeDisplay('companyname') ?>' placeholder="COMPANY NAME">
									</div>
								</div> 
								<div class="col-md-8 col-md-offset-2 col-sm-11">
									<label for="name" class="c-label">Name</label>
									<div class="form-group">
										<input type="text" class="form-control" id="name" name="name" aria-label="Name" value='<?php echo $formproc->SafeDisplay('name') ?>' placeholder="NAME">
									</div>
								</div>
								
								<div class="col-md-8 col-md-offset-2 col-sm-11">
									<label for="phone" class="c-label">Phone Number</label>
									<div class="form-group">
										<input type="number" class="form-control" id="phone" name="phone" aria-label="Phone" value='<?php echo $formproc->SafeDisplay('phone') ?>' placeholder="PHONE NUMBER">
									</div>
								</div>
								<div class="col-md-8 col-md-offset-2 col-sm-11">
									<label for="email" class="c-label">Email</label>
									<div class="form-group">
										<input type="email" class="form-control" id="email" name="email" aria-label="Email" value='<?php echo $formproc->SafeDisplay('email') ?>' placeholder="E-MAIL">
									</div>
								</div>
								
								<div class="col-md-8 col-md-offset-2 col-sm-11">
									<label for="message" class="c-label">Message</label>
									<div class="form-group" style="margin-top: 10px;">
										<textarea class="form-control" name="message" aria-label="Message" placeholder="MESSAGE"><?php echo $formproc->SafeDisplay('message') ?></textarea>
									</div>
								</div>
								
								<div class="col-md-8 col-md-offset-2 col-sm-11">
									<b>お問合せ項目:</b>  <i>（複数回答可）</i>
								</div>
								
								<div class="col-md-8 col-md-offset-2 col-sm-11">
									<div class="checkbox">
										<label>
											<input type="checkbox" name="inquiry[]" value="Web / ホームページ制作運用について">
											<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>Web / ホームページ制作運用について
										</label>
									</div>
									<div class="checkbox">
										<label>
											<input type="checkbox" name="inquiry[]" value="Web / ITシステム開発運用に関するご相談">
											<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>Web / ITシステム開発運用に関するご相談
										</label>
									</div>
									<div class="checkbox">
										<label>
											<input type="checkbox" name="inquiry[]" value="デジタルマーケティング・SEOなどについて">
											<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>デジタルマーケティング・SEOなどについて
										</label>
									</div>
									<div class="checkbox">
										<label>
											<input type="checkbox" name="inquiry[]" value="インドネシアのネット広告に関して">
											<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>インドネシアのネット広告に関して
										</label>
									</div>
									<div class="checkbox">
										<label>
											<input type="checkbox" name="inquiry[]" value="コンテンツ制作や販促物制作に関して">
											<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>コンテンツ制作や販促物制作に関して
										</label>
									</div>
									<div class="checkbox">
										<label>
											<input type="checkbox" name="inquiry[]" value="入札参加企業を探している">
											<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>入札参加企業を探している
										</label>
									</div>
									<div class="checkbox">
										<label>
											<input type="checkbox" name="inquiry[]" value="インドネシア進出に関して相談したい">
											<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>インドネシア進出に関して相談したい
										</label>
									</div>
									<div class="checkbox">
										<label>
											<input type="checkbox" name="inquiry[]" value="ジャカルタ視察旅行時に会社訪問したい">
											<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>ジャカルタ視察旅行時に会社訪問したい
										</label>
									</div>
								</div>
								
								<div class="col-md-5 col-md-offset-2 col-sm-5 col-sm-offset-3">
									<div class="g-recaptcha pull-right" data-sitekey="6LcuHywUAAAAACj__hCefsBCkoIC2ExM2Sur4cCp"></div>
									<div class="clearfix"></div><br>
								</div>
								<div class="col-sm-4 col-sm-offset-3">
									<button type="submit" class="btn btn-block" onclick="ga('send', 'event', 'Button-Kirim-JP', 'Action-Click', 'Button-Kirim-JP-Label');" style="background: #f4ce58; font-size: larger;">送信</button>
								</div>
							</form>
						</div>
					</div>
					
					<div class="bg-grey clearfix" style="padding-bottom: 10%;">
						<div class="title-bg-grey col-lg-11 col-lg-offset-1 col-md-11 col-md-offset-1">
							弊社に関するより詳しい情報をお探しの方は、以下のカテゴリーをクリックして下さい。
							<div class="col-sm-12">
								<hr class="col-sm-4 col-sm-offset-4 bar-yellow" style="padding: 5px 0; border: none;">
							</div>
						</div>
					</div>
					<div class="col-lg-9 col-lg-offset-2 col-md-11 col-md-offset-1 col-sm-12 float-box" style="margin-top: 24px; position: relative;">
						<div class="col-md-3 col-sm-3 col-xs-6" style="margin-top: 12px;">
							<a class="box-link" href="services.php">
								<div class="yellow-box">
									<img class="img-box" src="../img/global_1.png" alt="">
									<dt>サービス</dt>
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-6" style="margin-top: 12px;">
							<a class="box-link" href="product.php">
								<div class="yellow-box">
									<img class="img-box" src="../img/hr.png" alt="">
									<dt>プロダクト</dt>
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-6" style="margin-top: 12px;">
							<a class="box-link" href="logique.php">
								<div class="yellow-box">
									<img class="img-box" src="../img/group_3.png" alt="">
									<dt>会社概要</dt>
								</div>
							</a>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-6" style="margin-top: 12px;">
							<a class="box-link" href="../career">
								<div class="yellow-box">
									<img class="img-box" class="" src="../img/promotion_1.png" alt="">
									<dt>採用/パートナー</dt>
								</div>
							</a>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="col-lg-9 col-lg-offset-2 col-md-11 col-md-offset-1 col-xs-12">
						<div class="d-title-large text-center"><b>お問合せからの流れ</b></div>
						<div class="col-sm-12">
							<hr class="col-sm-2 col-sm-offset-5 bar-yellow" style="padding: 5px 0; border: none;">
						</div>
						<div class="overflow-auto">
							<ul class="timeline timeline-horizontal"  style="padding-left: 1em;">
								
								<li class="timeline-item">
									<div class="timeline-badge primary"></div>
									<div class="timeline-panel">
										<div class="timeline-heading">
											<img src="../img/call_center.png" alt="">
										</div>
										<div class="timeline-body">
											<p class="abs-box">
												お問合せ後、通常1営業日以内に返信いたします。
											</p>
										</div>
									</div>
								</li>
								<li class="timeline-item">
									<div class="timeline-badge success"></div>
									<div class="timeline-panel">
										<div class="timeline-heading">
											<img src="../img/employee.png" alt="">
										</div>
										<div class="timeline-body">
											<p class="abs-box">
												簡易な、確認・ご提案をさせていただきます。
											</p>
										</div>
									</div>
								</li>
								<li class="timeline-item">
									<div class="timeline-badge info"></div>
									<div class="timeline-panel">
										<div class="timeline-heading">
											<img src="../img/confidential.png" alt="">
										</div>
										<div class="timeline-body">
											<p class="abs-box">
												ヒアリング＆ご提案
											</p>
										</div>
									</div>
								</li>
								<li class="timeline-item">
									<div class="timeline-badge danger"></div>
									<div class="timeline-panel">
										<div class="timeline-heading">
											<img src="../img/contract.png" alt="">
										</div>
										<div class="timeline-body">
											<p class="abs-box">
												ご成約〜プロジェクト開始
											</p>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-9 col-lg-offset-2 col-md-11 col-md-offset-1 col-sm-12 col-xs-12" style="margin-top: 1em;">
						<div class="clearfix" style="padding-left: 1em;">
							<dt class="d-title-large">よくあるご質問・ご相談</dt>
							<hr class="col-sm-1 col-xs-2 bar-yellow" style="padding: 5px 0; border: none;">
						</div>
						<div class="container mt-12" id="accordion" style="width:100%;">
							
							<div class="panel-group" id="accordion">
								
								<div class="panel panel-default">
									<div class="panel-heading" type="button" data-toggle="collapse" data-parent="#accordion" data-target="#collapse1">
										<dt class="panel-title">
											<i class="fa fa-question-circle">&nbsp;</i><a >日本人同士で日本語で相談・プロジェクト進行できるのか？</a>
										</dt>
									</div>
									<div id="collapse1" class="panel-collapse collapse in">
										<div class="panel-body">
											案件の内容によりますが、可能です。インドネシアでのプロジェクトを日本の部署の日本人担当者さまと、弊社日本人がやり取りさせていただきながらの進行も可能です。
											オフショア案件のご相談も受け付けております。現在、日本人が2人と、日本語が堪能なインドネシア人も1人おります。
										</div>
									</div>
								</div>
								
								<div class="panel panel-default">
									<div class="panel-heading">
										<dt class="panel-title" type="button" data-toggle="collapse" data-parent="#accordion" data-target="#collapse2">
											<i class="fa fa-question-circle">&nbsp;</i><a>日本で打ち合わせすることは可能ですか？</a>
										</dt>
									</div>
									<div id="collapse2" class="panel-collapse collapse">
										<div class="panel-body">
											まずはご相談ください。原則、SKYPEミーティングなどをお願いしておりますが、ご相談内容により検討いたします。
										</div>
									</div>
								</div>
								
								<div class="panel panel-default">
									<div class="panel-heading">
										<dt class="panel-title" type="button" data-toggle="collapse" data-parent="#accordion" data-target="#collapse3">
											<i class="fa fa-question-circle">&nbsp;</i><a>
												いま委託しているWEB・システム会社から乗り換えを検討している.
											</a>
										</dt>
									</div>
									<div id="collapse3" class="panel-collapse collapse">
										<div class="panel-body">
											ドキュメントが無いなどで運用会社の変更を躊躇されるお客様が多いのですが、十分な引継ぎがなくても一般的なテクノロジーで作られたWEB/システムであれば、
											引継ぎ、修正、運用が可能なケースがほとんどです。お気軽にご相談ください。
										</div>
									</div>
								</div>
								
								<div class="panel panel-default">
									<div class="panel-heading">
										<dt class="panel-title" type="button" data-toggle="collapse" data-parent="#accordion" data-target="#collapse4">
											<i class="fa fa-question-circle">&nbsp;</i><a>
												Webサイトは写真やコピーライティングもやってくれるの？
											</a>
										</dt>
									</div>
									<div id="collapse4" class="panel-collapse collapse">
										<div class="panel-body">
											オプションとして写真撮影、動画撮影＆加工、コンテンツ制作もご提案可能です。
										</div>
									</div>
								</div>
								
								<div class="panel panel-default">
									<div class="panel-heading">
										<dt class="panel-title" type="button" data-toggle="collapse" data-parent="#accordion" data-target="#collapse5">
											<i class="fa fa-question-circle">&nbsp;</i><a>
												いま委託しているWeb・システム会社から乗り換えを検討している。
											</a>
										</dt>
									</div>
									<div id="collapse5" class="panel-collapse collapse">
										<div class="panel-body">
											ドキュメントが無いなどで運用会社の変更を躊躇されるお客様が多いのですが、十分な引継ぎがなくても一般的なテクノロジーで作られたWeb/システムであれば、
											引継ぎ、修正、運用が可能なケースがほとんどです。お気軽にご相談ください。
										</div>
									</div>
								</div>
								
								<div class="panel panel-default">
									<div class="panel-heading">
										<dt class="panel-title" type="button" data-toggle="collapse" data-parent="#accordion" data-target="#collapse6">
											<i class="fa fa-question-circle">&nbsp;</i><a>
												どんなプログラミング言語での開発が可能か？
											</a>
										</dt>
									</div>
									<div id="collapse6" class="panel-collapse collapse">
										<div class="panel-body">
											PHPフレームワークを使った開発が件数としては一番多いです。Laravel、Symfony、CakePHPなどを使用することが多いですが、お客様の環境やご要望に応じて柔軟に対応します。
										</div>
									</div>
								</div>
								
								<div class="panel panel-default">
									<div class="panel-heading">
										<dt class="panel-title" type="button" data-toggle="collapse" data-parent="#accordion" data-target="#collapse7">
											<i class="fa fa-question-circle">&nbsp;</i><a>
												費用と期間についてどのように考えればよいのか？
											</a>
										</dt>
									</div>
									<div id="collapse7" class="panel-collapse collapse">
										<div class="panel-body">
											アジャイル開発の手法をとっておりますので、できる限りフェーズを短く区切って、素早くトライアル公開（利用）できるようにしています。
											大規模なシステム開発でも3ヶ月くらいでで目に見える形の成果物を完成させるようにしています。費用は必要な作業量をベースにお見積りいたします。詳細はお問い合わせください。
										</div>
									</div>
								</div>
								
								<div class="panel panel-default">
									<div class="panel-heading">
										<dt class="panel-title" type="button" data-toggle="collapse" data-parent="#accordion" data-target="#collapse8">
											<i class="fa fa-question-circle">&nbsp;</i><a>
												要件が決まらないのだが？
											</a>
										</dt>
									</div>
									<div id="collapse8" class="panel-collapse collapse">
										<div class="panel-body">
											アジャイル型開発（スクラム）で期間を決めて、モックアップを作ってしまうことをお奨めします。
											また次の期間でそれを改善・最適化していくというように進めていくほうが、要件定義に時間をかけるよりもずっと効率的＆効果的です。
										</div>
									</div>
								</div>
								
								<div class="panel panel-default">
									<div class="panel-heading">
										<dt class="panel-title" type="button" data-toggle="collapse" data-parent="#accordion" data-target="#collapse9">
											<i class="fa fa-question-circle">&nbsp;</i><a>
												業務システムを開発できる会社を探しているのだが
											</a>
										</dt>
									</div>
									<div id="collapse9" class="panel-collapse collapse">
										<div class="panel-body">
											インドネシアで顧客管理システム、債権管理、販売管理、採用管理、ポイント管理、e-Commerce、コンテンツ管理システムなど様々なシステムを構築運用してきました。
											オープンなWebシステム技術を使ったシステム開発が得意です。柔軟に早く開発することが可能ですので、まずはご相談ください。
										</div>
									</div>
								</div>
								
								<div class="panel panel-default">
									<div class="panel-heading">
										<dt class="panel-title" type="button" data-toggle="collapse" data-parent="#accordion" data-target="#collapse10">
											<i class="fa fa-question-circle">&nbsp;</i><a>
												インドネシアでの制作パートナーとして検討したい。
											</a>
										</dt>
									</div>
									<div id="collapse10" class="panel-collapse collapse">
										<div class="panel-body">
											ぜひ詳細をご相談させてください。ジャカルタ視察旅行の機会には是非ともお立ち寄りください。
										</div>
									</div>
								</div>
								
								<div class="panel panel-default">
									<div class="panel-heading">
										<dt class="panel-title" type="button" data-toggle="collapse" data-parent="#accordion" data-target="#collapse11">
											<i class="fa fa-question-circle">&nbsp;</i><a>
												モバイルアプリ開発を検討している。
											</a>
										</dt>
									</div>
									<div id="collapse11" class="panel-collapse collapse">
										<div class="panel-body">
											アンドロイドアプリ、iOSアプリ開発のどちらも可能です。PWAの案件も多くなってきました。企画の段階から関与する形態も可能ですのでご相談ください。
										</div>
									</div>
								</div>
								
								<div class="panel panel-default">
									<div class="panel-heading">
										<dt class="panel-title" type="button" data-toggle="collapse" data-parent="#accordion" data-target="#collapse12">
											<i class="fa fa-question-circle">&nbsp;</i><a>
												販促物を作りたいのだがデザインだけじゃなくて印刷や製作まで可能なのか？
											</a>
										</dt>
									</div>
									<div id="collapse12" class="panel-collapse collapse">
										<div class="panel-body">
											各種販促物のデザイン制作も可能です。印刷については印刷会社のご紹介をするのが通常ですが、色校正など最後まで当社で責任もって完了することもあります。パンフレット、リーフレット
										</div>
									</div>
								</div>
								
								<div class="panel panel-default">
									<div class="panel-heading">
										<dt class="panel-title" type="button" data-toggle="collapse" data-parent="#accordion" data-target="#collapse13">
											<i class="fa fa-question-circle">&nbsp;</i><a>
												インドネシア語のSEO対策が可能ですか？
											</a>
										</dt>
									</div>
									<div id="collapse13" class="panel-collapse collapse">
										<div class="panel-body">
											可能です。金融系キーワードや旅行（訪日旅行）キーワード、教育系でSEO対策の経験があり、ビッグキーワードで上位表示を獲得しました。
											インドネシア人コンテンツライターとマーケッターがチームを組んで対策しますのでインドネシア語SEO対策が一番得意です。英語、日本語も可能です。
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
			
			<?php include 'footer.php';?>
			
		</div>
	</body>
	</html>