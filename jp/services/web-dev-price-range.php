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
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=3.0">
    <meta name="description" content="LOGIQUEがインドネシアで作るWeb / ホームページは、集客ができる、お問い合わせが増える、採用応募者が増える、などコンバージョンが増える価値のあるWebです。WEBチャネルを活用して営業を効率的に行いたい、他社と差別化したい、カスタマーサービスを効率化したい、採用を強化したい、
場合はLOGIQUEにお任せください。LOGIQUEのWeb制作サービス詳細。">
    <meta name="keywords" content="効果のある、コンバージョンのでる、意味のある、WEBサイトを予算内で、素早く、効率的に、先進テクノロジーを用い、セキュアに、作ります">
    <meta name="author" content="PT LOGIQUE DIGITAL INDONESIA ">
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
     <meta itemprop="name" content="PT. Logique Digital Indonesia">
     <meta property="og:title" content="Web Development Service | LOGIQUE Digital Indonesia">
     <meta property="og:type" content="website">
     <meta property="og:site_name" content="Logique">
     <meta property="og:url" content="https://www.logique.co.id/jp/services/web-dev.php">
     <meta property="og:image" content="https://www.logique.co.id/img/ogimg/layanan.png">
     <meta property="og:description"
         content="As one of the best website developers in Indonesia, LOGIQUE Digital Indonesia has their own mechanism in providing clients with the best web development service. Here are simple explanations of each step that we take to create a website.">
    <title>Web制作サービス詳細 | ジャカルタのWeb制作会社LOGIQUEデジタルインドネシア</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="assets/css/style_webdev_service_new.css" rel="stylesheet">
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
    <style>
    @media only screen (max-width: 414px) {
        .breadcrumb {
            padding-left: 15px;
        }
    }
    </style>
    <div class="side-container"></div>
    <div>

        <!-- NAVIGATION -->
        <div class="nav-lp">
            <button type="button" class="navbar-toggle collapsed navbar-toggle--update-design" aria-label="navbar-toggle"
                data-toggle="collapse" data-target="#myNavbar">
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
                        <div class="text-center active">
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
                        <div class="col-sm-12">
                            <div class="container">
                                <ul class="list-inline">
                                    <li><a href="/en/services/webdev-price-range.php">EN</a></li>
                                    <li><a href="/layanan/webdev-price-range.php">ID</a></li>
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

        <header class="content-wrapper__">
            <div class="text-left --top">
                <div class="container-fluid">
                    <div class="row bg-section">
                        <div class="col-md-12">
                            <img src="assets/img/img-webdev/webdev-service/mainbg.png" alt="">
                        </div>
                        <div class="col-sm-12 breadcrumb-section">
                            <ol class="breadcrumb breadcrumb--update-design" itemscope
                                itemtype="http://schema.org/BreadcrumbList">
                                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item"
                                        href="/jp/index.php"><span itemprop="name">Home</span></a>
                                    <meta itemprop="position" content="1" />
                                </li>
                                <li class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a
                                        itemprop="item" href="/jp/services.php"><span itemprop="name">&nbsp;サービス</span></a>
                                    <meta itemprop="position" content="2" />
                                </li>
                                <li class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a
                                        itemprop="item"><span itemprop="name">&nbsp;Web・ホームページ制作</span></a>
                                    <meta itemprop="position" content="3" />
                                </li>
                                <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a
                                        itemprop="item"><span itemprop="name">&nbsp;サービスメニュー</span></a>
                                    <meta itemprop="position" content="3" />
                                </li>
                            </ol>
                        </div>
                        <div class="col-md-12 m-t-2em main-section">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6"></div>
                                    <div class="col-md-6">
                                        <h1 class="title">
                                            <span><span>Web / ホームページ制作サービスメニュー</span></span>
                                        </h1>
                                        <div class="content">
                                            <p>
                                            お客様の様々なWeb・ホームページ制作運用ニーズにお応えするために４つの基本サービスメニューをご用意しました。
                                            </p>
                                            <p>
                                            ご相談前に費用感などをお知りになりたいという声が多いので、こちらに掲載の情報を参考にしていただければと思います。
ご予算の大小で作業スコープは変わってきますが、どのプロジェクトにも作業スコープ内で最善を尽くします。
                                            </p>
                                            <p>
                                            お客様のご要望にフィットするサービスメニューはどれかご不明な場合など、お気軽にご相談ください
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <section class="miniplan">
        <div class="container">
            <div class="row">
                <div class="col-md-4 img-container">
                    <img src="assets/img/img-webdev/webdev-service/11.png" alt="">
                </div>
                <div class="col-md-8 content-container">
                    <div class="title-container">
                        <p>クイック制作Plan</p>
                    </div>
                    <p class="content">簡易なWebやランディングページ</p>
                    <div class="detail-requirement">
                        <div class="detail-container detail-period">
                            <img src="assets/img/img-webdev/webdev-service/checklist.svg" alt="">
                            <div class="detail-title">
                                <span>制作期間</span>
                            </div>
                            <div class="detail-content">
                                <span>〜1ヶ月程度</span>
                            </div>
                        </div>
                        <div class="detail-container detail-page">
                            <img src="assets/img/img-webdev/webdev-service/checklist.svg" alt="">
                            <div class="detail-title">
                                <span>ページ数</span>
                            </div>
                            <div class="detail-content">
                                <span>５ページ程度まで</span>
                            </div>
                        </div>
                        <div class="detail-container detail-margin detail-work">
                            <img src="assets/img/img-webdev/webdev-service/checklist.svg" alt="">
                            <div class="detail-title">
                                <span>作業内容</span>
                            </div>
                            <div class="detail-content detail-list">
                                <p>• デザイン、HTMLコーディング、標準的なSEO対策、調整＆テスト、公開作業</p>
                                <p>• 素材は全てご用意いただきます。</p>
                                <p>• Static Webが原則</p>
                            </div>
                        </div>
                    </div>
                    <div class="detail-contact">
                        <div class="price-container">
                            <p class="title">制作費用</p>
                            <p class="price">15 juta 〜 30 juta IDR</p>
                        </div>
                        <div class="button-container">
                            <a href="/jp/contact.php">
                                <p>Contact Us</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="standardplan">
        <div class="container">
            <div class="row">
                <div class="col-md-8 content-container">
                    <div class="title-container">
                        <p>スタンダード制作Plan</p>
                    </div>
                    <p class="content">スタンダードなコーポレートWebやサービスWeb</p>
                    <div class="detail-requirement">
                        <div class="detail-container">
                            <img src="assets/img/img-webdev/webdev-service/checklist.svg" alt="">
                            <div class="detail-title">
                                <span>制作期間</span>
                            </div>
                            <div class="detail-content">
                                <span>1ヶ月〜2.5ヶ月（素材のご準備速度に依存します）</span>
                            </div>
                        </div>
                        <div class="detail-container">
                            <img src="assets/img/img-webdev/webdev-service/checklist.svg" alt="">
                            <div class="detail-title">
                                <span>ページ数</span>
                            </div>
                            <div class="detail-content">
                                <span>20ページ程度まで</span>
                            </div>
                        </div>
                        <div class="detail-container detail-margin">
                            <img src="assets/img/img-webdev/webdev-service/checklist.svg" alt="">
                            <div class="detail-title">
                                <span>作業内容</span>
                            </div>
                            <div class="detail-content detail-list">
                                <p>•	デザイン、HTMLコーディング、CMSフィッティング、標準的なSEO対策、調整＆テスト、公開作業</p>
                                <p>•	Static Web or Wordpress or 当社独自CMS</p>
                                <p>•	原則、素材は提供いただきます。</p>
                                <p>	*お客様都合で4ヶ月を超えることになる場合には追加費用が必要となるケースがあります。</p>
                            </div>
                        </div>
                    </div>
                    <div class="detail-contact">
                        <div class="price-container">
                            <p class="title">制作費用</p>
                            <p class="price">30 juta 〜 60 juta IDR</p>
                        </div>
                        <div class="button-container">
                            <a href="/jp/contact.php">
                                <p>Contact Us</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 img-container">
                    <img src="assets/img/img-webdev/webdev-service/22.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="largeplan">
        <div class="container">
            <div class="row">
                <div class="col-md-4 img-container">
                    <img src="assets/img/img-webdev/webdev-service/33.png" alt="">
                </div>
                <div class="col-md-8 content-container">
                    <div class="title-container">
                        <p>Large Scale Web 制作Plan</p>
                    </div>
                    <p class="content">大規模なコーポレートWebやサービスWebが対象</p>
                    <div class="detail-requirement">
                        <div class="detail-container">
                            <img src="assets/img/img-webdev/webdev-service/checklist.svg" alt="">
                            <div class="detail-title">
                                <span>制作期間</span>
                            </div>
                            <div class="detail-content">
                                <span>2.5ヶ月〜4ヶ月</span>
                            </div>
                        </div>
                        <div class="detail-container">
                            <img src="assets/img/img-webdev/webdev-service/checklist.svg" alt="">
                            <div class="detail-title">
                                <span>ページ数</span>
                            </div>
                            <div class="detail-content">
                                <span>50ページ以上</span>
                            </div>
                        </div>
                        <div class="detail-container detail-margin">
                            <img src="assets/img/img-webdev/webdev-service/checklist.svg" alt="">
                            <div class="detail-title">
                                <span>作業内容</span>
                            </div>
                            <div class="detail-content detail-list">
                                <p>•	デザイン、HTMLコーディング、標準的なSEO対策、CMS構築、QA、インフラ設定、Securityアセスメント（*詳細なPentestは別料金）、公開作業</p>
                                <p>•	オープンソースCMS or 当社独自CMS or PHPフレームワークで構築</p>
                                <p>•	原則、素材は提供いただきます。</p>
                            </div>
                        </div>
                    </div>
                    <div class="detail-contact">
                        <div class="price-container">
                            <p class="title">制作費用</p>
                            <p class="price">80 juta 〜 150 juta IDR</p>
                        </div>
                        <div class="button-container">
                            <a href="/jp/contact.php">
                                <p>Contact Us</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="strategicplan">
        <div class="container">
            <div class="row">
                <div class="col-md-8 content-container">
                    <div class="title-container">
                        <p>Strategic Web Creation Plan</p>
                    </div>
                    <p class="content">Web戦略を策定した上で戦略に沿ったWebを制作します。</p>
                    <div class="detail-requirement">
                        <div class="detail-container">
                            <img src="assets/img/img-webdev/webdev-service/checklist.svg" alt="">
                            <div class="detail-title">
                                <span>制作期間</span>
                            </div>
                            <div class="detail-content">
                                <span>3ヶ月〜5ヶ月</span>
                            </div>
                        </div>
                        <div class="detail-container">
                            <img src="assets/img/img-webdev/webdev-service/checklist.svg" alt="">
                            <div class="detail-title">
                                <span>ページ数</span>
                            </div>
                            <div class="detail-content">
                                <span>-</span>
                            </div>
                        </div>
                        <div class="detail-container detail-margin">
                            <img src="assets/img/img-webdev/webdev-service/checklist.svg" alt="">
                            <div class="detail-title">
                                <span>作業内容</span>
                            </div>
                            <div class="detail-content detail-list">
                                <p>•	アニメーション制作などスコープに限界はありません。ご要望に応じて、また競合他社と差別化するために必要なものを制作します。</p>
                                <p>•	当社コンサルタントが御社のマーケティング	部門や広報部門などとプロジェクト運営しま	す。</p>
                                <p>•	まず企画・要件定義フェーズ（1ヶ月程度）を先に実施させていただき、そこで制作スコープ・期間・金額をご提案します。</p>
                                <p>•	数回のコンサルティングセッションを経て戦略策定します。</p>
                                <p>•	企画・戦略策定フェーズの納品物は、カスタマージャニー、ペルソナ分析、現状Webアクセス分析、ブランドコンセプト定義書、ブランドメッセージ定義、サイトマップ、コンテンツ設計書、ワイヤーフレーム、デザインガイドライン、などとなります。（プロジェクトに合わせて変動します）</p>
                            </div>
                        </div>
                    </div>
                    <div class="detail-contact">
                        <div class="price-container">
                            <p class="title">制作費用</p>
                            <p class="price">200 juta 〜 500 juta</p>
                        </div>
                        <div class="button-container">
                            <a href="/jp/contact.php">
                                <p>Contact Us</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 img-container">
                    <img src="assets/img/img-webdev/webdev-service/44.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="promo">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="promo-container">
                        <img src="assets/img/img-webdev/webdev-service/promo.png" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="promo-list promo-odd">
                        <div class="promo-title">
                            <p>ヒアリング・初回ご提案</p>
                        </div>
                        <div class="promo-content">
                            <p>無料ご提案するためのやりとりや打ち合わせを含みます。通常、ご提案段階でのデザイン制作はしておりません。どうしてもラフデザインの制作が必要な場合、提案デザイン制作費をいただく場合があります。</p>
                        </div>
                    </div>  
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="promo-list">
                        <div class="promo-title">
                            <p>その他制作諸費用の目安</p>
                        </div>
                        <div class="promo-content">
                            <p>当社の価格は、作業の難易度やスケジュールの緊急度などによって幅がありますが、個別の作業依頼は以下のようになります。あくまで目安としてお考えください。</p>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </section>
    <section class="datatable">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive table-data">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Service</th>
                                    <th scope="col">Price </th>
                                    <th scope="col">Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>HTML / CSS コーディング (1サイト）</td>
                                    <td>15,000,000 IDR 〜</td>
                                    <td>@Webサイトの構成によりますが、通常のコーポレートWeb（合計10ページ程度まで）ですと15,000,000 IDRで全ページHTML/CSSマークアップすることが可能です。標準的なコーディングをしますしGAタグの設置やご指定のメタタグ記述もいたします。</td>
                                </tr>
                                <tr>
                                    <td>HTML / CSS コーディング(1ページあたり）</td>
                                    <td>500,000 IDR ~</td>
                                    <td>ページ内コンテンツのボリュームや構成により大きく異なる可能性はありますが、目安としては1ページ500,000 IDRとお考えください。10ページあるWebサイトのデザインとコンテンツが全て準備出来ている場合、5,000,000 IDRで全てコーディングすることが可能です。</td>
                                </tr>
                                <tr>
                                    <td>モーションコーディング</td>
                                    <td>5,000,000 IDR 〜</td>
                                    <td>新規事業でロゴがまだない場合などがあります。複数パターンを作成しながら理想のロゴに近づけるご支援をしんがら完成まで導きます</td>
                                </tr>
                                <tr>
                                    <td>ロゴ・イラスト作成</td>
                                    <td>10,000,000 IDR 〜</td>
                                    <td>JQueryやHTML5などを使用したパララックス効果をつける動きなどのビジュアルプログラミングを行います。</td>
                                </tr>
                                <tr>
                                    <td>オンラインチャット機能</td>
                                    <td>5,000,000 IDR ~</td>
                                    <td>オンラインチャットツールを御社WebサイトにImplementします。</td>
                                </tr>
                                <tr>
                                    <td>お問い合わせページ最適化</td>
                                    <td>15,000,000 IDR 〜</td>
                                    <td>お問い合わせページのコンテンツの最適化、フォーム最適化により、問い合わせ数の最大化、ドロップ率の最小化を実現します。</td>
                                </tr>
                                <tr>
                                    <td>採用ページ最適化</td>
                                    <td>15,000,000 IDR 〜</td>
                                    <td>採用ページのコンテンツを最適化してWeb経由の応募数を増やします。採用サイトを特設サイトとして構築することも可能です。 
                                        <span style="color: #1985D6;">詳細はこちら。</span>    
                                        採用業務を効率的に行うためのクラウドツールの販売もしています。Sugoi Saiyo</td>
                                </tr>
                                <tr>
                                    <td>ショッピング・カート機能作成</td>
                                    <td>20,000,000 IDR 〜</td>
                                    <td>E-Commerceフレームワークを使用してショッピング機能を御社のWebに付与します。要件によって大きな幅が出ますので詳細はご相談ください。</td>
                                </tr>
                                <tr>
                                    <td>ペイメントゲートウェイ連携</td>
                                    <td>15,000,000 IDR 〜</td>
                                    <td>インドネシアで利用可能な各社のペイメントゲートウェイサービスとの連携機能構築の実績があります。サブスクリプション決済なども可能ですのでご相談ください。</td>
                                </tr>
                                <tr>
                                    <td>API作成</td>
                                    <td>15,000,000 IDR 〜</td>
                                    <td>他システムや他Webサイト、モバイルアプリ、サービスとの機能・情報連携のためにAPI作成を行います。送受信されるデータ形式（XML,HTML,JSONなど）に合わせ開発します。</td>
                                </tr>
                                <tr>
                                    <td>コンテンツ作成</td>
                                    <td>ご相談ください</td>
                                    <td>定期的なコンテンツ作成運用もワンショットのコンテンツ作成（Webサイト作成時のコンテンツ作成）も可能です。ボリューム、作成するコンテンツの特殊性、作成コンテンツの言語、などによって料金に幅がありますのでご相談ください。</td>
                                </tr>
                                <tr>
                                    <td>写真撮影</td>
                                    <td>5,000,000 IDR 〜</td>
                                    <td>1撮影場所、カット数5〜10、撮影時間4時間までで5,000,000 IDRとなります。屋外や工場内での撮影などは詳細をご相談ください。</td>
                                </tr>
                                <tr>
                                    <td>ドローン撮影</td>
                                    <td>5,000,000 IDR 〜</td>
                                    <td>1撮影場所、1フライト、撮影時間15分まで、成果物動画データ。飛行許可取得などは含んでいません。</td>
                                </tr>
                                <tr>
                                    <td>動画撮影編集</td>
                                    <td>20,000,000 IDR 〜</td>
                                    <td>グラフィックのみで制作する動画から、撮影を行い制作するムービーまで、様々なニーズにお応えします。</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <a href="/jp/contact.php">
                        <div class="slogan-container">
                            <p>
                                こちらから詳細なお見積りをご相談いただけます
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="gallery">
        <div class="container">
            <div class="row ads-container">
                <div class="col-md-6 col-sm-6">
                    <a href="https://www.facebook.com/logique.id/" target="_blank">
                        <img src="assets/img/img-webdev/facebookads.png" alt="">
                    </a>
                </div>
                <div class="col-md-6 col-sm-6">
                     <a href="https://www.linkedin.com/company/13420656" target="_blank">
                        <img src="assets/img/img-webdev/linkedinads.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="tahap-pemesanan-2 hidden-xs" style="padding: 2em"></section>
    <?php include '../footer.php'; ?>

    <!-- <script src="//code.jquery.com/jquery-3.2.1.min.js"></script> -->
    <script src="/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight-min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script type="text/javascript">
    $(function() {
        $('.smooth').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname ==
                this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    </script>
    <script type="text/javascript">
        // Instantiate the Bootstrap carousel
        $('.multi-item-carousel').carousel({
        interval: false
        });

        // for every slide in carousel, copy the next slide's item in the slide.
        // Do the same for the next, next item.
        $('.multi-item-carousel .item').each(function(){
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));
        
        // if (next.next().length>0) {
        //     next.next().children(':first-child').clone().appendTo($(this));
        // } else {
        //     $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
        // }
        });
    </script>
</html>
