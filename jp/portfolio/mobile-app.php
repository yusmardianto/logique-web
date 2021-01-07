<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=3.0">
    <meta name="description" itemprop="description"
        content="LOGIQUEのモバイル・スマホアプリ開発実績を紹介。LOGIQUEはジャカルタのWeb制作・システム開発会社。アンドロイド、iOSアプリ開発、Hybrid開発、PWAの開発を数多く行ってきました。">
    <meta name="keywords" content="WEBサイト制作, ホームページ制作, ウェブシステム構築, デザイン, 印刷, コーポレートサイト, ランディングページ">
    <meta name="author" content="PT. Logique Digital Indonesia">
    <meta property="og:title" content="LOGIQUEのアプリ開発実績">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Logique">
    <meta property="og:url" content="https://www.logique.co.id/jp/portfolio.php">
    <meta property="og:image" content="https://www.logique.co.id/img/ogimg/portfolio.png">
    <meta property="og:description"
        content="LOGIQUEのモバイルアプリ開発実績を紹介。ホームページ制作、Webシステム構築、モバイルアプリ開発、Digitalマーケティングで豊富な実績があります。">
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <link rel="canonical" href="https://www.logique.co.id/jp/portfolio/mobile-app.php"/>
    <title>モバイルアプリ開発実績 | LOGIQUEデジタルインドネシア</title>

    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet"> 
    
    <!-- <link href="/css/style.css" rel="stylesheet"> -->
    <link href="/css/sidebar-update.css" rel="stylesheet"> 
    <link href="/css/newstyle.css" rel="stylesheet">
    <link href="/css/style-revamp.css" rel="stylesheet">
    <link href="/css/style-portfolio.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css" />
    <link href="/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+1p:400,500,700" rel="stylesheet">
    <link href="/css/jpstyle.css" rel="stylesheet">
</head>

<body style="overflow-x: hidden">
    <div class="wrapper wrapper--update-design wrapper--update-design-font --jp">

        <!-- NAVIGATION -->
        <?php 
            // $active option are home, about, portfolio, services, product, career, contact
            $active = 'portfolio';
            include($_SERVER['DOCUMENT_ROOT'].'/jp/sidebar.php'); 
        ?>

        <!-- <div id="bgImg" class="others"><div class="img"></div></div> -->
        <!-- <div class="contain-video">
            <video poster="../img/video-img.png" id="bgvid" playsinline autoplay muted loop>
                <source src="../img/12377093.mp4" type="video/mp4">
            </video>
        </div>
        <div class="bg-white-opacity"></div> -->

        <?php 
            $lang = 'jp';
            $en_link = '/en/portfolio/mobile-app.php';
            $id_link = '/portofolio/mobile-app.php';
            $jp_link = '#';
            include($_SERVER['DOCUMENT_ROOT'].'/jp/header.php'); 
        ?>

        <style>
        html {
            scroll-behavior: smooth;
        }

        .addition-desc {
            font-size: 12px
        }

        .grey-clr {
            color: grey
        }

        .circle-list>li {
            padding-bottom: 7px
        }

        .modal-backdrop {
            display: none !important
        }
        </style>

        <div class="portfolio-update content-wrapper__">

            <section class="--top portfolio__banner portfolio__banner-detail">
                <div class="container__" style="padding:0">
                    <div class="row">
                        <div class="col-sm-12">
                            <ol class="breadcrumb breadcrumb--update-design" itemscope
                                itemtype="http://schema.org/BreadcrumbList">
                                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item"
                                        href="index.php"><span itemprop="name">ホーム</span></a>
                                    <meta itemprop="position" content="1" />
                                </li>
                                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="/jp/portfolio.php"
                                        itemprop="item"><span itemprop="name">&nbsp;制作・開発実績</span></a>
                                    <meta itemprop="position" content="2" />
                                </li>
                                <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a
                                        itemprop="item"><span itemprop="name">&nbsp;アプリ開発実績</span></a>
                                    <meta itemprop="position" content="2" />
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="container__ banner-detail__content">
                    <div class="row">
                        <div class="col-md-offset-1 col-md-7">
                            <div class="title"><h1>モバイルアプリの開発実績</h1></div>
                            <p class="title__description" style="margin-left: 0;">幾つかの公開可能なモバイルアプリの開発実績を掲載します。開発後の運用、2次、3次開発なども多く行っています。アンドロイド、iOSアプリ開発の他に、PWAの開発も多く経験しています。より詳細な情報をお求めの場合はお気軽にお問い合わせください。</p>
                            <img src="/img/portfolio/bg-portfolio-detail-mobile.png" alt="" class="img-responsive visible-md visible-lg">
                        </div>
                    </div>
                </div>
            </section>

            <section id="portofolio_mobile" class="portfolio-update__content">
                <div class="container__">
                    <h2 class="text-center">Mobile App</h2>
                    <div class="content__wrapper">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="content__item content__item--mobile" style="background-image: url('/img/portfolio/update/jba-bike-mobile-bg.png')">
                                    <div>
                                        <img src="/img/portfolio/update/jba-bike-mobile.png" alt="">
                                        <h3>JBA Bike Inspection App</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="content__item content__item--mobile" style="background-image: url('/img/portfolio/update/mobile-hino-bg.png')">
                                    <div>
                                        <img src="/img/portfolio/update/mobile-hino.png" alt="">
                                        <h3>Weeo Hino Connect</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="content__item content__item--mobile" style="background-image: url('/img/portfolio/update/mobile-wantjp-bg.png')">
                                    <div>
                                        <img src="/img/portfolio/update/mobile-wantjp.png" alt="Want.jp">
                                        <h3>Want.jp</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="content__item content__item--mobile" style="background-image: url('/img/portfolio/update/mobile-nlec-bg.png')">
                                    <div>
                                        <img src="/img/portfolio/update/mobile-nlec.png" alt="NLEC Nihongo E-Learning PWA">
                                        <h3>NLEC Nihongo E-Learning PWA</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="content__item content__item--mobile" style="background-image: url('/img/portfolio/update/mobile-jba-bg.png')">
                                    <div>
                                        <img src="/img/portfolio/update/mobile-jba.png" alt="">
                                        <h3>JBA Indonesia Auction Bidding App</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="content__item content__item--mobile" style="background-image: url('/img/portfolio/update/mobile-otomart-bg.png')">
                                    <div>
                                        <img src="/img/portfolio/update/mobile-otomart.png" alt="">
                                        <h3>Otomart - Used Car on Sale Finder App</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="content__item content__item--mobile" style="background-image: url('/img/portfolio/update/mobile-frangipani-bg.png')">
                                    <div>
                                        <img src="/img/portfolio/update/mobile-frangipani.png" alt="">
                                        <h3>Frangipani Esthetics Guest Comment App</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="content__item content__item--mobile" style="background-image: url('/img/portfolio/update/mobile-vipplaza-bg.png')">
                                    <div>
                                        <img src="/img/portfolio/update/mobile-vipplaza.png" alt="">
                                        <h3>VIP Plaza PWA</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="content__item content__item--mobile" style="background-image: url('/img/portfolio/update/caroline-bg.png')">
                                    <div>
                                        <img src="/img/portfolio/update/caroline.png" alt="">
                                        <h3>Caroline Inspection App</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="content__item content__item--mobile" style="background-image: url('/img/portfolio/update/mobile-hino-bg.png')">
                                    <div>
                                        <img src="/img/portfolio/update/mobile-weeo-testing.png" alt="WEEO Testing App">
                                        <h3>WEEO Testing App</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="content__item content__item--mobile" style="background-image: url('/img/portfolio/update/mobile-jba-inspection-bg.png')">
                                    <div>
                                        <img src="/img/portfolio/update/mobile-jba-inspection.png" alt="JBA Indonesia - Car Inspection App">
                                        <h3>JBA Indonesia - Car Inspection App</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="content__item content__item--mobile" style="background-image: url('/img/portfolio/update/mobile-sinarmas-bg.png')">
                                    <div>
                                        <img src="/img/portfolio/update/mobile-sinarmas.png" alt="">
                                        <h3>Sinarmas Career</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- <div class="container__">
                <div class="text-center our-portfolio">
                    <p class="title__description" style="margin-bottom: 15px; margin-top: 25px;">Contact us and we will
                        present to
                        you our previous portfolios
                        regarding development,
                        maintenance and operation. You can contact us from here:</p>
                    <a href="contact.php" class="btn btn-contact-us-black"
                        onclick="ga('send', 'event', 'Button-Hubungi-Logique-Portofolio', 'Action-Click', 'Button-Hubungi-Logique-Portofolio-Label');">
                        Contact us for LOGIQUE's portfolio
                    </a>
                </div>
            </div> -->

            <?php include './portfolio-links.php';?>

        </div>

        <?php include '../footer.php';?>
    </div>   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight-min.js">
    </script>
    <script>
    $('.same-height').matchHeight();
    $('.col-md-4.col-xs-6').matchHeight();


    $('.slider-other-client-container').slick({
        dots: false,
        infinite: true,
        speed: 300,

        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    // dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    adaptiveHeight: true
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    adaptiveHeight: true
                }
            }
        ]
    });
    $('.mobile-app-container').slick({
        dots: true,
        infinite: false,
        speed: 300,
        arrows: false,
        arrows: false,
        arrows: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        slickSetOption: true,
    });
    $('#PWA .btn-more-portfolio').on('click', function() {
        $('.mobile-app-container').resize();
    });
    </script>
</body>

</html>