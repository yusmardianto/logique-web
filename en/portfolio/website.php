<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=3.0">
    <meta name="description" itemprop="description"
        content="LOGIQUE has developed many Websites, Systems and Apps, and delivered them successfully to our clients. Below are some of our Web creation portfolio.">
    <meta name="keywords" content="website creation, web-system development, designing, printing, corporate site, landing page">
    <meta name="author" content="PT. Logique Digital Indonesia">
    <meta property="og:title" content="Portfolio | Website Creation Works | LOGIQUE Digital Indonesia">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Logique">
    <meta property="og:url" content="https://www.logique.co.id/en/portfolio.php">
    <meta property="og:image" content="https://www.logique.co.id/img/ogimg/portfolio.png">
    <meta property="og:description"
        content="LOGIQUE has developed many Websites, Systems and Apps, and delivered them successfully to our clients. Below are some of our Web creation portfolio.">
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    
    <title>Portfolio | Website Creation Works | LOGIQUE Digital Indonesia</title>

    <link rel="canonical" href="https://www.logique.co.id/en/portfolio/website.php" />
    
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
            $id_link = '/portofolio/website.php';
            $jp_link = '/jp/portfolio/website.php';
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
                                        itemprop="item"><span itemprop="name">&nbsp;Website</span></a>
                                    <meta itemprop="position" content="2" />
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="container__ banner-detail__content">
                    <div class="row">
                        <div class="col-md-offset-1 col-md-7">
                            <div class="title"><h1>Website Creation Works</h1></div>
                            <p class="title__description" style="margin-left: 0;"><strong>LOGIQUE</strong> has developed many Websites, Systems and Apps, and delivered them successfully to our clients. Below are some of our Web creation portfolio.</p>
                            <picture>
                                <source srcset="/img/portfolio/bg-portfolio-detail-website.webp" type="image/webp">
                                <img src="/img/portfolio/bg-portfolio-detail-website.png" alt="" class="img-responsive visible-md visible-lg">
                            </picture>
                        </div>
                    </div>
                </div>
            </section>

            <section id="portofolio_website" class="portfolio-update__content">
                <div class="container__">
                    <div class="content__wrapper">
                        <div class="flex__row"> 
                        <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="#" data-toggle="modal" data-target="#modal_aia" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-aia-premiere.jpg" class="img-responsive" alt="AIA Premier Academy">
                                    <h3>AIA Premier Academy</h3>
                                    <ul class="list-unstyled">
                                        <li>Website Creation (Design | Coding)</li>
                                        <li>Static Web, Animation, Visual, Income Calculator, Graph, Insurance Agent Training</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="#" data-toggle="modal" data-target="#modal_panin" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-panin.jpg" class="img-responsive" alt="">
                                    <h3>Panin Life Dai-ichi</h3>
                                    <ul class="list-unstyled">
                                        <li>E-Commerce Dev (Design | Coding | CMS | Payment)</li>
                                        <li>CMS, secure E-Commerce, Financial, Insurance</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="http://www.shinkenjuku.co.id/" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/benesse.jpg" class="img-responsive" alt="">
                                    <h3>Benesse (Shinkenjuku.co.id)</h3>
                                    <ul class="list-unstyled">
                                        <li>Web Design (Design | Development | Payment Gateway | Server Management)</li>
                                        <li>BtoC, E-Learning, Education</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://www.jtrustbank.co.id/" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/j-trust.jpg" class="img-responsive" alt="">
                                    <h3>JTrust Bank</h3>
                                    <ul class="list-unstyled">
                                        <li>Web Re-Design / Growth hack (Design | Coding | Maintenance) </li>
                                        <li>Mobile Optimized, Multi-language, CMS, Bank</li>
                                    </ul>
                                </a>
                            </div>
                            <!-- <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://www.auksi.co.id/beranda" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/auksi.jpg" class="img-responsive" alt="" loading="lazy" >
                                    <h3>AUKSI</h3>
                                    <ul class="list-unstyled">
                                        <li>Development & Operasion WEB (Design | Sistem | CMS | Operation)</li>
                                        <li>CMS, Website, Lelang Online, Auction, Inegrasi API</li>
                                    </ul>
                                </a>
                            </div> -->
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                    <a class="content__item" href="https://kiic.co.id" target="_blank" rel="noreferrer">
                                        <img src="/img/portfolio/kiic.jpg" class="img-responsive" alt="" loading="lazy" >
                                        <h3>KIIC</h3>
                                        <ul class="list-unstyled">
                                            <li>Web Re-make (Design | Coding | Maintenance | SEO)</li>
                                            <li>BtoB Web, Multi-language, CMS, Industrial Park</li>
                                        </ul>
                                    </a>
                                </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://mobirent.id/" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/mobirent.jpg" class="img-responsive" alt="">
                                    <h3>Mobirent</h3>
                                    <ul class="list-unstyled">
                                        <li>Web Development (Design | Coding)</li>
                                        <li>Corporate Web, Service Web, Automotive, Car Rental</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="#" data-toggle="modal" data-target="#modal_jba" rel="noreferrer">
                                    <img src="/img/portfolio/update/jba.jpg" class="img-responsive" alt="">
                                    <h3>JBA Indonesia</h3>
                                    <ul class="list-unstyled">
                                        <li>Web Dev & Operation (Design | Custom made CMS | Maintenance)</li>
                                        <li>Enterprise Web, DB-connected, Realtime bidding, Automotive, Car Auction</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="http://www.jnto.or.id/" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/jnto.jpg" class="img-responsive" alt="">
                                    <h3>JNTO Jakarta</h3>
                                    <ul class="list-unstyled">
                                        <li>Web Re-make & Operation (Design | Operation | SEO)</li>
                                        <li>Japan National Tourism Organization, Travel, Public Sector</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://jcinema2018.id/" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-film.jpg" class="img-responsive" alt="Japanese Film Festival">
                                    <h3>Japanese Film Festival</h3>
                                    <ul class="list-unstyled">
                                        <li>Web Creation & Server Management (Design | Coding) </li>
                                    </ul>
                                </a>
                            </div>
                            
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="http://sentraya.id/" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-sentraya.jpg" class="img-responsive" alt="Menara Sentraya">
                                    <h3>Menara Sentraya</h3>
                                    <ul class="list-unstyled">
                                        <li>Web Development (Design | Coding | CMS)</li>
                                        <li>Custom-made CMS, PHP, Building & Property Management</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="http://jaif.asean.org/" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-jaif.jpg" class="img-responsive" alt="Japan Asean Integration Fund">
                                    <h3>Japan Asean Integration Fund</h3>
                                    <ul class="list-unstyled">
                                        <li>Web Dev & Operation (Design | Coding | CMS)</li>
                                        <li>CSR, ASEAN countries, Public sector</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="content__item">
                                    <img src="/img/portfolio/update/web-shinoken.jpg" class="img-responsive" alt="Shinoken Asset Management">
                                    <h3>Shinoken Asset Management</h3>
                                    <ul class="list-unstyled">
                                        <li>Web Design & Dev (Design | Coding | AWS)</li>
                                        <li>Multi-language, Responsive, Real Estate, Asset Management</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="http://hoyu.co.id/" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-hoyu.jpg" class="img-responsive" alt="Hoyu Indonesia">
                                    <h3>Hoyu Indonesia</h3>
                                    <ul class="list-unstyled">
                                        <li>Web Dev & Operation (Design | Coding | Maintenance)</li>
                                        <li>Corporate Web, Responsive, Beauty, Hair care Product</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://shi-indonesia.co.id/" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-shi.jpg" class="img-responsive" alt="Sumitomo Heavy">
                                    <h3>Sumitomo Heavy</h3>
                                    <ul class="list-unstyled">
                                        <li>Web Dev & Operation (Design | Coding | CMS)</li>
                                        <li>Mobile Optimized, CMS, Corporate Web, Heavy Machinery</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="content__item">
                                    <img src="/img/portfolio/update/web-caroline.jpg" class="img-responsive" alt="Caroline">
                                    <h3>Caroline</h3>
                                    <ul class="list-unstyled">
                                        <li>Car Market Place Development (Design | System Development)</li>
                                        <li>Web System, DB System, Market Place, Automotive, Web Service</li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="http://maisonderes.com/" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-mdr.jpg" class="img-responsive" alt="Maison de Res (Condominium Portal)">
                                    <h3>Maison de Res</h3>
                                    <ul class="list-unstyled">
                                        <li>Web & system development (Design | System | DB | Content Creation)</li>
                                        <li>CMS, DB-Web, Property Market Place, Indonesian luxury condominium portal, Web Service</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="http://www.zuttoride.id/" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-zutto.jpg" class="img-responsive" alt="ZuttoRide Indonesia">
                                    <h3>ZuttoRide Indonesia</h3>
                                    <ul class="list-unstyled">
                                        <li>WEB Dev & Operation (Design | Coding | Maintenance| WEB Server)</li>
                                        <li>Multi-language, Mobile, motor-bike service</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://www.ikeuchi.id/lp/eng/" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-ikeuchi.jpg" class="img-responsive" alt="Ikeuchi Indonesia">
                                    <h3>Ikeuchi Indonesia</h3>
                                    <ul class="list-unstyled">
                                        <li>WEB Dev (Design | Coding)</li>
                                        <li>Multi-language, Mobile, Manufacture</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="http://www.moresco.co.id/" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-moresco.jpg" class="img-responsive" alt="MORESCO INDONESIA">
                                    <h3>MORESCO INDONESIA</h3>
                                    <ul class="list-unstyled">
                                        <li>WEB Dev (Design | Coding | Maintenance | WEB Server)</li>
                                        <li>Multi-language, Mobile, Manufacture</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12"> 
                                <div class="content__item">
                                    <img src="/img/portfolio/update/fuji-seimitsu.jpg" class="img-responsive" alt="FUJI SEIMITSU INDONESIA">
                                    <h3>FUJI SEIMITSU INDONESIA</h3>
                                    <ul class="list-unstyled">
                                        <li>WEB Development(Design | Coding | WEB Server)</li>
                                        <li>Multi-language, Mobile, Manufaktur</li>
                                    </ul> 
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="http://trendpot-recruit.asia/index.php" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-trendpot.jpg" alt="Digital Marketing Indonesia" class="img-responsive center-block">
                                    <h3>TRENDPOT</h3>
                                    <ul class="list-unstyled">
                                        <li>Pengoperasian WEB & Operasi (Design | Coding | Operation)</li>
                                        <li>Mobile, Keamanan WEB, Publik</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="http://www.kumomiland.co.id/" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-kumomiland.jpg" alt="KUMOMI LAND INDONESIA"
                                        class="img-responsive center-block">
                                    <h3>KUMOMI LAND INDONESIA</h3>
                                    <ul class="list-unstyled">
                                        <li>WEB Dev (Design | Coding | Maintenance)</li>
                                        <li>Mobile, Multi-Language, Wordpress, Blog, RealEstate</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="content__item">
                                    <img src="/img/portfolio/update/web-wantjp.jpg" class="img-responsive" alt="Want.jp">
                                    <h3>Want.jp</h3>
                                    <ul class="list-unstyled">
                                        <li>E-Commerce Development (PWA | ReactJS | NodeJS)</li>
                                        <li>Mobile Optimized PWA, Cross Border E-Commerce</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://banzaihobby.com/" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-banzai-hobby.jpg" class="img-responsive" alt="Banzai Hobby">
                                    <h3>Banzai Hobby</h3>
                                    <ul class="list-unstyled">
                                        <li>Server Migration to AWS (Migration | Hosting | AWS)</li>
                                        <li>E-Commerce, Zen Cart</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://unitedconcepts.com/" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-royal-amanda.jpg" class="img-responsive" alt="Royal Armada">
                                    <h3>Royal Armada</h3>
                                    <ul class="list-unstyled">
                                        <li>E-Commerce (Design | Coding)</li>
                                        <li>Shopping EC, apparel</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a href="https://klikhoreca.com/" target="_blank" class="content__item">
                                    <img src="/img/portfolio/update/web-klikhoreca.jpg" class="img-responsive" alt="Klikhoreca">
                                    <h3>Klikhoreca</h3>
                                    <ul class="list-unstyled">
                                        <li>E-Commerce Dev (Design | System Development | Payment Gateway) </li>
                                        <li>PWA, NextJS Framework, E-Commerce, Retail</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="content__item">
                                    <img src="/img/portfolio/update/web-aia-berbagi.jpg" class="img-responsive" alt="AIA Berbagi">
                                    <h3>AIA Berbagi</h3>
                                    <ul class="list-unstyled">
                                        <li>Website Creation (Coding | API Integration)</li>
                                        <li>Validation, Form Submission, Microsite, Free PA, CSR</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="content__item">
                                    <img src="/img/portfolio/update/web-aia-conservation.jpg" class="img-responsive" alt="AIA Conservation">
                                    <h3>AIA Conservation</h3>
                                    <ul class="list-unstyled">
                                        <li>AIA Conservation Website Creation (Design | Coding)</li>
                                        <li>Validation, Form Submission, Multiple User Journey, Microsite, Digital Procedure, Adobe Form</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="content__item">
                                    <picture>
                                        <source srcset="/img/portfolio/update/web-panin.webp" type="image/webp">
                                        <img src="/img/portfolio/update/web-panin.jpg" class="img-responsive" alt="Panin Dai-ichi">
                                    </picture>
                                    <h3>Panin Dai-ichi</h3>
                                    <ul class="list-unstyled">
                                        <li>E-Commerce System Extension (CMS Development | Dynamic Insurance Products)</li>
                                        <li>Laravel, Insurance </li>
                                    </ul>
                                </div>
                            </div> -->
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://prolinefinance.co.id/" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-proline.jpg" class="img-responsive" alt="PROLINE FINANCE">
                                    <h3>PROLINE FINANCE</h3>
                                    <ul class="list-unstyled">
                                        <li>WEB Development (Design | Coding | CMS)</li>
                                        <li>CMS, Mobile, OJK, Finance</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://premium-garansi.co.id/" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-premiumgaransi.jpg" class="img-responsive" alt="Premium Garansi">
                                    <h3>Premium-Garansi.co.id</h3>
                                    <ul class="list-unstyled">
                                        <li>Web Page Creation (Coding | Integrasi CMS)</li>
                                        <li>Mobile Optimized, CMS, Corporate web</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="content__item">
                                    <img src="/img/portfolio/update/web-ligohome.jpg" class="img-responsive" alt="LIGO Home">
                                    <h3>LIGO-Home</h3>
                                    <ul class="list-unstyled">
                                        <li>Web Page Creation (Design | Coding | Integrasi CMS)</li>
                                        <li>Mobile Optimized, CMS, Corporate web</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a href="https://indonesea.id/" target="_blank" class="content__item">
                                    <img src="/img/portfolio/update/web-indonesea.jpg" class="img-responsive" alt="Indonesea">
                                    <h3>Indonesea</h3>
                                    <ul class="list-unstyled">
                                        <li>Web Development (Design | CMS | Coding)</li>
                                        <li>CMS, Booking system, Travel & Leisure, BtoC Service</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a href="https://gakken-jakarta.com/" target="_blank" class="content__item">
                                    <img src="/img/portfolio/update/web-gakken.jpg" class="img-responsive" alt="Gakken Jakata">
                                    <h3>Gakken Jakarta</h3>
                                    <ul class="list-unstyled">
                                        <li>(Coding | Maintenance | Server Operation)</li>
                                        <li>Corporate & Service Web, Education</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a href="https://benefit-one.co.id/" target="_blank" class="content__item">
                                    <img src="/img/portfolio/update/web-benefit-one.jpg" class="img-responsive" alt="Green Bamboo Terrace">
                                    <h3>Benefit One Website Remake</h3>
                                    <ul class="list-unstyled">
                                        <li>Web Re-make (Design | CMS | Coding)</li>
                                        <li>CMS, Mobile Optimized, BtoB Service</li>
                                    </ul>
                                </a>
                            </div>
                            
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a href="https://tokoparts.com/home" target="_blank" class="content__item">
                                    <img src="/img/portfolio/update/tokoparts.png" class="img-responsive" alt="Benefit One">
                                    <h3>TOKOPARTS</h3>
                                        <ul class="list-unstyled">
                                        <li>E-Commerce Dev (Design | System Development | Payment Gateway) </li>
                                        <li>, E-Commerce, Retail, Spareparts</li>
                                    </ul> 
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a href="https://thehealthybelly.co/" target="_blank" class="content__item">
                                    <img src="/img/portfolio/update/jba-philipine.jpg" class="img-responsive" alt="Benefit One">
                                    <h3>JBA Philippines</h3>
                                    <ul class="list-unstyled">
                                        <li>WEB development & Operation (Design | Sistem | CMS | Operation | AWS)</li>
                                        <li>Lelang online, WEB-Perusahaan, DB-WEB, Keamanan WEB, Otomotif, Finansial</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a href="https://thehealthybelly.co/" target="_blank" class="content__item">
                                    <img src="/img/portfolio/update/thehealthybelly.jpg" class="img-responsive" alt="Benefit One">
                                    <h3>The Healthy Belly</h3>
                                        <ul class="list-unstyled">
                                        <li>Web Page Creation (Coding | Integrasi CMS)</li>
                                        <li>CMS, Membership, Food, Recipes</li>
                                    </ul>  
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://www.gakken-classroom-global.com/" target="_blank">
                                    <img src="/img/portfolio/update/gakken.png" class="img-responsive" alt="">
                                    <h3>Gakken Classroom Global</h3>
                                    <ul class="list-unstyled">
                                        <li>Gakken Classroom Global Web development (Coding | Maintenance)</li>
                                        <li>Multi-Language Web, Responsive, Education</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a href="https://valuemax.co.id/" target="_blank" class="content__item">
                                    <img src="/img/portfolio/update/gadai-valuemax.jpg" class="img-responsive" alt="Gadai ValueMax">
                                    <h3>Gadai ValueMax Indonesia</h3>
                                        <ul class="list-unstyled">
                                        <li>Corporate Web Development (Design | Coding)</li>
                                        <li>Responsive Design, Calculator, Inquiry Form, Pawn Business</li>
                                    </ul>  
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a href="https://siapvaksinbarengaia.com/" target="_blank" class="content__item">
                                    <img src="/img/portfolio/update/siap-vaksin-aia.jpg" class="img-responsive" alt="Siap Vaksin Bareng AIA">
                                    <h3>Siap Vaksin Bareng AIA</h3>
                                        <ul class="list-unstyled">
                                        <li>Microsite Creation (Design | Coding | Hosting | WhatsApp Integration)</li>
                                        <li>Mobile Optimized, Campaign Page, E-Policy, Insurance</li>
                                    </ul>  
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a href="https://www.ykkap.co.id/" target="_blank" class="content__item">
                                    <img src="/img/portfolio/update/ykkap.jpg" class="img-responsive" alt="YKKAP">
                                    <h3>YKKAP</h3>
                                        <ul class="list-unstyled">
                                        <li>Web Revamp & Operation (Revamp | Social Media Operation | Digital Marketing)</li>
                                        <li>BtoB, CMS, Manufacturer</li>
                                    </ul>  
                                </a>
                            </div>
                        </div>
                        <!--- other -->
                        <h3 style="margin-bottom:20px; font-size:20px; font-weight:bold; border-top:1px solid #ececec;padding-top:20px">Others</h3>
                        <div class="flex__row">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://www.jnto.or.id/berpetualangdihokkaido" target="_blank" rel="noreferrer"> 
                                    <h3>JNTO Campaign Page</h3>
                                    <ul class="list-unstyled">
                                        <li>HTML/CSS Coding (Coding)</li>
                                        <li>Mobile Optimized, Campaign page</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://jjc.or.id/" target="_blank" rel="noreferrer">
                                    <h3>Jakarta Japan Club</h3>
                                    <ul class="list-unstyled">
                                        <li>HTML/CSS Coding (Coding | CMS)</li>
                                        <li>Website Creation, Maintenance, Company organization and Club</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="content__item"> 
                                    <h3>ASEAN (ARF)</h3>
                                    <ul class="list-unstyled">
                                        <li>WEB Development (Design | Coding | CMS)</li>
                                        <li>Mobile Optimized, Wordpress, Public</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="content__item"> 
                                    <h3>ASEAN (Legal)</h3>
                                    <ul class="list-unstyled">
                                        <li>Web Remake Development (Design | Coding | CMS Integration)</li>
                                        <li>Public & Private Document Access, Custom Wordpress, International Organisation</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://afcwp.asean.org/" target="_blank" rel="noreferrer"> 
                                    <h3>ASEAN (Financial)</h3>
                                    <ul class="list-unstyled">
                                        <li>Web Remake Development (Design | Coding | CMS Integration)</li>
                                        <li>Custom Wordpress, Public & Private Document Access, Multi Level Authors, International Organisation</li>
                                    </ul>
                                </a>
                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="http://jjs.or.id/" target="_blank" rel="noreferrer"> 
                                    <h3>Jakarta Japanese School</h3>
                                    <ul class="list-unstyled">
                                        <li>WEB Dev & Operation (Design | Coding | Wordpress | Operation)</li>
                                        <li>Japanese WEB, Blog, Mobile, Application Form, School</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://cikarang-japanese-school.com/" target="_blank" rel="noreferrer"> 
                                    <h3>Cikarang Japanese School</h3>
                                    <ul class="list-unstyled">
                                        <li>WEB Dev & Operation (Design | Coding | Wordpress | AWS Operation)</li>
                                        <li>Japanese WEB, Blog, Mobile, Application Form, School</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="content__item"> 
                                    <h3>ECCJ</h3>
                                    <ul class="list-unstyled">
                                        <li>LP and application form Creation (Design | programming)</li>
                                        <li>Mobile Optimized, Application From, Event</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://www.60jpid.com/" target="_blank" rel="noreferrer"> 
                                    <h3>60<sup>th</sup> Anniversary Japan-Indonesia</h3>
                                    <ul class="list-unstyled">
                                        <li> WEB Operation and WEB Development (Design | Coding | Content Creation |
                                    Operation)</li>
                                        <li>CMS, Multi-Language, Mobile, Web Security, Public</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://www.60jpid.com/music-festival.php" target="_blank" rel="noreferrer"> 
                                    <h3>Music Festival Landing Page</h3>
                                    <ul class="list-unstyled">
                                        <li>Landing Page Creation (Design | Coding | Digital AD)</li>
                                        <li>Mobile Optimized, Multi-bahasa, Event</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://www.jjs.or.id/50thanniversary" target="_blank" rel="noreferrer"> 
                                    <h3>JJS 50 years special LP</h3>
                                    <ul class="list-unstyled">
                                        <li>LP Creation (Bootstrap | Content Creation)</li>
                                        <li>LP, Mobile Optimized, Education, School</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://lifenesia.com" target="_blank" rel="noreferrer"> 
                                    <h3>Lifenesia</h3>
                                    <ul class="list-unstyled">
                                        <li>WEB Hosting (Coding | Integrasi CMS)</li>
                                        <li>Mobile Optimized, CMS, News Portal</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://timscorp.co.id/en" target="_blank" rel="noreferrer">
                                    <h3>PT. TOYOTA ENTERPRISE INDONESIA MANAGEMENT SERVICE</h3>
                                    <ul class="list-unstyled">
                                        <li>Web Development (Design | CMS | Coding)</li>
                                        <li>Customized CMS, Mobile Optimized, Corporate Web, Real
                                        Estate Info Web</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="http://warasahalal.com/" target="_blank" rel="noreferrer"> 
                                    <h3>WARASA</h3>
                                    <ul class="list-unstyled">
                                        <li>WEB Development (Design | Coding | AWS)</li>
                                        <li>Mobile Optimized, Multi-bahasa, Food</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://frangipanibalispa.com/" target="_blank" rel="noreferrer"> 
                                    <h3>Frangipani</h3>
                                    <ul class="list-unstyled">
                                        <li>AMP Development (Design | AMP Coding)</li>
                                        <li>AMP, Mobile Optimization, Beauty, SPA</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="content__item"> 
                                    <h3>Salon De Res</h3>
                                    <ul class="list-unstyled">
                                        <li>WEB Dev (Design | Coding)</li>
                                        <li>Mobile, Multi-Language, Beauty</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="http://j-golfacademy.com/" target="_blank" rel="noreferrer"> 
                                    <h3>Jakarta Golf Academy</h3>
                                    <ul class="list-unstyled">
                                        <li>WEB Dev & Operation (Design | Coding | Operation)</li>
                                        <li>Mobile, Online Order, Sport</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="http://nlecnihongo.com/" target="_blank" rel="noreferrer"> 
                                    <h3>NLEC</h3>
                                    <ul class="list-unstyled">
                                        <li>E-Learning Web Development (Design | CMS | PWA)</li>
                                        <li>PWA Development, Mobile Optimization, E-Learning</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://hmw-rehab.com/en" target="_blank" rel="noreferrer"> 
                                    <h3>HMW Rehabilitation Clinic</h3>
                                    <ul class="list-unstyled">
                                        <li>Web Creation (Design | CMS | Coding)</li>
                                        <li>Customized CMS, Mobile Optimized, Corporate Web, Medical Service Web</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://wkvetter.com/" target="_blank" rel="noreferrer"> 
                                    <h3>Vetter</h3>
                                    <ul class="list-unstyled">
                                        <li>Web Bulletin board Development (Design | Coding | Integrasi CMS)</li>
                                        <li>Bulletin board, CMS, Community Web, Media, Vietnum</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://sibad.id/id" target="_blank" rel="noreferrer"> 
                                    <h3>Sibad.id</h3>
                                    <ul class="list-unstyled">
                                        <li>Web Re-Develop (Cloud Server Migration | Re-build | Integration with a Payment Gateway)</li>
                                        <li>Member System, Fan Club Subscription System, Entertainment</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="content__item"> 
                                    <h3>Ishida</h3>
                                    <ul class="list-unstyled">
                                        <li>Web Development (Design | CMS | Coding)</li>
                                        <li>CMS, Product Search, Manufacturer, BtoB Service</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="content__item"> 
                                    <h3>Sumitomo Kenki</h3>
                                    <ul class="list-unstyled">
                                        <li>Web Front End Development (Coding | Integrasi CMS)</li>
                                        <li>Mobile Optimized, CMS, Corporate web, Construction</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="content__item"> 
                                    <h3>Sumitomo Forestry LP</h3>
                                    <ul class="list-unstyled">
                                        <li>Landing Page Creation (Design | Coding)</li>
                                        <li>Mobile, Campaign</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://hajime-indonesia.co.id/about/" target="_blank" rel="noreferrer"> 
                                    <h3>Hajime Indonesia</h3>
                                    <ul class="list-unstyled">
                                        <li>WEB Dev & Operation (Design | Coding | Operation | WEB Server)</li>
                                        <li>Multi-language, Mobile, AWS, Real Estate</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://www.bambootajur.com/" target="_blank" rel="noreferrer"> 
                                    <h3>Green Bamboo</h3>
                                    <ul class="list-unstyled">
                                        <li>Web Re-Design (Design | CMS | Coding)</li>
                                        <li>WordPress, Mobile Optimized, Real Estate Web</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://opuspark.co.id/" target="_blank" rel="noreferrer">
                                    <h3>Opus Park</h3>
                                    <ul class="list-unstyled">
                                        <li>WEB Operation (PDCA | SEO | AWS)</li>
                                        <li>Mobile Optimized, O2O, Properti</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a href="https://www.bambootajur.com/" target="_blank" class="content__item"> 
                                    <h3>Green Bamboo Terrace</h3>
                                    <ul class="list-unstyled">
                                        <li>(Design | Coding | Digital Marketing)</li>
                                        <li>Conversion-oriented, Real Estate</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://grahamirai.co.id/" target="_blank" rel="noreferrer"> 
                                    <h3>Graha Mirai</h3>
                                    <ul class="list-unstyled">
                                        <li>Web Design (Design | Coding | Maintenance)</li>
                                        <li>Mobile Optimized, Service Web, Real Estate</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="http://www.tsubame-jltc.com/" target="_blank" rel="noreferrer"> 
                                    <h3>LPK Tsubame Japanese Learning Center</h3>
                                    <ul class="list-unstyled">
                                        <li>Web Revamp (Re-Design | Coding | Integrasi CMS)</li>
                                        <li>Mobile Optimized, Service web, Education</li>
                                    </ul>
                                </a>
                            </div>  
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://swara.tunaiku.com/" target="_blank" rel="noreferrer"> 
                                    <h3>Amar Bank</h3>
                                    <ul class="list-unstyled">
                                        <li>Web Remake Development (Design | Coding | Integrasi CMS) </li>
                                        <li>Wordpress, Corporate web, Bank</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="content__item"> 
                                    <h3>Pertamina</h3>
                                    <ul class="list-unstyled">
                                        <li>UI / UX Design (Design | HTML/CSS)</li>
                                        <li>Training, E-Learning, Pertamina</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://m-pas.org/" target="_blank" rel="noreferrer"> 
                                    <h3>MPAS</h3>
                                    <ul class="list-unstyled">
                                        <li>Web Front End Development (Design | Coding | Integrasi Back-End)</li>
                                        <li>Search System, CMS, Medical Media</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://scskidn.com/" target="_blank" rel="noreferrer"> 
                                    <h3>SCSK</h3>
                                    <ul class="list-unstyled">
                                        <li>Web Creation (Design | Coding | Maintenance)</li>
                                        <li>Quick Built, Corporate Web, IT Service</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://weeo.com/" target="_blank" rel="noreferrer"> 
                                    <h3>Weeo</h3>
                                    <ul class="list-unstyled">
                                        <li>Web Design (Design | Coding | Maintenance)</li>
                                        <li>Mobile Optimized, Corporate Web, IoT Service</li>
                                    </ul>
                                </a>
                            </div> 
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://www.kbrprime.id/" target="_blank" rel="noreferrer"> 
                                    <h3>KBR</h3>
                                    <ul class="list-unstyled">
                                        <li>Web Development (Design | CMS | Coding)</li>
                                        <li>CMS, mobile, finance</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="content__item"> 
                                    <h3>JFE Indonesia</h3>
                                    <ul class="list-unstyled">
                                        <li>Corporate Web Creation (Design | Coding)</li>
                                        <li>Responsive WEB Dev, Multi-Language, Manufacturing
                                        Trader</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://promokreditbprks.com/" target="_blank" rel="noreferrer"> 
                                    <h3>BPR KS</h3>
                                    <ul class="list-unstyled">
                                        <li>WEB Remake & Growth-hack (Design | Coding | Content Creation | Operation)</li>
                                        <li>CMS, Mobile, secure WEB, Finance, Mobile Loan</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="http://omc.co.id/" target="_blank" rel="noreferrer"> 
                                    <h3>Onitsuka Management Consulting</h3>
                                    <ul class="list-unstyled">
                                        <li>WEB Re-Design (Design | Coding)</li>
                                        <li>Multi-language, Mobile, Consulting, Accounting &amp; Tax</li>
                                    </ul>
                                </a>
                            </div> 
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://4dentist.jp/" target="_blank" rel="noreferrer"> 
                                    <h3>4Dentist.jp (Dentist Portal)</h3>
                                    <ul class="list-unstyled">
                                        <li>WEB Dev & Operation (Design | CMS | Operation)</li>
                                        <li>Wordpress, Mobile, Member-only Web, Medical</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="http://www.digitalmarketingindonesia.co.id/index_id.php" target="_blank" rel="noreferrer"> 
                                    <h3>Digital Marketing Indonesia</h3>
                                    <ul class="list-unstyled">
                                        <li>WEB Dev & Operation (Design | Coding)</li>
                                        <li>Multi-language, Mobile, IT Service</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://www.auksi.co.id/beranda" target="_blank" rel="noreferrer">
                                    <!-- <img src="/img/portfolio/update/auksi.jpg" class="img-responsive" alt="" loading="lazy" > -->
                                    <h3>AUKSI</h3>
                                    <ul class="list-unstyled">
                                        <li>Development & Operasion WEB (Design | Sistem | CMS | Operation)</li>
                                        <li>CMS, Website, Lelang Online, Auction, Inegrasi API</li>
                                    </ul>
                                </a>
                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://bisnissaya.com" target="_blank" rel="noreferrer"> 
                                    <h3>BisnisSaya.com (MLM E-Commerce)</h3>
                                    <ul class="list-unstyled">
                                        <li>E-Commerce Development (Design | E-Commerce | CMS | Maintenance)</li>
                                        <li>E-Commerce, CMS, Payment Gateway, Multi-Level-Marketing</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://www.otomart.id/" target="_blank" rel="noreferrer"> 
                                    <h3>OTOmart (used-car market place)</h3>
                                    <ul class="list-unstyled">
                                        <li>WEB Dev & Operation (Design | CMS | System | Content Creation | Operation | AWS)</li>
                                        <li>CMS, Market Place, DB-WEB, Mobile, WEB service, Automobil</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="#" target="_blank" rel="noreferrer"> 
                                    <h3>aJapan Campaign Page</h3>
                                    <ul class="list-unstyled">
                                        <li>Campaign Microsite Dev & Operation (Design | Coding | Operation)</li>
                                        <li>Multi-language, Mobile, Campaign</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://www.60jpid.com/symposium.php" target="_blank" rel="noreferrer"> 
                                    <h3>Symposium Application LP</h3>
                                    <ul class="list-unstyled">
                                        <li>Application Form Creation (Design | PHP Form)</li>
                                        <li>Multi-language,Mobile,Application Form,Public</li>
                                    </ul>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="content__wrapper">
                        <div class="flex__row">
                            
                            
                            

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://jualbeliweb.id/" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-jualbeliweb.jpg" class="img-responsive" alt="JualBeliWEB.id (Website market place)">
                                    <h3>JualBeliWEB.id (Website market place)</h3>
                                    <ul class="list-unstyled">
                                        <li>WEB Dev & Operation (Design | CMS | System | Content Creation | Operation)</li>
                                        <li>CMS, Market Place, DB, Mobile, secure WEB, WEB service</li>
                                    </ul>
                                </a>
                            </div> 

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="http://frangipanibalispa.com/contact.php" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-frangipani.jpg" class="img-responsive" alt="Frangipani Esthetics Bali">
                                    <h3>Frangipani Esthetics Bali</h3>
                                    <ul class="list-unstyled">
                                        <li>WEB Dev & Operation (Design | Coding | Operation)</li>
                                        <li>Multi-language, Mobile, LPO, A/B test, Beauty</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="content__item">
                                    <img src="/img/portfolio/update/web-otosiap.jpg" class="img-responsive" alt="OTO Siap!">
                                    <h3>OTO Siap!</h3>
                                    <ul class="list-unstyled">
                                        <li>Landing Page Creation (Design | Coding)</li>
                                        <li>Landing Page, Mobile Optimization, Mobile App, Lending</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="content__item">
                                    <img src="/img/portfolio/update/web-oto-isuzu.jpg" class="img-responsive" alt="">
                                    <h3></h3>
                                    <ul class="list-unstyled">
                                        <li>Landing Page Creation (Design | Coding)</li>
                                        <li>Detail Page, Mobile Optimization, Car, Automotive</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="content__item">
                                    <img src="/img/portfolio/update/web-oto-conc.jpg" class="img-responsive" alt="OTOmart Concierge LP">
                                    <h3>OTOmart Concierge LP</h3>
                                    <ul class="list-unstyled">
                                        <li>Landing Page Creation (Design | Coding)</li>
                                        <li>Landing Page, Mobile Optimization, Consulting Service,
                                        Automotive</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="content__item">
                                    <img src="/img/portfolio/update/web-oto-garansi.jpg" class="img-responsive" alt="">
                                    <h3></h3>
                                    <ul class="list-unstyled">
                                        <li>Landing Page Creation (Design | Coding)</li>
                                        <li>LP Creation, Conversion Oriented Web, Car Gurantee
                                        Service</li>
                                    </ul>
                                </div>
                            </div>
                            

                            
                            
                            

                            

                            
                            
                            

                            
                           
                           

                            
                            
                            

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="http://www.vipplaza.co.id/" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-vipplaza.jpg" class="img-responsive" alt="VIP Plaza">
                                    <h3>VIP Plaza</h3>
                                    <ul class="list-unstyled">
                                        <li>WEB Remake & PWA (Coding)</li>
                                        <li>PWA, Mobile, E-Commerce</li>
                                    </ul>
                                </a>
                            </div>
                            
                            

                            
                            
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://www.jba.co.id/id/hasil-harga-lelang" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-jba-hasil-lelang.jpg" class="img-responsive" alt="JBA Hasil Lelang">
                                    <h3>JBA Hasil Lelang</h3>
                                    <ul class="list-unstyled">
                                        <li>AMP Creation (AMP | Dynamic Pages)</li>
                                        <li>AMP, Mobile Optimized, Car Auction, Bike Auction</li>
                                    </ul>
                                </a>
                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://webdev-id.com/" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-wdi.jpg" class="img-responsive" alt="WDI">
                                    <h3>WDI</h3>
                                    <ul class="list-unstyled">
                                        <li>Creators Market Place Development (Design | CMS | Security Assessment)</li>
                                        <li>Web system, Laravel, Mobile Optimized, Market Place</li>
                                    </ul>
                                </a>
                            </div>                            
                            
                            

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="content__item">
                                    <img src="/img/portfolio/update/web-jba-redesign.jpg" class="img-responsive" alt="JBA Re-design">
                                    <h3>JBA Re-design</h3>
                                    <ul class="list-unstyled">
                                        <li>WEB Dev & Operation (Design | CMS | System | Operation | AWS)</li>
                                        <li>Online Auction, Enterprise-WEB, DB-WEB, secure WEB, Automotive, Financial</li>
                                    </ul>
                                </div>
                            </div>                            
                            
                            

                                                        
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://jjc.or.id/hojin/annai/" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-jjc-hojin.jpg" class="img-responsive" alt="JJC Hojin">
                                    <h3>JJC Hojin</h3>
                                    <ul class="list-unstyled">
                                        <li>Web Re-Design (Design | CMS | Coding)</li>
                                        <li>WordPress, Mobile Optimized, Member System</li>
                                    </ul>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://jjc.or.id/kojin/tosho/" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-jjc-kojin.jpg" class="img-responsive" alt="JJC Kojin">
                                    <h3>JJC Kojin</h3>
                                    <ul class="list-unstyled">
                                        <li>Web Re-Design (Design | CMS | Coding)</li>
                                        <li>WordPress, Mobile Optimized, Member Management System,
                                        Booking System</li>
                                    </ul>
                                </a>
                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://www.jba.co.id/id/poin-rewards" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-jba-lp.jpg" class="img-responsive" alt="JBA LP">
                                    <h3>JBA LP</h3>
                                    <ul class="list-unstyled">
                                        <li>Web Page Creation (Design | Coding | CMS Integration)</li>
                                        <li>Mobile Optimized, CMS, Campaign page</li>
                                    </ul>
                                </a>
                            </div>                            
                            
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://aiaberbagi.com" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-aia.jpg" class="img-responsive" alt="AIA">
                                    <h3>AIA</h3>
                                    <ul class="list-unstyled">
                                        <li>Campaign Page Creation (Coding | Hosting)</li>
                                        <li>Mobile Optimized, Campaign page, Insurance</li>
                                    </ul>
                                </a>
                            </div>

                                                        
                            
                            

                                                        
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://www.otomart.id/oto-garansi.html" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-otogaransi.jpg" class="img-responsive" alt="OTO-Garansi Campaign Page">
                                    <h3>OTO-Garansi Campaign Page</h3>
                                    <ul class="list-unstyled">
                                        <li>Campaign Page Creation (Design | Coding)</li>
                                        <li>Mobile Optimized, CMS, Campaign Page</li>
                                    </ul>
                                </a>
                            </div>
                            

                                                       
                            
                            

                                                       
                            
                            

                                                        
                            
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <a class="content__item" href="https://lifenesia.com/" target="_blank" rel="noreferrer">
                                    <img src="/img/portfolio/update/web-lifenesia-bulletin-board.jpg" class="img-responsive" alt="Lifenesia">
                                    <h3>Lifenesia</h3>
                                    <ul class="list-unstyled">
                                        <li>Bulletin Board  (Design | Coding | Deployment)</li>
                                        <li>Bulletin Board, CtoC Service</li>
                                    </ul>
                                </a>
                            </div>

                                                        
                            

                                                        
                            
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="content__item">
                                    <img src="/img/portfolio/update/web-kki.jpg" class="img-responsive" alt="KKI New Pages">
                                    <h3>KKI</h3>
                                    <ul class="list-unstyled">
                                        <li>E-Commerce (Coding | API Integration)</li>
                                        <li>Shipping Provider Integration, Shipping Booking, Shipping Tracking, Tiki, Lion Parcel</li>
                                    </ul>
                                </div>
                            </div> 
                            

                        </div>
                    </div> -->
                    <div class="text-center">
                        <a href="#" class="btn btn--full">Looking to increase your customers? We can build you a better website</a>
                    </div>
                </div>
            </section>

            <section class="portfolio__modal">
                <div class="modal fade modal-section" id="modal_aia" tabindex="-1" role="dialog" aria-labelledby="modal_aia" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-body aia-section">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <div class="title-section">
                                    <p class="title">AIA - Premier Academy</p>
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
                                    <img loading="lazy" src="/img/portfolio/update/modal-aia.jpg" alt="">
                                    <br/>
                                    <img loading="lazy" src="/img/portfolio/update/modal-aia2.jpg" alt="">
                                    <br/>
                                    <img loading="lazy" src="/img/portfolio/update/modal-aia3.jpg" alt="">
                                    <br/>
                                    <img loading="lazy" src="/img/portfolio/update/modal-aia4.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade modal-section" id="modal_panin" tabindex="-1" role="dialog" aria-labelledby="modal_panin" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-body aia-section">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <div class="title-section">
                                    <p class="title">Panin Dai-ichi Life – Bekal Hidup</p>
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
                                    <img loading="lazy" src="/img/portfolio/update/modal-panin.jpg" alt="">
                                    <br/>
                                    <img loading="lazy" src="/img/portfolio/update/modal-panin2.jpg" alt="">
                                    <br/>
                                    <img loading="lazy" src="/img/portfolio/update/modal-panin3.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade modal-section" id="modal_jba" tabindex="-1" role="dialog" aria-labelledby="modal_jba" aria-hidden="true">
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
                                    <img loading="lazy" src="/img/portfolio/update/modal-jba1.jpg" alt="">
                                    <br />
                                    <img loading="lazy" src="/img/portfolio/update/modal-jba2.jpg" alt="">
                                    <br />
                                    <img loading="lazy" src="/img/portfolio/update/modal-jba4.jpg" alt="">
                                    <br />
                                    <img loading="lazy" src="/img/portfolio/update/modal-jba6.jpg" alt="">
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