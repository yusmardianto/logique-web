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
     <meta property="og:url" content="https://www.logique.co.id/services/web-dev.php">
     <meta property="og:image" content="https://www.logique.co.id/img/ogimg/layanan.png">
     <meta property="og:description"
         content="As one of the best website developers in Indonesia, LOGIQUE Digital Indonesia has their own mechanism in providing clients with the best web development service. Here are simple explanations of each step that we take to create a website.">
    <title>Web制作サービス詳細 | ジャカルタのWeb制作会社LOGIQUEデジタルインドネシア</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="assets/css/style-webdev-new.css" rel="stylesheet">
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
                            <a href="/">
                                <div class="img-home"></div>
                                Beranda
                            </a>
                        </div>
                        <div class="text-center">
                            <a href="/logique.php">
                                <div class="img-about"></div>
                                Tentang Kami
                            </a>
                        </div>
                        <div class="text-center">
                            <a href="/portfolio.php">
                                <div class="img-portfolio"></div>
                                Portfolio
                            </a>
                        </div>
                        <div class="text-center active">
                            <a href="/services.php">
                                <div class="img-services"></div>
                                Layanan
                            </a>
                        </div>
                        <div class="text-center">
                            <a href="product.php">
                                <div class="img-product"></div>
                                Produk
                            </a>
                        </div>
                        <div class="text-center">
                            <a href="/career/">
                                <div class="img-career"></div>
                                Karir
                            </a>
                        </div>
                        <div class="text-center">
                            <a href="/hubungi-kami.php">
                                <div class="img-contact"></div>
                                Hubungi Kami
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
                                    <li><a href="/en/services/web-dev.php">EN</a></li>
                                    <li class="active"><a href="#">ID</a></li>
                                    <li><a href="/jp/services/web-dev.php">JP</a></li>
                                </ul>
                                <a href="/index.php"><img src="/../img/logo.png" alt="Logo"
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
                            <img src="assets/img/img-webdev/webdev-bg.png" alt="">
                        </div>
                        <div class="col-sm-12 breadcrumb-section">
                            <ol class="breadcrumb breadcrumb--update-design" itemscope
                                itemtype="http://schema.org/BreadcrumbList" style="display: none;">
                                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item"
                                        href="/index.php"><span itemprop="name">Home</span></a>
                                    <meta itemprop="position" content="1" />
                                </li>
                                <li class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a
                                        itemprop="item" href="/services.php"><span itemprop="name">&nbsp;サービス</span></a>
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
                                    <div class="col-md-5 col-sm-5"></div>
                                    <div class="col-md-7 col-sm-7">
                                        <h1 class="title">
                                            <span>Jasa Pembuatan Website LOGIQUE</span>
                                        </h1>
                                        <div class="content">
                                            <p>
                                            LOGIQUE memiliki layanan pembuatan website berstandar tinggi yang dapat membantu Anda menarik banyak pengunjung, menambah kontak bisnis, dan meningkatkan jumlah pelamar bagi perusahaan Anda. 
                                            </p>

                                            <p>
                                                Bila Anda ingin menggunakan Website sebagai kanal utama dalam pemasaran produk atau layanan yang dimiliki, membuat perbedaan dengan kompetitor, atau memperkuat sisi rekrutmen silakan menghubungi LOGIQUE.<br>
                                            </p>
                                            <p>
                                                Dengan pengalaman dan hasil yang telah teruji, LOGIQUE siap membantu Anda.
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
                    <p class="about-title">Anda Perlu Jasa Pembuatan Website Berstandar Internasional? Pilih LOGIQUE!</p>
                    <p class="about-content">
                    LOGIQUE telah mengembangkan lebih dari 200 website untuk klien-klien Internasional dan Lokal. Proyek-proyek yang kami kerjakan bervariasi, di antaranya seperti permintaan website dengan tingkat keamanan dan kualitas yang sangat tinggi yang diperuntukan bagi perusahaan yang berafiliasi dengan lembaga pemerintahan ataupun perusahaan yang bergerak di bidang keuangan. Selain itu ada juga proyek pembuatan website yang membutuhkan tingkat kreativitas desain yang tinggi dan kemampuan pemrograman yang rumit. Dalam melakukan pembuatan website kami memberikan pendekatan fleksibel dengan fokus pada kecepatan penyelesaian proyek namun tidak melupakan kualitas, dan Anda juga tidak perlu khawatir karena harga yang kami berikan masih cukup terjangkau. Jika Anda memerlukan jasa pembuatan website yang dapat dipercaya silakan hubungi LOGIQUE.
                    </p>
                </div>
                <div class="col-md-5 col-sm-6">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                         <!-- Wrapper for slides -->
                         <div class="carousel-inner">
                             <div class="item active">
                                 <img src="assets/img/img-webdev/carousel.png" alt="Dokodemo Kerja"
                                     class="img-responsive center-block">
                             </div>
                             <div class="item">
                                 <img src="assets/img/img-webdev/carousel.png" alt="Dokodemo Kerja"
                                     class="img-responsive center-block">
                             </div>
                             <div class="item">
                                 <img src="assets/img/img-webdev/carousel.png" alt="Dokodemo Kerja"
                                     class="img-responsive center-block">
                             </div>
                         </div>
                         <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
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
                    <img src="assets/img/img-webdev/flow.png" alt="">
                </div>
                <div class="col-sm-7 col-md-7">
                    <p class="flow-title">Tentukan Kebutuhan, Tujuan, dan Budget Anda untuk Mendapatkan Hasil Website Terbaik.</p>
                    <p class="flow-content">
                    Untuk mempermudah Anda, kami telah mempersiapkan beberapa kategori pengembangan website berikut dengan perkiraan waktu dan biayanya. Jangan ragu untuk menghubungi kami bila Anda tidak memahami kategori pengembangan website yang diperlukan. Kami juga siap membantu jika Anda memerlukan penawaran khusus berdasarkan rincian fitur yang sudah dimiliki.    
                    </p>
                    <a href="/layanan/webdev-price-range.php">
                        <div class="flow-button">
                        Lihat Opsi Pembuatan Website
                        <img src="assets/img/img-webdev/arrow.png" alt="">
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
                    <p class="discuss-title">Dari LOGIQUE untuk Anda</p>
                    <div class="discuss-content">
                        <p>
                            LOGIQUE ingin menghasilkan Website yang bermanfaat untuk Anda!
                        </p>
                        <p>
                            Kami tahu Anda telah menginvestasikan uang Anda dalam pembuatan Website, untuk itu kami berusaha untuk memproduksi sebuah Website yang dapat memberikan ROI yang maksimal untuk Anda.
                        </p>
                        <p>
                            Sebelum melakukan pengembangan website, melalui komunikasi yang intensif kami dapat memberikan konsultasi dan saran yang diperlukan untuk dapat menghasilkan website terbaik bagi Anda. Namun jika Anda memang hanya ingin fokus pada pengembangan website dan hasil yang cepat kami juga dapat membantu.
                        </p>
                        <p>
                            Sebagai ahli dibidang pemasaran digital, kami juga ingin memberikan bantuan dalam memasarkan dan membuat website Anda bernilai tinggi. Kami berharap dapat bekerja sama dengan Anda, tidak hanya dalam proses pembuatan website namun termasuk pengoperasian dan pemasaran digital jangka panjang yang berkelanjutan.    
                        </p>
                    </div>
                </div>
                <div class="col-md-5 col-sm-5">
                    <img src="assets/img/img-webdev/discuss.png" alt="">
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
                                <p class="announce-title">Partner Profesional dan Tepat Dalam Pengembangan Web</p>
                                <p class="announce-p">
                                Khususnya di Indonesia sudah banyak kekecewaan yang timbul dari hasil pengembangan website yang kualitasnya tidak sesuai dengan ekspektasi dan meleset dari tanggal penyelesaian yang sudah ditentukan akibat menggunakan jasa pembuatan website yang kurang baik.  Masih ada pelaku bisnis yang berpikir bahwa digital tidak terlalu penting dan hanya mencari layanan berdasarkan harga yang paling murah, alhasil alih-alih mengefisiensikan biaya yang terjadi adalah lebih banyak waktu dan biaya tambahan yang terbuang dalam pengembangan website tersebut.
                                </p>
                                <p class="announce-p mb-0">
                                LOGIQUE hadir untuk memberikan kenyamanan bagi para pelaku bisnis dengan memberikan layanan profesional terbaik dalam pembuatan website dengan harga yang sebanding dengan kualitas yang kami berikan. Dengan investasi yang tepat Anda dapat memperoleh hasil yang maksimal untuk bisnis Anda.
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
                        <img src="assets/img/img-webdev/feature/authentication.svg" alt="アクセス解析・課題抽出">
                        <h3>アクセス解析・課題抽出</h3>
                        <p>Webサイトの現状分析を分析評価します。なぜ、トラフィックが少ないのか、問い合わせが得られないのか？アクセス解析に加え、インドネシアWeb運営の専門家がヒューリスティック分析して、課題を抽出します。</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="plan-part flow-part">
                        <img src="assets/img/img-webdev/feature/web-development.png" alt="プランニング">
                        <h3>プランニング</h3>
                        <p>Webサイトに求めるゴールを達成するために、Webのあるべき姿を示し、いまやるべきこと、今後、継続して改善していくべきことを提案し、ご支援していきます。お客様社内の体制によってご支援の形は様々となります
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="seo-part flow-part">
                        <img src="assets/img/img-webdev/feature/searchseo.png" alt="SEO / SEM">
                        <h3>SEO / SEM</h3>
                        <p>Webサイトは、工夫なく公開するだけでは多くのトラフィックを集められません。インドネシアでのSEO対策に精通したエキスパートがオーガニック検索集客力のあるWebを制作します。PPC広告運用も効果的なキーワードを選定しご提案致します。
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="info-part flow-part">
                        <img src="assets/img/img-webdev/feature/learning.png" alt="情報再構成・改善">
                        <h3>情報再構成・改善</h3>
                        <p>現状Webが実態にあわず再作成が必要だが、いちから作り直すのはもったいない、複雑すぎて修正が難しい、というケースがよくあります。Webサイトの整理・回収・改善も、ご予算とご希望の期間に応じて、最適なご提案を差し上げます。
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="multiligual-part flow-part">
                        <img src="assets/img/img-webdev/feature/interpreter.png" alt="多言語Webサイト制作運用">
                        <h3>多言語Webサイト制作運用</h3>
                        <p>インドネシア語、英語・日本語のサイト制作運用に対応可能です。コンテンツは非常に重要です。ただ翻訳するだけでなく、当社のコンテンツライターがコンテンツ制作することも可能です。</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="sosmed-part flow-part">
                        <img src="assets/img/img-webdev/feature/social-media.png" alt="SNS運用">
                        <h3>SNS運用</h3>
                        <p>Facebookページ、インスタグラムなどSNSをインドネシア語、英語、日本語で運用します。SNS上でのエンゲージメントのため、SNSからWebへの送客のためSNS運用も検討が必要です。</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="design-part flow-part">
                        <img src="assets/img/img-webdev/feature/graphic-design.png" alt="デザイン制作">
                        <h3>デザイン制作</h3>
                        <p>お客様の要件に沿った異なるテイストのデザインを複数のデザイナーが提案することでご希望に叶った、ユーザーフレンドリーでコンバージョンにつながるUI設計をします。</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="markup-part flow-part">
                        <img src="assets/img/img-webdev/feature/css.png" alt="マークアップ・コーディング">
                        <h3>マークアップ・コーディング</h3>
                        <p>HTML/CSSコーディングだけご依頼いただくことも可能です。Java Script系のフロントエンドコーディング技術は最新のものも常にキャッチアップしています。</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="responsive-part flow-part">
                        <img src="assets/img/img-webdev/feature/responsive.png" alt="マルチデバイス対応">
                        <h3>マルチデバイス対応</h3>
                        <p>モバイル・スマートフォン、タブレット向け最適化サイト制作をします。レスポンシブWebの制作。AMPやモバイルフレンドリーWebの制作運用も経験豊富です。</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="programing-part flow-part">
                        <img src="assets/img/img-webdev/feature/web-programming.png" alt="プログラミング">
                        <h3>プログラミング</h3>
                        <p>パララックスなどWebサイトにモーションをつけられます。JavascriptやHTML5、CSS3などにより対応が可能です。ユーザーを惹きつけるWebサイトの開発をご要望にあわせご提案いたします。 </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="system-part flow-part">
                        <img src="assets/img/img-webdev/feature/control-panel.png" alt="システム構築">
                        <h3>システム構築</h3>
                        <p>CMSシステムやWebシステム、業務システムを開発します。Webサイトと連携して動くシステムだけでなく各種システムを構築運用可能です。PHPフレームワークでの開発が得意です。</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="apps-part flow-part">
                        <img src="assets/img/img-webdev/feature/application.png" alt="モバイルアプリ対応">
                        <h3>モバイルアプリ対応</h3>
                        <p> PWAでネイティブアプリではなくウェブアプリとしてモバイルアプリを開発します。プッシュ通知やオフラインでの動作も可能です。</p>
                    </div>
                </div>
            </div>
            <!-- <div class="link-page-price-and-portfolio">
                <a class="link-yellow-white" href="/services/webdev-price-range.php">Webサイト制作運用の費用について</a>
                <a class="link-yellow-white" href="/portfolio.php">Webサイト制作実績</a>
            </div> -->
        </div>
    </section>

    <section class="portofolio">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="title">Portofolio Pembuatan Website</p>
                    <p class="content">Berikut adalah beberapa contoh hasil produksi web LOGIQUE.
                    </p>
                </div>
            </div>
            <div class="row portofolio-section">
                <div class="col-md-6 col-lg-4 col-sm-4">
                    <img src="assets/img/img-webdev/AIA.png" alt="">
                    <p class="portofolio-title">AIA</p>
                    <p class="portofolio-subtitle">Lihat Detil</p>
                </div>
                <div class="col-md-6 col-lg-4 col-sm-4">
                    <img src="assets/img/img-webdev/panin.png" alt="">
                    <p class="portofolio-title">Panin Life Dai - Ichi</p>
                    <p class="portofolio-subtitle">Lihat Detil</p>
                </div>
                <div class="col-md-6 col-lg-4 col-sm-4">
                    <img src="assets/img/img-webdev/JBA.png" alt="">
                    <p class="portofolio-title">JBA</p>
                    <p class="portofolio-subtitle">Lihat Detil</p>
                </div>
            </div>
        </div>
    </section>

    <section class="strategic">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="title">Strategi Pengembangan Website di Logique</p>
                    <p class="subtitle">Sebagai perusahaan profesional dalam bidang pembuatan web, Logique memiliki standar pelaksanaan dan strategi yang dapat memastikan website yang kami hasilkan berkualitas tinggi dan bermanfaat untuk tujuan bisnis Anda. Berikut adalah beberapa contoh gambaran strategi yang diterapkan oleh LOGIQUE.</p>
                </div>
            </div>
            <div class="row strategic-list">
                <div class="col-md-4 col-lg-4 col-sm-6">
                    <img src="assets/img/img-webdev/strategic/1.png" alt="">
                    <p class="strategic-title">User Experience (UX)</p>
                    <p class="strategic-content">Menyediakan fungsi dan konten Web yang sesuai dengan perilaku dan kebutuhan pelanggan akan menghasilkan Website yang mengarah pada konversi.</p>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6">
                    <img src="assets/img/img-webdev/strategic/2.png" alt="">
                    <p class="strategic-title">Analisa Persona</p>
                    <p class="strategic-content">Buat target pelanggan utama konkret dan terlihat. Ini akan mengarah pada pembuatan situs web yang menarik bagi target.</p>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6">
                    <img src="assets/img/img-webdev/strategic/3.png" alt="">
                    <p class="strategic-title">SEO Keywords</p>
                    <p class="strategic-content">Kata kunci target dipilih dengan menganalisis jumlah pencarian dan tingkat persaingan guna mendapatkan daftar kata kunci terbaik yang akan digunakan dalam SEO dan pembuatan konten.</p>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6">
                    <img src="assets/img/img-webdev/strategic/4.png" alt="">
                    <p class="strategic-title">Konsep Branding</p>
                    <p class="strategic-content">Membuat rancangan brand Anda secara terukur dan sesuai dengan lini bisnis Anda, termasuk pembuatan logo.</p>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6">
                    <img src="assets/img/img-webdev/strategic/5.png" alt="">
                    <p class="strategic-title">Detil Konsep</p>
                    <p class="strategic-content">Tentukan konsep dan gambarkan lebih lanjut pesan dan branding Anda lewat misi, visi, dan konten yang terarah pada website untuk menjangkau target Anda.</p>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6">
                    <img src="assets/img/img-webdev/strategic/6.png" alt="">
                    <p class="strategic-title">Pedoman Design</p>
                    <p class="strategic-content">Buat panduan desain untuk memastikan konsistensi pada elemen-elemen desain termasuk warna, font, margin, dll.</p>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6">
                    <img src="assets/img/img-webdev/strategic/7.png" alt="">
                    <p class="strategic-title">Analisa Pengunjung</p>
                    <p class="strategic-content">Menganalisis status akses Website saat ini dan mengklarifikasi masalah. Analisis terperinci adalah kunci untuk menetapkan KPI yang konkret dan realistis.</p>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6">
                    <img src="assets/img/img-webdev/strategic/8.png" alt="">
                    <p class="strategic-title">Sitemap</p>
                    <p class="strategic-content">Tentukan struktur situs web, struktur halaman konten. Diperlukan untuk navigasi yang tepat & desain struktur tautan internal.</p>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6">
                    <img src="assets/img/img-webdev/strategic/9.png" alt="">
                    <p class="strategic-title">Wireframe</p>
                    <p class="strategic-content">Dokumen yang menentukan tata letak dan komponen setiap halaman web. Berdasarkan ini, kami terus merancang produksi.</p>
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
                    <p class="title">Layanan Lain LOGIQUE Terkait Pembuatan Website</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="link-page-price-and-portfolio">
                        <a class="link-yellow-white" href="/layanan/devops.php">Pengoperasian Server Cloud</a>
                        <a class="link-yellow-white" href="/layanan/penetration-test.php">Diagnosa Keamanan Website</a>
                    </div>
                    <div class="link-page-price-and-portfolio">
                        <a class="link-yellow-white" href="/layanan/web-dev.php">Pengembangan Aplikasi Berbasis Web</a>
                        <a class="link-yellow-white" href="/layanan/pembuatan-aplikasi-mobile">Pengembangan Aplikasi Mobile</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content-article">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="title">Artikel Terkait Pembuatan Website</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="carousel slide multi-item-carousel" id="theCarousel">
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-xs-12 col-sm-6 col-md-6 article-container">
                                    <div class="img-container">
                                        <img src="assets/img/img-webdev/article/1.png" class="img-responsive">
                                    </div>
                                    <div class="content-container">
                                        <p class="title">Going Wireless With Your Headphones</p>
                                        <p class="content">The widespread use of the internet has now provided many vectors of infiltration for hackers. Indeed, cybercrime is a growing industry and is not only a threat which can cost companies millions of dol</p>
                                        <p class="date">30 Apr 2020 | By Yossi</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-xs-12 col-sm-6 col-md-6 article-container">
                                    <div class="img-container">
                                        <img src="assets/img/img-webdev/article/2.png" class="img-responsive">
                                    </div>
                                    <div class="content-container">
                                        <p class="title">Going Wireless With Your Headphones</p>
                                        <p class="content">The widespread use of the internet has now provided many vectors of infiltration for hackers. Indeed, cybercrime is a growing industry and is not only a threat which can cost companies millions of dol</p>
                                        <p class="date">30 Apr 2020 | By Yossi</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-xs-12 col-sm-6 col-md-6 article-container">
                                    <div class="img-container">
                                        <img src="assets/img/img-webdev/article/1.png" class="img-responsive">
                                    </div>
                                    <div class="content-container">
                                        <p class="title">Going Wireless With Your Headphones</p>
                                        <p class="content">The widespread use of the internet has now provided many vectors of infiltration for hackers. Indeed, cybercrime is a growing industry and is not only a threat which can cost companies millions of dol</p>
                                        <p class="date">30 Apr 2020 | By Yossi</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-xs-12 col-sm-6 col-md-6 article-container">
                                    <div class="img-container">
                                        <img src="assets/img/img-webdev/article/2.png" class="img-responsive">
                                    </div>
                                    <div class="content-container">
                                        <p class="title">Going Wireless With Your Headphones</p>
                                        <p class="content">The widespread use of the internet has now provided many vectors of infiltration for hackers. Indeed, cybercrime is a growing industry and is not only a threat which can cost companies millions of dol</p>
                                        <p class="date">30 Apr 2020 | By Yossi</p>
                                    </div>
                                </div>
                            </div>
                        
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
                    <a href="/" target="_blank"><img src="assets/img/img-webdev/logo.png" alt="Fitur Perusahaan"></a>
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
                    <img src="assets/img/img-webdev/domore.png" alt="">
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
                    <a href="/hubungi-kami.php">
                        <div class="button-container">
                            <p>
                            Hubungi Kami
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="gallery">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="title">インドネシアのWeb制作に関するホワイトペーパー</p>
                </div>
            </div>
            <div class="row gallery-container">
                <div class="col-md-4 col-lg-4 col-sm-4">
                    <img src="assets/img/img-webdev/gallery1.png" alt="">
                    <p class="gallery-title">ホワイトペーパー１</p>
                    <p class="gallery-content">ダウンロード</p>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-4">
                    <img src="assets/img/img-webdev/gallery2.png" alt="">
                    <p class="gallery-title">ホワイトペーパー２</p>
                    <p class="gallery-content">ダウンロード</p>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-4">
                    <img src="assets/img/img-webdev/gallery3.png" alt="">
                    <p class="gallery-title">ホワイトペーパー３</p>
                    <p class="gallery-content">ダウンロード</p>
                </div>
            </div>
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
