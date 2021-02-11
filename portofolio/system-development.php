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
    <link rel="canonical" href="https://www.logique.co.id/portofolio/system-development.php">
    <title>Portofolio Pembuatan Website, Aplikasi Berbasis Web, dan Mobile App | LOGIQUE</title>
    
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
        <?php 
            // $active option are home, about, portfolio, services, product, career, contact
            $active = 'portfolio';
            include($_SERVER['DOCUMENT_ROOT'].'/sidebar.php'); 
        ?>

        <!-- <div id="bgImg" class="others"><div class="img"></div></div> -->
        <!-- <div class="contain-video">
            <video poster="img/video-img.png" id="bgvid" playsinline autoplay muted loop>
                <source src="img/12377093.mp4" type="video/mp4">
            </video>
        </div>
        <div class="bg-white-opacity"></div> -->

        <?php 
            $lang = 'id';
            $en_link = '/en/portfolio/system-development.php';
            $id_link = '#';
            $jp_link = '/jp/portfolio/system-development.php';
            include($_SERVER['DOCUMENT_ROOT'].'/header.php'); 
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

        <div class="portfolio-update ">

            <section class="portfolio__banner portfolio__banner-detail">
                <div class="content-wrapper__">
                    <div class="container__ --top" style="padding:0">
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
                                            itemprop="item"><span itemprop="name">&nbsp;Pembuatan Aplikasi Berbasis Web & PWA</span></a>
                                        <meta itemprop="position" content="2" />
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content-wrapper__">
                    <div class="container__ banner-detail__content">
                        <div class="row">
                            <div class="col-md-offset-1 col-md-7">
                                <div class="title"><h1>Portofolio Pembuatan Aplikasi Berbasis Web & PWA</h1></div>
                                <p class="title__description" style="margin-left: 0;"><strong>LOGIQUE</strong> adalah pengembang Sistem Web / Aplikasi Bebasis Web terkemuka di Indonesia dengan kemampuan pengembangan, kualitas teknik, dan keamanan yang berstandar internasional. <strong>LOGIQUE</strong> telah berhasil mengembangkan dan memelihara ratusan Sistem TI yang mampu membawa bisnis klien ke level yang lebih tinggi.</p>
                                <img src="/img/portfolio/bg-portfolio-detail-mobile.png" alt="" class="img-responsive visible-md visible-lg">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    
            <section class="portfolio-update__contact">
                <div class="py--20px content-wrapper__">
                    <div class="py--0 container__">
                        <div class="row flex__row align-items-center contact__content">
                            <div class="col-xs-12 col-md-8 content__image">
                                <div class="d-flex align-items-center">
                                    <picture>
                                        <source srcset="/layanan/assets/img/img-pwa/icon/icon-contact.svg">
                                        <img src="/layanan/assets/img/img-pwa/icon/icon-contact.png" alt="hubungi kami" class="img-responsive pr--10px ml--30px">
                                    </picture>
                                    <p class="">Ingin Mengembangkan Aplikasi Web atau PWA untuk Bisnis Anda? <br> Konsultasikan Kebutuhan Anda Bersama <span class="logo-font">LOGIQUE</span></p>        
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <div class="row flex__row justify-content-center">
                                    <div class="col-sm-4 col-md-8">
                                        <a href="/hubungi-kami.php" class="form-control btn btn--yellow">HUBUNGI KAMI</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section id="portfolio_sys" class="portfolio-update__content">
                <div class="content-wrapper__">
                    <div class="container__">
                        <h2 class="text-center">System Development</h2>
                        <div class="content__wrapper">
                            <div class="flex__row">
                                <div class="col-md-3 col-sm-6 col-xs-12 content__item content__item--sys">
                                    <div class="item__img">
                                        <img src="/img/portfolio/update/sys-jba.png" alt="">
                                    </div>
                                    <h3>JBA Indonesia; Online Car Auction System Development</h3>
                                    <p>Pengembangan Aplikasi Mobile ( Pengembangan sistem inspeksi kendaraan dan sistem penilaian)</p>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 content__item content__item--sys">
                                    <div class="item__img">
                                        <img src="/img/portfolio/update/sys-assa.png" alt="">
                                    </div>
                                    <h3>Assa <br>System Development</h3>
                                </div>
                                <div class="clearfix visible-sm"></div>
                                <div class="col-md-3 col-sm-6 col-xs-12 content__item content__item--sys">
                                    <div class="item__img">
                                        <img src="/img/portfolio/update/sys-zuttoride.png" alt="">
                                    </div>
                                    <h3>ZuttoRide Indonesia; CRM DevOps</h3>
                                    <p>Pengembangan sistem manajemen pelanggan ( WEB-CRM ) untuk perusahaan layanan sepeda motor di Indonesia.</p>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 content__item content__item--sys">
                                    <div class="item__img">
                                        <img src="/img/portfolio/update/sys-sinarmas.png" alt="">
                                    </div>
                                    <h3>Sinar Mas Land; HRS Development</h3>
                                    <p>Pengembangan Sistem Rekrutmen dan Tes Psikologi Online.</p>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 content__item content__item--sys">
                                    <div class="item__img">
                                        <!-- <img src="/img/portfolio/update/sys-sinarmas.png" alt=""> -->
                                        <div class="portfolio-sec-system__see-details">
                                            <a data-toggle="modal" data-target="#pop1" href="#">
                                                <h3>View Details</h3>
                                                <p>&#11044; &nbsp; &#11044; &nbsp; &#11044;</p>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- <h3>Sinar Mas Land; HRS Development</h3> -->
                                    <p>Manajemen Poin Bermanfaat & Pengembangan Sistem E-Commerce.</p>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 content__item content__item--sys">
                                    <div class="item__img">
                                        <!-- <img src="/img/portfolio/update/sys-sinarmas.png" alt=""> -->
                                        <div class="portfolio-sec-system__see-details">
                                            <a data-toggle="modal" data-target="#pop2" href="#">
                                                <h3>View Details</h3>
                                                <p>&#11044; &nbsp; &#11044; &nbsp; &#11044;</p>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- <h3>Sinar Mas Land; HRS Development</h3> -->
                                    <p>Pengembangan E-Commerce untuk Perusahaan MLM.</p>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 content__item content__item--sys">
                                    <div class="item__img">
                                        <!-- <img src="/img/portfolio/update/sys-sinarmas.png" alt=""> -->
                                        <div class="portfolio-sec-system__see-details">
                                            <a data-toggle="modal" data-target="#pop3" href="#">
                                                <h3>View Details</h3>
                                                <p>&#11044; &nbsp; &#11044; &nbsp; &#11044;</p>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- <h3>Sinar Mas Land; HRS Development</h3> -->
                                    <p>Sistem Pengembangan Manajemen Lelang Kendaraan.</p>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 content__item content__item--sys">
                                    <div class="item__img">
                                        <!-- <img src="/img/portfolio/update/sys-sinarmas.png" alt=""> -->
                                        <div class="portfolio-sec-system__see-details">
                                            <a data-toggle="modal" data-target="#pop4" href="#">
                                                <h3>View Details</h3>
                                                <p>&#11044; &nbsp; &#11044; &nbsp; &#11044;</p>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- <h3>Sinar Mas Land; HRS Development</h3> -->
                                    <p>Pengembangan Aplikasi Mobile (Android Penawaran Lelang).</p>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 content__item content__item--sys">
                                    <div class="item__img">
                                        <!-- <img src="/img/portfolio/update/sys-sinarmas.png" alt=""> -->
                                        <div class="portfolio-sec-system__see-details">
                                            <a data-toggle="modal" data-target="#pop5" href="#">
                                                <h3>View Details</h3>
                                                <p>&#11044; &nbsp; &#11044; &nbsp; &#11044;</p>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- <h3>Sinar Mas Land; HRS Development</h3> -->
                                    <p>Aplikasi Mobile (Sistem Inspeksi/Penilaian Kendaraan).</p>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 content__item content__item--sys">
                                    <div class="item__img">
                                        <!-- <img src="/img/portfolio/update/sys-sinarmas.png" alt=""> -->
                                        <div class="portfolio-sec-system__see-details">
                                            <a data-toggle="modal" data-target="#pop6" href="#">
                                                <h3>View Details</h3>
                                                <p>&#11044; &nbsp; &#11044; &nbsp; &#11044;</p>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- <h3>Sinar Mas Land; HRS Development</h3> -->
                                    <p>Sistem CRM untuk Pelayanan Jalan Kendaraan Bermotor.</p>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 content__item content__item--sys">
                                    <div class="item__img">
                                        <!-- <img src="/img/portfolio/update/sys-sinarmas.png" alt=""> -->
                                        <div class="portfolio-sec-system__see-details">
                                            <a data-toggle="modal" data-target="#pop7" href="#">
                                                <h3>View Details</h3>
                                                <p>&#11044; &nbsp; &#11044; &nbsp; &#11044;</p>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- <h3>Sinar Mas Land; HRS Development</h3> -->
                                    <p>Sistem CRM untuk Pembeli Lelang.</p>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 content__item content__item--sys">
                                    <div class="item__img">
                                        <!-- <img src="/img/portfolio/update/sys-sinarmas.png" alt=""> -->
                                        <div class="portfolio-sec-system__see-details">
                                            <a data-toggle="modal" data-target="#pop8" href="#">
                                                <h3>View Details</h3>
                                                <p>&#11044; &nbsp; &#11044; &nbsp; &#11044;</p>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- <h3>Sinar Mas Land; HRS Development</h3> -->
                                    <p>Sistem Penyimpanan Manajemen Layout/Komponen untuk Penerbit Majalah.</p>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 content__item content__item--sys">
                                    <div class="item__img">
                                        <!-- <img src="/img/portfolio/update/sys-sinarmas.png" alt=""> -->
                                        <div class="portfolio-sec-system__see-details">
                                            <a data-toggle="modal" data-target="#pop9" href="#">
                                                <h3>View Details</h3>
                                                <p>&#11044; &nbsp; &#11044; &nbsp; &#11044;</p>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- <h3>Sinar Mas Land; HRS Development</h3> -->
                                    <p>Pengembangan dan Pengoperasian Situs Pasar Mobil Bekas.</p>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 content__item content__item--sys">
                                    <div class="item__img">
                                        <!-- <img src="/img/portfolio/update/sys-sinarmas.png" alt=""> -->
                                        <div class="portfolio-sec-system__see-details">
                                            <a data-toggle="modal" data-target="#pop10" href="#">
                                                <h3>View Details</h3>
                                                <p>&#11044; &nbsp; &#11044; &nbsp; &#11044;</p>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- <h3>Sinar Mas Land; HRS Development</h3> -->
                                    <p>Pengembangan Sistem Peta Digital.</p>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 content__item content__item--sys">
                                    <div class="item__img">
                                        <!-- <img src="/img/portfolio/update/sys-sinarmas.png" alt=""> -->
                                        <div class="portfolio-sec-system__see-details">
                                            <a data-toggle="modal" data-target="#pop11" href="#">
                                                <h3>View Details</h3>
                                                <p>&#11044; &nbsp; &#11044; &nbsp; &#11044;</p>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- <h3>Sinar Mas Land; HRS Development</h3> -->
                                    <p>Pengembangan Sistem Lelang C2C.</p>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 content__item content__item--sys">
                                    <div class="item__img">
                                        <!-- <img src="/img/portfolio/update/sys-sinarmas.png" alt=""> -->
                                        <div class="portfolio-sec-system__see-details">
                                            <a data-toggle="modal" data-target="#pop12" href="#">
                                                <h3>View Details</h3>
                                                <p>&#11044; &nbsp; &#11044; &nbsp; &#11044;</p>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- <h3>Sinar Mas Land; HRS Development</h3> -->
                                    <p>Pengembangan Sistem Web CMS Untuk Organisasi Publik.</p>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 content__item content__item--sys">
                                    <div class="item__img">
                                        <!-- <img src="/img/portfolio/update/sys-sinarmas.png" alt=""> -->
                                        <div class="portfolio-sec-system__see-details">
                                            <a data-toggle="modal" data-target="#pop13" href="#">
                                                <h3>View Details</h3>
                                                <p>&#11044; &nbsp; &#11044; &nbsp; &#11044;</p>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- <h3>Sinar Mas Land; HRS Development</h3> -->
                                    <p>Pengembangan web CMS untuk e-book commerce.</p>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 content__item content__item--sys">
                                    <div class="item__img">
                                        <!-- <img src="/img/portfolio/update/sys-sinarmas.png" alt=""> -->
                                        <div class="portfolio-sec-system__see-details">
                                            <a data-toggle="modal" data-target="#pop14" href="#">
                                                <h3>View Details</h3>
                                                <p>&#11044; &nbsp; &#11044; &nbsp; &#11044;</p>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- <h3>Sinar Mas Land; HRS Development</h3> -->
                                    <p>Sistem Portal Lowongan Pekerjaan.</p>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 content__item content__item--sys">
                                    <div class="item__img">
                                        <!-- <img src="/img/portfolio/update/sys-sinarmas.png" alt=""> -->
                                        <div class="portfolio-sec-system__see-details">
                                            <a data-toggle="modal" data-target="#pop15" href="#">
                                                <h3>View Details</h3>
                                                <p>&#11044; &nbsp; &#11044; &nbsp; &#11044;</p>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- <h3>Sinar Mas Land; HRS Development</h3> -->
                                    <p>Web Dengan Sistem Rekrutmen.</p>
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

            <!-- modal popup -->
            <!-- modal 1 -->
            <div id="pop1" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4>Manajemen Poin Bermanfaat & Pengembangan Sistem E-Commerce.
                            </h4>
                            <hr>
                            <p>Merupakan sistem berbasis web yang digunakan untuk
                                menyelenggarakan
                                program poin insentif bagi karyawan perusahaan client
                                mereka. Sistem
                                ini terdiri dari beberapa sub sistem yang terintegrasi,
                                yaitu:
                                sistem pemasok (supplier), sistem pengguna (users), dan
                                admin
                                penyedia jasa. <br><br>Pengembangan sistem ini memakan waktu
                                selama
                                6 bulan. Mengusung platform PHP dengan framework pilihan,
                                database
                                MySQL, dan hosting pada Linux server pada layanan cloud AWS,
                                sistem
                                ini terbukti telah mengakomodir kebutuhan bisnis program
                                insentif
                                point bagi karyawan perusahaan.<br><br> Agar menghasilkan
                                sistem
                                dengan performa dan stabilitas tinggi, kami melakukan
                                pengembangan
                                dengan pendekatan efisiensi pada layer aplikasi dan layer
                                database.
                                Kemudian pada sisi infrastruktur server, kami telah
                                menerapkan
                                arsitektur server modern dan memanfaatkan fitur autoscaling
                                dan
                                loadbalancing dari AWS. Dengan begitu, meskipun saat ini
                                sudah
                                mendapat lebih dari 10.000 pengguna aktif yang tersebar di 3
                                sub
                                sistem, performa sistem tetap stabil dan terjaga.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal 2 -->
            <div id="pop2" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4>Pengembangan E-Commerce untuk Perusahaan MLM.</h4>
                            <hr>
                            <p>Sistem e-commerce MLM dengan teknologi berbasis web. Terdiri
                                dari 3
                                modul, yaitu: modul pengelolaan oleh admin, modul
                                distributor, dan
                                modul customer. Sistem ini sudah dilengkapi dengan fitur
                                perhitungan
                                ongkos kirim, perhitungan margin keuntungan distributor,
                                manajemen
                                saldo distributor dan user, pendaftaran online, uang
                                elektronik
                                (e-money), serta pembelian pulsa secara online. Dengan
                                dukungan
                                integrasi dengan layanan payment gateway, customer dapat
                                melakukan
                                transaksi dengan kartu kredit dan virtual account. Sistem
                                ini
                                tergolong cukup kompleks. Serangkaian proses pengembangan
                                memakan
                                waktu selama 6 bulan.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal 3 -->
            <div id="pop3" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4>Sistem Pengembangan Manajemen Lelang Kendaraan.</h4>
                            <hr>
                            <p>Merupakan sistem lelang otomotif dengan tingkat kompleksitas
                                tinggi.
                                Terdiri dari sistem lelang online terintegrasi, sistem
                                manajemen
                                stok inventaris objek lelang, sistem keuangan, serta
                                terintegrasi
                                dengan sistem inspeksi kendaraan dan aplikasi bidding
                                mobile. Sistem
                                ini terintegrasi dengan core system dan sistem pendukung
                                lainnya,
                                sehingga customer dapat menikmati pengalaman mengikuti
                                lelang secara
                                realtime, baik melalui browser desktop maupun via mobile
                                apps.<br><br>Sistem ini dikembangkan dengan platform PHP
                                dengan
                                framework pilihan, terintegrasi dengan teknologi node.js,
                                serta
                                menggunakan database MySQL. Dengan metode manajemen proyek
                                yang
                                efektif, kami berhasil mengembangkan aplikasi ini dalam
                                waktu 6
                                bulan. Performa sistem ini cukup kritikal. Dengan desain
                                arsitektur
                                aplikasi yang baik, serta rancangan arsitektur server
                                tingkat
                                lanjut, performa sistem ini terbilang sangat stabil,
                                meskipun
                                aktivitas user pada sistem ini sudah sangat aktif.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal 4 -->
            <div id="pop4" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4>Pengembangan Aplikasi Mobile (Android Penawaran Lelang).
                            </h4>
                            <hr>
                            <p>Aplikasi berbasis android yang kami rancang untuk memudahkan
                                customer
                                dalam mengikuti lelang online secara realtime. Integrasi
                                platform
                                android dengan node.js, serta desain UI/UX yang baik,
                                menghadirkan
                                pengalaman seperti mengikuti lelang secara langsung di
                                lokasi balai
                                lelang. Dengan dukungan design API berperforma tinggi, dan
                                hosting
                                server berplatform Linux, serta arsitektur server yang telah
                                mengadopsi fitur autoscaling dan loadbalancing dari AWS,
                                maka
                                performa aplikasi bidding ini tidak diragukan lagi.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal 5 -->
            <div id="pop5" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4>Aplikasi Mobile (Sistem Inspeksi/Penilaian Kendaraan).</h4>
                            <hr>
                            <p>Merupakan aplikasi berbasis android yang digunakan untuk
                                kegiatan
                                inspeksi kendaraan yang akan dilelangkan. Lebih dari 900
                                part
                                kendaraan telah diperiksa melalui aplikasi inspeksi ini.
                                Dengan
                                aplikasi ini, proses pemeriksaan dan pencatatan hasil
                                inspeksi dapat
                                dilakukan dengan sangat efisien. Hasil inspeksi langsung
                                tersimpan
                                ke dalam core system secara realtime. <br><br>Dengan design
                                UI/UX
                                yang baik, pengguna aplikasi ini dapat dengan mudah
                                melakukan proses
                                inspeksi, meskipun melibatkan sangat banyak part kendaraan.
                                Dari
                                sisi performa, aplikasi ini sangat stabil. Selain karena
                                android API
                                dirancang dengan pendekatan performa yang baik, sistem ini
                                juga
                                didukung oleh desain arsitektur server yang baik dan telah
                                memanfaatkan fitur autoscaling dan loadbalancing dari AWS.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal 6 -->
            <div id="pop6" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4>Sistem CRM untuk Pelayanan Jalan Kendaraan Bermotor.</h4>
                            <hr>
                            <p>Merupakan sistem CRM untuk asuransi motor. Dengan sistem ini,
                                tim
                                admin dapat dengan mudah mengelola data customer, mengelola
                                perpanjangan periode asuransi, mengelola pembayaran polis,
                                mengelola
                                dealer partner, mengelola harga polis, serta mengelola data
                                klaim
                                asuransi dari customer. Sementara bagi customer, sistem ini
                                memberikan kemudahan dalam hal permintaan perpanjangan
                                asuransi,
                                serta perencanaan asuransi dengan melakukan simulasi harga
                                premi
                                berdasarkan harga kendaraan.<br><br>Sistem ini dibangun
                                dengan
                                teknologi PHP dengan platform pilihan, HTML-CSS3,
                                Javascript,
                                JQuery/Ajax, serta database MySQL. Sistem ini sudah
                                terintegrasi
                                dengan layanan payment gateway dari penyedia layanan
                                terkemuka,
                                sehingga memudahkan customer dalam bertransaksi dengan
                                menggunakan
                                kartu kredit dan uang elektronik.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal 7 -->
            <div id="pop7" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4>Sistem CRM untuk Pembeli Lelang.</h4>
                            <hr>
                            <p>Merupakan sistem CRM bagi customer perusahaan lelang, di mana
                                customer dapat melakukan pengecekan tagihan, mendapatkan
                                informasi
                                penting seperti riwayat keikursertaan lelang, serta
                                mengelola point
                                reward yang mereka dapatkan dari transaksi pembelian yang
                                telah
                                dilakukan. Sistem ini dikembangkan dengan platform PHP
                                dengan
                                framework pilihan, serta menggunakan database MySQL.
                                Customer bisa
                                mendapatkan informasi yang dibutuhkan secara realtime,
                                karena sistem
                                ini terkoneksi dengan core system melalui secured-API.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal 8 -->
            <div id="pop8" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4>Sistem Penyimpanan Manajemen Layout/Komponen untuk Penerbit
                                Majalah.
                            </h4>
                            <hr>
                            <p>Merupakan sistem layout management berbasis web yang
                                digunakan untuk
                                mengatur tata letak kolom iklan untuk media cetak. dari
                                publisher
                                terkemuka asal Jepang. Dengan dukungan desain UI/UX yang
                                baik,
                                aplikasi web ini sangat mudah digunakan (user-friendly).
                                Dengan
                                fitur drag-and-drop, user dapat mengatur tata letak iklan
                                sesuai
                                keinginan. Sistem ini juga memiliki fitur export dan import
                                pengaturan tata letak dalam bentuk file csv. Sistem ini
                                dikembangkan
                                dengan teknologi PHP dengan framework pilihan, JQuery, serta
                                HTML5-CSS3. Proses pengembagan aplikasi web ini membutuhkan
                                waktu 3
                                bulan.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal 9 -->
            <div id="pop9" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4>Pengembangan dan Pengoperasian Situs Pasar Mobil Bekas.</h4>
                            <hr>
                            <p>Merupakan sistem marketplace mobil yang digunakan oleh banyak
                                dealer
                                mobil bekas baik di Jakarta maupun luar Jakarta. Sistem ini
                                dikembangkan dengan teknologi PHP dengan framework pilihan
                                dan
                                berjalan pada platform Linux pada AWS server. Proses
                                pengembangan
                                aplikasi marketplace berbasis web ini membutuhkan waktu
                                selama 3
                                bulan.<br><br>Respon pengguna layanan ini terus meningkat
                                dari waktu
                                ke waktu. Saat ini sistem ini sudah melayani lebih dari
                                30.000
                                pengunjung setiap harinya. Meskipun traffic-nya cukup padat,
                                sistem
                                ini masih sangat stabil. Selain teknologi berbasis web,
                                sistem ini
                                juga terintegrasi dengan mobile apps berbasis Android
                                (Native) dan
                                IOS (Swift).</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal 10 -->
            <div id="pop10" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4>Pengembangan sistem peta digital.</h4>
                            <hr>
                            <p>Pengembangan sistem peta digital. Sistem yang digunakan untuk
                                pemetaan kemajuan suatu proyek yang dilaksanakan di
                                negara-negara
                                ASEAN. Sistem ini dikembangkan dengan teknologi PHP dengan
                                framework
                                pilihan, Google Maps API, HTML5-CSS3, serta database MySQL.
                                Proses
                                pengembangan sistem ini membutuhkan waktu selama 3 bulan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal 11 -->
            <div id="pop11" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4>Pengembangan sistem lelang C2C.</h4>
                            <hr>
                            <p>Merupakan sistem lelang C2C. Terdapat sekitar 2.000 kendaraan
                                yang
                                dilelangkan dan terbagi dalam 4 lelang, dan diikuti sekitar
                                300 user
                                setiap bulannya. Sistem ini dikembangkan dengan teknologi
                                PHP dengan
                                framework pilihan, JQuery / Ajax, HTML5-CSS3, serta database
                                MySQL.
                                Pengembangan sistem ini membutuhkan waktu selama 2 bulan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal 12 -->
            <div id="pop12" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4>Pengembangan sistem web CMS untuk organisasi publik.</h4>
                            <hr>
                            <p>Sistem web CMS untuk organisasi publik: sistem ini
                                dikembangkan untuk
                                mengelola konten website organisasi publik. Dengan sistem
                                ini
                                seorang admin web dapat dengan mudah mengelola konten
                                website
                                tersebut. Sistem web CMS ini dikembangkan dengan teknologi
                                PHP
                                dengan framework pilihan, HTML5-CSS3, javascript, JQuery,
                                dan
                                database MySQL. Proses pengembangan web CMS ini membutuhkan
                                waktu
                                selama 2 bulan.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal 13 -->
            <div id="pop13" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4>Pengembangan web CMS untuk e-book commerce.</h4>
                            <hr>
                            <p>Merupakan sistem CMS yang digunakan oleh sebuah distributor
                                buku asal
                                Jepang. Sistem ini dikembangkan dengan teknologi PHP dengan
                                framework pilihan, HTML5-CSS3, serta database MySQL. Dengan
                                web CMS
                                ini, administrator website dapat dengan mudah mengelola
                                konten
                                website perusahaan. Pengembangan web CMS ini memerlukan
                                waktu selama
                                2 bulan.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal 14 -->
            <div id="pop14" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4>Sistem Portal Lowongan Pekerjaan.</h4>
                            <hr>
                            <p>Merupakan sistem portal lowongan pekerjaan yang dibangun
                                dengan
                                teknologi PHP, HTML5-CSS3, serta database MySQL. Portal
                                lowongan
                                pekerjaan ini dihosting di Linux server AWS. Perusahaan bisa
                                mencari
                                dan menemukan pencari kerja dan pencari kerja dapat melihat
                                pekerjaan kosong dan terbuka di situs web. Calon bisa
                                mengajukan CV
                                untuk posisi secara langsung. Persentase pengguna layanan
                                ini adalah
                                mayoritas perusahaan Jepang yang ada di Indonesia.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal 15 -->
            <div id="pop15" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4>Web Dengan Sistem Rekrutmen.</h4>
                            <hr>
                            <p>Merupakan corporate website yang dilengkapi dengan sistem
                                rekrutmen.
                                Para pencari kerja yang berminat bekerja di perusahan ini
                                dapat
                                melamar langsung melalui website. Dengan tingkat keamanan
                                yang
                                tinggi, kerahasiaan data para pelamar lebih terjamin. Sistem
                                ini
                                dibangun dengan teknologi PHP, dan menggunakan framework
                                pilihan,
                                HTML5-CSS3, serta database Ms. SQL Server. Proses
                                pengembangan
                                membutuhkan waktu 3 bulan.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end modal popup -->

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
