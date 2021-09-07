 <?php 
require_once("assets/form/fgcontact_mobileapps.php");

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
         content="インドネシアのモバイルApp開発会社LOGIQUEデジタルIndonesia。モバイル・スマホアプリの開発、既存のアプリの改修、バージョンアップ対応、メンテナンス契約についてなど、お気軽にご相談ください。アプリの開発以外にもモバイル・スマホ活用ソリューション、PWA等についても豊富な経験あります。">
     <meta name="keywords" content="">
     <meta name="author" content="PT LOGIQUE DIGITAL INDONESIA ">
     <meta property="og:title" content="スマホアプリ | モバイルApp開発 | LOGIQUEインドネシア">
     <meta property="og:type" content="website">
     <meta property="og:site_name" content="Logique">
     <meta property="og:url" content="https://www.logique.co.id/jp/services/mobile-app-dev.php">
     <meta property="og:image" content="https://www.logique.co.id/en/services/assets/img/img-mobileapps/mobile-phone.png">
     <meta property="og:description"
         content="インドネシアのモバイルApp開発会社LOGIQUEデジタルIndonesia。モバイル・スマホアプリの開発、既存のアプリの改修、バージョンアップ対応、メンテナンス契約についてなど、お気軽にご相談ください。アプリの開発以外にもモバイル・スマホ活用ソリューション、PWA等についても豊富な経験あります。">
     <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
     <link rel="canonical" href="https://www.logique.co.id/jp/services/mobile-app-dev.php"/>
     <title>スマホアプリ | モバイルApp開発 | LOGIQUEインドネシア</title>

    <link rel="preconnect" href="https://prod.purechatcdn.com/" crossorigin>
    <link rel="preconnect" href="http://ajax.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://app.purechat.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="/fonts/Novecentosanswide-Medium.otf" rel="preload" as="font" crossorigin/>

    <!-- bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- <link rel="stylesheet" href="/css/sidebar-update.css" > -->
    <link href="/css/sidebar-update.css" rel="stylesheet">
    <link href="/css/newstyle.css" rel="stylesheet">
    <link href="assets/css/style-mobileapps.css" rel="stylesheet">
    
    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Rokkitt:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">

    <link href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css" rel="stylesheet" type="text/css" />
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

 <body class="mobileapp-page">
     <div class="wrapper wrapper--update-design wrapper--update-design-font o-wrapper --jp">
        <style>
            h1{font-family:Rokkitt,serif}
            .container__{padding-top:0;padding-bottom:0}
            .logique-nav{left:0}.title{background-color:transparent;padding:0}
            .copyright{background-color:transparent;text-align:left;border:none;color:inherit}
            footer{padding:30px 0 10px}
            .container__footer{padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;}
        </style>
        <!-- NAVIGATION -->
        <?php 
            // $active option are home, about, portfolio, services, product, career, contact
            $active = 'services';
            include($_SERVER['DOCUMENT_ROOT'].'/jp/sidebar.php'); 
        ?>

        <?php 
            $lang = 'jp';
            $en_link = '/en/services/mobile-app-dev.php';
            $id_link = '/layanan/pembuatan-aplikasi-mobile.php';
            $jp_link = '#';
            include($_SERVER['DOCUMENT_ROOT'].'/jp/header.php'); 
        ?>
     
        <div class="content-wrapper__">
            <header>
                <section class="--top">
                    <div class="container__" style="padding:0">
                        <div class="row">
                            <div class="col-sm-12">
                                <ol class="breadcrumb breadcrumb--update-design" itemscope
                                    itemtype="http://schema.org/BreadcrumbList">
                                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item"
                                            href="/jp/index.php"><span itemprop="name">Home</span></a>
                                        <meta itemprop="position" content="1" />
                                    </li>
                                    <li class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a
                                            itemprop="item" href="/jp/services.php"><span itemprop="name">&nbsp;LOGIQUEのサービス</span></a>
                                        <meta itemprop="position" content="2" />
                                    </li>
                                    <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a
                                            itemprop="item"><span itemprop="name">&nbsp;モバイルアプリケーション制作</span></a>
                                        <meta itemprop="position" content="3" />
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="container__">
                    <div class="row">
                        <div class="col-md-7">
                            <br /><br /><br />
                            <h1><span class="yellow">モバイルアプリ（ANDROID｜iOS｜ハイブリッド）</span>をインドネシアで、高品質でリーズナブルなコストで開発するなら<span
                                    class="yellow">LOGIQUE</span>にご依頼ください。</h1>
                            <br />
                            <p>
                                モバイル・スマホアプリの開発、既存のアプリの改修、バージョンアップ対応、メンテナンス契約についてなど、お気軽にご相談ください。確かな技術に基づいたサービスを低価格でご提供しています。アプリの開発以外にもモバイル・スマホ活用ソリューション、PWA等についても豊富な経験ありますのでご相談お待ちしています。
                            </p>
                            <div class="visible-md visible-lg"><br /><br /><br /><br /><br /></div>
                        </div>
                        <div class="col-md-5">
                            <img alt="Mobile" src="assets/img/img-mobileapps/hp-header.png"
                                class="hp-header img-responsive center-block" />
                        </div>
                    </div>
                </div>
            </header>
            <div class="hubungi-kami-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <a href="/jp/contact.php" target="_blank" style="color:#000">モバイル・スマホ活用についてお気軽に日本語でご連絡ください。</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <section>
                <div class="container__">
                    <br /><br />
                    <div class="row">
                        <div class="col-md-5">
                            <h2 class="first"><span>スマートフォンアプリ開発</span>は開発パートナー選びが重要</h2>
                            <br />
                            <img alt="Pengembangan Aplikasi Mobile Berorientasi Pengguna"
                                src="assets/img/img-mobileapps/mobile-phone.png" class="img-responsive center-block mobile-phone" />
                        </div>
                        <div class="col-md-7">
                            <p style="font-size: 18px;">
                                アプリ開発・運用で成功するには開発パートナー選びが重要です。システム開発やWeb制作に比べて、テクノロジーの変化、バージョンアップが頻繁であること、端末種が豊富なことから、開発会社には高い技術力が求められ、緻密で正確な管理運用能力が必要になります。LOGIQUEは、確かな技術力と適切なプロジェクト管理で開発を行い、ユーザビリティの高い、インドネシア市場に完璧にFitするアプリを開発します。<br /><br />
                                iPhoneやAndoridアプリの開発をしたいが、どのように、どこに依頼したら良いのかわからない、メンテナンス性の良いアプリを作りたい、まずはプロトタイプだけ制作してもらいたい、企画から助けてくれる開発会社を探しているなどの課題やニーズがあれば、お気軽にLOGIQUEにご相談ください。
                            </p>
                        </div>
                    </div>
                    <br /><br />
                </div>
            </section>
    
            <section class="solusi">
                <div class="container__">
                    <br /><br />
                    <div class="row">
                        <div class="col-md-4">
                            <h2 class="title">LOGIQUEのアプリ開発の進め方、特徴</h2>
                        </div>
                        <div class="col-md-8">
                            <ul class="fa-ul">
                                <li><span class="fa-li"><i
                                            class="fa fa-check-square"></i></span>要件定義からテスト、納品までスムーズで柔軟なプロジェクトマネジメントを行います。Web制作やWebシステム開発と同様Agile開発を行います。
                                </li>
                                <li><span class="fa-li"><i
                                            class="fa fa-check-square"></i></span>企画も可能です。今までの経験、インドネシアの慣習も含め、ユーザーのニーズを叶える有益なアプリとなるよう、企画・要件定義フェーズでのアドバイスを惜しみません。
                                </li>
                                <li><span class="fa-li"><i
                                            class="fa fa-check-square"></i></span>UI / UXデザインはアプリ開発の中の大きなウェートを占める作業です。LOGIQUEは社内にデザイナーを複数抱えていますので、デザインと開発で分断が起こるというようなことがありません。デザイン力とテクノロジーをうまく融合させます。
                                </li>
                                <li><span class="fa-li"><i
                                            class="fa fa-check-square"></i></span>多くのお客様からシステムの運用保守も任せられています。スマホアプリの効果を出すためには、リリース後の運用が非常に大事です。運用、デジタルマーケティング実施もLOGIQUEは総合的にご支援します。
                                </li>
                            </ul>
                        </div>
                    </div>
                    <br /><br />
                </div>
            </section>
            
            <section class="container__ logique-help">
                <br /><br /><br>
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="font-28 text-center"><span class="purple"><b>LOGIQUE</b></span>が気をつけていること</h2>
                    </div>
                    <div class="clearfix"></div>
                    <br /><br /><br>
                    <div class="col-md-4">
                        <div class="div-help">
                            <h3 class="div-title"><span class="title purple"><b>企画・仕様決定に貢献します</b></span></h3>
                            <div class="">
                                <img alt="Ide Aplikasi Inovatif" class="img-responsive center-block"
                                    src="assets/img/img-mobileapps/inovatif.png" /><br />
                                ユーザーのニーズは間違いないか、本当にアプリ化することがベストな選択なのか、iOSアプリも必要か、など、開発に着手する前に考えるべきことは多くあります。企画・要件定義フェーズとして参画し、このプロセスを加速します。場合によっては開発しないという選択もあるかもしれませんが、インドネシアのマーケットを熟知しているLOGIQUEだからこそ提言できることがあります。企画・仕様決定も、過去の実績を基にあるべきUI／UXをアドバイスいたします。
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="div-help">
                            <h3 class="div-title"><span class="title purple"><b>適切なフェージングで滞りなく</b></span></h3>
                            <div class="">
                                <img alt="Memberikan Nilai Tambahan" class="img-responsive center-block"
                                    src="assets/img/img-mobileapps/nilai-tambah.png" /><br />
                                アプリを公開すると間違いなく改善事項、追加機能が出てきます。Phase1では迅速に公開までもていくこと、かつPhase2以降での拡張性を十分に持たせた作りを推奨しています。フェーズ分け、追加・変更要望の管理はプロジェクト管理の中でも間違えられない判断が求められます。ユーザーニーズもテクノロジーも変化が早くなっています。１つのPhaseに全てを詰め込まずに、アジャイル的にアプリケーションをスピーディーに改善・発展していきます。
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="div-help">
                            <h3 class="div-title"><span class="title purple"><b>しっかり保守運用</b></span></h3>
                            <div class="">
                                <img alt="Meningkatkan Proses Bisnis" class="img-responsive center-block"
                                    src="assets/img/img-mobileapps/proses-bisnis.png" /><br />
                                トラフィックボリュームに応じた適切なサーバーのチューニングや、OS、ミドルウェアのバージョンアップへの対応などきちんと保守運用できる体制が整っていることが、継続的なUI/UX改善のベースになります。地味ではありますが、御社のマーケティング担当さんの工数を掛けずに、しっかりと保守運用していきます。デジタルマーケティング領域のご支援も可能です。
                            </div>
                        </div>
                    </div>
                </div>
                <br /><br /><br />
            </section>
            
            <section class="solusi revision" id="solusi-section">
                <div class="container__">
                    <br /><br />
                    <div class="row row-center-md">
                        <div class="col-md-offset-1 col-md-4">
                            <h2 class="title">モバイル（スマートフォン）アプリをもつメリット</h2>
                        </div>
                        <div class="col-md-6">
                            <ul class="fa-ul">
                                <li><span class="fa-li"><i class="fa fa-check-square"></i></span>ユーザーとの接触頻度を高められる（プッシュ通知活用）</li>
                                <li><span class="fa-li"><i class="fa fa-check-square"></i></span>インターネット接続状況の影響を少なくすることが可能.</li>
                                <li><span class="fa-li"><i class="fa fa-check-square"></i></span>操作性・表示速度を高められる.</li>
                            </ul>
                        </div>
                    </div>
                    <br />
                    <hr /><br />
                    <h2 class="font-28 text-center">モバイルアプリ開発関連サービス</h2><br />
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            ネイティブなモバイル（スマートフォン）アプリ開発（Android、iOS、ハイブリッド）、企画、保守運用だけでなくPWA（プログレッシブウェブアプリ）の開発も行っております。最適な実装方法を検討する段階からご相談いただければと思います。
                        </div>
                    </div>
                    <br />
                    <div class="row">
                        <div class="col-md-4">
                            <div class="layanan-kami">
                                <h3 class="title">iPhone/iPad用のiOSアプリケーション開発</h3>
                                <br />
                                <img alt="Pengembangan Aplikasi iOS untuk iPhone / iPad" src="assets/img/img-mobileapps/apple.png"
                                    class="img-responsive center-block" /><br />
                                インドネシアでのApple端末普及率はまだすごく高くはないですが、Highエンドなユーザー層では多く使われています。AndroidアプリケーションをiOS上でも動くように開発したいという案件は増えてきています。経験豊富なSwiftエンジニアが開発担当します。
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="layanan-kami">
                                <h3 class="title">Androidアプリケーション開発</h3>
                                <br />
                                <img alt="Pengembangan Aplikasi Android" src="assets/img/img-mobileapps/android.png"
                                    class="img-responsive center-block" /><br />
                                インドネシアでモバイルアプリを作るとなった時にファーストオプションになるのがアンドロイドアプリの開発です。対象OSバージョンやメインターゲット端末種などインドネシアを熟知する当社だからこそアドバイスできることがありますのでお気軽にご相談ください。
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="layanan-kami">
                                <h3 class="title">ハイブリッドアプリ開発</h3>
                                <br />
                                <img alt="Pengembangan Aplikasi Hybrid" src="assets/img/img-mobileapps/hybrid.png"
                                    class="img-responsive center-block" /><br />
                                    インドネシアでは圧倒的少数派だったiPhoneの保有台数が上がってきました。Androidアプリだけあれば良いという時代は終わりつつあります。ハイブリッドアプリやPWAの検討が必要になっています。
                            </div>
                        </div>
                    </div>
                    <div class="hidden-xs hidden-sm"><br /></div>
                    <div class="row">
                        <div class="col-md-4 col-md-offset-2">
                            <div class="layanan-kami">
                                <h3 class="title">UI/UXデザイン</h3>
                                <br />
                                <img alt="Desain UI/UX Aplikasi Mobile" src="assets/img/img-mobileapps/ux.png"
                                    class="img-responsive center-block" /><br />
                                モバイルアプリのUI・UXデザイン経験が豊富なデザイナーが、必要に応じてA/Bテストしながら、ユーザビリティーの高いUI・UXを制作します。
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="layanan-kami">
                                <h3 class="title">バックエンド開発</h3>
                                <br />
                                <img alt="Pengembangan CMS / API" src="assets/img/img-mobileapps/cms.png"
                                    class="img-responsive center-block" /><br />
                                モバイルアプリと他システムとの連携などが必要になるケースがほとんどです。インフラの設計設定から、他システムとのデータ連携、バックエンドシステムの開発まで幅広く対応可能です。
                            </div>
                        </div>
                    </div>
                    <br /><br />
                </div>
            </section>
            
            <section class="portofolio">
                <div class="container__">
                    <div class="row">
                        <div class="col-md-5">
                            <h2 class="font-28">モバイルアプリ開発実績</h2>
                            <br />
                            <div class="font-20">
                                インドネシアで多くのモバイルアプリ、ハイブリッドアプリの開発を行ってきました。モバイル・ソリューションの活用でインドネシア市場で発展する企業をご支援しています。
                            </div>
                            <br /><br />
                        </div>
                        <div class="col-md-7">
                            <div class="portfolio-slider">
                            <div>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <img alt="Frangipani" class="img-responsive center-block"
                                                src="assets/img/img-mobileapps/jba-bike-inspection-app-1.png" />
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="caption-portfolio">
                                                <div class="arrow-left"></div>
                                                <h2 class="font-28">JBA Bike Inspection System</h2><br />
                                                <div>
                                                    <!-- Application that helps international spa managers to improve services and
                                                    relationships with customers. -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <img alt="Frangipani" class="img-responsive center-block"
                                                src="assets/img/img-mobileapps/weeo-hino-connect-2.png" />
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="caption-portfolio">
                                                <div class="arrow-left"></div>
                                                <h2 class="font-28">Weeo Gazelle App</h2><br />
                                                <div>
                                                    <!-- Application that helps international spa managers to improve services and
                                                    relationships with customers. -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <img alt="Frangipani" class="img-responsive center-block"
                                                src="assets/img/img-mobileapps/weeo-testing-app-1.jpg" />
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="caption-portfolio">
                                                <div class="arrow-left"></div>
                                                <h2 class="font-28">Weeo Testing App</h2><br />
                                                <div>
                                                    <!-- Application that helps international spa managers to improve services and
                                                    relationships with customers. -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <img alt="Frangipani" class="img-responsive center-block"
                                                src="assets/img/img-mobileapps/wantjp1.png" />
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="caption-portfolio">
                                                <div class="arrow-left"></div>
                                                <h2 class="font-28">Want.jp</h2><br />
                                                <div>
                                                    <!-- Application that helps international spa managers to improve services and
                                                    relationships with customers. -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <img alt="Sunlife" class="img-responsive center-block"
                                                src="assets/img/img-mobileapps/sunlife.png" />
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="caption-portfolio">
                                                <div class="arrow-left"></div>
                                                <div class="font-28">SunLife Financial</div><br />
                                                <div class="font-20">
                                                    保険会社において保険代理店とのコミュニケーション、eラーニングアプリの開発運用。営業ツールとして使えるアプリの開発も行った。
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <img alt="Otomart" class="img-responsive center-block"
                                                src="assets/img/img-mobileapps/otomart.png" />
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="caption-portfolio">
                                                <div class="arrow-left"></div>
                                                <div class="font-28">OTO mart</div><br />
                                                <div class="font-20">
                                                    中古車マッチングWEB。中古車ディーラーが保有＆OTOmartにポストする車の管理をモバイルアプリを通して行っている。iOS、Android両プラットフォームでネイティブアプリとして開発運用。<br />
                                                    2ヶ月、Objective-C、Swift、CakePHP、HTML5、MySQL
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <img alt="Frangipani" class="img-responsive center-block"
                                                src="assets/img/img-mobileapps/frangipani.png" />
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="caption-portfolio">
                                                <div class="arrow-left"></div>
                                                <div class="font-28">Frangipaniスパ</div><br />
                                                <div class="font-20">
                                                    スパのお客様に施術後レビューコメントを記入いただくアプリの開発。レビューに基いて、テラピストやレセプショニストの人事評価を行うバックエンドシステムと連動。Androidネイティブアプリの開発。バックエンドはCakePHPで構築。
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="bg-grey">
                <div class="container__">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="font-28 text-center">LOGIQUEのアプリ開発</h2>
                            <br />
                            <p class="text-center">
                            原則、アジャイル開発を行います。リリースまでの期間が短く、開発途中の仕様変更・要件変更にも柔軟に対応できる新しい開発手法です。仕様が決まりきっていないけど早く世に出してマーケットの声を聞きたいのようなケースなどでも効果的なご支援をいたします。
                            </p>
                        </div>
                    </div>
                    <br /><br />
                    <div class="row">
                        <div class="col-md-5ths">
                            <div class="contain-img">
                                <img class="img-responsive center-block" src="assets/img/img-mobileapps/cara-kerja1.png"
                                    alt="アプリの企画" />
                                <div class="text-center title">アプリの企画</div>
                            </div>
                            <p>
                            アプリの企画をご支援します。「ビジネスについて」「アプリを作る目的やゴール」「ユーザーに提供したい体験」の3つを主にしっかりとぶれない考えを纏めて、コンテンツやアプリをおもしろくする仕組みやUIに関しても合わせて考え企画として纏めます。
                            </p>
                        </div>
                        <div class="col-md-5ths">
                            <div class="contain-img">
                                <img class="img-responsive center-block" src="assets/img/img-mobileapps/cara-kerja2.png"
                                    alt="デザイン" />
                                <div class="text-center title">デザイン</div>
                            </div>
                            <p>
                            ワイヤーフレームやデザインなど、目に見える形をたたき台として議論を深められるフェーズです。新たなアイデアが出てデザインを見直すなどを行います。ここで止まってしまうと良くありません。ユーザーの声を早く聞くということも大事です。
                            </p>
                        </div>
                        <div class="col-md-5ths">
                            <div class="contain-img">
                                <img class="img-responsive center-block" src="assets/img/img-mobileapps/cara-kerja3.png"
                                    alt="開発" />
                                <div class="text-center title">開発</div>
                            </div>
                            <p>
                            スコープに沿った適切な開発体制を整備してアジャイル開発でアプリを開発します。アプリのプログラミングには、主流でトレンドな言語を選択します。そのほうが開発後のメンテナンス性が高くなるからです。Java, Objective-C, Swift, Kotlin, Flutterなどでの開発を行っています。
                            </p>
                        </div>
                        <div class="col-md-5ths">
                            <div class="contain-img">
                                <img class="img-responsive center-block" src="assets/img/img-mobileapps/cara-kerja4.png"
                                    alt="テスト" />
                                <div class="text-center title">テスト</div>
                            </div>
                            <p>
                            リリース後に致命的なバグが発生したり、セキュリティ脆弱性が発見されるなどは絶対に避けなければなりません。テストをしながら次フェーズでの改善点も見えてきます。
                            </p>
                        </div>
                        <div class="col-md-5ths">
                            <div class="contain-img">
                                <img class="img-responsive center-block" src="assets/img/img-mobileapps/cara-kerja5.png"
                                    alt="アプリ公開" />
                                <div class="text-center title">アプリ公開</div>
                            </div>
                            <p>
                            Google PlayやApp Storeへの申請公開作業も行います。審査に通らないと設計や実装レベルの改修が必要になってしまうこともあるのでしっかりとリリース状態になるまでご支援します。
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <!--<div class="slider-mobile">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="assets/img/img-mobileapps/device.png" class="device hidden-xs"/>
                                <img src="assets/img/img-mobileapps/device-m.png" class="device visible-xs"/>
                                <div class="slider-app">
                                <div><img src="assets/img/img-mobileapps/sunlife.png" class="img-responsive center-block"/></div>
                                <div><img src="assets/img/img-mobileapps/frangipani.png" class="img-responsive center-block"/></div>
                                <div><img src="assets/img/img-mobileapps/otomart.png" class="img-responsive center-block"/></div>
                                <div><img src="assets/img/img-mobileapps/otomart.png" class="img-responsive center-block"/></div>
                                </div>		
                            </div>
                        </div>
                    </div>
                </div>-->
            <section class="div-form">
                <div class="container__">
                    <div class="row">
                        <div class="col-md-offset-2 col-md-8">
                            スマートフォンアプリ、タブレットアプリの企画・開発・運用保守についてお気軽にご相談ください。
                            <br />
                            <?php if(isset($msg))
                                {
                                echo $msg;
                                } 
                                ?>
                            <form id="contact-form-mobile" class="contactform-mobile" role="form" name='myForm'
                                onsubmit='return validateForm()' action='<?php echo $formproc->GetSelfScript(); ?>' method='post'
                                accept-charset='UTF-8'>
                                <input type='hidden' name='submitted' id='submitted' value='1' />
                                <input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>'
                                    value='<?php echo $formproc->GetFormIDInputValue(); ?>' />
                                <fieldset>
                                    <div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
                                </fieldset>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="text" name="name" aria-label="Name" placeholder="お名前"
                                                class="form-control name-input"
                                                value='<?php echo $formproc->SafeDisplay('name') ?>' />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="email" name="email" aria-label="Email" placeholder="Email"
                                                class="form-control" value='<?php echo $formproc->SafeDisplay('email') ?>' />
                                        </div>
                                        <div class="col-md-6">
                                            <input type="number" name="phone" aria-label="Phone" placeholder="TEL"
                                                class="form-control" value='<?php echo $formproc->SafeDisplay('phone') ?>' />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <textarea class="form-control" placeholder="お問い合わせ" name="message"
                                                aria-label="Message"><?php echo $formproc->SafeDisplay('message') ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="sr-only">Recaptcha</div>
                                            <div class="g-recaptcha" data-sitekey="6LcuHywUAAAAACj__hCefsBCkoIC2ExM2Sur4cCp"></div>
                                        </div>
                                        <div class="col-md-6">
                                            <button type="submit" class="pull-right btn btn-submit">送信</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="buat-sekarang">
                <div class="container__">
                    <div class="row row-center-md">
                        <div class="col-md-12 font20">
                            LOGIQUEのその他のサービス（Web制作、Webシステム開発）をご確認いただく
                            <div class="hidden-lg hidden-md"><br /></div>
                        </div>
                        <div class="col-md-6">
                            <a href="/jp/services.php" target="_blank" class="btn btn-buat-sekarang">その他のサービス</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    
        <?php include '../footer.php'; ?>
     </div>

     <script src="/js/jquery.matchHeight.js"></script>
     <script src="/js/slick.min.js"></script>
     <script src='https://www.google.com/recaptcha/api.js'></script>
     <script type="text/javascript">
     $(function() {
         $('.div-help').matchHeight();
         $('.layanan-kami').matchHeight();
     });

     $('.portfolio-slider').slick({
         dots: true,
         infinite: true,
         speed: 500,
         fade: true,
         arrows: false,
         autoplay: true,
         cssEase: 'linear'
     });
     </script>
 </body>

 </html>