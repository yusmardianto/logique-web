 <?php 
require_once("form/fgcontact_dokodemo.php");

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
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=3.0">
    <meta name="description" content="Dokodemo-Kerja merupakan software atau desktop app dari LOGIQUE bagi karyawan kerja remote. Aplikasi ini mampu monitor dan kalkulasi jam kerja karyawan secara akurat, dilengkapi feature screencapture otomatis. Dengan begitu, perusahaan Anda menjadi lebih produktif.">
	<meta name="keywords" content="">
	<meta name="author" content="PT LOGIQUE DIGITAL INDONESIA ">
	<meta property="og:title" content="Kerja Remote | Kerja Dari Rumah | Dokodemo-Kerja | LOGIQUE">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Logique">
    <meta property="og:url" content="https://www.logique.co.id/produk/dokodemo-kerja.php">
    <meta property="og:image" content="https://www.logique.co.id/img/og-image.png">
    <meta property="og:description" content="Dokodemo-Kerja merupakan software atau desktop app dari LOGIQUE bagi karyawan kerja remote. Aplikasi ini mampu monitor dan kalkulasi jam kerja karyawan secara akurat, dilengkapi feature screencapture otomatis. Dengan begitu, perusahaan Anda menjadi lebih produktif.">
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <title>Kerja Remote | Kerja Dari Rumah | Dokodemo-Kerja | LOGIQUE</title>
	<link href="/css/bootstrap.min.css" rel="stylesheet">	 
    <link href="css/style_dokodemo.css" rel="stylesheet">
	<link href="/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
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

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-KT7GBKC');</script>
	<!-- End Google Tag Manager -->
</head>
	<body class="dokodemo">
		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KT7GBKC"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
		
		<header>
			<div class="nav-lp">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
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
								<a href="/tentang-kami.php">
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
								<a href="https://www.logique.co.id/blog/" target="_blank">
									<div class="img-blog"></div>
									Blog
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<nav class="navbar navbar-default navbar-dokdem">
				<div class="container">
				  <div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					  <span class="sr-only">Toggle navigation</span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">
						<img src="img/dokodemo-kerja/dokodemo-logo.png" alt="" class="img-responsive center-block">
					</a>
					<div class="pull-left visible-xs">
						<ul class="nav-lang">
							<li class="pull-left active">IND</li>
							<li class="pull-left"><a href="/en/product/dokodemo-kerja.php">ENG</a></li>
							<li class="pull-left"><a href="/jp/product/dokodemo-kerja.php">JPN</a></li>
						</ul>
					</div>
				  </div>
				  <div id="navbar" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
					<ul class="nav navbar-nav">
					  <li><a href="#introduction" class="smooth">Perkenalan</a></li>
					  <li><a href="#about" class="smooth">Tentang Dokodemo-Kerja</a></li>
					  <li><a href="#fitur" class="smooth">Fitur</a></li>　
					  <li><a href="#benefits" class="smooth li-mt">Keuntungan</a></li>　
					  <li><a href="#price" class="smooth li-mt">Harga</a></li>　
					  <li><a href="#divForm" class="smooth li-mt">Hubungi Kami</a></li>
					</ul>
					<a class="logique-logo-link" href="/" target="_blank"><img class="pull-right img-responsive center-block logo-logique-header" src="img/dokodemo-kerja/logo_logique.png"/></a>
					<div class="pull-right btn-lang">
						<ul class="nav-lang hidden-xs">
							<li class="pull-left active">IND</li>
							<li class="pull-left"><a href="/en/product/dokodemo-kerja.php">ENG</a></li>
							<li class="pull-left"><a href="/jp/product/dokodemo-kerja.php">JPN</a></li>
						</ul>
					</div>
				  </div><!--/.nav-collapse -->  
				</div><!--/.container-fluid -->
			</nav>
			<div class="container" id="introduction">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="div-top">
							<h1 class="anton title"> Solusi Kerja Fleksibel<br class="hidden-xs"/> yang Lebih Produktif</h1>
							<hr/>
							<p class="text-center">
								Setiap hari, kemacetan dan lamanya perjalanan menuju kantor menjadi salah satu penyebab stres bagi sebagian besar pekerja. Belum lagi jika sedang musim hujan, keterlambatan pun menjadi hal yang terpaksa dimaklumi. Akibatnya, produktivitas jadi menurun. Target perusahaan pun terpaksa ditunda. Jika saja karyawan bisa bekerja tanpa keterikatan waktu dan tempat, bukankah produktivitas akan meningkat, dan hal-hal di atas tidak perlu dipermasalahkan?
							</p>
						</div>
					</div>
				</div>
			</div>
		</header>
		<div class="bg-black" id="about">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="title">
							<span class="blue">Dokodemo-Kerja?</span><br/>
							<div class="quote">“</div>adalah solusi IT yang mampu mengatasinya.
						</div>
						<br/>
						<div class="hidden-xs"><br/><br/></div>
						<video width="100%" height="300" controls>
						   <source src="/produk/img/dokodemo-kerja/dokodemo-kerja.webm" type="video/webm" />
						</video><br/><br/>						
					</div>
					<div class="col-md-6 text-justify">
						<h2 class="title2">Apa Itu <span class="blue">Dokodemo-Kerja?</span></h2>
						<span class="blue">Dokodemo-Kerja</span> adalah sistem kerja profesional yang dibuat untuk para pekerja independen dan fleksibel, namun tetap ingin lebih dalam hal produktivitas kerja. Sistem kerja ini merupakan solusi terbaik bagi perusahaan agar dapat mengetahui secara detail kinerja dari seluruh karyawannya.<br/><br/>
						Dengan menggunakan sistem teknologi ini, perusahaan dapat menerapkan sistem kerja remote bagi karyawannya di mana pun dan kapan pun. Karyawan pun dibebaskan dari kejenuhan dan ketatnya suasana kerja dalam kantor.<br/><br/>
						Selain untuk karyawan dengan sistem <i>remote</i>, <span class="blue">Dokodemo-Kerja</span> ternyata juga dapat Anda pergunakan untuk memantau produktivitas karyawan di kantor. Selain untuk memantau pekerjaan, <span class="blue">Dokodemo-Kerja</span> juga dapat digunakan oleh HR dan Manajer sebagai salah satu syarat untuk menentukan kinerja para karyawan.
						<br/><br/>
						<div class="text-center">
							<a href="#divForm" class="smooth btn btn-coba">Coba Sekarang</a>
						</div>
						<br/>
					</div>
				</div>
				<br/>
				<div class="row visible-lg">
					<div class="col-md-12">
						<div class="poster-main screenshot-slide ">
						  <div class="poster-btn poster-prev-btn"></div>
						  <ul class="poster-list">
							<li class="poster-item"><img src="img/dokodemo-kerja/ss4.jpg"></li>
							<li class="poster-item"><img src="img/dokodemo-kerja/ss1.jpg"></li>
							<li class="poster-item"><img src="img/dokodemo-kerja/ss2.jpg"></li>
							<li class="poster-item"><img src="img/dokodemo-kerja/ss3.jpg"></li>
							<li class="poster-item"><img src="img/dokodemo-kerja/ss5.jpg"></li>
						  </ul>
						  <div class="poster-btn poster-next-btn"></div>
						</div>
					</div>
				</div>
				<div class="row hidden-lg">
					<div class="col-md-12">
						<div id="myCarousel" class="carousel slide" data-ride="carousel">
						  <!-- Wrapper for slides -->
						  <div class="carousel-inner">
							<div class="item active">
							  <img src="img/dokodemo-kerja/ss4.jpg" class="img-responsive center-block">
							</div>
							<div class="item">
							  <img src="img/dokodemo-kerja/ss1.jpg" class="img-responsive center-block">
							</div>
							<div class="item">
							  <img src="img/dokodemo-kerja/ss2.jpg" class="img-responsive center-block">
							</div>
							<div class="item">
							  <img src="img/dokodemo-kerja/ss3.jpg" class="img-responsive center-block">
							</div>
							<div class="item">
							  <img src="img/dokodemo-kerja/ss5.jpg" class="img-responsive center-block">
							</div>
						  </div>
						  <!-- Left and right controls -->
						  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left"></span>
							<span class="sr-only">Previous</span>
						  </a>
						  <a class="right carousel-control" href="#myCarousel" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right"></span>
							<span class="sr-only">Next</span>
						  </a>
						</div>
					</div>
				</div>
				<div class="visible-lg"><br/><br/></div>
			</div>
		</div>
		
		<div class="bg-yellow" id="fitur">
			<img src="img/dokodemo-kerja/image-fitur.png" class="image-fitur img-responsive"/>
			<div class="container-fluid">
				<div class="bg-old-yellow">
					<div class="row" style="margin:0">
						<div class="col-md-6 col-md-offset-6">
							<div class="bg-one-fitur">
								<div class="one-fitur" style="margin-bottom: 0;">
									<img src="img/dokodemo-kerja/fitur1.png" class="img-responsive"/>
									Melacak dan memantau tugas karyawan hanya dalam satu klik.<br/>
									<strong>Dokodemo-Kerja</strong> mengambil cuplikan layar (screen capture) aktivitas kerja karyawan pada layar perangkat komputernya dalam waktu yang acak (random) dan mengirimnya pada tim manajemen (administrator).
								</div>
							</div>
						</div>				
					</div>
				</div>				
				<div class="row" style="margin:0">
					<div class="col-md-6" style="padding: 0;">
						<div class="title-fitur anton">
							<span class="anton">Fitur</span><br/> Dokodemo-Kerja
						</div>
						<div class="dengan-fitur">
							<div class="quote">“</div>Dengan fitur-fitur tersebut, <strong>Dokodemo-Kerja</strong> dapat menjadi revolusi sistem kerja baru bagi perusahaan dan karyawan Anda. 
						</div>
					</div>
					<div class="col-md-6 one-fitur-btm">
						<div class="bg-one-fitur visible-sm visible-xs">
							<div class="one-fitur">
								<img src="img/dokodemo-kerja/fitur1.png" class="img-responsive"/>
								Melacak dan memantau tugas karyawan hanya dalam satu klik.<br/>
								<strong>Dokodemo-Kerja</strong> mengambil cuplikan layar (screen capture) aktivitas kerja karyawan pada layar perangkat komputernya dalam waktu yang acak (random) dan mengirimnya pada tim manajemen (administrator).
							</div>
						</div>
						<div class="bg-one-fitur">
							<div class="one-fitur">
								<img src="img/dokodemo-kerja/fitur2.png" class="img-responsive"/>
								Mendapatkan laporan waktu kerja karyawan secara mudah<br/>
								Mengkalkulasi total jam kerja para karyawan, termasuk penghitungan jam istirahat, secara akurat hanya dengan satu klik secara mudah karena semua berjalan sesuai dengan real time yang dilakukan oleh karyawan.
							</div>
						</div>
						<div class="bg-one-fitur">
							<div class="one-fitur">
								<img src="img/dokodemo-kerja/fitur3.png" class="img-responsive"/>
								Mengelola jam kerja karyawan<br/>
								Mengelola total jam kerja serta proyek atau konten yang dikerjakan oleh karyawan, sehingga mampu membuat perusahaan dapat menentukan target waktu yang bisa dicapai oleh para karyawannya.
							</div>
						</div>
						<div class="bg-one-fitur">
							<div class="one-fitur">
								<img src="img/dokodemo-kerja/fitur4.png" class="img-responsive"/>
								Melihat waktu kerja karyawan hanya dalam satu tampilan layar<br/>
								Menampilkan total jam kerja seluruh karyawan dalam satu tampilan layar, sehingga memudahkan perusahaan untuk menentukan kinerja dari seluruh karyawan yang ada di perusahaannya secara jujur dan transparan.
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- <div class="bg-why">
			<h2 class="title">Mengapa Memakai Dokodemo-Kerja?</h2>
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<ul class="fa-ul">
							<li><span class="fa-li"><i class="fa fa-circle"></i></span>Saat ini, cukup banyak karyawan yang bekerja sebagai freelance untuk menghemat waktu. Dokodemo-Kerja dapat membantu Anda mencatat jam kerja karyawan remote secara efektif dan efisien.</li>
							<li><span class="fa-li"><i class="fa fa-circle"></i></span>Dokodemo-Kerja dapat mempermudah Anda dalam memantau produktifitas karyawan yang bekerja dari jarak jauh.</li>
							<li><span class="fa-li"><i class="fa fa-circle"></i></span>Dokodemo-Kerja dapat membantu Anda dalam mengelola dan mengatur masalah kehadiran karyawan.</li>
							<li><span class="fa-li"><i class="fa fa-circle"></i></span>Dengan Dokodemo-Kerja, perusahaan dapat mendorong karyawan untuk lebih bersemangat dan produktif dalam bekerja.</li>
						</ul>
						<div class="text-center">
							<a href="#divForm" class="smooth btn btn-coba">Butuh Solusi yang Nyata?</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<h2 class="title-masalah anton">Masalah yang Sering Dihadapi</h2> -->
		<div class="bg-masalah1" id="benefits">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="pl-25">
							<div class="anton title-masalah1">Dokodemo-Kerja</div>
							<div class="kami-siap">Kami Siap Membantu Anda</div>
							<div class="desc-bantu">
								<div class="quote">“</div>
								<strong>Dokodemo-Kerja</strong> merupakan solusi sistem kerja yang menguntungkan, baik bagi karyawan maupun perusahaan. Dengan sistem kerja efisien, <strong>Dokodemo-Kerja</strong> bisa membantu perusahaan berkonsentrasi pada peningkatan produktivitas sekaligus memberikan fleksibilitas pada karyawannya.
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bg-masalah2">
			<div class="container">
				<div class="row">
					<div class="col-lg-offset-6 col-lg-6">
						<div class="pr-25" style="min-height: 185px;">
						<br/>
							<div class="blue2 font18"><strong class="font18">Mengapa harus Dokodemo-Kerja?</strong></div>
							<ul class="fa-ul">
								<li><span class="fa-li"><i class="fa fa-circle"></i></span>Mempermudah perusahaan dalam memantau produktivitas karyawan yang bekerja dengan sistem jarak jauh (<i>freelance</i>, <i>sistem remote</i>, dsb).</li>
								<li><span class="fa-li"><i class="fa fa-circle"></i></span>Membantu karyawan bekerja dengan fleksibel dan lebih produktif tanpa harus meninggalkan rumah.</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bg-masalah3">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="pl-25" style="min-height: 169px">
							<ul class="fa-ul">
								<li><span class="fa-li"><i class="fa fa-circle"></i></span>Mencegah karyawan mengisi laporan kerja yang tidak sesuai dengan kenyataannya.</li>
								<li><span class="fa-li"><i class="fa fa-circle"></i></span>Mempermudah pencatatan dan pengelolaan aktivitas dan jam kerja karyawan secara tepat.</li>
								<li><span class="fa-li"><i class="fa fa-circle"></i></span>Membantu mendorong karyawan untuk lebih bersemangat dalam bekerja dengan fleksibilitas waktu yang dimiliki.</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="div-masalah-new">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-2 col-md-8">
						<div class="title anton">Anda Seorang Manager dan Merasa Tertekan Karena Masalah-masalah Ini?</div>
						<br/>
					</div>
				</div>
				<div class="row">
					<div class="col-md-offset-1 col-md-10">
						<div class="list-masalah">Anda memiliki cukup banyak kantor dan tidak memiliki manager pada setiap kantor. Sulit bagi Anda untuk memantau pekerjaan karyawan dengan baik</div>
						<div class="list-masalah">Anda tidak dapat memastikan apakah mereka bekerja dengan cukup baik. Staff Anda berbeda lantai dan ruangan dengan Anda dan Anda juga seringkali keluar kantor.</div>
						<div class="list-masalah">Sulit untuk memantau jam kerja para karyawan. Anda menggunakan alat perekam kehadiran yang menggunakan sidik jari, namun masih terdapat celah dan kekurangan dari alat tersebut.</div>
						<div class="list-masalah">Beberapa karyawan menonton Youtube untuk waktu yang lama pada saat jam kerja.</div>
						
						<div class="highlight-masalah">
							<span>Dokodemo-Kerja</span> dapat membantu Anda untuk mengatasi masalah-masalah diatas.<br/>
							Anda dapat mulai menggunakan <strong>Dokodemo-Kerja</strong> hari ini.
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- <div class="div-masalah">
			<div class="container">
				<div class="border-white">
					<div class="row">
						<div class="col-md-6">
							<img class="masalah2 hidden-sm hidden-xs" alt="Masalah 2" src="img/dokodemo-kerja/masalah2.png"/>
						</div>
						<div class="col-md-6">
							<ul class="fa-ul">
								<li><span class="fa-li"><i class="fa fa-circle"></i></span>Divisi HR terlalu lelah untuk memperingati karyawan yang seringkali terlambat dan kurang produktif.</li>
								<li><span class="fa-li"><i class="fa fa-circle"></i></span>Perusahaan sulit dalam memantau karyawan yang bekerja secara jarak jauh.</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="div-masalah last">
			<div class="container">
				<div class="border-white">
					<div class="row">
						<div class="col-md-6">
							<ul class="fa-ul">
								<li><span class="fa-li"><i class="fa fa-circle"></i></span>Karyawan keliru dalam mengisi laporan pekerjaan.</li>
								<li><span class="fa-li"><i class="fa fa-circle"></i></span>Karyawan perusahaan tidak mengisi jam kerja sesuai dengan kenyataannya.</li>
							</ul>
						</div>
						<div class="col-md-6">
							<img class="masalah3 hidden-sm hidden-xs" alt="Masalah 3" src="img/dokodemo-kerja/masalah3.png"/>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		<div class="bg-blue text-center">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-1 col-md-10">
						<img class="img-responsive center-block" src="img/dokodemo-kerja/dokodemo-logo.png" alt="Dokodemo-Kerja Logo"/>
						<br/>
						<div class="title anton">Dokodemo-Kerja adalah solusi sistem kerja berupa aplikasi yang mampu merekam, menghitung, serta mengelola aktivitas dan jam kerja karyawan guna meningkatkan produktivitas perusahaan.</div>
						<hr/>
						<p>
							Bagi perusahaan yang sedang mempertimbangkan sistem kerja jarak jauh (freelance, pekerja remote, dsb). Bagi perusahaan yang ingin meningkatkan produktivitas sekaligus kebahagiaan karyawan. Bagi perusahaan yang ingin membatasi penggunaan jam kerja yang tidak efisien, seperti jeda merokok dan istirahat setelah beribadah, menonton video  hiburan yang berlebihan, hingga membuka media sosial pribadi.
						</p>
					</div>
				</div>
			</div>
		</div>
		
		<div class="div-masalah-new">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-1 col-md-5">
						<a href="/pdf/manual-guide.pdf" target="_blank" class="dl-guide"><img src="/img/manual.png" style="width:100%"/></a>
					</div>
					<div class="col-md-5">
						<a href="/pdf/install-guide.pdf" target="_blank" class="dl-guide"><img src="/img/install.png" style="width:100%"/></a>
					</div>
				</div>
			</div>
		</div>
		
		<div class="harga" id="price">
			<div class="container">
				<div class="title anton">Harga Dokodemo-Kerja</div><br/>
				<div class="text-center"><strong>Dokodemo-Kerja</strong> diciptakan bagi perusahaan untuk memantau dan melacak waktu kerja karyawan mereka, para freelancer atau pekerja remote sehingga produktivitas perusahaan meningkat. Berikut ini rincian kategori dari <strong>Dokodemo-Kerja</strong>. Semua harga paket ini tidak dikenakan biaya tambahan.</div><br/>
				<br/>
				<div class="row">
					<div class="col-md-4">
						<div class="card-harga">
							<div class="title-card text-center">Light Plan</div>
							<div style="padding:30px 0;border-bottom: 1px solid #fff;">
								<div class="price"><strong>1 JUTA IDR</strong></div>
								<div class="price" style="font-size: 15px;">PER BULAN</div>
							</div>
							<div class="plan-list">
								<ul class="fa-ul">
									<li><span class="fa-li"><i class="fa fa-circle"></i></span>Pelacakan waktu</li>
									<li><span class="fa-li"><i class="fa fa-circle"></i></span>Screenshot monitoring</li>
									<li><span class="fa-li"><i class="fa fa-circle"></i></span>1 tangkapan layar per 10 menit</li>
									<li><span class="fa-li"><i class="fa fa-circle"></i></span>Screenshot disimpan selama 2 bulan</li>
									<li><span class="fa-li"><i class="fa fa-circle"></i></span>
									Untuk 10 orang pengguna*<br/>
									<div style="font-size: 12px;color: #da0101;margin-top: 10px;font-style: italic;">Jika lebih dari 10 orang pengguna, maka setiap pengguna dikenakan biaya Rp 50.000/ bulan</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card-harga">
							<div class="title-card text-center">Standard Plan</div>
							<div style="padding:30px 0;border-bottom: 1px solid #fff;">
								<div class="price"><strong>3 JUTA IDR</strong></div>
								<div class="price" style="font-size: 15px;">PER BULAN</div>
							</div>
							<div class="plan-list">
								<ul class="fa-ul">
									<li><span class="fa-li"><i class="fa fa-circle"></i></span>Pelacakan waktu</li>
									<li><span class="fa-li"><i class="fa fa-circle"></i></span>Screenshot monitoring</li>
									<li><span class="fa-li"><i class="fa fa-circle"></i></span>1 tangkapan layar per menit</li>
									<li><span class="fa-li"><i class="fa fa-circle"></i></span>Screenshot disimpan selama 6 bulan</li>
									<li><span class="fa-li"><i class="fa fa-circle"></i></span>
									Untuk 10 orang pengguna*<br/>
									<div style="font-size: 12px;color: #da0101;margin-top: 10px;font-style: italic;">Jika lebih dari 10 orang pengguna, maka setiap pengguna dikenakan biaya Rp 75.000/ bulan</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card-harga">
							<div class="title-card text-center">Enterprise Plan</div>
							
							<div class="text-center heightauto" style="padding:15px;">
							<div class="valign-center">
							Silahkan hubungi kami untuk mendapatkan informasi secara detail.
								<div class="text-center">
									<a href="#divForm" class="smooth btn btn-coba">Hubungi Kami</a>
								</div>
							</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br/>
		
		<!--<div class="div-dokodemo">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="title">Dokodemo-Kerja</div>
						<p>Direkomendasikan bagi perusahaan yang mempertimbangkan pekerja jarak jauh (freelencer, remote worker,etc), perusahaan yang ingin meningkatkan produktifitas karyawan, perusahaan yang ingin membatasi penggunaan waktu kerja yang tidak efisien (merokok, istirahat setelah solat, etc)</p>
					</div>
				</div>
			</div>
		</div>-->
		<div class="div-form" id="divForm">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="title text-center">
							<span class="blue2">Untuk informasi lebih lanjut mengenai <strong>Dokodemo-Kerja</strong>, </span><br/>
							silahkan hubungi kami dengan mengisi form dibawah ini!
						</div>
					</div>
				</div>
				<br/>
				<?php if(isset($msg))
				{
				echo $msg;
				} 
				?>
				<form class="form-dokodemo" role="form" name='myForm' onsubmit='return validateForm()' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
					<input type='hidden' name='submitted' id='submitted' value='1'/>
					<input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
					<div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
					<div class="row">
						<div class="form-group">
							<div class="col-md-offset-1 col-md-5">
								<input type="text" class="form-control" name="name" placeholder="Nama" value='<?php echo $formproc->SafeDisplay('name') ?>'/>
							</div>
							<div class="col-md-5">
								<input type="text" class="form-control" name="company" placeholder="Perusahaan" value='<?php echo $formproc->SafeDisplay('company') ?>'/>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="form-group">
							<div class="col-md-offset-1 col-md-5">
								<input type="number" class="form-control" name="phone" placeholder="Nomor Ponsel" value='<?php echo $formproc->SafeDisplay('phone') ?>'/>
							</div>
							<div class="col-md-5">
								<input type="email" class="form-control" name="email" placeholder="Email" value='<?php echo $formproc->SafeDisplay('email') ?>'/>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="form-group">
							<div class="col-md-offset-1 col-md-5">
								<div style="padding:10px;background:#fff">
									<span class="blue fw-300">Jenis Kebutuhan yang spesifik</span>
									<div class="radiobuttons">
										<div class="rdio">
										  <input name="needs" value="Cara menggunakan Dokodemo-Kerja" id="radio2" type="radio" checked>
										  <label for="radio2">Tentang cara dan penggunaan <strong>Dokodemo-Kerja</strong></label>
										</div>
										<div class="rdio">
										  <input name="needs" value="Untuk kerja jarak jauh" id="radio3" type="radio">
										  <label for="radio3">Tentang sistem kerja jarak jauh</label>
										</div>
										<div class="rdio">
										  <input name="needs" value="Untuk meningkatkan produktivitas karyawan" id="radio4" type="radio">
										  <label for="radio4">Tentang produktivitas karyawan</label>
										</div>
										<div class="rdio">
										  <input name="needs" value="Untuk kontrol jam kerja karyawan" id="radio5" type="radio">
										  <label for="radio5">Tentang kontrol jam kerja karyawan</label>
										</div>
									</div>
								</div>
								<br/>
							</div>
							<div class="col-md-5">
								<textarea name="message" class="form-control" placeholder="Deskripsi"><?php echo $formproc->SafeDisplay('message') ?></textarea>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="form-group">
							<div class="col-md-offset-1 col-md-5">
								<div class="g-recaptcha" data-sitekey="6LcuHywUAAAAACj__hCefsBCkoIC2ExM2Sur4cCp"></div>
							</div>
							<div class="clearfix"></div>
						</div>
						<center>
							<button type="submit" href="#" class="btn btn-coba">Kirim</button>
						</center>
					</div>
				</form>
			</div>
		</div>
		<div class="div-faq">
			<div class="anton title yellow">Pertanyaan yang sering diajukan:</div>
			<br/>
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<span class="blue2 fw-500">Bagaimana <strong>Dokodemo-Kerja</strong> merekam jam kerja karyawan?</span><br/>
						<strong>Dokodemo-Kerja</strong> merekam aktivitas dan jam kerja untuk setiap proyek yang dikerjakan karyawan pada layar perangkat komputernya. Perhitungan akan dimulai dan dihentikan dengan perintah <i>start/stop</i>.<br/><br/>
						 
						<span class="blue2 fw-500">Apakah <strong>Dokodemo-Kerja</strong> memerlukan akses internet?</span><br/>
						Akses internet diperlukan untuk mengaktifkan dan mengelola akun <strong>Dokodemo-Kerja</strong>, serta mengirim data rekaman aktivitas dan jam kerja ke database.<br/><br/>
						 
						<span class="blue2 fw-500">Bagaimana jika akses internet saya putus saat <strong>Dokodemo-Kerja</strong> berjalan?</span><br/>
						Tidak masalah. Akses internet tidak dibutuhkan selama proses penghitungan. Namun, Anda membutuhkan koneksi internet saat tombol stop diklik untuk mengirim data ke database.<br/><br/>
						 
						<span class="blue2 fw-500">Berapa jumlah pengguna yang didukung oleh <strong>Dokodemo-Kerja</strong>?</span><br/>
						Jumlah pengguna bisa disesuaikan menurut kebutuhan perusahaan.<br/><br/>
						 
						<span class="blue2 fw-500">Apakah <strong>Dokodemo-Kerja</strong> bisa diakses lewat perangkat seluler?</span><br/>
						Untuk saat ini, perangkat seluler hanya bisa mengakses <strong>Dokodemo-Kerja</strong> melalui browser.<br/><br/>
						
						<span class="blue2 fw-500">Bagaimana cara menyiapkan layanan <strong>Dokodemo-Kerja</strong>? </span><br/>
						Kami akan menyediakan panduan menyiapkan layanan <strong>Dokodemo-Kerja</strong> langkah demi langkah. Mulai dari cara mengakses akun master, mengakses aplikasi dan menginstalnya, hingga penggunaannya bagi karyawan.<br/><br/>
						
						<span class="blue2 fw-500">Bagaimana cara mengetahui apakah PC atau Mac saya dapat menjalankan <strong>Dokodemo-Kerja</strong>? </span><br/>
						<strong>Dokodemo-Kerja</strong> mendukung PC yang menjalankan sistem operasi Windows, Linux, dan Macintosh.<br/><br/>
						
						<span class="blue2 fw-500">Bahasa apa saja yang tersedia untuk <strong>Dokodemo-Kerja</strong>?</span><br/>
						Untuk saat ini, <strong>Dokodemo-Kerja</strong> tersedia dalam Bahasa Indonesia dan Inggris.<br/><br/> 
						 
						<span class="blue2 fw-500">Dapatkah saya melakukan uji coba <strong>Dokodemo-Kerja</strong> terlebih dahulu sebelum membelinya?</span><br/>
						Tentu saja. Untuk mendapatkan layanan uji coba, silakan hubungi kami.<br/><br/>
					</div>
					<div class="col-md-6">						
						<span class="blue2 fw-500">Bagaimana jika saya punya masalah dalam menggunakan <strong>Dokodemo-Kerja</strong>?</span><br/>
						Jangan khawatir. Jika Anda mengalami masalah dalam menggunakan <strong>Dokodemo-Kerja</strong>, Anda dapat langsung menghubungi kami. Kami akan membantu Anda dengan senang hati.<br/><br/>
						
						<span class="blue2 fw-500">Saya tertarik menggunakan <strong>Dokodemo-Kerja</strong> untuk perusahaan saya. Bagaimana saya bisa mendapatkannya?</span><br/>
						Anda hanya perlu menghubungi kami dengan mengisi formulir yang kami sediakan. Kami siap melayani Anda.<br/><br/>
						
						<span class="blue2 fw-500">Seberapa efektifkah <strong>Dokodemo-Kerja</strong> pada produktivitas karyawan?</span><br/>
						Sangat efektif, karena <strong>Dokodemo-Kerja</strong> mampu mengkalkulasikan total jam kerja karyawan secara real time dan transparan.<br/><br/>
						
						<span class="blue2 fw-500">Untuk siapakah <strong>Dokodemo-Kerja</strong> dibuat?</span><br/>
						<strong>Dokodemo-Kerja</strong> dibuat untuk para perusahaan yang menggunakan karyawan dengan sistem kerja remote dan independen agar meningkatkan produktifitas perusahaan.<br/><br/>
						
						<span class="blue2 fw-500">Apa keuntungan yang didapatkan oleh perusahaan yang menerapkan <strong>Dokodemo-Kerja</strong>?</span><br/>
						Dengan <strong>Dokodemo-Kerja</strong>, perusahaan akan diuntungkan dengan produktifitas karyawan yang meningkat sehingga perusahaan dapat membuat target untuk para karyawan sesuai dengan kinerjanya masing-masing.<br/><br/>
						
						<span class="blue2 fw-500">Apakah <strong>Dokodemo-Kerja</strong> dapat menyesuaikan waktu sesuai dengan zona waktu lokal yang ada?</span><br/>
						Bisa, Jika Anda mengaktifkan <strong>Dokodemo-Kerja</strong>, maka secara otomatis aplikasi akan mendeteksi zona waktu lokal yang ada.<br/><br/>
						
						<span class="blue2 fw-500">Apa yang akan terjadi jika kita langsung mematikan OS (Operating System) tanpa menghentikan  <strong>Dokodemo-Kerja</strong> terlebih dahulu?</span><br/>
						Jika hal ini terjadi, maka pencatatan waktu yang terekam akan berada pada waktu terakhir aplikasi menangkap layar monitor.<br/><br/>
						
						<span class="blue2 fw-500">Dapatkah <strong>Dokodemo-Kerja</strong> beroperasi di Background System?</span><br/>
						Tidak bisa, Sebab ketika aplikasi ditutup, maka service secara otomatis juga akan berakhir.<br/><br/>
						
					</div>
				</div>
				<br/>
				<div class="row">
					<div class="col-md-offset-1 col-md-10">
						<div style="padding:10px;border:1px solid #edb41a">
							<div class="div-above-footer">
								<strong>Dokodemo-Kerja</strong> adalah solusi sistem kerja berupa aplikasi yang mampu merekam, menghitung, serta mengelola aktivitas dan jam kerja karyawan guna meningkatkan produktivitas perusahaan.
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="testi-div">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="anton title yellow text-center">Testimonial Dokodemo-Kerja</div>
					</div>
				</div>
				<br/>
				<div class="row">
					<div class="col-md-4">
						<div class="testi-content">
							<div class="anton quotes-mark">“</div>
							<div class="testi-title">
								Bekerja secara fleksibel.
							</div>
							<div class="clearfix"></div>
							<p>
								Macetnya lalu lintas menuju kantor saya cukup membuat saya stress. Lelah dan stress saya menjadi bertambah, sebab rumah dengan kantor saya memiliki jarak yang cukup jauh. Setiap harinya saya menghabiskan waktu selama empat jam di jalan, terus menerus seperti itu. Pada akhirnya, perusahaan saya menggunakan Dokodemo-Kerja dan menerapkan sistem kerja remote di kantor. Dengan Dokodemo-Kerja saya bisa bekerja secara fleksibel.
							</p>
							<div class="text-center"><span class="fs-16"><strong>Rafid</strong></span> - <span class="fs-14">Front End Developer</span></div>
						</div>
						<br/>
					</div>
					<div class="col-md-4">
						<div class="testi-content">
							<div class="anton quotes-mark">“</div>
							<div class="testi-title">
								Dapat memantau seluruh karyawan
							</div>
							<div class="clearfix"></div>
							<p>
								Sangat sulit bagi saya untuk memantau seluruh karyawan untuk tidak membuka sosial media, youtube, dan bermain games. Setelah saya menggunakan Dokodemo-Kerja, saya dapat memantau seluruh karyawan yang membuka sosial media, youtube dan bermain games dari screen capture laptop masing-masing. Sekarang, para karyawan menon-aktifkan 
								Dokodemo-Kerja apabila mereka sedang istirahat ataupun bermain games. Aktivitas tersebut tidak dihitung sebagai jam kerja mereka.
							</p>
							<div class="text-center"><span class="fs-16"><strong>Kevin</strong></span> - <span class="fs-14">Staff HR</span></div>
						</div>
						<br/>
					</div>
					<div class="col-md-4">
						<div class="testi-content">
							<div class="anton quotes-mark">“</div>
							<div class="testi-title">
								Sekarang  jam kerja yang adil dapat diberlakukan kepada seluruh karyawan.
							</div>
							<div class="clearfix"></div>
							<p>
								Saya merasa sungkan untuk menegur karyawan yang menggunakan waktu untuk beribadah terlalu lama. Saya ingin berlaku adil terhadap seluruh karyawan, apapun agama yang mereka anut. Sekarang  jam kerja yang adil dapat diberlakukan kepada seluruh karyawan. Saya merasa terbantu dengan Dokodemo-Kerja.
							</p>
							<div class="text-center"><span class="fs-16"><strong>Mizuho Yamada</strong></span> - <span class="fs-14">Manager of Back Office</span></div>
						</div>
						<br/>
					</div>
					<div class="clearfix"></div><hr class="hidden-sm hidden-xs"/>
					<div class="col-md-4">
						<div class="testi-content">
							<div class="anton quotes-mark">“</div>
							<div class="testi-title">
								Dokodemo-Kerja membuat kualitas hidup saya meningkat.
							</div>
							<div class="clearfix"></div>
							<p>
								Saya ingin melanjutkan pendidikan ke jenjang yang lebih tinggi. Dengan Dokodemo-Kerja saya bisa membuktikan bahwa saya benar-benar bekerja selama delapan jam setiap harinya. Saya bekerja di waktu siang untuk beberapa hari. Pada hari-hari selanjutnya, saya bekerja di waktu malam. Dokodemo-Kerja membuat kualitas hidup saya meningkat.
							</p>
							<div class="text-center"><span class="fs-16"><strong>Angga</strong></span> - <span class="fs-14">Designer</span></div>
						</div>
						<br/>
					</div>
					<div class="col-md-4">
						<div class="testi-content">
							<div class="anton quotes-mark">“</div>
							<div class="testi-title">
								Bisa mengetahui produktivitas dan jam kerja mereka.
							</div>
							<div class="clearfix"></div>
							<p>
								Melakukan monitoring terhadap karyawan remote cukup sulit. Perbedaan tempat dan jarak yang jauh membuat saya sulit untuk memantau karyawan. Semenjak menggunakan Dokodemo-Kerja, saya dapat memantau karyawan dengan lebih baik. Saya bisa mengetahui produktivitas dan jam kerja mereka. Terimakasih Dokodemo-Kerja.
							</p>
							<div class="text-center"><span class="fs-16"><strong>Arie</strong></span> - <span class="fs-14">HR</span></div>
						</div>
						<br/>
					</div>
					<div class="col-md-4">
						<div class="testi-content">
							<div class="anton quotes-mark">“</div>
							<div class="testi-title">
								Memperbolehkan karyawan untuk bekerja secara remote.
							</div>
							<div class="clearfix"></div>
							<p>
								Saya kira, bekerja secara full remote adalah sesuatu yang mustahil. Sebab, perusahaan akan sulit untuk memantau kinerja karyawan. Tapi anggapan saya berubah ketika saya mengenal Dokodemo-Kerja. Oleh karena sistem ini, perusahaan di tempat saya bekerja memperbolehkan karyawan untuk bekerja secara remote. Saya sangat bahagia sekali. Akhirnya saya dapat bekerja sembari mengurus anak di rumah.
							</p>
							<div class="text-center"><span class="fs-16"><strong>Sisca</strong></span> - <span class="fs-14">Programmer</span></div>
						</div>
						<br/>
					</div>
					<div class="clearfix"></div><hr class="hidden-sm hidden-xs"/>
					<div class="col-md-4">
						<div class="testi-content">
							<div class="anton quotes-mark">“</div>
							<div class="testi-title">
								Dapat dengan mudah mengalkulasi jam kerja karyawan.
							</div>
							<div class="clearfix"></div>
							<p>
								Seringkali saya menegur para karyawan yang terlalu lama keluar untuk merokok. Alasannya, mereka tidak bekerja sesuai dengan jam kerja yang seharusnya berlaku. Kedua, saya ingin jam kerja yang adil dapat berlaku untuk seluruh karyawan. Setelah menggunakan Dokodemo-Kerja, sudah tidak ada lagi karyawan menggunakan waktu merokok terlalu lama. Saya pun dapat dengan mudah mengalkulasi jam kerja karyawan. 
							</p>
							<div class="text-center"><span class="fs-16"><strong>Tiara</strong></span> - <span class="fs-14">Staff HR</span></div>
						</div>
						<br/>
					</div>
					<div class="col-md-4">
						<div class="testi-content">
							<div class="anton quotes-mark">“</div>
							<div class="testi-title">
								Bekerja profesional dengan sistem kerja remote.
							</div>
							<div class="clearfix"></div>
							<p>
								Saya tidak bisa bekerja secara on site karena ibu saya sakit. Saya kira, saya harus merelakan pekerjaan saya disaat-saat seperti ini. Namun, Dokodemo-Kerja dapat membantu saya untuk tetap bekerja profesional dengan sistem kerja remote.
							</p>
							<div class="text-center"><span class="fs-16"><strong>Bobby Susanto</strong></span> - <span class="fs-14">Programmer</span></div>
						</div>
						<br/>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		
		<a href="#" class="scrollToTop">Back to Top</a>
		<footer>
			<script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: '4c745242-66c8-4931-9b56-3c3bdcc5cbe6', f: true }); done = true; } }; })();</script>
			<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-105878648-1', 'auto');
			ga('send', 'pageview');

			</script>
			<div class="container">
			  <div class="row">
			    <div class="col-sm-9 col-sm-push-3">
			      <div class="row">
			        <div class="col-sm-4 link-footer-nav">
			          <ul>
			            <li><a href="/index.php">Beranda</a></li>
			            <li><a href="/tentang-kami.php">Tentang Kami</a> </li>
			            <li  class="have-submenu"><a href="/layanan.php">Layanan</a>
			              <ul>
			                <li class="have-submenu"><a href="/layanan/web-dev.php" target="_blank">Jasa Pembuatan Website</a>
			                  <ul>
			                    <li><a href="/layanan/pembuatan-web-karir.php" target="_blank">  Pembuatan Website Career</a> </li>
			                    <li><a href="/layanan/pembuatan-web-klinik-gigi.php" target="_blank"> Website Klinik Gigi </a></li>
			                  </ul>
			                </li>
			                <li><a href="/layanan/pembuatan-sistem-web.php" target="_blank">Jasa Pengembangan Sistem Web</a></li>
			                <li><a href="/layanan/pembuatan-aplikasi-mobile.php" target="_blank">Pengembangan Aplikasi Mobile </a></li>
			                <li class="text-left"><a href="/layanan/penetration-test.php" target="_blank">Pengetesan Keamanan Website (Pentest) </a></li>
			              	<li class="text-left"><a href="/layanan/digital-marketing.php" target="_blank">Jasa Digital Marketing </a></li>
			              </ul>
			            </li>
			          </ul>
			
			           
			        </div>
			        <div class="col-sm-4 link-footer-nav">
			           <ul>
			            <li  class="have-submenu">
			              <a href="/produk.php">Produk Kami</a>
			              <ul>
			                <li><a href="/produk/dokodemo-kerja.php" target="_blank">
			                  Dokodemo-Kerja  <br><span style="font-size: 11px;">(Sistem aplikasi bagi pekerja remote) </span> </a>
			                </li>
			                <li>
			                  <a href="/produk/nippo.php" target="_blank"> Nippo <br> <span style="font-size: 11px;">(Sistem aplikasi laporan pegawai harian)</span>  </a>
			                </li>
			                <li>
			                  <a href="/produk/sugoi-saiyo.php" target="_blank"> Sugoi Saiyo <br> <span style="font-size: 11px;">(Sistem aplikasi perekrutan pegawai)</span></a>
			                </li>
			              </ul>
			            </li>
			            <li><a href="/portofolio.php">Portofolio</a></li>
			            <li  class="have-submenu"><a href="/karir.php">Karir</a>
			              <ul>
			                <li><a href="/career/">Join LOGIQUE</a></li>
			              </ul>
			            </li>
			            <li><a href="/hubungi-kami.php">Hubungi Kami</a></li>
			           </ul>
			            
			            <!-- <h6><a href="/layanan/pembuatan-website-restoran/" target="_blank">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Website Restoran </a></h6> -->
			             
			        </div>
			        <div class="col-sm-4 link-footer">
			        	<img src="img/dokodemo-kerja/dokodemo-logo.png" alt="Logo">
			           <p style=" padding-bottom: 0px; padding-top: 0px;">
			           	<strong>Dokodemo-Kerja</strong> adalah sebuah tool yang dapat membuat karyawanmu bekerja remote, meningkatkan produktivitas dengan menghilangkan aktivitas yang membuang waktu dan tenaga, serta mengurangi beban HR dalam memantau kerjaan karyawan. Anda juga dapat menyesuaikan Dokodemo-Kerja berdasarkan kebutuhan perusahaan Anda. Hubungi kami jika Anda tertarik.
			           </p>
			       
			        </div>
			      </div>
						<br>
			    </div>
			    <div class="col-sm-3 col-sm-pull-9">
			      <div itemscope itemtype="http://schema.org/Organization">
			        <div class="footer-title"><span itemprop="name">LOGIQUE DIGITAL INDONESIA</span></div>
			        <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
			        <span itemprop="streetAddress"> Ad Premier Building 19th Floor. <br>Jalan Tb. Simatupang No. 5 <br/>
			        Ragunan, Ps. Minggu,  Jakarta Selatan, <br>Indonesia </span><span itemprop="postalCode">12550</span>
			        <br><br>
			        &nbsp;&nbsp;&nbsp;<i class="fa fa-phone"></i>&nbsp;&nbsp;&nbsp;(021) 22708935 / 36 
			        <br>
			        <a href="https://api.whatsapp.com/send?phone=0811870321" target="_blank">&nbsp;&nbsp;&nbsp;<i class="fa fa-mobile" style="font-size: 18px;vertical-align: -1px;"></i>&nbsp;&nbsp;<i class="fa fa-whatsapp"></i>&nbsp;&nbsp;&nbsp;0811-870-321</a>
			        <br><br>
			        </div>
			      </div> 
			      <div class="provacy-policy-container">
			        <a href="../en/privacy-policy.php" target="_blank">Privacy Policy</a>
			      </div>
			      <div class="footer-title"  style="margin-top: 20px; margin-bottom: 0;">Media Sosial</div>
		        <ul class="medsos-new">
		          <li><a href="https://www.facebook.com/logique.id/" target="_blank" aria-label="Facebook"><i class="fa fa-facebook-official"></i></a></li>
		          <li><a href="https://twitter.com/LogiqueDigital" target="_blank" aria-label="Twitter"><i class="fa fa-twitter"></i></a></li>
		          <li><a href="https://www.instagram.com/logiquedigital/" target="_blank" aria-label="Instagram"><i class="fa fa-instagram"></i></a></li>
		          <li><a href="https://www.linkedin.com/company/13420656" target="_blank" aria-label="LinkedIn"><i class="fa fa-linkedin-square"></i></a></li>
		        </ul>

			    </div>
			  </div>
			  <div class="row">
			    <div class="col-sm-12">
			      <div itemscope itemtype="http://schema.org/CreativeWork">
			        <div class="copyright">&copy; <span itemprop="copyrightYear">2017</span>
			        <span itemprop="copyrightHolder" itemtype="http://schema.org/Organization"><span itemprop="name">Logique Digital Indonesia. All Rights Reserved.</span></span></div>
			      </div>
			    </div>
			  </div>
			</div>
		</footer>
		<!-- <footer>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-push-6">
						<img src="img/dokodemo-kerja/dokodemo-logo.png" alt="Logo">
						<p>
							<strong>Dokodemo-Kerja</strong> adalah solusi sistem kerja berupa aplikasi yang mampu merekam, menghitung, serta mengelola aktivitas dan jam kerja karyawan guna meningkatkan produktivitas perusahaan.
						</p>
						<div class="hidden-xs"><br/><br/></div>
						<div class="cr">© 2018<a href="/" class="yellow"> PT. Logique Digital Indonesia.</a> All Rights Reserved.</div>
						<div class="visible-xs"><br/></div>
					</div>
					<div class="col-md-6 col-md-pull-6">
						<ul class="fa-ul">
							<li>
								<span class="fa-li"><i class="fa fa-map-marker"></i></span>
								Ad Premier Building 19th Floor <br/>
								Jalan Tb. Simatupang No. 5 Ragunan, <br/>
								Ps. Minggu, Jakarta Selatan, Indonesia 12550
							</li>
							<li>
								<span class="fa-li"><i class="fa fa-phone"></i></span>
								+62(21) 2270 8935 / 36
							</li>
							<li>
								<span class="fa-li"><i class="fa fa-envelope"></i></span>
								info@logique.co.id
							</li>
							<li>
								Other Products:<br/>
								<ul style="list-style-type:disc;padding-left: 2em;">
									<li style="margin-bottom: 5px;margin-top: 5px;"><a href="/produk/nippo.php" target="_blank">Nippo</a></li>
									<li><a href="/produk/sugoi-saiyo.php" target="_blank">Sugoi Saiyo</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</footer> -->
		
		<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
		<script src="js/PicCarousel.min.js"></script>
		<script>
			$(".screenshot-slide").PicCarousel("init");
		</script>
		<script src='https://www.google.com/recaptcha/api.js'></script>
		<script type="text/javascript">			
			$(function() {
				$('.smooth').click(function() {
				  if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
					var target = $(this.hash);
					target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
					if (target.length) {
					  $('html, body').animate({
						scrollTop: target.offset().top
					  }, 1000);
					  return false;
					}
				  }
				});
			});
			
			$(document).ready(function(){
				
				//Check to see if the window is top if not then display button
				$(window).scroll(function(){
					if ($(this).scrollTop() > 100) {
						$('.scrollToTop').fadeIn();
					} else {
						$('.scrollToTop').fadeOut();
					}
				});

				
			});
			
			//Click event to scroll to top
			$('.scrollToTop').click(function(){
				$('html, body').animate({scrollTop : 0},800);
				return false;
			});
			$('.navbar-dokdem .navbar-brand>img').click(function(){
				$('html, body').animate({scrollTop : 0},800);
				return false;
			});
		</script>
	</body>
</html>