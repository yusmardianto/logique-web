 <?php 
require_once("form/fgcontact_sugoi.php");

$formproc = new FGContactForm();

//1. Add your email address here.
//You can add more than one receipients.
$formproc->AddRecipient(['info@sugoi-saiyo.co.id']); //<<---Put your email address here

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
    <meta name="description" content="SugoiSaiyoはその名前のままインドネシアでの採用活動を凄く効率的に効果的にするための採用活動管理システムです。インドネシアの人事部、採用担当者のための管理機能と、応募者の為の機能の両方を兼ね備えています。">
	<meta name="keywords" content="">
	<meta name="author" content="PT LOGIQUE DIGITAL INDONESIA ">
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <title>インドネシアでの採用を効率的に｜SugoiSaiyo｜LOGIQUE DIGITAL INDONESIA</title>
	<link href="/css/bootstrap.min.css" rel="stylesheet">	 
    <link href="css/style_sugoisaiyo.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
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
		<header>
			<img src="img/sugoi-saiyo/logo.png" alt="Sugoi Saiyo Logo" class="img-responsive center-block"> 
			<h1>インドネシアでの採用を効率的に変える、<br>
			画期的なITソリューション、SUGOI採用。<br>
			採用の無駄・ムラ・無理をなくします！</h1>
		</header>
		<section class="about">
			<div class="container">
				<a href="/"><img src="img/sugoi-saiyo/logo_logique.png" alt="Sugoi Saiyo Logo" style="position:absolute;top: 0;"></a>
				<h2>SUGOI採用ってなに？どんなツールなの？</h2>
				<p>SUGOI採用は、インドネシアの人事部、採用担当者のためのITシステムです。要件に合わない大量のCVのスクリーニング、応募者との連絡の難しさ、ノーShowの多さ、など採用活動には無駄が非常に多いです。<br><br>SUGOI採用は、これら問題を解消し、人事部の、採用担当者のストレスをなくします。応募者にとってもWEBで応募からステータス確認、テスト、オファーレター受領まで簡単に管理できるのでとても便利です。</p>
			</div>
		</section>
		<section class="obstacle">
			<div class="container">
				<div class="row">
					<div class="language-btn">
						<ul class="list-inline">
							<li><a href="/../en/product/sugoi-saiyo.php">EN</a></li>
							<li><a href="/produk/sugoi-saiyo.php">ID</a></li>
							<li class="active"><a href="/../jp/product/sugoi-saiyo.php">JP</a></li>
						</ul>
					</div>
					<div class="col-md-4 obstacle-title">
						<h2>インドネシアの採用の難しさ採用担当者が抱える課題</h2>
						<a href="#contact" class="smooth btn-ss">Try Sugoi Saiyo</a>
					</div>
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<img src="img/sugoi-saiyo/kendala-1.png" alt="Kendala" class="img-responsive center-block">
								<p>応募者と連絡がつかない。応募者が応募について覚えてない。</p>
							</div>
							<div class="col-md-6 col-sm-6">
								<img src="img/sugoi-saiyo/kendala-2.png" alt="Kendala" class="img-responsive center-block">
								<p>要件に合わない大量の履歴書が届く。スクリーニングが大変。</p>
							</div>
							<div class="col-md-6 col-sm-6">
								<img src="img/sugoi-saiyo/kendala-3.png" alt="Kendala" class="img-responsive center-block">
								<p>応募者が面接に来ない。遅刻する。</p>
							</div>
							<div class="col-md-6 col-sm-6">
								<img src="img/sugoi-saiyo/kendala-4.png" alt="Kendala" class="img-responsive center-block">
								<p>短期間で少ない来訪回数で決める必要がある。</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<div class="line-title">上記課題を解決するSUGOI採用の機能</div>
		<section class="feature-company">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-6 col-xs-12 text-center">
						<img src="img/sugoi-saiyo/fitur-p.png" alt="Fitur Perusahaan" class="img-feature">
						<hr>
						<h2>人事部・採用担当者向け機能</h2>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="feature f-company">
							<div class="number">1</div>
							<div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-p-1.png" alt="Fitur Perusahaan"></div>
							<p>応募者一覧を表示管理します。さまざまな条件で検索＆フィルターをかけられるので大量応募があっても簡単に管理できます。</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="feature f-company">
							<div class="number">2</div>
							<div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-p-2.png" alt="Fitur Perusahaan"></div>
							<p>各採用プロセスのスケジューリングをコントロール可能です。面談日程のスケジューリングは応募者と共有可能なのでミススケジューリングを防げます。</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="feature f-company">
							<div class="number">3</div>
							<div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-p-3.png" alt="Fitur Perusahaan"></div>
							<p>各選考ポイントで、PassかFailかを数値によるスコアリングで判断するので公平でロジカルな判断と記録が可能になります。</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="feature f-company">
							<div class="number">4</div>
							<div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-p-4.png" alt="Fitur Perusahaan"></div>
							<p>応募者との間で交わす文書を全て電子化して一元管理可能です。オファーレターまでもが自動生成可能となります。</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="feature f-company">
							<div class="number">5</div>
							<div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-p-5.png" alt="Fitur Perusahaan"></div>
							<p>募集要項、求人ポスト情報は簡単に担当者によって追加、編集可能なのでタイムリーな採用活動が可能となります。</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="feature f-company">
							<div class="number">6</div>
							<div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-p-6.png" alt="Fitur Perusahaan"></div>
							<p>各段階での選考結果は、SugoiSaiyoを通じて自動で応募者に通知されます。無駄な時間を排除しスピーディーな採用を可能とします。</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="feature f-company">
							<div class="number">7</div>
							<div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-p-7.png" alt="Fitur Perusahaan"></div>
							<p>人事マネージャや他部門のマネージャ、経営層も採用状況、プロセスを容易に把握可能です。</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="feature f-company">
							<div class="number">8</div>
							<div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-p-8.png" alt="Fitur Perusahaan"></div>
							<p>ダッシュボードで重要KPIを確認できます。応募総数、スクリーニング中の履歴書数など。</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="feature f-company">
							<div class="number">9</div>
							<div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-p-9.png" alt="Fitur Perusahaan"></div>
							<p>管理者ユーザー・権限管理も容易です。インタビュアーもSugoiSaiyoを使うことにより履歴書や面談履歴、テスト結果など全情報を閲覧でき、ペーパーレスを実現可能です。</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="feature f-company">
							<div class="number">10</div>
							<div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-p-10.png" alt="Fitur Perusahaan"></div>
							<p>最終選考を通過した場合、オファー内容も登録可能で、フォーマットに従ってオファーレターを生成することができます。</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="feature f-company">
							<div class="number">11</div>
							<div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-p-11.png" alt="Fitur Perusahaan"></div>
							<p>全てのやり取りがeメールで通知されます。WhatsappやSMSでの通知もカスタマイズにより対応可能です。</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="feature-candidate">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-6 col-xs-12 text-center">
						<img src="img/sugoi-saiyo/fitur-k.png" alt="Fitur Perusahaan" class="img-feature">
						<hr>
						<h2>応募者向け機能</h2>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="feature f-candidate">
							<div class="number">1</div>
							<div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-k-1.png" alt="Fitur Perusahaan"></div>
							<p>応募から最終プロセスまで全てをSugoiSaiyo上で完結します。一貫した記録が残るのでミスコミュニケーションや記録消失を防ぎます。</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="feature f-candidate">
							<div class="number">2</div>
							<div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-k-2.png" alt="Fitur Perusahaan"></div>
							<p>各選考ポイントでまた次のステップのスケジュール候補がタイムリーにSugoiSaiyoを通して連絡されるので、疎い連絡で信頼感をなくすことがありません。</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="feature f-candidate">
							<div class="number">3</div>
							<div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-k-3.png" alt="Fitur Perusahaan"></div>
							<p>スケジュール設定が、双方で複数の候補を出して決定することができるのでフェアで間違えることのないスケジュール管理が可能。</p>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="feature f-candidate-2">
							<div class="number">4</div>
							<div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-k-4.png" alt="Fitur Perusahaan"></div>
							<p>ダッシュボードで自分の選考ステータスが明確にわかる。</p>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="feature f-candidate-2">
							<div class="number">5</div>
							<div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-k-5.png" alt="Fitur Perusahaan"></div>
							<p>適切に通知がくるのでスケジュールのミスを防ぐことができる。</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<div class="line-title">SugoiSaiyoを使うメリット</div>
		<section class="benefit-company">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>求人会社・採用担当者のメリット</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-9 col-md-offset-3 col-sm-12">
						<div class="row">
							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="benefit">
									採用基準が明確になり、選考を数値でロジカルに行える。
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="benefit">
									スケジュール設定管理が容易になり、インタビュアーのアレンジミスなどを減らせることができる。
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="benefit">
									採用サイトと管理システムの境目をなくすのでオンラインでの集客の効果を見やすく、また最大化しやすい。
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="benefit">
									直感的な操作が可能で管理工数を極小化可能。
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="benefit">
									応募者の個人情報をセキュアに管理可能。
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="benefit">
									Onlineインタビュー・テストの活用で採用短期化が可能。
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="benefit-candidate">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>応募者へのメリット</h2>
					</div>
				</div>
				<div class="row m-50">
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="benefit">
							オンラインInterview・テストをSugoiSaiyoで行えるので、オフィス訪問を減らすことが可能になる
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="benefit">
							自分のステータスをダッシュボードから容易に把握可能。通知によりスピーディにステータス変更も把握可能
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="benefit">
							スケジュール設定もSuogiSaiyoを通して行えるので、ミスコミュニケーションを起こしやすい電話やメールのやりとりから解放される
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="benefit">
							オファーレターもSuogiSaiyoを通じて受け取れ、最初から最後までの工程が、簡易にスピーディになる
						</div>
					</div>
				</div>
			</div>
		</section>
		<div>
			<img src="img/sugoi-saiyo/bg-middle.png" alt="Sugoi Saiyo" class="img-fluid">
		</div>
		<section class="why-ss">
			<div class="container">
				<h2>なぜSugoiSaiyo？</h2>
				<div class="row m-50">
					<div class="col-md-4">
						<div class="img-why-ss"><img src="img/sugoi-saiyo/kenapa-1.png" alt="Kenapa Sugoi Saiyo"></div>
						<p>採用担当者にも応募者にも使いやすくメリットのあるシステム</p>
					</div>
					<div class="col-md-4">
						<div class="img-why-ss"><img src="img/sugoi-saiyo/kenapa-2.png" alt="Kenapa Sugoi Saiyo"></div>
						<p>採用プロセスをなるべくオンラインでシンプルに早期化します</p>
					</div>
					<div class="col-md-4">
						<div class="img-why-ss"><img src="img/sugoi-saiyo/kenapa-3.png" alt="Kenapa Sugoi Saiyo"></div>
						<p>全てを可視化でき、数値による公正な判断を可能にします</p>
					</div>
				</div>
			</div>
		</section>
		<section class="qna">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<img src="img/sugoi-saiyo/qna.png" alt="Sugoi Saiyo">
					</div>
					<div class="col-md-9">
						<h2>PERTANYAAN YANG SERING DIAJUKAN : </h2>
					</div>
				</div>
				<div class="row m-50">
					<div class="col-sm-6">
						<h3>Bagaimana cara kerja   SAIYO? </h3>
						<p>SUGOI SAIYO mempertemukan tim rekrutmen dengan kandidat yang sesuai secara terarah dengan menyediakan proses rekrutmen yang singkat dan mudah dikelola oleh kedua belah pihak.</p>
						<h3>Bagaimana tim rekrutmen tahu jika seorang kandidat mengajukan lamaran?</h3>
						<p>Tim rekrutmen akan dikirimkan notifikasi melalui email. Email tersebut akan menyebutkan nama kandidat dan tim rekrutmen bisa langsung memeriksa detil data dirinya.</p>
						<h3>Apakah ada batasan jumlah lowongan yang bisa dipos oleh tim rekrutmen di SUGOI SAIYO? </h3>
						<p>Tidak ada. Tim rekrutmen bisa membuat daftar lowongan posisi yang tersedia sebanyak mungkin.</p>
						<h3>Apakah SUGOI SAIYO hanya diperuntukkan bagi departemen SDM perusahaan? </h3>
						<p>SUGOI SAIYO menyediakan laman kelola yang berbeda untuk level departemen SDM (tim rekrutmen) dan level manajer (person in charge).</p>
						<h3>Apa perbedaan laman kelola untuk tim rekrutmen dengan manajer?</h3>
						<p>Laman kelola untuk level manajer hanya menampilkan hasil technical test, jadwal interview, dan laporan hasil interview. </p>
						<h3>Bagaimana standar tahapan rekrutmen yang diadopsi SUGOI SAIYO? </h3>
						<p>SUGOI SAIYO mengadopsi standar rekrutmen perusahaan pada  umumnya.</p>
					</div>
					<div class="col-sm-6">
						<p> Namun, standar tahapan ini bisa dimodifikasi dan disesuaikan dengan permintaan Anda.</p>
						<h3>Apakah ada batasan jumlah kandidat yang bisa saya terima untuk setiap posisi?</h3>
						<p>Tidak ada. Setiap posisi bisa menerima sebanyak mungkin kandidat. Begitu juga sebaliknya, kandidat bisa mengajukan lamaran ke lebih dari satu posisi.</p>
						<h3>Bagaimana cara kandidat mengajukan lamaran untuk posisi yang tersedia? </h3>
						<p>Cukup dengan memilih posisi yang ingin dilamar, lalu mengisi data diri di formulir yang disediakan.</p>
						<h3>Bagaimana cara kandidat mendapatkan informasi lanjutan dari tahap seleksi lamarannya? </h3>
						<p>Informasi hasil dari setiap proses rekrutmen selalu diperbarui oleh tim rekrutmen, dan kandidat dapat melihat pembaharuan tersebut, baik di laman dashboard-nya sendiri maupun melalui email notifikasi otomatis.</p>
						<h3>Apakah SUGOI SAIYO bisa diakses oleh browser apa pun?</h3>
						<p>Situs kami bisa diakses oleh browser mana pun, termasuk oleh browser bawaan perangkat seluler. Jika Anda mengalami masalah, silakan hubungi kami untuk bantuan.</p>
						<h3>Saya tertarik menggunakan SUGOI SAIYO untuk perusahaan saya. Bagaimana cara saya bisa mulai menggunakannya? </h3>
						<p>Anda bisa langsung menghubungi kami lewat salah satu kontak yang kami sediakan. Kami siap melayani Anda dengan senang hati. </p>
					</div>
				</div>
			</div>
		</section>
		<section class="contact" id="contact">
			<div class="container">
				<div class="box">
					<h2>Sugoi Saiyoに関するお問い合わせ</h2>
					<?php if(isset($msg))
					{
					echo $msg;
					} 
					?>
					<form role="form" name='myForm' onsubmit='return validateForm()' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
						<input type='hidden' name='submitted' id='submitted' value='1'/>
						<input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
						<div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="お名前" name="name" value='<?php echo $formproc->SafeDisplay('name') ?>'>
								</div>
								<div class="form-group">
									<input type="number" class="form-control" placeholder="TEL" name="phone" value='<?php echo $formproc->SafeDisplay('phone') ?>'>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="会社名" name="company" value='<?php echo $formproc->SafeDisplay('company') ?>'>
								</div>
								<div class="form-group">
									<input type="email" class="form-control" placeholder="EMAIL" name="email" value='<?php echo $formproc->SafeDisplay('email') ?>'>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<textarea name="" id="" cols="30" rows="6" class="form-control" placeholder="お問い合わせ内容" name="message"><?php echo $formproc->SafeDisplay('message') ?></textarea>
								</div>
								<div class="form-group">
									<div class="g-recaptcha" data-sitekey="6LcuHywUAAAAACj__hCefsBCkoIC2ExM2Sur4cCp"></div>
								</div>
							</div>
							<div class="col-md-12 text-center m-50">
								<button type="submit" class="btn-ss2">送信</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</section>
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<img src="img/sugoi-saiyo/logo.png" alt="Sugoi Saiyo Logo" class="img-responsive">
					</div>
					<div class="col-md-4">
						<p class="address">
							Ad Premier Building 19th Floor Jalan Tb. Simatupang No. 5 Ragunan, Ps. Minggu, Jakarta Selatan, Indonesia 12550
						</p>
						<p class="link">
							<span>Product LOGIQUE :</span>
							<a href="/../jp/product/nippo.php">Nippo</a>
							<a href="/../jp/product/dokodemo-kerja.php">Dokodemo-Kerja</a>
						</p>
					</div>
					<div class="col-md-4">
						<p class="phone">+62(21) 2270 8935 / 36</p>
						<p class="email"><a href="mailto:info@sugoi-saiyo.co.id">info@logique.co.id</a></p>
					</div>
				</div>
			</div>
		</footer>
		
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

			$('.feature-company .img-feature-o').matchHeight({
				byRow: false
			});
			$('.feature-candidate .img-feature-o').matchHeight({
				byRow: false
			});
			$('.f-company').matchHeight({
				byRow: false
			});
			$('.f-candidate').matchHeight({
				byRow: false
			});
			$('.f-candidate-2').matchHeight({
				byRow: false
			});
			$('.benefit').matchHeight({
				byRow: false
			});
			$('.img-why-ss').matchHeight({
				byRow: false
			});
		</script>
	</body>
</html>