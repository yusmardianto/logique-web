 <?php
require_once("form/fgcontact_nippo.php");

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
         content="Nippo merupakan sistem laporan kerja berbasis web dari LOGIQUE yang mampu membantu HR dan manager dalam menilai kinerja para karyawan. Dengan sistem ini, Anda dapat dengan mudah melakukan seleksi, monitor, penilaian, dan evaluasi kinerja harian karyawan Anda.">
     <meta name="keywords"
         content="Evaluasi kinerja, Manajemen kinerja, manajemen kerja, laporan kerja, laporan kerja harian, kerja partime, kerja remote, karyawan swasta, karyawan kontrak, laporan kinerja, laporan kinerja karyawan, sistem web, sistem informasi, Nippo">
     <meta name="author" content="PT LOGIQUE DIGITAL INDONESIA">
     <meta property="og:title" content="Laporan Kerja, Evaluasi Penilaian Kinerja Karyawan | Nippo | LOGIQUE">
     <meta property="og:type" content="website">
     <meta property="og:site_name" content="Logique">
     <meta property="og:url" content="https://www.logique.co.id/produk/nippo.php">
     <meta property="og:image" content="https://www.logique.co.id/img/ogimg/product.png"> 
     <meta property="og:description"
         content="Nippo merupakan sistem laporan kerja berbasis web dari LOGIQUE yang mampu membantu HR dan manager dalam menilai kinerja para karyawan. Dengan sistem ini, Anda dapat dengan mudah melakukan seleksi, monitor, penilaian, dan evaluasi kinerja harian karyawan Anda.">
     <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
     <title>Laporan Kerja, Evaluasi Penilaian Kinerja Karyawan | Nippo | LOGIQUE</title>
     <link rel="stylesheet" href="/css/bootstrap.min.css">
     <link href="/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
     <link rel="stylesheet" href="/css/style.css">
     <link rel="stylesheet" href="css/style_nippo.css">
     <style type="text/css">
     @font-face {
         font-family: HelveticaThin;
         src: url(font/HelveticaThin.ttf);
     }

     @font-face {
         font-family: HelveticaBold;
         src: url(font/helveticabold.ttf);
     }

     @font-face {
         font-family: HelveticaNeue;
         src: url(font/helvetica.ttf);
     }

     @font-face {
         font-family: Allerta;
         src: url(font/allerta_medium.ttf);
     }

     @font-face {
         font-family: Avenir;
         src: url(font/avenirbook.ttf);
     }
     </style>
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
    <!-- Twitter universal website tag code -->
    <script>
        ! function(e, t, n, s, u, a) {
        e.twq || (s = e.twq = function() {
            s.exe ? s.exe.apply(s, arguments) : s.queue.push(arguments);
        }, s.version = '1.1', s.queue = [], u = t.createElement(n), u.async = !0, u.src =
        '//static.ads-twitter.com/uwt.js',
        a = t.getElementsByTagName(n)[0], a.parentNode.insertBefore(u, a))
        }(window, document, 'script');
    // Insert Twitter Pixel ID and Standard Event data below
    twq('init', 'o0xru');
    twq('track', 'PageView');
    </script>
     <!-- End Twitter universal website tag code -->
 </head>

 <body class="wrapper"  style="overflow: hidden;">
     <style>
     .logique-nav {
         left: 0;
     }

     .container__ {
         padding-top: 0;
         padding-bottom: 0;
     }

     @media only screen and (max-width: 500px) {
         .container__ {
             padding: 2.5em 0;
         }
         .row-fix-2 {
             padding: 0 2em;
         }
     }
     </style>
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
                     <div class="text-center">
                         <a href="/layanan.php">
                             <div class="img-services"></div>
                             Layanan
                         </a>
                     </div>
                     <div class="text-center active">
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

     <!-- HEADER -->
     <div class="container-fluid">
         <div class="row lang-logo--update-design">
             <div class="container">
                 <div class="row">
                     <div class="col-sm-offset-1 col-sm-11">
                         <div class="container">
                             <a href="/en/"><img src="/img/logo.png" alt="Jasa Pembuatan Website Logique Digital Indonesia"
                                     class="img-responsive logo--update-design" /></a>
                             <ul class="list-inline">
                                 <li><a href="/en/product/nippo.php">EN</a></li>
                                 <li class="active"><a href="#">ID</a></li>
                                 <li><a href="/jp/product/nippo.php">JP</a></li>
                             </ul>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- END HEADER -->

     <div class="content-wrapper__">
         <div class="div-one">
             <section class="--top">
                 <div class="container__" style="padding:0; padding-top: 1em;">
                     <div class="row">
                         <div class="col-sm-12">
                             <ol class="breadcrumb breadcrumb--update-design" itemscope
                                 itemtype="http://schema.org/BreadcrumbList">
                                 <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item"
                                         href="/index.php"><span itemprop="name">Beranda</span></a>
                                     <meta itemprop="position" content="1" />
                                 </li>
                                 <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item"
                                         href="/produk.php"><span itemprop="name">&nbsp;Produk</span></a>
                                     <meta itemprop="position" content="2" />
                                 </li>
                                 <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a
                                         itemprop="item"><span itemprop="name">&nbsp;Nippo</span></a>
                                     <meta itemprop="position" content="3" />
                                 </li>
                             </ol>
                         </div>
                     </div>
                 </div>
             </section>
             <div class="container__">
                 <div class="row" style="margin-right:0;margin-left:0;">
                     <div class="col-md-12 text-center p-top-25" style=" padding-top: 15%; ">
                         <img src="img/nippo/LogoNippo.png" alt="nippo" class="fade-in logo m-logo">
                         <h1 class="SISTEM-LAPORAN-KERJA fade-in">SISTEM LAPORAN KERJA KARYAWAN <br>YANG TRANSPARAN DAN FLEKSIBEL
                         </h1>
                     </div>
                 </div>
             </div>
         </div>

         <div class="Mask">
             <div class="container__">
                 <div class="Rectangle-2">
                     <span class="APA-ITU">APA ITU</span>
                 </div>
                 <div class="col-md-11 hidden-xs hidden-sm lg-1">
                     <span class="NIPPO-SYSTEM">NIPPO SYSTEM</span>
                     <span class="layer">?</span>
                 </div>
                 <section class="hidden-xs hidden-sm">
                     <!-- For Desktop -->
                     <div class="col-md-push-3 col-md-8 col-md-pull-1">
                         <p class="Nippo-adalah-aplikas"><b>Nippo</b> adalah aplikasi berbasis web yang dapat membantu para
                             manajer
                             dalam memantau produktivitas dan manajemen kerja stafnya. Aplikasi ini merupakan solusi tepat bagi
                             perusahaan untuk mengetahui <b>manajemen kerja</b> karyawan secara detail.<br><br>
                             Dengan Nippo, perusahaan dapat mengetahui laporan harian kerja karyawan secara komprehensif sehingga
                             manajer dapat menggunakannya sebagai bahan pertimbangan untuk melakukan <b>evaluasi kinerja</b> para
                             karyawan.</p>
                     </div>
                 </section>
                 <section class="hidden-md hidden-lg">
                     <!-- For Mobile -->
                     <div class="col-md-12">
                         <br>
                         <span class="NIPPO-SYSTEM">NIPPO SYSTEM ?</span>
                         <p class="Nippo-adalah-aplikas"><b>Nippo</b> adalah aplikasi berbasis web yang dapat membantu para
                             manajer
                             dalam memantau produktivitas dan manajemen kerja stafnya. Aplikasi ini merupakan solusi tepat bagi
                             perusahaan untuk mengetahui <b>manajemen kerja</b> karyawan secara detail.<br><br>
                             Dengan Nippo, perusahaan dapat mengetahui laporan harian kerja karyawan secara komprehensif sehingga
                             manajer dapat menggunakannya sebagai bahan pertimbangan untuk melakukan <b>evaluasi kinerja</b> para
                             karyawan.</p>
                     </div>
                 </section>
             </div>
         </div>

         <div class="Rectangle-3">
             <div class="container__">
                 <div class="col-md-12 text-center" style="padding: 45px 0">
                     <span class="Kenapa-Harus-Menggun">Manfaat Menggunakan Nippo</span><br>
                     <img src="img/nippo/LogoNippo-kecil.png" alt="Logo Nippo" style="padding: 10px">
                 </div>
                 <div class="col-lg-3 col-md-6 text-center manfaat__item">
                     <img src="img/nippo/kenapa-1.png" alt="Manfaat Nippo">
                     <div class="Dapat-diakses-melalu">Dapat diakses melalui desktop maupun mobile secara responsif</div>
                 </div>
                 <div class="col-lg-3 col-md-6 text-center manfaat__item">
                     <img src="img/nippo/kenapa-2.png" alt="Manfaat Nippo">
                     <div class="Dapat-diakses-melalu">Memiliki user-interface yang sederhana sehingga mudah untuk dipahami</div>
                 </div>
                 <div class="col-lg-3 col-md-6 text-center manfaat__item">
                     <img src="img/nippo/kenapa-3.png" alt="Manfaat Nippo">
                     <div class="Dapat-diakses-melalu">Membantu manajer dalam menentukan performa/kinerja para staf</div>
                 </div>
                 <div class="col-lg-3 col-md-6 text-center manfaat__item">
                     <img src="img/nippo/kenapa-4.png" alt="Manfaat Nippo">
                     <div class="Dapat-diakses-melalu">Anda dapat mengetahui pengeluaran projek berdasarkan jam kerja serta
                         mengalkulasikan total jam
                         kerja pengerjaan suatu projek.</div>
                 </div>
             </div>
         </div>

         <div class="OPSA3E0">
             <div class="container__">
                 <div class="Rectangle-2-Copy">
                     <span class="Masalah-yang-sering">Masalah yang Sering Dialami Perusahaan</span>
                 </div>
                 <section class="hidden-xs hidden-sm">
                     <!-- For Desktop -->
                     <div class="col-md-12" style=" padding-top: 7em; ">
                         <div class="col-md-6 text-right">
                             <div class="col-md-10"><span class="Evaluasi-kinerja-sel">Sulit untuk mengkalkulasikan total jam
                                     pengerjaan
                                     suatu projek</span></div>
                             <div class="col-md-2" style="margin-top:-5px;"><img src="img/nippo/checked.png"
                                     alt="Masalah perusahaan" width="77px" height="77px"></div>
                         </div>
                         <div class="col-md-6 text-left">
                             <div class="col-md-2" style="margin-top:-5px;"><img src="img/nippo/checked.png"
                                     alt="Masalah perusahaan" width="77px" height="77px"></div>
                             <div class="col-md-10"><span class="Evaluasi-kinerja-sel">Evaluasi kinerja seluruh karyawan yang
                                     menghabiskan cukup banyak waktu</span></div>
                         </div>
                     </div>
                     <div class="col-md-12" style=" padding-top: 2em; ">
                         <div class="col-md-6 text-right">
                             <div class="col-md-10"><span class="Evaluasi-kinerja-sel">Sulit untuk memantau manajemen kerja
                                     karyawan
                                     dan
                                     perkembangan projek</span></div>
                             <div class="col-md-2" style="margin-top:-5px;"><img src="img/nippo/checked.png"
                                     alt="Masalah perusahaan" width="77px" height="77px"></div>
                         </div>
                         <div class="col-md-6 text-left">
                             <div class="col-md-2" style="margin-top:-5px;"><img src="img/nippo/checked.png"
                                     alt="Masalah perusahaan" width="77px" height="77px"></div>
                             <div class="col-md-10"><span class="Evaluasi-kinerja-sel">Laporan pekerjaan harian yang dibuat
                                     karyawan
                                     tidak spesifik dan kurang jelas</span></div>
                         </div>
                     </div>
                 </section>
                 <section class="hidden-md hidden-lg">
                     <!-- For Mobile -->
                     <div class="col-md-12" style=" padding-top: 2em; ">
                         <div class="col-md-6">
                             <div class="col-xs-3 text-center"><img src="img/nippo/checked.png" alt="Masalah Perusahaan"
                                     style="padding: 10px;height: 50px"></div>
                             <div class="col-xs-9"><span class="Evaluasi-kinerja-sel">Sulit untuk mengkalkulasikan total jam
                                     pengerjaan
                                     suatu projek</span></div>
                         </div>
                         <div class="col-md-6">
                             <div class="col-xs-3 text-center"><img src="img/nippo/checked.png" alt="Masalah Perusahaan"
                                     style="padding: 10px;height: 50px"></div>
                             <div class="col-xs-9"><span class="Evaluasi-kinerja-sel">Evaluasi kinerja seluruh karyawan yang
                                     menghabiskan cukup banyak waktu</span></div>
                         </div>
                     </div>
                     <div class="col-md-12">
                         <div class="col-md-6">
                             <div class="col-xs-3 text-center"><img src="img/nippo/checked.png" alt="Masalah Perusahaan"
                                     style="padding: 10px;height: 50px"></div>
                             <div class="col-xs-9"><span class="Evaluasi-kinerja-sel">Sulit untuk memantau manajemen kerja
                                     karyawan
                                     dan
                                     perkembangan suatu projek</span></div>
                         </div>
                         <div class="col-md-6">
                             <div class="col-xs-3 text-center"><img src="img/nippo/checked.png" alt="Masalah Perusahaan"
                                     style="padding: 10px;height: 50px"></div>
                             <div class="col-xs-9"><span class="Evaluasi-kinerja-sel">Laporan pekerjaan harian yang dibuat
                                     karyawan
                                     tidak spesifik dan kurang jelas</span></div>
                         </div>
                         <div class="clearfix"></div>
                     </div>
                     <br><br>
                 </section>
             </div>
         </div>

         <div class="laptop">
             <div class="Rectangle-2-Copy-2">
                 <span class="Fitur">FITUR</span>
             </div>
             <div class="row row-fix">
                 <div class="col-md-offset-2 col-md-8 text-center">
                     <div class="col-md-push-2 col-md-10 div-fitur">
                         <span class="NIPPO-SYSTEM-Copy">NIPPO SYSTEM</span>
                     </div>
                 </div>
             </div>
             <div class="row row-fix-3">
                 <div class="col-md-offset-2 col-md-8 text-center">
                     <div class="col-md-2 text-center">
                         <img src="img/nippo/fitur-1.png" alt="Fitur">
                     </div>
                     <div class="col-md-4 text-left" style="padding:0;">
                         <p class="Basis-Data-Karyawan">Manajemen Karyawan</p>
                         <p class="NIPPO-system-menyedi">Perusahaan dapat membuat serta menambahkan informasi secara lengkap
                             mengenai
                             organisasi atau perusahaan. Dengan menggunakan Nippo, Anda dapat membuat informasi mengenai karyawan,
                             supervisor, administrator, dan lain lain.</p>
                     </div>
                     <div class="col-md-2 text-center">
                         <img src="img/nippo/fitur-4.png" alt="Fitur">
                     </div>
                     <div class="col-md-4 text-left" style="padding:0;">
                         <p class="Basis-Data-Karyawan" style="font-size: 17px">Pengeluaran Projek Berdasarkan Jam Kerja</p>
                         <p class="NIPPO-system-menyedi">Perusahaan dapat mengalkulasikan total jam kerja dari pengerjaan suatu
                             projek. Dengan begitu, perusahaan dapat menganalisis suatu projek yang terlalu banyak memakan waktu.
                             Hasil
                             analisis dapat digunakan sebagai dasar pengambilan keputusan untuk kemajuan dan perkembangan suatu
                             projek.
                         </p>
                     </div>
                 </div>
             </div>
             <div class="row row-fix-3">
                 <div class="col-md-offset-2 col-md-8 text-center">
                     <div class="col-md-2 text-center">
                         <img src="img/nippo/fitur-2.png" alt="Fitur">
                     </div>
                     <div class="col-md-4 text-left" style="padding:0;">
                         <p class="Basis-Data-Karyawan">Tag Person</p>
                         <p class="NIPPO-system-menyedi">Karyawan dapat menambahkan karyawan lain dalam laporan harian kerjanya
                             jika
                             mereka bekerja bersama melalui fitur Tag Person. Dengan begitu, perusahaan dapat mengetahui apabila
                             terdapat pengisian laporan kerja yang cukup berbeda oleh kedua karyawan tersebut dengan membandingkan
                             kedua
                             laporan kerja mereka.</p>
                     </div>
                     <div class="col-md-2 text-center">
                         <img src="img/nippo/fitur-3.png" alt="Fitur">
                     </div>
                     <div class="col-md-4 text-left" style="padding:0;">
                         <p class="Basis-Data-Karyawan">Evaluasi Karyawan</p>
                         <p class="NIPPO-system-menyedi">Dengan menggunakan Nippo, Anda dapat dengan mudah melakukan evaluasi
                             kinerja
                             para karyawan setiap hari, bulan, ataupun tahun.</p>
                     </div>
                 </div>
             </div>
             <div class="row row-fix-3">
                 <div class="col-md-offset-2 col-md-8 text-center">
                     <div class="col-md-2 text-center">
                         <img src="img/nippo/fitur-5.png" alt="Fitur">
                     </div>
                     <div class="col-md-4 text-left" style="padding:0;">
                         <p class="Basis-Data-Karyawan">Project Management</p>
                         <p class="NIPPO-system-menyedi">Perusahaan dapat menambahkan batas waktu pekerjaan berdasarkan hari dan
                             jumlah jam kerja melalui fitur Project Master. Selain itu, perusahaan dapat menambahkan informasi
                             projek,
                             serta tipe dan spefikasi pekerjaan melalui fitur ini.</p>
                     </div>
                     <div class="col-md-2 text-center">
                         <img src="img/nippo/fitur-6.png" alt="Fitur">
                     </div>
                     <div class="col-md-4 text-left" style="padding:0;">
                         <p class="Basis-Data-Karyawan">Comment Management</p>
                         <p class="NIPPO-system-menyedi">Dengan menggunakan Nippo, Anda dapat melihat komentar karyawan lain dan
                             meninggalkan likes ataupun comments pada suatu laporan kerja.</p>
                     </div>
                 </div>
             </div>
         </div>

         <div class="Mask-Copy">
             <div class="container__">
                 <div class="row" style=" margin-right: 0; ">
                     <div class="col-md-4 col-xs-12 text-left p-t-9">
                         <span class="Keuntungan-Perusahaa">KEUNTUNGAN<br>
                             <span class="text-style-1">Perusahaan</span>
                             <div class="Rectangle-6"></div>
                         </span>
                     </div>
                     <div class="col-md-4 col-xs-12 text-center">
                         <div class="OH1E290">
                             <img src="img/nippo/keuntungan-1.png" alt="San Francisco">
                             <div class="Rectangle">Mempermudah manajer dan direksi untuk memantau perkembangan suatu projek.
                             </div>
                         </div>
                     </div>
                     <div class="col-md-4 col-xs-12 text-center">
                         <div class="OH1E290">
                             <img src="img/nippo/keuntungan-2.png" alt="San Francisco">
                             <div class="Rectangle">Mempermudah manajer dalam melakukan <b>evaluasi kinerja</b> para staf</div>
                         </div>
                     </div>
                 </div>
                 <div class="row m-top-0" style=" margin-right: 0; margin-top: 4em">
                     <div class="col-md-4 col-xs-12 text-center">
                         <div class="OH1E290">
                             <img src="img/nippo/keuntungan-3.png" alt="San Francisco">
                             <div class="Rectangle"><b>Manajemen kinerja</b> seluruh karyawan dapat diketahui oleh para manajer
                                 secara
                                 transparan & fleksibel</div>
                         </div>
                     </div>
                     <div class="col-md-4 col-xs-12 text-center">
                         <div class="OH1E290">
                             <img src="img/nippo/keuntungan-4.png" alt="San Francisco">
                             <div class="Rectangle">Mempererat komunikasi internal. Meninggalkan like dan comment pada suatu
                                 laporan
                                 kerja dapat menumbuhkan rasa penghargaan dan apresiasi pada diri karyawan atas pekerjaannya.
                             </div>
                         </div>
                     </div>
                     <div class="col-md-4 col-xs-12 text-center">
                         <div class="OH1E290">
                             <img src="img/nippo/keuntungan-5.png" alt="San Francisco">
                             <div class="Rectangle">Walaupun perusahaan memiliki pekerja remote, Anda dapat tetap memantau kinerja
                                 dan
                                 membangun komunikasi yang baik dengan mereka.</div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

         <div class="Rectangle-7">
             <div class="container__">
                 <div class="row">
                     <div class="col-md-12">
                         <div class="Rectangle-2-Copy-4">
                             <span class="Pertanyaan-Yang-Seri">Pertanyaan Yang Sering Diajukan</span>
                         </div>
                         <img src="img/nippo/question.png" alt="Pertanyaan" class="question">
                     </div>
                 </div>

                 <div class="row row-fix-2">
                     <div class="col-md-offset-1 col-md-10">
                         <div class="text-center">
                            <a class="font-16" href="https://drive.google.com/file/d/1YKjRKuNe2IChWBjZYg2jPCnBqgTWawVZ/view" target="_blank"><b>Download user manual (ID)</b></a>
                         </div>
                         <br>
                         <ol>
                             <li class="-Bagaimana-cara-ke">
                                 <h3>Bagaimana cara kerja Nippo?</h3>
                                 <p class="Nippo-merupakan-sist">Nippo merupakan sistem yang dibuat untuk mempermudah karyawan
                                     dalam
                                     melakukan laporan manajemen kerja harian. Selain itu, sistem ini juga dibuat untuk membantu
                                     manajerial
                                     dalam memantau <b>manajemen kinerja</b> harian karyawan.</p>
                             </li>
                             <li class="-Bagaimana-cara-ke">
                                 <h3>Bagaimana Nippo dapat membantu manager dan staf HR?</h3>
                                 <p class="Nippo-merupakan-sist">Dengan fitur-fitur yang ada pada Nippo, manajer atau supervisor
                                     dapat
                                     memantau manajemen kinerja dan produktivitas harian karyawan</p>
                             </li>
                             <li class="-Bagaimana-cara-ke">
                                 <h3>Sepertinya saya akan membutuhkan panduan yang lebih jelas dalam menggunakan Nippo. Apa saya
                                     akan
                                     mendapatkannya?</h3>
                                 <p class="Nippo-merupakan-sist">Jangan khawatir. Kami menyediakan panduan penggunaannya untuk
                                     Anda.
                                     Jika
                                     Anda masih menemukan kesulitan, Anda bisa langsung menghubungi kami.</p>
                             </li>
                             <li class="-Bagaimana-cara-ke">
                                 <h3>Kami tertarik menggunakan Nippo untuk perusahaan kami. Bagaimana kami bisa mendapatkannya?
                                 </h3>
                                 <p class="Nippo-merupakan-sist">Anda bisa langsung menghubungi kami melalui salah satu kontak
                                     yang
                                     kami
                                     sediakan. Kami siap melayani Anda dengan senang hati.</p>
                             </li>
                             <li class="-Bagaimana-cara-ke">
                                 <h3>Apa perbedaan laman kelola untuk staf dengan manajerial?</h3>
                                 <p class="Nippo-merupakan-sist">Pada halaman manajerial terdapat fungsi evaluasi sehingga manajer
                                     dapat
                                     memberikan skor evaluasi kepada stafnya. Sedangkan untuk halaman staf hanya terdapat fungsi
                                     laporan
                                     harian saja.</p>
                             </li>
                             <li class="-Bagaimana-cara-ke">
                                 <h3>Apakah Nippo bisa diakses oleh browser apa pun?</h3>
                                 <p class="Nippo-merupakan-sist">Ya, Nippo dapat diakses menggunakan browser apapun, termasuk oleh
                                     browser
                                     di perangkat seluler. Jika Anda mengalami masalah dan membutuhkan bantuan, jangan ragu untuk
                                     menghubungi Kami.</p>
                             </li>
                             <li class="-Bagaimana-cara-ke">
                                 <h3>Apakah Nippo hanya diperuntukkan bagi perusahaan jenis tertentu?</h3>
                                 <p class="Nippo-merupakan-sist">Tidak. Nippo dirancang untuk memenuhi kebutuhan dari jenis
                                     perusahaan
                                     apa
                                     pun.</p>
                             </li>
                             <li class="-Bagaimana-cara-ke">
                                 <h3>Apakah Nippo dapat diakses dari telepon seluler?</h3>
                                 <p class="Nippo-merupakan-sist">Ya, Nippo dapat berfungsi dengan baik pada platform mobile.</p>
                             </li>
                         </ol>
                     </div>
                 </div>
             </div>
         </div>

         <div class="Rectangle-8 text-center">
             <div class="container__">
                 <div class="row" style=" margin: 0;padding: 4em 0 2em 0">
                     <div class="col-lg-4">
                         <p class="KONTAK-KAMI p-l-25">KONTAK<br class="hidden-xs hidden-sm hidden-md"> KAMI</p><br class="show-xs show-sm show-md">
                     </div>
                     <div class="col-lg-7">
                         <?php if(isset($msg))
            {
            echo $msg;
            }
            ?>
                         <form role="form" name='myForm' onsubmit='return validateForm()'
                             action='<?php echo $formproc->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
                             <input type='hidden' name='submitted' id='submitted' value='1' />
                             <input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>'
                                 value='<?php echo $formproc->GetFormIDInputValue(); ?>' />
                             <div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
                             <div class="row">
                                 <div class="col-sm-6 form-group">
                                     <input type="text" class="form-control Rectangle-9" name="name" aria-label="Name"
                                         placeholder="NAMA" value='<?php echo $formproc->SafeDisplay('name') ?>'>
                                 </div>
                                 <div class="col-sm-6 form-group">
                                     <input type="text" class="form-control Rectangle-9" name="company" aria-label="Company"
                                         placeholder="NAMA PERUSAHAAN" value='<?php echo $formproc->SafeDisplay('company') ?>'>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-sm-6 form-group">
                                     <input type="email" class="form-control Rectangle-9" name="email" aria-label="Email"
                                         placeholder="EMAIL" value='<?php echo $formproc->SafeDisplay('email') ?>'>
                                 </div>
                                 <div class="col-sm-6 form-group">
                                     <input type="number" class="form-control Rectangle-9" name="phone" aria-label="Phone"
                                         placeholder="NO HP / TELEPON" value='<?php echo $formproc->SafeDisplay('phone') ?>'>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-sm-12 form-group">
                                     <textarea class="form-control Rectangle-9" name="message" aria-label="Message" rows="8"
                                         placeholder="PESAN"
                                         style="width: 100%;padding:  1em;"><?php echo $formproc->SafeDisplay('message') ?></textarea>
                                 </div>
                             </div>

                             <div class="row">
                                 <div class="col-md-6 text-left">
                                     <div class="g-recaptcha" data-sitekey="6LcuHywUAAAAACj__hCefsBCkoIC2ExM2Sur4cCp"></div>
                                     <div class="clearfix"></div>
                                 </div>
                                 <div class="col-md-6 text-right">
                                     <button type="submit" href="#" class="Rectangle-10 btn-coba"><span
                                             class="KIRIM">KIRIM</span></button>
                                 </div>
                             </div>
                         </form> <!-- end form contact -->
                     </div>
                 </div>
             </div>
         </div>

         <div class="Rectangle-11" style="height:auto!important;padding:15px 0">
             <div class="container__">
                 <div class="row" style="margin: 0">
                     <div class="col-md-12 text-center">
                         <div class="col-md-12">
                             <img src="img/nippo/logo-nippo-footer.png" alt="Logo Nippo Footer" style="padding-top: 49.2px">
                             <p class="Nippo-adalah-aplikas2">Nippo adalah aplikasi berbasis web yang dapat membantu para manajer
                                 dalam
                                 memantau produktivitas kerja stafnya. Aplikasi ini merupakan solusi tepat bagi perusahaan untuk
                                 mengetahui kinerja karyawan secara detail.</p>
                         </div>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-sm-12 text-center">
                         <br />
                         <p style="color:#9b9b9b;font-family: Avenir;font-size: 18px;">Other Products:</p>
                         <p>
                             <a target="_blank" href="/produk/sugoi-saiyo.php"
                                 style="color:#fff;font-family: Avenir;font-size: 18px;">SUGOI-SAIYO</a> |
                             <a href="https://dokodemo-kerja.com" target="_blank" rel="noreferrer"
                                 style="color:#fff;font-family: Avenir;font-size: 18px;">DOKODEMO KERJA</a></p>
                     </div>
                 </div>
                 <div class="row text-center" style="margin: 0">
                     <div class="col-md-4" style="margin-top: 3em">
                         <img src="img/nippo/placeholder.png" alt="Location">
                         <p class="Nippo-adalah-aplikas2">Ad Premier Building 19th Floor Jalan Tb. Simatupang No. 5 Ragunan, Ps.
                             Minggu, Jakarta Selatan, Indonesia 12550</p>
                     </div>
                     <div class="col-md-4" style="margin-top: 3em">
                         <img src="img/nippo/email.png" alt="Email">
                         <p class="Nippo-adalah-aplikas2">info@logique.co.id</p>
                     </div>
                     <div class="col-md-4" style="margin-top: 3em">
                         <img src="img/nippo/phone-call.png" alt="Phone Number">
                         <p class="Nippo-adalah-aplikas2">+62(21) 2270 8935 / 36</p>
                     </div>
                 </div>
             </div>
         </div>

         <div class="Rectangle-11-Copy">
             <div class="container__" style="padding: 0">
                 <div class="row text-center" style="margin: 0;padding-top: 1em">
                     <div class="col-md-12">
                         <a href="https://www.logique.co.id/" target="_blank" rel="noreferrer" aria-label="Logo Logique"><img
                                 src="img/nippo/logo-Logique.png" alt="Logo Logique" class="FA-Logique"></a>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <?php include '../footer.php'; ?>

     <script src="/js/bootstrap.min.js"></script>
     <script src='https://www.google.com/recaptcha/api.js'></script>

 </body>

 </html>