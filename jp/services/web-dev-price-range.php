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

if (isset($_POST['submitted'])) {
    if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
        $secret = '6LcuHywUAAAAAEfJ-sZem8CzGVYIUMcxoT0jRhtW';
        // $secret = '6Lf3pA8UAAAAAEECs5-RC010LQ3ehBt76aKv8Rxb';
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
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
    <meta name="description" content="インドネシアの制作会社LOGIQUEのWebサイト・ホームページ制作サービスの価格例をご紹介します。静的なWebサイトから大規模なWebシステムまで価格に幅はありますが、概算をご紹介します。詳細はお問い合わせください。">
    <meta name="keywords" content="効果のある、コンバージョンのでる、意味のある、WEBサイトを予算内で、素早く、効率的に、先進テクノロジーを用い、セキュアに、作ります">
    <meta name="author" content="PT LOGIQUE DIGITAL INDONESIA ">
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <meta itemprop="name" content="PT. Logique Digital Indonesia">
    <meta property="og:title" content="Web制作費用 | インドネシアのWeb制作会社LOGIQUEのホームページ制作">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Logique">
    <meta property="og:url" content="https://www.logique.co.id/jp/services/web-dev-price-range.php">
    <meta property="og:image" content="https://www.logique.co.id/jp/services/assets/img/img-webdev/webdev-service/22.png">
    <meta property="og:description" content="インドネシアの制作会社LOGIQUEのWebサイト・ホームページ制作サービスの価格例をご紹介します。静的なWebサイトから大規模なWebシステムまで価格に幅はありますが、概算をご紹介します。詳細はお問い合わせください。">
    <link rel="canonical" href="https://www.logique.co.id/jp/services/web-dev-price-range.php" />
    <title>Web制作費用 | インドネシアのWeb制作会社LOGIQUEのホームページ制作</title>

    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- FAST Font load Formula -->
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin />
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&display=swap" media="print" onload="this.media='all'" />


    <link href="/css/sidebar-update.css" rel="stylesheet">
    <link href="/css/style-services.css" rel="stylesheet">
    <link href="/css/epicstyle.css" rel="stylesheet">
    <link href="/layanan/assets/css/styles-web-dev-services/styles_webdev_service.css" rel="stylesheet">


    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-105878648-1', 'auto');
        ga('send', 'pageview');
    </script>

    <?php
    if ($_SERVER['HTTP_HOST'] === 'www.logique.co.id') {
        echo "<!-- Google Tag Manager -->
            <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-KQJRS4V');</script>
            <!-- End Google Tag Manager -->";
    }
    ?>


</head>

<body>

    <?php
    if ($_SERVER['HTTP_HOST'] === 'www.logique.co.id') {
        echo '<!-- Google Tag Manager (noscript) -->
            <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KQJRS4V"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
            <!-- End Google Tag Manager (noscript) -->';
    }
    ?>


    <div class="wrapper wrapper--update-design wrapper--update-design-font">
        <!-- NAVIGATION -->
        <?php
        // $active option are home, about, portfolio, services, product, career, contact
        $active = 'services';
        include($_SERVER['DOCUMENT_ROOT'] . '/jp/sidebar.php');
        ?>

        <?php
        $lang = 'jp';
        $en_link = '/en/services/webdev-price-range.php';
        $id_link = '/layanan/webdev-price-range.php';
        $jp_link = '#';


        include($_SERVER['DOCUMENT_ROOT'] . '/jp/header.php');
        ?>

        <div class="content-cont">
            <section class="header-wrapper">
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb-list" itemscope itemtype="http://schema.org/BreadcrumbList">
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="../index.php"><span itemprop="name">Beranda</span></a>
                            <meta itemprop="position" content="1" />
                        </li>
                        <li class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="../layanan.php"><span itemprop="name">&nbsp;サービス</span></a>
                            <meta itemprop="position" content="2" />
                        </li>
                        <li class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="web-dev.php" itemprop="item"><span itemprop="name">&nbsp;Web・ホームページ制作 </span></a>
                            <meta itemprop="position" content="3" />
                        </li>
                        <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item"><span itemprop="name">&nbsp;サービスメニュー</span></a>
                            <meta itemprop="position" content="3" />
                        </li>
                    </ol>
                </div>


                <header class="header-cont">
                    <div class="left-header">
                    </div>

                    <div class="right-header">
                        <h1 class="title-header">
                            Web / ホームページ制作サービスメニュー
                        </h1>

                        <p>
                            お客様の様々なWeb・ホームページ制作運用ニーズにお応えするために４つの基本サービスメニューをご用意しました。
                        </p>

                        <p>
                            ご相談前に費用感などをお知りになりたいという声が多いので、こちらに掲載の情報を参考にしていただければと思います。 ご予算の大小で作業スコープは変わってきますが、どのプロジェクトにも作業スコープ内で最善を尽くします。
                        </p>

                        <p>
                            お客様のご要望にフィットするサービスメニューはどれかご不明な場合など、お気軽にご相談ください
                        </p>

                    </div>
                </header>
            </section>


            <!-- CSS ATOMIC IMPORT for Load Performance -->
            <link rel="stylesheet" href="/layanan/assets/css/styles-web-dev-services/styles_price_plan_320.css" media="(min-width: 320px)">
            <link rel="stylesheet" href="/layanan/assets/css/styles-web-dev-services/styles_price_plan_425.css" media="(min-width: 425px)">
            <link rel="stylesheet" href="/layanan/assets/css/styles-web-dev-services/styles_price_plan_768.css" media="(min-width: 768px)">
            <link rel="stylesheet" href="/layanan/assets/css/styles-web-dev-services/styles_price_plan_1024.css" media="(min-width: 1024px)">

            <!-- MINIPLAN Section -->
            <section class="plan plan-gap-100">
                <div class="image-plan-cont">
                    <img class="plan-image" loading="lazy" src="/layanan/assets/img/img-webdev/webdev-service/miniplan-image.webp" alt="miniplan price">
                </div>

                <div class="desc-plan-cont">
                    <h2 class="plan-title">クイック制作Plan</h2>
                    <p class="plan-desc">
                        簡易なWebやランディングページ
                    </p>

                    <!-- Kontainer Deskripsi Waktu -->
                    <div class="desc-waktu">
                        <!-- Masa Produksi -->
                        <div class="sub-container-desc">
                            <div class="checklist-img">
                                <img loading="lazy" src="/layanan/assets/img/img-webdev/webdev-service/checklist.svg" alt="checklist price">
                            </div>

                            <div class="desc-masa-produksi">
                                <h3 class="desc-title">制作期間</h3>
                                <p class="desc-value">〜1ヶ月程度</p>
                            </div>

                        </div>

                        <!-- Jumlah Halaman -->
                        <div class="sub-container-desc extra-width">
                            <div class="checklist-img">
                                <img loading="lazy" src="/layanan/assets/img/img-webdev/webdev-service/checklist.svg" alt="checklist price">
                            </div>

                            <div class="desc-jumlah-halaman">
                                <h3 class="desc-title">ページ数</h3>
                                <p class="desc-value">５ページ程度まで</p>
                            </div>

                        </div>

                    </div>


                    <!-- Kontainer Cakupan Pekerjaan -->
                    <div class="cakupan-pekerjaan">
                        <div class="sub-cakupan-pekerjaan">
                            <div class="checklist-img">
                                <img loading="lazy" src="/layanan/assets/img/img-webdev/webdev-service/checklist.svg" alt="checklist price">
                            </div>

                            <div class="desc-cakupan-pekerjaan">
                                <h3 class="desc-title">作業内容</h3>
                                <ul class="cakupan-pekerjaan-list">
                                    <li>
                                        デザイン、HTMLコーディング、標準的なSEO対策、調整＆テスト、公開作業
                                    </li>

                                    <li>
                                        素材は全てご用意いただきます。
                                    </li>

                                    <li>
                                        Static Webが原則
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <!-- Biaya Kontainer -->
                    <div class="desc-biaya">
                        <!-- Biaya -->
                        <div class="sub-container-biaya">
                            <h3 class="biaya-title">制作費用</h3>
                            <p class="biaya-value">15 juta 〜 30 juta IDR</p>
                        </div>

                        <!-- Button Container -->
                        <div class="sub-container-biaya">
                            <a target="_blank" href="/jp/contact.php">
                                <div class="button-biaya">
                                    Contact Us
                                </div>

                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- STANDART Section -->
            <section class="plan plan-reverse plan-gap">
                <div class="image-plan-cont">
                    <img class="plan-image" loading="lazy" src="/layanan/assets/img/img-webdev/webdev-service/standart-image.webp" alt="Standart price">
                </div>

                <div class="desc-plan-cont">
                    <h2 class="plan-title standar-color">スタンダード制作Plan</h2>
                    <p class="plan-desc">スタンダードなコーポレートWebやサービスWeb</p>

                    <!-- Kontainer Deskripsi Waktu -->
                    <div class="desc-waktu">
                        <!-- Masa Produksi -->
                        <div class="sub-container-desc">
                            <div class="checklist-img">
                                <img loading="lazy" src="/layanan/assets/img/img-webdev/webdev-service/checklist.svg" alt="checklist price">
                            </div>

                            <div class="desc-masa-produksi">
                                <h3 class="desc-title">制作期間</h3>
                                <p class="desc-value">1ヶ月〜2.5ヶ月（素材のご準備速度に依存します）</p>
                            </div>

                        </div>

                        <!-- Jumlah Halaman -->
                        <div class="sub-container-desc extra-width">
                            <div class="checklist-img">
                                <img loading="lazy" src="/layanan/assets/img/img-webdev/webdev-service/checklist.svg" alt="checklist price">
                            </div>

                            <div class="desc-jumlah-halaman">
                                <h3 class="desc-title">ページ数</h3>
                                <p class="desc-value">20ページ程度まで</p>
                            </div>

                        </div>

                    </div>


                    <!-- Kontainer Cakupan Pekerjaan -->
                    <div class="cakupan-pekerjaan">
                        <div class="sub-cakupan-pekerjaan">
                            <div class="checklist-img">
                                <img loading="lazy" src="/layanan/assets/img/img-webdev/webdev-service/checklist.svg" alt="checklist price">
                            </div>

                            <div class="desc-cakupan-pekerjaan">
                                <h3 class="desc-title">作業内容</h3>
                                <ul class="cakupan-pekerjaan-list">
                                    <li>
                                        デザイン、HTMLコーディング、CMSフィッティング、標準的なSEO対策、調整＆テスト、公開作業
                                    </li>

                                    <li>
                                        Static Web or Wordpress or 当社独自CMS
                                    </li>

                                    <li>
                                        原則、素材は提供いただきます。
                                    </li>

                                    <li>
                                        お客様都合で4ヶ月を超えることになる場合には追加費用が必要となるケースがあります。*
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>


                    <!-- Biaya Kontainer -->
                    <div class="desc-biaya">
                        <!-- Biaya -->
                        <div class="sub-container-biaya">
                            <h3 class="biaya-title">制作費用</h3>
                            <p class="biaya-value">30 juta - 60 juta IDR</p>
                        </div>

                        <!-- Button Container -->
                        <div class="sub-container-biaya">
                            <a target="_blank" href="/jp/contact.php">
                                <div class="button-biaya">
                                    Contact Us
                                </div>

                            </a>
                        </div>
                    </div>
                </div>
            </section>


            <!-- SKALA BESAR Section -->
            <section class="plan plan-gap">
                <div class="image-plan-cont">
                    <img class="plan-image" loading="lazy" src="/layanan/assets/img/img-webdev/webdev-service/skala-besar.webp" alt="skala besar price">
                </div>

                <div class="desc-plan-cont">
                    <h2 class="plan-title skala-besar-color">Large Scale Web 制作Plan</h2>
                    <p class="plan-desc">大規模なコーポレートWebやサービスWebが対象</p>

                    <!-- Kontainer Deskripsi Waktu -->
                    <div class="desc-waktu">
                        <!-- Masa Produksi -->
                        <div class="sub-container-desc">
                            <div class="checklist-img">
                                <img loading="lazy" src="/layanan/assets/img/img-webdev/webdev-service/checklist.svg" alt="checklist price">
                            </div>

                            <div class="desc-masa-produksi">
                                <h3 class="desc-title">制作期間</h3>
                                <p class="desc-value">2.5ヶ月〜4ヶ月</p>
                            </div>

                        </div>

                        <!-- Jumlah Halaman -->
                        <div class="sub-container-desc extra-width">
                            <div class="checklist-img">
                                <img loading="lazy" src="/layanan/assets/img/img-webdev/webdev-service/checklist.svg" alt="checklist price">
                            </div>

                            <div class="desc-jumlah-halaman">
                                <h3 class="desc-title">ページ数</h3>
                                <p class="desc-value">50ページ以上</p>
                            </div>

                        </div>

                    </div>


                    <!-- Kontainer Cakupan Pekerjaan -->
                    <div class="cakupan-pekerjaan">
                        <div class="sub-cakupan-pekerjaan">
                            <div class="checklist-img">
                                <img loading="lazy" src="/layanan/assets/img/img-webdev/webdev-service/checklist.svg" alt="checklist price">
                            </div>

                            <div class="desc-cakupan-pekerjaan">
                                <h3 class="desc-title">作業内容</h3>
                                <ul class="cakupan-pekerjaan-list">
                                    <li>
                                        デザイン、HTMLコーディング、標準的なSEO対策、CMS構築、QA、インフラ設定、Securityアセスメント（*詳細なPentestは別料金）、公開作業
                                    </li>

                                    <li>
                                        オープンソースCMS or 当社独自CMS or PHPフレームワークで構築
                                    </li>

                                    <li>
                                        原則、素材は提供いただきます。
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <!-- Biaya Kontainer -->
                    <div class="desc-biaya">
                        <!-- Biaya -->
                        <div class="sub-container-biaya">
                            <h3 class="biaya-title">制作費用</h3>
                            <p class="biaya-value">80 juta - 150 juta IDR</p>
                        </div>

                        <!-- Button Container -->
                        <div class="sub-container-biaya">
                            <a target="_blank" href="/jp/contact.php">
                                <div class="button-biaya">
                                    Contact Us
                                </div>

                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Produk Strategis Section -->
            <section class="plan plan-reverse plan-gap">
                <div class="image-plan-cont">
                    <img class="plan-image" loading="lazy" src="/layanan/assets/img/img-webdev/webdev-service/strategicimg.webp" alt="harga plan strategis">
                </div>

                <div class="desc-plan-cont">
                    <h2 class="plan-title skala-strategis-color">Strategic Web Creation Plan</h2>
                    <p class="plan-desc">
                        Web戦略を策定した上で戦略に沿ったWebを制作します。
                    </p>

                    <!-- Kontainer Deskripsi Waktu -->
                    <div class="desc-waktu">
                        <!-- Masa Produksi -->
                        <div class="sub-container-desc">
                            <div class="checklist-img">
                                <img loading="lazy" src="/layanan/assets/img/img-webdev/webdev-service/checklist.svg" alt="checklist price">
                            </div>

                            <div class="desc-masa-produksi">
                                <h3 class="desc-title">制作期間</h3>
                                <p class="desc-value">3ヶ月〜5ヶ月</p>
                            </div>

                        </div>
                    </div>


                    <!-- Kontainer Cakupan Pekerjaan -->
                    <div class="cakupan-pekerjaan">
                        <div class="sub-cakupan-pekerjaan">
                            <div class="checklist-img">
                                <img loading="lazy" src="/layanan/assets/img/img-webdev/webdev-service/checklist.svg" alt="checklist price">
                            </div>

                            <div class="desc-cakupan-pekerjaan">
                                <h3 class="desc-title">作業内容</h3>
                                <ul class="cakupan-pekerjaan-list">
                                    <li>
                                        アニメーション制作などスコープに限界はありません。ご要望に応じて、また競合他社と差別化するために必要なものを制作します。
                                    </li>

                                    <li>
                                        当社コンサルタントが御社のマーケティング 部門や広報部門などとプロジェクト運営しま す。
                                    </li>

                                    <li>
                                        まず企画・要件定義フェーズ（1ヶ月程度）を先に実施させていただき、そこで制作スコープ・期間・金額をご提案します。
                                    </li>

                                    <li>
                                        数回のコンサルティングセッションを経て戦略策定します。
                                    </li>

                                    <li>
                                        企画・戦略策定フェーズの納品物は、カスタマージャニー、ペルソナ分析、現状Webアクセス分析、ブランドコンセプト定義書、ブランドメッセージ定義、サイトマップ、コンテンツ設計書、ワイヤーフレーム、デザインガイドライン、などとなります。（プロジェクトに合わせて変動します）
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <!-- Biaya Kontainer -->
                    <div class="desc-biaya">
                        <!-- Biaya -->
                        <div class="sub-container-biaya">
                            <h3 class="biaya-title">制作費用</h3>
                            <p class="biaya-value">200 juta - 500 juta IDR</p>
                        </div>


                        <!-- Button Container -->
                        <div class="sub-container-biaya">
                            <a target="_blank" href="/jp/contact.php">
                                <div class="button-biaya">
                                    Contact Us
                                </div>

                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- PROSES ALUR KERJA BLOCK -->
            <link rel="stylesheet" href="/layanan/assets/css/styles-web-dev-services/alur-kerja-style.css" media="all">
            <section class="alur-kerja-cont">
                <h3 class="title-alur-kerja">ヒアリングから初回のご提案までの流れ とWeb制作料金単価の目安</h3>
            </section>

            <!-- Table Schedule -->
            <link rel="stylesheet" href="/layanan/assets/css/styles-web-dev-services/table-schedule.css" media="all">
            <section class="plan-schedule">
                <div class="schedule-cont bg-cream">
                    <div class="title-schedule-cont">
                        <p class="schedule-title">
                            ヒアリング・初回ご提案
                        </p>
                    </div>

                    <div class="desc-schedule-cont">
                        <p class="schedule-desc">
                            無料ご提案するためのやりとりや打ち合わせを含みます。通常、ご提案段階でのデザイン制作はしておりません。どうしてもラフデザインの制作が必要な場合、提案デザイン制作費をいただく場合があります。
                        </p>
                    </div>
                </div>

                <div class="schedule-cont bg-grey">
                    <div class="title-schedule-cont">
                        <p class="schedule-title">
                            その他制作諸費用の目安
                        </p>
                    </div>

                    <div class="desc-schedule-cont">
                        <p class="schedule-desc">
                            当社の価格は、作業の難易度やスケジュールの緊急度などによって幅がありますが、個別の作業依頼は以下のようになります。あくまで目安としてお考えください。
                        </p>
                    </div>
                </div>
            </section>



            <!-- Table Price -->
            <link rel="stylesheet" href="/layanan/assets/css/styles-web-dev-services/table-price.css" media="all">
            <section class="table-container">
                <table class="table=price-x">
                    <tr>
                        <th>Service</th>
                        <th>Price </th>
                        <th>Description</th>
                    </tr>
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
                            採用業務を効率的に行うためのクラウドツールの販売もしています。Sugoi Saiyo
                        </td>
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
                </table>
            </section>

            <!-- Detail Contacts -->
            <a class="landing-contact" target="_blank" href="/jp/contact.php">
                <section class="contact-detail-cont">
                    <h3 class="title-contact-detail">こちらから詳細なお見積りをご相談いただけます</h3>
                </section>
            </a>

            <!-- Table Price -->
            <link rel="stylesheet" href="/layanan/assets/css/styles-web-dev-services/sosmed-section.css" media="all">
            <section class="sosmed-section">
                <div class="facebook-section">
                    <img loading="lazy" src="/layanan/assets/img/img-webdev/facebookads.png" alt="facebook banner">
                </div>
                <div class="linkedin-section">
                    <img loading="lazy" src="/layanan/assets/img/img-webdev/linkedinads.png" alt="linkedin banner">
                </div>
            </section>
        </div>

        <?php include '../footer.php'; ?>
    </div>

</body>

</html>