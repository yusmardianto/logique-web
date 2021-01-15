 <?php
require_once("form/fgcontact_nippo.php");

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
     <meta name="description"
         content="NIPPOは日報管理ツールです。日々の日報を通じて、スタッフの作業内容・量・質を把握し、スタッフ間でのコミュニケーションを促進することができます。管理者者は部下の評価を行います。プロジェクト毎、タスク毎の原価工数集計も可能です。月額1ジュタからのクラウドツールですがカスタマイズ導入も可能です。デモ環境の試用も可能ですのでお問い合わせください。">
     <meta name="keywords"
         content="laporan kerja, laporan kerja harian, kerja partime, kerja remote, karyawan swasta, karyawan kontrak, laporan kinerja, laporan kinerja karyawan, sistem web, sistem informasi, Nippo">
     <meta name="author" content="PT LOGIQUE DIGITAL INDONESIA">
         <meta property="og:title" content=" リモートワーク・テレワーク管理｜生産性向上のための勤務管理ツール｜Dokodemo-Kerja｜LOGIQUEデジタルインドネシア">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Logique">
    <meta property="og:url" content="https://www.logique.co.id/jp/product/nippo.php">
    <meta property="og:image" content="https://www.logique.co.id/img/ogimg/product.png">
    <meta property="og:description"
        content="NIPPOは日報管理ツールです。日々の日報を通じて、スタッフの作業内容・量・質を把握し、スタッフ間でのコミュニケーションを促進することができます。管理者者は部下の評価を行います。プロジェクト毎、タスク毎の原価工数集計も可能です。月額1ジュタからのクラウドツールですがカスタマイズ導入も可能です。デモ環境の試用も可能ですのでお問い合わせください。">
     <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
     <link rel="canonical" href="https://www.logique.co.id/jp/product/nippo.php"/>
     <title>日報を通じて人事評価＆原価工数管理を行うール | NIPPO | LOGIQUEデジタルインドネシア</title>

     <link rel="preload" href="/css/sidebar-update.css" as="style"/>
     <link rel="preload" href="/css/style-revamp.css" as="style"/>
     <link rel="preload" href="/fonts/M_PLUS_1p/MPLUS1p-Bold.ttf" as="font" crossorigin/>
     <!-- <link rel="preconnect" href="https://fonts.gstatic.com"> -->

     <link rel="stylesheet" href="/css/bootstrap.min.css">
     <link href="/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
     <!-- <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;500;800&display=swap" rel="stylesheet"> -->
     <link rel="stylesheet" href="/css/style.css">
     <link rel="stylesheet" href="css/style_nippo.css">

     <style type="text/css">
     @font-face {
         font-family: HelveticaThin;
         src: url(font/HelveticaThin.ttf);
     }

     @font-face {
         font-family: HelveticaBold;
         src: url(font/helveticabold.ttf);
     }

     @font-face {
         font-family: HelveticaNeue;
         src: url(font/helvetica.ttf);
     }

     @font-face {
         font-family: Allerta;
         src: url(font/allerta_medium.ttf);
     }

     @font-face {
         font-family: Avenir;
         src: url(font/avenirbook.ttf);
     }
     </style>
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
 </head>

 <body class="wrapper" style="overflow: hidden;">
     <style>
     .logique-nav {
         left: 0;
     }

     .container__ {
         padding-top: 0;
         padding-bottom: 0;
     }

     @media only screen and (max-width: 500px) {
         .container__ {
             padding: 2.5em 0;
         }

         .row-fix-2 {
             padding: 0 2em;
         }
     }
     </style>
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
                     <div class="text-center">
                         <a href="/jp/services.php">
                             <div class="img-services"></div>
                             サービス
                         </a>
                     </div>
                     <div class="text-center active">
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

     <!-- HEADER -->
     <div class="container-fluid">
         <div class="row lang-logo--update-design">
             <div class="container">
                 <div class="row">
                     <div class="col-sm-offset-1 col-sm-11">
                         <div class="container">
                             <a href="/jp/index.php"><img src="/../img/logo.png" alt="Logo"
                                     class="img-responsive logo--update-design" /></a>
                             <ul class="list-inline">
                                 <li><a href="/en/product/nippo.php" target="_blank">EN</a></li>
                                 <li><a href="/produk/nippo.php" target="_blank">ID</a></li>
                                 <li class="active"><a href="#">JP</a></li>
                             </ul>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- END HEADER -->

     <div class="content-wrapper__">
         <div class="div-one">
             <section class="--top">
                 <div class="container__" style="padding:0; padding-top: 1em;">
                     <div class="row">
                         <div class="col-sm-12">
                             <ol class="breadcrumb breadcrumb--update-design" itemscope
                                 itemtype="http://schema.org/BreadcrumbList">
                                 <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item"
                                         href="/jp/index.php"><span itemprop="name">Home</span></a>
                                     <meta itemprop="position" content="1" />
                                 </li>
                                 <li class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a
                                         itemprop="item" href="/jp/product.php"><span
                                             itemprop="name">&nbsp;製品</span></a>
                                     <meta itemprop="position" content="2" />
                                 </li>
                                 <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a
                                         itemprop="item"><span itemprop="name">&nbsp;Nippo</span></a>
                                     <meta itemprop="position" content="3" />
                                 </li>
                             </ol>
                         </div>
                     </div>
                 </div>
             </section>

             <div class="container__">
                 <div class="row" style="margin-right:0;margin-left:0;">
                     <div class="col-md-12 text-center p-top-25" style=" padding-top: 15%; ">
                         <img src="img/nippo/LogoNippo.png" alt="nippo" class="fade-in logo m-logo">
                         <h1 class="SISTEM-LAPORAN-KERJA fade-in">日報から原価工数管理や従業員評価を行うことが可能な日報ツール</h1>
                     </div>
                 </div>
             </div>
         </div>

         <div class="Mask">
             <div class="container__">
                 <div class="Rectangle-2">
                     <span class="APA-ITU">Nippoとは</span>
                 </div>
                 <div class="col-md-11 hidden-xs hidden-sm lg-1">
                     <span class="NIPPO-SYSTEM">Nippoはどんな日報システム</span>
                     <span class="layer">?</span>
                 </div>
                 <section class="hidden-xs hidden-sm">
                     <!-- For Desktop -->
                     <div class="col-md-push-3 col-md-8 col-md-pull-1">
                         <p class="Nippo-adalah-aplikas">
                             Nippoは当社にて当社の従業員の作業内容、プロジェクト毎、タスク毎の原価管理、そして従業員の評価を行うためにシステム化したものを一般向けに改訂したシステムです。
                             <br><br>日々の日報を通じて、スタッフの作業内容・量・質を把握し、スタッフ間でのコミュニケーションを促進することができます。管理者は部下の評価を行います。プロジェクト毎、タスク毎の原価工数集計も可能です。
                         </p>
                     </div>
                 </section>
                 <section class="hidden-md hidden-lg">
                     <!-- For Mobile -->
                     <div class="col-md-12">
                         <br>
                         <span class="NIPPO-SYSTEM">NIPPO SYSTEM</span>
                         <p class="Nippo-adalah-aplikas">
                             Nippoは当社にて当社の従業員の作業内容、プロジェクト毎、タスク毎の原価管理、そして従業員の評価を行うためにシステム化したものを一般向けに改訂したシステムです。
                             <br><br>日々の日報を通じて、スタッフの作業内容・量・質を把握し、スタッフ間でのコミュニケーションを促進することができます。管理者は部下の評価を行います。プロジェクト毎、タスク毎の原価工数集計も可能です。
                         </p>
                     </div>
                 </section>
             </div>
         </div>

         <div class="Rectangle-3">
             <div class="">
                 <div class="col-md-12 text-center" style="padding: 45px 0">
                     <span class="Kenapa-Harus-Menggun">Nippo導入のメリット</span><br>
                     <img src="img/nippo/LogoNippo-kecil.png" alt="Nippo Logo" style="padding: 10px">
                 </div>
                 <div class="col-lg-3 col-md-6 text-center manfaat__item">
                     <img src="img/nippo/kenapa-1.png" alt="Nippo導入のメリット">
                     <div class="Dapat-diakses-melalu">モバイルからも入力可能なので出先からの日報入力が可能です。</div>
                 </div>
                 <div class="col-lg-3 col-md-6 text-center manfaat__item">
                     <img src="img/nippo/kenapa-2.png" alt="Nippo導入のメリット">
                     <div class="Dapat-diakses-melalu">とても簡単で直感的なUIです。<br><br><br><br></div>
                 </div>
                 <div class="col-lg-3 col-md-6 text-center manfaat__item">
                     <img src="img/nippo/kenapa-3.png" alt="Nippo導入のメリット">
                     <div class="Dapat-diakses-melalu">プロジェクト毎、タスク毎、人別に、原価工数管理・集計が可能です。</div>
                 </div>
                 <div class="col-lg-3 col-md-6 text-center manfaat__item">
                     <img src="img/nippo/kenapa-4.png" alt="Nippo導入のメリット">
                     <div class="Dapat-diakses-melalu">スタッフの自己評価、スーパーバイザーの評価を日々管理でき、集計も可能です。</div>
                 </div>
                 <div class="clearfix"></div>
             </div>
         </div>

         <div class="OPSA3E0">
             <div class="container__">
                 <div class="Rectangle-2-Copy">
                     <span class="Masalah-yang-sering">こんな課題にお悩みではないでしょうか</span>
                 </div>
                 <section class="hidden-xs hidden-sm OPSA3E0__section--desktop">
                     <!-- For Desktop -->
                     <div class="col-md-12" style="padding-top: 7em; ">
                         <div class="col-md-6 text-right">
                             <div class="col-md-10"><span
                                     class="Evaluasi-kinerja-sel">適切でフェアな人事評価ができていない。客観性のある数値で管理された評価を行いたい。</span>
                             </div>
                             <div class="col-md-2" style="margin-top:-5px;"><img src="img/nippo/checked.png"
                                     alt="Company Problems" width="77px" height="77px"></div>
                         </div>
                         <div class="col-md-6 text-left">
                             <div class="col-md-2" style="margin-top:-5px;"><img src="img/nippo/checked.png"
                                     alt="Company Problems" width="77px" height="77px"></div>
                             <div class="col-md-10"><span
                                     class="Evaluasi-kinerja-sel">スタッフが日々なにをしているのか管理したい。自分が不在にしているときの部下の作業内容・量・質が不十分。</span></div>
                         </div>
                     </div>
                     <div class="col-md-12" style="padding-top: 2em; ">
                         <div class="col-md-6 text-right">
                             <div class="col-md-10"><span
                                     class="Evaluasi-kinerja-sel">社内コミュニケーションが不足している。従業員同士で評価をしあって高めっていってもらいたい。</span></div>
                             <div class="col-md-2" style="margin-top:-5px;"><img src="img/nippo/checked.png"
                                     alt="Company Problems" width="77px" height="77px"></div>
                         </div>
                         <div class="col-md-6 text-left">
                             <div class="col-md-2" style="margin-top:-5px;"><img src="img/nippo/checked.png"
                                     alt="Company Problems" width="77px" height="77px"></div>
                             <div class="col-md-10"><span
                                     class="Evaluasi-kinerja-sel">誰がどんなタスクにどれだけの時間を割いているのか把握できていない。無駄な仕事を排除したい。</span></div>
                         </div>
                     </div>
                     <div class="clearfix"></div>
                 </section>
                 <section class="hidden-md hidden-lg">
                     <!-- For Mobile -->
                     <div class="col-md-12" style=" padding-top: 2em; ">
                         <div class="col-md-6">
                             <div class="col-xs-3 text-center"><img src="img/nippo/checked.png" alt="Company Problems"
                                     style="padding: 10px;height: 50px"></div>
                             <div class="col-xs-9"><span
                                     class="Evaluasi-kinerja-sel">適切でフェアな人事評価ができていない。客観性のある数値で管理された評価を行いたい。</span>
                             </div>
                         </div>
                         <div class="col-md-6">
                             <div class="col-xs-3 text-center"><img src="img/nippo/checked.png" alt="Company Problems"
                                     style="padding: 10px;height: 50px"></div>
                             <div class="col-xs-9"><span
                                     class="Evaluasi-kinerja-sel">スタッフが日々なにをしているのか管理したい。自分が不在にしているときの部下の作業内容・量・質が不十分。</span></div>
                         </div>
                     </div>
                     <div class="col-md-12">
                         <div class="col-md-6">
                             <div class="col-xs-3 text-center"><img src="img/nippo/checked.png" alt="Company Problems"
                                     style="padding: 10px;height: 50px"></div>
                             <div class="col-xs-9"><span
                                     class="Evaluasi-kinerja-sel">社内コミュニケーションが不足している。従業員同士で評価をしあって高めっていってもらいたい。</span></div>
                         </div>
                         <div class="col-md-6">
                             <div class="col-xs-3 text-center"><img src="img/nippo/checked.png" alt="Company Problems"
                                     style="padding: 10px;height: 50px"></div>
                             <div class="col-xs-9"><span
                                     class="Evaluasi-kinerja-sel">誰がどんなタスクにどれだけの時間を割いているのか把握できていない。無駄な仕事を排除したい。</span></div>
                         </div>
                         <div class="clearfix"></div>
                     </div>
                     <br><br>
                 </section>
             </div>
         </div>

         <div class="laptop">
             <div class="Rectangle-2-Copy-2">
                 <span class="Fitur">Nippo導入のメリット</span>
             </div>
             <div class="row row-fix">
                 <div class="col-md-offset-2 col-md-8 text-center">
                     <div class="col-md-push-2 col-md-10 div-fitur">
                         <span class="NIPPO-SYSTEM-Copy">NIPPO SYSTEM</span>
                     </div>
                 </div>
             </div>
             <div class="row row-fix-3">
                 <div class="col-md-offset-2 col-md-8 text-center">
                     <div class="col-md-2 text-center">
                         <img src="img/nippo/fitur-1.png" alt="Features of Nippo">
                     </div>
                     <div class="col-md-4 text-left" style="padding:0;">
                         <p class="Basis-Data-Karyawan">従業員管理</p>
                         <p class="NIPPO-system-menyedi">従業員情報を登録します。組織の情報、スーパーバイザーとの関連付けなども管理します。</p>
                     </div>
                     <div class="col-md-2 text-center">
                         <img src="img/nippo/fitur-4.png" alt="Features of Nippo">
                     </div>
                     <div class="col-md-4 text-left" style="padding:0;">
                         <p class="Basis-Data-Karyawan">プロジェクト・タスク管理</p>
                         <p class="NIPPO-system-menyedi">プロジェクト情報、タスク種や具体的なタスクの登録管理が可能です。このマスタに沿って従業員が日報入力していきます。</p>
                     </div>
                 </div>
             </div>
             <div class="row row-fix-3">
                 <div class="col-md-offset-2 col-md-8 text-center">
                     <div class="col-md-2 text-center">
                         <img src="img/nippo/fitur-2.png" alt="Features of Nippo">
                     </div>
                     <div class="col-md-4 text-left" style="padding:0;">
                         <p class="Basis-Data-Karyawan">タグ人</p>
                         <p class="NIPPO-system-menyedi">共同作業した同僚をタグ付けすることで日報を相互に確認できます。共同作業者とレポート内容が大きく異ならないかなど確認になります。</p>
                     </div>
                     <div class="col-md-2 text-center">
                         <img src="img/nippo/fitur-5.png" alt="Features of Nippo">
                     </div>
                     <div class="col-md-4 text-left" style="padding:0;">
                         <p class="Basis-Data-Karyawan">プロジェクト原価工数管理</p>
                         <p class="NIPPO-system-menyedi">プロジェクト毎、またタスク毎に作業時間を集計可能です。誰が想定より工数消費しているのか分析して改善に繋げることができます。</p>
                     </div>
                 </div>
             </div>
             <div class="row row-fix-3">
                 <div class="col-md-offset-2 col-md-8 text-center">
                     <div class="col-md-2 text-center">
                         <img src="img/nippo/fitur-3.png" alt="Features of Nippo">
                     </div>
                     <div class="col-md-4 text-left" style="padding:0;">
                         <p class="Basis-Data-Karyawan">人事評価</p>
                         <p class="NIPPO-system-menyedi">毎日、自己評価を他者からの評価を管理します。集計して月次や年次評価することも可能となります。</p>
                     </div>
                     <div class="col-md-2 text-center">
                         <img src="img/nippo/fitur-6.png" alt="Features of Nippo">
                     </div>
                     <div class="col-md-4 text-left" style="padding:0;">
                         <p class="Basis-Data-Karyawan">コメント管理</p>
                         <p class="NIPPO-system-menyedi">他者のコメントをみてLikeやコメントを残すことができます。見られていることで日報が習慣化します。</p>
                     </div>
                 </div>
             </div>
         </div>

         <div class="Mask-Copy">
             <div class="">
                 <div class="row">
                     <div class="col-md-4 col-xs-12 text-left p-t-9">
                         <span class="Keuntungan-Perusahaa">Nippo<br>
                             <span class="text-style-1">の主な機能</span>
                             <div class="Rectangle-6"></div>
                         </span>
                     </div>
                     <div class="col-md-4 col-xs-12 text-center">
                         <div class="OH1E290">
                             <picture>
                                <source srcset="img/nippo/keuntungan-1.webp">
                                <img src="img/nippo/keuntungan-1.png" alt="San Francisco">
                             </picture>
                             <div class="Rectangle">マネージャーや人事担当者は従業員の作業内容を簡単に把握可能です。</div>
                         </div>
                     </div>
                     <div class="col-md-4 col-xs-12 text-center">
                         <div class="OH1E290">
                            <picture>
                                <source srcset="img/nippo/keuntungan-2.webp">
                                <img src="img/nippo/keuntungan-2.png" alt="San Francisco">
                             </picture>                             <div class="Rectangle">マネージャは管理下のスタッフの評価を容易に行えます。頻度が稀だとアンフェアな評価になりがちですが、NippoではDailyで評価可能です。</div>
                         </div>
                     </div>
                     <div class="clearfix"></div>
                     <div class="col-md-4 col-xs-12 text-center">
                         <div class="OH1E290">
                            <picture>
                                <source srcset="img/nippo/keuntungan-3.webp">
                                <img src="img/nippo/keuntungan-3.png" alt="San Francisco">
                             </picture>                               <div class="Rectangle">自己評価とスーパーバイザーの評価の両方が管理されるので、評価をスタッフに伝える際に明快な説明が可能になります。</div>
                         </div>
                     </div>
                     <div class="col-md-4 col-xs-12 text-center">
                         <div class="OH1E290">
                            <picture>
                                <source srcset="img/nippo/keuntungan-4.webp">
                                <img src="img/nippo/keuntungan-4.png" alt="San Francisco">
                             </picture>  
                             <div class="Rectangle">社内コミュニケーションを活性化させます。Likeやコメントを残すことで他人から見られている・評価されている緊張感を生みます。</div>
                         </div>
                     </div>
                     <div class="col-md-4 col-xs-12 text-center">
                         <div class="OH1E290">
                            <picture>
                                <source srcset="img/nippo/keuntungan-5.webp">
                                <img src="img/nippo/keuntungan-5.png" alt="San Francisco">
                             </picture> 
                             <div class="Rectangle">評価者と物理的に場所が離れている、リモートワークしている場合などでも、適切な管理が可能で、Nippoがコミュニケーションを生みます。</div>
                         </div>
                     </div>
                 </div>
                 <div class="clearfix"></div>
             </div>
         </div>

         <div class="Rectangle-7">
             <div class="container__">
                 <div class="row">
                     <div class="col-md-12">
                         <div class="Rectangle-2-Copy-4">
                             <span class="Pertanyaan-Yang-Seri">Nippoに関するよくあるお問い合わせ</span>
                         </div>
                         <img src="img/nippo/question.png" class="question" alt="Nippoに関するよくあるお問い合わせ">
                     </div>
                 </div>

                 <div class="row row-fix-2">
                     <div class="col-md-offset-1 col-md-10">
                         <div class="text-center">
                            <a class="font-16" href="https://drive.google.com/file/d/1YKjRKuNe2IChWBjZYg2jPCnBqgTWawVZ/view" target="_blank"><b>Download user manual (ID)</b></a>
                         </div>
                         <br>
                         <ol>
                             <li class="-Bagaimana-cara-ke">
                                 <h3><b>Nippoってどんなツールなの？</b></h3>
                                 <p class="Nippo-merupakan-sist">日報管理ツールです。日報を通じて従業員の作業内容や作業量を把握管理し、社内の情報共有を促します。管理会計や人事評価管理が可能となります。</p>
                             </li>
                             <li class="-Bagaimana-cara-ke">
                                 <h3><b>管理部門や人事部門にとってどんなメリットが？</b></h3>
                                 <p class="Nippo-merupakan-sist">人事や各部門の管理者は管理対象のメンバーが何時間、どのタスク（プロジェクト）のどんなタイプの仕事をしたのかを把握可能です。各メンバーの自己評価を確認した後に、コメントバックしながら評価点を付与することで評価します。定期的に評価点を集計することで査定をフェアに行うことを可能とします。</p>
                             </li>
                             <li class="-Bagaimana-cara-ke">
                                 <h3><b>トレーニングしてもらえますか？</b></h3>
                                 <p class="Nippo-merupakan-sist">必要に応じてご支援いたしますが、操作しやすいUIで作られていますので使い始めるのに多くの準備は必要としません。まずはデモ環境をご用意いたしますのでトライアル利用していただければと思います。操作マニュアルもご提供いたします。</p>
                             </li>
                             <li class="-Bagaimana-cara-ke">
                                 <h3><b>契約はどのようになりますか？</b></h3>
                                 <p class="Nippo-merupakan-sist">毎月の契約になります。毎月末にご利用ユーザー数を集計してご請求額を確定しご請求書をお送りいたします。翌月末までに銀行振り込みにてお支払いいただきます。</p>
                             </li>
                             <li class="-Bagaimana-cara-ke">
                                 <h3><b>一般ユーザーと管理者ユーザーではシステムが異なるのですか？</b></h3>
                                 <p class="Nippo-merupakan-sist">ブラウザベースのクラウドシステムです。インターフェースは同じです。ログインユーザーによって権限管理をしていますのでご利用になれるメニューが変わってきます。</p>
                             </li>
                             <li class="-Bagaimana-cara-ke">
                                 <h3><b>使うブラウザに制限はありますか？</b></h3>
                                 <p class="Nippo-merupakan-sist">Chromeを推奨しています。FirefoxやSafariの最新バージョンでも動作確認しています。IEは推奨しておりません。</p>
                             </li>
                             <li class="-Bagaimana-cara-ke">
                                 <h3><b>モバイル端末からも利用できますか？</b></h3>
                                 <p class="Nippo-merupakan-sist">はい、特に入力に関してはモバイル端末からも問題なく行なえますので、外出先から日報記入することが可能です。</p>
                             </li>
                         </ol>
                     </div>
                 </div>
             </div>
         </div>

         <div class="Rectangle-8 text-center">
             <div class="container__">
                 <div class="row" style=" margin: 0;padding: 4em 0 2em 0">
                     <div class="col-md-4">
                         <p class="KONTAK-KAMI p-l-25">Nippoに関するお問い合わせ</p>
                     </div>
                     <div class="col-md-7">
                         <?php if(isset($msg))
        {
        echo $msg;
        }
        ?>
                         <form role="form" name='myForm' onsubmit='return validateForm()'
                             action='<?php echo $formproc->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
                             <input type='hidden' name='submitted' id='submitted' value='1' />
                             <input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>'
                                 value='<?php echo $formproc->GetFormIDInputValue(); ?>' />
                             <div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
                             <div class="row">
                                 <div class="col-sm-6 form-group">
                                     <input type="text" class="form-control Rectangle-9" name="name" aria-label="Name"
                                         placeholder="お名前" value='<?php echo $formproc->SafeDisplay('name') ?>'>
                                 </div>
                                 <div class="col-sm-6 form-group">
                                     <input type="text" class="form-control Rectangle-9" name="company" aria-label="Company"
                                         placeholder="会社名" value='<?php echo $formproc->SafeDisplay('company') ?>'>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-sm-6 form-group">
                                     <input type="email" class="form-control Rectangle-9" name="email" aria-label="Email"
                                         placeholder="EMAIL" value='<?php echo $formproc->SafeDisplay('email') ?>'>
                                 </div>
                                 <div class="col-sm-6 form-group">
                                     <input type="number" class="form-control Rectangle-9" name="phone" aria-label="Phone"
                                         placeholder="TEL" value='<?php echo $formproc->SafeDisplay('phone') ?>'>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-sm-12 form-group">
                                     <textarea class="form-control Rectangle-9" name="message" aria-label="Message" rows="8"
                                         placeholder="お問い合わせ内容"
                                         style="width: 100%;padding:  1em;"><?php echo $formproc->SafeDisplay('message') ?></textarea>
                                 </div>
                             </div>

                             <div class="row">
                                 <div class="col-md-6 text-left">
                                     <div class="g-recaptcha" data-sitekey="6LcuHywUAAAAACj__hCefsBCkoIC2ExM2Sur4cCp"></div>
                                     <div class="clearfix"></div>
                                 </div>
                                 <div class="col-md-6 text-right">
                                     <button type="submit" href="#" class="Rectangle-10 btn-coba"><span
                                             class="KIRIM">送信</span></button>
                                 </div>
                             </div>
                         </form> <!-- end form contact -->
                     </div>
                 </div>
             </div>
         </div>

         <div class="Rectangle-11" style="height:auto!important;padding:15px 0">
             <div class="container__">
                 <div class="row" style="margin: 0">
                     <div class="col-md-12 text-center">
                         <div class="col-md-12">
                             <img src="img/nippo/logo-nippo-footer.png" alt="Nippo Logo" style="padding-top: 49.2px">
                             <p class="Nippo-adalah-aplikas2">
                                 Nippoは従業員の日報を通して現状を把握し改善していくためのツールです。誰がなにをどれくらいの時間かけて作業しているか把握します。またその作業に対して自己評価とスーパーバイザーからの評価を行い管理することが可能となります。
                             </p>
                         </div>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-sm-12 text-center">
                         <br />
                         <p style="color:#9b9b9b;font-family: Avenir;font-size: 18px;">Other Products:</p>
                         <p>
                             <a target="_blank" href="/jp/product/sugoi-saiyo.php"
                                 style="color:#fff;font-family: Avenir;font-size: 18px;">SUGOI-SAIYO</a> |
                             <a href="https://dokodemo-kerja.com" target="_blank" rel="noreferrer"
                                 style="color:#fff;font-family: Avenir;font-size: 18px;">DOKODEMO KERJA</a></p>
                     </div>
                 </div>
                 <div class="row text-center" style="margin: 0">
                     <div class="col-md-4" style="margin-top: 3em">
                         <img src="img/nippo/placeholder.png" alt="Office Location">
                         <p class="Nippo-adalah-aplikas2">Ad Premier Building 19th Floor Jalan Tb. Simatupang No. 5 Ragunan, Ps.
                             Minggu, Jakarta Selatan, Indonesia 12550</p>
                     </div>
                     <div class="col-md-4" style="margin-top: 3em">
                         <img src="img/nippo/email.png" alt="Email">
                         <p class="Nippo-adalah-aplikas2">info@logique.co.id</p>
                     </div>
                     <div class="col-md-4" style="margin-top: 3em">
                         <img src="img/nippo/phone-call.png" alt="Phone">
                         <p class="Nippo-adalah-aplikas2">+62(21) 2270 8935 / 36</p>
                     </div>
                 </div>
             </div>
         </div>

         <div class="Rectangle-11-Copy">
             <div class="container__" style="padding: 0;">
                 <div class="row text-center" style="margin: 0;padding-top: 1em">
                     <div class="col-md-12">
                         <a href="https://www.logique.co.id/jp/" target="_blank" rel="noreferrer" aria-label="Logo Logique"><img
                                 src="img/nippo/logo-Logique.png" alt="Logo Logique" class="FA-Logique"></a>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <?php $slick_disabled = true; ?>
     <?php include '../footer.php'; ?>

     <script src="/js/bootstrap.min.js"></script>
     <script src='https://www.google.com/recaptcha/api.js'></script>

 </body>

 </html>