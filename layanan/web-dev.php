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
 <html lang="id">

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
    
     
    <script type="text/javascript" src="//script.crazyegg.com/pages/scripts/0096/6080.js" async="async"></script>
    <title>Jasa Pembuatan Website | Tahapan Pembuatan Website | LOGIQUE</title>
     <link href="/css/bootstrap.min.css" rel="stylesheet">
     <link href="/css/style.css" rel="stylesheet">
     <link href="assets/css/style-webdev.css" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
     <link href="/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
     <script>
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
     <!-- End Twitter universal website tag code -->
 </head>

 <body>
     <style>
     @media only screen (max-width: 414px) {
         .breadcrumb {
             padding-left: 15px;
         }
     }
     </style>
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
             <div class="row lang-logo--update-design">
                 <div class="container">
                     <div class="row">
                         <div class="col-sm-offset-1 col-sm-11">
                             <div class="container">
                                 <ul class="list-inline">
                                     <li><a href="/en/services/web-dev.php">EN</a></li>
                                     <li class="active"><a href="#">ID</a></li>
                                     <li><a href="/jp/services/web-dev.php">JP</a></li>
                                 </ul>
                                 <a href="/index.php"><img src="/img/logo.png"
                                         alt="Jasa Pembuatan Website Logique Digital Indonesia"
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
                 <div class="container" style="padding:0">
                     <div class="row">
                         <div class="col-sm-12">
                             <ol class="breadcrumb breadcrumb--update-design" itemscope
                                 itemtype="http://schema.org/BreadcrumbList">
                                 <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item"
                                         href="/index.php"><span itemprop="name">Beranda</span></a>
                                     <meta itemprop="position" content="1" />
                                 </li>
                                 <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item"
                                         href="/layanan.php"><span itemprop="name">&nbsp;Layanan</span></a>
                                     <meta itemprop="position" content="2" />
                                 </li>
                                 <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a
                                         itemprop="item"><span itemprop="name">&nbsp;Web Dev</span></a>
                                     <meta itemprop="position" content="3" />
                                 </li>
                             </ol>
                         </div>
                     </div>
                 </div>
             </div>

             <div class="container__">
                 <div class="row">
                     <div id="heading-service-web-dev" class="col-md-offset-1 col-md-11 m-t-2em">
                         <h1 class="text-left">
                             <p>
                                 <span class="c-logique">LOGIQUE Web</span> <span class="hidden-xs"> / Melayani Pembuatan Website
                                 </span> </p>
                             <p>
                                 <span class="underline">Kami Siap Membuat Website Yang Anda Inginkan</span>
                             </p>
                         </h1>
                         <div class="subtitle-header">
                             <p class="p-padding-v-15">
                                 LOGIQUE membuat website yang dapat memberikan banyak manfaat bagi bisnis Anda.
                                 Mulai dari menarik pelanggan, memberikan banyak pengajuan, serta meningkatkan penjualan.
                                 Semua berlangsung secara efisien dan efektif.
                                 Selain itu, situs web yang hebat dan dirancang dengan indah, dapat memberikan kelas kepada
                                 pelanggan
                                 Anda, branding yang lebih tinggi, serta identitas perusahaan yang dibangun dengan lebih baik.
                             </p>
                             <p class="p-padding-v-15">
                                 LOGIQUE yang didirikan oleh seorang pengusaha Jepang, merupakan perusahaan pembuatan situs web
                                 nomor
                                 satu di Jakarta dengan prestasi yang terbaik.
                             </p>
                         </div>
                     </div>
                 </div>
             </div>

         </header>

     </div>

     <div class="container">
         <!-- <div class="row">
             <div class="col-md-12">
                 <a href="/" target="_blank">
                     <div class="logo-header">
                         <img src="assets/img/img-webdev/logo.png" alt="Fitur Perusahaan" class="img-responsive">
                     </div>
                 </a>
             </div>
         </div> -->
         <div class="row">
             <!-- <div style="position:relative">
                 <div class="language-btn">
                     <ul class="list-inline">
                         <li class="active"><a href="#">ID</a></li>
                         <li><a href="/en/services/web-dev.php">EN</a></li>
                         <li><a href="/jp/services/web-dev.php">JP</a></li>
                     </ul>
                 </div>
             </div> -->
             <!-- <ol id="services-breadcrumb" class="breadcrumb breadcrumb-cont" itemscope
                 itemtype="http://schema.org/BreadcrumbList">
                 <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                     <a itemprop="item" href="../index.php">
                         <span itemprop="name">Beranda</span>
                     </a>
                     <meta itemprop="position" content="1" />
                 </li>
                 <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                     <a itemprop="item" href="../layanan.php">
                         <span itemprop="name">Layanan</span>
                     </a>
                     <meta itemprop="position" content="2">
                 </li>
                 <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                     <a itemprop="item" href="#">
                         <span itemprop="name">Web Dev</span>
                     </a>
                     <meta itemprop="position" content="3">
                 </li>
             </ol> -->

         </div>
     </div>

     <section class="about" style="padding-bottom: 0">
         <div class="container">
             <div class="row">
                 <div class="col-md-offset-1 col-md-10">
                     <div class="panel text-center custom-1">
                         <h1><b>Ingin Membuat Website Berkualitas Terbaik. Hubungi LOGIQUE Sekarang!</b></h1>
                         <br>
                         <p class="p-b-20">
                             LOGIQUE telah banyak menciptakan dan mengembangkan lebih dari 200 situs web yang ada di Indonesia
                             dari berbagai bidang, mulai dari organisasi pemerintah hingga lembaga keuangan dengan tingkat
                             keamanan tinggi.
                             Situs web tersebut dibuat berdasarkan permintaan klien yang membutuhkan situs web dengan tingkat
                             kreatif tinggi, pemrograman yang rumit dan berbagai permintaan lainnya.
                             Kami dipercaya oleh para klien kami, karena kami dapat memahami dan mengetahui bagaimana pertumbuhan
                             bisnis di dunia digital akan dapat membawa kesuksesan yang besar namun juga akan menjadi sangat sulit
                             tanpa memiliki sistem web yang tepat.
                             Kami siap memproses permintaan Anda secara cepat dan fleksibel sesuai keinginan Anda.
                         </p>
                         <p class="p-b-20">
                             Sebagai perusahaan pembuat situs web profesional, kami melayani pembuatan situs web dengan kualitas
                             terbaik sesuai dengan kesepakatan harga yang disetujui.
                             Kami mempunyai tim yang terdiri dari pengembang web, desainer serta penulis konten.
                             Total terdapat 40 ahli berpengalaman yang bekerja bersama kami, dimana mereka akan bekerja secara
                             profesional dalam tim yang tidak terlalu besar atau terlalu kecil.
                         </p>
                         <p class="p-b-20">
                             Meskipun kami merupakan perusahaan internasional yang berlokasi di Jakarta, namun kami mempunyai
                             pengetahuan yang luas mengenai cara untuk menghasilkan keuntungan yang tinggi di Indonesia.
                             Jika Anda memerlukan situs web dengan penampilan yang indah dan sistem terbaik, jangan ragu untuk
                             berkonsultasi dengan LOGIQUE kapan pun dan dimana pun Anda inginkan.
                         </p>
                     </div>
                 </div>
             </div>
             <div class="row">
                 <div class="col-md-offset-1 col-md-10">
                     <div class="row">
                         <div class="col-md-4">
                             <div class="new-box min-h">
                                 <h4>Proses Pembuatan Website dengan “One-Stop”</h4>
                                 <p>
                                     Anda butuh website dalam Bahasa Indonesia, Inggris dan Jepang?
                                     LOGIQUE siap membantu Anda untuk membuatnya dalam ketiga bahasa tersebut sekaligus dengan
                                     implementasi SEO.
                                     Kami juga dapat membuat konversi desain atau pun form persetujuan, pemeliharaan website dan
                                     pemasaran digital.
                                 </p>
                             </div>
                         </div>
                         <div class="col-md-4">
                             <div class="new-box min-h">
                                 <h4>Kualitas Terbaik, Teknologi Terbaru dan Tingkat Keamanan Tinggi</h4>
                                 <p>
                                     Kami berpengalaman dalam mengimplementasikan PWA, AMP dan berbagai fungsi yang kompleks untuk
                                     berbagai situs web apa pun.
                                     Website akan langsung segera diaktifkan setelah dilakukan pemeriksaan keamanan oleh para
                                     pakar keamanan website kami sehingga menghasilkan web yang tangguh dengan fungsi yang ringan.
                                 </p>
                             </div>
                         </div>
                         <div class="col-md-4">
                             <div class="new-box min-h">
                                 <h4>Cepat dan Fleksibel</h4>
                                 <p>
                                     Kami terbiasa bekerja dengan cepat, karena kami mengerti betapa berartinya waktu bagi Anda.
                                     Kami bekerja secara fleksibel dan menerima segala bentuk perubahan yang Anda inginkan.
                                     Jika Anda ingin melakukan penyesuaian situs web, kami siap membantu Anda.
                                 </p>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>

     <section class="section-layout web-service-flow">
         <div class="container">
             <div class="row">
                 <div class="col-sm-6 col-md-6 col-lg-4">
                     <div class="analysis-part flow-part">
                         <img src="assets/img/img-webdev/writing.png" alt="Analisis dan Evaluasi">
                         <h3>Analisis dan Evaluasi</h3>
                         <p>
                             Anda sudah punya website dan berkeinginan untuk memperbaikinya? Kami siap untuk melakukan analisis
                             dan mengevaluasi situasi situs web Anda saat ini.
                             Kami akan mengevaluasi mengapa trafik website Anda sangat rendah, atau apakah hal ini berkaitan
                             dengan struktur atau tidak.
                             Tim kami merupakan para ahli dalam menganalisis kinerja website Anda secara keseluruhan dan
                             mencarikan solusi dari permasalahan yang ada.
                         </p>
                     </div>
                 </div>
                 <div class="col-sm-6 col-md-6 col-lg-4">
                     <div class="plan-part flow-part">
                         <img src="assets/img/img-webdev/intelligent.png" alt="Perencanaan">
                         <h3>Perencanaan</h3>
                         <p>
                             Untuk mencapai tujuan yang Anda inginkan dari situs web, kami akan memberikan solusi kepada Anda
                             bagaimana seharusnya situs web Anda, memberikan saran kepada Anda tentang apa yang harus dilakukan
                             dan memberikan beberapa hal yang perlu ditingkatkan agar mendapatkan hasil yang berkepanjangan.
                             Bentuk dukungan pada situs web Anda tentu sedikit berbeda, tergantung dari sistem internal situs web
                             Anda.
                         </p>
                     </div>
                 </div>
                 <div class="col-sm-6 col-md-6 col-lg-4">
                     <div class="seo-part flow-part">
                         <img src="assets/img/img-webdev/analysis.png" alt="SEO / SEM">
                         <h3>SEO / SEM</h3>
                         <p>
                             Hanya dengan menerbitkannya, sebuah website tidak dapat mendapatkan banyak traffic.
                             Para ahli di perusahaan kami sangat mengenal dan memahami langkah-langkah dalam melakukan penerapan
                             SEO di Indonesia sehingga akan membuat situs web Anda dapat terlihat pada halaman pencarian organic
                             ketika kueri yang relevan dengan bisnis Anda dimasukkan ke dalam mesin pencari.
                             Kami juga dapat melakukan strategi SEM untuk meningkatkan trafik secara cepat menggunakan kata kunci
                             yang efektif.
                         </p>
                     </div>
                 </div>
                 <div class="col-sm-6 col-md-6 col-lg-4">
                     <div class="info-part flow-part">
                         <img src="assets/img/img-webdev/ux.png" alt="Peningkatan dan Restrukturisasi">
                         <h3>Peningkatan dan Restrukturisasi</h3>
                         <p>
                             Kami tidak selalu membuat ulang situs web Anda dari awal karena masalah rumit yang ditemukan.
                             Sebab, hal tersebut terkadang membutuhkan banyak pekerjaan serta biaya yang harus dikeluarkan.
                             Untuk kasus seperti ini, kami akan menawarkan kepada Anda solusi terbaik dalam mengatur, mengumpulkan
                             dan meningkatkan situs web sesuai dengan budget Anda serta berapa lama waktu yang Anda inginkan.
                         </p>
                     </div>
                 </div>
                 <div class="col-sm-6 col-md-6 col-lg-4">
                     <div class="multiligual-part flow-part">
                         <img src="assets/img/img-webdev/language.png" alt="Membuat dan Mengoperasikan Website Multi Bahasa">
                         <h3>Membuat dan Mengoperasikan Website Multi Bahasa</h3>
                         <p>
                             Kami dapat membuat dan mengoperasikan situs web dalam Bahasa Indonesia, Bahasa Inggris dan Bahasa
                             Jepang.
                             Kami mengerti dan memahami bahwa konten yang kreatif dan tersegmentasi dengan baik sangat penting
                             bagi situs web untuk menjangkau dan melibatkan banyak kalangan.
                         </p>
                     </div>
                 </div>
                 <div class="col-sm-6 col-md-6 col-lg-4">
                     <div class="sosmed-part flow-part">
                         <img src="assets/img/img-webdev/customer.png" alt="Pengoperasian Media Sosial">
                         <h3>Pengoperasian Media Sosial</h3>
                         <p>
                             Media sosial dapat memberi pengaruh yang sangat kuat dalam meningkatkan keterlibatan para pelanggan
                             Anda.
                             Media sosial juga dapat membantu mendukung trafik pengunjung dari media sosial ke situs web.
                             Kami memberikan layanan dalam mengoperasikan media sosial, seperti Facebook dan Instagram untuk
                             kepentingan bisnis Anda baik dalam Bahasa Indonesia, Bahasa Inggris dan Bahasa Jepang.
                         </p>
                     </div>
                 </div>
                 <div class="col-sm-6 col-md-6 col-lg-4">
                     <div class="design-part flow-part">
                         <img src="assets/img/img-webdev/graphic-design.png" alt="Pembuatan Desain">
                         <h3>Pembuatan Desain</h3>
                         <p>
                             Kami merancang UI yang ramah bagi pengguna serta ramah bagi perubahan sistem yang berasal dari situs
                             web Anda.
                             Tim desain kami akan menyarankan kepada Anda berbagai jenis desain yang berbeda sesuai dengan
                             kebutuhan Anda.
                         </p>
                     </div>
                 </div>
                 <div class="col-sm-6 col-md-6 col-lg-4">
                     <div class="markup-part flow-part">
                         <img src="assets/img/img-webdev/website.png" alt="Markup Coding">
                         <h3>Markup Coding</h3>
                         <p>
                             Anda juga dapat meminta kepada kami hanya melakukan pengodean HTML/ CSS bagi situs web Anda.
                             Tim developer kami akan mengejar ketertinggalan teknologi coding pada situs web Anda dan menggantinya
                             dengan JavaScript dan teknologi coding front-end terbaru.
                         </p>
                     </div>
                 </div>
                 <div class="col-sm-6 col-md-6 col-lg-4">
                     <div class="responsive-part flow-part">
                         <img src="assets/img/img-webdev/devices.png" alt="Dukungan Multi Perangkat">
                         <h3>Dukungan Multi Perangkat</h3>
                         <p>
                             Kami dapat membuat situs yang mampu dioptimalkan dan responsive untuk seluruh jenis perangkat,
                             seperti ponsel, smartphone, dan tablet.
                             Kami telah mempunyai banyak pengalaman untuk membuat situs web yang ramah seluler dan AMP.
                         </p>
                     </div>
                 </div>
                 <div class="col-sm-6 col-md-6 col-lg-4">
                     <div class="programing-part flow-part">
                         <img src="assets/img/img-webdev/programming.png" alt="Fitur Pemrograman Khusus">
                         <h3>Fitur Pemrograman Khusus</h3>
                         <p>
                             Anda dapat meminta fitur pemrograman apapun yang Anda inginkan untuk ditambahkan ke dalam situs web
                             Anda, seperti Parallax motions yang mungkin dapat terhubung dengan JavaScript, HTML5, CSS3 dan
                             lain-lain.
                             Kami akan mengusulkan pengembangan situs web yang menarik para pengguna yang telah disesuaikan dengan
                             kebutuhan Anda.
                         </p>
                     </div>
                 </div>
                 <div class="col-sm-6 col-md-6 col-lg-4">
                     <div class="system-part flow-part">
                         <img src="assets/img/img-webdev/engineering.png" alt="Kontruksi Sistem">
                         <h3>Kontruksi Sistem</h3>
                         <p>
                             Mengembangkan sistem CMS, sistem web dan sistem bisnis yang dibangun dan dioperasikan dengan berbagai
                             sistem melalui kerja sama yang baik dari situs web.
                             Kami ahli dalam mengembangkan situs web melalui kerangka kerja PHP.
                         </p>
                     </div>
                 </div>
                 <div class="col-sm-6 col-md-6 col-lg-4">
                     <div class="apps-part flow-part">
                         <img src="assets/img/img-webdev/smartphone.png" alt="PWA sebagai Aplikasi Seluler">
                         <h3>PWA sebagai Aplikasi Seluler</h3>
                         <p>
                             Kami dapat mengembangkan aplikasi seluler sebagai aplikasi web layaknya sebuah aplikasi asli dengan
                             PWA.
                             Pemberitahuan serta operasi offline juga dapat dilakukan melalui PWA.
                         </p>
                     </div>
                 </div>
             </div>
             <div class="link-page-price-and-portfolio">
                 <a class="link-yellow-white" href="/layanan/webdev-price-range.php">Lihat Harga Produksi dan Pengoperasian
                     Website</a>
                 <a class="link-yellow-white" href="/portofolio.php">Lihat Website Hasil Produksi Kami</a>
             </div>
         </div>
     </section>
     <section class="obstacle" style="padding-top: 20px">
         <div class="container">
             <div class="row">
                 <div class="col-md-offset-1 col-md-7 border-l text-right">
                     <h2 class="text-right">Alur Pembuatan Situs Web di LOGIQUE</h2>
                     <p class="text-right">
                         Pembuatan situs web dari LOGIQUE selalu berfokus pada penyesuaian antara kecepatan dan kualitas.
                         Para ahli dan pekerja profesional kami siap bertanggung jawab terhadap setiap langkah yang dilakukan.
                         Alur pembuatan situs web sangat terstruktur, mulai dari perencanaan dan pengajuan, desain, pengembangan,
                         serta pengoperasian untuk mewujudkan situs web terbaik.
                         Tahapan LOGIQUE untuk membuat sebuah situs web juga dapat bervariasi, tergantung dari jenis proyek
                         (ukuran situs web, kebutuhan CMS, kesulitan dalam pengembangan sistem, dll).
                         Berikut ini adalah alur umum dalam pembuatan situs web di LOGIQUE.
                     </p>
                 </div>
                 <div class="col-md-3 text-center hidden-xs hidden-sm">
                     <a href="/" target="_blank"><img src="assets/img/img-webdev/logo.png" alt="Fitur Perusahaan"
                             class="custom-2"></a>
                 </div>
             </div>
         </div>
     </section>
     <section class="tahap-pemesanan">
         <div class="container">
             <div class="row">
                 <div class="col-md-offset-6 col-md-6">
                     <div class="card">
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
                                 <p>
                                     Tim kami siap untuk menerima pesan Anda kapan saja. Anda juga dapat melakukan pemesanan dan
                                     menjelaskan secara jelas kepada kami mengenai deskripsi awal situs web seperti apa yang Anda
                                     inginkan, mulai dari pembuatan situs web, operasi, konfigurasi CMS, pengembangan sistem web,
                                     dan lain-lain.
                                     Hubungi kami sekarang melalui email ke <a style="color:#333"
                                         href="mailto:info@logique.co.id"><u>info@logique.co.id</u></a> atau melakukan pengisian
                                     formulir pemesanan yang tersedia <a style="color:#333" target="_blank"
                                         href="/hubungi-kami.php"> <u>di sini</u></a>.
                                     Anda juga dapat bertanya kepada kami mengenai berbagai hal yang berkaitan dengan pengembangan
                                     web, mendesain web atau bahkan harganya. Jangan ragu untuk berbicara dengan kami dalam Bahasa
                                     Indonesia, Bahasa Inggris, atau Bahasa Jepang.
                                     Kami akan langsung menghubungi Anda untuk melanjutkan diskusi lebih lanjut.
                                 </p>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <section class="tahap-pemesanan-2">
         <div class="container">
             <div class="row">
                 <div class="col-md-4">
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
                                 <p>
                                     Anda mungkin mempunyai visi dan target yang lebih spesifik, seperti meningkatkan keuntungan
                                     bisnis Anda, citra dan merek Anda, kegiatan IR, perekrutan, dll.
                                     Kami ingin mendengar semuanya dari Anda.
                                     Tidak harus bertemu, namun jika Anda mau, kami dapat menghubungi Anda melalui Skype atau
                                     melalui aplikasi komunikasi lainnya, sehingga kami dapat berbicara lebih lanjut mengenai
                                     bisnis Anda.
                                     Setelah itu, kami akan memberikan beberapa saran yang telah disesuaikan berdasarkan minat
                                     Anda, serta beberapa pendekatan efektif sesuai dengan kebutuhan Anda.
                                 </p>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-4">
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
                                 <p>
                                     Setelah kami memahami segalanya, kami akan langsung mengusulkan situs web seperti apa yang
                                     Anda butuhkan untuk menyelesaikan permasalahan tersebut.
                                     Jika diperlukan, kami juga akan melakukan penelitian, termasuk mengenai pesaing serta
                                     menganalisis tugas pencarian dari situs web yang saat ini.
                                     Bahkan dalam pengajuan proposal, kami menghargai kecepatan dan mengingat bahwa proposal harus
                                     diselesaikan dalam waktu yang cepat.
                                     Dalam proposal, kami juga akan menyediakan layanan opsional, seperti fotografi, videografi
                                     dan pembuatan konten yang diperlukan.
                                     Anda juga dapat berkonsultasi kepada kami jika Anda mempunyai usulan tertentu yang ingin Anda
                                     lakukan.
                                     Dalam proposal tersebut juga terdapat layanan harga serta perkiraan berapa lama waktu yang
                                     dibutuhkan untuk pembuatan situs web Anda.
                                     Seluruhnya berdasarkan pada metode transparansi yang kami lakukan, tingkat kesulitan serta
                                     jumlah anggota tim yang diperlukan untuk menyelesaikan pekerjaan Anda.
                                 </p>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-4">
                     <div class="card2">
                         <div class="row">
                             <div class="col-xs-2 col-sm-2 col-md-2 text-right">
                                 <span class="title-custom">4</span>
                             </div>
                             <div class="col-xs-10 col-sm-10 col-md-10">
                                 <p class="title-custom-p"><b>Tanda Tangan Kontrak</b></p>
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-md-offset-2 col-md-10 m-t-10">
                                 <p>
                                     Jika Anda menyetujui apa yang telah kami tawarkan, maka proses selanjutnya adalah
                                     penandatangan kontrak serta pembayaran uang muka sebesar 50% dari total anggaran biaya yang
                                     tertera di dalam proposal.
                                     Setelah pembayaran selesai dilakukan, maka tim kami akan langsung dapat memulai untuk
                                     melakukan operasi pembuatan situs web Anda.
                                 </p>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <section class="tahap-pemesanan-3">
         <div class="container">
             <div class="row">
                 <div class="col-md-4">
                     <div class="card3">
                         <div class="row">
                             <div class="col-xs-2 text-right">
                                 <span class="custom-p-1">5</span>
                             </div>
                             <div class="col-xs-10">
                                 <p class="custom-p-2"><b>Konfirmasi</b></p>
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-md-offset-2 col-md-10 m-t-10">
                                 <div class="border-right-custom"></div>
                                 <p>
                                     Pertama, kami akan melakukan konfirmasi mengenai seluruh detail struktur situs website Anda
                                     serta persyaratan yang dibutuhkan.
                                     Hal ini bertujuan untuk memastikan bahwa tidak ada poin yang terlewat sehingga menyebabkan
                                     terjadinya hambatan dalam proses pembuatan web ke depan.
                                     Selain itu, kami juga akan menunjukkan kerangka kerja untuk pembuatan situs web Anda
                                     (Wireframe) yang telah kami buat sebagai gambaran awal.
                                     Selanjutnya untuk konsep, desain, domain serta server web akan kami dikonfirmasikan dan
                                     diputuskan.
                                     Apabila sebelumnya Anda telah mempunyai situs web, maka Anda dapat membagikan akses Google
                                     Analytics situs website Anda kepada kami.
                                 </p>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-4">
                     <div class="border-top-custom hidden-xs hidden-sm"></div>
                     <div class="card3">
                         <div class="row">
                             <div class="col-xs-2 text-right">
                                 <span class="custom-p-1">6</span>
                             </div>
                             <div class="col-xs-10">
                                 <p class="custom-p-2"><b>Pembuatan Desain Situs Website</b></p>
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-md-offset-2 col-md-10 m-t-10">
                                 <div class="border-right-custom"></div>
                                 <p>
                                     Pada tahap ini, konsep beranda atau situs web utama akan kami buat dan kami rancang sesuai
                                     dengan referensi yang Anda berikan.
                                     Tim desain situs web kami selanjutnya akan memberikan kepada Anda beberapa alternatif yang
                                     dapat Anda setujui atau Anda revisi.
                                     Setelah Anda setuju, maka langkah selanjutnya kami akan membuat sisa halaman berdasarkan
                                     desain yang berasal dari situs web utama.
                                 </p>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-4">
                     <div class="card3">
                         <div class="row">
                             <div class="col-xs-2 text-right">
                                 <span class="custom-p-1">7</span>
                             </div>
                             <div class="col-xs-10">
                                 <p class="custom-p-2"><b>Impelementasi, Pengodean dan Pemrograman</b></p>
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-md-offset-2 col-md-10 m-t-10">
                                 <p>
                                     Pada tahap ini, kami akan menjalankan berbagai fungsi pemrograman dari berbagai fitur yang
                                     telah direncanakan, termasuk CMS.
                                     Pada tahap ini juga telah mencakup penerapan SEO mengikuti desain UI/ UX serta menghilangkan
                                     berbagai fitur yang rentan terhadap keamanan situs web Anda.
                                     Kami juga akan memastikan bahwa seluruh arsitektur serta berbagai fitur yang berada di situs
                                     web Anda telah berjalan dan berfungsi dengan semestinya. Konsep ini bertujuan untuk
                                     memastikan bahwa situs website Anda telah terstruktur dengan baik untuk mendapatkan
                                     pengalaman pengunjung sesuai dengan target yang ditentukan.
                                 </p>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <section class="tahap-pemesanan-2">
         <div class="container">
             <div class="row">
                 <div class="col-md-4">
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
                                 <p>
                                     Setelah kami membuat situs web, maka kami akan melakukas tes yang telah disesuaikan dengan
                                     isi serta desain situs web itu sendiri.
                                     Kami akan memastikan tidak ada kesalahan sintaks HTML, website sepenuhnya telah
                                     mobile-friendly, setiap halaman dapat dimuat dengan cepat, serta penerapan SEO telah
                                     dilakukan secara efektif.
                                     Untuk keamanan situs website Anda, maka kami juga akan melakukan pengujian dan pemeriksaan
                                     keamanan dengan melakukan banyak skenario pengujian.
                                     Kami selanjutnya akan mendemonstrasikan berbagai fitur tersebut kepada Anda secara berkala
                                     sehingga Anda dapat langsung memberikan feedback atau saran kepada kami dari setiap fitur
                                     yang telah kami buat.
                                     Ketika proyek telah memasuki tahap finalisasi, Anda juga dapat melakukan pengetesan untuk
                                     memastikan dan mengkonfirmasi bahwa seluruh fungsi yang diterapkan telah sesuai dan berjalan
                                     dengan baik.
                                 </p>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-4">
                     <div class="border-top-custom hidden-xs hidden-sm"></div>
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
                                 <p>
                                     Pada tahapan ini, situs website Anda akan dimasukkan ke dalam web server untuk sekaligus
                                     dipublikasikan.
                                     Kami dapat membantu Anda untuk memindahkan seluruh data yang berasal dari situs lama Anda
                                     jika diperlukan.
                                     Setelah dipublikasi, selanjutnya kami akan melakukan registrasi indeks di Google serta
                                     menyiapkan Google Analytics untuk melakukan pemeliharaan lebih lanjut.
                                     Pada tahap ini juga, Anda dapat melunasi sisa pembayaran sehingga situs web Anda dapat
                                     langsung digunakan.
                                 </p>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-4">
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
                                 <p>
                                     Setelah diluncurkan, kami tidak akan meninggalkan Anda begitu saja.
                                     Kami sadar bahwa setiap situs website membutuhkan manajemen dalam jangka waktu yang panjang.
                                     Hal ini juga termasuk ke dalam situs website milik Anda.
                                     Karena itu, kami akan terus melakukan pemeliharaan sistem situs website Anda untuk menjaga
                                     agar hasil dapat sesuai dengan apa yang Anda inginkan.
                                     LOGIQUE menyediakan berbagai layanan manajemen yang Anda butuhkan, mulai dari mengamati
                                     sistem, melakukan operasi harian, bahkan untuk pembuatan konten reguler sekalipun.
                                     Kami juga dapat melakukan pengoperasian akun media sosial Anda, sampai melakukan operasi
                                     digital marketing.
                                     Semua itu untuk hasil yang maksimal dari situs web Anda.
                                 </p>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <section class="layanan p-t-10-m" style=" margin-top: 0; ">
         <div class="container">
             <div class="row hidden-md hidden-lg">
                 <div class="col-md-12">
                     <h2 class="m-m-10 title-hide">Butuh Layanan Kami Lainnya?</h2>
                 </div>
             </div>
             <div class="row">
                 <div class="col-md-4">
                     <h2 class="custom-3">Pengembangan Aplikasi Mobile (Smartphone)</h2>
                     <p class="min-h">
                         Kami juga dapat mengembangkan berbagai aplikasi mobile, seperti aplikasi Android, iOS dan hybrid.
                         Kami mempunyai banyak pengalaman dan pengetahuan yang luas mengenai aplikasi mobile lainnya, seperti PWA
                         dan AMP sebagai solusi dari permasalahan bisnis Anda, terutama pada perangkat mobile.
                         Melalui pengembangan API serta pembangunan infrastruktur seperti AWS, kami mampu mengembangkan aplikasi
                         yang sangat terpelihara melalui layanan terpadu kami.
                     </p>
                     <div>
                         <a href="/layanan/pembuatan-aplikasi-mobile.php" target="_blank" class="btn btn-logic btn-md">Pelajari
                             lebih lanjut</a>
                     </div>
                 </div>
                 <div class="col-md-4">
                     <div class="border-top-custom-2 hidden-xs hidden-sm">Butuh Layanan Kami Lainnya?</div>
                     <h2 class="custom-3">Solusi Sistem Perekrutan Karyawan</h2>
                     <p class="min-h">
                         Untuk membantu perusahaan dalam menemukan dan mendapatkan kandidat yang cocok dan sesuai dengan keinginan
                         Anda, kami menyediakan halaman situs web karir yang telah terstruktur, dinamis, profesional dan telah
                         dioptimalkan dengan baik sebagai solusi untuk divisi SDM Anda.
                         Kami juga menyediakan sistem manajemen aktifitas, laporan harian, manajemen situasi kerja dan sistem
                         menajemen kerja remote untuk meningkatkan produktivitas kerja.
                     </p>
                     <div>
                         <a href="/layanan/pembuatan-web-karir.php" target="_blank" class="btn btn-logic btn-md">Pelajari lebih
                             lanjut</a>
                     </div>
                 </div>
                 <div class="col-md-4">
                     <h2 class="custom-3">Inspeksi / Pengetesan Keamanan Website</h2>
                     <p class="min-h">
                         Kami juga melakukan inspeksi untuk pemeriksaan kerentanan celah keamanan pada situs web Anda.
                         Kami mengerti jika terdapat berbagai risiko keamanan yang bisa saja terjadi pada situs web, seperti
                         pembajakan dan pemalsuan.
                         Kami akan mencari celah dan mengetahui potensi penyusupan pada situs web Anda dan melakukan tindakan
                         pencegahan, seperti melakukan injeksi SQL, skrip pada lalu lintas situs website, sesi jacking dan
                         lain-lain.
                     </p>
                     <div>
                         <a href="/layanan/penetration-test.php" target="_blank" class="btn btn-logic btn-md">Pelajari lebih
                             lanjut</a>
                     </div>
                 </div>
             </div>
             <!-- <div class="row">
					<div class="col-md-12">
					  <div class="custom-faq">
						<h3 class="text-center">Pertanyaan Yang Sering Diajukan (FAQ)</h3>
						<hr>
						<p><b>Berapa harga pembuatan website di LOGIQUE?</b><br>
						LOGIQUE melayani pengerjaan website dengan harga yang disesuaikan dengan kebutuhan Anda. Untuk lebih detailnya, Anda dapat langsung menghubungi kami melalui email ke info@LOGIQUE.co.id, telepon di (021) 227 089 35/36, atau pesan WhatsApp di 0812 9656 0380.</p>
						<p><b>Apa saja yang dibutuhkan LOGIQUE dari klien dalam pembuatan website?</b><br>
						Untuk membuat website, klien hanya perlu menjelaskan proses bisnis yang akan dilakukan terhadap website yang akan dibuat. Data-data pendukung lainnya bisa diserahkan bila perlu. </p>
						<p><b>Berapa lama waktu yang dibutuhkan LOGIQUE dalam pembuatan website?</b><br>
						Biasanya, untuk membuat website dengan tampilan sederhana, kami hanya membutuhkan waktu 3 minggu. Waktu tersebut akan disesuaikan berdasarkan tingkat kompleksitas permintaan Anda, seperti penambahan sistem manajemen konten (CMS) dan fitur-fitur lainnya.</p>
						<p><b>Bisakah LOGIQUE membuat website e-commerce?</b><br>
						Tentu. LOGIQUE telah berpengalaman cukup lama dalam penggarapan website e-commerce dalam beragam bentuk dan tools. Untuk mengetahui website e-commerce apa saja yang telah kami kerjakan, Anda dapat melihat portofolio kami.</p>
						<p><b>Bagaimana dengan biaya pengelolaan website di LOGIQUE?</b><br>
						LOGIQUE melayani pengelolaan website secara profesional dan terencana. Untuk mengetahui harga pengelolaan website di LOGIQUE, Anda dapat langsung menghubungi kami melalui email ke info@LOGIQUE.co.id, telepon di (021) 227 089 35/36, atau pesan WhatsApp di 0812 9656 0380.</p>
						<p><b>Bahasa pemrograman apa yang digunakan LOGIQUE dalam pembuatan website?</b><br>
						LOGIQUE menggunakan beragam bahasa pemrograman terkini dan fungsional seperti PHP, HTML, CSS, hingga JavaScript, sehingga website yang dihasilkan bersifat dinamis, efektif, dan fleksibel. Kami juga selalu update dengan teknologi pemrograman terbaru dan penggunaannya dapat disesuaikan dengan keinginan Anda.</p>
					  </div>
					</div>
				</div> -->
         </div>
     </section>

     <section class="tahap-pemesanan-list">
         <div class="border-top-list hidden-xs hidden-sm"></div>
         <div class="container">
             <div class="row">
                 <div class="col-md-offset-6 col-md-6">
                     <h4><b>Kami selalu siap untuk membantu Anda dalam pembuatan dan pengembangan situs web, serta:</b></h4>
                     <ul>
                         <li class="m-b-5">Pembuatan dan /atau pengoperasian situs website</li>
                         <li class="m-b-5">Membangun kembali dan mengoptimalkannya untuk ponsel/ smartphone</li>
                         <li class="m-b-5">Mengembangkan aplikasi Android/ iOS</li>
                         <li class="m-b-5">Mengoperasikan sistem manajamen secara mandiri</li>
                         <li class="m-b-5">Mengelola infrastruktur IT</li>
                         <li class="m-b-5">Melakukan audit keamanan IT</li>
                         <li class="m-b-5">Meningkatkan awareness akan perusahaan/merek Anda melalui pemasaran digital</li>
                         <li class="m-b-5">Meraih target pemasaran online melalui pemasangan iklan online</li>
                         <li class="m-b-5">Mendesain dan mencetak materi promosi perusahaan untuk kemudian didistribusikan</li>
                         <li class="m-b-5">Mengelola pengoperasian akun media sosial (Facebook, Instagram dan Youtube)</li>
                         <li class="m-b-5">Memperbarui konten dan mengoperasikan situs web Anda</li>
                         <li class="m-b-5">Membuat dan memasang chatbot online untuk situs website Anda</li>
                     </ul>
                 </div>
             </div>
             <div class="text-center link-long-text btn-container-contact" style="margin-top: 70px;">
                 <a href="/hubungi-kami.php" target="_blank" class="btn-contact-us-black">
                     Silahkan hubungi LOGIQUE tentang pembuatan website di Indonesia
                 </a>
             </div>
         </div>
     </section>
     <section class="tahap-pemesanan-2 hidden-xs" style="padding: 2em"></section>
     <?php include '../footer.php';?>

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

     $('.min-h').matchHeight({
         byRow: true
     });
     $('.flow-part').matchHeight({
         // byRow: true
     });
     </script>
 </body>

 </html>