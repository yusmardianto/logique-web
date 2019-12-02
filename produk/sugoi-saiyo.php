 <?php 
require_once("form/fgcontact_sugoi.php");

$formproc = new FGContactForm();

//1. Add your email address here.
//You can add more than one receipients.
$formproc->AddRecipient(['info@sugoi-saiyo.co.id']); //<<---Put your email address here

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
         content="Sugoi Saiyo merupakan sistem rekrutmen karyawan berbasis web dari LOGIQUE yang dapat memudahkan HR dalam melakukan seleksi dan evaluasi calon karyawan, sehingga perusahaan bisa mendapatkan kandidat yang tepat dan sesuai dengan waktu yang singkat.">
     <meta name="keywords"
         content="lowongan kerja, rekrutmen, seleksi sdm, hr tools, proses rekrutmen, perekrutan, metode rekrutmen, rekrutmen online, rekrutmen pegawai, logique digital Indonesia, sugoi saiyo">
     <meta name="author" content="PT LOGIQUE DIGITAL INDONESIA ">
     <meta property="og:title" content="Sistem Proses Rekrutmen Karyawan | Produk Digital | LOGIQUE">
     <meta property="og:type" content="website">
     <meta property="og:site_name" content="Logique">
     <meta property="og:url" content="https://www.logique.co.id/produk/sugoi-saiyo.php">
     <meta property="og:image" content="https://www.logique.co.id/img/og-image.png">
     <meta property="og:description"
         content="Sugoi Saiyo merupakan sistem rekrutmen karyawan berbasis web dari LOGIQUE yang dapat memudahkan HR dalam melakukan seleksi dan evaluasi calon karyawan, sehingga perusahaan bisa mendapatkan kandidat yang tepat dan sesuai dengan waktu yang singkat.">
     <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
     <title>Sistem Proses Rekrutmen Karyawan | Produk Digital | LOGIQUE</title>
     <link href="/css/bootstrap.min.css" rel="stylesheet">
     <link href="../css/style.css" rel="stylesheet">
     <link href="css/style_sugoisaiyo.css" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
     <link href="/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
     <script>
     (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
     (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
     m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
     })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

     ga('create', 'UA-105878648-1', 'auto');
     ga('send', 'pageview');

     // 
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
     <!-- End Twitter universal website tag code -->
 </head>

 <body class="wrapper">
     <style>
     body {
         padding-left: 0;
     }

     .container__ {
         padding-top: 0;
         padding-bottom: 0;
     }

     .breadcrumb__wrapper {
         text-align: left;
     }

     .breadcrumb--update-design {
         margin-top: 0;
         margin-bottom: 2em;
         padding: 0;
         padding-left: 15px;
     }

     .breadcrumb--update-design li.active a {
         color: #f5f5f5;
     }

     .content-wrapper__ .--top {
         margin-top: 0;
     }

     @media only screen and (max-width: 414.98px) {
         .content-wrapper__ .--top {
             margin-top: 2.3em !important;
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
             <div class="logique-nav">
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
                         <a href="/karir.php">
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
                             <ul class="list-inline">
                                 <li><a href="/en/product/sugoi-saiyo.php">EN</a></li>
                                 <li class="active"><a href="#">ID</a></li>
                                 <li><a href="/jp/product/sugoi-saiyo.php">JP</a></li>
                             </ul>
                             <a href="/en/"><img src="/img/logo.png" alt="Jasa Pembuatan Website Logique Digital Indonesia"
                                     class="img-responsive logo--update-design" /></a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- END HEADER -->

     <div class="content-wrapper__">
         <header>
             <div class="breadcrumb__wrapper">
                 <div class="container__" style="padding:0">
                     <div class="row">
                         <div class="col-sm-12">
                             <ol class="breadcrumb breadcrumb--update-design" itemscope
                                 itemtype="http://schema.org/BreadcrumbList">
                                 <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item"
                                         href="/"><span itemprop="name">Home</span></a>
                                     <meta itemprop="position" content="1" />
                                 </li>
                                 <li class="item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a
                                         itemprop="item" href="/produk.php"><span itemprop="name">&nbsp;Produk</span></a>
                                     <meta itemprop="position" content="2" />
                                 </li>
                                 <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a
                                         itemprop="item"><span itemprop="name">&nbsp;Sugoi Saiyo</span></a>
                                     <meta itemprop="position" content="3" />
                                 </li>
                             </ol>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="container__">
                 <div class="row">
                     <div class="col-md-offset-1 col-md-10">
                         <img src="img/sugoi-saiyo/logo.png" alt="Sugoi Saiyo Logo" class="img-responsive center-block">
                         <h1>Sistem Perekrutan Karyawan</h1>
                         <div class="text-center desc-first">
                             Pernahkah Anda kesulitan dalam menyaring dan berkomunikasi dengan para pencari kerja? Sekarang hal
                             itu
                             sudah tidak Anda temui lagi. Dengan Sugoi Saiyo, <b>proses rekrutmen</b> dapat dilakukan semudah
                             memilih
                             menu makanan.
                         </div>
                     </div>
                 </div>
             </div>
         </header>

         <section class="about">
             <div class="container__">
                 <a href="/"><img src="img/sugoi-saiyo/logo_logique.png" alt="Sugoi Saiyo Logo"
                         style="position:absolute;top: 0;"></a>
                 <h2>Apa Itu Sugoi Saiyo?</h2>
                 <p>SUGOI SAIYO adalah sistem IT untuk para staf departemen sumber daya manusia di Indonesia dalam merekrut calon
                     karyawan. Banyak kendala yang biasa mereka hadapi dalam proses <b>seleksi SDM</b>, seperti menyaring terlalu
                     banyak CV yang tidak memenuhi persyaratan, kesulitan dalam melakukan komunikasi dengan pelamar, banyaknya
                     pelamar
                     yang tidak menghadiri <i>interview</i>, dan lain-lain. Hal ini bisa membuang terlalu banyak waktu dan tenaga.
                 </p>
                 <h3>SUGOI SAIYO merupakan solusi dari masalah tersebut.</h3>
                 <p>Selain membantu dan mengurangi tingkat stres para staf dari divisi HR, Sugoi Saiyo juga memberikan kenyamanan
                     bagi
                     para pelamar. Mereka dapat dengan mudah mengelola seluruh proses lamaran mereka dari pelamaran hingga
                     konfirmasi
                     status, test, sampai surat penawaran yang berasal dari perusahaan melalui fitur MY PAGE..</p>
             </div>
         </section>

         <section class="obstacle">
             <div class="container__">
                 <div class="row">
                     <div class="col-md-4 obstacle-title">
                         <h2>Kesulitan dalam proses rekrutmen di Indonesia / Tantangan bagi Perekrut</h2>
                         <a href="#contact" class="smooth btn-ss">Lakukan Uji Coba Sekarang</a>
                     </div>
                     <div class="col-md-8">
                         <div class="row">
                             <div class="col-md-6 col-sm-6">
                                 <img src="img/sugoi-saiyo/kendala-1.png" alt="Kendala" class="img-responsive center-block">
                                 <p>Mendapatkan banyak lamaran kerja tapi tidak memenuhi persyaratan yang dibutuhkan oleh
                                     perusahaan,
                                     sehingga membuat tahap <b>seleksi SDM</b> menjadi tidak efisien.</p>
                             </div>
                             <div class="col-md-6 col-sm-6">
                                 <img src="img/sugoi-saiyo/kendala-2.png" alt="Kendala" class="img-responsive center-block">
                                 <p>Staf HR tidak dapat menghubungi pelamar untuk memberikan informasi terbaru mengenai statusnya,
                                     begitu pun sebaliknya, pelamar tidak mengetahui informasi terbaru mengenai status lamaran
                                     yang
                                     telah dikirimkan.</p>
                             </div>
                             <div class="col-md-6 col-sm-6">
                                 <img src="img/sugoi-saiyo/kendala-3.png" alt="Kendala" class="img-responsive center-block">
                                 <p>Pelamar tidak datang <i>interview</i> atau datang terlambat dari waktu <i>interview</i> yang
                                     telah
                                     ditentukan.</p>
                             </div>
                             <div class="col-md-6 col-sm-6">
                                 <img src="img/sugoi-saiyo/kendala-4.png" alt="Kendala" class="img-responsive center-block">
                                 <p>Staf HR harus mendapatkan kandidat yang sesuai dengan kebutuhan perusahaan dalam waktu yang
                                     singkat.</p>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </section>

         <div class="line-title">Fitur Sugoi Saiyo</div>
         <section class="feature-company">
             <div class="container__">
                 <div class="row">
                     <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                         <img src="img/sugoi-saiyo/fitur-p.png" alt="Fitur Perusahaan" class="img-feature">
                         <hr>
                         <h2>Untuk Perusahaan</h2>
                     </div>
                     <div class="col-md-3 col-sm-6 col-xs-12">
                         <div class="feature f-company">
                             <div class="number">1</div>
                             <div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-p-1.png" alt="Fitur Perusahaan"></div>
                             <p>Sistem Sugoi Saiyo mampu menampilkan daftar CV yang telah diterima sehingga dapat dikelola dengan
                                 sangat mudah.</p>
                         </div>
                     </div>
                     <div class="col-md-3 col-sm-6 col-xs-12">
                         <div class="feature f-company">
                             <div class="number">2</div>
                             <div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-p-2.png" alt="Fitur Perusahaan"></div>
                             <p>Perusahaan dapat membuat jadwal <i>interview</i> dengan para kandidat secara fleksibel dan
                                 transparan.
                             </p>
                         </div>
                     </div>
                     <div class="col-md-3 col-sm-6 col-xs-12">
                         <div class="feature f-company">
                             <div class="number">3</div>
                             <div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-p-3.png" alt="Fitur Perusahaan"></div>
                             <p>Membuat laporan digital dari hasil <i>interview</i> dengan masing-masing kandidat.</p>
                         </div>
                     </div>
                     <div class="col-md-3 col-sm-6 col-xs-12">
                         <div class="feature f-company">
                             <div class="number">4</div>
                             <div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-p-4.png" alt="Fitur Perusahaan"></div>
                             <p>Mengirim dan menerima dokumen yang berkaitan dengan proses seleksi pada kandidat, seperti
                                 <i>technical
                                     test, offering letter</i>, dan lain-lain dapat dilakukan dengan mudah, semudah mengirimkan
                                 email.
                             </p>
                         </div>
                     </div>
                     <div class="col-md-3 col-sm-6 col-xs-12">
                         <div class="feature f-company">
                             <div class="number">5</div>
                             <div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-p-5.png" alt="Fitur Perusahaan"></div>
                             <p>Dapat melakukan input, edit dan delete data serta informasi mengenai posisi atau pekerjaan yang
                                 tersedia dengan sangat mudah oleh manajemen sumber daya.</p>
                         </div>
                     </div>
                     <div class="col-md-3 col-sm-6 col-xs-12">
                         <div class="feature f-company">
                             <div class="number">6</div>
                             <div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-p-6.png" alt="Fitur Perusahaan"></div>
                             <p>Memberikan skor pada setiap <b>proses rekrutmen</b> dari masing-masing kandidat secara transparan
                                 sehingga para kandidat mampu mengetahui hasilnya secara real time kapan pun dan dimana pun.</p>
                         </div>
                     </div>
                     <div class="col-md-3 col-sm-6 col-xs-12">
                         <div class="feature f-company">
                             <div class="number">7</div>
                             <div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-p-7.png" alt="Fitur Perusahaan"></div>
                             <p>Mengelola proses <b>seleksi SDM</b> di setiap tahap hanya dengan satu klik
                                 (<i>process/reject</i>).
                             </p>
                         </div>
                     </div>
                     <div class="col-md-3 col-sm-6 col-xs-12">
                         <div class="feature f-company">
                             <div class="number">8</div>
                             <div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-p-8.png" alt="Fitur Perusahaan"></div>
                             <p>Menampilkan total setiap tahap <b>seleksi SDM</b> yang sedang diproses, mulai dari <i>screening
                                     CV</i>, jadwal <i>interview</i>, hingga total status <i>offering letter</i> dalam satu laman
                                 <i>dashboard</i>.</p>
                         </div>
                     </div>
                     <div class="col-md-3 col-sm-6 col-xs-12">
                         <div class="feature f-company">
                             <div class="number">9</div>
                             <div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-p-9.png" alt="Fitur Perusahaan"></div>
                             <p>Mengelola daftar <i>person in charge user</i> untuk masing-masing posisi dengan sangat mudah.</p>
                         </div>
                     </div>
                     <div class="col-md-3 col-sm-6 col-xs-12">
                         <div class="feature f-company">
                             <div class="number">10</div>
                             <div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-p-10.png" alt="Fitur Perusahaan"></div>
                             <p>Membuat <i>offering letter</i> untuk kandidat secara otomatis.</p>
                         </div>
                     </div>
                     <div class="col-md-3 col-sm-6 col-xs-12">
                         <div class="feature f-company">
                             <div class="number">11</div>
                             <div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-p-11.png" alt="Fitur Perusahaan"></div>
                             <p>Memberikan notifikasi via <i>email</i> untuk setiap perkembangan tahap rekrutmen dari kandidat.
                             </p>
                         </div>
                     </div>
                 </div>
             </div>
         </section>

         <section class="feature-candidate">
             <div class="container__">
                 <div class="row">
                     <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                         <img src="img/sugoi-saiyo/fitur-k.png" alt="Fitur Perusahaan" class="img-feature">
                         <hr>
                         <h2>Untuk Kandidat</h2>
                     </div>
                     <div class="col-md-3 col-sm-6 col-xs-12">
                         <div class="feature f-candidate">
                             <div class="number">1</div>
                             <div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-k-1.png" alt="Fitur Perusahaan"></div>
                             <p>Melakukan registrasi dan mengirim dokumen yang berkaitan dengan proses <b>seleksi SDM</b>, seperti
                                 CV,
                                 foto, sertifikat, hingga <i>technical test</i> pada posisi yang diinginkan. Semua dilakukan
                                 secara
                                 digital tanpa perlu repot-repot membawa semua itu ke tempat seleksi.</p>
                         </div>
                     </div>
                     <div class="col-md-3 col-sm-6 col-xs-12">
                         <div class="feature f-candidate">
                             <div class="number">2</div>
                             <div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-k-2.png" alt="Fitur Perusahaan"></div>
                             <p>Menampilkan informasi waktu tahap <b>proses rekrutmen</b> yang dilalui atau akan dilakukan
                                 kandidat,
                                 mulai dari <i>screening CV</i> sampai <i>interview</i> secara transparan dan real time.</p>
                         </div>
                     </div>
                     <div class="col-md-3 col-sm-6 col-xs-12">
                         <div class="feature f-candidate">
                             <div class="number">3</div>
                             <div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-k-3.png" alt="Fitur Perusahaan"></div>
                             <p>Sistem Sugoi Saiyo akan menampilkan jadwal <i>interview</i> yang akan dilaksanakan oleh kandidat,
                                 baik
                                 <i>interview</i> dengan HR, maupun dengan <i>person in charge</i> setiap posisi (manajer) dan
                                 direktur.</p>
                         </div>
                     </div>
                     <div class="col-md-6 col-sm-6 col-xs-12">
                         <div class="feature f-candidate-2">
                             <div class="number">4</div>
                             <div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-k-4.png" alt="Fitur Perusahaan"></div>
                             <p>Menampilkan status lolos atau tidaknya kandidat dari setiap tahap <b>proses rekrutmen</b> dalam
                                 satu
                                 tampilan <i>dashboard</i>.</p>
                         </div>
                     </div>
                     <div class="col-md-6 col-sm-6 col-xs-12">
                         <div class="feature f-candidate-2">
                             <div class="number">5</div>
                             <div class="img-feature-o"><img src="img/sugoi-saiyo/fitur-k-5.png" alt="Fitur Perusahaan"></div>
                             <p>Memberikan notifikasi via <i>email</i> akan hasil setiap tahap seleksi dan konfirmasi jadwal
                                 <i>interview</i>.</p>
                         </div>
                     </div>
                 </div>
             </div>
         </section>

         <div class="line-title">Keuntungan Menggunakan Sugoi Saiyo</div>
         <section class="benefit-company">
             <div class="container__">
                 <div class="row">
                     <div class="col-md-12">
                         <h2>Bagi Perusahaan</h2>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-md-9 col-md-offset-3 col-sm-12">
                         <div class="row">
                             <div class="col-md-4 col-sm-6 col-xs-12">
                                 <div class="benefit">
                                     Dapat memiliki standar penilaian kandidat berdasarkan <i>scoring</i> setiap tahap <b>seleksi
                                         SDM</b>.
                                 </div>
                             </div>
                             <div class="col-md-4 col-sm-6 col-xs-12">
                                 <div class="benefit">
                                     Mudah mengatur jadwal <i>interview</i> dengan kandidat, baik dengan staf HR maupun dengan
                                     manajer.
                                 </div>
                             </div>
                             <div class="col-md-4 col-sm-6 col-xs-12">
                                 <div class="benefit">
                                     Referensi kandidat yang diterima menjadi lebih banyak dan variatif.
                                 </div>
                             </div>
                             <div class="col-md-4 col-sm-6 col-xs-12">
                                 <div class="benefit">
                                     Mudah untuk mengontrol, mengawasi, dan melakukan filtrasi kandidat.
                                 </div>
                             </div>
                             <div class="col-md-4 col-sm-6 col-xs-12">
                                 <div class="benefit">
                                     Dapat menjamin data kandidat tersimpan dengan aman (<i>secure</i>) dalam sistem.
                                 </div>
                             </div>
                             <div class="col-md-4 col-sm-6 col-xs-12">
                                 <div class="benefit">
                                     Informasi mengenai kandidat ditampilkan secara akurat dan mendetil.
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </section>

         <section class="benefit-candidate">
             <div class="container__">
                 <div class="row">
                     <div class="col-md-12">
                         <h2>Bagi Kandidat</h2>
                     </div>
                 </div>
                 <div class="row m-50">
                     <div class="col-md-3 col-sm-6 col-xs-12">
                         <div class="benefit">
                             Mengikuti tes secara <i>online</i> tanpa harus datang ke perusahaan yang dituju.
                         </div>
                     </div>
                     <div class="col-md-3 col-sm-6 col-xs-12">
                         <div class="benefit">
                             Mengetahui status dari setiap tahap <b>proses rekrutmen</b> secara langsung.
                         </div>
                     </div>
                     <div class="col-md-3 col-sm-6 col-xs-12">
                         <div class="benefit">
                             Mempermudah proses lamaran kerja hanya dengan langkah registrasi dan mengisi formulir secara
                             <i>online</i>.
                         </div>
                     </div>
                     <div class="col-md-3 col-sm-6 col-xs-12">
                         <div class="benefit">
                             Menghemat biaya dan waktu dengan proses yang singkat dan sederhana.
                         </div>
                     </div>
                 </div>
             </div>
         </section>
         <div>
             <img src="img/sugoi-saiyo/bg-middle.png" alt="Sugoi Saiyo" class="img-fluid">
         </div>

         <section class="why-ss">
             <div class="container__">
                 <h2>MENGAPA HARUS MENGGUNAKAN SUGOI SAIYO?</h2>
                 <div class="row m-50">
                     <div class="col-md-4 col-sm-12 mb-1em">
                         <div class="col-md-12 col-sm-3 img-why-ss justify-content-center"><img src="img/sugoi-saiyo/kenapa-1.png"
                                 alt="Kenapa Sugoi Saiyo"></div>
                         <p class="col-md-12 col-sm-8 col-sm-offset-1">Mudah diakses dan digunakan, baik oleh staf HR maupun oleh
                             kandidat</p>
                     </div>
                     <div class="col-md-4 col-sm-12 mb-1em">
                         <div class="col-md-12 col-sm-3 img-why-ss justify-content-center"><img src="img/sugoi-saiyo/kenapa-2.png"
                                 alt="Kenapa Sugoi Saiyo"></div>
                         <p class="col-md-12 col-sm-8 col-sm-offset-1">Memiliki <i>user interface</i> yang sederhana</p>
                     </div>
                     <div class="col-md-4 col-sm-12 mb-1em">
                         <div class="col-md-12 col-sm-3 img-why-ss justify-content-center"><img src="img/sugoi-saiyo/kenapa-3.png"
                                 alt="Kenapa Sugoi Saiyo"></div>
                         <p class="col-md-12 col-sm-8 col-sm-offset-1">Proses rekrutmen dapat dipantau, mulai dari registrasi
                             kandidat
                             hingga status lolos</p>
                     </div>
                 </div>
             </div>
         </section>

         <section class="qna">
             <div class="container__">
                 <div class="row">
                     <div class="col-md-3">
                         <img src="img/sugoi-saiyo/qna.png" alt="Sugoi Saiyo">
                     </div>
                     <div class="col-md-9">
                         <h2>PERTANYAAN YANG SERING DIAJUKAN</h2>
                     </div>
                 </div>
                 <div class="row m-50">
                     <div class="col-sm-6">
                         <h3>Q. Apakah Sugoi Saiyo merupakan sistem cloud? </h3>
                         <p>
                             Sugoi Saiyo berjalan pada server yang kami kelola sehingga Anda tidak perlu menyiapkan server jenis
                             apapun lagi.
                             Anda dapat langsung menggunakannya setelah menandatangani kontrak. Namun, Anda juga bisa menginstal
                             dan
                             menggunakannya di server Anda sendiri. Silakan menghubungi kami untuk informasi lebih detail.
                         </p>
                         <h3>Q. Bagaimanakah cara user dapat menggunakan Sugoi Saiyo?</h3>
                         <p>
                             Sugoi Saiyo dapat digunakan tanpa masalah melalui browser populer apapun dengan versi terkini,
                             seperti
                             Chrome, Firefox, Safari, dan Edge.
                         </p>
                         <h3>Q. Berapa harga Sugoi Saiyo? Bisakah membeli sistem ini dalam sekali bayar?</h3>
                         <p>
                             Pada dasarnya, kami akan membebankan kepada Anda biaya bulanan tanpa uang muka.
                             Namun, Anda tetap bisa membeli dengan sekali bayar untuk modifikasi dan mengirimkan sistem ke server
                             perusahaan Anda.
                             Untuk pembayaran dengan sistem bulanan, silakan menghubungi kami.
                         </p>
                         <h3>Q. Apakah ada ketentuan kontrak minimum untuk sistem Sugoi Saiyo?</h3>
                         <p>
                             Untuk saat ini tidak ada batasan waktu. Jika Anda menggunakannya tanpa modifikasi, Anda hanya dapat
                             menggunakan selama satu bulan.
                         </p>
                         <h3>Q. Perusahaan apa saja yang bisa menggunakan Sugoi Saiyo?</h3>
                         <p>
                             Sugoi Saiyo dapat digunakan oleh berbagai jenis perusahaan, terutama bagi perusahaan yang ingin
                             merekrut
                             lebih dari 2 atau 3 orang karyawan dalam satu bulan.
                             Jika perusahaan Anda memiliki banyak kantor cabang, Sugoi Saiyo dapat diandalkan untuk mengelola
                             rekrutmen di semua kantor cabang secara bersamaan.
                         </p>
                         <h3>Q. Apakah pada Sugoi Saiyo sudah termasuk tes psikologi?</h3>
                         <p>
                             Sistem kami dapat beroperasi dengan baik dengan tes psikologi eksternal dan menyimpan hasil tes
                             tersebut.
                             Selain itu, Anda juga dapat menggunakan tes psikologi khusus milik Anda sendiri.
                         </p>
                     </div>
                     <div class="col-sm-6">
                         <h3>Q. Bisakah Sugoi Saiyo dikolaborasikan dengan JobStreet?</h3>
                         <p>
                             Kami merekomendasikan agar Anda memposting URL untuk masuk ke dalam Sugoi Saiyo perusahaan Anda di
                             JobStreet.
                             Jika Anda melakukannya, maka Anda tidak perlu lagi mengelolanya melalui sistem JobStreet, karena Anda
                             dapat mengelolanya secara bersamaan hanya melalui Sugoi Saiyo.
                         </p>
                         <h3>Q. Selain mengatur jadwal wawancara, bisakah Sugoi Saiyo melakukan reservasi ruang pertemuan untuk
                             wawancara?</h3>
                         <p>
                             Tentu saja, Sugoi Saiyo dapat beroperasi dengan sistem reservasi jika Anda mau.
                         </p>
                         <h3>Q. Apakah Sugoi Saiyo telah dilengkapi dengan fungsi AI?</h3>
                         <p>
                             Untuk saat ini fungsi AI belum diimplementasikan. Namun, jika Anda meminta, kami dapat melakukannya.
                         </p>
                         <h3>Q. Bisakah saya menerima pemberitahuan jika ada orang yang melamar?</h3>
                         <p>
                             Pengguna atau user yang telah terdaftar sebagai tim perekrut karyawan akan mendapatkan notifikasi
                             atau
                             pemberitahuan melalui email jika ada orang yang mengajukan lamaran kerja.
                         </p>
                         <h3>Q. Apakah ada jumlah batasan untuk memposting pekerjaan yang dibutuhkan, jenis pekerjaan, posisi yang
                             dibutuhkan, dll.?</h3>
                         <p>
                             Tidak ada batasan sama sekali. Anda dapat membuka banyak posisi sekaligus dalam waktu yang bersamaan.
                         </p>
                         <h3>Q. Apakah Sugoi Saiyo hanya diperuntukkan bagi perekrut atau divisi HR perusahaan saja?</h3>
                         <p>
                             Anda bisa membuat pengaturan manajemen yang cukup kompleks, di mana para staf perekrutan karyawan,
                             pewawancara pada setiap departemen, bahkan manajemen dapat menjadi pengguna atau user Sugoi Saiyo.
                             Hal
                             ini bertujuan agar mereka dapat mengetahui proses kemajuan rekrutan mereka, mengelola jadwal
                             wawancara,
                             serta melihat informasi kandidat secara lebih mendetail.
                         </p>
                     </div>
                 </div>
             </div>
         </section>

         <section class="contact" id="contact">
             <div class="container__">
                 <div class="box">
                     <div class="box-title">
                         <h2>Punya pertanyaan dan perlu informasi lebih lanjut ?</h2>
                         <p>Silakan menghubungi kami, jika ada pertanyaan mengenai sistem manajemen rekrutmen, permintaan trial
                             atau
                             percobaan serta pengembangan sistem manajemen rekrutmen atau apapun dari Sugoi Saiyo.</p>
                     </div>

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
                             <div class="col-md-6">
                                 <div class="form-group">
                                     <input type="text" class="form-control" placeholder="Nama" name="name" aria-label="Name"
                                         value='<?php echo $formproc->SafeDisplay('name') ?>'>
                                 </div>
                                 <div class="form-group">
                                     <input type="number" class="form-control" placeholder="No Ponsel" name="phone"
                                         aria-label="Phone" value='<?php echo $formproc->SafeDisplay('phone') ?>'>
                                 </div>
                                 <div class="form-group">
                                     <input type="text" class="form-control" placeholder="Perusahaan" name="company"
                                         aria-label="Company" value='<?php echo $formproc->SafeDisplay('company') ?>'>
                                 </div>
                                 <div class="form-group">
                                     <input type="email" class="form-control" placeholder="Email" name="email" aria-label="Email"
                                         value='<?php echo $formproc->SafeDisplay('email') ?>'>
                                 </div>
                             </div>
                             <div class="col-md-6">
                                 <div class="form-group">
                                     <textarea name="" id="" cols="30" rows="6" class="form-control" placeholder="Pesan"
                                         name="message"
                                         aria-label="Message"><?php echo $formproc->SafeDisplay('message') ?></textarea>
                                 </div>
                                 <div class="form-group">
                                     <div class="g-recaptcha" data-sitekey="6LcuHywUAAAAACj__hCefsBCkoIC2ExM2Sur4cCp"></div>
                                 </div>
                             </div>
                             <div class="col-md-12 text-center m-50">
                                 <button type="submit" class="btn-ss2">Kirim</button>
                             </div>
                         </div>
                     </form>
                 </div>
             </div>
         </section>
     </div>
     <?php include '../footer.php'; ?>

     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight-min.js"></script>
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

     $('.feature-company .img-feature-o').matchHeight({
         byRow: false
     });
     $('.feature-candidate .img-feature-o').matchHeight({
         byRow: false
     });
     $('.f-company').matchHeight({
         byRow: false
     });
     $('.f-candidate').matchHeight({
         byRow: false
     });
     $('.f-candidate-2').matchHeight({
         byRow: false
     });
     $('.benefit').matchHeight({
         byRow: false
     });
     $('.img-why-ss').matchHeight({
         byRow: false
     });
     </script>
 </body>

 </html>