<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=3.0">
    <meta name="description" itemprop="description"
        content="LOGIQUE is a Jakarta based tech developer providing digital marketing & IT services like website, mobile & app development & design; improve your IT systems now.">
    <meta name="keywords"
        content="logique services, IT services jakarta, IT development, IT development services jakarta, web creation jakarta">
    <meta name="author" content="PT. Logique Digital Indonesia">
    <meta property="og:title" content="Services | Top IT Services; Mobile System & Web Dev in Jakarta">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Logique">
    <meta property="og:url" content="https://www.logique.co.id/en/services.php">
    <meta property="og:image" content="https://www.logique.co.id/img/og-image.png">
    <meta property="og:description"
        content="LOGIQUE is a Jakarta based tech developer providing digital marketing & IT services like website, mobile & app development & design; improve your IT systems now.">
    <link rel="shortcut icon" type="image/x-icon" href="../favicon.ico">
    <title>Services | Top IT Services; Mobile System & Web Dev in Jakarta</title>
    
    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- <link href="../css/style.css" rel="stylesheet">   -->
    <link rel="canonical" href="https://www.logique.co.id/en/services.php" />
    <link href="/css/sidebar-update.css" rel="stylesheet"> 
    <link href="/css/newstyle.css" rel="stylesheet">
    <link href="/css/style-revamp.css" rel="stylesheet">
    <link href="/css/style-services.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css" />
    <link href="/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper wrapper--update-design wrapper--update-design-font">

        <!-- NAVIGATION -->
        <?php 
            // $active option are home, about, portfolio, services, product, career, contact
            $active = 'services';
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
            $id_link = '/layanan.php';
            $jp_link = '/jp/services.php';
            include($_SERVER['DOCUMENT_ROOT'].'/en/header.php'); 
        ?>

        <div class="content-wrapper__">

            <section class="bg--gray --top">
                <div class="container__" style="padding:0">
                    <div class="row">
                        <div class="col-sm-12">
                            <ol class="breadcrumb breadcrumb--update-design" itemscope
                                itemtype="http://schema.org/BreadcrumbList">
                                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item"
                                        href="index.php"><span itemprop="name">Home</span></a>
                                    <meta itemprop="position" content="1" />
                                </li>
                                <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a
                                        itemprop="item"><span itemprop="name">&nbsp;Services</span></a>
                                    <meta itemprop="position" content="2" />
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg--gray">
                <div class="container__">
                    <div class="text-center">
                        <h1 class="title-index">Our Services</h1>
                        <hr class="title__yellow-line--center">
                        <p class="title__description" style="margin-bottom:20px">
                            Speed is a key factor in determining the success or failure of a business nowadays.
                            The changing pace at which IT & Web trends are evolving has been at an accelerated rate.
                            Therefore, in order to keep up, agility and flexibility are two vital assets which must be utilized
                            and, indeed maximized.
                        </p>
                        <p class="title__description" style="margin-bottom:20px">
                            That’s why, in order to successfully promote your business, we provide flexible and speedy web & app
                            development services:
                            producing results of the highest quality while flexibly adapting to your specific requirements.
                        </p>
                        <div class="our-service__btn-wrapper">
                            <a href="portfolio.php">
                                <div class="main-btn --black">See Portfolio</div>
                            </a>
                            <a href="/en/services/project-management.php">
                                <div class="main-btn --yellow">Our Project Management</div>
                            </a>
                            <a href="contact.php"
                                onclick="ga('send', 'event', 'Button-Hubungi-Logique-Layanan-1', 'Action-Click', 'Button-Hubungi-Logique-Layanan-1-Label');">
                                <div class="main-btn --yellow">Contact Us</div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg--white">
                <div class="container__">
                    <a href="/en/services/dx-dm-service.php">
                        <picture>
                            <!-- webp -->
                            <source media="(max-width: 576px)" srcset="/img/dx-dm-banner-en-small.webp" type="image/webp">
                            <source media="(min-width: 576px)" srcset="/img/dx-dm-banner-en.webp" type="webp">

                            <!-- jpeg -->
                            <source media="(max-width: 576px)" srcset="/img/dx-dm-banner-en-small.jpg" type="image/jpeg">
                            <source media="(min-width: 576px)" srcset="/img/dx-dm-banner-en.jpg" type="image/jpeg">
                            <img srcset="/img/dx-dm-banner-en-small.jpg 576w" sizes="(max-width: 576px) 576px" src="/img/dx-dm-banner-en.jpg" alt="" class="img-responsive" style="width: 100%;">
                        </picture>
                    </a>
                </div>
            </section>

            <section>
                <div class="container__">
                    <div class="text-center">
                        <p class="title-index--bold"><b>LOGIQUE menyediakan Satu Solusi IT yang lengkap dengan produk dan layanan mulai dari konsultasi DX,<br>pengembangan sistem hingga pemasaran digital</b></p>
                    </div><br><br>
                    <div class="row">
                        <div class="col-md-offset-1 col-sm-offset-1 col-md-5 col-sm-10">
                            <div class="service-list__item">
                                <div>
                                    <img src="/img/service/specialist/scrum-svgrepo-com-en.png" alt="">
                                </div>
                            </div>
                            <p class="text-center"><b>Agile</b></p>
                        </div>
                        <div class="col-md-offset-1 col-sm-offset-1 col-md-5 col-sm-10">
                            <div class="service-list__item">
                                <div>
                                    <img src="/img/service/specialist/Group2.png" alt="" class="service-list__img">
                                </div>
                                <div class="service-list__content">
                                    <h3><b>Tailor-made</b></h3>
                                    <p><b>Dibuat khusus sebagai solusi untuk permasalahan Anda.</b></p>
                                </div>
                            </div>
                            <div class="service-list__item">
                                <div>
                                    <img src="/img/service/specialist/users-svgrepo-com.png" alt="" class="service-list__img">
                                </div>
                                <div class="service-list__content">
                                    <h3><b>Unique Project Management Method</b></h3>
                                    <p><b>Pengelolaan proyek dengan sistem squad serta pencatatan akurat dengan produk yang kami miliki.</b></p>
                                </div>
                            </div>
                        </div>
                    </div><br><br><br>
                    <div class="text-center">
                        <h1 class="title-index"><b>Our Specialization</b></h1>
                        <hr class="title__yellow-line--center" style="margin-bottom:10px">
                        <br><br>
                        <div class="row">
                            <div class="col-md-4">
                                <img src="/img/service/specialist/ecommerce-svgrepo-com.png" alt="" width="83px" height="auto"><br><br>
                                <h4><b>E-Commerce & E-Learning (With Various Payment Gateways)</b></h4 class="md-2">
                            </div>
                            <div class="col-md-4">
                                <img src="/img/service/specialist/Group3.png" alt="" width="73px" height="auto"><br><br>
                                <h4><b>PWA Development</b></h4 class="md-2">
                            </div>
                            <div class="col-md-4">
                                <img src="/img/service/specialist/PengembanganIT.png" alt="" width="92px" height="auto"><br><br>
                                <h4><b>The Development of IT Systems for the Automotive Industry</b></h4 class="md-2">
                            </div>
                        </div><br><br>
                        <div class="row">
                            <div class="col-md-4">
                                <img src="/img/service/specialist/video-promotion-advertising-marketing-svgrepo-com.png" alt="" width="110px" height="auto"><br><br>
                                <h4><b>Digital Marketing Services for Financial & Real Estate Companies</b></h4 class="md-2">
                            </div>
                            <div class="col-md-4">
                                <img src="/img/service/specialist/website-svgrepo-com.png" alt="" width="72px" height="auto"><br><br>
                                <h4><b>Creating Safe Websites</b></h4 class="md-2">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="serviceNavigation">
                <div class="container__">
                    <div class="row">
                        <div class="col-md-offset-1 col-sm-offset-1 col-md-5 col-sm-10">
                            <div class="service-list__item">
                                <div>
                                    <img src="../img/service/list/jasaweb.png" alt="" class="service-list__img">
                                </div>
                                <div class="service-list__content">
                                    <a href="#webCreate_">
                                        <p class="service-list__title">Website Creation</p>
                                    </a>
                                    <ul class="service-list__list">
                                        <a href="#webCreate_revamp">
                                            <li>Website Creation / Revamping</li>
                                        </a>
                                        <a href="#webCreate_multi">
                                            <li>Multilingual Website Creation</li>
                                        </a>
                                        <a href="#webCreate_webService">
                                            <li>Web Media Development / Operation</li>
                                        </a>
                                        <a href="#webCreate_recruit">
                                            <li>Recruitment Website Creation</li>
                                        </a>
                                        <a href="#webCreate_blog">
                                            <li>Wordpress</li>
                                        </a>
                                    </ul>
                                </div>
                            </div>
                            <div class="service-list__item">
                                <div>
                                    <img src="../img/service/list/sisweb.png" alt="" class="service-list__img">
                                </div>
                                <div class="service-list__content">
                                    <a href="#sysDev_">
                                        <p class="service-list__title">Web System Development / Maintenance</p>
                                    </a>
                                    <ul class="service-list__list">
                                        <a href="#sysDev_ecommerce">
                                            <li>E-Commerce Development</li>
                                        </a>
                                        <a href="#sysDev_automotive">
                                            <li>System Development for Automotive Industry</li>
                                        </a>
                                        <a href="#sysDev_cms">
                                            <li>Custom CMS Development</li>
                                        </a>
                                        <a href="#sysDev_crm">
                                            <li>CRM / Accounting System Development</li>
                                        </a>
                                    </ul>
                                </div>
                            </div>
                            <div class="service-list__item">
                                <div>
                                    <img src="../img/service/list/mobi.png" alt="" class="service-list__img">
                                </div>
                                <div class="service-list__content">
                                    <a href="#mobile_">
                                        <p class="service-list__title">Mobile Solution</p>
                                    </a>
                                    <ul class="service-list__list">
                                        <a href="#mobile_pwa">
                                            <li>PWA (Progressive Web App) Development</li>
                                        </a>
                                        <a href="#mobile_appDev">
                                            <li>Mobile Application Development</li>
                                        </a>
                                        <a href="#mobile_appCreate">
                                            <li>Mobile / Responsive Web Creation</li>
                                        </a>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-offset-0 col-sm-offset-1 col-md-5 col-sm-10">
                            <div class="service-list__item">
                                <div>
                                    <img src="../img/service/list/digital.png" alt="" class="service-list__img">
                                </div>
                                <div class="service-list__content">
                                    <a href="#dm_">
                                        <p class="service-list__title">Digital Marketing</p>
                                    </a>
                                    <ul class="service-list__list">
                                        <a href="#dm_seo">
                                            <li>SEO / SEM</li>
                                        </a>
                                        <a href="#dm_digiMarket">
                                            <li>Digital Ad Operation</li>
                                        </a>
                                        <a href="#dm_contentCreate">
                                            <li>Web Content Creation/Operation</li>
                                        </a>
                                        <a href="#dm_lpOptimize">
                                            <li>Landing Page Optimization</li>
                                        </a>
                                    </ul>
                                </div>
                            </div>
                            <div class="service-list__item">
                                <div>
                                    <img src="../img/service/list/security.png" alt="" class="service-list__img">
                                </div>
                                <div class="service-list__content">
                                    <a href="#webSecurity_">
                                        <p class="service-list__title">IT Security Service</p>
                                    </a>
                                    <ul class="service-list__list">
                                        <a href="#webSecurity_va">
                                            <li>Security Assesment (Vulnerability Scanning / Pen-Test)</li>
                                        </a>
                                    </ul>
                                </div>
                            </div>
                            <div class="service-list__item">
                                <div>
                                    <img src="../img/service/list/lain.png" alt="" class="service-list__img">
                                </div>
                                <div class="service-list__content">
                                    <a href="#othersService_">
                                        <p class="service-list__title">Others</p>
                                    </a>
                                    <ul class="service-list__list">
                                        <a href="#othersService_graphic">
                                            <li>Graphic Design</li>
                                        </a>
                                        <a href="#otherService_server">
                                            <li>Cloud Server Operation (AWS / Alibaba Cloud)</li>
                                        </a>
                                        <a href="#otherService_itConsultant">
                                            <li>IT Business Consulting</li>
                                        </a>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row container__">
                        <div class="col-md-12">
                            <div class="web-solution__btn-wrapper --inline-model">
                                <a href="services/web-dev.php">
                                    <div class="main-btn --ws --white">
                                        <div class="web-solution__half-bg--round"></div>
                                        <img class="web-solution__img" src="../img/service/button/web.png" alt="">
                                        Develop Website
                                    </div>
                                </a>
                                <a href="services/system-dev.php">
                                    <div class="main-btn --ws --white">
                                        <div class="web-solution__half-bg--round"></div>
                                        <img class="web-solution__img" src="../img/service/button/repair.png" alt="">
                                        Develop System
                                    </div>
                                </a>
                                <a href="services/mobile-app-dev.php">
                                    <div class="main-btn --ws --white">
                                        <div class="web-solution__half-bg--round"></div>
                                        <img class="web-solution__img" src="../img/service/button/mobi.png" alt="">
                                        Develop Mobile App
                                    </div>
                                </a>
                                <a href="/en/services/progressive-web-app-dev.php">
                                    <div class="main-btn --ws --white">
                                        <div class="web-solution__half-bg--round"></div>
                                        <img class="web-solution__img" src="../img/service/button/pwa.png" alt="">
                                        Develop PWA (Web App)
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg--black">
                <div class="container__">
                    <div class="product-slogan --center-img">
                        <img class="product-slogan__img" src="../img/service/service.png" alt="product">
                        <p class="product-slogan__text">We provide a wide range of services, from Website / System development to
                            Digital Marketing and maintaining IT Systems.</p>
                    </div>
                </div>
            </section>

            <section>
                <div class="container__">
                    <div class="text-center">
                        <h1 class="title-index">Our Workflow</h1>
                        <hr class="title__yellow-line--center" style="margin-bottom:10px">
                        <p class="title-index--bold">We are agile and flexible in our development of web, system, and mobile app.
                        </p>
                        <div class="workflow">
                            <div class="workflow__item">
                                <div class="workflow__content">
                                    <img class="workflow__img" src="../img/service/workflow/planning.png" alt="">
                                    <div class="workflow__text">Planning</div>
                                </div>
                            </div>
                            <div class="workflow__item">
                                <div class="workflow__content">
                                    <img class="workflow__img" src="../img/service/workflow/design.png" alt="">
                                    <div class="workflow__text">Design</div>
                                </div>
                            </div>
                            <div class="workflow__item">
                                <div class="workflow__content">
                                    <img class="workflow__img" src="../img/service/workflow/development.png" alt="">
                                    <div class="workflow__text">Development</div>
                                </div>
                            </div>
                            <div class="workflow__item">
                                <div class="workflow__content">
                                    <img class="workflow__img" src="../img/service/workflow/test.png" alt="">
                                    <div class="workflow__text">Test & Revision</div>
                                </div>
                            </div>
                            <div class="workflow__item">
                                <div class="workflow__content">
                                    <img class="workflow__img" src="../img/service/workflow/launching.png" alt="">
                                    <div class="workflow__text" style="transform: translateX(0)">Project Launching</div>
                                </div>
                            </div>
                        </div>
                        <p class="title__description">Speed is a key factor in determining the success or failure of a business
                            nowadays. Meanwhile, the
                            changing pace of IT and WEB trends is accelerating year by year. In order to keep up, agility and
                            flexibility are two vital assets which a company must utilize and, indeed maximize. <br><br>
                            That’s why in order to promote your business successfully, we develop web and mobile systems for you
                            in a
                            flexible and agile manner; speedily producing good results and flexibly adapting to your specific
                            requirements.</p>
                    </div>
                </div>
            </section>

            <section class="section-divider" id="webCreate_">
                <div class="bg--black">
                    <div class="container__">
                        <div class="text-center">
                            <h1 class="title-index --yellow">Website Creation</h1>
                            <hr class="title__yellow-line--center">
                        </div>
                    </div>
                </div>
                <div class="container__">
                    <div class="row">
                        <div class="col-md-8">
                            <section id="webCreate_revamp">
                                <div class="service-detail">
                                    <div class="service-detail__line-wrapper">
                                        <hr class="title__yellow-line">
                                    </div>
                                    <div class="service-detail__content">
                                        <h3 class="service-detail__title">Website Creation / Revamping</h4>
                                            <p>We can help you to create an effective and professional website to properly convey
                                                your
                                                company’s values. We also are able to provide domain purchase services, web
                                                servers,
                                                SSL, photography and video creation services, as well as formatting website
                                                content
                                                based on your specific requirements. Throughout the course of our work, we are
                                                always
                                                striving to provide creative as well as functional solutions according to cutting
                                                edge
                                                technological trends present in the digital era.</p>
                                            <div class="service-detail__btn-wrapper">
                                                <a class="main-btn --yellow" href="/en/services/web-dev.php">See More <span
                                                        class="hidden-xs"> about our Website Creation Services</span></a>
                                            </div>
                                    </div>
                                </div>
                            </section>
                            <section id="webCreate_multi">
                                <div class="service-detail">
                                    <div class="service-detail__line-wrapper">
                                        <hr class="title__yellow-line">
                                    </div>
                                    <div class="service-detail__content">
                                        <h3 class="service-detail__title">Multilingual Website Creation</h4>
                                            <p>
                                                High-quality multilingual websites can serve to provide you with prospective
                                                international customers.
                                                LOGIQUE aims to create cost effective multilingual websites, enabling you to
                                                connect with potential
                                                client within both local and global markets. We have a wide range of experience in
                                                regards to developing
                                                sites in a trilingual format; in English, Indonesian and Japanese.
                                            </p>
                                    </div>
                                </div>
                            </section>
                            <section id="webCreate_webService">
                                <div class="service-detail">
                                    <div class="service-detail__line-wrapper">
                                        <hr class="title__yellow-line">
                                    </div>
                                    <div class="service-detail__content">
                                        <h3 class="service-detail__title">Web Media Development</h4>
                                            <p>
                                                We can assist you through the various stages of developing your own Web Service,
                                                or Web-based Media;
                                                from drafting a plan, designing a template, to the maintenance of your website in
                                                any format / programming language,
                                                be it E-commerce, car auctioning system, human resource matching, point management
                                                system, closed community or a member
                                                management CRM website.
                                            </p>
                                    </div>
                                </div>
                            </section>
                            <section id="webCreate_recruit">
                                <div class="service-detail">
                                    <div class="service-detail__line-wrapper">
                                        <hr class="title__yellow-line">
                                    </div>
                                    <div class="service-detail__content">
                                        <h3 class="service-detail__title">Recruitment Website Creation</h4>
                                            <p>
                                                We realize that many companies experience difficulties recruiting potential
                                                employees who can meet company standards.
                                                LOGIQUE provides a solution which orients career websites around successful
                                                recruitment strategies, so that your company
                                                will be suited to provide the necessary information pertaining to the latest
                                                available job vacancies, work atmosphere,
                                                and the benefits offered to prospective candidates.
                                            </p>
                                            <div class="service-detail__btn-wrapper">
                                                <a class="main-btn --yellow" href="services/recruitment-web-dev.php">See More
                                                    <span class="hidden-xs">of Recruitment Website Creation Service</span></a>
                                            </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-md-4 hidden-sm hidden-xs">
                            <div class="service-detail__side-img">
                                <img class="service-detail__side-img--left" src="../img/service/service-detail-1.png" alt="">
                                <img class="service-detail__side-img--right" src="../img/service/service-detail-2.png" alt="">
                                <img class="service-detail__side-img--center" src="../img/service/service-detail-3.png" alt="">
                                <img class="service-detail__side-img--left" src="../img/service/service-detail-4.png" alt="">
                                <img class="service-detail__side-img--right" src="../img/service/service-detail-2.png" alt="">
                            </div>
                        </div>
                    </div>
                    <section id="webCreate_blog">
                        <div class="service-detail">
                            <div class="service-detail__line-wrapper">
                                <hr class="title__yellow-line">
                            </div>
                            <div class="service-detail__content">
                                <h3 class="service-detail__title">Wordpress</h4>
                                    <p>
                                        We also provide WordPress installation and customization services.
                                        We can design, implement and improve the security of your blog according to your specific
                                        requirements.
                                        Currently, there are many blogs / websites which suffer from security vulnerability
                                        issues.
                                        Therefore, please contact us immediately so that we can ensure the integrity of your
                                        blog’s security system.
                                    </p>
                            </div>
                        </div>
                    </section>
                    <div class="text-center --back-top">
                        <a href="portfolio.php#webDev">
                            <div class="main-btn --black">See Portfolio</div>
                        </a>
                        <a href="#serviceNavigation">
                            <div class="main-btn">Back to Top</div>
                        </a>
                    </div>
                </div>
            </section>

            <section class="section-divider" id="sysDev_">
                <div class="bg--black">
                    <div class="container__">
                        <div class="text-center">
                            <h1 class="title-index --yellow">Web System Development / Maintenance</h1>
                            <hr class="title__yellow-line--center">
                        </div>
                    </div>
                </div>
                <div class="container__">
                    <section id="sysDev_ecommerce">
                        <div class="service-detail">
                            <div class="service-detail__line-wrapper">
                                <hr class="title__yellow-line">
                            </div>
                            <div class="service-detail__content">
                                <h3 class="service-detail__title">E-Commerce Development</h3>
                                <p>
                                    We help clients build and run scalable well-designed e-commerce enterprises, which can be
                                    customized and developed based on state of the art UI / UX trends. Having extensive experience
                                    in MLM E-commerce development, as well as Flash-sale & Market Places, we can further develop
                                    your E-commerce endeavors through a novel aproach, such as using PWA. Please consult with us
                                    in regards to anything related to your E-Commerce needs.
                                </p>
                            </div>
                        </div>
                    </section>
                    <section id="sysDev_automotive">
                        <div class="service-detail">
                            <div class="service-detail__line-wrapper">
                                <hr class="title__yellow-line">
                            </div>
                            <div class="service-detail__content">
                                <h3 class="service-detail__title">System Development for Automotive Industry</h3>
                                <p>
                                    Having developed many systems, delivering them successfully to various entities in the
                                    Automotive Industry
                                    (such as car manufacturers, vehicle inspectors, car insurance agencies & auction houses), our
                                    team is confident
                                    in their abilities in understanding and working alongside automotive businesses, also being
                                    able to effectively offer
                                    consulting services to them. Some of our many works include working in the Second-hand car
                                    market place, and with Online
                                    Auction systems and Car Inspection Applications.
                                </p>
                            </div>
                        </div>
                    </section>
                    <section id="sysDev_cms">
                        <div class="service-detail">
                            <div class="service-detail__line-wrapper">
                                <hr class="title__yellow-line">
                            </div>
                            <div class="service-detail__content">
                                <h3 class="service-detail__title">Custom CMS Development / Maintenance</h3>
                                <p>
                                    Our CMS development team has years of experience in developing solutions for a broad range of
                                    companies and organizations. Our CMS development services can be tailored specifically to your
                                    needs. All of our custom CMS platforms can enable you to edit and create content on your
                                    website,
                                    as well as add images and media to it. Not only are our CMS platforms quick and easy to use,
                                    they’re also SEO friendly and benefit from integrated analytics, thereby allowing you to
                                    monitor
                                    and continuously improve your website’s performance.
                                </p>
                            </div>
                        </div>
                    </section>
                    <section id="sysDev_member">
                        <div class="service-detail">
                            <div class="service-detail__line-wrapper">
                                <hr class="title__yellow-line">
                            </div>
                            <div class="service-detail__content">
                                <h3 class="service-detail__title">Member Management / Contract Management system</h4>
                                    <p>LOGIQUE serves the creation of a Customer Relationship Management system (CRM) or a large
                                        scale membership management system, which, in its development process, we apply the
                                        highest security measures possible, as we have done previously for the membership
                                        managements systems we have previously created for banks.</p>
                            </div>
                        </div>
                    </section>
                    <div class="text-center --back-top">
                        <a href="/en/services/system-dev.php">
                            <div class="main-btn --black">See more detail about LOGIQUE's system dev service</div>
                        </a>
                        <a href="#serviceNavigation">
                            <div class="main-btn">Back to Top</div>
                        </a>
                    </div>
                </div>
            </section>

            <section class="section-divider" id="mobile_">
                <div class="bg--black">
                    <div class="container__">
                        <div class="text-center">
                            <h1 class="title-index --yellow">Mobile Solution</h1>
                            <hr class="title__yellow-line--center">
                        </div>
                    </div>
                </div>
                <div class="container__">
                    <section id="mobile_pwa">
                        <div class="service-detail">
                            <div class="service-detail__line-wrapper">
                                <hr class="title__yellow-line">
                            </div>
                            <div class="service-detail__content">
                                <h3 class="service-detail__title">PWA (Progressive Web App) Development</h3>
                                <p>
                                    LOGIQUE provides Progressive Web App (PWA) development services to add value to your website,
                                    so
                                    that it can be accessed just like a mobile application. PWA gives numerous benefits which can
                                    be
                                    utilized to filfill customer's expectation, increase interaction and conversion.
                                </p>
                                <div class="service-detail__btn-wrapper">
                                    <a target="_blank" class="main-btn --yellow" href="/en/services/progressive-web-app-dev.php">Learn
                                        more <span class="hidden-xs">about our PWA (Progressive Web App) Development</span></a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section id="mobile_appDev">
                        <div class="service-detail">
                            <div class="service-detail__line-wrapper">
                                <hr class="title__yellow-line">
                            </div>
                            <div class="service-detail__content">
                                <h3 class="service-detail__title">Mobile Application Development</h4>
                                    <p>
                                        We provide comprehensive Android/iOS application development services adjusted for the
                                        Indonesian market,
                                        and can further facilitate the development of mobile applications as well. Further, we
                                        are not just a
                                        planning and IT consultancy; we can also optimize UI and UX designs, develop
                                        applications and even help you
                                        register your applications onto the App Store/Google Play. Get in touch with our team
                                        to discuss mobile app
                                        development (iOS/Android/Hybrid/PWA)
                                    </p>
                                    <div class="service-detail__btn-wrapper">
                                        <a target="_blank" class="main-btn --yellow" href="/en/services/mobile-app-dev.php">Learn
                                            more <span class="hidden-xs">about our Mobile App Developmnet service</span></a>
                                    </div>
                            </div>
                        </div>
                    </section>
                    <section id="mobile_appCreate">
                        <div class="service-detail">
                            <div class="service-detail__line-wrapper">
                                <hr class="title__yellow-line">
                            </div>
                            <div class="service-detail__content">
                                <h3 class="service-detail__title">Mobile Website Creation</h4>
                                    <p>Responsive coding nowadays is trending, and is an important approach to navigating
                                        online traffic, since
                                        most of it stems from Mobile phones. Designed to fit your website directly into the
                                        format of a smartphone
                                        or tablet screen, we can develop a responsive website and optimize its UI depending on
                                        the required device
                                        screen size. We can also flexibly help you in implementing the use of new
                                        technologies, such as PWA or AMP.</p>
                            </div>
                        </div>
                    </section>
                    <div class="text-center --back-top">
                        <a href="portfolio.php#PWA">
                            <div class="main-btn --black">Portfolio</div>
                        </a>
                        <a href="#serviceNavigation">
                            <div class="main-btn">Back to Top</div>
                        </a>
                    </div>
                </div>
            </section>

            <section class="section-divider" id="dm_">
                <div class="bg--black">
                    <div class="container__">
                        <div class="text-center" style="position: relative">
                            <h1 class="title-index --yellow">Digital Marketing</h1>
                            <hr class="title__yellow-line--center">
                            <img class="google-badge" src="/img/google-badge.png" alt="Google Badge">
                        </div>
                    </div>
                </div>
                <div class="container__">
                    <section id="dm_seo">
                        <div class="service-detail">
                            <div class="service-detail__line-wrapper">
                                <hr class="title__yellow-line">
                            </div>
                            <div class="service-detail__content">
                                <h3 class="service-detail__title">SEO / SEM</h4>
                                    <p>
                                        We can carry out an in-depth analysis of your website’s on-page optimization. Through our
                                        services, we go beyond the basic methods of data tracking and user behavior analysis;
                                        attesting to these results through the overall improvement of our client’s websites.
                                        We have extensive SEO experience in the Japanese, Indonesian and English languages, and
                                        have succeeded in keeping one of our clients (An Indonesian finance company) on 1st place
                                        within Google’s search results.
                                        Further, a solid SEO strategy combines technical and content optimization.
                                        Additionally, we possess expertise in SEM as well.
                                    </p>
                                    <div class="service-detail__btn-wrapper">
                                        <a target="_blank" class="main-btn --yellow"
                                            href="/en/services/digital-marketing/seo-service.php">Learn more <span
                                                class="hidden-xs">about our SEO / SEM services</span>
                                        </a>
                                    </div>
                            </div>
                        </div>
                    </section>
                    <section id="dm_digiMarket">
                        <div class="service-detail">
                            <div class="service-detail__line-wrapper">
                                <hr class="title__yellow-line">
                            </div>
                            <div class="service-detail__content">
                                <h3 class="service-detail__title">Digital Ad Operation</h4>
                                    <p>
                                        We offer a results driven approach to pay-per-click management, providing transparent and
                                        measurable campaigns,
                                        allowing you to evaluate your success against your own targets. We are thoroughly
                                        experienced across a wide range
                                        of vertical markets and offer highly strategic and communicative services. We know that a
                                        successful campaign comes
                                        down to continual optimization and refinement. Only through a highly targeted and tightly
                                        managed structure can you
                                        achieve a higher conversion rate for a better price. Feel free to contact us to increase
                                        your prospects and conversions
                                        through online advertisements, an internet PR strategy, or SNS marketing.
                                    </p>
                                    <div class="service-detail__btn-wrapper">
                                        <a target="_blank" class="main-btn --yellow"
                                            href="/en/services/digital-marketing.php">Learn more <span class="hidden-xs">about our
                                                Digital Marketing services</span></a>
                                    </div>
                            </div>
                        </div>
                    </section>
                    <section id="dm_lpOptimize">
                        <div class="service-detail">
                            <div class="service-detail__line-wrapper">
                                <hr class="title__yellow-line">
                            </div>
                            <div class="service-detail__content">
                                <h3 class="service-detail__title">Internet Business Consulting</h4>
                                    <p>As expert internet advisors, we can assist you in launching a wholly new enterprise,
                                        or to expand your
                                        existing business through harnessing the power of the internet. Our technical experts
                                        can perform a thorough
                                        evaluation of your project’s needs and available technology stacks to help you pick
                                        the most appropriate
                                        option.</p>
                            </div>
                        </div>
                    </section>
                    <section id="dm_contentCreate">
                        <div class="service-detail">
                            <div class="service-detail__line-wrapper">
                                <hr class="title__yellow-line">
                            </div>
                            <div class="service-detail__content">
                                <h3 class="service-detail__title">Web Content Creation</h4>
                                    <p>
                                        We aim to provide you with content creation services of the highest quality,
                                        producing content according to your business goals, and allowing you to secure
                                        a larger audience in the process. We can further help you translate your content into
                                        Indonesian,
                                        Japanese or English, whilst implementing SEO in order to improve your website’s overall
                                        performance.
                                    </p>
                            </div>
                        </div>
                    </section>
                    <section id="dm_lpOptimize">
                        <div class="service-detail">
                            <div class="service-detail__line-wrapper">
                                <hr class="title__yellow-line">
                            </div>
                            <div class="service-detail__content">
                                <h3 class="service-detail__title">Landing Page Optimization</h4>
                                    <p>
                                        LOGIQUE seeks to create & optimize your Landing Page for SEO,
                                        with the end goal of getting your business as many visitors and conversions as possible.
                                        We can work flexibly according to your specific requirements and needs, which may include
                                        installing AMP,
                                        conducting A/B testing, or creating HTML5 banners. We are always ready to help, should you
                                        have any other concerns.
                                    </p>
                            </div>
                        </div>
                    </section>

                    <div class="text-center --back-top">
                        <a href="portfolio.php#others">
                            <div class="main-btn --black">Portfolio</div>
                        </a>
                        <a href="#serviceNavigation">
                            <div class="main-btn">Back to Top</div>
                        </a>
                    </div>
                </div>
            </section>

            <section class="section-divider" id="webSecurity_">
                <div class="bg--black">
                    <div class="container__">
                        <div class="text-center">
                            <h1 class="title-index --yellow">IT Security Service</h1>
                            <hr class="title__yellow-line--center">
                        </div>
                    </div>
                </div>
                <div class="container__">
                    <section id="webSecurity_va">
                        <div class="service-detail">
                            <div class="service-detail__line-wrapper">
                                <hr class="title__yellow-line">
                            </div>
                            <div class="service-detail__content">
                                <h3 class="service-detail__title">Security Assesment (Vulnerability Scanning / Pen-Test)</h3>
                                <p>
                                    Through conducting penetration tests and by assessing the vulnerability of your
                                    website/application,
                                    you can prevent attacks from SQL injections, cross site scripting, session jacking, etc.
                                    At the very least, we can help you maximize the security potential of your digital assets.
                                    Additionally, our experts can conduct security assessment for a reasonable price so that you
                                    need
                                    not hesitate to pen-test your online assets.
                                </p>
                                <div class="service-detail__btn-wrapper">
                                    <a class="main-btn --yellow" href="services/penetration-test.php">Learn more <span
                                            class="">about Pen-Test</span></a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="text-center --back-top">
                        <a href="#serviceNavigation">
                            <div class="main-btn">Back to Top</div>
                        </a>
                    </div>
                </div>
            </section>

            <section class="section-divider" id="othersService_">
                <div class="bg--black">
                    <div class="container__">
                        <div class="text-center">
                            <h1 class="title-index --yellow">Others</h1>
                            <hr class="title__yellow-line--center">
                        </div>
                    </div>
                </div>
                <div class="container__">
                    <section id="othersService_graphic">
                        <div class="service-detail">
                            <div class="service-detail__line-wrapper">
                                <hr class="title__yellow-line">
                            </div>
                            <div class="service-detail__content">
                                <h3 class="service-detail__title">Graphic Design</h4>
                                    <p>
                                        Through creating flyer/brochure designs and marketing collateral, we will be able to
                                        effectively
                                        amplify your key message in a memorable way. From creating single information leaflets to
                                        running
                                        direct marketing campaigns, our creative team is well versed in producing powerful
                                        business tools
                                        aimed at strengthening your brand credibility. Through these means, LOGIQUE builds
                                        targeted and
                                        authentic connections using innovative materials and the latest print design techniques,
                                        thereby
                                        maximizing the efficacy of your collateral and ensuring the cost effectiveness of your
                                        flyer design.
                                    </p>
                                    <div class="service-detail__btn-wrapper">
                                        <a class="main-btn --yellow" href="portfolio.php#others">See More</a>
                                    </div>
                            </div>
                        </div>
                    </section>
                    <section id="otherService_server">
                        <div class="service-detail">
                            <div class="service-detail__line-wrapper">
                                <hr class="title__yellow-line">
                            </div>
                            <div class="service-detail__content">
                                <h3 class="service-detail__title">Could Server Operation (AWS / Alibaba Cloud)</h4>
                                    <p>
                                        We are a certified AWS Partner, being able to set up optimized AWS infrastructure has
                                        allowed us to
                                        provide you with an agent service so as to obtain an Indonesian Corporate Domain
                                        (“co.id”).
                                        We can also set up a DNS and Global SSL for you, further providing rent web servers such
                                        as AWS,
                                        Alibaba Cloud and GIO Cloud.
                                    </p>
                                    <div class="service-detail__btn-wrapper">
                                        <a class="main-btn --yellow" href="services/devops.php">See More</a>
                                    </div>
                            </div>
                        </div>
                    </section>
                    <section id="otherService_itConsultant">
                        <div class="service-detail">
                            <div class="service-detail__line-wrapper">
                                <hr class="title__yellow-line">
                            </div>
                            <div class="service-detail__content">
                                <h3 class="service-detail__title">IT Business Consulting</h4>
                                    <p>
                                        We are able to provide various consulting services through the “Indonesia x IT” field,
                                        which include IT Tool selection advisory, business consultancy operations through
                                        utilizing IT,
                                        internet business launching support, IT security assessment and much more.
                                    </p>
                            </div>
                        </div>
                    </section>
                    <div class="text-center --back-top">
                        <a href="portfolio.php#others">
                            <div class="main-btn --black">Portfolio</div>
                        </a>
                        <a href="#serviceNavigation">
                            <div class="main-btn">Back to Top</div>
                        </a>
                    </div>
                </div>
            </section>

            <section class="section-divider" id="othersService_">
                <div class="bg--black">
                    <div class="container__">
                        <div class="text-center">
                            <h1 class="title-index --yellow">Testimonials</h1>
                            <hr class="title__yellow-line--center">
                        </div>
                    </div>
                </div>
                <section id="testimonials" class="slider--update-design">
                    <div class="container__">
                        <div class="text-center">
                            <!-- SLIDER -->
                            <div class="row">
                                <div class="col-xs-offset-1 col-xs-10">
                                    <div class="custombox__slider">
                                        <div class="custombox__custom-slider">
                                            <div id="profile" class="carousel slide" data-ride="carousel" data-interval="3000">
                                                <div class="carousel-inner">
                                                    <div class="item">
                                                        <blockquote class="client-testi">
                                                            <p>As one of the fastest growing life insurance companies, serving our
                                                                clients
                                                                online
                                                                is one of our key
                                                                principals. LOGIQUE has become an indispensable partner for their
                                                                work
                                                                on My
                                                                SunLife, the Indonesian app
                                                                UI/UX strategy. As a result, our application has become among the
                                                                highest
                                                                rated
                                                                insurance apps to date. We
                                                                have frequently assigned LOGIQUE tasks that needed to be done
                                                                hastily,
                                                                and
                                                                they
                                                                have always delivered the
                                                                best for us and have never failed our trust. Thank you for your
                                                                continued
                                                                cooperation.</p>
                                                            <br><br>
                                                            <div class="client-testi__person">
                                                                <div class="client-testi__line-wrapper">
                                                                    <hr class="title__yellow-line">
                                                                </div>
                                                                <div class="client-testi__p-name">
                                                                    <b>Mr. Jodie Pratomo,</b><br>
                                                                    Head of the Digital Experience for Sun Life
                                                                    Financial.
                                                                </div>
                                                            </div>
                                                        </blockquote>
                                                    </div>
                                                    <div class="item">
                                                        <blockquote class="client-testi">
                                                            <p>LOGIQUE has a firm grasp of its client’s requirements and needs.
                                                                Its
                                                                approach to
                                                                delivering its service
                                                                is collaborative, and thus results in the shared ownership of the
                                                                project it is
                                                                helping to develop</p>
                                                            <br><br>
                                                            <div class="client-testi__person">
                                                                <div class="client-testi__line-wrapper">
                                                                    <hr class="title__yellow-line">
                                                                </div>
                                                                <div class="client-testi__p-name">
                                                                    <b>Armiliza Cruz Magno, </b><br>
                                                                    JAIF.
                                                                </div>
                                                            </div>
                                                        </blockquote>
                                                    </div>

                                                    <div class="item active">
                                                        <blockquote class="client-testi">
                                                            <p>We have been cooperating with Logique, who developed our website of
                                                                &quot;the 60th
                                                                Anniversary of Japan-Indonesia Diplomatic Relation&quot; and who
                                                                has
                                                                been
                                                                maintaining the site for us. Logique is meeting our requirements
                                                                which
                                                                are
                                                                detailed and complex. Furthermore, Logique is giving us
                                                                comprehensive
                                                                support in
                                                                the fields of website development as well as SNS operation and
                                                                digital
                                                                marketing.
                                                                Logique’s punctual, flexible and precise work always helps us to
                                                                fulfil our
                                                                mission.
                                                            </p>
                                                            <br><br>
                                                            <div class="client-testi__person">
                                                                <div class="client-testi__line-wrapper">
                                                                    <hr class="title__yellow-line">
                                                                </div>
                                                                <div class="client-testi__p-name">
                                                                    <b>Steering Committee,</b><br>
                                                                    The Commemorative Events of the 60th Anniversary of Japan –
                                                                    Indonesia Diplomatic
                                                                    Relations.
                                                                </div>
                                                            </div>
                                                        </blockquote>
                                                    </div>
                                                    <div class="item">
                                                        <blockquote class="client-testi">
                                                            <p>We are a car and motorcycle auctioning business. LOGIQUE has helped
                                                                us
                                                                to develop
                                                                various systems which
                                                                require specific customizations in order to fit our process which
                                                                cannot be
                                                                covered by any existing
                                                                systems software. We appreciate how LOGIQUE has been working
                                                                steadily
                                                                and flexibly
                                                                with us, even though
                                                                our requirements are sometimes quite high, as the systems that we
                                                                require demand
                                                                the utmost security.
                                                            </p>
                                                            <br><br>
                                                            <div class="client-testi__person">
                                                                <div class="client-testi__line-wrapper">
                                                                    <hr class="title__yellow-line">
                                                                </div>
                                                                <div class="client-testi__p-name">
                                                                    <b>Mr. Kazuhiro Shioyama,</b><br>
                                                                    President Director, PT. JBA Indonesia
                                                                </div>
                                                            </div>
                                                        </blockquote>
                                                    </div>
                                                </div>
                                                <!-- Left and right controls -->
                                                <a class="left carousel-control" href="#profile" data-slide="prev">
                                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="right carousel-control" href="#profile" data-slide="next">
                                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="client-testi__btn-wrapper --back-top">
                                <a href="portfolio.php">
                                    <div class="main-btn --black">See Portfolio</div>
                                </a>
                                <a href="#serviceNavigation">
                                    <div class="main-btn">Back to Top</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
            </section>


            <section id="contact">
                <div class="container__">
                    <div class="row">
                        <div class="col-sm-5">
                            <h1 class="title-index" style="margin-bottom:0">Contact Logique</h1>
                            <p>if you need help with:</p>
                            <br>
                            <hr class="title__yellow-line">
                            <img src="../img/contact.png" style="width:100%" alt="contact">
                        </div>

                        <div class="col-sm-7">
                            <ul class="lgq-does__list">
                                <li>Developing a website </li>
                                <li>Updating your website’s system</li>
                                <li>Developing a web system</li>
                                <li>Creating and designing a campaign or website landing page</li>
                                <li>Outsourcing website operations.</li>
                                <li>Increasing access to your website with SEO.</li>
                                <li>Organizing and running an online promotion strategy.</li>
                                <li>Searching for leasing web servers and companies to manage them.</li>
                                <li>Searching for a printing service catering to company profiles and brochures.</li>
                                <li>etc.</li>
                            </ul>
                            <a href="contact.php" class="btn btn-contact-us-black" style="width: auto">Contact Us Now</a>
                        </div>
                    </div>
                </div>
            </section>

        </div>

        <?php include 'footer.php';?>
        <script>
        $(function() {
            $('#vacancy').on('shown.bs.collapse', function(e) {
                var offset = $(this).find('.collapse.in').prev('.panel-heading');
                if (offset) {
                    $('html,body').animate({
                        scrollTop: $(offset).offset().top - 10
                    }, 500);
                }
            });
        });
        </script>
    </div>
</body>

</html>