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
     <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=3.0">
     <meta name="description"
         content="Sebagai salah satu pembuat website terkemuka di Indonesia, LOGIQUE memiliki tahapan pembuatan website tersendiri yang terstruktur dan profesional dalam memberikan jasa dan layanan terbaiknya pada klien. Berikut penjelasan sederhana dari tiap tahap pembuatan website dari LOGIQUE.">
     <meta name="keywords"
         content="pembuatan website, pengembangan aplikasi, pembuatan aplikasi, jasa konsultasi, aplikasi android, jasa pembuatan website, logique, logique digital indonesia, mekanisme, desain web, aplikasi android, keamanan web, pengembangan website, jasa pembuatan website, pembuatan website perusahaan.">
     <meta name="author" content="PT LOGIQUE DIGITAL INDONESIA ">
     <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">

    <meta itemprop="name" content="PT. Logique Digital Indonesia">
    <meta property="og:title" content="Jasa Pembuatan Website | Tahapan Pembuatan Website | LOGIQUE">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Logique">
    <meta property="og:url" content="https://www.logique.co.id/layanan/web-dev.php">
    <meta property="og:image" content="https://www.logique.co.id/img/ogimg/layanan.png">
    <meta property="og:description" content="Sebagai salah satu pembuat website terkemuka di Indonesia, LOGIQUE memiliki tahapan pembuatan website tersendiri yang terstruktur dan profesional dalam memberikan jasa dan layanan terbaiknya pada klien. Berikut penjelasan sederhana dari tiap tahap pembuatan website dari LOGIQUE.">
     <title>Jasa Pembuatan Website | Tahapan Pembuatan Website | LOGIQUE</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="assets/css/style-webdev-new.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link href="/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-105878648-1', 'auto');
	ga('send', 'pageview');

	</script>
</head>

<body>
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
                <div class="logique-nav logique-nav--update in-jp">
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
                            <a href="/portfolio.php">
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
                            <a href="produk.php">
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
                            <a href="https://www.logique.co.id/blog/ja" target="_blank" rel="noreferrer">
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
            <div class="row lang-logo--update-design">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="container">
                                <ul class="list-inline">
                                    <li><a href="/en/services/web-dev.php">EN</a></li>
                                    <li class="active"><a href="#">ID</a></li>
                                    <li><a href="/jp/services/web-dev.php">JP</a></li>
                                </ul>
                                <a href="/index.php"><img src="/../img/logo.png" alt="Logo"
                                        class="img-responsive logo--update-design" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>disini
        <!-- END HEADER -->

        <header class="content-wrapper__">
            
            <div class="text-left --top">
                <div class="container-fluid">
                    <div class="row bg-section">
                        <div class="col-md-12">
                            <img src="assets/img/img-webdev/webdev-bg.png" alt="">
                        </div>
                        <div class="col-sm-12 breadcrumb-section">
                            <ol class="breadcrumb breadcrumb--update-design" itemscope
                                itemtype="http://schema.org/BreadcrumbList">
                                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item"
                                        href="/index.php"><span itemprop="name">Beranda</span></a>
                                    <meta itemprop="position" content="1" />
                                </li>
                                <li class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a
                                        itemprop="item" href="/layanan.php"><span itemprop="name">Layanan</span></a>
                                    <meta itemprop="position" content="2" />
                                </li>
                                <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a
                                        itemprop="item"><span itemprop="name">Web Development</span></a>
                                    <meta itemprop="position" content="3" />
                                </li>
                            </ol>
                        </div>
                        <div class="col-md-12 m-t-2em main-section">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-5 col-sm-5 col-lg-6"></div>
                                    <div class="col-md-7 col-sm-7 col-lg-6">
                                        <h1 class="title">
                                            <span>Jasa Pembuatan Website LOGIQUE</span>
                                        </h1>
                                        <div class="content">
                                            <p>
                                            LOGIQUE memiliki layanan pembuatan website berstandar tinggi yang dapat membantu Anda menarik banyak pengunjung, menambah kontak bisnis, dan meningkatkan jumlah pelamar bagi perusahaan Anda. 
                                            </p>

                                            <p>
                                                Bila Anda ingin menggunakan Website sebagai kanal utama dalam pemasaran produk atau layanan yang dimiliki, membuat perbedaan dengan kompetitor, atau memperkuat sisi rekrutmen silakan menghubungi LOGIQUE.<br>
                                            </p>
                                            <p>
                                                Dengan pengalaman dan hasil yang telah teruji, LOGIQUE siap membantu Anda.
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
    <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-6">
                    <p class="about-title">Anda Perlu Jasa Pembuatan Website Berstandar Internasional? Pilih LOGIQUE!</p>
                    <p class="about-content">
                    LOGIQUE telah mengembangkan lebih dari 200 website untuk klien-klien Internasional dan Lokal. Proyek-proyek yang kami kerjakan bervariasi, di antaranya seperti permintaan website dengan tingkat keamanan dan kualitas yang sangat tinggi yang diperuntukan bagi perusahaan yang berafiliasi dengan lembaga pemerintahan ataupun perusahaan yang bergerak di bidang keuangan. Selain itu ada juga proyek pembuatan website yang membutuhkan tingkat kreativitas desain yang tinggi dan kemampuan pemrograman yang rumit. Dalam melakukan pembuatan website kami memberikan pendekatan fleksibel dengan fokus pada kecepatan penyelesaian proyek namun tidak melupakan kualitas, dan Anda juga tidak perlu khawatir karena harga yang kami berikan masih cukup terjangkau. Jika Anda memerlukan jasa pembuatan website yang dapat dipercaya silakan hubungi LOGIQUE.
                    </p>
                </div>
                <div class="col-md-5 col-sm-6">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                         <!-- Wrapper for slides -->
                         <div class="carousel-inner">
                             <div class="item active">
                                 <img src="assets/img/img-webdev/carousel.png" alt="Dokodemo Kerja"
                                     class="img-responsive center-block">
                             </div>
                             <!-- <div class="item">
                                 <img src="assets/img/img-webdev/carousel.png" alt="Dokodemo Kerja"
                                     class="img-responsive center-block">
                             </div>
                             <div class="item">
                                 <img src="assets/img/img-webdev/carousel.png" alt="Dokodemo Kerja"
                                     class="img-responsive center-block">
                             </div> -->
                         </div>
                         <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <!-- <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li> -->
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
                    <img src="assets/img/img-webdev/flow.png" alt="">
                </div>
                <div class="col-sm-7 col-md-7">
                    <p class="flow-title">Tentukan Kebutuhan, Tujuan, dan Budget Anda untuk Mendapatkan Hasil Website Terbaik.</p>
                    <p class="flow-content">
                    Untuk mempermudah Anda, kami telah mempersiapkan beberapa kategori pengembangan website berikut dengan perkiraan waktu dan biayanya. Jangan ragu untuk menghubungi kami bila Anda tidak memahami kategori pengembangan website yang diperlukan. Kami juga siap membantu jika Anda memerlukan penawaran khusus berdasarkan rincian fitur yang sudah dimiliki.    
                    </p>
                    <a href="/layanan/webdev-price-range.php" target="_blank">
                        <div class="flow-button">
                        Lihat Opsi Pembuatan Website
                        <img src="assets/img/img-webdev/arrow.png" alt="">
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
                    <p class="discuss-title">Dari LOGIQUE untuk Anda</p>
                    <div class="discuss-content">
                        <p>
                            LOGIQUE ingin menghasilkan Website yang bermanfaat untuk Anda!
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
                    <img src="assets/img/img-webdev/discuss.png" alt="">
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
                                Khususnya di Indonesia sudah banyak kekecewaan yang timbul dari hasil pengembangan website yang kualitasnya tidak sesuai dengan ekspektasi dan meleset dari tanggal penyelesaian yang sudah ditentukan akibat menggunakan jasa pembuatan website yang kurang baik.  Masih ada pelaku bisnis yang berpikir bahwa digital tidak terlalu penting dan hanya mencari layanan berdasarkan harga yang paling murah, alhasil alih-alih mengefisiensikan biaya yang terjadi adalah lebih banyak waktu dan biaya tambahan yang terbuang dalam pengembangan website tersebut.
                                </p>
                                <p class="announce-p mb-0">
                                LOGIQUE hadir untuk memberikan kenyamanan bagi para pelaku bisnis dengan memberikan layanan profesional terbaik dalam pembuatan website dengan harga yang sebanding dengan kualitas yang kami berikan. Dengan investasi yang tepat Anda dapat memperoleh hasil yang maksimal untuk bisnis Anda.
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
                    <p class="division-title">Dukungan yang LOGIQUE Berikan dalam Pembuatan Website</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="division-container">
                        <p class="title">Layanan Pembuatan Website “One-Stop”</p>
                        <p class="content">LOGIQUE memberikan dukungan penuh mulai dari Perencanaan dan Konsutasi, Desain, Pemrograman, Pengoperasian atau Pengelolaan Website hingga Pemasaran Digital yang mencakup pembuatan konten, peningkatan SEO, dan pengelolaan iklan digital.</p>
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
                        <img src="assets/img/img-webdev/feature/authentication.svg" alt="アクセス解析・課題抽出">
                        <h3>Analisis dan Evaluasi</h3>
                        <p>Anda sudah punya website dan berkeinginan untuk memperbaikinya? Kami siap untuk melakukan analisis dan mengevaluasi kondisi website Anda saat ini. Contoh analisa yang biasanya kami lakukan adalah terkait mengapa jumlah kunjungan website Anda sangat rendah dan apakah ada faktor-faktor internal di dalam website seperti struktur halaman / url yang mempengaruhi kondisi tersebut. Tim kami ahli dalam menganalisis kinerja website Anda secara keseluruhan dan mampu memberikan solusi dari permasalahan yang ada.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="plan-part flow-part">
                        <img src="assets/img/img-webdev/feature/web-development.png" alt="プランニング">
                        <h3>Perencanaan</h3>
                        <p>Untuk mencapai tujuan yang Anda inginkan dari pengembangan sebuah website diperlukan perencanaan yang baik. Tim konsultan kami secara dekat akan berinteraksi dengan Anda dalam mengumpulkan semua kebutuhan, memformulasikannya kedalam kerangka halaman (wireframe) dan dokumen-dokumen pendukung lainnya yang diperlukan. Hal ini akan membuat pelaksanaan pengembangan website dapat berjalan lancar dan sesuai ekspektasi.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="seo-part flow-part">
                        <img src="assets/img/img-webdev/feature/searchseo.png" alt="SEO / SEM">
                        <h3>SEO / SEM</h3>
                        <p>Hanya dengan membuat dan merilis website tidak serta merta membuat website tersebut mendapatkan banyak kunjungan. Para ahli di perusahaan kami sangat mengenal dan memahami langkah-langkah dalam melakukan penerapan SEO di Indonesia sehingga akan membuat situs web Anda dapat terlihat pada halaman pencarian organic ketika kueri yang relevan dengan bisnis Anda dimasukkan ke dalam mesin pencari. Kami juga dapat melakukan strategi SEM untuk meningkatkan trafik secara cepat menggunakan kata kunci yang efektif.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="info-part flow-part">
                        <img src="assets/img/img-webdev/feature/learning.png" alt="情報再構成・改善">
                        <h3>Peningkatan dan Restrukturisasi</h3>
                        <p>Jika Anda telah memiliki sebuah website, kami tidak selalu menyarankan untuk membuat ulang website Anda dari awal karena masalah-masalah yang ditemukan. Sebab, hal tersebut terkadang membutuhkan banyak pekerjaan serta biaya yang harus dikeluarkan. Untuk kasus seperti ini, kami akan menawarkan kepada Anda solusi terbaik dalam mengatur dan meningkatkan website sesuai dengan budget Anda serta berapa lama waktu yang Anda inginkan.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="multiligual-part flow-part">
                        <img src="assets/img/img-webdev/feature/interpreter.png" alt="多言語Webサイト制作運用">
                        <h3>Membuat dan Mengoperasikan Website Multi Bahasa</h3>
                        <p>Kami dapat membuat dan mengoperasikan website dalam Bahasa Indonesia, Bahasa Inggris, dan Bahasa Jepang. Kami mengerti dan memahami bahwa konten yang kreatif dan tersegmentasi dengan baik sangat penting untuk menjangkau target pasar yang diinginkan.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="sosmed-part flow-part">
                        <img src="assets/img/img-webdev/feature/social-media.png" alt="SNS運用">
                        <h3>Pengoperasian Media Sosial</h3>
                        <p>Media sosial dapat memberi pengaruh yang sangat kuat dalam meningkatkan hubungan bisnis dengan para pelanggan Anda. Selain itu, media sosial juga dapat membantu mendukung peningkatan jumlah pengunjung website Anda. Kami memberikan layanan dalam mengoperasikan media sosial, seperti Facebook dan Instagram untuk kepentingan bisnis Anda baik dalam Bahasa Indonesia, Bahasa Inggris, dan Bahasa Jepang.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="design-part flow-part">
                        <img src="assets/img/img-webdev/feature/graphic-design.png" alt="デザイン制作">
                        <h3>Pembuatan Desain</h3>
                        <p>Kami dapat merancang UI yang sesuai dengan tren desain website terkini, yang ramah bagi pengguna, dan sesuai dengan kebutuhan Anda. Tim desain kami dapat menyarankan kepada Anda berbagai alternatif desain yang berbeda untuk Anda pilih.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="markup-part flow-part">
                        <img src="assets/img/img-webdev/feature/css.png" alt="マークアップ・コーディング">
                        <h3>Markup Coding</h3>
                        <p>Anda juga dapat meminta layanan khusus hanya untuk implementasi tampilan website dengan pemrograman HTML/CSS. Tim developer kami dapat membantu Anda mengejar ketertinggalan teknologi pemrograman pada situs web Anda atau mengkombinasikannya dengan JavaScript.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="responsive-part flow-part">
                        <img src="assets/img/img-webdev/feature/responsive.png" alt="マルチデバイス対応">
                        <h3>Dukungan Multi Perangkat</h3>
                        <p>Kami dapat membuat situs yang dioptimalkan dan responsif untuk seluruh jenis perangkat, seperti ponsel, tablet, dan desktop. Kami juga telah mempunyai banyak pengalaman dalam membuat situs web yang berorientasi pada pengguna mobile dan pengaplikasian AMP.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="programing-part flow-part">
                        <img src="assets/img/img-webdev/feature/web-programming.png" alt="プログラミング">
                        <h3>Fitur Pemrograman Khusus</h3>
                        <p>Anda dapat meminta fitur pemrograman apapun yang Anda inginkan untuk ditambahkan ke dalam situs web Anda, seperti Parallax motions yang dapat diimplementasi dengan kombinasi JavaScript, HTML5, CSS3 dan lain-lain. Kami akan mengusulkan pengembangan situs web yang menarik untuk para pengguna yang telah disesuaikan dengan kebutuhan Anda.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="system-part flow-part">
                        <img src="assets/img/img-webdev/feature/control-panel.png" alt="システム構築">
                        <h3>Pembuatan Sistem Berbasis Web</h3>
                        <p>LOGIQUE dapat membantu Anda mengembangkan sistem berbasis web mulai dari manajemen konten (CMS), fungsi-fungsi khusus yang dibuat sesuai dengan kebutuhan, hingga integrasi dengan sistem-sistem eksternal menggunakan Web Service (API). Kami ahli dalam mengembangkan sistem berbasis web menggunakan Laravel, .Net, NodeJS, dan lain-lain.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="apps-part flow-part">
                        <img src="assets/img/img-webdev/feature/application.png" alt="モバイルアプリ対応">
                        <h3>Pengembangan Website Berteknologi PWA</h3>
                        <p>Kami berpengalaman dan dapat membantu Anda mengembangkan website dengan teknologi PWA yang menghasilkan sebuah aplikasi web yang berlaku layaknya sebuah aplikasi mobile. Beberapa fitur menarik yang terdapat dalam teknologi PWA di antaranya adalah Installasi dengan Add to Homescreen, Push Notification, dan Mode Offline.</p>
                    </div>
                </div>
            </div>
            <!-- <div class="link-page-price-and-portfolio">
                <a class="link-yellow-white" href="/services/webdev-price-range.php">Webサイト制作運用の費用について</a>
                <a class="link-yellow-white" href="/portfolio.php">Webサイト制作実績</a>
            </div> -->
        </div>
    </section>

    <section class="portofolio">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="title">Portofolio Pembuatan Website</p>
                    <p class="content">Berikut adalah beberapa contoh hasil produksi web LOGIQUE.
                    </p>
                </div>
            </div>
            <div class="row portofolio-section">
                <!-- <div class="col-md-6 col-lg-4 col-sm-4" data-toggle="modal" data-target="#exampleModalLong"> -->
                <div class="col-md-6 col-lg-4 col-sm-4">
                    <a href="https://aiapremieracademy.co.id/en/home" target="_blank">
                        <img src="assets/img/img-webdev/AIA.png" alt="">
                        <p class="portofolio-title text-center">AIA</p>
                    </a>
                    <!-- <p class="portofolio-subtitle">Lihat Detil</p> -->
                </div>
                <div class="col-md-6 col-lg-4 col-sm-4">
                    <a href="http://bekalhidup.com/" target="_blank">
                        <img src="assets/img/img-webdev/panin.png" alt="">
                        <p class="portofolio-title text-center">Panin Life Dai - Ichi</p>
                    </a>
                    <!-- <p class="portofolio-subtitle">Lihat Detil</p> -->
                </div>
                <div class="col-md-6 col-lg-4 col-sm-4">
                    <a href="https://jba.co.id/" target="_blank">
                        <img src="assets/img/img-webdev/JBA.png" alt="">
                        <p class="portofolio-title text-center">JBA</p>
                    </a>
                    <!-- <p class="portofolio-subtitle">Lihat Detil</p> -->
                </div>
            </div>
        </div>
    </section>

    <section class="strategic">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="title">Strategi Pengembangan Website di Logique</p>
                    <p class="subtitle">Sebagai perusahaan profesional dalam bidang pembuatan web, Logique memiliki standar pelaksanaan dan strategi yang dapat memastikan website yang kami hasilkan berkualitas tinggi dan bermanfaat untuk tujuan bisnis Anda. Berikut adalah beberapa contoh gambaran strategi yang diterapkan oleh LOGIQUE.</p>
                </div>
            </div>
            <div class="row strategic-list">
                <div class="col-md-4 col-lg-4 col-sm-6">
                    <img src="assets/img/img-webdev/strategic/1.png" alt="">
                    <p class="strategic-title">User Experience (UX)</p>
                    <p class="strategic-content">Menyediakan fungsi dan konten Web yang sesuai dengan perilaku dan kebutuhan pelanggan akan menghasilkan Website yang mengarah pada konversi.</p>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6">
                    <img src="assets/img/img-webdev/strategic/2.png" alt="">
                    <p class="strategic-title">Analisa Persona</p>
                    <p class="strategic-content">Buat target pelanggan utama konkret dan terlihat. Ini akan mengarah pada pembuatan situs web yang menarik bagi target.</p>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6">
                    <img src="assets/img/img-webdev/strategic/3.png" alt="">
                    <p class="strategic-title">SEO Keywords</p>
                    <p class="strategic-content">Kata kunci target dipilih dengan menganalisis jumlah pencarian dan tingkat persaingan guna mendapatkan daftar kata kunci terbaik yang akan digunakan dalam SEO dan pembuatan konten.</p>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6">
                    <img src="assets/img/img-webdev/strategic/4.png" alt="">
                    <p class="strategic-title">Konsep Branding</p>
                    <p class="strategic-content">Membuat rancangan brand Anda secara terukur dan sesuai dengan lini bisnis Anda, termasuk pembuatan logo.</p>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6">
                    <img src="assets/img/img-webdev/strategic/5.png" alt="">
                    <p class="strategic-title">Detil Konsep</p>
                    <p class="strategic-content">Tentukan konsep dan gambarkan lebih lanjut pesan dan branding Anda lewat misi, visi, dan konten yang terarah pada website untuk menjangkau target Anda.</p>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6">
                    <img src="assets/img/img-webdev/strategic/6.png" alt="">
                    <p class="strategic-title">Pedoman Design</p>
                    <p class="strategic-content">Buat panduan desain untuk memastikan konsistensi pada elemen-elemen desain termasuk warna, font, margin, dll.</p>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6">
                    <img src="assets/img/img-webdev/strategic/7.png" alt="">
                    <p class="strategic-title">Analisa Pengunjung</p>
                    <p class="strategic-content">Menganalisis status akses Website saat ini dan mengklarifikasi masalah. Analisis terperinci adalah kunci untuk menetapkan KPI yang konkret dan realistis.</p>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6">
                    <img src="assets/img/img-webdev/strategic/8.png" alt="">
                    <p class="strategic-title">Sitemap</p>
                    <p class="strategic-content">Tentukan struktur situs web, struktur halaman konten. Diperlukan untuk navigasi yang tepat & desain struktur tautan internal.</p>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6">
                    <img src="assets/img/img-webdev/strategic/9.png" alt="">
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
                    <p class="title">Layanan Lain LOGIQUE Terkait Pembuatan Website</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="link-page-price-and-portfolio">
                        <a class="link-yellow-white" href="/layanan/devops.php">Pengoperasian Server Cloud</a>
                        <a class="link-yellow-white" href="/layanan/penetration-test.php">Diagnosa Keamanan Website</a>
                    </div>
                    <div class="link-page-price-and-portfolio">
                        <a class="link-yellow-white" href="/layanan/web-dev.php">Web Creation Portfolio</a>
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
                                  if (count($array)<=$wordsreturned)
                                  {
                                    $retval = $string;
                                  }
                                  else
                                  {
                                    array_splice($array, $wordsreturned);
                                    $retval = implode(" ", $array)." ...";
                                  }
                                  return $retval;
                                }
                                function tgl_indo($tanggal){
                                    $bulan = array (
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
                                 
                                    return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
                                }
                                    $url = file_get_contents('https://www.logique.co.id/blog/wp-json/wp/v2/posts/?tags=108&per_page=5&_embed');
                                
                                        $x = 0;

                                       $remote_posts = json_decode( $url ); 
                                       // printf('<pre>'); 
                                       //  var_dump($url);
                                       // printf('</pre>');
                                        foreach( $remote_posts as $remote_post ) { 
                                            $thumb_full_url = '';
                                            $thumb_url = '';

                                            if ( ! empty( $remote_post->featured_media ) && isset( $remote_post->_embedded ) ) {
                                                $thumb_full_url = $remote_post->_embedded->{'wp:featuredmedia'}[0]->source_url;
                                                $thumb_url = $remote_post->_embedded->{'wp:featuredmedia'}[0]->media_details->sizes->medium->source_url;
                                            }
                                            if($x==0) { 
                                            ?>
                                            <div class="item active ">
                                             <?php } else{
                                                echo ' <div class="item ">';
                                             }

                                             ?> 
                                                    <div class="col-xs-12 col-sm-6 col-md-6 article-container">
                                                        <div class="img-container">
                                                            <img src="<?=$thumb_full_url?>" class="img-responsive">
                                                        </div>
                                                        <div class="content-container">
                                                            <a href="<?=$remote_post->link?>" target="_blank">
                                                                <p class="title"><?=$remote_post->title->rendered?></p>
                                                            </a>
                                                            <p class="content"><?php 
                                                            $array = preg_replace("/<.+>/sU", "", $remote_post->excerpt->rendered);
                                                             $array =  shorten_string($array, 25); 
                                                            echo $array;
                                                             ?></p>
                                                            <p class="date"><?php 
                                                            $tanggal = date(' Y-m-d', strtotime($remote_post->date));
                                                            $idtanggal = tgl_indo($tanggal);
                                                            echo $idtanggal  ;  ?> | By <?php 
                                                              echo $remote_post->_embedded->author[0]->name;
                                                            ?></p>
                                                        </div>
                                                    </div>
                                               
                                            </div>
                                             
                                       <?php  $x++;
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

    <section class="gallery content-article disp-none">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="title">White Paper Tentang Pembuatan Web di Indonesia</p>
                </div>
            </div>
            <div class="row gallery-container">
                <div class="col-xs-12 col-sm-4 col-md-4 article-container">
                    <div class="img-container">
                        <img src="assets/img/img-webdev/gallery1.png" class="img-responsive">
                        <a href="/white-paper-web-dev-1.php" target="_blank">
                            <p class="gallery-content">Download</p>
                        </a>
                    </div>
                </div>  
                <div class="col-xs-12 col-sm-4 col-md-4 article-container">
                    <div class="img-container">
                        <img src="assets/img/img-webdev/gallery2.png" class="img-responsive">
                        <a href="/white-paper-web-dev-2.php" target="_blank">
                            <p class="gallery-content">Download</p>
                        </a>
                    </div>
                </div>  
                <div class="col-xs-12 col-sm-4 col-md-4 article-container">
                    <div class="img-container">
                        <img src="assets/img/img-webdev/gallery3.png" class="img-responsive">
                        <a href="/white-paper-web-dev-3.php" target="_blank">
                            <p class="gallery-content">Download</p>
                        </a>
                    </div>
                </div>  
                <!-- <div class="col-md-4 col-lg-4 col-sm-4">
                    <img src="assets/img/img-webdev/gallery1.png" alt="">
                    <p class="gallery-title">ホワイトペーパー１</p>
                    <p class="gallery-content">ダウンロード</p>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-4">
                    <img src="assets/img/img-webdev/gallery2.png" alt="">
                    <p class="gallery-title">ホワイトペーパー２</p>
                    <p class="gallery-content">ダウンロード</p>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-4">
                    <img src="assets/img/img-webdev/gallery3.png" alt="">
                    <p class="gallery-title">ホワイトペーパー３</p>
                    <p class="gallery-content">ダウンロード</p>
                </div> -->
            </div>
        </div>
    </section>
	
	<!-- <section class="content-article">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="title">White Paper tentang Pembuatan Web di Indonesia</p>
                </div>
            </div>
            <div class="row">
				<div class="col-md-12">
                    <div class="carousel slide multi-item-carousel" id="theCarousel">
                        <div class="carousel-inner">
							<div class="col-xs-12 col-sm-4 col-md-4 article-container">
								<div class="img-container">
									<img src="assets/img/img-webdev/strategic/5.png" class="img-responsive">
									<a href="/white-paper-web-dev-1.php" target="_blank">
										<p class="title">Download</p>
									</a>
								</div>
							</div>  
							<div class="col-xs-12 col-sm-4 col-md-4 article-container">
								<div class="img-container">
									<img src="assets/img/img-webdev/strategic/6.png" class="img-responsive">
									<a href="/white-paper-web-dev-2.php" target="_blank">
										<p class="title">Download</p>
									</a>
								</div>
							</div>  
							<div class="col-xs-12 col-sm-4 col-md-4 article-container">
								<div class="img-container">
									<img src="assets/img/img-webdev/strategic/7.png" class="img-responsive">
									<a href="/white-paper-web-dev-3.php" target="_blank">
										<p class="title">Download</p>
									</a>
								</div>
							</div>  							
						</div>
                        
                        </div>
                    </div>
                </div>
            </div>
                
            </div>
        </div>
    </section> -->

    <section class="obstacle">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Alur Pembuatan Situs Web di LOGIQUE</h2>
                    <p>
                    Pembuatan situs web dari LOGIQUE selalu berfokus pada penyesuaian antara kecepatan dan kualitas. Para ahli dan pekerja profesional kami siap bertanggung jawab terhadap setiap langkah yang dilakukan. Alur pembuatan situs web sangat terstruktur, mulai dari perencanaan dan pengajuan, desain, pengembangan, serta pengoperasian untuk mewujudkan situs web terbaik. Tahapan LOGIQUE untuk membuat sebuah situs web juga dapat bervariasi, tergantung dari jenis proyek (ukuran situs web, kebutuhan CMS, kesulitan dalam pengembangan sistem, dll). Berikut ini adalah alur umum dalam pembuatan situs web di LOGIQUE.
                    </p>
                </div>
                <div class="col-md-6 text-center">
                    <a href="/" target="_blank"><img src="assets/img/img-webdev/logo.png" alt="Fitur Perusahaan"></a>
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
                                    <p class="title-content-p">Tim kami siap untuk menerima pesan Anda kapan saja. Anda juga dapat melakukan pemesanan dan menjelaskan secara jelas kepada kami mengenai deskripsi awal situs web seperti apa yang Anda inginkan, mulai dari pembuatan situs web, operasi, konfigurasi CMS, pengembangan sistem web, dan lain-lain. Hubungi kami sekarang melalui email ke info@logique.co.id atau melakukan pengisian formulir pemesanan yang tersedia di sini. Anda juga dapat bertanya kepada kami mengenai berbagai hal yang berkaitan dengan pengembangan web, mendesain web atau bahkan harganya. Jangan ragu untuk berbicara dengan kami dalam Bahasa Indonesia, Bahasa Inggris, atau Bahasa Jepang. Kami akan langsung menghubungi Anda untuk melanjutkan diskusi lebih lanjut.
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
                                Anda mungkin mempunyai visi dan target yang lebih spesifik, seperti meningkatkan keuntungan bisnis Anda, citra dan merek Anda, kegiatan IR, perekrutan, dll. Kami ingin mendengar semuanya dari Anda. Tidak harus bertemu, namun jika Anda mau, kami dapat menghubungi Anda melalui Skype atau melalui aplikasi komunikasi lainnya, sehingga kami dapat berbicara lebih lanjut mengenai bisnis Anda. Setelah itu, kami akan memberikan beberapa saran yang telah disesuaikan berdasarkan minat Anda, serta beberapa pendekatan efektif sesuai dengan kebutuhan Anda.
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
                                Setelah kami memahami segalanya, kami akan langsung mengusulkan situs web seperti apa yang Anda butuhkan untuk menyelesaikan permasalahan tersebut. Jika diperlukan, kami juga akan melakukan penelitian, termasuk mengenai pesaing serta menganalisis tugas pencarian dari situs web yang saat ini. Bahkan dalam pengajuan proposal, kami menghargai kecepatan dan mengingat bahwa proposal harus diselesaikan dalam waktu yang cepat. Dalam proposal, kami juga akan menyediakan layanan opsional, seperti fotografi, videografi dan pembuatan konten yang diperlukan. Anda juga dapat berkonsultasi kepada kami jika Anda mempunyai usulan tertentu yang ingin Anda lakukan. Dalam proposal tersebut juga terdapat layanan harga serta perkiraan berapa lama waktu yang dibutuhkan untuk pembuatan situs web Anda. Seluruhnya berdasarkan pada metode transparansi yang kami lakukan, tingkat kesulitan serta jumlah anggota tim yang diperlukan untuk menyelesaikan pekerjaan Anda.
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
                                Jika Anda menyetujui apa yang telah kami tawarkan, maka proses selanjutnya adalah penandatangan kontrak serta pembayaran uang muka sebesar 50% dari total anggaran biaya yang tertera di dalam proposal. Setelah pembayaran selesai dilakukan, maka tim kami akan langsung dapat memulai untuk melakukan operasi pembuatan situs web Anda.
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
                                <p class="title-custom-p"><b>Konfirmasi</b></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-offset-2 col-md-10 m-t-10">
                                <p class="title-content-p">
                                Pertama, kami akan melakukan konfirmasi mengenai seluruh detail struktur situs website Anda serta persyaratan yang dibutuhkan. Hal ini bertujuan untuk memastikan bahwa tidak ada poin yang terlewat sehingga menyebabkan terjadinya hambatan dalam proses pembuatan web ke depan. Selain itu, kami juga akan menunjukkan kerangka kerja untuk pembuatan situs web Anda (Wireframe) yang telah kami buat sebagai gambaran awal. Selanjutnya untuk konsep, desain, domain serta server web akan kami dikonfirmasikan dan diputuskan. Apabila sebelumnya Anda telah mempunyai situs web, maka Anda dapat membagikan akses Google Analytics situs website Anda kepada kami.
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
                                <p class="title-custom-p"><b>Pembuatan Desain Situs Website</b></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-offset-2 col-md-10 m-t-10">
                                <p class="title-content-p">
                                Pada tahap ini, konsep beranda atau situs web utama akan kami buat dan kami rancang sesuai dengan referensi yang Anda berikan. Tim desain situs web kami selanjutnya akan memberikan kepada Anda beberapa alternatif yang dapat Anda setujui atau Anda revisi. Setelah Anda setuju, maka langkah selanjutnya kami akan membuat sisa halaman berdasarkan desain yang berasal dari situs web utama.
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
                                <p class="title-custom-p"><b>Impelementasi, Pengodean dan Pemrograman</b></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-offset-2 col-md-10 m-t-10">
                                <p class="title-content-p">
                                Pada tahap ini, kami akan menjalankan berbagai fungsi pemrograman dari berbagai fitur yang telah direncanakan, termasuk CMS. Pada tahap ini juga telah mencakup penerapan SEO mengikuti desain UI/ UX serta menghilangkan berbagai fitur yang rentan terhadap keamanan situs web Anda. Kami juga akan memastikan bahwa seluruh arsitektur serta berbagai fitur yang berada di situs web Anda telah berjalan dan berfungsi dengan semestinya. Konsep ini bertujuan untuk memastikan bahwa situs website Anda telah terstruktur dengan baik untuk mendapatkan pengalaman pengunjung sesuai dengan target yang ditentukan.
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
                                Setelah kami membuat situs web, maka kami akan melakukas tes yang telah disesuaikan dengan isi serta desain situs web itu sendiri. Kami akan memastikan tidak ada kesalahan sintaks HTML, website sepenuhnya telah mobile-friendly, setiap halaman dapat dimuat dengan cepat, serta penerapan SEO telah dilakukan secara efektif. Untuk keamanan situs website Anda, maka kami juga akan melakukan pengujian dan pemeriksaan keamanan dengan melakukan banyak skenario pengujian. Kami selanjutnya akan mendemonstrasikan berbagai fitur tersebut kepada Anda secara berkala sehingga Anda dapat langsung memberikan feedback atau saran kepada kami dari setiap fitur yang telah kami buat. Ketika proyek telah memasuki tahap finalisasi, Anda juga dapat melakukan pengetesan untuk memastikan dan mengkonfirmasi bahwa seluruh fungsi yang diterapkan telah sesuai dan berjalan dengan baik.
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
                                <p class="title-custom-p"><b>Peluncuran Situs Web</b></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-offset-2 col-md-10 m-t-10">
                                <p class="title-content-p">
                                Pada tahapan ini, situs website Anda akan dimasukkan ke dalam web server untuk sekaligus dipublikasikan. Kami dapat membantu Anda untuk memindahkan seluruh data yang berasal dari situs lama Anda jika diperlukan. Setelah dipublikasi, selanjutnya kami akan melakukan registrasi indeks di Google serta menyiapkan Google Analytics untuk melakukan pemeliharaan lebih lanjut. Pada tahap ini juga, Anda dapat melunasi sisa pembayaran sehingga situs web Anda dapat langsung digunakan.
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
                                Setelah diluncurkan, kami tidak akan meninggalkan Anda begitu saja. Kami sadar bahwa setiap situs website membutuhkan manajemen dalam jangka waktu yang panjang. Hal ini juga termasuk ke dalam situs website milik Anda. Karena itu, kami akan terus melakukan pemeliharaan sistem situs website Anda untuk menjaga agar hasil dapat sesuai dengan apa yang Anda inginkan. LOGIQUE menyediakan berbagai layanan manajemen yang Anda butuhkan, mulai dari mengamati sistem, melakukan operasi harian, bahkan untuk pembuatan konten reguler sekalipun. Kami juga dapat melakukan pengoperasian akun media sosial Anda, sampai melakukan operasi digital marketing. Semua itu untuk hasil yang maksimal dari situs web Anda.
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
            <div class="row img-container">
                <div class="col-md-12">
                    <img src="assets/img/img-webdev/domore.png" alt="">
                </div>
                <div class="col-md-12 col-lg-8 content-container">
                    <p class="title">Kami selalu siap untuk membantu Anda dalam pembuatan dan pengembangan situs web, serta:</p>
                    <p class="list">
                        • 	Pembuatan dan /atau pengoperasian situs website
                    </p>
                    <p class="list">
                        • 	Membangun kembali dan mengoptimalkannya untuk ponsel/ smartphone
                    </p>
                    <p class="list">
                        • 	Mengembangkan aplikasi Android/ iOS
                    </p>
                    <p class="list">
                        • 	Mengoperasikan sistem manajamen secara mandiri
                    </p>
                    <p class="list">
                        • 	Mengelola infrastruktur IT
                    </p>
                    <p class="list">
                        • 	Melakukan audit keamanan IT
                    </p>
                    <p class="list">
                        • 	Meningkatkan awareness akan perusahaan/merek Anda melalui pemasaran digital
                    </p>
                    <p class="list">
                        • 	Meraih target pemasaran online melalui pemasangan iklan online
                    </p>
                    <p class="list">
                        • 	Mendesain dan mencetak materi promosi perusahaan untuk kemudian didistribusikan
                    </p>
                    <p class="list">
                        • 	Mengelola pengoperasian akun media sosial (Facebook, Instagram dan Youtube)
                    </p>
                    <p class="list">
                        • 	Memperbarui konten dan mengoperasikan situs web Anda
                    </p>
                    <p class="list">
                        • 	Membuat dan memasang chatbot online untuk situs website Anda
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <a href="/hubungi-kami.php">
                        <div class="button-container">
                            <p>
                            Silahkan hubungi LOGIQUE tentang pembuatan website di Indonesia
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
                        <img src="assets/img/img-webdev/facebookads.png" alt="">
                    </a>
                </div>
                <div class="col-md-6 col-sm-6">
                    <a href="https://www.linkedin.com/company/13420656" target="_blank">
                        <img src="assets/img/img-webdev/linkedinads.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="tahap-pemesanan-2 hidden-xs" style="padding: 2em"></section>

    <section id="modal">
        <div class="modal fade modal-section" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body aia-section">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="title-section">
                            <p class="title">AIA</p>
                            <p class="subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate quidem ratione optio aliquid quae vitae, molestiae maiores sed vero iste quasi, odio eligendi accusamus. Quia non aliquam laudantium cumque nam!</p>
                            <p class="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem architecto ipsam ut fugit mollitia autem esse obcaecati nesciunt voluptates odit nemo qui, aspernatur provident iste deleniti sit, corrupti consequatur incidunt.</p>
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
                                    <p>Lorem Ipsum</p>
                                </div>
                            </div>
                            <div class="content-container">
                                <div class="content-title">
                                    <p>Genre</p>
                                </div>
                                <div class="content-desc">
                                    <p>Lorem Ipsum</p>
                                </div>
                            </div>
                            <div class="content-container">
                                <div class="content-title">
                                    <p>Project Period</p>
                                </div>
                                <div class="content-desc">
                                    <p>Lorem Ipsum</p>
                                </div>
                            </div>
                            <div class="content-container">
                                <div class="content-title">
                                    <p>Device</p>
                                </div>
                                <div class="content-desc">
                                    <p>Lorem Ipsum</p>
                                </div>
                            </div>
                            <div class="content-container">
                                <div class="content-title">
                                    <p>Lorem Ipsum</p>
                                </div>
                                <div class="content-desc">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi explicabo eum, aliquam laudantium iste cumque quis enim eos eveniet corrupti tempore natus. Nesciunt, quaerat aut repudiandae vitae enim ipsam provident.</p>
                                </div>
                            </div>
                            <div class="content-container scope-container">
                                <div class="content-title">
                                    <p>Scope/person in charge</p>
                                </div>
                                <div class="content-desc">
                                    <p>Strategic design</p>
                                    <p>
                                        Information design
                                    </p>
                                    <p>
                                        direction
                                    </p>
                                    <p>
                                        Lead design
                                    </p>
                                    <p>
                                        design
                                    </p>
                                    <p>
                                        Copywriting
                                    </p>
                                    <p>
                                        Front mounting
                                    </p>
                                    <p>
                                        Server-side implementation
                                    </p>
                                    <p>
                                        Illustration production
                                    </p>
                                    	
                                </div>
                                <div class="content-desc">
                                    <p>Lorem Ipsum</p>
                                    <p>
                                    Lorem Ipsum
                                    </p>
                                    <p>
                                    Lorem Ipsum
                                    </p>
                                    <p>
                                    Lorem Ipsum
                                    </p>
                                    <p>
                                    Lorem Ipsum
                                    </p>
                                    <p>
                                    Lorem Ipsum
                                    </p>
                                    <p>
                                    Lorem Ipsum
                                    </p>
                                    <p>
                                    Lorem Ipsum
                                    </p>
                                    <p>
                                    Lorem Ipsum
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="img-section">
                            <img src="assets/img/aia.png" alt="">
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
                            <p class="title">Panin</p>
                            <p class="subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate quidem ratione optio aliquid quae vitae, molestiae maiores sed vero iste quasi, odio eligendi accusamus. Quia non aliquam laudantium cumque nam!</p>
                            <p class="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem architecto ipsam ut fugit mollitia autem esse obcaecati nesciunt voluptates odit nemo qui, aspernatur provident iste deleniti sit, corrupti consequatur incidunt.</p>
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
                                    <p>Industry/Industry</p>
                                </div>
                                <div class="content-desc">
                                    <p>Lorem Ipsum</p>
                                </div>
                            </div>
                            <div class="content-container">
                                <div class="content-title">
                                    <p>Genre</p>
                                </div>
                                <div class="content-desc">
                                    <p>Lorem Ipsum</p>
                                </div>
                            </div>
                            <div class="content-container">
                                <div class="content-title">
                                    <p>Project Period</p>
                                </div>
                                <div class="content-desc">
                                    <p>Lorem Ipsum</p>
                                </div>
                            </div>
                            <div class="content-container">
                                <div class="content-title">
                                    <p>Device</p>
                                </div>
                                <div class="content-desc">
                                    <p>Lorem Ipsum</p>
                                </div>
                            </div>
                            <div class="content-container">
                                <div class="content-title">
                                    <p>Lorem Ipsum</p>
                                </div>
                                <div class="content-desc">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi explicabo eum, aliquam laudantium iste cumque quis enim eos eveniet corrupti tempore natus. Nesciunt, quaerat aut repudiandae vitae enim ipsam provident.</p>
                                </div>
                            </div>
                            <div class="content-container scope-container">
                                <div class="content-title">
                                    <p>Scope/person in charge</p>
                                </div>
                                <div class="content-desc">
                                    <p>Strategic design</p>
                                    <p>
                                        Information design
                                    </p>
                                    <p>
                                        direction
                                    </p>
                                    <p>
                                        Lead design
                                    </p>
                                    <p>
                                        design
                                    </p>
                                    <p>
                                        Copywriting
                                    </p>
                                    <p>
                                        Front mounting
                                    </p>
                                    <p>
                                        Server-side implementation
                                    </p>
                                    <p>
                                        Illustration production
                                    </p>
                                    	
                                </div>
                                <div class="content-desc">
                                    <p>Lorem Ipsum</p>
                                    <p>
                                    Lorem Ipsum
                                    </p>
                                    <p>
                                    Lorem Ipsum
                                    </p>
                                    <p>
                                    Lorem Ipsum
                                    </p>
                                    <p>
                                    Lorem Ipsum
                                    </p>
                                    <p>
                                    Lorem Ipsum
                                    </p>
                                    <p>
                                    Lorem Ipsum
                                    </p>
                                    <p>
                                    Lorem Ipsum
                                    </p>
                                    <p>
                                    Lorem Ipsum
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="img-section">
                            <img src="assets/img/panin.png" alt="">
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
                            <p class="title">JBA</p>
                            <p class="subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate quidem ratione optio aliquid quae vitae, molestiae maiores sed vero iste quasi, odio eligendi accusamus. Quia non aliquam laudantium cumque nam!</p>
                            <p class="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem architecto ipsam ut fugit mollitia autem esse obcaecati nesciunt voluptates odit nemo qui, aspernatur provident iste deleniti sit, corrupti consequatur incidunt.</p>
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
                                    <p>Industry/Industry</p>
                                </div>
                                <div class="content-desc">
                                    <p>Lorem Ipsum</p>
                                </div>
                            </div>
                            <div class="content-container">
                                <div class="content-title">
                                    <p>Genre</p>
                                </div>
                                <div class="content-desc">
                                    <p>Lorem Ipsum</p>
                                </div>
                            </div>
                            <div class="content-container">
                                <div class="content-title">
                                    <p>Project Period</p>
                                </div>
                                <div class="content-desc">
                                    <p>Lorem Ipsum</p>
                                </div>
                            </div>
                            <div class="content-container">
                                <div class="content-title">
                                    <p>Device</p>
                                </div>
                                <div class="content-desc">
                                    <p>Lorem Ipsum</p>
                                </div>
                            </div>
                            <div class="content-container">
                                <div class="content-title">
                                    <p>Lorem Ipsum</p>
                                </div>
                                <div class="content-desc">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi explicabo eum, aliquam laudantium iste cumque quis enim eos eveniet corrupti tempore natus. Nesciunt, quaerat aut repudiandae vitae enim ipsam provident.</p>
                                </div>
                            </div>
                            <div class="content-container scope-container">
                                <div class="content-title">
                                    <p>Scope/person in charge</p>
                                </div>
                                <div class="content-desc">
                                    <p>Strategic design</p>
                                    <p>
                                        Information design
                                    </p>
                                    <p>
                                        direction
                                    </p>
                                    <p>
                                        Lead design
                                    </p>
                                    <p>
                                        design
                                    </p>
                                    <p>
                                        Copywriting
                                    </p>
                                    <p>
                                        Front mounting
                                    </p>
                                    <p>
                                        Server-side implementation
                                    </p>
                                    <p>
                                        Illustration production
                                    </p>
                                    	
                                </div>
                                <div class="content-desc">
                                    <p>Lorem Ipsum</p>
                                    <p>
                                    Lorem Ipsum
                                    </p>
                                    <p>
                                    Lorem Ipsum
                                    </p>
                                    <p>
                                    Lorem Ipsum
                                    </p>
                                    <p>
                                    Lorem Ipsum
                                    </p>
                                    <p>
                                    Lorem Ipsum
                                    </p>
                                    <p>
                                    Lorem Ipsum
                                    </p>
                                    <p>
                                    Lorem Ipsum
                                    </p>
                                    <p>
                                    Lorem Ipsum
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="img-section">
                            <img src="assets/img/jba.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
