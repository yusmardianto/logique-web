<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=3.0">
    <meta name="description" itemprop="description"
        content="LOGIQUE is always committed to providing the best Digital Marketing Campaign performance achievements for all of our clients and business partners">
    <meta name="keywords" content="website creation, web-system development, designing, printing, corporate site, landing page">
    <meta name="author" content="PT. Logique Digital Indonesia">
    <meta property="og:title" content="Portfolio | Digital Marketing Works | LOGIQUE Digital Indonesia">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Logique">
    <meta property="og:url" content="https://www.logique.co.id/en/portfolio.php">
    <meta property="og:image" content="https://www.logique.co.id/img/ogimg/portfolio.png">
    <meta property="og:description"
        content="LOGIQUE is always committed to providing the best Digital Marketing Campaign performance achievements for all of our clients and business partners">
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    
    <title>Portfolio | Digital Marketing Works | LOGIQUE Digital Indonesia</title>

    <link rel="canonical" href="https://www.logique.co.id/en/portfolio/digital-marketing.php" />
    
    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet"> 
    
    <!-- <link href="/css/style.css" rel="stylesheet"> -->
    <link href="/css/sidebar-update.css" rel="stylesheet"> 
    <link href="/css/newstyle.css" rel="stylesheet">
    <link href="/css/style-revamp.css" rel="stylesheet">
    <link href="/css/style-portfolio.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css" />
    <link href="/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
</head>

<body style="overflow-x: hidden">
    <div class="wrapper wrapper--update-design wrapper--update-design-font">

        <!-- NAVIGATION -->
        <?php 
            // $active option are home, about, portfolio, services, product, career, contact
            $active = 'portfolio';
            include($_SERVER['DOCUMENT_ROOT'].'/en/sidebar.php'); 
        ?>

        <!-- <div id="bgImg" class="others"><div class="img"></div></div> -->
        <!-- <div class="contain-video">
            <video poster="../img/video-img.png" id="bgvid" playsinline autoplay muted loop>
                <source src="../img/12377093.mp4" type="video/mp4">
            </video>
        </div>
        <div class="bg-white-opacity"></div> -->

        <?php 
            $lang = 'en';
            $en_link = '#';
            $id_link = '/portofolio/digital-marketing.php';
            $jp_link = '/jp/portfolio/digital-marketing.php';
            include($_SERVER['DOCUMENT_ROOT'].'/en/header.php'); 
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
                                        href="index.php"><span itemprop="name">Home</span></a>
                                    <meta itemprop="position" content="1" />
                                </li>
                                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="/en/portfolio.php"
                                        itemprop="item"><span itemprop="name">&nbsp;Portfolio</span></a>
                                    <meta itemprop="position" content="2" />
                                </li>
                                <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a
                                        itemprop="item"><span itemprop="name">&nbsp;Digital Marketing</span></a>
                                    <meta itemprop="position" content="2" />
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="container__ banner-detail__content">
                    <div class="row">
                        <div class="col-md-offset-1 col-md-7">
                            <div class="title"><h1>Digital Marketing Works</h1></div>
                            <p class="title__description" style="margin-left: 0;"><strong>LOGIQUE</strong> is always committed to providing the best Digital Marketing Campaign performance achievements for all of our clients and business partners. By applying high operational standards to ensure every optimization process is carried out with proper planning based on the actual data we analyze, all decisions made in the advertising campaign optimization process are made based on objective and validated data.</p>
                            <img src="/img/portfolio/bg-portfolio-detail-mobile.png" alt="" class="img-responsive visible-md visible-lg">
                        </div>
                    </div>
                </div>
            </section>

            <!-- List Card Portofolio -->
            <section id="portfolio_dm" class="portfolio-update__content">
                <div class="content-wrapper__">
                    <div class="container__">
                        <div class="content__wrapper">
                            <div class="flex__row">
                                <div class="col-md-4 col-sm-6 col-xs-12">                                
                                    <a href="/en/portfolio/digital-marketing/JBA-Indonesia.php">
                                        <div class="content__item content__item--dm" style="background-image: url('/img/portfolio/update/dm-jba-bg.png')" data-toggle="modal" data-target="#modal-jba">
                                            <img src="/img/portfolio/update/dm-jba.png" alt="">
                                            <h4>Real Estate - JBA</h4>
                                            <p>SEO | Website Maintenance | Google Ads | FB& IG Ads</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="content__item content__item--dm" style="background-image: url('/img/portfolio/update/dm-sumitomo-bg.png')" data-toggle="modal" data-target="#modal-sumitomo">
                                        <img src="/img/portfolio/update/dm-sumitomo.png" alt="">
                                        <h4>Sumitomo Heavy Industry (SHI)</h4>
                                        <p>SEO | Website Maintenance | Google Ads | FB& IG Ads</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="content__item content__item--dm" style="background-image: url('/img/portfolio/update/dm-tokoparts-bg.png')" data-toggle="modal" data-target="#modal-tokoparts">
                                        <img src="/img/portfolio/update/dm-tokoparts.png" alt="">
                                        <h4>E Commerce - Tokoparts</h4>
                                        <p>SEO | Website Maintenance</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="content__item content__item--dm" style="background-image: url('/img/portfolio/update/dm-bamboo-bg.png')" data-toggle="modal" data-target="#modal-greenbamboo">
                                        <img src="/img/portfolio/update/dm-bamboo.png" alt="">
                                        <h4>Real Estate - Bamboo</h4>
                                        <p>SEO | Website Maintenance | Google Ads | FB& IG Ads</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="content__item content__item--dm" style="background-image: url('/img/portfolio/update/dm-mirai-bg.png')" data-toggle="modal" data-target="#modal-mirai">
                                        <img src="/img/portfolio/update/dm-mirai.png" alt="">
                                        <h4>Real Estate - Hajime</h4>
                                        <p>SEO | Website Maintenance | Google Ads | FB&IG Ads</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="content__item content__item--dm" style="background-image: url('/img/portfolio/update/ishida-dm-portfolio.jpg')" data-toggle="modal" data-target="#modal-pilipili">
                                        <img src="/img/portfolio/update/dm-ishida-logo.png" alt="">
                                        <h4>Company Profile - Ishida</h4>
                                        <p>SEO | Website Maintenance</p>
                                    </div>
                                </div>                             
                            </div>
                        </div>
                    </div>
                </div>
            </section>

         
            <?php include './portfolio-links.php';?>

        </div>

        <?php include '../footer.php';?>
    </div>   
    
    <!--modal jba  -->
    <div class="modal modal-dm modal-jba fade" id="modal-jba" tabindex="-1" role="dialog" aria-labelledby="modal-jba">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <button class="btn-close-modal" data-dismiss="modal" aria-label="Close">
                    <img src="/img/portfolio/update/icon-close.png" alt="">
                </button>
                <div class="modal-body">
                    <div class="modal-body-header" style="background-image: url('/img/portfolio/update/bg-jba-modal-header.jpg');">
                        <p class="modal-dm-company">PT. JBA Indonesia</p>
                        <h3 class="modal-dm-title">Mengembangkan Brand Awareness dan Conversions Melalui Facebook Instagram dan Google Advertisement.</h3>
                        <p class="modal-dm-service">SEO | Website Maintenance | Google Ads | FB& IG Ads</p>
                    </div>
                    <div class="modal-section modal-body-client" style="background-image: url('/img/portfolio/update/bg-jba-modal-blue.jpg');">
                        <div class="flex__row">
                            <div class="col-lg-4 col-xs-12 modal-section-title-wrapper">
                                <h4 class="modal-section-title">CLIENT'S BACKGROUND</h4>
                            </div>
                            <div class="col-lg-8 col-xs-12">
                                <div class="section-content-wrapper">
                                    <p>Saat ini, JBA telah memiliki lebih dari 18 cabang, hub, dan pool di berbagai kota-kota besar di Indonesia. Dan, JBA akan terus melebarkan layanan dan bisnis lelangnya dengan rencana bisnis yang inovatif dan produktif. JBA juga mengadaptasi berbagai teknologi dan sistem komunikasi terkini untuk dapat memberikan yang terbaik bagi penitip kendaraan, pembeli kendaraan, dan masyarakat luas. JBA akan terus berinovasi untuk mempertahankan layanan dan bisnis lelang yang prima serta tetap menjadi yang terdepan di Indonesia.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-section modal-body-approach">
                        <div class="flex__row">
                            <div class="col-lg-4 col-xs-12 modal-section-title-wrapper">
                                <h4 class="modal-section-title">APPROACHING STRATEGY</h4>
                            </div>
                            <div class="col-lg-8 col-xs-12">
                                <div class="section-content-wrapper">
                                    <p>Logique membuat Advertisement Campaign dengan Channels & Placements yang ditetapkan berdasarkan produk yang ditawarkan dan Audience/Customer potential, dengan:</p>
                                    <ul class="approach-list">
                                        <li><p>Secara efektif membuat kata kunci dan iklan yang mencakup keseluruhan produk pada website.</p></li>
                                        <li><p>Membuat iklan yang lebih relevan yang memungkinkan meningkatkan Skor Kualitas iklan.</p></li>
                                        <li><p>Membatasi jumlah Audience dengan kualitas yang rendah dengan memantau secara berkala informasi penargetan dan membuat Group Audience yang terkontrol.</p></li>
                                        <li><p>Mengendalikan penguasaan market lelang otomotif melalui Advertisement Campaign, dengan menjaga harga bid CPC dan kualitas Iklan.</p></li>
                                        <li><p>Secara aktif bekerja sama dengan team branding JBA untuk memastikan setiap Campaign berjalan sesuai dengan target dan objektif yang ingin dicapai.</p></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-section modal-body-result" style="background-image: url('/img/portfolio/update/bg-jba-modal-result.jpg');">
                        <div class="flex__row">
                            <div class="col-lg-4 col-xs-12 modal-section-title-wrapper">
                                <h4 class="modal-section-title">THE RESULT</h4>
                                <p class="modal-result-text">Dengan strategy yang Logique terapkan, kami berhasil membuat iklan yang disesuaikan dengan relevansi tinggi yang ditautkan langsung ke halaman produk atau kategori.</p>
                            </div>
                            <div class="col-lg-8 col-xs-12">
                                <div class="section-content-wrapper">
                                    <div class="flex__row">
                                        <div class="col-md-6 col-xs-12">
                                            <div class="result__box">
                                                <h5>+8%</h5>
                                                <p>Conversion Rate</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="result__box">
                                                <h5>+15%</h5>
                                                <p>Cost Per Click (CPC)</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="result__box">
                                                <h5>+10%</h5>
                                                <p>Conversions</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="result__box">
                                                <h5>+43%</h5>
                                                <p>CTR</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-section modal-body-takeaway" style="background-image: url('/img/portfolio/update/bg-jba-modal-blue.jpg');">
                        <h4>Key Takeaway</h4>
                        <p>Tingginya permintaan akan kebutuhan property di Indonesia serta tingginya kompetisi market menjadi tantangan yang mendorong team Logique terus berinovasi dan mengembangkan pendekatan strategy yang unik untuk mampu memberikan kesan kepada setiap calon konsumen tertarik untuk melakukan booking maupun interaksi.</p>
                    </div>
                </div>
            </div>
        </div>
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