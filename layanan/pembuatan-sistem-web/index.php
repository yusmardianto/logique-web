 <?php
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
    <meta name="description" content="Sebagai web developer terbaik di Indonesia, LOGIQUE menawarkan layanan jasa pembuatan sistem web sebagai solusi bisnis digital Anda. Kami dapat membantu Anda membangun bisnis apa pun dengan pemanfaatkan teknologi digital, dimulai dengan pembuatan website.">
	<meta name="keywords" content="pembuatan website, pengembangan aplikasi, pembuatan aplikasi, jasa konsultasi, aplikasi android, jasa pembuatan website, logique, logique digital indonesia, mekanisme, desain web, aplikasi android, keamanan web, pengembangan website, jasa pembuatan website, pembuatan website perusahaan.">
	<meta name="author" content="PT LOGIQUE DIGITAL INDONESIA ">
	<meta itemprop="name" content="PT. Logique Digital Indonesia">
	<meta property="og:title" content="Jasa Pembuatan dan Pengembangan Sistem Web di Jakarta | LOGIQUE">
	<meta property="og:type" content="website">
	<meta property="og:site_name" content="Logique">
	<meta property="og:url" content="https://www.logique.co.id/layanan/pembuatan-sistem-web/">
	<meta property="og:image" content="https://www.logique.co.id/img/ogimg/layanan.png">
	<meta property="og:description" content="Sebagai web developer terbaik di Indonesia, LOGIQUE menawarkan layanan jasa pembuatan sistem web sebagai solusi bisnis digital Anda. Kami dapat membantu Anda membangun bisnis apa pun dengan pemanfaatkan teknologi digital, dimulai dengan pembuatan website.">
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <title>Jasa Pembuatan dan Pengembangan Sistem Web di Jakarta | LOGIQUE</title>
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
						<h1 class="text-left m-new">Cari Perusahaan Pengembangan Sistem Web? LOGIQUE AJA!</h1>
					</div>
				</div>
			</div>
		</header>
		<section class="style-1" style="padding-bottom: 0;padding-top:20px;">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-1 col-md-10 text-center">
						<h1>“Pemanfaatan teknologi terkini untuk meningkatkan profit bisnis Anda.”</h1>
					</div>
				</div>
			</div>
		</section>
		<section class="style-2">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-7 col-md-5">
						<h1 class="new5">Komponen Pengembangan Sistem Web di <span class="underline">LOGIQUE</span></h1>
					</div>
				</div>
			</div>
		</section>
		<section class="style-3">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h4 class="style-3-h1">
						<span class="tambah-lg hidden-sm hidden-md hidden-lg">Komponen Pengembangan Sistem Web di LOGIQUE<br><br></span>
						Sebagai web developer berkualitas di Indonesia, kami memberikan layanan yang terbaik dan maksimal kepada para klien kami, terutama dalam memberikan berbagai komponen untuk pengembangan sistem web. Berikut ini adalah beberapa komponen pengembangan sistem web yang kami berikan kepada klien kami, antara lain yaitu:
						</h4>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<h3 class="new1">[Teknologi Mutakhir]</h3>
						<p class="new4">Dengan semakin berkembangnya teknologi saat ini, terutama di dunia web development, tentu memacu kami untuk terus mengupdate, mempelajarinya dan menerapkannya pada sistem web Anda agar memberikan hasil yang maksimal sehingga mempengaruhi pada tingkat kunjungan website serta profit bisnis Anda. Beberapa teknologi mutakhir yang telah kami terapkan kepada para klien kami antara lain yaitu, AngularJS, Node.JS, Socket.IO, dan Ionic Framework.</p>
					</div>
					<div class="col-md-3">
						<h3 class="new1">[Infrastruktur Terencana]</h3>
						<p class="new4">Perencanaan infrastruktur merupakan salah satu hal yang paling penting sebelum melakukan pengembangan sistem web. Karena itu, demi menjamin keberlangsungan bisnis Anda dari waktu ke waktu, LOGIQUE memberikan Anda layanan kelas atas dalam hal perancangan serta pengelolaan sistem web, di mana infrastruktur yang kami gunakan telah berbasis AWS (Amazon Web Service) yang merupakan standar layanan global cloud infrastruktur server yang cukup terkenal dan telah digunakan di berbagai perusahaan-perusahaan besar serta perusahaan startup terkenal lainnya.</p>
					</div>
					<div class="col-md-3">
						<h3 class="new1">[Sistem Keamanan Terkendali]</h3>
						<p class="new4">Sebagai web developer terbaik di Indonesia, LOGIQUE sadar jika keamanan merupakan faktor penting dalam pembuatan dan pengembangan sistem web. Karena itu, LOGIQUE memberikan layanan keamanan pada sistem web Anda secara optimal dan menyeluruh, terutama bagi website e-commerce ataupun website yang digunakan untuk menyimpan berbagai data penting perusahaan sehingga tidak mudah untuk disusupi oleh orang-orang yang tidak bertanggung jawab.</p>
					</div>
					<div class="col-md-3">
						<h3 class="new1">[Cepat & Tepat]</h3>
						<p class="new4">Kami memahami pentingnya waktu bagi bisnis Anda. Karena itu, kami selalu berusaha memberikan layanan yang terbaik dan optimal bagi Anda dengan cara memangkas waktu dalam mengembangkan sistem web secara efisien dan seefektif mungkin tanpa mengurangi kualitas dari sistem tersebut sehingga hasil yang didapatkan sesuai dengan yang diinginkan dalam jangka waktu yang telah ditentukan bersama.</p>
					</div>
				</div>
			</div>
		</section>
		<section class="tahap-pemesanan-2 hidden-xs" style="padding: 2em">
			<h3>LOGIQUE telah terbukti membantu mencapai target bisnis para kliennya</h3>
			<p>Kami telah mengerjakan proyek-proyek berskala nasional dan internasional, salah satunya yaitu pengembangan sistem lelang JBA. Berikut studi kasusnya.</p>
		</section>
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
									<p>JBA merupakan salah satu perusahaan lelang mobil dan motor asal Jepang yang terbesar di Indonesia. Perusahaan ini berlokasi di Meruya, Jakarta Barat dan telah bekerja sama dengan LOGIQUE mulai dari pembuatan website serta pengembangan sistem web yang komprehensif demi keperluan lelang, sehingga mampu memberikan dampak langsung terhadap bisnis mereka. Karena itu, kami membuat beberapa cakupan sistem yang mereka inginkan, mulai dari proses registrasi, inspeksi, perencanaan serta administrasi lelang, dukungan lelang melalui offline dan online hingga proses pelaporan dan modul akunting. Pengerjaan sistem web ini dilakukan secara massif dan intensif dengan melakukan komunikasi langsung kepada user yang sesuai dengan bidangnya. Dalam tiga tahun terakhir, sistem ini terus dikembangkan dalam bentuk sistem web dan aplikasi mobile.</p>
								</div>
							</div>
							<div class="row">
								<div class="box-2">Beberapa teknologi yang kami gunakan dalam sistem lelang JBA tersebut antara lain yaitu, NodeJS, SocketIO, dan Android Native.</div>
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
						<h1 class="new6"><span class="underline2">Testimoni</span><br>Klien</h1>
					</div>
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-12">
								<h4 class="new3">Q: Bagaimana awal mula terciptanya pembuatan sistem ini?</h4>
								<p>Klien: Dulu kami melakukan banyak hal secara manual. Dengan banyaknya kendaraan yang harus kami lelang di berbagai cabang di Indonesia serta tingginya minat dari para pelanggan, tentu membuat kami kesulitan. Terlintas di pikiran kami bahwa perlunya sebuah sistem IT yang membantu bisnis kami secara keseluruhan sehingga meningkatkan profit perusahaan.</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h4 class="new3">Q: Dampak apakah yang dirasakan setelah menggunakan sistem yang dibuat oleh LOGIQUE?</h4>
								<p>Klien: Dampaknya luar biasa besar, saat semuanya telah terotomatisasi dengan baik, kami merasakan bahwa pekerjaan yang kami lakukan menjadi jauh lebih efektif dan efisien. Dari sisi resiko, pencatatan pada buku yang mungkin rusak atau hilang pun dapat dihindari dengan sistem yang ada saat ini. Selain itu, kami juga memberikan kontribusiyang positif terhadap lingkungan sekitar dengan berkurangnya pemakaian kertas yang selama ini kami lakukan.</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h4 class="new3">Q: Bagaimana pengalaman kerjasama Anda dengan LOGIQUE dalam pembuatan sistem ini?</h4>
								<p>Klien: Menurut kami tim LOGIQUE benar-benar diisi oleh orang-orang ahli dan berpengalaman di bidangnya. Saya tidak bisa membayangkan bagaimana proses bisnis kami yang kompleks tersebut dapat dibuat menjadi sistem yang komprehensif termasuk proses-proses kecil yang tidak dapat terlewat sehingga semuanya dapat dipenuhi. Kami merasa sangat puas dengan kinerja LOGIQUE dengan timnya dan merekomendasikan layanan mereka ke semua pihak yang membutuhkan.</p>
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
								<h1 class="new2">Tingkatkan Bisnis Anda Bersama LOGIQUE</h2>
								<div class="new2-div">LOGIQUE selalu memberikan pelayanan yang optimal dengan mengedepankan kualitas terbaik terhadap seluruh kliennya. Semua hal tersebut karena LOGIQUE mempunyai 4 hal penting yang menjadi kunci utama dalam keberhasilan suatu proyek, antara lain yaitu:</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h4 class="bold">Pengalaman</h4>
								<p>Kami telah menangani lebih dari 200 proyek dari berbagai macam industri selama berkarir di Indonesia, baik dalam hal pembuatan website, pengembangan sistem web, ataupun pembuatan dan pengembangan aplikasi mobile.</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h4 class="bold">Kecepatan</h4>
								<p>Bagi Kami, waktu merupakan hal terpenting yang tidak dapat kami kesampingkan begitu saja. Karena itu, LOGIQUE selalu berupaya untuk bekerja seefektif dan seefisien mungkin tanpa mengurangi kualitas dari hasil proyek tersebut.</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h4 class="bold">Kualitas</h4>
								<p>Kami menerapkan metode analisa agar mampu melakukan penerapan yang terbaik dalam setiap pembuatan, pengembangan dan pengelolaan suatu proyek sehingga kualitas tetap terjaga, baik dalam aspek fungsional, performa serta tingkat keamanannya.</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h4 class="bold">Fleksibilitas</h4>
								<p>Kami mempunyai tim teknikal yang selalu terbuka untuk berdiskusi dengan Anda, baik dalam hal detail implementasi, alat, atau skema yang ingin Anda gunakan pada website, sistem web, atau aplikasi mobile yang ingin dikembangkan.</p>
							</div>
						</div>
				</div>
			</div>
		</section>

		<section class="layanan" style="margin-top: 0;padding-top: 1.5em;">
			<div class="container">
				<hr>
					<h3 class="text-center"><b>Layanan Berbasis Sewa Developer (Resource Based)</b></h3>
				<hr>
				<div class="row">
					<div class="col-md-12">
						<p class="text-justify custom-faq" style="background: white;border: dotted 2px;padding: 1em;">Selain memberikan layanan berbasis proyek, LOGIQUE juga menyediakan layanan resource based khususnya bagi Anda yang mempunyai proyek dengan kebutuhan yang dinamis. Dengan layanan ini, Anda dapat menyewa resource atau sumber daya kami, seperti Web Developer, Web Designer, Mobile Application Developer dengan jumlah yang disesuaikan dengan kebutuhan Anda dalam jangka waktu tertentu. Dalam jangka waktu yang telah ditentukan tersebut, resource kami akan terdedikasi untuk mengerjakan seluruh proyek Anda secara profesional untuk mendapatkan hasil yang terbaik bagi bisnis Anda. Untuk informasi selengkapnya, Anda dapat menghubungi kami melalui email ke info@LOGIQUE.co.id atau melalui nomor telepon di (021) 22708935/36.</p>
					</div>
				</div>
				<hr>
					<h3 class="text-center"><b>BUTUH LAYANAN LAINNYA?</b></h3>
				<hr>
				<div style="background: white;border: dotted 2px;padding: 1em;">Selain melayani pembuatan & pengembangan sistem web, LOGIQUE juga menyediakan berbagai layanan lain yang dapat Anda pilih untuk mengatasi permasalahan bisnis digital Anda.</div>
				<div class="row">
					<div class="col-md-4">
						<h2 class="custom-3">Pembuatan Sistem <br>Rekrutmen</h2>
						<p class="min-h">Untuk memudahkan Anda dalam menyaring dan berkomunikasi dengan para pencari kerja, LOGIQUE menyediakan layanan pembuatan sistem rekrutmen berbasis web untuk perusahaan Anda. Melalui sistem ini, Anda dapat melakukan proses rekrutmen dengan sangat mudah dan efisien, karena sistem yang kami buat dapat diakses dan dipahami dengan mudah.</p>
						<!-- <div>
							<a href="/layanan/pembuatan-aplikasi-mobile/" target="_blank" class="btn btn-logic btn-md">Info lebih lanjut</a>
						</div> -->
					</div>
					<div class="col-md-4">
						<h2 class="custom-3">Pembuatan Sistem <br>Evaluasi Pegawai</h2>
						<p class="min-h">Jika Anda merupakan seorang manajer yang menaungi banyak pegawai dalam sebuah perusahaan, tentunya akan kesulitan dalam mengevaluasi kinerja para stafnya. Karena itu, LOGIQUE menawarkan kepada Anda sebuah sistem aplikasi yang mampu membantu Anda dalam mengevaluasi kinerja para staf, sehingga Anda dapat mengetahui dan memberikan penilaian dari kinerja pegawai Anda secara mendetail dan transparan.</p>
						<!-- <div>
							<a href="/layanan/pembuatan-website-karir-perusahaan/" target="_blank" class="btn btn-logic btn-md">Info lebih lanjut</a>
						</div> -->
					</div>
					<div class="col-md-4">
						<h2 class="custom-3">Pembuatan Aplikasi Untuk Meningkatkan Produktivitas Karyawan</h2>
						<p class="min-h">Produktivitas karyawan merupakan salah satu penentu bagi sebuah perusahaan untuk terus maju dan berkembang. Oleh sebab itu, LOGIQUE memberikan Anda sebuah solusi cerdas yang mampu membuat produktivitas karyawan Anda meningkat, yaitu sebuah layanan pembuatan aplikasi yang mampu meningkatkan produktivitas karyawan secara mendetail dan transparan, meskipun karyawan tersebut bekerja dengan sistem jarak jauh (freelance, remote worker, dsb). Layanan ini kami berikan mulai dari Rp1 juta per-bulan.</p>
						<!-- <div>
							<a href="/layanan/penetration-testing/" target="_blank" class="btn btn-logic btn-md">Info lebih lanjut</a>
						</div> -->
					</div>
				</div>
				<br class="hidden-xs">
				<div class="row" style="background: rgba(255, 255, 255, 0.4);border: dotted 4px #ededed;">
					<div class="col-md-12">
					  <div class="custom-faq">
						<h3 class="text-center"><b>Pertanyaan Yang Sering Diajukan (FAQ)</b></h3>
						<hr>
						<h2 class="custom-3">Berapa harga pembuatan sistem web di LOGIQUE?</h2>
						<p>
						LOGIQUE melayani pembuatan sistem web dengan harga yang disesuaikan sesuai kebutuhan Anda. Untuk lebih detailnya, Anda dapat menghubungi kami melalui email ke info@logique.co.id atau melalui nomor telepon di (021) 227 089 35/36, atau dapat juga melalui WhatsApp di nomor 0812 9656 0380.</p>
						<h2 class="custom-3">Apa saja yang dibutuhkan oleh LOGIQUE dari klien untuk pembuatan sistem web?</h2>
						<p>
						Dalam pembuatan sistem web, klien perlu memberikan konsep bisnis atau fitur-fitur yang diinginkan di dalam sistem web tersebut. Jika diperlukan, Anda juga dapat menyerahkan berbagai data pendukung lainnya kepada kami.</p>
						<h2 class="custom-3">Berapa lama waktu yang dibutuhkan untuk pembuatan sistem web?</h2>
						<p>
						Pembuatan sistem web sangat bergantung dari tingkat kompleksitas dan banyaknya fitur yang diberikan oleh Anda. Untuk sistem web sederhana biasanya memerlukan waktu mulai dari 1 bulan.</p>
						<h2 class="custom-3">Bisakah LOGIQUE membuat website e-commerce?</h2>
						<p>
						Tentu, LOGIQUE telah mempunyai banyak pengalaman dalam mengerjakan berbagai website e-commerce dalam beragam bentuk dan tools. Untuk mengetahui website e-commerce apa saja yang telah kami kerjakan, Anda dapat melihatnya pada portofolio kami.</p>
						<h2 class="custom-3">Bagaimanakah LOGIQUE mengamankan sebuah sistem web?</h2>
						<p>
						LOGIQUE sadar jika keamanan sebuah sistem web merupakan hal yang paling penting, apalagi jika website tersebut adalah website e-commerce atau website yang digunakan untuk menyimpan berbagai data penting perusahaan. Karena itu, LOGIQUE memberikan layanan keamanan sistem web secara maksimal dan menyeluruh terhadap seluruh sistem web para klien kami.</p>
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
									<a href="/career/" target="_blank">Karir</a>
									<a href="/career/" target="_blank">Join LOGIQUE</a>
									<a href="/hubungi-kami.php" target="_blank">Hubungi Kami</a>
								</div>
							</div>
						</div>
						<div class="link-footer-webdev">
							<br/>
							<div style="margin-bottom:8px"><b>Social Media</b></div>
							<div class="row medsos-new">
								<div class="col-xs-3">
									<a href="https://www.facebook.com/logique.id/" target="_blank"><i class="fa fa-facebook-official" style="font-size: 35px;margin-top: 10px;"></i></a>
								</div>
								<div class="col-xs-3">
									<a href="https://twitter.com/LogiqueDigital" target="_blank"><i class="fa fa-twitter" aria-hidden="true" style="font-size: 35px;margin-top: 10px;"></i></a>
								</div>
								<div class="col-xs-3">
									<a href="https://www.instagram.com/logiquedigital/" target="_blank"><i class="fa fa-instagram" aria-hidden="true" style="font-size: 35px;margin-top: 10px;"></i></a>
								</div>
								<div class="col-xs-3">
									<a href="https://www.linkedin.com/company/13420656" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true" style="font-size: 35px;margin-top: 10px;"></i></a>
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
									<a href="https://dokodemo-kerja.com" target="_blank" rel="noreferrer">Dokodemo-Kerja</a>
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
							<div class="">
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
									<a href="https://dokodemo-kerja.com" target="_blank" rel="noreferrer">Dokodemo-Kerja</a>
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
