﻿ <?php 
require_once("form/fgcontact_systemdev.php");

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
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="Dalam melakukan pembuatan website, pengembangan website, pembuatan aplikasi dan pengembangan aplikasi serta desain web. Logique sebagai perusahaan jasa konsultasi digital membuat beberapa mekanisme yang perlu diketahui. Berikut ini adalah beberapa mekanisme pembuatan website yang ada di Logique">
	<meta name="keywords" content="pembuatan website, pengembangan aplikasi, pembuatan aplikasi, jasa konsultasi, aplikasi android, jasa pembuatan website, logique, logique digital indonesia, mekanisme, desain web, aplikasi android, keamanan web, pengembangan website, jasa pembuatan website, pembuatan website perusahaan.">
	<meta name="author" content="PT LOGIQUE DIGITAL INDONESIA ">
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <title>Pembuatan Sistem Web di Logique</title>
	<link href="/css/bootstrap.min.css" rel="stylesheet">	 
    <link href="css/style_systemdev.css" rel="stylesheet">
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
		<header class="header">
			<div class="container" style="position:relative">
				<div class="row">
					<!-- <div class="col-md-12">
						<a href="/" target="_blank">
							<div class="logo-header">
								<img src="img/webdev/logo.png" alt="Fitur Perusahaan" class="img-responsive">
							</div>
						</a>
					</div> -->
				</div>
				<div class="row">
					<div class="language-btn">
						<ul class="list-inline">
							<li><a href="/en/services/pembuatan-sistem-web/">EN</a></li>
							<li class="active"><a href="#">ID</a></li>
							<li><a href="/jp/services/pembuatan-sistem-web/">JP</a></li>
						</ul>
					</div>
					<div class="col-md-offset-7 col-md-5 m-t-10em">
						<h1 class="text-left m-new">Pembuatan Sistem Web di Logique</h1>
					</div>
				</div>
			</div>
		</header>
		<section class="style-1" style="padding-bottom: 0;padding-top:20px;">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-1 col-md-10 text-center">
						<h1>“Pemanfaatan teknologi terkini untuk <br class="hidden-xs"> pelayanan maksimal terhadap klien dan <br class="hidden-xs"> pelanggan.”</h1>
					</div>
				</div>
			</div>
		</section>
		<section class="style-2">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-7 col-md-5">
						<h1 class="new5">Ringka<span class="underline">san Teknikal Logi</span>que</h1>
					</div>
				</div>
			</div>
		</section>
		<section class="style-3">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<h3 class="new1">[Penggunaan Teknologi]</h3>
						<p class="new4">Teknologi berkembang sangat pesat. Penggunaan teknologi dan metode yang tepat akan memberikan manfaat maksimal untuk sistem Anda. Tim Logique menjadi salah satu yang terdepan dalam mengimplementasikan teknologi atau bahasa pemograman baru dalam pengembangan web, sistem web atau aplikasi. Beberapa yang telah kami implementasikan di antaranya adalah dengan AngularJS, Node.JS, Socket.IO, dan Ionic Framework.</p>
					</div>
					<div class="col-md-3">
						<h3 class="new1">[Perencanaan Infrastruktur]</h3>
						<p class="new4">Amazon Web Service (AWS) telah dikenal luas sebagai standar global layanan cloud infrastruktur server yang mumpuni. Baik perusahaan besar ataupun startup telah menggunakan layanan AWS karena mereka mampu memberikan tingkat keamanan dan ketersediaan yang tinggi sekaligus kemampuan skalabilitas yang fleksibel. Di Indonesia, masih sedikit perusahaan yang mampu memanfaatkan layanan AWS dengan maksimal. Logique hadir dengan pengalaman yang kuat dalam merancang dan mengelola infrastruktur berbasis AWS untuk perusahaan di Indonesia.</p>
					</div>
					<div class="col-md-3">
						<h3 class="new1">[Keamanan Sistem]</h3>
						<p class="new4">Keamanan adalah salah satu faktor penting dalam pengembangan sistem, terlebih jika sistem tersebut melingkupi transaksi keuangan seperti e-commerce atau menyimpan data-data penting perusahaan. Logique sebagai pengembang sekaligus penyedia layanan pemeriksa keamanan khususnya terkait website atau sistem web mampu memberikan tingkat keamanan yang tinggi untuk sistem Anda.</p>
					</div>
					<div class="col-md-3">
						<h3 class="new1">[Kecepatan Pengembangan]</h3>
						<p class="new4">Kami memahami pentingnya waktu dan bisnis Anda, untuk itu kami selalu berusaha memberikan yang terbaik untuk menghasilkan sistem dalam jangka waktu yang paling efektif dan efisien tanpa mengurangi kualitas dari sistem tersebut.</p>
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
									<h4><b>Sistem Lelang JBA</b></h4>
									<p>JBA adalah salah satu perusahaan lelang terbesar di Indonesia asal Jepang yang berlokasi di Meruya. Untuk JBA, kami mengembangkan sistem yang komprehensif untuk keperluan lelang yang memberikan dampak langsung terhadap bisnis mereka. Adapun cakupan sistem yang kami buat adalah dari hulu ke hilir meliputi proses registrasi, inspeksi, perencanaan dan administrasi lelang, dukungan lelang offline dan online, hingga pelaporan dan modul akunting. Pengerjaan sistem ini dilakukan secara intensif dengan komunikasi dan pendetilan terperinci dengan masing-masing user sesuai bidangnya. Sistem ini terus dikembangkan selama tiga tahun terakhir dalam bentuk sistem web dan aplikasi mobile.</p>
								</div>
							</div>
							<div class="row">
								<div class="box-2">Teknologi Utama: NodeJS, SocketIO, Android Native</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="style-6">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h1 class="new6"><span class="underline2">Wawancara</span><br>Klien</h1>
					</div>
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-12">
								<h4 class="new3">Q: Bagaimana awal mula Anda memiliki kebutuhan pembuatan sistem ini?</h4>
								<p>Klien: Pada mulanya kami melakukan banyak hal secara manual. Dengan banyaknya kendaraan yang harus kami lelang di berbagai cabang di Indonesia serta tingginya minat dari para pelanggan membuat kami kesulitan. Disitu kami mulai berpikir perlunya sebuah sistem IT yang membantu bisnis kami secara keseluruhan.</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h4 class="new3">Q: Apa perubahan yang dirasakan setelah menggunakan sistem yang dibuat oleh Logique?</h4>
								<p>Klien: Dampaknya luar biasa besar, ketika semuanya terotomatisasi kami merasakan pekerjaan yang kami lakukan lebih efektif dan efisien. Dari sisi resiko pencatatan pada buku yang mungkin rusak atau hilang pun terhindari dengan sistem yang ada, selain itu ada nilai tambah kontribusi kepada lingkungan dengan mengurangi penggunaan kertas.</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h4 class="new3">Q: Bagaimana pengalaman kerjasama Anda dengan Logique dalam pembuatan sistem ini?</h4>
								<p>Klien: Menurut kami tim Logique benar-benar diisi oleh orang-orang yang kompeten. Saya tidak bisa membayangkan bagaimana proses bisnis kami yang kompleks bisa dibuat menjadi sistem yang komprehensif termasuk proses-proses kecil yang tidak boleh terlewat semua bisa dipenuhi. Kami puas dengan kinerja Logique dan merekomendasikan layanan mereka ke semua pihak yang membutuhkan.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="style-7">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-4 col-md-7">
						<div class="row">
							<div class="col-md-9">
								<h1 class="new2">Kunci utama kesuksesan pembuatan sistem bersama Logique</h2>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h4 class="bold">Pengalaman</h4>
								<p>Kami telah menangani lebih dari 200 proyek dari berbagai macam industri selama di Indonesia dalam hal pembuatan website, sistem web, ataupun mobile aplikasi.</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h4 class="bold">Kecepatan</h4>
								<p>Ketepatan waktu sangat penting bagi kami, sehingga kami selalu berusaha untuk memberikan hasil dengan cepat sehingga pekerjaan yang kami hasilkan berdampak kepada bisnis klien.</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h4 class="bold">Kualitas</h4>
								<p>Kami mengaplikasikan metode analisa dan penerapan terbaik dalam setiap pengembangan untuk menghasilkan kualitas sistem web dan aplikasi mobile yang tinggi, baik dalam aspek fungsional, performa, dan keamanan.</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h4 class="bold">Fleksibilitas</h4>
								<p>Jika Anda memiliki tim teknikal kami terbuka untuk berdiskusi mengenai detail implementasi, alat, atau skema yang ingin Anda gunakan pada website, sistem web, atau aplikasi mobile yang dikembangkan.</p>
							</div>
						</div>
				</div>
			</div>
		</section>
		<section class="tahap-pemesanan-list">
			<div class="border-top-list hidden-xs hidden-sm"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-offset-6 col-md-6">
						<h4><b>Kami siap membantu Anda dalam pembuatan website untuk setiap kebutuhan Anda:</b></h4>
						<ul style="list-style-type: square;">
							<li class="m-b-5">Membuat dan/atau mengoperasikan homepage</li>
							<li class="m-b-5">Membangun kembali dan mengoptimalkannya untuk seluler/ponsel cerdas</li>
							<li class="m-b-5">Mengembangkan aplikasi Android/iOS</li>
							<li class="m-b-5">Mengoperasikan sistem manajemen in-house</li>
							<li class="m-b-5">Mengelola infrastruktur IT</li>
							<li class="m-b-5">Mengaudit keamanan IT, tetapi yang sudah terstruktur dari Jepang</li>
							<li class="m-b-5">Meningkatkan awareness akan perusahaan/merek saya melalui pemasaran digital</li>
							<li class="m-b-5">Meraih target pemasaran online dengan pemasangan iklan online</li>
							<li class="m-b-5">Mendesain dan mencetak materi promosi perusahaan untuk kemudian didistribusikan</li>
							<li class="m-b-5">Mengelola pengoperasian SNS (Facebook, Instagram, Youtube)</li>
							<li class="m-b-5">Memperbarui konten dan pengoperasian situs web saya</li>
							<li class="m-b-5">Membuat dan memasang chatbot online</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="border-top-list-2 hidden-xs hidden-sm"></div>
		</section>
		<section class="tahap-pemesanan-2 hidden-xs" style="padding: 2em"></section>
		<footer class="contact">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<h2 style="margin-top: 0">Hubungi Kami</h2>
						<a href="/" target="_blank"><img src="img/webdev/logo.png" alt="Fitur Perusahaan" class="cs-custom"></a>
						<div class="m-t-10 text-left">LOGIQUE DIGITAL INDONESIA<br>
						Ad Premier Building 19th Floor. <br>
						Jalan Tb. Simatupang No. 5 Ragunan, <br>
						Ps. Minggu, Jakarta Selatan, <br>Indonesia 12550</div>
						<div><i class="fa fa-phone fa-lg" style="padding-right: 5px"></i> 021) 22708935 / 36 <br><i class="fa fa-whatsapp fa-lg" style="padding-right: 5px"></i> 0811870321</div>
						<br/>
						<div class="row">
							<div class="col-xs-6">
								<div class="link-footer-webdev">
									<a href="/index.php" target="_blank">Beranda</a>
									<a href="/tentang-kami.php" target="_blank">Tentang Kami</a>
									<a href="/portofolio.php" target="_blank">Portofolio</a>
									<a href="/layanan.php" target="_blank">Layanan</a>
								</div>
							</div>
							<div class="col-xs-6">
								<div class="link-footer-webdev">
									<a href="/karir.php" target="_blank">Karir</a>
									<a href="/career/" target="_blank">Join LOGIQUE</a>
									<a href="/hubungi-kami.php" target="_blank">Hubungi Kami</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 hidden-md hidden-lg">
						<span><hr>Sebagai tim yang profesional dalam bidang jasa pembuatan website, LOGIQUE menyediakan solusi terbaik yang teroptimasi untuk bisnis Anda. Selain jasa pembuatan website, LOGIQUE juga menyediakan jasa lainnya seperti jasa konsultasi digital, jasa pembuatan aplikasi, desain web, pengembangan web system, jasa SEO dan percetakan. Kami memberikan rancangan terstruktur secara detil baik untuk pembuatan website perusahaan, aplikasi, maupun pembuatan website atau sistem berskala besar dengan kombinasi desain yang terarah dan arsitektur sistem yang baik.</span>
						<div class="row">
							<div class="col-sm-12">
								<div class="link-footer-webdev">
									<br/>
									<div style="margin-bottom:8px"><b>Produk LOGIQUE</b></div>
									<a href="/produk/dokodemo-kerja.php" target="_blank">Dokodemo-Kerja</a>
									<a href="/produk/nippo.php" target="_blank">Nippo</a>
									<a href="/produk/sugoi-saiyo.php" target="_blank">Sugoi Saiyo</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<?php if(isset($msg)) { echo $msg; } ?>
						<form role="form" name='myForm' onsubmit='return validateForm()' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
							<input type='hidden' name='submitted' id='submitted' value='1'/>
							<input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
							<div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
							<div class="row">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Nama" name="name" value='<?php echo $formproc->SafeDisplay('name') ?>'>
									</div>
									<!-- <div class="form-group">
										<input type="number" class="form-control" placeholder="No Ponsel" name="phone" value='<?php echo $formproc->SafeDisplay('phone') ?>'>
									</div>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Perusahaan" name="company" value='<?php echo $formproc->SafeDisplay('company') ?>'>
									</div> -->
									<div class="form-group">
										<input type="email" class="form-control" placeholder="Email" name="email" value='<?php echo $formproc->SafeDisplay('email') ?>'>
									</div>
									<div class="form-group">
										<textarea name="" id="" cols="30" rows="6" class="form-control" placeholder="Pesan" name="message" style="resize:vertical;"><?php echo $formproc->SafeDisplay('message') ?></textarea>
									</div>
									<div class="form-group">
										<div class="g-recaptcha captcha-custom" data-sitekey="6LcuHywUAAAAACj__hCefsBCkoIC2ExM2Sur4cCp"></div>
									</div>
									<div class="form-group btn-submit text-right text-L">
										<br>
										<button type="submit" class="btn btn-logic btn-sm">Kirim</button>
									</div>
							</div>
						</form>
					</div>
					<div class="col-md-4 hidden-xs hidden-sm">
						<p>Sebagai tim yang profesional dalam bidang jasa pembuatan website, LOGIQUE menyediakan solusi terbaik yang teroptimasi untuk bisnis Anda. Selain jasa pembuatan website, LOGIQUE juga menyediakan jasa lainnya seperti jasa konsultasi digital, jasa pembuatan aplikasi, desain web, pengembangan web system, jasa SEO dan percetakan. Kami memberikan rancangan terstruktur secara detil baik untuk pembuatan website perusahaan, aplikasi, maupun pembuatan website atau sistem berskala besar dengan kombinasi desain yang terarah dan arsitektur sistem yang baik.</p>
						<div class="row">
							<div class="col-sm-12">
								<div class="link-footer-webdev" style="padding-left:30px">
									<br/>
									<div style="margin-bottom:8px"><b>Produk LOGIQUE</b></div>
									<a href="/produk/dokodemo-kerja.php" target="_blank">Dokodemo-Kerja</a>
									<a href="/produk/nippo.php" target="_blank">Nippo</a>
									<a href="/produk/sugoi-saiyo.php" target="_blank">Sugoi Saiyo</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<section class="tahap-pemesanan-2 text-center hidden-md hidden-lg" style="padding: 2em">Copyright 2018 Logique</section>

		<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight-min.js"></script>
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

			$('.min-h').matchHeight({
				byRow: false
			});
		</script>
	</body>
</html>