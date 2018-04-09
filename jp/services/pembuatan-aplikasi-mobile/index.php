 <?php 
require_once("form/fgcontactform.php");

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
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="モバイルアプリ開発サービスのご紹介。インドネシアでお客様のニーズに沿ったスマートフォンアプリの企画・開発を行っています.">
	<meta name="keywords" content="">
	<meta name="author" content="PT LOGIQUE DIGITAL INDONESIA ">
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <title>スマホアプリ開発｜モバイルアプリ開発・WebシステムのLOGIQUE DIGITAL INDONESIA【ジャカルタ】</title>
	<link href="/css/bootstrap.min.css" rel="stylesheet">	 
    <link href="css/style.css" rel="stylesheet">
    <link href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css" rel="stylesheet" type="text/css" />
	<script src="https://use.fontawesome.com/df558bb4a1.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-105878648-1', 'auto');
	ga('send', 'pageview');

	</script>
</head>
	<body class="mobileapp-page">
		<header>
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<a href="/jp/"><img alt="logo" class="img-responsive" src="img/logo_logique.png"/></a>
					</div>
				</div>
				<div class="row">
					<div class="col-md-7">
						<br/><br/><br/>
						<h1><span class="yellow">モバイルアプリ（ANDROID｜iOS｜ハイブリッド）</span>をインドネシアで、高品質でリーズナブルなコストで開発するなら<span class="yellow">LOGIQUE</span>にご依頼ください。</h1>
						<br/>
						<p>	
						モバイル・スマホアプリの開発、既存のアプリの改修、バージョンアップ対応、メンテナンス契約についてなど、お気軽にご相談ください。確かな技術に基づいたサービスを低価格でご提供しています。アプリの開発以外にもモバイル・スマホ活用ソリューション、PWA等についても豊富な経験ありますのでご相談お待ちしています。
						</p>
						<div class="visible-md visible-lg"><br/><br/><br/><br/><br/></div>
					</div>
					<div class="col-md-5">
						<img alt="Mobile" src="img/hp-header.png" class="hp-header img-responsive center-block"/>
					</div>
				</div>
			</div>
		</header>
		<div class="hubungi-kami-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<a href="/jp/contact.php" target="_blank" style="color:#000">モバイル・スマホ活用についてお気軽に日本語でご連絡ください。</a>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<br/><br/>
			<div class="row">
				<div class="col-md-5">
					<h2 class="first"><span>スマートフォンアプリ開発</span>は開発パートナー選びが重要</h2>
					<br/>
					<img alt="Pengembangan Aplikasi Mobile Berorientasi Pengguna" src="img/mobile-phone.png" class="img-responsive center-block mobile-phone"/>
				</div>
				<div class="col-md-7">
					<p style="font-size: 18px;">
						アプリ開発・運用で成功するには開発パートナー選びが重要です。システム開発やWEB制作に比べて、テクノロジーの変化、バージョンアップが頻繁であること、端末種が豊富なことから、開発会社には高い技術力が求められ、緻密で正確な管理運用能力が必要になります。LOGIQUEはよく考えて設計されたUIデザインでアプリ開発を行い、ユーザビリティの高いアプリを開発します。<br/><br/>
						iPhoneやAndoridアプリの開発をしたいが、どのように、どこに依頼したら良いのかわからない、メンテナンス性の良いアプリを作りたい、まずはプロトタイプだけ制作してもらいたい、企画から助けてくれる開発会社を探しているなどの課題やニーズがあれば、お気軽にLOGIQUEにご相談ください。
					</p>
				</div>
			</div>
			<br/><br/>
		</div>
		<div class="solusi">
			<div class="container">
				<br/><br/>
				<div class="row">
					<div class="col-md-4">
						<h2 class="title">LOGIQUEのアプリ開発の進め方、特徴</h2>
					</div>
					<div class="col-md-8">
						<ul class="fa-ul">
							<li><span class="fa-li"><i class="fa fa-check-square"></i></span>要件定義からテスト、納品までスムーズで柔軟なプロジェクトマネジメントを行います。WEB制作やWEBシステム開発で実績のあるプロジェクト管理方法を用います。</li>
							<li><span class="fa-li"><i class="fa fa-check-square"></i></span>企画も可能です。今までの経験、インドネシアの慣習も含め、ユーザーのニーズを叶える有益なアプリとなるよう、企画・要件定義フェーズでのアドバイスを惜しみません。</li>
							<li><span class="fa-li"><i class="fa fa-check-square"></i></span>Uデザインはアプリ開発の中の大きなウェートを占める作業です。LOGIQUEは社内にデザイナーを複数抱えていますので、デザインと開発で分断が起こるというようなことがありません。デザイン力とテクノロジーをうまく融合させます。</li>
							<li><span class="fa-li"><i class="fa fa-check-square"></i></span>多くのお客様からシステムの運用保守も任せられています。スマホアプリの効果を出すためには、リリース後の運用が非常に大事です。運用、デジタルマーケティング実施もLOGIQUEは総合的にご支援します。</li>
						</ul>
					</div>
				</div>
				<br/><br/>
			</div>
		</div>
		<div class="container logique-help">
			<br/><br/><br>
			<div class="row">
				<div class="col-md-12">
					<h2 class="font-28 text-center"><span class="purple"><b>LOGIQUE</b></span>が気をつけていること</h2>
				</div>
				<div class="clearfix"></div>
				<br/><br/><br>
				<div class="col-md-4">
					<div class="div-help">
						<h3 class="div-title"><span class="title purple"><b>企画・仕様決定に貢献します</b></span></h3>
						<div class="">
						<img alt="Ide Aplikasi Inovatif" class="img-responsive center-block" src="img/inovatif.png"/><br/>
						ユーザーのニーズは間違いないか、本当にアプリ化することがベストな選択なのか、iOSアプリも必要か、など、開発に着手する前に考えるべきことは多くあります。企画・要件定義フェーズとして参画し、このプロセスを加速します。場合によっては開発しないという選択もあるかもしれませんが、インドネシアのマーケットを熟知しているLOGIQUEだからこそ提言できることがあります。企画・仕様決定も、過去の実績を基にあるべきUI／UXをアドバイスいたします。						
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="div-help">
						<h3 class="div-title"><span class="title purple"><b>適切なフェージングで滞りなく</b></span></h3>
						<div class="">
						<img alt="Memberikan Nilai Tambahan" class="img-responsive center-block" src="img/nilai-tambah.png"/><br/>
						アプリを公開すると間違いなく改善事項、追加機能が出てきます。Phase1では迅速に公開までもていくこと、かつPhase2以降での拡張性を十分に持たせた作りを推奨しています。フェーズ分け、追加・変更要望の管理はプロジェクト管理の中でも間違えられない判断が求められます。ユーザーニーズもテクノロジーも変化が早くなっています。１つのPhaseに全てを詰め込まずに、アジャイル的にアプリケーションをスピーディーに改善・発展していきます。
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="div-help">
						<h3 class="div-title"><span class="title purple"><b>しっかり保守運用</b></span></h3>
						<div class="">
						<img alt="Meningkatkan Proses Bisnis" class="img-responsive center-block" src="img/proses-bisnis.png"/><br/>
						トラフィックボリュームに応じた適切なサーバーのチューニングや、OS、ミドルウェアのバージョンアップへの対応などきちんと保守運用できる体制が整っていることが、継続的なUI/UX改善のベースになります。地味ではありますが、御社のマーケティング担当さんの工数を掛けずに、しっかりと保守運用していきます。デジタルマーケティング領域のご支援も可能です。</div>
					</div>
				</div>
			</div>
			<br/><br/><br/>
		</div>
		<div class="solusi revision">
			<div class="container">
				<br/><br/>
				<div class="row row-center-md">
					<div class="col-md-offset-1 col-md-4">
						<h2 class="title">モバイル（スマートフォン）アプリをもつメリット</h2>
					</div>
					<div class="col-md-6">
						<ul class="fa-ul">
							<li><span class="fa-li"><i class="fa fa-check-square"></i></span>ユーザーとの接触頻度を高められる（プッシュ通知活用）</li>
							<li><span class="fa-li"><i class="fa fa-check-square"></i></span>インターネット接続状況の影響を少なくすることが可能.</li>
							<li><span class="fa-li"><i class="fa fa-check-square"></i></span>操作性・表示速度を高められる.</li>
						</ul>
					</div>
				</div>
				<br/><hr/><br/>
				<h2 class="font-28 text-center">モバイルアプリ開発関連サービス</h2><br/>
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
					ネイティブなモバイル（スマートフォン）アプリ開発（Android、iOS、ハイブリッド）、企画、保守運用だけでなくPWA（プログレッシブウェブアプリ）の開発も行っております。最適な実装方法を検討する段階からご相談いただければと思います。
					</div>
				</div>
				<br/>
				<div class="row">
					<div class="col-md-4">
						<div class="layanan-kami">
							<h3 class="title">iPhone/iPad用のiOSアプリケーション開発</h3>
							<br/>
							<img alt="Pengembangan Aplikasi iOS untuk iPhone / iPad" src="img/apple.png" class="img-responsive center-block"/><br/>
							インドネシアでのApple端末普及率はまだすごく高くはないですが、Highエンドなユーザー層では多く使われています。AndroidアプリケーションをiOS上でも動くように開発したいという案件は増えてきています。経験豊富なSwiftエンジニアが開発担当します。
						</div>
					</div>
					<div class="col-md-4">
						<div class="layanan-kami">
							<h3 class="title">Androidアプリケーション開発</h3>
							<br/>
							<img alt="Pengembangan Aplikasi Android" src="img/android.png" class="img-responsive center-block"/><br/>
							インドネシアでモバイルアプリを作るとなった時にファーストオプションになるのがアンドロイドアプリの開発です。対象OSバージョンやメインターゲット端末種などインドネシアを熟知する当社だからこそアドバイスできることがありますのでお気軽にご相談ください。
						</div>
					</div>
					<div class="col-md-4">
						<div class="layanan-kami">
							<h3 class="title">ハイブリッドアプリ開発</h3>
							<br/>
							<img alt="Pengembangan Aplikasi Hybrid" src="img/hybrid.png" class="img-responsive center-block"/><br/>
							回線速度が遅いインドネシアではハイブリッドアプリ（WEBアプリ）は避けられてきましたが、回線状況も改善が見られること、ブラウザの機能が上がっていること、いまだに低い端末スペックが多く使われていることから、WEBアプリが最適なケースも多くあります。より短い時間で公開が可能なメリットもあります。
						</div>
					</div>
				</div>
				<div class="hidden-xs hidden-sm"><br/></div>
				<div class="row">
					<div class="col-md-4 col-md-offset-2">
						<div class="layanan-kami">
							<h3 class="title">UI/UXデザイン</h3>
							<br/>
							<img alt="Desain UI/UX Aplikasi Mobile" src="img/ux.png" class="img-responsive center-block"/><br/>
							モバイルアプリのUI・UXデザイン経験が豊富なデザイナーが、必要に応じてA/Bテストしながら、ユーザビリティーの高いUI・UXを制作します。
						</div>
					</div>
					<div class="col-md-4">
						<div class="layanan-kami">
							<h3 class="title">バックエンド開発</h3>
							<br/>
							<img alt="Pengembangan CMS / API" src="img/cms.png" class="img-responsive center-block"/><br/>
							モバイルアプリと他システムとの連携などが必要になるケースがほとんどです。インフラの設計設定から、他システムとのデータ連携、バックエンドシステムの開発まで幅広く対応可能です。
						</div>
					</div>
				</div>
				<br/><br/>
			</div>
		</div>
		<div class="portofolio">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<h2 class="font-28">モバイルアプリ開発実績</h2>
						<br/>
						<div class="font-20">
							インドネシアで多くのモバイルアプリ、ハイブリッドアプリの開発を行ってきました。モバイル・ソリューションの活用でインドネシア市場で発展する企業をご支援しています。
						</div>
						<br/><br/>
					</div>
					<div class="col-md-7">
					 <div class="portfolio-slider">
						<div>
							<div class="row">
								<div class="col-sm-5">
									<img alt="Sunlife" class="img-responsive center-block" src="img/sunlife.png"/>
								</div>
								<div class="col-sm-7">
									<div class="caption-portfolio">
										<div class="arrow-left"></div>
										<div class="font-28">SunLife Financial</div><br/>
										<div class="font-20">
										保険会社において保険代理店とのコミュニケーション、eラーニングアプリの開発運用。営業ツールとして使えるアプリの開発も行った。
										</div>
									</div>
								</div>
							</div>
						</div>
						<div>
							<div class="row">
								<div class="col-sm-5">
									<img alt="Otomart" class="img-responsive center-block" src="img/otomart.png"/>
								</div>
								<div class="col-sm-7">
									<div class="caption-portfolio">
										<div class="arrow-left"></div>
										<div class="font-28">OTO mart</div><br/>
										<div class="font-20">
										中古車マッチングWEB。中古車ディーラーが保有＆OTOmartにポストする車の管理をモバイルアプリを通して行っている。iOS、Android両プラットフォームでネイティブアプリとして開発運用。<br/>
										2ヶ月、Objective-C、Swift、CakePHP、HTML5、MySQL
										</div>
									</div>
								</div>
							</div>
						</div>
						<div>
							<div class="row">
								<div class="col-sm-5">
									<img alt="Frangipani" class="img-responsive center-block" src="img/frangipani.png"/>
								</div>
								<div class="col-sm-7">
									<div class="caption-portfolio">
										<div class="arrow-left"></div>
										<div class="font-28">Frangipaniスパ</div><br/>
										<div class="font-20">
										スパのお客様に施術後レビューコメントを記入いただくアプリの開発。レビューに基いて、テラピストやレセプショニストの人事評価を行うバックエンドシステムと連動。Androidネイティブアプリの開発。バックエンドはCakePHPで構築。
										</div>
									</div>
								</div>
							</div>
						</div>
					 </div>
					</div>
				</div>
			</div>
		</div>
		<div class="bg-grey">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h2 class="font-28 text-center">Cara Kerja LOGIQUE</h2>
						<br/>
						<p class="text-center">
							Baik untuk proyek B2C, B2B, startup, atau solusi operasional perusahaan, pertama-tama, kami akan meluangkan waktu untuk memahami bisnis, produk dan kebutuhan pengguna. Cara dan hasil kerja kami sangat disukai oleh pengguna dan klien karena mampu menciptakan aplikasi yang optimal dan memberi nilai tambah dari segi bisnis.
						</p>
					</div>
				</div>
				<br/><br/>
				<div class="row">
					<div class="col-md-5ths">
						<div class="contain-img">
							<img class="img-responsive center-block" src="img/cara-kerja1.png" alt="Perencanaan"/>
							<div class="text-center title">Perencanaan</div>
						</div>
						<p>
							Diawal proyek kami akan berdiskusi dengan Anda dan memastikan bahwa semua kebutuhan perusahaan, layanan, atau pengguna telah masuk ke dalam cakupan aplikasi. Kami akan memberikan rancangan konsep berupa wireframe sebagai hasil akhir.
						</p>
					</div>	
					<div class="col-md-5ths">
						<div class="contain-img">
							<img class="img-responsive center-block" src="img/cara-kerja2.png" alt="Desain"/>
							<div class="text-center title">Desain</div>
						</div>
						<p>
							Dari konsep yang telah dihasilkan, desainer kami akan mulai membuat desain halaman. Kami dapat memberikan beberapa opsi untuk desain halaman utama yang bisa Anda pilih. Desain yang cocok akan kami revisi lebih lanjut dan kami akan melanjutkan desain halaman lainnya.
						</p>
					</div>
					<div class="col-md-5ths">
						<div class="contain-img">
							<img class="img-responsive center-block" src="img/cara-kerja3.png" alt="Pengembangan"/>
							<div class="text-center title">Pengembangan</div>
						</div>
						<p>
							Berdasarkan konsep secara fungsional tim teknis kami akan mulai mengembangkan aplikasi mobile yang dapat berfungsi dengan baik sesuai dengan standar pengembangan dan keamanan aplikasi yang ada.
						</p>
					</div>
					<div class="col-md-5ths">
						<div class="contain-img">
							<img class="img-responsive center-block" src="img/cara-kerja4.png" alt="Testing"/>
							<div class="text-center title">Testing</div>
						</div>
						<p>
							Tim QA kami akan memastikan bahwa fitur yang dikembangkan oleh tim teknis sudah berjalan sebagaimana mestinya sehingga Anda tidak perlu khawatir.
						</p>
					</div>
					<div class="col-md-5ths">
						<div class="contain-img">
							<img class="img-responsive center-block" src="img/cara-kerja5.png" alt="Peluncuran Aplikasi"/>
							<div class="text-center title">Peluncuran Aplikasi</div>
						</div>
						<p>
							Selamat! Setelah semua proses dilalui, aplikasi Android atau iOS Anda siap untuk diluncurkan pada App Store atau Google Play Store. 
						</p>
					</div>
				</div>
			</div>
		</div>
		<!--<div class="slider-mobile">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<img src="img/device.png" class="device hidden-xs"/>
						<img src="img/device-m.png" class="device visible-xs"/>
						<div class="slider-app">
						  <div><img src="img/sunlife.png" class="img-responsive center-block"/></div>
						  <div><img src="img/frangipani.png" class="img-responsive center-block"/></div>
						  <div><img src="img/otomart.png" class="img-responsive center-block"/></div>
						  <div><img src="img/otomart.png" class="img-responsive center-block"/></div>
						</div>		
					</div>
				</div>
			</div>
		</div>-->
		<div class="div-form">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-2 col-md-8">
						スマートフォンアプリ、タブレットアプリの企画・開発・運用保守についてお気軽にご相談ください。
						<br/>
						<?php if(isset($msg))
						{
						echo $msg;
						} 
						?>
						<form id="contact-form-mobile"  class="contactform-mobile" role="form" name='myForm' onsubmit='return validateForm()' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
						<input type='hidden' name='submitted' id='submitted' value='1'/>
						<input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
						<fieldset><div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div></fieldset>
							<div class="form-group">
								<div class="row">
									<div class="col-md-12">
										<input type="text" name="name" placeholder="お名前" class="form-control name-input" value='<?php echo $formproc->SafeDisplay('name') ?>'/>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-md-6">
										<input type="email" name="email" placeholder="Email" class="form-control" value='<?php echo $formproc->SafeDisplay('email') ?>' />
									</div>
									<div class="col-md-6">
										<input type="number" name="phone" placeholder="TEL" class="form-control" value='<?php echo $formproc->SafeDisplay('phone') ?>' />
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-md-12">
										<textarea class="form-control" placeholder="お問い合わせ" name="message"><?php echo $formproc->SafeDisplay('message') ?></textarea>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-md-6">
										<div class="sr-only">Recaptcha</div>
										<div class="g-recaptcha" data-sitekey="6LcuHywUAAAAACj__hCefsBCkoIC2ExM2Sur4cCp"></div>
									</div>
									<div class="col-md-6">
										<button type="submit" class="pull-right btn btn-submit">送信</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="buat-sekarang">
			<div class="container">
				<div class="row row-center-md">
					<div class="col-md-12 font20">
						LOGIQUEのその他のサービス（WEB制作、WEBシステム開発）をご確認いただく
						<div class="hidden-lg hidden-md"><br/></div>
					</div>
					<div class="col-md-6">
						<a href="/jp/services.php" target="_blank" class="btn btn-buat-sekarang">その他のサービス</a>
					</div>
				</div>
			</div>
		</div>
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="title">LOGIQUEについて</div>
						<br/>				
						LOGIQUEは、インドネシアの首都ジャカルタでWebコンサルティング、モバイル・スマートフォンアプリ開発、WEBサイト制作、デジタルマーケティング運営代行、採用人事管理システム開発、リモートワーク管理ツールの提供、グラフィックデザイン制作、動画制作、会社案内・パンフレットデザイン・印刷サービスを提供しています。ジョグジャカルタに開発センターがあります。インターナショナルなクオリティをインドネシアの単価でのWEB関連サービス提供に努めています。ホームページ制作からアプリ開発、システム開発までご相談お待ちしています。<br/>
						<div class="visible-sm visible-xs"><br/></div>
					</div>
					<div class="col-md-4">
						<div class="title">お問い合わせ</div>
						<a href="/jp/contact.php" target="_blank"><img alt="Logo" src="img/logo_logique_footer.png" class="img-responsive"/></a>
						Ad Premier Building 19th Floor. <br/>
						Jalan Tb. Simatupang No. 5 <br/>
						Ragunan, Ps. Minggu, <br/>
						Jakarta Selatan, Indonesia 12550 <br/>
					</div>
				</div>
			</div>
		</footer>
		<div class="copyright">
			© 2018 Logique Digital Indonesia. All Rights Reserved.
		</div>
		<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
		<script src="/js/jquery.matchHeight.js"></script>
		<script src="/js/slick.min.js"></script>
		<script src='https://www.google.com/recaptcha/api.js'></script>
		<script type="text/javascript">			
			$(function() {
				$('.div-help').matchHeight();
				$('.layanan-kami').matchHeight();
			});	
			
			$('.portfolio-slider').slick({
			  dots: true,
			  infinite: true,
			  speed: 500,
			  fade: true,
			  arrows: false,
			  autoplay: true,
			  cssEase: 'linear'
			});
		</script>
	</body>
</html>