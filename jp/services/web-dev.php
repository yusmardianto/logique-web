 <?php
require_once("assets/form/fgcontact_webdev.php");

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
    <meta name="description" content="LOGIQUEがインドネシアで作るWeb / ホームページは、集客ができる、お問い合わせが増える、採用応募者が増える、などコンバージョンが増える価値のあるWebです。WEBチャネルを活用して営業を効率的に行いたい、他社と差別化したい、カスタマーサービスを効率化したい、採用を強化したい、
場合はLOGIQUEにお任せください。LOGIQUEのWeb制作サービス詳細。">
	<meta name="keywords" content="効果のある、コンバージョンのでる、意味のある、WEBサイトを予算内で、素早く、効率的に、先進テクノロジーを用い、セキュアに、作ります">
	<meta name="author" content="PT LOGIQUE DIGITAL INDONESIA ">
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <title>Web制作サービス詳細 | ジャカルタのWeb制作会社LOGIQUEデジタルインドネシア</title>
	<link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style_webdev.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
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
</head>
	<body>
		<header>

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
							<div class="text-center  active">
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
							 	<div class="text-center">
							<a href="product.php">
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
			<div class="top-header-container">
				<div class="container">
					<div class="row">
						<div class=" col-xs-7">
							<div class="logo-header-container">
								<a href="/jp/" target="_blank">
								<img src="assets/img/img-webdev/logo.png" alt="Fitur Perusahaan" class="img-responsive">
								</a>
							</div>
							<div class="breadcrumb-cont">
								<ol class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
								  <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="../index.php"><span itemprop="name">Home</span></a><meta itemprop="position" content="1" /></li>
								  <li   itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" ><a itemprop="item" href="../services.php" ><span itemprop="name">サービス</span></a><meta itemprop="position" content="2" /></li>
								  <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" ><a itemprop="item"><span itemprop="name">Web・ホームページ制作</span></a><meta itemprop="position" content="2" /></li>
								</ol>
							</div>
						</div>
						<div class=" col-xs-5">

								<div class="language-btn">
									<ul class="list-inline">
										<li><a href="/layanan/web-dev.php">ID</a></li>
										<li><a href="/en/services/web-dev.php">EN</a></li>
										<li class="active"><a href="#">JP</a></li>
									</ul>
								</div>

						</div>

					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">

					<div class="col-md-offset-2 col-md-9 m-t-10em">
						<h1 class="text-left"><span class="c-logique"><span class="underline">LOGIQUEのWeb</span></span> /  ホームページ制作サービス</h1>
						<div class="subtitle-header">
							<p>LOGIQUEが作るWeb / ホームページは、
集客ができる、お問い合わせが増える、採用応募者が増える、<br>などコンバージョンが増える価値のあるWebです。
</p>

							<p>WEBチャネルを活用して営業を効率的に行いたい、 他社と差別化したい、<br>
								カスタマーサービスを効率化したい、 採用を強化したい、<br>
								場合はLOGIQUEにお任せください。<br>
								インドネシアで歴史も実績もNo1のWEB制作会社です。<br/>
						</p>
						</div>
					</div>
				</div>
			</div>
		</header>
		<section class="about" style="padding-bottom: 0">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-1 col-md-10">
						<div class="panel text-center custom-1">
							<h2 style="margin-bottom: 20px;"><b>インドネシアでWeb制作するならLOGIQUE一択です！</b></h2>
							<p class="p-b-20">インドネシアで200件以上のWebサイトを制作運営してきました。政府系団体や金融機関などのセキュアでミスの許されないものから、クリエイティブへの要求が高いWeb、複雑なプログラミングが必要なWebなど様々なものを手がけてきました。スピード感をもって柔軟に進めます。大きすぎず小さすぎない社員数40数名で運営していますので、リーズナブルだけれど安心してお取引いただけるWeb制作会社です。インドネシアでWeb制作・運用が必要であればLOGIQUEにご相談ください。</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-offset-1 col-md-10">
						<div class="row">
							<div class="col-md-4 text-center">
								<div class="new-box min-h">
									<h4>Webサイト制作運用をワンストップで</h4>
									<p> 多言語Web、インドネシア語のSEO対策を実装したホームページ、コンバージョンがでるランディングページを制作してきました。公開後のメンテナンスやデジタルマーケティングなども含め関連サービスを幅広くご支援しています。</p>
								</div>
							</div>
							<div class="col-md-4 text-center">
								<div class="new-box min-h">
									<h4>品質・テクノロジー・セキュリティ</h4>
									<p>PWAやAMPなど要件にもお応えしています。プログラマーが複雑な機能の実装も行います。セキュリティの専門家による脆弱性検査を行った上で納品します。軽快に動作するセキュリティ堅牢性の高いWebを制作します。</p>
								</div>
							</div>
							<div class="col-md-4 text-center">
								<div class="new-box min-h">
									<h4>スピード＆柔軟性</h4>
									<p><br>スピードを重要視しておりアジャイル制作開発を行っています。素早く制作開発して公開するためにプロジェクトを素早く積極的にリードします。特別なご要望にも柔軟に対応しています。</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="section-layout web-service-flow" >
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-md-5 col-lg-4">
						<div class="analysis-part flow-part">
							<img src="assets/img/img-webdev/writing.png" alt="アクセス解析・課題抽出">
							<h3>アクセス解析・課題抽出</h3>
							<p>Webサイトの現状分析を分析評価します。なぜ、トラフィックが少ないのか、問い合わせが得られないのか？アクセス解析に加え、インドネシアWeb運営の専門家がヒューリスティック分析して、課題を抽出します。</p>
						</div>
					</div>
					<div class="col-sm-6 col-md-5 col-lg-4">
						<div class="plan-part flow-part">
							<img src="assets/img/img-webdev/intelligent.png" alt="プランニング">
							<h3>プランニング</h3>
							<p>Webサイトに求めるゴールを達成するために、Webのあるべき姿を示し、いまやるべきこと、今後、継続して改善していくべきことを提案し、ご支援していきます。お客様社内の体制によってご支援の形は様々となります</p>
						</div>
					</div>
					<div class="col-sm-6 col-md-5 col-lg-4">
						<div class="seo-part flow-part">
							<img src="assets/img/img-webdev/analysis.png" alt="SEO / SEM">
							<h3>SEO / SEM</h3>
							<p>Webサイトは、工夫なく公開するだけでは多くのトラフィックを集められません。インドネシアでのSEO対策に精通したエキスパートがオーガニック検索集客力のあるWebを制作します。PPC広告運用も効果的なキーワードを選定しご提案致します。</p>
						</div>
					</div>
					<div class="col-sm-6 col-md-5 col-lg-4">
						<div class="info-part flow-part">
							<img src="assets/img/img-webdev/ux.png" alt="情報再構成・改善">
							<h3>情報再構成・改善</h3>
							<p>現状Webが実態にあわず再作成が必要だが、いちから作り直すのはもったいない、複雑すぎて修正が難しい、というケースがよくあります。Webサイトの整理・回収・改善も、ご予算とご希望の期間に応じて、最適なご提案を差し上げます。</p>
						</div>
					</div>
					<div class="col-sm-6 col-md-5 col-lg-4">
						<div class="multiligual-part flow-part">
							<img src="assets/img/img-webdev/language.png" alt="多言語Webサイト制作運用">
							<h3>多言語Webサイト制作運用</h3>
							<p>インドネシア語、英語・日本語のサイト制作運用に対応可能です。コンテンツは非常に重要です。ただ翻訳するだけでなく、当社のコンテンツライターがコンテンツ制作することも可能です。<br><br></p>
						</div>
					</div>
					<div class="col-sm-6 col-md-5 col-lg-4">
						<div class="sosmed-part flow-part">
							<img src="assets/img/img-webdev/customer.png" alt="SNS運用">
							<h3>SNS運用</h3>
							<p>Facebookページ、インスタグラムなどSNSをインドネシア語、英語、日本語で運用します。SNS上でのエンゲージメントのため、SNSからWebへの送客のためSNS運用も検討が必要です。<br/><br/></p>
						</div>
					</div>
					<div class="col-sm-6 col-md-5 col-lg-4">
						<div class="design-part flow-part">
							<img src="assets/img/img-webdev/graphic-design.png" alt="デザイン制作">
							<h3>デザイン制作</h3>
							<p>お客様の要件に沿った異なるテイストのデザインを複数のデザイナーが提案することでご希望に叶った、ユーザーフレンドリーでコンバージョンにつながるUI設計をします。<br/><br/></p>
						</div>
					</div>
					<div class="col-sm-6 col-md-5 col-lg-4">
						<div class="markup-part flow-part">
							<img src="assets/img/img-webdev/website.png" alt="マークアップ・コーディング">
							<h3>マークアップ・コーディング</h3>
							<p>HTML/CSSコーディングだけご依頼いただくことも可能です。Java Script系のフロントエンドコーディング技術は最新のものも常にキャッチアップしています。<br/><br/><br/></p>
						</div>
					</div>
					<div class="col-sm-6 col-md-5 col-lg-4">
						<div class="responsive-part flow-part">
							<img src="assets/img/img-webdev/devices.png" alt="マルチデバイス対応">
							<h3>マルチデバイス対応</h3>
							<p>モバイル・スマートフォン、タブレット向け最適化サイト制作をします。レスポンシブWebの制作。AMPやモバイルフレンドリーWebの制作運用も経験豊富です。<br/><br/><br/></p>
						</div>
					</div>
					<div class="col-sm-6 col-md-5 col-lg-4">
						<div class="programing-part flow-part">
							<img src="assets/img/img-webdev/programming.png" alt="プログラミング">
							<h3>プログラミング</h3>
							<p>パララックスなどWebサイトにモーションをつけられます。JavascriptやHTML5、CSS3などにより対応が可能です。ユーザーを惹きつけるWebサイトの開発をご要望にあわせご提案いたします。 </p>
						</div>
					</div>
					<div class="col-sm-6 col-md-5 col-lg-4">
						<div class="system-part flow-part">
							<img src="assets/img/img-webdev/engineering.png" alt="システム構築">
							<h3>システム構築</h3>
							<p>CMSシステムやWebシステム、業務システムを開発します。Webサイトと連携して動くシステムだけでなく各種システムを構築運用可能です。PHPフレームワークでの開発が得意です。<br/><br/> </p>
						</div>
					</div>
					<div class="col-sm-6 col-md-5 col-lg-4">
						<div class="apps-part flow-part">
							<img src="assets/img/img-webdev/smartphone.png" alt="モバイルアプリ対応">
							<h3>モバイルアプリ対応</h3>
							<p> PWAでネイティブアプリではなくウェブアプリとしてモバイルアプリを開発します。プッシュ通知やオフラインでの動作も可能です。<br/><br/><br/></p>
						</div>
					</div>
				</div>
				<div class="link-page-price-and-portfolio">
					<a class="link-yellow-white" href="/jp/services/webdev-price-range.php">Webサイト制作運用の費用について</a>
					<a class="link-yellow-white" href="/jp/portfolio.php">Webサイト制作実績</a>
				</div>
			</div>
		</section>

		 <section class="obstacle" style="padding-top: 20px; ">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-1 col-md-7 border-l text-right">
						<h2 class="text-right">Webサイト（ホームページ）制作の流れ</h2>

						<p class="text-right">LOGIQUEのホームページ制作は、スピード感とクオリティを両立させてプロジェクトを進めていきます。企画・提案からデザイン、開発、運用までの全工程を対応可能です。各工程において高いスキルをもった専門家が担当します。ホームページ制作の流れ、必要期間は、各プロジェクトの種類（Webサイトの規模、CMS要否、システム開発の難易度、など）によって変わる場合もございますがおおよそ下記の流れになります。通常トータルで1ヶ月から2ヶ月で完成します。</p>
					</div>
					<div class="col-md-3 text-center hidden-xs hidden-sm">
						<a href="/jp/" target="_blank"><img src="assets/img/img-webdev/logo.png" alt="Fitur Perusahaan" class="custom-2"></a>
					</div>
				</div>
			</div>
		</section>
		<section class="tahap-pemesanan">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-6 col-md-6">
						<div class="card">
							<section style="padding-top:40px">
								<div class="row">
									<div class="col-xs-2 col-sm-2 col-md-2 text-right">
										<span class="title-custom">1</span>
									</div>
									<div class="col-xs-10 col-sm-10 col-md-10">
										<p class="title-custom-p"><b>お問い合わせ</b></p>
									</div>
								</div>
								<div class="row">
									<div class="col-md-offset-2 col-md-10 m-t-10">
										<p>Webサイト制作や運用について、CMSの構築やWebシステム開発などもLOGIQUEはお客様のご支援をする準備ができていますので、どのようなご要望でもお聞かせいただければと思います。入札への参加リクエストなどもお気軽にご相談ください。提案や入札への参加リクエストなどはお気軽にinfoアットlogique.co.idか問い合わせフォームよりご連絡いただければ幸いです。日本語、英語、インドネシア語のお問い合わせにご対応いたします。</p>
									</div>
								</div>
							</section>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="tahap-pemesanan-2">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="card2">
							<div class="row">
								<div class="col-xs-2 col-sm-2 col-md-2 text-right">
									<span class="title-custom">2</span>
								</div>
								<div class="col-xs-10 col-sm-10 col-md-10">
									<p class="title-custom-p"><b>ヒアリング（ご訪問）</b></p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-offset-2 col-md-10 m-t-10">
									<p>お客様がホームページに求めるゴールなどご要件をお聞かせいただきます。集客強化が必要、イメージ・ブランディング向上、IR活動、採用活動、などさまざまなお客様のビジネス課題と併せてお聞かせいただきます。ジャカルタでのお打ち合わせが難しい場合などでもSKYPEなどを通じてヒアリングさせていただきます。</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card2">
							<div class="row">
								<div class="col-xs-2 col-sm-2 col-md-2 text-right">
									<span class="title-custom">3</span>
								</div>
								<div class="col-xs-10 col-sm-10 col-md-10">
									<p class="title-custom-p"><b>企画・ご提案、お見積り</b></p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-offset-2 col-md-10 m-t-10">
									<p>要件に応え、課題を解決するWeb活用・制作運用をご提案します。必要に応じて、同業・競合他社のリサーチや現行Webサイトのヒューリスティックな課題分析なども行い企画・立案をおこないます。スピード感を大事にしており、通常1週間以内の迅速なご提案を心がけています。必要に応じて追加オプションのご提案などもしますので</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card2">
							<div class="row">
								<div class="col-xs-2 col-sm-2 col-md-2 text-right">
									<span class="title-custom">4</span>
								</div>
								<div class="col-xs-10 col-sm-10 col-md-10">
									<p class="title-custom-p"><b>お申込み・ご契約</b></p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-offset-2 col-md-10 m-t-10">
									<p>当社から発行しました発注書にサインバックいただくとプロジェクトスタートとなります。必要に応じて契約書の締結も問題ありません。お客様の契約フォーマットをベースにすることも可能ですし、当社の雛形でも可能です。通常、締結後Down paymentのお支払いをお願いしています。</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="tahap-pemesanan-3">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="card3">
							<div class="row">
								<div class="col-xs-2 text-right">
									<span class="custom-p-1">5</span>
								</div>
								<div class="col-xs-10">
									<p class="custom-p-2"><b>要件定義</b></p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-offset-2 col-md-10 m-t-10">
									<div class="border-right-custom"></div>
									<p>改めてご要望・要件を確認しながら、ワイヤーフレームを作成し、Webサイト設計をします。コンテンツの準備もこのステップで進めます。現行ホームページがある場合はGoogle Analyticsアカウントの共有をお願いします。</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="border-top-custom hidden-xs hidden-sm"></div>
						<div class="card3">
							<div class="row">
								<div class="col-xs-2 text-right">
									<span class="custom-p-1">6</span>
								</div>
								<div class="col-xs-10">
									<p class="custom-p-2"><b>デザイン制作</b></p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-offset-2 col-md-10 m-t-10">
									<div class="border-right-custom"></div>
									<p>ワイヤーフレーム確定後、デザインを制作します。通常はTOPページについて2案デザインを制作してご提示します。採用いただいた1案をその後リバイズしていきます。TOPデザインの確定後、その他のWebページのデザイン作成を行います。</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card3">
							<div class="row">
								<div class="col-xs-2 text-right">
									<span class="custom-p-1">7</span>
								</div>
								<div class="col-xs-10">
									<p class="custom-p-2"><b>実装、コーディング、プログラミング</b></p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-offset-2 col-md-10 m-t-10">
									<p>デザインをhtmlコーディングして、Webページとしてご確認いただけるようにします。フォームやCMSなどが正常に機能するようにプログラミングします。UI/UX設計どおりに実装します。</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="tahap-pemesanan-2">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="card2">
							<div class="row">
								<div class="col-xs-2 col-sm-2 col-md-2 text-right">
									<span class="title-custom">8</span>
								</div>
								<div class="col-xs-10 col-sm-10 col-md-10">
									<p class="title-custom-p"><b>テスト検証</b></p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-offset-2 col-md-10 m-t-10">
									<p>HTMLシンタックスエラー、Mobileフレンドリー性、ページLoadingスピード、SEO対策が効果的になされているか、マルチデバイス確認など様々なテストを行います。さらにCMSやデータベース連携Webなどの場合には、多くのテストシナリオに基づくテストとセキュリティ検査を行います。</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="border-top-custom hidden-xs hidden-sm"></div>
						<div class="card2">
							<div class="row">
								<div class="col-xs-2 col-sm-2 col-md-2 text-right">
									<span class="title-custom">9</span>
								</div>
								<div class="col-xs-10 col-sm-10 col-md-10">
									<p class="title-custom-p"><b>WEBサイト公開</b></p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-offset-2 col-md-10 m-t-10">
									<p>WebファイルをWebサーバーにDeployし各種設定を行い公開します。当社がドメインやサーバーなども管理する場合もあれば、必要なWebファイルを納品しお客様に公開作業を行っていただく場合もあります。公開後のGoogleへのIndex登録やGoogleアナリティクスの設定なども当社で行います。</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card2">
							<div class="row">
								<div class="col-xs-2 col-sm-2 col-md-2 text-right">
									<span class="title-custom no-10">10</span>
								</div>
								<div class="col-xs-10 col-sm-10 col-md-10">
									<p class="title-custom-p"><b>WEB運用・改善</b></p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-offset-2 col-md-10 m-t-10">
									<p>公開後の運用改善がより良いWebサイトにしていくために重要です。Webサイトへのアクセス状況を分析し改善します。Webサイト、Webサーバーのモニターから、障害時の復旧作業などの保守作業、日々の更新作業、コンテンツ作成、SNSの運用、アクセス解析、Digital広告運用までトータルに支援いたします。</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="layanan p-t-10-m">
			<div class="container">
				<div class="row hidden-md hidden-lg">
					<div class="col-md-12">
						<h2 class="m-m-10">LOGIQUEのWeb制作以外のサービス</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<h2 class="custom-3">モバイル(スマホ)アプリケーション開発</h2>
						<p class="min-h">スマホやタブレットで動くモバイルアプリケーションの開発も行っています。Androidアプリ、iOSアプリ、ハイブリッドアプリの開発が可能です。PWAやAMP制作などモバイル関連ソリューションは数多く経験してますので幅広いサポートができます。APIの開発、AWSなどインフラ構築などと合わせてワンストップでご支援し保守性の高いアプリを開発します。</p>
						<div>
							<a href="/jp/services/mobile-app-dev.php" target="_blank" class="btn btn-logic btn-md">モバイルアプリ開発について詳しくみる</a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="border-top-custom-2 hidden-xs hidden-sm">LOGIQUEのWEB制作以外のサービス</div>
						<h2 class="custom-3">HR関連ソリューション</h2>
						<p class="min-h">人事採用関連のソリューションを提供しています。応募者を増やすためブランディングのため採用サイトの制作運用をご支援しています。また、当社独自プロダクトとして採用活動管理システム、日報管理システム、生産性向上のための勤務状況管理＆テレワーク管理システムをご提供しています。</p>
						<div>
							<a href="/jp/services/recruitment-web-dev.php" target="_blank"  class="btn btn-logic btn-md">HR関連プロダクトついて詳しくみる</a>
						</div>
					</div>
					<div class="col-md-4">
						<h2 class="custom-3">Webセキュリティ脆弱性検査</h2>
						<p class="min-h">Webサイトにセキュリティホールがないか、脆弱性について確認する検査を実施します。乗っ取りや改竄などに対する脆弱性を確認し、問題点とリスクを明らかにします。静的なホームページの場合には15ジュタの簡易診断もご用意しています。</p>
						<div>
							<a href="/jp/services/penetration-test.php" target="_blank"  class="btn btn-logic btn-md">Webサイトのセキュリティテスト</a>
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
						<h4><b>Webサイトに関連するどんな課題にもお応えします</b></h4>
						<ul>
							<li class="m-b-5">ホームページ制作/運用をアウトソースしたい</li>
							<li class="m-b-5">オンラインでもっと集客して、Webを重要な営業チャネルとする</li>
							<li class="m-b-5">モバイル最適化されたWebサイトにリニューアルしたい</li>
							<li class="m-b-5">基幹システムと連携するWebサイトを開発する必要がある</li>
							<li class="m-b-5">Webサーバー利用料、保守費用をコストダウンしたい</li>
							<li class="m-b-5">SNSと連携したWebサイトに作り直したい</li>
							<li class="m-b-5">動画を 制作したい、動画をWebに掲載したい</li>
							<li class="m-b-5">SEO対策が不十分。検索サイト経由でもっと集客したい。</li>
							<li class="m-b-5">問い合わせフォームを最適化して問い合わせ数を増やしたい</li>
							<li class="m-b-5">デジタルマーケティングを活用しWebへのトラフィックを増やしたい</li>
							<li class="m-b-5">Webコンテンツ制作をアウトソースしたい</li>
							<li class="m-b-5">オンラインチャット、チャットBotを導入して自動化したい</li>
						</ul>
					</div>
				</div>

				<div class="text-center btn-container-contact"  >
					<a href="contact.php" class="btn btn-contact-us-black">
						インドネシアのWeb制作運用についてLOGIQUEにお問い合わせください
					</a>
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
						<a href="/jp/" target="_blank"><img src="assets/img/img-webdev/logo.png" alt="Fitur Perusahaan" class="cs-custom"></a>
						<div class="m-t-10 text-left">LOGIQUE DIGITAL INDONESIA<br>
						Ad Premier Building 19th Floor. <br>
						Jalan Tb. Simatupang No. 5 Ragunan, <br>
						Ps. Minggu, Jakarta Selatan, <br>Indonesia 12550</div>
						<div>021) 22708935 / 36 <br>0811870321</div>
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
							<div class="row medsos-new">
								<div class="col-xs-3">
									<a href="https://www.facebook.com/logique.id/" target="_blank" aria-label="Facebook" rel="noreferrer"><i class="fa fa-facebook-official" style="font-size: 35px;margin-top: 10px;"></i></a>
								</div>
								<div class="col-xs-3">
									<a href="https://twitter.com/LogiqueDigital" target="_blank" aria-label="Twitter" rel="noreferrer"><i class="fa fa-twitter" aria-hidden="true" style="font-size: 35px;margin-top: 10px;"></i></a>
								</div>
								<div class="col-xs-3">
									<a href="https://www.instagram.com/logiquedigital/" target="_blank" aria-label="Instagram" rel="noreferrer"><i class="fa fa-instagram" aria-hidden="true" style="font-size: 35px;margin-top: 10px;"></i></a>
								</div>
								<div class="col-xs-3">
									<a href="https://www.linkedin.com/company/13420656" target="_blank" aria-label="LinkedIn" rel="noreferrer"><i class="fa fa-linkedin-square" aria-hidden="true" style="font-size: 35px;margin-top: 10px;"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 hidden-md hidden-lg">
						<span><hr>インドネシアでWeb制作・ホームページ制作や運用が必要な場合にはLOGIQUEにご相談ください。レスポンシブWeb、パララックスWeb、セキュアなWebなどいかなるご要望にも柔軟にお応えし、かつスピーディーに制作します。インドネシア語、日本語、英語の他言語Web制作の経験が豊富にあります。SEO / SEMの実績も豊富ですのでWeb公開後の運用もお任せください。</span>
						<div class="row">
							<div class="col-sm-12">
								<div class="link-footer-webdev">
									<br/>
									<div style="margin-bottom:8px"><b>LOGIQUE's Products</b></div>
									<a href="https://dokodemo-kerja.com" target="_blank" rel="noreferrer">Dokodemo-Kerja</a>
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
							<div class="">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Name" name="name" aria-label="Name" value='<?php echo $formproc->SafeDisplay('name') ?>'>
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
										<textarea name="" id="" cols="30" rows="6" class="form-control" placeholder="Message" name="message" aria-label="Message"><?php echo $formproc->SafeDisplay('message') ?></textarea>
									</div>
									<div class="form-group">
										<div class="g-recaptcha captcha-custom" data-sitekey="6LcuHywUAAAAACj__hCefsBCkoIC2ExM2Sur4cCp"></div>
									</div>
									<div class="form-group text-right">
											<br>
											<button type="submit" class="btn btn-logic btn-sm">Submit</button>
									</div>
							</div>
						</form>
					</div>
					<div class="col-md-4 hidden-xs hidden-sm">
						<p>  インドネシアでWeb制作・ホームページ制作や運用が必要な場合にはLOGIQUEにご相談ください。レスポンシブWeb、パララックスWeb、セキュアなWebなどいかなるご要望にも柔軟にお応えし、かつスピーディーに制作します。インドネシア語、日本語、英語の他言語Web制作の経験が豊富にあります。SEO / SEMの実績も豊富ですのでWeb公開後の運用もお任せください。</p>
						<div class="row">
							<div class="col-sm-6">
								<div class="link-footer-webdev" style="padding-left:30px">
									<br/>
									<div style="margin-bottom:8px"><b>LOGIQUE's Products</b></div>
									<a href="https://dokodemo-kerja.com" target="_blank" rel="noreferrer">Dokodemo-Kerja</a>
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
				 // byRow: false
			});
			$('.flow-part').matchHeight({
				// byRow: false
			});
		</script>
	</body>
</html>
