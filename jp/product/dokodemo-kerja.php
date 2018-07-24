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
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="Dokodemo-Kerjaは、LOGIQUEが提供しているリモートワーク管理ツールです。リモートワーク / テレワークにて、フレキシブルに生産性をあげることに集中して効率的に働きたい従業員にも、皆にフェアな機会を与えて、さぼりを抑止したい経営者、人事マネージャーの両者にメリットのある製品・ソリューションです。">
	<meta name="keywords" content="">
	<meta name="author" content="PT LOGIQUE DIGITAL INDONESIA ">
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <title>インドネシアでリモートワーク｜テレワーク管理ツール｜Dokodemo-Kerja</title>
	<link href="/css/bootstrap.min.css" rel="stylesheet">	 
    <link href="css/style_dokodemo.css" rel="stylesheet">
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
	<body class="dokodemo">
		<header>
			<nav class="navbar navbar-default navbar-dokdem">
				<div class="container">
				  <div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					  <span class="sr-only">Toggle navigation</span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">
						<img src="img/dokodemo-kerja/dokodemo-logo.png" alt="" class="img-responsive center-block">
					</a>
					<div class="pull-left visible-xs">
						<ul class="nav-lang">
							<li class="pull-left"><a href="/produk/dokodemo-kerja.php">IND</a></li>
							<li class="pull-left"><a href="#">ENG</a></li>
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
					<a href="/jp/" target="_blank"><img class="pull-right img-responsive center-block logo-logique-header" src="img/dokodemo-kerja/logo_logique.png"/></a>
					<div class="pull-right">
						<ul class="nav-lang hidden-xs">
							<li class="pull-left"><a href="/produk/dokodemo-kerja.php">IND</a></li>
							<li class="pull-left"><a href="#">ENG</a></li>
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
								<div class="begin-dokdem"><span style="font-size: 20px;">インドネシアでリモートワークを推進しています。 <br/>柔軟に、独立した、プロフェッショナルな勤務体系で、会社も従業員もハッピーに！</span>
								<br/><br/></div>
								従業員の皆さん、毎日の通勤ストレスですよね？小さい子供の世話を誰かが代わりに見てくれれば自分の専門性を活かせるのに。もっとフレキシブルに働かせて貰えれば今よりずっと生産性発揮するのに、などなどの不満ありませんか？<br/><br/>

								経営者・人事マネージャの皆さん、従業員の遅刻欠勤を管理、取り締まるのに飽き飽きですよね。真面目なだけが取り柄の生産性が低いスタッフが残っても本末転倒ですよね。従業員には幸せに活き活きと仕事をし、かつ高い生産性を生んでもらいたいですよね？<br/><br/>

								<strong>Dokodemo-Kerja</strong>は上記を全て解決する画期的なITソリューションです。<br/><br/>

								このサービスを利用すれば、従業員は勤務場所の制約から開放され、好きな時間に好きな場所からのリモートワークが可能となります。いままで問題と考えられていた、さぼり、非集中などについては、ランダムにラップトップのスクリーンショットが撮られ管理者に送信されることで管理することができます。管理者は従業員の勤務時間と作業内容を突き合わせて管理することが可能となり、従業員の虚偽報告を防ぐことができます。<br/><br/>

								今までのリモートワーク管理ツールは、どうしてもリモートワーカーに面倒な報告を義務付ける必要がありましたが、<strong>Dokodemo-Kerja</strong>は従業員にも管理者の双方に手間がかかりません。<br/><br/>

								インドネシアの交通事情を考えると、幸福感を大きくUPする画期的なソリューションだと自負しています。雨が多い時期にだけ週に2回自宅勤務とする、出産前後だけ実家で勤務などの柔軟な勤務方法を許容する、などが可能になる他、オフィスでの勤務者にも<strong>Dokodemo-Kerja</strong>を導入することで出退勤や休憩時間の管理、過度なビデオやSNSの視聴を防ぐことが可能となります。
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
						<video width="100%" height="300" controls>
						   <source src="/produk/img/dokodemo-kerja/dokodemo-kerja.webm" type="video/webm" />
						</video><br/><br/>
					</div>
					<div class="col-md-6 text-justify">
						<span class="blue">Dokodemo-Kerja</span>は、リモートワーク / テレワークにて、フレキシブルに生産性をあげることに集中して効率的に働きたい従業員にも、皆にフェアな機会を与えて、さぼりを抑止したい経営者、人事マネージャーの両者にメリットのある製品・ソリューションです。<br/><br/>

						従業員の使用端末にインストールするだけですぐに利用可能です。クロスプラットフォーム（Windows、Mac、Linuxに対応）で利用可能です。<br/><br/>

						スタッフがいつ、どんな作業をしているのか確認することができます。作業タイプ（タスク種、プロジェクト名）を入力させることで作業時間を集計し管理会計に利用することも可能です。勤務開始時間、休憩時間、終了時間が記録に残りますので、勤務時間不足や逆に働きすぎのコントロールもできます。<br/>
						スクリーンショットが取ることがスタッフのさぼりの抑止力になります。場所や時間に囚われず、決めた勤務時間中は集中して生産性高く作業する。<span class="blue">Dokodemo-Kerja</span>は現代の働き方をサポートします。
						<br/><br/><br/>
						<div class="text-center">
							<a href="#divForm" class="smooth btn btn-coba">いますぐトライアルを申し込む</a>
						</div>
						<br/><br/>
					</div>
				</div>
			</div>
		</div>
		
		<div class="bg-yellow" id="fitur">
			<img src="img/dokodemo-kerja/image-fitur.png" class="image-fitur img-responsive"/>
			<div class="container-fluid">
				<div class="bg-old-yellow">
					<div class="row" style="margin:0">
						<div class="col-md-6 col-md-offset-6">
							<div class="bg-one-fitur">
								<div class="one-fitur" style="margin-bottom: 0;">
									<img src="img/dokodemo-kerja/fitur1.png" class="img-responsive"/>
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
								<img src="img/dokodemo-kerja/fitur1.png" class="img-responsive"/>
								ユーザーの作業時間を記録します。ユーザーは開始・終了ボタンをクリックするだけです。併せて作業種、プロジェクト名などを入力させ記録、集計することも可能です。各ユーザーが日別に何時に開始、休憩をどのようにとり、何時まで勤務したのか把握可能です。
							</div>
						</div>
						<div class="bg-one-fitur">
							<div class="one-fitur">
								<img src="img/dokodemo-kerja/fitur2.png" class="img-responsive"/>
								ユーザーは自分の勤務状況を確認できるので、1日の規定労働時間や契約で定められた月の労働時間に達しているか等を確認することができます。
							</div>
						</div>
						<div class="bg-one-fitur">
							<div class="one-fitur">
								<img src="img/dokodemo-kerja/fitur3.png" class="img-responsive"/>
								管理者はユーザーの勤務状況を閲覧可能で、各種集計ができます。規定の勤務時間に不足していないか、働きすぎていないか管理できます。
							</div>
						</div>
						<div class="bg-one-fitur">
							<div class="one-fitur">
								<img src="img/dokodemo-kerja/fitur4.png" class="img-responsive"/>
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
						<img class="img-responsive center-block" src="img/dokodemo-kerja/dokodemo-logo.png" alt="Dokodemo-Kerja Logo"/>
						<br/>
						<div class="title anton">リモートワークで幸せに生産性高く働きましょう！</div>
						<hr/>
						<p>	Dokodemo-Kerjaを導入することで、インドネシアでリモートワークを導入しましょう。交通事情が悪いジャカルタにおいてリモートワークを導入することは従業員の幸福度を向上し、ついては生産性の向上に繋がります。お祈り休憩や喫煙休憩が長い社員がいる、Youtubeをずっと見ている社員がいる、などの問題はセンシティブで解決が難しいですが、これらもDokodemo-Kerjaの導入で解決します。
						</p>
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
					<div class="col-md-4">
						<div class="card-harga">
							<div class="title-card text-center">基本プラン</div>
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
					<div class="col-md-4">
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
									<li><span class="fa-li"><i class="fa fa-circle"></i></span>毎分1スクリーン保存（ランダム）</li>
									<li><span class="fa-li"><i class="fa fa-circle"></i></span>スクリーンショット6ヶ月間保存</li>
									<li><span class="fa-li"><i class="fa fa-circle"></i></span>
									10ユーザーまで試用可能<br/>
									<div style="font-size: 12px;color: #da0101;margin-top: 20px;font-style: italic;">＃10ユーザーを超えると1ユーザー月額75,000 IDRが必要になります</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
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
			</div>
		</div>
		<br/>
		
		<!--<div class="div-dokodemo">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="title">Dokodemo-Kerja</div>
						<p>Direkomendasikan bagi perusahaan yang mempertimbangkan pekerja jarak jauh (freelencer, remote worker,etc), perusahaan yang ingin meningkatkan produktifitas karyawan, perusahaan yang ingin membatasi penggunaan waktu kerja yang tidak efisien (merokok, istirahat setelah solat, etc)</p>
					</div>
				</div>
			</div>
		</div>-->
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
				<form role="form" name='myForm' onsubmit='return validateForm()' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
					<input type='hidden' name='submitted' id='submitted' value='1'/>
					<input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
					<div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
					<div class="row">
						<div class="form-group">
							<div class="col-md-offset-1 col-md-5">
								<input type="text" class="form-control" name="name" placeholder="お名前" value='<?php echo $formproc->SafeDisplay('name') ?>'/>
							</div>
							<div class="col-md-5">
								<input type="text" class="form-control" name="company" placeholder="会社名" value='<?php echo $formproc->SafeDisplay('company') ?>'/>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="form-group">
							<div class="col-md-offset-1 col-md-5">
								<input type="number" class="form-control" name="phone" placeholder="TEL" value='<?php echo $formproc->SafeDisplay('phone') ?>'/>
							</div>
							<div class="col-md-5">
								<input type="email" class="form-control" name="email" placeholder="E-mail" value='<?php echo $formproc->SafeDisplay('email') ?>'/>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="form-group">
							<div class="col-md-offset-1 col-md-5">
								<div style="padding:10px;background:#fff">
									<span class="blue fw-300">お問い合わせ種</span>
									<div class="radiobuttons">
										<div class="rdio">
										  <input name="needs" value="Dokodemo-Kerjaを試用したい" id="radio2" type="radio" checked>
										  <label for="radio2">Dokodemo-Kerjaを試用したい</label>
										</div>
										<div class="rdio">
										  <input name="needs" value="人事管理システムの導入を検討している" id="radio3" type="radio">
										  <label for="radio3">人事管理システムの導入を検討している</label>
										</div>
										<div class="rdio">
										  <input name="needs" value="採用管理システムの導入を検討している" id="radio4" type="radio">
										  <label for="radio4">採用管理システムの導入を検討している</label>
										</div>
										<div class="rdio">
										  <input name="needs" value="リモートワーク制の導入を考えている" id="radio5" type="radio">
										  <label for="radio5">リモートワーク制の導入を考えている</label>
										</div>
									</div>
								</div>
								<br/>
							</div>
							<div class="col-md-5">
								<textarea name="message" class="form-control" placeholder="お問い合わせ内容"><?php echo $formproc->SafeDisplay('message') ?></textarea>
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
		<div class="div-faq" style="display:none">
			<div class="anton title yellow">Pertanyaan yang sering diajukan:</div>
			<br/>
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<span class="blue2 fw-500">Bagaimana <strong>Dokodemo-Kerja</strong> merekam jam kerja karyawan?</span><br/>
						Dokodemo-Kerja merekam aktivitas dan jam kerja untuk setiap proyek yang dikerjakan karyawan pada layar perangkat komputernya. Perhitungan akan dimulai dan dihentikan dengan perintah <i>start/stop</i>.<br/><br/>
						 
						<span class="blue2 fw-500">Apakah <strong>Dokodemo-Kerja</strong> memerlukan akses internet?</span><br/>
						Akses internet diperlukan untuk mengaktifkan dan mengelola akun Dokodemo-Kerja, serta mengirim data rekaman aktivitas dan jam kerja ke database.<br/><br/>
						 
						<span class="blue2 fw-500">Bagaimana jika akses internet saya putus saat <strong>Dokodemo-Kerja</strong> berjalan?</span><br/>
						Tidak masalah. Akses internet tidak dibutuhkan selama proses penghitungan. Namun, Anda membutuhkan koneksi internet saat tombol stop diklik untuk mengirim data ke database.<br/><br/>
						 
						<span class="blue2 fw-500">Berapa jumlah pengguna yang didukung oleh <strong>Dokodemo-Kerja</strong>?</span><br/>
						Jumlah pengguna bisa disesuaikan menurut kebutuhan perusahaan.<br/><br/>
						 
						<span class="blue2 fw-500">Apakah <strong>Dokodemo-Kerja</strong> bisa diakses lewat perangkat seluler?</span><br/>
						Untuk saat ini, perangkat seluler hanya bisa mengakses Dokodemo-Kerja melalui browser.<br/><br/>
						
						<span class="blue2 fw-500">Bagaimana cara menyiapkan layanan <strong>Dokodemo-Kerja</strong>? </span><br/>
						Kami akan menyediakan panduan menyiapkan layanan Dokodemo-Kerja langkah demi langkah. Mulai dari cara mengakses akun master, mengakses aplikasi dan menginstalnya, hingga penggunaannya bagi karyawan.<br/><br/>
						
						<span class="blue2 fw-500">Bagaimana cara mengetahui apakah PC atau Mac saya dapat menjalankan <strong>Dokodemo-Kerja</strong>? </span><br/>
						Dokodemo-Kerja mendukung PC yang menjalankan sistem operasi Windows, Linux, dan Macintosh.<br/><br/>
					</div>
					<div class="col-md-6">
						<span class="blue2 fw-500">Bahasa apa saja yang tersedia untuk <strong>Dokodemo-Kerja</strong>?</span><br/>
						Untuk saat ini, Dokodemo-Kerja tersedia dalam Bahasa Indonesia dan Inggris.<br/><br/> 
						 
						<span class="blue2 fw-500">Dapatkah saya melakukan uji coba <strong>Dokodemo-Kerja</strong> terlebih dahulu sebelum membelinya?</span><br/>
						Tentu saja. Untuk mendapatkan layanan uji coba, silakan hubungi kami.<br/><br/>
						
						<span class="blue2 fw-500">Bagaimana jika saya punya masalah dalam menggunakan <strong>Dokodemo-Kerja</strong>?</span><br/>
						Jangan khawatir. Jika Anda mengalami masalah dalam menggunakan Dokodemo-Kerja, Anda dapat langsung menghubungi kami. Kami akan membantu Anda dengan senang hati.<br/><br/>
						
						<span class="blue2 fw-500">Saya tertarik menggunakan <strong>Dokodemo-Kerja</strong> untuk perusahaan saya. Bagaimana saya bisa mendapatkannya?</span><br/>
						Anda hanya perlu menghubungi kami dengan mengisi formulir yang kami sediakan. Kami siap melayani Anda.<br/><br/>
						
						<span class="blue2 fw-500">Seberapa efektifkah <strong>Dokodemo-Kerja</strong> pada produktivitas karyawan?</span><br/>
						Sangat efektif, karena Dokodemo-Kerja mampu mengkalkulasikan total jam kerja karyawan secara real time dan transparan.<br/><br/>
						
						<span class="blue2 fw-500">Untuk siapakah <strong>Dokodemo-Kerja</strong> dibuat?</span><br/>
						Dokodemo-Kerja dibuat untuk para perusahaan yang menggunakan karyawan dengan sistem kerja remote dan independen agar meningkatkan produktifitas perusahaan.<br/><br/>
						
						<span class="blue2 fw-500">Apa keuntungan yang didapatkan oleh perusahaan yang menerapkan <strong>Dokodemo-Kerja</strong>?</span><br/>
						Dengan Dokodemo-Kerja, perusahaan akan diuntungkan dengan produktifitas karyawan yang meningkat sehingga perusahaan dapat membuat target untuk para karyawan sesuai dengan kinerjanya masing-masing.<br/><br/>
						
					</div>
				</div>
				<br/>
				<div class="row">
					<div class="col-md-offset-1 col-md-10">
						<div style="padding:10px;border:1px solid #edb41a">
							<div class="div-above-footer">
								Dokodemo-Kerjaは、従業員がリモートワークすることを可能にし、無駄な時間と労力を排除して生産性を向上することを助け、管理者の従業員を監視する工数も減らすことができるツールです。個社別のカスタマイズも可能ですのでお問い合わせお待ちしております。
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<a href="#" class="scrollToTop">Back to Top</a>
		<footer>
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
		</footer>
		
		<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
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