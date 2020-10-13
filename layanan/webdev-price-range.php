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
    <meta http-equiv="Cache-control" content="public, max-age=86400">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=3.0">
	<meta name="description" content="Daftar harga / biaya pembuatan website perusahaan, company profile, e commerce & lainnya. Standar Internasional, Berkualitas & Profesional | LOGIQUE">
	<meta name="keywords" content="">
	<meta name="author" content="PT LOGIQUE DIGITAL INDONESIA ">
	<meta itemprop="name" content="PT. Logique Digital Indonesia">
	<meta property="og:title" content="Harga / Biaya Pembuatan Website | LOGIQUE Digital Indonesia">
	<meta property="og:type" content="website">
	<meta property="og:site_name" content="Logique">
	<meta property="og:image" content="https://www.logique.co.id/img/ogimg/layanan.png">
	<meta property="og:description" content="Daftar harga / biaya pembuatan website perusahaan, company profile, e commerce & lainnya. Standar Internasional, Berkualitas & Profesional | LOGIQUE">
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
	<title>Harga / Biaya Pembuatan Website | LOGIQUE Digital Indonesia</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="assets/css/style_webdev_service_new.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link href="/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+1p:400,500,700" rel="stylesheet">
    <link rel="canonical" href="https://www.logique.co.id/layanan/webdev-price-range.php">
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-105878648-1', 'auto');
        ga('send', 'pageview');
	</script>

    <?php 
        if ($_SERVER['HTTP_HOST'] === 'logique-web.test') {
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
        if ($_SERVER['HTTP_HOST'] === 'logique-web.test') {
            echo '<!-- Google Tag Manager (noscript) -->
            <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KQJRS4V"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
            <!-- End Google Tag Manager (noscript) -->';
        }
    ?>

    <style>
        @media only screen (max-width: 414px) {
            .breadcrumb {
                padding-left: 15px;
            }
        }
    </style>
    <div class="side-container"></div>
    <div>

        <!-- NAVIGATION -->
        <div class="nav-lp">
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
                <div class="text-center">
                    <a href="/portofolio.php">
                        <div class="img-portfolio"></div>
                        Portfolio
                    </a>
                </div>
                <div class="text-center active">
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
        </div>
        <!-- NAVIGATION -->

        <!-- HEADER -->
        <div class="container-fluid">
            <div class="lang-logo--update-design">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="container">
                                <ul class="list-inline">
                                    <li><a href="/en/services/webdev-price-range.php">EN</a></li>
                                    <li class="active"><a href="/layanan/webdev-price-range.php">ID</a></li>
                                    <li><a href="/jp/services/web-dev-price-range.php">JP</a></li>
                                </ul>
                                <a href="/jp/index.php"><img loading="lazy" src="/../img/logo.png" alt="Logo"
                                        class="img-responsive logo--update-design" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END HEADER -->

        <header class="content-wrapper__">
            <div class="text-left --top">
                <div class="container-fluid">
                    <div class="row bg-section">
                        <div class="col-md-12">
                            <img loading="lazy" src="assets/img/img-webdev/webdev-service/mainbg.png" alt="">
                        </div>
                        <div class="col-sm-12 breadcrumb-section">
                            <ol class="breadcrumb breadcrumb--update-design" itemscope
                                itemtype="http://schema.org/BreadcrumbList">
                                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item"
                                        href="../index.php"><span itemprop="name">Beranda</span></a>
                                    <meta itemprop="position" content="1" />
                                </li>
                                <li class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a
                                        itemprop="item" href="../layanan.php"><span itemprop="name">&nbsp;Layanan</span></a>
                                    <meta itemprop="position" content="2" />
                                </li>
                                <li class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a
                                       href="web-dev.php" itemprop="item"><span itemprop="name">&nbsp;Produksi Website</span></a>
                                    <meta itemprop="position" content="3" />
                                </li>
                                <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a
                                        itemprop="item"><span itemprop="name">&nbsp;Harga Pembuatan Website</span></a>
                                    <meta itemprop="position" content="3" />
                                </li>
                            </ol>
                        </div>
                        <div class="col-md-12 m-t-2em main-section">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6"></div>
                                    <div class="col-md-6">
                                        <h1 class="title">
                                            <span><span>Opsi Harga & Layanan Pembuatan Website</span></span>
                                        </h1>
                                        <div class="content">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <section class="miniplan">
        <div class="container">
            <div class="row">
                <div class="col-md-4 img-container">
                    <picture>
                        <source srcset="assets/img/img-webdev/webdev-service/11.webp" type="image/webp">
                        <img loading="lazy" src="assets/img/img-webdev/webdev-service/11.png" alt="">
                </picture>
                </div>
                <div class="col-md-8 content-container">
                    <div class="title-container">
                        <p>Opsi Produksi Cepat</p>
                    </div>
                    <p class="content">Website Sederhana atau Landing Page</p>
                    <div class="detail-requirement">
                        <div class="detail-container">
                            <img loading="lazy" src="assets/img/img-webdev/webdev-service/checklist.svg" alt="">
                            <div class="detail-title">
                                <span>Masa Produksi</span>
                            </div>
                            <div class="detail-content">
                                <span>~ 1 Bulan</span>
                            </div>
                        </div>
                        <div class="detail-container">
                            <img loading="lazy" src="assets/img/img-webdev/webdev-service/checklist.svg" alt="">
                            <div class="detail-title">
                                <span>Jumlah Halaman</span>
                            </div>
                            <div class="detail-content">
                                <span>Sampai dengan 5 halaman</span>
                            </div>
                        </div>
                        <div class="detail-container detail-margin">
                            <img loading="lazy" src="assets/img/img-webdev/webdev-service/checklist.svg" alt="">
                            <div class="detail-title">
                                <span>Cakupan Pekerjaan</span>
                            </div>
                            <div class="detail-content detail-list">
                                <p>• Desain, Koding HTML, Implementasi Standar SEO, Pengetesan dan Penyesuaian, Peluncuran Website  </p>
                                <p>• Materi wajib disediakan oleh klien.</p>
                                <p>• Konten website tersedia dalam bentuk statis.</p>
                            </div>
                        </div>
                    </div>
                    <div class="detail-contact">
                        <div class="price-container">
                            <p class="title">Biaya Pembuatan Website</p>
                            <p class="price">15 juta 〜 30 juta IDR</p>
                        </div>
                        <div class="button-container">
                            <a href="../hubungi-kami.php">
                                <p>Hubungi Kami</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="standardplan">
        <div class="container">
            <div class="row">
                <div class="col-md-8 content-container">
                    <div class="title-container">
                        <p>Opsi Produksi Standar</p>
                    </div>
                    <p class="content">Website Layanan atau Website Perusahaan Standar</p>
                    <div class="detail-requirement">
                        <div class="detail-container">
                            <img loading="lazy" src="assets/img/img-webdev/webdev-service/checklist.svg" alt="">
                            <div class="detail-title">
                                <span>Masa Produksi</span>
                            </div>
                            <div class="detail-content">
                                <span>1 ~ 2,5 Bulan</span>
                            </div>
                        </div>
                        <div class="detail-container">
                            <img loading="lazy" src="assets/img/img-webdev/webdev-service/checklist.svg" alt="">
                            <div class="detail-title">
                                <span>Jumlah Halaman</span>
                            </div>
                            <div class="detail-content">
                                <span>Sampai dengan 20 halaman</span>
                            </div>
                        </div>
                        <div class="detail-container detail-margin">
                            <img loading="lazy" src="assets/img/img-webdev/webdev-service/checklist.svg" alt="">
                            <div class="detail-title">
                                <span>Cakupan Pekerjaan</span>
                            </div>
                            <div class="detail-content detail-list">
                                <p>•	Desain, Koding HTML, Implementasi CMS, Implementasi Standar SEO, Pengetesan dan Penyesuaian, Peluncuran Website.</p>
                                <p>•	Pembuatan website statis, berbasis Wordpress atau CMS yang dibuat khusus untuk Anda dari awal.</p>
                                <p>•	Secara umum materi akan disediakan oleh perusahaan kami.</p>
                                <p>	*Akan terdapat biaya tambahan jika ternyata waktu produksi telah melebihi 4 bulan yang disebabkan oleh keterlambatan dari sisi pelanggan.</p>
                            </div>
                        </div>
                    </div>
                    <div class="detail-contact">
                        <div class="price-container">
                            <p class="title">Biaya Pembuatan Website</p>
                            <p class="price">30 juta 〜 60 juta IDR</p>
                        </div>
                        <div class="button-container">
                            <a href="../hubungi-kami.php">
                                <p>Hubungi Kami</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 img-container">
                <picture>
                    <source srcset="assets/img/img-webdev/webdev-service/22.webp" type="image/webp">
                    <img loading="lazy" src="assets/img/img-webdev/webdev-service/22.png" alt="">
                </picture>
                </div>
            </div>
        </div>
    </section>
    <section class="largeplan">
        <div class="container">
            <div class="row">
                <div class="col-md-4 img-container">
                <picture>
                    <source srcset="assets/img/img-webdev/webdev-service/33.webp" type="image/webp">
                    <img loading="lazy" src="assets/img/img-webdev/webdev-service/33.png" alt="">
                </picture>
                </div>
                <div class="col-md-8 content-container">
                    <div class="title-container">
                        <p>Opsi Produksi dalam Skala Besar</p>
                    </div>
                    <p class="content">Website Layanan atau Website Perusahaan Berskala Besar</p>
                    <div class="detail-requirement">
                        <div class="detail-container">
                            <img loading="lazy" src="assets/img/img-webdev/webdev-service/checklist.svg" alt="">
                            <div class="detail-title">
                                <span>Masa Produksi</span>
                            </div>
                            <div class="detail-content">
                                <span> 2,5 ~ 4 Bulan</span>
                            </div>
                        </div>
                        <div class="detail-container">
                            <img loading="lazy" src="assets/img/img-webdev/webdev-service/checklist.svg" alt="">
                            <div class="detail-title">
                                <span>Jumlah Halaman </span>
                            </div>
                            <div class="detail-content">
                                <span>Lebih dari 50 halaman</span>
                            </div>
                        </div>
                        <div class="detail-container detail-margin">
                            <img loading="lazy" src="assets/img/img-webdev/webdev-service/checklist.svg" alt="">
                            <div class="detail-title">
                                <span>Cakupan Pekerjaan</span>
                            </div>
                            <div class="detail-content detail-list">
                                <p>•	Desain, Koding HTML,  Implementasi Standar SEO, Pengembangan dan Implemenasi CMS, Pengetesan, Konfigurasi Server / Infrastruktur, Pengecekan Tingkat Keamanan (untuk layanan Pentest lebih detil akan dikenakan biaya tambahan), Peluncuran Website. </p>
                                <p>•	Pengembangan berbasis CMS Open Source atau CMS yang dibuat khusus untuk Anda dari awal, yang biasanya berbasis PHP - Laravel.</p>
                                <p>•	Secara umum materi akan disediakan oleh perusahaan kami.</p>
                            </div>
                        </div>
                    </div>
                    <div class="detail-contact">
                        <div class="price-container">
                            <p class="title">Biaya Pembuatan Website</p>
                            <p class="price">80 juta 〜 150 juta IDR</p>
                        </div>
                        <div class="button-container">
                            <a href="../hubungi-kami.php">
                                <p>Hubungi Kami</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="strategicplan">
        <div class="container">
            <div class="row">
                <div class="col-md-8 content-container">
                    <div class="title-container">
                        <p>Opsi Produksi Strategis</p>
                    </div>
                    <p class="content">Menyusun rencana dan membuat website sesuai dengan perencanaan dan solusi yang sudah diformulasikan.</p>
                    <div class="detail-requirement">
                        <div class="detail-container">
                            <img loading="lazy" src="assets/img/img-webdev/webdev-service/checklist.svg" alt="">
                            <div class="detail-title">
                                <span>Masa Produksi</span>
                            </div>
                            <div class="detail-content">
                                <span> 3 ~ 5 Bulan</span>
                            </div>
                        </div>
                        <div class="detail-container detail-margin">
                            <img loading="lazy" src="assets/img/img-webdev/webdev-service/checklist.svg" alt="">
                            <div class="detail-title">
                                <span>Cakupan Pekerjaan</span>
                            </div>
                            <div class="detail-content detail-list">
                                <p>•	Tidak ada batasan pada lingkup pekerjaan. Kami akan membantu Anda untuk membangun sistem berbasis website yang sesuai dengan permintaan dan melakukan hal-hal yang diperlukan untuk membedakan Anda dari para pesaing yang ada.</p>
                                <p>•	Konsultan kami akan membantu menangani proyek tersebut dan berkolaborasi dengan user dari berbagai departemen yang diperlukan di perusahaan Anda.</p>
                                <p>•	Pertama-tama kami akan melakukan fase perencanaan dan penentuan solusi (kira-kira 1 bulan). Pada fase ini kami akan membuat pengajuan terkait lingkup pekerjaan, jangka waktu pengerjaan, dan total biaya yang diperlukan untuk proses produksi.</p>
                                <p>•	Membuat strategi dari sesi-sesi konsultasi yang dilakukan.</p>
                                <p>•	Yang dihasilkan pada fase perencanaan atau penyusunan strategi ini meliputi: perjalanan interaksi pengguna, analisa persona, analisa tingkat kunjungan saat ini, pengajuan konsep dan pesan merek, peta situs, dokumentasi perencanaan konten, wireframe, pedoman desain, dll (dapat berbeda pada setiap proyek).</p>
                            </div>
                        </div>
                    </div>
                    <div class="detail-contact">
                        <div class="price-container">
                            <p class="title">Biaya Pembuatan Website </p>
                            <p class="price">200 juta 〜 500 juta</p>
                        </div>
                        <div class="button-container">
                            <a href="../hubungi-kami.php">
                                <p>Hubungi Kami</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 img-container">
                <picture>
                    <source srcset="assets/img/img-webdev/webdev-service/44.webp" type="image/webp">
                    <img loading="lazy" src="assets/img/img-webdev/webdev-service/44.png" alt="">
                </picture>
                </div>
            </div>
        </div>
    </section>
    <section class="promo">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="promo-container">
                        <img loading="lazy" src="assets/img/img-webdev/webdev-service/promo.png" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="promo-list promo-odd">
                        <div class="promo-title">
                            <p>Pengumpulan Informasi - Penawaran Awal</p>
                        </div>
                        <div class="promo-content">
                            <p>Sudah termasuk interaksi selama proses komunikasi dan pertemuan yang diperlukan; saran yang kami berikan di tahap ini tidak dipungut biaya. Secara umum dalam tahap penawaran, kami tidak memberikan contoh desain. Namun, jika Anda benar-benar membutuhkannya, maka kami dapat memberikannya dengan biaya tambahan untuk pembuatan desain tersebut.</p>
                        </div>
                    </div>  
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="promo-list">
                        <div class="promo-title">
                            <p>Acuan Terkait Harga Pengembangan</p>
                        </div>
                        <div class="promo-content">
                            <p>Harga yang kami berikan bervariasi tergantung pada tingkat kesulitan dan seberapa cepat pengembangan harus dilakukan yang akan mempengaruhi jumlah dan level anggota tim yang perlu dialokasikan untuk proyek tersebut. Berikut ini adalah gambaran biaya pengerjaan berdasarkan fitur. Mohon diperhatikan, bahwa informasi di bawah ini hanya merupakan estimasi biaya secara umum.</p>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </section>
    <section class="datatable">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive table-data">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Layanan</th>
                                    <th scope="col">Harga </th>
                                    <th scope="col" class="col-md-6">Deskripsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>HTML/CSS Coding (1 Website)</td>
                                    <td>Rp 15,000,000 ～</td>
                                    <td class="col-md-6">Biaya yang dikeluarkan tergantung pada konfigurasi website, pembuatan halaman HTML/CSS akan dikenai biaya Rp 15.000.000 jika website merupakan web perusahaan standar ( dengan total mencapai 10 halaman ). Proses yang akan kami lakukan antara lain, coding standar, memasang Google Analytics, dan menulis meta tag yang ditentukan.</td>
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
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <a href="../hubungi-kami.php">
                        <div class="slogan-container">
                            <p>
                                Klik disini untuk menghubungi kami mengenai detail lainnya
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
                        <img loading="lazy" src="assets/img/img-webdev/facebookads.png" alt="">
                    </a>
                </div>
                <div class="col-md-6 col-sm-6">
                     <a href="https://www.linkedin.com/company/13420656" target="_blank">
                        <img loading="lazy" src="assets/img/img-webdev/linkedinads.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="tahap-pemesanan-2 hidden-xs" style="padding: 2em"></section>
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
        $('.multi-item-carousel .item').each(function(){
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
