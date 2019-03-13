 <?php 
require_once("form/fgcontactform.php");

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
                $msg = "<div class='alert alert-success' id='msg' role='alert'>Thank you for sending us inquiry!</div>";
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
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="LOGIQUE menyediakan layanan pembuatan website bagi Dokter Gigi atau Klinik Dental untuk memudahkan para dokter gigi dan klinik mempromosikan klinik atau dokter gigi.">
	<meta name="keywords" content="website dental, dokter gigi, klinik gigi, jasa website dental dan klinik dental, logique">
	<meta name="author" content="Logique Digital Indonesia">
	<!-- <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"> -->
    <title>Layanan Website Dental dan Klinik Dental | Logique Digital Indonesia</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">	 
    <link href="css/style.css" rel="stylesheet">
    <link href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css" rel="stylesheet" type="text/css" />
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
</head>
	<body class="dentalpage">
		<div class="wrapper">
			<header class="head-banner">
				<div class="container">
					<div class="row">
						<div class="col-md-7 col-sm-7 text-center">
							<div class="text-box">
								<div class="text-quote">
								“Jumlah pasien yang datang ke klinik kami meningkat 30% setiap bulannya setelah tertarik dengan website kami.”
								</div>
								<p class="text-p">
								Di era digital, ada banyak orang yang mencari klinik gigi terbaik melalui internet. Penting bagi klinik gigi dalam memiliki website berkualitas untuk memperoleh serta menjangkau  pasien secara luas dan efektif.
								</p>
							</div>
							<a href="#contact-form" class="btn btn-consult">Konsultasi Gratis Sekarang ! <img src="images/new/i-btn.png" alt="ring icon"></a>
						</div>
						<div class="col-md-5 col-sm-5">
							<img src="images/new/drg.png" alt="dokter gigi" class="drg">
						</div>
					</div>
				</div>
			<div class="arraw-down text-center">
				<a href="#poin"><img src="images/new/arrow.png"></a>
			</div>	
			</header>

			<section class="poin-penting" id="poin">
				<div class="container">
					<h1 class="s-title">Apa pentingnya website pribadi bagi klinik gigi?</h1>
					<div class="row">
						<div class="col-md-4 col-md-offset-1 col-sm-8">
							<p class="text-right">
							Jika dahulu kita lebih sering menggunakan brosur dan surat kabar sebagai media promosi, tetapi seiring berkembangnya teknologi cara-cara seperti itu sudah tidak efektif. Di era digital ini banyak pengusaha yang 
							mempromosikan usahanya melalui media internet, salah satunya adalah website.
							<br><br>
							Dalam bisnis, mempunyai website sendiri
							sangatlah penting untuk memperkenalkan klinik Anda kepada orang lain, baik itu pasien 
							potensial atau investor, agar terlihat menarik dan berpotensi. Berbeda dengan menggunakan website provider, Anda dapat 
							meningkatkan jumlah pengunjung website melalui Search Engine Optimalization (SEO) jika menggunakan website sendiri. Selain itu, website Anda dapat memberikan informasi kepada pengunjung setiap saat tentang produk atau jasa yang klinik Anda tawarkan. Melalui website sendiri, Anda juga menciptakan brand yang mendorong kredibilitas klinik Anda melesat naik.
							</p>
						</div>
						<div class="col-md-2 col-sm-4">
							<img src="images/new/i-pie.png" alt="situ klinik gigi" class="i-graph">
							<img src="images/new/i-bar.png" alt="situ klinik gigi" class="i-graph">
						</div>
						<div class="col-md-3 col-sm-12">
							<ul>
								<li class="green">Bisnis Anda terlihat menarik dan berpotensi bagi pasien potensial atau investor.</li>
								<li class="yellow">Mendorong jumlah pengunjung website melalui Search Engine Optimalization (SEO)</li>
								<li class="red">Dapat memberikan informasi kepada pengunjung setiap saat tentang produk atau jasa</li>
								<li class="blue">Menciptakan brand yang mendorong kredibilitas klinik Anda.</li>
							</ul>
							<small>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et</small>
						</div>
					</div>
				</div>
			</section>

			<section class="masalah-1">
				<div class="container">
					<h2 class="s-title">Masalah yang sering dihadapi</h2>
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<div class="row">
								<div class="col-md-4 col-sm-4">
									<img src="images/new/i-problem1.png" alt="masalah klinik gigi">
									<p>Tidak tahu bagaimana membuat website</p>
								</div>
								<div class="col-md-4 col-sm-4">
									<img src="images/new/i-problem2.png" alt="masalah klinik gigi">
									<p>Tidak mempunyai staff khusus mengurus website</p>
								</div>
								<div class="col-md-4 col-sm-4">
									<img src="images/new/i-problem3.png" alt="masalah klinik gigi">
									<p>Terlalu mahal untuk membuat dan mengembangkan website</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="solusi">
				<div class="container">
					<img src="images/new/solution.png" alt="solusi klinik gigi" class="img-responsive solusi-title">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<div class="row">
								<div class="col-md-4 col-sm-4">
									<img src="images/new/i-solution1.png" alt="solusi klinik gigi">
									<p>Katakan website seperti apa yang diharapkan. Dengan tim profesional kami, Anda dapat mendapatkannya dengan mudah</p>
								</div>
								<div class="col-md-4 col-sm-4">
									<img src="images/new/i-solution2.png" alt="solusi klinik gigi">
									<p>Anda tidak perlu menghabiskan waktu dan tenaga untuk mengurus website Anda. Kami siap membantu mengurusnya</p>
								</div>
								<div class="col-md-4 col-sm-4">
									<img src="images/new/i-solution3.png" alt="solusi klinik gigi">
									<p>Hanya dengan Rp500.000/bulan Anda akan mendapatkan semua akses yang disediakan.</p>
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
										<h2><img src="images/new/logo.png" alt="LOGIQUE" class="l-logo"> siap memberikan solusi untuk klinik gigi Anda!</h2>
										<h3>Berikut <b>layanan solusi</b> yang kami tawarkan.</h3>
									</div>
								</div>
								<div class="col-md-4 col-sm-4">
									<div class="d-layanan l1">
										<img src="images/new/i-service1.png" alt="layanan website klinik gigi" class="img-fluid">
										<div class="l-title"><h4>SEO</h4></div>
										<p>SEO memudahkan orang untuk menemukan website anda di posisi teratas dalam pencarian Google sehingga klinik gigi Anda dapat lebih dikenal dengan mudah.</p>
									</div>
								</div>
								<div class="col-md-4 col-sm-4">
									<div class="d-layanan l1">
										<img src="images/new/i-service2.png" alt="layanan website klinik gigi" class="img-fluid">
										<div class="l-title"><h4>Mempermudah Pencarian</h4></div>
										<p>Memudahkan pengguna dalam menemukan informasi klinik gigi Anda ketika melakukan pencarian di Google. Dengan begitu, pasien potensial klinik gigi Anda akan bertambah.</p>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 col-sm-4">
									<div class="d-layanan">
										<img src="images/new/i-service3.png" alt="layanan website klinik gigi">
										<div class="l-title"><h4>Terhubung dengan Social Media</h4></div>
										<p>Orang-orang yang melihat akun sosial media Anda dapat dialihkan ke website klinik gigi Anda dengan menggunakan hyperlink. Di sana mereka dapat menemukan informasi klinik gigi Anda secara langsung dan terpusat.</p>
									</div>
								</div>
								<div class="col-md-4 col-sm-4">
									<div class="d-layanan">
										<img src="images/new/i-service4.png" alt="layanan website klinik gigi">
										<div class="l-title"><h4>Internet AD</h4></div>
										<p>Website klinik gigi Anda dapat menjadi landing page atas segala aktivitas marketing, seperti online advertising.</p>
									</div>
								</div>
								<div class="col-md-4 col-sm-4">
									<div class="d-layanan">
										<img src="images/new/i-service5.png" alt="layanan website klinik gigi">
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
							Pilih template yang terbaik bagi klinik gigi Anda, dan <b>dalam seminggu Anda akan memiliki Website terbaik!</b>
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
									<a href="#" class="a-template">
										<div class="img-template template1"></div>
										<div class="a-caption">Template 1</div>
									</a>
									<p>Template 1 ini cocok untuk semua klinik gigi baik yang sudah memiliki beberapa klinik maupun juga bagi klinik gigi baru.</p>
								</div>
								<div class="col-md-4 col-sm-4">
									<a href="#" class="a-template">
										<div class="img-template template2"></div>
										<div class="a-caption">Template 2</div>
									</a>
									<p>Template ini khusus untuk dental klinik yang mengkhususkan perawatan gigi bagi para wanita yang menjunjung kecantikan lewat keindahan gigi.</p>
								</div>
								<div class="col-md-4 col-sm-4">
									<a href="#" class="a-template">
										<div class="img-template template3"></div>
										<div class="a-caption">Template 3</div>
									</a>
									<p>Template untuk Premium dental klinik ini dibuat dengan unsur biru dan gold untuk menggambarkan kesan mewah dan biru untuk kesehatan gigi.</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 col-sm-4">
									<a href="#" class="a-template">
										<div class="img-template template4"></div>
										<div class="a-caption">Template 4</div>
									</a>
									<p>Template dental klinik khusus untuk Anda yang memiliki target market para Remaja. Dengan design yg unik dan kekinian.</p>
								</div>
								<div class="col-md-4 col-sm-4">
									<a href="#" class="a-template">
										<div class="img-template template5"></div>
										<div class="a-caption">Template 5</div>
									</a>
									<p>Template ini special untuk anak kecil hingga bayi dengan warna cerah membuat target market tidak takut lagi untuk ke dokter gigi.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section id="masalah" class="masalah-section">
				<div class="container">
					<h2 class="text-center">Masalah <span class="white-text">yang sering dihadapi</span> Klinik Gigi</h2>
					<div class="tooth-cont">
								<img src="images/tooth2.png" class="img-responsive">
							</div>
					<div class="row ">
						<div class="col-md-6 col-sm-5">
							
						</div>

						<div class="problem-list col-md-5 col-sm-6">
							<ul>
								<li>Tidak mempunyai website yang bagus</li>
								<li>Sulit mendapatkan pasien baru</li>
								<li>Tingginya persaingan antar Klinik</li>
								<li>Fasilitas Klinik kurang dikenal</li>
								<li>Lokasi sulit ditemukan</li>
								<li>Promosi melalui iklan, mahal</li>
								<li>Pasien sulit menentukan janji konsultasi karena tidak tahu informasi jadwal praktek dokter</li>
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
								<img src="images/new/i-tag.png" alt="harga website klinik gigi"> RP. 500,000<sub>/bulan</sub>
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
								<div class="col-md-8 col-md-offset-2">
									<p>** Biaya awal dengan “Blog” adalah Rp5.000.000 Biaya bulanan: Rp9.000.000</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="situs">
				<div class="container">
					<img src="images/new/tmp-banner.png" alt="banner" class="s-banner">
					<h2 class="s-title">Ingin situs klinik anda lebih dikenal?</h2>
					<div class="row">
						<div class="col-md-2 col-md-offset-2 col-sm-3 col-xs-6">
							<img src="images/new/i-situs1.png" alt="situs klinik gigi">
							<h4>SNS Operation</h4>
						</div>
						<div class="col-md-2 col-sm-3 col-xs-6">
							<img src="images/new/i-situs2.png" alt="situs klinik gigi">
							<h4>Digital Marketing</h4>
						</div>
						<div class="col-md-2 col-sm-3 col-xs-6">
							<img src="images/new/i-situs3.png" alt="situs klinik gigi">
							<h4>CRM System</h4>
						</div>
						<div class="col-md-2 col-sm-3 col-xs-6">
							<img src="images/new/i-situs4.png" alt="situs klinik gigi">
							<h4>Mobile App</h4>
						</div>
					</div>
					<span>Silahkan bertanya tentang informasi lebih lanjut. <a href="#contact-form">Klik disini</a></span>
				</div>
			</section>

			<section class="langkah">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<h2 class="s-title">Langkah menuju sasaran</h2>
							<img src="images/new/img-steps.png" alt="langkah mudah" class="img-responsive">
						</div>
					</div>
				</div>
			</section>

			<section class="contact">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<div class="contact-info">
								Tlp. Number dan Whatsappp <br>
								<img src="images/new/i-phone.png" alt="phone"> <a href="tel:02122708935">(021) 2270 8935/36</a> <br class="visible-xs">
								<img src="images/new/i-whatsapp.png" alt="wa"> <a href="https://api.whatsapp.com/send?phone=62811870321&text=Halo%20Logique">0811870321</a>
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
							<img src="images/screen.png" class="solution-feature-icon">
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
							<img src="images/social-media.png" class="solution-feature-icon">
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
							<img src="images/domain-registration.png" class="solution-feature-icon">
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
							<img src="images/blogging.png" class="solution-feature-icon">
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
							<img src="images/viral-marketing.png" class="solution-feature-icon">
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
								<img src="images/priceandfeature-banner.png" class="img-responsive">
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
					<div class="btn-container"><a class="btn contactbtn" href="https://www.logique.co.id/hubungi-kami.php" target="_blank"> Hubungi Kami </a></div>
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
							<div class="contactform-container">
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
									<input type="text" name="name" id="name" class="input-name form-control"  value='<?php echo $formproc->SafeDisplay('name') ?>' placeholder="Nama">
								</fieldset>
								<fieldset>
									<input type="text" name="email" id=" email" class="input-email form-control" value='<?php echo $formproc->SafeDisplay('email') ?>' placeholder="Alamat Email">
								</fieldset>
								<fieldset>
		 
									<textarea class="textarea-message form-control" name="message" placeholder="Pesan"><?php echo $formproc->SafeDisplay('message') ?></textarea>
								</fieldset>
								<fieldset>
									 
									<div class="g-recaptcha pull-right" data-sitekey="6LcuHywUAAAAACj__hCefsBCkoIC2ExM2Sur4cCp"></div>
									<div class="clearfix"></div>
									 
								</fieldset>  
								<fieldset class="text-right">
							 
									<button type="submit" class="btn btn-submit submit-button">Kirim</button>
								</fieldset>

							</form>  
							<!-- <form>
								<fieldset>
									<input type="text" name="name" id="name" class="input-name form-control"  placeholder="Nama">
								</fieldset>
								<fieldset>
									<input type="text" name="email" id=" email" class="input-email form-control"  placeholder="Alamat Email">
								</fieldset>
								<fieldset>
									<input type="text" name="phone" id=" phone" class="input-phone form-control" placeholder="Nomor Hp">
								</fieldset>
								<fieldset>
									<textarea class="textarea-message form-control" name="message" placeholder="Pesan"></textarea>
								</fieldset>
								<fieldset class="text-right">
									<button type="submit" class="btn btn-submit submit-button">Kirim</button>
								</fieldset>
							</form> -->
							</div>
						</div>
					</div>
				
				</div> 
			</section>
			<footer>
				<div class="footer-container">
					<div class="container">
					<div class="row">
						<div class="col-md-7 col-sm-8  col-md-offset-1">
							<h2>Tentang Kami </h2>
							<p style="line-height: 24px; text-align: justify;">
							Sebagai tim yang profesional dalam bidang jasa pembuatan website, LOGIQUE
							menyediakan solusi terbaik yang teroptimasi untuk bisnis Anda. Selain jasa pembuatan
							website, LOGIQUE juga menyediakan jasa lainnya seperti jasa konsultasi digital, jasa
							pembuatan aplikasi, desain web, pengembangan web system, jasa SEO dan percetakan.
							Kami memberikan rancangan terstruktur secara detil baik untuk pembuatan website
							perusahaan, aplikasi, maupun pembuatan website atau sistem berskala besar dengan
							kombinasi desain yang terarah dan arsitektur sistem yang baik.</p>
						</div>
						 
						<div class="col-md-3 col-sm-4">
							
							<a href="https://www.logique.co.id/" target="_blank"><img src="images/logo_logique.png" alt="logo-footer" class="img-responsive"></a>
							<div class="addres-footer">
								<p > 	
								Ad Premier Building 19th Floor.<br> Jalan Tb. Simatupang No. 5, <br>
								Ragunan Ps. Minggu,<br> Jakarta Selatan, Indonesia 12550</p>
								<img src="images/email.png" style="width: 30px;">
							</div>
						</div>
						 
						
					</div>
					</div>
				</div>
				<div class="copyright-container">
					<div class="container text-center">
						&copy; 2017 Logique Digital Indonesia
					</div>
				</div>
			</footer>
		</div>
		<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src='https://www.google.com/recaptcha/api.js'></script>
		<script>
		$(function() {
		    $('a[href*="#"]:not([href="#"])').click(function() {
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
		</script>
		
	</body>
</html>