<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=3.0">
    <meta name="description" itemprop="description"
        content="LOGIQUE telah membantu banyak klien Jepang, Internasional, maupun Lokal dalam pembuatan website, aplikasi berbasis web, mobile app, dan penetration test sebagai solusi atau transformasi digital. Portofolio terkait layanan kami dapat Anda lihat di sini.">
    <meta name="keywords"
        content="web design, design coding, pengembangan web, jasa pembuatan website, pengembangan aplikasi mobile, database mysql, node js, sistem crm, payment gateway, mobile optimization, page creation, sistem lelang online">
    <meta name="author" content="PT. Logique Digital Indonesia">
    <meta property="og:title" content="Portofolio Pembuatan Website, Aplikasi Berbasis Web, dan Mobile App | LOGIQUE">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Logique">
    <meta property="og:url" content="https://www.logique.co.id/portfolio.php">
    <meta property="og:image" content="https://www.logique.co.id/img/ogimg/portfolio.png">
    <meta property="og:description"
        content="LOGIQUE telah membantu banyak klien Jepang, Internasional, maupun Lokal dalam pembuatan website, aplikasi berbasis web, mobile app, dan penetration test sebagai solusi atau transformasi digital. Portofolio terkait layanan kami dapat Anda lihat di sini.">
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <title>Portofolio Pembuatan Website, Aplikasi Berbasis Web, dan Mobile App | LOGIQUE</title>

    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <link href="/css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css" />
    <link href="/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">

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

<body style="overflow-x: hidden">

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
        <button type="button" class="navbar-toggle collapsed navbar-toggle--update-design" aria-label="navbar-toggle"
            data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar first"></span>
            <span class="icon-bar second"></span>
            <span class="icon-bar third"></span>
        </button>
        <div class="collapse navbar-collapse" id="myNavbar">
            <div class="backdrop-test"></div>
            <div class="logique-nav logique-nav--update">
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
                    <div class="text-center active">
                        <a href="#">
                            <div class="img-portfolio"></div>
                            Portfolio
                        </a>
                    </div>
                    <div class="text-center">
                        <a href="/layanan.php">
                            <div class="img-services"></div>
                            Layanan
                        </a>
                    </div>
                    <div class="text-center">
                        <a href="/produk.php">
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
                        <a href="https://www.logique.co.id/blog/" target="_blank" rel="noreferrer">
                            <div class="img-blog"></div>
                            Blog
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- NAVIGATION -->

        <!-- <div id="bgImg" class="others"><div class="img"></div></div> -->
        <!-- <div class="contain-video">
            <video poster="img/video-img.png" id="bgvid" playsinline autoplay muted loop>
                <source src="img/12377093.mp4" type="video/mp4">
            </video>
        </div>
        <div class="bg-white-opacity"></div> -->

        <div class="container-fluid">
            <div class="lang-logo--update-design">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-offset-1 col-sm-11">
                            <div class="container">
                                <a href="index.php"><img src="/img/logo.png" alt="Jasa Pembuatan Website Logique Digital Indonesia" class="img-responsive logo--update-design" /></a>
                                <ul class="list-inline">
                                    <li><a href="/en/portfolio/mobile-app.php">EN</a></li>
                                    <li class="active"><a href="#">ID</a></li>
                                    <li><a href="/jp/portfolio/mobile-app.php">JP</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
                                        href="index.php"><span itemprop="name">Home</span></a>
                                    <meta itemprop="position" content="1" />
                                </li>
                                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="/portofolio.php"
                                        itemprop="item"><span itemprop="name">&nbsp;Portofolio</span></a>
                                    <meta itemprop="position" content="2" />
                                </li>
                                <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a
                                        itemprop="item"><span itemprop="name">&nbsp;Mobile App</span></a>
                                    <meta itemprop="position" content="2" />
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="container__ banner-detail__content">
                    <div class="row">
                        <div class="col-md-offset-1 col-md-7">
                            <div class="title"><h1>Mobile App Works</h1></div>
                            <p class="title__description" style="margin-left: 0;"><strong>LOGIQUE</strong> menjadi perusahaan pengembang aplikasi mobile untuk beragam sistem operasi mulai dari Android, iOS, hingga Hybrid. Dengan solusi PWA (Teknologi Web Progresif) dan <strong>LOGIQUE</strong> kini telah berhasil membuktikan hasil kerja yang nyata dan memberikan pelayanan yang memuaskan untuk banyak klien dengan skala bisnis nasional hingga internasional.</p>
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