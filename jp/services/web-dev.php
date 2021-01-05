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
    <link rel="canonical" href="https://www.logique.co.id/jp/services/web-dev.php"/>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="assets/css/style_webdev_new.css" rel="stylesheet">
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
            <div class="  lang-logo--update-design">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="container">
                                <ul class="list-inline">
                                    <li><a href="/en/services/web-dev.php">EN</a></li>
                                    <li><a href="/layanan/web-dev.php">ID</a></li>
                                    <li class="active"><a href="#">JP</a></li>
                                </ul>
                                <a href="/jp/index.php"><img loading="lazy" src="/../img/logo.png" alt="Logo"
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
                            <img loading="lazy" src="assets/img/img-webdev/webdev-bg.png" alt="">
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
                                <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a
                                        itemprop="item"><span itemprop="name">&nbsp;Web・ホームページ制作</span></a>
                                    <meta itemprop="position" content="3" />
                                </li>
                            </ol>
                        </div>
                        <div class="col-md-12 m-t-2em main-section">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6 col-sm-5"></div>
                                    <div class="col-md-6 col-sm-7">
                                        <h1 class="title">
                                            <span><span>LOGIQUEのWeb / </span></span>
                                            ホームページ制作サービス
                                        </h1>
                                        <div class="content">
                                            <p>
                                                LOGIQUEが作るWeb / ホームページは、集客ができる、お問い合わせが増える、採用応募者が増える等コンバージョンが増える価値のあるWebです。
                                            </p>

                                            <p>WEBチャネルを活用して営業を効率的に行いたい、他社と差別化したい、カスタマーサービスを効率化したい、採用を強化したい場合にはLOGIQUEにお任せください。<br />
                                            インドネシアで実績もクオリティーもNo1のWeb制作会社です。
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
    <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-6">
                    <p class="about-title">インドネシアでWeb制作するならLOGIQUE一択です</p>
                    <p class="about-content">インドネシアで200件以上のWebサイトを制作運営してきました。政府系団体や金融機関などのセキュアでミスの許されないものから、クリエイティブへの要求が高いWeb、複雑なプログラミングが必要なWebなど様々なものを手がけてきました。スピード感をもって柔軟に進めます。大きすぎず小さすぎない社員数約60名で運営していますので、リーズナブルだけれど安心してお取引いただけるWeb制作会社です。インドネシアでWeb制作・運用が必要であればLOGIQUEにご相談ください。</p>
                </div>
                <div class="col-md-5 col-sm-6">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                         <!-- Wrapper for slides -->
                         <div class="carousel-inner">
                             <div class="item active">
                                 <img loading="lazy" src="assets/img/img-webdev/carousel.png" alt="Dokodemo Kerja"
                                     class="img-responsive center-block">
                             </div>
                         </div>
                         <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        </ol>
                     </div>
                </div>
            </div>
        </div>
    </section>
    <section class="flow">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 col-md-5">
                    <img loading="lazy" src="assets/img/img-webdev/flow.png" alt="">
                </div>
                <div class="col-sm-7 col-md-7">
                    <p class="flow-title">Webへの期待、予算、用意できる体制によって 作るべきWebは変わってきます</p>
                    <p class="flow-content">
                        様々なニーズにお応えするために４つのメニューをご用意しました。
予算の大小に関わらず定められたスコープの中で最良のWebを制作します。
お客様のご要望が当社のどのサービスメニューに該当するのか不明などの場合にはお気軽にご相談ください。どれにも当てはまらない場合にも柔軟に考えお見積り差し上げます。
                    </p>
                    <a href="/jp/services/web-dev-price-range.php" target="_blank">
                        <div class="flow-button">
                        Web制作サービスメニューをみる
                        <img loading="lazy" src="assets/img/img-webdev/arrow.png" alt="">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="discuss">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-7">
                    <p class="discuss-title">LOGIQUEのWeb制作に対する思い</p>
                    <p class="discuss-content">
                    意味のあるものを作りたい！
大事なお金を投じて作るものです。最大のROIを出すWebを制作したいと思っています。
密なコミュニケーションで、多くの提案をしながら作りあげていきたいと思います。（もちろんシンプルプランで早く・簡易に作りたいというお客様に対しては、スピード重視で対応いたします。）
Web（Digitalマーケティング）のプロフェッショナルとして、お客様のDigitalマーケティングコンサルタントとして様々なアドバイスを差し上げながらValueの高いWebを作り上げたいと思っています。制作後も運用のご支援をさせていただき日々PDCAを回しながら改善するプロジェクトを長くご一緒できると幸いです。
                    </p>
                </div>
                <div class="col-md-5 col-sm-5">
                    <img loading="lazy" src="assets/img/img-webdev/discuss.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="announce">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-10 col-sm-offset-1 col-md-offset-0 announce-content">
                                <p class="announce-title">投資する価値のあるWebを作りたい</p>
                                <p class="announce-p">
                                ほとんどのWeb制作プロジェクトは何らかの問題を抱えて、100％満足とはいかずに終わっているのではないでしょうか？本当に良いものを作り、他社と差別化し、顧客とのエンゲージメントを獲得し、利益を生むことができるWebを作るには、相当の体制と予算の確保をいただくなどお客様のご協力が不可欠です。安く早く作って大きな成果をあげられる夢のような話はありません。
                                </p>
                                <p class="announce-p mb-0">
                                十分な体制と予算を確保いただき、Strategic Web Creation Planを選択いただくことをお奨めします。投資に見合うリターンを生み出し、LOGIQUEに委託いただいたことを後悔させません。
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="division">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="division-title">LOGIQUEのWeb制作サービス</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="division-container">
                        <p class="title">Webサイト制作運用をワンストップで</p>
                        <p class="content">多言語Web、インドネシア語のSEO対策を実装したホームページ、コンバージョンがでるランディングページを制作してきました。公開後のメンテナンスやデジタルマーケティングなども含め関連サービスを幅広くご支援しています。</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="division-container">
                        <p class="title">品質・テクノロジー・セキュリティ</p>
                        <p class="content">PWAやAMPなど要件にもお応えしています。プログラマーが複雑な機能の実装も行います。セキュリティの専門家による脆弱性検査を行った上で納品します。軽快に動作するセキュリティ堅牢性の高いWebを制作します。</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="division-container">
                        <p class="title">スピード＆柔軟性</p>
                        <p class="content">スピードを重要視しておりアジャイル制作開発を行っています。素早く制作開発して公開するためにプロジェクトを素早く積極的にリードします。特別なご要望にも柔軟に対応しています。</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-layout web-service-flow">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="analysis-part flow-part">
                        <img loading="lazy" src="assets/img/img-webdev/feature/authentication.svg" alt="アクセス解析・課題抽出">
                        <h3>アクセス解析・課題抽出</h3>
                        <p>Webサイトの現状分析を分析評価します。なぜ、トラフィックが少ないのか、問い合わせが得られないのか？アクセス解析に加え、インドネシアWeb運営の専門家がヒューリスティック分析して、課題を抽出します。</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="plan-part flow-part">
                        <img loading="lazy" src="assets/img/img-webdev/feature/web-development.png" alt="プランニング">
                        <h3>プランニング</h3>
                        <p>Webサイトに求めるゴールを達成するために、Webのあるべき姿を示し、いまやるべきこと、今後、継続して改善していくべきことを提案し、ご支援していきます。お客様社内の体制によってご支援の形は様々となります
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="seo-part flow-part">
                        <img loading="lazy" src="assets/img/img-webdev/feature/searchseo.png" alt="SEO / SEM">
                        <h3>SEO / SEM</h3>
                        <p>Webサイトは、工夫なく公開するだけでは多くのトラフィックを集められません。インドネシアでのSEO対策に精通したエキスパートがオーガニック検索集客力のあるWebを制作します。PPC広告運用も効果的なキーワードを選定しご提案致します。
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="info-part flow-part">
                        <img loading="lazy" src="assets/img/img-webdev/feature/learning.png" alt="情報再構成・改善">
                        <h3>情報再構成・改善</h3>
                        <p>現状Webが実態にあわず再作成が必要だが、いちから作り直すのはもったいない、複雑すぎて修正が難しい、というケースがよくあります。Webサイトの整理・回収・改善も、ご予算とご希望の期間に応じて、最適なご提案を差し上げます。
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="multiligual-part flow-part">
                        <img loading="lazy" src="assets/img/img-webdev/feature/interpreter.png" alt="多言語Webサイト制作運用">
                        <h3>多言語Webサイト制作運用</h3>
                        <p>インドネシア語、英語・日本語のサイト制作運用に対応可能です。コンテンツは非常に重要です。ただ翻訳するだけでなく、当社のコンテンツライターがコンテンツ制作することも可能です。</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="sosmed-part flow-part">
                        <img loading="lazy" src="assets/img/img-webdev/feature/social-media.png" alt="SNS運用">
                        <h3>SNS運用</h3>
                        <p>Facebookページ、インスタグラムなどSNSをインドネシア語、英語、日本語で運用します。SNS上でのエンゲージメントのため、SNSからWebへの送客のためSNS運用も検討が必要です。</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="design-part flow-part">
                        <img loading="lazy" src="assets/img/img-webdev/feature/graphic-design.png" alt="デザイン制作">
                        <h3>デザイン制作</h3>
                        <p>お客様の要件に沿った異なるテイストのデザインを複数のデザイナーが提案することでご希望に叶った、ユーザーフレンドリーでコンバージョンにつながるUI設計をします。</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="markup-part flow-part">
                        <img loading="lazy" src="assets/img/img-webdev/feature/css.png" alt="マークアップ・コーディング">
                        <h3>マークアップ・コーディング</h3>
                        <p>HTML/CSSコーディングだけご依頼いただくことも可能です。Java Script系のフロントエンドコーディング技術は最新のものも常にキャッチアップしています。</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="responsive-part flow-part">
                        <img loading="lazy" src="assets/img/img-webdev/feature/responsive.png" alt="マルチデバイス対応">
                        <h3>マルチデバイス対応</h3>
                        <p>モバイル・スマートフォン、タブレット向け最適化サイト制作をします。レスポンシブWebの制作。AMPやモバイルフレンドリーWebの制作運用も経験豊富です。</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="programing-part flow-part">
                        <img loading="lazy" src="assets/img/img-webdev/feature/web-programming.png" alt="プログラミング">
                        <h3>プログラミング</h3>
                        <p>パララックスなどWebサイトにモーションをつけられます。JavascriptやHTML5、CSS3などにより対応が可能です。ユーザーを惹きつけるWebサイトの開発をご要望にあわせご提案いたします。 </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="system-part flow-part">
                        <img loading="lazy" src="assets/img/img-webdev/feature/control-panel.png" alt="システム構築">
                        <h3>システム構築</h3>
                        <p>CMSシステムやWebシステム、業務システムを開発します。Webサイトと連携して動くシステムだけでなく各種システムを構築運用可能です。PHPフレームワークでの開発が得意です。</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="apps-part flow-part">
                        <img loading="lazy" src="assets/img/img-webdev/feature/application.png" alt="モバイルアプリ対応">
                        <h3>モバイルアプリ対応</h3>
                        <p> PWAでネイティブアプリではなくウェブアプリとしてモバイルアプリを開発します。プッシュ通知やオフラインでの動作も可能です。</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="portofolio">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="title">Webサイト制作実績</p>
                    <p class="content">LOGIQUEのWeb制作実績を幾つかご紹介します。
                    </p>
                    <p class="content">
                        こちらに多くの実績を掲載していますので、ご参照ください。
                    </p>
                </div>
            </div>
            <div class="row portofolio-section text-center">
            <div class="col-md-6 col-lg-4 col-sm-4" data-toggle="modal" data-target="#exampleModalLong">
                        <img loading="lazy" src="assets/img/img-webdev/AIA.png" alt="">
                        <p class="portofolio-title text-center">AIA</p>
                        <p class="portofolio-subtitle">詳しくみる</p>
            </div>
            <div class="col-md-6 col-lg-4 col-sm-4" data-toggle="modal" data-target="#exampleModalLong2">
                    <img loading="lazy" src="assets/img/img-webdev/panin.png" alt="">
                    <p class="portofolio-title text-center">Panin Life Dai - Ichi</p>
                    <p class="portofolio-subtitle">詳しくみる</p>
            </div>
            <div class="col-md-6 col-lg-4 col-sm-4" data-toggle="modal" data-target="#exampleModalLong3">
                    <img loading="lazy" src="assets/img/img-webdev/JBA.png" alt="">
                    <p class="portofolio-title text-center">JBA</p>
                    <p class="portofolio-subtitle">詳しくみる</p>
                </div>
            </div>
        </div>
    </section>

    <section class="strategic">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="title">Strategic Web Creationプランの成果物例</p>
                </div>
            </div>
            <div class="row strategic-list">
                <div class="col-md-4 col-lg-4 col-sm-6">
                    <img loading="lazy" src="assets/img/img-webdev/strategic/1.png" alt="">
                    <p class="strategic-title">カスタマージャーニー</p>
                    <p class="strategic-content">顧客のBehaviourとニーズに合わせたWeb機能とコンテンツを提供することでコンバージョンへと導くWebを制作することが可能になります。</p>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6">
                    <img loading="lazy" src="assets/img/img-webdev/strategic/2.png" alt="">
                    <p class="strategic-title">ペルソナ分析</p>
                    <p class="strategic-content">メインターゲットとなる顧客を具体化、可視化します。ターゲットにアピールするWebを制作することに繋がります。</p>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6">
                    <img loading="lazy" src="assets/img/img-webdev/strategic/3.png" alt="">
                    <p class="strategic-title">SEOキーワードリスト</p>
                    <p class="strategic-content">SEO対策のベースとなるキーワード選定やコンテンツ制作のために対象キーワードを検索数や競合度を分析して決定します。</p>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6">
                    <img loading="lazy" src="assets/img/img-webdev/strategic/4.png" alt="">
                    <p class="strategic-title">ブランドコンセプト策定</p>
                    <p class="strategic-content">顧客のBehaviourとニーズに合わせたWeb機能とコンテンツを提供することでコンバージョンへと導くWebを制作することが可能になります。</p>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6">
                    <img loading="lazy" src="assets/img/img-webdev/strategic/5.png" alt="">
                    <p class="strategic-title">ブランドメッセージ定義</p>
                    <p class="strategic-content">ブランドコンセプトを定義し、ステートメント、ミッションを経て、Webサイトでターゲットユーザーに伝えるブランドメッセージを定義します。</p>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6">
                    <img loading="lazy" src="assets/img/img-webdev/strategic/6.png" alt="">
                    <p class="strategic-title">デザインガイドライン</p>
                    <p class="strategic-content">デザインのトーン＆マナーの一貫性を担保するためにデザインガイドを作成します。カラー、フォント、マージンなどについて定義します。</p>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6">
                    <img loading="lazy" src="assets/img/img-webdev/strategic/7.png" alt="">
                    <p class="strategic-title">現状アクセス分析</p>
                    <p class="strategic-content">顧客のBehaviourとニーズに合わせたWeb機能とコンテンツを提供することでコンバージョンへと導くWebを制作することが可能になります。</p>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6">
                    <img loading="lazy" src="assets/img/img-webdev/strategic/8.png" alt="">
                    <p class="strategic-title">サイトマップ</p>
                    <p class="strategic-content">Webサイトの構造、コンテンツ・ページ構造を定義します。適切なナビゲーション＆内部リンク構造の設計の為に必要です。</p>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6">
                    <img loading="lazy" src="assets/img/img-webdev/strategic/9.png" alt="">
                    <p class="strategic-title">ワイヤーフレーム</p>
                    <p class="strategic-content">各Webページのレイアウトと構成要素を決めるドキュメントです。これがベースになりデザイン制作へと進みます。</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 strategic-exp">
                    <p>上記は一例です。ほかにも、プロジェクト毎に必要なドキュメントを制作し納品します。
                    </p>
                    <p>
                        あくまでより良いWebを公開して運用するための戦略策定＆ドキュメント作成です。
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="service">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="title">LOGIQUEのWeb制作に関連したその他のサービス</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="link-page-price-and-portfolio">
                        <a class="link-yellow-white" href="/jp/services/devops.php">Cloudサーバー運用管理サービス</a>
                        <a class="link-yellow-white" href="/jp/services/penetration-test.php">Webサイト制作実績</a>
                    </div>
                    <div class="link-page-price-and-portfolio">
                        <a class="link-yellow-white" href="/jp/services/system-dev.php">Webセキュリティ脆弱性診断サービス</a>
                        <a class="link-yellow-white" href="/jp/services/mobile-app-dev.php">モバイルアプリ開発サービス</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content-article">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="title">Web制作に関連した記事</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="carousel slide multi-item-carousel" id="theCarousel">
                        <div class="carousel-inner">
                             
                             <?php  
                                    function shorten_string($string, $wordsreturned)
                                {
                                  $retval = $string;
                                  $string = preg_replace('/(?<=\S,)(?=\S)/', ' ', $string);
                                  $string = str_replace("\n", " ", $string);
                                  $array = explode(" ", $string);
                                  if (count($array)<=$wordsreturned)
                                  {
                                    $retval = $string;
                                  }
                                  else
                                  {
                                    array_splice($array, $wordsreturned);
                                    $retval = implode(" ", $array)." ...";
                                  }
                                  return $retval;
                                } 
                                    $url = file_get_contents('https://www.logique.co.id/blog/wp-json/wp/v2/posts/?tags=100&per_page=5&_embed');
                                
                                        $x = 0;

                                       $remote_posts = json_decode( $url ); 
                                       // printf('<pre>'); 
                                       //  var_dump($url);
                                       // printf('</pre>');
                                        foreach( $remote_posts as $remote_post ) { 
                                            $thumb_full_url = '';
                                            $thumb_url = '';

                                            if ( ! empty( $remote_post->featured_media ) && isset( $remote_post->_embedded ) ) {
                                                $thumb_full_url = $remote_post->_embedded->{'wp:featuredmedia'}[0]->source_url;
                                                $thumb_url = $remote_post->_embedded->{'wp:featuredmedia'}[0]->media_details->sizes->medium->source_url;
                                            }
                                            if($x==0) { 
                                            ?>
                                            <div class="item active ">
                                             <?php } else{
                                                echo ' <div class="item ">';
                                             }

                                             ?> 
                                                    <div class="col-xs-12 col-sm-6 col-md-6 article-container">
                                                        <div class="img-container">
                                                            <img loading="lazy" src="<?=$thumb_full_url?>" class="img-responsive">
                                                        </div>
                                                        <div class="content-container">
                                                            <a href="<?=$remote_post->link?>"  target="_blank">
                                                            <p class="title"><?=$remote_post->title->rendered?></p>
                                                            </a>
                                                            <p class="content"><?php 
                                                            $array = preg_replace("/<.+>/sU", "", $remote_post->excerpt->rendered);
                                                            $the_str =  mb_substr($array, 0, 80);  
                                                            echo $the_str.'...';
                                                             ?></p>
                                                            <p class="date"><?php 
                                                            $tanggal = date('d F Y', strtotime($remote_post->date));
                                                             
                                                            echo $tanggal  ;  ?> | By <?php 
                                                              echo $remote_post->_embedded->author[0]->name;
                                                            ?></p>
                                                        </div>
                                                    </div>
                                               
                                            </div>
                                             
                                       <?php  $x++;
                                   }
                                     
                                ?> 
                        
                        <!--  Example item end -->
                        </div>
                        <ol class="carousel-indicators article-indicators">
                            <li data-target="#theCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#theCarousel" data-slide-to="1"></li>
                            <li data-target="#theCarousel" data-slide-to="2"></li>
                            <li data-target="#theCarousel" data-slide-to="3"></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="content-article gallery">
        <div class="container">
        <div class="row">
                <div class="col-md-12">
                    <p class="title">インドネシアのWeb制作に関するホワイトペーパー</p>
                </div>
            </div>
        <div class="row gallery-container">
                <div class="col-xs-12 col-sm-4 col-md-4 article-container">
                    <div class="img-container">
                        <img loading="lazy" src="assets/img/img-webdev/gly1.png" class="img-responsive">
                        <a href="/white-paper-web-dev-1.php" target="_blank">
                            <p class="gallery-title">あなたのビジネスに効果的なウェブサイトを作成する方法</p>
                            <p class="gallery-content">ダウンロード</p>
                        </a>
                    </div>
                </div>  
                <div class="col-xs-12 col-sm-4 col-md-4 article-container">
                    <div class="img-container">
                        <img loading="lazy" src="assets/img/img-webdev/gly2.png" class="img-responsive">
                        <a href="/white-paper-web-dev-2.php" target="_blank">
                            <p class="gallery-title">魅力的なeコマースWebサイトを構築する</p>
                            <p class="gallery-content">ダウンロード</p>
                        </a>
                    </div>
                </div>  
                <div class="col-xs-12 col-sm-4 col-md-4 article-container">
                    <div class="img-container">
                        <img loading="lazy" src="assets/img/img-webdev/gly3.png" class="img-responsive">
                        <a href="/white-paper-web-dev-3.php" target="_blank">
                            <p class="gallery-title">会社のビジネスプロセスにおける侵入テストの役割と重要性</p>
                            <p class="gallery-content">ダウンロード</p>
                        </a>
                    </div>
                </div>  
            </div>
        </div>

    </section>

    <section class="obstacle">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Webサイト（ホームページ）制作の流れ</h2>
                    <p>
                        LOGIQUEのホームページ制作は、スピード感とクオリティを両立させてプロジェクトを進めていきます。企画・提案からデザイン、開発、運用までの全工程を対応可能です。各工程において高いスキルをもった専門家が担当します。ホームページ制作の流れ、必要期間は、各プロジェクトの種類（Webサイトの規模、CMS要否、システム開発の難易度、など）によって変わる場合もございますがおおよそ下記の流れになります。通常トータルで1ヶ月から2ヶ月で完成します。
                    </p>
                </div>
                <div class="col-md-6 text-center">
                    <a href="/jp/" target="_blank"><img loading="lazy" src="assets/img/img-webdev/logo.png" alt="Fitur Perusahaan"></a>
                </div>
            </div>
        </div>
    </section>
    <section class="tahap-pemesanan">
        <div class="container tahap-pemesanan-bg">
            <div class="row">
                <div class="col-md-offset-6 col-md-6">
                    <div class="card" style="height: fit-content;">
                        <section class="card-container" style="padding: 1em 0;">
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
                                    <p class="title-content-p">Webサイト制作や運用について、CMSの構築やWebシステム開発などもLOGIQUEはお客様のご支援をする準備ができていますので、どのようなご要望でもお聞かせいただければと思います。入札への参加リクエストなどもお気軽にご相談ください。提案や入札への参加リクエストなどはお気軽にinfoアットlogique.co.idか問い合わせフォームよりご連絡いただければ幸いです。日本語、英語、インドネシア語のお問い合わせにご対応いたします。
                                    </p>
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
                <div class="col-md-4 col-lg-4">
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
                                <p class="title-content-p">お客様がホームページに求めるゴールなどご要件をお聞かせいただきます。集客強化が必要、イメージ・ブランディング向上、IR活動、採用活動、などさまざまなお客様のビジネス課題と併せてお聞かせいただきます。ジャカルタでのお打ち合わせが難しい場合などでもSKYPEなどを通じてヒアリングさせていただきます。
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
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
                                <p class="title-content-p">要件に応え、課題を解決するWeb活用・制作運用をご提案します。必要に応じて、同業・競合他社のリサーチや現行Webサイトのヒューリスティックな課題分析なども行い企画・立案をおこないます。スピード感を大事にしており、通常1週間以内の迅速なご提案を心がけています。必要に応じて追加オプションのご提案などもしますので
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
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
                                <p class="title-content-p">当社から発行しました発注書にサインバックいただくとプロジェクトスタートとなります。必要に応じて契約書の締結も問題ありません。お客様の契約フォーマットをベースにすることも可能ですし、当社の雛形でも可能です。通常、締結後Down
                                    paymentのお支払いをお願いしています。</p>
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
                <div class="col-md-4 col-lg-4">
                    <div class="card2">
                        <div class="row">
                            <div class="col-xs-2 col-sm-2 col-md-2 text-right">
                                <span class="title-custom">5</span>
                            </div>
                            <div class="col-xs-10 col-sm-10 col-md-10">
                                <p class="title-custom-p"><b>ヒアリング（ご訪問）</b></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-offset-2 col-md-10 m-t-10">
                                <p class="title-content-p">
                                お客様がホームページに求めるゴールなどご要件をお聞かせいただきます。集客強化が必要、イメージ・ブランディング向上、IR活動、採用活動、などさまざまなお客様のビジネス課題と併せてお聞かせいただきます。ジャカルタでのお打ち合わせが難しい場合などでもSKYPEなどを通じてヒアリングさせていただきます。
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="card2">
                        <div class="row">
                            <div class="col-xs-2 col-sm-2 col-md-2 text-right">
                                <span class="title-custom">6</span>
                            </div>
                            <div class="col-xs-10 col-sm-10 col-md-10">
                                <p class="title-custom-p"><b>企画・ご提案、お見積り</b></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-offset-2 col-md-10 m-t-10">
                                <p class="title-content-p">
                                要件に応え、課題を解決するWeb活用・制作運用をご提案します。必要に応じて、同業・競合他社のリサーチや現行Webサイトのヒューリスティックな課題分析なども行い企画・立案をおこないます。スピード感を大事にしており、通常1週間以内の迅速なご提案を心がけています。必要に応じて追加オプションのご提案などもしますので
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="card2">
                        <div class="row">
                            <div class="col-xs-2 col-sm-2 col-md-2 text-right">
                                <span class="title-custom">7</span>
                            </div>
                            <div class="col-xs-10 col-sm-10 col-md-10">
                                <p class="title-custom-p"><b>企画・ご提案、お見積り</b></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-offset-2 col-md-10 m-t-10">
                                <p class="title-content-p">
                                要件に応え、課題を解決するWeb活用・制作運用をご提案します。必要に応じて、同業・競合他社のリサーチや現行Webサイトのヒューリスティックな課題分析なども行い企画・立案をおこないます。スピード感を大事にしており、通常1週間以内の迅速なご提案を心がけています。必要に応じて追加オプションのご提案などもしますので
                                </p>
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
                <div class="col-md-4 col-lg-4">
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
                                <p class="title-content-p">HTMLシンタックスエラー、Mobileフレンドリー性、ページLoadingスピード、SEO対策が効果的になされているか、マルチデバイス確認など様々なテストを行います。さらにCMSやデータベース連携Webなどの場合には、多くのテストシナリオに基づくテストとセキュリティ検査を行います。
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
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
                                <p class="title-content-p">WebファイルをWebサーバーにDeployし各種設定を行い公開します。当社がドメインやサーバーなども管理する場合もあれば、必要なWebファイルを納品しお客様に公開作業を行っていただく場合もあります。公開後のGoogleへのIndex登録やGoogleアナリティクスの設定なども当社で行います。
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
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
                                <p class="title-content-p">公開後の運用改善がより良いWebサイトにしていくために重要です。Webサイトへのアクセス状況を分析し改善します。Webサイト、Webサーバーのモニターから、障害時の復旧作業などの保守作業、日々の更新作業、コンテンツ作成、SNSの運用、アクセス解析、Digital広告運用までトータルに支援いたします。
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="domore">
        <div class="container">
            <div class="row img-container">
                <div class="col-md-12">
                    <img loading="lazy" src="assets/img/img-webdev/domore.png" alt="">
                </div>
                <div class="col-md-8 content-container">
                    <p class="title">Webサイトに関連するどんな課題にもお応えします</p>
                    <p class="list">
                        • 	ホームページ制作/運用をアウトソースしたい
                    </p>
                    <p class="list">
                        • 	オンラインでもっと集客して、Webを重要な営業チャネルとする
                    </p>
                    <p class="list">
                        • 	モバイル最適化されたWebサイトにリニューアルしたい
                    </p>
                    <p class="list">
                        • 	基幹システムと連携するWebサイトを開発する必要がある
                    </p>
                    <p class="list">
                        • 	Webサーバー利用料、保守費用をコストダウンしたい
                    </p>
                    <p class="list">
                        • 	SNSと連携したWebサイトに作り直したい
                    </p>
                    <p class="list">
                        • 	動画を制作したい、動画をWebに掲載したい
                    </p>
                    <p class="list">
                        • 	SEO対策が不十分。検索サイト経由でもっと集客したい。
                    </p>
                    <p class="list">
                        • 	問い合わせフォームを最適化して問い合わせ数を増やしたい
                    </p>
                    <p class="list">
                        • 	デジタルマーケティングを活用しWebへのトラフィックを増やしたい
                    </p>
                    <p class="list">
                        • 	Webコンテンツ制作をアウトソースしたい
                    </p>
                    <p class="list">
                        • 	オンラインチャット、チャットBotを導入して自動化したい
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <a href="/jp/contact.php">
                        <div class="button-container">
                            <p>
                                インドネシアのWeb制作運用についてLOGIQUEにお間い合わせください 
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
                        <img loading="lazy" src="assets/img/img-webdev/facebookads.png" alt="">
                    </a>
                </div>
                <div class="col-md-6 col-sm-6">
                    <a href="https://www.linkedin.com/company/13420656" target="_blank">
                        <img loading="lazy" src="assets/img/img-webdev/linkedinads.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="modal">
        <div class="modal fade modal-section" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body aia-section">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="title-section">
                            <p class="title">AIA - Premier Academy</p>
                            <!-- <p class="subtitle">Lorem!</p> -->
                            <p class="content">Merupakan situs website yang membantu AIA dalam menyediakan informasi yang dibutuhkan oleh agen dan calon agen mengenai AIA Premier Academy.</p>
                            <p class="content">
                                Berdasarkan kebutuhan dan materi yang diberikan user kami merancang website tersebut mulai dari desain, pengembangan kode, dan implementasi pada cloud server. 
                            </p>
                            <p class="content">
                                Pembuatan desain disesuaikan dengan konsep Formula 1 yang dikombinasikan dengan animasi sehingga website terlihat lebih menarik tanpa mengurangi fungsionalitas dan tetap memperhatikan konsep responsif desain yang diperlukan saat ini. 
                            </p>
                            <p class="content">
                                Pada website juga terdapat implementasi Income Calculator berdasarkan formula perhitungan yang komprehensif dengan variasi output yang mencakup grafik. Hasil akhir website ini kemudian di implementasi pada infrastruktur AWS. 
                            </p>
                            <p class="content">
                                Salah satu tantangan dalam proyek ini adalah kebutuhan AIA untuk merilis versi awal hanya dalam 2 minggu, dan LOGIQUE mampu menjawab ekspektasi tersebut dengan baik. 
                            </p>
                            <p class="content">
                                Setelah versi awal dirilis, pengembangan berlanjut dengan peningkatan fungsi termasuk implementasi fungsi kalkulator dengan total waktu pengembangan dari awal sampai akhir sekitar 5 minggu.
                            </p>
                        </div>
                        <div class="content-section">
                            <div class="content-container">
                                <div class="content-title">
                                    <p>URL</p>
                                </div>
                                <div class="content-desc">
                                    <a href="https://aiapremieracademy.co.id/en/home" target="_blank">
                                        <p>https://aiapremieracademy.co.id/en/home</p>
                                    </a>
                                </div>
                            </div>
                            <div class="content-container">
                                <div class="content-title">
                                    <p>Industry/Industry</p>
                                </div>
                                <div class="content-desc">
                                    <p>Asuransi</p>
                                </div>
                            </div>
                            <div class="content-container">
                                <div class="content-title">
                                    <p>Tipe</p>
                                </div>
                                <div class="content-desc">
                                    <p>Website Statis (Responsif) dan Fungsi Kalkulator</p>
                                </div>
                            </div>
                            <div class="content-container">
                                <div class="content-title">
                                    <p>Durasi</p>
                                </div>
                                <div class="content-desc">
                                    <p>5 Minggu</p>
                                </div>
                            </div>
                            <div class="content-container">
                                <div class="content-title">
                                    <p>Ruang Lingkup</p>
                                </div>
                                <div class="content-desc">
                                    <p>Manajemen Proyek (PM), Perencanaan Layout / Desain, HTML Coding dan Animasi, Fungsional, Implementasi Cloud Server</p>
                                </div>
                            </div>
                            <div class="content-container scope-container">
                                <div class="content-title">
                                    <p>Tim</p>
                                </div>
                                <div class="content-desc">
                                    <p>Pengarah Proyek (PM)</p>
                                    <p>
                                    Desainer Kreatif
                                    </p>
                                    <p>
                                    Implementasi HTML dan Animasi
                                    </p>
                                    <p>
                                    Fungsional
                                    </p>
                                    <p>
                                    Testing
                                    </p>
                                    <p>
                                    Infrastruktur
                                    </p>
                                    	
                                </div>
                                <div class="content-desc">
                                    <p>Nico</p>
                                    <p>
                                    Adit/Angel
                                    </p>
                                    <p>
                                    Fahmi, Bagas
                                    </p>
                                    <p>
                                    Andre
                                    </p>
                                    <p>
                                    Angga
                                    </p>
                                    <p>
                                    Wisya
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="img-section">
                            <img loading="lazy" src="assets/img/aia.jpg" alt="">
                            <br/>
                            <img loading="lazy" src="assets/img/aia2.jpg" alt="">
                            <br/>
                            <img loading="lazy" src="assets/img/aia3.jpg" alt="">
                            <br/>
                            <img loading="lazy" src="assets/img/aia4.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade modal-section" id="exampleModalLong2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLong2Title" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body aia-section">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="title-section">
                            <p class="title">Panin Dai-ichi Life – Bekal Hidup</p>
                            <!-- <p class="subtitle">Lorem !</p> -->
                            <p class="content">
                                Merupakan suatu terobosan dari Panin Dai-ichi Life dalam bentuk produk-produk asuransi digital yang dapat dibeli langsung secara online melalui website E-Commerce. 
                            </p>
                            <p class="content">
                                Berangkat dari pengalaman LOGIQUE yang telah banyak menangani proyek E-Commerce baik untuk industri asuransi maupun barang retail, kami membantu merancang konsep e-commerce Panin Dai-ichi Life mulai dari tahap perencanaan, desain, pengembangan kode, dan implementasi pada server yang telah disediakan. 
                            </p>
                            <p class="content">
                                Pembuatan desain disesuaikan dengan konsep branding ‘Bekal Hidup’ yang dikombinasikan dengan animasi sehingga website terlihat lebih menarik, termasuk sangat memperhatikan User Experience untuk memudahkan Customer dalam melakukan pembelian produk asuransi yang ada. 
                            </p>
                            <p class="content">
                                Dalam website e-commerce ini, Customer dapat melakukan pembelian beberapa produk asuransi sejenis untuk menerima keuntungan ganda; sistem secara otomatis melakukan verifikasi apakah Customer tersebut masih dapat melakukan pembelian produk dengan kriteria-kriteria yang telah ditentukan. 
                            </p>
                            <p class="content">
                                Website E-Commerce ini juga terintegrasi dengan sistem pembayaran Midtrans yang mencakup pembelian awal dan recurring serta integrasi dengan sistem inti dari Panin Dai-ichi Life itu sendiri. 
                            </p>
                            <p class="content">
                                Dalam pelaksanaannya, LOGIQUE membantu Panin Dai-ichi memiliki sebuah website E-Commerce yang dapat digunakan dalam waktu 3 bulan (fase 1), yang kemudian berlanjut dengan peningkatan fungsi untuk memenuhi cakupan tipe produk asuransi baru yang akan disediakan secara online di fase 2.
                            </p>
                        </div>
                        <div class="content-section">
                            <div class="content-container">
                                <div class="content-title">
                                    <p>URL</p>
                                </div>
                                <div class="content-desc">
                                    <a href="https://www.bekalhidup.com/" target="_blank">
                                        <p>https://www.bekalhidup.com/</p>
                                    </a>
                                </div>
                            </div>
                            <div class="content-container">
                                <div class="content-title">
                                    <p>Industri</p>
                                </div>
                                <div class="content-desc">
                                    <p>Asuransi</p>
                                </div>
                            </div>
                            <div class="content-container">
                                <div class="content-title">
                                    <p>Tipe</p>
                                </div>
                                <div class="content-desc">
                                    <p>E-Commerce</p>
                                </div>
                            </div>
                            <div class="content-container">
                                <div class="content-title">
                                    <p>Durasi</p>
                                </div>
                                <div class="content-desc">
                                    <p>3 Bulan (Fase 1)</p>
                                </div>
                            </div>
                            <div class="content-container">
                                <div class="content-title">
                                    <p>Ruang Lingkup</p>
                                </div>
                                <div class="content-desc">
                                    <p>Manajemen Proyek (PM), Perencanaan Konsep, Perencanaan Layout / Desain, HTML Coding, Fungsional dan Integrasi Sistem Inti, Integrasi <i>Payment Gateway</i></p>
                                </div>
                            </div>
                            <div class="content-container scope-container">
                                <div class="content-title">
                                    <p>Tim</p>
                                </div>
                                <div class="content-desc">
                                    <p>Pengarah Proyek (PM)</p>
                                    <p>
                                    Perencanaan Konsep
                                    </p>
                                    <p>
                                    Desainer Kreatif
                                    </p>
                                    <p>
                                    Implementasi HTML dan Animasi
                                    </p>
                                    <p>
                                    Fungsional
                                    </p>
                                    <p>
                                    Testing
                                    </p>
                                    <p>
                                    Infrastruktur
                                    </p>  	
                                </div>
                                <div class="content-desc">
                                    <p>Paskal</p>
                                    <p>
                                    Paskal / Irvan
                                    </p>
                                    <p>
                                    Adit
                                    </p>
                                    <p>
                                    Anggo, Nico
                                    </p>
                                    <p>
                                    Daniel, Dimas
                                    </p>
                                    <p>
                                    Winda, Edi
                                    </p>
                                    <p>
                                    Wisya
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="img-section">
                            <img loading="lazy" src="assets/img/panin.jpg" alt="">
                            <br/>
                            <img loading="lazy" src="assets/img/panin2.jpg" alt="">
                            <br/>
                            <img loading="lazy" src="assets/img/panin3.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade modal-section" id="exampleModalLong3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLong3Title" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body aia-section">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="title-section">
                            <p class="title">JBA – Website Perusahaan dan Layanan</p>
                            <p class="content">
                            Merupakan situs website yang menyediakan semua informasi yang dibutuhkan oleh pelanggan terkait lelang mobil dan motor yang dilakukan oleh JBA Indonesia. 
                            </p>
                            <p class="content">
                            Berdasarkan kebutuhan dan materi yang diberikan user kami merancang website tersebut mulai dari desain, pengembangan kode, dan implementasi pada cloud server. 
                            </p>
                            <p class="content">
                            Konsep pembuatan desain diarahkan untuk menguatkan kesan korporasi yang terpercaya dan profesional, dengan implementasi yang mudah digunakan pengguna, dan pengaplikasian teknologi desain responsif yang dapat dilihat dengan baik pada Smartphone, Tablet, dan Desktop. 
                            </p>
                            <p class="content">
                            Untuk dapat menampilkan data-data mobil dan motor yang dilelang, website terintegrasi dengan sistem inti melalui API yang juga dirancang oleh LOGIQUE dengan hasil akhir website yang diimplementasi pada infrastruktur AWS. 
                            </p>
                            <p class="content">
                            Selain pembuatan website perusahaan, LOGIQUE membantu JBA secara menyeluruh untuk pembuatan berbagai sistem dan aplikasi mobile untuk mendukung proses bisnis yang ada.
                            </p>
                        </div>
                        <div class="content-section">
                            <div class="content-container">
                                <div class="content-title">
                                    <p>URL</p>
                                </div>
                                <div class="content-desc">
                                    <a href="https://jba.co.id/" target="_blank">
                                        <p>https://jba.co.id/</p>
                                    </a>
                                </div>
                            </div>
                            <div class="content-container">
                                <div class="content-title">
                                    <p>Industri</p>
                                </div>
                                <div class="content-desc">
                                    <p>Otomotif / Lelang</p>
                                </div>
                            </div>
                            <div class="content-container">
                                <div class="content-title">
                                    <p>Tipe</p>
                                </div>
                                <div class="content-desc">
                                    <p>Website</p>
                                </div>
                            </div>
                        </div>
                        <div class="img-section">
                            <img loading="lazy" src="assets/img/jba1.jpg" alt="">
                            <br />
                            <img loading="lazy" src="assets/img/jba2.jpg" alt="">
                            <br />
                            <img loading="lazy" src="assets/img/jba4.jpg" alt="">
                            <br />
                            <img loading="lazy" src="assets/img/jba6.jpg" alt="">
                        </div>
                    </div>
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
