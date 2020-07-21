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
     <meta property="og:image" content="https://www.logique.co.id/img/ogimg/layanan.png">
     <meta property="og:description"
         content="LOGIQUE menyediakan layanan jasa pembuatan sistem web dengan teknologi terkini, perencanaan infrastruktur, sistem keamanan, dan kecepatan. Dalam pembuatan dan pengembangan sistem web ini, kami terus meningkatkan dan mengembangkan hasil yang didapat. Segera hubungi LOGIQUE.">
     <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
     
   <!--  <script type="text/javascript" src="//script.crazyegg.com/pages/scripts/0096/6080.js" async="async"></script> -->
    <title>Jasa Pembuatan Sistem Web | Pengembangan Sistem Web | LOGIQUE</title>
     <link href="/css/bootstrap.min.css" rel="stylesheet">
     <link href="/css/slick.css" rel="stylesheet">
     <link href="/css/style.css" rel="stylesheet">
     <link href="assets/css/newstyle-systemdev.css" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;600;900&display=swap" rel="stylesheet">
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

 <body class="systedev-page">
 
     <div class="wrapper">
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
         <div class="container__" style="position:relative">
             <div class="row">
                 <div class="col-md-offset-1 col-md-10 text-center bg-header-txt text-center">
                     <h1 class="m-new">
                         Jasa Pengembangan Sistem Berbasis Web<br>Profesional
                     </h1>
                     <h3 class="  m-new">
                       <span class="logofont">LOGIQUE</span> adalah partner yang tepat untuk Anda, yang mampu memberikan jasa pembuatan sistem berbasis web terbaik yang berstandar internasional. Kami dapat membantu Anda untuk mengembangkan sistem berbasis web yang berkualitas dengan proses yang cepat serta
harga yang kompetitif. <p>Konsultasikan kebutuhan Anda dengan <span class="logofont">LOGIQUE</span> sekarang juga!</p>
                     </h3>
                     <a href="/hubungi-kami.php" class="btn-yellow">Contact Us <span class="icon"> <img src="pembuatan-sistem-web/img/newlayout/arrow-right.svg"></span></a>
                 </div>
             </div>
         </div>
     </header>
     <div class="breadcrumb-container">
            <div class="container">
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
     
    <section class="content-section first-part">
        <div class="container">
            <div class="section-desc">
                <div class="row">
                    <div class="ol-md-12 text-center">
                     <span class="logofont">LOGIQUE</span> which is committed to continuing to grow and follow trends in search engine optimization is able to become your business partner and is ready to increase significant business growth from brand development to sales acquisition.
                    </div>
                </div>
            </div>
            <div class="sec-content-part whyour-systemdev">
                <h2 class="sub-section-title text-center">Pengembangan Sistem Berbasis Web di <span class="logofont">LOGIQUE</span></h2>
                <div class="page-content">
                    <ul class="nav nav-pills">
                        <li class="active"><a data-toggle="pill" href="#fast">Cepat dan Fleksibel</a></li>
                        <li><a  data-toggle="pill" href="#save">Aman dan Berkualitas</a></li>
                        <li><a  data-toggle="pill" href="#expert">Berpengalaman</a></li>
                        <li><a  data-toggle="pill" href="#infra">Meliputi infrastruktur</a></li>
                    </ul>
                    <div class="tab-content">
                      <div id="fast" class="tab-pane fade in active">
                         <div class="row">
                            <div class="col-sm-6">
                                <p>Dalam proses pengembangan website, kami berpegang pada metode agile developement yang fleksibel dan cepat. Tim developer kami dapat beradaptasi dengan cepat terhadap perubahan agar sistem yang dikembangkan tetap berkualitas serta sesuai dengan kebutuhan yang dinamis.</p>
                            </div>
                            <div class="col-sm-6 text-center">
                                <img src="pembuatan-sistem-web/img/newlayout/laptop.jpg">
                            </div>
                         </div>
                      </div>
                      <div id="save" class="tab-pane fade">
                        <div class="row">
                            <div class="col-sm-6">
                                <p>Semua website kami kembangkan dengan sistem keamanan tinggi. Kami akan melakukan sejumlah pengujian keamanan sebelum sistem diserahkan ke klien. Kami juga melakukan penetration testing untuk mengurangi risiko serangan cyber seperti SQL injection, path traversal, dan x-site scripting.</p>
                                <a href="#" class="btn-yellow">Pelajari Layanan Pentration Testing</a>

                            </div>
                            <div class="col-sm-6 text-center">
                                <img src="pembuatan-sistem-web/img/newlayout/laptop.jpg">
                            </div>
                         </div>
                      </div>
                      <div id="expert" class="tab-pane fade">
                        <div class="row">
                            <div class="col-sm-6">
                                <p>Kami berpengalaman dalam memberikan jasa pembuatan sistem berbasis web untuk banyak klien internasional dan lokal berskala besar khususnya dalam industri otomotif, lelang, dan e-commerce. Adapun industri lainnya yang kami bantu termasuk asuransi, finansial, pariwisata, manufaktur, dan startup-startup digital. Dengan pengalaman tersebut, kami dengan cepat memahami kebutuhan bisnis dan memberikan solusi terbaik untuk Anda. </p>
                            </div>
                            <div class="col-sm-6 text-center">
                                <img src="pembuatan-sistem-web/img/newlayout/laptop.jpg">
                            </div>
                         </div>
                      </div>
                      <div id="infra" class="tab-pane fade">
                       <div class="row">
                            <div class="col-sm-6">
                                <p>Kami dapat membantu Anda membangun dan merancang arsitektur server berbasis cloud di Indonesia dan luar negeri. Kami merupakan partner resmi dari AWS dan berpengalaman dalam konstruksi server cloud untuk AWS, GCP, serta Alibaba. Di era digital seperti saat ini, kami juga telah berhasil melakukan banyak migrasi sistem dan database dari server lokal ke dalam server cloud</p>
                            </div>
                            <div class="col-sm-6 text-center">
                                <img src="pembuatan-sistem-web/img/newlayout/laptop.jpg">
                            </div>
                         </div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="sec-content-part  service-opt">
                <h2 class="sub-section-title text-center">Kami Memiliki Pilihan Layanan Pembuatan Sistem Berbasis Web <br>yang Sesuai dengan Kebutuhan Anda</h2>
                <div class="page-content skema-list">
                    <div class="row rowflex">
                        <div class="col-sm-6">
                            <div class="skema-content">
                                <h3><span class="number">1.</span> Skema Proyek</h3>
                                <p>Proses pengembangan website akan berjalan sesuai dengan kontrak yang telah disepakati. Tipe ini sesuai untuk proyek pengembangan website dengan kebutuhan yang sudah jelas. Biasanya kami akan merekomendasikan metode Agile Development dalam pengerjaannya.</p>
                            </div>
                        </div> 
                        <div class="col-sm-6">
                            <div class="skema-img">
                                <img src="pembuatan-sistem-web/img/newlayout/skemaproyek.png">
                            </div>
                        </div>
                    </div>
                    <div class="row rowflex">
                        <div class="col-sm-6">
                            <div class="skema-img">
                                <img src="pembuatan-sistem-web/img/newlayout/skemaresources.png">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="skema-content">
                            <h3><span class="number">2.</span> Skema Berbasis Resource</h3>
                            <p>PTipe ini dapat dipilih jika Anda ingin segera menjalankan proses pengembangan sistem namun work space, konsep, atau kebutuhan lain yang diperlukan masih belum ditetapkan. Anda dapat memulai dengan menyewa Business Analyst yang dilanjutkan dengan Designer dan Developer selama proses pengembangan sistem berbasis web.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row rowflex">
                        <div class="col-sm-6">
                            <div class="skema-content">
                            <h3><span class="number">3.</span> Skema Pengembangan dengan Tarif Tetap</h3>
                            <p>Setiap bulannya kami akan mengerjakan task prioritas sesuai dengan jumlah hari kerja yang telah ditentukan. Tipe pengembangan ini sesuai untuk proyek maintenance (pemeliharaan website/sistem) atau proyek pengembangan lanjutan untuk sistem yang sudah berjalan.</p>
                            </div>
                        </div> 
                        <div class="col-sm-6">
                             <div class="skema-img">
                                <img src="pembuatan-sistem-web/img/newlayout/skemapengembangan.png">
                            </div>
                        </div>
                    </div>
                    <div class="row rowflex">
                        <div class="col-sm-6">
                            <div class="skema-img">
                                <img src="pembuatan-sistem-web/img/newlayout/skemaoutsource.png">
                            </div>
                        </div> 
                        <div class="col-sm-6">
                            <div class="skema-content">
                            <h3><span class="number">4.</span> Skema Outsource</h3>
                            <p>Kami juga dapat memberikan layanan outsource untuk Developer, Designer, atau Tester  yang dapat bekerja langsung di tempat Anda jika perusahaan Anda memiliki kebutuhan khusus.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    <section class="content-section second-part whyus-section">
        <div class="container">
            <div class="sec-content-part">
                <h2 class="text-center sub-section-title">Mengapa harus memilih <span class="logofont">LOGIQUE</span> ?</h2>
                <div class="page-content whyus-accordion">
                    <div class="panel-group" id="accordion">
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#proteam" class="actives">
                            <span class="number">1.</span>
                            Memiliki tim profesional</a>
                          </h4>
                        </div>
                        <div id="proteam" class="panel-collapse collapse in">
                          <div class="panel-body">Untuk menghasilkan kinerja terbaik, kami membentuk tim dengan kemampuan dan keterampilan tinggi pada masing-masing bidang. Sampai bulan Juni 2020, kami memiliki lebih dari 60 karyawan yang terdiri dari developer, software tester, security specialist, designer, SEO, content writer, social media specialist, dan staff digital marketing. Tim kami akan bekerja sama untuk memberikan hasil yang terbaik untuk Anda. Sebagian besar proyek yang kami tangani dikerjakan tanpa outsourcing, namun jika memang diperlukan kami dapat bekerja sama dengan spesialis dari pihak ketiga.</div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#komunikatif">
                            <span class="number">2.</span> Tim yang komunikatif dan mudah dijangkau</a>
                          </h4>
                        </div>
                        <div id="komunikatif" class="panel-collapse collapse">
                          <div class="panel-body">Tim konsultan kami bertanggung jawab untuk selalu berkomunikasi dengan manager proyek Anda. Kami akan mendalami apa yang menjadi kebutuhan bisnis Anda sehingga solusi yang kami berikan dapat sesuai dan tepat sasaran. Anda tidak perlu khawatir dengan istilah-istiah teknis yang rumit karena kami akan menjelaskannya secara sederhana sampai Anda benar-benar memahaminya.</div>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#suggestion">
                             <span class="number">3.</span>Memberikan saran dan improvement untuk perusahaan Anda</a>
                          </h4>
                        </div>
                        <div id="suggestion" class="panel-collapse collapse">
                          <div class="panel-body"><p>Tujuan dari pemanfaatan dan pengembangan sistem web adalah untuk meningkatkan dan mengembangkan bisnis. Terkadang, perusahaan mengalami kesulitan untuk memahami masalah dalam bisnisnya sehingga tidak menemukan solusi yang tepat. Dengan pengalaman yang kami miliki, kami dapat membantu menyelesaikannya. <p>
<p>Kami akan mencari sumber masalah yang terjadi dan berbagi saran terbaik untuk mengatasinya. Kami akan berfikir dari sudut pandang klien ketika memberi saran untuk penggunaan dan pemanfaatan sistem web agar lebih optimal.</p>
</div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <section class="content-section third-part">
        <div class="container">
             <div class="sec-content-part unsupport-service">
                <h2 class="sub-section-title text-center">Layanan yang belum kami dukung untuk saat ini</h2>
                <div class="page-content">
                    <div class="row rowflex">
                        <div class="col-sm-6">
                            <div class="unsupport1 unsupport-content">
                                <h3><div>Implementasi Paket Software</div></h3>
                                <div class="unsupport-icon  text-center">
                                     <img src="pembuatan-sistem-web/img/newlayout/unsupport-1.svg">
                                </div>
                                <div  class="unsupport-info">
                                    Kami mengutamakan pengembangan sistem berbasis web dari awal yang optimal sesuai dengan tujuan dan kebutuhan bisnis Anda. Dengan menggunakan layanan kami yang berbasis open source framework, Anda akan mendapatkan sistem berbasis web dalam waktu yang singkat tanpa harus menggunakan paket software yang mahal (<i>SAP, Microsoft Dynamics, dan SalesForce</i>).
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="unsupport2 unsupport-content">
                                <h3>Hanya mengembangkan bagian spesifik dari proyek berskala besar</h3>
                                <div class="unsupport-icon text-center">
                                     <img src="pembuatan-sistem-web/img/newlayout/unsupport-2.svg">
                                </div>
                                <div class="unsupport-info">
                                    Kami memiliki kemampuan dalam manajemen proyek, pemeliharaan, dan perbaikan sistem. Oleh karenanya, sulit bagi kami jika hanya harus fokus untuk mengembangkan bagian tertentu dalam suatu proyek. Pada proyek berskala besar, biasanya lokasi untuk pengembangan sistem juga sudah ditentukan sehingga bertentangan dengan cara kerja kami yang mengutamakan efisiensi waktu dan tempat.
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="text-center unsupport-desc">
                        Jika Anda mempercayakan manajemen proyek secara keseluruhan kepada <span class="logofont">LOGIQUE</span>, maka Anda dapat memimpin proyek menuju bisnis yang lebih sukses dengan cara yang cepat dan fleksibel.
                        
                    </div>
                   
                </div>
            </div>
             <div class="sec-content-part studycase">
                <h2 class="sub-section-title text-center">Studi Kasus</h2>
                <div class="page-content">
                    <div class="row rowflex nogutter">
                        <div class="col-sm-6 ">
                            <div class="img-slide-content">
                            <div class="sliderimg-studycase">
                                <div class="slider-item" style="background-image: url(pembuatan-sistem-web/img/newlayout/jba-img.jpg);">
                                    <div class="company-studycase">
                                        <h3>JBA Indonesia <br>Sistem Manajemen Lelang</h3>
                                     Perusahaan lelang mobil dan motor terbesar di Indonesia.
                                    </div>
                                    <div class="technology-studycase">
                                        <strong>Bahasa Pemograman : </strong><br>
                                     PHP, NodeJS, SocketIO, Android Native
                                    </div>

                                    <a href="/case-study/jba-auction-system/" class="btn-yellow">
                                        Pelajari lebih lanjut
                                    </a>
                                </div>
                                <div class="slider-item" style="background: url(pembuatan-sistem-web/img/newlayout/sinarmas-img.jpg);">
                                    <div class="company-studycase">
                                        <h3>Sinarmas Land</h3>
                                        <div>Online Recruitment system</div>
                                    </div>
                                    <div class="technology-studycase">
                                        <strong>Bahasa Pemograman :</strong><br>
                                     PHP, NodeJS, SocketIO, Android Native
                                    </div>
                                    
                                </div>
                                <div class="slider-item" style="background: url(pembuatan-sistem-web/img/newlayout/weeo-img.jpg);">
                                    <div class="company-studycase">
                                        <h3>Weeo</h3>
                                        <div>Real time vehicle monitoring mobile apps</div>
                                    </div>
                                    <div class="technology-studycase">
                                        <strong>Teknologi utama: </strong><br>
                                        HTML5/CSS3, .Net Framework, SQL Server, Integrasi LDAP dan SAP
                                    </div> 
                                </div>
                            </div>
                            </div> 
                        </div>
                        <div class="col-sm-6  ">
                            <div class="studycase-content text-slide-content">
                                <div class="slidertext-studycase">
                                    <div class="slider2-item">
                                    Kami telah membantu mengembangkan banyak sistem berbasis web, aplikasi dan website untuk sistem inti perusahaan, aplikasi bidding, lelang online, aplikasi inspeksi, sistem keuangan, dan masih banyak lagi. Sistem memiliki fungsi yang sangat penting, maka pengembangan sistem harus terhindar dari kesalahan. Berusaha menyelesaikan proyek dengan cepat, kami juga selalu mengadakan pertemuan antara tim kami dengan tim JBA untuk mengoptimalkan sistem.
                                    </div>
                                    <div class="slider2-item">
                                    Dalam waktu 7 bulan, kami berhasil mengembangkan sistem berbasis web untuk Sinar Mas Land. Sistem ini berfungsi sebagai sistem rekrutmen dan tes psikologi online untuk mempermudah proses seleksi karyawan. Sistem juga dikembangkan dengan tingkat keamanan yang tinggi untuk melindungi data pribadi milik pelamar. 
                                    </div>
                                    <div class="slider2-item">
                                    Kami mengembangkan aplikasi seluler untuk monitoring kendaraan secara real time. Dilengkapi dengan peta digital maka pemilik kendaraan, dealer, atau klien dapat memantau kondisi kendaraan secara langsung dari perangkat seluler mereka.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sec-content-part success-service">
                <h2 class="sub-section-title text-center">Pencapaian Pengembangan Sistem Kami Lainnya</h2>
                <div class="page-content">
                    <div class="success-service-list">
                        <div class="row rowflex col10">
                            <div class="col-sm-3">
                                <div class="modal fade modal-achivement" id="achievementmodal1" tabindex="-1" role="dialog" aria-labelledby="achievementLabel1" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title text-center" id="achievementLabel1">Manajemen Poin Bermanfaat & Pengembangan <br>Sistem E-Commerce.</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <img src="pembuatan-sistem-web/img/newlayout/icon-close.svg"> 
                                        </button>
                                      </div>
                                      <div class="subheader">
                                          6 bulan, AWS, Linux, MySQL, PHP Framework
                                      </div>
                                      <div class="modal-body">
                                        <p>Merupakan sistem berbasis web yang digunakan untuk menyelenggarakan program poin insentif bagi karyawan perusahaan client mereka. Sistem ini terdiri dari beberapa sub sistem yang terintegrasi, yaitu: sistem pemasok (supplier), sistem pengguna (users), dan admin penyedia jasa.</p>
                                        <p>Pengembangan sistem ini memakan waktu selama 6 bulan. Mengusung platform PHP dengan framework pilihan, database MySQL, dan hosting pada Linux server pada layanan cloud AWS, sistem ini terbukti telah mengakomodir kebutuhan bisnis program insentif point bagi karyawan perusahaan.</p>
                                        <p>Agar menghasilkan sistem dengan performa dan stabilitas tinggi, kami melakukan pengembangan dengan pendekatan efisiensi pada layer aplikasi dan layer database. Kemudian pada sisi infrastruktur server, kami telah menerapkan arsitektur server modern dan memanfaatkan fitur autoscaling dan loadbalancing dari AWS. Dengan begitu, meskipun saat ini sudah mendapat lebih dari 10.000 pengguna aktif yang tersebar di 3 sub sistem, performa sistem tetap stabil dan terjaga.</p>
                                      </div>
                                       
                                    </div>
                                  </div>
                                </div>
                                <div class="success-item scitem1">
                                    <div class="icon-container"><img src="pembuatan-sistem-web/img/newlayout/icon-scitem1.svg"></div>
                                    <div class="scitem-content">
                                        <h3>Manajemen Poin & Pengembangan Sistem <br>E-Commerce.</h3>
                                        <p>6 bulan, AWS, Linux, MySQL, PHP Framework</p>
                                    </div>
                                    <a href="javascript:void(0)" class="more-icon" data-toggle="modal" data-target="#achievementmodal1">  <img src="pembuatan-sistem-web/img/newlayout/arrow-forward.svg"> </a>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="modal fade modal-achivement" id="achievementmodal2" tabindex="-1" role="dialog" aria-labelledby="achievementLabel2" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title text-center" id="achievementLabel2">Pengembangan <br>E-Commerce untuk Perusahaan MLM.</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <img src="pembuatan-sistem-web/img/newlayout/icon-close.svg"> 
                                        </button>
                                      </div>
                                      <div class="subheader">
                                          6 bulan, AWS, Linux, MySQL, PHP Framework
                                      </div>
                                      <div class="modal-body">
                                        <p>Sistem e-commerce MLM dengan teknologi berbasis web. Terdiri dari 3 modul, yaitu: modul pengelolaan oleh admin, modul distributor, dan modul customer. Sistem ini sudah dilengkapi dengan fitur perhitungan ongkos kirim, perhitungan margin keuntungan distributor, manajemen saldo distributor dan user, pendaftaran online, uang elektronik (e-money), serta pembelian pulsa secara online. Dengan dukungan integrasi dengan layanan payment gateway, customer dapat melakukan transaksi dengan kartu kredit dan virtual account. Sistem ini tergolong cukup kompleks. Serangkaian proses pengembangan memakan waktu selama 6 bulan.</p>
                                      </div>
                                       
                                    </div>
                                  </div>
                                </div>
                                <div class="success-item scitem1">
                                    <div class="icon-container"><img src="pembuatan-sistem-web/img/newlayout/icon-scitem2.svg"></div>
                                    <div class="scitem-content">
                                        <h3>Pengembangan <br>E-Commerce untuk Perusahaan MLM.</h3>
                                        <p>6 bulan, AWS, Linux, MySQL, PHP Framework</p>
                                    </div>
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#achievementmodal2" class="more-icon">  <img src="pembuatan-sistem-web/img/newlayout/arrow-forward.svg"> </a>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="modal fade modal-achivement" id="achievementmodal3" tabindex="-1" role="dialog" aria-labelledby="achievementLabel3" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title text-center" id="achievementLabel3">Sistem Pengembangan Manajemen <br>Lelang Kendaraan.</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <img src="pembuatan-sistem-web/img/newlayout/icon-close.svg"> 
                                        </button>
                                      </div>
                                      <div class="subheader">
                                          6 bulan, AWS, Linux, MySQL, PHP Framework, Node.js
                                      </div>
                                      <div class="modal-body">
                                        <p>Merupakan sistem lelang otomotif dengan tingkat kompleksitas tinggi. Terdiri dari sistem lelang online terintegrasi, sistem manajemen stok inventaris objek lelang, sistem keuangan, serta terintegrasi dengan sistem inspeksi kendaraan dan aplikasi bidding mobile. Sistem ini terintegrasi dengan core system dan sistem pendukung lainnya, sehingga customer dapat menikmati pengalaman mengikuti lelang secara realtime, baik melalui browser desktop maupun via mobile apps.</p>
                                        <p>Sistem ini dikembangkan dengan platform PHP dengan framework pilihan, terintegrasi dengan teknologi node.js, serta menggunakan database MySQL. Dengan metode manajemen proyek yang efektif, kami berhasil mengembangkan aplikasi ini dalam waktu 6 bulan. Performa sistem ini cukup kritikal. Dengan desain arsitektur aplikasi yang baik, serta rancangan arsitektur server tingkat lanjut, performa sistem ini terbilang sangat stabil, meskipun aktivitas user pada sistem ini sudah sangat aktif.</p>
                                      </div>
                                       
                                    </div>
                                  </div>
                                </div>
                                <div class="success-item scitem1">
                                    <div class="icon-container"><img src="pembuatan-sistem-web/img/newlayout/icon-scitem3.svg"></div>
                                    <div class="scitem-content">
                                        <h3>Sistem Pengembangan Manajemen Lelang Kendaraan.</h3>
                                        <p>6 bulan, AWS, Linux, MySQL, PHP Framework, Node.js</p>
                                    </div>
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#achievementmodal3" class="more-icon">  <img src="pembuatan-sistem-web/img/newlayout/arrow-forward.svg"> </a>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="modal fade modal-achivement" id="achievementmodal4" tabindex="-1" role="dialog" aria-labelledby="achievementLabel4" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title text-center" id="achievementLabel4">Pengembangan Aplikasi <br>(Penawaran Lelang / Bidding di Android).</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <img src="pembuatan-sistem-web/img/newlayout/icon-close.svg"> 
                                        </button>
                                      </div>
                                      <div class="subheader">
                                          2 bulan, Android, node.js, JAVA, AWS
                                      </div>
                                      <div class="modal-body">
                                        <p>Aplikasi berbasis android yang kami rancang untuk memudahkan customer dalam mengikuti lelang online secara realtime. Integrasi platform android dengan node.js, serta desain UI/UX yang baik, menghadirkan pengalaman seperti mengikuti lelang secara langsung di lokasi balai lelang. Dengan dukungan design API berperforma tinggi, dan hosting server berplatform Linux, serta arsitektur server yang telah mengadopsi fitur autoscaling dan loadbalancing dari AWS, maka performa aplikasi bidding ini tidak diragukan lagi.</p>
                                      </div>
                                       
                                    </div>
                                  </div>
                                </div>
                                <div class="success-item scitem1">
                                    <div class="icon-container"><img src="pembuatan-sistem-web/img/newlayout/icon-scitem4.svg"></div>
                                    <div class="scitem-content">
                                        <h3>Pengembangan Aplikasi  (Penawaran Lelang / Bidding di Android).</h3>
                                        <p>2 bulan, Android, node.js, JAVA, AWS</p>
                                    </div>
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#achievementmodal4"  class="more-icon">  <img src="pembuatan-sistem-web/img/newlayout/arrow-forward.svg"> </a>
                                </div>
                            </div>
                        </div>
                        <div class="row rowflex col10">
                            <div class="col-sm-3">
                                 <div class="modal fade modal-achivement" id="achievementmodal5" tabindex="-1" role="dialog" aria-labelledby="achievementLabel5" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title text-center" id="achievementLabel5">Pengembangan Aplikasi <br>(Penawaran Lelang / Bidding di Android).</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <img src="pembuatan-sistem-web/img/newlayout/icon-close.svg"> 
                                        </button>
                                      </div>
                                      <div class="subheader">
                                          2 bulan, Android, node.js, JAVA, AWS
                                      </div>
                                      <div class="modal-body">
                                        <p>Aplikasi berbasis android yang kami rancang untuk memudahkan customer dalam mengikuti lelang online secara realtime. Integrasi platform android dengan node.js, serta desain UI/UX yang baik, menghadirkan pengalaman seperti mengikuti lelang secara langsung di lokasi balai lelang. Dengan dukungan design API berperforma tinggi, dan hosting server berplatform Linux, serta arsitektur server yang telah mengadopsi fitur autoscaling dan loadbalancing dari AWS, maka performa aplikasi bidding ini tidak diragukan lagi.</p>
                                      </div>
                                       
                                    </div>
                                  </div>
                                </div>
                                <div class="success-item scitem1">
                                    <div class="icon-container"><img src="pembuatan-sistem-web/img/newlayout/icon-scitem5.svg"></div>
                                    <div class="scitem-content">
                                        <h3>Aplikasi Mobile (Sistem Inspeksi/Penilaian Kendaraan).</h3>
                                        <p>4 bulan, Android, node.js, JAVA, AWS</p>
                                    </div>
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#achievementmodal5"  class="more-icon">  <img src="pembuatan-sistem-web/img/newlayout/arrow-forward.svg"> </a>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="modal fade modal-achivement" id="achievementmodal6" tabindex="-1" role="dialog" aria-labelledby="achievementLabel6" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title text-center" id="achievementLabel6">Sistem CRM untuk Jasa Jalan Kendaraan Bermotor.</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <img src="pembuatan-sistem-web/img/newlayout/icon-close.svg"> 
                                        </button>
                                      </div>
                                      <div class="subheader">
                                          3 bulan, PHP Framework, Payment Gateway, AWS
                                      </div>
                                      <div class="modal-body">
                                        <p>Merupakan sistem CRM untuk asuransi motor. Dengan sistem ini, tim admin dapat dengan mudah mengelola data customer, mengelola perpanjangan periode asuransi, mengelola pembayaran polis, mengelola dealer partner, mengelola harga polis, serta mengelola data klaim asuransi dari customer. Sementara bagi customer, sistem ini memberikan kemudahan dalam hal permintaan perpanjangan asuransi, serta perencanaan asuransi dengan melakukan simulasi harga premi berdasarkan harga kendaraan.<p> 
                                        <p>Sistem ini dibangun dengan teknologi PHP dengan platform pilihan, HTML-CSS3, Javascript, JQuery/Ajax, serta database MySQL. Sistem ini sudah terintegrasi dengan layanan payment gateway dari penyedia layanan terkemuka, sehingga memudahkan customer dalam bertransaksi dengan menggunakan kartu kredit dan uang elektronik.</p>
                                      </div>
                                       
                                    </div>
                                  </div>
                                </div>
                                <div class="success-item scitem1">
                                    <div class="icon-container"><img src="pembuatan-sistem-web/img/newlayout/icon-scitem2.svg"></div>
                                    <div class="scitem-content">
                                        <h3>Sistem CRM untuk Jasa Jalan Kendaraan Bermotor.</h3>
                                        <p>3 bulan, PHP Framework, Payment Gateway, AWS</p>
                                    </div>
                                    <a  href="javascript:void(0)" data-toggle="modal" data-target="#achievementmodal6"  class="more-icon">  <img src="pembuatan-sistem-web/img/newlayout/arrow-forward.svg"> </a>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="modal fade modal-achivement" id="achievementmodal7" tabindex="-1" role="dialog" aria-labelledby="achievementLabel7" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title text-center" id="achievementLabel7">Sistem CRM untuk Pembeli Lelang.</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <img src="pembuatan-sistem-web/img/newlayout/icon-close.svg"> 
                                        </button>
                                      </div>
                                      <div class="subheader">
                                          2 bulan, PHP Framework, MySQL, AWS
                                      </div>
                                      <div class="modal-body">
                                        <p>Merupakan sistem CRM bagi customer perusahaan lelang, di mana customer dapat melakukan pengecekan tagihan, mendapatkan informasi penting seperti riwayat keikursertaan lelang, serta mengelola point reward yang mereka dapatkan dari transaksi pembelian yang telah dilakukan. Sistem ini dikembangkan dengan platform PHP dengan framework pilihan, serta menggunakan database MySQL. Customer bisa mendapatkan informasi yang dibutuhkan secara realtime, karena sistem ini terkoneksi dengan core system melalui secured-API.</p>
                                      </div>
                                       
                                    </div>
                                  </div>
                                </div>
                                <div class="success-item scitem1">
                                    <div class="icon-container"><img src="pembuatan-sistem-web/img/newlayout/icon-scitem3.svg"></div>
                                    <div class="scitem-content">
                                        <h3>Sistem CRM untuk Pembeli Lelang.</h3>
                                        <p>2 bulan, PHP Framework, MySQL, AWS</p>
                                    </div>
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#achievementmodal7" class="more-icon">  <img src="pembuatan-sistem-web/img/newlayout/arrow-forward.svg"> </a>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <a href="#">
                                <div class="success-item sc-seeall text-center"> 
                                    <div class="center-btn" style=""> 
                                        <span class="other-success-item">  <img src="pembuatan-sistem-web/img/newlayout/arrow-forward-yellow.svg"> </span><br>
                                        Lihat lebih banyak
                                    </div>    
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="content-section fourth-part">
         <div class="sec-content-part testimonial">
            <h2 class="sub-section-title text-center">Testimoni dari Klien</h2>
            <div class="page-content">
                <div class="testimonial-slider">
                    <div class="testislider-item">
                        <div class="client-container">
                            <ul class="clientinfo">
                                <li class="client-photo">
                                    <img src="pembuatan-sistem-web/img/newlayout/sample-clinetphoto.png">
                                </li>
                                <li class="client-desc">
                                    <span class="client-name">Axel, 27</span>
                                    <span class="client-title">Project Manager</span>
                                </li>
                            </ul>
                            <div class="client-testimoni">
                                Sebagai kepala departemen IT, saya telah menghandle banyak proyek pengembangan sistem. Sejauh ini, saya belum pernah menemukan perusahaan development yang dapat bekerja sefleksible <span class="logofont">LOGIQUE</span>. Sistem yang dihasilkan pun… memiliki kualitas yang tinggi. … 
                            </div>
                            <a href="#" class="more-icon">  <img src="pembuatan-sistem-web/img/newlayout/arrow-right.svg"> </a>
                        </div>
                    </div>
                    <div class="testislider-item">
                         <div class="client-container">
                            <ul class="clientinfo">
                                <li class="client-photo">
                                    <img src="pembuatan-sistem-web/img/newlayout/sample-clinetphoto.png">
                                </li>
                                <li class="client-desc">
                                    <span class="client-name">Axel, 27</span>
                                    <span class="client-title">Project Manager</span>
                                </li>
                            </ul>
                            <div class="client-testimoni">
                                Sebagai kepala departemen IT, saya telah menghandle banyak proyek pengembangan sistem. Sejauh ini, saya belum pernah menemukan perusahaan development yang dapat bekerja sefleksible <span class="logofont">LOGIQUE</span>. Sistem yang dihasilkan pun…  
                            </div>
                            <a href="#" class="more-icon">  <img src="pembuatan-sistem-web/img/newlayout/arrow-right.svg"> </a>
                        </div>
                    </div>
                    <div class="testislider-item">
                         <div class="client-container">
                            <ul class="clientinfo">
                                <li class="client-photo">
                                    <img src="pembuatan-sistem-web/img/newlayout/sample-clinetphoto.png">
                                </li>
                                <li class="client-desc">
                                    <span class="client-name">Axel, 27</span>
                                    <span class="client-title">Project Manager</span>
                                </li>
                            </ul>
                            <div class="client-testimoni">
                                Sebagai kepala departemen IT, saya telah menghandle banyak proyek pengembangan sistem. Sejauh ini, saya belum pernah menemukan perusahaan development yang dapat bekerja sefleksible <span class="logofont">LOGIQUE</span>. Sistem yang dihasilkan pun… memiliki kualitas yang tinggi. … 
                            </div>
                            <a href="#" class="more-icon">  <img src="pembuatan-sistem-web/img/newlayout/arrow-right.svg"> </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>   
    </section>
    <section class="content-section fifth-part">
        <div class="container">
            <div class="sec-content-part important-point">
                <h2 class="sub-section-title text-center">Poin penting untuk pengembangan sistem web yang berhasil!</h2>
                <div class="page-content importantpoint-list">
                    <div class="row rowflex col10">
                        <div class="col-sm-4">
                            <div class="importantpoint-item text-center">
                                <h3>Pengalaman</h3>
                                <div class="icon-container">
                                    <img src="pembuatan-sistem-web/img/newlayout/icon-point1.svg">
                                </div>
                                <div class="point-desc">
                                    <span class="logofont">LOGIQUE</span> memiliki banyak pengalaman dalam pengembangan sistem web di Indonesia. Kami akan memanfaatkan pengalaman tersebut untuk setiap proses pengembangan, mulai dari pembuatan jadwal, penentuan kebutuhan, pengembangan sistem, pengujian, desain infrastruktur, deployment, sampai training untuk user.
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="importantpoint-item text-center">
                                <h3>Kecepatan / fleksibilitas</h3>
                                <div class="icon-container">
                                    <img src="pembuatan-sistem-web/img/newlayout/icon-point2.svg">
                                </div>
                                <div class="point-desc">
                                    Persaingan bisnis bergerak semakin cepat setiap harinya. Jika pengembangan sistem berbasis web membutuhkan waktu lebih dari 6 bulan atau lebih, maka Anda akan kesulitan untuk mengikuti perkembangan bisnis yang sedang terjadi. Di <span class="logofont">LOGIQUE</span>, kecepatan adalah hal terpenting. Dengan metode agile development, maka kami dapat merespon dengan cepat dan fleksibel terhadap setiap perubahan.
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="importantpoint-item text-center">
                                <h3>Kualitas / keamanan</h3>
                                <div class="icon-container">
                                    <img src="pembuatan-sistem-web/img/newlayout/icon-point3.svg">
                                </div>
                                <div class="point-desc">
                                    Kualitas harus tetap diutamakan. Dengan melakukan pengembangan sesuai standar, kami akan selalu meminimalisir kesalahan dan mengoptimalkan pemeliharan sistem. Kami juga akan melakukan sejumlah pengujian untuk memastikan bahwa sistem memiliki tingkat keamanan yang tinggi.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="content-section sixth-part">
        <div class="sec-content-part contact-banner">
            <div class="page-content">
                <ul>
                    <li class="text-left">Hubungi kami sekarang untuk <br>pengembangan sistem yang optimal!<li>
                    <li>
                        <a href="/hubungi-kami.php" class="btn-yellow">Contact Us <span class="icon"> <img src="pembuatan-sistem-web/img/newlayout/arrow-right.svg"></span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="content-section seventh-part">
        <div class="container">
            <div class="sec-content-part usedtechnology">
                <h2 class="sub-section-title text-center">Bahasa pemrograman yang kami gunakan</h2>
                <div class="page-content ">
                    <div class="row">
                        <div class="col-sm-6">Pengembangan web menggunakan framework PHP. Kami sangat baik dalam mengembangkan sistem menggunakan framework PHP seperti,
                        </div>
                        <div class="col-sm-6">
                            <ul class="techlist text-center">
                                <li>
                                    <div class="icon-container"><img src="pembuatan-sistem-web/img/newlayout/laravel.png"></div>
                                    Laravel
                                </li>
                                <li>
                                    <div class="icon-container"><img src="pembuatan-sistem-web/img/newlayout/symphony.png"></div>
                                    Symphony
                                </li>
                                <li>
                                    <div class="icon-container"><img src="pembuatan-sistem-web/img/newlayout/cakephp.png"></div>
                                    CakePHP
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <div class="whyphp">
            <div class="container">
                <div class="sec-content-part "> 
                     
                    <div class="page-content  text-center">
                        <p> Kami memiliki banyak programmer PHP berpengalaman sehingga banyak <br>pencapaian yang kami peroleh dengan sangat baik. 
                        </p>
                        <ul class="w3tech-info">
                            <li>
                               Menurut laporan <br>
                               <img src="pembuatan-sistem-web/img/newlayout/w3tech.png">
                            </li>
                            <li>
                                <img src="pembuatan-sistem-web/img/newlayout/arrow-right.svg">
                            </li>
                            <li>
                                <img src="pembuatan-sistem-web/img/newlayout/percentage.png"><br>
                                website didunia
                            </li>
                        </ul>
                        dibangun menggunakan bahasa pemrograman
                        <div class="img-contianer">
                            <img src="pembuatan-sistem-web/img/newlayout/phplogo.png">
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="othertech">
            <div class="container">
                <div class="sec-content-part ">
                 
                <div class="page-content text-center">
                    Meskipun beberapa orang beranggapan bahwa PHP sudah tua, namun bahasa pemrograman ini <b>masih menjadi pilihan utama</b> untuk mengembangkan sistem berbasis web karena kompatibilitasnya dengan banyak website serta ketersediaan operasional. 
                    <div class="img-container">
                        <img src="pembuatan-sistem-web/img/newlayout/web-img.svg">
                    </div>
                    <p>Selain itu, saat ini banyak CMS seperti Wordpress juga berjalan menggunakan <br>bahasa pemrograman PHP.</p>
                    <div class="jsfw-container">
                        <p>Pengembangan web menggunakan framework</p>
                            <div class="js-desc-continer">
                            <div class="row">
                                <div class=" col-md-3  col-sm-4 text-center">
                                    <img src="pembuatan-sistem-web/img/newlayout/logo-js.png"><br> 
                                    JavaScript
                                </div>
                                <div class="col-md-9  col-sm-8 text-left js-desc">
                                    Merupakan bahasa pemrograman yang juga digunakan dalam situs web. Bahasa pemrograman ini sangat diperlukan untuk meningkatkan usability atau kegunaan dari sebuah website. 
                                </div>
                            </div>
                        </div>
                        <p>
                            Selain mahir dalam pengembangan web menggunakan PHP dan JavaScript, <span class="logofont">LOGIQUE</span> juga sangat baik dalam pengembangan PWA menggunakan framework JavaScript seperti,
                        </p>
                        <ul class="jsframework framework-list">
                            <li><img src="pembuatan-sistem-web/img/newlayout/logo-react.png"> <br> React</li>
                            <li><img src="pembuatan-sistem-web/img/newlayout/logo-angular.png"> <br> Angular</li>
                            <li><img src="pembuatan-sistem-web/img/newlayout/logo-vue.png"> <br> Vue.js</li>
                        </ul>
                        <p>
                            <span class="logofont">LOGIQUE</span> juga memiliki kemampuan untuk membangun sistem berskala besar<br>dengan menggabungkan <b>Node.js dan Express.js.</b>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <section class="content-section sixth-part">
        <div class="sec-content-part contact-banner">
            <div class="page-content">
                <ul>
                    <li class="text-left">Hubungi kami sekarang untuk <br>pengembangan sistem yang optimal!<li>
                    <li>
                        <a href="/hubungi-kami.php" class="btn-yellow">Contact Us <span class="icon"> <img src="pembuatan-sistem-web/img/newlayout/arrow-right.svg"></span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="content-section eighth-part">
        <div class="container">
            <div class="sec-content-part  "> 
                <div class="page-content otherinfo-list">
                    <div class="row rowflex col10">
                        <div class="col-sm-4">
                            <div class="otherinfo-item  ">
                                <a href="/logique.php">
                                <img src="pembuatan-sistem-web/img/newlayout/img-about.jpg">
                                <div class="otherinfo-desc">
                                    <h3>About  <span class="icon"> <img src="pembuatan-sistem-web/img/newlayout/arrow-right.svg"></span></h3>
                                    <p><span class="logofont">LOGIQUE Digital Indonesia</span> adalah konsultan IT dan perusahaan pengembang sistem terkemuka Jakarta. </p>
                                </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                             <div class="otherinfo-item  ">
                                <a href="/portofolio.php">
                                <img src="pembuatan-sistem-web/img/newlayout/img-ourwork.jpg">
                                <div class="otherinfo-desc">
                                    <h3>Our Work  <span class="icon"> <img src="pembuatan-sistem-web/img/newlayout/arrow-right.svg"></span></h3>
                                    <p><span class="logofont">LOGIQUE</span> telah mengembangkan banyak Website, Aplikasi Berbasis Web dan Mobile App, serta memberikan  </p>
                                </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                             <div class="otherinfo-item  ">
                                <a href="#">
                                <img src="pembuatan-sistem-web/img/newlayout/img-faq.jpg">
                                <div class="otherinfo-desc">
                                    <h3>FAQ  <span class="icon"> <img src="pembuatan-sistem-web/img/newlayout/arrow-right.svg"></span></h3>
                                    <p>A streamlined web app that helps you create and collaborate in real-time on wireframes, mockups, diagrams and prototypes. </p>
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sec-content-part"> 
                 <h2 class="sub-section-title text-center">Other services</h2>
                <div class="page-content otherservice-list">
                    <div class="row col10">
                        <div class="col-sm-3">
                            <a href="/layanan/web-dev.php">
                                <img src="pembuatan-sistem-web/img/newlayout/img-febe.jpg">
                                <h3 class="text-center">Pengembangan / Pembaharuan Website</h3>
                                <p>
                                    Work remotely in the Cloud - anytime and on any device - without the hassle 
                                </p>
                            </a>
                        </div>
                        <div class="col-sm-3">
                             <a href="/layanan.php#dm_">
                               <img src="pembuatan-sistem-web/img/newlayout/img-webdis.jpg">
                                <h3 class="text-center">Digital Marketing</h3>
                                <p>
                                    Kami akan melakukan pemasaan website anda melalui berbagai platform marketing
                                </p>
                            </a>
                        </div>
                        <div class="col-sm-3">
                            <a href="/layanan.php#otherService_itConsultant">
                                <img src="pembuatan-sistem-web/img/newlayout/img-consultant.jpg">
                                <h3 class="text-center">Consultant</h3>
                                <p>
                                   Kami dapat menyediakan berbagai layanan konsultasi melalui "Indonesia x IT" 
                                </p>
                            </a>
                        </div>
                        <div class="col-sm-3">
                            <a href="/layanan/pembuatan-aplikasi-mobile.php">
                                <img src="pembuatan-sistem-web/img/newlayout/img-mobileapp.jpg">
                                <h3 class="text-center">Mobile Apps</h3>
                                <p>
                                    Kami menyediakan jasa pengembangan aplikasi Android/iOS secara komprehensif
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <section class="tahap-pemesanan-2 hidden-xs" style="padding: 2em"></section>
     <?php include '../footer.php'; ?>

     <section class="tahap-pemesanan-2 text-center hidden-md hidden-lg" style="padding: 2em">Copyright 2018 <span class="logofont">Logique</span></section>

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
         $('a[data-toggle="collapse"]').on('click', function () {   
            $('a[data-toggle="collapse"]').removeClass('actives');
            $(this).addClass('actives');
         });


     $('.min-h').matchHeight({
         byRow: false
     });
      $('.unsupport-content h3, .scitem-content h3').matchHeight({
         byRow: false
     });

     $('.slidertext-studycase').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      adaptiveHeight : true,
      asNavFor: '.sliderimg-studycase'
    });
    $('.sliderimg-studycase').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      asNavFor: '.slidertext-studycase',
      dots: true, 
      nextArrow :'<button type="button" class="slick-next"><img src="pembuatan-sistem-web/img/newlayout/arrow-right.svg"></button>' ,
      prevArrow : '<button type="button" class="slick-prev"><img src="pembuatan-sistem-web/img/newlayout/arrow-left.svg"></button>'
    });

    $('.testimonial-slider').slick({
          slidesToShow: 1,
          slidesToScroll: 1, 
          dots: false,
          arrows:true,
          centerMode: true,
          focusOnSelect: true,
          variableWidth: true, 
          autoplay: true,
          autoplaySpeed: 2000,
          nextArrow :'<button type="button" class="slick-next"><img src="pembuatan-sistem-web/img/newlayout/arrow-right.svg"></button>' ,
         prevArrow : '<button type="button" class="slick-prev"><img src="pembuatan-sistem-web/img/newlayout/arrow-left.svg"></button>',
          responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            variableWidth: false, 
            centerMode: false,
            focusOnSelect:false,
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
        });
     });
     </script>
 </body>

 </html>
