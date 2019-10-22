 <?php
 require_once("assets/form/fgcontact_systemdev.php");
 
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
	<meta name="description" content="LOGIQUEは、WEBサイト・ホームページ制作、CMSやEC、会員管理システムなどの開発運用、Digitalマーケティング、アプリ開発、SNS運用、インターネットビジネスコンサルティングなどをインドネシアで提供しています。クライアントの新規事業をデジタル・IT面で幅広くご支援しています。お気軽に日本語でご連絡ください。">
	<meta name="keywords" content="pembuatan website, pengembangan aplikasi, pembuatan aplikasi, jasa konsultasi, aplikasi android, jasa pembuatan website, logique, logique digital indonesia, mekanisme, desain web, aplikasi android, keamanan web, pengembangan website, jasa pembuatan website, pembuatan website perusahaan.">
	<meta name="author" content="PT LOGIQUE DIGITAL INDONESIA ">
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
	<title>WEBザイン制作、ウェブシステム開発運用・モバイルアプリ開発 | LOGIQUE デジタルインドネシア</title>
	<link href="/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/style-systemdev.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=M+PLUS+1p:400,500,700" rel="stylesheet">
	<script src="https://use.fontawesome.com/df558bb4a1.js"></script>
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
		
		ga('create', 'UA-105878648-1', 'auto');
		ga('send', 'pageview');
		
	</script>
</head>
<body>
	<header class="header">
		
		<!-- NAVIGATION -->
		<div class="nav-lp">
			<button type="button" class="navbar-toggle collapsed" aria-label="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar first"></span>
				<span class="icon-bar second"></span>
				<span class="icon-bar third"></span>
			</button>
			<div class="collapse navbar-collapse" id="myNavbar">
				<div class="backdrop-test"></div>
				<div class="logique-nav in-jp">
					<div class="margin-for-nav">
						<div class="text-center ">
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
						<div class="text-center active">
							<a href="/jp/services.php">
								<div class="img-services"></div>
								サービス
							</a>
						</div>
						<div class="text-center">
							<a href="/jp/product.php">
								<div class="img-product"></div>
								プロダクト
							</a>
						</div>
						<div class="text-center">
							<a href="/jp/joinus.php">
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
		<!-- NAVIGATION -->
		
		<div class="container" style="position:relative">
			<div class="row">
				<!-- <div class="col-md-12">
					<a href="/jp/" target="_blank">
						<div class="logo-header">
							<img src="assets/img/img-systemdev/logo.png" alt="Fitur Perusahaan" class="img-responsive">
						</div>
					</a>
				</div> -->
			</div>
			<div class="row">
				<div style="background: #000; font-weight: bold;">
					<!-- breadcrumb -->
					<div class="breadcrumb-position">
						<ol class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList" style="background:transparent;">
							<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="/jp/index.php"><span itemprop="name">Home</span></a><meta itemprop="position" content="1" /></li>
							<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="/jp/services.php"><span itemprop="name">サービス</span></a><meta itemprop="position" content="2" /></li>
							<li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" ><a itemprop="item" ><span itemprop="name">Webシステム開発</span></a><meta itemprop="position" content="3" /></li>
						</ol>
					</div>
					<!-- end of breadcrumb -->
					
					<!-- language settings -->
					<div class="language-btn">
						<ul class="list-inline">
							<li><a href="/en/services/system-dev.php">EN</a></li>
							<li><a href="/layanan/pembuatan-sistem-web.php">ID</a></li>
							<li class="active"><a href="#">JP</a></li>
						</ul>
					</div>
					<!-- end of language -->
				</div>
				<div class=" col-sm-offset-6 col-sm-6 col-lg-offset-6 col-lg-6 bg-header-txt">
					<h1 class="text-right m-new">インドネシアでシステム開発が必要ならLOGIQUEにご相談ください</h1>
					<h2 class="text-right m-new">豊富な実績をベースに、早い、安い、でもクオリティは高いシステムを開発します。</h2>
				</div>
			</div>
		</div>
	</header>
	<section class="style-1" style="padding-bottom: 0;padding-top:20px;">
		<div class="container">
			<div class="row">
				<div class="col-md-offset-1 col-md-10 text-center">
					<h2>システム開発が必要なのに、コストが高いから、時間かかるから、難しいからと諦めていませんか？インドネシアでのIT/Webシステム開発はLOGIQUEにお任せください。柔軟にスピーディーにリーズナブルなコストで開発します。</h2>
				</div>
			</div>
		</div>
	</section>
	<section class="style-2">
		<div class="container">
			<div class="row">
				<div class="col-md-offset-7 col-md-5">
					<div class="new5">
						<h2 class="h2" style="padding-bottom: 12px;">LOGIQUEのシステム開発・WEBアプリ開発</h2>
						<hr style="margin:0; border-top: 3px solid gold; padding: 0; width: 40%; float:right">
						<h2 class="h2" style="padding-top: 12px;">
							自動車産業、保険など金融機関、政府団体向けの大規模なシステム開発からスタートアップ向けのアジャイル開発までインドネシアにて豊富な実績があります。
						</h2>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="style-3">
		<div class="container">
			<div class="row">
				<div class="col-md-3 justify-content-center">
					<h3 class="new1">高い技術力、最先端の技術の利用</h3>
					<img class="img img-responsive yellow-stripes" src="assets/img/img-systemdev/yellow-stripes.png" alt="">
					<p class="new4">会計管理、人事管理などの業務システムから、CMS、ECサイト構築、アンケートシステム開発、サーバ、インフラまで、幅広い分野のシステム開発をワンストップで対応することができます。多数のインドネシアでの開発実績と恐れずに新しい技術を取り入れていくことにより、素早く、柔軟で、長く使えるシステム構築を行います。</p>
				</div>
				<div class="col-md-3 justify-content-center">
					<h3 class="new1">インフラ設計・構築</h3>
					<img class="img img-responsive yellow-stripes" src="assets/img/img-systemdev/yellow-stripes.png" alt="">
					<p class="new4">インドネシア国内外のクラウドサーバーの設計構築を行います。シンガポールリージョンのAWSや、インドネシア国内のAliクラウドなどの実績を豊富にもっています。サーバーの保守運用、パフォーマンス・チューニングサービスも提供しています。オンプレミスサーバーからクラウドサーバーへのマイグレーションも多数実績あります。</p>
				</div>
				<div class="col-md-3 justify-content-center">
					<h3 class="new1">セキュアなシステム構築</h3>
					<img class="img img-responsive yellow-stripes" src="assets/img/img-systemdev/yellow-stripes.png" alt="">
					<p class="new4">通常のテストに加えセキュリティ脆弱性テストを実施することをお奨めしています。SQLインジェクション、パストラバーサル、クロスサイトスクリプティングなどPenetrationテストを行いリスクを最小限にします。</p>
				</div>
				<div class="col-md-3 justify-content-center">
					<h3 class="new1">スピーディーで柔軟な開発</h3>
					<img class="img img-responsive yellow-stripes" src="assets/img/img-systemdev/yellow-stripes.png" alt="">
					<p class="new4">アジャイル開発を基本としています。要件定義書を作るのに何ヶ月もかけるようなことは意味がないと考えています。クライアントと信頼関係を築き、当社がリードして柔軟でスピーディに開発していきます。ラボ型開発サービスも提供しています。</p>
				</div>
			</div>
			<div class="row" style="margin-top: 24px;">
				<div class="col-md-12 col-sm-12">
					<div class="justify-content-center">
						<a href="../services/penetration-test.php" class="btn-contact-us-black">セキュリティ脆弱性診断はこちら</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="supposedly-style4">
		<div class="container">
			<div class="row">
				<div class="container">
					<div class="row" style="display: flex; flex-wrap: wrap;">
						<div class="col-md-4">
							<h1 class="new6" style="font-weight: 500!important;">ご要望に応じて柔軟な開発体制 / 開発メソッドでサポートいたします</h1>
							<br>
							<div class="justify-content-center">
								<img src="assets/img/img-systemdev/laptop-img.png" alt="" class="img img-responsive">
							</div>
						</div>
						<div class="col-md-8">
							<div class="row">
								<div class="col-md-12">
									<h4 class="dark-gold-title">通常の請負開発</h4>
									<div style="margin-left: 12px;">
										<p class="h4">要件が明確であるプロジェクトで有効。<br>通常はアジャイル（スクラム）開発をお奨めしています。.</p>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<h4 class="dark-gold-title">ラボ型受託開発（稼働したリソースベースでご請求します</h4>
									<div style="margin-left: 12px;">
										<p class="h4">要件 / 作業スコープが決まりきっていないが早期にスタートしたいケース、開発しながら柔軟にスコープを変えていきたいプロジェクトで有効。</p>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<h4 class="dark-gold-title">定額制開発</h4>
									<div style="margin-left: 12px;">
										<p class="h4">月額費用を固定し、優先度高く必要なものから順に規定の作業工数の範囲内で毎月作業していきます。
											メンテナンスや機能拡張プロジェクトに合っています。
											従来であれば追加費用が必要かどうかで揉めるような場面でも、月額定額の中で出来るところまで対応し、
											出来ない分は翌月以降に持ち越しになるだけなのでフェアです。</p>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<h4 class="dark-gold-title">開発者派遣型開発</h4>
										<div style="margin-left: 12px;">
											<p class="h4">関連会社にて開発者、デザイナー、テスター等を派遣して、オンサイトで作業することも可能です。</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="tahap-pemesanan-2 hidden-xs" style="padding: 2em"></section>
		<section class="style-4">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-4 col-md-4 text-center">
						<div class="box-1">事例/ケーススタディー</div>
					</div>
					<div class="col-md-offset-5 col-md-7">
						<div class="card">
							<div class="row">
								<div class="col-md-offset-1 col-md-10 m-t-10">
									<h4><b>JBAインドネシア様向けオークション管理システム</b></h4>
									<p>JBAインドネシアはインドネシア最大の車・バイクのオークションハウスです。当社では、Webサイトの制作運用、JBAのオークションコンダクターシステム、Biddingアプリ、オンラインオークション、検査モバイルアプリ、Financialシステムなど多くのシステム構築プロジェクトを通してご支援してきました。クリティカルなシステムなのでエラーのない開発が必要ですが、同時にスピードも求められるチャレンジングなプロジェクトを多く経験できています。定例でミーティングをしていて既存システムの改善も常に行っています。</p>
								</div>
							</div>
							<div class="row">
								<div class="box-2">使用言語 PHP, NodeJS, SocketIO, Android Native</div>
							</div>
							
						</div>
						<div class="text-center btn-container-contact"  >
							<a href="../../case-study/jba-auction-system/" class="btn btn-contact-us-black">
								See more details
							</a>
						</div>
					</div>
					
				</div>
			</div>
		</section>
		<section class="other-stydycase section-style">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="osc-item">
							
							<div class="">
								<img src="assets/img/img-systemdev/logo-caroline.png" alt="Caroline Logo" style="width: 100%; height: auto;">
							</div>
							<h4>スピーディーな開発</h4>
							<div class="osc-desc"> 僅か3ヶ月でゼロから基幹業務システムを構築。オンラインで中古車を売買するマーケットプレイスを構築した。<a href="../../case-study/caroline-bidding-system/"  >もっと見る</a></div>
							<div class="osc-worktodo">Caroline-id.com, マーケットプレイス構築, 中古車売買 PHP, Laravel, HTML5</div>
						</div>
						
					</div>
					<div class="col-sm-4">
						<div class="osc-item">
							
							<div class="">
								<img src="assets/img/img-systemdev/logo-zutto.png" alt="Zutto Logo" style="width: 100%; height: auto;">
							</div>
							<h4>長期間に渡りシステム改善PDCA</h4>
							<div class="osc-desc"> 約5年に渡ってZuttoRide社のCRMシステムをゼロから開発、フェージングを適切にコントロールしながら機能追加、システム改善のPDCAサイクルを一緒に回してきた。<a href="../../case-study/zuttoride-customer-management-system/"  >もっと見る</a></div>
							<div class="osc-worktodo">ZuttoRide Indonesia, CRMシステム, バイクロードサービス, バイク保険 PHP, CakePHP, HTML5</div>
						</div>
						
					</div>
					<div class="col-sm-4">
						<div class="osc-item">
							
							<div class="">
								<img src="assets/img/img-systemdev/logo-vip.png" alt="VIP Plaza Logo" style="width: 100%; height: auto;">
							</div>
							<h4>PWAでE-Commerceを再構築</h4>
							<div class="osc-desc">PWAでE-Commerceを作り直した。ダイナミックなUIでユーザーの購買意欲を直接購入へと導くことに成功。リソースベースのAgile型開発でご支援。
								
								<a href="../../case-study/vip-plaza-progressive-web-app/"  >もっと見る</a></div>
								<div class="osc-worktodo">https://m.vipplaza.co.id/  ECサイト構築, インドネシアEC PWA, NodeJS, ReactJS</div>
							</div>
						</div>
					</div>
					<div class="list-study">
						<h3>その他のシステム開発実績</h3>
						<div class="list-study-container">
							<ul class="circle-list">
								<li>
									会員向けポイント管理＆交換システム構築.<br>
									<small class="text-muted">6months, AWS, Linux, MySQL, PHP Framework | <a data-toggle="modal" data-target="#pop1" href="#">See More</a></small>
								</li>
								<!-- modal 1 -->
								<div id="pop1" class="modal fade" role="dialog">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-body">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4>会員向けポイント管理＆交換システム構築.</h4><hr>
												<p>ポイント付与＆交換をキーとしたE-Commerceを構築。マルチドメインで複数店舗を管理可能な高機能基幹システムをスクラッチ開発。クライアント企業の従業員を対象に付与されたポイントを管理、E-Commerceから利用できるクライアント用サブシステム、サプライヤー向けサブシステム、クライアント企業の管理を行うサブシステムなどからなるシステムを構築。<br><br> E-Commerce、決済、在庫管理、配送管理、承認ワークフロー、マルチドメイン。約6ヶ月かけてLAMP環境にてスクラッチ開発を行った。24時間止められないシステムであるためAWSにて冗長性の高い構成を組んでいる。</p>
											</div>
										</div>
									</div>
								</div>
								<li>
									マルチレベルE-Commerceシステム開発.<br>
									<small class="text-muted">6months, AWS, Linux, MySQL, PHP Framework | <a data-toggle="modal" data-target="#pop2" href="#">See More</a></small>
								</li>
								<!-- modal 2 -->
								<div id="pop2" class="modal fade" role="dialog">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-body">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4>マルチレベルE-Commerceシステム開発.</h4><hr>
												<p>マルチレベルマーケティング会社が代理店経由の販売をコントロール可能なE-Commerceシステムの開発。Admin向け管理、ディストリビュータ管理、顧客管理の３つのモジュールでなる大規模ECサイトの構築。E-Commerce、決済（Virtualアカウント、クレジットカード）、商品在庫管理、請求管理、など複雑なシステムであったが約6ヶ月で開発した。</p>
											</div>
										</div>
									</div>
								</div>
								<li>
									自動車＆バイクオークションマネジメント基幹システム構築.<br>
									<small class="text-muted">6months, AWS, Linux, MySQL, PHP Framework, Node.js  | <a data-toggle="modal" data-target="#pop3" href="#">See More</a></small>
								</li>
								<!-- modal 3 -->
								<div id="pop3" class="modal fade" role="dialog">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-body">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4>自動車＆バイクオークションマネジメント基幹システム構築.</h4><hr>
												<p>オークション業務の基幹システムを構築。オークションコンダクターから在庫管理、オンラインオークションまで様々なシステムを開発＆統合してきた。ユーザーはWEBサイトからオークションに出品される車両情報を閲覧することができ、オンサイトでもオンラインでもオークション入札が可能。在庫管理や検品＆グレード管理、オークション、請求管理などが複雑に関連している、またトラフィックも多いことから難易度の高いシステムであるが、安定稼働を実現している。.</p>
											</div>
										</div>
									</div>
								</div>
								<li>
									モバイルアプリ開発（オークション入札アンドロイドアプリ）.<br>
									<small class="text-muted">2months, Android, node.js, JAVA, AWS | <a data-toggle="modal" data-target="#pop4" href="#">See More</a></small>
								</li>
								<!-- modal 4 -->
								<div id="pop4" class="modal fade" role="dialog">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-body">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4>モバイルアプリ開発（オークション入札アンドロイドアプリ）.</h4><hr>
												<p>車オークション会社向けにAndroidのオークション入札モバイルアプリの開発を行った。約600ユーザーが同時接続＆入札するシステムなので高いRealtime性とセキュリティ堅牢性、シンプルで使いやすいUIなどが求められたが、node.jsによる開発で実現した。ユーザー特定や請求情報など周辺機能との繋ぎ込み開発も。AWSサーバーの構成デザインやハイパフォーマンスなAPIの開発なども含めて全て開発し、安定稼働している.</p>
											</div>
										</div>
									</div>
								</div>
								<li>
									モバイルアプリ開発（検品＆品質スコアリングシステム）.<br>
									<small class="text-muted">4months, Android, node.js, JAVA, AWS | <a data-toggle="modal" data-target="#pop5" href="#">See More</a></small>
								</li>
								<!-- modal 5 -->
								<div id="pop5" class="modal fade" role="dialog">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-body">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4>モバイルアプリ開発（検品＆品質スコアリングシステム）.</h4><hr>
												<p>900もの検査項目を網羅して、検査受け入れ/スコアリングを検査官の熟練度に依存せず業務可能にするモAndroidモバイル・アプリケーションを開発した。車、バイクごとに検査アプリを開発、複数の車のタイプに対応している（検査項目が異なる）。入力された検査結果に応じて自動で該当車両のスコアリングを行い、検査証を印刷することを実現した。検査質問項目数はかなり多いが、中程度のスペックのスマホで十分にサクサク動くように軽量化に努めた。バックエンドとの連携APIなども全て開発。.</p>
											</div>
										</div>
									</div>
								</div>
								<li>
									ロードサービス事業者向けWEB-CRMシステム開発.<br>
									<small class="text-muted">3months, PHP Framework, Payment Gateway, AWS | <a data-toggle="modal" data-target="#pop6" href="#">See More</a></small>
								</li>
								<!-- modal 6 -->
								<div id="pop6" class="modal fade" role="dialog">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-body">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4>ロードサービス事業者向けWEB-CRMシステム開発.</h4><hr>
												<p>バイクのロードサービス、バイク保険の会員向けCRMシステムを開発・運用している。会員に会員証を発行するところから、会員自身がWEBから更新し、決済を行えるところまでシステム化。インドネシアの有力な決済代行システムと接続した。長期間に渡って機能追加、システム改善を継続している。AWSサーバーで運用.</p>
											</div>
										</div>
									</div>
								</div>
								<li>
									バイヤーズMypage機能の開発、CRMシステム開発.<br>
									<small class="text-muted">2months, PHP Framework, MySQL, AWS | <a data-toggle="modal" data-target="#pop7" href="#">See More</a></small>
								</li>
								<!-- modal 7 -->
								<div id="pop7" class="modal fade" role="dialog">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-body">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4>バイヤーズMypage機能の開発、CRMシステム開発.</h4><hr>
												<p>オークションに参加するバイヤーにRewardポイントを付与している。このポイントを管理、特典に交換すること等ができるマイページ機能を開発。これに合わせ、ログイン後、参加したオークション履歴や請求情報も確認できるように実装した。LAMP環境でシステム構築を行った。付与されるポイントなどは基幹システム連携し動的にデータ連携される。短期間で不具合のないシステムの開発に成功した。</p>
											</div>
										</div>
									</div>
								</div>
								<li>
									出版社向け広告台割管理システム.<br>
									<small class="text-muted">2.5 months, JQuery, HTML5, PHP Framework, MySQL | <a data-toggle="modal" data-target="#pop8" href="#">See More</a></small>
								</li>
								<!-- modal 8 -->
								<div id="pop8" class="modal fade" role="dialog">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-body">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4>出版社向け広告台割管理システム.</h4><hr>
												<p>東南アジア一帯で、またハワイで、フリーペーパーを発行する出版社向けに、コンテンツ（特に広告コンテンツ）の台割管理システムを構築した。他システムから広告契約一覧データを取り込む。それをドラッグ＆ドロップで各ページのレイアウトに視覚的に配置し、漏れや重複がないように容易に管理することを可能にした。</p>
											</div>
										</div>
									</div>
								</div>
								<li>
									中古車マーケットプレイス構築、ディーラー向けアプリ開発、など.<br>
									<small class="text-muted">2.5 months, JQuery, HTML5, PHP Framework, MySQL | <a data-toggle="modal" data-target="#pop9" href="#">See More</a></small>
								</li>
								<!-- modal 9 -->
								<div id="pop9" class="modal fade" role="dialog">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-body">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4>中古車マーケットプレイス構築、ディーラー向けアプリ開発、など.</h4><hr>
												<p>中古車ディーラーと購入者をマッチングする中古車マーケットプレイスの構築を3ヶ月で行い。その後、プレミアムディーラー機能、ディーラー向け管理モバイル・アプリケーションなど、様々な追加機能を開発＆運用している。毎日3万を超えるユーザーに使われているサービスだが適切に負荷分散・冗長化されたAWSで運用していて安定稼働を実現している。</p>
											</div>
										</div>
									</div>
								</div>
								<li>
									デジタルマップシステム開発.<br>
									<small class="text-muted">3 months, PHP Framework, MySQL, Google map API, Java Script | <a data-toggle="modal" data-target="#pop10" href="#">See More</a></small>
								</li>
								<!-- modal 10 -->
								<div id="pop10" class="modal fade" role="dialog">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-body">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4>デジタルマップシステム開発.</h4><hr>
												<p>デジタルマップを開発。ASEANの9カ国の地図上に各地でのインフラ開発プロジェクトをマッピング、検索やフィルターをかけて地図上でプロジェクト状況を確認できるようにした。Google mapを活用。</p>
											</div>
										</div>
									</div>
								</div>
								<li>
									C2C自動車オークションシステム開発.<br>
									<small class="text-muted">2 months, PHP Framework, MySQL, JQuery/Ajax, HTML5/CSS3 | <a data-toggle="modal" data-target="#pop11" href="#">See More</a></small>
								</li>
								<!-- modal 11 -->
								<div id="pop11" class="modal fade" role="dialog">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-body">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4>C2C自動車オークションシステム開発.</h4><hr>
												<p>自動車のC2Cオークション事業を行うスタートアップのシステム・モバイルアプリを短期集中開発。Ajail型でスピード開発に成功。ロゴの制作から基幹システム構築までトータルにサポート。</p>
											</div>
										</div>
									</div>
								</div>
								<li>
									公共団体向けセキュアなCMS開発.<br>
									<small class="text-muted">2 months, PHP Framework, MySQL | <a data-toggle="modal" data-target="#pop12" href="#">See More</a></small>
								</li>
								<!-- modal 12 -->
								<div id="pop12" class="modal fade" role="dialog">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-body">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4>公共団体向けセキュアなCMS開発.</h4><hr>
												<p>公共団体向けにセキュアなCMSの構築。インドネシアの公共団体がセキュアなCMSを構築する必要があった。管理ユーザー数が多いため、ユーザー管理や権限管理に工夫を凝らし、セキュリティ脆弱性を潰したシステムを構築した。再構築前はWordpress上で動いていたが、Laravelフレームワークを使いスクラッチ開発を行った。</p>
											</div>
										</div>
									</div>
								</div>
								
								<li>
									デジタルBook販売WEBサービス向けCMS構築.<br>
									<small class="text-muted">2months, PHP Framework, HTML5/CSS3,MySQL | <a data-toggle="modal" data-target="#pop13" href="#">See More</a></small>
								</li>
								<!-- modal 13 -->
								<div id="pop13" class="modal fade" role="dialog">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-body">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4>デジタルBook販売WEBサービス向けCMS構築.</h4><hr>
												<p>インドネシアでE-Book販売をしている会社のオンラインBook販売サイトのCMSを構築した。販売商品の管理＆更新が容易になり販売数の向上に寄与した。キャンペーンページのデザイン制作とCMSへのインテグレーションなども複数回行った。</p>
											</div>
										</div>
									</div>
								</div>
								<li>
									求人・求職マッチングポータルWEBの構築.<br>
									<small class="text-muted">2 months, PHP Framework, MySQL | <a data-toggle="modal" data-target="#pop14" href="#">See More</a></small>
								</li>
								<!-- modal 14 -->
								<div id="pop14" class="modal fade" role="dialog">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-body">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4>求人・求職マッチングポータルWEBの構築.</h4><hr>
												<p>人材紹介会社向けにJOBポータルWEBの構築をした。求人情報を掲載し、求職者からの応募を受け付けるWEBサイト。求職者はWEBサイトに会員登録することで直接該当ポジションに応募することができる。PHPフレームワークでスクラッチ開発した。開発期間は約3ヶ月。デザインから構築まで全てを行った。</p>
											</div>
										</div>
									</div>
								</div>
								<li>
									金融機関向け採用管理システムの構築.<br>
									<small class="text-muted">3months, PHP Framework, HTML5/CSS3,MySQL | <a data-toggle="modal" data-target="#pop15" href="#">See More</a></small>
								</li>
								<!-- modal 15 -->
								<div id="pop15" class="modal fade" role="dialog">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-body">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4>金融機関向け採用管理システムの構築.</h4><hr>
												<p>金融機関向けに採用管理WEBシステムを構築した。採用サイトの制作に合わせ、バックエンドで面談管理や承認フローを管理するシステムを構築した。納品前に外部のセキュリティ診断会社と協業し、セキュリティ脆弱性検査を行うなど個人情報を扱う金融機関のセキュリティ基準に見合うシステムを構築した。PHPフレームワークを使いスクラッチ開発で、約3ヶ月間。</p>
											</div>
										</div>
									</div>
								</div>
								<li>
									レンタカー会社向け フリートManagementシステム開発<br>
									<small class="text-muted">6monts, AWS, Linux, MySQL, SAP connection, PHP Framework | <a data-toggle="modal" data-target="#pop16" href="#">See More</a></small>
								</li>
								<!-- modal 16 -->
								<div id="pop16" class="modal fade" role="dialog">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-body">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4>金融機関向け採用管理システムの構築.</h4><hr>
												<p>金融機関向けに採用管理WEBシステムを構築した。採用サイトの制作に合わせ、バックエンドで面談管理や承認フローを管理するシステムを構築した。納品前に外部のセキュリティ診断会社と協業し、セキュリティ脆弱性検査を行うなど個人情報を扱う金融機関のセキュリティ基準に見合うシステムを構築した。PHPフレームワークを使いスクラッチ開発で、約3ヶ月間。</p>
											</div>
										</div>
									</div>
								</div>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<section class="style-6">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<h1 class="new6"><span class="underline2" style="padding: 0;">お客様の声</span></h1>
						</div>
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-12">
									<h4 class="new3">IT Department Headとして今まで数多くのシステム開発プロジェクトを経験したが、LOGIQUEほど、柔軟に対応してくれて、しかもそのクオリティーが高い開発会社はなかった。どうしてもユーザー部門から開発後期になってからの変更要望が出てしまったが、素早く対応して貰ったことに大変満足している。システム保守についてもお願いし、変わらずタイムリーで間違いのない対応をしてもらっており感謝している。</h4>
									<!-- <h4 class="new3">Q: Bagaimana awal mula Anda memiliki kebutuhan pembuatan sistem ini?</h4> -->
									<!-- <p>Klien: Pada mulanya kami melakukan banyak hal secara manual. Dengan banyaknya kendaraan yang harus kami lelang di berbagai cabang di Indonesia serta tingginya minat dari para pelanggan membuat kami kesulitan. Disitu kami mulai berpikir perlunya sebuah sistem IT yang membantu bisnis kami secara keseluruhan.</p> -->
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<h4 class="new3">前開発会社と契約解消することになったために、LOGIQUEに引き継ぎ開発や既存システムの保守依頼をすることになった。ドキュメントや十分な情報がないなかで柔軟に効果的な仕事をしてくれて感謝している。私達も把握していなかった仕様上の問題点などを指摘していただき、依頼されたことだけをやるのとは真逆のことをしていただいた。</h4>
									<!-- <h4 class="new3">Q: Apa perubahan yang dirasakan setelah menggunakan sistem yang dibuat oleh Logique?</h4> -->
									<!-- <p>Klien: Dampaknya luar biasa besar, ketika semuanya terotomatisasi kami merasakan pekerjaan yang kami lakukan lebih efektif dan efisien. Dari sisi resiko pencatatan pada buku yang mungkin rusak atau hilang pun terhindari dengan sistem yang ada, selain itu ada nilai tambah kontribusi kepada lingkungan dengan mengurangi penggunaan kertas.</p> -->
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<h4 class="new3">毎月決まった人日分だけ作業していただく定額制開発をお願いしている。作業が早いので、結果としてコスト効率の良い開発ができていて非常に満足している。次の大きな開発案件では、ラボ型開発でお願いしようと考えています。</h4>
									<!-- <h4 class="new3">Q: Bagaimana pengalaman kerjasama Anda dengan Logique dalam pembuatan sistem ini?</h4> -->
									<!-- <p>Klien: Menurut kami tim Logique benar-benar diisi oleh orang-orang yang kompeten. Saya tidak bisa membayangkan bagaimana proses bisnis kami yang kompleks bisa dibuat menjadi sistem yang komprehensif termasuk proses-proses kecil yang tidak boleh terlewat semua bisa dipenuhi. Kami puas dengan kinerja Logique dan merekomendasikan layanan mereka ke semua pihak yang membutuhkan.</p> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="style-7">
					<div class="row">
						<div class="container">
							<div class="row" style="display: flex; flex-wrap: wrap;">
								<div class="col-md-4">
									<div class="justify-content-center">
										<img src="assets/img/img-systemdev/key.png" alt="" class="img img-responsive">
									</div>
								</div>
								<div class="col-md-8">
									<div class="row">
										<div class="col-md-12">
											<h2 class="new2">システム開発を成功させるためのキーポイント</h2>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<h4 class="bold">経験</h4>
											<p>LOGIQUEはインドネシアで豊富なシステム開発経験をもっています。スケジューリング、要件定義、システム開発、テスト、インフラ設計、Deploy、ユーザートレーニングなど、各工程でこの経験を活かします。</p>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<h4 class="bold">スピード・柔軟性</h4>
											<p>ビジネスのスピードは日に日に早くなっています。システム開発に6ヶ月以上もかけていては、環境変化についていけません。LOGIQUEではスピードを最重要視しています。アジャイル開発で迅速に、要件の変更などにも柔軟に対応します。</p>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<h4 class="bold">品質・セキュリティ</h4>
											<p>クオリティは犠牲にはできません。標準化された開発を行うことで不具合が少ない、メンテナンス性の高い開発をします。セキュリティ脆弱性のリスクも最小化した上で納品します。</p>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="text-center btn-container-contact"  >
										<a href="/jp/contact.php" class="btn btn-contact-us-black">
											インドネシアでシステム開発や運用が必要でしたらお気軽にご相談ください
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<?php /*<section class="tahap-pemesanan-list">
					<div class="border-top-list hidden-xs hidden-sm"></div>
					<div class="container">
						<div class="row">
							<div class="col-md-offset-6 col-md-6">
								<h4><b>システム開発、WEBアプリ開発、システム保守運用などで以下のようなお悩みないですか？LOGIQUEがご支援します。</b></h4>
								<ul style="list-style-type: square;">
									<li class="m-b-5">社内システムが必要だがIT部門がなく進め方すら分からない</li>
									<li class="m-b-5">現行システムの保守契約がなく、変更したいのだが、協力会社が不在</li>
									<li class="m-b-5">パッケージシステムを導入すべきかスクラッチ開発すべきか分からない</li>
									<li class="m-b-5">IT部門があり内製できるのだがリソースが不足している</li>
									<li class="m-b-5">必要なシステム開発プロジェクトのRFPを作ってもらいたい</li>
									<li class="m-b-5">委託業者から納品されたシステムがバグだらけで困っている</li>
									<li class="m-b-5">OSやブラウザのバージョンに合わせてシステムもバージョンUPしたい</li>
									<li class="m-b-5">日本本社で使っている社内システムをインドネシアローカライズしたい</li>
									<li class="m-b-5">インドネシア国内のデータセンターにシステムを配置したい</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="border-top-list-2 hidden-xs hidden-sm"></div>
				</section> */ ?>
				<section class="tahap-pemesanan-2 hidden-xs" style="padding: 2em"></section>
				<footer class="contact">
					<div class="container">
						<div class="row">
							<div class="col-md-4">
								<h2 style="margin-top: 0">お問い合わせ</h2>
								<a href="/jp/" target="_blank"><img src="assets/img/img-systemdev/logo.png" alt="Fitur Perusahaan" class="cs-custom"></a>
								<div class="m-t-10 text-left">LOGIQUE DIGITAL INDONESIA<br>
									Ad Premier Building 19th Floor. <br>
									Jalan Tb. Simatupang No. 5 Ragunan, <br>
									Ps. Minggu, Jakarta Selatan, <br>Indonesia 12550</div>
									<div><i class="fa fa-phone fa-lg" style="padding-right: 5px"></i> 021) 22708935 / 36 <br><i class="fa fa-whatsapp fa-lg" style="padding-right: 5px"></i> 0811870321</div>
									<br/>
									<div class="row">
										<div class="col-xs-6">
											<div class="link-footer-webdev">
												<a href="/jp/index.php" target="_blank">Home</a>
												<a href="/jp/logique.php" target="_blank">会社概要</a>
												<a href="/jp/portfolio.php" target="_blank">制作実績</a>
												<a href="/jp/services.php" target="_blank">サービス</a>
											</div>
										</div>
										<div class="col-xs-6">
											<div class="link-footer-webdev">
												<a href="/jp/joinus.php" target="_blank">採用/パートナー</a>
												<a href="/career/" target="_blank">Join LOGIQUE</a>
												<a href="/jp/contact.php" target="_blank">お問い合わせ</a>
											</div>
										</div>
									</div>
									<div class="link-footer-webdev">
										<br/>
										<div style="margin-bottom:8px"><b>Social Media</b></div>
										<div class="medsos-new">
											<ul>
												<li><a href="https://www.facebook.com/logique.id/" target="_blank" aria-label="Facebook" rel="noreferrer"><i class="fa fa-facebook-official"  ></i></a></li>
												<li><a href="https://twitter.com/LogiqueDigital" target="_blank" aria-label="Twitter" rel="noreferrer"><i class="fa fa-twitter" aria-hidden="true"  ></i></a></li>
												<li><a href="https://www.instagram.com/logiquedigital/" target="_blank" aria-label="Instagram" rel="noreferrer"><i class="fa fa-instagram" aria-hidden="true"  ></i></a></li>
												<li><a href="https://www.linkedin.com/company/13420656" target="_blank" aria-label="LinkedIn" rel="noreferrer"><i class="fa fa-linkedin-square" aria-hidden="true"  ></i></a></li>
											</ul>
										</div>
										
									</div>
								</div>
								<div class="col-md-4 hidden-md hidden-lg">
									<span><hr>インドネシアでシステムやWeb、アプリの開発、インフラの構築が必要な場合LOGIQUEにご相談ください。CMS、ECサイト、CRMシステム、会計システム、人事管理システムの構築運用を得意にしています。自動車産業、金融、スタートアップへのご支援を多数経験していて、システムコンサルティングからご支援可能です。AWS,Alibabaクラウドなどインフラの構築も行います。</span>
									<div class="row">
										<div class="col-sm-12">
											<div class="link-footer-webdev">
												<br/>
												<!-- <div style="margin-bottom:8px"><b>LOGIQUE's Products</b></div> -->
												<a href="https://dokodemo-kerja.com" target="_blank" rel="noreferrer">
													<img src="assets/img/img-systemdev/dokodemo-ads.jpg" alt="" style="width: 100%; height: auto; object-fit: scale-down;">
												</a>
												<!-- <a href="/jp/product/nippo.php" target="_blank">Nippo</a> -->
												<!-- <a href="/jp/product/sugoi-saiyo.php" target="_blank">Sugoi Saiyo</a> -->
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<?php if(isset($msg)) { echo $msg; } ?>
									<form role="form" name='myForm' onsubmit='return validateForm()' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
										<input type='hidden' name='submitted' id='submitted' value='1'/>
										<input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
										<div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
										<div class="">
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Nama" name="name" aria-label="Name" value='<?php echo $formproc->SafeDisplay('name') ?>'>
											</div>
											<!-- <div class="form-group">
												<input type="number" class="form-control" placeholder="No Ponsel" name="phone" value='<?php echo $formproc->SafeDisplay('phone') ?>'>
											</div>
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Perusahaan" name="company" value='<?php echo $formproc->SafeDisplay('company') ?>'>
											</div> -->
											<div class="form-group">
												<input type="email" class="form-control" placeholder="Email" name="email" aria-label="Email" value='<?php echo $formproc->SafeDisplay('email') ?>'>
											</div>
											<div class="form-group">
												<textarea name="" id="" cols="30" rows="6" class="form-control" placeholder="Pesan" name="message" aria-label="Message" style="resize:vertical;"><?php echo $formproc->SafeDisplay('message') ?></textarea>
											</div>
											<div class="form-group">
												<div class="g-recaptcha captcha-custom" data-sitekey="6LcuHywUAAAAACj__hCefsBCkoIC2ExM2Sur4cCp"></div>
											</div>
											<div class="form-group btn-submit text-right text-L">
												<br>
												<button type="submit" class="btn btn-logic btn-sm">Kirim</button>
											</div>
										</div>
									</form>
								</div>
								<div class="col-md-4 hidden-xs hidden-sm">
									<p>インドネシアでシステムやWeb、アプリの開発、インフラの構築が必要な場合LOGIQUEにご相談ください。CMS、ECサイト、CRMシステム、会計システム、人事管理システムの構築運用を得意にしています。自動車産業、金融、スタートアップへのご支援を多数経験していて、システムコンサルティングからご支援可能です。AWS,Alibabaクラウドなどインフラの構築も行います。</p>
									<div class="row">
										<div class="col-sm-12">
											<div class="link-footer-webdev" style="padding-left:30px">
												<br/>
												<!-- <div style="margin-bottom:8px"><b>LOGIQUE's Products</b></div> -->
												<a href="https://dokodemo-kerja.com" target="_blank" rel="noreferrer">
													<img src="assets/img/img-systemdev/dokodemo-ads.jpg" alt="" style="width: 100%; height: auto; object-fit: scale-down;">
												</a>
												<!-- <a href="/jp/product/nippo.php" target="_blank">Nippo</a> -->
												<!-- <a href="/jp/product/sugoi-saiyo.php" target="_blank">Sugoi Saiyo</a> -->
												
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</footer>
					<section class="tahap-pemesanan-2 text-center hidden-md hidden-lg" style="padding: 2em">Copyright 2018 Logique</section>
					
					<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
					<script src="/js/bootstrap.min.js"></script>
					<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight-min.js"></script>
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
						
						$('.min-h').matchHeight({
							byRow: false
						});
						$('.osc-desc').matchHeight({
							byRow: false
						});
						
					</script>
				</body>
				</html>
				
