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
    <meta http-equiv="Cache-control" content="public, max-age=86400">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=3.0">
    <meta name="description" content="Daftar harga / biaya pembuatan website perusahaan, company profile, e commerce & lainnya. Standar Internasional, Berkualitas & Profesional | LOGIQUE">
    <meta name="keywords" content="">
    <meta name="author" content="PT LOGIQUE DIGITAL INDONESIA ">
    <meta itemprop="name" content="PT. Logique Digital Indonesia">
    <meta property="og:title" content="Harga / Biaya Pembuatan Website | LOGIQUE Digital Indonesia">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Logique">
    <meta property="og:url" content="https://www.logique.co.id/layanan/harga-pembuatan-website.php">
    <meta property="og:image" content="https://www.logique.co.id/jp/services/assets/img/img-webdev/webdev-service/22.png">
    <meta property="og:description" content="Daftar harga / biaya pembuatan website perusahaan, company profile, e commerce & lainnya. Standar Internasional, Berkualitas & Profesional | LOGIQUE">
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <link rel="canonical" href="https://www.logique.co.id/layanan/harga-pembuatan-website.php">

    <title>Harga / Biaya Pembuatan Website | LOGIQUE Digital Indonesia</title>

    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- FAST Font load Formula -->
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin />
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&display=swap" media="print" onload="this.media='all'" />


    <link href="/css/sidebar-update.css" rel="stylesheet">
    <link href="/css/style-services.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/newstyle.css">
    <link href="/css/epicstyle.css" rel="stylesheet">
    <link href="/layanan/assets/css/styles-web-dev-services/styles_webdev_service.css" rel="stylesheet">


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

<!-- <style>
    @media only screen and (max-width: 768px) {
    

        .d-title-large {
            font-size: larger;
        }
    }
</style> -->

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

        <!-- NAVIGATION -->
        <?php
        // $active option are home, about, portfolio, services, product, career, contact
        $active = 'services';
        include($_SERVER['DOCUMENT_ROOT'] . '/sidebar.php');
        ?>

        <?php
        $lang = 'id';
        $en_link = '/en/services/webdev-price-range.php';
        $id_link = '#';
        $jp_link = '/jp/services/web-dev-price-range.php';
        include($_SERVER['DOCUMENT_ROOT'] . '/header.php');
        ?>


        <div class="content-cont">
            <section class="header-wrapper">
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb-list" itemscope itemtype="http://schema.org/BreadcrumbList">
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="../index.php"><span itemprop="name">Beranda</span></a>
                            <meta itemprop="position" content="1" />
                        </li>
                        <li class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="../layanan.php"><span itemprop="name">&nbsp;Layanan</span></a>
                            <meta itemprop="position" content="2" />
                        </li>
                        <li class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="web-dev.php" itemprop="item"><span itemprop="name">&nbsp;Produksi Website</span></a>
                            <meta itemprop="position" content="3" />
                        </li>
                        <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item"><span itemprop="name">&nbsp;Harga Pembuatan Website</span></a>
                            <meta itemprop="position" content="3" />
                        </li>
                    </ol>
                </div>


                <header class="header-cont">
                    <div class="left-header">
                    </div>

                    <div class="right-header">
                        <h1 class="title-header">
                            Opsi Harga & Layanan Pembuatan Website
                        </h1>

                        <p>
                            Sejauh ini banyak pelanggan yang ingin tahu terlebih dahulu estimasi biaya yang dibutuhkan terkait pembuatan website atau pengembangan sistem berbasis web untuk memastikan biaya tersebut sesuai dengan anggaran yang dimiliki.
                        </p>

                        <p>
                            Oleh karena itu kami telah menyiapkan empat pilihan layanan yang dapat memberikan gambaran terhadap kebutuhan para pelanggan dalam pembuatan atau pengelolaan website.
                            Walaupun cakupan pekerjaan akan bergantung dari jumlah anggaran yang tersedia, namun kami akan tetap melakukan yang terbaik untuk mengerjakan proyek apa pun sesuai dengan cakupan pekerjaan yang ada.
                        </p>

                        <p>
                            Jika Anda tidak yakin kategori layanan mana yang sesuai dengan kebutuhan Anda, silakan hubungi kami.
                        </p>

                    </div>
                </header>
            </section>

            <!-- CSS ATOMIC IMPORT for Load Performance -->
            <link rel="stylesheet" href="/layanan/assets/css/styles-web-dev-services/styles_price_plan_320.css" media="(min-width: 320px)">
            <link rel="stylesheet" href="/layanan/assets/css/styles-web-dev-services/styles_price_plan_425.css" media="(min-width: 425px)">
            <link rel="stylesheet" href="/layanan/assets/css/styles-web-dev-services/styles_price_plan_768.css" media="(min-width: 768px)">
            <link rel="stylesheet" href="/layanan/assets/css/styles-web-dev-services/styles_price_plan_1024.css" media="(min-width: 1024px)">

            <!-- MINIPLAN Section -->
            <section class="plan plan-gap-100">
                <div class="image-plan-cont">
                    <img class="plan-image" loading="lazy" src="/layanan/assets/img/img-webdev/webdev-service/miniplan-image.webp" alt="miniplan price">
                </div>

                <div class="desc-plan-cont">
                    <h2 class="plan-title">Opsi Produksi Cepat</h2>
                    <p class="plan-desc">Website Sederhana atau Landing Page</p>

                    <!-- Kontainer Deskripsi Waktu -->
                    <div class="desc-waktu">
                        <!-- Masa Produksi -->
                        <div class="sub-container-desc">
                            <div class="checklist-img">
                                <img loading="lazy" src="/layanan/assets/img/img-webdev/webdev-service/checklist.svg" alt="checklist price">
                            </div>

                            <div class="desc-masa-produksi">
                                <h3 class="desc-title">Masa Produksi</h3>
                                <p class="desc-value">~ 1 Bulan</p>
                            </div>

                        </div>

                        <!-- Jumlah Halaman -->
                        <div class="sub-container-desc extra-width">
                            <div class="checklist-img">
                                <img loading="lazy" src="/layanan/assets/img/img-webdev/webdev-service/checklist.svg" alt="checklist price">
                            </div>

                            <div class="desc-jumlah-halaman">
                                <h3 class="desc-title">Jumlah Halaman</h3>
                                <p class="desc-value"> Sampai dengan 5 Halaman </p>
                            </div>

                        </div>

                    </div>


                    <!-- Kontainer Cakupan Pekerjaan -->
                    <div class="cakupan-pekerjaan">
                        <div class="sub-cakupan-pekerjaan">
                            <div class="checklist-img">
                                <img loading="lazy" src="/layanan/assets/img/img-webdev/webdev-service/checklist.svg" alt="checklist price">
                            </div>

                            <div class="desc-cakupan-pekerjaan">
                                <h3 class="desc-title">Cakupan Pekerjaan</h3>
                                <ul class="cakupan-pekerjaan-list">
                                    <li>
                                        Desain, Koding HTML, Implementasi Standar SEO, Pengetesan dan Penyesuaian, Peluncuran Website
                                    </li>

                                    <li>
                                        Materi wajib disediakan oleh klien.
                                    </li>

                                    <li>
                                        Konten website tersedia dalam bentuk statis.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <!-- Biaya Kontainer -->
                    <div class="desc-biaya">
                        <!-- Biaya -->
                        <div class="sub-container-biaya">
                            <h3 class="biaya-title">Biaya Pembuatan Website</h3>
                            <p class="biaya-value">15 juta - 30 juta IDR</p>
                        </div>

                        <!-- Button Container -->
                        <div class="sub-container-biaya">
                            <a target="_blank" href="/hubungi-kami.php">
                                <div class="button-biaya">
                                    Hubungi Kami
                                </div>

                            </a>
                        </div>
                    </div>
                </div>
            </section>



            <!-- STANDART Section -->
            <section class="plan plan-reverse plan-gap">
                <div class="image-plan-cont">
                    <img class="plan-image" loading="lazy" src="/layanan/assets/img/img-webdev/webdev-service/standart-image.webp" alt="Standart price">
                </div>

                <div class="desc-plan-cont">
                    <h2 class="plan-title standar-color">Opsi Produksi Standar</h2>
                    <p class="plan-desc">Website Layanan atau Website Perusahaan Standar</p>

                    <!-- Kontainer Deskripsi Waktu -->
                    <div class="desc-waktu">
                        <!-- Masa Produksi -->
                        <div class="sub-container-desc">
                            <div class="checklist-img">
                                <img loading="lazy" src="/layanan/assets/img/img-webdev/webdev-service/checklist.svg" alt="checklist price">
                            </div>

                            <div class="desc-masa-produksi">
                                <h3 class="desc-title">Masa Produksi</h3>
                                <p class="desc-value">1 - 2.5 Bulan</p>
                            </div>

                        </div>

                        <!-- Jumlah Halaman -->
                        <div class="sub-container-desc extra-width">
                            <div class="checklist-img">
                                <img loading="lazy" src="/layanan/assets/img/img-webdev/webdev-service/checklist.svg" alt="checklist price">
                            </div>

                            <div class="desc-jumlah-halaman">
                                <h3 class="desc-title">Jumlah Halaman</h3>
                                <p class="desc-value"> Sampai dengan 20 Halaman </p>
                            </div>

                        </div>

                    </div>


                    <!-- Kontainer Cakupan Pekerjaan -->
                    <div class="cakupan-pekerjaan">
                        <div class="sub-cakupan-pekerjaan">
                            <div class="checklist-img">
                                <img loading="lazy" src="/layanan/assets/img/img-webdev/webdev-service/checklist.svg" alt="checklist price">
                            </div>

                            <div class="desc-cakupan-pekerjaan">
                                <h3 class="desc-title">Cakupan Pekerjaan</h3>
                                <ul class="cakupan-pekerjaan-list">
                                    <li>
                                        Desain, Koding HTML, Implementasi CMS, Implementasi Standar SEO, Pengetesan dan Penyesuaian, Peluncuran Website.
                                    </li>

                                    <li>
                                        Pembuatan website statis, berbasis Wordpress atau CMS yang dibuat khusus untuk Anda dari awal.
                                    </li>

                                    <li>
                                        Secara umum materi akan disediakan oleh perusahaan kami.
                                    </li>

                                    <li>
                                        Akan terdapat biaya tambahan jika ternyata waktu produksi telah melebihi 4 bulan yang disebabkan oleh keterlambatan dari sisi pelanggan.*
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>


                    <!-- Biaya Kontainer -->
                    <div class="desc-biaya">
                        <!-- Biaya -->
                        <div class="sub-container-biaya">
                            <h3 class="biaya-title">Biaya Pembuatan Website</h3>
                            <p class="biaya-value">30 juta - 60 juta IDR</p>
                        </div>

                        <!-- Button Container -->
                        <div class="sub-container-biaya">
                            <a target="_blank" href="/hubungi-kami.php">
                                <div class="button-biaya">
                                    Hubungi Kami
                                </div>

                            </a>
                        </div>
                    </div>
                </div>
            </section>



            <!-- SKALA BESAR Section -->
            <section class="plan plan-gap">
                <div class="image-plan-cont">
                    <img class="plan-image" loading="lazy" src="/layanan/assets/img/img-webdev/webdev-service/skala-besar.webp" alt="skala besar price">
                </div>

                <div class="desc-plan-cont">
                    <h2 class="plan-title skala-besar-color">Opsi Produksi Skala Besar</h2>
                    <p class="plan-desc">Website Layanan atau Website Perusahaan Berskala Besar</p>

                    <!-- Kontainer Deskripsi Waktu -->
                    <div class="desc-waktu">
                        <!-- Masa Produksi -->
                        <div class="sub-container-desc">
                            <div class="checklist-img">
                                <img loading="lazy" src="/layanan/assets/img/img-webdev/webdev-service/checklist.svg" alt="checklist price">
                            </div>

                            <div class="desc-masa-produksi">
                                <h3 class="desc-title">Masa Produksi</h3>
                                <p class="desc-value">2,5 - 4 Bulan</p>
                            </div>

                        </div>

                        <!-- Jumlah Halaman -->
                        <div class="sub-container-desc extra-width">
                            <div class="checklist-img">
                                <img loading="lazy" src="/layanan/assets/img/img-webdev/webdev-service/checklist.svg" alt="checklist price">
                            </div>

                            <div class="desc-jumlah-halaman">
                                <h3 class="desc-title">Jumlah Halaman</h3>
                                <p class="desc-value"> lebih dari 50 Halaman </p>
                            </div>

                        </div>

                    </div>


                    <!-- Kontainer Cakupan Pekerjaan -->
                    <div class="cakupan-pekerjaan">
                        <div class="sub-cakupan-pekerjaan">
                            <div class="checklist-img">
                                <img loading="lazy" src="/layanan/assets/img/img-webdev/webdev-service/checklist.svg" alt="checklist price">
                            </div>

                            <div class="desc-cakupan-pekerjaan">
                                <h3 class="desc-title">Cakupan Pekerjaan</h3>
                                <ul class="cakupan-pekerjaan-list">
                                    <li>
                                        Desain, Koding HTML, Implementasi Standar SEO, Pengembangan dan Implemenasi CMS, Pengetesan, Konfigurasi Server / Infrastruktur, Pengecekan Tingkat Keamanan (untuk layanan Pentest lebih detil akan dikenakan biaya tambahan), Peluncuran Website.
                                    </li>

                                    <li>
                                        Pengembangan berbasis CMS Open Source atau CMS yang dibuat khusus untuk Anda dari awal, yang biasanya berbasis PHP - Laravel.
                                    </li>

                                    <li>
                                        Secara umum materi akan disediakan oleh perusahaan kami.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <!-- Biaya Kontainer -->
                    <div class="desc-biaya">
                        <!-- Biaya -->
                        <div class="sub-container-biaya">
                            <h3 class="biaya-title">Biaya Pembuatan Website</h3>
                            <p class="biaya-value">80 juta - 150 juta IDR</p>
                        </div>

                        <!-- Button Container -->
                        <div class="sub-container-biaya">
                            <a target="_blank" href="/hubungi-kami.php">
                                <div class="button-biaya">
                                    Hubungi Kami
                                </div>

                            </a>
                        </div>
                    </div>
                </div>
            </section>


            <!-- Produk Strategis Section -->
            <section class="plan plan-reverse plan-gap">
                <div class="image-plan-cont">
                    <img class="plan-image" loading="lazy" src="/layanan/assets/img/img-webdev/webdev-service/strategicimg.webp" alt="harga plan strategis">
                </div>

                <div class="desc-plan-cont">
                    <h2 class="plan-title skala-strategis-color">Opsi Produksi Strategis</h2>
                    <p class="plan-desc">
                        Menyusun rencana dan membuat website sesuai dengan perencanaan dan solusi yang sudah diformulasikan.
                    </p>

                    <!-- Kontainer Deskripsi Waktu -->
                    <div class="desc-waktu">
                        <!-- Masa Produksi -->
                        <div class="sub-container-desc">
                            <div class="checklist-img">
                                <img loading="lazy" src="/layanan/assets/img/img-webdev/webdev-service/checklist.svg" alt="checklist price">
                            </div>

                            <div class="desc-masa-produksi">
                                <h3 class="desc-title">Masa Produksi</h3>
                                <p class="desc-value">3 - 5 Bulan</p>
                            </div>

                        </div>
                    </div>


                    <!-- Kontainer Cakupan Pekerjaan -->
                    <div class="cakupan-pekerjaan">
                        <div class="sub-cakupan-pekerjaan">
                            <div class="checklist-img">
                                <img loading="lazy" src="/layanan/assets/img/img-webdev/webdev-service/checklist.svg" alt="checklist price">
                            </div>

                            <div class="desc-cakupan-pekerjaan">
                                <h3 class="desc-title">Cakupan Pekerjaan</h3>
                                <ul class="cakupan-pekerjaan-list">
                                    <li>
                                        Tidak ada batasan pada lingkup pekerjaan. Kami akan membantu Anda untuk membangun sistem berbasis website yang sesuai dengan permintaan dan melakukan hal-hal yang diperlukan untuk membedakan Anda dari para pesaing yang ada.
                                    </li>

                                    <li>
                                        Konsultan kami akan membantu menangani proyek tersebut dan berkolaborasi dengan user dari berbagai departemen yang diperlukan di perusahaan Anda.
                                    </li>

                                    <li>
                                        Pertama-tama kami akan melakukan fase perencanaan dan penentuan solusi (kira-kira 1 bulan). Pada fase ini kami akan membuat pengajuan terkait lingkup pekerjaan, jangka waktu pengerjaan, dan total biaya yang diperlukan untuk proses produksi.
                                    </li>

                                    <li>
                                        Membuat strategi dari sesi-sesi konsultasi yang dilakukan.
                                    </li>

                                    <li>
                                        Yang dihasilkan pada fase perencanaan atau penyusunan strategi ini meliputi: perjalanan interaksi pengguna, analisa persona, analisa tingkat kunjungan saat ini, pengajuan konsep dan pesan merek, peta situs, dokumentasi perencanaan konten, wireframe, pedoman desain, dll (dapat berbeda pada setiap proyek).
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <!-- Biaya Kontainer -->
                    <div class="desc-biaya">
                        <!-- Biaya -->
                        <div class="sub-container-biaya">
                            <h3 class="biaya-title">Biaya Pembuatan Website</h3>
                            <p class="biaya-value">200 juta - 500 juta IDR</p>
                        </div>

                        <!-- Button Container -->
                        <div class="sub-container-biaya">
                            <a target="_blank" href="/hubungi-kami.php">
                                <div class="button-biaya">
                                    Hubungi Kami
                                </div>

                            </a>
                        </div>
                    </div>
                </div>
            </section>


            <!-- PROSES ALUR KERJA BLOCK -->
            <link rel="stylesheet" href="/layanan/assets/css/styles-web-dev-services/alur-kerja-style.css" media="all">
            <section class="alur-kerja-cont">
                <h3 class="title-alur-kerja">Proses alur pekerjaan dimulai dari Pengumpulan informasi hingga ke penawaran dan estimasi biaya</h3>
            </section>


            <!-- Table Schedule -->
            <link rel="stylesheet" href="/layanan/assets/css/styles-web-dev-services/table-schedule.css" media="all">
            <section class="plan-schedule">
                <div class="schedule-cont bg-cream">
                    <div class="title-schedule-cont">
                        <p class="schedule-title">
                            Pengumpulan Informasi Penawaran Awal
                        </p>
                    </div>

                    <div class="desc-schedule-cont">
                        <p class="schedule-desc">
                            Sudah termasuk interaksi selama proses komunikasi dan pertemuan yang diperlukan; saran yang kami berikan di tahap ini tidak dipungut biaya. Secara umum dalam tahap penawaran, kami tidak memberikan contoh desain. Namun, jika Anda benar-benar membutuhkannya, maka kami dapat memberikannya dengan biaya tambahan untuk pembuatan desain tersebut.
                        </p>
                    </div>
                </div>

                <div class="schedule-cont bg-grey">
                    <div class="title-schedule-cont">
                        <p class="schedule-title">
                            Acuan Terkait Harga Pengembangan
                        </p>
                    </div>

                    <div class="desc-schedule-cont">
                        <p class="schedule-desc">
                            Harga yang kami berikan bervariasi tergantung pada tingkat kesulitan dan seberapa cepat pengembangan harus dilakukan yang akan mempengaruhi jumlah dan level anggota tim yang perlu dialokasikan untuk proyek tersebut. Berikut ini adalah gambaran biaya pengerjaan berdasarkan fitur. Mohon diperhatikan, bahwa informasi di bawah ini hanya merupakan estimasi biaya secara umum.
                        </p>
                    </div>
                </div>
            </section>


            <!-- Table Price -->
            <link rel="stylesheet" href="/layanan/assets/css/styles-web-dev-services/table-price.css" media="all">
            <section class="table-container">
                <table class="table=price-x">
                    <tr>
                        <th>Layanan</th>
                        <th>Harga </th>
                        <th>Deskripsi</th>
                    </tr>
                    <tr>
                        <td>HTML/CSS Coding (1 Website)</td>
                        <td>Rp 15,000,000 ～</td>
                        <td>Biaya yang dikeluarkan tergantung pada konfigurasi website, pembuatan halaman HTML/CSS akan dikenai biaya Rp 15.000.000 jika website merupakan web perusahaan standar ( dengan total mencapai 10 halaman ). Proses yang akan kami lakukan antara lain, coding standar, memasang Google Analytics, dan menulis meta tag yang ditentukan.</td>
                    </tr>
                    <tr>
                        <td>HTML/CSS Coding (Per 1 halaman)</td>
                        <td>Rp 500,000</td>
                        <td>Meskipun biaya dapat berubah tergantung pada volume dan konfigurasi konten yang dibutuhkan di dalam halaman, namun mohon diperhatikan bahwa RP 500.000 per-halaman adalah estimasi harga standar. Jika semua desain dan konten dipersiapkan untuk 10 halaman website, maka kemungkinan biaya yang dikeluarkan adalah Rp 5.000.000.</td>
                    </tr>
                    <tr>
                        <td>Motion Coding</td>
                        <td>Rp 5.000.000 〜</td>
                        <td>Menerapkan pemrograman visual seperti gerakan dengan efek parallax menggunakan jQuery, HTML5, dll.</td>
                    </tr>
                    <tr>
                        <td>Pembuatan Logo dan Ilustrasi</td>
                        <td>Rp 10.000.000 〜</td>
                        <td>Jika perusahaan Anda belum memiliki logo, maka kami dapat membantu Anda membuatkannya. Kami akan membuat logo yang ideal dengan perusahaan Anda dengan beberapa pola ilustrasi.</td>
                    </tr>
                    <tr>
                        <td>Fitur Online Chat</td>
                        <td>Rp 5.000.000</td>
                        <td>Menerapkan fitur online chat di dalam situs web Anda, merupakan langkah yang baik sebagai pelayanan pelanggan yang mudah dan cepat, fitur ini juga dapat membantu meningkatkan penjualan Anda.</td>
                    </tr>
                    <tr>
                        <td>Optimasi halaman permintaan</td>
                        <td>Rp 15.000.000</td>
                        <td>Dengan mengoptimasi konten yang ada pada halaman permintaan dan formulir, Anda dapat memaksimalkan jumlah kueri dan meminimalkan terjadinya penurunan penilaian dari pengguna yang mengunjungi situs web Anda.</td>
                    </tr>
                    <tr>
                        <td>Optimasi halaman rekrutmen</td>
                        <td>Rp 15.000.000</td>
                        <td>Optimalkan konten di halaman rekrutmen untuk meningkatkan masuknya jumlah lamaran melalui situs web Anda. Kami juga dapat membangun web dengan sistem perekrutan sebagai situs web khusus.
                            <a href="/pembuatan-web-karir.php">
                                <span style="color: #1985D6;">Klik di sini untuk lebih detail.</span>
                            </a>
                            Kami juga menyediakan cloud untuk operasi perekrutan yang lebih efisien, yaitu Sugoi Saiyo.
                        </td>
                    </tr>
                    <tr>
                        <td>Fitur keranjang belanja</td>
                        <td>Rp 20.000.000 〜</td>
                        <td>Kami dapat menggunakan kerangka kerja e-commerce untuk memberikan kemampuan berbelanja di dalam web Anda. Terdapat beragam fitur yang membutuhkan persyaratan khusus, jadi silahkan hubungi kami terlebih dahulu untuk detail infromasinya.</td>
                    </tr>
                    <tr>
                        <td>Payment gateway</td>
                        <td>Rp 15.000.000 〜</td>
                        <td>Kami memiliki pengalaman dalam membangun fungsi tautan dengan layanan payment gateway untuk perusahaan terkemuka di Indonesia. Silakan hubungi kami karena penyelesaian masalah berlangganan juga dapat kami selesaikan.</td>
                    </tr>
                    <tr>
                        <td>Pembuatan API</td>
                        <td>Rp 15.000.000 〜</td>
                        <td>Kami akan membuat API untuk menghubungkan fungsi / informasi dengan sistem lain, situs web lain, aplikasi seluler, dan layanan lain. Kami dapat mengembangkan sistem sesuai dengan format data (XML, HTML, JSON, dll) untuk dikirim dan diterima.</td>
                    </tr>
                    <tr>
                        <td>Pembuatan Konten</td>
                        <td>Silakan hubungi kami untuk detail harga.</td>
                        <td>Pembuatan konten reguler atau pembuatan konten untuk satu kali (pembuatan konten pada saat pembuatan situs web) juga dapat kami layani. Kisaran harga tergantung pada volume, ciri khas konten yang akan dibuat, bahasa konten yang akan dibuat, dll. Silahkan berkonsultasi dengan kami untuk informasi lebih lanjut.</td>
                    </tr>
                    <tr>
                        <td>Fotografi</td>
                        <td>Rp 5.000.000 〜</td>
                        <td>Harga sudah termasuk pemotretan untuk 1 lokasi, 5 sampai 10 foto, dengan durasi pemotretan selama 4 jam. Silakan hubungi kami untuk rincian informasi mengenai pengambilan gambar di luar ruangan atau di pabrik.</td>
                    </tr>
                    <tr>
                        <td>Pengambilan Gambar menggunakan Drone</td>
                        <td>Rp 5.000.000 〜</td>
                        <td>Pengambilan gambar di 1 lokasi, 1 kali penerbangan, durasi pengambilan gambar selama 15 menit , disampaikan dengan data animasi. Layanan ini tidak termasuk permintaan izin penerbangan.</td>
                    </tr>
                    <tr>
                        <td>Pengeditan pembuatan film</td>
                        <td>Rp 20.000.000 〜</td>
                        <td>Kami membuat film untuk berbagai kebutuhan, mulai dari video yang dibuat hanya dengan grafik / animasi saja sampai pembuatan dan produksi film secara lengkap.</td>
                    </tr>
                </table>
            </section>

            <!-- Detail Contacts -->
            <a class="landing-contact" target="_blank" href="/hubungi-kami.php">
                <section class="contact-detail-cont">
                    <h3 class="title-contact-detail">Klik disini untuk menghubungi kami mengenai detail lainnya</h3>
                </section>
            </a>

            <!-- SEO -->
            <section class="content-section fifth-part">
                <div class="container__">
                    <div class="sec-content-part important-point">
                        <h2 class="sub-section-title text-center">Tingkatkan Web Traffic Perusahaan dan Dapatkan Keuntungan yang Lebih Tinggi dengan Jasa SEO LOGIQUE</h2><br>
                        <p class="text-center">Tahukah Anda bahwa sebagian besar konsumen saat ini akan melakukan riset online sebelum membeli suatu produk? Oleh karena itulah, Anda perlu menjalankan strategi <a href="/layanan/digital-marketing.php">digital marketing</a> untuk memastikan bahwa website yang Anda kelola memiliki visibilitas yang baik sehingga ketika pelanggan potensial melakukan pencarian terhadap kata kunci yang relevan dengan bisnis Anda maka website dapat ditemukan dengan mudah.</p><br>
                        <p class="text-center">Untuk memastikan hal tersebut, LOGIQUE menawarkan <a href="/layanan/digital-marketing/jasa-seo.php">jasa SEO</a>. Tim SEO specialist kami dapat melakukan berbagai strategi optimasi agar website perusahaan Anda bisa memiliki peringkat yang tinggi pada hasil pencarian Google. Dengan proses analisis yang mendalam dan penentuan target audience yang tepat, website perusahaan Anda akan memperoleh visibilitas yang baik untuk hasil pencarian yang relevan, mampu menjangkau target audience yang tepat, serta mendorong lebih banyak penjualan.</p><br>
                        <p class="text-center">Percayakan proses optimasi SEO website Anda pada LOGIQUE</p><br><br>
                        <div class="text-center">
                            <a class="btn--yellow" href="/layanan/digital-marketing/jasa-seo.php">Pelajari Lebih Lanjut</a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Table Price -->
            <link rel="stylesheet" href="/layanan/assets/css/styles-web-dev-services/sosmed-section.css" media="all">
            <section class="sosmed-section">
                <div class="facebook-section">
                    <img loading="lazy" src="/layanan/assets/img/img-webdev/facebookads.png" alt="facebook banner">
                </div>
                <div class="linkedin-section">
                    <img loading="lazy" src="/layanan/assets/img/img-webdev/linkedinads.png" alt="linkedin banner">
                </div>
            </section>
            
             <!-- FAQ -->
            <section class="plan">
                <div class="container__">
                    <div style="margin-top: 1em;">
                        <div class="clearfix ">                           
                            <dt class="title-header" style="text-align: left;">Pertanyaan yang sering diajukan:
                            </dt>
                            <hr class="col-sm-1 col-xs-2 bar-yellow" style="padding: 5px 0; border: none;">
                            
                        </div>
                        <div class="mt-12" id="accordion" style="width:100%;">

                            <div class="panel-group" id="accordion">
                                <?php include '../FAQ.php'; ?>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "FAQPage",
                "mainEntity": [{
                    "@type": "Question",
                    "name": "Berapa rentang harga layanan LOGIQUE untuk jasa web system development, pembuatan website dan aplikasi?",
                    "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Harga layanan tergantung pada kebutuhan Anda. Kami akan memberikan perkiraan yang lebih terperinci setelah mengetahui kebutuhan Anda."
                    }
                },{
                    "@type": "Question",
                    "name": "BIsakah LOGIQUE mengirimkan beberapa programmer untuk bekerja onsite?",
                    "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "LOGIQUE dapat bekerja secara Fleksibel, jika terdapat alasan yang masuk akal / tidak terhindarkan maka bekerja secara Onsite dapat kami lakukan. Silahkan hubungi kami dan jangan ragu untuk untuk berkonsultasi."
                    }
                },{
                    "@type": "Question",
                    "name": "Bisakah LOGIQUE menjadi sub-kontraktor untuk perusahaan pengembang lain?",
                    "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Tergantung situasi. Kami pernah bekerja sama dengan perusahaan konsultasi, vendor perangkat lunak, agen IT in-house dan biro iklan. Kami terbuka pada peluang dan tantangan baru."
                    }
                },{
                    "@type": "Question",
                    "name": "Apakah proses proyek dapat dijalankan dalam Bahasa Inggris?",
                    "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Bisa. LOGIQUE berpengalaman menangani perusahaan-perusahaan besar dari beberapa negara seperti Jepang, Singapura, Malaysia, Filipina, Australia, Inggris, Amerika, Swedia, dan Italia."
                    }
                },{
                    "@type": "Question",
                    "name": "Apakah meeting dapat dilakukan di luar negeri?",
                    "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Mari kita bahas masalah ini dengan Anda terlebih dahulu. Biasanya kami menawarkan video conference call, tetapi kami bisa memenuhi hal tersebut tergantung pada kasusnya."
                    }
                },{
                    "@type": "Question",
                    "name": "Apakan LOGIQUE dapat mengembangkan sistem manajemen untuk bisnis kami?",
                    "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "LOGIQUE mampu mengembangkan berbagai jenis sistem dan telah memiliki pengalaman di bidang pengembangan sistem manajemen pelanggan, pengembangan sistem untuk rekrutmen, e-commerce, e-learning, dan lainnya."
                    }
                },{
                    "@type": "Question",
                    "name": "Apakah LOGIQUE dapat mengembangkan aplikasi mobile?",
                    "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Konsultasikan kebutuhan Anda. LOGIQUE memiliki spesialis yang mampu mengembangkan berbagai aplikasi untuk Android dan iOS, Hybrid App, dan PWA."
                    }
                }]
            }
        </script>
        <?php include '../footer.php'; ?>

    </div>
</body>

</html>