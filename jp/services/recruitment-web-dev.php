<?php
require_once("assets/form/fgcontact_recruitment.php");

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
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=3.0">
    <meta name="description"
        content="インドネシアでインターネット（求人ページ・採用サイト）を活用して効率良い採用活動をしましょう。LOGIQUEはWEBサイト制作/システム構築運用、デジタルマーケティング、SNS運用など、WEB及びデザインに関する様々なサービスを幅広く提供しております。ネットでの求人募集や、レジュメのオンライン受付、自動スクリーニングシステムの導入などのご支援を行っております。お気軽にお問い合わせください。">
    <meta name="keywords" content="">
    <meta name="author" content="Logique Digital Indonesia">
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
     <meta itemprop="name" content="PT. Logique Digital Indonesia">
      <meta property="og:title" content="Recruitment Web Creation | Online Recruitment | LOGIQUE DIGITAL INDONESIA">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Logique">
    <meta property="og:url" content="https://www.logique.co.id/jp/services/recruitment-web-dev.php">
    <meta property="og:image" content="https://www.logique.co.id/img/ogimg/layanan.png">
    <meta property="og:description"
        content="Have trouble hiring the right employee your company needs? LOGIQUE can help you create an effective recruitment web to ease you with online recruitment, with a built-in inquiry form, also easy-to-navigate and attractive design that appeal to all of your potential target candidates. Contact us to create yours now.">
    
    <script type="text/javascript" src="//script.crazyegg.com/pages/scripts/0096/6080.js" async="async"></script>
    <title>求人ページ制作｜採用サイト｜インドネシアのWEB制作・システム開発会社LOGIQUE</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="assets/css/style-recruitment-website.css" rel="stylesheet">
    <link href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css" rel="stylesheet" type="text/css" />
    <link href="/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Architects+Daughter" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+1p:400,500,700" rel="stylesheet"> -->
    <!-- <script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-105878648-1', 'auto');
	ga('send', 'pageview');

	</script> -->
</head>

<body class="careerpage">
    <style>
    .container__ {
        padding-top: 0;
        padding-bottom: 0;
	}
	
	.col-sm-12.link-footer {
		margin-bottom: 2em;
	}

	.wrapper.wrapper--update-design {
		overflow: hidden;
	}

    /* footer {
        top: 35px;
    }

    .tahap-pemesanan-2 {
        position: relative;
        top: 35px;
    } */
    </style>
    <div class="wrapper wrapper--update-design">

        <!-- NAVIGATION -->
        <div>
            <button type="button" class="navbar-toggle collapsed navbar-toggle--update-design" aria-label="navbar-toggle"
                data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar first"></span>
                <span class="icon-bar second"></span>
                <span class="icon-bar third"></span>
            </button>
            <div class="collapse navbar-collapse" id="myNavbar">
                <div class="backdrop-test"></div>
                <div class="logique-nav in-jp">
                    <div class="margin-for-nav">
                        <div class="text-center">
                            <a href="/jp/index.php">
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
        <!-- NAVIGATION -->

        <!-- HEADER -->
        <div class="container-fluid">
            <div class="row lang-logo--update-design">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-offset-1 col-sm-11">
                            <div class="container">
                                <ul class="list-inline">
                                    <li><a href="/en/services/recruitment-web-dev.php">EN</a></li>
                                    <li><a href="/layanan/pembuatan-web-karir.php">ID</a></li>
                                    <li class="active"><a href="#">JP</a></li>
                                </ul>
                                <a href="/jp/index.php"><img src="/../img/logo.png" alt="Logo"
                                        class="img-responsive logo--update-design" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END HEADER -->


        <div class="content-wrapper__">

            <header class="head-banner">
                <section class="--top">
                    <div class="container__" style="padding:0">
                        <div class="row">
                            <div class="col-sm-12">
                                <ol class="breadcrumb breadcrumb--update-design" itemscope
                                    itemtype="http://schema.org/BreadcrumbList">
                                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a
                                            itemprop="item" href="/jp/index.php"><span itemprop="name">Home</span></a>
                                        <meta itemprop="position" content="1" />
                                    </li>
                                    <li class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a
                                            itemprop="item" href="/jp/services.php"><span
                                                itemprop="name">&nbsp;LOGIQUEのサービス</span></a>
                                        <meta itemprop="position" content="2" />
                                    </li>
                                    <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                        <a itemprop="item"><span itemprop="name">&nbsp;採用サイト制作</span></a>
                                        <meta itemprop="position" content="3" />
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="container__">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="banner-text">
                                <h1>
                                    <span>インドネシアで採用の難しさにお悩みではありませんか？</span><br>
                                    <span>自社採用ページを活用して<br />効果的で低コストな採用活動を実現しましょう！</span>
                                </h1>
                                <div class="banner-subt">
                                    人材紹介会社のサービスは高いし、JobStreetからの履歴書はクオリティが低すぎてスクリーニングが大変。。どうすりゃいいの？<br />
                                    ちょっとの工夫で全然違います。まずは御社の採用ページを工夫してみましょう。ぐっと効果的＆効率的な採用が行えます。
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <div class="offering-part">
                <div class="container__">
                    <div class="row">
                        <div class="col-sm-8">
                            <h2 style="padding-top: 15px;">求人・人材採用ページを活用して効果的な採用活動をサポートします。</h2>
                        </div>
                        <div class="col-sm-4 text-right">
                            <a href="/jp/contact.php" target="_blank" aria-label="Contact Us" rel="noreferrer"><img
                                    class="logo-logique img-responsive"
                                    src="assets/img/img-recruitment-website/logo-y-logique.png" alt=""
                                    style="float: right; margin-top:10px;"></a>
                        </div>
                    </div>
                </div>
            </div>

            <section>
                <div class="problem-container">
                    <div class="container__">
                        <div class="problem-content row">
                            <div class="col-lg-8 col-md-12">
                                <h3 style="text-align: left;">ジャカルタでの採用、すごく難しいです。人事・採用担当者さんはこのような課題にお悩みではないでしょうか？</h3>
                                <div class="row">

                                    <div class="col-sm-4">
                                        <img src="assets/img/img-recruitment-website/img-problem2.png" alt="HRD's Problem"
                                            class="img-responsive">
                                        <div>求人情報を求職者に知らせることができない。選考に十分な求人の母数が集まらない。費用対効果のバランスのとれた求人媒体がない。</div>
                                    </div>
                                    <div class="col-sm-4">
                                        <img src="assets/img/img-recruitment-website/img-problem3.png" alt="HRD's Problem"
                                            class="img-responsive">
                                        <div>人材紹介会社を使うとコストが厳しい。。４ヶ月目で退職されたりすることも多く、常に人材紹介エージェントを使う訳にはいかない。</div>
                                    </div>
                                    <div class="col-sm-4">
                                        <center><img src="assets/img/img-recruitment-website/img-problem1.png" alt="HRD's Problem"
                                                class="img-responsive"></center>
                                        <div>JobStreetなど求人ポータルを利用すると求職者数は多く集まるのだが、質が悪く、スクリーニングコストが大きい。</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center problem-text">

                    <div class="arrow-up"></div>
                    <div class="container__">

                        <h3>
                            ジャカルタの多くの人事担当者、採用担当者が苦しんでいます、<br />
                            LOGIQUEが御社の求人採用ページを制作することでお悩みの解消をお助けします！
                        </h3>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="text-left solution-text">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div>御社のカルチャー、雰囲気、御社で働くメリットなどをしっかり伝えることで求職者にアピール。求人ポータルでは伝えられない御社の魅力を写真や動画も使いじっくりと紹介。
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div> 求人内容を職種別にしっかりと説明、詳細な要件を記載することで専門的な言葉で仕事探しをしている求職者の検索にHitする可能性が高まります。</div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div>求める人材、必要な要件をしっかり記載する、また応募フォームに簡単なテストを付与することで、クオリティの低い応募を防ぎ、スクリーニングコストを権限する。</div>
                                        </div>
                                        <div class="clearfix"></div><br />
                                        <div class="col-sm-12">
                                            WEBページをうまく活用して他の採用活動の効果も高めます。必要に応じてデジタル広告を出稿してより多くの求職者の人に採用ページを訪問してもらうことも可能です。
                                            JobStreetからのランディングページをこのページにすることでJobStreetの中では説明できないことをしっかり説明できます。<br />
                                            人材紹介会社からの紹介の場合も採用ページでしっかりと”こういう人材が欲しい”と説明しておくことで面談でのミスマッチを事前に防ぐことができます。
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="simulation-container">
                <img src="assets/img/img-recruitment-website/img-simulation2.png" alt="Cost Simulation" class="img-responsive "
                    style="width: 100%;">
                <div class="container__">
                    <h2 class="text-center">
                    採用サイト（Ownedメディア）をもつ効果
                    </h2>
                    <div class="simul-cont1">
                        <div class="simul-1">仮に新たに</div>
                        <div class="simul-2">
                            <img src="assets/img/img-recruitment-website/img-simulation1.png" alt="Cost Simulation"
                                class="img-responsive" style="margin: 0 auto 5px">
                                10人の採用をする場合</div>
                        <div class="simul-3">10人の新規採用</div>
                    </div>
                    <center>
                        <img src="assets/img/img-recruitment-website/simulation-dot.png" alt="Cost Simulation"
                            class="img-responsive" style="margin-top: 10px;">
                    </center>
                </div>
                <div class="simul-container">
                    <div class="container__">
                        <div class="row">
                            <div class="col-sm-6 simul-2">
                                <center>
                                    <h4>求人ポータルサイトを利用</h4>
                                </center>
                                <img src="assets/img/img-recruitment-website/simulation1.png" alt="Cost Simulation"
                                    class="img-responsive center-block">
                            </div>
                            <div class="visible-xs"><br /><br /></div>
                            <div class="col-sm-6 simul-3">
                                <center>
                                    <h4>人材紹介会社のサービスを利用</h4>
                                </center>
                                <img src="assets/img/img-recruitment-website/simulation2.png" alt="Cost Simulation"
                                    class="img-responsive center-block">
                            </div>
							<div class="col-sm-12 simul-description">
								多くの企業が求人ポータルサイトも人材紹介会社も利用していると思います。但し上記のような問題を感じながら利用されているのではないでしょうか？これらの問題を減らすためにも自社の求人採用WEBページ、特設WEBサイトを併用活用してより良い採用活動をしましょう。
							</div>
                        </div>
                    </div>
                </div>
                <div class="text-center simul-text">
                    <div class="arrow-up"></div>
                    <h3 class="ytext"><span>採用求人WEBサイトの制作はLOGIQUEにお任せください。 </span>インドネシアでの採用活動の難しさを解決する求人採用WEBサイトを制作します。</h3>
                </div>
            </section>

            <section>
                <div class="solution-container">
                    <div class="container__">
                        <div class="row">
                            <div class="col-lg-7 col-md-6 col-sm-6 "><img src="assets/img/img-recruitment-website/bubble-text.png"
                                    alt="Bubble Text" class="img-responsive"></div>
                            <div class="col-lg-5 col-md-6 col-sm-6 price-tag">
                                <div class="price-tag-text">
                                    <!--<div style="font-size: 30px; font-weight: 900;line-height: 30px">Lebih </div>
									<div class="big-text"  style="font-size: 60px; font-weight: 900; line-height: 50px">Murah & Efektif</div> -->
                                    <div class="">この値段からスタート可能！</div><br />
                                    <div style="">
                                        <center>
                                            <span style="font-size: 16px; vertical-align: middle;">IDR</span>
                                            <span class="price-number"
                                                style="font-size: 100px; font-weight: 900; vertical-align: middle;line-height: 90px">20</span>
                                            <span style="font-size: 32px;vertical-align: middle;font-weight: bold;">Juta*</span>
                                        </center>
                                    </div>
                                    <br />
                                    <div class="price-term" style="font-size: 16px; color:#111; margin-top: 10px;">
                                        * 採用活動のプラットフォームになります<br />
                                        * 募集要項などを頻繁に変更する場合、CMS構築するか月額メンテナンスサービスをご利用いただく場合があります
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="forwho-container">
                <div class="container__ hidden">
                    <div class="logo-logique2">
                        <center><span class=""><img src="assets/img/img-recruitment-website/logo-y-logique.png"></span> </center>
                    </div>
                    <h3 class="custom-text">
                        <center>Teruntuk staf dan divisi HRD, <br>
                            <span class="custom-text">merasa familiar dengan berbagai permasalahan ini?</span></center>
                    </h3>
                    <center>
                        <div class="list-why">
                            <ul>
                                <li>Karyawan yang sudah direkrut tidak sesuai dengan kriteria perusahaan</li>
                                <li>Ada karyawan baru/lama yang bersikap tidak profesional</li>
                                <li>Dana dan waktu yang dihabiskan hanya untuk merekrut karyawan baru tidak sedikit</li>
                                <li>Sulit menemukan karyawan freelance atau paruh waktu</li>
                                <li>Karyawan yang tidak loyal pada perusahaan</li>
                            </ul>
                        </div>
                    </center>
                </div>
                <div class="text-center forwho-text">
                    <div class="forwho-cont">
                        <div class="container__">
                            <h3>
                                インドネシアで採用活動に難しさを感じている企業さま、LOGIQUEにご相談ください。<br />WEBを活用した効果的な採用活動のためのご支援をいたします。
                            </h3>
                        </div>
                    </div>
                </div>
            </section>

            <section class="reason-container">
                <div class="container__">
                    <center><img src="assets/img/img-recruitment-website/shadow1.png" alt="" style="margin-top: -5px;"
                            class="img-responsive"></center>
                    <div class="row">
                        <div class="col-sm-4">
                            <center>
                                <img src="assets/img/img-recruitment-website/icon-design.png" alt="" class="img-responsive">
                                <div>
                                    インドネシア人に御社の雰囲気をうまく伝えるデザインで制作します。写真や動画も必要に応じて使い、モバイル最適化したページデザインとします。
                                </div>
                            </center>
                        </div>
                        <div class="col-sm-4">
                            <center>
                                <img src="assets/img/img-recruitment-website/icon-seo.png" alt="" class="img-responsive">
                                <div>SEO対策をしっかりします。必要に応じて人事部の方にインタビューさせていただきコンテンツ制作いたします。求職者にもGoogleにも分かりやすいコンテンツを制作します。
                                </div>
                            </center>
                        </div>
                        <div class="col-sm-4">
                            <center>
                                <img src="assets/img/img-recruitment-website/icon-complete.png" alt="" class="img-responsive">
                                <div>応募フォームを実装します。必要に応じて社内の人事システムとの連携、また採用ポータルとの連携システムの構築を行うことも可能です。
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
            </section>

            <!-- <section class="step-container ">
				<div class="container">
					<h3><center>Langkah-Langkah Membuat Halaman Karir</center></h3>
					<div class="stepbystep">
						<div class="row">
							 
							<div class="col-md-3 col-sm-6 step step2">
									<div class="step-number-cont"><span>1</span></div>
									<img src="assets/img/img-recruitment-website/img-step2.jpg" class="img-responsive">
									<h4>Perencanaan</h4>
									<div class="step-text">Kami akan berdiskusi dengan Anda mengenai preferensi dan konsep halaman karir. <br>&nbsp;
									</div>
							</div>
							<div class="col-md-3 col-sm-6  step step3">
									<div class="step-number-cont"><span>2</span></div>
									<img src="assets/img/img-recruitment-website/img-step3.jpg" class="img-responsive">
									<h4>Desain</h4>
									<div class="step-text">Pembuatan desain yang menarik dan pengambilan foto akan dilakukan sebagai komponen penting dari halaman karir tersebut. 
									</div>
							</div>
							 
						 
							<div class="col-md-3 col-sm-6 step step5">
									<div class="step-number-cont"><span>3</span></div>
									<img src="assets/img/img-recruitment-website/img-step5.jpg" class="img-responsive">
									<h4>Penulisan</h4>
									<div class="step-text">Kami membantu Anda merangkum dan menampilkan konten yang mudah dimengerti oleh pengunjung.
									</div>
							</div>
							 
							<div class="col-md-3 col-sm-6 step step8">
									<div class="step-number-cont"><span>4</span></div>
									<img src="assets/img/img-recruitment-website/img-step8.jpg" class="img-responsive">
									<h4>Halaman karir selesai!</h4>
									<div class="step-text">Halaman karir siap digunakan untuk membantu proses rekrutmen perusahaan Anda.
									</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			 <section class="step-container hidden">
				<div class="container">
					<h3><center>Langkah-Langkah Membuat Halaman Karir</center></h3>
					<div class="stepbystep">
						<div class="row">
							<div class="col-md-3 col-sm-6 step step1">
									<div class="step-number-cont"><span>1</span></div>
									<img src="assets/img/img-recruitment-website/img-step1.jpg" class="img-responsive">
									<h4>Diskusi</h4>
									<div class="step-text">Kami akan berdiskusi dengan Anda mengenai preferensi dan gambaran Anda dalam membuat halaman karir ini. <br>&nbsp;
									</div>
							</div>
							<div class="col-md-3 col-sm-6 step step2">
									<div class="step-number-cont"><span>2</span></div>
									<img src="assets/img/img-recruitment-website/img-step2.jpg" class="img-responsive">
									<h4>Perencanaan</h4>
									<div class="step-text">Kami akan berdiskusi dengan Anda mengenai preferensi dan konsep halaman karir. <br>&nbsp;
									</div>
							</div>
							<div class="col-md-3 col-sm-6  step step3">
									<div class="step-number-cont"><span>3</span></div>
									<img src="assets/img/img-recruitment-website/img-step3.jpg" class="img-responsive">
									<h4>Desain</h4>
									<div class="step-text">Pembuatan desain yang menarik dan pengambilan foto akan dilakukan sebagai komponen penting dari halaman karir tersebut. 
									</div>
							</div>
							<div class="col-md-3 col-sm-6 step step4">
									<div class="step-number-cont"><span>4</span></div>
									<img src="assets/img/img-recruitment-website/img-step4.jpg" class="img-responsive">
									<h4>Sesi Foto</h4>
									<div class="step-text">Akan ada sesi foto atau video yang dilakukan secara profesional mengenai materi dari halaman karir perusahaan yang membuat orang tertarik.
									</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3 col-sm-6 step step5">
									<div class="step-number-cont"><span>5</span></div>
									<img src="assets/img/img-recruitment-website/img-step5.jpg" class="img-responsive">
									<h4>Penulisan</h4>
									<div class="step-text">Kami membantu Anda merangkum dan menampilkan konten yang mudah dimengerti oleh pengunjung.
									</div>
							</div>
							<div class="col-md-3 col-sm-6 step step6">
									<div class="step-number-cont"><span>6</span></div>
									<img src="assets/img/img-recruitment-website/img-step6.jpg" class="img-responsive">
									<h4>Coding</h4>
									<div class="step-text">Setelah desain dikerjakan, akan dilakukan coding oleh programmer terbaik kami supaya halaman Anda dapat dengan mudah diakses.
									</div>
							</div>
							<div class="col-md-3 col-sm-6 step step7">
									<div class="step-number-cont"><span>7</span></div>
									<img src="assets/img/img-recruitment-website/img-step7.jpg" class="img-responsive">
									<h4>QA/Adjust</h4>
									<div class="step-text">Setelah semua poin di atas terpenuhi, akan ada pengetesan dan penyesuaian atas halaman karir Anda di berbagai platform dan aspek.
									</div>
							</div>
							<div class="col-md-3 col-sm-6 step step8">
									<div class="step-number-cont"><span>8</span></div>
									<img src="assets/img/img-recruitment-website/img-step8.jpg" class="img-responsive">
									<h4>Halaman karir selesai!</h4>
									<div class="step-text">Halaman Karir Selesai!: Halaman karir siap digunakan untuk membantu proses rekrutmen perusahaan Anda.
									</div>
							</div>
						</div>
					</div>
				</div>
			</section> -->

            <section>
                <div class="testimonial-container">
                    <div class="container__">
                        <div class="row">
                            <div class="col-sm-3 testimonial-title">
                                <h3 class="custom-text">Testimoni</h3>
                            </div>
                            <div class="col-sm-9">
                                <div class="testi-container">
                                    <div class="testi-box">
                                        <div class="quoteicon quote-icon1">"</div>
                                        <div class="testi-text">
                                            Setelah menggunakan konsultasi dan hasil halaman karir yang diberikan oleh Logique,
                                            kuantitas dan kualitas pelamar kerja perusahaan kami meningkat. Hal ini membuat kami
                                            bisa
                                            mengefisiensikan kinerja staff HR dalam hal rekrutmen.
                                        </div>
                                        <div class="quoteicon quote-icon2 pull-right">"</div>
                                        <div class="arrow-diagonal"></div>
                                    </div>
                                    <div class="testi-owner-container pull-right">
                                        Mr. Tatsuya Miyoshi<br>
                                        <span style="font-style: italic;">TrendPot </span><a style="color:#000"
                                            href="http://trendpot-recruit.asia/" target="_blank"
                                            rel="noreferrer"><u>(http://trendpot-recruit.asia/)</u></a>
                                    </div>
                                </div>
                            </div>
						</div>
                    </div>
                </div>
			</section>
			
		</div>

        <?php include '../footer.php'; ?>
    </div>
    <!-- <script src="//code.jquery.com/jquery-3.2.1.min.js"></script> -->
    <!-- <script src="/js/bootstrap.min.js"></script> -->
    <script src='https://www.google.com/recaptcha/api.js'></script>

</body>

</html>