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
    <meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="PT LOGIQUE DIGITAL INDONESIA ">
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <title>Aplikasi Mobile | Logique Digital Indonesia</title>
	<link href="/css/bootstrap.min.css" rel="stylesheet">	 
    <link href="css/style.css" rel="stylesheet">
    <link href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css" rel="stylesheet" type="text/css" />
	<script src="https://use.fontawesome.com/df558bb4a1.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Rokkitt:300,400,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-105878648-1', 'auto');
	ga('send', 'pageview');

	</script>
</head>
	<body class="mobileapp-page">
		<header>
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<img class="img-responsive" src="img/logo_logique.png"/>
					</div>
				</div>
				<div class="row">
					<div class="col-md-7">
						<br/><br/><br/>
						<h1>Percayakan Masa Depan Pengembangan <span class="yellow">Aplikasi Mobile</span> Anda Pada <span class="yellow">LOGIQUE</span></h1>
						<p>	
						Kami menyediakan layanan dan solusi terbaik dalam mengembangkan aplikasi mobile berskala perusahaan atau berbasis konsumen untuk smartphone / tablet iOS dan Android.
						</p>
						<div class="visible-md visible-lg"><br/><br/><br/><br/><br/><br/><br/><br/><br/></div>
					</div>
					<div class="col-md-5">
						<img src="img/hp-header.png" class="hp-header img-responsive center-block"/>
					</div>
				</div>
			</div>
		</header>
		<div class="hubungi-kami-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<a href="/hubungi-kami.php" target="_blank"><span class="purple">Hubungi kami</span></a> untuk informasi lebih lanjut.
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<br/><br/>
			<div class="row">
				<div class="col-md-5">
					<h2 class="first">Pengembangan <span>Aplikasi Mobile</span> Berorientasi Pengguna</h2>
					<br/>
					<img src="img/mobile-phone.png" class="img-responsive center-block mobile-phone"/>
				</div>
				<div class="col-md-7">
					<p>
						Aplikasi mobile yang kami buat di desain dengan filosofi bahwa informasi yang berada pada orang yang tepat memiliki kemampuan yang besar dalam sebuah perubahan. Kami fokus untuk memberikan aplikasi mobile yang berorientasi pengguna agar dapat 
						memberikan pengalaman maksimal dalam perubahan digital pada hidup mereka.<br/><br/>
						Kami juga menyadari bahwa di era digital saat ini teknologi terus berkembang dan berevolusi. Untuk itu kami selalu berusaha membantu memberikan konsep yang sejalan dengan teknologi terkini agar aplikasi mobile yang dibuat dapat mengalami pertumbuhan dan kesuksesan. <br/><br/>
						Desain dan pengembang aplikasi kami tidak hanya akan membantu menciptakan produk hebat, kami juga siap membantu Anda untuk memastikan bahwa hasil akhir yang kami berikan adalah yang terbaik.<br/><br/>
						Jika ada yang salah selama pengembangan, kami akan memberitahu Anda. Kami ingin produk Anda berhasil sama seperti Anda. Dengan proses yang efisien, tim kami tahu apa yang dapat bekerja dengan baik terkait pengembangan aplikasi mobile.

					</p>
				</div>
			</div>
			<br/><br/>
		</div>
		<div class="solusi">
			<div class="container">
				<br/><br/>
				<div class="row">
					<div class="col-md-4">
						<div class="title">LOGIQUE adalah Salah Satu Pengembang <b>Aplikasi Mobile</b> Terbaik di Indonesia</div>
					</div>
					<div class="col-md-8">
						<ul class="fa-ul">
							<li><span class="fa-li"><i class="fa fa-check-square"></i></span>LOGIQUE dapat menyesuaikan kebutuhan dan keinginan klien dengan teknologi terkini untuk menghasilkan aplikasi iOS dan Android yang terdepan dan berskala internasional.</li>
							<li><span class="fa-li"><i class="fa fa-check-square"></i></span>Aplikasi iOS dan Android yang kami kembangkan telah melalui proses perencanaan desain yang matang oleh Desainer UI/UX berpengalaman sehingga tampilan yang dihasilkan sangat user friendly.</li>
							<li><span class="fa-li"><i class="fa fa-check-square"></i></span>Keamanan, optimasi, dan skalabilitas aplikasi diperhitungkan dengan detil oleh ahli teknis kami untuk memberikan hasil akhir yang dapat digunakan dengan maksimal oleh pengguna.</li>
							<li><span class="fa-li"><i class="fa fa-check-square"></i></span>Dengan pengalaman lebih dari lima tahun, kemampuan dan keahlian tim LOGIQUE sudah teruji kualitasnya pada berbagai macam klien dan proyek yang berasal dari dalam dan luar negeri.</li>
						</ul>
					</div>
				</div>
				<br/><br/>
			</div>
		</div>
		<div class="container logique-help">
			<br/><br/><br>
			<div class="row">
				<div class="col-md-12">
					<div class="font-28 text-center">Bagaimana <span class="purple"><b>LOGIQUE</b></span> Membantu Anda</div>
				</div>
				<div class="clearfix"></div>
				<br/><br/><br>
				<div class="col-md-4">
					<div class="div-help">
						<div class="div-title"><span class="title purple"><b>Ide Aplikasi Inovatif</b></span></div>
						<div class="">
						<img class="img-responsive center-block" src="img/inovatif.png"/><br/>
						Apakah Anda sudah menemukan ide untuk mengembangkan aplikasi mobile senilai milyaran rupiah seperti Go-Jek, Traveloka, atau Tokopedia? Dengan keamanaan informasi melalui Perjanjian Kerahasiaan kami dapat membantu menganalisa ide Anda dan merealisasikannya. Kami akan membantu Anda untuk menjadi App-Enterpreneur besar selanjutnya di industri yang sedang berkembang sangat pesat ini.</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="div-help">
						<div class="div-title"><span class="title purple"><b>Memberikan Nilai Tambahan</b></span></div>
						<div class="">
						<img class="img-responsive center-block" src="img/nilai-tambah.png"/><br/>
						Sudah menyediakan produk dan layanan kepada pelanggan Anda? Kami dapat membantu Anda menggunakan teknologi berbasis aplikasi untuk membangun nilai tambah sesuai dengan penawaran Anda. Kenyamanan, kemampuan, dan konektivitas smartphone menjadikannya sebagai platform ideal untuk membawa nilai tambah ke layanan Anda saat ini.</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="div-help">
						<div class="div-title"><span class="title purple"><b>Meningkatkan Proses Bisnis</b></span></div>
						<div class="">
						<img class="img-responsive center-block" src="img/proses-bisnis.png"/><br/>
						Pernahkah Anda mempertimbangkan bagaimana Anda dapat mengefektifkan bisnis atau perusahaan Anda menggunakan teknologi aplikasi mobile? Aplikasi memberikan peluang yang sangat luas untuk memberdayakan staf dan meningkatkan efisiensi. Solusi aplikasi mobile dengan perencanaan sesuai kebutuhan perusahaan telah terbukti meningkatkan aktivitas kerja sehari-hari yang memungkinkan menghasilkan kinerja yang lebih baik dibandingkan pesaing bisnis Anda.</div>
					</div>
				</div>
			</div>
			<br/><br/><br/>
		</div>
		<div class="solusi revision">
			<div class="container">
				<br/><br/>
				<div class="row row-center-md">
					<div class="col-md-offset-1 col-md-3">
						<div class="title">Solusi yang di peroleh dari pengambangan <span><b>Aplikasi Mobile</b></span></div>
					</div>
					<div class="col-md-8">
						<ul class="fa-ul">
							<li><span class="fa-li"><i class="fa fa-check-square"></i></span>Aplikasi mobile sebagai produk dan aset yang menghasilkan.</li>
							<li><span class="fa-li"><i class="fa fa-check-square"></i></span>Aplikasi mobile sebagai media penghubung antara perusahan dan karyawan.</li>
							<li><span class="fa-li"><i class="fa fa-check-square"></i></span>Aplikasi mobile sebagai alat pendukung pemasaran produk dan jasa anda.</li>
							<li><span class="fa-li"><i class="fa fa-check-square"></i></span>Aplikasi mobile sebagai aplikasi pendukung pengunaan produk anda.</li>
						</ul>
					</div>
				</div>
				<br/><hr/><br/>
				<div class="font-28 text-center">Layanan Kami</div><br/>
				<div class="row">
					<div class="col-md-10 col-md-offset-1 text-center">
						Kami menawarkan layanan lengkap mulai dari pengembangan konsep aplikasi, pembuatan, peluncuran, hingga pengelolaan berkelanjutan untuk aplikasi Anda. Semua layanan kami bertujuan untuk membangun aplikasi yang menawarkan pengalaman maksimal bagi pengguna dan hasil transformasi bisnis yang luar biasa.
					</div>
				</div>
				<br/>
				<div class="row">
					<div class="col-md-4">
						<div class="layanan-kami">
							<div class="title">Pengembangan Aplikasi iOS untuk iPhone / iPad</div>
							<br/>
							<img alt="Pengembangan Aplikasi iOS untuk iPhone / iPad" src="img/apple.png" class="img-responsive center-block"/><br/>
							Kami berpengalaman mengembangkan aplikasi yang memiliki kompatibilitas pada berbagai versi iOS dengan menggunakan bahasa Swift mulai dari Swift 1 hingga Swift 4 yang populer digunakan saat ini.
						</div>
					</div>
					<div class="col-md-4">
						<div class="layanan-kami">
							<div class="title">Pengembangan Aplikasi Android</div>
							<br/>
							<img alt="Pengembangan Aplikasi Android" src="img/android.png" class="img-responsive center-block"/><br/>
							Berbagai macam aplikasi Android native berbasis Java mulai dari yang sederhana, multi-bahasa, hingga dengan kompleksitas yang tinggi telah kami hasilkan.
						</div>
					</div>
					<div class="col-md-4">
						<div class="layanan-kami">
							<div class="title">Pengembangan Aplikasi Hybrid</div>
							<br/>
							<img alt="Pengembangan Aplikasi Hybrid" src="img/hybrid.png" class="img-responsive center-block"/><br/>
							Jika Anda ingin memiliki dua aplikasi untuk Android dan iOS sekaligus dalam satu waktu kami juga dapat memberikan layanan pembuatan berbasis hybrid dengan mengimplementasikan berbagai teknologi seperti Ionic, Adobe PhoneGap, Apache Cordova, Xamarin, AngularJS, dan sebagainya.
						</div>
					</div>
				</div>
				<div class="hidden-xs hidden-sm"><br/></div>
				<div class="row">
					<div class="col-md-4 col-md-offset-2">
						<div class="layanan-kami">
							<div class="title">Desain UI/UX Aplikasi Mobile</div>
							<br/>
							<img alt="Desain UI/UX Aplikasi Mobile" src="img/ux.png" class="img-responsive center-block"/><br/>
							Semua aplikasi mobile kami dikembangkan dengan estetika desain yang sesuai dengan fungsinya. Dengan standar desain yang tinggi, kami memastikan pelanggan akan menyukai interaksi berkelanjutan. Selain itu, penerapan desain responsif yang kami lakukan juga memberikan pengalaman maksimal untuk pengguna.
						</div>
					</div>
					<div class="col-md-4">
						<div class="layanan-kami">
							<div class="title">Pengembangan CMS / API</div>
							<br/>
							<img alt="Pengembangan CMS / API" src="img/cms.png" class="img-responsive center-block"/><br/>
							Untuk mendukung pengembangan aplikasi mobile kami juga menyediakan layanan pembuatan CMS dan API dalam berbagai platform, khususnya PHP.
						</div>
					</div>
				</div>
				<br/><br/>
			</div>
		</div>
		<div class="portofolio">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<div class="font-28">Klien / Portofolio</div>
						<br/>
						<div class="font-20">Kami memiliki pengalaman bekerja sama dengan klien dari berbagai sektor industri dan telah membantu menghasilkan aplikasi mobile yang mampu memecahkan masalah perusahaan, meningkatkan penjualan, dan menjaga relasi pelanggan.
						</div>
						<br/><br/>
					</div>
					<div class="col-md-7">
					 <div class="portfolio-slider">
						<div>
							<div class="row">
								<div class="col-sm-5">
									<img class="img-responsive center-block" src="img/sunlife.png"/>
								</div>
								<div class="col-sm-7">
									<div class="caption-portfolio">
										<div class="arrow-left"></div>
										<div class="font-28">Kategori: Finansial</div><br/>
										<div class="font-20">
										Aplikasi yang membantu dealer mengelola iklan mobil pada salah satu portal mobil bekas terbesar di Indonesia.
										</div>
									</div>
								</div>
							</div>
						</div>
						<div>
							<div class="row">
								<div class="col-sm-5">
									<img class="img-responsive center-block" src="img/otomart.png"/>
								</div>
								<div class="col-sm-7">
									<div class="caption-portfolio">
										<div class="arrow-left"></div>
										<div class="font-28">Kategori: Otomotif</div><br/>
										<div class="font-20">
										Aplikasi yang membantu dealer mengelola iklan mobil pada salah satu portal mobil bekas terbesar di Indonesia.
										</div>
									</div>
								</div>
							</div>
						</div>
						<div>
							<div class="row">
								<div class="col-sm-5">
									<img class="img-responsive center-block" src="img/frangipani.png"/>
								</div>
								<div class="col-sm-7">
									<div class="caption-portfolio">
										<div class="arrow-left"></div>
										<div class="font-28">Kategori: Jasa</div><br/>
										<div class="font-20">
										Aplikasi yang membantu pengelola spa internasional untuk meningkatkan layanan dan relasi dengan pelanggan.
										</div>
									</div>
								</div>
							</div>
						</div>
					 </div>
					</div>
				</div>
			</div>
		</div>
		<div class="bg-grey">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="font-28 text-center">Cara Kerja LOGIQUE</div>
						<br/>
						<p class="text-center">
							Baik untuk proyek B2C, B2B, startup, atau solusi operasional perusahaan, pertama-tama, kami akan meluangkan waktu untuk memahami bisnis, produk dan kebutuhan pengguna. Cara dan hasil kerja kami sangat disukai oleh pengguna dan klien karena mampu menciptakan aplikasi yang optimal dan memberi nilai tambah dari segi bisnis.
						</p>
					</div>
				</div>
				<br/><br/>
				<div class="row">
					<div class="col-md-5ths">
						<div class="contain-img">
							<img class="img-responsive center-block" src="img/cara-kerja1.png" alt="Perencanaan"/>
							<div class="text-center title">Perencanaan</div>
						</div>
						<p>
							Diawal proyek kami akan berdiskusi dengan Anda dan memastikan bahwa semua kebutuhan perusahaan, layanan, atau pengguna telah masuk ke dalam cakupan aplikasi. Kami akan memberikan rancangan konsep berupa wireframe sebagai hasil akhir.
						</p>
					</div>	
					<div class="col-md-5ths">
						<div class="contain-img">
							<img class="img-responsive center-block" src="img/cara-kerja2.png" alt="Desain"/>
							<div class="text-center title">Desain</div>
						</div>
						<p>
							Dari konsep yang telah dihasilkan, desainer kami akan mulai membuat desain halaman. Kami dapat memberikan beberapa opsi untuk desain halaman utama yang bisa Anda pilih. Desain yang cocok akan kami revisi lebih lanjut dan kami akan melanjutkan desain halaman lainnya.
						</p>
					</div>
					<div class="col-md-5ths">
						<div class="contain-img">
							<img class="img-responsive center-block" src="img/cara-kerja3.png" alt="Pengembangan"/>
							<div class="text-center title">Pengembangan</div>
						</div>
						<p>
							Berdasarkan konsep secara fungsional tim teknis kami akan mulai mengembangkan aplikasi mobile yang dapat berfungsi dengan baik sesuai dengan standar pengembangan dan keamanan aplikasi yang ada.
						</p>
					</div>
					<div class="col-md-5ths">
						<div class="contain-img">
							<img class="img-responsive center-block" src="img/cara-kerja4.png" alt="Testing"/>
							<div class="text-center title">Testing</div>
						</div>
						<p>
							Tim QA kami akan memastikan bahwa fitur yang dikembangkan oleh tim teknis sudah berjalan sebagaimana mestinya sehingga Anda tidak perlu khawatir.
						</p>
					</div>
					<div class="col-md-5ths">
						<div class="contain-img">
							<img class="img-responsive center-block" src="img/cara-kerja5.png" alt="Peluncuran Aplikasi"/>
							<div class="text-center title">Peluncuran Aplikasi</div>
						</div>
						<p>
							Selamat! Setelah semua proses dilalui, aplikasi Android atau iOS Anda siap untuk diluncurkan pada App Store atau Google Play Store. 
						</p>
					</div>
				</div>
			</div>
		</div>
		<!--<div class="slider-mobile">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<img src="img/device.png" class="device hidden-xs"/>
						<img src="img/device-m.png" class="device visible-xs"/>
						<div class="slider-app">
						  <div><img src="img/sunlife.png" class="img-responsive center-block"/></div>
						  <div><img src="img/frangipani.png" class="img-responsive center-block"/></div>
						  <div><img src="img/otomart.png" class="img-responsive center-block"/></div>
						  <div><img src="img/otomart.png" class="img-responsive center-block"/></div>
						</div>		
					</div>
				</div>
			</div>
		</div>-->
		<div class="div-form">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-2 col-md-8">
						Hubungi kami untuk mendapatkan <b>penawaran</b> terbaik
						<br/>
						<?php if(isset($msg))
						{
						echo $msg;
						} 
						?>
						<form id="contact-form-mobile"  class="contactform-mobile" role="form" name='myForm' onsubmit='return validateForm()' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
						<input type='hidden' name='submitted' id='submitted' value='1'/>
						<input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
						<fieldset><div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div></fieldset>
							<div class="form-group">
								<div class="row">
									<div class="col-md-6">
										<input type="text" name="name" placeholder="Nama Anda" class="form-control name-input" value='<?php echo $formproc->SafeDisplay('name') ?>'/>
									</div>
									<div class="col-md-6">
										<input type="email" name="email" placeholder="Alamat Email" class="form-control" value='<?php echo $formproc->SafeDisplay('email') ?>' />
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-md-12">
										<textarea class="form-control" placeholder="Pertanyaan" name="message"><?php echo $formproc->SafeDisplay('message') ?></textarea>
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
		</div>
		<div class="buat-sekarang">
			<div class="container">
				<div class="row row-center-md">
					<div class="col-md-6 font20">
						Memiliki pertanyaan dan perlu informasi lebih lanjut ?
						<div class="hidden-lg hidden-md"><br/></div>
					</div>
					<div class="col-md-6">
						<a href="/hubungi-kami.php" target="_blank" class="btn btn-buat-sekarang">CARI SOLUSI</a>
					</div>
				</div>
			</div>
		</div>
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="title">Tentang Kami</div>
						<br/>
						Sebagai tim yang profesional dalam bidang jasa pembuatan website, LOGIQUE menyediakan solusi terbaik yang teroptimasi untuk bisnis Anda. Selain jasa pembuatan website, LOGIQUE juga menyediakan jasa lainnya seperti  jasa konsultasi digital, jasa pembuatan aplikasi, desain web, pengembangan web system, jasa SEO dan percetakan. Kami memberikan rancangan terstruktur secara detil baik untuk pembuatan website perusahaan, aplikasi, maupun pembuatan website atau sistem berskala besar dengan kombinasi desain yang terarah dan arsitektur sistem yang baik.<br/>
						<div class="visible-sm visible-xs"><br/></div>
					</div>
					<div class="col-md-4">
						<div class="title">Hubungi Kami</div>
						<a href="/hubungi-kami.php" target="_blank"><img src="img/logo_logique_footer.png" class="img-responsive"/></a>
						Ad Premier Building 19th Floor. <br/>
						Jalan Tb. Simatupang No. 5 <br/>
						Ragunan, Ps. Minggu, <br/>
						Jakarta Selatan, Indonesia 12550 <br/>
					</div>
				</div>
			</div>
		</footer>
		<div class="copyright">
			© 2018 Logique Digital Indonesia. All Rights Reserved.
		</div>
		<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
		<script src="/js/jquery.matchHeight.js"></script>
		<script src="/js/slick.min.js"></script>
		<script src='https://www.google.com/recaptcha/api.js'></script>
		<script type="text/javascript">			
			$(function() {
				$('.div-help').matchHeight();
				$('.layanan-kami').matchHeight();
			});	
			
			$('.portfolio-slider').slick({
			  dots: true,
			  infinite: true,
			  speed: 500,
			  fade: true,
			  arrows: false,
			  autoplay: true,
			  cssEase: 'linear'
			});
		</script>
	</body>
</html>