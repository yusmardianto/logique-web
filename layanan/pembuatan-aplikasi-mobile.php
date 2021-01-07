<?php 
require_once("assets/form/fgcontact_mobileapps.php"); 
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
 <html lang="id">

 <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=3.0">
     <meta name="description"
         content="Jasa pembuatan aplikasi Android & iOS terbaik di Jakarta. Aplikasi Mobile berbasis hybrid dengan teknologi flutter | Aplikasi inspeksi Otomotif, E-commerce, dll.">
     <meta name="keywords"
         content="jasa pembuatan aplikasi mobile, jasa pembuatan aplikasi ios, jasa pembuatan aplikasi android">
     <meta name="author" content="PT LOGIQUE DIGITAL INDONESIA ">
     <meta itemprop="name" content="PT. Logique Digital Indonesia">
     <meta property="og:title" content="Jasa Pembuatan Aplikasi Android & iOS (Mobile Apps) Jakarta">
     <meta property="og:type" content="website">
     <meta property="og:site_name" content="Logique">
     <meta property="og:url" content="https://www.logique.co.id/layanan/pembuatan-aplikasi-mobile.php">
     <meta property="og:image" content="https://www.logique.co.id/assets/img/img-mobileapps/og-image.png">
     <meta property="og:description"
         content="Jasa pembuatan aplikasi Android & iOS terbaik di Jakarta. Aplikasi Mobile berbasis hybrid dengan teknologi flutter | Aplikasi inspeksi Otomotif, E-commerce, dll.">
     <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
     <link rel="canonical" href="https://www.logique.co.id/layanan/pembuatan-aplikasi-mobile.php" />  
     <title>Jasa Pembuatan Aplikasi Android & iOS (Mobile Apps) Jakarta</title>

    <!-- font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rokkitt:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- <link rel="stylesheet" href="/css/sidebar-update.css" > -->
    <link href="/css/sidebar-update.css" rel="stylesheet">
    <link href="/css/newstyle.css" rel="stylesheet">
    <link href="assets/css/style-mobileapps.css" rel="stylesheet">

    <!-- <link href="https://fonts.googleapis.com/css2?family=Raleway&family=Rokkitt:wght@300;400;600;700&display=swap" rel="stylesheet"> -->
     
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

 <body class="mobileapp-page">
	<?php 
		if ($_SERVER['HTTP_HOST'] === 'www.logique.co.id') {
			echo '<!-- Google Tag Manager (noscript) -->
			<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KQJRS4V"
			height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
			<!-- End Google Tag Manager (noscript) -->';
		}
	?>
     <style>
        .container__ { padding-top: 0; padding-bottom: 0; }
        .logique-nav { left: 0; }
        .title { background-color: transparent; padding: 0; }
        .copyright { background-color: transparent; text-align: left; border: none; color: inherit;              }
        footer { padding: 30px 0 10px; }
     </style>
     <div class="wrapper wrapper--update-design wrapper--update-design-font o-wrapper">
     <!-- NAVIGATION -->
    <?php 
        // $active option are home, about, portfolio, services, product, career, contact
        $active = 'services';
        include($_SERVER['DOCUMENT_ROOT'].'/sidebar.php'); 
    ?>

    <?php 
        $lang = 'id';
        $en_link = '/en/services/mobile-app-dev.php';
        $id_link = '#';
        $jp_link = '/jp/services/mobile-app-dev.php';
        include($_SERVER['DOCUMENT_ROOT'].'/header.php'); 
    ?>
     
     <div class="content-wrapper__">
         <header class=" ">
             <section class="--top">
                 <div class="container__" style="padding:0">
                     <div class="row">
                         <div class="col-sm-12">
                             <ol class="breadcrumb breadcrumb--update-design" itemscope
                                 itemtype="http://schema.org/BreadcrumbList">
                                 <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item"
                                         href="/index.php"><span itemprop="name">Beranda</span></a>
                                     <meta itemprop="position" content="1" />
                                 </li>
                                 <li class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a
                                         itemprop="item" href="/layanan.php"><span itemprop="name">&nbsp;Layanan</span></a>
                                     <meta itemprop="position" content="2" />
                                 </li>
                                 <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a
                                         itemprop="item"><span itemprop="name">&nbsp;Pengembangan Aplikasi Mobile</span></a>
                                     <meta itemprop="position" content="3" />
                                 </li>
                             </ol>
                         </div>
                     </div>
                 </div>
             </section>
             <div class="container__">
                 <div class="row">
                     <div class="col-md-7"> 
                         <h1 style="font-size: 30px">Ingin Mengembangkan <span class="yellow">Aplikasi Mobile (Android | iOS |
                                 Hybrid)</span> dengan kualitas tinggi dan biaya terjangkau? Silahkan Hubungi <span
                                 class="yellow logo-font">LOGIQUE</span></h1>
                         <p>
                             LOGIQUE siap membantu Anda yang ingin berkonsultasi mengenai pengembangan, pengelolaan, dan
                             peningkatan aplikasi mobile (Android | iOS | Hybrid). Kami menawarkan jasa pengembangan aplikasi
                             mobile dengan teknologi terkini dan biaya yang terjangkau. Selain pengembangan aplikasi mobile, kami
                             juga memiliki sejumlah pengalaman dalam solusi pemanfaatan ponsel seperti tampilan responsif, PWA
                             (teknologi web progresif) dan lain sebagainya. Kami menunggu kabar Anda.
                         </p>
                         <div class="visible-md visible-lg"><br /><br /><br /><br /><br /><br /><br /><br /><br /></div>
                     </div>
                     <div class="col-md-5">
                     <picture>
                        <source srcset="assets/img/img-mobileapps/webp/hp-header.webp" type="image/webp"> 
                        <img loading="lazy" alt="Mobile" src="assets/img/img-mobileapps/hp-header.png" class="hp-header img-responsive center-block" />
                     </picture>
                        
                     </div>
                 </div>
             </div>
         </header>

         <section class="hubungi-kami-top">
             <div class="container__">
                 <div class="row">
                     <div class="col-lg-12">
                         <a href="/hubungi-kami.php" target="_blank"><span class="purple">Hubungi kami</span></a> untuk informasi
                         lebih lanjut.
                     </div>
                 </div>
             </div>
         </section>

         <section>
             <div class="container__">
                 <br /><br />
                 <div class="row">
                     <div class="col-md-5">
                         <h2 class="first">Kami adalah Mitra yang Tepat untuk Pengembangan <span>Aplikasi Mobile</span> Anda</h2>
                         <br />
                         <picture>
                            <source srcset="assets/img/img-mobileapps/webp/mobile-phone.webp" type="image/webp"> 
                            <img loading="lazy"alt="Pengembangan Aplikasi Mobile Berorientasi Pengguna" src="assets/img/img-mobileapps/mobile-phone.png" class="img-responsive center-block mobile-phone"  />
                        </picture>
                     </div>
                     <div class="col-md-7">
                         <p>
                             Memilih mitra yang tepat merupakan hal penting bagi keberhasilan pengembangan dan
                             pengoperasian aplikasi mobile Anda. Untuk melakukan pengembangan teknologi dan sistem dari
                             aplikasi mobile, perusahaan pengembang aplikasi mobile tersebut harus memiliki keterampilan
                             tinggi dan manajemen kerja yang baik. LOGIQUE merupakan perusahaan pengembang yang mampu
                             merancang aplikasi mobile dengan desain yang baik berteknologi modern baik secara native ataupun
                             hybrid menggunakan Objective-C, Swift, Java, Kotlin, dan Xamarin.
                             <br><br>
                             Lalu, jika Anda memiliki ide bisnis inovatif dengan memanfaatkan sistem aplikasi seperti aplikasi e-
                             commerce, transportasi online, finansial, otomotif, jasa, dll., silahkan konsultasikan ide Anda
                             kepada
                             Kami. Dengan pengalaman lebih dari 5 tahun di bidang pengembangan aplikasi mobile dan
                             mengusung teknologi terkini dalam pengembangan aplikasi, bukanlah suatu hal yang mustahil bagi
                             Kami untuk mewujudkan ide bisnis Anda. Selama proses perencanaan, pengembangan,
                             pengoperasian, dan pemeliharaan (maintenance) aplikasi, Kami juga akan menyesuaikan dengan
                             permintaan pelanggan dan memberikan saran strategis untuk menghasilkan aplikasi dengan hasil
                             akhir yang optimal. Jangan ragu untuk menghubungi LOGIQUE jika Anda memiliki masalah atau
                             kebutuhan terkait dengan aplikasi mobile. 
                         </p>
                     </div>
                 </div>
                 <br /><br />
             </div>
         </section>

         <section class="solusi revision">
             <div class="container__">
                 <br /><br />
                 <div class="row">
                     <div class="col-md-4">
                         <h2 class="title">LOGIQUE adalah Salah Satu Pengembang <b>Aplikasi Mobile</b> Terbaik di Indonesia
                         </h2>
                     </div>
                     <div class="col-md-8">
                         <ul class="fa-ul">
                             <li><span class="fa-li"><img src="assets/img/img-mobileapps/check.svg" style="width:13px;"> </span>LOGIQUE dapat menyesuaikan
                                 kebutuhan
                                 dan keinginan klien dengan teknologi terkini untuk menghasilkan aplikasi (iOS | Android |
                                 Hybrid)
                                 yang terdepan dan berskala internasional.</li>
                             <li><span class="fa-li"><img src="assets/img/img-mobileapps/check.svg" style="width:13px;"> </span></span>Aplikasi iOS dan Android yang
                                 kami
                                 kembangkan telah melalui proses perencanaan desain yang matang oleh Desainer UI/UX
                                 berpengalaman
                                 sehingga tampilan yang dihasilkan sangat user friendly.</li>
                             <li><span class="fa-li"><img src="assets/img/img-mobileapps/check.svg" style="width:13px;"> </span></span>Keamanan, optimasi, dan
                                 skalabilitas
                                 aplikasi diperhitungkan dengan detil oleh ahli teknis kami untuk memberikan hasil akhir yang
                                 dapat digunakan dengan maksimal oleh pengguna.</li>
                             <li><span class="fa-li"><img src="assets/img/img-mobileapps/check.svg" style="width:13px;"> </span></span>Dengan pengalaman lebih dari
                                 lima
                                 tahun, kemampuan dan keahlian tim LOGIQUE sudah teruji kualitasnya pada berbagai macam klien
                                 dan
                                 proyek yang berasal dari dalam dan luar negeri.</li>
                             <li><span class="fa-li"><img src="assets/img/img-mobileapps/check.svg" style="width:13px;"> </span></span>Proses perencanaan,
                                 pengembangan,
                                 pengoperasian, serta maintenance aplikasi mobile menyesuaikan dengan permintaan pelanggan dan
                                 kebutuhan pengguna untuk menghasilkan aplikasi mobile dengan hasil akhir yang berkualitas
                                 dari
                                 segi fungsi, keamanan data, dan penggunaan aplikasi.</li>
                         </ul>
                     </div>
                 </div>
                 <br /><br />
             </div>
         </section>

         <section class="container__ logique-help">
             <br /><br /><br>
             <div class="row">
                 <div class="col-md-12">
                     <h2 class="font-28 text-center">LOGIQUE Dapat Membantu Berbagai Kebutuhan <span class="purple">Aplikasi
                             Mobile Anda</span></h2>
                 </div>
                 <div class="clearfix"></div>
                 <br /><br /><br>
                 <div class="col-md-4">
                     <div class="div-help">
                         <h3 class="div-title"><span class="title purple"><b>Membuat Produk Berbasis Aplikasi</b></span></h3>
                         <div class="">
                            <picture>
                                <source srcset="assets/img/img-mobileapps/webp/inovatif.webp" type="image/webp"> 
                                <img loading="lazy" alt="Ide Aplikasi Inovatif" class="img-responsive center-block" src="assets/img/img-mobileapps/inovatif.png"   />
                            </picture><br />
                        
                             Apakah Anda sudah menemukan ide untuk mengembangkan aplikasi mobile senilai milyaran rupiah
                             seperti
                             Go-Jek, Traveloka, atau Tokopedia? Dengan keamanaan informasi melalui Perjanjian Kerahasiaan kami
                             dapat membantu menganalisa ide Anda dan merealisasikannya. Kami akan membantu Anda untuk menjadi
                             App-Enterpreneur besar selanjutnya di industri yang sedang berkembang sangat pesat ini.</div>
                     </div>
                 </div>
                 <div class="col-md-4">
                     <div class="div-help">
                         <h3 class="div-title"><span class="title purple"><b>Memberikan Nilai Tambah dengan Aplikasi
                                     Mobile</b></span></h3>
                         <div class=""> 
                            <picture>
                                <source srcset="assets/img/img-mobileapps/webp/nilai-tambah.webp" type="image/webp"> 
                                <img loading="lazy" alt="Memberikan Nilai Tambahan" class="img-responsive center-block" src="assets/img/img-mobileapps/nilai-tambah.png"   />
                            </picture><br />
                             Sudah menyediakan produk dan layanan kepada pelanggan Anda? Kami dapat membantu Anda menggunakan
                             teknologi berbasis aplikasi untuk membangun nilai tambah sesuai dengan penawaran Anda.
                             Kenyamanan,
                             kemampuan, dan konektivitas smartphone menjadikannya sebagai platform ideal untuk membawa nilai
                             tambah ke layanan Anda saat ini.</div>
                     </div>
                 </div>
                 <div class="col-md-4">
                     <div class="div-help">
                         <h3 class="div-title"><span class="title purple"><b>Optimasi Bisnis dengan Aplikasi Mobile</b></span>
                         </h3>
                         <div class="">
                            <picture>
                                <source srcset="assets/img/img-mobileapps/webp/proses-bisnis.webp" type="image/webp"> 
                                <img loading="lazy" alt="Meningkatkan Proses Bisnis" class="img-responsive center-block" src="assets/img/img-mobileapps/proses-bisnis.png"   />
                            </picture>
                             <img /><br />
                             Pernahkah Anda mempertimbangkan bagaimana Anda dapat mengefektifkan bisnis atau perusahaan Anda
                             menggunakan teknologi aplikasi mobile? Aplikasi memberikan peluang yang sangat luas untuk
                             memberdayakan staf dan meningkatkan efisiensi. Solusi aplikasi mobile dengan perencanaan sesuai
                             kebutuhan perusahaan telah terbukti meningkatkan aktivitas kerja sehari-hari yang memungkinkan
                             menghasilkan kinerja yang lebih baik dibandingkan pesaing bisnis Anda.</div>
                     </div>
                 </div>
             </div>
             <br /><br /><br />
         </section>

         <section class="solusi revision" id="solusi-section">
             <div class="container__">
                 <br /><br />
                 <div class="row row-center-md">
                     <div class="col-md-offset-1 col-md-3">
                         <h2 class="title">Solusi yang di peroleh dari pengembangan <span><b>Aplikasi Mobile</b></span></h2>
                     </div>
                     <div class="col-md-8">
                         <ul class="fa-ul">
                             <li><span class="fa-li"><img src="assets/img/img-mobileapps/check.svg" style="width:13px;"> </span></span>Aplikasi mobile sebagai produk
                                 dan
                                 aset yang menghasilkan.</li>
                             <li><span class="fa-li"><img src="assets/img/img-mobileapps/check.svg" style="width:13px;"> </span></span>Aplikasi mobile sebagai media
                                 penghubung antara perusahan dan karyawan.</li>
                             <li><span class="fa-li"><img src="assets/img/img-mobileapps/check.svg" style="width:13px;"> </span></span>Aplikasi mobile sebagai alat
                                 pendukung pemasaran produk dan jasa anda.</li>
                             <li><span class="fa-li"><img src="assets/img/img-mobileapps/check.svg" style="width:13px;"> </span></span>Aplikasi mobile sebagai aplikasi
                                 pendukung pengunaan produk anda.</li>
                             <li><span class="fa-li"><img src="assets/img/img-mobileapps/check.svg" style="width:13px;"> </span></span>Aplikasi mobile dengan
                                 pengoperasian
                                 yang mudah dan responsif.</li>
                         </ul>
                     </div>
                 </div>
                 <br />
                 <hr /><br />
                 <h2 class="font-28 text-center">Layanan Kami terkait Aplikasi Mobile</h2><br />
                 <div class="row">
                     <div class="col-md-10 col-md-offset-1 text-center">
                         Kami menawarkan layanan lengkap mulai dari pengembangan konsep aplikasi, pembuatan, peluncuran,
                         hingga
                         pengelolaan berkelanjutan untuk aplikasi Anda. Semua layanan kami bertujuan untuk membangun aplikasi
                         yang
                         menawarkan pengalaman maksimal bagi pengguna dan hasil transformasi bisnis yang luar biasa.
                     </div>
                 </div>
                 <br />
                 <div class="row">
                     <div class="col-md-4">
                         <div class="layanan-kami">
                             <h3 class="title">Pengembangan Aplikasi iOS untuk iPhone / iPad</h3>
                             <br />
                             <picture>
                                <source srcset="assets/img/img-mobileapps/webp/apple.webp" type="image/webp"> 
                                <img loading="lazy"alt="Pengembangan Aplikasi iOS untuk iPhone / iPad" src="assets/img/img-mobileapps/apple.png" class="img-responsive center-block" />
                            </picture> 
                                 <br />
                             Kami berpengalaman mengembangkan aplikasi yang memiliki kompatibilitas pada berbagai versi iOS
                             dengan
                             menggunakan bahasa Swift mulai dari Swift 1 hingga Swift 4 dan Objective-C yang populer digunakan
                             saat ini.
                         </div>
                     </div>
                     <div class="col-md-4">
                         <div class="layanan-kami">
                             <h3 class="title">Pengembangan Aplikasi Android</h3>
                             <br />
                             <picture>
                                <source srcset="assets/img/img-mobileapps/webp/android.webp" type="image/webp"> 
                                <img loading="lazy" alt="Pengembangan Aplikasi Android" src="assets/img/img-mobileapps/android.png"  class="img-responsive center-block" />
                            </picture> 
                              <br />
                             Berbagai macam aplikasi Android native berbasis Java, C++, Kotlin, Basic, & Corona/LUA mulai dari
                             yang sederhana, multi-bahasa, hingga dengan kompleksitas yang tinggi telah kami hasilkan.
                         </div>
                     </div>
                     <div class="col-md-4">
                         <div class="layanan-kami">
                             <h3 class="title">Pengembangan Aplikasi Hybrid</h3>
                             <br />
                             <picture>
                            <source srcset="assets/img/img-mobileapps/webp/hybrid.webp" type="image/webp"> 
                            <img loading="lazy" alt="Pengembangan Aplikasi Hybrid" src="assets/img/img-mobileapps/hybrid.png" class="img-responsive center-block"  />
                        </picture><br />
                             Jika Anda ingin memiliki dua aplikasi untuk Android dan iOS sekaligus dalam satu waktu kami juga
                             dapat memberikan layanan pembuatan berbasis hybrid dengan mengimplementasikan berbagai teknologi
                             seperti Ionic, Adobe PhoneGap, Apache Cordova, Xamarin, AngularJS, dan sebagainya.
                         </div>
                     </div>
                 </div>
                 <div class="hidden-xs hidden-sm"><br /></div>
                 <div class="row">
                     <div class="col-md-4">
                         <div class="layanan-kami">
                             <h3 class="title">Desain UI/UX Aplikasi Mobile</h3>
                             <br />
                             <picture>
                                <source srcset="assets/img/img-mobileapps/webp/ux.webp" type="image/webp"> 
                                <img loading="lazy" alt="Desain UI/UX Aplikasi Mobile" src="assets/img/img-mobileapps/ux.png" class="img-responsive center-block" />
                            </picture> 
                            <br />
                             Semua aplikasi mobile kami dikembangkan dengan estetika desain yang sesuai dengan fungsinya.
                             Dengan
                             standar desain yang tinggi, kami memastikan pelanggan akan menyukai interaksi berkelanjutan.
                             Selain
                             itu, penerapan desain responsif yang kami lakukan juga memberikan pengalaman maksimal untuk
                             pengguna.
                         </div>
                     </div>
                     <div class="col-md-4">
                         <div class="layanan-kami">
                             <h3 class="title">Pengembangan CMS / API</h3>
                             <br />
                             <picture>
                                <source srcset="assets/img/img-mobileapps/webp/cms.webp" type="image/webp"> 
                                <img loading="lazy" alt="Pengembangan CMS / API" src="assets/img/img-mobileapps/cms.png" class="img-responsive center-block"/>
                            </picture> 
                            <br />
                             Untuk mendukung pengembangan aplikasi mobile kami juga menyediakan layanan pembuatan CMS dan API
                             dalam berbagai platform, khususnya PHP.
                         </div>
                     </div>
                     <div class="col-md-4">
                         <div class="layanan-kami">
                             <h3 class="title">Progressive Web App</h3>
                             <br />
                             <picture>
                                <source srcset="assets/img/img-mobileapps/webp/pwa.webp" type="image/webp"> 
                                <img loading="lazy" alt="Pengembangan CMS / API" src="assets/img/img-mobileapps/pwa.png" class="img-responsive center-block" >
                            </picture>  <br />
                             Kami menyediakan layanan pengembangan Progressive Web App (PWA) untuk memberikan nilai tambah
                             pada
                             website Anda sehingga dapat diakses seperti aplikasi mobile, yang memiliki beragam keunggulan dan
                             dapat mempermudah Anda dalam memuaskan pengguna, meningkatkan interaksi, dan menambah jumlah
                             konversi.
                         </div>
                     </div>
                 </div>
                 <br /><br />
             </div>
         </section>

         <section class="portofolio" id="portfolio-section">
             <div class="container__">
                 <div class="row">
                     <div class="col-md-5">
                         <h2 class="font-28">Klien / Portofolio</h2>
                         <br />
                         <div>Kami memiliki pengalaman bekerja sama dengan klien dari berbagai sektor industri dan telah membantu
                             menghasilkan aplikasi mobile yang mampu memecahkan masalah perusahaan, meningkatkan penjualan, dan
                             menjaga relasi pelanggan.
                         </div>
                         <br /><br />
                     </div>
                     <div class="col-md-7">
                         <div class="portfolio-slider">
                         <div>
                                <div class="row">
                                    <div class="col-sm-5">
                                    <picture>
                                        <source srcset="assets/img/img-mobileapps/webp/jba-bike-inspection-app-1.webp" type="image/webp"> 
                                        <img loading="lazy" alt="JBA Bike Inspection Apps" class="img-responsive center-block" src="assets/img/img-mobileapps/jba-bike-inspection-app-1.png">
                                    </picture>
                                       
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="caption-portfolio">
                                            <div class="arrow-left"></div>
                                            <h2 class="font-28">Kategori Otomotif:</h2><br />
                                            <div>
                                                <!-- Application that helps international spa managers to improve services and
                                                relationships with customers. -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="row">
                                    <div class="col-sm-5"> 
                                    <picture>
                                        <source srcset="assets/img/img-mobileapps/webp/weeo-hino-connect-2.webp" type="image/webp"> 
                                        <img loading="lazy" alt="Weeo Hino Apps" class="img-responsive center-block" src="assets/img/img-mobileapps/weeo-hino-connect-2.png">
                                    </picture>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="caption-portfolio">
                                            <div class="arrow-left"></div>
                                            <h2 class="font-28">Kategori Otomotif:</h2><br />
                                            <div>
                                                <!-- Application that helps international spa managers to improve services and
                                                relationships with customers. -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="row">
                                    <div class="col-sm-5"> 
                                    <picture>
                                        <source srcset="assets/img/img-mobileapps/webp/weeo-testing-app-1.webp" type="image/webp"> 
                                        <img loading="lazy" alt="Weeo Testing Apps" class="img-responsive center-block" src="assets/img/img-mobileapps/weeo-testing-app-1.jpg">
                                    </picture>    
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="caption-portfolio">
                                            <div class="arrow-left"></div>
                                            <h2 class="font-28">Kategori Otomotif:</h2><br />
                                            <div>
                                                <!-- Application that helps international spa managers to improve services and
                                                relationships with customers. -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="row">
                                    <div class="col-sm-5"> 
                                    <picture>
                                        <source srcset="assets/img/img-mobileapps/webp/wantjp1.webp" type="image/webp"> 
                                        <img loading="lazy" alt="Weeo Hino Apps" class="img-responsive center-block" src="assets/img/img-mobileapps/wantjp1.png">
                                    </picture>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="caption-portfolio">
                                            <div class="arrow-left"></div>
                                            <h2 class="font-28">Kategori E-Commerce:</h2><br />
                                            <div>
                                                <!-- Application that helps international spa managers to improve services and
                                                relationships with customers. -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div>
                                 <div class="row">
                                     <div class="col-sm-5"> 
                                        <picture>
                                            <source srcset="assets/img/img-mobileapps/webp/sunlife.webp" type="image/webp"> 
                                            <img loading="lazy" alt="Sunlife Apps" class="img-responsive center-block" src="assets/img/img-mobileapps/sunlife.png">
                                        </picture>
                                     </div>
                                     <div class="col-sm-7">
                                         <div class="caption-portfolio">
                                             <div class="arrow-left"></div>
                                             <h2 class="font-28">Kategori Finansial:</h2><br />
                                             <div>
                                                 Aplikasi yang membantu pelanggan mendapatkan informasi seputar polis asuransi dan
                                                 berinteraksi dengan agen untuk salah satu asuransi terbesar di Indonesia.
                                                 Aplikasi ini dikembangkan menggunakan teknologi: Ionic Framework, AngularJS,
                                                 HTML5, dan CSS3.
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div>
                                 <div class="row">
                                     <div class="col-sm-5"> 
                                        <picture>
                                            <source srcset="assets/img/img-mobileapps/webp/frangipani.webp" type="image/webp"> 
                                            <img loading="lazy"alt="Frangipani" class="img-responsive center-block"  src="assets/img/img-mobileapps/frangipani.png" >
                                        </picture>
                                     </div>
                                     <div class="col-sm-7">
                                         <div class="caption-portfolio">
                                             <div class="arrow-left"></div>
                                             <h2 class="font-28">Kategori Jasa:</h2><br />
                                             <div>
                                                 Aplikasi yang membantu pengelola spa internasional untuk meningkatkan layanan dan
                                                 relasi dengan pelanggan. Aplikasi ini dikembangkan menggunakan teknologi Java
                                                 pada Android serta Laravel Lument sebagai pendukung API.
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div>
                                 <div class="row">
                                     <div class="col-sm-5"> 
                                        <picture>
                                            <source srcset="assets/img/img-mobileapps/webp/otomart.webp" type="image/webp"> 
                                            <img loading="lazy"alt="Otomart Apps" class="img-responsive center-block"  src="assets/img/img-mobileapps/otomart.png" >
                                        </picture>
                                     </div>
                                     <div class="col-sm-7">
                                         <div class="caption-portfolio">
                                             <div class="arrow-left"></div>
                                             <h2 class="font-28">Kategori Otomotif:</h2><br />
                                             <div>
                                                 Aplikasi yang membantu dealer mengelola iklan mobil pada salah satu portal mobil
                                                 bekas terbesar di Indonesia. Aplikasi ini dikembangkan menggunakan teknologi Java
                                                 untuk Android dan Swift untuk iOS serta CakePHP sebagai pendukung API.
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </section>

         <section class="bg-grey">
             <div class="container__">
                 <div class="row">
                     <div class="col-lg-12">
                         <h2 class="font-28 text-center">Cara Kerja LOGIQUE</h2>
                         <br />
                         <p class="text-center">
                             Baik untuk proyek B2C, B2B, startup, atau solusi operasional perusahaan, pertama-tama, kami akan
                             meluangkan waktu untuk memahami bisnis, produk dan kebutuhan pengguna. Cara dan hasil kerja kami
                             sangat disukai oleh pengguna dan klien karena mampu menciptakan aplikasi yang optimal dan memberi
                             nilai tambah dari segi bisnis.
                         </p>
                     </div>
                 </div>
                 <br /><br />
                 <div class="row">
                     <div class="col-md-5ths">
                         <div class="contain-img"> 
                                <picture>
                                    <source srcset="assets/img/img-mobileapps/webp/cara-kerja1.webp" type="image/webp"> 
                                    <img loading="lazy"alt="Perencanaan" class="img-responsive center-block"  src="assets/img/img-mobileapps/cara-kerja1.png" >
                                </picture>    
                             <div class="text-center title">Perencanaan</div>
                         </div>
                         <p>
                             Diawal proyek kami akan berdiskusi dengan Anda dan memastikan bahwa semua kebutuhan perusahaan,
                             layanan, atau pengguna telah masuk ke dalam cakupan aplikasi. Kami akan memberikan rancangan konsep
                             berupa wireframe sebagai hasil akhir.
                         </p>
                     </div>
                     <div class="col-md-5ths">
                         <div class="contain-img">
                                <picture>
                                    <source srcset="assets/img/img-mobileapps/webp/cara-kerja2.webp" type="image/webp"> 
                                    <img loading="lazy" alt="Design" class="img-responsive center-block"  src="assets/img/img-mobileapps/cara-kerja2.png" >
                                </picture>   
                             <div class="text-center title">Desain</div>
                         </div>
                         <p>
                             Dari konsep yang telah dihasilkan, desainer kami akan mulai membuat desain halaman. Kami dapat
                             memberikan beberapa opsi untuk desain halaman utama yang bisa Anda pilih. Desain yang cocok akan kami
                             revisi lebih lanjut dan kami akan melanjutkan desain halaman lainnya.
                         </p>
                     </div>
                     <div class="col-md-5ths">
                         <div class="contain-img">
                            <picture>
                                <source srcset="assets/img/img-mobileapps/webp/cara-kerja3.webp" type="image/webp"> 
                                <img loading="lazy" alt="Pengembangan" class="img-responsive center-block"  src="assets/img/img-mobileapps/cara-kerja3.png" >
                            </picture>   
                             <div class="text-center title">Pengemba<br class="hidden-lg hidden-sm hidden-xs">ngan</div>
                         </div>
                         <p>
                             Berdasarkan konsep secara fungsional tim teknis kami akan mulai mengembangkan aplikasi mobile yang
                             dapat berfungsi dengan baik sesuai dengan standar pengembangan dan keamanan aplikasi yang ada.
                         </p>
                     </div>
                     <div class="col-md-5ths">
                         <div class="contain-img">
                            <picture>
                                <source srcset="assets/img/img-mobileapps/webp/cara-kerja4.webp" type="image/webp"> 
                                <img loading="lazy" alt="Testing" class="img-responsive center-block"  src="assets/img/img-mobileapps/cara-kerja4.png" >
                            </picture>  
                             <div class="text-center title">Testing</div>
                         </div>
                         <p>
                             Tim QA kami akan memastikan bahwa fitur yang dikembangkan oleh tim teknis sudah berjalan sebagaimana
                             mestinya sehingga Anda tidak perlu khawatir.
                         </p>
                     </div>
                     <div class="col-md-5ths">
                         <div class="contain-img">
                            <picture>
                                <source srcset="assets/img/img-mobileapps/webp/cara-kerja5.webp" type="image/webp"> 
                                <img loading="lazy" alt="Peluncuran Applikasi" class="img-responsive center-block"  src="assets/img/img-mobileapps/cara-kerja5.png" >
                            </picture>
                             <div class="text-center title">Peluncuran Aplikasi</div>
                         </div>
                         <p>
                             Selamat! Setelah semua proses dilalui, aplikasi Android atau iOS Anda siap untuk diluncurkan pada App
                             Store atau Google Play Store.
                         </p>
                     </div>
                 </div>
             </div>
         </section>
         <!--<div class="slider-mobile">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<img src="assets/img/img-mobileapps/device.png" class="device hidden-xs"/>
						<img src="assets/img/img-mobileapps/device-m.png" class="device visible-xs"/>
						<div class="slider-app">
						  <div><img src="assets/img/img-mobileapps/sunlife.png" class="img-responsive center-block"/></div>
						  <div><img src="assets/img/img-mobileapps/frangipani.png" class="img-responsive center-block"/></div>
						  <div><img src="assets/img/img-mobileapps/otomart.png" class="img-responsive center-block"/></div>
						  <div><img src="assets/img/img-mobileapps/otomart.png" class="img-responsive center-block"/></div>
						</div>		
					</div>
				</div>
			</div>
		</div>-->
         <section class="div-form">
             <div class="container__">
                 <div class="row">
                     <div class="col-md-offset-2 col-md-8">
                         Hubungi kami untuk mendapatkan <b>penawaran</b> terbaik
                         <br />
                         <?php if(isset($msg))
						{
						echo $msg;
						} 
						?>
                         <form id="contact-form-mobile" class="contactform-mobile" role="form" name='myForm'
                             onsubmit='return validateForm()' action='<?php echo $formproc->GetSelfScript(); ?>' method='post'
                             accept-charset='UTF-8'>
                             <input type='hidden' name='submitted' id='submitted' value='1' />
                             <input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>'
                                 value='<?php echo $formproc->GetFormIDInputValue(); ?>' />
                             <fieldset>
                                 <div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
                             </fieldset>
                             <div class="form-group">
                                 <div class="row">
                                     <div class="col-md-12">
                                         <input type="text" name="name" aria-label="Name" placeholder="Nama Anda"
                                             class="form-control name-input"
                                             value='<?php echo $formproc->SafeDisplay('name') ?>' />
                                     </div>
                                 </div>
                             </div>
                             <div class="form-group">
                                 <div class="row">
                                     <div class="col-md-6">
                                         <input type="email" name="email" aria-label="Email" placeholder="Alamat Email"
                                             class="form-control" value='<?php echo $formproc->SafeDisplay('email') ?>' />
                                     </div>
                                     <div class="col-md-6">
                                         <input type="number" name="phone" aria-label="Phone" placeholder="Nomor Telepon"
                                             class="form-control" value='<?php echo $formproc->SafeDisplay('phone') ?>' />
                                     </div>
                                 </div>
                             </div>
                             <div class="form-group">
                                 <div class="row">
                                     <div class="col-md-12">
                                         <textarea class="form-control" placeholder="Pertanyaan" name="message"
                                             aria-label="Message"><?php echo $formproc->SafeDisplay('message') ?></textarea>
                                     </div>
                                 </div>
                             </div>
                             <div class="form-group">
                                 <div class="row">
                                     <div class="col-md-6">
                                         <div class="sr-only">Recaptcha</div>
                                         <div class="g-recaptcha" data-sitekey="6LcuHywUAAAAACj__hCefsBCkoIC2ExM2Sur4cCp"></div>
                                     </div>
                                     <div class="col-md-6">
                                         <button type="submit" class="pull-right btn btn-submit">Kirim</button>
                                     </div>
                                 </div>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
         </section> 
         <section class="buat-sekarang">
             <div class="container__">
                 <div class="row row-center-md">
                     <div class="col-md-6 font20">
                         Memiliki pertanyaan dan perlu informasi lebih lanjut ?
                         <div class="hidden-lg hidden-md"><br /></div>
                     </div>
                     <div class="col-md-6">
                         <a href="/hubungi-kami.php" target="_blank" class="btn btn-buat-sekarang">CARI SOLUSI</a>
                     </div>
                 </div>
             </div>
         </section>
     </div>
    </div>
     <?php include '../footer.php' ?>
     <link href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css" rel="stylesheet" type="text/css" /> 
     <script   src="assets/js/jquery.matchHeight.js"></script>
     <script defer src='https://www.google.com/recaptcha/api.js'></script>
     <script  src="/js/slick.min.js"></script>
     <script  src='assets/js/modernizr-custom.js'></script>
 <?php /*    <script>
     (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
     (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
     m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
     })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

     ga('create', 'UA-105878648-1', 'auto');
     ga('send', 'pageview');
     </script>
     <!-- Twitter universal website tag code -->
     <script>
     !function(e,t,n,s,u,a){e.twq||(s=e.twq=function(){s.exe?s.exe.apply(s,arguments):s.queue.push(arguments);
     },s.version='1.1',s.queue=[],u=t.createElement(n),u.async=!0,u.src='//static.ads-twitter.com/uwt.js',
     a=t.getElementsByTagName(n)[0],a.parentNode.insertBefore(u,a))}(window,document,'script');
     // Insert Twitter Pixel ID and Standard Event data below
      twq('init','o0xru');
      twq('track','PageView');
     </script>
     */ ?>
     <script type="text/javascript">
     var html = '<html>'; 
        var result = html.replace(/>\s+|\s+</g, function(m) {
            return m.trim();
        });
    $( document ).ready(function() {
     $(function() {
         $('.div-help').matchHeight();
         $('.layanan-kami').matchHeight();
     });
     collapsed = expanded.replace(/(<(pre|script|style|textarea)[^]+?<\/\2)|(^|>)\s+|\s+(?=<|$)/g, "$1$3");
    });
     $( document ).ready(function() {
        $('.portfolio-slider').slick({
            dots: true,
            infinite: true,
            speed: 500,
            fade: true,
            arrows: false,
            autoplay: true,
            cssEase: 'linear'
        });
    });
     </script>
 </body>

 </html>