 <?php
require_once("form/fgcontact_webdev.php");

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
    
    <script type="text/javascript" src="//script.crazyegg.com/pages/scripts/0096/6080.js" async="async"></script>
    <title>Mekanisme Pembuatan Website | LOGIQUE Digital Indonesia</title>
	<link href="/css/bootstrap.min.css" rel="stylesheet">
	<link href="/css/style.css" rel="stylesheet">
    <link href="css/style_webdev.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
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
	<body>
		<header>
			<!-- NAVIGATION -->
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
							<div class="text-center ">
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
								<a href="https://www.logique.co.id/blog/" target="_blank">
									<div class="img-blog"></div>
									Blog
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- NAVIGATION -->

			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<a href="/" target="_blank">
							<div class="logo-header">
								<img src="img/webdev/logo.png" alt="Fitur Perusahaan" class="img-responsive">
							</div>
						</a>
					</div>
				</div>
				<div class="row">
					<div style="position:relative">
						<div class="language-btn">
							<ul class="list-inline">
								<li class="active"><a href="#">ID</a></li>
								<li><a href="/en/services/mekanisme-pembuatan-website">EN</a></li>
								<li><a href="/jp/services/mekanisme-pembuatan-website">JP</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-offset-3 col-md-7 m-t-7em">
						<h1 class="text-right"><span class="c-logique">LOGIQUE</span><br>Siap Melayani Pembuatan Website Anda!</h1>
						<!-- <div class="subtitle-header">
							Dengan pengalaman selama lebih dari 5 tahun dan telah bekerja sama dengan perusahaan baik di tingkat nasional maupun internasional, dan didukung dengan sumber daya yang profesional di bidangnya, Logique selalu siap memberikan solusi terbaik bagi pembuatan dan pengembangan website Anda
						</div> -->
					</div>
				</div>
			</div>
		</header>
		<section class="about" style="padding-bottom: 0">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-1 col-md-10">
						<div class="panel text-center custom-1">
							<h1><b>Mengapa harus memilih LOGIQUE?</b></h1>
							<br>
							<p class="p-b-20">LOGIQUE terdiri dari tim developer, designer, dan content writer yang profesional dan ahli di bidangnya. Kami menjamin akan menghasilkan website terbaik dengan standar internasional yang dapat memenuhi kebutuhan dan keinginan Anda.<br><br>
							Selain itu, kami dapat membuat website dengan tiga bahasa, yakni Indonesia, Inggris, dan Jepang. Meskipun kami perusahaan internasional, kami memiliki pengetahuan yang luas mengenai bagaimana bisnis digital dapat berjalan dengan baik di Indonesia.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-offset-1 col-md-10" style="padding: 0;">
						<div class="col-md-4 text-center">
							<div class="new-box min-h">
								<h4>Pengalaman Lebih dari 6 Tahun</h4>
								<p>LOGIQUE mempunyai pengalaman selama lebih dari 6 tahun di dunia digital, mulai dari produksi website, pengembangan website, dan berbagai produk digital lainnya. Selama itu pula, kami telah membuktikan kemampuan dan kesungguhan kami dalam mewujudkan keinginan klien-klien kami.</p>
							</div>
						</div>
						<div class="col-md-4 text-center">
							<div class="new-box min-h">
								<h4>Dipercaya Perusahaan Nasional dan Internasional</h4>
								<p>Dikerjakan oleh karyawan-karyawan yang profesional di bidangnya, membuat para klien kami merasa senang dengan pelayanan dan hasil yang kami berikan. Kami telah berhasil—dan masih terus dipercaya—mengerjakan projek-projek besar dari perusahaan nasional maupun internasional di berbagai bidang, mulai dari manufaktur, pemerintahan, finance, hingga asuransi. </p>
							</div>
						</div>
						<div class="col-md-4 text-center">
							<div class="new-box min-h">
								<h4>Cepat, Efisien, dan Fleksibel</h4>
								<p><br>Dengan tim yang cerdas dan alur kerja yang terencana dan efisien, kami dapat memastikan bahwa Anda akan menerima hasil yang diinginkan dalam waktu yang telah Anda tetapkan. Kami pun sangat fleksibel dan terbuka dengan segala bentuk perubahan. Jika Anda menginginkan penyesuaian, kami dapat segera membantu Anda. </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="obstacle" style="padding-top: 20px">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-1 col-md-7 border-l text-right">
						<h2 class="text-right">Tahapan Pembuatan Website di LOGIQUE</h2>
						<p class="text-right">LOGIQUE memiliki tahap-tahap produksi website yang terstruktur. Biasanya, untuk membuat website dengan tampilan sederhana, kami hanya membutuhkan waktu 3 minggu. Waktu tersebut akan disesuaikan berdasarkan tingkat kompleksitas permintaan Anda, seperti penambahan sistem manajemen konten (CMS) dan fitur-fitur lainnya. <br><b>Berikut rangkaian tahap produksi website di LOGIQUE.</b></p>
					</div>
					<div class="col-md-3 text-center hidden-xs hidden-sm">
						<a href="/" target="_blank"><img src="img/webdev/logo.png" alt="Fitur Perusahaan" class="custom-2"></a>
					</div>
				</div>
			</div>
		</section>
		<section class="tahap-pemesanan">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-6 col-md-6">
						<div class="card">
							<section>
							<div class="row">
								<div class="col-xs-2 col-sm-2 col-md-2 text-right">
									<span class="title-custom">1</span>
								</div>
								<div class="col-xs-10 col-sm-10 col-md-10">
									<p class="title-custom-p"><b>Tahap Pemesanan</b></p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-offset-2 col-md-10 m-t-10">
									<p>Anda dapat langsung melakukan pemesanan dan menjelaskan kepada kami gambaran awal mengenai website seperti apa yang Anda inginkan. Hubungi kami melalui email <a style="color:#333" href="mailto:info@logique.co.id"><u>info@logique.co.id</u></a> atau <a style="color:#333" target="_blank" href="/hubungi-kami.php">isi <u>Formulir Pemesanan</u></a> yang tersedia. Kami akan segera menghubungi Anda untuk berdiskusi lebih lanjut.</p>
								</div>
							</div>
							</section>
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
									<p class="title-custom-p"><b>Tahap Mendengarkan Kebutuhan</b></p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-offset-2 col-md-10 m-t-10">
									<p>Pada tahap ini, Anda dapat menjelaskan seluruh detail kebutuhan Anda. Mulai dari struktur website, penyesuaian fitur, hingga desain yang Anda inginkan. Selanjutnya, kami akan memberikan penawaran dan menjelaskan bentuk pendekatan yang efektif sesuai dengan manfaat yang ingin Anda capai melalui website tersebut.</p>
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
									<p class="title-custom-p"><b>Tahap Pengajuan Proposal</b></p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-offset-2 col-md-10 m-t-10">
									<p>Setelah menemukan konsep yang diinginkan, kami akan membuat kerangka perencanaan pembuatan website dalam bentuk proposal untuk Anda. Dalam perencanaan tersebut akan disertakan pula informasi tim yang akan dilibatkan, harga layanan, dan waktu pengerjaan yang diperlukan. </p>
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
									<p class="title-custom-p"><b>Tahap Kontrak</b></p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-offset-2 col-md-10 m-t-10">
									<p>Pada tahap ini akan terjadi penandatanganan kontrak serta pembayaran uang muka sebesar 50%. Setelah proses penandatangan kontrak serta pembayaran selesai, tim kami akan langsung memulai operasi produksi website Anda.</p>
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
									<p class="custom-p-2"><b>Tahap Konfirmasi</b></p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-offset-2 col-md-10 m-t-10">
									<div class="border-right-custom"></div>
									<p>Kami akan mengonfirmasi seluruh detail kebutuhan dan perencanaan struktur website Anda. Hal ini untuk memastikan bahwa tidak ada poin-poin yang terlewat dan menimbulkan kendala suatu saat nanti. Selain itu, kami juga akan menunjukkan kerangka website (wireframe) yang telah kami buat untuk Anda sebagai gambaran awal.</p>
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
									<p class="custom-p-2"><b>Tahap Pengerjaan Design</b></p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-offset-2 col-md-10 m-t-10">
									<div class="border-right-custom"></div>
									<p>Pada tahap ini, konsep halaman utama (homepage) akan dibuat dan didesain sesuai dengan referensi yang Anda berikan. Tim desain kami juga akan memberikan beberapa alternatif untuk kemudian dapat Anda setujui atau dilakukan revisi.</p>
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
									<p class="custom-p-2"><b>Tahap Pengerjaan Fungsional</b></p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-offset-2 col-md-10 m-t-10">
									<p>Di sini, kami akan mengeksekusi pengerjaan fungsi programming dari berbagai fitur yang telah direncanakan. Kami akan memastikan bahwa seluruh arsitektur data dan fitur dalam website berjalan dan berfungsi dengan baik.</p>
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
									<p class="title-custom-p"><b>Tahap Pengetesan</b></p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-offset-2 col-md-10 m-t-10">
									<p>Setelah website dibuat, kami akan melakukan beberapa pengetesan seperti pengetesan internal dan demonstrasi. Pengetesan juga akan melibatkan Anda sebagai pemilik agar Anda bisa langsung merasakan dan menilai hasil jadi website Anda.</p>
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
									<p class="title-custom-p"><b>Tahap Peluncuran Website</b></p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-offset-2 col-md-10 m-t-10">
									<p>Setelah seluruh rangkaian pembuatan website telah dicapai, kami dapat membantu memindahkan data dari website lama Anda jika diperlukan. Pada tahap ini, Anda bisa langsung melunasi sisa pembayaran dan website Anda dapat segera digunakan. </p>
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
									<p class="title-custom-p"><b>Tahap Pengelolaan</b></p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-offset-2 col-md-10 m-t-10">
									<p>Setelah website diluncurkan, kami tidak serta-merta meninggalkan Anda. Setiap website memerlukan pengelolaan jangka panjang, tidak terkecuali website Anda. Kami akan terus menjaga sistem website Anda agar tetap memberikan hasil yang Anda inginkan.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="layanan p-t-10-m">
			<div class="container">
				<div class="row hidden-md hidden-lg">
					<div class="col-md-12">
						<h2 class="m-m-10">BUTUH LAYANAN LAINNYA?</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<h4 class="panel text-center custom-faq">Selain produksi website, LOGIQUE juga menyediakan beragam layanan lain yang dapat menjadi solusi untuk mengoptimalkan bisnis digital Anda.</h4>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<h2 class="custom-3">Pengembangan Aplikasi Mobile</h2>
						<p class="min-h">Kami melayani pengembangan aplikasi mobile untuk Android dan iOS dengan UI/UX yang user-friendly, stabil, dan mudah digunakan. Pengembangan aplikasi meliputi perancangan, implementasi teknologi baru, optimalisasi UI/UX, desain, hingga pendaftaran ke Google Play/App Store. Kami siap membantu mengoptimasi bisnis Anda dengan aplikasi mobile berteknologi terkini.</p>
						<div>
							<a href="/layanan/pembuatan-aplikasi-mobile/" target="_blank" class="btn btn-logic btn-md">Info lebih lanjut</a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="border-top-custom-2 hidden-xs hidden-sm">BUTUH LAYANAN LAINNYA?</div>
						<h2 class="custom-3">Pembuatan Website Karir</h2>
						<p class="min-h">Untuk membantu perusahaan Anda menemukan calon karyawan yang sesuai, kami menyediakan layanan pembuatan halaman website karir yang terstruktur, dinamis, dan teroptimasi dengan baik. Halaman ini akan menunjukkan profesionalitas perusahaan Anda, sehingga akan ada banyak calon-calon pekerja yang tertarik untuk bekerja di perusahaan Anda.</p>
						<div>
							<a href="/layanan/pembuatan-website-karir-perusahaan/" target="_blank" class="btn btn-logic btn-md">Info lebih lanjut</a>
						</div>
					</div>
					<div class="col-md-4">
						<h2 class="custom-3">Pengetesan Keamanan Website (Pen-Test)</h2>
						<p class="min-h">Perlindungan keamanan website Anda sangat diperlukan agar tidak mudah disusupi oleh orang-orang yang tidak bertanggung jawab. Untuk itu, LOGIQUE menyediakan layanan tes keamanan website. Dengan layanan ini, kami akan melakukan penelusuran setiap celah dan potensi penyusupan, untuk kemudian dilakukan tindakan pencegahan, seperti injeksi SQL, cross-site scripting, session jacking, dan lain-lain. Layanan ini kami tawarkan dengan harga mulai Rp 10 juta.</p>
						<div>
							<a href="/layanan/penetration-testing/" target="_blank" class="btn btn-logic btn-md">Info lebih lanjut</a>
						</div>
					</div>
				</div>
				<br class="hidden-xs">
				<div class="row">
					<div class="col-md-4">
						<h2 class="custom-3">Pengelolaan Website</h2>
						<p class="min-h">Tidak hanya pembuatan website, LOGIQUE juga menyediakan layanan maintenance atau pengelolaan website. Mulai dari pemeliharaan, pembuatan konten dengan SEO, hingga pemasaran. Seluruh progres dan strategi peningkatan traffic ini nantinya akan dilaporkan langsung kepada Anda secara berkala. Selama pengelolaan ini, kami akan memastikan website Anda mendapatkan pengunjung potensial sebanyak-banyaknya sesuai dengan target bisnis Anda.</p>
						<div>
							<a href="/portofolio.php" target="_blank" class="btn btn-logic btn-md">Info lebih lanjut</a>
						</div>
					</div>
					<div class="col-md-4">
						<h2 class="custom-3">Konsultasi Bisnis Digital</h2>
						<p class="min-h">LOGIQUE memiliki pengalaman selama 6 tahun dalam menangani permasalahan digital serta membantu berbagai perusahaan membangun bisnis di dunia digital, baik dalam skala nasional maupun internasional. Jika Anda memiliki keraguan atau memiliki permasalahan terkait bisnis digital Anda, LOGIQUE menyediakan layanan konsultasi yang dapat memberikan solusi untuk Anda.</p>
						<div>
							<a href="/portofolio.php" target="_blank" class="btn btn-logic btn-md">Info lebih lanjut</a>
						</div>
					</div>
				</div>
				<br><br class="hidden-xs">
				<div class="row">
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
				</div>
			</div>
		</section>
		<section style="padding: 2em">
			<div class="row">
				<div class="col-md-12 text-center" style=" background: #ffcd38; padding: 1.5em; border-radius: 1em; ">
					<h4 style="margin-top: -5px;">Jika Anda tertarik dengan layanan LOGIQUE di atas, segera hubungi kami. Kami selalu siap membantu Anda.</h4>
					<a href="/portofolio.php" target="_blank" class="btn btn-logic btn-lg btn-portfolio">Portfolio Kami</a>
				</div>
			</div>
		</section>

		<section class="tahap-pemesanan-list">
			<div class="border-top-list hidden-xs hidden-sm"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-offset-6 col-md-6">
						<h4><b>Kami siap membantu Anda dalam pembuatan website untuk setiap kebutuhan Anda:</b></h4>
						<ul>
							<li class="m-b-5">Membuat dan/atau mengoperasikan website</li>
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
		<?php include '../../footer.php'; ?>

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
				byRow: true
			});
		</script>
	</body>
</html>
