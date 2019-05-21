﻿<?php 
require_once("assets/form/fgcontact_dentist.php");

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
                $msg = "<div class='alert alert-success' id='msg' role='alert'>Thank you for sending us an inquiry!</div>";
            }
        } else {
            $msg = "<div class='alert alert-warning' id='msg' role='alert'>reCAPTCHA verification failed, please try again.</div>";
        }
    } else {
        $msg = "<div class='alert alert-warning' id='msg' role='alert'>Please click the reCAPTCHA box.</div>";
   }
 }

?><!DOCTYPE html>
<html lang="en">
  <head>
		<?php include '../google/tag-head.php'?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=3.0">
    <meta name="description" content="LOGIQUE bisa membantu Anda dalam pembuatan website dan aplikasi mobile untuk bisnis klinik gigi dengan tampilan profesional dan user friendly. Raih pelanggan Anda dengan teknologi digital. Untuk lebih lengkapnya, segera hubungi LOGIQUE!">
		<meta name="keywords" content="website dental, dokter gigi, klinik gigi, jasa website dental dan klinik dental, logique, buat website dokter, template website dokter, website dokter gigi">
		<meta name="title" content="Jasa Pembuatan Website Klinik Gigi | LOGIQUE Digital Indonesia">
		<meta name="author" content="Logique Digital Indonesia">
		<meta itemprop="name" content="PT. Logique Digital Indonesia">
		<meta property="og:title" content="Jasa Pembuatan Website Klinik Gigi | LOGIQUE Digital Indonesia">
		<meta property="og:type" content="website">
		<meta property="og:site_name" content="Logique">
		<meta property="og:url" content="https://www.logique.co.id/layanan/pembuatan-web-klinik-gigi.php">
		<meta property="og:image" content="https://www.logique.co.id/img/og-image.png">
		<meta property="og:description" content="LOGIQUE bisa membantu Anda dalam pembuatan website dan aplikasi mobile untuk bisnis klinik gigi dengan tampilan profesional dan user friendly. Raih pelanggan Anda dengan teknologi digital. Untuk lebih lengkapnya, segera hubungi LOGIQUE!">
		<!-- <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"> -->
    <title>Jasa Pembuatan Website Klinik Gigi | LOGIQUE Digital Indonesia</title>
		<link href="/css/bootstrap.min.css" rel="stylesheet">	 
    <link href="assets/css/style-dentist.css" rel="stylesheet">
    <link href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css" rel="stylesheet" type="text/css" />
		<link href="/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">

	<script>
		function recaptcha_callback() {
			$('#kirim-form-klinik-gigi').removeAttr('disabled');
		};
	</script>
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
	<body class="dentalpage">
	<?php include '../google/tag-body.php'?>
		<div class="wrapper">
			<header class="head-banner">
				<button type="button" class="navbar-toggle collapsed" aria-label="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
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
				<div class="container">
					<div class="row">
						<div class="col-md-7 col-sm-7 text-center header-box">
							<div class="text-box">
							<div class="text-quote">
								“Jumlah pasien klinik gigi kami meningkat 30% setiap bulannya setelah kami memiliki website.”
								</div>
								<p class="text-p">
								Di era digital, ada banyak orang yang mencari klinik gigi yang terbaik melalui Internet. Oleh sebab itu, penting bagi klinik gigi dalam memiliki website berkualitas untuk memperoleh serta menjangkau pasien secara luas dan efektif.
								</p>
							</div>
							<a href="#contact-info" class="btn btn-consult smooth">Konsultasi Gratis Sekarang ! <img src="assets/img/img-dentist/new/i-btn.png" alt="ring icon"></a>
						</div>
					</div>
				</div>
			<div class="arraw-down text-center">
				<a href="#poin" aria-label="Pentingnya website pribadi klinik gigi" class="smooth"><img src="assets/img/img-dentist/new/arrow.png" alt="Arrow"></a>
			</div>	
			<img src="assets/img/img-dentist/new/drg.png" alt="dokter gigi" class="drg">
			</header>

			<section class="poin-penting" id="poin">
				<div class="container">
					<h1 class="s-title">Apa pentingnya website pribadi bagi klinik gigi?</h1>
					<div class="row">
						<div class="col-md-4 col-md-offset-1 col-sm-8">
							<p>
							Dengan memiliki website pribadi, Anda dapat memperkenalkan produk dan jasa klinik gigi Anda dengan tampilan yang unik dan berkarakter. Berbeda dengan menggunakan portal kesehatan atau media sosial, Anda dapat memilliki tampilan website yang berbeda dengan yang lain sehingga membuat para pengunjung yang juga pasien potensial tertarik mengunjungi klinik gigi Anda. 
							Anda juga dapat meningkatkan jumlah pengunjung website melalui Search Engine Optimalization (SEO) jika menggunakan website sendiri. Selain itu, website Anda dapat memberikan informasi kepada pengunjung setiap saat tentang produk atau jasa yang klinik Anda tawarkan. Melalui website pribadi, Anda juga menciptakan brand yang mendorong kredibilitas klinik Anda melesat naik.
							</p>
							<ol>
								<li>Membuat pengunjung tertarik dengan klinik gigi Anda dengan tampilan website yang unik dan berbeda.</li>
								<li>Mendorong jumlah pengunjung website melalui Search Engine Optimalization (SEO).</li>
								<li>Memberikan informasi kepada pengunjung setiap saat tentang produk atau jasa klinik.</li>
								<li>Menciptakan brand yang mendorong kredibilitas klinik Anda.</li>
							</ol>
						</div>
						<div class="col-md-5">
							<div class="stats">
								<div class="clearfix">
									<img src="assets/img/img-dentist/new/i-d1.png" alt="diagram 1">
									<ul>
										<li>Cara Pasien Mencari Klinik Gigi:</li>
										<li class="c1">Digital (Online)</li>
										<li class="c2">Lokasi Terdekat</li>
										<li class="c3">Rekomendasi</li>
										<li class="c4">Lain-lain</li>
									</ul>
								</div>
								<p>*Berdasarkan data yang dikumpulkan dari hasil survey 100 orang, kebanyakan orang mencari klinik gigi secara online karena dapat mengetahui lebih detil mengenai klinik gigi yang dicarinya.</p>
							</div>
							<div class="stats">
								<div class="clearfix">
									<img src="assets/img/img-dentist/new/i-d2.png" alt="diagram 2">
									<ul>
										<li>Pencarian Secara Online:</li>
										<li class="c1">Google Search</li>
										<li class="c2">Media Social</li>
										<li class="c3">Web Portal</li>
										<li class="c4">Lain-lain</li>
									</ul>
								</div>
								<p>*Pencarian melalui Google dinilai lebih efektif dalam mencari klinik gigi, selain mudah memperoleh data user juga dapat mengakses langsung ke website yang tertera di halaman utama pencarian.</p>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="masalah-1">
				<div class="container">
					<h2 class="s-title">Masalah yang Sering Dihadapi dalam Memiliki Website</h2>
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<div class="row">
								<div class="col-md-4 col-sm-4 clearfix">
									<img src="assets/img/img-dentist/new/i-problem1.png" alt="masalah klinik gigi">
									<p>Tidak tahu bagaimana membuat website</p>
								</div>
								<div class="col-md-4 col-sm-4 clearfix">
									<img src="assets/img/img-dentist/new/i-problem2.png" alt="masalah klinik gigi">
									<p>Tidak punya staff yang mengurus website</p>
								</div>
								<div class="col-md-4 col-sm-4 clearfix">
									<img src="assets/img/img-dentist/new/i-problem3.png" alt="masalah klinik gigi">
									<p>Terlalu mahal untuk membuat dan mengembangkan website</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="solusi">
				<div class="container">
					<img src="assets/img/img-dentist/new/solution.png" alt="solusi klinik gigi" class="img-responsive solusi-title">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<div class="row">
								<div class="col-md-4 col-sm-4 clearfix">
									<img src="assets/img/img-dentist/new/i-solution1.png" alt="solusi klinik gigi">
									<p>Sampaikan kepada kami website seperti apa yang diharapkan, dengan tim profesional kami akan membantu Anda mewujudkannya.</p>
								</div>
								<div class="col-md-4 col-sm-4 clearfix">
									<img src="assets/img/img-dentist/new/i-solution2.png" alt="solusi klinik gigi">
									<p>Layanan yang kami berikan sudah termasuk pengelolaan, sehingga Anda dapat fokus lebih banyak pada bisnis klinik gigi Anda.</p>
								</div>
								<div class="col-md-4 col-sm-4 clearfix">
									<img src="assets/img/img-dentist/new/i-solution3.png" alt="solusi klinik gigi">
									<p>Hanya dengan Rp500.000/bulan website klinik gigi Anda melakukan promosi mandiri 24/7.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="layanan">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<div class="row">
								<div class="col-md-4 col-sm-4">
									<div class="d-layanan l1">
										<h2><img src="assets/img/img-dentist/new/logo.png" alt="LOGIQUE" class="l-logo"> siap memberikan solusi untuk klinik gigi Anda!</h2>
										<h3>Berikut layanan solusi yang kami tawarkan.</h3>
									</div>
								</div>
								<div class="col-md-4 col-sm-4">
									<div class="d-layanan l1">
										<img src="assets/img/img-dentist/new/i-service1.png" alt="layanan website klinik gigi" class="img-fluid">
										<div class="l-title"><h4>SEO</h4></div>
										<p>SEO memudahkan orang untuk menemukan website Anda di posisi teratas dalam pencarian Google sehingga klinik gigi Anda dapat lebih dikenal dengan mudah.</p>
									</div>
								</div>
								<div class="col-md-4 col-sm-4">
									<div class="d-layanan l1">
										<img src="assets/img/img-dentist/new/i-service2.png" alt="layanan website klinik gigi" class="img-fluid">
										<div class="l-title"><h4>Mempermudah Pencarian Klinik</h4></div>
										<p>Memudahkan pengguna dalam menemukan lokasi klinik gigi Anda ketika melakukan pencarian di Google. Dengan begitu, pasien potensial klinik gigi Anda akan bertambah.</p>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 col-sm-4">
									<div class="d-layanan">
										<img src="assets/img/img-dentist/new/i-service3.png" alt="layanan website klinik gigi">
										<div class="l-title"><h4>Terhubung dengan Social Media</h4></div>
										<p>Orang-orang yang melihat akun sosial media Anda dapat dialihkan ke website klinik gigi Anda dengan menggunakan hyperlink. Di sana mereka dapat menemukan informasi klinik gigi Anda secara langsung dan terpusat.</p>
									</div>
								</div>
								<div class="col-md-4 col-sm-4">
									<div class="d-layanan">
										<img src="assets/img/img-dentist/new/i-service4.png" alt="layanan website klinik gigi">
										<div class="l-title"><h4>Internet AD</h4></div>
										<p>Website klinik gigi Anda dapat menjadi landing page atas segala aktivitas marketing, seperti online advertising.</p>
									</div>
								</div>
								<div class="col-md-4 col-sm-4">
									<div class="d-layanan">
										<img src="assets/img/img-dentist/new/i-service5.png" alt="layanan website klinik gigi">
										<div class="l-title"><h4>Non-stop Effortless Marketing</h4></div>
										<p>Website klinik gigi Anda akan menjalankan aktivitas promosi di dunia digital secara non-stop walaupun klinik Anda telah tutup.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="templates">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<h2 class="s-title">Kami Mempunyai Beberapa Template untuk Klinik Gigi</h2>
							<div class="choose-template">
							Pilih template yang terbaik bagi klinik gigi Anda, dan dalam seminggu Anda akan memiliki Website terbaik!
							</div>
							<div class="include-template">
							Sudah termasuk Optimasi Website di Mobile dan SEO. Pengambilan Foto/Video, Pembuatan Konten Profesional sebagai layanan opsional.
							</div>
						</div>
					</div>
				
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<div class="row">
								<div class="col-md-4 col-sm-4">
									<a href="#modal-template" class="a-template" data-src="assets/img/img-dentist/new/template1.jpg">
										<div class="img-template template1"></div>
										<div class="a-caption">Template 1</div>
									</a>
									<p>Template 1 ini cocok untuk semua klinik gigi baik yang sudah memiliki beberapa klinik maupun juga bagi klinik gigi baru.</p>
								</div>
								<div class="col-md-4 col-sm-4">
									<a href="#modal-template" class="a-template" data-src="assets/img/img-dentist/new/template2.jpg">
										<div class="img-template template2"></div>
										<div class="a-caption">Template 2</div>
									</a>
									<p>Template ini khusus untuk dental klinik yang mengkhususkan perawatan gigi bagi para wanita yang menjunjung kecantikan lewat keindahan gigi.</p>
								</div>
								<div class="col-md-4 col-sm-4">
									<a href="#modal-template" class="a-template" data-src="assets/img/img-dentist/new/template3.jpg">
										<div class="img-template template3"></div>
										<div class="a-caption">Template 3</div>
									</a>
									<p>Template untuk Premium dental klinik ini dibuat dengan unsur biru dan gold untuk menggambarkan kesan mewah dan biru untuk kesehatan gigi.</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 col-sm-4">
									<a href="#modal-template" class="a-template" data-src="assets/img/img-dentist/new/template4.jpg">
										<div class="img-template template4"></div>
										<div class="a-caption">Template 4</div>
									</a>
									<p>Template dental klinik khusus untuk Anda yang memiliki target market para Remaja. Dengan design yg unik dan kekinian.</p>
								</div>
								<div class="col-md-4 col-sm-4">
									<a href="#modal-template" class="a-template" data-src="assets/img/img-dentist/new/template5.jpg">
										<div class="img-template template5"></div>
										<div class="a-caption">Template 5</div>
									</a>
									<p>Template ini special untuk anak kecil hingga bayi dengan warna cerah membuat target market tidak takut lagi untuk ke dokter gigi.</p>
								</div>
								<div class="col-md-4 col-sm-4">
									<div class="more-template">						
											<a href="#">More Templates</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="modal fade" id="modal-template">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							</div>
							<div class="modal-body">
								<img src="" alt="template" class="tmp-image img-responsive">
							</div>
						</div>
					</div>
				</div>
				
			</section>

			<section id="masalah" class="masalah-section">
				<div class="container">
					<h2 class="text-center">Masalah <span class="white-text">yang Sering Dihadapi</span> Klinik Gigi</h2>
					<div class="tooth-cont">
								<img src="assets/img/img-dentist/tooth2.png" alt="Tooth Image" class="img-responsive">
							</div>
					<div class="row ">
						<div class="col-md-6 col-sm-5">
							
						</div>

						<div class="problem-list col-md-5 col-sm-6">
							<ul>
								<li>Tidak mempunyai website yang berkualitas</li>
								<li>Sulit mendapatkan pasien baru</li>
								<li>Tingginya persaingan antar klinik gigi</li>
								<li>Fasilitas klinik yang kurang memadai</li>
								<li>Lokasi yang sulit ditemukan</li>
								<li>Promosi melalui iklan yang mahal dan tidak efektif</li>
								<li>Pasien sulit membuat janji konsultasi karena tidak tahu informasi tentang jadwal praktek dokter</li>
							</ul>
						</div>
					</div>

				</div>
			</section>

			<section class="biaya">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3">
							<h2 class="s-title">Semua masalah diatas dapat diselesaikan melalui website berkualitas hanya dengan:</h2>
							<div class="price-badge">
								<img src="assets/img/img-dentist/new/i-tag.png" alt="harga website klinik gigi"> RP. 500,000<sub>/bulan</sub>
							</div>
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<h4>Biaya Awal :</h4>
									<p><b>Rp3.000.000</b> dengan masa kontrak <b>minimal 6 bulan.</b> Sudah termasuk Web Server, Domain, dan SSL.</p>
								</div>
								<div class="col-md-6 col-sm-6">
									<h4>Selama Masa Kontrak :</h4>
									<p>Jumlah permintaan update: <b>Unlimited</b> Jaminan kerja web: <b>24 jam / 7 hari</b></p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-10 col-md-offset-1">
									<p>** Biaya awal dengan “Blog” adalah Rp5.000.000 <br>Biaya bulanan: Rp9.000.000</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="situs">
				<div class="container">
					<a href="#contact-form" class="smooth"><img src="assets/img/img-dentist/new/MoreInfo-Banner-ind.png" alt="banner" class="s-banner"></a>
					<h2 class="s-title">Ingin situs klinik anda lebih dikenal?</h2>
					<div class="row">
						<div class="col-md-2 col-md-offset-2 col-sm-3 col-xs-6">
							<img src="assets/img/img-dentist/new/i-situs1.png" alt="situs klinik gigi">
							<h4>SNS Operation</h4>
						</div>
						<div class="col-md-2 col-sm-3 col-xs-6">
							<img src="assets/img/img-dentist/new/i-situs2.png" alt="situs klinik gigi">
							<h4>Digital Marketing</h4>
						</div>
						<div class="col-md-2 col-sm-3 col-xs-6">
							<img src="assets/img/img-dentist/new/i-situs3.png" alt="situs klinik gigi">
							<h4>CRM System</h4>
						</div>
						<div class="col-md-2 col-sm-3 col-xs-6">
							<img src="assets/img/img-dentist/new/i-situs4.png" alt="situs klinik gigi">
							<h4>Mobile App</h4>
						</div>
					</div>
					<span>Silahkan bertanya tentang informasi lebih lanjut. <a href="#contact-form" class="smooth">Klik disini</a></span>
				</div>
			</section>

			<section class="langkah">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<h2 class="s-title">Langkah menuju sasaran</h2>
							<img src="assets/img/img-dentist/new/img-steps.png" alt="langkah mudah" class="img-responsive">
						</div>
					</div>
				</div>
			</section>

			<section class="contact" id="contact-info">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<div class="contact-info">
								Tlp. Number dan Whatsappp <br>
								<img src="assets/img/img-dentist/new/i-phone.png" alt="phone"> <a href="tel:02122708935">(021) 2270 8935/36</a> <br class="visible-xs">
								<img src="assets/img/img-dentist/new/i-whatsapp.png" alt="wa"> <a href="https://api.whatsapp.com/send?phone=62811870321&text=Halo%20Logique">0811870321</a>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section id="solution" class="solution-section hidden">
				<div class="container">
					<div class="row">
						<div class="col-sm-4">
							<h2><span class="yellow-text">LOGIQUE</span> siap
								memberikan solusi
								untuk klinik gigi
								Anda!</h2>
								<span class="title-desc">Berikut <strong>layanan solusi</strong> yang kami tawarkan</span>
						</div>
						<div class="col-sm-4 solutionfeature-item">
							<img src="assets/img/img-dentist/screen.png" class="solution-feature-icon">
							<h3>EFFECTIVE<br/>PROMOTION
								<div class="yellowbar"></div>
							</h3>
							<div class="solution-desc">
								Dengan SEO kami membantu
								klinik Gigi untuk lebih mudah
								ditemukan dan tentu saja ini
								membuat informasi lebih mudah
								diteruskan dan tersebar.
							</div>
						</div>
						<div class="col-sm-4 solutionfeature-item">
							<img src="assets/img/img-dentist/social-media.png" class="solution-feature-icon">
							<h3>ONLINE REPUTATION <br>MANAGEMENT
								<div class="yellowbar"></div>
							</h3>
							<div class="solution-desc">
								Kami membantu anda
								membangun reputasi Klinik Gigi
								melalui website dan sosial
								media platform lainnya.
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4 solutionfeature-item">
							<img src="assets/img/img-dentist/domain-registration.png" class="solution-feature-icon">
							<h3>EXCLUSIVE DESIGN<br>& DOMAIN NAME
								<div class="yellowbar"></div>
							</h3>
							<div class="solution-desc">
								Kami paham setiap klinik Gigi
								mempunyai teknologi dan
								layanan kenyamanan yang
								berbeda. Nilai-nilai pelayanan
								klinik Gigi anda akan tercermin
								dalam desain yang khusus
								dipersiapkan.
							</div>
						</div>
						<div class="col-sm-4 solutionfeature-item">
							<img src="assets/img/img-dentist/blogging.png" class="solution-feature-icon">
							<h3>EASY CONSULTATION <br>APPOINTMENT
								<div class="yellowbar"></div>
							</h3>
							<div class="solution-desc">
								Kami bisa menghubungkan CS
								Klinik Gigi Anda dengan Pasien,
								sehingga pasien lebih mudah
								mengatur jadwal konsultasi.
							</div>
						</div>
						<div class="col-sm-4 solutionfeature-item">
							<img src="assets/img/img-dentist/viral-marketing.png" class="solution-feature-icon">
							<h3>NON-STOP EFFORTLESS<br>MARKETING
								<div class="yellowbar"></div>
							</h3>
							<div class="solution-desc">
								Website menjadi media promosi
								ke seluruh dunia dan setiap hari,
								setiap saat, bahkan saat Klinik
								Anda tutup.
							</div>
						</div>
					</div>
				</div>
			</section>
			<section id="priceandfeature" class="priceandfeature-section hidden">
				
				<div class="priceandfeature-banner">
					<div class="container">
						<div class="row">
							<div class="col-md-8 col-sm-6">
								<img src="assets/img/img-dentist/priceandfeature-banner.png" class="img-responsive">
							</div>
							<div class="col-md-4 col-sm-5">
								<div class="price-cont">
									<p>mulai dari</p> 
									<p class="realprice">
									10<span>juta</span>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="priceandfeature-content">
					<div class="container">
						<div class="row">
							<div class="col-md-4 col-sm-12"> 
								<h2>Harga Terjangkau<br> Fitur Lengkap</h2>
							</div>
							<div class="col-md-4 col-sm-6"> 
								<ul class="feature-item">
									<li>Domain unik & hosting klinik gigi</li>
									<li>Mudah dan efektif</li>
									<li>Responsive & lintas platform digital</li>
									<li>Mudah diakses dengan ponsel</li>
								</ul>
							</div>
							<div class="col-md-4 col-sm-6"> 
								<ul class="feature-item">
									<li>Design eksklusif</li>
									<li>Konten berorientasi SEO</li>
									<li>Terhubung dengan jaringan medsos</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section id="plusfeature" class="plusfeature-section hidden">
				<div class="container">
					<div class="plusfeature-cont">
					<div class="section-title"><h2>Fitur Tambahan</h2></div>
					<div class="plusfeature-list">
						<ul>
							<li>Pengaturan jadwal konsultasi online</li>
							<li>Content Management System</li>
							<li>Photo Shooting</li>
						</ul>
					</div>
				</div>
				</div>
			</section>
			<section id="contactbtn" class="contactbtn-section hidden">
				<div class="container text-center">
					<div class="btn-container"><a class="btn contactbtn" href="/hubungi-kami.php" target="_blank"> Hubungi Kami </a></div>
				</div>
			</section>
			<section id="testimonial" class="testimonial-section hidden">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-4 col-md-offset-1">
							<h2>Testimonial</h2>
						</div>
						<div class="col-md-7 col-sm-8">
							<div class="testimonial-content">
								  Website yang kami bangun ini dapat memperkenalkan klinik kami pada masyarakat luas, sehingga klinik kami lebih di kenal. Website ini juga menjadi media penghubung antara klinik kami dengan pasien. Bekerja sama dengan PT.Logique adalah pilihan yang tepat karena  mereka sangat mengerti apa yang klink kami butuhkan dari sebuah website. PT.Logique memberikan paket lengkap sehingga kami dapat mengunakan website ini dengan baik. Terima kasih Logique.
							</div>
							<div class="testimonial-sender text-right">
								Dr. Edward Deseta<br>Klinik Gigi Sehat Selalu

							</div>
						</div>
					</div>
					 
				</div>
			</section>
			<section id="contact-form" class="contactform-section">
				<div class="container">
					<div class="row">
						<div class="col-sm-8 col-sm-offset-2">
							<h2>Punya pertanyaan dan perlu informasi lebih lanjut ?</h2>
							<div class="contact-form-container">
							<?php if(isset($msg))
		                    {
		                    echo $msg;
		                    } 
		                    ?>
							<form id="contact-form-dental"  class="contactform-dental" role="form" name='myForm' onsubmit='return validateForm()' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
								<input type='hidden' name='submitted' id='submitted' value='1'/>
								<input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
								<fieldset><div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div></fieldset>
								<fieldset>
									<input type="text" name="name" id="name" class="input-name form-control" aria-label="Name"  value='<?php echo $formproc->SafeDisplay('name') ?>' placeholder="Nama" required>
								</fieldset>
								<fieldset>
									<input type="text" name="email" id="email" class="input-email form-control" aria-label="Email" value='<?php echo $formproc->SafeDisplay('email') ?>' placeholder="Alamat Email" required>
								</fieldset>
								<fieldset>
		 
									<textarea class="textarea-message form-control" name="message" id="message" aria-label="Message" placeholder="Pesan" required><?php echo $formproc->SafeDisplay('message') ?></textarea>
								</fieldset>
								<fieldset>
									 
									<div class="g-recaptcha pull-right" data-sitekey="6LcuHywUAAAAACj__hCefsBCkoIC2ExM2Sur4cCp" data-callback="recaptcha_callback"></div>
									<div class="clearfix"></div>
									 
								</fieldset>  
								<fieldset class="text-right">
								<div id="button">
									<input disabled="disabled" id="kirim-form-klinik-gigi" type="submit" name="submit" class="btn btn-submit submit-button" value="Kirim">
								</div>
								</fieldset>

							</form>
							</div>
						</div>
					</div>
				
				</div> 
			</section>
			<?php include '../footer.php'; ?>
		</div>
		<script>
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
				
				// modal template
				$('.a-template').on('click', function(){
					var img = $(this).data('src');
					$('#modal-template').find('.tmp-image').attr('src', img);
					$('#modal-template').modal('show');
				});
		});
		</script>
		
	</body>
</html>