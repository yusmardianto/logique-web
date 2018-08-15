 <?php 
require_once("form/fgcontact_systemdev.php");

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
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="Dalam melakukan pembuatan website, pengembangan website, pembuatan aplikasi dan pengembangan aplikasi serta desain web. Logique sebagai perusahaan jasa konsultasi digital membuat beberapa mekanisme yang perlu diketahui. Berikut ini adalah beberapa mekanisme pembuatan website yang ada di Logique">
	<meta name="keywords" content="pembuatan website, pengembangan aplikasi, pembuatan aplikasi, jasa konsultasi, aplikasi android, jasa pembuatan website, logique, logique digital indonesia, mekanisme, desain web, aplikasi android, keamanan web, pengembangan website, jasa pembuatan website, pembuatan website perusahaan.">
	<meta name="author" content="PT LOGIQUE DIGITAL INDONESIA ">
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <title>Pembuatan Sistem Web di Logique</title>
	<link href="/css/bootstrap.min.css" rel="stylesheet">	 
    <link href="css/style_systemdev.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
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
			<div class="container" style="position:relative">
				<div class="row">
					<!-- <div class="col-md-12">
						<a href="/jp/" target="_blank">
							<div class="logo-header">
								<img src="img/webdev/logo.png" alt="Fitur Perusahaan" class="img-responsive">
							</div>
						</a>
					</div> -->
				</div>
				<div class="row">
					<div class="language-btn">
						<ul class="list-inline">
							<li><a href="#" style="color: #ccc;cursor: not-allowed;">EN</a></li>
							<li><a href="/layanan/pembuatan-sistem-web/">ID</a></li>
							<li class="active"><a href="#">JP</a></li>
						</ul>
					</div>
					<div class="col-md-offset-7 col-md-5 m-t-10em">
						<h1 class="text-left m-new">インドネシアでシステム開発が必要ならLOGIQUEにご相談ください</h1>
					</div>
				</div>
			</div>
		</header>
		<section class="style-1" style="padding-bottom: 0;padding-top:20px;">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-1 col-md-10 text-center">
						<h1>システム開発、高いから、時間かかるから、難しいから、必要なのに諦めていませんか？インドネシアでのIT/WEBシステム開発、LOGIQUEなら、もっと早く、効率的にできます。お気軽にご相談ください。</h1>
					</div>
				</div>
			</div>
		</section>
		<section class="style-2">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-7 col-md-5">
						<h1 class="new5">LOGIQUEのシステム開発・WEBアプリ開発</h1>
					</div>
				</div>
			</div>
		</section>
		<section class="style-3">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<h3 class="new1">[高い技術力、最先端の技術の利用]</h3>
						<p class="new4">会計管理、人事管理などの業務システムから、CMS、ECサイト構築、アンケートシステム開発、サーバ、インフラまで、幅広い分野のシステム開発をワンストップで対応することができます。多数のインドネシアでの開発実績と恐れずに新しい技術を取り入れていくことにより、素早く、柔軟で、長く使えるシステム構築を行います。</p>
					</div>
					<div class="col-md-3">
						<h3 class="new1">[インフラ設計・構築]</h3>
						<p class="new4">インドネシア国内外のクラウドサーバーの設計構築を行います。シンガポールリージョンのAWSや、インドネシア国内のAliクラウドなどの実績を豊富にもっています。サーバーの保守運用、パフォーマンス・チューニングサービスも提供しています。オンプレミスサーバーからクラウドサーバーへのマイグレーションも多数実績あります。</p>
					</div>
					<div class="col-md-3">
						<h3 class="new1">[セキュアなシステム構築]</h3>
						<p class="new4">納品前に通常のテストに加えセキュリティ脆弱性テストを実施することをお奨めしています。SQLインジェクション、パストラバーサル、クロスサイトスクリプティングなど防ぐべきものをしっかり対策し、リスクを最小限にして納品します。</p>
					</div>
					<div class="col-md-3">
						<h3 class="new1">[スピーディーで柔軟な開発]</h3>
						<p class="new4">アジャイル開発を基本としています。要件定義書を作るのに何ヶ月もかけるようなことは意味がないと考えています。クライアントと信頼関係を築き、当社がリードして柔軟でスピーディに開発していきます。ラボ型開発サービスも提供しています。</p>
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
									<h4><b>JBA Indonesia | オークション管理システム</b></h4>
									<p>JBA adalah salah satu perusahaan lelang terbesar di Indonesia asal Jepang yang berlokasi di Meruya. Untuk JBA, kami mengembangkan sistem yang komprehensif untuk keperluan lelang yang memberikan dampak langsung terhadap bisnis mereka. Adapun cakupan sistem yang kami buat adalah dari hulu ke hilir meliputi proses registrasi, inspeksi, perencanaan dan administrasi lelang, dukungan lelang offline dan online, hingga pelaporan dan modul akunting. Pengerjaan sistem ini dilakukan secara intensif dengan komunikasi dan pendetilan terperinci dengan masing-masing user sesuai bidangnya. Sistem ini terus dikembangkan selama tiga tahun terakhir dalam bentuk sistem web dan aplikasi mobile.</p>
								</div>
							</div>
							<div class="row">
								<div class="box-2">使用言語 PHP, NodeJS, SocketIO, Android Native</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="style-6">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h1 class="new6"><span class="underline2">Wawancara</span><br>Klien</h1>
					</div>
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-12">
								<h4 class="new3">Q: Bagaimana awal mula Anda memiliki kebutuhan pembuatan sistem ini?</h4>
								<p>Klien: Pada mulanya kami melakukan banyak hal secara manual. Dengan banyaknya kendaraan yang harus kami lelang di berbagai cabang di Indonesia serta tingginya minat dari para pelanggan membuat kami kesulitan. Disitu kami mulai berpikir perlunya sebuah sistem IT yang membantu bisnis kami secara keseluruhan.</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h4 class="new3">Q: Apa perubahan yang dirasakan setelah menggunakan sistem yang dibuat oleh Logique?</h4>
								<p>Klien: Dampaknya luar biasa besar, ketika semuanya terotomatisasi kami merasakan pekerjaan yang kami lakukan lebih efektif dan efisien. Dari sisi resiko pencatatan pada buku yang mungkin rusak atau hilang pun terhindari dengan sistem yang ada, selain itu ada nilai tambah kontribusi kepada lingkungan dengan mengurangi penggunaan kertas.</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h4 class="new3">Q: Bagaimana pengalaman kerjasama Anda dengan Logique dalam pembuatan sistem ini?</h4>
								<p>Klien: Menurut kami tim Logique benar-benar diisi oleh orang-orang yang kompeten. Saya tidak bisa membayangkan bagaimana proses bisnis kami yang kompleks bisa dibuat menjadi sistem yang komprehensif termasuk proses-proses kecil yang tidak boleh terlewat semua bisa dipenuhi. Kami puas dengan kinerja Logique dan merekomendasikan layanan mereka ke semua pihak yang membutuhkan.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="style-7">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-4 col-md-7">
						<div class="row">
							<div class="col-md-9">
								<h1 class="new2">システム開発を成功させるためのキーポイント</h2>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h4 class="bold">経験</h4>
								<p>LOGIQUEはインドネシアで豊富なシステム開発経験をもっています。スケジューリング、要件定義、インフラ設計、Deploy,ユーザートレーニングなど、各工程でこの経験が活きます。</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h4 class="bold">スピード・柔軟性</h4>
								<p>ビジネスのスピードはどんどん早くなっています。システム開発に6ヶ月も1年もかけていては、環境変化についていけません。LOGIQUEではスピードを重要視しています。要件のコンセンサスに時間がかかる場合も多いですが前に進むことをリードしてきます。</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h4 class="bold">品質・セキュリティ</h4>
								<p>
								クオリティは犠牲にしてはいけません。標準化された開発を行うことで不具合がすくなく、メンテナンス性の高いプログラミングをします。セキュリティ脆弱性のリスクも最小化した上で納品します。
								</p>
							</div>
						</div>
				</div>
			</div>
		</section>
		<section class="tahap-pemesanan-list">
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
		</section>
		<section class="tahap-pemesanan-2 hidden-xs" style="padding: 2em"></section>
		<footer class="contact">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<h2 style="margin-top: 0">お問い合わせ</h2>
						<a href="/jp/" target="_blank"><img src="img/webdev/logo.png" alt="Fitur Perusahaan" class="cs-custom"></a>
						<div class="m-t-10 text-left">LOGIQUE DIGITAL INDONESIA<br>
						Ad Premier Building 19th Floor. <br>
						Jalan Tb. Simatupang No. 5 Ragunan, <br>
						Ps. Minggu, Jakarta Selatan, <br>Indonesia 12550</div>
						<div><i class="fa fa-phone fa-lg" style="padding-right: 5px"></i> 021) 22708935 / 36 <br><i class="fa fa-whatsapp fa-lg" style="padding-right: 5px"></i> 081296560380</div>
						<br/>
						<div class="row">
							<div class="col-xs-6">
								<div class="link-footer-webdev">
									<a href="/jp/index.php" target="_blank">Home</a>
									<a href="/jp/about.php" target="_blank">会社概要</a>
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
					</div>
					<div class="col-md-4 hidden-md hidden-lg">
						<span><hr>インドネシアでWEB系のシステム開発やWEBアプリ開発や、それらシステムの運用が必要な場合LOGIQUEにご相談ください。CMS構築、会員管理システム（CRM)、ECサイト構築、会計管理、人事管理、アンケートシステムなど様々なシステム構築運用を成功に導いてきました。PMOとして、テスト工程だけ、ラボ型開発を、など様々な形でのご支援が可能です。</span>
						<div class="row">
							<div class="col-sm-12">
								<div class="link-footer-webdev">
									<br/>
									<div style="margin-bottom:8px"><b>LOGIQUE's Products</b></div>
									<a href="/jp/product/dokodemo-kerja.php" target="_blank">Dokodemo-Kerja</a>
									<a href="/jp/product/nippo.php" target="_blank">Nippo</a>
									<a href="/jp/product/sugoi-saiyo.php" target="_blank">Sugoi Saiyo</a>
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
							<div class="row">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Nama" name="name" value='<?php echo $formproc->SafeDisplay('name') ?>'>
									</div>
									<!-- <div class="form-group">
										<input type="number" class="form-control" placeholder="No Ponsel" name="phone" value='<?php echo $formproc->SafeDisplay('phone') ?>'>
									</div>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Perusahaan" name="company" value='<?php echo $formproc->SafeDisplay('company') ?>'>
									</div> -->
									<div class="form-group">
										<input type="email" class="form-control" placeholder="Email" name="email" value='<?php echo $formproc->SafeDisplay('email') ?>'>
									</div>
									<div class="form-group">
										<textarea name="" id="" cols="30" rows="6" class="form-control" placeholder="Pesan" name="message" style="resize:vertical;"><?php echo $formproc->SafeDisplay('message') ?></textarea>
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
						<p>インドネシアでWEB系のシステム開発やWEBアプリ開発や、それらシステムの運用が必要な場合LOGIQUEにご相談ください。CMS構築、会員管理システム（CRM)、ECサイト構築、会計管理、人事管理、アンケートシステムなど様々なシステム構築運用を成功に導いてきました。PMOとして、テスト工程だけ、ラボ型開発を、など様々な形でのご支援が可能です。</p>
						<div class="row">
							<div class="col-sm-12">
								<div class="link-footer-webdev" style="padding-left:30px">
									<br/>
									<div style="margin-bottom:8px"><b>LOGIQUE's Products</b></div>
									<a href="/jp/product/dokodemo-kerja.php" target="_blank">Dokodemo-Kerja</a>
									<a href="/jp/product/nippo.php" target="_blank">Nippo</a>
									<a href="/jp/product/sugoi-saiyo.php" target="_blank">Sugoi Saiyo</a>
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
		</script>
	</body>
</html>