 <?php
 require_once("assets/form/fgcontact_systemdev.php");
 
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
         content="LOGIQUE menyediakan layanan jasa pembuatan sistem web dengan teknologi terkini, perencanaan infrastruktur, sistem keamanan, dan kecepatan. Dalam pembuatan dan pengembangan sistem web ini, kami terus meningkatkan dan mengembangkan hasil yang didapat. Segera hubungi LOGIQUE.">
     <meta name="keywords"
         content="pembuatan website, pengembangan aplikasi, pembuatan aplikasi, jasa konsultasi, aplikasi android, jasa pembuatan website, logique, logique digital indonesia, mekanisme, desain web, aplikasi android, keamanan web, pengembangan website, jasa pembuatan website, pembuatan website perusahaan.">
     <meta name="author" content="PT LOGIQUE DIGITAL INDONESIA ">
     <meta itemprop="name" content="PT. Logique Digital Indonesia">
     <meta property="og:title" content="Jasa Pembuatan Sistem Web | Pengembangan Sistem Web | LOGIQUE">
     <meta property="og:type" content="website">
     <meta property="og:site_name" content="Logique">
     <meta property="og:url" content="https://www.logique.co.id/layanan/pembuatan-sistem-web.php">
     <meta property="og:image" content="https://www.logique.co.id/img/og-image.png">
     <meta property="og:description"
         content="LOGIQUE menyediakan layanan jasa pembuatan sistem web dengan teknologi terkini, perencanaan infrastruktur, sistem keamanan, dan kecepatan. Dalam pembuatan dan pengembangan sistem web ini, kami terus meningkatkan dan mengembangkan hasil yang didapat. Segera hubungi LOGIQUE.">
     <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
     <title>Jasa Pembuatan Sistem Web | Pengembangan Sistem Web | LOGIQUE</title>
     <link href="/css/bootstrap.min.css" rel="stylesheet">
     <link href="/css/style.css" rel="stylesheet">
     <link href="assets/css/style-systemdev.css" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
     <script src="https://use.fontawesome.com/df558bb4a1.js"></script>
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
     .breadcrumb--update-design li.active a {
         color: #f5f5f5;
     }

     .breadcrumb--update-design {
         padding: 1em 15px;
     }

     @media only screen and (max-width: 414px) {
         .content-wrapper__ .--top {
             margin-top: 0 !important;
         }

         .breadcrumb--update-design li.active a {
             color: #000;
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
                         <div class="text-center ">
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
                                     <li><a href="/en/services/system-dev.php">EN</a></li>
                                     <li class="active"><a href="#">ID</a></li>
                                     <li><a href="/jp/services/system-dev.php">JP</a></li>
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
     </div>
     <header class="content-wrapper__ header">
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
                                    itemprop="item"><span itemprop="name">&nbsp;Web System</span></a>
                                <meta itemprop="position" content="3" />
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

         <div class="container" style="position:relative">
             <!-- <div class="row"> -->
             <!-- <div class="col-md-12">
					<a href="/" target="_blank">
						<div class="logo-header">
							<img src="assets/img/img-systemdev/logo.png" alt="Fitur Perusahaan" class="img-responsive">
						</div>
					</a>
				</div> -->
             <!-- </div> -->

             <!-- breadcrumb -->
             <div class="breadcrumb-position hidden">
                 <ol class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList" style="background:transparent;">
                     <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item"
                             href="/index.php"><span itemprop="name">Home</span></a>
                         <meta itemprop="position" content="1" />
                     </li>
                     <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item"
                             href="/layanan.php"><span itemprop="name">Layanan</span></a>
                         <meta itemprop="position" content="2" />
                     </li>
                     <li class="active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a
                             itemprop="item"><span itemprop="name">Pembuatan Sistem Web</span></a>
                         <meta itemprop="position" content="3" />
                     </li>
                 </ol>
             </div>
             <!-- end of breadcrumb -->

             <div class="row">
					<!-- lang btn -->
                 <div class="language-btn hidden">
                     <ul class="list-inline">
                         <li><a href="/en/services/system-dev.php">EN</a></li>
                         <li class="active"><a href="#">ID</a></li>
                         <li><a href="/jp/services/system-dev.php">JP</a></li>
                     </ul>
                 </div>
                 <!-- end of lang btn -->

                 <div class="col-lg-offset-7  col-lg-5 col-sm-offset-6 col-sm-6 bg-header-txt">
                     <h2 class="text-left m-new">
                         Apakah anda membutuhkan layanan profesional dalam Pengembangan Sistem & Aplikasi? Jangan khawatir:
                         Logique siap melayani!
                     </h2>
                     <h2 class="text-left m-new" style="color: #555;">
                         Kami mengembangkan sistem IT dengan standar internasional, kualitas Jepang, serta kecepatan dan harga
                         Indonesia.
                     </h2>
                 </div>
             </div>
         </div>
     </header>
     <section class="style-1 mb-1" style="padding-bottom: 0;padding-top:20px;">
         <div class="container">
             <div class="row">
                 <div class="col-md-offset-1 col-md-10 text-center">
                     <h2>
                         LOGIQUE adalah sebuah perusahaan IT/pengembang website terkemuka yang melayani pelanggannya
                         untuk memenuhi target bisnis melalui teknologi-teknologi web terkini.
                         Kami dapat membangun sistem website dengan lebih cepat dan lebih efisien pada harga yang pantas.
                     </h2>
                 </div>
             </div>
         </div>
     </section>
     <section class="style-2">
         <div class="container">
             <div class="row">
                 <div
                     class="col-lg-offset-2 col-lg-10 col-md-offset-2 col-md-10 col-sm-offset-2 col-sm-10 col-xs-offset-2 col-xs-10 text-right">
                     <div class="new5">
                         <h2 class="sect-3-txt mb-1">Pengembangan Sistem dan Aplikasi Web LOGIQUE</h2>
                         <hr class="gold-bar">
                         <h2 class="sect-3-txt mt-2">
                             Kami memiliki banyak pengalaman dalam pengembangan sistem untuk pasar Indonesia,
                             dari pengembangan Enterprise System untuk otomotif, organisasi finansial & pemerintahan,
                             sampai dengan pengembangan Agile untuk perusahaan startup.
                         </h2>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <section class="style-3">
         <div class="container">
             <div class="row">
                 <div class="col-md-3 justify-content-center">
                     <h3 class="new1 clearfix">Pengembangan Sistem yang Cepat dan Fleksibel</h3>
                     <img class="img img-responsive yellow-stripes" src="assets/img/img-systemdev/yellow-stripes.png" alt="">
                     <p class="new4">
                         Kecepatan merupakan kunci utama pada era digital ini. Dengan menggunakan metode Agile, kami dapat
                         mengembangkan sistem IT dengan cepat dan flexibel, tanpa mengurangi kualitas.
                         Kami mengatur tim pengembangan kami berdasarkan kebutuhan Anda. Pengembangan tipe lab juga tersedia.
                     </p>
                 </div>
                 <div class="col-md-3 justify-content-center">
                     <h3 class="new1">Konstruksi Sistem yang Aman dan Berkualitas</h3>
                     <img class="img img-responsive yellow-stripes" src="assets/img/img-systemdev/yellow-stripes.png" alt="">
                     <p class="new4">
                         Kami merancang sistem berkualitas tinggi karena pengujian keamanan wajib dilakukan sebelum delivery.
                         Kami dapat melakukan penetration testing seperti SQL injection, path traversal, dan x-site scripting
                         untuk mengurangi risiko.
                     </p>
                     <a href="../layanan/penetration-testing" class="btn-contact-us-black-pent col-md-12" style="margin: 12px 0">Diagnosa Kelemahan
                         Web</a>
                 </div>
                 <div class="col-md-3 justify-content-center">
                     <h3 class="new1">Pengalaman luas tentang Pasar Indonesia</h3>
                     <img class="img img-responsive yellow-stripes" src="assets/img/img-systemdev/yellow-stripes.png" alt="">
                     <p class="new4">
                         Kami mengembangkan sistem untuk beragam klien Indonesia di sektor Otomotif, Keuangan & Pemerintah. Dengan
                         pengalaman di bidang
                         e-commerce, kami paham akan kebutuhan bisnis digital di Indonesia. Dengan demikian,
                         kami dapat memenuhi setiap persyaratan khusus yang mungkin Anda miliki, dan memberikan konsultasi.
                     </p>
                 </div>
                 <div class="col-md-3 justify-content-center">
                     <h3 class="new1">Desain Infrastruktur Digital</h3>
                     <img class="img img-responsive yellow-stripes" src="assets/img/img-systemdev/yellow-stripes.png" alt="">
                     <p class="new4">
                         Kami merancang dan membangun cloud server lokal dan internasional. Profil profesional kami antara lain:
                         AWS, GCP dan Alibaba Cloud di Indonesia. Perlu dicatat bahwa pada era
                         digital ini terdapat banyak migration yang telah berhasil diintegrasikan ke cloud.
                     </p>
                 </div>
             </div>
         </div>
     </section>
     <section class="supposedly-style4">
         <div class="container">
             <div class="row">
                 <div class="container">
                     <div class="row" style="display: flex; flex-wrap: wrap;">
                         <div class="col-md-4">
                             <h1 class="new7" style="font-weight: 500!important;">Mendukung Perusahaan Anda Melalui Pengembangan
                                 Sistem dan Aplikasi Berdasarkan Permintaan.</h1>
                             <br>
                             <div class="justify-content-center">
                                 <img src="assets/img/img-systemdev/laptop-img.png" alt="" class="img img-responsive">
                             </div>
                         </div>
                         <div class="col-md-8">
                             <div class="row">
                                 <div class="col-md-12">
                                     <h4 class="dark-gold-title">Pengembangan Berdasarkan Kontrak</h4>
                                     <div style="margin-left: 12px;">
                                         <p class="h4">
                                             Metode ini efektif untuk project dengan kebutuhan yang
                                             jelas. Kami biasanya merekomendasikan untuk bekerja dengan Metode Pengembangan Agile
                                             (Scrum).
                                         </p>
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-md-12">
                                     <h4 class="dark-gold-title">
                                         Pengembangan Outsourcing Tipe Lab (Biaya Berdasarkan Jumlah Hari Kerja)
                                     </h4>
                                     <div style="margin-left: 12px;">
                                         <p class="h4">
                                             Efektif untuk situasi di mana kebutuhan / ruang lingkup pekerjaan
                                             belum ditentukan, tetapi pekerjaan harus segera dimulai. Tipe ini juga
                                             efektif untuk situasi di mana jangka waktu pengembangan harus bisa diubah
                                             secara fleksibel di tengah-tengah pengerjaan.
                                         </p>
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-md-12">
                                     <h4 class="dark-gold-title">Pengembangan dengan Tarif Tetap Bulanan</h4>
                                     <div style="margin-left: 12px;">
                                         <p class="h4">
                                             Dalam situasi ini, biaya bulanan sudah ditetapkan. Setiap
                                             bulan kami bekerja sesuai dengan prioritas khusus yang sudah ditentukan dalam
                                             jumlah hari kerja. Cocok untuk maintenance dan development project– di mana
                                             umumnya dapat muncul ketidaksepakatan mengenai apakah biaya tambahan diperlukan
                                             atau tidak. Pengaturan ini biasanya cocok digunakan karena
                                             developer bekerja berdasarkan biaya bulanan yang telah ditentukan.
                                         </p>
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-md-12">
                                     <h4 class="dark-gold-title">Pengembangan di Tempat (Pengiriman Pengembang)</h4>
                                     <div style="margin-left: 12px;">
                                         <p class="h4">
                                             Melalui perusahaan yang berafiliasi dengan LOGIQUE, kami
                                             bisa mengirimkan developer, designer, dan tester (dan spesialis lainnya) ke
                                             lokasi Anda, sehingga mereka bisa bekerja dengan tim Anda di tempat.
                                         </p>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <section class="tahap-pemesanan-2 hidden-xs" style="padding: 2em"></section>
     <section class="style-4">
         <div class="container">
             <div class="row">
                 <div class="col-md-offset-4 col-md-4 text-center">
                     <div class="box-1">Studi Kasus</div>
                 </div>
                 <div class="col-md-offset-5 col-md-7">
                     <div class="card">
                         <div class="row">
                             <div class="col-md-offset-1 col-md-10 m-t-10">
                                 <h4><b>JBA Indonesia | Sistem Manajemen Lelang</b></h4>
                                 <p>
                                     JBA adalah perusahaan lelang mobil & motor terbesar di Indonesia.
                                     Kami telah membantu berbagai proyek pengembangan sistem, seperti pembuatan web & aplikasi,
                                     sistem lelang, aplikasi penawaran, lelang online, pemeriksaan aplikasi seluler, sistem
                                     keuangan, dan sebagainya.
                                     Sebagai sistem yang mempunyai fungsi penting, sistem yang kami kembangkan haruslah terbebas
                                     dari kesalahan, meskipun demikian kami sudah sangat berpengalaman untuk menyelesaikan proyek
                                     dalam waktu yang cepat.
                                     Kami mempunyai pertemuan rutin dan secara konsisten selalu meningkatkan performa sistem.
                                 </p>
                             </div>
                         </div>
                         <div class="row">
                             <div class="box-2">Teknologi Utama: PHP, NodeJS, SocketIO, Android Native</div>
                         </div>
                     </div>
                     <div class="text-center btn-container-contact">
                         <a href="../case-study/jba-auction-system/" class="btn btn-contact-us-black">
                             Lihat lebih detail
                         </a>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <section class="other-stydycase section-style">
         <div class="container">
             <div class="row">
                 <div class="col-md-4 col-sm-12">
                     <div class="osc-item">
                         <div class="">
                             <img src="assets/img/img-systemdev/logo-caroline.png" alt="Logo Caroline" class="img img-responsive">
                         </div>
                         <h4>Perkembangan yang cepat</h4>
                         <div class="osc-desc">
                             Membangun sebuah sistem bisnis inti mulai dari awal hanya dalam waktu tiga bulan.
                             Kami membuat situs website untuk jual beli mobil bekas secara online.
                             <a href="../case-study/caroline-bidding-system/">
                                 Lihat lebih detail
                             </a>
                         </div>
                         <div class="osc-worktodo">
                             Caroline-id.com, Konstruksi Situs Website jual beli online, penjualan mobil bekas. Teknologi Utama:
                             PHP, Laravel, HTML5
                         </div>
                     </div>
                 </div>
                 <div class="col-md-4 col-sm-12">
                     <div class="osc-item">
                         <div class="">
                             <img src="assets/img/img-systemdev/logo-zutto.png" alt="Logo Zutto" class="img img-responsive">
                         </div>
                         <h4>Sistem peningkatan PDCA jangka panjang</h4>
                         <div class="osc-desc">
                             Selama sekitar 5 tahun, sistem manajemen pelanggan (CRM) ZuttoRide telah dikembangkan dari awal
                             menggunakan metode siklus PDCA.
                             Saat ini, pembangunan sistem telah memasuki fase penyempurnaan ke-14.
                             <a href="../case-study/zuttoride-customer-management-system/">
                                 Lihat lebih detail
                             </a>
                         </div>
                         <div class="osc-worktodo">
                             ZuttoRide Indonesia, Sistem Manajemen Pelanggan (CRM), Layanan Service Sepeda Motor, Asuransi Sepeda
                             Motor. Teknologi Utama: PHP, CakePHP, HTML5
                         </div>
                     </div>
                 </div>
                 <div class="col-md-4 col-sm-12">
                     <div class="osc-item">
                         <div class="">
                             <img src="assets/img/img-systemdev/logo-vip.png" alt="Logo VIP Plaza" class="img img-responsive">
                         </div>
                         <h4>Membangun kembali situs e-Commerce dengan PWA</h4>
                         <div class="osc-desc">
                             Kami juga membangun ulang situs E-Commerce menggunakan metode PWA system.
                             Hal ini berhasil mengarahkan pengguna untuk berkunjung secara langsung dan membeli akibat penggunaan
                             UI yang dinamis.
                             Didukung dengan penggunaan metode resource-based agile development.
                             <a href="../case-study/vip-plaza-progressive-web-app/">
                                 Lihat lebih detail
                             </a>
                         </div>
                         <div class="osc-worktodo">
                             https://m.vipplaza.co.id/ e-Commerce website construction, e-Commerce Indonesia. Teknologi Utama:
                             PWA, NodeJS, ReactJS
                         </div>
                     </div>
                 </div>
             </div>
             <div class="list-study-container">
                 <h3>Pencapaian Pengembangan Sistem Kami Lainnya</h3>
                 <ul class="circle-list">
                     <li>
                         Manajemen Poin Bermanfaat & Pengembangan Sistem E-Commerce.<br>
                         <small class="text-muted">6 bulan, AWS, Linux, MySQL, PHP Framework |
                             <a data-toggle="modal" data-target="#pop1" href="#">Lihat lebih detail</a>
                         </small>
                     </li>
                     <!-- modal 1 -->
                     <div id="pop1" class="modal fade" role="dialog">
                         <div class="modal-dialog">
                             <div class="modal-content">
                                 <div class="modal-body">
                                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                                     <h4>Manajemen Poin Bermanfaat & Pengembangan Sistem E-Commerce.</h4>
                                     <hr>
                                     <p class="p-padding-v-5-modal">
                                         Merupakan sistem berbasis web yang digunakan untuk menyelenggarakan program poin insentif
                                         bagi karyawan perusahaan client mereka.
                                         Sistem ini terdiri dari beberapa sub sistem yang terintegrasi, yaitu: sistem pemasok
                                         (supplier), sistem pengguna (users), dan admin penyedia jasa.
                                     </p>
                                     <p class="p-padding-v-5-modal">
                                         Pengembangan sistem ini memakan waktu selama 6 bulan.
                                         Mengusung platform PHP dengan framework pilihan, database MySQL, dan hosting pada Linux
                                         server pada layanan cloud AWS, sistem ini terbukti telah mengakomodir kebutuhan bisnis
                                         program insentif point bagi karyawan perusahaan.
                                     </p>
                                     <p class="p-padding-v-5-modal">
                                         Agar menghasilkan sistem dengan performa dan stabilitas tinggi, kami melakukan
                                         pengembangan dengan pendekatan efisiensi pada layer aplikasi dan layer database.
                                         Kemudian pada sisi infrastruktur server, kami telah menerapkan arsitektur server modern
                                         dan memanfaatkan fitur autoscaling dan loadbalancing dari AWS.
                                         Dengan begitu, meskipun saat ini sudah mendapat lebih dari 10.000 pengguna aktif yang
                                         tersebar di 3 sub sistem, performa sistem tetap stabil dan terjaga.
                                     </p>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <li>
                         Pengembangan E-Commerce untuk Perusahaan MLM.<br>
                         <small class="text-muted">6 bulan, AWS, Linux, MySQL, PHP Framework |
                             <a data-toggle="modal" data-target="#pop2" href="#">Lihat lebih detail</a>
                         </small>
                     </li>
                     <!-- modal 2 -->
                     <div id="pop2" class="modal fade" role="dialog">
                         <div class="modal-dialog">
                             <div class="modal-content">
                                 <div class="modal-body">
                                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                                     <h4>Pengembangan E-Commerce untuk Perusahaan MLM.</h4>
                                     <hr>
                                     <p class="p-padding-v-5-modal">
                                         Sistem e-commerce MLM dengan teknologi berbasis web.
                                         Terdiri dari 3 modul, yaitu: modul pengelolaan oleh admin, modul distributor, dan modul
                                         customer.
                                         Sistem ini sudah dilengkapi dengan fitur perhitungan ongkos kirim, perhitungan margin
                                         keuntungan distributor, manajemen saldo distributor dan user, pendaftaran online, uang
                                         elektronik (e-money), serta pembelian pulsa secara online.
                                         Dengan dukungan integrasi dengan layanan payment gateway, customer dapat melakukan
                                         transaksi dengan kartu kredit dan virtual account.
                                         Sistem ini tergolong cukup kompleks.
                                         Serangkaian proses pengembangan memakan waktu selama 6 bulan.
                                     </p>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <li>
                         Sistem Pengembangan Manajemen Lelang Kendaraan.<br>
                         <small class="text-muted">6 bulan, AWS, Linux, MySQL, PHP Framework, Node.js |
                             <a data-toggle="modal" data-target="#pop3" href="#">Lihat lebih detail</a>
                         </small>
                     </li>
                     <!-- modal 3 -->
                     <div id="pop3" class="modal fade" role="dialog">
                         <div class="modal-dialog">
                             <div class="modal-content">
                                 <div class="modal-body">
                                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                                     <h4>Sistem Pengembangan Manajemen Lelang Kendaraan.</h4>
                                     <hr>
                                     <p class="p-padding-v-5-modal">
                                         Merupakan sistem lelang otomotif dengan tingkat kompleksitas tinggi.
                                         Terdiri dari sistem lelang online terintegrasi, sistem manajemen stok inventaris objek
                                         lelang, sistem keuangan, serta terintegrasi dengan sistem inspeksi kendaraan dan aplikasi
                                         bidding mobile.
                                         Sistem ini terintegrasi dengan core system dan sistem pendukung lainnya, sehingga
                                         customer dapat menikmati pengalaman mengikuti lelang secara realtime, baik melalui
                                         browser desktop maupun via mobile apps.
                                     </p>
                                     <p class="p-padding-v-5-modal">
                                         Sistem ini dikembangkan dengan platform PHP dengan framework pilihan, terintegrasi dengan
                                         teknologi node.js, serta menggunakan database MySQL.
                                         Dengan metode manajemen proyek yang efektif, kami berhasil mengembangkan aplikasi ini
                                         dalam waktu 6 bulan.
                                         Performa sistem ini cukup kritikal.
                                         Dengan desain arsitektur aplikasi yang baik, serta rancangan arsitektur server tingkat
                                         lanjut, performa sistem ini terbilang sangat stabil, meskipun aktivitas user pada sistem
                                         ini sudah sangat aktif.
                                     </p>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <li>
                         Pengembangan Aplikasi Mobile (Android Penawaran Lelang).<br>
                         <small class="text-muted">2 bulan, Android, node.js, JAVA, AWS |
                             <a data-toggle="modal" data-target="#pop4" href="#">Lihat lebih detail</a>
                         </small>
                     </li>
                     <!-- modal 4 -->
                     <div id="pop4" class="modal fade" role="dialog">
                         <div class="modal-dialog">
                             <div class="modal-content">
                                 <div class="modal-body">
                                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                                     <h4>Pengembangan Aplikasi Mobile (Android Penawaran Lelang).</h4>
                                     <hr>
                                     <p class="p-padding-v-5-modal">
                                         Aplikasi berbasis android yang kami rancang untuk memudahkan customer dalam mengikuti
                                         lelang online secara realtime.
                                         Integrasi platform android dengan node.js, serta desain UI/UX yang baik, menghadirkan
                                         pengalaman seperti mengikuti lelang secara langsung di lokasi balai lelang.
                                         Dengan dukungan design API berperforma tinggi, dan hosting server berplatform Linux,
                                         serta arsitektur server yang telah mengadopsi fitur autoscaling dan loadbalancing dari
                                         AWS, maka performa aplikasi bidding ini tidak diragukan lagi.
                                     </p>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <li>
                         Aplikasi Mobile (Sistem Inspeksi/Penilaian Kendaraan).<br>
                         <small class="text-muted">4 bulan, Android, node.js, JAVA, AWS |
                             <a data-toggle="modal" data-target="#pop5" href="#">Lihat lebih detail</a>
                         </small>
                     </li>
                     <!-- modal 5 -->
                     <div id="pop5" class="modal fade" role="dialog">
                         <div class="modal-dialog">
                             <div class="modal-content">
                                 <div class="modal-body">
                                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                                     <h4>Aplikasi Mobile (Sistem Inspeksi/Penilaian Kendaraan).</h4>
                                     <hr>
                                     <p class="p-padding-v-5-modal">
                                         Merupakan aplikasi berbasis android yang digunakan untuk kegiatan inspeksi kendaraan yang
                                         akan dilelangkan.
                                         Lebih dari 900 part kendaraan telah diperiksa melalui aplikasi inspeksi ini.
                                         Dengan aplikasi ini, proses pemeriksaan dan pencatatan hasil inspeksi dapat dilakukan
                                         dengan sangat efisien.
                                         Hasil inspeksi langsung tersimpan ke dalam core system secara realtime.
                                     </p>
                                     <p class="p-padding-v-5-modal">
                                         Dengan design UI/UX yang baik, pengguna aplikasi ini dapat dengan mudah melakukan proses
                                         inspeksi, meskipun melibatkan sangat banyak part kendaraan.
                                         Dari sisi performa, aplikasi ini sangat stabil.
                                         Selain karena android API dirancang dengan pendekatan performa yang baik, sistem ini juga
                                         didukung oleh desain arsitektur server yang baik dan telah memanfaatkan fitur autoscaling
                                         dan loadbalancing dari AWS.
                                     </p>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <li>
                         Sistem CRM untuk Pelayanan Jalan Kendaraan Bermotor.<br>
                         <small class="text-muted">3 bulan, PHP Framework, Payment Gateway, AWS |
                             <a data-toggle="modal" data-target="#pop6" href="#">Lihat lebih detail</a>
                         </small>
                     </li>
                     <!-- modal 6 -->
                     <div id="pop6" class="modal fade" role="dialog">
                         <div class="modal-dialog">
                             <div class="modal-content">
                                 <div class="modal-body">
                                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                                     <h4>Sistem CRM untuk Pelayanan Jalan Kendaraan Bermotor.</h4>
                                     <hr>
                                     <p class="p-padding-v-5-modal">
                                         Merupakan sistem CRM untuk asuransi motor.
                                         Dengan sistem ini, tim admin dapat dengan mudah mengelola data customer, mengelola
                                         perpanjangan periode asuransi, mengelola pembayaran polis, mengelola dealer partner,
                                         mengelola harga polis, serta mengelola data klaim asuransi dari customer.
                                         Sementara bagi customer, sistem ini memberikan kemudahan dalam hal permintaan
                                         perpanjangan asuransi, serta perencanaan asuransi dengan melakukan simulasi harga premi
                                         berdasarkan harga kendaraan.
                                     </p>
                                     <p class="p-padding-v-5-modal">
                                         Sistem ini dibangun dengan teknologi PHP dengan platform pilihan, HTML-CSS3, Javascript,
                                         JQuery/Ajax, serta database MySQL.
                                         Sistem ini sudah terintegrasi dengan layanan payment gateway dari penyedia layanan
                                         terkemuka, sehingga memudahkan customer dalam bertransaksi dengan menggunakan kartu
                                         kredit dan uang elektronik.
                                     </p>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <li>
                         Sistem CRM untuk Pembeli Lelang.<br>
                         <small class="text-muted">2 bulan, PHP Framework, MySQL, AWS |
                             <a data-toggle="modal" data-target="#pop7" href="#">Lihat lebih detail</a>
                         </small>
                     </li>
                     <!-- modal 7 -->
                     <div id="pop7" class="modal fade" role="dialog">
                         <div class="modal-dialog">
                             <div class="modal-content">
                                 <div class="modal-body">
                                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                                     <h4>Sistem CRM untuk Pembeli Lelang.</h4>
                                     <hr>
                                     <p class="p-padding-v-5-modal">
                                         Merupakan sistem CRM bagi customer perusahaan lelang, di mana customer dapat melakukan
                                         pengecekan tagihan, mendapatkan informasi penting seperti riwayat keikursertaan lelang,
                                         serta mengelola point reward yang mereka dapatkan dari transaksi pembelian yang telah
                                         dilakukan.
                                         Sistem ini dikembangkan dengan platform PHP dengan framework pilihan, serta menggunakan
                                         database MySQL.
                                         Customer bisa mendapatkan informasi yang dibutuhkan secara realtime, karena sistem ini
                                         terkoneksi dengan core system melalui secured-API.
                                     </p>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <li>
                         Sistem Penyimpanan Manajemen Layout/Komponen untuk Penerbit Majalah.<br>
                         <small class="text-muted">2.5 bulan, JQuery, HTML5, PHP Framework, MySQL |
                             <a data-toggle="modal" data-target="#pop8" href="#">Lihat lebih detail</a>
                         </small>
                     </li>
                     <!-- modal 8 -->
                     <div id="pop8" class="modal fade" role="dialog">
                         <div class="modal-dialog">
                             <div class="modal-content">
                                 <div class="modal-body">
                                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                                     <h4>Sistem Penyimpanan Manajemen Layout/Komponen untuk Penerbit Majalah.</h4>
                                     <hr>
                                     <p class="p-padding-v-5-modal">
                                         Merupakan sistem layout management berbasis web yang digunakan untuk mengatur tata letak
                                         kolom iklan untuk media cetak dari publisher terkemuka asal Jepang.
                                         Dengan dukungan desain UI/UX yang baik, aplikasi web ini sangat mudah digunakan
                                         (user-friendly).
                                         Dengan fitur drag-and-drop, user dapat mengatur tata letak iklan sesuai keinginan.
                                         Sistem ini juga memiliki fitur export dan import pengaturan tata letak dalam bentuk file
                                         csv.
                                         Sistem ini dikembangkan dengan teknologi PHP dengan framework pilihan, JQuery, serta
                                         HTML5-CSS3. Proses pengembagan aplikasi web ini membutuhkan waktu 3 bulan.
                                     </p>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <li>
                         Pengembangan dan Pengoperasian Situs Pasar Mobil Bekas.<br>
                         <small class="text-muted">2.5 bulan, JQuery, HTML5, PHP Framework, MySQL |
                             <a data-toggle="modal" data-target="#pop9" href="#">Lihat lebih detail</a>
                         </small>
                     </li>
                     <!-- modal 9 -->
                     <div id="pop9" class="modal fade" role="dialog">
                         <div class="modal-dialog">
                             <div class="modal-content">
                                 <div class="modal-body">
                                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                                     <h4>Pengembangan dan Pengoperasian Situs Pasar Mobil Bekas.</h4>
                                     <hr>
                                     <p class="p-padding-v-5-modal">
                                         Merupakan sistem marketplace mobil yang digunakan oleh banyak dealer mobil bekas baik di
                                         Jakarta maupun luar Jakarta.
                                         Sistem ini dikembangkan dengan teknologi PHP dengan framework pilihan dan berjalan pada
                                         platform Linux pada AWS server.
                                         Proses pengembangan aplikasi marketplace berbasis web ini membutuhkan waktu selama 3
                                         bulan.
                                     </p>
                                     <p class="p-padding-v-5-modal">
                                         Respon pengguna layanan ini terus meningkat dari waktu ke waktu.
                                         Saat ini sistem ini sudah melayani lebih dari 30.000 pengunjung setiap harinya.
                                         Meskipun traffic-nya cukup padat, sistem ini masih sangat stabil.
                                         Selain teknologi berbasis web, sistem ini juga terintegrasi dengan mobile apps berbasis
                                         Android (Native) dan IOS (Swift).
                                     </p>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <li>
                         Pengembangan Sistem Peta Digital.<br>
                         <small class="text-muted">3 bulan, PHP Framework, MySQL, Google map API, Java Script |
                             <a data-toggle="modal" data-target="#pop10" href="#">Lihat lebih detail</a>
                         </small>
                     </li>
                     <!-- modal 10 -->
                     <div id="pop10" class="modal fade" role="dialog">
                         <div class="modal-dialog">
                             <div class="modal-content">
                                 <div class="modal-body">
                                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                                     <h4>Pengembangan sistem peta digital.</h4>
                                     <hr>
                                     <p class="p-padding-v-5-modal">
                                         Pengembangan sistem peta digital.
                                         Sistem yang digunakan untuk pemetaan kemajuan suatu proyek yang dilaksanakan di
                                         negara-negara ASEAN.
                                         Sistem ini dikembangkan dengan teknologi PHP dengan framework pilihan, Google Maps API,
                                         HTML5-CSS3, serta database MySQL.
                                         Proses pengembangan sistem ini membutuhkan waktu selama 3 bulan.
                                     </p>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <li>
                         Pengembangan Sistem Lelang C2C.<br>
                         <small class="text-muted">2 bulan, PHP Framework, MySQL, JQuery/Ajax, HTML5/CSS3 |
                             <a data-toggle="modal" data-target="#pop11" href="#">Lihat lebih detail</a>
                         </small>
                     </li>
                     <!-- modal 11 -->
                     <div id="pop11" class="modal fade" role="dialog">
                         <div class="modal-dialog">
                             <div class="modal-content">
                                 <div class="modal-body">
                                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                                     <h4>Pengembangan Sistem Lelang C2C.</h4>
                                     <hr>
                                     <p class="p-padding-v-5-modal">
                                         Merupakan sistem lelang C2C.
                                         Terdapat sekitar 2.000 kendaraan yang dilelangkan dan terbagi dalam 4 lelang, dan diikuti
                                         sekitar 300 user setiap bulannya.
                                         Sistem ini dikembangkan dengan teknologi PHP dengan framework pilihan, JQuery / Ajax,
                                         HTML5-CSS3, serta database MySQL.
                                         Pengembangan sistem ini membutuhkan waktu selama 2 bulan.
                                     </p>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <li>
                         Pengembangan Sistem Web CMS Untuk Organisasi Publik.<br>
                         <small class="text-muted">2 bulan, PHP Framework, MySQL | <a data-toggle="modal" data-target="#pop12"
                                 href="#">Lihat lebih detail</a></small>
                     </li>
                     <!-- modal 12 -->
                     <div id="pop12" class="modal fade" role="dialog">
                         <div class="modal-dialog">
                             <div class="modal-content">
                                 <div class="modal-body">
                                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                                     <h4>Pengembangan Sistem Web CMS Untuk Organisasi Publik.</h4>
                                     <hr>
                                     <p class="p-padding-v-5-modal">
                                         Sistem web CMS untuk organisasi publik: sistem ini dikembangkan untuk mengelola konten
                                         website organisasi publik.
                                         Dengan sistem ini seorang admin web dapat dengan mudah mengelola konten website tersebut.
                                         Sistem web CMS ini dikembangkan dengan teknologi PHP dengan framework pilihan,
                                         HTML5-CSS3, javascript, JQuery, dan database MySQL.
                                         Proses pengembangan web CMS ini membutuhkan waktu selama 2 bulan.
                                     </p>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <li>
                         Pengembangan web CMS untuk e-book commerce.<br>
                         <small class="text-muted">2 bulan, PHP Framework, HTML5/CSS3,MySQL | <a data-toggle="modal"
                                 data-target="#pop13" href="#">Lihat lebih detail</a></small>
                     </li>
                     <!-- modal 13 -->
                     <div id="pop13" class="modal fade" role="dialog">
                         <div class="modal-dialog">
                             <div class="modal-content">
                                 <div class="modal-body">
                                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                                     <h4>Pengembangan web CMS untuk e-book commerce.</h4>
                                     <hr>
                                     <p class="p-padding-v-5-modal">
                                         Merupakan sistem CMS yang digunakan oleh sebuah distributor buku asal Jepang.
                                         Sistem ini dikembangkan dengan teknologi PHP dengan framework pilihan, HTML5-CSS3, serta
                                         database MySQL.
                                         Dengan web CMS ini, administrator website dapat dengan mudah mengelola konten website
                                         perusahaan.
                                         Pengembangan web CMS ini memerlukan waktu selama 2 bulan.
                                     </p>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <li>
                         Sistem Portal Lowongan Pekerjaan.<br>
                         <small class="text-muted">2 bulan, PHP Framework, MySQL | <a data-toggle="modal" data-target="#pop14"
                                 href="#">Lihat lebih detail</a></small>
                     </li>
                     <!-- modal 14 -->
                     <div id="pop14" class="modal fade" role="dialog">
                         <div class="modal-dialog">
                             <div class="modal-content">
                                 <div class="modal-body">
                                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                                     <h4>Sistem Portal Lowongan Pekerjaan.</h4>
                                     <hr>
                                     <p class="p-padding-v-5-modal">
                                         Merupakan sistem portal lowongan pekerjaan yang dibangun dengan teknologi PHP,
                                         HTML5-CSS3, serta database MySQL.
                                         Portal lowongan pekerjaan ini dihosting di Linux server AWS.
                                         Perusahaan bisa mencari dan menemukan pencari kerja dan pencari kerja dapat melihat
                                         pekerjaan kosong dan terbuka di situs web.
                                         Calon bisa mengajukan CV untuk posisi secara langsung.
                                         Persentase pengguna layanan ini adalah mayoritas perusahaan Jepang yang ada di Indonesia.
                                     </p>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <li>
                         Web Dengan Sistem Rekrutmen.<br>
                         <small class="text-muted">3 bulan, PHP Framework, HTML5/CSS3,MySQL | <a data-toggle="modal"
                                 data-target="#pop15" href="#">Lihat lebih detail</a></small>
                     </li>
                     <!-- modal 15 -->
                     <div id="pop15" class="modal fade" role="dialog">
                         <div class="modal-dialog">
                             <div class="modal-content">
                                 <div class="modal-body">
                                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                                     <h4>Web Dengan Sistem Rekrutmen.</h4>
                                     <hr>
                                     <p class="p-padding-v-5-modal">
                                         Merupakan corporate website yang dilengkapi dengan sistem rekrutmen.
                                         Para pencari kerja yang berminat bekerja di perusahan ini dapat melamar langsung melalui
                                         website. Dengan tingkat keamanan yang tinggi, kerahasiaan data para pelamar lebih
                                         terjamin.
                                         Sistem ini dibangun dengan teknologi PHP, dan menggunakan framework pilihan, HTML5-CSS3,
                                         serta database Ms. SQL Server.
                                         Proses pengembangan membutuhkan waktu 3 bulan.
                                     </p>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <li>
                         Sistem Management Kendaraan untuk perusahaan sewa mobil.<br>
                         <small class="text-muted">6 Months, AWS, Linux, MySQL, SAP Connection, PHP Framework</small>
                     </li>
                     <!-- modal 16 -->
                     <!-- <div id="pop16" class="modal fade" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-body">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4>Hiring (recruitment) Management System.</h4><hr>
											<p class="p-padding-v-5-modal">
												Corporate website equipped with a recruitment system.
												Job seekers who are interested in working at this company can apply directly through the website.
												With a high level of security, the confidentiality of the applicant's data is more assured.
												The system is built with PHP technology, and uses the chosen frameworks, HTML5-CSS3, as well as the Ms.
												SQL Server database. The development process takes 3 months.
											</p>
										</div>
									</div>
								</div>
							</div> -->
                 </ul>
             </div>
         </div>
     </section>
     <section class="style-6">
         <div class="container">
             <div class="row">
                 <div class="col-md-5">
                     <h1 class="new6"><span class="underline2">Client</span><br>Testimonial</h1>
                 </div>
                 <div class="col-md-7">
                     <div class="row">
                         <div class="col-md-12">
                             <ol class="ol-position">
                                 <li class="new3 h4 mb-1">
                                     <h4 class="mt-2">
                                         Sebagai kepala Departemen IT, saya telah mengelola banyak project pengembangan sistem.
                                         Sejauh ini, tidak ada perusahaan lain sefleksibel dan semampu LOGIQUE. Meskipun sering
                                         terjadi permintaan perubahaan dari user yang tidak bisa dihindari, saya sangat puas
                                         dengan kemampuan cepat tanggap LOGIQUE untuk menghasilkan produk digital berkualitas
                                         tinggi. Saya juga pernah menggunakan jasa sistem desain dan layanan maintenance, dan saya
                                         berterima kasih atas respon akurat dan tepat waktu dari LOGIQUE.
                                     </h4>
                                 </li>
                                 <li class="new3 h4 mb-1">
                                     <h4 class="mt-2">
                                         Sejak pemutusan kontrak dengan perusahaan pengembang sistem sebelumnya, LOGIQUE telah
                                         mengambil alih pertumbuhan dan pemeliharaan infrastruktur IT kami. Saya berterima kasih
                                         atas fleksibilitas dan efektivitas kerja yang dilakukan LOGIQUE dengan mengambil
                                         inisiatif untuk meningkatkan sistem digital kami; termasuk menunjukkan berbagai masalah
                                         yang tidak kami sadari sebelumnya.
                                     </h4>
                                 </li>
                                 <li class="new3 h4 mb-1">
                                     <h4 class="mt-2">
                                         Sepanjang kesepakatan tarif tetap bulanan yang sedang berjalan saat ini, LOGIQUE telah
                                         melakukan pekerjaan dengan sangat cepat dan efisien. Kami teramat senang dengan usaha
                                         LOGIQUE yang telah menghasilkan produk berkualitas tinggi yang hemat biaya. Selama
                                         pengembangan project besar kami, saya ingin menerapkan metode development Tipe Lab yang
                                         ditawarkan.
                                     </h4>
                                 </li>
                             </ol>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <section class="style-7">
         <div class="row">
             <div class="container">
                 <div class="row" style="display: flex; flex-wrap: wrap;">
                     <div class="col-md-4">
                         <div class="justify-content-center">
                             <img src="assets/img/img-systemdev/key.png" alt="" class="img img-responsive">
                         </div>
                     </div>
                     <div class="col-md-8">
                         <div class="row">
                             <div class="col-md-12 mb-1">
                                 <h2 class="new2">Poin Utama Untuk Keberhasilan Pengembangan Sistem Web</h2>
                                 <h4>
                                     LOGIQUE selalu memberikan layanan yang optimal dengan memprioritaskan kualitas terbaik bagi
                                     seluruh klien kami.
                                     Hal ini dikarenakan LOGIQUE mempunyai 3 poin kunci yang merupakan esensi utama dalam
                                     keberhasilan suatu proyek.
                                 </h4>
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-md-12 mb-1">
                                 <h4 class="bold">Pengalaman</h4>
                                 <h4 class="">
                                     LOGIQUE telah menangani lebih dari 200 proyek dari berbagai bidang industri di Indonesia.
                                     Pengalaman ini berlaku untuk setiap proses, seperti penjadwalan, penentuan kebutuhan, desain
                                     infrastruktur, penyebaran, serta pelatihan pengguna.
                                 </h4>
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-md-12 mb-1">
                                 <h4 class="bold">Kecepatan dan Fleksibilitas</h4>
                                 <h4 class="">
                                     Bisnis berkembang semakin cepat.
                                     Jika untuk mengembangkan suatu sistem membutuhkan waktu selama 6 bulan atau 1 tahun, maka
                                     bisnis tidak akan berkembang karena tidak mengikuti perubahan yang terjadi.
                                     LOGIQUE mengutamakan kecepatan.
                                     Memang proses kesepakatan membutuhkan waktu, namun akan membuat Anda selangkah lebih maju
                                     dibandingkan kompetitor Anda.
                                 </h4>
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-md-12 mb-1">
                                 <h4 class="bold">Kualitas & Keamanan</h4>
                                 <h4 class="">
                                     Dengan proses pengerjaan yang sangat cepat, kualitas tetap tidak boleh dikorbankan.
                                     Jika terdapat sedikit masalah, maka pemrograman akan mendapatkan maintenance sesuai dengan
                                     standar pengembangan.
                                     Kami akan memastikan bahwa sistem yang kami kembangkan akan kami serahkan setelah
                                     meminimalkan risiko kerentanan keamanan yang mungkin terjadi.
                                 </h4>
                             </div>
                         </div>
                     </div>
                     <div class="col-md-12">
                         <div class="text-center btn-container-contact">
                             <a href="/hubungi-kami.php" class="btn btn-contact-us-black">
                                 Anda butuh pengembangan dan pengoperasian sistem? Jangan pernah ragu untuk menghubungi kami!
                             </a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>

     <section class="tahap-pemesanan-2 hidden-xs" style="padding: 2em"></section>
     <?php include '../footer.php'; ?>

     <section class="tahap-pemesanan-2 text-center hidden-md hidden-lg" style="padding: 2em">Copyright 2018 Logique</section>

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
         byRow: false
     });
     </script>
 </body>

 </html>
