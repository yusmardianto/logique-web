 <?php
require_once("form/fgcontact_dokodemo.php");

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
                $msg = "<div class='alert alert-success' style='font-size: 18px;margin-top: 10px;' id='msg' role='alert'>Thank you for sending us inquiry!</div>";
            }
        } else {
            $msg = "<div class='alert alert-warning' style='font-size: 18px;margin-top: 10px;' id='msg' role='alert'>reCAPTCHA verification failed, please try again.</div>";
        }
    } else {
        $msg = "<div class='alert alert-warning' style='font-size: 18px;margin-top: 10px;' id='msg' role='alert'>Please click the reCAPTCHA box.</div>";
   }
 }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=3.0">
    <meta name="description" content="Dokodemo-Kerjaは、LOGIQUEが提供しているリモートワーク管理ツールです。リモートワーク / テレワークにて、フレキシブルに生産性をあげることに集中して効率的に働きたい従業員にも、皆にフェアな機会を与えて、さぼりを抑止したい経営者、人事マネージャーの両者にメリットのある製品・ソリューションです。トライアル利用可能ですのでお問い合わせください。">
	<meta name="keywords" content="">
	<meta name="author" content="PT LOGIQUE DIGITAL INDONESIA ">
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
	     <meta property="og:title" content=" リモートワーク・テレワーク管理｜生産性向上のための勤務管理ツール｜Dokodemo-Kerja｜LOGIQUEデジタルインドネシア">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Logique">
    <meta property="og:url" content="https://www.logique.co.id/jp/product/dokodemo-kerja.php">
    <meta property="og:image" content="https://www.logique.co.id/img/ogimg/product.png">
    <meta property="og:description"
        content="Dokodemo-Kerjaは、LOGIQUEが提供しているリモートワーク管理ツールです。リモートワーク / テレワークにて、フレキシブルに生産性をあげることに集中して効率的に働きたい従業員にも、皆にフェアな機会を与えて、さぼりを抑止したい経営者、人事マネージャーの両者にメリットのある製品・ソリューションです。トライアル利用可能ですのでお問い合わせください。">
    <title>リモートワーク・テレワーク管理｜生産性向上のための勤務管理ツール｜Dokodemo-Kerja｜LOGIQUEデジタルインドネシア</title>
	<link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style_dokodemo.css" rel="stylesheet">
	<link href="/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	  <link href="https://fonts.googleapis.com/css?family=M+PLUS+1p:400,500,700" rel="stylesheet">
	<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-105878648-1', 'auto');
	ga('send', 'pageview');

	</script>

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-KT7GBKC');</script>
	<!-- End Google Tag Manager -->
</head>
	<body class="dokodemo">
		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KT7GBKC"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
		<header>
			<div class="nav-lp">
				<button type="button" class="navbar-toggle collapsed" aria-label="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar first"></span>
					<span class="icon-bar second"></span>
					<span class="icon-bar third"></span>
				</button>
				<div class="collapse navbar-collapse" id="myNavbar">
					<div class="backdrop-test"></div>
					<div class="logique-nav logique-nav--update in-jp">
						<div class="margin-for-nav">
							<div class="text-center">
								<a href="/jp/">
									<div class="img-home"></div>
									Home
								</a>
							</div>
							<div class="text-center">
								<a href="/jp/logique.php">
									<div class="img-about"></div>
									会社概要
								</a>
							</div>
							<div class="text-center">
								<a href="/jp/portfolio.php">
									<div class="img-portfolio"></div>
									制作実績
								</a>
							</div>
							<div class="text-center">
								<a href="/jp/services.php">
									<div class="img-services"></div>
									サービス
								</a>
							</div>
							 	<div class="text-center active">
							<a href="/jp/product.php">
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
							<div class="text-center">
								<a href="/jp/contact.php">
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
			</div>
			<nav class="navbar navbar-default navbar-dokdem">
				<div class="container">
				  <div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" aria-label="navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					  <span class="sr-only">Toggle navigation</span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#" aria-label="Dokodemo Kerja Logo">
						<img src="img/dokodemo-kerja/dokodemo-logo.svg" alt="" class="img-responsive center-block">
					</a>
					<div class="pull-left visible-xs">
						<ul class="nav-lang">
							<li class="pull-left"><a href="/produk/dokodemo-kerja.php">IND</a></li>
							<li class="pull-left"><a href="/en/product/dokodemo-kerja.php">ENG</a></li>
							<li class="pull-left active">JPN</li>
						</ul>
					</div>
				  </div>
				  <div id="navbar" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
					<ul class="nav navbar-nav">
					  <li><a href="#introduction" class="smooth">はじめに</a></li>
					  <li><a href="#about" class="smooth">Dokodemo-Kerjaについて</a></li>
					  <li><a href="#fitur" class="smooth">機能</a></li>　
					  <li><a href="#benefits" class="smooth li-mt">導入メリット</a></li>　
					  <li><a href="#price" class="smooth li-mt">価格</a></li>　
					  <li><a href="#divForm" class="smooth li-mt">お問い合わせ</a></li>
					</ul>
					<a class="logique-logo-link" href="/jp/" target="_blank" aria-label="Logique Logo"><img class="pull-right img-responsive center-block logo-logique-header" src="img/dokodemo-kerja/logo_logique.png" alt="Logo Logique" /></a>
					<div class="pull-right btn-lang">
						<ul class="nav-lang hidden-xs">
							<li class="pull-left"><a href="/produk/dokodemo-kerja.php">IND</a></li>
							<li class="pull-left"><a href="/en/product/dokodemo-kerja.php">ENG</a></li>
							<li class="pull-left active">JPN</li>
						</ul>
					</div>
				  </div><!--/.nav-collapse -->
				</div><!--/.container-fluid -->
			</nav>
			<div class="container" id="introduction">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="div-top">
							<h1 class="anton title"> 自由と生産性を追求した働き方を！</h1>
							<hr/>
							<div class="content-header">
								<div class="begin-dokdem"><span style="font-size: 20px;">インドネシアでリモートワークを推進しています。 <br/>柔軟に、独立した、プロフェッショナルな働き方で、会社も従業員もハッピーに！</span>
									<br/>
								</div>
								<p>
									従業員の皆さん、毎日の通勤ストレスですよね？小さい子供の世話を誰かが代わりに見てくれれば自分の専門性を活かせるのに、もっとフレキシブルに働かせて貰えれば今よりずっと生産性発揮できるのに、などの不満ありませんか？
								</p>
								<p>
									経営者・人事マネージャの皆さん、従業員の勤怠や勤務態度の管理が大変ではないでしょうか？管理を容易にするために勤怠は悪いけど生産性は高いスタッフを切り捨ててしまったりしないでしょうか？本質的には個々のスタッフが最大限の生産性を発揮しチームとしても最大の成果を上げることがゴールです。成果をあげられるなら、自由と柔軟さを与え、高い生産性を生んでもらいたいですよね？
								</p>
								<p>
									<strong>Dokodemo-Kerja</strong>は上記を全て解決する画期的なITソリューションです。
								</p>
								<p>
									このクラウドツールを利用すれば、従業員は勤務場所の制約から開放され、好きな時間に好きな場所からのリモートワークが可能となります。いままで問題と考えられていた、さぼり、非集中などについては、ランダムにラップトップのスクリーンショットが撮られ管理者に送信されることで管理することができます。管理者は従業員の勤務時間と作業内容を突き合わせて管理することが可能となり、従業員の虚偽報告を防ぐことができます。
								</p>
								<p>
									<strong>Dokodemo-Kerja</strong>は従業員にも管理者の双方に手間がかかりません。そして従業員に手間や管理されている強いストレスを与えないことが特徴です。
								</p>
								<p>
									インドネシアの交通事情を考えると、幸福感を大きくUPする画期的なソリューションだと自負しています。雨が多い時期にだけ週に2回自宅勤務とする、出産前後だけ実家で勤務などの柔軟な勤務方法を許容する、などが可能になる他、オフィスでの勤務者にもDokodemo-Kerjaを導入することで出退勤や休憩時間の管理、過度なビデオやSNSの視聴を防ぐことが可能となります。御社においても劇的な生産性向上効果があるはずです。お試しください！
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<div class="bg-black" id="about">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="title">
							<span class="blue">Dokodemo-Kerjaについて</span><br/>
							<div class="quote">“</div>リモートワーク（テレワーク）を可能にして、従業員の生産性を向上させ、管理者の管理工数を減らす画期的なクラウドツールです。
						</div>
						<br/>
						<div class="hidden-xs"><br/><br/></div>
						<!-- <video width="100%" height="300" controls poster="/jp/product/img/dokodemo-kerja/thumb-dokodemo.png">
						   <source src="/jp/product/img/dokodemo-kerja/dokodemo-kerja.webm" type="video/webm" />
						</video> -->
						<div class="embed-responsive embed-responsive-16by9 feature-video">
							<iframe class="embed-responsive-item" width="811" height="417" title="Dokodemo Youtube Video"
								src="https://www.youtube.com/embed/OWmF48Cq_fA" frameborder="0"
								allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
								allowfullscreen></iframe>
						</div>
						<br/><br/>
					</div>
					<div class="col-md-6 text-justify">
						<p>
							<span class="blue">Dokodemo-Kerja</span>は、リモートワーク / テレワークにて、生産性を高めることに集中してフレキシブルかつ効率的に働きたい従業員にも、皆にフェアな機会を与えて、さぼりを抑止したい経営者、人事マネージャーにもメリットのある製品・ソリューションです。
						</p>
						<p>
							従業員の使用端末にインストールするだけですぐに利用可能です。クロスプラットフォーム（Windows、Mac、Linuxに対応）で利用可能です。
						</p>
						<p>
							スタッフがいつ、どんな作業をしているのか確認することができます。作業タイプ（タスク種、プロジェクト名）を入力させることで作業時間を集計し管理会計に利用することも可能です。勤務開始時間、休憩時間、終了時間が記録に残りますので、勤務時間不足や逆に働きすぎのコントロールもできます。 管理される画面キャプチャがスタッフのさぼりを抑止します。場所や時間に囚われず、決めた勤務時間中は集中して生産性高く作業してもらうことが可能になります。<span class="blue">Dokodemo-Kerja</span>は現代の働き方をサポートします。
						</p>
            <div class="text-center">
              <a style="margin-top: 10px;" href="https://dokodemo-kerja.com" target="_blank" rel="noreferrer" class="btn-learn-more">
                Learn More
              </a>
						</div>
						<br/>
					</div>
				</div>
				<br/>
				<div class="row visible-lg">
					<div class="col-md-12">
						<div class="poster-main screenshot-slide ">
						  <div class="poster-btn poster-prev-btn"></div>
						  <ul class="poster-list">
							<li class="poster-item"><img src="/produk/img/dokodemo-kerja/ss1.jpg" alt="Dokodemo Kerja"></li>
							<li class="poster-item"><img src="/produk/img/dokodemo-kerja/ss2.jpg" alt="Dokodemo Kerja"></li>
							<li class="poster-item"><img src="/produk/img/dokodemo-kerja/ss3.jpg" alt="Dokodemo Kerja"></li>
							<li class="poster-item"><img src="/produk/img/dokodemo-kerja/ss4.jpg" alt="Dokodemo Kerja"></li>
							<li class="poster-item"><img src="/produk/img/dokodemo-kerja/ss5.jpg" alt="Dokodemo Kerja"></li>
						  </ul>
						  <div class="poster-btn poster-next-btn"></div>
						</div>
					</div>
				</div>
				<div class="row hidden-lg">
					<div class="col-md-12">
						<div id="myCarousel" class="carousel slide" data-ride="carousel">
						  <!-- Wrapper for slides -->
						  <div class="carousel-inner">
							<div class="item active">
							  <img src="/produk/img/dokodemo-kerja/ss4.jpg" alt="Dokodemo Kerja" class="img-responsive center-block">
							</div>
							<div class="item">
							  <img src="/produk/img/dokodemo-kerja/ss1.jpg" alt="Dokodemo Kerja" class="img-responsive center-block">
							</div>
							<div class="item">
							  <img src="/produk/img/dokodemo-kerja/ss2.jpg" alt="Dokodemo Kerja" class="img-responsive center-block">
							</div>
							<div class="item">
							  <img src="/produk/img/dokodemo-kerja/ss3.jpg" alt="Dokodemo Kerja" class="img-responsive center-block">
							</div>
							<div class="item">
							  <img src="/produk/img/dokodemo-kerja/ss5.jpg" alt="Dokodemo Kerja" class="img-responsive center-block">
							</div>
						  </div>
						  <!-- Left and right controls -->
						  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left"></span>
							<span class="sr-only">Previous</span>
						  </a>
						  <a class="right carousel-control" href="#myCarousel" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right"></span>
							<span class="sr-only">Next</span>
						  </a>
						</div>
					</div>
				</div>
				<div class="visible-lg"><br/><br/></div>
			</div>
		</div>

		<div class="bg-yellow" id="fitur">
			<img src="img/dokodemo-kerja/image-fitur.png" alt="Fitur" class="image-fitur img-responsive"/>
			<div class="container-fluid">
				<div class="bg-old-yellow">
					<div class="row" style="margin:0">
						<div class="col-md-6 col-md-offset-6">
							<div class="bg-one-fitur">
								<div class="one-fitur" style="margin-bottom: 0;">
									<img src="img/dokodemo-kerja/fitur1.png" alt="Fitur" class="img-responsive"/>
									ユーザーの作業時間を記録します。ユーザーは開始・終了ボタンをクリックするだけです。併せて作業種、プロジェクト名などを入力させ記録、集計することも可能です。各ユーザーが日別に何時に開始、休憩をどのようにとり、何時まで勤務したのか把握可能です。
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row" style="margin:0">
					<div class="col-md-6" style="padding: 0;">
						<div class="title-fitur anton">
							Dokodemo-Kerja<br/>機能
						</div>
						<div class="dengan-fitur">
							<div class="quote">“</div>リモートワークをユーザー、管理者、双方にメリットあるように実現することが可能な機能をDokodemo-Kerjaは提供しています。
						</div>
					</div>
					<div class="col-md-6 one-fitur-btm">
						<div class="bg-one-fitur visible-sm visible-xs">
							<div class="one-fitur">
								<img src="img/dokodemo-kerja/fitur1.png" alt="Fitur" class="img-responsive"/>
								ユーザーの作業時間を記録します。ユーザーは開始・終了ボタンをクリックするだけです。併せて作業種、プロジェクト名などを入力させ記録、集計することも可能です。各ユーザーが日別に何時に開始、休憩をどのようにとり、何時まで勤務したのか把握可能です。
							</div>
						</div>
						<div class="bg-one-fitur">
							<div class="one-fitur">
								<img src="img/dokodemo-kerja/fitur2.png" alt="Fitur" class="img-responsive"/>
								ユーザーは自分の勤務状況を確認できるので、1日の規定労働時間や契約で定められた月の労働時間に達しているか等を確認することができます。
							</div>
						</div>
						<div class="bg-one-fitur">
							<div class="one-fitur">
								<img src="img/dokodemo-kerja/fitur3.png" alt="Fitur" class="img-responsive"/>
								管理者はユーザーの勤務状況を閲覧可能で、各種集計ができます。規定の勤務時間に不足していないか、働きすぎていないか管理できます。
							</div>
						</div>
						<div class="bg-one-fitur">
							<div class="one-fitur">
								<img src="img/dokodemo-kerja/fitur4.png" alt="Fitur" class="img-responsive"/>
								管理者は各ユーザーのスクリーンショットを閲覧できます。スクリーンショットにはタイムスタンプが付いていますので、長時間同じスクリーンのままであったり、業務と関係ないスクリーンがないか管理可能です。スクリーンショットはプライバシーに配慮しており、メールや文書中の文字などは識別できません。
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- <div class="bg-why">
			<h2 class="title">Mengapa Memakai Dokodemo-Kerja?</h2>
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<ul class="fa-ul">
							<li><span class="fa-li"><i class="fa fa-circle"></i></span>Saat ini, cukup banyak karyawan yang bekerja sebagai freelance untuk menghemat waktu. Dokodemo-Kerja dapat membantu Anda mencatat jam kerja karyawan remote secara efektif dan efisien.</li>
							<li><span class="fa-li"><i class="fa fa-circle"></i></span>Dokodemo-Kerja dapat mempermudah Anda dalam memantau produktifitas karyawan yang bekerja dari jarak jauh.</li>
							<li><span class="fa-li"><i class="fa fa-circle"></i></span>Dokodemo-Kerja dapat membantu Anda dalam mengelola dan mengatur masalah kehadiran karyawan.</li>
							<li><span class="fa-li"><i class="fa fa-circle"></i></span>Dengan Dokodemo-Kerja, perusahaan dapat mendorong karyawan untuk lebih bersemangat dan produktif dalam bekerja.</li>
						</ul>
						<div class="text-center">
							<a href="#divForm" class="smooth btn btn-coba">Butuh Solusi yang Nyata?</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<h2 class="title-masalah anton">Masalah yang Sering Dihadapi</h2> -->
		<div class="bg-masalah1" id="benefits">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="pl-25">
							<div class="anton title-masalah1">Dokodemo-Kerja</div>
							<div class="kami-siap">導入メリット</div>
							<div class="desc-bantu">
								<div class="quote">“</div>
								<strong>Dokodemo-Kerja</strong>はユーザーと管理者の双方にメリットのある働き方を支援するツールです。<br/>
								管理者のためのツールではありません。<strong>Dokodemo-Kerja</strong>を導入することにより、ユーザーは自由で柔軟な働き方を実現でき、生産性の向上に繋がります。
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bg-masalah2">
			<div class="container">
				<div class="row">
					<div class="col-lg-offset-6 col-lg-6">
						<div class="pr-25" style="min-height: 185px;">
						<br/>
							<ul class="fa-ul">
								<li><span class="fa-li"><i class="fa fa-circle"></i></span>勤怠管理を容易にします。勤務時間の虚偽報告を防ぐことができ、勤務時間不足や過度な長時間労働を防ぐことができます。</li>
								<li><span class="fa-li"><i class="fa fa-circle"></i></span>スクリーンショットを確認することで、勤務時間中に業務に関係のないことをしていないか監視できます。</li>
								<li><span class="fa-li"><i class="fa fa-circle"></i></span>従業員の勤怠管理に非効率な時間を割く必要がなくなります。Dokodemo-KerjaをチェックするだけでOK。</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bg-masalah3">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="pl-25" style="min-height: 169px">
							<ul class="fa-ul">
								<li><span class="fa-li"><i class="fa fa-circle"></i></span>Dokodemo-Kerjaにログインしさえすれば、場所を選ばず勤務開始と終了の報告ができます。</li>
								<li><span class="fa-li"><i class="fa fa-circle"></i></span>生産性をあげられる時間に、柔軟に勤務することができるようになります。合計時間が規定の時間に達したかどうかを把握可能です。</li>
								<li><span class="fa-li"><i class="fa fa-circle"></i></span>ある作業に想定以上に時間がかかってしまった場合でも管理者はスクリーンショットからそれを理解可能です。毎日の非効率なレポート工数をなくします。</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- <div class="div-masalah">
			<div class="container">
				<div class="border-white">
					<div class="row">
						<div class="col-md-6">
							<img class="masalah2 hidden-sm hidden-xs" alt="Masalah 2" src="img/dokodemo-kerja/masalah2.png"/>
						</div>
						<div class="col-md-6">
							<ul class="fa-ul">
								<li><span class="fa-li"><i class="fa fa-circle"></i></span>Divisi HR terlalu lelah untuk memperingati karyawan yang seringkali terlambat dan kurang produktif.</li>
								<li><span class="fa-li"><i class="fa fa-circle"></i></span>Perusahaan sulit dalam memantau karyawan yang bekerja secara jarak jauh.</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="div-masalah last">
			<div class="container">
				<div class="border-white">
					<div class="row">
						<div class="col-md-6">
							<ul class="fa-ul">
								<li><span class="fa-li"><i class="fa fa-circle"></i></span>Karyawan keliru dalam mengisi laporan pekerjaan.</li>
								<li><span class="fa-li"><i class="fa fa-circle"></i></span>Karyawan perusahaan tidak mengisi jam kerja sesuai dengan kenyataannya.</li>
							</ul>
						</div>
						<div class="col-md-6">
							<img class="masalah3 hidden-sm hidden-xs" alt="Masalah 3" src="img/dokodemo-kerja/masalah3.png"/>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		<div class="bg-blue text-center">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-1 col-md-10">
						<img class="img-responsive center-block" src="img/dokodemo-kerja/dokodemo-logo.svg" style="max-width: 170px" alt="Dokodemo-Kerja Logo"/>
						<br/>
						<div class="title anton">リモートワークで幸せに生産性高く働きましょう！</div>
						<hr/>
						<p>	Dokodemo-Kerjaを導入することで、インドネシアでリモートワークを導入しましょう。交通事情が悪いジャカルタにおいてリモートワークを導入することは従業員の幸福度を向上し、ついては生産性の向上に繋がります。お祈り休憩や喫煙休憩が長い社員がいる、Youtubeをずっと見ている社員がいる、などの問題はセンシティブで解決が難しいですが、これらもDokodemo-Kerjaの導入で解決します。
						</p>
					</div>
				</div>
			</div>
		</div>

		<div class="div-masalah-new">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-1 col-md-5">
						<a href="/pdf/manual-guide.pdf" target="_blank" aria-label="Manual Guide" class="dl-guide"><img src="/img/manual.png" alt="Manual Guide" style="width:100%"/></a>
					</div>
					<div class="col-md-5">
						<a href="/pdf/install-guide.pdf" target="_blank" aria-label="Manual Guide" class="dl-guide"><img src="/img/install.png" alt="Install Guide" style="width:100%"/></a>
					</div>
				</div>
			</div>
		</div>

		<div class="harga" id="price">
			<div class="container">
				<div class="title anton">価格</div><br/>
				<div class="text-center">Dokodemo-Kerjaは初期費用なしで利用可能です。下のプランからご利用用途にあわせてお選びください。御社に合わせた特別なカスタマイズも可能ですのでお気軽にご相談ください。</div><br/>
				<br/>
				<div class="row">
					<div class="col-md-offset-2 col-md-4">
						<div class="card-harga">
							<div class="title-card text-center">ライトプラン</div>
							<div style="padding:30px 0;border-bottom: 1px solid #fff;">
								<div class="price"><strong>1 JUTA IDR</strong></div>
								<div class="price" style="font-size: 15px;">月額</div>
							</div>
							<div class="plan-list">
								<ul class="fa-ul">
									<li><span class="fa-li"><i class="fa fa-circle"></i></span>勤務時間計測</li>
									<li><span class="fa-li"><i class="fa fa-circle"></i></span>スクリーンショット保存</li>
									<li><span class="fa-li"><i class="fa fa-circle"></i></span>10分に1スクリーン保存（ランダム）</li>
									<li><span class="fa-li"><i class="fa fa-circle"></i></span>スクリーンショット2ヶ月間保存</li>
									<li><span class="fa-li"><i class="fa fa-circle"></i></span>
									10ユーザーまで試用可能<br/>
									<div style="font-size: 12px;color: #da0101;margin-top: 20px;font-style: italic;">＃10ユーザーを超えると1ユーザー月額50,000 IDRが必要になります</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- <div class="col-md-4">
						<div class="card-harga">
							<div class="title-card text-center">スタンダードプラン</div>
							<div style="padding:30px 0;border-bottom: 1px solid #fff;">
								<div class="price"><strong>3 JUTA IDR</strong></div>
								<div class="price" style="font-size: 15px;">月額</div>
							</div>
							<div class="plan-list">
								<ul class="fa-ul">
									<li><span class="fa-li"><i class="fa fa-circle"></i></span>勤務時間計測</li>
									<li><span class="fa-li"><i class="fa fa-circle"></i></span>スクリーンショット保存</li>
									<li><span class="fa-li"><i class="fa fa-circle"></i></span>3分に1スクリーン保存（ランダム）</li>
									<li><span class="fa-li"><i class="fa fa-circle"></i></span>スクリーンショット6ヶ月間保存</li>
									<li><span class="fa-li"><i class="fa fa-circle"></i></span>
									10ユーザーまで試用可能<br/>
									<div style="font-size: 12px;color: #da0101;margin-top: 20px;font-style: italic;">＃10ユーザーを超えると1ユーザー月額75,000 IDRが必要になります</div>
									</li>
								</ul>
							</div>
						</div>
					</div> -->
					<div class="col-md-4">
						<div class="card-harga">
							<div class="title-card text-center">エンタープライズプラン</div>

							<div class="text-center heightauto" style="padding:15px;">
							<div class="valign-center">
							様々なカスタマイズでの特別対応が可能です。詳細はお問い合わせください。
								<div class="text-center">
									<a href="#divForm" class="smooth btn btn-coba">今すぐ問い合わせる</a>
								</div>
							</div>
							</div>
						</div>
					</div>
				</div>
        <div class="text-center">
          <a style="margin: 50px 0 35px 0;" href="https://dokodemo-kerja.com" target="_blank" rel="noreferrer" class="btn-learn-more">
            Learn More
          </a>
				</div>
			</div>
		</div>

		<div class="testi-div">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="anton title yellow text-center">事例 / お客様の声</div>
					</div>
				</div>
				<br/>
				<div class="row">
					<div class="col-md-4">
						<div class="testi-content">
							<div class="anton quotes-mark">“</div>
							<p>
								それまでのスタッフの評価が間違っていました。残業代の削減につながりました。
							</p>
							<div class="text-center"><span class="fs-16"><strong>Director Mr. Nishikawa</strong></span> - <span class="fs-14">IIJ Indonesia</span></div>
						</div>
						<br/>
					</div>
					<div class="col-md-4">
						<div class="testi-content">
							<div class="anton quotes-mark">“</div>
							<p>
								スタッフのQoLが上がり、皆いきいきと働いています。結果、仕事の実績も上がっています。
							</p>
							<div class="text-center"><span class="fs-16"><strong>HR Manager Mr. Subianto</strong></span> - <span class="fs-14">PT. Karisma Zona Kreatifku</span></div>
						</div>
						<br/>
					</div>
					<div class="col-md-4">
						<div class="testi-content">
							<div class="anton quotes-mark">“</div>
							<p>
								お祈りの前後で長い休憩を取るスタッフがいることには気付いていましたが、宗教が関わると指摘するのは難しいです。ただドコデモを使って以来、皆に公平な休憩管理ができるようになりました。
							</p>
							<div class="text-center"><span class="fs-16"><strong>Mizuho Yamada</strong></span> - <span class="fs-14">Manager of Back Office</span></div>
						</div>
						<br/>
					</div>

					<div class="clearfix"></div><hr class="hidden-sm hidden-xs"/>
					<div class="col-md-4">
						<div class="testi-content">
							<div class="anton quotes-mark">“</div>
							<p>
								病気の母の世話をするために家に居る必要があり、仕事を続けることを諦めかけました。ですが、今はリモートワークが可能で、仕事を続けながら母を介護できています。
							</p>
							<div class="text-center"><span class="fs-16"><strong>Bobby Susanto</strong></span> - <span class="fs-14">Programmer</span></div>
						</div>
						<br/>
					</div>
					<div class="col-md-4">
						<div class="testi-content">
							<div class="anton quotes-mark">“</div>
							<p>
								完全リモートワークを実現できた。オフィス家賃の削減効果があった。
							</p>
							<div class="text-center"><span class="fs-14">IT Consulting Company</span></div>
						</div>
						<br/>
					</div>
					<div class="col-md-4">
						<div class="testi-content">
							<div class="anton quotes-mark">“</div>
							<p>
								断食期間中なども自由な勤務時間設定ができるので生産性の高い働き方ができています
							</p>
							<div class="text-center"><span class="fs-14">Software Developing Company</span></div>
						</div>
						<br/>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>

		<div class="div-faq">
			<div class="anton title yellow">FAQ:</div>
			<br/>
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h3 class="blue2 fw-500">Q. どのような環境で動くのか？なにを用意すればいいのか？</h3>
						<p>
							A. 各ユーザーはお使いの端末（Windows, Mac, Linux）に<strong>Dokodemo-Kerja</strong>アプリをインストールするだけで使えます。管理者はブラウザから管理画面にアクセスできます。サーバーを用意するなどは必要なく、すぐに利用スタートすることが可能です。
						</p>
						<h3 class="blue2 fw-500">Q. モバイル端末では動かくのか？</h3>
						<p>
							A. まだモバイル端末で勤務するスタッフを対象にはしていません。スマートフォンは対象外です。
						</p>
						<h3 class="blue2 fw-500">Q. フィールドサービススタッフや外回りの営業スタッフなどはどのように管理できるのか？</h3>
						<p>
							A. ラップトップを使用していなかった時間も後から勤務時間の編集を行うことはできます。<strong>Dokodemo-Kerja</strong>は基本的にはデスクワークが多い方に向いていると思います。
						</p>
						<h3 class="blue2 fw-500">Q. インドネシア国外でも使えるのか？</h3>
						<p>
							A. 問題なく使えます。同日中にタイムゾーンが異なるところに移動して使った場合に管理が少し複雑にはなりますが、使用に問題はありません。
						</p>
					</div>
					<div class="col-md-6">
						<h3 class="blue2 fw-500">Q. スクリーンショットを撮影、送信する頻度は変更できるのか？</h3>
						<p>
							A. Light版では10分間に1回ランダムに送信しています。Standard版では1分間に1回です。ランダムにキャプチャしていますのでユーザーはいつ撮影＆送信されるか把握することはできません。
						</p>
						<h3 class="blue2 fw-500">Q. スクリーンショット画像の精度はどうなっているのか？</h3>
						<p>
							A. どんな画面であったかは分かります。ただし文字までは判読不可能です。ですのでメールクライアントが開かれていたことは分かりますが、その文面は分かりません。またチャットツールが使われたいたことは分かってもどんなメッセージのやり取りがされていたのかは不明です。Privacyに配慮した解像度となっています。
						</p>
						<h3 class="blue2 fw-500">Q. ミニマム契約期間はあるのか？支払方法は？</h3>
						<p>
							A. ありません。1ヶ月から利用可能です。月末に利用ユーザー数を集計し請求書を発行いたします。翌月末までに銀行振込にてお支払いいただきます。
						</p>
					</div>
				</div>
				<br/>
				<div class="row">
					<div class="col-md-offset-1 col-md-10">
						<div style="padding:10px;border:1px solid #edb41a">
							<div class="div-above-footer">
								<strong>Dokodemo-Kerja</strong>は、従業員がリモートワークすることを可能にし、無駄な時間と労力を排除して生産性を向上することを助け、管理者の従業員を監視する工数も減らすことができるツールです。個社別のカスタマイズも可能ですのでお問い合わせお待ちしております。
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="div-form" id="divForm">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="title text-center">
							<span class="blue2">お問い合わせ</span><br/><br/>
							インドネシアでリモートワークを実現したい会社さま、従業員の勤怠管理にお悩みの人事担当者さま、生産性向上をしたいプロジェクトマネージャーなど、Dokodemo-Kerjaをお試しください。無料試用も可能ですのでお問い合わせください。
						</div>
					</div>
				</div>
				<br/>
				<?php if(isset($msg))
				{
				echo $msg;
				}
				?>
				<form class="form-dokodemo" role="form" name='myForm' onsubmit='return validateForm()' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
					<input type='hidden' name='submitted' id='submitted' value='1'/>
					<input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
					<div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
					<div class="row">
						<div class="form-group">
							<div class="col-md-offset-1 col-md-5">
								<input required type="text" class="form-control" name="name" aria-label="Name" placeholder="お名前" value='<?php echo $formproc->SafeDisplay('name') ?>'/>
							</div>
							<div class="col-md-5">
								<input required type="text" class="form-control" name="company" aria-label="Company" placeholder="会社名" value='<?php echo $formproc->SafeDisplay('company') ?>'/>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="form-group">
							<div class="col-md-offset-1 col-md-5">
								<input required type="number" class="form-control" name="phone" aria-label="Phone" placeholder="TEL" value='<?php echo $formproc->SafeDisplay('phone') ?>'/>
							</div>
							<div class="col-md-5">
								<input required type="email" class="form-control" name="email" aria-label="Email" placeholder="E-mail" value='<?php echo $formproc->SafeDisplay('email') ?>'/>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="form-group">
							<div class="col-md-offset-1 col-md-5">
								<div style="padding:10px;background:#fff">
									<span class="blue fw-300">お問い合わせ種</span>
									<div class="radiobuttons">
										<div class="rdio">
										  <input required name="needs" value="Dokodemo-Kerjaを試用したい" id="radio2" type="radio" checked>
										  <label for="radio2">Dokodemo-Kerjaを試用したい</label>
										</div>
										<div class="rdio">
										  <input required name="needs" value="人事管理システムの導入を検討している" id="radio3" type="radio">
										  <label for="radio3">人事管理システムの導入を検討している</label>
										</div>
										<div class="rdio">
										  <input required name="needs" value="採用管理システムの導入を検討している" id="radio4" type="radio">
										  <label for="radio4">採用管理システムの導入を検討している</label>
										</div>
										<div class="rdio">
										  <input required name="needs" value="リモートワーク制の導入を考えている" id="radio5" type="radio">
										  <label for="radio5">リモートワーク制の導入を考えている</label>
										</div>
									</div>
								</div>
								<br/>
							</div>
							<div class="col-md-5">
								<textarea required name="message" class="form-control" aria-label="Message" placeholder="お問い合わせ内容"><?php echo $formproc->SafeDisplay('message') ?></textarea>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="form-group">
							<div class="col-md-offset-1 col-md-5">
								<div class="g-recaptcha" data-sitekey="6LcuHywUAAAAACj__hCefsBCkoIC2ExM2Sur4cCp"></div>
							</div>
							<div class="clearfix"></div>
						</div>
						<center>
							<button type="submit" href="#" class="btn btn-coba">送信</button>
						</center>
					</div>
				</form>
			</div>
		</div>

		<a href="#" class="scrollToTop">Back to Top</a>
<?php /*		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-push-6">
						<img src="img/dokodemo-kerja/dokodemo-logo.png" alt="Logo">
						<p>
							Dokodemo-Kerjaは、従業員がリモートワークすることを可能にし、無駄な時間と労力を排除して生産性を向上することを助け、管理者の従業員を監視する工数も減らすことができるツールです。個社別のカスタマイズも可能ですのでお問い合わせお待ちしております。
						</p>
						<br/><br/>
						<div class="cr">© 2018<a href="/" class="yellow"> PT. Logique Digital Indonesia.</a> All Rights Reserved.</div>
					</div>
					<div class="col-md-6 col-md-pull-6">
						<ul class="fa-ul">
							<li>
								<span class="fa-li"><i class="fa fa-map-marker"></i></span>
								Ad Premier Building 19th Floor <br/>
								Jalan Tb. Simatupang No. 5 Ragunan, <br/>
								Ps. Minggu, Jakarta Selatan, Indonesia 12550
							</li>
							<li>
								<span class="fa-li"><i class="fa fa-phone"></i></span>
								+62(21) 2270 8935 / 36
							</li>
							<li>
								<span class="fa-li"><i class="fa fa-envelope"></i></span>
								info@logique.co.id
							</li>
							<li>
								Other Products:<br/>
								<ul style="list-style-type:disc;padding-left: 2em;">
									<li style="margin-bottom: 5px;margin-top: 5px;"><a href="/jp/product/nippo.php" target="_blank">Nippo</a></li>
									<li><a href="/jp/product/sugoi-saiyo.php" target="_blank">Sugoi Saiyo</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</footer> */ ?>
		<footer>
<!--<script type="text/javascript">!function(t,e){t.artibotApi={l:[],t:[],on:function(){this.l.push(arguments)},trigger:function(){this.t.push(arguments)}};var a=!1,i=e.createElement("script");i.async=!0,i.type="text/javascript",i.src="https://app.artibot.ai/loader.js",e.getElementsByTagName("head").item(0).appendChild(i),i.onreadystatechange=i.onload=function(){if(!(a||this.readyState&&"loaded"!=this.readyState&&"complete"!=this.readyState)){new window.ArtiBot({i:"ffce07da-cb7b-4dd0-be97-171190ab7c25"});a=!0}}}(window,document);</script>-->
<script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: '4c745242-66c8-4931-9b56-3c3bdcc5cbe6', f: true }); done = true; } }; })();</script>
	<div class="container">
		<div class="row">
			<div class="col-sm-9 col-sm-push-3">
				<div class="row">
					<div class="col-sm-4 link-footer-nav" style="font-weight: normal;">
						<ul>
							<li><a href="/jp/index.php">Home</a></li>
							<li><a href="/jp/logique.php">会社概要</a></li>
							<li  class="have-submenu"><a href="/jp/services.php">サービス</a>
								<ul>
									<li  class="have-submenu">
										<a href="/jp/services/web-dev.php" target="_blank">Web制作サービス</a>
										<ul>
											<li>
												<a href="/jp/services/recruitment-web-dev.php" target="_blank">  採用サイト制作</a></li>
											<li><a href="/layanan/pembuatan-web-klinik-gigi.php" target="_blank">  歯科クリニック向けWeb制作</a></li>
										</ul>
									</li>
									<li><a href="/jp/services/mobile-app-dev.php" target="_blank"> モバイルApp開発</a></li>
									<li><a href="/jp/services/penetration-test.php" target="_blank"> Webセキュリティ診断サービス</a></li>
									<li><a href="/jp/services/system-dev.php" target="_blank">Webシステム開発</a></li>
									<li><a href="/jp/services/digital-marketing.php" target="_blank">デジタルマーケティング活用支援 </a></li>
								</ul>
							</li>


						</ul>

					</div>
					<div class="col-sm-4 link-footer-nav">
						<!-- <div class="footer-title">LOGIQUEのサービス</div> -->

						<!-- <div class="footer-title" style="padding-top: 20px;"><a href="/jp/product.php">プロダクト</a></div> -->
						<ul>
							<li  class="have-submenu"><a href="/jp/product.php">プロダクト</a>
								<ul>
								<li><a href="https://dokodemo-kerja.com" target="_blank" rel="noreferrer">Dokodemo-Kerja<br><span style="font-size: 12px;">（リモートワーク管理ツール）</span></a></li>
								<li><a href="/jp/product/sugoi-saiyo.php"  target="_blank">Sugoi Saiyo  <span style="font-size: 12px;">(（採用管理ツール）</span></a></li>
								<li><a href="/jp/product/nippo.php"  target="_blank">Nippo <span style="font-size: 12px;">(（日報＆人事評価ツール）</span></a></li>
								<li></li>
							</ul>
							</li>
							<li><a href="/jp/portfolio.php">制作開発実績</a></li>

							<li><a href="/career/">求人/インターン</a>
								<ul>
									<li><a href="/career/">採用/パートナー</a></li>
								</ul>
							</li>
							<li><a href="/jp/contact.php">お問い合わせ</a></li>
						</ul>


							<!-- <h6><a href="/layanan/pembuatan-website-restoran/" target="_blank">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Restaurant Website Creation</a></h6> -->


<!-- 							<h6><a href="https://dokodemo-kerja.com" target="_blank" rel="noreferrer">Dokodemo-Kerja（リモートワーク管理ツール）</a></h6>
						<h6><a href="/jp/product/sugoi-saiyo.php">Sugoi Saiyo（採用管理ツール）</a></h6>
						<h6><a href="/jp/product/sugoi-saiyo.php">Nippo（日報＆人事評価ツール）</a></h6>

						<h6><a href="/product.php">プロダクト</a></h6>
						<h6><a href="/layanan/pembuatan-website-restoran/" target="_blank">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Restaurant Website Creation</a></h6>
						<h6></h6> -->



					</div>
					<div class="col-sm-4 link-footer"  >
<!--
 						<p>LOGIQUEは、ジャカルタでWebコンサルティング、Webサイト制作、スマートフォンサイト制作、レスポンシブWebデザイン制作、システム開発、採用ページ制作、グラフィックデザイン制作、動画制作、会社案内・パンフレットデザイン制作サービス等を提供しています。</p> -->
 						<img src="img/dokodemo-kerja/dokodemo-logo.svg" alt="Logo">
						<p style="padding-bottom: 0px; padding-top: 0px;">
							Dokodemo-Kerjaは、従業員がリモートワークすることを可能にし、無駄な時間と労力を排除して生産性を向上することを助け、管理者の従業員を監視する工数も減らすことができるツールです。個社別のカスタマイズも可能ですのでお問い合わせお待ちしております。
						</p>
					</div>
				</div>
				<br/>
			</div>
			<div class="col-sm-3 col-sm-pull-9">
			<div itemscope itemtype="http://schema.org/Organization">
				<div class="footer-title"><span itemprop="name">LOGIQUE DIGITAL INDONESIA</span></div>
				<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
				<span itemprop="streetAddress"> Ad Premier Building 19th Floor. <br/>Jalan Tb. Simatupang No. 5
				Ragunan, <br>Ps. Minggu,  Jakarta Selatan,<br> Indonesia </span><span itemprop="postalCode">12550</span>
				<br><br>
				&nbsp;&nbsp;&nbsp;<i class="fa fa-phone"></i>&nbsp;&nbsp;&nbsp;(021) 22708935 / 36
				<br>
				<a href="https://api.whatsapp.com/send?phone=62811870321" target="_blank" rel="noreferrer">&nbsp;&nbsp;&nbsp;<i class="fa fa-mobile" style="font-size: 18px;vertical-align: -1px;"></i>&nbsp;&nbsp;<i class="fa fa-whatsapp"></i>&nbsp;&nbsp;&nbsp;0811-870-321</a>
				<br><br>
				<div class="provacy-policy-container">
					<a href="/en/privacy-policy.php" target="_blank">Privacy Policy</a>
				</div>
				<div class="footer-title" style="margin-top: 20px; margin-bottom: 0;">Social Media</div>
				<ul class=" medsos-new" sty>
					<li><a href="https://www.facebook.com/logique.id/" target="_blank" rel="noreferrer" aria-label="Facebook"><i class="fa fa-facebook-official"></i></a></li>
					<li><a href="https://twitter.com/LogiqueDigital" target="_blank" rel="noreferrer" aria-label="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="https://www.instagram.com/logiquedigital/" target="_blank" rel="noreferrer" aria-label="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					<li><a href="https://www.linkedin.com/company/13420656" target="_blank" rel="noreferrer" aria-label="LinkedIn"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
				</ul>
				</div>
			</div>

				<br/><br/>

			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div itemscope itemtype="http://schema.org/CreativeWork">
					<div class="copyright">&copy; <span itemprop="copyrightYear">2017</span>
					<span itemprop="copyrightHolder" itemtype="http://schema.org/Organization"><span itemprop="name">Logique Digital Indonesia. All Rights Reserved.</span></span></div>
				</div>
			</div>
		</div>
	</div>
</footer>






		<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
		<script src="/produk/js/PicCarousel.min.js"></script>
		<script>
			$(".screenshot-slide").PicCarousel("init");
		</script>
		<script src='https://www.google.com/recaptcha/api.js'></script>
		<script type="text/javascript">
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

			$(document).ready(function(){

				//Check to see if the window is top if not then display button
				$(window).scroll(function(){
					if ($(this).scrollTop() > 100) {
						$('.scrollToTop').fadeIn();
					} else {
						$('.scrollToTop').fadeOut();
					}
				});

				$('.form-dokodemo').on('submit', function () {
					if (grecaptcha.getResponse() == '') {
						alert("Please verify that you are not a robot");
						return false;
					}
				});
			});

			//Click event to scroll to top
			$('.scrollToTop').click(function(){
				$('html, body').animate({scrollTop : 0},800);
				return false;
			});
			$('.navbar-dokdem .navbar-brand>img').click(function(){
				$('html, body').animate({scrollTop : 0},800);
				return false;
			});
		</script>
	</body>
</html>
