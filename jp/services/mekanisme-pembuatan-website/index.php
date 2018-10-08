 <?php 
require_once("form/fgcontact_webdev.php");

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
	<meta name="keywords" content="効果のある、コンバージョンのでる、意味のある、WEBサイトを予算内で、素早く、効率的に、先進テクノロジーを用い、セキュアに、作ります">
	<meta name="author" content="PT LOGIQUE DIGITAL INDONESIA ">
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <title>LOGIQUEのWEB制作の特徴 | LOGIQUE Digital Indonesia</title>
	<link href="/css/bootstrap.min.css" rel="stylesheet">	 
    <link href="css/style_webdev.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
	<link href="/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
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
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<a href="/jp/" target="_blank">
							<div class="logo-header">
								<img src="img/webdev/logo.png" alt="Fitur Perusahaan" class="img-responsive">
							</div>
						</a>
					</div>
				</div>
				<div class="row">
					<div style="position:relative">
						<div class="language-btn">
							<ul class="list-inline">
								<li><a href="/layanan/mekanisme-pembuatan-website">ID</a></li>
								<li><a href="/en/services/mekanisme-pembuatan-website">EN</a></li>
								<li class="active"><a href="#">JP</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-offset-3 col-md-7 m-t-10em">
						<h1 class="text-right"><span class="c-logique"><span class="underline">LOGIQUE</span></span>のWEB制作の特徴</h1>
					</div>
				</div>
			</div>
		</header>
		<section class="about" style="padding-bottom: 0">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-1 col-md-10">
						<div class="panel text-center custom-1">
							<h1><b>インドネシアでWEB制作するならLOGIQUE１択です！</b></h1>
							<br>
							<p class="p-b-20">インドネシアでのWEB制作の経験が違います。数多くのWEB、それも政府系団体や金融機関などのセキュアでミスの許されないものから、クリエイティブへの要求が高いWEB、複雑なプログラミングが必要なWEBなど様々なものを手がけてきました。スピード感をもって柔軟に進めます。インドネシアでWEB制作・運用が必要であればLOGIQUEにご相談ください。</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="obstacle" style="padding-top: 20px">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-1 col-md-7 border-l text-right">
						<h2 class="text-right">WEBサイト（ホームページ）制作の流れ</h2>
						<p class="text-right">LOGIQUEのホームページ制作は、スピード感とクオリティを両立させてプロジェクトを進めていきます。企画・提案からデザイン、開発、運用までの全工程が対応可能です。各工程において高いスキルをもった専門家が担当します。ホームページ制作の流れは各プロジェクトの種類（WEBサイトの規模、CMS要否、システム開発の難易度、など）によって変わる場合もございますがおおよそ下記の流れになります。</p>
					</div>
					<div class="col-md-3 text-center hidden-xs hidden-sm">
						<a href="/jp/" target="_blank"><img src="img/webdev/logo.png" alt="Fitur Perusahaan" class="custom-2"></a>
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
										<p>WEBサイト制作や運用について、CMSの構築やWEBシステム開発などもLOGIQUEはお客様のご支援をする準備ができていますので、どのようなご要望でもお聞かせいただければと思います。入札への参加リクエストなどもお気軽にご相談ください。提案や入札への参加リクエストなどはお気軽にinfoアットlogique.co.idか問い合わせフォームよりご連絡いただければ幸いです。日本語、英語、インドネシア語のお問い合わせにご対応いたします。</p>
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
									<p>お客様がホームページに求めるゴールなどご要望をお聞かせいただきます。販売強化が必要、イメージ・ブランディング向上、IR活動、採用活動、などさまざまな目的がありますので、お客様のビジネス課題と併せてお聞かせいただきます。ジャカルタでのお打ち合わせが難しい場合などでもSKYPEなどを通じてヒアリングさせていただきます。ヒアリングさせていただいた内容でご提案を行いますので、ここでご要望やゴールなどの情報を漏れなくお聞きすること重要になります。</p>
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
									<p>ヒアリングで共有いただいた課題を解決するWEB活用・制作運用をご提案します。必要に応じて、同業・競合他社のリサーチや現行WEBサイトのヒューリスティックな課題分析なども行い企画・立案をおこないます。ご提案提出までもスピード感を大事にしており、迅速なご提案を心がけています。必要に応じて追加オプションのご提案などもしますのでお気軽にご相談ください。原則、提案費なしでの受注前デザイン制作などはお断りしております。</p>
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
									<p>改めてご要望・要件を確認しながら、ワイヤーフレームを作成し、WEBサイト構造を決めていくことになります。コンセプトやデザイン、ドメインやWEBサーバーについてなどについて確認決定していきます。制作・公開スケジュールについても決定します。会社ロゴや写真などWEBコンテンツ素材のご準備をお願いすることになります。現行ホームページがある場合はGoogle Analyticsアカウントの共有をお願いします。</p>
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
									<p>ワイヤーフレーム確定後、デザインを制作します。通常はTOPページについて2案デザインを制作してご提示します。採用いただいた1案をその後リバイズしていきます。TOPデザインの確定後、その他のWEBページのデザイン作成を行います。</p>
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
									<p>デザインをhtml（WEBページ）にしていく、フォームやCMSなどが正常に機能するようにプログラミングします。SEO対策をしながら、WEBのセキュリティ脆弱性を消しながら、UI/UX設計どおりに実装します。実際のWEBページを確認いただきながら調整を繰り返して最終型までもっていきます。</p>
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
									<p>制作するWEBサイトの内容に応じて適切なテストを行います。静的なWEBでも、HTMLシンタックスエラーがないか、Mobileフレンドリー性確認、ページLoadingスピード確認、SEO対策が効果的になされているか、からデザイン通りに実装されているか複数の環境で確認するなどテスト内容は多岐にわたります。さらにCMSやデータベース連携WEBなどの場合には、多くのテストシナリオに基づくテストやセキュリティ検査を行います。</p>
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
									<p>WEBサイトをWEBサーバーにDeployし各種設定を行い公開します。当社がドメインやサーバーなども管理する場合もあれば、必要なWEBファイルを納品しお客様にお客様管理WEBサーバーに公開作業を行っていただく場合もあります。公開後、GoogleへのIndex登録やGoogleアナリティクスの設定なども当社で行います。</p>
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
									<p>公開後の運用改善がより良いWEBサイトにしていくために重要なポイントになります。WEBサイトへのアクセス状況を分析することで改善すべき点が見えますので、日々ホームページをユーザーのニーズに沿ったものに改良していきます。WEBサイト、WEBサーバーのモニターから、障害時の復旧作業などの保守作業、日々の更新作業、コンテンツ作成、SNSの運用、アクセス解析、Digital広告運用までトータルに支援いたします。</p>
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
						<h2 class="m-m-10">LOGIQUEのWEB制作以外のサービス</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<h2 class="custom-3">モバイル(スマホ)アプリケーション開発</h2>
						<p class="min-h">スマホやタブレットで動くモバイルアプリケーションの開発も行っています。Androidアプリ、iOSアプリ、ハイブリッドアプリの開発が可能です。PWAやAMP制作などモバイル関連ソリューションは数多く経験してますので幅広いサポートができます。APIの開発、AWSなどインフラ構築などと合わせてワンストップでご支援し保守性の高いアプリを開発します。</p>
						<div>
							<a href="/jp/services/pembuatan-aplikasi-mobile/" target="_blank" class="btn btn-logic btn-md">もっと見る</a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="border-top-custom-2 hidden-xs hidden-sm">LOGIQUEのWEB制作以外のサービス</div>
						<h2 class="custom-3">HR関連ソリューション</h2>
						<p class="min-h">人事採用関連のソリューションを提供しています。応募者を増やすためブランディングのため採用サイトの制作運用をご支援しています。また、当社独自プロダクトとして採用活動管理システム、日報管理システム、生産性向上のための勤務状況管理＆テレワーク管理システムをご提供しています。</p>
						<div>
							<a href="/jp/services/pembuatan-website-karir-perusahaan/" target="_blank"  class="btn btn-logic btn-md">もっと見る</a>
						</div>
					</div>
					<div class="col-md-4">
						<h2 class="custom-3">WEBセキュリティ脆弱性検査</h2>
						<p class="min-h">WEBサイトのセキュリティホールがないか、脆弱性について確認する検査を実施します。WEBサイトには乗っ取りや改竄など様々なセキュリティリスクがあります。お客様のWEBサイトに応じて必要なセキュリティテストを実施し、問題点とリスクを明らかにします。静的なホームページの場合には10ジュタの簡易テストもご用意しています。</p>
						<div>
							<a href="/jp/services/penetration-testing/" target="_blank"  class="btn btn-logic btn-md">もっと見る</a>
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
						<h4><b>WEBサイトに関連するどんな課題にもお応えします</b></h4>
						<ul>
							<li class="m-b-5">ホームページ制作/運用をアウトソースしたい</li>
							<li class="m-b-5">オンラインでもっと集客して、WEBを重要な営業チャネルとする</li>
							<li class="m-b-5">モバイル最適化されたWEBサイトにリニューアルしたい</li>
							<li class="m-b-5">基幹システムと連携するWEBサイトを開発する必要がある</li>
							<li class="m-b-5">WEBサーバー利用料、保守費用をコストダウンしたい</li>
							<li class="m-b-5">SNSと連携したWEBサイトに作り直したい</li>
							<li class="m-b-5">動画を 制作したい、動画をWEBに掲載したい</li>
							<li class="m-b-5">SEO対策が不十分。検索サイト経由でもっと集客したい。</li>
							<li class="m-b-5">問い合わせフォームを最適化して問い合わせ数を増やしたい</li>
							<li class="m-b-5">デジタルマーケティングを活用しWEBへのトラフィックを増やしたい</li>
							<li class="m-b-5">WEBコンテンツ制作をアウトソースしたい</li>
							<li class="m-b-5">オンラインチャット、チャットBotを導入して自動化したい</li>
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
						<div>021) 22708935 / 36 <br>0811870321</div>
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
										<input type="text" class="form-control" placeholder="Name" name="name" value='<?php echo $formproc->SafeDisplay('name') ?>'>
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
										<textarea name="" id="" cols="30" rows="6" class="form-control" placeholder="Message" name="message"><?php echo $formproc->SafeDisplay('message') ?></textarea>
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