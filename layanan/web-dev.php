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
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=3.0">
    <meta name="description" content="Jasa pembuatan website profesional dan terbaik di Jakarta. Untuk pembuatan website perusahaan di bidang otomotif, e-commerce, asuransi & lainnya | LOGIQUE">
    <meta name="keywords" content="jasa pembuatan website, jasa pembuatan website profesional, jasa pembuatan website jakarta">
    <meta name="author" content="PT LOGIQUE DIGITAL INDONESIA ">
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <link rel="canonical" href="https://www.logique.co.id/layanan/web-dev.php" />

    <meta itemprop="name" content="PT. Logique Digital Indonesia">
    <meta property="og:title" content="Jasa Pembuatan Website Profesional di Jakarta | LOGIQUE">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Logique">
    <meta property="og:url" content="https://www.logique.co.id/layanan/web-dev.php">
    <meta property="og:image" content="https://www.logique.co.id/img/ogimg/layanan.png">
    <meta property="og:description" content="Jasa pembuatan website profesional dan terbaik di Jakarta. Untuk pembuatan website perusahaan di bidang otomotif, e-commerce, asuransi & lainnya | LOGIQUE">
    <title>Jasa Pembuatan Website Profesional di Jakarta | LOGIQUE</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/sidebar-update.css">
    <link rel="stylesheet" href="/css/newstyle.css">
    <!-- <link href="/css/style.css" rel="stylesheet"> -->
    <link href="assets/css/style-webdev-new.css" rel="stylesheet">
    <link href="/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">

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

    <style>
        @media only screen and (max-width: 414px) {
            .breadcrumb {
                padding-left: 15px;
            }
        }
    </style>
    <div class="wrapper wrapper--update-design wrapper--update-design-font o-wrapper top-only ">

        <!-- NAVIGATION -->
        <?php
        // $active option are home, about, portfolio, services, product, career, contact
        $active = 'services';
        include($_SERVER['DOCUMENT_ROOT'] . '/sidebar.php');
        ?>

        <?php
        $lang = 'id';
        $en_link = '/en/services/web-dev.php';
        $id_link = '#';
        $jp_link = '/jp/services/web-dev.php';
        include($_SERVER['DOCUMENT_ROOT'] . '/header.php');
        ?>

        <header class="content-wrapper__ header">
            <div class="bg-header">
                <div class="container__">
                    <div class=" breadcrumb-section container">
                        <ol class="breadcrumb breadcrumb--update-design" itemscope itemtype="http://schema.org/BreadcrumbList">
                            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="/index.php"><span itemprop="name">Beranda</span></a>
                                <meta itemprop="position" content="1" />
                            </li>
                            <li class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="/layanan.php"><span itemprop="name">Layanan</span></a>
                                <meta itemprop="position" content="2" />
                            </li>
                            <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item"><span itemprop="name">Web Development</span></a>
                                <meta itemprop="position" content="3" />
                            </li>
                        </ol>
                    </div>
                    <div class="main-section  ">
                        <div class="row">
                            <div class="col-md-6 "></div>
                            <div class="col-md-6 col-sm-12">
                                <h1 class="title">
                                    <span>Jasa Pembuatan Website <span class="logo-font">LOGIQUE</span></span>
                                </h1>
                                <div class="content">
                                    <p><span class="logo-font">LOGIQUE</span> menyediakan Jasa Pembuatan Website Profesional dengan standar tinggi yang dapat membantu Anda untuk menarik lebih banyak pengunjung, menambah kontak bisnis, dan meningkatkan jumlah pelamar bagi perusahaan Anda.</p>
                                    <p>Bila Anda ingin menggunakan Website sebagai kanal utama dalam pemasaran produk atau layanan yang dimiliki, membuat perbedaan dengan kompetitor, atau memperkuat sisi rekrutmen silahkan menghubungi <span class="logo-font">LOGIQUE</span>.</p>
                                    <p>Dengan pengalaman dan hasil yang telah teruji, <span class="logo-font">LOGIQUE</span> siap membantu Anda.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section class="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-sm-6">
                        <p class="about-title">Anda Perlu Jasa Pembuatan Website Berstandar Internasional? Pilih <span class="logo-font">LOGIQUE</span>!</p>
                        <p class="about-content">
                            <span class="logo-font">LOGIQUE</span> telah mengembangkan lebih dari 200 website untuk klien-klien Internasional dan Lokal. Proyek-proyek yang kami kerjakan bervariasi, di antaranya seperti permintaan website dengan tingkat keamanan dan kualitas yang sangat tinggi yang diperuntukan bagi perusahaan yang berafiliasi dengan lembaga pemerintahan ataupun perusahaan yang bergerak di bidang keuangan. Selain itu ada juga proyek pembuatan website yang membutuhkan tingkat kreativitas desain yang tinggi dan kemampuan pemrograman yang rumit. Dalam melakukan pembuatan website kami memberikan pendekatan fleksibel dengan fokus pada kecepatan penyelesaian proyek namun tidak melupakan kualitas, dan Anda juga tidak perlu khawatir karena harga yang kami berikan masih cukup terjangkau. Jika Anda memerlukan jasa pembuatan website yang dapat dipercaya silakan hubungi <span class="logo-font">LOGIQUE</span>.
                        </p>
                    </div>
                    <div class="col-md-5 col-sm-6">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img loading="lazy" src="assets/img/img-webdev/carousel.png" alt="Dokodemo Kerja" class="img-responsive center-block">
                                </div>
                            </div>
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="flow">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 col-md-5">
                        <img loading="lazy" src="assets/img/img-webdev/flow.png" alt="">
                    </div>
                    <div class="col-sm-7 col-md-7">
                        <p class="flow-title">Tentukan Kebutuhan, Tujuan, dan Budget Anda untuk Mendapatkan Hasil Website Terbaik.</p>
                        <p class="flow-content">
                            Untuk mempermudah Anda, kami telah mempersiapkan beberapa kategori pengembangan website berikut dengan perkiraan waktu dan biayanya. Jangan ragu untuk menghubungi kami bila Anda tidak memahami kategori pengembangan website yang diperlukan. Kami juga siap membantu jika Anda memerlukan penawaran khusus berdasarkan rincian fitur yang sudah dimiliki.
                        </p>
                        <a href="/layanan/webdev-price-range.php" target="_blank">
                            <div class="flow-button">
                                Lihat Opsi Harga Pembuatan Website
                                <img loading="lazy" src="assets/img/img-webdev/arrow.png" alt="">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="discuss">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-sm-7">
                        <p class="discuss-title">Dari <span class="logo-font">LOGIQUE</span> untuk Anda</p>
                        <div class="discuss-content">
                            <p>
                                <span class="logo-font">LOGIQUE</span> ingin menghasilkan Website yang bermanfaat untuk Anda!
                            </p>
                            <p>
                                Kami tahu Anda telah menginvestasikan uang Anda dalam pembuatan Website, untuk itu kami berusaha untuk memproduksi sebuah Website yang dapat memberikan ROI yang maksimal untuk Anda.
                            </p>
                            <p>
                                Sebelum melakukan pengembangan website, melalui komunikasi yang intensif kami dapat memberikan konsultasi dan saran yang diperlukan untuk dapat menghasilkan website terbaik bagi Anda. Namun jika Anda memang hanya ingin fokus pada pengembangan website dan hasil yang cepat kami juga dapat membantu.
                            </p>
                            <p>
                                Sebagai ahli dibidang pemasaran digital, kami juga ingin memberikan bantuan dalam memasarkan dan membuat website Anda bernilai tinggi. Kami berharap dapat bekerja sama dengan Anda, tidak hanya dalam proses pembuatan website namun termasuk pengoperasian dan pemasaran digital jangka panjang yang berkelanjutan.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-5">
                        <img loading="lazy" src="assets/img/img-webdev/discuss.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="announce">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-10 col-sm-offset-1 col-md-offset-0 announce-content">
                                    <p class="announce-title">Partner Profesional dan Tepat Dalam Pengembangan Web</p>
                                    <p class="announce-p">
                                        Khususnya di Indonesia sudah banyak kekecewaan yang timbul dari hasil pengembangan website yang kualitasnya tidak sesuai dengan ekspektasi dan meleset dari tanggal penyelesaian yang sudah ditentukan akibat menggunakan jasa pembuatan website yang kurang baik. Masih ada pelaku bisnis yang berpikir bahwa digital tidak terlalu penting dan hanya mencari layanan berdasarkan harga yang paling murah, alhasil alih-alih mengefisiensikan biaya yang terjadi adalah lebih banyak waktu dan biaya tambahan yang terbuang dalam pengembangan website tersebut.
                                    </p>
                                    <p class="announce-p mb-0">
                                        <span class="logo-font">LOGIQUE</span> hadir untuk memberikan kenyamanan bagi para pelaku bisnis dengan memberikan layanan profesional terbaik dalam pembuatan website dengan harga yang sebanding dengan kualitas yang kami berikan. Dengan investasi yang tepat Anda dapat memperoleh hasil yang maksimal untuk bisnis Anda.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="division">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="division-title">Dukungan yang <span class="logo-font">LOGIQUE</span> Berikan dalam Pembuatan Website</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="division-container">
                            <p class="title">Layanan Pembuatan Website “One-Stop”</p>
                            <p class="content"><span class="logo-font">LOGIQUE</span> memberikan dukungan penuh mulai dari Perencanaan dan Konsultasi, Desain, Pemrograman, Pengoperasian atau Pengelolaan Website hingga Pemasaran Digital yang mencakup pembuatan konten, peningkatan SEO, dan pengelolaan iklan digital.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="division-container">
                            <p class="title">Kualitas Terbaik, Teknologi Terbaru dan Tingkat Keamanan Tinggi</p>
                            <p class="content">
                                Kami berpengalaman dan terus menerus terupdate dalam pengimplementasian teknologi baru seperti PWA dan AMP yang dapat memberikan manfaat lebih untuk Anda, termasuk pengembangan berbagai fungsi kompleks untuk berbagai situs web apa pun. Sebelum di rilis, Website Anda terlebih dahulu akan dilakukan pemeriksaan oleh para pakar keamanan website kami sehingga lebih terjamin keamanannya.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="division-container">
                            <p class="title">Cepat dan Fleksibel</p>
                            <p class="content">Kami terbiasa bekerja dengan cepat karena kami mengerti betapa berartinya waktu bagi Anda. Selain itu kami juga dapat bekerja secara fleksibel untuk memenuhi kebutuhan yang dinamis atau perubahan berkelanjutan pada website Anda dengan menerapkan skema pengembangan khusus. Jika Anda ingin mengupdate atau melakukan penyesuaian pada situs web, kami siap membantu Anda.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-layout web-service-flow">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-4">
                        <div class="analysis-part flow-part">
                            <img loading="lazy" src="assets/img/img-webdev/feature/authentication.svg" alt="アクセス解析・課題抽出">
                            <h3>Analisis dan Evaluasi</h3>
                            <p>Anda sudah punya website dan berkeinginan untuk memperbaikinya? Kami siap untuk melakukan analisis dan mengevaluasi kondisi website Anda saat ini. Contoh analisa yang biasanya kami lakukan adalah terkait mengapa jumlah kunjungan website Anda sangat rendah dan apakah ada faktor-faktor internal di dalam website seperti struktur halaman / url yang mempengaruhi kondisi tersebut. Tim kami ahli dalam menganalisis kinerja website Anda secara keseluruhan dan mampu memberikan solusi dari permasalahan yang ada.</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-4">
                        <div class="plan-part flow-part">
                            <img loading="lazy" src="assets/img/img-webdev/feature/web-development.png" alt="プランニング">
                            <h3>Perencanaan</h3>
                            <p>Untuk mencapai tujuan yang Anda inginkan dari pengembangan sebuah website diperlukan perencanaan yang baik. Tim konsultan kami secara dekat akan berinteraksi dengan Anda dalam mengumpulkan semua kebutuhan, memformulasikannya kedalam kerangka halaman (wireframe) dan dokumen-dokumen pendukung lainnya yang diperlukan. Hal ini akan membuat pelaksanaan pengembangan website dapat berjalan lancar dan sesuai ekspektasi.</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-4">
                        <div class="seo-part flow-part">
                            <img loading="lazy" src="assets/img/img-webdev/feature/searchseo.png" alt="SEO / SEM">
                            <h3>SEO / SEM</h3>
                            <p>Hanya dengan membuat dan merilis website tidak serta merta membuat website tersebut mendapatkan banyak kunjungan. Para ahli di perusahaan kami sangat mengenal dan memahami langkah-langkah dalam melakukan penerapan SEO di Indonesia sehingga akan membuat situs web Anda dapat terlihat pada halaman pencarian organic ketika kata kunci yang relevan dengan bisnis Anda dimasukkan ke dalam mesin pencari. Kami juga dapat melakukan strategi SEM untuk meningkatkan trafik secara cepat menggunakan kata kunci yang efektif.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-4">
                        <div class="info-part flow-part">
                            <img loading="lazy" src="assets/img/img-webdev/feature/learning.png" alt="情報再構成・改善">
                            <h3>Peningkatan dan Restrukturisasi</h3>
                            <p>Jika Anda telah memiliki sebuah website, kami tidak selalu menyarankan untuk membuat ulang website Anda dari awal karena masalah-masalah yang ditemukan. Sebab, hal tersebut terkadang membutuhkan banyak pekerjaan serta biaya yang harus dikeluarkan. Untuk kasus seperti ini, kami akan menawarkan kepada Anda solusi terbaik dalam mengatur dan meningkatkan website sesuai dengan budget Anda serta berapa lama waktu yang Anda inginkan.</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-4">
                        <div class="multiligual-part flow-part">
                            <img loading="lazy" src="assets/img/img-webdev/feature/interpreter.png" alt="多言語Webサイト制作運用">
                            <h3>Membuat dan Mengoperasikan Website Multi Bahasa</h3>
                            <p>Kami dapat membuat dan mengoperasikan website dalam Bahasa Indonesia, Bahasa Inggris, dan Bahasa Jepang. Kami mengerti dan memahami bahwa konten yang kreatif dan tersegmentasi dengan baik sangat penting untuk menjangkau target pasar yang diinginkan.</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-4">
                        <div class="sosmed-part flow-part">
                            <img loading="lazy" src="assets/img/img-webdev/feature/social-media.png" alt="SNS運用">
                            <h3>Pengoperasian Media Sosial</h3>
                            <p>Media sosial dapat memberi pengaruh yang sangat kuat dalam meningkatkan hubungan bisnis dengan para pelanggan Anda. Selain itu, media sosial juga dapat membantu mendukung peningkatan jumlah pengunjung website Anda. Kami memberikan layanan dalam mengoperasikan media sosial, seperti Facebook dan Instagram untuk kepentingan bisnis Anda baik dalam Bahasa Indonesia, Bahasa Inggris, dan Bahasa Jepang.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-4">
                        <div class="design-part flow-part">
                            <img loading="lazy" src="assets/img/img-webdev/feature/graphic-design.png" alt="デザイン制作">
                            <h3>Pembuatan Desain</h3>
                            <p>Kami dapat merancang UI yang sesuai dengan tren desain website terkini, yang ramah bagi pengguna, dan sesuai dengan kebutuhan Anda. Tim desain kami dapat menyarankan kepada Anda berbagai alternatif desain yang berbeda untuk Anda pilih.</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-4">
                        <div class="markup-part flow-part">
                            <img loading="lazy" src="assets/img/img-webdev/feature/css.png" alt="マークアップ・コーディング">
                            <h3>Markup Coding</h3>
                            <p>Anda juga dapat meminta layanan khusus hanya untuk implementasi tampilan website dengan pemrograman HTML/CSS. Tim developer kami dapat membantu Anda mengejar ketertinggalan teknologi pemrograman pada situs web Anda atau mengkombinasikannya dengan JavaScript.</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-4">
                        <div class="responsive-part flow-part">
                            <img loading="lazy" src="assets/img/img-webdev/feature/responsive.png" alt="マルチデバイス対応">
                            <h3>Dukungan Multi Perangkat</h3>
                            <p>Kami dapat membuat situs yang dioptimalkan dan responsif untuk seluruh jenis perangkat, seperti ponsel, tablet, dan desktop. Kami juga telah mempunyai banyak pengalaman dalam membuat situs web yang berorientasi pada pengguna mobile dan pengaplikasian AMP.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-4">
                        <div class="programing-part flow-part">
                            <img loading="lazy" src="assets/img/img-webdev/feature/web-programming.png" alt="プログラミング">
                            <h3>Fitur Pemrograman Khusus</h3>
                            <p>Anda dapat meminta fitur pemrograman apapun yang Anda inginkan untuk ditambahkan ke dalam situs web Anda, seperti Parallax motions yang dapat diimplementasi dengan kombinasi JavaScript, HTML5, CSS3 dan lain-lain. Kami akan mengusulkan pengembangan situs web yang menarik untuk para pengguna yang telah disesuaikan dengan kebutuhan Anda.</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-4">
                        <div class="system-part flow-part">
                            <img loading="lazy" src="assets/img/img-webdev/feature/control-panel.png" alt="システム構築">
                            <h3>Pembuatan Sistem Berbasis Web</h3>
                            <p><span class="logo-font">LOGIQUE</span> dapat membantu Anda mengembangkan sistem berbasis web mulai dari manajemen konten (CMS), fungsi-fungsi khusus yang dibuat sesuai dengan kebutuhan, hingga integrasi dengan sistem-sistem eksternal menggunakan Web Service (API). Kami ahli dalam mengembangkan sistem berbasis web menggunakan Laravel, .Net, NodeJS, dan lain-lain.</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-4">
                        <div class="apps-part flow-part">
                            <img loading="lazy" src="assets/img/img-webdev/feature/application.png" alt="モバイルアプリ対応">
                            <h3>Pengembangan Website Berteknologi PWA</h3>
                            <p>Kami berpengalaman dan dapat membantu Anda mengembangkan website dengan teknologi PWA yang menghasilkan sebuah aplikasi web yang berlaku layaknya sebuah aplikasi mobile. Beberapa fitur menarik yang terdapat dalam teknologi PWA di antaranya adalah Installasi dengan Add to Homescreen, Push Notification, dan Mode Offline.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="portofolio">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="title">Portofolio Pembuatan Website</p>
                        <p class="content">Berikut adalah beberapa contoh hasil produksi web <span class="logo-font">LOGIQUE</span>.
                        </p>
                    </div>
                </div>
                <div class="row portofolio-section">
                    <div class="col-md-6 col-lg-4 col-sm-4" data-toggle="modal" data-target="#exampleModalLong">
                        <img loading="lazy" src="assets/img/img-webdev/AIA.png" alt="AIA website">
                        <p class="portofolio-title text-center">AIA</p>
                    </div>
                    <div class="col-md-6 col-lg-4 col-sm-4" data-toggle="modal" data-target="#exampleModalLong2">
                        <img loading="lazy" src="assets/img/img-webdev/panin.png" alt="panin website">
                        <p class="portofolio-title text-center">Panin Life Dai - Ichi</p>
                    </div>
                    <div class="col-md-6 col-lg-4 col-sm-4" data-toggle="modal" data-target="#exampleModalLong3">
                        <img loading="lazy" src="assets/img/img-webdev/JBA.png" alt="jba website">
                        <p class="portofolio-title text-center">JBA</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="strategic">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="title">Strategi Pengembangan Website di <span class="logo-font">Logique</span></p>
                        <p class="subtitle">Sebagai perusahaan profesional dalam bidang pembuatan web, <span class="logo-font">Logique</span> memiliki standar pelaksanaan dan strategi yang dapat memastikan website yang kami hasilkan berkualitas tinggi dan bermanfaat untuk tujuan bisnis Anda. Berikut adalah beberapa contoh gambaran strategi yang diterapkan oleh <span class="logo-font">LOGIQUE</span>.</p>
                    </div>
                </div>
                <div class="row strategic-list">
                    <div class="col-md-4 col-lg-4 col-sm-6">
                        <img loading="lazy" src="assets/img/img-webdev/strategic/1.png" alt="">
                        <p class="strategic-title">User Experience (UX)</p>
                        <p class="strategic-content">Menyediakan fungsi dan konten Web yang sesuai dengan perilaku dan kebutuhan pelanggan akan menghasilkan Website yang mengarah pada konversi.</p>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-6">
                        <img loading="lazy" src="assets/img/img-webdev/strategic/2.png" alt="">
                        <p class="strategic-title">Analisa Persona</p>
                        <p class="strategic-content">Buat target pelanggan utama konkret dan terlihat. Ini akan mengarah pada pembuatan situs web yang menarik bagi target.</p>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-6">
                        <img loading="lazy" src="assets/img/img-webdev/strategic/3.png" alt="">
                        <p class="strategic-title">SEO Keywords</p>
                        <p class="strategic-content">Kata kunci target dipilih dengan menganalisis jumlah pencarian dan tingkat persaingan guna mendapatkan daftar kata kunci terbaik yang akan digunakan dalam SEO dan pembuatan konten.</p>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-6">
                        <img loading="lazy" src="assets/img/img-webdev/strategic/4.png" alt="">
                        <p class="strategic-title">Konsep Branding</p>
                        <p class="strategic-content">Membuat rancangan brand Anda secara terukur dan sesuai dengan lini bisnis Anda, termasuk pembuatan logo.</p>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-6">
                        <img loading="lazy" src="assets/img/img-webdev/strategic/5.png" alt="">
                        <p class="strategic-title">Detil Konsep</p>
                        <p class="strategic-content">Tentukan konsep dan gambarkan lebih lanjut pesan dan branding Anda lewat misi, visi, dan konten yang terarah pada website untuk menjangkau target Anda.</p>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-6">
                        <img loading="lazy" src="assets/img/img-webdev/strategic/6.png" alt="">
                        <p class="strategic-title">Pedoman Design</p>
                        <p class="strategic-content">Buat panduan desain untuk memastikan konsistensi pada elemen-elemen desain termasuk warna, font, margin, dll.</p>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-6">
                        <img loading="lazy" src="assets/img/img-webdev/strategic/7.png" alt="">
                        <p class="strategic-title">Analisa Pengunjung</p>
                        <p class="strategic-content">Menganalisis status akses Website saat ini dan mengklarifikasi masalah. Analisis terperinci adalah kunci untuk menetapkan KPI yang konkret dan realistis.</p>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-6">
                        <img loading="lazy" src="assets/img/img-webdev/strategic/8.png" alt="">
                        <p class="strategic-title">Sitemap</p>
                        <p class="strategic-content">Tentukan struktur situs web, struktur halaman konten. Diperlukan untuk navigasi yang tepat & desain struktur tautan internal.</p>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-6">
                        <img loading="lazy" src="assets/img/img-webdev/strategic/9.png" alt="">
                        <p class="strategic-title">Wireframe</p>
                        <p class="strategic-content">Dokumen yang menentukan tata letak dan komponen setiap halaman web. Berdasarkan ini, kami terus merancang produksi.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 strategic-exp">
                        <p>上記は一例です。ほかにも、プロジェクト毎に必要なドキュメントを制作し納品します。
                        </p>
                        <p>
                            あくまでより良いWebを公開して運用するための戦略策定＆ドキュメント作成です。
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="service">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="title">Layanan Lain <span class="logo-font">LOGIQUE</span> Terkait Pembuatan Website</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="link-page-price-and-portfolio">
                            <a class="link-yellow-white" href="/layanan/devops.php">Pengoperasian Server Cloud</a>
                            <a class="link-yellow-white" href="/layanan/penetration-test.php">Diagnosa Keamanan Website</a>
                        </div>
                        <div class="link-page-price-and-portfolio">
                            <a class="link-yellow-white" href="/layanan/pembuatan-sistem-web.php">Pengembangan Sistem Berbasis Web</a>
                            <a class="link-yellow-white" href="/layanan/pembuatan-aplikasi-mobile">Pengembangan Aplikasi Mobile</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="content-article">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="title">Artikel Terkait Pembuatan Website</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="carousel slide multi-item-carousel" id="theCarousel">
                            <div class="carousel-inner">

                                <?php
                                function shorten_string($string, $wordsreturned)
                                {
                                    $retval = $string;
                                    $string = preg_replace('/(?<=\S,)(?=\S)/', ' ', $string);
                                    $string = str_replace("\n", " ", $string);
                                    $array = explode(" ", $string);
                                    if (count($array) <= $wordsreturned) {
                                        $retval = $string;
                                    } else {
                                        array_splice($array, $wordsreturned);
                                        $retval = implode(" ", $array) . " ...";
                                    }
                                    return $retval;
                                }
                                function tgl_indo($tanggal)
                                {
                                    $bulan = array(
                                        1 =>   'Januari',
                                        'Februari',
                                        'Maret',
                                        'April',
                                        'Mei',
                                        'Juni',
                                        'Juli',
                                        'Agustus',
                                        'September',
                                        'Oktober',
                                        'November',
                                        'Desember'
                                    );
                                    $pecahkan = explode('-', $tanggal);

                                    // variabel pecahkan 0 = tanggal
                                    // variabel pecahkan 1 = bulan
                                    // variabel pecahkan 2 = tahun

                                    return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
                                }
                                $url = file_get_contents('https://www.logique.co.id/blog/wp-json/wp/v2/posts/?tags=108&per_page=5&_embed');

                                $x = 0;

                                $remote_posts = json_decode($url);
                                // printf('<pre>'); 
                                //  var_dump($url);
                                // printf('</pre>');
                                foreach ($remote_posts as $remote_post) {
                                    $thumb_full_url = '';
                                    $thumb_url = '';

                                    if (!empty($remote_post->featured_media) && isset($remote_post->_embedded)) {
                                        $thumb_full_url = $remote_post->_embedded->{'wp:featuredmedia'}[0]->source_url;
                                        $thumb_url = $remote_post->_embedded->{'wp:featuredmedia'}[0]->media_details->sizes->medium->source_url;
                                    }
                                    if ($x == 0) {
                                ?>
                                        <div class="item active ">
                                        <?php } else {
                                        echo ' <div class="item ">';
                                    }

                                        ?>
                                        <div class="col-xs-12 col-sm-6 col-md-6 article-container">
                                            <div class="img-container">
                                                <img loading="lazy" src="<?= $thumb_full_url ?>" class="img-responsive">
                                            </div>
                                            <div class="content-container">
                                                <a href="<?= $remote_post->link ?>" target="_blank">
                                                    <p class="title"><?= $remote_post->title->rendered ?></p>
                                                </a>
                                                <p class="content"><?php
                                                                    $array = preg_replace("/<.+>/sU", "", $remote_post->excerpt->rendered);
                                                                    $array =  shorten_string($array, 25);
                                                                    echo $array;
                                                                    ?></p>
                                                <p class="date"><?php
                                                                $tanggal = date(' Y-m-d', strtotime($remote_post->date));
                                                                $idtanggal = tgl_indo($tanggal);
                                                                echo $idtanggal;  ?> | By <?php
                                                                                        echo $remote_post->_embedded->author[0]->name;
                                                                                        ?></p>
                                            </div>
                                        </div>

                                        </div>

                                    <?php $x++;
                                }

                                    ?>

                                    <!--  Example item end -->
                            </div>
                            <ol class="carousel-indicators article-indicators">
                                <li data-target="#theCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#theCarousel" data-slide-to="1"></li>
                                <li data-target="#theCarousel" data-slide-to="2"></li>
                                <li data-target="#theCarousel" data-slide-to="3"></li>
                            </ol>
                        </div>
                    </div>
                </div>

            </div>
    </div>
    </section>

    <section class="gallery content-article">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="title">White Paper Tentang Pembuatan Web di Indonesia</p>
                </div>
            </div>
            <div class="row gallery-container white-paper">
                <div class="col-xs-12 col-sm-4 col-md-4 article-container">
                    <div class="img-container">
                        <img loading="lazy" src="assets/img/img-webdev/gly1.png" class="img-responsive">
                        <a href="/white-paper-web-dev-1.php" target="_blank">
                            <p class="gallery-title">Cara Membuat Website yang Efektif untuk Bisnis Anda</p>
                            <p class="gallery-content">Download</p>
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 article-container">
                    <div class="img-container">
                        <img loading="lazy" src="assets/img/img-webdev/gly2.png" class="img-responsive">
                        <a href="/white-paper-web-dev-2.php" target="_blank">
                            <p class="gallery-title">Membangun Website
                                E-Commerce yang Menarik</p>
                            <p class="gallery-content">Download</p>
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 article-container">
                    <div class="img-container">
                        <img loading="lazy" src="assets/img/img-webdev/gly3.png" class="img-responsive">
                        <a href="/white-paper-web-dev-3.php" target="_blank">
                            <p class="gallery-title">Peran dan Pentingnya
                                Pengujian Penetrasi dalam
                                Proses Bisnis Perusahaan</p>
                            <p class="gallery-content">Download</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="obstacle">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Alur Pembuatan Situs Web di <span class="logo-font">LOGIQUE</span></h2>
                    <p>
                        Pembuatan situs web dari <span class="logo-font">LOGIQUE</span> selalu berfokus pada penyesuaian antara kecepatan dan kualitas. Para ahli dan pekerja profesional kami siap bertanggung jawab terhadap setiap langkah yang dilakukan. Alur pembuatan situs web sangat terstruktur, mulai dari perencanaan dan pengajuan, desain, pengembangan, serta pengoperasian untuk mewujudkan situs web terbaik. Tahapan <span class="logo-font">LOGIQUE</span> untuk membuat sebuah situs web juga dapat bervariasi, tergantung dari jenis proyek (ukuran situs web, kebutuhan CMS, kesulitan dalam pengembangan sistem, dll). Berikut ini adalah alur umum dalam pembuatan situs web di <span class="logo-font">LOGIQUE</span>.
                    </p>
                </div>
                <div class="col-md-6 text-center">
                    <a href="/" target="_blank"><img loading="lazy" src="assets/img/img-webdev/logo.png" alt="Fitur Perusahaan"></a>
                </div>
            </div>
        </div>
    </section>
    <section class="tahap-pemesanan">
        <div class="container tahap-pemesanan-bg">
            <div class="row">
                <div class="col-md-offset-6 col-md-6">
                    <div class="card" style="height: fit-content;">
                        <section class="card-container" style="padding: 1em 0;">
                            <div class="row">
                                <div class="col-xs-2 col-sm-2 col-md-2 text-right">
                                    <span class="title-custom">1</span>
                                </div>
                                <div class="col-xs-10 col-sm-10 col-md-10">
                                    <p class="title-custom-p"><b>Hubungi Kami</b></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-offset-2 col-md-10 m-t-10">
                                    <p class="title-content-p">
                                        Tim kami siap untuk menerima pesan dari Anda kapan saja. Agar kami dapat membantu dengan baik, mohon dapat diberikan gambaran umum terkait kebutuhan Anda, misalnya pembuatan atau pengoperasian website, implementasi manajemen konten (CMS), pengembangan sistem berbasis website, dan lain-lain. Anda dapat menghubungi kami langsung melalui email <a href="mailto:info@logique.co.id">info@logique.co.id</a> atau melakukan pengisian formulir pemesanan yang tersedia <a href="/hubungi-kami.php" target="_blank">di sini</a>. Anda juga dapat bertanya dan berkonsultasi dengan kami mengenai berbagai hal yang berkaitan dengan pengembangan website. Jangan ragu untuk berbicara dengan kami dalam Bahasa Indonesia, Bahasa Inggris, atau Bahasa Jepang. Kami akan langsung menghubungi Anda untuk melakukan diskusi lebih lanjut.
                                    </p>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="tahap-pemesanan-2 first-row">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-4">
                    <div class="card2">
                        <div class="row">
                            <div class="col-xs-2 col-sm-2 col-md-2 text-right">
                                <span class="title-custom">2</span>
                            </div>
                            <div class="col-xs-10 col-sm-10 col-md-10">
                                <p class="title-custom-p"><b>Mendengar</b></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-offset-2 col-md-10 m-t-10">
                                <p class="title-content-p">
                                    Anda mungkin mempunyai visi dan target yang lebih spesifik, seperti pembuatan website atau sistem yang mengarah pada optimasi bisnis secara operasional, peningkatan keuntungan, keperluan branding, rekrutmen, dan lain-lain. Kami ingin mendengar semuanya dari Anda. Tidak harus bertemu, namun jika Anda mau, kami dapat menghubungi Anda melalui aplikasi komunikasi pertemuan online yang ada, sehingga kami dapat berbicara lebih lanjut mengenai bisnis Anda. Setelah itu, kami akan memberikan beberapa saran yang telah disesuaikan berdasarkan minat Anda, serta beberapa pendekatan efektif sesuai dengan kebutuhan Anda.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="card2">
                        <div class="row">
                            <div class="col-xs-2 col-sm-2 col-md-2 text-right">
                                <span class="title-custom">3</span>
                            </div>
                            <div class="col-xs-10 col-sm-10 col-md-10">
                                <p class="title-custom-p"><b>Perencanaan / Pengajuan Proposal</b></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-offset-2 col-md-10 m-t-10">
                                <p class="title-content-p">
                                    Setelah kami memahami segalanya, kami akan langsung mengusulkan solusi atau website seperti apa yang Anda butuhkan untuk menyelesaikan permasalahan tersebut di dalam sebuah proposal. Dalam proposal tersebut akan terdapat detil ruang lingkup beserta estimasi harga dan berapa lama waktu yang dibutuhkan untuk pembuatan website Anda. Aspek-aspek tersebut kami kalkulasi secara transparan berdasarkan tingkat kesulitan serta jumlah anggota tim yang diperlukan untuk menyelesaikan pekerjaan yang ada. Selain itu, jika diperlukan kami juga dapat memberikan tambahan informasi dari penelitian terhadap pesaing atau website sejenis yang sudah ada, dan layanan opsional, seperti fotografi, videografi dan pembuatan konten yang diperlukan. Dalam pembuatan proposal kami menghargai waktu Anda dan akan berusaha memberikan proposal tersebut dalam waktu yang cepat.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="card2">
                        <div class="row">
                            <div class="col-xs-2 col-sm-2 col-md-2 text-right">
                                <span class="title-custom">4</span>
                            </div>
                            <div class="col-xs-10 col-sm-10 col-md-10">
                                <p class="title-custom-p"><b>
                                        Tanda Tangan Kontrak
                                    </b></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-offset-2 col-md-10 m-t-10">
                                <p class="title-content-p">
                                    Jika Anda menyetujui apa yang telah kami tawarkan, maka proses selanjutnya adalah penandatangan kontrak serta pembayaran uang muka sebesar 50% dari total anggaran biaya yang tertera di dalam proposal. Setelah pembayaran selesai dilakukan, maka tim kami akan langsung mememulai pekerjaan untuk pembuatan situs web Anda.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="tahap-pemesanan-2 second-row">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-4">
                    <div class="card2">
                        <div class="row">
                            <div class="col-xs-2 col-sm-2 col-md-2 text-right">
                                <span class="title-custom">5</span>
                            </div>
                            <div class="col-xs-10 col-sm-10 col-md-10">
                                <p class="title-custom-p"><b>Konfirmasi Ruang Lingkup</b></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-offset-2 col-md-10 m-t-10">
                                <p class="title-content-p">
                                    Pertama, kami akan melakukan konfirmasi mengenai seluruh detil struktur situs website Anda serta persyaratan yang dibutuhkan. Hal ini bertujuan untuk memastikan bahwa tidak ada poin yang terlewat sehingga menyebabkan terjadinya hambatan dalam proses pembuatan website tersebut. Kami juga akan menunjukkan layout halaman berupa Wireframe yang telah kami buat sebagai gambaran awal untuk dikonfirmasi sebelum dilanjutkan ke tahap desain. Selain itu, pada tahap ini kami juga akan mengkonfirmasi beberapa poin tambahan seperti domain, server, atau akses Google Analytics yang sudah Anda miliki.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="card2">
                        <div class="row">
                            <div class="col-xs-2 col-sm-2 col-md-2 text-right">
                                <span class="title-custom">6</span>
                            </div>
                            <div class="col-xs-10 col-sm-10 col-md-10">
                                <p class="title-custom-p"><b>Pembuatan Desain</b></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-offset-2 col-md-10 m-t-10">
                                <p class="title-content-p">
                                    Kami akan mulai dengan pembuatan desain untuk halaman utama berdasarkan referensi dan acuan desain perusahaan yang Anda berikan. Tim kami dapat membantu memberikan beberapa alternatif pilihan desain dan merevisinya sesuai dengan masukkan Anda. Setelah Anda setuju, maka langkah selanjutnya kami akan membuat sisa halaman berdasarkan desain yang telah disetujui.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="card2">
                        <div class="row">
                            <div class="col-xs-2 col-sm-2 col-md-2 text-right">
                                <span class="title-custom">7</span>
                            </div>
                            <div class="col-xs-10 col-sm-10 col-md-10">
                                <p class="title-custom-p"><b>Pemrograman dan Implementasi</b></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-offset-2 col-md-10 m-t-10">
                                <p class="title-content-p">
                                    Pada tahap ini, kami akan mengkonversi desain yang ada menjadi halaman-halaman website dan mengembangkan berbagai fungsi dari ruang lingkup yang telah disepakati, termasuk manajemen konten (CMS), penerapan SEO, dan implementasi standar keamanan website. Kami juga akan memastikan bahwa seluruh arsitektur serta berbagai fitur yang ada telah berjalan dan berfungsi dengan semestinya.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="tahap-pemesanan-2 third-row">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-4">
                    <div class="card2">
                        <div class="row">
                            <div class="col-xs-2 col-sm-2 col-md-2 text-right">
                                <span class="title-custom">8</span>
                            </div>
                            <div class="col-xs-10 col-sm-10 col-md-10">
                                <p class="title-custom-p"><b>Pengujian & Verifikasi</b></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-offset-2 col-md-10 m-t-10">
                                <p class="title-content-p">
                                    Setiap kami selesai melakukan pekerjaan dalam setiap fitur, maka kami akan melakukan tes yang disesuaikan dengan lingkup yang ada. Kami akan memastikan tampilan desain sesuai, tidak ada kesalahan sintaks HTML, website sepenuhnya telah mobile-friendly, setiap halaman dapat dimuat dengan cepat, serta penerapan SEO telah dilakukan secara efektif. Kami juga akan memastikan dari sisi keamanan sudah sesuai dengan standar keamanan website yang harus dipenuhi. Setelahnya, kami akan mendemonstrasikan fitur tersebut kepada Anda secara berkala sehingga Anda dapat langsung memberikan masukkan kepada kami. Ketika proyek telah memasuki tahap finalisasi, maka Anda dapat melakukan pengetesan untuk memastikan dan mengkonfirmasi bahwa seluruh fungsi yang diterapkan telah sesuai dan berjalan dengan baik.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="card2">
                        <div class="row">
                            <div class="col-xs-2 col-sm-2 col-md-2 text-right">
                                <span class="title-custom">9</span>
                            </div>
                            <div class="col-xs-10 col-sm-10 col-md-10">
                                <p class="title-custom-p"><b>Peluncuran Website</b></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-offset-2 col-md-10 m-t-10">
                                <p class="title-content-p">
                                    Pada tahapan ini, file-file website Anda akan dimasukkan ke dalam web server untuk dipublikasikan. Kami juga dapat membantu Anda untuk memindahkan seluruh data yang berasal dari website Anda yang lama jika diperlukan. Setelah dipublikasi, selanjutnya kami akan melakukan pengaturan Google Web Console dan Google Analytics untuk kebutuhan pemantauan data pengunjung dan pengelolaan website lebih lanjut. Pada tahap ini juga, Anda dapat melunasi sisa pembayaran sehingga situs web Anda dapat langsung digunakan.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="card2">
                        <div class="row">
                            <div class="col-xs-2 col-sm-2 col-md-2 text-right">
                                <span class="title-custom no-10">10</span>
                            </div>
                            <div class="col-xs-10 col-sm-10 col-md-10">
                                <p class="title-custom-p"><b>Perbaikan & Pemeliharaan</b></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-offset-2 col-md-10 m-t-10">
                                <p class="title-content-p">
                                    Setelah website diluncurkan, kami tidak akan meninggalkan Anda begitu saja. Kami memahami agar dapat berjalan dengan baik dan mencapai hasil yang diharapkan, setiap website membutuhkan pengelolaan berkelanjutan. Karena itu, <span class="logo-font">LOGIQUE</span> menyediakan berbagai layanan yang Anda butuhkan, mulai dari pemantauan website atau server, pengoperasian harian, pembuatan konten, manajemen akun media sosial, dan aktivitas digital marketing yang bertujuan untuk memaksimalkan website Anda.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="domore">
        <div class="container">
            <div class="domore-container">
                <div class="row">
                    <div class="col-sm-5"></div>
                    <div class="col-md-7 col-sm-12">
                        <div class="domore-content">
                            <p class="title">Kami selalu siap untuk membantu Anda dalam pembuatan dan pengembangan situs web, serta:</p>
                            <p class="list">
                                • Pembuatan dan /atau pengoperasian situs website
                            </p>
                            <p class="list">
                                • Membangun kembali dan mengoptimalkannya untuk ponsel/ smartphone
                            </p>
                            <p class="list">
                                • Mengembangkan aplikasi Android/ iOS
                            </p>
                            <p class="list">
                                • Mengoperasikan sistem manajamen secara mandiri
                            </p>
                            <p class="list">
                                • Mengelola infrastruktur IT
                            </p>
                            <p class="list">
                                • Melakukan audit keamanan IT
                            </p>
                            <p class="list">
                                • Meningkatkan awareness akan perusahaan/merek Anda melalui pemasaran digital
                            </p>
                            <p class="list">
                                • Meraih target pemasaran online melalui pemasangan iklan online
                            </p>
                            <p class="list">
                                • Mendesain dan mencetak materi promosi perusahaan untuk kemudian didistribusikan
                            </p>
                            <p class="list">
                                • Mengelola pengoperasian akun media sosial (Facebook, Instagram dan Youtube)
                            </p>
                            <p class="list">
                                • Memperbarui konten dan mengoperasikan situs web Anda
                            </p>
                            <p class="list">
                                • Membuat dan memasang chatbot online untuk situs website Anda
                            </p>
                        </div>
                    </div>

                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <a href="/hubungi-kami.php">
                        <div class="button-container">
                            <p>
                                Silahkan hubungi <span class="logo-font">LOGIQUE</span> tentang pembuatan website di Indonesia
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="gallery">
        <div class="container">
            <div class="row ads-container">
                <div class="col-md-6 col-sm-6">
                    <a href="https://www.facebook.com/logique.id/" target="_blank">
                        <img loading="lazy" src="assets/img/img-webdev/facebookads.png" alt=" facebook ads">
                    </a>
                </div>
                <div class="col-md-6 col-sm-6">
                    <a href="https://www.linkedin.com/company/13420656" target="_blank">
                        <img loading="lazy" src="assets/img/img-webdev/linkedinads.png" alt="linkedinads">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- <section class="tahap-pemesanan-2 hidden-xs" style="padding: 2em"></section> -->

    <div id="modal">
        <div class="modal fade modal-section" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body aia-section">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="title-section">
                            <p class="title">AIA - Premier Academy</p>
                            <!-- <p class="subtitle">Lorem!</p> -->
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
                                Salah satu tantangan dalam proyek ini adalah kebutuhan AIA untuk merilis versi awal hanya dalam 2 minggu, dan <span class="logo-font">LOGIQUE</span> mampu menjawab ekspektasi tersebut dengan baik.
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
                            <img loading="lazy" src="assets/img/aia.jpg" alt="AIA Website">
                            <br />
                            <img loading="lazy" src="assets/img/aia2.jpg" alt="AIA Website">
                            <br />
                            <img loading="lazy" src="assets/img/aia3.jpg" alt="AIA Website">
                            <br />
                            <img loading="lazy" src="assets/img/aia4.jpg" alt="AIA Website">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade modal-section" id="exampleModalLong2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLong2Title" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body aia-section">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="title-section">
                            <p class="title">Panin Dai-ichi Life – Bekal Hidup</p>
                            <!-- <p class="subtitle">Lorem !</p> -->
                            <p class="content">
                                Merupakan suatu terobosan dari Panin Dai-ichi Life dalam bentuk produk-produk asuransi digital yang dapat dibeli langsung secara online melalui website E-Commerce.
                            </p>
                            <p class="content">
                                Berangkat dari pengalaman <span class="logo-font">LOGIQUE</span> yang telah banyak menangani proyek E-Commerce baik untuk industri asuransi maupun barang retail, kami membantu merancang konsep e-commerce Panin Dai-ichi Life mulai dari tahap perencanaan, desain, pengembangan kode, dan implementasi pada server yang telah disediakan.
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
                                Dalam pelaksanaannya, <span class="logo-font">LOGIQUE</span> membantu Panin Dai-ichi memiliki sebuah website E-Commerce yang dapat digunakan dalam waktu 3 bulan (fase 1), yang kemudian berlanjut dengan peningkatan fungsi untuk memenuhi cakupan tipe produk asuransi baru yang akan disediakan secara online di fase 2.
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
                            <img loading="lazy" src="assets/img/panin.jpg" alt="Panin Website">
                            <br />
                            <img loading="lazy" src="assets/img/panin2.jpg" alt="Panin Website">
                            <br />
                            <img loading="lazy" src="assets/img/panin3.jpg" alt="Panin Website">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade modal-section" id="exampleModalLong3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLong3Title" aria-hidden="true">
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
                            <img loading="lazy" src="assets/img/jba1.jpg" alt="JBA website">
                            <br />
                            <img loading="lazy" src="assets/img/jba2.jpg" alt="JBA website">
                            <br />
                            <img loading="lazy" src="assets/img/jba4.jpg" alt="JBA website">
                            <br />
                            <img loading="lazy" src="assets/img/jba6.jpg" alt="JBA website">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php include '../footer.php'; ?>

    <!-- <script src="//code.jquery.com/jquery-3.2.1.min.js"></script> -->
    <script src="/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight-min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script type="text/javascript">
        $(function() {
            $('.smooth').click(function() {
                if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname ==
                    this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    if (target.length) {
                        $('html, body').animate({
                            scrollTop: target.offset().top
                        }, 1000);
                        return false;
                    }
                }
            });
        });
    </script>
    <script type="text/javascript">
        // Instantiate the Bootstrap carousel
        $('.multi-item-carousel').carousel({
            interval: false
        });

        // for every slide in carousel, copy the next slide's item in the slide.
        // Do the same for the next, next item.
        $('.multi-item-carousel .item').each(function() {
            var next = $(this).next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }
            next.children(':first-child').clone().appendTo($(this));

            // if (next.next().length>0) {
            //     next.next().children(':first-child').clone().appendTo($(this));
            // } else {
            //     $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
            // }
        });
    </script>

</html>