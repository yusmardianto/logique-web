<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=3.0">
    <meta name="description" itemprop="description" content="Jasa pembuatan web Otomotif, Asuransi, Lelang Online, E-commerce, web design, digital marketing, aplikasi web, aplikasi android & ios di Jakarta | LOGIQUE">
    <meta name="keywords" content="jasa pembuatan website, jasa pengembangan sistem website, digital marketing, toko online, pemasaran digital, web server, sistem website, pengetesan keamanan website, pengembangan aplikasi mobile, klinik gigi, pembuatan konten website, aplikasi android ios">
    <meta name="author" content="PT. Logique Digital Indonesia">
    <meta property="og:title" content="Jasa Pembuatan Web, Design, Mobile App, Digital Marketing">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Logique">
    <meta property="og:url" content="https://www.logique.co.id/services.php">
    <meta property="og:image" content="https://www.logique.co.id/img/ogimg/layanan.png">
    <meta property="og:description" content="Jasa pembuatan web Otomotif, Asuransi, Lelang Online, E-commerce, web design, digital marketing, aplikasi web, aplikasi android & ios di Jakarta | LOGIQUE">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <title>Jasa Pembuatan Web, Design, Mobile App, Digital Marketing</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="css/style.css" rel="stylesheet"> -->

    <link href="/css/sidebar-update.css" rel="stylesheet">
    <link href="/css/newstyle.css" rel="stylesheet">
    <link href="/css/style-revamp.css" rel="stylesheet">
    <link href="/css/style-services.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css" />
    <link href="/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="canonical" href="https://www.logique.co.id/layanan.php" />

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

        <!-- <div id="bgImg" class="others"><div class="img"></div></div> -->
        <!-- <div class="contain-video">
				<video poster="img/video-img.png" id="bgvid" playsinline autoplay muted loop>
					<source src="img/12377093.mp4" type="video/mp4">
				</video>
			</div>
			<div class="bg-white-opacity"></div> -->

        <!-- NAVIGATION -->
        <?php
        // $active option are home, about, portfolio, services, product, career, contact
        $active = 'services';
        include($_SERVER['DOCUMENT_ROOT'] . '/sidebar.php');
        ?>

        <?php
        $lang = 'id';
        $en_link = '/en/services.php';
        $id_link = '#';
        $jp_link = '/jp/services.php';
        include($_SERVER['DOCUMENT_ROOT'] . '/header.php');
        ?>

        <div class="content-wrapper__">

            <section class="bg--gray --top">
                <div class="container__" style="padding:0">
                    <div class="row">
                        <div class="col-sm-12">
                            <ol class="breadcrumb breadcrumb--update-design" itemscope itemtype="http://schema.org/BreadcrumbList">
                                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="index.php"><span itemprop="name">Beranda</span></a>
                                    <meta itemprop="position" content="1" />
                                </li>
                                <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item"><span itemprop="name">&nbsp;Layanan</span></a>
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
                        <h1 class="title-index">Layanan Kami</h1>
                        <hr class="title__yellow-line--center">
                        <p class="title__description" style="margin-bottom:20px">
                            Saat ini kecepatan merupakan salah satu indikator utama yang menentukan kesuksesan atau kegagalan sebuah bisnis. Hal ini sejalan dengan perubahan tren pengaplikasian teknologi (IT) dan Web ke dalam bisnis yang terjadi dengan sangat cepat. Untuk dapat mengikuti perubahan tersebut, kecepatan dan fleksibilitas adalah dua aset penting yang harus dimanfaatkan dan dimaksimalkan. <br><br>
                            Itulah sebabnya, untuk mempromosikan bisnis Anda dengan baik, kami menyediakan layanan pengembangan web & aplikasi yang cepat dan fleksibel; yang mampu menghasilkan hasil dengan kualitas terbaik sambil secara fleksibel beradaptasi dengan kebutuhan Anda.
                        </p>
                        <div class="our-service__btn-wrapper">
                            <a href="portofolio.php">
                                <div class="main-btn --black">Lihat Portofolio</div>
                            </a>
                            <a href="/layanan/project-management.php">
                                <div class="main-btn --yellow">Manajemen Proyek Kami</div>
                            </a>
                            <a href="hubungi-kami.php" onclick="ga('send', 'event', 'Button-Hubungi-Logique-Layanan-1', 'Action-Click', 'Button-Hubungi-Logique-Layanan-1-Label');">
                                <div class="main-btn --yellow">Hubungi Kami</div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg--white">
                <div class="container__">
                    <a href="/layanan/dx-dm-service.php">
                        <picture>
                            <!-- webp -->
                            <source media="(max-width: 576px)" srcset="/img/dx-dm-banner-id-small.webp" type="image/webp">
                            <source media="(min-width: 576px)" srcset="/img/dx-dm-banner-id.webp" type="webp">

                            <!-- jpeg -->
                            <source media="(max-width: 576px)" srcset="/img/dx-dm-banner-id-small.jpg" type="image/jpeg">
                            <source media="(min-width: 576px)" srcset="/img/dx-dm-banner-id.jpg" type="image/jpeg">
                            <img srcset="/img/dx-dm-banner-id-small.jpg 576w" sizes="(max-width: 576px) 576px" src="/img/dx-dm-banner-id.jpg" alt="" class="img-responsive" style="width: 100%;">
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
                                    <img src="/img/service/specialist/scrum-svgrepo-com.png" alt="">
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
                        <h1 class="title-index"><b>Spesialisasi Kami</b></h1>
                        <hr class="title__yellow-line--center" style="margin-bottom:10px">
                        <br><br>
                        <div class="row">
                            <div class="col-md-4">
                                <img src="/img/service/specialist/ecommerce-svgrepo-com.png" alt="" width="83px" height="auto"><br><br>
                                <h4><b>E-Commerce & E-Learning (Dengan berbagai Payment Gateaway)</b></h4 class="md-2">
                            </div>
                            <div class="col-md-4">
                                <img src="/img/service/specialist/Group3.png" alt="" width="73px" height="auto"><br><br>
                                <h4><b>PWA Development</b></h4 class="md-2">
                            </div>
                            <div class="col-md-4">
                                <img src="/img/service/specialist/PengembanganIT.png" alt="" width="92px" height="auto"><br><br>
                                <h4><b>Pengembangan Sistem IT Untuk Industri Otomotif</b></h4 class="md-2">
                            </div>
                        </div><br><br>
                        <div class="row">
                            <div class="col-md-4">
                                <img src="/img/service/specialist/video-promotion-advertising-marketing-svgrepo-com.png" alt="" width="110px" height="auto"><br><br>
                                <h4><b>Pemasaran Digital Untuk Perusahaan Finansial &  Real Estate</b></h4 class="md-2">
                            </div>
                            <div class="col-md-4">
                                <img src="/img/service/specialist/website-svgrepo-com.png" alt="" width="72px" height="auto"><br><br>
                                <h4><b>Pembuatan Website Yang Aman</b></h4 class="md-2">
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
                                        <p class="service-list__title">Pembuatan Website</p>
                                    </a>
                                    <ul class="service-list__list">
                                        <li>
                                            <a href="#webCreate_revamp">
                                                Pengembangan / Pembaharuan Website
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#webCreate_multi">
                                                Pembuatan Website Multi Bahasa
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#webCreate_webService">
                                                Pembuatan / Pengoperasian Web Media
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#webCreate_recruit">
                                                Pembuatan Website Rekrutmen
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#webCreate_restaurant">
                                                Website Restoran
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#webCreate_blog">
                                                Website berbasis Wordpress
                                            </a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                            <div class="service-list__item">
                                <div>
                                    <img src="../img/service/list/sisweb.png" alt="" class="service-list__img">
                                </div>
                                <div class="service-list__content">
                                    <a href="#sysDev_">
                                        <p class="service-list__title">Aplikasi Berbasis Web / Pengelolaan Website</p>
                                    </a>
                                    <ul class="service-list__list">
                                        <li>
                                            <a href="#sysDev_ecommerce">
                                                Pengembangan E-Commerce
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#sysDev_automotive">
                                                Pengembangan Sistem untuk Industri Otomotif
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#sysDev_cms">
                                                Pengembangan dan Pengelolaan Sistem Manajemen Konten (CMS)
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#sysDev_member">
                                                Sistem Manajemen Pelanggan / Pengembangan Sistem Akunting
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="service-list__item">
                                <div>
                                    <img src="../img/service/list/mobi.png" alt="" class="service-list__img">
                                </div>
                                <div class="service-list__content">
                                    <a href="#mobile_">
                                        <p class="service-list__title">Solusi Mobile</p>
                                    </a>
                                    <ul class="service-list__list">
                                        <li>
                                            <a href="#mobile_pwa">
                                                Pengembangan PWA (Progressive Web App)
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#mobile_appDev">
                                                Pengembangan Mobile App
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#mobile_appCreate">
                                                Pembuatan Website Responsif / Mobile First
                                            </a>
                                        </li>
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
                                        <li>
                                            <a href="#dm_seo">
                                                SEO / SEM
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#dm_itConsult">
                                                Pengoperasian Iklan Digital
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#dm_contentCreate">
                                                Pembuatan Konten Website
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#dm_digiMarket">
                                                Optimasi Landing Page
                                            </a>
                                        </li>
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
                                        <li>
                                            <a href="#webSecurity_va">
                                                Tes Keamanan Website / Mobile App (VA / Penetration Test)
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="service-list__item">
                                <div>
                                    <img src="../img/service/list/lain.png" alt="" class="service-list__img">
                                </div>
                                <div class="service-list__content">
                                    <a href="#othersService_">
                                        <p class="service-list__title">Lain-lain</p>
                                    </a>
                                    <ul class="service-list__list">
                                        <li>
                                            <a href="#othersService_graphic">
                                                Desain Grafis
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#otherService_server">
                                                Pengoperasian Server Cloud (AWS / Alibaba Cloud)
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#otherService_itConsultant">
                                                Konsultasi Bisnis IT
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row container__">
                        <div class="col-md-12">
                            <div class="web-solution__btn-wrapper --inline-model">
                                <a href="layanan/jasa-pembuatan-website.php">
                                    <div class="main-btn --ws --white">
                                        <div class="web-solution__half-bg--round"></div>
                                        <img class="web-solution__img" src="../img/service/button/web.png" alt="">
                                        Buat Website
                                    </div>
                                </a>
                                <a href="layanan/pembuatan-sistem-web.php">
                                    <div class="main-btn --ws --white">
                                        <div class="web-solution__half-bg--round"></div>
                                        <img class="web-solution__img" src="../img/service/button/repair.png" alt="">
                                        Buat Aplikasi Berbasis Web
                                    </div>
                                </a>
                                <a href="layanan/pembuatan-aplikasi-mobile.php">
                                    <div class="main-btn --ws --white">
                                        <div class="web-solution__half-bg--round"></div>
                                        <img class="web-solution__img" src="../img/service/button/mobi.png" alt="">
                                        Buat Mobile App
                                    </div>
                                </a>
                                <a href="/layanan/pembuatan-progressive-web-app.php">
                                    <div class="main-btn --ws --white">
                                        <div class="web-solution__half-bg--round"></div>
                                        <img class="web-solution__img" src="../img/service/button/pwa.png" alt="">
                                        Buat Aplikasi PWA
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
                        <p class="product-slogan__text">Kami menyediakan berbagai layanan, mulai dari pembuatan website untuk perusahaan, aplikasi berbasis web, pemasaran digital, dan pemeliharaan sistem.</p>
                    </div>
                </div>
            </section>

            <section>
                <div class="container__">
                    <div class="text-center">
                        <h1 class="title-index">Proses Kerja Logique</h1>
                        <hr class="title__yellow-line--center" style="margin-bottom:10px">
                        <p class="title-index--bold">Kami mengembangkan website, aplikasi berbasis web, dan mobile app secara cepat dan fleksibel.</p>
                        <div class="workflow">
                            <div class="workflow__item">
                                <div class="workflow__content">
                                    <img class="workflow__img" src="../img/service/workflow/planning.png" alt="">
                                    <div class="workflow__text">Perencanaan</div>
                                </div>
                            </div>
                            <div class="workflow__item">
                                <div class="workflow__content">
                                    <img class="workflow__img" src="../img/service/workflow/design.png" alt="">
                                    <div class="workflow__text">Desain</div>
                                </div>
                            </div>
                            <div class="workflow__item">
                                <div class="workflow__content">
                                    <img class="workflow__img" src="../img/service/workflow/development.png" alt="">
                                    <div class="workflow__text">Pengembangan</div>
                                </div>
                            </div>
                            <div class="workflow__item">
                                <div class="workflow__content">
                                    <img class="workflow__img" src="../img/service/workflow/test.png" alt="">
                                    <div class="workflow__text">Tes & Revisi</div>
                                </div>
                            </div>
                            <div class="workflow__item">
                                <div class="workflow__content">
                                    <img class="workflow__img" src="../img/service/workflow/launching.png" alt="">
                                    <div class="workflow__text" style="transform: translateX(0)">Peluncuran Proyek</div>
                                </div>
                            </div>
                        </div>
                        <p class="title__description">
                            Kecepatan adalah salah satu kunci terpenting dalam menentukan berhasil atau gagalnya bisnis di zaman modern ini. Disisi lain, laju perubahan tren IT dan WEB berjalan semakin cepat dari tahun ke tahun. Supaya tidak tertinggal, para pelaku usaha perlu memanfaatkan dan memaksimalkan 2 aset utama yakni kecepatan dan fleksibilitas. <br><br>
                            Itulah sebabnya, agar sukses mempromosikan bisnis Anda, kami mengembangkan website dan mobile app untuk Anda secara cepat dan fleksibel; mewujudkan hasil pekerjaan yang baik dengan cepat dan beradaptasi terhadap kebutuhan Anda dengan fleksibel.
                        </p>
                    </div>
                </div>
            </section>

            <section class="section-divider" id="webCreate_">
                <div class="bg--black">
                    <div class="container__">
                        <div class="text-center">
                            <h1 class="title-index --yellow">Pembuatan Website</h1>
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
                                        <h3 class="service-detail__title">Pengembangan / Pembaharuan Website</h4>
                                            <p>Kami dapat membantu Anda untuk menciptakan sebuah website profesional yang efektif untuk menyampaikan nilai-nilai perusahaan Anda. Kami juga menyediakan layanan pembelian domain, web server, SSL, layanan fotografi atau pembuatan video, serta pembuatan konten website sesuai dengan kebutuhan yang Anda inginkan. Sampai saat ini, jasa pembuatan website yang kami berikan telah menjangkau beragam jenis usaha. Dalam proses pengembangannya, kami akan selalu memberikan solusi kreatif dan fungsional sesuai dengan perkembangan teknologi dan tren terkini di dunia digital.</p>
                                            <div class="service-detail__btn-wrapper">
                                                <a class="main-btn --yellow" href="layanan/jasa-pembuatan-website.php">Pelajari Lebih Lanjut
                                                    <span class="hidden-xs">Tentang Pembuatan Website</span></a>
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
                                        <h3 class="service-detail__title">Pembuatan Website Multi Bahasa</h4>
                                            <p>Website multi bahasa yang berkualitas dapat memberikan Anda calon pelanggan internasional. LOGIQUE menyediakan jasa pembuatan website multibahasa dengan harga yang efektif untuk membantu Anda menjangkau pelanggan di dalam dan di luar negeri. Kami memiliki banyak pengalaman dalam pengembangan website dengan tiga bahasa; Inggris, Indonesia, dan Jepang.</p>
                                    </div>
                                </div>
                            </section>
                            <section id="webCreate_webService">
                                <div class="service-detail">
                                    <div class="service-detail__line-wrapper">
                                        <hr class="title__yellow-line">
                                    </div>
                                    <div class="service-detail__content">
                                        <h3 class="service-detail__title">Pembuatan / Pengoperasian Web Media</h4>
                                            <p>Kami dapat membantu Anda dalam berbagai fase pengembangan Web Media atau Web Service; mulai dari perencanaan, pembuatan template desain, sampai dengan pemeliharaan website dalam format / bahasa pemrograman apapun. Baik itu e-commerce, sistem pelelangan mobil, sistem HR, sistem manajemen poin, dan CRM untuk manajemen anggota atau komunitas tertutup.</p>
                                    </div>
                                </div>
                            </section>
                            <section id="webCreate_recruit">
                                <div class="service-detail">
                                    <div class="service-detail__line-wrapper">
                                        <hr class="title__yellow-line">
                                    </div>
                                    <div class="service-detail__content">
                                        <h3 class="service-detail__title">Pembuatan Website Rekrutmen</h4>
                                            <p>Kami sadar bahwa banyak perusahaan menghadapi kesulitan dalam merekrut kandidat yang sesuai dengan standar perusahaan. LOGIQUE menyediakan solusi untuk membuat halaman website karir yang memiliki fokus pada metode perekrutan yang efektif. Melalui website karir, perusahaan dapat menyediakan informasi-informasi penting yang berhubungan dengan lowongan kerja, budaya dan lingkungan kerja, serta keuntungan-keuntungan yang diberikan oleh perusahaan untuk menarik minat calon karyawan yang kompeten di bidangnya.</p>
                                            <div class="service-detail__btn-wrapper">
                                                <a class="main-btn --yellow" href="layanan/pembuatan-web-karir.php">Pelajari Lebih Lanjut
                                                    <span class="hidden-xs">Tentang Pembuatan Website Rekrutmen</span></a>
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
                    <section id="webCreate_restaurant">
                        <div class="service-detail">
                            <div class="service-detail__line-wrapper">
                                <hr class="title__yellow-line">
                            </div>
                            <div class="service-detail__content">
                                <h3 class="service-detail__title">Website Restoran</h4>
                                    <p>Website restoran dapat membantu secara efektif dalam penyampaian berbagai informasi terbaru mengenai restoran yang Anda kelola. Informasi tersebut mencakup menu restoran, harga, reservasi, jam operasional, event, lokasi, kontak, promo dan info lainnya. Dengan adanya website, maka Anda dapat mempromosikan restoran Anda tanpa henti setiap hari.</p>
                                    <div class="service-detail__btn-wrapper">
                                        <a class="main-btn --yellow" href="layanan/pembuatan-website-restoran/">Pelajari Lebih Lanjut
                                            <span class="hidden-xs">Tentang Pembuatan Website Restoran</span></a>
                                    </div>
                            </div>
                        </div>
                    </section>
                    <!-- <section id="webCreate_responsive">
                        <div class="service-detail">
                            <div class="service-detail__line-wrapper">
                                <hr class="title__yellow-line">
                            </div>
                            <div class="service-detail__content">
                                <h3 class="service-detail__title">Website dengan Desain Responsif</h4>
                                    <p>Memiliki website dengan desain responsif merupakan hal yang penting karena begitu banyak
                                        tingkat kunjungan web melalui perangkat mobile. Desain responsif merupakan teknologi yang
                                        sedang populer, yang mampu membuat tampilan website secara otomatis menyesuaikan dengan
                                        layar yang digunakan baik dari PC atau pun smartphone. Dengan tim ahli yang kami miliki,
                                        LOGIQUE membantu mengoptimalkan desain web Anda menjadi jauh lebih menarik dengan desain
                                        yang responsif sehingga membuat para pengunjung merasa betah berada di dalamnya.</p>
                            </div>
                        </div>
                    </section>
                    <section id="webCreate_landing">
                        <div class="service-detail">
                            <div class="service-detail__line-wrapper">
                                <hr class="title__yellow-line">
                            </div>
                            <div class="service-detail__content">
                                <h3 class="service-detail__title">Halaman Landing / Kampanye</h4>
                                    <p>LOGIQUE memberikan solusi terbaik jika Anda ingin mengembangkan website yang mudah untuk
                                        digunakan serta sudah teroptimasi dengan baik pada mesin pencari. Kami dapat membantu jika
                                        Anda ingin memperbarui desain halaman landing / kampanye atau mengkonversi desain ke dalam
                                        kode HTML. Kami juga dapat mengembangkan beberapa halaman untuk memfasilitasi tes A/B
                                        untuk meningkatkan konversi target Anda. LOGIQUE memiliki tim yang sangat berpengalaman
                                        dalam mendesain dan mengembangkan landing page. Desainer kami akan menyesuaikan halaman
                                        yang sudah ada berdasarkan pengalaman pengintegrasian plugin atau aplikasi seperti
                                        Mailchimp. Kami akan bekerja secara fleksibel sesuai dengan kebutuhan yang Anda inginkan
                                        seperti instalasi AMP, melakukan tes A/B, pembuatan banner iklan menggunakan HTML5 untuk
                                        menunjang kampanye iklan website, dan masih banyak lagi. Kami akan selalu siap membantu
                                        Anda walau hanya untuk satu halaman web saja.</p>
                            </div>
                        </div>
                    </section> -->
                    <section id="webCreate_blog">
                        <div class="service-detail">
                            <div class="service-detail__line-wrapper">
                                <hr class="title__yellow-line">
                            </div>
                            <div class="service-detail__content">
                                <h3 class="service-detail__title">Website Berbasis Wordpress</h4>
                                    <p>Kami juga menyediakan pengembangan website berbasis WordPress dengan layanan kustomisasi . Kami juga dapat mendesain, mengimplementasi, dan memperbaiki keamanan website berbasis Wordpress / blog Anda. Saat ini, ada banyak blog / website yang menghadapi masalah dari sisi keamanan. Karena itu, silakan hubungi kami segera agar kami dapat memastikan sistem keamanan blog Anda.</p>
                            </div>
                        </div>
                    </section>
                    <div class="text-center --back-top">
                        <a href="portofolio.php#webDev">
                            <div class="main-btn --black">Lihat Portfolio</div>
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
                            <h1 class="title-index --yellow">Aplikasi Berbasis Web / Pengelolaan Website</h1>
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
                                <h3 class="service-detail__title">Pengembangan E-Commerce</h3>
                                <p>Kami membantu klien-klien kami mengembangkan dan menjalankan e-commerce berskala enterprise dengan tingkat perencanaan arsitektur sistem dan skalabilitas yang tinggi, yang dapat dikustomisasi dan dikembangkan berdasarkan tren UI / UX terkini. Dengan pengalaman luas yang kami miliki dalam bidang E-Commerce seperti pengembangan sistem E-Commerce untuk B2B, B2C, MLM, serta Flash Sale dan Marketplace, kami juga dapat lebih jauh mengembangkan bisnis E-Commerce Anda dengan pendekatan teknologi baru seperti PWA. Silakan berkonsultasi dengan kami dalam hal apa pun yang berkaitan dengan kebutuhan E-Commerce Anda.</p>
                            </div>
                        </div>
                    </section>
                    <section id="sysDev_automotive">
                        <div class="service-detail">
                            <div class="service-detail__line-wrapper">
                                <hr class="title__yellow-line">
                            </div>
                            <div class="service-detail__content">
                                <h3 class="service-detail__title">Pengembangan Sistem untuk Industri Otomotif</h3>
                                <p>Dengan keberhasilan kami mengembangkan banyak sistem di berbagai bidang dalam industri otomotif (seperti produsen mobil, pengawas kendaraan, agen asuransi mobil, dan rumah lelang), kami percaya kemampuan tim kami untuk memahami dan bekerja bersama para pelaku bisnis otomotif, termasuk dengan efektif memberikan konsultasi terkait yang diperlukan. Beberapa contoh pengembangan sistem yang telah kami kerjakan di antaranya untuk portal marketplace mobil bekas, sistem lelang online, dan aplikasi inspeksi kendaraan.</p>
                            </div>
                        </div>
                    </section>
                    <section id="sysDev_cms">
                        <div class="service-detail">
                            <div class="service-detail__line-wrapper">
                                <hr class="title__yellow-line">
                            </div>
                            <div class="service-detail__content">
                                <h3 class="service-detail__title">Pengembangan dan Pengelolaan Sistem Manajemen Konten (CMS)</h3>
                                <p>LOGIQUE melayani jasa pengembangan CMS yang fleksibel serta aman sehingga mudah untuk Anda kelola. Kami akan membantu Anda mengembangkan CMS dari awal sesuai dengan kebutuhan. Saat ini, kami telah melakukan pengembangan dan pengelolaan CMS untuk beberapa perusaahan besar yang ada di Indonesia.</p>
                            </div>
                        </div>
                    </section>
                    <section id="sysDev_member">
                        <div class="service-detail">
                            <div class="service-detail__line-wrapper">
                                <hr class="title__yellow-line">
                            </div>
                            <div class="service-detail__content">
                                <h3 class="service-detail__title">Sistem Manajemen Pelanggan atau Keanggotaan</h4>
                                    <p>LOGIQUE melayani pembuatan sistem manajemen pelanggan ( CRM ) ataupun sistem manajemen keanggotan dengan skala yang besar. Dalam proses pengembangan sistem, kami selalu memiliki standar keamanan yang komprehensif seperti yang telah kami lakukan di dalam sistem manajemen keanggotaan untuk bank.</p>
                            </div>
                        </div>
                    </section>
                    <div class="text-center --back-top">
                        <a href="/layanan/pembuatan-sistem-web.php">
                            <div class="main-btn --black">Pelajari Lebih Lanjut Tentang Sistem Developer</div>
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
                            <h1 class="title-index --yellow">Solusi Mobile</h1>
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
                                <h3 class="service-detail__title">Pengembangan PWA (Progressive Web App)</h3>
                                <p>LOGIQUE menyediakan layanan pengembangan Progressive Web App (PWA) untuk memberikan nilai tambah pada website Anda. Teknologi ini membuat website Anda dapat diakses seperti aplikasi mobile yang memiliki beragam keunggulan dan dapat mempermudah Anda dalam memuaskan pengguna, meningkatkan interaksi, dan menambah jumlah konversi.</p>
                                <div class="service-detail__btn-wrapper">
                                    <a target="_blank" class="main-btn --yellow" href="/layanan/pembuatan-progressive-web-app.php">Pelajari Lebih Lanjut <span class="hidden-xs">Tentang PWA (Progressive Web App)</span></a>
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
                                <h3 class="service-detail__title">Pengembangan Mobile App</h4>
                                    <p>Kami menyediakan jasa pengembangan aplikasi Android/iOS secara komprehensif yang sudah disesuaikan dengan pasar Indonesia. Kami tidak hanya dapat membantu Anda merancang atau memberikan konsultasi terkait, namun juga mengoptimalkan UI/UX desain, mengembangkan fitur dari aplikasi tersebut, hingga membantu Anda untuk mendaftarkan aplikasi yang dibuat ke App Store / Google Play. Hubungi tim kami untuk berdiskusi lebih lanjut terkait kebutuhan Anda dalam pengembangan mobile app (Android/iOS/Hybrid/PWA).</p>
                                    <div class="service-detail__btn-wrapper">
                                        <a target="_blank" class="main-btn --yellow" href="layanan/pembuatan-aplikasi-mobile.php">Pelajari Lebih Lanjut <span class="hidden-xs">Tentang Mobile App</span></a>
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
                                <h3 class="service-detail__title">Pembuatan Website Responsif / Mobile First</h4>
                                    <p>Membuat website versi mobile sekarang menjadi hal yang sangat penting untuk Anda lakukan karena rata-rata pengunjung lebih banyak mengakses website dari Smartphone mereka. LOGIQUE dapat membantu mengembangkan website responsif yang mengoptimasi tampilan website sesuai dengan ukuran layar yang berbeda-beda. Kami juga secara fleksibel dapat membantu Anda untuk mengimplementasikan penggunaan teknologi baru seperti PWA atau AMP.</p>
                            </div>
                        </div>
                    </section>
                    <div class="text-center --back-top">
                        <a href="portofolio.php#PWA">
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
                        <div class="text-center" style="position: relative;">
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
                                    <p>Kami akan melakukan analisis secara mendalam terhadap optimasi halaman web Anda. Layanan kami mencakup metode pemantauan data dan analisis kebiasaan pengguna. Taraf ukur keberhasilan kami tidak hanya terbatas pada implementasi SEO, namun juga melalui perbaikan website secara umum. <br><br>
                                        Hal ini dapat dibuktikan dari pengalaman-pengalaman SEO kami dalam bahasa Jepang, Inggris, dan Indonesia. Salah satunya, kami telah berhasil menjaga pelanggan kami (sebuah perusahaan finansial) untuk tetap terdaftar di peringkat 1 di Google dalam kata-kata kunci tertentu menggunakan strategi SEO yang kokoh dengan menggabungkan optimasi konten dan teknis. Selain dari itu, kami juga berpengalaman di bidang SEM.</p>
                                    <div class="service-detail__btn-wrapper">
                                        <a target="_blank" class="main-btn --yellow" href="layanan/digital-marketing/jasa-seo.php">Pelajari Lebih <span class="hidden-xs">Lanjut Tentang SEO/SEM</span></a>
                                    </div>
                            </div>
                        </div>
                    </section>
                    <section id="dm_itConsult">
                        <div class="service-detail">
                            <div class="service-detail__line-wrapper">
                                <hr class="title__yellow-line">
                            </div>
                            <div class="service-detail__content">
                                <h3 class="service-detail__title">Pengoperasian Iklan Digital</h4>
                                    <p>Kami menawarkan pendekatan berorientasi hasil yang terhubung dengan manajemen biaya pay-per-click, menyediakan kampanye yang transparan dan terukur, yang memungkinkan Anda untuk mengevaluasi keberhasilan iklan dibandingkan dengan target. Kami berpengalaman di berbagai industri vertikal dan menawarkan layanan proaktif, strategis dan sangat komunikatif. Kami tahu bahwa kampanye yang berhasil mengarah pada pengoptimalan dan penyempurnaan berkelanjutan. Hanya melalui struktur yang tertata dan terkelola dengan ketat, Anda dapat meningkatkan konversi dengan harga yang efektif. Jangan ragu untuk menghubungi kami untuk meningkatkan prospek dan konversi Anda melalui iklan online, strategi PR internet, atau pemasaran SNS.</p>
                                    <div class="service-detail__btn-wrapper">
                                        <a target="_blank" class="main-btn --yellow" href="layanan/digital-marketing.php">Pelajari Lebih Lanjut <span class="hidden-xs">Tentang Pengoperasian Iklan Digital</span></a>
                                    </div>
                            </div>
                        </div>
                    </section>
                    <section id="dm_contentCreate">
                        <div class="service-detail">
                            <div class="service-detail__line-wrapper">
                                <hr class="title__yellow-line">
                            </div>
                            <div class="service-detail__content">
                                <h3 class="service-detail__title">Pembuatan Konten Website</h4>
                                    <p>Kami berupaya untuk memberikan layanan pembuatan konten berkualitas tinggi kepada Anda. Dengan membuat konten sesuai dengan tujuan bisnis Anda, Anda dapat mendapatkan hasil yang terbaik dan menjangkau lebih banyak pelanggan. Kami juga dapat membantu Anda menerjemahkan konten ke dalam bahasa Indonesia, Jepang, atau Inggris, ataupun membuat konten untuk meningkatkan kinerja web Anda dengan menerapkan SEO.</p>
                            </div>
                        </div>
                    </section>
                    <section id="dm_digiMarket">
                        <div class="service-detail">
                            <div class="service-detail__line-wrapper">
                                <hr class="title__yellow-line">
                            </div>
                            <div class="service-detail__content">
                                <h3 class="service-detail__title">Optimasi Landing Page</h4>
                                    <p>LOGIQUE dapat melakukan pengoptimasian SEO terbaik untuk halaman website Anda untuk meningkatkan pengunjung dan konversi. Kami dapat bekerja secara fleksibel untuk memenuhi kebutuhan Anda termasuk pemasangan AMP, pelaksanaan A/B test, ataupun pembuatan banner HTML5. Kami akan selalu siap untuk membantu jika Anda memiliki masalah apapun.</p>
                            </div>
                        </div>
                    </section>
                    <div class="text-center --back-top">
                        <a href="portofolio.php#others">
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
                                <h3 class="service-detail__title">Tes Keamanan Website / Mobile App (VA / Penetration Test)</h3>
                                <p>Dengan melakukan tes keamanan pada website atau mobile app dengan menggunakan penetration test dan mengetahui celah keamanaan yang terdapat website/aplikasi, Anda dapat menghindari serangan seperti SQL injection, cross site scripting, session jacking, dll. Paling tidak, kami dapat membantu Anda memaksimalkan potensi keamanan aset-aset digital Anda. Selain itu, kami memberikan jasa tes keamanan (penetration test) dengan ahli tersertifikasi namun dengan biaya yang terjangkau sehingga Anda tidak perlu ragu melakukan pen-test untuk aset-aset online Anda.</p>
                                <div class="service-detail__btn-wrapper">
                                    <a class="main-btn --yellow" href="layanan/penetration-test.php">Pelajari Lebih Lanjut <span class="hidden-xs">Tentang Penetration Test</span></a>
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
                            <h1 class="title-index --yellow">Lain-Lain</h1>
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
                                <h3 class="service-detail__title">Desain Grafis</h4>
                                    <p>Melalui pembuatan desain flyer / brosur dan alat marketing yang diperlukan, kami dapat membantu menyalurkan pesan penting yang ingin Anda sampaikan lewat metode yang mudah diingat. Mulai dari pembuatan selebaran sederhana hingga kampanye pemasaran langsung, tim kreatif kami yang berpengalaman dapat secara maksimal membantu meningkatkan kredibilitas merek Anda. LOGIQUE mampu membuat materi promosi kreatif yang terarah dan otentik, dengan inovasi dan teknik desain cetak terkini yang memaksimalkan efisiensi dan efektivitas biaya Anda.</p>
                                    <div class="service-detail__btn-wrapper">
                                        <a class="main-btn --yellow" href="portofolio.php#others">Pelajari Lebih Lanjut <span class="hidden-xs">Tentang Desain Grafis</span></a>
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
                                <h3 class="service-detail__title">Operasi Server Cloud (AWS / Alibaba Cloud)</h4>
                                    <p>Kami adalah Mitra AWS yang tersertifikasi, yang dapat mengatur dan mengoptimasi infrastruktur AWS. Kami juga dapat membantu Anda sebagai agen dalam melakukan pembelian Domain Perusahaan Indonesia ("co.id"). Kami juga dapat mengatur DNS dan Global SSL untuk Anda, dan juga menyediakan penyewaan server web seperti AWS, Alibaba Cloud dan GIO Cloud.</p>
                                    <div class="service-detail__btn-wrapper">
                                        <a class="main-btn --yellow" href="/layanan/devops.php">Pelajari Lebih Lanjut <span class="hidden-xs">Tentang Operasi Server Cloud</span></a>
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
                                <h3 class="service-detail__title">Konsultasi Bisnis IT</h4>
                                    <p>Kami dapat menyediakan berbagai layanan konsultasi melalui "Indonesia x IT", yang meliputi pemberian saran terkait pemilihan alat-alat/implementasi teknologi digital, konsultasi pengoperasian bisnis dengan memanfaatkan IT, dukungan peluncuran bisnis startup berbasis digital, pengetesan keamanan sistem, dan banyak lagi.</p>
                            </div>
                        </div>
                    </section>
                    <div class="text-center --back-top">
                        <a href="portofolio.php#others">
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
                                                            <p>Sebagai salah satu perusahaan asuransi jiwa dengan pertumbuhan
                                                                paling
                                                                pesat, kami
                                                                memiliki strategi untuk melayani nasabah melalui layanan digital.
                                                                LOGIQUE berperan
                                                                sebagai mitra strategis kami dalam UI/UX aplikasi layanan nasabah
                                                                My
                                                                Sun Life
                                                                Indonesia. Sebagai hasilnya, My Sun Life Indonesia menjadi salah
                                                                satu
                                                                aplikasi
                                                                dengan rating tertinggi di industri asuransi. Kami sering
                                                                memberikan
                                                                tugas yang
                                                                harus segera diselesaikan, tetapi mereka selalu melakukan yang
                                                                terbaik
                                                                dan tidak
                                                                pernah meruntuhkan kepercayaan kami. Terima kasih atas
                                                                kerjasamanya
                                                                selalu.</p>
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
                                                            <p>Logique has a firm grasp of its clients' requirements and needs.
                                                                Its
                                                                approach to
                                                                delivering its service is collaborative, and thus resulting to a
                                                                shared ownership
                                                                of the product it is helping to develop.</p>
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
                                                            <p>Bisnis kami adalah pelelangan mobil/motor. LOGIQUE telah membantu
                                                                kami
                                                                mengembangkan beragam sistem yang tidak bisa diatasi dengan produk
                                                                sistem paket
                                                                yang ada dan perlu disesuaikan secara khusus agar sesuai dengan
                                                                proses
                                                                bisnis
                                                                kami. Kami menghargai bagaimana Logique telah bekerja dengan kami
                                                                secara fleksibel
                                                                dan selalu stabil, bahkan dengan permintaan kami yang cukup sulit,
                                                                seperti
                                                                kekuatan keamanan.
                                                            </p>
                                                            <br><br>
                                                            <div class="client-testi__person">
                                                                <div class="client-testi__line-wrapper">
                                                                    <hr class="title__yellow-line">
                                                                </div>
                                                                <div class="client-testi__p-name">
                                                                    <b>Mr. Kazuhiro Shioyama,</b><br>
                                                                    Presiden Direktur, PT. JBA Indonesia
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
                                <a href="portofolio.php">
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
                            <h1 class="title-index" style="margin-bottom:0">Hubungi Logique</h1>
                            <p>LOGIQUE siap membantu Anda yang memiliki kebutuhan-kebutuhan berikut ini.</p>
                            <br>
                            <hr class="title__yellow-line">
                            <img src="../img/contact.png" style="width:100%" alt="contact">
                        </div>
                        <div class="col-sm-7">
                            <ul class="lgq-does__list">
                                <li>Belum memiliki website perusahaan.</li>
                                <li>Ingin mengganti vendor, agar dapat melakukan perubahan pada website atau aplikasi berbasis web yang sudah ada.</li>
                                <li>Website saat ini tidak kompatibel dengan tampilan Smartphone dan perlu ditingkatkan.</li>
                                <li>Saya mencari perusahaan yang dapat mengembangkan mobile app dan PWA.</li>
                                <li>Saya ingin membuat website dalam Bahasa Indonesia, Bahasa Inggris dan Bahasa Jepang.</li>
                                <li>Tidak ada staff IT yang dapat membantu mengelola website perusahaan.</li>
                                <li>Membutuhkan sistem atau aplikasi berbasis web yang sederhana, CRM, sistem manajemen penjualan, sistem akuntansi, dll.</li>
                                <li>Saya ingin menggunakan Internet dan WEB untuk mempromosikan merek, menarik pelanggan, dan membedakan diri dari pesaing.</li>
                                <li>Saya ingin menyewa server untuk website dan mencari perusahaan yang dapat mengelolanya.</li>
                                <li>Saya ingin menarik pelanggan menggunakan Facebook dan Instagram</li>
                                <li>Saya ingin menempatkan iklan di Internet</li>
                                <li>Saya ingin melihat apakah ada celah keamanan di Website atau Mobile App yang saya miliki.</li>
                            </ul>
                            <a href="hubungi-kami.php" class="btn btn-contact-us-black" style="width: auto">Hubungi
                                LOGIQUE</a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- <?//php include "./contact-logique-section.php"; ?> -->

        </div>

        <?php include 'footer.php'; ?>
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