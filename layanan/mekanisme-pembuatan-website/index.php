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
    <title>Mekanisme Pembuatan Website | LOGIQUE Digital Indonesia</title>
	<link href="/css/bootstrap.min.css" rel="stylesheet">	 
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
</head>
	<body>
		<header>
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
					<!-- <div class="language-btn">
						<ul class="list-inline">
							<li><a href="#">EN</a></li>
							<li class="active"><a href="#">ID</a></li>
							<li><a href="#">JP</a></li>
						</ul>
					</div> -->
					<div class="col-md-offset-3 col-md-7 m-t-10em">
						<h1 class="text-right">Mekanisme Pembuatan Websi<span class="underline">te di <span class="c-logique">Logique</span></span></h1>
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
							<p class="p-b-20">Karena Logique telah mempunyai pengalaman serta kualitas yang Anda perlukan dalam pengembangan sistem web untuk kebutuhan bisnis digital saat ini. Dengan pengalaman serta kualitas kami, dapat menjadi suatu terobosan bagi bisnis Anda.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="obstacle" style="padding-top: 20px">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-1 col-md-7 border-l text-right">
						<h2 class="text-right">Langkah-Langkah Pembuatan Website di Logique</h2>
						<p class="text-right">Untuk pembuatan sebuah website misalnya website perusahaan atau portal website yang memiliki dukungan manajemen konten (CMS), waktu yang diperlukan dari awal hingga waktu peluncuran website adalah 1 hingga 3 bulan. Apa saja yang diperlukan dalam jangka waktu tersebut? Berikut kami coba jabarkan langkah-langkah layanan pengembangan website yang dilakukan oleh Logique dengan penjelasan yang mudah dipahami.</p>
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
									<p>Tim kami siap membantu Anda dalam melakukan pengembangan website perusahaan atau portal website yang memiliki dukungan manajemen konten (CMS). Anda bisa menghubungi kami melalui email <a style="color:#333" href="mailto:info@logique.co.id"><u>info@logique.co.id</u></a> atau <a style="color:#333" target="_blank" href="/hubungi-kami.php"><u>Formulir Pemesanan</u></a> yang tersedia.</p>
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
									<p class="title-custom-p"><b>Tahap Mendengar Kebutuhan</b></p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-offset-2 col-md-10 m-t-10">
									<p>Setiap individu atau perusahaan tentunya mempunyai kebutuhan yang berbeda. Hal ini tentunya memerlukan pendekatan yang berbeda, terutama dalam konteks pembuatan website. Karena itu, kami akan fokus mendengar setiap permasalahan yang ingin diatasi dan dipenuhi oleh klien. Melalui cara seperti ini, kami dapat memberikan sebuah penawaran bagi klien, baik dari sisi manfaat dan keefektifan website tersebut.</p>
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
									<p>Setelah memahami seluruh permasalahan serta kebutuhan yang Anda butuhkan, selanjutnya kami akan membuat kerangka rencana dalam bentuk proposal. Proposal tersebut juga disertakan harga layanan serta waktu pengerjaan yang diperlukan dalam pembuatan website tersebut. Harga serta waktu yang kami berikan telah berdasarkan metode transparan serta tingkat kesulitan dan banyaknya anggota tim yang diperlukan untuk menyelesaikannya. Hal ini tentu membuat budget menjadi lebih efektif. Selain itu, kami juga akan memberikan layanan opsional, seperti fotografi, videografi dan pembuatan konten.</p>
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
									<p>Jika Anda sudah setuju dengan penawaran yang kami ajukan, maka proses berikutnya adalah penandatanganan kontrak dan pembayaran uang muka sebesar 50%. Segera setelah proses kontrak dan pembayaran selesai kami dapat mulai mengerjakan website Anda.</p>
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
									<p class="custom-p-2"><b>Tahap Konfirmasi Kebutuhan</b></p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-offset-2 col-md-10 m-t-10">
									<div class="border-right-custom"></div>
									<p>Sebelum memulai proyek, kami akan melakukan konfirmasi serta melakukan pendetilan kebutuhan dengan Anda. Hal ini bertujuan agar tidak ada poin-poin yang terlewat sehingga menimbulkan kendala suatu saat nanti. Pada tahap ini, kami membutuhkan kerjasama Anda untuk meeting dan berdiskusi dengan kami. Setiap poin yang dibahas akan kami rangkum ke dalam dokumen daftar fitur yang selanjutnya akan kami buatkan kerangka (wireframe) yang dapat digunakan sebagai acuan di tahap selanjutnya.</p>
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
									<p>Pada tahap ini, kami akan memulainya dengan membuat konsep halaman utama (homepage) yang telah disesuaikan dengan petunjuk dari desain perusahaan Anda atau referensi yang Anda berikan. Tim desainer kami selanjutnya akan memberikan beberapa alternatif desain kepada Anda untuk dipilih dan dilakukan revisi jika diperlukan. Biasanya maksimal revisi yang bisa kami berikan adalah sebanyak 3 kali. Setelah desain halaman utama Anda setujui, selanjutnya kami akan membuat desain untuk semua halaman yang lainnya.</p>
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
									<p>Saat desain sedang diproses, kami akan mulai dengan mempersiapkan rancangan proyek fungsional dimana di dalamnya termasuk arsitektur data serta website itu sendiri. Setelah dasar arsitektur telah terbentuk, selanjutnya kami akan masuk ke dalam pengerjaan fungsional untuk setiap fitur. Konsep seperti ini kami buat demi memastikan website yang telah kami buat telah terstruktur dengan baik.</p>
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
									<p>Terdapat beberapa kategori pengetesan yang kami lakukan di tahap ini, antara lain yaitu pengetesan internal, demonstrasi serta pengetesan yang melibatkan klien. Pengetesan internal dilakukan ketika setiap fitur telah dikerjakan oleh web developer. Hal ini bertujuan untuk memastikan website telah berjalan dengan baik sebelum diberikan kepada klien. Setelah semua selesai, kami secara berkala akan melakukan demonstrasi fitur-fitur yang telah selesai dikembangkan kepada klien, dimana klien akan dapat langsung memberikan masukan kepada kami mengenai fitur-fitur tersebut. Ketika proyek telah memasuki tahap finalisasi, maka akan dilakukan pengetesan bersama klien sebagai bukti bahwa semua fungsi telah dikonfirmasi oleh klien dan berjalan dengan baik.</p>
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
									<p>Tahapan ini merupakan yang paling ditunggu oleh para klien kami, dimana peluncuran website siap dilakukan pada tanggal yang telah disepakati bersama. Jika Anda mempunyai data lama dari website Anda, maka pemindahan data ke dalam website baru membutuhkan waktu selama 1-3 hari. Hal ini tentunya perlu diperhitungkan sebelum menentukan tanggal peluncuran website tersebut. Bersamaan dengan itu, kami juga akan menagih pembayaran terakhir sebesar 50% kepada Anda.</p>
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
									<p>Setelah website diluncurkan bukanlah akhir dari semua, akan tetapi justru menjadi permulaan. Sebab, Anda perlu mengelola website tersebut dengan baik agar memberikan hasil yang maksimal. Logique menyediakan layanan pengelolaan, mulai dari pengamatan sistem atau melakukan pengoperasian sehari-hari sehingga memudahkan Anda. Banyak klien kami yang telah bekerja bersama kami selama lebih dari 3 tahun dan hingga kini kami terus memberikan layanan maksimal kepada mereka untuk menciptakan hubungan kerjasama jangka panjang.</p>
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
						<h2 class="m-m-10">Layanan di LOGIQUE</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<h2 class="custom-3">Pengembangan Aplikasi Mobile</h2>
						<p class="min-h">Kami melayani pengembangan aplikasi Android/ iOS yang sesuai dengan pasar Indonesia. Tidak hanya merancang atau mengimplementasikan teknologi baru, tetapi kami juga mengoptimalkan UI dan UX, desain, pengembangan aplikasi, hingga membantu Anda mendaftarkan aplikasi ke App Store / Google Play. Sebuah layanan yang komprehensif untuk Anda. </p>
						<div>
							<a href="" class="btn btn-default btn-logic btn-md">Info lebih lanjut</a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="border-top-custom-2 hidden-xs hidden-sm">Layanan di LOGIQUE</div>
						<h2 class="custom-3">Website Karir</h2>
						<p class="min-h">Sekarang semakin sulit bagi perusahaan untuk mendapatkan karyawan ideal yang sesuai dan cocok dengan bisnis yang dijalankan. Halaman karir website perusahaan Anda adalah salah satu faktor penting untuk kesuksesan perekrutan. Halaman ini dapat menjadi kunci untuk memberitahu pengunjung tentang perusahaan Anda, suasana kerja, keuntungan bekerja diperusahaan Anda, dan karyawan yang Anda cari dengan jelas misalnya menggunakan video interview. Kami memiliki banyak pengalaman dalam pembuatan website yang terkait dengan rekrutmen atau halaman karir. </p>
						<div>
							<a href="" class="btn btn-default btn-logic btn-md">Info lebih lanjut</a>
						</div>
					</div>
					<div class="col-md-4">
						<h2 class="custom-3">Pengetesan Keamanan Website (VA Test)</h2>
						<p class="min-h">Kami dapat melakukan pengetesan dan melaporkan temuan-temuan kami terkait celah keamanan website Anda. Dengan mengetahui celah keamanan tersebut Anda dapat melakukan tindakan pencegahan dari tindak kejahatan digital seperti injeksi SQL, cross-site scripting, session jacking, dan lain-lain. Tim ahli kami akan melakukan tes dengan menggunakan alat-alat pemindaian serta menganalisa temuan-temuan untuk dituangkan ke dalam laporan. Layanan ini kami sediakan mulai dari 10,000,000 Rupiah.</p>
						<div>
							<a href="" class="btn btn-default btn-logic btn-md">Info lebih lanjut</a>
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
						<ul>
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
						<div>021) 22708935 / 36 <br>081296560380</div>
					</div>
					<div class="col-md-4 hidden-md hidden-lg">
						<span><hr>Sebagai tim yang profesional dalam bidang jasa pembuatan website, LOGIQUE menyediakan solusi terbaik yang teroptimasi untuk bisnis Anda. Selain jasa pembuatan website, LOGIQUE juga menyediakan jasa lainnya seperti jasa konsultasi digital, jasa pembuatan aplikasi, desain web, pengembangan web system, jasa SEO dan percetakan. Kami memberikan rancangan terstruktur secara detil baik untuk pembuatan website perusahaan, aplikasi, maupun pembuatan website atau sistem berskala besar dengan kombinasi desain yang terarah dan arsitektur sistem yang baik.</span>
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
										<textarea name="" id="" cols="30" rows="6" class="form-control" placeholder="Pesan" name="message"><?php echo $formproc->SafeDisplay('message') ?></textarea>
									</div>
									<div class="form-group">
										<div class="g-recaptcha captcha-custom" data-sitekey="6LcuHywUAAAAACj__hCefsBCkoIC2ExM2Sur4cCp"></div>
									</div>
									<div class="form-group text-right">
											<br>
											<button type="submit" class="btn btn-logic btn-sm">Kirim</button>
									</div>
							</div>
						</form>
					</div>
					<div class="col-md-4 hidden-xs hidden-sm">
						<p>Sebagai tim yang profesional dalam bidang jasa pembuatan website, LOGIQUE menyediakan solusi terbaik yang teroptimasi untuk bisnis Anda. Selain jasa pembuatan website, LOGIQUE juga menyediakan jasa lainnya seperti jasa konsultasi digital, jasa pembuatan aplikasi, desain web, pengembangan web system, jasa SEO dan percetakan. Kami memberikan rancangan terstruktur secara detil baik untuk pembuatan website perusahaan, aplikasi, maupun pembuatan website atau sistem berskala besar dengan kombinasi desain yang terarah dan arsitektur sistem yang baik.</p>
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